var pContainerHeight = $('.bird-box').height();

$(window).scroll(function(){

  var wScroll = $(this).scrollTop();

  if (wScroll <= pContainerHeight) {
    $('.palm').css({
      'transform' : 'translate(0px, '+ wScroll /2 +'%)'
    });
  }

  // Landing Elements
  if(wScroll > $('.main-wrap').offset().top - ($(window).height() / 1.8)) {

    $('.main-wrap figure').each(function(){
      $('.main-wrap figure').addClass('is-showing');
    });
  }
});
