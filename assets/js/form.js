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

  if($('#email').val() == ''){
    $('#email').parents('.c-required').addClass('c-error');
    $('#email').focus();
    return false;
  }
  else{
    $('#email').parents('.c-required').removeClass('c-error');
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

  if($('#check_out_time').val() == ''){
    $('#check_out_time').parents('.c-required').addClass('c-error');
    $('#check_out_time').focus();
    return false;
  }
  else{
    $('#check_out_time').parents('.c-required').removeClass('c-error');
  }

  if($('#address').val() == ''){
    $('#address').parents('.c-required').addClass('c-error');
    $('#address').focus();
    return false;
  }
  else{
    $('#address').parents('.c-required').removeClass('c-error');
  }

  if($('#city').val() == ''){
    $('#city').parents('.c-required').addClass('c-error');
    $('#city').focus();
    return false;
  }
  else{
    $('#city').parents('.c-required').removeClass('c-error');
  }

  if($('#state').val() == ''){
    $('#state').parents('.c-required').addClass('c-error');
    $('#state').focus();
    return false;
  }
  else{
    $('#state').parents('.c-required').removeClass('c-error');
  }

  if($('#zipcode').val() == ''){
    $('#zipcode').parents('.c-required').addClass('c-error');
    $('#zipcode').focus();
    return false;
  }
  else{
    $('#zipcode').parents('.c-required').removeClass('c-error');
  }

  if($('#daytime_phone').val() == ''){
    $('#daytime_phone').parents('.c-required').addClass('c-error');
    $('#daytime_phone').focus();
    return false;
  }
  else{
    $('#daytime_phone').parents('.c-required').removeClass('c-error');
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
        'req_service': $('#req_service').val(),
        'check_in_date': $('#check_in_date').val(),
        'check_out_date': $('#check_out_date').val(),
        'check_out_time': $('#check_out_time').val(),
        'cleaning_address': $('#cleaning_address').val(),
        'cleaning_city': $('#cleaning_city').val(),
        'cleaning_state': $('#cleaning_state').val(),
        'cleaning_zipcode': $('#cleaning_zipcode').val(),
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
}

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
        }
      }
    })
  });
}

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