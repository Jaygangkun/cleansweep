function validateEmail(email) {
  var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}

const isNumericInput = (event) => {
  const key = event.keyCode;
  return ((key >= 48 && key <= 57) || // Allow number line
      (key >= 96 && key <= 105) // Allow number pad
  );
};

const isModifierKey = (event) => {
  const key = event.keyCode;
  return (event.shiftKey === true || key === 35 || key === 36) || // Allow Shift, Home, End
      (key === 8 || key === 9 || key === 13 || key === 46) || // Allow Backspace, Tab, Enter, Delete
      (key > 36 && key < 41) || // Allow left, up, right, down
      (
          // Allow Ctrl/Command + A,C,V,X,Z
          (event.ctrlKey === true || event.metaKey === true) &&
          (key === 65 || key === 67 || key === 86 || key === 88 || key === 90)
      )
};

const enforceFormat = (event) => {
  // Input must be of a valid number format or a modifier key, and not longer than ten digits
  if(!isNumericInput(event) && !isModifierKey(event)){
      event.preventDefault();
  }
};

const formatToPhone = (event) => {
  if(isModifierKey(event)) {return;}

  // I am lazy and don't like to type things more than once
  const target = event.target;
  const input = target.value.replace(/\D/g,'').substring(0,10); // First ten digits of input only
  const zip = input.substring(0,3);
  const middle = input.substring(3,6);
  const last = input.substring(6,10);

  if(input.length > 6){target.value = `(${zip}) ${middle} - ${last}`;}
  else if(input.length > 3){target.value = `(${zip}) ${middle}`;}
  else if(input.length > 0){target.value = `(${zip}`;}
};

