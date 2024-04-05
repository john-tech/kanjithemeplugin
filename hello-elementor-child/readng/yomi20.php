<?php
/*
 * Template Name: Yomi20
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
               <h1 class="ttl_main">音訓検索「と」</h1>
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
               <p>「と」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>と</option>
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
                         <li id="parts1_menu"><a href="#parts1">と</a></li>
                         <li id="parts2_menu"><a href="#parts2">とい</a></li>
                         <li id="parts3_menu"><a href="#parts3">とう</a></li>
                         <li id="parts4_menu"><a href="#parts4">とお</a></li>
                         <li id="parts5_menu"><a href="#parts5">とか</a></li>
                         <li id="parts6_menu"><a href="#parts6">とき</a></li>
                         <li id="parts7_menu"><a href="#parts7">とく</a></li>
                         <li id="parts8_menu"><a href="#parts8">とけ</a></li>
                         <li id="parts9_menu"><a href="#parts9">とこ</a></li>
                         <li id="parts10_menu"><a href="#parts10">とさ</a></li>
                         <li id="parts11_menu"><a href="#parts11">とし</a></li>
                         <li id="parts12_menu"><a href="#parts12">とせ</a></li>
                         <li id="parts13_menu"><a href="#parts13">とた</a></li>
                         <li id="parts14_menu"><a href="#parts14">とち</a></li>
                         <li id="parts15_menu"><a href="#parts15">とつ</a></li>
                         <li id="parts16_menu"><a href="#parts16">とて</a></li>
                         <li id="parts17_menu"><a href="#parts17">とと</a></li>
                         <li id="parts18_menu"><a href="#parts18">とな</a></li>
                         <li id="parts19_menu"><a href="#parts19">とね</a></li>
                         <li id="parts20_menu"><a href="#parts20">との</a></li>
                         <li id="parts21_menu"><a href="#parts21">とは</a></li>
                         <li id="parts22_menu"><a href="#parts22">とひ</a></li>
                         <li id="parts23_menu"><a href="#parts23">とふ</a></li>
                         <li id="parts24_menu"><a href="#parts24">とほ</a></li>
                         <li id="parts25_menu"><a href="#parts25">とま</a></li>
                         <li id="parts26_menu"><a href="#parts26">とみ</a></li>
                         <li id="parts27_menu"><a href="#parts27">とむ</a></li>
                         <li id="parts28_menu"><a href="#parts28">とめ</a></li>
                         <li id="parts29_menu"><a href="#parts29">とも</a></li>
                         <li id="parts30_menu"><a href="#parts30">とや</a></li>
                         <li id="parts31_menu"><a href="#parts31">とよ</a></li>
                         <li id="parts32_menu"><a href="#parts32">とら</a></li>
                         <li id="parts33_menu"><a href="#parts33">とり</a></li>
                         <li id="parts34_menu"><a href="#parts34">とる</a></li>
                         <li id="parts35_menu"><a href="#parts35">とろ</a></li>
                         <li id="parts36_menu"><a href="#parts36">とん</a></li>
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
                    <h3 class="ttl_while">と</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="063">土<span class="small">ト</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1516">斗<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="13631">圡<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="27696">𡈽<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="25026">头<span class="small">ト</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1202">吐<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="9375">芏<span class="small">ト</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="166">図<span class="small">ト</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2614">杜<span class="small">ト</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2776">兎<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="3666">抖<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="4213">肚<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="13956">妒<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="18855">㕆<span class="small">ト</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2069">妬<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="2777">兔<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="24970">图<span class="small">ト</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="376">度<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="13130">凃<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="20035">㭔<span class="small">ト</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="578">徒<span class="small">ト</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1201">途<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="2781">莵<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="4039">蚪<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="5367">荼<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="9484">荰<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="11088">悇<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="11352">捈<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="13357">唋<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="14455">峹<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="14684">庩<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="15587">涂<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="22749">䣄<span class="small">ト</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="375">都<span class="small">ト</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2778">兜<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="7539">釷<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="12360">啚<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="13777">堍<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="15199">梌<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="16823">秺<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="20715">㻌<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="20922">㿡<span class="small">ト</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="379">登<span class="small">ト</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1203">渡<span class="small">ト</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2779">堵<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="2780">菟<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="3444">屠<span class="small">ト</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6372">都<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="10850">稌<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="12686">兠<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="12708">㓃<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="13432">喥<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="18251">靯<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="20997">䀾<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="23971">帾<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="24232">㭸<span class="small">ト</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1517">塗<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="11869">䐗<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="14515">嵞<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="15101">暏<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="16529">琽<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="16896">筡<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="17302">蒤<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="24264">䁈<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="4267">跿<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="5164">睹<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="5884">圖<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="8742">酴<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="10404">瘏<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="14542">嶀<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="16542">瑹<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="22000">䔑<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="22520">䞮<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="22588">䟻<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="23524">䲧<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="23925">圗<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="13504">嘟<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="14708">廜<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="15853">潳<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="20732">㻬<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="20735">㻯<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="21245">䅷<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="22769">䣝<span class="small">ト</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="167">頭<span class="small">ト</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2070">賭<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="5460">覩<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="7517">馟<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="9974">螙<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="13872">墿<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="17986">醏<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="22103">䖘<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="22805">䤅<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="23083">䩣<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="2782">鍍<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="3966">闍<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="6736">駼<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="11570">斁<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="11571">歝<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="12928">殬<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="7101">鵌<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="23095">䩲<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="18507">鵵<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="23451">䰩<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="18532">鷋<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="4115">蠧<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="18547">鷵<span class="small">ト</span></a></li>
                         <li class="others_kanji onyomi"><a href="4114">蠹<span class="small">ト</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="034">十<span class="small">と</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="122">戸<span class="small">と</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11233">戶<span class="small">と</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11234">户<span class="small">と</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="096">外<span class="small">と</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="230">門<span class="small">と</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27852">𣏤<span class="small">と</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2473">砥<span class="small">と</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18165">閅<span class="small">と</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="063">土<span class="small">ド</span></a></li>
                         <li class="others_kanji onyomi"><a href="13631">圡<span class="small">ド</span></a></li>
                         <li class="others_kanji onyomi"><a href="27696">𡈽<span class="small">ド</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1204">奴<span class="small">ド</span></a></li>
                         <li class="others_kanji onyomi"><a href="13048">伖<span class="small">ド</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="579">努<span class="small">ド</span></a></li>
                         <li class="others_kanji onyomi"><a href="12422">伮<span class="small">ド</span></a></li>
                         <li class="others_kanji onyomi"><a href="19615">㣽<span class="small">ド</span></a></li>
                         <li class="others_kanji onyomi"><a href="3241">呶<span class="small">ド</span></a></li>
                         <li class="others_kanji onyomi"><a href="3422">孥<span class="small">ド</span></a></li>
                         <li class="others_kanji onyomi"><a href="3487">帑<span class="small">ド</span></a></li>
                         <li class="others_kanji onyomi"><a href="3520">弩<span class="small">ド</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="376">度<span class="small">ド</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1205">怒<span class="small">ド</span></a></li>
                         <li class="others_kanji onyomi"><a href="10656">砮<span class="small">ド</span></a></li>
                         <li class="others_kanji onyomi"><a href="8799">笯<span class="small">ド</span></a></li>
                         <li class="others_kanji onyomi"><a href="26306">胬<span class="small">ド</span></a></li>
                         <li class="others_kanji onyomi"><a href="4491">駑<span class="small">ド</span></a></li>
                         <li class="others_kanji onyomi"><a href="7102">鴑<span class="small">ド</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">とい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2790">樋<span class="small">とい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="417">問<span class="small">と（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27804">𡍄<span class="small">どい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12335">厉<span class="small">といし</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2473">砥<span class="small">といし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12334">厲<span class="small">といし</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">とう</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="199">刀<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="369">丁<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5742">亠<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1516">斗<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="198">冬<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3219">叨<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3363">夲<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11024">忉<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12376">仝<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25026">头<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="200">当<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="204">同<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="580">灯<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2625">吋<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5916">朷<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11937">朾<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13048">伖<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13646">圵<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13913">夵<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15998">灱<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15999">灲<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19109">㚐<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24718">凼<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24734">动<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25490">氘<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="381">投<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="382">豆<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3666">抖<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7916">阧<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12423">佟<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13253">吺<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13654">坄<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14761">彤<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16638">盯<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19350">㞳<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20313">㳆<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21265">䆑<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26947">㢭<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="202">東<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1211">到<span class="small">トウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2785">宕<span class="small">トウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2787">沓<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3487">帑<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5325">苳<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9324">舠<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11972">枓<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12458">侗<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12943">匋<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13671">坣<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13977">妵<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14677">庝<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14731">弢<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16978">糽<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18768">㓊<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18899">㕻<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19140">㚵<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19461">㠽<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19628">㤏<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20633">㹥<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21934">䒭<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23898">咅<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24728">㓥<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24789">咚<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25117">峂<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25849">砀<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1213">逃<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1497">胆<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1816">挑<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1844">洞<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3096">俑<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3566">恫<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5343">荅<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5719">迯<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8084">䚯<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9274">耷<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9453">茼<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11332">挏<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12479">侸<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12767">剅<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13317">咷<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13322">哃<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13697">垌<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14001">姛<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14432">峒<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14441">峝<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15095">昸<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15544">洮<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16042">炵<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16373">狣<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16377">狧<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16379">狪<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19551">㢥<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19592">㣚<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19593">㣛<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19598">㣠<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19967">㫞<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19968">㫡<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20326">㳘<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20973">䀞<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22554">䟓<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24299">䓁<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24988">垱<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25244">恸<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25286">挡<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25494">氡<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25775">狰<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="377">島<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="954">党<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="955">討<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="962">納<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1206">透<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1207">唐<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1208">桃<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1212">倒<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1217">胴<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1519">凍<span class="small">トウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2784">套<span class="small">トウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2788">桐<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2795">涛<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2803">涜<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4039">蚪<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5220">疼<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5361">荳<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5696">鬥<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5901">釖<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6110">档<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6341">陦<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7935">陡<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8582">迵<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9007">紏<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10313">畗<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10537">眔<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11353">捅<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12218">桩<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12509">倘<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12521">倲<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13330">哣<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13364">唗<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14939">挰<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15096">晍<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15566">浢<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15577">浵<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16058">烔<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17420">蚒<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17951">郖<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19162">㛒<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19170">㛚<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19526">㢄<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19650">㤱<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20557">㸗<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21081">䂢<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21646">䍇<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24808">唞<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24809">唠<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24986">垯<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25210">帱<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25261">戙<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25790">珰<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25853">砼<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27826">𡷠<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27838">𢭏<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="383">動<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="582">堂<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1209">盗<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1518">陶<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1840">悼<span class="small">トウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2615">逗<span class="small">トウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2778">兜<span class="small">トウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2789">桶<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2792">梼<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2793">淘<span class="small">トウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2796">祷<span class="small">トウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2797">萄<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3122">偸<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3182">剳<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3269">啅<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3696">掏<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3697">掉<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4386">淌<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6334">酘<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8670">䣊<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9518">菪<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10314">畣<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10368">痌<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10550">眮<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10672">硐<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10847">秱<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10974">恿<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11384">㧺<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11580">㪷<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11826">脰<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12070">梪<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12549">偷<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12550">偒<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12948">匒<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12990">匬<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13387">啁<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13397">啕<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13758">埬<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13763">埱<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14063">娻<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14463">崉<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14474">崠<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14950">捯<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15377">毭<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15606">涭<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15613">涷<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15618">涾<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16102">焘<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16407">猙<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16600">痋<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16880">笗<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16881">笚<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17247">菄<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17263">菿<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18792">㓱<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18934">㖣<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18937">㖦<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19175">㛥<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19803">㨂<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19804">㨃<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19903">㪌<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20190">㰯<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20651">㹺<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20656">㹿<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20773">㼥<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20864">㾑<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20922">㿡<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20934">㿯<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21060">䂈<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21194">䄻<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21206">䅊<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21272">䆚<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21966">䓠<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22322">䚵<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22564">䟝<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23207">䫸<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24224">㫦<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24350">䬢<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25130">崬<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26563">裆<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="201">答<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="203">道<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="378">等<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="379">登<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="380">湯<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="384">童<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="778">統<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="952">痛<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1210">塔<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1520">痘<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1838">搭<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1839">筒<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1841">棟<span class="small">トウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2734">喋<span class="small">トウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2798">董<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3492">幀<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3708">揄<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4133">棠<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4141">棹<span class="small">トウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6040">盜<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6274">粡<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7557">鈄<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7898">閗<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8118">詜<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8376">䟫<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9037">絧<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9989">衕<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11143">愓<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11412">揨<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12107">棖<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12577">傏<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12671">傥<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12686">兠<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13091">傝<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13408">啺<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14108">婸<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14114">婾<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14132">媑<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14486">崵<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14977">揰<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15407">氭<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15708">湩<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15730">溚<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16734">硧<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16994">絩<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17110">聎<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17159">腖<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17273">萮<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18796">㓸<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19215">㜓<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19477">㡏<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19484">㡖<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19535">㢏<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19913">㪗<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20060">㭻<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20061">㭼<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20256">㲂<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20775">㼧<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20993">䀺<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21156">䄈<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21680">䍮<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22344">䛌<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23907">嗒<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24065">牚<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24087">禂<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24246">㴞<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25061">媮<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25229">徚<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25352">敨<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25949">筜<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26914">㟷<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1190">跳<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2783">塘<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3714">搗<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3717">搨<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4407">溏<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4410">滔<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4769">絛<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5022">閙<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5592">罩<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5865">當<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6886">魛<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7592">鉖<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8137">詷<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8247">豋<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8603">逿<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8691">鄌<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8740">酮<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8824">筩<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9036">綂<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9594">蓎<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10047">裯<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10194">瑒<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10279">瓽<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10801">祹<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11162">慆<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11437">搯<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11438">搪<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13806">塌<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14173">嫍<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14520">嵣<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14643">幍<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14645">幐<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14897">戥<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15241">榙<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15351">歈<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15751">溻<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16288">牏<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17563">裪<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17777">赨<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18223">雼<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18463">鳭<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18715">㑽<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19209">㜍<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20078">㮔<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20783">㼯<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21103">䂻<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21107">䂿<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21358">䇺<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21664">䍜<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21665">䍝<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21821">䐛<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22494">䞒<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22914">䦒<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22972">䧜<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23246">䬦<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23906">嗂<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26579">誊<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="205">読<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1215">稲<span class="small">トウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2786">嶋<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3135">僮<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3614">慟<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4159">榻<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4546">箚<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4778">綯<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4826">骰<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6083">嶌<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6531">劄<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7294">鞀<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7463">飳<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7636">鉵<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7897">鬦<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7963">隝<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7964">隚<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8608">遝<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8610">遢<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8842">䈇<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9212">䍶<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9233">翢<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9627">蓪<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9860">蝀<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9861">蜪<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10205">瑫<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10206">瑭<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10417">瘩<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10711">碭<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10923">窬<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11458">摚<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11887">膅<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12621">僜<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12728">凳<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12983">毾<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13166">勭<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13849">墖<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14875">憆<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15004">摥<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15251">榶<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15254">槄<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15802">漛<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15806">漟<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15814">漯<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16167">煻<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16908">箌<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17580">褡<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18310">飸<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18803">㔁<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18982">㗢<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19413">㠀<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19835">㨮<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19842">㨶<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20286">㲥<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20670">㺐<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20939">㿴<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21012">䁎<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21373">䈋<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21711">䎐<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21714">䎓<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21890">䑲<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22361">䛠<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22518">䞬<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22764">䣘<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23252">䬭<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24949">嘡<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26282">耥<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26505">蔸<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1214">踏<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2026">憧<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2061">嘲<span class="small">トウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2498">撞<span class="small">トウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2790">樋<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2799">蕩<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3474">嶝<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3497">幢<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3720">撓<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4321">滕<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5021">鬧<span class="small">トウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6128">稻<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6243">潼<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6303">蝪<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7295">鞉<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7300">鞈<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7468">餇<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7668">鋀<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7669">鋥<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7966">隥<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7999">霅<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8167">誻<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8351">趟<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8405">踔<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8469">躺<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8604">衜<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8710">鄧<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8862">箽<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9653">蕫<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10997">憃<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11193">懂<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11411">撘<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11483">撐<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11484">撑<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11897">膛<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12217">樁<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12641">儅<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13511">嘮<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13531">噔<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13856">墥<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13865">墱<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14210">嬁<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14234">嬞<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14874">憅<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14879">憕<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15035">擖<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15257">槦<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15269">樘<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15382">氀<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15831">潒<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16448">獞<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16680">瞊<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16758">磄<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16798">禟<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16799">禢<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16965">糃<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17170">膡<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17579">褟<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17806">趤<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17983">醄<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18997">㗳<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19420">㠉<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19493">㡠<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20536">㷹<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20758">㼒<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20794">㼺<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21237">䅯<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21870">䑗<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21873">䑜<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22026">䔲<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22370">䛫<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22371">䛬<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22525">䞴<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23460">䰸<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23915">噇<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24053">熥<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24098">緰<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24727">劏<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26334">艔<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="167">頭<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="956">糖<span class="small">トウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4185">橙<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4188">橦<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4795">縢<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5168">瞠<span class="small">トウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5673">燈<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6730">駧<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7475">餖<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7702">錔<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7885">閶<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8605">衟<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8874">篖<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9108">縚<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9348">䑽<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9897">螗<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9898">螣<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10226">璒<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11501">擋<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11726">曈<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11907">朣<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12253">橖<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12254">橕<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13553">噹<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15075">斢<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15385">氃<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15878">澢<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16222">燑<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16225">燙<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16334">犝<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16682">瞗<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17175">膯<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17357">薚<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17843">踼<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17930">邆<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18056">鋾<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18068">錭<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18346">駣<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18349">駦<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19091">㙶<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20120">㯓<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20127">㯚<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20261">㲇<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20262">㲈<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20290">㲪<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21171">䄝<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21403">䈱<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21405">䈳<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21598">䌅<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21601">䌈<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22040">䕆<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22045">䕋<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22805">䤅<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23541">䲽<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23550">䳉<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24987">墶<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24989">壋<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26323">膧<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1843">謄<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2072">瞳<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2794">濤<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3735">擣<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4094">螳<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4281">蹈<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4676">磴<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4713">鍮<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5091">鞜<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5569">盪<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6291">膽<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6547">黈<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6944">鮦<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7125">鵃<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7971">隯<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8189">謟<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8421">蹋<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8528">轁<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8897">篼<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8977">糛<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9049">縧<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10227">璗<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10241">璫<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10608">瞪<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10887">穜<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11586">斣<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12281">檔<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13137">凟<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13880">壔<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14238">嬣<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14582">嶹<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14660">幬<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15300">檤<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15905">濌<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16867">竳<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17778">赯<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17991">醣<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18231">霘<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20799">㼿<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21132">䃥<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21295">䆵<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21298">䆸<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21299">䆹<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21902">䒅<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22251">䙞<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23919">嚃<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24368">䳋<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1216">闘<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2071">藤<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2791">檮<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3750">鼕<span class="small">トウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4198">櫂<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4678">礑<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4892">艟<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5066">襠<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5093">鞳<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6480">瀆<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6743">騊<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7490">餳<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7763">鎕<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7899">闒<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8907">簦<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8908">簜<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10891">䆃<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12663">儯<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12729">櫈<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16246">燾<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17851">蹚<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18088">鎉<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18101">鎲<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18401">鬇<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20619">㹗<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20804">㽆<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21430">䉎<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22289">䚎<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22855">䤾<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23329">䮓<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23447">䰤<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23471">䱏<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3819">鶇<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4107">蟷<span class="small">トウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6451">禱<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6579">鼗<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6991">鯟<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7168">鵫<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7301">䶀<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7355">鞱<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7496">饀<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7497">餹<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7793">鏜<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8055">覴<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8440">蹬<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8441">蹹<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8918">簹<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9706">䕨<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10612">矃<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17065">羄<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17196">艡<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17709">謿<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17715">譗<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18180">闛<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20761">㼕<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20912">㿒<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22076">䕱<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22293">䚒<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22693">䡴<span class="small">トウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1842">騰<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2800">鐙<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4355">韜<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5570">蘯<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5624">竇<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5834">黨<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6138">鬪<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7325">鞺<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7906">闟<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9246">翿<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17390">蘣<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18126">鐋<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18237">霯<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19499">㡧<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21521">䊭<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21628">䌦<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23130">䪚<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23492">䱰<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23638">䵉<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23647">䵔<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23670">䵬<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24140">譡<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24169">饄<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4605">籐<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4734">鐺<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7025">鰧<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7026">鰨<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8214">譶<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8332">贑<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8473">軇<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18141">鑉<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18181">闣<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18321">饓<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18529">鶶<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23280">䭚<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23581">䳴<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23687">䶁<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23725">䶱<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24332">䜚<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24965">嚺<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3146">儻<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5299">饕<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5852">籘<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6318">讀<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16268">爞<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16573">瓙<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22630">䠬<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23359">䮴<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23360">䮵<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23653">䵚<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11219">戃<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11535">攩<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15983">灙<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22632">䠮<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22774">䣣<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23242">䬞<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23511">䲍<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23590">䳾<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23592">䴀<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4821">纛<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7326">鼞<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8331">贛<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11743">曭<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12328">欓<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16272">爣<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18407">鬬<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23366">䮻<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6585">鼟<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7896">鬭<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8422">躢<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10621">矘<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11022">戅<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19886">㩸<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20929">㿩<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23851">戆<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18392">驣<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8233">讜<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7862">钂<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11021">戇<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6685">龖<span class="small">トウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24179">龘<span class="small">トウ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5958">蓊<span class="small">とう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5433">薹<span class="small">とう</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="937">存<span class="small">と（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2600">訊<span class="small">と（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3389">娉<span class="small">と（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17634">訙<span class="small">と（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="417">問<span class="small">と（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="980">訪<span class="small">と（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4859">聘<span class="small">と（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4959">詢<span class="small">と（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22357">䛜<span class="small">と（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2500">諏<span class="small">と（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1425">諮<span class="small">と（う）</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="206">内<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12696">內<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12376">仝<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24199">㘝<span class="small">ドウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="204">同<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13015">乪<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19341">㞪<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24700">农<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24734">动<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25093">导<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23945">妠<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26390">㑇<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3241">呶<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11055">怓<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13671">坣<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18693">㑎<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24580">侬<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25277">拧<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25772">狞<span class="small">ドウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1174">耐<span class="small">ドウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1844">洞<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3566">恫<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5026">衲<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13322">哃<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14432">峒<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16373">狣<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24804">哝<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25244">恸<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25247">恼<span class="small">ドウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="785">能<span class="small">ドウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1217">胴<span class="small">ドウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1223">悩<span class="small">ドウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2788">桐<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14448">峱<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21646">䍇<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25261">戙<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25664">㶶<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26312">脑<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26314">脓<span class="small">ドウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="383">動<span class="small">ドウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="582">堂<span class="small">ドウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="961">脳<span class="small">ドウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2797">萄<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8485">軜<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10673">硇<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11827">匘<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13388">啂<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13397">啕<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14097">婥<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14463">崉<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15618">涾<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15630">淖<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16881">笚<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16883">笝<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19904">㪎<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20343">㳶<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20657">㺀<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21798">䏻<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22563">䟜<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23207">䫸<span class="small">ドウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="203">道<span class="small">ドウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="384">童<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4133">棠<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6087">惱<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8117">詉<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12577">傏<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14108">婸<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14982">搑<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16418">猱<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16994">絩<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17110">聎<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18005">鈉<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18709">㑳<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19189">㛴<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19604">㣫<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20060">㭻<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20061">㭼<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20658">㺁<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21351">䇱<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21680">䍮<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22344">䛌<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23405">䯮<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27861">𣓤<span class="small">ドウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="385">農<span class="small">ドウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="581">働<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4625">瑙<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5022">閙<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5707">嫐<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6286">腦<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6348">靹<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14520">嵣<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14983">搙<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17308">蒳<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17563">裪<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18223">雼<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18715">㑽<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18975">㗙<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19208">㜌<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19209">㜍<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19258">㝅<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19829">㨥<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20387">㴰<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21107">䂿<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22914">䦒<span class="small">ドウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="779">銅<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3135">僮<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3614">慟<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6268">碯<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9267">槈<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14875">憆<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15251">榶<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15806">漟<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20286">㲥<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22358">䛝<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22764">䣘<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23120">䪏<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24949">嘡<span class="small">ドウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="780">導<span class="small">ドウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2026">憧<span class="small">ドウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2498">撞<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3138">儂<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3497">幢<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3720">撓<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5021">鬧<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6243">潼<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6899">魶<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8551">辳<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8604">衜<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14216">嬈<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14874">憅<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16448">獞<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16680">瞊<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16758">磄<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16798">禟<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16965">糃<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17170">膡<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17464">蝚<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17806">趤<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17983">醄<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20407">㵊<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20794">㼺<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21237">䅯<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21244">䅶<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21870">䑗<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22371">䛬<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23915">噇<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26334">艔<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3936">耨<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4189">橈<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5168">瞠<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8605">衟<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9676">蕽<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11194">憹<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11907">朣<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12653">儜<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13543">噥<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13551">噵<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14571">嶩<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15031">擃<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17481">螚<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17930">邆<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18056">鋾<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18068">錭<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18346">駣<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19091">㙶<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20262">㲈<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20680">㺜<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21398">䈫<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21405">䈳<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21598">䌅<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22045">䕋<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26323">膧<span class="small">ドウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2072">瞳<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2802">膿<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4281">蹈<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5123">獰<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9698">薴<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11506">擰<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15300">檤<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16460">獳<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17741">豰<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17778">赯<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18429">鮙<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21902">䒅<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22390">䜀<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25663">燶<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2801">嚢<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4196">檸<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4313">臑<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4892">艟<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7764">鎒<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12293">檽<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12663">儯<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16462">獶<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16614">癑<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20295">㲰<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20619">㹗<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21047">䁸<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21135">䃩<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21430">䉎<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17047">繷<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17712">譊<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22293">䚒<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23940">夒<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4729">鐃<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8552">䢉<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15963">瀼<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17074">羺<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17722">譨<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18129">鐞<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21521">䊭<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21628">䌦<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23670">䵬<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3924">曩<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15332">欁<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17724">譳<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18529">鶶<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23280">䭚<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23581">䳴<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6479">囊<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14592">巎<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16468">獿<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16573">瓙<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18143">鑏<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22186">䘅<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22630">䠬<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23042">䨲<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23359">䮴<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9970">蠰<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18405">鬞<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23242">䬞<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23286">䭢<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23595">䴃<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12674">儾<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18406">鬡<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20472">㶞<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23456">䰰<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13600">囔<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15991">灢<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19101">㚂<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23655">䵜<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15337">欜<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18392">驣<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18600">齈<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25667">饢<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6521">齉<span class="small">ドウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27881">𩇔<span class="small">ドウ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5068">襦<span class="small">どうぎ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1218">峠<span class="small">とうげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12347">炷<span class="small">とうしん</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2029">芯<span class="small">とうしんぐさ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="845">貴<span class="small">とうと（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="936">尊<span class="small">とうと（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8293">䝿<span class="small">とうと（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1744">尚<span class="small">とうと（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23958">尙<span class="small">とうと（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1772">崇<span class="small">とうと（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14462">崈<span class="small">とうと（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="845">貴<span class="small">とうと（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="936">尊<span class="small">とうと（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8293">䝿<span class="small">とうと（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5380">菘<span class="small">とうな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4057">蜀<span class="small">とうまる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3823">鶤<span class="small">とうまる</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">とお</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="034">十<span class="small">とお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2523">什<span class="small">とお</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="321">拾<span class="small">とお</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2169">迂<span class="small">とお（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8558">迃<span class="small">とお（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26939">远<span class="small">とお（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26944">㢠<span class="small">とお（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5350">茫<span class="small">とお（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5501">迢<span class="small">とお（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5502">迥<span class="small">とお（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8571">逈<span class="small">とお（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1914">悠<span class="small">とお（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5513">逖<span class="small">とお（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8572">䢛<span class="small">とお（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2960">遥<span class="small">とお（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8590">逷<span class="small">とお（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="084">遠<span class="small">とお（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5518">遐<span class="small">とお（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3359">夐<span class="small">とお（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5778">遙<span class="small">とお（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2899">緬<span class="small">とお（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15068">敻<span class="small">とお（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5435">藐<span class="small">とお（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5535">邃<span class="small">とお（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="194">通<span class="small">とお（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1791">疎<span class="small">とお（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2544">疏<span class="small">とお（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6106">踈<span class="small">とお（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10339">䟽<span class="small">とお（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2311">亨<span class="small">とお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25227">彻<span class="small">とお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15555">浃<span class="small">とお（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="194">通<span class="small">とお（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1206">透<span class="small">とお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4373">浹<span class="small">とお（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="565">達<span class="small">とお（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1791">疎<span class="small">とお（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2544">疏<span class="small">とお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5720">逹<span class="small">とお（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2737">暢<span class="small">とお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6106">踈<span class="small">とお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10339">䟽<span class="small">とお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22518">䞬<span class="small">とお（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1835">徹<span class="small">とお（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1916">融<span class="small">とお（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">とか</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="8598">过<span class="small">とが</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3234">咎<span class="small">とが</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="089">科<span class="small">とが</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2749">栂<span class="small">とが</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="655">過<span class="small">とが</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5317">辜<span class="small">とが</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4180">樛<span class="small">とが</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4999">謫<span class="small">とが</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8220">讁<span class="small">とが</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3368">奎<span class="small">とかきぼし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1122">釈<span class="small">と（かす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="660">解<span class="small">と（かす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1294">溶<span class="small">と（かす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4918">煬<span class="small">と（かす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6314">觧<span class="small">と（かす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2954">熔<span class="small">と（かす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4703">銷<span class="small">と（かす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2955">鎔<span class="small">と（かす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4943">爍<span class="small">と（かす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6336">釋<span class="small">と（かす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4735">鑠<span class="small">と（かす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4033">枅<span class="small">とがた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5920">枦<span class="small">とがた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25380">栌<span class="small">とがた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4207">櫨<span class="small">とがた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3234">咎<span class="small">とが（め）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5011">譴<span class="small">とが（め）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2946">尤<span class="small">とが（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3234">咎<span class="small">とが（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14814">怣<span class="small">とが（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5011">譴<span class="small">とが（める）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2634">尖<span class="small">とが（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">とき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2602">辰<span class="small">とき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11673">时<span class="small">とき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="874">刻<span class="small">とき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11674">旹<span class="small">とき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="157">秋<span class="small">とき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10832">秌<span class="small">とき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13897">夈<span class="small">とき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="148">時<span class="small">とき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6656">斋<span class="small">とき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19932">㪰<span class="small">とき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1702">斎<span class="small">とき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3919">晨<span class="small">とき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19979">㫳<span class="small">とき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="267">期<span class="small">とき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23249">䬩<span class="small">とき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2917">鴇<span class="small">とき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2513">穐<span class="small">とき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5018">鬨<span class="small">とき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3810">鴾<span class="small">とき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6012">齋<span class="small">とき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7127">鵇<span class="small">とき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2514">龝<span class="small">とき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2203">伽<span class="small">とぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25944">笺<span class="small">ときあ（かし）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8838">䇳<span class="small">ときあ（かし）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2041">箋<span class="small">ときあ（かし）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2725">註<span class="small">ときあか（す）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">とく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="2804">禿<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10952">忑<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10953">忒<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="25926">秃<span class="small">トク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2485">竺<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17941">邮<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19298">㝵<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19591">㣙<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24108">苖<span class="small">トク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="782">独<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16872">笁<span class="small">トク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="583">特<span class="small">トク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1521">匿<span class="small">トク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2702">啄<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="2803">涜<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8292">貣<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9289">聀<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13150">剢<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14831">恴<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17230">荲<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19299">㝶<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19648">㤫<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20852">㾄<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22268">䙷<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22269">䙸<span class="small">トク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="584">得<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15194">梀<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15620">淂<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17147">脦<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17427">蚮<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19661">㥀<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19663">㥂<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19796">㧹<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20596">㸿<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="26287">职<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5827">悳<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10376">痜<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12108">棏<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14848">惪<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16317">犆<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19662">㥁<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21803">䐁<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21976">䓯<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="27834">𢛳<span class="small">トク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1845">督<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8875">䔍<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19708">㥾<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21225">䅞<span class="small">トク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="205">読<span class="small">トク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="781">徳<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3615">慝<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10696">碡<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13500">嘚<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17328">蔋<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17569">裻<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21832">䐨<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22362">䛢<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="26490">㔉<span class="small">トク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6421">德<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7670">鋱<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9880">蝳<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18733">㒔<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21389">䈞<span class="small">トク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1522">篤<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6255">獨<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7703">鍀<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9898">螣<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18065">錖<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18477">鴏<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22430">䜼<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22926">䦠<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12994">匵<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13137">凟<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15071">斀<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17741">豰<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22731">䢮<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23895">儥<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24346">䨤<span class="small">トク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="741">職<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6480">瀆<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7139">鵚<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10083">襡<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14255">嬻<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17504">蟘<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4837">犢<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4883">牘<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9290">軄<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10254">瓄<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12299">櫝<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12930">殰<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22733">䢱<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5624">竇<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6760">騳<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16630">皾<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17597">襩<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6318">讀<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8329">贕<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17733">豄<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23113">䪅<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23202">䫳<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4829">髑<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7360">韣<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7848">鑟<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12817">劚<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23362">䮷<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4821">纛<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7336">韇<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18270">韥<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3759">黷<span class="small">トク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8234">讟<span class="small">トク</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="805">弁<span class="small">と（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1430">疾<span class="small">と（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19782">㧧<span class="small">と（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="990">訳<span class="small">と（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1122">釈<span class="small">と（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4032">梳<span class="small">と（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4955">詁<span class="small">と（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22349">䛒<span class="small">と（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="660">解<span class="small">と（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1294">溶<span class="small">と（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6314">觧<span class="small">と（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="551">説<span class="small">と（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8146">說<span class="small">と（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1002">論<span class="small">と（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5700">譯<span class="small">と（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6336">釋<span class="small">と（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6331">辯<span class="small">と（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12335">厉<span class="small">と（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="290">研<span class="small">と（ぐ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2473">砥<span class="small">と（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3001">砺<span class="small">と（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10644">硏<span class="small">と（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12334">厲<span class="small">と（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1901">磨<span class="small">と（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3000">礪<span class="small">と（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10738">䃺<span class="small">と（ぐ）</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="585">毒<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17941">邮<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19591">㣙<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24108">苖<span class="small">ドク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="782">独<span class="small">ドク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="583">特<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17427">蚮<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16317">犆<span class="small">ドク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="205">読<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17328">蔋<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21732">䎪<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21832">䐨<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9880">蝳<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18733">㒔<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21243">䅵<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6255">獨<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17481">螚<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18477">鴏<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22430">䜼<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12994">匵<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23895">儥<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14255">嬻<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17504">蟘<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22733">䢱<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17597">襩<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6318">讀<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22186">䘅<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23202">䫳<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4829">髑<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23362">䮷<span class="small">ドク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18270">韥<span class="small">ドク</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4098">螫<span class="small">どく</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24994">埘<span class="small">とぐろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3349">塒<span class="small">とぐろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5144">顱<span class="small">どくろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7425">髗<span class="small">どくろ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">とけ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4000">朿<span class="small">とげ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1115">刺<span class="small">とげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4129">棘<span class="small">とげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5410">蒂<span class="small">とげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5409">蔕<span class="small">とげ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2112">冶<span class="small">と（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25536">涣<span class="small">と（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4388">渙<span class="small">と（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="660">解<span class="small">と（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1294">溶<span class="small">と（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6314">觧<span class="small">と（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2954">熔<span class="small">と（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4703">銷<span class="small">と（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1916">融<span class="small">と（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2955">鎔<span class="small">と（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4735">鑠<span class="small">と（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1457">遂<span class="small">と（げる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">とこ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1141">床<span class="small">とこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4351">牀<span class="small">とこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="737">常<span class="small">とこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19712">㦂<span class="small">とこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="643">永<span class="small">とこしえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4475">輹<span class="small">とこしばり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="906">処<span class="small">ところ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12726">处<span class="small">ところ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="186">地<span class="small">ところ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6197">攸<span class="small">ところ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13663">坔<span class="small">ところ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="329">所<span class="small">ところ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13738">埊<span class="small">ところ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="826">域<span class="small">ところ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6059">處<span class="small">ところ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12725">䖏<span class="small">ところ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13861">墬<span class="small">ところ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14578">嶳<span class="small">ところ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">とさ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="977">閉<span class="small">と（ざす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6337">閇<span class="small">と（ざす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1105">鎖<span class="small">とざ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7753">鎻<span class="small">とざ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7754">鏁<span class="small">とざ（す）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">とし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="12887">亗<span class="small">とし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="067">年<span class="small">とし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25106">岁<span class="small">とし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1434">寿<span class="small">とし</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2398">庚<span class="small">とし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5633">祀<span class="small">とし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9438">茊<span class="small">とし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16806">秊<span class="small">とし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21184">䄭<span class="small">とし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5344">茲<span class="small">とし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9439">兹<span class="small">とし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5636">祚<span class="small">とし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12886">嵗<span class="small">とし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1106">歳<span class="small">とし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1108">載<span class="small">とし</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2606">稔<span class="small">とし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12885">歲<span class="small">とし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24273">䄒<span class="small">とし</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6156">壽<span class="small">とし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18627">夀<span class="small">とし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10778">禩<span class="small">とし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1310">齢<span class="small">とし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5781">齡<span class="small">とし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="624">利<span class="small">と（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11551">勄<span class="small">と（し）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1250">敏<span class="small">と（し）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1430">疾<span class="small">と（し）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6385">敏<span class="small">と（し）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="804">編<span class="small">とじいと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26540">蛰<span class="small">とじこ（もる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4099">蟄<span class="small">とじこ（もる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4785">緘<span class="small">とじなわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3871">鯲<span class="small">どじょう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2522">鰍<span class="small">どじょう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3880">鰌<span class="small">どじょう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5313">艾<span class="small">としよ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27742">𦫿<span class="small">としよ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19045">㘷<span class="small">としよ（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2092">眉<span class="small">としよ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24776">叜<span class="small">としよ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3216">叟<span class="small">としよ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3781">旄<span class="small">としよ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5478">耆<span class="small">としよ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5479">耄<span class="small">としよ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9250">耊<span class="small">としよ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5480">耋<span class="small">としよ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10522">睂<span class="small">としよ（り）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2614">杜<span class="small">と（じる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1544">封<span class="small">と（じる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="977">閉<span class="small">と（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6337">閇<span class="small">と（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5607">翕<span class="small">と（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17084">翖<span class="small">と（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4688">鉗<span class="small">と（じる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2755">綴<span class="small">と（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18723">㒆<span class="small">と（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4785">緘<span class="small">と（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21395">䈤<span class="small">と（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3304">噤<span class="small">と（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4795">縢<span class="small">と（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3971">闔<span class="small">と（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4739">鑰<span class="small">と（じる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">とせ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="12887">亗<span class="small">とせ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="067">年<span class="small">とせ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25106">岁<span class="small">とせ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16806">秊<span class="small">とせ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21184">䄭<span class="small">とせ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12886">嵗<span class="small">とせ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1106">歳<span class="small">とせ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12885">歲<span class="small">とせ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">とた</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="12182">榰<span class="small">どだい</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">とち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="27761">𠫓<span class="small">トチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17911">迌<span class="small">トチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19633">㤕<span class="small">トチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16651">眣<span class="small">トチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19665">㥆<span class="small">トチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17747">貀<span class="small">トチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18313">飿<span class="small">トチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22600">䠈<span class="small">トチ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5917">杤<span class="small">とち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4015">杼<span class="small">とち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2073">栃<span class="small">とち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6185">挧<span class="small">とち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2565">橡<span class="small">とち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27868">𣜜<span class="small">とち</span></a></li>
                         <li class="others_kanji onyomi"><a href="13778">堗<span class="small">ドチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17788">趃<span class="small">ドチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18520">鶟<span class="small">ドチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18596">鼵<span class="small">ドチ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">とつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="27761">𠫓<span class="small">トツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1846">凸<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3228">吶<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13263">呐<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14287">宊<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24183">㐬<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24196">㕯<span class="small">トツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1219">突<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3242">咄<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11056">怢<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17911">迌<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19633">㤕<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4022">柮<span class="small">トツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6403">突<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15593">涋<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4951">訥<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11385">捸<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15207">棁<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16882">笜<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19665">㥆<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9566">葖<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11413">揬<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13778">堗<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15705">湥<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17747">貀<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17788">趃<span class="small">トツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2074">頓<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7593">鈯<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11872">腯<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20728">㻠<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18313">飿<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22600">䠈<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13561">嚉<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18072">鍎<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18520">鶟<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18596">鼵<span class="small">トツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3228">吶<span class="small">ドツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11291">抐<span class="small">ドツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13263">呐<span class="small">ドツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24196">㕯<span class="small">ドツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4215">肭<span class="small">ドツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22563">䟜<span class="small">ドツ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14754">归<span class="small">とつ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1609">姻<span class="small">とつ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5861">皈<span class="small">とつ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="106">帰<span class="small">とつ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12769">㱕<span class="small">とつ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14095">婣<span class="small">とつ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22716">䢜<span class="small">とつ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1335">嫁<span class="small">とつ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6229">歸<span class="small">とつ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4685">鈕<span class="small">とって</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">とて</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5500">迚<span class="small">とて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5500">迚<span class="small">とて（も）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5055">褞<span class="small">どてら</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">とと</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="27785">𠥼<span class="small">とと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2711">椴<span class="small">とど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6900">魹<span class="small">とど</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="957">届<span class="small">とど（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6167">屆<span class="small">とど（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="565">達<span class="small">とど（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5720">逹<span class="small">とど（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="957">届<span class="small">とど（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6167">屆<span class="small">とど（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4393">湫<span class="small">とどこお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15666">渪<span class="small">とどこお（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1489">滞<span class="small">とどこお（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6239">滯<span class="small">とどこお（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1989">稽<span class="small">とどこお（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2503">濡<span class="small">とどこお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14859">愸<span class="small">ととの（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="366">調<span class="small">ととの（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="345">整<span class="small">ととの（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1963">諧<span class="small">ととの（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18601">齐<span class="small">ととの（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="680">均<span class="small">ととの（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1776">斉<span class="small">ととの（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6655">亝<span class="small">ととの（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6654">斊<span class="small">ととの（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3194">飭<span class="small">ととの（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5831">齊<span class="small">ととの（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14859">愸<span class="small">ととの（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="366">調<span class="small">ととの（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="345">整<span class="small">ととの（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21174">䄢<span class="small">ととの（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2711">椴<span class="small">とどまつ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="147">止<span class="small">とど（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="326">住<span class="small">とど（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5951">畄<span class="small">とど（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1827">亭<span class="small">とど（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="822">留<span class="small">とど（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9012">紥<span class="small">とど（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="572">停<span class="small">とど（まる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2615">逗<span class="small">とど（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4377">淹<span class="small">とど（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4757">紮<span class="small">とど（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10321">㽞<span class="small">とど（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4400">渟<span class="small">とど（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10320">畱<span class="small">とど（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2074">頓<span class="small">とど（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1503">駐<span class="small">とど（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="147">止<span class="small">とど（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11302">抅<span class="small">とど（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1400">拘<span class="small">とど（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5951">畄<span class="small">とど（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="822">留<span class="small">とど（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10321">㽞<span class="small">とど（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10320">畱<span class="small">とど（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="681">禁<span class="small">とど（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5522">遏<span class="small">とど（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1989">稽<span class="small">とど（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4469">輟<span class="small">とど（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6045">軣<span class="small">とどろ（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2423">轟<span class="small">とどろ（く）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">とな</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="13051">伨<span class="small">とな（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3532">徇<span class="small">とな（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16375">狥<span class="small">とな（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1142">称<span class="small">とな（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3109">倡<span class="small">とな（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="534">唱<span class="small">とな（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4968">誦<span class="small">とな（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6127">稱<span class="small">とな（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8159">誯<span class="small">とな（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10892">穪<span class="small">とな（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7969">厸<span class="small">となり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26968">邻<span class="small">となり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1306">隣<span class="small">となり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6333">鄰<span class="small">となり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7969">厸<span class="small">とな（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26968">邻<span class="small">とな（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1306">隣<span class="small">とな（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6333">鄰<span class="small">とな（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">とね</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="12064">梣<span class="small">とねりこ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">との</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1200">殿<span class="small">との</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1200">殿<span class="small">どの</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts21">
                    <h3 class="ttl_while">とは</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="593">飛<span class="small">と（ばす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7113">䧻<span class="small">どばと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3808">鴿<span class="small">どばと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="367">帳<span class="small">とばり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3489">帷<span class="small">とばり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3490">幄<span class="small">とばり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3491">幃<span class="small">とばり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3493">幎<span class="small">とばり</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts22">
                    <h3 class="ttl_while">とひ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2190">鳶<span class="small">とび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3802">鴟<span class="small">とび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3803">鵄<span class="small">とび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5695">鵈<span class="small">とび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4655">矼<span class="small">とびいし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5605">翊<span class="small">とびこ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5221">疱<span class="small">とびひ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1868">扉<span class="small">とびら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3971">闔<span class="small">とびら</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts23">
                    <h3 class="ttl_while">とふ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1189">沖<span class="small">と（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="593">飛<span class="small">と（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1085">軒<span class="small">と（ぶ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5606">翔<span class="small">と（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1190">跳<span class="small">と（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4069">蜚<span class="small">と（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2259">翰<span class="small">と（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4504">騫<span class="small">と（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23369">䮿<span class="small">と（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27299">㳰<span class="small">どぶ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1690">溝<span class="small">どぶ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4040">蚌<span class="small">どぶがい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22118">䖫<span class="small">どぶがい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9790">蜯<span class="small">どぶがい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4848">醪<span class="small">どぶろく</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts24">
                    <h3 class="ttl_while">とほ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3561">恍<span class="small">とぼ（ける）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2425">惚<span class="small">とぼ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="580">灯<span class="small">とぼし</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5673">燈<span class="small">とぼし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1562">乏<span class="small">とぼ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3206">匱<span class="small">とぼ（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="580">灯<span class="small">とぼ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13922">奌<span class="small">とぼ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="195">点<span class="small">とぼ（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5673">燈<span class="small">とぼ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5833">點<span class="small">とぼ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20543">㸃<span class="small">とぼ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1771">枢<span class="small">とぼそ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6006">樞<span class="small">とぼそ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13922">奌<span class="small">とぼ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="195">点<span class="small">とぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5833">點<span class="small">とぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20543">㸃<span class="small">とぼ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts25">
                    <h3 class="ttl_while">とま</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="2641">苫<span class="small">とま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4588">篷<span class="small">とま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="147">止<span class="small">と（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1227">泊<span class="small">と（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5951">畄<span class="small">と（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="822">留<span class="small">と（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="572">停<span class="small">と（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10321">㽞<span class="small">と（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15652">淿<span class="small">と（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10320">畱<span class="small">と（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4279">蹇<span class="small">と（まる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts26">
                    <h3 class="ttl_while">とみ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="5674">冨<span class="small">とみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="797">富<span class="small">とみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2074">頓<span class="small">とみ（に）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts27">
                    <h3 class="ttl_while">とむ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="5674">冨<span class="small">と（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="797">富<span class="small">と（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1818">弔<span class="small">とむら（う）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts28">
                    <h3 class="ttl_while">とめ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="147">止<span class="small">と（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1227">泊<span class="small">と（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5951">畄<span class="small">と（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="822">留<span class="small">と（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10321">㽞<span class="small">と（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15652">淿<span class="small">と（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4400">渟<span class="small">と（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10320">畱<span class="small">と（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5522">遏<span class="small">と（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts29">
                    <h3 class="ttl_while">とも</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="233">友<span class="small">とも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24194">㕛<span class="small">とも</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="485">共<span class="small">とも</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1532">伴<span class="small">とも</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="850">供<span class="small">とも</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2909">朋<span class="small">とも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24577">侣<span class="small">とも</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2125">侶<span class="small">とも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5747">舮<span class="small">とも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4886">舳<span class="small">とも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26329">舻<span class="small">とも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6348">靹<span class="small">とも</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1929">僚<span class="small">とも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5087">鞆<span class="small">とも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4897">艫<span class="small">とも</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2811">巴<span class="small">ともえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23803">侪<span class="small">ともがら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12652">俦<span class="small">ともがら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="578">徒<span class="small">ともがら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3114">們<span class="small">ともがら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11746">曺<span class="small">ともがら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12649">㑪<span class="small">ともがら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1802">曹<span class="small">ともがら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17889">軰<span class="small">ともがら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1225">輩<span class="small">ともがら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3139">儕<span class="small">ともがら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3140">儔<span class="small">ともがら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="580">灯<span class="small">ともし</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5673">燈<span class="small">ともし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="580">灯<span class="small">ともしび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4904">炬<span class="small">ともしび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12347">炷<span class="small">ともしび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4195">檠<span class="small">ともしび</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5673">燈<span class="small">ともしび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12269">㯳<span class="small">ともしび</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2591">燭<span class="small">ともしび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4195">檠<span class="small">ともしびたて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12269">㯳<span class="small">ともしびたて</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="580">灯<span class="small">とも（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5673">燈<span class="small">とも（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9155">䌫<span class="small">ともづな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4823">纜<span class="small">ともづな</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1532">伴<span class="small">ともな（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12376">仝<span class="small">とも（に）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="204">同<span class="small">とも（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2335">倶<span class="small">とも（に）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6431">俱<span class="small">とも（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3117">偕<span class="small">とも（に）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="580">灯<span class="small">とも（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13922">奌<span class="small">とも（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="195">点<span class="small">とも（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5673">燈<span class="small">とも（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5833">點<span class="small">とも（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20543">㸃<span class="small">とも（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2292">吃<span class="small">ども（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3228">吶<span class="small">ども（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13263">呐<span class="small">ども（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24196">㕯<span class="small">ども（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4951">訥<span class="small">ども（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4991">謇<span class="small">ども（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts30">
                    <h3 class="ttl_while">とや</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="24994">埘<span class="small">とや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3349">塒<span class="small">とや</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts31">
                    <h3 class="ttl_while">とよ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="808">豊<span class="small">とよ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6320">豐<span class="small">とよ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3250">哄<span class="small">どよ（めき）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7369">响<span class="small">どよ（めく）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1067">響<span class="small">どよ（めく）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6418">響<span class="small">どよ（めく）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts32">
                    <h3 class="ttl_while">とら</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="6042">乕<span class="small">とら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1996">虎<span class="small">とら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19276">㝙<span class="small">とら</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2162">寅<span class="small">とら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9746">虝<span class="small">とら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4709">錚<span class="small">どら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4729">鐃<span class="small">どら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4741">鑼<span class="small">どら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3679">拏<span class="small">と（らえる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1264">捕<span class="small">と（らえる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3678">拿<span class="small">と（らえる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27155">㧱<span class="small">と（らえる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1998">勾<span class="small">とら（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1721">囚<span class="small">とら（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14906">执<span class="small">とら（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11302">抅<span class="small">とら（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1400">拘<span class="small">とら（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2049">捉<span class="small">とら（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3326">圄<span class="small">とら（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1118">執<span class="small">とら（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1486">逮<span class="small">とら（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2332">禽<span class="small">とら（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4788">緝<span class="small">とら（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3725">擒<span class="small">とら（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17028">縘<span class="small">とら（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2354">繋<span class="small">とら（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6455">繫<span class="small">とら（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1264">捕<span class="small">と（らわれる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1721">囚<span class="small">とら（われる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts33">
                    <h3 class="ttl_while">とり</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2950">酉<span class="small">とり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8727">丣<span class="small">とり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5677">隹<span class="small">とり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="192">鳥<span class="small">とり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2332">禽<span class="small">とり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7158">雞<span class="small">とり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1381">鶏<span class="small">とり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5672">鷄<span class="small">とり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27748">𪆐<span class="small">とり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5585">罕<span class="small">とりあみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9171">䍐<span class="small">とりあみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24904">啬<span class="small">とりい（れ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3287">嗇<span class="small">とりい（れ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25932">穑<span class="small">とりい（れ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5562">穡<span class="small">とりい（れ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25934">穯<span class="small">とりい（れ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26382">获<span class="small">とりい（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25932">穑<span class="small">とりい（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1343">穫<span class="small">とりい（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5562">穡<span class="small">とりい（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25934">穯<span class="small">とりい（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4175">樊<span class="small">とりかご</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5378">菫<span class="small">とりかぶと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9501">蓳<span class="small">とりかぶと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26527">虏<span class="small">とりこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3094">俘<span class="small">とりこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1927">虜<span class="small">とりこ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6363">虜<span class="small">とりこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3725">擒<span class="small">とりこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1634">轄<span class="small">とりし（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5598">羈<span class="small">とりし（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6311">覊<span class="small">とりし（まる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2290">鞠<span class="small">とりしら（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23126">䪕<span class="small">とりしら（べる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2011">柵<span class="small">とりで</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11991">栅<span class="small">とりで</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2445">砦<span class="small">とりで</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1933">塁<span class="small">とりで</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3347">堡<span class="small">とりで</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13785">堢<span class="small">とりで</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2009">塞<span class="small">とりで</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4160">寨<span class="small">とりで</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6155">壘<span class="small">とりで</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19097">㙼<span class="small">とりで</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16960">粚<span class="small">とりもち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3761">黐<span class="small">とりもち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="583">特<span class="small">とりわ（け）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts34">
                    <h3 class="ttl_while">とる</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3517">弋<span class="small">と（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14906">执<span class="small">と（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1853">把<span class="small">と（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="318">取<span class="small">と（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1160">征<span class="small">と（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2008">采<span class="small">と（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5549">秉<span class="small">と（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3094">俘<span class="small">と（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1264">捕<span class="small">と（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2049">捉<span class="small">と（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2086">剥<span class="small">と（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="6467">剝<span class="small">と（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25280">挚<span class="small">と（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25291">捞<span class="small">と（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27839">𢭐<span class="small">と（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="706">採<span class="small">と（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1118">執<span class="small">と（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1209">盗<span class="small">と（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3699">捫<span class="small">と（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6040">盜<span class="small">と（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1471">摂<span class="small">と（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3711">搦<span class="small">と（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3715">搏<span class="small">と（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14788">徰<span class="small">と（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25336">摄<span class="small">と（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3709">搴<span class="small">と（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14994">搻<span class="small">と（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1420">撮<span class="small">と（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2016">摯<span class="small">と（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3724">撈<span class="small">と（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11254">㩃<span class="small">と（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11499">撡<span class="small">と（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="931">操<span class="small">と（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6509">篡<span class="small">と（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3215">簒<span class="small">と（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6191">攝<span class="small">と（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3746">攬<span class="small">と（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2886">弗<span class="small">ドル</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts35">
                    <h3 class="ttl_while">とろ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="2585">瀞<span class="small">とろ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1834">泥<span class="small">どろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4387">淤<span class="small">どろ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1517">塗<span class="small">どろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25597">澝<span class="small">どろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4440">濘<span class="small">どろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5579">觜<span class="small">とろきぼし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2799">蕩<span class="small">とろ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5569">盪<span class="small">とろ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5570">蘯<span class="small">とろ（ける）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts36">
                    <h3 class="ttl_while">とん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="1847">屯<span class="small">トン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2076">丼<span class="small">トン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="770">団<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12392">伅<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14905">扥<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15420">氽<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2805">呑<span class="small">トン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2808">沌<span class="small">トン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6433">吞<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9394">芚<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11040">忳<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11292">扽<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13243">吨<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13606">囤<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13657">坉<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13949">妉<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14615">帎<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14667">庉<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18884">㕪<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19134">㚮<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20628">㹠<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15088">旽<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15461">沊<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16022">炖<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19559">㢯<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20253">㱽<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24288">䏙<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16576">瓭<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17535">衴<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25851">砘<span class="small">トン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="904">純<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15597">涒<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17917">逇<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18920">㖔<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19794">㧷<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20186">㰫<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20751">㼊<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26836">趸<span class="small">トン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1523">豚<span class="small">トン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2535">惇<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8256">豘<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12358">啍<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14740">弴<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15635">淟<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17639">訰<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17877">軘<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19327">㞘<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20981">䀫<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22826">䤜<span class="small">トン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1220">鈍<span class="small">トン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2807">敦<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11114">㥫<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11851">朜<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13091">傝<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14120">媅<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14489">崸<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16105">焞<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19257">㝄<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19480">㡒<span class="small">トン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2074">頓<span class="small">トン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2531">遁<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5278">飩<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11563">㪟<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13099">僋<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20394">㴷<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20811">㽎<span class="small">トン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6148">團<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10328">畽<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13480">嗿<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17453">蜳<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18335">馾<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20405">㵅<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24948">嗵<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5058">褪<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5527">遯<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6901">魨<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13526">噋<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13859">墩<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13860">墪<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15030">撴<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15841">潡<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23993">撢<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24312">䔻<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25783">獤<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3930">暾<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4930">燉<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7701">錪<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11852">㬿<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15021">撉<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15279">橔<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15894">澸<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16333">犜<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17840">踲<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18229">霕<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18578">黗<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19859">㩔<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21847">䐺<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23550">䳉<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17593">襑<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21133">䃦<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25904">礅<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20142">㯯<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23177">䫖<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8449">躉<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21446">䉞<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26861">蹾<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18525">鶨<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23642">䵍<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24157">醷<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20464">㶒<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23111">䪃<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23673">䵯<span class="small">トン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18385">驐<span class="small">トン</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4867">瓲<span class="small">トン</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="417">問<span class="small">とん</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2806">噸<span class="small">トン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="580">灯<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2805">呑<span class="small">ドン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6433">吞<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13243">吨<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13606">囤<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13657">坉<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24975">坛<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20480">㶧<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25851">砘<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17917">逇<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20751">㼊<span class="small">ドン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2075">貪<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17639">訰<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17877">軘<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22826">䤜<span class="small">ドン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1220">鈍<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13410">啿<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14121">媆<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14489">崸<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15662">渜<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5278">飩<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21107">䂿<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21284">䆦<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3405">嫩<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14197">嫰<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19221">㜛<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4784">緞<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5527">遯<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9093">縀<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13864">墰<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13868">墵<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19229">㜤<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20118">㯎<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23912">嘾<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23993">撢<span class="small">ドン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1221">曇<span class="small">ドン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5673">燈<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14232">嬜<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18229">霕<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19859">㩔<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21847">䐺<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20813">㽑<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23031">䨢<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17375">藫<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21512">䊤<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3356">壜<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18236">霮<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18525">鶨<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18574">黁<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3974">罎<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19502">㡪<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23045">䨵<span class="small">ドン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22821">䤗<span class="small">ドン</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2076">丼<span class="small">どん</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10461">皁<span class="small">どんぐり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10462">皂<span class="small">どんぐり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4015">杼<span class="small">どんぐり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2190">鳶<span class="small">とんび</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2076">丼<span class="small">どんぶり</span></a></li>
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