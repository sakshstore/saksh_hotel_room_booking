 
   
   
<div class="container ">
  <div class="row">
    <div class="col ">
  
 
 
    
     <?php
     
  
     if (!empty($_POST))
  {
      
 
 global $wpdb;
 
 $table_name= $wpdb->prefix ."bookings";
 
 
  
    $date_start = sanitize_text_field($_POST['date_start']);
    
    $date_end =sanitize_text_field($_POST['date_end']);  
    
    
    $adult  =sanitize_text_field($_POST['adult']);   
    $kid  =sanitize_text_field($_POST['kid']);   
  $no_rooms=sanitize_text_field($_POST['no_rooms']);  
  
  
   
    
    
     
     
      $cart_item_data = array( 'date_start' => $date_start , "date_end"=>$date_end ,'adult'=>$adult,"kid"=>$kid , "no_rooms"=>$no_rooms);


	  
	  
	  $res=saksh_get_rooms_which_r_available( $cart_item_data);
	  
	  
	   
      echo "<hr/>";
 
    $args = array( 'post_type' => 'rooms','post__in' =>$res['room_id']);


 
 
$the_query = new WP_Query( $args ); 

if ( $the_query->have_posts() )

{
   
    while ( $the_query->have_posts() )
    
    {
         
 $the_query->the_post();
        
      $post_id=get_the_ID();
           
 $rate_per_night_value = get_post_meta($post_id, 'rate_per_night', true );
 $other_room_details = get_post_meta($post_id, 'other_room_details', true );
 $room_short_intro = get_post_meta( $post_id, 'room_short_intro', true );
     
     
        
        ?>
        
        <div class="row mb-5">
            
            
        
        <div class="col-md-12">
            
            
           <?php  echo   the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'title' => 'Feature image']);
            
             ?>
            
            </div>
            
            
            
            
        <div class="col-md-9">
            <?php   the_title(); ?>
            
             <?php  
 echo esc_html_e($room_short_intro , "saksh");   ?>
   
 
                <?php  
 echo esc_html_e($rate_per_night_value , "saksh");  ?>
                
           
                <?php  
 echo esc_html_e($other_room_details , "saksh");    ?>
                
                          
     <form action="" method="post">
          
  
  
  <input type="hidden"   value="book_now" name="saksh_case" /> 
  
    
  
  
   
  <input type="hidden"  value="<?php echo  esc_attr($post_id);?>" name="room_id" /> 
     
 <?php
 
 
 foreach ($cart_item_data as $key => $value) {
 
    echo '<input type="hidden"   value="'.esc_attr($value).'" name="'.esc_attr($key).'" />';
}


?> 
 
   
 <input type="submit" value="Book now"  class="saksh_booking" />
     </form>
            </div>
            
            
        <div class="col-md-3">
             <?php
 
  
 
 $amenities_list = get_the_terms( $post_id, 'amenities');
 
 if($amenities_list )
 
 {
     
 
$types ='';
foreach($amenities_list as $term_single) {
    
    if(isset($term_single->slug) )
     $types .= ucfirst($term_single->slug).', ';
     
     
}
$typesz = rtrim($types, ', ');


echo esc_attr($typesz);

}
   ?>
            </div>
            
        </div>
        
        
        	
               
             
                
     
         
            
    
          
        
        
        
        <?php
        
        
       
      
        
        
       
        
 
 
    }
    
}
else
{
 
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );

}



echo "</table>";
wp_reset_postdata();
 


 
 }
 else
 {
 
 ?> <div class="saksh saksh_form">
     <form action="" method="post">
         
         
 
 
   
 
 
 
 
 
<h2 class='date_start'>From</h2>
 <div class="date_start">
     
 
<input type="date" class="form-control" name="date_start" />
     
 </div>
  
  
<h2 class='date_end'>To</h2>
 <div class="date_end">
     
 
<input type="date" class="form-control" name="date_end" />
     
 </div>
 
 
 <h2 class='adult'>Adults</h2>
 <div class="adult">
     
 
<input type="number"  class="form-control" name="adult" />
     
 </div>
 
   <h2 class='kid'>Kids</h2>
 <div class="kid">
     
 
<input type="number" class="form-control" name="kid" />
     
 </div>
 
  <h2 class='no_rooms'>No of rooms</h2>
 <div class="no_rooms">
     
 
<input type="number" class="form-control" name="no_rooms" />
     
 </div>
 
  <br />
   
 <input type="submit" value="Search Room"  class="button button-primary button-large   saksh_booking" />
     </form>
 </div>
     
     <?php
     
 }
 
 ?>
 
 </div>
 
     
 
 
 
 
 
 
 

</div> 

</div>

</div>

</div>


 