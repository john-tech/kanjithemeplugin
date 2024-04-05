<?php
/*
 * Template Name: Yomi7
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
               <h1 class="ttl_main">音訓検索「き」</h1>
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
               <p>「き」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>き</option>
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
                              <option value="yomi42">れ</option>
                              <option value="yomi43">ろ</option>
                              <option value="yomi44">わ</option>
                              <option value="yomi45">を</option>
                         </select>
                    </div>
               </div><!--search_narrowdown-->
               <div class="search_data yomi_menu">
                    <ul class="search_menu2">
                         <li id="parts1_menu"><a href="#parts1">き</a></li>
                         <li id="parts2_menu"><a href="#parts2">きい</a></li>
                         <li id="parts3_menu"><a href="#parts3">きえ</a></li>
                         <li id="parts4_menu"><a href="#parts4">きお</a></li>
                         <li id="parts5_menu"><a href="#parts5">きく</a></li>
                         <li id="parts6_menu"><a href="#parts6">きこ</a></li>
                         <li id="parts7_menu"><a href="#parts7">きさ</a></li>
                         <li id="parts8_menu"><a href="#parts8">きし</a></li>
                         <li id="parts9_menu"><a href="#parts9">きす</a></li>
                         <li id="parts10_menu"><a href="#parts10">きせ</a></li>
                         <li id="parts11_menu"><a href="#parts11">きそ</a></li>
                         <li id="parts12_menu"><a href="#parts12">きた</a></li>
                         <li id="parts13_menu"><a href="#parts13">きち</a></li>
                         <li id="parts14_menu"><a href="#parts14">きつ</a></li>
                         <li id="parts15_menu"><a href="#parts15">きぬ</a></li>
                         <li id="parts16_menu"><a href="#parts16">きね</a></li>
                         <li id="parts17_menu"><a href="#parts17">きの</a></li>
                         <li id="parts18_menu"><a href="#parts18">きは</a></li>
                         <li id="parts19_menu"><a href="#parts19">きひ</a></li>
                         <li id="parts20_menu"><a href="#parts20">きま</a></li>
                         <li id="parts21_menu"><a href="#parts21">きみ</a></li>
                         <li id="parts22_menu"><a href="#parts22">きめ</a></li>
                         <li id="parts23_menu"><a href="#parts23">きも</a></li>
                         <li id="parts24_menu"><a href="#parts24">きや</a></li>
                         <li id="parts25_menu"><a href="#parts25">きゆ</a></li>
                         <li id="parts26_menu"><a href="#parts26">きよ</a></li>
                         <li id="parts27_menu"><a href="#parts27">きら</a></li>
                         <li id="parts28_menu"><a href="#parts28">きり</a></li>
                         <li id="parts29_menu"><a href="#parts29">きる</a></li>
                         <li id="parts30_menu"><a href="#parts30">きれ</a></li>
                         <li id="parts31_menu"><a href="#parts31">きろ</a></li>
                         <li id="parts32_menu"><a href="#parts32">きわ</a></li>
                         <li id="parts33_menu"><a href="#parts33">きん</a></li>
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
                    <h3 class="ttl_while">き</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="3165">几<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="864">己<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2001">乞<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6588">丌<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5687">气<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6205">旡<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12691">亓<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="722">示<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3210">卉<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12741">刉<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14286">宄<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14754">归<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15421">氿<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19337">㞦<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20302">㲹<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22735">䢳<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24777">叽<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="014">気<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="058">虫<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="842">危<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="844">机<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1357">企<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1862">肌<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1974">伎<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6597">㐂<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9368">芑<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12746">刏<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12820">攰<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13945">妀<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14382">屺<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15143">朹<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16000">灳<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17933">邔<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18750">㒫<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18881">㕧<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19127">㚦<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19346">㞯<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25107">岂<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25785">玑<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="105">汽<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="473">希<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1361">忌<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1363">岐<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3331">圻<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4006">杞<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4328">沂<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5815">弃<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9382">芪<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9383">芰<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10113">玘<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11031">忯<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13235">吚<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13247">吱<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13265">呚<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13665">坖<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14398">岓<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14668">庋<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14807">忾<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15439">汥<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16631">盀<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19459">㠻<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23728">龟<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25846">矶<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="470">季<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="678">居<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1047">奇<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1049">祈<span class="small">キ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2272">其<span class="small">キ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2278">祁<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3062">亟<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12439">佹<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12877">歧<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13277">呬<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13279">呮<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14802">忥<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14815">怬<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14916">抧<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15486">泋<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16640">盵<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17132">肵<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17412">虮<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19146">㚻<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19269">㝒<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19359">㞿<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20176">㰟<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21182">䄫<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22707">䢎<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23811">匦<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24047">炁<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25115">岿<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="472">紀<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1358">軌<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3248">咥<span class="small">キ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3368">奎<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4024">枳<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4552">癸<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5861">皈<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6159">竒<span class="small">キ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6395">祈<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7927">陒<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8475">䡄<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9767">虺<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10011">衹<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10350">疧<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11067">恑<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11538">攱<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12464">俙<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12998">芔<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13306">咦<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13698">垍<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13709">垚<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14023">姽<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14352">尯<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14436">峗<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14442">峞<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15518">洈<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15522">洎<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17223">茤<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18873">㕟<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19322">㞒<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19323">㞓<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19776">㧡<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19785">㧪<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20183">㰨<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21941">䒻<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22745">䣀<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23929">垝<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24267">䃽<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="104">記<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="106">帰<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="266">起<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1048">鬼<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1362">既<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1539">姫<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1649">飢<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3101">倚<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3178">剞<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3258">唏<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3446">屓<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5478">耆<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5646">豈<span class="small">キ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5688">氣<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9464">莃<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9773">蚑<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9774">蚔<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9775">蚚<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11083">悕<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11539">㩻<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11600">旂<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12501">倛<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12502">倠<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12770">剘<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14036">娓<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14055">娭<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14685">庪<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15564">浠<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16065">烜<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16384">狶<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18632">巸<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18705">㑧<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19163">㛓<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19377">㟓<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19775">㧘<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19948">㫅<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20586">㸵<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21472">䉻<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25388">桤<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25681">牺<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26399">㑫<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="669">規<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="670">基<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="671">寄<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1703">崎<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1975">亀<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2004">頃<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2010">埼<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3578">悸<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3691">掎<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3916">晞<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4253">跂<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4361">馗<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4563">欷<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5934">淇<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7370">頄<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7936">陭<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8061">觖<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8483">軝<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9499">萁<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10541">眭<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11617">旣<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12988">匭<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13375">唭<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14060">娸<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14075">婍<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14076">婎<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14635">帺<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14778">徛<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14957">掑<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15192">桸<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15204">梞<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16074">烯<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16089">焁<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16096">焈<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16396">猉<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16511">琋<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16789">祪<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17069">羛<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19311">㞆<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19382">㟚<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19389">㟢<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19451">㠱<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19672">㥍<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19677">㥓<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19889">㩽<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20342">㳵<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20648">㹷<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20705">㺿<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21972">䓧<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22331">䚿<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22452">䝘<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22501">䞚<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22561">䟚<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22654">䡋<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23947">姬<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24048">焏<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27875">𣪘<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="267">期<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="469">喜<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="843">揮<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="845">貴<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1051">幾<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1360">棋<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1366">欺<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1805">堕<span class="small">キ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2279">稀<span class="small">キ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2282">葵<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3038">棊<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3277">喟<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3704">揆<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3901">朞<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4564">欹<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5517">逵<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6085">嵜<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8038">䂓<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8678">鄈<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9815">蛫<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10166">琦<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10167">琪<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10557">睎<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10977">惎<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11540">攲<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11559">敧<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11618">既<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11691">晷<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12769">㱕<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13906">夡<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14123">媈<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15677">湀<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16315">犄<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16412">猤<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18711">㑶<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19064">㙓<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19330">㞛<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19504">㡬<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19890">㩾<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20234">㱦<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20718">㻑<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20871">㾙<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21342">䇧<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21681">䍯<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21802">䐀<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21806">䐅<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22343">䛋<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22716">䢜<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22994">䧶<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23243">䬣<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24104">臮<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24180">﨑<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24226">㫷<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24917">喹<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25038">媯<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25510">溈<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27107">鈢<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27843">𢰤<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1359">棄<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1682">碁<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1976">毀<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3599">愾<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3601">愧<span class="small">キ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3923">暉<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4264">跪<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4958">詭<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5452">畸<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5639">祺<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5899">稘<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6068">碕<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7242">麂<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7372">頍<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7373">頎<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7958">隑<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7959">隓<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8381">跬<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8382">䞨<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9753">䖒<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10384">痵<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10565">睢<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11151">媿<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11225">戣<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12137">楎<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12692">兾<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12940">毁<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14131">媐<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14856">愭<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15063">敮<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15235">楑<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15760">滊<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16131">煃<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16135">煇<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17570">裿<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17571">褀<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17600">覅<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17621">觤<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18840">㔳<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20201">㰻<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20510">㷐<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20603">㹆<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20886">㾨<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20937">㿲<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21007">䁉<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21160">䄎<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21562">䋟<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21817">䐖<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21987">䓽<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21995">䔇<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22126">䖷<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22299">䚙<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23070">䩓<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23302">䭶<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24264">䁈<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25010">塈<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="471">旗<span class="small">キ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2281">箕<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3131">僖<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3206">匱<span class="small">キ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4771">綺<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4925">煕<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5866">榿<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6872">鬾<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6873">鬿<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8141">誋<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8142">誒<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8263">豨<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8391">跽<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9058">綦<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9059">綨<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9608">蔇<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9852">蜞<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9853">䗁<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10578">睽<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12606">僛<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12607">僟<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13201">厬<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14186">嫢<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14646">幑<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15008">摫<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15108">暣<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15222">椲<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16173">熂<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16327">犔<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16794">禈<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16835">稩<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16964">粸<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17011">綥<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17445">蜝<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18332">馶<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19839">㨳<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21233">䅩<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21346">䇫<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21891">䑴<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22365">䛥<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22479">䝸<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22585">䟸<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22835">䤥<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23308">䭼<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23440">䰙<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23527">䲪<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23934">墍<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24382">煒<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25415">魢<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27714">𥔎<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="475">器<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1050">輝<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1977">畿<span class="small">キ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2273">嬉<span class="small">キ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2275">槻<span class="small">キ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2276">毅<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3776">麾<span class="small">キ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4924">熙<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4926">熈<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5767">墮<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6057">噐<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8039">槼<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8070">觭<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8151">諆<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8398">踑<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8399">踦<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8502">輢<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9234">翬<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9643">蕢<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10050">褘<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10874">穊<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11000">憘<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11469">撝<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11470">撌<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12200">槣<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13512">嘳<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13517">嘻<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13522">噅<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13532">噕<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13544">噧<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13863">墯<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14209">嬀<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15029">撱<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15110">暨<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15836">潙<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16547">璂<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17672">諅<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17838">踩<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17870">躸<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18467">鳺<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19079">㙨<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19423">㠌<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19954">㫎<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20674">㺔<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20957">䀈<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21022">䁛<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21240">䅲<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22379">䛴<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22981">䧦<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23528">䲬<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23910">嘰<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24091">禠<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="474">機<span class="small">キ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2280">窺<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3151">冀<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3932">曁<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4928">熹<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5670">龜<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6089">憙<span class="small">キ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6379">器<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6596">歖<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6937">䱈<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7389">頯<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7688">錡<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7689">錤<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8293">䝿<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9286">聭<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10220">璣<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11719">暿<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12233">樻<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12956">毇<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16209">熺<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16688">瞡<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16801">禥<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17484">螝<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18577">黖<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19123">㚡<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20138">㯦<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21029">䁤<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21599">䌆<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22386">䛼<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22605">䠏<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22607">䠑<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22806">䤆<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23262">䬽<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26249">凞<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26510">蕲<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1365">犠<span class="small">キ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2274">徽<span class="small">キ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2277">磯<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3859">鮨<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4937">燬<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4990">諱<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5462">覬<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5631">虧<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5642">禧<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6265">瞶<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7310">䩭<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7401">䫏<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8882">簋<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10744">䃣<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10815">禨<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10883">穖<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11738">㬢<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12266">檓<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15915">濝<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16233">燨<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16689">瞦<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16932">簊<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17363">藄<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17688">謉<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18081">鍨<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18624">凞<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19095">㙺<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19858">㩓<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20210">㱆<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21508">䊠<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22057">䕚<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22254">䙡<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23324">䮎<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23552">䳏<span class="small">キ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1364">騎<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4197">櫃<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4501">騏<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4595">簣<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4881">釐<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6229">歸<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6877">魌<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7153">鵋<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7972">隳<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8423">蹞<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9130">繥<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9923">蟣<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9924">蟢<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12087">檱<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15310">櫀<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15935">瀈<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17103">耭<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17507">蟡<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17972">鄿<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18089">鎎<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18497">鵗<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19237">㜯<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19870">㩣<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22064">䕤<span class="small">キ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2284">麒<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5004">譏<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5290">餽<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6750">騤<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6779">蘎<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6973">鯕<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7150">鵸<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7152">䳢<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7494">餼<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7690">䥓<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7900">闚<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8194">譆<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9714">蘄<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11214">懻<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15325">櫭<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17059">罊<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17744">豷<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18440">鯚<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18510">鶀<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19877">㩬<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20748">㼄<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22402">䜐<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22492">䞈<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22542">䟇<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22816">䤒<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23190">䫥<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23425">䰇<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23724">䶯<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3925">曦<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6250">犧<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6846">鬐<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7805">鐖<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8207">譭<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13584">嚱<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14260">孂<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14588">巇<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16261">爔<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16939">籄<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18122">鐀<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18207">隵<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18372">騩<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19099">㚀<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20167">㰕<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20686">㺣<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22070">䕫<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23573">䳫<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2283">鰭<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5296">饑<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5297">饋<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6869">鬹<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7328">鞼<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7329">鞿<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14264">孈<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14591">巋<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17395">蘬<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17399">蘳<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18379">騹<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18628">夔<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20549">㸍<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21054">䂀<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23695">䶏<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26524">蘷<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5597">羇<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6881">魕<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7032">鰴<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7033">䲅<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7837">鑎<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16471">玂<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18242">霼<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18451">鱀<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18599">齂<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23043">䨳<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23396">䯣<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23432">䰎<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9193">覉<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18611">齮<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23508">䲊<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23709">䶞<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24387">虁<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5598">羈<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6489">屭<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18631">巙<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23675">䵱<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6311">覊<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16343">犪<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4515">驥<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18153">鑴<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24365">䭨<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26203">龮<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17867">躨<span class="small">キ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27814">𣡽<span class="small">キ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="918">寸<span class="small">き</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="073">木<span class="small">き</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="043">生<span class="small">き</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4899">氛<span class="small">き</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="912">城<span class="small">き</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4027">柝<span class="small">き</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25384">树<span class="small">き</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="132">黄<span class="small">き</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/21958">䓗<span class="small">き</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2668">葱<span class="small">き</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6466">黃<span class="small">き</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9621">蔥<span class="small">き</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="895">樹<span class="small">き</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13182">厃<span class="small">ギ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="722">示<span class="small">ギ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1974">伎<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17933">邔<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25260">戏<span class="small">ギ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="672">技<span class="small">ギ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1363">岐<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2285">妓<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4328">沂<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9382">芪<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15439">汥<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18623">冝<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23955">宐<span class="small">ギ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1652">宜<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14924">拟<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16360">狋<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19359">㞿<span class="small">ギ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2286">祇<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13698">垍<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14023">姽<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14436">峗<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15518">洈<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17223">茤<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19273">㝖<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19785">㧪<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22745">䣀<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19775">㧘<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21472">䉻<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21945">䓄<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25681">牺<span class="small">ギ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1650">偽<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4253">跂<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5934">淇<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5940">萓<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8255">豙<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8588">逘<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10666">硊<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14635">帺<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14957">掑<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16396">猉<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16408">猚<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17069">羛<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19382">㟚<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19451">㠱<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19889">㩽<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22501">䞚<span class="small">ギ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1366">欺<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7546">鈘<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12791">㓷<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15677">湀<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19064">㙓<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19890">㩾<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22994">䧶<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24104">臮<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25038">媯<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25402">椬<span class="small">ギ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="673">義<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2219">蛾<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3469">嵬<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8152">竩<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9832">䖸<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14279">孴<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14856">愭<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15235">楑<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21353">䇵<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21562">䋟<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23070">䩓<span class="small">ギ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="846">疑<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3206">匱<span class="small">ギ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5804">僞<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14186">嫢<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16964">粸<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17011">綥<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18332">馶<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21233">䅩<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21891">䑴<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22479">䝸<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22585">䟸<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22835">䤥<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23440">䰙<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23441">䰚<span class="small">ギ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1052">儀<span class="small">ギ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1053">戯<span class="small">ギ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2288">誼<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7382">頠<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14209">嬀<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16547">璂<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17672">諅<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18866">㕒<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21240">䅲<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23528">䲬<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24091">禠<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3475">嶬<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5130">羲<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7688">錡<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7968">䧧<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9888">螘<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11232">戱<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12646">儗<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12792">劓<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14235">嬟<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19432">㠕<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19433">㠖<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22605">䠏<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22607">䠑<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22772">䣡<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22806">䤆<span class="small">ギ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1365">犠<span class="small">ギ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1651">擬<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3477">嶷<span class="small">ギ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6183">戲<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9686">薿<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11738">㬢<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12267">檥<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14327">寲<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15915">濝<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19010">㘈<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26917">㠜<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3955">魏<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4677">礒<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9702">藙<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21857">䑄<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2287">蟻<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4893">艤<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7411">顗<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15325">櫭<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18510">鶀<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20806">㽈<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21445">䉝<span class="small">ギ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="476">議<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3925">曦<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6250">犧<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16939">籄<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17907">轙<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18293">顡<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23573">䳫<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3480">巍<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8076">觺<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9734">蘶<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17726">譺<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18628">夔<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21455">䉨<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26524">蘷<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16342">犩<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18451">鱀<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18611">齮<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23709">䶞<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24387">虁<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7223">鸃<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7224">䴊<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18631">巙<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23455">䰯<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23514">䲑<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16343">犪<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23299">䭳<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17867">躨<span class="small">ギ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18158">钀<span class="small">ギ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">きい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="904">純<span class="small">きいと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/19257">㝄<span class="small">きいと</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">きえ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="331">消<span class="small">き（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/20356">㴅<span class="small">き（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4922">熄<span class="small">き（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4703">銷<span class="small">き（える）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">きお</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="kanjiy/25943">竞<span class="small">きお（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="484">競<span class="small">きお（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5663">竸<span class="small">きお（う）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">きく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="kanjiy/27775">𦥑<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12936">匊<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15501">泦<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19042">㘲<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24108">苖<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18909">㖆<span class="small">キク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1501">畜<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15376">毩<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17230">荲<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20044">㭟<span class="small">キク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1367">菊<span class="small">キク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2289">掬<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14070">婅<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15631">淗<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18195">陱<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19671">㥌<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20653">㹼<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21790">䏱<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4134">椈<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12975">毱<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11152">慉<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19201">㜅<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20825">㽤<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22354">䛙<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8963">粷<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15256">槒<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18173">閰<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22139">䗇<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24121">蓫<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="2291">麹<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8153">諊<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8400">踘<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17803">趜<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17871">躹<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22242">䙒<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22418">䜯<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23911">嘼<span class="small">キク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2290">鞠<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7270">麯<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23556">䳔<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4997">鞫<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23126">䪕<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6472">麴<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6974">䱡<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18506">鵴<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21443">䉛<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22073">䕮<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9500">蘜<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14589">巈<span class="small">キク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18393">驧<span class="small">キク</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="624">利<span class="small">き（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="696">効<span class="small">き（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2600">訊<span class="small">き（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6198">效<span class="small">き（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/17634">訙<span class="small">き（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4856">聆<span class="small">き（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/27497">䠲<span class="small">き（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/22357">䛜<span class="small">き（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="219">聞<span class="small">き（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1508">聴<span class="small">き（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5850">聽<span class="small">き（く）</span></a></li>
                         <li class="others_kanji onyomi"><a href="10650">砡<span class="small">ギク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22418">䜯<span class="small">ギク</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7154">鶎<span class="small">きくいただき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4085">蝎<span class="small">きくいむし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9974">螙<span class="small">きくいむし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4115">蠧<span class="small">きくいむし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4114">蠹<span class="small">きくいむし</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">きこ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="219">聞<span class="small">き（こえる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5412">蕘<span class="small">きこり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2564">樵<span class="small">きこり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/17377">藮<span class="small">きこり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2564">樵<span class="small">きこ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/17377">藮<span class="small">きこ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">きさ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="kanjiy/12229">橒<span class="small">きさ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="869">后<span class="small">きさき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1869">妃<span class="small">きさき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="570">兆<span class="small">きざ（し）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1741">祥<span class="small">きざ（し）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1822">朕<span class="small">きざ（し）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6369">祥<span class="small">きざ（し）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1051">幾<span class="small">きざ（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/19504">㡬<span class="small">きざ（し）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="474">機<span class="small">きざ（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8777">舋<span class="small">きざ（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4853">釁<span class="small">きざ（し）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="570">兆<span class="small">きざ（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2911">萌<span class="small">きざ（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2912">萠<span class="small">きざ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25448">阶<span class="small">きざはし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="943">段<span class="small">きざはし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="975">陛<span class="small">きざはし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/24201">㙄<span class="small">きざはし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="260">階<span class="small">きざはし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7947">堦<span class="small">きざはし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="667">刊<span class="small">きざ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="874">刻<span class="small">きざ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1386">契<span class="small">きざ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3176">剋<span class="small">きざ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3178">剞<span class="small">きざ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6163">尅<span class="small">きざ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5081">勒<span class="small">きざ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4580">雕<span class="small">きざ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4721">鏤<span class="small">きざ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7170">鵰<span class="small">きざ（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">きし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="kanjiy/13638">圫<span class="small">きし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3331">圻<span class="small">きし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="265">岸<span class="small">きし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/19361">㟁<span class="small">きし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/27823">𡶜<span class="small">きし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3338">垠<span class="small">きし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/13716">垦<span class="small">きし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5882">墺<span class="small">きし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="236">来<span class="small">き（し）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5661">來<span class="small">き（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11951">徕<span class="small">き（し）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4576">雉<span class="small">きじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4186">樸<span class="small">きじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7981">鴙<span class="small">きじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12259">檏<span class="small">きじ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4458">軋<span class="small">きし（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4458">軋<span class="small">きし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4485">轢<span class="small">きし（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">きす</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3894">鱚<span class="small">きす</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12793">刅<span class="small">きず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12796">创<span class="small">きず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/24566">伤<span class="small">きず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12795">戗<span class="small">きず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3238">呰<span class="small">きず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10133">玷<span class="small">きず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25811">疮<span class="small">きず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5222">痍<span class="small">きず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5223">疵<span class="small">きず</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="932">創<span class="small">きず</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="909">傷<span class="small">きず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4627">瑕<span class="small">きず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12794">戧<span class="small">きず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5242">瘢<span class="small">きず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5243">瘡<span class="small">きず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8777">舋<span class="small">きず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4853">釁<span class="small">きず</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5242">瘢<span class="small">きずあと</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="772">築<span class="small">きず（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5222">痍<span class="small">きず（つく）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5222">痍<span class="small">きず（つける）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4755">絆<span class="small">きずな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4758">紲<span class="small">きずな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4764">絏<span class="small">きずな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5086">鞅<span class="small">きずな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4783">緤<span class="small">きずな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/17028">縘<span class="small">きずな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2354">繋<span class="small">きずな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4797">縻<span class="small">きずな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/21611">䌕<span class="small">きずな</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6455">繫<span class="small">きずな</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">きせ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="363">着<span class="small">き（せる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">きそ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="kanjiy/25943">竞<span class="small">きそ（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="484">競<span class="small">きそ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5663">竸<span class="small">きそ（う）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">きた</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="223">北<span class="small">きた</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2447">朔<span class="small">きた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/16133">煅<span class="small">きた（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1498">鍛<span class="small">きた（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="236">来<span class="small">きた（す）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5661">來<span class="small">きた（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11951">徕<span class="small">きた（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1023">汚<span class="small">きたな（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/15435">汙<span class="small">きたな（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/15438">污<span class="small">きたな（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25927">秽<span class="small">きたな（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5561">穢<span class="small">きたな（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="236">来<span class="small">きた（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5661">來<span class="small">きた（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11951">徕<span class="small">きた（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6181">徠<span class="small">きた（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5632">臻<span class="small">きた（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">きち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="1368">吉<span class="small">キチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16349">犵<span class="small">キチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17134">肷<span class="small">キチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14003">姞<span class="small">キチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14822">恄<span class="small">キチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15341">欪<span class="small">キチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15511">洁<span class="small">キチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17947">郆<span class="small">キチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19597">㣟<span class="small">キチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19637">㤜<span class="small">キチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20328">㳚<span class="small">キチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20849">㾁<span class="small">キチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22499">䞘<span class="small">キチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26941">迼<span class="small">キチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21704">䎉<span class="small">キチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17793">趌<span class="small">キチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18254">鞊<span class="small">キチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23218">䬄<span class="small">キチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18490">鴶<span class="small">キチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17856">蹫<span class="small">キチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22812">䤎<span class="small">キチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13637">圪<span class="small">ギチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17791">趉<span class="small">ギチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23453">䰬<span class="small">ギチ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">きつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="2001">乞<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5687">气<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12370">仡<span class="small">キツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1368">吉<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2292">吃<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3449">屹<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11028">忔<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11274">扢<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15433">汔<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16349">犵<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18683">㐹<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18819">㔕<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21761">䏌<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21916">䒗<span class="small">キツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2295">迄<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14807">忾<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17127">肐<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17203">芞<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3081">佶<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11043">怴<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11762">肸<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11763">肹<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17134">肷<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20176">㰟<span class="small">キツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1386">契<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3681">拮<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13310">咭<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14003">姞<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14822">恄<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15341">欪<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15511">洁<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16374">狤<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17947">郆<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19597">㣟<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19637">㤜<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20328">㳚<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21726">䎢<span class="small">キツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2293">桔<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4946">訖<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12848">欯<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20849">㾁<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22499">䞘<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22711">䢕<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22904">䦇<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18000">釳<span class="small">キツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1369">喫<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9816">蛣<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10623">矞<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17791">趉<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21704">䎉<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23243">䬣<span class="small">キツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1054">詰<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17793">趌<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12608">僪<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18039">銡<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18988">㗨<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22365">䛥<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23459">䰴<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24233">㮮<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5136">頡<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16447">獝<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18254">鞊<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23218">䬄<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23913">噄<span class="small">キツ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2294">橘<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4647">髻<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19505">㡮<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6930">鮚<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18490">鴶<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9127">繘<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5005">譎<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17856">蹫<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22812">䤎<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22547">䟌<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23453">䰬<span class="small">キツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12370">仡<span class="small">ギツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11028">忔<span class="small">ギツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13637">圪<span class="small">ギツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18183">阣<span class="small">ギツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18683">㐹<span class="small">ギツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9272">耴<span class="small">ギツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21737">䎲<span class="small">ギツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10346">疙<span class="small">ギツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17109">聉<span class="small">ギツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18000">釳<span class="small">ギツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19071">㙞<span class="small">ギツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18813">㔎<span class="small">ギツ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7675">釯<span class="small">きっさき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2925">鉾<span class="small">きっさき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4700">鋩<span class="small">きっさき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2915">鋒<span class="small">きっさき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/27145">鎽<span class="small">きっさき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7674">鏠<span class="small">きっさき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2378">狐<span class="small">きつね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5353">莪<span class="small">きつねあざみ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">きぬ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="446">衣<span class="small">きぬ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3488">帛<span class="small">きぬ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="859">絹<span class="small">きぬ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4807">繖<span class="small">きぬがさ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2747">砧<span class="small">きぬた</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4663">碪<span class="small">きぬた</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">きね</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2541">杵<span class="small">きね</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">きの</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="510">昨<span class="small">きのう</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1397">甲<span class="small">きのえ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2588">茸<span class="small">きのこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1661">菌<span class="small">きのこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5416">蕈<span class="small">きのこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1329">乙<span class="small">きのと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4130">椏<span class="small">きのまた</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">きは</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1959">牙<span class="small">きば</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4193">檗<span class="small">きはだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12282">檘<span class="small">きはだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4194">蘗<span class="small">きはだ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">きひ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="8957">秶<span class="small">きび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2548">黍<span class="small">きび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5262">粢<span class="small">きび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5560">稷<span class="small">きび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/24531">严<span class="small">きび（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1958">苛<span class="small">きび（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3176">剋<span class="small">きび（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2528">峻<span class="small">きび（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2968">栗<span class="small">きび（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3455">峭<span class="small">きび（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6163">尅<span class="small">きび（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12045">㮚<span class="small">きび（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1693">酷<span class="small">きび（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2121">辣<span class="small">きび（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8548">辢<span class="small">きび（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1375">緊<span class="small">きび（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="862">厳<span class="small">きび（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5080">覈<span class="small">きび（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6147">嚴<span class="small">きび（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/27815">𣡼<span class="small">きび（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4273">踵<span class="small">きびす</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">きま</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5807">决<span class="small">き（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/19265">㝎<span class="small">き（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="288">決<span class="small">き（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="370">定<span class="small">き（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="486">極<span class="small">き（まる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts21">
                    <h3 class="ttl_while">きみ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="005">王<span class="small">きみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="130">公<span class="small">きみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="869">后<span class="small">きみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="283">君<span class="small">きみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/18756">㒶<span class="small">きみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="868">皇<span class="small">きみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1689">侯<span class="small">きみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12472">矦<span class="small">きみ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2317">卿<span class="small">きみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5318">辟<span class="small">きみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5053">褊<span class="small">きみじか</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts22">
                    <h3 class="ttl_while">きめ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3361">夬<span class="small">き（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/13213">叏<span class="small">き（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5807">决<span class="small">き（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="288">決<span class="small">き（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3176">剋<span class="small">き（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6163">尅<span class="small">き（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="267">期<span class="small">き（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="486">極<span class="small">き（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts23">
                    <h3 class="ttl_while">きも</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1350">肝<span class="small">きも</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1497">胆<span class="small">きも</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6291">膽<span class="small">きも</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="408">服<span class="small">きもの</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts24">
                    <h3 class="ttl_while">きや</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei onyomi"><a class="color2" href="2203">伽<span class="small">キャ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12407">佉<span class="small">キャ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13287">呿<span class="small">キャ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1055">脚<span class="small">キャ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11814">腳<span class="small">キャ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11815">踋<span class="small">キャ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10421">瘸<span class="small">キャ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1056">却<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13061">佫<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18850">㕁<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21058">䂆<span class="small">キャク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="268">客<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3035">卻<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21939">䒸<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22951">䧄<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26398">㑢<span class="small">キャク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="663">格<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14944">捇<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19656">㤸<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19748">㦴<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19944">㪾<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21948">䓇<span class="small">キャク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1055">脚<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12785">剨<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13393">啋<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17731">谻<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18941">㖪<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24906">啯<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14785">徦<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17160">腘<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17956">郹<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18949">㖸<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18962">㗆<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20879">㾡<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21649">䍊<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22573">䟩<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23067">䩐<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11814">腳<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13465">嗝<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13819">塥<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16130">煂<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16325">犑<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19573">㣂<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21100">䂸<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21818">䐘<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21819">䐙<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22130">䖼<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8432">勪<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11815">踋<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13497">嘓<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14866">慖<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16636">盢<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16753">碦<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22278">䚂<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21377">䈐<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22240">䙐<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13546">噭<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13870">墼<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17686">諽<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19720">㦌<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22606">䠐<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23084">䩤<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23917">噱<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11913">臄<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16234">燩<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19730">㦘<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20539">㷾<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22389">䛿<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23032">䨣<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23228">䬎<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27784">𠢹<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14374">屩<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16699">矆<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16771">礊<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17038">繑<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21045">䁶<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8431">蹻<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14376">屫<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19738">㦦<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13169">匷<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17719">譤<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23110">䪂<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11218">戄<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14753">彏<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22775">䣤<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18553">鸄<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16706">矡<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17730">讗<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8463">躩<span class="small">キャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14377">屰<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22091">䖈<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25807">疟<span class="small">ギャク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="674">逆<span class="small">ギャク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1370">虐<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22094">䖋<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22095">䖌<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27825">𡶷<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14065">娾<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14099">婩<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19308">㞃<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23010">䨋<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25057">婳<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18209">雃<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15223">椺<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15226">楁<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15757">滆<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16738">硸<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17297">蒚<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19573">㣂<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20085">㮝<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22513">䞦<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5237">瘧<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15238">榏<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17800">趘<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14208">嫿<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15862">澅<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16755">磀<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21118">䃒<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4983">謔<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16453">獥<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17353">薂<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24100">縌<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19014">㘌<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13583">嚯<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23102">䩹<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22315">䚫<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23490">䱮<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23574">䳬<span class="small">ギャク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19023">㘙<span class="small">ギャク</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2312">侠<span class="small">きゃん</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6430">俠<span class="small">きゃん</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts25">
                    <h3 class="ttl_while">きゆ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="kanjiy/22612">䠗<span class="small">キュ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="011">九<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6605">丩<span class="small">キュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="107">弓<span class="small">キュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="676">久<span class="small">キュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1058">及<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6618">乆<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2296">仇<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6695">乣<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12918">勼<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13205">厹<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20301">㲸<span class="small">キュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="675">旧<span class="small">キュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1057">丘<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6593">㐀<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9361">艽<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9362">芁<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10108">玊<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11987">匛<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13219">叴<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14901">扏<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15421">氿<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16346">犰<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16474">玌<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18878">㕤<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19761">㧃<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19762">㧄<span class="small">キュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="010">休<span class="small">キュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="847">吸<span class="small">キュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1004">扱<span class="small">キュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1059">朽<span class="small">キュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1978">臼<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9369">芎<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10901">宆<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11934">朻<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12383">伋<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12892">㱙<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13006">丠<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13940">奺<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15143">朹<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16293">牞<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17125">肍<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19263">㝌<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19508">㡱<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20574">㸨<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20690">㺩<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20692">㺫<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25502">汣<span class="small">キュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="272">究<span class="small">キュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="479">求<span class="small">キュウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2300">汲<span class="small">キュウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2301">灸<span class="small">キュウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2302">玖<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3450">岌<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4747">糺<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5859">皀<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9384">芨<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9762">虬<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10342">㽲<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11032">忣<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14768">彶<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15150">杛<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16846">穷<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20838">㽱<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20920">㿝<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23728">龟<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27849">𣏓<span class="small">キュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="478">泣<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3234">咎<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5202">邱<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5211">疚<span class="small">キュウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5613">穹<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6594">坵<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9314">舏<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9761">虯<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10959">㤂<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16588">畂<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18691">㑋<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19043">㘳<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19136">㚱<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19758">㧀<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20316">㳋<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21529">䊵<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21932">䒪<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24277">䆒<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27371">㺵<span class="small">キュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="269">急<span class="small">キュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="270">級<span class="small">キュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1653">糾<span class="small">キュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1720">臭<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2305">韭<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4021">柩<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7522">釓<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8059">觓<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8080">訄<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8081">訅<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12465">俅<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13320">咻<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14299">宫<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14682">庥<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14825">恘<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17222">茠<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18660">㐜<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18909">㖆<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19783">㧨<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20330">㳜<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20641">㹯<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20843">㽺<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21776">䏠<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22414">䜪<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22649">䡂<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22741">䢼<span class="small">キュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="282">宮<span class="small">キュウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2303">笈<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4908">烋<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5075">躬<span class="small">キュウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5571">赳<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5961">恷<span class="small">キュウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6409">臭<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6617">镹<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7523">釚<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9465">莍<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11336">捄<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12024">桕<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13071">倃<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15558">浗<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16051">烌<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16498">珛<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16980">紌<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16982">紤<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17242">莥<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19051">㙀<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19159">㛏<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19326">㞗<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19366">㟈<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19657">㤹<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20042">㭝<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21784">䏩<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21786">䏫<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22752">䣇<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22825">䤛<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22989">䧱<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27559">䓖<span class="small">キュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="271">球<span class="small">キュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="477">救<span class="small">キュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1975">亀<span class="small">キュウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3844">毬<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4046">蚯<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5508">逑<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7370">頄<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8280">䝗<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12051">梂<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15362">殏<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17145">脙<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18635">﨣<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20859">㾋<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21959">䓘<span class="small">キュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="480">給<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2304">韮<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5607">翕<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12946">匑<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13442">喼<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14696">廄<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15682">湆<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15683">湇<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16114">焪<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16629">皳<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16635">盚<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17084">翖<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18668">㐤<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18965">㗊<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20197">㰶<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20257">㲃<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20366">㴔<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21483">䊆<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22575">䟬<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25207">巯<span class="small">キュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1979">嗅<span class="small">キュウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2306">鳩<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5044">裘<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5629">舅<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5823">貅<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9041">絿<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9833">蛷<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12802">剹<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12949">匓<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14985">搝<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17777">赨<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18977">㗜<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20377">㴦<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23248">䬨<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23523">䲥<span class="small">キュウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2297">厩<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2298">廐<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2299">廏<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3719">摎<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6828">髤<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8068">觩<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8299">賕<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8464">躳<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12911">殠<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16181">熍<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18037">銝<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18723">㒆<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20220">㱗<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22582">䟵<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25208">巰<span class="small">キュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1654">窮<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4180">樛<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7648">銶<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10211">璆<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11485">㩉<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13528">噏<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14214">嬆<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14870">慦<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15838">潝<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17803">趜<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18479">鴔<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21120">䃔<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22369">䛪<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22373">䛮<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22642">䠻<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23531">䲯<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23911">嘼<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4571">歙<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5670">龜<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6645">鼽<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6827">髹<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8972">糗<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12947">匔<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16210">熻<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17478">螑<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19925">㪧<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20004">㬛<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23322">䮌<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4798">繆<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6295">舊<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7110">鵂<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7111">䳎<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20450">㵻<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21039">䁯<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22612">䠗<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23556">䳔<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9703">藭<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11734">㬤<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18436">鯄<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19012">㘊<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20619">㹗<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23692">䶋<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6864">䦰<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10925">竆<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12995">匶<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16778">礘<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18442">鯦<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18566">麔<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7906">闟<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14260">孂<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6863">䰗<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18608">齨<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23431">䰍<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25422">欍<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18536">鷑<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6651">齅<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23398">䯥<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5020">鬮<span class="small">キュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18305">飍<span class="small">キュウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="108">牛<span class="small">ギュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3450">岌<span class="small">ギュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13650">圾<span class="small">ギュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15453">汼<span class="small">ギュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19349">㞲<span class="small">ギュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21920">䒜<span class="small">ギュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20226">㱞<span class="small">ギュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13035">亴<span class="small">ギュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9287">聱<span class="small">ギュウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22612">䠗<span class="small">ギュウ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1393">弧<span class="small">きゆみ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts26">
                    <h3 class="ttl_while">きよ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="kanjiy/19447">㠪<span class="small">キョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="273">去<span class="small">キョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1061">巨<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12724">凥<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13206">厺<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3222">吁<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12407">佉<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13058">佢<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19347">㞰<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19931">㪯<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27775">𦥑<span class="small">キョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="678">居<span class="small">キョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1060">拠<span class="small">キョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1655">拒<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5329">苣<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7922">阹<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11044">怇<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11300">抾<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13287">呿<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14000">姖<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14403">岠<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14722">弆<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15546">洰<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19269">㝒<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19320">㞐<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21930">䒧<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22739">䢹<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4904">炬<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11776">胠<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11988">柜<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12838">㰦<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12879">歫<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15094">昛<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19759">㧁<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19969">㫢<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20036">㭕<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24534">举<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25836">眍<span class="small">キョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="481">挙<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3102">倨<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5553">秬<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9466">莒<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10017">袪<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10785">祛<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20848">㾀<span class="small">キョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="677">許<span class="small">キョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1371">虚<span class="small">キョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1773">据<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8954">粔<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9261">耟<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9749">虗<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9793">蚷<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14102">婮<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14465">崌<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15615">涺<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15642">淭<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16985">紶<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17246">菃<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24915">啹<span class="small">キョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1062">距<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2308">渠<span class="small">キョ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6458">虛<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8104">詎<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8105">詓<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10168">琚<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11837">腒<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12088">椐<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22785">䣰<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25768">犋<span class="small">キョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2032">裾<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4531">筥<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4691">鉅<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8258">豦<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21216">䅕<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25420">榉<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2307">嘘<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9754">虡<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11301">㩀<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12318">﨔<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17444">蜛<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22002">䔓<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24222">㨿<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26333">艍<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3352">墟<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4271">踞<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6473">噓<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6715">駏<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8302">䝻<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9644">蕖<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12883">勮<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14876">憈<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17965">鄦<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19421">㠊<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19575">㣄<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22374">䛯<span class="small">キョ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2309">鋸<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4570">歔<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5873">據<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6193">舉<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6910">魼<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6911">鮔<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7265">麮<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10223">璖<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11185">懅<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13877">壉<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15898">澽<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16683">瞘<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5533">遽<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6192">擧<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10234">璩<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10745">磲<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17492">螶<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20140">㯫<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17505">蟝<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18585">鼁<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21303">䆽<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6975">䱟<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7155">鶋<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8922">簴<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22460">䝣<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4850">醵<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8446">躆<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9728">蘧<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13169">匷<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22545">䟊<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23648">䵕<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23704">䶙<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25418">櫸<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4210">欅<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7825">鐻<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6771">驉<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6882">魖<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8939">籧<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18452">鱋<span class="small">キョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3326">圄<span class="small">ギョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14052">娪<span class="small">ギョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14458">峿<span class="small">ギョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21951">䓊<span class="small">ギョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="109">魚<span class="small">ギョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3327">圉<span class="small">ギョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11552">敔<span class="small">ギョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21796">䏸<span class="small">ギョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1063">御<span class="small">ギョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4488">馭<span class="small">ギョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="123">語<span class="small">ギョ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="628">漁<span class="small">ギョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22015">䔡<span class="small">ギョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6891">䰻<span class="small">ギョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7649">鋙<span class="small">ギョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17322">蓹<span class="small">ギョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21841">䐳<span class="small">ギョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22727">䢩<span class="small">ギョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21034">䁩<span class="small">ギョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22197">䘘<span class="small">ギョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2310">禦<span class="small">ギョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22164">䗨<span class="small">ギョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8932">篽<span class="small">ギョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17385">蘌<span class="small">ギョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22870">䥏<span class="small">ギョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23496">䱷<span class="small">ギョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7202">鷠<span class="small">ギョ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8931">籞<span class="small">ギョ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4332">泓<span class="small">きよ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1757">浄<span class="small">きよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4345">洌<span class="small">きよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25524">浏<span class="small">きよ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="544">清<span class="small">きよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5467">皎<span class="small">きよ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5977">淨<span class="small">きよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/15648">淸<span class="small">きよ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5468">皓<span class="small">きよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10467">賋<span class="small">きよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/24188">㓗<span class="small">きよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25587">潇<span class="small">きよ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="685">潔<span class="small">きよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4446">瀏<span class="small">きよ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4453">瀟<span class="small">きよ（い）</span></a></li>
                         <li class="others_kanji onyomi"><a href="5759">冂<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5814">廾<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12345">孒<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24538">乡<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25069">孓<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1065">凶<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="114">兄<span class="small">キョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2318">叶<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8630">卭<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12693">冋<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="294">向<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="485">共<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1068">叫<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2314">兇<span class="small">キョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2316">匡<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3197">匈<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8629">邛<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12821">劦<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12822">劥<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13000">旪<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13042">仼<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13120">兴<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13647">圶<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13914">夹<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14728">弜<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15998">灱<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15999">灲<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18674">㐫<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18779">㓙<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19124">㚣<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23968">巩<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25214">庆<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26342">芗<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="867">孝<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1070">狂<span class="small">キョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2146">杏<span class="small">キョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2311">亨<span class="small">キョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2315">劫<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3153">冏<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3365">夾<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5809">况<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5859">皀<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5925">抂<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6060">刧<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9297">臫<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11068">忷<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12824">刦<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13261">呌<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13609">囧<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13664">坕<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13668">坙<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13957">妔<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14600">巠<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15451">汹<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18892">㕳<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19319">㞏<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19958">㫒<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20693">㺬<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20838">㽱<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26414">㒷<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="116">京<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="482">協<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="850">供<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1071">況<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1657">享<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2312">侠<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2321">怯<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5125">羌<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8562">迋<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11045">怳<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11300">抾<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11956">极<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12433">㑌<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12825">刼<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12830">劻<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13188">厒<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13285">呺<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13287">呿<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13680">坰<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14415">岲<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15090">昅<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16024">炚<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18673">㐩<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18769">㓋<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18784">㓣<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18898">㕺<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18900">㕼<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19148">㚽<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19149">㚾<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20179">㰢<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20632">㹤<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24579">侨<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1069">狭<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1099">香<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1373">峡<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1656">挟<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3380">姜<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3559">恟<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3560">恊<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3682">拱<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4347">洶<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5625">矜<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5756">亰<span class="small">キョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6430">俠<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6721">亯<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7369">响<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8082">訆<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8849">匧<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9430">荍<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9467">荚<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10009">衱<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11069">恇<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11071">恔<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11989">枵<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12466">俇<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12952">匩<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13323">哅<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13715">垥<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13717">垧<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14005">姠<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14008">姣<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14298">宪<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14625">帢<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14926">拹<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15137">朐<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15543">洭<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16715">砊<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17944">邼<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18190">陕<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18772">㓏<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19563">㢵<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19626">㤍<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19646">㤨<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19965">㫛<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21657">䍔<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21935">䒰<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22741">䢼<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24794">哐<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25053">娇<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25123">峤<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25125">峧<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25287">挢<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26360">荞<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26538">蚃<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27102">㤭<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27292">㳝<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="021">校<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="849">胸<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1066">恐<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1372">脅<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1659">恭<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2133">脇<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4036">框<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5185">陜<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5352">莢<span class="small">キョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6081">峽<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6082">峺<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6186">挾<span class="small">キョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6252">狹<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9197">羗<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10139">珙<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10140">珦<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10651">砝<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11245">拲<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11246">㧬<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11667">晈<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11668">晑<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11798">胷<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11799">脋<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11800">䏮<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12025">栱<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12505">倄<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13346">哼<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13356">唊<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13732">埂<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14032">娎<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14041">娙<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14302">宯<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14832">悏<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14833">悙<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14940">挳<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15187">桏<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15580">浻<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16045">烄<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16590">畕<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16650">眖<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19157">㛍<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19639">㤟<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19787">㧭<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19793">㧶<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20044">㭟<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20047">㭢<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20643">㹲<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20645">㹴<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20848">㾀<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21270">䆗<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21739">䎴<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22709">䢒<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24261">㿟<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24996">埛<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25389">桥<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25538">涥<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25935">窍<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25943">竞<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="110">教<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="111">強<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="684">経<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="848">郷<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1999">梗<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2004">頃<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2414">袷<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4123">梟<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5467">皎<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5543">竟<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8090">訩<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8586">逛<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8805">笻<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10542">眶<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10667">䂬<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11553">敎<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12053">梜<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12900">殑<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13079">偞<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13378">唴<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13393">啋<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14074">婋<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14088">婛<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14741">弶<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16400">猐<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16730">硍<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16985">紶<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17146">脥<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17261">菮<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17875">軖<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19178">㛨<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19474">㡊<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19649">㤮<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19651">㤲<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20056">㭲<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20191">㰰<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20351">㳾<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20650">㹹<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20655">㹾<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20774">㼦<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21088">䂩<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21089">䂪<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21091">䂭<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21201">䅃<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21699">䎄<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22208">䘨<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22715">䢚<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22758">䣏<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24241">㳟<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25252">惬<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25845">矫<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25864">硚<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26274">羟<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="853">敬<span class="small">キョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2317">卿<span class="small">キョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2319">喬<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4050">蛬<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4051">蛩<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4529">筐<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7948">陿<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8294">貺<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8804">筇<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9332">舼<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9941">䖮<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11132">愜<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14742">强<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15683">湇<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16527">琷<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16602">痚<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16737">硱<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17286">葝<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17884">軦<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17958">郻<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17962">鄉<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17963">鄊<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18209">雃<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20870">㾘<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20874">㾜<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20878">㾠<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20989">䀴<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20990">䀶<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20991">䀷<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21096">䂲<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21481">䊄<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21649">䍊<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22122">䖱<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22272">䙼<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22827">䤝<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23400">䯧<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24116">萫<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24118">葁<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25400">椩<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25633">飨<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26541">蛱<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3602">慊<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4265">跫<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4530">筺<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4538">筴<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5910">經<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8091">詾<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8124">誆<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8385">跲<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8497">軭<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8664">鄕<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9834">蛺<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9835">蜐<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10334">畺<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10467">賋<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11133">㥦<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11153">愶<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11564">敫<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12587">傹<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12860">勥<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13446">嗃<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13451">嗋<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13464">嗛<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13822">塨<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15741">溬<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15768">滘<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16745">碅<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17002">綊<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17071">羥<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17438">蛵<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17649">詨<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17893">輁<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18024">鉣<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19070">㙝<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19122">㚠<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19690">㥤<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20202">㰼<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20204">㰾<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22473">䝱<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22664">䡖<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22665">䡗<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24947">嗴<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25930">稥<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="679">境<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2313">僑<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3149">兢<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4970">誑<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7617">銎<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8432">勪<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8694">鄥<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8695">鄡<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9609">蔃<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9854">蜣<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12234">槗<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12872">歊<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13483">嘂<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13485">嘄<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13489">嘋<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13494">嘐<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14535">嵹<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15009">摬<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15015">摾<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15106">暞<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15775">滰<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16148">煛<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16172">熁<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16177">熇<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17088">翞<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17183">臦<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19702">㥷<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20092">㮪<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20519">㷡<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20672">㺒<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21009">䁋<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21232">䅨<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22003">䔔<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22360">䛟<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24079">硻<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24953">嘦<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25952">箧<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27114">銄<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1672">慶<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2104">頬<span class="small">キョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2323">蕎<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3136">僵<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3409">嬌<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4551">篋<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4701">鋏<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5090">鞏<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6892">魥<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10472">皛<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11173">憍<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11174">憢<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11471">撟<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11472">撬<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11893">膙<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12052">䲷<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12629">儌<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12903">勰<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13513">嘵<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13516">嘺<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13850">墝<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14564">嶠<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15010">摮<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15014">摼<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15784">漀<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16449">獟<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16452">獢<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18042">銵<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18278">頝<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18561">鹶<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19002">㗽<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19294">㝯<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19427">㠐<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19542">㢗<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20116">㯋<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20525">㷫<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22030">䔷<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22372">䛭<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23219">䬅<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25582">鞒<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25769">犟<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27867">𣘺<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="274">橋<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="702">興<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2320">彊<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3537">徼<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4187">橇<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4571">歙<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5059">襁<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5424">薑<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="6468">頰<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6912">䱁<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7097">鴞<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9663">薌<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10335">壃<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10876">䅽<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11186">憿<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11494">撽<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11568">敽<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11569">敿<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11902">膮<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13546">噭<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13871">墽<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14224">嬓<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16216">燆<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16453">獥<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17177">膷<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17353">薂<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18400">髸<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19861">㩖<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21127">䃝<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22674">䡠<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22728">䢪<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23546">䳂<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1658">矯<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2322">橿<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4675">磽<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6505">繈<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7112">䳍<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10073">襋<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11730">曏<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11731">曒<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12268">檋<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12926">殭<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16240">燲<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16555">璬<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16693">瞸<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16841">穘<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16842">穚<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16971">糡<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16974">糨<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17362">藃<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18288">顅<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18489">鴵<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20616">㹔<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20958">䀉<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21039">䁯<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21301">䆻<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22419">䜰<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22683">䡩<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23388">䯚<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23470">䱋<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24368">䳋<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25903">礄<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4809">繦<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5622">竅<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6816">髜<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7133">鵟<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8903">簥<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9704">藠<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9925">蟜<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10336">疅<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10485">皦<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16227">燛<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16774">礓<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17038">繑<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17511">蟼<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17707">謼<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17708">謽<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18496">鵖<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18499">鵛<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19875">㩩<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20453">㵿<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21045">䁶<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21718">䎗<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22689">䡰<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23560">䳙<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24249">㶀<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="483">鏡<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="855">警<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3315">嚮<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4482">轎<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5455">疆<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6680">龏<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7778">鏹<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8195">譑<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8197">䜘<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8353">趫<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8354">趬<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8431">蹻<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8433">蹺<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9139">繮<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9141">繳<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9940">蠁<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11924">臖<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14253">嬹<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17184">臩<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17710">譀<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17712">譊<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18511">鶁<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18566">麔<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20959">䀊<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22060">䕟<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22067">䕧<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22071">䕬<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22173">䗵<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22313">䚩<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22872">䥒<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23183">䫞<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23237">䬘<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="484">競<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1067">響<span class="small">キョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2325">馨<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7256">麘<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7806">鐈<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14260">孂<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17719">譤<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17720">譥<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17857">躈<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18135">鐷<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22940">䦳<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23347">䮦<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3317">囂<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7330">鞽<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13588">嚻<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18294">顤<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18534">鷍<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22881">䥞<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23439">䰘<span class="small">キョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1064">驚<span class="small">キョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2324">饗<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4509">驕<span class="small">キョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4510">驍<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5663">竸<span class="small">キョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6418">響<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6684">龔<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7331">韁<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23452">䰫<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7051">鱎<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7217">鷮<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15368">毊<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15984">灚<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24371">䵃<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7062">鱜<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9739">虈<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9740">䖀<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18553">鸄<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19100">㚁<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22900">䥵<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18331">馫<span class="small">キョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13176">卬<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13005">业<span class="small">ギョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="133">行<span class="small">ギョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1072">仰<span class="small">ギョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1384">刑<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12747">㓝<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12821">劦<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19124">㚣<span class="small">ギョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="115">形<span class="small">ギョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1079">迎<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16357">狅<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19319">㞏<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19622">㤉<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24294">䒢<span class="small">ギョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2326">尭<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26967">邺<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13709">垚<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14008">姣<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15524">洐<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16707">矨<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19594">㣜<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21073">䂚<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21269">䆖<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25123">峤<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12505">倄<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14041">娙<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15056">敆<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16045">烄<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16047">烆<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16063">烚<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16503">珨<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16873">笅<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18774">㓑<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20037">㭘<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20646">㹵<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21540">䋂<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22751">䣆<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14091">婞<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15360">殌<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17781">赹<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17953">郩<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20935">㿰<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22208">䘨<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24320">䖎<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25864">硚<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27827">𡸳<span class="small">ギョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1660">暁<span class="small">ギョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5765">堯<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13411">喁<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14115">媀<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15216">棾<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16865">竤<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17286">葝<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20066">㮁<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20197">㰶<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20821">㽠<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20989">䀴<span class="small">ギョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="098">楽<span class="small">ギョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="275">業<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17002">綊<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17087">翝<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17649">詨<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20780">㼬<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21003">䁄<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21068">䂔<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22101">䖖<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22298">䚘<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22473">䝱<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22515">䞩<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23072">䩕<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23209">䫺<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25576">滧<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3132">僥<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15775">滰<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15796">漒<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17015">緈<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23015">䨐<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3473">嶢<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4430">澆<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5281">餃<span class="small">ギョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5732">樂<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13513">嘵<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13516">嘺<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14564">嶠<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14567">嶤<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15023">撔<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15264">樈<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16449">獟<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18052">鋞<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19294">㝯<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19427">㠐<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21024">䁝<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22372">䛭<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22844">䤰<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25230">徺<span class="small">ギョウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1374">凝<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3537">徼<span class="small">ギョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5683">曉<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6644">鼼<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8714">鄴<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14231">嬛<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14572">嶪<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14573">嶫<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14878">憌<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15286">橩<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15889">澲<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17353">薂<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17587">褮<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19001">㗼<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20615">㹓<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22982">䧨<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23142">䪫<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23165">䫆<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23445">䰢<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11692">皢<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16842">穚<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17361">藀<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20213">㱉<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20569">㸣<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20958">䀉<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23388">䯚<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24395">䁱<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25903">礄<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4103">蟯<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5612">翹<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7408">顒<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9704">藠<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10756">礏<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15355">歞<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18091">鎑<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19735">㦡<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20453">㵿<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21718">䎗<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18566">麔<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20959">䀊<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21618">䌜<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22067">䕧<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22313">䚩<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6996">鰅<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14587">巆<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22315">䚫<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17075">羻<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18294">顤<span class="small">ギョウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4510">驍<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21462">䉰<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23203">䫴<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23708">䶝<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18388">驜<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18556">鸈<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23517">䲔<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23522">䲜<span class="small">ギョウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9365">艻<span class="small">キョク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="276">曲<span class="small">キョク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2327">旭<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15087">旮<span class="small">キョク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="277">局<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12441">伵<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12957">匤<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27775">𦥑<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3062">亟<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12440">侐<span class="small">キョク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="834">革<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4350">洫<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9404">茍<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12467">侷<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15553">浀<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18909">㖆<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21942">䒼<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11335">挶<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16046">烅<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16498">珛<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22713">䢗<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3191">勗<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6485">勖<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11101">㥛<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12054">梮<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15637">淢<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18941">㖪<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19119">㚜<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20709">㻃<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21972">䓧<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24048">焏<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25639">焗<span class="small">キョク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="486">極<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4129">棘<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8806">筁<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9817">蛐<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12905">殛<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15133">朂<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16790">祰<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19482">㡔<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20067">㮂<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20193">㰲<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7374">頊<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8334">赩<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8498">輂<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16855">窢<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21728">䎤<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4266">跼<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8432">勪<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21578">䋰<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22918">䦗<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5417">蕀<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7650">鋦<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22672">䡞<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4648">髷<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17686">諽<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20741">㻷<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23084">䩤<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12268">檋<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18354">駶<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20211">㱇<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23092">䩯<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23228">䬎<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23556">䳔<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23335">䮙<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8431">蹻<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23478">䱛<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19883">㩴<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23110">䪂<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9986">衋<span class="small">キョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23675">䵱<span class="small">キョク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="012">玉<span class="small">ギョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16522">琟<span class="small">ギョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22504">䞝<span class="small">ギョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7374">頊<span class="small">ギョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7568">鈺<span class="small">ギョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7089">鳿<span class="small">ギョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3477">嶷<span class="small">ギョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19010">㘈<span class="small">ギョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/26917">㠜<span class="small">ギョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17726">譺<span class="small">ギョク</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17873">軉<span class="small">ギョク</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="544">清<span class="small">きよ（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/15648">淸<span class="small">きよ（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="544">清<span class="small">きよ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/15648">淸<span class="small">きよ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4433">澡<span class="small">きよ（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts27">
                    <h3 class="ttl_while">きら</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1674">嫌<span class="small">きら（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25608">灿<span class="small">きら（めく）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="4917">煌<span class="small">きら（めく）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2453">燦<span class="small">きら（めく）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/23112">䪄<span class="small">きら（めく）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts28">
                    <h3 class="ttl_while">きり</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="691">限<span class="small">きり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2788">桐<span class="small">きり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1880">雰<span class="small">きり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/25551">雾<span class="small">きり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2619">錐<span class="small">きり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8018">霚<span class="small">きり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1282">霧<span class="small">きり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4744">鑚<span class="small">きり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4743">鑽<span class="small">きり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2792">梼<span class="small">きりかぶ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2791">檮<span class="small">きりかぶ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4050">蛬<span class="small">きりぎりす</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4093">螽<span class="small">きりぎりす</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4318">臠<span class="small">きりにく</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4318">臠<span class="small">きりみ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2284">麒<span class="small">きりん</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2994">麟<span class="small">きりん</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts29">
                    <h3 class="ttl_while">きる</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1766">刃<span class="small">き（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5666">刄<span class="small">き（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="174">切<span class="small">き（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3168">刋<span class="small">き（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="446">衣<span class="small">き（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1530">伐<span class="small">き（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="408">服<span class="small">き（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/24723">剀<span class="small">き（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3842">斫<span class="small">き（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="947">著<span class="small">き（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2014">斬<span class="small">き（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3180">剪<span class="small">き（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="363">着<span class="small">き（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3181">剴<span class="small">き（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4683">釿<span class="small">き（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6410">著<span class="small">き（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12393">傠<span class="small">き（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3650">截<span class="small">き（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4158">槎<span class="small">き（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5609">翦<span class="small">き（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4744">鑚<span class="small">き（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4743">鑽<span class="small">き（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts30">
                    <h3 class="ttl_while">きれ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1980">巾<span class="small">きれ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2136">片<span class="small">きれ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/22199">䘜<span class="small">きれ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1596">裂<span class="small">きれ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="174">切<span class="small">き（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts31">
                    <h3 class="ttl_while">きろ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4865">瓩<span class="small">キログラム</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/13114">兛<span class="small">キログラム</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2328">粁<span class="small">キロメートル</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5538">竏<span class="small">キロリットル</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts32">
                    <h3 class="ttl_while">きわ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="kanjiy/25528">际<span class="small">きわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3104">倪<span class="small">きわ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="708">際<span class="small">きわ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4193">檗<span class="small">きわだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/12282">檘<span class="small">きわだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4194">蘗<span class="small">きわだ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="137">谷<span class="small">きわ（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="272">究<span class="small">きわ（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/16846">穷<span class="small">きわ（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="486">極<span class="small">きわ（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5618">窘<span class="small">きわ（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1654">窮<span class="small">きわ（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4282">蹙<span class="small">きわ（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4997">鞫<span class="small">きわ（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8426">䠞<span class="small">きわ（まる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10925">竆<span class="small">きわ（まる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="486">極<span class="small">きわ（み）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3063">亢<span class="small">きわ（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="272">究<span class="small">きわ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="kanjiy/16846">穷<span class="small">きわ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5543">竟<span class="small">きわ（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="486">極<span class="small">きわ（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1654">窮<span class="small">きわ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4997">鞫<span class="small">きわ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10925">竆<span class="small">きわ（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts33">
                    <h3 class="ttl_while">きん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="1980">巾<span class="small">キン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="113">今<span class="small">キン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1376">斤<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12916">勻<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12917">匀<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19033">㘦<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12384">仱<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12385">伒<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12844">劤<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19343">㞬<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19764">㧆<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27833">𢎭<span class="small">キン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="112">近<span class="small">キン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="680">均<span class="small">キン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2333">芹<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3224">听<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3539">忻<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9385">芩<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13255">呁<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13655">坅<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13664">坕<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13959">妗<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13965">妡<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14666">庈<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14805">忴<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14908">扲<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15444">汮<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17937">邤<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19132">㚬<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23728">龟<span class="small">キン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="022">金<span class="small">キン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="116">京<span class="small">キン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2330">欣<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8783">竻<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11588">斦<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11627">昕<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11628">昑<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13179">卺<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13617">囷<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16023">炘<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17132">肵<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19893">㪁<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20253">㱽<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22199">䘜<span class="small">キン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2334">衿<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5625">矜<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5756">亰<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8060">觔<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8807">荕<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10010">袀<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13066">侰<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14014">姰<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14603">巹<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16642">盺<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21940">䒺<span class="small">キン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="487">訓<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5027">衾<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8785">笒<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9000">紟<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9276">耹<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10169">珡<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12503">俽<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14447">峮<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17234">荺<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17419">蚐<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17422">蚙<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18860">㕋<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19376">㟒<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21880">䑤<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21946">䓅<span class="small">キン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="684">経<span class="small">キン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1661">菌<span class="small">キン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1975">亀<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3692">掀<span class="small">キン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5378">菫<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8092">訢<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9979">衅<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11365">捦<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12836">惞<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13373">唫<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13773">堇<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14841">惍<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17149">脪<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17258">菦<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17782">赺<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17786">赾<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17881">軡<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18936">㖥<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24114">菳<span class="small">キン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="285">軽<span class="small">キン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="851">筋<span class="small">キン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="852">勤<span class="small">キン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1663">琴<span class="small">キン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2331">欽<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4683">釿<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4684">鈞<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5618">窘<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9536">菣<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10170">琹<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11838">䐃<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14089">婜<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16117">焮<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18008">鈙<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18208">雂<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20871">㾙<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/27109">鈫<span class="small">キン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="681">禁<span class="small">キン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1981">僅<span class="small">キン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2332">禽<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5910">經<span class="small">キン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6376">勤<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7285">靳<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7286">靲<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10081">䘳<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12868">歆<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13199">厪<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14979">搇<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16154">煡<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16745">碅<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19690">㥤<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20080">㮗<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20811">㽎<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20881">㾣<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21357">䇹<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4539">箘<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6046">輕<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6103">箟<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8046">覠<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9501">蓳<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11163">慬<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12609">僒<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13844">墐<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14187">嫤<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14702">廑<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15792">漌<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17334">蔨<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17446">蜠<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17899">輑<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18028">銁<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18038">銞<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18333">馸<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19843">㨷<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21576">䋮<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22365">䛥<span class="small">キン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1375">緊<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4178">槿<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4635">瑾<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7090">鳹<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7640">鋆<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11473">撳<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11591">斳<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12630">僸<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12915">殣<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13136">凚<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14554">嶔<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14709">廞<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15352">歏<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18561">鹶<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19301">㝻<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20611">㹏<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20827">㽦<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21396">䈥<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22030">䔷<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23463">䰼<span class="small">キン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1982">錦<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3304">噤<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3725">擒<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4672">磬<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5670">龜<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6530">麇<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6544">黅<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7387">頵<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13536">噙<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13552">噷<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14232">嬜<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14887">懄<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15899">澿<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16612">瘽<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19543">㢙<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19729">㦗<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19857">㩒<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22931">䦦<span class="small">キン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1662">謹<span class="small">キン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2329">檎<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3628">懃<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7406">顉<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17496">螼<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20144">㯲<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20212">㱈<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21130">䃢<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21415">䈽<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21604">䌍<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22852">䤺<span class="small">キン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1664">襟<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5463">覲<span class="small">キン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6413">謹<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7250">麏<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16618">癛<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18498">鵘<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22861">䥅<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22862">䥆<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4559">麕<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17514">蠄<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18503">鵭<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21250">䅾<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21619">䌝<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23702">䶖<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5292">饉<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8777">舋<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22407">䜗<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="10768">礥<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23649">䵖<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22187">䘆<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23203">䫴<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7852">鑫<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23654">䵛<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4853">釁<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6677">齽<span class="small">キン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19335">㞤<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6689">乑<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12386">众<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18684">㐺<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18851">㕂<span class="small">ギン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="119">言<span class="small">ギン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1665">吟<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3224">听<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3331">圻<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3451">岑<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4328">沂<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16354">犾<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20626">㹞<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20624">㹜<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3338">垠<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5107">狠<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13716">垦<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15509">泿<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8086">訔<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13621">圁<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13728">垽<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14457">峾<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16385">狺<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16501">珢<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17232">荶<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18923">㖗<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21945">䓄<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3457">崟<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8092">訢<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13373">唫<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17636">訡<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17782">赺<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20359">㴈<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/25132">崯<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4683">釿<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13425">喗<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16397">猌<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17435">蛝<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/20719">㻒<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22096">䖐<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16748">碒<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/21353">䇵<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23140">䪩<span class="small">ギン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="278">銀<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8696">鄞<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/12609">僒<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14187">嫤<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17899">輑<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8154">誾<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13533">噖<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14873">慭<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15352">歏<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/17802">趛<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/18255">鞎<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19083">㙬<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19301">㝻<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/19853">㩈<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23463">䰼<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3618">憖<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11001">憗<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/14221">嬐<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/16765">磭<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22852">䤺<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/15303">檭<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/23612">䴦<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6665">齗<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/13571">嚚<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/22107">䖜<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3768">齦<span class="small">ギン</span></a></li>
                         <li class="others_kanji onyomi"><a href="kanjiy/24317">䕾<span class="small">ギン</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5163">睾<span class="small">きんたま</span></a></li>
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
                                        <li><a href="kanjiy/12934" title="漢字「殺」のページ"><span class="rank">10</span><span class="jp">殺</span></a></li>
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