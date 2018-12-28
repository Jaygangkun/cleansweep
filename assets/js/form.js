function resizeForm(){
  if($(window).width() > 1023){
    $('.cognito').addClass('c-lrg');
    $('.cognito').removeClass('c-med');
    $('.cognito').removeClass('c-sml');
  }
  else if($(window).width() > 470){
    $('.cognito').removeClass('c-lrg');
    $('.cognito').addClass('c-med');
    $('.cognito').removeClass('c-sml');
  }
  else{
    $('.cognito').removeClass('c-lrg');
    $('.cognito').removeClass('c-med');
    $('.cognito').addClass('c-sml');
  }

}
// resizeForm()

function initForm(){
  $('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    startDate: '-3d',
  });

  $('.datepicker').on('changeDate', function(ev){
      $(this).datepicker('hide');
  });

  $('.datepicker-time').datetimepicker({
    format: 'LT',
    keepOpen: true
  });
}
// initForm()

function daysBetween(first, second) {

  // Copy date parts of the timestamps, discarding the time parts.
  var one = new Date(first.getFullYear(), first.getMonth(), first.getDate());
  var two = new Date(second.getFullYear(), second.getMonth(), second.getDate());

  // Do the math.
  var millisecondsPerDay = 1000 * 60 * 60 * 24;
  var millisBetween = two.getTime() - one.getTime();
  var days = millisBetween / millisecondsPerDay;

  // Round down.
  return Math.floor(days);
}
// daysBetween()

function checkServiceReqForm(){

  if($('#first_name').val() == ''){
    $('#first_name').parents('.c-required').addClass('c-error');
    $('#first_name').focus();
    return false;
  }
  else{
    $('#first_name').parents('.c-required').removeClass('c-error');
  }

  if($('#last_name').val() == ''){
    $('#last_name').parents('.c-required').addClass('c-error');
    $('#last_name').focus();
    return false;
  }
  else{
    $('#last_name').parents('.c-required').removeClass('c-error');
  }

  if($('#co_owner_first_name').val() == ''){
    $('#co_owner_first_name').parents('.c-required').addClass('c-error');
    $('#co_owner_first_name').focus();
    return false;
  }
  else{
    $('#co_owner_first_name').parents('.c-required').removeClass('c-error');
  }

  if($('#co_owner_last_name').val() == ''){
    $('#co_owner_last_name').parents('.c-required').addClass('c-error');
    $('#co_owner_last_name').focus();
    return false;
  }
  else{
    $('#co_owner_last_name').parents('.c-required').removeClass('c-error');
  }

  if($('#co_owner_address').val() == ''){
    $('#co_owner_address').parents('.c-required').addClass('c-error');
    $('#co_owner_address').focus();
    return false;
  }
  else{
    $('#co_owner_address').parents('.c-required').removeClass('c-error');
  }

  if($('#co_owner_city').val() == ''){
    $('#co_owner_city').parents('.c-required').addClass('c-error');
    $('#co_owner_city').focus();
    return false;
  }
  else{
    $('#co_owner_city').parents('.c-required').removeClass('c-error');
  }

  if($('#co_owner_state').val() == ''){
    $('#co_owner_state').parents('.c-required').addClass('c-error');
    $('#co_owner_state').focus();
    return false;
  }
  else{
    $('#co_owner_state').parents('.c-required').removeClass('c-error');
  }

  if($('#co_owner_zipcode').val() == ''){
    $('#co_owner_zipcode').parents('.c-required').addClass('c-error');
    $('#co_owner_zipcode').focus();
    return false;
  }
  else{
    $('#co_owner_zipcode').parents('.c-required').removeClass('c-error');
  }

  if($('#co_owner_cell_phone').val() == ''){
    $('#co_owner_cell_phone').parents('.c-required').addClass('c-error');
    $('#co_owner_cell_phone').focus();
    return false;
  }
  else{
    $('#co_owner_cell_phone').parents('.c-required').removeClass('c-error');
  }

  if($('#co_owner_email').val() == ''){
    $('#co_owner_email').parents('.c-required').addClass('c-error');
    $('#co_owner_email').focus();
    return false;
  }
  else{
    $('#co_owner_email').parents('.c-required').removeClass('c-error');
  }

  if($('#req_service').val() == ''){
    $('#req_service').parents('.c-required').addClass('c-error');
    $('#req_service').focus();
    return false;
  }
  else{
    $('#req_service').parents('.c-required').removeClass('c-error');
  }

  if($('#check_in_date').val() == ''){
    $('#check_in_date').parents('.c-required').addClass('c-error');
    $('#check_in_date').focus();
    return false;
  }
  else{
    $('#check_in_date').parents('.c-required').removeClass('c-error');
  }

  if($('#check_out_date').val() == ''){
    $('#check_out_date').parents('.c-required').addClass('c-error');
    $('#check_out_date').focus();
    return false;
  }
  else{
    $('#check_out_date').parents('.c-required').removeClass('c-error');
  }

  if(daysBetween(new Date($('#check_in_date').val()), new Date($('#check_out_date').val())) < 0){
    alert('Check Out Date can not be before Check In Date.');
    $('#check_out_date').parents('.c-required').addClass('c-error');
    $('#check_out_date').focus();
    return false;  
  }
  else{
    $('#check_out_date').parents('.c-required').removeClass('c-error');
  }

  if($('#address').val() == ''){
    $('#address').parents('.c-required').addClass('c-error');
    $('#address').focus();
    return false;
  }
  else{
    $('#address').parents('.c-required').removeClass('c-error');
  }

  if($('#day_phone').val() == ''){
    $('#day_phone').parents('.c-required').addClass('c-error');
    $('#day_phone').focus();
    return false;
  }
  else{
    $('#day_phone').parents('.c-required').removeClass('c-error');
  }

  if($('#cell_phone').val() == ''){
    $('#cell_phone').parents('.c-required').addClass('c-error');
    $('#cell_phone').focus();
    return false;
  }
  else{
    $('#cell_phone').parents('.c-required').removeClass('c-error');
  }
  
  if($('#email').val() == ''){
    $('#email').parents('.c-required').addClass('c-error');
    $('#email').focus();
    return false;
  }
  else{
    $('#email').parents('.c-required').removeClass('c-error');
  }

  return true;
}
// checkServiceReqForm()

