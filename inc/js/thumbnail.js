function set_image(key){

    var $wrapper = jQuery('#'+key+'_wrapper');

    custom_postimage_uploader = wp.media.frames.file_frame = wp.media({
        title: 'Select Image',
        button: {
            text: 'Select Image'
        },
        multiple: false
    });
    custom_postimage_uploader.on('select', function() {

        var attachment = custom_postimage_uploader.state().get('selection').first().toJSON();
        var img_url = attachment['url'];
        var img_id = attachment['id'];
        $wrapper.find('input#'+key).val(img_id);
        $wrapper.find('img').attr('src',img_url);
        var img = `<span class="components-responsive-wrapper"><img src="${img_url}"></span>`;
        $wrapper.find('img').show();
        $wrapper.find('a.removeimage').show();
        $wrapper.find('button.addimage').html(img);
        $wrapper.find('button.addimage').removeClass('editor-post-featured-image__toggle');
        $wrapper.find('button.addimage').addClass('editor-post-featured-image__preview');
    });
    custom_postimage_uploader.on('open', function(){
        var selection = custom_postimage_uploader.state().get('selection');
        var selected = $wrapper.find('input#'+key).val();
        if(selected){
            selection.add(wp.media.attachment(selected));
        }
    });
    custom_postimage_uploader.open();
    return false;
}

function remove_image(key){
    var $wrapper = jQuery('#'+key+'_wrapper');
    $wrapper.find('input#'+key).val('');
    $wrapper.find('img').hide();
    $wrapper.find('button.addimage').addClass('editor-post-featured-image__toggle');
    $wrapper.find('button.addimage').removeClass('editor-post-featured-image__preview');
    $wrapper.find('button.addimage').text('Set featured image');
    $wrapper.find('a.removeimage').hide();
    return false;
}