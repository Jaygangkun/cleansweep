$(document).ready(function(){
    //owner_edit
    //owner info save button
    $(document).on('click', '#owner_save_btn', function(){
        
        var formdata = new FormData($('#owner_edit_form')[0]);
        $.ajax({
            url: '/do_owner_update',
            type: 'post',
            enctype: 'multipart/form-data',
            data: formdata,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data){
                alert('saved successfully');
            }
        })    
    })
})