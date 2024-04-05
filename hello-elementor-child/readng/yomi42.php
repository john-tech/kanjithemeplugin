<?php
/*
 * Template Name: Yomi42
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
               <h1 class="ttl_main">音訓検索「れ」</h1>
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
               <p>「れ」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>れ</option>
                              <option value="yomi43">ろ</option>
                              <option value="yomi44">わ</option>
                              <option value="yomi45">を</option>
                         </select>
                    </div>
               </div><!--search_narrowdown-->
               <div class="search_data yomi_menu">
                    <ul class="search_menu2">
                         <li id="parts1_menu"><a href="#parts1">れ</a></li>
                         <li id="parts2_menu"><a href="#parts2">れい</a></li>
                         <li id="parts3_menu"><a href="#parts3">れき</a></li>
                         <li id="parts4_menu"><a href="#parts4">れち</a></li>
                         <li id="parts5_menu"><a href="#parts5">れつ</a></li>
                         <li id="parts6_menu"><a href="#parts6">れん</a></li>
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
                    <h3 class="ttl_while">れ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="15535">洡<span class="small">レ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22747">䣂<span class="small">レ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24398">䒹<span class="small">レ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20271">㲕<span class="small">レ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18031">銇<span class="small">レ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21579">䋱<span class="small">レ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17344">蕌<span class="small">レ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18277">頛<span class="small">レ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21838">䐯<span class="small">レ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20426">㵢<span class="small">レ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23262">䬽<span class="small">レ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18830">㔣<span class="small">レ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22731">䢮<span class="small">レ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23327">䮑<span class="small">レ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16616">癗<span class="small">レ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21138">䃬<span class="small">レ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21669">䍣<span class="small">レ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20548">㸊<span class="small">レ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27647">㿔<span class="small">レ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15970">灅<span class="small">レ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21175">䄤<span class="small">レ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21457">䉪<span class="small">レ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18155">鑸<span class="small">レ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">れい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="435">礼<span class="small">レイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="632">令<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12335">厉<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13218">另<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8005">㚑<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26267">礼<span class="small">レイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="633">冷<span class="small">レイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1595">励<span class="small">レイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1935">戻<span class="small">レイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2997">伶<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8006">灵<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12753">刢<span class="small">レイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="634">例<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2986">苓<span class="small">レイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2998">怜<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3324">囹<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10448">疠<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11237">戾<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11319">拎<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13272">呤<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13277">呬<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13692">坽<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13992">姈<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14411">岭<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14419">岺<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14772">彾<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15477">沴<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15478">沵<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15499">泠<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16364">狑<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18185">阾<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19512">㡵<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20560">㸚<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23889">丽<span class="small">レイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2999">玲<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5349">茘<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9458">荔<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10648">砅<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11665">昤<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11793">朎<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12015">柃<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16035">炩<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19466">㡂<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19641">㤡<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20585">㸳<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24585">俪<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3001">砺<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3273">唳<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3700">捩<span class="small">レイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5369">莉<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10271">瓴<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10843">秢<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10943">竛<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14776">徎<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15177">栛<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15599">涖<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16494">珕<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16622">皊<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16724">砱<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17542">袊<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18704">㑦<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18791">㓯<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19640">㤠<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20857">㾉<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24814">唥<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26879">㛤<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3003">蛎<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4045">蛉<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4833">犁<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4856">聆<span class="small">レイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5128">羚<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8803">笭<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9229">翎<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9331">舲<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9530">䓞<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9988">衑<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10369">㾐<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11121">悷<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14103">婯<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16961">粝<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16986">紷<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17257">菞<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20820">㽝<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21198">䅀<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21202">䅄<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21644">䍅<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25396">棂<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4832">犂<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8120">詅<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8494">軨<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9829">蛠<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12123">棙<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17814">跉<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27497">䠲<span class="small">レイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1593">零<span class="small">レイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1934">鈴<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4782">綟<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7874">閝<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16897">筣<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20374">㴝<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22760">䣓<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10507">盠<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12334">厲<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17448">蜦<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17449">蜧<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18035">銐<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22017">䔣<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22018">䔧<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22132">䖿<span class="small">レイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1594">霊<span class="small">レイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3760">黎<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7253">䴡<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9657">蔾<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18343">駖<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19725">㦒<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22144">䗍<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23377">䯍<span class="small">レイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1308">隷<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3804">鴒<span class="small">レイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4434">澪<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5844">勵<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6926">魿<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15881">澧<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17352">蕶<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18230">霗<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18562">鹷<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19860">㩕<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20260">㲆<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23646">䵓<span class="small">レイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1310">齢<span class="small">レイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2981">嶺<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5251">癘<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6345">隸<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8004">霛<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8011">霝<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15929">濿<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16237">燯<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20006">㬡<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20139">㯪<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21418">䉁<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22055">䕘<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23966">巁<span class="small">レイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1302">離<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5437">藜<span class="small">レイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6014">禮<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8003">䨩<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9956">蠇<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10088">䙥<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12303">櫔<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15126">曞<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16336">犡<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17695">謧<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21438">䉖<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21518">䊪<span class="small">レイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1309">麗<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3000">礪<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8624">邌<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9961">蟸<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10255">瓈<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16802">禲<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18113">鏫<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18443">鯬<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19018">㘑<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20152">㰀<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21624">䌢<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23667">䵩<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25844">矋<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3002">蠣<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4851">醴<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5275">糲<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5781">齡<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6557">黧<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8720">酃<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9732">蘦<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10514">盭<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14259">孁<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3144">儷<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4112">蠡<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4211">櫺<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18747">㒧<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19930">㪮<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21458">䉫<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11533">攦<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13594">囇<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14267">孋<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14718">廲<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22082">䕻<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23454">䰭<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12327">欐<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18146">鑗<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3896">鱧<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6346">靈<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7228">䴇<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8495">䡼<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8776">醽<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11536">攭<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20919">㿛<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23615">䴫<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15336">欚<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16575">瓥<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18458">鱱<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8058">䚕<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19744">㦭<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20762">㼖<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22089">䖅<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7259">麢<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12317">欞<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16274">爧<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22823">䤙<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4512">驪<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21176">䄥<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7082">鱺<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21470">䉹<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22296">䚖<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22699">䡿<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6686">龗<span class="small">レイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23602">䴒<span class="small">レイ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">れき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="24743">历<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24783">呖<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24976">坜<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25506">沥<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26343">苈<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25372">枥<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25809">疬<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4617">珞<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6036">鬲<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10844">秝<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26972">郦<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9809">蚸<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13197">厤<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25561">雳<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12889">厯<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17297">蒚<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21996">䔉<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22760">䣓<span class="small">レキ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="635">歴<span class="small">レキ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1311">暦<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19996">㬏<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24379">漻<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6633">䰛<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17472">蝷<span class="small">レキ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6440">曆<span class="small">レキ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6442">歷<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20531">㷴<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23442">䰜<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4202">檪<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6634">㽁<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10753">磿<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18814">㔏<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20744">㻺<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3739">擽<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7774">鎘<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10766">䃯<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13108">儮<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15927">濼<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4201">櫟<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4452">瀝<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9723">藶<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11514">攊<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13576">嚦<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13884">壢<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16565">瓅<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20685">㺡<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4208">櫪<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4680">礫<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10487">皪<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16257">爏<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16570">瓑<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20249">㱹<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21050">䁻<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23346">䮥<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5254">癧<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10771">礰<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17050">纅<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20928">㿨<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21671">䍥<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23439">䰘<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4485">轢<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8456">躒<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8726">酈<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17629">觻<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21692">䍽<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22550">䟏<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6048">轣<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17728">讈<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22551">䟐<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3992">靂<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20919">㿛<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22901">䥶<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18459">鱳<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18245">靋<span class="small">レキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22823">䤙<span class="small">レキ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">れち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="13909">夨<span class="small">レチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12842">劽<span class="small">レチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13307">咧<span class="small">レチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13920">奊<span class="small">レチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14018">姴<span class="small">レチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14934">挒<span class="small">レチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19641">㤡<span class="small">レチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13342">哷<span class="small">レチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15557">浖<span class="small">レチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19640">㤠<span class="small">レチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20043">㭞<span class="small">レチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20048">㭩<span class="small">レチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20271">㲕<span class="small">レチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20590">㸹<span class="small">レチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20820">㽝<span class="small">レチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21198">䅀<span class="small">レチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21965">䓟<span class="small">レチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16665">睙<span class="small">レチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17439">蛶<span class="small">レチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17797">趔<span class="small">レチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22586">䟹<span class="small">レチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18301">颲<span class="small">レチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23966">巁<span class="small">レチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23706">䶛<span class="small">レチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20014">㬯<span class="small">レチ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">れつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="13909">夨<span class="small">レツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="436">列<span class="small">レツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1312">劣<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3161">冽<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12842">劽<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4345">洌<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9459">茢<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13307">咧<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13920">奊<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14018">姴<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14934">挒<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19641">㤡<span class="small">レツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1313">烈<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3700">捩<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8585">迾<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12046">栵<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13342">哷<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15557">浖<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19640">㤠<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20043">㭞<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25628">烮<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11835">脟<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20048">㭩<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20271">㲕<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20590">㸹<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20820">㽝<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21198">䅀<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21552">䋑<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21965">䓟<span class="small">レツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1596">裂<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9830">蛚<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10326">㽟<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16159">煭<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16665">睙<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17439">蛶<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17797">趔<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22586">䟹<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7681">鋝<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17838">踩<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18301">颲<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27119">鋢<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16232">燤<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23321">䮋<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6948">鮤<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7130">鴷<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23966">巁<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16251">爄<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23706">䶛<span class="small">レツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20014">㬯<span class="small">レツ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">れん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="25030">奁<span class="small">レン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2998">怜<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14620">帘<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19360">㟀<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25054">娈<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25088">孪<span class="small">レン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="636">連<span class="small">レン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1314">恋<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15573">浰<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25281">挛<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11835">脟<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22271">䙺<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27691">連<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27842">𢮦<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13782">堜<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14144">媡<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15681">湅<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17113">联<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17143">脔<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17274">萰<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19199">㜃<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19679">㥕<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19914">㪘<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20236">㱨<span class="small">レン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1598">廉<span class="small">レン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3006">煉<span class="small">レン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3010">蓮<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4153">楝<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10195">瑓<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13098">僆<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14984">搛<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18202">隒<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19486">㡘<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19917">㪝<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23890">亷<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24022">溓<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27692">廉<span class="small">レン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="437">練<span class="small">レン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3005">漣<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5787">嗹<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6160">奩<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8942">匲<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11464">摙<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12174">槏<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12175">榦<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14871">慩<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16184">熑<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17606">覝<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19300">㝺<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26885">㜕<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27690">蓮<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3009">聨<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3207">匳<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4471">輦<span class="small">レン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6405">練<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10218">璉<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10728">磏<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10870">稴<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13153">劆<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19711">㦁<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20757">㼑<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20900">㾾<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21027">䁠<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24001">槤<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26292">聫<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26943">㢘<span class="small">レン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1597">錬<span class="small">レン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3004">憐<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5429">薐<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5836">濂<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9682">薟<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11496">撿<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14207">嫾<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14230">嬚<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15888">澰<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16456">獫<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17122">聮<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17475">螊<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18174">閵<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20759">㼓<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21125">䃛<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24125">薕<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24138">褳<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25599">濓<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3008">聯<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3790">斂<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4801">縺<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5489">賺<span class="small">レン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6463">鍊<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11921">臁<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12929">殮<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16236">燫<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17093">翴<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24235">㯬<span class="small">レン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1971">鎌<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8193">謰<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10610">瞵<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15322">櫣<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17595">襝<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17852">蹥<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17970">鄻<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21254">䆂<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21758">䏈<span class="small">レン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3007">簾<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4720">鏈<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9949">蠊<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16248">爁<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17073">羷<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21620">䌞<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24361">䭑<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27693">簾<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3884">鰊<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4455">瀲<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6848">鬑<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9733">蘞<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17721">譧<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20460">㶌<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26521">蘝<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7775">鐮<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27472">䥥<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7047">鰱<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13935">奱<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14268">孌<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14284">孿<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3744">攣<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5828">戀<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8941">籢<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4318">臠<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19260">㝈<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19249">㜻<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22087">䖂<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10459">癴<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9156">纞<span class="small">レン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16619">癵<span class="small">レン</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25396">棂<span class="small">れんじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20139">㯪<span class="small">れんじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4211">櫺<span class="small">れんじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12317">欞<span class="small">れんじ</span></a></li>
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