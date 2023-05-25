$(document).ready(function(){
  const trigger = $('ul li .ajax-navigate'),
    container = $('#content'),
    contLoader = $('#content-loader');

  trigger.on('click', function(){
    const $this = $(this),
      target = $this.data('target');

      container.addClass('d-none');
      contLoader.addClass('custom-loader');

      container.load('/admin/' + target, function(data, status){
        switch(target){
          case 'dashboard': 
            container.removeClass('d-none');
            contLoader.removeClass('custom-loader');
            break;
          case 'barangay-officials': 
            container.removeClass('d-none');
            contLoader.removeClass('custom-loader');
            break;
          case 'residents': 
            container.removeClass('d-none');
            contLoader.removeClass('custom-loader');
            break;
          case 'business-establishments': 
            container.removeClass('d-none');
            contLoader.removeClass('custom-loader');
            break;
          case 'users': 
            container.removeClass('d-none');
            contLoader.removeClass('custom-loader');
            break;
          case 'user-approval': 
            container.removeClass('d-none');
            contLoader.removeClass('custom-loader');
            break;
          case 'message': 
            container.removeClass('d-none');
            contLoader.removeClass('custom-loader');
            break;
          case 'accounts': 
            container.removeClass('d-none');
            contLoader.removeClass('custom-loader');
            break;
          default :
            container.removeClass('d-none');
            contLoader.removeClass('custom-loader');
            console.log('404');
        }
      });

      trigger.removeClass('navigate-active');

      switch(target){
        case 'dashboard': $('#dashboard').addClass('navigate-active');
          break;
        case 'barangay-officials': $('#officials').addClass('navigate-active');
          break;
        case 'residents': $('#residents').addClass('navigate-active');
          break;
        case 'business-establishments': $('#establishments').addClass('navigate-active');
          break;
        case 'users': $('#users').addClass('navigate-active');
          break;
        case 'user-approval': $('#approval').addClass('navigate-active');
          break;
        case 'message': $('#message').addClass('navigate-active');
          break;
        case 'accounts': $('#accounts').addClass('navigate-active');
          break;
        default :
          console.log('404');
      }
      
      // console.log(container);

      return false;
  });
});

// $(document).ready(function() {
//   const trigger = $('ul li .ajax-navigate'),
//     container = $('#content');

//   trigger.on('click', function(e) {
//     e.preventDefault();

//     const $this = $(this),
//       target = $this.data('target');

//     $.post(target, function(target) {
//       container.html(response);
//       console.log(container);
//     });

//     return false;
//   });
// });


// $(document).ready(function() {
//   // Event listener for tab clicks
//   $('ul li .ajax-navigate').click(function(e) {
//       e.preventDefault();

//       var tab = $(this).data('target');

//       // AJAX request to get tab content
//       $.ajax({
//           url: "/admin/" + tab,
//           type: 'POST',
//           dataType: 'json',
//           success: function(response) {
//               // Update the tab content with the retrieved content
//               $('#content').html(response.content);
//           }
//       });
//   });
// });
