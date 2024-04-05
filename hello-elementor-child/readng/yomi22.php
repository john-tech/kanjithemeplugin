<?php
/*
 * Template Name: Yomi22
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
               <h1 class="ttl_main">音訓検索「に」</h1>
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
               <p>「に」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>に</option>
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
                         <li id="parts1_menu"><a href="#parts1">に</a></li>
                         <li id="parts2_menu"><a href="#parts2">にい</a></li>
                         <li id="parts3_menu"><a href="#parts3">にえ</a></li>
                         <li id="parts4_menu"><a href="#parts4">にお</a></li>
                         <li id="parts5_menu"><a href="#parts5">にか</a></li>
                         <li id="parts6_menu"><a href="#parts6">にき</a></li>
                         <li id="parts7_menu"><a href="#parts7">にく</a></li>
                         <li id="parts8_menu"><a href="#parts8">にけ</a></li>
                         <li id="parts9_menu"><a href="#parts9">にこ</a></li>
                         <li id="parts10_menu"><a href="#parts10">にし</a></li>
                         <li id="parts11_menu"><a href="#parts11">にせ</a></li>
                         <li id="parts12_menu"><a href="#parts12">にち</a></li>
                         <li id="parts13_menu"><a href="#parts13">にな</a></li>
                         <li id="parts14_menu"><a href="#parts14">にひ</a></li>
                         <li id="parts15_menu"><a href="#parts15">にふ</a></li>
                         <li id="parts16_menu"><a href="#parts16">にへ</a></li>
                         <li id="parts17_menu"><a href="#parts17">にや</a></li>
                         <li id="parts18_menu"><a href="#parts18">にゆ</a></li>
                         <li id="parts19_menu"><a href="#parts19">によ</a></li>
                         <li id="parts20_menu"><a href="#parts20">にら</a></li>
                         <li id="parts21_menu"><a href="#parts21">にる</a></li>
                         <li id="parts22_menu"><a href="#parts22">にれ</a></li>
                         <li id="parts23_menu"><a href="#parts23">にわ</a></li>
                         <li id="parts24_menu"><a href="#parts24">にん</a></li>
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
                    <h3 class="ttl_while">に</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="064">二<span class="small">ニ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="915">仁<span class="small">ニ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1849">尼<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3061">弍<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5880">尓<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14336">尒<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14337">尔<span class="small">ニ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="030">耳<span class="small">ニ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1222">弐<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20023">㭁<span class="small">ニ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="525">児<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12409">伲<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12410">伱<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12412">你<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14799">忎<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15147">杒<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15148">杘<span class="small">ニ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5806">兒<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6070">迩<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12758">刵<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13064">侕<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13270">呢<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13677">坭<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13971">妮<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16366">狔<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19358">㞾<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11781">胒<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13304">咡<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14429">峏<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17227">荋<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18188">陑<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18910">㖇<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19155">㛅<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19786">㧫<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21188">䄲<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21725">䎠<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22317">䚮<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24397">䎟<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14364">屔<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16813">秜<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19806">㨅<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21785">䏪<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22207">䘦<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6325">貮<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13377">唲<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14112">婼<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15203">梕<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17559">袻<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19567">㢻<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21741">䎶<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22270">䙹<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5889">貳<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17819">跜<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20068">㮃<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21558">䋙<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22453">䝚<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21008">䁊<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21989">䔀<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22790">䣵<span class="small">ニ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2479">爾<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7629">鉺<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18324">馜<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18720">㒃<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21571">䋩<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19723">㦐<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4248">膩<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12411">儞<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18066">錗<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18399">髶<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22809">䤊<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23262">䬽<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23230">䬐<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5534">邇<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15306">檷<span class="small">ニ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24365">䭨<span class="small">ニ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1180">丹<span class="small">に</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19580">㣋<span class="small">に</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="257">荷<span class="small">に</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9804">﨡<span class="small">に</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10243">琼<span class="small">に</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4637">瓊<span class="small">に</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">にい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="9804">﨡<span class="small">にい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="163">新<span class="small">にい</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">にえ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1879">沸<span class="small">にえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25280">挚<span class="small">にえ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2016">摯<span class="small">にえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4710">錵<span class="small">にえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5490">贄<span class="small">にえ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22491">䞇<span class="small">ニエル</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1120">煮<span class="small">に（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6391">煮<span class="small">に（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16142">煑<span class="small">に（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="903">熟<span class="small">に（える）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">にお</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3796">鳰<span class="small">にお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4880">鬯<span class="small">においざけ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2082">匂<span class="small">にお（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1720">臭<span class="small">にお（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6409">臭<span class="small">にお（う）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">にか</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="279">苦<span class="small">にが（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1213">逃<span class="small">に（がす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5719">迯<span class="small">に（がす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="279">苦<span class="small">にがな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5367">荼<span class="small">にがな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3527">彷<span class="small">にかよ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3529">彿<span class="small">にかよ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4423">滷<span class="small">にがり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="279">苦<span class="small">にが（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4247">膠<span class="small">にかわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4247">膠<span class="small">にかわ（する）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">にき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="19708">㥾<span class="small">ニキ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5599">皰<span class="small">にきび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4358">靤<span class="small">にきび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10492">䶌<span class="small">にきび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5365">殷<span class="small">にぎ（やか）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2601">賑<span class="small">にぎ（やか）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1853">把<span class="small">にぎ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1003">握<span class="small">にぎ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2601">賑<span class="small">にぎ（わう）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">にく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="208">肉<span class="small">ニク</span></a></li>
                         <li class="others_kanji onyomi"><a href="2484">宍<span class="small">ニク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15465">沑<span class="small">ニク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21769">䏔<span class="small">ニク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21059">䂇<span class="small">ニク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1451">辱<span class="small">ニク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19056">㙇<span class="small">ニク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21196">䄾<span class="small">ニク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22328">䚼<span class="small">ニク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13459">嗕<span class="small">ニク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14983">搙<span class="small">ニク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19752">㦺<span class="small">ニク</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25547">难<span class="small">にく（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1483">憎<span class="small">にく（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6383">憎<span class="small">にく（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="958">難<span class="small">にく（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6417">難<span class="small">にく（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1483">憎<span class="small">にく（しみ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6383">憎<span class="small">にく（しみ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25772">狞<span class="small">にくにく（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5123">獰<span class="small">にくにく（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1430">疾<span class="small">にく（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="240">悪<span class="small">にく（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5964">惡<span class="small">にく（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2020">嫉<span class="small">にく（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1483">憎<span class="small">にく（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10969">僫<span class="small">にく（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6383">憎<span class="small">にく（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1722">醜<span class="small">にく（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1483">憎<span class="small">にく（らしい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6383">憎<span class="small">にく（らしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4470">輜<span class="small">にぐるま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8520">輺<span class="small">にぐるま</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">にけ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="18605">齝<span class="small">にげか（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="984">亡<span class="small">に（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6718">兦<span class="small">に（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6719">亾<span class="small">に（げる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="223">北<span class="small">に（げる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1213">逃<span class="small">に（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5719">迯<span class="small">に（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5514">逋<span class="small">に（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25936">窜<span class="small">に（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5527">遯<span class="small">に（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22532">䞼<span class="small">に（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5623">竄<span class="small">に（げる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">にこ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="27780">𠗖<span class="small">にご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3847">毳<span class="small">にこげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15556">浊<span class="small">にご（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1178">濁<span class="small">にご（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4848">醪<span class="small">にごりざけ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2051">汰<span class="small">にご（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15556">浊<span class="small">にご（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4384">淆<span class="small">にご（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4394">渾<span class="small">にご（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4409">溷<span class="small">にご（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1178">濁<span class="small">にご（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">にし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="169">西<span class="small">にし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13174">卤<span class="small">にし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10104">卥<span class="small">にし</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2962">螺<span class="small">にし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2083">虹<span class="small">にじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3983">霓<span class="small">にじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4768">綉<span class="small">にしき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1982">錦<span class="small">にしき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2515">繍<span class="small">にしき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6454">繡<span class="small">にしき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1536">泌<span class="small">にじ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15586">涁<span class="small">にじ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15660">渗<span class="small">にじ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4421">滲<span class="small">にじ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12997">卄<span class="small">にじゅう</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2524">廿<span class="small">にじゅう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8459">蹸<span class="small">にじ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4299">躙<span class="small">にじ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4298">躪<span class="small">にじ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3872">鯡<span class="small">にしん</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3884">鰊<span class="small">にしん</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">にせ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1650">偽<span class="small">にせ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3118">偐<span class="small">にせ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5804">僞<span class="small">にせ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2269">贋<span class="small">にせ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8324">贗<span class="small">にせ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3118">偐<span class="small">にせもの</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">にち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="065">日<span class="small">ニチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27719">𡆠<span class="small">ニチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19453">㠴<span class="small">ニチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21927">䒤<span class="small">ニチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13618">囸<span class="small">ニチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16813">秜<span class="small">ニチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19708">㥾<span class="small">ニチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21030">䁥<span class="small">ニチ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">にな</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="26546">蜗<span class="small">にな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4074">蜷<span class="small">にな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4087">蝸<span class="small">にな</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2962">螺<span class="small">にな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9961">蟸<span class="small">にな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4112">蠡<span class="small">にな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3078">佗<span class="small">にな（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="940">担<span class="small">にな（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="257">荷<span class="small">にな（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5086">鞅<span class="small">にな（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5927">擔<span class="small">にな（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5494">贏<span class="small">にな（う）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">にひ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="22826">䤜<span class="small">にび</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1220">鈍<span class="small">にび</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">にふ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="22826">䤜<span class="small">にぶ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1220">鈍<span class="small">にぶ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4696">銖<span class="small">にぶ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4491">駑<span class="small">にぶ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4492">駘<span class="small">にぶ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22826">䤜<span class="small">にぶ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1220">鈍<span class="small">にぶ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">にへ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="6966">鮸<span class="small">にべ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">にや</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="894">若<span class="small">ニャ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14112">婼<span class="small">ニャ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15656">渃<span class="small">ニャ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23904">喏<span class="small">ニャ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24145">蹃<span class="small">ニャ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26626">㘃<span class="small">ニャ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13214">叒<span class="small">ニャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15419">氼<span class="small">ニャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20304">㲻<span class="small">ニャク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="894">若<span class="small">ニャク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="154">弱<span class="small">ニャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14961">掿<span class="small">ニャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15656">渃<span class="small">ニャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17922">逽<span class="small">ニャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5400">蒻<span class="small">ニャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14983">搙<span class="small">ニャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21823">䐞<span class="small">ニャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24145">蹃<span class="small">ニャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16970">糑<span class="small">ニャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22309">䚥<span class="small">ニャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23268">䭆<span class="small">ニャク</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1120">煮<span class="small">に（やす）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6391">煮<span class="small">に（やす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16142">煑<span class="small">に（やす）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">にゆ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="13253">吺<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13963">妞<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15465">沑<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23927">坈<span class="small">ニュ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="959">乳<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21769">䏔<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21059">䂇<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16953">粈<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17242">莥<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20041">㭜<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21196">䄾<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22212">䘬<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18952">㖻<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20257">㲃<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20278">㲝<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21349">䇯<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21814">䐓<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22995">䧷<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21582">䋴<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22703">䢇<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18348">駥<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18399">髶<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18484">鴧<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13559">嚅<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15125">曘<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20620">㹘<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18267">韖<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18370">騥<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23424">䰆<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18515">鶔<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21306">䇀<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22496">䞕<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18144">鑐<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18405">鬞<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23456">䰰<span class="small">ニュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18457">鱬<span class="small">ニュ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="066">入<span class="small">ニュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13205">厹<span class="small">ニュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13604">囡<span class="small">ニュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="959">乳<span class="small">ニュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16008">炄<span class="small">ニュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19112">㚔<span class="small">ニュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1131">柔<span class="small">ニュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14275">孨<span class="small">ニュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17242">莥<span class="small">ニュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20343">㳶<span class="small">ニュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14118">媃<span class="small">ニュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15661">渘<span class="small">ニュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16533">瑈<span class="small">ニュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20826">㽥<span class="small">ニュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20434">㵫<span class="small">ニュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16567">瓇<span class="small">ニュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17747">貀<span class="small">ニュチ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">によ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="036">女<span class="small">ニョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1438">如<span class="small">ニョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17130">肗<span class="small">ニョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12451">侞<span class="small">ニョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5345">茹<span class="small">ニョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5896">洳<span class="small">ニョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15186">桇<span class="small">ニョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20865">㾒<span class="small">ニョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24258">㼋<span class="small">ニョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17296">蒘<span class="small">ニョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20418">㵖<span class="small">ニョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="036">女<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3065">仍<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24199">㘝<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20023">㭁<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20264">㲌<span class="small">ニョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1524">尿<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19035">㘨<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21178">䄧<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19112">㚔<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19272">㝕<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20697">㺱<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22317">䚮<span class="small">ニョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1283">娘<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19806">㨅<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20334">㳧<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20339">㳮<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13746">埝<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14097">婥<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14844">惗<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17152">脲<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17250">菍<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19328">㞙<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21339">䇣<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23207">䫸<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13433">喦<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14312">寍<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14316">寕<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14982">搑<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27861">𣓤<span class="small">ニョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2067">溺<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14320">寜<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21286">䆨<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21709">䎎<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22906">䦊<span class="small">ニョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1852">寧<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17827">踂<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14216">嬈<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17832">踗<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18203">隢<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22021">䔭<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26851">踙<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4189">橈<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5529">遶<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12653">儜<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15031">擃<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15283">橣<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20926">㿦<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14238">嬣<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16841">穘<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19613">㣷<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24356">䭃<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4811">繞<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18741">㒟<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20295">㲰<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21047">䁸<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23558">䳖<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19243">㜵<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19440">㠡<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21618">䌜<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4729">鐃<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16466">獽<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5298">饒<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16264">爙<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18294">顤<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21146">䃵<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18143">鑏<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20550">㸎<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18405">鬞<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19885">㩶<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20623">㹛<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21466">䉴<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23286">䭢<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23595">䴃<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17861">躟<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18406">鬡<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21637">䌰<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22090">䖆<span class="small">ニョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14184">嫟<span class="small">ニョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14254">嬺<span class="small">ニョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22309">䚥<span class="small">ニョク</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">にら</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="2305">韭<span class="small">にら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2304">韮<span class="small">にら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5430">薤<span class="small">にら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20311">㳃<span class="small">にら（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4378">淬<span class="small">にら（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12348">焠<span class="small">にら（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5147">盻<span class="small">にら（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5149">眈<span class="small">にら（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3112">俾<span class="small">にら（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5154">眥<span class="small">にら（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5155">眦<span class="small">にら（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5159">睨<span class="small">にら（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5161">睚<span class="small">にら（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5162">睥<span class="small">にら（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10575">睤<span class="small">にら（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21048">䁹<span class="small">にら（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts21">
                    <h3 class="ttl_while">にる</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="723">似<span class="small">に（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1745">肖<span class="small">に（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2311">亨<span class="small">に（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12408">佀<span class="small">に（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25618">烂<span class="small">に（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24095">类<span class="small">に（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2910">烹<span class="small">に（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1120">煮<span class="small">に（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2037">煎<span class="small">に（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6391">煮<span class="small">に（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16142">煑<span class="small">に（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20517">㷙<span class="small">に（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4642">髣<span class="small">に（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="903">熟<span class="small">に（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4645">髴<span class="small">に（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4932">燗<span class="small">に（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="631">類<span class="small">に（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4313">臑<span class="small">に（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6364">類<span class="small">に（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4944">爛<span class="small">に（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6870">鬺<span class="small">に（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24063">爤<span class="small">に（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts22">
                    <h3 class="ttl_while">にれ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4009">枌<span class="small">にれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4152">楡<span class="small">にれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6534">榆<span class="small">にれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18605">齝<span class="small">にれか（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts23">
                    <h3 class="ttl_while">にわ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1830">廷<span class="small">にわ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="371">庭<span class="small">にわ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="085">園<span class="small">にわ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2189">薗<span class="small">にわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4142">棣<span class="small">にわうめ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2216">俄<span class="small">にわか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24559">仓<span class="small">にわ（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3107">伜<span class="small">にわ（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13041">仺<span class="small">にわ（か）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2216">俄<span class="small">にわ（か）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="557">倉<span class="small">にわ（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3106">倅<span class="small">にわ（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19971">㫧<span class="small">にわ（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5114">猝<span class="small">にわ（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4412">溘<span class="small">にわ（か）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="811">暴<span class="small">にわ（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4579">霍<span class="small">にわ（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5533">遽<span class="small">にわ（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11717">㬥<span class="small">にわ（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4511">驟<span class="small">にわ（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4448">瀑<span class="small">にわかあめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5669">卆<span class="small">にわ（かに）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="561">卒<span class="small">にわ（かに）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13001">䘚<span class="small">にわ（かに）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2106">勃<span class="small">にわ（かに）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18825">㔜<span class="small">にわ（かに）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4142">棣<span class="small">にわざくら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4432">潦<span class="small">にわたずみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7158">雞<span class="small">にわとり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1381">鶏<span class="small">にわとり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5672">鷄<span class="small">にわとり</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts24">
                    <h3 class="ttl_while">にん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="041">人<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5805">儿<span class="small">ニン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1766">刃<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5666">刄<span class="small">ニン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="915">仁<span class="small">ニン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2605">壬<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13602">囜<span class="small">ニン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="783">任<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10954">㣼<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14797">忈<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15142">朲<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19453">㠴<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20306">㲽<span class="small">ニン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1850">忍<span class="small">ニン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1851">妊<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14799">忎<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15147">杒<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17204">芢<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20554">㸒<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20965">䀔<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24287">䏕<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2607">荏<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3382">姙<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5041">衽<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14925">拰<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19636">㤛<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25909">祍<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3557">恁<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5368">荵<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15179">栠<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15180">栣<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15602">润<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5040">袵<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10971">您<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15203">梕<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16822">秹<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17250">菍<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17880">軠<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22330">䚾<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20278">㲝<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20995">䀼<span class="small">ニン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2606">稔<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18416">魜<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22353">䛘<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24273">䄒<span class="small">ニン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="960">認<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19419">㠈<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21589">䋻<span class="small">ニン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24356">䭃<span class="small">ニン</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5405">蔘<span class="small">にんじん</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9673">薓<span class="small">にんじん</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5887">葫<span class="small">にんにく</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2456">蒜<span class="small">にんにく</span></a></li>
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