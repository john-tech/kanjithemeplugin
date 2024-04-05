<?php
/*
 * Template Name: Yomi44
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
               <h1 class="ttl_main">音訓検索「わ」</h1>
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
               <p>「わ」から始まる読み方をする漢字です。</p>
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
                              <option value="yomi40">り</option>
                              <option value="yomi41">る</option>
                              <option value="yomi42">れ</option>
                              <option value="yomi43">ろ</option>
                              <option value="#" selected>わ</option>
                              <option value="yomi45">を</option>
                         </select>
                    </div>
               </div><!--search_narrowdown-->
               <div class="search_data yomi_menu">
                    <ul class="search_menu2">
                         <li id="parts1_menu"><a href="#parts1">わ</a></li>
                         <li id="parts2_menu"><a href="#parts2">わい</a></li>
                         <li id="parts3_menu"><a href="#parts3">わか</a></li>
                         <li id="parts4_menu"><a href="#parts4">わき</a></li>
                         <li id="parts5_menu"><a href="#parts5">わく</a></li>
                         <li id="parts6_menu"><a href="#parts6">わけ</a></li>
                         <li id="parts7_menu"><a href="#parts7">わさ</a></li>
                         <li id="parts8_menu"><a href="#parts8">わし</a></li>
                         <li id="parts9_menu"><a href="#parts9">わす</a></li>
                         <li id="parts10_menu"><a href="#parts10">わた</a></li>
                         <li id="parts11_menu"><a href="#parts11">わち</a></li>
                         <li id="parts12_menu"><a href="#parts12">わつ</a></li>
                         <li id="parts13_menu"><a href="#parts13">わな</a></li>
                         <li id="parts14_menu"><a href="#parts14">わに</a></li>
                         <li id="parts15_menu"><a href="#parts15">わひ</a></li>
                         <li id="parts16_menu"><a href="#parts16">わめ</a></li>
                         <li id="parts17_menu"><a href="#parts17">わら</a></li>
                         <li id="parts18_menu"><a href="#parts18">わり</a></li>
                         <li id="parts19_menu"><a href="#parts19">わる</a></li>
                         <li id="parts20_menu"><a href="#parts20">われ</a></li>
                         <li id="parts21_menu"><a href="#parts21">わん</a></li>
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
                    <h3 class="ttl_while">わ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="19026">㘞<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12428">佤<span class="small">ワ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="439">和<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13294">咊<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13985">姀<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3245">哇<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15163">柇<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15551">洼<span class="small">ワ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2149">倭<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26379">莴<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27294">㳡<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10911">窊<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12359">啘<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13371">唩<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14078">婐<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14079">婑<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14951">捰<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15611">涴<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15614">涹<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16591">畖<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20652">㹻<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2140">蛙<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5386">萵<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13426">喛<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14842">惒<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16414">猧<span class="small">ワ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="239">話<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15874">澕<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18020">鉌<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21102">䂺<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21285">䆧<span class="small">ワ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2139">窪<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8139">䛡<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10924">漥<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14991">搲<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15731">溛<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8409">踒<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17609">覣<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24032">濄<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23028">䨟<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24127">薶<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6840">䰀<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22615">䠚<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18616">龢<span class="small">ワ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15053">攨<span class="small">ワ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="831">我<span class="small">わ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25788">环<span class="small">わ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27712">𤟱<span class="small">わ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="630">輪<span class="small">わ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1045">環<span class="small">わ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4733">鐶<span class="small">わ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">わい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="25498">汇<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18184">阭<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3022">歪<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15551">洼<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26361">荟<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5980">淮<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10912">窐<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12559">偎<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21203">䅅<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25927">秽<span class="small">ワイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3023">隈<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5118">猥<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14485">崴<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14511">嵔<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14850">愄<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14965">揋<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15665">渨<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17287">葨<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19187">㛱<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19312">㞇<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19394">㟪<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22120">䖯<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26659">㙗<span class="small">ワイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1936">賄<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3205">匯<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4977">矮<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11876">腲<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12168">椳<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12991">滙<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15753">溾<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16156">煨<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17652">詴<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20238">㱬<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10715">碨<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20890">㾯<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21593">䋿<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5427">薈<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9684">薉<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11196">懀<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14223">嬒<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14791">徻<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15903">濊<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16455">獩<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16238">燰<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18077">鍡<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20143">㯱<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23230">䬐<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5561">穢<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6567">鼃<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6568">䵷<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16868">竵<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18447">鰃<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19736">㦣<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21147">䃶<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23605">䴜<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24170">饖<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23364">䮹<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23677">䵳<span class="small">ワイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23696">䶐<span class="small">ワイ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">わか</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2388">吾<span class="small">わ（が）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="160">少<span class="small">わか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3362">夭<span class="small">わか（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1279">妙<span class="small">わか（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="894">若<span class="small">わか（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1731">叔<span class="small">わか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16473">玅<span class="small">わか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21193">䄺<span class="small">わか（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1500">稚<span class="small">わか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3405">嫩<span class="small">わか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14197">嫰<span class="small">わか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10873">稺<span class="small">わか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6132">穉<span class="small">わか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21257">䆈<span class="small">わか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6999">鰙<span class="small">わかさぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3362">夭<span class="small">わかじに</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="513">札<span class="small">わかじに</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5301">殀<span class="small">わかじに</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5306">殤<span class="small">わかじに</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1879">沸<span class="small">わ（かす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="218">分<span class="small">わ（かつ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2237">劃<span class="small">わ（かつ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="606">別<span class="small">わか（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12751">别<span class="small">わか（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1257">賦<span class="small">わか（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22483">䝾<span class="small">わか（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4780">綰<span class="small">わが（ねる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="218">分<span class="small">わ（かる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="789">判<span class="small">わか（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="660">解<span class="small">わか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6314">觧<span class="small">わか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5584">衢<span class="small">わかれみち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="218">分<span class="small">わ（かれる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1779">析<span class="small">わ（かれる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20030">㭊<span class="small">わ（かれる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="963">派<span class="small">わ（かれる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="606">別<span class="small">わか（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1363">岐<span class="small">わか（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12751">别<span class="small">わか（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19359">㞿<span class="small">わか（れる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2361">訣<span class="small">わか（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19382">㟚<span class="small">わか（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">わき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2181">亦<span class="small">わき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2133">脇<span class="small">わき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11800">䏮<span class="small">わき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="648">液<span class="small">わき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3690">掖<span class="small">わき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1273">傍<span class="small">わき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4230">腋<span class="small">わき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4321">滕<span class="small">わきあ（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4230">腋<span class="small">わきのした</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3690">掖<span class="small">わきばさ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12353">孼<span class="small">わきばら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12354">孽<span class="small">わきばら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="805">弁<span class="small">わきま（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6063">辨<span class="small">わきま（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6064">辧<span class="small">わきま（える）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">わく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="11222">㦯<span class="small">ワク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3024">或<span class="small">ワク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1318">惑<span class="small">ワク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21369">䈅<span class="small">ワク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18996">㗲<span class="small">ワク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8878">篗<span class="small">ワク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11504">擭<span class="small">ワク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14250">嬳<span class="small">ワク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19437">㠛<span class="small">ワク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23920">嚄<span class="small">ワク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7991">雘<span class="small">ワク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16562">瓁<span class="small">ワク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17180">臒<span class="small">ワク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24230">㬦<span class="small">ワク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10633">矱<span class="small">ワク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16699">矆<span class="small">ワク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23033">䨥<span class="small">ワク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4108">蠖<span class="small">ワク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8927">籆<span class="small">ワク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9351">艧<span class="small">ワク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17104">耯<span class="small">ワク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21447">䉟<span class="small">ワク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13591">嚿<span class="small">ワク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18558">鸌<span class="small">ワク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22734">䢲<span class="small">ワク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17730">讗<span class="small">ワク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8879">籰<span class="small">ワク</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1937">枠<span class="small">わく</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25383">栏<span class="small">わく</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4036">框<span class="small">わく</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1301">欄<span class="small">わく</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6362">欄<span class="small">わく</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15451">汹<span class="small">わ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1879">沸<span class="small">わ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4347">洶<span class="small">わ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2947">涌<span class="small">わ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2116">湧<span class="small">わ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4321">滕<span class="small">わ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4438">濆<span class="small">わ（く）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">わけ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="990">訳<span class="small">わけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4955">詁<span class="small">わけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5700">譯<span class="small">わけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4648">髷<span class="small">わげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4652">鬟<span class="small">わげ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="218">分<span class="small">わ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3361">夬<span class="small">わ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="805">弁<span class="small">わ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13213">叏<span class="small">わ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="606">別<span class="small">わ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="789">判<span class="small">わ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12751">别<span class="small">わ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1779">析<span class="small">わ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20030">㭊<span class="small">わ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="968">班<span class="small">わ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1893">剖<span class="small">わ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="406">部<span class="small">わ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3703">揀<span class="small">わ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1866">頒<span class="small">わ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8672">郶<span class="small">わ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6063">辨<span class="small">わ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6064">辧<span class="small">わ（ける）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">わさ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="128">工<span class="small">わざ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26338">艺<span class="small">わざ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13005">业<span class="small">わざ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1974">伎<span class="small">わざ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19579">㣉<span class="small">わざ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="493">芸<span class="small">わざ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="672">技<span class="small">わざ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="731">術<span class="small">わざ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="275">業<span class="small">わざ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="666">幹<span class="small">わざ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24688">兿<span class="small">わざ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5784">藝<span class="small">わざ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2285">妓<span class="small">わざおぎ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2997">伶<span class="small">わざおぎ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="966">俳<span class="small">わざおぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3109">倡<span class="small">わざおぎ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="991">優<span class="small">わざおぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25233">态<span class="small">わざ（と）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18712">㑷<span class="small">わざ（と）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="769">態<span class="small">わざ（と）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1065">凶<span class="small">わざわ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1909">厄<span class="small">わざわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3362">夭<span class="small">わざわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12335">厉<span class="small">わざわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18674">㐫<span class="small">わざわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18779">㓙<span class="small">わざわ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="705">災<span class="small">わざわ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2117">妖<span class="small">わざわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16005">灾<span class="small">わざわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4899">氛<span class="small">わざわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5302">殃<span class="small">わざわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21153">䄀<span class="small">わざわ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="459">害<span class="small">わざわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16060">烖<span class="small">わざわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25911">祸<span class="small">わざわ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1618">禍<span class="small">わざわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10805">旤<span class="small">わざわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3615">慝<span class="small">わざわ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6400">禍<span class="small">わざわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12334">厲<span class="small">わざわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12353">孼<span class="small">わざわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12354">孽<span class="small">わざわ（い）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">わし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="24580">侬<span class="small">わし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3138">儂<span class="small">わし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4580">雕<span class="small">わし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7170">鵰<span class="small">わし</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2507">鷲<span class="small">わし</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">わす</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="918">寸<span class="small">わず（か）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="893">尺<span class="small">わず（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9308">㬰<span class="small">わず（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5626">臾<span class="small">わず（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20327">㳙<span class="small">わず（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4372">涓<span class="small">わず（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3845">毫<span class="small">わず（か）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1981">僅<span class="small">わず（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4696">銖<span class="small">わず（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4705">錙<span class="small">わず（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7727">鍿<span class="small">わず（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4819">纔<span class="small">わず（か）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1981">僅<span class="small">わず（かに）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4819">纔<span class="small">わず（かに）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1637">患<span class="small">わずら（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1637">患<span class="small">わずら（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1865">煩<span class="small">わずら（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1958">苛<span class="small">わずら（わしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9109">䋣<span class="small">わずら（わしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26002">緐<span class="small">わずら（わしい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1235">繁<span class="small">わずら（わしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4791">縟<span class="small">わずら（わしい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6406">繁<span class="small">わずら（わしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2583">擾<span class="small">わずら（わしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3317">囂<span class="small">わずら（わしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13588">嚻<span class="small">わずら（わしい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1932">累<span class="small">わずら（わす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1865">煩<span class="small">わずら（わす）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2263">萱<span class="small">わすれぐさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9538">萲<span class="small">わすれぐさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9539">蕿<span class="small">わすれぐさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9540">藼<span class="small">わすれぐさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9541">蘐<span class="small">わすれぐさ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="983">忘<span class="small">わす（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10955">㤀<span class="small">わす（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="825">遺<span class="small">わす（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">わた</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5908">絋<span class="small">わた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2934">棉<span class="small">わた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4760">絖<span class="small">わた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4765">絮<span class="small">わた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="571">腸<span class="small">わた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20073">㮌<span class="small">わた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="815">綿<span class="small">わた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5912">緜<span class="small">わた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6289">膓<span class="small">わた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9147">纊<span class="small">わた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17540">袄<span class="small">わたいれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5033">袍<span class="small">わたいれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5908">絋<span class="small">わたいれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4765">絮<span class="small">わたいれ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2195">襖<span class="small">わたいれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9147">纊<span class="small">わたいれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25835">盘<span class="small">わだかま（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1240">盤<span class="small">わだかま（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2843">磐<span class="small">わだかま（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4100">蟠<span class="small">わだかま（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18094">鎜<span class="small">わだかま（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="886">私<span class="small">わたくし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="886">私<span class="small">わたし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24405">济<span class="small">わた（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="879">済<span class="small">わた（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1203">渡<span class="small">わた（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5975">濟<span class="small">わた（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1358">軌<span class="small">わだち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8475">䡄<span class="small">わだち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2765">轍<span class="small">わだち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1601">廊<span class="small">わたどの</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6365">廊<span class="small">わたどの</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2390">亙<span class="small">わた（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2391">亘<span class="small">わた（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2113">弥<span class="small">わた（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2401">杭<span class="small">わた（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="376">度<span class="small">わた（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24405">济<span class="small">わた（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="503">航<span class="small">わた（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6444">涉<span class="small">わた（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="879">済<span class="small">わた（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1740">渉<span class="small">わた（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5543">竟<span class="small">わた（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="754">絶<span class="small">わた（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1203">渡<span class="small">わた（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9033">絕<span class="small">わた（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20358">㴇<span class="small">わた（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5924">彌<span class="small">わた（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5975">濟<span class="small">わた（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4293">躇<span class="small">わた（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18163">镾<span class="small">わた（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">わち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="16110">焥<span class="small">ワチ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">わつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="14093">婠<span class="small">ワツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14954">捾<span class="small">ワツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16110">焥<span class="small">ワツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20235">㱧<span class="small">ワツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16664">睕<span class="small">ワツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21008">䁊<span class="small">ワツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14223">嬒<span class="small">ワツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15918">濣<span class="small">ワツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23062">䩊<span class="small">ワツ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">わな</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5588">罠<span class="small">わな</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2756">蹄<span class="small">わな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8417">蹏<span class="small">わな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5594">羂<span class="small">わな</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">わに</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="2245">鰐<span class="small">わに</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7080">鱷<span class="small">わに</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">わひ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3078">佗<span class="small">わび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3084">侘<span class="small">わび</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2682">詫<span class="small">わび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3078">佗<span class="small">わび（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3084">侘<span class="small">わび（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3078">佗<span class="small">わ（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3084">侘<span class="small">わ（びる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2682">詫<span class="small">わ（びる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">わめ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="24813">唤<span class="small">わめ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1356">喚<span class="small">わめ（く）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">わら</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="13140">刍<span class="small">わら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10825">秆<span class="small">わら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5357">芻<span class="small">わら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5555">稈<span class="small">わら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5358">蒭<span class="small">わら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1098">稿<span class="small">わら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6129">稾<span class="small">わら</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2412">藁<span class="small">わら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9688">藳<span class="small">わら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3224">听<span class="small">わら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3233">呵<span class="small">わら（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1110">咲<span class="small">わら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3248">咥<span class="small">わら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3254">哂<span class="small">わら（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="535">笑<span class="small">わら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2137">唖<span class="small">わら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3264">唹<span class="small">わら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6471">啞<span class="small">わら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3291">嗤<span class="small">わら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5267">粲<span class="small">わら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8788">㗛<span class="small">わら（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2360">蕨<span class="small">わらび</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="384">童<span class="small">わらべ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3135">僮<span class="small">わらべ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2554">妾<span class="small">わらわ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="384">童<span class="small">わらわ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">わり</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="836">割<span class="small">わり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="820">率<span class="small">わりあい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13003">卛<span class="small">わりあい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="453">課<span class="small">わりあ（てる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2716">箪<span class="small">わりご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12226">樏<span class="small">わりご</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6452">簞<span class="small">わりご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6020">卩<span class="small">わりふ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="688">券<span class="small">わりふ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1386">契<span class="small">わりふ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1543">符<span class="small">わりふ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">わる</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3674">拌<span class="small">わ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="836">割<span class="small">わ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1065">凶<span class="small">わる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2314">兇<span class="small">わる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3197">匈<span class="small">わる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18674">㐫<span class="small">わる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18779">㓙<span class="small">わる（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="970">否<span class="small">わる（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="585">毒<span class="small">わる（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="792">非<span class="small">わる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25772">狞<span class="small">わる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5550">秕<span class="small">わる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5551">粃<span class="small">わる（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="240">悪<span class="small">わる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25927">秽<span class="small">わる（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5964">惡<span class="small">わる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3615">慝<span class="small">わる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10969">僫<span class="small">わる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5123">獰<span class="small">わる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5561">穢<span class="small">わる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5106">狡<span class="small">わるがしこ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25774">狯<span class="small">わるがしこ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5120">猾<span class="small">わるがしこ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5122">獪<span class="small">わるがしこ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3754">黠<span class="small">わるがしこ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2848">匪<span class="small">わるもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6323">戝<span class="small">わるもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4140">棍<span class="small">わるもの</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1485">賊<span class="small">わるもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4843">酲<span class="small">わるよ（い）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">われ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="424">予<span class="small">われ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="817">余<span class="small">われ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="831">我<span class="small">われ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2388">吾<span class="small">われ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24580">侬<span class="small">われ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1822">朕<span class="small">われ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1957">俺<span class="small">われ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3138">儂<span class="small">われ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="786">破<span class="small">わ（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="836">割<span class="small">わ（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts21">
                    <h3 class="ttl_while">わん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="3524">弯<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27837">𢪸<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6527">盌<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10540">眢<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12781">剜<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20766">㼝<span class="small">ワン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1351">貫<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9850">䖤<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11122">惋<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11394">捥<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13752">埦<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14093">婠<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14633">帵<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14954">捾<span class="small">ワン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1319">腕<span class="small">ワン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1604">湾<span class="small">ワン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3025">椀<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10163">琬<span class="small">ワン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3026">碗<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16664">睕<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17000">綄<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4068">蜿<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4780">綰<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22150">䗕<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15849">潫<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19031">㘤<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22480">䝹<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22481">䝺<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4708">鋺<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20731">㻨<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8323">贃<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11856">䯛<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14257">嬽<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3523">彎<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5750">灣<span class="small">ワン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22192">䘎<span class="small">ワン</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5563">盂<span class="small">わん</span></a></li>
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