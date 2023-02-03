<?php

function meta_boxes(){
    add_meta_box('solutions_id', __('Button'), 'solutions_meta_boxes_function', 'solutions', 'normal', 'high');
    add_meta_box('solutions_id2', __('Icon'), 'solutions2_meta_boxes_function', 'solutions', 'side', 'low');
}
add_action('add_meta_boxes', 'meta_boxes');


function solutions_meta_boxes_function($post){
    wp_nonce_field(basename(__FILE__), 'wp_nonce');
    
    $solutions_btn_text = get_post_meta($post->ID, "solutions_btn_text", true);
    $solutions_btn_link = get_post_meta($post->ID, "solutions_btn_link", true);
    
?>
    <div class="tablenav">
        <div class="alignleft actions">
            <label for="solutions_btn_text">Button Text</label>
            <input type="text" name="solutions_btn_text" value="<?php echo $solutions_btn_text; ?>" id="solutions_btn_text">
        </div>
        <div class="alignleft">
            <label for="solutions_btn_link">Button Link</label>
            <select name="solutions_btn_link" id="solutions_btn_link">
                <option value="">Select Page</option>
                <?php
                $pages = get_pages();
                foreach($pages as $page){ 
                    echo $page->ID;
                    $selected = ( $page->ID == $solutions_btn_link ) ?'selected' : '';
                    ?>
                    <option <?php echo $selected; ?> value="<?php echo $page->ID; ?>"><?php echo $page->post_title; ?></option>
                <?php }
                ?>
            </select>
        </div>
    </div>
    
<?php 
}

function solutions2_meta_boxes_function($post){
    wp_nonce_field(basename(__FILE__), 'wp_nonce'); 
    $solutions_icon = get_post_meta( $post->ID, 'solutions_icon', true);
    $image_url = $solutions_icon != '' && wp_get_attachment_image_src($solutions_icon) ? wp_get_attachment_image_src($solutions_icon)[0] : ''; 
?>  
    <div id="<?php echo 'solutions_icon'; ?>_wrapper">
        <div class="editor-post-featured-image__container">
            <button type="button" class="addimage components-button <?php echo $image_url != '' ? 'editor-post-featured-image__preview' : 'editor-post-featured-image__toggle' ;?>" onclick="set_image('<?php echo 'solutions_icon'; ?>');">
                <?php echo $image_url != '' ? '<span class="components-responsive-wrapper"><img src="'.$image_url.'"></span>' : 'Set featured image' ; ?>
            </button>
        </div>

        <a href="#" class="removeimage" style="color:#a00;cursor:pointer;display: <?php echo ($solutions_icon !='' ? 'block':'none'); ?>" onclick="remove_image('<?php echo 'solutions_icon'; ?>');">Remove featured image</a>
        <input type="hidden" name="<?php echo 'solutions_icon'; ?>" id="<?php echo 'solutions_icon'; ?>" value="<?php echo $solutions_icon; ?>" />
    </div>
<?php }

add_action('admin_enqueue_scripts', 'admin_enqueue_function');

function admin_enqueue_function() {
    wp_enqueue_script('solutions_icon_meta_box', get_template_directory_uri() . '/inc/js/thumbnail.js', array('jquery'), null, true);
}

add_action("save_post", "save_meta_box", 10, 2);
function save_meta_box($post_id, $post){
    // nonce verify
    if(!isset($_POST["wp_nonce"]) || !wp_verify_nonce($_POST["wp_nonce"], basename(__FILE__))){
        return $post_id;
    }
    
    // save data to database
    $solutions_btn_text = isset($_POST["solutions_btn_text"]) ? sanitize_text_field($_POST["solutions_btn_text"]) : "";
    $solutions_btn_link = isset($_POST["solutions_btn_link"]) ? sanitize_text_field($_POST["solutions_btn_link"]) : "";

    $solutions_icon = isset($_POST["solutions_icon"]) ? $_POST["solutions_icon"] : "";
    

    update_post_meta($post_id, "solutions_btn_text", $solutions_btn_text);
    update_post_meta($post_id, "solutions_btn_link", $solutions_btn_link);
    update_post_meta($post_id, "solutions_icon", $solutions_icon);
}