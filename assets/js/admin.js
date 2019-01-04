
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

var co_owners_count = 0;
var additional_props_count = 0;

function init_owner_edit(){
    $(document).on('click', '#owner_save_btn', function(){
        
        var add_co_owner_chbox = $('#add_co_owner_chbox').is(':checked');
    
        var co_owners_data = [];
        var co_owners_ele = $('#co_owners_container .co-owner-template-wrap');
        for(var cindex = 0; cindex < co_owners_ele.length; cindex ++){
            var co_owner_first_name = $(co_owners_ele[cindex]).find('[name="co_owner_first_name"]').val();
            var co_owner_last_name = $(co_owners_ele[cindex]).find('[name="co_owner_last_name"]').val();
            var co_owner_address = $(co_owners_ele[cindex]).find('[name="co_owner_address"]').val();
            var co_owner_city = $(co_owners_ele[cindex]).find('[name="co_owner_city"]').val();
            var co_owner_state = $(co_owners_ele[cindex]).find('[name="co_owner_state"]').val();
            var co_owner_zipcode = $(co_owners_ele[cindex]).find('[name="co_owner_zipcode"]').val();
            var co_owner_cell_phone = $(co_owners_ele[cindex]).find('[name="co_owner_cell_phone"]').val();
            var co_owner_email = $(co_owners_ele[cindex]).find('[name="co_owner_email"]').val();

            co_owners_data.push({
                co_owner_first_name: co_owner_first_name,
                co_owner_last_name: co_owner_last_name,
                co_owner_address: co_owner_address,
                co_owner_city: co_owner_city,
                co_owner_state: co_owner_state,
                co_owner_zipcode: co_owner_zipcode,
                co_owner_cell_phone: co_owner_cell_phone,
                co_owner_email: co_owner_email
            })
        }

        var add_additional_prop_chbox = $('#add_additional_prop_chbox').is(':checked');

        var additional_props_data = [];
        var additional_props_ele = $('#additional_props_container .additional-prop-template-wrap');
        for(var pindex = 0; pindex < additional_props_ele.length; pindex ++){
            var property_address = $(additional_props_ele[pindex]).find('[name="property_address"]').val();
            var bedrooms = $(additional_props_ele[pindex]).find('[name="bedrooms"]').val();
            var bathrooms = $(additional_props_ele[pindex]).find('[name="bathrooms"]').val();
            var hbathrooms = $(additional_props_ele[pindex]).find('[name="hbathrooms"]').val();
            var bed_conf_count1 = $(additional_props_ele[pindex]).find('[name="bed_conf_count1"]').val();
            var bed_conf_type1 = $(additional_props_ele[pindex]).find('[name="bed_conf_type1"]').val();
            var bed_conf_count2 = $(additional_props_ele[pindex]).find('[name="bed_conf_count2"]').val();
            var bed_conf_type2 = $(additional_props_ele[pindex]).find('[name="bed_conf_type2"]').val();
            var bed_conf_count3 = $(additional_props_ele[pindex]).find('[name="bed_conf_count3"]').val();
            var bed_conf_type3 = $(additional_props_ele[pindex]).find('[name="bed_conf_type3"]').val();
            var bed_conf_count4 = $(additional_props_ele[pindex]).find('[name="bed_conf_count4"]').val();
            var bed_conf_type4 = $(additional_props_ele[pindex]).find('[name="bed_conf_type4"]').val();
            var sleeper_sofa_exist = $(additional_props_ele[pindex]).find('[name="sleeper_sofa_exist"]').val();
            var sleeper_sofa_size = $(additional_props_ele[pindex]).find('[name="sleeper_sofa_size"]').val();
            

            additional_props_data.push({
                property_address: property_address,
                bedrooms: bedrooms,
                bathrooms: bathrooms,
                bathrooms: bathrooms,
                hbathrooms: hbathrooms,
                bed_conf_count1: bed_conf_count1,
                bed_conf_type1: bed_conf_type1,
                bed_conf_count2: bed_conf_count2,
                bed_conf_type2: bed_conf_type2,
                bed_conf_count3: bed_conf_count3,
                bed_conf_type3: bed_conf_type3,
                bed_conf_count4: bed_conf_count4,
                bed_conf_type4: bed_conf_type4,
                sleeper_sofa_exist: sleeper_sofa_exist,
                sleeper_sofa_size: sleeper_sofa_size
            })
        }

        $.ajax({
            url:'/do_owner_update',
            type: 'post',
            data: {
                'username': $('#username').val(),
                'password': $('#password').val(),
                'first_name': $('#first_name').val(),
                'last_name': $('#last_name').val(),
                'address': $('#address').val(),
                'city': $('#city').val(),
                'state': $('#state').val(),
                'zipcode': $('#zipcode').val(),
                'day_phone': $('#day_phone').val(),
                'cell_phone': $('#cell_phone').val(),
                'email': $('#email').val(),
                'add_co_owner_chbox': add_co_owner_chbox,
                'co_owners_data': co_owners_data,
                'add_additional_prop_chbox': add_additional_prop_chbox,
                'additional_props_data': additional_props_data,
                'status': $('#status').val(),
                'id': $('#id').val(),
            },
            success: function(response){
                alert('saved successfully');
            }
        })
        
        
    })

    if(add_co_owner_chbox){
        $('#add_co_owner_chbox').prop('checked', true);
        $('#add_co_owner_btn').css('visibility', 'visible');
    
        var html = '';
        for(var cindex = 0; cindex < co_owners_data.length; cindex++){
            var clone_ele = $('#co_owner_template').clone();
            var temp_id = cindex + 1;

            $(clone_ele).find('.co-owner-template-wrap').attr('id', 'co_owner_template_wrap_' + temp_id);
            $(clone_ele).find('[name="co_owner_first_name"]').attr('value', co_owners_data[cindex]['co_owner_first_name']);
            $(clone_ele).find('[name="co_owner_last_name"]').attr('value', co_owners_data[cindex]['co_owner_last_name']);
            $(clone_ele).find('[name="co_owner_address"]').attr('value', co_owners_data[cindex]['co_owner_address']);
            $(clone_ele).find('[name="co_owner_city"]').attr('value', co_owners_data[cindex]['co_owner_city']);
            $(clone_ele).find('[name="co_owner_state"] option[value="' + co_owners_data[cindex]['co_owner_state'] + '"]').attr('selected', 'selected');
            $(clone_ele).find('[name="co_owner_zipcode"]').attr('value', co_owners_data[cindex]['co_owner_zipcode']);
            $(clone_ele).find('[name="co_owner_cell_phone"]').attr('value', co_owners_data[cindex]['co_owner_cell_phone']);
            $(clone_ele).find('[name="co_owner_email"]').attr('value', co_owners_data[cindex]['co_owner_email']);
            $(clone_ele).find('[name="co_owner_del_btn"]').attr('data-id', temp_id);

            html = html + $(clone_ele).html();
            }

            co_owners_count = co_owners_data.length;
            $('#co_owners_container').html(html);
      }
    
      if(add_additional_prop_chbox){
        $('#add_additional_prop_chbox').prop('checked', true);
        $('#add_additional_prop_btn').css('visibility', 'visible');
    
        var html = '';
        for(var pindex = 0; pindex < additional_props_data.length; pindex++){
            var clone_ele = $('#additional_prop_template').clone();
            var temp_id = pindex + 1;

            $(clone_ele).find('.additional-prop-template-wrap').attr('id', 'additional_prop_template_wrap_' + temp_id);
            $(clone_ele).find('[name="property_address"]').attr('value', additional_props_data[pindex]['property_address']);
            $(clone_ele).find('[name="bedrooms"]').attr('value', additional_props_data[pindex]['bedrooms']);
            $(clone_ele).find('[name="bathrooms"]').attr('value', additional_props_data[pindex]['bathrooms']);
            $(clone_ele).find('[name="hbathrooms"]').attr('value', additional_props_data[pindex]['hbathrooms']);
            $(clone_ele).find('[name="bed_conf_count1"]').attr('value', additional_props_data[pindex]['bed_conf_count1']);
            $(clone_ele).find('[name="bed_conf_type1"] option[value="' + additional_props_data[pindex]['bed_conf_type1'] + '"]').attr('selected', 'selected');
            $(clone_ele).find('[name="bed_conf_count2"]', ).attr('value', additional_props_data[pindex]['bed_conf_count2']);
            $(clone_ele).find('[name="bed_conf_type2"] option[value="' + additional_props_data[pindex]['bed_conf_type2'] + '"]').attr('selected', 'selected');
            $(clone_ele).find('[name="bed_conf_count3"]').attr('value', additional_props_data[pindex]['bed_conf_count3']);
            $(clone_ele).find('[name="bed_conf_type3"] option[value="' + additional_props_data[pindex]['bed_conf_type3'] + '"]').attr('selected', 'selected');
            $(clone_ele).find('[name="bed_conf_count4"]').attr('value', additional_props_data[pindex]['bed_conf_count4']);
            $(clone_ele).find('[name="bed_conf_type4"] option[value="' + additional_props_data[pindex]['bed_conf_type4'] + '"]').attr('selected', 'selected');
            $(clone_ele).find('[name="sleeper_sofa_exist"] option[value="' + additional_props_data[pindex]['sleeper_sofa_exist'] + '"]').attr('selected', 'selected');
            $(clone_ele).find('[name="sleeper_sofa_size"] option[value="' + additional_props_data[pindex]['sleeper_sofa_size'] + '"]').attr('selected', 'selected');

            $(clone_ele).find('[name="additional_prop_del_btn"]').attr('data-id', temp_id);

            html = html + $(clone_ele).html();
        }
    
        additional_props_count = additional_props_data.length;
        $('#additional_props_container').html(html);
    }

    //co owner  
    $(document).on('change', '#add_co_owner_chbox', function(){
        if($(this).is(':checked')){
          $('#add_co_owner_btn').css('visibility', 'visible');
          $('#co_owners_container').show();
        }
        else{
          $('#add_co_owner_btn').css('visibility', 'hidden');
          $('#co_owners_container').hide();
        }
    })
    
    $(document).on('click', '#add_co_owner_btn', function(){
        co_owners_count++;

        var newhtml = $('#co_owner_template').clone();
        $(newhtml).find('.co-owner-template-wrap').attr('id', 'co_owner_template_wrap_' + co_owners_count);
        $(newhtml).find('[name="co_owner_del_btn"]').attr('data-id', co_owners_count);
        newhtml = $(newhtml).html();
        $('#co_owners_container').append(newhtml);

        $(".onlynumbs").inputFilter(function(value) {
            return /^\d*$/.test(value);
        });
    })

    $(document).on('click', '[name="co_owner_del_btn"]', function(){
        var data_id = $(this).attr('data-id');
        $('#co_owner_template_wrap_' + data_id).remove();
    })

    //additional property
    $(document).on('change', '#add_additional_prop_chbox', function(){
        if($(this).is(':checked')){
            $('#add_additional_prop_btn').css('visibility', 'visible');
            $('#additional_props_container').show();
        }
        else{
            $('#add_additional_prop_btn').css('visibility', 'hidden');
            $('#additional_props_container').hide();
        }
    })

    $(document).on('click', '#add_additional_prop_btn', function(){
        additional_props_count++;
        var newhtml = $('#additional_prop_template').clone();
        $(newhtml).find('.additional-prop-template-wrap').attr('id', 'additional_prop_template_wrap_' + additional_props_count);
        $(newhtml).find('[name="additional_prop_del_btn"]').attr('data-id', additional_props_count);
        newhtml = $(newhtml).html();
        $('#additional_props_container').append(newhtml);

        $(".onlynumbs").inputFilter(function(value) {
            return /^\d*$/.test(value);
        });
    })

    $(document).on('click', '[name="additional_prop_del_btn"]', function(){
        var data_id = $(this).attr('data-id');
        $('#additional_prop_template_wrap_' + data_id).remove();
    })
}
//init_owner_edit

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
//init_owner_service_edit

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
//init_owner_management 

function init_owner_service_create(){
    $(document).on('click', '#req_service_create_btn', function(){
        $.ajax({
            // url:'owner_register',
            url:'/owner_service_request',
            type: 'post',
            data: {
                'first_name': $('#first_name').val(),
                'last_name': $('#last_name').val(),
                'req_service': $('#req_service').val(),
                'check_in_date': $('#check_in_date').val(),
                'check_out_date': $('#check_out_date').val(),
                'cleaning_address': $('#cleaning_address').val(),
                'day_phone': $('#day_phone').val(),
                'cell_phone': $('#cell_phone').val(),
                'email': $('#email').val(),
                'comments': $('#comments').val(),
                'owner_id': $('#owner_id').val(),
            },
            success: function(response){
              if(response == 'ok'){
                alert('thank you');
                window.history.back();
              }
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

    if($('#page_content_owner_service_create').length != 0){
        init_owner_service_create();
    }
    
})