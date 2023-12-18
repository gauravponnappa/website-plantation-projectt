$(window).scroll(function() {
    if ($(window).scrollTop() >= 30) {
      $('.card').css('background', '#c88d70');
      $('.menu').css('color', '#000000');
      $('.menu2').css('color', '#000000');
    } else {
      $('.card').css('background', 'transparent');
      $('.menu').css('color', '#ffffff');
      $('.menu2').css('color', '#ffffff');
    }
  });

