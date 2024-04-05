<?php
/*
 * Template Name: Yomi18
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
               <h1 class="ttl_main">音訓検索「つ」</h1>
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
               <p>「つ」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>つ</option>
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
                         <li id="parts1_menu"><a href="#parts1">つ</a></li>
                         <li id="parts2_menu"><a href="#parts2">つい</a></li>
                         <li id="parts3_menu"><a href="#parts3">つう</a></li>
                         <li id="parts4_menu"><a href="#parts4">つえ</a></li>
                         <li id="parts5_menu"><a href="#parts5">つか</a></li>
                         <li id="parts6_menu"><a href="#parts6">つき</a></li>
                         <li id="parts7_menu"><a href="#parts7">つく</a></li>
                         <li id="parts8_menu"><a href="#parts8">つけ</a></li>
                         <li id="parts9_menu"><a href="#parts9">つこ</a></li>
                         <li id="parts10_menu"><a href="#parts10">つし</a></li>
                         <li id="parts11_menu"><a href="#parts11">つた</a></li>
                         <li id="parts12_menu"><a href="#parts12">つち</a></li>
                         <li id="parts13_menu"><a href="#parts13">つつ</a></li>
                         <li id="parts14_menu"><a href="#parts14">つて</a></li>
                         <li id="parts15_menu"><a href="#parts15">つと</a></li>
                         <li id="parts16_menu"><a href="#parts16">つな</a></li>
                         <li id="parts17_menu"><a href="#parts17">つね</a></li>
                         <li id="parts18_menu"><a href="#parts18">つの</a></li>
                         <li id="parts19_menu"><a href="#parts19">つは</a></li>
                         <li id="parts20_menu"><a href="#parts20">つひ</a></li>
                         <li id="parts21_menu"><a href="#parts21">つふ</a></li>
                         <li id="parts22_menu"><a href="#parts22">つほ</a></li>
                         <li id="parts23_menu"><a href="#parts23">つま</a></li>
                         <li id="parts24_menu"><a href="#parts24">つみ</a></li>
                         <li id="parts25_menu"><a href="#parts25">つむ</a></li>
                         <li id="parts26_menu"><a href="#parts26">つめ</a></li>
                         <li id="parts27_menu"><a href="#parts27">つも</a></li>
                         <li id="parts28_menu"><a href="#parts28">つや</a></li>
                         <li id="parts29_menu"><a href="#parts29">つゆ</a></li>
                         <li id="parts30_menu"><a href="#parts30">つよ</a></li>
                         <li id="parts31_menu"><a href="#parts31">つら</a></li>
                         <li id="parts32_menu"><a href="#parts32">つり</a></li>
                         <li id="parts33_menu"><a href="#parts33">つる</a></li>
                         <li id="parts34_menu"><a href="#parts34">つれ</a></li>
                         <li id="parts35_menu"><a href="#parts35">つわ</a></li>
                         <li id="parts36_menu"><a href="#parts36">つん</a></li>
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
                    <h3 class="ttl_while">つ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="13253">吺<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13956">妒<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18855">㕆<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19350">㞳<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20313">㳆<span class="small">ツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2069">妬<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13977">妵<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18899">㕻<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19140">㚵<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20633">㹥<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23898">咅<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12767">剅<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16042">炵<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20035">㭔<span class="small">ツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="194">通<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13330">哣<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13357">唋<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15096">晍<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19162">㛒<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19170">㛚<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21081">䂢<span class="small">ツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="375">都<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13758">埬<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13763">埱<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14063">娻<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16823">秺<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16880">笗<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17247">菄<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18934">㖣<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18937">㖦<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19803">㨂<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19903">㪌<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20190">㰯<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20715">㻌<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20773">㼥<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22322">䚵<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22564">䟝<span class="small">ツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6372">都<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12708">㓃<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13432">喥<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14114">婾<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14977">揰<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16734">硧<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17159">腖<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18796">㓸<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19913">㪗<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20997">䀾<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25061">媮<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15101">暏<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16529">琽<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20783">㼯<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24264">䁈<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14542">嶀<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16542">瑹<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19835">㨮<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22361">䛠<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22520">䞮<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13504">嘟<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13856">墥<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15257">槦<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20732">㻬<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20735">㻯<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23460">䰸<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24053">熥<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11726">曈<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15075">斢<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16682">瞗<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17986">醏<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23083">䩣<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23550">䳉<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21299">䆹<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23095">䩲<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23447">䰤<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23471">䱏<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18507">鵵<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23451">䰩<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17390">蘣<span class="small">ツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23647">䵔<span class="small">ツ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1762">津<span class="small">つ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">つい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="14330">对<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25447">队<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27757">𠂤<span class="small">ツイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="356">対<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24979">坠<span class="small">ツイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="368">追<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12486">俀<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13705">垖<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25239">怼<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12195">桘<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16067">烠<span class="small">ツイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2053">堆<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14059">娷<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14062">娺<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19804">㨃<span class="small">ツイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="563">隊<span class="small">ツイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2063">椎<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11850">腄<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15716">湷<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19890">㩾<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20499">㷃<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21557">䋘<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10278">甀<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10694">硾<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11434">搥<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13817">塠<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18970">㗓<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21223">䅜<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22721">䢡<span class="small">ツイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2748">槌<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6166">對<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11886">膇<span class="small">ツイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1511">墜<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10726">磓<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20899">㾽<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4794">縋<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18066">錗<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21502">䊚<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7403">顀<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2695">鎚<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6878">魋<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11014">懟<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16770">礈<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24347">䨨<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6844">鬌<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17725">譵<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17908">轛<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18139">鑆<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24142">讉<span class="small">ツイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17688">謉<span class="small">ヅイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17692">謘<span class="small">ヅイ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="594">費<span class="small">つい（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1883">弊<span class="small">つい（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1962">潰<span class="small">つい（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24213">㢢<span class="small">つい（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="307">次<span class="small">つい（ず）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2447">朔<span class="small">ついたち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3443">屏<span class="small">ついたて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6488">屛<span class="small">ついたて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14639">幈<span class="small">ついたて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24567">伦<span class="small">つい（で）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="733">序<span class="small">つい（で）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19034">㘧<span class="small">つい（で）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22946">䦽<span class="small">つい（で）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1813">秩<span class="small">つい（で）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1931">倫<span class="small">つい（で）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="358">第<span class="small">つい（で）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5669">卆<span class="small">つい（に）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="561">卒<span class="small">つい（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13001">䘚<span class="small">つい（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4946">訖<span class="small">つい（に）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="323">終<span class="small">つい（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5543">竟<span class="small">つい（に）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1457">遂<span class="small">つい（に）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2702">啄<span class="small">ついば（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3269">啅<span class="small">ついば（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="594">費<span class="small">つい（やす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5273">糜<span class="small">つい（やす）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">つう</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="194">通<span class="small">ツウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="952">痛<span class="small">ツウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9627">蓪<span class="small">ツウ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">つえ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2584">杖<span class="small">つえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4016">枴<span class="small">つえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4128">梃<span class="small">つえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8811">萗<span class="small">つえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12067">梲<span class="small">つえ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="881">策<span class="small">つえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4140">棍<span class="small">つえ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">つか</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="558">束<span class="small">つか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26354">茔<span class="small">つか</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1262">柄<span class="small">つか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3339">垤<span class="small">つか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3158">冢<span class="small">つか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2872">埠<span class="small">つか</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1823">塚<span class="small">つか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12008">棅<span class="small">つか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3348">塋<span class="small">つか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26246">塚<span class="small">つか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12342">塿<span class="small">つか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4701">鋏<span class="small">つか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3357">壟<span class="small">つか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2749">栂<span class="small">つが</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4180">樛<span class="small">つが</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="214">番<span class="small">つが（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="306">使<span class="small">つか（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1083">遣<span class="small">つか（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="214">番<span class="small">つが（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10377">脴<span class="small">つか（え）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5227">痞<span class="small">つか（え）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="716">支<span class="small">つか（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="305">仕<span class="small">つか（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5739">亊<span class="small">つか（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6701">叓<span class="small">つか（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6702">㕝<span class="small">つか（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="309">事<span class="small">つか（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3428">宦<span class="small">つか（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3942">閊<span class="small">つか（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10377">脴<span class="small">つか（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5227">痞<span class="small">つか（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21278">䆠<span class="small">つか（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="214">番<span class="small">つが（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="523">司<span class="small">つかさ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1586">吏<span class="small">つかさ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="466">官<span class="small">つかさ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="613">牧<span class="small">つかさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19362">㟃<span class="small">つかさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3428">宦<span class="small">つかさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9289">聀<span class="small">つかさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11746">曺<span class="small">つかさ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="406">部<span class="small">つかさ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1802">曹<span class="small">つかさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26287">职<span class="small">つかさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3704">揆<span class="small">つかさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21278">䆠<span class="small">つかさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5583">衙<span class="small">つかさ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1929">僚<span class="small">つかさ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1928">寮<span class="small">つかさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8672">郶<span class="small">つかさ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="741">職<span class="small">つかさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9290">軄<span class="small">つかさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3439">尸<span class="small">つかさど（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="317">主<span class="small">つかさど（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="523">司<span class="small">つかさど（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19362">㟃<span class="small">つかさど（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1701">宰<span class="small">つかさど（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9289">聀<span class="small">つかさど（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26287">职<span class="small">つかさど（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1440">掌<span class="small">つかさど（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="465">管<span class="small">つかさど（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2143">斡<span class="small">つかさど（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="741">職<span class="small">つかさど（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9290">軄<span class="small">つかさど（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1156">尽<span class="small">つ（かす）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6030">盡<span class="small">つ（かす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="558">束<span class="small">つか（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5090">鞏<span class="small">つか（ねる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1264">捕<span class="small">つか（まえる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2049">捉<span class="small">つか（まえる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="305">仕<span class="small">つかまつ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1264">捕<span class="small">つか（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3679">拏<span class="small">つか（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3678">拿<span class="small">つか（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27155">㧱<span class="small">つか（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2240">掴<span class="small">つか（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11441">搤<span class="small">つか（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6437">摑<span class="small">つか（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20555">㸕<span class="small">つか（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11534">爴<span class="small">つか（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3745">攫<span class="small">つか（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1242">疲<span class="small">つか（らす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1148">浸<span class="small">つ（かる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14317">寖<span class="small">つ（かる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1824">漬<span class="small">つ（かる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15900">濅<span class="small">つ（かる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5315">芒<span class="small">つか（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="638">労<span class="small">つか（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3186">劬<span class="small">つか（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13158">劳<span class="small">つか（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6065">劵<span class="small">つか（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10385">疩<span class="small">つか（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1242">疲<span class="small">つか（れる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2363">倦<span class="small">つか（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17062">罢<span class="small">つか（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1943">萎<span class="small">つか（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3788">敝<span class="small">つか（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5667">勞<span class="small">つか（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25251">惫<span class="small">つか（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2074">頓<span class="small">つか（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5236">瘁<span class="small">つか（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1870">罷<span class="small">つか（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1883">弊<span class="small">つか（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24213">㢢<span class="small">つか（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3621">憊<span class="small">つか（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3142">儡<span class="small">つか（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5133">羸<span class="small">つか（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="306">使<span class="small">つか（わす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="963">派<span class="small">つか（わす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="506">差<span class="small">つか（わす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1083">遣<span class="small">つか（わす）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">つき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="016">月<span class="small">つき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3333">坏<span class="small">つき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27793">𠽟<span class="small">つき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2275">槻<span class="small">つき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3810">鴾<span class="small">つき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4105">蟾<span class="small">つき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27873">𣠤<span class="small">つき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6143">欟<span class="small">つき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="307">次<span class="small">つぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3654">扈<span class="small">つきそ（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1156">尽<span class="small">つ（きる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13126">冺<span class="small">つ（きる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4341">泯<span class="small">つ（きる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5303">殄<span class="small">つ（きる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="908">除<span class="small">つ（きる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4381">涸<span class="small">つ（きる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5543">竟<span class="small">つ（きる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4565">歇<span class="small">つ（きる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25443">殚<span class="small">つ（きる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5547">竭<span class="small">つ（きる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6030">盡<span class="small">つ（きる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4703">銷<span class="small">つ（きる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5307">殫<span class="small">つ（きる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">つく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei onyomi"><a class="color2" href="2722">筑<span class="small">ツク</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7538">釻<span class="small">つく</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="598">付<span class="small">つ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1202">吐<span class="small">つ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1172">即<span class="small">つ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25268">抢<span class="small">つ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1219">突<span class="small">つ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1877">附<span class="small">つ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15156">枞<span class="small">つ（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6403">突<span class="small">つ（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6432">卽<span class="small">つ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24076">皍<span class="small">つ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1148">浸<span class="small">つ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9311">㫪<span class="small">つ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27838">𢭏<span class="small">つ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="947">著<span class="small">つ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5628">舂<span class="small">つ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14950">捯<span class="small">つ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27845">𣇃<span class="small">つ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="363">着<span class="small">つ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="765">属<span class="small">つ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="899">就<span class="small">つ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3126">傅<span class="small">つ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4487">馮<span class="small">つ（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6410">著<span class="small">つ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3712">搶<span class="small">つ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3714">搗<span class="small">つ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14317">寖<span class="small">つ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11448">摏<span class="small">つ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19842">㨶<span class="small">つ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1443">衝<span class="small">つ（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2498">撞<span class="small">つ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4179">樅<span class="small">つ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4247">膠<span class="small">つ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11005">慿<span class="small">つ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="772">築<span class="small">つ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3622">憑<span class="small">つ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4188">橦<span class="small">つ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15900">濅<span class="small">つ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3735">擣<span class="small">つ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1302">離<span class="small">つ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3652">戳<span class="small">つ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4727">鏗<span class="small">つ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6169">屬<span class="small">つ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27865">𣙇<span class="small">つぐ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3061">弍<span class="small">つ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="307">次<span class="small">つ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1605">亜<span class="small">つ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="364">注<span class="small">つ（ぐ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5705">亞<span class="small">つ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14273">孠<span class="small">つ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="753">接<span class="small">つ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1137">紹<span class="small">つ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4135">椄<span class="small">つ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="560">続<span class="small">つ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1092">継<span class="small">つ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1709">嗣<span class="small">つ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9042">㡭<span class="small">つ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17010">綤<span class="small">つ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19753">㦻<span class="small">つ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4273">踵<span class="small">つ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11372">擑<span class="small">つ（ぐ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2455">纂<span class="small">つ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5830">繼<span class="small">つ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4822">纉<span class="small">つ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6097">續<span class="small">つ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1130">襲<span class="small">つ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6506">纘<span class="small">つ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3165">几<span class="small">つくえ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="844">机<span class="small">つくえ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1493">卓<span class="small">つくえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18838">㔬<span class="small">つくえ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="441">案<span class="small">つくえ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1156">尽<span class="small">つ（くす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25434">歼<span class="small">つ（くす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5303">殄<span class="small">つ（くす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25443">殚<span class="small">つ（くす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5547">竭<span class="small">つ（くす）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6030">盡<span class="small">つ（くす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4703">銷<span class="small">つ（くす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5307">殫<span class="small">つ（くす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5311">殱<span class="small">つ（くす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5310">殲<span class="small">つ（くす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14820">怸<span class="small">つく（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2486">悉<span class="small">つく（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2766">佃<span class="small">つくだ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="903">熟<span class="small">つくづく</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24597">偿<span class="small">つぐな（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1857">賠<span class="small">つぐな（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1746">償<span class="small">つぐな（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3689">捏<span class="small">つく（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11354">揑<span class="small">つく（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4288">蹲<span class="small">つくば（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4288">蹲<span class="small">つくば（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3819">鶇<span class="small">つぐみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3824">鶫<span class="small">つぐみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3670">拑<span class="small">つぐ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4542">箝<span class="small">つぐ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3304">噤<span class="small">つぐ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19268">㝑<span class="small">つくり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11603">㫄<span class="small">つくり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3780">旁<span class="small">つくり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12793">刅<span class="small">つく（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12796">创<span class="small">つく（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="141">作<span class="small">つく（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18688">㑅<span class="small">つく（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12795">戗<span class="small">つく（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1008">為<span class="small">つく（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="762">造<span class="small">つく（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="932">創<span class="small">つく（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6248">爲<span class="small">つく（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8589">艁<span class="small">つく（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="743">製<span class="small">つく（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4872">甄<span class="small">つく（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12794">戧<span class="small">つく（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21900">䒃<span class="small">つく（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2113">弥<span class="small">つくろ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5026">衲<span class="small">つくろ（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2517">葺<span class="small">つくろ（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5924">彌<span class="small">つくろ（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1473">繕<span class="small">つくろ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18163">镾<span class="small">つくろ（う）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">つけ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2490">柘<span class="small">つげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21077">䂞<span class="small">つげ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="598">付<span class="small">つ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1877">附<span class="small">つ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13922">奌<span class="small">つ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="195">点<span class="small">つ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4026">柎<span class="small">つ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4377">淹<span class="small">つ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="363">着<span class="small">つ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="899">就<span class="small">つ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2060">貼<span class="small">つ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4262">跟<span class="small">つ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1824">漬<span class="small">つ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5833">點<span class="small">つ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20543">㸃<span class="small">つ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="505">告<span class="small">つ（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13254">吿<span class="small">つ（げる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1542">赴<span class="small">つ（げる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2096">訃<span class="small">つ（げる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1399">控<span class="small">つ（げる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1755">詔<span class="small">つ（げる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="123">語<span class="small">つ（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4971">誥<span class="small">つ（げる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">つこ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2225">晦<span class="small">つごもり</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">つし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2750">辻<span class="small">つじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6557">黧<span class="small">つじ（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">つた</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="26465">萝<span class="small">つた</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2740">蔦<span class="small">つた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5447">蘿<span class="small">つた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="577">伝<span class="small">つた（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5803">傳<span class="small">つた（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="577">伝<span class="small">つた（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26304">胪<span class="small">つた（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5803">傳<span class="small">つた（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4317">臚<span class="small">つた（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26465">萝<span class="small">つたかずら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5447">蘿<span class="small">つたかずら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1781">拙<span class="small">つたな（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="577">伝<span class="small">つた（わる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5803">傳<span class="small">つた（わる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">つち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="063">土<span class="small">つち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13631">圡<span class="small">つち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27696">𡈽<span class="small">つち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="186">地<span class="small">つち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13663">坔<span class="small">つち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2426">坤<span class="small">つち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12195">桘<span class="small">つち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13738">埊<span class="small">つち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13771">堃<span class="small">つち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2063">椎<span class="small">つち</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2748">槌<span class="small">つち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13861">墬<span class="small">つち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1758">壌<span class="small">つち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14578">嶳<span class="small">つち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2695">鎚<span class="small">つち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4731">鐓<span class="small">つち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5766">壤<span class="small">つち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7817">鐜<span class="small">つち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1856">培<span class="small">つちか（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19385">㟝<span class="small">つちか（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25982">粪<span class="small">つちか（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2890">糞<span class="small">つちか（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6303">蝪<span class="small">つちぐも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3997">霾<span class="small">つちぐも（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13666">块<span class="small">つちくれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19066">㙕<span class="small">つちくれ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1339">塊<span class="small">つちくれ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2904">戊<span class="small">つちのえ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="864">己<span class="small">つちのと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13653">坃<span class="small">つちぶえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12344">塤<span class="small">つちぶえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12343">壎<span class="small">つちぶえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13886">壦<span class="small">つちぶえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3997">霾<span class="small">つちふ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4658">砠<span class="small">つちやま</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">つつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1268">砲<span class="small">つつ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1839">筒<span class="small">つつ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1725">銃<span class="small">つつ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3567">恙<span class="small">つつが</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14371">屣<span class="small">つっかけ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="560">続<span class="small">つづ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2643">蝉<span class="small">つづ（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6459">蟬<span class="small">つづ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1875">譜<span class="small">つづ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6097">續<span class="small">つづ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="560">続<span class="small">つづ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6097">續<span class="small">つづ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13050">伛<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3188">劼<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26294">肃<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3558">恪<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5625">矜<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13897">夈<span class="small">つつし（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1659">恭<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3573">悛<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5630">虔<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5634">祗<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6656">斋<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11065">㤩<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11156">眘<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17105">耸<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19276">㝙<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19932">㪰<span class="small">つつし（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1702">斎<span class="small">つつし（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1729">粛<span class="small">つつし（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2162">寅<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25248">悫<span class="small">つつし（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="853">敬<span class="small">つつし（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2331">欽<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5546">竦<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11066">愘<span class="small">つつし（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1150">慎<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3127">傴<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3194">飭<span class="small">つつし（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6088">愼<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6283">肅<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11064">愙<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19690">㥤<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23249">䬩<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3149">兢<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3600">愨<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3603">愿<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10988">慤<span class="small">つつし（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1662">謹<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4862">聳<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6012">齋<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4282">蹙<span class="small">つつし（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6413">謹<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8426">䠞<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3772">齪<span class="small">つつし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24777">叽<span class="small">つづし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23910">嘰<span class="small">つづし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11156">眘<span class="small">つつま（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1150">慎<span class="small">つつま（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6088">愼<span class="small">つつま（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11156">眘<span class="small">つつま（しやか）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1150">慎<span class="small">つつま（しやか）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6088">愼<span class="small">つつま（しやか）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="619">約<span class="small">つづま（やか）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1389">倹<span class="small">つづま（やか）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5839">儉<span class="small">つづま（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3335">坡<span class="small">つつみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5182">陂<span class="small">つつみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13747">埞<span class="small">つつみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1196">堤<span class="small">つつみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3347">堡<span class="small">つつみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13785">堢<span class="small">つつみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2783">塘<span class="small">つつみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5331">苞<span class="small">つつ（み）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9996">褁<span class="small">つつ（み）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5050">裹<span class="small">つつ（み）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1090">鼓<span class="small">つづみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6620">鼔<span class="small">つづみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5832">皷<span class="small">つづみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25831">皼<span class="small">つづみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6018">勹<span class="small">つつ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="611">包<span class="small">つつ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5331">苞<span class="small">つつ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19150">㚿<span class="small">つつ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="256">温<span class="small">つつ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5389">葆<span class="small">つつ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9996">褁<span class="small">つつ（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6447">溫<span class="small">つつ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5050">裹<span class="small">つつ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18261">鞰<span class="small">つつ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7355">鞱<span class="small">つつ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4355">韜<span class="small">つつ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7354">韞<span class="small">つつ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="619">約<span class="small">つづ（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1969">葛<span class="small">つづら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27744">𧃴<span class="small">つづら</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2755">綴<span class="small">つづ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4469">輟<span class="small">つづ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10071">褛<span class="small">つづれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5060">褸<span class="small">つづれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5070">襤<span class="small">つづれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5829">繿<span class="small">つづれ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">つて</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="577">伝<span class="small">つて</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5803">傳<span class="small">つて</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">つと</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5331">苞<span class="small">つと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5336">苴<span class="small">つと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4646">髱<span class="small">つと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="322">集<span class="small">つど（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27777">𠍱<span class="small">つど（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7977">雧<span class="small">つど（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2527">夙<span class="small">つと（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24730">务<span class="small">つと（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="813">務<span class="small">つと（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="852">勤<span class="small">つと（まる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6376">勤<span class="small">つと（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24730">务<span class="small">つと（め）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="419">役<span class="small">つと（め）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9289">聀<span class="small">つと（め）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="813">務<span class="small">つと（め）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26287">职<span class="small">つと（め）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="852">勤<span class="small">つと（め）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6376">勤<span class="small">つと（め）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="741">職<span class="small">つと（め）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9290">軄<span class="small">つと（め）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="077">力<span class="small">つと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3068">仂<span class="small">つと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24730">务<span class="small">つと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26933">迈<span class="small">つと（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="579">努<span class="small">つと（める）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2468">孜<span class="small">つと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3187">劭<span class="small">つと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3188">劼<span class="small">つと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18583">黾<span class="small">つと（める）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6375">勉<span class="small">つと（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="412">勉<span class="small">つと（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="111">強<span class="small">つと（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="813">務<span class="small">つと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3191">勗<span class="small">つと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6485">勖<span class="small">つと（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="852">勤<span class="small">つと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3425">孳<span class="small">つと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3945">閔<span class="small">つと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6510">孶<span class="small">つと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14742">强<span class="small">つと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15133">朂<span class="small">つと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3849">黽<span class="small">つと（める）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6376">勤<span class="small">つと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2320">彊<span class="small">つと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5530">邁<span class="small">つと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3628">懃<span class="small">つと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3631">懋<span class="small">つと（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">つな</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="20025">㭃<span class="small">つな</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1705">索<span class="small">つな</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1403">綱<span class="small">つな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21600">䌇<span class="small">つな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25281">挛<span class="small">つな（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17028">縘<span class="small">つな（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2354">繋<span class="small">つな（がる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6455">繫<span class="small">つな（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3744">攣<span class="small">つな（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14027">娄<span class="small">つな（がれる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2995">婁<span class="small">つな（がれる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="854">系<span class="small">つな（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="286">係<span class="small">つな（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14027">娄<span class="small">つな（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2995">婁<span class="small">つな（ぐ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4755">絆<span class="small">つな（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4758">紲<span class="small">つな（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1300">絡<span class="small">つな（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4764">絏<span class="small">つな（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1011">維<span class="small">つな（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4780">綰<span class="small">つな（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4783">緤<span class="small">つな（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17028">縘<span class="small">つな（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2354">繋<span class="small">つな（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4797">縻<span class="small">つな（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4803">縲<span class="small">つな（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21611">䌕<span class="small">つな（ぐ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6455">繫<span class="small">つな（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5598">羈<span class="small">つな（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6311">覊<span class="small">つな（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9126">纝<span class="small">つな（ぐ）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">つね</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="224">毎<span class="small">つね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25092">寻<span class="small">つね</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6443">每<span class="small">つね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24190">㔰<span class="small">つね</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1100">恒<span class="small">つね</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5962">恆<span class="small">つね</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="737">常<span class="small">つね</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1919">庸<span class="small">つね</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1157">尋<span class="small">つね</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1030">雅<span class="small">つね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19712">㦂<span class="small">つね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3516">彜<span class="small">つね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14757">彛<span class="small">つね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3515">彝<span class="small">つね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24190">㔰<span class="small">つね（に）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1100">恒<span class="small">つね（に）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5962">恆<span class="small">つね（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3665">抓<span class="small">つね（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">つの</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="097">角<span class="small">つの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8066">觥<span class="small">つのさかずき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8067">觵<span class="small">つのさかずき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5353">莪<span class="small">つのよもぎ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1550">募<span class="small">つの（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">つは</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="2052">唾<span class="small">つば</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2244">鍔<span class="small">つば</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4728">鐔<span class="small">つば</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2052">唾<span class="small">つばき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2746">椿<span class="small">つばき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5604">翅<span class="small">つばさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9225">翄<span class="small">つばさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17089">翤<span class="small">つばさ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1297">翼<span class="small">つばさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7084">鳦<span class="small">つばめ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2188">燕<span class="small">つばめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20538">㷼<span class="small">つばめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7213">鷰<span class="small">つばめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7214">䴏<span class="small">つばめ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">つひ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="27812">𡱖<span class="small">つび</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts21">
                    <h3 class="ttl_while">つふ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1303">粒<span class="small">つぶ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2962">螺<span class="small">つぶ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5140">顆<span class="small">つぶ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="281">具<span class="small">つぶさ（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14820">怸<span class="small">つぶさ（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12581">俻<span class="small">つぶさ（に）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2486">悉<span class="small">つぶさ（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12580">偹<span class="small">つぶさ（に）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="793">備<span class="small">つぶさ（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12579">僃<span class="small">つぶさ（に）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1962">潰<span class="small">つぶ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10766">䃯<span class="small">つぶて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4680">礫<span class="small">つぶて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3235">呟<span class="small">つぶや（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="004">円<span class="small">つぶら（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12694">圎<span class="small">つぶら（か）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5769">圓<span class="small">つぶら（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5166">瞑<span class="small">つぶ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1962">潰<span class="small">つぶ（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts22">
                    <h3 class="ttl_while">つほ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1825">坪<span class="small">つぼ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3334">坩<span class="small">つぼ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25022">壶<span class="small">つぼ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2376">壷<span class="small">つぼ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2375">壺<span class="small">つぼ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="277">局<span class="small">つぼね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5354">莟<span class="small">つぼみ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5420">蕾<span class="small">つぼみ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2448">窄<span class="small">つぼ（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5420">蕾<span class="small">つぼ（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts23">
                    <h3 class="ttl_while">つま</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="2064">爪<span class="small">つま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="281">具<span class="small">つま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="707">妻<span class="small">つま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="152">室<span class="small">つま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5049">褄<span class="small">つま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2502">嬬<span class="small">つま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13048">伖<span class="small">つまこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3422">孥<span class="small">つまこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3487">帑<span class="small">つまこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27898">𤩍<span class="small">つまごと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="619">約<span class="small">つま（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1389">倹<span class="small">つま（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5839">儉<span class="small">つま（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4258">跌<span class="small">つまず（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4261">跋<span class="small">つまず（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8369">跎<span class="small">つまず（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8378">䟦<span class="small">つまず（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2074">頓<span class="small">つまず（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4277">蹉<span class="small">つまず（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4287">蹶<span class="small">つまず（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8434">蹷<span class="small">つまず（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4296">躓<span class="small">つまず（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5546">竦<span class="small">つま（だつ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4253">跂<span class="small">つまだ（てる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5612">翹<span class="small">つまだ（てる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5069">襭<span class="small">つまばさ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25090">审<span class="small">つまび（らか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14304">宷<span class="small">つまび（らか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3424">孰<span class="small">つまび（らか）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1140">詳<span class="small">つまび（らか）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1452">審<span class="small">つまび（らか）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2066">諦<span class="small">つまび（らか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4685">鈕<span class="small">つまみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3665">抓<span class="small">つま（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3673">拈<span class="small">つま（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1197">摘<span class="small">つま（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1420">撮<span class="small">つま（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1054">詰<span class="small">つ（まる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts24">
                    <h3 class="ttl_while">つみ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5317">辜<span class="small">つみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="711">罪<span class="small">つみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9181">辠<span class="small">つみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4999">謫<span class="small">つみ（する）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8220">讁<span class="small">つみ（する）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts25">
                    <h3 class="ttl_while">つむ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2618">錘<span class="small">つむ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3665">抓<span class="small">つ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16816">积<span class="small">つ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3180">剪<span class="small">つ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1054">詰<span class="small">つ（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2606">稔<span class="small">つ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24273">䄒<span class="small">つ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1197">摘<span class="small">つ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26511">蕴<span class="small">つ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="548">積<span class="small">つ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5423">薀<span class="small">つ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5438">蘊<span class="small">つ（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2724">紬<span class="small">つむぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21629">䌧<span class="small">つむぎ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1894">紡<span class="small">つむ（ぐ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2724">紬<span class="small">つむ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4788">緝<span class="small">つむ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="751">績<span class="small">つむ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21629">䌧<span class="small">つむ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12351">猋<span class="small">つむじかぜ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4366">颶<span class="small">つむじかぜ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4368">飄<span class="small">つむじかぜ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6349">飃<span class="small">つむじかぜ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4365">飆<span class="small">つむじかぜ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7446">飇<span class="small">つむじかぜ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7447">飈<span class="small">つむじかぜ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25629">飊<span class="small">つむじかぜ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts26">
                    <h3 class="ttl_while">つめ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="2064">爪<span class="small">つめ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1397">甲<span class="small">つめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2672">蚤<span class="small">つめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22112">䖣<span class="small">つめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22161">䗢<span class="small">つめ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="633">冷<span class="small">つめ（たい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3161">冽<span class="small">つめ（たい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1054">詰<span class="small">つ（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts27">
                    <h3 class="ttl_while">つも</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="16816">积<span class="small">つ（もる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="548">積<span class="small">つ（もる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts28">
                    <h3 class="ttl_while">つや</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1177">沢<span class="small">つや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26336">艳<span class="small">つや</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5466">釉<span class="small">つや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5794">澤<span class="small">つや</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1953">艶<span class="small">つや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6296">艷<span class="small">つや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9356">豓<span class="small">つや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9357">豔<span class="small">つや</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts29">
                    <h3 class="ttl_while">つゆ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1728">汁<span class="small">つゆ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1315">露<span class="small">つゆ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts30">
                    <h3 class="ttl_while">つよ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3074">伉<span class="small">つよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12773">刚<span class="small">つよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12843">劲<span class="small">つよ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2249">侃<span class="small">つよ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="620">勇<span class="small">つよ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3189">勁<span class="small">つよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12845">勈<span class="small">つよ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1691">剛<span class="small">つよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3103">倔<span class="small">つよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3190">勍<span class="small">つよ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="111">強<span class="small">つよ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1999">梗<span class="small">つよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4123">梟<span class="small">つよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5520">逎<span class="small">つよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12438">偘<span class="small">つよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19750">㦷<span class="small">つよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22452">䝘<span class="small">つよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12772">㓻<span class="small">つよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14742">强<span class="small">つよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5519">遒<span class="small">つよ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1102">豪<span class="small">つよ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2276">毅<span class="small">つよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12052">䲷<span class="small">つよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2320">彊<span class="small">つよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13107">儫<span class="small">つよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2310">禦<span class="small">つよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18489">鴵<span class="small">つよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4506">驃<span class="small">つよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4509">驕<span class="small">つよ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4510">驍<span class="small">つよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27783">𠠺<span class="small">つよし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="111">強<span class="small">つよ（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14742">强<span class="small">つよ（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="111">強<span class="small">つよ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14742">强<span class="small">つよ（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts31">
                    <h3 class="ttl_while">つら</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="7278">靣<span class="small">つら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="416">面<span class="small">つら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1454">辛<span class="small">つら（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="715">酸<span class="small">つら（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3110">倩<span class="small">つらつら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="903">熟<span class="small">つらつら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="436">列<span class="small">つら（なる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17060">罗<span class="small">つら（なる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23889">丽<span class="small">つら（なる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2964">洛<span class="small">つら（なる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25680">牵<span class="small">つら（なる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="636">連<span class="small">つら（なる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15532">洜<span class="small">つら（なる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2366">牽<span class="small">つら（なる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10199">琑<span class="small">つら（なる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14103">婯<span class="small">つら（なる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27691">連<span class="small">つら（なる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20073">㮌<span class="small">つら（なる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="815">綿<span class="small">つら（なる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4631">瑣<span class="small">つら（なる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15018">撁<span class="small">つら（なる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3009">聨<span class="small">つら（なる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5912">緜<span class="small">つら（なる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7253">䴡<span class="small">つら（なる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26292">聫<span class="small">つら（なる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17122">聮<span class="small">つら（なる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3008">聯<span class="small">つら（なる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1309">麗<span class="small">つら（なる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1920">羅<span class="small">つら（なる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4812">繹<span class="small">つら（なる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1984">串<span class="small">つらぬ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1844">洞<span class="small">つらぬ（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2638">穿<span class="small">つらぬ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1351">貫<span class="small">つらぬ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21282">䆤<span class="small">つらぬ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22481">䝺<span class="small">つらぬ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="436">列<span class="small">つら（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12811">刘<span class="small">つら（ねる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="636">連<span class="small">つら（ねる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="953">展<span class="small">つら（ねる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1509">陳<span class="small">つら（ねる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1527">排<span class="small">つら（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17878">軙<span class="small">つら（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27691">連<span class="small">つら（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4574">肆<span class="small">つら（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13820">塦<span class="small">つら（ねる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2975">劉<span class="small">つら（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3009">聨<span class="small">つら（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26292">聫<span class="small">つら（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17122">聮<span class="small">つら（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3008">聯<span class="small">つら（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4812">繹<span class="small">つら（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19333">㞡<span class="small">つら（ねる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts32">
                    <h3 class="ttl_while">つり</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="2341">鈎<span class="small">つりばり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2340">鉤<span class="small">つりばり</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts33">
                    <h3 class="ttl_while">つる</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1680">弦<span class="small">つる</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2372">絃<span class="small">つる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4689">鉉<span class="small">つる</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2846">蔓<span class="small">つる</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2065">鶴<span class="small">つる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23589">䳽<span class="small">つる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26341">鶴<span class="small">つる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6470">鸖<span class="small">つる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8026">靎<span class="small">つる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8027">靍<span class="small">つる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18247">靏<span class="small">つる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2733">吊<span class="small">つ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25281">挛<span class="small">つ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1820">釣<span class="small">つ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3744">攣<span class="small">つ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1087">剣<span class="small">つるぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27781">𠝏<span class="small">つるぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5813">剱<span class="small">つるぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5943">釼<span class="small">つるぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7531">釰<span class="small">つるぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4701">鋏<span class="small">つるぎ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5810">劍<span class="small">つるぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13154">劎<span class="small">つるぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5811">劔<span class="small">つるぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5812">劒<span class="small">つるぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2733">吊<span class="small">つる（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2565">橡<span class="small">つるばみ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts34">
                    <h3 class="ttl_while">つれ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="2296">仇<span class="small">つれあい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14330">对<span class="small">つれあい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="356">対<span class="small">つれあい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24585">俪<span class="small">つれあい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="387">配<span class="small">つれあい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5508">逑<span class="small">つれあい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6166">對<span class="small">つれあい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3144">儷<span class="small">つれあい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18747">㒧<span class="small">つれあい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="636">連<span class="small">つ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27691">連<span class="small">つ（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts35">
                    <h3 class="ttl_while">つわ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3069">仗<span class="small">つわもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2525">戎<span class="small">つわもの</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="605">兵<span class="small">つわもの</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="488">軍<span class="small">つわもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5484">賁<span class="small">つわもの</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts36">
                    <h3 class="ttl_while">つん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3185">劈<span class="small">つんざ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14281">孹<span class="small">つんざ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3729">擘<span class="small">つんざ（く）</span></a></li>
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