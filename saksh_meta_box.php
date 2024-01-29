<?php
 

function saksh_add_room_type_taxonomies() {
 
 
  register_taxonomy('room_type', 'rooms', array(
   
   
    'hierarchical' => true,
   
   
    'labels' => array(
      'name' => _x( 'Room type', 'taxonomy general name' ),
      'singular_name' => _x( 'Room type', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Room type' ),
      'all_items' => __( 'All Room type' ),
     
      'edit_item' => __( 'Edit Room type' ),
      'update_item' => __( 'Update Room type' ),
      'add_new_item' => __( 'Add New Room type' ),
      'new_item_name' => __( 'New Room type Name' ),
      'menu_name' => __( 'Room type' ),
    ),
    
    
    'rewrite' => array(
      'slug' => 'room_type',
      
      'with_front' => false,
      
      'hierarchical' => false 
      
    ),
  ));
}
add_action( 'init', 'saksh_add_room_type_taxonomies', 0 );




function saksh_add_amenity_taxonomies() {
 
 
  register_taxonomy('amenities', 'rooms', array(
   
   
    'hierarchical' => true,
   
   
    'labels' => array(
      'name' => _x( 'Amenities', 'taxonomy general name' ),
      'singular_name' => _x( 'Amenity', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Amenities' ),
      'all_items' => __( 'All Amenities' ),
      'parent_item' => __( 'Parent Amenity' ),
      'parent_item_colon' => __( 'Parent Amenity:' ),
      'edit_item' => __( 'Edit Amenity' ),
      'update_item' => __( 'Update Amenity' ),
      'add_new_item' => __( 'Add New Amenity' ),
      'new_item_name' => __( 'New Amenity Name' ),
      'menu_name' => __( 'Amenities' ),
    ),
    
    
    'rewrite' => array(
      'slug' => 'amenities',
      
      'with_front' => false,
      
      'hierarchical' => true 
      
    ),
  ));
}
add_action( 'init', 'saksh_add_amenity_taxonomies', 0 );








function saksh_save_meta_box_data($post_id)
{
   
    // Check if our nonce is set.
    if (!isset($_POST['saksh_nonce'])) {
        return;
    }
    
  

    // Verify that the nonce is valid.
    if (!wp_verify_nonce($_POST['saksh_nonce'], 'saksh_nonce')) {
        return;
    }
 
 
    // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check the user's permissions.
    if (isset($_POST['post_type']) && 'page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return;
        }
    } else {
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }
    }

 
 
   
     $total_rooms  = get_post_meta( $post->ID, 'total_rooms', true );
    
    
    $rate_per_night_value = intval(sanitize_text_field( $_POST['rate_per_night'] ));
    if ( ! $rate_per_night_value ) {
      $rate_per_night_value = 0;
    }
    
  
    update_post_meta($post_id, 'rate_per_night', $rate_per_night_value);
    
    
    
    
    
    $total_rooms = intval(sanitize_text_field( $_POST['total_rooms']) );
    if ( ! $total_rooms ) {
      $total_rooms = 0;
    }
    
  
    update_post_meta($post_id, 'total_rooms', $total_rooms);
    
    
    $other_room_details = sanitize_text_field(  $_POST['other_room_details']);
    
  
    update_post_meta($post_id, 'other_room_details', $other_room_details);
    
    $room_short_intro = sanitize_text_field( $_POST['room_short_intro']);
    
  
    update_post_meta($post_id, 'room_short_intro', $room_short_intro);
    
     
    
    
}

add_action('save_post', 'saksh_save_meta_box_data');

add_action('update_post', 'saksh_save_meta_box_data');

 
function saksh_meta_box_callback_short_intro($post)
{
    $room_short_intro = html_entity_decode(
        get_post_meta($post->ID, 'room_short_intro', true)
    );

    $content = $room_short_intro;
    $editor_id = 'room_short_intro';

   global $settings;


    wp_editor($content, $editor_id );
}

function saksh_meta_box_callback_rate_per_night($post)
{
 
   wp_nonce_field('saksh_nonce', 'saksh_nonce');
 $rate_per_night_value = get_post_meta( $post->ID, 'rate_per_night', true );

 
     $total_rooms  = get_post_meta( $post->ID, 'total_rooms', true );
    
    ?>
    
  <label for="rate_per_night"><?php _e('Rate per night', 'saksh'); ?></label><br>
  
  <input class="input" type="text" id="rate_per_night" name="rate_per_night" value="<?php echo esc_attr($rate_per_night_value); ?>" required><br>
  <br>
  
  <label for="rate_per_night"><?php _e('Total Rooms', 'saksh'); ?></label><br>
  
  <input class="input" type="text" id="total_rooms" name="total_rooms" value="<?php echo esc_attr( $total_rooms); ?>" required><br>
  <br>
  
  <?php
}
function saksh_meta_box_callback_other_details($post)
{
    $other_room_details = html_entity_decode(
        get_post_meta($post->ID, 'other_room_details', true)
    );

    $content = $other_room_details;
    $editor_id = 'other_room_details';

   global $settings;
	

    wp_editor($content, $editor_id );
}


function saksh_meta_box()
{
    $screens = [ 'rooms'];

    foreach ($screens as $screen) {
       
     

  add_meta_box(
            'short_intro',
            __('Short intro', 'saksh'),
            'saksh_meta_box_callback_short_intro',
            $screen
        );
        
        
            add_meta_box(
            'saksh_rate_per_night',
            __('Booking data', 'saksh'),
            'saksh_meta_box_callback_rate_per_night',
            $screen
        );

       

  add_meta_box(
            'other_details',
            __('Other details', 'saksh'),
            'saksh_meta_box_callback_other_details',
            $screen
        );
        
        
    }
}

add_action('add_meta_boxes', 'saksh_meta_box');

