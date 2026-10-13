/**
 * contactform7mod.js
 * contactform エントリー完了時のtopポジション調整（wpcf7submit.addEventListenerオーバーライド）

 document.addEventListener( 'wpcf7submit', function( event ) {
  switch ( event.detail.status ) {
      case 'wpcf7c_confirmed':
          wpcf7c_step1(event.detail.id);
          break;
      case 'mail_sent':
          wpcf7c_step2(event.detail.id);
        　// スムーズスクロール
          jQuery("html, body").animate({scrollTop: 0}, ５00, "swing");
          break;
  }
}, false );
 */

//スマートフォンの場合はSPコンテンツ

var ua = navigator.userAgent
var sp = ua.indexOf('iPhone') > -1 ||
  (ua.indexOf('Android') > -1 && ua.indexOf('Mobile') > -1)
var tab = !sp && (
  ua.indexOf('iPad') > -1 ||
  (ua.indexOf('Macintosh') > -1 && 'ontouchend' in document) ||
  ua.indexOf('Android') > -1
)
if (tab) {
  $('meta[name="viewport"]').attr('content','width=1080')
}
if (sp && document.documentElement.clientWidth > 767 ) {
  $('meta[name="viewport"]').attr('content','width=767')
}

$(function() {

  //トップ
  var d = 1000;
  var t = 3000;
  $('main#home #mv .mark').addClass('on');
  setTimeout(function(){$('main#home #mv .txt_1').addClass('on');},t*0+d)
  setTimeout(function(){$('main#home #mv .txt_2').addClass('on');},t*1+d)
  setTimeout(function(){$('main#home #mv .txt_3').addClass('on');},t*2+d)
  const setFillHeight = function(){
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', vh + 'px');
  }
  // 画面のサイズ変動があった時に高さを再計算する
  window.addEventListener('orientationchange', setFillHeight);
  // 初期化
  setFillHeight();
  
  const setMvHeight = function(){
    let mvh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--mvh', mvh + 'px');
  }
  // 初期化
  setMvHeight();
  
  //ヘッダー
	$(window).on('load scroll resize',function(){
		var st = $(window).scrollTop();
		var wh = document.documentElement.clientHeight;
		if (st > 50) {
      $('header').addClass('on');
		} else {
			$('header').removeClass('on');
		}
	});

  //スクロールin
  $('.scrollin.direct').each(function(){
    var t = 100;
    var obj = $(this);
    if (obj.attr('data-time') > 0){
      t = obj.attr('data-time');
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
      if (oh > 200) {
        oh = 200;
      }
      if(st+wh > ot+oh/2) {
        var t = 100;
        var obj = $(this);
        if (obj.attr('data-time') > 0){
          t = obj.attr('data-time');
        }
        setTimeout(function(){
          obj.addClass('on');
          obj.removeClass('off');
        }, t);
      }
    });
  });

  //アコーディオン
  $('.accordion .toggle_btn').on('click',function(){
    $(this).closest('.accordion').find('.toggle_area').slideToggle(1000);
    $(this).closest('.accordion').siblings('.hgroup').toggleClass('on');
    $(this).toggleClass('on');
  });

  ///SP
  var $nav = $('#gnav ul');
  $(window).on('load resize', function() {
		if(window.innerWidth > 767) {
			$('body').removeClass('spnavon');
			$('header').removeClass('spnavon');
			$('#spnav').removeClass('on');
      //$nav.fadeIn(0);
		} else {
		}
  });
  $('#gnav .toggle').on('click',function(){
    $(this).toggleClass('on');
    $(this).next('.submenu').slideToggle();
  });
  $('#spnav').click(function(){
		if($(this).hasClass('on')){
			$('body').removeClass('spnavon');
			$('header').removeClass('spnavon');
			$('#spnav').removeClass('on');
			$//nav.fadeOut();
		} else {
			$('body').addClass('spnavon');
			$('header').addClass('spnavon');
			$('#spnav').addClass('on');
			//$nav.fadeIn();
		}
	});

  //OS判別
  var ua = window.navigator.userAgent.toLowerCase();
  if(ua.indexOf("iphone") !== -1 || ua.indexOf("ipad") !== -1) {
  } else if(ua.indexOf("mac os x") !== -1) {
  } else if(ua.indexOf("windows nt") !== -1) {
    $('body').addClass('noto');
  } else if(ua.indexOf("android") !== -1) {
    $('body').addClass('android');
  } else {
    $('body').addClass('noto');
  }
  
	////ページトップ
	$(window).on('load scroll resize',function(){
		var st = $(window).scrollTop();
		var wh = document.documentElement.clientHeight;
		var ww = document.documentElement.clientWidth;
    var nf = 200;
    var ch = Math.max.apply( null, [document.body.clientHeight , document.body.scrollHeight, document.documentElement.scrollHeight, document.documentElement.clientHeight] );  
		if (st > 800) {
			$('#topagetop').addClass('visible');
		} else {
			$('#topagetop').removeClass('visible');
		}
    if (ww < 768) {
      nf = 100;
    }
		if (st > ch - wh - nf) {
			$('#topagetop').addClass('abs');
		} else {
			$('#topagetop').removeClass('abs');
		}
	});

	var topagetop = $('#pagetop .btn');
	topagetop.click(function () {
		$('body, html').animate({ scrollTop: 0 }, 1000, 'easeOutCubic');
		return false;
	});

  var scroll = 0;
  $(window).on('scroll', function(){
    if($(this).scrollTop() < scroll || $(this).scrollTop() < 96){
      $('header').removeClass('down');
    }else{
      //下スクロールの時の処理
      $('header').addClass('down');
    }
    scroll = $(this).scrollTop();
    if (scroll > 100) {
      $('header').removeClass('top');
    } else {
      $('header').addClass('top');
    }
  });

  /*スムーズスクロール*/
	$('a[href^="#"]').click(function(){
    $('body').removeClass('spnavon');
    $('#gnav').removeClass('spnavon');
    $('#spnav').removeClass('on');
    var speed = 1000;
		var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var hh =60;
		if(window.innerWidth < 769) {
      hh = 70;  
		}
		var position = target.offset().top - hh;
		$("html, body").animate({scrollTop:position}, speed, "easeOutCubic");
		return false;
	});



  $(window).on('load scroll resize',function(){
		var st = $(window).scrollTop();
		var wh = document.documentElement.clientHeight;
    var nh = $('#sidenav').height();
    var fh = $('#footer').height();
    var ch = Math.max.apply( null, [document.body.clientHeight , document.body.scrollHeight, document.documentElement.scrollHeight, document.documentElement.clientHeight] );  
    var nt = wh/2 - nh/2;
    if (st > ch - fh - wh/2 - nh/2) {
      $('#sidenav').css({'position':'absolute', 'top':'auto', 'bottom': fh + 'px'});
    } else if (st > wh/2+100 + (nh/2)) {
			$('#sidenav').css({'position':'fixed', 'top':nt+'px', 'bottom':'auto'});
		} else {
			$('#sidenav').css({'position':'absolute', 'top': wh + 100 + 'px', 'bottom':'auto'});
		}

    //block
    var bt = new Array;
    var bn = $('main section.regular').length;
    $('#sidenav').addClass('off');
    for(i=0; i<bn+1 ;i++) {
      var t = $('main section.regular').eq(i-1).offset().top;
      if(st + wh/2 > t) {
        $('#sidenav').removeClass('off');
        num = i;
      }
      bt[i] = t;
    }
    $('#sidenav li').removeClass('current');
    $('#sidenav li').eq(num-1).addClass('current');
	});

});



