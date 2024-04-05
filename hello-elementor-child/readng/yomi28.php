<?php
/*
 * Template Name: Yomi28
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
               <h1 class="ttl_main">音訓検索「ふ」</h1>
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
               <p>「ふ」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>ふ</option>
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
                         <li id="parts1_menu"><a href="#parts1">ふ</a></li>
                         <li id="parts2_menu"><a href="#parts2">ふい</a></li>
                         <li id="parts3_menu"><a href="#parts3">ふう</a></li>
                         <li id="parts4_menu"><a href="#parts4">ふえ</a></li>
                         <li id="parts5_menu"><a href="#parts5">ふか</a></li>
                         <li id="parts6_menu"><a href="#parts6">ふき</a></li>
                         <li id="parts7_menu"><a href="#parts7">ふく</a></li>
                         <li id="parts8_menu"><a href="#parts8">ふけ</a></li>
                         <li id="parts9_menu"><a href="#parts9">ふこ</a></li>
                         <li id="parts10_menu"><a href="#parts10">ふさ</a></li>
                         <li id="parts11_menu"><a href="#parts11">ふし</a></li>
                         <li id="parts12_menu"><a href="#parts12">ふす</a></li>
                         <li id="parts13_menu"><a href="#parts13">ふせ</a></li>
                         <li id="parts14_menu"><a href="#parts14">ふそ</a></li>
                         <li id="parts15_menu"><a href="#parts15">ふた</a></li>
                         <li id="parts16_menu"><a href="#parts16">ふち</a></li>
                         <li id="parts17_menu"><a href="#parts17">ふつ</a></li>
                         <li id="parts18_menu"><a href="#parts18">ふて</a></li>
                         <li id="parts19_menu"><a href="#parts19">ふと</a></li>
                         <li id="parts20_menu"><a href="#parts20">ふな</a></li>
                         <li id="parts21_menu"><a href="#parts21">ふね</a></li>
                         <li id="parts22_menu"><a href="#parts22">ふひ</a></li>
                         <li id="parts23_menu"><a href="#parts23">ふま</a></li>
                         <li id="parts24_menu"><a href="#parts24">ふみ</a></li>
                         <li id="parts25_menu"><a href="#parts25">ふむ</a></li>
                         <li id="parts26_menu"><a href="#parts26">ふも</a></li>
                         <li id="parts27_menu"><a href="#parts27">ふや</a></li>
                         <li id="parts28_menu"><a href="#parts28">ふゆ</a></li>
                         <li id="parts29_menu"><a href="#parts29">ふよ</a></li>
                         <li id="parts30_menu"><a href="#parts30">ふら</a></li>
                         <li id="parts31_menu"><a href="#parts31">ふり</a></li>
                         <li id="parts32_menu"><a href="#parts32">ふる</a></li>
                         <li id="parts33_menu"><a href="#parts33">ふれ</a></li>
                         <li id="parts34_menu"><a href="#parts34">ふろ</a></li>
                         <li id="parts35_menu"><a href="#parts35">ふん</a></li>
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
                    <h3 class="ttl_while">ふ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="215">父<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="600">不<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="601">夫<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3067">仆<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="598">付<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="798">布<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1638">缶<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12403">伕<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13948">妇<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24712">凨<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="970">否<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1876">扶<span class="small">フ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2875">甫<span class="small">フ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2876">芙<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3420">孚<span class="small">フ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3483">巫<span class="small">フ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6441">步<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7426">凬<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9396">芣<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12426">佈<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13241">吥<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13260">呋<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13950">妋<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13968">妦<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14808">怀<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14913">抚<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17936">邞<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18888">㕮<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19456">㠸<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21924">䒠<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26558">补<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="216">歩<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="599">府<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1251">怖<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1877">附<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2095">阜<span class="small">フ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2874">斧<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3243">咐<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3336">坿<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3675">拊<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5328">苻<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7427">凮<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10126">玞<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11899">肤<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11977">枎<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13991">姇<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14732">弣<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14918">抪<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15505">泭<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18782">㓡<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18899">㕻<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19139">㚴<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19632">㤔<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19964">㫙<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20318">㳍<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23898">咅<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="217">風<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="405">負<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1542">赴<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2096">訃<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3094">俘<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3095">俛<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3798">鳬<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4026">柎<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4028">枹<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5587">罘<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5954">畉<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9455">荂<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10646">砆<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10963">怤<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11792">胕<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12491">俌<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14424">峊<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15170">柨<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16486">玸<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17533">衭<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18859">㕊<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21152">䃿<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21185">䄮<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22555">䟔<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1253">浮<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1266">峰<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1970">釜<span class="small">フ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2906">峯<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3113">俯<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5203">郛<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5903">釡<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8662">郙<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9009">紑<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9485">莆<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9486">莩<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9784">蚨<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10791">祔<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11058">悑<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13330">哣<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13344">哹<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13725">垺<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13745">埗<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14034">娐<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14043">娝<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14333">尃<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17231">荴<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17426">蚥<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17549">袝<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18193">陠<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19650">㤱<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20856">㾈<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21083">䂤<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21537">䊿<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21659">䍖<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21955">䓏<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24111">莑<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="799">婦<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1543">符<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2872">埠<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3947">麸<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4122">桴<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4227">脯<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4254">趺<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5304">殍<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5514">逋<span class="small">フ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5674">冨<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9806">蚹<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11388">捬<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11607">旉<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14069">婄<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14077">婏<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16077">烳<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16510">琈<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16983">紨<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18192">陚<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18934">㖣<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19668">㥉<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20049">㭪<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20273">㲗<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20593">㸼<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21883">䑧<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22503">䞜<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22574">䟪<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22656">䡍<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="797">富<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="978">補<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1256">普<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3126">傅<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4234">腑<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5907">殕<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7560">鈇<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7561">鈈<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8379">跗<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8912">盙<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9179">罦<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9568">萯<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9823">蛗<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10852">稃<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13802">堼<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14128">媍<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14487">崶<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16109">焤<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16112">焨<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16824">秿<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17642">詂<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19198">㜂<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19814">㨐<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20195">㰴<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20984">䀯<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21742">䎷<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22466">䝪<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22511">䞤<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22637">䠵<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24305">䓵<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26572">覄<span class="small">フ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2877">蒲<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3797">鳧<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4056">蜉<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4408">溥<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4887">艀<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7429">颫<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8961">粰<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9842">蜅<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10280">瓿<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15100">暊<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15763">滏<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16136">煈<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16895">筟<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17005">綒<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17656">誈<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18018">鈽<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18626">圑<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19069">㙛<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20258">㲄<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21563">䋠<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21708">䎍<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1254">腐<span class="small">フ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2878">輔<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3426">孵<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4165">榑<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4967">誣<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8703">鄜<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8744">酻<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8913">㝬<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9606">蓲<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11701">暜<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17739">豧<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21570">䋨<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22136">䗄<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22521">䞯<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23304">䭸<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23407">䯱<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1252">膚<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1255">敷<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1257">賦<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1265">舗<span class="small">フ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2873">撫<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2902">鋪<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3946">麩<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6032">舖<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6725">駙<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7385">頫<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9881">蝜<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13103">僼<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18467">鳺<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18470">鴀<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22024">䔰<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22483">䝾<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22524">䞳<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2879">鮒<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5282">餔<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7263">麬<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7279">䩉<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14225">嬔<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15135">朆<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16969">糐<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17679">諩<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21652">䍍<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21688">䍸<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21715">䎔<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22928">䦣<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27200">㬟<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5487">賻<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6866">鬴<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21897">䒀<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21901">䒄<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23125">䪔<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23229">䬏<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23328">䮒<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23387">䯙<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1546">覆<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5886">鯆<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6965">䱐<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7264">䴸<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8911">簠<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18495">鵏<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18571">麱<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19871">㩤<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21613">䌗<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23337">䮛<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23416">䯽<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23557">䳕<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23685">䵾<span class="small">フ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1875">譜<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3795">黼<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11018">懯<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16559">璷<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23563">䳝<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23564">䳞<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7820">鐠<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9824">䘀<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18745">㒥<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14329">寷<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17400">蘴<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19443">㠦<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24367">䲕<span class="small">フ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7428">飌<span class="small">フ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2091">斑<span class="small">ふ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11575">辬<span class="small">ふ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="984">亡<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6718">兦<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6719">亾<span class="small">ブ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="215">父<span class="small">ブ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="218">分<span class="small">ブ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="600">不<span class="small">ブ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="601">夫<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4898">毋<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5729">无<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24204">㚢<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24730">务<span class="small">ブ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3483">巫<span class="small">ブ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6441">步<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12459">㑄<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13895">夆<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14913">抚<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17202">芜<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17936">邞<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21763">䏎<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24780">呒<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25035">妩<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25215">庑<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25235">怃<span class="small">ブ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="216">歩<span class="small">ブ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="800">武<span class="small">ブ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1560">奉<span class="small">ブ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1877">附<span class="small">ブ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1878">侮<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3336">坿<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13991">姇<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19632">㤔<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19964">㫙<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24788">咘<span class="small">ブ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="405">負<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4026">柎<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5954">畉<span class="small">ブ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6373">侮<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11547">敄<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16486">玸<span class="small">ブ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1253">浮<span class="small">ブ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1264">捕<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12523">倵<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12834">勏<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13725">垺<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13745">埗<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14034">娐<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17233">荹<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17235">莁<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17549">袝<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18193">陠<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19368">㟊<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21083">䂤<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21659">䍖<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24111">莑<span class="small">ブ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="406">部<span class="small">ブ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="813">務<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12553">偩<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13372">唪<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14054">娬<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16510">琈<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16983">紨<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18192">陚<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20712">㻉<span class="small">ブ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="602">無<span class="small">ブ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2880">葡<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10178">珷<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13787">堥<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13799">堸<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14110">婺<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14507">嵍<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16314">犃<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17642">詂<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19482">㡔<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20502">㷆<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20877">㾟<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21800">䏽<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22637">䠵<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24119">葻<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24284">䍙<span class="small">ブ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2877">蒲<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4887">艀<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7997">雺<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10697">碔<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12801">剻<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13815">塜<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17190">艂<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17656">誈<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18626">圑<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21484">䊇<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21888">䑰<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22974">䧞<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25551">雾<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2881">蔀<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4967">誣<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13823">塳<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13931">奦<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16903">箁<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17739">豧<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18724">㒇<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19490">㡝<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19710">㦀<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21651">䍌<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21730">䎧<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22004">䔕<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22476">䝵<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22521">䞯<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22765">䣙<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23304">䭸<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23407">䯱<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24025">漨<span class="small">ブ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1258">舞<span class="small">ブ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2873">撫<span class="small">ブ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2882">蕪<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3302">嘸<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3510">廡<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3624">憮<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8672">郶<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13866">墲<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14200">嫵<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15833">潕<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16174">熃<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20528">㷯<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22589">䟼<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23021">䨗<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4707">錻<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10229">璑<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11903">膴<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12257">橆<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20537">㷻<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21399">䈬<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24327">䙜<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8018">霚<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10286">甒<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12656">儛<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16692">瞴<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20438">㵯<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21413">䈻<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21668">䍢<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21897">䒀<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23001">䨁<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23125">䪔<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23229">䬏<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23296">䭰<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5817">鵐<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9935">蟱<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18495">鵏<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20441">㵲<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21433">䉑<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22170">䗱<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23416">䯽<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23557">䳕<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23624">䴶<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23685">䵾<span class="small">ブ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1282">霧<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2883">鵡<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5096">鞴<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6756">騖<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17714">譕<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23127">䪖<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23563">䳝<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23564">䳞<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3825">鶩<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23105">䩼<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23129">䪙<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21905">䒉<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18148">鑝<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18541">鷡<span class="small">ブ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23368">䮾<span class="small">ブ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">ふい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5996">鈩<span class="small">ふいご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5096">鞴<span class="small">ふいご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7356">韛<span class="small">ふいご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4738">鑪<span class="small">ふいご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5096">鞴<span class="small">ふいごう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7356">韛<span class="small">ふいごう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3231">呎<span class="small">フィート</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">ふう</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="601">夫<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6608">丰<span class="small">フウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2089">汎<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13040">仹<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24712">凨<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7426">凬<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9396">芣<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13961">妚<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14808">怀<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21763">䏎<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7427">凮<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10940">竎<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13991">姇<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18782">㓡<span class="small">フウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="217">風<span class="small">フウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="405">負<span class="small">フウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1544">封<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5587">罘<span class="small">フウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1253">浮<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9009">紑<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13344">哹<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14034">娐<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17055">缹<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19368">㟊<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19650">㤱<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21659">䍖<span class="small">フウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="603">副<span class="small">フウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5674">冨<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10272">缻<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12553">偩<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12554">偑<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16075">烰<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16510">琈<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19668">㥉<span class="small">フウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="797">富<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4487">馮<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5907">殕<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9823">蛗<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13799">堸<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15664">渢<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16112">焨<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16413">猦<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18299">颩<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20502">㷆<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24119">葻<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26572">覄<span class="small">フウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2884">楓<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4887">艀<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7602">鉜<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8961">粰<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12160">椱<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12801">剻<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16136">煈<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17190">艂<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22974">䧞<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5238">瘋<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10712">碸<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16903">箁<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17577">褔<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17739">豧<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21651">䍌<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22521">䞯<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22765">䣙<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18470">鴀<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22024">䔰<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23021">䨗<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4986">諷<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21652">䍍<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22928">䦣<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7739">鍑<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7740">鍢<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15297">檒<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20438">㵯<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21901">䒄<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23229">䬏<span class="small">フウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1546">覆<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11512">㩠<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20833">㽬<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23557">䳕<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23127">䪖<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9824">䘀<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23129">䪙<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14329">寷<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17400">蘴<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19443">㠦<span class="small">フウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7428">飌<span class="small">フウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2885">鳳<span class="small">ブウ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">ふえ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="8784">竽<span class="small">ふえ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="372">笛<span class="small">ふえ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4525">笙<span class="small">ふえ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="465">管<span class="small">ふえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25955">箫<span class="small">ふえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3747">龠<span class="small">ふえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8917">簘<span class="small">ふえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4596">簧<span class="small">ふえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4601">簫<span class="small">ふえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3893">鰾<span class="small">ふえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4607">籟<span class="small">ふえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4608">籥<span class="small">ふえ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1146">殖<span class="small">ふ（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="760">増<span class="small">ふ（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2844">蕃<span class="small">ふ（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6419">增<span class="small">ふ（える）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">ふか</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="6983">鮝<span class="small">ふか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6982">鯗<span class="small">ふか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3897">鱶<span class="small">ふか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10901">宆<span class="small">ふか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4323">汪<span class="small">ふか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13608">囦<span class="small">ふか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4332">泓<span class="small">ふか（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5613">穹<span class="small">ふか（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1844">洞<span class="small">ふか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4374">浚<span class="small">ふか（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="341">深<span class="small">ふか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5616">窕<span class="small">ふか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5655">渕<span class="small">ふか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5933">渊<span class="small">ふか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15658">渆<span class="small">ふか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20361">㴊<span class="small">ふか（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2186">淵<span class="small">ふか（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2714">湛<span class="small">ふか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5079">覃<span class="small">ふか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5617">窖<span class="small">ふか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20388">㴱<span class="small">ふか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20391">㴴<span class="small">ふか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4429">潭<span class="small">ふか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4437">澳<span class="small">ふか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4439">濬<span class="small">ふか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5535">邃<span class="small">ふか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20471">㶜<span class="small">ふか（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1094">更<span class="small">ふ（かす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11744">㪅<span class="small">ふ（かす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24297">䒱<span class="small">ふ（かす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="913">蒸<span class="small">ふ（かす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="341">深<span class="small">ふか（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20388">㴱<span class="small">ふか（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="341">深<span class="small">ふか（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20388">㴱<span class="small">ふか（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">ふき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5325">苳<span class="small">ふき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3012">蕗<span class="small">ふき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1980">巾<span class="small">ふきん</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22199">䘜<span class="small">ふきん</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">ふく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="27762">𠬝<span class="small">フク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1545">伏<span class="small">フク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="408">服<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14291">宓<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5340">茯<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10311">畐<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13707">垘<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13900">复<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15525">洑<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17949">郍<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19104">㚆<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10313">畗<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12044">栿<span class="small">フク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="603">副<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3200">匐<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5039">袱<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9521">菔<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9752">虙<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10314">畣<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12552">偪<span class="small">フク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="801">復<span class="small">フク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1259">幅<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3596">愎<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9038">絥<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9569">葍<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11144">愊<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15215">棴<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19061">㙏<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="26572">覄<span class="small">フク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="407">福<span class="small">フク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="973">腹<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12160">椱<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12161">楅<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22577">䟮<span class="small">フク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="802">複<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4547">箙<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5403">蔔<span class="small">フク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6370">福<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16328">犕<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16836">稪<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17577">褔<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4077">蝠<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4078">蝮<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15872">澓<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17350">蕧<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18479">鴔<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19416">㠅<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21376">䈏<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21587">䋹<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22024">䔰<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="26033">緮<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4474">輻<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4475">輹<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17678">諨<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17844">踾<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7739">鍑<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7740">鍢<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10444">癁<span class="small">フク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1546">覆<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4854">馥<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20833">㽬<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24349">䫝<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5096">鞴<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7171">鵩<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3883">鰒<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18518">鶝<span class="small">フク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23041">䨱<span class="small">フク</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1158">吹<span class="small">ふ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3229">吩<span class="small">ふ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3233">呵<span class="small">ふ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3243">咐<span class="small">ふ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2027">拭<span class="small">ふ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13435">喯<span class="small">ふ（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2517">葺<span class="small">ふ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2307">嘘<span class="small">ふ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1261">噴<span class="small">ふ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4438">濆<span class="small">ふ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6473">噓<span class="small">ふ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18615">龡<span class="small">ふ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6916">鮐<span class="small">ふぐ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2233">鮭<span class="small">ふぐ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3883">鰒<span class="small">ふぐ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27762">𠬝<span class="small">ブク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1545">伏<span class="small">ブク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14291">宓<span class="small">ブク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5340">茯<span class="small">ブク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13707">垘<span class="small">ブク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13900">复<span class="small">ブク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17949">郍<span class="small">ブク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19104">㚆<span class="small">ブク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15215">棴<span class="small">ブク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22577">䟮<span class="small">ブク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16328">犕<span class="small">ブク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18479">鴔<span class="small">ブク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17049">纀<span class="small">ブク</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5039">袱<span class="small">ふくさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3201">匏<span class="small">ふくべ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4974">瓠<span class="small">ふくべ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2863">瓢<span class="small">ふくべ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1046">含<span class="small">ふく（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2101">哺<span class="small">ふく（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3266">啣<span class="small">ふく（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7616">衘<span class="small">ふく（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4695">銜<span class="small">ふく（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7615">㘅<span class="small">ふく（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1046">含<span class="small">ふく（める）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2739">脹<span class="small">ふく（よか）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1564">膨<span class="small">ふく（よか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4232">腓<span class="small">ふくらはぎ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1564">膨<span class="small">ふく（らむ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2739">脹<span class="small">ふく（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1564">膨<span class="small">ふく（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1490">袋<span class="small">ふくろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2801">嚢<span class="small">ふくろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6479">囊<span class="small">ふくろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4123">梟<span class="small">ふくろう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12052">䲷<span class="small">ふくろう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3802">鴟<span class="small">ふくろう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7097">鴞<span class="small">ふくろう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18489">鴵<span class="small">ふくろう</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2588">茸<span class="small">ふくろづの</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">ふけ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="637">老<span class="small">ふ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1094">更<span class="small">ふ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11744">㪅<span class="small">ふ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24297">䒱<span class="small">ふ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="341">深<span class="small">ふ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="913">蒸<span class="small">ふ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20388">㴱<span class="small">ふ（ける）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2717">耽<span class="small">ふけ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1948">淫<span class="small">ふけ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4839">酖<span class="small">ふけ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9278">躭<span class="small">ふけ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2714">湛<span class="small">ふけ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20391">㴴<span class="small">ふけ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">ふこ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5449">畚<span class="small">ふご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10319">奙<span class="small">ふご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8821">筲<span class="small">ふご</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">ふさ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1565">房<span class="small">ふさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25238">总<span class="small">ふさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9074">捴<span class="small">ふさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9073">揔<span class="small">ふさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25334">搃<span class="small">ふさ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="759">総<span class="small">ふさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9072">摠<span class="small">ふさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9071">緫<span class="small">ふさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5911">總<span class="small">ふさ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2808">沌<span class="small">ふさ（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5181">阨<span class="small">ふさ（がる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2170">苑<span class="small">ふさ（がる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2184">奄<span class="small">ふさ（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7919">阸<span class="small">ふさ（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3260">哽<span class="small">ふさ（がる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1502">窒<span class="small">ふさ（がる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1999">梗<span class="small">ふさ（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4387">淤<span class="small">ふさ（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3345">堙<span class="small">ふさ（がる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2009">塞<span class="small">ふさ（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2068">填<span class="small">ふさ（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5195">隘<span class="small">ふさ（がる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="6469">塡<span class="small">ふさ（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3299">噎<span class="small">ふさ（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3353">壅<span class="small">ふさ（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19087">㙲<span class="small">ふさ（がる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1583">抑<span class="small">ふさ（ぐ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2614">杜<span class="small">ふさ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3551">怫<span class="small">ふさ（ぐ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2442">柴<span class="small">ふさ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4117">栫<span class="small">ふさ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3345">堙<span class="small">ふさ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4392">湮<span class="small">ふさ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2009">塞<span class="small">ふさ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2068">填<span class="small">ふさ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4577">雍<span class="small">ふさ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="6469">塡<span class="small">ふさ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1997">錮<span class="small">ふさ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3353">壅<span class="small">ふさ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3960">閼<span class="small">ふさ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19087">㙲<span class="small">ふさ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7982">雝<span class="small">ふさ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25423">欎<span class="small">ふさ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3030">欝<span class="small">ふさ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18408">鬰<span class="small">ふさ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1950">鬱<span class="small">ふさ（ぐ）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">ふし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="26340">节<span class="small">ふし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="549">節<span class="small">ふし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5590">罧<span class="small">ふし</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6404">節<span class="small">ふし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2071">藤<span class="small">ふじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9706">䕨<span class="small">ふじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5590">罧<span class="small">ふしづけ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2218">臥<span class="small">ふしど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8035">卧<span class="small">ふしど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24685">兰<span class="small">ふじばかま</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2965">蘭<span class="small">ふじばかま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27689">蘭<span class="small">ふじばかま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5316">芫<span class="small">ふじもどき</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">ふす</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3067">仆<span class="small">ふ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1545">伏<span class="small">ふ（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2218">臥<span class="small">ふ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8035">卧<span class="small">ふ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3113">俯<span class="small">ふ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3116">偃<span class="small">ふ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4942">熏<span class="small">ふす（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4941">燻<span class="small">ふす（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17540">袄<span class="small">ふすま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5027">衾<span class="small">ふすま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3947">麸<span class="small">ふすま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3946">麩<span class="small">ふすま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7263">麬<span class="small">ふすま</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2195">襖<span class="small">ふすま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7264">䴸<span class="small">ふすま</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">ふせ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3656">扞<span class="small">ふせ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="810">防<span class="small">ふせ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1096">抗<span class="small">ふせ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1655">拒<span class="small">ふせ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4335">沮<span class="small">ふせ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3688">捍<span class="small">ふせ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3327">圉<span class="small">ふせ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1062">距<span class="small">ふせ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="910">障<span class="small">ふせ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2310">禦<span class="small">ふせ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4583">篝<span class="small">ふせご</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1545">伏<span class="small">ふ（せる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3095">俛<span class="small">ふ（せる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3113">俯<span class="small">ふ（せる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3116">偃<span class="small">ふ（せる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">ふそ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4796">縒<span class="small">ふぞろ（い）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">ふた</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="064">二<span class="small">ふた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1478">双<span class="small">ふた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3061">弍<span class="small">ふた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1222">弐<span class="small">ふた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5565">盒<span class="small">ふた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6263">盖<span class="small">ふた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6325">貮<span class="small">ふた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3033">葢<span class="small">ふた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5889">貳<span class="small">ふた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18874">㕠<span class="small">ふた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1965">蓋<span class="small">ふた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18720">㒃<span class="small">ふた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6146">雙<span class="small">ふた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23006">䨇<span class="small">ふた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="513">札<span class="small">ふだ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="788">版<span class="small">ふだ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2258">竿<span class="small">ふだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3653">扁<span class="small">ふだ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="596">票<span class="small">ふだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4520">笘<span class="small">ふだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8811">萗<span class="small">ふだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25944">笺<span class="small">ふだ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="881">策<span class="small">ふだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2819">牌<span class="small">ふだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4882">牋<span class="small">ふだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8838">䇳<span class="small">ふだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20069">㮄<span class="small">ふだ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2586">牒<span class="small">ふだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15225">椾<span class="small">ふだ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2041">箋<span class="small">ふだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4166">榜<span class="small">ふだ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2896">篇<span class="small">ふだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4176">槧<span class="small">ふだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2742">諜<span class="small">ふだ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="838">簡<span class="small">ふだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4600">簽<span class="small">ふだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4883">牘<span class="small">ふだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5648">豕<span class="small">ぶた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1523">豚<span class="small">ぶた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8256">豘<span class="small">ぶた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19327">㞘<span class="small">ぶた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1573">又<span class="small">ふたた（び）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13221">叹<span class="small">ふたた（び）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="709">再<span class="small">ふたた（び）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="801">復<span class="small">ふたた（び）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="064">二<span class="small">ふた（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1478">双<span class="small">ふた（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3061">弍<span class="small">ふた（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="432">両<span class="small">ふた（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1222">弐<span class="small">ふた（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6600">两<span class="small">ふた（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18754">㒳<span class="small">ふた（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5840">兩<span class="small">ふた（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6325">貮<span class="small">ふた（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5889">貳<span class="small">ふた（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18874">㕠<span class="small">ふた（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18720">㒃<span class="small">ふた（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6146">雙<span class="small">ふた（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23006">䨇<span class="small">ふた（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6606">丫<span class="small">ふたまた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5565">盒<span class="small">ふたもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5024">衵<span class="small">ふだんぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24552">亵<span class="small">ふだんぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5062">褻<span class="small">ふだんぎ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">ふち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="24011">沷<span class="small">フチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15173">柭<span class="small">フチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22562">䟛<span class="small">フチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14551">嶏<span class="small">フチ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4328">沂<span class="small">ふち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13608">囦<span class="small">ふち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20310">㳂<span class="small">ふち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="829">沿<span class="small">ふち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4332">泓<span class="small">ふち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18675">㐭<span class="small">ふち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2092">眉<span class="small">ふち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25529">浔<span class="small">ふち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1813">秩<span class="small">ふち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1892">俸<span class="small">ふち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5655">渕<span class="small">ふち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5933">渊<span class="small">ふち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15658">渆<span class="small">ふち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20361">㴊<span class="small">ふち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21205">䅇<span class="small">ふち</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2186">淵<span class="small">ふち</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2592">粟<span class="small">ふち</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3020">禄<span class="small">ふち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5556">稍<span class="small">ふち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10522">睂<span class="small">ふち</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5557">稟<span class="small">ふち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5558">禀<span class="small">ふち</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6011">祿<span class="small">ふち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1020">縁<span class="small">ふち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4429">潭<span class="small">ふち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4431">潯<span class="small">ふち</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6453">緣<span class="small">ふち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3512">廩<span class="small">ふち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14714">廪<span class="small">ふち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20471">㶜<span class="small">ふち</span></a></li>
                         <li class="others_kanji onyomi"><a href="15172">柫<span class="small">ブチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16031">炥<span class="small">ブチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19896">㪄<span class="small">ブチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17077">翇<span class="small">ブチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22505">䞞<span class="small">ブチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23294">䭮<span class="small">ブチ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2091">斑<span class="small">ぶち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2829">駁<span class="small">ぶち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4494">駮<span class="small">ぶち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11575">辬<span class="small">ぶち</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">ふつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="6614">乀<span class="small">フツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="803">仏<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14606">巿<span class="small">フツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1260">払<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2886">弗<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10297">甶<span class="small">フツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5741">佛<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9397">芾<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12712">冹<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12750">刜<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19038">㘬<span class="small">フツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1879">沸<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3529">彿<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3551">怫<span class="small">フツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6184">拂<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9419">茀<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13292">咈<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13682">坲<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14410">岪<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14619">帗<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19113">㚕<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24011">沷<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27824">𡶒<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15172">柫<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15173">柭<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15399">氟<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16031">炥<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19896">㪄<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5637">祓<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10023">袚<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10659">砩<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8801">笰<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9021">紱<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9022">紼<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9355">艴<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17077">翇<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22562">䟛<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22505">䞞<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7603">鉘<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9053">綍<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4645">髴<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7344">韍<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14551">嶏<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6923">鮄<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3794">黻<span class="small">フツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23294">䭮<span class="small">フツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="803">仏<span class="small">ブツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2887">勿<span class="small">ブツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5741">佛<span class="small">ブツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9398">芴<span class="small">ブツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14392">岉<span class="small">ブツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15467">沕<span class="small">ブツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19038">㘬<span class="small">ブツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="409">物<span class="small">ブツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20971">䀛<span class="small">ブツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16952">粅<span class="small">ブツ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="354">打<span class="small">ぶ（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13502">嘝<span class="small">ブッシェル</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">ふて</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="26293">肀<span class="small">ふで</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4572">聿<span class="small">ふで</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8815">笔<span class="small">ふで</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3845">毫<span class="small">ふで</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="399">筆<span class="small">ふで</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2259">翰<span class="small">ふで</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">ふと</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4071">蚋<span class="small">ぶと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6495">蜹<span class="small">ぶと</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2261">莞<span class="small">ふとい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26461">萖<span class="small">ふとい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="180">太<span class="small">ふと（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1623">懐<span class="small">ふところ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6091">懷<span class="small">ふところ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="180">太<span class="small">ふと（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="790">肥<span class="small">ふと（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">ふな</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1129">舟<span class="small">ふな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5746">舩<span class="small">ふな</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="175">船<span class="small">ふな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2879">鮒<span class="small">ふな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4134">椈<span class="small">ぶな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26328">舱<span class="small">ふなぐら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4889">艙<span class="small">ふなぐら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1994">舷<span class="small">ふなばた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1994">舷<span class="small">ふなべり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4893">艤<span class="small">ふなよそお（い）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts21">
                    <h3 class="ttl_while">ふね</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1129">舟<span class="small">ふね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4884">舫<span class="small">ふね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5746">舩<span class="small">ふね</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="175">船<span class="small">ふね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4885">舸<span class="small">ふね</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1801">槽<span class="small">ふね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4888">艘<span class="small">ふね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4588">篷<span class="small">ふね</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts22">
                    <h3 class="ttl_while">ふひ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="520">史<span class="small">ふびと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24195">㕜<span class="small">ふびと</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts23">
                    <h3 class="ttl_while">ふま</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1214">踏<span class="small">ふ（まえる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3486">帙<span class="small">ふまき</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts24">
                    <h3 class="ttl_while">ふみ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="075">文<span class="small">ふみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="520">史<span class="small">ふみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="882">冊<span class="small">ふみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5761">册<span class="small">ふみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24195">㕜<span class="small">ふみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="576">典<span class="small">ふみ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2158">郁<span class="small">ふみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="159">書<span class="small">ふみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="333">章<span class="small">ふみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="804">編<span class="small">ふみ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2896">篇<span class="small">ふみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2259">翰<span class="small">ふみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1470">籍<span class="small">ふみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8938">籙<span class="small">ふみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3486">帙<span class="small">ふみづつ（み）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4272">蹂<span class="small">ふみにじ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8459">蹸<span class="small">ふみにじ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4485">轢<span class="small">ふみにじ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4299">躙<span class="small">ふみにじ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4298">躪<span class="small">ふみにじ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts25">
                    <h3 class="ttl_while">ふむ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="5503">迪<span class="small">ふ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5504">廸<span class="small">ふ（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2734">喋<span class="small">ふ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4257">跖<span class="small">ふ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4261">跋<span class="small">ふ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8378">䟦<span class="small">ふ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1786">践<span class="small">ふ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1214">踏<span class="small">ふ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1922">履<span class="small">ふ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4492">駘<span class="small">ふ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6107">踐<span class="small">ふ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4272">蹂<span class="small">ふ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4273">踵<span class="small">ふ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4281">蹈<span class="small">ふ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5432">藉<span class="small">ふ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17847">蹑<span class="small">ふ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4283">蹠<span class="small">ふ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4293">躇<span class="small">ふ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1470">籍<span class="small">ふ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4290">躅<span class="small">ふ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4301">躔<span class="small">ふ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4300">躡<span class="small">ふ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8448">䠱<span class="small">ふ（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts26">
                    <h3 class="ttl_while">ふも</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5180">阯<span class="small">ふもと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4125">梺<span class="small">ふもと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20131">㯟<span class="small">ふもと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2132">麓<span class="small">ふもと</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts27">
                    <h3 class="ttl_while">ふや</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1146">殖<span class="small">ふ（やす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="760">増<span class="small">ふ（やす）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6419">增<span class="small">ふ（やす）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts28">
                    <h3 class="ttl_while">ふゆ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="198">冬<span class="small">ふゆ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15095">昸<span class="small">ふゆ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19968">㫡<span class="small">ふゆ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4071">蚋<span class="small">ぶゆ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6495">蜹<span class="small">ぶゆ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts29">
                    <h3 class="ttl_while">ふよ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4071">蚋<span class="small">ぶよ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6495">蜹<span class="small">ぶよ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts30">
                    <h3 class="ttl_while">ふら</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="610">法<span class="small">フラン</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13062">佱<span class="small">フラン</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20323">㳒<span class="small">フラン</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15975">灋<span class="small">フラン</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts31">
                    <h3 class="ttl_while">ふり</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="24712">凨<span class="small">ふり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7426">凬<span class="small">ふり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7427">凮<span class="small">ふり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="217">風<span class="small">ふり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7428">飌<span class="small">ふり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3889">鰤<span class="small">ぶり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4707">錻<span class="small">ブリキ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7294">鞀<span class="small">ふりつづみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7295">鞉<span class="small">ふりつづみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6579">鼗<span class="small">ふりつづみ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts32">
                    <h3 class="ttl_while">ふる</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="675">旧<span class="small">ふ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7930">夅<span class="small">ふ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="872">降<span class="small">ふ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1153">振<span class="small">ふ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3697">掉<span class="small">ふ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1593">零<span class="small">ふ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18230">霗<span class="small">ふ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6295">舊<span class="small">ふ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25948">筛<span class="small">ふるい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4584">篩<span class="small">ふるい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8870">籭<span class="small">ふるい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="121">古<span class="small">ふる（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="675">旧<span class="small">ふる（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="694">故<span class="small">ふる（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1509">陳<span class="small">ふる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17878">軙<span class="small">ふる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13820">塦<span class="small">ふる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6295">舊<span class="small">ふる（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1153">振<span class="small">ふ（るう）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25324">掷<span class="small">ふ（るう）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25338">摆<span class="small">ふ（るう）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3737">擲<span class="small">ふ（るう）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3738">擺<span class="small">ふ（るう）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3666">抖<span class="small">ふる（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3697">掉<span class="small">ふる（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="843">揮<span class="small">ふる（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25948">筛<span class="small">ふる（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1149">震<span class="small">ふる（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="974">奮<span class="small">ふる（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4584">篩<span class="small">ふる（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8870">籭<span class="small">ふる（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1149">震<span class="small">ふる（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5142">顫<span class="small">ふる（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="121">古<span class="small">ふる（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5677">隹<span class="small">ふるとり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="675">旧<span class="small">ふる（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6295">舊<span class="small">ふる（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9100">緼<span class="small">ふるわた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9099">縕<span class="small">ふるわた</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts33">
                    <h3 class="ttl_while">ふれ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4971">誥<span class="small">ふ（れ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4192">檄<span class="small">ふれぶみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1070">狂<span class="small">ふ（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1195">抵<span class="small">ふ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14923">拞<span class="small">ふ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4830">牴<span class="small">ふ（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1153">振<span class="small">ふ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5577">觝<span class="small">ふ（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1147">触<span class="small">ふ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2175">嬰<span class="small">ふ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6315">觸<span class="small">ふ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14262">孆<span class="small">ふ（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts34">
                    <h3 class="ttl_while">ふろ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5039">袱<span class="small">ふろしき</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts35">
                    <h3 class="ttl_while">ふん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="218">分<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3170">刎<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12402">份<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2842">扮<span class="small">フン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2888">吻<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3229">吩<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5323">芬<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5930">汾<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13656">坆<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13658">坋<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13659">坌<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13966">妢<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14395">岎<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14612">帉<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14721">弅<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19334">㞣<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19624">㤋<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24978">坟<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3544">忿<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4009">枌<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4899">氛<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11314">拚<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11773">肦<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15091">昐<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16007">炃<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20580">㸮<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10014">衯<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16717">砏<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16807">秎<span class="small">フン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="604">粉<span class="small">フン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1548">紛<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9785">蚡<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9786">蚠<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17066">羒<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17076">翂<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8733">酚<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12115">棻<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13435">喯<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15205">梤<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17144">脗<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17635">訜<span class="small">フン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1880">雰<span class="small">フン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2889">焚<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5484">賁<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7562">鈖<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9570">葐<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12114">棼<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18950">㖹<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20506">㷊<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25982">粪<span class="small">フン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1866">頒<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17310">蒶<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18323">馚<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12643">僨<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23307">䭻<span class="small">フン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1261">噴<span class="small">フン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1547">墳<span class="small">フン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1881">憤<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4438">濆<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6906">魵<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9679">蕡<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16441">獖<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18204">隫<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18468">鳻<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20135">㯣<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23974">幩<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25840">瞓<span class="small">フン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="974">奮<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11919">膹<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15285">橨<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18582">黺<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20246">㱵<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24057">燌<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24058">燓<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2890">糞<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6621">鼢<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7493">餴<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20909">㿎<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6580">鼖<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9219">羵<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8272">豶<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8541">轒<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23183">䫞<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15957">瀵<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18136">鐼<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6581">䩿<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7506">饙<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18329">馩<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21263">䆏<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7073">鱝<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7227">䴅<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7277">黂<span class="small">フン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23205">䫶<span class="small">フン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="075">文<span class="small">ブン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="218">分<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13167">勽<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3170">刎<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13045">伆<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5930">汾<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9399">芠<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10958">忟<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11296">抆<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12683">免<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13258">呅<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13953">妏<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13966">妢<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14612">帉<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14760">彣<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19334">㞣<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24008">汶<span class="small">ブン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1576">免<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10125">玟<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10957">忞<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12895">歾<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13269">呡<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16007">炃<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16010">炆<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17131">肳<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20580">㸮<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16807">秎<span class="small">ブン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1288">紋<span class="small">ブン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1621">蚊<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4517">笏<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4750">紊<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9487">莬<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9787">蚉<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17066">羒<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19256">㝃<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19472">㡈<span class="small">ブン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="417">問<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14949">捪<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15205">梤<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15655">渂<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16507">珳<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17144">脗<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18938">㖧<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20344">㳷<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7994">雯<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17281">葂<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18959">㗃<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19809">㨉<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21807">䐇<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9054">絻<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17310">蒶<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21744">䎹<span class="small">ブン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="219">聞<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5697">馼<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21748">䎽<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23441">䰚<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18421">魰<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18468">鳻<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18469">鳼<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18476">鴍<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20135">㯣<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7886">閿<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7887">閺<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15285">橨<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17485">螡<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18480">鴖<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9788">蟁<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18179">闅<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18593">鼤<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20909">㿎<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10251">璺<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23183">䫞<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22188">䘇<span class="small">ブン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23205">䫶<span class="small">ブン</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10051">裩<span class="small">ふんどし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5052">褌<span class="small">ふんどし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="669">規<span class="small">ぶんまわし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8038">䂓<span class="small">ぶんまわし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8039">槼<span class="small">ぶんまわし</span></a></li>
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