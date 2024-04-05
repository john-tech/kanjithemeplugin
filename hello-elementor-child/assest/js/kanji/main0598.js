//search.js

//検索スライドメニュー
$(function(){
  $('.select_search').click(function(){
		  if ($(this).parent().parent().find('.search_target').css('display') == 'none') {
				  $(this).parent().parent().find('.search_target').slideDown('fast');
		  } else {
				  $(this).parent().parent().find('.search_target').slideUp('fast');
		  }
  });
});

//検索でリンク踏まれた時のカウント上げ
$(function(){
  $('.ajax').click(function(e){
  
      e.preventDefault();
	  var targetUrl = $(this).attr('href');
      var number = $(this).parent().attr('name');
      var data = {number : number};
      $.ajax({
          //async: false,
          type: "POST",
          url: "https://kanji.jitenon.jp/include/search_count_up.php",
          data: data,
      }).done(function(data, dataType){

          }).fail(function(XMLHttpRequest, textStatus, errorThrown){
              console.log("XMLHttpRequest : " + XMLHttpRequest.status);
              console.log("textStatus     : " + textStatus);
              console.log("errorThrown    : " + errorThrown.message);
          });
        $(document).ajaxStop(function() {
            window.location = targetUrl;
        });
  });
});

$(function(){
	// Ajax button click
	// $('.search_form').submit(function(){
	// 	$.ajax({
	// 		url:'https://kanji.jitenon.jp/include/page_send.php',
	// 		type:'POST',
	// 		data:{
	// 			'value':$(this).parent().find('.value').val(),
	// 			'how':$(this).parent().find('.how').val()
	// 		}
	// 	})
	// 	// Ajaxリクエストが成功した時発動
	// 	.done(function(data){
	// 	window.location.href = data;
	// 		//console.log(data);
	// 	})
	// 	// Ajaxリクエストが失敗した時発動
	// 	.fail(function(data){
	// 		console.log('error',data);
	// 	})
	// 	// Ajaxリクエストが成功・失敗どちらでも発動
	// 	.always(function(data){

	// 	});
	// });
	// return false;
});
		
$(function(){
    $('.search_other ul a').click(function(){
	  //activeクラスの調整
	  $(this).parents('ul').find('li a').removeClass('head-active');
	  $(this).addClass('head-active');
	  
	  //検索の分類が変えられた場合
	  if($(this).parents('ul').attr('id') == 'select01'){
		$(this).parents('.search_target').parent().find('.how').val($(this).text());
		$(this).parents('.search_target').parent().find('.select_search').text($(this).text());
		
		var this_id = $(this).attr('id');
		if(this_id == 'sel11' || this_id == 'sel12'){
	      $(this).parents('.search_target').find('#select02').show();
		}else if(this_id == 'sel13' || this_id == 'sel14' || this_id == 'sel15'){
	      $(this).parents('.search_target').find('#select02').hide();
		}
	  }
	  
	  var value = $(this).parents('.search_target').parent().find('input[name=value]').val().replace(/\[/, '').replace(/\]/,'');
	  var sel1_id = $(this).parents('.search_target').find('#select01').find('.head-active').attr('id');
	  console.log(sel1_id);
	  if(sel1_id == null)sel1_id = 'sel11';
	  var sel2_id = $(this).parents('.search_target').find('#select02').find('.head-active').attr('id');
      var ret_value;
	  if(sel1_id == 'sel11' || sel1_id == 'sel12'){
		if(sel2_id == 'sel21'){
		  ret_value = value;
		}else if(sel2_id == 'sel22'){
		  ret_value = '['+ value;
		}else if(sel2_id == 'sel23'){
		  ret_value = value +']';
		}else if(sel2_id == 'sel24'){
		  ret_value = '['+ value +']';
		}
	  }else if(sel1_id == 'sel13' || sel1_id == 'sel14' || sel1_id == 'sel15'){
        ret_value = value;
	  }
	  $(this).parents('.search_target').parent().find('input[name=value]').val(ret_value);
	  
    return false;
  });
});


//tab.js
$(function () {
  //$('.ChangeElem_Panel').hide();
  //$('.ChangeElem_Panel').eq(0).show();
  //$('.ChangeElem_Btn').eq(0).addClass('is-active');
  $('.ChangeElem_Btn').each(function () {
    $(this).on('click', function () {
			var parent = $(this).parents(".kanji_left");
      var index = $(parent).find('.ChangeElem_Btn').index(this);
      $(parent).find('.ChangeElem_Btn').removeClass('is-active');
      $(this).addClass('is-active');
      $(parent).find('.ChangeElem_Panel').hide();
      $(parent).find('.ChangeElem_Panel').eq(index).show();
    });
  });
});


