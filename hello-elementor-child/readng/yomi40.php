<?php
/*
 * Template Name: Yomi40
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
               <h1 class="ttl_main">音訓検索「り」</h1>
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
               <p>「り」から始まる読み方をする漢字です。</p>
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
                              <option value="yomi39">ら</option>
                              <option value="#" selected>り</option>
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
                         <li id="parts1_menu"><a href="#parts1">り</a></li>
                         <li id="parts2_menu"><a href="#parts2">りき</a></li>
                         <li id="parts3_menu"><a href="#parts3">りく</a></li>
                         <li id="parts4_menu"><a href="#parts4">りち</a></li>
                         <li id="parts5_menu"><a href="#parts5">りつ</a></li>
                         <li id="parts6_menu"><a href="#parts6">りや</a></li>
                         <li id="parts7_menu"><a href="#parts7">りゆ</a></li>
                         <li id="parts8_menu"><a href="#parts8">りよ</a></li>
                         <li id="parts9_menu"><a href="#parts9">りん</a></li>
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
                    <h3 class="ttl_while">り</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="1586">吏<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12735">刕<span class="small">リ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="237">里<span class="small">リ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="624">利<span class="small">リ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2967">李<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11940">杝<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20560">㸚<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23889">丽<span class="small">リ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1592">厘<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3097">俚<span class="small">リ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3098">俐<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5349">茘<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9458">荔<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14439">峛<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19644">㤦<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25121">峢<span class="small">リ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2966">哩<span class="small">リ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2968">栗<span class="small">リ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2969">浬<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2970">狸<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3576">悧<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5356">莅<span class="small">リ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5369">莉<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11095">悝<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12739">剓<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13359">唎<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14030">娌<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14449">峲<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15573">浰<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15599">涖<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16390">猁<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16494">珕<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16813">秜<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17230">荲<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22955">䧉<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25056">娳<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26879">㛤<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26953">逦<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26972">郦<span class="small">リ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="238">理<span class="small">リ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2079">梨<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4833">犁<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10821">离<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12080">梸<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12081">梩<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14103">婯<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14835">悡<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16513">琍<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16960">粚<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17257">菞<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22781">䣫<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22824">䤚<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26316">脷<span class="small">リ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1923">痢<span class="small">リ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2971">裡<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4832">犂<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4953">詈<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12079">棃<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13436">喱<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19673">㥎<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20868">㾖<span class="small">リ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="999">裏<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4059">蜊<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9336">艃<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9491">蒞<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12045">㮚<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12738">剺<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16666">睝<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16897">筣<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20281">㲠<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20374">㴝<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21219">䅘<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21321">䇐<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21567">䋥<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22131">䖽<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24307">䔆<span class="small">リ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2123">璃<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4422">漓<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5892">貍<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14185">嫠<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14280">孷<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21489">䊍<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21579">䋱<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22018">䔧<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22132">䖿<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26498">蓠<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27101">酾<span class="small">リ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1922">履<span class="small">リ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3760">黎<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7253">䴡<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7679">鋰<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9657">蔾<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15262">樆<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15384">氂<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16332">犛<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18053">鋫<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19725">㦒<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20529">㷰<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5593">罹<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10070">褵<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18058">錅<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21170">䄜<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21248">䅻<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23646">䵓<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6835">鬁<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9124">縭<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16929">篱<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17171">膦<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17501">蟍<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24127">薶<span class="small">リ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1302">離<span class="small">リ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2972">鯉<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4881">釐<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8763">醨<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13575">嚟<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17695">謧<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23476">䱘<span class="small">リ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1309">麗<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7175">鵹<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9961">蟸<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10255">瓈<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11572">斄<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18443">鯬<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23626">䴻<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6557">黧<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4112">蠡<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24135">蠫<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8726">酈<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9738">蘺<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14267">孋<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14718">廲<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15980">灕<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22082">䕻<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24966">囄<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3761">黐<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8626">邐<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12327">欐<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12818">劙<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18146">鑗<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18762">㒿<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20172">㰚<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10101">䙰<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16704">矖<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16844">穲<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20919">㿛<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21672">䍦<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4611">籬<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9154">纚<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16575">瓥<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8058">䚕<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8779">釃<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20762">㼖<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4512">驪<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7238">鸝<span class="small">リ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27815">𣡼<span class="small">リ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">りき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="077">力<span class="small">リキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3068">仂<span class="small">リキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4001">朸<span class="small">リキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17779">赲<span class="small">リキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4585">篥<span class="small">リキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20136">㯤<span class="small">リキ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="077">力<span class="small">りき（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">りく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="080">六<span class="small">リク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13684">坴<span class="small">リク</span></a></li>
                         <li class="others_kanji onyomi"><a href="25541">陆<span class="small">リク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13163">勎<span class="small">リク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18773">㓐<span class="small">リク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="625">陸<span class="small">リク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5979">淕<span class="small">リク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19182">㛬<span class="small">リク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3195">勠<span class="small">リク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10860">稑<span class="small">リク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12601">僇<span class="small">リク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12802">剹<span class="small">リク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19832">㨨<span class="small">リク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5401">蓼<span class="small">リク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3651">戮<span class="small">リク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17834">踛<span class="small">リク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19850">㩅<span class="small">リク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22670">䡜<span class="small">リク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10882">穋<span class="small">リク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6992">鯥<span class="small">リク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18505">鵱<span class="small">リク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20959">䀊<span class="small">リク</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">りち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="14331">寽<span class="small">リチ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1000">律<span class="small">リチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22650">䡃<span class="small">リチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13342">哷<span class="small">リチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13814">塛<span class="small">リチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14989">搮<span class="small">リチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18976">㗚<span class="small">リチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19401">㟳<span class="small">リチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21990">䔁<span class="small">リチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22012">䔞<span class="small">リチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23220">䬆<span class="small">リチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18530">鷅<span class="small">リチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18567">麜<span class="small">リチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19442">㠥<span class="small">リチ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">りつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="078">立<span class="small">リツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14331">寽<span class="small">リツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1000">律<span class="small">リツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22650">䡃<span class="small">リツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2968">栗<span class="small">リツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13342">哷<span class="small">リツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="820">率<span class="small">リツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2973">葎<span class="small">リツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12584">傈<span class="small">リツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12719">凓<span class="small">リツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14499">嵂<span class="small">リツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2124">慄<span class="small">リツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12045">㮚<span class="small">リツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13814">塛<span class="small">リツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14989">搮<span class="small">リツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15738">溧<span class="small">リツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18976">㗚<span class="small">リツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19401">㟳<span class="small">リツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21990">䔁<span class="small">リツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10208">瑮<span class="small">リツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22012">䔞<span class="small">リツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8866">箻<span class="small">リツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11900">膟<span class="small">リツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4585">篥<span class="small">リツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23220">䬆<span class="small">リツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9125">繂<span class="small">リツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13003">卛<span class="small">リツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18530">鷅<span class="small">リツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18567">麜<span class="small">リツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19442">㠥<span class="small">リツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27815">𣡼<span class="small">リツ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="078">立<span class="small">リットル</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16863">竔<span class="small">リットル</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">りや</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="24743">历<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24783">呖<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24976">坜<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4617">珞<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16725">砳<span class="small">リャク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="821">略<span class="small">リャク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2974">掠<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6260">畧<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20980">䀩<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21092">䂮<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13197">厤<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18964">㗉<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12889">厯<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17297">蒚<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18714">㑼<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21996">䔉<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22355">䛚<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22760">䣓<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="25929">稤<span class="small">リャク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="635">歴<span class="small">リャク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1311">暦<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15019">撂<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19996">㬏<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24972">圙<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17472">蝷<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19848">㨼<span class="small">リャク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6440">曆<span class="small">リャク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6442">歷<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20531">㷴<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18814">㔏<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20744">㻺<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21605">䌎<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3739">擽<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13108">儮<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11514">攊<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13576">嚦<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13884">壢<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20685">㺡<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16257">爏<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16570">瓑<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20249">㱹<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21050">䁻<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17050">纅<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21671">䍥<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23439">䰘<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17629">觻<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21692">䍽<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22550">䟏<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6048">轣<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17728">讈<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22551">䟐<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20919">㿛<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18459">鱳<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18245">靋<span class="small">リャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22823">䤙<span class="small">リャク</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">りゆ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="078">立<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12811">刘<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14345">尥<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14346">尦<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18856">㕇<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20312">㳅<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20816">㽖<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24010">沠<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24183">㐬<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5332">苙<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5951">畄<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13896">备<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14408">岦<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16588">畂<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18896">㕸<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19518">㡻<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19774">㧕<span class="small">リュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1924">柳<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10138">珋<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11599">斿<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12014">栁<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15508">泵<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19103">㚅<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20485">㶯<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25524">浏<span class="small">リュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="434">流<span class="small">リュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="822">留<span class="small">リュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1925">竜<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10662">砬<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19051">㙀<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22960">䧏<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24269">䄂<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25385">桞<span class="small">リュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1303">粒<span class="small">リュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1587">隆<span class="small">リュウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2977">琉<span class="small">リュウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2978">笠<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4833">犁<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9228">翏<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10321">㽞<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11612">旈<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12013">桺<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20347">㳺<span class="small">リュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1926">硫<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4398">游<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4832">犂<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7945">隆<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10320">畱<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15712">湰<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24136">裗<span class="small">リュウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2976">溜<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3783">旒<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5947">鉚<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7607">鉝<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14163">媹<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14524">嵧<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14699">廇<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17303">蒥<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18220">雴<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19067">㙙<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19832">㨨<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21321">䇐<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22129">䖻<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24120">蓅<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25015">塯<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27790">𠺕<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4164">榴<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8611">遛<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9078">綹<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18311">飹<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19227">㜢<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24379">漻<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25656">熘<span class="small">リュウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2975">劉<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5241">瘤<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6170">嶐<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6244">澑<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6741">駠<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9185">罶<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10209">瑬<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15791">漋<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16202">熮<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16756">磂<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19078">㙧<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19291">㝫<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19727">㦕<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19850">㩅<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20738">㻲<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27125">鋶<span class="small">リュウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5675">龍<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7107">鴗<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10331">疁<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12196">橊<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15289">橮<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19496">㡣<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22155">䗜<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23646">䵓<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5621">窿<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6738">駵<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9919">蟉<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10418">癅<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10445">癃<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21134">䃧<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22433">䝀<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26859">蹓<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3311">嚠<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3990">霤<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4446">瀏<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7771">鎏<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7772">鎦<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9186">羀<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11212">懰<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14256">嬼<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17379">藰<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22311">䚧<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23475">䱖<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4725">鏐<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5291">餾<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7449">飀<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14793">徿<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18214">雡<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6739">騮<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7445">飂<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7773">鐂<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8020">霳<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16943">籕<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18409">鬸<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23703">䶘<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5723">鰡<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6679">龒<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7200">鶹<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7448">飅<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21454">䉧<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23439">䰘<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24139">襱<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6740">驑<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7210">鷚<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18536">鷑<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6642">䶉<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17776">贚<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7452">䬟<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18391">驡<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23368">䮾<span class="small">リュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24177">鸗<span class="small">リュウ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">りよ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="12396">吕<span class="small">リョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2128">呂<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6532">沪<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14672">庐<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27798">𡉴<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24577">侣<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24980">垆<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26527">虏<span class="small">リョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2125">侶<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14935">挔<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26304">胪<span class="small">リョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="431">旅<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8663">郘<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11604">捛<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19158">㛎<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20039">㭚<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4124">梠<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24083">祣<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25322">掳<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10853">稆<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20866">㾔<span class="small">リョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1927">虜<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4767">絽<span class="small">リョ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6363">虜<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25416">榈<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25573">滤<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4243">膂<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6778">馿<span class="small">リョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1304">慮<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3958">閭<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7680">鋁<span class="small">リョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="639">録<span class="small">リョ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6462">錄<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11489">擄<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11890">膐<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23319">䮉<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12661">儢<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12914">勴<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4449">濾<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9709">藘<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9710">䕡<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18834">㔧<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3513">廬<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4204">櫚<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12301">櫖<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13882">壚<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16253">爈<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16559">璷<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19439">㠠<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4317">臚<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10898">穭<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15128">曥<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20250">㱺<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23352">䮫<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4736">鑢<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22889">䥨<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4516">驢<span class="small">リョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23437">䰕<span class="small">リョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1588">了<span class="small">リョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="632">令<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13218">另<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19262">㝋<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26932">辽<span class="small">リョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="432">両<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8005">㚑<span class="small">リョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="627">良<span class="small">リョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2997">伶<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6600">两<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8006">灵<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12753">刢<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18754">㒳<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21177">䄦<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25806">疗<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2986">苓<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5840">兩<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7126">䑠<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12462">佬<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13272">呤<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13277">呬<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13692">坽<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13899">夌<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13992">姈<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16019">炓<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16364">狑<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18185">阾<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19512">㡵<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19518">㡻<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27750">𠈓<span class="small">リョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2979">亮<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12495">俍<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16035">炩<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20585">㸳<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24584">俩<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27562">䒿<span class="small">リョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="629">料<span class="small">リョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1925">竜<span class="small">リョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2980">凌<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3115">倆<span class="small">リョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5745">凉<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7527">釕<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11096">悢<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12504">倞<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12528">倰<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13339">哴<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14776">徎<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16724">砱<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17542">袊<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18826">㔝<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20857">㾉<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21473">䉼<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24810">唡<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24814">唥<span class="small">リョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1589">猟<span class="small">リョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1590">陵<span class="small">リョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1930">涼<span class="small">リョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2974">掠<span class="small">リョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2982">梁<span class="small">リョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2987">菱<span class="small">リョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3462">崚<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4856">聆<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4857">聊<span class="small">リョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5128">羚<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9228">翏<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11118">惊<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11119">㥄<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11391">掕<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11392">掚<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13403">啢<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14064">娽<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14072">婈<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14689">庱<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15641">淩<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16512">琌<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16986">紷<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18942">㖫<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21701">䎆<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21969">䓣<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24997">堎<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25396">棂<span class="small">リョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="626">量<span class="small">リョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2983">椋<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3285">喨<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11702">晾<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11855">脼<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12122">棱<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14342">尞<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14853">愣<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15717">湸<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17814">跉<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20233">㱥<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20598">㹁<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20869">㾗<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20990">䀶<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22969">䧙<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27497">䠲<span class="small">リョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2984">稜<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4155">楞<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4473">輌<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5047">裲<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5265">粱<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6275">粮<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10574">睖<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10698">碐<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10802">祾<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17115">聗<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17565">裬<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19067">㙙<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21000">䁁<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25651">煷<span class="small">リョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="628">漁<span class="small">リョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="823">領<span class="small">リョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1929">僚<span class="small">リョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2985">綾<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3435">寥<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3507">廖<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4268">踉<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5401">蓼<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6298">蔆<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8705">鄝<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9079">緉<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9528">䔖<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9866">蜽<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11169">憀<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11891">膋<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14536">嵺<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17009">綡<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18802">㔀<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19406">㟹<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20786">㼲<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21372">䈊<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22417">䜮<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23303">䭷<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24379">漻<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25019">墚<span class="small">リョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1594">霊<span class="small">リョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1928">寮<span class="small">リョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2988">諒<span class="small">リョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2989">遼<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3723">撩<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4472">輛<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8516">輘<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8517">輬<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11183">憭<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11567">敹<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12225">樑<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13515">嘹<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14206">嫽<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14559">嶚<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14560">嶛<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16202">熮<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16450">獠<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16858">窲<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18343">駖<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19080">㙩<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22477">䝶<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22595">䠃<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22725">䢧<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22797">䣼<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23219">䬅<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23377">䯍<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24072">獦<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25204">巤<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26902">㞠<span class="small">リョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4933">燎<span class="small">リョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5675">龍<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5684">暸<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5948">鍄<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7713">錂<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10230">璙<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10431">瘳<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12261">橑<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16859">窷<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17173">膫<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17352">蕶<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18562">鹷<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19496">㡣<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20260">㲆<span class="small">リョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1305">療<span class="small">リョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2126">瞭<span class="small">リョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2981">嶺<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4798">繆<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8004">霛<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9919">蟉<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13105">儠<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16861">竂<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18356">駺<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20139">㯪<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20442">㵳<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21418">䉁<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22055">䕘<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22433">䝀<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23090">䩫<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26028">魉<span class="small">リョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1591">糧<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3954">魎<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4806">繚<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5857">獵<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8003">䨩<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8322">賿<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9938">蟟<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9939">蟧<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11515">擸<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14375">屪<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14715">廫<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16935">簝<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17695">謧<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17732">豂<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17850">蹘<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18565">麍<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23336">䮚<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26514">藔<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3357">壟<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4725">鏐<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5198">隴<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6858">㲱<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6993">鯪<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8536">轑<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8623">邋<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14793">徿<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16337">犣<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18162">镽<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20151">㯿<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21624">䌢<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22399">䜍<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22461">䝤<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23937">壠<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24060">爉<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25666">爎<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26860">蹽<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4730">鐐<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7445">飂<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14259">孁<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16259">爒<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18291">顟<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21052">䁽<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21144">䃳<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23004">䨅<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4211">櫺<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6679">龒<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6807">髎<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7450">飉<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16702">矓<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19930">㪮<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23065">䩍<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24139">襱<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6857">鬛<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8455">躐<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17522">蠬<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22421">䜲<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22449">䝓<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3837">鷯<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8458">躘<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17776">贚<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6346">靈<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23117">䪉<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4653">鬣<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7079">鱲<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18391">驡<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23368">䮾<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19744">㦭<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24177">鸗<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12317">欞<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16274">爧<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21176">䄥<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22296">䚖<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22699">䡿<span class="small">リョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23457">䰱<span class="small">リョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="077">力<span class="small">リョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3068">仂<span class="small">リョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13222">叻<span class="small">リョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14379">屴<span class="small">リョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4001">朸<span class="small">リョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17779">赲<span class="small">リョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9529">菉<span class="small">リョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15639">淥<span class="small">リョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="25552">渌<span class="small">リョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8597">逯<span class="small">リョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15409">氯<span class="small">リョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19912">㪖<span class="small">リョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19987">㫽<span class="small">リョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21804">䐂<span class="small">リョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18461">鳨<span class="small">リョク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="433">緑<span class="small">リョク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6424">綠<span class="small">リョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8753">醁<span class="small">リョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17805">趢<span class="small">リョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20299">㲶<span class="small">リョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22280">䚄<span class="small">リョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22591">䟿<span class="small">リョク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="639">録<span class="small">リョク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6462">錄<span class="small">リョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20136">㯤<span class="small">リョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6746">騄<span class="small">リョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23477">䱚<span class="small">リョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8938">籙<span class="small">リョク</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">りん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="7969">厸<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24557">仑<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24567">伦<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3230">吝<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15444">汮<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24969">囵<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25267">抡<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25507">沦<span class="small">リン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="079">林<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3090">侖<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10119">玪<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18675">㐭<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26968">邻<span class="small">リン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1592">厘<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11097">恡<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18904">㖁<span class="small">リン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1925">竜<span class="small">リン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1931">倫<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3577">悋<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16705">矝<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24702">冧<span class="small">リン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2990">淋<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4385">淪<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6299">菻<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11117">惏<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11120">惀<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11393">掄<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13391">啉<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13622">圇<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13754">埨<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14464">崊<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17252">菕<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18194">陯<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19280">㝝<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19807">㨆<span class="small">リン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2992">琳<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6216">棆<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15098">晽<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16103">焛<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17154">腀<span class="small">リン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1934">鈴<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5234">痳<span class="small">リン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5557">稟<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5558">禀<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16744">碄<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16749">碖<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24096">粦<span class="small">リン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2985">綾<span class="small">リン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4777">綸<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8846">箖<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9077">綝<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9341">䑳<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13029">亃<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17100">耣<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17448">蜦<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17449">蜧<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21365">䈁<span class="small">リン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="630">輪<span class="small">リン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3163">凜<span class="small">リン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3164">凛<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4846">醂<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8967">粼<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12625">僯<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17833">踚<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18344">駗<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18804">㔂<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20518">㷠<span class="small">リン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1306">隣<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3512">廩<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3632">懍<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3988">霖<span class="small">リン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5675">龍<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6333">鄰<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6926">魿<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7714">錀<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11195">懔<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11490">撛<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14714">廪<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15877">澟<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16446">獜<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18174">閵<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19496">㡣<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23965">嶙<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24028">潾<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2991">燐<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8620">遴<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10231">璘<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11594">斴<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12260">橉<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12284">檁<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12285">檩<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15118">暽<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23171">䫐<span class="small">リン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1001">臨<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7249">麐<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10333">疄<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10610">瞵<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10752">磷<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16584">甐<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16618">癛<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25824">癝<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5441">藺<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6994">鯩<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9722">䕲<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17040">繗<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17095">翷<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22171">䗲<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22732">䢯<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25605">瀮<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8459">蹸<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8535">轔<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13885">壣<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22290">䚏<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24329">䚬<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6679">龒<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7822">鏻<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15958">瀶<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21460">䉮<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23199">䫰<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4299">躙<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6774">驎<span class="small">リン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2993">鱗<span class="small">リン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2994">麟<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18298">顲<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23367">䮼<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4298">躪<span class="small">リン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8544">轥<span class="small">リン</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2990">淋<span class="small">りんびょう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5234">痳<span class="small">りんびょう</span></a></li>
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