// const inputElement = document.getElementById('phoneNumber');
// inputElement.addEventListener('keydown',enforceFormat);
// inputElement.addEventListener('keyup',formatToPhone);
$(document).on('keydown', '.phonenumber', enforceFormat);
$(document).on('keyup', '.phonenumber', formatToPhone);

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

  if(typeof last_req_time == 'undefined' || last_req_time == null){
    $('.datepicker').datepicker({
      format: 'mm/dd/yyyy',
      startDate: '1d',
    });
  }
  else{
    var date1 = new Date(last_req_time);

    Date.prototype.addDays = function(days) {
      var date = new Date(this.valueOf());
      date.setDate(date.getDate() + days);
      return date;
    }

    date1.addDays(2);
    console.log(date1);

    var date2 = new Date();

    var timeDiff = date1.getTime() - date2.getTime();
    var diffHours = Math.ceil(timeDiff / (1000 * 3600)); 

    if(last_req_time == 0){
      $('.datepicker').datepicker({
        format: 'mm/dd/yyyy',
        startDate: '1d',
      });
    }
    else{
      diffDays = Math.ceil(diffHours / 24);
      console.log('diffHours:', diffHours);
      console.log('diffDays:', diffDays);
      
      $('.datepicker').datepicker({
        format: 'mm/dd/yyyy',
        startDate: diffDays + 'd',
      });
    }
  }

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

  var date1 = new Date(last_req_time);
  var date2 = new Date($('#check_in_date').val());

  var timeDiff = Math.abs(date1.getTime() - date2.getTime());
  var diffHours = Math.ceil(timeDiff / (1000 * 3600)); 

  if(diffHours < 72){
    alert('All service requests must be submitted a minimum of 72 hours in advance. If your request is within 72 hours, please call Clean Sweep at (843)689-9178.');
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

  var date2 = new Date($('#check_out_date').val());

  var timeDiff = Math.abs(date1.getTime() - date2.getTime());
  var diffHours = Math.ceil(timeDiff / (1000 * 3600)); 

  if(diffHours < 48){
    alert('Check out date should be 48 hours later');
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
          location.reload();
        }
      }
    })
  })

  $(document).on('click', '.cancel-service-btn', function(){
    
    if($(this).hasClass('nochange')){
      alert('No changes are allowed 72 hours prior to the service, the office must be called.  Please place the note that we gave you on the page. Note should read:  Request should be submitted a min of 72 hours in advance please call Cleansweep @ 843-689-9178');
      return;
    }

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
    if($(this).hasClass('nochange')){
      alert('No changes are allowed 72 hours prior to the service, the office must be called.  Please place the note that we gave you on the page. Note should read:  Request should be submitted a min of 72 hours in advance please call Cleansweep @ 843-689-9178');
      return;
    }

    $('a[href="#req_submit"]').trigger('click');

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


  $(document).on('click', '.c-editor-date-icon', function(){
    $(this).parent('.c-editor').find('input').datepicker("setDate", new Date());
    $(this).parent('.c-editor').find('input').datepicker('show');
  });

  if(add_additional_prop_chbox){
    $('#add_additional_prop_chbox').prop('checked', true);

    var html = '';
    if(additional_props_data != null){
      for(var pindex = 0; pindex < additional_props_data.length; pindex++){
        html = html + '<option value="' + additional_props_data[pindex]['property_address'] + '">' + additional_props_data[pindex]['property_address'] + '</option>';
      }
      $('#cleaning_address').html(html);
    }

  }
}
// initServiceReqForm()

function checkContactForm(){
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
    $('#email').parents('.c-required').find('.require-msg').show();
    $('#email').parents('.c-required').find('.format-msg').hide();
    $('#email').focus();
    return false;
  }
  else{
    $('#email').parents('.c-required').removeClass('c-error');
  }
  
  if(!validateEmail($('#email').val())){
    $('#email').parents('.c-required').addClass('c-error');
    $('#email').parents('.c-required').find('.require-msg').hide();
    $('#email').parents('.c-required').find('.format-msg').show();
    $('#email').focus();
    return false;
  }
  else{
    $('#email').parents('.c-required').removeClass('c-error');
    $('#email').parents('.c-required').find('.require-msg').hide();
    $('#email').parents('.c-required').find('.format-msg').hide();
  }

  if($('#add_co_owner_chbox').is(':checked')){
    var co_owners_ele = $('#co_owners_container .co-owner-template-wrap');
    for(var cindex = 0; cindex < co_owners_ele.length; cindex ++){
      if($(co_owners_ele[cindex]).find('[name="co_owner_first_name"]').val() == ''){
        $(co_owners_ele[cindex]).find('[name="co_owner_first_name"]').parents('.c-required').addClass('c-error');
        $(co_owners_ele[cindex]).find('[name="co_owner_first_name"]').focus();
        return false;
      }
      else{
        $(co_owners_ele[cindex]).find('[name="co_owner_first_name"]').parents('.c-required').removeClass('c-error');
      }

      if($(co_owners_ele[cindex]).find('[name="co_owner_last_name"]').val() == ''){
        $(co_owners_ele[cindex]).find('[name="co_owner_last_name"]').parents('.c-required').addClass('c-error');
        $(co_owners_ele[cindex]).find('[name="co_owner_last_name"]').focus();
        return false;
      }
      else{
        $(co_owners_ele[cindex]).find('[name="co_owner_last_name"]').parents('.c-required').removeClass('c-error');
      }

      if($(co_owners_ele[cindex]).find('[name="co_owner_address"]').val() == ''){
        $(co_owners_ele[cindex]).find('[name="co_owner_address"]').parents('.c-required').addClass('c-error');
        $(co_owners_ele[cindex]).find('[name="co_owner_address"]').focus();
        return false;
      }
      else{
        $(co_owners_ele[cindex]).find('[name="co_owner_address"]').parents('.c-required').removeClass('c-error');
      }

      if($(co_owners_ele[cindex]).find('[name="co_owner_city"]').val() == ''){
        $(co_owners_ele[cindex]).find('[name="co_owner_city"]').parents('.c-required').addClass('c-error');
        $(co_owners_ele[cindex]).find('[name="co_owner_city"]').focus();
        return false;
      }
      else{
        $(co_owners_ele[cindex]).find('[name="co_owner_city"]').parents('.c-required').removeClass('c-error');
      }

      if($(co_owners_ele[cindex]).find('[name="co_owner_state"]').val() == ''){
        $(co_owners_ele[cindex]).find('[name="co_owner_state"]').parents('.c-required').addClass('c-error');
        $(co_owners_ele[cindex]).find('[name="co_owner_state"]').focus();
        return false;
      }
      else{
        $(co_owners_ele[cindex]).find('[name="co_owner_state"]').parents('.c-required').removeClass('c-error');
      }

      if($(co_owners_ele[cindex]).find('[name="co_owner_zipcode"]').val() == ''){
        $(co_owners_ele[cindex]).find('[name="co_owner_zipcode"]').parents('.c-required').addClass('c-error');
        $(co_owners_ele[cindex]).find('[name="co_owner_zipcode"]').focus();
        return false;
      }
      else{
        $(co_owners_ele[cindex]).find('[name="co_owner_zipcode"]').parents('.c-required').removeClass('c-error');
      }

      if($(co_owners_ele[cindex]).find('[name="co_owner_cell_phone"]').val() == ''){
        $(co_owners_ele[cindex]).find('[name="co_owner_cell_phone"]').parents('.c-required').addClass('c-error');
        $(co_owners_ele[cindex]).find('[name="co_owner_cell_phone"]').focus();
        return false;
      }
      else{
        $(co_owners_ele[cindex]).find('[name="co_owner_cell_phone"]').parents('.c-required').removeClass('c-error');
      }

      if($(co_owners_ele[cindex]).find('[name="co_owner_email"]').val() == ''){
        $(co_owners_ele[cindex]).find('[name="co_owner_email"]').parents('.c-required').addClass('c-error');
        $(co_owners_ele[cindex]).find('[name="co_owner_email"]').focus();
        $(co_owners_ele[cindex]).find('[name="co_owner_email"]').parents('.c-required').find('.require-msg').show();
        $(co_owners_ele[cindex]).find('[name="co_owner_email"]').parents('.c-required').find('.format-msg').hide();
        return false;
      }
      else{
        $(co_owners_ele[cindex]).find('[name="co_owner_email"]').parents('.c-required').removeClass('c-error');
      }


      if(!validateEmail($(co_owners_ele[cindex]).find('[name="co_owner_email"]').val())){
        $(co_owners_ele[cindex]).find('[name="co_owner_email"]').parents('.c-required').addClass('c-error');
        $(co_owners_ele[cindex]).find('[name="co_owner_email"]').parents('.c-required').find('.require-msg').hide();
        $(co_owners_ele[cindex]).find('[name="co_owner_email"]').parents('.c-required').find('.format-msg').show();
        $(co_owners_ele[cindex]).find('[name="co_owner_email"]').focus();
        return false;
      }
      else{
        $('#email').parents('.c-required').removeClass('c-error');
        $(co_owners_ele[cindex]).find('[name="co_owner_email"]').parents('.c-required').find('.require-msg').hide();
        $(co_owners_ele[cindex]).find('[name="co_owner_email"]').parents('.c-required').find('.format-msg').hide();
      }

    }
  }

  if($('#add_additional_prop_chbox').is(':checked')){
    var additional_props_ele = $('#additional_props_container .additional-prop-template-wrap');
    for(var pindex = 0; pindex < additional_props_ele.length; pindex ++){
      if($(additional_props_ele[pindex]).find('[name="property_address"]').val() == ''){
        $(additional_props_ele[pindex]).find('[name="property_address"]').parents('.c-required').addClass('c-error');
        $(additional_props_ele[pindex]).find('[name="property_address"]').focus();
        return false;
      }
      else{
        $(additional_props_ele[pindex]).find('[name="property_address"]').parents('.c-required').removeClass('c-error');
      }

      if($(additional_props_ele[pindex]).find('[name="sleeper_sofa_exist"]').val() == ''){
        $(additional_props_ele[pindex]).find('[name="sleeper_sofa_exist"]').parents('.c-required').addClass('c-error');
        $(additional_props_ele[pindex]).find('[name="sleeper_sofa_exist"]').focus();
        return false;
      }
      else{
        $(additional_props_ele[pindex]).find('[name="sleeper_sofa_exist"]').parents('.c-required').removeClass('c-error');
      }

      if($(additional_props_ele[pindex]).find('[name="sleeper_sofa_exist"]').val() !='N/A' && $(additional_props_ele[pindex]).find('[name="sleeper_sofa_size"]').val() == ''){
        $(additional_props_ele[pindex]).find('[name="sleeper_sofa_size"]').parents('.c-required').addClass('c-error');
        $(additional_props_ele[pindex]).find('[name="sleeper_sofa_size"]').focus();
        return false;
      }
      else{
        $(additional_props_ele[pindex]).find('[name="sleeper_sofa_size"]').parents('.c-required').removeClass('c-error');
      }
    }
  }
  return true;
}

