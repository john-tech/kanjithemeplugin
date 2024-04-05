<?php
/*
 * Template Name: Yomi21
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
               <h1 class="ttl_main">音訓検索「な」</h1>
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
               <p>「な」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>な</option>
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
                         <li id="parts1_menu"><a href="#parts1">な</a></li>
                         <li id="parts2_menu"><a href="#parts2">ない</a></li>
                         <li id="parts3_menu"><a href="#parts3">なう</a></li>
                         <li id="parts4_menu"><a href="#parts4">なえ</a></li>
                         <li id="parts5_menu"><a href="#parts5">なお</a></li>
                         <li id="parts6_menu"><a href="#parts6">なか</a></li>
                         <li id="parts7_menu"><a href="#parts7">なき</a></li>
                         <li id="parts8_menu"><a href="#parts8">なく</a></li>
                         <li id="parts9_menu"><a href="#parts9">なけ</a></li>
                         <li id="parts10_menu"><a href="#parts10">なこ</a></li>
                         <li id="parts11_menu"><a href="#parts11">なさ</a></li>
                         <li id="parts12_menu"><a href="#parts12">なし</a></li>
                         <li id="parts13_menu"><a href="#parts13">なす</a></li>
                         <li id="parts14_menu"><a href="#parts14">なそ</a></li>
                         <li id="parts15_menu"><a href="#parts15">なた</a></li>
                         <li id="parts16_menu"><a href="#parts16">なつ</a></li>
                         <li id="parts17_menu"><a href="#parts17">なて</a></li>
                         <li id="parts18_menu"><a href="#parts18">なと</a></li>
                         <li id="parts19_menu"><a href="#parts19">なな</a></li>
                         <li id="parts20_menu"><a href="#parts20">なに</a></li>
                         <li id="parts21_menu"><a href="#parts21">なの</a></li>
                         <li id="parts22_menu"><a href="#parts22">なひ</a></li>
                         <li id="parts23_menu"><a href="#parts23">なふ</a></li>
                         <li id="parts24_menu"><a href="#parts24">なへ</a></li>
                         <li id="parts25_menu"><a href="#parts25">なま</a></li>
                         <li id="parts26_menu"><a href="#parts26">なみ</a></li>
                         <li id="parts27_menu"><a href="#parts27">なめ</a></li>
                         <li id="parts28_menu"><a href="#parts28">なや</a></li>
                         <li id="parts29_menu"><a href="#parts29">なよ</a></li>
                         <li id="parts30_menu"><a href="#parts30">なら</a></li>
                         <li id="parts31_menu"><a href="#parts31">なり</a></li>
                         <li id="parts32_menu"><a href="#parts32">なる</a></li>
                         <li id="parts33_menu"><a href="#parts33">なれ</a></li>
                         <li id="parts34_menu"><a href="#parts34">なわ</a></li>
                         <li id="parts35_menu"><a href="#parts35">なん</a></li>
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
                    <h3 class="ttl_while">な</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="2077">那<span class="small">ナ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2078">奈<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14921">抲<span class="small">ナ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="207">南<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3679">拏<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16714">砈<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17949">郍<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18699">㑚<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19152">㛂<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19469">㡅<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21725">䎠<span class="small">ナ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="962">納<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3388">娜<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3678">拿<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13333">哪<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21782">䏧<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25547">难<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27155">㧱<span class="small">ナ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4127">梛<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13076">偄<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18931">㖠<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21544">䋈<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13788">堧<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17555">袲<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24607">傩<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17296">蒘<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22350">䛔<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8986">稬<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17669">誽<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21592">䋾<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23259">䬷<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24145">蹃<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15282">橠<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17481">螚<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27128">錼<span class="small">ナ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="958">難<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7765">鎿<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8984">糥<span class="small">ナ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6417">難<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8985">穤<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5274">糯<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3143">儺<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12950">㔮<span class="small">ナ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20171">㰙<span class="small">ナ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="072">名<span class="small">な</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5345">茹<span class="small">な</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="508">菜<span class="small">な</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5411">蔬<span class="small">な</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">ない</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei onyomi"><a class="color2" href="2697">乃<span class="small">ナイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="206">内<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12696">內<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13937">奶<span class="small">ナイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2078">奈<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13975">妳<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19142">㚷<span class="small">ナイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1174">耐<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2700">廼<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17227">荋<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24147">迡<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2699">迺<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13073">倷<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14044">娞<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14364">屔<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15582">浽<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22207">䘦<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13769">埿<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17268">萘<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20861">㾍<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15676">渿<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23405">䯮<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7590">鈮<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14990">搱<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20282">㲡<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20755">㼏<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16179">熋<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15006">摨<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17481">螚<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14246">嬭<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14282">孻<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18205">隬<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24328">䙝<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15306">檷<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23480">䱞<span class="small">ナイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22186">䘅<span class="small">ナイ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5729">无<span class="small">ない</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="984">亡<span class="small">な（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6718">兦<span class="small">な（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6719">亾<span class="small">な（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2887">勿<span class="small">な（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4898">毋<span class="small">な（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1568">没<span class="small">な（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5932">沒<span class="small">な（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5586">罔<span class="small">な（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2832">莫<span class="small">な（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="602">無<span class="small">な（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2100">蔑<span class="small">ないがし（ろ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9633">薎<span class="small">ないがし（ろ）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">なう</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4778">綯<span class="small">な（う）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">なえ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1541">苗<span class="small">なえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5554">秧<span class="small">なえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18454">鱙<span class="small">なえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4279">蹇<span class="small">なえ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1943">萎<span class="small">な（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5229">痿<span class="small">な（える）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">なお</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3065">仍<span class="small">なお</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="420">由<span class="small">なお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6251">犹<span class="small">なお</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1744">尚<span class="small">なお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23958">尙<span class="small">なお</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1917">猶<span class="small">なお</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="193">直<span class="small">なお（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="524">治<span class="small">なお（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13028">乿<span class="small">なお（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="193">直<span class="small">なお（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="524">治<span class="small">なお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13028">乿<span class="small">なお（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">なか</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="059">中<span class="small">なか</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="568">仲<span class="small">なか</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1948">淫<span class="small">ながあめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4432">潦<span class="small">ながあめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27442">䨙<span class="small">ながあめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3988">霖<span class="small">ながあめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3989">霪<span class="small">ながあめ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="643">永<span class="small">なが（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7864">镸<span class="small">なが（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7865">兏<span class="small">なが（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="190">長<span class="small">なが（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12508">俢<span class="small">なが（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="729">修<span class="small">なが（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4229">脩<span class="small">なが（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4252">曼<span class="small">なが（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2960">遥<span class="small">なが（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11747">㬅<span class="small">なが（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3359">夐<span class="small">なが（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5778">遙<span class="small">なが（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15068">敻<span class="small">なが（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2168">胡<span class="small">ながい（き）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4477">轅<span class="small">ながえ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1670">茎<span class="small">なかご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5937">莖<span class="small">なかご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5034">袤<span class="small">なが（さ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10523">䀎<span class="small">ながしめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5150">眄<span class="small">ながしめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3104">倪<span class="small">ながしめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5157">睇<span class="small">ながしめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5162">睥<span class="small">ながしめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10575">睤<span class="small">ながしめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21048">䁹<span class="small">ながしめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4325">沚<span class="small">なかす</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20312">㳅<span class="small">なが（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="387">配<span class="small">なが（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="434">流<span class="small">なが（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4999">謫<span class="small">なが（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8220">讁<span class="small">なが（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1858">媒<span class="small">なかだち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="213">半<span class="small">なか（ば）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="254">央<span class="small">なか（ば）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19483">㡕<span class="small">なか（ば）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2909">朋<span class="small">なかま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="954">党<span class="small">なかま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14630">帮<span class="small">なかま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3498">幇<span class="small">なかま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3360">夥<span class="small">なかま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19107">㚌<span class="small">なかま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14651">幚<span class="small">なかま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6511">幫<span class="small">なかま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5834">黨<span class="small">なかま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10523">䀎<span class="small">なが（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5150">眄<span class="small">なが（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1817">眺<span class="small">なが（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1322">詠<span class="small">なが（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2430">乍<span class="small">なが（ら）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="937">存<span class="small">ながら（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2832">莫<span class="small">なかれ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2887">勿<span class="small">なか（れ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4898">毋<span class="small">なか（れ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11612">旈<span class="small">なが（れ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3783">旒<span class="small">なが（れ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20312">㳅<span class="small">なが（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="434">流<span class="small">なが（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4422">漓<span class="small">なが（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5211">疚<span class="small">ながわずら（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5233">痼<span class="small">ながわずら（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1997">錮<span class="small">ながわずら（い）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">なき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2809">凪<span class="small">なぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27821">𡵢<span class="small">なぎ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4127">梛<span class="small">なぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27888">𣷓<span class="small">なぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5871">椥<span class="small">なぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23985">彅<span class="small">なぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27871">𣟿<span class="small">なぎ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2752">汀<span class="small">なぎさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4325">沚<span class="small">なぎさ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2542">渚<span class="small">なぎさ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6389">渚<span class="small">なぎさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3376">妣<span class="small">なきはは</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">なく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="15377">毭<span class="small">ナク</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2921">牟<span class="small">な（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="478">泣<span class="small">な（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3236">呱<span class="small">な（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24793">哌<span class="small">な（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3262">哭<span class="small">な（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3273">唳<span class="small">な（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4371">涕<span class="small">な（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13370">唧<span class="small">な（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3279">啾<span class="small">な（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3281">喞<span class="small">な（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3282">啼<span class="small">な（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12337">喑<span class="small">な（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="227">鳴<span class="small">な（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13555">噾<span class="small">な（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3316">嚶<span class="small">な（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2809">凪<span class="small">な（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="439">和<span class="small">な（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13294">咊<span class="small">な（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14842">惒<span class="small">な（ぐ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2720">薙<span class="small">な（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18616">龢<span class="small">な（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1321">慰<span class="small">なぐさ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1321">慰<span class="small">なぐさ（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1328">殴<span class="small">なぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3680">挌<span class="small">なぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25324">掷<span class="small">なぐ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1896">撲<span class="small">なぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6231">毆<span class="small">なぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15033">擈<span class="small">なぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3737">擲<span class="small">なぐ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">なけ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3677">抛<span class="small">なげう（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6491">拋<span class="small">なげう（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25324">掷<span class="small">なげう（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3737">擲<span class="small">なげう（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1182">嘆<span class="small">なげ（かわしい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6378">嘆<span class="small">なげ（かわしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3222">吁<span class="small">なげ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3252">咨<span class="small">なげ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25244">恸<span class="small">なげ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3258">唏<span class="small">なげ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4563">欷<span class="small">なげ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3277">喟<span class="small">なげ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1182">嘆<span class="small">なげ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1341">慨<span class="small">なげ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3286">嗚<span class="small">なげ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3288">嗟<span class="small">なげ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3599">愾<span class="small">なげ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3608">慷<span class="small">なげ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3614">慟<span class="small">なげ（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6378">嘆<span class="small">なげ（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2713">歎<span class="small">なげ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11149">慨<span class="small">なげ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14874">憅<span class="small">なげ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="381">投<span class="small">な（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3677">抛<span class="small">な（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6491">拋<span class="small">な（げる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">なこ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3374">妁<span class="small">なこうど</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="439">和<span class="small">なご（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13294">咊<span class="small">なご（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14842">惒<span class="small">なご（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18616">龢<span class="small">なご（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="439">和<span class="small">なご（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13294">咊<span class="small">なご（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14842">惒<span class="small">なご（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18616">龢<span class="small">なご（やか）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">なさ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="740">情<span class="small">なさ（け）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5153">眷<span class="small">なさ（け）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">なし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="2079">梨<span class="small">なし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12080">梸<span class="small">なし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12079">棃<span class="small">なし</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2887">勿<span class="small">な（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3913">昵<span class="small">なじ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1054">詰<span class="small">なじ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2829">駁<span class="small">なじ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4494">駮<span class="small">なじ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">なす</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2212">茄<span class="small">なす</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="043">生<span class="small">な（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="546">成<span class="small">な（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="141">作<span class="small">な（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18688">㑅<span class="small">な（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1008">為<span class="small">な（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24405">济<span class="small">な（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="879">済<span class="small">な（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3123">做<span class="small">な（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="899">就<span class="small">な（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6248">爲<span class="small">な（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5975">濟<span class="small">な（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24483">荠<span class="small">なずな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9694">萕<span class="small">なずな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5434">薺<span class="small">なずな</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2212">茄<span class="small">なすび</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1834">泥<span class="small">なず（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1421">擦<span class="small">なす（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">なそ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="17653">詸<span class="small">なぞ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2080">謎<span class="small">なぞ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14924">拟<span class="small">なぞら（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1734">准<span class="small">なぞら（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6074">凖<span class="small">なぞら（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="732">準<span class="small">なぞら（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3134">僣<span class="small">なぞら（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3133">僭<span class="small">なぞら（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1651">擬<span class="small">なぞら（える）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">なた</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3448">屶<span class="small">なた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4693">鉈<span class="small">なた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="428">洋<span class="small">なだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25579">滩<span class="small">なだ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2715">灘<span class="small">なだ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2945">宥<span class="small">なだ（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">なつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei onyomi"><a class="color2" href="2709">捺<span class="small">ナツ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="088">夏<span class="small">なつ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13902">夓<span class="small">なつ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="962">納<span class="small">ナッ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1623">懐<span class="small">なつ（かしい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6091">懷<span class="small">なつ（かしい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1623">懐<span class="small">なつ（かしむ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6091">懷<span class="small">なつ（かしむ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1623">懐<span class="small">なつ（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6091">懷<span class="small">なつ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1623">懐<span class="small">なつ（ける）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6091">懷<span class="small">なつ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9890">螈<span class="small">なつご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9868">蝘<span class="small">なつぜみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15158">枣<span class="small">なつめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25375">栆<span class="small">なつめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4132">棗<span class="small">なつめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5470">皙<span class="small">なつめ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">なて</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="14913">抚<span class="small">な（でる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3675">拊<span class="small">な（でる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3699">捫<span class="small">な（でる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2873">撫<span class="small">な（でる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">なと</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3668">抔<span class="small">など</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21934">䒭<span class="small">など</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27156">㧵<span class="small">など</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="378">等<span class="small">など</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">なな</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="031">七<span class="small">なな</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="031">七<span class="small">なな（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1121">斜<span class="small">なな（め）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">なに</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="087">何<span class="small">なに</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2077">那<span class="small">なに</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4250">曷<span class="small">なに</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18699">㑚<span class="small">なに</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3369">奚<span class="small">なに</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1566">某<span class="small">なにがし</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts21">
                    <h3 class="ttl_while">なの</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="031">七<span class="small">なの</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts22">
                    <h3 class="ttl_while">なひ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5364">靡<span class="small">なび（かす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5364">靡<span class="small">なび（く）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts23">
                    <h3 class="ttl_while">なふ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1115">刺<span class="small">なふだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4023">柬<span class="small">なふだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25944">笺<span class="small">なふだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8838">䇳<span class="small">なふだ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2041">箋<span class="small">なふだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5707">嫐<span class="small">なぶ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3412">嬲<span class="small">なぶ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts24">
                    <h3 class="ttl_while">なへ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="2744">銚<span class="small">なべ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2081">鍋<span class="small">なべ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4717">鎬<span class="small">なべ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts25">
                    <h3 class="ttl_while">なま</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="043">生<span class="small">なま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5384">葷<span class="small">なまぐさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4239">腥<span class="small">なまぐさ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9218">羴<span class="small">なまぐさ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5132">羶<span class="small">なまぐさ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1488">怠<span class="small">なま（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3627">懈<span class="small">なま（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14873">慭<span class="small">なまじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3618">憖<span class="small">なまじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11001">憗<span class="small">なまじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14873">慭<span class="small">なまじい（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3618">憖<span class="small">なまじい（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11001">憗<span class="small">なまじい（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11912">脍<span class="small">なます</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26162">齑<span class="small">なます</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4310">膾<span class="small">なます</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23133">䪠<span class="small">なます</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5321">韲<span class="small">なます</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6660">䪡<span class="small">なます</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27437">䪢<span class="small">なます</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23134">䪣<span class="small">なます</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6659">虀<span class="small">なます</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5320">齏<span class="small">なます</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3895">鱠<span class="small">なます</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6902">魸<span class="small">なまず</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2775">鮎<span class="small">なまず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5252">癜<span class="small">なまず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3875">鯰<span class="small">なまず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6995">鰋<span class="small">なまず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11912">脍<span class="small">なます（にする）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4310">膾<span class="small">なます（にする）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2112">冶<span class="small">なまめ（かしい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2117">妖<span class="small">なまめ（かしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25053">娇<span class="small">なまめ（かしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26336">艳<span class="small">なまめ（かしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3409">嬌<span class="small">なまめ（かしい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1953">艶<span class="small">なまめ（かしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6296">艷<span class="small">なまめ（かしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9356">豓<span class="small">なまめ（かしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9357">豔<span class="small">なまめ（かしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4949">訛<span class="small">なまり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1022">鉛<span class="small">なまり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5002">譌<span class="small">なまり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4949">訛<span class="small">なま（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22826">䤜<span class="small">なま（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1220">鈍<span class="small">なま（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5002">譌<span class="small">なま（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts26">
                    <h3 class="ttl_while">なみ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1275">凡<span class="small">なみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12723">凢<span class="small">なみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24711">凣<span class="small">なみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="386">波<span class="small">なみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="976">並<span class="small">なみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1602">浪<span class="small">なみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2795">涛<span class="small">なみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6015">竝<span class="small">なみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6602">傡<span class="small">なみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25564">溊<span class="small">なみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2794">濤<span class="small">なみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4454">瀾<span class="small">なみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2100">蔑<span class="small">なみ（する）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9633">薎<span class="small">なみ（する）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4333">泗<span class="small">なみだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4340">泪<span class="small">なみだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4346">洟<span class="small">なみだ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1307">涙<span class="small">なみだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4371">涕<span class="small">なみだ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6445">淚<span class="small">なみだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4454">瀾<span class="small">なみだ（つ）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts27">
                    <h3 class="ttl_while">なめ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4354">韋<span class="small">なめしがわ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2916">鞄<span class="small">なめしがわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5083">靼<span class="small">なめしがわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23079">䩝<span class="small">なめしがわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5095">鞣<span class="small">なめしがわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5095">鞣<span class="small">なめ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1348">滑<span class="small">なめ（らか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4248">膩<span class="small">なめ（らか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3227">吮<span class="small">な（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25095">尝<span class="small">な（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5574">舐<span class="small">な（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9315">䑛<span class="small">な（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12356">啐<span class="small">な（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6258">甞<span class="small">な（める）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2553">嘗<span class="small">な（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9316">舓<span class="small">な（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts28">
                    <h3 class="ttl_while">なや</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3351">墅<span class="small">なや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25247">恼<span class="small">なや（ます）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1223">悩<span class="small">なや（ます）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6087">惱<span class="small">なや（ます）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26335">艰<span class="small">なや（み）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5576">艱<span class="small">なや（み）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9354">囏<span class="small">なや（み）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1847">屯<span class="small">なや（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11184">㤇<span class="small">なや（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5211">疚<span class="small">なや（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26335">艰<span class="small">なや（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25247">恼<span class="small">なや（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1223">悩<span class="small">なや（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6087">惱<span class="small">なや（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3626">懊<span class="small">なや（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4279">蹇<span class="small">なや（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5576">艱<span class="small">なや（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9354">囏<span class="small">なや（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts29">
                    <h3 class="ttl_while">なよ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5113">猗<span class="small">なよ（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22456">䝝<span class="small">なよ（やか）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts30">
                    <h3 class="ttl_while">なら</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4028">枹<span class="small">なら</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2511">楢<span class="small">なら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24537">习<span class="small">なら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5102">狃<span class="small">なら（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="696">効<span class="small">なら（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1557">倣<span class="small">なら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6198">效<span class="small">なら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12569">俲<span class="small">なら（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="320">習<span class="small">なら（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1645">閑<span class="small">なら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3125">傚<span class="small">なら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4573">肄<span class="small">なら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3407">嫺<span class="small">なら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3408">嫻<span class="small">なら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5103">狎<span class="small">な（らす）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2348">馴<span class="small">な（らす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="227">鳴<span class="small">な（らす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="665">慣<span class="small">な（らす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2583">擾<span class="small">な（らす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="680">均<span class="small">なら（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="976">並<span class="small">なら（びに）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6015">竝<span class="small">なら（びに）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6602">傡<span class="small">なら（びに）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="791">比<span class="small">なら（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1478">双<span class="small">なら（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3061">弍<span class="small">なら（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3074">伉<span class="small">なら（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3500">并<span class="small">なら（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12962">夶<span class="small">なら（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="976">並<span class="small">なら（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1885">併<span class="small">なら（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6490">幷<span class="small">なら（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23889">丽<span class="small">なら（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24585">俪<span class="small">なら（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="387">配<span class="small">なら（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6015">竝<span class="small">なら（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12460">倂<span class="small">なら（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14103">婯<span class="small">なら（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6602">傡<span class="small">なら（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18874">㕠<span class="small">なら（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7253">䴡<span class="small">なら（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4502">駢<span class="small">なら（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1302">離<span class="small">なら（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6146">雙<span class="small">なら（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6500">騈<span class="small">なら（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1309">麗<span class="small">なら（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23006">䨇<span class="small">なら（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3144">儷<span class="small">なら（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18747">㒧<span class="small">なら（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="436">列<span class="small">なら（べる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="976">並<span class="small">なら（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26304">胪<span class="small">なら（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6015">竝<span class="small">なら（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6602">傡<span class="small">なら（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4574">肆<span class="small">なら（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4502">駢<span class="small">なら（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6500">騈<span class="small">なら（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4317">臚<span class="small">なら（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4512">驪<span class="small">なら（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24712">凨<span class="small">ならわし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7426">凬<span class="small">ならわし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7427">凮<span class="small">ならわし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="217">風<span class="small">ならわし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="665">慣<span class="small">ならわし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7428">飌<span class="small">ならわし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1173">俗<span class="small">なら（わし）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts31">
                    <h3 class="ttl_while">なり</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2939">也<span class="small">なり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="115">形<span class="small">なり</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts32">
                    <h3 class="ttl_while">なる</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="043">生<span class="small">な（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="546">成<span class="small">な（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1008">為<span class="small">な（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="762">造<span class="small">な（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="899">就<span class="small">な（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6248">爲<span class="small">な（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8589">艁<span class="small">な（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="227">鳴<span class="small">な（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21900">䒃<span class="small">な（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts33">
                    <h3 class="ttl_while">なれ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4556">麋<span class="small">なれしか</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1984">串<span class="small">な（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3541">忸<span class="small">な（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5102">狃<span class="small">な（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4337">泄<span class="small">な（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5103">狎<span class="small">な（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24552">亵<span class="small">な（れる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2348">馴<span class="small">な（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="665">慣<span class="small">な（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="903">熟<span class="small">な（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4985">諳<span class="small">な（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5062">褻<span class="small">な（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts34">
                    <h3 class="ttl_while">なわ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1541">苗<span class="small">なわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8998">紉<span class="small">なわ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1705">索<span class="small">なわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4778">綯<span class="small">なわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21580">䋲<span class="small">なわ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1760">縄<span class="small">なわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21600">䌇<span class="small">なわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4803">縲<span class="small">なわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6095">繩<span class="small">なわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18454">鱙<span class="small">なわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9126">纝<span class="small">なわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2764">畷<span class="small">なわて</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts35">
                    <h3 class="ttl_while">なん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="13941">奻<span class="small">ナン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="056">男<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20816">㽖<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23945">妠<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24541">乸<span class="small">ナン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="207">南<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10298">侽<span class="small">ナン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="962">納<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5706">娚<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16592">畘<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17243">莮<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25547">难<span class="small">ナン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1848">軟<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13076">偄<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18775">㓓<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22333">䛁<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3283">喃<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13788">堧<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14111">婻<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14963">揇<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15662">渜<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15709">湪<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17275">萳<span class="small">ナン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2810">楠<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4919">煖<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15103">暔<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16145">煗<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22793">䣸<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22235">䙇<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23253">䬯<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20896">㾺<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21379">䈒<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21498">䊖<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8484">輭<span class="small">ナン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="958">難<span class="small">ナン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6417">難<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18574">黁<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19502">㡪<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20013">㬮<span class="small">ナン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6521">齉<span class="small">ナン</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="087">何<span class="small">なん</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2697">乃<span class="small">なんじ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="036">女<span class="small">なんじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5880">尓<span class="small">なんじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14336">尒<span class="small">なんじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14337">尔<span class="small">なんじ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2481">而<span class="small">なんじ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2550">汝<span class="small">なんじ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="894">若<span class="small">なんじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2700">廼<span class="small">なんじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2699">迺<span class="small">なんじ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2479">爾<span class="small">なんじ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2077">那<span class="small">なん（ぞ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2078">奈<span class="small">なん（ぞ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2168">胡<span class="small">なん（ぞ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4250">曷<span class="small">なん（ぞ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10504">盇<span class="small">なん（ぞ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18699">㑚<span class="small">なん（ぞ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19272">㝕<span class="small">なん（ぞ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2167">烏<span class="small">なん（ぞ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3369">奚<span class="small">なん（ぞ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5564">盍<span class="small">なん（ぞ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1919">庸<span class="small">なん（ぞ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2308">渠<span class="small">なん（ぞ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14312">寍<span class="small">なん（ぞ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14316">寕<span class="small">なん（ぞ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4691">鉅<span class="small">なん（ぞ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14320">寜<span class="small">なん（ぞ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1852">寧<span class="small">なん（ぞ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="917">垂<span class="small">なんなん（とする）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5966">埀<span class="small">なんなん（とする）</span></a></li>
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