//表示に関するチェックボックスの状態の変化
$(document).ready(function() {

function updateNewDisplay() {
    $(".parts_box_select").each(function() {
        var currentDiv = $(this);
        var allLiHidden = true;

        // このdiv内のすべてのli要素に対して非表示かどうかをチェック
        currentDiv.find("li.joyo, li.jimmei, li.others_kanji, li.kunyomi, li.onyomi").each(function() {
            var isDisplayed = true;

            // 1. 常用漢字、人名用漢字、その他の漢字のチェック
            if($(this).hasClass("joyo") && !$("#toggleDisplayJoyo").prop("checked")) {
                isDisplayed = false;
            }
            if($(this).hasClass("jimmei") && !$("#toggleDisplayJimmei").prop("checked")) {
                isDisplayed = false;
            }
            if($(this).hasClass("others_kanji") && !$("#toggleDisplayOthers").prop("checked")) {
                isDisplayed = false;
            }

            // 2. 読みのチェック
            var readingOption = $("input[name='readingOption']:checked").val();
            if(readingOption == "onyomi" && $(this).hasClass("kunyomi")) {
                isDisplayed = false;
            }
            if(readingOption == "kunyomi" && $(this).hasClass("onyomi")) {
                isDisplayed = false;
            }

            // 最終的な表示/非表示の適用
            if(isDisplayed) {
                $(this).show();
                allLiHidden = false; // 一つでもliが表示されていればフラグをfalseに設定
            } else {
                $(this).hide();
            }
        });

        // 対応するメニュー要素を取得
        const idNumber = currentDiv.attr('id').replace('parts', '');
        const menuElement = $(`#parts${idNumber}_menu`);

        // このdiv内のすべてのliが非表示の場合、このdiv自体を非表示にし、対応するメニュー要素のリンクを削除
        if(allLiHidden) {
            currentDiv.hide();
            const text = menuElement.find('a').text() || menuElement.text();
            menuElement.html(text);
        } else {
            currentDiv.show();
            if (!menuElement.find('a').length) {  // メニューにリンクがなければ追加
                menuElement.html(`<a href="#${currentDiv.attr('id')}">${menuElement.text()}</a>`);
            }
        }
    });
    
        // 全ての#parts_menuがリンクを持っていないか確認
    let allMenusWithoutLinks = true;
    $("[id^='parts'][id$='_menu']").each(function() {
        if ($(this).find('a').length) {
            allMenusWithoutLinks = false;
            return false;  // jQueryのeachからの早期終了
        }
    });

    // 全ての#parts_menuがリンクを持っていない場合、メッセージを表示
if (allMenusWithoutLinks) {
    document.getElementById('noDisplayMessage').style.display = 'block';
    
    // nodisplay_ads1とnodisplay_ads2のIDを持つ要素を非表示にする
    $("#nodisplay_ads1, #nodisplay_ads2").hide();

} else {
    document.getElementById('noDisplayMessage').style.display = 'none';

    // nodisplay_ads1とnodisplay_ads2のIDを持つ要素を表示する
    $("#nodisplay_ads1, #nodisplay_ads2").show();
}
}
    // checkboxとradioが変更された時のイベントリスナー
    //display_list_checkはクッキーに値を保存、display_list_check2は値を保存しない
    $(".display_list_check,.display_list_check2").on("change", function() {
        updateNewDisplay();
    });

    // 初期状態の設定
    $(".display_list_check").each(function() {
        if (this.type === "checkbox") {
            let cookieValue = getCookie(this.id);
            this.checked = (cookieValue === "" || cookieValue === "1");
        } else if (this.type === "radio") {
            let cookieValue = getCookie(this.name);
            if (cookieValue === "") {
                // クッキーが存在しない場合、デフォルトとして"all"を選択
                this.checked = (this.value === "all");
            } else {
                this.checked = (cookieValue === this.value);
            }
        }
    });


    // 初期状態の更新
    updateNewDisplay();
});

    // 全てのチェックボックスがクリックされたときに実行される関数を設定
    document.querySelectorAll('.display_list_check').forEach(checkbox => {
        checkbox.addEventListener('change', checkAllCheckboxes);
    });

    function checkAllCheckboxes() {
        let joyo = document.getElementById('toggleDisplayJoyo').checked;
        let jimmei = document.getElementById('toggleDisplayJimmei').checked;
        let others = document.getElementById('toggleDisplayOthers').checked;

        // すべてのチェックボックスが外れているか確認
        if (!joyo && !jimmei && !others) {
            document.getElementById('noDisplayMessage2').style.display = 'block';
            
             // nodisplay_ads1とnodisplay_ads2のIDを持つ要素を非表示にする
            $("#nodisplay_ads1, #nodisplay_ads2").hide();
            
        } else {
            document.getElementById('noDisplayMessage2').style.display = 'none';
            
            // nodisplay_ads1とnodisplay_ads2のIDを持つ要素を表示する
            $("#nodisplay_ads1, #nodisplay_ads2").show();
        }
    }

    // 初回ロード時の状態チェック
    checkAllCheckboxes();

//表示に関するページのチェックボックスの選択状態を記憶
const controls = document.querySelectorAll('.display_list_check');

controls.forEach(control => {
    control.addEventListener('change', () => {
        if (control.type === "checkbox") {
            setCookie(control.id, control.checked ? '1' : '0', 1);
        } else if (control.type === "radio" && control.checked) {
            setCookie(control.name, control.value, 1);
        }
    });
});

window.onload = function() {
    controls.forEach(control => {
        if (control.type === "checkbox") {
            let cookieValue = getCookie(control.id);
            control.checked = (cookieValue !== "0");
        } else if (control.type === "radio") {
            let cookieValue = getCookie(control.name);
            if (cookieValue) {
                control.checked = (control.value === cookieValue);
            } else if (control.value === "all") {
                control.checked = true;
            }
        }
    });
}

function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

function getCookie(name) {
    const nameEQ = name + "=";
    const ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return "";
}



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