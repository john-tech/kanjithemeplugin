<?php
/*
 * Template Name: Yomi23
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
               <h1 class="ttl_main">音訓検索「ぬ」</h1>
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
               <p>「ぬ」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>ぬ</option>
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
                         <li id="parts1_menu"><a href="#parts1">ぬ</a></li>
                         <li id="parts2_menu"><a href="#parts2">ぬい</a></li>
                         <li id="parts3_menu"><a href="#parts3">ぬう</a></li>
                         <li id="parts4_menu"><a href="#parts4">ぬえ</a></li>
                         <li id="parts5_menu"><a href="#parts5">ぬか</a></li>
                         <li id="parts6_menu"><a href="#parts6">ぬき</a></li>
                         <li id="parts7_menu"><a href="#parts7">ぬく</a></li>
                         <li id="parts8_menu"><a href="#parts8">ぬけ</a></li>
                         <li id="parts9_menu"><a href="#parts9">ぬさ</a></li>
                         <li id="parts10_menu"><a href="#parts10">ぬし</a></li>
                         <li id="parts11_menu"><a href="#parts11">ぬす</a></li>
                         <li id="parts12_menu"><a href="#parts12">ぬた</a></li>
                         <li id="parts13_menu"><a href="#parts13">ぬて</a></li>
                         <li id="parts14_menu"><a href="#parts14">ぬな</a></li>
                         <li id="parts15_menu"><a href="#parts15">ぬの</a></li>
                         <li id="parts16_menu"><a href="#parts16">ぬま</a></li>
                         <li id="parts17_menu"><a href="#parts17">ぬめ</a></li>
                         <li id="parts18_menu"><a href="#parts18">ぬる</a></li>
                         <li id="parts19_menu"><a href="#parts19">ぬれ</a></li>
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
                    <h3 class="ttl_while">ぬ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="1204">奴<span class="small">ヌ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12422">伮<span class="small">ヌ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3422">孥<span class="small">ヌ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1205">怒<span class="small">ヌ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24804">哝<span class="small">ヌ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13388">啂<span class="small">ヌ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20343">㳶<span class="small">ヌ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14983">搙<span class="small">ヌ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19208">㜌<span class="small">ヌ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19258">㝅<span class="small">ヌ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4491">駑<span class="small">ヌ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13543">噥<span class="small">ヌ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17741">豰<span class="small">ヌ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21047">䁸<span class="small">ヌ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17074">羺<span class="small">ヌ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17724">譳<span class="small">ヌ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23042">䨲<span class="small">ヌ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18405">鬞<span class="small">ヌ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23456">䰰<span class="small">ヌ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23655">䵜<span class="small">ヌ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18600">齈<span class="small">ヌ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">ぬい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3793">黹<span class="small">ぬいとり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4768">綉<span class="small">ぬいとり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2515">繍<span class="small">ぬいとり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3794">黻<span class="small">ぬいとり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3795">黼<span class="small">ぬいとり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6454">繡<span class="small">ぬいとり</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">ぬう</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3793">黹<span class="small">ぬ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4761">絎<span class="small">ぬ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17008">綘<span class="small">ぬ（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1556">縫<span class="small">ぬ（う）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">ぬえ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3818">鵺<span class="small">ぬえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7162">鵼<span class="small">ぬえ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">ぬか</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="10830">秔<span class="small">ぬか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5717">粐<span class="small">ぬか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8978">粇<span class="small">ぬか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8960">稉<span class="small">ぬか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5266">粳<span class="small">ぬか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7383">頟<span class="small">ぬか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2406">糠<span class="small">ぬか</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="664">額<span class="small">ぬか</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1202">吐<span class="small">ぬ（かす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1233">抜<span class="small">ぬ（かす）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5926">拔<span class="small">ぬ（かす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11294">㧞<span class="small">ぬ（かす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2074">頓<span class="small">ぬか（ずく）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7383">頟<span class="small">ぬか（ずく）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="664">額<span class="small">ぬか（ずく）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8953">粏<span class="small">ぬかみそ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27876">𣱿<span class="small">ぬかり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13720">垬<span class="small">ぬかり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1233">抜<span class="small">ぬ（かる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5926">拔<span class="small">ぬ（かる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11294">㧞<span class="small">ぬ（かる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3105">倥<span class="small">ぬか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25597">澝<span class="small">ぬか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4440">濘<span class="small">ぬか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25597">澝<span class="small">ぬかるみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4440">濘<span class="small">ぬかるみ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">ぬき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1351">貫<span class="small">ぬき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22481">䝺<span class="small">ぬき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1010">緯<span class="small">ぬき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4280">蹐<span class="small">ぬきあし</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2736">挺<span class="small">ぬき（んでる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2704">擢<span class="small">ぬき（んでる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">ぬく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3655">扎<span class="small">ぬ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1233">抜<span class="small">ぬ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1504">抽<span class="small">ぬ（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5926">拔<span class="small">ぬ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11294">㧞<span class="small">ぬ（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2736">挺<span class="small">ぬ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1351">貫<span class="small">ぬ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22481">䝺<span class="small">ぬ（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2704">擢<span class="small">ぬ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4740">鑷<span class="small">ぬ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1179">脱<span class="small">ぬ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11824">脫<span class="small">ぬ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="256">温<span class="small">ぬく（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6447">溫<span class="small">ぬく（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2027">拭<span class="small">ぬぐ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3702">揩<span class="small">ぬぐ（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="256">温<span class="small">ぬく（まる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6447">溫<span class="small">ぬく（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="256">温<span class="small">ぬく（める）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6447">溫<span class="small">ぬく（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">ぬけ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4058">蛻<span class="small">ぬけがら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1233">抜<span class="small">ぬ（ける）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5926">拔<span class="small">ぬ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11294">㧞<span class="small">ぬ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1179">脱<span class="small">ぬ（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11824">脫<span class="small">ぬ（げる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">ぬさ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3488">帛<span class="small">ぬさ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1882">幣<span class="small">ぬさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6174">幤<span class="small">ぬさ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">ぬし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="317">主<span class="small">ぬし</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">ぬす</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5157">睇<span class="small">ぬすみみ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1780">窃<span class="small">ぬす（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1209">盗<span class="small">ぬす（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3122">偸<span class="small">ぬす（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12549">偷<span class="small">ぬす（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6040">盜<span class="small">ぬす（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3741">攘<span class="small">ぬす（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6038">竊<span class="small">ぬす（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">ぬた</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5929">汢<span class="small">ぬた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5967">垈<span class="small">ぬた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5293">饅<span class="small">ぬた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8063">觘<span class="small">ぬたはだ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">ぬて</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="12255">橳<span class="small">ぬで</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">ぬな</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5335">茆<span class="small">ぬなわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9587">蒓<span class="small">ぬなわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5407">蓴<span class="small">ぬなわ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">ぬの</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="798">布<span class="small">ぬの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5033">袍<span class="small">ぬのこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1633">褐<span class="small">ぬのこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10042">褐<span class="small">ぬのこ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">ぬま</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1139">沼<span class="small">ぬま</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">ぬめ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4760">絖<span class="small">ぬめ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1348">滑<span class="small">ぬめ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">ぬる</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1517">塗<span class="small">ぬ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8777">舋<span class="small">ぬ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4853">釁<span class="small">ぬ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="256">温<span class="small">ぬる（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6447">溫<span class="small">ぬる（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1353">緩<span class="small">ぬる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4116">栲<span class="small">ぬるで</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27860">𣑥<span class="small">ぬるで</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">ぬれ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3157">冤<span class="small">ぬれぎぬ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6116">寃<span class="small">ぬれぎぬ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15666">渪<span class="small">ぬ（れる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2503">濡<span class="small">ぬ（れる）</span></a></li>
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