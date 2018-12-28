
function init_owner_service_management(){

    $('#start_date').datepicker({
        format: 'mm/dd/yyyy',
    });

    $('#start_date').on('changeDate', function(ev){
        $(this).datepicker('hide');
    });

    $('#end_date').datepicker({
        format: 'mm/dd/yyyy',
    });

    $('#end_date').on('changeDate', function(ev){
        $(this).datepicker('hide');
    });

    function service_req_search(){

        var loading_html = '<div class="" style="font-size: 30px;text-align: center;">';
        loading_html = loading_html + '<i class="fa fa-refresh fa-spin"></i>';
        loading_html = loading_html + '</div>';

        $('#request_service_list').html(loading_html);

        $.ajax({
            url: '/do_service_req_search',
            type: 'post',
            data: {
                username: $('#username').val(),
                property_address: $('#property_address').val(),
                start_date: $('#start_date').val(),
                end_date: $('#end_date').val()
            },
            success: function(response){
                var data = JSON.parse(response);
                var html = '<table class="data-table1 table table-bordered table-hover"><thead>';
                html = html + '<tr>';
                html = html + '<th>Email</th>';
                html = html + '<th>User Name</th>';
                html = html + '<th>Property Address</th>';
                html = html + '<th>Requested Service</th>';
                html = html + '<th>Check In Date</th>';
                html = html + '<th>Check Out Date</th>';
                html = html + '<th>Requested Date</th>';
                html = html + '<th>Status</th>';
                html = html + '<th>Action</th>';
                html = html + '</tr>';
                html = html + '</thead>';
                html = html + '<tbody>';

                for(var index = 0; index < data.length; index++){
                    html = html + '<tr>';
                    html = html + '<td>' + data[index]['owner_email'] + '</td>';
                    html = html + '<td>' + data[index]['username'] + '</td>';
                    html = html + '<td>' + data[index]['cleaning_address'] + '</td>';
                    html = html + '<td>' + data[index]['req_service'] + '</td>';
                    html = html + '<td>' + data[index]['check_in_date'] + '</td>';
                    html = html + '<td>' + data[index]['check_out_date'] + '</td>';
                    html = html + '<td>' + data[index]['added_at'] + '</td>';
                    html = html + '<td>';
                    if(data[index]['status'] == '0'){
                        html = html + '<span class="form-group has-error"><span class="help-block">Request Cancelled</span></span>';
                    }
                    html = html + '</td>';
                    html = html + '<td>';

                    if(data[index]['status'] == '0'){
                        html = html + '';
                    }
                    else{
                        html = html + '<a href="/owner_service_edit/' + data[index]['id'] + '">Edit</a>';
                    }
                    
                    html = html + '</td>';
                    html = html + '</tr>';
                    
                }
                html = html + '</tbody>';
                html = html + '<tfoot>';
                html = html + '<tr>';
                html = html + '<th>Email</th>';
                html = html + '<th>User Name</th>';
                html = html + '<th>Property Address</th>';
                html = html + '<th>Requested Service</th>';
                html = html + '<th>Check In Date</th>';
                html = html + '<th>Check Out Date</th>';
                html = html + '<th>Requested Date</th>';
                html = html + '<th>Status</th>';
                html = html + '<th>Action</th>';
                html = html + '</tr>';
                html = html + '</tfoot></table>';

                $('#request_service_list').html(html);
                $('#request_service_list table').DataTable({
					"paging": true,
					"lengthChange": false,
					"searching": false,
					"ordering": true,
					"info": true,
					"order": [[ 6, "desc" ]],
					"autoWidth": false
				})

            }
        })    
    }

    $(document).on('click', '#service_req_search_btn', function(){
        service_req_search();
    })

    $(document).on('click', '#service_req_print_btn', function(){

        $.ajax({
            url: '/do_service_req_search_print',
            type: 'post',
            data: {
                username: $('#username').val(),
                property_address: $('#property_address').val(),
                start_date: $('#start_date').val(),
                end_date: $('#end_date').val()
            },
            success: function(response){
                location.href='/do_service_req_search_print_download/' + response;
            }
        });
    })

    service_req_search();
}


function init_owner_edit(){
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
}

function init_owner_service_edit(){
    $(document).on('click', '#req_service_save_btn', function(){
        
        var formdata = new FormData($('#req_service_edit_form')[0]);
        $.ajax({
            url: '/do_req_service_update',
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
}

function init_owner_management(){
    $(document).on('click', '#owners_list_print_btn', function(){
        location.href="/do_owner_list_print";
        return;
        $.ajax({
            url: '/do_owner_list_print',
            type: 'POST',
            success: function(response){
                location.href="/download_owner_list";
            }
        })
    })
}

$(document).ready(function(){
    
    if($('#page_content_owner_edit').length != 0){
        init_owner_edit();
    }

    if($('#page_content_owner_service_edit').length != 0){
        init_owner_service_edit();
    }

    if($('#page_content_owner_management').length != 0){
        init_owner_management();
    }

    if($('#page_content_owner_service_management').length != 0){
        init_owner_service_management();
    }
    
    
})