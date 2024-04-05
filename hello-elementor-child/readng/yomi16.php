<?php
/*
 * Template Name: Yomi16
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
               <h1 class="ttl_main">音訓検索「た」</h1>
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
               <p>「た」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>た</option>
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
                         <li id="parts1_menu"><a href="#parts1">た</a></li>
                         <li id="parts2_menu"><a href="#parts2">たい</a></li>
                         <li id="parts3_menu"><a href="#parts3">たえ</a></li>
                         <li id="parts4_menu"><a href="#parts4">たお</a></li>
                         <li id="parts5_menu"><a href="#parts5">たか</a></li>
                         <li id="parts6_menu"><a href="#parts6">たき</a></li>
                         <li id="parts7_menu"><a href="#parts7">たく</a></li>
                         <li id="parts8_menu"><a href="#parts8">たけ</a></li>
                         <li id="parts9_menu"><a href="#parts9">たこ</a></li>
                         <li id="parts10_menu"><a href="#parts10">たし</a></li>
                         <li id="parts11_menu"><a href="#parts11">たす</a></li>
                         <li id="parts12_menu"><a href="#parts12">たた</a></li>
                         <li id="parts13_menu"><a href="#parts13">たち</a></li>
                         <li id="parts14_menu"><a href="#parts14">たつ</a></li>
                         <li id="parts15_menu"><a href="#parts15">たて</a></li>
                         <li id="parts16_menu"><a href="#parts16">たと</a></li>
                         <li id="parts17_menu"><a href="#parts17">たな</a></li>
                         <li id="parts18_menu"><a href="#parts18">たに</a></li>
                         <li id="parts19_menu"><a href="#parts19">たぬ</a></li>
                         <li id="parts20_menu"><a href="#parts20">たね</a></li>
                         <li id="parts21_menu"><a href="#parts21">たの</a></li>
                         <li id="parts22_menu"><a href="#parts22">たは</a></li>
                         <li id="parts23_menu"><a href="#parts23">たひ</a></li>
                         <li id="parts24_menu"><a href="#parts24">たふ</a></li>
                         <li id="parts25_menu"><a href="#parts25">たへ</a></li>
                         <li id="parts26_menu"><a href="#parts26">たほ</a></li>
                         <li id="parts27_menu"><a href="#parts27">たま</a></li>
                         <li id="parts28_menu"><a href="#parts28">たみ</a></li>
                         <li id="parts29_menu"><a href="#parts29">たむ</a></li>
                         <li id="parts30_menu"><a href="#parts30">ため</a></li>
                         <li id="parts31_menu"><a href="#parts31">たも</a></li>
                         <li id="parts32_menu"><a href="#parts32">たや</a></li>
                         <li id="parts33_menu"><a href="#parts33">たゆ</a></li>
                         <li id="parts34_menu"><a href="#parts34">たよ</a></li>
                         <li id="parts35_menu"><a href="#parts35">たら</a></li>
                         <li id="parts36_menu"><a href="#parts36">たり</a></li>
                         <li id="parts37_menu"><a href="#parts37">たる</a></li>
                         <li id="parts38_menu"><a href="#parts38">たれ</a></li>
                         <li id="parts39_menu"><a href="#parts39">たわ</a></li>
                         <li id="parts40_menu"><a href="#parts40">たん</a></li>
                         <li id="parts41_menu"><a href="#parts41">たー</a></li>
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
                    <h3 class="ttl_while">た</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="055">大<span class="small">タ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="180">太<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13032">亣<span class="small">タ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="353">他<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6115">它<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12374">仛<span class="small">タ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="181">多<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4002">朶<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6157">夛<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7912">阤<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11277">扡<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11935">朵<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13230">吒<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13232">吔<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13939">她<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13942">奼<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14767">彵<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15429">汏<span class="small">タ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1804">妥<span class="small">タ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2051">汰<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3078">佗<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3452">岔<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8570">迆<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11949">杕<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16002">灹<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16003">灺<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16294">牠<span class="small">タ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2683">陀<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3084">侘<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4339">沱<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7920">陁<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10829">秅<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11306">拕<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11307">拖<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12760">刴<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12761">剁<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13290">咃<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13301">咜<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13674">坨<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14412">岮<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15476">沲<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16363">狏<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25908">祂<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2679">柁<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3255">咤<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6339">陏<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7928">陊<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8569">迤<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8576">迱<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9800">虵<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11075">㤞<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11329">挓<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11936">䒳<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11979">柂<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12375">姹<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13710">垛<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13711">垜<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13712">垞<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14022">姼<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14351">尮<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14930">挅<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14931">挆<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16033">炧<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16034">炨<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17223">茤<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19156">㛆<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20582">㸰<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20583">㸱<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21936">䒲<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23942">奓<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24802">哚<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26847">㛊<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5367">荼<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8085">訑<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8953">粏<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10654">砣<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12038">桗<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15374">毤<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16280">爹<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16721">砤<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17541">袉<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17633">訍<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19372">㟎<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20768">㼠<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20851">㾃<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21782">䏧<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25283">挝<span class="small">タ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1715">蛇<span class="small">タ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2052">唾<span class="small">タ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2680">舵<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9016">紽<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9329">䑨<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12545">偧<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13765">埵<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13766">埻<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14471">崜<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14692">庹<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15199">梌<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15612">涶<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16601">痑<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16823">秺<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17556">袳<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19530">㢉<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21206">䅊<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21273">䆛<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21677">䍫<span class="small">タ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1806">惰<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2681">詑<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5191">隋<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8369">跎<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8736">酡<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11430">搽<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13797">堶<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14143">媠<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19062">㙐<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19693">㥩<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19810">㨊<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20721">㻔<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22658">䡐<span class="small">タ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2682">詫<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4693">鉈<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4766">綏<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5076">躱<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6712">馱<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8389">跥<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8466">躲<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12981">毻<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15221">椯<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17821">跢<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18717">㒀<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21223">䅜<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21813">䐒<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23071">䩔<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26833">趓<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26845">跺<span class="small">タ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1803">駄<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9075">綞<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16752">碢<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17580">褡<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18992">㗬<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19331">㞜<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21115">䃎<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22231">䙃<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22362">䛢<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22588">䟻<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27430">䭾<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4493">駝<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6722">駞<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11141">憜<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14202">嫷<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14562">嶞<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15029">撱<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15853">潳<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18049">鋖<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20730">㻧<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21592">䋾<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21840">䐱<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22769">䣝<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23122">䪑<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23161">䫂<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3805">鴕<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6915">鮀<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7057">䱇<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8412">踷<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11500">撾<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17172">膪<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17626">觰<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17842">踻<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23464">䰿<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23621">䴱<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7732">鍺<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12278">檛<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17178">膼<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22853">䤻<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24553">亸<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6626">鼧<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18494">鵎<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22062">䕢<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22257">䙤<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2684">騨<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6844">鬌<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8472">軃<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17381">藸<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17711">譇<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21520">䊬<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22401">䜏<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22446">䝐<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22624">䠤<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24094">簻<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7005">鰖<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13585">嚲<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20162">㰐<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26232">鼍<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23652">䵙<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6478">驒<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7056">鱓<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23508">䲊<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23944">奲<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6571">鼉<span class="small">タ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23403">䯬<span class="small">タ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="033">手<span class="small">た</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="062">田<span class="small">た</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3253">咫<span class="small">た</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2055">誰<span class="small">た</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="055">大<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13032">亣<span class="small">ダ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="354">打<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4002">朶<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11935">朵<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12681">兊<span class="small">ダ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1804">妥<span class="small">ダ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2077">那<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3148">兌<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13111">兑<span class="small">ダ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2683">陀<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4339">沱<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10829">秅<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12760">刴<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12761">剁<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14412">岮<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14921">抲<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15476">沲<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16363">狏<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25371">枤<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2679">柁<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3679">拏<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6339">陏<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9800">虵<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11936">䒳<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13710">垛<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13711">垜<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13712">垞<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16714">砈<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17949">郍<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18699">㑚<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19152">㛂<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19469">㡅<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20582">㸰<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20583">㸱<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21725">䎠<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3388">娜<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3678">拿<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5367">荼<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8953">粏<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11247">挐<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11346">挼<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11350">挪<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13333">哪<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17541">袉<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20768">㼠<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20851">㾃<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21782">䏧<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25547">难<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27155">㧱<span class="small">ダ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1715">蛇<span class="small">ダ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2052">唾<span class="small">ダ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2680">舵<span class="small">ダ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2687">雫<span class="small">ダ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4127">梛<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9329">䑨<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11376">捼<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13076">偄<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13766">埻<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15199">梌<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18665">㐡<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18931">㖠<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19530">㢉<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21206">䅊<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21544">䋈<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21677">䍫<span class="small">ダ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1805">堕<span class="small">ダ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1806">惰<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5191">隋<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8117">詉<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8369">跎<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9822">䖳<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11138">愞<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13788">堧<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13797">堶<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14143">媠<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17555">袲<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22658">䡐<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24607">傩<span class="small">ダ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2685">楕<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6712">馱<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8389">跥<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17296">蒘<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21223">䅜<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22350">䛔<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23071">䩔<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24945">嗲<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25403">椭<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26845">跺<span class="small">ダ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1803">駄<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8986">稬<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11453">摣<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16752">碢<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22588">䟻<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27430">䭾<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4493">駝<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5767">墮<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6722">駞<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11141">憜<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13863">墯<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14202">嫷<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14562">嶞<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17669">誽<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20730">㻧<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21592">䋾<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23122">䪑<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23259">䬷<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24145">蹃<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2686">橢<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3805">鴕<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12151">㯐<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15282">橠<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17481">螚<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17842">踻<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3633">懦<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11200">懧<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22853">䤻<span class="small">ダ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="958">難<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8984">糥<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2684">騨<span class="small">ダ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6417">難<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8472">軃<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8985">穤<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22446">䝐<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5274">糯<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3143">儺<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12950">㔮<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6478">驒<span class="small">ダ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20171">㰙<span class="small">ダ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">たい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="055">大<span class="small">タイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="180">太<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5905">歹<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13032">亣<span class="small">タイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="183">台<span class="small">タイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="355">代<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12891">歺<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13124">冭<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13912">夳<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14330">对<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18678">㐲<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25447">队<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11029">忕<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12681">兊<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14727">弚<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15429">汏<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19344">㞭<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20475">㶡<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26388">㑀<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27757">𠂤<span class="small">タイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="182">体<span class="small">タイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="356">対<span class="small">タイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2051">汰<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2688">呆<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3148">兌<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5822">豸<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11038">忲<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11622">旲<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13111">兑<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13186">厎<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13667">坘<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24782">呔<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2689">岱<span class="small">タイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2694">苔<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3734">抬<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6044">隶<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8639">邰<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11785">孡<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13295">咍<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13620">囼<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13678">坮<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13690">坻<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13917">奃<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14361">屉<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14616">帒<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19582">㣍<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21072">䂙<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24296">䒫<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25233">态<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25800">甙<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26298">肽<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27290">㳔<span class="small">タイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="357">待<span class="small">タイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="768">退<span class="small">タイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1174">耐<span class="small">タイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1487">胎<span class="small">タイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1488">怠<span class="small">タイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1513">帝<span class="small">タイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2691">殆<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4623">玳<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8577">迨<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10128">珆<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10782">祋<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10964">㤗<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11994">枱<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12397">带<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12486">俀<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12487">侻<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13705">垖<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15164">柋<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16039">炱<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16040">炲<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19524">㢂<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19897">㪆<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19966">㫝<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22708">䢑<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24299">䓁<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25239">怼<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26533">虿<span class="small">タイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="564">帯<span class="small">タイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1807">泰<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8480">軑<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14050">娧<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14938">挮<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15374">毤<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16067">烠<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17186">舦<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17539">袃<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18862">㕍<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19053">㙂<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19307">㞂<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19369">㟋<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19372">㟎<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21658">䍕<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21783">䏨<span class="small">タイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1179">脱<span class="small">タイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1486">逮<span class="small">タイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1490">袋<span class="small">タイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2053">堆<span class="small">タイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2690">梯<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4754">紿<span class="small">タイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6173">帶<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7537">釱<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7941">陮<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9410">菭<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11824">脫<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12547">偙<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13759">埭<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13766">埻<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14368">屜<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14956">掋<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15197">梊<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17109">聉<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17151">脮<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17259">菧<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17427">蚮<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18794">㓳<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19529">㢈<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19665">㥆<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19791">㧳<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19804">㨃<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20231">㱣<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20344">㳷<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21648">䍉<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21791">䏲<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22782">䣬<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26867">軚<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27092">酞<span class="small">タイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="563">隊<span class="small">タイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="767">貸<span class="small">タイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1175">替<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4142">棣<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4957">詒<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5410">蒂<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5680">躰<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7556">鈦<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8370">跆<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12576">傣<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13930">奤<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14117">媂<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14370">屟<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14784">徥<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14959">掰<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16105">焞<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17789">趆<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17885">軧<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17886">軩<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18712">㑷<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18843">㔸<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18968">㗍<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19909">㪓<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20062">㭽<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20723">㻖<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20953">䀃<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20992">䀸<span class="small">タイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1489">滞<span class="small">タイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2692">碓<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6512">瑇<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7586">鉙<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11431">搋<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11434">搥<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12548">僀<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12981">毻<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13817">塠<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14516">嵟<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14700">廌<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15729">溙<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16607">痽<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17004">綐<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17162">腣<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17821">跢<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17979">酨<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18025">鉪<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18970">㗓<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19485">㡗<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19695">㥭<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19990">㬃<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20516">㷘<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21320">䇏<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21810">䐎<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21867">䑓<span class="small">タイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="769">態<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2693">腿<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4367">颱<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5409">蔕<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6166">對<span class="small">タイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6239">滯<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6293">臺<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7087">䲦<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8827">箉<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9623">蓷<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10706">䃍<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10995">㦅<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12194">榸<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12619">僓<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14706">廗<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16906">箈<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17118">聜<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19331">㞜<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20890">㾯<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21370">䈆<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23077">䩚<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23250">䬫<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24050">煺<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24252">㷟<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4492">駘<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5058">褪<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7965">隤<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8861">䈚<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9880">蝳<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10726">磓<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10994">慸<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11004">憞<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12418">骵<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12651">㒗<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13855">墤<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14356">尵<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17021">緿<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18280">頧<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19417">㠆<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20108">㯂<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20898">㾼<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20899">㾽<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21836">䐭<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21840">䐱<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22029">䔶<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22032">䔹<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22304">䚞<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22305">䚟<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22798">䣽<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23080">䩟<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24312">䔻<span class="small">タイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2066">諦<span class="small">タイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2696">黛<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5139">頽<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6916">鮐<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7392">頹<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7393">頺<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7694">錞<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11003">憝<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11724">曃<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11751">㬱<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12650">儓<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15279">橔<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16232">燤<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17172">膪<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17174">膭<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17808">趧<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19090">㙵<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20902">㿃<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21502">䊚<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22307">䚢<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22308">䚣<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23222">䬈<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24765">叇<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26037">鮘<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26550">螁<span class="small">タイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2054">戴<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3733">擡<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5433">薹<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6735">駾<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9349">艜<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9695">薱<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10439">㿉<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11885">骽<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14248">嬯<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14892">懛<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15921">濧<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17688">謉<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17692">謘<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18486">鴭<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19008">㘆<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19436">㠚<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20541">㸀<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21734">䎮<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21754">䏄<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22771">䣟<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22853">䤻<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23168">䫋<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24146">蹆<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2695">鎚<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6878">魋<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8429">蹛<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9947">蠆<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11014">懟<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12292">檯<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15926">濻<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16937">簤<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17376">藬<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20007">㬣<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20619">㹗<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22391">䜃<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22620">䠠<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24347">䨨<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8203">譈<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8438">蹪<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10894">穨<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11572">斄<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15950">瀩<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17384">蘈<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21623">䌡<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23392">䯟<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24041">瀢<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24363">䭔<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4731">鐓<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6329">軆<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7812">鐟<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7817">鐜<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15962">瀻<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16942">籉<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18238">霴<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18293">顡<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18372">騩<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27887">𩪆<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10453">㿗<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13593">囆<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17908">轛<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18531">鷈<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23695">䶏<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6551">黱<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10097">襶<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23044">䨴<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23114">䪆<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6354">體<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18550">鷻<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24142">讉<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3993">靆<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24326">䘍<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23697">䶑<span class="small">タイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23049">䨺<span class="small">タイ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6990">鮉<span class="small">たい</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2745">鯛<span class="small">たい</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2697">乃<span class="small">ダイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="055">大<span class="small">ダイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="180">太<span class="small">ダイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="206">内<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12696">內<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13032">亣<span class="small">ダイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="183">台<span class="small">ダイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="355">代<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13937">奶<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18678">㐲<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15395">氖<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18685">㐻<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20475">㶡<span class="small">ダイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="184">弟<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5822">豸<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10343">疓<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11622">旲<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24782">呔<span class="small">ダイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2078">奈<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3734">抬<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9412">苐<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13678">坮<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13975">妳<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15398">氝<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19142">㚷<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24296">䒫<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25371">枤<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25800">甙<span class="small">ダイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1174">耐<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2700">廼<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9252">耏<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12003">柰<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13191">厗<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14022">姼<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15164">柋<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25492">氞<span class="small">ダイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="785">能<span class="small">ダイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2698">悌<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2699">迺<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13073">倷<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14044">娞<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14047">娣<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15582">浽<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17996">釢<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18918">㖒<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19369">㟋<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19599">㣢<span class="small">ダイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="358">第<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13077">偍<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13759">埭<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16655">眱<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17151">脮<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17268">萘<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19567">㢻<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19665">㥆<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20861">㾍<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22782">䣬<span class="small">ダイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="775">提<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4142">棣<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5157">睇<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11848">腇<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12153">㮈<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14117">媂<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14141">媞<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14784">徥<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14849">惿<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15676">渿<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17886">軩<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18948">㖷<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20723">㻖<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21342">䇧<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23405">䯮<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12152">㮏<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13445">嗁<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14990">搱<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16532">瑅<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17923">遆<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19485">㡗<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19990">㬃<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20282">㲡<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20516">㷘<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20755">㼏<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21867">䑓<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21887">䑯<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6293">臺<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16179">熋<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16754">碮<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16906">箈<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18035">銐<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20789">㼵<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21370">䈆<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23016">䨑<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23077">䩚<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23250">䬫<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4492">駘<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6575">鼐<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10063">褦<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15006">摨<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15823">漽<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16757">磃<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18041">銴<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21381">䈕<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22029">䔶<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23991">徲<span class="small">ダイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2701">醍<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5283">餒<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10064">褹<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17481">螚<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17808">趧<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19090">㙵<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22308">䚣<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23263">䬾<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3733">擡<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5433">薹<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7477">餧<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14246">嬭<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14248">嬯<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14282">孻<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19008">㘆<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22534">䞾<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24328">䙝<span class="small">ダイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="359">題<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6960">鮾<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15926">濻<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16937">簤<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22620">䠠<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6961">鯘<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22104">䖙<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23480">䱞<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24041">瀢<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19502">㡪<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22186">䘅<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16803">禵<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18542">鷤<span class="small">ダイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18597">鼶<span class="small">ダイ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4351">牀<span class="small">だい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5403">蔔<span class="small">だいこん</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4185">橙<span class="small">だいだい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4367">颱<span class="small">たいふう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5329">苣<span class="small">たいまつ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4904">炬<span class="small">たいまつ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="410">平<span class="small">たい（ら）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3499">幵<span class="small">たい（ら）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2710">坦<span class="small">たい（ら）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14885">憻<span class="small">たい（ら）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2150">夷<span class="small">たい（らか）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2150">夷<span class="small">たい（らげる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">たえ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1279">妙<span class="small">たえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16473">玅<span class="small">たえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4116">栲<span class="small">たえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27860">𣑥<span class="small">たえ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2461">仔<span class="small">た（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1174">耐<span class="small">た（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="335">勝<span class="small">た（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="754">絶<span class="small">た（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1641">堪<span class="small">た（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9033">絕<span class="small">た（える）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">たお</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5971">垰<span class="small">たお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6086">嵶<span class="small">たお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5560">稷<span class="small">たおさ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1212">倒<span class="small">たお（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5308">殪<span class="small">たお（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13980">妸<span class="small">たお（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3390">婀<span class="small">たお（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5113">猗<span class="small">たお（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14066">娿<span class="small">たお（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3400">嫋<span class="small">たお（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4774">綽<span class="small">たお（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22456">䝝<span class="small">たお（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14233">嬝<span class="small">たお（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3393">娵<span class="small">たおやめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3067">仆<span class="small">たお（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13043">伂<span class="small">たお（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4331">沛<span class="small">たお（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20314">㳈<span class="small">たお（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1212">倒<span class="small">たお（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25449">毙<span class="small">たお（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7417">傎<span class="small">たお（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3136">僵<span class="small">たお（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5308">殪<span class="small">たお（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3791">斃<span class="small">たお（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2773">顛<span class="small">たお（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4287">蹶<span class="small">たお（れる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6464">顚<span class="small">たお（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8434">蹷<span class="small">たお（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18757">㒹<span class="small">たお（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">たか</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="134">高<span class="small">たか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6813">髙<span class="small">たか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6139">軅<span class="small">たか</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2202">鷹<span class="small">たか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8829">笟<span class="small">たが</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4541">箍<span class="small">たが</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27741">𥶡<span class="small">たが</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3147">兀<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3063">亢<span class="small">たか（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="842">危<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10901">宆<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3450">岌<span class="small">たか（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2326">尭<span class="small">たか（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2399">昂<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3904">杲<span class="small">たか（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5613">穹<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11632">昻<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25124">峥<span class="small">たか（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="134">高<span class="small">たか（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1085">軒<span class="small">たか（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2528">峻<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3111">倬<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18923">㖗<span class="small">たか（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1587">隆<span class="small">たか（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1772">崇<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3457">崟<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3460">崔<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3461">崢<span class="small">たか（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3462">崚<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6813">髙<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14462">崈<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25132">崯<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27827">𡸳<span class="small">たか（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="845">貴<span class="small">たか（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2319">喬<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3787">敞<span class="small">たか（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5765">堯<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7945">隆<span class="small">たか（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2508">嵩<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3469">嵬<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10005">㐮<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5163">睾<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3473">嶢<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14567">嶤<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8293">䝿<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19432">㠕<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3477">嶷<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5063">襄<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26917">㠜<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3955">魏<span class="small">たか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3480">巍<span class="small">たか（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1093">互<span class="small">たが（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3075">佚<span class="small">たが（いに）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1837">迭<span class="small">たが（いに）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1833">逓<span class="small">たが（いに）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17918">递<span class="small">たが（いに）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6050">遞<span class="small">たが（いに）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="506">差<span class="small">たが（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2046">爽<span class="small">たが（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1009">違<span class="small">たが（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5363">靠<span class="small">たが（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4798">繆<span class="small">たが（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1009">違<span class="small">たが（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="382">豆<span class="small">たかつき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2800">鐙<span class="small">たかつき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13671">坣<span class="small">たかどの</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="582">堂<span class="small">たかどの</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1603">楼<span class="small">たかどの</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="833">閣<span class="small">たかどの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6009">樓<span class="small">たかどの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19091">㙶<span class="small">たかどの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4722">鏨<span class="small">たがね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4744">鑚<span class="small">たがね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4743">鑽<span class="small">たがね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4780">綰<span class="small">たが（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3063">亢<span class="small">たかぶ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2399">昂<span class="small">たかぶ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11632">昻<span class="small">たかぶ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7005">鰖<span class="small">たかべ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="134">高<span class="small">たか（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6813">髙<span class="small">たか（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4597">簟<span class="small">たかむしろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4548">篁<span class="small">たかむら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="134">高<span class="small">たか（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6813">髙<span class="small">たか（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24700">农<span class="small">たがや（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2766">佃<span class="small">たがや（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5953">畊<span class="small">たがや（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="700">耕<span class="small">たがや（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="385">農<span class="small">たがや（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3937">耡<span class="small">たがや（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8551">辳<span class="small">たがや（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8552">䢉<span class="small">たがや（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15332">欁<span class="small">たがや（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18753">㒲<span class="small">たから</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="981">宝<span class="small">たから</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="712">財<span class="small">たから</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16502">珤<span class="small">たから</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20710">㻄<span class="small">たから</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="452">貨<span class="small">たから</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6323">戝<span class="small">たから</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5389">葆<span class="small">たから</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9996">褁<span class="small">たから</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="717">資<span class="small">たから</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5485">貲<span class="small">たから</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14319">寚<span class="small">たから</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5050">裹<span class="small">たから</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22475">䝴<span class="small">たから</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6120">寳<span class="small">たから</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6119">寶<span class="small">たから</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3949">齎<span class="small">たから</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18246">靌<span class="small">たから</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1317">朗<span class="small">たか（らか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6212">朖<span class="small">たか（らか）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6366">朗<span class="small">たか（らか）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="322">集<span class="small">たか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27777">𠍱<span class="small">たか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7977">雧<span class="small">たか（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">たき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1491">滝<span class="small">たき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4448">瀑<span class="small">たき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6067">瀧<span class="small">たき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5412">蕘<span class="small">たきぎ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1154">薪<span class="small">たきぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15769">滚<span class="small">たぎ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4415">滾<span class="small">たぎ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">たく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="6619">乇<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12374">仛<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13183">厇<span class="small">タク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="938">宅<span class="small">タク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2703">托<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15430">汑<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19506">㡯<span class="small">タク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1177">沢<span class="small">タク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1494">択<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11948">杔<span class="small">タク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1176">拓<span class="small">タク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1493">卓<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3672">拆<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10639">矺<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12455">侂<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13691">坼<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15475">沰<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18838">㔬<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19114">㚖<span class="small">タク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="376">度<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4027">柝<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9769">虴<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16948">籷<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21076">䂝<span class="small">タク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1492">託<span class="small">タク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2702">啄<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3111">倬<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12039">桌<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13150">剢<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16069">烢<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16383">狵<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17550">袥<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18861">㕌<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20038">㭙<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20932">㿭<span class="small">タク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2705">琢<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3269">啅<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11377">㧻<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12788">剫<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14692">庹<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17263">菿<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19530">㢉<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20656">㹿<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24377">涿<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4141">棹<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5945">鈬<span class="small">タク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6392">琢<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7457">飥<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8371">跅<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8595">逴<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11699">晫<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12102">椓<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12108">棏<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13432">喥<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15709">湪<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16528">琸<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16735">硩<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17112">聑<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18796">㓸<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21803">䐁<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6707">馲<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10692">硺<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18717">㒀<span class="small">タク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="777">適<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9232">翟<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11421">搩<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12040">槕<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12246">槖<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18225">雿<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18418">魠<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3956">魄<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8163">諑<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8350">趠<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8405">踔<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11592">斲<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12722">凙<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12810">劅<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15848">潪<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17673">諎<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21840">䐱<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="27782">𠠇<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4671">磔<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5794">澤<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5874">擇<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8413">踱<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11498">擉<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12245">橐<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13542">噣<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16926">篧<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20123">㯖<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21029">䁤<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22043">䕉<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22926">䦠<span class="small">タク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1808">濯<span class="small">タク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2704">擢<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9696">藋<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11593">斵<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12279">檡<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14240">嬥<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15071">斀<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20683">㺟<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21506">䊞<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21851">䐾<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3652">戳<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4999">謫<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10086">襗<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16772">礋<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19928">㪬<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23329">䮓<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23389">䯜<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7168">鵫<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9718">蘀<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17516">蠌<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22069">䕪<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24237">㰅<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17517">蠗<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="2706">鐸<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6765">䮰<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7830">鐲<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8220">讁<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8935">籗<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8936">籜<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23633">䵂<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6777">驝<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14270">孎<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18554">鸅<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7230">鸐<span class="small">タク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16947">籱<span class="small">タク</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1456">炊<span class="small">た（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12347">炷<span class="small">た（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2889">焚<span class="small">た（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20506">㷊<span class="small">た（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1667">薫<span class="small">た（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24058">燓<span class="small">た（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6426">薰<span class="small">た（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9664">蘍<span class="small">た（く）</span></a></li>
                         <li class="others_kanji onyomi"><a href="10341">疒<span class="small">ダク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15419">氼<span class="small">ダク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20304">㲻<span class="small">ダク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15556">浊<span class="small">ダク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10548">眲<span class="small">ダク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12788">剫<span class="small">ダク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14961">掿<span class="small">ダク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15377">毭<span class="small">ダク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20656">㹿<span class="small">ダク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23904">喏<span class="small">ダク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13432">喥<span class="small">ダク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3711">搦<span class="small">ダク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14983">搙<span class="small">ダク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12186">榒<span class="small">ダク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14994">搻<span class="small">ダク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1495">諾<span class="small">ダク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12722">凙<span class="small">ダク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24145">蹃<span class="small">ダク</span></a></li>
                         <li class="others_kanji onyomi"><a href="26626">㘃<span class="small">ダク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1178">濁<span class="small">ダク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16970">糑<span class="small">ダク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14240">嬥<span class="small">ダク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21851">䐾<span class="small">ダク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22309">䚥<span class="small">ダク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23268">䭆<span class="small">ダク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17516">蠌<span class="small">ダク</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1267">抱<span class="small">だ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25275">拥<span class="small">だ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19827">㨣<span class="small">だ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1580">擁<span class="small">だ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="791">比<span class="small">たぐい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1478">双<span class="small">たぐい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25498">汇<span class="small">たぐい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3074">伉<span class="small">たぐい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12962">夶<span class="small">たぐい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24567">伦<span class="small">たぐい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="634">例<span class="small">たぐい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1239">般<span class="small">たぐい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1931">倫<span class="small">たぐい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24095">类<span class="small">たぐい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1378">偶<span class="small">たぐい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5454">畴<span class="small">たぐい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18874">㕠<span class="small">たぐい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1945">彙<span class="small">たぐい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24374">彚<span class="small">たぐい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1722">醜<span class="small">たぐい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="631">類<span class="small">たぐい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6146">雙<span class="small">たぐい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5453">疇<span class="small">たぐい</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6364">類<span class="small">たぐい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23006">䨇<span class="small">たぐい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24095">类<span class="small">たぐ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="631">類<span class="small">たぐ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6364">類<span class="small">たぐ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1247">匹<span class="small">たぐ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24095">类<span class="small">たぐ（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="631">類<span class="small">たぐ（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6364">類<span class="small">たぐ（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5510">逞<span class="small">たくま（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5510">逞<span class="small">たくま（しくする）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="128">工<span class="small">たくみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12954">匞<span class="small">たくみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1445">匠<span class="small">たくみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1974">伎<span class="small">たくみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19579">㣉<span class="small">たくみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1404">巧<span class="small">たく（み）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="128">工<span class="small">たく（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1404">巧<span class="small">たく（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19579">㣉<span class="small">たく（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1357">企<span class="small">たくら（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26399">㑫<span class="small">たくら（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4780">綰<span class="small">たく（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4780">綰<span class="small">たぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3454">峙<span class="small">たくわ（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1501">畜<span class="small">たくわ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16816">积<span class="small">たくわ（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="569">貯<span class="small">たくわ（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1188">蓄<span class="small">たくわ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26511">蕴<span class="small">たくわ（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="548">積<span class="small">たくわ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5423">薀<span class="small">たくわ（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2726">儲<span class="small">たくわ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5438">蘊<span class="small">たくわ（える）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">たけ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1144">丈<span class="small">たけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27695">𠀋<span class="small">たけ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="057">竹<span class="small">たけ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1346">岳<span class="small">たけ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2588">茸<span class="small">たけ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1661">菌<span class="small">たけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4548">篁<span class="small">たけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5416">蕈<span class="small">たけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5710">嶽<span class="small">たけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4518">笆<span class="small">たけがき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25957">篓<span class="small">たけかご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4589">簍<span class="small">たけかご</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="800">武<span class="small">たけ（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3569">悍<span class="small">たけ（し）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5571">赳<span class="small">たけ（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11082">猂<span class="small">たけ（し）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="497">健<span class="small">たけ（し）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1286">猛<span class="small">たけ（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22452">䝘<span class="small">たけ（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12532">徤<span class="small">たけ（し）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2276">毅<span class="small">たけ（し）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4510">驍<span class="small">たけ（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13054">佄<span class="small">たけなわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4840">酣<span class="small">たけなわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4534">筰<span class="small">たけなわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3973">闌<span class="small">たけなわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3043">笋<span class="small">たけのかわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3042">筍<span class="small">たけのかわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3043">笋<span class="small">たけのこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3042">筍<span class="small">たけのこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4548">篁<span class="small">たけやぶ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5112">猖<span class="small">たけりくる（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7864">镸<span class="small">た（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7865">兏<span class="small">た（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="190">長<span class="small">た（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3973">闌<span class="small">た（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3261">哮<span class="small">たけ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24225">㫴<span class="small">たけ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5121">獗<span class="small">たけ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">たこ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2707">凧<span class="small">たこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4218">胝<span class="small">たこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4235">胼<span class="small">たこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6498">腁<span class="small">たこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2573">蛸<span class="small">たこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3867">鮹<span class="small">たこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3891">鱆<span class="small">たこ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">たし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="565">達<span class="small">たし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5720">逹<span class="small">たし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3613">慥<span class="small">たし（か）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="662">確<span class="small">たし（か）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="662">確<span class="small">たし（かめる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13275">呩<span class="small">たしな（み）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3290">嗜<span class="small">たしな（み）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13275">呩<span class="small">たしな（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5478">耆<span class="small">たしな（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3290">嗜<span class="small">たしな（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5618">窘<span class="small">たしな（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27712">𤟱<span class="small">たじひ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">たす</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="053">足<span class="small">た（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5493">贍<span class="small">た（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="035">出<span class="small">だ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14387">岀<span class="small">だ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19345">㞮<span class="small">だ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="330">助<span class="small">たす（かる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5073">襷<span class="small">たすき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3107">伜<span class="small">たす（け）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2166">佑<span class="small">たす（け）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2949">祐<span class="small">たす（け）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19564">㢶<span class="small">たす（け）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3106">倅<span class="small">たす（け）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6397">祐<span class="small">たす（け）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2858">弼<span class="small">たす（け）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14743">弻<span class="small">たす（け）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5048">裨<span class="small">たす（け）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25912">禆<span class="small">たす（け）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1031">介<span class="small">たす（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="076">右<span class="small">たす（ける）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2551">丞<span class="small">たす（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="330">助<span class="small">たす（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1696">佐<span class="small">たす（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1876">扶<span class="small">たす（ける）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2166">佑<span class="small">たす（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11327">抍<span class="small">たす（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26558">补<span class="small">たす（ける）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3088">侑<span class="small">たす（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="348">相<span class="small">たす（ける）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2852">毘<span class="small">たす（ける）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2949">祐<span class="small">たす（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3685">拯<span class="small">たす（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6525">毗<span class="small">たす（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19564">㢶<span class="small">たす（ける）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6397">祐<span class="small">たす（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14630">帮<span class="small">たす（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="477">救<span class="small">たす（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3690">掖<span class="small">たす（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5605">翊<span class="small">たす（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="978">補<span class="small">たす（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1019">援<span class="small">たす（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2858">弼<span class="small">たす（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3498">幇<span class="small">たす（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3701">掾<span class="small">たす（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14743">弻<span class="small">たす（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="717">資<span class="small">たす（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5048">裨<span class="small">たす（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21563">䋠<span class="small">たす（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25912">禆<span class="small">たす（ける）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2878">輔<span class="small">たす（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="714">賛<span class="small">たす（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14651">幚<span class="small">たす（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1297">翼<span class="small">たす（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6511">幫<span class="small">たす（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6327">贊<span class="small">たす（ける）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2457">讃<span class="small">たす（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2458">讚<span class="small">たす（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1382">携<span class="small">たずさ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11420">擕<span class="small">たずさ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19862">㩗<span class="small">たずさ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19873">㩦<span class="small">たずさ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5875">攜<span class="small">たずさ（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1382">携<span class="small">たずさ（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11420">擕<span class="small">たずさ（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19862">㩗<span class="small">たずさ（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19873">㩦<span class="small">たずさ（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5875">攜<span class="small">たずさ（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25092">寻<span class="small">たず（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3663">找<span class="small">たず（ねる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="118">原<span class="small">たず（ねる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="955">討<span class="small">たず（ねる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2600">訊<span class="small">たず（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17634">訙<span class="small">たず（ねる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="417">問<span class="small">たず（ねる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="980">訪<span class="small">たず（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13196">厡<span class="small">たず（ねる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="256">温<span class="small">たず（ねる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1157">尋<span class="small">たず（ねる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6447">溫<span class="small">たず（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22357">䛜<span class="small">たず（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4812">繹<span class="small">たず（ねる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">たた</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2464">只<span class="small">ただ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2148">伊<span class="small">ただ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12710">㓇<span class="small">ただ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1809">但<span class="small">ただ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="578">徒<span class="small">ただ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5634">祗<span class="small">ただ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1913">唯<span class="small">ただ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2151">惟<span class="small">ただ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3278">啻<span class="small">ただ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1142">称<span class="small">たた（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2714">湛<span class="small">たた（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5135">頌<span class="small">たた（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20391">㴴<span class="small">たた（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6127">稱<span class="small">たた（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="714">賛<span class="small">たた（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2713">歎<span class="small">たた（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6327">贊<span class="small">たた（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10892">穪<span class="small">たた（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2457">讃<span class="small">たた（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2458">讚<span class="small">たた（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7898">閗<span class="small">たたか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7897">鬦<span class="small">たたか（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1216">闘<span class="small">たたか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6138">鬪<span class="small">たたか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18407">鬬<span class="small">たたか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7896">鬭<span class="small">たたか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6864">䦰<span class="small">たたかいと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6863">䰗<span class="small">たたかいと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5020">鬮<span class="small">たたかいと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14895">战<span class="small">たたか（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5696">鬥<span class="small">たたか（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7898">閗<span class="small">たたか（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="552">戦<span class="small">たたか（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7897">鬦<span class="small">たたか（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5018">鬨<span class="small">たたか（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6182">戰<span class="small">たたか（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1216">闘<span class="small">たたか（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6138">鬪<span class="small">たたか（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18407">鬬<span class="small">たたか（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7896">鬭<span class="small">たたか（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3789">敲<span class="small">たた（き）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11565">㪣<span class="small">たた（き）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2394">叩<span class="small">たた（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3658">扣<span class="small">たた（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6195">攷<span class="small">たた（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1328">殴<span class="small">たた（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27838">𢭏<span class="small">たた（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12400">欵<span class="small">たた（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14950">捯<span class="small">たた（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1642">款<span class="small">たた（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3714">搗<span class="small">たた（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3789">敲<span class="small">たた（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11565">㪣<span class="small">たた（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12855">㱁<span class="small">たた（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19842">㨶<span class="small">たた（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6231">毆<span class="small">たた（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3735">擣<span class="small">たた（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1809">但<span class="small">ただ（し）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="222">方<span class="small">ただ（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="038">正<span class="small">ただ（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1159">是<span class="small">ただ（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1832">貞<span class="small">ただ（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1181">端<span class="small">ただ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4991">謇<span class="small">ただ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3440">尹<span class="small">ただ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="038">正<span class="small">ただ（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2316">匡<span class="small">ただ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="972">批<span class="small">ただ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4747">糺<span class="small">ただ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1512">訂<span class="small">ただ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1653">糾<span class="small">ただ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12952">匩<span class="small">ただ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="663">格<span class="small">ただ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="669">規<span class="small">ただ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6324">貭<span class="small">ただ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25223">弹<span class="small">ただ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1184">弾<span class="small">ただ（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2798">董<span class="small">ただ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8038">䂓<span class="small">ただ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1845">督<span class="small">ただ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3194">飭<span class="small">ただ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21580">䋲<span class="small">ただ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="725">質<span class="small">ただ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1760">縄<span class="small">ただ（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5923">彈<span class="small">ただ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8039">槼<span class="small">ただ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8305">儨<span class="small">ただ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4997">鞫<span class="small">ただ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6095">繩<span class="small">ただ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5824">彳<span class="small">たたず（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24571">伫<span class="small">たたず（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3079">佇<span class="small">たたず（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5541">竚<span class="small">たたず（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5542">站<span class="small">たたず（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="193">直<span class="small">ただ（ちに）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="491">径<span class="small">ただ（ちに）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17916">迳<span class="small">ただ（ちに）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5826">徑<span class="small">ただ（ちに）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5509">逕<span class="small">ただ（ちに）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3278">啻<span class="small">ただ（に）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1143">畳<span class="small">たたみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10324">叠<span class="small">たたみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5862">疂<span class="small">たたみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10325">曡<span class="small">たたみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5863">疉<span class="small">たたみ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5864">疊<span class="small">たたみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1143">畳<span class="small">たた（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10324">叠<span class="small">たた（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2560">摺<span class="small">たた（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5862">疂<span class="small">たた（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10325">曡<span class="small">たた（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5863">疉<span class="small">たた（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5864">疊<span class="small">たた（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1540">漂<span class="small">ただよ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4420">漾<span class="small">ただよ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4368">飄<span class="small">ただよ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6349">飃<span class="small">ただよ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5996">鈩<span class="small">たたら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4738">鑪<span class="small">たたら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5638">祟<span class="small">たた（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5638">祟<span class="small">たた（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25618">烂<span class="small">ただ（れ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4944">爛<span class="small">ただ（れ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24063">爤<span class="small">ただ（れ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25618">烂<span class="small">ただ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5273">糜<span class="small">ただ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5364">靡<span class="small">ただ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4944">爛<span class="small">ただ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24063">爤<span class="small">ただ（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">たち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="13124">冭<span class="small">タチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13286">呾<span class="small">タチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24796">哒<span class="small">タチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14062">娺<span class="small">タチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15207">棁<span class="small">タチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17109">聉<span class="small">タチ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="565">達<span class="small">タチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5720">逹<span class="small">タチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15379">毲<span class="small">タチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17158">腏<span class="small">タチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17648">詚<span class="small">タチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16854">窡<span class="small">タチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13544">噧<span class="small">タチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18732">㒓<span class="small">タチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16232">燤<span class="small">タチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21291">䆯<span class="small">タチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23163">䫄<span class="small">タチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23916">噠<span class="small">タチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15291">橽<span class="small">タチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21754">䏄<span class="small">タチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23661">䵣<span class="small">タチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20944">㿹<span class="small">タチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3968">闥<span class="small">タチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16270">爡<span class="small">タチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23521">䲚<span class="small">タチ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="745">性<span class="small">たち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6324">貭<span class="small">たち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="565">達<span class="small">たち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5720">逹<span class="small">たち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="717">資<span class="small">たち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="725">質<span class="small">たち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="261">館<span class="small">たち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2260">舘<span class="small">たち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8305">儨<span class="small">たち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26339">館<span class="small">たち</span></a></li>
                         <li class="others_kanji onyomi"><a href="19596">㣞<span class="small">ダチ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="565">達<span class="small">ダチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5720">逹<span class="small">ダチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16603">痥<span class="small">ダチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19611">㣵<span class="small">ダチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21140">䃮<span class="small">ダチ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24571">伫<span class="small">たちど（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3079">佇<span class="small">たちど（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5541">竚<span class="small">たちど（まる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2294">橘<span class="small">たちばな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2430">乍<span class="small">たちま（ち）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2184">奄<span class="small">たちま（ち）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2424">忽<span class="small">たちま（ち）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5110">倏<span class="small">たちま（ち）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23893">倐<span class="small">たちま（ち）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2185">掩<span class="small">たちま（ち）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4412">溘<span class="small">たちま（ち）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4508">驀<span class="small">たちま（ち）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14771">彽<span class="small">たちもとお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5051">裴<span class="small">たちもとお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8450">踌<span class="small">たちもとお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9997">裵<span class="small">たちもとお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4270">踟<span class="small">たちもとお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26857">踯<span class="small">たちもとお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4293">躇<span class="small">たちもとお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4295">躊<span class="small">たちもとお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4297">躑<span class="small">たちもとお（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3805">鴕<span class="small">だちょう</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">たつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="13124">冭<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15429">汏<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25027">夺<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8560">达<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3549">怛<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13286">呾<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26936">迖<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9198">羍<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12487">侻<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16025">炟<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17138">胐<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19596">㣞<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9479">莌<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10908">窋<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11351">挩<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12336">哳<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12778">剟<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16651">眣<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24796">哒<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24986">垯<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25284">挞<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25290">捝<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26357">荙<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27293">㳠<span class="small">タツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1179">脱<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8797">笪<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11380">掇<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11556">敓<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11824">脫<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12067">梲<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14062">娺<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15207">棁<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17109">聉<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25350">敚<span class="small">タツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="565">達<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5720">逹<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11561">敠<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15379">毲<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16603">痥<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17158">腏<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17648">詚<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25353">敪<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10045">裰<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16854">窡<span class="small">タツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1496">奪<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5083">靼<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26840">跶<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13544">噧<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18732">㒓<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3728">撻<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9675">薘<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16232">燤<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19611">㣵<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21291">䆯<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23163">䫄<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23916">噠<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24031">澾<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24257">㺚<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24987">墶<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25581">鞑<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4934">燵<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15291">橽<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21754">䏄<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23661">䵣<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6962">鮵<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20944">㿹<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21140">䃮<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5124">獺<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7169">鵽<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17512">蟽<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24101">繨<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8447">躂<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3968">闥<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2708">韃<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16270">爡<span class="small">タツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23521">䲚<span class="small">タツ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2602">辰<span class="small">たつ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1925">竜<span class="small">たつ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5675">龍<span class="small">たつ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19496">㡣<span class="small">たつ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6679">龒<span class="small">たつ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="078">立<span class="small">た（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24773">发<span class="small">た（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13664">坕<span class="small">た（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="391">発<span class="small">た（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="496">建<span class="small">た（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="531">祝<span class="small">た（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5303">殄<span class="small">た（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="266">起<span class="small">た（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5542">站<span class="small">た（つ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6399">祝<span class="small">た（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="684">経<span class="small">た（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="771">断<span class="small">た（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="754">絶<span class="small">た（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="880">裁<span class="small">た（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4683">釿<span class="small">た（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5749">發<span class="small">た（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9033">絕<span class="small">た（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3183">剿<span class="small">た（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3193">勦<span class="small">た（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5522">遏<span class="small">た（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5910">經<span class="small">た（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25224">彂<span class="small">た（つ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2504">竪<span class="small">た（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3650">截<span class="small">た（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19946">㫁<span class="small">た（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12799">劋<span class="small">た（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2505">豎<span class="small">た（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4994">謖<span class="small">た（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6204">斷<span class="small">た（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22434">䝂<span class="small">た（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4287">蹶<span class="small">た（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8434">蹷<span class="small">た（つ）</span></a></li>
                         <li class="others_kanji onyomi"><a href="25027">夺<span class="small">ダツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23945">妠<span class="small">ダツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3377">妲<span class="small">ダツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3549">怛<span class="small">ダツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10361">痆<span class="small">ダツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17551">袦<span class="small">ダツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1179">脱<span class="small">ダツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2709">捺<span class="small">ダツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11824">脫<span class="small">ダツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17745">豽<span class="small">ダツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22115">䖧<span class="small">ダツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17747">貀<span class="small">ダツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21008">䁊<span class="small">ダツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22098">䖓<span class="small">ダツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1496">奪<span class="small">ダツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24257">㺚<span class="small">ダツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25581">鞑<span class="small">ダツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5124">獺<span class="small">ダツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2708">韃<span class="small">ダツ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5998">鐇<span class="small">たつき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5998">鐇<span class="small">たつぎ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="845">貴<span class="small">たっと（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="936">尊<span class="small">たっと（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8293">䝿<span class="small">たっと（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1744">尚<span class="small">たっと（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23958">尙<span class="small">たっと（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1772">崇<span class="small">たっと（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14462">崈<span class="small">たっと（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="845">貴<span class="small">たっと（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="936">尊<span class="small">たっと（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8293">䝿<span class="small">たっと（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14640">幉<span class="small">たづな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2855">轡<span class="small">たづな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5598">羈<span class="small">たづな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6311">覊<span class="small">たづな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14604">巺<span class="small">たつみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19561">㢲<span class="small">たつみ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2676">巽<span class="small">たつみ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">たて</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="839">干<span class="small">たて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4007">杆<span class="small">たて</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1136">盾<span class="small">たて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4008">桿<span class="small">たて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4304">鹵<span class="small">たて</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2536">楯<span class="small">たて</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2504">竪<span class="small">たて</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="261">館<span class="small">たて</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="901">縦<span class="small">たて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2260">舘<span class="small">たて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2505">豎<span class="small">たて</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5914">縱<span class="small">たて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26339">館<span class="small">たて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22434">䝂<span class="small">たて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5401">蓼<span class="small">たで</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14106">婲<span class="small">だて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13664">坕<span class="small">たていと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="684">経<span class="small">たていと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5910">經<span class="small">たていと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4641">髦<span class="small">たてがみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6858">㲱<span class="small">たてがみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6857">鬛<span class="small">たてがみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4653">鬣<span class="small">たてがみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20069">㮄<span class="small">たてふだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4166">榜<span class="small">たてふだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6589">丄<span class="small">たてまつ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="039">上<span class="small">たてまつ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1560">奉<span class="small">たてまつ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1676">献<span class="small">たてまつ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5856">獻<span class="small">たてまつ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="078">立<span class="small">た（てる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="882">冊<span class="small">た（てる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5761">册<span class="small">た（てる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1879">沸<span class="small">た（てる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13922">奌<span class="small">た（てる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="195">点<span class="small">た（てる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="496">建<span class="small">た（てる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25384">树<span class="small">た（てる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="977">閉<span class="small">た（てる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6337">閇<span class="small">た（てる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="337">植<span class="small">た（てる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="895">樹<span class="small">た（てる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5833">點<span class="small">た（てる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12097">㯰<span class="small">た（てる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20543">㸃<span class="small">た（てる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">たと</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="752">設<span class="small">たと（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5009">譬<span class="small">たと（え）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="634">例<span class="small">たと（えば）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="634">例<span class="small">たと（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3091">俔<span class="small">たと（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12476">悓<span class="small">たと（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2115">喩<span class="small">たと（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23905">喻<span class="small">たと（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5009">譬<span class="small">たと（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2772">辿<span class="small">たど（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">たな</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="196">店<span class="small">たな</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1332">架<span class="small">たな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25377">栈<span class="small">たな</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1706">桟<span class="small">たな</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1810">棚<span class="small">たな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6122">棧<span class="small">たな</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="833">閣<span class="small">たな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15244">榢<span class="small">たな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7047">鰱<span class="small">たなご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7075">鱮<span class="small">たなご</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1440">掌<span class="small">たなごころ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">たに</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="137">谷<span class="small">たに</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3456">峪<span class="small">たに</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1671">渓<span class="small">たに</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6238">溪<span class="small">たに</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14517">嵠<span class="small">たに</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2255">澗<span class="small">たに</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6522">㵎<span class="small">たに</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3354">壑<span class="small">たに</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5652">谿<span class="small">たに</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26552">螨<span class="small">だに</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9917">蟎<span class="small">だに</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14517">嵠<span class="small">たにがわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5652">谿<span class="small">たにがわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2255">澗<span class="small">たにみず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6522">㵎<span class="small">たにみず</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">たぬ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="2970">狸<span class="small">たぬき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5117">猯<span class="small">たぬき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5892">貍<span class="small">たぬき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8284">貒<span class="small">たぬき</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">たね</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2163">胤<span class="small">たね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26962">㣧<span class="small">たね</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="529">種<span class="small">たね</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts21">
                    <h3 class="ttl_while">たの</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1912">愉<span class="small">たの（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="098">楽<span class="small">たの（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5732">樂<span class="small">たの（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19735">㦡<span class="small">たの（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25107">岂<span class="small">たの（しむ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3075">佚<span class="small">たの（しむ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13054">佄<span class="small">たの（しむ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1326">宴<span class="small">たの（しむ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1396">娯<span class="small">たの（しむ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5646">豈<span class="small">たの（しむ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14042">娛<span class="small">たの（しむ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14058">娱<span class="small">たの（しむ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4857">聊<span class="small">たの（しむ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16096">焈<span class="small">たの（しむ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1912">愉<span class="small">たの（しむ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4840">酣<span class="small">たの（しむ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="098">楽<span class="small">たの（しむ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3131">僖<span class="small">たの（しむ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4170">槃<span class="small">たの（しむ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4925">煕<span class="small">たの（しむ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2273">嬉<span class="small">たの（しむ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4924">熙<span class="small">たの（しむ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4926">熈<span class="small">たの（しむ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5732">樂<span class="small">たの（しむ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3625">懌<span class="small">たの（しむ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19735">㦡<span class="small">たの（しむ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2703">托<span class="small">たの（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3546">怙<span class="small">たの（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="405">負<span class="small">たの（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3562">恃<span class="small">たの（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3101">倚<span class="small">たの（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4487">馮<span class="small">たの（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1450">嘱<span class="small">たの（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11005">慿<span class="small">たの（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1299">頼<span class="small">たの（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3622">憑<span class="small">たの（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6427">賴<span class="small">たの（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5763">囑<span class="small">たの（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1299">頼<span class="small">たの（もしい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6427">賴<span class="small">たの（もしい）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts22">
                    <h3 class="ttl_while">たは</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="558">束<span class="small">たば</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5360">莨<span class="small">たばこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5516">迸<span class="small">たばし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6513">逬<span class="small">たばし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22229">䙀<span class="small">たば（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9122">綳<span class="small">たば（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4802">繃<span class="small">たば（ねる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts23">
                    <h3 class="ttl_while">たひ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="376">度<span class="small">たび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14935">挔<span class="small">たび</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="431">旅<span class="small">たび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11604">捛<span class="small">たび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5074">襪<span class="small">たび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5597">羇<span class="small">たび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5098">韈<span class="small">たび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9193">覉<span class="small">たび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5598">羈<span class="small">たび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7337">韤<span class="small">たび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6311">覊<span class="small">たび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5597">羇<span class="small">たびびと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9193">覉<span class="small">たびびと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5598">羈<span class="small">たびびと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6311">覊<span class="small">たびびと</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts24">
                    <h3 class="ttl_while">たふ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="13091">傝<span class="small">タフ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6124">椨<span class="small">たぶ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12154">﨓<span class="small">たぶ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22904">䦇<span class="small">たぶさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4647">髻<span class="small">たぶさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6124">椨<span class="small">たぶのき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4970">誑<span class="small">たぶら（かす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4970">誑<span class="small">たぶらか（す）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts25">
                    <h3 class="ttl_while">たへ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="7471">飡<span class="small">たべもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7470">湌<span class="small">たべもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19569">㢽<span class="small">たべもの</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2017">餌<span class="small">たべもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2459">餐<span class="small">たべもの</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="162">食<span class="small">た（べる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts26">
                    <h3 class="ttl_while">たほ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4646">髱<span class="small">たぼ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts27">
                    <h3 class="ttl_while">たま</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="103">丸<span class="small">たま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="012">玉<span class="small">たま</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2350">圭<span class="small">たま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8005">㚑<span class="small">たま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8006">灵<span class="small">たま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1718">珠<span class="small">たま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2352">珪<span class="small">たま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="271">球<span class="small">たま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25223">弹<span class="small">たま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1184">弾<span class="small">たま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10243">琼<span class="small">たま</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4629">瑶<span class="small">たま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1411">魂<span class="small">たま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5722">瑤<span class="small">たま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6874">䰟<span class="small">たま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1594">霊<span class="small">たま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4634">璋<span class="small">たま</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5923">彈<span class="small">たま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10214">璇<span class="small">たま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8004">霛<span class="small">たま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2099">璧<span class="small">たま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4637">瓊<span class="small">たま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8003">䨩<span class="small">たま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6346">靈<span class="small">たま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="480">給<span class="small">たま（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1708">賜<span class="small">たま（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5486">賚<span class="small">たま（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2477">錫<span class="small">たま（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4881">釐<span class="small">たま（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18749">㒪<span class="small">たま（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25788">环<span class="small">たまき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1045">環<span class="small">たまき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4733">鐶<span class="small">たまき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="996">卵<span class="small">たまご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2718">蛋<span class="small">たまご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8005">㚑<span class="small">たましい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8006">灵<span class="small">たましい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="343">神<span class="small">たましい</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6368">神<span class="small">たましい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1411">魂<span class="small">たましい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6874">䰟<span class="small">たましい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1594">霊<span class="small">たましい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3956">魄<span class="small">たましい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8004">霛<span class="small">たましい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8003">䨩<span class="small">たましい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6346">靈<span class="small">たましい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25839">瞒<span class="small">だま（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5169">瞞<span class="small">だま（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5489">賺<span class="small">だま（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4503">騙<span class="small">だま（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1378">偶<span class="small">たまたま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1379">遇<span class="small">たまたま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="777">適<span class="small">たまたま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27836">𢢫<span class="small">たまつばき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1708">賜<span class="small">たまもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5486">賚<span class="small">たまもの</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2477">錫<span class="small">たまもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18749">㒪<span class="small">たまもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14675">庙<span class="small">たまや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23981">庿<span class="small">たまや</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2865">廟<span class="small">たまや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4400">渟<span class="small">た（まる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2976">溜<span class="small">た（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2729">潴<span class="small">た（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6244">澑<span class="small">た（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2728">瀦<span class="small">た（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1641">堪<span class="small">たま（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1287">黙<span class="small">だま（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6254">默<span class="small">だま（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="480">給<span class="small">たまわ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1708">賜<span class="small">たまわ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts28">
                    <h3 class="ttl_while">たみ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="618">民<span class="small">たみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5319">氓<span class="small">たみ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2911">萌<span class="small">たみ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2912">萠<span class="small">たみ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts29">
                    <h3 class="ttl_while">たむ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5258">癬<span class="small">たむし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1847">屯<span class="small">たむろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3644">戍<span class="small">たむろ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts30">
                    <h3 class="ttl_while">ため</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1008">為<span class="small">ため</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6248">爲<span class="small">ため</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2976">溜<span class="small">ため</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6244">澑<span class="small">ため</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3277">喟<span class="small">ためいき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="634">例<span class="small">ためし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="521">試<span class="small">ため（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="498">験<span class="small">ため（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6742">騐<span class="small">ため（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6353">驗<span class="small">ため（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5512">逡<span class="small">ためら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8450">踌<span class="small">ためら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4270">踟<span class="small">ためら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4293">躇<span class="small">ためら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4295">躊<span class="small">ためら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25845">矫<span class="small">た（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3706">揉<span class="small">た（める）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2976">溜<span class="small">た（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3720">撓<span class="small">た（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6244">澑<span class="small">た（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4195">檠<span class="small">た（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12269">㯳<span class="small">た（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1658">矯<span class="small">た（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts31">
                    <h3 class="ttl_while">たも</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="27862">𣕚<span class="small">たも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12298">櫤<span class="small">たも</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="937">存<span class="small">たも（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="806">保<span class="small">たも（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19055">㙅<span class="small">たも（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5389">葆<span class="small">たも（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5025">袂<span class="small">たもと</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts32">
                    <h3 class="ttl_while">たや</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="754">絶<span class="small">た（やす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9033">絕<span class="small">た（やす）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts33">
                    <h3 class="ttl_while">たゆ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2467">弛<span class="small">たゆ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19558">㢮<span class="small">たゆ（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts34">
                    <h3 class="ttl_while">たよ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="18677">㐰<span class="small">たよ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12482">孞<span class="small">たよ（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="002">音<span class="small">たよ（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="542">信<span class="small">たよ（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="609">便<span class="small">たよ（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1907">耗<span class="small">たよ（り）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2600">訊<span class="small">たよ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17634">訙<span class="small">たよ（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="417">問<span class="small">たよ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8098">訫<span class="small">たよ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22357">䛜<span class="small">たよ（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1299">頼<span class="small">たよ（り）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6427">賴<span class="small">たよ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4857">聊<span class="small">たよ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1299">頼<span class="small">たよ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6427">賴<span class="small">たよ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts35">
                    <h3 class="ttl_while">たら</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="12214">樰<span class="small">たら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27864">𣘹<span class="small">たら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2633">鱈<span class="small">たら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10509">泴<span class="small">たらい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4170">槃<span class="small">たらい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5568">盥<span class="small">たらい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="917">垂<span class="small">た（らす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5966">埀<span class="small">た（らす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4970">誑<span class="small">たら（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27704">𣗄<span class="small">たらのき</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts36">
                    <h3 class="ttl_while">たり</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="053">足<span class="small">た（りる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5493">贍<span class="small">た（りる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts37">
                    <h3 class="ttl_while">たる</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="6150">墫<span class="small">たる</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2677">樽<span class="small">たる</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="053">足<span class="small">た（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1488">怠<span class="small">だる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3627">懈<span class="small">だる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4118">桷<span class="small">たるき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4148">椽<span class="small">たるき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4177">榱<span class="small">たるき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2467">弛<span class="small">たる（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19558">㢮<span class="small">たる（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts38">
                    <h3 class="ttl_while">たれ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3424">孰<span class="small">たれ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2055">誰<span class="small">たれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5454">畴<span class="small">だれ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2055">誰<span class="small">だれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5453">疇<span class="small">だれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4641">髦<span class="small">たれがみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4643">髫<span class="small">たれがみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4766">綏<span class="small">たれひも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12420">仾<span class="small">た（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="573">低<span class="small">た（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="917">垂<span class="small">た（れる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2582">帖<span class="small">た（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5966">埀<span class="small">た（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1198">滴<span class="small">た（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts39">
                    <h3 class="ttl_while">たわ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5776">乢<span class="small">たわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25260">戏<span class="small">たわ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1053">戯<span class="small">たわ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11232">戱<span class="small">たわ（ける）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6183">戲<span class="small">たわ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24781">呓<span class="small">たわごと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5008">譫<span class="small">たわごと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3322">囈<span class="small">たわごと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27861">𣓤<span class="small">たわ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3720">撓<span class="small">たわ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4189">橈<span class="small">たわ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="966">俳<span class="small">たわむ（れ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1963">諧<span class="small">たわむ（れ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4982">諢<span class="small">たわむ（れ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25260">戏<span class="small">たわむ（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2130">弄<span class="small">たわむ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27370">㺯<span class="small">たわむ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14932">挊<span class="small">たわむ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14941">挵<span class="small">たわむ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3391">婬<span class="small">たわむ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4964">詼<span class="small">たわむ（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1053">戯<span class="small">たわむ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4983">謔<span class="small">たわむ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11232">戱<span class="small">たわむ（れる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6183">戲<span class="small">たわむ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3720">撓<span class="small">たわ（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="794">俵<span class="small">たわら</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts40">
                    <h3 class="ttl_while">たん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="392">反<span class="small">タン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1180">丹<span class="small">タン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2056">旦<span class="small">タン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2076">丼<span class="small">タン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="770">団<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13141">刐<span class="small">タン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1809">但<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10951">忐<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11290">抌<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11623">旵<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13660">坍<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13949">妉<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14615">帎<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18884">㕪<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19134">㚮<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20476">㶣<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21922">䒞<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21923">䒟<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24975">坛<span class="small">タン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="940">担<span class="small">タン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2710">坦<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3549">怛<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14917">抩<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15461">沊<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16370">狚<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16483">玬<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19041">㘱<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19517">㡺<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19580">㣋<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20253">㱽<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24288">䏙<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24737">单<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25514">泹<span class="small">タン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="361">炭<span class="small">タン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="566">単<span class="small">タン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="943">段<span class="small">タン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1497">胆<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5149">眈<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6179">彖<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9254">耑<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12004">柦<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14821">怹<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16576">瓭<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16711">砃<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17535">衴<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21780">䏥<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26366">荨<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27189">㫜<span class="small">タン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2717">耽<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5032">袒<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5218">疸<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5542">站<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8085">訑<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9005">紞<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9279">耼<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9318">䑙<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10338">疍<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12515">倓<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17239">莐<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20186">㰫<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20335">㳩<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20975">䀡<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23902">唌<span class="small">タン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="771">断<span class="small">タン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="939">探<span class="small">タン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1183">淡<span class="small">タン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2075">貪<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2718">蛋<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3270">啖<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3271">啗<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4839">酖<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8668">郯<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8797">笪<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9017">䋎<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9278">躭<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9280">聃<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9317">舑<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9514">萏<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9515">菼<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11109">惔<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12789">剬<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13080">偡<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13084">偳<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13760">埮<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14080">婒<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16601">痑<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17106">聅<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19659">㤾<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20354">㴂<span class="small">タン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="360">短<span class="small">タン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1641">堪<span class="small">タン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2714">湛<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3846">毯<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4395">湍<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4553">赧<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5079">覃<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5117">猯<span class="small">タン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5762">單<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5987">葮<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8111">詀<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8340">趈<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11181">惮<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11849">腅<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13091">傝<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13410">啿<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14120">媅<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14130">媏<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15408">氮<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15700">湠<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15709">湪<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17618">觛<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18668">㐤<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19191">㛶<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19392">㟨<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19813">㨏<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20277">㲜<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20507">㷋<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22508">䞡<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22968">䧘<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24911">啴<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25006">塅<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25325">掸<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25816">痪<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27088">郸<span class="small">タン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1182">嘆<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2711">椴<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3064">亶<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4064">蜑<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5231">痰<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7587">鉭<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10044">裧<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10046">䘺<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10919">窞<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11867">腶<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12800">剸<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13099">僋<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16133">煅<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16143">煓<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16539">瑖<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20239">㱭<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20391">㴴<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20394">㴷<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20811">㽎<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21107">䂿<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21284">䆦<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22916">䦔<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24197">㗖<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25341">摊<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25406">榃<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25443">殚<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25579">滩<span class="small">タン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1181">端<span class="small">タン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2057">綻<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3716">摶<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5065">褝<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5083">靼<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5878">慱<span class="small">タン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6148">團<span class="small">タン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6378">嘆<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6821">髧<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9076">緂<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9319">舕<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10053">褍<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10054">褖<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10328">畽<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10396">瘓<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10707">碳<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10708">碫<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12620">僤<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12992">匰<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13480">嗿<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13830">塼<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14188">嫥<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15800">漙<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16608">瘎<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18276">頕<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18335">馾<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19946">㫁<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20405">㵅<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22010">䔜<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22141">䗊<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22194">䘓<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23060">䩇<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25818">瘅<span class="small">タン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="362">談<span class="small">タン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="941">誕<span class="small">タン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2713">歎<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2716">箪<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3620">憚<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4429">潭<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4784">緞<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5209">鄲<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5415">蕁<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6007">槫<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8310">賧<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9093">縀<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11182">憛<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11482">撣<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12639">儃<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12640">儋<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12881">勯<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13518">嘽<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13524">噉<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13851">墠<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13856">墥<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13864">墰<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13868">墵<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14883">憳<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15850">潬<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15865">澉<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17984">醈<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18809">㔊<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19229">㜤<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23912">嘾<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23993">撢<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25822">瘫<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26275">羰<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27520">䛸<span class="small">タン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1221">曇<span class="small">タン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1499">壇<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3630">憺<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4436">澹<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5307">殫<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5927">擔<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6549">黕<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7699">錟<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8284">貒<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8414">踹<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8756">醓<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9674">薝<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10948">竱<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12247">橝<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12958">毈<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13530">噒<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13540">噡<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14227">嬗<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14232">嬜<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14885">憻<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15117">暺<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15892">澶<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15894">澸<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16213">燀<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18481">鴠<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19612">㣶<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20293">㲭<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20300">㲷<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21293">䆱<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21844">䐷<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21847">䐺<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22044">䕊<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22444">䝎<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23085">䩥<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23550">䳉<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23639">䵊<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24056">燂<span class="small">タン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1498">鍛<span class="small">タン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2712">檀<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4191">檐<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5064">襌<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5285">餤<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5489">賺<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6291">膽<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7733">鍴<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8892">篿<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10240">璮<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10332">疃<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10440">癉<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10816">禫<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11917">膻<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17593">襑<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18287">顃<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18353">駳<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19865">㩛<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20813">㽑<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21504">䊜<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23031">䨢<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25961">簖<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6204">斷<span class="small">タン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6452">簞<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9163">罈<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9922">蟫<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10087">襢<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10287">甔<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15042">擹<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15304">檲<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16617">癚<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17375">藫<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20142">㯯<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21136">䃪<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21137">䃫<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21173">䄡<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21512">䊤<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2684">騨<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3356">壜<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5003">譚<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7792">鏄<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8326">贉<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8766">醰<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9143">繵<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9946">蟺<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13580">嚪<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17123">聸<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17755">貚<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18504">鵮<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21446">䉞<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21449">䉡<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22177">䗺<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22691">䡲<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4728">鐔<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8987">糰<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13590">嚾<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17717">譠<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18236">霮<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18525">鶨<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23572">䳪<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24157">醷<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27517">䜖<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6560">黮<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7831">鐽<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18320">饏<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20464">㶒<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22410">䜝<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22628">䠪<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23281">䭛<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23643">䵎<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23673">䵯<span class="small">タン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2715">灘<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3743">攤<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3974">罎<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6478">驒<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7042">鱄<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17860">躖<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18537">鷒<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18387">驙<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18542">鷤<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18550">鷻<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23045">䨵<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10458">癱<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16945">籪<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6563">黵<span class="small">タン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22821">䤗<span class="small">タン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2056">旦<span class="small">ダン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="770">団<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13941">奻<span class="small">ダン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="056">男<span class="small">ダン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1809">但<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20476">㶣<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20816">㽖<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23945">妠<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24975">坛<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12002">枏<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24541">乸<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25514">泹<span class="small">ダン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="207">南<span class="small">ダン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="943">段<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10298">侽<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12001">柟<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27189">㫜<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5706">娚<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16592">畘<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17243">莮<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23902">唌<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25547">难<span class="small">ダン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="771">断<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13076">偄<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13760">埮<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14080">婒<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15644">淰<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17106">聅<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18775">㓓<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19977">㫱<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22333">䛁<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25223">弹<span class="small">ダン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1184">弾<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3283">喃<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4553">赧<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5987">葮<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13410">啿<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13788">堧<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14111">婻<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14963">揇<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15662">渜<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15709">湪<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15714">湳<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17275">萳<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17618">觛<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20507">㷋<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22968">䧘<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25006">塅<span class="small">ダン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="942">暖<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2711">椴<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4919">煖<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11707">㬉<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11868">腩<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15103">暔<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16145">煗<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16534">瑌<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22793">䣸<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25579">滩<span class="small">ダン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6148">團<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12620">僤<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13830">塼<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14188">嫥<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16608">瘎<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19946">㫁<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22194">䘓<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22235">䙇<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23253">䬯<span class="small">ダン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="362">談<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4784">緞<span class="small">ダン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5923">彈<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6007">槫<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9093">縀<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9877">蝻<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12639">儃<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13508">嘫<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13524">噉<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17984">醈<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20896">㾺<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21379">䈒<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21498">䊖<span class="small">ダン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1499">壇<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8178">諵<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15117">暺<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21293">䆱<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22044">䕊<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23085">䩥<span class="small">ダン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2712">檀<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18287">顃<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18353">駳<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21504">䊜<span class="small">ダン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="958">難<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6204">斷<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7492">餪<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15304">檲<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16243">燸<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21136">䃪<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5003">譚<span class="small">ダン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6417">難<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13580">嚪<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17755">貚<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21449">䉡<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22177">䗺<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18236">霮<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27517">䜖<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18320">饏<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22628">䠪<span class="small">ダン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2715">灘<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18537">鷒<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19502">㡪<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11020">戁<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18387">驙<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18542">鷤<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18550">鷻<span class="small">ダン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20013">㬮<span class="small">ダン</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9076">緂<span class="small">だん</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1287">黙<span class="small">だんま（り）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6254">默<span class="small">だんま（り）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts41">
                    <h3 class="ttl_while">たー</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="354">打<span class="small">ダース</span></a></li>
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
</script>
     <?php wp_footer() ?>