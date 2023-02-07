function set_attachment(key, type){

    var $wrapper = jQuery('#'+key+'_wrapper');

    custom_postimage_uploader = wp.media.frames.file_frame = wp.media({
        title: `Select ${type}`,
        button: {
            text: `Select ${type}`
        },
        library: {type: [`${type}`]}, 
        multiple: false
    });
    custom_postimage_uploader.on('select', function() {

        var attachment = custom_postimage_uploader.state().get('selection').first().toJSON();
        var attachment_url = attachment['url'];
        var attachment_id = attachment['id'];
        $wrapper.find('input#'+key).val(attachment_id);
        var html = type === 'video' ? `<span class="components-responsive-wrapper"><video width="100%" height="160" controls> <source src="${attachment_url}" type="video/mp4"> Your browser does not support the video tag. </video></span>` : `<span class="components-responsive-wrapper"><img src="${attachment_url}"></span>`;

        $wrapper.find('img').show();
        $wrapper.find(`a.remove${type}`).show();
        $wrapper.find(`button.add${type}`).html(html);
        $wrapper.find(`button.add${type}`).removeClass('editor-post-featured-image__toggle');
        $wrapper.find(`button.add${type}`).addClass('editor-post-featured-image__preview');
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

function remove_attachment(key, type){
    var $wrapper = jQuery('#'+key+'_wrapper');
    $wrapper.find('input#'+key).val('');
    $wrapper.find('img').hide();
    $wrapper.find(`button.add${type}`).addClass('editor-post-featured-image__toggle');
    $wrapper.find(`button.add${type}`).removeClass('editor-post-featured-image__preview');
    $wrapper.find(`button.add${type}`).text(`Set featured ${type}`);
    $wrapper.find(`a.remove${type}`).hide();
    return false;
}