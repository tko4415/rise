$(function(){

  $('.toggle').on('click',function(){
    $(this).toggleClass('active');
    $(this).prev().slideToggle();
    $(this).next().slideToggle();
  });

  $(window).on('load resize', function(){
    if($(window).width() > 767){
      $('.toggle').each(function(){
        $(this).removeClass('active');
        $(this).prev().removeAttr('style');
        $(this).next().removeAttr('style');
      });
    }
  });


  // 自動スクロール
  // $('.js-scroll[href^="#"]').on("click",function(){
  //   var headerH = $(".header").height();
  //   let href= $(this).attr("href");
  //   let target = $(href == "#" || href == "" ? 'html' : href);
  //   let position = target.offset().top;
  //   $("html, body").animate({scrollTop:position}, 700, "swing");
  //   location.hash ='';
  //   return false;
  // });

  $('a[href^="#"]').click(function(){
    var speed = 800,
    href = $(this).attr("href"),
    target = $(href === "#" || href === "" ? 'html' : href),
    position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    location.hash ='';
    return false;
  });
  
  $(document).ready(function(){
    $("form").validationEngine();
  });
  
  $(".js-close").on("click",function(){
    $(".pop").removeClass("is-show");
  });

  history.pushState(null, null, null);
  $(window).on("popstate", function(){
    if(location.hash === ""){
      if($(".pop").hasClass("is-show")){
        $(".pop").removeClass("is-show");
      }else{
        $(".pop").addClass("is-show");
      }
    }
  });

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

  $("#popup a").on('click',function(){
    $("#popup").fadeOut();
  })
});

// スライダー
// const voiceswiper = new Swiper('.voiceswiper', {
//   loop: true,
//   slidesPerView: 1,
//   spaceBetween: 0,
//   centeredSlides: true,
//   speed: 500,
//   loopAdditionalSlides: 1,
//   breakpoints: {
//     767: {
//       slidesPerView: 1,
//       spaceBetween: 0,
//       allowTouchMove: false,
//     }
//   },
//   pagination: {
//     el: '.swiper-pagination',
//   },
//   // Navigation arrows
//   navigation: {
//     nextEl: '.swiper-button-next',
//     prevEl: '.swiper-button-prev',
//   },
// });

// 追従CTAの処理
$(function() {
  $('.c-fixed-cta .close').on('click',function(){
    $('.c-fixed-cta').addClass('js-hidden');
  });
});

// スライダー
const columnSwiper = new Swiper('.columnswiper', {
  loop: true,
  slidesPerView: 1.3,
  spaceBetween: 0,
  centeredSlides: false,
  speed: 500,
  // loopAdditionalSlides: 1,
  breakpoints: {
    767: {
      slidesPerView: 4,
      centeredSlides: false,
      spaceBetween: 0,
      allowTouchMove: false,
    }
  },
  pagination: {
    clickable: true,
    el: '.swiper-pagination',
  },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});