function initServiceReqForm(){
  $(document).on('click', '#req_submit_btn', function(){
    if(!checkServiceReqForm()){
      return false;
    }

    $.ajax({
      // url:'owner_register',
      url:'owner_service_request',
      type: 'post',
      data: {
        'first_name': $('#first_name').val(),
        'last_name': $('#last_name').val(),
        'co_owner_first_name': $('#co_owner_first_name').val(),
        'co_owner_last_name': $('#co_owner_last_name').val(),
        'co_owner_address': $('#co_owner_address').val(),
        'co_owner_city': $('#co_owner_city').val(),
        'co_owner_state': $('#co_owner_state').val(),
        'co_owner_zipcode': $('#co_owner_zipcode').val(),
        'co_owner_cell_phone': $('#co_owner_cell_phone').val(),
        'co_owner_email': $('#co_owner_email').val(),
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
          alert('register successfully');
          location.reload();
        }
      }
    })
  })

  $(document).on('click', '.cancel-service-btn', function(){
    
    var id = $(this).attr('data-id');
    $.ajax({
      url: '/owner_service_cancel',
      data: {
        service_id: id,
      },
      type: 'POST',
      success: function(response){
        alert('Service Cancelled Successfully');
        location.reload();
      }
    })
  });

  $(document).on('click', '.change-service-btn', function(){
    
    var id = $(this).attr('data-id');
    $.ajax({
      url: '/get_req_service_data',
      data: {
        service_id: id,
      },
      type: 'POST',
      success: function(response){
        var data = JSON.parse(response);

        $('#req_submit_btn').hide();
        $('#req_cancel_submit_btn').show();
        $('#req_change_submit_btn').show();

        $('#first_name').val(data['first_name']);
        $('#last_name').val(data['last_name']);
        $('#co_owner_first_name').val(data['co_owner_first_name']);
        $('#co_owner_last_name').val(data['co_owner_last_name']);
        $('#co_owner_address').val(data['co_owner_address']);
        $('#co_owner_city').val(data['co_owner_city']);
        $('#co_owner_state').val(data['co_owner_state']);
        $('#co_owner_zipcode').val(data['co_owner_zipcode']);
        $('#co_owner_cell_phone').val(data['co_owner_cell_phone']);
        $('#co_owner_email').val(data['co_owner_email']);
        $('#req_service').val(data['req_service']);
        $('#check_in_date').val(data['check_in_date']);
        $('#check_out_date').val(data['check_out_date']);
        $('#cleaning_address').val(data['cleaning_address']);
        $('#day_phone').val(data['day_phone']);
        $('#cell_phone').val(data['cell_phone']);
        $('#email').val(data['email']);
        $('#comments').val(data['comments']);
        $('#owner_id').val(data['owner_id']);
        $('#id').val(data['id']);
      }
    })
  });

  $(document).on('click', '#req_cancel_submit_btn', function(){
    location.reload();
  });

  $(document).on('click', '#req_change_submit_btn', function(){
    if(!checkServiceReqForm()){
      return false;
    }

    $.ajax({
      // url:'owner_register',
      url:'owner_service_request_update',
      type: 'post',
      data: {
        'first_name': $('#first_name').val(),
        'last_name': $('#last_name').val(),
        'co_owner_first_name': $('#co_owner_first_name').val(),
        'co_owner_last_name': $('#co_owner_last_name').val(),
        'co_owner_address': $('#co_owner_address').val(),
        'co_owner_city': $('#co_owner_city').val(),
        'co_owner_state': $('#co_owner_state').val(),
        'co_owner_zipcode': $('#co_owner_zipcode').val(),
        'co_owner_cell_phone': $('#co_owner_cell_phone').val(),
        'co_owner_email': $('#co_owner_email').val(),
        'req_service': $('#req_service').val(),
        'check_in_date': $('#check_in_date').val(),
        'check_out_date': $('#check_out_date').val(),
        'cleaning_address': $('#cleaning_address').val(),
        'day_phone': $('#day_phone').val(),
        'cell_phone': $('#cell_phone').val(),
        'email': $('#email').val(),
        'comments': $('#comments').val(),
        'owner_id': $('#owner_id').val(),
        'id': $('#id').val(),
      },
      success: function(response){
        if(response == 'ok'){
          alert('update successfully');
          location.reload();
        }
      }
    })
  });
}
// initServiceReqForm()

