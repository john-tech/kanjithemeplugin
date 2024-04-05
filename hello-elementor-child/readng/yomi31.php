<?php
/*
 * Template Name: Yomi31
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
               <h1 class="ttl_main">音訓検索「ま」</h1>
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
               <p>「ま」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>ま</option>
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
                         <li id="parts1_menu"><a href="#parts1">ま</a></li>
                         <li id="parts2_menu"><a href="#parts2">まい</a></li>
                         <li id="parts3_menu"><a href="#parts3">まう</a></li>
                         <li id="parts4_menu"><a href="#parts4">まえ</a></li>
                         <li id="parts5_menu"><a href="#parts5">まか</a></li>
                         <li id="parts6_menu"><a href="#parts6">まき</a></li>
                         <li id="parts7_menu"><a href="#parts7">まく</a></li>
                         <li id="parts8_menu"><a href="#parts8">まけ</a></li>
                         <li id="parts9_menu"><a href="#parts9">まこ</a></li>
                         <li id="parts10_menu"><a href="#parts10">まさ</a></li>
                         <li id="parts11_menu"><a href="#parts11">まし</a></li>
                         <li id="parts12_menu"><a href="#parts12">ます</a></li>
                         <li id="parts13_menu"><a href="#parts13">ませ</a></li>
                         <li id="parts14_menu"><a href="#parts14">また</a></li>
                         <li id="parts15_menu"><a href="#parts15">まち</a></li>
                         <li id="parts16_menu"><a href="#parts16">まつ</a></li>
                         <li id="parts17_menu"><a href="#parts17">まて</a></li>
                         <li id="parts18_menu"><a href="#parts18">まと</a></li>
                         <li id="parts19_menu"><a href="#parts19">まな</a></li>
                         <li id="parts20_menu"><a href="#parts20">まぬ</a></li>
                         <li id="parts21_menu"><a href="#parts21">まね</a></li>
                         <li id="parts22_menu"><a href="#parts22">まは</a></li>
                         <li id="parts23_menu"><a href="#parts23">まふ</a></li>
                         <li id="parts24_menu"><a href="#parts24">まほ</a></li>
                         <li id="parts25_menu"><a href="#parts25">まま</a></li>
                         <li id="parts26_menu"><a href="#parts26">まみ</a></li>
                         <li id="parts27_menu"><a href="#parts27">まむ</a></li>
                         <li id="parts28_menu"><a href="#parts28">まめ</a></li>
                         <li id="parts29_menu"><a href="#parts29">まも</a></li>
                         <li id="parts30_menu"><a href="#parts30">まゆ</a></li>
                         <li id="parts31_menu"><a href="#parts31">まよ</a></li>
                         <li id="parts32_menu"><a href="#parts32">まり</a></li>
                         <li id="parts33_menu"><a href="#parts33">まる</a></li>
                         <li id="parts34_menu"><a href="#parts34">まれ</a></li>
                         <li id="parts35_menu"><a href="#parts35">まろ</a></li>
                         <li id="parts36_menu"><a href="#parts36">まわ</a></li>
                         <li id="parts37_menu"><a href="#parts37">まん</a></li>
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
                    <h3 class="ttl_while">ま</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="13009">么<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25213">庅<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14340">尛<span class="small">マ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="209">馬<span class="small">マ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1902">麻<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5235">痲<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13454">嗎<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15736">溤<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3298">嘛<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3502">麼<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7275">蔴<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7276">麽<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25067">嫲<span class="small">マ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1900">摩<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4669">碼<span class="small">マ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1901">磨<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4088">蟇<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4089">蟆<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14239">嬤<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22166">䗫<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24958">嚒<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25068">嬷<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9708">藦<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11258">擵<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18102">鎷<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22393">䜆<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24961">嚤<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9719">蘑<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24962">嚰<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23063">䩋<span class="small">マ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1570">魔<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12816">劘<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18397">髍<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23395">䯢<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25907">礳<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14894">戂<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15051">攠<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10738">䃺<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21527">䊳<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24171">饝<span class="small">マ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24366">䭩<span class="small">マ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="074">目<span class="small">ま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="209">馬<span class="small">ま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="342">真<span class="small">ま</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6092">眞<span class="small">ま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="100">間<span class="small">ま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7868">閒<span class="small">ま</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">まい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="24732">劢<span class="small">マイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="220">米<span class="small">マイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="224">毎<span class="small">マイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26933">迈<span class="small">マイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6443">每<span class="small">マイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13258">呅<span class="small">マイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="225">妹<span class="small">マイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="985">枚<span class="small">マイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5337">苺<span class="small">マイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10123">玫<span class="small">マイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20699">㺳<span class="small">マイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2107">昧<span class="small">マイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20033">㭑<span class="small">マイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20704">㺺<span class="small">マイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1571">埋<span class="small">マイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5151">眛<span class="small">マイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5338">莓<span class="small">マイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26313">脒<span class="small">マイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21560">䋛<span class="small">マイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4626">瑁<span class="small">マイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20782">㼮<span class="small">マイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12906">勱<span class="small">マイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13828">塺<span class="small">マイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15013">摵<span class="small">マイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22426">䜸<span class="small">マイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10193">蝐<span class="small">マイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20408">㵋<span class="small">マイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5530">邁<span class="small">マイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16224">燘<span class="small">マイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21252">䆀<span class="small">マイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23660">䵢<span class="small">マイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24127">薶<span class="small">マイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19734">㦟<span class="small">マイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22406">䜕<span class="small">マイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3997">霾<span class="small">マイ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1258">舞<span class="small">まい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5645">臧<span class="small">まいない</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2129">賂<span class="small">まいな（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1936">賄<span class="small">まいな（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2129">賂<span class="small">まいな（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2966">哩<span class="small">マイル</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="515">参<span class="small">まい（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13210">叁<span class="small">まい（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5890">參<span class="small">まい（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13211">叄<span class="small">まい（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26512">㕘<span class="small">まい（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13212">叅<span class="small">まい（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1987">詣<span class="small">まい（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5583">衙<span class="small">まい（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">まう</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5152">眩<span class="small">ま（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1258">舞<span class="small">ま（う）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">まえ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="177">前<span class="small">まえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12763">歬<span class="small">まえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12764">偂<span class="small">まえ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">まか</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="276">曲<span class="small">まが</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21153">䄀<span class="small">まが</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25911">祸<span class="small">まが</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1618">禍<span class="small">まが</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10805">旤<span class="small">まが</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6400">禍<span class="small">まが</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14924">拟<span class="small">まがい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1651">擬<span class="small">まがい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1548">紛<span class="small">まが（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25947">筚<span class="small">まがき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4160">寨<span class="small">まがき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2844">蕃<span class="small">まがき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4175">樊<span class="small">まがき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4594">篳<span class="small">まがき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1533">藩<span class="small">まがき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4611">籬<span class="small">まがき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="405">負<span class="small">ま（かす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="783">任<span class="small">まか（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="413">放<span class="small">まか（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18677">㐰<span class="small">まか（せる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="783">任<span class="small">まか（せる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12482">孞<span class="small">まか（せる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="244">委<span class="small">まか（せる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="542">信<span class="small">まか（せる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1492">託<span class="small">まか（せる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8098">訫<span class="small">まか（せる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1936">賄<span class="small">まかな（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17062">罢<span class="small">まか（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1870">罷<span class="small">まか（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1998">勾<span class="small">ま（がる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="682">句<span class="small">ま（がる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="276">曲<span class="small">ま（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3077">佝<span class="small">ま（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4010">枉<span class="small">ま（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3524">弯<span class="small">ま（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4029">枸<span class="small">ま（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4748">紆<span class="small">ま（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8994">䊸<span class="small">ま（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25835">盘<span class="small">ま（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2341">鈎<span class="small">ま（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2340">鉤<span class="small">ま（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6782">骪<span class="small">ま（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6783">骫<span class="small">ま（がる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1240">盤<span class="small">ま（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4180">樛<span class="small">ま（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18094">鎜<span class="small">ま（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3523">彎<span class="small">ま（がる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2169">迂<span class="small">まが（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8558">迃<span class="small">まが（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">まき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="19553">㢧<span class="small">まき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="613">牧<span class="small">まき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6145">卷<span class="small">まき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="841">巻<span class="small">まき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2596">槙<span class="small">まき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5721">槇<span class="small">まき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2896">篇<span class="small">まき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1154">薪<span class="small">まき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3327">圉<span class="small">まきば</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1548">紛<span class="small">まぎ（らす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1548">紛<span class="small">まぎ（らわしい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1548">紛<span class="small">まぎ（らわす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1548">紛<span class="small">まぎ（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">まく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="12827">劰<span class="small">マク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2832">莫<span class="small">マク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="986">幕<span class="small">マク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1861">漠<span class="small">マク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3434">寞<span class="small">マク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13479">嗼<span class="small">マク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13829">塻<span class="small">マク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14865">慔<span class="small">マク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23973">幙<span class="small">マク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1572">膜<span class="small">マク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15113">暯<span class="small">マク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20244">㱳<span class="small">マク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20526">㷬<span class="small">マク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16681">瞐<span class="small">マク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17034">縸<span class="small">マク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7794">鏌<span class="small">マク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19732">㦝<span class="small">マク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18403">鬕<span class="small">マク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23353">䮬<span class="small">マク</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3495">幔<span class="small">まく</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19495">㡢<span class="small">まく</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19553">㢧<span class="small">ま（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6145">卷<span class="small">ま（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="841">巻<span class="small">ま（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26378">莳<span class="small">ま（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2365">捲<span class="small">ま（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2475">蒔<span class="small">ま（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22229">䙀<span class="small">ま（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9122">綳<span class="small">ま（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2450">撒<span class="small">ま（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2812">播<span class="small">ま（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4802">繃<span class="small">ま（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13140">刍<span class="small">まぐさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5357">芻<span class="small">まぐさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5552">秣<span class="small">まぐさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5358">蒭<span class="small">まぐさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10841">䬴<span class="small">まぐさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5552">秣<span class="small">まぐさか（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10841">䬴<span class="small">まぐさか（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2108">枕<span class="small">まくら</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2365">捲<span class="small">まく（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1548">紛<span class="small">まぐ（れ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2156">鮪<span class="small">まぐろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27754">𩻩<span class="small">まぐろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3939">耙<span class="small">まぐわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27579">䎬<span class="small">まぐわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9259">䎱<span class="small">まぐわ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">まけ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4648">髷<span class="small">まげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4010">枉<span class="small">ま（げて）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="405">負<span class="small">ま（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="589">敗<span class="small">ま（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="816">輸<span class="small">ま（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11557">贁<span class="small">ま（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="276">曲<span class="small">ま（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4010">枉<span class="small">ま（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4748">紆<span class="small">ま（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8994">䊸<span class="small">ま（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12603">偻<span class="small">ま（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27861">𣓤<span class="small">ま（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3130">僂<span class="small">ま（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6782">骪<span class="small">ま（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6783">骫<span class="small">ま（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4189">橈<span class="small">ま（げる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">まこ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="25086">孙<span class="small">まご</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="562">孫<span class="small">まご</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1180">丹<span class="small">まごころ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="946">忠<span class="small">まごころ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19580">㣋<span class="small">まごころ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3570">悃<span class="small">まごころ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2161">允<span class="small">まこと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18677">㐰<span class="small">まこと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3420">孚<span class="small">まこと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3542">忱<span class="small">まこと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12482">孞<span class="small">まこと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="311">実<span class="small">まこと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14294">实<span class="small">まこと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="542">信<span class="small">まこと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1815">衷<span class="small">まこと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3564">恂<span class="small">まこと</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4348">洵<span class="small">まこと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12675">㽙<span class="small">まこと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="342">真<span class="small">まこと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3570">悃<span class="small">まこと</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6092">眞<span class="small">まこと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25280">挚<span class="small">まこと</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2535">惇<span class="small">まこと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8098">訫<span class="small">まこと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11102">悾<span class="small">まこと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12400">欵<span class="small">まこと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25248">悫<span class="small">まこと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1642">款<span class="small">まこと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11114">㥫<span class="small">まこと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="919">誠<span class="small">まこと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3064">亶<span class="small">まこと</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4959">詢<span class="small">まこと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3600">愨<span class="small">まこと</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5737">實<span class="small">まこと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12855">㱁<span class="small">まこと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2016">摯<span class="small">まこと</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2988">諒<span class="small">まこと</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4972">諄<span class="small">まこと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10988">慤<span class="small">まこと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2066">諦<span class="small">まこと</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2161">允<span class="small">まこと（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5333">苟<span class="small">まこと（に）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4348">洵<span class="small">まこと（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12675">㽙<span class="small">まこと（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3431">寔<span class="small">まこと（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2381">菰<span class="small">まこも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2571">蒋<span class="small">まこも</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6457">蔣<span class="small">まこも</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">まさ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="038">正<span class="small">まさ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2928">柾<span class="small">まさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6221">橸<span class="small">まさ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3643">戉<span class="small">まさかり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4690">鉞<span class="small">まさかり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26209">龯<span class="small">まさかり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27477">䤦<span class="small">まさかり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4714">鍠<span class="small">まさかり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2928">柾<span class="small">まさき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5425">薜<span class="small">まさきのかずら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2130">弄<span class="small">まさぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27370">㺯<span class="small">まさぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14932">挊<span class="small">まさぐ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14941">挵<span class="small">まさぐ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="222">方<span class="small">まさ（に）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1636">且<span class="small">まさ（に）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="200">当<span class="small">まさ（に）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="651">応<span class="small">まさ（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25216">应<span class="small">まさ（に）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="911">将<span class="small">まさ（に）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6164">將<span class="small">まさ（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19945">㫀<span class="small">まさ（に）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2758">鼎<span class="small">まさ（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5865">當<span class="small">まさ（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6574">鼑<span class="small">まさ（に）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5791">應<span class="small">まさ（に）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="335">勝<span class="small">まさ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1290">雄<span class="small">まさ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2943">愈<span class="small">まさ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7978">䧺<span class="small">まさ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1388">賢<span class="small">まさ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="991">優<span class="small">まさ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8317">贒<span class="small">まさ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="127">交<span class="small">ま（ざる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="703">混<span class="small">ま（ざる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">まし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="127">交<span class="small">まじ（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2666">綜<span class="small">まじ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5270">糅<span class="small">まじ（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2022">呪<span class="small">まじな（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3027">咒<span class="small">まじな（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17432">蛊<span class="small">まじな（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4113">蠱<span class="small">まじな（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2022">呪<span class="small">まじな（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3027">咒<span class="small">まじな（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="710">在<span class="small">ましま（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14902">扗<span class="small">ましま（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2439">坐<span class="small">ましま（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24200">㘴<span class="small">ましま（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19046">㘸<span class="small">ましま（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5115">猴<span class="small">ましら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16415">猨<span class="small">ましら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20661">㺅<span class="small">ましら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1612">猿<span class="small">ましら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="127">交<span class="small">ま（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25368">杂<span class="small">ま（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3438">尨<span class="small">ま（じる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="703">混<span class="small">ま（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4384">淆<span class="small">ま（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6133">厠<span class="small">ま（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3504">廁<span class="small">ま（じる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4394">渾<span class="small">ま（じる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="713">雑<span class="small">ま（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2829">駁<span class="small">ま（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5270">糅<span class="small">ま（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5271">糂<span class="small">ま（じる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1418">錯<span class="small">ま（じる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3048">襍<span class="small">ま（じる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3049">雜<span class="small">ま（じる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1133">瞬<span class="small">まじろ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6029">爻<span class="small">まじ（わる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="127">交<span class="small">まじ（わる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="515">参<span class="small">まじ（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13210">叁<span class="small">まじ（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25528">际<span class="small">まじ（わる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="753">接<span class="small">まじ（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3460">崔<span class="small">まじ（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5890">參<span class="small">まじ（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13211">叄<span class="small">まじ（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26512">㕘<span class="small">まじ（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13212">叅<span class="small">まじ（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3399">媾<span class="small">まじ（わる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="708">際<span class="small">まじ（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11372">擑<span class="small">まじ（わる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">ます</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1516">斗<span class="small">ます</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1742">升<span class="small">ます</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24202">㚈<span class="small">ます</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4012">枡<span class="small">ます</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19938">㪶<span class="small">ます</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3762">斛<span class="small">ます</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4013">桝<span class="small">ます</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2678">鱒<span class="small">ます</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3336">坿<span class="small">ま（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9438">茊<span class="small">ま（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5344">茲<span class="small">ま（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9439">兹<span class="small">ま（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="388">倍<span class="small">ま（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="646">益<span class="small">ま（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10499">益<span class="small">ま（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2045">曽<span class="small">ま（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1711">滋<span class="small">ま（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4251">曾<span class="small">ま（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="760">増<span class="small">ま（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6419">增<span class="small">ま（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="049">先<span class="small">ま（ず）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1781">拙<span class="small">まず（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4033">枅<span class="small">ますがた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5920">枦<span class="small">ますがた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25380">栌<span class="small">ますがた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4207">櫨<span class="small">ますがた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="796">貧<span class="small">まず（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="263">寒<span class="small">まず（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25940">窭<span class="small">まず（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5620">窶<span class="small">まず（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9438">茊<span class="small">ますます</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5344">茲<span class="small">ますます</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9439">兹<span class="small">ますます</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="646">益<span class="small">ますます</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10499">益<span class="small">ますます</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">ませ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4611">籬<span class="small">ませがき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="127">交<span class="small">ま（ぜる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25368">杂<span class="small">ま（ぜる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23809">剂<span class="small">ま（ぜる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1109">剤<span class="small">ま（ぜる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="703">混<span class="small">ま（ぜる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23858">搅<span class="small">ま（ぜる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="713">雑<span class="small">ま（ぜる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2242">撹<span class="small">ま（ぜる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6062">劑<span class="small">ま（ぜる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3048">襍<span class="small">ま（ぜる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3049">雜<span class="small">ま（ぜる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2241">攪<span class="small">ま（ぜる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">また</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1573">又<span class="small">また</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2432">叉<span class="small">また</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2939">也<span class="small">また</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13221">叹<span class="small">また</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2181">亦<span class="small">また</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1995">股<span class="small">また</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8621">还<span class="small">また</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2929">俣<span class="small">また</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3368">奎<span class="small">また</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4225">胯<span class="small">また</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12469">㑨<span class="small">また</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11834">脵<span class="small">また</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="801">復<span class="small">また</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4130">椏<span class="small">また</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2383">跨<span class="small">また</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1643">還<span class="small">また</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="616">未<span class="small">ま（だ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4225">胯<span class="small">また（がる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2383">跨<span class="small">また（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2527">夙<span class="small">まだき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4225">胯<span class="small">また（ぐ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2383">跨<span class="small">また（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3564">恂<span class="small">またた（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1133">瞬<span class="small">またた（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2861">彪<span class="small">まだら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2091">斑<span class="small">まだら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1866">頒<span class="small">まだら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2829">駁<span class="small">まだら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4494">駮<span class="small">まだら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11575">辬<span class="small">まだら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26364">荦<span class="small">まだらうし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4833">犁<span class="small">まだらうし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4832">犂<span class="small">まだらうし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4836">犖<span class="small">まだらうし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23646">䵓<span class="small">まだらうし</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">まち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="13055">佅<span class="small">マチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13981">妺<span class="small">マチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15161">枺<span class="small">マチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21774">䏞<span class="small">マチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16720">砞<span class="small">マチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16958">粖<span class="small">マチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19844">㨸<span class="small">マチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18420">魩<span class="small">マチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23264">䬿<span class="small">マチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23622">䴲<span class="small">マチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15939">瀎<span class="small">マチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19869">㩢<span class="small">マチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16780">礣<span class="small">マチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18599">齂<span class="small">マチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23399">䯦<span class="small">マチ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="060">町<span class="small">まち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1270">坊<span class="small">まち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5950">甼<span class="small">まち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5184">陌<span class="small">まち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26563">裆<span class="small">まち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="460">街<span class="small">まち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3966">闍<span class="small">まち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5066">襠<span class="small">まち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5545">竢<span class="small">まちう（ける）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">まつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="614">末<span class="small">マツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1903">抹<span class="small">マツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2930">沫<span class="small">マツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5326">茉<span class="small">マツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13981">妺<span class="small">マツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20482">㶬<span class="small">マツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5552">秣<span class="small">マツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21676">䍪<span class="small">マツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5085">靺<span class="small">マツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10841">䬴<span class="small">マツ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="537">松<span class="small">まつ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5919">枩<span class="small">まつ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11964">枀<span class="small">まつ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11965">柗<span class="small">まつ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11966">梥<span class="small">まつ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14693">庺<span class="small">まつ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11967">㮤<span class="small">まつ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24571">伫<span class="small">ま（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3079">佇<span class="small">ま（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="357">待<span class="small">ま（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3092">俟<span class="small">ま（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="500">候<span class="small">ま（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5541">竚<span class="small">ま（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2031">須<span class="small">ま（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5545">竢<span class="small">ま（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14787">徯<span class="small">ま（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5158">睫<span class="small">まつげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4508">驀<span class="small">まっしぐら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12391">㒰<span class="small">まった（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="346">全<span class="small">まった（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="464">完<span class="small">まっと（うする）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5633">祀<span class="small">まつ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4909">烝<span class="small">まつ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5635">祠<span class="small">まつ（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="298">祭<span class="small">まつ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20523">㷥<span class="small">まつ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10778">禩<span class="small">まつ（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="746">政<span class="small">まつりごと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5450">畤<span class="small">まつりのにわ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1560">奉<span class="small">まつ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5633">祀<span class="small">まつ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5635">祠<span class="small">まつ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="298">祭<span class="small">まつ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2796">祷<span class="small">まつ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3371">奠<span class="small">まつ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1676">献<span class="small">まつ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26034">緾<span class="small">まつ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10778">禩<span class="small">まつ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5290">餽<span class="small">まつ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6451">禱<span class="small">まつ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5856">獻<span class="small">まつ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2770">纏<span class="small">まつ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2771">纒<span class="small">まつ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4748">紆<span class="small">まつ（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8994">䊸<span class="small">まつ（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3719">摎<span class="small">まつ（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4775">綢<span class="small">まつ（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4180">樛<span class="small">まつ（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26034">緾<span class="small">まつ（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4798">繆<span class="small">まつ（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4806">繚<span class="small">まつ（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4811">繞<span class="small">まつ（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9141">繳<span class="small">まつ（わる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2770">纏<span class="small">まつ（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2771">纒<span class="small">まつ（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4301">躔<span class="small">まつ（わる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">まて</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="26539">蛏<span class="small">まて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6946">鮲<span class="small">まて</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4106">蟶<span class="small">まて</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2295">迄<span class="small">まで</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26539">蛏<span class="small">まてがい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4106">蟶<span class="small">まてがい</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">まと</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="10463">旳<span class="small">まと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="575">的<span class="small">まと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1689">侯<span class="small">まと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12472">矦<span class="small">まと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2419">鵠<span class="small">まと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="933">窓<span class="small">まど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6271">窗<span class="small">まど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10916">牎<span class="small">まど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5872">槞<span class="small">まど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10914">䆫<span class="small">まど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10915">牕<span class="small">まど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12349">牖<span class="small">まど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12350">牗<span class="small">まど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10913">窻<span class="small">まど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12310">櫳<span class="small">まど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12311">㰍<span class="small">まど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26034">緾<span class="small">まとい</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2770">纏<span class="small">まとい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2771">纒<span class="small">まとい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4748">紆<span class="small">まと（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8994">䊸<span class="small">まと（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1300">絡<span class="small">まと（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9152">䋝<span class="small">まと（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9996">褁<span class="small">まと（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4775">綢<span class="small">まと（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5050">裹<span class="small">まと（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26034">緾<span class="small">まと（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4806">繚<span class="small">まと（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4811">繞<span class="small">まと（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2770">纏<span class="small">まと（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2771">纒<span class="small">まと（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4820">纓<span class="small">まと（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="814">迷<span class="small">まど（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5152">眩<span class="small">まど（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1318">惑<span class="small">まど（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="004">円<span class="small">まど（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12326">栾<span class="small">まど（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12694">圎<span class="small">まど（か）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5769">圓<span class="small">まど（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4206">欒<span class="small">まど（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26034">緾<span class="small">まと（める）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2770">纏<span class="small">まと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2771">纒<span class="small">まと（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1390">幻<span class="small">まど（わす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18867">㕕<span class="small">まど（わす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="866">誤<span class="small">まど（わす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17432">蛊<span class="small">まどわ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4113">蠱<span class="small">まどわ（す）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">まな</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="10982">㤅<span class="small">まな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10983">爱<span class="small">まな</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="440">愛<span class="small">まな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3093">俎<span class="small">まないた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5957">爼<span class="small">まないた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6980">鯧<span class="small">まながつお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6981">䱽<span class="small">まながつお</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="074">目<span class="small">まなこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="668">眼<span class="small">まなこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5154">眥<span class="small">まなじり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5155">眦<span class="small">まなじり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5161">睚<span class="small">まなじり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="733">序<span class="small">まなびや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19034">㘧<span class="small">まなびや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22946">䦽<span class="small">まなびや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3503">庠<span class="small">まなびや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26152">黉<span class="small">まなびや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3792">黌<span class="small">まなびや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5709">斈<span class="small">まな（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="009">学<span class="small">まな（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5708">學<span class="small">まな（ぶ）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">まぬ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="12683">免<span class="small">まぬか（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1576">免<span class="small">まぬか（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts21">
                    <h3 class="ttl_while">まね</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="736">招<span class="small">まね（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2492">惹<span class="small">まね（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4859">聘<span class="small">まね（く）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts22">
                    <h3 class="ttl_while">まは</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1133">瞬<span class="small">まばた（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5152">眩<span class="small">まばゆ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1791">疎<span class="small">まば（ら）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2279">稀<span class="small">まば（ら）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2544">疏<span class="small">まば（ら）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6106">踈<span class="small">まば（ら）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10339">䟽<span class="small">まば（ら）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts23">
                    <h3 class="ttl_while">まふ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5406">蔟<span class="small">まぶし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5152">眩<span class="small">まぶ（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1517">塗<span class="small">まぶ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5171">瞼<span class="small">まぶた</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts24">
                    <h3 class="ttl_while">まほ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1390">幻<span class="small">まぼろし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18867">㕕<span class="small">まぼろし</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts25">
                    <h3 class="ttl_while">まま</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5789">圸<span class="small">まま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6072">侭<span class="small">まま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27799">𡋤<span class="small">まま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="592">飯<span class="small">まま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1092">継<span class="small">まま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7461">飰<span class="small">まま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26281">飯<span class="small">まま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9042">㡭<span class="small">まま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6149">墹<span class="small">まま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2603">儘<span class="small">まま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6154">壗<span class="small">まま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5830">繼<span class="small">まま</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts26">
                    <h3 class="ttl_while">まみ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5117">猯<span class="small">まみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8284">貒<span class="small">まみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8289">貛<span class="small">まみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8290">䝔<span class="small">まみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="017">見<span class="small">まみ（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1611">謁<span class="small">まみ（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6412">謁<span class="small">まみ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5463">覲<span class="small">まみ（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1517">塗<span class="small">まみ（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts27">
                    <h3 class="ttl_while">まむ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4078">蝮<span class="small">まむし</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts28">
                    <h3 class="ttl_while">まめ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="382">豆<span class="small">まめ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="311">実<span class="small">まめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14294">实<span class="small">まめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4218">胝<span class="small">まめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5361">荳<span class="small">まめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5370">菽<span class="small">まめ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5737">實<span class="small">まめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9499">萁<span class="small">まめがら</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts29">
                    <h3 class="ttl_while">まも</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3069">仗<span class="small">まも（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25270">护<span class="small">まも（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26582">謢<span class="small">まも（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="695">護<span class="small">まも（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24740">卫<span class="small">まも（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19261">㝊<span class="small">まも（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="316">守<span class="small">まも（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3644">戍<span class="small">まも（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="810">防<span class="small">まも（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25270">护<span class="small">まも（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5549">秉<span class="small">まも（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25275">拥<span class="small">まも（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13718">垨<span class="small">まも（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3688">捍<span class="small">まも（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19827">㨣<span class="small">まも（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="644">衛<span class="small">まも（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1580">擁<span class="small">まも（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6306">衞<span class="small">まも（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26582">謢<span class="small">まも（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="695">護<span class="small">まも（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts30">
                    <h3 class="ttl_while">まゆ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="2092">眉<span class="small">まゆ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10522">睂<span class="small">まゆ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9132">絸<span class="small">まゆ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2696">黛<span class="small">まゆ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4556">麋<span class="small">まゆ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1679">繭<span class="small">まゆ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9133">蠒<span class="small">まゆ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6551">黱<span class="small">まゆ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2219">蛾<span class="small">まゆげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9832">䖸<span class="small">まゆげ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2696">黛<span class="small">まゆずみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6551">黱<span class="small">まゆずみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4011">枋<span class="small">まゆみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4494">駮<span class="small">まゆみ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2712">檀<span class="small">まゆみ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts31">
                    <h3 class="ttl_while">まよ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="814">迷<span class="small">まよ（う）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts32">
                    <h3 class="ttl_while">まり</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="3844">毬<span class="small">まり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4708">鋺<span class="small">まり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2290">鞠<span class="small">まり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23126">䪕<span class="small">まり</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts33">
                    <h3 class="ttl_while">まる</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="103">丸<span class="small">まる</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="103">丸<span class="small">まる（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="004">円<span class="small">まる（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="770">団<span class="small">まる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12326">栾<span class="small">まる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12694">圎<span class="small">まる（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5769">圓<span class="small">まる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3716">摶<span class="small">まる（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6148">團<span class="small">まる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3328">圜<span class="small">まる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19865">㩛<span class="small">まる（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4206">欒<span class="small">まる（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="509">材<span class="small">まるた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4648">髷<span class="small">まるまげ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="103">丸<span class="small">まる（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3716">摶<span class="small">まる（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19865">㩛<span class="small">まる（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts34">
                    <h3 class="ttl_while">まれ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="160">少<span class="small">まれ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="473">希<span class="small">まれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19459">㠻<span class="small">まれ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2279">稀<span class="small">まれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5585">罕<span class="small">まれ（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9171">䍐<span class="small">まれ（に）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts35">
                    <h3 class="ttl_while">まろ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2931">麿<span class="small">まろ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="268">客<span class="small">まろうど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25091">宾<span class="small">まろうど</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6414">賓<span class="small">まろうど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8313">賔<span class="small">まろうど</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1873">賓<span class="small">まろうど</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="374">転<span class="small">まろ（ぶ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6047">轉<span class="small">まろ（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="004">円<span class="small">まろ（やか）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12694">圎<span class="small">まろ（やか）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5769">圓<span class="small">まろ（やか）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts36">
                    <h3 class="ttl_while">まわ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5760">囘<span class="small">まわ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="093">回<span class="small">まわ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13614">囬<span class="small">まわ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27832">𢌞<span class="small">まわ（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2172">廻<span class="small">まわ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14719">廽<span class="small">まわ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="530">周<span class="small">まわ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5760">囘<span class="small">まわ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="093">回<span class="small">まわ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1134">巡<span class="small">まわ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25220">廵<span class="small">まわ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13614">囬<span class="small">まわ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27832">𢌞<span class="small">まわ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2172">廻<span class="small">まわ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5507">迴<span class="small">まわ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14719">廽<span class="small">まわ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17920">逥<span class="small">まわ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts37">
                    <h3 class="ttl_while">まん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="226">万<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3211">卍<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13170">卐<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21928">䒥<span class="small">マン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2920">孟<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13997">姏<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14051">娨<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19256">㝃<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25101">屘<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4252">曼<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12688">㒼<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19177">㛧<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20558">㸘<span class="small">マン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="615">満<span class="small">マン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5888">萬<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17281">葂<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18960">㗄<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21207">䅋<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11747">㬅<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12598">僈<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27895">𤚥<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27896">𦎌<span class="small">マン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1277">漫<span class="small">マン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1278">慢<span class="small">マン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2846">蔓<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3495">幔<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6237">滿<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13832">墁<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14179">嫚<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15011">摱<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16436">獌<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19074">㙢<span class="small">マン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2841">幡<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18044">鋄<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18048">鋔<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19728">㦖<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20896">㾺<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24054">熳<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24381">澫<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25839">瞒<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5169">瞞<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15893">澷<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19495">㡢<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20420">㵘<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20943">㿸<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21032">䁧<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21249">䅼<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26552">螨<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26569">襔<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27835">𢡛<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4800">縵<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9917">蟎<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21507">䊟<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21509">䊡<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26858">蹒<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3634">懣<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4284">蹣<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4996">謾<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22420">䜱<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22538">䟂<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22686">䡬<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22811">䤍<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4724">鏝<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5293">饅<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7419">顢<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23429">䰋<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4650">鬘<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18404">鬗<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2847">鰻<span class="small">マン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23042">䨲<span class="small">マン</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3211">卍<span class="small">まんじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13170">卐<span class="small">まんじ</span></a></li>
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