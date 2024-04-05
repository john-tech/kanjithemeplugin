<?php
/*
 * Template Name: Yomi43
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
               <h1 class="ttl_main">音訓検索「ろ」</h1>
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
               <p>「ろ」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>ろ</option>
                              <option value="yomi44">わ</option>
                              <option value="yomi45">を</option>
                         </select>
                    </div>
               </div><!--search_narrowdown-->
               <div class="search_data yomi_menu">
                    <ul class="search_menu2">
                         <li id="parts1_menu"><a href="#parts1">ろ</a></li>
                         <li id="parts2_menu"><a href="#parts2">ろう</a></li>
                         <li id="parts3_menu"><a href="#parts3">ろく</a></li>
                         <li id="parts4_menu"><a href="#parts4">ろち</a></li>
                         <li id="parts5_menu"><a href="#parts5">ろつ</a></li>
                         <li id="parts6_menu"><a href="#parts6">ろは</a></li>
                         <li id="parts7_menu"><a href="#parts7">ろん</a></li>
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
                    <h3 class="ttl_while">ろ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="24739">卢<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12396">吕<span class="small">ロ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2128">呂<span class="small">ロ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5445">芦<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6532">沪<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14672">庐<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27798">𡉴<span class="small">ロ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1599">炉<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5920">枦<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24577">侣<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24980">垆<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25513">泸<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26527">虏<span class="small">ロ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2125">侶<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14935">挔<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19562">㢳<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20035">㭔<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25380">栌<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26304">胪<span class="small">ロ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="431">旅<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5747">舮<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11604">捛<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19158">㛎<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20039">㭚<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4124">梠<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4304">鹵<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8543">䡎<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10107">玈<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25322">掳<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26329">舻<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5996">鈩<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20866">㾔<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25890">硵<span class="small">ロ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="438">路<span class="small">ロ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1927">虜<span class="small">ロ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2129">賂<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4464">輅<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4767">絽<span class="small">ロ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6363">虜<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18836">㔪<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25416">榈<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25573">滤<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4243">膂<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4423">滷<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6778">馿<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13826">塷<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17323">蓾<span class="small">ロ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3013">魯<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3958">閭<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7081">魲<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12304">樐<span class="small">ロ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3012">蕗<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5567">盧<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10739">磠<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11489">擄<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11890">膐<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15839">潞<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19544">㢚<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23319">䮉<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7229">鴼<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10242">璐<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12305">㯭<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12661">儢<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12914">勴<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20130">㯝<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4449">濾<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13567">嚕<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15043">擼<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15931">瀂<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18834">㔧<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21432">䉐<span class="small">ロ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3011">櫓<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3513">廬<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4204">櫚<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5444">蘆<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5751">瀘<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8919">簬<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8920">簵<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9352">艣<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13577">嚧<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13882">壚<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15049">攎<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15392">氌<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16464">獹<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18103">鏀<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19439">㠠<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26020">髅<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4207">櫨<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4317">臚<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6246">爐<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10256">瓐<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15128">曥<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19929">㪭<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20250">㱺<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23195">䫫<span class="small">ロ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1315">露<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4828">髏<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4896">艪<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10616">矑<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18117">鏴<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18131">鐪<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20915">㿖<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23352">䮫<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4897">艫<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8937">籚<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9151">纑<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9167">罏<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17520">蠦<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4486">轤<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4736">鑢<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7851">鑥<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22889">䥨<span class="small">ロ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3014">鷺<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4738">鑪<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9743">虂<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23513">䲐<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5144">顱<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4516">驢<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7425">髗<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23437">䰕<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3898">鱸<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7194">鸕<span class="small">ロ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6564">黸<span class="small">ロ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">ろう</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="637">老<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25356">旯<span class="small">ロウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="638">労<span class="small">ロウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2130">弄<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3015">牢<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12971">㔷<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13158">劳<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18856">㕇<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27370">㺯<span class="small">ロウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2120">拉<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12462">佬<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13298">咔<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19511">㡴<span class="small">ロウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1316">郎<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5183">陋<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5797">咾<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6108">柆<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9460">荖<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10906">窂<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11078">恅<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12495">俍<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12767">剅<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12847">勆<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14027">娄<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14926">拹<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14932">挊<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16380">狫<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18787">㓪<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19789">㧯<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20226">㱞<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21776">䏠<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26395">㑝<span class="small">ロウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1317">朗<span class="small">ロウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1602">浪<span class="small">ロウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3016">狼<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3263">哢<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5360">莨<span class="small">ロウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6428">郞<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10662">砬<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10910">窌<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11096">悢<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12047">栳<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12528">倰<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13337">哰<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13339">哴<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13739">埌<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14459">崀<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14941">挵<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15578">浶<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19174">㛞<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19274">㝗<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19367">㟉<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19371">㟍<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19525">㢃<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19527">㢅<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20332">㳥<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24809">唠<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25126">崂<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25291">捞<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25533">涝<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27839">𢭐<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2995">婁<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4618">琅<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6212">朖<span class="small">ロウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6366">朗<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11686">㫰<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12082">桹<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12603">偻<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13406">啦<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14367">屚<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15195">梇<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15345">欴<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16083">烺<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17079">翋<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17248">菈<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20230">㱢<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25354">斏<span class="small">ロウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1601">廊<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5667">勞<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10687">硠<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10854">稂<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12122">棱<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16733">硦<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19816">㨓<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20233">㱥<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20990">䀶<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21094">䂰<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21279">䆡<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21348">䇭<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21662">䍚<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24919">喽<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25137">嵝<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25333">搂<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25562">溇<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25815">痨<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25972">粩<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26473">蒌<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27116">㥪<span class="small">ロウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1491">滝<span class="small">ロウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1603">楼<span class="small">ロウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2984">稜<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3130">僂<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4155">楞<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6275">粮<span class="small">ロウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6365">廊<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6535">蜋<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8826">筤<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9337">艆<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9602">蒗<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9603">蓈<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11442">搚<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14175">嫏<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24913">啷<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26280">耢<span class="small">ロウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1600">漏<span class="small">ロウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2560">摺<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3018">蝋<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4169">榔<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4268">踉<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4619">瑯<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5872">槞<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7639">銠<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8150">誏<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8652">郒<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9636">蔞<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10071">褛<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10432">瘘<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11170">慺<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11465">摟<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12342">塿<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13100">僗<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13491">嘍<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14191">嫪<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14321">寠<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14543">嶁<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14704">廔<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15790">漊<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17325">蔄<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17868">躴<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18986">㗦<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19227">㜢<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19406">㟹<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19407">㟺<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19491">㡞<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20670">㺐<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20672">㺒<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22417">䜮<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22667">䡙<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22766">䣚<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25016">塱<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25940">窭<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26499">蓢<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26666">㙟<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27639">䁖<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3724">撈<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4432">潦<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6009">樓<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7682">鋃<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7881">閬<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8516">輘<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9920">蝼<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10729">䃕<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11901">膢<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12227">樃<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13511">嘮<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14206">嫽<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14557">嶗<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14882">憦<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15863">澇<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16193">熡<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16450">獠<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17835">踜<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17928">遱<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18343">駖<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19940">㪹<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20901">㾿<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25957">篓<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26283">耧<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26865">躼<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27236">㮾<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3032">篭<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4090">螂<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5060">褸<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5247">瘻<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5429">薐<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5620">窶<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5891">臈<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9683">﨟<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10433">瘺<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10740">磖<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11008">憥<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12261">橑<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15140">朤<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15290">橯<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16686">瞜<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17173">膫<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20261">㲇<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21169">䄛<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21247">䅹<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25366">朥<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4097">螻<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4202">檪<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4589">簍<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4804">縷<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5249">癆<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8249">䝁<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9268">耬<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16767">磱<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17194">艛<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18356">駺<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21134">䃧<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21421">䉄<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23225">䬋<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23384">䯖<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23555">䳓<span class="small">ロウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1591">糧<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4848">醪<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6682">龎<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8322">賿<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8471">軁<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8914">簩<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9269">耮<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9962">䗶<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11515">擸<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12664">儱<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16935">簝<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17695">謧<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17700">謱<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17850">蹘<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22445">䝏<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23336">䮚<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24314">䕞<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3357">壟<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4201">櫟<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4316">臘<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4721">鏤<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5198">隴<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5440">蘢<span class="small">ロウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6067">瀧<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6681">龐<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7800">鏧<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8474">軂<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8536">轑<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11521">攏<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13578">嚨<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14586">巄<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14793">徿<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20151">㯿<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22068">䕩<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22400">䜎<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22461">䝤<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23937">壠<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23967">巃<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24060">爉<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26020">髅<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3899">朧<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4639">瓏<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7823">鐒<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11739">曨<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12310">櫳<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12311">㰍<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16263">爖<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17597">襩<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18262">鞻<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18291">顟<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21144">䃳<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23195">䫫<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23703">䶘<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24964">嚹<span class="small">ロウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1315">露<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4828">髏<span class="small">ロウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6460">蠟<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10772">礱<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10773">礲<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10938">竉<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16702">矓<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21261">䆍<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22885">䥢<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23352">䮫<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23495">䱶<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24139">襱<span class="small">ロウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2131">籠<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3017">聾<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6604">髝<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9964">蠪<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18539">鷜<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23500">䱾<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24178">龓<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24286">䏊<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4737">鑞<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8243">豅<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22648">䡁<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23512">䲏<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23644">䵏<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7853">鑨<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8023">靇<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7339">䪊<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23368">䮾<span class="small">ロウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24177">鸗<span class="small">ロウ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">ろく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="080">六<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3068">仂<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18844">㔹<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7910">阞<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9365">艻<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11025">忇<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11271">扐<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13222">叻<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13635">圥<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15418">氻<span class="small">ロク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3021">肋<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4001">朸<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10294">甪<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16476">玏<span class="small">ロク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="097">角<span class="small">ロク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="137">谷<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8783">竻<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13684">坴<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14755">彔<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15490">泐<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23987">录<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="25541">陆<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4910">烙<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18773">㓐<span class="small">ロク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="625">陸<span class="small">ロク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2018">鹿<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5081">勒<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5979">淕<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14064">娽<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15639">淥<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18939">㖨<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19182">㛬<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="25552">渌<span class="small">ロク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3020">禄<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10181">琭<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15218">椂<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19912">㪖<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19987">㫽<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21804">䐂<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4662">碌<span class="small">ロク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6011">祿<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10506">盝<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10577">睩<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12802">剹<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19832">㨨<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22219">䘵<span class="small">ロク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="433">緑<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3019">漉<span class="small">ロク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6424">綠<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8847">箓<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8968">粶<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11466">摝<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13503">嘞<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13825">塶<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14707">廘<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17329">蔍<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19219">㜙<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19716">㦇<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21712">䎑<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21747">䎼<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24088">禒<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12228">樚<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16190">熝<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17168">膔<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17625">觮<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17805">趢<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17834">踛<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19850">㩅<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22280">䚄<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22591">䟿<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22670">䡜<span class="small">ロク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="639">録<span class="small">ロク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6462">錄<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7715">錴<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9189">䍡<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10741">磟<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20131">㯟<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20798">㼾<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21124">䃙<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8902">簏<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17490">螰<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21609">䌒<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21858">䑅<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23091">䩮<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="25960">簕<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4480">轆<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17849">蹗<span class="small">ロク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2132">麓<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8921">簶<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18109">鏕<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18500">鵦<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18505">鵱<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20959">䀊<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23477">䱚<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18380">騼<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7048">鰳<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8938">籙<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17629">觻<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24370">䴪<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6687">龣<span class="small">ロク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18459">鱳<span class="small">ロク</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4684">鈞<span class="small">ろくろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18028">銁<span class="small">ろくろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18038">銞<span class="small">ろくろ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">ろち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="12463">侓<span class="small">ロチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13700">垏<span class="small">ロチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18903">㖀<span class="small">ロチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19906">㪐<span class="small">ロチ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">ろつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="12463">侓<span class="small">ロツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13700">垏<span class="small">ロツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14427">峍<span class="small">ロツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18903">㖀<span class="small">ロツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10676">硉<span class="small">ロツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19906">㪐<span class="small">ロツ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">ろは</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="6778">馿<span class="small">ろば</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4516">驢<span class="small">ろば</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">ろん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="24557">仑<span class="small">ロン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="997">乱<span class="small">ロン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25267">抡<span class="small">ロン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25507">沦<span class="small">ロン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3090">侖<span class="small">ロン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17995">釠<span class="small">ロン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3463">崙<span class="small">ロン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3464">崘<span class="small">ロン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4385">淪<span class="small">ロン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11393">掄<span class="small">ロン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13391">啉<span class="small">ロン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14098">婨<span class="small">ロン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17252">菕<span class="small">ロン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18194">陯<span class="small">ロン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19658">㤻<span class="small">ロン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5754">亂<span class="small">ロン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15735">溣<span class="small">ロン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16663">睔<span class="small">ロン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16749">碖<span class="small">ロン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16828">稐<span class="small">ロン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1002">論<span class="small">ロン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17833">踚<span class="small">ロン</span></a></li>
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