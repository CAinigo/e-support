$(function(){
  $('#register-form').submit(function(e){
    e.preventDefault();

    $('#reg-btn').val('Please Wait...');
    $('#reg-btn').attr('disabled', 'disabled');
    $.ajax({
      url:  $(this).attr('action'),
      method: 'post',
      data: $(this).serialize(),
      dataType: 'json',
      success: function(res){
        if(res.status == 400){
          showError('lname', res.messages.last_name);
          showError('fname', res.messages.first_name);
          showError('mname', res.messages.middle_name);
          showError('sname', res.messages.suffix_name);
          showError('bday', res.messages.birthday);
          showError('gender', res.messages.gender);
          showError('zone', res.messages.zone);
          showError('e_status', res.messages.e_status);
          showError('c_status', res.messages.c_status);
          showError('contact', res.messages.contact);
          showError('email', res.messages.email);
          showError('reg_username', res.messages.username);
          showError('reg_password', res.messages.password);
          $('#reg-btn').val('Register');
          $('#reg-btn').removeAttr('disabled');
        }else if(res.status == 200){
          $('#registered-complete').html(showMessage('success', res.messages));
          $('#register-form')[0].reset();
          removeValidationClasses('#register-form');
          $('#reg-btn').val('Register');
          $('#reg-btn').removeAttr('disabled');
        }
      }
    });
  });
});

function showError(field, message){
  if(!message){
    $('#' + field).addClass('is-valid').removeClass('is-invalid').siblings('.invalid-feedback').text('');
  }else{
    $('#' + field).addClass('is-invalid').removeClass('is-valid').siblings('.invalid-feedback').text(message);
  }
}

function removeValidationClasses(form){
  $(form).each(function(){
    $(form).find(':input').removeClass('is-valid is-invalid');
  });
}

function showMessage(type, message){
  return `<div class="alert alert-${type} alert-dismissible fade show position-absolute top-25 start-50 translate-middle z-1" role="alert">
  <strong>${message}</strong> You should check in on some of those fields below.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>`
}