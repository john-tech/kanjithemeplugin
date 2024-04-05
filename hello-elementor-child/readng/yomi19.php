<?php
/*
 * Template Name: Yomi19
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
               <h1 class="ttl_main">音訓検索「て」</h1>
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
               <p>「て」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>て</option>
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
                         <li id="parts1_menu"><a href="#parts1">て</a></li>
                         <li id="parts2_menu"><a href="#parts2">てあ</a></li>
                         <li id="parts3_menu"><a href="#parts3">てい</a></li>
                         <li id="parts4_menu"><a href="#parts4">てお</a></li>
                         <li id="parts5_menu"><a href="#parts5">てか</a></li>
                         <li id="parts6_menu"><a href="#parts6">てき</a></li>
                         <li id="parts7_menu"><a href="#parts7">てく</a></li>
                         <li id="parts8_menu"><a href="#parts8">てこ</a></li>
                         <li id="parts9_menu"><a href="#parts9">てし</a></li>
                         <li id="parts10_menu"><a href="#parts10">てす</a></li>
                         <li id="parts11_menu"><a href="#parts11">てた</a></li>
                         <li id="parts12_menu"><a href="#parts12">てち</a></li>
                         <li id="parts13_menu"><a href="#parts13">てつ</a></li>
                         <li id="parts14_menu"><a href="#parts14">ての</a></li>
                         <li id="parts15_menu"><a href="#parts15">てら</a></li>
                         <li id="parts16_menu"><a href="#parts16">てる</a></li>
                         <li id="parts17_menu"><a href="#parts17">てれ</a></li>
                         <li id="parts18_menu"><a href="#parts18">てん</a></li>
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
                    <h3 class="ttl_while">て</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="27757">𠂤<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15374">毤<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16876">笍<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17633">訍<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18862">㕍<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21783">䏨<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13766">埻<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14062">娺<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17109">聉<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17151">脮<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20231">㱣<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20344">㳷<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17158">腏<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13817">塠<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16607">痽<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21159">䄌<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21320">䇏<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19331">㞜<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18280">頧<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20898">㾼<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20899">㾽<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21592">䋾<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21840">䐱<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24312">䔻<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17172">膪<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21502">䊚<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23222">䬈<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18486">鴭<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22391">䜃<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21520">䊬<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18293">顡<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13593">囆<span class="small">テ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17908">轛<span class="small">テ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="033">手<span class="small">て</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3519">弖<span class="small">て</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="184">弟<span class="small">デ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27290">㳔<span class="small">デ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19791">㧳<span class="small">デ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14959">掰<span class="small">デ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19909">㪓<span class="small">デ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20953">䀃<span class="small">デ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17004">綐<span class="small">デ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20890">㾯<span class="small">デ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14356">尵<span class="small">デ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20899">㾽<span class="small">デ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22032">䔹<span class="small">デ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22769">䣝<span class="small">デ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15279">橔<span class="small">デ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17174">膭<span class="small">デ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15921">濧<span class="small">デ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19436">㠚<span class="small">デ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22853">䤻<span class="small">デ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23168">䫋<span class="small">デ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17376">藬<span class="small">デ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20007">㬣<span class="small">デ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15950">瀩<span class="small">デ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23392">䯟<span class="small">デ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23044">䨴<span class="small">デ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18550">鷻<span class="small">デ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23049">䨺<span class="small">デ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">てあ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5526">遘<span class="small">であ（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1710">肢<span class="small">てあし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11769">胑<span class="small">てあし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4233">腆<span class="small">てあつ（い）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">てい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="369">丁<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12365">仃<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18765">㓅<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24742">厅<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="354">打<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="950">庁<span class="small">テイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2752">汀<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3218">叮<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13632">圢<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13936">奵<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14608">帄<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14798">忊<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17199">艼<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17931">邒<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19589">㣔<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22943">䦺<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24376">氐<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="580">灯<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10109">玎<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11937">朾<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12420">仾<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19265">㝎<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="060">町<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="182">体<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="184">弟<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="573">低<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1829">呈<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1830">廷<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3224">听<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5950">甼<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8560">达<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10634">矴<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11949">杕<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13186">厎<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13667">坘<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19510">㡳<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20763">㼗<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="370">定<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="574">底<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1195">抵<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1826">邸<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7924">阺<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7925">阷<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8114">呧<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9256">耓<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9273">耵<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9412">苐<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9764">虰<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11054">怟<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13690">坻<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13917">奃<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14361">屉<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14733">弤<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14771">彽<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14923">拞<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15496">泜<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15498">泟<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17912">迏<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24215">㣇<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25233">态<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26936">迖<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1512">訂<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1513">帝<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1827">亭<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1832">貞<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2751">剃<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4025">柢<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4346">洟<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4830">牴<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4838">酊<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8709">郑<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9452">荑<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12489">侹<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13191">厗<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14022">姼<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18701">㑜<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19897">㪆<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19966">㫝<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22554">䟓<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22708">䢑<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23892">侱<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24748">厛<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="371">庭<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1833">逓<span class="small">テイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2698">悌<span class="small">テイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2736">挺<span class="small">テイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2743">釘<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3179">剔<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4371">涕<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9481">莛<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10022">袛<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12018">桋<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13744">埕<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14040">娗<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14047">娣<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14776">徎<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14834">悜<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14938">挮<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14939">挰<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15583">浾<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15595">涏<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16876">笍<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18918">㖒<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19599">㣢<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20647">㹶<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21658">䍕<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="358">第<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="572">停<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="949">頂<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1486">逮<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1490">袋<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1831">偵<span class="small">テイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2690">梯<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3698">掟<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4128">梃<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5127">羝<span class="small">テイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5510">逞<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7281">靪<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7453">飣<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7537">釱<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7953">䧑<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10158">珵<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10159">珽<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10160">珶<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11825">脡<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12068">桯<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12547">偙<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13077">偍<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13747">埞<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14062">娺<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14368">屜<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14956">掋<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15197">梊<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16080">烶<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16100">焍<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16655">眱<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17150">脭<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17259">菧<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17918">递<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18794">㓳<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21791">䏲<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22755">䣌<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24909">啲<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24912">啶<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26467">萣<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26539">蛏<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="774">程<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="775">提<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1175">替<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1196">堤<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3282">啼<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3492">幀<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4142">棣<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4400">渟<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4956">詆<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5157">睇<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5410">蒂<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5577">觝<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5680">躰<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7952">隄<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9178">罤<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9565">葶<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10040">裎<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10849">稊<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11409">揥<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11410">揁<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12105">椗<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14107">婷<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14117">媂<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14139">媜<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14141">媞<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14310">寊<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14370">屟<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14490">崹<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14505">嵉<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14756">彘<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14784">徥<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14849">惿<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15699">湞<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16659">睈<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16791">祶<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17158">腏<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17789">趆<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17885">軧<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18712">㑷<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18843">㔸<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18948">㖷<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19945">㫀<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20062">㭽<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20992">䀸<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21209">䅍<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21342">䇧<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21886">䑭<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22912">䦐<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24017">渧<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24396">䄇<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26319">腚<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1828">艇<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2753">碇<span class="small">テイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2754">禎<span class="small">テイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2758">鼎<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4640">髢<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5046">裼<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5525">遉<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5869">楴<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8823">筳<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9052">綈<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9839">蜓<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11708">晸<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12156">楨<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12157">楟<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12548">僀<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12593">傺<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13445">嗁<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13818">塣<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16532">瑅<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16896">筡<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17003">綎<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17162">腣<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17923">遆<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18025">鉪<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19485">㡗<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19699">㥴<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21159">䄌<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21356">䇸<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21810">䐎<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21887">䑯<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23075">䩘<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="769">態<span class="small">テイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2755">綴<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4843">酲<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5409">蔕<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6050">遞<span class="small">テイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6401">禎<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8031">靗<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8336">䞓<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9858">蝃<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10052">褆<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10340">疐<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10583">睼<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10710">碲<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10807">禔<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10808">禘<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11167">憏<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11454">摕<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13835">墆<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14539">嵽<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14541">嵿<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15249">榳<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16751">碠<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16754">碮<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17118">聜<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17573">褅<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17658">誔<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18035">銐<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18983">㗣<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20399">㴿<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20789">㼵<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21012">䁎<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21226">䅠<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22584">䟷<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23016">䨑<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23077">䩚<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23250">䬫<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1514">締<span class="small">テイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2589">鄭<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3982">霆<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6574">鼑<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6790">骶<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7665">鋌<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7666">銻<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8615">遰<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8751">醊<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9092">緹<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9285">聤<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9878">蝏<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9879">蝭<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12418">骵<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12919">殢<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15823">漽<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16757">磃<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17020">緽<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17347">蕛<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18041">銴<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18171">閮<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18398">髰<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19332">㞟<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19417">㠆<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19493">㡠<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21381">䈕<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21590">䋼<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21836">䐭<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22029">䔶<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22590">䟾<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22798">䣽<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23080">䩟<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23991">徲<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26682">㚄<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27543">䗖<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1447">錠<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2066">諦<span class="small">テイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2701">醍<span class="small">テイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2720">薙<span class="small">テイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2756">蹄<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7307">鞓<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7308">䩠<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7394">頲<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7395">頳<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7396">赬<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8416">踶<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11751">㬱<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15907">濎<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17359">薡<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17680">諪<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17808">趧<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20902">㿃<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22246">䙗<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22307">䚢<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22308">䚣<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23263">䬾<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23682">䵺<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1508">聴<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3313">嚏<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4498">騁<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6943">鮧<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7123">鴺<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7483">餟<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7734">鍉<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7735">鍗<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8188">謕<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8417">蹏<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9913">螮<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10749">磾<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10935">竀<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12280">檉<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12766">鬀<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15298">檙<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16768">磸<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18285">顁<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20800">㽀<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21734">䎮<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21754">䏄<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22534">䞾<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22771">䣟<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23383">䯕<span class="small">テイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="359">題<span class="small">テイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2757">鵜<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3312">嚔<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6837">鬄<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6964">鮷<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7318">鞮<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8429">蹛<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22620">䠠<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23099">䩶<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23473">䱓<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4106">蟶<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6755">騠<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21623">䌡<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22104">䖙<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6178">廰<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6329">軆<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6631">鼮<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7006">鯷<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7007">䱱<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7181">鶙<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7182">鶗<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23693">䶍<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24103">聼<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27887">𩪆<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7197">鷉<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17908">轛<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18531">鷈<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23695">䶏<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27170">鐤<span class="small">テイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5850">聽<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23114">䪆<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6354">體<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16803">禵<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18542">鷤<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18597">鼶<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26506">㕔<span class="small">テイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6177">廳<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23697">䶑<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27886">𩧢<span class="small">テイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3080">佞<span class="small">デイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1834">泥<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6161">侫<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9413">苨<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13677">坭<span class="small">デイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2760">祢<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19272">㝕<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24147">迡<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14364">屔<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22207">䘦<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13769">埿<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26288">聍<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8115">䛏<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12153">㮈<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14312">寍<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14316">寕<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7577">鉨<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7590">鈮<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12152">㮏<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14320">寜<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21286">䆨<span class="small">デイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1852">寧<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22021">䔭<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15283">橣<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20926">㿦<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4441">濔<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9690">薾<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14238">嬣<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18205">隬<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19613">㣷<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15306">檷<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22065">䕥<span class="small">デイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2759">禰<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5851">聹<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7840">鑈<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18143">鑏<span class="small">デイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9296">臡<span class="small">デイ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">てお</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4683">釿<span class="small">ておの</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">てか</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4864">瓧<span class="small">デカグラム</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13113">兙<span class="small">デカグラム</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4126">梏<span class="small">てかせ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="688">券<span class="small">てがた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4023">柬<span class="small">てがみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25944">笺<span class="small">てがみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4882">牋<span class="small">てがみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15225">椾<span class="small">てがみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2041">箋<span class="small">てがみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4785">緘<span class="small">てがみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2259">翰<span class="small">てがみ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2972">鯉<span class="small">てがみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4883">牘<span class="small">てがみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5261">籵<span class="small">デカメートル</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5537">竍<span class="small">デカリットル</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21311">䇆<span class="small">デカリットル</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">てき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="5824">彳<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11278">扚<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19555">㢩<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19617">㣿<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23988">彴<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5100">狄<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10115">玓<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10463">旳<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17128">肑<span class="small">テキ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="575">的<span class="small">テキ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5503">迪<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5504">廸<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8990">籴<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17941">邮<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19591">㣙<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21181">䄪<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24108">苖<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17413">虳<span class="small">テキ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2761">荻<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3108">俶<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3179">剔<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12519">倜<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13366">唙<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14944">捇<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15178">栜<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15563">浟<span class="small">テキ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="372">笛<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5513">逖<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9516">菂<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11110">惕<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11111">悐<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11379">掦<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15201">梑<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24817">啇<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26837">跃<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7283">靮<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8590">逷<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14843">惖<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16735">硩<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25324">掷<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6708">馰<span class="small">テキ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="777">適<span class="small">テキ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1197">摘<span class="small">テキ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1198">滴<span class="small">テキ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1814">嫡<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6889">魡<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7378">頔<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9232">翟<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9482">蔐<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13845">墑<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17328">蔋<span class="small">テキ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="776">敵<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8402">踧<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8406">踢<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12216">樀<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12873">歒<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15848">潪<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20609">㹍<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22527">䞶<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23658">䵠<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10283">甋<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23000">䨀<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23688">䶂<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26857">踯<span class="small">テキ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2704">擢<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8896">篴<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13557">嚁<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21734">䎮<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22731">䢮<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23895">儥<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24346">䨤<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3737">擲<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6837">鬄<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8430">蹢<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9483">藡<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11510">擿<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17743">豴<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22288">䚍<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23389">䯜<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24342">䢰<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2762">鏑<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10253">瓋<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22291">䚐<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24237">㰅<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8925">籊<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21522">䊮<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21628">䌦<span class="small">テキ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1289">躍<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8357">趯<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4297">躑<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5276">糴<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5464">覿<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23633">䵂<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7230">鸐<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23607">䴞<span class="small">テキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15419">氼<span class="small">デキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20304">㲻<span class="small">デキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25537">涤<span class="small">デキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10980">惄<span class="small">デキ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2067">溺<span class="small">デキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11161">愵<span class="small">デキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4424">滌<span class="small">デキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16970">糑<span class="small">デキ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5210">疔<span class="small">できもの</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2118">瘍<span class="small">できもの</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">てく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1999">梗<span class="small">でく</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1793">塑<span class="small">でく</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13810">塐<span class="small">でく</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3142">儡<span class="small">でく</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4471">輦<span class="small">てぐるま</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">てこ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4007">杆<span class="small">てこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4008">桿<span class="small">てこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4128">梃<span class="small">てこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4156">槓<span class="small">てこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1846">凸<span class="small">でこ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">てし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4866">瓰<span class="small">デシグラム</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13115">兝<span class="small">デシグラム</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="604">粉<span class="small">デシメートル</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5540">竕<span class="small">デシリットル</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">てす</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4019">柤<span class="small">てすり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25383">栏<span class="small">てすり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1085">軒<span class="small">てすり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25396">棂<span class="small">てすり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3973">闌<span class="small">てすり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20139">㯪<span class="small">てすり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4203">檻<span class="small">てすり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1301">欄<span class="small">てすり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4211">櫺<span class="small">てすり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6362">欄<span class="small">てすり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12317">欞<span class="small">てすり</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">てた</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2168">胡<span class="small">でたらめ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">てち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="26356">屮<span class="small">テチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13215">叕<span class="small">テチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16651">眣<span class="small">テチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16076">烲<span class="small">テチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17106">聅<span class="small">テチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22115">䖧<span class="small">テチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16603">痥<span class="small">テチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17158">腏<span class="small">テチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21159">䄌<span class="small">テチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18987">㗧<span class="small">テチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21684">䍳<span class="small">テチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17671">諁<span class="small">テチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22526">䞵<span class="small">テチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22590">䟾<span class="small">テチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22307">䚢<span class="small">テチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23170">䫎<span class="small">テチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21903">䒆<span class="small">テチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23176">䫕<span class="small">テチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23331">䮕<span class="small">テチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24689">冁<span class="small">テチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13592">囅<span class="small">テチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16270">爡<span class="small">テチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17217">苵<span class="small">デチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14823">恎<span class="small">デチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16651">眣<span class="small">デチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15197">梊<span class="small">デチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16654">眰<span class="small">デチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21791">䏲<span class="small">デチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17788">趃<span class="small">デチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18160">镻<span class="small">デチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22273">䙽<span class="small">デチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13835">墆<span class="small">デチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23310">䭿<span class="small">デチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23544">䳀<span class="small">デチ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">てつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="26356">屮<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3075">佚<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25227">彻<span class="small">テツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1837">迭<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13215">叕<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17217">苵<span class="small">テツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2763">姪<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3248">咥<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3339">垤<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11658">昳<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11789">胅<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13326">哋<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14426">峌<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14823">恎<span class="small">テツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1515">哲<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9250">耊<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12778">剟<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13743">埑<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16651">眣<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20296">㲳<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3268">啜<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9803">蛈<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10264">瓞<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10972">悊<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11112">惙<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11223">戜<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11380">掇<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13401">啠<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15197">梊<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15608">涰<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16076">烲<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16654">眰<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17106">聅<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21791">䏲<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22115">䖧<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2488">蛭<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4258">跌<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5480">耋<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8116">詄<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9035">絰<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9305">臷<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13414">喆<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14493">崼<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14964">揊<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16603">痥<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16735">硩<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17158">腏<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17788">趃<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18160">镻<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22273">䙽<span class="small">テツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="373">鉄<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2764">畷<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9182">罬<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9838">蜇<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21159">䄌<span class="small">テツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2755">綴<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4697">銕<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13835">墆<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14539">嵽<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18987">㗧<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21684">䍳<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24164">飻<span class="small">テツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1835">徹<span class="small">テツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1836">撤<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4469">輟<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8751">醊<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15864">澈<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17671">諁<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22526">䞵<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22590">䟾<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23310">䭿<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4706">錣<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11725">㬚<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18485">鴩<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20126">㯙<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22307">䚢<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23544">䳀<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7483">餟<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9914">螲<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10607">瞮<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12912">勶<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23170">䫎<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5287">餮<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13574">嚞<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21903">䒆<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23176">䫕<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23331">䮕<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2765">轍<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24689">冁<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5679">鐡<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5678">鐵<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13592">囅<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16270">爡<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22892">䥫<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6776">驖<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19250">㜼<span class="small">テツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13648">圼<span class="small">デツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9414">苶<span class="small">デツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3689">捏<span class="small">デツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4375">涅<span class="small">デツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16876">笍<span class="small">デツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18915">㖏<span class="small">デツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19050">㘿<span class="small">デツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27878">𣵀<span class="small">デツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17250">菍<span class="small">デツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11354">揑<span class="small">デツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24021">湼<span class="small">デツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21104">䂼<span class="small">デツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16923">篞<span class="small">デツ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">ての</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1440">掌<span class="small">てのひら</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">てら</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="149">寺<span class="small">てら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2012">刹<span class="small">てら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12759">剎<span class="small">てら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5582">衒<span class="small">てら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16030">炤<span class="small">て（らす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="540">照<span class="small">て（らす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20515">㷖<span class="small">て（らす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16241">燳<span class="small">て（らす）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">てる</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="16030">炤<span class="small">て（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="540">照<span class="small">て（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20515">㷖<span class="small">て（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1050">輝<span class="small">て（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16241">燳<span class="small">て（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="035">出<span class="small">で（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14387">岀<span class="small">で（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19345">㞮<span class="small">で（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">てれ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="540">照<span class="small">て（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20515">㷖<span class="small">て（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16241">燳<span class="small">て（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">てん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="061">天<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25802">电<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27718">𠀑<span class="small">テン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="577">伝<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6599">㐁<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13119">兲<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27717">𠑺<span class="small">テン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2766">佃<span class="small">テン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2772">辿<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3198">甸<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12421">佔<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12748">㓠<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19549">㢟<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20476">㶣<span class="small">テン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="196">店<span class="small">テン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="576">典<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3543">忝<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4342">沾<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5690">沺<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7921">阽<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10956">㤁<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13675">坫<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13922">奌<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14360">屇<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19137">㚲<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22950">䧃<span class="small">テン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="195">点<span class="small">テン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1592">厘<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3565">恬<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3785">畋<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5303">殄<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10133">玷<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11240">扂<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11545">敁<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16641">盷<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17137">胋<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19760">㧂<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20967">䀖<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24009">沗<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24298">䒶<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24983">垫<span class="small">テン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="883">蚕<span class="small">テン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="953">展<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10360">痁<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12022">栝<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12520">倎<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14040">娗<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15595">涏<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17553">袩<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19471">㡇<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19528">㢆<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20975">䀡<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21781">䏦<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21872">䑚<span class="small">テン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="374">転<span class="small">テン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1199">添<span class="small">テン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2767">淀<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2769">甜<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3272">唸<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9015">紾<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9517">菾<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10289">甛<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11113">㥏<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11381">捵<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11382">掂<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11383">掭<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11823">脠<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12023">桰<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12069">梴<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12790">剶<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13382">唺<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13746">埝<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14084">婖<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14090">婝<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14104">婰<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14837">悿<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14846">惦<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15635">淟<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16084">烻<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19058">㙉<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20492">㶺<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21195">䄼<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21643">䍄<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22323">䚶<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24303">䓦<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24905">啭<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26535">㖭<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27879">𣷹<span class="small">テン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2060">貼<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3371">奠<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4233">腆<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5457">覘<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7417">傎<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8111">詀<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8375">跈<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8737">酟<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11562">敟<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11700">晪<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12106">㮇<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13198">厧<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15685">湉<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16417">猭<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16514">琔<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16523">琠<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17292">蒃<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19185">㛯<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19448">㠭<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22568">䟢<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22571">䟧<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22660">䡒<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22759">䣑<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22968">䧘<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23932">堟<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24291">䐌<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25556">湹<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25570">靔<span class="small">テン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="197">電<span class="small">テン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1200">殿<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2068">填<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3292">嗔<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4148">椽<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4694">鈿<span class="small">テン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5803">傳<span class="small">テン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="6469">塡<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7591">鉆<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9593">蒧<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9839">蜓<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9840">蜔<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10191">瑑<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10390">痶<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10695">碘<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11435">搌<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11436">搷<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11871">腞<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14528">嵮<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15758">滇<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16146">煘<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16662">睓<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17654">詽<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18168">閚<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19206">㜊<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20781">㼭<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22915">䦓<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26320">腼<span class="small">テン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2596">槙<span class="small">テン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5721">槇<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8147">誗<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9320">舔<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10204">瑱<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10583">睼<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13839">墊<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14871">慩<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15239">榐<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18276">頕<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19290">㝪<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21574">䋬<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22666">䡘<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23058">䩅<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23060">䩇<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3509">廛<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4550">篆<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4667">碾<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4979">諂<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7467">餂<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7667">鋓<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8049">覥<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9652">蕆<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10416">瘨<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10727">磌<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10926">窴<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15116">暷<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17343">蕇<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17766">賟<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19229">㜤<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19332">㞟<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19711">㦁<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20117">㯌<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20827">㽦<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22596">䠄<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23159">䫀<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26034">緾<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26855">踮<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27520">䛸<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2768">澱<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3985">霑<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4359">靦<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7701">錪<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7736">鍩<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8033">靛<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13874">壂<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15275">橂<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15892">澶<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17682">諯<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19612">㣶<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21125">䃛<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23085">䩥<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4479">輾<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5833">點<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6546">黇<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8419">蹍<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8420">蹎<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8622">邅<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9121">縳<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10750">磹<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16557">璳<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20015">㬲<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20543">㸃<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24193">㕓<span class="small">テン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1510">鎮<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4597">簟<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5252">癜<span class="small">テン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6001">鎭<span class="small">テン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6047">轉<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7895">闐<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10087">襢<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15938">瀍<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17971">鄽<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18249">靝<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18437">鯅<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19096">㙻<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21426">䉊<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22690">䡱<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22856">䥀<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23099">䩶<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23662">䵤<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2773">顛<span class="small">テン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6464">顚<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9143">繵<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9322">舚<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17755">貚<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19333">㞡<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24689">冁<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25407">巅<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6135">壥<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17717">譠<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18525">鶨<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18757">㒹<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22875">䥖<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23494">䱳<span class="small">テン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2770">纏<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3321">囀<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3830">鷆<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5818">鷏<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20468">㶘<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23499">䱼<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25827">癫<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2771">纒<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3481">巓<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4301">躔<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6772">驔<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13592">囅<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25143">巔<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25348">攧<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8166">讇<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18387">驙<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5260">癲<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7071">鱣<span class="small">テン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6676">齻<span class="small">テン</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5660">丶<span class="small">てん</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5473">貂<span class="small">てん</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8276">鼦<span class="small">てん</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="062">田<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19316">㞋<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25802">电<span class="small">デン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="067">年<span class="small">デン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="577">伝<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20306">㲽<span class="small">デン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2766">佃<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3198">甸<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20476">㶣<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3673">拈<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5690">沺<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14360">屇<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16806">秊<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21184">䄭<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22950">䧃<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27736">𠦚<span class="small">デン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1592">厘<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3785">畋<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14011">姩<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16641">盷<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17137">胋<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19760">㧂<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27729">𠡦<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10838">秥<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15592">涊<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15595">涏<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21781">䏦<span class="small">デン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1525">粘<span class="small">デン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2084">捻<span class="small">デン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2767">淀<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11682">晛<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14090">婝<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15644">淰<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22964">䧔<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3371">奠<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8375">跈<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16417">猭<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16514">琔<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22568">䟢<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22571">䟧<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22660">䡒<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22968">䧘<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23932">堟<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25556">湹<span class="small">デン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="197">電<span class="small">デン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1200">殿<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4694">鈿<span class="small">デン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5803">傳<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9840">蜔<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16146">煘<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20086">㮟<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20781">㼭<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15239">榐<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22666">䡘<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23253">䬯<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2774">撚<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4667">碾<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19228">㜣<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19229">㜤<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19726">㦓<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20827">㽦<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23859">撵<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2768">澱<span class="small">デン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2775">鮎<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13874">壂<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15275">橂<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17682">諯<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20001">㬗<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22486">䞂<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3053">黏<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4307">臀<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4479">輾<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16933">簐<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5252">癜<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15045">攆<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15938">瀍<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21426">䉊<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11918">臋<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17755">貚<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17855">蹨<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18595">鼰<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3830">鷆<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5818">鷏<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17859">躎<span class="small">デン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20468">㶘<span class="small">デン</span></a></li>
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