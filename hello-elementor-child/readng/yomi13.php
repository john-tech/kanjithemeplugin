<?php
/*
 * Template Name: Yomi13
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
               <h1 class="ttl_main">音訓検索「す」</h1>
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
               <p>「す」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>す</option>
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
                         <li id="parts1_menu"><a href="#parts1">す</a></li>
                         <li id="parts2_menu"><a href="#parts2">すあ</a></li>
                         <li id="parts3_menu"><a href="#parts3">すい</a></li>
                         <li id="parts4_menu"><a href="#parts4">すう</a></li>
                         <li id="parts5_menu"><a href="#parts5">すえ</a></li>
                         <li id="parts6_menu"><a href="#parts6">すか</a></li>
                         <li id="parts7_menu"><a href="#parts7">すき</a></li>
                         <li id="parts8_menu"><a href="#parts8">すく</a></li>
                         <li id="parts9_menu"><a href="#parts9">すけ</a></li>
                         <li id="parts10_menu"><a href="#parts10">すこ</a></li>
                         <li id="parts11_menu"><a href="#parts11">すさ</a></li>
                         <li id="parts12_menu"><a href="#parts12">すし</a></li>
                         <li id="parts13_menu"><a href="#parts13">すす</a></li>
                         <li id="parts14_menu"><a href="#parts14">すそ</a></li>
                         <li id="parts15_menu"><a href="#parts15">すた</a></li>
                         <li id="parts16_menu"><a href="#parts16">すつ</a></li>
                         <li id="parts17_menu"><a href="#parts17">すて</a></li>
                         <li id="parts18_menu"><a href="#parts18">すな</a></li>
                         <li id="parts19_menu"><a href="#parts19">すね</a></li>
                         <li id="parts20_menu"><a href="#parts20">すの</a></li>
                         <li id="parts21_menu"><a href="#parts21">すは</a></li>
                         <li id="parts22_menu"><a href="#parts22">すへ</a></li>
                         <li id="parts23_menu"><a href="#parts23">すほ</a></li>
                         <li id="parts24_menu"><a href="#parts24">すま</a></li>
                         <li id="parts25_menu"><a href="#parts25">すみ</a></li>
                         <li id="parts26_menu"><a href="#parts26">すむ</a></li>
                         <li id="parts27_menu"><a href="#parts27">すめ</a></li>
                         <li id="parts28_menu"><a href="#parts28">すも</a></li>
                         <li id="parts29_menu"><a href="#parts29">する</a></li>
                         <li id="parts30_menu"><a href="#parts30">すれ</a></li>
                         <li id="parts31_menu"><a href="#parts31">すわ</a></li>
                         <li id="parts32_menu"><a href="#parts32">すん</a></li>
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
                    <h3 class="ttl_while">す</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="027">子<span class="small">ス</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="317">主<span class="small">ス</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="523">司<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="13140">刍<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="19261">㝊<span class="small">ス</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="316">守<span class="small">ス</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="324">州<span class="small">ス</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1125">朱<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="19251">㜽<span class="small">ス</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1434">寿<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="26390">㑇<span class="small">ス</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="530">周<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="5693">鼡<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="19362">㟃<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="20297">㲴<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="13718">垨<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="26818">㚇<span class="small">ス</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="758">素<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="5357">芻<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="13072">倊<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="18868">㕖<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="2474">笥<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="3121">偬<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="9507">菆<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="14068">婃<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="17082">翑<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="19903">㪌<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="21869">䑕<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="22423">䜴<span class="small">ス</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2031">須<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="12109">棷<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="13791">堫<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="14637">幁<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="14695">廀<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="14966">揍<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="15208">棇<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="16111">焧<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="16411">猣<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="18709">㑳<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="19477">㡏<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="19606">㣭<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="19680">㥖<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="22123">䖲<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="23831">媭<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="24290">䐋<span class="small">ス</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="168">数<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="2549">鼠<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="5358">蒭<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="13093">傯<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="14154">媰<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="16742">碂<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="17312">蓃<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="18210">雏<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="18417">魝<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="20513">㷓<span class="small">ス</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6156">壽<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="12585">僳<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="15001">摗<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="15798">漗<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="16326">犓<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="18627">夀<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="19539">㢔<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="20099">㮲<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="21016">䁓<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="21667">䍟<span class="small">ス</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2500">諏<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="6202">數<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="14212">嬃<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="14886">憽<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="15382">氀<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="15906">濍<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="16189">熜<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="17091">翪<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="17470">蝬<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="21241">䅳<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="21392">䈡<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="21397">䈦<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="21733">䎫<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="22145">䗏<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="4555">麈<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="9896">螋<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="15302">檧<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="16235">燪<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="21895">䑼<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="22244">䙕<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="17500">蟌<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="18355">駷<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="20145">㯶<span class="small">ス</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2611">雛<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="17045">繱<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="17694">謥<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="22688">䡯<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="23094">䩱<span class="small">ス</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2610">蘇<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="5983">蘓<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="8928">䉤<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="21452">䉥<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="4604">籔<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="7148">鶵<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="22448">䝒<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="23430">䰌<span class="small">ス</span></a></li>
                         <li class="others_kanji onyomi"><a href="4651">鬚<span class="small">ス</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="324">州<span class="small">す</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2512">洲<span class="small">す</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27877">𣴀<span class="small">す</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2443">栖<span class="small">す</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4519">笊<span class="small">す</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="555">巣<span class="small">す</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6434">巢<span class="small">す</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12099">捿<span class="small">す</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1704">酢<span class="small">す</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2626">棲<span class="small">す</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="715">酸<span class="small">す</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9637">蔶<span class="small">す</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4181">樔<span class="small">す</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4845">醋<span class="small">す</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8764">䤈<span class="small">す</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4592">簀<span class="small">す</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4649">鬆<span class="small">す</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3007">簾<span class="small">す</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4849">醯<span class="small">す</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27693">簾<span class="small">す</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="033">手<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25026">头<span class="small">ズ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="166">図<span class="small">ズ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="382">豆<span class="small">ズ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2614">杜<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5739">亊<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6701">叓<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6702">㕝<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13654">坄<span class="small">ズ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="309">事<span class="small">ズ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="319">受<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14677">庝<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18768">㓊<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19461">㠽<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19628">㤏<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24970">图<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13322">哃<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14001">姛<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19551">㢥<span class="small">ズ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="578">徒<span class="small">ズ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1201">途<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5361">荳<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14684">庩<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15566">浢<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15577">浵<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17951">郖<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19526">㢄<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19650">㤱<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20557">㸗<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22749">䣄<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27826">𡷠<span class="small">ズ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2615">逗<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6334">酘<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12360">啚<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15199">梌<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15377">毭<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16600">痋<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18792">㓱<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21060">䂈<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21206">䅊<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21272">䆚<span class="small">ズ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2612">厨<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16734">硧<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17273">萮<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18251">靯<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19477">㡏<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19535">㢏<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20775">㼧<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21156">䄈<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24232">㭸<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15351">歈<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17302">蒤<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17777">赨<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20078">㮔<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21358">䇺<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22494">䞒<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23246">䬦<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5884">圖<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13166">勭<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14864">慒<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18865">㕑<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18982">㗢<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22000">䔑<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22588">䟻<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23524">䲧<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23925">圗<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2613">廚<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15853">潳<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19420">㠉<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21245">䅷<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22769">䣝<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24098">緰<span class="small">ズ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="167">頭<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16334">犝<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20795">㼻<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22040">䕆<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22103">䖘<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22805">䤅<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18231">霘<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20799">㼿<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24368">䳋<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23471">䱏<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18507">鵵<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22076">䕱<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18532">鷋<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23725">䶱<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24316">䕺<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16266">爜<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23360">䮵<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18547">鷵<span class="small">ズ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23592">䴀<span class="small">ズ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="600">不<span class="small">ず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2886">弗<span class="small">ず</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">すあ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4263">跣<span class="small">すあし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4267">跿<span class="small">すあし</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">すい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="6025">夊<span class="small">スイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="042">水<span class="small">スイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="035">出<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14609">帅<span class="small">スイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="169">西<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14387">岀<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17201">芕<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19345">㞮<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21917">䒘<span class="small">スイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1158">吹<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3581">忰<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13174">卤<span class="small">スイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="917">垂<span class="small">スイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1456">炊<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5677">隹<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10104">卥<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15470">沝<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16360">狋<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23809">剂<span class="small">スイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1770">帥<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10351">㽷<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10385">疩<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15515">洅<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17415">虽<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24187">㒸<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24214">㢴<span class="small">スイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1109">剤<span class="small">スイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1455">粋<span class="small">スイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1458">衰<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2617">翆<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5638">祟<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5966">埀<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9062">紣<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9475">荽<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9476">荾<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11346">挼<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12512">倕<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13193">厜<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14044">娞<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15582">浽<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17238">莏<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22958">䧌<span class="small">スイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="731">術<span class="small">スイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="820">率<span class="small">スイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="916">推<span class="small">スイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1460">酔<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3460">崔<span class="small">スイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3525">彗<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3580">悴<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3694">捶<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5190">陲<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5376">萃<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9509">萑<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10541">眭<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13927">奞<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14059">娷<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14469">崒<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16879">笖<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17254">菙<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23962">崪<span class="small">スイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1457">遂<span class="small">スイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2063">椎<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3591">惴<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9553">葰<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11845">脽<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11846">脺<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12098">棰<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12101">椊<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13624">圌<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19684">㥞<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20054">㭰<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20070">㮅<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20219">㱖<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20372">㴚<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21212">䅑<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22274">䙾<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24385">祱<span class="small">スイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1769">睡<span class="small">スイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2620">瑞<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4766">綏<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5236">瘁<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5579">觜<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10565">睢<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10569">睟<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15221">椯<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15766">滖<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16158">煫<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17979">酨<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19692">㥨<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20727">㻟<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21218">䅗<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21223">䅜<span class="small">スイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2616">翠<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4177">榱<span class="small">スイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5849">粹<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8744">酻<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8836">箠<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9061">綷<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9618">蔧<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9623">蓷<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12276">槜<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13477">嗺<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14186">嫢<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14548">嶉<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14549">嶊<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20285">㲤<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21650">䍋<span class="small">スイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1459">穂<span class="small">スイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2055">誰<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4311">膵<span class="small">スイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6335">醉<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8161">誶<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8304">賥<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8349">趡<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16194">熣<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17830">踓<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17836">踤<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17982">醀<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20129">㯜<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20942">㿷<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22032">䔹<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22033">䔺<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22998">䧽<span class="small">スイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2618">錘<span class="small">スイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2619">錐<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5196">隧<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6062">劑<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7990">嶲<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14228">嬘<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15896">澻<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15902">濉<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16218">燊<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20430">㵦<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22049">䕑<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22610">䠔<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24278">䆳<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4581">雖<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4935">燧<span class="small">スイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6131">穗<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7402">顇<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8890">篲<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10238">璲<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12275">檇<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13556">噿<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15917">濢<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20745">㻽<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24002">檖<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24254">㸂<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4500">騅<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5535">邃<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7988">巂<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7989">雟<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10084">襚<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10247">璻<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10890">穟<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11922">臎<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21428">䉌<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22392">䜅<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23330">䮔<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24358">䭉<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24386">禭<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7166">鵻<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9142">繸<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11615">旞<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22402">䜐<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23566">䳠<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23567">䳡<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24040">瀡<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12277">㰎<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16568">瓍<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17718">譢<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18124">鐆<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22878">䥙<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23426">䰈<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24335">䡵<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7828">鐩<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13003">卛<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14264">孈<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18615">龡<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21259">䆊<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23690">䶆<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15333">欈<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18269">韢<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8022">靃<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17052">纗<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23727">䶴<span class="small">スイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24365">䭨<span class="small">スイ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1704">酢<span class="small">す（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="715">酸<span class="small">す（い）</span></a></li>
                         <li class="others_kanji onyomi"><a href="17219">苼<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6339">陏<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19786">㧫<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21188">䄲<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24187">㒸<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12512">倕<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13193">厜<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12066">桵<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14059">娷<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17254">菙<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19567">㢻<span class="small">ズイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1461">随<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3591">惴<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5191">隋<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10292">甤<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10978">惢<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13624">圌<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15716">湷<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20068">㮃<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20219">㱖<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20372">㴚<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21212">䅑<span class="small">ズイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2620">瑞<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13135">凗<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19692">㥨<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20727">㻟<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21223">䅜<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21989">䔀<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24151">遀<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9066">緌<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2621">蕊<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2622">蕋<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9649">蕤<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15022">撋<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20129">㯜<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22032">䔹<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22033">䔺<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5196">隧<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6332">隨<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12240">橤<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14228">嬘<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15896">澻<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18066">錗<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21502">䊚<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23262">䬽<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24341">䢫<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6290">膸<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11505">擩<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20745">㻽<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23230">䬐<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24002">檖<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9134">繠<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21428">䉌<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24386">禭<span class="small">ズイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1462">髄<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2623">蘂<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17383">蘃<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23390">䯝<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23566">䳠<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16568">瓍<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18124">鐆<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24335">䡵<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21259">䆊<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18139">鑆<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18269">韢<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5764">髓<span class="small">ズイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24365">䭨<span class="small">ズイ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4091">螟<span class="small">ずいむし</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">すう</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="13140">刍<span class="small">スウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1771">枢<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27100">㤘<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5357">芻<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16628">皱<span class="small">スウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1772">崇<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5189">陬<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5380">菘<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8666">郰<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14462">崈<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21553">䋓<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23961">崧<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17792">趋<span class="small">スウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="168">数<span class="small">スウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2508">嵩<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5207">鄒<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5358">蒭<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8346">趍<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11160">㥮<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11427">搊<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18210">雏<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21809">䐍<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9063">緅<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11881">䐢<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5603">皺<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6006">樞<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6202">數<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8871">篘<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9107">縐<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2501">趨<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8186">謅<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8717">鄹<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12272">橾<span class="small">スウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2611">雛<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6759">騶<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7148">鶵<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6671">齱<span class="small">スウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6675">齺<span class="small">スウ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="847">吸<span class="small">す（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2292">吃<span class="small">す（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3227">吮<span class="small">す（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3237">呷<span class="small">す（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1369">喫<span class="small">す（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3297">嗽<span class="small">す（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23913">噄<span class="small">す（う）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">すえ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="614">末<span class="small">すえ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="470">季<span class="small">すえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4014">杪<span class="small">すえ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1518">陶<span class="small">すえ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="425">葉<span class="small">すえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5043">裔<span class="small">すえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23906">嗂<span class="small">すえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4872">甄<span class="small">すえ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1773">据<span class="small">す（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21984">䓹<span class="small">す（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23245">䬥<span class="small">す（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5294">饐<span class="small">す（える）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">すか</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2262">菅<span class="small">すが</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1206">透<span class="small">す（かす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22518">䞬<span class="small">す（かす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5489">賺<span class="small">すか（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24712">凨<span class="small">すがた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7426">凬<span class="small">すがた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2008">采<span class="small">すがた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7427">凮<span class="small">すがた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="217">風<span class="small">すがた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="889">姿<span class="small">すがた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7428">飌<span class="small">すがた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5148">眇<span class="small">すがめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5148">眇<span class="small">すが（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18680">㐴<span class="small">すが（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21557">䋘<span class="small">すが（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4794">縋<span class="small">すが（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3740">攀<span class="small">すが（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1156">尽<span class="small">すが（れる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6030">盡<span class="small">すが（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">すき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="6016">耒<span class="small">すき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24218">㦮<span class="small">すき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8654">郄<span class="small">すき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5205">郤<span class="small">すき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3938">耜<span class="small">すき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4833">犁<span class="small">すき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4832">犂<span class="small">すき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1990">隙<span class="small">すき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3937">耡<span class="small">すき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="756">銭<span class="small">すき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2744">銚<span class="small">すき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4699">銛<span class="small">すき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7960">隟<span class="small">すき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2547">鋤<span class="small">すき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7645">銽<span class="small">すき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5949">錢<span class="small">すき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23646">䵓<span class="small">すき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2521">鍬<span class="small">すき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7728">鍫<span class="small">すき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1774">杉<span class="small">すぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11946">杦<span class="small">すぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2624">椙<span class="small">すぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15237">榅<span class="small">すぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6218">榲<span class="small">すぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12271">檆<span class="small">すぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2893">箆<span class="small">すきぐし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2892">篦<span class="small">すきぐし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8654">郄<span class="small">すきま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5205">郤<span class="small">すきま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3976">罅<span class="small">すきま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27142">鎼<span class="small">すきま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8777">舋<span class="small">すきま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4853">釁<span class="small">すきま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26933">迈<span class="small">す（ぎる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8598">过<span class="small">す（ぎる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20322">㳑<span class="small">す（ぎる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="655">過<span class="small">す（ぎる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4462">軼<span class="small">す（ぎる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2159">溢<span class="small">す（ぎる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5530">邁<span class="small">す（ぎる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">すく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="327">宿<span class="small">スク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19278">㝛<span class="small">スク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17826">踀<span class="small">スク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15267">樎<span class="small">スク</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="502">好<span class="small">す（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1747">抄<span class="small">す（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="013">空<span class="small">す（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19253">㝀<span class="small">す（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1206">透<span class="small">す（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19782">㧧<span class="small">す（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4032">梳<span class="small">す（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4833">犁<span class="small">す（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="494">結<span class="small">す（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4832">犂<span class="small">す（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3937">耡<span class="small">す（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3019">漉<span class="small">す（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9267">槈<span class="small">す（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22518">䞬<span class="small">す（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2547">鋤<span class="small">す（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21244">䅶<span class="small">す（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3936">耨<span class="small">す（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23646">䵓<span class="small">す（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="193">直<span class="small">すぐ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2647">銑<span class="small">ずく</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4181">樔<span class="small">すくいあみ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2316">匡<span class="small">すく（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4322">汕<span class="small">すく（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1747">抄<span class="small">すく（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3668">抔<span class="small">すく（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11327">抍<span class="small">すく（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3685">拯<span class="small">すく（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12952">匩<span class="small">すく（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24405">济<span class="small">すく（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1153">振<span class="small">すく（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27156">㧵<span class="small">すく（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="477">救<span class="small">すく（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="879">済<span class="small">すく（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2289">掬<span class="small">すく（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4181">樔<span class="small">すく（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5975">濟<span class="small">すく（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5493">贍<span class="small">すく（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="160">少<span class="small">すく（ない）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17783">赻<span class="small">すく（ない）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3437">尠<span class="small">すく（ない）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14343">尟<span class="small">すく（ない）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1617">寡<span class="small">すく（ない）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4567">歉<span class="small">すく（ない）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1166">鮮<span class="small">すく（ない）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5546">竦<span class="small">すく（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5718">粭<span class="small">すくも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9557">蒅<span class="small">すくも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5848">糘<span class="small">すくも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4085">蝎<span class="small">すくもむし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26942">选<span class="small">すぐ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="553">選<span class="small">すぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3058">乂<span class="small">すぐ（れる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2946">尤<span class="small">すぐ（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1284">茂<span class="small">すぐ（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1493">卓<span class="small">すぐ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5918">杰<span class="small">すぐ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18696">㑓<span class="small">すぐ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18838">㔬<span class="small">すぐ（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1733">俊<span class="small">すぐ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14814">怣<span class="small">すぐ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26364">荦<span class="small">すぐ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3108">俶<span class="small">すぐ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7980">隽<span class="small">すぐ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19044">㘶<span class="small">すぐ（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1607">逸<span class="small">すぐ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4031">桀<span class="small">すぐ（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="335">勝<span class="small">すぐ（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1007">偉<span class="small">すぐ（れる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6416">逸<span class="small">すぐ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12671">傥<span class="small">すぐ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26279">逸<span class="small">すぐ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26405">㑺<span class="small">すぐ（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1673">傑<span class="small">すぐ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4578">雋<span class="small">すぐ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4633">瑰<span class="small">すぐ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4641">髦<span class="small">すぐ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4836">犖<span class="small">すぐ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3137">儁<span class="small">すぐ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2180">穎<span class="small">すぐ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5653">頴<span class="small">すぐ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16554">璝<span class="small">すぐ（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="991">優<span class="small">すぐ（れる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2534">駿<span class="small">すぐ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12637">㒞<span class="small">すぐ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10197">瓌<span class="small">すぐ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3146">儻<span class="small">すぐ（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">すけ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1031">介<span class="small">すけ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="330">助<span class="small">すけ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1696">佐<span class="small">すけ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2979">亮<span class="small">すけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19564">㢶<span class="small">すけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2858">弼<span class="small">すけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14743">弻<span class="small">すけ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2878">輔<span class="small">すけ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2262">菅<span class="small">すげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6985">鯳<span class="small">すけとうだら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1206">透<span class="small">す（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22518">䞬<span class="small">す（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1800">挿<span class="small">す（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6189">插<span class="small">す（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11349">揷<span class="small">す（げる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">すこ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="2033">凄<span class="small">すご（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4379">淒<span class="small">すご（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="160">少<span class="small">すこ（し）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2431">些<span class="small">すこ（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3845">毫<span class="small">すこ（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5556">稍<span class="small">すこ（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8598">过<span class="small">す（ごす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="655">過<span class="small">す（ごす）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2817">頗<span class="small">すこぶ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2033">凄<span class="small">すご（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="497">健<span class="small">すこ（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12532">徤<span class="small">すこ（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4167">槊<span class="small">すごろく</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">すさ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="9391">苆<span class="small">すさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6142">橲<span class="small">ずさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22705">䢊<span class="small">すさ（び）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="422">遊<span class="small">すさ（び）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17921">逰<span class="small">すさ（び）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22705">䢊<span class="small">すさ（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1095">荒<span class="small">すさ（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="422">遊<span class="small">すさ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17921">逰<span class="small">すさ（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2033">凄<span class="small">すさ（まじい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3163">凜<span class="small">すさ（まじい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3164">凛<span class="small">すさ（まじい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4379">淒<span class="small">すさま（じい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1095">荒<span class="small">すさ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="768">退<span class="small">すさ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">すし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3854">鮓<span class="small">すし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6937">䱈<span class="small">すし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3859">鮨<span class="small">すし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="739">条<span class="small">すじ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="854">系<span class="small">すじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6285">脉<span class="small">すじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8807">荕<span class="small">すじ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="617">脈<span class="small">すじ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="238">理<span class="small">すじ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6111">條<span class="small">すじ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="778">統<span class="small">すじ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="851">筋<span class="small">すじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11812">衇<span class="small">すじ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2039">腺<span class="small">すじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4238">腱<span class="small">すじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9036">綂<span class="small">すじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4781">綫<span class="small">すじ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="176">線<span class="small">すじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21396">䈥<span class="small">すじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3748">龕<span class="small">ずし</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">すす</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2823">煤<span class="small">すす</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5945">鈬<span class="small">すず</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1934">鈴<span class="small">すず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7861">銮<span class="small">すず</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2477">錫<span class="small">すず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18492">鵉<span class="small">すず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2706">鐸<span class="small">すず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4737">鑞<span class="small">すず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4742">鑾<span class="small">すず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18749">㒪<span class="small">すず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3841">鸞<span class="small">すず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5315">芒<span class="small">すすき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1230">薄<span class="small">すすき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7081">魲<span class="small">すずき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3898">鱸<span class="small">すずき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4349">洒<span class="small">すす（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10509">泴<span class="small">すす（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4369">浣<span class="small">すす（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25537">涤<span class="small">すす（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="173">雪<span class="small">すす（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15721">溉<span class="small">すす（ぐ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4419">漱<span class="small">すす（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4424">滌<span class="small">すす（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4844">酳<span class="small">すす（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15827">潄<span class="small">すす（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2228">漑<span class="small">すす（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4433">澡<span class="small">すす（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4435">澣<span class="small">すす（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5568">盥<span class="small">すす（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1808">濯<span class="small">すす（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7993">䨮<span class="small">すす（ぐ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2823">煤<span class="small">すす（ける）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5745">凉<span class="small">すず（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12333">凊<span class="small">すず（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1930">涼<span class="small">すず（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6844">鬌<span class="small">すずしろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5380">菘<span class="small">すずな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21926">䒣<span class="small">すす（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2649">苒<span class="small">すす（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5503">迪<span class="small">すす（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5504">廸<span class="small">すす（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26937">进<span class="small">すす（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2594">晋<span class="small">すす（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5187">陟<span class="small">すす（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6207">晉<span class="small">すす（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7934">徏<span class="small">すす（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="339">進<span class="small">すす（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1790">漸<span class="small">すす（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11677">㬜<span class="small">すす（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5285">餤<span class="small">すす（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5745">凉<span class="small">すず（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1930">涼<span class="small">すず（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2497">雀<span class="small">すずめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23536">䲵<span class="small">すずめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13155">劝<span class="small">すす（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1657">享<span class="small">すす（める）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3088">侑<span class="small">すす（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25234">怂<span class="small">すす（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26937">进<span class="small">すす（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="930">奏<span class="small">すす（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6721">亯<span class="small">すす（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25033">奖<span class="small">すす（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4909">烝<span class="small">すす（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17105">耸<span class="small">すす（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="339">進<span class="small">すす（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2024">羞<span class="small">すす（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10990">惥<span class="small">すす（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1042">勧<span class="small">すす（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1748">奨<span class="small">すす（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3606">慂<span class="small">すす（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4844">酳<span class="small">すす（める）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5775">奬<span class="small">すす（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19550">㢡<span class="small">すす（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20523">㷥<span class="small">すす（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3611">慫<span class="small">すす（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6253">獎<span class="small">すす（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1783">薦<span class="small">すす（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4862">聳<span class="small">すす（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5285">餤<span class="small">すす（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5842">勸<span class="small">すす（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5297">饋<span class="small">すす（める）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2367">硯<span class="small">すずり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3268">啜<span class="small">すすりな（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4563">欷<span class="small">すすりな（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4570">歔<span class="small">すすりな（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3251">哈<span class="small">すす（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3268">啜<span class="small">すす（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4566">歃<span class="small">すす（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4844">酳<span class="small">すす（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12346">歠<span class="small">すす（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">すそ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="10033">帬<span class="small">すそ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5042">裙<span class="small">すそ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2032">裾<span class="small">すそ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5043">裔<span class="small">すそ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10032">裠<span class="small">すそ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">すた</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="322">集<span class="small">すだ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27777">𠍱<span class="small">すだ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7977">雧<span class="small">すだ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6871">鬽<span class="small">すだま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1574">魅<span class="small">すだま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6876">魈<span class="small">すだま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26028">魉<span class="small">すだま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3953">魍<span class="small">すだま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3954">魎<span class="small">すだま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23450">䰨<span class="small">すだま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23240">䬜<span class="small">すだま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3952">魑<span class="small">すだま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25217">废<span class="small">すた（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1855">廃<span class="small">すた（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6176">廢<span class="small">すた（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2827">箔<span class="small">すだれ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3007">簾<span class="small">すだれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27693">簾<span class="small">すだれ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1059">朽<span class="small">すた（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27849">𣏓<span class="small">すた（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25217">废<span class="small">すた（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1855">廃<span class="small">すた（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6176">廢<span class="small">すた（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">すつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1940">宛<span class="small">ずつ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5238">瘋<span class="small">ずつう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6573">鱉<span class="small">すっぽん</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3851">鼈<span class="small">すっぽん</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6572">龞<span class="small">すっぽん</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">すて</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="3484">已<span class="small">すで（に）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1362">既<span class="small">すで（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11617">旣<span class="small">すで（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11618">既<span class="small">すで（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5815">弃<span class="small">す（てる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="244">委<span class="small">す（てる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3674">拌<span class="small">す（てる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3687">捐<span class="small">す（てる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="891">捨<span class="small">す（てる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25324">掷<span class="small">す（てる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1359">棄<span class="small">す（てる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="825">遺<span class="small">す（てる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1836">撤<span class="small">す（てる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3737">擲<span class="small">す（てる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">すな</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="2006">沙<span class="small">すな</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="877">砂<span class="small">すな</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1897">朴<span class="small">すなお</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2537">淳<span class="small">すなお</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="532">順<span class="small">すなお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15719">湻<span class="small">すなお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19691">㥧<span class="small">すなお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3603">愿<span class="small">すなお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4186">樸<span class="small">すなお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12259">檏<span class="small">すなお</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="628">漁<span class="small">すなど（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1861">漠<span class="small">すなはら</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2697">乃<span class="small">すなわ（ち）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1172">即<span class="small">すなわ（ち）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="609">便<span class="small">すなわ（ち）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="763">則<span class="small">すなわ（ち）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2700">廼<span class="small">すなわ（ち）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6432">卽<span class="small">すなわ（ち）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24076">皍<span class="small">すなわ（ち）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2699">迺<span class="small">すなわ（ち）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2045">曽<span class="small">すなわ（ち）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4251">曾<span class="small">すなわ（ち）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4466">輒<span class="small">すなわ（ち）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4467">輙<span class="small">すなわ（ち）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">すね</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="26305">胫<span class="small">すね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4228">脛<span class="small">すね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4824">骭<span class="small">すね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23378">䯎<span class="small">すね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4313">臑<span class="small">すね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14914">抝<span class="small">す（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3669">拗<span class="small">す（ねる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">すの</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4592">簀<span class="small">すのこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4597">簟<span class="small">すのこ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts21">
                    <h3 class="ttl_while">すは</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="6959">鯐<span class="small">すばしり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3184">剽<span class="small">すばや（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3193">勦<span class="small">すばや（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3616">慓<span class="small">すばや（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3911">昴<span class="small">すばる</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts22">
                    <h3 class="ttl_while">すへ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="731">術<span class="small">すべ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2031">須<span class="small">すべか（らく）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2031">須<span class="small">すべから（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1275">凡<span class="small">すべ（て）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12723">凢<span class="small">すべ（て）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24711">凣<span class="small">すべ（て）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12391">㒰<span class="small">すべ（て）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="346">全<span class="small">すべ（て）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25238">总<span class="small">すべ（て）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="375">都<span class="small">すべ（て）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9074">捴<span class="small">すべ（て）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2657">惣<span class="small">すべ（て）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4394">渾<span class="small">すべ（て）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6372">都<span class="small">すべ（て）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9073">揔<span class="small">すべ（て）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25334">搃<span class="small">すべ（て）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="759">総<span class="small">すべ（て）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9072">摠<span class="small">すべ（て）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9071">緫<span class="small">すべ（て）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5911">總<span class="small">すべ（て）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3971">闔<span class="small">すべ（て）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25238">总<span class="small">す（べる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="406">部<span class="small">す（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9074">捴<span class="small">す（べる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="778">統<span class="small">す（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4488">馭<span class="small">す（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9073">揔<span class="small">す（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25334">搃<span class="small">す（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9036">綂<span class="small">す（べる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="759">総<span class="small">す（べる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2666">綜<span class="small">す（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4780">綰<span class="small">す（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9072">摠<span class="small">す（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8672">郶<span class="small">す（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9071">緫<span class="small">す（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5911">總<span class="small">す（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3746">攬<span class="small">す（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5499">辷<span class="small">すべ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1348">滑<span class="small">すべ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts23">
                    <h3 class="ttl_while">すほ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2448">窄<span class="small">すぼ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4571">歙<span class="small">すぼ（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts24">
                    <h3 class="ttl_while">すま</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="326">住<span class="small">す（まう）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24405">济<span class="small">す（ます）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="879">済<span class="small">す（ます）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1192">澄<span class="small">す（ます）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3039">澂<span class="small">す（ます）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5975">濟<span class="small">す（ます）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24039">瀓<span class="small">す（ます）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts25">
                    <h3 class="ttl_while">すみ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="097">角<span class="small">すみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="361">炭<span class="small">すみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5189">陬<span class="small">すみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1666">隅<span class="small">すみ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3023">隈<span class="small">すみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3467">嵎<span class="small">すみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1567">墨<span class="small">すみ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6380">墨<span class="small">すみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4118">桷<span class="small">ずみ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2443">栖<span class="small">すみか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12099">捿<span class="small">すみか</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2626">棲<span class="small">すみか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3062">亟<span class="small">すみ（やか）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="351">速<span class="small">すみ（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5110">倏<span class="small">すみ（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23893">倐<span class="small">すみ（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21972">䓧<span class="small">すみ（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24048">焏<span class="small">すみ（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5533">遽<span class="small">すみ（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4287">蹶<span class="small">すみ（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8434">蹷<span class="small">すみ（やか）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5378">菫<span class="small">すみれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9501">蓳<span class="small">すみれ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts26">
                    <h3 class="ttl_while">すむ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="326">住<span class="small">す（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24405">济<span class="small">す（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2443">栖<span class="small">す（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="544">清<span class="small">す（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="879">済<span class="small">す（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12099">捿<span class="small">す（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15648">淸<span class="small">す（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2626">棲<span class="small">す（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1192">澄<span class="small">す（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3039">澂<span class="small">す（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5975">濟<span class="small">す（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24039">瀓<span class="small">す（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts27">
                    <h3 class="ttl_while">すめ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="868">皇<span class="small">すめらぎ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts28">
                    <h3 class="ttl_while">すも</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2967">李<span class="small">すもも</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts29">
                    <h3 class="ttl_while">する</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="27858">𣑑<span class="small">する</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="512">刷<span class="small">す（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1903">抹<span class="small">す（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1008">為<span class="small">す（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3696">掏<span class="small">す（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3702">揩<span class="small">す（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6248">爲<span class="small">す（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3717">搨<span class="small">す（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2560">摺<span class="small">す（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1900">摩<span class="small">す（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1901">磨<span class="small">す（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3730">擂<span class="small">す（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1421">擦<span class="small">す（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11258">擵<span class="small">す（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11503">攂<span class="small">す（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4736">鑢<span class="small">す（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10738">䃺<span class="small">す（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5106">狡<span class="small">ずる（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2634">尖<span class="small">するど（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12681">兊<span class="small">するど（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="624">利<span class="small">するど（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3148">兌<span class="small">するど（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13111">兑<span class="small">するど（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2444">犀<span class="small">するど（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4699">銛<span class="small">するど（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1016">鋭<span class="small">するど（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7641">銳<span class="small">するど（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7645">銽<span class="small">するど（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4723">鏃<span class="small">するど（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3868">鯣<span class="small">するめ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts30">
                    <h3 class="ttl_while">すれ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1421">擦<span class="small">す（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts31">
                    <h3 class="ttl_while">すわ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="15220">椘<span class="small">すわえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12140">楉<span class="small">すわえ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2653">楚<span class="small">すわえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22594">䠂<span class="small">すわえ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1773">据<span class="small">す（わる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2439">坐<span class="small">すわ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24200">㘴<span class="small">すわ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19046">㘸<span class="small">すわ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="878">座<span class="small">すわ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts32">
                    <h3 class="ttl_while">すん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="918">寸<span class="small">スン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2625">吋<span class="small">スン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20576">㸪<span class="small">スン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2534">駿<span class="small">スン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20576">㸪<span class="small">ズン</span></a></li>
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