//js_hantei.js
$(function(){
  var html = document.getElementsByTagName('html')||[];
  html[0].classList.add('enable-javascript');
});

//copy
$(function(){
  const clipboard = new ClipboardJS('.copy_btn');
  const btns = document.querySelector('.copy_btn');
  btns.addEventListener('mouseleave',clearTooltip);
  
  clipboard.on('success', function(e) {
    $('.clipboard-success').fadeIn(10).fadeOut(3500);
  });
});

function clearTooltip(e){
    e.currentTarget.setAttribute('class','copy_btn');
}

//hosoku
$(function(){
  $('.hosoku').css('display', 'none');
  $('.slide_hosoku').on('click',function(){
		$(this).next('.hosoku').slideToggle();
		$(this).toggleClass("hosoku-active");
		return false;
  });
  $('.slide_li').css('display', 'none');
  $('.slide_hosoku2').on('click',function(){
    var diff_left = $(this).offset().left - $('.kanji_right').offset().left;
		//$(this).parent('li').next('.slide_li').find('.hosoku2').slideToggle();
    $(this).parent('li').next('.slide_li').slideToggle();
    $("#stylesheet").html('.hosoku2::before,.hosoku2::after{left: '+diff_left+'px;}');
		$(this).toggleClass("hosoku-active");
    $('.slide_li').toggleClass("hosoku-li");
		return false;
  });
  $('.slide_hosoku_other').on('click',function(){
		$(this).next('.hosoku').slideToggle();
		$(this).toggleClass("hosoku-active");
		return false;
  });
	$('.hosoku_kyoyou').css('display', 'none');
	$('.slide_hosoku_kyoyou').on('click',function(){
		var index = $('.slide_hosoku_kyoyou').index(this);
		$('.hosoku_kyoyou').eq(index).slideToggle();
		$(this).toggleClass("hosoku-active");
		return false;
	});
	$('.slide_hosoku_kyoyou_other').on('click',function(){
		var index = $('.slide_hosoku_kyoyou').index(this);
		$('.hosoku_kyoyou').eq(index).slideToggle();
		$(this).toggleClass("hosoku-active");
		return false;
	});
});

//lightbox.min.js
/*!
 * Lightbox v2.11.1
 * by Lokesh Dhakar
 *
 * More info:
 * http://lokeshdhakar.com/projects/lightbox2/
 *
 * Copyright Lokesh Dhakar
 * Released under the MIT license
 * https://github.com/lokesh/lightbox2/blob/master/LICENSE
 *
 * @preserve
 */
