<?php
/*
 * Template Name: Yomi36
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
               <h1 class="ttl_main">音訓検索「や」</h1>
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
               <p>「や」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>や</option>
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
                         <li id="parts1_menu"><a href="#parts1">や</a></li>
                         <li id="parts2_menu"><a href="#parts2">やい</a></li>
                         <li id="parts3_menu"><a href="#parts3">やか</a></li>
                         <li id="parts4_menu"><a href="#parts4">やき</a></li>
                         <li id="parts5_menu"><a href="#parts5">やく</a></li>
                         <li id="parts6_menu"><a href="#parts6">やけ</a></li>
                         <li id="parts7_menu"><a href="#parts7">やさ</a></li>
                         <li id="parts8_menu"><a href="#parts8">やし</a></li>
                         <li id="parts9_menu"><a href="#parts9">やす</a></li>
                         <li id="parts10_menu"><a href="#parts10">やせ</a></li>
                         <li id="parts11_menu"><a href="#parts11">やた</a></li>
                         <li id="parts12_menu"><a href="#parts12">やち</a></li>
                         <li id="parts13_menu"><a href="#parts13">やつ</a></li>
                         <li id="parts14_menu"><a href="#parts14">やと</a></li>
                         <li id="parts15_menu"><a href="#parts15">やな</a></li>
                         <li id="parts16_menu"><a href="#parts16">やに</a></li>
                         <li id="parts17_menu"><a href="#parts17">やね</a></li>
                         <li id="parts18_menu"><a href="#parts18">やは</a></li>
                         <li id="parts19_menu"><a href="#parts19">やふ</a></li>
                         <li id="parts20_menu"><a href="#parts20">やま</a></li>
                         <li id="parts21_menu"><a href="#parts21">やみ</a></li>
                         <li id="parts22_menu"><a href="#parts22">やむ</a></li>
                         <li id="parts23_menu"><a href="#parts23">やめ</a></li>
                         <li id="parts24_menu"><a href="#parts24">やも</a></li>
                         <li id="parts25_menu"><a href="#parts25">やや</a></li>
                         <li id="parts26_menu"><a href="#parts26">やら</a></li>
                         <li id="parts27_menu"><a href="#parts27">やり</a></li>
                         <li id="parts28_menu"><a href="#parts28">やる</a></li>
                         <li id="parts29_menu"><a href="#parts29">やわ</a></li>
                         <li id="parts30_menu"><a href="#parts30">やー</a></li>
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
                    <h3 class="ttl_while">や</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei onyomi"><a class="color2" href="2939">也<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13232">吔<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25674">爷<span class="small">ヤ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2112">冶<span class="small">ヤ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="232">夜<span class="small">ヤ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1432">邪<span class="small">ヤ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2941">耶<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13033">亱<span class="small">ヤ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="892">射<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6539">捓<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14445">峫<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21950">䓉<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27697">𡌛<span class="small">ヤ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="231">野<span class="small">ヤ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3028">埜<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10162">琊<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12165">㭨<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12557">倻<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18932">㖡<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3707">揶<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8782">㙒<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18003">釾<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18955">㖿<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22638">䠶<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2940">爺<span class="small">ヤ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4144">椰<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16540">瑘<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20383">㴬<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3351">墅<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12870">歋<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15803">漜<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22000">䔑<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24950">嘢<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7677">鋣<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8781">壄<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22847">䤳<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7678">鎁<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15039">擨<span class="small">ヤ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3818">鵺<span class="small">ヤ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="069">八<span class="small">や</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2939">也<span class="small">や</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="144">矢<span class="small">や</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2374">乎<span class="small">や</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="137">谷<span class="small">や</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2113">弥<span class="small">や</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12876">欤<span class="small">や</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19747">㦲<span class="small">や</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="255">屋<span class="small">や</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2440">哉<span class="small">や</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="086">家<span class="small">や</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6102">笶<span class="small">や</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2639">箭<span class="small">や</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4474">輻<span class="small">や</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4568">歟<span class="small">や</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5924">彌<span class="small">や</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18163">镾<span class="small">や</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">やい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2301">灸<span class="small">やいと</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2495">灼<span class="small">やいと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1766">刃<span class="small">やいば</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5666">刄<span class="small">やいば</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">やか</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="261">館<span class="small">やかた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2260">舘<span class="small">やかた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26339">館<span class="small">やかた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6139">軅<span class="small">やが（て）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5078">軈<span class="small">やが（て）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2364">喧<span class="small">やかま（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4981">諠<span class="small">やかま（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3317">囂<span class="small">やかま（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13588">嚻<span class="small">やかま（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19354">㞺<span class="small">やから</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="352">族<span class="small">やから</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="765">属<span class="small">やから</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17889">軰<span class="small">やから</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1225">輩<span class="small">やから</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6169">屬<span class="small">やから</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8915">簳<span class="small">やがら</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">やき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5451">畭<span class="small">やきはた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6508">畬<span class="small">やきはた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="890">磁<span class="small">やきもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10704">礠<span class="small">やきもの</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">やく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="1909">厄<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11235">戹<span class="small">ヤク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2181">亦<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12381">伇<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15426">汋<span class="small">ヤク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="419">役<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3661">扼<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5181">阨<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13256">呃<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13654">坄<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="26345">苊<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="27820">𡵸<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7919">阸<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10779">礿<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11297">㧖<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13266">呝<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16012">炈<span class="small">ヤク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="619">約<span class="small">ヤク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1610">疫<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3366">奕<span class="small">ヤク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="646">益<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10499">益<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13727">垼<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16722">砨<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17416">蚅<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21543">䋇<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21949">䓈<span class="small">ヤク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="990">訳<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4459">軛<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20353">㴁<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22439">䝈<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23931">埸<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="26837">跃<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5387">葯<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8486">軶<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13437">喲<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16115">焬<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16120">焲<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17736">豟<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18012">鈠<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20364">㴒<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="27108">鈪<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5195">隘<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11564">敫<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13452">嗌<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19207">㜋<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21566">䋤<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22222">䘸<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22669">䡛<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16195">熤<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16915">箹<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22368">䛩<span class="small">ヤク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="418">薬<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14569">嶧<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19006">㘁<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23926">圛<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3747">龠<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4202">檪<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17753">貖<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20447">㵸<span class="small">ヤク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5785">藥<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19238">㜰<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21049">䁺<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4201">櫟<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18235">霬<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20911">㿑<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5700">譯<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15960">瀹<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17391">蘥<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19548">㢞<span class="small">ヤク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1289">躍<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8357">趯<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16265">爚<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17050">纅<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23726">䶳<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10819">禴<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20173">㰛<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22550">䟏<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23283">䭞<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4608">籥<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22088">䖃<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22552">䟑<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22633">䠯<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4739">鑰<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18613">齸<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20474">㶠<span class="small">ヤク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7237">鸙<span class="small">ヤク</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2495">灼<span class="small">や（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13956">妒<span class="small">や（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2069">妬<span class="small">や（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4900">炙<span class="small">や（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4903">炮<span class="small">や（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4904">炬<span class="small">や（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12347">炷<span class="small">や（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4910">烙<span class="small">や（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21766">䏑<span class="small">や（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="536">焼<span class="small">や（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1442">焦<span class="small">や（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2889">焚<span class="small">や（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12348">焠<span class="small">や（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14342">尞<span class="small">や（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20506">㷊<span class="small">や（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4918">煬<span class="small">や（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4942">熏<span class="small">や（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16200">熫<span class="small">や（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4931">燔<span class="small">や（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4933">燎<span class="small">や（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6245">燒<span class="small">や（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24058">燓<span class="small">や（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4937">燬<span class="small">や（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4941">燻<span class="small">や（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20546">㸈<span class="small">や（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3511">廨<span class="small">やくしょ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1603">楼<span class="small">やぐら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6009">樓<span class="small">やぐら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12304">樐<span class="small">やぐら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12305">㯭<span class="small">やぐら</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3011">櫓<span class="small">やぐら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="905">署<span class="small">やくわり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6407">署<span class="small">やくわり</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">やけ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="938">宅<span class="small">やけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19506">㡯<span class="small">やけ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="536">焼<span class="small">や（ける）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6245">燒<span class="small">や（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4937">燬<span class="small">や（ける）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">やさ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="647">易<span class="small">やさ（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1131">柔<span class="small">やさ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8169">誮<span class="small">やさ（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="991">優<span class="small">やさ（しい）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">やし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="12165">㭨<span class="small">やし</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4144">椰<span class="small">やし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1826">邸<span class="small">やしき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19528">㢆<span class="small">やしき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="358">第<span class="small">やしき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22755">䣌<span class="small">やしき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22759">䣑<span class="small">やしき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3509">廛<span class="small">やしき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24193">㕓<span class="small">やしき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17971">鄽<span class="small">やしき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19096">㙻<span class="small">やしき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6135">壥<span class="small">やしき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7469">养<span class="small">やしな（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9210">羪<span class="small">やしな（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="622">養<span class="small">やしな（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="613">牧<span class="small">やしな（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1501">畜<span class="small">やしな（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7469">养<span class="small">やしな（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7462">飤<span class="small">やしな（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="720">飼<span class="small">やしな（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5649">豢<span class="small">やしな（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9210">羪<span class="small">やしな（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26337">飼<span class="small">やしな（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="622">養<span class="small">やしな（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5137">頤<span class="small">やしな（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5282">餔<span class="small">やしな（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2290">鞠<span class="small">やしな（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7398">頥<span class="small">やしな（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7399">顊<span class="small">やしな（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20618">㹖<span class="small">やしな（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23126">䪕<span class="small">やしな（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2762">鏑<span class="small">やじり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4723">鏃<span class="small">やじり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="153">社<span class="small">やしろ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6394">社<span class="small">やしろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14675">庙<span class="small">やしろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23981">庿<span class="small">やしろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21165">䄕<span class="small">やしろ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2865">廟<span class="small">やしろ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">やす</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3659">扠<span class="small">やす</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5961">恷<span class="small">やす</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10625">矠<span class="small">やす</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8891">簎<span class="small">やす</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="241">安<span class="small">やす（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="647">易<span class="small">やす（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3565">恬<span class="small">やす（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10964">㤗<span class="small">やす（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19272">㝕<span class="small">やす（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1807">泰<span class="small">やす（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="504">康<span class="small">やす（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27707">𣳾<span class="small">やす（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14312">寍<span class="small">やす（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14316">寕<span class="small">やす（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1598">廉<span class="small">やす（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2627">靖<span class="small">やす（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2645">賎<span class="small">やす（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4766">綏<span class="small">やす（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14320">寜<span class="small">やす（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23890">亷<span class="small">やす（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26270">靖<span class="small">やす（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27692">廉<span class="small">やす（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1852">寧<span class="small">やす（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2644">賤<span class="small">やす（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26943">㢘<span class="small">やす（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="010">休<span class="small">やす（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="010">休<span class="small">やす（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="350">息<span class="small">やす（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4565">歇<span class="small">やす（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="010">休<span class="small">やす（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1804">妥<span class="small">やす（らか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3565">恬<span class="small">やす（らか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10964">㤗<span class="small">やす（らか）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1807">泰<span class="small">やす（らか）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3909">晏<span class="small">やす（らか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27707">𣳾<span class="small">やす（らか）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2627">靖<span class="small">やす（らか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4766">綏<span class="small">やす（らか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5639">祺<span class="small">やす（らか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19288">㝧<span class="small">やす（らか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26270">靖<span class="small">やす（らか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25931">稳<span class="small">やす（らか）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1331">穏<span class="small">やす（らか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3630">憺<span class="small">やす（らか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16801">禥<span class="small">やす（らか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4992">謐<span class="small">やす（らか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6269">穩<span class="small">やす（らか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4736">鑢<span class="small">やすり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="241">安<span class="small">やす（んじる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="806">保<span class="small">やす（んじる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19055">㙅<span class="small">やす（んじる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2627">靖<span class="small">やす（んじる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26270">靖<span class="small">やす（んじる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3075">佚<span class="small">やす（んずる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3565">恬<span class="small">やす（んずる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2306">鳩<span class="small">やす（んずる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4766">綏<span class="small">やす（んずる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">やせ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3341">埆<span class="small">やせち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2047">痩<span class="small">や（せる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1976">毀<span class="small">や（せる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12940">毁<span class="small">や（せる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5240">瘠<span class="small">や（せる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6450">瘦<span class="small">や（せる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5133">羸<span class="small">や（せる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">やた</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="21357">䇹<span class="small">やだけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4539">箘<span class="small">やだけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6103">箟<span class="small">やだけ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">やち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5371">萢<span class="small">やち</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">やつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1204">奴<span class="small">やつ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="069">八<span class="small">や（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1895">僕<span class="small">やつがれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12623">㒒<span class="small">やつがれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12624">䑑<span class="small">やつがれ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1204">奴<span class="small">やっこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25940">窭<span class="small">やつ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5620">窶<span class="small">やつ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="069">八<span class="small">やっ（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3581">忰<span class="small">やつ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10385">疩<span class="small">やつ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3580">悴<span class="small">やつ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5376">萃<span class="small">やつ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5236">瘁<span class="small">やつ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25940">窭<span class="small">やつ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3619">憔<span class="small">やつ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5620">窶<span class="small">やつ（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">やと</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="727">舎<span class="small">やど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6031">舍<span class="small">やど</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="327">宿<span class="small">やど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19278">㝛<span class="small">やど</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2952">傭<span class="small">やと（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3110">倩<span class="small">やと（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1391">雇<span class="small">やと（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="951">賃<span class="small">やと（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2952">傭<span class="small">やと（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7976">僱<span class="small">やと（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="327">宿<span class="small">やど（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19278">㝛<span class="small">やど（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="307">次<span class="small">やど（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="727">舎<span class="small">やど（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6031">舍<span class="small">やど（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24579">侨<span class="small">やど（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="327">宿<span class="small">やど（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19278">㝛<span class="small">やど（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2343">寓<span class="small">やど（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14694">庽<span class="small">やど（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2313">僑<span class="small">やど（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">やな</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2982">梁<span class="small">やな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12225">樑<span class="small">やな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4593">簗<span class="small">やな</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1924">柳<span class="small">やなぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12014">栁<span class="small">やなぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25385">桞<span class="small">やなぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12013">桺<span class="small">やなぎ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2953">楊<span class="small">やなぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15289">橮<span class="small">やなぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4547">箙<span class="small">やなぐい</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">やに</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1116">脂<span class="small">やに</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">やね</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="255">屋<span class="small">やね</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">やは</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2247">筈<span class="small">やはず</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">やふ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="2671">薮<span class="small">やぶ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2670">藪<span class="small">やぶ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3230">吝<span class="small">やぶさ（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11097">恡<span class="small">やぶさ（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18904">㖁<span class="small">やぶさ（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3577">悋<span class="small">やぶさ（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24904">啬<span class="small">やぶさ（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3287">嗇<span class="small">やぶさ（か）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="786">破<span class="small">やぶ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="589">敗<span class="small">やぶ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4659">硅<span class="small">やぶ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3788">敝<span class="small">やぶ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1976">毀<span class="small">やぶ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12940">毁<span class="small">やぶ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1032">壊<span class="small">やぶ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11557">贁<span class="small">やぶ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6151">壞<span class="small">やぶ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="786">破<span class="small">やぶ（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="589">敗<span class="small">やぶ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3788">敝<span class="small">やぶ（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1976">毀<span class="small">やぶ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12940">毁<span class="small">やぶ（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1883">弊<span class="small">やぶ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24213">㢢<span class="small">やぶ（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1032">壊<span class="small">やぶ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11557">贁<span class="small">やぶ（れる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6151">壞<span class="small">やぶ（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">やま</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="025">山<span class="small">やま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5995">岾<span class="small">やま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18190">陕<span class="small">やまあい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5185">陜<span class="small">やまあい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="402">病<span class="small">やまい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1430">疾<span class="small">やまい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5223">疵<span class="small">やまい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5225">痒<span class="small">やまい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5230">痾<span class="small">やまい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5099">犲<span class="small">やまいぬ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5472">豺<span class="small">やまいぬ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18190">陕<span class="small">やまかい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5185">陜<span class="small">やまかい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4482">轎<span class="small">やまかご</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2490">柘<span class="small">やまぐわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21077">䂞<span class="small">やまぐわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5211">疚<span class="small">やま（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1430">疾<span class="small">やま（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14514">嵙<span class="small">やましな</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2149">倭<span class="small">やまと</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2614">杜<span class="small">やまなし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4133">棠<span class="small">やまなし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20060">㭻<span class="small">やまなし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14444">峦<span class="small">やまなみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3482">巒<span class="small">やまなみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5419">蕷<span class="small">やまのいも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5650">谺<span class="small">やまびこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3129">僊<span class="small">やまびと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12591">僲<span class="small">やまびと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12592">㒨<span class="small">やまびと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27857">𣑊<span class="small">やまぶき</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts21">
                    <h3 class="ttl_while">やみ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="242">暗<span class="small">やみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2114">闇<span class="small">やみ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts22">
                    <h3 class="ttl_while">やむ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="3484">已<span class="small">や（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="147">止<span class="small">や（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12335">厉<span class="small">や（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5211">疚<span class="small">や（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="350">息<span class="small">や（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="402">病<span class="small">や（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1430">疾<span class="small">や（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4946">訖<span class="small">や（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5225">痒<span class="small">や（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4565">歇<span class="small">や（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4922">熄<span class="small">や（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12334">厲<span class="small">や（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3888">鰥<span class="small">や（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts23">
                    <h3 class="ttl_while">やめ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="147">止<span class="small">や（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="010">休<span class="small">や（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12683">免<span class="small">や（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1576">免<span class="small">や（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25217">废<span class="small">や（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3521">弭<span class="small">や（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17062">罢<span class="small">や（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3116">偃<span class="small">や（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="952">痛<span class="small">や（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1855">廃<span class="small">や（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8545">辝<span class="small">や（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="526">辞<span class="small">や（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1152">寝<span class="small">や（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4565">歇<span class="small">や（める）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6117">寢<span class="small">や（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1870">罷<span class="small">や（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4469">輟<span class="small">や（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6176">廢<span class="small">や（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8546">辤<span class="small">や（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6330">辭<span class="small">や（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19297">㝲<span class="small">や（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts24">
                    <h3 class="ttl_while">やも</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5625">矜<span class="small">やもお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19690">㥤<span class="small">やもお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3888">鰥<span class="small">やもお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26882">㜀<span class="small">やもめ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1617">寡<span class="small">やもめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4881">釐<span class="small">やもめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3417">孀<span class="small">やもめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3888">鰥<span class="small">やもめ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts25">
                    <h3 class="ttl_while">やや</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="627">良<span class="small">やや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5556">稍<span class="small">やや</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1790">漸<span class="small">やや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24734">动<span class="small">やや（もすれば）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="383">動<span class="small">やや（もすれば）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts26">
                    <h3 class="ttl_while">やら</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="2011">柵<span class="small">やらい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11991">栅<span class="small">やらい</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts27">
                    <h3 class="ttl_while">やり</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="25373">枪<span class="small">やり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2659">槍<span class="small">やり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2579">鎗<span class="small">やり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18121">鏿<span class="small">やり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2942">鑓<span class="small">やり</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts28">
                    <h3 class="ttl_while">やる</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="133">行<span class="small">や（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1083">遣<span class="small">や（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts29">
                    <h3 class="ttl_while">やわ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="21926">䒣<span class="small">やわ（らか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2649">苒<span class="small">やわ（らか）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1131">柔<span class="small">やわ（らか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2607">荏<span class="small">やわ（らか）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1848">軟<span class="small">やわ（らか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8484">輭<span class="small">やわ（らか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4313">臑<span class="small">やわ（らか）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1131">柔<span class="small">やわ（らかい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2628">脆<span class="small">やわ（らかい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11808">脃<span class="small">やわ（らかい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1848">軟<span class="small">やわ（らかい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3847">毳<span class="small">やわ（らかい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8484">輭<span class="small">やわ（らかい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25107">岂<span class="small">やわ（らぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="439">和<span class="small">やわ（らぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3545">怡<span class="small">やわ（らぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13294">咊<span class="small">やわ（らぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24715">凯<span class="small">やわ（らぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5646">豈<span class="small">やわ（らぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16096">焈<span class="small">やわ（らぐ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2221">凱<span class="small">やわ（らぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14842">惒<span class="small">やわ（らぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4577">雍<span class="small">やわ（らぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4925">煕<span class="small">やわ（らぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19540">㢕<span class="small">やわ（らぐ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4924">熙<span class="small">やわ（らぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4926">熈<span class="small">やわ（らぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1963">諧<span class="small">やわ（らぐ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2519">輯<span class="small">やわ（らぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2927">穆<span class="small">やわ（らぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="991">優<span class="small">やわ（らぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7982">雝<span class="small">やわ（らぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3514">廱<span class="small">やわ（らぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18616">龢<span class="small">やわ（らぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="366">調<span class="small">やわら（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="439">和<span class="small">やわ（らげる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13294">咊<span class="small">やわ（らげる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1131">柔<span class="small">やわ（らげる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14842">惒<span class="small">やわ（らげる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4788">緝<span class="small">やわ（らげる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18616">龢<span class="small">やわ（らげる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3217">燮<span class="small">やわら（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25024">夑<span class="small">やわら（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16262">爕<span class="small">やわら（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20547">㸉<span class="small">やわら（げる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts30">
                    <h3 class="ttl_while">やー</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4669">碼<span class="small">ヤード</span></a></li>
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