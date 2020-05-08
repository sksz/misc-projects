const main = function() {
    $('.more-btn').on('click', function() {
      $(this).next('.more-menu').toggle();
    });
    $('.share').on('click', function() {
      $(this).next('.share-menu').toggle();
    });
    $('.notification').on('click', function() {
      $(this).toggleClass('active');
    })
  };
  
  $(document).ready(main);