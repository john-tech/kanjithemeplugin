<?php
/*
 * Template Name: Yomi27
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
               <h1 class="ttl_main">音訓検索「ひ」</h1>
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
               <p>「ひ」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>ひ</option>
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
                         <li id="parts1_menu"><a href="#parts1">ひ</a></li>
                         <li id="parts2_menu"><a href="#parts2">ひい</a></li>
                         <li id="parts3_menu"><a href="#parts3">ひう</a></li>
                         <li id="parts4_menu"><a href="#parts4">ひえ</a></li>
                         <li id="parts5_menu"><a href="#parts5">ひか</a></li>
                         <li id="parts6_menu"><a href="#parts6">ひき</a></li>
                         <li id="parts7_menu"><a href="#parts7">ひく</a></li>
                         <li id="parts8_menu"><a href="#parts8">ひけ</a></li>
                         <li id="parts9_menu"><a href="#parts9">ひこ</a></li>
                         <li id="parts10_menu"><a href="#parts10">ひさ</a></li>
                         <li id="parts11_menu"><a href="#parts11">ひし</a></li>
                         <li id="parts12_menu"><a href="#parts12">ひす</a></li>
                         <li id="parts13_menu"><a href="#parts13">ひせ</a></li>
                         <li id="parts14_menu"><a href="#parts14">ひそ</a></li>
                         <li id="parts15_menu"><a href="#parts15">ひた</a></li>
                         <li id="parts16_menu"><a href="#parts16">ひち</a></li>
                         <li id="parts17_menu"><a href="#parts17">ひつ</a></li>
                         <li id="parts18_menu"><a href="#parts18">ひて</a></li>
                         <li id="parts19_menu"><a href="#parts19">ひと</a></li>
                         <li id="parts20_menu"><a href="#parts20">ひな</a></li>
                         <li id="parts21_menu"><a href="#parts21">ひね</a></li>
                         <li id="parts22_menu"><a href="#parts22">ひの</a></li>
                         <li id="parts23_menu"><a href="#parts23">ひは</a></li>
                         <li id="parts24_menu"><a href="#parts24">ひひ</a></li>
                         <li id="parts25_menu"><a href="#parts25">ひま</a></li>
                         <li id="parts26_menu"><a href="#parts26">ひむ</a></li>
                         <li id="parts27_menu"><a href="#parts27">ひめ</a></li>
                         <li id="parts28_menu"><a href="#parts28">ひも</a></li>
                         <li id="parts29_menu"><a href="#parts29">ひや</a></li>
                         <li id="parts30_menu"><a href="#parts30">ひゆ</a></li>
                         <li id="parts31_menu"><a href="#parts31">ひよ</a></li>
                         <li id="parts32_menu"><a href="#parts32">ひら</a></li>
                         <li id="parts33_menu"><a href="#parts33">ひる</a></li>
                         <li id="parts34_menu"><a href="#parts34">ひれ</a></li>
                         <li id="parts35_menu"><a href="#parts35">ひろ</a></li>
                         <li id="parts36_menu"><a href="#parts36">ひわ</a></li>
                         <li id="parts37_menu"><a href="#parts37">ひん</a></li>
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
                    <h3 class="ttl_while">ひ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="3202">匕<span class="small">ヒ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="791">比<span class="small">ヒ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="396">皮<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3056">丕<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14664">庀<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19452">㠲<span class="small">ヒ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1869">妃<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11939">朼<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12401">仳<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12962">夶<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13046">伓<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13640">圮<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18845">㔻<span class="small">ヒ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="970">否<span class="small">ヒ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="972">批<span class="small">ヒ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2849">庇<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3376">妣<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3441">屁<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7918">阰<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9395">芘<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9397">芾<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10344">疕<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12424">伾<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12749">㓟<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13056">佊<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13237">吡<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13661">坒<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15439">汥<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15468">沘<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18821">㔗<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19036">㘩<span class="small">ヒ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="790">肥<span class="small">ヒ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="792">非<span class="small">ヒ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1243">彼<span class="small">ヒ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1536">泌<span class="small">ヒ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1867">披<span class="small">ヒ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1879">沸<span class="small">ヒ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2851">枇<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3335">坡<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3551">怫<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5104">狒<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5182">陂<span class="small">ヒ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6377">卑<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8641">邳<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9416">苤<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10303">畀<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10304">畁<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11310">抷<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13283">呸<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13291">咇<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13679">坯<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13896">备<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14359">屄<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14413">岯<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14617">帔<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14812">怌<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14818">怶<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15155">枈<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15370">毞<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16359">狉<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16365">狓<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17133">肶<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19135">㚰<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19560">㢰<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19887">㩺<span class="small">ヒ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="593">飛<span class="small">ヒ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1537">卑<span class="small">ヒ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2852">毘<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3902">朏<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4656">砒<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5550">秕<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6525">毗<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11660">昲<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12006">柀<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12007">柲<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12966">毖<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16031">炥<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16598">疪<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17135">胇<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20227">㱟<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20931">㿫<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22776">䣥<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24268">䃾<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24330">䚰<span class="small">ヒ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="971">秘<span class="small">ヒ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1241">被<span class="small">ヒ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1242">疲<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2848">匪<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3112">俾<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4751">紕<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5551">粃<span class="small">ヒ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6010">祕<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9783">蚍<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10363">疿<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10840">秠<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11090">悂<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12522">俷<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12581">俻<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12779">剕<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13195">厞<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14043">娝<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16812">秛<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16878">笓<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16954">粊<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17062">罢<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19775">㧘<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20336">㳪<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20974">䀟<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20976">䀣<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21674">䍨<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22202">䘡<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3395">婢<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5375">菲<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6322">豼<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7942">陫<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7943">陴<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8671">郫<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9520">萉<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9523">萆<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10377">脴<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11115">悱<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11829">䏶<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12360">啚<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12580">偹<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13402">啡<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13404">啤<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13750">埤<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13925">奜<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14076">婎<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14081">婓<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14082">婔<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14369">屝<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14478">崥<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15080">旇<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15634">淝<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15636">淠<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15657">渄<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16395">猈<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16984">紴<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17080">翍<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17098">耚<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17430">蚽<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21475">䉾<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21740">䎵<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22117">䖩<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22326">䚹<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22562">䟛<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23051">䨽<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23052">䨾<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23978">庳<span class="small">ヒ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="395">悲<span class="small">ヒ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="594">費<span class="small">ヒ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="793">備<span class="small">ヒ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1868">扉<span class="small">ヒ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2850">斐<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4231">脾<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4232">腓<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4260">跛<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4621">琲<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5227">痞<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5484">賁<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6209">暃<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8119">詖<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8277">豾<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11853">腗<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12113">棐<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12116">椑<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12579">僃<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15380">毴<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16124">焷<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16393">猆<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17760">貱<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18009">鈚<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18250">靟<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19980">㫵<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20600">㹃<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22345">䛍<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22505">䞞<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5048">裨<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5232">痺<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5318">辟<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5393">蓖<span class="small">ヒ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6393">碑<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7600">鈹<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7601">鉍<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7872">閟<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10391">痱<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10392">痹<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11116">㥱<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14156">媲<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17568">裶<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18023">鉟<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19487">㡙<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19572">㣁<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19826">㨢<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20724">㻗<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20784">㼰<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20822">㽡<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21322">䇑<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25064">嫓<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25912">禆<span class="small">ヒ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1538">碑<span class="small">ヒ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2853">緋<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4069">蜚<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4162">榧<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5084">鞁<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5208">鄙<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5608">翡<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8844">箄<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9862">蜱<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9863">蜰<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11888">膍<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16328">犕<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17013">綼<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17117">聛<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18036">銔<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20097">㮰<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20568">㸢<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21371">䈈<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23078">䩛<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23154">䪹<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23407">䯱<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26273">罴<span class="small">ヒ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1870">罷<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2854">誹<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4645">髴<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6723">駓<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6791">骳<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6823">髬<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6824">髲<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6905">魮<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9656">蕜<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9679">蕡<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10645">磇<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11486">㩌<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12780">䠊<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14551">嶏<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17670">諀<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17750">貏<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17967">鄪<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18341">駍<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18990">㗪<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19922">㪤<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20110">㯅<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20414">㵒<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22037">䕁<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22302">䚜<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22602">䠋<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23054">䩀<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23121">䪐<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23160">䫁<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23974">幩<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27529">䙓<span class="small">ヒ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1244">避<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3987">霏<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5272">糒<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6919">鮍<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6920">魾<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7103">䲹<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7704">䤵<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7706">錍<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7944">隦<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8876">篚<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11727">曊<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13873">壀<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15285">橨<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18057">錃<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20533">㷶<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23316">䮆<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3310">嚊<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4308">臂<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5893">貔<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7312">鞞<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8010">䬠<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13554">噽<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15916">濞<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17493">螷<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18318">餥<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18326">馡<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18501">鵧<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20431">㵨<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22054">䕗<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22310">䚦<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23169">䫌<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27829">𡽶<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4827">髀<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6744">騑<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9948">蟦<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15925">濷<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17373">藣<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21515">䊧<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21857">䑄<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21904">䒈<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23419">䰁<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25034">奰<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3820">鵯<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3872">鯡<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5096">鞴<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5364">靡<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5596">羆<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10089">襣<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13582">嚭<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18365">騛<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22813">䤏<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23185">䫠<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23479">䱝<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23628">䴽<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5009">譬<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7819">鐨<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10091">襬<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23055">䩁<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5495">贔<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11754">朇<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18137">鐾<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2855">轡<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21263">䆏<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17523">蠯<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20917">㿙<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22895">䥯<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18244">靅<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18306">飝<span class="small">ヒ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27885">𩖏<span class="small">ヒ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="006">火<span class="small">ひ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="065">日<span class="small">ひ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="400">氷<span class="small">ひ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="580">灯<span class="small">ひ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5808">冰<span class="small">ひ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2602">辰<span class="small">ひ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7955">阳<span class="small">ひ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7956">阦<span class="small">ひ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4015">杼<span class="small">ひ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13618">囸<span class="small">ひ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6699">乹<span class="small">ひ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2227">桧<span class="small">ひ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1043">乾<span class="small">ひ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4119">梭<span class="small">ひ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="426">陽<span class="small">ひ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6700">亁<span class="small">ひ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15810">漧<span class="small">ひ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2790">樋<span class="small">ひ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5673">燈<span class="small">ひ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2226">檜<span class="small">ひ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4937">燬<span class="small">ひ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11738">㬢<span class="small">ひ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3925">曦<span class="small">ひ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18240">霷<span class="small">ひ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26344">苉<span class="small">ピ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="791">比<span class="small">ビ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="616">未<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12962">夶<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13640">圮<span class="small">ビ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1245">尾<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9196">芈<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13661">坒<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15439">汥<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18821">㔗<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19036">㘩<span class="small">ビ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="414">味<span class="small">ビ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2113">弥<span class="small">ビ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2851">枇<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9195">羋<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11550">侎<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12705">冞<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13291">咇<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13896">备<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14413">岯<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15370">毞<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17133">肶<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19321">㞑<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19560">㢰<span class="small">ビ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="398">美<span class="small">ビ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2092">眉<span class="small">ビ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2852">毘<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3521">弭<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6525">毗<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13308">咩<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13309">咪<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20033">㭑<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24268">䃾<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10790">祙<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11549">敉<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12522">俷<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12581">俻<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13195">厞<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14036">娓<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14948">捤<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15559">浘<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17229">荱<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22202">䘡<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24077">眫<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25089">孭<span class="small">ビ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2856">梶<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10553">眯<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12580">偹<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13750">埤<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14369">屝<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14478">崥<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15080">旇<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16395">猈<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16405">猕<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16984">紴<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17249">菋<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17430">蚽<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19384">㟜<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20350">㳽<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21661">䍘<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22117">䖩<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23051">䨽<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23052">䨾<span class="small">ビ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="793">備<span class="small">ビ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2857">琵<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3397">媚<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3432">寐<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3468">嵋<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8682">郿<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9567">葞<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10522">睂<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10851">䅏<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12579">僃<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13796">堳<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14119">媄<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14501">嵄<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15674">渼<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15680">湄<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16124">焷<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16421">猸<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17290">葿<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18009">鈚<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19683">㥝<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20600">㹃<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22275">䙿<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24018">渳<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24306">䓺<span class="small">ビ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1246">微<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6871">鬽<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9334">艉<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12158">楣<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15737">溦<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16150">煝<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16531">瑂<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19286">㝥<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19487">㡙<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19572">㣁<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20784">㼰<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21359">䇻<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21487">䊊<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23952">媺<span class="small">ビ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="397">鼻<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16328">犕<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16673">睸<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17459">蝆<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18036">銔<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19610">㣲<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20097">㮰<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21371">䈈<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22495">䞔<span class="small">ビ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1574">魅<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6791">骳<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10592">瞇<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14218">嬍<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14551">嶏<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16917">篃<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17465">蝞<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17670">諀<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20110">㯅<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22602">䠋<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23054">䩀<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23160">䫁<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5272">糒<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5428">薇<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6921">鮇<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13873">壀<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15285">橨<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19235">㜫<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20423">㵟<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20533">㷶<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23264">䬿<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25141">嶶<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4441">濔<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4556">麋<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4797">縻<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5273">糜<span class="small">ビ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5924">彌<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7737">鎂<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7738">鎇<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14792">徾<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15038">擟<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16692">瞴<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17493">螷<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18501">鵧<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18564">麊<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21611">䌕<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22054">䕗<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24156">醚<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27829">𡽶<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13573">嚜<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15306">檷<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16615">癓<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16695">矀<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17373">藣<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21427">䉋<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25034">奰<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5096">鞴<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5364">靡<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21448">䉠<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22813">䤏<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23185">䫠<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23450">䰨<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23628">䴽<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4456">瀰<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7183">鶥<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9731">䕷<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15050">攗<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16465">獼<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17393">蘪<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17615">覹<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19245">㜷<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22077">䕳<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18163">镾<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18241">霺<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19577">㣆<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21259">䆊<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22890">䥩<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9737">蘼<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12361">亹<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14266">孊<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14894">戂<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15051">攠<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15981">灖<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16571">瓕<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19444">㠧<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21263">䆏<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3757">黴<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16271">爢<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17523">蠯<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20551">㸏<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20917">㿙<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21464">䉲<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8773">醾<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8775">醿<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11578">斖<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7232">鸍<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21527">䊳<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22903">䥸<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8774">釄<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23290">䭧<span class="small">ビ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27885">𩖏<span class="small">ビ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">ひい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="5495">贔<span class="small">ヒイ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3446">屓<span class="small">ひいき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6489">屭<span class="small">ひいき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1128">秀<span class="small">ひい（でる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="448">英<span class="small">ひい（でる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9402">偀<span class="small">ひい（でる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2510">柊<span class="small">ひいらぎ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">ひう</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4935">燧<span class="small">ひうち</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">ひえ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="2821">稗<span class="small">ひえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9678">薭<span class="small">ひえ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="633">冷<span class="small">ひ（える）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">ひか</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3877">鰉<span class="small">ひがい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2394">叩<span class="small">ひか（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3658">扣<span class="small">ひか（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1399">控<span class="small">ひか（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6287">膕<span class="small">ひかがみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11691">晷<span class="small">ひかげ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="202">東<span class="small">ひがし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2891">僻<span class="small">ひが（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="129">光<span class="small">ひかり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12677">灮<span class="small">ひかり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19961">㫕<span class="small">ひかり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12678">炗<span class="small">ひかり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12679">炛<span class="small">ひかり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4855">耿<span class="small">ひかり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5466">釉<span class="small">ひかり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3923">暉<span class="small">ひかり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11738">㬢<span class="small">ひかり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3925">曦<span class="small">ひかり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="129">光<span class="small">ひか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12677">灮<span class="small">ひか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19961">㫕<span class="small">ひか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12678">炗<span class="small">ひか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12679">炛<span class="small">ひか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4906">炯<span class="small">ひか（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2400">晃<span class="small">ひか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4855">耿<span class="small">ひか（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6206">晄<span class="small">ひか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4907">烱<span class="small">ひか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16096">焈<span class="small">ひか（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5468">皓<span class="small">ひか（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3923">暉<span class="small">ひか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4925">煕<span class="small">ひか（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4924">熙<span class="small">ひか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4926">熈<span class="small">ひか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4943">爍<span class="small">ひか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11671">兤<span class="small">ひか（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">ひき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="1247">匹<span class="small">ヒキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5859">皀<span class="small">ヒキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22945">䦼<span class="small">ヒキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24336">䢋<span class="small">ヒキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19027">㘠<span class="small">ヒキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12552">偪<span class="small">ヒキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13781">堛<span class="small">ヒキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14964">揊<span class="small">ヒキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23213">䫾<span class="small">ヒキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17844">踾<span class="small">ヒキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20833">㽬<span class="small">ヒキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23341">䮠<span class="small">ヒキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18518">鶝<span class="small">ヒキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23650">䵗<span class="small">ヒキ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1247">匹<span class="small">ひき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2543">疋<span class="small">ひき</span></a></li>
                         <li class="others_kanji onyomi"><a href="22967">䧗<span class="small">ビキ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20533">㷶<span class="small">ビキ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14609">帅<span class="small">ひき（いる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1770">帥<span class="small">ひき（いる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="911">将<span class="small">ひき（いる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="820">率<span class="small">ひき（いる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6164">將<span class="small">ひき（いる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1845">督<span class="small">ひき（いる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13003">卛<span class="small">ひき（いる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25863">硙<span class="small">ひきうす</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4665">磑<span class="small">ひきうす</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4479">輾<span class="small">ひきうす</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4088">蟇<span class="small">ひきがえる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4089">蟆<span class="small">ひきがえる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22166">䗫<span class="small">ひきがえる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4105">蟾<span class="small">ひきがえる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5248">癇<span class="small">ひきつ（け）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10435">癎<span class="small">ひきつ（け）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25281">挛<span class="small">ひきつ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25813">痉<span class="small">ひきつ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5226">痙<span class="small">ひきつ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3744">攣<span class="small">ひきつ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10459">癴<span class="small">ひきつ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9308">㬰<span class="small">ひきと（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5626">臾<span class="small">ひきと（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">ひく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="081">引<span class="small">ひ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18680">㐴<span class="small">ひ（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2176">曳<span class="small">ひ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3656">扞<span class="small">ひ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19766">㧈<span class="small">ひ（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2300">汲<span class="small">ひ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5792">曵<span class="small">ひ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="830">延<span class="small">ひ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1504">抽<span class="small">ひ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2120">拉<span class="small">ひ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="768">退<span class="small">ひ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3524">弯<span class="small">ひ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3679">拏<span class="small">ひ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25680">牵<span class="small">ひ（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2845">挽<span class="small">ひ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3678">拿<span class="small">ひ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27155">㧱<span class="small">ひ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1351">貫<span class="small">ひ（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2366">牽<span class="small">ひ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3691">掎<span class="small">ひ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4252">曼<span class="small">ひ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25223">弹<span class="small">ひ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1019">援<span class="small">ひ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1184">弾<span class="small">ひ（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2492">惹<span class="small">ひ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3695">掣<span class="small">ひ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5079">覃<span class="small">ひ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27843">𢰤<span class="small">ひ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3710">搆<span class="small">ひ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11747">㬅<span class="small">ひ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4468">輓<span class="small">ひ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15018">撁<span class="small">ひ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4667">碾<span class="small">ひ（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5923">彈<span class="small">ひ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22481">䝺<span class="small">ひ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3740">攀<span class="small">ひ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3523">彎<span class="small">ひ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4485">轢<span class="small">ひ（く）</span></a></li>
                         <li class="others_kanji onyomi"><a href="17279">萺<span class="small">ビク</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12420">仾<span class="small">ひく（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="573">低<span class="small">ひく（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6377">卑<span class="small">ひく（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1537">卑<span class="small">ひく（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4393">湫<span class="small">ひく（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4977">矮<span class="small">ひく（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26273">罴<span class="small">ひぐま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5596">羆<span class="small">ひぐま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12420">仾<span class="small">ひく（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="573">低<span class="small">ひく（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12420">仾<span class="small">ひく（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="573">低<span class="small">ひく（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4073">蜩<span class="small">ひぐらし</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">ひけ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="6504">髥<span class="small">ひげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4644">髯<span class="small">ひげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2478">髭<span class="small">ひげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6822">頾<span class="small">ひげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4651">鬚<span class="small">ひげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5582">衒<span class="small">ひけ（らかす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="081">引<span class="small">ひ（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19766">㧈<span class="small">ひ（ける）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">ひこ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2371">彦<span class="small">ひこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14762">彥<span class="small">ひこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4610">籖<span class="small">ひご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4609">籤<span class="small">ひご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4573">肄<span class="small">ひこばえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12353">孼<span class="small">ひこばえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12354">孽<span class="small">ひこばえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4209">蘖<span class="small">ひこばえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6497">櫱<span class="small">ひこばえ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">ひさ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="11894">厀<span class="small">ひざ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2093">膝<span class="small">ひざ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3794">黻<span class="small">ひざかけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4145">楸<span class="small">ひさぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23875">槚<span class="small">ひさぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12264">檟<span class="small">ひさぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6635">俼<span class="small">ひさ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1236">販<span class="small">ひさ（ぐ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2157">粥<span class="small">ひさ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19574">㣃<span class="small">ひさ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5465">鬻<span class="small">ひさ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="775">提<span class="small">ひさげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3201">匏<span class="small">ひさご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4974">瓠<span class="small">ひさご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2716">箪<span class="small">ひさご</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2863">瓢<span class="small">ひさご</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6452">簞<span class="small">ひさご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9961">蟸<span class="small">ひさご</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4112">蠡<span class="small">ひさご</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2849">庇<span class="small">ひさし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25215">庑<span class="small">ひさし</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2141">阿<span class="small">ひさし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4124">梠<span class="small">ひさし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24751">厢<span class="small">ひさし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3505">廂<span class="small">ひさし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3510">廡<span class="small">ひさし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4191">檐<span class="small">ひさし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4599">簷<span class="small">ひさし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="676">久<span class="small">ひさ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6618">乆<span class="small">ひさ（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1434">寿<span class="small">ひさ（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2113">弥<span class="small">ひさ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6617">镹<span class="small">ひさ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4377">淹<span class="small">ひさ（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6156">壽<span class="small">ひさ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18627">夀<span class="small">ひさ（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5924">彌<span class="small">ひさ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3924">曩<span class="small">ひさ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18163">镾<span class="small">ひさ（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4264">跪<span class="small">ひざまず（く）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">ひし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="9383">芰<span class="small">ひし</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2987">菱<span class="small">ひし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6298">蔆<span class="small">ひし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9528">䔖<span class="small">ひし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27872">𣟧<span class="small">ひし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8935">籗<span class="small">ひし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11766">厷<span class="small">ひじ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2094">肘<span class="small">ひじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2410">肱<span class="small">ひじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4308">臂<span class="small">ひじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27097">酱<span class="small">ひしお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2575">醤<span class="small">ひしお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4847">醢<span class="small">ひしお</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6461">醬<span class="small">ひしお</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3165">几<span class="small">ひじかけ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2120">拉<span class="small">ひし（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23525">䲨<span class="small">ひしくい</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2418">鴻<span class="small">ひしくい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7006">鯷<span class="small">ひしこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4834">犇<span class="small">ひしめ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1516">斗<span class="small">ひしゃく</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2494">杓<span class="small">ひしゃく</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27851">𣏐<span class="small">ひしゃく</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4634">璋<span class="small">ひしゃく</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2120">拉<span class="small">ひしゃ（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13719">垩<span class="small">ひじり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="920">聖<span class="small">ひじり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16521">琞<span class="small">ひじり</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">ひす</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3022">歪<span class="small">ひず（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">ひせ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5214">疥<span class="small">ひぜん</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5217">痂<span class="small">ひぜん</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10349">㿍<span class="small">ひぜん</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5258">癬<span class="small">ひぜん</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">ひそ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4231">脾<span class="small">ひぞう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11853">腗<span class="small">ひぞう</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="886">私<span class="small">ひそ（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7938">阴<span class="small">ひそ（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7939">阥<span class="small">ひそ（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7937">侌<span class="small">ひそ（か）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="971">秘<span class="small">ひそ（か）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6010">祕<span class="small">ひそ（か）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1015">陰<span class="small">ひそ（か）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7940">隂<span class="small">ひそ（か）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1780">窃<span class="small">ひそ（かに）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18629">宻<span class="small">ひそ（かに）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="987">密<span class="small">ひそ（かに）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="100">間<span class="small">ひそ（かに）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7868">閒<span class="small">ひそ（かに）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6038">竊<span class="small">ひそ（かに）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12341">嚬<span class="small">ひそ（み）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5143">顰<span class="small">ひそ（み）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1472">潜<span class="small">ひそ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6241">潛<span class="small">ひそ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6242">濳<span class="small">ひそ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12341">嚬<span class="small">ひそ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5143">顰<span class="small">ひそ（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">ひた</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="193">直<span class="small">ひた</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2560">摺<span class="small">ひだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5061">褶<span class="small">ひだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5067">襞<span class="small">ひだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4726">鐚<span class="small">びた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7383">頟<span class="small">ひたい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="359">題<span class="small">ひたい</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="664">額<span class="small">ひたい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3826">鶲<span class="small">ひたき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4326">沁<span class="small">ひた（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1148">浸<span class="small">ひた（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4377">淹<span class="small">ひた（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4380">涵<span class="small">ひた（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4414">溲<span class="small">ひた（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14317">寖<span class="small">ひた（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15900">濅<span class="small">ひた（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2074">頓<span class="small">ひたぶる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3447">屮<span class="small">ひだり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18837">㔫<span class="small">ひだり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="023">左<span class="small">ひだり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1148">浸<span class="small">ひた（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14317">寖<span class="small">ひた（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15900">濅<span class="small">ひた（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5296">饑<span class="small">ひだる（い）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">ひち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="24336">䢋<span class="small">ヒチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13291">咇<span class="small">ヒチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21771">䏘<span class="small">ヒチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24798">哔<span class="small">ヒチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17545">袐<span class="small">ヒチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25947">筚<span class="small">ヒチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15767">滗<span class="small">ヒチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13475">嗶<span class="small">ヒチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23213">䫾<span class="small">ヒチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15856">潷<span class="small">ヒチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18472">鴄<span class="small">ヒチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19922">㪤<span class="small">ヒチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20105">㮿<span class="small">ヒチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20740">㻶<span class="small">ヒチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4594">篳<span class="small">ヒチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22808">䤉<span class="small">ヒチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18105">鏎<span class="small">ヒチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7502">饆<span class="small">ヒチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23239">䬛<span class="small">ヒチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18414">魓<span class="small">ヒチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18540">鷝<span class="small">ヒチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13237">吡<span class="small">ビチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13982">妼<span class="small">ビチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19113">㚕<span class="small">ビチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15172">柫<span class="small">ビチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21775">䏟<span class="small">ビチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17408">虑<span class="small">ビチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21190">䄶<span class="small">ビチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22117">䖩<span class="small">ビチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17013">綼<span class="small">ビチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23078">䩛<span class="small">ビチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18478">鴓<span class="small">ビチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23342">䮡<span class="small">ビチ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">ひつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="1247">匹<span class="small">ヒツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="595">必<span class="small">ヒツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1260">払<span class="small">ヒツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2543">疋<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25446">毕<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12425">佖<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13237">吡<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24336">䢋<span class="small">ヒツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1536">泌<span class="small">ヒツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6184">拂<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8642">邲<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9417">苾<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11057">怭<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11311">㧙<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13291">咇<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13982">妼<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14291">宓<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19113">㚕<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21771">䏘<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10134">珌<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12007">柲<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15172">柫<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17135">胇<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19564">㢶<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21775">䏟<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24798">哔<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26359">荜<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8815">笔<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16878">笓<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17408">虑<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17545">袐<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19565">㢸<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21190">䄶<span class="small">ヒツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2859">畢<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12552">偪<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22117">䖩<span class="small">ヒツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="399">筆<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2858">弼<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14743">弻<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20349">㳼<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22348">䛑<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25947">筚<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2860">逼<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12720">㓖<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15767">滗<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26843">跸<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27776">𠌫<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7464">飶<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7516">馝<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9629">蓽<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13475">嗶<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14746">彃<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15773">滭<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17013">綼<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23078">䩛<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23213">䫾<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6724">駜<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10135">㻫<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15856">潷<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16187">熚<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18472">鴄<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19922">㪤<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20105">㮿<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6922">鮅<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8072">觱<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17064">罼<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18478">鴓<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20740">㻶<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4594">篳<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4992">謐<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17033">縪<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22808">䤉<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4286">蹕<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8352">䟆<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3820">鵯<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18105">鏎<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23342">䮡<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7358">鞸<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7502">饆<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23239">䬛<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7357">韠<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18383">驆<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18414">魓<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18540">鷝<span class="small">ヒツ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3206">匱<span class="small">ひつ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4197">櫃<span class="small">ひつ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15467">沕<span class="small">ビツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14291">宓<span class="small">ビツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19963">㫘<span class="small">ビツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27358">㸓<span class="small">ビツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14438">峚<span class="small">ビツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="987">密<span class="small">ビツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15640">淧<span class="small">ビツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20341">㳴<span class="small">ビツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21740">䎵<span class="small">ビツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20392">㴵<span class="small">ビツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2109">蜜<span class="small">ビツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9630">蔤<span class="small">ビツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12222">榓<span class="small">ビツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15777">滵<span class="small">ビツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24954">嘧<span class="small">ビツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4182">樒<span class="small">ビツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18478">鴓<span class="small">ビツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20429">㵥<span class="small">ビツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4992">謐<span class="small">ビツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21414">䈼<span class="small">ビツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22808">䤉<span class="small">ビツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4183">櫁<span class="small">ビツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17519">蠠<span class="small">ビツ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11987">匛<span class="small">ひつぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4021">柩<span class="small">ひつぎ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1639">棺<span class="small">ひつぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4131">椁<span class="small">ひつぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4184">槨<span class="small">ひつぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6499">輀<span class="small">ひつぎぐるま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4484">轜<span class="small">ひつぎぐるま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3684">挈<span class="small">ひっさ（げる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="775">提<span class="small">ひっさ（げる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="616">未<span class="small">ひつじ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="427">羊<span class="small">ひつじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2426">坤<span class="small">ひつじさる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13771">堃<span class="small">ひつじさる</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2756">蹄<span class="small">ひづめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8417">蹏<span class="small">ひづめ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">ひて</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3903">旱<span class="small">ひでり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3950">魃<span class="small">ひでり</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">ひと</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="001">一<span class="small">ひと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="041">人<span class="small">ひと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3054">弌<span class="small">ひと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1693">酷<span class="small">ひど（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5023">衫<span class="small">ひとえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24737">单<span class="small">ひとえ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="566">単<span class="small">ひとえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5029">袗<span class="small">ひとえ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5762">單<span class="small">ひとえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10040">裎<span class="small">ひとえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5065">褝<span class="small">ひとえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5064">襌<span class="small">ひとえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5072">襴<span class="small">ひとえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10095">襽<span class="small">ひとえ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1887">偏<span class="small">ひとえ（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3096">俑<span class="small">ひとがた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1378">偶<span class="small">ひとがた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18601">齐<span class="small">ひと（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="680">均<span class="small">ひと（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1776">斉<span class="small">ひと（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6655">亝<span class="small">ひと（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21934">䒭<span class="small">ひと（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6654">斊<span class="small">ひと（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="378">等<span class="small">ひと（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4684">鈞<span class="small">ひと（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5831">齊<span class="small">ひと（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18028">銁<span class="small">ひと（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18038">銞<span class="small">ひと（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21174">䄢<span class="small">ひと（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="001">一<span class="small">ひと（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3054">弌<span class="small">ひと（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1012">壱<span class="small">ひと（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24737">单<span class="small">ひと（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="566">単<span class="small">ひと（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="583">特<span class="small">ひと（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1467">隻<span class="small">ひと（つ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5762">單<span class="small">ひと（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5802">壹<span class="small">ひと（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13893">夁<span class="small">ひと（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3901">朞<span class="small">ひとまわ（り）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5156">眸<span class="small">ひとみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5160">睛<span class="small">ひとみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2072">瞳<span class="small">ひとみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3015">牢<span class="small">ひとや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3324">囹<span class="small">ひとや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10906">窂<span class="small">ひとや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3326">圄<span class="small">ひとや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3327">圉<span class="small">ひとや</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1410">獄<span class="small">ひとや</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3418">孑<span class="small">ひと（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="782">独<span class="small">ひと（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1394">孤<span class="small">ひと（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="583">特<span class="small">ひと（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6255">獨<span class="small">ひと（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22172">䗳<span class="small">ひとりむし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26355">茕<span class="small">ひとりもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20497">㷀<span class="small">ひとりもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16116">焭<span class="small">ひとりもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4916">煢<span class="small">ひとりもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18729">㒌<span class="small">ひとりもの</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">ひな</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3097">俚<span class="small">ひな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18210">雏<span class="small">ひな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5208">鄙<span class="small">ひな</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2611">雛<span class="small">ひな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7148">鶵<span class="small">ひな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7955">阳<span class="small">ひなた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7956">阦<span class="small">ひなた</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="426">陽<span class="small">ひなた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18240">霷<span class="small">ひなた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5208">鄙<span class="small">ひな（びる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts21">
                    <h3 class="ttl_while">ひね</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1509">陳<span class="small">ひ（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17878">軙<span class="small">ひ（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13820">塦<span class="small">ひ（ねる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3673">拈<span class="small">ひね（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2084">捻<span class="small">ひね（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3699">捫<span class="small">ひね（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2774">撚<span class="small">ひね（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts22">
                    <h3 class="ttl_while">ひの</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1886">丙<span class="small">ひのえ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2227">桧<span class="small">ひのき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2226">檜<span class="small">ひのき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3944">閘<span class="small">ひのくち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4923">熨<span class="small">ひのし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3934">暘<span class="small">ひので</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="369">丁<span class="small">ひのと</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts23">
                    <h3 class="ttl_while">ひは</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1599">炉<span class="small">ひばち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6246">爐<span class="small">ひばち</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts24">
                    <h3 class="ttl_while">ひひ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5104">狒<span class="small">ひひ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5600">皴<span class="small">ひび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5601">皹<span class="small">ひび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5602">皸<span class="small">ひび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8851">篊<span class="small">ひび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3976">罅<span class="small">ひび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27142">鎼<span class="small">ひび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3051">韵<span class="small">ひびき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1608">韻<span class="small">ひびき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4607">籟<span class="small">ひび（き）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7369">响<span class="small">ひび（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3315">嚮<span class="small">ひび（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1067">響<span class="small">ひび（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6418">響<span class="small">ひび（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2219">蛾<span class="small">ひひる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9832">䖸<span class="small">ひひる</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts25">
                    <h3 class="ttl_while">ひま</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="8654">郄<span class="small">ひま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5205">郤<span class="small">ひま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1645">閑<span class="small">ひま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1029">暇<span class="small">ひま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1990">隙<span class="small">ひま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5523">遑<span class="small">ひま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7960">隟<span class="small">ひま</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts26">
                    <h3 class="ttl_while">ひむ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="2219">蛾<span class="small">ひむし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9832">䖸<span class="small">ひむし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22172">䗳<span class="small">ひむし</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts27">
                    <h3 class="ttl_while">ひめ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="19127">㚦<span class="small">ひめ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1539">姫<span class="small">ひめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14049">娦<span class="small">ひめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23947">姬<span class="small">ひめ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1952">媛<span class="small">ひめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25065">嫔<span class="small">ひめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3413">嬪<span class="small">ひめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2891">僻<span class="small">ひめがき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="971">秘<span class="small">ひ（める）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6010">祕<span class="small">ひ（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts28">
                    <h3 class="ttl_while">ひも</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2526">紐<span class="small">ひも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9152">䋝<span class="small">ひも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2506">綬<span class="small">ひも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4820">纓<span class="small">ひも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4810">繙<span class="small">ひもと（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4217">胙<span class="small">ひもろぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4306">膰<span class="small">ひもろぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4931">燔<span class="small">ひもろぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11908">㸋<span class="small">ひもろぎ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts29">
                    <h3 class="ttl_while">ひや</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="633">冷<span class="small">ひ（や）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="633">冷<span class="small">ひ（やかす）</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="070">百<span class="small">ヒャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17128">肑<span class="small">ヒャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3087">佰<span class="small">ヒャク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2825">柏<span class="small">ヒャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14929">挀<span class="small">ヒャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17136">胉<span class="small">ヒャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6066">栢<span class="small">ヒャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21646">䍇<span class="small">ヒャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20771">㼣<span class="small">ヒャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20935">㿰<span class="small">ヒャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16991">絔<span class="small">ヒャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22506">䞟<span class="small">ヒャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17013">綼<span class="small">ヒャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14712">廦<span class="small">ヒャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24956">噼<span class="small">ヒャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14884">憵<span class="small">ヒャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20248">㱸<span class="small">ヒャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20431">㵨<span class="small">ヒャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16775">礕<span class="small">ヒャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5067">襞<span class="small">ヒャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16975">糪<span class="small">ヒャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17046">繴<span class="small">ヒャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21621">䌟<span class="small">ヒャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18588">鼊<span class="small">ヒャク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="068">白<span class="small">ビャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17212">苩<span class="small">ビャク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2825">柏<span class="small">ビャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6066">栢<span class="small">ビャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24261">㿟<span class="small">ビャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16124">焷<span class="small">ビャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23548">䳆<span class="small">ビャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20248">㱸<span class="small">ビャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21853">䑀<span class="small">ビャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17046">繴<span class="small">ビャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21621">䌟<span class="small">ビャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23129">䪙<span class="small">ビャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3967">闢<span class="small">ビャク</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="633">冷<span class="small">ひ（やす）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts30">
                    <h3 class="ttl_while">ひゆ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="9463">莧<span class="small">ひゆ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20190">㰯<span class="small">ヒュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23226">䬌<span class="small">ヒュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18305">飍<span class="small">ヒュ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15645">淲<span class="small">ビュ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2861">彪<span class="small">ヒュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15645">淲<span class="small">ヒュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20190">㰯<span class="small">ヒュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15774">滮<span class="small">ヒュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18479">鴔<span class="small">ヒュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22982">䧨<span class="small">ヒュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23226">䬌<span class="small">ヒュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18496">鵖<span class="small">ヒュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18305">飍<span class="small">ヒュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5676">驫<span class="small">ヒュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19306">㞁<span class="small">ビュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19583">㣎<span class="small">ビュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21585">䋷<span class="small">ビュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4798">繆<span class="small">ビュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2862">謬<span class="small">ビュウ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts31">
                    <h3 class="ttl_while">ひよ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3820">鵯<span class="small">ひよ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5744">冫<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12709">仌<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13167">勽<span class="small">ヒョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="400">氷<span class="small">ヒョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="410">平<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5808">冰<span class="small">ヒョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="605">兵<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2494">杓<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12427">伻<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12927">匉<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18766">㓈<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27851">𣏐<span class="small">ヒョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="401">表<span class="small">ヒョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1228">拍<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3167">凭<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3552">怦<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5334">苹<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13918">奅<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18186">陃<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18823">㔙<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19151">㛁<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12492">俜<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14688">庰<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17139">胓<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18702">㑟<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23946">姘<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25376">标<span class="small">ヒョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="794">俵<span class="small">ヒョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1249">浜<span class="small">ヒョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2864">豹<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6035">髟<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9486">莩<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10658">砯<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14833">悙<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15181">栤<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15589">涄<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16653">眪<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16850">窉<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19795">㧸<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20708">㻂<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20767">㼞<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21659">䍖<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22266">䙳<span class="small">ヒョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="596">票<span class="small">ヒョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2861">彪<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5304">殍<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11387">掤<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13928">奟<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14073">婊<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15633">淜<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17543">袌<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19797">㧼<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20495">㶾<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20655">㹾<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21678">䍬<span class="small">ヒョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="795">評<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4487">馮<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11854">脿<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12351">猋<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14313">寎<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16113">焩<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16515">琕<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20197">㰶<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20994">䀻<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21366">䈂<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24106">艵<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24131">蛢<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24292">䑫<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3184">剽<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10048">裱<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12594">僄<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12862">勡<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15736">溤<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16605">痭<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17655">誁<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18169">閛<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21002">䁃<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24308">䔊<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25062">嫑<span class="small">ヒョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1540">漂<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3406">嫖<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3616">慓<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7433">颮<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9631">蔈<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11459">摽<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12595">徱<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12730">凴<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13490">嘌<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13494">嘐<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13833">墂<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14649">幖<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14765">彯<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19410">㟽<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22363">䛣<span class="small">ヒョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="597">標<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7245">麃<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11005">慿<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11898">膘<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15828">潎<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16188">熛<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17674">諘<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19999">㬓<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22031">䔸<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3622">憑<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3853">鮃<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7705">錶<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10069">褾<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10430">瘭<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10599">瞟<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10737">磦<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10880">䅺<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19429">㠒<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20133">㯡<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20247">㱶<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20419">㵗<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20796">㼼<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22488">䞄<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23688">䶂<span class="small">ヒョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2863">瓢<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4799">縹<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7436">颷<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8899">篻<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9240">翲<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9699">薸<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9915">螵<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12659">儦<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15085">旚<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15301">檦<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16931">簈<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17613">覮<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18501">鵧<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20143">㯱<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20440">㵱<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21037">䁭<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21757">䏇<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9707">藨<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15937">瀌<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17693">謤<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17992">醥<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18496">鵖<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7796">鏢<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7902">闝<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11925">臕<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16249">爂<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16339">犥<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17773">贆<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18566">麔<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19017">㘐<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22866">䥋<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4368">飄<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6349">飃<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10486">皫<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10897">穮<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14795">忁<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18292">顠<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22074">䕯<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4365">飆<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4506">驃<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7446">飇<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7447">飈<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18413">魒<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23109">䪁<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25629">飊<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3893">鰾<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23614">䴩<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7849">鑣<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7850">䮽<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5676">驫<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18248">靐<span class="small">ヒョウ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23011">䨌<span class="small">ひょう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3979">雹<span class="small">ひょう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27443">䨔<span class="small">ひょう</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="410">平<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24560">仦<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12390">仯<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14345">尥<span class="small">ビョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1279">妙<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13251">吵<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14346">尦<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14673">庒<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19458">㠺<span class="small">ビョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1541">苗<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4014">杪<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11772">䏚<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13280">呯<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14675">庙<span class="small">ビョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="403">秒<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3443">屏<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5148">眇<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12492">俜<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14688">庰<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16473">玅<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16485">玶<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17139">胓<span class="small">ビョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="402">病<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15181">栤<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20702">㺸<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20708">㻂<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20767">㼞<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21956">䓑<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22111">䖢<span class="small">ビョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1248">描<span class="small">ビョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1871">猫<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3522">弸<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5377">萍<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6488">屛<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8095">訬<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13440">喵<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17428">蚲<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17812">趽<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19669">㥊<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23981">庿<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4396">渺<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14639">幈<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15649">淼<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17891">軳<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20197">㰶<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21366">䈂<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24131">蛢<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10586">瞄<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16605">痭<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16832">稝<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22971">䧛<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9094">緢<span class="small">ビョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2865">廟<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2866">鋲<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4786">緲<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8285">貓<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13510">嘭<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14877">憉<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16919">篎<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21166">䄘<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21235">䅭<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22147">䗒<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2867">錨<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18061">錋<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20419">㵗<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21032">䁧<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5435">藐<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16583">甏<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16931">簈<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17493">螷<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18501">鵧<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20143">㯱<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21757">䏇<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7119">鶓<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16249">爂<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18566">麔<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23421">䰃<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18292">顠<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18602">齙<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24175">騯<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23614">䴩<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17523">蠯<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18149">鑤<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18454">鱙<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18248">靐<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23050">䨻<span class="small">ビョウ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4027">柝<span class="small">ひょうしぎ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5859">皀<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22945">䦼<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19027">㘠<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10311">畐<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12552">偪<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3596">愎<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10469">皕<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11144">愊<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13781">堛<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14964">揊<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15702">湢<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22967">䧗<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="2860">逼<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11874">腷<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12161">楅<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16140">煏<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10867">稫<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11460">㨽<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23213">䫾<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17844">踾<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20533">㷶<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20833">㽬<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23341">䮠<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7009">鰏<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10337">疈<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18518">鶝<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23109">䪁<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23650">䵗<span class="small">ヒョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21006">䁇<span class="small">ビョク</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18210">雏<span class="small">ひよこ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2611">雛<span class="small">ひよこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7148">鶵<span class="small">ひよこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3820">鵯<span class="small">ひよどり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2950">酉<span class="small">ひよみのとり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8727">丣<span class="small">ひよみのとり</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts32">
                    <h3 class="ttl_while">ひら</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="2136">片<span class="small">ひら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="410">平<span class="small">ひら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="985">枚<span class="small">ひら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7022">鰣<span class="small">ひら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4730">鐐<span class="small">ひらがね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12399">开<span class="small">ひら（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24773">发<span class="small">ひら（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1176">拓<span class="small">ひら（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1867">披<span class="small">ひら（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3672">拆<span class="small">ひら（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="391">発<span class="small">ひら（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3910">昜<span class="small">ひら（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1938">挨<span class="small">ひら（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13365">唘<span class="small">ひら（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1380">啓<span class="small">ひら（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13396">啔<span class="small">ひら（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13400">啟<span class="small">ひら（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="258">開<span class="small">ひら（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5749">發<span class="small">ひら（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5318">辟<span class="small">ひら（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25224">彂<span class="small">ひら（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25338">摆<span class="small">ひら（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25341">摊<span class="small">ひら（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25425">閳<span class="small">ひら（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1414">墾<span class="small">ひら（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17681">諬<span class="small">ひら（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3738">擺<span class="small">ひら（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15042">擹<span class="small">ひら（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3969">闡<span class="small">ひら（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3967">闢<span class="small">ひら（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3743">攤<span class="small">ひら（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12399">开<span class="small">ひら（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="258">開<span class="small">ひら（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5651">豁<span class="small">ひら（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3967">闢<span class="small">ひら（ける）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3653">扁<span class="small">ひら（たい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3853">鮃<span class="small">ひらめ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2648">閃<span class="small">ひらめ（く）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts33">
                    <h3 class="ttl_while">ひる</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="124">午<span class="small">ひる</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="189">昼<span class="small">ひる</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6208">晝<span class="small">ひる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2488">蛭<span class="small">ひる</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2456">蒜<span class="small">ひる</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="839">干<span class="small">ひ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="413">放<span class="small">ひ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2815">簸<span class="small">ひ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1569">翻<span class="small">ひるがえ（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3052">飜<span class="small">ひるがえ（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2841">幡<span class="small">ひるがえ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5610">翩<span class="small">ひるがえ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1569">翻<span class="small">ひるがえ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4368">飄<span class="small">ひるがえ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6349">飃<span class="small">ひるがえ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3052">飜<span class="small">ひるがえ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3906">昃<span class="small">ひるす（ぎ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15092">昗<span class="small">ひるす（ぎ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2321">怯<span class="small">ひる（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts34">
                    <h3 class="ttl_while">ひれ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="9885">螧<span class="small">ひれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2283">鰭<span class="small">ひれ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts35">
                    <h3 class="ttl_while">ひろ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3070">仞<span class="small">ひろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3071">仭<span class="small">ひろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25092">寻<span class="small">ひろ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1157">尋<span class="small">ひろ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="126">広<span class="small">ひろ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2344">弘<span class="small">ひろ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2089">汎<span class="small">ひろ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2395">宏<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4323">汪<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4330">泛<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19268">㝑<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25357">旷<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11603">㫄<span class="small">ひろ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="428">洋<span class="small">ひろ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2224">恢<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3927">昿<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5350">茫<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5581">衍<span class="small">ひろ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2402">浩<span class="small">ひろ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2407">紘<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3780">旁<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3654">扈<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4252">曼<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4377">淹<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16096">焈<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20018">㬶<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20350">㳽<span class="small">ひろ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="591">博<span class="small">ひろ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1915">裕<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3787">敞<span class="small">ひろ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1646">寛<span class="small">ひろ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1861">漠<span class="small">ひろ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4404">滉<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4408">溥<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5877">愽<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9045">綋<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11747">㬅<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2239">廓<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4925">煕<span class="small">ひろ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6420">寬<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20406">㵆<span class="small">ひろ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4924">熙<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4926">熈<span class="small">ひろ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6175">廣<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15873">澔<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27453">䦢<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3963">闊<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3964">濶<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5651">豁<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3926">曠<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4450">瀚<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4456">瀰<span class="small">ひろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27891">𤄃<span class="small">ひろ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="321">拾<span class="small">ひろ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5034">袤<span class="small">ひろが（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="126">広<span class="small">ひろ（がる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2088">氾<span class="small">ひろ（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25262">扩<span class="small">ひろ（がる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="835">拡<span class="small">ひろ（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5581">衍<span class="small">ひろ（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11299">㨯<span class="small">ひろ（がる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6175">廣<span class="small">ひろ（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5928">擴<span class="small">ひろ（がる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="126">広<span class="small">ひろ（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25262">扩<span class="small">ひろ（げる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="835">拡<span class="small">ひろ（げる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="953">展<span class="small">ひろ（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2239">廓<span class="small">ひろ（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11299">㨯<span class="small">ひろ（げる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6175">廣<span class="small">ひろ（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5928">擴<span class="small">ひろ（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19333">㞡<span class="small">ひろ（げる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="126">広<span class="small">ひろ（まる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6175">廣<span class="small">ひろ（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25425">閳<span class="small">ひろ（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3969">闡<span class="small">ひろ（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="126">広<span class="small">ひろ（める）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2344">弘<span class="small">ひろ（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="591">博<span class="small">ひろ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5877">愽<span class="small">ひろ（める）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6175">廣<span class="small">ひろ（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts36">
                    <h3 class="ttl_while">ひわ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3831">鶸<span class="small">ひわ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts37">
                    <h3 class="ttl_while">ひん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="15141">朩<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27854">𣎳<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15422">汃<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2871">牝<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12402">份<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8637">邠<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10124">玭<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10127">玢<span class="small">ヒン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="404">品<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16717">砏<span class="small">ヒン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1249">浜<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14049">娦<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25091">宾<span class="small">ヒン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="796">貧<span class="small">ヒン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2868">彬<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6112">梹<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19379">㟗<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="2869">斌<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12655">傧<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15219">椕<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21283">䆥<span class="small">ヒン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5557">稟<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5558">禀<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10192">㻞<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12159">榀<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21815">䐔<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25065">嫔<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25340">摈<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25578">滨<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27365">㺍<span class="small">ヒン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6414">賓<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6853">髩<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8264">豩<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8313">賔<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25444">殡<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25796">瑸<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26321">膑<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27671">槟<span class="small">ヒン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1873">賓<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12654">儐<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26375">頻<span class="small">ヒン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1872">頻<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3413">嬪<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3736">擯<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5753">濱<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6854">鬂<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8270">豳<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9720">薲<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16459">獱<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17411">虨<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19498">㡦<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22985">䧬<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25602">濵<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4199">檳<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5309">殯<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6811">臏<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10250">璸<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16618">癛<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20150">㯽<span class="small">ヒン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2870">瀕<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5443">蘋<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10613">矉<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12341">嚬<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16777">礗<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16843">穦<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18234">霦<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4813">繽<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9953">蠙<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18522">鶣<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20160">㰋<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21720">䎙<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26022">髌<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26025">鬓<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22295">䚔<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7842">鑌<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23007">䨈<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18297">顮<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18330">馪<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4654">鬢<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5143">顰<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6810">髕<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18389">驞<span class="small">ヒン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6690">乒<span class="small">ピン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10958">忟<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13126">冺<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13144">刡<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19352">㞶<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24008">汶<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3915">旻<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4341">泯<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5993">岷<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9418">苠<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10125">玟<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10957">忞<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11312">抿<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11639">旼<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13989">姄<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14811">怋<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18583">黾<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19559">㢯<span class="small">ビン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="609">便<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10136">珉<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11546">敃<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11551">勄<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16641">盷<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16644">盿<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16713">砇<span class="small">ビン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1250">敏<span class="small">ビン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2568">秤<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4750">紊<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5588">罠<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21084">䂥<span class="small">ビン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="796">貧<span class="small">ビン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1874">瓶<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6112">梹<span class="small">ビン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6385">敏<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14467">崏<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14949">捪<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15655">渂<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16885">笢<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21547">䋋<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22464">䝧<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3945">閔<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15703">湣<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16517">琘<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16520">琝<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19393">㟩<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19397">㟭<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19809">㨉<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22572">䟨<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22659">䡑<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="24018">渳<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3595">愍<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3849">黽<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10137">瑉<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10274">甁<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10405">痻<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11709">暋<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15064">敯<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16746">碈<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18015">鈱<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19991">㬆<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6853">髩<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7878">閩<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9095">緍<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19703">㥸<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21018">䁕<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21111">䃉<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23153">䪸<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27671">槟<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3623">憫<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4789">緡<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10998">慜<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12642">僶<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15843">潣<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18469">鳼<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18476">鴍<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18059">錉<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18480">鴖<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21753">䏃<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26375">頻<span class="small">ビン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1872">頻<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6854">鬂<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18082">鍲<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18179">闅<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4199">檳<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16936">簢<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20150">㯽<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18522">鶣<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20160">㰋<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21720">䎙<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26025">鬓<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17519">蠠<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7045">鰵<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="23504">䲄<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="27493">䡻<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4654">鬢<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5143">顰<span class="small">ビン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18389">驞<span class="small">ビン</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13864">墰<span class="small">びん</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13868">墵<span class="small">びん</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3356">壜<span class="small">びん</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3974">罎<span class="small">びん</span></a></li>
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