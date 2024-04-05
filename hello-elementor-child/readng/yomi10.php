<?php
/*
 * Template Name: Yomi10
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
               <h1 class="ttl_main">音訓検索「こ」</h1>
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
               <p>「こ」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>こ</option>
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
                         <li id="parts1_menu"><a href="#parts1">こ</a></li>
                         <li id="parts2_menu"><a href="#parts2">こい</a></li>
                         <li id="parts3_menu"><a href="#parts3">こう</a></li>
                         <li id="parts4_menu"><a href="#parts4">こえ</a></li>
                         <li id="parts5_menu"><a href="#parts5">こお</a></li>
                         <li id="parts6_menu"><a href="#parts6">こか</a></li>
                         <li id="parts7_menu"><a href="#parts7">こき</a></li>
                         <li id="parts8_menu"><a href="#parts8">こく</a></li>
                         <li id="parts9_menu"><a href="#parts9">こけ</a></li>
                         <li id="parts10_menu"><a href="#parts10">ここ</a></li>
                         <li id="parts11_menu"><a href="#parts11">こさ</a></li>
                         <li id="parts12_menu"><a href="#parts12">こし</a></li>
                         <li id="parts13_menu"><a href="#parts13">こす</a></li>
                         <li id="parts14_menu"><a href="#parts14">こせ</a></li>
                         <li id="parts15_menu"><a href="#parts15">こそ</a></li>
                         <li id="parts16_menu"><a href="#parts16">こた</a></li>
                         <li id="parts17_menu"><a href="#parts17">こち</a></li>
                         <li id="parts18_menu"><a href="#parts18">こつ</a></li>
                         <li id="parts19_menu"><a href="#parts19">こて</a></li>
                         <li id="parts20_menu"><a href="#parts20">こと</a></li>
                         <li id="parts21_menu"><a href="#parts21">こな</a></li>
                         <li id="parts22_menu"><a href="#parts22">こね</a></li>
                         <li id="parts23_menu"><a href="#parts23">この</a></li>
                         <li id="parts24_menu"><a href="#parts24">こは</a></li>
                         <li id="parts25_menu"><a href="#parts25">こひ</a></li>
                         <li id="parts26_menu"><a href="#parts26">こふ</a></li>
                         <li id="parts27_menu"><a href="#parts27">こほ</a></li>
                         <li id="parts28_menu"><a href="#parts28">こま</a></li>
                         <li id="parts29_menu"><a href="#parts29">こみ</a></li>
                         <li id="parts30_menu"><a href="#parts30">こむ</a></li>
                         <li id="parts31_menu"><a href="#parts31">こめ</a></li>
                         <li id="parts32_menu"><a href="#parts32">こも</a></li>
                         <li id="parts33_menu"><a href="#parts33">こや</a></li>
                         <li id="parts34_menu"><a href="#parts34">こよ</a></li>
                         <li id="parts35_menu"><a href="#parts35">こら</a></li>
                         <li id="parts36_menu"><a href="#parts36">こり</a></li>
                         <li id="parts37_menu"><a href="#parts37">こる</a></li>
                         <li id="parts38_menu"><a href="#parts38">これ</a></li>
                         <li id="parts39_menu"><a href="#parts39">ころ</a></li>
                         <li id="parts40_menu"><a href="#parts40">こわ</a></li>
                         <li id="parts41_menu"><a href="#parts41">こん</a></li>
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
                    <h3 class="ttl_while">こ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="864">己<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5659">个<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24544">亇<span class="small">コ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="006">火<span class="small">コ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="122">戸<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11233">戶<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11234">户<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13894">夃<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19447">㠪<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20572">㸦<span class="small">コ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="121">古<span class="small">コ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="273">去<span class="small">コ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1061">巨<span class="small">コ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2374">乎<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12724">凥<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13206">厺<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3160">冱<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3364">夸<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6033">虍<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9370">芐<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23992">扝<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24107">芌<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3076">估<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4006">杞<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4324">沍<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6042">乕<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14614">帍<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15452">汻<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18855">㕆<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21764">䏏<span class="small">コ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="499">固<span class="small">コ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="678">居<span class="small">コ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="865">呼<span class="small">コ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1060">拠<span class="small">コ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1995">股<span class="small">コ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1996">虎<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2377">姑<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3173">刳<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3546">怙<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4334">沽<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11238">戽<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11630">昈<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11959">枑<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13287">呿<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13299">咕<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13694">垀<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14417">岵<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15494">泘<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16371">狜<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17218">苸<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19269">㝒<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19757">㦿<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21930">䒧<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22739">䢹<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24203">㚉<span class="small">コ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="694">故<span class="small">コ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1091">枯<span class="small">コ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1393">弧<span class="small">コ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1394">孤<span class="small">コ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2168">胡<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2378">狐<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3236">呱<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4904">炬<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9406">苽<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10960">怘<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11061">恗<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14933">挎<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15094">昛<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15552">洿<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16304">牯<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17945">郀<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19759">㧁<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20035">㭔<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20036">㭕<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20228">㱠<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24012">泒<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24793">哌<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25616">烀<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25836">眍<span class="small">コ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="292">庫<span class="small">コ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="693">個<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3102">倨<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3162">凅<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4225">胯<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5589">罟<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5921">桍<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6109">柧<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8087">訏<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9202">羖<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10786">祜<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11779">胍<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16577">瓳<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16811">秙<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17811">趶<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18788">㓬<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20188">㰭<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20845">㽽<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20848">㾀<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21328">䇘<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21532">䊺<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21538">䋀<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25022">壶<span class="small">コ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="677">許<span class="small">コ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1371">虚<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2376">壷<span class="small">コ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2382">袴<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3654">扈<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4043">蛄<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4381">涸<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9172">罛<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9504">菇<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9749">虗<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9750">虖<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13776">堌<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14092">婟<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14102">婮<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14465">崌<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14470">崓<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15615">涺<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15645">淲<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16985">紶<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17264">萀<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17432">蛊<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19798">㧽<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21338">䇢<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21476">䉿<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21477">䊀<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21696">䎁<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21968">䓢<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24258">㼋<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25131">崮<span class="small">コ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="291">湖<span class="small">コ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1391">雇<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2375">壺<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2381">菰<span class="small">コ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4620">琥<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4955">詁<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4974">瓠<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5317">辜<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5887">葫<span class="small">コ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6458">虛<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8735">酤<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8829">笟<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9030">絝<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9746">虝<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12092">棝<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12135">楛<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13424">喖<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14151">媩<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16125">焸<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16128">焽<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16410">猢<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17815">跍<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17882">軤<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17890">軲<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18961">㗅<span class="small">コ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1089">誇<span class="small">コ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1090">鼓<span class="small">コ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2379">瑚<span class="small">コ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2383">跨<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2385">鈷<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5233">痼<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5482">賈<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5578">觚<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5870">楜<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6620">鼔<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8488">軱<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10799">祻<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16164">煳<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16609">瘔<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16829">稒<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17006">綔<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18224">雽<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21216">䅕<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21663">䍛<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22996">䧸<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24161">頋<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24944">嗰<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27791">𠹭<span class="small">コ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1028">箇<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4417">滬<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4418">滸<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4541">箍<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5832">皷<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7976">僱<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8697">鄠<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8831">箎<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11301">㩀<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13495">嘑<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14194">嫭<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14195">嫮<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15002">摢<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15779">滹<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16574">瓡<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17337">蔰<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18016">鈲<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18211">雐<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19715">㦆<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19834">㨭<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20891">㾰<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22002">䔓<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22134">䗂<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24222">㨿<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26333">艍<span class="small">コ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2380">糊<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4080">蝴<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4271">踞<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6789">骷<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7091">鳸<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8830">箛<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8850">箶<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9990">衚<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10059">褲<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12203">槴<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14199">嫴<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14656">幠<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14876">憈<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15353">歑<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16198">熩<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17965">鄦<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18422">魱<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19421">㠊<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22023">䔯<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22374">䛯<span class="small">コ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1997">錮<span class="small">コ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2384">醐<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3806">鴣<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5873">據<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10510">䀇<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11903">膴<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14250">嬳<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15288">橭<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16683">瞘<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16926">篧<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17360">薣<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18428">鮕<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20128">㯛<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21848">䐻<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22608">䠒<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23609">䴣<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24035">濩<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6931">鮬<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8883">簄<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10745">磲<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11914">臌<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18084">鍸<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18487">鴮<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23027">䨞<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24357">䭅<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25831">皼<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5175">瞽<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5288">餬<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17707">謼<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18585">鼁<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21432">䉐<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23097">䩴<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23271">䭌<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23272">䭍<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23449">䰧<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6841">鬍<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6976">鯝<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10513">盬<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21425">䉉<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21447">䉟<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7124">鶘<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18449">鰗<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18523">鶦<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23648">䵕<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23704">䶙<span class="small">コ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1392">顧<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8034">䨼<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7334">韄<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24390">頀<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4113">蠱<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7335">䪝<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7074">鱯<span class="small">コ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27813">𣡾<span class="small">コ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="027">子<span class="small">こ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="037">小<span class="small">こ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="073">木<span class="small">こ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2461">仔<span class="small">こ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19251">㜽<span class="small">こ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="525">児<span class="small">こ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2285">妓<span class="small">こ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5806">兒<span class="small">こ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="604">粉<span class="small">こ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="883">蚕<span class="small">こ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1283">娘<span class="small">こ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="132">黄<span class="small">こ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6466">黃<span class="small">こ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9777">蝅<span class="small">こ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22157">䗞<span class="small">こ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9778">蠺<span class="small">こ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6304">蠶<span class="small">こ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18638">㐅<span class="small">ゴ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="019">五<span class="small">ゴ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="108">牛<span class="small">ゴ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="124">午<span class="small">ゴ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1093">互<span class="small">ゴ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="869">后<span class="small">ゴ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2386">伍<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3160">冱<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12387">仵<span class="small">ゴ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1681">呉<span class="small">ゴ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2387">冴<span class="small">ゴ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2388">吾<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3540">忤<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4324">沍<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13249">吳<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13250">吴<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18855">㕆<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21920">䒜<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25270">护<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8564">迕<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11085">忢<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11631">旿<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14000">姖<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15546">洰<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16478">玝<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20016">㬳<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22739">䢹<span class="small">ゴ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="125">後<span class="small">ゴ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2168">胡<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12471">俉<span class="small">ゴ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1395">悟<span class="small">ゴ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1396">娯<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3259">唔<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3326">圄<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5359">茣<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8655">郚<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11086">悞<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11338">捂<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14042">娛<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14052">娪<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14058">娱<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14458">峿<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14836">悮<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15529">洖<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15572">浯<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16577">瓳<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20644">㹳<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21328">䇘<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21532">䊺<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21538">䋀<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21951">䓊<span class="small">ゴ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2389">梧<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3327">圉<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3917">晤<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4831">牾<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6257">珸<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13394">啎<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15642">淭<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17246">菃<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17919">逜<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20716">㻍<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21476">䉿<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21696">䎁<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25630">焐<span class="small">ゴ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="267">期<span class="small">ゴ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1063">御<span class="small">ゴ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1360">棋<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3038">棊<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13424">喖<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14151">媩<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16788">祦<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17284">葔<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17961">鄇<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18961">㗅<span class="small">ゴ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1682">碁<span class="small">ゴ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2379">瑚<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4061">蜈<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17006">綔<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21743">䎸<span class="small">ゴ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="123">語<span class="small">ゴ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="866">誤<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3433">寤<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10806">禑<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14194">嫭<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14195">嫮<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15002">摢<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17337">蔰<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19834">㨭<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20891">㾰<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21061">䂉<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22015">䔡<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22236">䙈<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4549">篌<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7643">鋘<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7649">鋙<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12883">勮<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16198">熩<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17322">蓹<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18422">魱<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19575">㣄<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22149">䗔<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22922">䦜<span class="small">ゴ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2384">醐<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8617">遻<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10929">窹<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14250">嬳<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15288">橭<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15898">澽<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16926">篧<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20128">㯛<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20138">㯦<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21034">䁩<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22197">䘘<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22608">䠒<span class="small">ゴ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2329">檎<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17094">翵<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17492">螶<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18084">鍸<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18430">鮜<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20140">㯫<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22164">䗨<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23174">䫓<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23325">䮏<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26582">謢<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4558">麌<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12087">檱<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17505">蟝<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18435">鯃<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21303">䆽<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23097">䩴<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23181">䫛<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23272">䭍<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9715">蘁<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21425">䉉<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21447">䉟<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22460">䝣<span class="small">ゴ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="695">護<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6630">鼯<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13169">匷<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17385">蘌<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18523">鶦<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22545">䟊<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22870">䥏<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23704">䶙<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24315">䕶<span class="small">ゴ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3771">齬<span class="small">ゴ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">こい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1314">恋<span class="small">こい</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2972">鯉<span class="small">こい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5828">戀<span class="small">こい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25527">浓<span class="small">こ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2142">渥<span class="small">こ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5559">稠<span class="small">こ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1224">濃<span class="small">こ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10766">䃯<span class="small">こいし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4680">礫<span class="small">こいし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1314">恋<span class="small">こい（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5828">戀<span class="small">こい（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="473">希<span class="small">こいねが（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19459">㠻<span class="small">こいねが（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1737">庶<span class="small">こいねが（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23979">庻<span class="small">こいねが（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1051">幾<span class="small">こいねが（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19504">㡬<span class="small">こいねが（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12692">兾<span class="small">こいねが（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3151">冀<span class="small">こいねが（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5459">覦<span class="small">こいねが（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5462">覬<span class="small">こいねが（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12692">兾<span class="small">こいねが（わくは）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3151">冀<span class="small">こいねが（わくは）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">こう</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="6586">丂<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="020">口<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="128">工<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="130">公<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1398">孔<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1998">勾<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3063">亢<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6029">爻<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11766">厷<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13004">卝<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20301">㲸<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="126">広<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="296">号<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="501">功<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="682">句<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1397">甲<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1404">巧<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2028">尻<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2344">弘<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2394">叩<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9361">艽<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12377">仜<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12734">㓛<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13125">冮<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13910">夯<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13911">夰<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18780">㓚<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="127">交<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="129">光<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="131">考<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="133">行<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="135">合<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="294">向<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="502">好<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="869">后<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1072">仰<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1686">江<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2390">亙<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2391">亘<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3074">伉<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3657">扛<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3658">扣<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6195">攷<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6720">巟<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11764">肎<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12677">灮<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12773">刚<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12822">劥<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12953">匟<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13120">兴<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13224">叿<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13647">圶<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13914">夹<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13946">妅<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14381">屸<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15998">灱<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15999">灲<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19124">㚣<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19318">㞍<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19446">㠩<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19454">㠵<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19579">㣉<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24973">圹<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25029">夼<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25770">犷<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26963">邝<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="505">告<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="867">孝<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1094">更<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1096">抗<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1097">攻<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1405">坑<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2311">亨<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2315">劫<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2395">宏<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3077">佝<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3204">匣<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3223">吽<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3225">吭<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3226">吼<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3365">夾<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4005">杠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4212">肛<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4214">肓<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4319">汞<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5859">皀<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6060">刧<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7913">阬<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7930">夅<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8635">邟<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9388">芤<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10342">㽲<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11034">忼<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11302">抅<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12824">刦<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13246">吰<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13254">吿<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13607">囥<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13957">妔<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14768">彶<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15445">汯<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15458">沆<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15472">沟<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16001">灴<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16350">犺<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16352">犼<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16477">玒<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17205">芶<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17206">苀<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18756">㒶<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18854">㕅<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18886">㕬<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18891">㕲<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19037">㘪<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19130">㚪<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19455">㠷<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19557">㢬<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19623">㤊<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19961">㫕<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19962">㫗<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20025">㭃<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20838">㽱<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20920">㿝<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21921">䒝<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23927">坈<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24190">㔰<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24208">㞷<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25110">岗<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25236">怄<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25266">抠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25357">旷<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25450">毜<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26414">㒷<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27130">㧏<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="293">幸<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="696">効<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1400">拘<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1684">肯<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1904">岬<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1955">岡<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2321">怯<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2337">狗<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2392">佼<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2398">庚<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2399">昂<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2401">杭<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2409">肴<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2410">肱<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3234">咎<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3237">呷<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3904">杲<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3905">昊<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4655">矼<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5103">狎<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5333">苟<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5960">怐<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8565">迒<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10122">玜<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10267">瓨<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10347">疘<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11598">斻<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11765">肻<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11768">肮<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11960">构<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12443">侊<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12444">佷<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12445">佮<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12678">炗<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12679">炛<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12825">刼<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12833">劶<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12939">匌<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12973">匼<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13127">冾<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13147">刯<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13188">厒<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13282">呴<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13285">呺<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13287">呿<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13687">坸<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13921">奋<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14293">宖<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14405">岣<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16021">炕<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16024">炚<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16298">牨<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16977">糼<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17215">苰<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18784">㓣<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18824">㔚<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18858">㕉<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18898">㕺<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18900">㕼<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19028">㘡<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19112">㚔<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19114">㚖<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19147">㚼<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19148">㚽<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19253">㝀<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19355">㞻<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19630">㤒<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20177">㰠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20179">㰢<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21773">䏜<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25848">矿<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27210">㭎<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="125">後<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="701">厚<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="868">皇<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="870">紅<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1069">狭<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1095">荒<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1099">香<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1100">恒<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1401">郊<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1685">洪<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1689">侯<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1692">拷<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2083">虹<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2248">恰<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2336">垢<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2396">巷<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3249">咬<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3250">哄<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3251">哈<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3561">恍<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3927">昿<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3975">缸<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4029">枸<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4219">胛<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4343">洸<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4344">洽<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5106">狡<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5953">畊<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5962">恆<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6080">峇<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6487">姮<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8083">訇<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8646">郃<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9223">羾<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9248">耇<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9325">舡<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9432">茭<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9433">荇<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9435">茩<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9436">茳<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9976">衁<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10130">玽<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10268">㼚<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10309">㽘<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10504">盇<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10830">秔<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10831">秏<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10941">竑<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11070">㤚<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11071">恔<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11323">挄<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11324">挍<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11544">敂<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11632">昻<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11633">昦<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11744">㪅<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11990">柙<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12472">矦<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12473">侾<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13161">勂<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13305">咣<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13323">哅<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13704">垕<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13708">垙<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13715">垥<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13720">垬<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14005">姠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14008">姣<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14009">姤<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14013">姯<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14026">娂<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14421">峆<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14437">峘<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14625">帢<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14926">拹<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14933">挎<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15076">斪<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15519">洉<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15524">洐<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15530">洘<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15541">洨<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16026">炠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16488">玾<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16715">砊<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17097">耉<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17222">茠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17224">茪<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17944">邼<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18763">㓂<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18906">㖃<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19118">㚚<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19270">㝓<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19467">㡃<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19470">㡆<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19594">㣜<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19626">㤍<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19645">㤧<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19646">㤨<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19759">㧁<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19781">㧦<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19965">㫛<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20843">㽺<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21073">䂚<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21269">䆖<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21471">䉺<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21657">䍔<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21776">䏠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21935">䒰<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21938">䒵<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22953">䧆<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23891">佭<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23897">叝<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25125">峧<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25512">泶<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25614">炾<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25836">眍<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26969">郏<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="021">校<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="134">高<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="500">候<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="503">航<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="663">格<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="700">耕<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="872">降<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1687">貢<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1691">剛<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1907">耗<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1991">桁<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2393">倖<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2400">晃<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2402">浩<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2404">皋<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2405">砿<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2407">紘<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3105">倥<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3155">冓<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3260">哽<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3261">哮<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4042">蚣<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4116">栲<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4224">胱<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4855">耿<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4908">烋<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4947">訌<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5126">羔<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5505">逅<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5564">盍<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5771">冦<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5897">浤<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6198">效<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6206">晄<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6252">狹<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8244">豇<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8656">郜<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8657">郟<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8658">郠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8729">酐<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8786">笐<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8978">粇<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9173">罡<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9224">翃<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9277">耾<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9434">莕<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9469">莄<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9747">虓<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10142">珩<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10143">珖<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10144">珓<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10528">眗<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10910">窌<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11087">悎<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11339">捁<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11340">挭<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11672">晎<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11801">胻<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11802">胶<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11803">㬵<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12028">桄<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12469">㑨<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12505">倄<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12569">俲<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12851">欱<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13346">哼<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13356">唊<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13732">埂<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13737">埉<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14041">娙<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14302">宯<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14305">宺<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14306">宼<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14452">峵<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14456">峼<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14683">庨<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14824">恏<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14833">悙<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14940">挳<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15056">敆<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15531">洚<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15571">浭<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15594">涍<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16045">烄<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16047">烆<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16062">烘<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16068">烡<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16071">烤<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16503">珨<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16590">畕<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16650">眖<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16873">笅<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17068">羙<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17425">蚢<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17552">袧<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18919">㖓<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19793">㧶<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19900">㪉<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20017">㬴<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20037">㭘<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20589">㸸<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20643">㹲<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20645">㹴<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20818">㽛<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20848">㾀<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21539">䋁<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21540">䋂<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21694">䍿<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21739">䎴<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22195">䘕<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22206">䘥<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22415">䜫<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22493">䞑<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22709">䢒<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22956">䧊<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23901">哠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24216">㤺<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24339">䢔<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25538">涥<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25857">硁<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27299">㳰<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27860">𣑥<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="132">黄<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="504">康<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1399">控<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1999">梗<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2193">凰<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2403">皐<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2414">袷<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2415">釦<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3430">寇<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3918">晧<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4384">淆<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5467">皎<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5908">絋<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6054">啌<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6084">崗<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6263">盖<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6813">髙<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7532">釭<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8042">覐<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8093">訤<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8236">谹<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8496">䡈<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8792">笱<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9011">紭<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9227">翈<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9249">耈<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9328">舺<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10544">䀪<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10669">硄<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10793">祫<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11102">悾<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11103">悻<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11368">掆<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11369">掐<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11370">掯<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11816">脝<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12029">栙<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12533">偟<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13374">唬<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13378">唴<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13390">啈<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13756">埪<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13774">堈<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13904">够<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13905">夠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13924">奛<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13928">奟<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14074">婋<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14091">婞<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14461">崆<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14477">崤<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15073">斍<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15139">朚<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15361">殎<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15610">涳<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15626">淏<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16093">焅<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16312">牼<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16394">猇<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16730">硍<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16819">秴<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16881">笚<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17146">脥<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17261">菮<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17429">蚼<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17758">貥<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17875">軖<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17953">郩<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19178">㛨<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19387">㟠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19474">㡊<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19649">㤮<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20018">㬶<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20055">㭱<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20190">㰯<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20191">㰰<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20351">㳾<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20491">㶹<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20650">㹹<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20773">㼥<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20978">䀧<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20981">䀫<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21089">䂪<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21091">䂭<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21277">䆟<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21882">䑦<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21959">䓘<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22208">䘨<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22297">䚗<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22329">䚽<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22559">䟘<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22652">䡉<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22655">䡌<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22715">䢚<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24085">祮<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24113">菒<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24225">㫴<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24256">㺃<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24320">䖎<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25859">硔<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25860">硖<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26274">羟<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="295">港<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="461">覚<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1101">項<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1402">硬<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1406">慌<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1407">絞<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2000">喉<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2341">鈎<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2345">腔<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2413">蛤<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3033">葢<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3125">傚<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3535">徨<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3588">惶<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4054">蛟<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4760">絖<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4761">絎<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5115">猴<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5192">隍<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5468">皓<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5617">窖<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6214">棡<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6215">椌<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6234">湟<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6466">黃<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7550">鈜<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7551">鈧<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7869">閎<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7870">閌<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7948">陿<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8126">訽<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8809">筕<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8810">筊<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8956">粠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8960">稉<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9027">絙<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9086">絚<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9158">缿<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9263">耠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9542">葟<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9543">葒<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9544">葓<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10034">裌<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10466">臯<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10562">䀹<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10680">硤<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10681">硜<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10682">硡<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10683">硣<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11399">揈<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11410">揁<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11574">敩<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12093">椃<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12570">傐<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12772">㓻<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12938">殽<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13431">喤<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13784">堠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13790">堩<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13793">堭<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13802">堼<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14133">媓<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14483">崲<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14636">帿<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14968">揘<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14976">揯<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15668">渱<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15672">渹<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15682">湆<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15683">湇<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16107">焢<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16123">焵<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16316">犅<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16419">猲<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16602">痚<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16790">祰<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16825">稁<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16853">窛<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16865">竤<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16893">筘<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17284">葔<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17529">衖<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17557">袶<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17735">豞<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17746">豿<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17883">軥<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17884">軦<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17961">鄇<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18209">雃<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18863">㕎<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18966">㗋<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18969">㗐<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20064">㭿<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20066">㮁<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20255">㲁<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20366">㴔<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20562">㸜<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20661">㺅<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20821">㽠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20870">㾘<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20989">䀴<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20990">䀶<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20991">䀷<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21090">䂫<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21649">䍊<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21982">䓷<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22122">䖱<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22337">䛅<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22469">䝭<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22657">䡏<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22910">䦎<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23068">䩑<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23137">䪦<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23208">䫹<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23858">搅<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23894">傋<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24092">窙<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24116">萫<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24118">葁<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24209">㟟<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24212">㡛<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25003">塂<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25004">塃<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25134">嵘<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25335">搄<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25400">椩<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25644">焿<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27161">㨘<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="699">鉱<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1035">較<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1690">溝<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1965">蓋<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2238">塙<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2340">鉤<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2397">幌<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3037">堽<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3399">媾<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3710">搆<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3944">閘<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4404">滉<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4412">溘<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4759">絳<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4917">煌<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4961">詬<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5134">頏<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5266">粳<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5390">蒿<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5523">遑<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6302">號<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6814">䯨<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7569">鉀<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7979">雊<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8066">觥<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8127">詥<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8128">詤<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8238">谼<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8384">跤<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8385">跲<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8686">鄗<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8820">筪<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9045">綋<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9046">綆<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9580">䔈<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10187">瑝<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10467">賋<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10688">硿<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11154">愰<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11273">摃<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11417">搕<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11422">搞<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12136">楻<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13151">剾<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13446">嗃<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13450">嗊<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13451">嗋<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13457">嗑<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13468">嗥<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14521">嵤<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14526">嵪<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14641">幊<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14643">幍<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14697">廅<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14745">彀<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14855">愩<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15063">敮<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15241">榙<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15348">歁<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15741">溬<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15759">滈<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15770">滜<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16161">煰<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16431">獆<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16750">碙<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16900">筶<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17071">羥<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17087">翝<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17114">聕<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17649">詨<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17894">輄<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18024">鉣<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18224">雽<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18972">㗕<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19070">㙝<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19208">㜌<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19258">㝅<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19285">㝤<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19403">㟵<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19405">㟸<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19488">㡚<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19705">㥺<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19993">㬋<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20021">㬻<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20077">㮓<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20201">㰻<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20401">㵁<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20780">㼬<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20881">㾣<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20882">㾤<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21224">䅝<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21343">䇨<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21706">䎋<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21825">䐠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21997">䔌<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22101">䖖<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22298">䚘<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22514">䞧<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22515">䞩<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22664">䡖<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22742">䢽<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22970">䧚<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23209">䫺<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24947">嗴<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25362">暅<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25576">滧<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25930">稥<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25950">筻<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="698">構<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1102">豪<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1403">綱<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1408">酵<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2411">膏<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2416">閤<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3383">嫦<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3608">慷<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3719">摎<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3789">敲<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3957">閧<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4156">槓<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4157">槁<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4540">箜<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4835">犒<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4920">熕<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4971">誥<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5163">睾<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5526">遘<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6496">槔<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6787">骯<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6887">魟<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7113">䧻<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7291">鞃<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7622">鉸<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7623">鉿<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7624">銗<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7625">銧<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7626">鉷<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8144">誙<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8145">誟<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8246">䜶<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8392">踁<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8393">踍<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9611">蔲<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9755">虠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10399">㾮<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10400">瘊<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10479">暤<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10580">睺<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10863">䅣<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11445">摳<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11565">㪣<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11712">暠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12176">槀<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12177">榥<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12178">榼<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12610">僙<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13489">嘋<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13494">嘐<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13529">噑<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14182">嫝<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14537">嵻<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14747">彄<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14872">慪<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15106">暞<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15797">漖<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15813">漮<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15825">潂<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16166">煹<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16171">熀<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16176">熆<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16177">熇<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16440">獔<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17057">罁<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17072">羫<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17088">翞<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17183">臦<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17823">跭<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18040">銬<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18982">㗢<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19289">㝩<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20406">㵆<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20664">㺉<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20672">㺒<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20793">㼹<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21011">䁍<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21061">䂉<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21163">䄓<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21232">䅨<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21288">䆪<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21824">䐟<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21830">䐦<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21831">䐧<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22236">䙈<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22753">䣈<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23015">䨐<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23152">䪷<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23155">䪺<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23157">䪽<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23256">䬲<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23525">䲨<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24079">硻<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24953">嘦<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25254">慐<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25580">滱<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="253">横<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1098">稿<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2242">撹<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3720">撓<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4083">蝗<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4171">槹<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4247">膠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4548">篁<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4549">篌<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5281">餃<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5363">靠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6129">稾<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6175">廣<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6278">羮<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6815">髛<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6894">魧<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7300">鞈<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7384">頜<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7653">鋐<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7999">霅<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8156">諕<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8240">谾<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8303">賡<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8851">篊<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8969">糇<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9084">緱<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9085">緪<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9342">艎<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10060">褠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10473">皝<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10474">皜<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10476">皞<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10478">暭<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10590">瞌<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10721">碻<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10723">碽<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13514">嘷<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13523">噈<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13528">噏<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13850">墝<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13867">墴<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14214">嬆<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15010">摮<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15014">摼<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15017">撀<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15023">撔<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15025">撗<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15260">槺<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15842">潢<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15867">澋<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15871">澒<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15873">澔<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16435">獋<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16444">獚<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16679">瞉<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16797">禞<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17092">翭<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17666">誵<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18042">銵<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18043">銾<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18051">鋛<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18052">鋞<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18278">頝<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18315">餄<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18479">鴔<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18561">鹶<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19002">㗽<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20000">㬔<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20207">㱂<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20894">㾸<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21023">䁜<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21119">䃓<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21120">䃔<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21499">䊗<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21585">䋷<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21597">䌄<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22149">䗔<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22372">䛭<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23376">䯌<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23460">䰸<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23533">䲲<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23534">䲳<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23603">䴚<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26035">縆<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="702">興<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="871">鋼<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1688">衡<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2408">縞<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3308">嚆<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4583">篝<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5018">鬨<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5422">薨<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6422">橫<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6545">黆<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6795">䯒<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6796">骹<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6797">骺<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7098">鴝<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7303">鞕<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7346">韐<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8129">謊<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8519">輷<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8868">篙<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8973">糕<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9242">翱<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9266">耩<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9665">蕻<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9666">薧<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9667">薅<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10224">璜<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10475">皡<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10875">穅<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11721">曂<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12204">橰<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13107">儫<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13871">墽<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14751">彋<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15120">曍<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16210">熻<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16683">瞘<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16921">篕<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16925">篢<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17177">膷<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17354">薃<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17685">諻<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18064">錓<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18070">錹<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18424">魻<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18427">鮈<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18636">﨨<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19086">㙱<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19546">㢜<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19925">㪧<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20004">㬛<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20127">㯚<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21127">䃝<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21294">䆲<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21602">䌉<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21652">䍍<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21716">䎕<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21842">䐵<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22151">䗘<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22484">䞀<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22529">䞹<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22674">䡠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23081">䩡<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23142">䪫<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23380">䯑<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23445">䰢<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23542">䲾<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24055">熿<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25428">闂<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="697">講<span class="small">コウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1683">購<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2406">糠<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2412">藁<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2417">鮫<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2418">鴻<span class="small">コウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2421">壕<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3808">鴿<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3809">鵁<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4675">磽<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4714">鍠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5461">覯<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6360">擤<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6799">骾<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6861">闀<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6932">鮯<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6933">䱎<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6934">䱍<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7114">鴴<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7311">鞚<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7723">鍞<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7724">鍧<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7725">鍭<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8180">謍<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8181">謞<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8759">醘<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8884">簆<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9243">翶<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10436">癀<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10477">皥<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10746">磺<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11767">餚<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12657">儣<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13565">嚎<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14581">嶸<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15883">澩<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16240">燲<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16840">穔<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16841">穘<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16842">穚<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17094">翵<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17362">藃<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17497">蟂<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17741">豰<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18232">霟<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18430">鮜<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19435">㠙<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19866">㩝<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20616">㹔<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21039">䁯<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21040">䁰<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21123">䃘<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22058">䕛<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22163">䗧<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22419">䜰<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22683">䡩<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22936">䦭<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22984">䧫<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23470">䱋<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25455">鮳<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26152">黉<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2419">鵠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3355">壙<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3971">闔<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4596">簧<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4717">鎬<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6548">黋<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6952">鯁<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7135">鵊<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7488">餱<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7489">餭<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7752">鎤<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8531">轇<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8718">鄺<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9241">翺<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9688">藳<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9927">蟥<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10755">礉<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11205">懭<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15308">檺<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16244">燺<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16463">獷<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16774">礓<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17707">謼<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17872">躿<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18091">鎑<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18097">鎠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18271">韹<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18438">鯌<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18496">鵖<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19012">㘊<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20142">㯯<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21253">䆁<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21511">䊣<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21615">䌙<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22689">䡰<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23181">䫛<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23234">䬕<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23235">䬖<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23680">䵶<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23692">䶋<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23921">嚝<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24249">㶀<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27890">𤂖<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3315">嚮<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3926">曠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5131">羹<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6648">齁<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7162">鵼<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7163">鶊<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7320">鞲<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7495">餻<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8067">觵<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9716">蘅<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11017">懬<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12295">櫜<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14253">嬹<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15325">櫭<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15949">瀥<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16256">爌<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16627">皩<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16778">礘<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16938">簼<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17184">臩<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17710">譀<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17809">趪<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18116">鏮<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18289">顜<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18366">騜<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18566">麔<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19878">㩭<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20456">㶅<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20458">㶇<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20913">㿓<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20959">䀊<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22060">䕟<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22067">䕧<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22173">䗵<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22462">䝥<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23191">䫦<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23237">䬘<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23401">䯪<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24004">櫎<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3877">鰉<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4727">鏗<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5656">礦<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6043">覺<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6804">髇<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6935">䱭<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6997">鯸<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7256">麘<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7321">韝<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7810">鐄<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8869">㰏<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9950">蠔<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10896">穬<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11573">斅<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12727">䳨<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14587">巆<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15072">斆<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16940">籇<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20215">㱋<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21628">䌦<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22940">䦳<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23570">䳧<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23694">䶎<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24078">矌<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25588">韟<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4818">纐<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6582">鼛<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7020">鰝<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7191">鷇<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7420">顥<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8332">贑<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9147">纊<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11671">兤<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18141">鑉<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18294">顤<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18535">鷎<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18609">齩<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21523">䊯<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23112">䪄<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23241">䬝<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3892">鱇<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6808">髐<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7839">鑅<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18296">顭<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21462">䉰<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21876">䑟<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23357">䮲<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23402">䯫<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23708">䶝<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2241">攪<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5726">鑛<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7053">鱑<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15984">灚<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18545">鷬<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18546">鷱<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24371">䵃<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7066">鱟<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8331">贛<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15986">灝<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23398">䯥<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23711">䶠<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3792">黌<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11022">戅<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23851">戆<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18842">㔶<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18331">馫<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23718">䶧<span class="small">コウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11021">戇<span class="small">コウ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="343">神<span class="small">こう</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6368">神<span class="small">こう</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2001">乞<span class="small">こ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3055">丐<span class="small">こ（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1314">恋<span class="small">こ（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1466">請<span class="small">こ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5828">戀<span class="small">こ（う）</span></a></li>
                         <li class="others_kanji onyomi"><a href="24538">乡<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13176">卬<span class="small">ゴウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="296">号<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13005">业<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13911">夰<span class="small">ゴウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="135">合<span class="small">ゴウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1072">仰<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12773">刚<span class="small">ゴウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1079">迎<span class="small">ゴウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2315">劫<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3223">吽<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6060">刧<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7930">夅<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12824">刦<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13233">吘<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13650">圾<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13957">妔<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14391">岇<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14394">岋<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17206">苀<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19622">㤉<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19623">㤊<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24294">䒢<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25450">毜<span class="small">ゴウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2399">昂<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11961">枊<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12825">刼<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13285">呺<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15090">昅<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18898">㕺<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19355">㞻<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19758">㧀<span class="small">ゴウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1692">拷<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3249">咬<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3251">哈<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11632">昻<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13161">勂<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14437">峘<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16026">炠<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16718">砐<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19364">㟅<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19759">㧁<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20226">㱞<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20843">㽺<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20970">䀚<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23891">佭<span class="small">ゴウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="663">格<span class="small">ゴウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="872">降<span class="small">ゴウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1691">剛<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4116">栲<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14041">娙<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14456">峼<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16045">烄<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16063">烚<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17425">蚢<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19275">㝘<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21881">䑥<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23901">哠<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24339">䢔<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27860">𣑥<span class="small">ゴウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="111">強<span class="small">ゴウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="848">郷<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3786">敖<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3845">毫<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5565">盒<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6045">軣<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13374">唬<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16729">硆<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16881">笚<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17758">貥<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20864">㾑<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20935">㿰<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22559">䟘<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22715">䢚<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12772">㓻<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13411">喁<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13802">堼<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13929">奡<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14115">媀<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14742">强<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15701">湡<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17962">鄉<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17963">鄊<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20064">㭿<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20878">㾠<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21884">䑪<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22337">䛅<span class="small">ゴウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="098">楽<span class="small">ゴウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="275">業<span class="small">ゴウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2002">傲<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6302">號<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8664">鄕<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12860">勥<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13200">厫<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13468">嗥<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14697">廅<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15241">榙<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17114">聕<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17161">腢<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19705">㥺<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21343">䇨<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23072">䩕<span class="small">ゴウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1102">豪<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3294">嗷<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7962">隞<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9612">蔜<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11165">慠<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11255">搿<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13476">嗸<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13529">噑<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14196">嫯<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14545">嶅<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14703">廒<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15009">摬<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15015">摾<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15775">滰<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15778">滶<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15796">漒<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16176">熆<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16439">獓<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17183">臦<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17823">跭<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19222">㜜<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19409">㟼<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19415">㠂<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20788">㼴<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23157">䪽<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23305">䭹<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23306">䭺<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2420">噛<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4927">熬<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5528">遨<span class="small">ゴウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5732">樂<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6892">魥<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9265">耦<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10212">璈<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13514">嘷<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13523">噈<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15010">摮<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17342">蕅<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19709">㥿<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20000">㬔<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22030">䔷<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22457">䝞<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23531">䲯<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23534">䲳<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24071">獒<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25769">犟<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7303">鞕<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9242">翱<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10731">磝<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13107">儫<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14572">嶪<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14573">嶫<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15889">澲<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16921">篕<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17354">薃<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18424">魻<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19001">㗼<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19861">㩖<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20127">㯚<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22982">䧨<span class="small">ゴウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2421">壕<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2422">濠<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4096">螯<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9243">翶<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9287">聱<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13565">嚎<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16971">糡<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17094">翵<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20569">㸣<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22984">䧫<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6476">嚙<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8191">謷<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8192">謸<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9241">翺<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10756">礏<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15355">歞<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17708">謽<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18091">鎑<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19735">㦡<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22907">䦋<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6803">髃<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7779">鏊<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15325">櫭<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16778">礘<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21618">䌜<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22872">䥒<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16940">籇<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22315">䚫<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23192">䫨<span class="small">ゴウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2423">轟<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3317">囂<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6761">驁<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6762">䮯<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8211">譹<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13588">嚻<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17075">羻<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18141">鑉<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18609">齩<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22408">䜙<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5724">鰲<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7203">鷔<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18536">鷑<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23634">䵅<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18388">驜<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3850">鼇<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6674">齵<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7066">鱟<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18556">鸈<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23718">䶧<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23522">䲜<span class="small">ゴウ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4526">笄<span class="small">こうがい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6501">筓<span class="small">こうがい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20596">㸿<span class="small">こうし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4837">犢<span class="small">こうし</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2253">柑<span class="small">こうじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5268">糀<span class="small">こうじ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1408">酵<span class="small">こうじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2291">麹<span class="small">こうじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7270">麯<span class="small">こうじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6472">麴<span class="small">こうじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8988">糱<span class="small">こうじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8989">糵<span class="small">こうじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12155">柠<span class="small">こうぞ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4147">楮<span class="small">こうぞ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3840">鸛<span class="small">こうのとり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5323">芬<span class="small">こうば（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25026">头<span class="small">こうべ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="155">首<span class="small">こうべ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="167">頭<span class="small">こうべ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5144">顱<span class="small">こうべ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7425">髗<span class="small">こうべ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1241">被<span class="small">こうむ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2923">蒙<span class="small">こうむ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2428">梱<span class="small">こうり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12057">棞<span class="small">こうり</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">こえ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="171">声<span class="small">こえ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="790">肥<span class="small">こえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6281">聲<span class="small">こえ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2119">沃<span class="small">こ（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="790">肥<span class="small">こ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26830">赵<span class="small">こ（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1018">越<span class="small">こ（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1507">超<span class="small">こ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4261">跋<span class="small">こ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8378">䟦<span class="small">こ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4237">腴<span class="small">こ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5524">逾<span class="small">こ（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2411">膏<span class="small">こ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5573">趙<span class="small">こ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4274">踰<span class="small">こ（える）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">こお</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5744">冫<span class="small">こおり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="400">氷<span class="small">こおり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5808">冰<span class="small">こおり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="489">郡<span class="small">こおり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="400">氷<span class="small">こお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3160">冱<span class="small">こお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5808">冰<span class="small">こお（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2387">冴<span class="small">こお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4324">沍<span class="small">こお（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1519">凍<span class="small">こお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3162">凅<span class="small">こお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4050">蛬<span class="small">こおろぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4051">蛩<span class="small">こおろぎ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">こか</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1442">焦<span class="small">こ（がす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20546">㸈<span class="small">こ（がす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="022">金<span class="small">こがね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5904">釛<span class="small">こがね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4725">鏐<span class="small">こがね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3166">凩<span class="small">こがらし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1442">焦<span class="small">こ（がれる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20546">㸈<span class="small">こ（がれる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">こき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="17686">諽<span class="small">コキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20741">㻷<span class="small">コキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23092">䩯<span class="small">コキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23110">䪂<span class="small">コキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23675">䵱<span class="small">コキ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">こく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="5768">囗<span class="small">コク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="046">石<span class="small">コク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="656">可<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24266">䂖<span class="small">コク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="137">谷<span class="small">コク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="505">告<span class="small">コク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1409">克<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12957">匤<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13254">吿<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13257">呄<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13616">囯<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18894">㕵<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="27775">𦥑<span class="small">コク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="136">国<span class="small">コク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="874">刻<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13619">囻<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19042">㘲<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23923">囶<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24108">苖<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3036">圀<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3176">剋<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12474">俈<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13160">勀<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13162">勊<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18909">㖆<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21942">䒼<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="25512">泶<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3262">哭<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5904">釛<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6163">尅<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7866">閄<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7973">隺<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8656">郜<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13351">唂<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13352">唃<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14037">娔<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16046">烅<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16498">珛<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17230">荲<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19938">㪶<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22956">䧊<span class="small">コク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="138">黒<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3191">勗<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3762">斛<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4126">梏<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5736">寉<span class="small">コク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5799">國<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6485">勖<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15404">氪<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16088">焀<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16093">焅<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16313">牿<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18195">陱<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20709">㻃<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21790">䏱<span class="small">コク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6429">黑<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10035">裓<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10679">硞<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15133">朂<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16790">祰<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19482">㡔<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20067">㮂<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20985">䀰<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24920">喾<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="27795">𡈁<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13444">嗀<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17314">蓔<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20393">㴶<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21728">䎤<span class="small">コク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="873">穀<span class="small">コク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1693">酷<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7875">閡<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9613">蔛<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12179">榖<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16177">熇<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18173">閰<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20522">㷤<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20606">㹊<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20664">㺉<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21578">䋰<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21832">䐨<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22139">䗇<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22301">䚛<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22523">䞱<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4172">槲<span class="small">コク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6402">穀<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7654">鋯<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10471">㿥<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14205">嫼<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15855">潶<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17871">躹<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18046">鋊<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21243">䅵<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22242">䙒<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22672">䡞<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22997">䧼<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9103">縠<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9239">翯<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10864">糓<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10876">䅽<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17483">螜<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18283">頶<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20208">㱄<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21652">䍍<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22430">䜼<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23084">䩤<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4478">轂<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8073">觳<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15883">澩<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17741">豰<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18075">鍙<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20211">㱇<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20263">㲉<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21410">䈸<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23556">䳔<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="25601">濲<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="2419">鵠<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13572">嚛<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15941">瀔<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20805">㽇<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15952">瀫<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18506">鵴<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20456">㶅<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21443">䉛<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11927">臛<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12475">嚳<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14260">孂<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14589">巈<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17628">觷<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23637">䵈<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7186">鶮<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19883">㩴<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23707">䶜<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18393">驧<span class="small">コク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21264">䆐<span class="small">コク</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1004">扱<span class="small">こ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="413">放<span class="small">こ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20069">㮄<span class="small">こ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4146">楫<span class="small">こ（ぐ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2661">漕<span class="small">こ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4166">榜<span class="small">こ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12143">檝<span class="small">こ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12144">艥<span class="small">こ（ぐ）</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="012">玉<span class="small">ゴク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5904">釛<span class="small">ゴク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16088">焀<span class="small">ゴク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="486">極<span class="small">ゴク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16522">琟<span class="small">ゴク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22504">䞝<span class="small">ゴク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20393">㴶<span class="small">ゴク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1410">獄<span class="small">ゴク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20606">㹊<span class="small">ゴク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22139">䗇<span class="small">ゴク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22301">䚛<span class="small">ゴク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22523">䞱<span class="small">ゴク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17483">螜<span class="small">ゴク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18283">頶<span class="small">ゴク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17741">豰<span class="small">ゴク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18354">駶<span class="small">ゴク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19010">㘈<span class="small">ゴク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21410">䈸<span class="small">ゴク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20805">㽇<span class="small">ゴク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15952">瀫<span class="small">ゴク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17628">觷<span class="small">ゴク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23707">䶜<span class="small">ゴク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17873">軉<span class="small">ゴク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18393">驧<span class="small">ゴク</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">こけ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2694">苔<span class="small">こけ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5337">苺<span class="small">こけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5338">莓<span class="small">こけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9410">菭<span class="small">こけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5446">蘚<span class="small">こけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11975">杮<span class="small">こけら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27853">𣏕<span class="small">こけら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1212">倒<span class="small">こ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="374">転<span class="small">こ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2047">痩<span class="small">こ（ける）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6450">瘦<span class="small">こ（ける）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6047">轉<span class="small">こ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1442">焦<span class="small">こ（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20546">㸈<span class="small">こ（げる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">ここ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2471">此<span class="small">ここ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9438">茊<span class="small">ここ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5344">茲<span class="small">ここ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9439">兹<span class="small">ここ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1519">凍<span class="small">こご（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3060">于<span class="small">ここ（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6703">亏<span class="small">ここ（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6704">亐<span class="small">ここ（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9438">茊<span class="small">ここ（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4357">爰<span class="small">ここ（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5344">茲<span class="small">ここ（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9439">兹<span class="small">ここ（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4911">焉<span class="small">ここ（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5263">粤<span class="small">ここ（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25986">粵<span class="small">ここ（に）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="011">九<span class="small">ここの</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="011">九<span class="small">ここの（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1074">屈<span class="small">こご（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1374">凝<span class="small">こご（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="165">心<span class="small">こころ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1815">衷<span class="small">こころ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="849">胸<span class="small">こころ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11798">胷<span class="small">こころ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="740">情<span class="small">こころ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4234">腑<span class="small">こころ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="243">意<span class="small">こころ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="973">腹<span class="small">こころ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="719">志<span class="small">こころざし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="719">志<span class="small">こころざ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25095">尝<span class="small">こころ（みる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="521">試<span class="small">こころ（みる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6258">甞<span class="small">こころ（みる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2553">嘗<span class="small">こころ（みる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="453">課<span class="small">こころ（みる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="661">快<span class="small">こころよ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5510">逞<span class="small">こころよ（い）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">こさ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5391">蓙<span class="small">ござ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3984">霎<span class="small">こさめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4444">濛<span class="small">こさめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6021">厶<span class="small">ござ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">こし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1018">越<span class="small">こし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1293">腰<span class="small">こし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4471">輦<span class="small">こし</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2951">輿<span class="small">こし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8529">轝<span class="small">こし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="236">来<span class="small">こ（し）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5661">來<span class="small">こ（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11951">徕<span class="small">こ（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4351">牀<span class="small">こしかけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4159">榻<span class="small">こしかけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2662">甑<span class="small">こしき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4478">轂<span class="small">こしき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10285">䰝<span class="small">こしき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3055">丐<span class="small">こじき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3686">拵<span class="small">こしら（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4734">鐺<span class="small">こじり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3662">抉<span class="small">こ（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14937">挗<span class="small">こ（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14914">抝<span class="small">こじ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3669">拗<span class="small">こじ（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">こす</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="6532">沪<span class="small">こ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1018">越<span class="small">こ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1507">超<span class="small">こ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5524">逾<span class="small">こ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25573">滤<span class="small">こ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3019">漉<span class="small">こ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4274">踰<span class="small">こ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4449">濾<span class="small">こ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5106">狡<span class="small">こす（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4014">杪<span class="small">こずえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25376">标<span class="small">こずえ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2562">梢<span class="small">こずえ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2856">梶<span class="small">こずえ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="597">標<span class="small">こずえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3172">刮<span class="small">こす（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3702">揩<span class="small">こす（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1900">摩<span class="small">こす（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1421">擦<span class="small">こす（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4202">檪<span class="small">こす（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11258">擵<span class="small">こす（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4201">櫟<span class="small">こす（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">こせ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3773">齷<span class="small">こせつ（く）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">こそ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3172">刮<span class="small">こそ（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19931">㪯<span class="small">こぞ（って）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24534">举<span class="small">こぞ（って）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="481">挙<span class="small">こぞ（って）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6193">舉<span class="small">こぞ（って）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6192">擧<span class="small">こぞ（って）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19931">㪯<span class="small">こぞ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24534">举<span class="small">こぞ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="481">挙<span class="small">こぞ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6193">舉<span class="small">こぞ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6192">擧<span class="small">こぞ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">こた</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="201">答<span class="small">こた（え）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14330">对<span class="small">こた（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="356">対<span class="small">こた（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="651">応<span class="small">こた（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25216">应<span class="small">こた（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5343">荅<span class="small">こた（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="201">答<span class="small">こた（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1641">堪<span class="small">こた（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6166">對<span class="small">こた（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5791">應<span class="small">こた（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5650">谺<span class="small">こだま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11302">抅<span class="small">こだわ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1400">拘<span class="small">こだわ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">こち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="13633">圣<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12987">匢<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21761">䏌<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21916">䒗<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13613">囫<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15149">杚<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17127">肐<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17203">芞<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19891">㩿<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19894">㪂<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20176">㰟<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17138">胐<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19788">㧮<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20972">䀜<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21726">䎢<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12986">匫<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20849">㾁<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22499">䞘<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22711">䢕<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13386">唿<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13395">啒<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18000">釳<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19799">㧾<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20344">㳷<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21970">䓤<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22437">䝆<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23067">䩐<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23243">䬣<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14322">寣<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18039">銡<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18988">㗨<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22365">䛥<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23459">䰴<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24276">䅥<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23619">䴯<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17480">螖<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19720">㦌<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23023">䨚<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17368">藒<span class="small">コチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23227">䬍<span class="small">コチ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6946">鮲<span class="small">こち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3864">鯒<span class="small">こち</span></a></li>
                         <li class="others_kanji onyomi"><a href="13637">圪<span class="small">ゴチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18183">阣<span class="small">ゴチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18819">㔕<span class="small">ゴチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19767">㧉<span class="small">ゴチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21737">䎲<span class="small">ゴチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13180">卼<span class="small">ゴチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14442">峞<span class="small">ゴチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21878">䑢<span class="small">ゴチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20846">㽾<span class="small">ゴチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22499">䞘<span class="small">ゴチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17109">聉<span class="small">ゴチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18000">釳<span class="small">ゴチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22114">䖦<span class="small">ゴチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22909">䦍<span class="small">ゴチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23149">䪲<span class="small">ゴチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19825">㨡<span class="small">ゴチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19505">㡮<span class="small">ゴチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21035">䁫<span class="small">ゴチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18813">㔎<span class="small">ゴチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18598">齀<span class="small">ゴチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22812">䤎<span class="small">ゴチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18158">钀<span class="small">ゴチ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">こつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="2001">乞<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3147">兀<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5687">气<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13633">圣<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11274">扢<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12987">匢<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14384">屼<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4327">汨<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9398">芴<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11284">抇<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13613">囫<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15149">杚<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15441">汩<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18755">㒴<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19767">㧉<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19891">㩿<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21070">䂗<span class="small">コツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2424">忽<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10636">矻<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11634">昒<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11635">㫚<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11745">曶<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15489">泏<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19894">㪂<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8996">紇<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17138">胐<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17414">虼<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19788">㧮<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20972">䀜<span class="small">コツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="875">骨<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4517">笏<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8359">趷<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12986">匫<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20849">㾁<span class="small">コツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1898">堀<span class="small">コツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2425">惚<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13386">唿<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13395">啒<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14481">崫<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15622">淈<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19799">㧾<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20344">㳷<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21962">䓛<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21970">䓤<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22437">䝆<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22909">䦍<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9031">絗<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23067">䩐<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23372">䯇<span class="small">コツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1348">滑<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9581">蓇<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11155">愲<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11423">搰<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14355">尳<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19825">㨡<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4163">榾<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7261">麧<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14322">寣<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20892">㾶<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23619">䴯<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17024">縎<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17480">螖<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19720">㦌<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20424">㵠<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23023">䨚<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27134">鍃<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21035">䁫<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23227">䬍<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6662">齕<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18290">顝<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24167">餶<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23350">䮩<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3828">鶻<span class="small">コツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3147">兀<span class="small">ゴツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12370">仡<span class="small">ゴツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18679">㐳<span class="small">ゴツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7911">阢<span class="small">ゴツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11275">扤<span class="small">ゴツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14384">屼<span class="small">ゴツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18683">㐹<span class="small">ゴツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11943">杌<span class="small">ゴツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10637">矹<span class="small">ゴツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13180">卼<span class="small">ゴツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14442">峞<span class="small">ゴツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21878">䑢<span class="small">ゴツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8477">軏<span class="small">ゴツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20846">㽾<span class="small">ゴツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8478">䡇<span class="small">ゴツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22114">䖦<span class="small">ゴツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22909">䦍<span class="small">ゴツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23149">䪲<span class="small">ゴツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6646">鼿<span class="small">ゴツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18598">齀<span class="small">ゴツ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6584">鼙<span class="small">こつづみ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">こて</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4724">鏝<span class="small">こて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4734">鐺<span class="small">こて</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">こと</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="119">言<span class="small">こと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5739">亊<span class="small">こと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6701">叓<span class="small">こと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6702">㕝<span class="small">こと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="309">事<span class="small">こと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1433">殊<span class="small">こと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10169">珡<span class="small">こと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="824">異<span class="small">こと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1663">琴<span class="small">こと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4545">筝<span class="small">こと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10170">琹<span class="small">こと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4544">箏<span class="small">こと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4790">縡<span class="small">こと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22931">䦦<span class="small">こと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22861">䥅<span class="small">こと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22862">䥆<span class="small">こと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="224">毎<span class="small">ごと</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6443">每<span class="small">ごと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1156">尽<span class="small">ことごと（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25446">毕<span class="small">ことごと（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6072">侭<span class="small">ことごと（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3247">咸<span class="small">ことごと（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5303">殄<span class="small">ことごと（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14820">怸<span class="small">ことごと（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2486">悉<span class="small">ことごと（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2859">畢<span class="small">ことごと（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25443">殚<span class="small">ことごと（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5547">竭<span class="small">ことごと（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6030">盡<span class="small">ことごと（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2603">儘<span class="small">ことごと（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5307">殫<span class="small">ことごと（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="694">故<span class="small">ことさら（に）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1438">如<span class="small">ごと（し）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="723">似<span class="small">ごと（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12408">佀<span class="small">ごと（し）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="894">若<span class="small">ごと（し）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1492">託<span class="small">ことづ（かる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="755">舌<span class="small">ことば</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="119">言<span class="small">ことば</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="887">詞<span class="small">ことば</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3274">喙<span class="small">ことば</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8545">辝<span class="small">ことば</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22347">䛐<span class="small">ことば</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="526">辞<span class="small">ことば</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="123">語<span class="small">ことば</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8546">辤<span class="small">ことば</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6330">辭<span class="small">ことば</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1434">寿<span class="small">ことぶき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6156">壽<span class="small">ことぶき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18627">夀<span class="small">ことぶき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27836">𢢫<span class="small">ことぶき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1434">寿<span class="small">ことほ（ぐ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6156">壽<span class="small">ことほ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18627">夀<span class="small">ことほ（ぐ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2504">竪<span class="small">こども</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2505">豎<span class="small">こども</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22434">䝂<span class="small">こども</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2373">諺<span class="small">ことわざ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="238">理<span class="small">ことわり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="771">断<span class="small">ことわ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8545">辝<span class="small">ことわ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="526">辞<span class="small">ことわ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19946">㫁<span class="small">ことわ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8546">辤<span class="small">ことわ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="726">謝<span class="small">ことわ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6204">斷<span class="small">ことわ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6330">辭<span class="small">ことわ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts21">
                    <h3 class="ttl_while">こな</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1903">抹<span class="small">こな</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="604">粉<span class="small">こな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25990">糁<span class="small">こなかき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8979">糝<span class="small">こなかき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5271">糂<span class="small">こながき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="903">熟<span class="small">こな（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3948">麭<span class="small">こなもち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="903">熟<span class="small">こな（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts22">
                    <h3 class="ttl_while">こね</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3689">捏<span class="small">こ（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11354">揑<span class="small">こ（ねる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts23">
                    <h3 class="ttl_while">この</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2460">之<span class="small">こ（の）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6612">㞢<span class="small">こ（の）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2471">此<span class="small">こ（の）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8587">这<span class="small">こ（の）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1159">是<span class="small">こ（の）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2491">這<span class="small">こ（の）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2469">斯<span class="small">こ（の）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3856">鮗<span class="small">このしろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6986">鯯<span class="small">このしろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6987">䱥<span class="small">このしろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23486">䱨<span class="small">このしろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7034">鰶<span class="small">このしろ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="502">好<span class="small">この（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19253">㝀<span class="small">この（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="098">楽<span class="small">この（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5732">樂<span class="small">この（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19735">㦡<span class="small">この（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19636">㤛<span class="small">このような</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3557">恁<span class="small">このような</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts24">
                    <h3 class="ttl_while">こは</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="25030">奁<span class="small">こばこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6160">奩<span class="small">こばこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8942">匲<span class="small">こばこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3207">匳<span class="small">こばこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8941">籢<span class="small">こばこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5088">鞐<span class="small">こはぜ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1096">抗<span class="small">こば（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1655">拒<span class="small">こば（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4145">楸<span class="small">ごばん</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts25">
                    <h3 class="ttl_while">こひ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3397">媚<span class="small">こび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5126">羔<span class="small">こひつじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17068">羙<span class="small">こひつじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3397">媚<span class="small">こ（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4979">諂<span class="small">こ（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8166">讇<span class="small">こ（びる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts26">
                    <h3 class="ttl_while">こふ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="10432">瘘<span class="small">こぶ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5241">瘤<span class="small">こぶ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5247">瘻<span class="small">こぶ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10418">癅<span class="small">こぶ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5491">贅<span class="small">こぶ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10455">癭<span class="small">こぶ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1992">拳<span class="small">こぶし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14995">搼<span class="small">こぶし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1828">艇<span class="small">こぶね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4887">艀<span class="small">こぶね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4890">艚<span class="small">こぶね</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts27">
                    <h3 class="ttl_while">こほ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1805">堕<span class="small">こぼ（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1976">毀<span class="small">こぼ（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12940">毁<span class="small">こぼ（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5767">墮<span class="small">こぼ（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13863">墯<span class="small">こぼ（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20322">㳑<span class="small">こぼ（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1593">零<span class="small">こぼ（れる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2159">溢<span class="small">こぼ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18230">霗<span class="small">こぼ（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts28">
                    <h3 class="ttl_while">こま</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="2826">狛<span class="small">こま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9470">䓔<span class="small">こま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2003">駒<span class="small">こま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3765">齣<span class="small">こま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12159">榀<span class="small">こまい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2826">狛<span class="small">こまいぬ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2461">仔<span class="small">こま（か）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="139">細<span class="small">こま（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4458">軋<span class="small">こま（かい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18629">宻<span class="small">こま（かい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="139">細<span class="small">こま（かい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="987">密<span class="small">こま（かい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2821">稗<span class="small">こま（かい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4775">綢<span class="small">こま（かい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2058">緻<span class="small">こま（かい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4804">縷<span class="small">こま（かい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3416">孅<span class="small">こま（かい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2432">叉<span class="small">こまぬ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3682">拱<span class="small">こまぬ（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2432">叉<span class="small">こまね（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3682">拱<span class="small">こまね（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7057">䱇<span class="small">ごまめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7056">鱓<span class="small">ごまめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25527">浓<span class="small">こま（やか）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1224">濃<span class="small">こま（やか）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="876">困<span class="small">こま（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts29">
                    <h3 class="ttl_while">こみ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="6075">埖<span class="small">ごみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="491">径<span class="small">こみち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17916">迳<span class="small">こみち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5826">徑<span class="small">こみち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5509">逕<span class="small">こみち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4276">蹊<span class="small">こみち</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts30">
                    <h3 class="ttl_while">こむ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1103">込<span class="small">こ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="703">混<span class="small">こ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4232">腓<span class="small">こむら</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts31">
                    <h3 class="ttl_while">こめ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="220">米<span class="small">こめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8928">䉤<span class="small">こめあげざる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4604">籔<span class="small">こめあげざる</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5557">稟<span class="small">こめぐら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5558">禀<span class="small">こめぐら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1103">込<span class="small">こ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5592">罩<span class="small">こ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3032">篭<span class="small">こ（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2131">籠<span class="small">こ（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts32">
                    <h3 class="ttl_while">こも</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="9470">䓔<span class="small">こも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2381">菰<span class="small">こも</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1783">薦<span class="small">こも</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="127">交<span class="small">こもごも</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2504">竪<span class="small">こもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6134">厮<span class="small">こもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18728">㒋<span class="small">こもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3508">廝<span class="small">こもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2505">豎<span class="small">こもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22434">䝂<span class="small">こもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3032">篭<span class="small">こ（もる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2131">籠<span class="small">こ（もる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3943">閨<span class="small">こもん</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts33">
                    <h3 class="ttl_while">こや</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="790">肥<span class="small">こ（やし）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="790">肥<span class="small">こ（やす）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts34">
                    <h3 class="ttl_while">こよ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1311">暦<span class="small">こよみ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6440">曆<span class="small">こよみ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts35">
                    <h3 class="ttl_while">こら</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3555">怺<span class="small">こら（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1641">堪<span class="small">こら（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8467">躵<span class="small">こら（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14847">惩<span class="small">こ（らしめる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1819">懲<span class="small">こ（らしめる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6384">懲<span class="small">こ（らしめる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14847">惩<span class="small">こ（らす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1374">凝<span class="small">こ（らす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1819">懲<span class="small">こ（らす）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6384">懲<span class="small">こ（らす）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts36">
                    <h3 class="ttl_while">こり</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="2428">梱<span class="small">こり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12057">棞<span class="small">こり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3861">鮴<span class="small">ごり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14847">惩<span class="small">こ（りる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1819">懲<span class="small">こ（りる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6384">懲<span class="small">こ（りる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts37">
                    <h3 class="ttl_while">こる</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1374">凝<span class="small">こ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2564">樵<span class="small">こ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17377">藮<span class="small">こ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts38">
                    <h3 class="ttl_while">これ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2460">之<span class="small">これ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6612">㞢<span class="small">これ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2148">伊<span class="small">これ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2471">此<span class="small">これ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8587">这<span class="small">これ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1159">是<span class="small">これ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2151">惟<span class="small">これ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2491">這<span class="small">これ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4911">焉<span class="small">これ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2469">斯<span class="small">これ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1011">維<span class="small">これ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts39">
                    <h3 class="ttl_while">ころ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="791">比<span class="small">ころ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12962">夶<span class="small">ころ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2004">頃<span class="small">ころ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="374">転<span class="small">ころ（がす）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6047">轉<span class="small">ころ（がす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="374">転<span class="small">ころ（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4479">輾<span class="small">ころ（がる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6047">轉<span class="small">ころ（がる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="374">転<span class="small">ころ（げる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6047">轉<span class="small">ころ（げる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2150">夷<span class="small">ころ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12811">刘<span class="small">ころ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25771">狝<span class="small">ころ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="511">殺<span class="small">ころ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5630">虔<span class="small">ころ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12934">殺<span class="small">ころ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3518">弑<span class="small">ころ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3649">戡<span class="small">ころ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4962">誅<span class="small">ころ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14725">弒<span class="small">ころ（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2975">劉<span class="small">ころ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3651">戮<span class="small">ころ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5308">殪<span class="small">ころ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12352">獮<span class="small">ころ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="374">転<span class="small">ころ（ぶ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6047">轉<span class="small">ころ（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="446">衣<span class="small">ころも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5023">衫<span class="small">ころも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5026">衲<span class="small">ころも</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts40">
                    <h3 class="ttl_while">こわ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="171">声<span class="small">こわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6281">聲<span class="small">こわ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1251">怖<span class="small">こわ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1066">恐<span class="small">こわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11058">悑<span class="small">こわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19639">㤟<span class="small">こわ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="111">強<span class="small">こわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14742">强<span class="small">こわ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1976">毀<span class="small">こわ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12940">毁<span class="small">こわ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1032">壊<span class="small">こわ（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6151">壞<span class="small">こわ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1032">壊<span class="small">こわ（れる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6151">壞<span class="small">こわ（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts41">
                    <h3 class="ttl_while">こん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="6603">丨<span class="small">コン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="113">今<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18817">㔓<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19762">㧄<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2429">艮<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12385">伒<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12844">劤<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13227">吅<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19764">㧆<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27833">𢎭<span class="small">コン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="112">近<span class="small">コン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="876">困<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11035">忶<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13655">坅<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13965">妡<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15448">汵<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15456">沄<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17937">邤<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19960">㫔<span class="small">コン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="022">金<span class="small">コン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1694">昆<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2426">坤<span class="small">コン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2427">昏<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12444">佷<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13179">卺<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14811">怋<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15339">欦<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19893">㪁<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20563">㸝<span class="small">コン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="496">建<span class="small">コン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1413">恨<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3531">很<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5107">狠<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9437">茛<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11325">拫<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11636">昬<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12477">俒<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13327">哏<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14298">宪<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14603">巹<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16642">盺<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16645">眃<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18785">㓧<span class="small">コン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="297">根<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3570">悃<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6507">衮<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11341">捆<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12503">俽<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12506">倱<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13353">唅<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14830">恳<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15588">涃<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16501">珢<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18751">㒭<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19655">㤷<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21533">䊻<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22712">䢖<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23924">圂<span class="small">コン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="703">混<span class="small">コン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1104">婚<span class="small">コン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1412">紺<span class="small">コン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2005">痕<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2428">梱<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3459">崑<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5028">袞<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5373">菎<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5935">淦<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11104">惛<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11371">掍<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11683">晜<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13771">堃<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14100">婫<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14468">崐<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14839">惃<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14841">惍<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15617">涽<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16401">猑<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16730">硍<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17149">脪<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17258">菦<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17786">赾<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18706">㑮<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18938">㖧<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21335">䇟<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25000">堒<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26565">裉<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4140">棍<span class="small">コン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4394">渾<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4913">焜<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6121">棔<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6818">髠<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9178">罤<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9819">䖵<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10036">裍<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10171">琨<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10560">睏<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10857">稇<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11105">惽<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11841">䐊<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12057">棞<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12907">殙<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13780">堚<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13804">堿<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14123">媈<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14145">媣<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14502">嵅<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14971">揞<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15693">湕<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15703">湣<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16104">焝<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16737">硱<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17645">詌<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18208">雂<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18798">㓺<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19186">㛰<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19481">㡓<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19985">㫻<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20199">㰸<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20659">㺂<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20871">㾙<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21722">䎜<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21805">䐄<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21979">䓳<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25910">祵<span class="small">コン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1676">献<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3358">壼<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4262">跟<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4409">溷<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5392">蒟<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5691">琿<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6817">髡<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7373">頎<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8262">豤<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8281">貇<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9047">綑<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10041">裷<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10051">裩<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10567">睧<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10689">䃂<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10856">稛<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11709">暋<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12137">楎<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12908">㱪<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14986">搟<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15064">敯<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15348">歁<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15769">滚<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16135">煇<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16663">睔<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17313">蓒<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17316">蓘<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17650">詪<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19700">㥵<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19825">㨡<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20382">㴫<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20604">㹇<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20811">㽎<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20881">㾣<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21220">䅙<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21710">䎏<span class="small">コン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1411">魂<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4415">滾<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5052">褌<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6819">髨<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6874">䰟<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9060">緄<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10581">睴<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10989">慁<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13837">墈<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14187">嫤<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16668">睯<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16672">睷<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17327">蔉<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17450">蜫<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17622">觨<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18333">馸<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19077">㙥<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19836">㨰<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19843">㨷<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20096">㮯<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21011">䁍<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21490">䊎<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21492">䊐<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22194">䘓<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22365">䛥<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22796">䣻<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25096">尡<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25591">潉<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7880">閫<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8507">輥<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13202">厱<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14554">嶔<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15024">撖<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15352">歏<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16544">瑻<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17018">緷<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17985">醌<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18255">鞎<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19954">㫎<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20115">㯊<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20611">㹏<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20900">㾾<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21497">䊕<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22250">䙛<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22306">䚠<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22375">䛰<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22597">䠅<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23159">䫀<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25899">磙<span class="small">コン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1414">墾<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4982">諢<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6953">鮌<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7692">錕<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7884">閽<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14232">嬜<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16925">篢<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17902">輱<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18063">錎<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18176">閸<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18325">馠<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19545">㢛<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19729">㦗<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22677">䡣<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23538">䲺<span class="small">コン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1695">懇<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7480">餛<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16556">璭<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17036">繉<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17496">螼<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20144">㯲<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20540">㷿<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21130">䃢<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21415">䈽<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21604">䌍<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22535">䞿<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22852">䤺<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23689">䶃<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3862">鯀<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7409">顐<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7487">餫<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11923">臗<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17702">謴<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17906">轋<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18360">騉<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20149">㯻<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20908">㿌<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21139">䃭<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22394">䜇<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23269">䭈<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23625">䴷<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3870">鯤<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6751">䮝<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7164">鵾<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15046">攇<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18290">顝<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18367">騝<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19737">㦥<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21619">䌝<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21622">䌠<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22986">䧮<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23184">䫟<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3823">鶤<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5856">獻<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6998">鯶<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18448">鰎<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22407">䜗<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23668">䵪<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3768">齦<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16869">竷<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22988">䧰<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6639">鼲<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18610">齫<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22187">䘆<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23201">䫲<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24333">䜢<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22821">䤗<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24238">㱎<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18842">㔶<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20961">䀍<span class="small">コン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19033">㘦<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19335">㞤<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2429">艮<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12202">权<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12384">仱<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12386">众<span class="small">ゴン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="119">言<span class="small">ゴン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1046">含<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13959">妗<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14666">庈<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14805">忴<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14908">扲<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15448">汵<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19960">㫔<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24531">严<span class="small">ゴン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2330">欣<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19893">㪁<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20253">㱽<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12477">俒<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14428">峎<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15509">泿<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20486">㶰<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10169">珡<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12506">倱<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13350">唁<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13353">唅<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13728">垽<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14046">娢<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14457">峾<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17232">荶<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17422">蚙<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18860">㕋<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21880">䑤<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21943">䓂<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21945">䓄<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23924">圂<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12836">惞<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13373">唫<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14100">婫<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15202">梒<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16509">琂<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17258">菦<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17782">赺<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17881">軡<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18706">㑮<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18935">㖤<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18936">㖥<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20359">㴈<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21335">䇟<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24114">菳<span class="small">ゴン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="852">勤<span class="small">ゴン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1663">琴<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10170">琹<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12568">傆<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13409">啽<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13425">喗<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14123">媈<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16397">猌<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17435">蛝<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18008">鈙<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18208">雂<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20065">㮀<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20776">㼨<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21805">䐄<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22096">䖐<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27109">鈫<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5691">琿<span class="small">ゴン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6376">勤<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16663">睔<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16748">碒<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16898">筨<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17650">詪<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19820">㨜<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19825">㨡<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21220">䅙<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21353">䇵<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21362">䇾<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22099">䖔<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22220">䘶<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10401">瘒<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15247">榩<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17334">蔨<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17446">蜠<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17450">蜫<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17451">蜬<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17622">觨<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19223">㜝<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19843">㨷<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20095">㮭<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20096">㮯<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21492">䊐<span class="small">ゴン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="861">権<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13136">凚<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17018">緷<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17802">趛<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18255">鞎<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18561">鹶<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20115">㯊<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21239">䅱<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22030">䔷<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22306">䚠<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22375">䛰<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23258">䬶<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23463">䰼<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4982">諢<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12645">儑<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14221">嬐<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15899">澿<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16765">磭<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17841">踺<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19545">㢛<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19729">㦗<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19857">㩒<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22677">䡣<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22931">䦦<span class="small">ゴン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="862">厳<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3628">懃<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17036">繉<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20212">㱈<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22162">䗣<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22852">䤺<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23689">䶃<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16618">癛<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18498">鵘<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20149">㯻<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22861">䥅<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22862">䥆<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23612">䴦<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23625">䴷<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13571">嚚<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17514">蠄<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18503">鵭<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21250">䅾<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21619">䌝<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23184">䫟<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23274">䭓<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23702">䶖<span class="small">ゴン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6147">嚴<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22107">䖜<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22407">䜗<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6005">權<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7908">闦<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22408">䜙<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22988">䧰<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23201">䫲<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23203">䫴<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13598">囐<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14269">孍<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24317">䕾<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23398">䯥<span class="small">ゴン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21468">䉷<span class="small">ゴン</span></a></li>
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