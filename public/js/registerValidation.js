$(function(){
  $('#register-form').submit(function(e){
    e.preventDefault();

    const regModal = bootstrap.Modal.getOrCreateInstance('#registerModal');
    $('#reg-btn').val('Please Wait...');
    $('#reg-btn').attr('disabled', 'disabled');
    $.ajax({
      url:  $(this).attr('action'),
      method: 'post',
      data: $(this).serialize(),
      dataType: 'json',
      success: function(res){
        if(res.status == 400){
          showError('reg-lname', res.messages.last_name);
          showError('reg-fname', res.messages.first_name);
          showError('reg-mname', res.messages.middle_name);
          showError('reg-sname', res.messages.suffix_name);
          showError('reg-bday', res.messages.birthday);
          showError('reg-gender', res.messages.gender);
          showError('reg-zone', res.messages.zone);
          showError('reg-e-status', res.messages.e_status);
          showError('reg-c-status', res.messages.c_status);
          showError('reg-contact', res.messages.contact);
          showError('reg-email', res.messages.email);
          showError('reg-username', res.messages.username);
          showError('reg-password', res.messages.password);
          $('#reg-btn').val('Register');
          $('#reg-btn').removeAttr('disabled');
        }else if(res.status == 200){
          $('#registered-complete').html(showMessage('success', res.messages));
          $('#register-form')[0].reset();
          removeValidationClasses('#register-form');
          $('#reg-btn').val('Register');
          $('#reg-btn').removeAttr('disabled');
          regModal.hide();
          
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
  return `<div class="alert alert-${type} alert-dismissible fade show" role="alert">
  <strong>${message}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>`
}

$(function(){
  $('#company-form').submit(function(e){
    e.preventDefault();

    const comModal = bootstrap.Modal.getOrCreateInstance('#companyModal');
    $('#com-btn').val('Please Wait...');
    $('#com-btn').attr('disabled', 'disabled');
    $.ajax({
      url:  $(this).attr('action'),
      method: 'post',
      data: $(this).serialize(),
      dataType: 'json',
      success: function(res){
        if(res.status == 400){
          showErrorCom('com-lname', res.messages.last_name);
          showErrorCom('com-fname', res.messages.first_name);
          showErrorCom('com-mname', res.messages.middle_name);
          showErrorCom('com-sname', res.messages.suffix_name);
          showErrorCom('b_name', res.messages.business_name);
          showErrorCom('type_of_b', res.messages.type_of_business);
          showErrorCom('com-zone', res.messages.zone);
          showErrorCom('com-contact', res.messages.contact);
          showErrorCom('com-email', res.messages.email);
          showErrorCom('com-username', res.messages.username);
          showErrorCom('com-password', res.messages.password);
          $('#com-btn').val('Register');
          $('#com-btn').removeAttr('disabled');
        }else if(res.status == 200){
          $('#registered-complete').html(showMessageCom('success', res.messages));
          $('#company-form')[0].reset();
          removeValidationClassesCom('#company-form');
          $('#com-btn').val('Register');
          $('#com-btn').removeAttr('disabled');
          comModal.hide();
          
        }
      }
    });
  });
});

function showErrorCom(field, message){
  if(!message){
    $('#' + field).addClass('is-valid').removeClass('is-invalid').siblings('.invalid-feedback').text('');
  }else{
    $('#' + field).addClass('is-invalid').removeClass('is-valid').siblings('.invalid-feedback').text(message);
  }
}

function removeValidationClassesCom(form){
  $(form).each(function(){
    $(form).find(':input').removeClass('is-valid is-invalid');
  });
}

function showMessageCom(type, message){
  return `<div class="alert alert-${type} alert-dismissible fade show" role="alert">
  <strong>${message}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>`
}