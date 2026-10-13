jQuery(function ($) {
  $(".toggle").on("click", function () {
    $(this).toggleClass("active");
    $(this).prev().slideToggle();
    $(this).next().slideToggle();
  });

  $(window).on("load resize", function () {
    if ($(window).width() > 767) {
      // $('#case .toggle').each(function(){
      $(".toggle").each(function () {
        $(this).removeClass("active");
        $(this).prev().removeAttr("style");
        $(this).next().removeAttr("style");
      });
      $(".swiper-slide .detail ").removeClass("open");
      $(".swiper-slide .detail .body").removeAttr("style");
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

  $('a[href^="#"]').click(function () {
    var speed = 800;
    var w = $(window).width();
    var headerHeight = 115;

    if (w <= 767) {
      headerHeight = 60;
    }

    ((href = $(this).attr("href")),
      (target = $(href === "#" || href === "" ? "html" : href)),
      (position = target.offset().top - headerHeight));
    $("html, body").animate({ scrollTop: position }, speed, "swing");
    location.hash = "";
    return false;
  });

  $(".js-switch").on("click", function () {
    $(this).toggleClass("is-active").prevAll(".text").toggleClass("is-open");
    $(this).find(".bar").toggleClass("is-active");
    if ($(this).hasClass("is-active")) {
      $(this).find(".switchText").text("閉じる");
    } else {
      $(this).find(".switchText").text("詳細を見る");
    }
  });

  $(document).ready(function () {
    $("form").validationEngine();
  });

  $(".js-close").on("click", function () {
    $(".pop").removeClass("is-show");
  });

  history.pushState(null, null, null);
  $(window).on("popstate", function () {
    if (location.hash === "") {
      if ($(".pop").hasClass("is-show")) {
        $(".pop").removeClass("is-show");
      } else {
        $(".pop").addClass("is-show");
      }
    }
  });

  $(".swiper-slide .detail").each(function () {
    $(this).on("click", function () {
      curHeight = $(this).prev(".body").height();
      autoHeight = $(this).prev(".body").css("height", "auto").height();
      if ($(this).hasClass("open")) {
        $(this).prev(".body").height(curHeight).animate({ height: "33rem" }, 350);
        $(this).removeClass("open");
      } else {
        $(this).prev(".body").height(curHeight).animate({ height: autoHeight }, 350);
        $(this).addClass("open");
      }
    });
  });

  //アコーディオン
  $(".accordion .toggle_btn").on("click", function () {
    $(this).closest(".accordion").find(".toggle_area").slideToggle(1000);
    $(this).closest(".accordion").siblings(".hgroup").toggleClass("on");
    $(this).toggleClass("on");
  });

  ///SP
  var $nav = $("#gnav ul");
  $(window).on("load resize", function () {
    if (window.innerWidth > 767) {
      $("body").removeClass("spnavon");
      $("header").removeClass("spnavon");
      $("#spnav").removeClass("on");
      //$nav.fadeIn(0);
    } else {
    }
  });
  // $('#gnav .toggle').on('click',function(){
  $("#gnav .btn").on("click", function () {
    $(this).toggleClass("on");
    $(this).next(".submenu").slideToggle();
  });
  $("#spnav").click(function () {
    if ($(this).hasClass("on")) {
      $("body").removeClass("spnavon");
      $("header").removeClass("spnavon");
      $("#spnav").removeClass("on");
      $("#gnav").fadeOut();
    } else {
      $("body").addClass("spnavon");
      $("header").addClass("spnavon");
      $("#spnav").addClass("on");
      $("#gnav").fadeIn();
    }
  });

  // $('#spnav').on('click', function() {
  //   $(this).toggleClass('on');
  //   $('#gnav').slideToggle();
  //   $('html, body').toggleClass('spnavon');
  // });

  $(".scrollin.direct").each(function () {
    var t = 200;
    var obj = $(this);
    if (obj.attr("data-scdelay") > 0) {
      t = obj.attr("data-scdelay");
    }
    setTimeout(function () {
      obj.addClass("on");
      obj.removeClass("off");
    }, t);
  });
});

$(window).on("load scroll resize", function () {
  $(".scrollin")
    .not(".direct")
    .each(function () {
      var st = $(window).scrollTop();
      var wh = document.documentElement.clientHeight;
      var ot = $(this).offset().top;
      var oh = $(this).height();
      if (oh > 400) {
        oh = 400;
      }
      if (st + wh > ot + oh / 2) {
        var t = 100;
        var obj = $(this);
        if (obj.attr("data-scdelay") > 0) {
          t = obj.attr("data-scdelay");
        }
        setTimeout(function () {
          obj.addClass("on");
          obj.removeClass("off");
        }, t) / 2;
      }
    });
});

$(window).on("load resize", function () {
  var ww = 54;
  var fh = $("#fixed").height();
  if ($(window).width() < 750) {
    ww = 27;
    //SPページ離脱対策
    var count = 0;
    history.pushState(null, null, null);
    $(window).on("popstate", function () {
      if (count == 0) {
        history.pushState(null, null, null);
        $("#popup").fadeIn();
        count++;
      } else {
        history.go(-2);
      }
    });
    //ポップアップ用
    var wh = $(window).height();
    $("#popup").css("height", wh + "px");
  }
  $("footer .gray").css("padding-bottom", fh + ww + "px");

  $("#popup a").on("click", function () {
    $("#popup").fadeOut();
  });
});

// スライダー
// お客さまから頂いた声
const voiceswiper = new Swiper(".voiceswiper", {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 0,
  centeredSlides: true,
  speed: 500,
  loopAdditionalSlides: 1,
  breakpoints: {
    767: {
      slidesPerView: 1,
      spaceBetween: 0,
      allowTouchMove: false,
    },
  },
  pagination: {
    el: ".swiper-pagination",
  },
  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// スライダー
const columnSwiper = new Swiper(".columnswiper", {
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
    },
  },
  pagination: {
    clickable: true,
    el: ".swiper-pagination",
  },
  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

$(function () {
  /**
   * contactform7mod.js
   * contactform エントリー完了時のtopポジション調整（wpcf7submit.addEventListenerオーバーライド）
   */
  document.addEventListener(
    "wpcf7submit",
    function (event) {
      switch (event.detail.status) {
        case "wpcf7c_confirmed":
          wpcf7c_step1(event.detail.id);
          break;
        case "mail_sent":
          wpcf7c_step2(event.detail.id);
          var path = window.location.pathname; // 現在のURLパスを取得
          var redirectUrl = "/contact/thanks/"; // 遷移先を判定
          // 立ち退き特設ページの場合
          if (path.indexOf("/tachinoki/contact") !== -1) {
            redirectUrl = "/tachinoki/contact/thanks/";
          } else if (path.indexOf("/saimu/contact") !== -1) {
            redirectUrl = "/saimu/contact/thanks/";
          } else if (path.indexOf("/hiseikyu/contact") !== -1) {
            redirectUrl = "/hiseikyu/contact/thanks/";
          }
          // 通常のthanksページへ遷移
          window.location.href = redirectUrl;

          break;
      }
    },
    false,
  );

  wpcf7c_scroll = function (unit_tag) {
    jQuery(jQuery.find("input[name=_wpcf7_unit_tag]")).each(function () {
      var position = jQuery(".wpcf7").offset().top - 150; /* 戻り位置 */
      jQuery("html, body").animate({ scrollTop: position }, 500, "swing");

      // if(jQuery(this).val() == unit_tag) {
      //     var parent = jQuery(this).parents("form");
      //     var speed = 500; /* スクロールの速度 */
      //     var position = parent.offset().top - 120; /* 戻り位置 */
      //     if(jQuery('.wpcf7c-anchor').size() != 0) {
      //         position = jQuery('.wpcf7c-anchor').offset().top - 120; /* 戻り位置 */
      //     }
      //     jQuery("html, body").animate({scrollTop:position}, speed, "swing");
      // }
    });
  };

  // ボタン
  $(".btn_regular .txt").wrap('<span class="ul"></span>');
  $(".btn_regular").append('<span class="c_arrow"></span>');

  $(".btn_regular:has(input)").addClass("disabled");

  $('input[aria-invalid="false"]').change(function () {
    $(".btn_regular:has(input)").removeClass("disabled");
    $(".btn_regular:has(input:disabled)").addClass("disabled");
  });
});

// 追従CTAをMVを通り過ぎてから表示
document.addEventListener("DOMContentLoaded", () => {
  const cta = document.querySelector(".c-fixed-cta");
  if (!cta) return;

  const ctaHeight = cta.offsetHeight;

  window.addEventListener("scroll", () => {
    const scrollY = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollY > ctaHeight) {
      cta.classList.add("is-visible");
    } else {
      cta.classList.remove("is-visible");
    }
  });
});

// 追従CTAの処理
$(function () {
  $(".c-fixed-cta .close").on("click", function () {
    $(".c-fixed-cta").addClass("js-hidden");
  });
});