var additional_props_count = 0;
var co_owners_count = 0;

function initContactForm(){
  
  $(document).on('click', '#contact_btn', function(){
    if(!checkContactForm()){
      return false;
    }

    if(!$('#add_additional_prop_chbox').is(':checked') || ($('#add_additional_prop_chbox').is(':checked') && $('#additional_props_container .additional-prop-template-wrap').length == 0)){
      alert('Please Add more than 1 property');
      return;
    }
    
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
      var twin_nums = $(additional_props_ele[pindex]).find('[name="twin_nums"]').val();
      var king_nums = $(additional_props_ele[pindex]).find('[name="king_nums"]').val();
      var queen_nums = $(additional_props_ele[pindex]).find('[name="queen_nums"]').val();
      var sleeper_sofa_exist = $(additional_props_ele[pindex]).find('[name="sleeper_sofa_exist"]').val();
      var sleeper_sofa_size = $(additional_props_ele[pindex]).find('[name="sleeper_sofa_size"]').val();
      

      additional_props_data.push({
        property_address: property_address,
        bedrooms: bedrooms,
        bathrooms: bathrooms,
        bathrooms: bathrooms,
        hbathrooms: hbathrooms,
        twin_nums: twin_nums,
        king_nums: king_nums,
        queen_nums: queen_nums,
        sleeper_sofa_exist: sleeper_sofa_exist,
        sleeper_sofa_size: sleeper_sofa_size
      })
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
        'day_phone': $('#day_phone').val(),
        'cell_phone': $('#cell_phone').val(),
        'email': $('#email').val(),
        'add_co_owner_chbox': add_co_owner_chbox,
        'co_owners_data': co_owners_data,
        'add_additional_prop_chbox': add_additional_prop_chbox,
        'additional_props_data': additional_props_data
      },
      success: function(response){
        if(response == 'ok'){
          alert('Thank you so much for contacting Clean Sweep HHI. A representative from our company will contact you within 48 hours.');
          location.reload();
        }
        else if(response == 'email exist'){
          alert('email already exist');
          $('#email').focus();
        }
      }
    })
  });

  //co_owner
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
    $(newhtml).find('[name="sleeper_sofa_size"]').val('');
    $(newhtml).find('[name="sleeper_sofa_size"]').prop('disabled', true);
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

  $(document).on('change', '[name="sleeper_sofa_exist"]', function(){
    
    if($(this).val() == 'N/A'){
      $(this).parents('.additional-prop-template-wrap').find('[name="sleeper_sofa_size"]').prop('disabled', true);
      $(this).parents('.additional-prop-template-wrap').find('[name="sleeper_sofa_size"]').val('');
    }
    else{
      $(this).parents('.additional-prop-template-wrap').find('[name="sleeper_sofa_size"]').prop('disabled', false);
    }
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

  $(document).on('click', '#edit_owner_btn', function(){
    $('#owner_info input').removeAttr('disabled');
    $('#owner_info select').removeAttr('disabled');

    $('#edit_owner_btn').hide();
    $('#save_owner_btn').show();
    $('#cancel_owner_btn').show();

    if($('#add_co_owner_chbox').is(':checked')){
      $('#add_co_owner_btn').css('visibility', 'visible');
    }
    else{
      $('#add_co_owner_btn').css('visibility', 'hidden');
    }

    if($('#add_additional_prop_chbox').is(':checked')){
      $('#add_additional_prop_btn').css('visibility', 'visible');
    }
    else{
      $('#add_additional_prop_btn').css('visibility', 'hidden');
    }

    $('#co_owners_container [name="co_owner_del_btn"]').show();
    $('#additional_props_container [name="additional_prop_del_btn"]').show();
  })

  // var additional_props_count = 0;
  // var co_owners_count = 0;

  $(document).on('click', '#save_owner_btn', function(){

    if(!checkContactForm()){
      return false;
    }

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
      var twin_nums = $(additional_props_ele[pindex]).find('[name="twin_nums"]').val();
      var king_nums = $(additional_props_ele[pindex]).find('[name="king_nums"]').val();
      var queen_nums = $(additional_props_ele[pindex]).find('[name="queen_nums"]').val();
      var sleeper_sofa_exist = $(additional_props_ele[pindex]).find('[name="sleeper_sofa_exist"]').val();
      var sleeper_sofa_size = $(additional_props_ele[pindex]).find('[name="sleeper_sofa_size"]').val();
      

      additional_props_data.push({
        property_address: property_address,
        bedrooms: bedrooms,
        bathrooms: bathrooms,
        bathrooms: bathrooms,
        hbathrooms: hbathrooms,
        twin_nums: twin_nums,
        king_nums: king_nums,
        queen_nums: queen_nums,
        sleeper_sofa_exist: sleeper_sofa_exist,
        sleeper_sofa_size: sleeper_sofa_size
      })
    }

    if(additional_props_ele.length == 0){
      add_additional_prop_chbox = false;
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
        location.reload();

        $('#owner_info input').attr('disabled', 'disabled');
        $('#owner_info select').attr('disabled', 'disabled');

        $('#edit_owner_btn').show();
        $('#save_owner_btn').hide();
        $('#cancel_owner_btn').hide();

        $('#co_owners_container [name="co_owner_del_btn"]').hide();
        $('#additional_props_container [name="additional_prop_del_btn"]').hide();

        $('#add_co_owner_btn').css('visibility', 'hidden');
        $('#add_additional_prop_btn').css('visibility', 'hidden');
      }
    })

  })

  $(document).on('click', '#cancel_owner_btn', function(){
    $('#owner_info input').attr('disabled', 'disabled');
    $('#owner_info select').attr('disabled', 'disabled');

    $('#edit_owner_btn').show();
    $('#save_owner_btn').hide();
    $('#cancel_owner_btn').hide();

    $('#co_owners_container [name="co_owner_del_btn"]').hide();
    $('#additional_props_container [name="additional_prop_del_btn"]').hide();

    $('#add_co_owner_btn').css('visibility', 'hidden');
    $('#add_additional_prop_btn').css('visibility', 'hidden');
  })

  $(document).on('click', '#logout_owner_btn', function(){
    $.ajax({
      url: '/owner_logout',
      type: 'post',
      success: function(response){
        location.reload();
      }
    })
  })

  if(add_co_owner_chbox){
    $('#add_co_owner_chbox').prop('checked', true);

    var html = '';
    if(co_owners_data != null){
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
  }

  if(add_additional_prop_chbox){
    $('#add_additional_prop_chbox').prop('checked', true);

    var html = '';
    if(additional_props_data != null){
      for(var pindex = 0; pindex < additional_props_data.length; pindex++){
        var clone_ele = $('#additional_prop_template').clone();
        var temp_id = pindex + 1;
        
        $(clone_ele).find('.additional-prop-template-wrap').attr('id', 'additional_prop_template_wrap_' + temp_id);
        $(clone_ele).find('[name="property_address"]').attr('value', additional_props_data[pindex]['property_address']);
        $(clone_ele).find('[name="bedrooms"] option[value="' + additional_props_data[pindex]['bedrooms'] + '"]').attr('selected', 'selected');
        $(clone_ele).find('[name="bathrooms"] option[value="' + additional_props_data[pindex]['bathrooms'] + '"]').attr('selected', 'selected');
        $(clone_ele).find('[name="hbathrooms"] option[value="' + additional_props_data[pindex]['hbathrooms'] + '"]').attr('selected', 'selected');
        $(clone_ele).find('[name="twin_nums"] option[value="' + additional_props_data[pindex]['twin_nums'] + '"]').attr('selected', 'selected');
        $(clone_ele).find('[name="king_nums"] option[value="' + additional_props_data[pindex]['king_nums'] + '"]').attr('selected', 'selected');
        $(clone_ele).find('[name="queen_nums"] option[value="' + additional_props_data[pindex]['queen_nums'] + '"]').attr('selected', 'selected');
        // $(clone_ele).find('[name="twin_nums"]').attr('value', additional_props_data[pindex]['twin_nums']);
        // $(clone_ele).find('[name="king_nums"]').attr('value', additional_props_data[pindex]['king_nums']);
        // $(clone_ele).find('[name="queen_nums"]').attr('value', additional_props_data[pindex]['queen_nums']);
        $(clone_ele).find('[name="sleeper_sofa_exist"] option[value="' + additional_props_data[pindex]['sleeper_sofa_exist'] + '"]').attr('selected', 'selected');
        $(clone_ele).find('[name="sleeper_sofa_size"] option[value="' + additional_props_data[pindex]['sleeper_sofa_size'] + '"]').attr('selected', 'selected');
  
        $(clone_ele).find('[name="additional_prop_del_btn"]').attr('data-id', temp_id);
  
        html = html + $(clone_ele).html();
      }
  
      additional_props_count = additional_props_data.length;
      $('#additional_props_container').html(html);
    }
    
  }


  //co_owner
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
    $(newhtml).find('[name="sleeper_sofa_size"]').val('');
    $(newhtml).find('[name="sleeper_sofa_size"]').prop('disabled', true);
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

  $('#owner_info input').attr('disabled', 'disabled');
  $('#owner_info select').attr('disabled', 'disabled');

  $('#co_owners_container [name="co_owner_del_btn"]').hide();
  $('#additional_props_container [name="additional_prop_del_btn"]').hide();

  $(".onlynumbs").inputFilter(function(value) {
    return /^\d*$/.test(value);
  });


  $(document).on('change', '[name="sleeper_sofa_exist"]', function(){
    
    if($(this).val() == 'N/A'){
      $(this).parents('.additional-prop-template-wrap').find('[name="sleeper_sofa_size"]').prop('disabled', true);
      $(this).parents('.additional-prop-template-wrap').find('[name="sleeper_sofa_size"]').val('');
    }
    else{
      $(this).parents('.additional-prop-template-wrap').find('[name="sleeper_sofa_size"]').prop('disabled', false);
    }
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