//スマホ版検索条件のモーダルスクリプトです
$(function(){
	$('.js-modal-open').on('click',function(){
			$('.js-modal').fadeIn();
			$('body').css('position','fixed');
			$('body').css('left','0');
			$('body').css('right','0');
			return false;
	});
	$('.js-modal-close').on('click',function(){
			$('.js-modal').fadeOut();
			$('body').css('position','');
			$('body').css('left','');
			$('body').css('right','');
			return false;
	});
});

var yomi_input_check = function() {
      var text = $('#yomi').val(),
          search = $('#search option:selected').val(),
          hyogai = $('#hyogai:checked').val(),
          jimmei = $('#jimmei:checked').val(),
          nandoku = $('#nandoku:checked').val();

  if(text == '' && search == 'part' && hyogai == 'hyogai' && jimmei == 'jimmei' && nandoku == 'nandoku')$('#yomi_clr').hide();
  else $('#yomi_clr').show();
}

$(function() {
    $('#yomi').change(function() {yomi_input_check();});
	$('#search').change(function() {yomi_input_check();});
	$('#hyogai').change(function() {yomi_input_check();});
	$('#jimmei').change(function() {yomi_input_check();});
	$('#nandoku').change(function() {yomi_input_check();});

    //画数チェンジ時に発動
    $('#kakusulower').change(function() {
      var select_l = $('#kakusulower option:selected').val(),
          select_u = $('#kakusuupper option:selected').val();
      //console.log('l:'+select_l+' u:'+select_u);
      $('#kakusuupper').children().remove();
      //kakusulowerのセレクトボックスを丸コピー
      var nodes = $('#kakusulower').children();
      var kakusumin = $(this).val();
          //$('#kakusuupper').append($('<option value="0"></option>'));
      for (var i=kakusumin; i<nodes.length; i++) {
          $('#kakusuupper').append($('<option value='+i+'>'+nodes.eq(i).text()+'</option>'));
      }
      if(Number(select_l) > Number(select_u)){
        $('#kakusuupper').val(select_l);
      }else{
        $('#kakusuupper').val(select_u);
      }
      
      if(select_l == '' && select_u =='')$('#kakusu_clr').hide();
      else $('#kakusu_clr').show();
    });
	
	$('#kakusuupper').change(function() {
      var select_l = $('#kakusulower option:selected').val(),
          select_u = $('#kakusuupper option:selected').val();
      if(select_l == '' && select_u =='')$('#kakusu_clr').hide();
      else $('#kakusu_clr').show();
    });
	
	//構成チェンジ時に発動
	$('#kousei').change(function() {
      var text = $('#kousei').val();
      if(text == '')$('#kousei_clr').hide(); else $('#kousei_clr').show();
	});
	
    //漢検級チェンジ時に発動
    $('#gradelower').change(function() {
      var select_l = $('#gradelower option:selected').val(),
          select_u = $('#gradeupper option:selected').val();
      $('#gradeupper').children().remove();
      //kakusulowerのセレクトボックスを丸コピー
      var nodes = $('#gradelower').children();
      var grademin = $(this).val();
          //$('#gradeupper').append($('<option value=""></option>'));
      for (var i=grademin; i<nodes.length; i++) {
          $('#gradeupper').append($('<option value="'+i+'">'+nodes.eq(i).text()+'</option>'));
      }
      if(Number(select_l) > Number(select_u)){
        $('#gradeupper').val(select_l);
      }else{
        $('#gradeupper').val(select_u);
      }
      if(select_l == '' && select_u =='')$('#grade_clr').hide();
      else $('#grade_clr').show();
    });

	$('#gradeupper').change(function() {
      var select_l = $('#gradelower option:selected').val(),
          select_u = $('#gradeupper option:selected').val();
      if(select_l == '' && select_u =='')$('#grade_clr').hide();
      else $('#grade_clr').show();
    });

	//読みクリアボタン
    $('#yomi_clr').click(function() {
      $('#yomi').val('');
      $('#search').val('part');
      $('#hyogai').prop('checked', true);
      $('#jimmei').prop('checked', true);
      $('#nandoku').prop('checked', true);
      $('#yomi_clr').hide();
    });
	
    //部首クリアボタン
    $('#bushu_clr').click(function() {
      $('#shosaimaintxt').html('');
      $('#bushu_num').val('');
      $('#bushu_text').val('');
      $('#bushu_clr').hide();
    });
	
    //画数クリアボタン
    $('#kakusu_clr').click(function(){
      $('#kakusulower').val('');
      $('#kakusuupper').children().remove();
      var nodes = $('#kakusulower').children();
      var kakusumin = '';
          //$('#kakusuupper').append($('<option value="0"></option>'));
      for (var i=kakusumin; i<nodes.length; i++) {
          $('#kakusuupper').append($('<option value='+i+'>'+nodes.eq(i).text()+'</option>'));
      }
      $('#kakusu_clr').hide();
    });
	
    //構成クリアボタン
    $('#kousei_clr').click(function() {
      $('#kousei').val('');
      $('#kousei_clr').hide();
    });
	
	//漢検級クリアボタン
    $('#grade_clr').click(function(){
      $('#gradelower').val('');
      $('#gradeupper').children().remove();
      var nodes = $('#gradelower').children();
      var grademin = '';
          //$('#kakusuupper').append($('<option value="0"></option>'));
      for (var i=grademin; i<nodes.length; i++) {
          $('#gradeupper').append($('<option value='+i+'>'+nodes.eq(i).text()+'</option>'));
      }
      $('#grade_clr').hide();
    });
  
});