!function(a,b){"function"==typeof define&&define.amd?define(["jquery"],b):"object"==typeof exports?module.exports=b(require("jquery")):a.lightbox=b(a.jQuery)}(this,function(a){function b(b){this.album=[],this.currentImageIndex=void 0,this.init(),this.options=a.extend({},this.constructor.defaults),this.option(b)}return b.defaults={albumLabel:"Image %1 of %2",alwaysShowNavOnTouchDevices:!1,fadeDuration:600,fitImagesInViewport:!0,imageFadeDuration:600,positionFromTop:50,resizeDuration:700,showImageNumberLabel:!0,wrapAround:!1,disableScrolling:!1,sanitizeTitle:!1},b.prototype.option=function(b){a.extend(this.options,b)},b.prototype.imageCountLabel=function(a,b){return this.options.albumLabel.replace(/%1/g,a).replace(/%2/g,b)},b.prototype.init=function(){var b=this;a(document).ready(function(){b.enable(),b.build()})},b.prototype.enable=function(){var b=this;a("body").on("click","a[rel^=lightbox], area[rel^=lightbox], a[data-lightbox], area[data-lightbox]",function(c){return b.start(a(c.currentTarget)),!1})},b.prototype.build=function(){if(!(a("#lightbox").length>0)){var b=this;a('<div id="lightboxOverlay" tabindex="-1" class="lightboxOverlay"></div><div id="lightbox" tabindex="-1" class="lightbox"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" alt=""/><div class="lb-nav"><a class="lb-prev" aria-label="Previous image" href="" ></a><a class="lb-next" aria-label="Next image" href="" ></a></div><div class="lb-loader"><a class="lb-cancel"></a></div></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div><div class="lb-closeContainer"><a class="lb-close"></a></div></div></div></div>').appendTo(a("body")),this.$lightbox=a("#lightbox"),this.$overlay=a("#lightboxOverlay"),this.$outerContainer=this.$lightbox.find(".lb-outerContainer"),this.$container=this.$lightbox.find(".lb-container"),this.$image=this.$lightbox.find(".lb-image"),this.$nav=this.$lightbox.find(".lb-nav"),this.containerPadding={top:parseInt(this.$container.css("padding-top"),10),right:parseInt(this.$container.css("padding-right"),10),bottom:parseInt(this.$container.css("padding-bottom"),10),left:parseInt(this.$container.css("padding-left"),10)},this.imageBorderWidth={top:parseInt(this.$image.css("border-top-width"),10),right:parseInt(this.$image.css("border-right-width"),10),bottom:parseInt(this.$image.css("border-bottom-width"),10),left:parseInt(this.$image.css("border-left-width"),10)},this.$overlay.hide().on("click",function(){return b.end(),!1}),this.$lightbox.hide().on("click",function(c){"lightbox"===a(c.target).attr("id")&&b.end()}),this.$outerContainer.on("click",function(c){return"lightbox"===a(c.target).attr("id")&&b.end(),!1}),this.$lightbox.find(".lb-prev").on("click",function(){return 0===b.currentImageIndex?b.changeImage(b.album.length-1):b.changeImage(b.currentImageIndex-1),!1}),this.$lightbox.find(".lb-next").on("click",function(){return b.currentImageIndex===b.album.length-1?b.changeImage(0):b.changeImage(b.currentImageIndex+1),!1}),this.$nav.on("mousedown",function(a){3===a.which&&(b.$nav.css("pointer-events","none"),b.$lightbox.one("contextmenu",function(){setTimeout(function(){this.$nav.css("pointer-events","auto")}.bind(b),0)}))}),this.$lightbox.find(".lb-loader, .lb-close").on("click",function(){return b.end(),!1})}},b.prototype.start=function(b){function c(a){d.album.push({alt:a.attr("data-alt"),link:a.attr("href"),title:a.attr("data-title")||a.attr("title")})}var d=this,e=a(window);e.on("resize",a.proxy(this.sizeOverlay,this)),this.sizeOverlay(),this.album=[];var f,g=0,h=b.attr("data-lightbox");if(h){f=a(b.prop("tagName")+'[data-lightbox="'+h+'"]');for(var i=0;i<f.length;i=++i)c(a(f[i])),f[i]===b[0]&&(g=i)}else if("lightbox"===b.attr("rel"))c(b);else{f=a(b.prop("tagName")+'[rel="'+b.attr("rel")+'"]');for(var j=0;j<f.length;j=++j)c(a(f[j])),f[j]===b[0]&&(g=j)}var k=e.scrollTop()+this.options.positionFromTop,l=e.scrollLeft();this.$lightbox.css({top:k+"px",left:l+"px"}).fadeIn(this.options.fadeDuration),this.options.disableScrolling&&a("body").addClass("lb-disable-scrolling"),this.changeImage(g)},b.prototype.changeImage=function(b){var c=this,d=this.album[b].link,e=d.split(".").slice(-1)[0],f=this.$lightbox.find(".lb-image");this.disableKeyboardNav(),this.$overlay.fadeIn(this.options.fadeDuration),a(".lb-loader").fadeIn("slow"),this.$lightbox.find(".lb-image, .lb-nav, .lb-prev, .lb-next, .lb-dataContainer, .lb-numbers, .lb-caption").hide(),this.$outerContainer.addClass("animating");var g=new Image;g.onload=function(){var h,i,j,k,l,m;f.attr({alt:c.album[b].alt,src:d}),a(g),f.width(g.width),f.height(g.height),m=a(window).width(),l=a(window).height(),k=m-c.containerPadding.left-c.containerPadding.right-c.imageBorderWidth.left-c.imageBorderWidth.right-20,j=l-c.containerPadding.top-c.containerPadding.bottom-c.imageBorderWidth.top-c.imageBorderWidth.bottom-c.options.positionFromTop-70,"svg"===e&&(0!==g.width&&0!==g.height||(f.width(k),f.height(j))),c.options.fitImagesInViewport?(c.options.maxWidth&&c.options.maxWidth<k&&(k=c.options.maxWidth),c.options.maxHeight&&c.options.maxHeight<j&&(j=c.options.maxHeight)):(k=c.options.maxWidth||g.width||k,j=c.options.maxHeight||g.height||j),(g.width>k||g.height>j)&&(g.width/k>g.height/j?(i=k,h=parseInt(g.height/(g.width/i),10),f.width(i),f.height(h)):(h=j,i=parseInt(g.width/(g.height/h),10),f.width(i),f.height(h))),c.sizeContainer(f.width(),f.height())},g.src=this.album[b].link,this.currentImageIndex=b},b.prototype.sizeOverlay=function(){var b=this;setTimeout(function(){b.$overlay.width(a(document).width()).height(a(document).height())},0)},b.prototype.sizeContainer=function(a,b){function c(){d.$lightbox.find(".lb-dataContainer").width(g),d.$lightbox.find(".lb-prevLink").height(h),d.$lightbox.find(".lb-nextLink").height(h),d.$overlay.focus(),d.showImage()}var d=this,e=this.$outerContainer.outerWidth(),f=this.$outerContainer.outerHeight(),g=a+this.containerPadding.left+this.containerPadding.right+this.imageBorderWidth.left+this.imageBorderWidth.right,h=b+this.containerPadding.top+this.containerPadding.bottom+this.imageBorderWidth.top+this.imageBorderWidth.bottom;e!==g||f!==h?this.$outerContainer.animate({width:g,height:h},this.options.resizeDuration,"swing",function(){c()}):c()},b.prototype.showImage=function(){this.$lightbox.find(".lb-loader").stop(!0).hide(),this.$lightbox.find(".lb-image").fadeIn(this.options.imageFadeDuration),this.updateNav(),this.updateDetails(),this.preloadNeighboringImages(),this.enableKeyboardNav()},b.prototype.updateNav=function(){var a=!1;try{document.createEvent("TouchEvent"),a=!!this.options.alwaysShowNavOnTouchDevices}catch(a){}this.$lightbox.find(".lb-nav").show(),this.album.length>1&&(this.options.wrapAround?(a&&this.$lightbox.find(".lb-prev, .lb-next").css("opacity","1"),this.$lightbox.find(".lb-prev, .lb-next").show()):(this.currentImageIndex>0&&(this.$lightbox.find(".lb-prev").show(),a&&this.$lightbox.find(".lb-prev").css("opacity","1")),this.currentImageIndex<this.album.length-1&&(this.$lightbox.find(".lb-next").show(),a&&this.$lightbox.find(".lb-next").css("opacity","1"))))},b.prototype.updateDetails=function(){var a=this;if(void 0!==this.album[this.currentImageIndex].title&&""!==this.album[this.currentImageIndex].title){var b=this.$lightbox.find(".lb-caption");this.options.sanitizeTitle?b.text(this.album[this.currentImageIndex].title):b.html(this.album[this.currentImageIndex].title),b.fadeIn("fast")}if(this.album.length>1&&this.options.showImageNumberLabel){var c=this.imageCountLabel(this.currentImageIndex+1,this.album.length);this.$lightbox.find(".lb-number").text(c).fadeIn("fast")}else this.$lightbox.find(".lb-number").hide();this.$outerContainer.removeClass("animating"),this.$lightbox.find(".lb-dataContainer").fadeIn(this.options.resizeDuration,function(){return a.sizeOverlay()})},b.prototype.preloadNeighboringImages=function(){if(this.album.length>this.currentImageIndex+1){(new Image).src=this.album[this.currentImageIndex+1].link}if(this.currentImageIndex>0){(new Image).src=this.album[this.currentImageIndex-1].link}},b.prototype.enableKeyboardNav=function(){this.$lightbox.on("keyup.keyboard",a.proxy(this.keyboardAction,this)),this.$overlay.on("keyup.keyboard",a.proxy(this.keyboardAction,this))},b.prototype.disableKeyboardNav=function(){this.$lightbox.off(".keyboard"),this.$overlay.off(".keyboard")},b.prototype.keyboardAction=function(a){var b=a.keyCode;27===b?(a.stopPropagation(),this.end()):37===b?0!==this.currentImageIndex?this.changeImage(this.currentImageIndex-1):this.options.wrapAround&&this.album.length>1&&this.changeImage(this.album.length-1):39===b&&(this.currentImageIndex!==this.album.length-1?this.changeImage(this.currentImageIndex+1):this.options.wrapAround&&this.album.length>1&&this.changeImage(0))},b.prototype.end=function(){this.disableKeyboardNav(),a(window).off("resize",this.sizeOverlay),this.$lightbox.fadeOut(this.options.fadeDuration),this.$overlay.fadeOut(this.options.fadeDuration),this.options.disableScrolling&&a("body").removeClass("lb-disable-scrolling")},new b});
//# sourceMappingURL=lightbox.min.map