<?php

 
  
 
 /**
 * Register a custom menu page.
 */
function date_wise_booking_menu_page(){
	add_menu_page( 
		__( 'Date wise Booking Report', 'saksh' ),
		'Date wise Booking Report',
		'manage_options',
		'date_wise_booking',
		'print_report',
		 '',
		6
	); 
}
add_action( 'admin_menu', 'date_wise_booking_menu_page' );



function print_report(){
    
    
    if(isset($_REQUEST['request_date']))
    {
        
    $request_date=sanitize_text_field($_REQUEST['request_date']);
        
    booking_by_date($request_date);
    
    }else
    {
     date_wise_booking();
    }
    

}
function date_wise_booking(){
	
	
	
	
	
 
 
		?>
		<div class="  wrap">
 
		    
		        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>
		  <h1 class="wp-heading-inline">
		      
		      <?php _e('All list of booking', 'saksh'); ?>
		      
		       
		      	 
		      		
</h1>  
	
	
 
    <div id='calendar'></div>
		<?php
		
		 
		
		
 
	 echo "</div>";


 
	
	
}




function booking_by_date($request_date){
	
	
	
	 	global $wpdb;
 
		
		
		
		
	//	$sql="SELECT * FROM {$wpdb->prefix}bookings where booking_date=date('".$request_date."')";
		
		
 
	$sql=	$wpdb->prepare(
	"SELECT * FROM {$wpdb->prefix}bookings  WHERE `booking_date` =date(%s)",  
$request_date
);

	

		$results = $wpdb->get_results( $sql  );
		?>
		<div class="  wrap">
 
		    
		    
		  <h1 class="wp-heading-inline">
All list of booking</h1>  
	
		
		<?php
		
	 echo "<table class=' table wp-list-table widefat    '>";
	 
	  
	  
	  
      echo "<tr>";
      
       echo "<td> Booking ID </td>";
       
   
       
       echo "<td> Date start </td>";
       
       echo "<td> Date end </td>";
          echo "<td> Name </td>";
       
       echo "<td> Email </td>";
          
        echo "<td> Phone </td>";
       echo "<td> Adult </td>";
       
       echo "<td>Kid </td>";
       
       
        echo "<td>No rooms </td>";
       
       echo "<td> Room number </td>";
       
        echo "<td> Total Charge</td>";
        
          
        echo "<td>Order ID </td>"; 
          
     
       
       echo "<td>Created at </td>";
       
       
       
       echo "<td>Status </td>";
       
       echo "</tr>";
	 
	 
  foreach( $results as $res)
  {
       
      echo "<tr>";
      
       echo "<td>";
      echo  esc_attr( $res->id );
       echo "</td>";
      
       
       echo "<td>";
      echo  esc_attr($res->date_start );
       echo "</td>";
       
       echo "<td>";
      echo  esc_attr($res->date_end );
       echo "</td>";
       
       
               
        echo "<td>";
      echo  esc_attr($res->name );
       echo "</td>";
       
       echo "<td>";
      echo  esc_attr($res->email );
       echo "</td>";
          
        echo "<td>";
      echo  esc_attr($res->phone );
       echo "</td>";
       
       
       
       echo "<td>";
      echo   esc_attr($res->adult );
       echo "</td>";
       
       echo "<td>";
      echo   esc_attr($res->kid );
       echo "</td>";
       
       
        echo "<td>";
      echo  esc_attr($res->no_rooms );
       echo "</td>";
       
       echo "<td>";
      echo  esc_attr($res->room_number );
       echo "</td>";
       
        echo "<td>";
      echo  esc_attr($res->total_charge );
       echo "</td>";
       
     
          
        echo "<td>";
      echo  esc_attr($res->order_id );
       echo "</td>";
       
    
       echo "<td>";
      echo  esc_attr($res->created_at );
       echo "</td>";
       
       
       
       echo "<td>";
      echo  esc_attr($res->status );
       echo "</td>";
       
       
       
       
        
      echo "</tr>";
  }
   
 
	 echo "</table>";
 
	 echo "</div>";


 
	
	
}