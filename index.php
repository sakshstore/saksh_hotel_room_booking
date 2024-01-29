<?php

/*
Plugin Name: Saksh Hotel Room Bookings
Version:  1.0
Plugin URI: #
Author: susheelhbti
Author URI: http://www.sakshamapp.com/
Description: Saksh Hotel Room Bookings


*/

 
 include "saksh_enqueue.php";
 
 include "saksh_ajax.php";

 include "saksh_util.php";

 include "saksh_rooms_custom_post.php";
 include "saksh_wchook.php";
 include "saksh_meta_box.php";

 include "saksh_admin/saksh_booking_report.php";

 
 




add_action('wp_footer', 'saksh_book_room'); 
function saksh_book_room() { 



   if (!empty($_REQUEST['saksh_case'])   )  
    
  {
      
      
   if (sanitize_text_field( $_REQUEST['saksh_case']) == "book_now" )    
   {
   
    
     $room_id = sanitize_text_field($_POST['room_id']);
    
    
     $date_start = sanitize_text_field($_POST['date_start']);
    
    $date_end =sanitize_text_field($_POST['date_end']);  
    
    
    $adult  =sanitize_text_field($_POST['adult']);   
    $kid  =sanitize_text_field($_POST['kid']);   
  $no_rooms=sanitize_text_field($_POST['no_rooms']);  
 
 
  
 $rate_per_night = get_post_meta($room_id, 'rate_per_night', true );
 
  
  
  $startdate = strtotime($date_start);
$enddate = strtotime($date_end);

$days =saksh_date_diff_in_days($date_start, $date_end);

 
 
  $total_charge= $no_rooms * $rate_per_night  * $days;
  
  
   
   
    
   
     $product_id = get_saksh_hotel_booking_product() ; // product ID to add to cart
     
      
     var_dump($product_id);
     
     
       $cart_item_data = array( 'date_start' => $date_start , "date_end"=>$date_end ,'adult'=>$adult,"kid"=>$kid , "no_rooms"=>$no_rooms ,'room_id'=> $room_id ,  "rate_per_night"=>$rate_per_night,'total_charge'=>$total_charge);
       
       
   
     var_dump($cart_item_data);
     
   
 
 
 $available=saksh_check_availability($cart_item_data);
 


     var_dump($available);
 if($available=="true")
 {
     


   
		WC()->cart->empty_cart();
 WC()->cart->add_to_cart( $product_id , 1, '', array(), $cart_item_data);
	 
		
 $cart_page = wc_get_cart_url();

     var_dump($cart_page);
//	echo '<meta http-equiv="refresh" content="0; URL= '.esc_url($cart_page ).'" />';
	 
		
						
					 
  }}
  
  
}
}

 


function saksh_room_search_func(){
    
	ob_start();
	
	include "saksh_room_search_v2.php" ;
    
$content = ob_get_clean();
return $content;
    
}




add_shortcode( 'SakshRoomSearch', 'saksh_room_search_func' );

function saksh_get_rooms_which_r_available( $query_data)
{
    
    
	 
$rooms =   get_posts(array(
    'post_type' => 'rooms',
    'post_status' => 'publish'
));


$room_data=array();

$room_id=array();
 
foreach($rooms as  $room)
{
    
  $row=array();
  
  $row=$query_data;
  
  
    
    $row['room_id']=$room->ID;
    
  $row['room']=$room;
    
   
   
 $available =saksh_check_availability($row);
 
 
 $row['available']=$available;
 
 
 
 
  if($available=="true" )
        {
            $room_data[]=$row ;
     $room_id[]=$room->ID;
     
        }
   
        
     
}

$res=array();

$res['room_data']=$room_data;
$res['room_id']=$room_id;

 return  $res;
  
  
}


function saksh_check_availability($query_data)
{
    
    
     $available="true";
     
     $room_id=  $query_data['room_id'];
     
     
     
     $total_rooms  = get_post_meta( $room_id, 'total_rooms', true );
     
     
   $total_rooms=intval($total_rooms);
    
    
    
	 $required_room=intval($query_data['no_rooms']) ;
	 
    
    $startdate = strtotime($query_data['date_start']);
$enddate = strtotime($query_data['date_end']);

while ($startdate <= $enddate) {
 
  
  
 $total_booking=saksh_get_total_booking_for_a_given_date($startdate, $room_id);
  
        
 
  
  
    $remaining= $total_rooms - $total_booking ;
   
 
 if( $remaining  > $required_room )
 {
    $available="true";
   
   

}
else
{
    $available="false";
   
   
   return $available;
   
}



  $startdate = strtotime("+1 day", $startdate); 
  
}

return $available;



}







 
  
  function saksh_get_total_booking_for_a_given_date($booking_date,$room_id)
  {
      
    
 
       global $wpdb;
		
		//$sql="SELECT  count(*) total_booking FROM {$wpdb->prefix}bookings  WHERE room_id= ".$room_id." and  booking_date =date(".$booking_date.") ";
		
		  //$res= $wpdb->get_row( $sql );
 
   $res = $wpdb->get_row( $wpdb->prepare( "SELECT  count(*) total_booking FROM  {$wpdb->prefix}bookings  WHERE room_id= %d and  booking_date =date(%s)", $room_id ,$booking_date  ) );
     
	return $res->total_booking;
	
	
      
  }
  
  
  
  








 



