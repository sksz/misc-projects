$(document).ready(() => {
  //display what user types
  $('#text').on('keyup', event => {
    $('.preview').html($(event.currentTarget).val());
  });
  
  //change fonts on choosing option from a menu
  $('#font').on('change', event => {
    $('.preview').css('fontFamily', $(event.currentTarget).val());
  });
  
  //changes weight of the font on choosing option from a menu
  $('#weight').on('change', event => {
    $('.preview').css('fontWeight', $(event.currentTarget).val());
  });
  
  //changes font size on input
  $('#size').on('keyup', event => {
    let fontSize = $(event.currentTarget).val() + 'px';
    $('.preview').css('fontSize', fontSize);
  });
})