<?php
/*
 * Template Name: Yomi41
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
               <h1 class="ttl_main">音訓検索「る」</h1>
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
               <p>「る」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>る</option>
                              <option value="yomi42">れ</option>
                              <option value="yomi43">ろ</option>
                              <option value="yomi44">わ</option>
                              <option value="yomi45">を</option>
                         </select>
                    </div>
               </div><!--search_narrowdown-->
               <div class="search_data yomi_menu">
                    <ul class="search_menu2">
                         <li id="parts1_menu"><a href="#parts1">る</a></li>
                         <li id="parts2_menu"><a href="#parts2">るい</a></li>
                         <li id="parts3_menu"><a href="#parts3">るつ</a></li>
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
                    <h3 class="ttl_while">る</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="12971">㔷<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="14672">庐<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="20312">㳅<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="20816">㽖<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="5951">畄<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="16588">畂<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="19518">㡻<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="19774">㧕<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="20266">㲎<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="14027">娄<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="20035">㭔<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="20485">㶯<span class="small">ル</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="434">流<span class="small">ル</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="822">留<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="19051">㙀<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="19174">㛞<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="19527">㢅<span class="small">ル</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2977">琉<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="2995">婁<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="10321">㽞<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="12603">偻<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="15195">梇<span class="small">ル</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1926">硫<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="2996">屡<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="5996">鈩<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="10320">畱<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="15712">湰<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="16733">硦<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="24136">裗<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="24919">喽<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="25137">嵝<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="25562">溇<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="26473">蒌<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="27116">㥪<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="3130">僂<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="14163">媹<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="14524">嵧<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="17303">蒥<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="19832">㨨<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="22129">䖻<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="24120">蓅<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="27790">𠺕<span class="small">ル</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2127">瑠<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="6483">屢<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="9636">蔞<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="10071">褛<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="10432">瘘<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="11170">慺<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="12342">塿<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="13491">嘍<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="14543">嶁<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="15790">漊<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="17325">蔄<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="18311">飹<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="19227">㜢<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="19407">㟺<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="19491">㡞<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="20669">㺏<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="22766">䣚<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="25656">熘<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="27639">䁖<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="9920">蝼<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="11901">膢<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="15382">氀<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="15791">漋<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="16193">熡<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="16756">磂<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="17928">遱<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="19078">㙧<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="19727">㦕<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="19850">㩅<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="19940">㪹<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="20738">㻲<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="25957">篓<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="27125">鋶<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="3032">篭<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="3041">璢<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="5060">褸<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="5247">瘻<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="16686">瞜<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="21169">䄛<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="21247">䅹<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="22155">䗜<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="4097">螻<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="4589">簍<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="4804">縷<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="17194">艛<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="21134">䃧<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="22433">䝀<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="26859">蹓<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="8471">軁<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="14256">嬼<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="17379">藰<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="17700">謱<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="17754">貗<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="18565">麍<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="22311">䚧<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="22445">䝏<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="23475">䱖<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="3513">廬<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="4721">鏤<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="13578">嚨<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="14586">巄<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="14793">徿<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="18214">雡<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="23967">巃<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="16263">爖<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="17597">襩<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="18262">鞻<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="18409">鬸<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="21261">䆍<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="21454">䉧<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="23352">䮫<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="23439">䰘<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="24139">襱<span class="small">ル</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="2131">籠<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="18539">鷜<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="23500">䱾<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="22648">䡁<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="4738">鑪<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="23513">䲐<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="23368">䮾<span class="small">ル</span></a></li>
                         <li class="others_kanji onyomi"><a href="24177">鸗<span class="small">ル</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">るい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="13207">厽<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4340">泪<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13703">垒<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22777">䣦<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24398">䒹<span class="small">ルイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1307">涙<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24095">类<span class="small">ルイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1932">累<span class="small">ルイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6445">淚<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16408">猚<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20355">㴃<span class="small">ルイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1933">塁<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9039">絫<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17155">腂<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4960">誄<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12602">傫<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21321">䇐<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9635">蔂<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12673">㒍<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="14177">嫘<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="10330">畾<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12226">樏<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20610">㹎<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21838">䐯<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22381">䛶<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5245">瘰<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16763">磥<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4803">縲<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18830">㔣<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21419">䉂<span class="small">ルイ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="631">類<span class="small">ルイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6155">壘<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9711">藟<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19097">㙼<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20452">㵽<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5133">羸<span class="small">ルイ</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="6364">類<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12302">櫐<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16564">瓃<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18746">㒦<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9150">纍<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15970">灅<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17398">蘲<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17518">蠝<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19442">㠥<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8221">讄<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9712">蘽<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17397">蘱<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17909">轠<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12672">儽<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9742">虆<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16805">禷<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20473">㶟<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12832">欙<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="7236">鸓<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23599">䴎<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9126">纝<span class="small">ルイ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6643">鼺<span class="small">ルイ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">るつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3334">坩<span class="small">るつぼ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24995">埚<span class="small">るつぼ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3346">堝<span class="small">るつぼ</span></a></li>
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
</script>
     <?php wp_footer() ?>