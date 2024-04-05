<?php
/*
 * Template Name: Yomi37
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
               <h1 class="ttl_main">音訓検索「ゆ」</h1>
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
               <p>「ゆ」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>ゆ</option>
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
                         <li id="parts1_menu"><a href="#parts1">ゆ</a></li>
                         <li id="parts2_menu"><a href="#parts2">ゆあ</a></li>
                         <li id="parts3_menu"><a href="#parts3">ゆい</a></li>
                         <li id="parts4_menu"><a href="#parts4">ゆう</a></li>
                         <li id="parts5_menu"><a href="#parts5">ゆえ</a></li>
                         <li id="parts6_menu"><a href="#parts6">ゆか</a></li>
                         <li id="parts7_menu"><a href="#parts7">ゆき</a></li>
                         <li id="parts8_menu"><a href="#parts8">ゆく</a></li>
                         <li id="parts9_menu"><a href="#parts9">ゆけ</a></li>
                         <li id="parts10_menu"><a href="#parts10">ゆこ</a></li>
                         <li id="parts11_menu"><a href="#parts11">ゆさ</a></li>
                         <li id="parts12_menu"><a href="#parts12">ゆす</a></li>
                         <li id="parts13_menu"><a href="#parts13">ゆた</a></li>
                         <li id="parts14_menu"><a href="#parts14">ゆて</a></li>
                         <li id="parts15_menu"><a href="#parts15">ゆは</a></li>
                         <li id="parts16_menu"><a href="#parts16">ゆひ</a></li>
                         <li id="parts17_menu"><a href="#parts17">ゆふ</a></li>
                         <li id="parts18_menu"><a href="#parts18">ゆみ</a></li>
                         <li id="parts19_menu"><a href="#parts19">ゆむ</a></li>
                         <li id="parts20_menu"><a href="#parts20">ゆめ</a></li>
                         <li id="parts21_menu"><a href="#parts21">ゆら</a></li>
                         <li id="parts22_menu"><a href="#parts22">ゆり</a></li>
                         <li id="parts23_menu"><a href="#parts23">ゆる</a></li>
                         <li id="parts24_menu"><a href="#parts24">ゆれ</a></li>
                         <li id="parts25_menu"><a href="#parts25">ゆわ</a></li>
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
                    <h3 class="ttl_while">ゆ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="12702">冘<span class="small">ユ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="420">由<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9308">㬰<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15432">汓<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19263">㝌<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13173">卣<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17209">苃<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20815">㽕<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22705">䢊<span class="small">ユ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="421">油<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14414">岰<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14816">怮<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17213">苬<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17941">邮<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18847">㔽<span class="small">ユ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2944">柚<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3150">兪<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5626">臾<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6529">俞<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9574">茰<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16305">牰<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19643">㤤<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13735">埇<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14686">庮<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19170">㛚<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20706">㻀<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24219">㦶<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12990">匬<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13081">偤<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15199">梌<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16087">烿<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16408">猚<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17108">聈<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18869">㕗<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18940">㖩<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22651">䡆<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24191">㔱<span class="small">ユ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="422">遊<span class="small">ユ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1912">愉<span class="small">ユ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2115">喩<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3708">揄<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4402">渝<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5385">萸<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7954">隃<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13792">堬<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14114">婾<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14150">媨<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14484">崳<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14962">揂<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15715">湵<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16734">硧<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17273">萮<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17921">逰<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19477">㡏<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19535">㢏<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19681">㥚<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20329">㳛<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20369">㴗<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20660">㺄<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20752">㼌<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20876">㾞<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23905">喻<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23980">庾<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25061">媮<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25136">嵛<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2943">愈<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4152">楡<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4237">腴<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4577">雍<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4628">瑜<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5524">逾<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6534">榆<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8179">䛕<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11583">斞<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11861">腧<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12166">楰<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12979">毹<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12980">毺<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13448">嗈<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13808">塎<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14764">彮<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14980">搈<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15351">歈<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16157">煪<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16288">牏<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17777">赨<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19205">㜉<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19953">㫍<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20509">㷏<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22129">䖻<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22217">䘱<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5244">瘉<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10058">褕<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10407">瘐<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10923">窬<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13838">墉<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16667">睮<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18336">駀<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19411">㟾<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19586">㣑<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20668">㺎<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20669">㺏<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20790">㼶<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21113">䃋<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22279">䚃<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4082">蝓<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4987">諛<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9214">羭<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15257">槦<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16285">牅<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17345">蕍<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17582">褣<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18046">鋊<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20792">㼸<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21894">䑻<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23957">寙<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24098">緰<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24394">㷱<span class="small">ユ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="816">輸<span class="small">ユ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1911">諭<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4274">踰<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5459">覦<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8286">貐<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13548">噰<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17486">螤<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17957">郺<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21408">䈶<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22431">䜽<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22531">䞻<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10927">窳<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17494">螸<span class="small">ユ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1910">癒<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3777">鼬<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7982">雝<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17754">貗<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20832">㽫<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21617">䌛<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23094">䩱<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23233">䬔<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15074">斔<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15945">瀜<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18368">騟<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18743">㒡<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22175">䗸<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15129">曧<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17392">蘨<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20684">㺠<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22496">䞕<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18538">鷛<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6518">龥<span class="small">ユ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6517">籲<span class="small">ユ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="380">湯<span class="small">ゆ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">ゆあ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="623">浴<span class="small">ゆあみ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">ゆい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="420">由<span class="small">ユイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14911">抁<span class="small">ユイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1913">唯<span class="small">ユイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2151">惟<span class="small">ユイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16522">琟<span class="small">ユイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="825">遺<span class="small">ユイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6265">瞶<span class="small">ユイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23508">䲊<span class="small">ユイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24142">讉<span class="small">ユイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23118">䪋<span class="small">ユイ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">ゆう</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="1573">又<span class="small">ユウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="233">友<span class="small">ユウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2946">尤<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12702">冘<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24194">㕛<span class="small">ユウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="076">右<span class="small">ユウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="420">由<span class="small">ユウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="993">幼<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13221">叹<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18781">㓜<span class="small">ユウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="423">有<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13049">优<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15432">汓<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19263">㝌<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24745">厌<span class="small">ユウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2166">佑<span class="small">ユウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2196">邑<span class="small">ユウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2950">酉<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6197">攸<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6251">犹<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8727">丣<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11758">肜<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13173">卣<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13950">妋<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14804">忧<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15462">沋<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17209">苃<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18890">㕱<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19133">㚭<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20315">㳊<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20815">㽕<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22705">䢊<span class="small">ユウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="421">油<span class="small">ユウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3088">侑<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4216">肬<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11060">怞<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13274">呦<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14414">岰<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14816">怮<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15491">泑<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16368">狖<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17213">苬<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17941">邮<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18847">㔽<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19629">㤑<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20636">㹨<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25087">孧<span class="small">ユウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="620">勇<span class="small">ユウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1577">幽<span class="small">ユウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2944">柚<span class="small">ユウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2945">宥<span class="small">ユウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2949">祐<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3325">囿<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5213">疣<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9199">羑<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11599">斿<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12488">俋<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12845">勈<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13303">咠<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14020">姷<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14443">峟<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14814">怣<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16305">牰<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20483">㶭<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21937">䒴<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27738">𢈗<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27816">𠧪<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2947">涌<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3575">悒<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5362">莠<span class="small">ユウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6397">祐<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8584">迶<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9157">䍃<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9200">羐<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9812">蚘<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10842">秞<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11360">挹<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13349">唀<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13354">唈<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14450">峳<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14686">庮<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15563">浟<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15567">浥<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19172">㛜<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21944">䓃<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22947">䦾<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24112">莤<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26385">莸<span class="small">ユウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="992">郵<span class="small">ユウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1914">悠<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4044">蚰<span class="small">ユウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4229">脩<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8099">訧<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8591">逌<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9808">蚴<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12224">梄<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13081">偤<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16087">烿<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16408">猚<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17108">聈<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18869">㕗<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19750">㦷<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20347">㳺<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20951">䀁<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21274">䆜<span class="small">ユウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="422">遊<span class="small">ユウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1290">雄<span class="small">ユウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1915">裕<span class="small">ユウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1917">猶<span class="small">ユウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2116">湧<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2509">揖<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4398">游<span class="small">ユウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5466">釉<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12583">傛<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13413">喅<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14150">媨<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14962">揂<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15715">湵<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17748">貁<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17921">逰<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18956">㗀<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19675">㥑<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20197">㰶<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20329">㳛<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20366">㴔<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20369">㴗<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20876">㾞<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21210">䅎<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21483">䊆<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22719">䢟<span class="small">ユウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2511">楢<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2948">猷<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7243">麀<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7589">鈾<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7978">䧺<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8741">酭<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9846">蜏<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9995">裛<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14169">嫆<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14279">孴<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16149">煜<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16157">煪<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17777">赨<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19953">㫍<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21360">䇼<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22129">䖻<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22512">䞥<span class="small">ユウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1579">誘<span class="small">ユウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1986">熊<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2182">厭<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7638">銪<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8525">輏<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15780">滺<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16179">熋<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16550">璓<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16795">禉<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18336">駀<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20790">㼶<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22279">䚃<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23215">䬀<span class="small">ユウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1578">憂<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4086">蝣<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5413">蕕<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6908">魷<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10000">褏<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9874">蝤<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9999">褎<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12223">槱<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12349">牖<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12350">牗<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16192">熠<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21894">䑻<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22025">䔱<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22146">䗑<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24394">㷱<span class="small">ユウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1916">融<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6924">鮋<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6925">䱂<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8524">輶<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17476">螎<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18426">鮂<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22385">䛻<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23266">䭂<span class="small">ユウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="991">優<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2156">鮪<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3753">黝<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7128">䳑<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9123">繇<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3777">鼬<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6969">鯈<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8719">鄾<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11209">懮<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13570">嚘<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15930">瀀<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16462">獶<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19012">㘊<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21439">䉗<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21617">䌛<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12300">櫌<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15945">瀜<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18743">㒡<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20214">㱊<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15129">曧<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17392">蘨<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19032">㘥<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20684">㺠<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9270">耰<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12316">櫾<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17051">纋<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18381">騽<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8625">邎<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24178">龓<span class="small">ユウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22899">䥳<span class="small">ユウ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="047">夕<span class="small">ゆう</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="494">結<span class="small">ゆ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5282">餔<span class="small">ゆうぐ（れ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="047">夕<span class="small">ゆう（べ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5282">餔<span class="small">ゆうめし</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">ゆえ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="694">故<span class="small">ゆえ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">ゆか</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1141">床<span class="small">ゆか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4351">牀<span class="small">ゆか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4159">榻<span class="small">ゆか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3361">夬<span class="small">ゆがけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13213">叏<span class="small">ゆがけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7353">弽<span class="small">ゆがけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7352">韘<span class="small">ゆがけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3022">歪<span class="small">ゆが（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1020">縁<span class="small">ゆかり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6453">緣<span class="small">ゆかり</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">ゆき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="173">雪<span class="small">ゆき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5038">裄<span class="small">ゆき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6288">膤<span class="small">ゆき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12214">樰<span class="small">ゆき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7993">䨮<span class="small">ゆき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2608">靱<span class="small">ゆぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2609">靭<span class="small">ゆぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5082">靫<span class="small">ゆぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5572">趁<span class="small">ゆきなや（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8341">趂<span class="small">ゆきなや（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">ゆく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2460">之<span class="small">ゆ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3060">于<span class="small">ゆ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6703">亏<span class="small">ゆ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6704">亐<span class="small">ゆ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6612">㞢<span class="small">ゆ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="273">去<span class="small">ゆ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13206">厺<span class="small">ゆ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="133">行<span class="small">ゆ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1438">如<span class="small">ゆ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26933">迈<span class="small">ゆ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="652">往<span class="small">ゆ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1160">征<span class="small">ゆ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3528">徂<span class="small">ゆ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5825">徃<span class="small">ゆ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24338">䢐<span class="small">ゆ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1778">逝<span class="small">ゆ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14788">徰<span class="small">ゆ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="777">適<span class="small">ゆ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5530">邁<span class="small">ゆ（く）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">ゆけ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="105">汽<span class="small">ゆげ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">ゆこ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="7320">鞲<span class="small">ゆごて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7355">鞱<span class="small">ゆごて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4355">韜<span class="small">ゆごて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7321">韝<span class="small">ゆごて</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">ゆさ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1582">揺<span class="small">ゆ（さぶる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6190">搖<span class="small">ゆ（さぶる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25339">摇<span class="small">ゆ（さぶる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19837">㨱<span class="small">ゆ（さぶる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">ゆす</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2944">柚<span class="small">ゆず</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1582">揺<span class="small">ゆ（すぶる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6190">搖<span class="small">ゆ（すぶる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25339">摇<span class="small">ゆ（すぶる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19837">㨱<span class="small">ゆ（すぶる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4005">杠<span class="small">ゆずりは</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6217">楪<span class="small">ゆずりは</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27705">𣜿<span class="small">ゆずりは</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15492">泔<span class="small">ゆする</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1582">揺<span class="small">ゆ（する）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6190">搖<span class="small">ゆ（する）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25339">摇<span class="small">ゆ（する）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19837">㨱<span class="small">ゆ（する）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14604">巺<span class="small">ゆず（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19561">㢲<span class="small">ゆず（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26952">逊<span class="small">ゆず（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2509">揖<span class="small">ゆず（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2676">巽<span class="small">ゆず（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1789">禅<span class="small">ゆず（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2050">遜<span class="small">ゆず（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14860">愻<span class="small">ゆず（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3727">擅<span class="small">ゆず（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6013">禪<span class="small">ゆず（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24274">䄠<span class="small">ゆず（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1446">譲<span class="small">ゆず（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3741">攘<span class="small">ゆず（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6319">讓<span class="small">ゆず（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">ゆた</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="2095">阜<span class="small">ゆた（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4223">胖<span class="small">ゆた（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14424">峊<span class="small">ゆた（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5365">殷<span class="small">ゆた（か）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1915">裕<span class="small">ゆた（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3593">愃<span class="small">ゆた（か）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="808">豊<span class="small">ゆた（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4237">腴<span class="small">ゆた（か）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="991">優<span class="small">ゆた（か）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2587">穣<span class="small">ゆた（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6320">豐<span class="small">ゆた（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5298">饒<span class="small">ゆた（か）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6270">穰<span class="small">ゆた（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5298">饒<span class="small">ゆた（かにする）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="244">委<span class="small">ゆだ（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20069">㮄<span class="small">ゆだめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4166">榜<span class="small">ゆだめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4195">檠<span class="small">ゆだめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12269">㯳<span class="small">ゆだめ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">ゆて</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5345">茹<span class="small">ゆ（でる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">ゆは</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3521">弭<span class="small">ゆはず</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1524">尿<span class="small">ゆばり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20339">㳮<span class="small">ゆばり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19328">㞙<span class="small">ゆばり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2067">溺<span class="small">ゆばり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4414">溲<span class="small">ゆばり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4242">膀<span class="small">ゆばりぶくろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11889">髈<span class="small">ゆばりぶくろ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">ゆひ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="300">指<span class="small">ゆび</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">ゆふ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="7348">䩨<span class="small">ゆぶくろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7347">韔<span class="small">ゆぶくろ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">ゆみ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="107">弓<span class="small">ゆみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5621">窿<span class="small">ゆみがた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7355">鞱<span class="small">ゆみぶくろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4355">韜<span class="small">ゆみぶくろ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">ゆむ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="9884">螠<span class="small">ゆむし</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">ゆめ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="579">努<span class="small">ゆめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6158">梦<span class="small">ゆめ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="812">夢<span class="small">ゆめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13907">夣<span class="small">ゆめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19296">㝱<span class="small">ゆめ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts21">
                    <h3 class="ttl_while">ゆら</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1582">揺<span class="small">ゆ（らぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11491">㨔<span class="small">ゆ（らぐ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6190">搖<span class="small">ゆ（らぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25339">摇<span class="small">ゆ（らぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19837">㨱<span class="small">ゆ（らぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3726">撼<span class="small">ゆ（らぐ）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts22">
                    <h3 class="ttl_while">ゆり</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5992">岼<span class="small">ゆり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6140">閖<span class="small">ゆり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27787">𠷡<span class="small">ゆり</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts23">
                    <h3 class="ttl_while">ゆる</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1582">揺<span class="small">ゆ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6190">搖<span class="small">ゆ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25339">摇<span class="small">ゆ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19837">㨱<span class="small">ゆ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1353">緩<span class="small">ゆる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4649">鬆<span class="small">ゆる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11491">㨔<span class="small">ゆ（るがす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3726">撼<span class="small">ゆ（るがす）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2424">忽<span class="small">ゆるが（せ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1582">揺<span class="small">ゆ（るぐ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6190">搖<span class="small">ゆ（るぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25339">摇<span class="small">ゆ（るぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19837">㨱<span class="small">ゆ（るぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="424">予<span class="small">ゆる（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2161">允<span class="small">ゆる（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12683">免<span class="small">ゆる（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19267">㝐<span class="small">ゆる（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="413">放<span class="small">ゆる（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1576">免<span class="small">ゆる（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3088">侑<span class="small">ゆる（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2945">宥<span class="small">ゆる（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12675">㽙<span class="small">ゆる（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="118">原<span class="small">ゆる（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="819">容<span class="small">ゆる（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1734">准<span class="small">ゆる（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2539">恕<span class="small">ゆる（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="677">許<span class="small">ゆる（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1122">釈<span class="small">ゆる（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1431">赦<span class="small">ゆる（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13196">厡<span class="small">ゆる（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2629">貰<span class="small">ゆる（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="901">縦<span class="small">ゆる（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1508">聴<span class="small">ゆる（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5914">縱<span class="small">ゆる（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6336">釋<span class="small">ゆる（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5850">聽<span class="small">ゆる（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2467">弛<span class="small">ゆる（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19558">㢮<span class="small">ゆる（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1353">緩<span class="small">ゆる（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1353">緩<span class="small">ゆる（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="901">縦<span class="small">ゆる（める）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5914">縱<span class="small">ゆる（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5575">舒<span class="small">ゆる（やか）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1646">寛<span class="small">ゆる（やか）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5135">頌<span class="small">ゆる（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25341">摊<span class="small">ゆる（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4774">綽<span class="small">ゆる（やか）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6420">寬<span class="small">ゆる（やか）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1353">緩<span class="small">ゆる（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4800">縵<span class="small">ゆる（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15042">擹<span class="small">ゆる（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3743">攤<span class="small">ゆる（やか）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts24">
                    <h3 class="ttl_while">ゆれ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1582">揺<span class="small">ゆ（れる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6190">搖<span class="small">ゆ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25339">摇<span class="small">ゆ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19837">㨱<span class="small">ゆ（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts25">
                    <h3 class="ttl_while">ゆわ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="494">結<span class="small">ゆ（わえる）</span></a></li>
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