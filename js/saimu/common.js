
$(function(){

  $('a[href^="#"]').click(function(){
    var adjust = 0;
    var speed = 300;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = (target.offset().top + adjust);
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    $('#popup').hide();                     // モーダルウィンドウを非表示
    $('body').css('overflow-y','auto');     // 本文の縦スクロールを有効
    return false;
  });

  $(".answer-btn").click(function(){
    $(this).prev().slideToggle(250);
    $(this).find("span").toggle();
  });

  $(".close-btn").click(function(){
    $("#popup").fadeOut();
  });

  //「開く」がクリックされた場合
  $("popstate").on('click',function(){
    $('body').css('overflow-y', 'hidden');  // 本文の縦スクロールを無効
    $('#popup').show();                     // モーダルウィンドウを表示
  });
  //「閉じる」がクリックされた場合
  $('.close-btn').on('click',function(){
    $('#popup').hide();                     // モーダルウィンドウを非表示
    $('body').css('overflow-y','auto');     // 本文の縦スクロールを有効
  });

  $("#popup").css("height", $(window).height() + px);

  if ('addEventListener' in document) {
    document.addEventListener('DOMContentLoaded', function() {
        FastClick.attach(document.body);
    }, false);
  }

  const setFillHeight = () => {
    const vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
  }

  window.addEventListener('resize', setFillHeight);
  setFillHeight();
  
});

//スクロールin
$(function() {
  $('.scrollin.direct').each(function(){
    var t = 200;
    var obj = $(this);
    if (obj.attr('data-scdelay') > 0){
      t = obj.attr('data-scdelay');
    }
    setTimeout(function(){
      obj.addClass('on');
      obj.removeClass('off');
    }, t);
  });
  $(window).on('load scroll resize',function(){
    $('.scrollin').not('.direct').each(function(){
      var st = $(window).scrollTop();
      var wh = document.documentElement.clientHeight;
      var ot = $(this).offset().top;
      var oh = $(this).height();
      if (oh > 400) {
        oh = 400;
      }
      if(st+wh > ot+oh/2) {
        var t = 100;
        var obj = $(this);
        if (obj.attr('data-scdelay') > 0){
          t = obj.attr('data-scdelay');
        }
        setTimeout(function(){
          obj.addClass('on');
          obj.removeClass('off');
        }, t)/2;
      }
    });
  });
});

$(window).on('load resize', function(){
  var ww = 54;
  var fh = $("#fixed").height();
  if($(window).width() < 750){

    ww = 27;

    //SPページ離脱対策
    var count = 0;
      history.pushState(null, null, null);
      $(window).on("popstate", function(){
        if(count == 0){
        history.pushState(null, null, null);
        $("#popup").fadeIn();
        count++;
      }else{
        history.go(-2);
      }
    });

    //ポップアップ用
    var wh = $(window).height();
    $("#popup").css("height", wh + "px");

  }

  $("footer .gray").css("padding-bottom",  (fh + ww) + "px");

});

// 20260202 add
// 追従CTAの処理
// $(function() {
//   $('.c-fixed-cta .close').on('click',function(){
//     $('.c-fixed-cta').addClass('js-hidden');
//   });
// });