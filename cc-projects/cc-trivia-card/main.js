$(document).ready(() =>{
  //hint toggler
  $('.hint-box').on('click', () => {
    $('.hint').slideToggle(300); 
  });
  //wrong answer #1 toggler
  $('.wrong-answer-one').on('click', () => {
    $('.wrong-text-one').fadeOut();
    $('.frown').show();
  });
   //wrong answer #2 toggler
  $('.wrong-answer-two').on('click', () => {
    $('.wrong-text-two').fadeOut();
    $('.frown').show();
  });
  //wrong answer #3 toggler
  $('.wrong-answer-three').on('click', () => {
    $('.wrong-text-three').fadeOut();
    $('.frown').show();
  });
  //correct answer toggler
  $('.correct-answer').on('click', () => {
    $('.frown').hide();
    $('.smiley').show();
    $('.wrong-text-one').fadeOut();
    $('.wrong-text-two').fadeOut();
    $('.wrong-text-three').fadeOut();
  });
});