jQuery(function ($) {
  $('.case_list .accordion_btn').on('click', function () {
    var $btn = $(this);
    var $text = $btn.closest('li').find('.accordion_text');
    var el = $text[0];
    var isOpen = $btn.hasClass('open');
    $btn.toggleClass('open');
    $btn.find('span').text(isOpen ? '詳しく見る' : '閉じる');
    $text.stop(true, true);

    if (!isOpen) {
      $text.addClass('open');
      el.style.display = 'block';
      el.style.height = 'auto';
      el.style.overflow = 'visible';
      var h = el.scrollHeight;
      el.style.overflow = 'hidden';
      el.style.height = '0px';
      $text.animate({ height: h }, 200, function () {
        el.style.height = '';
        el.style.overflow = '';
      });
    } else {
      var currentH = el.scrollHeight;
      el.style.overflow = 'hidden';
      el.style.height = currentH + 'px';
      $text.animate({ height: 0 }, 200, function () {
        $text.removeClass('open');
        el.style.display = 'none';
        el.style.height = '';
        el.style.overflow = '';
      });
    }
  });

  $('.qa_set .accordion_btn').on('click', function () {
    $(this).toggleClass('open');
    $(this).next('.accordion_text').slideToggle(200);
  });

  $('.fuwat').css('visibility', 'hidden');
  $(window).on('scroll', function () {
    var windowHeight = $(window).height();
    var topWindow = $(window).scrollTop();
    $('.fuwat').each(function () {
      var objectPosition = $(this).offset().top;
      if (topWindow > objectPosition - windowHeight + 200) {
        $(this).addClass('fuwatAnime');
      }
    });
  }).trigger('scroll');
});
