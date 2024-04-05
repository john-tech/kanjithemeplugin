<?php
/*
 * Template Name: Yomi17
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
               <h1 class="ttl_main">音訓検索「ち」</h1>
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
               <p>「ち」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>ち</option>
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
                         <li id="parts1_menu"><a href="#parts1">ち</a></li>
                         <li id="parts2_menu"><a href="#parts2">ちい</a></li>
                         <li id="parts3_menu"><a href="#parts3">ちえ</a></li>
                         <li id="parts4_menu"><a href="#parts4">ちか</a></li>
                         <li id="parts5_menu"><a href="#parts5">ちき</a></li>
                         <li id="parts6_menu"><a href="#parts6">ちく</a></li>
                         <li id="parts7_menu"><a href="#parts7">ちさ</a></li>
                         <li id="parts8_menu"><a href="#parts8">ちし</a></li>
                         <li id="parts9_menu"><a href="#parts9">ちす</a></li>
                         <li id="parts10_menu"><a href="#parts10">ちち</a></li>
                         <li id="parts11_menu"><a href="#parts11">ちつ</a></li>
                         <li id="parts12_menu"><a href="#parts12">ちと</a></li>
                         <li id="parts13_menu"><a href="#parts13">ちな</a></li>
                         <li id="parts14_menu"><a href="#parts14">ちぬ</a></li>
                         <li id="parts15_menu"><a href="#parts15">ちの</a></li>
                         <li id="parts16_menu"><a href="#parts16">ちは</a></li>
                         <li id="parts17_menu"><a href="#parts17">ちひ</a></li>
                         <li id="parts18_menu"><a href="#parts18">ちま</a></li>
                         <li id="parts19_menu"><a href="#parts19">ちや</a></li>
                         <li id="parts20_menu"><a href="#parts20">ちゆ</a></li>
                         <li id="parts21_menu"><a href="#parts21">ちよ</a></li>
                         <li id="parts22_menu"><a href="#parts22">ちら</a></li>
                         <li id="parts23_menu"><a href="#parts23">ちり</a></li>
                         <li id="parts24_menu"><a href="#parts24">ちる</a></li>
                         <li id="parts25_menu"><a href="#parts25">ちん</a></li>
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
                    <h3 class="ttl_while">ち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="6024">夂<span class="small">チ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="185">池<span class="small">チ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="186">地<span class="small">チ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2467">弛<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7912">阤<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9374">芖<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11277">扡<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5822">豸<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11787">肔<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11940">杝<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12419">佁<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13186">厎<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13652">坁<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13663">坔<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13667">坘<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15148">杘<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15440">汦<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19351">㞴<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26940">迟<span class="small">チ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="187">知<span class="small">チ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="193">直<span class="small">チ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="524">治<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5990">岻<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7920">陁<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7924">阺<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13267">呞<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13277">呬<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13690">坻<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13695">垁<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14771">彽<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15479">沶<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15496">泜<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19558">㢮<span class="small">チ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="308">持<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3454">峙<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4218">胝<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8833">竾<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9450">荎<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11330">拸<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11786">胣<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14681">庤<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15527">洔<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15548">洷<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24147">迡<span class="small">チ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="944">値<span class="small">チ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1185">恥<span class="small">チ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1187">致<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6280">耻<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6308">袮<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8660">郗<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10362">疷<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10527">眙<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10837">秪<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12516">倁<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12517">俿<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12882">歭<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13734">埅<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13738">埊<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19163">㛓<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24589">值<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25226">彨<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4521">笞<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6324">貭<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8338">赿<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9801">蚳<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10821">离<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12543">偫<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12544">㣥<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13028">乿<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14780">徝<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16817">秲<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16960">粚<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17099">耛<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17149">脪<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19802">㨁<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21193">䄺<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21963">䓜<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21967">䓡<span class="small">チ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="337">植<span class="small">チ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1186">遅<span class="small">チ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2719">智<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3793">黹<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8112">訵<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8372">䟡<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10275">瓻<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13087">傂<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14492">崻<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14784">徥<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16889">筂<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17762">貾<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17885">軧<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19687">㥡<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20276">㲛<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22274">䙾<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23138">䪧<span class="small">チ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="567">置<span class="small">チ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1500">稚<span class="small">チ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1811">痴<span class="small">チ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2482">馳<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4465">輊<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4576">雉<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8133">誀<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8346">趍<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9051">絺<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11432">㨖<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12884">跱<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14700">廌<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14990">搱<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15761">滍<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16899">筫<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17566">裭<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17820">跠<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17821">跢<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17824">跮<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22472">䝰<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22973">䧝<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24245">㴛<span class="small">チ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1191">徴<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2721">蜘<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8602">遟<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8831">箎<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10340">疐<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11455">摛<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16906">箈<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18801">㓾<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20102">㮹<span class="small">チ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="725">質<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4270">踟<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5057">褫<span class="small">チ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6435">徵<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8164">諈<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10873">稺<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10996">憄<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13861">墬<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15006">摨<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15848">潪<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17668">誺<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20529">㷰<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21495">䊓<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22376">䛱<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22478">䝷<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22798">䣽<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23444">䰡<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23933">墀<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23991">徲<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26682">㚄<span class="small">チ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2058">緻<span class="small">チ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2720">薙<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6051">遲<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7981">鴙<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8416">踶<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8832">篪<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14578">嶳<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16687">瞝<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18347">駤<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23318">䮈<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24399">䕌<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6132">穉<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8305">儨<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9912">螭<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12097">㯰<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17692">謘<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22248">䙙<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22310">䚦<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22487">䞃<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22534">䞾<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11206">懥<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14893">懫<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17372">藢<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18497">鵗<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22396">䜉<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22938">䦯<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23099">䩶<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23700">䶔<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6262">癡<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21444">䉜<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22446">䝐<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22625">䠦<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24331">䜄<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26570">襧<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18525">鶨<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18605">齝<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21626">䌤<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23240">䬜<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3952">魑<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6569">鼅<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6766">驇<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6767">騺<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21257">䆈<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27494">䡹<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4296">躓<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11456">攡<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14766">彲<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3761">黐<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6570">䵹<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17052">纗<span class="small">チ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8834">䶵<span class="small">チ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="048">千<span class="small">ち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="287">血<span class="small">ち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="959">乳<span class="small">ち</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2922">茅<span class="small">ち</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">ちい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="037">小<span class="small">ちい（さい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3501">幺<span class="small">ちい（さい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4014">杪<span class="small">ちい（さい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5148">眇<span class="small">ちい（さい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10199">琑<span class="small">ちい（さい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5556">稍<span class="small">ちい（さい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4631">瑣<span class="small">ちい（さい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1785">繊<span class="small">ちい（さい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5435">藐<span class="small">ちい（さい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6099">纎<span class="small">ちい（さい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6098">纖<span class="small">ちい（さい）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">ちえ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2719">智<span class="small">ちえ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">ちか</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="112">近<span class="small">ちか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6070">迩<span class="small">ちか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3253">咫<span class="small">ちか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4952">詛<span class="small">ちか（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5534">邇<span class="small">ちか（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="619">約<span class="small">ちか（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4952">詛<span class="small">ちか（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="988">盟<span class="small">ちか（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1777">誓<span class="small">ちか（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22845">䤱<span class="small">ちか（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1009">違<span class="small">ちが（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1009">違<span class="small">ちが（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3913">昵<span class="small">ちか（づく）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2922">茅<span class="small">ちがや</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="077">力<span class="small">ちから</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27783">𠠺<span class="small">ちから</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="626">量<span class="small">ちから</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4243">膂<span class="small">ちから</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11890">膐<span class="small">ちから</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5360">莨<span class="small">ちからぐさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5520">逎<span class="small">ちからづよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5519">遒<span class="small">ちからづよ（い）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">ちき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="12457">侙<span class="small">チキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14826">恜<span class="small">チキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15629">淔<span class="small">チキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18021">鉓<span class="small">チキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14867">慗<span class="small">チキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17927">遫<span class="small">チキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24144">趩<span class="small">チキ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4005">杠<span class="small">ちぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4005">杠<span class="small">ちきり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1386">契<span class="small">ちぎ（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1386">契<span class="small">ちぎ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="267">期<span class="small">ちぎ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">ちく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="057">竹<span class="small">チク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13972">妯<span class="small">チク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24108">苖<span class="small">チク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2944">柚<span class="small">チク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17226">茿<span class="small">チク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1501">畜<span class="small">チク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1812">逐<span class="small">チク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15057">敊<span class="small">チク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17230">荲<span class="small">チク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4886">舳<span class="small">チク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14958">掓<span class="small">チク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19056">㙇<span class="small">チク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19179">㛩<span class="small">チク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1428">軸<span class="small">チク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2722">筑<span class="small">チク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13090">傗<span class="small">チク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1188">蓄<span class="small">チク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8690">鄐<span class="small">チク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11433">搐<span class="small">チク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15754">滀<span class="small">チク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19201">㜅<span class="small">チク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20883">㾥<span class="small">チク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24121">蓫<span class="small">チク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10869">稸<span class="small">チク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22242">䙒<span class="small">チク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="772">築<span class="small">チク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16927">篫<span class="small">チク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8896">篴<span class="small">チク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23356">䮱<span class="small">チク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7044">鱁<span class="small">チク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22084">䕽<span class="small">チク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22894">䥮<span class="small">チク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5713">矗<span class="small">チク</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">ちさ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5329">苣<span class="small">ちさ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">ちし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5329">苣<span class="small">ちしゃ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">ちす</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="11788">伷<span class="small">ちすじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4222">胄<span class="small">ちすじ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">ちち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="13284">呹<span class="small">チチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15341">欪<span class="small">チチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16651">眣<span class="small">チチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16654">眰<span class="small">チチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16821">秷<span class="small">チチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18967">㗌<span class="small">チチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23444">䰡<span class="small">チチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24354">䬹<span class="small">チチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21754">䏄<span class="small">チチ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="215">父<span class="small">ちち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="959">乳<span class="small">ちち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1921">酪<span class="small">ちちしる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13466">嗠<span class="small">ちちしる</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="902">縮<span class="small">ちぢ（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1375">緊<span class="small">ちぢ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="902">縮<span class="small">ちぢ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="902">縮<span class="small">ちぢ（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="902">縮<span class="small">ちぢ（らす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="902">縮<span class="small">ちぢ（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">ちつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="3486">帙<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11308">抶<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13284">呹<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13979">妷<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11331">挃<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14679">庢<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15168">柣<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15341">欪<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15548">洷<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21152">䃿<span class="small">チツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1813">秩<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10020">袟<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10789">祑<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16651">眣<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20296">㲳<span class="small">チツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1502">窒<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9018">紩<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10021">袠<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16654">眰<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16821">秷<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17081">翐<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18967">㗌<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26540">蛰<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4246">腟<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17821">跢<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17824">跮<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7634">銍<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18987">㗧<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25594">潌<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4245">膣<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23444">䰡<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24354">䬹<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23465">䱃<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4099">蟄<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21754">䏄<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8250">豑<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22107">䖜<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22543">䟈<span class="small">チツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26814">豒<span class="small">チツ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">ちと</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3811">鵆<span class="small">ちどり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7114">鴴<span class="small">ちどり</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">ちな</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="13601">囙<span class="small">ちなみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="642">因<span class="small">ちなみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13601">囙<span class="small">ちな（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="642">因<span class="small">ちな（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">ちぬ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="8777">舋<span class="small">ちぬ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4853">釁<span class="small">ちぬ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">ちの</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="8833">竾<span class="small">ちのふえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8832">篪<span class="small">ちのふえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8834">䶵<span class="small">ちのふえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19252">㜾<span class="small">ちのみご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3423">孩<span class="small">ちのみご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3427">孺<span class="small">ちのみご</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">ちは</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="10068">襅<span class="small">ちはや</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">ちひ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="2804">禿<span class="small">ち（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25926">秃<span class="small">ち（びる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">ちま</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5269">粽<span class="small">ちまき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8964">糉<span class="small">ちまき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25993">糭<span class="small">ちまき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1363">岐<span class="small">ちまた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19359">㞿<span class="small">ちまた</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2396">巷<span class="small">ちまた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19382">㟚<span class="small">ちまた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="460">街<span class="small">ちまた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17529">衖<span class="small">ちまた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24209">㟟<span class="small">ちまた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22742">䢽<span class="small">ちまた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3957">閧<span class="small">ちまた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22753">䣈<span class="small">ちまた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5584">衢<span class="small">ちまた</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">ちや</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="188">茶<span class="small">チャ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11430">搽<span class="small">チャ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18717">㒀<span class="small">チャ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5348">茗<span class="small">ちゃ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13183">厇<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19555">㢩<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19617">㣿<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8554">辵<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17128">肑<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13691">坼<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13973">妰<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21181">䄪<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12964">㲋<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16948">籷<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17413">虳<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14944">捇<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18861">㕌<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20038">㭙<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20932">㿭<span class="small">チャク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="947">著<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11110">惕<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11111">悐<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19530">㢉<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24817">啇<span class="small">チャク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="363">着<span class="small">チャク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6410">著<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8595">逴<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12965">㚟<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14843">惖<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17112">聑<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="25324">掷<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15077">斱<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18717">㒀<span class="small">チャク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1814">嫡<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11421">搩<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13845">墑<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18719">㒂<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15028">撯<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15032">擆<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15848">潪<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17673">諎<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21840">䐱<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22527">䞶<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23658">䵠<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21029">䁤<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23688">䶂<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17499">蟅<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21506">䊞<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21734">䎮<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="27844">𢷡<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3737">擲<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4999">謫<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17743">豴<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22288">䚍<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23389">䯜<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4293">躇<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15320">櫡<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22291">䚐<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7832">鐯<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21522">䊮<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8220">讁<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23633">䵂<span class="small">チャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16422">猹<span class="small">チャー</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">ちゆ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="5660">丶<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13236">吜<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11309">拄<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16006">炂<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21769">䏔<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14002">姝<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21267">䆔<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22108">䖞<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23939">壴<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15579">浺<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17242">莥<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10030">袾<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22565">䟞<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22908">䦌<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2499">蛛<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14334">尌<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17817">跓<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17892">軴<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20993">䀺<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21347">䇬<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22468">䝬<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4962">誅<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16157">煪<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16288">牏<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17794">趎<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14183">嫞<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17574">褈<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17825">跾<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22363">䛣<span class="small">チュ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1503">駐<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17016">緟<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19494">㡡<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23911">嘼<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17677">諥<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18352">駯<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7120">鴸<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14661">幮<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8454">蹰<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18586">鼄<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22447">䝑<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23566">䳠<span class="small">チュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8453">躕<span class="small">チュ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="059">中<span class="small">チュウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2723">丑<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6591">丒<span class="small">チュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="058">虫<span class="small">チュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="568">仲<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5665">冲<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6598">丟<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12394">丢<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13208">厾<span class="small">チュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="326">住<span class="small">チュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1189">沖<span class="small">チュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2094">肘<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5101">狆<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9760">䖝<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11039">忡<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11788">伷<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13236">吜<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13958">妕<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13963">妞<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19319">㞏<span class="small">チュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="364">注<span class="small">チュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="945">宙<span class="small">チュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="946">忠<span class="small">チュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1504">抽<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10348">疛<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11060">怞<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11309">拄<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11970">杻<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12456">侜<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13972">妯<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15152">杽<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16006">炂<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19591">㣙<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21769">䏔<span class="small">チュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="189">昼<span class="small">チュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="365">柱<span class="small">チュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1815">衷<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3154">冑<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4222">胄<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4749">紂<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8651">邾<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9451">茽<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10498">盅<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10834">种<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12488">俋<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12652">俦<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13067">侴<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13311">咮<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20331">㳞<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21267">䆔<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22108">䖞<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24081">祌<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24110">茧<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26372">荮<span class="small">チュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2059">酎<span class="small">チュウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2526">紐<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7525">釞<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9226">翀<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10655">砫<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15579">浺<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16064">烛<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17242">莥<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17423">蚛<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25210">帱<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26327">舯<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27106">㤽<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27840">𢭆<span class="small">チュウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2724">紬<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3122">偸<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3583">惆<span class="small">チュウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6208">晝<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10630">矪<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12549">偷<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13387">啁<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14096">婤<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16600">痋<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16959">粙<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17253">菗<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19179">㛩<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21336">䇠<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22565">䟞<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27508">䝙<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2499">蛛<span class="small">チュウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2612">厨<span class="small">チュウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2725">註<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4685">鈕<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5454">畴<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9564">葤<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12103">椆<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13800">堹<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14497">嵀<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15678">湁<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16892">筗<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18013">鈡<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20993">䀺<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22338">䛆<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26001">絷<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26540">蛰<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4962">誅<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5559">稠<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7588">鉒<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7589">鈾<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8390">跦<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8500">輈<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8924">筹<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10047">裯<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10573">睭<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16157">煪<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16625">皗<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17794">趎<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18220">雴<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18252">靵<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19832">㨨<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26503">㕏<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4775">綢<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6713">馽<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7293">䩜<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7635">銩<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8450">踌<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17825">跾<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17827">踂<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18865">㕑<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21228">䅢<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22363">䛣<span class="small">チュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1503">駐<span class="small">チュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1505">鋳<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2613">廚<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11896">䐲<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15272">樦<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15795">漐<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18342">駎<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19494">㡡<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19850">㩅<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21385">䈙<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23911">嘼<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26851">踙<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3140">儔<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6924">鮋<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10431">瘳<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12248">橱<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13542">噣<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4099">蟄<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4713">鍮<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6944">鮦<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9120">縶<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9123">繇<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10512">盩<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11201">懤<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13562">嚋<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14241">嬦<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14660">幬<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19092">㙷<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24126">薵<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24368">䳋<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5701">蟲<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6969">鯈<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8288">貙<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9921">蟵<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12250">櫉<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14661">幮<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16245">燽<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16246">燾<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19733">㦞<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23417">䯾<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4606">籀<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5453">疇<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8454">蹰<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12249">櫥<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18586">鼄<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20912">㿒<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20927">㿧<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4603">籌<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21521">䊭<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21629">䌧<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4295">躊<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6503">籒<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8213">譸<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8214">譶<span class="small">チュウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5725">鑄<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8453">躕<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16268">爞<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23242">䬞<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23518">䲖<span class="small">チュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3999">朮<span class="small">チュツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11933">术<span class="small">チュツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18822">㔘<span class="small">チュツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24184">㑁<span class="small">チュツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11048">怵<span class="small">チュツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15489">泏<span class="small">チュツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19633">㤕<span class="small">チュツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14819">怷<span class="small">チュツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16028">炢<span class="small">チュツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16036">炪<span class="small">チュツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10908">窋<span class="small">チュツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20849">㾁<span class="small">チュツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22205">䘤<span class="small">チュツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9019">絀<span class="small">チュツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16882">笜<span class="small">チュツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21275">䆝<span class="small">チュツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8106">詘<span class="small">チュツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8373">䟣<span class="small">チュツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17791">趉<span class="small">チュツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24150">逫<span class="small">チュツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3752">黜<span class="small">チュツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1847">屯<span class="small">チュン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9394">芚<span class="small">チュン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14290">宒<span class="small">チュン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8567">迍<span class="small">チュン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11971">杶<span class="small">チュン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10903">窀<span class="small">チュン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8481">䡅<span class="small">チュン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19480">㡒<span class="small">チュン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10190">瑃<span class="small">チュン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12252">槆<span class="small">チュン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20437">㵮<span class="small">チュン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8523">輴<span class="small">チュン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12251">橁<span class="small">チュン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22530">䞺<span class="small">チュン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22937">䦮<span class="small">チュン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15311">櫄<span class="small">チュン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18519">鶞<span class="small">チュン</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts21">
                    <h3 class="ttl_while">ちよ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="26892">㝉<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14285">宁<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24571">伫<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3079">佇<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9393">芧<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26348">苎<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2731">苧<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4015">杼<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13693">坾<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15497">泞<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19634">㤖<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26392">㑏<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12155">柠<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13130">凃<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5541">竚<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5938">莇<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10536">眝<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15587">涂<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20948">㿾<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22203">䘢<span class="small">チョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="947">著<span class="small">チョ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2730">猪<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4756">紵<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9204">羜<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20051">㭬<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21337">䇡<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21645">䍆<span class="small">チョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="569">貯<span class="small">チョ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6367">猪<span class="small">チョ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6410">著<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8113">詝<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4147">楮<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8822">筯<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11869">䐗<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15755">滁<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17300">蒢<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25337">摅<span class="small">チョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1738">緒<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10055">褚<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11457">摴<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15002">摢<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25921">禇<span class="small">チョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2087">箸<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2727">樗<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2729">潴<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6152">墸<span class="small">チョ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6425">緖<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9651">蕏<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20114">㯉<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20732">㻬<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20897">㾻<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6321">豬<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15284">橥<span class="small">チョ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2726">儲<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11509">攄<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2728">瀦<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4293">躇<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8439">䠧<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15320">櫡<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17381">藸<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20457">㶆<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15324">櫫<span class="small">チョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21524">䊰<span class="small">チョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="369">丁<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12733">刁<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1818">弔<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12365">仃<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18765">㓅<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24742">厅<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="354">打<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="950">庁<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9364">芀<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13037">仧<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13223">叼<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13632">圢<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13936">奵<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14608">帄<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19589">㣔<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21913">䒒<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22943">䦺<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25499">汈<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="570">兆<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="580">灯<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2733">吊<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11278">扚<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13044">伄<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14903">扙<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15086">旫<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15998">灱<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15999">灲<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19617">㣿<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="060">町<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3224">听<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5210">疔<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5950">甼<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7864">镸<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7865">兏<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13143">刟<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="190">長<span class="small">チョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2582">帖<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3085">佻<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4342">沾<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9411">苕<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9763">虭<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11051">怊<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11052">怗<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13276">呫<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14409">岧<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14418">岹<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16978">糽<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20634">㹦<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20840">㽴<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21181">䄪<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23984">弡<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="325">重<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1816">挑<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3912">昶<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5501">迢<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11053">㤐<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11076">恌<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11657">㫤<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12489">侹<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13706">垗<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14296">宨<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14362">屌<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14680">庣<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14936">挕<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15340">欩<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16287">牊<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16373">狣<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17536">衶<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18698">㑙<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19520">㡽<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22201">䘟<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22554">䟓<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23892">侱<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24748">厛<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26830">赵<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27816">𠧪<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2732">凋<span class="small">チョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2736">挺<span class="small">チョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2743">釘<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3158">冢<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3908">晁<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4880">鬯<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9292">肁<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9480">莜<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11679">晀<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11809">朓<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12518">倀<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14776">徎<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14834">悜<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15568">浧<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15583">浾<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16786">祒<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17553">袩<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17632">訋<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18790">㓮<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19471">㡇<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19653">㤴<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20334">㳧<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20566">㸠<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21064">䂏<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24809">唠<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26307">脁<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="192">鳥<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="367">帳<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="773">張<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="949">頂<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1506">彫<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1817">眺<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1820">釣<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3269">啅<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3584">悵<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3697">掉<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4128">梃<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4520">笘<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5616">窕<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6297">萇<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8798">笤<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8991">粜<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9802">蛁<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10796">祧<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11378">掁<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13387">啁<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13757">埫<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13926">奝<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14096">婤<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14689">庱<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14740">弴<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15609">涱<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17263">菿<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17267">萔<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19059">㙊<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19380">㟘<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19805">㨄<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20019">㬸<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20053">㭯<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20656">㹿<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21089">䂪<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21194">䄻<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21699">䎄<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23207">䫸<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26464">萜<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27711">𣶏<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="191">朝<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="775">提<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1143">畳<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1507">超<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1823">塚<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2060">貼<span class="small">チョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2734">喋<span class="small">チョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2739">脹<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4397">渫<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5473">貂<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8374">跕<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10040">裎<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10176">琱<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10276">瓺<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11142">惵<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11404">揲<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11610">旐<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13783">堞<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13800">堹<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14107">婷<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14132">媑<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14139">媜<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14310">寊<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14505">嵉<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14847">惩<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16659">睈<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16994">絩<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17056">罀<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17110">聎<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17112">聑<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18011">鈟<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18197">隀<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19484">㡖<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19667">㥈<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20993">䀺<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21680">䍮<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22912">䦐<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27899">𤭖<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="571">腸<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1190">跳<span class="small">チョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2586">牒<span class="small">チョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2952">傭<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4963">誂<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5559">稠<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5985">蓚<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6217">楪<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8044">覜<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10194">瑒<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10324">叠<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10388">痮<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10574">睖<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10693">碉<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10946">竨<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11870">䐑<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12909">殜<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16283">牃<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17796">趒<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21105">䂽<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21356">䇸<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21664">䍜<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22128">䖺<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22639">䠷<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26231">鼌<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26246">塚<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1191">徴<span class="small">チョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2737">暢<span class="small">チョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2738">肇<span class="small">チョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2740">蔦<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2744">銚<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4073">蜩<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4416">漲<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4466">輒<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5573">趙<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6889">魡<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7317">䩞<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8965">粻<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9293">肈<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9624">蓨<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9625">蓧<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9859">蜨<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10056">褋<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10329">畼<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10709">碟<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12621">僜<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14183">嫞<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16751">碠<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17574">褈<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18225">雿<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19075">㙣<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19106">㚋<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19290">㝪<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20399">㴿<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20670">㺐<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21009">䁋<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21012">䁎<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21711">䎐<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22007">䔙<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22133">䗀<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22137">䗅<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23214">䫿<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23410">䯴<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27118">銱<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="366">調<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="948">潮<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1192">澄<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2061">嘲<span class="small">チョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2741">蝶<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3039">澂<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4467">輙<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4643">髫<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6222">樢<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6289">膓<span class="small">チョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6435">徵<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7385">頫<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7664">銸<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8311">賬<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8350">趠<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12215">樤<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13511">嘮<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14879">憕<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15365">殦<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17016">緟<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17170">膡<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17193">艓<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17468">蝩<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17835">踜<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18050">鋚<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18171">閮<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19332">㞟<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21590">䋼<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21873">䑜<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22370">䛫<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22525">䞴<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22598">䠆<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23124">䪓<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2742">諜<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4580">雕<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5061">褶<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5862">疂<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6990">鮉<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7304">鞗<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7700">鋹<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8415">蹀<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10428">瘹<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10933">窵<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15907">濎<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16610">瘬<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16682">瞗<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16857">窱<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17357">薚<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17359">薡<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17677">諥<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17901">輰<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18055">鋽<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18068">錭<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18078">鍣<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18346">駣<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18738">㒛<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21171">䄝<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22042">䕈<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23086">䩦<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23541">䲽<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23546">䳂<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23682">䵺<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24260">㿂<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1508">聴<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6942">鮡<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7125">鵃<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7348">䩨<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7482">餦<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9696">藋<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10006">褺<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14240">嬥<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15298">檙<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18285">顁<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19092">㙷<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21298">䆸<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21423">䉆<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23383">䯕<span class="small">チョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1819">懲<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6566">鼂<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6963">鮿<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6969">鯈<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7040">䱔<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7347">韔<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8276">鼦<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17195">艞<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17703">謵<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17705">謺<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18401">鬇<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22619">䠟<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23099">䩶<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23329">䮓<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23417">䯾<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23473">䱓<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23686">䵿<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24039">瀓<span class="small">チョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2735">寵<span class="small">チョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2745">鯛<span class="small">チョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6384">懲<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7170">鵰<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8055">覴<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10325">曡<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17065">羄<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17709">謿<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18098">鎥<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20009">㬪<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22447">䝑<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3767">齠<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3881">鰈<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6178">廰<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10452">癥<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19499">㡧<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21522">䊮<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23577">䳯<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24103">聼<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6583">鼚<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14594">巐<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18321">饓<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22435">䝃<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22884">䥡<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24139">襱<span class="small">チョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5850">聽<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5863">疉<span class="small">チョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5864">疊<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7039">鰷<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7841">鑃<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21633">䌬<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23723">䶬<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22900">䥵<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26506">㕔<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5277">糶<span class="small">チョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6177">廳<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19886">㩸<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24005">氎<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27285">㲲<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27817">𠨋<span class="small">チョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23601">䴑<span class="small">チョウ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5405">蔘<span class="small">ちょうせんにんじん</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9673">薓<span class="small">ちょうせんにんじん</span></a></li>
                         <li class="others_kanji onyomi"><a href="6705">亍<span class="small">チョク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="193">直<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8252">豖<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12457">侙<span class="small">チョク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1821">勅<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14826">恜<span class="small">チョク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="944">値<span class="small">チョク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2062">捗<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5187">陟<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7934">徏<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12856">勑<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16383">狵<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17230">荲<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24589">值<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6199">敕<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14780">徝<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15194">梀<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15629">淔<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17263">菿<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19056">㙇<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16317">犆<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16528">琸<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21803">䐁<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3194">飭<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5900">稙<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10389">瘃<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18021">鉓<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="26490">㔉<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14867">慗<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17927">遫<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16926">篧<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22926">䦠<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19928">㪬<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23329">䮓<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24144">趩<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9945">蠋<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4290">躅<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7178">鶒<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23582">䳵<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7180">鷘<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12817">劚<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22084">䕽<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11595">斸<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12329">欘<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8448">䠱<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7863">钃<span class="small">チョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16947">籱<span class="small">チョク</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts22">
                    <h3 class="ttl_while">ちら</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="516">散<span class="small">ち（らかす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19915">㪚<span class="small">ち（らかす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="516">散<span class="small">ち（らかる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19915">㪚<span class="small">ち（らかる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="516">散<span class="small">ち（らす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19915">㪚<span class="small">ち（らす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4457">灑<span class="small">ち（らす）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts23">
                    <h3 class="ttl_while">ちり</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="14339">尘<span class="small">ちり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3340">埃<span class="small">ちり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2604">塵<span class="small">ちり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2281">箕<span class="small">ちりとり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3465">嵌<span class="small">ちりば（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6104">篏<span class="small">ちりば（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4721">鏤<span class="small">ちりば（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts24">
                    <h3 class="ttl_while">ちる</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="25536">涣<span class="small">ち（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="516">散<span class="small">ち（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4388">渙<span class="small">ち（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19915">㪚<span class="small">ち（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4703">銷<span class="small">ち（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts25">
                    <h3 class="ttl_while">ちん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="580">灯<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13047">伔<span class="small">チン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1194">沈<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15460">沉<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18893">㕴<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21922">䒞<span class="small">チン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2108">枕<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3671">抻<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20253">㱽<span class="small">チン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1193">珍<span class="small">チン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1827">亭<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6256">珎<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10352">疢<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15160">枮<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16576">瓭<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17914">迧<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20966">䀕<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21530">䊶<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21879">䑣<span class="small">チン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1155">陣<span class="small">チン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1822">朕<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2597">疹<span class="small">チン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2747">砧<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9006">紖<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12042">栚<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14363">屒<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17239">莐<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18920">㖔<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20750">㼉<span class="small">チン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1509">陳<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4839">酖<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8364">趻<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8669">郴<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10549">眹<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17878">軙<span class="small">チン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2714">湛<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5572">趁<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8341">趂<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10177">琛<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11408">揕<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12104">棽<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18004">鈂<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22635">䠳<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22829">䤟<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22993">䧵<span class="small">チン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="951">賃<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2068">填<span class="small">チン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2746">椿<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4154">椹<span class="small">チン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="6469">塡<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7375">䪴<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13820">塦<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16997">絼<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18019">鉁<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19571">㣀<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19916">㪛<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20379">㴨<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20391">㴴<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22276">䚀<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22277">䚁<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4663">碪<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9077">綝<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9626">蔯<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15239">榐<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20100">㮳<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3801">鴆<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6898">魫<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8000">霃<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8165">諃<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8312">賝<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13908">夦<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15067">敶<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15261">樄<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18054">鋴<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18344">駗<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18764">㓄<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23535">䲴<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6549">黕<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8365">踸<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18069">錱<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22801">䤁<span class="small">チン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1785">繊<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6000">鍖<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9697">薼<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17491">螴<span class="small">チン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1510">鎮<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3970">闖<span class="small">チン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6001">鎭<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23177">䫖<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8553">辴<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23039">䨯<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24103">聼<span class="small">チン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6099">纎<span class="small">チン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6098">纖<span class="small">チン</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5101">狆<span class="small">ちん</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1792">租<span class="small">ちんが（り）</span></a></li>
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