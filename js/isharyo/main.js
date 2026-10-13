// function inputToHankaku(toHankaku){
// 	toHankaku = '#'+toHankaku;
// 	var str = $(toHankaku).val();
// 	str = str.replace( /[Ａ-Ｚａ-ｚ０-９－！”＃＄％＆’（）＝＜＞，．？＿［］｛｝＠＾～￥]/g, function(s) {
// 	    return String.fromCharCode(s.charCodeAt(0) - 65248);
// 	});
// 	str = str.replace(/\,/g,'');
// 	str = str.replace(/、/g,'');
// 	$(toHankaku).val(str);
// }

$(function() {
	$("#haigusha_knows_area").hide();
	$("#kekkon_status1").click(function(){
		$("#haigusha_knows_area").show("slow");
	});
	$("#kekkon_status2").click(function(){
		$('#haigusha_knows1').prop('checked', false)
		$('#haigusha_knows2').prop('checked', false)
		$("#haigusha_knows_area").hide("slow");
	});

	$("#imasugu").click(function(){
		$("#imasugu").hide();
		$("#imasugu_fm").show("slow");
	});
	$("#aite_job_block").hide();
	$("#hutei_shoko_block").hide();
	$("#aite_info_block").hide();
	$("#aite_job1,#aite_job2,#aite_job3,#aite_job4").click(function(){
		if($("#aite_job4").prop('checked')){
			$("#aite_job_block").show();
		}else{
			$("#aite_job_block").hide();
		}
	});



	$("#hutei_shoko6").click(function(){
		if($("#hutei_shoko6").prop('checked')){
			$("#hutei_shoko_block").show();
		}else{
			$("#hutei_shoko_block").hide();
		}
	});
	$("#aite_info").click(function(){
		if($("#aite_info").prop('checked')){
			$("#aite_info_block").show();
		}else{
			$("#aite_info_block").hide();
		}
	});

	// 隠れフィールドのコントロール
	if($("#aite_job4").prop('checked')){
		$("#aite_job_block").show();
	}
	if($("#hutei_shoko6").prop('checked')){
		$("#hutei_shoko_block").show();
	}
	if($("#aite_info").prop('checked')){
		$("#aite_info_block").show();
	}

});

// function check_pram(){
// 	var user_name = $("#user_name").val();
// 	var user_tel = $("#user_tel").val();
// 	var user_mail = $("#user_mail").val();
// 	var message = $("#message").val();

// 	var err_mes = '';
// 	var err_flg = '';
// 	var fcs = '';

// 	function noInputChk(value,name,Id){
// 		if(value == ''){
// 			err_flg = '1';
// 			err_mes = err_mes+name+'を入力して下さい\n-----------------------------------\n';
// 			if(fcs == ''){
// 				fcs = Id;
// 			}
// 		}
// 	}

// 	noInputChk(user_name,'お名前','#user_name');
	
// 	noInputChk(user_tel,'電話番号','#user_tel');

// 	if (user_tel.length < 10) { // 追加：電話番号が10桁未満の場合のチェック
//         err_flg = '1';
//         err_mes = err_mes+'電話番号は10桁以上で入力してください。\n-----------------------------------\n';
//         if(fcs == ''){
//             fcs = '#user_tel';
//         }
//     }

// 	if(user_mail == ''){
// 		err_flg = '1';
// 		err_mes = err_mes+'メールアドレスを入力して下さい\n-----------------------------------\n';
// 		if(fcs == ''){
// 			fcs = '#user_mail';
// 		}
// 	} else if(!user_mail.match( /^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/g)) {
// 		err_flg = '1';
// 		err_mes = err_mes+'メールアドレスの形式が間違っています。\n-----------------------------------\n';
// 		if(fcs == ''){
// 			fcs = '#user_mail';
// 		}
// 	}

