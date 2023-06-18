$(document).ready(function(){
  const trigger = $('ul li .ajax-navigate'),
    container = $('#content'),
    contLoader = $('#content-loader');

  trigger.on('click', function(){
    const $this = $(this),
      target = $this.data('target');

      container.addClass('d-none');
      contLoader.addClass('custom-loader');

      container.load('/sub-admin/' + target, function(data, status){
        switch(target){
          case 'dashboard': 
            container.removeClass('d-none');
            contLoader.removeClass('custom-loader');
            break;
          case 'residents': 
            container.removeClass('d-none');
            contLoader.removeClass('custom-loader');
            break;
          case 'clearance': 
            container.removeClass('d-none');
            contLoader.removeClass('custom-loader');
            break;
          case 'business-permit': 
            container.removeClass('d-none');
            contLoader.removeClass('custom-loader');
            break;
          case 'indigency': 
            container.removeClass('d-none');
            contLoader.removeClass('custom-loader');
            break;
          case 'reports': 
            container.removeClass('d-none');
            contLoader.removeClass('custom-loader');
            break;
          case 'programs': 
            container.removeClass('d-none');
            contLoader.removeClass('custom-loader');
            break;
          case 'spot': 
            container.removeClass('d-none');
            contLoader.removeClass('custom-loader');
            break;
          case 'account': 
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
        case 'residents': $('#residents').addClass('navigate-active');
          break;
        case 'clearance': $('#clearance').addClass('navigate-active');
          break;
        case 'business-permit': $('#business-permit').addClass('navigate-active');
          break;
        case 'indigency': $('#indigency').addClass('navigate-active');
          break;
        case 'reports': $('#reports').addClass('navigate-active');
          break;
        case 'programs': $('#programs').addClass('navigate-active');
          break;
        case 'spot': $('#spot').addClass('navigate-active');
          break;
        case 'account': $('#account').addClass('navigate-active');
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
