<?php
/*
 * Template Name: Yomi39
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
               <h1 class="ttl_main">音訓検索「ら」</h1>
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
               <p>「ら」から始まる読み方をする漢字です。</p>
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
                              <option value="yomi34">め</option>
                              <option value="yomi35">も</option>
                              <option value="yomi36">や</option>
                              <option value="yomi37">ゆ</option>
                              <option value="yomi38">よ</option>
                              <option value="#" selected>ら</option>
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
                         <li id="parts1_menu"><a href="#parts1">ら</a></li>
                         <li id="parts2_menu"><a href="#parts2">らい</a></li>
                         <li id="parts3_menu"><a href="#parts3">らく</a></li>
                         <li id="parts4_menu"><a href="#parts4">らち</a></li>
                         <li id="parts5_menu"><a href="#parts5">らつ</a></li>
                         <li id="parts6_menu"><a href="#parts6">らは</a></li>
                         <li id="parts7_menu"><a href="#parts7">らん</a></li>
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
                    <h3 class="ttl_while">ら</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="14801">忚<span class="small">ラ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2120">拉<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17060">罗<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13148">剆<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10661">砢<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12525">倮<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12670">㑩<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14951">捰<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19310">㞅<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24907">啰<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25779">猡<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26315">脶<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26465">萝<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26955">逻<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3284">喇<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22573">䟩<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25399">椤<span class="small">ラ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1584">裸<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11875">腡<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20885">㾧<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26546">蜗<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27790">𠺕<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11463">摞<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25954">箩<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4087">蝸<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9601">蓏<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10049">躶<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22144">䗍<span class="small">ラ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2962">螺<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18814">㔏<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23327">䮑<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18099">鎯<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19868">㩡<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21324">䇔<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21435">䉓<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21516">䊨<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26515">藞<span class="small">ラ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1920">羅<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7799">鏍<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8056">覶<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9955">蠃<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9961">蟸<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15049">攎<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15392">氌<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20153">㰁<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4112">蠡<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4507">騾<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8057">覼<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11932">臝<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12669">儸<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17398">蘲<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5447">蘿<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11532">攞<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13595">囉<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16469">玀<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19743">㦬<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5536">邏<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6768">驘<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12325">欏<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15130">曪<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18748">㒩<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20251">㱻<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9742">虆<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18552">鸁<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20809">㽋<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20918">㿚<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21638">䌱<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22088">䖃<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8944">籮<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17053">纙<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24283">䌴<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4741">鑼<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7513">饠<span class="small">ラ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24968">囖<span class="small">ラ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21934">䒭<span class="small">ら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="378">等<span class="small">ら</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">らい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="435">礼<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12335">厉<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6016">耒<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26267">礼<span class="small">ライ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="236">来<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19111">㚓<span class="small">ライ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5661">來<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10448">疠<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18692">㑍<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20560">㸚<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12527">俫<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15535">洡<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22747">䣂<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24398">䒹<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2963">莱<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11951">徕<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12526">倈<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12856">勑<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15177">栛<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16494">珕<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18704">㑦<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18791">㓯<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25127">崃<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25534">涞<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26879">㛤<span class="small">ライ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6181">徠<span class="small">ライ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6456">萊<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8674">郲<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13383">唻<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14094">婡<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14466">崍<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14690">庲<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15647">淶<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16398">猍<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17257">菞<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20271">㲕<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21202">䅄<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22962">䧒<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25394">梾<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8596">逨<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12121">棶<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16519">琜<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20753">㼍<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21981">䓶<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25837">睐<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25946">筙<span class="small">ライ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1298">雷<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4782">綟<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10576">睞<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16897">筣<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20281">㲠<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20374">㴝<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20880">㾢<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21106">䂾<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21219">䅘<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22760">䣓<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8746">酹<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12334">厲<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14177">嫘<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16904">箂<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17448">蜦<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17449">蜧<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18031">銇<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21579">䋱<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22017">䔣<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22132">䖿<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23018">䨓<span class="small">ライ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3760">黎<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4670">磊<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5486">賚<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7386">頪<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10330">畾<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15384">氂<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15809">漦<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16332">犛<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17344">蕌<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17668">誺<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18277">頛<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19725">㦒<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21838">䐯<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22281">䚅<span class="small">ライ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1299">頼<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3730">擂<span class="small">ライ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5420">蕾<span class="small">ライ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6427">賴<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7711">錑<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7712">錸<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16763">磥<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20426">㵢<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23262">䬽<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3142">儡<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5251">癘<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12283">檑<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18286">顂<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18830">㔣<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22731">䢮<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23327">䮑<span class="small">ライ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6014">禮<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6745">騋<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7142">鵣<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10759">礌<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11503">攂<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16336">犡<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16616">癗<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17695">謧<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20452">㵽<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21138">䃬<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21518">䊪<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21669">䍣<span class="small">ライ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1463">瀬<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5439">藾<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6226">櫑<span class="small">ライ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6423">瀨<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7173">鶆<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7272">麳<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15047">攋<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16564">瓃<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16802">禲<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18441">鯠<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18443">鯬<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19018">㘑<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23667">䵩<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25844">矋<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4851">醴<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5275">糲<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6557">黧<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10764">礧<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10765">礨<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15328">櫴<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18746">㒦<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20548">㸊<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27647">㿔<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3978">罍<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5257">癩<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7835">鐳<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9149">纇<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10093">襰<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15970">灅<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19442">㠥<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21175">䄤<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21457">䉪<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21458">䉫<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4607">籟<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13594">囇<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14267">孋<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14718">廲<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17909">轠<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22082">䕻<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7998">靁<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13888">壨<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18146">鑗<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18147">鑘<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20251">㱻<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22631">䠭<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20919">㿛<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15336">欚<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16575">瓥<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18155">鑸<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23599">䴎<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20762">㼖<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23521">䲚<span class="small">ライ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22823">䤙<span class="small">ライ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">らく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="18783">㓢<span class="small">ラク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2964">洛<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6056">咯<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14422">峈<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="26364">荦<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4617">珞<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4910">烙<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15532">洜<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16725">砳<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19944">㪾<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10027">袼<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10675">硌<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20980">䀩<span class="small">ラク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="430">落<span class="small">ラク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1300">絡<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8816">笿<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9814">蛒<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16733">硦<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20368">㴖<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21705">䎊<span class="small">ラク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="098">楽<span class="small">ラク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1921">酪<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13466">嗠<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4836">犖<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7366">韷<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7613">鉻<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7985">雒<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20606">㹊<span class="small">ラク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5732">樂<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10729">䃕<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4495">駱<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21409">䈷<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6947">鮥<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7129">鵅<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3739">擽<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15927">濼<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19735">㦡<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6629">䶅<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11514">攊<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8456">躒<span class="small">ラク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18459">鱳<span class="small">ラク</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4493">駝<span class="small">らくだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6722">駞<span class="small">らくだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4495">駱<span class="small">らくだ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">らち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="3342">埒<span class="small">ラチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5972">埓<span class="small">ラチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20048">㭩<span class="small">ラチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20590">㸹<span class="small">ラチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21971">䓥<span class="small">ラチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14974">揦<span class="small">ラチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21981">䓶<span class="small">ラチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14975">揧<span class="small">ラチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17439">蛶<span class="small">ラチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18282">頱<span class="small">ラチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23327">䮑<span class="small">ラチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15047">攋<span class="small">ラチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16569">瓎<span class="small">ラチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18445">鯻<span class="small">ラチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20548">㸊<span class="small">ラチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23488">䱫<span class="small">ラチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23706">䶛<span class="small">ラチ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">らつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="2120">拉<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13696">垃<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3177">剌<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3342">埒<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5972">埓<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11361">捋<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20048">㭩<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20590">㸹<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20714">㻋<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21971">䓥<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3284">喇<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4399">溂<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14974">揦<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20988">䀳<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21981">䓶<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14975">揧<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15230">楋<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17439">蛶<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20726">㻝<span class="small">ラツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2121">辣<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8548">辢<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10408">瘌<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9883">蝲<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21750">䏀<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18282">頱<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23327">䮑<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21518">䊪<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6845">鬎<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15047">攋<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5275">糲<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16569">瓎<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18445">鯻<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20548">㸊<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23488">䱫<span class="small">ラツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23706">䶛<span class="small">ラツ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5430">薤<span class="small">らっきょう</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">らは</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4507">騾<span class="small">らば</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6768">驘<span class="small">らば</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">らん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="24685">兰<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19340">㞩<span class="small">ラン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="996">卵<span class="small">ラン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="997">乱<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25276">拦<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27291">㳕<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14444">峦<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25383">栏<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25618">烂<span class="small">ラン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1602">浪<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12326">栾<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15569">浨<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17995">釠<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18703">㑣<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3396">婪<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11117">惏<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13391">啉<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19176">㛦<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19658">㤻<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19807">㨆<span class="small">ラン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1941">嵐<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24119">葻<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5754">亂<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13099">僋<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15104">暕<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20237">㱫<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25575">滦<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7861">銮<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9184">罱<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15808">漤<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13202">厱<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4932">燗<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13876">壈<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15888">澰<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17355">薍<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22932">䦨<span class="small">ラン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="998">覧<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3973">闌<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5758">儖<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16231">燣<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18492">鵉<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18810">㔋<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25665">燷<span class="small">ラン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1585">濫<span class="small">ラン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2122">藍<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11211">懢<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11265">㩜<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13558">嚂<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13879">壏<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19236">㜮<span class="small">ラン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2965">蘭<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3415">嬾<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3635">懶<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8205">䜌<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8228">譋<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11264">擥<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15047">攋<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16248">爁<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16560">璼<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20294">㲯<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23037">䨬<span class="small">ラン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1301">欄<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4454">瀾<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5070">襤<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11527">攔<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14261">孄<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14663">幱<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19020">㘓<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19739">㦨<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21304">䆾<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27689">蘭<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4602">籃<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4944">爛<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5829">繿<span class="small">ラン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6362">欄<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10258">瓓<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11577">斕<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15971">灆<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17394">蘫<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19021">㘕<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20168">㰖<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21175">䄤<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21864">䑌<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3482">巒<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5072">襴<span class="small">ラン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6312">覽<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13628">圝<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19501">㡩<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21150">䃹<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4206">欒<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8940">籣<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9155">䌫<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11741">曫<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13599">囒<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14271">孏<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15979">灓<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15990">灡<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16783">礷<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20217">㱍<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8227">讕<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8461">躝<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9194">羉<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12829">欗<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24063">爤<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3746">攬<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6856">䰐<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7858">鑭<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10095">襽<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15989">灠<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18298">顲<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24967">囕<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4205">欖<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7341">䪍<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8993">糷<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13629">圞<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15992">灤<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17406">虊<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22087">䖂<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25671">爦<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4742">鑾<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4823">纜<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7859">钄<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10459">癴<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7340">韊<span class="small">ラン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3841">鸞<span class="small">ラン</span></a></li>
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