function checkContactForm(){
  return true;
}

function initContactForm(){
  $(document).on('click', '#contact_btn', function(){
    if(!checkContactForm()){
      return false;
    }

    $.ajax({
      url:'owner_register',
      type: 'post',
      data: {
        'first_name': $('#first_name').val(),
        'last_name': $('#last_name').val(),
        'address': $('#address').val(),
        'city': $('#city').val(),
        'state': $('#state').val(),
        'zipcode': $('#zipcode').val(),
        'property_address': $('#property_address').val(),
        'check_in_date': $('#check_in_date').val(),
        'check_out_date': $('#check_out_date').val(),
        'bedrooms': $('#bedrooms').val(),
        'bathrooms': $('#bathrooms').val(),
        'hbathrooms': $('#hbathrooms').val(),
        'bed_conf_count1': $('#bed_conf_count1').val(),
        'bed_conf_type1': $('#bed_conf_type1').val(),
        'bed_conf_count2': $('#bed_conf_count2').val(),
        'bed_conf_type2': $('#bed_conf_type2').val(),
        'bed_conf_count3': $('#bed_conf_count3').val(),
        'bed_conf_type3': $('#bed_conf_type3').val(),
        'bed_conf_count4': $('#bed_conf_count4').val(),
        'bed_conf_type4': $('#bed_conf_type4').val(),
        'sleeper_sofa_exist': $('#sleeper_sofa_exist').val(),
        'sleeper_sofa_size': $('#sleeper_sofa_size').val(),
        'day_phone': $('#day_phone').val(),
        'cell_phone': $('#cell_phone').val(),
        'email': $('#email').val(),
        'property_phone': $('#property_phone').val(),
        'billing_purpose': $('#billing_purpose').val(),
        'exp_date': $('#exp_date').val(),
        'office_cleaning_rate': $('#office_cleaning_rate').val(),
        'office_caretaking_rate': $('#office_caretaking_rate').val()
      },
      success: function(response){
        if(response == 'ok'){
          alert('register successfully');
          // location.reload();
        }
        else if(response == 'email exist'){
          alert('email already exist');
          // $('#email').focus();
        }
      }
    })
  });

  $(document).on('change', '#add_another_prop_chbox', function(){
    if($(this).is(':checked')){
      $('#add_another_prop_btn').css('visibility', 'visible');
    }
    else{
      $('#add_another_prop_btn').css('visibility', 'hidden');
    }
  })

  $(document).on('click', '#add_another_prop_btn', function(){
    var newhtml = $('#additional_prop_template').clone().html();
    $('#additional_props_container').append(newhtml);
  })
}
// initContactForm()

