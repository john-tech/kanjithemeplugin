<?php
/*
 * Template Name: kakusu15
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
               <h1 class="ttl_main">１５画の漢字一覧（漢検級順）</h1>

               <p>総画数１５画の漢字の一覧です。<br>
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
                                   <option value="kakusu14">１４画</option>
                                   <option value="#" selected>１５画</option>
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
                              <li><a href="bkakusu15">部首別順</a></li>
                              <li><a href="ckakusu15">読み順</a></li>
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
                                   <li><a class="color1" href="kanji/176">線</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts08">
                              <h3 class="ttl_while"><a href="kyu08">漢字検定８級（小学校３年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/253">横</a></li>
                                   <li><a class="color1" href="kanji/362">談</a></li>
                                   <li><a class="color1" href="kanji/366">調</a></li>
                                   <li><a class="color1" href="kanji/389">箱</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts07">
                              <h3 class="ttl_while"><a href="kyu07">漢字検定７級（小学校４年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/451">億</a></li>
                                   <li><a class="color1" href="kanji/453">課</a></li>
                                   <li><a class="color1" href="kanji/475">器</a></li>
                                   <li><a class="color1" href="553">選</a></li>
                                   <li><a class="color1" href="586">熱</a></li>
                                   <li><a class="color1" href="597">標</a></li>
                                   <li><a class="color1" href="622">養</a></li>
                                   <li><a class="color1" href="630">輪</a></li>
                                   <li><a class="color1" href="1630">潟</a>
                                   </li>
                                   <li><a class="color1" href="1760">縄</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts06">
                              <h3 class="ttl_while"><a href="kyu06">漢字検定６級（小学校５年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="538">賞</a></li>
                                   <li><a class="color1" href="662">確</a></li>
                                   <li><a class="color1" href="685">潔</a></li>
                                   <li><a class="color1" href="714">賛</a></li>
                                   <li><a class="color1" href="725">質</a></li>
                                   <li><a class="color1" href="780">導</a></li>
                                   <li><a class="color1" href="804">編</a></li>
                                   <li><a class="color1" href="811">暴</a></li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts05">
                              <h3 class="ttl_while"><a href="kyu05">漢字検定５級（小学校６年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="776">敵</a></li>
                                   <li><a class="color1" href="825">遺</a></li>
                                   <li><a class="color1" href="856">劇</a></li>
                                   <li><a class="color1" href="861">権</a></li>
                                   <li><a class="color1" href="903">熟</a></li>
                                   <li><a class="color1" href="907">諸</a></li>
                                   <li><a class="color1" href="934">蔵</a></li>
                                   <li><a class="color1" href="941">誕</a></li>
                                   <li><a class="color1" href="948">潮</a></li>
                                   <li><a class="color1" href="1002">論</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts04">
                              <h3 class="ttl_while"><a href="kyu04">漢字検定４級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1016">鋭</a>
                                   </li>
                                   <li><a class="color1" href="1017">影</a>
                                   </li>
                                   <li><a class="color1" href="1020">縁</a>
                                   </li>
                                   <li><a class="color1" href="1039">監</a>
                                   </li>
                                   <li><a class="color1" href="1041">歓</a>
                                   </li>
                                   <li><a class="color1" href="1050">輝</a>
                                   </li>
                                   <li><a class="color1" href="1052">儀</a>
                                   </li>
                                   <li><a class="color1" href="1053">戯</a>
                                   </li>
                                   <li><a class="color1" href="1080">撃</a>
                                   </li>
                                   <li><a class="color1" href="1098">稿</a>
                                   </li>
                                   <li><a class="color1" href="1126">趣</a>
                                   </li>
                                   <li><a class="color1" href="1149">震</a>
                                   </li>
                                   <li><a class="color1" href="1192">澄</a>
                                   </li>
                                   <li><a class="color1" href="1214">踏</a>
                                   </li>
                                   <li><a class="color1" href="1225">輩</a>
                                   </li>
                                   <li><a class="color1" href="1238">範</a>
                                   </li>
                                   <li><a class="color1" href="1240">盤</a>
                                   </li>
                                   <li><a class="color1" href="1252">膚</a>
                                   </li>
                                   <li><a class="color1" href="1255">敷</a>
                                   </li>
                                   <li><a class="color1" href="1257">賦</a>
                                   </li>
                                   <li><a class="color1" href="1258">舞</a>
                                   </li>
                                   <li><a class="color1" href="1261">噴</a>
                                   </li>
                                   <li><a class="color1" href="1265">舗</a>
                                   </li>
                                   <li><a class="color1" href="1287">黙</a>
                                   </li>
                                   <li><a class="color1" href="1304">慮</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts03">
                              <h3 class="ttl_while"><a href="kyu03">漢字検定３級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1321">慰</a>
                                   </li>
                                   <li><a class="color1" href="1324">閲</a>
                                   </li>
                                   <li><a class="color1" href="1336">餓</a>
                                   </li>
                                   <li><a class="color1" href="1353">緩</a>
                                   </li>
                                   <li><a class="color1" href="1375">緊</a>
                                   </li>
                                   <li><a class="color1" href="1420">撮</a>
                                   </li>
                                   <li><a class="color1" href="1422">暫</a>
                                   </li>
                                   <li><a class="color1" href="1435">潤</a>
                                   </li>
                                   <li><a class="color1" href="1436">遵</a>
                                   </li>
                                   <li><a class="color1" href="1443">衝</a>
                                   </li>
                                   <li><a class="color1" href="1450">嘱</a>
                                   </li>
                                   <li><a class="color1" href="1452">審</a>
                                   </li>
                                   <li><a class="color1" href="1459">穂</a>
                                   </li>
                                   <li><a class="color1" href="1466">請</a>
                                   </li>
                                   <li><a class="color1" href="1472">潜</a>
                                   </li>
                                   <li><a class="color1" href="1495">諾</a>
                                   </li>
                                   <li><a class="color1" href="1503">駐</a>
                                   </li>
                                   <li><a class="color1" href="1505">鋳</a>
                                   </li>
                                   <li><a class="color1" href="1511">墜</a>
                                   </li>
                                   <li><a class="color1" href="1514">締</a>
                                   </li>
                                   <li><a class="color1" href="1547">墳</a>
                                   </li>
                                   <li><a class="color1" href="1574">魅</a>
                                   </li>
                                   <li><a class="color1" href="1578">憂</a>
                                   </li>
                                   <li><a class="color1" href="1594">霊</a>
                                   </li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts02j">
                              <h3 class="ttl_while"><a href="kyu02j">漢字検定準２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1611">謁</a>
                                   </li>
                                   <li><a class="color1" href="1616">稼</a>
                                   </li>
                                   <li><a class="color1" href="1654">窮</a>
                                   </li>
                                   <li><a class="color1" href="1668">勲</a>
                                   </li>
                                   <li><a class="color1" href="1672">慶</a>
                                   </li>
                                   <li><a class="color1" href="1708">賜</a>
                                   </li>
                                   <li><a class="color1" href="1788">遷</a>
                                   </li>
                                   <li><a class="color1" href="1801">槽</a>
                                   </li>
                                   <li><a class="color1" href="1835">徹</a>
                                   </li>
                                   <li><a class="color1" href="1836">撤</a>
                                   </li>
                                   <li><a class="color1" href="1857">賠</a>
                                   </li>
                                   <li><a class="color1" href="1870">罷</a>
                                   </li>
                                   <li><a class="color1" href="1873">賓</a>
                                   </li>
                                   <li><a class="color1" href="1881">憤</a>
                                   </li>
                                   <li><a class="color1" href="1882">幣</a>
                                   </li>
                                   <li><a class="color1" href="1883">弊</a>
                                   </li>
                                   <li><a class="color1" href="1890">褒</a>
                                   </li>
                                   <li><a class="color1" href="1896">撲</a>
                                   </li>
                                   <li><a class="color1" href="1900">摩</a>
                                   </li>
                                   <li><a class="color1" href="1918">窯</a>
                                   </li>
                                   <li><a class="color1" href="1922">履</a>
                                   </li>
                                   <li><a class="color1" href="1928">寮</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02">
                              <h3 class="ttl_while"><a href="kyu02">漢字検定２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1962">潰</a>
                                   </li>
                                   <li><a class="color1" href="1977">畿</a>
                                   </li>
                                   <li><a class="color1" href="1988">憬</a>
                                   </li>
                                   <li><a class="color1" href="1989">稽</a>
                                   </li>
                                   <li><a class="color1" href="2003">駒</a>
                                   </li>
                                   <li><a class="color1" href="2016">摯</a>
                                   </li>
                                   <li><a class="color1" href="2017">餌</a>
                                   </li>
                                   <li><a class="color1" href="2026">憧</a>
                                   </li>
                                   <li><a class="color1" href="2048">踪</a>
                                   </li>
                                   <li><a class="color1" href="2055">誰</a>
                                   </li>
                                   <li><a class="color1" href="2061">嘲</a>
                                   </li>
                                   <li><a class="color1" href="2085">罵</a>
                                   </li>
                                   <li><a class="color1" href="2087">箸</a>
                                   </li>
                                   <li><a class="color1" href="2093">膝</a>
                                   </li>
                                   <li><a class="color1" href="2097">蔽</a>
                                   </li>
                                   <li><a class="color1" href="2098">餅</a>
                                   </li>
                                   <li><a href="2104">頬</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01j">
                              <h3 class="ttl_while"><a href="kyu01j">漢字検定準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="2147">鞍</a>
                                   </li>
                                   <li><a class="color2" href="2173">慧</a>
                                   </li>
                                   <li><a href="2201">鴎</a></li>
                                   <li><a class="color2" href="2213">蝦</a>
                                   </li>
                                   <li><a class="color2" href="2220">駕</a>
                                   </li>
                                   <li><a href="2228">漑</a></li>
                                   <li><a href="2242">撹</a></li>
                                   <li><a href="2255">澗</a></li>
                                   <li><a href="2265">諌</a></li>
                                   <li><a href="2268">翫</a></li>
                                   <li><a href="2271">鴈</a></li>
                                   <li><a class="color2" href="2273">嬉</a>
                                   </li>
                                   <li><a class="color2" href="2275">槻</a>
                                   </li>
                                   <li><a class="color2" href="2276">毅</a>
                                   </li>
                                   <li><a class="color2" href="2288">誼</a>
                                   </li>
                                   <li><a href="2291">麹</a></li>
                                   <li><a class="color2" href="2323">蕎</a>
                                   </li>
                                   <li><a class="color2" href="2342">駈</a>
                                   </li>
                                   <li><a class="color2" href="2360">蕨</a>
                                   </li>
                                   <li><a class="color2" href="2380">糊</a>
                                   </li>
                                   <li><a href="2420">噛</a></li>
                                   <li><a class="color2" href="2450">撒</a>
                                   </li>
                                   <li><a class="color2" href="2452">撰</a>
                                   </li>
                                   <li><a class="color2" href="2498">撞</a>
                                   </li>
                                   <li><a class="color2" href="2500">諏</a>
                                   </li>
                                   <li><a class="color2" href="2532">醇</a>
                                   </li>
                                   <li><a href="2547">鋤</a></li>
                                   <li><a href="2557">廠</a></li>
                                   <li><a class="color2" href="2563">樟</a>
                                   </li>
                                   <li><a class="color2" href="2572">蕉</a>
                                   </li>
                                   <li><a class="color2" href="2589">鄭</a>
                                   </li>
                                   <li><a href="2593">蝕</a></li>
                                   <li><a href="2613">廚</a></li>
                                   <li><a href="2621">蕊</a></li>
                                   <li><a href="2622">蕋</a></li>
                                   <li><a href="2639">箭</a></li>
                                   <li><a href="2643">蝉</a></li>
                                   <li><a href="2644">賤</a></li>
                                   <li><a href="2650">糎</a></li>
                                   <li><a class="color2" href="2651">噌</a>
                                   </li>
                                   <li><a class="color2" href="2675">噂</a>
                                   </li>
                                   <li><a class="color2" href="2713">歎</a>
                                   </li>
                                   <li><a href="2716">箪</a></li>
                                   <li><a href="2727">樗</a></li>
                                   <li><a href="2729">潴</a></li>
                                   <li><a class="color2" href="2741">蝶</a>
                                   </li>
                                   <li><a href="2774">撚</a></li>
                                   <li><a class="color2" href="2790">樋</a>
                                   </li>
                                   <li><a href="2799">蕩</a></li>
                                   <li><a class="color2" href="2812">播</a>
                                   </li>
                                   <li><a class="color2" href="2841">幡</a>
                                   </li>
                                   <li><a class="color2" href="2843">磐</a>
                                   </li>
                                   <li><a class="color2" href="2844">蕃</a>
                                   </li>
                                   <li><a href="2854">誹</a></li>
                                   <li><a class="color2" href="2865">廟</a>
                                   </li>
                                   <li><a href="2866">鋲</a></li>
                                   <li><a class="color2" href="2873">撫</a>
                                   </li>
                                   <li><a class="color2" href="2882">蕪</a>
                                   </li>
                                   <li><a href="2891">僻</a></li>
                                   <li><a class="color2" href="2896">篇</a>
                                   </li>
                                   <li><a href="2899">緬</a></li>
                                   <li><a href="2902">鋪</a></li>
                                   <li><a class="color2" href="2915">鋒</a>
                                   </li>
                                   <li><a href="2917">鴇</a></li>
                                   <li><a href="2959">蝿</a></li>
                                   <li><a href="2961">慾</a></li>
                                   <li><a class="color2" href="2975">劉</a>
                                   </li>
                                   <li><a class="color2" href="2988">諒</a>
                                   </li>
                                   <li><a class="color2" href="2989">遼</a>
                                   </li>
                                   <li><a href="3009">聨</a></li>
                                   <li><a class="color2" href="3013">魯</a>
                                   </li>
                                   <li><a href="3034">麪</a></li>
                                   <li><a href="6473">噓</a></li>
                                   <li><a href="6481">潑</a></li>
                                   <li><a href="6522">㵎</a></li>
                                   <li><a href="6526">蝱</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01">
                              <h3 class="ttl_while"><a href="kyu01">漢字検定１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="3039">澂</a></li>
                                   <li><a href="3136">僵</a></li>
                                   <li><a href="3137">儁</a></li>
                                   <li><a href="3138">儂</a></li>
                                   <li><a href="3141">儚</a></li>
                                   <li><a href="3159">冪</a></li>
                                   <li><a class="color2" href="3163">凜</a>
                                   </li>
                                   <li><a class="color2" href="3164">凛</a>
                                   </li>
                                   <li><a href="3185">劈</a></li>
                                   <li><a href="3207">匳</a></li>
                                   <li><a href="3299">噎</a></li>
                                   <li><a href="3301">嘶</a></li>
                                   <li><a href="3302">嘸</a></li>
                                   <li><a href="3352">墟</a></li>
                                   <li><a href="3407">嫺</a></li>
                                   <li><a href="3408">嫻</a></li>
                                   <li><a href="3409">嬌</a></li>
                                   <li><a href="3410">嬋</a></li>
                                   <li><a href="3473">嶢</a></li>
                                   <li><a href="3474">嶝</a></li>
                                   <li><a href="3496">幟</a></li>
                                   <li><a href="3497">幢</a></li>
                                   <li><a href="3508">廝</a></li>
                                   <li><a href="3509">廛</a></li>
                                   <li><a href="3510">廡</a></li>
                                   <li><a href="3607">慳</a></li>
                                   <li><a href="3609">慙</a></li>
                                   <li><a href="3611">慫</a></li>
                                   <li><a href="3619">憔</a></li>
                                   <li><a href="3620">憚</a></li>
                                   <li><a href="3623">憫</a></li>
                                   <li><a href="3624">憮</a></li>
                                   <li><a href="3651">戮</a></li>
                                   <li><a href="3720">撓</a></li>
                                   <li><a href="3721">撥</a></li>
                                   <li><a href="3722">撕</a></li>
                                   <li><a href="3723">撩</a></li>
                                   <li><a href="3724">撈</a></li>
                                   <li><a class="color2" href="3760">黎</a>
                                   </li>
                                   <li><a href="3776">麾</a></li>
                                   <li><a href="3799">鴉</a></li>
                                   <li><a href="3800">鴃</a></li>
                                   <li><a href="3801">鴆</a></li>
                                   <li><a href="3852">魴</a></li>
                                   <li><a href="3946">麩</a></li>
                                   <li><a href="3950">魃</a></li>
                                   <li><a href="3956">魄</a></li>
                                   <li><a href="3958">閭</a></li>
                                   <li><a href="3980">霄</a></li>
                                   <li><a href="3981">霈</a></li>
                                   <li><a href="3982">霆</a></li>
                                   <li><a href="4075">蝨</a></li>
                                   <li><a href="4077">蝠</a></li>
                                   <li><a href="4078">蝮</a></li>
                                   <li><a href="4079">蝌</a></li>
                                   <li><a href="4080">蝴</a></li>
                                   <li><a href="4081">蝙</a></li>
                                   <li><a href="4082">蝓</a></li>
                                   <li><a href="4083">蝗</a></li>
                                   <li><a href="4084">蝟</a></li>
                                   <li><a href="4085">蝎</a></li>
                                   <li><a href="4086">蝣</a></li>
                                   <li><a href="4087">蝸</a></li>
                                   <li><a href="4101">蟒</a></li>
                                   <li><a href="4171">槹</a></li>
                                   <li><a href="4172">槲</a></li>
                                   <li><a href="4173">槭</a></li>
                                   <li><a href="4175">樊</a></li>
                                   <li><a href="4176">槧</a></li>
                                   <li><a href="4178">槿</a></li>
                                   <li><a href="4179">樅</a></li>
                                   <li><a href="4180">樛</a></li>
                                   <li><a href="4181">樔</a></li>
                                   <li><a href="4182">樒</a></li>
                                   <li><a href="4184">槨</a></li>
                                   <li><a href="4245">膣</a></li>
                                   <li><a href="4247">膠</a></li>
                                   <li><a href="4269">踝</a></li>
                                   <li><a href="4270">踟</a></li>
                                   <li><a href="4271">踞</a></li>
                                   <li><a href="4311">膵</a></li>
                                   <li><a href="4320">漿</a></li>
                                   <li><a href="4321">滕</a></li>
                                   <li><a href="4425">潸</a></li>
                                   <li><a href="4426">潘</a></li>
                                   <li><a href="4427">澎</a></li>
                                   <li><a href="4428">潺</a></li>
                                   <li><a href="4429">潭</a></li>
                                   <li><a href="4430">澆</a></li>
                                   <li><a href="4431">潯</a></li>
                                   <li><a href="4432">潦</a></li>
                                   <li><a href="4438">濆</a></li>
                                   <li><a href="4467">輙</a></li>
                                   <li><a href="4469">輟</a></li>
                                   <li><a href="4470">輜</a></li>
                                   <li><a href="4471">輦</a></li>
                                   <li><a href="4472">輛</a></li>
                                   <li><a href="4489">駟</a></li>
                                   <li><a href="4490">駛</a></li>
                                   <li><a href="4491">駑</a></li>
                                   <li><a href="4492">駘</a></li>
                                   <li><a href="4493">駝</a></li>
                                   <li><a href="4548">篁</a></li>
                                   <li><a href="4549">篌</a></li>
                                   <li><a href="4550">篆</a></li>
                                   <li><a href="4551">篋</a></li>
                                   <li><a href="4582">箴</a></li>
                                   <li><a href="4630">瑩</a></li>
                                   <li><a href="4634">璋</a></li>
                                   <li><a href="4635">瑾</a></li>
                                   <li><a href="4643">髫</a></li>
                                   <li><a href="4644">髯</a></li>
                                   <li><a href="4645">髴</a></li>
                                   <li><a href="4646">髱</a></li>
                                   <li><a href="4665">磑</a></li>
                                   <li><a href="4666">磋</a></li>
                                   <li><a href="4667">碾</a></li>
                                   <li><a href="4668">磅</a></li>
                                   <li><a href="4669">碼</a></li>
                                   <li><a href="4670">磊</a></li>
                                   <li><a href="4701">鋏</a></li>
                                   <li><a href="4702">銹</a></li>
                                   <li><a href="4703">銷</a></li>
                                   <li><a href="4710">錵</a></li>
                                   <li><a href="4711">錺</a></li>
                                   <li><a href="4783">緤</a></li>
                                   <li><a href="4784">緞</a></li>
                                   <li><a href="4785">緘</a></li>
                                   <li><a href="4786">緲</a></li>
                                   <li><a href="4787">縅</a></li>
                                   <li><a href="4788">緝</a></li>
                                   <li><a href="4789">緡</a></li>
                                   <li><a href="4845">醋</a></li>
                                   <li><a href="4846">醂</a></li>
                                   <li><a href="4879">甍</a></li>
                                   <li><a href="4923">熨</a></li>
                                   <li><a class="color2" href="4924">熙</a>
                                   </li>
                                   <li><a href="4926">熈</a></li>
                                   <li><a href="4927">熬</a></li>
                                   <li><a class="color2" href="4972">諄</a>
                                   </li>
                                   <li><a href="4973">諚</a></li>
                                   <li><a href="4978">諍</a></li>
                                   <li><a href="4979">諂</a></li>
                                   <li><a href="4987">諛</a></li>
                                   <li><a href="5021">鬧</a></li>
                                   <li><a href="5055">褞</a></li>
                                   <li><a href="5056">褥</a></li>
                                   <li><a href="5057">褫</a></li>
                                   <li><a href="5058">褪</a></li>
                                   <li><a href="5088">鞐</a></li>
                                   <li><a href="5089">鞋</a></li>
                                   <li><a href="5090">鞏</a></li>
                                   <li><a href="5121">獗</a></li>
                                   <li><a href="5129">羯</a></li>
                                   <li><a href="5136">頡</a></li>
                                   <li><a href="5165">瞎</a></li>
                                   <li><a href="5166">瞑</a></li>
                                   <li><a href="5167">瞋</a></li>
                                   <li><a href="5209">鄲</a></li>
                                   <li><a href="5239">瘟</a></li>
                                   <li><a href="5240">瘠</a></li>
                                   <li><a href="5241">瘤</a></li>
                                   <li><a href="5242">瘢</a></li>
                                   <li><a href="5243">瘡</a></li>
                                   <li><a href="5270">糅</a></li>
                                   <li><a href="5271">糂</a></li>
                                   <li><a href="5280">餉</a></li>
                                   <li><a href="5281">餃</a></li>
                                   <li><a href="5306">殤</a></li>
                                   <li><a href="5363">靠</a></li>
                                   <li><a href="5411">蔬</a></li>
                                   <li><a href="5412">蕘</a></li>
                                   <li><a href="5413">蕕</a></li>
                                   <li><a href="5415">蕁</a></li>
                                   <li><a href="5416">蕈</a></li>
                                   <li><a href="5417">蕀</a></li>
                                   <li><a href="5471">皚</a></li>
                                   <li><a href="5476">貎</a></li>
                                   <li><a href="5486">賚</a></li>
                                   <li><a href="5527">遯</a></li>
                                   <li><a href="5528">遨</a></li>
                                   <li><a href="5560">稷</a></li>
                                   <li><a href="5603">皺</a></li>
                                   <li><a href="5609">翦</a></li>
                                   <li><a href="5610">翩</a></li>
                                   <li><a href="5641">禝</a></li>
                                   <li><a href="5645">臧</a></li>
                                   <li><a href="5647">豌</a></li>
                                   <li><a href="6538">鴂</a></li>
                                   <li><a href="6897">魳</a></li>
                                   <li><a href="6902">魸</a></li>
                                   <li><a href="6904">魬</a></li>
                                   <li><a href="8398">踑</a></li>
                                   <li><a href="9265">耦</a></li>
                                   <li><a href="9868">蝘</a></li>
                                   <li><a href="9883">蝲</a></li>
                                   <li><a href="10214">璇</a></li>
                                   <li><a href="12338">噁</a></li>
                                   <li><a href="12349">牖</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts0101j">
                              <h3 class="ttl_while"><a href="kyu0101j">漢字検定１級 / 準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="5671">齒</a></li>
                                   <li><a class="color2" href="5732">樂</a>
                                   </li>
                                   <li><a href="5767">墮</a></li>
                                   <li><a class="color2" href="5810">劍</a>
                                   </li>
                                   <li><a class="color2" href="5837">澁</a>
                                   </li>
                                   <li><a class="color2" href="5838">價</a>
                                   </li>
                                   <li><a class="color2" href="5839">儉</a>
                                   </li>
                                   <li><a class="color2" href="5923">彈</a>
                                   </li>
                                   <li><a href="6006">樞</a></li>
                                   <li><a class="color2" href="6008">樣</a>
                                   </li>
                                   <li><a href="6009">樓</a></li>
                                   <li><a href="6032">舖</a></li>
                                   <li><a href="6107">踐</a></li>
                                   <li><a href="6118">寫</a></li>
                                   <li><a class="color2" href="6128">稻</a>
                                   </li>
                                   <li><a class="color2" href="6175">廣</a>
                                   </li>
                                   <li><a href="6176">廢</a></li>
                                   <li><a href="6202">數</a></li>
                                   <li><a href="6227">歐</a></li>
                                   <li><a href="6231">毆</a></li>
                                   <li><a class="color2" href="6326">賣</a>
                                   </li>
                                   <li><a class="color2" href="6335">醉</a>
                                   </li>
                                   <li><a class="color2" href="6356">髮</a>
                                   </li>
                                   <li><a class="color2" href="6380">墨</a>
                                   </li>
                                   <li><a class="color2" href="6381">層</a>
                                   </li>
                                   <li><a class="color2" href="6383">憎</a>
                                   </li>
                                   <li><a class="color2" href="6402">穀</a>
                                   </li>
                                   <li><a class="color2" href="6404">節</a>
                                   </li>
                                   <li><a class="color2" href="6405">練</a>
                                   </li>
                                   <li><a class="color2" href="6419">增</a>
                                   </li>
                                   <li><a class="color2" href="6421">德</a>
                                   </li>
                                   <li><a class="color2" href="6425">緖</a>
                                   </li>
                                   <li><a class="color2" href="6435">徵</a>
                                   </li>
                                   <li><a class="color2" href="6450">瘦</a>
                                   </li>
                                   <li><a class="color2" href="6453">緣</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts">
                              <h3 class="ttl_while">漢字検定対象外</h3>
                              <ul class="search_parts">
                                   <li><a href="5730">潁</a></li>
                                   <li><a href="5855">磆</a></li>
                                   <li><a href="5912">緜</a></li>
                                   <li><a href="6007">槫</a></li>
                                   <li><a href="6057">噐</a></li>
                                   <li><a href="6090">憇</a></li>
                                   <li><a href="6104">篏</a></li>
                                   <li><a href="6129">稾</a></li>
                                   <li><a href="6130">穃</a></li>
                                   <li><a href="6149">墹</a></li>
                                   <li><a href="6150">墫</a></li>
                                   <li><a href="6152">墸</a></li>
                                   <li><a href="6170">嶐</a></li>
                                   <li><a href="6174">幤</a></li>
                                   <li><a href="6219">樌</a></li>
                                   <li><a href="6222">樢</a></li>
                                   <li><a href="6243">潼</a></li>
                                   <li><a href="6244">澑</a></li>
                                   <li><a href="6253">獎</a></li>
                                   <li><a href="6272">窰</a></li>
                                   <li><a href="6276">罸</a></li>
                                   <li><a href="6278">羮</a></li>
                                   <li><a href="6287">膕</a></li>
                                   <li><a href="6288">膤</a></li>
                                   <li><a href="6289">膓</a></li>
                                   <li><a href="6301">蕚</a></li>
                                   <li><a href="6303">蝪</a></li>
                                   <li><a href="6361">澍</a></li>
                                   <li><a href="6556">䵟</a></li>
                                   <li><a href="6574">鼑</a></li>
                                   <li><a href="6575">鼐</a></li>
                                   <li><a href="6576">鼏</a></li>
                                   <li><a href="6633">䰛</a></li>
                                   <li><a href="6714">駚</a></li>
                                   <li><a href="6715">駏</a></li>
                                   <li><a href="6716">駉</a></li>
                                   <li><a href="6717">駔</a></li>
                                   <li><a href="6722">駞</a></li>
                                   <li><a href="6723">駓</a></li>
                                   <li><a href="6724">駜</a></li>
                                   <li><a href="6725">駙</a></li>
                                   <li><a href="6741">駠</a></li>
                                   <li><a href="6788">䯊</a></li>
                                   <li><a href="6789">骷</a></li>
                                   <li><a href="6790">骶</a></li>
                                   <li><a href="6791">骳</a></li>
                                   <li><a href="6792">骲</a></li>
                                   <li><a href="6815">髛</a></li>
                                   <li><a href="6823">髬</a></li>
                                   <li><a href="6824">髲</a></li>
                                   <li><a href="6825">髳</a></li>
                                   <li><a href="6875">䰠</a></li>
                                   <li><a href="6890">魪</a></li>
                                   <li><a href="6891">䰻</a></li>
                                   <li><a href="6892">魥</a></li>
                                   <li><a href="6893">魭</a></li>
                                   <li><a href="6894">魧</a></li>
                                   <li><a href="6895">魦</a></li>
                                   <li><a href="6896">魣</a></li>
                                   <li><a href="6898">魫</a></li>
                                   <li><a href="6899">魶</a></li>
                                   <li><a href="6900">魹</a></li>
                                   <li><a href="6901">魨</a></li>
                                   <li><a href="6903">䰽</a></li>
                                   <li><a href="6905">魮</a></li>
                                   <li><a href="6906">魵</a></li>
                                   <li><a href="6907">䰷</a></li>
                                   <li><a href="6908">魷</a></li>
                                   <li><a href="6967">䵑</a></li>
                                   <li><a href="7081">魲</a></li>
                                   <li><a href="7088">䲰</a></li>
                                   <li><a href="7089">鳿</a></li>
                                   <li><a href="7090">鳹</a></li>
                                   <li><a href="7091">鳸</a></li>
                                   <li><a href="7092">鳷</a></li>
                                   <li><a href="7093">鳾</a></li>
                                   <li><a href="7094">鴋</a></li>
                                   <li><a href="7244">䴠</a></li>
                                   <li><a href="7245">麃</a></li>
                                   <li><a href="7253">䴡</a></li>
                                   <li><a href="7260">麄</a></li>
                                   <li><a href="7262">麨</a></li>
                                   <li><a href="7295">鞉</a></li>
                                   <li><a href="7298">鞌</a></li>
                                   <li><a href="7299">鞇</a></li>
                                   <li><a href="7300">鞈</a></li>
                                   <li><a href="7343">韎</a></li>
                                   <li><a href="7344">韍</a></li>
                                   <li><a href="7364">韯</a></li>
                                   <li><a href="7380">頞</a></li>
                                   <li><a href="7381">頦</a></li>
                                   <li><a href="7382">頠</a></li>
                                   <li><a href="7383">頟</a></li>
                                   <li><a href="7384">頜</a></li>
                                   <li><a href="7385">頫</a></li>
                                   <li><a href="7386">頪</a></li>
                                   <li><a href="7404">頩</a></li>
                                   <li><a href="7414">䪿</a></li>
                                   <li><a href="7434">颳</a></li>
                                   <li><a href="7458">㱃</a></li>
                                   <li><a href="7460">餁</a></li>
                                   <li><a href="7465">餈</a></li>
                                   <li><a href="7467">餂</a></li>
                                   <li><a href="7468">餇</a></li>
                                   <li><a href="7530">銲</a></li>
                                   <li><a href="7640">鋆</a></li>
                                   <li><a href="7641">銳</a></li>
                                   <li><a href="7642">鋈</a></li>
                                   <li><a href="7643">鋘</a></li>
                                   <li><a href="7644">鋨</a></li>
                                   <li><a href="7645">銽</a></li>
                                   <li><a href="7646">鋎</a></li>
                                   <li><a href="7647">鋡</a></li>
                                   <li><a href="7648">銶</a></li>
                                   <li><a href="7649">鋙</a></li>
                                   <li><a href="7650">鋦</a></li>
                                   <li><a href="7651">鋗</a></li>
                                   <li><a href="7652">鋧</a></li>
                                   <li><a href="7653">鋐</a></li>
                                   <li><a href="7654">鋯</a></li>
                                   <li><a href="7655">銼</a></li>
                                   <li><a href="7656">鋜</a></li>
                                   <li><a href="7657">鋅</a></li>
                                   <li><a href="7658">鋕</a></li>
                                   <li><a href="7659">鋠</a></li>
                                   <li><a href="7660">鋟</a></li>
                                   <li><a href="7661">鋮</a></li>
                                   <li><a href="7662">鋋</a></li>
                                   <li><a href="7663">銺</a></li>
                                   <li><a href="7664">銸</a></li>
                                   <li><a href="7665">鋌</a></li>
                                   <li><a href="7666">銻</a></li>
                                   <li><a href="7667">鋓</a></li>
                                   <li><a href="7668">鋀</a></li>
                                   <li><a href="7669">鋥</a></li>
                                   <li><a href="7670">鋱</a></li>
                                   <li><a href="7671">鋇</a></li>
                                   <li><a href="7672">鋂</a></li>
                                   <li><a href="7673">鋬</a></li>
                                   <li><a href="7676">鋍</a></li>
                                   <li><a href="7677">鋣</a></li>
                                   <li><a href="7679">鋰</a></li>
                                   <li><a href="7680">鋁</a></li>
                                   <li><a href="7681">鋝</a></li>
                                   <li><a href="7682">鋃</a></li>
                                   <li><a href="7798">銿</a></li>
                                   <li><a href="7879">閱</a></li>
                                   <li><a href="7880">閫</a></li>
                                   <li><a href="7881">閬</a></li>
                                   <li><a href="7890">閴</a></li>
                                   <li><a href="7965">隤</a></li>
                                   <li><a href="7966">隥</a></li>
                                   <li><a href="7999">霅</a></li>
                                   <li><a href="8000">霃</a></li>
                                   <li><a href="8001">霉</a></li>
                                   <li><a href="8002">霂</a></li>
                                   <li><a href="8032">靚</a></li>
                                   <li><a href="8039">槼</a></li>
                                   <li><a href="8048">覤</a></li>
                                   <li><a href="8049">覥</a></li>
                                   <li><a href="8070">觭</a></li>
                                   <li><a href="8151">諆</a></li>
                                   <li><a href="8153">諊</a></li>
                                   <li><a href="8154">誾</a></li>
                                   <li><a href="8155">誳</a></li>
                                   <li><a href="8156">諕</a></li>
                                   <li><a href="8157">諉</a></li>
                                   <li><a href="8158">諔</a></li>
                                   <li><a href="8159">誯</a></li>
                                   <li><a href="8160">諗</a></li>
                                   <li><a href="8161">誶</a></li>
                                   <li><a href="8162">諓</a></li>
                                   <li><a href="8163">諑</a></li>
                                   <li><a href="8164">諈</a></li>
                                   <li><a href="8165">諃</a></li>
                                   <li><a href="8167">誻</a></li>
                                   <li><a href="8168">誷</a></li>
                                   <li><a href="8240">谾</a></li>
                                   <li><a href="8265">䝋</a></li>
                                   <li><a href="8285">貓</a></li>
                                   <li><a href="8302">䝻</a></li>
                                   <li><a href="8303">賡</a></li>
                                   <li><a href="8304">賥</a></li>
                                   <li><a href="8306">賙</a></li>
                                   <li><a href="8307">賫</a></li>
                                   <li><a href="8309">賨</a></li>
                                   <li><a href="8310">賧</a></li>
                                   <li><a href="8311">賬</a></li>
                                   <li><a href="8312">賝</a></li>
                                   <li><a href="8348">趞</a></li>
                                   <li><a href="8349">趡</a></li>
                                   <li><a href="8350">趠</a></li>
                                   <li><a href="8351">趟</a></li>
                                   <li><a href="8397">踠</a></li>
                                   <li><a href="8399">踦</a></li>
                                   <li><a href="8400">踘</a></li>
                                   <li><a href="8401">踡</a></li>
                                   <li><a href="8402">踧</a></li>
                                   <li><a href="8403">踥</a></li>
                                   <li><a href="8404">踖</a></li>
                                   <li><a href="8405">踔</a></li>
                                   <li><a href="8406">踢</a></li>
                                   <li><a href="8408">踣</a></li>
                                   <li><a href="8409">踒</a></li>
                                   <li><a href="8468">躻</a></li>
                                   <li><a href="8469">躺</a></li>
                                   <li><a href="8502">輢</a></li>
                                   <li><a href="8503">輠</a></li>
                                   <li><a href="8504">輡</a></li>
                                   <li><a href="8505">輨</a></li>
                                   <li><a href="8506">輗</a></li>
                                   <li><a href="8507">輥</a></li>
                                   <li><a href="8508">輚</a></li>
                                   <li><a href="8509">輖</a></li>
                                   <li><a href="8511">輫</a></li>
                                   <li><a href="8512">輧</a></li>
                                   <li><a href="8514">輣</a></li>
                                   <li><a href="8515">輞</a></li>
                                   <li><a href="8516">輘</a></li>
                                   <li><a href="8517">輬</a></li>
                                   <li><a href="8546">辤</a></li>
                                   <li><a href="8551">辳</a></li>
                                   <li><a href="8604">衜</a></li>
                                   <li><a href="8612">遦</a></li>
                                   <li><a href="8613">遧</a></li>
                                   <li><a href="8614">遬</a></li>
                                   <li><a href="8615">遰</a></li>
                                   <li><a href="8672">郶</a></li>
                                   <li><a href="8706">鄬</a></li>
                                   <li><a href="8707">鄩</a></li>
                                   <li><a href="8708">鄯</a></li>
                                   <li><a href="8710">鄧</a></li>
                                   <li><a href="8711">鄱</a></li>
                                   <li><a href="8712">鄮</a></li>
                                   <li><a href="8747">醃</a></li>
                                   <li><a href="8748">醆</a></li>
                                   <li><a href="8751">醊</a></li>
                                   <li><a href="8752">醅</a></li>
                                   <li><a href="8753">醁</a></li>
                                   <li><a href="8781">壄</a></li>
                                   <li><a href="8790">䈔</a></li>
                                   <li><a href="8830">箛</a></li>
                                   <li><a href="8848">箼</a></li>
                                   <li><a href="8850">箶</a></li>
                                   <li><a href="8851">篊</a></li>
                                   <li><a href="8854">箰</a></li>
                                   <li><a href="8855">箺</a></li>
                                   <li><a href="8856">箾</a></li>
                                   <li><a href="8857">箵</a></li>
                                   <li><a href="8858">篂</a></li>
                                   <li><a href="8859">篅</a></li>
                                   <li><a href="8860">箲</a></li>
                                   <li><a href="8861">䈚</a></li>
                                   <li><a href="8862">箽</a></li>
                                   <li><a href="8863">箯</a></li>
                                   <li><a href="8864">篈</a></li>
                                   <li><a href="8865">䈎</a></li>
                                   <li><a href="8866">箻</a></li>
                                   <li><a href="8964">糉</a></li>
                                   <li><a href="8967">粼</a></li>
                                   <li><a href="8969">糇</a></li>
                                   <li><a href="8970">糈</a></li>
                                   <li><a href="8971">糄</a></li>
                                   <li><a href="8974">糍</a></li>
                                   <li><a href="9071">緫</a></li>
                                   <li><a href="9080">緭</a></li>
                                   <li><a href="9081">䌂</a></li>
                                   <li><a href="9082">緺</a></li>
                                   <li><a href="9083">緙</a></li>
                                   <li><a href="9084">緱</a></li>
                                   <li><a href="9085">緪</a></li>
                                   <li><a href="9087">緦</a></li>
                                   <li><a href="9088">緧</a></li>
                                   <li><a href="9089">緗</a></li>
                                   <li><a href="9090">緛</a></li>
                                   <li><a href="9091">緵</a></li>
                                   <li><a href="9092">緹</a></li>
                                   <li><a href="9093">縀</a></li>
                                   <li><a href="9096">緶</a></li>
                                   <li><a href="9097">緥</a></li>
                                   <li><a href="9100">緼</a></li>
                                   <li><a href="9166">甇</a></li>
                                   <li><a href="9185">罶</a></li>
                                   <li><a href="9213">羬</a></li>
                                   <li><a href="9214">羭</a></li>
                                   <li><a href="9234">翬</a></li>
                                   <li><a href="9235">翨</a></li>
                                   <li><a href="9236">翥</a></li>
                                   <li><a href="9283">聦</a></li>
                                   <li><a href="9285">聤</a></li>
                                   <li><a href="9300">臱</a></li>
                                   <li><a href="9342">艎</a></li>
                                   <li><a href="9343">艏</a></li>
                                   <li><a href="9344">艑</a></li>
                                   <li><a href="9345">艒</a></li>
                                   <li><a href="9461">蕐</a></li>
                                   <li><a href="10000">褏</a></li>
                                   <li><a href="9601">蓏</a></li>
                                   <li><a href="9604">䕃</a></li>
                                   <li><a href="9638">蔿</a></li>
                                   <li><a href="9639">蕓</a></li>
                                   <li><a href="9640">蕑</a></li>
                                   <li><a href="9641">蕳</a></li>
                                   <li><a href="9642">䕀</a></li>
                                   <li><a href="9643">蕢</a></li>
                                   <li><a href="9644">蕖</a></li>
                                   <li><a href="9645">蕙</a></li>
                                   <li><a href="9646">蕞</a></li>
                                   <li><a href="9648">蕠</a></li>
                                   <li><a href="9649">蕤</a></li>
                                   <li><a href="9650">蕝</a></li>
                                   <li><a href="9651">蕏</a></li>
                                   <li><a href="9652">蕆</a></li>
                                   <li><a href="9653">蕫</a></li>
                                   <li><a href="9654">蕟</a></li>
                                   <li><a href="9655">蕒</a></li>
                                   <li><a href="9656">蕜</a></li>
                                   <li><a href="9657">蔾</a></li>
                                   <li><a href="9679">蕡</a></li>
                                   <li><a href="9689">蕯</a></li>
                                   <li><a href="9756">虢</a></li>
                                   <li><a href="9867">蝛</a></li>
                                   <li><a href="9869">蝝</a></li>
                                   <li><a href="9870">蝯</a></li>
                                   <li><a href="9871">蝰</a></li>
                                   <li><a href="9872">䗐</a></li>
                                   <li><a href="9873">蝑</a></li>
                                   <li><a href="9874">蝤</a></li>
                                   <li><a href="9875">蝍</a></li>
                                   <li><a href="9876">蝡</a></li>
                                   <li><a href="9877">蝻</a></li>
                                   <li><a href="9878">蝏</a></li>
                                   <li><a href="9879">蝭</a></li>
                                   <li><a href="9880">蝳</a></li>
                                   <li><a href="9881">蝜</a></li>
                                   <li><a href="9882">蝥</a></li>
                                   <li><a href="9908">螀</a></li>
                                   <li><a href="9920">蝼</a></li>
                                   <li><a href="9984">䘔</a></li>
                                   <li><a href="9990">衚</a></li>
                                   <li><a href="9998">褜</a></li>
                                   <li><a href="9999">褎</a></li>
                                   <li><a href="10049">躶</a></li>
                                   <li><a href="10050">褘</a></li>
                                   <li><a href="10059">褲</a></li>
                                   <li><a href="10060">褠</a></li>
                                   <li><a href="10061">褨</a></li>
                                   <li><a href="10062">褯</a></li>
                                   <li><a href="10063">褦</a></li>
                                   <li><a href="10135">㻫</a></li>
                                   <li><a href="10193">蝐</a></li>
                                   <li><a href="10209">瑬</a></li>
                                   <li><a href="10211">璆</a></li>
                                   <li><a href="10212">璈</a></li>
                                   <li><a href="10213">璀</a></li>
                                   <li><a href="10215">璁</a></li>
                                   <li><a href="10216">璅</a></li>
                                   <li><a href="10217">璊</a></li>
                                   <li><a href="10218">璉</a></li>
                                   <li><a href="10330">畾</a></li>
                                   <li><a href="10397">瘝</a></li>
                                   <li><a href="10409">瘞</a></li>
                                   <li><a href="10410">瘣</a></li>
                                   <li><a href="10411">瘚</a></li>
                                   <li><a href="10412">瘜</a></li>
                                   <li><a href="10413">瘛</a></li>
                                   <li><a href="10414">瘙</a></li>
                                   <li><a href="10415">瘥</a></li>
                                   <li><a href="10416">瘨</a></li>
                                   <li><a href="10429">瘼</a></li>
                                   <li><a href="10443">㿀</a></li>
                                   <li><a href="10471">㿥</a></li>
                                   <li><a href="10472">皛</a></li>
                                   <li><a href="10473">皝</a></li>
                                   <li><a href="10474">皜</a></li>
                                   <li><a href="10476">皞</a></li>
                                   <li><a href="10478">暭</a></li>
                                   <li><a href="10483">皣</a></li>
                                   <li><a href="10588">瞏</a></li>
                                   <li><a href="10590">瞌</a></li>
                                   <li><a href="10591">瞍</a></li>
                                   <li><a href="10592">瞇</a></li>
                                   <li><a href="10593">䁘</a></li>
                                   <li><a href="10600">瞢</a></li>
                                   <li><a href="10609">瞱</a></li>
                                   <li><a href="10645">磇</a></li>
                                   <li><a href="10716">磤</a></li>
                                   <li><a href="10717">磒</a></li>
                                   <li><a href="10718">磈</a></li>
                                   <li><a href="10719">磕</a></li>
                                   <li><a href="10721">碻</a></li>
                                   <li><a href="10722">磎</a></li>
                                   <li><a href="10723">碽</a></li>
                                   <li><a href="10724">碿</a></li>
                                   <li><a href="10725">磉</a></li>
                                   <li><a href="10726">磓</a></li>
                                   <li><a href="10727">磌</a></li>
                                   <li><a href="10728">磏</a></li>
                                   <li><a href="10729">䃕</a></li>
                                   <li><a href="10803">禕</a></li>
                                   <li><a href="10811">禜</a></li>
                                   <li><a href="10813">禛</a></li>
                                   <li><a href="10814">禡</a></li>
                                   <li><a href="10869">稸</a></li>
                                   <li><a href="10870">稴</a></li>
                                   <li><a href="10872">稹</a></li>
                                   <li><a href="10873">稺</a></li>
                                   <li><a href="10874">穊</a></li>
                                   <li><a href="10915">牕</a></li>
                                   <li><a href="10926">窴</a></li>
                                   <li><a href="10931">䆮</a></li>
                                   <li><a href="10984">諐</a></li>
                                   <li><a href="10988">慤</a></li>
                                   <li><a href="10991">慹</a></li>
                                   <li><a href="10992">慼</a></li>
                                   <li><a href="10994">慸</a></li>
                                   <li><a href="10996">憄</a></li>
                                   <li><a href="10997">憃</a></li>
                                   <li><a href="10998">慜</a></li>
                                   <li><a href="11000">憘</a></li>
                                   <li><a href="11004">憞</a></li>
                                   <li><a href="11005">慿</a></li>
                                   <li><a href="11129">㦍</a></li>
                                   <li><a href="11141">憜</a></li>
                                   <li><a href="11149">慨</a></li>
                                   <li><a href="11171">憒</a></li>
                                   <li><a href="11172">憪</a></li>
                                   <li><a href="11173">憍</a></li>
                                   <li><a href="11174">憢</a></li>
                                   <li><a href="11175">憓</a></li>
                                   <li><a href="11176">憰</a></li>
                                   <li><a href="11179">憱</a></li>
                                   <li><a href="11180">憟</a></li>
                                   <li><a href="11182">憛</a></li>
                                   <li><a href="11183">憭</a></li>
                                   <li><a href="11193">懂</a></li>
                                   <li><a href="11231">戭</a></li>
                                   <li><a href="11254">㩃</a></li>
                                   <li><a href="11256">摰</a></li>
                                   <li><a href="11261">㢣</a></li>
                                   <li><a href="11411">撘</a></li>
                                   <li><a href="11467">撎</a></li>
                                   <li><a href="11468">撊</a></li>
                                   <li><a href="11469">撝</a></li>
                                   <li><a href="11470">撌</a></li>
                                   <li><a href="11471">撟</a></li>
                                   <li><a href="11472">撬</a></li>
                                   <li><a href="11473">撳</a></li>
                                   <li><a href="11474">撠</a></li>
                                   <li><a href="11475">撅</a></li>
                                   <li><a href="11477">撦</a></li>
                                   <li><a href="11478">撜</a></li>
                                   <li><a href="11479">撨</a></li>
                                   <li><a href="11480">撏</a></li>
                                   <li><a href="11481">撙</a></li>
                                   <li><a href="11482">撣</a></li>
                                   <li><a href="11483">撐</a></li>
                                   <li><a href="11484">撑</a></li>
                                   <li><a href="11485">㩉</a></li>
                                   <li><a href="11486">㩌</a></li>
                                   <li><a href="11487">撇</a></li>
                                   <li><a href="11488">㩎</a></li>
                                   <li><a href="11495">擏</a></li>
                                   <li><a href="11499">撡</a></li>
                                   <li><a href="11534">爴</a></li>
                                   <li><a href="11566">敺</a></li>
                                   <li><a href="11567">敹</a></li>
                                   <li><a href="11591">斳</a></li>
                                   <li><a href="11592">斲</a></li>
                                   <li><a href="11714">暵</a></li>
                                   <li><a href="11716">暲</a></li>
                                   <li><a href="11753">暬</a></li>
                                   <li><a href="11811">膖</a></li>
                                   <li><a href="11832">朢</a></li>
                                   <li><a href="11893">膙</a></li>
                                   <li><a href="11895">膞</a></li>
                                   <li><a href="11896">䐲</a></li>
                                   <li><a href="11897">膛</a></li>
                                   <li><a href="11898">膘</a></li>
                                   <li><a href="11900">膟</a></li>
                                   <li><a href="11901">膢</a></li>
                                   <li><a href="12052">䲷</a></li>
                                   <li><a href="12063">㯃</a></li>
                                   <li><a href="12149">樬</a></li>
                                   <li><a href="12197">槶</a></li>
                                   <li><a href="12198">槵</a></li>
                                   <li><a href="12200">槣</a></li>
                                   <li><a href="12201">槷</a></li>
                                   <li><a href="12203">槴</a></li>
                                   <li><a href="12205">樝</a></li>
                                   <li><a href="12206">槯</a></li>
                                   <li><a href="12207">樧</a></li>
                                   <li><a href="12208">槢</a></li>
                                   <li><a href="12209">槳</a></li>
                                   <li><a href="12210">㯍</a></li>
                                   <li><a href="12211">槮</a></li>
                                   <li><a href="12212">槥</a></li>
                                   <li><a href="12213">樕</a></li>
                                   <li><a href="12214">樰</a></li>
                                   <li><a href="12215">樤</a></li>
                                   <li><a href="12216">樀</a></li>
                                   <li><a href="12217">樁</a></li>
                                   <li><a href="12219">槾</a></li>
                                   <li><a href="12220">槰</a></li>
                                   <li><a href="12221">樠</a></li>
                                   <li><a href="12223">槱</a></li>
                                   <li><a href="12225">樑</a></li>
                                   <li><a href="12226">樏</a></li>
                                   <li><a href="12227">樃</a></li>
                                   <li><a href="12228">樚</a></li>
                                   <li><a href="12274">樯</a></li>
                                   <li><a href="12304">樐</a></li>
                                   <li><a href="12350">牗</a></li>
                                   <li><a href="12418">骵</a></li>
                                   <li><a href="12591">僲</a></li>
                                   <li><a href="12612">僢</a></li>
                                   <li><a href="12623">㒒</a></li>
                                   <li><a href="12625">僯</a></li>
                                   <li><a href="12626">僾</a></li>
                                   <li><a href="12627">儈</a></li>
                                   <li><a href="12629">儌</a></li>
                                   <li><a href="12630">僸</a></li>
                                   <li><a href="12632">儇</a></li>
                                   <li><a href="12633">儍</a></li>
                                   <li><a href="12635">僿</a></li>
                                   <li><a href="12636">儎</a></li>
                                   <li><a href="12638">僺</a></li>
                                   <li><a href="12639">儃</a></li>
                                   <li><a href="12640">儋</a></li>
                                   <li><a href="12641">儅</a></li>
                                   <li><a href="12642">僶</a></li>
                                   <li><a href="12651">㒗</a></li>
                                   <li><a href="12722">凙</a></li>
                                   <li><a href="12780">䠊</a></li>
                                   <li><a href="12799">劋</a></li>
                                   <li><a href="12805">劊</a></li>
                                   <li><a href="12807">劌</a></li>
                                   <li><a href="12809">㔅</a></li>
                                   <li><a href="12810">劅</a></li>
                                   <li><a href="12812">劐</a></li>
                                   <li><a href="12873">歒</a></li>
                                   <li><a href="12881">勯</a></li>
                                   <li><a href="12883">勮</a></li>
                                   <li><a href="12890">歵</a></li>
                                   <li><a href="12903">勰</a></li>
                                   <li><a href="12913">殥</a></li>
                                   <li><a href="12915">殣</a></li>
                                   <li><a href="12919">殢</a></li>
                                   <li><a href="12984">毿</a></li>
                                   <li><a href="13103">僼</a></li>
                                   <li><a href="13104">僽</a></li>
                                   <li><a href="13136">凚</a></li>
                                   <li><a href="13153">劆</a></li>
                                   <li><a href="13154">劎</a></li>
                                   <li><a href="13202">厱</a></li>
                                   <li><a href="13504">嘟</a></li>
                                   <li><a href="13505">嘠</a></li>
                                   <li><a href="13507">嘪</a></li>
                                   <li><a href="13508">嘫</a></li>
                                   <li><a href="13509">嘬</a></li>
                                   <li><a href="13510">嘭</a></li>
                                   <li><a href="13511">嘮</a></li>
                                   <li><a href="13512">嘳</a></li>
                                   <li><a href="13513">嘵</a></li>
                                   <li><a href="13514">嘷</a></li>
                                   <li><a href="13515">嘹</a></li>
                                   <li><a href="13516">嘺</a></li>
                                   <li><a href="13517">嘻</a></li>
                                   <li><a href="13518">嘽</a></li>
                                   <li><a href="13519">嘿</a></li>
                                   <li><a href="13520">噀</a></li>
                                   <li><a href="13521">噃</a></li>
                                   <li><a href="13522">噅</a></li>
                                   <li><a href="13523">噈</a></li>
                                   <li><a href="13524">噉</a></li>
                                   <li><a href="13525">噊</a></li>
                                   <li><a href="13526">噋</a></li>
                                   <li><a href="13527">噍</a></li>
                                   <li><a href="13528">噏</a></li>
                                   <li><a href="13531">噔</a></li>
                                   <li><a href="13532">噕</a></li>
                                   <li><a href="13533">噖</a></li>
                                   <li><a href="13534">噗</a></li>
                                   <li><a href="13535">噘</a></li>
                                   <li><a href="13537">噚</a></li>
                                   <li><a href="13544">噧</a></li>
                                   <li><a href="13627">圚</a></li>
                                   <li><a href="13850">墝</a></li>
                                   <li><a href="13851">墠</a></li>
                                   <li><a href="13852">墡</a></li>
                                   <li><a href="13853">墢</a></li>
                                   <li><a href="13854">墣</a></li>
                                   <li><a href="13855">墤</a></li>
                                   <li><a href="13856">墥</a></li>
                                   <li><a href="13857">墦</a></li>
                                   <li><a href="13858">墧</a></li>
                                   <li><a href="13859">墩</a></li>
                                   <li><a href="13860">墪</a></li>
                                   <li><a href="13861">墬</a></li>
                                   <li><a href="13862">墭</a></li>
                                   <li><a href="13863">墯</a></li>
                                   <li><a href="13864">墰</a></li>
                                   <li><a href="13865">墱</a></li>
                                   <li><a href="13866">墲</a></li>
                                   <li><a href="13867">墴</a></li>
                                   <li><a href="13868">墵</a></li>
                                   <li><a href="13892">壿</a></li>
                                   <li><a href="13908">夦</a></li>
                                   <li><a href="13932">奫</a></li>
                                   <li><a href="13933">奭</a></li>
                                   <li><a href="14198">嫳</a></li>
                                   <li><a href="14199">嫴</a></li>
                                   <li><a href="14200">嫵</a></li>
                                   <li><a href="14201">嫶</a></li>
                                   <li><a href="14202">嫷</a></li>
                                   <li><a href="14203">嫸</a></li>
                                   <li><a href="14204">嫹</a></li>
                                   <li><a href="14205">嫼</a></li>
                                   <li><a href="14206">嫽</a></li>
                                   <li><a href="14208">嫿</a></li>
                                   <li><a href="14209">嬀</a></li>
                                   <li><a href="14210">嬁</a></li>
                                   <li><a href="14211">嬂</a></li>
                                   <li><a href="14212">嬃</a></li>
                                   <li><a href="14213">嬄</a></li>
                                   <li><a href="14214">嬆</a></li>
                                   <li><a href="14215">嬇</a></li>
                                   <li><a href="14216">嬈</a></li>
                                   <li><a href="14217">嬊</a></li>
                                   <li><a href="14218">嬍</a></li>
                                   <li><a href="14219">嬎</a></li>
                                   <li><a href="14220">嬏</a></li>
                                   <li><a href="14234">嬞</a></li>
                                   <li><a href="14323">寪</a></li>
                                   <li><a href="14324">寭</a></li>
                                   <li><a href="14356">尵</a></li>
                                   <li><a href="14372">屧</a></li>
                                   <li><a href="14551">嶏</a></li>
                                   <li><a href="14552">嶑</a></li>
                                   <li><a href="14553">嶓</a></li>
                                   <li><a href="14554">嶔</a></li>
                                   <li><a href="14555">嶕</a></li>
                                   <li><a href="14556">嶖</a></li>
                                   <li><a href="14557">嶗</a></li>
                                   <li><a href="14558">嶘</a></li>
                                   <li><a href="14559">嶚</a></li>
                                   <li><a href="14560">嶛</a></li>
                                   <li><a href="14562">嶞</a></li>
                                   <li><a href="14563">嶟</a></li>
                                   <li><a href="14564">嶠</a></li>
                                   <li><a href="14565">嶡</a></li>
                                   <li><a href="14566">嶣</a></li>
                                   <li><a href="14567">嶤</a></li>
                                   <li><a href="14577">嶱</a></li>
                                   <li><a href="14651">幚</a></li>
                                   <li><a href="14653">幜</a></li>
                                   <li><a href="14654">幝</a></li>
                                   <li><a href="14655">幞</a></li>
                                   <li><a href="14656">幠</a></li>
                                   <li><a href="14708">廜</a></li>
                                   <li><a href="14709">廞</a></li>
                                   <li><a href="14710">廤</a></li>
                                   <li><a href="14748">彆</a></li>
                                   <li><a href="14750">彉</a></li>
                                   <li><a href="14789">徶</a></li>
                                   <li><a href="14790">徸</a></li>
                                   <li><a href="14867">慗</a></li>
                                   <li><a href="14870">慦</a></li>
                                   <li><a href="14873">慭</a></li>
                                   <li><a href="14874">憅</a></li>
                                   <li><a href="14876">憈</a></li>
                                   <li><a href="14877">憉</a></li>
                                   <li><a href="14879">憕</a></li>
                                   <li><a href="14880">憡</a></li>
                                   <li><a href="14881">憣</a></li>
                                   <li><a href="14882">憦</a></li>
                                   <li><a href="14883">憳</a></li>
                                   <li><a href="14886">憽</a></li>
                                   <li><a href="15005">摦</a></li>
                                   <li><a href="15006">摨</a></li>
                                   <li><a href="15010">摮</a></li>
                                   <li><a href="15014">摼</a></li>
                                   <li><a href="15017">撀</a></li>
                                   <li><a href="15022">撋</a></li>
                                   <li><a href="15023">撔</a></li>
                                   <li><a href="15024">撖</a></li>
                                   <li><a href="15025">撗</a></li>
                                   <li><a href="15026">撧</a></li>
                                   <li><a href="15027">撪</a></li>
                                   <li><a href="15028">撯</a></li>
                                   <li><a href="15029">撱</a></li>
                                   <li><a href="15030">撴</a></li>
                                   <li><a href="15032">擆</a></li>
                                   <li><a href="15035">擖</a></li>
                                   <li><a href="15037">擛</a></li>
                                   <li><a href="15067">敶</a></li>
                                   <li><a href="15068">敻</a></li>
                                   <li><a href="15110">暨</a></li>
                                   <li><a href="15111">暩</a></li>
                                   <li><a href="15112">暪</a></li>
                                   <li><a href="15114">暰</a></li>
                                   <li><a href="15115">暶</a></li>
                                   <li><a href="15116">暷</a></li>
                                   <li><a href="15246">榤</a></li>
                                   <li><a href="15257">槦</a></li>
                                   <li><a href="15259">槸</a></li>
                                   <li><a href="15260">槺</a></li>
                                   <li><a href="15261">樄</a></li>
                                   <li><a href="15262">樆</a></li>
                                   <li><a href="15263">樇</a></li>
                                   <li><a href="15264">樈</a></li>
                                   <li><a href="15265">樉</a></li>
                                   <li><a href="15266">樍</a></li>
                                   <li><a href="15267">樎</a></li>
                                   <li><a href="15268">樖</a></li>
                                   <li><a href="15269">樘</a></li>
                                   <li><a href="15270">樜</a></li>
                                   <li><a href="15272">樦</a></li>
                                   <li><a href="15280">橗</a></li>
                                   <li><a href="15352">歏</a></li>
                                   <li><a href="15353">歑</a></li>
                                   <li><a href="15359">歶</a></li>
                                   <li><a href="15365">殦</a></li>
                                   <li><a href="15382">氀</a></li>
                                   <li><a href="15384">氂</a></li>
                                   <li><a href="15784">漀</a></li>
                                   <li><a href="15791">漋</a></li>
                                   <li><a href="15795">漐</a></li>
                                   <li><a href="15809">漦</a></li>
                                   <li><a href="15823">漽</a></li>
                                   <li><a href="15828">潎</a></li>
                                   <li><a href="15829">潏</a></li>
                                   <li><a href="15830">潐</a></li>
                                   <li><a href="15831">潒</a></li>
                                   <li><a href="15832">潓</a></li>
                                   <li><a href="15833">潕</a></li>
                                   <li><a href="15834">潖</a></li>
                                   <li><a href="15835">潗</a></li>
                                   <li><a href="15836">潙</a></li>
                                   <li><a href="15838">潝</a></li>
                                   <li><a href="15840">潠</a></li>
                                   <li><a href="15841">潡</a></li>
                                   <li><a href="15842">潢</a></li>
                                   <li><a href="15843">潣</a></li>
                                   <li><a href="15844">潥</a></li>
                                   <li><a href="15845">潧</a></li>
                                   <li><a href="15846">潨</a></li>
                                   <li><a href="15848">潪</a></li>
                                   <li><a href="15849">潫</a></li>
                                   <li><a href="15850">潬</a></li>
                                   <li><a href="15851">潱</a></li>
                                   <li><a href="15852">潲</a></li>
                                   <li><a href="15853">潳</a></li>
                                   <li><a href="15854">潵</a></li>
                                   <li><a href="15855">潶</a></li>
                                   <li><a href="15856">潷</a></li>
                                   <li><a href="15857">潹</a></li>
                                   <li><a href="15858">潻</a></li>
                                   <li><a href="15859">潽</a></li>
                                   <li><a href="15860">潿</a></li>
                                   <li><a href="15862">澅</a></li>
                                   <li><a href="15863">澇</a></li>
                                   <li><a href="15864">澈</a></li>
                                   <li><a href="15865">澉</a></li>
                                   <li><a href="15866">澊</a></li>
                                   <li><a href="15867">澋</a></li>
                                   <li><a href="15868">澌</a></li>
                                   <li><a href="15869">澏</a></li>
                                   <li><a href="15870">澐</a></li>
                                   <li><a href="15871">澒</a></li>
                                   <li><a href="15872">澓</a></li>
                                   <li><a href="15873">澔</a></li>
                                   <li><a href="15875">澖</a></li>
                                   <li><a href="15906">濍</a></li>
                                   <li><a href="16174">熃</a></li>
                                   <li><a href="16187">熚</a></li>
                                   <li><a href="16188">熛</a></li>
                                   <li><a href="16189">熜</a></li>
                                   <li><a href="16190">熝</a></li>
                                   <li><a href="16192">熠</a></li>
                                   <li><a href="16193">熡</a></li>
                                   <li><a href="16194">熣</a></li>
                                   <li><a href="16195">熤</a></li>
                                   <li><a href="16196">熦</a></li>
                                   <li><a href="16197">熧</a></li>
                                   <li><a href="16198">熩</a></li>
                                   <li><a href="16199">熪</a></li>
                                   <li><a href="16200">熫</a></li>
                                   <li><a href="16201">熭</a></li>
                                   <li><a href="16202">熮</a></li>
                                   <li><a href="16203">熯</a></li>
                                   <li><a href="16204">熰</a></li>
                                   <li><a href="16205">熲</a></li>
                                   <li><a href="16211">熼</a></li>
                                   <li><a href="16285">牅</a></li>
                                   <li><a href="16329">犘</a></li>
                                   <li><a href="16330">犙</a></li>
                                   <li><a href="16331">犚</a></li>
                                   <li><a href="16332">犛</a></li>
                                   <li><a href="16435">獋</a></li>
                                   <li><a href="16441">獖</a></li>
                                   <li><a href="16443">獙</a></li>
                                   <li><a href="16444">獚</a></li>
                                   <li><a href="16445">獛</a></li>
                                   <li><a href="16447">獝</a></li>
                                   <li><a href="16448">獞</a></li>
                                   <li><a href="16449">獟</a></li>
                                   <li><a href="16450">獠</a></li>
                                   <li><a href="16451">獡</a></li>
                                   <li><a href="16452">獢</a></li>
                                   <li><a href="16543">瑺</a></li>
                                   <li><a href="16544">瑻</a></li>
                                   <li><a href="16545">瑼</a></li>
                                   <li><a href="16546">瑽</a></li>
                                   <li><a href="16547">璂</a></li>
                                   <li><a href="16548">璄</a></li>
                                   <li><a href="16549">璌</a></li>
                                   <li><a href="16581">甈</a></li>
                                   <li><a href="16582">甉</a></li>
                                   <li><a href="16678">瞈</a></li>
                                   <li><a href="16679">瞉</a></li>
                                   <li><a href="16680">瞊</a></li>
                                   <li><a href="16681">瞐</a></li>
                                   <li><a href="16684">瞙</a></li>
                                   <li><a href="16755">磀</a></li>
                                   <li><a href="16756">磂</a></li>
                                   <li><a href="16757">磃</a></li>
                                   <li><a href="16758">磄</a></li>
                                   <li><a href="16759">磍</a></li>
                                   <li><a href="16797">禞</a></li>
                                   <li><a href="16798">禟</a></li>
                                   <li><a href="16799">禢</a></li>
                                   <li><a href="16834">稦</a></li>
                                   <li><a href="16837">稶</a></li>
                                   <li><a href="16858">窲</a></li>
                                   <li><a href="16912">箮</a></li>
                                   <li><a href="16913">箳</a></li>
                                   <li><a href="16914">箷</a></li>
                                   <li><a href="16915">箹</a></li>
                                   <li><a href="16916">箿</a></li>
                                   <li><a href="16917">篃</a></li>
                                   <li><a href="16918">篍</a></li>
                                   <li><a href="16919">篎</a></li>
                                   <li><a href="16920">篒</a></li>
                                   <li><a href="16965">糃</a></li>
                                   <li><a href="16966">糆</a></li>
                                   <li><a href="16967">糋</a></li>
                                   <li><a href="16968">糌</a></li>
                                   <li><a href="17016">緟</a></li>
                                   <li><a href="17017">緳</a></li>
                                   <li><a href="17018">緷</a></li>
                                   <li><a href="17019">緸</a></li>
                                   <li><a href="17020">緽</a></li>
                                   <li><a href="17021">緿</a></li>
                                   <li><a href="17022">縃</a></li>
                                   <li><a href="17029">縙</a></li>
                                   <li><a href="17090">翧</a></li>
                                   <li><a href="17091">翪</a></li>
                                   <li><a href="17092">翭</a></li>
                                   <li><a href="17119">聥</a></li>
                                   <li><a href="17120">聧</a></li>
                                   <li><a href="17167">膒</a></li>
                                   <li><a href="17168">膔</a></li>
                                   <li><a href="17169">膗</a></li>
                                   <li><a href="17170">膡</a></li>
                                   <li><a href="17192">艐</a></li>
                                   <li><a href="17193">艓</a></li>
                                   <li><a href="17322">蓹</a></li>
                                   <li><a href="17340">蕂</a></li>
                                   <li><a href="17341">蕄</a></li>
                                   <li><a href="17342">蕅</a></li>
                                   <li><a href="17343">蕇</a></li>
                                   <li><a href="17344">蕌</a></li>
                                   <li><a href="17345">蕍</a></li>
                                   <li><a href="17346">蕔</a></li>
                                   <li><a href="17347">蕛</a></li>
                                   <li><a href="17348">蕥</a></li>
                                   <li><a href="17349">蕦</a></li>
                                   <li><a href="17350">蕧</a></li>
                                   <li><a href="17351">蕮</a></li>
                                   <li><a href="17454">蜵</a></li>
                                   <li><a href="17456">蜸</a></li>
                                   <li><a href="17461">蝒</a></li>
                                   <li><a href="17462">蝔</a></li>
                                   <li><a href="17463">蝖</a></li>
                                   <li><a href="17464">蝚</a></li>
                                   <li><a href="17465">蝞</a></li>
                                   <li><a href="17466">蝢</a></li>
                                   <li><a href="17468">蝩</a></li>
                                   <li><a href="17469">蝫</a></li>
                                   <li><a href="17470">蝬</a></li>
                                   <li><a href="17471">蝵</a></li>
                                   <li><a href="17472">蝷</a></li>
                                   <li><a href="17473">蝺</a></li>
                                   <li><a href="17474">蝽</a></li>
                                   <li><a href="17579">褟</a></li>
                                   <li><a href="17582">褣</a></li>
                                   <li><a href="17583">褤</a></li>
                                   <li><a href="17585">褬</a></li>
                                   <li><a href="17608">覢</a></li>
                                   <li><a href="17609">覣</a></li>
                                   <li><a href="17624">觬</a></li>
                                   <li><a href="17625">觮</a></li>
                                   <li><a href="17664">誱</a></li>
                                   <li><a href="17665">誴</a></li>
                                   <li><a href="17666">誵</a></li>
                                   <li><a href="17667">誸</a></li>
                                   <li><a href="17668">誺</a></li>
                                   <li><a href="17669">誽</a></li>
                                   <li><a href="17670">諀</a></li>
                                   <li><a href="17671">諁</a></li>
                                   <li><a href="17672">諅</a></li>
                                   <li><a href="17673">諎</a></li>
                                   <li><a href="17674">諘</a></li>
                                   <li><a href="17675">諙</a></li>
                                   <li><a href="17734">豍</a></li>
                                   <li><a href="17750">貏</a></li>
                                   <li><a href="17766">賟</a></li>
                                   <li><a href="17767">賩</a></li>
                                   <li><a href="17802">趛</a></li>
                                   <li><a href="17803">趜</a></li>
                                   <li><a href="17804">趝</a></li>
                                   <li><a href="17805">趢</a></li>
                                   <li><a href="17806">趤</a></li>
                                   <li><a href="17830">踓</a></li>
                                   <li><a href="17831">踕</a></li>
                                   <li><a href="17832">踗</a></li>
                                   <li><a href="17833">踚</a></li>
                                   <li><a href="17834">踛</a></li>
                                   <li><a href="17835">踜</a></li>
                                   <li><a href="17836">踤</a></li>
                                   <li><a href="17837">踨</a></li>
                                   <li><a href="17838">踩</a></li>
                                   <li><a href="17869">躷</a></li>
                                   <li><a href="17870">躸</a></li>
                                   <li><a href="17871">躹</a></li>
                                   <li><a href="17900">輤</a></li>
                                   <li><a href="17926">遪</a></li>
                                   <li><a href="17927">遫</a></li>
                                   <li><a href="17928">遱</a></li>
                                   <li><a href="17965">鄦</a></li>
                                   <li><a href="17967">鄪</a></li>
                                   <li><a href="17968">鄫</a></li>
                                   <li><a href="17982">醀</a></li>
                                   <li><a href="17983">醄</a></li>
                                   <li><a href="17984">醈</a></li>
                                   <li><a href="17985">醌</a></li>
                                   <li><a href="18041">銴</a></li>
                                   <li><a href="18042">銵</a></li>
                                   <li><a href="18043">銾</a></li>
                                   <li><a href="18044">鋄</a></li>
                                   <li><a href="18045">鋉</a></li>
                                   <li><a href="18046">鋊</a></li>
                                   <li><a href="18047">鋑</a></li>
                                   <li><a href="18048">鋔</a></li>
                                   <li><a href="18049">鋖</a></li>
                                   <li><a href="18050">鋚</a></li>
                                   <li><a href="18051">鋛</a></li>
                                   <li><a href="18052">鋞</a></li>
                                   <li><a href="18053">鋫</a></li>
                                   <li><a href="18054">鋴</a></li>
                                   <li><a href="18161">镼</a></li>
                                   <li><a href="18171">閮</a></li>
                                   <li><a href="18172">閯</a></li>
                                   <li><a href="18203">隢</a></li>
                                   <li><a href="18204">隫</a></li>
                                   <li><a href="18212">雓</a></li>
                                   <li><a href="18254">鞊</a></li>
                                   <li><a href="18255">鞎</a></li>
                                   <li><a href="18277">頛</a></li>
                                   <li><a href="18278">頝</a></li>
                                   <li><a href="18279">頢</a></li>
                                   <li><a href="18280">頧</a></li>
                                   <li><a href="18281">頨</a></li>
                                   <li><a href="18301">颲</a></li>
                                   <li><a href="18312">飺</a></li>
                                   <li><a href="18315">餄</a></li>
                                   <li><a href="18316">餆</a></li>
                                   <li><a href="18317">餋</a></li>
                                   <li><a href="18338">駊</a></li>
                                   <li><a href="18339">駋</a></li>
                                   <li><a href="18340">駌</a></li>
                                   <li><a href="18341">駍</a></li>
                                   <li><a href="18342">駎</a></li>
                                   <li><a href="18343">駖</a></li>
                                   <li><a href="18344">駗</a></li>
                                   <li><a href="18398">髰</a></li>
                                   <li><a href="18411">魆</a></li>
                                   <li><a href="18419">魤</a></li>
                                   <li><a href="18420">魩</a></li>
                                   <li><a href="18421">魰</a></li>
                                   <li><a href="18422">魱</a></li>
                                   <li><a href="18467">鳺</a></li>
                                   <li><a href="18468">鳻</a></li>
                                   <li><a href="18469">鳼</a></li>
                                   <li><a href="18470">鴀</a></li>
                                   <li><a href="18471">鴁</a></li>
                                   <li><a href="18472">鴄</a></li>
                                   <li><a href="18473">鴅</a></li>
                                   <li><a href="18475">鴌</a></li>
                                   <li><a href="18476">鴍</a></li>
                                   <li><a href="18479">鴔</a></li>
                                   <li><a href="18561">鹶</a></li>
                                   <li><a href="18570">麫</a></li>
                                   <li><a href="18576">黓</a></li>
                                   <li><a href="18731">㒑</a></li>
                                   <li><a href="18732">㒓</a></li>
                                   <li><a href="18733">㒔</a></li>
                                   <li><a href="18734">㒕</a></li>
                                   <li><a href="18739">㒜</a></li>
                                   <li><a href="18764">㓄</a></li>
                                   <li><a href="18804">㔂</a></li>
                                   <li><a href="18809">㔊</a></li>
                                   <li><a href="18866">㕒</a></li>
                                   <li><a href="18870">㕙</a></li>
                                   <li><a href="18990">㗪</a></li>
                                   <li><a href="18995">㗱</a></li>
                                   <li><a href="18996">㗲</a></li>
                                   <li><a href="18997">㗳</a></li>
                                   <li><a href="18998">㗴</a></li>
                                   <li><a href="18999">㗵</a></li>
                                   <li><a href="19000">㗶</a></li>
                                   <li><a href="19002">㗽</a></li>
                                   <li><a href="19031">㘤</a></li>
                                   <li><a href="19078">㙧</a></li>
                                   <li><a href="19079">㙨</a></li>
                                   <li><a href="19080">㙩</a></li>
                                   <li><a href="19081">㙪</a></li>
                                   <li><a href="19082">㙫</a></li>
                                   <li><a href="19083">㙬</a></li>
                                   <li><a href="19084">㙯</a></li>
                                   <li><a href="19228">㜣</a></li>
                                   <li><a href="19229">㜤</a></li>
                                   <li><a href="19230">㜥</a></li>
                                   <li><a href="19231">㜦</a></li>
                                   <li><a href="19232">㜧</a></li>
                                   <li><a href="19291">㝫</a></li>
                                   <li><a href="19292">㝭</a></li>
                                   <li><a href="19293">㝮</a></li>
                                   <li><a href="19294">㝯</a></li>
                                   <li><a href="19301">㝻</a></li>
                                   <li><a href="19332">㞟</a></li>
                                   <li><a href="19416">㠅</a></li>
                                   <li><a href="19417">㠆</a></li>
                                   <li><a href="19418">㠇</a></li>
                                   <li><a href="19419">㠈</a></li>
                                   <li><a href="19420">㠉</a></li>
                                   <li><a href="19421">㠊</a></li>
                                   <li><a href="19422">㠋</a></li>
                                   <li><a href="19423">㠌</a></li>
                                   <li><a href="19424">㠍</a></li>
                                   <li><a href="19425">㠎</a></li>
                                   <li><a href="19427">㠐</a></li>
                                   <li><a href="19449">㠮</a></li>
                                   <li><a href="19493">㡠</a></li>
                                   <li><a href="19494">㡡</a></li>
                                   <li><a href="19541">㢖</a></li>
                                   <li><a href="19542">㢗</a></li>
                                   <li><a href="19575">㣄</a></li>
                                   <li><a href="19587">㣒</a></li>
                                   <li><a href="19709">㥿</a></li>
                                   <li><a href="19711">㦁</a></li>
                                   <li><a href="19712">㦂</a></li>
                                   <li><a href="19714">㦄</a></li>
                                   <li><a href="19717">㦉</a></li>
                                   <li><a href="19719">㦋</a></li>
                                   <li><a href="19721">㦎</a></li>
                                   <li><a href="19722">㦏</a></li>
                                   <li><a href="19723">㦐</a></li>
                                   <li><a href="19724">㦑</a></li>
                                   <li><a href="19725">㦒</a></li>
                                   <li><a href="19726">㦓</a></li>
                                   <li><a href="19727">㦕</a></li>
                                   <li><a href="19728">㦖</a></li>
                                   <li><a href="19753">㦻</a></li>
                                   <li><a href="19754">㦼</a></li>
                                   <li><a href="19847">㨻</a></li>
                                   <li><a href="19848">㨼</a></li>
                                   <li><a href="19849">㩄</a></li>
                                   <li><a href="19850">㩅</a></li>
                                   <li><a href="19851">㩆</a></li>
                                   <li><a href="19852">㩇</a></li>
                                   <li><a href="19853">㩈</a></li>
                                   <li><a href="19854">㩊</a></li>
                                   <li><a href="19856">㩍</a></li>
                                   <li><a href="19922">㪤</a></li>
                                   <li><a href="19923">㪥</a></li>
                                   <li><a href="19924">㪦</a></li>
                                   <li><a href="19940">㪹</a></li>
                                   <li><a href="19947">㫂</a></li>
                                   <li><a href="19954">㫎</a></li>
                                   <li><a href="19955">㫏</a></li>
                                   <li><a href="19999">㬓</a></li>
                                   <li><a href="20000">㬔</a></li>
                                   <li><a href="20022">㬼</a></li>
                                   <li><a href="20105">㮿</a></li>
                                   <li><a href="20106">㯀</a></li>
                                   <li><a href="20107">㯁</a></li>
                                   <li><a href="20108">㯂</a></li>
                                   <li><a href="20109">㯄</a></li>
                                   <li><a href="20110">㯅</a></li>
                                   <li><a href="20111">㯆</a></li>
                                   <li><a href="20112">㯇</a></li>
                                   <li><a href="20113">㯈</a></li>
                                   <li><a href="20114">㯉</a></li>
                                   <li><a href="20115">㯊</a></li>
                                   <li><a href="20116">㯋</a></li>
                                   <li><a href="20117">㯌</a></li>
                                   <li><a href="20118">㯎</a></li>
                                   <li><a href="20119">㯏</a></li>
                                   <li><a href="20129">㯜</a></li>
                                   <li><a href="20132">㯠</a></li>
                                   <li><a href="20135">㯣</a></li>
                                   <li><a href="20207">㱂</a></li>
                                   <li><a href="20245">㱴</a></li>
                                   <li><a href="20299">㲶</a></li>
                                   <li><a href="20407">㵊</a></li>
                                   <li><a href="20408">㵋</a></li>
                                   <li><a href="20409">㵌</a></li>
                                   <li><a href="20410">㵍</a></li>
                                   <li><a href="20412">㵐</a></li>
                                   <li><a href="20413">㵑</a></li>
                                   <li><a href="20414">㵒</a></li>
                                   <li><a href="20415">㵓</a></li>
                                   <li><a href="20416">㵔</a></li>
                                   <li><a href="20417">㵕</a></li>
                                   <li><a href="20418">㵖</a></li>
                                   <li><a href="20432">㵩</a></li>
                                   <li><a href="20437">㵮</a></li>
                                   <li><a href="20518">㷠</a></li>
                                   <li><a href="20525">㷫</a></li>
                                   <li><a href="20527">㷮</a></li>
                                   <li><a href="20528">㷯</a></li>
                                   <li><a href="20529">㷰</a></li>
                                   <li><a href="20536">㷹</a></li>
                                   <li><a href="20608">㹌</a></li>
                                   <li><a href="20609">㹍</a></li>
                                   <li><a href="20610">㹎</a></li>
                                   <li><a href="20611">㹏</a></li>
                                   <li><a href="20612">㹐</a></li>
                                   <li><a href="20662">㺇</a></li>
                                   <li><a href="20674">㺔</a></li>
                                   <li><a href="20675">㺕</a></li>
                                   <li><a href="20676">㺖</a></li>
                                   <li><a href="20677">㺗</a></li>
                                   <li><a href="20678">㺘</a></li>
                                   <li><a href="20730">㻧</a></li>
                                   <li><a href="20732">㻬</a></li>
                                   <li><a href="20733">㻭</a></li>
                                   <li><a href="20734">㻮</a></li>
                                   <li><a href="20735">㻯</a></li>
                                   <li><a href="20736">㻰</a></li>
                                   <li><a href="20737">㻱</a></li>
                                   <li><a href="20738">㻲</a></li>
                                   <li><a href="20756">㼐</a></li>
                                   <li><a href="20757">㼑</a></li>
                                   <li><a href="20758">㼒</a></li>
                                   <li><a href="20760">㼔</a></li>
                                   <li><a href="20792">㼸</a></li>
                                   <li><a href="20794">㼺</a></li>
                                   <li><a href="20812">㽐</a></li>
                                   <li><a href="20827">㽦</a></li>
                                   <li><a href="20829">㽨</a></li>
                                   <li><a href="20892">㾶</a></li>
                                   <li><a href="20893">㾷</a></li>
                                   <li><a href="20894">㾸</a></li>
                                   <li><a href="20895">㾹</a></li>
                                   <li><a href="20896">㾺</a></li>
                                   <li><a href="20897">㾻</a></li>
                                   <li><a href="20898">㾼</a></li>
                                   <li><a href="20899">㾽</a></li>
                                   <li><a href="20900">㾾</a></li>
                                   <li><a href="20901">㾿</a></li>
                                   <li><a href="20941">㿶</a></li>
                                   <li><a href="20942">㿷</a></li>
                                   <li><a href="20957">䀈</a></li>
                                   <li><a href="21019">䁗</a></li>
                                   <li><a href="21020">䁙</a></li>
                                   <li><a href="21021">䁚</a></li>
                                   <li><a href="21022">䁛</a></li>
                                   <li><a href="21023">䁜</a></li>
                                   <li><a href="21024">䁝</a></li>
                                   <li><a href="21025">䁞</a></li>
                                   <li><a href="21026">䁟</a></li>
                                   <li><a href="21027">䁠</a></li>
                                   <li><a href="21030">䁥</a></li>
                                   <li><a href="21042">䁳</a></li>
                                   <li><a href="21117">䃑</a></li>
                                   <li><a href="21118">䃒</a></li>
                                   <li><a href="21119">䃓</a></li>
                                   <li><a href="21120">䃔</a></li>
                                   <li><a href="21121">䃖</a></li>
                                   <li><a href="21122">䃗</a></li>
                                   <li><a href="21166">䄘</a></li>
                                   <li><a href="21167">䄙</a></li>
                                   <li><a href="21234">䅬</a></li>
                                   <li><a href="21235">䅭</a></li>
                                   <li><a href="21236">䅮</a></li>
                                   <li><a href="21237">䅯</a></li>
                                   <li><a href="21238">䅰</a></li>
                                   <li><a href="21239">䅱</a></li>
                                   <li><a href="21240">䅲</a></li>
                                   <li><a href="21241">䅳</a></li>
                                   <li><a href="21242">䅴</a></li>
                                   <li><a href="21243">䅵</a></li>
                                   <li><a href="21244">䅶</a></li>
                                   <li><a href="21245">䅷</a></li>
                                   <li><a href="21246">䅸</a></li>
                                   <li><a href="21251">䅿</a></li>
                                   <li><a href="21289">䆬</a></li>
                                   <li><a href="21290">䆭</a></li>
                                   <li><a href="21376">䈏</a></li>
                                   <li><a href="21377">䈐</a></li>
                                   <li><a href="21378">䈑</a></li>
                                   <li><a href="21379">䈒</a></li>
                                   <li><a href="21380">䈓</a></li>
                                   <li><a href="21381">䈕</a></li>
                                   <li><a href="21382">䈖</a></li>
                                   <li><a href="21383">䈗</a></li>
                                   <li><a href="21384">䈘</a></li>
                                   <li><a href="21385">䈙</a></li>
                                   <li><a href="21386">䈛</a></li>
                                   <li><a href="21387">䈜</a></li>
                                   <li><a href="21388">䈝</a></li>
                                   <li><a href="21389">䈞</a></li>
                                   <li><a href="21390">䈟</a></li>
                                   <li><a href="21391">䈠</a></li>
                                   <li><a href="21392">䈡</a></li>
                                   <li><a href="21393">䈢</a></li>
                                   <li><a href="21394">䈣</a></li>
                                   <li><a href="21395">䈤</a></li>
                                   <li><a href="21396">䈥</a></li>
                                   <li><a href="21397">䈦</a></li>
                                   <li><a href="21495">䊓</a></li>
                                   <li><a href="21497">䊕</a></li>
                                   <li><a href="21498">䊖</a></li>
                                   <li><a href="21499">䊗</a></li>
                                   <li><a href="21500">䊘</a></li>
                                   <li><a href="21501">䊙</a></li>
                                   <li><a href="21581">䋳</a></li>
                                   <li><a href="21582">䋴</a></li>
                                   <li><a href="21583">䋵</a></li>
                                   <li><a href="21584">䋶</a></li>
                                   <li><a href="21585">䋷</a></li>
                                   <li><a href="21586">䋸</a></li>
                                   <li><a href="21587">䋹</a></li>
                                   <li><a href="21588">䋺</a></li>
                                   <li><a href="21589">䋻</a></li>
                                   <li><a href="21590">䋼</a></li>
                                   <li><a href="21591">䋽</a></li>
                                   <li><a href="21592">䋾</a></li>
                                   <li><a href="21593">䋿</a></li>
                                   <li><a href="21594">䌀</a></li>
                                   <li><a href="21595">䌁</a></li>
                                   <li><a href="21596">䌃</a></li>
                                   <li><a href="21597">䌄</a></li>
                                   <li><a href="21733">䎫</a></li>
                                   <li><a href="21749">䎿</a></li>
                                   <li><a href="21750">䏀</a></li>
                                   <li><a href="21834">䐫</a></li>
                                   <li><a href="21835">䐬</a></li>
                                   <li><a href="21836">䐭</a></li>
                                   <li><a href="21837">䐮</a></li>
                                   <li><a href="21838">䐯</a></li>
                                   <li><a href="21839">䐰</a></li>
                                   <li><a href="21840">䐱</a></li>
                                   <li><a href="21841">䐳</a></li>
                                   <li><a href="21850">䐽</a></li>
                                   <li><a href="21870">䑗</a></li>
                                   <li><a href="21873">䑜</a></li>
                                   <li><a href="21874">䑝</a></li>
                                   <li><a href="21892">䑹</a></li>
                                   <li><a href="21893">䑺</a></li>
                                   <li><a href="21894">䑻</a></li>
                                   <li><a href="22011">䔝</a></li>
                                   <li><a href="22021">䔭</a></li>
                                   <li><a href="22022">䔮</a></li>
                                   <li><a href="22023">䔯</a></li>
                                   <li><a href="22024">䔰</a></li>
                                   <li><a href="22025">䔱</a></li>
                                   <li><a href="22026">䔲</a></li>
                                   <li><a href="22027">䔳</a></li>
                                   <li><a href="22028">䔴</a></li>
                                   <li><a href="22029">䔶</a></li>
                                   <li><a href="22030">䔷</a></li>
                                   <li><a href="22031">䔸</a></li>
                                   <li><a href="22032">䔹</a></li>
                                   <li><a href="22033">䔺</a></li>
                                   <li><a href="22034">䔽</a></li>
                                   <li><a href="22035">䔾</a></li>
                                   <li><a href="22036">䔿</a></li>
                                   <li><a href="22037">䕁</a></li>
                                   <li><a href="22102">䖗</a></li>
                                   <li><a href="22142">䗋</a></li>
                                   <li><a href="22143">䗌</a></li>
                                   <li><a href="22144">䗍</a></li>
                                   <li><a href="22145">䗏</a></li>
                                   <li><a href="22146">䗑</a></li>
                                   <li><a href="22147">䗒</a></li>
                                   <li><a href="22148">䗓</a></li>
                                   <li><a href="22149">䗔</a></li>
                                   <li><a href="22238">䙎</a></li>
                                   <li><a href="22239">䙏</a></li>
                                   <li><a href="22240">䙐</a></li>
                                   <li><a href="22241">䙑</a></li>
                                   <li><a href="22242">䙒</a></li>
                                   <li><a href="22250">䙛</a></li>
                                   <li><a href="22280">䚄</a></li>
                                   <li><a href="22281">䚅</a></li>
                                   <li><a href="22282">䚆</a></li>
                                   <li><a href="22302">䚜</a></li>
                                   <li><a href="22303">䚝</a></li>
                                   <li><a href="22304">䚞</a></li>
                                   <li><a href="22305">䚟</a></li>
                                   <li><a href="22306">䚠</a></li>
                                   <li><a href="22368">䛩</a></li>
                                   <li><a href="22369">䛪</a></li>
                                   <li><a href="22370">䛫</a></li>
                                   <li><a href="22371">䛬</a></li>
                                   <li><a href="22372">䛭</a></li>
                                   <li><a href="22373">䛮</a></li>
                                   <li><a href="22374">䛯</a></li>
                                   <li><a href="22375">䛰</a></li>
                                   <li><a href="22376">䛱</a></li>
                                   <li><a href="22377">䛲</a></li>
                                   <li><a href="22378">䛳</a></li>
                                   <li><a href="22379">䛴</a></li>
                                   <li><a href="22380">䛵</a></li>
                                   <li><a href="22381">䛶</a></li>
                                   <li><a href="22382">䛷</a></li>
                                   <li><a href="22418">䜯</a></li>
                                   <li><a href="22428">䜺</a></li>
                                   <li><a href="22441">䝊</a></li>
                                   <li><a href="22442">䝌</a></li>
                                   <li><a href="22456">䝝</a></li>
                                   <li><a href="22457">䝞</a></li>
                                   <li><a href="22477">䝶</a></li>
                                   <li><a href="22478">䝷</a></li>
                                   <li><a href="22480">䝹</a></li>
                                   <li><a href="22481">䝺</a></li>
                                   <li><a href="22482">䝽</a></li>
                                   <li><a href="22483">䝾</a></li>
                                   <li><a href="22524">䞳</a></li>
                                   <li><a href="22525">䞴</a></li>
                                   <li><a href="22526">䞵</a></li>
                                   <li><a href="22527">䞶</a></li>
                                   <li><a href="22528">䞷</a></li>
                                   <li><a href="22589">䟼</a></li>
                                   <li><a href="22590">䟾</a></li>
                                   <li><a href="22591">䟿</a></li>
                                   <li><a href="22592">䠀</a></li>
                                   <li><a href="22593">䠁</a></li>
                                   <li><a href="22594">䠂</a></li>
                                   <li><a href="22595">䠃</a></li>
                                   <li><a href="22596">䠄</a></li>
                                   <li><a href="22597">䠅</a></li>
                                   <li><a href="22598">䠆</a></li>
                                   <li><a href="22599">䠇</a></li>
                                   <li><a href="22600">䠈</a></li>
                                   <li><a href="22601">䠉</a></li>
                                   <li><a href="22602">䠋</a></li>
                                   <li><a href="22642">䠻</a></li>
                                   <li><a href="22670">䡜</a></li>
                                   <li><a href="22671">䡝</a></li>
                                   <li><a href="22672">䡞</a></li>
                                   <li><a href="22673">䡟</a></li>
                                   <li><a href="22700">䢃</a></li>
                                   <li><a href="22703">䢇</a></li>
                                   <li><a href="22725">䢧</a></li>
                                   <li><a href="22726">䢨</a></li>
                                   <li><a href="22727">䢩</a></li>
                                   <li><a href="22769">䣝</a></li>
                                   <li><a href="22770">䣞</a></li>
                                   <li><a href="22797">䣼</a></li>
                                   <li><a href="22798">䣽</a></li>
                                   <li><a href="22799">䣾</a></li>
                                   <li><a href="22800">䣿</a></li>
                                   <li><a href="22839">䤫</a></li>
                                   <li><a href="22840">䤬</a></li>
                                   <li><a href="22841">䤭</a></li>
                                   <li><a href="22842">䤮</a></li>
                                   <li><a href="22843">䤯</a></li>
                                   <li><a href="22844">䤰</a></li>
                                   <li><a href="22845">䤱</a></li>
                                   <li><a href="22846">䤲</a></li>
                                   <li><a href="22922">䦜</a></li>
                                   <li><a href="22923">䦝</a></li>
                                   <li><a href="22924">䦞</a></li>
                                   <li><a href="22925">䦟</a></li>
                                   <li><a href="22979">䧤</a></li>
                                   <li><a href="22980">䧥</a></li>
                                   <li><a href="22981">䧦</a></li>
                                   <li><a href="22997">䧼</a></li>
                                   <li><a href="22998">䧽</a></li>
                                   <li><a href="23021">䨗</a></li>
                                   <li><a href="23022">䨘</a></li>
                                   <li><a href="23054">䩀</a></li>
                                   <li><a href="23079">䩝</a></li>
                                   <li><a href="23080">䩟</a></li>
                                   <li><a href="23121">䪐</a></li>
                                   <li><a href="23122">䪑</a></li>
                                   <li><a href="23123">䪒</a></li>
                                   <li><a href="23124">䪓</a></li>
                                   <li><a href="23159">䫀</a></li>
                                   <li><a href="23160">䫁</a></li>
                                   <li><a href="23161">䫂</a></li>
                                   <li><a href="23218">䬄</a></li>
                                   <li><a href="23219">䬅</a></li>
                                   <li><a href="23257">䬵</a></li>
                                   <li><a href="23258">䬶</a></li>
                                   <li><a href="23259">䬷</a></li>
                                   <li><a href="23260">䬸</a></li>
                                   <li><a href="23261">䬺</a></li>
                                   <li><a href="23291">䭫</a></li>
                                   <li><a href="23310">䭿</a></li>
                                   <li><a href="23311">䮀</a></li>
                                   <li><a href="23312">䮁</a></li>
                                   <li><a href="23313">䮂</a></li>
                                   <li><a href="23314">䮃</a></li>
                                   <li><a href="23315">䮄</a></li>
                                   <li><a href="23375">䯋</a></li>
                                   <li><a href="23376">䯌</a></li>
                                   <li><a href="23377">䯍</a></li>
                                   <li><a href="23378">䯎</a></li>
                                   <li><a href="23411">䯵</a></li>
                                   <li><a href="23444">䰡</a></li>
                                   <li><a href="23460">䰸</a></li>
                                   <li><a href="23461">䰹</a></li>
                                   <li><a href="23462">䰺</a></li>
                                   <li><a href="23463">䰼</a></li>
                                   <li><a href="23528">䲬</a></li>
                                   <li><a href="23529">䲭</a></li>
                                   <li><a href="23530">䲮</a></li>
                                   <li><a href="23531">䲯</a></li>
                                   <li><a href="23532">䲱</a></li>
                                   <li><a href="23533">䲲</a></li>
                                   <li><a href="23534">䲳</a></li>
                                   <li><a href="23535">䲴</a></li>
                                   <li><a href="23536">䲵</a></li>
                                   <li><a href="23537">䲸</a></li>
                                   <li><a href="23603">䴚</a></li>
                                   <li><a href="23619">䴯</a></li>
                                   <li><a href="23620">䴰</a></li>
                                   <li><a href="23636">䵇</a></li>
                                   <li><a href="23658">䵠</a></li>
                                   <li><a href="23859">撵</a></li>
                                   <li><a href="23860">撷</a></li>
                                   <li><a href="23882">䝼</a></li>
                                   <li><a href="23910">嘰</a></li>
                                   <li><a href="23911">嘼</a></li>
                                   <li><a href="23912">嘾</a></li>
                                   <li><a href="23913">噄</a></li>
                                   <li><a href="23915">噇</a></li>
                                   <li><a href="23918">噶</a></li>
                                   <li><a href="23933">墀</a></li>
                                   <li><a href="23957">寙</a></li>
                                   <li><a href="23964">嶒</a></li>
                                   <li><a href="23974">幩</a></li>
                                   <li><a href="23991">徲</a></li>
                                   <li><a href="23993">撢</a></li>
                                   <li><a href="23996">暳</a></li>
                                   <li><a href="24001">槤</a></li>
                                   <li><a href="24029">澘</a></li>
                                   <li><a href="24052">熢</a></li>
                                   <li><a href="24053">熥</a></li>
                                   <li><a href="24054">熳</a></li>
                                   <li><a href="24071">獒</a></li>
                                   <li><a href="24072">獦</a></li>
                                   <li><a href="24090">禚</a></li>
                                   <li><a href="24091">禠</a></li>
                                   <li><a href="24098">緰</a></li>
                                   <li><a href="24099">縂</a></li>
                                   <li><a href="24123">蕬</a></li>
                                   <li><a href="24124">蕰</a></li>
                                   <li><a href="24133">蝹</a></li>
                                   <li><a href="24145">蹃</a></li>
                                   <li><a href="24176">鳽</a></li>
                                   <li><a href="24181">﨧</a></li>
                                   <li><a href="24213">㢢</a></li>
                                   <li><a href="24247">㵧</a></li>
                                   <li><a href="24253">㷭</a></li>
                                   <li><a href="24311">䔵</a></li>
                                   <li><a href="24312">䔻</a></li>
                                   <li><a href="24323">䗎</a></li>
                                   <li><a href="24340">䢦</a></li>
                                   <li><a href="24354">䬹</a></li>
                                   <li><a href="24380">澚</a></li>
                                   <li><a href="24381">澫</a></li>
                                   <li><a href="24394">㷱</a></li>
                                   <li><a href="24608">儊</a></li>
                                   <li><a href="24683">儏</a></li>
                                   <li><a href="24727">劏</a></li>
                                   <li><a href="24792">噝</a></li>
                                   <li><a href="25102">屦</a></li>
                                   <li><a href="25140">嶥</a></li>
                                   <li><a href="25204">巤</a></li>
                                   <li><a href="25212">幥</a></li>
                                   <li><a href="25230">徺</a></li>
                                   <li><a href="25343">撺</a></li>
                                   <li><a href="25419">䰾</a></li>
                                   <li><a href="25425">閳</a></li>
                                   <li><a href="25572">靥</a></li>
                                   <li><a href="25582">鞒</a></li>
                                   <li><a href="25596">澙</a></li>
                                   <li><a href="25597">澝</a></li>
                                   <li><a href="25635">餍</a></li>
                                   <li><a href="25636">餎</a></li>
                                   <li><a href="25642">餏</a></li>
                                   <li><a href="25657">熴</a></li>
                                   <li><a href="25658">熵</a></li>
                                   <li><a href="25769">犟</a></li>
                                   <li><a href="25783">獤</a></li>
                                   <li><a href="25821">瘪</a></li>
                                   <li><a href="25822">瘫</a></li>
                                   <li><a href="25839">瞒</a></li>
                                   <li><a href="25840">瞓</a></li>
                                   <li><a href="25897">磗</a></li>
                                   <li><a href="25898">磘</a></li>
                                   <li><a href="25899">磙</a></li>
                                   <li><a href="25925">禣</a></li>
                                   <li><a href="25956">篐</a></li>
                                   <li><a href="25957">篓</a></li>
                                   <li><a href="26033">緮</a></li>
                                   <li><a href="26034">緾</a></li>
                                   <li><a href="26035">縆</a></li>
                                   <li><a href="26036">縇</a></li>
                                   <li><a href="26162">齑</a></li>
                                   <li><a href="26190">龦</a></li>
                                   <li><a href="26275">羰</a></li>
                                   <li><a href="26283">耧</a></li>
                                   <li><a href="26291">聪</a></li>
                                   <li><a href="26292">聫</a></li>
                                   <li><a href="26334">艔</a></li>
                                   <li><a href="26509">蕱</a></li>
                                   <li><a href="26511">蕴</a></li>
                                   <li><a href="26513">蕵</a></li>
                                   <li><a href="26549">蝾</a></li>
                                   <li><a href="26567">裦</a></li>
                                   <li><a href="26623">㗸</a></li>
                                   <li><a href="26624">㗹</a></li>
                                   <li><a href="26625">㗺</a></li>
                                   <li><a href="26626">㘃</a></li>
                                   <li><a href="26672">㙭</a></li>
                                   <li><a href="26674">㙮</a></li>
                                   <li><a href="26682">㚄</a></li>
                                   <li><a href="26851">踙</a></li>
                                   <li><a href="26854">踭</a></li>
                                   <li><a href="26855">踮</a></li>
                                   <li><a href="26865">躼</a></li>
                                   <li><a href="26886">㜟</a></li>
                                   <li><a href="26887">㜨</a></li>
                                   <li><a href="26891">㝆</a></li>
                                   <li><a href="26902">㞠</a></li>
                                   <li><a href="26943">㢘</a></li>
                                   <li><a href="26973">㣳</a></li>
                                   <li><a href="27087">㣴</a></li>
                                   <li><a href="27119">鋢</a></li>
                                   <li><a href="27121">鋵</a></li>
                                   <li><a href="27125">鋶</a></li>
                                   <li><a href="27169">㩏</a></li>
                                   <li><a href="27173">㩐</a></li>
                                   <li><a href="27175">㩑</a></li>
                                   <li><a href="27197">㬑</a></li>
                                   <li><a href="27198">㬕</a></li>
                                   <li><a href="27199">㬖</a></li>
                                   <li><a href="27204">㬽</a></li>
                                   <li><a href="27205">㬾</a></li>
                                   <li><a href="27236">㮾</a></li>
                                   <li><a href="27237">㯑</a></li>
                                   <li><a href="27238">㯒</a></li>
                                   <li><a href="27318">㵙</a></li>
                                   <li><a href="27319">㵚</a></li>
                                   <li><a href="27320">㵛</a></li>
                                   <li><a href="27321">㵜</a></li>
                                   <li><a href="27350">㷩</a></li>
                                   <li><a href="27352">㷲</a></li>
                                   <li><a href="27394">㻴</a></li>
                                   <li><a href="27404">䴢</a></li>
                                   <li><a href="27407">䲶</a></li>
                                   <li><a href="27423">䯶</a></li>
                                   <li><a href="27429">䮅</a></li>
                                   <li><a href="27438">䪟</a></li>
                                   <li><a href="27442">䨙</a></li>
                                   <li><a href="27445">䧩</a></li>
                                   <li><a href="27479">䤀</a></li>
                                   <li><a href="27481">䣠</a></li>
                                   <li><a href="27498">䠌</a></li>
                                   <li><a href="27501">䞸</a></li>
                                   <li><a href="27520">䛸</a></li>
                                   <li><a href="27529">䙓</a></li>
                                   <li><a href="27543">䗖</a></li>
                                   <li><a href="27596">䌋</a></li>
                                   <li><a href="27606">䈨</a></li>
                                   <li><a href="27638">䁡</a></li>
                                   <li><a href="27649">㿁</a></li>
                                   <li><a href="27656">㽓</a></li>
                                   <li><a href="27674">樭</a></li>
                                   <li><a href="27782">𠠇</a></li>
                                   <li><a href="27808">𡡕</a></li>
                                   <li><a href="27864">𣘹</a></li>
                                   <li><a href="27865">𣙇</a></li>
                                   <li><a href="27866">𣘸</a></li>
                                   <li><a href="27867">𣘺</a></li>
                                   <li><a href="27889">𣽾</a></li>
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