<?php


 
function saksh_admin_style() {
    


$url=esc_url( plugins_url( 'assets/css/saksh-admin.css', __FILE__ ) ); 
    
    
    
  wp_enqueue_style('saksh-admin-styles',$url); 
  
  
  
  
  
}


add_action('admin_enqueue_scripts', 'saksh_admin_style');
 
function saksh_script_style() {
    
    
 
  
  
$url=esc_url( plugins_url( 'assets/css/saksh.css', __FILE__ ) ); 
    
    
    
  wp_enqueue_style('saksh-styles',$url);
  
  
}

 

 
add_action( 'wp_enqueue_scripts', 'saksh_script_style' );


add_action( 'admin_enqueue_scripts', 'saksh_enqueue_my_script' );
function saksh_enqueue_my_script() {
    
    
    wp_enqueue_script( 'saksh_js', plugin_dir_url(__FILE__).'assets/js/saksh-admin.js', array('jquery'), null, true );

 


     wp_localize_script( 'saksh_js', 'saksh_object',
            array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ,'saksh_report_url'=>'https://bhagvadgita.ukbestdeal.com/wp-admin/admin.php'  ) );
            
            
    
    
    
    
    wp_enqueue_script( 'saksh_js',  'https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js', array(), null, true );
		    
		        
    
}


