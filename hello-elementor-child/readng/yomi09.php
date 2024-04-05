<?php
/*
 * Template Name: Yomi9
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
               <h1 class="ttl_main">音訓検索「け」</h1>
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
               <p>「け」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>け</option>
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
                         <li id="parts1_menu"><a href="#parts1">け</a></li>
                         <li id="parts2_menu"><a href="#parts2">けい</a></li>
                         <li id="parts3_menu"><a href="#parts3">けお</a></li>
                         <li id="parts4_menu"><a href="#parts4">けか</a></li>
                         <li id="parts5_menu"><a href="#parts5">けき</a></li>
                         <li id="parts6_menu"><a href="#parts6">けさ</a></li>
                         <li id="parts7_menu"><a href="#parts7">けし</a></li>
                         <li id="parts8_menu"><a href="#parts8">けす</a></li>
                         <li id="parts9_menu"><a href="#parts9">けた</a></li>
                         <li id="parts10_menu"><a href="#parts10">けち</a></li>
                         <li id="parts11_menu"><a href="#parts11">けつ</a></li>
                         <li id="parts12_menu"><a href="#parts12">けな</a></li>
                         <li id="parts13_menu"><a href="#parts13">けぬ</a></li>
                         <li id="parts14_menu"><a href="#parts14">けは</a></li>
                         <li id="parts15_menu"><a href="#parts15">けふ</a></li>
                         <li id="parts16_menu"><a href="#parts16">けみ</a></li>
                         <li id="parts17_menu"><a href="#parts17">けむ</a></li>
                         <li id="parts18_menu"><a href="#parts18">けも</a></li>
                         <li id="parts19_menu"><a href="#parts19">けや</a></li>
                         <li id="parts20_menu"><a href="#parts20">けら</a></li>
                         <li id="parts21_menu"><a href="#parts21">けり</a></li>
                         <li id="parts22_menu"><a href="#parts22">ける</a></li>
                         <li id="parts23_menu"><a href="#parts23">けわ</a></li>
                         <li id="parts24_menu"><a href="#parts24">けん</a></li>
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
                    <h3 class="ttl_while">け</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="14599">巜<span class="small">ケ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="284">化<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5687">气<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24391">㐄<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12741">刉<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18681">㐶<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21914">䒓<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24777">叽<span class="small">ケ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="014">気<span class="small">ケ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="658">仮<span class="small">ケ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="832">灰<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9462">华<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12746">刏<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13011">乔<span class="small">ケ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="007">花<span class="small">ケ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="473">希<span class="small">ケ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="661">快<span class="small">ケ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2229">芥<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5796">呀<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9381">芲<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13240">吤<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13244">吪<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14803">忦<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19035">㘨<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19459">㠻<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19622">㤉<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20627">㹟<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24784">呙<span class="small">ケ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1337">怪<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2204">卦<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12434">侉<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12808">刿<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14802">忥<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14921">抲<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16640">盵<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19773">㧔<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20176">㰟<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20178">㰡<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20630">㹢<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21765">䏐<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27147">㧟<span class="small">ケ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1338">悔<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5959">恠<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6052">咼<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13216">叚<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13315">咵<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13328">哙<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13676">坬<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14015">姱<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15371">毠<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16597">疨<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18873">㕟<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19305">㞀<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19465">㡁<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19772">㧓<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19776">㧡<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20183">㰨<span class="small">ケ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="086">家<span class="small">ケ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1334">華<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5217">痂<span class="small">ケ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5688">氣<span class="small">ケ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6382">悔<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13332">哧<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14276">孬<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17141">胿<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17547">袔<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18827">㔞<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18917">㖑<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19163">㛓<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19899">㪈<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20345">㳸<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21078">䂟<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21535">䊽<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21783">䏨<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23995">晇<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25055">娲<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26531">㖞<span class="small">ケ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2349">袈<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5662">假<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13374">唬<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15192">桸<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15344">欳<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16074">烯<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16089">焁<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17785">赽<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19057">㙈<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19120">㚝<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20344">㳷<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20863">㾏<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21203">䅅<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21960">䓙<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24901">啩<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25249">悬<span class="small">ケ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2279">稀<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13418">喎<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14113">婽<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14149">媧<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14785">徦<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15677">湀<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17157">腉<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17816">跒<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17978">酠<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18711">㑶<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19195">㛻<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19815">㨒<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20871">㾙<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22120">䖯<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14644">幏<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14861">慀<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15233">楏<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15349">歄<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15723">溎<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16320">犌<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17164">腵<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18300">颬<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19828">㨤<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20074">㮐<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20887">㾩<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21099">䂷<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22125">䖶<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22126">䖷<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22640">䠸<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25010">塈<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13493">嘏<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13496">嘒<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15065">敱<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15066">敳<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15108">暣<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16327">犔<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17336">蔮<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18988">㗨<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19076">㙤<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19715">㦆<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19845">㨹<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20890">㾯<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21069">䂕<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21833">䐩<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22234">䙆<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22365">䛥<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22765">䣙<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22836">䤧<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23934">墍<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9461">蕐<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12807">劌<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13512">嘳<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14215">嬇<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14324">寭<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14565">嶡<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17120">聧<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17669">誽<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17675">諙<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18419">魤<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20957">䀈<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21377">䈐<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21378">䈑<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21386">䈛<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22368">䛩<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23910">嘰<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23996">暳<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3627">懈<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13549">噲<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14223">嬒<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14576">嶰<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15034">擓<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17174">膭<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17676">諣<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17751">貑<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17842">踻<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18577">黖<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19004">㗿<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22383">䛹<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22607">䠑<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23381">䯓<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14890">懗<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17366">藈<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18083">鍷<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21508">䊠<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22050">䕒<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23324">䮎<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23552">䳏<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13568">嚖<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17103">耭<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17508">蟨<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17511">蟼<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18089">鎎<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18319">餯<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18497">鵗<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23180">䫚<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23640">䵋<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24075">癐<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16868">竵<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20008">㬩<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22542">䟇<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22816">䤒<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23190">䫥<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23391">䯞<span class="small">ケ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1678">懸<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17723">譮<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18293">顡<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18132">鐬<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21147">䃶<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18599">齂<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23043">䨳<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23282">䭝<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23396">䯣<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23364">䮹<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23397">䯤<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23677">䵳<span class="small">ケ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23696">䶐<span class="small">ケ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="229">毛<span class="small">け</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2474">笥<span class="small">け</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24552">亵<span class="small">け</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5062">褻<span class="small">け</span></a></li>
                         <li class="others_kanji onyomi"><a href="6587">丅<span class="small">ゲ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="015">下<span class="small">ゲ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1959">牙<span class="small">ゲ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="096">外<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9462">华<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12743">划<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13185">厊<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16620">癿<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18880">㕦<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19614">㣻<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24565">伢<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25260">戏<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5796">呀<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14398">岓<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16353">犽<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19622">㤉<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20029">㭉<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13189">厓<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13297">咓<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17942">邷<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20764">㼘<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14442">峞<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16597">疨<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21186">䄰<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21656">䍓<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26906">㟆<span class="small">ゲ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="088">夏<span class="small">ゲ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1334">華<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5777">崋<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16875">笌<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19377">㟓<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20949">㿿<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21313">䇈<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21538">䋀<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22093">䖊<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3119">偈<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14065">娾<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15198">梋<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15638">淣<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16408">猚<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20863">㾏<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17155">腂<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18963">㗇<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19685">㥟<span class="small">ゲ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="660">解<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2235">碍<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6314">觧<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17161">腢<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19426">㠏<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19718">㦊<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19818">㨙<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20200">㰺<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20382">㴫<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20779">㼫<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23953">嬅<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25342">撶<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15252">榽<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16669">睱<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19331">㞜<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21069">䂕<span class="small">ゲ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1053">戯<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9461">蕐<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15005">摦<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17348">蕥<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20114">㯉<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21251">䅿<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22238">䙎<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11232">戱<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14576">嶰<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15258">槬<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16218">燊<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18488">鴱<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22603">䠍<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6002">鍜<span class="small">ゲ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6183">戲<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18575">黊<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21138">䃬<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23178">䫗<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23418">䯿<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4679">礙<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13902">夓<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18598">齀<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21431">䉏<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22492">䞈<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22646">䠿<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22816">䤒<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23190">䫥<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18293">顡<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18816">㔒<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22627">䠩<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14264">孈<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18543">鷨<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21455">䉨<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16471">玂<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18451">鱀<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23455">䰯<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23515">䲒<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17730">讗<span class="small">ゲ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18394">驨<span class="small">ゲ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">けい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="5759">冂<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6019">匸<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6027">彑<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23986">彐<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5841">兮<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="114">兄<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12693">冋<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13171">卟<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1384">刑<span class="small">ケイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2350">圭<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6696">乩<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12747">㓝<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13011">乔<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14801">忚<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18852">㕃<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24189">㓞<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25214">庆<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25770">犷<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="115">形<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="854">系<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3153">冏<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8633">邢<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12843">劲<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13146">刭<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13245">启<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13259">呇<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13609">囧<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13662">坓<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13664">坕<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13668">坙<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13952">妎<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14600">巠<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16357">狅<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19959">㫓<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="116">京<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="491">径<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1670">茎<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4033">枅<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9405">苘<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12442">侀<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12755">刲<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12808">刿<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13680">坰<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15481">泂<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16009">炅<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16020">炔<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19149">㚾<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21765">䏐<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23994">昋<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25221">弪<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25518">泾<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25543">陉<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26355">茕<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26944">㢠<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="117">計<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="286">係<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="490">型<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1386">契<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2356">荊<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3175">剄<span class="small">ケイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3189">勁<span class="small">ケイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3368">奎<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3683">挂<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4906">炯<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5147">盻<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5502">迥<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5756">亰<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6523">荆<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8634">郉<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8644">邽<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9431">茥<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11239">扃<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12470">俓<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13717">垧<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14440">峜<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17916">迳<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17948">郋<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18772">㓏<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19323">㞓<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20181">㰥<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20947">㿽<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24259">㼛<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24263">䀘<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25495">氢<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25619">烃<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26305">胫<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26363">荥<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26365">荧<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1078">恵<span class="small">ケイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2351">桂<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2352">珪<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3190">勍<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3369">奚<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3684">挈<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4526">笄<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5826">徑<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5937">莖<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7929">陘<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8571">逈<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9001">紒<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10967">恝<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11084">㤯<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11669">晆<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12026">栔<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12504">倞<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12771">剠<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13365">唘<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14041">娙<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15185">栺<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15580">浻<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15585">涀<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15591">涇<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16057">烓<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16387">狾<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17141">胿<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18774">㓑<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19899">㪈<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20047">㭢<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20185">㰪<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21906">䒊<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22751">䣆<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22904">䦇<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24996">埛<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25222">弳<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25813">痉<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25943">竞<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="684">経<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1380">啓<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1383">掲<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1669">蛍<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1671">渓<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2004">頃<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2353">畦<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3119">偈<span class="small">ケイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3525">彗<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4228">脛<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4659">硅<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4753">絅<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4907">烱<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5036">袿<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5509">逕<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5543">竟<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8572">䢛<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9176">罣<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10157">琁<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10541">眭<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10668">硎<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10912">窐<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12055">桱<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12937">殸<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13396">啔<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13400">啟<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14088">婛<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14091">婞<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15360">殌<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15405">氫<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15605">涬<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16078">烴<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16391">猄<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16406">猘<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17270">萤<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17556">袳<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17781">赹<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17785">赽<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19120">㚝<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20497">㷀<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21088">䂩<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21203">䅅<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22324">䚷<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22758">䣏<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="285">軽<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="492">景<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="494">結<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="853">敬<span class="small">ケイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2317">卿<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5226">痙<span class="small">ケイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5790">惠<span class="small">ケイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6436">揭<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6501">筓<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7621">鈃<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8107">詗<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8808">筀<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9537">葪<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10243">琼<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11130">愒<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11135">惸<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11693">晵<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11839">䏿<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12090">棨<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12566">傒<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14503">嵇<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15216">棾<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15677">湀<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16116">焭<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16125">焸<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16128">焽<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17286">葝<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18630">嵆<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19192">㛷<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19685">㥟<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19815">㨒<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21561">䋜<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22120">䖯<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22267">䙵<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22342">䛊<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22911">䦏<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23400">䯧<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24918">喺<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1077">傾<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1092">継<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1382">携<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1987">詣<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2355">罫<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4916">煢<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5910">經<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6238">溪<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8645">郌<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9043">綗<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10589">睘<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11705">暌<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12587">傹<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13462">嗘<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14517">嵠<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14521">嵤<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14787">徯<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14861">慀<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15233">楏<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15723">溎<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16147">煚<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17309">蒵<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17315">蓕<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17438">蛵<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18417">魝<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18464">鳮<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19210">㜎<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19485">㡗<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19689">㥣<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19818">㨙<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19994">㬌<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20780">㼬<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21003">䁄<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21068">䂔<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22662">䡔<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24264">䁈<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="679">境<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2358">頚<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3359">夐<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3943">閨<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4779">綮<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5640">禊<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6046">輕<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7618">銈<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7619">鉶<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7620">銒<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8143">誩<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8392">踁<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9042">㡭<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10398">瘈<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10578">睽<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10579">睳<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10703">碶<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10862">稧<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10966">僡<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12631">儆<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12945">毄<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13496">嘒<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14701">廎<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15252">榽<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15762">滎<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15775">滰<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16148">煛<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16185">熒<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16437">獍<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17015">緈<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17183">臦<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18314">餀<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18722">㒅<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18729">㒌<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19845">㨹<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20101">㮷<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20205">㰿<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20259">㲅<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20519">㷡<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21577">䋯<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22003">䔔<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22009">䔛<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22234">䙆<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22584">䟷<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23657">䵞<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1672">慶<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1988">憬<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1989">稽<span class="small">ケイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2173">慧<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6090">憇<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6716">駉<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9645">蕙<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9871">蝰<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10413">瘛<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10588">瞏<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10722">磎<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11175">憓<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11261">㢣<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11475">撅<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11495">擏<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12807">劌<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14324">寭<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14565">嶡<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14653">幜<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15035">擖<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15068">敻<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15111">暩<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15264">樈<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15784">漀<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15832">潓<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15867">澋<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16201">熭<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16205">熲<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16581">甈<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16679">瞉<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17120">聧<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18052">鋞<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20116">㯋<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20119">㯏<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20525">㷫<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21021">䁚<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21024">䁝<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21381">䈕<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22035">䔾<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22238">䙎<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22843">䤯<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22844">䤰<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22980">䧥<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23291">䭫<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23996">暳<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1385">憩<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2357">頸<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4195">檠<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4647">髻<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4672">磬<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5418">薊<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5682">螢<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6727">駫<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7990">嶲<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8184">䜁<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8316">賯<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8764">䤈<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9889">螇<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10002">褧<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10221">璟<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10222">璚<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10235">璥<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10876">䅽<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11009">憼<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11260">擎<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11420">擕<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11720">暻<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11732">曔<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12269">㯳<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12647">儝<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14231">嬛<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14878">憌<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15274">橀<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15281">橞<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15286">橩<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15861">澃<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17028">縘<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17587">褮<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17681">諬<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19862">㩗<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21849">䐼<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22285">䚉<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22607">䠑<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23165">䫆<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23292">䭬<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23381">䯓<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24324">䗗<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25660">燝<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25798">璤<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2233">鮭<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2354">繋<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4276">蹊<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5652">谿<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7405">顈<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8183">謑<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8241">豀<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9161">罄<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9190">罽<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9687">藑<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12270">檕<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15912">濙<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17361">藀<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17366">藈<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17368">藒<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17740">豯<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17752">貕<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17990">醟<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18083">鍷<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23326">䮐<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23552">䳏<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4637">瓊<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4995">謦<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7158">雞<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7988">巂<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7989">雟<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9131">繐<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9926">蟪<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12289">檾<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12290">檵<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13568">嚖<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16227">燛<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16463">獷<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17508">蟨<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17511">蟼<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18499">鵛<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18575">黊<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19873">㩦<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19874">㩨<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19875">㩩<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23175">䫔<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23560">䳙<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25258">懳<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="855">警<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1381">鶏<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1387">鯨<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4287">蹶<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4849">醯<span class="small">ケイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6455">繫<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7251">麖<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7901">闙<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8197">䜘<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8198">譓<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8434">蹷<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9942">蟿<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15325">櫭<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17059">罊<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17184">臩<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17386">蘏<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18106">鏏<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18511">鶁<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20008">㬩<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20459">㶈<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23188">䫣<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26518">蘔<span class="small">ケイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="484">競<span class="small">ケイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2325">馨<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3755">黥<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5830">繼<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6757">騱<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7807">鏸<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8078">觹<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8539">轚<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13110">儶<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14587">巆<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15954">瀱<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17396">蘮<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18816">㔒<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20749">㼇<span class="small">ケイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5672">鷄<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5875">攜<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8721">酅<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14264">孈<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21721">䎚<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23583">䳶<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5663">竸<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7838">鑋<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8216">譿<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16572">瓗<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17402">蘻<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18269">韢<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23203">䫴<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6640">鼷<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7052">鱖<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7844">鑙<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8079">觽<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20836">㽯<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23364">䮹<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7065">鱥<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7179">鸂<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7252">麠<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9972">蠵<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17052">纗<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23517">䲔<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8077">觿<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17730">讗<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18153">鑴<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24365">䭨<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18394">驨<span class="small">ケイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6019">匸<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5841">兮<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26338">艺<span class="small">ゲイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="493">芸<span class="small">ゲイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1079">迎<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24781">呓<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10826">秇<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9222">羿<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14623">帠<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16707">矨<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17948">郋<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20947">㿽<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25619">烃<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3104">倪<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15185">栺<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17141">胿<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20646">㹵<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5109">猊<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8665">郳<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11366">掜<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13772">堄<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14085">婗<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15198">梋<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15638">淣<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16078">烴<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17269">萟<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20863">㾏<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22324">䚷<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23930">埶<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15097">晲<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15217">棿<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19214">㜒<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19908">㪒<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20989">䀴<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22911">䦏<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5159">睨<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14861">慀<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17309">蒵<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19210">㜎<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19818">㨙<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22226">䘽<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24688">兿<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9211">䍲<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9610">蓺<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9855">蜺<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15252">榽<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5476">貎<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8506">輗<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15259">槸<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16581">甈<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17624">觬<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17669">誽<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19084">㙯<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22238">䙎<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22700">䢃<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3983">霓<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6937">䱈<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10064">褹<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21849">䐼<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3859">鮨<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14326">寱<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17740">豯<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17752">貕<span class="small">ゲイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5784">藝<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23334">䮘<span class="small">ゲイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1387">鯨<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3869">鯢<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4560">麑<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7159">鶂<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7160">鶃<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15325">櫭<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21305">䆿<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23188">䫣<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3755">黥<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19736">㦣<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3322">囈<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18269">韢<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10098">襼<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18612">齯<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23517">䲔<span class="small">ゲイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8230">讛<span class="small">ゲイ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">けお</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3778">旃<span class="small">けおりもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19952">㫋<span class="small">けおりもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11601">旜<span class="small">けおりもの</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">けか</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1023">汚<span class="small">けが（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15435">汙<span class="small">けが（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15438">污<span class="small">けが（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2803">涜<span class="small">けが（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4397">渫<span class="small">けが（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13137">凟<span class="small">けが（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6480">瀆<span class="small">けが（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3759">黷<span class="small">けが（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1023">汚<span class="small">けが（らわしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15435">汙<span class="small">けが（らわしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15438">污<span class="small">けが（らわしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24552">亵<span class="small">けが（らわしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4239">腥<span class="small">けが（らわしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5062">褻<span class="small">けが（らわしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25982">粪<span class="small">けが（れ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2890">糞<span class="small">けが（れ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1023">汚<span class="small">けが（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15435">汙<span class="small">けが（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15438">污<span class="small">けが（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13687">坸<span class="small">けが（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2336">垢<span class="small">けが（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25927">秽<span class="small">けが（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24552">亵<span class="small">けが（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5062">褻<span class="small">けが（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5561">穢<span class="small">けが（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3759">黷<span class="small">けが（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">けき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="6609">丮<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24716">击<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16347">犱<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21058">䂆<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4350">洫<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8654">郄<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10643">砉<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21939">䒸<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24068">狊<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5205">郤<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6168">屐<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8661">郥<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12898">殈<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19656">㤸<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21948">䓇<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22959">䧍<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8333">赥<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12852">欫<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13393">啋<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17731">谻<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18941">㖪<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19119">㚜<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19308">㞃<span class="small">ケキ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2359">戟<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11224">㦸<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15707">湨<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17956">郹<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20193">㰲<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21649">䍊<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23067">䩐<span class="small">ケキ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1990">隙<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9044">綌<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15223">椺<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16325">犑<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5458">覡<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7960">隟<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12945">毄<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16636">盢<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16675">瞁<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17800">趘<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20524">㷦<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22918">䦗<span class="small">ケキ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1080">撃<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8048">覤<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11474">撠<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6860">䦧<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11186">憿<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11494">撽<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13546">噭<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13870">墼<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16453">獥<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17353">薂<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19720">㦌<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22606">䠐<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23084">䩤<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24281">䈪<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4192">檄<span class="small">ケキ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6438">擊<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16234">燩<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19730">㦘<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23228">䬎<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3821">鵙<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5019">鬩<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9759">虩<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19014">㘌<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21045">䁶<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23335">䮙<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19738">㦦<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23478">䱛<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6494">鶪<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8539">轚<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17719">譤<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22315">䚫<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6638">鼳<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16472">玃<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18553">鸄<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17756">貜<span class="small">ケキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24716">击<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14377">屰<span class="small">ゲキ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="674">逆<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8654">郄<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5205">郤<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6168">屐<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22095">䖌<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24726">剧<span class="small">ゲキ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2359">戟<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11224">㦸<span class="small">ゲキ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1990">隙<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9044">綌<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5458">覡<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7960">隟<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15238">榏<span class="small">ゲキ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="856">劇<span class="small">ゲキ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1080">撃<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3800">鴃<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6538">鴂<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7890">閴<span class="small">ゲキ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="857">激<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6860">䦧<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9346">艗<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24100">縌<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3965">闃<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4192">檄<span class="small">ゲキ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6438">擊<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3821">鵙<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5019">鬩<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9759">虩<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7159">鶂<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7160">鶃<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6494">鶪<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23574">䳬<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3827">鷁<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7188">鷊<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19023">㘙<span class="small">ゲキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9741">虉<span class="small">ゲキ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">けさ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5956">畩<span class="small">けさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5315">芒<span class="small">けさき</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">けし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3296">嗾<span class="small">けしか（ける）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">けす</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1903">抹<span class="small">け（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="331">消<span class="small">け（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20356">㴅<span class="small">け（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4703">銷<span class="small">け（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="667">刊<span class="small">けず（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3168">刋<span class="small">けず（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3171">刪<span class="small">けず（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6543">删<span class="small">けず（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3172">刮<span class="small">けず（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1417">削<span class="small">けず（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="511">殺<span class="small">けず（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12934">殺<span class="small">けず（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">けた</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1991">桁<span class="small">けた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6263">盖<span class="small">けだ（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3033">葢<span class="small">けだ（し）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1965">蓋<span class="small">けだ（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24686">兽<span class="small">けだもの</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1132">獣<span class="small">けだもの</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5858">獸<span class="small">けだもの</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">けち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="287">血<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13252">吷<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13651">圿<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13962">妜<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14803">忦<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19767">㧉<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20627">㹟<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22945">䦼<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14406">岤<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19936">㪴<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20028">㭈<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21765">䏐<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13310">咭<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16596">疦<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16712">砄<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19153">㛃<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19637">㤜<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21268">䆕<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21939">䒸<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14032">娎<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16649">眓<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16076">烲<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16101">焎<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17785">赽<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18828">㔠<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21275">䆝<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21545">䋉<span class="small">ケチ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="494">結<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12564">傄<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15677">湀<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19284">㝣<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22273">䙽<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22346">䛎<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22913">䦑<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24132">蛪<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17298">蒛<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17793">趌<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17795">趏<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18417">魝<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20079">㮖<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23211">䫼<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12608">僪<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12803">劀<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13492">嘎<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17575">褉<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21684">䍳<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22921">䦚<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24276">䅥<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15035">擖<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22035">䔾<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22442">䝌<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22526">䞵<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22590">䟾<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23084">䩤<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23087">䩧<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17368">藒<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18086">鍻<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18490">鴶<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21297">䆷<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22935">䦬<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23552">䳏<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23175">䫔<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22812">䤎<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18128">鐑<span class="small">ケチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4817">纈<span class="small">ケチ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3230">吝<span class="small">けち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18904">㖁<span class="small">けち</span></a></li>
                         <li class="others_kanji onyomi"><a href="13265">呚<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14803">忦<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18654">㐖<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18891">㕲<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21924">䒠<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13688">坹<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13920">奊<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15058">敌<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17548">袕<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14954">捾<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21155">䄆<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13789">堨<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15217">棿<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17083">翓<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17111">聐<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24132">蛪<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13456">嗐<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14355">尳<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14992">搳<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17795">趏<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20381">㴪<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20599">㹂<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22226">䘽<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15764">滐<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20093">㮫<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22917">䦖<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5855">磆<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12201">槷<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15035">擖<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15246">榤<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15259">槸<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17017">緳<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17466">蝢<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18279">頢<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21380">䈓<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22035">䔾<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14574">嶭<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17027">縖<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17480">螖<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17482">螛<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21291">䆯<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21849">䐼<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23623">䴳<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15325">櫭<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22079">䕵<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22080">䕸<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23723">䶬<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23715">䶤<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22698">䡾<span class="small">ゲチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18158">钀<span class="small">ゲチ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">けつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="5738">亅<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3418">孑<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12345">孒<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25069">孓<span class="small">ケツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="495">欠<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3361">夬<span class="small">ケツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="858">穴<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13213">叏<span class="small">ケツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="287">血<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3169">刔<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5807">决<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15394">氒<span class="small">ケツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="288">決<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3662">抉<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9386">芵<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13252">吷<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13962">妜<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18654">㐖<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19767">㧉<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20627">㹟<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22945">䦼<span class="small">ケツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="940">担<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5918">杰<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10120">玦<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13688">坹<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14406">岤<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15504">泬<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16020">炔<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16369">狘<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19357">㞽<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19771">㧒<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20028">㭈<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21765">䏐<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24013">泧<span class="small">ケツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1386">契<span class="small">ケツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2362">頁<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3681">拮<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8947">籺<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13920">奊<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14937">挗<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15175">柽<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16374">狤<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16596">疦<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16712">砄<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19153">㛃<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19637">㤜<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20968">䀗<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21268">䆕<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21939">䒸<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27809">𡜆<span class="small">ケツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2293">桔<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3684">挈<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4948">訐<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5845">缺<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12026">栔<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12835">缼<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12849">欮<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14032">娎<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15188">桖<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15545">洯<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16059">烕<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16649">眓<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17188">舭<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17421">蚗<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17548">袕<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19044">㘶<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22904">䦇<span class="small">ケツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1632">渇<span class="small">ケツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2361">訣<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3119">偈<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4031">桀<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8061">觖<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8361">趹<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10028">袺<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12787">㓶<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15360">殌<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16076">烲<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16101">焎<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17785">赽<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20772">㼤<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21275">䆝<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21545">䋉<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21695">䎀<span class="small">ケツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="494">結<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3214">厥<span class="small">ケツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6446">渴<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7547">鈌<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9028">絜<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10623">矞<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14509">嵑<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15677">湀<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16419">猲<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17083">翓<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18797">㓹<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19284">㝣<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22273">䙽<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22346">䛎<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22567">䟠<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22913">䦑<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24069">猰<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24132">蛪<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24150">逫<span class="small">ケツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1673">傑<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4151">楔<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4565">歇<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8342">趐<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12131">楬<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15760">滊<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17298">蒛<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17793">趌<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18417">魝<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20599">㹂<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23211">䫼<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4664">碣<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5547">竭<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6709">駃<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10862">稧<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11421">搩<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11752">朅<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12608">僪<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12803">劀<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12804">劂<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14522">嵥<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15764">滐<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16173">熂<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17575">褉<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21684">䍳<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22917">䦖<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23217">䬂<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24188">㓗<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24233">㮮<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24276">䅥<span class="small">ケツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="685">潔<span class="small">ケツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2360">蕨<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3800">鴃<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5121">獗<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5136">頡<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6538">鴂<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10411">瘚<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11176">憰<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11475">撅<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13535">噘<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14565">嶡<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15246">榤<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15829">潏<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16581">甈<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17017">緳<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17466">蝢<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19232">㜧<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20412">㵐<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21584">䋶<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22035">䔾<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22442">䝌<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22526">䞵<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22528">䞷<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22590">䟾<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23860">撷<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25140">嶥<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27808">𡡕<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4647">髻<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10222">璚<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11002">憠<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12235">橛<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12236">橜<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21849">䐼<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23084">䩤<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23087">䩧<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7721">鍥<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7891">闋<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10604">瞲<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17368">藒<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18086">鍻<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21297">䆷<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22253">䙠<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22935">䦬<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23552">䳏<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3972">闕<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7750">䤿<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11507">擷<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17508">蟨<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17509">蟩<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19876">㩪<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23175">䫔<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4104">蠍<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4287">蹶<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5005">譎<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5080">覈<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8434">蹷<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15325">櫭<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22812">䤎<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5069">襭<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7808">鐍<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7809">鐝<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18128">鐑<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22079">䕵<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3769">齧<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4817">纈<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15976">灍<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7052">鱖<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7218">鷢<span class="small">ケツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3770">囓<span class="small">ケツ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2028">尻<span class="small">けつ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19318">㞍<span class="small">けつ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3418">孑<span class="small">ゲツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="016">月<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14380">屵<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12736">刖<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13603">囝<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11283">抈<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14388">岄<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19767">㧉<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27720">𠥱<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10121">玥<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15153">枂<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19771">㧒<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11986">枿<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8477">軏<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9298">臬<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21738">䎳<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25544">陧<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8362">跀<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8478">䡇<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22321">䚴<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7548">鈅<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7949">隉<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13789">堨<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15217">棿<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20071">㮆<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24132">蛪<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14531">嵲<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20381">㴪<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22226">䘽<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2420">噛<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11256">摰<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12201">槷<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15259">槸<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9301">臲<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14574">嶭<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6476">嚙<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7751">鎳<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7894">闑<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12353">孼<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12354">孽<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19246">㜸<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4209">蘖<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6497">櫱<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3769">齧<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8988">糱<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8989">糵<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9963">蠥<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23723">䶬<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3770">囓<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8231">讞<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22698">䡾<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18158">钀<span class="small">ゲツ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5579">觜<span class="small">けづの</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1062">距<span class="small">けづめ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">けな</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5483">貶<span class="small">けな（す）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">けぬ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4740">鑷<span class="small">けぬき</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">けは</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3847">毳<span class="small">けば</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">けふ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="27892">𤇆<span class="small">けぶ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3040">烟<span class="small">けぶ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1021">煙<span class="small">けぶ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">けみ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1324">閲<span class="small">けみ（する）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7879">閱<span class="small">けみ（する）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">けむ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="27892">𤇆<span class="small">けむ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3040">烟<span class="small">けむ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1021">煙<span class="small">けむ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27892">𤇆<span class="small">けむ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3040">烟<span class="small">けむ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1021">煙<span class="small">けむ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15372">毡<span class="small">けむしろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3846">毯<span class="small">けむしろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3848">氈<span class="small">けむしろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15390">氊<span class="small">けむしろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27892">𤇆<span class="small">けむり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3040">烟<span class="small">けむり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1021">煙<span class="small">けむり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27892">𤇆<span class="small">けむ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3040">烟<span class="small">けむ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1021">煙<span class="small">けむ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">けも</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="24686">兽<span class="small">けもの</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1132">獣<span class="small">けもの</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5858">獸<span class="small">けもの</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">けや</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="25420">榉<span class="small">けやき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12318">﨔<span class="small">けやき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25418">櫸<span class="small">けやき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4210">欅<span class="small">けやき</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">けら</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="7605">鉧<span class="small">けら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9920">蝼<span class="small">けら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4097">螻<span class="small">けら</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts21">
                    <h3 class="ttl_while">けり</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3798">鳬<span class="small">けり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3797">鳧<span class="small">けり</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts22">
                    <h3 class="ttl_while">ける</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="8406">踢<span class="small">け（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4282">蹙<span class="small">け（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8426">䠞<span class="small">け（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2025">蹴<span class="small">け（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8435">蹵<span class="small">け（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts23">
                    <h3 class="ttl_while">けわ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3451">岑<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25109">岖<span class="small">けわ（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1475">阻<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14416">岴<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26335">艰<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25124">峥<span class="small">けわ（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2217">峨<span class="small">けわ（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2528">峻<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3455">峭<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5654">峩<span class="small">けわ（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="686">険<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3461">崢<span class="small">けわ（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3462">崚<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27702">𡸴<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27827">𡸳<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3465">嵌<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3466">嵒<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14510">嵓<span class="small">けわ（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2433">嵯<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2434">嵳<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5193">隗<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5195">隘<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3470">嶇<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3471">嶄<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14544">嶃<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3473">嶢<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6104">篏<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14567">嶤<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3475">嶬<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3476">嶮<span class="small">けわ（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6342">險<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19433">㠖<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5576">艱<span class="small">けわ（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2266">巌<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3479">巉<span class="small">けわ（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5711">巖<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9354">囏<span class="small">けわ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14596">巗<span class="small">けわ（しい）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts24">
                    <h3 class="ttl_while">けん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="6017">凵<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="018">犬<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="495">欠<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13155">劝<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19553">㢧<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3057">丱<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12371">仚<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18817">㔓<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="689">件<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3499">幵<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12202">权<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13227">吅<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13603">囝<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18682">㐸<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21308">䇂<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="017">見<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3381">妍<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9387">芡<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10547">䀏<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11033">忺<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13052">伭<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13057">佡<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13653">坃<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13959">妗<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14397">岒<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14805">忴<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14908">扲<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15446">汱<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17225">茾<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17937">邤<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19768">㧋<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23960">岍<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24761">县<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="688">券<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1081">肩<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3670">拑<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4033">枅<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6065">劵<span class="small">ケン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6145">卷<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10119">玪<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10308">甽<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11629">昍<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11957">杴<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13919">奆<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13978">妶<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14817">怰<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15339">欦<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15503">泫<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16360">狋<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19757">㦿<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19893">㪁<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20028">㭈<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20563">㸝<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20577">㸫<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20629">㹡<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25032">奍<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="289">県<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="290">研<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="496">建<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="841">巻<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3091">俔<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6486">姸<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6699">乹<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8036">臤<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8084">䚯<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10307">畎<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10781">祆<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11646">昡<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11778">胘<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13149">剈<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13319">咺<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14007">姢<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14012">姭<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14626">帣<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14737">弮<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16037">炫<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16372">狟<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16487">玹<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16641">盷<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18786">㓩<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19254">㝁<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19781">㧦<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20327">㳙<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23899">咞<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24006">汧<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24275">䄯<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25359">显<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25680">牵<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1084">兼<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1085">軒<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1087">剣<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1389">倹<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1992">拳<span class="small">ケン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2363">倦<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3386">娟<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3568">悁<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4372">涓<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5108">狷<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5216">痃<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5630">虔<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8337">赶<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10018">袨<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10106">玆<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11670">晅<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12027">桊<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12476">悓<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12850">勌<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13336">哯<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13356">唊<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13722">垷<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13740">埍<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14028">娊<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14451">峴<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14739">弲<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14940">挳<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14943">挸<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15585">涀<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16065">烜<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16308">牶<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17422">蚙<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18860">㕋<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19030">㘣<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19974">㫫<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20573">㸧<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20711">㻆<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21332">䇜<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21660">䍗<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22712">䢖<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22957">䧋<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24319">䖍<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27781">𠝏<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="497">健<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="686">険<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1043">乾<span class="small">ケン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2365">捲<span class="small">ケン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2366">牽<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3579">惓<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3692">掀<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5153">眷<span class="small">ケン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5798">圈<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5813">剱<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5943">釼<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7531">釰<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8260">豜<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8261">猏<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9503">菤<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9794">蚿<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10153">琄<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10546">眴<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10644">硏<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10792">䄅<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11367">掮<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11682">晛<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12056">梘<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13382">唺<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13749">埢<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14061">娹<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14086">婘<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14105">婱<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14845">惤<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15198">梋<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16094">焆<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16730">硍<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17146">脥<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17262">菺<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17266">萒<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17638">訮<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17881">軡<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19473">㡉<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19566">㢺<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21335">䇟<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21548">䋌<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21797">䏹<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22209">䘩<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22270">䙹<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24378">淃<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24910">啳<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25249">悬<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26274">羟<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27702">𡸴<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27842">𢮦<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="100">間<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="687">検<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1082">堅<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1086">圏<span class="small">ケン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2263">萱<span class="small">ケン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2364">喧<span class="small">ケン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2367">硯<span class="small">ケン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2368">絢<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3593">愃<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6213">椦<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6700">亁<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7282">靬<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7549">鈐<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7621">鈃<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7868">閒<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8108">詃<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8679">鄄<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9029">絭<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9177">罥<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9538">萲<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9818">蚈<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10558">睍<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10559">睊<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11251">孯<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11398">揵<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11840">腃<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12091">棬<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12532">徤<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12567">傔<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13139">凲<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13426">喛<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14089">婜<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14136">媗<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14311">寋<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14851">愋<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15693">湕<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16318">犈<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16579">瓹<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17560">裐<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18208">雂<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18209">雃<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18760">㒽<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18798">㓺<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19570">㢾<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20058">㭹<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20199">㰸<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21208">䅌<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21211">䅐<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22119">䖭<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22470">䝮<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23300">䭴<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25009">塇<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27807">𡙇<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="859">絹<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1042">勧<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1083">遣<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1674">嫌<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1676">献<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3587">愆<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3602">慊<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3935">暄<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4065">蜆<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4238">腱<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4533">筧<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4688">鉗<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4689">鉉<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5397">蒹<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8259">豣<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8279">貆<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8383">趼<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9132">絸<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9831">蜎<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10041">裷<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10566">睠<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11250">掔<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11257">揅<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11611">旔<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12132">楗<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12133">楥<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12134">楦<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12344">塤<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12978">毽<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13464">嗛<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14354">尲<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14529">嵰<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14744">弿<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14984">搛<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14986">搟<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14995">搼<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15104">暕<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15348">歁<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16137">煊<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16321">犍<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17071">羥<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17313">蓒<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17572">褃<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17619">觠<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17650">詪<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17654">詽<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18202">隒<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18308">飬<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18971">㗔<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19820">㨜<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20599">㹂<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20604">㹇<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20667">㺌<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21161">䄐<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21221">䅚<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21556">䋗<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22299">䚙<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22661">䡓<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25362">暅<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3359">夐<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3709">搴<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4074">蜷<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4542">箝<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4567">歉<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4776">綣<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4872">甄<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7620">銒<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8828">箞<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11164">慻<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11711">㬎<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11878">膁<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12878">勬<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13498">嘕<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14186">嫢<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15018">撁<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15247">榩<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15810">漧<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16672">睷<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16674">睻<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17326">蔅<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17334">蔨<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17662">誢<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19840">㨴<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19843">㨷<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21017">䁔<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21490">䊎<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21576">䋮<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22795">䣺<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23076">䩙<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25017">墘<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="861">権<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1039">監<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2255">澗<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3607">慳<span class="small">ケン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5810">劍<span class="small">ケン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5839">儉<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6522">㵎<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7651">鋗<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7652">鋧<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8401">踡<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10870">稴<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10984">諐<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11254">㩃<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12632">儇<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13154">劎<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13202">厱<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15014">摼<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15024">撖<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15068">敻<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16912">箮<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17018">緷<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17090">翧<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17456">蜸<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17463">蝖<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17667">誸<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17804">趝<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18255">鞎<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18281">頨<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18317">餋<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19726">㦓<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20132">㯠<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20676">㺖<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20812">㽐<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20827">㽦<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20900">㾾<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21290">䆭<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21395">䈤<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21497">䊕<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23159">䫀<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23315">䮄<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24176">鳽<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="860">憲<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1388">賢<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3476">嶮<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3751">黔<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4981">諠<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5811">劔<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5812">劒<span class="small">ケン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5913">縣<span class="small">ケン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6342">險<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6865">鬳<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7302">鞙<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7691">錈<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8172">諼<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9102">縑<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9539">蕿<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9682">薟<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10003">褰<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11187">懁<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11496">撿<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12648">儙<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14231">嬛<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15278">橏<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16191">熞<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16454">獧<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16456">獫<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16800">禤<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17682">諯<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17841">踺<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18264">韏<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18350">駨<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21406">䈴<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22284">䚈<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22677">䡣<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23539">䲻<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23659">䵡<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1675">謙<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1993">鍵<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4279">蹇<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4312">臉<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4991">謇<span class="small">ケン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6224">檢<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6550">黚<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6733">駽<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7134">䳌<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7722">鋻<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9114">縴<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9121">縳<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12343">壎<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17365">藆<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17590">襇<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18288">顅<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18563">麉<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20540">㷿<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20743">㻹<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22286">䚊<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22535">䞿<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22618">䠝<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22683">䡩<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23552">䳏<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="498">験<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="838">簡<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1677">顕<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1679">繭<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3814">鵑<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4808">繝<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5171">瞼<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5594">羂<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6742">騐<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6836">鬈<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7314">鞬<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10757">礆<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14357">尶<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14358">尷<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15305">檶<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17906">轋<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20149">㯻<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20908">㿌<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21044">䁵<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21254">䆂<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21429">䉍<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21608">䌑<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23269">䭈<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23662">䵤<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2370">鹸<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5842">勸<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7161">鵳<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7520">馦<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9140">繯<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9245">翾<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9540">藼<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9541">蘐<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9943">蠉<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10611">矎<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11520">攐<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11529">攑<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14662">幰<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15046">攇<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15943">瀗<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17073">羷<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17710">譀<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18367">騝<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19013">㘋<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19737">㦥<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21250">䅾<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21622">䌠<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22986">䧮<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23641">䵌<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24361">䭑<span class="small">ケン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1678">懸<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4504">騫<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5856">獻<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8208">譞<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8209">譣<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9133">蠒<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9146">繾<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11524">攓<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11528">㩮<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13886">壦<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14260">孂<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14265">孉<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14593">巏<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15964">瀽<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16941">籈<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17181">臔<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17975">酄<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18412">魐<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18448">鰎<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19882">㩲<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22180">䗾<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23394">䯡<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23569">䳦<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5011">譴<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6005">權<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7018">鰜<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7019">鰬<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7189">鶼<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7190">鶱<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7826">鐱<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10768">礥<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18606">齤<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22939">䦲<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23649">䵖<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26584">讂<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8317">贒<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16703">矔<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21461">䉯<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22187">䘆<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22262">䙭<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22891">䥪<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23043">䨳<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23285">䭠<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23723">䶬<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2369">鰹<span class="small">ケン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5782">顯<span class="small">ケン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6353">驗<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6641">鼸<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7333">韅<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9966">蠲<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9973">蠸<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10099">襺<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14597">巘<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14598">巚<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16470">玁<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17405">虇<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17775">贙<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19941">㪻<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20217">㱍<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21636">䌯<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23116">䪈<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23287">䭤<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24333">䜢<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6475">鹼<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22316">䚭<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22553">䟒<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22634">䠰<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23654">䵛<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18152">鑳<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21528">䊴<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5145">顴<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15994">灦<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23369">䮿<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21057">䂅<span class="small">ケン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6023">广<span class="small">ゲン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="120">元<span class="small">ゲン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1390">幻<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18867">㕕<span class="small">ゲン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1088">玄<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14380">屵<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19128">㚧<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26384">㐾<span class="small">ゲン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="017">見<span class="small">ゲン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="119">言<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3381">妍<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5179">阮<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5316">芫<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13969">妧<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14805">忴<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14908">扲<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15457">沅<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17938">邧<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19509">㡲<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21919">䒛<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24531">严<span class="small">ゲン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1680">弦<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3235">呟<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6065">劵<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8621">还<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11760">朊<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11958">杬<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13288">咁<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13978">妶<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14817">怰<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16299">牪<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16360">狋<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20027">㭇<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20629">㹡<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21768">䏓<span class="small">ゲン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="290">研<span class="small">ゲン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="691">限<span class="small">ゲン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2371">彦<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6486">姸<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10517">盶<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11646">昡<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14762">彥<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16641">盷<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19521">㡾<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19524">㢂<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22109">䖠<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23899">咞<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24006">汧<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24262">㿼<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24583">俨<span class="small">ゲン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="118">原<span class="small">ゲン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1992">拳<span class="small">ゲン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2363">倦<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5152">眩<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5216">痃<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9776">蚖<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10106">玆<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12850">勌<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13336">哯<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13350">唁<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13358">唍<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13722">垷<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14028">娊<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14051">娨<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14056">娮<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16877">笎<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17422">蚙<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18860">㕋<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21693">䍾<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21943">䓂<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22957">䧋<span class="small">ゲン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="668">眼<span class="small">ゲン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="690">現<span class="small">ゲン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1637">患<span class="small">ゲン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1994">舷<span class="small">ゲン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2372">絃<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3118">偐<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4950">訝<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5582">衒<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9794">蚿<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10644">硏<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10846">䅈<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11682">晛<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13132">减<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13196">厡<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14061">娹<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14086">婘<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14099">婩<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14105">婱<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14475">崡<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16509">琂<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16730">硍<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17266">萒<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19473">㡉<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19566">㢺<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21088">䂩<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22270">䙹<span class="small">ゲン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="692">減<span class="small">ゲン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2367">硯<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12568">傆<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13434">喭<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14500">嵃<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16318">犈<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17435">蛝<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18208">雂<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18209">雃<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18798">㓺<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20058">㭹<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20659">㺂<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21098">䂴<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21805">䐄<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23300">䭴<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26230">鼋<span class="small">ゲン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="863">源<span class="small">ゲン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1674">嫌<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4689">鉉<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8383">趼<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8600">遃<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11257">揅<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13464">嗛<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14167">嫄<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14995">搼<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15231">楌<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16429">獂<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16663">睔<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16962">粯<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17299">蒝<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17619">觠<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17650">詪<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17654">詽<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18202">隒<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19400">㟲<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19404">㟶<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19698">㥳<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20599">㹂<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20667">㺌<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21362">䇾<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23247">䬧<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25012">塬<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3603">愿<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12604">僩<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12605">僴<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14186">嫢<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15243">榞<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15247">榩<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17326">蔅<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17334">蔨<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17662">誢<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19223">㜝<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20605">㹉<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21001">䁂<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21576">䋮<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22919">䦘<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23076">䩙<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27099">酽<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6893">魭<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9213">羬<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16582">甉<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17667">誸<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18998">㗴<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19726">㦓<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20827">㽦<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21501">䊙<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23315">䮄<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23530">䲮<span class="small">ゲン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1643">還<span class="small">ゲン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2373">諺<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6865">鬳<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9215">羱<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9890">螈<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13538">噞<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17475">螊<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17902">輱<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18063">錎<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19545">㢛<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20124">㯗<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20530">㷳<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23539">䲻<span class="small">ゲン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="862">厳<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6565">黿<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8185">謜<span class="small">ゲン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="498">験<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4808">繝<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6742">騐<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18572">麲<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21044">䁵<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23144">䪭<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23333">䮗<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23625">䴷<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23662">䵤<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13571">嚚<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17369">藖<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17710">譀<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18367">騝<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19013">㘋<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21250">䅾<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23186">䫡<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27779">𠑊<span class="small">ゲン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2266">巌<span class="small">ゲン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6147">嚴<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6667">齞<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8769">醶<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14265">孉<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14593">巏<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17181">臔<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18377">騵<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20462">㶎<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24154">邍<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10288">甗<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16976">糮<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19022">㘖<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3145">儼<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7423">顩<span class="small">ゲン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5711">巖<span class="small">ゲン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6353">驗<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13598">囐<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13887">壧<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14269">孍<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14596">巗<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14597">巘<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14598">巚<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17775">贙<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18551">鷼<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19023">㘙<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21636">䌯<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23710">䶟<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6668">齴<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11742">曮<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22553">䟒<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22634">䠰<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23516">䲓<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23711">䶠<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16785">礹<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21468">䉷<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8231">讞<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8780">釅<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13204">厵<span class="small">ゲン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23722">䶫<span class="small">ゲン</span></a></li>
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