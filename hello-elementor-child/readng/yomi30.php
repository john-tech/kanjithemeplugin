<?php
/*
 * Template Name: Yomi30
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
               <h1 class="ttl_main">音訓検索「ほ」</h1>
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
               <p>「ほ」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>ほ</option>
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
                         <li id="parts1_menu"><a href="#parts1">ほ</a></li>
                         <li id="parts2_menu"><a href="#parts2">ほい</a></li>
                         <li id="parts3_menu"><a href="#parts3">ほう</a></li>
                         <li id="parts4_menu"><a href="#parts4">ほえ</a></li>
                         <li id="parts5_menu"><a href="#parts5">ほお</a></li>
                         <li id="parts6_menu"><a href="#parts6">ほか</a></li>
                         <li id="parts7_menu"><a href="#parts7">ほき</a></li>
                         <li id="parts8_menu"><a href="#parts8">ほく</a></li>
                         <li id="parts9_menu"><a href="#parts9">ほけ</a></li>
                         <li id="parts10_menu"><a href="#parts10">ほこ</a></li>
                         <li id="parts11_menu"><a href="#parts11">ほさ</a></li>
                         <li id="parts12_menu"><a href="#parts12">ほし</a></li>
                         <li id="parts13_menu"><a href="#parts13">ほす</a></li>
                         <li id="parts14_menu"><a href="#parts14">ほそ</a></li>
                         <li id="parts15_menu"><a href="#parts15">ほた</a></li>
                         <li id="parts16_menu"><a href="#parts16">ほち</a></li>
                         <li id="parts17_menu"><a href="#parts17">ほつ</a></li>
                         <li id="parts18_menu"><a href="#parts18">ほて</a></li>
                         <li id="parts19_menu"><a href="#parts19">ほと</a></li>
                         <li id="parts20_menu"><a href="#parts20">ほね</a></li>
                         <li id="parts21_menu"><a href="#parts21">ほの</a></li>
                         <li id="parts22_menu"><a href="#parts22">ほは</a></li>
                         <li id="parts23_menu"><a href="#parts23">ほふ</a></li>
                         <li id="parts24_menu"><a href="#parts24">ほほ</a></li>
                         <li id="parts25_menu"><a href="#parts25">ほま</a></li>
                         <li id="parts26_menu"><a href="#parts26">ほむ</a></li>
                         <li id="parts27_menu"><a href="#parts27">ほめ</a></li>
                         <li id="parts28_menu"><a href="#parts28">ほら</a></li>
                         <li id="parts29_menu"><a href="#parts29">ほり</a></li>
                         <li id="parts30_menu"><a href="#parts30">ほる</a></li>
                         <li id="parts31_menu"><a href="#parts31">ほれ</a></li>
                         <li id="parts32_menu"><a href="#parts32">ほろ</a></li>
                         <li id="parts33_menu"><a href="#parts33">ほん</a></li>
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
                    <h3 class="ttl_while">ほ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="215">父<span class="small">ホ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="798">布<span class="small">ホ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2875">甫<span class="small">ホ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6441">步<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10317">㽗<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12426">佈<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24548">亩<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26558">补<span class="small">ホ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="216">歩<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3243">咐<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14918">抪<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15356">歨<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16481">玤<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16588">畂<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19139">㚴<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20223">㱛<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20318">㳍<span class="small">ホ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="806">保<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3199">匍<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5955">畆<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10315">畒<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12491">俌<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15170">柨<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20487">㶱<span class="small">ホ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1264">捕<span class="small">ホ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1775">畝<span class="small">ホ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1889">浦<span class="small">ホ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2101">哺<span class="small">ホ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2900">圃<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5883">埔<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9485">莆<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10316">畞<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13745">埗<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14446">峬<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14687">庯<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17233">荹<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18193">陠<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19055">㙅<span class="small">ホ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="406">部<span class="small">ホ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2901">菩<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4227">脯<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5514">逋<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11685">晡<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16077">烳<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20712">㻉<span class="small">ホ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="978">補<span class="small">ホ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2880">葡<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3347">堡<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5389">葆<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8912">盙<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10318">畮<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10378">痡<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13785">堢<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16525">琣<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16824">秿<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20877">㾟<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20984">䀯<span class="small">ホ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2877">蒲<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9598">蒱<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9842">蜅<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18018">鈽<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18626">圑<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19069">㙛<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21484">䊇<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21563">䋠<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21888">䑰<span class="small">ホ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2878">輔<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5054">褓<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8149">誧<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8396">踄<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8745">酺<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8913">㝬<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16903">箁<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17739">豧<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22004">䔕<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22476">䝵<span class="small">ホ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1265">舗<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2902">鋪<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6032">舖<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8672">郶<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15859">潽<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21591">䋽<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5282">餔<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7279">䩉<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21399">䈬<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21413">䈻<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21897">䒀<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23328">䮒<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5886">鯆<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8911">簠<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18495">鵏<span class="small">ホ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1552">簿<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3795">黼<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5096">鞴<span class="small">ホ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24367">䲕<span class="small">ホ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="006">火<span class="small">ほ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1531">帆<span class="small">ほ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24211">㠶<span class="small">ほ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1459">穂<span class="small">ほ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21893">䑺<span class="small">ほ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6131">穗<span class="small">ほ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="221">母<span class="small">ボ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2904">戊<span class="small">ボ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2905">牡<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3378">姆<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3676">拇<span class="small">ボ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2903">姥<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11315">胟<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14434">峔<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16870">竼<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19786">㧫<span class="small">ボ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2832">莫<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13733">埄<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14035">娒<span class="small">ボ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2901">菩<span class="small">ボ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1550">募<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19482">㡔<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24284">䍙<span class="small">ボ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="807">墓<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2830">摸<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3402">媽<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7605">鉧<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14192">嫫<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14865">慔<span class="small">ボ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="979">暮<span class="small">ボ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="989">模<span class="small">ボ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1551">慕<span class="small">ボ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1572">膜<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11259">摹<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15383">氁<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24025">漨<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13866">墲<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5847">糢<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12258">橅<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17034">縸<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5000">謨<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17696">謩<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21433">䉑<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22685">䡫<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22863">䥈<span class="small">ボ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1552">簿<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17714">譕<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23491">䱯<span class="small">ボ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17858">躌<span class="small">ボ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">ほい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="4914">焙<span class="small">ホイ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">ほう</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="3203">匚<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6018">勹<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="222">方<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1562">乏<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6608">丰<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13138">凤<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13167">勽<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="611">包<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2089">汎<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9377">芃<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12404">仿<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14345">尥<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="789">判<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="810">防<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1270">坊<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1554">芳<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1558">邦<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1561">妨<span class="small">ホウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2311">亨<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2688">呆<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3527">彷<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3668">抔<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3677">抛<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4330">泛<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8638">邡<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11357">抙<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12427">伻<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12752">刨<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12927">匉<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13060">佨<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13241">吥<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13895">夆<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13968">妦<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13987">姂<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14346">尦<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14673">庒<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14915">报<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15450">汸<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18883">㕩<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18885">㕫<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19268">㝑<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19618">㤃<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19770">㧍<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21924">䒠<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22737">䢶<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24185">㑂<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25504">沣<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="413">放<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="610">法<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="981">宝<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1267">抱<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1269">肪<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1560">奉<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1565">房<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1891">泡<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2907">庖<span class="small">ホウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2909">朋<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3244">咆<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3552">怦<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4011">枋<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5331">苞<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5894">泙<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5968">垉<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6491">拋<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11316">抨<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11603">㫄<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11640">昉<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11641">昘<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11774">肨<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13062">佱<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13918">奅<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14274">孢<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14420">峀<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14810">怉<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16017">炐<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16296">牥<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16362">狍<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16481">玤<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18823">㔙<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18899">㕻<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19150">㚿<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19151">㛁<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20031">㭋<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20267">㲏<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20323">㳒<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22706">䢍<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23898">咅<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="806">保<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1544">封<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1555">胞<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4028">枹<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4903">炮<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10179">珐<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10354">疺<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10524">眆<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10783">祊<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11123">恲<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11390">拼<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11609">瓬<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16038">炰<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16277">爮<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16586">甭<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16643">盽<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16870">竼<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17139">胓<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18702">㑟<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20268">㲒<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21075">䂜<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21187">䄱<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23946">姘<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1249">浜<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1266">峰<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1268">砲<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1557">倣<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1892">俸<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1893">剖<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1894">紡<span class="small">ホウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2906">峯<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3389">娉<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3780">旁<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4040">蚌<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4884">舫<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5033">袍<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5221">疱<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5516">迸<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5599">皰<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8360">趵<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9789">蚄<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10105">覂<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10651">砝<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10660">砰<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11124">㤣<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11355">捀<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11356">捊<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12524">倗<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12834">勏<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13330">哣<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13344">哹<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13724">垹<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13725">垺<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13733">埄<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13734">埅<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14043">娝<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14630">帮<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14833">悙<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14942">挷<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15575">浲<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15628">淓<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16502">珤<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16653">眪<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19054">㙃<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19055">㙅<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19164">㛔<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19795">㧸<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20710">㻄<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20767">㼞<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21659">䍖<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23956">宲<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24111">莑<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25292">捠<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27156">㧵<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="406">部<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="980">訪<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1553">崩<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1856">培<span class="small">ホウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2908">捧<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2910">烹<span class="small">ホウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2911">萌<span class="small">ホウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2912">萠<span class="small">ホウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2914">逢<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3201">匏<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3344">堋<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3522">弸<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4048">蚫<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4912">烽<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5372">菠<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8583">逄<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8802">笣<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9524">菢<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9525">菶<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10265">瓟<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10470">皏<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10674">硑<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11389">掊<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11608">旊<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11810">胮<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11831">脬<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12075">桻<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12076">梆<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12077">梈<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12554">偑<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13372">唪<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13764">埲<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13928">奟<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14069">婄<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15603">涪<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15625">淎<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17431">蛃<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17543">袌<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17812">趽<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18934">㖣<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19282">㝟<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19385">㟝<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19669">㥊<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20493">㶻<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20593">㸼<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21678">䍬<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21697">䎂<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22118">䖫<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22574">䟪<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24155">邫<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="809">報<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="982">棒<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1273">傍<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1810">棚<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3347">堡<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3498">幇<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3526">彭<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4622">琺<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4762">絣<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4914">焙<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5389">葆<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6513">逬<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7564">鈁<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7871">閍<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7995">雱<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8380">跑<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9572">葑<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10180">琫<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10685">硥<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11415">掽<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12118">棓<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12119">椖<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13785">堢<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13802">堼<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14487">崶<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15694">湗<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16314">犃<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16525">琣<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17888">軯<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17891">軳<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18965">㗊<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19198">㜂<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19814">㨐<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20069">㮄<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20195">㰴<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20725">㻚<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20986">䀱<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21096">䂲<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21800">䏽<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21801">䏾<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22344">䛌<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24131">蛢<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24292">䑫<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="808">豊<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1559">飽<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2102">蜂<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4411">滂<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4661">硼<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4692">鉋<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5394">蒡<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8407">跰<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9055">綁<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9845">蛖<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9994">裒<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10280">瓿<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11440">搒<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12597">傰<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12801">剻<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13463">嗙<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13815">塜<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13816">塝<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14174">嫎<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14319">寚<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14527">嵭<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16163">煲<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16322">犎<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16605">痭<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16831">稖<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16832">稝<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17008">綘<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17189">舽<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17655">誁<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18465">鳯<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19694">㥬<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19812">㨍<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22229">䙀<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22971">䧛<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23212">䫽<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23990">徬<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24308">䔊<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27111">鉳<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27344">㷛<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2881">蔀<span class="small">ホウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2885">鳳<span class="small">ホウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2913">蓬<span class="small">ホウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2916">鞄<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4166">榜<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4242">膀<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4358">靤<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4642">髣<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5054">褓<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7433">颮<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9122">綳<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9790">蜯<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10714">碰<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11462">摓<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13494">嘐<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13823">塳<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13824">塴<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15271">樥<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15815">漰<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16170">煿<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16290">牓<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16903">箁<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17739">豧<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18337">駂<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18466">鳵<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19490">㡝<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19710">㦀<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21651">䍌<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21730">䎧<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22765">䣙<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24025">漨<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24345">䦕<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24951">嘣<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25218">廍<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1890">褒<span class="small">ホウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2915">鋒<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2917">鴇<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3852">魴<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4427">澎<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4646">髱<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4668">磅<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6792">骲<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6907">䰷<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7094">鴋<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7245">麃<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8514">輣<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8672">郶<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8864">篈<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9097">緥<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11811">膖<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12220">槰<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13103">僼<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13510">嘭<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14651">幚<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14877">憉<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17346">蕔<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18341">駍<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18475">鴌<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19449">㠮<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20528">㷯<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20941">㿶<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21166">䄘<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21235">䅭<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21591">䋽<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22147">䗒<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22524">䞳<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23079">䩝<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23532">䲱<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24052">熢<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24253">㷭<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26567">裦<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1556">縫<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1564">膨<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3855">鮑<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3948">麭<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7246">麅<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7367">韸<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7708">錇<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8319">賲<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8320">賵<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8723">鄷<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8877">篣<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9758">虣<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9902">螃<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10284">甊<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15388">氆<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16761">磞<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17023">縍<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17101">耪<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18061">錋<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18177">闁<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20133">㯡<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20247">㱶<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21909">䒍<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22245">䙖<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22982">䧨<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23025">䨜<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23549">䳈<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23688">䶂<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24105">艕<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24327">䙜<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27137">鍅<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4588">篷<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4802">繃<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4993">謗<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6310">襃<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6511">幫<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6833">髼<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6945">鮩<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7313">䩬<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7484">餢<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8901">篰<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9844">䗬<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15122">曓<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16583">甏<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17493">螷<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17611">覫<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17687">謈<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18256">鞛<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20143">㯱<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22614">䠙<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23229">䬏<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23296">䭰<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24325">䗦<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6320">豐<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6682">龎<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6839">鬅<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9936">蟛<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9937">蟚<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17853">蹦<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18258">鞤<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18496">鵖<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22170">䗱<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22685">䡫<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23034">䨦<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23416">䯽<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23624">䴶<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24359">䭋<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27145">鎽<span class="small">ホウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1231">爆<span class="small">ホウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2918">鵬<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6120">寳<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6681">龐<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7271">䴺<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7674">鏠<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10492">䶌<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10770">礟<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16339">犥<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19017">㘐<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22866">䥋<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23100">䩷<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23421">䰃<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23563">䳝<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23564">䳞<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27151">鏰<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6119">寶<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11889">髈<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14795">忁<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17387">蘕<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18272">韼<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18602">齙<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18745">㒥<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23105">䩼<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23578">䳰<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24175">騯<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26039">纄<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6834">鬔<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7028">鰟<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7996">霶<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8025">霻<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8722">酆<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10769">礮<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14329">寷<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15968">灃<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15975">灋<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17400">蘴<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18526">鶭<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18148">鑝<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22820">䤖<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9843">蠭<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17523">蠯<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18149">鑤<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7274">䵄<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8024">靊<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23368">䮾<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18246">靌<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7273">麷<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23600">䴐<span class="small">ホウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23050">䨻<span class="small">ホウ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27863">𣖔<span class="small">ほう</span></a></li>
                         <li class="others_kanji onyomi"><a href="6021">厶<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="984">亡<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6718">兦<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6719">亾<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="229">毛<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1562">乏<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6608">丰<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12697">冃<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13122">冈<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13167">勽<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24692">冇<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="221">母<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1281">矛<span class="small">ボウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2904">戊<span class="small">ボウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2919">卯<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6073">夘<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21654">䍏<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1271">忙<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1908">妄<span class="small">ボウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2921">牟<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5315">芒<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6041">网<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8631">邙<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13226">吂<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15431">汒<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19765">㧇<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="810">防<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="983">忘<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1270">坊<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1561">妨<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2688">呆<span class="small">ボウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2905">牡<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3438">尨<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5860">皃<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8283">㒵<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9400">芼<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10317">㽗<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10955">㤀<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11950">杗<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13916">奀<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13987">姂<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14900">戼<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18894">㕵<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19268">㝑<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19769">㧌<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19770">㧍<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24548">亩<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25369">杧<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1269">肪<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1284">茂<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1565">房<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1906">盲<span class="small">ボウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2920">孟<span class="small">ボウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2922">茅<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3676">拇<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5319">氓<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5335">茆<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5586">罔<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6284">冐<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10305">甿<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11603">㫄<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12163">枆<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12461">侔<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12840">劺<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13271">呣<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14810">怉<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15493">泖<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16296">牥<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16297">牦<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16481">玤<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16588">畂<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16639">盳<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18583">黾<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18758">㒺<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19144">㚹<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20031">㭋<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20032">㭌<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22706">䢍<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25116">峁<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1272">冒<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1566">某<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2924">虻<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3213">厖<span class="small">ボウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3911">昴<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5350">茫<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5381">莽<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5955">畆<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9457">䒽<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10315">畒<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10525">眊<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11077">恈<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11091">恾<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11315">胟<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15166">柕<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15534">洠<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16307">牳<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16871">笀<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19374">㟐<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20268">㲒<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20921">㿞<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21075">䂜<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21187">䄱<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24321">䖟<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1775">畝<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1893">剖<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1894">紡<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1907">耗<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3780">旁<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3781">旄<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4035">桙<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4040">蚌<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5033">袍<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5479">耄<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9489">莔<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10316">畞<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12524">倗<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12706">冡<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12972">毣<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13331">哤<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13734">埅<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14033">娏<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15561">浝<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16383">狵<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16723">砪<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17061">罞<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19370">㟌<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19654">㤶<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19971">㫧<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20649">㹸<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20977">䀤<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21312">䇇<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21541">䋃<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21787">䏬<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23977">庬<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24186">㑤<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26376">莣<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="612">望<span class="small">ボウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2911">萌<span class="small">ボウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2912">萠<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3344">堋<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3585">惘<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5034">袤<span class="small">ボウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5156">眸<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6158">梦<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7675">釯<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9526">菵<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9527">莾<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10543">䀮<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10686">硭<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14127">媌<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15139">朚<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15670">渵<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16311">牻<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16887">笷<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17543">袌<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17604">覒<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17812">趽<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17879">軞<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17977">酕<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18759">㒻<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19476">㡌<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21213">䅒<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21794">䏵<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21964">䓝<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22113">䖥<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22118">䖫<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="982">棒<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1273">傍<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1274">帽<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2135">貿<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9456">茻<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9825">蛑<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9826">蛧<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10318">畮<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10379">痝<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12398">㮊<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13787">堥<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14507">嵍<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15211">棢<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17279">萺<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18953">㖼<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20069">㮄<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20278">㲝<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20370">㴘<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21975">䓮<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22344">䛌<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22570">䟥<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23951">媢<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24284">䍙<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27598">䋞<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="812">夢<span class="small">ボウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2923">蒙<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3849">黽<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4411">滂<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5394">蒡<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5868">楙<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7997">雺<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9845">蛖<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10986">愗<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12597">傰<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12982">毷<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13816">塝<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14174">嫎<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15102">暓<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15727">溕<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16580">瓾<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16605">痭<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16831">稖<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17189">舽<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19067">㙙<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19412">㟿<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19694">㥬<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19918">㪞<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19998">㬒<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20081">㮘<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20281">㲠<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20390">㴳<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20954">䀄<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21004">䁅<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21230">䅦<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21986">䓼<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22971">䧛<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24026">漭<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1285">網<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2103">貌<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2925">鉾<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4166">榜<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4242">膀<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4641">髦<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4700">鋩<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9094">緢<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9634">蓩<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9790">蜯<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9827">蝄<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9864">蜢<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10587">瞀<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13891">壾<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13907">夣<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17829">踇<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21375">䈍<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21730">䎧<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22668">䡚<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23303">䭷<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24322">䗈<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="811">暴<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3141">儚<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4101">蟒<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4879">甍<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6526">蝱<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6825">髳<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8168">誷<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8515">輞<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8712">鄮<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9882">蝥<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10600">瞢<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11832">朢<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14204">嫹<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15280">橗<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15384">氂<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16332">犛<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17341">蕄<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18479">鴔<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21042">䁳<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21235">䅭<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21585">䋷<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22142">䗋<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1563">謀<span class="small">ボウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1564">膨<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4444">濛<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7397">䫉<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8716">鄳<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11204">懞<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16461">獴<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17969">鄸<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19094">㙹<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19430">㠓<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19864">㩚<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20133">㯡<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21910">䒎<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22430">䜼<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23446">䰣<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23975">幪<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3631">懋<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3810">鴾<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3900">朦<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3928">曚<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4102">蠎<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4200">檬<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4993">謗<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6737">駹<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7268">麰<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7742">鍪<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9916">蟊<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11203">懜<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12660">儤<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15122">曓<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15391">氋<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16692">瞴<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17687">謈<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21035">䁫<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21856">䑃<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22614">䠙<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22622">䠢<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3953">魍<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4448">瀑<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5173">矇<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7319">鞪<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9935">蟱<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10760">礞<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11213">懵<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11717">㬥<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18233">霥<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19242">㜴<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22258">䙦<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22858">䥂<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22863">䥈<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23474">䱕<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26040">鯍<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4895">艨<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9721">蘉<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9954">蠓<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18444">鯭<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18517">鶜<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22871">䥐<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23421">䰃<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23666">䵨<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11889">髈<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14795">忁<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19296">㝱<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22817">䤓<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24175">騯<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10601">矒<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18243">靀<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21912">䒐<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23630">䴿<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7510">饛<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8021">霿<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18296">顭<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22820">䤖<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6855">䰒<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18587">鼆<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22896">䥰<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7233">䴌<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7234">鸏<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23635">䵆<span class="small">ボウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6936">䲛<span class="small">ボウ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4140">棍<span class="small">ぼう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3485">帚<span class="small">ほうき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3525">彗<span class="small">ほうき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5942">菷<span class="small">ほうき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4543">箒<span class="small">ほうき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8890">篲<span class="small">ほうき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3421">孛<span class="small">ほうきぼし</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3525">彗<span class="small">ほうきぼし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8890">篲<span class="small">ほうきぼし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5479">耄<span class="small">ほう（ける）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2425">惚<span class="small">ほう（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4914">焙<span class="small">ほう（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4151">楔<span class="small">ほうだて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12345">孒<span class="small">ぼうふら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25069">孓<span class="small">ぼうふら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3344">堋<span class="small">ほうむ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1480">葬<span class="small">ほうむ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9562">塟<span class="small">ほうむ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3677">抛<span class="small">ほう（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="413">放<span class="small">ほう（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6491">拋<span class="small">ほう（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">ほえ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="2818">吠<span class="small">ほ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3226">吼<span class="small">ほ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3244">咆<span class="small">ほ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3261">哮<span class="small">ほ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24225">㫴<span class="small">ほ（える）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">ほお</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1897">朴<span class="small">ほお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2104">頬<span class="small">ほお</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="6468">頰<span class="small">ほお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4312">臉<span class="small">ほお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6504">髥<span class="small">ほおひげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4644">髯<span class="small">ほおひげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5145">顴<span class="small">ほおぼね</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">ほか</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="096">外<span class="small">ほか</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="353">他<span class="small">ほか</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="817">余<span class="small">ほか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3078">佗<span class="small">ほか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5819">餘<span class="small">ほか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3922">暈<span class="small">ぼか（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3922">暈<span class="small">ぼか（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1317">朗<span class="small">ほが（らか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6212">朖<span class="small">ほが（らか）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6366">朗<span class="small">ほが（らか）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">ほき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="27819">𡵅<span class="small">ほき</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">ほく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei onyomi"><a class="color2" href="2926">卜<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3067">仆<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5733">攵<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5734">攴<span class="small">ホク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="223">北<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11270">扑<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13634">圤<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16011">炇<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13707">垘<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22555">䟔<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="2086">剥<span class="small">ホク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="6467">剝<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21330">䇚<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5039">袱<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5907">殕<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17251">菐<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18462">鳪<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22577">䟮<span class="small">ホク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1895">僕<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12622">僰<span class="small">ホク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1896">撲<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8408">踣<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12623">㒒<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13854">墣<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14655">幞<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16445">獛<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20022">㬼<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22979">䧤<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4186">樸<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15033">擈<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20291">㲫<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20533">㷶<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22047">䕎<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5752">濮<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10079">襆<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10888">穙<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12259">檏<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19093">㙸<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20146">㯷<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22170">䗱<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23419">䰁<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24231">㬧<span class="small">ホク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2831">曝<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4289">蹼<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8534">轐<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8767">醭<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12624">䑑<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23342">䮡<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="26817">贌<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7821">鏷<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10092">襮<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17049">纀<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23109">䪁<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23650">䵗<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23597">䴆<span class="small">ホク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18559">鸔<span class="small">ホク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2926">卜<span class="small">ボク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="073">木<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5733">攵<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5734">攴<span class="small">ボク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="074">目<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11270">扑<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19763">㧅<span class="small">ボク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1897">朴<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4329">沐<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16358">狇<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18895">㕶<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24336">䢋<span class="small">ボク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="613">牧<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5327">苜<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6284">冐<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13685">坶<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16018">炑<span class="small">ボク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1272">冒<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13707">垘<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22555">䟔<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9791">蚞<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12972">毣<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17244">莯<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19052">㙁<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20855">㾇<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21536">䊾<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24186">㑤<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14127">媌<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18759">㒻<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19583">㣎<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19976">㫯<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5907">殕<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17251">菐<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17279">萺<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18219">雮<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19482">㡔<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20987">䀲<span class="small">ボク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2105">睦<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12164">楘<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21006">䁇<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22577">䟮<span class="small">ボク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1567">墨<span class="small">ボク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1895">僕<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12622">僰<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19204">㜈<span class="small">ボク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1287">黙<span class="small">ボク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1896">撲<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6222">樢<span class="small">ボク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6380">墨<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8002">霂<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9345">艒<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12623">㒒<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13519">嘿<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13534">噗<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14205">嫼<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16445">獛<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22524">䞳<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="2927">穆<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4186">樸<span class="small">ボク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6254">默<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15033">擈<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20208">㱄<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20291">㲫<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20532">㷵<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20533">㷶<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22430">䜼<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4798">繆<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5752">濮<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12259">檏<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7319">鞪<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13573">嚜<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17502">蟔<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20146">㯷<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22170">䗱<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24036">濹<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4289">蹼<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12624">䑑<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16252">爅<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17596">襥<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3825">鶩<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21051">䁼<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="25826">癦<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9148">纆<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21053">䁿<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22184">䘃<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23650">䵗<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24369">䳱<span class="small">ボク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23597">䴆<span class="small">ボク</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6003">樮<span class="small">ほくそ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="660">解<span class="small">ほぐ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6314">觧<span class="small">ほぐ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5228">痣<span class="small">ほくろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26154">黡<span class="small">ほくろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3758">黶<span class="small">ほくろ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">ほけ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2425">惚<span class="small">ぼ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3922">暈<span class="small">ぼ（ける）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">ほこ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3642">戈<span class="small">ほこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6028">殳<span class="small">ほこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1281">矛<span class="small">ほこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3069">仗<span class="small">ほこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4035">桙<span class="small">ほこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3647">戛<span class="small">ほこ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2359">戟<span class="small">ほこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3648">戞<span class="small">ほこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4129">棘<span class="small">ほこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11224">㦸<span class="small">ほこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4693">鉈<span class="small">ほこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2925">鉾<span class="small">ほこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4167">槊<span class="small">ほこ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2915">鋒<span class="small">ほこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27145">鎽<span class="small">ほこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7674">鏠<span class="small">ほこ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2915">鋒<span class="small">ほこさき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27145">鎽<span class="small">ほこさき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7674">鏠<span class="small">ほこさき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5635">祠<span class="small">ほこら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3340">埃<span class="small">ほこり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1530">伐<span class="small">ほこ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3364">夸<span class="small">ほこ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3084">侘<span class="small">ほこ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5625">矜<span class="small">ほこ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12393">傠<span class="small">ほこ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1089">誇<span class="small">ほこ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2682">詫<span class="small">ほこ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19690">㥤<span class="small">ほこ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2057">綻<span class="small">ほころ（びる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2057">綻<span class="small">ほころ（ぶ）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">ほさ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="2180">穎<span class="small">ほさき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5653">頴<span class="small">ほさき</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">ほし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="170">星<span class="small">ほし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11654">曐<span class="small">ほし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11655">皨<span class="small">ほし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20835">㽮<span class="small">ほし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="995">欲<span class="small">ほ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8969">糇<span class="small">ほしいい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5272">糒<span class="small">ほしいい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7488">餱<span class="small">ほしいい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="413">放<span class="small">ほしいまま</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2785">宕<span class="small">ほしいまま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3082">侈<span class="small">ほしいまま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="922">専<span class="small">ほしいまま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2015">恣<span class="small">ほしいまま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1948">淫<span class="small">ほしいまま</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6165">專<span class="small">ほしいまま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3064">亶<span class="small">ほしいまま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4574">肆<span class="small">ほしいまま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="941">誕<span class="small">ほしいまま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2799">蕩<span class="small">ほしいまま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="901">縦<span class="small">ほしいまま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3727">擅<span class="small">ほしいまま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5569">盪<span class="small">ほしいまま</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5914">縱<span class="small">ほしいまま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5570">蘯<span class="small">ほしいまま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4509">驕<span class="small">ほしいまま</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2638">穿<span class="small">ほじく（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21282">䆤<span class="small">ほじく（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4227">脯<span class="small">ほじし</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4229">脩<span class="small">ほじし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4244">膊<span class="small">ほじし</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2638">穿<span class="small">ほじ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21282">䆤<span class="small">ほじ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">ほす</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="839">干<span class="small">ほ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6699">乹<span class="small">ほ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1043">乾<span class="small">ほ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3916">晞<span class="small">ほ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6700">亁<span class="small">ほ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15810">漧<span class="small">ほ（す）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">ほそ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="11968">枘<span class="small">ほぞ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26311">脐<span class="small">ほぞ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21826">䐡<span class="small">ほぞ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4314">臍<span class="small">ほぞ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="139">細<span class="small">ほそ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2047">痩<span class="small">ほそ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6450">瘦<span class="small">ほそ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1785">繊<span class="small">ほそ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6099">纎<span class="small">ほそ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6098">纖<span class="small">ほそ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3845">毫<span class="small">ほそげ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="139">細<span class="small">ほそ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">ほた</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4163">榾<span class="small">ほた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4163">榾<span class="small">ほだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6713">馽<span class="small">ほだ（し）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4755">絆<span class="small">ほだ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6706">馵<span class="small">ほだ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6713">馽<span class="small">ほだ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1669">蛍<span class="small">ほたる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17270">萤<span class="small">ほたる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5682">螢<span class="small">ほたる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2415">釦<span class="small">ボタン</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4685">鈕<span class="small">ボタン</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">ほち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="19113">㚕<span class="small">ホチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19633">㤕<span class="small">ホチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24011">沷<span class="small">ホチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13338">哱<span class="small">ホチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19168">㛘<span class="small">ホチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23295">䭯<span class="small">ホチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23143">䪬<span class="small">ホチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16351">犻<span class="small">ボチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13682">坲<span class="small">ボチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13689">坺<span class="small">ボチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18897">㕹<span class="small">ボチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12493">侼<span class="small">ボチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13714">垡<span class="small">ボチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19048">㘺<span class="small">ボチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21310">䇅<span class="small">ボチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17952">郣<span class="small">ボチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19375">㟑<span class="small">ボチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21190">䄶<span class="small">ボチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21868">䑔<span class="small">ボチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19978">㫲<span class="small">ボチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20496">㶿<span class="small">ボチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22794">䣹<span class="small">ボチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14551">嶏<span class="small">ボチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15276">橃<span class="small">ボチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17364">藅<span class="small">ボチ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">ほつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="2886">弗<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24773">发<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3421">孛<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16351">犻<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13292">咈<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19633">㤕<span class="small">ホツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="391">発<span class="small">ホツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2106">勃<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11664">昢<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12493">侼<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18825">㔜<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9490">荸<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11358">挬<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13338">哱<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15565">浡<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17952">郣<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19168">㛘<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19375">㟑<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21190">䄶<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9355">艴<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11558">㪍<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11833">脖<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12078">桲<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19978">㫲<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20496">㶿<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5749">發<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6236">渤<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9573">葧<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26880">㛲<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25224">彂<span class="small">ホツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1232">髪<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8148">誖<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23295">䭯<span class="small">ホツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6356">髮<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7676">鋍<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14551">嶏<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7476">餑<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7518">馞<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23143">䪬<span class="small">ホツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7140">鵓<span class="small">ホツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="610">法<span class="small">ホッ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13062">佱<span class="small">ホッ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20323">㳒<span class="small">ホッ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15975">灋<span class="small">ホッ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1568">没<span class="small">ボツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3421">孛<span class="small">ボツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5932">沒<span class="small">ボツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13649">圽<span class="small">ボツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5300">歿<span class="small">ボツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12894">殁<span class="small">ボツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12895">歾<span class="small">ボツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2106">勃<span class="small">ボツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12493">侼<span class="small">ボツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18825">㔜<span class="small">ボツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3574">悖<span class="small">ボツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9490">荸<span class="small">ボツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15565">浡<span class="small">ボツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17236">莈<span class="small">ボツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11833">脖<span class="small">ボツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6236">渤<span class="small">ボツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11089">愂<span class="small">ボツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20398">㴾<span class="small">ボツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7140">鵓<span class="small">ボツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1270">坊<span class="small">ボッ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27755">𩸽<span class="small">ほっけ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="995">欲<span class="small">ほっ（する）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2961">慾<span class="small">ほっ（する）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="660">解<span class="small">ほつ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6314">觧<span class="small">ほつ（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">ほて</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="16073">热<span class="small">ほて（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="586">熱<span class="small">ほて（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">ほと</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="774">程<span class="small">ほど</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1638">缶<span class="small">ほとぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10282">瓯<span class="small">ほとぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10272">缻<span class="small">ほとぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4875">甌<span class="small">ほとぎ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="660">解<span class="small">ほど（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6314">觧<span class="small">ほど（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="803">仏<span class="small">ほとけ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5741">佛<span class="small">ほとけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19038">㘬<span class="small">ほとけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27778">𠏹<span class="small">ほとけ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="660">解<span class="small">ほど（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6314">觧<span class="small">ほど（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1423">施<span class="small">ほどこ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="891">捨<span class="small">ほどこ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7134">䳌<span class="small">ほととぎす</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3814">鵑<span class="small">ほととぎす</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5516">迸<span class="small">ほとばし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6513">逬<span class="small">ほとばし（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1435">潤<span class="small">ほと（びる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2691">殆<span class="small">ほとほと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16073">热<span class="small">ほとぼり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="586">熱<span class="small">ほとぼり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6589">丄<span class="small">ほとり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="039">上<span class="small">ほとり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="607">辺<span class="small">ほとり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25026">头<span class="small">ほとり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17910">边<span class="small">ほとり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4328">沂<span class="small">ほとり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25529">浔<span class="small">ほとり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1534">畔<span class="small">ほとり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5190">陲<span class="small">ほとり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4418">滸<span class="small">ほとり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4431">潯<span class="small">ほとり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4438">濆<span class="small">ほとり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="167">頭<span class="small">ほとり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5779">邉<span class="small">ほとり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5780">邊<span class="small">ほとり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2691">殆<span class="small">ほとん（ど）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1051">幾<span class="small">ほとん（ど）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19504">㡬<span class="small">ほとん（ど）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">ほね</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="875">骨<span class="small">ほね</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1966">骸<span class="small">ほね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4825">骼<span class="small">ほね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23379">䯐<span class="small">ほね</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts21">
                    <h3 class="ttl_while">ほの</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1325">炎<span class="small">ほのお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2187">焔<span class="small">ほのお</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6448">焰<span class="small">ほのお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16119">焱<span class="small">ほのお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24251">㷔<span class="small">ほのお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24051">熖<span class="small">ほのお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16214">燄<span class="small">ほのお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3066">仄<span class="small">ほの（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3529">彿<span class="small">ほの（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3561">恍<span class="small">ほの（か）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4343">洸<span class="small">ほの（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4642">髣<span class="small">ほの（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4645">髴<span class="small">ほの（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3928">曚<span class="small">ほのぐら（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3066">仄<span class="small">ほの（めかす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4986">諷<span class="small">ほの（めかす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3066">仄<span class="small">ほの（めく）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts22">
                    <h3 class="ttl_while">ほは</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="12274">樯<span class="small">ほばしら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4190">檣<span class="small">ほばしら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4894">艢<span class="small">ほばしら</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts23">
                    <h3 class="ttl_while">ほふ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3444">屠<span class="small">ほふ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts24">
                    <h3 class="ttl_while">ほほ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="821">略<span class="small">ほぼ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1476">粗<span class="small">ほぼ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6260">畧<span class="small">ほぼ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19914">㪘<span class="small">ほぼ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4557">麁<span class="small">ほぼ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7260">麄<span class="small">ほぼ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3790">斂<span class="small">ほぼ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6502">麤<span class="small">ほぼ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts25">
                    <h3 class="ttl_while">ほま</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1292">誉<span class="small">ほま（れ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6317">譽<span class="small">ほま（れ）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts26">
                    <h3 class="ttl_while">ほむ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1325">炎<span class="small">ほむら</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts27">
                    <h3 class="ttl_while">ほめ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="398">美<span class="small">ほ（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1292">誉<span class="small">ほ（める）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5135">頌<span class="small">ほ（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="538">賞<span class="small">ほ（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="714">賛<span class="small">ほ（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1890">褒<span class="small">ほ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18177">闁<span class="small">ほ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6310">襃<span class="small">ほ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6327">贊<span class="small">ほ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6317">譽<span class="small">ほ（める）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2457">讃<span class="small">ほ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2458">讚<span class="small">ほ（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts28">
                    <h3 class="ttl_while">ほら</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1844">洞<span class="small">ほら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3873">鯔<span class="small">ぼら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5723">鰡<span class="small">ぼら</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2785">宕<span class="small">ほらあな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3465">嵌<span class="small">ほらあな</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1985">窟<span class="small">ほらあな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6104">篏<span class="small">ほらあな</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2962">螺<span class="small">ほらがい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9961">蟸<span class="small">ほらがい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4112">蠡<span class="small">ほらがい</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts29">
                    <h3 class="ttl_while">ほり</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4350">洫<span class="small">ほり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1898">堀<span class="small">ほり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5192">隍<span class="small">ほり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6234">湟<span class="small">ほり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3350">塹<span class="small">ほり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19408">㟻<span class="small">ほり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2421">壕<span class="small">ほり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2422">濠<span class="small">ほり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13878">壍<span class="small">ほり</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts30">
                    <h3 class="ttl_while">ほる</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="18790">㓮<span class="small">ほ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1075">掘<span class="small">ほ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1506">彫<span class="small">ほ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5081">勒<span class="small">ほ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3350">塹<span class="small">ほ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19408">㟻<span class="small">ほ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4580">雕<span class="small">ほ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13878">壍<span class="small">ほ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7829">鎸<span class="small">ほ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4722">鏨<span class="small">ほ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7170">鵰<span class="small">ほ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4732">鐫<span class="small">ほ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts31">
                    <h3 class="ttl_while">ほれ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2425">惚<span class="small">ほ（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts32">
                    <h3 class="ttl_while">ほろ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5035">袰<span class="small">ほろ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2397">幌<span class="small">ほろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9111">縨<span class="small">ほろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10071">褛<span class="small">ぼろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5060">褸<span class="small">ぼろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4804">縷<span class="small">ぼろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5070">襤<span class="small">ぼろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5829">繿<span class="small">ぼろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4470">輜<span class="small">ほろぐるま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8520">輺<span class="small">ほろぐるま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="984">亡<span class="small">ほろ（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6718">兦<span class="small">ほろ（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6719">亾<span class="small">ほろ（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25607">灭<span class="small">ほろ（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13126">冺<span class="small">ほろ（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4341">泯<span class="small">ほろ（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24532">丧<span class="small">ほろ（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22214">䘮<span class="small">ほろ（びる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1798">喪<span class="small">ほろ（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4392">湮<span class="small">ほろ（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18777">㓕<span class="small">ほろ（びる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1575">滅<span class="small">ほろ（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5273">糜<span class="small">ほろ（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25507">沦<span class="small">ほろ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4385">淪<span class="small">ほろ（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="984">亡<span class="small">ほろ（ぼす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6718">兦<span class="small">ほろ（ぼす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6719">亾<span class="small">ほろ（ぼす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25607">灭<span class="small">ほろ（ぼす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25434">歼<span class="small">ほろ（ぼす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24532">丧<span class="small">ほろ（ぼす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22214">䘮<span class="small">ほろ（ぼす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3180">剪<span class="small">ほろ（ぼす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1798">喪<span class="small">ほろ（ぼす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18777">㓕<span class="small">ほろ（ぼす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1575">滅<span class="small">ほろ（ぼす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3183">剿<span class="small">ほろ（ぼす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3193">勦<span class="small">ほろ（ぼす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4962">誅<span class="small">ほろ（ぼす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5609">翦<span class="small">ほろ（ぼす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12799">劋<span class="small">ほろ（ぼす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5311">殱<span class="small">ほろ（ぼす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5310">殲<span class="small">ほろ（ぼす）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts33">
                    <h3 class="ttl_while">ほん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="392">反<span class="small">ホン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="071">本<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25232">忛<span class="small">ホン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="411">返<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13659">坌<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19620">㤆<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21929">䒦<span class="small">ホン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1899">奔<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9421">苯<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13268">呠<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13921">奋<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15487">泍<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16007">炃<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19514">㡷<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19631">㤓<span class="small">ホン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="404">品<span class="small">ホン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1276">盆<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2840">叛<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10014">衯<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10270">瓫<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20842">㽹<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5449">畚<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10319">奙<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12555">倴<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24243">㴀<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4524">笨<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13435">喯<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14077">婏<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14953">捹<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15191">桳<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15653">渀<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17078">翉<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22332">䛀<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22574">䟪<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22653">䡊<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25804">畨<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4834">犇<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5484">賁<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8493">軬<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8606">逩<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9570">葐<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15691">湓<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18950">㖹<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15232">楍<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19831">㨧<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21568">䋦<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13165">勫<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19704">㥹<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20088">㮥<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20103">㮺<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23255">䬱<span class="small">ホン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1261">噴<span class="small">ホン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2841">幡<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15027">撪<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16441">獖<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18468">鳻<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12875">歕<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18067">錛<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17904">輽<span class="small">ホン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1569">翻<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4810">繙<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9948">蟦<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16618">癛<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17096">翸<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15957">瀵<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18136">鐼<span class="small">ホン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3052">飜<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20467">㶗<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23131">䪛<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19941">㪻<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23205">䫶<span class="small">ホン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6125">椪<span class="small">ポン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1275">凡<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12723">凢<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24711">凣<span class="small">ボン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="787">犯<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13659">坌<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13987">姂<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15146">杋<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24008">汶<span class="small">ボン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="230">門<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14811">怋<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16007">炃<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16482">玧<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19631">㤓<span class="small">ボン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1276">盆<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5963">悗<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17631">訉<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18165">閅<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3699">捫<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4121">梵<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11104">惛<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14953">捹<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15191">桳<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17256">菛<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20713">㻊<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11105">惽<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12907">殙<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18950">㖹<span class="small">ボン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1865">煩<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12908">㱪<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19831">㨧<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23301">䭵<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15782">滼<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19846">㨺<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20088">㮥<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23156">䪻<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23255">䬱<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10217">璊<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13521">噃<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13857">墦<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15027">撪<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15112">暪<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18468">鳻<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20410">㵍<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20675">㺕<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21850">䐽<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4931">燔<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10881">穈<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17592">襎<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20802">㽃<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21507">䊟<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23173">䫒<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21426">䉊<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22538">䟂<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22075">䕰<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5998">鐇<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15951">瀪<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18329">馩<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23135">䪤<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12361">亹<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23131">䪛<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23358">䮳<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23205">䫶<span class="small">ボン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24388">虋<span class="small">ボン</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3224">听<span class="small">ポンド</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1544">封<span class="small">ポンド</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4668">磅<span class="small">ポンド</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3585">惘<span class="small">ぼんやり（する）</span></a></li>
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