<?php

function meta_boxes(){
    // section post type
    add_meta_box('section_page_list', __('Page'), 'page_list_meta_box_function', 'section', 'side', 'low');
    add_meta_box('section_video', __('Featured Video'), 'attachment_meta_box_function', 'section', 'side', 'high', array( 'type' => 'video'));
    add_meta_box('__section_name', __('Section'), 'custom_options', 'section', 'side', 'low', array( 
        'options' => ['Banner', 'Our Contact Vehicles & Certifications', 'Products', 'Who We Serve', 'Who We Serve Items', 'Media Contacts', 'Media Queries', 'Why We Exist', 'What it Means to Be a Low Profit LLC', 'How to Work with Us']
    ));
    add_meta_box('__section_button', __('Button'), 'btn_text_link_meta_boxes_function', 'section', 'normal', 'high');

    // consultancy
    add_meta_box('consulanty_button', __('Button'), 'btn_text_link_meta_boxes_function', 'consultancy', 'normal', 'high');

    // solutions
    add_meta_box('solutions_id', __('Button'), 'btn_text_link_meta_boxes_function', 'solutions', 'normal', 'high');
    add_meta_box('solution_icon', __('Icon'), 'attachment_meta_box_function', 'solutions', 'side', 'low', array( 'type' => 'image'));

    // what we do
    add_meta_box('what_we_do_id', __('Button'), 'btn_text_link_meta_boxes_function', 'what_we_do', 'normal', 'high');

    // client say
    add_meta_box('client_say_page_list', __('Page'), 'page_list_meta_box_function', 'clients_say', 'side', 'low');

    // teams
    add_meta_box('team_info_meta', __('Info'), 'input_box', 'team', 'normal', 'high', array('type' => 'external_link'));
    add_meta_box('team_btn_meta', __('Button'), 'btn_text_link_meta_boxes_function', 'team', 'normal', 'high', array('type' => 'external_link'));
    
    // event
    add_meta_box('event_date', __('Event Date'), 'date_calendar', 'event', 'side', 'high');

    // podcast
    add_meta_box('podcasts_audio', __('Audio'), 'attachment_meta_box_function', 'podcast', 'side', 'high', array( 'type' => 'audio'));

    // affiliate brands
    add_meta_box('brand_logo', __('Brand Logo'), 'attachment_meta_box_function', 'brands', 'side', 'high', array( 'type' => 'image'));
    add_meta_box('brand_text_link', __('Button'),  'btn_text_link_meta_boxes_function', 'brands', 'normal', 'high', array('type' => 'external_link'));

    // difference
    add_meta_box('difference_btn', __('Button'), 'btn_text_link_meta_boxes_function', 'difference', 'normal', 'high', array('type' => 'external_link'));
    add_meta_box('difference_size', __('Size'), 'input', 'difference', 'normal', 'high', array('type' => 'checkbox'));
}
add_action('add_meta_boxes', 'meta_boxes');

// difference
function input($post, $arg){
    $type = $arg['args']['type'];
    wp_nonce_field(basename(__FILE__), 'wp_nonce');
    $input = get_post_meta($post->ID, 'input', true);
?>
    <input type="<?php echo $type; ?>" name="input" id="input" <?php if($input){ echo 'checked'; } ?>> <label for="input">Full</label>
<?php
}
// event
function date_calendar($post){
    wp_nonce_field(basename(__FILE__), 'wp_nonce');
    $event_date = get_post_meta($post->ID, 'event_date', true);
?>
    <input style="max-width:230px;width:100%" type="datetime-local" id="event_date" name="event_date" value="<?php echo $event_date; ?>">
<?php }

// designation
function input_box($post){
    wp_nonce_field(basename(__FILE__), 'wp_nonce');
    $full_name = get_post_meta($post->ID, "full_name", true);
    $designation = get_post_meta($post->ID, "designation", true);
?>  
    <div class="tablenav">
        <div class="alignleft actions">
            <label for="full_name">Full Name</label> <br>
            <input type="text" name="full_name" value="<?php echo $full_name; ?>" id="full_name">
        </div>
        <div class="alignleft">
            <label for="designation">Designation</label> <br>
            <input type="text" name="designation" value="<?php echo $designation; ?>" id="designation">
        </div>
    </div>
<?php    
}

// page list
function page_list_meta_box_function($post){
    wp_nonce_field(basename(__FILE__), 'wp_nonce');
    $page_id = get_post_meta($post->ID, "page_id", true);
?>
    <select name="page_id" id="page_id">
        <option value="">Select Page</option>
        <?php
        $pages = get_pages();
        foreach($pages as $page){ 
            $selected = ( $page->ID == $page_id ) ? 'selected' : '';
            ?>
            <option <?php echo $selected; ?> value="<?php echo $page->ID; ?>"><?php echo $page->post_title; ?></option>
        <?php }
        ?>
    </select>
<?php
}

