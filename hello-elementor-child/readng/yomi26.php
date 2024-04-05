<?php
/*
 * Template Name: Yomi26
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
               <h1 class="ttl_main">音訓検索「は」</h1>
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
               <p>「は」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>は</option>
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
                         <li id="parts1_menu"><a href="#parts1">は</a></li>
                         <li id="parts2_menu"><a href="#parts2">はい</a></li>
                         <li id="parts3_menu"><a href="#parts3">はう</a></li>
                         <li id="parts4_menu"><a href="#parts4">はえ</a></li>
                         <li id="parts5_menu"><a href="#parts5">はか</a></li>
                         <li id="parts6_menu"><a href="#parts6">はき</a></li>
                         <li id="parts7_menu"><a href="#parts7">はく</a></li>
                         <li id="parts8_menu"><a href="#parts8">はけ</a></li>
                         <li id="parts9_menu"><a href="#parts9">はこ</a></li>
                         <li id="parts10_menu"><a href="#parts10">はさ</a></li>
                         <li id="parts11_menu"><a href="#parts11">はし</a></li>
                         <li id="parts12_menu"><a href="#parts12">はす</a></li>
                         <li id="parts13_menu"><a href="#parts13">はせ</a></li>
                         <li id="parts14_menu"><a href="#parts14">はた</a></li>
                         <li id="parts15_menu"><a href="#parts15">はち</a></li>
                         <li id="parts16_menu"><a href="#parts16">はつ</a></li>
                         <li id="parts17_menu"><a href="#parts17">はて</a></li>
                         <li id="parts18_menu"><a href="#parts18">はと</a></li>
                         <li id="parts19_menu"><a href="#parts19">はな</a></li>
                         <li id="parts20_menu"><a href="#parts20">はに</a></li>
                         <li id="parts21_menu"><a href="#parts21">はね</a></li>
                         <li id="parts22_menu"><a href="#parts22">はは</a></li>
                         <li id="parts23_menu"><a href="#parts23">はひ</a></li>
                         <li id="parts24_menu"><a href="#parts24">はふ</a></li>
                         <li id="parts25_menu"><a href="#parts25">はへ</a></li>
                         <li id="parts26_menu"><a href="#parts26">はま</a></li>
                         <li id="parts27_menu"><a href="#parts27">はむ</a></li>
                         <li id="parts28_menu"><a href="#parts28">はめ</a></li>
                         <li id="parts29_menu"><a href="#parts29">はも</a></li>
                         <li id="parts30_menu"><a href="#parts30">はや</a></li>
                         <li id="parts31_menu"><a href="#parts31">はら</a></li>
                         <li id="parts32_menu"><a href="#parts32">はり</a></li>
                         <li id="parts33_menu"><a href="#parts33">はる</a></li>
                         <li id="parts34_menu"><a href="#parts34">はれ</a></li>
                         <li id="parts35_menu"><a href="#parts35">はん</a></li>
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
                    <h3 class="ttl_while">は</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei onyomi"><a class="color2" href="2811">巴<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3220">叭<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13220">叵<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27751">𠂢<span class="small">ハ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1853">把<span class="small">ハ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1859">伯<span class="small">ハ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2816">芭<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13242">吧<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13915">夿<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13955">妑<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14613">帊<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14729">弝<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25113">岜<span class="small">ハ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="386">波<span class="small">ハ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2813">杷<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3335">坡<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3550">怕<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4356">爬<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5182">陂<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14332">尀<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14407">岥<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16279">爸<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17212">苩<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19304">㝿<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20579">㸭<span class="small">ハ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="963">派<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3251">哈<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4614">玻<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10353">疤<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10464">皅<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10491">㿬<span class="small">ハ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="786">破<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3939">耙<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4518">笆<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5030">袙<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9008">紦<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9203">羓<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13726">垻<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17185">舥<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17417">蚆<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20040">㭛<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25971">粑<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5372">菠<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8257">豝<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9805">蚾<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13407">啵<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16984">紴<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17080">翍<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17813">跁<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19791">㧳<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24902">啪<span class="small">ハ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="214">番<span class="small">ハ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2814">琶<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4260">跛<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5383">葩<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7558">鈀<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14959">掰<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22454">䝛<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25564">溊<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6266">碆<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7288">靶<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7594">鉕<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8825">筢<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14164">媻<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21322">䇑<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23074">䩗<span class="small">ハ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2817">頗<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8843">箥<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9628">蔢<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13499">嘙<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21371">䈈<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23408">䯲<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24310">䔤<span class="small">ハ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2812">播<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8711">鄱<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14553">嶓<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15834">潖<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18338">駊<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6917">鮊<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27579">䎬<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10482">皤<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10751">磻<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17592">襎<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18087">鎃<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18501">鵧<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15313">櫇<span class="small">ハ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1854">覇<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2815">簸<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8204">譒<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23104">䩻<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23701">䶕<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19879">㩯<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21258">䆉<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3050">霸<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9259">䎱<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20469">㶚<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22895">䥯<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27874">𣠽<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13889">壩<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15987">灞<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12330">欛<span class="small">ハ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21151">䃻<span class="small">ハ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1766">刃<span class="small">は</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5666">刄<span class="small">は</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1959">牙<span class="small">は</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="082">羽<span class="small">は</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9221">羽<span class="small">は</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5970">垪<span class="small">は</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="302">歯<span class="small">は</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="425">葉<span class="small">は</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1181">端<span class="small">は</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5671">齒<span class="small">は</span></a></li>
                         <li class="others_kanji onyomi"><a href="6694">乜<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13009">么<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13225">吀<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25213">庅<span class="small">バ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2816">芭<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14340">尛<span class="small">バ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="209">馬<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13341">哶<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24807">唛<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25971">粑<span class="small">バ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1526">婆<span class="small">バ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1902">麻<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13407">啵<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12578">傌<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5235">痲<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12565">㑻<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13454">嗎<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14164">媻<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15736">溤<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16428">獁<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19213">㜑<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22762">䣕<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22974">䧞<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3502">麼<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4632">瑪<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7275">蔴<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7276">麽<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13499">嘙<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13501">嘜<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13828">塺<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15248">榪<span class="small">バ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2085">罵<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4669">碼<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10814">禡<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16329">犘<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19714">㦄<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20896">㾺<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22602">䠋<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25419">䰾<span class="small">バ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1901">磨<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4088">蟇<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4089">蟆<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9899">螞<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18345">駡<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11202">懡<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14239">嬤<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18832">㔥<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22166">䗫<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22763">䣖<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24958">嚒<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25068">嬷<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9708">藦<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15313">櫇<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22393">䜆<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9719">蘑<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24962">嚰<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18403">鬕<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19879">㩯<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23063">䩋<span class="small">バ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1570">魔<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7027">鰢<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12816">劘<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18397">髍<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18533">鷌<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23395">䯢<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9271">耱<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14894">戂<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15051">攠<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10738">䃺<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21527">䊳<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24171">饝<span class="small">バ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24366">䭩<span class="small">バ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24974">场<span class="small">ば</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26632">㘯<span class="small">ば</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="161">場<span class="small">ば</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6077">塲<span class="small">ば</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">はい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="223">北<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11269">扒<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24293">䒔<span class="small">ハイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1869">妃<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13043">伂<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13046">伓<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27751">𠂢<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2818">吠<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3333">坏<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3421">孛<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4331">沛<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7917">阫<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13961">妚<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14670">庍<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16351">犻<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19619">㤄<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20314">㳈<span class="small">ハイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="967">拝<span class="small">ハイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1226">杯<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3086">佩<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3551">怫<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8640">邶<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9419">茀<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11310">抷<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11790">肧<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11975">杮<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13679">坯<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14413">岯<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15089">昁<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15155">枈<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16013">炋<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16301">牬<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17211">苝<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19135">㚰<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20481">㶨<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20578">㸬<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25217">废<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27853">𣏕<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27856">𣏟<span class="small">ハイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="963">派<span class="small">ハイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="964">肺<span class="small">ハイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="965">背<span class="small">ハイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2820">盃<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4220">胚<span class="small">ハイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5881">拜<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9454">茷<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11602">斾<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12490">俖<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14019">姵<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15173">柭<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15174">柸<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17135">胇<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19784">㧩<span class="small">ハイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="387">配<span class="small">ハイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="388">倍<span class="small">ハイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="966">俳<span class="small">ハイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1949">唄<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3574">悖<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3779">旆<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4615">珮<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9978">衃<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10659">砩<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13725">垺<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13726">垻<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14043">娝<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15584">浿<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19173">㛝<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19652">㤳<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20040">㭛<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21868">䑔<span class="small">ハイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="589">敗<span class="small">ハイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1527">排<span class="small">ハイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1856">培<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3534">徘<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11386">捭<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11973">桮<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12071">梖<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12551">偝<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13402">啡<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14069">婄<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15636">淠<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15659">渒<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16392">猅<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16395">猈<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16508">珼<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16886">笩<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17077">翇<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18835">㔨<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19385">㟝<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19791">㧳<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19978">㫲<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20594">㸽<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22562">䟛<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22714">䢙<span class="small">ハイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1855">廃<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2819">牌<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4403">湃<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4621">琲<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4914">焙<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11414">揹<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12110">棑<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14959">掰<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15378">毰<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16525">琣<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16604">痦<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17889">軰<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17960">鄁<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20600">㹃<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21480">䊃<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21800">䏽<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22121">䖰<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25251">惫<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26474">蒎<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26606">㗑<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2821">稗<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4660">碚<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9595">蓜<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9596">蓓<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10391">痱<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11089">愂<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11974">㮎<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14156">媲<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18973">㗗<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20724">㻗<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20884">㾦<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21322">䇑<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25064">嫓<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25338">摆<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5051">裴<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8148">誖<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8844">箄<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8966">粺<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9997">裵<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10057">褙<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10441">㾱<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22001">䔒<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22587">䟺<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22765">䣙<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23154">䪹<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23407">䯱<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24174">馷<span class="small">ハイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1225">輩<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3981">霈<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6176">廢<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6903">䰽<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7671">鋇<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8511">輫<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8752">醅<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9654">蕟<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14551">嶏<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20107">㯁<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20414">㵒<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21581">䋳<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22602">䠋<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23375">䯋<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3621">憊<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15276">橃<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19431">㠔<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23167">䫊<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5250">癈<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8898">篺<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17493">螷<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18501">鵧<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18592">鼣<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18832">㔥<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20449">㵺<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22613">䠘<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3738">擺<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11557">贁<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22061">䕠<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25964">簰<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15319">櫠<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16338">犤<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20157">㰆<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22312">䚨<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23479">䱝<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7356">韛<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16708">矲<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20465">㶔<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21459">䉬<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17523">蠯<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22895">䥯<span class="small">ハイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18244">靅<span class="small">ハイ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="832">灰<span class="small">はい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9630">蔤<span class="small">はい</span></a></li>
                         <li class="others_kanji onyomi"><a href="24732">劢<span class="small">バイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="224">毎<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26933">迈<span class="small">バイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="008">貝<span class="small">バイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="211">売<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2818">吠<span class="small">バイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6443">每<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13055">佅<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13258">呅<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13656">坆<span class="small">バイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="225">妹<span class="small">バイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="985">枚<span class="small">バイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5337">苺<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10123">玫<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11317">抺<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15473">沬<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17131">肳<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20699">㺳<span class="small">バイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1566">某<span class="small">バイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2107">昧<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2749">栂<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13129">凂<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14019">姵<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15173">柭<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19784">㧩<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20033">㭑<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20971">䀛<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20972">䀜<span class="small">バイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="388">倍<span class="small">バイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="590">梅<span class="small">バイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1949">唄<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2824">狽<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5151">眛<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5338">莓<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11359">挴<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15581">浼<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17142">脄<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19052">㙁<span class="small">バイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1528">陪<span class="small">バイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1856">培<span class="small">バイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6387">梅<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10161">珻<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11828">脢<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14478">崥<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17077">翇<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17249">菋<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19385">㟝<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19978">㫲<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22714">䢙<span class="small">バイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="210">買<span class="small">バイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1858">媒<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8377">跊<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10371">痗<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15684">湈<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24284">䍙<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26606">㗑<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2822">楳<span class="small">バイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2823">煤<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9841">蛽<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11873">腜<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20782">㼮<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20784">㼰<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21485">䊈<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8743">酶<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10809">禖<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12043">槑<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12906">勱<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13828">塺<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22426">䜸<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22587">䟺<span class="small">バイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1857">賠<span class="small">バイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6326">賣<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7343">韎<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7672">鋂<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8001">霉<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9655">蕒<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13507">嘪<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15843">潣<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16917">篃<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19230">㜥<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20107">㯁<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20408">㵋<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5530">邁<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16224">燘<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22802">䤂<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17493">螷<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18501">鵧<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21041">䁲<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21252">䆀<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23385">䯗<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23660">䵢<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24127">薶<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19734">㦟<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23035">䨪<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23474">䱕<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6553">黣<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22292">䚑<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22406">䜕<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23479">䱝<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3997">霾<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23585">䳸<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3757">黴<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17523">蠯<span class="small">バイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18548">鷶<span class="small">バイ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3832">鷂<span class="small">はいたか</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="066">入<span class="small">はい（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">はう</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="18169">閛<span class="small">ハウ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4356">爬<span class="small">は（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8587">这<span class="small">は（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3199">匍<span class="small">は（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2491">這<span class="small">は（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3200">匐<span class="small">は（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4253">跂<span class="small">は（う）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">はえ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="6125">椪<span class="small">はえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11415">掽<span class="small">はえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6266">碆<span class="small">はえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17460">蝇<span class="small">はえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2959">蝿<span class="small">はえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3860">鮠<span class="small">はえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2958">蠅<span class="small">はえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6999">鰙<span class="small">はえ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="830">延<span class="small">は（え）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="449">栄<span class="small">は（え）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11980">荣<span class="small">は（え）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5731">榮<span class="small">は（え）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="043">生<span class="small">は（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="449">栄<span class="small">は（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="828">映<span class="small">は（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11980">荣<span class="small">は（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6210">暎<span class="small">は（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11415">掽<span class="small">は（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5731">榮<span class="small">は（える）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">はか</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="24978">坟<span class="small">はか</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="455">果<span class="small">はか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26354">茔<span class="small">はか</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="807">墓<span class="small">はか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3348">塋<span class="small">はか</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1547">墳<span class="small">はか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18204">隫<span class="small">はか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27803">𡌶<span class="small">はが</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11497">擌<span class="small">はが</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2835">捌<span class="small">は（かす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2086">剥<span class="small">は（がす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="6467">剝<span class="small">は（がす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="284">化<span class="small">ば（かす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18681">㐶<span class="small">ば（かす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2062">捗<span class="small">はかど（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3141">儚<span class="small">はかな（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18296">顭<span class="small">はかな（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3141">儚<span class="small">はかな（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18296">顭<span class="small">はかな（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="871">鋼<span class="small">はがね</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2382">袴<span class="small">はかま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5178">阡<span class="small">はかみち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2038">羨<span class="small">はかみち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="117">計<span class="small">はか（らう）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1474">措<span class="small">はか（らう）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2568">秤<span class="small">はかり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4698">銓<span class="small">はかり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1688">衡<span class="small">はかり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="677">許<span class="small">ばか（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="821">略<span class="small">はかりごと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6260">畧<span class="small">はかりごと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8811">萗<span class="small">はかりごと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="881">策<span class="small">はかりごと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3704">揆<span class="small">はかりごと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18953">㖼<span class="small">はかりごと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2948">猷<span class="small">はかりごと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4538">筴<span class="small">はかりごと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8924">筹<span class="small">はかりごと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1563">謀<span class="small">はかりごと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5000">謨<span class="small">はかりごと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17696">謩<span class="small">はかりごと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4603">籌<span class="small">はかりごと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3070">仞<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3071">仭<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3538">忖<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12202">权<span class="small">はか（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="166">図<span class="small">はか（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="091">画<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14924">拟<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24970">图<span class="small">はか（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="117">計<span class="small">はか（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="376">度<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3252">咨<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4552">癸<span class="small">はか（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="629">料<span class="small">はか（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1142">称<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21473">䉼<span class="small">はか（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="334">商<span class="small">はか（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="821">略<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6260">畧<span class="small">はか（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="626">量<span class="small">はか（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="764">測<span class="small">はか（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="795">評<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3704">揆<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3705">揣<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4684">鈞<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6261">畫<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18953">㖼<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2948">猷<span class="small">はか（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4959">詢<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8924">筹<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10300">畵<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4698">銓<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5884">圖<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6127">稱<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18028">銁<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18038">銞<span class="small">はか（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="453">課<span class="small">はか（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="861">権<span class="small">はか（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2500">諏<span class="small">はか（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1425">諮<span class="small">はか（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1563">謀<span class="small">はか（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1688">衡<span class="small">はか（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1651">擬<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5000">謨<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17696">謩<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10892">穪<span class="small">はか（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="476">議<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4603">籌<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6005">權<span class="small">はか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2086">剥<span class="small">は（がれる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="6467">剝<span class="small">は（がれる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6661">齓<span class="small">はがわり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3764">齔<span class="small">はがわり</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">はき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="26305">胫<span class="small">はぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4228">脛<span class="small">はぎ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2516">萩<span class="small">はぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4824">骭<span class="small">はぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23378">䯎<span class="small">はぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9745">蘒<span class="small">はぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9744">蘒<span class="small">はぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6168">屐<span class="small">はきもの</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">はく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="068">白<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12378">仢<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13634">圤<span class="small">ハク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="070">百<span class="small">ハク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1897">朴<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20691">㺪<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23988">彴<span class="small">ハク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1859">伯<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17128">肑<span class="small">ハク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1227">泊<span class="small">ハク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1228">拍<span class="small">ハク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1229">迫<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="2826">狛<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3087">佰<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3488">帛<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3550">怕<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5991">岶<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8578">廹<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14618">帕<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16011">炇<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17212">苩<span class="small">ハク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2825">柏<span class="small">ハク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4613">珀<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5184">陌<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10263">瓝<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14929">挀<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15055">敀<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15539">洦<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17136">胉<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="2086">剥<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5743">亳<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6066">栢<span class="small">ハク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="6467">剝<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7526">釙<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8360">趵<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16066">烞<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16726">砶<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16849">窇<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21192">䄸<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24261">㿟<span class="small">ハク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1860">舶<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="2828">粕<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10265">瓟<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15652">淿<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20771">㼣<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21700">䎅<span class="small">ハク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="591">博<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13930">奤<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15688">湐<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16991">絔<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20368">㴖<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20754">㼎<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21705">䎊<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22506">䞟<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23011">䨌<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23139">䪨<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3715">搏<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3979">雹<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5877">愽<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7595">鉑<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9597">蒪<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16425">猼<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18462">鳪<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18974">㗘<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24351">䬪<span class="small">ハク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2827">箔<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="2829">駁<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4244">膊<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8396">踄<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16170">煿<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16291">牔<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17191">艊<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19995">㬍<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22837">䤨<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="27443">䨔<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3956">魄<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6792">骲<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10472">皛<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13854">墣<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21122">䃗<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21376">䈏<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22239">䙏<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23311">䮀<span class="small">ハク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1230">薄<span class="small">ハク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1529">縛<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4186">樸<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4494">駮<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4636">璞<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5425">薜<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6917">鮊<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14281">孹<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20425">㵡<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20614">㹒<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21688">䍸<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22153">䗚<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23548">䳆<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3729">擘<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4193">檗<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12259">檏<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12282">檘<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16690">瞨<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17687">謈<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17741">豰<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19093">㙸<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20431">㵨<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23032">䨣<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23387">䯙<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7766">鎛<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8909">簙<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11207">懪<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11511">㩧<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13569">嚗<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15927">濼<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20146">㯷<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22170">䗱<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24231">㬧<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="25905">礡<span class="small">ハク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1231">爆<span class="small">ハク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1552">簿<span class="small">ハク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1854">覇<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7498">餺<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13579">嚩<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16340">犦<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16975">糪<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17046">繴<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21621">䌟<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21861">䑈<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23342">䮡<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4194">蘗<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6806">髆<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10092">襮<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10626">䂍<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12315">欂<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18396">髉<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20945">㿺<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23040">䨰<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23129">䪙<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23428">䰊<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3050">霸<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10775">礴<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22887">䥤<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24344">䥬<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23115">䪇<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23691">䶈<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7857">鑮<span class="small">ハク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23289">䭦<span class="small">ハク</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1202">吐<span class="small">は（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25263">扫<span class="small">は（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13264">呕<span class="small">は（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="512">刷<span class="small">は（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1327">欧<span class="small">は（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3086">佩<span class="small">は（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3485">帚<span class="small">は（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24014">泻<span class="small">は（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2638">穿<span class="small">は（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3245">哇<span class="small">は（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1481">掃<span class="small">は（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3525">彗<span class="small">は（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5942">菷<span class="small">は（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13435">喯<span class="small">は（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3275">喀<span class="small">は（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21282">䆤<span class="small">は（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2307">嘘<span class="small">は（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3293">嘔<span class="small">は（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4543">箒<span class="small">は（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1261">噴<span class="small">は（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1922">履<span class="small">は（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6227">歐<span class="small">は（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6473">噓<span class="small">は（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8890">篲<span class="small">は（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17847">蹑<span class="small">は（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20451">㵼<span class="small">は（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4447">瀉<span class="small">は（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4300">躡<span class="small">は（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10628">矤<span class="small">は（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2598">矧<span class="small">は（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2086">剥<span class="small">は（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="6467">剝<span class="small">は（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="753">接<span class="small">は（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5057">褫<span class="small">は（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11372">擑<span class="small">は（ぐ）</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="212">麦<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5860">皃<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8283">㒵<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12827">劰<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21933">䒬<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5105">狢<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5184">陌<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6285">脉<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14621">帞<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20640">㹮<span class="small">バク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="617">脈<span class="small">バク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2832">莫<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5743">亳<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10552">眿<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16849">窇<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19971">㫧<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6037">麥<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9020">絈<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10031">袹<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10551">眽<span class="small">バク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="591">博<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8282">貃<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11812">衇<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16991">絔<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20754">㼎<span class="small">バク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="986">幕<span class="small">バク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1861">漠<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="2830">摸<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3434">寞<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5119">獏<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5474">貊<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5475">貉<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5877">愽<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8045">覛<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8278">貈<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8701">鄚<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13479">嗼<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13829">塻<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14865">慔<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23973">幙<span class="small">バク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1572">膜<span class="small">バク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2103">貌<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="2829">駁<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15113">暯<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16170">煿<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18030">銆<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20244">㱳<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20526">㷬<span class="small">バク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="811">暴<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10429">瘼<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16681">瞐<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16684">瞙<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21376">䈏<span class="small">バク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1529">縛<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4088">蟇<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4089">蟆<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4494">駮<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7397">䫉<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14281">孹<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17034">縸<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20425">㵡<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20448">㵹<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3729">擘<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5435">藐<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5477">貘<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17612">覭<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17687">謈<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17741">豰<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21416">䈿<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22166">䗫<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4448">瀑<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7794">鏌<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8013">霢<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8014">霡<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11717">㬥<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19732">㦝<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24153">邈<span class="small">バク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1231">爆<span class="small">バク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1552">簿<span class="small">バク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2831">曝<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23036">䨫<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4508">驀<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18403">鬕<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23353">䮬<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23576">䳮<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22887">䥤<span class="small">バク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23355">䮮<span class="small">バク</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18957">㗁<span class="small">はぐき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11860">腭<span class="small">はぐき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6665">齗<span class="small">はぐき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3768">齦<span class="small">はぐき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3775">齶<span class="small">はぐき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3420">孚<span class="small">はぐく（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="246">育<span class="small">はぐく（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2101">哺<span class="small">はぐく（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6232">毓<span class="small">はぐく（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5362">莠<span class="small">はぐさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3366">奕<span class="small">ばくち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1607">逸<span class="small">はぐ（れる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6416">逸<span class="small">はぐ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26279">逸<span class="small">はぐ（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">はけ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5995">岾<span class="small">はけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27802">𡋽<span class="small">はけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2804">禿<span class="small">はげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25926">秃<span class="small">はげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12335">厉<span class="small">はげ（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1767">迅<span class="small">はげ（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1313">烈<span class="small">はげ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24726">剧<span class="small">はげ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25628">烮<span class="small">はげ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12334">厲<span class="small">はげ（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="856">劇<span class="small">はげ（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="857">激<span class="small">はげ（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1595">励<span class="small">はげ（ます）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3191">勗<span class="small">はげ（ます）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6485">勖<span class="small">はげ（ます）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15133">朂<span class="small">はげ（ます）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="857">激<span class="small">はげ（ます）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5844">勵<span class="small">はげ（ます）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12335">厉<span class="small">はげ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1595">励<span class="small">はげ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12334">厲<span class="small">はげ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5844">勵<span class="small">はげ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2835">捌<span class="small">は（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2804">禿<span class="small">は（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25926">秃<span class="small">は（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2086">剥<span class="small">は（げる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="6467">剝<span class="small">は（げる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="284">化<span class="small">ば（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18681">㐶<span class="small">ば（ける）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">はこ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3203">匚<span class="small">はこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3204">匣<span class="small">はこ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2250">函<span class="small">はこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2251">凾<span class="small">はこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8849">匧<span class="small">はこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12732">圅<span class="small">はこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2474">笥<span class="small">はこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4529">筐<span class="small">はこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5685">椢<span class="small">はこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4530">筺<span class="small">はこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4531">筥<span class="small">はこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3206">匱<span class="small">はこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25952">箧<span class="small">はこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="389">箱<span class="small">はこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2716">箪<span class="small">はこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4551">篋<span class="small">はこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12197">槶<span class="small">はこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4197">櫃<span class="small">はこ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6452">簞<span class="small">はこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11497">擌<span class="small">はご</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="250">運<span class="small">はこ（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1237">搬<span class="small">はこ（ぶ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2661">漕<span class="small">はこ（ぶ）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">はさ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1373">峡<span class="small">はざま</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6081">峽<span class="small">はざま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="100">間<span class="small">はざま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2833">硲<span class="small">はざま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7868">閒<span class="small">はざま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1656">挟<span class="small">はさ（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6186">挾<span class="small">はさ（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4701">鋏<span class="small">はさみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4096">螯<span class="small">はさみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3659">扠<span class="small">はさみと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13914">夹<span class="small">はさ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3365">夾<span class="small">はさ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3670">拑<span class="small">はさ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1656">挟<span class="small">はさ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1800">挿<span class="small">はさ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6186">挾<span class="small">はさ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3180">剪<span class="small">はさ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6189">插<span class="small">はさ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11349">揷<span class="small">はさ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4538">筴<span class="small">はさ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4688">鉗<span class="small">はさ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4542">箝<span class="small">はさ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4701">鋏<span class="small">はさ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5609">翦<span class="small">はさ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21395">䈤<span class="small">はさ（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">はし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="25389">桥<span class="small">はし</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2982">梁<span class="small">はし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4538">筴<span class="small">はし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5579">觜<span class="small">はし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1181">端<span class="small">はし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12234">槗<span class="small">はし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2087">箸<span class="small">はし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12225">樑<span class="small">はし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27867">𣘺<span class="small">はし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="274">橋<span class="small">はし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3300">嘴<span class="small">はし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13687">坸<span class="small">はじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2336">垢<span class="small">はじ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1185">恥<span class="small">はじ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1451">辱<span class="small">はじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6280">耻<span class="small">はじ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2024">羞<span class="small">はじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8126">訽<span class="small">はじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3601">愧<span class="small">はじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4961">詬<span class="small">はじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11151">媿<span class="small">はじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3610">慚<span class="small">はじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3609">慙<span class="small">はじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2597">疹<span class="small">はしか</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="733">序<span class="small">はしがき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19034">㘧<span class="small">はしがき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22946">䦽<span class="small">はしがき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4138">椒<span class="small">はじかみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5424">薑<span class="small">はじかみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22071">䕬<span class="small">はじかみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25223">弹<span class="small">はじ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1184">弾<span class="small">はじ（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5923">彈<span class="small">はじ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4887">艀<span class="small">はしけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4902">炸<span class="small">はじ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25223">弹<span class="small">はじ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1184">弾<span class="small">はじ（ける）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5923">彈<span class="small">はじ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25448">阶<span class="small">はしご</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2690">梯<span class="small">はしご</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="260">階<span class="small">はしご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7947">堦<span class="small">はしご</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1181">端<span class="small">はした</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3832">鷂<span class="small">はしたか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3395">婢<span class="small">はしため</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2595">榛<span class="small">はしばみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12190">樼<span class="small">はしばみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13014">乨<span class="small">はじ（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="301">始<span class="small">はじ（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13112">兘<span class="small">はじ（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="001">一<span class="small">はじ（め）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="120">元<span class="small">はじ（め）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3054">弌<span class="small">はじ（め）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="533">初<span class="small">はじ（め）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2875">甫<span class="small">はじ（め）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2920">孟<span class="small">はじ（め）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11790">肧<span class="small">はじ（め）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="155">首<span class="small">はじ（め）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="757">祖<span class="small">はじ（め）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4220">胚<span class="small">はじ（め）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6398">祖<span class="small">はじ（め）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="397">鼻<span class="small">はじ（め）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1181">端<span class="small">はじ（め）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2738">肇<span class="small">はじ（め）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9293">肈<span class="small">はじ（め）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22879">䥚<span class="small">はじ（め）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="533">初<span class="small">はじ（めて）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22879">䥚<span class="small">はじ（めて）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12793">刅<span class="small">はじ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12796">创<span class="small">はじ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13014">乨<span class="small">はじ（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="301">始<span class="small">はじ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6484">刱<span class="small">はじ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12795">戗<span class="small">はじ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3174">剏<span class="small">はじ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13112">兘<span class="small">はじ（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="762">造<span class="small">はじ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3108">俶<span class="small">はじ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12737">剙<span class="small">はじ（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="932">創<span class="small">はじ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8589">艁<span class="small">はじ（める）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2738">肇<span class="small">はじ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9293">肈<span class="small">はじ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12794">戧<span class="small">はじ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21900">䒃<span class="small">はじ（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1168">燥<span class="small">はしゃ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="365">柱<span class="small">はしら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4143">楹<span class="small">はしら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1185">恥<span class="small">は（じらう）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6280">耻<span class="small">は（じらう）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5681">赱<span class="small">はし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19342">㞫<span class="small">はし（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="179">走<span class="small">はし（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1899">奔<span class="small">はし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5516">迸<span class="small">はし（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1607">逸<span class="small">はし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26838">跄<span class="small">はし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4834">犇<span class="small">はし（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6416">逸<span class="small">はし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6513">逬<span class="small">はし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12351">猋<span class="small">はし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17792">趋<span class="small">はし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26279">逸<span class="small">はし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2501">趨<span class="small">はし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4278">蹌<span class="small">はし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4499">駸<span class="small">はし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4511">驟<span class="small">はし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4513">驤<span class="small">はし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3541">忸<span class="small">は（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3547">怩<span class="small">は（じる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1185">恥<span class="small">は（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6280">耻<span class="small">は（じる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2024">羞<span class="small">は（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4553">赧<span class="small">は（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3601">愧<span class="small">は（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11151">媿<span class="small">は（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26320">腼<span class="small">は（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3610">慚<span class="small">は（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3609">慙<span class="small">は（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25839">瞒<span class="small">は（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4359">靦<span class="small">は（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5169">瞞<span class="small">は（じる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">はす</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2876">芙<span class="small">はす</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2212">茄<span class="small">はす</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="257">荷<span class="small">はす</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1121">斜<span class="small">はす</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3010">蓮<span class="small">はす</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18735">㒖<span class="small">はす</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27690">蓮<span class="small">はす</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5436">藕<span class="small">はす</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7022">鰣<span class="small">はす</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2247">筈<span class="small">はず</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1185">恥<span class="small">は（ずかしい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6280">耻<span class="small">は（ずかしい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1451">辱<span class="small">はずかし（め）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2024">羞<span class="small">はずかし（め）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3543">忝<span class="small">はずかし（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8114">呧<span class="small">はずかし（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10956">㤁<span class="small">はずかし（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1451">辱<span class="small">はずかし（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2024">羞<span class="small">はずかし（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4956">詆<span class="small">はずかし（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8126">訽<span class="small">はずかし（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4961">詬<span class="small">はずかし（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3651">戮<span class="small">はずかし（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="096">外<span class="small">はず（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="474">機<span class="small">はずみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25223">弹<span class="small">はず（み）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1184">弾<span class="small">はず（み）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5923">彈<span class="small">はず（み）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25223">弹<span class="small">はず（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1184">弾<span class="small">はず（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5923">彈<span class="small">はず（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="096">外<span class="small">はず（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">はせ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5920">枦<span class="small">はぜ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25380">栌<span class="small">はぜ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3863">鯊<span class="small">はぜ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6954">鯋<span class="small">はぜ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4207">櫨<span class="small">はぜ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5920">枦<span class="small">はぜのき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25380">栌<span class="small">はぜのき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4207">櫨<span class="small">はぜのき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2482">馳<span class="small">は（せる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4490">駛<span class="small">は（せる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4498">騁<span class="small">は（せる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27886">𩧢<span class="small">は（せる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16170">煿<span class="small">は（ぜる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1231">爆<span class="small">は（ぜる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">はた</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5585">罕<span class="small">はた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9171">䍐<span class="small">はた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="390">畑<span class="small">はた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11602">斾<span class="small">はた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="911">将<span class="small">はた</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2599">秦<span class="small">はた</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2834">畠<span class="small">はた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3778">旃<span class="small">はた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3779">旆<span class="small">はた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3781">旄<span class="small">はた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19948">㫅<span class="small">はた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="559">側<span class="small">はた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3782">旌<span class="small">はた</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6164">將<span class="small">はた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11606">旍<span class="small">はた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19952">㫋<span class="small">はた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1273">傍<span class="small">はた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="471">旗<span class="small">はた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1181">端<span class="small">はた</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2841">幡<span class="small">はた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3497">幢<span class="small">はた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="474">機<span class="small">はた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5973">旙<span class="small">はた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3784">旛<span class="small">はた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8910">簱<span class="small">はた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11601">旜<span class="small">はた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5853">籏<span class="small">はた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2283">鰭<span class="small">はた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1862">肌<span class="small">はだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11899">肤<span class="small">はだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26304">胪<span class="small">はだ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1252">膚<span class="small">はだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4317">臚<span class="small">はだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11612">旈<span class="small">はたあし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3783">旒<span class="small">はたあし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1862">肌<span class="small">はだえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11899">肤<span class="small">はだえ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1252">膚<span class="small">はだえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4093">螽<span class="small">はたおりむし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10040">裎<span class="small">はだか</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1584">裸<span class="small">はだか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10049">躶<span class="small">はだか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3781">旄<span class="small">はたかざ（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1859">伯<span class="small">はたがしら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1854">覇<span class="small">はたがしら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3050">霸<span class="small">はたがしら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12399">开<span class="small">はだ（かる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="258">開<span class="small">はだ（かる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5023">衫<span class="small">はだぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26559">衬<span class="small">はだぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5031">袢<span class="small">はだぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10033">帬<span class="small">はだぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5042">裙<span class="small">はだぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24552">亵<span class="small">はだぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5045">褂<span class="small">はだぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10032">裠<span class="small">はだぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5062">褻<span class="small">はだぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5068">襦<span class="small">はだぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5071">襯<span class="small">はだぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2394">叩<span class="small">はた（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="390">畑<span class="small">はたけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5214">疥<span class="small">はたけ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2834">畠<span class="small">はたけ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2900">圃<span class="small">はたけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10349">㿍<span class="small">はたけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12399">开<span class="small">はだ（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="258">開<span class="small">はだ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4005">杠<span class="small">はたざお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4188">橦<span class="small">はたざお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4263">跣<span class="small">はだし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4267">跿<span class="small">はだし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4779">綮<span class="small">はたじるし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="455">果<span class="small">は（たす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4678">礑<span class="small">はた（と）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5032">袒<span class="small">はだぬ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5046">裼<span class="small">はだぬ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3890">鰰<span class="small">はたはた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7072">鱩<span class="small">はたはた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4821">纛<span class="small">はたぼこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="235">用<span class="small">はたら（き）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="785">能<span class="small">はたら（き）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="638">労<span class="small">はたら（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13158">劳<span class="small">はたら（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10636">矻<span class="small">はたら（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3681">拮<span class="small">はたら（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5667">勞<span class="small">はたら（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="581">働<span class="small">はたら（く）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">はち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="069">八<span class="small">ハチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12366">仈<span class="small">ハチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15422">汃<span class="small">ハチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19619">㤄<span class="small">ハチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13689">坺<span class="small">ハチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20222">㱚<span class="small">ハチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20700">㺴<span class="small">ハチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24337">䢌<span class="small">ハチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25278">拨<span class="small">ハチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15173">柭<span class="small">ハチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16031">炥<span class="small">ハチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2835">捌<span class="small">ハチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7596">盋<span class="small">ハチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13340">哵<span class="small">ハチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21674">䍨<span class="small">ハチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7597">缽<span class="small">ハチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22780">䣪<span class="small">ハチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19313">㞈<span class="small">ハチ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1863">鉢<span class="small">ハチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18808">㔇<span class="small">ハチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3721">撥<span class="small">ハチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16975">糪<span class="small">ハチ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5563">盂<span class="small">はち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1276">盆<span class="small">はち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10282">瓯<span class="small">はち</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3025">椀<span class="small">はち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2102">蜂<span class="small">はち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4875">甌<span class="small">はち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9844">䗬<span class="small">はち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9843">蠭<span class="small">はち</span></a></li>
                         <li class="others_kanji onyomi"><a href="13970">妭<span class="small">バチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18897">㕹<span class="small">バチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25278">拨<span class="small">バチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16032">炦<span class="small">バチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22562">䟛<span class="small">バチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17647">詙<span class="small">バチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22783">䣮<span class="small">バチ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1234">罰<span class="small">バチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3721">撥<span class="small">バチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6276">罸<span class="small">バチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23375">䯋<span class="small">バチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23545">䳁<span class="small">バチ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4028">枹<span class="small">ばち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3700">捩<span class="small">ばち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4122">桴<span class="small">ばち</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3010">蓮<span class="small">はちす</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27690">蓮<span class="small">はちす</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">はつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="12366">仈<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3220">叭<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5748">癶<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11269">扒<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15422">汃<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23896">叐<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24067">犮<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24773">发<span class="small">ハツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1530">伐<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10110">玐<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11938">朳<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11293">㧊<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12712">冹<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19619">㤄<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9415">茇<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13689">坺<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13970">妭<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14619">帗<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18897">㕹<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20222">㱚<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20700">㺴<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24011">沷<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24337">䢌<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25278">拨<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25516">泼<span class="small">ハツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="391">発<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9454">茷<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10460">癹<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11791">胈<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13714">垡<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15173">柭<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16031">炥<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16032">炦<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17810">趴<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19048">㘺<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21310">䇅<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2835">捌<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5898">秡<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5902">釟<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7596">盋<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8814">栰<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10023">袚<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10657">砵<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13340">哵<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21674">䍨<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21868">䑔<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26562">袯<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7597">缽<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9519">菝<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12073">㭭<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22562">䟛<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22780">䣪<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2836">溌<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2837">筏<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4261">跋<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5749">發<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8378">䟦<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8492">軷<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12393">傠<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17647">詙<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19313">㞈<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22783">䣮<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26880">㛲<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27094">酦<span class="small">ハツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1863">鉢<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7598">鈸<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22794">䣹<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22832">䤢<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25224">彂<span class="small">ハツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1232">髪<span class="small">ハツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1234">罰<span class="small">ハツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1864">閥<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7432">颰<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7515">馛<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10585">瞂<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18808">㔇<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3721">撥<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3950">魃<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6276">罸<span class="small">ハツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6356">髮<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6481">潑<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13853">墢<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19000">㗶<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23313">䮂<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23375">䯋<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2838">醗<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6918">鮁<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15276">橃<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23545">䳁<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23551">䳊<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10077">襏<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17364">藅<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6627">鼥<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6482">醱<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8442">蹳<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16975">糪<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7818">鏺<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6773">驋<span class="small">ハツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7059">鱍<span class="small">ハツ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="533">初<span class="small">はつ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22879">䥚<span class="small">はつ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="610">法<span class="small">ハッ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13062">佱<span class="small">ハッ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20323">㳒<span class="small">ハッ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15975">灋<span class="small">ハッ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="614">末<span class="small">バツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1530">伐<span class="small">バツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1233">抜<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13055">佅<span class="small">バツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1903">抹<span class="small">バツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5326">茉<span class="small">バツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5926">拔<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11294">㧞<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13689">坺<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13981">妺<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14618">帕<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23969">帓<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11659">昩<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15161">枺<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18164">閁<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20482">㶬<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20971">䀛<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21774">䏞<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5030">袙<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5552">秣<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8814">栰<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10024">袜<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10465">皌<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10538">眜<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16720">砞<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20976">䀣<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9519">菝<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16958">粖<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21676">䍪<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2837">筏<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4261">跋<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8378">䟦<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12393">傠<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10584">睰<span class="small">バツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1234">罰<span class="small">バツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1864">閥<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5085">靺<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10841">䬴<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19844">㨸<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3950">魃<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6276">罸<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7343">韎<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18420">魩<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18740">㒝<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23264">䬿<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23466">䱅<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23622">䴲<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15939">瀎<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19869">㩢<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24373">幭<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5074">襪<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16780">礣<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18599">齂<span class="small">バツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23399">䯦<span class="small">バツ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7262">麨<span class="small">はったい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4678">礑<span class="small">はった（と）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1417">削<span class="small">はつ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">はて</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3337">垓<span class="small">はて</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1624">涯<span class="small">はて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24073">畡<span class="small">はて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15786">漄<span class="small">はて</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="455">果<span class="small">は（て）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="455">果<span class="small">は（てる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">はと</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2306">鳩<span class="small">はと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7113">䧻<span class="small">はと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3808">鴿<span class="small">はと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2872">埠<span class="small">はとば</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">はな</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="9462">华<span class="small">はな</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="007">花<span class="small">はな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9381">芲<span class="small">はな</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="448">英<span class="small">はな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4346">洟<span class="small">はな</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1334">華<span class="small">はな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9402">偀<span class="small">はな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5383">葩<span class="small">はな</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="397">鼻<span class="small">はな</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1181">端<span class="small">はな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9461">蕐<span class="small">はな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27829">𡽶<span class="small">はな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3310">嚊<span class="small">はないき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3242">咄<span class="small">はなし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="239">話<span class="small">はなし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8139">䛡<span class="small">はなし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2839">噺<span class="small">はなし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13561">嚉<span class="small">はなし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5003">譚<span class="small">はなし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27517">䜖<span class="small">はなし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5354">莟<span class="small">はなしべ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4333">泗<span class="small">はなじる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4346">洟<span class="small">はなじる</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="413">放<span class="small">はな（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25936">窜<span class="small">はな（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="239">話<span class="small">はな（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8139">䛡<span class="small">はな（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22532">䞼<span class="small">はな（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1302">離<span class="small">はな（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5623">竄<span class="small">はな（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26366">荨<span class="small">はなすげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5415">蕁<span class="small">はなすげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4799">縹<span class="small">はなだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4799">縹<span class="small">はなだいろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6305">衂<span class="small">はなぢ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5644">衄<span class="small">はなぢ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9977">䘐<span class="small">はなぢ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24773">发<span class="small">はな（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="413">放<span class="small">はな（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="391">発<span class="small">はな（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5749">發<span class="small">はな（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25224">彂<span class="small">はな（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="901">縦<span class="small">はな（つ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5914">縱<span class="small">はな（つ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3484">已<span class="small">はなは（だ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="180">太<span class="small">はなは（だ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1398">孔<span class="small">はなは（だ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="279">苦<span class="small">はなは（だ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1768">甚<span class="small">はなは（だ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3531">很<span class="small">はなは（だ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="754">絶<span class="small">はなは（だ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9033">絕<span class="small">はなは（だ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1768">甚<span class="small">はなは（だしい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1693">酷<span class="small">はなは（だしい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="805">弁<span class="small">はなびら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5383">葩<span class="small">はなびら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4975">瓣<span class="small">はなびら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18983">㗣<span class="small">はなひ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3313">嚏<span class="small">はなひ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3312">嚔<span class="small">はなひ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="448">英<span class="small">はなぶさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9402">偀<span class="small">はなぶさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5382">萼<span class="small">はなぶさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6301">蕚<span class="small">はなぶさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25413">䝲<span class="small">はなむけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7481">䬻<span class="small">はなむけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8328">賮<span class="small">はなむけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5286">餞<span class="small">はなむけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5496">贐<span class="small">はなむけ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="413">放<span class="small">はな（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2840">叛<span class="small">はな（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1382">携<span class="small">はな（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11420">擕<span class="small">はな（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19862">㩗<span class="small">はな（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1302">離<span class="small">はな（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19873">㩦<span class="small">はな（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5875">攜<span class="small">はな（れる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2238">塙<span class="small">はなわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13858">墧<span class="small">はなわ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">はに</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2590">埴<span class="small">はに</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts21">
                    <h3 class="ttl_while">はね</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="082">羽<span class="small">はね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9221">羽<span class="small">はね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5604">翅<span class="small">はね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9225">翄<span class="small">はね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17089">翤<span class="small">はね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5389">葆<span class="small">はねかざ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6496">槔<span class="small">はねつるべ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4171">槹<span class="small">はねつるべ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12204">橰<span class="small">はねつるべ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3170">刎<span class="small">は（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25278">拨<span class="small">は（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25516">泼<span class="small">は（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2836">溌<span class="small">は（ねる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1190">跳<span class="small">は（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3721">撥<span class="small">は（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6481">潑<span class="small">は（ねる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts22">
                    <h3 class="ttl_while">はは</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="221">母<span class="small">はは</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3402">媽<span class="small">はは</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1980">巾<span class="small">はば</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22199">䘜<span class="small">はば</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6188">掵<span class="small">はば</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1259">幅<span class="small">はば</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12111">椧<span class="small">はば</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2903">姥<span class="small">ばば</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1526">婆<span class="small">ばば</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19213">㜑<span class="small">ばば</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11181">惮<span class="small">はばか（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3620">憚<span class="small">はばか（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11181">惮<span class="small">はばか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3620">憚<span class="small">はばか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7559">鈨<span class="small">はばき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7767">鎺<span class="small">はばき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4020">柞<span class="small">ははそ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3715">搏<span class="small">はばた（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1475">阻<span class="small">はば（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4335">沮<span class="small">はば（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts23">
                    <h3 class="ttl_while">はひ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5581">衍<span class="small">はびこ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5351">莚<span class="small">はびこ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3654">扈<span class="small">はびこ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20350">㳽<span class="small">はびこ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17285">葕<span class="small">はびこ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24246">㴞<span class="small">はびこ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4410">滔<span class="small">はびこ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2846">蔓<span class="small">はびこ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4456">瀰<span class="small">はびこ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts24">
                    <h3 class="ttl_while">はふ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="541">省<span class="small">はぶ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="821">略<span class="small">はぶ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6260">畧<span class="small">はぶ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21025">䁞<span class="small">はぶ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1605">亜<span class="small">はふり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5705">亞<span class="small">はふり</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts25">
                    <h3 class="ttl_while">はへ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1426">侍<span class="small">はべ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts26">
                    <h3 class="ttl_while">はま</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1249">浜<span class="small">はま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25578">滨<span class="small">はま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5753">濱<span class="small">はま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25602">濵<span class="small">はま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4040">蚌<span class="small">はまぐり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22118">䖫<span class="small">はまぐり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2413">蛤<span class="small">はまぐり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9790">蜯<span class="small">はまぐり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5355">莎<span class="small">はますげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5426">薛<span class="small">はますげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5433">薹<span class="small">はますげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6904">魬<span class="small">はまち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24483">荠<span class="small">はまびし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9694">萕<span class="small">はまびし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5434">薺<span class="small">はまびし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2068">填<span class="small">は（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="6469">塡<span class="small">は（まる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts27">
                    <h3 class="ttl_while">はむ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="162">食<span class="small">は（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts28">
                    <h3 class="ttl_while">はめ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3465">嵌<span class="small">はめこ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6104">篏<span class="small">はめこ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3465">嵌<span class="small">は（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2068">填<span class="small">は（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="6469">塡<span class="small">は（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6104">篏<span class="small">は（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts29">
                    <h3 class="ttl_while">はも</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3896">鱧<span class="small">はも</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts30">
                    <h3 class="ttl_while">はや</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3860">鮠<span class="small">はや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6999">鰙<span class="small">はや</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="052">早<span class="small">はや（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1767">迅<span class="small">はや（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2527">夙<span class="small">はや（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="351">速<span class="small">はや（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1430">疾<span class="small">はや（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2672">蚤<span class="small">はや（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22112">䖣<span class="small">はや（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2559">捷<span class="small">はや（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3119">偈<span class="small">はや（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5114">猝<span class="small">はや（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25323">掶<span class="small">はや（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4395">湍<span class="small">はや（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17792">趋<span class="small">はや（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24220">㨗<span class="small">はや（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1016">鋭<span class="small">はや（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4490">駛<span class="small">はや（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7641">銳<span class="small">はや（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3807">鴪<span class="small">はや（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4579">霍<span class="small">はや（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6493">鴥<span class="small">はや（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2501">趨<span class="small">はや（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22161">䗢<span class="small">はや（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25962">簮<span class="small">はや（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4368">飄<span class="small">はや（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4598">簪<span class="small">はや（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6349">飃<span class="small">はや（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4511">驟<span class="small">はや（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4513">驤<span class="small">はや（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="079">林<span class="small">はやし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3320">囃<span class="small">はやし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="043">生<span class="small">は（やす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="449">栄<span class="small">は（やす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="828">映<span class="small">は（やす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11980">荣<span class="small">は（やす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6210">暎<span class="small">は（やす）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5731">榮<span class="small">は（やす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3320">囃<span class="small">はや（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4395">湍<span class="small">はやせ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25579">滩<span class="small">はやせ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2715">灘<span class="small">はやせ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4364">颯<span class="small">はやて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7430">䬃<span class="small">はやて</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2533">隼<span class="small">はやぶさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3828">鶻<span class="small">はやぶさ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="052">早<span class="small">はや（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="351">速<span class="small">はや（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="052">早<span class="small">はや（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="351">速<span class="small">はや（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1607">逸<span class="small">はや（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6416">逸<span class="small">はや（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26279">逸<span class="small">はや（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts31">
                    <h3 class="ttl_while">はら</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4213">肚<span class="small">はら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1555">胞<span class="small">はら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="118">原<span class="small">はら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13196">厡<span class="small">はら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="973">腹<span class="small">はら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="516">散<span class="small">ばら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19915">㪚<span class="small">ばら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26504">蔷<span class="small">ばら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5421">薔<span class="small">ばら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5637">祓<span class="small">はら（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5643">禳<span class="small">はら（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1260">払<span class="small">はら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25263">扫<span class="small">はら（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6184">拂<span class="small">はら（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="908">除<span class="small">はら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5637">祓<span class="small">はら（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1481">掃<span class="small">はら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25982">粪<span class="small">はら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10005">㐮<span class="small">はら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4543">箒<span class="small">はら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5640">禊<span class="small">はら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2799">蕩<span class="small">はら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2890">糞<span class="small">はら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5063">襄<span class="small">はら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5569">盪<span class="small">はら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3739">擽<span class="small">はら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11514">攊<span class="small">はら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3741">攘<span class="small">はら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5570">蘯<span class="small">はら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5643">禳<span class="small">はら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5086">鞅<span class="small">はらおび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7008">鰚<span class="small">はらか</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3872">鯡<span class="small">はらご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26300">肿<span class="small">は（らす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="172">晴<span class="small">は（らす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26248">晴<span class="small">は（らす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2021">腫<span class="small">は（らす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11697">暒<span class="small">は（らす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4053">蛔<span class="small">はらのむし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26545">蜖<span class="small">はらのむし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3199">匍<span class="small">はらば（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3200">匐<span class="small">はらば（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3419">孕<span class="small">はら（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19317">㞌<span class="small">はら（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1851">妊<span class="small">はら（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11785">孡<span class="small">はら（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11790">肧<span class="small">はら（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13620">囼<span class="small">はら（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19145">㚺<span class="small">はら（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1487">胎<span class="small">はら（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3382">姙<span class="small">はら（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4220">胚<span class="small">はら（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1761">娠<span class="small">はら（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19171">㛛<span class="small">はら（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6940">鮞<span class="small">はららご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3872">鯡<span class="small">はららご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26310">脏<span class="small">はらわた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4234">腑<span class="small">はらわた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="571">腸<span class="small">はらわた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6289">膓<span class="small">はらわた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="935">臓<span class="small">はらわた</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6292">臟<span class="small">はらわた</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts32">
                    <h3 class="ttl_while">はり</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="914">針<span class="small">はり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="367">帳<span class="small">はり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2982">梁<span class="small">はり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2341">鈎<span class="small">はり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2340">鉤<span class="small">はり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2595">榛<span class="small">はり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4582">箴<span class="small">はり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12225">樑<span class="small">はり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12190">樼<span class="small">はり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4712">鍼<span class="small">はり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1096">抗<span class="small">はりあ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19044">㘶<span class="small">はりつけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4031">桀<span class="small">はりつけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5317">辜<span class="small">はりつけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4671">磔<span class="small">はりつけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25498">汇<span class="small">はりねずみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16416">猬<span class="small">はりねずみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1945">彙<span class="small">はりねずみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24374">彚<span class="small">はりねずみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4084">蝟<span class="small">はりねずみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25944">笺<span class="small">はりふだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8838">䇳<span class="small">はりふだ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2041">箋<span class="small">はりふだ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts33">
                    <h3 class="ttl_while">はる</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="11649">旾<span class="small">はる</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="158">春<span class="small">はる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11650">萅<span class="small">はる</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="773">張<span class="small">は（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2060">貼<span class="small">は（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1896">撲<span class="small">は（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15033">擈<span class="small">は（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26932">辽<span class="small">はる（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3914">杳<span class="small">はる（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26944">㢠<span class="small">はる（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5148">眇<span class="small">はる（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5350">茫<span class="small">はる（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5501">迢<span class="small">はる（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5502">迥<span class="small">はる（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8571">逈<span class="small">はる（か）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1914">悠<span class="small">はる（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5513">逖<span class="small">はる（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8572">䢛<span class="small">はる（か）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2960">遥<span class="small">はる（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4396">渺<span class="small">はる（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8590">逷<span class="small">はる（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5518">遐<span class="small">はる（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3359">夐<span class="small">はる（か）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5778">遙<span class="small">はる（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2899">緬<span class="small">はる（か）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2989">遼<span class="small">はる（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15068">敻<span class="small">はる（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5435">藐<span class="small">はる（か）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts34">
                    <h3 class="ttl_while">はれ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="26300">肿<span class="small">はれもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5219">疽<span class="small">はれもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25812">痈<span class="small">はれもの</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2021">腫<span class="small">はれもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10432">瘘<span class="small">はれもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5241">瘤<span class="small">はれもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5247">瘻<span class="small">はれもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20906">㿈<span class="small">はれもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10418">癅<span class="small">はれもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10457">癕<span class="small">はれもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5259">癰<span class="small">はれもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4212">肛<span class="small">は（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4216">肬<span class="small">は（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26300">肿<span class="small">は（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5213">疣<span class="small">は（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="172">晴<span class="small">は（れる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2739">脹<span class="small">は（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26248">晴<span class="small">は（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2021">腫<span class="small">は（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11697">暒<span class="small">は（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25563">霁<span class="small">は（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3996">霽<span class="small">は（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts35">
                    <h3 class="ttl_while">はん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="1275">凡<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12723">凢<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24711">凣<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="392">反<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24684">兯<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="213">半<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="787">犯<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2088">氾<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18680">㐴<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1531">帆<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2089">汎<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6689">乑<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18882">㕨<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24211">㠶<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25232">忛<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="394">坂<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="411">返<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="789">判<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1532">伴<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2090">阪<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2842">扮<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4330">泛<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6071">釆<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11295">扳<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12711">冸<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13987">姂<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14389">岅<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15146">杋<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15469">沜<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19620">㤆<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21929">䒦<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="393">板<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="788">版<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3674">拌<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5330">范<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11314">拚<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11543">攽<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11638">昄<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11773">肦<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11976">柉<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13670">坢<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13990">姅<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13995">姍<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14813">怑<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15136">朌<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15506">泮<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16015">炍<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19116">㚘<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25039">姗<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25847">矾<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2840">叛<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4223">胖<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10269">瓪<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10310">畈<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10521">盼<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12005">柈<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15510">洀<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16286">牉<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16646">眅<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19937">㪵<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20842">㽹<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26326">舤<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="968">班<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1239">般<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1534">畔<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5031">袢<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8482">軓<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9327">舨<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10839">秚<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16951">粄<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17187">舧<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17631">訉<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20950">䀀<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24243">㴀<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1236">販<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4522">笵<span class="small">ハン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4755">絆<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7540">釩<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8800">笲<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14077">婏<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16634">盕<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21474">䉽<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22332">䛀<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22574">䟪<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22653">䡊<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25804">畨<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25835">盘<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="214">番<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="592">飯<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2091">斑<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4686">鈑<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8493">軬<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12112">棥<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13930">奤<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17643">詊<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17818">跘<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19196">㛽<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19808">㨇<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22787">䣲<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24020">湴<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1237">搬<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1865">煩<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1866">頒<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7461">飰<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7599">鉡<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9109">䋣<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11576">斒<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14164">媻<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14642">幋<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17307">蒰<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21568">䋦<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23071">䩔<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23301">䭵<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24023">溿<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26281">飯<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4170">槃<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7296">靽<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7379">頖<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13101">僠<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13165">勫<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14988">搫<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15782">滼<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17458">蝂<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20088">㮥<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23156">䪻<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24353">䬳<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26002">緐<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1238">範<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1240">盤<span class="small">ハン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2841">幡<span class="small">ハン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2843">磐<span class="small">ハン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2844">蕃<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4175">樊<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4426">潘<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5242">瘢<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6904">魬<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7673">鋬<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10443">㿀<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13521">噃<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13857">墦<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14219">嬎<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14220">嬏<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14881">憣<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17734">豍<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18468">鳻<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19541">㢖<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20675">㺕<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21117">䃑<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21893">䑺<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1235">繁<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4306">膰<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4931">燔<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5973">旙<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8550">辦<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9110">縏<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9677">薠<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9900">螌<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10228">璠<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12256">橎<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17584">褩<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17839">踫<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21404">䈲<span class="small">ハン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6406">繁<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7892">闆<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10442">癍<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10751">磻<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17411">虨<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17592">襎<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17904">輽<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20802">㽃<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21300">䆺<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24282">䌓<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26858">蹒<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1533">藩<span class="small">ハン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1569">翻<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3784">旛<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4100">蟠<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4284">蹣<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4810">繙<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9217">羳<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11575">辬<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15936">瀊<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18094">鎜<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21426">䉊<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21434">䉒<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21517">䊩<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22811">䤍<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3740">攀<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7322">鞶<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7442">颿<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8443">蹯<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8533">轓<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18234">霦<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22075">䕰<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23238">䬚<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4681">礬<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5998">鐇<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9730">蘩<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11908">㸋<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15951">瀪<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15965">瀿<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19244">㜶<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23427">䰉<span class="small">ハン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3052">飜<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8930">籓<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9959">蠜<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22260">䙪<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23135">䪤<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20467">㶗<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23131">䪛<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23358">䮳<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3838">鷭<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7060">鱕<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19941">㪻<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10100">襻<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23205">䫶<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23436">䰔<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18157">鑻<span class="small">ハン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6691">乓<span class="small">パン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="226">万<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3211">卍<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13170">卐<span class="small">バン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="394">坂<span class="small">バン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="789">判<span class="small">バン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1532">伴<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21928">䒥<span class="small">バン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="393">板<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13670">坢<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13997">姏<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14813">怑<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19116">㚘<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25847">矾<span class="small">バン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2845">挽<span class="small">バン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2898">娩<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5031">袢<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5963">悗<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14051">娨<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17187">舧<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19256">㝃<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25101">屘<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4252">曼<span class="small">バン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4755">絆<span class="small">バン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6439">晚<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11830">脕<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12074">梚<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12688">㒼<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19177">㛧<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20558">㸘<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25835">盘<span class="small">バン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="214">番<span class="small">バン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="615">満<span class="small">バン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="969">晩<span class="small">バン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1535">蛮<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4686">鈑<span class="small">バン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5888">萬<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16661">睌<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17281">葂<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17437">蛨<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17818">跘<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18960">㗄<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19808">㨇<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21207">䅋<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24020">湴<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27847">𣆶<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11747">㬅<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12598">僈<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14164">媻<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17307">蒰<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23071">䩔<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27895">𤚥<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27896">𦎌<span class="small">バン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1277">漫<span class="small">バン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1278">慢<span class="small">バン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2846">蔓<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3495">幔<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4170">槃<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4468">輓<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6237">滿<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8702">鄤<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11168">慲<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13832">墁<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14179">嫚<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14988">搫<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15011">摱<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16436">獌<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17325">蔄<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19074">㙢<span class="small">バン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1240">盤<span class="small">バン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2812">播<span class="small">バン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2843">磐<span class="small">バン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2844">蕃<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6904">魬<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12219">槾<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12221">樠<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18044">鋄<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18048">鋔<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20896">㾺<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25839">瞒<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5169">瞞<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5973">旙<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7309">鞔<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7833">錽<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15893">澷<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19495">㡢<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20420">㵘<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20943">㿸<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21032">䁧<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21249">䅼<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21404">䈲<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26569">襔<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4800">縵<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17498">蟃<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21507">䊟<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21509">䊡<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26858">蹒<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3784">旛<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4100">蟠<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4284">蹣<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4996">謾<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7768">鎫<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18094">鎜<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22420">䜱<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22458">䝡<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22459">䝢<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22538">䟂<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22686">䡬<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22811">䤍<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4724">鏝<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7795">鏋<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8327">贎<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4681">礬<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5293">饅<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7419">顢<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21143">䃲<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23427">䰉<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23429">䰋<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4650">鬘<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5997">鑁<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18404">鬗<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2847">鰻<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23042">䨲<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3838">鷭<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10618">矕<span class="small">バン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5702">蠻<span class="small">バン</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2470">梓<span class="small">はんぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12059">榟<span class="small">はんぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4176">槧<span class="small">はんぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4149">楾<span class="small">はんぞう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27900">𤭯<span class="small">はんぞう</span></a></li>
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