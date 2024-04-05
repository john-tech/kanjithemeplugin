<?php
/*
 * Template Name: Yomi35
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
               <h1 class="ttl_main">音訓検索「も」</h1>
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
               <p>「も」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>も</option>
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
                         <li id="parts1_menu"><a href="#parts1">も</a></li>
                         <li id="parts2_menu"><a href="#parts2">もう</a></li>
                         <li id="parts3_menu"><a href="#parts3">もえ</a></li>
                         <li id="parts4_menu"><a href="#parts4">もか</a></li>
                         <li id="parts5_menu"><a href="#parts5">もく</a></li>
                         <li id="parts6_menu"><a href="#parts6">もけ</a></li>
                         <li id="parts7_menu"><a href="#parts7">もし</a></li>
                         <li id="parts8_menu"><a href="#parts8">もす</a></li>
                         <li id="parts9_menu"><a href="#parts9">もた</a></li>
                         <li id="parts10_menu"><a href="#parts10">もち</a></li>
                         <li id="parts11_menu"><a href="#parts11">もつ</a></li>
                         <li id="parts12_menu"><a href="#parts12">もて</a></li>
                         <li id="parts13_menu"><a href="#parts13">もと</a></li>
                         <li id="parts14_menu"><a href="#parts14">もぬ</a></li>
                         <li id="parts15_menu"><a href="#parts15">もの</a></li>
                         <li id="parts16_menu"><a href="#parts16">もみ</a></li>
                         <li id="parts17_menu"><a href="#parts17">もむ</a></li>
                         <li id="parts18_menu"><a href="#parts18">もめ</a></li>
                         <li id="parts19_menu"><a href="#parts19">もも</a></li>
                         <li id="parts20_menu"><a href="#parts20">もや</a></li>
                         <li id="parts21_menu"><a href="#parts21">もよ</a></li>
                         <li id="parts22_menu"><a href="#parts22">もら</a></li>
                         <li id="parts23_menu"><a href="#parts23">もり</a></li>
                         <li id="parts24_menu"><a href="#parts24">もる</a></li>
                         <li id="parts25_menu"><a href="#parts25">もれ</a></li>
                         <li id="parts26_menu"><a href="#parts26">もろ</a></li>
                         <li id="parts27_menu"><a href="#parts27">もん</a></li>
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
                    <h3 class="ttl_while">も</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="13009">么<span class="small">モ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="221">母<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25213">庅<span class="small">モ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1284">茂<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3378">姆<span class="small">モ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2903">姥<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14340">尛<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14434">峔<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16307">牳<span class="small">モ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2832">莫<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16723">砪<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17061">罞<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20977">䀤<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21794">䏵<span class="small">モ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1550">募<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19482">㡔<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21975">䓮<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24284">䍙<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2830">摸<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3402">媽<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14192">嫫<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14865">慔<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19067">㙙<span class="small">モ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="989">模<span class="small">モ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1572">膜<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3502">麼<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7276">麽<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17829">踇<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13866">墲<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5847">糢<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16461">獴<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17034">縸<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3631">懋<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5000">謨<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17696">謩<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21035">䁫<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24958">嚒<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18233">霥<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21433">䉑<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22258">䙦<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22858">䥂<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22863">䥈<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17714">譕<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25659">饃<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23491">䱯<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18243">靀<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23630">䴿<span class="small">モ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17858">躌<span class="small">モ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7278">靣<span class="small">も</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24532">丧<span class="small">も</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="416">面<span class="small">も</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10033">帬<span class="small">も</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11748">冣<span class="small">も</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22214">䘮<span class="small">も</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11749">㝡<span class="small">も</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="507">最<span class="small">も</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1798">喪<span class="small">も</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5042">裙<span class="small">も</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10032">裠<span class="small">も</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2574">裳<span class="small">も</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9717">薻<span class="small">も</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1797">藻<span class="small">も</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">もう</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="984">亡<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6718">兦<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6719">亾<span class="small">モウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="229">毛<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12697">冃<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13122">冈<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21654">䍏<span class="small">モウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1271">忙<span class="small">モウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1908">妄<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6041">网<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13226">吂<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19765">㧇<span class="small">モウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="983">忘<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10955">㤀<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18623">冝<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19769">㧌<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25369">杧<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25679">牤<span class="small">モウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1906">盲<span class="small">モウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2920">孟<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5319">氓<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5586">罔<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6284">冐<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10305">甿<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18758">㒺<span class="small">モウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1272">冒<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2924">虻<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5350">茫<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5381">莽<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16871">笀<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19374">㟐<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24321">䖟<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24805">哞<span class="small">モウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1907">耗<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3781">旄<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5479">耄<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9489">莔<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12706">冡<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12853">勐<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13331">哤<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14033">娏<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15561">浝<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16383">狵<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19370">㟌<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19654">㤶<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21541">䋃<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21542">䋄<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26376">莣<span class="small">モウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="612">望<span class="small">モウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1286">猛<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3585">惘<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7675">釯<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9527">莾<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15139">朚<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17604">覒<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17879">軞<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17977">酕<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18759">㒻<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21794">䏵<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21964">䓝<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25326">掹<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9826">蛧<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14507">嵍<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15211">棢<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17279">萺<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20278">㲝<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20370">㴘<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21975">䓮<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23951">媢<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27598">䋞<span class="small">モウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2923">蒙<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19067">㙙<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19412">㟿<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19918">㪞<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19998">㬒<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20081">㮘<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20390">㴳<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21986">䓼<span class="small">モウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1285">網<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4641">髦<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4700">鋩<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9340">艋<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9827">蝄<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9864">蜢<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13891">壾<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23303">䭷<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3141">儚<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4101">蟒<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4879">甍<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6526">蝱<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11832">朢<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21042">䁳<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4444">濛<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7709">錳<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17969">鄸<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19094">㙹<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21910">䒎<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23446">䰣<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23975">幪<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3900">朦<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3928">曚<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4102">蠎<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4200">檬<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21856">䑃<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3953">魍<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5173">矇<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19242">㜴<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21442">䉚<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22863">䥈<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4895">艨<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23666">䵨<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21912">䒐<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18296">顭<span class="small">モウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18456">鱦<span class="small">モウ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2726">儲<span class="small">もう（け）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="752">設<span class="small">もう（ける）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2726">儲<span class="small">もう（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5494">贏<span class="small">もう（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4546">箚<span class="small">もうしぶみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6531">劄<span class="small">もうしぶみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="068">白<span class="small">もう（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="340">申<span class="small">もう（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="155">首<span class="small">もう（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13365">唘<span class="small">もう（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1380">啓<span class="small">もう（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13396">啔<span class="small">もう（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13400">啟<span class="small">もう（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5557">稟<span class="small">もう（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5558">禀<span class="small">もう（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17681">諬<span class="small">もう（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15372">毡<span class="small">もうせん</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3846">毯<span class="small">もうせん</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3848">氈<span class="small">もうせん</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15390">氊<span class="small">もうせん</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1987">詣<span class="small">もう（でる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">もえ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="16072">烬<span class="small">もえさ（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4940">燼<span class="small">もえさ（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16072">烬<span class="small">もえのこ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4940">燼<span class="small">もえのこ（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1325">炎<span class="small">も（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2187">焔<span class="small">も（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2911">萌<span class="small">も（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2912">萠<span class="small">も（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="587">然<span class="small">も（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6448">焰<span class="small">も（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24251">㷔<span class="small">も（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24051">熖<span class="small">も（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="784">燃<span class="small">も（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16214">燄<span class="small">も（える）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">もか</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5221">疱<span class="small">もがさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5599">皰<span class="small">もがさ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1520">痘<span class="small">もがさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10492">䶌<span class="small">もがさ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">もく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="073">木<span class="small">モク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="074">目<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4329">沐<span class="small">モク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="613">牧<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5327">苜<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13685">坶<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16018">炑<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9791">蚞<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17244">莯<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19052">㙁<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20855">㾇<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21536">䊾<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24186">㑤<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14127">媌<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18759">㒻<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19583">㣎<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19976">㫯<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17279">萺<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18219">雮<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19482">㡔<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20987">䀲<span class="small">モク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2105">睦<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7606">鉬<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21006">䁇<span class="small">モク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1567">墨<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19204">㜈<span class="small">モク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1287">黙<span class="small">モク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6380">墨<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8002">霂<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13519">嘿<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14205">嫼<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22524">䞳<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="2927">穆<span class="small">モク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6254">默<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20208">㱄<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20532">㷵<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22430">䜼<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13573">嚜<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16252">爅<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21051">䁼<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="25826">癦<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21053">䁿<span class="small">モク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22184">䘃<span class="small">モク</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2935">杢<span class="small">もく</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4178">槿<span class="small">もくげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5313">艾<span class="small">もぐさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27742">𦫿<span class="small">もぐさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19045">㘷<span class="small">もぐさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4001">朸<span class="small">もくめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6636">鼴<span class="small">もぐら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6637">鼹<span class="small">もぐら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6636">鼴<span class="small">もぐらもち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6637">鼹<span class="small">もぐらもち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1472">潜<span class="small">もぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6241">潛<span class="small">もぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6242">濳<span class="small">もぐ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">もけ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="11394">捥<span class="small">も（げる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">もし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1438">如<span class="small">も（し）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="894">若<span class="small">も（し）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="752">設<span class="small">も（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12671">傥<span class="small">も（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3146">儻<span class="small">も（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4782">綟<span class="small">もじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7711">錑<span class="small">もじ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="894">若<span class="small">も（しくは）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4782">綟<span class="small">もじり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7711">錑<span class="small">もじり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3700">捩<span class="small">もじ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">もす</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="784">燃<span class="small">も（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3800">鴃<span class="small">もず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6538">鴂<span class="small">もず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3821">鵙<span class="small">もず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6494">鶪<span class="small">もず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10033">帬<span class="small">もすそ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5042">裙<span class="small">もすそ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10032">裠<span class="small">もすそ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2574">裳<span class="small">もすそ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">もた</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3975">缸<span class="small">もたい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4868">瓮<span class="small">もたい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9166">甇<span class="small">もたい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4877">甕<span class="small">もたい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9165">甖<span class="small">もたい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3977">罌<span class="small">もたい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3978">罍<span class="small">もたい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10981">㥃<span class="small">もだ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2938">悶<span class="small">もだ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19728">㦖<span class="small">もだ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27835">𢡛<span class="small">もだ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3634">懣<span class="small">もだ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3734">抬<span class="small">もた（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3733">擡<span class="small">もた（げる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1287">黙<span class="small">もだ（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6254">默<span class="small">もだ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22475">䝴<span class="small">もたら（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8307">賫<span class="small">もたら（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8308">賷<span class="small">もたら（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3949">齎<span class="small">もたら（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3167">凭<span class="small">もた（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5363">靠<span class="small">もた（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">もち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei onyomi"><a class="color2" href="2887">勿<span class="small">モチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13649">圽<span class="small">モチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14392">岉<span class="small">モチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16952">粅<span class="small">モチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17236">莈<span class="small">モチ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="612">望<span class="small">もち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8957">秶<span class="small">もち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16960">粚<span class="small">もち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5262">粢<span class="small">もち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2098">餅<span class="small">もち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11832">朢<span class="small">もち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5821">餠<span class="small">もち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3761">黐<span class="small">もち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3734">抬<span class="small">もちあ（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3733">擡<span class="small">もちあ（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3999">朮<span class="small">もちあわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11933">术<span class="small">もちあわ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="235">用<span class="small">もち（いる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="442">以<span class="small">もち（いる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12368">㠯<span class="small">もち（いる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1919">庸<span class="small">もち（いる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2031">須<span class="small">もち（いる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8986">稬<span class="small">もちごめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8984">糥<span class="small">もちごめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8985">穤<span class="small">もちごめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5274">糯<span class="small">もちごめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6223">檍<span class="small">もちのき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22475">䝴<span class="small">もちもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3949">齎<span class="small">もちもの</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">もつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="1568">没<span class="small">モツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5932">沒<span class="small">モツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="409">物<span class="small">モツ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="423">有<span class="small">も（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="308">持<span class="small">も（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="806">保<span class="small">も（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19055">㙅<span class="small">も（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5449">畚<span class="small">もっこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10319">奙<span class="small">もっこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4595">簣<span class="small">もっこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="235">用<span class="small">もっ（て）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="442">以<span class="small">もっ（て）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12368">㠯<span class="small">もっ（て）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2946">尤<span class="small">もっと（も）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14814">怣<span class="small">もっと（も）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11748">冣<span class="small">もっと（も）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11749">㝡<span class="small">もっと（も）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="507">最<span class="small">もっと（も）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="922">専<span class="small">もっぱ（ら）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22779">䣨<span class="small">もっぱ（ら）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6165">專<span class="small">もっぱ（ら）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8750">䣩<span class="small">もっぱ（ら）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3064">亶<span class="small">もっぱ（ら）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3716">摶<span class="small">もっぱ（ら）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2532">醇<span class="small">もっぱ（ら）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8749">醕<span class="small">もっぱ（ら）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19865">㩛<span class="small">もっぱ（ら）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4801">縺<span class="small">もつ（れ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4801">縺<span class="small">もつ（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">もて</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="27841">𢰝<span class="small">もて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27862">𣕚<span class="small">もて</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2130">弄<span class="small">もてあそ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27370">㺯<span class="small">もてあそ（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1973">玩<span class="small">もてあそ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14932">挊<span class="small">もてあそ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14941">挵<span class="small">もてあそ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17759">貦<span class="small">もてあそ（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1258">舞<span class="small">もてあそ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2268">翫<span class="small">もてあそ（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="753">接<span class="small">もてな（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1379">遇<span class="small">もてな（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25633">飨<span class="small">もてな（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11372">擑<span class="small">もてな（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2324">饗<span class="small">もてな（す）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">もと</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="6587">丅<span class="small">もと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="015">下<span class="small">もと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="120">元<span class="small">もと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="071">本<span class="small">もと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="675">旧<span class="small">もと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3056">丕<span class="small">もと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18845">㔻<span class="small">もと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="694">故<span class="small">もと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="118">原<span class="small">もと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="758">素<span class="small">もと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18868">㕖<span class="small">もと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="670">基<span class="small">もと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="677">許<span class="small">もと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6324">貭<span class="small">もと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8734">酛<span class="small">もと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13196">厡<span class="small">もと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="717">資<span class="small">もと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15232">楍<span class="small">もと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1408">酵<span class="small">もと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20103">㮺<span class="small">もと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="725">質<span class="small">もと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6295">舊<span class="small">もと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8305">儨<span class="small">もと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5180">阯<span class="small">もとい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="670">基<span class="small">もとい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14924">拟<span class="small">もどき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1651">擬<span class="small">もどき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1935">戻<span class="small">もど（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11237">戾<span class="small">もど（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="670">基<span class="small">もと（づく）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22904">䦇<span class="small">もとどり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4647">髻<span class="small">もとどり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="839">干<span class="small">もと（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="479">求<span class="small">もと（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="621">要<span class="small">もと（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1705">索<span class="small">もと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5456">覓<span class="small">もと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8041">覔<span class="small">もと（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2031">須<span class="small">もと（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1127">需<span class="small">もと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3132">僥<span class="small">もと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25230">徺<span class="small">もと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3537">徼<span class="small">もと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21600">䌇<span class="small">もと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5532">邀<span class="small">もと（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="499">固<span class="small">もと（より）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="758">素<span class="small">もと（より）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18868">㕖<span class="small">もと（より）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1935">戻<span class="small">もと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3540">忤<span class="small">もと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3059">乖<span class="small">もと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3551">怫<span class="small">もと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11237">戾<span class="small">もと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3177">剌<span class="small">もと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3531">很<span class="small">もと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5107">狠<span class="small">もと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3574">悖<span class="small">もと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3596">愎<span class="small">もと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11089">愂<span class="small">もと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4798">繆<span class="small">もと（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1935">戻<span class="small">もど（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11237">戾<span class="small">もど（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">もぬ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4058">蛻<span class="small">もぬけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4058">蛻<span class="small">もぬけ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">もの</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="313">者<span class="small">もの</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="409">物<span class="small">もの</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6408">者<span class="small">もの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18601">齐<span class="small">ものいみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1776">斉<span class="small">ものいみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6655">亝<span class="small">ものいみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13897">夈<span class="small">ものいみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6654">斊<span class="small">ものいみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6656">斋<span class="small">ものいみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19932">㪰<span class="small">ものいみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1702">斎<span class="small">ものいみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23249">䬩<span class="small">ものいみ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5831">齊<span class="small">ものいみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6012">齋<span class="small">ものいみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21174">䄢<span class="small">ものいみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3617">慵<span class="small">ものう（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3415">嬾<span class="small">ものう（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3635">懶<span class="small">ものう（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14261">孄<span class="small">ものう（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19739">㦨<span class="small">ものう（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14271">孏<span class="small">ものう（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3635">懶<span class="small">ものぐさ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="893">尺<span class="small">ものさし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6871">鬽<span class="small">もののけ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="744">精<span class="small">もののけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21494">䊒<span class="small">もののけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26278">精<span class="small">もののけ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1574">魅<span class="small">もののけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26028">魉<span class="small">もののけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3953">魍<span class="small">もののけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3954">魎<span class="small">もののけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23450">䰨<span class="small">もののけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23240">䬜<span class="small">もののけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3952">魑<span class="small">もののけ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="800">武<span class="small">もののふ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">もみ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="15156">枞<span class="small">もみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="870">紅<span class="small">もみ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2936">籾<span class="small">もみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21205">䅇<span class="small">もみ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2592">粟<span class="small">もみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4179">樅<span class="small">もみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6144">蟐<span class="small">もみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15159">枬<span class="small">もみじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12035">栬<span class="small">もみじ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2937">椛<span class="small">もみじ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">もむ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="6144">蟐<span class="small">もむ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3706">揉<span class="small">も（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3713">搓<span class="small">も（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">もめ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3706">揉<span class="small">も（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">もも</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="070">百<span class="small">もも</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1995">股<span class="small">もも</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1208">桃<span class="small">もも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4231">脾<span class="small">もも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11853">腗<span class="small">もも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2693">腿<span class="small">もも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11885">骽<span class="small">もも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4827">髀<span class="small">もも</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2382">袴<span class="small">ももひき</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">もや</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3998">靄<span class="small">もや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4884">舫<span class="small">もやいぶね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4884">舫<span class="small">もや（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8988">糱<span class="small">もやし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8989">糵<span class="small">もやし</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2911">萌<span class="small">も（やし）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2912">萠<span class="small">も（やし）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="784">燃<span class="small">も（やす）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts21">
                    <h3 class="ttl_while">もよ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1415">催<span class="small">もよ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1415">催<span class="small">もよお（す）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts22">
                    <h3 class="ttl_while">もら</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2629">貰<span class="small">もら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4337">泄<span class="small">も（らす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14367">屚<span class="small">も（らす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4397">渫<span class="small">も（らす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1600">漏<span class="small">も（らす）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts23">
                    <h3 class="ttl_while">もり</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2614">杜<span class="small">もり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="040">森<span class="small">もり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3126">傅<span class="small">もり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4699">銛<span class="small">もり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7645">銽<span class="small">もり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19261">㝊<span class="small">も（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="316">守<span class="small">も（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13718">垨<span class="small">も（り）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts24">
                    <h3 class="ttl_while">もる</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="921">盛<span class="small">も（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14367">屚<span class="small">も（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1600">漏<span class="small">も（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts25">
                    <h3 class="ttl_while">もれ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4335">沮<span class="small">も（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4337">泄<span class="small">も（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2177">洩<span class="small">も（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14367">屚<span class="small">も（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1600">漏<span class="small">も（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts26">
                    <h3 class="ttl_while">もろ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1478">双<span class="small">もろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18874">㕠<span class="small">もろ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="907">諸<span class="small">もろ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6371">諸<span class="small">もろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6146">雙<span class="small">もろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23006">䨇<span class="small">もろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2628">脆<span class="small">もろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11808">脃<span class="small">もろ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1207">唐<span class="small">もろこし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4848">醪<span class="small">もろみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4909">烝<span class="small">もろもろ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1737">庶<span class="small">もろもろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23979">庻<span class="small">もろもろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20374">㴝<span class="small">もろもろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20523">㷥<span class="small">もろもろ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="907">諸<span class="small">もろもろ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3760">黎<span class="small">もろもろ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6371">諸<span class="small">もろもろ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts27">
                    <h3 class="ttl_while">もん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="075">文<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13167">勽<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13045">伆<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13258">呅<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13953">妏<span class="small">モン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="230">門<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13269">呡<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14811">怋<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16482">玧<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17131">肳<span class="small">モン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1288">紋<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3114">們<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18165">閅<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19256">㝃<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19472">㡈<span class="small">モン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="417">問<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3699">捫<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10981">㥃<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14949">捪<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16507">珳<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17144">脗<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17256">菛<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18938">㖧<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20344">㳷<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2938">悶<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17281">葂<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19809">㨉<span class="small">モン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="219">聞<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5697">馼<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23441">䰚<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15112">暪<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18421">魰<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18469">鳼<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18476">鴍<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19728">㦖<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20410">㵍<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25839">瞒<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5169">瞞<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7710">鍆<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16228">燜<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18480">鴖<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27835">𢡛<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18593">鼤<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21507">䊟<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23173">䫒<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3634">懣<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22538">䟂<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12361">亹<span class="small">モン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24388">虋<span class="small">モン</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3972">闕<span class="small">もん</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3968">闥<span class="small">もん</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2933">匁<span class="small">もんめ</span></a></li>
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