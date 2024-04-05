<?php
/*
 * Template Name: Yomi25
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
               <h1 class="ttl_main">音訓検索「の」</h1>
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
               <p>「の」から始まる読み方をする漢字です。</p>
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
                              <option value="#" selected>の</option>
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
                         <li id="parts1_menu"><a href="#parts1">の</a></li>
                         <li id="parts2_menu"><a href="#parts2">のう</a></li>
                         <li id="parts3_menu"><a href="#parts3">のえ</a></li>
                         <li id="parts4_menu"><a href="#parts4">のか</a></li>
                         <li id="parts5_menu"><a href="#parts5">のき</a></li>
                         <li id="parts6_menu"><a href="#parts6">のく</a></li>
                         <li id="parts7_menu"><a href="#parts7">のけ</a></li>
                         <li id="parts8_menu"><a href="#parts8">のこ</a></li>
                         <li id="parts9_menu"><a href="#parts9">のし</a></li>
                         <li id="parts10_menu"><a href="#parts10">のす</a></li>
                         <li id="parts11_menu"><a href="#parts11">のせ</a></li>
                         <li id="parts12_menu"><a href="#parts12">のそ</a></li>
                         <li id="parts13_menu"><a href="#parts13">のた</a></li>
                         <li id="parts14_menu"><a href="#parts14">のち</a></li>
                         <li id="parts15_menu"><a href="#parts15">のつ</a></li>
                         <li id="parts16_menu"><a href="#parts16">のと</a></li>
                         <li id="parts17_menu"><a href="#parts17">のの</a></li>
                         <li id="parts18_menu"><a href="#parts18">のは</a></li>
                         <li id="parts19_menu"><a href="#parts19">のひ</a></li>
                         <li id="parts20_menu"><a href="#parts20">のへ</a></li>
                         <li id="parts21_menu"><a href="#parts21">のほ</a></li>
                         <li id="parts22_menu"><a href="#parts22">のま</a></li>
                         <li id="parts23_menu"><a href="#parts23">のみ</a></li>
                         <li id="parts24_menu"><a href="#parts24">のむ</a></li>
                         <li id="parts25_menu"><a href="#parts25">のり</a></li>
                         <li id="parts26_menu"><a href="#parts26">のる</a></li>
                         <li id="parts27_menu"><a href="#parts27">のろ</a></li>
                         <li id="parts28_menu"><a href="#parts28">のん</a></li>
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
                    <h3 class="ttl_while">の</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2697">乃<span class="small">の</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2460">之<span class="small">の</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6612">㞢<span class="small">の</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2700">廼<span class="small">の</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2699">迺<span class="small">の</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27697">𡌛<span class="small">の</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="231">野<span class="small">の</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3028">埜<span class="small">の</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8782">㙒<span class="small">の</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2893">箆<span class="small">の</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8781">壄<span class="small">の</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2892">篦<span class="small">の</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">のう</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="206">内<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12696">內<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24199">㘝<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13015">乪<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19341">㞪<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24700">农<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23945">妠<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26390">㑇<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18693">㑎<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24580">侬<span class="small">ノウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1174">耐<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="5026">衲<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24804">哝<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24991">垴<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25247">恼<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25527">浓<span class="small">ノウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="785">能<span class="small">ノウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="962">納<span class="small">ノウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1223">悩<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9474">莀<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25664">㶶<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26312">脑<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="26314">脓<span class="small">ノウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="961">脳<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11827">匘<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16881">笚<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="16883">笝<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19904">㪎<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22563">䟜<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6087">惱<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18709">㑳<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19189">㛴<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20658">㺁<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23405">䯮<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="24992">堖<span class="small">ノウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="385">農<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="4625">瑙<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6286">腦<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="18975">㗙<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19829">㨥<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20387">㴰<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6268">碯<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22358">䛝<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23120">䪏<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3138">儂<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8551">辳<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20407">㵊<span class="small">ノウ</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1224">濃<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9676">蕽<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="13543">噥<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="17481">螚<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20680">㺜<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="21398">䈫<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2802">膿<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25663">燶<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="2801">嚢<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="23940">夒<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="8552">䢉<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="3924">曩<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15332">欁<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6479">囊<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="22186">䘅<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="9970">蠰<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="12674">儾<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="20472">㶞<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="11537">攮<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15991">灢<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="19101">㚂<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="15337">欜<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="25667">饢<span class="small">ノウ</span></a></li>
                         <li class="others_kanji onyomi"><a href="6521">齉<span class="small">ノウ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3283">喃<span class="small">のう</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">のえ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="5428">薇<span class="small">のえんどう</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">のか</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1213">逃<span class="small">のが（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5719">迯<span class="small">のが（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3075">佚<span class="small">のが（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1213">逃<span class="small">のが（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5719">迯<span class="small">のが（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26952">逊<span class="small">のが（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5514">逋<span class="small">のが（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25936">窜<span class="small">のが（れる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2531">遁<span class="small">のが（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2050">遜<span class="small">のが（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14860">愻<span class="small">のが（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5527">遯<span class="small">のが（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22532">䞼<span class="small">のが（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5623">竄<span class="small">のが（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2917">鴇<span class="small">のがん</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">のき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="827">宇<span class="small">のき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19507">㡰<span class="small">のき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27811">𡧃<span class="small">のき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25215">庑<span class="small">のき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1085">軒<span class="small">のき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3429">宸<span class="small">のき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4124">梠<span class="small">のき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25396">棂<span class="small">のき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19063">㙑<span class="small">のき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19283">㝢<span class="small">のき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3510">廡<span class="small">のき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4191">檐<span class="small">のき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20139">㯪<span class="small">のき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3990">霤<span class="small">のき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4599">簷<span class="small">のき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4211">櫺<span class="small">のき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12317">欞<span class="small">のき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2211">禾<span class="small">のぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5315">芒<span class="small">のぎ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="403">秒<span class="small">のぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6952">鯁<span class="small">のぎ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">のく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="21225">䅞<span class="small">ノク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21732">䎪<span class="small">ノク</span></a></li>
                         <li class="others_kanji onyomi"><a href="21243">䅵<span class="small">ノク</span></a></li>
                         <li class="others_kanji onyomi"><a href="17481">螚<span class="small">ノク</span></a></li>
                         <li class="others_kanji onyomi"><a href="22186">䘅<span class="small">ノク</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1072">仰<span class="small">の（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="768">退<span class="small">の（く）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">のけ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="768">退<span class="small">の（ける）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="908">除<span class="small">の（ける）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">のこ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2309">鋸<span class="small">のこ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2309">鋸<span class="small">のこぎり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="518">残<span class="small">のこ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4957">詒<span class="small">のこ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5481">貽<span class="small">のこ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5906">殘<span class="small">のこ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="825">遺<span class="small">のこ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6071">釆<span class="small">のごめ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16072">烬<span class="small">のこ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5452">畸<span class="small">のこ（り）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4940">燼<span class="small">のこ（り）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="518">残<span class="small">のこ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5906">殘<span class="small">のこ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="825">遺<span class="small">のこ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">のし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4923">熨<span class="small">のし</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">のす</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1453">伸<span class="small">の（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4923">熨<span class="small">の（す）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">のせ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="336">乗<span class="small">の（せる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5704">乘<span class="small">の（せる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1838">搭<span class="small">の（せる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1108">載<span class="small">の（せる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6692">椉<span class="small">の（せる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6712">馱<span class="small">の（せる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1803">駄<span class="small">の（せる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="27430">䭾<span class="small">の（せる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11411">撘<span class="small">の（せる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2951">輿<span class="small">の（せる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8529">轝<span class="small">の（せる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">のそ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="273">去<span class="small">のぞ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13206">厺<span class="small">のぞ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3664">抒<span class="small">のぞ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25278">拨<span class="small">のぞ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="908">除<span class="small">のぞ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3940">耘<span class="small">のぞ（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1399">控<span class="small">のぞ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2476">覗<span class="small">のぞ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5457">覘<span class="small">のぞ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3721">撥<span class="small">のぞ（く）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2280">窺<span class="small">のぞ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3972">闕<span class="small">のぞ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5356">莅<span class="small">のぞ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="612">望<span class="small">のぞ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9491">蒞<span class="small">のぞ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11832">朢<span class="small">のぞ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5459">覦<span class="small">のぞ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4569">歛<span class="small">のぞ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5170">瞰<span class="small">のぞ（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5462">覬<span class="small">のぞ（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1001">臨<span class="small">のぞ（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">のた</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="923">宣<span class="small">のたま（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4249">曰<span class="small">のたま（わく）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">のち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="22563">䟜<span class="small">ノチ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="869">后<span class="small">のち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="125">後<span class="small">のち</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">のつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="26340">节<span class="small">ノット</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2969">浬<span class="small">ノット</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="549">節<span class="small">ノット</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6404">節<span class="small">ノット</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="310">式<span class="small">のっと（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="610">法<span class="small">のっと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13062">佱<span class="small">のっと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20323">㳒<span class="small">のっと（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1000">律<span class="small">のっと（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="763">則<span class="small">のっと（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1961">楷<span class="small">のっと（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="989">模<span class="small">のっと（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="860">憲<span class="small">のっと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5847">糢<span class="small">のっと（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15975">灋<span class="small">のっと（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">のと</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3063">亢<span class="small">のど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3225">吭<span class="small">のど</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1947">咽<span class="small">のど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11926">胭<span class="small">のど</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2000">喉<span class="small">のど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18966">㗋<span class="small">のど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5134">頏<span class="small">のど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3314">嚥<span class="small">のど</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4315">臙<span class="small">のど</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">のの</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4953">詈<span class="small">ののし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8126">訽<span class="small">ののし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4961">詬<span class="small">ののし（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2085">罵<span class="small">ののし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18345">駡<span class="small">ののし（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">のは</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1453">伸<span class="small">の（ばす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="830">延<span class="small">の（ばす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3671">抻<span class="small">の（ばす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5575">舒<span class="small">の（ばす）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24973">圹<span class="small">のはら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3355">壙<span class="small">のはら</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">のひ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="4938">燹<span class="small">のび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5615">窈<span class="small">の（びやか）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1453">伸<span class="small">の（びる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="830">延<span class="small">の（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2177">洩<span class="small">の（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3912">昶<span class="small">の（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11657">㫤<span class="small">の（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4880">鬯<span class="small">の（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5351">莚<span class="small">の（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5079">覃<span class="small">の（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17285">葕<span class="small">の（びる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2737">暢<span class="small">の（びる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5494">贏<span class="small">の（びる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">のへ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2827">箔<span class="small">のべがね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26293">肀<span class="small">の（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4572">聿<span class="small">の（べる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1453">伸<span class="small">の（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3664">抒<span class="small">の（べる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="730">述<span class="small">の（べる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="830">延<span class="small">の（べる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="923">宣<span class="small">の（べる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1739">叙<span class="small">の（べる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="953">展<span class="small">の（べる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1509">陳<span class="small">の（べる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6200">敍<span class="small">の（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6201">敘<span class="small">の（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17878">軙<span class="small">の（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5575">舒<span class="small">の（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13820">塦<span class="small">の（べる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="649">演<span class="small">の（べる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2737">暢<span class="small">の（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22724">䢤<span class="small">の（べる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19333">㞡<span class="small">の（べる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts21">
                    <h3 class="ttl_while">のほ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="6589">丄<span class="small">のぼ（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="039">上<span class="small">のぼ（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6589">丄<span class="small">のぼ（せる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="039">上<span class="small">のぼ（せる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7932">阩<span class="small">のぼ（らせる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5187">陟<span class="small">のぼ（らせる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5188">陞<span class="small">のぼ（らせる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7934">徏<span class="small">のぼ（らせる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26846">跻<span class="small">のぼ（らせる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22593">䠁<span class="small">のぼ（らせる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4294">躋<span class="small">のぼ（らせる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25209">帜<span class="small">のぼり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2841">幡<span class="small">のぼり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3496">幟<span class="small">のぼり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15084">旘<span class="small">のぼり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6589">丄<span class="small">のぼ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="039">上<span class="small">のぼ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1742">升<span class="small">のぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24202">㚈<span class="small">のぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7932">阩<span class="small">のぼ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1444">昇<span class="small">のぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5187">陟<span class="small">のぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5188">陞<span class="small">のぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7934">徏<span class="small">のぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11637">曻<span class="small">のぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18196">陹<span class="small">のぼ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="379">登<span class="small">のぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10005">㐮<span class="small">のぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26846">跻<span class="small">のぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22593">䠁<span class="small">のぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5063">襄<span class="small">のぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6344">隲<span class="small">のぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17847">蹑<span class="small">のぼ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1842">騰<span class="small">のぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6758">騭<span class="small">のぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4294">躋<span class="small">のぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4300">躡<span class="small">のぼ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts22">
                    <h3 class="ttl_while">のま</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="249">飲<span class="small">の（ます）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15651">淾<span class="small">の（ます）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6039">飮<span class="small">の（ます）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7458">㱃<span class="small">の（ます）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts23">
                    <h3 class="ttl_while">のみ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="3484">已<span class="small">のみ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="030">耳<span class="small">のみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2672">蚤<span class="small">のみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22112">䖣<span class="small">のみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24719">凿<span class="small">のみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22161">䗢<span class="small">のみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22886">䥣<span class="small">のみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4744">鑚<span class="small">のみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4743">鑽<span class="small">のみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4746">鑿<span class="small">のみ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25519">浆<span class="small">のみもの</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4320">漿<span class="small">のみもの</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts24">
                    <h3 class="ttl_while">のむ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="2805">呑<span class="small">の（む）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6433">吞<span class="small">の（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="408">服<span class="small">の（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1947">咽<span class="small">の（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7471">飡<span class="small">の（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="249">飲<span class="small">の（む）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1369">喫<span class="small">の（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7470">湌<span class="small">の（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15651">淾<span class="small">の（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6039">飮<span class="small">の（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7458">㱃<span class="small">の（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23913">噄<span class="small">の（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2459">餐<span class="small">の（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3314">嚥<span class="small">の（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12346">歠<span class="small">の（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts25">
                    <h3 class="ttl_while">のり</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="435">礼<span class="small">のり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="310">式<span class="small">のり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1384">刑<span class="small">のり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12747">㓝<span class="small">のり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26267">礼<span class="small">のり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="576">典<span class="small">のり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="610">法<span class="small">のり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5330">范<span class="small">のり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="13062">佱<span class="small">のり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20323">㳒<span class="small">のり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="376">度<span class="small">のり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="472">紀<span class="small">のり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1000">律<span class="small">のり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="763">則<span class="small">のり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2338">矩<span class="small">のり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="669">規<span class="small">のり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4522">笵<span class="small">のり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="774">程<span class="small">のり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8038">䂓<span class="small">のり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1961">楷<span class="small">のり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10629">榘<span class="small">のり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1052">儀<span class="small">のり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1238">範<span class="small">のり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2380">糊<span class="small">のり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8039">槼<span class="small">のり</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="860">憲<span class="small">のり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3516">彜<span class="small">のり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14757">彛<span class="small">のり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3515">彝<span class="small">のり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5288">餬<span class="small">のり</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6014">禮<span class="small">のり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15975">灋<span class="small">のり</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4508">驀<span class="small">のりこ（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2220">駕<span class="small">のりもの</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts26">
                    <h3 class="ttl_while">のる</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1453">伸<span class="small">の（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="336">乗<span class="small">の（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="531">祝<span class="small">の（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="5704">乘<span class="small">の（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6399">祝<span class="small">の（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1838">搭<span class="small">の（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4488">馭<span class="small">の（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1108">載<span class="small">の（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6692">椉<span class="small">の（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2220">駕<span class="small">の（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11411">撘<span class="small">の（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1364">騎<span class="small">の（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4508">驀<span class="small">の（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts27">
                    <h3 class="ttl_while">のろ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="6530">麇<span class="small">のろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7250">麏<span class="small">のろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4559">麕<span class="small">のろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7258">麞<span class="small">のろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22826">䤜<span class="small">のろ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1220">鈍<span class="small">のろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4952">詛<span class="small">のろ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4491">駑<span class="small">のろ（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2022">呪<span class="small">のろ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3027">咒<span class="small">のろ（う）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="531">祝<span class="small">のろ（う）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6399">祝<span class="small">のろ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4952">詛<span class="small">のろ（う）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4912">烽<span class="small">のろし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24052">熢<span class="small">のろし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24253">㷭<span class="small">のろし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4935">燧<span class="small">のろし</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts28">
                    <h3 class="ttl_while">のん</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji onyomi"><a href="20480">㶧<span class="small">ノン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14121">媆<span class="small">ノン</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="942">暖<span class="small">ノン</span></a></li>
                         <li class="others_kanji onyomi"><a href="11707">㬉<span class="small">ノン</span></a></li>
                         <li class="others_kanji onyomi"><a href="3405">嫩<span class="small">ノン</span></a></li>
                         <li class="others_kanji onyomi"><a href="14197">嫰<span class="small">ノン</span></a></li>
                         <li class="others_kanji onyomi"><a href="19221">㜛<span class="small">ノン</span></a></li>
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