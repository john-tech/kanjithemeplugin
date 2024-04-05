<?php
/*
 * Template Name: Yomi34
 * */

get_header();

?>
<link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri(); ?>/assest/css/html5reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri(); ?>/assest/css/styleed06.css?20231023" media="screen" />
<link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri(); ?>/assest/css/style_kanjied06.css?20231023" media="screen" />
<title>漢字を読みから検索（音訓検索）</title>
<script src="<?= get_stylesheet_directory_uri(); ?>/assest/js/jquery-3.4.1.min.js"></script>
<script src="<?= get_stylesheet_directory_uri(); ?>/assest/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?= get_stylesheet_directory_uri(); ?>/assest/js/main/main0598.js?20231008"></script>
<script type="text/javascript" src="<?= get_stylesheet_directory_uri(); ?>/assest/js/kanji/main0598.js?20231008"></script>
<div id="all">
     <header>
          <div class="nosnippet" data-nosnippet>

               <div class="header_search" data-nosnippet>
                    <div class="search_inner">
                         <form id="head_form" class="search_form" name="head_form" accept-charset="utf-8" method="post">
                              <span id="select_search" class="select_search">すべて</span>
                              <input type="hidden" id="slide2">
                              <input type="hidden" id="head_how" class="how" value="すべて">
                              <input type="text" id="head_value" name="value" placeholder="例）にんべん 車車車 5画" class="value input_search" value="">
                              <input type="submit" id="head_submit" value="" class="search_btn">
                         </form>
                         <div id="target2" class="search_target search_other">
                              <ul id="select01" class="cf">
                                   <li><a href="#" class="sel1 head-active" id="sel11">abc</a></li>
                                   <li><a href="#" class="sel1" id="sel12">漢字</a></li>
                                   <li><a href="#" class="sel1" id="sel15">意味</a></li>
                                   <li><a href="#" class="sel1" id="sel13">部首</a></li>
                                   <li><a href="#" class="sel1" id="sel14">構成</a></li>
                              </ul>
                              <ul id="select02" class="cf">
                                   <li><a href="#" class="sel2 head-active" id="sel21">を含む</a></li>
                                   <li><a href="#" class="sel2" id="sel22">から始まる</a></li>
                                   <li><a href="#" class="sel2" id="sel23">で終わる</a></li>
                                   <li><a href="#" class="sel2" id="sel24">と一致する</a></li>
                              </ul>
                              <div class="detail_search">
                                   <a href="searchdetail">さらに詳しい条件で検索<span>▶</span></a>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="contents_bnr link_sp">

               </div>
          </div>
     </header>
     <style>
          .bushu_about_box {
               display: none;
          }

          div#sidebar {
               display: none;
          }
     </style>

     <div id="wrapper" class="cf">
          <div id="content">
               <h1 class="ttl_main">音訓検索「め」</h1>
               <aside>
                    <div class="ads_wrapin link_pc">
                         <script async src="../../pagead2.googlesyndication.com/pagead/js/fb9f7.txt?client=ca-pub-3664445671894613" crossorigin="anonymous"></script>
                         <!-- 漢字辞典レスポンシブ１ -->
                         <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3664445671894613" data-ad-slot="5169795341" data-ad-format="horizontal" data-full-width-responsive="true"></ins>
                         <script>
                              (adsbygoogle = window.adsbygoogle || []).push({});
                         </script>
                    </div>
               </aside>
               <p>「め」から始まる読み方をする漢字です。</p>
               <div class="search_narrowdown">
                    <!--IEJSが効かない用-->
                    <script>
                         (function() {
                              var html = document.getElementsByTagName('html') || [];
                              html[0].classList.add('enable-javascript');
                         })();
                    </script>
                    <div class="narrowdown_select">
                         <select name="select" onChange="location.href=value;" class="select1">
                              <option value="yomi01">あ</option>
                              <option value="yomi02">い</option>
                              <option value="yomi03">う</option>
                              <option value="yomi04">え</option>
                              <option value="yomi05">お</option>
                              <option value="yomi06">か</option>
                              <option value="yomi07">き</option>
                              <option value="yomi08">く</option>
                              <option value="yomi09">け</option>
                              <option value="yomi10">こ</option>
                              <option value="yomi11">さ</option>
                              <option value="yomi12">し</option>
                              <option value="yomi13">す</option>
                              <option value="yomi14">せ</option>
                              <option value="yomi15">そ</option>
                              <option value="yomi16">た</option>
                              <option value="yomi17">ち</option>
                              <option value="yomi18">つ</option>
                              <option value="yomi19">て</option>
                              <option value="yomi20">と</option>
                              <option value="yomi21">な</option>
                              <option value="yomi22">に</option>
                              <option value="yomi23">ぬ</option>
                              <option value="yomi24">ね</option>
                              <option value="yomi25">の</option>
                              <option value="yomi26">は</option>
                              <option value="yomi27">ひ</option>
                              <option value="yomi28">ふ</option>
                              <option value="yomi29">へ</option>
                              <option value="yomi30">ほ</option>
                              <option value="yomi31">ま</option>
                              <option value="yomi32">み</option>
                              <option value="yomi33">む</option>
                              <option value="#" selected>め</option>
                              <option value="yomi35">も</option>
                              <option value="yomi36">や</option>
                              <option value="yomi37">ゆ</option>
                              <option value="yomi38">よ</option>
                              <option value="yomi39">ら</option>
                              <option value="yomi40">り</option>
                              <option value="yomi41">る</option>
                              <option value="yomi42">れ</option>
                              <option value="yomi43">ろ</option>
                              <option value="yomi44">わ</option>
                              <option value="yomi45">を</option>
                         </select>
                    </div>
               </div><!--search_narrowdown-->
               <div class="search_data yomi_menu">
                    <ul class="search_menu2">
                         <li id="parts1_menu"><a href="#parts1">め</a></li>
                         <li id="parts2_menu"><a href="#parts2">めあ</a></li>
                         <li id="parts3_menu"><a href="#parts3">めい</a></li>
                         <li id="parts4_menu"><a href="#parts4">めお</a></li>
                         <li id="parts5_menu"><a href="#parts5">めか</a></li>
                         <li id="parts6_menu"><a href="#parts6">めく</a></li>
                         <li id="parts7_menu"><a href="#parts7">めし</a></li>
                         <li id="parts8_menu"><a href="#parts8">めす</a></li>
                         <li id="parts9_menu"><a href="#parts9">めち</a></li>
                         <li id="parts10_menu"><a href="#parts10">めつ</a></li>
                         <li id="parts11_menu"><a href="#parts11">めて</a></li>
                         <li id="parts12_menu"><a href="#parts12">めと</a></li>
                         <li id="parts13_menu"><a href="#parts13">めは</a></li>
                         <li id="parts14_menu"><a href="#parts14">めま</a></li>
                         <li id="parts15_menu"><a href="#parts15">めも</a></li>
                         <li id="parts16_menu"><a href="#parts16">めん</a></li>
                         <li id="parts17_menu"><a href="#parts17">めー</a></li>
                    </ul>
               </div><!--search_data-->
               <div class="display_option">
                    <span class="option_title">表示</span>
                    <div class="option_list">
                         <div class="option_check">
                              <p><label><input type="checkbox" class="display_list_check checkbox_input" id="toggleDisplayJoyo" checked><span class="checkbox_parts">常用漢字</span></label></p>
                              <p><label><input type="checkbox" class="display_list_check checkbox_input" id="toggleDisplayJimmei" checked><span class="checkbox_parts">人名用漢字</span></label></p>
                              <p><label><input type="checkbox" class="display_list_check checkbox_input" id="toggleDisplayOthers" checked><span class="checkbox_parts">その他の漢字</span></label></p>
                         </div>
                         <div class="option_radio">
                              <p><input type="radio" class="display_list_check visually-hidden" name="readingOption" value="all" checked id="radio_all"><label for="radio_all" class="radio_parts">全ての読み</label></p>
                              <p><input type="radio" class="display_list_check visually-hidden" name="readingOption" value="onyomi" id="radio_onyomi"><label for="radio_onyomi" class="radio_parts">音読みのみ</label></p>
                              <p><input type="radio" class="display_list_check visually-hidden" name="readingOption" value="kunyomi" id="radio_kunyomi"><label for="radio_kunyomi" class="radio_parts">訓読みのみ</label></p>
                         </div>
                    </div>
               </div>
               <div id="nodisplay_ads1">
                    <aside>
                         <div class="ads_wraptop2 link_sp">

                              <!-- 漢字辞典レスポンシブカテゴリ上SP -->
                              <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3664445671894613" data-ad-slot="8563864342" data-ad-format="auto" data-full-width-responsive="true"></ins>
                              <script>
                                   (adsbygoogle = window.adsbygoogle || []).push({});
                              </script>
                         </div>
                    </aside>
               </div>
               <div class="color_info">
                    <ul>
                         <li><span>常用漢字の背景色＝</span><span class="color1"></span></li>
                         <li><span>人名用漢字の背景色＝</span><span class="color2"></span></li>
                    </ul>
               </div>
               <div class="parts_box parts_box_select" id="parts1">
                    <h3 class="ttl_while">め</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="24732">劢<span class="small">メ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="220">米<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13055">佅<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13258">呅<span class="small">メ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="209">馬<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17142">脄<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19052">㙁<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17249">菋<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12578">傌<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24284">䍙<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16428">獁<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21485">䊈<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22762">䣕<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22974">䧞<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4632">瑪<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12906">勱<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13828">塺<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15248">榪<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4669">碼<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15843">潣<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16917">篃<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19230">㜥<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20896">㾺<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22802">䤂<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21041">䁲<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21252">䆀<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23660">䵢<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23474">䱕<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22292">䚑<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18403">鬕<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18533">鷌<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23585">䳸<span class="small">メ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18548">鷶<span class="small">メ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="036">女<span class="small">め</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26356">屮<span class="small">め</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2933">匁<span class="small">め</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="074">目<span class="small">め</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1204">奴<span class="small">め</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2871">牝<span class="small">め</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="456">芽<span class="small">め</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="668">眼<span class="small">め</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1112">雌<span class="small">め</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7984">䳄<span class="small">め</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">めあ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="707">妻<span class="small">めあ（わす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="036">女<span class="small">めあ（わせる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">めい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="072">名<span class="small">メイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="228">明<span class="small">メイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="415">命<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13063">佲<span class="small">メイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="814">迷<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5348">茗<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10526">眀<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15550">洺<span class="small">メイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2110">冥<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19970">㫥<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11642">朙<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12707">㝠<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16656">眳<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21661">䍘<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12718">凕<span class="small">メイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="988">盟<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4413">溟<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4842">酩<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8138">詺<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8692">鄍<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9599">蓂<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9600">蒾<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14170">嫇<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14863">慏<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16426">猽<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19202">㜆<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19286">㝥<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19398">㟰<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21287">䆩<span class="small">メイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="227">鳴<span class="small">メイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1905">銘<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3933">暝<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6004">榠<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16183">熐<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17333">蔝<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5166">瞑<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21167">䄙<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4091">螟<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21753">䏃<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21908">䒌<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25345">擝<span class="small">メイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2080">謎<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17612">覭<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19869">㩢<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23469">䱊<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24156">醚<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15316">櫗<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22811">䤍<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23189">䫤<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23565">䳟<span class="small">メイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18145">鑖<span class="small">メイ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2763">姪<span class="small">めい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19250">㜼<span class="small">めい</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">めお</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5706">娚<span class="small">めおと</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">めか</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="2554">妾<span class="small">めかけ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1752">粧<span class="small">めか（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8958">糚<span class="small">めか（す）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">めく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3869">鯢<span class="small">めくじら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19635">㤙<span class="small">めぐ（み）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="653">恩<span class="small">めぐ（み）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5153">眷<span class="small">めぐ（み）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2735">寵<span class="small">めぐ（み）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="456">芽<span class="small">めぐ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6540">卹<span class="small">めぐ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3563">恤<span class="small">めぐ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11074">䘏<span class="small">めぐ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1078">恵<span class="small">めぐ（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2911">萌<span class="small">めぐ（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2912">萠<span class="small">めぐ（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5790">惠<span class="small">めぐ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4921">煦<span class="small">めぐ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8297">賉<span class="small">めぐ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10966">僡<span class="small">めぐ（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2735">寵<span class="small">めぐ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1906">盲<span class="small">めくら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5175">瞽<span class="small">めくら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5760">囘<span class="small">めぐ（らす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="093">回<span class="small">めぐ（らす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13614">囬<span class="small">めぐ（らす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27832">𢌞<span class="small">めぐ（らす）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2172">廻<span class="small">めぐ（らす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5507">迴<span class="small">めぐ（らす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14719">廽<span class="small">めぐ（らす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17920">逥<span class="small">めぐ（らす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3328">圜<span class="small">めぐ（らす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5529">遶<span class="small">めぐ（らす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4806">繚<span class="small">めぐ（らす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4811">繞<span class="small">めぐ（らす）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2365">捲<span class="small">めく（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6524">帀<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2656">匝<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5760">囘<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25498">汇<span class="small">めぐ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="093">回<span class="small">めぐ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1134">巡<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13051">伨<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25220">廵<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13614">囬<span class="small">めぐ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="530">周<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8566">迊<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25788">环<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27832">𢌞<span class="small">めぐ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2172">廻<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3532">徇<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4748">紆<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8994">䊸<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15555">浃<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16375">狥<span class="small">めぐ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1239">般<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4373">浹<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5507">迴<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14719">廽<span class="small">めぐ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="156">週<span class="small">めぐ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1787">旋<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17920">逥<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25835">盘<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26955">逻<span class="small">めぐ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="250">運<span class="small">めぐ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1735">循<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3205">匯<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12991">滙<span class="small">めぐ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2143">斡<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4170">槃<span class="small">めぐ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1240">盤<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4180">樛<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3328">圜<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3537">徼<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5529">遶<span class="small">めぐ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1045">環<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2175">嬰<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4479">輾<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4100">蟠<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4806">繚<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4811">繞<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18094">鎜<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14262">孆<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4301">躔<span class="small">めぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5536">邏<span class="small">めぐ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">めし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="592">飯<span class="small">めし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7461">飰<span class="small">めし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26281">飯<span class="small">めし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6134">厮<span class="small">めしつかい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18728">㒋<span class="small">めしつかい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3508">廝<span class="small">めしつかい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25990">糁<span class="small">めしつぶ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8979">糝<span class="small">めしつぶ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24739">卢<span class="small">めしびつ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8821">筲<span class="small">めしびつ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5567">盧<span class="small">めしびつ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">めす</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="2871">牝<span class="small">めす</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1112">雌<span class="small">めす</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7984">䳄<span class="small">めす</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1138">召<span class="small">め（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4859">聘<span class="small">め（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5318">辟<span class="small">め（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1191">徴<span class="small">め（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6435">徵<span class="small">め（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1047">奇<span class="small">めずら（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1193">珍<span class="small">めずら（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6159">竒<span class="small">めずら（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6256">珎<span class="small">めずら（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5452">畸<span class="small">めずら（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18019">鉁<span class="small">めずら（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4633">瑰<span class="small">めずら（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16554">璝<span class="small">めずら（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10197">瓌<span class="small">めずら（しい）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">めち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="18164">閁<span class="small">メチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16958">粖<span class="small">メチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18478">鴓<span class="small">メチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15939">瀎<span class="small">メチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19869">㩢<span class="small">メチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21414">䈼<span class="small">メチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15316">櫗<span class="small">メチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16780">礣<span class="small">メチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21631">䌩<span class="small">メチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18145">鑖<span class="small">メチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23066">䩏<span class="small">メチ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">めつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="25607">灭<span class="small">メツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16059">烕<span class="small">メツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18777">㓕<span class="small">メツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1575">滅<span class="small">メツ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2782">鍍<span class="small">めっき</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">めて</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2620">瑞<span class="small">めでた（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5642">禧<span class="small">めでた（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10982">㤅<span class="small">め（でる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10983">爱<span class="small">め（でる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="440">愛<span class="small">め（でる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="538">賞<span class="small">め（でる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">めと</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4536">筮<span class="small">めどぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4538">筴<span class="small">めどぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5395">蓍<span class="small">めどぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5395">蓍<span class="small">めどはぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3389">娉<span class="small">めと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3394">娶<span class="small">めと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4859">聘<span class="small">めと（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">めは</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2911">萌<span class="small">めば（え）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2912">萠<span class="small">めば（え）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26356">屮<span class="small">めば（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3861">鮴<span class="small">めばる</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">めま</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5152">眩<span class="small">めまい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3922">暈<span class="small">めまい</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">めも</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="376">度<span class="small">めもり</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">めん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="6592">丏<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15424">汅<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10523">䀎<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12683">免<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13126">冺<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15466">沔<span class="small">メン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1576">免<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4341">泯<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7278">靣<span class="small">メン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="416">面<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3095">俛<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5150">眄<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19256">㝃<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19472">㡈<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12556">偭<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12857">勔<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14067">婂<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2934">棉<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4401">湎<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13423">喕<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14134">媔<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16661">睌<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17281">葂<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19683">㥝<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20363">㴐<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22341">䛉<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16289">牑<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19824">㨠<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20073">㮌<span class="small">メン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="815">綿<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14179">嫚<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17325">蔄<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19846">㨺<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2899">緬<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3034">麪<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5166">瞑<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5912">緜<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16966">糆<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17461">蝒<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18570">麫<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22377">䛲<span class="small">メン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2111">麺<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18736">㒙<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21753">䏃<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22804">䤄<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14251">嬵<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6966">鮸<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12294">檰<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19295">㝰<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27883">𩈳<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15314">櫋<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20155">㰃<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25843">矈<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6528">麵<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16701">矏<span class="small">メン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23435">䰓<span class="small">メン</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1112">雌<span class="small">めん</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7984">䳄<span class="small">めん</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">めー</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="220">米<span class="small">メートル</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <p id="noDisplayMessage2" style="display:none;">※<span class="marker">「常用漢字」「人名用漢字」「その他の漢字」のいずれかにチェックをつけてください。</span></p>
               <p id="noDisplayMessage" style="display:none;">※条件に該当する字がありません。<br>表示条件の漢字の種別「常用漢字」「人名用漢字」「その他の漢字」、または読みの種別の「全ての読み」「音読み」「訓読み」などを変更してください。</p>
               <div id="nodisplay_ads2">
                    <aside>
                         <div class="ads_wrapin link_pc">

                              <!-- レスポンシブ個別 -->
                              <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3664445671894613" data-ad-slot="3470994118" data-ad-format="auto" data-full-width-responsive="true"></ins>
                              <script>
                                   (adsbygoogle = window.adsbygoogle || []).push({});
                              </script>
                         </div>
                    </aside>
               </div>
               <!--PC版-->
               <div class="search50 link_pc">
                    <h2 class="left_border">五十音検索</h2>
                    <table>
                         <tr>
                              <td><a href="yomi01">あ</a></td>
                              <td><a href="yomi06">か</a></td>
                              <td><a href="yomi11">さ</a></td>
                              <td><a href="yomi16">た</a></td>
                              <td><a href="yomi21">な</a></td>
                              <td><a href="yomi26">は</a></td>
                              <td><a href="yomi31">ま</a></td>
                              <td><a href="yomi36">や</a></td>
                              <td><a href="yomi39">ら</a></td>
                              <td><a href="yomi44">わ</a></td>
                         </tr>
                         <tr>
                              <td><a href="yomi02">い</a></td>
                              <td><a href="yomi07">き</a></td>
                              <td><a href="yomi12">し</a></td>
                              <td><a href="yomi17">ち</a></td>
                              <td><a href="yomi22">に</a></td>
                              <td><a href="yomi27">ひ</a></td>
                              <td><a href="yomi32">み</a></td>
                              <td>&nbsp;</td>
                              <td><a href="yomi40">り</a></td>
                              <td>&nbsp;</td>
                         </tr>
                         <tr>
                              <td><a href="yomi03">う</a></td>
                              <td><a href="yomi08">く</a></td>
                              <td><a href="yomi13">す</a></td>
                              <td><a href="yomi18">つ</a></td>
                              <td><a href="yomi23">ぬ</a></td>
                              <td><a href="yomi28">ふ</a></td>
                              <td><a href="yomi33">む</a></td>
                              <td><a href="yomi37">ゆ</a></td>
                              <td><a href="yomi41">る</a></td>
                              <td><a href="yomi45">を</a></td>
                         </tr>
                         <tr>
                              <td><a href="yomi04">え</a></td>
                              <td><a href="yomi09">け</a></td>
                              <td><a href="yomi14">せ</a></td>
                              <td><a href="yomi19">て</a></td>
                              <td><a href="yomi24">ね</a></td>
                              <td><a href="yomi29">へ</a></td>
                              <td><a href="yomi34">め</a></td>
                              <td>&nbsp;</td>
                              <td><a href="yomi42">れ</a></td>
                              <td>&nbsp;</td>
                         </tr>
                         <tr>
                              <td><a href="yomi05">お</a></td>
                              <td><a href="yomi10">こ</a></td>
                              <td><a href="yomi15">そ</a></td>
                              <td><a href="yomi20">と</a></td>
                              <td><a href="yomi25">の</a></td>
                              <td><a href="yomi30">ほ</a></td>
                              <td><a href="yomi35">も</a></td>
                              <td><a href="yomi38">よ</a></td>
                              <td><a href="yomi43">ろ</a></td>
                              <td>&nbsp;</td>
                         </tr>
                    </table>
               </div><!--link_pc-->
               <!--SP版-->
               <div class="search50 link_sp">
                    <h2 class="left_border">五十音検索</h2>
                    <table>
                         <tr>
                              <td><a href="yomi01">あ</a></td>
                              <td><a href="yomi02">い</a></td>
                              <td><a href="yomi03">う</a></td>
                              <td><a href="yomi04">え</a></td>
                              <td><a href="yomi05">お</a></td>
                         </tr>
                         <tr>
                              <td><a href="yomi06">か</a></td>
                              <td><a href="yomi07">き</a></td>
                              <td><a href="yomi08">く</a></td>
                              <td><a href="yomi09">け</a></td>
                              <td><a href="yomi10">こ</a></td>
                         </tr>
                         <tr>
                              <td><a href="yomi11">さ</a></td>
                              <td><a href="yomi12">し</a></td>
                              <td><a href="yomi13">す</a></td>
                              <td><a href="yomi14">せ</a></td>
                              <td><a href="yomi15">そ</a></td>
                         </tr>
                         <tr>
                              <td><a href="yomi16">た</a></td>
                              <td><a href="yomi17">ち</a></td>
                              <td><a href="yomi18">つ</a></td>
                              <td><a href="yomi19">て</a></td>
                              <td><a href="yomi20">と</a></td>
                         </tr>
                         <tr>
                              <td><a href="yomi21">な</a></td>
                              <td><a href="yomi22">に</a></td>
                              <td><a href="yomi23">ぬ</a></td>
                              <td><a href="yomi24">ね</a></td>
                              <td><a href="yomi25">の</a></td>
                         </tr>
                         <tr>
                              <td><a href="yomi26">は</a></td>
                              <td><a href="yomi27">ひ</a></td>
                              <td><a href="yomi28">ふ</a></td>
                              <td><a href="yomi29">へ</a></td>
                              <td><a href="yomi30">ほ</a></td>
                         </tr>
                         <tr>
                              <td><a href="yomi31">ま</a></td>
                              <td><a href="yomi32">み</a></td>
                              <td><a href="yomi33">む</a></td>
                              <td><a href="yomi34">め</a></td>
                              <td><a href="yomi35">も</a></td>
                         </tr>
                         <tr>
                              <td><a href="yomi36">や</a></td>
                              <td>&nbsp;</td>
                              <td><a href="yomi37">ゆ</a></td>
                              <td>&nbsp;</td>
                              <td><a href="yomi38">よ</a></td>
                         </tr>
                         <tr>
                              <td><a href="yomi39">ら</a></td>
                              <td><a href="yomi40">り</a></td>
                              <td><a href="yomi41">る</a></td>
                              <td><a href="yomi42">れ</a></td>
                              <td><a href="yomi43">ろ</a></td>
                         </tr>
                         <tr>
                              <td><a href="yomi44">わ</a></td>
                              <td>&nbsp;</td>
                              <td><a href="yomi45">を</a></td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                         </tr>
                    </table>
               </div><!--link_sp-->
          </div><!--content-->
          <aside>
               <div id="sidebar" data-nosnippet>

                    <div class="ads_wrap side_pc">
                         <style>
                              .ads_responsive_2 {
                                   display: none;
                              }

                              @media(min-width: 1095px) {
                                   .ads_responsive_2 {
                                        width: 300px;
                                        height: 600px;
                                   }
                              }
                         </style>

                         <!-- 漢字辞典レスポンシブ２ -->
                         <ins class="adsbygoogle ads_responsive_2" style="display:inline-block" data-ad-client="ca-pub-3664445671894613" data-ad-slot="6642164275"></ins>
                         <script>
                              (adsbygoogle = window.adsbygoogle || []).push({});
                         </script>
                    </div>
                    <div class="side_bnr link_pc">
                         <a href="kotoshi/kanjivote.php"><img src="../images/2023_side_bnr.jpg" alt="今年の漢字"></a>
                    </div>
                    <div class="side_bnr link_sp">
                         <a href="kotoshi/kanjivote.php"><img src="../images/2023_sp_bnr.jpg" alt="今年の漢字"></a>
                    </div>
                    <div class="side_ranking">
                         <script>
                              $(function() {
                                   var sel_index = localStorage.getItem("sel_Elem2");
                                   if (sel_index == null) {
                                        sel_index = 0;
                                   }
                                   $('.ChangeElem_Btn2').eq(sel_index).addClass('is-active');
                                   $('.ChangeElem_Panel2').eq(sel_index).show();
                                   $('.ChangeElem_Btn2').each(function() {
                                        $(this).on('click', function() {
                                             var parent = $(this).parents(".side_box");
                                             var index = $(parent).find('.ChangeElem_Btn2').index(this);
                                             $(parent).find('.ChangeElem_Btn2').removeClass('is-active');
                                             $(this).addClass('is-active');
                                             $(parent).find('.ChangeElem_Panel2').hide();
                                             $(parent).find('.ChangeElem_Panel2').eq(index).show();
                                             localStorage.setItem('sel_Elem2', index);
                                        });
                                   });
                              });
                         </script>

                         <div class="side_box">
                              <p class="ttl_normal_s">漢字検索ランキング<span class="rank_update">11/17更新</span></p>
                              <ul class="ChangeElem_Btn_Content2 rank_menu">
                                   <li class="ChangeElem_Btn2">デイリー</li>
                                   <li class="ChangeElem_Btn2">週間</li>
                                   <li class="ChangeElem_Btn2">月間</li>
                              </ul>
                              <div class="ChangeElem_Panel2">
                                   <ul class="side_rank sr_01">
                                        <li><a href="059" title="漢字「中」のページ"><span class="rank">1</span><span class="jp">中</span></a></li>
                                        <li><a href="190" title="漢字「長」のページ"><span class="rank">6</span><span class="jp">長</span></a></li>
                                        <li><a href="136" title="漢字「国」のページ"><span class="rank">2</span><span class="jp">国</span></a></li>
                                        <li><a href="252" title="漢字「駅」のページ"><span class="rank">7</span><span class="jp">駅</span></a></li>
                                        <li><a href="071" title="漢字「本」のページ"><span class="rank">3</span><span class="jp">本</span></a></li>
                                        <li><a href="671" title="漢字「寄」のページ"><span class="rank">8</span><span class="jp">寄</span></a></li>
                                        <li><a href="086" title="漢字「家」のページ"><span class="rank">4</span><span class="jp">家</span></a></li>
                                        <li><a href="114" title="漢字「兄」のページ"><span class="rank">9</span><span class="jp">兄</span></a></li>
                                        <li><a href="775" title="漢字「提」のページ"><span class="rank">5</span><span class="jp">提</span></a></li>
                                        <li><a href="12934" title="漢字「殺」のページ"><span class="rank">10</span><span class="jp">殺</span></a></li>
                                   </ul>
                              </div><!--ChangeElem_Panel2-->
                              <div class="ChangeElem_Panel2">
                                   <ul class="side_rank">
                                        <li><a href="059" title="漢字「中」のページ"><span class="rank">1</span><span class="jp">中</span></a></li>
                                        <li><a href="163" title="漢字「新」のページ"><span class="rank">6</span><span class="jp">新</span></a></li>
                                        <li><a href="423" title="漢字「有」のページ"><span class="rank">2</span><span class="jp">有</span></a></li>
                                        <li><a href="602" title="漢字「無」のページ"><span class="rank">7</span><span class="jp">無</span></a></li>
                                        <li><a href="071" title="漢字「本」のページ"><span class="rank">3</span><span class="jp">本</span></a></li>
                                        <li><a href="911" title="漢字「将」のページ"><span class="rank">8</span><span class="jp">将</span></a></li>
                                        <li><a href="086" title="漢字「家」のページ"><span class="rank">4</span><span class="jp">家</span></a></li>
                                        <li><a href="190" title="漢字「長」のページ"><span class="rank">9</span><span class="jp">長</span></a></li>
                                        <li><a href="136" title="漢字「国」のページ"><span class="rank">5</span><span class="jp">国</span></a></li>
                                        <li><a href="094" title="漢字「海」のページ"><span class="rank">10</span><span class="jp">海</span></a></li>
                                   </ul>
                              </div><!--ChangeElem_Panel2-->
                              <div class="ChangeElem_Panel2">
                                   <ul class="side_rank">
                                        <li><a href="059" title="漢字「中」のページ"><span class="rank">1</span><span class="jp">中</span></a></li>
                                        <li><a href="086" title="漢字「家」のページ"><span class="rank">6</span><span class="jp">家</span></a></li>
                                        <li><a href="991" title="漢字「優」のページ"><span class="rank">2</span><span class="jp">優</span></a></li>
                                        <li><a href="398" title="漢字「美」のページ"><span class="rank">7</span><span class="jp">美</span></a></li>
                                        <li><a href="602" title="漢字「無」のページ"><span class="rank">3</span><span class="jp">無</span></a></li>
                                        <li><a href="423" title="漢字「有」のページ"><span class="rank">8</span><span class="jp">有</span></a></li>
                                        <li><a href="439" title="漢字「和」のページ"><span class="rank">4</span><span class="jp">和</span></a></li>
                                        <li><a href="071" title="漢字「本」のページ"><span class="rank">9</span><span class="jp">本</span></a></li>
                                        <li><a href="440" title="漢字「愛」のページ"><span class="rank">5</span><span class="jp">愛</span></a></li>
                                        <li><a href="027" title="漢字「子」のページ"><span class="rank">10</span><span class="jp">子</span></a></li>
                                   </ul>
                              </div><!--ChangeElem_Panel2-->
                         </div>
                    </div>
                    <script>
                         $(function() {
                              $('.togglemenu').click(function() {
                                   $(this).toggleClass("active").next().slideToggle(300);
                              });
                         });
                    </script>
                    <div class="side_box">
                         <p class="ttl_main_s togglemenu">検索メニュー</p>
                         <div class="togglebox">
                              <ul class="other_site">
                                   <li><a href="yomi">読み検索（音訓検索）</a></li>
                                   <li><a href="kakusu">画数検索</a></li>
                                   <li><a href="bushu">部首検索</a></li>
                                   <li><a href="kousei/">構成検索</a></li>
                                   <li><a href="kyu">漢検の級（習う学年）から検索</a></li>
                                   <li><a href="searchdetail">詳細検索</a></li>
                              </ul>
                         </div><!--togglebox-->
                    </div><!--side_box-->
                    <div class="side_box">
                         <p class="ttl_main_s togglemenu">練習帳</p>
                         <div class="togglebox">
                              <ul class="other_site">
                                   <li><a href="exercisebook/free.php">漢字練習帳</a></li>
                                   <li><a href="exercisebook/free.php#kr1">カスタム練習帳</a></li>
                                   <li><a href="exercisebook/free.php#kr2">漢検級別（学年別）練習帳</a></li>
                              </ul>
                         </div><!--togglebox-->
                    </div><!--side_box-->
                    <div class="side_box">
                         <p class="ttl_main_s togglemenu">漢字の種別</p>
                         <div class="togglebox">
                              <ul class="other_site">
                                   <li><a href="joyo">常用漢字</a></li>
                                   <li><a href="kyoiku">教育漢字</a></li>
                                   <li><a href="jimmei">人名用漢字</a></li>
                                   <li><a href="namae">名前に使える漢字</a></li>
                                   <li><a href="kokuji">国字</a></li>
                              </ul>
                         </div><!--togglebox-->
                    </div><!--side_box-->
                    <div class="side_box">
                         <p class="ttl_main_s togglemenu">漢字の分類・漢字表記</p>
                         <div class="togglebox">
                              <ul class="other_site">
                                   <li><a href="sakuin1">漢字の分類・漢字表記索引</a></li>
                              </ul>
                         </div><!--togglebox-->
                    </div><!--side_box-->
                    <div class="side_box">
                         <p class="ttl_main_s togglemenu">漢字情報</p>
                         <div class="togglebox">
                              <ul class="other_site">
                                   <li><a href="">偏旁（偏旁冠脚）</a></li>
                                   <li><a href="kotoshi/">今年の漢字</a></li>
                                   <li><a href="kotoshi/rekidai">歴代の今年の漢字</a></li>
                                   <li><a href="osusume">おすすめの漢字辞典・漢和辞典</a></li>
                              </ul>
                         </div><!--togglebox-->
                    </div><!--side_box-->
               </div><!--sidebar-->
          </aside>
     </div>    <script>
    jQuery(document).ready(function($) { 
    $('.search_parts li a').mouseenter(function() { 
        var star = $(this).text(); 
        var anchorText = $(this).contents().filter(function() {
            return this.nodeType === 3;
        }).text().trim();
        var spanText = $(this).find('span.small').text().trim();

        // Log the text of the anchor tag to the console
        console.log("Anchor Text:", anchorText);
        star2 ="";
        $('.search_parts li a').attr('href','<?php echo home_url(); ?>'+'/detail-three/'+'/?bold='+anchorText+'&normal='+spanText);  
      
    });
        });
</script><?php wp_footer() ?>