function attachment_meta_box_function($post, $arg){
    wp_nonce_field(basename(__FILE__), 'wp_nonce'); 
    
    $type = $arg['args']['type'];
    $attachment = get_post_meta( $post->ID, 'attachment', true);
    $attachment_url = $attachment != '' && wp_get_attachment_url($attachment) ? wp_get_attachment_url($attachment) : '';
?>  
    <div id="<?php echo 'attachment'; ?>_wrapper">
        <div class="editor-post-featured-image__container">
            <button type="button" class="add<?php echo $type; ?> components-button <?php echo $attachment_url != '' ? 'editor-post-featured-image__preview' : 'editor-post-featured-image__toggle' ;?>" onclick="set_attachment('<?php echo 'attachment'; ?>', '<?php echo $type; ?>');">
                
                <?php if($attachment_url != ''){
                    if($type === 'image') {
                        echo '<span class="components-responsive-wrapper"><img src="'.$attachment_url.'"></span>';
                    }elseif($type === 'audio'){
                        echo '<span class="components-responsive-wrapper"><audio controls class="mt-2"> <source src="'.$attachment_url.'" type="audio/mpeg"> Your browser does not support the audio element. </audio></span>';
                    }elseif($type === 'video'){
                        echo '<span class="components-responsive-wrapper"><video width="100%" height="160" controls> <source src="'.$attachment_url.'" type="video/mp4"> Your browser does not support the video tag. </video></span>';
                    }
                }else{
                    echo 'Set featured '. $type ;
                } ?>

            </button>
        </div>

        <a href="#" class="remove<?php echo $type; ?>" style="color:#a00;cursor:pointer;display: <?php echo ($attachment !='' ? 'block':'none'); ?>" onclick="remove_attachment('<?php echo 'attachment'; ?>', '<?php echo $type; ?>');">Remove featured <?php echo $type; ?></a>
        <input type="hidden" name="<?php echo 'attachment'; ?>" id="<?php echo 'attachment'; ?>" value="<?php echo $attachment; ?>" />
    </div>
<?php }

add_action('admin_enqueue_scripts', 'admin_enqueue_function');

function admin_enqueue_function() {
    wp_enqueue_script('attachment_meta_box', get_template_directory_uri() . '/inc/js/thumbnail.js', array('jquery'), null, true);
}

function custom_options($post, $arg){
    wp_nonce_field(basename(__FILE__), 'wp_nonce');
    $options = $arg['args']['options'];
    $section = get_post_meta($post->ID, "section", true);
?>
    <select name="section" id="section" style="max-width:205px;width:100%">
        <option value="">Select Section</option>
        <?php
        foreach($options as $option){ 
            $selected = ( $option == $section ) ? 'selected' : '';
            ?>
            <option <?php echo $selected; ?> value="<?php echo $option; ?>"><?php echo $option; ?></option>
        <?php }
        ?>
    </select>
<?php    
}


function btn_text_link_meta_boxes_function($post, $arg){
    wp_nonce_field(basename(__FILE__), 'wp_nonce');
    
    $type = $arg['args']['type'];
    $btn_text = get_post_meta($post->ID, "btn_text", true);
    $btn_link = get_post_meta($post->ID, "btn_link", true);
    
?>
    <div class="tablenav">
        <div class="alignleft actions">
            <label for="btn_text">Text</label> <br>
            <input type="text" name="btn_text" value="<?php echo $btn_text; ?>" id="btn_text">
        </div>
        <div class="alignleft">
            <label for="btn_link">Link</label> <br>
            <?php if($type == 'external_link') : ?>
                <input type="text" name="btn_link" value="<?php echo $btn_link; ?>" id="btn_link">
            <?php else :  ?>
                <select name="btn_link" id="btn_link">
                    <option value="">Select Page</option>
                    <?php
                    $pages = get_pages();
                    foreach($pages as $page){ 
                        $selected = ( $page->ID == $btn_link ) ? 'selected' : '';
                        ?>
                        <option <?php echo $selected; ?> value="<?php echo $page->ID; ?>"><?php echo $page->post_title; ?></option>
                    <?php }
                    ?>
                </select>
            <?php endif; ?>
        </div>
    </div>
    
<?php 
}



add_action("save_post", "save_meta_box", 10, 2);
function save_meta_box($post_id, $post){
    // nonce verify
    if(!isset($_POST["wp_nonce"]) || !wp_verify_nonce($_POST["wp_nonce"], basename(__FILE__))){
        return $post_id;
    }
    
    // save data to database
    $page_id = isset($_POST["page_id"]) ? sanitize_text_field($_POST["page_id"]) : "";
    update_post_meta($post_id, "page_id", $page_id);

    $attachment = isset($_POST["attachment"]) ? $_POST["attachment"] : "";
    update_post_meta($post_id, "attachment", $attachment);

    $section = isset($_POST["section"]) ? $_POST["section"] : "";
    update_post_meta($post_id, "section", $section);
    
    $full_name = isset($_POST["full_name"]) ? $_POST["full_name"] : "";
    $designation = isset($_POST["designation"]) ? $_POST["designation"] : "";
    update_post_meta($post_id, "full_name", $full_name);   
    update_post_meta($post_id, "designation", $designation);   
    
    $btn_text = isset($_POST["btn_text"]) ? sanitize_text_field($_POST["btn_text"]) : "";
    $btn_link = isset($_POST["btn_link"]) ? sanitize_text_field($_POST["btn_link"]) : "";
    update_post_meta($post_id, "btn_text", $btn_text);
    update_post_meta($post_id, "btn_link", $btn_link);

    // event
    $event_date = isset($_POST["event_date"]) ? sanitize_text_field($_POST["event_date"]) : "";
    update_post_meta($post_id, "event_date", $event_date);

    $input = isset($_POST["input"]) ? sanitize_text_field($_POST["input"]) : "";
    update_post_meta($post_id, "input", $input);
}