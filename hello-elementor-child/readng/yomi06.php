<?php
/*
 * Template Name: Yomi6
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
               <h1 class="ttl_main">音訓検索「か」</h1>
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
               <p>「か」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>か</option>
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
                              <option value="yomi44">わ</option>
                              <option value="yomi45">を</option>
                         </select>
                    </div>
               </div><!--search_narrowdown-->
               <div class="search_data yomi_menu">
                    <ul class="search_menu2">
                         <li id="parts1_menu"><a href="#parts1">か</a></li>
                         <li id="parts2_menu"><a href="#parts2">かい</a></li>
                         <li id="parts3_menu"><a href="#parts3">かう</a></li>
                         <li id="parts4_menu"><a href="#parts4">かえ</a></li>
                         <li id="parts5_menu"><a href="#parts5">かお</a></li>
                         <li id="parts6_menu"><a href="#parts6">かか</a></li>
                         <li id="parts7_menu"><a href="#parts7">かき</a></li>
                         <li id="parts8_menu"><a href="#parts8">かく</a></li>
                         <li id="parts9_menu"><a href="#parts9">かけ</a></li>
                         <li id="parts10_menu"><a href="#parts10">かこ</a></li>
                         <li id="parts11_menu"><a href="#parts11">かさ</a></li>
                         <li id="parts12_menu"><a href="#parts12">かし</a></li>
                         <li id="parts13_menu"><a href="#parts13">かす</a></li>
                         <li id="parts14_menu"><a href="#parts14">かせ</a></li>
                         <li id="parts15_menu"><a href="#parts15">かそ</a></li>
                         <li id="parts16_menu"><a href="#parts16">かた</a></li>
                         <li id="parts17_menu"><a href="#parts17">かち</a></li>
                         <li id="parts18_menu"><a href="#parts18">かつ</a></li>
                         <li id="parts19_menu"><a href="#parts19">かて</a></li>
                         <li id="parts20_menu"><a href="#parts20">かと</a></li>
                         <li id="parts21_menu"><a href="#parts21">かな</a></li>
                         <li id="parts22_menu"><a href="#parts22">かに</a></li>
                         <li id="parts23_menu"><a href="#parts23">かね</a></li>
                         <li id="parts24_menu"><a href="#parts24">かの</a></li>
                         <li id="parts25_menu"><a href="#parts25">かは</a></li>
                         <li id="parts26_menu"><a href="#parts26">かひ</a></li>
                         <li id="parts27_menu"><a href="#parts27">かふ</a></li>
                         <li id="parts28_menu"><a href="#parts28">かへ</a></li>
                         <li id="parts29_menu"><a href="#parts29">かま</a></li>
                         <li id="parts30_menu"><a href="#parts30">かみ</a></li>
                         <li id="parts31_menu"><a href="#parts31">かむ</a></li>
                         <li id="parts32_menu"><a href="#parts32">かめ</a></li>
                         <li id="parts33_menu"><a href="#parts33">かも</a></li>
                         <li id="parts34_menu"><a href="#parts34">かや</a></li>
                         <li id="parts35_menu"><a href="#parts35">かゆ</a></li>
                         <li id="parts36_menu"><a href="#parts36">かよ</a></li>
                         <li id="parts37_menu"><a href="#parts37">から</a></li>
                         <li id="parts38_menu"><a href="#parts38">かり</a></li>
                         <li id="parts39_menu"><a href="#parts39">かる</a></li>
                         <li id="parts40_menu"><a href="#parts40">かれ</a></li>
                         <li id="parts41_menu"><a href="#parts41">かろ</a></li>
                         <li id="parts42_menu"><a href="#parts42">かわ</a></li>
                         <li id="parts43_menu"><a href="#parts43">かん</a></li>
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
                    <h3 class="ttl_while">か</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="6587">丅<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="015">下<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5659">个<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24544">亇<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="006">火<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="284">化<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3642">戈<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15997">灬<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24391">㐄<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="454">加<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="656">可<span class="small">カ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2211">禾<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12700">叧<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13172">卡<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18681">㐶<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19026">㘞<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="658">仮<span class="small">カ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2210">瓜<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3364">夸<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9370">芐<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9462">华<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12382">伙<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12699">冎<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12743">划<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15087">旮<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16620">癿<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18880">㕦<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20475">㶡<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25028">夻<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="007">花<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="087">何<span class="small">カ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2203">伽<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3323">囮<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3663">找<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5796">呀<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8598">过<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9381">芲<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11220">戓<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13234">吙<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13244">吪<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14287">宊<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15463">沎<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17939">邩<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19622">㤉<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20029">㭉<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20308">㳀<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23959">岈<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24575">佧<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24784">呙<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="439">和<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="455">果<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="654">価<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="657">河<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1333">佳<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1958">苛<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2204">卦<span class="small">カ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2212">茄<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3233">呵<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10345">疜<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11953">杹<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12434">侉<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13294">咊<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13300">咖<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13686">坷<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13984">妿<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13985">姀<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14404">岢<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14921">抲<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15484">泇<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16300">牫<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19117">㚙<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19138">㚳<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19353">㞹<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20577">㸫<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20581">㸯<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20630">㹢<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24295">䒩<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25274">拤<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27794">𪫧<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="089">科<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1332">架<span class="small">カ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2209">珂<span class="small">カ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2214">迦<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4017">柯<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4018">枷<span class="small">カ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4612">珈<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6052">咼<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11061">恗<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11648">昰<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12784">剐<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12837">㰤<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13216">叚<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13315">咵<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13676">坬<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14015">姱<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15163">柇<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15371">毠<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16029">炣<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16281">牁<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16306">牱<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16597">疨<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17140">胢<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19465">㡁<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19627">㤎<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19772">㧓<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19895">㪃<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19942">㪼<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20218">㱒<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20582">㸰<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21153">䄀<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24801">哗<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24985">垮<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26303">胩<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26530">虾<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26906">㟆<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="086">家<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="088">夏<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="257">荷<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="693">個<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1334">華<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3256">哥<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5217">痂<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5777">崋<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9771">蚜<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10355">疴<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10503">盉<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10661">砢<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11582">斚<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12498">俰<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13332">哧<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13335">哬<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13348">哿<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17547">袔<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20345">㳸<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21078">䂟<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21538">䋀<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23995">晇<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24995">埚<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25055">娲<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25390">桦<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25535">涡<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26379">莴<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27294">㳡<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27786">𠵅<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="452">貨<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1027">菓<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4523">笳<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4885">舸<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4949">訛<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5650">谺<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5662">假<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5981">渮<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6055">啝<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8791">笴<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9260">耞<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9495">菏<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9792">蚵<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11099">惈<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12783">剮<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13374">唬<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13770">堁<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15623">淉<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16403">猓<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17265">萂<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17998">釫<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19057">㙈<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19902">㪋<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20847">㽿<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22782">䣬<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="655">過<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1619">渦<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3346">堝<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4256">跏<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4460">軻<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4954">訶<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5386">萵<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5388">葭<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5773">厦<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6300">萪<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7544">鈥<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8267">猳<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9996">褁<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11581">斝<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12086">棵<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12562">傢<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13426">喛<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14113">婽<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14149">媧<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14785">徦<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14842">惒<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15060">敤<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17085">翗<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17155">腂<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17433">蛌<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17641">訸<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17816">跒<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17978">酠<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18010">鈛<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18167">閕<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18963">㗇<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25911">祸<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25937">窝<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1029">暇<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1335">嫁<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1618">禍<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1620">靴<span class="small">カ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2206">嘩<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3506">廈<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4627">瑕<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5482">賈<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5518">遐<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5922">彁<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8064">觟<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10805">旤<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10855">稞<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10918">窠<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12128">椵<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14644">幏<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15229">楇<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15349">歄<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15765">滒<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15874">澕<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16134">煆<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16162">煱<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16320">犌<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16324">犐<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16747">碋<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17164">腵<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18020">鉌<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18026">鉫<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18027">鉲<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18170">閜<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18300">颬<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19426">㠏<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19552">㢦<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19718">㦊<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20074">㮐<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20200">㰺<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20779">㼫<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20885">㾧<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21994">䔅<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22640">䠸<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23953">嬅<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24923">嗬<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24944">嗰<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25342">撶<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26546">蜗<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="090">歌<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1028">箇<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1617">寡<span class="small">カ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2205">嘉<span class="small">カ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2207">榎<span class="small">カ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2208">樺<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3360">夥<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5050">裹<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5619">窩<span class="small">カ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6400">禍<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7612">銙<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8962">粿<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9057">綶<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9851">蜾<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10394">瘕<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10395">瘑<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10700">碬<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13493">嘏<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14898">戨<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15244">榢<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16669">睱<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19076">㙤<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19107">㚌<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19331">㞜<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19715">㦆<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22016">䔢<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23875">槚<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="453">課<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1616">稼<span class="small">カ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2213">蝦<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4079">蝌<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4087">蝸<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4269">踝<span class="small">カ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5838">價<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6788">䯊<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7643">鋘<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8156">諕<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8503">輠<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8790">䈔<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9082">緺<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9461">蕐<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15005">摦<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15268">樖<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17192">艐<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18419">魤<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20413">㵑<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21251">䅿<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21378">䈑<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21382">䈖<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21594">䌀<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21874">䑝<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22368">䛩<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6793">骻<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7095">鴐<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7096">鴚<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7685">錁<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8266">豭<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8335">赮<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9660">蕸<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9661">薖<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10932">窼<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15258">槬<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16218">燊<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17676">諣<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17751">貑<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17842">踻<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18423">魺<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19003">㗾<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19004">㗿<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20904">㿆<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22603">䠍<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23611">䴥<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24032">濄<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24198">㗻<span class="small">カ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2081">鍋<span class="small">カ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2215">霞<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3045">謌<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3976">罅<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5001">譁<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5140">顆<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6002">鍜<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7479">餜<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12264">檟<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12288">檴<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14890">懗<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22050">䕒<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6800">髁<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7747">鎵<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7748">鎶<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7801">鏵<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9321">舙<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17511">蟼<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18361">騍<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18575">黊<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21302">䆼<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23178">䫗<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23180">䫚<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27142">鎼<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5002">譌<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6747">騢<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6748">騧<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6802">髂<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7269">䴹<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7327">鞾<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7351">䪗<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13902">夓<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18114">鏬<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18290">顝<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22259">䙨<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23391">䯞<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24094">簻<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3879">鰕<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6666">䶗<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6770">驊<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7254">麚<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9727">蘤<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17399">蘳<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18543">鷨<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24160">鐹<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18616">龢<span class="small">カ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17730">讗<span class="small">カ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2939">也<span class="small">か</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="065">日<span class="small">か</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2374">乎<span class="small">か</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/20920">㿝<span class="small">か</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12876">欤<span class="small">か</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/13618">囸<span class="small">か</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/19747">㦲<span class="small">か</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1099">香<span class="small">か</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2440">哉<span class="small">か</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2941">耶<span class="small">か</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1621">蚊<span class="small">か</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9787">蚉<span class="small">か</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2018">鹿<span class="small">か</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/17485">螡<span class="small">か</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4568">歟<span class="small">か</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9788">蟁<span class="small">か</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2325">馨<span class="small">か</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1959">牙<span class="small">ガ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1960">瓦<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13185">厊<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24565">伢<span class="small">ガ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="831">我<span class="small">ガ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2203">伽<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3323">囮<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5796">呀<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11280">㧎<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13244">吪<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14669">庌<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16353">犽<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19622">㤉<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24747">厑<span class="small">ガ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="091">画<span class="small">ガ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="456">芽<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8563">迓<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11955">枒<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13297">咓<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14921">抲<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16479">玡<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17913">迗<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17942">邷<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19746">㦱<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20764">㼘<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21768">䏓<span class="small">ガ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2216">俄<span class="small">ガ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2218">臥<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7522">釓<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8035">卧<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10640">砑<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16597">疨<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16714">砈<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19152">㛂<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21186">䄰<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21656">䍓<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26530">虾<span class="small">ガ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2217">峨<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3257">哦<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3385">娥<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5353">莪<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5654">峩<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10649">砙<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16875">笌<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17547">袔<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19792">㧴<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20949">㿿<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25531">涐<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4950">訝<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10149">珴<span class="small">ガ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="659">賀<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6261">畫<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10554">睋<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10677">硪<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16623">皒<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17085">翗<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17641">訸<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18006">鈋<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18167">閕<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21157">䄉<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27745">𧚄<span class="small">ガ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1030">雅<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2219">蛾<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5583">衙<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9832">䖸<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10300">畵<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16747">碋<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20382">㴫<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24348">䪵<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8140">誐<span class="small">ガ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1336">餓<span class="small">ガ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2213">蝦<span class="small">ガ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2220">駕<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7644">鋨<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17348">蕥<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18419">魤<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20413">㵑<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22998">䧽<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23918">噶<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7686">錷<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18423">魺<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22048">䕏<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18357">騀<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3812">鵝<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3813">鵞<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7131">䳘<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23559">䳗<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6663">齖<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18598">齀<span class="small">ガ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22492">䞈<span class="small">ガ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">かい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="kanjiy/14599">巜<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1031">介<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1037">刈<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3055">丐<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3361">夬<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5776">乢<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6607">丯<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12399">开<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5760">囘<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12731">凷<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12921">匃<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12922">匄<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13213">叏<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19338">㞧<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21914">䒓<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25498">汇<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="092">会<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="093">回<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="832">灰<span class="small">カイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2234">亥<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3073">价<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11026">忋<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18183">阣<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24182">㐪<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24189">㓞<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="458">改<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="661">快<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1033">戒<span class="small">カイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2229">芥<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2236">苅<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13240">吤<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13614">囬<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13666">块<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13952">妎<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14350">尬<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14399">岕<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14671">庎<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14803">忦<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14808">怀<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15149">杚<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19035">㘨<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19252">㜾<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19266">㝏<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19457">㠹<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19767">㧉<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20252">㱼<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20627">㹟<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24784">呙<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25448">阶<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="957">届<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1337">怪<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1622">拐<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1625">劾<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3059">乖<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6167">屆<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10116">玠<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12435">佪<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12436">侅<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12628">侩<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12806">刽<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13295">咍<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15079">斺<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15473">沬<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16014">炌<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16016">炏<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19773">㧔<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20178">㰡<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21770">䏗<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24715">凯<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27147">㧟<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27832">𢌞<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="094">海<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="259">界<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1034">皆<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1338">悔<span class="small">カイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2172">廻<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2222">咳<span class="small">カイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2224">恢<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3337">垓<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3423">孩<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3530">徊<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3683">挂<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4016">枴<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5214">疥<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5339">茴<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5952">畍<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5959">恠<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6052">咼<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7926">陔<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9427">荄<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9767">虺<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10641">砎<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10780">祄<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11062">恛<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11063">㤥<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13314">咴<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13316">咶<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13328">哙<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13923">奒<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14004">姟<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14430">峐<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14928">拻<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15513">洃<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15514">洄<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16374">狤<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17537">衸<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17946">郂<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18697">㑘<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18873">㕟<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19305">㞀<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19322">㞒<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19465">㡁<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19593">㣛<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19776">㧡<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20182">㰧<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20183">㰨<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23997">柺<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24799">哕<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24803">哜<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24990">垲<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25523">浍<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25774">狯<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26971">郐<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="459">害<span class="small">カイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2227">桧<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5507">迴<span class="small">カイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6382">悔<span class="small">カイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6388">海<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8253">豗<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9772">蚧<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9812">蚘<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11081">悈<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11095">悝<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11666">晐<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11796">胲<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11912">脍<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12846">欬<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12848">欯<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12931">㱾<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14276">孬<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14719">廽<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15401">氦<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16061">烗<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16067">烠<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16070">烣<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18827">㔞<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18917">㖑<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20184">㰩<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20333">㳦<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20707">㻁<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20850">㾂<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21313">䇈<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21535">䊽<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21538">䋀<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21783">䏨<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21957">䓒<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22436">䝅<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25055">娲<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25624">烩<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26531">㖞<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27377">㻅<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="457">械<span class="small">カイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2225">晦<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3117">偕<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5980">淮<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9176">罣<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10365">痎<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10505">盔<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13164">勓<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15344">欳<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16082">烸<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17258">菦<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17920">逥<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20344">㳷<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20863">㾏<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20951">䀁<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20983">䀭<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21093">䂯<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21960">䓙<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22325">䚸<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22438">䝇<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24073">畡<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24074">痐<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="095">絵<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="258">開<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="260">階<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="460">街<span class="small">カイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2221">凱<span class="small">カイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2223">堺<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3124">傀<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3274">喙<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3702">揩<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4053">蛔<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5685">椢<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7545">鈣<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7947">堦<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9025">絓<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9026">絯<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9813">蛕<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10035">裓<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10371">痗<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11130">愒<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13415">喈<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13418">喎<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13426">喛<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14137">媘<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14149">媧<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15687">湏<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15698">湝<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16992">絠<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17157">腉<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19066">㙕<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19105">㚊<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19195">㛻<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19685">㥟<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20500">㷄<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20503">㷇<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21979">䓳<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22911">䦏<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23148">䪱<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23300">䭴<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24086">祴<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26277">翙<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26404">㑹<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26472">蒈<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="660">解<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1339">塊<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1341">慨<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1342">該<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1936">賄<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1961">楷<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2355">罫<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3205">匯<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3469">嵬<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3599">愾<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4964">詼<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5045">褂<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5193">隗<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5757">會<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6314">觧<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8064">觟<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8122">詿<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8296">賅<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8818">筷<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9578">蒯<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12991">滙<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13456">嗐<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13471">嗨<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13809">塏<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14523">嵦<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14698">廆<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14861">慀<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14896">戤<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15234">楐<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15349">歄<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15721">溉<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15753">溾<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16160">煯<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16530">琾<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16535">瑎<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17651">詯<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17652">詴<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17738">豥<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17763">賌<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17895">輆<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19402">㟴<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19818">㨙<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19823">㨟<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19828">㨤<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20603">㹆<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20887">㾩<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21099">䂷<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21995">䔇<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22125">䖶<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22356">䛛<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22641">䠹<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26545">蜖<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1340">概<span class="small">カイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2232">魁<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4161">槐<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4633">瑰<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4965">誨<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4966">誡<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6709">駃<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6820">䯰<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7630">銊<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8827">箉<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10366">㾬<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10861">稭<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11443">摡<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11710">暟<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11877">膎<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14866">慖<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15065">敱<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15066">敳<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15252">榽<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17336">蔮<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18314">餀<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18410">魀<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18625">嘅<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18876">㕢<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18988">㗨<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19920">㪡<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20240">㱯<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20242">㱱<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20259">㲅<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20890">㾯<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21016">䁓<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21069">䂕<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21110">䃈<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21833">䐩<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22765">䣙<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22834">䤤<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22836">䤧<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24066">犗<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27098">酼<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27233">㮣<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1962">潰<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2228">漑<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5089">鞋<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6890">魪<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7381">頦<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9643">蕢<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10410">瘣<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10718">磈<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10719">磕<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11149">慨<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11171">憒<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12197">槶<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12627">儈<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12805">劊<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13512">嘳<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13544">噧<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13627">圚<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13855">墤<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14215">嬇<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15862">澅<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17192">艐<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17462">蝔<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17669">誽<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17675">諙<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18731">㒑<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21019">䁗<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21377">䈐<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21386">䈛<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22238">䙎<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23257">䬵<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23462">䰺<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23537">䲸<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1032">壊<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1623">懐<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1963">諧<span class="small">カイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1966">骸<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3511">廨<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3627">懈<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4496">駭<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5122">獪<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5430">薤<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7362">韰<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7388">頮<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8713">鄶<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9662">薢<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10001">褱<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11892">䐴<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12170">槪<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12171">槩<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12339">噦<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12920">殨<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13549">噲<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14223">嬒<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14576">嶰<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14711">廥<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15034">擓<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15274">橀<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15879">澥<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15886">澮<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15903">濊<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15922">濭<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16224">燘<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16457">獬<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16554">璝<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16921">篕<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17174">膭<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17484">螝<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17581">褢<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17676">諣<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19085">㙰<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19432">㠕<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21400">䈭<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22041">䕇<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22384">䛺<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22675">䡡<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23061">䩈<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23379">䯐<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23935">壒<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24279">䇒<span class="small">カイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2226">檜<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2233">鮭<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4310">膾<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4847">醢<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5531">邂<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6731">駴<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6929">鮰<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7718">鍇<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10233">璯<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12265">檞<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13563">嚌<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16242">燴<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16563">瓂<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17688">謉<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22057">䕚<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22254">䙡<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22644">䠽<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27139">鎅<span class="small">カイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2231">鎧<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7893">闓<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9128">繢<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9129">繣<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9288">聵<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9321">舙<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10080">襘<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10349">㿍<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10720">礚<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10817">禬<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12287">櫆<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16694">瞺<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17380">藱<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18089">鎎<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18319">餯<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18575">黊<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18742">㒠<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19108">㚍<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21138">䃬<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23418">䯿<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23561">䳚<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23640">䵋<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24075">癐<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24960">嚡<span class="small">カイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2230">蟹<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5657">蠏<span class="small">カイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6091">懷<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6094">繪<span class="small">カイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6151">壞<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6567">鼃<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6568">䵷<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6664">齘<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7297">鞵<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7439">颽<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8982">糩<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9138">繲<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9244">翽<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11614">旝<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15947">瀣<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15948">瀤<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16868">竵<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18290">顝<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19241">㜳<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19441">㠢<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21431">䉏<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22398">䜋<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22406">䜕<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23190">䫥<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23191">䫦<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7802">鐦<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7904">闠<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10197">瓌<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12306">櫰<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17723">譮<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18293">顡<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18516">鶛<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22627">䠩<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22695">䡷<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22704">䢈<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7280">靧<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7328">鞼<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14264">孈<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18132">鐬<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21147">䃶<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22080">䕸<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23197">䫭<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23498">䱺<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23605">䴜<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7422">顪<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9735">蘹<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17403">蘾<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18322">饚<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18599">齂<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23282">䭝<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23396">䯣<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26284">耲<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6852">鬠<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8457">躛<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23136">䪥<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23397">䯤<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26864">躗<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3895">鱠<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17052">纗<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23515">䲒<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23677">䵳<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23714">䶣<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18617">龤<span class="small">カイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23696">䶐<span class="small">カイ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="008">貝<span class="small">かい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="696">効<span class="small">かい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6198">效<span class="small">かい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/27861">𣓤<span class="small">かい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4146">楫<span class="small">かい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4189">橈<span class="small">かい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12143">檝<span class="small">かい</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4198">櫂<span class="small">かい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9352">艣<span class="small">かい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9961">蟸<span class="small">かい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12144">艥<span class="small">かい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4112">蠡<span class="small">かい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4896">艪<span class="small">かい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1009">違<span class="small">か（い）</span></a></li>
                         <li class="others_kanji onyomi"><a href="3058">乂<span class="small">ガイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1037">刈<span class="small">ガイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="096">外<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5313">艾<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20305">㲼<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27742">𦫿<span class="small">ガイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2234">亥<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19614">㣻<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24182">㐪<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25107">岂<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2236">苅<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13952">妎<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14803">忦<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19252">㜾<span class="small">ガイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1625">劾<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12436">侅<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13189">厓<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15079">斺<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19045">㘷<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19298">㝵<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23900">哎<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24715">凯<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24723">剀<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2222">咳<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3337">垓<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3423">孩<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7926">陔<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14442">峞<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17537">衸<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19776">㧡<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24990">垲<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25246">恺<span class="small">ガイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="459">害<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5646">豈<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10663">砹<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12020">桅<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12846">欬<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18861">㕌<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19652">㤳<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20333">㳦<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22093">䖊<span class="small">ガイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1624">涯<span class="small">ガイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1964">崖<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3029">崕<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3265">啀<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6263">盖<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10664">硋<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11363">捱<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14065">娾<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15638">淣<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16408">猚<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17258">菦<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20863">㾏<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21316">䇋<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22325">䚸<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24073">畡<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24999">堐<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25830">皑<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25863">硙<span class="small">ガイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="460">街<span class="small">ガイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2221">凱<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3033">葢<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3181">剴<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12716">凒<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21979">䓳<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22911">䦏<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23148">䪱<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23300">䭴<span class="small">ガイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1341">慨<span class="small">ガイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1342">該<span class="small">ガイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1965">蓋<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2235">碍<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3469">嵬<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3599">愾<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5161">睚<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7958">隑<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11150">愷<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13456">嗐<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13809">塏<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14523">嵦<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14896">戤<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15721">溉<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15744">溰<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17161">腢<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17651">詯<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17652">詴<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17738">豥<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21995">䔇<span class="small">ガイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1340">概<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7875">閡<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13488">嘊<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15065">敱<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15066">敳<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15786">漄<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16430">獃<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18625">嘅<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18876">㕢<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20240">㱯<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21069">䂕<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21833">䐩<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27233">㮣<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2228">漑<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4665">磑<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5471">皚<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7382">頠<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11149">慨<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22482">䝽<span class="small">ガイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1966">骸<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4496">駭<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12170">槪<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12171">槩<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18488">鴱<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19432">㠕<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22675">䡡<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23379">䯐<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3860">鮠<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6732">騃<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11197">懝<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22644">䠽<span class="small">ガイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2231">鎧<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9288">聵<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18742">㒠<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21138">䃬<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4679">礙<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15947">瀣<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22398">䜋<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22646">䠿<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23190">䫥<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18293">顡<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17726">譺<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23498">䱺<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23714">䶣<span class="small">ガイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18617">龤<span class="small">ガイ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4219">胛<span class="small">かいがらぼね</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="883">蚕<span class="small">かいこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9777">蝅<span class="small">かいこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/22157">䗞<span class="small">かいこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9778">蠺<span class="small">かいこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6304">蠶<span class="small">かいこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1319">腕<span class="small">かいな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11856">䯛<span class="small">かいな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10461">皁<span class="small">かいばおけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10462">皂<span class="small">かいばおけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25372">枥<span class="small">かいばおけ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1801">槽<span class="small">かいばおけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4208">櫪<span class="small">かいばおけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5054">褓<span class="small">かいまき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8990">籴<span class="small">かいよね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5276">糴<span class="small">かいよね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3885">鰄<span class="small">かいらぎ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2969">浬<span class="small">かいり</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">かう</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="716">支<span class="small">か（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="127">交<span class="small">か（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="613">牧<span class="small">か（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4334">沽<span class="small">か（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8990">籴<span class="small">か（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1501">畜<span class="small">か（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3687">捐<span class="small">か（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3327">圉<span class="small">か（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7462">飤<span class="small">か（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="210">買<span class="small">か（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="720">飼<span class="small">か（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5482">賈<span class="small">か（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5649">豢<span class="small">か（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/26337">飼<span class="small">か（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/20618">㹖<span class="small">か（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5276">糴<span class="small">か（う）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">かえ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="392">反<span class="small">かえ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/14754">归<span class="small">かえ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="411">返<span class="small">かえ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3420">孚<span class="small">かえ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8621">还<span class="small">かえ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5861">皈<span class="small">かえ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="106">帰<span class="small">かえ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="968">班<span class="small">かえ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="801">復<span class="small">かえ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12769">㱕<span class="small">かえ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/22716">䢜<span class="small">かえ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3426">孵<span class="small">かえ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1643">還<span class="small">かえ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6229">歸<span class="small">かえ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9141">繳<span class="small">かえ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1056">却<span class="small">かえ（って）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/18850">㕁<span class="small">かえ（って）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3035">卻<span class="small">かえ（って）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2884">楓<span class="small">かえで</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4173">槭<span class="small">かえで</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10523">䀎<span class="small">かえり（みる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="541">省<span class="small">かえり（みる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5147">盻<span class="small">かえり（みる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5150">眄<span class="small">かえり（みる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5153">眷<span class="small">かえり（みる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/24161">頋<span class="small">かえり（みる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/21025">䁞<span class="small">かえり（みる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1392">顧<span class="small">かえり（みる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2140">蛙<span class="small">かえる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6567">鼃<span class="small">かえる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6568">䵷<span class="small">かえる</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="284">化<span class="small">か（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="355">代<span class="small">か（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/18681">㐶<span class="small">か（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12681">兊<span class="small">か（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1094">更<span class="small">か（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3148">兌<span class="small">か（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/13111">兑<span class="small">か（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="647">易<span class="small">か（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/24775">变<span class="small">か（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="608">変<span class="small">か（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4357">爰<span class="small">か（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11744">㪅<span class="small">か（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25320">换<span class="small">か（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1175">替<span class="small">か（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1355">換<span class="small">か（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4402">渝<span class="small">か（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/19585">㣐<span class="small">か（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11751">㬱<span class="small">か（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6203">變<span class="small">か（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="392">反<span class="small">かえ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/14754">归<span class="small">かえ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="411">返<span class="small">かえ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8621">还<span class="small">かえ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5861">皈<span class="small">かえ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="106">帰<span class="small">かえ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="801">復<span class="small">かえ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12769">㱕<span class="small">かえ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/22716">䢜<span class="small">かえ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3426">孵<span class="small">かえ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1643">還<span class="small">かえ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6229">歸<span class="small">かえ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11764">肎<span class="small">がえん（じる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1684">肯<span class="small">がえん（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11765">肻<span class="small">がえん（じる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">かお</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5860">皃<span class="small">かお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8283">㒵<span class="small">かお</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2103">貌<span class="small">かお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7397">䫉<span class="small">かお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4312">臉<span class="small">かお</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="101">顔<span class="small">かお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5783">顏<span class="small">かお</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1554">芳<span class="small">かお（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5323">芬<span class="small">かお（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/20920">㿝<span class="small">かお（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1099">香<span class="small">かお（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4854">馥<span class="small">かお（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/24349">䫝<span class="small">かお（り）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2325">馨<span class="small">かお（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1667">薫<span class="small">かおりぐさ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6426">薰<span class="small">かおりぐさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9664">蘍<span class="small">かおりぐさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5323">芬<span class="small">かお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/20920">㿝<span class="small">かお（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1099">香<span class="small">かお（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1667">薫<span class="small">かお（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6426">薰<span class="small">かお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4854">馥<span class="small">かお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/24349">䫝<span class="small">かお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9664">蘍<span class="small">かお（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2325">馨<span class="small">かお（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">かか</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3310">嚊<span class="small">かか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3414">嬶<span class="small">かか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3310">嚊<span class="small">かかあ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3414">嬶<span class="small">かかあ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1267">抱<span class="small">かか（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2908">捧<span class="small">かか（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25278">拨<span class="small">かか（げる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1383">掲<span class="small">かか（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3692">掀<span class="small">かか（げる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6436">揭<span class="small">かか（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/20069">㮄<span class="small">かか（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3709">搴<span class="small">かか（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4166">榜<span class="small">かか（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3721">撥<span class="small">かか（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11254">㩃<span class="small">かか（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4504">騫<span class="small">かか（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/23369">䮿<span class="small">かか（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4262">跟<span class="small">かかと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4269">踝<span class="small">かかと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4273">踵<span class="small">かかと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25281">挛<span class="small">かが（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3744">攣<span class="small">かが（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/27113">鉴<span class="small">かがみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7843">鍳<span class="small">かがみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="483">鏡<span class="small">かがみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1044">鑑<span class="small">かがみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3046">鑒<span class="small">かがみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/18151">鑬<span class="small">かがみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3852">魴<span class="small">かがみだい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/13050">伛<span class="small">かが（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1074">屈<span class="small">かが（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3127">傴<span class="small">かが（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4266">跼<span class="small">かが（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2290">鞠<span class="small">かが（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/23126">䪕<span class="small">かが（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12603">偻<span class="small">かが（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3130">僂<span class="small">かが（める）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4939">燿<span class="small">かがや（き）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/16049">烉<span class="small">かがや（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25361">晔<span class="small">かがや（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25638">焕<span class="small">かがや（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4913">焜<span class="small">かがや（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3923">暉<span class="small">かがや（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4915">煥<span class="small">かがや（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4917">煌<span class="small">かがや（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/20923">㿢<span class="small">かがや（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2243">赫<span class="small">かがや（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3929">曄<span class="small">かがや（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11728">曅<span class="small">かがや（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1050">輝<span class="small">かがや（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/15124">曗<span class="small">かがや（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="234">曜<span class="small">かがや（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4939">燿<span class="small">かがや（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2956">耀<span class="small">かがや（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/23112">䪄<span class="small">かがや（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4939">燿<span class="small">かがよ（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="286">係<span class="small">かかり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1347">掛<span class="small">かかり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4583">篝<span class="small">かがり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4904">炬<span class="small">かがりび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/14342">尞<span class="small">かがりび</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4933">燎<span class="small">かがりび</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1332">架<span class="small">か（かる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/19636">㤛<span class="small">か（かる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3557">恁<span class="small">か（かる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25281">挛<span class="small">か（かる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1347">掛<span class="small">か（かる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25249">悬<span class="small">か（かる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2469">斯<span class="small">か（かる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/15244">榢<span class="small">か（かる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/17028">縘<span class="small">か（かる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2354">繋<span class="small">か（かる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6455">繫<span class="small">か（かる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1678">懸<span class="small">か（かる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3744">攣<span class="small">か（かる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="286">係<span class="small">かか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11005">慿<span class="small">かか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3622">憑<span class="small">かか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5593">罹<span class="small">かか（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1302">離<span class="small">かか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4795">縢<span class="small">かが（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="839">干<span class="small">かか（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11302">抅<span class="small">かか（わる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1400">拘<span class="small">かか（わる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="286">係<span class="small">かか（わる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6444">涉<span class="small">かか（わる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1740">渉<span class="small">かか（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12331">偓<span class="small">かか（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/20358">㴇<span class="small">かか（わる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="463">関<span class="small">かか（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7876">闗<span class="small">かか（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5885">關<span class="small">かか（わる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">かき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1626">垣<span class="small">かき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1967">柿<span class="small">かき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3443">屏<span class="small">かき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11992">柹<span class="small">かき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/15162">枾<span class="small">かき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="247">院<span class="small">かき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3003">蛎<span class="small">かき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6488">屛<span class="small">かき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2779">堵<span class="small">かき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5716">硴<span class="small">かき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/14639">幈<span class="small">かき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25018">墙<span class="small">かき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6136">墻<span class="small">かき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4352">牆<span class="small">かき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9956">蠇<span class="small">かき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3002">蠣<span class="small">かき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3182">剳<span class="small">かぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2341">鈎<span class="small">かぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2340">鉤<span class="small">かぎ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1993">鍵<span class="small">かぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4715">鎰<span class="small">かぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4739">鑰<span class="small">かぎ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="738">状<span class="small">かきつけ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6449">狀<span class="small">かきつけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4882">牋<span class="small">かきつけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/15225">椾<span class="small">かきつけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3674">拌<span class="small">かきま（ぜる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2696">黛<span class="small">かきまゆ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6551">黱<span class="small">かきまゆ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2582">帖<span class="small">かきもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25944">笺<span class="small">かきもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8838">䇳<span class="small">かきもの</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2041">箋<span class="small">かきもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4883">牘<span class="small">かきもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3338">垠<span class="small">かぎり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/13716">垦<span class="small">かぎり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="691">限<span class="small">かぎ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10334">畺<span class="small">かぎ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10335">壃<span class="small">かぎ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10336">疅<span class="small">かぎ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5455">疆<span class="small">かぎ（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="091">画<span class="small">かぎ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="691">限<span class="small">かぎ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6261">畫<span class="small">かぎ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10300">畵<span class="small">かぎ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10334">畺<span class="small">かぎ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10335">壃<span class="small">かぎ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10336">疅<span class="small">かぎ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5455">疆<span class="small">かぎ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">かく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="462">各<span class="small">カク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="658">仮<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13231">吓<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25262">扩<span class="small">カク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="097">角<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18889">㕰<span class="small">カク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="091">画<span class="small">カク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="835">拡<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10117">玨<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12933">壳<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13061">佫<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25118">峃<span class="small">カク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="268">客<span class="small">カク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="834">革<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3558">恪<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3680">挌<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5105">狢<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5936">茖<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6056">咯<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10118">珏<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10643">砉<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11323">挄<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13302">咟<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13699">垎<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21075">䂜<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22951">䧄<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25512">泶<span class="small">カク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="663">格<span class="small">カク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1627">核<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3341">埆<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6036">鬲<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7973">隺<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8653">郝<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11065">㤩<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11334">捔<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11797">胳<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12932">㱿<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14944">捇<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19748">㦴<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19944">㪾<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21948">䓇<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25129">崅<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26382">获<span class="small">カク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1055">脚<span class="small">カク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1345">郭<span class="small">カク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1628">殻<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="2240">掴<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4118">桷<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4126">梏<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4659">硅<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5662">假<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5736">寉<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8042">覐<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8496">䡈<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10027">袼<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11364">掝<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12785">剨<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13374">唬<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14473">崞<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15073">斍<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16091">焃<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17731">谻<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18941">㖪<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21200">䅂<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22961">䧐<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24906">啯<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25057">婳<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25211">帼<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25248">悫<span class="small">カク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="461">覚<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3275">喀<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4131">椁<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4974">瓠<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6230">殼<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6261">畫<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9302">臵<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9814">蛒<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9980">衉<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10678">确<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10679">硞<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11066">愘<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11128">愅<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11397">揢<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12563">傕<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14785">徦<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15713">湱<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17160">腘<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17735">豞<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18962">㗆<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20193">㰲<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21649">䍊<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22573">䟩<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23857">搁<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23858">搅<span class="small">カク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1035">較<span class="small">カク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1344">隔<span class="small">カク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2238">塙<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5475">貉<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6814">䯨<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8065">觡<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8278">貈<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8334">赩<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9579">蒦<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10300">畵<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11064">愙<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11419">搉<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11814">腳<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13444">嗀<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13446">嗃<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13465">嗝<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13819">塥<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15226">楁<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15757">滆<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15759">滈<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16130">煂<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16855">窢<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17297">蒚<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19573">㣂<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20085">㮝<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20393">㴶<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21100">䂸<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21354">䇶<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21819">䐙<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21986">䓼<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22513">䞦<span class="small">カク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="833">閣<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="2237">劃<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="2239">廓<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="2243">赫<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3494">幗<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3600">愨<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4241">膈<span class="small">カク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6437">摑<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7514">聝<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7613">鉻<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10198">瑴<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11299">㨯<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11584">斠<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11815">踋<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12172">榷<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12173">槅<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12942">毃<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13497">嘓<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13842">墎<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14866">慖<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15793">漍<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15819">漷<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16177">熇<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16753">碦<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18875">㕡<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18985">㗥<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20522">㷤<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20555">㸕<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20664">㺉<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21832">䐨<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22278">䚂<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26547">蝈<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27167">㩁<span class="small">カク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="662">確<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="2242">撹<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4184">槨<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6287">膕<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9083">緙<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9756">虢<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9984">䘔<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10471">㿥<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10721">碻<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10988">慤<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11534">爴<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12812">劐<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13858">墧<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14208">嫿<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14750">彉<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15862">澅<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17625">觮<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18996">㗲<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19721">㦎<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19852">㩇<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21118">䃒<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21377">䈐<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22240">䙐<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22923">䦝<span class="small">カク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1036">獲<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4579">霍<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4825">骼<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9238">翮<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11198">㦜<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11504">擭<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13875">壆<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14570">嶨<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16926">篧<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17686">諽<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21033">䁨<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21845">䐸<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23223">䬉<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23920">嚄<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24035">濩<span class="small">カク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1629">嚇<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3354">壑<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3731">擱<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4362">馘<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7129">鵅<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7324">鞟<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8073">觳<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8181">謞<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8881">簂<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9905">蟈<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10434">癋<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12288">檴<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15883">澩<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16230">燢<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16234">燩<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17362">藃<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17741">豰<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20263">㲉<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22389">䛿<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23032">䨣<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23228">䬎<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27784">𠢹<span class="small">カク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1343">穫<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5928">擴<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7774">鎘<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8182">謋<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10754">礐<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10755">礉<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13572">嚛<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14374">屩<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14752">彍<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16247">爀<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16699">矆<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16771">礊<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20454">㶁<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21046">䁷<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23033">䨥<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27681">櫊<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4108">蠖<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5080">覈<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6629">䶅<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6749">騞<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6802">髂<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8016">霩<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9713">藿<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11516">攉<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14376">屫<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15942">瀖<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15949">瀥<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17059">罊<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17104">耯<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18268">韚<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18289">顜<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19098">㙾<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19738">㦦<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20456">㶅<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21447">䉟<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23102">䩹<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24004">櫎<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25225">彟<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25586">鞷<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5176">矍<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6043">覺<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7323">鞹<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9957">蠚<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11927">臛<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13591">嚿<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15127">曤<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17628">觷<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18396">髉<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20161">㰌<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22315">䚫<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23345">䮤<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24078">矌<span class="small">カク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2065">鶴<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5256">癨<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7186">鶮<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7836">鑊<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10488">皬<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10615">矐<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10767">礭<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18215">雤<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23110">䪂<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22819">䤕<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23589">䳽<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23707">䶜<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26341">鶴<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="2241">攪<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3745">攫<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11218">戄<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16472">玃<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22775">䣤<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23363">䮸<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3839">鷽<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7074">鱯<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8022">靃<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15335">欔<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6687">龣<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10619">䂄<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14759">彠<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16706">矡<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17730">讗<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9975">蠼<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6470">鸖<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17756">貜<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4745">钁<span class="small">カク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16947">籱<span class="small">カク</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="222">方<span class="small">かく</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="495">欠<span class="small">か（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2471">此<span class="small">か（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3665">抓<span class="small">か（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="091">画<span class="small">か（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4356">爬<span class="small">か（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5627">舁<span class="small">か（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="159">書<span class="small">か（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5845">缺<span class="small">か（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12835">缼<span class="small">か（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1248">描<span class="small">か（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2658">掻<span class="small">か（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2469">斯<span class="small">か（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6261">畫<span class="small">か（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6477">搔<span class="small">か（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10300">畵<span class="small">か（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5631">虧<span class="small">か（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3972">闕<span class="small">か（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1979">嗅<span class="small">か（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/18977">㗜<span class="small">か（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6651">齅<span class="small">か（ぐ）</span></a></li>
                         <li class="others_kanji onyomi"><a href="5709">斈<span class="small">ガク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="009">学<span class="small">ガク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1346">岳<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25118">峃<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3246">咢<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14423">峉<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12786">㓵<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13181">卾<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14065">娾<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14099">婩<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14952">捳<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21200">䅂<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24596">偔<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3586">愕<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5206">鄂<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5382">萼<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13794">堮<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14496">崿<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15679">湂<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18209">雃<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18949">㖸<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18954">㖾<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18957">㗁<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18964">㗉<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19391">㟧<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26913">㟯<span class="small">ガク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="098">楽<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8123">詻<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8599">遌<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11860">腭<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16738">硸<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19573">㣂<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20082">㮙<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21818">䐘<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21986">䓼<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18875">㕡<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20606">㹊<span class="small">ガク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5732">樂<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6301">蕚<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7383">頟<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11129">㦍<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16755">磀<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19422">㠋<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22770">䣞<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4980">諤<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5708">學<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8617">遻<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13545">噩<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13875">壆<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14570">嶨<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17610">覨<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23917">噱<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="2244">鍔<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3354">壑<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5710">嶽<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16230">燢<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16562">瓁<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20539">㷾<span class="small">ガク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="664">額<span class="small">ガク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1968">顎<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19735">㦡<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22859">䥃<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9715">蘁<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19098">㙾<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23102">䩹<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="2245">鰐<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3822">鶚<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15326">櫮<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17628">觷<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20164">㰒<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23345">䮤<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23490">䱮<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8170">讍<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3775">齶<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3839">鷽<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18150">鑩<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7205">鸑<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23206">䫷<span class="small">ガク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7080">鱷<span class="small">ガク</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="971">秘<span class="small">かく（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6010">祕<span class="small">かく（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25937">窝<span class="small">かく（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6328">賍<span class="small">かく（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1014">隠<span class="small">かく（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5619">窩<span class="small">かく（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/26816">賘<span class="small">かく（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5645">臧<span class="small">かく（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6343">隱<span class="small">かく（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/18261">鞰<span class="small">かく（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7355">鞱<span class="small">かく（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4355">韜<span class="small">かく（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7354">韞<span class="small">かく（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5497">贓<span class="small">かく（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/24143">贜<span class="small">かく（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1521">匿<span class="small">かくま（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25937">窝<span class="small">かくま（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5619">窩<span class="small">かくま（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1753">礁<span class="small">かくれいわ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1545">伏<span class="small">かく（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1521">匿<span class="small">かく（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25936">窜<span class="small">かく（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/26540">蛰<span class="small">かく（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1014">隠<span class="small">かく（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="934">蔵<span class="small">かく（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5527">遯<span class="small">かく（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/22532">䞼<span class="small">かく（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4099">蟄<span class="small">かく（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6343">隱<span class="small">かく（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5623">竄<span class="small">かく（れる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5984">藏<span class="small">かく（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1554">芳<span class="small">かぐわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/20920">㿝<span class="small">かぐわ（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1099">香<span class="small">かぐわ（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2158">郁<span class="small">かぐわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4138">椒<span class="small">かぐわ（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2325">馨<span class="small">かぐわ（しい）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">かけ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="2070">賭<span class="small">かけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7938">阴<span class="small">かげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7939">阥<span class="small">かげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7937">侌<span class="small">かげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/26369">荫<span class="small">かげ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1015">陰<span class="small">かげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7940">隂<span class="small">かげ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2164">蔭<span class="small">かげ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1017">影<span class="small">かげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9604">䕃<span class="small">かげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5611">翳<span class="small">かげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5969">垳<span class="small">がけ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1964">崖<span class="small">がけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3029">崕<span class="small">がけ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1263">壁<span class="small">がけ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2266">巌<span class="small">がけ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5711">巖<span class="small">がけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/14596">巗<span class="small">がけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4533">筧<span class="small">かけい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7132">鵥<span class="small">かけす</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25377">栈<span class="small">かけはし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1706">桟<span class="small">かけはし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6122">棧<span class="small">かけはし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4533">筧<span class="small">かけひ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5611">翳<span class="small">かげ（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="495">欠<span class="small">か（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/18682">㐸<span class="small">か（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1332">架<span class="small">か（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3683">挂<span class="small">か（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5845">缺<span class="small">か（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12835">缼<span class="small">か（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1347">掛<span class="small">か（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25249">悬<span class="small">か（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2341">鈎<span class="small">か（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/27807">𡙇<span class="small">か（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2340">鉤<span class="small">か（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1073">駆<span class="small">か（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/15244">榢<span class="small">か（ける）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2342">駈<span class="small">か（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2070">賭<span class="small">か（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5631">虧<span class="small">か（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3972">闕<span class="small">か（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1678">懸<span class="small">か（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4504">騫<span class="small">か（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3769">齧<span class="small">か（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6351">驅<span class="small">か（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3770">囓<span class="small">か（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/23369">䮿<span class="small">か（ける）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5606">翔<span class="small">かけ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7938">阴<span class="small">かげ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7939">阥<span class="small">かげ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7937">侌<span class="small">かげ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1015">陰<span class="small">かげ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7940">隂<span class="small">かげ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25363">暧<span class="small">かげ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1939">曖<span class="small">かげ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5611">翳<span class="small">かげ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">かこ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4529">筐<span class="small">かご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4530">筺<span class="small">かご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5592">罩<span class="small">かご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8821">筲<span class="small">かご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4175">樊<span class="small">かご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3032">篭<span class="small">かご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4583">篝<span class="small">かご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4482">轎<span class="small">かご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4602">籃<span class="small">かご</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2131">籠<span class="small">かご</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="247">院<span class="small">かこい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3342">埒<span class="small">かこ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5972">埓<span class="small">かこ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5798">圈<span class="small">かこ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1086">圏<span class="small">かこ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="445">囲<span class="small">かこ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5800">圍<span class="small">かこ（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1492">託<span class="small">かこ（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/13370">唧<span class="small">かこ（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3281">喞<span class="small">かこ（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1492">託<span class="small">かこつ（ける）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2343">寓<span class="small">かこつ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/14694">庽<span class="small">かこつ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5432">藉<span class="small">かこつ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="445">囲<span class="small">かこ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5800">圍<span class="small">かこ（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">かさ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="kanjiy/12364">仐<span class="small">かさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/24563">伞<span class="small">かさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5210">疔<span class="small">かさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25811">疮<span class="small">かさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5219">疽<span class="small">かさ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2978">笠<span class="small">かさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5225">痒<span class="small">かさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6263">盖<span class="small">かさ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="626">量<span class="small">かさ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1707">傘<span class="small">かさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3033">葢<span class="small">かさ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1965">蓋<span class="small">かさ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2508">嵩<span class="small">かさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3922">暈<span class="small">かさ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2118">瘍<span class="small">かさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5243">瘡<span class="small">かさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/24712">凨<span class="small">かざ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7426">凬<span class="small">かざ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7427">凮<span class="small">かざ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="217">風<span class="small">かざ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7428">飌<span class="small">かざ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7165">䧿<span class="small">かささぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3816">鵲<span class="small">かささぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5611">翳<span class="small">かざ（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5611">翳<span class="small">かざ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25962">簮<span class="small">かざ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4598">簪<span class="small">かざ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3065">仍<span class="small">かさ（なる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25099">层<span class="small">かさ（なる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2787">沓<span class="small">かさ（なる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="325">重<span class="small">かさ（なる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3366">奕<span class="small">かさ（なる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1932">累<span class="small">かさ（なる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2045">曽<span class="small">かさ（なる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1143">畳<span class="small">かさ（なる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4251">曾<span class="small">かさ（なる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10324">叠<span class="small">かさ（なる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="928">層<span class="small">かさ（なる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6381">層<span class="small">かさ（なる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5862">疂<span class="small">かさ（なる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10325">曡<span class="small">かさ（なる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5863">疉<span class="small">かさ（なる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5864">疊<span class="small">かさ（なる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/19753">㦻<span class="small">かさね</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1130">襲<span class="small">かさね</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="340">申<span class="small">かさ（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/19109">㚐<span class="small">かさ（ねる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="325">重<span class="small">かさ（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5347">荐<span class="small">かさ（ねる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2784">套<span class="small">かさ（ねる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1932">累<span class="small">かさ（ねる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1143">畳<span class="small">かさ（ねる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1933">塁<span class="small">かさ（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10324">叠<span class="small">かさ（ねる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="802">複<span class="small">かさ（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/19753">㦻<span class="small">かさ（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5061">褶<span class="small">かさ（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5862">疂<span class="small">かさ（ねる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6155">壘<span class="small">かさ（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/19097">㙼<span class="small">かさ（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10325">曡<span class="small">かさ（ねる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1130">襲<span class="small">かさ（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5863">疉<span class="small">かさ（ねる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5864">疊<span class="small">かさ（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5217">痂<span class="small">かさぶた</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2508">嵩<span class="small">かさ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4711">錺<span class="small">かざり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4751">紕<span class="small">かざ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5484">賁<span class="small">かざ（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1145">飾<span class="small">かざ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4791">縟<span class="small">かざ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5820">餝<span class="small">かざ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25645">餙<span class="small">かざ（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="075">文<span class="small">かざ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2842">扮<span class="small">かざ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12508">俢<span class="small">かざ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="729">修<span class="small">かざ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4751">紕<span class="small">かざ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5484">賁<span class="small">かざ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1145">飾<span class="small">かざ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5820">餝<span class="small">かざ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25645">餙<span class="small">かざ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4721">鏤<span class="small">かざ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">かし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5867">槝<span class="small">かし</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2246">樫<span class="small">かし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2322">橿<span class="small">かし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12307">櫧<span class="small">かし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1416">債<span class="small">か（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2679">柁<span class="small">かじ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2562">梢<span class="small">かじ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2680">舵<span class="small">かじ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2856">梶<span class="small">かじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4886">舳<span class="small">かじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9329">䑨<span class="small">かじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/20069">㮄<span class="small">かじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/27861">𣓤<span class="small">かじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4146">楫<span class="small">かじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4166">榜<span class="small">かじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4189">橈<span class="small">かじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12143">檝<span class="small">かじ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4198">櫂<span class="small">かじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12144">艥<span class="small">かじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3857">鮖<span class="small">かじか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2522">鰍<span class="small">かじか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3581">忰<span class="small">かじか（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3580">悴<span class="small">かじか（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1456">炊<span class="small">かし（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1077">傾<span class="small">かし（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4945">爨<span class="small">かし（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1942">畏<span class="small">かしこ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3098">俐<span class="small">かしこ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3920">晢<span class="small">かしこ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6537">晣<span class="small">かしこ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6264">睿<span class="small">かしこ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2173">慧<span class="small">かしこ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1388">賢<span class="small">かしこ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2174">叡<span class="small">かしこ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/23938">壡<span class="small">かしこ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8317">贒<span class="small">かしこ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1942">畏<span class="small">かしこ（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3126">傅<span class="small">かしず（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2252">姦<span class="small">かしま（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/14010">姧<span class="small">かしま（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4382">淅<span class="small">かしよね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3072">仟<span class="small">かしら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25026">头<span class="small">かしら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1859">伯<span class="small">かしら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="155">首<span class="small">かしら</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2362">頁<span class="small">かしら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2520">酋<span class="small">かしら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="820">率<span class="small">かしら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1841">棟<span class="small">かしら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2308">渠<span class="small">かしら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1845">督<span class="small">かしら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="823">領<span class="small">かしら</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2232">魁<span class="small">かしら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="167">頭<span class="small">かしら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/13003">卛<span class="small">かしら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5144">顱<span class="small">かしら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7425">髗<span class="small">かしら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3249">咬<span class="small">かじ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2420">噛<span class="small">かじ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6476">嚙<span class="small">かじ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3769">齧<span class="small">かじ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3770">囓<span class="small">かじ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2825">柏<span class="small">かしわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6066">栢<span class="small">かしわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4172">槲<span class="small">かしわ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2042">膳<span class="small">かしわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12265">檞<span class="small">かしわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11906">饍<span class="small">かしわ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">かす</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="2828">粕<span class="small">かす</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4389">渣<span class="small">かす</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5658">滓<span class="small">かす</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2665">糟<span class="small">かす</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="658">仮<span class="small">か（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5662">假<span class="small">か（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="767">貸<span class="small">か（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5432">藉<span class="small">か（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/17757">貟<span class="small">かず</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="248">員<span class="small">かず</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="168">数<span class="small">かず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8835">筭<span class="small">かず</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="142">算<span class="small">かず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6202">數<span class="small">かず</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1577">幽<span class="small">かす（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5148">眇<span class="small">かす（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5615">窈<span class="small">かす（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4396">渺<span class="small">かす（か）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1246">微<span class="small">かす（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3933">暝<span class="small">かす（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4642">髣<span class="small">かす（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/19610">㣲<span class="small">かす（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4786">緲<span class="small">かす（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7614">銯<span class="small">かすがい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5948">鍄<span class="small">かすがい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4716">鎹<span class="small">かすがい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1241">被<span class="small">かず（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8924">筹<span class="small">かずとり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4603">籌<span class="small">かずとり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3865">鯑<span class="small">かずのこ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2215">霞<span class="small">かすみ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2215">霞<span class="small">かす（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5611">翳<span class="small">かす（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3183">剿<span class="small">かすめと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3193">勦<span class="small">かすめと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12799">劋<span class="small">かすめと（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2315">劫<span class="small">かす（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6060">刧<span class="small">かす（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12824">刦<span class="small">かす（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12825">刼<span class="small">かす（める）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2974">掠<span class="small">かす（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4687">鈔<span class="small">かす（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1747">抄<span class="small">かすめ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1969">葛<span class="small">かずら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/23429">䰋<span class="small">かずら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4650">鬘<span class="small">かずら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4762">絣<span class="small">かすり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4770">綛<span class="small">かすり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6096">緕<span class="small">かすり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4814">纃<span class="small">かすり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2974">掠<span class="small">かす（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2974">掠<span class="small">かす（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1421">擦<span class="small">かす（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">かせ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4018">枷<span class="small">かせ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="021">校<span class="small">かせ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1991">桁<span class="small">かせ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8999">䋆<span class="small">かせ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12021">桛<span class="small">かせ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="457">械<span class="small">かせ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9020">絈<span class="small">かせ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4770">綛<span class="small">かせ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/24712">凨<span class="small">かぜ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7426">凬<span class="small">かぜ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7427">凮<span class="small">かぜ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="217">風<span class="small">かぜ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4365">飆<span class="small">かぜ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7446">飇<span class="small">かぜ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7447">飈<span class="small">かぜ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25629">飊<span class="small">かぜ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7428">飌<span class="small">かぜ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1616">稼<span class="small">かせ（ぐ）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">かそ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="117">計<span class="small">かぞ（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="168">数<span class="small">かぞ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8835">筭<span class="small">かぞ（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="142">算<span class="small">かぞ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6202">數<span class="small">かぞ（える）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">かた</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="222">方<span class="small">かた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2136">片<span class="small">かた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="115">形<span class="small">かた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/13662">坓<span class="small">かた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1081">肩<span class="small">かた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5330">范<span class="small">かた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="490">型<span class="small">かた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="989">模<span class="small">かた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1630">潟<span class="small">かた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25596">澙<span class="small">かた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5847">糢<span class="small">かた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2004">頃<span class="small">かたあし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12773">刚<span class="small">かた（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3015">牢<span class="small">かた（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="499">固<span class="small">かた（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4655">矼<span class="small">かた（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/26335">艰<span class="small">かた（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10906">窂<span class="small">かた（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1691">剛<span class="small">かた（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25547">难<span class="small">かた（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1999">梗<span class="small">かた（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1082">堅<span class="small">かた（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1402">硬<span class="small">かた（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2444">犀<span class="small">かた（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12772">㓻<span class="small">かた（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2238">塙<span class="small">かた（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="662">確<span class="small">かた（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1375">緊<span class="small">かた（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4247">膠<span class="small">かた（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5090">鞏<span class="small">かた（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/13858">墧<span class="small">かた（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1997">錮<span class="small">かた（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5576">艱<span class="small">かた（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="958">難<span class="small">かた（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6417">難<span class="small">かた（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9354">囏<span class="small">かた（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5108">狷<span class="small">かたいじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/19268">㝑<span class="small">かたがた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11603">㫄<span class="small">かたがた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3780">旁<span class="small">かたがた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2296">仇<span class="small">かたき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/18763">㓂<span class="small">かたき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5771">冦<span class="small">かたき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/14306">宼<span class="small">かたき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3430">寇<span class="small">かたき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="776">敵<span class="small">かたき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1648">頑<span class="small">かたくな</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1077">傾<span class="small">かた（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3543">忝<span class="small">かたじけな（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10956">㤁<span class="small">かたじけな（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1451">辱<span class="small">かたじけな（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3439">尸<span class="small">かたしろ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2760">祢<span class="small">かたしろ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2759">禰<span class="small">かたしろ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="115">形<span class="small">かたち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="738">状<span class="small">かたち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5860">皃<span class="small">かたち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8283">㒵<span class="small">かたち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/19267">㝐<span class="small">かたち</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6449">狀<span class="small">かたち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="819">容<span class="small">かたち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="539">象<span class="small">かたち</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5135">頌<span class="small">かたち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="761">像<span class="small">かたち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2103">貌<span class="small">かたち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7397">䫉<span class="small">かたち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/26546">蜗<span class="small">かたつむり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4087">蝸<span class="small">かたつむり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1745">肖<span class="small">かたど（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="539">象<span class="small">かたど（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="761">像<span class="small">かたど（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="199">刀<span class="small">かたな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5901">釖<span class="small">かたな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5032">袒<span class="small">かたぬ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5046">裼<span class="small">かたぬ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9720">薲<span class="small">かたばみも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5443">蘋<span class="small">かたばみも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3489">帷<span class="small">かたびら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1969">葛<span class="small">かたびら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="770">団<span class="small">かたまり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/13666">块<span class="small">かたまり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/19066">㙕<span class="small">かたまり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1339">塊<span class="small">かたまり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6148">團<span class="small">かたまり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="499">固<span class="small">かた（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4529">筐<span class="small">かたみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4530">筺<span class="small">かたみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1093">互<span class="small">かたみ（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3066">仄<span class="small">かたむ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3906">昃<span class="small">かたむ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5182">陂<span class="small">かたむ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/15092">昗<span class="small">かたむ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1077">傾<span class="small">かたむ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5159">睨<span class="small">かたむ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4564">欹<span class="small">かたむ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1077">傾<span class="small">かたむ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="499">固<span class="small">かた（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5090">鞏<span class="small">かた（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1887">偏<span class="small">かたよ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4260">跛<span class="small">かたよ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5318">辟<span class="small">かたよ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2817">頗<span class="small">かたよ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2891">僻<span class="small">かたよ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="123">語<span class="small">かた（らう）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="805">弁<span class="small">かた（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1622">拐<span class="small">かた（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/22349">䛒<span class="small">かた（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="123">語<span class="small">かた（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="362">談<span class="small">かた（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4503">騙<span class="small">かた（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6331">辯<span class="small">かた（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3066">仄<span class="small">かたわ（ら）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/19268">㝑<span class="small">かたわ（ら）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11603">㫄<span class="small">かたわ（ら）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2133">脇<span class="small">かたわ（ら）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3780">旁<span class="small">かたわ（ら）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11800">䏮<span class="small">かたわ（ら）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="559">側<span class="small">かたわ（ら）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1273">傍<span class="small">かたわ（ら）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">かち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="kanjiy/14006">姡<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15341">欪<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16649">眓<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21781">䏦<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15360">殌<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20979">䀨<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21067">䂒<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21695">䎀<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12564">傄<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22346">䛎<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22567">䟠<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23372">䯇<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22578">䟯<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19920">㪡<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20924">㿣<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21684">䍳<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22921">䦚<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23217">䬂<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24276">䅥<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14565">嶡<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14577">嶱<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18279">頢<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21380">䈓<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23375">䯋<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23918">噶<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24247">㵧<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13934">奯<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17480">螖<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19720">㦌<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16773">礍<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17368">藒<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22253">䙠<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14889">懖<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17508">蟨<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17509">蟩<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23179">䫘<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23561">䳚<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22695">䡷<span class="small">カチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18599">齂<span class="small">カチ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="578">徒<span class="small">かち</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13038">仴<span class="small">ガチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14388">岄<span class="small">ガチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15153">枂<span class="small">ガチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18767">㓉<span class="small">ガチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20222">㱚<span class="small">ガチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21738">䎳<span class="small">ガチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17109">聉<span class="small">ガチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21155">䄆<span class="small">ガチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22321">䚴<span class="small">ガチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17111">聐<span class="small">ガチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17791">趉<span class="small">ガチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17795">趏<span class="small">ガチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20604">㹇<span class="small">ガチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21162">䄑<span class="small">ガチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22791">䣶<span class="small">ガチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20093">㮫<span class="small">ガチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22528">䞷<span class="small">ガチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23411">䯵<span class="small">ガチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14574">嶭<span class="small">ガチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17482">螛<span class="small">ガチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25344">擜<span class="small">ガチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22063">䕣<span class="small">ガチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23179">䫘<span class="small">ガチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13598">囐<span class="small">ガチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19884">㩵<span class="small">ガチ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/24715">凯<span class="small">かちどき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2221">凱<span class="small">かちどき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3812">鵝<span class="small">がちょう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3813">鵞<span class="small">がちょう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7131">䳘<span class="small">がちょう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4487">馮<span class="small">かちわた（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">かつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="kanjiy/12921">匃<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12922">匄<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24189">㓞<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11281">扴<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13265">呚<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13651">圿<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14803">忦<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21924">䒠<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3172">刮<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3188">劼<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12437">佸<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12754">㓤<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18767">㓉<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18784">㓣<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19936">㪴<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24013">泧<span class="small">カツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="099">活<span class="small">カツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1635">括<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3681">拮<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4250">曷<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9428">䒷<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13310">咭<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13316">咶<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14006">姡<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15341">欪<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20971">䀛<span class="small">カツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="459">害<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8580">适<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10967">恝<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12022">栝<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14946">捖<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15058">敌<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16649">眓<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21781">䏦<span class="small">カツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1631">喝<span class="small">カツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1632">渇<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3647">戛<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10028">袺<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10665">硈<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10845">秸<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12023">桰<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14954">捾<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16818">秳<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18828">㔠<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20979">䀨<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21067">䂒<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21155">䄆<span class="small">カツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="836">割<span class="small">カツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1969">葛<span class="small">カツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2247">筈<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3648">戞<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4049">蛞<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4858">聒<span class="small">カツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6446">渴<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9532">葜<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9533">萿<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9534">葀<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11130">愒<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11405">揳<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12564">傄<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14509">嵑<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16419">猲<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18797">㓹<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23372">䯇<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24069">猰<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24086">祴<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26346">喝<span class="small">カツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1348">滑<span class="small">カツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1633">褐<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4565">歇<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5120">猾<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11704">暍<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12131">楬<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12977">毼<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13456">嗐<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14355">尳<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14992">搳<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17795">趏<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20079">㮖<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20604">㹇<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21162">䄑<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22578">䟯<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22791">䣶<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6786">骱<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9323">舝<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10042">褐<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12803">劀<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13492">嘎<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18253">鞂<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19920">㪡<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20093">㮫<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20924">㿣<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22917">䦖<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22921">䦚<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24276">䅥<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4085">蝎<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5129">羯<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5136">頡<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5165">瞎<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5855">磆<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7434">颳<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14577">嶱<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15035">擖<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16759">磍<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18279">頢<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21380">䈓<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23375">䯋<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23918">噶<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24072">獦<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24247">㵧<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6794">䯏<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6826">髺<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8518">輵<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13934">奯<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15903">濊<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17027">縖<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17480">螖<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17482">螛<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19720">㦌<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20005">㬞<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20427">㵣<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21291">䆯<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23623">䴳<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27453">䦢<span class="small">カツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1634">轄<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3963">闊<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3964">濶<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5651">豁<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7109">鴰<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16773">礍<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17368">藒<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18490">鴶<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22063">䕣<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23415">䯺<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3754">黠<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5094">鞨<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7485">餲<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7749">鎋<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14889">懖<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23179">䫘<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23561">䳚<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4104">蠍<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8537">轕<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18362">騔<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7176">鶡<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22695">䡷<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27891">𤄃<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7017">䱻<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7187">鶷<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22080">䕸<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18599">齂<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6852">鬠<span class="small">カツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23715">䶤<span class="small">カツ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1636">且<span class="small">か（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1409">克<span class="small">か（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3176">剋<span class="small">か（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6163">尅<span class="small">か（つ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2559">捷<span class="small">か（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25323">掶<span class="small">か（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="335">勝<span class="small">か（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/24220">㨗<span class="small">か（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3649">戡<span class="small">か（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3714">搗<span class="small">か（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5494">贏<span class="small">か（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3748">龕<span class="small">か（つ）</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="135">合<span class="small">カッ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2248">恰<span class="small">カッ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="016">月<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5905">歹<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12891">歺<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14380">屵<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13038">仴<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13603">囝<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14803">忦<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27720">𠥱<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15153">枂<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20222">㱚<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11986">枿<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18921">㖕<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18922">㖖<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21738">䎳<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17109">聉<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22321">䚴<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17111">聐<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14992">搳<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17795">趏<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15035">擖<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21380">䈓<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22035">䔾<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23411">䯵<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14574">嶭<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25344">擜<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13598">囐<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19884">㩵<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22698">䡾<span class="small">ガツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6520">齾<span class="small">ガツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="135">合<span class="small">ガッ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2369">鰹<span class="small">かつお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3657">扛<span class="small">かつ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="940">担<span class="small">かつ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5627">舁<span class="small">かつ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11273">摃<span class="small">かつ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5927">擔<span class="small">かつ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25095">尝<span class="small">かつ（て）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2045">曽<span class="small">かつ（て）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4251">曾<span class="small">かつ（て）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6258">甞<span class="small">かつ（て）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2553">嘗<span class="small">かつ（て）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2351">桂<span class="small">かつら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12129">楿<span class="small">かつら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5982">蘰<span class="small">かつら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/23429">䰋<span class="small">かつら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4650">鬘<span class="small">かつら</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">かて</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="6275">粮<span class="small">かて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/21493">䊑<span class="small">かて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5280">餉<span class="small">かて</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1591">糧<span class="small">かて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3714">搗<span class="small">か（てて）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5270">糅<span class="small">か（てる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">かと</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="140">才<span class="small">かど</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="097">角<span class="small">かど</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="230">門<span class="small">かど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/18165">閅<span class="small">かど</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1598">廉<span class="small">かど</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2984">稜<span class="small">かど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4155">楞<span class="small">かど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5578">觚<span class="small">かど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/23890">亷<span class="small">かど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/27692">廉<span class="small">かど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/26943">㢘<span class="small">かど</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="265">岸<span class="small">かどだ（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/19361">㟁<span class="small">かどだ（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1964">崖<span class="small">かどだ（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3029">崕<span class="small">かどだ（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4155">楞<span class="small">かどば（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9102">縑<span class="small">かとり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1622">拐<span class="small">かどわか（す）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts21">
                    <h3 class="ttl_while">かな</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2374">乎<span class="small">かな</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="022">金<span class="small">かな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/19747">㦲<span class="small">かな</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2440">哉<span class="small">かな</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2318">叶<span class="small">かな（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="482">協<span class="small">かな（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3560">恊<span class="small">かな（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1142">称<span class="small">かな（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="777">適<span class="small">かな（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6127">稱<span class="small">かな（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="776">敵<span class="small">かな（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1963">諧<span class="small">かな（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10892">穪<span class="small">かな（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6036">鬲<span class="small">かなえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/19945">㫀<span class="small">かなえ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2758">鼎<span class="small">かなえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6574">鼑<span class="small">かなえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10982">㤅<span class="small">かな（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1320">哀<span class="small">かな（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10983">爱<span class="small">かな（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="395">悲<span class="small">かな（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="440">愛<span class="small">かな（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25237">怆<span class="small">かな（しむ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1320">哀<span class="small">かな（しむ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11107">恓<span class="small">かな（しむ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3582">悽<span class="small">かな（しむ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="395">悲<span class="small">かな（しむ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3605">愴<span class="small">かな（しむ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/16434">獊<span class="small">かな（しむ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2695">鎚<span class="small">かなづち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="930">奏<span class="small">かな（でる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="098">楽<span class="small">かな（でる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5732">樂<span class="small">かな（でる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/19735">㦡<span class="small">かな（でる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4688">鉗<span class="small">かなばさみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/21395">䈤<span class="small">かなばさみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4708">鋺<span class="small">かなまり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="074">目<span class="small">かなめ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1771">枢<span class="small">かなめ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="621">要<span class="small">かなめ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="823">領<span class="small">かなめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6006">樞<span class="small">かなめ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="595">必<span class="small">かなら（ず）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4733">鐶<span class="small">かなわ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts22">
                    <h3 class="ttl_while">かに</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2230">蟹<span class="small">かに</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5657">蠏<span class="small">かに</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts23">
                    <h3 class="ttl_while">かね</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="276">曲<span class="small">かね</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="022">金<span class="small">かね</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="373">鉄<span class="small">かね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2576">鉦<span class="small">かね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4697">銕<span class="small">かね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4709">錚<span class="small">かね</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1441">鐘<span class="small">かね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5679">鐡<span class="small">かね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5678">鐵<span class="small">かね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/22892">䥫<span class="small">かね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/13048">伖<span class="small">かねぐら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3487">帑<span class="small">かねぐら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="424">予<span class="small">かね（て）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5755">豫<span class="small">かね（て）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1084">兼<span class="small">か（ねる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1342">該<span class="small">か（ねる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1471">摂<span class="small">か（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25336">摄<span class="small">か（ねる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6191">攝<span class="small">か（ねる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts24">
                    <h3 class="ttl_while">かの</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1243">彼<span class="small">かの</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2398">庚<span class="small">かのえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4560">麑<span class="small">かのこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1454">辛<span class="small">かのと</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts25">
                    <h3 class="ttl_while">かは</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="kanjiy/25390">桦<span class="small">かば</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2937">椛<span class="small">かば</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2208">樺<span class="small">かば</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2849">庇<span class="small">かば（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2185">掩<span class="small">かば（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3439">尸<span class="small">かばね</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1161">姓<span class="small">かばね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2465">屍<span class="small">かばね</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2916">鞄<span class="small">かばん</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/23079">䩝<span class="small">かばん</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts26">
                    <h3 class="ttl_while">かひ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3757">黴<span class="small">かび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3757">黴<span class="small">か（びる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts27">
                    <h3 class="ttl_while">かふ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="kanjiy/17202">芜<span class="small">かぶ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="837">株<span class="small">かぶ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5379">菁<span class="small">かぶ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2882">蕪<span class="small">かぶ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1241">被<span class="small">かぶ（せる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1397">甲<span class="small">かぶと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3154">冑<span class="small">かぶと</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2778">兜<span class="small">かぶと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/20922">㿡<span class="small">かぶと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12686">兠<span class="small">かぶと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7066">鱟<span class="small">かぶとがに</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/17202">芜<span class="small">かぶら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5379">菁<span class="small">かぶら</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2882">蕪<span class="small">かぶら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2762">鏑<span class="small">かぶら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5379">菁<span class="small">かぶらな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2762">鏑<span class="small">かぶらや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25026">头<span class="small">かぶり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="167">頭<span class="small">かぶり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1241">被<span class="small">かぶ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25815">痨<span class="small">かぶ（れ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5249">癆<span class="small">かぶ（れ）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts28">
                    <h3 class="ttl_while">かへ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1263">壁<span class="small">かべ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts29">
                    <h3 class="ttl_while">かま</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1638">缶<span class="small">かま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1970">釜<span class="small">かま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5903">釡<span class="small">かま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3182">剳<span class="small">かま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10928">窑<span class="small">かま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1918">窯<span class="small">かま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6272">窰<span class="small">かま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1971">鎌<span class="small">かま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7775">鐮<span class="small">かま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/27472">䥥<span class="small">かま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5846">罐<span class="small">かま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3047">鑵<span class="small">かま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/26530">虾<span class="small">がま</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2877">蒲<span class="small">がま</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2213">蝦<span class="small">がま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4088">蟇<span class="small">がま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4089">蟆<span class="small">がま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/22166">䗫<span class="small">がま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="698">構<span class="small">かま（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3655">扎<span class="small">かま（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3155">冓<span class="small">かま（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3710">搆<span class="small">かま（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="698">構<span class="small">かま（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3221">叺<span class="small">かます</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6896">魣<span class="small">かます</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6897">魳<span class="small">かます</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4036">框<span class="small">かまち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6110">档<span class="small">かまち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12281">檔<span class="small">かまち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10936">灶<span class="small">かまど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/27715">𥧄<span class="small">かまど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10937">䆴<span class="small">かまど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2664">竃<span class="small">かまど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2663">竈<span class="small">かまど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4945">爨<span class="small">かまど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5400">蒻<span class="small">がまのめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3241">呶<span class="small">かまびす（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/24801">哗<span class="small">かまびす（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3269">啅<span class="small">かまびす（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3786">敖<span class="small">かまびす（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2364">喧<span class="small">かまびす（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4858">聒<span class="small">かまびす（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2206">嘩<span class="small">かまびす（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3294">嗷<span class="small">かまびす（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3295">嘖<span class="small">かまびす（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/13476">嗸<span class="small">かまびす（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2651">噌<span class="small">かまびす（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4981">諠<span class="small">かまびす（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5001">譁<span class="small">かまびす（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3317">囂<span class="small">かまびす（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/13588">嚻<span class="small">かまびす（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5015">讙<span class="small">かまびす（しい）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts30">
                    <h3 class="ttl_while">かみ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="6589">丄<span class="small">かみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="039">上<span class="small">かみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/19261">㝊<span class="small">かみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/24773">发<span class="small">かみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25026">头<span class="small">かみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="316">守<span class="small">かみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6172">帋<span class="small">かみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="343">神<span class="small">かみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12155">柠<span class="small">かみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/13718">垨<span class="small">かみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="143">紙<span class="small">かみ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6368">神<span class="small">かみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="425">葉<span class="small">かみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/26880">㛲<span class="small">かみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4147">楮<span class="small">かみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1232">髪<span class="small">かみ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6356">髮<span class="small">かみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="167">頭<span class="small">かみ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4612">珈<span class="small">かみかざ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25211">帼<span class="small">かみかざ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3494">幗<span class="small">かみかざ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5037">裃<span class="small">かみしも</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1298">雷<span class="small">かみなり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/23018">䨓<span class="small">かみなり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3995">霹<span class="small">かみなり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7998">靁<span class="small">かみなり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/13888">壨<span class="small">かみなり</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts31">
                    <h3 class="ttl_while">かむ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="6662">齕<span class="small">かむ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3240">咀<span class="small">か（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3248">咥<span class="small">か（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3249">咬<span class="small">か（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5107">狠<span class="small">か（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/27161">㨘<span class="small">か（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2420">噛<span class="small">か（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3306">噬<span class="small">か（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6360">擤<span class="small">か（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6476">嚙<span class="small">か（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3766">齟<span class="small">か（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3318">嚼<span class="small">か（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3768">齦<span class="small">か（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3769">齧<span class="small">か（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3770">囓<span class="small">か（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1354">冠<span class="small">かむ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2804">禿<span class="small">かむろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25926">秃<span class="small">かむろ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts32">
                    <h3 class="ttl_while">かめ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="kanjiy/23728">龟<span class="small">かめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3975">缸<span class="small">かめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4868">瓮<span class="small">かめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10282">瓯<span class="small">かめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/16489">珁<span class="small">かめ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1874">瓶<span class="small">かめ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1975">亀<span class="small">かめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4870">瓷<span class="small">かめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10274">甁<span class="small">かめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10273">甆<span class="small">かめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9166">甇<span class="small">かめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4875">甌<span class="small">かめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5670">龜<span class="small">かめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4877">甕<span class="small">かめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9165">甖<span class="small">かめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3977">罌<span class="small">かめ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts33">
                    <h3 class="ttl_while">かも</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3798">鳬<span class="small">かも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3797">鳧<span class="small">かも</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2197">鴨<span class="small">かも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4640">髢<span class="small">かもじ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5128">羚<span class="small">かもしか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6334">酘<span class="small">かも（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/27094">酦<span class="small">かも（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/27103">酿<span class="small">かも（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2838">醗<span class="small">かも（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6482">醱<span class="small">かも（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1759">醸<span class="small">かも（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5727">釀<span class="small">かも（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2201">鴎<span class="small">かもめ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6465">鷗<span class="small">かもめ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts34">
                    <h3 class="ttl_while">かや</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2922">茅<span class="small">かや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5335">茆<span class="small">かや</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2263">萱<span class="small">かや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9538">萲<span class="small">かや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4162">榧<span class="small">かや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9539">蕿<span class="small">かや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9540">藼<span class="small">かや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9541">蘐<span class="small">かや</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts35">
                    <h3 class="ttl_while">かゆ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="6635">俼<span class="small">かゆ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2157">粥<span class="small">かゆ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/19574">㣃<span class="small">かゆ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5273">糜<span class="small">かゆ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5288">餬<span class="small">かゆ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5465">鬻<span class="small">かゆ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7505">饘<span class="small">かゆ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5225">痒<span class="small">かゆ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5253">癢<span class="small">かゆ（い）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts36">
                    <h3 class="ttl_while">かよ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="194">通<span class="small">かよ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3416">孅<span class="small">かよわ（い）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts37">
                    <h3 class="ttl_while">から</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="kanjiy/25500">汉<span class="small">から</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="013">空<span class="small">から</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12933">壳<span class="small">から</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1207">唐<span class="small">から</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12932">㱿<span class="small">から</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1628">殻<span class="small">から</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2345">腔<span class="small">から</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6230">殼<span class="small">から</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="264">漢<span class="small">から</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="666">幹<span class="small">から</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6390">漢<span class="small">から</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/20404">㵄<span class="small">から</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1972">韓<span class="small">から</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1262">柄<span class="small">がら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12008">棅<span class="small">がら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1454">辛<span class="small">から（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1958">苛<span class="small">から（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2121">辣<span class="small">から（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8548">辢<span class="small">から（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7240">醎<span class="small">から（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4305">鹹<span class="small">から（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3781">旄<span class="small">からうし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6539">捓<span class="small">からか（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3707">揶<span class="small">からか（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2061">嘲<span class="small">からか（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/17709">謿<span class="small">からか（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="457">械<span class="small">からくり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="463">関<span class="small">からくり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="474">機<span class="small">からくり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7876">闗<span class="small">からくり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5885">關<span class="small">からくり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9012">紥<span class="small">から（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4757">紮<span class="small">から（げる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1300">絡<span class="small">から（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4795">縢<span class="small">から（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4018">枷<span class="small">からさお</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2229">芥<span class="small">からし</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2167">烏<span class="small">からす</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3799">鴉<span class="small">からす</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/18508">鵶<span class="small">からす</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1091">枯<span class="small">か（らす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4157">槁<span class="small">か（らす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12176">槀<span class="small">か（らす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4040">蚌<span class="small">からすがい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/22118">䖫<span class="small">からすがい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9790">蜯<span class="small">からすがい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7079">鱲<span class="small">からすみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="182">体<span class="small">からだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2339">躯<span class="small">からだ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2345">腔<span class="small">からだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5680">躰<span class="small">からだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12418">骵<span class="small">からだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6474">軀<span class="small">からだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6329">軆<span class="small">からだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/27887">𩪆<span class="small">からだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6354">體<span class="small">からだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4024">枳<span class="small">からたち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4029">枸<span class="small">からたち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4133">棠<span class="small">からなし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/20060">㭻<span class="small">からなし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1091">枯<span class="small">から（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4381">涸<span class="small">から（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5192">隍<span class="small">からぼり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1300">絡<span class="small">から（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3711">搦<span class="small">から（み）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/14994">搻<span class="small">から（み）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1300">絡<span class="small">から（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/26348">苎<span class="small">からむし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2731">苧<span class="small">からむし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1300">絡<span class="small">から（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3711">搦<span class="small">から（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/14994">搻<span class="small">から（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts38">
                    <h3 class="ttl_while">かり</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="658">仮<span class="small">かり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12202">权<span class="small">かり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5662">假<span class="small">かり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2270">雁<span class="small">かり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5694">鳫<span class="small">かり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="861">権<span class="small">かり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2271">鴈<span class="small">かり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6005">權<span class="small">かり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="062">田<span class="small">か（り）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2766">佃<span class="small">か（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3198">甸<span class="small">か（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1541">苗<span class="small">か（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25771">狝<span class="small">か（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1124">狩<span class="small">か（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3785">畋<span class="small">か（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1589">猟<span class="small">か（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1416">債<span class="small">か（り）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2518">蒐<span class="small">か（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12352">獮<span class="small">か（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5857">獵<span class="small">か（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/18454">鱙<span class="small">か（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/26385">莸<span class="small">かりがねそう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5413">蕕<span class="small">かりがねそう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/24579">侨<span class="small">かりずまい</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2343">寓<span class="small">かりずまい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/14694">庽<span class="small">かりずまい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2313">僑<span class="small">かりずまい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5333">苟<span class="small">かりそめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3122">偸<span class="small">かりそめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12549">偷<span class="small">かりそめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7532">釭<span class="small">かりも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25444">殡<span class="small">かりもがり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5309">殯<span class="small">かりもがり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25444">殡<span class="small">かりもがり（する）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5309">殯<span class="small">かりもがり（する）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="528">借<span class="small">か（りる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/14783">徣<span class="small">か（りる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2629">貰<span class="small">か（りる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5432">藉<span class="small">か（りる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25416">榈<span class="small">かりん</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4204">櫚<span class="small">かりん</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts39">
                    <h3 class="ttl_while">かる</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3058">乂<span class="small">か（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1037">刈<span class="small">か（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="062">田<span class="small">か（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5313">艾<span class="small">か（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/13140">刍<span class="small">か（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/27742">𦫿<span class="small">か（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2236">苅<span class="small">か（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3198">甸<span class="small">か（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5322">芟<span class="small">か（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/19045">㘷<span class="small">か（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25771">狝<span class="small">か（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1124">狩<span class="small">か（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3785">畋<span class="small">か（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5357">芻<span class="small">か（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/26382">获<span class="small">か（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1589">猟<span class="small">か（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5358">蒭<span class="small">か（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1073">駆<span class="small">か（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2342">駈<span class="small">か（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2720">薙<span class="small">か（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12352">獮<span class="small">か（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1302">離<span class="small">か（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1343">穫<span class="small">か（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5857">獵<span class="small">か（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6351">驅<span class="small">か（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3085">佻<span class="small">かる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2628">脆<span class="small">かる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11808">脃<span class="small">かる（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="285">軽<span class="small">かる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3406">嫖<span class="small">かる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6046">輕<span class="small">かる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3085">佻<span class="small">かるがる（しい）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts40">
                    <h3 class="ttl_while">かれ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2148">伊<span class="small">かれ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1243">彼<span class="small">かれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2308">渠<span class="small">かれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/21493">䊑<span class="small">かれい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5280">餉<span class="small">かれい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3878">鰔<span class="small">かれい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3881">鰈<span class="small">かれい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/21493">䊑<span class="small">かれいい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5280">餉<span class="small">かれいい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5272">糒<span class="small">かれいい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7488">餱<span class="small">かれいい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4157">槁<span class="small">かれき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12176">槀<span class="small">かれき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4324">沍<span class="small">か（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1091">枯<span class="small">か（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4381">涸<span class="small">か（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3289">嗄<span class="small">か（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4565">歇<span class="small">か（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4157">槁<span class="small">か（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5547">竭<span class="small">か（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12176">槀<span class="small">か（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts41">
                    <h3 class="ttl_while">かろ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="285">軽<span class="small">かろ（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6046">輕<span class="small">かろ（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12355">呏<span class="small">ガロン</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/13470">嗧<span class="small">ガロン</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts42">
                    <h3 class="ttl_while">かわ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="050">川<span class="small">かわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5712">巛<span class="small">かわ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="396">皮<span class="small">かわ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="657">河<span class="small">かわ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="834">革<span class="small">かわ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="559">側<span class="small">かわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7600">鈹<span class="small">かわ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="559">側<span class="small">がわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/24257">㺚<span class="small">かわうそ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5124">獺<span class="small">かわうそ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6699">乹<span class="small">かわ（かす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1043">乾<span class="small">かわ（かす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6700">亁<span class="small">かわ（かす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4157">槁<span class="small">かわ（かす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12176">槀<span class="small">かわ（かす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/15810">漧<span class="small">かわ（かす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3903">旱<span class="small">かわ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6699">乹<span class="small">かわ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1043">乾<span class="small">かわ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1632">渇<span class="small">かわ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3916">晞<span class="small">かわ（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6446">渴<span class="small">かわ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6700">亁<span class="small">かわ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4157">槁<span class="small">かわ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12176">槀<span class="small">かわ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/15810">漧<span class="small">かわ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1168">燥<span class="small">かわ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5091">鞜<span class="small">かわぐつ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5094">鞨<span class="small">かわぐつ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5044">裘<span class="small">かわごろも</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="127">交<span class="small">か（わす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5076">躱<span class="small">かわ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8466">躲<span class="small">かわ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2140">蛙<span class="small">かわず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2617">翆<span class="small">かわせみ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2616">翠<span class="small">かわせみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5608">翡<span class="small">かわせみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3835">鷸<span class="small">かわせみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5085">靺<span class="small">かわたび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6133">厠<span class="small">かわや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3504">廁<span class="small">かわや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4409">溷<span class="small">かわや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4006">杞<span class="small">かわやなぎ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2877">蒲<span class="small">かわやなぎ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1960">瓦<span class="small">かわら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/27756">𦨞<span class="small">かわら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4673">磧<span class="small">かわら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4674">磚<span class="small">かわら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4876">甎<span class="small">かわら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4878">甓<span class="small">かわら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1960">瓦<span class="small">かわらけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4495">駱<span class="small">かわらげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5426">薛<span class="small">かわらよもぎ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="284">化<span class="small">か（わる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="355">代<span class="small">か（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/18681">㐶<span class="small">か（わる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="647">易<span class="small">か（わる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1837">迭<span class="small">か（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/24775">变<span class="small">か（わる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="608">変<span class="small">か（わる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1833">逓<span class="small">か（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25320">换<span class="small">か（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/17918">递<span class="small">か（わる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1175">替<span class="small">か（わる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1355">換<span class="small">か（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4402">渝<span class="small">か（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/19585">㣐<span class="small">か（わる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1471">摂<span class="small">か（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25336">摄<span class="small">か（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6050">遞<span class="small">か（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11751">㬱<span class="small">か（わる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6191">攝<span class="small">か（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6203">變<span class="small">か（わる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts43">
                    <h3 class="ttl_while">かん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="5772">厂<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6017">凵<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14599">巜<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="839">干<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12959">毌<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13004">卝<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13155">劝<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19553">㢧<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="667">刊<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1038">甘<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1397">甲<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3057">丱<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12369">仠<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13184">厈<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15416">氹<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19762">㧄<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24694">冚<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25500">汉<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1040">汗<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1638">缶<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3373">奸<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3656">扞<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8275">犴<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8628">邗<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9366">芉<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9367">芄<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11027">忓<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14385">屽<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15428">汍<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19554">㢨<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25429">欢<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="464">完<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1046">含<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1350">肝<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1984">串<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3330">坎<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3903">旱<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4007">杆<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5585">罕<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8559">迀<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10112">玕<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11286">扻<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11542">攼<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11620">旰<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13054">佄<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13959">妗<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15448">汵<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16355">犿<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17129">肒<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19509">㡲<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20478">㶥<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21919">䒛<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25031">奂<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="466">官<span class="small">カン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2249">侃<span class="small">カン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2250">函<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3334">坩<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3670">拑<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5200">邯<span class="small">カン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6145">卷<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8621">还<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9171">䍐<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9307">臽<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9403">苷<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10119">玪<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10490">皯<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10515">盰<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10635">矸<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10825">秆<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11760">朊<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11761">肣<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13288">咁<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15338">欥<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15339">欦<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15492">泔<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17530">衦<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19625">㤌<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19757">㦿<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19893">㪁<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20930">㿪<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20946">㿻<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20964">䀓<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21768">䏓<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25788">环<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26335">艰<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="840">看<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="841">巻<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1354">冠<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2251">凾<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2252">姦<span class="small">カン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2253">柑<span class="small">カン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2258">竿<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3247">咸<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3367">奐<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4023">柬<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5625">矜<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6699">乹<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8036">臤<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8995">紈<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9429">荁<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9766">虷<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9987">衎<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10129">玵<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10509">泴<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10642">砍<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13319">咺<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14010">姧<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14437">峘<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15549">洹<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16043">炶<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16372">狟<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17601">覌<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18785">㓧<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19521">㡾<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20486">㶰<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21655">䍑<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21725">䎠<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1640">陥<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2254">桓<span class="small">カン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2261">莞<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3428">宦<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3569">悍<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3688">捍<span class="small">カン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4034">栞<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4369">浣<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5215">疳<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8273">豻<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8337">赶<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9463">莧<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11082">猂<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12499">倌<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12500">倝<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12732">圅<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13345">哻<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13353">唅<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13358">唍<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13723">垸<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13729">垾<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14046">娢<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14051">娨<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14460">崁<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14946">捖<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15560">浛<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15570">浫<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15590">涆<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16049">烉<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16308">牶<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19373">㟏<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19378">㟔<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19655">㤷<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20573">㸧<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20810">㽍<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21533">䊻<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21953">䓍<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23924">圂<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24255">㸔<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24710">凎<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24813">唤<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25320">换<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25536">涣<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26377">莰<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1043">乾<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1349">勘<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1351">貫<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1637">患<span class="small">カン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2262">菅<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4008">桿<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4047">蚶<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4380">涵<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5935">淦<span class="small">カン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6340">陷<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6542">埳<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7529">釬<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7867">閈<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9496">菡<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9498">萈<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9509">萑<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10150">琓<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10151">琀<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10468">晥<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10976">悺<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11100">惂<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11680">晗<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11681">晘<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11813">脘<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12050">梡<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12199">梙<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12400">欵<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12438">偘<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14093">婠<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14475">崡<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15202">梒<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15604">涫<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15623">淉<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16081">烷<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16097">焊<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16730">硍<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16957">粓<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17782">赺<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18935">㖤<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19902">㪋<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20492">㶺<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21155">䄆<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21334">䇞<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21795">䏷<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22990">䧲<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24016">淊<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25638">焕<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26274">羟<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26461">萖<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="100">間<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="263">寒<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1352">敢<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1355">換<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1356">喚<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1639">棺<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1641">堪<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1642">款<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1645">閑<span class="small">カン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2263">萱<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3266">啣<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3276">喊<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3465">嵌<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3703">揀<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4388">渙<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4390">湲<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4840">酣<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5469">皖<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5555">稈<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5988">蒄<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6700">亁<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7282">靬<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7371">頇<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7454">飦<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7868">閒<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7975">雈<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8593">逭<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9027">絙<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9535">葌<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9538">萲<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10165">琯<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10555">睆<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10556">睅<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10975">悹<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11131">愌<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11491">㨔<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12086">棵<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12859">欿<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13139">凲<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13426">喛<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13804">堿<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14089">婜<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14136">媗<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14145">媣<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14314">寏<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14498">嵁<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14502">嵅<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14504">嵈<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14851">愋<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14971">揞<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16624">皔<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17435">蛝<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17645">詌<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18208">雂<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19197">㛾<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19603">㣪<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20065">㮀<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20199">㰸<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20375">㴠<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20500">㷄<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20659">㺂<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20776">㼨<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21278">䆠<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21805">䐄<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21983">䓸<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22119">䖭<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22196">䘖<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22910">䦎<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23300">䭴<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25816">痪<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26195">龫<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="262">感<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="264">漢<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="666">幹<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1042">勧<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1646">寛<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3649">戡<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4688">鉗<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4824">骭<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4915">煥<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5649">豢<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6590">馯<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7616">衘<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8279">貆<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8819">筦<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9208">羦<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9497">䓿<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10185">瑍<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10186">瑊<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10383">痯<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10798">祼<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12130">椷<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12867">㰹<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13096">傼<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13464">嗛<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14354">尲<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15104">暕<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15347">歀<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15348">歁<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16585">甝<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16663">睔<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16856">窤<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16898">筨<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16901">筸<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16962">粯<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17000">綄<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17071">羥<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17299">蒝<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17440">蛿<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18224">雽<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19065">㙔<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19690">㥤<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19820">㨜<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19933">㪱<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19992">㬇<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20087">㮡<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20599">㹂<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20667">㺌<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20779">㼫<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21161">䄐<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21710">䎏<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22099">䖔<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22220">䘶<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22227">䘾<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22299">䚙<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22579">䟰<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22975">䧟<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23056">䩂<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25011">塪<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27113">鉴<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="463">関<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="465">管<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="665">慣<span class="small">カン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2143">斡<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2257">潅<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4542">箝<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4695">銜<span class="small">カン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4777">綸<span class="small">カン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6390">漢<span class="small">カン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6420">寬<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7085">鳱<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8239">谽<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8264">豩<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8274">貋<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8347">趕<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8501">輐<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9607">蔊<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10396">瘓<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10701">碱<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11444">摜<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12174">槏<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12175">榦<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12604">僩<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12605">僴<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12855">㱁<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13837">墈<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14190">嫨<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15810">漧<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15818">漶<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17451">蜬<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17452">蜭<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18725">㒈<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19223">㜝<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19843">㨷<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19919">㪠<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20095">㮭<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20287">㲦<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20404">㵄<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21001">䁂<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21011">䁍<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21017">䁔<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21368">䈄<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22138">䗆<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22194">䘓<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22359">䛞<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22796">䣻<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22919">䦘<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23608">䴟<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1039">監<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1041">歓<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1353">緩<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2255">澗<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2265">諌<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3407">嫺<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3408">嫻<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3607">慳<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4785">緘<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6104">篏<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6219">樌<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6278">羮<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6522">㵎<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6556">䵟<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7384">頜<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7530">銲<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7646">鋎<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7647">鋡<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8504">輡<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8505">輨<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8612">遦<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9213">羬<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9640">蕑<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9641">蕳<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9642">䕀<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10397">瘝<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11172">憪<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11468">撊<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11714">暵<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12198">槵<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15024">撖<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15865">澉<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15869">澏<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15875">澖<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16203">熯<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16330">犙<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16582">甉<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16912">箮<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17018">緷<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17090">翧<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17463">蝖<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18317">餋<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18473">鴅<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19423">㠌<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19724">㦑<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20676">㺖<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21391">䈠<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21395">䈤<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22481">䝺<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22601">䠉<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23378">䯎<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24311">䔵<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="261">館<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1643">還<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1647">憾<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2259">翰<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2260">舘<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2264">諫<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3328">圜<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3436">寰<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3726">撼<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4174">橄<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4435">澣<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5138">頷<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5568">盥<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7240">醎<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7687">錧<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8171">諴<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9539">蕿<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10730">磡<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10999">憨<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11187">懁<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11492">擐<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11493">擀<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12231">橌<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12232">橺<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14232">嬜<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15890">澴<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16925">篢<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17475">螊<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17479">螒<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17902">輱<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18063">錎<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18264">韏<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18325">馠<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18425">魽<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19088">㙳<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19545">㢛<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20124">㯗<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20125">㯘<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20133">㯡<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22152">䗙<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22848">䤴<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22927">䦡<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22930">䦥<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23030">䨡<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23538">䲺<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1045">環<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3749">鼾<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4497">駻<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4569">歛<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5170">瞰<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5248">癇<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5284">餡<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5576">艱<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7400">顄<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7615">㘅<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7719">鍰<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7987">雚<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8248">豏<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8268">豲<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8269">䝠<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8528">轁<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9216">䍺<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10072">襉<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10435">癎<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10602">瞯<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10603">瞷<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10742">礀<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10743">磵<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10934">窾<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15295">檊<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17058">罆<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17590">襇<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18288">顅<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18810">㔋<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20542">㸁<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20617">㹕<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20618">㹖<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21735">䎯<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22052">䕔<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22162">䗣<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22169">䗰<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22683">䡩<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23089">䩪<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23386">䯘<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23689">䶃<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26339">館<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="467">観<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="838">簡<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1972">韓<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6950">鯇<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7407">顑<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7843">鍳<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7876">闗<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10757">礆<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11923">臗<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13558">嚂<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13879">壏<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14357">尶<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14358">尷<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16613">癏<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17374">藧<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18213">雗<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18493">鵍<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18572">麲<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20681">㺝<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21044">䁵<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21139">䃭<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21429">䉍<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22854">䤽<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22857">䥁<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23561">䳚<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23625">䴷<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23881">㘎<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25965">簲<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26863">躀<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2370">鹸<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4203">檻<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4450">瀚<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5131">羹<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5842">勸<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5885">關<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6972">䱤<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7496">饀<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7777">鏆<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8052">覵<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8053">覸<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8242">豃<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8915">簳<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8983">糫<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9140">繯<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9540">藼<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9541">蘐<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11517">攌<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17369">藖<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17710">譀<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18504">鵮<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19737">㦥<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20148">㯺<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21622">䌠<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23186">䫡<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2256">灌<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3639">懽<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3878">鰔<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4305">鹹<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4483">轗<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6951">鰀<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7255">麙<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7803">鐗<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7804">鐧<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7905">闞<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8538">轘<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8769">醶<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10762">礛<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13590">嚾<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14593">巏<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16467">獾<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17975">酄<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18412">魐<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20462">㶎<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20807">㽉<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22314">䚪<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22407">䜗<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22876">䥗<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23348">䮧<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23569">䳦<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1644">艦<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3888">鰥<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4733">鐶<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6228">歡<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6559">黬<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7149">鶾<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7241">鹻<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7907">闤<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8332">贑<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10259">瓘<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11930">䑏<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16869">竷<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16976">糮<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17394">蘫<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19021">㘕<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23108">䪀<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24062">爟<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3748">龕<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6850">鬜<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6862">鬫<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8215">譼<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8542">轞<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16703">矔<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21461">䉯<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22263">䙮<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23043">䨳<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23201">䫲<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24080">礶<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26026">鬝<span class="small">カン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1044">鑑<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3046">鑒<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4652">鬟<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5846">罐<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7215">鷴<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7216">鷳<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9354">囏<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17405">虇<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18551">鷼<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19941">㪻<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21636">䌯<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23510">䲌<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23710">䶟<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23880">㘚<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5015">讙<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6313">觀<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6475">鹼<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6812">髖<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7063">鱞<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7064">鱤<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7221">䴉<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7222">䴋<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8289">貛<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8290">䝔<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8331">贛<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10262">瓛<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22316">䚭<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22553">䟒<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23711">䶠<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23713">䶢<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3047">鑵<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10620">矙<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18151">鑬<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19024">㘛<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22821">䤗<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23519">䲗<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26476">䲘<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5145">顴<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18842">㔶<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4514">驩<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24045">灨<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3840">鸛<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18460">鱹<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20961">䀍<span class="small">カン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21057">䂅<span class="small">カン</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="343">神<span class="small">かん</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6368">神<span class="small">かん</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4932">燗<span class="small">かん</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="103">丸<span class="small">ガン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="120">元<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12369">仠<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9367">芄<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12744">刓<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13944">奿<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14385">屽<span class="small">ガン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1046">含<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11030">忨<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11282">抏<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12745">㝴<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13615">园<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13969">妧<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14396">岏<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17129">肒<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17938">邧<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20575">㸩<span class="small">ガン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="102">岩<span class="small">ガン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="265">岸<span class="small">ガン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1973">玩<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13919">奆<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19361">㟁<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20930">㿪<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20964">䀓<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10129">玵<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14437">峘<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16043">炶<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21725">䎠<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22109">䖠<span class="small">ガン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2747">砧<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5354">莟<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9776">蚖<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13345">哻<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13723">垸<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13729">垾<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16877">笎<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18862">㕍<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21953">䓍<span class="small">ガン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="668">眼<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3118">偐<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14099">婩<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16081">烷<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17759">貦<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19902">㪋<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20492">㶺<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21155">䄆<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21795">䏷<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22335">䛃<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24908">啱<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25001">堓<span class="small">ガン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2270">雁<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3266">啣<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3466">嵒<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12568">傆<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13409">啽<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13434">喭<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14314">寏<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14498">嵁<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14510">嵓<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16624">皔<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18208">雂<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18209">雃<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19197">㛾<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19603">㣪<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20659">㺂<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21805">䐄<span class="small">ガン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1648">頑<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5694">鳫<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7616">衘<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8600">遃<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14167">嫄<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15231">楌<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16585">甝<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17000">綄<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17299">蒝<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17654">詽<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18222">雸<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19698">㥳<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20667">㺌<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20779">㼫<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23247">䬧<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25012">塬<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4663">碪<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4695">銜<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10702">碞<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15243">榞<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17334">蔨<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19223">㜝<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20287">㲦<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20605">㹉<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22359">䛞<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23373">䯈<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23608">䴟<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2268">翫<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2271">鴈<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6893">魭<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18998">㗴<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21391">䈠<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22102">䖗<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22601">䠉<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23530">䲮<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5138">頷<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9757">虤<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12645">儑<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17355">薍<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17479">螒<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18062">錌<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18425">魽<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20133">㯡<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20530">㷳<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21689">䍹<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22152">䗙<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22927">䦡<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2267">癌<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7406">顉<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7615">㘅<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18810">㔋<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22162">䗣<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23386">䯘<span class="small">ガン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="101">顔<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5783">顏<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17374">藧<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18213">雗<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18493">鵍<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20681">㺝<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20910">㿏<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23333">䮗<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23625">䴷<span class="small">ガン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="468">願<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2269">贋<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13571">嚚<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17710">譀<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20148">㯺<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23186">䫡<span class="small">ガン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2266">巌<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20807">㽉<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23348">䮧<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24154">邍<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6559">黬<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19022">㘖<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22408">䜙<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3748">龕<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8324">贗<span class="small">ガン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5711">巖<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13887">壧<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14596">巗<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19023">㘙<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21636">䌯<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22553">䟒<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23398">䯥<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23711">䶠<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16785">礹<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23519">䲗<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18569">麣<span class="small">ガン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23722">䶫<span class="small">ガン</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="131">考<span class="small">かんが（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6195">攷<span class="small">かんが（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2145">按<span class="small">かんが（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="021">校<span class="small">かんが（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="441">案<span class="small">かんが（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1349">勘<span class="small">かんが（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1989">稽<span class="small">かんが（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5080">覈<span class="small">かんが（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/27113">鉴<span class="small">かんが（みる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7843">鍳<span class="small">かんが（みる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1044">鑑<span class="small">かんが（みる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3046">鑒<span class="small">かんが（みる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/18151">鑬<span class="small">かんが（みる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1039">監<span class="small">かんがみ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4526">笄<span class="small">かんざし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4682">釵<span class="small">かんざし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6501">筓<span class="small">かんざし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4694">鈿<span class="small">かんざし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2893">箆<span class="small">かんざし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2892">篦<span class="small">かんざし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25962">簮<span class="small">かんざし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4598">簪<span class="small">かんざし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8432">勪<span class="small">かんじき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4187">橇<span class="small">かんじき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/22728">䢪<span class="small">かんじき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12268">檋<span class="small">かんじき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8431">蹻<span class="small">かんじき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4692">鉋<span class="small">かんな</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3483">巫<span class="small">かんなぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5458">覡<span class="small">かんなぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3941">閂<span class="small">かんぬき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="463">関<span class="small">かんぬき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7876">闗<span class="small">かんぬき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5885">關<span class="small">かんぬき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1554">芳<span class="small">かんば（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/20920">㿝<span class="small">かんば（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1099">香<span class="small">かんば（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5375">菲<span class="small">かんば（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4854">馥<span class="small">かんば（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/24349">䫝<span class="small">かんば（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2325">馨<span class="small">かんば（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="101">顔<span class="small">かんばせ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5783">顏<span class="small">かんばせ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="805">弁<span class="small">かんむり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1354">冠<span class="small">かんむり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3156">冕<span class="small">かんむり</span></a></li>
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
                                        <li><a href="kanjiy/12934" title="漢字「殺」のページ"><span class="rank">10</span><span class="jp">殺</span></a></li>
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