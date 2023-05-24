$(document).ready(function(){
  const trigger = $('ul li .ajax-navigate'),
    container = $('#content');

  trigger.on('click', function(){
    const $this = $(this),
      target = $this.data('target');

      container.load(target);

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
