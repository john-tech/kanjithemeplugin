<?php
/*
 * Template Name: Yomi32
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
               <h1 class="ttl_main">音訓検索「み」</h1>
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
               <p>「み」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>み</option>
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
                         <li id="parts1_menu"><a href="#parts1">み</a></li>
                         <li id="parts2_menu"><a href="#parts2">みう</a></li>
                         <li id="parts3_menu"><a href="#parts3">みえ</a></li>
                         <li id="parts4_menu"><a href="#parts4">みお</a></li>
                         <li id="parts5_menu"><a href="#parts5">みか</a></li>
                         <li id="parts6_menu"><a href="#parts6">みき</a></li>
                         <li id="parts7_menu"><a href="#parts7">みく</a></li>
                         <li id="parts8_menu"><a href="#parts8">みこ</a></li>
                         <li id="parts9_menu"><a href="#parts9">みさ</a></li>
                         <li id="parts10_menu"><a href="#parts10">みし</a></li>
                         <li id="parts11_menu"><a href="#parts11">みす</a></li>
                         <li id="parts12_menu"><a href="#parts12">みせ</a></li>
                         <li id="parts13_menu"><a href="#parts13">みそ</a></li>
                         <li id="parts14_menu"><a href="#parts14">みた</a></li>
                         <li id="parts15_menu"><a href="#parts15">みち</a></li>
                         <li id="parts16_menu"><a href="#parts16">みつ</a></li>
                         <li id="parts17_menu"><a href="#parts17">みて</a></li>
                         <li id="parts18_menu"><a href="#parts18">みと</a></li>
                         <li id="parts19_menu"><a href="#parts19">みな</a></li>
                         <li id="parts20_menu"><a href="#parts20">みに</a></li>
                         <li id="parts21_menu"><a href="#parts21">みね</a></li>
                         <li id="parts22_menu"><a href="#parts22">みの</a></li>
                         <li id="parts23_menu"><a href="#parts23">みは</a></li>
                         <li id="parts24_menu"><a href="#parts24">みま</a></li>
                         <li id="parts25_menu"><a href="#parts25">みみ</a></li>
                         <li id="parts26_menu"><a href="#parts26">みめ</a></li>
                         <li id="parts27_menu"><a href="#parts27">みや</a></li>
                         <li id="parts28_menu"><a href="#parts28">みゆ</a></li>
                         <li id="parts29_menu"><a href="#parts29">みよ</a></li>
                         <li id="parts30_menu"><a href="#parts30">みり</a></li>
                         <li id="parts31_menu"><a href="#parts31">みる</a></li>
                         <li id="parts32_menu"><a href="#parts32">みわ</a></li>
                         <li id="parts33_menu"><a href="#parts33">みん</a></li>
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
                    <h3 class="ttl_while">み</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="616">未<span class="small">ミ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="414">味<span class="small">ミ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2113">弥<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12705">冞<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17220">苿<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25240">怽<span class="small">ミ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="398">美<span class="small">ミ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2092">眉<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3521">弭<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13308">咩<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20033">㭑<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14036">娓<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14948">捤<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17229">荱<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15080">旇<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17249">菋<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21661">䍘<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10522">睂<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13796">堳<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14119">媄<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14501">嵄<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17290">葿<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19683">㥝<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22275">䙿<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24018">渳<span class="small">ミ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1246">微<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6871">鬽<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15737">溦<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16150">煝<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16531">瑂<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19286">㝥<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21359">䇻<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21487">䊊<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23952">媺<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16673">睸<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17459">蝆<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19610">㣲<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22495">䞔<span class="small">ミ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1574">魅<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14218">嬍<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16917">篃<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17465">蝞<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19235">㜫<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20423">㵟<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23264">䬿<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25141">嶶<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4441">濔<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4556">麋<span class="small">ミ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5924">彌<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15038">擟<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16692">瞴<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18564">麊<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13573">嚜<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15306">檷<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16615">癓<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16695">矀<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21427">䉋<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5364">靡<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21448">䉠<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23450">䰨<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15050">攗<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17615">覹<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19245">㜷<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22077">䕳<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18163">镾<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18241">霺<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19577">㣆<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21259">䆊<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22890">䥩<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14266">孊<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14894">戂<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15051">攠<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15981">灖<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16571">瓕<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19444">㠧<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3757">黴<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20551">㸏<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21464">䉲<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21527">䊳<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22903">䥸<span class="small">ミ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23290">䭧<span class="small">ミ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="024">三<span class="small">み</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="027">子<span class="small">み</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2466">巳<span class="small">み</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6357">弎<span class="small">み</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19251">㜽<span class="small">み</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="338">身<span class="small">み</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="311">実<span class="small">み</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14294">实<span class="small">み</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5075">躬<span class="small">み</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="341">深<span class="small">み</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1063">御<span class="small">み</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20388">㴱<span class="small">み</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2281">箕<span class="small">み</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5737">實<span class="small">み</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8464">躳<span class="small">み</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27788">𠎁<span class="small">み</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">みう</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="230">門<span class="small">みうち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18165">閅<span class="small">みうち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2036">戚<span class="small">みうち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5153">眷<span class="small">みうち</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">みえ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="017">見<span class="small">み（える）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">みお</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="4434">澪<span class="small">みお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5170">瞰<span class="small">みお（ろす）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">みか</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4877">甕<span class="small">みか</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1097">攻<span class="small">みが（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="290">研<span class="small">みが（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2473">砥<span class="small">みが（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3001">砺<span class="small">みが（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26386">莹<span class="small">みが（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2705">琢<span class="small">みが（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10644">硏<span class="small">みが（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6392">琢<span class="small">みが（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2435">瑳<span class="small">みが（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4630">瑩<span class="small">みが（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4666">磋<span class="small">みが（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1901">磨<span class="small">みが（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3730">擂<span class="small">みが（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11503">攂<span class="small">みが（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3000">礪<span class="small">みが（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10738">䃺<span class="small">みが（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3902">朏<span class="small">みかづき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1513">帝<span class="small">みかど</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2253">柑<span class="small">みかん</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">みき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="21006">䁇<span class="small">ミキ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="666">幹<span class="small">みき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2259">翰<span class="small">みき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="076">右<span class="small">みぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4657">砌<span class="small">みぎり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2752">汀<span class="small">みぎわ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2006">沙<span class="small">みぎわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4325">沚<span class="small">みぎわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25529">浔<span class="small">みぎわ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1624">涯<span class="small">みぎわ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2542">渚<span class="small">みぎわ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6389">渚<span class="small">みぎわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4418">滸<span class="small">みぎわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15786">漄<span class="small">みぎわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4429">潭<span class="small">みぎわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4431">潯<span class="small">みぎわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4438">濆<span class="small">みぎわ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2870">瀕<span class="small">みぎわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4455">瀲<span class="small">みぎわ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">みく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4464">輅<span class="small">みくるま</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">みこ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="3483">巫<span class="small">みこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5458">覡<span class="small">みこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="415">命<span class="small">みこと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="936">尊<span class="small">みこと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1821">勅<span class="small">みことのり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6199">敕<span class="small">みことのり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1755">詔<span class="small">みことのり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4971">誥<span class="small">みことのり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3419">孕<span class="small">みごも（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19317">㞌<span class="small">みごも（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1851">妊<span class="small">みごも（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19145">㚺<span class="small">みごも（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3382">姙<span class="small">みごも（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1761">娠<span class="small">みごも（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19171">㛛<span class="small">みごも（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">みさ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="26340">节<span class="small">みさお</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="549">節<span class="small">みさお</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6404">節<span class="small">みさお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11499">撡<span class="small">みさお</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="931">操<span class="small">みさお</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1904">岬<span class="small">みさき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4575">雎<span class="small">みさご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18482">鴡<span class="small">みさご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3822">鶚<span class="small">みさご</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1590">陵<span class="small">みささぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16512">琌<span class="small">みささぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22969">䧙<span class="small">みささぎ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">みし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3083">侏<span class="small">みじか（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="360">短<span class="small">みじか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4977">矮<span class="small">みじか（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1111">惨<span class="small">みじ（め）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5876">慘<span class="small">みじ（め）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">みす</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="042">水<span class="small">みず</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2620">瑞<span class="small">みず</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="291">湖<span class="small">みずうみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="249">飲<span class="small">みずか（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15651">淾<span class="small">みずか（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6039">飮<span class="small">みずか（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7458">㱃<span class="small">みずか（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4289">蹼<span class="small">みずかき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4319">汞<span class="small">みずがね</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="150">自<span class="small">みずか（ら）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="338">身<span class="small">みずか（ら）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13034">亲<span class="small">みずか（ら）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5075">躬<span class="small">みずか（ら）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14122">媇<span class="small">みずか（ら）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8464">躳<span class="small">みずか（ら）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="164">親<span class="small">みずか（ら）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26504">蔷<span class="small">みずたで</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5421">薔<span class="small">みずたで</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2729">潴<span class="small">みずたま（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2728">瀦<span class="small">みずたま（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9762">虬<span class="small">みずち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9761">虯<span class="small">みずち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4054">蛟<span class="small">みずち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4066">蜃<span class="small">みずち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9837">蜄<span class="small">みずち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2417">鮫<span class="small">みずち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9912">螭<span class="small">みずち</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2605">壬<span class="small">みずのえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4552">癸<span class="small">みずのと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6074">凖<span class="small">みずもり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="732">準<span class="small">みずもり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22904">䦇<span class="small">みずら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4647">髻<span class="small">みずら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4652">鬟<span class="small">みずら</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">みせ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="196">店<span class="small">みせ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19528">㢆<span class="small">みせ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22759">䣑<span class="small">みせ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4574">肆<span class="small">みせ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1265">舗<span class="small">みせ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2902">鋪<span class="small">みせ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3509">廛<span class="small">みせ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6032">舖<span class="small">みせ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24193">㕓<span class="small">みせ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17971">鄽<span class="small">みせ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19096">㙻<span class="small">みせ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6135">壥<span class="small">みせ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="017">見<span class="small">み（せる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17601">覌<span class="small">み（せる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="467">観<span class="small">み（せる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6313">觀<span class="small">み（せる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">みそ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3208">卅<span class="small">みそ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3209">丗<span class="small">みそ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4350">洫<span class="small">みぞ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2803">涜<span class="small">みぞ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27299">㳰<span class="small">みぞ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2308">渠<span class="small">みぞ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1690">溝<span class="small">みぞ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3354">壑<span class="small">みぞ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13137">凟<span class="small">みぞ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6480">瀆<span class="small">みぞ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5624">竇<span class="small">みぞ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2225">晦<span class="small">みそか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5640">禊<span class="small">みそぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3836">鷦<span class="small">みそさざい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6661">齓<span class="small">みそっぱ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3764">齔<span class="small">みそっぱ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3767">齠<span class="small">みそっぱ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4318">臠<span class="small">みそなわ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3980">霄<span class="small">みぞれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3986">霙<span class="small">みぞれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23038">䨭<span class="small">みぞれ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">みた</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1727">充<span class="small">み（たす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="615">満<span class="small">み（たす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6237">滿<span class="small">み（たす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="997">乱<span class="small">みだ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4750">紊<span class="small">みだ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17995">釠<span class="small">みだ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1948">淫<span class="small">みだ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4126">梏<span class="small">みだ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4384">淆<span class="small">みだ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23858">搅<span class="small">みだ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5120">猾<span class="small">みだ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5754">亂<span class="small">みだ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2242">撹<span class="small">みだ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2241">攪<span class="small">みだ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14675">庙<span class="small">みたまや</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2760">祢<span class="small">みたまや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23981">庿<span class="small">みたまや</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1152">寝<span class="small">みたまや</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6117">寢<span class="small">みたまや</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2865">廟<span class="small">みたまや</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2759">禰<span class="small">みたまや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19297">㝲<span class="small">みたまや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2252">姦<span class="small">みだら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14010">姧<span class="small">みだら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1948">淫<span class="small">みだら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1948">淫<span class="small">みだ（ら）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3391">婬<span class="small">みだ（ら）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2140">蛙<span class="small">みだ（ら）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5118">猥<span class="small">みだ（ら）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3406">嫖<span class="small">みだ（ら）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2168">胡<span class="small">みだ（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1908">妄<span class="small">みだ（りに）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="997">乱<span class="small">みだ（りに）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1602">浪<span class="small">みだ（りに）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17995">釠<span class="small">みだ（りに）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5118">猥<span class="small">みだ（りに）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5754">亂<span class="small">みだ（りに）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1277">漫<span class="small">みだ（りに）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15893">澷<span class="small">みだ（りに）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1585">濫<span class="small">みだ（りに）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3219">叨<span class="small">みだり（に）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="997">乱<span class="small">みだ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17202">芜<span class="small">みだ（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1548">紛<span class="small">みだ（れる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3016">狼<span class="small">みだ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3574">悖<span class="small">みだ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4041">蚩<span class="small">みだ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4750">紊<span class="small">みだ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4752">紜<span class="small">みだ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4947">訌<span class="small">みだ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17995">釠<span class="small">みだ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3589">惷<span class="small">みだ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4409">溷<span class="small">みだ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5120">猾<span class="small">みだ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5754">亂<span class="small">みだ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11089">愂<span class="small">みだ（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1962">潰<span class="small">みだ（れる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2882">蕪<span class="small">みだ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3720">撓<span class="small">みだ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3723">撩<span class="small">みだ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4175">樊<span class="small">みだ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4496">駭<span class="small">みだ（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1585">濫<span class="small">みだ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2583">擾<span class="small">みだ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6682">龎<span class="small">みだ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6681">龐<span class="small">みだ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3741">攘<span class="small">みだ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4365">飆<span class="small">みだ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7446">飇<span class="small">みだ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7447">飈<span class="small">みだ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25629">飊<span class="small">みだ（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">みち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="14291">宓<span class="small">ミチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19963">㫘<span class="small">ミチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27358">㸓<span class="small">ミチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15640">淧<span class="small">ミチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21740">䎵<span class="small">ミチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20392">㴵<span class="small">ミチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15777">滵<span class="small">ミチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18478">鴓<span class="small">ミチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20429">㵥<span class="small">ミチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21414">䈼<span class="small">ミチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22808">䤉<span class="small">ミチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17519">蠠<span class="small">ミチ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="133">行<span class="small">みち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5178">阡<span class="small">みち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24567">伦<span class="small">みち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="491">径<span class="small">みち</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5503">迪<span class="small">みち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5504">廸<span class="small">みち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5184">陌<span class="small">みち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17916">迳<span class="small">みち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1201">途<span class="small">みち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1931">倫<span class="small">みち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5826">徑<span class="small">みち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4361">馗<span class="small">みち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5509">逕<span class="small">みち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="203">道<span class="small">みち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3704">揆<span class="small">みち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="438">路<span class="small">みち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1517">塗<span class="small">みち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2948">猷<span class="small">みち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8604">衜<span class="small">みち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5196">隧<span class="small">みち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8605">衟<span class="small">みち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4276">蹊<span class="small">みち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5584">衢<span class="small">みち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25093">导<span class="small">みちび（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5503">迪<span class="small">みちび（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5504">廸<span class="small">みちび（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="203">道<span class="small">みちび（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25340">摈<span class="small">みちび（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="780">導<span class="small">みちび（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8604">衜<span class="small">みちび（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12349">牖<span class="small">みちび（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12350">牗<span class="small">みちび（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8605">衟<span class="small">みちび（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3736">擯<span class="small">みちび（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1727">充<span class="small">み（ちる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10497">盁<span class="small">み（ちる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="311">実<span class="small">み（ちる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14294">实<span class="small">み（ちる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20322">㳑<span class="small">み（ちる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2179">盈<span class="small">み（ちる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3522">弸<span class="small">み（ちる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="615">満<span class="small">み（ちる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2009">塞<span class="small">み（ちる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2159">溢<span class="small">み（ちる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5737">實<span class="small">み（ちる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6237">滿<span class="small">み（ちる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4441">濔<span class="small">み（ちる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">みつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="14438">峚<span class="small">ミツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18629">宻<span class="small">ミツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="987">密<span class="small">ミツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20341">㳴<span class="small">ミツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2109">蜜<span class="small">ミツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12222">榓<span class="small">ミツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15777">滵<span class="small">ミツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24954">嘧<span class="small">ミツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4182">樒<span class="small">ミツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17367">藌<span class="small">ミツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21606">䌏<span class="small">ミツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4183">櫁<span class="small">ミツ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10051">裩<span class="small">みつ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5052">褌<span class="small">みつ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="024">三<span class="small">み（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1727">充<span class="small">み（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6357">弎<span class="small">み（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1792">租<span class="small">みつぎ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="749">税<span class="small">みつぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10848">稅<span class="small">みつぎ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="366">調<span class="small">みつぎ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1257">賦<span class="small">みつぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22483">䝾<span class="small">みつぎ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1687">貢<span class="small">みつ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="024">三<span class="small">みっ（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6357">弎<span class="small">みっ（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14875">憆<span class="small">みつ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5168">瞠<span class="small">みつ（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">みて</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1882">幣<span class="small">みてぐら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6174">幤<span class="small">みてぐら</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">みと</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="960">認<span class="small">みと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2617">翆<span class="small">みどり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="433">緑<span class="small">みどり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2616">翠<span class="small">みどり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2894">碧<span class="small">みどり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6424">綠<span class="small">みどり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2175">嬰<span class="small">みどりご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14262">孆<span class="small">みどりご</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">みな</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1034">皆<span class="small">みな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3247">咸<span class="small">みな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4221">胥<span class="small">みな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3128">僉<span class="small">みな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17022">縃<span class="small">みな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4416">漲<span class="small">みなぎ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4718">鏖<span class="small">みなごろし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7776">䥝<span class="small">みなごろし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1394">孤<span class="small">みなしご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13134">凑<span class="small">みなと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="295">港<span class="small">みなと</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2660">湊<span class="small">みなと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="207">南<span class="small">みなみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="863">源<span class="small">みなもと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13204">厵<span class="small">みなもと</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">みに</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1151">侵<span class="small">みにく（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4041">蚩<span class="small">みにく（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5362">莠<span class="small">みにく（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12483">㑴<span class="small">みにく（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1152">寝<span class="small">みにく（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6117">寢<span class="small">みにく（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1722">醜<span class="small">みにく（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6877">魌<span class="small">みにく（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19297">㝲<span class="small">みにく（い）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts21">
                    <h3 class="ttl_while">みね</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3451">岑<span class="small">みね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3453">岫<span class="small">みね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14444">峦<span class="small">みね</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1266">峰<span class="small">みね</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2906">峯<span class="small">みね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18923">㖗<span class="small">みね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3457">崟<span class="small">みね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25132">崯<span class="small">みね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4138">椒<span class="small">みね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3472">嶂<span class="small">みね</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2981">嶺<span class="small">みね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3482">巒<span class="small">みね</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts22">
                    <h3 class="ttl_while">みの</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="9424">䒾<span class="small">みの</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2437">蓑<span class="small">みの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4586">簑<span class="small">みの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4587">簔<span class="small">みの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4065">蜆<span class="small">みのむし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="067">年<span class="small">みのり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16806">秊<span class="small">みのり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21184">䄭<span class="small">みのり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1616">稼<span class="small">みの（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="311">実<span class="small">みの（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14294">实<span class="small">みの（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2606">稔<span class="small">みの（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24273">䄒<span class="small">みの（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5737">實<span class="small">みの（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2587">穣<span class="small">みの（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6270">穰<span class="small">みの（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts23">
                    <h3 class="ttl_while">みは</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2552">哨<span class="small">みはり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14875">憆<span class="small">みは（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5168">瞠<span class="small">みは（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts24">
                    <h3 class="ttl_while">みま</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5422">薨<span class="small">みまか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5176">矍<span class="small">みまわ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26955">逻<span class="small">みまわ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5536">邏<span class="small">みまわ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26955">逻<span class="small">みまわ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5536">邏<span class="small">みまわ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts25">
                    <h3 class="ttl_while">みみ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="030">耳<span class="small">みみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7514">聝<span class="small">みみき（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4362">馘<span class="small">みみき（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4038">蚓<span class="small">みみず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9904">螾<span class="small">みみず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4616">珥<span class="small">みみだま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2986">苓<span class="small">みみなぐさ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts26">
                    <h3 class="ttl_while">みめ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="2194">姶<span class="small">みめよ（い）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts27">
                    <h3 class="ttl_while">みや</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="14299">宫<span class="small">みや</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="282">宮<span class="small">みや</span></a></li>
                         <li class="others_kanji onyomi"><a href="5770">冖<span class="small">ミャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6285">脉<span class="small">ミャク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="617">脈<span class="small">ミャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22193">䘑<span class="small">ミャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11812">衇<span class="small">ミャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16991">絔<span class="small">ミャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17437">蛨<span class="small">ミャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22097">䖑<span class="small">ミャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9599">蓂<span class="small">ミャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13479">嗼<span class="small">ミャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13811">塓<span class="small">ミャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14863">慏<span class="small">ミャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15805">漞<span class="small">ミャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16183">熐<span class="small">ミャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18030">銆<span class="small">ミャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22799">䣾<span class="small">ミャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15911">濗<span class="small">ミャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20448">㵹<span class="small">ミャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17612">覭<span class="small">ミャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21416">䈿<span class="small">ミャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21607">䌐<span class="small">ミャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8013">霢<span class="small">ミャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8014">霡<span class="small">ミャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16934">簚<span class="small">ミャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23036">䨫<span class="small">ミャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23576">䳮<span class="small">ミャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23354">䮭<span class="small">ミャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23355">䮮<span class="small">ミャク</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14611">师<span class="small">みやこ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2196">邑<span class="small">みやこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="116">京<span class="small">みやこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="599">府<span class="small">みやこ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2964">洛<span class="small">みやこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5756">亰<span class="small">みやこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="718">師<span class="small">みやこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15532">洜<span class="small">みやこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="375">都<span class="small">みやこ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6372">都<span class="small">みやこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1977">畿<span class="small">みやこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19079">㙨<span class="small">みやこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="762">造<span class="small">みやつこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8589">艁<span class="small">みやつこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21900">䒃<span class="small">みやつこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1030">雅<span class="small">みやび</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1030">雅<span class="small">みやび（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3407">嫺<span class="small">みやび（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3408">嫻<span class="small">みやび（やか）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts28">
                    <h3 class="ttl_while">みゆ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="19583">㣎<span class="small">ミュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21585">䋷<span class="small">ミュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19306">㞁<span class="small">ミュウ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="293">幸<span class="small">みゆき</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts29">
                    <h3 class="ttl_while">みよ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="24692">冇<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24560">仦<span class="small">ミョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="072">名<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12390">仯<span class="small">ミョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1279">妙<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13251">吵<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19458">㠺<span class="small">ミョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="228">明<span class="small">ミョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="415">命<span class="small">ミョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1541">苗<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19144">㚹<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5148">眇<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5348">茗<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14017">姳<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16473">玅<span class="small">ミョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2110">冥<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17061">罞<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19970">㫥<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22111">䖢<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24186">㑤<span class="small">ミョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1871">猫<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11642">朙<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12707">㝠<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14127">媌<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21964">䓝<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12718">凕<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21482">䊅<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9599">蓂<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14863">慏<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16580">瓾<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19398">㟰<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21004">䁅<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21230">䅦<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21287">䆩<span class="small">ミョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="227">鳴<span class="small">ミョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1905">銘<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3933">暝<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16183">熐<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21375">䈍<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22668">䡚<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24322">䗈<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5166">瞑<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8285">貓<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9882">蝥<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14204">嫹<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15280">橗<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16919">篎<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21167">䄙<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4091">螟<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21032">䁧<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21753">䏃<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5435">藐<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17612">覭<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18564">麊<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21442">䉚<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16249">爂<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18517">鶜<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23189">䫤<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23565">䳟<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18454">鱙<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18587">鼆<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22896">䥰<span class="small">ミョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18456">鱦<span class="small">ミョウ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts30">
                    <h3 class="ttl_while">みり</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4869">瓱<span class="small">ミリグラム</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13116">兞<span class="small">ミリグラム</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2932">粍<span class="small">ミリメートル</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5539">竓<span class="small">ミリリットル</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts31">
                    <h3 class="ttl_while">みる</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="017">見<span class="small">み（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10523">䀎<span class="small">み（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="840">看<span class="small">み（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5150">眄<span class="small">み（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17601">覌<span class="small">み（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8040">眎<span class="small">み（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="885">視<span class="small">み（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1764">診<span class="small">み（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6411">視<span class="small">み（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1845">督<span class="small">み（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="514">察<span class="small">み（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5164">睹<span class="small">み（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1039">監<span class="small">み（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5460">覩<span class="small">み（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="998">覧<span class="small">み（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2895">瞥<span class="small">み（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5170">瞰<span class="small">み（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5461">覯<span class="small">み（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10622">瞩<span class="small">み（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="467">観<span class="small">み（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5172">瞿<span class="small">み（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5174">瞻<span class="small">み（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5464">覿<span class="small">み（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6312">覽<span class="small">み（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6313">觀<span class="small">み（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5177">矚<span class="small">み（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts32">
                    <h3 class="ttl_while">みわ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4872">甄<span class="small">みわ（ける）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts33">
                    <h3 class="ttl_while">みん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="618">民<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13126">冺<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13144">刡<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19352">㞶<span class="small">ミン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="228">明<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3915">旻<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4341">泯<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5993">岷<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13989">姄<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14811">怋<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19559">㢯<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24982">垊<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16641">盷<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16644">盿<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16713">砇<span class="small">ミン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1280">眠<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5588">罠<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11642">朙<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14467">崏<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14949">捪<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21547">䋋<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22464">䝧<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3945">閔<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16517">琘<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16520">琝<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19393">㟩<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19397">㟭<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19809">㨉<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22572">䟨<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22659">䡑<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24018">渳<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3595">愍<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11709">暋<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15064">敯<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18015">鈱<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19991">㬆<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9095">緍<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21018">䁕<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23153">䪸<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3623">憫<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4789">緡<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12642">僶<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15843">潣<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18469">鳼<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18476">鴍<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18059">錉<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18480">鴖<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21753">䏃<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18082">鍲<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16936">簢<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17519">蠠<span class="small">ミン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27493">䡻<span class="small">ミン</span></a></li>
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