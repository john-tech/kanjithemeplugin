<?php
/*
 * Template Name: Yomi15
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
               <h1 class="ttl_main">音訓検索「そ」</h1>
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
               <p>「そ」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>そ</option>
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
                         <li id="parts1_menu"><a href="#parts1">そ</a></li>
                         <li id="parts2_menu"><a href="#parts2">そう</a></li>
                         <li id="parts3_menu"><a href="#parts3">そえ</a></li>
                         <li id="parts4_menu"><a href="#parts4">そき</a></li>
                         <li id="parts5_menu"><a href="#parts5">そく</a></li>
                         <li id="parts6_menu"><a href="#parts6">そけ</a></li>
                         <li id="parts7_menu"><a href="#parts7">そこ</a></li>
                         <li id="parts8_menu"><a href="#parts8">そし</a></li>
                         <li id="parts9_menu"><a href="#parts9">そそ</a></li>
                         <li id="parts10_menu"><a href="#parts10">そた</a></li>
                         <li id="parts11_menu"><a href="#parts11">そち</a></li>
                         <li id="parts12_menu"><a href="#parts12">そつ</a></li>
                         <li id="parts13_menu"><a href="#parts13">そて</a></li>
                         <li id="parts14_menu"><a href="#parts14">そと</a></li>
                         <li id="parts15_menu"><a href="#parts15">そな</a></li>
                         <li id="parts16_menu"><a href="#parts16">そね</a></li>
                         <li id="parts17_menu"><a href="#parts17">その</a></li>
                         <li id="parts18_menu"><a href="#parts18">そは</a></li>
                         <li id="parts19_menu"><a href="#parts19">そひ</a></li>
                         <li id="parts20_menu"><a href="#parts20">そま</a></li>
                         <li id="parts21_menu"><a href="#parts21">そむ</a></li>
                         <li id="parts22_menu"><a href="#parts22">そめ</a></li>
                         <li id="parts23_menu"><a href="#parts23">そも</a></li>
                         <li id="parts24_menu"><a href="#parts24">そよ</a></li>
                         <li id="parts25_menu"><a href="#parts25">そら</a></li>
                         <li id="parts26_menu"><a href="#parts26">そり</a></li>
                         <li id="parts27_menu"><a href="#parts27">そる</a></li>
                         <li id="parts28_menu"><a href="#parts28">それ</a></li>
                         <li id="parts29_menu"><a href="#parts29">そろ</a></li>
                         <li id="parts30_menu"><a href="#parts30">そん</a></li>
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
                    <h3 class="ttl_while">そ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="906">処<span class="small">ソ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2543">疋<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12726">处<span class="small">ソ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="533">初<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12414">伹<span class="small">ソ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="329">所<span class="small">ソ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1475">阻<span class="small">ソ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2043">狙<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2489">姐<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2652">岨<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3240">咀<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3528">徂<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4335">沮<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4336">泝<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5693">鼡<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7923">阼<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11049">怚<span class="small">ソ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="757">祖<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3093">俎<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3548">怎<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4217">胙<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4221">胥<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5957">爼<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12897">殂<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16492">珇<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19943">㪽<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24289">䏢<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24338">䢐<span class="small">ソ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="758">素<span class="small">ソ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1792">租<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4658">砠<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5219">疽<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5636">祚<span class="small">ソ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6398">祖<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13194">厝<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16814">秨<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18868">㕖<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19782">㧧<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25856">础<span class="small">ソ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="178">組<span class="small">ソ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1474">措<span class="small">ソ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1476">粗<span class="small">ソ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2045">曽<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4032">梳<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4062">蛆<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6059">處<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8062">觕<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9262">耝<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9511">菹<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12725">䖏<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15220">椘<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20274">㲙<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20348">㳻<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21869">䑕<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21961">䓚<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24816">唨<span class="small">ソ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1167">訴<span class="small">ソ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1704">酢<span class="small">ソ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1791">疎<span class="small">ソ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2544">疏<span class="small">ソ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4251">曾<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4841">酥<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4952">詛<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5366">甦<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8607">㴑<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9512">葅<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9561">葄<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12573">傃<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14129">媎<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17737">豠<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19983">㫹<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22466">䝪<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22576">䟭<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22784">䣯<span class="small">ソ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="347">想<span class="small">ソ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1793">塑<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2549">鼠<span class="small">ソ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2653">楚<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3031">溯<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3937">耡<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4557">麁<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7581">鉏<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9591">蒩<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10387">瘄<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11157">愫<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13449">嗉<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13810">塐<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14172">嫊<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15749">溸<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19822">㨞<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20837">㽰<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21992">䔃<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22100">䖕<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27805">𡏄<span class="small">ソ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2044">遡<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3604">愬<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6106">踈<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7292">靻<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10339">䟽<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11883">膆<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12192">榡<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17329">蔍<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17331">蔖<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18309">飷<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22006">䔘<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24163">飵<span class="small">ソ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2651">噌<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4845">醋<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5411">蔬<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6717">駔<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7260">麄<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17022">縃<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22594">䠂<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24608">儊<span class="small">ソ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1418">錯<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7247">麆<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10879">穌<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11191">憷<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15904">濋<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15909">濐<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17030">縤<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22197">䘘<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22247">䙘<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26551">螦<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15299">檚<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22388">䛾<span class="small">ソ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1477">礎<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10447">癙<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18434">鯂<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22860">䥄<span class="small">ソ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2610">蘇<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5983">蘓<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19547">㢝<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3766">齟<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15327">櫯<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22879">䥚<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23505">䲆<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23922">囌<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27728">𡔈<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6672">齭<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6678">齼<span class="small">ソ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6502">麤<span class="small">ソ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5786">囎<span class="small">そ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16814">秨<span class="small">ゾ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2045">曽<span class="small">ゾ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4251">曾<span class="small">ゾ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17737">豠<span class="small">ゾ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22100">䖕<span class="small">ゾ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22006">䔘<span class="small">ゾ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24163">飵<span class="small">ゾ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">そう</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="18849">㔿<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26356">屮<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1478">双<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2064">爪<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3208">卅<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6524">帀<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12793">刅<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18871">㕚<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24559">仓<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2656">匝<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3196">匆<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3209">丗<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12923">匇<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13172">卡<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16587">甴<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24528">丛<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24560">仦<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="052">早<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="556">争<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1004">扱<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1795">壮<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2556">庄<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5312">艸<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5681">赱<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12390">仯<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12796">创<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13041">仺<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13947">妆<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19342">㞫<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24568">伧<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25263">扫<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="179">走<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1747">抄<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2655">宋<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3375">妝<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3663">找<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3665">抓<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5801">壯<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10461">皁<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10462">皂<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10936">灶<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12925">囱<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13251">吵<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13612">囪<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14673">庒<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14922">抸<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15471">沞<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17207">苁<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19131">㚫<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20477">㶤<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24785">呛<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25099">层<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25237">怆<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25268">抢<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25508">沧<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26347">苍<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="896">宗<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3485">帚<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4351">牀<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4901">炒<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6247">爭<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6484">刱<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8566">迊<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9449">㽵<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10962">忩<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11969">枛<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12795">戗<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13289">咂<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13903">夝<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15158">枣<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17126">肏<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17219">苼<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20297">㲴<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24532">丧<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24787">咗<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25373">枪<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="051">草<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="348">相<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="349">送<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="930">奏<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1796">荘<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3174">剏<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3251">哈<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3548">怎<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3554">怱<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9309">臿<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10520">眨<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12037">桒<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12985">匨<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13128">凁<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13890">壵<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16491">珄<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24776">叜<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25033">奖<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25124">峥<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25238">总<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25288">挣<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25375">栆<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25775">狰<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25811">疮<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26818">㚇<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="557">倉<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1479">桑<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1794">捜<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1800">挿<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2672">蚤<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3216">叟<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3370">奘<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4519">笊<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5816">弉<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5939">莊<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9258">耖<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9478">莦<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11345">捎<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11746">曺<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12514">倧<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12737">剙<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13072">倊<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13363">唕<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14029">娋<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14048">娤<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14738">弰<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15184">样<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15596">涑<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16282">牂<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16727">砸<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17067">羘<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19160">㛐<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21673">䍧<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22112">䖣<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22214">䘮<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24812">唣<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26310">脏<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26328">舱<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27810">𡝂<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="555">巣<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="933">窓<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1481">掃<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1802">曹<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2045">曽<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2046">爽<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2658">掻<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3121">偬<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3393">娵<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3461">崢<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3693">掫<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4383">淙<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5942">菷<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6113">梍<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6434">巢<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6541">悤<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8063">觘<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8363">趿<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9074">捴<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9508">菨<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9513">萐<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11108">悰<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11374">掙<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12357">啑<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12854">欶<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13078">偛<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13134">凑<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13384">唼<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13751">埥<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13755">埩<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13767">埽<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14068">婃<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14277">孮<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14472">崝<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14634">帹<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14777">徖<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15196">梉<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16098">焋<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16404">猔<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16407">猙<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18940">㖩<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19800">㧿<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19903">㪌<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20192">㰱<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21679">䍭<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21793">䏴<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21958">䓗<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22451">䝖<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22500">䞙<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22720">䢠<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24751">厢<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26838">跄<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="929">装<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="932">創<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1480">葬<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1752">粧<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1798">喪<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2047">痩<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2657">惣<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2660">湊<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2668">葱<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3401">嫂<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3505">廂<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4132">棗<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4136">棕<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4251">曾<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4545">筝<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4687">鈔<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5556">稍<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5965">愡<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6187">搜<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6189">插<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6271">窗<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7555">鈒<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9073">揔<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9551">葙<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9562">塟<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9563">葼<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10174">琮<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10175">琤<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10563">睄<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11140">惾<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11158">愺<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11349">揷<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12109">棷<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12574">傖<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12575">傁<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12717">凔<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13791">堫<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14508">嵏<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14512">嵕<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14695">廀<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14966">揍<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15208">棇<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15212">棦<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15706">湦<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16111">焧<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16411">猣<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17278">萷<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18874">㕠<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19184">㛮<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19329">㞚<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19606">㣭<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19680">㥖<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20020">㬹<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20371">㴙<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20501">㷅<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21347">䇬<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22123">䖲<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22215">䘯<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23053">䨿<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24206">㛼<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24290">䐋<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25334">搃<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26318">腙<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26882">㜀<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="347">想<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1170">僧<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1748">奨<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2573">蛸<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2669">蒼<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3183">剿<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3193">勦<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3605">愴<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3712">搶<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4137">椶<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4406">滄<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4414">溲<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4566">歃<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6309">裝<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6328">賍<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6477">搔<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7287">靸<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7365">韴<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8688">鄋<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8821">筲<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9333">艄<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10916">牎<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11159">慅<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11348">摉<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11865">腠<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11866">朡<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12148">楤<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12150">楱<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13092">傮<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13093">傯<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13095">傸<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13443">喿<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13447">嗆<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13458">嗓<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14519">嵢<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14987">搡<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15082">旓<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15732">溞<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16153">煠<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16427">獀<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16434">獊<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16741">碀<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16742">碂<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17086">翜<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17312">蓃<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18022">鉔<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18716">㑿<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19396">㟬<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19696">㥰<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19988">㬁<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20075">㮑<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20084">㮜<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20513">㷓<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20602">㹅<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21488">䊋<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22298">䚘<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23132">䪞<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23982">廋<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24064">牐<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26494">蓗<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="759">総<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="760">増<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="928">層<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1482">遭<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1483">憎<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2659">槍<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2661">漕<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2666">綜<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2667">聡<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3296">嗾<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3297">嗽<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3613">慥<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4364">颯<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4419">漱<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4543">箒<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4544">箏<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5269">粽<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5406">蔟<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5775">奬<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6374">僧<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6711">馺<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7430">䬃<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8700">鄛<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8840">箑<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8841">䈉<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9070">綪<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9072">摠<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9231">翣<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9617">蓯<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9621">蔥<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10203">瑵<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10866">稯<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10914">䆫<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11139">憁<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11450">摐<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11451">摷<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11884">膄<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12193">㮴<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12794">戧<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12888">歰<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13487">嘈<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13831">塽<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14533">嵷<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14534">嵸<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14546">嶆<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14864">慒<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14869">慡<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15001">摗<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15003">摤<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15007">摪<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15787">漅<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15794">漎<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15798">漗<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15816">漴<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15821">漺<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15824">潀<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15827">潄<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16168">煼<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16284">牄<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17321">蓸<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17898">輎<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18633">﨎<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18730">㒎<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19216">㜖<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19217">㜗<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19492">㡟<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19539">㢔<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19550">㢡<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19921">㪢<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20288">㲧<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20670">㺐<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20671">㺑<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21016">䁓<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21573">䋫<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21667">䍟<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21686">䍵<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22014">䔠<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22019">䔪<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22232">䙄<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22722">䢢<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24234">㮸<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25590">潈<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26504">蔷<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26816">賘<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27673">槡<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27715">𥧄<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="389">箱<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="934">蔵<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1801">槽<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2048">踪<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2651">噌<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4181">樔<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4978">諍<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5243">瘡<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5645">臧<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6253">獎<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6381">層<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6383">憎<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6419">增<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6450">瘦<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6717">駔<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6897">魳<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7663">銺<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7999">霅<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8265">䝋<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8309">賨<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8964">糉<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9071">緫<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9091">緵<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9283">聦<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10215">璁<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10216">璅<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10414">瘙<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10591">瞍<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10725">磉<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10915">牕<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11499">撡<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12149">樬<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12799">劋<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13523">噈<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14886">憽<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15265">樉<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15845">潧<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15846">潨<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15852">潲<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15906">濍<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16189">熜<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16858">窲<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17091">翪<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17192">艐<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17470">蝬<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17585">褬<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17665">誴<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17767">賩<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17926">遪<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19425">㠎<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19587">㣒<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19754">㦼<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20527">㷮<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20536">㷹<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20942">㿷<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21236">䅮<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21392">䈡<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21397">䈦<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21733">䎫<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21835">䐬<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21892">䑹<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22148">䗓<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22441">䝊<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23964">嶒<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24099">縂<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26291">聪<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26854">踭<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="931">操<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2580">鞘<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2671">薮<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3307">噪<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3629">懆<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3984">霎<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4433">澡<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4476">輳<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4709">錚<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4888">艘<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4889">艙<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5421">薔<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7698">錝<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8715">鄵<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8873">䈰<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8958">糚<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9188">罺<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10426">瘶<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10913">窻<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10932">窼<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10937">䆴<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12244">橧<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14575">嶯<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14658">幧<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15273">樷<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15302">檧<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15366">殧<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16207">熷<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16235">燪<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16551">璔<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16762">磢<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16928">篬<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17026">縔<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17487">螥<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17589">褿<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18302">颵<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18811">㔌<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20137">㯥<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20422">㵞<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20428">㵤<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20795">㼻<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20797">㼽<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21168">䄚<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21599">䌆<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21752">䏂<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22039">䕅<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22244">䙕<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22387">䛽<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23224">䬊<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23540">䲼<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23610">䴤<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23884">䦛<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24033">濈<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24229">㬝<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25346">擞<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1168">燥<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1799">霜<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2662">甑<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2664">竃<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2665">糟<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4278">蹌<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4591">簇<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4890">艚<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5911">總<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6282">聰<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6832">髾<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7731">鍐<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7761">䤹<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7791">鍯<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8186">謅<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8893">篵<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8894">䈾<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8980">糙<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9116">縿<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9119">繅<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9192">罾<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9717">薻<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9910">螬<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10239">璪<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10437">癄<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10632">矰<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10748">磳<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11916">臊<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15389">氉<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16769">磼<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16866">竲<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17500">蟌<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17689">謏<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17690">謒<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17769">賶<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18079">鍤<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18095">鎝<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18265">韒<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18355">駷<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20145">㯶<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20801">㽂<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20831">㽪<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21036">䁬<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21411">䈹<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21420">䉃<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21756">䏆<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22161">䗢<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22167">䗮<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22255">䙢<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22256">䙣<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22680">䡦<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22771">䣟<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23914">噆<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24128">藂<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1169">騒<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1171">贈<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2579">鎗<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2654">叢<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2670">藪<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3867">鮹<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4649">鬆<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5984">藏<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6146">雙<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6754">騌<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6838">鬃<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7416">䫙<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7441">䬒<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7760">鎪<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8271">豵<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9137">繒<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11508">擻<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17045">繱<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17594">襙<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17694">謥<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17697">謪<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17854">蹧<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17905">轈<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17994">醩<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18096">鎟<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18260">鞩<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18401">鬇<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20443">㵴<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20907">㿋<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21437">䉕<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21440">䉘<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21717">䎖<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21911">䒏<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22392">䜅<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22395">䜈<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22397">䜊<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22537">䟁<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22539">䟃<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22688">䡯<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23096">䩳<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23684">䵽<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25842">矂<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="935">臓<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1076">繰<span class="small">ソウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1797">藻<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2674">鯵<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4719">鏘<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6415">贈<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6753">騣<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6764">騘<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6843">鬉<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6868">鬷<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6988">鯫<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6989">鯮<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7415">顙<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7440">颼<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7785">鏦<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7789">鏉<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7790">鏓<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8202">譄<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8437">蹭<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8928">䉤<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15321">櫢<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18112">鏪<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18375">騲<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22865">䥊<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23145">䪮<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23146">䪯<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23338">䮜<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23340">䮟<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23343">䮢<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23482">䱢<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24162">颾<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24236">㯾<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25655">餸<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25993">糭<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3417">孀<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4292">躁<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5010">譟<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6350">騷<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7003">鯼<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8356">趮<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15966">灀<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18121">鏿<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21452">䉥<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21691">䍼<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23006">䨇<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23194">䫪<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23344">䮣<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24159">鏳<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2663">竈<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3320">囃<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4604">籔<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4734">鐺<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6763">驄<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6780">騻<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7024">鰠<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7196">鶬<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14263">孇<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15972">灇<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18134">鐰<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22081">䕹<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22448">䝒<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22629">䠫<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23430">䰌<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24250">㶓<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24316">䕺<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27831">𢅻<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2673">鰺<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5497">贓<span class="small">ソウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6292">臟<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6809">髒<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6851">鬙<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7043">䲃<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7207">鷞<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10285">䰝<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10774">礵<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12321">欆<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12322">欉<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16266">爜<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23452">䰫<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23632">䵁<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6355">髞<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18590">鼜<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21635">䌮<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23674">䵰<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7070">鱢<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9353">艭<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18216">雥<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21467">䉶<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8251">䝄<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23678">䵴<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24143">贜<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18154">鑶<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18391">驡<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6781">驦<span class="small">ソウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18560">鸘<span class="small">ソウ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27880">𣷺<span class="small">そう</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20310">㳂<span class="small">そ（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="829">沿<span class="small">そ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14049">娦<span class="small">そ（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="603">副<span class="small">そ（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1199">添<span class="small">そ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27879">𣷹<span class="small">そ（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1273">傍<span class="small">そ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25065">嫔<span class="small">そ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3413">嬪<span class="small">そ（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2870">瀕<span class="small">そ（う）</span></a></li>
                         <li class="others_kanji onyomi"><a href="6249">爿<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13172">卡<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25368">杂<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19363">㟄<span class="small">ゾウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="762">造<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3370">奘<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5816">弉<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11746">曺<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15184">样<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26310">脏<span class="small">ゾウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1802">曹<span class="small">ゾウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2045">曽<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14277">孮<span class="small">ゾウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="539">象<span class="small">ゾウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="4251">曾<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20371">㴙<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6328">賍<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8589">艁<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13092">傮<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22516">䞪<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23132">䪞<span class="small">ゾウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="713">雑<span class="small">ゾウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="760">増<span class="small">ゾウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="761">像<span class="small">ゾウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1483">憎<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3613">慥<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12880">勨<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13487">嘈<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14546">嶆<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15816">漴<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17321">蓸<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19216">㜖<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22005">䔗<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24221">㨾<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25066">嫱<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26816">賘<span class="small">ゾウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="934">蔵<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5645">臧<span class="small">ゾウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6383">憎<span class="small">ゾウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6419">增<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14552">嶑<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17926">遪<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19425">㠎<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20527">㷮<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21835">䐬<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2565">橡<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14229">嬙<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17589">褿<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20795">㼻<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21168">䄚<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22387">䛽<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24229">㬝<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3048">襍<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4890">艚<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16769">磼<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18491">鴹<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21420">䉃<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21756">䏆<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21900">䒃<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22255">䙢<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22771">䣟<span class="small">ゾウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1171">贈<span class="small">ゾウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="3049">雜<span class="small">ゾウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5984">藏<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20443">㵴<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21437">䉕<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22397">䜊<span class="small">ゾウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="935">臓<span class="small">ゾウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6415">贈<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18112">鏪<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23338">䮜<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23343">䮢<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18127">鐌<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21691">䍼<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18134">鐰<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22081">䕹<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24250">㶓<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5497">贓<span class="small">ゾウ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6292">臟<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18453">鱌<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23594">䴂<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18216">雥<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23678">䵴<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24143">贜<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18154">鑶<span class="small">ゾウ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8796">笽<span class="small">そうけ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4545">筝<span class="small">そうのこと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4544">箏<span class="small">そうのこと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14371">屣<span class="small">ぞうり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="500">候<span class="small">そうろう</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">そえ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="6334">酘<span class="small">そえ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2726">儲<span class="small">そえ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4505">驂<span class="small">そえうま</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4505">驂<span class="small">そえの（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1199">添<span class="small">そ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27879">𣷹<span class="small">そ（える）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">そき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4009">枌<span class="small">そぎ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">そく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="3066">仄<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14665">庂<span class="small">ソク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="053">足<span class="small">ソク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="558">束<span class="small">ソク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1172">即<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3906">昃<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15092">昗<span class="small">ソク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="763">則<span class="small">ソク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1484">促<span class="small">ソク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6432">卽<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15542">洬<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18700">㑛<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="24076">皍<span class="small">ソク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="350">息<span class="small">ソク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="351">速<span class="small">ソク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2049">捉<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13334">哫<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13370">唧<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14039">娖<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15596">涑<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20642">㹱<span class="small">ソク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="559">側<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11377">㧻<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12854">欶<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15194">梀<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15363">殐<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17148">脨<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18778">㓘<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20858">㾊<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21205">䅇<span class="small">ソク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="764">測<span class="small">ソク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2592">粟<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3281">喞<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3594">惻<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13795">堲<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14973">揤<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15215">棴<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17792">趋<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20193">㰲<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22566">䟟<span class="small">ソク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="168">数<span class="small">ソク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1147">触<span class="small">ソク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2009">塞<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7571">鉃<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13094">傶<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20378">㴧<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="3297">嗽<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4922">熄<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5406">蔟<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8069">觫<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="9622">蔌<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="13834">墄<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15065">敱<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15066">敳<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17569">裻<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17657">誎<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17799">趗<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17801">趚<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18806">㔄<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19701">㥶<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20091">㮩<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20400">㵀<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21998">䔎<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22364">䛤<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22427">䜹<span class="small">ソク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1126">趣<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6202">數<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8614">遬<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="12213">樕<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15266">樍<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15844">潥<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18045">鋉<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20113">㯈<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21246">䅸<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23461">䰹<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7474">餗<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10427">瘯<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="11192">懎<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15901">濇<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18060">錊<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="19855">㩋<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22247">䙘<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="27699">𡑮<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="2501">趨<span class="small">ソク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2591">燭<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4591">簇<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8895">簌<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10622">瞩<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15071">斀<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15078">斶<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20002">㬘<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7762">鎴<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15940">瀒<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17370">藗<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18090">鎐<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21616">䌚<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4723">鏃<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17515">蠈<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6315">觸<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7002">鯽<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="7004">鰂<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="8540">轖<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22544">䟉<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22873">䥔<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14270">孎<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18455">鱡<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="15131">曯<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="16273">爥<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5177">矚<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17526">蠾<span class="small">ソク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21641">䌵<span class="small">ソク</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1417">削<span class="small">そ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="511">殺<span class="small">そ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12934">殺<span class="small">そ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5609">翦<span class="small">そ（ぐ）</span></a></li>
                         <li class="others_kanji onyomi"><a href="19354">㞺<span class="small">ゾク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1173">俗<span class="small">ゾク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22497">䞖<span class="small">ゾク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="352">族<span class="small">ゾク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6323">戝<span class="small">ゾク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21205">䅇<span class="small">ゾク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="765">属<span class="small">ゾク</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2592">粟<span class="small">ゾク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="560">続<span class="small">ゾク</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1485">賊<span class="small">ゾク</span></a></li>
                         <li class="others_kanji onyomi"><a href="5406">蔟<span class="small">ゾク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20400">㵀<span class="small">ゾク</span></a></li>
                         <li class="others_kanji onyomi"><a href="18733">㒔<span class="small">ゾク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23620">䴰<span class="small">ゾク</span></a></li>
                         <li class="others_kanji onyomi"><a href="10736">䃚<span class="small">ゾク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4591">簇<span class="small">ゾク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20141">㯮<span class="small">ゾク</span></a></li>
                         <li class="others_kanji onyomi"><a href="20747">㻿<span class="small">ゾク</span></a></li>
                         <li class="others_kanji onyomi"><a href="4723">鏃<span class="small">ゾク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17515">蠈<span class="small">ゾク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17597">襩<span class="small">ゾク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22544">䟉<span class="small">ゾク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6097">續<span class="small">ゾク</span></a></li>
                         <li class="others_kanji onyomi"><a href="6169">屬<span class="small">ゾク</span></a></li>
                         <li class="others_kanji onyomi"><a href="23362">䮷<span class="small">ゾク</span></a></li>
                         <li class="others_kanji onyomi"><a href="14270">孎<span class="small">ゾク</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">そけ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="511">殺<span class="small">そ（げる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12934">殺<span class="small">そ（げる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">そこ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="19510">㡳<span class="small">そこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="574">底<span class="small">そこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4307">臀<span class="small">そこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4678">礑<span class="small">そこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11918">臋<span class="small">そこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25259">戋<span class="small">そこ（なう）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24566">伤<span class="small">そこ（なう）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="585">毒<span class="small">そこ（なう）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3646">戔<span class="small">そこ（なう）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="459">害<span class="small">そこ（なう）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="518">残<span class="small">そこ（なう）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6323">戝<span class="small">そこ（なう）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17432">蛊<span class="small">そこ（なう）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5906">殘<span class="small">そこ（なう）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="766">損<span class="small">そこ（なう）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="909">傷<span class="small">そこ（なう）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1485">賊<span class="small">そこ（なう）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4703">銷<span class="small">そこ（なう）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9974">螙<span class="small">そこ（なう）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4115">蠧<span class="small">そこ（なう）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4113">蠱<span class="small">そこ（なう）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4114">蠹<span class="small">そこ（なう）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="766">損<span class="small">そこ（ねる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">そし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4993">謗<span class="small">そし（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="792">非<span class="small">そし（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1115">刺<span class="small">そし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8114">呧<span class="small">そし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3238">呰<span class="small">そし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5223">疵<span class="small">そし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5483">貶<span class="small">そし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4952">詛<span class="small">そし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4956">詆<span class="small">そし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8126">訽<span class="small">そし（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1976">毀<span class="small">そし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4961">詬<span class="small">そし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12940">毁<span class="small">そし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17656">誈<span class="small">そし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4967">誣<span class="small">そし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4969">誚<span class="small">そし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2854">誹<span class="small">そし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4993">謗<span class="small">そし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5004">譏<span class="small">そし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5007">譛<span class="small">そし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5006">譖<span class="small">そし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8225">䜛<span class="small">そし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5017">讒<span class="small">そし（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">そそ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="2119">沃<span class="small">そそ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25506">沥<span class="small">そそ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="364">注<span class="small">そそ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24014">泻<span class="small">そそ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25516">泼<span class="small">そそ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4349">洒<span class="small">そそ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10509">泴<span class="small">そそ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13370">唧<span class="small">そそ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="173">雪<span class="small">そそ（ぐ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2990">淋<span class="small">そそ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4383">淙<span class="small">そそ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2836">溌<span class="small">そそ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3281">喞<span class="small">そそ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25559">溅<span class="small">そそ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4414">溲<span class="small">そそ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15721">溉<span class="small">そそ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2257">潅<span class="small">そそ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2228">漑<span class="small">そそ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4430">澆<span class="small">そそ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6481">潑<span class="small">そそ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5568">盥<span class="small">そそ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20451">㵼<span class="small">そそ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4443">濺<span class="small">そそ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4447">瀉<span class="small">そそ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4452">瀝<span class="small">そそ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7993">䨮<span class="small">そそ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2256">灌<span class="small">そそ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4457">灑<span class="small">そそ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1698">唆<span class="small">そそのか（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3296">嗾<span class="small">そそのか（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1277">漫<span class="small">そぞ（ろに）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15893">澷<span class="small">そぞ（ろに）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2439">坐<span class="small">そぞろ（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24200">㘴<span class="small">そぞろ（に）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19046">㘸<span class="small">そぞろ（に）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">そた</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="246">育<span class="small">そだ（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6232">毓<span class="small">そだ（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="246">育<span class="small">そだ（てる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6232">毓<span class="small">そだ（てる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">そち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="20279">㲞<span class="small">ソチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17455">蜶<span class="small">ソチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21505">䊝<span class="small">ソチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23418">䯿<span class="small">ソチ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22303">䚝<span class="small">ゾチ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">そつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="5669">卆<span class="small">ソツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14609">帅<span class="small">ソツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3107">伜<span class="small">ソツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="27797">𡉻<span class="small">ソツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="561">卒<span class="small">ソツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13001">䘚<span class="small">ソツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1770">帥<span class="small">ソツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3106">倅<span class="small">ソツ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="820">率<span class="small">ソツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5114">猝<span class="small">ソツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6076">埣<span class="small">ソツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11375">捽<span class="small">ソツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12356">啐<span class="small">ソツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12101">椊<span class="small">ソツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20279">㲞<span class="small">ソツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10858">稡<span class="small">ソツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10920">窣<span class="small">ソツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11452">摔<span class="small">ソツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17455">蜶<span class="small">ソツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17836">踤<span class="small">ソツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22303">䚝<span class="small">ソツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21505">䊝<span class="small">ソツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23418">䯿<span class="small">ソツ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13003">卛<span class="small">ソツ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">そて</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="2023">袖<span class="small">そで</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">そと</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="096">外<span class="small">そと</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">そな</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5295">饌<span class="small">そなえもの</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="281">具<span class="small">そな（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="850">供<span class="small">そな（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3454">峙<span class="small">そな（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12581">俻<span class="small">そな（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12580">偹<span class="small">そな（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="793">備<span class="small">そな（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3371">奠<span class="small">そな（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12579">僃<span class="small">そな（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2042">膳<span class="small">そな（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5295">饌<span class="small">そな（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11906">饍<span class="small">そな（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="281">具<span class="small">そな（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12581">俻<span class="small">そな（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12580">偹<span class="small">そな（わる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="793">備<span class="small">そな（わる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12579">僃<span class="small">そな（わる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1342">該<span class="small">そな（わる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2040">詮<span class="small">そな（わる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">そね</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="27797">𡉻<span class="small">そね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3341">埆<span class="small">そね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6076">埣<span class="small">そね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13956">妒<span class="small">そね（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2069">妬<span class="small">そね（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5111">猜<span class="small">そね（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2020">嫉<span class="small">そね（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">その</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2170">苑<span class="small">その</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3325">囿<span class="small">その</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="085">園<span class="small">その</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2189">薗<span class="small">その</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12691">亓<span class="small">そ（の）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5880">尓<span class="small">そ（の）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14336">尒<span class="small">そ（の）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14337">尔<span class="small">そ（の）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2272">其<span class="small">そ（の）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3214">厥<span class="small">そ（の）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1342">該<span class="small">そ（の）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2479">爾<span class="small">そ（の）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">そは</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="2652">岨<span class="small">そば</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="559">側<span class="small">そば</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1273">傍<span class="small">そば</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5242">瘢<span class="small">そばかす</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3066">仄<span class="small">そばだ（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3449">屹<span class="small">そばだ（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2652">岨<span class="small">そばだ（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3454">峙<span class="small">そばだ（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17105">耸<span class="small">そばだ（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3458">崛<span class="small">そばだ（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4862">聳<span class="small">そばだ（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4564">欹<span class="small">そばだ（てる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11540">攲<span class="small">そばだ（てる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">そひ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="17105">耸<span class="small">そび（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5546">竦<span class="small">そび（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4862">聳<span class="small">そび（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17105">耸<span class="small">そび（やかす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5546">竦<span class="small">そび（やかす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4862">聳<span class="small">そび（やかす）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">そま</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4004">杣<span class="small">そま</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="924">染<span class="small">そ（まる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts21">
                    <h3 class="ttl_while">そむ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="392">反<span class="small">そむ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="223">北<span class="small">そむ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2640">舛<span class="small">そむ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3059">乖<span class="small">そむ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7278">靣<span class="small">そむ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="405">負<span class="small">そむ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="416">面<span class="small">そむ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="965">背<span class="small">そむ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1394">孤<span class="small">そむ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2840">叛<span class="small">そむ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3177">剌<span class="small">そむ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="388">倍<span class="small">そむ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1534">畔<span class="small">そむ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5317">辜<span class="small">そむ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4958">詭<span class="small">そむ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="965">背<span class="small">そむ（ける）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts22">
                    <h3 class="ttl_while">そめ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1169">騒<span class="small">ぞめ（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6350">騷<span class="small">ぞめ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="533">初<span class="small">そ（める）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="924">染<span class="small">そ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4375">涅<span class="small">そ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27878">𣵀<span class="small">そ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24021">湼<span class="small">そ（める）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22879">䥚<span class="small">そ（める）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts23">
                    <h3 class="ttl_while">そも</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1583">抑<span class="small">そもそも</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts24">
                    <h3 class="ttl_while">そよ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="14895">战<span class="small">そよ（ぐ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="552">戦<span class="small">そよ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3400">嫋<span class="small">そよ（ぐ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6182">戰<span class="small">そよ（ぐ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14233">嬝<span class="small">そよ（ぐ）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts25">
                    <h3 class="ttl_while">そら</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="061">天<span class="small">そら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13119">兲<span class="small">そら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="013">空<span class="small">そら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="945">宙<span class="small">そら</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3905">昊<span class="small">そら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3915">旻<span class="small">そら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11633">昦<span class="small">そら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="083">雲<span class="small">そら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3980">霄<span class="small">そら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23038">䨭<span class="small">そら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="392">反<span class="small">そ（らす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1607">逸<span class="small">そ（らす）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6416">逸<span class="small">そ（らす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26279">逸<span class="small">そ（らす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="242">暗<span class="small">そら（んじる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4985">諳<span class="small">そら（んじる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4986">諷<span class="small">そら（んじる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4968">誦<span class="small">そら（んずる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts26">
                    <h3 class="ttl_while">そり</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="8568">﨤<span class="small">そり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3847">毳<span class="small">そり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4187">橇<span class="small">そり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22728">䢪<span class="small">そり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4891">艝<span class="small">そり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4481">轌<span class="small">そり</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts27">
                    <h3 class="ttl_while">そる</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="392">反<span class="small">そ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2751">剃<span class="small">そ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3179">剔<span class="small">そ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6818">髠<span class="small">そ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6817">髡<span class="small">そ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6819">髨<span class="small">そ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2720">薙<span class="small">そ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12766">鬀<span class="small">そ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts28">
                    <h3 class="ttl_while">それ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="601">夫<span class="small">それ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12691">亓<span class="small">それ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2272">其<span class="small">それ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3214">厥<span class="small">それ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1566">某<span class="small">それがし</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1607">逸<span class="small">そ（れる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6416">逸<span class="small">そ（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26279">逸<span class="small">そ（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts29">
                    <h3 class="ttl_while">そろ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="14330">对<span class="small">そろ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="356">対<span class="small">そろ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2635">揃<span class="small">そろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6166">對<span class="small">そろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19841">㨵<span class="small">そろ（い）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2635">揃<span class="small">そろ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19841">㨵<span class="small">そろ（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2635">揃<span class="small">そろ（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19841">㨵<span class="small">そろ（える）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts30">
                    <h3 class="ttl_while">そん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="918">寸<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12742">刌<span class="small">ソン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="937">存<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3538">忖<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25086">孙<span class="small">ソン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="054">村<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="5199">邨<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11286">扻<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12454">侟<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3686">拵<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4349">洒<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14604">巺<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19561">㢲<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="25777">狲<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26368">荪<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26952">逊<span class="small">ソン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="562">孫<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4117">栫<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11344">捘<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17558">袸<span class="small">ソン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="936">尊<span class="small">ソン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2676">巽<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7455">飧<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13425">喗<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20867">㾕<span class="small">ソン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="766">損<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7456">飱<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9592">蓀<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14981">搎<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16424">猻<span class="small">ソン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2050">遜<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="8394">踆<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12618">僔<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14860">愻<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14998">摌<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15253">槂<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18033">銌<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21827">䐣<span class="small">ソン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2675">噂<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="6150">墫<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11481">撙<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13520">噀<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13892">壿<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14563">嶟<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15840">潠<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15866">澊<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21021">䁚<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22036">䔿<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="26513">蕵<span class="small">ソン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2677">樽<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="16217">燇<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17358">薞<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22053">䕖<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="22771">䣟<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="9162">罇<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17042">繜<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="4288">蹲<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15955">瀳<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17713">譐<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="7816">鐏<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18295">顨<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="21653">䍎<span class="small">ソン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2678">鱒<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18549">鷷<span class="small">ソン</span></a></li>
                         <li class="others_kanji onyomi"><a href="20553">㸑<span class="small">ソン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="937">存<span class="small">ゾン</span></a></li>
                         <li class="others_kanji onyomi"><a href="12454">侟<span class="small">ゾン</span></a></li>
                         <li class="others_kanji onyomi"><a href="17558">袸<span class="small">ゾン</span></a></li>
                         <li class="others_kanji onyomi"><a href="13425">喗<span class="small">ゾン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18033">銌<span class="small">ゾン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19847">㨻<span class="small">ゾン</span></a></li>
                         <li class="others_kanji onyomi"><a href="15955">瀳<span class="small">ゾン</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2678">鱒<span class="small">ゾン</span></a></li>
                         <li class="others_kanji onyomi"><a href="18549">鷷<span class="small">ゾン</span></a></li>
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