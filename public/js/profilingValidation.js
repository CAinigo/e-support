// adding officials
$(function(){
  $('#add-official-form').submit(function(e){
    e.preventDefault();

    const addOfficialModal = bootstrap.Modal.getOrCreateInstance('#brgyOfficialRegModal');
    $('#add-officials-btn').val('Please Wait...');
    $('#add-officials-btn').attr('disabled', 'disabled');
    $.ajax({
      url:  $(this).attr('action'),
      method: 'post',
      data: $(this).serialize(),
      dataType: 'json',
      success: function(res){
        if(res.status == 400){
          showError('profile-img', res.messages.profile_img);
          showError('lname', res.messages.last_name);
          showError('fname', res.messages.first_name);
          showError('mname', res.messages.middle_name);
          showError('sname', res.messages.suffix_name);
          showError('zone', res.messages.zone);
          showError('gender', res.messages.gender);
          showError('contact', res.messages.contact);
          showError('email', res.messages.email);
          showError('c-status', res.messages.c_status);
          showError('bday', res.messages.birthday);
          showError('position', res.messages.position);
          $('#add-officials-btn').val('Add');
          $('#add-officials-btn').removeAttr('disabled');
        }else if(res.status == 200){
          // $('#registered-complete').html(showMessage('success', res.messages));
          $('#add-official-form')[0].reset();
          removeValidationClasses('#add-official-form');
          $('#add-officials-btn').val('Add');
          $('#add-officials-btn').removeAttr('disabled');
          addOfficialModal.hide();
          
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