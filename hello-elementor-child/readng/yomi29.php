<?php
/*
 * Template Name: Yomi29
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
               <h1 class="ttl_main">音訓検索「へ」</h1>
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
               <p>「へ」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>へ</option>
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
                         <li id="parts1_menu"><a href="#parts1">へ</a></li>
                         <li id="parts2_menu"><a href="#parts2">へい</a></li>
                         <li id="parts3_menu"><a href="#parts3">へき</a></li>
                         <li id="parts4_menu"><a href="#parts4">へく</a></li>
                         <li id="parts5_menu"><a href="#parts5">へこ</a></li>
                         <li id="parts6_menu"><a href="#parts6">へさ</a></li>
                         <li id="parts7_menu"><a href="#parts7">へし</a></li>
                         <li id="parts8_menu"><a href="#parts8">へす</a></li>
                         <li id="parts9_menu"><a href="#parts9">へそ</a></li>
                         <li id="parts10_menu"><a href="#parts10">へた</a></li>
                         <li id="parts11_menu"><a href="#parts11">へち</a></li>
                         <li id="parts12_menu"><a href="#parts12">へつ</a></li>
                         <li id="parts13_menu"><a href="#parts13">へに</a></li>
                         <li id="parts14_menu"><a href="#parts14">へひ</a></li>
                         <li id="parts15_menu"><a href="#parts15">へや</a></li>
                         <li id="parts16_menu"><a href="#parts16">へら</a></li>
                         <li id="parts17_menu"><a href="#parts17">へり</a></li>
                         <li id="parts18_menu"><a href="#parts18">へる</a></li>
                         <li id="parts19_menu"><a href="#parts19">へん</a></li>
                         <li id="parts20_menu"><a href="#parts20">へー</a></li>
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
                    <h3 class="ttl_while">へ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="13242">吧<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13915">夿<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13955">妑<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14670">庍<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20579">㸭<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27856">𣏟<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15174">柸<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13726">垻<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14043">娝<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17185">舥<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20040">㭛<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21868">䑔<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16525">琣<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20600">㹃<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22121">䖰<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18973">㗗<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20884">㾦<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21371">䈈<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23407">䯱<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23408">䯲<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24310">䔤<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14551">嶏<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20414">㵒<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21581">䋳<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23121">䪐<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20449">㵺<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22061">䕠<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23701">䶕<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21459">䉬<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22895">䥯<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13889">壩<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18244">靅<span class="small">ヘ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21151">䃻<span class="small">ヘ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="122">戸<span class="small">へ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11233">戶<span class="small">へ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11234">户<span class="small">へ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3441">屁<span class="small">へ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16351">犻<span class="small">ベ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17813">跁<span class="small">ベ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15378">毰<span class="small">ベ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21480">䊃<span class="small">ベ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21800">䏽<span class="small">ベ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20884">㾦<span class="small">ベ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21322">䇑<span class="small">ベ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22001">䔒<span class="small">ベ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22765">䣙<span class="small">ベ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23154">䪹<span class="small">ベ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23375">䯋<span class="small">ベ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18501">鵧<span class="small">ベ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23701">䶕<span class="small">ベ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16708">矲<span class="small">ベ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21258">䆉<span class="small">ベ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20465">㶔<span class="small">ベ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22895">䥯<span class="small">ベ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="607">辺<span class="small">べ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17910">边<span class="small">べ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="406">部<span class="small">べ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8672">郶<span class="small">べ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5779">邉<span class="small">べ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5780">邊<span class="small">べ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">へい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="410">平<span class="small">ヘイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1886">丙<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3500">并<span class="small">ヘイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="605">兵<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10299">甹<span class="small">ヘイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="976">並<span class="small">ヘイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1825">坪<span class="small">ヘイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1885">併<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4011">枋<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5334">苹<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5549">秉<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6490">幷<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8643">邴<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9420">苪<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11059">怲<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11313">抦<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13280">呯<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15155">枈<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17133">肶<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18186">陃<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19464">㡀<span class="small">ヘイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1262">柄<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3443">屏<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4905">炳<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8673">郱<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11661">昺<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11662">昞<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12009">枰<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12492">俜<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14624">帡<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14688">庰<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16485">玶<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17139">胓<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20484">㶮<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23946">姘<span class="small">ヘイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="402">病<span class="small">ヘイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="975">陛<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3112">俾<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3389">娉<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5516">迸<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6015">竝<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11090">悂<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12117">栟<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12460">倂<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15589">涄<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16382">狴<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16653">眪<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16850">窉<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16878">笓<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20702">㺸<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20708">㻂<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21956">䓑<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24201">㙄<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25449">毙<span class="small">ヘイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="977">閉<span class="small">ヘイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1874">瓶<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5377">萍<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6337">閇<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6488">屛<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9522">荓<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9523">萆<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12072">梐<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12596">偋<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13750">埤<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14478">崥<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14631">帲<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17428">蚲<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17431">蛃<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19568">㢼<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19801">㨀<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21552">䋑<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21647">䍈<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24015">洴<span class="small">ヘイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="795">評<span class="small">ヘイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1884">塀<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3788">敝<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6513">逬<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6602">傡<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9159">缾<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9284">聠<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12008">棅<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12116">椑<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14313">寎<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14639">幈<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16515">琕<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18009">鈚<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19905">㪏<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20994">䀻<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21366">䈂<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22569">䟤<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24106">艵<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24131">蛢<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25251">惫<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4859">聘<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5162">睥<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7604">鈵<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8513">軿<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10274">甁<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10575">睤<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14156">媲<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17442">蜌<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19487">㡙<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20784">㼰<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25064">嫓<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2893">箆<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7707">鉼<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8845">箅<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9632">蓱<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11461">摒<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20097">㮰<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22363">䛣<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24093">竮<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26349">塀<span class="small">ヘイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1882">幣<span class="small">ヘイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1883">弊<span class="small">ヘイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2097">蔽<span class="small">ヘイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2098">餅<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2891">僻<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6174">幤<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7404">頩<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8512">輧<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11487">撇<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14748">彆<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15828">潎<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16443">獙<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16913">箳<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17734">豍<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18041">銴<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20110">㯅<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20112">㯇<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22302">䚜<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22673">䡟<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23121">䪐<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24213">㢢<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2892">篦<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3411">嬖<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3621">憊<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3853">鮃<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5425">薜<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7706">錍<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9901">螕<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13873">壀<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15020">撆<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16442">獘<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5821">餠<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6945">鮩<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7312">鞞<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15916">濞<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16931">簈<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17613">覮<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18501">鵧<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20449">㵺<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22613">䠘<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23169">䫌<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23385">䯗<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3791">斃<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6628">䶄<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7267">䴵<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7769">鎞<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7770">鎊<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21048">䁹<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21614">䌘<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23448">䰦<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17966">鄨<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22694">䡶<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23005">䨆<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6584">鼙<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7834">鐴<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18137">鐾<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7220">鷩<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17523">蠯<span class="small">ヘイ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25018">墙<span class="small">へい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6136">墻<span class="small">へい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4352">牆<span class="small">へい</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="299">皿<span class="small">ベイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="220">米<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17133">肶<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19464">㡀<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5025">袂<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13309">咪<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14017">姳<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15537">洣<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24077">眫<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26313">脒<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10553">眯<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21661">䍘<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21482">䊅<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21560">䋛<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22569">䟤<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9600">蒾<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17653">詸<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19202">㜆<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19286">㝥<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7637">銤<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15013">摵<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17333">蔝<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18041">銴<span class="small">ベイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2080">謎<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18564">麊<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19869">㩢<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23469">䱊<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24156">醚<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15316">櫗<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21614">䌘<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22811">䤍<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4560">麑<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7257">麛<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18137">鐾<span class="small">ベイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18145">鑖<span class="small">ベイ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4938">燹<span class="small">へいか</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">へき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="17128">肑<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21646">䍇<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9523">萆<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20935">㿰<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7563">釽<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12116">椑<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16124">焷<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5318">辟<span class="small">ヘキ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2894">碧<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17013">綼<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22837">䤨<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24158">銢<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2891">僻<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3185">劈<span class="small">ヘキ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1263">壁<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11502">擗<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14712">廦<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15897">澼<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24956">噼<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14884">憵<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20248">㱸<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21853">䑀<span class="small">ヘキ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1549">癖<span class="small">ヘキ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2099">璧<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4878">甓<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10758">礔<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16775">礕<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5067">襞<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17046">繴<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21621">䌟<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4291">躄<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6533">躃<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23129">䪙<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3967">闢<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3995">霹<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7834">鐴<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7198">鷿<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7199">鸊<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18588">鼊<span class="small">ヘキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5770">冖<span class="small">ベキ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="028">糸<span class="small">ベキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4327">汨<span class="small">ベキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5456">覓<span class="small">ベキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8041">覔<span class="small">ベキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22097">䖑<span class="small">ベキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23972">幂<span class="small">ベキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3493">幎<span class="small">ベキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8045">覛<span class="small">ベキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9599">蓂<span class="small">ベキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13811">塓<span class="small">ベキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14863">慏<span class="small">ベキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15805">漞<span class="small">ベキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16183">熐<span class="small">ベキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3159">冪<span class="small">ベキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6576">鼏<span class="small">ベキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20408">㵋<span class="small">ベキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22799">䣾<span class="small">ベキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14657">幦<span class="small">ベキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15911">濗<span class="small">ベキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17612">覭<span class="small">ベキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21416">䈿<span class="small">ベキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21607">䌐<span class="small">ベキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5595">羃<span class="small">ベキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16934">簚<span class="small">ベキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23354">䮭<span class="small">ベキ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">へく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4871">瓸<span class="small">ヘクトグラム</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13117">兡<span class="small">ヘクトグラム</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5264">粨<span class="small">ヘクトメートル</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21314">䇉<span class="small">ヘクトリットル</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5544">竡<span class="small">ヘクトリットル</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">へこ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1613">凹<span class="small">へこ（ます）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1613">凹<span class="small">へこ（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">へさ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5747">舮<span class="small">へさき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4886">舳<span class="small">へさき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26329">舻<span class="small">へさき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4897">艫<span class="small">へさき</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">へし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="656">可<span class="small">べ（し）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">へす</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="640">圧<span class="small">へ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24744">压<span class="small">へ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6153">壓<span class="small">へ（す）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">へそ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="26311">脐<span class="small">へそ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4776">綣<span class="small">へそ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21826">䐡<span class="small">へそ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4314">臍<span class="small">へそ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">へた</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5410">蒂<span class="small">へた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5409">蔕<span class="small">へた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1475">阻<span class="small">へだ（たる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25249">悬<span class="small">へだ（たる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1344">隔<span class="small">へだ（たる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1678">懸<span class="small">へだ（たる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1062">距<span class="small">へだ（てる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1344">隔<span class="small">へだ（てる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="910">障<span class="small">へだ（てる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">へち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="5703">丿<span class="small">ヘチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15173">柭<span class="small">ヘチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18829">㔡<span class="small">ヘチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21355">䇷<span class="small">ヘチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21565">䋢<span class="small">ヘチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22221">䘷<span class="small">ヘチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22832">䤢<span class="small">ヘチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23213">䫾<span class="small">ヘチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14198">嫳<span class="small">ヘチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23121">䪐<span class="small">ヘチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23297">䭱<span class="small">ヘチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21614">䌘<span class="small">ヘチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17966">鄨<span class="small">ヘチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18123">鐅<span class="small">ヘチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17407">虌<span class="small">ヘチ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="606">別<span class="small">ベチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12751">别<span class="small">ベチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13291">咇<span class="small">ベチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13682">坲<span class="small">ベチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16032">炦<span class="small">ベチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21775">䏟<span class="small">ベチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22569">䟤<span class="small">ベチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23213">䫾<span class="small">ベチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14789">徶<span class="small">ベチ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">へつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="5703">丿<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25489">氕<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13291">咇<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13682">坲<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15173">柭<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16032">炦<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21775">䏟<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9488">莂<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19568">㢼<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8043">覕<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18829">㔡<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22569">䟤<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21355">䇷<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21565">䋢<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22221">䘷<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23213">䫾<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11487">撇<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14198">嫳<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14748">彆<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14789">徶<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15828">潎<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23121">䪐<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25821">瘪<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6211">暼<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11006">憋<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15020">撆<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10078">襒<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17033">縪<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23297">䭱<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17506">蟞<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21614">䌘<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7172">䳤<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8444">蹩<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8445">䠥<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10450">癟<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17966">鄨<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18123">鐅<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22874">䥕<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23005">䨆<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6573">鱉<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7220">鷩<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3851">鼈<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6572">龞<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17407">虌<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27646">㿜<span class="small">ヘツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25607">灭<span class="small">ベツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="606">別<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12751">别<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2835">捌<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10538">眜<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9807">蛂<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16958">粖<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8043">覕<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18777">㓕<span class="small">ベツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1575">滅<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11439">搣<span class="small">ベツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2100">蔑<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9633">薎<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18478">鴓<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18740">㒝<span class="small">ベツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2895">瞥<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8900">篾<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11208">懱<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15939">瀎<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19869">㩢<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21414">䈼<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24373">幭<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15316">櫗<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5074">襪<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10614">䁾<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16780">礣<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9960">蠛<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9985">衊<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21631">䌩<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18145">鑖<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5098">韈<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6573">鱉<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22190">䘊<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23066">䩏<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7337">韤<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3851">鼈<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7078">鱴<span class="small">ベツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6572">龞<span class="small">ベツ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10936">灶<span class="small">へっつい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27715">𥧄<span class="small">へっつい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10937">䆴<span class="small">へっつい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2664">竃<span class="small">へっつい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2663">竈<span class="small">へっつい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3080">佞<span class="small">へつら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6161">侫<span class="small">へつら（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="609">便<span class="small">へつら（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2393">倖<span class="small">へつら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8179">䛕<span class="small">へつら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4979">諂<span class="small">へつら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4987">諛<span class="small">へつら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4984">諞<span class="small">へつら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8166">讇<span class="small">へつら（う）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">へに</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="870">紅<span class="small">べに</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1116">脂<span class="small">べに</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11926">胭<span class="small">べに</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4315">臙<span class="small">べに</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">へひ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="6115">它<span class="small">へび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9800">虵<span class="small">へび</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1715">蛇<span class="small">へび</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">へや</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1270">坊<span class="small">へや</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1565">房<span class="small">へや</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="152">室<span class="small">へや</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2416">閤<span class="small">へや</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">へら</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="2893">箆<span class="small">へら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2892">篦<span class="small">へら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5483">貶<span class="small">へ（らす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13132">减<span class="small">へ（らす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="692">減<span class="small">へ（らす）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">へり</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4761">絎<span class="small">へり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1020">縁<span class="small">へり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6453">緣<span class="small">へり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26952">逊<span class="small">へりくだ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2050">遜<span class="small">へりくだ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14860">愻<span class="small">へりくだ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1675">謙<span class="small">へりくだ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">へる</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="24743">历<span class="small">へ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13664">坕<span class="small">へ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1907">耗<span class="small">へ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="684">経<span class="small">へ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13132">减<span class="small">へ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="692">減<span class="small">へ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="766">損<span class="small">へ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5910">經<span class="small">へ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12889">厯<span class="small">へ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="635">歴<span class="small">へ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1324">閲<span class="small">へ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7879">閱<span class="small">へ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6442">歷<span class="small">へ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">へん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="2136">片<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5974">卞<span class="small">ヘン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="410">平<span class="small">ヘン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="607">辺<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17910">边<span class="small">ヘン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="411">返<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3667">抃<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5931">汳<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11041">忭<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12963">匥<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13610">囨<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15447">汴<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11314">拚<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16480">玣<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20319">㳎<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21767">䏒<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21932">䒪<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24775">变<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25611">炞<span class="small">ヘン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="608">変<span class="small">ヘン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="609">便<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3653">扁<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10354">疺<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10647">砭<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10904">窆<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11663">昪<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20034">㭓<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20703">㺹<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4235">胼<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24207">㝸<span class="small">ヘン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1887">偏<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5483">貶<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12989">匾<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16395">猈<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17603">覑<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18793">㓲<span class="small">ヘン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1888">遍<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6498">腁<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9571">萹<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11145">惼<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14147">媥<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14786">徧<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14969">揙<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16420">猵<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16515">琕<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17761">貵<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19194">㛹<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19585">㣐<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20373">㴜<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25945">笾<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7873">閞<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8314">賆<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8407">跰<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12162">楩<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15228">楄<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16289">牑<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16323">犏<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20283">㲢<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21815">䐔<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23301">䭵<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25653">煸<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27365">㺍<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5053">褊<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8547">辡<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10281">甂<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10406">㾫<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10713">碥<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10868">稨<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23156">䪻<span class="small">ヘン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="804">編<span class="small">ヘン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2896">篇<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4081">蝙<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5610">翩<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8863">箯<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8971">糄<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9096">緶<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9300">臱<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9344">艑<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17734">豍<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18281">頨<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20675">㺕<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20756">㼐<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22602">䠋<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23312">䮁<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4502">駢<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4984">諞<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7104">鴘<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7303">鞕<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8418">蹁<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17839">踫<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22676">䡢<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27133">鍂<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5779">邉<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7741">鍽<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7892">闆<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9700">藊<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16459">獱<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17411">虨<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20446">㵷<span class="small">ヘン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2897">鞭<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6500">騈<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6801">骿<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19731">㦚<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20570">㸤<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21044">䁵<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4503">騙<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5780">邊<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18364">騗<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4815">辮<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7010">鯾<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7011">鯿<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18522">鶣<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23427">䰉<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22548">䟍<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6203">變<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8943">籩<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21469">䉸<span class="small">ヘン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5735">宀<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5974">卞<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6592">丏<span class="small">ベン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="805">弁<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15424">汅<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9376">芇<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3667">抃<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5931">汳<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6071">釆<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10523">䀎<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12683">免<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12963">匥<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13126">冺<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15447">汴<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15466">沔<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17210">苄<span class="small">ベン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1576">免<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4341">泯<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7278">靣<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16480">玣<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18583">黾<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20319">㳎<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21932">䒪<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25611">炞<span class="small">ベン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="416">面<span class="small">ベン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="609">便<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3095">俛<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5150">眄<span class="small">ベン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6375">勉<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13129">凂<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20034">㭓<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20703">㺹<span class="small">ベン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="412">勉<span class="small">ベン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1280">眠<span class="small">ベン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2898">娩<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4235">胼<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8037">覍<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9487">莬<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15581">浼<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19256">㝃<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19472">㡈<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24207">㝸<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3156">冕<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12556">偭<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12857">勔<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14067">婂<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16395">猈<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18793">㓲<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24424">渑<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4401">湎<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6498">腁<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11146">愐<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13423">喕<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14134">媔<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14969">揙<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15703">湣<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16515">琕<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17281">葂<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19185">㛯<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19194">㛹<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19683">㥝<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20363">㴐<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22341">䛉<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22349">䛒<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3849">黽<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9054">絻<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15228">楄<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16289">牑<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19824">㨠<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20073">㮌<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20283">㲢<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21815">䐔<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23301">䭵<span class="small">ベン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="815">綿<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14179">嫚<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19846">㨺<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23156">䪻<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2899">緬<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3034">麪<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5912">緜<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8863">箯<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9300">臱<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14881">憣<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15843">潣<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17461">蝒<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18570">麫<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20675">㺕<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20756">㼐<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22377">䛲<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22602">䠋<span class="small">ベン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2111">麺<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4502">駢<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6063">辨<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6064">辧<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8550">辦<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18736">㒙<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21753">䏃<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22804">䤄<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24030">澠<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14251">嬵<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20446">㵷<span class="small">ベン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2897">鞭<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6500">騈<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6966">鮸<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12294">檰<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19295">㝰<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21517">䊩<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27883">𩈳<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15314">櫋<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16700">矊<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20155">㰃<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25843">矈<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4815">辮<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4975">瓣<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6528">麵<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16701">矏<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18522">鶣<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6331">辯<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23204">䫵<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23435">䰓<span class="small">ベン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21469">䉸<span class="small">ベン</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2136">片<span class="small">ペンス</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27866">𣘸<span class="small">べんど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27866">𣘸<span class="small">べんどう</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">へー</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2362">頁<span class="small">ページ</span></a></li>
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