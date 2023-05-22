$(document).ready(function(){
  const trigger = $('ul li .ajax-navigate'),
    container = $('#content');

  trigger.on('click', function(){
    const $this = $(this),
      target = $this.data('target');

      container.load('admin/' + target);

      console.log(container);

      return false;
  });
});