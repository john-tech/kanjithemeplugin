<?php
/*
 * Template Name: kakusu14
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
          <style>
               .bushu_about_box {
                    display: none;
               }

               div#sidebar {
                    display: none;
               }
          </style>
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
     <div id="wrapper" class="cf">
          <div id="content">
               <h1 class="ttl_main">１４画の漢字一覧（漢検級順）</h1>

               <p>総画数１４画の漢字の一覧です。<br>
                    漢字検定の配当級順（習う学年順）に表示しています。</p>
               <div class="parts_data">
                    <div class="search_narrowdown">
                         <script>
                              (function() {
                                   var html = document.getElementsByTagName('html') || [];
                                   html[0].classList.add('enable-javascript');
                              })();
                         </script>
                         <div class="narrowdown_select">
                              <select name="select" onChange="location.href=value;" class="select1">
                                   <option value="kakusu01">１画</option>
                                   <option value="kakusu02">２画</option>
                                   <option value="kakusu03">３画</option>
                                   <option value="kakusu04">４画</option>
                                   <option value="kakusu05">５画</option>
                                   <option value="kakusu06">６画</option>
                                   <option value="kakusu07">７画</option>
                                   <option value="kakusu08">８画</option>
                                   <option value="kakusu09">９画</option>
                                   <option value="kakusu10">１０画</option>
                                   <option value="kakusu11">１１画</option>
                                   <option value="kakusu12">１２画</option>
                                   <option value="kakusu13">１３画</option>
                                   <option value="#" selected>１４画</option>
                                   <option value="kakusu15">１５画</option>
                                   <option value="kakusu16">１６画</option>
                                   <option value="kakusu17">１７画</option>
                                   <option value="kakusu18">１８画</option>
                                   <option value="kakusu19">１９画</option>
                                   <option value="kakusu20">２０画</option>
                                   <option value="kakusu21">２１画</option>
                                   <option value="kakusu22">２２画</option>
                                   <option value="kakusu23">２３画</option>
                                   <option value="kakusu24">２４画</option>
                                   <option value="kakusu25">２５画</option>
                                   <option value="kakusu26">２６画</option>
                                   <option value="kakusu27">２７画</option>
                                   <option value="kakusu28">２８画</option>
                                   <option value="kakusu29">２９画</option>
                                   <option value="kakusu30">３０画</option>
                                   <option value="kakusu31">３１画</option>
                                   <option value="kakusu32">３２画</option>
                                   <option value="kakusu33">３３画</option>
                                   <option value="kakusu34">３４画</option>
                                   <option value="kakusu35">３５画</option>
                                   <option value="kakusu36">３６画</option>
                                   <option value="kakusu39">３９画</option>
                                   <option value="kakusu44">４４画</option>
                                   <option value="kakusu48">４８画</option>
                                   <option value="kakusu52">５２画</option>
                              </select>
                         </div>
                    </div><!--search_narrowdown-->
                    <div class="search_data bbushu_menu">
                         <ul class="search_menu">
                              <li>漢検級順</li>
                              <li><a href="bkakusu14">部首別順</a></li>
                              <li><a href="ckakusu14">読み順</a></li>
                         </ul>
                         <ul class="search_menu2">
                              <li><a href="#parts09">９級</a></li>
                              <li><a href="#parts08">８級</a></li>
                              <li><a href="#parts07">７級</a></li>
                              <li><a href="#parts06">６級</a></li>
                              <li><a href="#parts05">５級</a></li>
                              <li><a href="#parts04">４級</a></li>
                              <li><a href="#parts03">３級</a></li>
                              <li><a href="#parts02j">準２級</a></li>
                              <li><a href="#parts02">２級</a></li>
                              <li><a href="#parts01j">準１級</a></li>
                              <li><a href="#parts01">１級</a></li>
                              <li><a href="#parts0101j"><span class="jyun">１ / 準１</span></a></li>
                              <li><a href="#parts">対象外</a></li>
                         </ul>
                    </div><!--search_data-->

                    <div class="bushu_wrap">
                         <div class="color_info">
                              <ul>
                                   <li><span>常用漢字の背景色＝</span><span class="color1"></span></li>
                                   <li><span>人名用漢字の背景色＝</span><span class="color2"></span></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts09">
                              <h3 class="ttl_while"><a href="kyu09">漢字検定９級（小学校２年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/090">歌</a></li>
                                   <li><a class="color1" href="kanji/123">語</a></li>
                                   <li><a class="color1" href="kanji/142">算</a></li>
                                   <li><a class="color1" href="kanji/205">読</a></li>
                                   <li><a class="color1" href="kanji/219">聞</a></li>
                                   <li><a class="color1" href="kanji/227">鳴</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts08">
                              <h3 class="ttl_while"><a href="kyu08">漢字検定８級（小学校３年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/252">駅</a></li>
                                   <li><a class="color1" href="kanji/278">銀</a></li>
                                   <li><a class="color1" href="kanji/397">鼻</a></li>
                                   <li><a class="color1" href="kanji/429">様</a></li>
                                   <li><a class="color1" href="kanji/433">緑</a></li>
                                   <li><a class="color1" href="kanji/437">練</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts07">
                              <h3 class="ttl_while"><a href="kyu07">漢字検定７級（小学校４年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/463">関</a></li>
                                   <li><a class="color1" href="kanji/465">管</a></li>
                                   <li><a class="color1" href="kanji/471">旗</a></li>
                                   <li><a class="color1" href="514">察</a></li>
                                   <li><a class="color1" href="529">種</a></li>
                                   <li><a class="color1" href="545">静</a></li>
                                   <li><a class="color1" href="551">説</a></li>
                                   <li><a class="color1" href="628">漁</a></li>
                                   <li><a class="color1" href="781">徳</a></li>
                                   <li><a class="color1" href="1986">熊</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts06">
                              <h3 class="ttl_while"><a href="kyu06">漢字検定６級（小学校５年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="635">歴</a></li>
                                   <li><a class="color1" href="649">演</a></li>
                                   <li><a class="color1" href="665">慣</a></li>
                                   <li><a class="color1" href="679">境</a></li>
                                   <li><a class="color1" href="698">構</a></li>
                                   <li><a class="color1" href="708">際</a></li>
                                   <li><a class="color1" href="713">雑</a></li>
                                   <li><a class="color1" href="715">酸</a></li>
                                   <li><a class="color1" href="743">製</a></li>
                                   <li><a class="color1" href="744">精</a></li>
                                   <li><a class="color1" href="759">総</a></li>
                                   <li><a class="color1" href="760">増</a></li>
                                   <li><a class="color1" href="761">像</a></li>
                                   <li><a class="color1" href="769">態</a></li>
                                   <li><a class="color1" href="777">適</a></li>
                                   <li><a class="color1" href="779">銅</a></li>
                                   <li><a class="color1" href="802">複</a></li>
                                   <li><a class="color1" href="815">綿</a></li>
                                   <li><a class="color1" href="823">領</a></li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts05">
                              <h3 class="ttl_while"><a href="kyu05">漢字検定５級（小学校６年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="756">銭</a></li>
                                   <li><a class="color1" href="833">閣</a></li>
                                   <li><a class="color1" href="846">疑</a></li>
                                   <li><a class="color1" href="866">誤</a></li>
                                   <li><a class="color1" href="873">穀</a></li>
                                   <li><a class="color1" href="884">誌</a></li>
                                   <li><a class="color1" href="890">磁</a></li>
                                   <li><a class="color1" href="910">障</a></li>
                                   <li><a class="color1" href="928">層</a></li>
                                   <li><a class="color1" href="960">認</a></li>
                                   <li><a class="color1" href="979">暮</a></li>
                                   <li><a class="color1" href="989">模</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts04">
                              <h3 class="ttl_while"><a href="kyu04">漢字検定４級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1011">維</a>
                                   </li>
                                   <li><a class="color1" href="1014">隠</a>
                                   </li>
                                   <li><a class="color1" href="1028">箇</a>
                                   </li>
                                   <li><a class="color1" href="1073">駆</a>
                                   </li>
                                   <li><a class="color1" href="1102">豪</a>
                                   </li>
                                   <li><a class="color1" href="1112">雌</a>
                                   </li>
                                   <li><a class="color1" href="1127">需</a>
                                   </li>
                                   <li><a class="color1" href="1181">端</a>
                                   </li>
                                   <li><a class="color1" href="1191">徴</a>
                                   </li>
                                   <li><a class="color1" href="1197">摘</a>
                                   </li>
                                   <li><a class="color1" href="1198">滴</a>
                                   </li>
                                   <li><a class="color1" href="1215">稲</a>
                                   </li>
                                   <li><a class="color1" href="1232">髪</a>
                                   </li>
                                   <li><a class="color1" href="1234">罰</a>
                                   </li>
                                   <li><a class="color1" href="1254">腐</a>
                                   </li>
                                   <li><a class="color1" href="1277">漫</a>
                                   </li>
                                   <li><a class="color1" href="1278">慢</a>
                                   </li>
                                   <li><a class="color1" href="1285">網</a>
                                   </li>
                                   <li><a class="color1" href="1295">踊</a>
                                   </li>
                                   <li><a class="color1" href="1311">暦</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts03">
                              <h3 class="ttl_while"><a href="kyu03">漢字検定３級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1340">概</a>
                                   </li>
                                   <li><a class="color1" href="1403">綱</a>
                                   </li>
                                   <li><a class="color1" href="1408">酵</a>
                                   </li>
                                   <li><a class="color1" href="1410">獄</a>
                                   </li>
                                   <li><a class="color1" href="1411">魂</a>
                                   </li>
                                   <li><a class="color1" href="1482">遭</a>
                                   </li>
                                   <li><a class="color1" href="1483">憎</a>
                                   </li>
                                   <li><a class="color1" href="1496">奪</a>
                                   </li>
                                   <li><a class="color1" href="1538">碑</a>
                                   </li>
                                   <li><a class="color1" href="1540">漂</a>
                                   </li>
                                   <li><a class="color1" href="1551">慕</a>
                                   </li>
                                   <li><a class="color1" href="1567">墨</a>
                                   </li>
                                   <li><a class="color1" href="1572">膜</a>
                                   </li>
                                   <li><a class="color1" href="1579">誘</a>
                                   </li>
                                   <li><a class="color1" href="1600">漏</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02j">
                              <h3 class="ttl_while"><a href="kyu02j">漢字検定準２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1617">寡</a>
                                   </li>
                                   <li><a class="color1" href="1693">酷</a>
                                   </li>
                                   <li><a class="color1" href="1713">漆</a>
                                   </li>
                                   <li><a class="color1" href="1714">遮</a>
                                   </li>
                                   <li><a class="color1" href="1725">銃</a>
                                   </li>
                                   <li><a class="color1" href="1732">塾</a>
                                   </li>
                                   <li><a class="color1" href="1738">緒</a>
                                   </li>
                                   <li><a class="color1" href="1749">彰</a>
                                   </li>
                                   <li><a class="color1" href="1777">誓</a>
                                   </li>
                                   <li><a class="color1" href="1790">漸</a>
                                   </li>
                                   <li><a class="color1" href="1803">駄</a>
                                   </li>
                                   <li><a class="color1" href="1814">嫡</a>
                                   </li>
                                   <li><a class="color1" href="1824">漬</a>
                                   </li>
                                   <li><a class="color1" href="1852">寧</a>
                                   </li>
                                   <li><a class="color1" href="1864">閥</a>
                                   </li>
                                   <li><a class="color1" href="1895">僕</a>
                                   </li>
                                   <li><a class="color1" href="1905">銘</a>
                                   </li>
                                   <li><a class="color1" href="1929">僚</a>
                                   </li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts02">
                              <h3 class="ttl_while"><a href="kyu02">漢字検定２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="2041">箋</a>
                                   </li>
                                   <li><a class="color1" href="2044">遡</a>
                                   </li>
                                   <li><a class="color1" href="2050">遜</a>
                                   </li>
                                   <li><a class="color1" href="2057">綻</a>
                                   </li>
                                   <li><a class="color1" href="2100">蔑</a>
                                   </li>
                                   <li><a class="color1" href="2103">貌</a>
                                   </li>
                                   <li><a class="color1" href="2109">蜜</a>
                                   </li>
                                   <li><a class="color1" href="2118">瘍</a>
                                   </li>
                                   <li><a class="color1" href="2121">辣</a>
                                   </li>
                                   <li><a class="color1" href="2123">璃</a>
                                   </li>
                                   <li><a class="color1" href="2127">瑠</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01j">
                              <h3 class="ttl_while"><a href="kyu01j">漢字検定準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="2139">窪</a>
                                   </li>
                                   <li><a class="color2" href="2143">斡</a>
                                   </li>
                                   <li><a href="2153">蔚</a></li>
                                   <li><a href="2155">飴</a></li>
                                   <li><a class="color2" href="2164">蔭</a>
                                   </li>
                                   <li><a href="2182">厭</a></li>
                                   <li><a class="color2" href="2190">鳶</a>
                                   </li>
                                   <li><a class="color2" href="2205">嘉</a>
                                   </li>
                                   <li><a class="color2" href="2207">榎</a>
                                   </li>
                                   <li><a class="color2" href="2208">樺</a>
                                   </li>
                                   <li><a class="color2" href="2232">魁</a>
                                   </li>
                                   <li><a href="2237">劃</a></li>
                                   <li><a href="2239">廓</a></li>
                                   <li><a href="2243">赫</a></li>
                                   <li><a href="2257">潅</a></li>
                                   <li><a class="color2" href="2281">箕</a>
                                   </li>
                                   <li><a class="color2" href="2297">厩</a>
                                   </li>
                                   <li><a href="2298">廐</a></li>
                                   <li><a href="2299">廏</a></li>
                                   <li><a href="2307">嘘</a></li>
                                   <li><a href="2313">僑</a></li>
                                   <li><a href="2358">頚</a></li>
                                   <li><a class="color2" href="2411">膏</a>
                                   </li>
                                   <li><a class="color2" href="2416">閤</a>
                                   </li>
                                   <li><a class="color2" href="2435">瑳</a>
                                   </li>
                                   <li><a class="color2" href="2446">榊</a>
                                   </li>
                                   <li><a class="color2" href="2479">爾</a>
                                   </li>
                                   <li><a class="color2" href="2504">竪</a>
                                   </li>
                                   <li><a href="2506">綬</a></li>
                                   <li><a class="color2" href="2553">嘗</a>
                                   </li>
                                   <li><a href="2558">厰</a></li>
                                   <li><a class="color2" href="2560">摺</a>
                                   </li>
                                   <li><a class="color2" href="2574">裳</a>
                                   </li>
                                   <li><a class="color2" href="2595">榛</a>
                                   </li>
                                   <li><a class="color2" href="2596">槙</a>
                                   </li>
                                   <li><a class="color2" href="2601">賑</a>
                                   </li>
                                   <li><a href="2604">塵</a></li>
                                   <li><a class="color2" href="2616">翠</a>
                                   </li>
                                   <li><a class="color2" href="2631">碩</a>
                                   </li>
                                   <li><a href="2637">煽</a></li>
                                   <li><a class="color2" href="2647">銑</a>
                                   </li>
                                   <li><a class="color2" href="2659">槍</a>
                                   </li>
                                   <li><a class="color2" href="2661">漕</a>
                                   </li>
                                   <li><a class="color2" href="2666">綜</a>
                                   </li>
                                   <li><a class="color2" href="2667">聡</a>
                                   </li>
                                   <li><a href="2693">腿</a></li>
                                   <li><a href="2721">蜘</a></li>
                                   <li><a class="color2" href="2737">暢</a>
                                   </li>
                                   <li><a class="color2" href="2738">肇</a>
                                   </li>
                                   <li><a class="color2" href="2740">蔦</a>
                                   </li>
                                   <li><a href="2744">銚</a></li>
                                   <li><a class="color2" href="2748">槌</a>
                                   </li>
                                   <li><a class="color2" href="2755">綴</a>
                                   </li>
                                   <li><a class="color2" href="2786">嶋</a>
                                   </li>
                                   <li><a class="color2" href="2817">頗</a>
                                   </li>
                                   <li><a class="color2" href="2827">箔</a>
                                   </li>
                                   <li><a href="2829">駁</a></li>
                                   <li><a class="color2" href="2846">蔓</a>
                                   </li>
                                   <li><a class="color2" href="2853">緋</a>
                                   </li>
                                   <li><a class="color2" href="2878">輔</a>
                                   </li>
                                   <li><a href="2881">蔀</a></li>
                                   <li><a class="color2" href="2885">鳳</a>
                                   </li>
                                   <li><a href="2893">箆</a></li>
                                   <li><a class="color2" href="2894">碧</a>
                                   </li>
                                   <li><a class="color2" href="2913">蓬</a>
                                   </li>
                                   <li><a class="color2" href="2916">鞄</a>
                                   </li>
                                   <li><a href="2925">鉾</a></li>
                                   <li><a href="2954">熔</a></li>
                                   <li><a class="color2" href="2985">綾</a>
                                   </li>
                                   <li><a class="color2" href="3005">漣</a>
                                   </li>
                                   <li><a href="3018">蝋</a></li>
                                   <li><a href="3019">漉</a></li>
                                   <li><a class="color2" href="6437">摑</a>
                                   </li>
                                   <li><a class="color2" href="6457">蔣</a>
                                   </li>
                                   <li><a href="6483">屢</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01">
                              <h3 class="ttl_while"><a href="kyu01">漢字検定１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="3044">聟</a></li>
                                   <li><a href="3129">僊</a></li>
                                   <li><a href="3131">僖</a></li>
                                   <li><a href="3132">僥</a></li>
                                   <li><a href="3134">僣</a></li>
                                   <li><a href="3135">僮</a></li>
                                   <li><a href="3149">兢</a></li>
                                   <li><a href="3206">匱</a></li>
                                   <li><a href="3293">嘔</a></li>
                                   <li><a href="3294">嗷</a></li>
                                   <li><a href="3295">嘖</a></li>
                                   <li><a href="3296">嗾</a></li>
                                   <li><a href="3297">嗽</a></li>
                                   <li><a href="3298">嘛</a></li>
                                   <li><a href="3350">塹</a></li>
                                   <li><a href="3351">墅</a></li>
                                   <li><a href="3359">夐</a></li>
                                   <li><a href="3360">夥</a></li>
                                   <li><a href="3383">嫦</a></li>
                                   <li><a href="3403">嫣</a></li>
                                   <li><a href="3404">嫗</a></li>
                                   <li><a href="3405">嫩</a></li>
                                   <li><a href="3406">嫖</a></li>
                                   <li><a href="3426">孵</a></li>
                                   <li><a href="3433">寤</a></li>
                                   <li><a href="3435">寥</a></li>
                                   <li><a href="3470">嶇</a></li>
                                   <li><a href="3471">嶄</a></li>
                                   <li><a href="3472">嶂</a></li>
                                   <li><a href="3494">幗</a></li>
                                   <li><a href="3495">幔</a></li>
                                   <li><a href="3502">麼</a></li>
                                   <li><a href="3507">廖</a></li>
                                   <li><a href="3598">慇</a></li>
                                   <li><a href="3600">愨</a></li>
                                   <li><a href="3603">愿</a></li>
                                   <li><a href="3604">愬</a></li>
                                   <li><a href="3606">慂</a></li>
                                   <li><a href="3608">慷</a></li>
                                   <li><a href="3610">慚</a></li>
                                   <li><a href="3612">慴</a></li>
                                   <li><a href="3613">慥</a></li>
                                   <li><a href="3614">慟</a></li>
                                   <li><a href="3615">慝</a></li>
                                   <li><a href="3616">慓</a></li>
                                   <li><a href="3617">慵</a></li>
                                   <li><a href="3650">截</a></li>
                                   <li><a href="3709">搴</a></li>
                                   <li><a href="3716">摶</a></li>
                                   <li><a href="3718">摧</a></li>
                                   <li><a href="3719">摎</a></li>
                                   <li><a href="3789">敲</a></li>
                                   <li><a href="3929">曄</a></li>
                                   <li><a href="3933">暝</a></li>
                                   <li><a href="3943">閨</a></li>
                                   <li><a href="3957">閧</a></li>
                                   <li><a href="4067">蜴</a></li>
                                   <li><a href="4068">蜿</a></li>
                                   <li><a href="4069">蜚</a></li>
                                   <li><a href="4070">蜥</a></li>
                                   <li><a href="4072">蜻</a></li>
                                   <li><a href="4073">蜩</a></li>
                                   <li><a href="4074">蜷</a></li>
                                   <li><a href="4156">槓</a></li>
                                   <li><a href="4157">槁</a></li>
                                   <li><a href="4158">槎</a></li>
                                   <li><a href="4159">榻</a></li>
                                   <li><a href="4160">寨</a></li>
                                   <li><a href="4161">槐</a></li>
                                   <li><a href="4162">榧</a></li>
                                   <li><a href="4163">榾</a></li>
                                   <li><a href="4164">榴</a></li>
                                   <li><a href="4165">榑</a></li>
                                   <li><a href="4166">榜</a></li>
                                   <li><a href="4167">槊</a></li>
                                   <li><a href="4168">榕</a></li>
                                   <li><a href="4169">榔</a></li>
                                   <li><a href="4170">槃</a></li>
                                   <li><a href="4177">榱</a></li>
                                   <li><a href="4240">膃</a></li>
                                   <li><a href="4241">膈</a></li>
                                   <li><a href="4242">膀</a></li>
                                   <li><a href="4243">膂</a></li>
                                   <li><a href="4244">膊</a></li>
                                   <li><a href="4266">跼</a></li>
                                   <li><a href="4267">跿</a></li>
                                   <li><a href="4268">踉</a></li>
                                   <li><a href="4353">韶</a></li>
                                   <li><a href="4358">靤</a></li>
                                   <li><a class="color2" href="4364">颯</a>
                                   </li>
                                   <li><a href="4367">颱</a></li>
                                   <li><a href="4415">滾</a></li>
                                   <li><a href="4416">漲</a></li>
                                   <li><a href="4417">滬</a></li>
                                   <li><a href="4418">滸</a></li>
                                   <li><a class="color2" href="4419">漱</a>
                                   </li>
                                   <li><a href="4420">漾</a></li>
                                   <li><a href="4421">滲</a></li>
                                   <li><a href="4422">漓</a></li>
                                   <li><a href="4423">滷</a></li>
                                   <li><a href="4424">滌</a></li>
                                   <li><a href="4466">輒</a></li>
                                   <li><a href="4468">輓</a></li>
                                   <li><a href="4539">箘</a></li>
                                   <li><a href="4540">箜</a></li>
                                   <li><a href="4541">箍</a></li>
                                   <li><a href="4542">箝</a></li>
                                   <li><a href="4543">箒</a></li>
                                   <li><a href="4544">箏</a></li>
                                   <li><a href="4546">箚</a></li>
                                   <li><a href="4547">箙</a></li>
                                   <li><a href="4567">歉</a></li>
                                   <li><a href="4619">瑯</a></li>
                                   <li><a href="4631">瑣</a></li>
                                   <li><a href="4632">瑪</a></li>
                                   <li><a href="4633">瑰</a></li>
                                   <li><a href="4641">髦</a></li>
                                   <li><a href="4642">髣</a></li>
                                   <li><a href="4663">碪</a></li>
                                   <li><a href="4664">碣</a></li>
                                   <li><a href="4695">銜</a></li>
                                   <li><a href="4696">銖</a></li>
                                   <li><a href="4697">銕</a></li>
                                   <li><a href="4698">銓</a></li>
                                   <li><a href="4699">銛</a></li>
                                   <li><a href="4700">鋩</a></li>
                                   <li><a class="color2" href="4771">綺</a>
                                   </li>
                                   <li><a href="4772">綵</a></li>
                                   <li><a href="4773">緇</a></li>
                                   <li><a href="4774">綽</a></li>
                                   <li><a href="4775">綢</a></li>
                                   <li><a href="4776">綣</a></li>
                                   <li><a class="color2" href="4777">綸</a>
                                   </li>
                                   <li><a href="4778">綯</a></li>
                                   <li><a href="4779">綮</a></li>
                                   <li><a href="4780">綰</a></li>
                                   <li><a href="4781">綫</a></li>
                                   <li><a href="4826">骰</a></li>
                                   <li><a href="4835">犒</a></li>
                                   <li><a href="4836">犖</a></li>
                                   <li><a href="4843">酲</a></li>
                                   <li><a href="4844">酳</a></li>
                                   <li><a href="4860">聚</a></li>
                                   <li><a href="4861">聢</a></li>
                                   <li><a href="4872">甄</a></li>
                                   <li><a href="4873">甅</a></li>
                                   <li><a href="4874">甃</a></li>
                                   <li><a href="4920">熕</a></li>
                                   <li><a href="4922">熄</a></li>
                                   <li><a href="4925">煕</a></li>
                                   <li><a href="4942">熏</a></li>
                                   <li><a href="4965">誨</a></li>
                                   <li><a href="4966">誡</a></li>
                                   <li><a href="4967">誣</a></li>
                                   <li><a href="4968">誦</a></li>
                                   <li><a href="4969">誚</a></li>
                                   <li><a href="4970">誑</a></li>
                                   <li><a href="4971">誥</a></li>
                                   <li><a href="5050">裹</a></li>
                                   <li><a href="5051">裴</a></li>
                                   <li><a href="5052">褌</a></li>
                                   <li><a href="5053">褊</a></li>
                                   <li><a href="5054">褓</a></li>
                                   <li><a href="5065">褝</a></li>
                                   <li><a href="5083">靼</a></li>
                                   <li><a href="5084">鞁</a></li>
                                   <li><a href="5085">靺</a></li>
                                   <li><a href="5086">鞅</a></li>
                                   <li><a href="5087">鞆</a></li>
                                   <li><a href="5163">睾</a></li>
                                   <li><a href="5164">睹</a></li>
                                   <li><a href="5208">鄙</a></li>
                                   <li><a href="5237">瘧</a></li>
                                   <li><a href="5238">瘋</a></li>
                                   <li><a href="5244">瘉</a></li>
                                   <li><a href="5269">粽</a></li>
                                   <li><a href="5305">殞</a></li>
                                   <li><a href="5401">蓼</a></li>
                                   <li><a href="5402">蔗</a></li>
                                   <li><a href="5403">蔔</a></li>
                                   <li><a href="5404">蔡</a></li>
                                   <li><a href="5405">蔘</a></li>
                                   <li><a href="5406">蔟</a></li>
                                   <li><a href="5407">蓴</a></li>
                                   <li><a href="5408">蓿</a></li>
                                   <li><a href="5409">蔕</a></li>
                                   <li><a href="5458">覡</a></li>
                                   <li><a href="5526">遘</a></li>
                                   <li><a href="5547">竭</a></li>
                                   <li><a href="5548">竰</a></li>
                                   <li><a href="5573">趙</a></li>
                                   <li><a href="5601">皹</a></li>
                                   <li><a href="5602">皸</a></li>
                                   <li><a href="5608">翡</a></li>
                                   <li><a href="5619">窩</a></li>
                                   <li><a href="5640">禊</a></li>
                                   <li><a href="6134">厮</a></li>
                                   <li><a href="6496">槔</a></li>
                                   <li><a href="6504">髥</a></li>
                                   <li><a href="6531">劄</a></li>
                                   <li><a href="9058">綦</a></li>
                                   <li><a href="11165">慠</a></li>
                                   <li><a href="11448">摏</a></li>
                                   <li><a href="12334">厲</a></li>
                                   <li><a href="12342">塿</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts0101j">
                              <h3 class="ttl_while"><a href="kyu0101j">漢字検定１級 / 準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="5721">槇</a>
                                   </li>
                                   <li><a href="5722">瑤</a></li>
                                   <li><a class="color2" href="5731">榮</a>
                                   </li>
                                   <li><a class="color2" href="5737">實</a>
                                   </li>
                                   <li><a class="color2" href="5775">奬</a>
                                   </li>
                                   <li><a class="color2" href="5778">遙</a>
                                   </li>
                                   <li><a class="color2" href="5804">僞</a>
                                   </li>
                                   <li><a class="color2" href="5831">齊</a>
                                   </li>
                                   <li><a class="color2" href="5849">粹</a>
                                   </li>
                                   <li><a href="5876">慘</a></li>
                                   <li><a href="5884">圖</a></li>
                                   <li><a class="color2" href="6030">盡</a>
                                   </li>
                                   <li><a href="6046">輕</a></li>
                                   <li><a href="6050">遞</a></li>
                                   <li><a class="color2" href="6117">寢</a>
                                   </li>
                                   <li><a href="6127">稱</a></li>
                                   <li><a class="color2" href="6148">團</a>
                                   </li>
                                   <li><a class="color2" href="6156">壽</a>
                                   </li>
                                   <li><a href="6166">對</a></li>
                                   <li><a href="6237">滿</a></li>
                                   <li><a class="color2" href="6239">滯</a>
                                   </li>
                                   <li><a href="6293">臺</a></li>
                                   <li><a class="color2" href="6370">福</a>
                                   </li>
                                   <li><a class="color2" href="6374">僧</a>
                                   </li>
                                   <li><a class="color2" href="6378">嘆</a>
                                   </li>
                                   <li><a class="color2" href="6390">漢</a>
                                   </li>
                                   <li><a class="color2" href="6400">禍</a>
                                   </li>
                                   <li><a class="color2" href="6401">禎</a>
                                   </li>
                                   <li><a class="color2" href="6407">署</a>
                                   </li>
                                   <li><a class="color2" href="6414">賓</a>
                                   </li>
                                   <li><a class="color2" href="6420">寬</a>
                                   </li>
                                   <li><a class="color2" href="6424">綠</a>
                                   </li>
                                   <li><a href="10042">褐</a></li>
                                   <li><a href="26278">精</a></li>
                                   <li><a href="26337">飼</a></li>
                                   <li><a href="26349">塀</a></li>
                                   <li><a href="27690">蓮</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts">
                              <h3 class="ttl_while">漢字検定対象外</h3>
                              <ul class="search_parts">
                                   <li><a href="5664">冩</a></li>
                                   <li><a href="5697">馼</a></li>
                                   <li><a href="5787">嗹</a></li>
                                   <li><a href="5832">皷</a></li>
                                   <li><a href="5866">榿</a></li>
                                   <li><a href="5867">槝</a></li>
                                   <li><a href="5872">槞</a></li>
                                   <li><a href="5878">慱</a></li>
                                   <li><a href="5879">慯</a></li>
                                   <li><a href="5892">貍</a></li>
                                   <li><a href="6003">樮</a></li>
                                   <li><a href="6004">榠</a></li>
                                   <li><a href="6077">塲</a></li>
                                   <li><a href="6083">嶌</a></li>
                                   <li><a href="6096">緕</a></li>
                                   <li><a href="6103">箟</a></li>
                                   <li><a href="6106">踈</a></li>
                                   <li><a href="6160">奩</a></li>
                                   <li><a href="6218">榲</a></li>
                                   <li><a href="6232">毓</a></li>
                                   <li><a href="6264">睿</a></li>
                                   <li><a href="6267">碵</a></li>
                                   <li><a href="6268">碯</a></li>
                                   <li><a href="6298">蔆</a></li>
                                   <li><a href="6358">夤</a></li>
                                   <li><a href="6709">駃</a></li>
                                   <li><a href="6710">馹</a></li>
                                   <li><a href="6711">馺</a></li>
                                   <li><a href="6713">馽</a></li>
                                   <li><a href="6778">馿</a></li>
                                   <li><a href="6786">骱</a></li>
                                   <li><a href="6787">骯</a></li>
                                   <li><a href="6819">髨</a></li>
                                   <li><a href="6820">䯰</a></li>
                                   <li><a href="6821">髧</a></li>
                                   <li><a href="6828">髤</a></li>
                                   <li><a href="6853">髩</a></li>
                                   <li><a href="6872">鬾</a></li>
                                   <li><a href="6873">鬿</a></li>
                                   <li><a href="6874">䰟</a></li>
                                   <li><a href="6887">魟</a></li>
                                   <li><a href="6888">䰵</a></li>
                                   <li><a href="6889">魡</a></li>
                                   <li><a href="7085">鳱</a></li>
                                   <li><a href="7086">鳲</a></li>
                                   <li><a href="7087">䲦</a></li>
                                   <li><a href="7113">䧻</a></li>
                                   <li><a href="7261">麧</a></li>
                                   <li><a href="7275">蔴</a></li>
                                   <li><a href="7276">麽</a></li>
                                   <li><a href="7289">靾</a></li>
                                   <li><a href="7290">靿</a></li>
                                   <li><a href="7291">鞃</a></li>
                                   <li><a href="7292">靻</a></li>
                                   <li><a href="7293">䩜</a></li>
                                   <li><a href="7294">鞀</a></li>
                                   <li><a href="7296">靽</a></li>
                                   <li><a href="7317">䩞</a></li>
                                   <li><a href="7366">韷</a></li>
                                   <li><a href="7376">頙</a></li>
                                   <li><a href="7377">䪼</a></li>
                                   <li><a href="7378">頔</a></li>
                                   <li><a href="7379">頖</a></li>
                                   <li><a href="7430">䬃</a></li>
                                   <li><a href="7431">颭</a></li>
                                   <li><a href="7432">颰</a></li>
                                   <li><a href="7433">颮</a></li>
                                   <li><a href="7463">飳</a></li>
                                   <li><a href="7464">飶</a></li>
                                   <li><a href="7481">䬻</a></li>
                                   <li><a href="7514">聝</a></li>
                                   <li><a href="7515">馛</a></li>
                                   <li><a href="7516">馝</a></li>
                                   <li><a href="7608">銨</a></li>
                                   <li><a href="7609">銥</a></li>
                                   <li><a href="7610">銉</a></li>
                                   <li><a href="7611">銦</a></li>
                                   <li><a href="7612">銙</a></li>
                                   <li><a href="7613">鉻</a></li>
                                   <li><a href="7614">銯</a></li>
                                   <li><a href="7617">銎</a></li>
                                   <li><a href="7618">銈</a></li>
                                   <li><a href="7619">鉶</a></li>
                                   <li><a href="7620">銒</a></li>
                                   <li><a href="7622">鉸</a></li>
                                   <li><a href="7623">鉿</a></li>
                                   <li><a href="7624">銗</a></li>
                                   <li><a href="7625">銧</a></li>
                                   <li><a href="7626">鉷</a></li>
                                   <li><a href="7627">銟</a></li>
                                   <li><a href="7628">鉹</a></li>
                                   <li><a href="7629">鉺</a></li>
                                   <li><a href="7630">銊</a></li>
                                   <li><a href="7631">銣</a></li>
                                   <li><a href="7632">鉽</a></li>
                                   <li><a href="7633">銫</a></li>
                                   <li><a href="7634">銍</a></li>
                                   <li><a href="7635">銩</a></li>
                                   <li><a href="7636">鉵</a></li>
                                   <li><a href="7637">銤</a></li>
                                   <li><a href="7638">銪</a></li>
                                   <li><a href="7639">銠</a></li>
                                   <li><a href="7707">鉼</a></li>
                                   <li><a href="7861">銮</a></li>
                                   <li><a href="7875">閡</a></li>
                                   <li><a href="7877">閦</a></li>
                                   <li><a href="7878">閩</a></li>
                                   <li><a href="7897">鬦</a></li>
                                   <li><a href="7960">隟</a></li>
                                   <li><a href="7961">䧢</a></li>
                                   <li><a href="7962">隞</a></li>
                                   <li><a href="7963">隝</a></li>
                                   <li><a href="7964">隚</a></li>
                                   <li><a href="7976">僱</a></li>
                                   <li><a href="7985">雒</a></li>
                                   <li><a href="8030">靘</a></li>
                                   <li><a href="8031">靗</a></li>
                                   <li><a href="8046">覠</a></li>
                                   <li><a href="8047">覟</a></li>
                                   <li><a href="8068">觩</a></li>
                                   <li><a href="8069">觫</a></li>
                                   <li><a href="8139">䛡</a></li>
                                   <li><a href="8140">誐</a></li>
                                   <li><a href="8141">誋</a></li>
                                   <li><a href="8142">誒</a></li>
                                   <li><a href="8143">誩</a></li>
                                   <li><a href="8144">誙</a></li>
                                   <li><a href="8145">誟</a></li>
                                   <li><a href="8146">說</a></li>
                                   <li><a href="8147">誗</a></li>
                                   <li><a href="8148">誖</a></li>
                                   <li><a href="8149">誧</a></li>
                                   <li><a href="8150">誏</a></li>
                                   <li><a href="8169">誮</a></li>
                                   <li><a href="8239">谽</a></li>
                                   <li><a href="8246">䜶</a></li>
                                   <li><a href="8263">豨</a></li>
                                   <li><a href="8264">豩</a></li>
                                   <li><a href="8274">貋</a></li>
                                   <li><a href="8298">賏</a></li>
                                   <li><a href="8299">賕</a></li>
                                   <li><a href="8300">賖</a></li>
                                   <li><a href="8301">賒</a></li>
                                   <li><a href="8313">賔</a></li>
                                   <li><a href="8336">䞓</a></li>
                                   <li><a href="8347">趕</a></li>
                                   <li><a href="8391">跽</a></li>
                                   <li><a href="8392">踁</a></li>
                                   <li><a href="8393">踍</a></li>
                                   <li><a href="8394">踆</a></li>
                                   <li><a href="8395">踅</a></li>
                                   <li><a href="8396">踄</a></li>
                                   <li><a href="8432">勪</a></li>
                                   <li><a href="8450">踌</a></li>
                                   <li><a href="8464">躳</a></li>
                                   <li><a href="8467">躵</a></li>
                                   <li><a href="8501">輐</a></li>
                                   <li><a href="8525">輏</a></li>
                                   <li><a href="8547">辡</a></li>
                                   <li><a href="8548">辢</a></li>
                                   <li><a href="8602">遟</a></li>
                                   <li><a href="8608">遝</a></li>
                                   <li><a href="8610">遢</a></li>
                                   <li><a href="8611">遛</a></li>
                                   <li><a href="8652">郒</a></li>
                                   <li><a href="8693">鄢</a></li>
                                   <li><a href="8694">鄥</a></li>
                                   <li><a href="8695">鄡</a></li>
                                   <li><a href="8696">鄞</a></li>
                                   <li><a href="8697">鄠</a></li>
                                   <li><a href="8698">鄣</a></li>
                                   <li><a href="8699">鄟</a></li>
                                   <li><a href="8700">鄛</a></li>
                                   <li><a href="8702">鄤</a></li>
                                   <li><a href="8703">鄜</a></li>
                                   <li><a href="8704">鄘</a></li>
                                   <li><a href="8705">鄝</a></li>
                                   <li><a href="8742">酴</a></li>
                                   <li><a href="8743">酶</a></li>
                                   <li><a href="8744">酻</a></li>
                                   <li><a href="8745">酺</a></li>
                                   <li><a href="8746">酹</a></li>
                                   <li><a href="8827">箉</a></li>
                                   <li><a href="8828">箞</a></li>
                                   <li><a href="8831">箎</a></li>
                                   <li><a href="8836">箠</a></li>
                                   <li><a href="8837">箐</a></li>
                                   <li><a href="8840">箑</a></li>
                                   <li><a href="8841">䈉</a></li>
                                   <li><a href="8842">䈇</a></li>
                                   <li><a href="8843">箥</a></li>
                                   <li><a href="8844">箄</a></li>
                                   <li><a href="8845">箅</a></li>
                                   <li><a href="8846">箖</a></li>
                                   <li><a href="8847">箓</a></li>
                                   <li><a href="8852">箬</a></li>
                                   <li><a href="8913">㝬</a></li>
                                   <li><a href="8942">匲</a></li>
                                   <li><a href="8962">粿</a></li>
                                   <li><a href="8963">粷</a></li>
                                   <li><a href="8965">粻</a></li>
                                   <li><a href="8966">粺</a></li>
                                   <li><a href="8968">粶</a></li>
                                   <li><a href="8986">稬</a></li>
                                   <li><a href="9042">㡭</a></li>
                                   <li><a href="9056">緎</a></li>
                                   <li><a href="9057">綶</a></li>
                                   <li><a href="9059">綨</a></li>
                                   <li><a href="9060">緄</a></li>
                                   <li><a href="9061">綷</a></li>
                                   <li><a href="9063">緅</a></li>
                                   <li><a href="9064">綧</a></li>
                                   <li><a href="9065">緃</a></li>
                                   <li><a href="9066">緌</a></li>
                                   <li><a href="9067">緀</a></li>
                                   <li><a href="9069">緆</a></li>
                                   <li><a href="9070">綪</a></li>
                                   <li><a href="9072">摠</a></li>
                                   <li><a href="9075">綞</a></li>
                                   <li><a href="9076">緂</a></li>
                                   <li><a href="9077">綝</a></li>
                                   <li><a href="9078">綹</a></li>
                                   <li><a href="9079">緉</a></li>
                                   <li><a href="9094">緢</a></li>
                                   <li><a href="9095">緍</a></li>
                                   <li><a href="9122">綳</a></li>
                                   <li><a href="9183">罳</a></li>
                                   <li><a href="9184">罱</a></li>
                                   <li><a href="9211">䍲</a></li>
                                   <li><a href="9212">䍶</a></li>
                                   <li><a href="9231">翣</a></li>
                                   <li><a href="9232">翟</a></li>
                                   <li><a href="9233">翢</a></li>
                                   <li><a href="9264">耤</a></li>
                                   <li><a href="9267">槈</a></li>
                                   <li><a href="9293">肈</a></li>
                                   <li><a href="9316">舓</a></li>
                                   <li><a href="9319">舕</a></li>
                                   <li><a href="9320">舔</a></li>
                                   <li><a href="9323">舝</a></li>
                                   <li><a href="9338">䑶</a></li>
                                   <li><a href="9339">艌</a></li>
                                   <li><a href="9340">艋</a></li>
                                   <li><a href="9341">䑳</a></li>
                                   <li><a href="9482">蔐</a></li>
                                   <li><a href="9501">蓳</a></li>
                                   <li><a href="9528">䔖</a></li>
                                   <li><a href="9590">蔳</a></li>
                                   <li><a href="9605">蔫</a></li>
                                   <li><a href="9606">蓲</a></li>
                                   <li><a href="9607">蔊</a></li>
                                   <li><a href="9608">蔇</a></li>
                                   <li><a href="9609">蔃</a></li>
                                   <li><a href="9610">蓺</a></li>
                                   <li><a href="9611">蔲</a></li>
                                   <li><a href="9612">蔜</a></li>
                                   <li><a href="9613">蔛</a></li>
                                   <li><a href="9614">蓰</a></li>
                                   <li><a href="9615">蓻</a></li>
                                   <li><a href="9616">蔠</a></li>
                                   <li><a href="9617">蓯</a></li>
                                   <li><a href="9618">蔧</a></li>
                                   <li><a href="9619">蔎</a></li>
                                   <li><a href="9620">蔪</a></li>
                                   <li><a href="9621">蔥</a></li>
                                   <li><a href="9622">蔌</a></li>
                                   <li><a href="9623">蓷</a></li>
                                   <li><a href="9624">蓨</a></li>
                                   <li><a href="9625">蓧</a></li>
                                   <li><a href="9626">蔯</a></li>
                                   <li><a href="9627">蓪</a></li>
                                   <li><a href="9628">蔢</a></li>
                                   <li><a href="9629">蓽</a></li>
                                   <li><a href="9630">蔤</a></li>
                                   <li><a href="9631">蔈</a></li>
                                   <li><a href="9632">蓱</a></li>
                                   <li><a href="9634">蓩</a></li>
                                   <li><a href="9635">蔂</a></li>
                                   <li><a href="9636">蔞</a></li>
                                   <li><a href="9637">蔶</a></li>
                                   <li><a href="9671">䔥</a></li>
                                   <li><a href="9754">虡</a></li>
                                   <li><a href="9755">虠</a></li>
                                   <li><a href="9777">蝅</a></li>
                                   <li><a href="9790">蜯</a></li>
                                   <li><a href="9827">蝄</a></li>
                                   <li><a href="9847">蜲</a></li>
                                   <li><a href="9848">蜼</a></li>
                                   <li><a href="9849">蜟</a></li>
                                   <li><a href="9851">蜾</a></li>
                                   <li><a href="9852">蜞</a></li>
                                   <li><a href="9853">䗁</a></li>
                                   <li><a href="9854">蜣</a></li>
                                   <li><a href="9855">蜺</a></li>
                                   <li><a href="9856">蜡</a></li>
                                   <li><a href="9857">蜙</a></li>
                                   <li><a href="9858">蝃</a></li>
                                   <li><a href="9859">蜨</a></li>
                                   <li><a href="9860">蝀</a></li>
                                   <li><a href="9861">蜪</a></li>
                                   <li><a href="9862">蜱</a></li>
                                   <li><a href="9863">蜰</a></li>
                                   <li><a href="9864">蜢</a></li>
                                   <li><a href="9865">蜮</a></li>
                                   <li><a href="9866">蜽</a></li>
                                   <li><a href="9997">裵</a></li>
                                   <li><a href="10052">褆</a></li>
                                   <li><a href="10053">褍</a></li>
                                   <li><a href="10054">褖</a></li>
                                   <li><a href="10055">褚</a></li>
                                   <li><a href="10056">褋</a></li>
                                   <li><a href="10057">褙</a></li>
                                   <li><a href="10058">褕</a></li>
                                   <li><a href="10071">褛</a></li>
                                   <li><a href="10182">瑋</a></li>
                                   <li><a href="10196">瑦</a></li>
                                   <li><a href="10198">瑴</a></li>
                                   <li><a href="10200">瑧</a></li>
                                   <li><a href="10201">瑨</a></li>
                                   <li><a href="10202">瑲</a></li>
                                   <li><a href="10203">瑵</a></li>
                                   <li><a href="10204">瑱</a></li>
                                   <li><a href="10205">瑫</a></li>
                                   <li><a href="10206">瑭</a></li>
                                   <li><a href="10207">瑢</a></li>
                                   <li><a href="10208">瑮</a></li>
                                   <li><a href="10273">甆</a></li>
                                   <li><a href="10281">甂</a></li>
                                   <li><a href="10328">畽</a></li>
                                   <li><a href="10329">畼</a></li>
                                   <li><a href="10339">䟽</a></li>
                                   <li><a href="10340">疐</a></li>
                                   <li><a href="10366">㾬</a></li>
                                   <li><a href="10393">瘖</a></li>
                                   <li><a href="10394">瘕</a></li>
                                   <li><a href="10395">瘑</a></li>
                                   <li><a href="10396">瘓</a></li>
                                   <li><a href="10398">瘈</a></li>
                                   <li><a href="10399">㾮</a></li>
                                   <li><a href="10400">瘊</a></li>
                                   <li><a href="10401">瘒</a></li>
                                   <li><a href="10402">㾴</a></li>
                                   <li><a href="10403">瘇</a></li>
                                   <li><a href="10404">瘏</a></li>
                                   <li><a href="10406">㾫</a></li>
                                   <li><a href="10407">瘐</a></li>
                                   <li><a href="10408">瘌</a></li>
                                   <li><a href="10417">瘩</a></li>
                                   <li><a href="10432">瘘</a></li>
                                   <li><a href="10441">㾱</a></li>
                                   <li><a href="10479">暤</a></li>
                                   <li><a href="10494">皶</a></li>
                                   <li><a href="10507">盠</a></li>
                                   <li><a href="10578">睽</a></li>
                                   <li><a href="10579">睳</a></li>
                                   <li><a href="10580">睺</a></li>
                                   <li><a href="10581">睴</a></li>
                                   <li><a href="10582">睲</a></li>
                                   <li><a href="10583">睼</a></li>
                                   <li><a href="10585">瞂</a></li>
                                   <li><a href="10587">瞀</a></li>
                                   <li><a href="10629">榘</a></li>
                                   <li><a href="10696">碡</a></li>
                                   <li><a href="10700">碬</a></li>
                                   <li><a href="10701">碱</a></li>
                                   <li><a href="10702">碞</a></li>
                                   <li><a href="10703">碶</a></li>
                                   <li><a href="10705">碝</a></li>
                                   <li><a href="10706">䃍</a></li>
                                   <li><a href="10707">碳</a></li>
                                   <li><a href="10708">碫</a></li>
                                   <li><a href="10709">碟</a></li>
                                   <li><a href="10710">碲</a></li>
                                   <li><a href="10711">碭</a></li>
                                   <li><a href="10712">碸</a></li>
                                   <li><a href="10713">碥</a></li>
                                   <li><a href="10714">碰</a></li>
                                   <li><a href="10715">碨</a></li>
                                   <li><a href="10804">禋</a></li>
                                   <li><a href="10806">禑</a></li>
                                   <li><a href="10807">禔</a></li>
                                   <li><a href="10808">禘</a></li>
                                   <li><a href="10809">禖</a></li>
                                   <li><a href="10810">禓</a></li>
                                   <li><a href="10812">禌</a></li>
                                   <li><a href="10841">䬴</a></li>
                                   <li><a href="10861">稭</a></li>
                                   <li><a href="10862">稧</a></li>
                                   <li><a href="10863">䅣</a></li>
                                   <li><a href="10865">稰</a></li>
                                   <li><a href="10866">稯</a></li>
                                   <li><a href="10867">稫</a></li>
                                   <li><a href="10868">稨</a></li>
                                   <li><a href="10871">稵</a></li>
                                   <li><a href="10914">䆫</a></li>
                                   <li><a href="10921">窫</a></li>
                                   <li><a href="10922">窨</a></li>
                                   <li><a href="10923">窬</a></li>
                                   <li><a href="10924">漥</a></li>
                                   <li><a href="10947">竬</a></li>
                                   <li><a href="10966">僡</a></li>
                                   <li><a href="10969">僫</a></li>
                                   <li><a href="10987">㥯</a></li>
                                   <li><a href="10989">慁</a></li>
                                   <li><a href="10993">慽</a></li>
                                   <li><a href="10995">㦅</a></li>
                                   <li><a href="11139">憁</a></li>
                                   <li><a href="11163">慬</a></li>
                                   <li><a href="11164">慻</a></li>
                                   <li><a href="11166">慞</a></li>
                                   <li><a href="11167">憏</a></li>
                                   <li><a href="11168">慲</a></li>
                                   <li><a href="11169">憀</a></li>
                                   <li><a href="11170">慺</a></li>
                                   <li><a href="11216">愳</a></li>
                                   <li><a href="11228">戫</a></li>
                                   <li><a href="11229">戩</a></li>
                                   <li><a href="11230">戬</a></li>
                                   <li><a href="11255">搿</a></li>
                                   <li><a href="11259">摹</a></li>
                                   <li><a href="11299">㨯</a></li>
                                   <li><a href="11301">㩀</a></li>
                                   <li><a href="11421">搩</a></li>
                                   <li><a href="11443">摡</a></li>
                                   <li><a href="11444">摜</a></li>
                                   <li><a href="11445">摳</a></li>
                                   <li><a href="11446">摋</a></li>
                                   <li><a href="11447">摻</a></li>
                                   <li><a href="11449">摭</a></li>
                                   <li><a href="11450">摐</a></li>
                                   <li><a href="11451">摷</a></li>
                                   <li><a href="11452">摔</a></li>
                                   <li><a href="11453">摣</a></li>
                                   <li><a href="11454">摕</a></li>
                                   <li><a href="11455">摛</a></li>
                                   <li><a href="11457">摴</a></li>
                                   <li><a href="11458">摚</a></li>
                                   <li><a href="11459">摽</a></li>
                                   <li><a href="11460">㨽</a></li>
                                   <li><a href="11461">摒</a></li>
                                   <li><a href="11462">摓</a></li>
                                   <li><a href="11463">摞</a></li>
                                   <li><a href="11464">摙</a></li>
                                   <li><a href="11465">摟</a></li>
                                   <li><a href="11466">摝</a></li>
                                   <li><a href="11565">㪣</a></li>
                                   <li><a href="11584">斠</a></li>
                                   <li><a href="11613">旖</a></li>
                                   <li><a href="11701">暜</a></li>
                                   <li><a href="11703">暐</a></li>
                                   <li><a href="11710">暟</a></li>
                                   <li><a href="11711">㬎</a></li>
                                   <li><a href="11712">暠</a></li>
                                   <li><a href="11713">暛</a></li>
                                   <li><a href="11715">暱</a></li>
                                   <li><a href="11728">曅</a></li>
                                   <li><a href="11750">朁</a></li>
                                   <li><a href="11752">朅</a></li>
                                   <li><a href="11815">踋</a></li>
                                   <li><a href="11877">膎</a></li>
                                   <li><a href="11878">膁</a></li>
                                   <li><a href="11879">䐜</a></li>
                                   <li><a href="11880">甧</a></li>
                                   <li><a href="11881">䐢</a></li>
                                   <li><a href="11882">膌</a></li>
                                   <li><a href="11883">膆</a></li>
                                   <li><a href="11884">膄</a></li>
                                   <li><a href="11886">膇</a></li>
                                   <li><a href="11887">膅</a></li>
                                   <li><a href="11888">膍</a></li>
                                   <li><a href="11891">膋</a></li>
                                   <li><a href="11910">䐪</a></li>
                                   <li><a href="11967">㮤</a></li>
                                   <li><a href="12036">㮵</a></li>
                                   <li><a href="12040">槕</a></li>
                                   <li><a href="12043">槑</a></li>
                                   <li><a href="12059">榟</a></li>
                                   <li><a href="12169">榬</a></li>
                                   <li><a href="12172">榷</a></li>
                                   <li><a href="12173">槅</a></li>
                                   <li><a href="12174">槏</a></li>
                                   <li><a href="12175">榦</a></li>
                                   <li><a href="12176">槀</a></li>
                                   <li><a href="12177">榥</a></li>
                                   <li><a href="12178">榼</a></li>
                                   <li><a href="12179">榖</a></li>
                                   <li><a href="12180">榨</a></li>
                                   <li><a href="12181">㮶</a></li>
                                   <li><a href="12182">榰</a></li>
                                   <li><a href="12183">榯</a></li>
                                   <li><a href="12184">榹</a></li>
                                   <li><a href="12185">榭</a></li>
                                   <li><a href="12186">榒</a></li>
                                   <li><a href="12187">榫</a></li>
                                   <li><a href="12188">榺</a></li>
                                   <li><a href="12189">㮨</a></li>
                                   <li><a href="12191">榍</a></li>
                                   <li><a href="12192">榡</a></li>
                                   <li><a href="12193">㮴</a></li>
                                   <li><a href="12194">榸</a></li>
                                   <li><a href="12222">榓</a></li>
                                   <li><a href="12234">槗</a></li>
                                   <li><a href="12246">槖</a></li>
                                   <li><a href="12276">槜</a></li>
                                   <li><a href="12318">﨔</a></li>
                                   <li><a href="12585">僳</a></li>
                                   <li><a href="12595">徱</a></li>
                                   <li><a href="12604">僩</a></li>
                                   <li><a href="12605">僴</a></li>
                                   <li><a href="12606">僛</a></li>
                                   <li><a href="12607">僟</a></li>
                                   <li><a href="12608">僪</a></li>
                                   <li><a href="12609">僒</a></li>
                                   <li><a href="12610">僙</a></li>
                                   <li><a href="12611">僦</a></li>
                                   <li><a href="12613">僘</a></li>
                                   <li><a href="12614">僬</a></li>
                                   <li><a href="12615">僐</a></li>
                                   <li><a href="12616">僎</a></li>
                                   <li><a href="12617">僝</a></li>
                                   <li><a href="12618">僔</a></li>
                                   <li><a href="12619">僓</a></li>
                                   <li><a href="12620">僤</a></li>
                                   <li><a href="12621">僜</a></li>
                                   <li><a href="12622">僰</a></li>
                                   <li><a href="12631">儆</a></li>
                                   <li><a href="12643">僨</a></li>
                                   <li><a href="12673">㒍</a></li>
                                   <li><a href="12721">凘</a></li>
                                   <li><a href="12728">凳</a></li>
                                   <li><a href="12730">凴</a></li>
                                   <li><a href="12794">戧</a></li>
                                   <li><a href="12803">劀</a></li>
                                   <li><a href="12804">劂</a></li>
                                   <li><a href="12855">㱁</a></li>
                                   <li><a href="12863">勩</a></li>
                                   <li><a href="12870">歋</a></li>
                                   <li><a href="12871">歍</a></li>
                                   <li><a href="12872">歊</a></li>
                                   <li><a href="12878">勬</a></li>
                                   <li><a href="12880">勨</a></li>
                                   <li><a href="12888">歰</a></li>
                                   <li><a href="12906">勱</a></li>
                                   <li><a href="12910">殟</a></li>
                                   <li><a href="12911">殠</a></li>
                                   <li><a href="12942">毃</a></li>
                                   <li><a href="12945">毄</a></li>
                                   <li><a href="12983">毾</a></li>
                                   <li><a href="12992">匰</a></li>
                                   <li><a href="13029">亃</a></li>
                                   <li><a href="13100">僗</a></li>
                                   <li><a href="13101">僠</a></li>
                                   <li><a href="13102">僷</a></li>
                                   <li><a href="13152">劁</a></li>
                                   <li><a href="13165">勫</a></li>
                                   <li><a href="13166">勭</a></li>
                                   <li><a href="13201">厬</a></li>
                                   <li><a href="13475">嗶</a></li>
                                   <li><a href="13476">嗸</a></li>
                                   <li><a href="13477">嗺</a></li>
                                   <li><a href="13478">嗻</a></li>
                                   <li><a href="13480">嗿</a></li>
                                   <li><a href="13481">嘀</a></li>
                                   <li><a href="13482">嘁</a></li>
                                   <li><a href="13483">嘂</a></li>
                                   <li><a href="13484">嘃</a></li>
                                   <li><a href="13485">嘄</a></li>
                                   <li><a href="13486">嘇</a></li>
                                   <li><a href="13487">嘈</a></li>
                                   <li><a href="13488">嘊</a></li>
                                   <li><a href="13489">嘋</a></li>
                                   <li><a href="13490">嘌</a></li>
                                   <li><a href="13491">嘍</a></li>
                                   <li><a href="13492">嘎</a></li>
                                   <li><a href="13493">嘏</a></li>
                                   <li><a href="13494">嘐</a></li>
                                   <li><a href="13495">嘑</a></li>
                                   <li><a href="13496">嘒</a></li>
                                   <li><a href="13497">嘓</a></li>
                                   <li><a href="13498">嘕</a></li>
                                   <li><a href="13499">嘙</a></li>
                                   <li><a href="13500">嘚</a></li>
                                   <li><a href="13501">嘜</a></li>
                                   <li><a href="13502">嘝</a></li>
                                   <li><a href="13503">嘞</a></li>
                                   <li><a href="13506">嘨</a></li>
                                   <li><a href="13529">噑</a></li>
                                   <li><a href="13823">塳</a></li>
                                   <li><a href="13824">塴</a></li>
                                   <li><a href="13825">塶</a></li>
                                   <li><a href="13826">塷</a></li>
                                   <li><a href="13827">塸</a></li>
                                   <li><a href="13828">塺</a></li>
                                   <li><a href="13830">塼</a></li>
                                   <li><a href="13831">塽</a></li>
                                   <li><a href="13832">墁</a></li>
                                   <li><a href="13833">墂</a></li>
                                   <li><a href="13834">墄</a></li>
                                   <li><a href="13835">墆</a></li>
                                   <li><a href="13836">墇</a></li>
                                   <li><a href="13837">墈</a></li>
                                   <li><a href="13838">墉</a></li>
                                   <li><a href="13839">墊</a></li>
                                   <li><a href="13840">墋</a></li>
                                   <li><a href="13841">墌</a></li>
                                   <li><a href="13842">墎</a></li>
                                   <li><a href="13843">墏</a></li>
                                   <li><a href="13844">墐</a></li>
                                   <li><a href="13845">墑</a></li>
                                   <li><a href="13846">墒</a></li>
                                   <li><a href="13847">墔</a></li>
                                   <li><a href="13848">墕</a></li>
                                   <li><a href="13849">墖</a></li>
                                   <li><a href="13891">壾</a></li>
                                   <li><a href="13907">夣</a></li>
                                   <li><a href="13931">奦</a></li>
                                   <li><a href="14176">嫕</a></li>
                                   <li><a href="14177">嫘</a></li>
                                   <li><a href="14178">嫙</a></li>
                                   <li><a href="14179">嫚</a></li>
                                   <li><a href="14180">嫛</a></li>
                                   <li><a href="14181">嫜</a></li>
                                   <li><a href="14182">嫝</a></li>
                                   <li><a href="14183">嫞</a></li>
                                   <li><a href="14185">嫠</a></li>
                                   <li><a href="14186">嫢</a></li>
                                   <li><a href="14187">嫤</a></li>
                                   <li><a href="14188">嫥</a></li>
                                   <li><a href="14189">嫧</a></li>
                                   <li><a href="14190">嫨</a></li>
                                   <li><a href="14191">嫪</a></li>
                                   <li><a href="14193">嫬</a></li>
                                   <li><a href="14194">嫭</a></li>
                                   <li><a href="14195">嫮</a></li>
                                   <li><a href="14196">嫯</a></li>
                                   <li><a href="14197">嫰</a></li>
                                   <li><a href="14280">孷</a></li>
                                   <li><a href="14321">寠</a></li>
                                   <li><a href="14322">寣</a></li>
                                   <li><a href="14371">屣</a></li>
                                   <li><a href="14522">嵥</a></li>
                                   <li><a href="14533">嵷</a></li>
                                   <li><a href="14534">嵸</a></li>
                                   <li><a href="14535">嵹</a></li>
                                   <li><a href="14536">嵺</a></li>
                                   <li><a href="14537">嵻</a></li>
                                   <li><a href="14538">嵼</a></li>
                                   <li><a href="14539">嵽</a></li>
                                   <li><a href="14540">嵾</a></li>
                                   <li><a href="14541">嵿</a></li>
                                   <li><a href="14542">嶀</a></li>
                                   <li><a href="14543">嶁</a></li>
                                   <li><a href="14544">嶃</a></li>
                                   <li><a href="14545">嶅</a></li>
                                   <li><a href="14546">嶆</a></li>
                                   <li><a href="14547">嶈</a></li>
                                   <li><a href="14548">嶉</a></li>
                                   <li><a href="14549">嶊</a></li>
                                   <li><a href="14550">嶍</a></li>
                                   <li><a href="14646">幑</a></li>
                                   <li><a href="14647">幒</a></li>
                                   <li><a href="14648">幓</a></li>
                                   <li><a href="14649">幖</a></li>
                                   <li><a href="14650">幘</a></li>
                                   <li><a href="14652">幛</a></li>
                                   <li><a href="14701">廎</a></li>
                                   <li><a href="14702">廑</a></li>
                                   <li><a href="14703">廒</a></li>
                                   <li><a href="14704">廔</a></li>
                                   <li><a href="14705">廕</a></li>
                                   <li><a href="14706">廗</a></li>
                                   <li><a href="14707">廘</a></li>
                                   <li><a href="14746">彃</a></li>
                                   <li><a href="14747">彄</a></li>
                                   <li><a href="14765">彯</a></li>
                                   <li><a href="14859">愸</a></li>
                                   <li><a href="14860">愻</a></li>
                                   <li><a href="14864">慒</a></li>
                                   <li><a href="14866">慖</a></li>
                                   <li><a href="14868">慛</a></li>
                                   <li><a href="14869">慡</a></li>
                                   <li><a href="14871">慩</a></li>
                                   <li><a href="14872">慪</a></li>
                                   <li><a href="14875">憆</a></li>
                                   <li><a href="14898">戨</a></li>
                                   <li><a href="14988">搫</a></li>
                                   <li><a href="14991">搲</a></li>
                                   <li><a href="14994">搻</a></li>
                                   <li><a href="14998">摌</a></li>
                                   <li><a href="14999">摍</a></li>
                                   <li><a href="15000">摖</a></li>
                                   <li><a href="15001">摗</a></li>
                                   <li><a href="15002">摢</a></li>
                                   <li><a href="15003">摤</a></li>
                                   <li><a href="15004">摥</a></li>
                                   <li><a href="15007">摪</a></li>
                                   <li><a href="15008">摫</a></li>
                                   <li><a href="15009">摬</a></li>
                                   <li><a href="15011">摱</a></li>
                                   <li><a href="15012">摲</a></li>
                                   <li><a href="15013">摵</a></li>
                                   <li><a href="15015">摾</a></li>
                                   <li><a href="15016">摿</a></li>
                                   <li><a href="15018">撁</a></li>
                                   <li><a href="15019">撂</a></li>
                                   <li><a href="15065">敱</a></li>
                                   <li><a href="15066">敳</a></li>
                                   <li><a href="15105">暚</a></li>
                                   <li><a href="15106">暞</a></li>
                                   <li><a href="15107">暡</a></li>
                                   <li><a href="15108">暣</a></li>
                                   <li><a href="15109">暥</a></li>
                                   <li><a href="15113">暯</a></li>
                                   <li><a href="15134">朄</a></li>
                                   <li><a href="15222">椲</a></li>
                                   <li><a href="15238">榏</a></li>
                                   <li><a href="15239">榐</a></li>
                                   <li><a href="15240">榗</a></li>
                                   <li><a href="15242">榝</a></li>
                                   <li><a href="15243">榞</a></li>
                                   <li><a href="15244">榢</a></li>
                                   <li><a href="15245">榣</a></li>
                                   <li><a href="15247">榩</a></li>
                                   <li><a href="15248">榪</a></li>
                                   <li><a href="15249">榳</a></li>
                                   <li><a href="15251">榶</a></li>
                                   <li><a href="15252">榽</a></li>
                                   <li><a href="15253">槂</a></li>
                                   <li><a href="15254">槄</a></li>
                                   <li><a href="15255">槉</a></li>
                                   <li><a href="15256">槒</a></li>
                                   <li><a href="15271">樥</a></li>
                                   <li><a href="15364">殝</a></li>
                                   <li><a href="15383">氁</a></li>
                                   <li><a href="15413">氳</a></li>
                                   <li><a href="15731">溛</a></li>
                                   <li><a href="15762">滎</a></li>
                                   <li><a href="15764">滐</a></li>
                                   <li><a href="15772">滫</a></li>
                                   <li><a href="15773">滭</a></li>
                                   <li><a href="15774">滮</a></li>
                                   <li><a href="15775">滰</a></li>
                                   <li><a href="15776">滳</a></li>
                                   <li><a href="15777">滵</a></li>
                                   <li><a href="15778">滶</a></li>
                                   <li><a href="15779">滹</a></li>
                                   <li><a href="15780">滺</a></li>
                                   <li><a href="15781">滻</a></li>
                                   <li><a href="15782">滼</a></li>
                                   <li><a href="15783">滽</a></li>
                                   <li><a href="15785">漃</a></li>
                                   <li><a href="15786">漄</a></li>
                                   <li><a href="15787">漅</a></li>
                                   <li><a href="15788">漇</a></li>
                                   <li><a href="15789">漈</a></li>
                                   <li><a href="15790">漊</a></li>
                                   <li><a href="15792">漌</a></li>
                                   <li><a href="15793">漍</a></li>
                                   <li><a href="15794">漎</a></li>
                                   <li><a href="15796">漒</a></li>
                                   <li><a href="15797">漖</a></li>
                                   <li><a href="15798">漗</a></li>
                                   <li><a href="15799">漘</a></li>
                                   <li><a href="15800">漙</a></li>
                                   <li><a href="15801">漚</a></li>
                                   <li><a href="15802">漛</a></li>
                                   <li><a href="15803">漜</a></li>
                                   <li><a href="15804">漝</a></li>
                                   <li><a href="15805">漞</a></li>
                                   <li><a href="15806">漟</a></li>
                                   <li><a href="15807">漡</a></li>
                                   <li><a href="15808">漤</a></li>
                                   <li><a href="15810">漧</a></li>
                                   <li><a href="15811">漩</a></li>
                                   <li><a href="15812">漪</a></li>
                                   <li><a href="15813">漮</a></li>
                                   <li><a href="15814">漯</a></li>
                                   <li><a href="15815">漰</a></li>
                                   <li><a href="15816">漴</a></li>
                                   <li><a href="15817">漵</a></li>
                                   <li><a href="15818">漶</a></li>
                                   <li><a href="15819">漷</a></li>
                                   <li><a href="15820">漹</a></li>
                                   <li><a href="15821">漺</a></li>
                                   <li><a href="15822">漼</a></li>
                                   <li><a href="15824">潀</a></li>
                                   <li><a href="15825">潂</a></li>
                                   <li><a href="15826">潃</a></li>
                                   <li><a href="15827">潄</a></li>
                                   <li><a href="15847">潩</a></li>
                                   <li><a href="16148">煛</a></li>
                                   <li><a href="16166">煹</a></li>
                                   <li><a href="16167">煻</a></li>
                                   <li><a href="16168">煼</a></li>
                                   <li><a href="16169">煾</a></li>
                                   <li><a href="16170">煿</a></li>
                                   <li><a href="16171">熀</a></li>
                                   <li><a href="16172">熁</a></li>
                                   <li><a href="16173">熂</a></li>
                                   <li><a href="16175">熅</a></li>
                                   <li><a href="16176">熆</a></li>
                                   <li><a href="16177">熇</a></li>
                                   <li><a href="16178">熉</a></li>
                                   <li><a href="16179">熋</a></li>
                                   <li><a href="16180">熌</a></li>
                                   <li><a href="16181">熍</a></li>
                                   <li><a href="16182">熎</a></li>
                                   <li><a href="16183">熐</a></li>
                                   <li><a href="16184">熑</a></li>
                                   <li><a href="16185">熒</a></li>
                                   <li><a href="16186">熓</a></li>
                                   <li><a href="16284">牄</a></li>
                                   <li><a href="16290">牓</a></li>
                                   <li><a href="16291">牔</a></li>
                                   <li><a href="16326">犓</a></li>
                                   <li><a href="16327">犔</a></li>
                                   <li><a href="16328">犕</a></li>
                                   <li><a href="16430">獃</a></li>
                                   <li><a href="16436">獌</a></li>
                                   <li><a href="16437">獍</a></li>
                                   <li><a href="16438">獑</a></li>
                                   <li><a href="16439">獓</a></li>
                                   <li><a href="16440">獔</a></li>
                                   <li><a href="16541">瑡</a></li>
                                   <li><a href="16542">瑹</a></li>
                                   <li><a href="16550">璓</a></li>
                                   <li><a href="16574">瓡</a></li>
                                   <li><a href="16593">畻</a></li>
                                   <li><a href="16608">瘎</a></li>
                                   <li><a href="16636">盢</a></li>
                                   <li><a href="16667">睮</a></li>
                                   <li><a href="16668">睯</a></li>
                                   <li><a href="16669">睱</a></li>
                                   <li><a href="16670">睵</a></li>
                                   <li><a href="16671">睶</a></li>
                                   <li><a href="16672">睷</a></li>
                                   <li><a href="16673">睸</a></li>
                                   <li><a href="16674">睻</a></li>
                                   <li><a href="16675">瞁</a></li>
                                   <li><a href="16676">瞃</a></li>
                                   <li><a href="16677">瞅</a></li>
                                   <li><a href="16751">碠</a></li>
                                   <li><a href="16752">碢</a></li>
                                   <li><a href="16753">碦</a></li>
                                   <li><a href="16754">碮</a></li>
                                   <li><a href="16794">禈</a></li>
                                   <li><a href="16795">禉</a></li>
                                   <li><a href="16796">禐</a></li>
                                   <li><a href="16835">稩</a></li>
                                   <li><a href="16836">稪</a></li>
                                   <li><a href="16838">穁</a></li>
                                   <li><a href="16903">箁</a></li>
                                   <li><a href="16904">箂</a></li>
                                   <li><a href="16905">箃</a></li>
                                   <li><a href="16906">箈</a></li>
                                   <li><a href="16907">箊</a></li>
                                   <li><a href="16908">箌</a></li>
                                   <li><a href="16909">箢</a></li>
                                   <li><a href="16910">箣</a></li>
                                   <li><a href="16911">箤</a></li>
                                   <li><a href="16964">粸</a></li>
                                   <li><a href="17009">綡</a></li>
                                   <li><a href="17010">綤</a></li>
                                   <li><a href="17011">綥</a></li>
                                   <li><a href="17012">綩</a></li>
                                   <li><a href="17013">綼</a></li>
                                   <li><a href="17014">緁</a></li>
                                   <li><a href="17015">緈</a></li>
                                   <li><a href="17057">罁</a></li>
                                   <li><a href="17063">罯</a></li>
                                   <li><a href="17072">羫</a></li>
                                   <li><a href="17088">翞</a></li>
                                   <li><a href="17089">翤</a></li>
                                   <li><a href="17100">耣</a></li>
                                   <li><a href="17116">聙</a></li>
                                   <li><a href="17117">聛</a></li>
                                   <li><a href="17118">聜</a></li>
                                   <li><a href="17166">膉</a></li>
                                   <li><a href="17183">臦</a></li>
                                   <li><a href="17191">艊</a></li>
                                   <li><a href="17318">蓭</a></li>
                                   <li><a href="17319">蓵</a></li>
                                   <li><a href="17320">蓶</a></li>
                                   <li><a href="17321">蓸</a></li>
                                   <li><a href="17323">蓾</a></li>
                                   <li><a href="17324">蔁</a></li>
                                   <li><a href="17325">蔄</a></li>
                                   <li><a href="17326">蔅</a></li>
                                   <li><a href="17327">蔉</a></li>
                                   <li><a href="17328">蔋</a></li>
                                   <li><a href="17329">蔍</a></li>
                                   <li><a href="17330">蔏</a></li>
                                   <li><a href="17331">蔖</a></li>
                                   <li><a href="17332">蔙</a></li>
                                   <li><a href="17333">蔝</a></li>
                                   <li><a href="17334">蔨</a></li>
                                   <li><a href="17335">蔩</a></li>
                                   <li><a href="17336">蔮</a></li>
                                   <li><a href="17337">蔰</a></li>
                                   <li><a href="17338">蔱</a></li>
                                   <li><a href="17339">蔻</a></li>
                                   <li><a href="17444">蜛</a></li>
                                   <li><a href="17445">蜝</a></li>
                                   <li><a href="17446">蜠</a></li>
                                   <li><a href="17447">蜤</a></li>
                                   <li><a href="17448">蜦</a></li>
                                   <li><a href="17449">蜧</a></li>
                                   <li><a href="17450">蜫</a></li>
                                   <li><a href="17451">蜬</a></li>
                                   <li><a href="17452">蜭</a></li>
                                   <li><a href="17453">蜳</a></li>
                                   <li><a href="17455">蜶</a></li>
                                   <li><a href="17457">蝁</a></li>
                                   <li><a href="17458">蝂</a></li>
                                   <li><a href="17459">蝆</a></li>
                                   <li><a href="17460">蝇</a></li>
                                   <li><a href="17467">蝧</a></li>
                                   <li><a href="17564">裫</a></li>
                                   <li><a href="17569">裻</a></li>
                                   <li><a href="17573">褅</a></li>
                                   <li><a href="17574">褈</a></li>
                                   <li><a href="17575">褉</a></li>
                                   <li><a href="17576">褑</a></li>
                                   <li><a href="17577">褔</a></li>
                                   <li><a href="17578">褗</a></li>
                                   <li><a href="17580">褡</a></li>
                                   <li><a href="17606">覝</a></li>
                                   <li><a href="17607">覞</a></li>
                                   <li><a href="17622">觨</a></li>
                                   <li><a href="17623">觪</a></li>
                                   <li><a href="17657">誎</a></li>
                                   <li><a href="17658">誔</a></li>
                                   <li><a href="17659">誛</a></li>
                                   <li><a href="17660">誜</a></li>
                                   <li><a href="17661">誝</a></li>
                                   <li><a href="17662">誢</a></li>
                                   <li><a href="17663">誫</a></li>
                                   <li><a href="17739">豧</a></li>
                                   <li><a href="17764">賐</a></li>
                                   <li><a href="17765">賗</a></li>
                                   <li><a href="17798">趖</a></li>
                                   <li><a href="17799">趗</a></li>
                                   <li><a href="17800">趘</a></li>
                                   <li><a href="17801">趚</a></li>
                                   <li><a href="17823">跭</a></li>
                                   <li><a href="17825">跾</a></li>
                                   <li><a href="17826">踀</a></li>
                                   <li><a href="17827">踂</a></li>
                                   <li><a href="17828">踃</a></li>
                                   <li><a href="17829">踇</a></li>
                                   <li><a href="17868">躴</a></li>
                                   <li><a href="17897">輍</a></li>
                                   <li><a href="17898">輎</a></li>
                                   <li><a href="17899">輑</a></li>
                                   <li><a href="17925">遚</a></li>
                                   <li><a href="18014">鈭</a></li>
                                   <li><a href="18016">鈲</a></li>
                                   <li><a href="18028">銁</a></li>
                                   <li><a href="18029">銂</a></li>
                                   <li><a href="18030">銆</a></li>
                                   <li><a href="18031">銇</a></li>
                                   <li><a href="18032">銋</a></li>
                                   <li><a href="18033">銌</a></li>
                                   <li><a href="18035">銐</a></li>
                                   <li><a href="18036">銔</a></li>
                                   <li><a href="18037">銝</a></li>
                                   <li><a href="18038">銞</a></li>
                                   <li><a href="18039">銡</a></li>
                                   <li><a href="18040">銬</a></li>
                                   <li><a href="18173">閰</a></li>
                                   <li><a href="18211">雐</a></li>
                                   <li><a href="18225">雿</a></li>
                                   <li><a href="18253">鞂</a></li>
                                   <li><a href="18276">頕</a></li>
                                   <li><a href="18309">飷</a></li>
                                   <li><a href="18310">飸</a></li>
                                   <li><a href="18311">飹</a></li>
                                   <li><a href="18313">飿</a></li>
                                   <li><a href="18314">餀</a></li>
                                   <li><a href="18324">馜</a></li>
                                   <li><a href="18332">馶</a></li>
                                   <li><a href="18333">馸</a></li>
                                   <li><a href="18334">馻</a></li>
                                   <li><a href="18335">馾</a></li>
                                   <li><a href="18336">駀</a></li>
                                   <li><a href="18337">駂</a></li>
                                   <li><a href="18410">魀</a></li>
                                   <li><a href="18418">魠</a></li>
                                   <li><a href="18466">鳵</a></li>
                                   <li><a href="18625">嘅</a></li>
                                   <li><a href="18627">夀</a></li>
                                   <li><a href="18633">﨎</a></li>
                                   <li><a href="18719">㒂</a></li>
                                   <li><a href="18720">㒃</a></li>
                                   <li><a href="18721">㒄</a></li>
                                   <li><a href="18722">㒅</a></li>
                                   <li><a href="18723">㒆</a></li>
                                   <li><a href="18724">㒇</a></li>
                                   <li><a href="18725">㒈</a></li>
                                   <li><a href="18726">㒉</a></li>
                                   <li><a href="18728">㒋</a></li>
                                   <li><a href="18729">㒌</a></li>
                                   <li><a href="18730">㒎</a></li>
                                   <li><a href="18735">㒖</a></li>
                                   <li><a href="18801">㓾</a></li>
                                   <li><a href="18802">㔀</a></li>
                                   <li><a href="18803">㔁</a></li>
                                   <li><a href="18805">㔃</a></li>
                                   <li><a href="18806">㔄</a></li>
                                   <li><a href="18808">㔇</a></li>
                                   <li><a href="18841">㔵</a></li>
                                   <li><a href="18864">㕐</a></li>
                                   <li><a href="18865">㕑</a></li>
                                   <li><a href="18875">㕡</a></li>
                                   <li><a href="18876">㕢</a></li>
                                   <li><a href="18982">㗢</a></li>
                                   <li><a href="18983">㗣</a></li>
                                   <li><a href="18984">㗤</a></li>
                                   <li><a href="18985">㗥</a></li>
                                   <li><a href="18986">㗦</a></li>
                                   <li><a href="18987">㗧</a></li>
                                   <li><a href="18988">㗨</a></li>
                                   <li><a href="18989">㗩</a></li>
                                   <li><a href="18991">㗫</a></li>
                                   <li><a href="18992">㗬</a></li>
                                   <li><a href="18993">㗭</a></li>
                                   <li><a href="18994">㗯</a></li>
                                   <li><a href="19072">㙠</a></li>
                                   <li><a href="19073">㙡</a></li>
                                   <li><a href="19074">㙢</a></li>
                                   <li><a href="19075">㙣</a></li>
                                   <li><a href="19076">㙤</a></li>
                                   <li><a href="19077">㙥</a></li>
                                   <li><a href="19106">㚋</a></li>
                                   <li><a href="19107">㚌</a></li>
                                   <li><a href="19204">㜈</a></li>
                                   <li><a href="19216">㜖</a></li>
                                   <li><a href="19217">㜗</a></li>
                                   <li><a href="19218">㜘</a></li>
                                   <li><a href="19219">㜙</a></li>
                                   <li><a href="19220">㜚</a></li>
                                   <li><a href="19221">㜛</a></li>
                                   <li><a href="19222">㜜</a></li>
                                   <li><a href="19223">㜝</a></li>
                                   <li><a href="19224">㜞</a></li>
                                   <li><a href="19225">㜠</a></li>
                                   <li><a href="19226">㜡</a></li>
                                   <li><a href="19227">㜢</a></li>
                                   <li><a href="19289">㝩</a></li>
                                   <li><a href="19290">㝪</a></li>
                                   <li><a href="19300">㝺</a></li>
                                   <li><a href="19331">㞜</a></li>
                                   <li><a href="19406">㟹</a></li>
                                   <li><a href="19407">㟺</a></li>
                                   <li><a href="19408">㟻</a></li>
                                   <li><a href="19409">㟼</a></li>
                                   <li><a href="19410">㟽</a></li>
                                   <li><a href="19411">㟾</a></li>
                                   <li><a href="19413">㠀</a></li>
                                   <li><a href="19414">㠁</a></li>
                                   <li><a href="19415">㠂</a></li>
                                   <li><a href="19489">㡜</a></li>
                                   <li><a href="19490">㡝</a></li>
                                   <li><a href="19491">㡞</a></li>
                                   <li><a href="19492">㡟</a></li>
                                   <li><a href="19537">㢒</a></li>
                                   <li><a href="19538">㢓</a></li>
                                   <li><a href="19539">㢔</a></li>
                                   <li><a href="19540">㢕</a></li>
                                   <li><a href="19550">㢡</a></li>
                                   <li><a href="19574">㣃</a></li>
                                   <li><a href="19586">㣑</a></li>
                                   <li><a href="19608">㣰</a></li>
                                   <li><a href="19609">㣱</a></li>
                                   <li><a href="19610">㣲</a></li>
                                   <li><a href="19697">㥲</a></li>
                                   <li><a href="19701">㥶</a></li>
                                   <li><a href="19702">㥷</a></li>
                                   <li><a href="19703">㥸</a></li>
                                   <li><a href="19704">㥹</a></li>
                                   <li><a href="19706">㥼</a></li>
                                   <li><a href="19707">㥽</a></li>
                                   <li><a href="19710">㦀</a></li>
                                   <li><a href="19713">㦃</a></li>
                                   <li><a href="19715">㦆</a></li>
                                   <li><a href="19716">㦇</a></li>
                                   <li><a href="19752">㦺</a></li>
                                   <li><a href="19834">㨭</a></li>
                                   <li><a href="19835">㨮</a></li>
                                   <li><a href="19836">㨰</a></li>
                                   <li><a href="19837">㨱</a></li>
                                   <li><a href="19839">㨳</a></li>
                                   <li><a href="19840">㨴</a></li>
                                   <li><a href="19841">㨵</a></li>
                                   <li><a href="19842">㨶</a></li>
                                   <li><a href="19843">㨷</a></li>
                                   <li><a href="19844">㨸</a></li>
                                   <li><a href="19845">㨹</a></li>
                                   <li><a href="19846">㨺</a></li>
                                   <li><a href="19919">㪠</a></li>
                                   <li><a href="19920">㪡</a></li>
                                   <li><a href="19921">㪢</a></li>
                                   <li><a href="19946">㫁</a></li>
                                   <li><a href="19995">㬍</a></li>
                                   <li><a href="19996">㬏</a></li>
                                   <li><a href="19997">㬐</a></li>
                                   <li><a href="20088">㮥</a></li>
                                   <li><a href="20089">㮦</a></li>
                                   <li><a href="20090">㮧</a></li>
                                   <li><a href="20091">㮩</a></li>
                                   <li><a href="20092">㮪</a></li>
                                   <li><a href="20093">㮫</a></li>
                                   <li><a href="20094">㮬</a></li>
                                   <li><a href="20095">㮭</a></li>
                                   <li><a href="20096">㮯</a></li>
                                   <li><a href="20097">㮰</a></li>
                                   <li><a href="20099">㮲</a></li>
                                   <li><a href="20100">㮳</a></li>
                                   <li><a href="20101">㮷</a></li>
                                   <li><a href="20102">㮹</a></li>
                                   <li><a href="20103">㮺</a></li>
                                   <li><a href="20104">㮻</a></li>
                                   <li><a href="20205">㰿</a></li>
                                   <li><a href="20206">㱀</a></li>
                                   <li><a href="20220">㱗</a></li>
                                   <li><a href="20240">㱯</a></li>
                                   <li><a href="20241">㱰</a></li>
                                   <li><a href="20242">㱱</a></li>
                                   <li><a href="20243">㱲</a></li>
                                   <li><a href="20244">㱳</a></li>
                                   <li><a href="20259">㲅</a></li>
                                   <li><a href="20284">㲣</a></li>
                                   <li><a href="20285">㲤</a></li>
                                   <li><a href="20286">㲥</a></li>
                                   <li><a href="20287">㲦</a></li>
                                   <li><a href="20288">㲧</a></li>
                                   <li><a href="20396">㴼</a></li>
                                   <li><a href="20397">㴽</a></li>
                                   <li><a href="20398">㴾</a></li>
                                   <li><a href="20399">㴿</a></li>
                                   <li><a href="20400">㵀</a></li>
                                   <li><a href="20402">㵂</a></li>
                                   <li><a href="20403">㵃</a></li>
                                   <li><a href="20404">㵄</a></li>
                                   <li><a href="20405">㵅</a></li>
                                   <li><a href="20406">㵆</a></li>
                                   <li><a href="20411">㵏</a></li>
                                   <li><a href="20519">㷡</a></li>
                                   <li><a href="20520">㷢</a></li>
                                   <li><a href="20521">㷣</a></li>
                                   <li><a href="20522">㷤</a></li>
                                   <li><a href="20523">㷥</a></li>
                                   <li><a href="20524">㷦</a></li>
                                   <li><a href="20526">㷬</a></li>
                                   <li><a href="20555">㸕</a></li>
                                   <li><a href="20568">㸢</a></li>
                                   <li><a href="20601">㹄</a></li>
                                   <li><a href="20605">㹉</a></li>
                                   <li><a href="20606">㹊</a></li>
                                   <li><a href="20607">㹋</a></li>
                                   <li><a href="20664">㺉</a></li>
                                   <li><a href="20668">㺎</a></li>
                                   <li><a href="20669">㺏</a></li>
                                   <li><a href="20670">㺐</a></li>
                                   <li><a href="20671">㺑</a></li>
                                   <li><a href="20672">㺒</a></li>
                                   <li><a href="20673">㺓</a></li>
                                   <li><a href="20785">㼱</a></li>
                                   <li><a href="20786">㼲</a></li>
                                   <li><a href="20787">㼳</a></li>
                                   <li><a href="20788">㼴</a></li>
                                   <li><a href="20789">㼵</a></li>
                                   <li><a href="20790">㼶</a></li>
                                   <li><a href="20791">㼷</a></li>
                                   <li><a href="20793">㼹</a></li>
                                   <li><a href="20826">㽥</a></li>
                                   <li><a href="20828">㽧</a></li>
                                   <li><a href="20888">㾪</a></li>
                                   <li><a href="20889">㾭</a></li>
                                   <li><a href="20890">㾯</a></li>
                                   <li><a href="20891">㾰</a></li>
                                   <li><a href="20924">㿣</a></li>
                                   <li><a href="20925">㿤</a></li>
                                   <li><a href="20939">㿴</a></li>
                                   <li><a href="20940">㿵</a></li>
                                   <li><a href="20956">䀆</a></li>
                                   <li><a href="21001">䁂</a></li>
                                   <li><a href="21009">䁋</a></li>
                                   <li><a href="21010">䁌</a></li>
                                   <li><a href="21011">䁍</a></li>
                                   <li><a href="21012">䁎</a></li>
                                   <li><a href="21013">䁏</a></li>
                                   <li><a href="21014">䁑</a></li>
                                   <li><a href="21015">䁒</a></li>
                                   <li><a href="21016">䁓</a></li>
                                   <li><a href="21017">䁔</a></li>
                                   <li><a href="21018">䁕</a></li>
                                   <li><a href="21061">䂉</a></li>
                                   <li><a href="21069">䂕</a></li>
                                   <li><a href="21110">䃈</a></li>
                                   <li><a href="21111">䃉</a></li>
                                   <li><a href="21113">䃋</a></li>
                                   <li><a href="21114">䃌</a></li>
                                   <li><a href="21115">䃎</a></li>
                                   <li><a href="21116">䃏</a></li>
                                   <li><a href="21163">䄓</a></li>
                                   <li><a href="21164">䄔</a></li>
                                   <li><a href="21165">䄕</a></li>
                                   <li><a href="21226">䅠</a></li>
                                   <li><a href="21227">䅡</a></li>
                                   <li><a href="21228">䅢</a></li>
                                   <li><a href="21229">䅤</a></li>
                                   <li><a href="21231">䅧</a></li>
                                   <li><a href="21232">䅨</a></li>
                                   <li><a href="21233">䅩</a></li>
                                   <li><a href="21288">䆪</a></li>
                                   <li><a href="21346">䇫</a></li>
                                   <li><a href="21365">䈁</a></li>
                                   <li><a href="21367">䈃</a></li>
                                   <li><a href="21368">䈄</a></li>
                                   <li><a href="21369">䈅</a></li>
                                   <li><a href="21370">䈆</a></li>
                                   <li><a href="21371">䈈</a></li>
                                   <li><a href="21372">䈊</a></li>
                                   <li><a href="21373">䈋</a></li>
                                   <li><a href="21374">䈌</a></li>
                                   <li><a href="21375">䈍</a></li>
                                   <li><a href="21489">䊍</a></li>
                                   <li><a href="21490">䊎</a></li>
                                   <li><a href="21491">䊏</a></li>
                                   <li><a href="21492">䊐</a></li>
                                   <li><a href="21493">䊑</a></li>
                                   <li><a href="21494">䊒</a></li>
                                   <li><a href="21496">䊔</a></li>
                                   <li><a href="21569">䋧</a></li>
                                   <li><a href="21570">䋨</a></li>
                                   <li><a href="21571">䋩</a></li>
                                   <li><a href="21572">䋪</a></li>
                                   <li><a href="21573">䋫</a></li>
                                   <li><a href="21574">䋬</a></li>
                                   <li><a href="21575">䋭</a></li>
                                   <li><a href="21576">䋮</a></li>
                                   <li><a href="21577">䋯</a></li>
                                   <li><a href="21578">䋰</a></li>
                                   <li><a href="21579">䋱</a></li>
                                   <li><a href="21580">䋲</a></li>
                                   <li><a href="21650">䍋</a></li>
                                   <li><a href="21651">䍌</a></li>
                                   <li><a href="21666">䍞</a></li>
                                   <li><a href="21667">䍟</a></li>
                                   <li><a href="21684">䍳</a></li>
                                   <li><a href="21685">䍴</a></li>
                                   <li><a href="21686">䍵</a></li>
                                   <li><a href="21711">䎐</a></li>
                                   <li><a href="21712">䎑</a></li>
                                   <li><a href="21713">䎒</a></li>
                                   <li><a href="21714">䎓</a></li>
                                   <li><a href="21729">䎦</a></li>
                                   <li><a href="21730">䎧</a></li>
                                   <li><a href="21731">䎨</a></li>
                                   <li><a href="21732">䎪</a></li>
                                   <li><a href="21745">䎺</a></li>
                                   <li><a href="21746">䎻</a></li>
                                   <li><a href="21747">䎼</a></li>
                                   <li><a href="21748">䎽</a></li>
                                   <li><a href="21822">䐝</a></li>
                                   <li><a href="21823">䐞</a></li>
                                   <li><a href="21824">䐟</a></li>
                                   <li><a href="21827">䐣</a></li>
                                   <li><a href="21828">䐤</a></li>
                                   <li><a href="21829">䐥</a></li>
                                   <li><a href="21830">䐦</a></li>
                                   <li><a href="21831">䐧</a></li>
                                   <li><a href="21832">䐨</a></li>
                                   <li><a href="21833">䐩</a></li>
                                   <li><a href="21889">䑱</a></li>
                                   <li><a href="21890">䑲</a></li>
                                   <li><a href="21891">䑴</a></li>
                                   <li><a href="21998">䔎</a></li>
                                   <li><a href="21999">䔐</a></li>
                                   <li><a href="22000">䔑</a></li>
                                   <li><a href="22001">䔒</a></li>
                                   <li><a href="22002">䔓</a></li>
                                   <li><a href="22003">䔔</a></li>
                                   <li><a href="22004">䔕</a></li>
                                   <li><a href="22005">䔗</a></li>
                                   <li><a href="22006">䔘</a></li>
                                   <li><a href="22007">䔙</a></li>
                                   <li><a href="22008">䔚</a></li>
                                   <li><a href="22009">䔛</a></li>
                                   <li><a href="22010">䔜</a></li>
                                   <li><a href="22012">䔞</a></li>
                                   <li><a href="22013">䔟</a></li>
                                   <li><a href="22014">䔠</a></li>
                                   <li><a href="22015">䔡</a></li>
                                   <li><a href="22016">䔢</a></li>
                                   <li><a href="22017">䔣</a></li>
                                   <li><a href="22018">䔧</a></li>
                                   <li><a href="22019">䔪</a></li>
                                   <li><a href="22020">䔬</a></li>
                                   <li><a href="22038">䕄</a></li>
                                   <li><a href="22132">䖿</a></li>
                                   <li><a href="22133">䗀</a></li>
                                   <li><a href="22134">䗂</a></li>
                                   <li><a href="22135">䗃</a></li>
                                   <li><a href="22136">䗄</a></li>
                                   <li><a href="22137">䗅</a></li>
                                   <li><a href="22138">䗆</a></li>
                                   <li><a href="22139">䗇</a></li>
                                   <li><a href="22140">䗉</a></li>
                                   <li><a href="22141">䗊</a></li>
                                   <li><a href="22150">䗕</a></li>
                                   <li><a href="22194">䘓</a></li>
                                   <li><a href="22231">䙃</a></li>
                                   <li><a href="22232">䙄</a></li>
                                   <li><a href="22233">䙅</a></li>
                                   <li><a href="22234">䙆</a></li>
                                   <li><a href="22235">䙇</a></li>
                                   <li><a href="22236">䙈</a></li>
                                   <li><a href="22237">䙉</a></li>
                                   <li><a href="22278">䚂</a></li>
                                   <li><a href="22279">䚃</a></li>
                                   <li><a href="22301">䚛</a></li>
                                   <li><a href="22352">䛗</a></li>
                                   <li><a href="22358">䛝</a></li>
                                   <li><a href="22359">䛞</a></li>
                                   <li><a href="22360">䛟</a></li>
                                   <li><a href="22361">䛠</a></li>
                                   <li><a href="22362">䛢</a></li>
                                   <li><a href="22363">䛣</a></li>
                                   <li><a href="22364">䛤</a></li>
                                   <li><a href="22365">䛥</a></li>
                                   <li><a href="22366">䛦</a></li>
                                   <li><a href="22367">䛨</a></li>
                                   <li><a href="22417">䜮</a></li>
                                   <li><a href="22425">䜷</a></li>
                                   <li><a href="22426">䜸</a></li>
                                   <li><a href="22427">䜹</a></li>
                                   <li><a href="22455">䝜</a></li>
                                   <li><a href="22474">䝳</a></li>
                                   <li><a href="22475">䝴</a></li>
                                   <li><a href="22476">䝵</a></li>
                                   <li><a href="22479">䝸</a></li>
                                   <li><a href="22495">䞔</a></li>
                                   <li><a href="22517">䞫</a></li>
                                   <li><a href="22518">䞬</a></li>
                                   <li><a href="22519">䞭</a></li>
                                   <li><a href="22520">䞮</a></li>
                                   <li><a href="22521">䞯</a></li>
                                   <li><a href="22522">䞰</a></li>
                                   <li><a href="22523">䞱</a></li>
                                   <li><a href="22581">䟴</a></li>
                                   <li><a href="22582">䟵</a></li>
                                   <li><a href="22583">䟶</a></li>
                                   <li><a href="22584">䟷</a></li>
                                   <li><a href="22585">䟸</a></li>
                                   <li><a href="22586">䟹</a></li>
                                   <li><a href="22587">䟺</a></li>
                                   <li><a href="22588">䟻</a></li>
                                   <li><a href="22666">䡘</a></li>
                                   <li><a href="22667">䡙</a></li>
                                   <li><a href="22668">䡚</a></li>
                                   <li><a href="22669">䡛</a></li>
                                   <li><a href="22722">䢢</a></li>
                                   <li><a href="22723">䢣</a></li>
                                   <li><a href="22724">䢤</a></li>
                                   <li><a href="22753">䣈</a></li>
                                   <li><a href="22764">䣘</a></li>
                                   <li><a href="22765">䣙</a></li>
                                   <li><a href="22766">䣚</a></li>
                                   <li><a href="22767">䣛</a></li>
                                   <li><a href="22768">䣜</a></li>
                                   <li><a href="22795">䣺</a></li>
                                   <li><a href="22796">䣻</a></li>
                                   <li><a href="22834">䤤</a></li>
                                   <li><a href="22835">䤥</a></li>
                                   <li><a href="22836">䤧</a></li>
                                   <li><a href="22837">䤨</a></li>
                                   <li><a href="22838">䤩</a></li>
                                   <li><a href="22917">䦖</a></li>
                                   <li><a href="22918">䦗</a></li>
                                   <li><a href="22919">䦘</a></li>
                                   <li><a href="22920">䦙</a></li>
                                   <li><a href="22921">䦚</a></li>
                                   <li><a href="22976">䧠</a></li>
                                   <li><a href="22977">䧡</a></li>
                                   <li><a href="22978">䧣</a></li>
                                   <li><a href="23014">䨏</a></li>
                                   <li><a href="23015">䨐</a></li>
                                   <li><a href="23016">䨑</a></li>
                                   <li><a href="23017">䨒</a></li>
                                   <li><a href="23018">䨓</a></li>
                                   <li><a href="23019">䨕</a></li>
                                   <li><a href="23020">䨖</a></li>
                                   <li><a href="23058">䩅</a></li>
                                   <li><a href="23059">䩆</a></li>
                                   <li><a href="23060">䩇</a></li>
                                   <li><a href="23076">䩙</a></li>
                                   <li><a href="23077">䩚</a></li>
                                   <li><a href="23078">䩛</a></li>
                                   <li><a href="23120">䪏</a></li>
                                   <li><a href="23141">䪪</a></li>
                                   <li><a href="23151">䪶</a></li>
                                   <li><a href="23152">䪷</a></li>
                                   <li><a href="23153">䪸</a></li>
                                   <li><a href="23154">䪹</a></li>
                                   <li><a href="23155">䪺</a></li>
                                   <li><a href="23156">䪻</a></li>
                                   <li><a href="23157">䪽</a></li>
                                   <li><a href="23158">䪾</a></li>
                                   <li><a href="23213">䫾</a></li>
                                   <li><a href="23214">䫿</a></li>
                                   <li><a href="23215">䬀</a></li>
                                   <li><a href="23216">䬁</a></li>
                                   <li><a href="23217">䬂</a></li>
                                   <li><a href="23250">䬫</a></li>
                                   <li><a href="23251">䬬</a></li>
                                   <li><a href="23252">䬭</a></li>
                                   <li><a href="23253">䬯</a></li>
                                   <li><a href="23254">䬰</a></li>
                                   <li><a href="23255">䬱</a></li>
                                   <li><a href="23256">䬲</a></li>
                                   <li><a href="23295">䭯</a></li>
                                   <li><a href="23303">䭷</a></li>
                                   <li><a href="23304">䭸</a></li>
                                   <li><a href="23305">䭹</a></li>
                                   <li><a href="23306">䭺</a></li>
                                   <li><a href="23307">䭻</a></li>
                                   <li><a href="23308">䭼</a></li>
                                   <li><a href="23309">䭽</a></li>
                                   <li><a href="23373">䯈</a></li>
                                   <li><a href="23374">䯉</a></li>
                                   <li><a href="23406">䯯</a></li>
                                   <li><a href="23407">䯱</a></li>
                                   <li><a href="23408">䯲</a></li>
                                   <li><a href="23409">䯳</a></li>
                                   <li><a href="23410">䯴</a></li>
                                   <li><a href="23440">䰙</a></li>
                                   <li><a href="23441">䰚</a></li>
                                   <li><a href="23459">䰴</a></li>
                                   <li><a href="23524">䲧</a></li>
                                   <li><a href="23525">䲨</a></li>
                                   <li><a href="23526">䲩</a></li>
                                   <li><a href="23527">䲪</a></li>
                                   <li><a href="23608">䴟</a></li>
                                   <li><a href="23616">䴬</a></li>
                                   <li><a href="23617">䴭</a></li>
                                   <li><a href="23618">䴮</a></li>
                                   <li><a href="23657">䵞</a></li>
                                   <li><a href="23875">槚</a></li>
                                   <li><a href="23925">圗</a></li>
                                   <li><a href="23934">墍</a></li>
                                   <li><a href="23983">廙</a></li>
                                   <li><a href="23985">彅</a></li>
                                   <li><a href="24025">漨</a></li>
                                   <li><a href="24027">漳</a></li>
                                   <li><a href="24050">煺</a></li>
                                   <li><a href="24051">熖</a></li>
                                   <li><a href="24066">犗</a></li>
                                   <li><a href="24070">獐</a></li>
                                   <li><a href="24079">硻</a></li>
                                   <li><a href="24088">禒</a></li>
                                   <li><a href="24089">禗</a></li>
                                   <li><a href="24093">竮</a></li>
                                   <li><a href="24121">蓫</a></li>
                                   <li><a href="24122">蔒</a></li>
                                   <li><a href="24152">遳</a></li>
                                   <li><a href="24158">銢</a></li>
                                   <li><a href="24163">飵</a></li>
                                   <li><a href="24164">飻</a></li>
                                   <li><a href="24174">馷</a></li>
                                   <li><a href="24188">㓗</a></li>
                                   <li><a href="24221">㨾</a></li>
                                   <li><a href="24222">㨿</a></li>
                                   <li><a href="24233">㮮</a></li>
                                   <li><a href="24234">㮸</a></li>
                                   <li><a href="24252">㷟</a></li>
                                   <li><a href="24276">䅥</a></li>
                                   <li><a href="24285">䎩</a></li>
                                   <li><a href="24309">䔏</a></li>
                                   <li><a href="24310">䔤</a></li>
                                   <li><a href="24322">䗈</a></li>
                                   <li><a href="24345">䦕</a></li>
                                   <li><a href="24352">䬮</a></li>
                                   <li><a href="24353">䬳</a></li>
                                   <li><a href="24379">漻</a></li>
                                   <li><a href="24382">煒</a></li>
                                   <li><a href="24383">燁</a></li>
                                   <li><a href="24762">叆</a></li>
                                   <li><a href="24948">嗵</a></li>
                                   <li><a href="24949">嘡</a></li>
                                   <li><a href="24950">嘢</a></li>
                                   <li><a href="24951">嘣</a></li>
                                   <li><a href="24952">嘥</a></li>
                                   <li><a href="24953">嘦</a></li>
                                   <li><a href="24954">嘧</a></li>
                                   <li><a href="24972">圙</a></li>
                                   <li><a href="25016">塱</a></li>
                                   <li><a href="25017">墘</a></li>
                                   <li><a href="25018">墙</a></li>
                                   <li><a href="25019">墚</a></li>
                                   <li><a href="25020">墛</a></li>
                                   <li><a href="25066">嫱</a></li>
                                   <li><a href="25067">嫲</a></li>
                                   <li><a href="25096">尡</a></li>
                                   <li><a href="25139">嶎</a></li>
                                   <li><a href="25208">巰</a></li>
                                   <li><a href="25218">廍</a></li>
                                   <li><a href="25254">慐</a></li>
                                   <li><a href="25363">暧</a></li>
                                   <li><a href="25415">魢</a></li>
                                   <li><a href="25424">閪</a></li>
                                   <li><a href="25444">殡</a></li>
                                   <li><a href="25546">隡</a></li>
                                   <li><a href="25563">霁</a></li>
                                   <li><a href="25580">滱</a></li>
                                   <li><a href="25583">潆</a></li>
                                   <li><a href="25587">潇</a></li>
                                   <li><a href="25590">潈</a></li>
                                   <li><a href="25591">潉</a></li>
                                   <li><a href="25592">潊</a></li>
                                   <li><a href="25594">潌</a></li>
                                   <li><a href="25654">熗</a></li>
                                   <li><a href="25656">熘</a></li>
                                   <li><a href="25672">爳</a></li>
                                   <li><a href="25782">獕</a></li>
                                   <li><a href="25795">瑷</a></li>
                                   <li><a href="25796">瑸</a></li>
                                   <li><a href="25797">璍</a></li>
                                   <li><a href="25818">瘅</a></li>
                                   <li><a href="25820">瘗</a></li>
                                   <li><a href="25894">碴</a></li>
                                   <li><a href="25895">碷</a></li>
                                   <li><a href="25896">碹</a></li>
                                   <li><a href="25921">禇</a></li>
                                   <li><a href="25924">禙</a></li>
                                   <li><a href="25931">稳</a></li>
                                   <li><a href="25940">窭</a></li>
                                   <li><a href="25952">箧</a></li>
                                   <li><a href="25954">箩</a></li>
                                   <li><a href="25955">箫</a></li>
                                   <li><a href="25990">糁</a></li>
                                   <li><a href="26002">緐</a></li>
                                   <li><a href="26010">駇</a></li>
                                   <li><a href="26023">髚</a></li>
                                   <li><a href="26029">緓</a></li>
                                   <li><a href="26031">緔</a></li>
                                   <li><a href="26273">罴</a></li>
                                   <li><a href="26282">耥</a></li>
                                   <li><a href="26290">聣</a></li>
                                   <li><a href="26321">膑</a></li>
                                   <li><a href="26333">艍</a></li>
                                   <li><a href="26406">㒏</a></li>
                                   <li><a href="26407">㒐</a></li>
                                   <li><a href="26488">㓿</a></li>
                                   <li><a href="26490">㔉</a></li>
                                   <li><a href="26493">㔢</a></li>
                                   <li><a href="26498">蓠</a></li>
                                   <li><a href="26499">蓢</a></li>
                                   <li><a href="26504">蔷</a></li>
                                   <li><a href="26505">蔸</a></li>
                                   <li><a href="26547">蝈</a></li>
                                   <li><a href="26548">蝊</a></li>
                                   <li><a href="26619">㗮</a></li>
                                   <li><a href="26620">㗰</a></li>
                                   <li><a href="26666">㙟</a></li>
                                   <li><a href="26670">㙦</a></li>
                                   <li><a href="26816">賘</a></li>
                                   <li><a href="26840">跶</a></li>
                                   <li><a href="26844">跹</a></li>
                                   <li><a href="26850">踎</a></li>
                                   <li><a href="26885">㜕</a></li>
                                   <li><a href="26900">㞝</a></li>
                                   <li><a href="26901">㞞</a></li>
                                   <li><a href="26915">㠃</a></li>
                                   <li><a href="26916">㠄</a></li>
                                   <li><a href="26956">遤</a></li>
                                   <li><a href="27098">酼</a></li>
                                   <li><a href="27099">酽</a></li>
                                   <li><a href="27101">酾</a></li>
                                   <li><a href="27103">酿</a></li>
                                   <li><a href="27114">銄</a></li>
                                   <li><a href="27118">銱</a></li>
                                   <li><a href="27120">㥻</a></li>
                                   <li><a href="27122">㦈</a></li>
                                   <li><a href="27167">㩁</a></li>
                                   <li><a href="27168">㩂</a></li>
                                   <li><a href="27233">㮣</a></li>
                                   <li><a href="27234">㮼</a></li>
                                   <li><a href="27235">㮽</a></li>
                                   <li><a href="27283">㲩</a></li>
                                   <li><a href="27315">㵇</a></li>
                                   <li><a href="27316">㵈</a></li>
                                   <li><a href="27317">㵉</a></li>
                                   <li><a href="27348">㷧</a></li>
                                   <li><a href="27349">㷨</a></li>
                                   <li><a href="27351">㷪</a></li>
                                   <li><a href="27391">㻩</a></li>
                                   <li><a href="27392">㻪</a></li>
                                   <li><a href="27393">㻳</a></li>
                                   <li><a href="27408">䲫</a></li>
                                   <li><a href="27418">䰶</a></li>
                                   <li><a href="27424">䯩</a></li>
                                   <li><a href="27430">䭾</a></li>
                                   <li><a href="27443">䨔</a></li>
                                   <li><a href="27476">䤪</a></li>
                                   <li><a href="27477">䤦</a></li>
                                   <li><a href="27483">䣉</a></li>
                                   <li><a href="27486">䢥</a></li>
                                   <li><a href="27489">䢆</a></li>
                                   <li><a href="27502">䞲</a></li>
                                   <li><a href="27521">䛧</a></li>
                                   <li><a href="27530">䙍</a></li>
                                   <li><a href="27531">䙋</a></li>
                                   <li><a href="27532">䙊</a></li>
                                   <li><a href="27551">䔫</a></li>
                                   <li><a href="27552">䔩</a></li>
                                   <li><a href="27553">䔨</a></li>
                                   <li><a href="27554">䔦</a></li>
                                   <li><a href="27568">䑸</a></li>
                                   <li><a href="27569">䑷</a></li>
                                   <li><a href="27570">䑵</a></li>
                                   <li><a href="27573">䑖</a></li>
                                   <li><a href="27577">䎾</a></li>
                                   <li><a href="27612">䅫</a></li>
                                   <li><a href="27621">䄗</a></li>
                                   <li><a href="27622">䄖</a></li>
                                   <li><a href="27629">䃐</a></li>
                                   <li><a href="27632">䃅</a></li>
                                   <li><a href="27639">䁖</a></li>
                                   <li><a href="27650">㾵</a></li>
                                   <li><a href="27651">㾳</a></li>
                                   <li><a href="27657">㽏</a></li>
                                   <li><a href="27669">榚</a></li>
                                   <li><a href="27671">槟</a></li>
                                   <li><a href="27673">槡</a></li>
                                   <li><a href="27714">𥔎</a></li>
                                   <li><a href="27715">𥧄</a></li>
                                   <li><a href="27732">𥠢</a></li>
                                   <li><a href="27743">𦹀</a></li>
                                   <li><a href="27777">𠍱</a></li>
                                   <li><a href="27788">𠎁</a></li>
                                   <li><a href="27793">𠽟</a></li>
                                   <li><a href="27828">𡼞</a></li>
                              </ul>
                         </div>

                    </div><!--parts_data-->
                    <div class="kakusu_menu">
                         <h2 class="left_border">漢字の画数から検索（画数検索）</h2>
                         <ul>
                              <li><a href="kakusu01">1<span class="small">画</span></a></li>
                              <li><a href="kakusu02">2<span class="small">画</span></a></li>
                              <li><a href="kakusu03">3<span class="small">画</span></a></li>
                              <li><a href="kakusu04">4<span class="small">画</span></a></li>
                              <li><a href="kakusu05">5<span class="small">画</span></a></li>
                              <li><a href="kakusu06">6<span class="small">画</span></a></li>
                              <li><a href="kakusu07">7<span class="small">画</span></a></li>
                              <li><a href="kakusu08">8<span class="small">画</span></a></li>
                              <li><a href="kakusu09">9<span class="small">画</span></a></li>
                              <li><a href="kakusu10">10<span class="small">画</span></a></li>
                              <li><a href="kakusu11">11<span class="small">画</span></a></li>
                              <li><a href="kakusu12">12<span class="small">画</span></a></li>
                              <li><a href="kakusu13">13<span class="small">画</span></a></li>
                              <li><a href="kakusu14">14<span class="small">画</span></a></li>
                              <li><a href="kakusu15">15<span class="small">画</span></a></li>
                              <li><a href="kakusu16">16<span class="small">画</span></a></li>
                              <li><a href="kakusu17">17<span class="small">画</span></a></li>
                              <li><a href="kakusu18">18<span class="small">画</span></a></li>
                              <li><a href="kakusu19">19<span class="small">画</span></a></li>
                              <li><a href="kakusu20">20<span class="small">画</span></a></li>
                              <li><a href="kakusu21">21<span class="small">画</span></a></li>
                              <li><a href="kakusu22">22<span class="small">画</span></a></li>
                              <li><a href="kakusu23">23<span class="small">画</span></a></li>
                              <li><a href="kakusu24">24<span class="small">画</span></a></li>
                              <li><a href="kakusu25">25<span class="small">画</span></a></li>
                              <li><a href="kakusu26">26<span class="small">画</span></a></li>
                              <li><a href="kakusu27">27<span class="small">画</span></a></li>
                              <li><a href="kakusu28">28<span class="small">画</span></a></li>
                              <li><a href="kakusu29">29<span class="small">画</span></a></li>
                              <li><a href="kakusu30">30<span class="small">画</span></a></li>
                              <li><a href="kakusu31">31<span class="small">画</span></a></li>
                              <li><a href="kakusu32">32<span class="small">画</span></a></li>
                              <li><a href="kakusu33">33<span class="small">画</span></a></li>
                              <li><a href="kakusu34">34<span class="small">画</span></a></li>
                              <li><a href="kakusu35">35<span class="small">画</span></a></li>
                              <li><a href="kakusu36">36<span class="small">画</span></a></li>
                              <li><a href="kakusu39">39<span class="small">画</span></a></li>
                              <li><a href="kakusu44">44<span class="small">画</span></a></li>
                              <li><a href="kakusu48">48<span class="small">画</span></a></li>
                              <li><a href="kakusu52">52<span class="small">画</span></a></li>
                         </ul>
                    </div>
               </div><!--bushu_wrap-->
          </div><!--content-->
          <aside>
               <div id="sidebar" data-nosnippet>


                    <div class="side_bnr link_pc">
                         <a href=""><img src="" alt="今年の漢字"></a>
                    </div>
                    <div class="side_bnr link_sp">
                         <a href=""><img src="" alt="今年の漢字"></a>
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
                              <p class="ttl_normal_s"><span class="rank_update">11/17更新</span></p>
                              <ul class="ChangeElem_Btn_Content2 rank_menu">
                                   <li class="ChangeElem_Btn2">デイリー</li>
                                   <li class="ChangeElem_Btn2">週間</li>
                                   <li class="ChangeElem_Btn2">月間</li>
                              </ul>
                              <div class="ChangeElem_Panel2">
                                   <ul class="side_rank sr_01">
                                        <li><a href="kanji/059" title="漢字「中」のページ"><span class="rank">1</span><span class="jp">中</span></a></li>
                                        <li><a href="kanji/190" title="漢字「長」のページ"><span class="rank">6</span><span class="jp">長</span></a></li>
                                        <li><a href="kanji/136" title="漢字「国」のページ"><span class="rank">2</span><span class="jp">国</span></a></li>
                                        <li><a href="kanji/252" title="漢字「駅」のページ"><span class="rank">7</span><span class="jp">駅</span></a></li>
                                        <li><a href="kanji/071" title="漢字「本」のページ"><span class="rank">3</span><span class="jp">本</span></a></li>
                                        <li><a href="671" title="漢字「寄」のページ"><span class="rank">8</span><span class="jp">寄</span></a></li>
                                        <li><a href="kanji/086" title="漢字「家」のページ"><span class="rank">4</span><span class="jp">家</span></a></li>
                                        <li><a href="kanji/114" title="漢字「兄」のページ"><span class="rank">9</span><span class="jp">兄</span></a></li>
                                        <li><a href="775" title="漢字「提」のページ"><span class="rank">5</span><span class="jp">提</span></a></li>
                                        <li><a href="12934" title="漢字「殺」のページ"><span class="rank">10</span><span class="jp">殺</span></a></li>
                                   </ul>
                              </div><!--ChangeElem_Panel2-->
                              <div class="ChangeElem_Panel2">
                                   <ul class="side_rank">
                                        <li><a href="kanji/059" title="漢字「中」のページ"><span class="rank">1</span><span class="jp">中</span></a></li>
                                        <li><a href="kanji/163" title="漢字「新」のページ"><span class="rank">6</span><span class="jp">新</span></a></li>
                                        <li><a href="kanji/423" title="漢字「有」のページ"><span class="rank">2</span><span class="jp">有</span></a></li>
                                        <li><a href="602" title="漢字「無」のページ"><span class="rank">7</span><span class="jp">無</span></a></li>
                                        <li><a href="kanji/071" title="漢字「本」のページ"><span class="rank">3</span><span class="jp">本</span></a></li>
                                        <li><a href="911" title="漢字「将」のページ"><span class="rank">8</span><span class="jp">将</span></a></li>
                                        <li><a href="kanji/086" title="漢字「家」のページ"><span class="rank">4</span><span class="jp">家</span></a></li>
                                        <li><a href="kanji/190" title="漢字「長」のページ"><span class="rank">9</span><span class="jp">長</span></a></li>
                                        <li><a href="kanji/136" title="漢字「国」のページ"><span class="rank">5</span><span class="jp">国</span></a></li>
                                        <li><a href="kanji/094" title="漢字「海」のページ"><span class="rank">10</span><span class="jp">海</span></a></li>
                                   </ul>
                              </div><!--ChangeElem_Panel2-->
                              <div class="ChangeElem_Panel2">
                                   <ul class="side_rank">
                                        <li><a href="kanji/059" title="漢字「中」のページ"><span class="rank">1</span><span class="jp">中</span></a></li>
                                        <li><a href="kanji/086" title="漢字「家」のページ"><span class="rank">6</span><span class="jp">家</span></a></li>
                                        <li><a href="991" title="漢字「優」のページ"><span class="rank">2</span><span class="jp">優</span></a></li>
                                        <li><a href="kanji/398" title="漢字「美」のページ"><span class="rank">7</span><span class="jp">美</span></a></li>
                                        <li><a href="602" title="漢字「無」のページ"><span class="rank">3</span><span class="jp">無</span></a></li>
                                        <li><a href="kanji/423" title="漢字「有」のページ"><span class="rank">8</span><span class="jp">有</span></a></li>
                                        <li><a href="kanji/439" title="漢字「和」のページ"><span class="rank">4</span><span class="jp">和</span></a></li>
                                        <li><a href="kanji/071" title="漢字「本」のページ"><span class="rank">9</span><span class="jp">本</span></a></li>
                                        <li><a href="kanji/440" title="漢字「愛」のページ"><span class="rank">5</span><span class="jp">愛</span></a></li>
                                        <li><a href="kanji/027" title="漢字「子」のページ"><span class="rank">10</span><span class="jp">子</span></a></li>
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
                    <!--side_box-->
               </div><!--sidebar-->
          </aside>
     </div><!--wrapper-->
   <script>
    jQuery(document).ready(function($) { 
    $('.search_parts li a').mouseenter(function() { 
        var star = $(this).text(); 
        star2 ="";
        $('.search_parts li a').attr('href','<?php echo home_url(); ?>'+'/detail-three/'+'/?bold='+star+'&normal='+star2);  
        console.log('<?php echo home_url(); ?>'+'/detail-three/'+'/?bold='+star+'&normal='+star2); 
        console.log("bold "+ star); 
    });
        });
</script>
     <?php wp_footer() ?>