<?php
/*
 * Template Name: Yomi38
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
               <h1 class="ttl_main">音訓検索「よ」</h1>
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
               <p>「よ」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>よ</option>
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
                         <li id="parts1_menu"><a href="#parts1">よ</a></li>
                         <li id="parts2_menu"><a href="#parts2">よあ</a></li>
                         <li id="parts3_menu"><a href="#parts3">よい</a></li>
                         <li id="parts4_menu"><a href="#parts4">よう</a></li>
                         <li id="parts5_menu"><a href="#parts5">よき</a></li>
                         <li id="parts6_menu"><a href="#parts6">よく</a></li>
                         <li id="parts7_menu"><a href="#parts7">よけ</a></li>
                         <li id="parts8_menu"><a href="#parts8">よこ</a></li>
                         <li id="parts9_menu"><a href="#parts9">よし</a></li>
                         <li id="parts10_menu"><a href="#parts10">よす</a></li>
                         <li id="parts11_menu"><a href="#parts11">よせ</a></li>
                         <li id="parts12_menu"><a href="#parts12">よそ</a></li>
                         <li id="parts13_menu"><a href="#parts13">よた</a></li>
                         <li id="parts14_menu"><a href="#parts14">よつ</a></li>
                         <li id="parts15_menu"><a href="#parts15">よと</a></li>
                         <li id="parts16_menu"><a href="#parts16">よな</a></li>
                         <li id="parts17_menu"><a href="#parts17">よね</a></li>
                         <li id="parts18_menu"><a href="#parts18">よひ</a></li>
                         <li id="parts19_menu"><a href="#parts19">よふ</a></li>
                         <li id="parts20_menu"><a href="#parts20">よほ</a></li>
                         <li id="parts21_menu"><a href="#parts21">よま</a></li>
                         <li id="parts22_menu"><a href="#parts22">よみ</a></li>
                         <li id="parts23_menu"><a href="#parts23">よむ</a></li>
                         <li id="parts24_menu"><a href="#parts24">よめ</a></li>
                         <li id="parts25_menu"><a href="#parts25">よも</a></li>
                         <li id="parts26_menu"><a href="#parts26">より</a></li>
                         <li id="parts27_menu"><a href="#parts27">よる</a></li>
                         <li id="parts28_menu"><a href="#parts28">よろ</a></li>
                         <li id="parts29_menu"><a href="#parts29">よわ</a></li>
                         <li id="parts30_menu"><a href="#parts30">よん</a></li>
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
                    <h3 class="ttl_while">よ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="1291">与<span class="small">ヨ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="424">予<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12405">伃<span class="small">ヨ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="817">余<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11042">忬<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11597">扵<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13967">妤<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25786">玙<span class="small">ヨ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2192">於<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12876">欤<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5627">舁<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16810">秗<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21074">䂛<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16381">狳<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3264">唹<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4387">淤<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9494">菸<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10973">悆<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5451">畭<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6508">畬<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16732">硢<span class="small">ヨ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="818">預<span class="small">ヨ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1292">誉<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5279">飫<span class="small">ヨ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6294">與<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9335">艅<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10382">瘀<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21683">䍱<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16907">箊<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6896">魣<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18212">雓<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18739">㒜<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5419">蕷<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5755">豫<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5819">餘<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9701">藇<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11016">懙<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14244">嬩<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15880">澦<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20682">㺞<span class="small">ヨ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2951">輿<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4568">歟<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10252">璵<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11015">㦛<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21062">䂊<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21855">䑂<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7151">䳜<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10761">礜<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10895">穥<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17993">醧<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18433">鮽<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8926">籅<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11616">旟<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6317">譽<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8529">轝<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12309">櫲<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20470">㶛<span class="small">ヨ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7235">鸒<span class="small">ヨ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13031">亖<span class="small">よ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="026">四<span class="small">よ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="344">世<span class="small">よ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="355">代<span class="small">よ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3209">丗<span class="small">よ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24392">㔺<span class="small">よ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6595">卋<span class="small">よ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="232">夜<span class="small">よ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13033">亱<span class="small">よ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">よあ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="3919">晨<span class="small">よあ（け）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19979">㫳<span class="small">よあ（け）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">よい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1751">宵<span class="small">よい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="632">令<span class="small">よ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="656">可<span class="small">よ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="010">休<span class="small">よ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="502">好<span class="small">よ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1368">吉<span class="small">よ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3073">价<span class="small">よ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8005">㚑<span class="small">よ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25214">庆<span class="small">よ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="624">利<span class="small">よ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="627">良<span class="small">よ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8006">灵<span class="small">よ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18623">冝<span class="small">よ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23955">宐<span class="small">よ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1333">佳<span class="small">よ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1652">宜<span class="small">よ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19253">㝀<span class="small">よ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="398">美<span class="small">よ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18697">㑘<span class="small">よ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19273">㝖<span class="small">よ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3108">俶<span class="small">よ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1730">淑<span class="small">よ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="927">善<span class="small">よ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="673">義<span class="small">よ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2348">馴<span class="small">よ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8152">竩<span class="small">よ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2205">嘉<span class="small">よ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1052">儀<span class="small">よ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1594">霊<span class="small">よ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1672">慶<span class="small">よ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2288">誼<span class="small">よ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5645">臧<span class="small">よ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19717">㦉<span class="small">よ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20209">㱅<span class="small">よ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2274">徽<span class="small">よ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8004">霛<span class="small">よ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8003">䨩<span class="small">よ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6279">譱<span class="small">よ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11019">㦤<span class="small">よ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3638">懿<span class="small">よ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6346">靈<span class="small">よ（い）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">よう</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="3501">幺<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13009">么<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3362">夭<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="235">用<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="254">央<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="643">永<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="993">幼<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3419">孕<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18781">㓜<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="427">羊<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9308">㬰<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13039">仸<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13228">吆<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19317">㞌<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19956">㫐<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24745">厌<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2117">妖<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6259">甬<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7955">阳<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7956">阦<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9380">芺<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13059">佣<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14288">宎<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14390">岆<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14914">抝<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18887">㕭<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18891">㕲<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19039">㘭<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19267">㝐<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3089">佯<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3553">怏<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3669">拗<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3914">杳<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5301">殀<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9422">苚<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9423">苭<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11318">抭<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11978">枖<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12841">劷<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12943">匋<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13287">呿<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13683">坳<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14402">岟<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14414">岰<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14816">怮<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14920">抰<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15397">氜<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19145">㚺<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20635">㹧<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24981">垇<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25087">孧<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25275">拥<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="428">洋<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="620">勇<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="621">要<span class="small">ヨウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2362">頁<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3096">俑<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3249">咬<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3384">姚<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3910">昜<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5626">臾<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9201">羏<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10784">祅<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10905">穾<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11775">胦<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11985">柍<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12010">柼<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12011">枼<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12494">㑞<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12845">勈<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13713">垟<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14774">徉<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15171">柪<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19271">㝔<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19306">㞁<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27738">𢈗<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="819">容<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2947">涌<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3567">恙<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5615">窈<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5692">珱<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7469">养<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8632">邕<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9310">舀<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10148">珧<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10539">眑<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10909">窅<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11092">悀<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12012">枽<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13735">埇<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14452">峵<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15184">样<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15402">氧<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16050">烊<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16055">烑<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16499">珜<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16647">眏<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19170">㛚<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20933">㿮<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21270">䆗<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21271">䆙<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21675">䍩<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24219">㦶<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25361">晔<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25622">烨<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25812">痈<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1518">陶<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1919">庸<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5225">痒<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5616">窕<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8100">訞<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8101">䚻<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8789">䇦<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9205">羕<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10917">窔<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10928">窑<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10974">恿<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12558">偠<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13079">偞<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14854">愥<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15200">梎<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16657">眻<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16987">紻<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17271">营<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19475">㡋<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19483">㡕<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19533">㢍<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19750">㦷<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21276">䆞<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21907">䒋<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22327">䚺<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22651">䡆<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23950">媖<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24019">渶<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24343">䣐<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="425">葉<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="426">陽<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="645">営<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1581">揚<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1582">揺<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2116">湧<span class="small">ヨウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2960">遥<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7954">隃<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8103">詇<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8490">軺<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9152">䋝<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9575">葽<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9828">蛘<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10990">惥<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11093">愑<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11836">腌<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12582">傜<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12583">傛<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12902">殗<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13421">喓<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14108">婸<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14109">婹<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14486">崵<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14495">崾<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14968">揘<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14971">揞<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15236">楧<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16402">猒<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16734">硧<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16891">筄<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17280">萾<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17646">詏<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17887">軪<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18713">㑸<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19817">㨕<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20280">㲟<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21885">䑬<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22124">䖴<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23012">䨍<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24272">䄏<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25134">嵘<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1140">詳<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1293">腰<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1294">溶<span class="small">ヨウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2952">傭<span class="small">ヨウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2953">楊<span class="small">ヨウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2957">蓉<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3536">徭<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3934">暘<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4063">蛹<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4577">雍<span class="small">ヨウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4629">瑶<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4918">煬<span class="small">ヨウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5135">頌<span class="small">ヨウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6190">搖<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7567">鉠<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7983">䧹<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9210">羪<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10194">瑒<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11094">愹<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12167">楆<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12599">僌<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12600">㑾<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13448">嗈<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13625">圔<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13808">塎<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13869">墷<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14155">媱<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14159">媵<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14169">嫆<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14171">嫈<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14173">嫍<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14530">嵱<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14764">彮<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14857">愮<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14980">搈<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15062">敭<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15411">氱<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15726">溔<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16153">煠<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16423">猺<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16606">痷<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17314">蓔<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18221">雵<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19205">㜉<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19399">㟱<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19751">㦹<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19827">㨣<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19953">㫍<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20380">㴩<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20384">㴭<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20509">㷏<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20665">㺊<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20923">㿢<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21005">䁆<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21993">䔄<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22127">䖹<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22721">䢡<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23906">嗂<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24265">䁐<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25339">摇<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="429">様<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1295">踊<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2118">瘍<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2182">厭<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2744">銚<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2954">熔<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3606">慂<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3617">慵<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3929">曄<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4168">榕<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4420">漾<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5722">瑤<span class="small">ヨウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5778">遙<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8704">鄘<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10058">褕<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10207">瑢<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10810">禓<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11728">曅<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13102">僷<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13838">墉<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15009">摬<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15105">暚<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15245">榣<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15783">滽<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16171">熀<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16182">熎<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17460">蝇<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17467">蝧<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17607">覞<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19411">㟾<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19540">㢕<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19586">㣑<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19837">㨱<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20668">㺎<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21013">䁏<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21014">䁑<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21496">䊔<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21731">䎨<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22233">䙅<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22977">䧡<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23251">䬬<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24221">㨾<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24383">燁<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27669">榚<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="622">養<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1017">影<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1918">窯<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2959">蝿<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5730">潁<span class="small">ヨウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6008">樣<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6130">穃<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6272">窰<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7244">䴠<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7798">銿<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8865">䈎<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10483">皣<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10593">䁘<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10609">瞱<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11488">㩎<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14216">嬈<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15035">擖<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15037">擛<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15257">槦<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16285">牅<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16548">璄<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16915">箹<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17170">膡<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17582">褣<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18046">鋊<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18316">餆<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18317">餋<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18471">鴁<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19955">㫏<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20792">㼸<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21024">䁝<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21590">䋼<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21595">䌁<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22282">䚆<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23261">䬺<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24098">緰<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25572">靥<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25898">磘<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1296">謡<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1580">擁<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3353">壅<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3537">徼<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4275">踴<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6925">䱂<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7097">鴞<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9680">蕹<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13539">噟<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13548">噰<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15885">澭<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17587">褮<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17684">諹<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17901">輰<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17957">郺<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18752">㒯<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19087">㙲<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20435">㵬<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20535">㷸<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20906">㿈<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21408">䈶<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22531">䞻<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22849">䤶<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22934">䦫<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23266">䭂<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23467">䱆<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4309">膺<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5532">邀<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6058">營<span class="small">ヨウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6316">謠<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7743">鍚<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7744">鍱<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8321">賸<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9123">繇<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9918">䗤<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11263">擫<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11920">臃<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13560">嚈<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14245">嬫<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14247">嬮<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14581">嶸<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15124">曗<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16693">瞸<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18178">闄<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18491">鴹<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18676">㐯<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18833">㔦<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19009">㘇<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21902">䒅<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22616">䠛<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22679">䡥<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23270">䭊<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23388">䯚<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24165">餣<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27746">𨉷<span class="small">ヨウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="234">曜<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2955">鎔<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4445">瀁<span class="small">ヨウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4939">燿<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6970">䱒<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7438">颺<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7982">雝<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10457">癕<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11210">懩<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11262">擪<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11513">攁<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16250">爃<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17195">艞<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18090">鎐<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18091">鎑<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18271">韹<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20746">㻾<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20832">㽫<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21617">䌛<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23182">䫜<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23236">䬗<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23273">䭎<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24061">爗<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2958">蠅<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7443">颻<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7444">䬙<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7499">饁<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7797">鏞<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15048">攍<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16698">矅<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18363">騕<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18524">鶧<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19240">㜲<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20151">㯿<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20621">㹙<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21859">䑆<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22066">䕦<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22175">䗸<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23146">䪯<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23338">䮜<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24360">䭐<span class="small">ヨウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2956">耀<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5253">癢<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7013">鰑<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8210">譍<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14590">巊<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14716">廮<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17392">蘨<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18125">鐊<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21862">䑉<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23277">䭗<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23571">䳩<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25906">礢<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3514">廱<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3832">鷂<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4638">瓔<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7029">鰩<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7030">鰫<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15974">灉<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16782">礯<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17727">譻<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18240">霷<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20622">㹚<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21148">䃷<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21865">䑍<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23278">䭘<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23284">䭟<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23672">䵮<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7046">鱅<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7209">鷕<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7507">饔<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18142">鑍<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18538">鷛<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20216">㱌<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20916">㿘<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22261">䙬<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4360">靨<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4820">纓<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5259">癰<span class="small">ヨウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2202">鷹<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17729">讑<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18456">鱦<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18557">鸉<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23288">䭥<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23008">䨉<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23598">䴍<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23678">䵴<span class="small">ヨウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2165">鸚<span class="small">ヨウ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="069">八<span class="small">よう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13063">佲<span class="small">よ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4838">酊<span class="small">よ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5348">茗<span class="small">よ（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1460">酔<span class="small">よ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4842">酩<span class="small">よ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4843">酲<span class="small">よ（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6335">醉<span class="small">よ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4852">醺<span class="small">よ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5556">稍<span class="small">ようや（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1790">漸<span class="small">ようや（く）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">よき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="21180">䄩<span class="small">ヨキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22200">䘝<span class="small">ヨキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22778">䣧<span class="small">ヨキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18001">釴<span class="small">ヨキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17436">蛡<span class="small">ヨキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24192">㔴<span class="small">ヨキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22020">䔬<span class="small">ヨキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23616">䴬<span class="small">ヨキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16839">穓<span class="small">ヨキ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5027">衾<span class="small">よぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8598">过<span class="small">よぎ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="655">過<span class="small">よぎ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">よく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="3517">弋<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9378">芅<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19125">㚤<span class="small">ヨク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1583">抑<span class="small">ヨク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2119">沃<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4003">杙<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17127">肐<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15093">昙<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21180">䄩<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22200">䘝<span class="small">ヨク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="623">浴<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3456">峪<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15576">浳<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22778">䣧<span class="small">ヨク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="826">域<span class="small">ヨク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="994">翌<span class="small">ヨク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="995">欲<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5605">翊<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7974">隿<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11007">悥<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15637">淢<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17640">訲<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18001">釴<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19119">㚜<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22965">䧕<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23371">䯆<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12120">棫<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16518">琙<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17436">蛡<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21559">䋚<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6785">骮<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9180">罭<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24192">㔴<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9056">緎<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9865">蜮<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11228">戫<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15847">潩<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17897">輍<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21369">䈅<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21666">䍞<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22020">䔬<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23616">䴬<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23983">廙<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="2961">慾<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16195">熤<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16211">熼<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18046">鋊<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18471">鴁<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18576">黓<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3962">閾<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9681">薏<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15895">澺<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16839">穓<span class="small">ヨク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1297">翼<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6223">檍<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17494">螸<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6879">魊<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6880">䰥<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7141">鵒<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21046">䁷<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23335">䮙<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22174">䗷<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24102">繶<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17628">觷<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24042">瀷<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24157">醷<span class="small">ヨク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23363">䮸<span class="small">ヨク</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1409">克<span class="small">よ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="785">能<span class="small">よ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="785">能<span class="small">よ（くする）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">よけ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5491">贅<span class="small">よけい（な）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="908">除<span class="small">よ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1244">避<span class="small">よ（ける）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">よこ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="253">横<span class="small">よこ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6422">橫<span class="small">よこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1010">緯<span class="small">よこいと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12028">桄<span class="small">よこぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3373">奸<span class="small">よこしま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3080">佞<span class="small">よこしま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1432">邪<span class="small">よこしま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6161">侫<span class="small">よこしま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2252">姦<span class="small">よこしま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14010">姧<span class="small">よこしま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1009">違<span class="small">よこしま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5318">辟<span class="small">よこしま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3615">慝<span class="small">よこしま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8225">䜛<span class="small">よこしま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5017">讒<span class="small">よこしま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1023">汚<span class="small">よご（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15435">汙<span class="small">よご（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15438">污<span class="small">よご（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="253">横<span class="small">よこ（たわる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6422">橫<span class="small">よこ（たわる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5157">睇<span class="small">よこめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5658">滓<span class="small">よご（れ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1023">汚<span class="small">よご（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15435">汙<span class="small">よご（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15438">污<span class="small">よご（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13687">坸<span class="small">よご（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2336">垢<span class="small">よご（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">よし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="420">由<span class="small">よし</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5445">芦<span class="small">よし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5961">恷<span class="small">よし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5388">葭<span class="small">よし</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2152">葦<span class="small">よし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5444">蘆<span class="small">よし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="502">好<span class="small">よしみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19253">㝀<span class="small">よしみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3399">媾<span class="small">よしみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8152">竩<span class="small">よしみ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2288">誼<span class="small">よしみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18680">㐴<span class="small">よ（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3740">攀<span class="small">よ（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3700">捩<span class="small">よじ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="901">縦<span class="small">よし（んば）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5914">縱<span class="small">よし（んば）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">よす</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="147">止<span class="small">よ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13601">囙<span class="small">よすが</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="642">因<span class="small">よすが</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="609">便<span class="small">よすが</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1020">縁<span class="small">よすが</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6453">緣<span class="small">よすが</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">よせ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="2581">鯖<span class="small">よせなべ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="671">寄<span class="small">よ（せる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2343">寓<span class="small">よ（せる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14694">庽<span class="small">よ（せる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">よそ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="929">装<span class="small">よそ（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6309">裝<span class="small">よそ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13947">妆<span class="small">よそお（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3375">妝<span class="small">よそお（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14048">娤<span class="small">よそお（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27810">𡝂<span class="small">よそお（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21488">䊋<span class="small">よそお（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13947">妆<span class="small">よそお（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2842">扮<span class="small">よそお（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3375">妝<span class="small">よそお（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14048">娤<span class="small">よそお（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27810">𡝂<span class="small">よそお（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="929">装<span class="small">よそお（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1752">粧<span class="small">よそお（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6309">裝<span class="small">よそお（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21488">䊋<span class="small">よそお（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8958">糚<span class="small">よそお（う）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">よた</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3830">鷆<span class="small">よたか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5818">鷏<span class="small">よたか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8609">㳄<span class="small">よだれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4376">涎<span class="small">よだれ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">よつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="13031">亖<span class="small">よ（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="026">四<span class="small">よ（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11788">伷<span class="small">よつぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4222">胄<span class="small">よつぎ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1814">嫡<span class="small">よつぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13031">亖<span class="small">よっ（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="026">四<span class="small">よっ（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5584">衢<span class="small">よつつじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3065">仍<span class="small">よ（って）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13601">囙<span class="small">よ（って）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="642">因<span class="small">よ（って）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">よと</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2767">淀<span class="small">よど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2768">澱<span class="small">よど</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2767">淀<span class="small">よど（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2768">澱<span class="small">よど（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">よな</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="2006">沙<span class="small">よな（げる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2051">汰<span class="small">よな（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2793">淘<span class="small">よな（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4382">淅<span class="small">よな（げる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">よね</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="220">米<span class="small">よね</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">よひ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="296">号<span class="small">よびな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6302">號<span class="small">よびな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4988">諡<span class="small">よびな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4989">謚<span class="small">よびな</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">よふ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="865">呼<span class="small">よ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24813">唤<span class="small">よ（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1356">喚<span class="small">よ（ぶ）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">よほ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="6287">膕<span class="small">よほろ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts21">
                    <h3 class="ttl_while">よま</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3693">掫<span class="small">よまわ（り）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts22">
                    <h3 class="ttl_while">よみ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4955">詁<span class="small">よ（み）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5366">甦<span class="small">よみがえ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2610">蘇<span class="small">よみがえ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5983">蘓<span class="small">よみがえ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2205">嘉<span class="small">よみ（する）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts23">
                    <h3 class="ttl_while">よむ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="487">訓<span class="small">よ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1322">詠<span class="small">よ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4955">詁<span class="small">よ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="205">読<span class="small">よ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4968">誦<span class="small">よ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4606">籀<span class="small">よ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6503">籒<span class="small">よ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6318">讀<span class="small">よ（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts24">
                    <h3 class="ttl_while">よめ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="14049">娦<span class="small">よめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3393">娵<span class="small">よめ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1335">嫁<span class="small">よめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25065">嫔<span class="small">よめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3413">嬪<span class="small">よめ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts25">
                    <h3 class="ttl_while">よも</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5313">艾<span class="small">よもぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27742">𦫿<span class="small">よもぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5334">苹<span class="small">よもぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19045">㘷<span class="small">よもぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21956">䓑<span class="small">よもぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5377">萍<span class="small">よもぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26469">萧<span class="small">よもぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5390">蒿<span class="small">よもぎ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2913">蓬<span class="small">よもぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9671">䔥<span class="small">よもぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5431">蕭<span class="small">よもぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17387">蘕<span class="small">よもぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26039">纄<span class="small">よもぎ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts26">
                    <h3 class="ttl_while">より</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="150">自<span class="small">よ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2774">撚<span class="small">よ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4796">縒<span class="small">よ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3065">仍<span class="small">よ（りて）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1060">拠<span class="small">よりどころ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11301">㩀<span class="small">よりどころ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24222">㨿<span class="small">よりどころ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5873">據<span class="small">よりどころ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts27">
                    <h3 class="ttl_while">よる</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="232">夜<span class="small">よる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13033">亱<span class="small">よる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3065">仍<span class="small">よ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="420">由<span class="small">よ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3069">仗<span class="small">よ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13601">囙<span class="small">よ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="642">因<span class="small">よ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1494">択<span class="small">よ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19268">㝑<span class="small">よ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1005">依<span class="small">よ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1060">拠<span class="small">よ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2141">阿<span class="small">よ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3167">凭<span class="small">よ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11603">㫄<span class="small">よ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3686">拵<span class="small">よ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26942">选<span class="small">よ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3101">倚<span class="small">よ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3780">旁<span class="small">よ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="671">寄<span class="small">よ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4487">馮<span class="small">よ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3713">搓<span class="small">よ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11301">㩀<span class="small">よ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24222">㨿<span class="small">よ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="553">選<span class="small">よ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1020">縁<span class="small">よ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2774">撚<span class="small">よ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5363">靠<span class="small">よ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6453">緣<span class="small">よ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11005">慿<span class="small">よ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3622">憑<span class="small">よ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4796">縒<span class="small">よ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5873">據<span class="small">よ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5874">擇<span class="small">よ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5432">藉<span class="small">よ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts28">
                    <h3 class="ttl_while">よろ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1397">甲<span class="small">よろい</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2250">函<span class="small">よろい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2251">凾<span class="small">よろい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3154">冑<span class="small">よろい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12732">圅<span class="small">よろい</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2231">鎧<span class="small">よろい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5332">苙<span class="small">よろいぐさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5387">葯<span class="small">よろいぐさ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2231">鎧<span class="small">よろ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11000">憘<span class="small">よろこ（び）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6089">憙<span class="small">よろこ（び）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5642">禧<span class="small">よろこ（び）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4514">驩<span class="small">よろこ（び）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6597">㐂<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12681">兊<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25214">庆<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25429">欢<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3148">兌<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3539">忻<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13111">兑<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2330">欣<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3545">怡<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11080">恱<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1323">悦<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11079">悅<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12400">欵<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12836">惞<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16096">焈<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="469">喜<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="659">賀<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1642">款<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2115">喩<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23905">喻<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="551">説<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3131">僖<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4925">煕<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8146">說<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12855">㱁<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1041">歓<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1672">慶<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4924">熙<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4926">熈<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11000">憘<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3625">懌<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4928">熹<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6089">憙<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6596">歖<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16209">熺<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3639">懽<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6228">歡<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5015">讙<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4514">驩<span class="small">よろこ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18623">冝<span class="small">よろ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23955">宐<span class="small">よろ（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1652">宜<span class="small">よろ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19273">㝖<span class="small">よろ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18623">冝<span class="small">よろ（しく）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23955">宐<span class="small">よろ（しく）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1652">宜<span class="small">よろ（しく）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19273">㝖<span class="small">よろ（しく）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="226">万<span class="small">よろず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20558">㸘<span class="small">よろず</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5888">萬<span class="small">よろず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26838">跄<span class="small">よろめ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4278">蹌<span class="small">よろめ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26858">蹒<span class="small">よろめ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4284">蹣<span class="small">よろめ（く）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts29">
                    <h3 class="ttl_while">よわ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="12887">亗<span class="small">よわい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="067">年<span class="small">よわい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25106">岁<span class="small">よわい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16806">秊<span class="small">よわい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21184">䄭<span class="small">よわい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="302">歯<span class="small">よわい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12886">嵗<span class="small">よわい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1106">歳<span class="small">よわい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12885">歲<span class="small">よわい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5671">齒<span class="small">よわい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1310">齢<span class="small">よわい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5781">齡<span class="small">よわい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="154">弱<span class="small">よわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2628">脆<span class="small">よわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11808">脃<span class="small">よわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18665">㐡<span class="small">よわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3445">孱<span class="small">よわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2502">嬬<span class="small">よわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3633">懦<span class="small">よわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11200">懧<span class="small">よわ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5133">羸<span class="small">よわ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="154">弱<span class="small">よわ（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="154">弱<span class="small">よわ（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="154">弱<span class="small">よわ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5133">羸<span class="small">よわ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts30">
                    <h3 class="ttl_while">よん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="13031">亖<span class="small">よん</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="026">四<span class="small">よん</span></a></li>
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