<?php

function meta_boxes(){
    // section post type
    add_meta_box('section_page_list', __('Page'), 'page_list_meta_box_function', 'section', 'side', 'low');
    add_meta_box('section_video', __('Featured Video'), 'attachment_meta_box_function', 'section', 'side', 'high', array( 'type' => 'video'));
    add_meta_box('__section_name', __('Section'), 'custom_options', 'section', 'side', 'low', array( 
        'options' => ['Banner', 'Our Contact Vehicles & Certifications']
    ));
    add_meta_box('__section_button', __('Button'), 'page_btn_meta_boxes_function', 'section', 'normal', 'high');

    // solutions
    add_meta_box('solutions_id', __('Button'), 'page_btn_meta_boxes_function', 'solutions', 'normal', 'high');
    add_meta_box('solution_icon', __('Icon'), 'attachment_meta_box_function', 'solutions', 'side', 'low', array( 'type' => 'image'));

    add_meta_box('what_we_do_id', __('Button'), 'page_btn_meta_boxes_function', 'what_we_do', 'normal', 'high');
}
add_action('add_meta_boxes', 'meta_boxes');

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
    $type = $arg['args']['type'];
    wp_nonce_field(basename(__FILE__), 'wp_nonce'); 
    $attachment = get_post_meta( $post->ID, 'attachment', true);
    $attachment_url = $attachment != '' && wp_get_attachment_url($attachment) ? wp_get_attachment_url($attachment) : '';
?>  
    <div id="<?php echo 'attachment'; ?>_wrapper">
        <div class="editor-post-featured-image__container">
            <button type="button" class="add<?php echo $type; ?> components-button <?php echo $attachment_url != '' ? 'editor-post-featured-image__preview' : 'editor-post-featured-image__toggle' ;?>" onclick="set_attachment('<?php echo 'attachment'; ?>', '<?php echo $type; ?>');">
                <?php echo $attachment_url != '' ? $type === 'image' ? '<span class="components-responsive-wrapper"><img src="'.$attachment_url.'"></span>' : '<span class="components-responsive-wrapper"><video width="100%" height="160" controls> <source src="'.$attachment_url.'" type="video/mp4"> Your browser does not support the video tag. </video></span>' : 'Set featured '. $type ; ?>
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
    $section = get_post_meta($post->ID, "section", true);

    $options = $arg['args']['options'];
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


function page_btn_meta_boxes_function($post){
    wp_nonce_field(basename(__FILE__), 'wp_nonce');
    
    $btn_text = get_post_meta($post->ID, "btn_text", true);
    $btn_link = get_post_meta($post->ID, "btn_link", true);
    
?>
    <div class="tablenav">
        <div class="alignleft actions">
            <label for="btn_text">Text</label>
            <input type="text" name="btn_text" value="<?php echo $btn_text; ?>" id="btn_text">
        </div>
        <div class="alignleft">
            <label for="btn_link">Link</label>
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

    $btn_text = isset($_POST["btn_text"]) ? sanitize_text_field($_POST["btn_text"]) : "";
    $btn_link = isset($_POST["btn_link"]) ? sanitize_text_field($_POST["btn_link"]) : "";

    
    
    

    update_post_meta($post_id, "btn_text", $btn_text);
    update_post_meta($post_id, "btn_link", $btn_link);
}