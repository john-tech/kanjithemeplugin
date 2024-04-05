<?php
/*
 * Template Name: Yomi11
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
               <h1 class="ttl_main">音訓検索「さ」</h1>
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
               <p>「さ」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>さ</option>
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
                         <li id="parts1_menu"><a href="#parts1">さ</a></li>
                         <li id="parts2_menu"><a href="#parts2">さい</a></li>
                         <li id="parts3_menu"><a href="#parts3">さえ</a></li>
                         <li id="parts4_menu"><a href="#parts4">さお</a></li>
                         <li id="parts5_menu"><a href="#parts5">さか</a></li>
                         <li id="parts6_menu"><a href="#parts6">さき</a></li>
                         <li id="parts7_menu"><a href="#parts7">さく</a></li>
                         <li id="parts8_menu"><a href="#parts8">さけ</a></li>
                         <li id="parts9_menu"><a href="#parts9">さこ</a></li>
                         <li id="parts10_menu"><a href="#parts10">ささ</a></li>
                         <li id="parts11_menu"><a href="#parts11">さし</a></li>
                         <li id="parts12_menu"><a href="#parts12">さす</a></li>
                         <li id="parts13_menu"><a href="#parts13">さそ</a></li>
                         <li id="parts14_menu"><a href="#parts14">さた</a></li>
                         <li id="parts15_menu"><a href="#parts15">さち</a></li>
                         <li id="parts16_menu"><a href="#parts16">さつ</a></li>
                         <li id="parts17_menu"><a href="#parts17">さて</a></li>
                         <li id="parts18_menu"><a href="#parts18">さと</a></li>
                         <li id="parts19_menu"><a href="#parts19">さな</a></li>
                         <li id="parts20_menu"><a href="#parts20">さね</a></li>
                         <li id="parts21_menu"><a href="#parts21">さは</a></li>
                         <li id="parts22_menu"><a href="#parts22">さひ</a></li>
                         <li id="parts23_menu"><a href="#parts23">さふ</a></li>
                         <li id="parts24_menu"><a href="#parts24">さま</a></li>
                         <li id="parts25_menu"><a href="#parts25">さむ</a></li>
                         <li id="parts26_menu"><a href="#parts26">さめ</a></li>
                         <li id="parts27_menu"><a href="#parts27">さや</a></li>
                         <li id="parts28_menu"><a href="#parts28">さよ</a></li>
                         <li id="parts29_menu"><a href="#parts29">さら</a></li>
                         <li id="parts30_menu"><a href="#parts30">さる</a></li>
                         <li id="parts31_menu"><a href="#parts31">され</a></li>
                         <li id="parts32_menu"><a href="#parts32">さわ</a></li>
                         <li id="parts33_menu"><a href="#parts33">さん</a></li>
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
                    <h3 class="ttl_while">さ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei onyomi"><a class="color2" href="2432">叉<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3447">屮<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18837">㔫<span class="small">サ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="023">左<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2430">乍<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12372">仨<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13172">卡<span class="small">サ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="709">再<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3659">扠<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15425">汊<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19616">㣾<span class="small">サ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="141">作<span class="small">サ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1696">佐<span class="small">サ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2006">沙<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3452">岔<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11944">杈<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13187">厏<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18688">㑅<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19458">㠺<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27850">𣏒<span class="small">サ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2431">些<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5336">苴<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6069">咋<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10008">衩<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11303">拃<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14919">抯<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15369">毑<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17216">苲<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19303">㝾<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19515">㡸<span class="small">サ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="188">茶<span class="small">サ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="704">査<span class="small">サ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="877">砂<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4019">柤<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4902">炸<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9251">耍<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9460">荖<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12478">侳<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12762">剉<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13313">咱<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15169">查<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21877">䑡<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27253">㱔<span class="small">サ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="506">差<span class="small">サ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1698">唆<span class="small">サ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2436">紗<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3387">娑<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5355">莎<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8952">粆<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9471">莝<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10357">痄<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10652">砟<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11249">挱<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13901">夎<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14303">宱<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15583">浾<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16389">猀<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17238">莏<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17544">袏<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17633">訍<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19166">㛖<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19167">㛗<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19365">㟇<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22556">䟕<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24815">唦<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3123">做<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4119">梭<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4682">釵<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8094">訯<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8794">笮<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9751">虘<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10199">琑<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11248">挲<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11817">脞<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12058">桫<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15189">桬<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20050">㭫<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20275">㲚<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20591">㸺<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21341">䇥<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21550">䋏<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24149">逤<span class="small">サ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1697">詐<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4389">渣<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5082">靫<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10372">痧<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10373">痤<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10631">矬<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10978">惢<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11400">揸<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12571">傞<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13438">喳<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13455">嗏<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14513">嵖<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16660">睉<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16736">硰<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21097">䂳<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22905">䦈<span class="small">サ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2433">嵯<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2434">嵳<span class="small">サ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2437">蓑<span class="small">サ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2438">裟<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3288">嗟<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3289">嗄<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3713">搓<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9582">蓌<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9583">䔋<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10800">䄍<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12138">楂<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12634">傻<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13469">嗦<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13472">嗩<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14168">嫅<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15724">溑<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15733">溠<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17304">蒫<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21988">䓾<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22100">䖕<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22761">䣔<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23073">䩖<span class="small">サ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2435">瑳<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4158">槎<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4631">瑣<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7627">銟<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9856">蜡<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10402">㾴<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10494">皶<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11713">暛<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12180">榨<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17331">蔖<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17660">誜<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17798">趖<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18309">飷<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19218">㜘<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19537">㢒<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20520">㷢<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21822">䐝<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21828">䐤<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22583">䟶<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22768">䣜<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23406">䯯<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24152">遳<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25894">碴<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4666">磋<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6895">魦<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7655">銼<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10061">褨<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10216">璅<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10415">瘥<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12205">樝<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12633">儍<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17673">諎<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18172">閯<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19923">㪥<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20829">㽨<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20942">㿷<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21026">䁟<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21383">䈗<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22840">䤬<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3854">鮓<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4586">簑<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9347">艖<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10495">皻<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17846">蹅<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21871">䑘<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4277">蹉<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4587">簔<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6830">髽<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6831">髿<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8760">醝<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8761">醡<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22490">䞆<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26149">鹾<span class="small">サ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1105">鎖<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3863">鯊<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6954">鯋<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6955">鮺<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6956">鮻<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7753">鎻<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7755">鎈<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17699">謯<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22621">䠡<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25650">餷<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7754">鏁<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23426">䰈<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7021">䱹<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7239">鹺<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23629">䴾<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23631">䵀<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23651">䵘<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6653">齄<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6670">齰<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6652">齇<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18614">齹<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17866">躦<span class="small">サ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23716">䶥<span class="small">サ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="037">小<span class="small">さ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="052">早<span class="small">さ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1069">狭<span class="small">さ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6252">狹<span class="small">さ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2439">坐<span class="small">ザ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24200">㘴<span class="small">ザ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12762">剉<span class="small">ザ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19046">㘸<span class="small">ザ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="878">座<span class="small">ザ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2007">挫<span class="small">ザ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19167">㛗<span class="small">ザ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19365">㟇<span class="small">ザ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20050">㭫<span class="small">ザ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16660">睉<span class="small">ザ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17304">蒫<span class="small">ザ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22100">䖕<span class="small">ザ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17331">蔖<span class="small">ザ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21828">䐤<span class="small">ザ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20942">㿷<span class="small">ザ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21871">䑘<span class="small">ザ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22621">䠡<span class="small">ザ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23629">䴾<span class="small">ザ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18614">齹<span class="small">ザ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17866">躦<span class="small">ザ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">さい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="140">才<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="174">切<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12887">亗<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="169">西<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="709">再<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3107">伜<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5099">犲<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18601">齐<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18753">㒲<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25106">岁<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27768">𢦏<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="509">材<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="705">災<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13174">卤<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16005">灾<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20311">㳃<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27769">𢦒<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27797">𡉻<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="707">妻<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1776">斉<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2008">采<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6655">亝<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10008">衩<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10104">卥<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10301">甾<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14916">抧<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19747">㦲<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21071">䂘<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23803">侪<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25528">际<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1700">砕<span class="small">サイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2440">哉<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4349">洒<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4657">砌<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9440">茈<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13897">夈<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14773">徆<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15515">洅<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20969">䀙<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24214">㢴<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24405">济<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25410">挤<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26636">㘽<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="506">差<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="511">殺<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="712">財<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1458">衰<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1699">栽<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1701">宰<span class="small">サイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2441">晒<span class="small">サイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2442">柴<span class="small">サイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2443">栖<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3106">倅<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5472">豺<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6654">斊<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6656">斋<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9062">紣<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9506">茝<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11346">挼<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11748">冣<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12649">㑪<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13074">倸<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13343">哸<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14365">屖<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14947">捚<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15373">毢<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16060">烖<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17633">訍<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19775">㧘<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19932">㪰<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20046">㭡<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22498">䞗<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26311">脐<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="139">細<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="298">祭<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="508">菜<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="706">採<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="750">責<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="879">済<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1107">彩<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1702">斎<span class="small">サイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2445">砦<span class="small">サイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2462">偲<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3460">崔<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4378">淬<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4682">釵<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5111">猜<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5154">眥<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5155">眦<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5941">萋<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6076">埣<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6323">戝<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9548">菑<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11749">㝡<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11822">脧<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12356">啐<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12934">殺<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13393">啋<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13399">啛<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13762">埰<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14071">婇<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14307">寀<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15138">朘<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16621">皉<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16989">絊<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19676">㥒<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21066">䂑<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22754">䣋<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24082">祡<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25409">㨈<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="507">最<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="880">裁<span class="small">サイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2444">犀<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5082">靫<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9547">葘<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11136">愢<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11401">揌<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11694">晬<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11842">䐆<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12094">棌<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12348">焠<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12886">嵗<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14494">崽<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15346">欼<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15675">渽<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16516">琗<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16660">睉<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20365">㴓<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23806">傤<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26330">舾<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1106">歳<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1108">載<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1415">催<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1416">債<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2009">塞<span class="small">サイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2437">蓑<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4236">腮<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5658">滓<span class="small">サイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5715">碎<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8386">跴<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9209">羧<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9983">䘒<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10568">睬<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10858">稡<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12885">歲<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13135">凗<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13417">喍<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15381">毸<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15739">溨<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16151">煞<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16792">祽<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17562">裚<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17979">酨<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19536">㢑<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20782">㼮<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21108">䃀<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21978">䓱<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21991">䔂<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22223">䘹<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23249">䬩<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24942">嗮<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26846">跻<span class="small">サイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="708">際<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3718">摧<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4160">寨<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4772">綵<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5404">蔡<span class="small">サイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5831">齊<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9061">綷<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13477">嗺<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13847">墔<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14549">嶊<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14868">慛<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15000">摖<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15822">漼<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16670">睵<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18801">㓾<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18991">㗫<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19225">㜠<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19331">㞜<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20241">㱰<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20411">㵏<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21571">䋩<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21828">䐤<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22475">䝴<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23020">䨖<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23617">䴭<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25563">霁<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25782">獕<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3722">撕<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8161">誶<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9646">蕞<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10213">璀<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10415">瘥<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12206">槯<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12635">僿<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12636">儎<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13509">嘬<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16194">熣<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17169">膗<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17838">踩<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19293">㝮<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19849">㩄<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20893">㾷<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20895">㾹<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21393">䈢<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22011">䔝<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22028">䔴<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22241">䙑<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22593">䠁<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26162">齑<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3139">儕<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4586">簑<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4790">縡<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6220">樶<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6577">鼒<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7305">鞖<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7693">鋷<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8071">䚡<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9104">縗<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10422">瘵<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10480">皠<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10732">磪<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10878">穄<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14580">嶵<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16218">燊<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16760">磜<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17768">賳<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18060">錊<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18226">霋<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19428">㠑<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19863">㩙<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20122">㯕<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21751">䏁<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21826">䐡<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22929">䦤<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24955">噻<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27726">𡕀<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3732">擠<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4587">簔<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5488">賽<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5975">濟<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6012">齋<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9115">繀<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10884">穝<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11733">㬠<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15296">檌<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17032">縩<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17591">襊<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18175">閷<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20803">㽄<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22536">䟀<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22611">䠕<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23133">䪠<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23698">䶒<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23699">䶓<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4314">臍<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5141">顋<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19874">㩨<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20619">㹗<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22391">䜃<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22392">䜅<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23418">䯿<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23420">䰂<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23665">䵧<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27727">𠧋<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5321">韲<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6660">䪡<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7780">鎩<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7781">鏙<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8916">簺<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18513">鶈<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21174">䄢<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21519">䊫<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21670">䍤<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23422">䰄<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27437">䪢<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3876">鰓<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21630">䌨<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23134">䪣<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23349">䮨<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26621">㘔<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3949">齎<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4294">躋<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18604">齜<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23651">䵘<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3996">霽<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4457">灑<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6659">虀<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18140">鑇<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4819">纔<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5320">齏<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11740">曬<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18597">鼶<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23606">䴝<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23433">䰏<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18568">麡<span class="small">サイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7306">䪎<span class="small">サイ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2010">埼<span class="small">さい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6068">碕<span class="small">さい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4826">骰<span class="small">さい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27714">𥔎<span class="small">さい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27870">𣝤<span class="small">さい</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="710">在<span class="small">ザイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14902">扗<span class="small">ザイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18753">㒲<span class="small">ザイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="509">材<span class="small">ザイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23809">剂<span class="small">ザイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17227">荋<span class="small">ザイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24483">荠<span class="small">ザイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24803">哜<span class="small">ザイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="712">財<span class="small">ザイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1109">剤<span class="small">ザイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6323">戝<span class="small">ザイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9694">萕<span class="small">ザイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20861">㾍<span class="small">ザイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="711">罪<span class="small">ザイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9181">辠<span class="small">ザイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15739">溨<span class="small">ザイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23617">䴭<span class="small">ザイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6062">劑<span class="small">ザイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5434">薺<span class="small">ザイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13563">嚌<span class="small">ザイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23698">䶒<span class="small">ザイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15312">櫅<span class="small">ザイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16561">璾<span class="small">ザイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22411">䜞<span class="small">ザイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23433">䰏<span class="small">ザイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18568">麡<span class="small">ザイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23720">䶩<span class="small">ザイ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4826">骰<span class="small">さいころ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5488">賽<span class="small">さいころ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1959">牙<span class="small">さいとり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1958">苛<span class="small">さいな（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3295">嘖<span class="small">さいな（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="010">休<span class="small">さいわ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="293">幸<span class="small">さいわ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1424">祉<span class="small">さいわ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6396">祉<span class="small">さいわ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1741">祥<span class="small">さいわ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2393">倖<span class="small">さいわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4908">烋<span class="small">さいわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5636">祚<span class="small">さいわ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6369">祥<span class="small">さいわ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3020">禄<span class="small">さいわ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="407">福<span class="small">さいわ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2754">禎<span class="small">さいわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5639">祺<span class="small">さいわ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6011">祿<span class="small">さいわ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6370">福<span class="small">さいわ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6401">禎<span class="small">さいわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16801">禥<span class="small">さいわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5642">禧<span class="small">さいわ（い）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">さえ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="140">才<span class="small">ざえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8585">迾<span class="small">さえぎ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5522">遏<span class="small">さえぎ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1714">遮<span class="small">さえぎ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3353">壅<span class="small">さえぎ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3537">徼<span class="small">さえぎ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3960">閼<span class="small">さえぎ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19087">㙲<span class="small">さえぎ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3263">哢<span class="small">さえず（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3269">啅<span class="small">さえず（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24905">啭<span class="small">さえず（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3321">囀<span class="small">さえず（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3160">冱<span class="small">さ（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2387">冴<span class="small">さ（える）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">さお</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2258">竿<span class="small">さお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4141">棹<span class="small">さお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3663">找<span class="small">さおさ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4141">棹<span class="small">さおさ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27848">𣍲<span class="small">さおとめ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">さか</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="394">坂<span class="small">さか</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2090">阪<span class="small">さか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3335">坡<span class="small">さか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5182">陂<span class="small">さか</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="674">逆<span class="small">さか</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="315">酒<span class="small">さか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3474">嶝<span class="small">さか</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="745">性<span class="small">さが</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="348">相<span class="small">さが</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3331">圻<span class="small">さかい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="259">界<span class="small">さかい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1544">封<span class="small">さかい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3337">垓<span class="small">さかい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3338">垠<span class="small">さかい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5952">畍<span class="small">さかい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13716">垦<span class="small">さかい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5448">畛<span class="small">さかい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="826">域<span class="small">さかい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5190">陲<span class="small">さかい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5543">竟<span class="small">さかい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24073">畡<span class="small">さかい</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2223">堺<span class="small">さかい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10334">畺<span class="small">さかい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="679">境<span class="small">さかい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3537">徼<span class="small">さかい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10335">壃<span class="small">さかい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10336">疅<span class="small">さかい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5455">疆<span class="small">さかい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="449">栄<span class="small">さか（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11980">荣<span class="small">さか（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5731">榮<span class="small">さか（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2446">榊<span class="small">さかき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1212">倒<span class="small">さかさま</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2997">伶<span class="small">さか（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3098">俐<span class="small">さか（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3576">悧<span class="small">さか（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1388">賢<span class="small">さか（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3754">黠<span class="small">さか（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8317">贒<span class="small">さか（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11267">扖<span class="small">さが（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1705">索<span class="small">さが（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1794">捜<span class="small">さが（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="939">探<span class="small">さが（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6187">搜<span class="small">さが（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11348">摉<span class="small">さが（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21600">䌇<span class="small">さが（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3212">卮<span class="small">さかずき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6171">巵<span class="small">さかずき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1226">杯<span class="small">さかずき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2820">盃<span class="small">さかずき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25832">盏<span class="small">さかずき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11973">桮<span class="small">さかずき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26576">觞<span class="small">さかずき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5566">盞<span class="small">さかずき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5578">觚<span class="small">さかずき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11974">㮎<span class="small">さかずき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1717">爵<span class="small">さかずき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2578">鍾<span class="small">さかずき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5580">觴<span class="small">さかずき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27706">𣝣<span class="small">さかずき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3978">罍<span class="small">さかだる</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2409">肴<span class="small">さかな</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="109">魚<span class="small">さかな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2233">鮭<span class="small">さかな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11767">餚<span class="small">さかな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4336">泝<span class="small">さかのぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8607">㴑<span class="small">さかのぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3031">溯<span class="small">さかのぼ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2044">遡<span class="small">さかのぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27710">𫒼<span class="small">さかほこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3474">嶝<span class="small">さかみち</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2188">燕<span class="small">さかもり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20538">㷼<span class="small">さかもり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7213">鷰<span class="small">さかもり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7214">䴏<span class="small">さかもり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16810">秗<span class="small">さかも（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5279">飫<span class="small">さかも（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5012">讌<span class="small">さかも（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8564">迕<span class="small">さか（らう）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="674">逆<span class="small">さか（らう）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4831">牾<span class="small">さか（らう）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3540">忤<span class="small">さから（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="921">盛<span class="small">さか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6587">丅<span class="small">さ（がる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="015">下<span class="small">さ（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3210">卉<span class="small">さか（ん）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1795">壮<span class="small">さか（ん）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5801">壯<span class="small">さか（ん）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1954">旺<span class="small">さか（ん）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2561">昌<span class="small">さか（ん）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2158">郁<span class="small">さか（ん）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12998">芔<span class="small">さか（ん）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13890">壵<span class="small">さか（ん）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25613">炽<span class="small">さか（ん）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3370">奘<span class="small">さか（ん）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3907">晟<span class="small">さか（ん）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5365">殷<span class="small">さか（ん）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5816">弉<span class="small">さか（ん）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25361">晔<span class="small">さか（ん）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="921">盛<span class="small">さか（ん）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1587">隆<span class="small">さか（ん）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11678">晠<span class="small">さか（ん）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5607">翕<span class="small">さか（ん）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7945">隆<span class="small">さか（ん）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17084">翖<span class="small">さか（ん）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2243">赫<span class="small">さか（ん）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3929">曄<span class="small">さか（ん）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11728">曅<span class="small">さか（ん）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18723">㒆<span class="small">さか（ん）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4928">熹<span class="small">さか（ん）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4929">熾<span class="small">さか（ん）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16209">熺<span class="small">さか（ん）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3631">懋<span class="small">さか（ん）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15124">曗<span class="small">さか（ん）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5442">藹<span class="small">さか（ん）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24141">譪<span class="small">さか（ん）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4509">驕<span class="small">さか（ん）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25423">欎<span class="small">さか（ん）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3030">欝<span class="small">さか（ん）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18408">鬰<span class="small">さか（ん）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1950">鬱<span class="small">さか（ん）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2278">祁<span class="small">さか（んに）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">さき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="049">先<span class="small">さき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2634">尖<span class="small">さき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="177">前<span class="small">さき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12763">歬<span class="small">さき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1703">崎<span class="small">さき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2010">埼<span class="small">さき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12764">偂<span class="small">さき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19389">㟢<span class="small">さき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6085">嵜<span class="small">さき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24180">﨑<span class="small">さき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6068">碕<span class="small">さき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27714">𥔎<span class="small">さき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3924">曩<span class="small">さき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7229">鴼<span class="small">さぎ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3014">鷺<span class="small">さぎ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2232">魁<span class="small">さきがけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21973">䓪<span class="small">さきくさ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="294">向<span class="small">さき（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5454">畴<span class="small">さき（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3315">嚮<span class="small">さき（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5453">疇<span class="small">さき（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3924">曩<span class="small">さき（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26843">跸<span class="small">さきばらい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27776">𠌫<span class="small">さきばらい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4286">蹕<span class="small">さきばらい</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">さく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="882">冊<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5761">册<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15426">汋<span class="small">サク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="141">作<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13187">厏<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18688">㑅<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6069">咋<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11046">怍<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14400">岝<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14401">岞<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15488">泎<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17216">苲<span class="small">サク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="510">昨<span class="small">サク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1417">削<span class="small">サク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2011">柵<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4020">柞<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4902">炸<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8573">迮<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11991">栅<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14927">拺<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15526">洓<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15542">洬<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20584">㸲<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24109">茦<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="25512">泶<span class="small">サク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1705">索<span class="small">サク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2447">朔<span class="small">サク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2448">窄<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6611">丵<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10652">砟<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11334">捔<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11548">敇<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12774">剒<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13194">厝<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14029">娋<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14038">娕<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14039">娖<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15178">栜<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15562">浞<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16814">秨<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17237">莋<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17241">莡<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20642">㹱<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21954">䓎<span class="small">サク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1474">措<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3123">做<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8793">笧<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8794">笮<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8811">萗<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8955">粣<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9330">舴<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9795">蚱<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11047">㤰<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12854">欶<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13380">唶<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15363">殐<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19381">㟙<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20348">㳻<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20858">㾊<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21341">䇥<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21550">䋏<span class="small">サク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="881">策<span class="small">サク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1704">酢<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8594">逪<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10624">矟<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11590">斮<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12095">棤<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16121">焳<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17278">萷<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17282">葃<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21352">䇲<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21479">䊂<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22467">䝫<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22509">䞢<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24719">凿<span class="small">サク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="168">数<span class="small">サク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1419">搾<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4534">筰<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4538">筴<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7570">鈼<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9584">蒴<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10625">矠<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11424">搠<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13453">嗍<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15750">溹<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16830">稓<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16894">筞<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18034">銏<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19822">㨞<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19838">㨲<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21101">䂹<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21319">䇎<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21363">䇿<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3295">嘖<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3604">愬<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4167">槊<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7376">頙<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9637">蔶<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12181">㮶<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13481">嘀<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14189">嫧<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14650">幘<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15013">摵<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16910">箣<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19609">㣱<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19707">㥽<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20089">㮦<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22014">䔠<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22522">䞰<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24163">飵<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4173">槭<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4845">醋<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6202">數<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7656">鋜<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8856">箾<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12890">歵<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14880">憡<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15266">樍<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16196">熦<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16915">箹<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17673">諎<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19852">㩇<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19856">㩍<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21122">䃗<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21242">䅴<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22428">䜺<span class="small">サク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1418">錯<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4796">縒<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10481">皟<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10595">瞔<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11497">擌<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11498">擉<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16611">瘷<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16926">篧<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19005">㘀<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21600">䌇<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23024">䨛<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="27753">𥻨<span class="small">サク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1717">爵<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4592">簀<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8891">簎<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10885">穛<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15883">澩<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17102">耫<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19867">㩞<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22533">䞽<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22773">䣢<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7756">鎍<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9759">虩<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17698">謮<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18093">鎙<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21736">䎰<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22106">䖛<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22540">䟄<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="27706">𣝣<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6977">䱜<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8325">賾<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20456">㶅<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6669">齚<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18119">鏼<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22078">䕴<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22877">䥘<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15967">灂<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22886">䥣<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3772">齪<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7204">鷟<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6670">齰<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6671">齱<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7845">鑡<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10899">穱<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14270">孎<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6675">齺<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8992">糳<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23717">䶦<span class="small">サク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4746">鑿<span class="small">サク</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="413">放<span class="small">さ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1779">析<span class="small">さ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3173">刳<span class="small">さ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3672">拆<span class="small">さ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20030">㭊<span class="small">さ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1110">咲<span class="small">さ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4902">炸<span class="small">さ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1893">剖<span class="small">さ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="836">割<span class="small">さ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1596">裂<span class="small">さ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3444">屠<span class="small">さ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7563">釽<span class="small">さ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3185">劈<span class="small">さ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3722">撕<span class="small">さ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4671">磔<span class="small">さ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14281">孹<span class="small">さ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3729">擘<span class="small">さ（く）</span></a></li>
                         <li class="others_kanji onyomi"><a href="17216">苲<span class="small">ザク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16814">秨<span class="small">ザク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17237">莋<span class="small">ザク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21550">䋏<span class="small">ザク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22467">䝫<span class="small">ザク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16830">稓<span class="small">ザク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24163">飵<span class="small">ザク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13527">噍<span class="small">ザク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17673">諎<span class="small">ザク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16926">篧<span class="small">ザク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22773">䣢<span class="small">ザク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21736">䎰<span class="small">ザク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20012">㬭<span class="small">ザク</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="650">桜<span class="small">さくら</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5686">櫻<span class="small">さくら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="939">探<span class="small">さぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2830">摸<span class="small">さぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5525">遉<span class="small">さぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2742">諜<span class="small">さぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4164">榴<span class="small">ざくろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12196">橊<span class="small">ざくろ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">さけ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="315">酒<span class="small">さけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2291">麹<span class="small">さけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6913">鮏<span class="small">さけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2233">鮭<span class="small">さけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7270">麯<span class="small">さけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6472">麴<span class="small">さけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6914">鯹<span class="small">さけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4641">髦<span class="small">さげがみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13864">墰<span class="small">さけがめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13868">墵<span class="small">さけがめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3356">壜<span class="small">さけがめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3974">罎<span class="small">さけがめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5483">貶<span class="small">さげす（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2100">蔑<span class="small">さげす（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9633">薎<span class="small">さげす（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="296">号<span class="small">さけ（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1068">叫<span class="small">さけ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13261">呌<span class="small">さけ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24813">唤<span class="small">さけ（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1356">喚<span class="small">さけ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3276">喊<span class="small">さけ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6302">號<span class="small">さけ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3295">嘖<span class="small">さけ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3308">嚆<span class="small">さけ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3674">拌<span class="small">さ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4902">炸<span class="small">さ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1596">裂<span class="small">さ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5076">躱<span class="small">さ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5318">辟<span class="small">さ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8466">躲<span class="small">さ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16170">煿<span class="small">さ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1244">避<span class="small">さ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1231">爆<span class="small">さ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6587">丅<span class="small">さ（げる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="015">下<span class="small">さ（げる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="775">提<span class="small">さ（げる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">さこ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5991">岶<span class="small">さこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27822">𡶡<span class="small">さこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27780">𠗖<span class="small">さこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18634">﨏<span class="small">さこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5511">逧<span class="small">さこ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">ささ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2449">笹<span class="small">ささ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="716">支<span class="small">ささ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2235">碍<span class="small">ささ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12182">榰<span class="small">ささ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4679">礙<span class="small">ささ（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2908">捧<span class="small">ささ（げる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1676">献<span class="small">ささ（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5856">獻<span class="small">ささ（げる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3005">漣<span class="small">さざなみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="139">細<span class="small">ささ（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26286">聂<span class="small">ささや（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24922">嗫<span class="small">ささや（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4863">聶<span class="small">ささや（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3319">囁<span class="small">ささや（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4528">筅<span class="small">ささら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4590">簓<span class="small">ささら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1115">刺<span class="small">さ（さる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">さし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="893">尺<span class="small">さし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9095">緍<span class="small">さし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4789">緡<span class="small">さし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3202">匕<span class="small">さじ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2851">枇<span class="small">さじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2463">匙<span class="small">さじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18839">㔭<span class="small">さじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4280">蹐<span class="small">さしあし</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2338">矩<span class="small">さしがね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10629">榘<span class="small">さしがね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3776">麾<span class="small">さしずばた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7226">鸇<span class="small">さしば</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13914">夹<span class="small">さしはさ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3365">夾<span class="small">さしはさ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1656">挟<span class="small">さしはさ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1800">挿<span class="small">さしはさ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4616">珥<span class="small">さしはさ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6186">挾<span class="small">さしはさ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6189">插<span class="small">さしはさ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11349">揷<span class="small">さしはさ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4793">縉<span class="small">さしはさ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9105">縉<span class="small">さしはさ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3776">麾<span class="small">さしまね（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="491">径<span class="small">さしわたし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5826">徑<span class="small">さしわたし</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">さす</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2432">叉<span class="small">さ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="147">止<span class="small">さ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3659">扠<span class="small">さ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="364">注<span class="small">さ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1115">刺<span class="small">さ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="300">指<span class="small">さ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="506">差<span class="small">さ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="892">射<span class="small">さ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1800">挿<span class="small">さ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6189">插<span class="small">さ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11349">揷<span class="small">さ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22638">䠶<span class="small">さ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4546">箚<span class="small">さ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6531">劄<span class="small">さ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4098">螫<span class="small">さ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4712">鍼<span class="small">さ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1105">鎖<span class="small">さ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7753">鎻<span class="small">さ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7754">鏁<span class="small">さ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5525">遉<span class="small">さすが</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5525">遉<span class="small">さすが（に）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="728">授<span class="small">さず（かる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="728">授<span class="small">さず（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1900">摩<span class="small">さす（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1421">擦<span class="small">さす（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11258">擵<span class="small">さす（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">さそ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="24780">呒<span class="small">さぞ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3302">嘸<span class="small">さぞ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6053">哘<span class="small">さそ（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1579">誘<span class="small">さそ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22385">䛻<span class="small">さそ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4085">蝎<span class="small">さそり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9883">蝲<span class="small">さそり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9947">蠆<span class="small">さそり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4104">蠍<span class="small">さそり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24326">䘍<span class="small">さそり</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">さた</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="19265">㝎<span class="small">さだ（か）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="370">定<span class="small">さだ（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19265">㝎<span class="small">さだ（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="370">定<span class="small">さだ（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="250">運<span class="small">さだめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3698">掟<span class="small">さだ（め）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19265">㝎<span class="small">さだ（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="550">折<span class="small">さだ（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="370">定<span class="small">さだ（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1512">訂<span class="small">さだ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11289">㪿<span class="small">さだ（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="771">断<span class="small">さだ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3371">奠<span class="small">さだ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19946">㫁<span class="small">さだ（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2097">蔽<span class="small">さだ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6344">隲<span class="small">さだ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6204">斷<span class="small">さだ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6758">騭<span class="small">さだ（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">さち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="13313">咱<span class="small">サチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20052">㭮<span class="small">サチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19314">㞉<span class="small">サチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18812">㔍<span class="small">サチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15044">攃<span class="small">サチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17591">襊<span class="small">サチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20445">㵶<span class="small">サチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17039">繓<span class="small">サチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21424">䉈<span class="small">サチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23976">幯<span class="small">サチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16781">礤<span class="small">サチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19742">㦫<span class="small">サチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15052">攥<span class="small">サチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16784">礸<span class="small">サチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23679">䵵<span class="small">サチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17525">蠽<span class="small">サチ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="293">幸<span class="small">さち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1741">祥<span class="small">さち</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6369">祥<span class="small">さち</span></a></li>
                         <li class="others_kanji onyomi"><a href="25344">擜<span class="small">ザチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13596">囋<span class="small">ザチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13598">囐<span class="small">ザチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19884">㩵<span class="small">ザチ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">さつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="3655">扎<span class="small">サツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="513">札<span class="small">サツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="882">冊<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5761">册<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15144">杀<span class="small">サツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="512">刷<span class="small">サツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2012">刹<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9407">茁<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20224">㱜<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20321">㳐<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24013">泧<span class="small">サツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2013">拶<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12759">剎<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13313">咱<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25511">沯<span class="small">サツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="511">殺<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9012">紥<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12030">桚<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26309">脎<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3182">剳<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4757">紮<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9796">蚻<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12934">殺<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20052">㭮<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21974">䓭<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26470">萨<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8130">詧<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16151">煞<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19314">㞉<span class="small">サツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="514">察<span class="small">サツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4364">颯<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4546">箚<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5404">蔡<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6531">劄<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7430">䬃<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11446">摋<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15000">摖<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15242">榝<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17338">蔱<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18991">㗫<span class="small">サツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1420">撮<span class="small">サツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2450">撒<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9689">蕯<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12207">樧<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18812">㔍<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25344">擜<span class="small">サツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1421">擦<span class="small">サツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2451">薩<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7726">鍘<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14583">嶻<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15044">攃<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17102">耫<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17591">襊<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18175">閷<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20445">㵶<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21503">䊛<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22051">䕓<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24959">嚓<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12291">檫<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14585">巀<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15315">櫒<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17039">繓<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21424">䉈<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23976">幯<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7780">鎩<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16781">礤<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21141">䃰<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18120">鏾<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21630">䌨<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13596">囋<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19742">㦫<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27172">鑔<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13598">囐<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15052">攥<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17862">躠<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19884">㩵<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16784">礸<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22902">䥷<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23679">䵵<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17525">蠽<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17527">蠿<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23721">䶪<span class="small">サツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27814">𣡽<span class="small">サツ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12155">柠<span class="small">さつ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4687">鈔<span class="small">さつ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4147">楮<span class="small">さつ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="052">早<span class="small">サッ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25368">杂<span class="small">ザツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="713">雑<span class="small">ザツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3048">襍<span class="small">ザツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3049">雜<span class="small">ザツ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2404">皋<span class="small">さつき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2403">皐<span class="small">さつき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10466">臯<span class="small">さつき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6986">鯯<span class="small">さっぱ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6987">䱥<span class="small">さっぱ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23486">䱨<span class="small">さっぱ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5316">芫<span class="small">さつまふじ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">さて</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3659">扠<span class="small">さて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3660">扨<span class="small">さて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3120">偖<span class="small">さて</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">さと</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="24538">乡<span class="small">さと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="237">里<span class="small">さと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="848">郷<span class="small">さと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="430">落<span class="small">さと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17962">鄉<span class="small">さと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17963">鄊<span class="small">さと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8664">鄕<span class="small">さと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3958">閭<span class="small">さと</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2998">怜<span class="small">さと（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11551">勄<span class="small">さと（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1250">敏<span class="small">さと（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1515">哲<span class="small">さと（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13743">埑<span class="small">さと（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6385">敏<span class="small">さと（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13401">啠<span class="small">さと（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2719">智<span class="small">さと（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13414">喆<span class="small">さと（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2667">聡<span class="small">さと（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6264">睿<span class="small">さと（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2173">慧<span class="small">さと（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9283">聦<span class="small">さと（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26291">聪<span class="small">さと（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2174">叡<span class="small">さと（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3477">嶷<span class="small">さと（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6282">聰<span class="small">さと（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26917">㠜<span class="small">さと（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3754">黠<span class="small">さと（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13574">嚞<span class="small">さと（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23938">壡<span class="small">さと（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5402">蔗<span class="small">さとうきび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2546">藷<span class="small">さとうきび</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2115">喩<span class="small">さと（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23905">喻<span class="small">さと（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1911">諭<span class="small">さと（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5009">譬<span class="small">さと（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8042">覐<span class="small">さと（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15073">斍<span class="small">さと（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="461">覚<span class="small">さと（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6043">覺<span class="small">さと（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1588">了<span class="small">さと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11085">忢<span class="small">さと（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1395">悟<span class="small">さと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4856">聆<span class="small">さと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8042">覐<span class="small">さと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15073">斍<span class="small">さと（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="461">覚<span class="small">さと（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1660">暁<span class="small">さと（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3592">惺<span class="small">さと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27497">䠲<span class="small">さと（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="660">解<span class="small">さと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6314">觧<span class="small">さと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3433">寤<span class="small">さと（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2988">諒<span class="small">さと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4985">諳<span class="small">さと（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5683">曉<span class="small">さと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11692">皢<span class="small">さと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6043">覺<span class="small">さと（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">さな</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1940">宛<span class="small">さなが（ら）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4063">蛹<span class="small">さなぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4769">絛<span class="small">さなだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9049">縧<span class="small">さなだ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">さね</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="513">札<span class="small">さね</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="311">実<span class="small">さね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14294">实<span class="small">さね</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1627">核<span class="small">さね</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5737">實<span class="small">さね</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts21">
                    <h3 class="ttl_while">さは</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="2581">鯖<span class="small">さば</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27708">𬵪<span class="small">さば</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4673">磧<span class="small">さばく</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2835">捌<span class="small">さば（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="880">裁<span class="small">さば（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2835">捌<span class="small">さば（ける）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts22">
                    <h3 class="ttl_while">さひ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1123">寂<span class="small">さび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4702">銹<span class="small">さび</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2577">錆<span class="small">さび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5999">鏥<span class="small">さび</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2832">莫<span class="small">さび（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1123">寂<span class="small">さび（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2990">淋<span class="small">さび（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="263">寒<span class="small">さび（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3590">愀<span class="small">さび（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3434">寞<span class="small">さび（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3435">寥<span class="small">さび（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1123">寂<span class="small">さ（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4702">銹<span class="small">さ（びる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2577">錆<span class="small">さ（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5999">鏥<span class="small">さ（びる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1123">寂<span class="small">さび（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts23">
                    <h3 class="ttl_while">さふ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1426">侍<span class="small">さぶら（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="500">候<span class="small">さぶら（う）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts24">
                    <h3 class="ttl_while">さま</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="25233">态<span class="small">さま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18712">㑷<span class="small">さま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="429">様<span class="small">さま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="769">態<span class="small">さま</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6008">樣<span class="small">さま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="633">冷<span class="small">さ（ます）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8042">覐<span class="small">さ（ます）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15073">斍<span class="small">さ（ます）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="461">覚<span class="small">さ（ます）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2034">醒<span class="small">さ（ます）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6043">覺<span class="small">さ（ます）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1561">妨<span class="small">さまた（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2235">碍<span class="small">さまた（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4679">礙<span class="small">さまた（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3527">彷<span class="small">さまよ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3089">佯<span class="small">さまよ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3530">徊<span class="small">さまよ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3534">徘<span class="small">さまよ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5515">逍<span class="small">さまよ（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2960">遥<span class="small">さまよ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3535">徨<span class="small">さまよ（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5778">遙<span class="small">さまよ（う）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts25">
                    <h3 class="ttl_while">さむ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3160">冱<span class="small">さむ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25508">沧<span class="small">さむ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3161">冽<span class="small">さむ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4345">洌<span class="small">さむ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2033">凄<span class="small">さむ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12333">凊<span class="small">さむ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4379">淒<span class="small">さむ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="263">寒<span class="small">さむ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4406">滄<span class="small">さむ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3163">凜<span class="small">さむ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3164">凛<span class="small">さむ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="522">士<span class="small">さむらい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1426">侍<span class="small">さむらい</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts26">
                    <h3 class="ttl_while">さめ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="6895">魦<span class="small">さめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2417">鮫<span class="small">さめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3885">鰄<span class="small">さめ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="633">冷<span class="small">さ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8042">覐<span class="small">さ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15073">斍<span class="small">さ（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="461">覚<span class="small">さ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3433">寤<span class="small">さ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5058">褪<span class="small">さ（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2034">醒<span class="small">さ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6043">覺<span class="small">さ（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts27">
                    <h3 class="ttl_while">さや</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5328">苻<span class="small">さや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9467">荚<span class="small">さや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5352">莢<span class="small">さや</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2580">鞘<span class="small">さや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18265">韒<span class="small">さや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18260">鞩<span class="small">さや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27846">𣇵<span class="small">さやか</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="544">清<span class="small">さや（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15648">淸<span class="small">さや（か）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts28">
                    <h3 class="ttl_while">さよ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="7077">鱵<span class="small">さより</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts29">
                    <h3 class="ttl_while">さら</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="299">皿<span class="small">さら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1094">更<span class="small">さら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11744">㪅<span class="small">さら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5565">盒<span class="small">さら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="163">新<span class="small">さら</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2813">杷<span class="small">さらい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4374">浚<span class="small">さら（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2974">掠<span class="small">さら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4397">渫<span class="small">さら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20555">㸕<span class="small">さら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11534">爴<span class="small">さら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4439">濬<span class="small">さら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3745">攫<span class="small">さら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10277">瓼<span class="small">さらけ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2831">曝<span class="small">さら（ける）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2441">晒<span class="small">さら（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19971">㫧<span class="small">さら（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3916">晞<span class="small">さら（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4123">梟<span class="small">さら（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1540">漂<span class="small">さら（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="811">暴<span class="small">さら（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12052">䲷<span class="small">さら（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18489">鴵<span class="small">さら（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11717">㬥<span class="small">さら（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2831">曝<span class="small">さら（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11740">曬<span class="small">さら（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2831">曝<span class="small">さらば（える）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts30">
                    <h3 class="ttl_while">さる</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="340">申<span class="small">さる</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2043">狙<span class="small">さる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5115">猴<span class="small">さる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16415">猨<span class="small">さる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20661">㺅<span class="small">さる</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1612">猿<span class="small">さる</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="273">去<span class="small">さ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13206">厺<span class="small">さ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1009">違<span class="small">さ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="726">謝<span class="small">さ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4519">笊<span class="small">ざる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6114">桾<span class="small">さるがき</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts31">
                    <h3 class="ttl_while">され</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="26020">髅<span class="small">されこうべ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23195">䫫<span class="small">されこうべ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4828">髏<span class="small">されこうべ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4829">髑<span class="small">されこうべ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25260">戏<span class="small">ざ（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1053">戯<span class="small">ざ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11232">戱<span class="small">ざ（れる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6183">戲<span class="small">ざ（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts32">
                    <h3 class="ttl_while">さわ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="13043">伂<span class="small">さわ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1177">沢<span class="small">さわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4331">沛<span class="small">さわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20314">㳈<span class="small">さわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2404">皋<span class="small">さわ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2403">皐<span class="small">さわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10466">臯<span class="small">さわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5163">睾<span class="small">さわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2671">薮<span class="small">さわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5794">澤<span class="small">さわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5197">隰<span class="small">さわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2670">藪<span class="small">さわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5022">閙<span class="small">さわ（がしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5021">鬧<span class="small">さわ（がしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3307">噪<span class="small">さわ（がしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5018">鬨<span class="small">さわ（がしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4292">躁<span class="small">さわ（がしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5010">譟<span class="small">さわ（がしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5022">閙<span class="small">さわ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5021">鬧<span class="small">さわ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3307">噪<span class="small">さわ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5018">鬨<span class="small">さわ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1169">騒<span class="small">さわ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2583">擾<span class="small">さわ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4292">躁<span class="small">さわ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5010">譟<span class="small">さわ（ぐ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6350">騷<span class="small">さわ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4846">醂<span class="small">さわ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1169">騒<span class="small">ざわ（つく）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6350">騷<span class="small">ざわ（つく）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2046">爽<span class="small">さわ（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4154">椹<span class="small">さわら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3882">鰆<span class="small">さわら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4830">牴<span class="small">さわ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1147">触<span class="small">さわ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="910">障<span class="small">さわ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6315">觸<span class="small">さわ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts33">
                    <h3 class="ttl_while">さん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="024">三<span class="small">サン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="025">山<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5793">彡<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12364">仐<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17932">邓<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25259">戋<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4322">汕<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6357">弎<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13207">厽<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17934">邖<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24218">㦮<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24547">产<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24563">伞<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25497">汆<span class="small">サン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1774">杉<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3171">刪<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5322">芟<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6543">删<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12776">刬<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25608">灿<span class="small">サン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="515">参<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3646">戔<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5023">衫<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5212">疝<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6610">丳<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13210">叁<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13995">姍<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18695">㑑<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19581">㣌<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20222">㱚<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20962">䀐<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25039">姗<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27362">㹪<span class="small">サン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2454">珊<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3941">閂<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9326">舢<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11647">昝<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13069">俕<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16376">狦<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25088">孪<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25377">栈<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25525">浐<span class="small">サン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="883">蚕<span class="small">サン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1706">桟<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8089">訕<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8787">笇<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10787">祘<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12775">剗<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16386">狻<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17780">赸<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19161">㛑<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19790">㧲<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22319">䚲<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25832">盏<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26866">軕<span class="small">サン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="517">産<span class="small">サン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1111">惨<span class="small">サン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2014">斬<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5890">參<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7471">飡<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7533">釤<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10291">產<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13085">偺<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13211">叄<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14308">寁<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14632">帴<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15607">涮<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17255">菚<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19383">㟛<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19386">㟞<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19666">㥇<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20050">㭫<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20052">㭮<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20654">㹽<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25327">掺<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26512">㕘<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26911">㟥<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26926">㡎<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27713">𥒎<span class="small">サン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="516">散<span class="small">サン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1707">傘<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3445">孱<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4259">跚<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6122">棧<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7470">湌<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10172">琖<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10374">痠<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13212">叅<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13420">喒<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14970">揝<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18166">閐<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19196">㛽<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19910">㪔<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19915">㪚<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21799">䏼<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23244">䬤<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25332">搀<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25487">毵<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25488">毶<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25936">窜<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2456">蒜<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5267">粲<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5566">盞<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8835">筭<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8839">㮍<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10691">碊<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12588">傪<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12797">剷<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12798">剼<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14986">搟<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16144">煔<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18034">銏<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18168">閚<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21364">䈀<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21486">䊉<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23071">䩔<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24741">厁<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27614">䅟<span class="small">サン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="142">算<span class="small">サン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="715">酸<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3471">嶄<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5405">蔘<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5876">慘<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9620">蔪<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9777">蝅<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11447">摻<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11750">朁<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12617">僝<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13486">嘇<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14538">嵼<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14540">嵾<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14544">嶃<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14648">幓<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14998">摌<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15012">摲<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15781">滻<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16438">獑<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19217">㜗<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19224">㜞<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19414">㠁<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19713">㦃<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20671">㺑<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21491">䊏<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21713">䎒<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22135">䗃<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22455">䝜<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22474">䝳<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23059">䩆<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23618">䴮<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25990">糁<span class="small">サン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="714">賛<span class="small">サン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2450">撒<span class="small">サン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2452">撰<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4176">槧<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4425">潸<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4428">潺<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5271">糂<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8508">輚<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8748">醆<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12984">毿<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14558">嶘<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15854">潵<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15857">潹<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16330">犙<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16582">甉<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16968">糌<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18047">鋑<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19847">㨻<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20111">㯆<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20608">㹌<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20677">㺗<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20678">㺘<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20734">㻮<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21837">䐮<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22839">䤫<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23260">䬸<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23463">䰼<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23636">䵇<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24029">澘<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24683">儏<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25343">撺<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2459">餐<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6509">篡<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9673">薓<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10066">襂<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10733">磛<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10877">穇<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12993">匴<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14236">嬠<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15887">澯<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16206">熶<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17356">薒<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17409">虥<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17410">虦<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18807">㔆<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18812">㔍<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19588">㣓<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19720">㦌<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20739">㻵<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20830">㽩<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22156">䗝<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22157">䗞<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22532">䞼<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23164">䫅<span class="small">サン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2453">燦<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3215">簒<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8885">篸<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8886">篹<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8979">糝<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9116">縿<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10236">璨<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11177">憯<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11476">撍<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12271">檆<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12668">儧<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12874">歜<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12924">殩<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12967">毚<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16930">簅<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17043">繤<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17495">螹<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19576">㣅<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21172">䄟<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22771">䣟<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23914">噆<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3637">懴<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3742">攅<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4807">繖<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5623">竄<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6957">䱗<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8424">蹔<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8725">鄼<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8762">醦<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15928">濽<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16973">糤<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17614">覱<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17701">謲<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19438">㠝<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19872">㩥<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21424">䉈<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21436">䉔<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21843">䐶<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22539">䟃<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22541">䟅<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25962">簮<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27882">𩈲<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27884">𩔊<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4722">鏨<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6327">贊<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7782">鏟<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7788">鏩<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8532">轏<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10261">瓉<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10438">㿊<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11178">㦧<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12324">櫕<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12332">儳<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12814">劖<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18107">鏒<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22623">䠣<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22691">䡲<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23481">䱠<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23627">䴼<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26862">蹿<span class="small">サン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2455">纂<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3479">巉<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3636">懺<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3994">霰<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4598">簪<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7812">鐟<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11525">攙<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11526">攕<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13586">嚵<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15961">瀺<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16972">糣<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17721">譧<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17974">酁<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18120">鏾<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20163">㰑<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20688">㺥<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21142">䃱<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21625">䌣<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21691">䍼<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22987">䧯<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23193">䫩<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23275">䭕<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25670">爘<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26158">黪<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4505">驂<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4822">纉<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5295">饌<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6849">鬖<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7503">饊<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8225">䜛<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9220">羼<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11530">攛<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11928">䑎<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12312">欃<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12667">儹<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12815">劗<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20464">㶒<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20571">㸥<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22818">䤔<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23198">䫮<span class="small">サン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2457">讃<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6492">攢<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7811">鐕<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8724">酇<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9736">蘸<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13596">囋<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14284">孿<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14595">巑<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15978">灒<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18384">驏<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19248">㜺<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21055">䂁<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21149">䃸<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22189">䘉<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22549">䟎<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23501">䱿<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23587">䳻<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4744">鑚<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4819">纔<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10260">瓚<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12323">欑<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17182">臢<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17198">艬<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18581">黲<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21526">䊲<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5017">讒<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9778">蠺<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10627">䂎<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16804">禶<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16845">穳<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17598">襸<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18415">魙<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22822">䤘<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23046">䨷<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6506">纘<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7854">鑱<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16946">籫<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17865">躥<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19260">㝈<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2458">讚<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6304">蠶<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7511">饞<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7860">鑹<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8358">趲<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17866">躦<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22697">䡽<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23119">䪌<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4743">鑽<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23719">䶨<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24172">饡<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4945">爨<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23438">䰖<span class="small">サン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25259">戋<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24218">㦮<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3646">戔<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20222">㱚<span class="small">ザン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="518">残<span class="small">ザン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1111">惨<span class="small">ザン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2014">斬<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19383">㟛<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19666">㥇<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20050">㭫<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22333">䛁<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5906">殘<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21799">䏼<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25936">窜<span class="small">ザン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1790">漸<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3350">塹<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3471">嶄<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3610">慚<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5876">慘<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14544">嶃<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19224">㜞<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21713">䎒<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22474">䝳<span class="small">ザン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1422">暫<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3609">慙<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4176">槧<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19847">㨻<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23463">䰼<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25343">撺<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18807">㔆<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22532">䞼<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13878">壍<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17495">螹<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3637">懴<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5623">竄<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19438">㠝<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4722">鏨<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7788">鏩<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12332">儳<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3479">巉<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3636">懺<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17974">酁<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20688">㺥<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22987">䧯<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23275">䭕<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8225">䜛<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11530">攛<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12815">劗<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23198">䫮<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13596">囋<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14595">巑<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18384">驏<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21055">䂁<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23587">䳻<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17198">艬<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5017">讒<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16804">禶<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16845">穳<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17866">躦<span class="small">ザン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23119">䪌<span class="small">ザン</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3208">卅<span class="small">さんじゅう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3209">丗<span class="small">さんじゅう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3869">鯢<span class="small">さんしょううお</span></a></li>
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