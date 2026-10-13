// マスク
// $(function () {
//     $('#mskSwitch').on('mouseover', function () {
//         $('#msk').addClass("active");
//         return false;
//     });

//     $('#return').on('click', function () {
//         $('#msk').removeClass("active");
//         return false;
//     });
// });

// $(function () {
//     if (navigator.userAgent.indexOf('Android') > 0) {
//         $("html").addClass("android");
//     }
// });

$('#myModal').on('shown.bs.modal', function () {
    $('#fm').trigger('focus')
})

$(function () {
    var scroll = new SmoothScroll('a[href*="#"]', {
        easing:'linear',
        speed: 20, //スクロールする速さ
    })
});

// $('a[href="#contact"]').on('click', function (e) {
//     seminarProcessing(e);
//     var speed = 100;
//     var href = $(this).attr("href");
//     var target = $(href == "#" || href == "" ? 'html' : href);
//     var position = target.offset().top;
//     $('body,html').animate({
//         scrollTop: position
//     }, speed, 'swing');
//     return;
// });

jQuery(function($){

    $(document).ready(function(){
        // 最初のパネルの場合は直接slideUp()を実行
        $('.case_list .accordion_btn').click(function(){
          var isOpen = $(this).hasClass('open');
          $(this).toggleClass('open');
      
          if($(this).hasClass('open') && $(this).index() === 0) {
            $(this).prev('.accordion_text').slideDown(200);
          } else {
            $(this).prev('.accordion_text').slideToggle(200);
          }
      
          // 開閉時のテキスト切り替え
          var newText = isOpen ? '詳しく見る' : '閉じる';
          $(this).find('span').text(newText);
        });
      });
      


 // FAQ accordion
    $(".qa_set .accordion_btn").on("click", function() {
        var isOpen = $(this).hasClass('open');
          $(this).toggleClass('open');
      
          if($(this).hasClass('open') && $(this).index() === 0) {
            $(this).next('.accordion_text').slideDown(200);
          } else {
            $(this).next('.accordion_text').slideToggle(200);
          }
        // $(this).next().slideToggle();
        // $(this).toggleClass("open");
        // $(this).next().toggleClass("open");
    });
});

// ふわっとフェードイン
$(document).ready(function(){
  $('.fuwat').css('visibility','hidden');
  $(window).scroll(function(){
      var windowHeight = $(window).height(),
         topWindow = $(window).scrollTop();
      $('.fuwat').each(function(){
          var objectPosition = $(this).offset().top;
          if(topWindow > objectPosition - windowHeight + 200){
           $(this).addClass("fuwatAnime");
          }
      });
  });
});