function initLoginForm(){
  $(document).on('click', '#login_btn', function(){
    if($('#username').val() == ''){
      $('#username').parents('.c-required').addClass('c-error');
      $('#username').focus();
      return false;
    }
    else{
      $('#username').parents('.c-required').removeClass('c-error');
    }

    if($('#password').val() == ''){
      $('#password').parents('.c-required').addClass('c-error');
      $('#password').focus();
      return false;
    }
    else{
      $('#password').parents('.c-required').removeClass('c-error');
    }

    $.ajax({
      url:'owner_login',
      type: 'post',
      data: {
        'username': $('#username').val(),
        'password': $('#password').val(),
      },
      success: function(response){
        if(response == 'success'){
          location.reload();
        }
        else{
          alert('login fail');
        }
      }
    })
  })
}
// initLoginForm()

function initOwnerInfo(){
  $('#owner_info input').attr('disabled', 'disabled');
  $('#owner_info select').attr('disabled', 'disabled');

  $(document).on('click', '#edit_owner_btn', function(){
    $('#owner_info input').removeAttr('disabled');
    $('#owner_info select').removeAttr('disabled');

    $('#edit_owner_btn').hide();
    $('#save_owner_btn').show();
    $('#cancel_owner_btn').show();
  })

  $(document).on('click', '#save_owner_btn', function(){

    var formdata = new FormData($('#owner_info_form')[0]);
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

            $('#owner_info input').attr('disabled', 'disabled');
            $('#owner_info select').attr('disabled', 'disabled');

            $('#edit_owner_btn').show();
            $('#save_owner_btn').hide();
            $('#cancel_owner_btn').hide();
        }
    })    
  })

  $(document).on('click', '#cancel_owner_btn', function(){
    $('#owner_info input').attr('disabled', 'disabled');
    $('#owner_info select').attr('disabled', 'disabled');

    $('#edit_owner_btn').show();
    $('#save_owner_btn').hide();
    $('#cancel_owner_btn').hide();
  })
}
// initOwnerInfo()

$(document).ready(function(){
  $(window).resize(resizeForm);
  resizeForm();

  if($('.form-container').length != 0){
    initForm();
  }

  if($('#service_req_form').length != 0){
    initServiceReqForm();
  }

  if($('#contact_form').length != 0){
    initContactForm();
  }
  
  if($('#login_form').length != 0){
    initLoginForm();
  }

  if($('#owner_info').length != 0){
    initOwnerInfo();
  }

})


// Restricts input for each element in the set of matched elements to the given inputFilter.

$.fn.inputFilter = function(inputFilter) {
  return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
    if (inputFilter(this.value)) {
      this.oldValue = this.value;
      this.oldSelectionStart = this.selectionStart;
      this.oldSelectionEnd = this.selectionEnd;
    } else if (this.hasOwnProperty("oldValue")) {
      this.value = this.oldValue;
      this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
    }
  });
};


$(".onlynumbs").inputFilter(function(value) {
  return /^\d*$/.test(value);
});