// 	// if($("input[name='situation']:checked").val() === window.undefined){
// 	// 	err_mes = err_mes+'現在の状況を選択して下さい。\n-----------------------------------\n';
// 	// 	err_flg = '1';
// 	// 	if(fcs == ""){
// 	// 		fcs = "#situation1";
// 	// 	}
// 	// }

// 	if($("input[name='rikon_hope']:checked").val() === window.undefined){
// 		err_mes = err_mes+'今後についてを選択して下さい。\n-----------------------------------\n';
// 		err_flg = '1';
// 		if(fcs == ""){
// 			fcs = "#rikon_hope1";
// 		}
// 	}

// 	if($("input[name='konin_jotai']:checked").val() === window.undefined){
// 		err_mes = err_mes+'婚姻状態を選択して下さい。\n-----------------------------------\n';
// 		err_flg = '1';
// 		if(fcs == ""){
// 			fcs = "#konin_jotai1";
// 		}
// 	}

// 	// if($("input[name='aite_job']:checked").val() === window.undefined){
// 	// 	err_mes = err_mes+'配偶者の交際相手の職業を選択して下さい。\n-----------------------------------\n';
// 	// 	err_flg = '1';
// 	// 	if(fcs == ""){
// 	// 		fcs = "#aite_job1";
// 	// 	}
// 	// }else if($("#aite_job4").prop("checked") && $("#aite_job_other").val() == ""){
// 	// 	err_mes = err_mes+'配偶者の交際相手の職業で「その他」を選択した場合はその詳細を入力して下さい。\n-----------------------------------\n';
// 	// 	err_flg = '1';
// 	// 	if(fcs == ""){
// 	// 		fcs = "#aite_job_other";
// 	// 	}
// 	// }

// 	if(!$("#hutei_shoko1").prop("checked") && !$("#hutei_shoko2").prop("checked") && !$("#hutei_shoko3").prop("checked") && !$("#hutei_shoko4").prop("checked") && !$("#hutei_shoko6").prop("checked") && !$("#hutei_shoko5").prop("checked")){
// 		err_mes = err_mes+'不貞行為証拠を選択して下さい。\n-----------------------------------\n';
// 		err_flg = '1';
// 		if(fcs == ""){
// 			fcs = "#hutei_shoko1";
// 		}
// 	}else if($("#hutei_shoko6").prop("checked") && $("#hutei_shoko_other").val() == ""){
// 		err_mes = err_mes+'不貞行為の証拠で「その他」を選択した場合はその詳細を入力して下さい。\n-----------------------------------\n';
// 		err_flg = '1';
// 		if(fcs == ""){
// 			fcs = "#hutei_shoko_other";
// 		}
// 	}

// 	noInputChk(message,'お問い合わせ内容','#message');

// 	if(err_flg == '1'){
// 		alert(err_mes);
// 		$(fcs).focus();
// 		return false;
// 	}else{
// 		return true;
// 	}

// }

// $(function(){
// 	$('a[href^="#"]').click(function() {
// 		var speed = 1000; // ミリ秒
// 		var href= $(this).attr("href");
// 		var target = $(href == "#" || href == "" ? 'html' : href);
// 		var position = target.offset().top;
// 		$('body,html').animate({scrollTop:position}, speed, 'swing');
// 		return false;
// 	});
// });

/*
$(function($) {
	var nav	= $('#topMenu'),
	offset	= nav.offset();
	$(window).scroll(function () {
		if($(window).scrollTop() > offset.top) {
			$('#topMenu').addClass('fixed');
			$('#topMenu').show("slow");
		} else {
			$('#topMenu').removeClass('fixed');
			$('#topMenu').hide("slow");
		}
	});
});
*/

$(function(){
	var device = navigator.userAgent;
	if((device.indexOf('iPhone') > 0 && device.indexOf('iPad') == -1) || device.indexOf('iPod') > 0 || device.indexOf('Android') > 0){
		$(".tel").wrap('<a href="tel:0120157888"></a>');
	}
});
