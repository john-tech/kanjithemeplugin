<?php
/*
 * Template Name: kakusu13
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
               <h1 class="ttl_main">１３画の漢字一覧（漢検級順）</h1>

               <p>総画数１３画の漢字の一覧です。<br>
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
                                   <option value="#" selected>１３画</option>
                                   <option value="kakusu14">１４画</option>
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
                              <li><a href="bkakusu13">部首別順</a></li>
                              <li><a href="ckakusu13">読み順</a></li>
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
                         <div class="parts_box" id="parts3">
                              <h3 class="ttl_while"><a href="kyu3">漢字検定３級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1598">廉</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts09">
                              <h3 class="ttl_while"><a href="kyu09">漢字検定９級（小学校２年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/084">遠</a></li>
                                   <li><a class="color1" href="kanji/085">園</a></li>
                                   <li><a class="color1" href="kanji/098">楽</a></li>
                                   <li><a class="color1" href="kanji/163">新</a></li>
                                   <li><a class="color1" href="kanji/168">数</a></li>
                                   <li><a class="color1" href="kanji/197">電</a></li>
                                   <li><a class="color1" href="kanji/239">話</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts08">
                              <h3 class="ttl_while"><a href="kyu08">漢字検定８級（小学校３年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/242">暗</a></li>
                                   <li><a class="color1" href="kanji/243">意</a></li>
                                   <li><a class="color1" href="kanji/262">感</a></li>
                                   <li><a class="color1" href="kanji/264">漢</a></li>
                                   <li><a class="color1" href="kanji/275">業</a></li>
                                   <li><a class="color1" href="kanji/304">詩</a></li>
                                   <li><a class="color1" href="kanji/347">想</a></li>
                                   <li><a class="color1" href="kanji/373">鉄</a></li>
                                   <li><a class="color1" href="kanji/385">農</a></li>
                                   <li><a class="color1" href="kanji/407">福</a></li>
                                   <li><a class="color1" href="kanji/438">路</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts07">
                              <h3 class="ttl_while"><a href="kyu07">漢字検定７級（小学校４年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/440">愛</a></li>
                                   <li><a class="color1" href="kanji/450">塩</a></li>
                                   <li><a class="color1" href="521">試</a></li>
                                   <li><a class="color1" href="526">辞</a></li>
                                   <li><a class="color1" href="540">照</a></li>
                                   <li><a class="color1" href="549">節</a></li>
                                   <li><a class="color1" href="552">戦</a></li>
                                   <li><a class="color1" href="560">続</a></li>
                                   <li><a class="color1" href="567">置</a></li>
                                   <li><a class="color1" href="581">働</a></li>
                                   <li><a class="color1" href="683">群</a></li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts06">
                              <h3 class="ttl_while"><a href="kyu06">漢字検定６級（小学校５年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="660">解</a></li>
                                   <li><a class="color1" href="666">幹</a></li>
                                   <li><a class="color1" href="673">義</a></li>
                                   <li><a class="color1" href="681">禁</a></li>
                                   <li><a class="color1" href="699">鉱</a></li>
                                   <li><a class="color1" href="711">罪</a></li>
                                   <li><a class="color1" href="717">資</a></li>
                                   <li><a class="color1" href="720">飼</a></li>
                                   <li><a class="color1" href="732">準</a></li>
                                   <li><a class="color1" href="748">勢</a></li>
                                   <li><a class="color1" href="766">損</a></li>
                                   <li><a class="color1" href="807">墓</a></li>
                                   <li><a class="color1" href="808">豊</a></li>
                                   <li><a class="color1" href="812">夢</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts05">
                              <h3 class="ttl_while"><a href="kyu05">漢字検定５級（小学校６年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="571">腸</a></li>
                                   <li><a class="color1" href="818">預</a></li>
                                   <li><a class="color1" href="859">絹</a></li>
                                   <li><a class="color1" href="863">源</a></li>
                                   <li><a class="color1" href="905">署</a></li>
                                   <li><a class="color1" href="909">傷</a></li>
                                   <li><a class="color1" href="913">蒸</a></li>
                                   <li><a class="color1" href="919">誠</a></li>
                                   <li><a class="color1" href="920">聖</a></li>
                                   <li><a class="color1" href="942">暖</a></li>
                                   <li><a class="color1" href="951">賃</a></li>
                                   <li><a class="color1" href="973">腹</a></li>
                                   <li><a class="color1" href="986">幕</a></li>
                                   <li><a class="color1" href="988">盟</a></li>
                                   <li><a class="color1" href="999">裏</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts04">
                              <h3 class="ttl_while"><a href="kyu04">漢字検定４級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1009">違</a>
                                   </li>
                                   <li><a class="color1" href="1021">煙</a>
                                   </li>
                                   <li><a class="color1" href="1022">鉛</a>
                                   </li>
                                   <li><a class="color1" href="1029">暇</a>
                                   </li>
                                   <li><a class="color1" href="1030">雅</a>
                                   </li>
                                   <li><a class="color1" href="1035">較</a>
                                   </li>
                                   <li><a class="color1" href="1042">勧</a>
                                   </li>
                                   <li><a class="color1" href="1054">詰</a>
                                   </li>
                                   <li><a class="color1" href="1077">傾</a>
                                   </li>
                                   <li><a class="color1" href="1083">遣</a>
                                   </li>
                                   <li><a class="color1" href="1089">誇</a>
                                   </li>
                                   <li><a class="color1" href="1090">鼓</a>
                                   </li>
                                   <li><a class="color1" href="1092">継</a>
                                   </li>
                                   <li><a class="color1" href="1106">歳</a>
                                   </li>
                                   <li><a class="color1" href="1108">載</a>
                                   </li>
                                   <li><a class="color1" href="1140">詳</a>
                                   </li>
                                   <li><a class="color1" href="1145">飾</a>
                                   </li>
                                   <li><a class="color1" href="1147">触</a>
                                   </li>
                                   <li><a class="color1" href="1150">慎</a>
                                   </li>
                                   <li><a class="color1" href="1152">寝</a>
                                   </li>
                                   <li><a class="color1" href="1163">跡</a>
                                   </li>
                                   <li><a class="color1" href="1170">僧</a>
                                   </li>
                                   <li><a class="color1" href="1182">嘆</a>
                                   </li>
                                   <li><a class="color1" href="1188">蓄</a>
                                   </li>
                                   <li><a class="color1" href="1190">跳</a>
                                   </li>
                                   <li><a class="color1" href="1200">殿</a>
                                   </li>
                                   <li><a class="color1" href="1237">搬</a>
                                   </li>
                                   <li><a class="color1" href="1246">微</a>
                                   </li>
                                   <li><a class="color1" href="1292">誉</a>
                                   </li>
                                   <li><a class="color1" href="1293">腰</a>
                                   </li>
                                   <li><a class="color1" href="1294">溶</a>
                                   </li>
                                   <li><a class="color1" href="1298">雷</a>
                                   </li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts03">
                              <h3 class="ttl_while"><a href="kyu03">漢字検定３級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1335">嫁</a>
                                   </li>
                                   <li><a class="color1" href="1339">塊</a>
                                   </li>
                                   <li><a class="color1" href="1341">慨</a>
                                   </li>
                                   <li><a class="color1" href="1342">該</a>
                                   </li>
                                   <li><a class="color1" href="1344">隔</a>
                                   </li>
                                   <li><a class="color1" href="1348">滑</a>
                                   </li>
                                   <li><a class="color1" href="1359">棄</a>
                                   </li>
                                   <li><a class="color1" href="1377">愚</a>
                                   </li>
                                   <li><a class="color1" href="1382">携</a>
                                   </li>
                                   <li><a class="color1" href="1415">催</a>
                                   </li>
                                   <li><a class="color1" href="1416">債</a>
                                   </li>
                                   <li><a class="color1" href="1419">搾</a>
                                   </li>
                                   <li><a class="color1" href="1427">慈</a>
                                   </li>
                                   <li><a class="color1" href="1471">摂</a>
                                   </li>
                                   <li><a class="color1" href="1485">賊</a>
                                   </li>
                                   <li><a class="color1" href="1489">滞</a>
                                   </li>
                                   <li><a class="color1" href="1491">滝</a>
                                   </li>
                                   <li><a class="color1" href="1500">稚</a>
                                   </li>
                                   <li><a class="color1" href="1517">塗</a>
                                   </li>
                                   <li><a class="color1" href="1559">飽</a>
                                   </li>
                                   <li><a class="color1" href="1575">滅</a>
                                   </li>
                                   <li><a class="color1" href="1584">裸</a>
                                   </li>
                                   <li><a class="color1" href="1593">零</a>
                                   </li>
                                   <li><a class="color1" href="1603">楼</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02j">
                              <h3 class="ttl_while"><a href="kyu02j">漢字検定準２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1612">猿</a>
                                   </li>
                                   <li><a class="color1" href="1615">虞</a>
                                   </li>
                                   <li><a class="color1" href="1618">禍</a>
                                   </li>
                                   <li><a class="color1" href="1620">靴</a>
                                   </li>
                                   <li><a class="color1" href="1633">褐</a>
                                   </li>
                                   <li><a class="color1" href="1646">寛</a>
                                   </li>
                                   <li><a class="color1" href="1648">頑</a>
                                   </li>
                                   <li><a class="color1" href="1673">傑</a>
                                   </li>
                                   <li><a class="color1" href="1674">嫌</a>
                                   </li>
                                   <li><a class="color1" href="1676">献</a>
                                   </li>
                                   <li><a class="color1" href="1682">碁</a>
                                   </li>
                                   <li><a class="color1" href="1690">溝</a>
                                   </li>
                                   <li><a class="color1" href="1709">嗣</a>
                                   </li>
                                   <li><a class="color1" href="1723">酬</a>
                                   </li>
                                   <li><a class="color1" href="1724">愁</a>
                                   </li>
                                   <li><a class="color1" href="1748">奨</a>
                                   </li>
                                   <li><a class="color1" href="1769">睡</a>
                                   </li>
                                   <li><a class="color1" href="1786">践</a>
                                   </li>
                                   <li><a class="color1" href="1789">禅</a>
                                   </li>
                                   <li><a class="color1" href="1793">塑</a>
                                   </li>
                                   <li><a class="color1" href="1811">痴</a>
                                   </li>
                                   <li><a class="color1" href="1828">艇</a>
                                   </li>
                                   <li><a class="color1" href="1845">督</a>
                                   </li>
                                   <li><a class="color1" href="1861">漠</a>
                                   </li>
                                   <li><a class="color1" href="1863">鉢</a>
                                   </li>
                                   <li><a class="color1" href="1865">煩</a>
                                   </li>
                                   <li><a class="color1" href="1866">頒</a>
                                   </li>
                                   <li><a class="color1" href="1921">酪</a>
                                   </li>
                                   <li><a class="color1" href="1927">虜</a>
                                   </li>
                                   <li><a class="color1" href="1934">鈴</a>
                                   </li>
                                   <li><a class="color1" href="1936">賄</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02">
                              <h3 class="ttl_while"><a href="kyu02">漢字検定２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1945">彙</a>
                                   </li>
                                   <li><a class="color1" href="1961">楷</a>
                                   </li>
                                   <li><a class="color1" href="1965">蓋</a>
                                   </li>
                                   <li><a class="color1" href="1976">毀</a>
                                   </li>
                                   <li><a class="color1" href="1979">嗅</a>
                                   </li>
                                   <li><a class="color1" href="1981">僅</a>
                                   </li>
                                   <li><a class="color1" href="1985">窟</a>
                                   </li>
                                   <li><a class="color1" href="1987">詣</a>
                                   </li>
                                   <li><a class="color1" href="1990">隙</a>
                                   </li>
                                   <li><a class="color1" href="2002">傲</a>
                                   </li>
                                   <li><a class="color1" href="2009">塞</a>
                                   </li>
                                   <li><a class="color1" href="2020">嫉</a>
                                   </li>
                                   <li><a class="color1" href="2021">腫</a>
                                   </li>
                                   <li><a class="color1" href="2030">腎</a>
                                   </li>
                                   <li><a class="color1" href="2032">裾</a>
                                   </li>
                                   <li><a class="color1" href="2037">煎</a>
                                   </li>
                                   <li><a class="color1" href="2038">羨</a>
                                   </li>
                                   <li><a class="color1" href="2039">腺</a>
                                   </li>
                                   <li><a class="color1" href="2040">詮</a>
                                   </li>
                                   <li><a class="color1" href="2067">溺</a>
                                   </li>
                                   <li><a href="2068">填</a></li>
                                   <li><a class="color1" href="2074">頓</a>
                                   </li>
                                   <li><a class="color1" href="2102">蜂</a>
                                   </li>
                                   <li><a class="color1" href="2105">睦</a>
                                   </li>
                                   <li><a class="color1" href="2124">慄</a>
                                   </li>
                                   <li><a class="color1" href="2129">賂</a>
                                   </li>
                                   <li><a class="color1" href="6469">塡</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01j">
                              <h3 class="ttl_while"><a href="kyu01j">漢字検定準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="2152">葦</a>
                                   </li>
                                   <li><a class="color2" href="2159">溢</a>
                                   </li>
                                   <li><a class="color2" href="2206">嘩</a>
                                   </li>
                                   <li><a href="2219">蛾</a></li>
                                   <li><a href="2235">碍</a></li>
                                   <li><a class="color2" href="2238">塙</a>
                                   </li>
                                   <li><a class="color2" href="2306">鳩</a>
                                   </li>
                                   <li><a class="color2" href="2332">禽</a>
                                   </li>
                                   <li><a href="2340">鉤</a></li>
                                   <li><a class="color2" href="2348">馴</a>
                                   </li>
                                   <li><a href="2355">罫</a></li>
                                   <li><a class="color2" href="2379">瑚</a>
                                   </li>
                                   <li><a class="color2" href="2383">跨</a>
                                   </li>
                                   <li><a href="2385">鈷</a></li>
                                   <li><a class="color2" href="2397">幌</a>
                                   </li>
                                   <li><a class="color2" href="2433">嵯</a>
                                   </li>
                                   <li><a href="2434">嵳</a></li>
                                   <li><a class="color2" href="2437">蓑</a>
                                   </li>
                                   <li><a class="color2" href="2438">裟</a>
                                   </li>
                                   <li><a href="2456">蒜</a></li>
                                   <li><a class="color2" href="2472">獅</a>
                                   </li>
                                   <li><a class="color2" href="2475">蒔</a>
                                   </li>
                                   <li><a class="color2" href="2482">馳</a>
                                   </li>
                                   <li><a class="color2" href="2508">嵩</a>
                                   </li>
                                   <li><a class="color2" href="2511">楢</a>
                                   </li>
                                   <li><a class="color2" href="2518">蒐</a>
                                   </li>
                                   <li><a class="color2" href="2530">舜</a>
                                   </li>
                                   <li><a class="color2" href="2531">遁</a>
                                   </li>
                                   <li><a class="color2" href="2536">楯</a>
                                   </li>
                                   <li><a href="2549">鼠</a></li>
                                   <li><a href="2571">蒋</a></li>
                                   <li><a href="2573">蛸</a></li>
                                   <li><a href="2576">鉦</a></li>
                                   <li><a class="color2" href="2586">牒</a>
                                   </li>
                                   <li><a class="color2" href="2606">稔</a>
                                   </li>
                                   <li><a class="color2" href="2620">瑞</a>
                                   </li>
                                   <li><a class="color2" href="2627">靖</a>
                                   </li>
                                   <li><a href="2645">賎</a></li>
                                   <li><a class="color2" href="2653">楚</a>
                                   </li>
                                   <li><a class="color2" href="2669">蒼</a>
                                   </li>
                                   <li><a class="color2" href="2682">詫</a>
                                   </li>
                                   <li><a class="color2" href="2685">楕</a>
                                   </li>
                                   <li><a class="color2" href="2692">碓</a>
                                   </li>
                                   <li><a href="2711">椴</a></li>
                                   <li><a class="color2" href="2746">椿</a>
                                   </li>
                                   <li><a href="2753">碇</a></li>
                                   <li><a class="color2" href="2754">禎</a>
                                   </li>
                                   <li><a class="color2" href="2758">鼎</a>
                                   </li>
                                   <li><a href="2764">畷</a></li>
                                   <li><a href="2783">塘</a></li>
                                   <li><a class="color2" href="2810">楠</a>
                                   </li>
                                   <li><a href="2821">稗</a></li>
                                   <li><a href="2822">楳</a></li>
                                   <li><a class="color2" href="2823">煤</a>
                                   </li>
                                   <li><a href="2830">摸</a></li>
                                   <li><a href="2860">逼</a></li>
                                   <li><a class="color2" href="2877">蒲</a>
                                   </li>
                                   <li><a class="color2" href="2884">楓</a>
                                   </li>
                                   <li><a class="color2" href="2923">蒙</a>
                                   </li>
                                   <li><a href="2940">爺</a></li>
                                   <li><a href="2943">愈</a></li>
                                   <li><a href="2948">猷</a></li>
                                   <li><a class="color2" href="2952">傭</a>
                                   </li>
                                   <li><a class="color2" href="2953">楊</a>
                                   </li>
                                   <li><a class="color2" href="2957">蓉</a>
                                   </li>
                                   <li><a class="color2" href="2976">溜</a>
                                   </li>
                                   <li><a class="color2" href="2984">稜</a>
                                   </li>
                                   <li><a class="color2" href="3006">煉</a>
                                   </li>
                                   <li><a class="color2" href="3010">蓮</a>
                                   </li>
                                   <li><a class="color2" href="3026">碗</a>
                                   </li>
                                   <li><a href="3031">溯</a></li>
                                   <li><a href="6477">搔</a></li>
                                   <li><a href="9831">蜎</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01">
                              <h3 class="ttl_while"><a href="kyu01">漢字検定１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="3037">堽</a></li>
                                   <li><a href="3051">韵</a></li>
                                   <li><a href="3064">亶</a></li>
                                   <li><a href="3127">傴</a></li>
                                   <li><a href="3128">僉</a></li>
                                   <li><a href="3130">僂</a></li>
                                   <li><a href="3183">剿</a></li>
                                   <li><a href="3184">剽</a></li>
                                   <li><a href="3192">勣</a></li>
                                   <li><a href="3193">勦</a></li>
                                   <li><a href="3194">飭</a></li>
                                   <li><a href="3195">勠</a></li>
                                   <li><a href="3205">匯</a></li>
                                   <li><a href="3286">嗚</a></li>
                                   <li><a href="3287">嗇</a></li>
                                   <li><a href="3288">嗟</a></li>
                                   <li><a href="3289">嗄</a></li>
                                   <li><a href="3290">嗜</a></li>
                                   <li><a href="3291">嗤</a></li>
                                   <li><a href="3292">嗔</a></li>
                                   <li><a href="3348">塋</a></li>
                                   <li><a href="3349">塒</a></li>
                                   <li><a href="3358">壼</a></li>
                                   <li><a href="3398">媼</a></li>
                                   <li><a href="3399">媾</a></li>
                                   <li><a href="3400">嫋</a></li>
                                   <li><a href="3402">媽</a></li>
                                   <li><a href="3434">寞</a></li>
                                   <li><a href="3437">尠</a></li>
                                   <li><a href="3469">嵬</a></li>
                                   <li><a href="3491">幃</a></li>
                                   <li><a href="3493">幎</a></li>
                                   <li><a href="3506">廈</a></li>
                                   <li><a href="3536">徭</a></li>
                                   <li><a href="3587">愆</a></li>
                                   <li><a href="3589">惷</a></li>
                                   <li><a href="3595">愍</a></li>
                                   <li><a href="3597">慍</a></li>
                                   <li><a href="3599">愾</a></li>
                                   <li><a href="3601">愧</a></li>
                                   <li><a href="3602">慊</a></li>
                                   <li><a href="3605">愴</a></li>
                                   <li><a href="3649">戡</a></li>
                                   <li><a href="3710">搆</a></li>
                                   <li><a href="3711">搦</a></li>
                                   <li><a href="3712">搶</a></li>
                                   <li><a href="3713">搓</a></li>
                                   <li><a href="3714">搗</a></li>
                                   <li><a href="3715">搏</a></li>
                                   <li><a href="3717">搨</a></li>
                                   <li><a href="3763">斟</a></li>
                                   <li><a href="3783">旒</a></li>
                                   <li><a href="3796">鳰</a></li>
                                   <li><a href="3797">鳧</a></li>
                                   <li><a href="3849">黽</a></li>
                                   <li><a href="3922">暈</a></li>
                                   <li><a class="color2" href="3923">暉</a>
                                   </li>
                                   <li><a href="3934">暘</a></li>
                                   <li><a href="3935">暄</a></li>
                                   <li><a href="3937">耡</a></li>
                                   <li><a href="3944">閘</a></li>
                                   <li><a href="3979">雹</a></li>
                                   <li><a href="4055">蜒</a></li>
                                   <li><a href="4056">蜉</a></li>
                                   <li><a href="4057">蜀</a></li>
                                   <li><a href="4058">蛻</a></li>
                                   <li><a href="4059">蜊</a></li>
                                   <li><a href="4060">蜍</a></li>
                                   <li><a href="4061">蜈</a></li>
                                   <li><a href="4063">蛹</a></li>
                                   <li><a href="4064">蜑</a></li>
                                   <li><a href="4065">蜆</a></li>
                                   <li><a href="4066">蜃</a></li>
                                   <li><a href="4137">椶</a></li>
                                   <li><a href="4143">楹</a></li>
                                   <li><a class="color2" href="4144">椰</a>
                                   </li>
                                   <li><a href="4145">楸</a></li>
                                   <li><a href="4146">楫</a></li>
                                   <li><a href="4147">楮</a></li>
                                   <li><a href="4148">椽</a></li>
                                   <li><a href="4149">楾</a></li>
                                   <li><a href="4150">榁</a></li>
                                   <li><a href="4151">楔</a></li>
                                   <li><a href="4152">楡</a></li>
                                   <li><a href="4153">楝</a></li>
                                   <li><a href="4154">椹</a></li>
                                   <li><a href="4155">楞</a></li>
                                   <li><a href="4236">腮</a></li>
                                   <li><a href="4237">腴</a></li>
                                   <li><a href="4238">腱</a></li>
                                   <li><a href="4239">腥</a></li>
                                   <li><a href="4246">腟</a></li>
                                   <li><a href="4262">跟</a></li>
                                   <li><a href="4263">跣</a></li>
                                   <li><a href="4264">跪</a></li>
                                   <li><a href="4265">跫</a></li>
                                   <li><a class="color2" href="4404">滉</a>
                                   </li>
                                   <li><a href="4405">溽</a></li>
                                   <li><a href="4406">滄</a></li>
                                   <li><a href="4407">溏</a></li>
                                   <li><a href="4408">溥</a></li>
                                   <li><a href="4409">溷</a></li>
                                   <li><a href="4410">滔</a></li>
                                   <li><a href="4411">滂</a></li>
                                   <li><a href="4412">溘</a></li>
                                   <li><a href="4413">溟</a></li>
                                   <li><a href="4414">溲</a></li>
                                   <li><a href="4463">軾</a></li>
                                   <li><a href="4464">輅</a></li>
                                   <li><a href="4465">輊</a></li>
                                   <li><a href="4473">輌</a></li>
                                   <li><a href="4530">筺</a></li>
                                   <li><a href="4531">筥</a></li>
                                   <li><a href="4532">筵</a></li>
                                   <li><a href="4533">筧</a></li>
                                   <li><a href="4534">筰</a></li>
                                   <li><a href="4535">筬</a></li>
                                   <li><a href="4536">筮</a></li>
                                   <li><a href="4537">筱</a></li>
                                   <li><a href="4538">筴</a></li>
                                   <li><a href="4557">麁</a></li>
                                   <li><a href="4565">歇</a></li>
                                   <li><a href="4566">歃</a></li>
                                   <li><a href="4573">肄</a></li>
                                   <li><a href="4574">肆</a></li>
                                   <li><a href="4575">雎</a></li>
                                   <li><a href="4576">雉</a></li>
                                   <li><a href="4577">雍</a></li>
                                   <li><a href="4578">雋</a></li>
                                   <li><a href="4624">瑟</a></li>
                                   <li><a href="4625">瑙</a></li>
                                   <li><a href="4626">瑁</a></li>
                                   <li><a href="4627">瑕</a></li>
                                   <li><a href="4628">瑜</a></li>
                                   <li><a class="color2" href="4629">瑶</a>
                                   </li>
                                   <li><a href="4640">髢</a></li>
                                   <li><a href="4660">碚</a></li>
                                   <li><a href="4661">硼</a></li>
                                   <li><a href="4662">碌</a></li>
                                   <li><a href="4688">鉗</a></li>
                                   <li><a href="4689">鉉</a></li>
                                   <li><a href="4690">鉞</a></li>
                                   <li><a href="4691">鉅</a></li>
                                   <li><a href="4692">鉋</a></li>
                                   <li><a href="4693">鉈</a></li>
                                   <li><a href="4694">鈿</a></li>
                                   <li><a href="4759">絳</a></li>
                                   <li><a href="4766">綏</a></li>
                                   <li><a href="4767">絽</a></li>
                                   <li><a href="4768">綉</a></li>
                                   <li><a href="4769">絛</a></li>
                                   <li><a href="4770">綛</a></li>
                                   <li><a href="4782">綟</a></li>
                                   <li><a href="4824">骭</a></li>
                                   <li><a href="4842">酩</a></li>
                                   <li><a href="4859">聘</a></li>
                                   <li><a href="4887">艀</a></li>
                                   <li><a href="4915">煥</a></li>
                                   <li><a href="4916">煢</a></li>
                                   <li><a class="color2" href="4917">煌</a>
                                   </li>
                                   <li><a href="4918">煬</a></li>
                                   <li><a href="4919">煖</a></li>
                                   <li><a href="4921">煦</a></li>
                                   <li><a href="4958">詭</a></li>
                                   <li><a class="color2" href="4959">詢</a>
                                   </li>
                                   <li><a href="4960">誄</a></li>
                                   <li><a href="4961">詬</a></li>
                                   <li><a href="4962">誅</a></li>
                                   <li><a href="4963">誂</a></li>
                                   <li><a href="4964">詼</a></li>
                                   <li><a href="4977">矮</a></li>
                                   <li><a href="5022">閙</a></li>
                                   <li><a href="5043">裔</a></li>
                                   <li><a href="5044">裘</a></li>
                                   <li><a href="5045">褂</a></li>
                                   <li><a href="5046">裼</a></li>
                                   <li><a href="5047">裲</a></li>
                                   <li><a href="5048">裨</a></li>
                                   <li><a href="5049">褄</a></li>
                                   <li><a href="5076">躱</a></li>
                                   <li><a href="5119">獏</a></li>
                                   <li><a href="5120">猾</a></li>
                                   <li><a href="5134">頏</a></li>
                                   <li><a class="color2" href="5135">頌</a>
                                   </li>
                                   <li><a href="5158">睫</a></li>
                                   <li><a href="5159">睨</a></li>
                                   <li><a href="5160">睛</a></li>
                                   <li><a href="5161">睚</a></li>
                                   <li><a href="5162">睥</a></li>
                                   <li><a href="5193">隗</a></li>
                                   <li><a href="5194">隕</a></li>
                                   <li><a href="5195">隘</a></li>
                                   <li><a href="5207">鄒</a></li>
                                   <li><a href="5229">痿</a></li>
                                   <li><a href="5230">痾</a></li>
                                   <li><a href="5231">痰</a></li>
                                   <li><a href="5232">痺</a></li>
                                   <li><a href="5233">痼</a></li>
                                   <li><a href="5234">痳</a></li>
                                   <li><a href="5235">痲</a></li>
                                   <li><a href="5236">瘁</a></li>
                                   <li><a href="5265">粱</a></li>
                                   <li><a href="5266">粳</a></li>
                                   <li><a href="5267">粲</a></li>
                                   <li><a href="5268">糀</a></li>
                                   <li><a href="5278">飩</a></li>
                                   <li><a href="5279">飫</a></li>
                                   <li><a href="5318">辟</a></li>
                                   <li><a href="5358">蒭</a></li>
                                   <li><a href="5390">蒿</a></li>
                                   <li><a href="5391">蓙</a></li>
                                   <li><a href="5392">蒟</a></li>
                                   <li><a href="5393">蓖</a></li>
                                   <li><a href="5394">蒡</a></li>
                                   <li><a href="5395">蓍</a></li>
                                   <li><a href="5396">蓆</a></li>
                                   <li><a href="5397">蒹</a></li>
                                   <li><a href="5398">蓁</a></li>
                                   <li><a href="5399">蓐</a></li>
                                   <li><a href="5400">蒻</a></li>
                                   <li><a href="5452">畸</a></li>
                                   <li><a href="5470">皙</a></li>
                                   <li><a href="5474">貊</a></li>
                                   <li><a href="5475">貉</a></li>
                                   <li><a href="5482">賈</a></li>
                                   <li><a href="5485">貲</a></li>
                                   <li><a href="5518">遐</a></li>
                                   <li><a href="5519">遒</a></li>
                                   <li><a href="5521">遖</a></li>
                                   <li><a href="5522">遏</a></li>
                                   <li><a href="5523">遑</a></li>
                                   <li><a href="5524">逾</a></li>
                                   <li><a href="5525">遉</a></li>
                                   <li><a class="color2" href="5557">稟</a>
                                   </li>
                                   <li><a href="5558">禀</a></li>
                                   <li><a href="5559">稠</a></li>
                                   <li><a href="5566">盞</a></li>
                                   <li><a href="5578">觚</a></li>
                                   <li><a href="5579">觜</a></li>
                                   <li><a href="5583">衙</a></li>
                                   <li><a href="5590">罧</a></li>
                                   <li><a href="5591">罨</a></li>
                                   <li><a href="5592">罩</a></li>
                                   <li><a href="5629">舅</a></li>
                                   <li><a href="5639">祺</a></li>
                                   <li><a href="5649">豢</a></li>
                                   <li><a href="5658">滓</a></li>
                                   <li><a href="6495">蜹</a></li>
                                   <li><a href="6499">輀</a></li>
                                   <li><a href="6512">瑇</a></li>
                                   <li><a href="6534">榆</a></li>
                                   <li><a href="6535">蜋</a></li>
                                   <li><a href="6885">魞</a></li>
                                   <li><a href="8066">觥</a></li>
                                   <li><a href="8821">筲</a></li>
                                   <li><a href="9839">蜓</a></li>
                                   <li><a href="10392">痹</a></li>
                                   <li><a href="11441">搤</a></li>
                                   <li><a href="11865">腠</a></li>
                                   <li><a href="12159">榀</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts0101j">
                              <h3 class="ttl_while"><a href="kyu0101j">漢字検定１級 / 準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="5715">碎</a>
                                   </li>
                                   <li><a href="5754">亂</a></li>
                                   <li><a href="5757">會</a></li>
                                   <li><a class="color2" href="5769">圓</a>
                                   </li>
                                   <li><a class="color2" href="5774">奧</a>
                                   </li>
                                   <li><a class="color2" href="5803">傳</a>
                                   </li>
                                   <li><a href="5865">當</a></li>
                                   <li><a href="5910">經</a></li>
                                   <li><a class="color2" href="6011">祿</a>
                                   </li>
                                   <li><a href="6039">飮</a></li>
                                   <li><a class="color2" href="6088">愼</a>
                                   </li>
                                   <li><a class="color2" href="6190">搖</a>
                                   </li>
                                   <li><a href="6238">溪</a></li>
                                   <li><a href="6283">肅</a></li>
                                   <li><a href="6286">腦</a></li>
                                   <li><a class="color2" href="6294">與</a>
                                   </li>
                                   <li><a href="6302">號</a></li>
                                   <li><a class="color2" href="6309">裝</a>
                                   </li>
                                   <li><a class="color2" href="6363">虜</a>
                                   </li>
                                   <li><a class="color2" href="6365">廊</a>
                                   </li>
                                   <li><a class="color2" href="6376">勤</a>
                                   </li>
                                   <li><a class="color2" href="6386">暑</a>
                                   </li>
                                   <li><a class="color2" href="6391">煮</a>
                                   </li>
                                   <li><a class="color2" href="6393">碑</a>
                                   </li>
                                   <li><a class="color2" href="6447">溫</a>
                                   </li>
                                   <li><a href="8664">鄕</a></li>
                                   <li><a href="10274">甁</a></li>
                                   <li><a href="26246">塚</a></li>
                                   <li><a href="26270">靖</a></li>
                                   <li><a href="26281">飯</a></li>
                                   <li><a href="27692">廉</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts">
                              <h3 class="ttl_while">漢字検定対象外</h3>
                              <ul class="search_parts">
                                   <li><a href="5691">琿</a></li>
                                   <li><a href="5694">鳫</a></li>
                                   <li><a href="5707">嫐</a></li>
                                   <li><a href="5823">貅</a></li>
                                   <li><a href="5868">楙</a></li>
                                   <li><a href="5869">楴</a></li>
                                   <li><a href="5870">楜</a></li>
                                   <li><a href="5877">愽</a></li>
                                   <li><a href="5899">稘</a></li>
                                   <li><a href="5900">稙</a></li>
                                   <li><a href="5922">彁</a></li>
                                   <li><a href="5946">鉐</a></li>
                                   <li><a href="5947">鉚</a></li>
                                   <li><a href="5958">蓊</a></li>
                                   <li><a href="5985">蓚</a></li>
                                   <li><a href="6068">碕</a></li>
                                   <li><a href="6078">塢</a></li>
                                   <li><a href="6079">塰</a></li>
                                   <li><a href="6086">嵶</a></li>
                                   <li><a href="6217">楪</a></li>
                                   <li><a href="6258">甞</a></li>
                                   <li><a href="6266">碆</a></li>
                                   <li><a href="6275">粮</a></li>
                                   <li><a href="6277">羣</a></li>
                                   <li><a href="6314">觧</a></li>
                                   <li><a href="6328">賍</a></li>
                                   <li><a href="6338">閠</a></li>
                                   <li><a href="6348">靹</a></li>
                                   <li><a href="6590">馯</a></li>
                                   <li><a href="6620">鼔</a></li>
                                   <li><a href="6692">椉</a></li>
                                   <li><a href="6706">馵</a></li>
                                   <li><a href="6707">馲</a></li>
                                   <li><a href="6708">馰</a></li>
                                   <li><a href="6712">馱</a></li>
                                   <li><a href="6782">骪</a></li>
                                   <li><a href="6783">骫</a></li>
                                   <li><a href="6784">骬</a></li>
                                   <li><a href="6785">骮</a></li>
                                   <li><a href="6814">䯨</a></li>
                                   <li><a href="6817">髡</a></li>
                                   <li><a href="6871">鬽</a></li>
                                   <li><a href="6886">魛</a></li>
                                   <li><a href="7242">麂</a></li>
                                   <li><a href="7243">麀</a></li>
                                   <li><a href="7284">靷</a></li>
                                   <li><a href="7285">靳</a></li>
                                   <li><a href="7286">靲</a></li>
                                   <li><a href="7287">靸</a></li>
                                   <li><a href="7288">靶</a></li>
                                   <li><a href="7342">韌</a></li>
                                   <li><a href="7365">韴</a></li>
                                   <li><a href="7372">頍</a></li>
                                   <li><a href="7373">頎</a></li>
                                   <li><a href="7374">頊</a></li>
                                   <li><a href="7375">䪴</a></li>
                                   <li><a href="7429">颫</a></li>
                                   <li><a href="7456">飱</a></li>
                                   <li><a href="7459">飪</a></li>
                                   <li><a href="7461">飰</a></li>
                                   <li><a href="7565">鈳</a></li>
                                   <li><a href="7566">鉯</a></li>
                                   <li><a href="7567">鉠</a></li>
                                   <li><a href="7568">鈺</a></li>
                                   <li><a href="7569">鉀</a></li>
                                   <li><a href="7570">鈼</a></li>
                                   <li><a href="7571">鉃</a></li>
                                   <li><a href="7572">鉂</a></li>
                                   <li><a href="7573">鉇</a></li>
                                   <li><a href="7574">鈰</a></li>
                                   <li><a href="7575">鈶</a></li>
                                   <li><a href="7576">鉰</a></li>
                                   <li><a href="7577">鉨</a></li>
                                   <li><a href="7578">鉩</a></li>
                                   <li><a href="7579">鉥</a></li>
                                   <li><a href="7581">鉏</a></li>
                                   <li><a href="7582">鉊</a></li>
                                   <li><a href="7583">鉮</a></li>
                                   <li><a href="7584">鉎</a></li>
                                   <li><a href="7586">鉙</a></li>
                                   <li><a href="7587">鉭</a></li>
                                   <li><a href="7588">鉒</a></li>
                                   <li><a href="7589">鈾</a></li>
                                   <li><a href="7590">鈮</a></li>
                                   <li><a href="7591">鉆</a></li>
                                   <li><a href="7592">鉖</a></li>
                                   <li><a href="7593">鈯</a></li>
                                   <li><a href="7594">鉕</a></li>
                                   <li><a href="7595">鉑</a></li>
                                   <li><a href="7598">鈸</a></li>
                                   <li><a href="7599">鉡</a></li>
                                   <li><a href="7600">鈹</a></li>
                                   <li><a href="7601">鉍</a></li>
                                   <li><a href="7602">鉜</a></li>
                                   <li><a href="7603">鉘</a></li>
                                   <li><a href="7604">鈵</a></li>
                                   <li><a href="7605">鉧</a></li>
                                   <li><a href="7606">鉬</a></li>
                                   <li><a href="7607">鉝</a></li>
                                   <li><a href="7616">衘</a></li>
                                   <li><a href="7872">閟</a></li>
                                   <li><a href="7873">閞</a></li>
                                   <li><a href="7874">閝</a></li>
                                   <li><a href="7957">隖</a></li>
                                   <li><a href="7958">隑</a></li>
                                   <li><a href="7959">隓</a></li>
                                   <li><a href="7978">䧺</a></li>
                                   <li><a href="7979">雊</a></li>
                                   <li><a href="7983">䧹</a></li>
                                   <li><a href="7997">雺</a></li>
                                   <li><a href="8029">靕</a></li>
                                   <li><a href="8044">覜</a></li>
                                   <li><a href="8045">覛</a></li>
                                   <li><a href="8064">觟</a></li>
                                   <li><a href="8065">觡</a></li>
                                   <li><a href="8091">詾</a></li>
                                   <li><a href="8121">誃</a></li>
                                   <li><a href="8122">詿</a></li>
                                   <li><a href="8123">詻</a></li>
                                   <li><a href="8124">誆</a></li>
                                   <li><a href="8125">詡</a></li>
                                   <li><a href="8127">詥</a></li>
                                   <li><a href="8128">詤</a></li>
                                   <li><a href="8130">詧</a></li>
                                   <li><a href="8131">訾</a></li>
                                   <li><a href="8132">訿</a></li>
                                   <li><a href="8133">誀</a></li>
                                   <li><a href="8134">詶</a></li>
                                   <li><a href="8135">詵</a></li>
                                   <li><a href="8136">詹</a></li>
                                   <li><a href="8137">詷</a></li>
                                   <li><a href="8138">詺</a></li>
                                   <li><a href="8152">竩</a></li>
                                   <li><a href="8179">䛕</a></li>
                                   <li><a href="8238">谼</a></li>
                                   <li><a href="8247">豋</a></li>
                                   <li><a href="8258">豦</a></li>
                                   <li><a href="8259">豣</a></li>
                                   <li><a href="8262">豤</a></li>
                                   <li><a href="8278">貈</a></li>
                                   <li><a href="8279">貆</a></li>
                                   <li><a href="8281">貇</a></li>
                                   <li><a href="8296">賅</a></li>
                                   <li><a href="8297">賉</a></li>
                                   <li><a href="8314">賆</a></li>
                                   <li><a href="8334">赩</a></li>
                                   <li><a href="8342">趐</a></li>
                                   <li><a href="8343">趑</a></li>
                                   <li><a href="8346">趍</a></li>
                                   <li><a href="8381">跬</a></li>
                                   <li><a href="8382">䞨</a></li>
                                   <li><a href="8383">趼</a></li>
                                   <li><a href="8384">跤</a></li>
                                   <li><a href="8385">跲</a></li>
                                   <li><a href="8386">跴</a></li>
                                   <li><a href="8387">跐</a></li>
                                   <li><a href="8388">跧</a></li>
                                   <li><a href="8389">跥</a></li>
                                   <li><a href="8390">跦</a></li>
                                   <li><a href="8407">跰</a></li>
                                   <li><a href="8466">躲</a></li>
                                   <li><a href="8488">軱</a></li>
                                   <li><a href="8497">軭</a></li>
                                   <li><a href="8498">輂</a></li>
                                   <li><a href="8499">輇</a></li>
                                   <li><a href="8500">輈</a></li>
                                   <li><a href="8513">軿</a></li>
                                   <li><a href="8589">艁</a></li>
                                   <li><a href="8599">遌</a></li>
                                   <li><a href="8600">遃</a></li>
                                   <li><a href="8601">遄</a></li>
                                   <li><a href="8603">逿</a></li>
                                   <li><a href="8645">郌</a></li>
                                   <li><a href="8683">鄖</a></li>
                                   <li><a href="8685">鄔</a></li>
                                   <li><a href="8686">鄗</a></li>
                                   <li><a href="8687">鄏</a></li>
                                   <li><a href="8688">鄋</a></li>
                                   <li><a href="8689">鄎</a></li>
                                   <li><a href="8690">鄐</a></li>
                                   <li><a href="8691">鄌</a></li>
                                   <li><a href="8692">鄍</a></li>
                                   <li><a href="8701">鄚</a></li>
                                   <li><a href="8738">酧</a></li>
                                   <li><a href="8740">酮</a></li>
                                   <li><a href="8741">酭</a></li>
                                   <li><a href="8788">㗛</a></li>
                                   <li><a href="8817">筠</a></li>
                                   <li><a href="8818">筷</a></li>
                                   <li><a href="8819">筦</a></li>
                                   <li><a href="8820">筪</a></li>
                                   <li><a href="8822">筯</a></li>
                                   <li><a href="8823">筳</a></li>
                                   <li><a href="8824">筩</a></li>
                                   <li><a href="8825">筢</a></li>
                                   <li><a href="8826">筤</a></li>
                                   <li><a href="8835">筭</a></li>
                                   <li><a href="8839">㮍</a></li>
                                   <li><a href="8875">䔍</a></li>
                                   <li><a href="8889">筿</a></li>
                                   <li><a href="8924">筹</a></li>
                                   <li><a href="8961">粰</a></li>
                                   <li><a href="9036">綂</a></li>
                                   <li><a href="9040">綖</a></li>
                                   <li><a href="9041">絿</a></li>
                                   <li><a href="9043">綗</a></li>
                                   <li><a href="9044">綌</a></li>
                                   <li><a href="9045">綋</a></li>
                                   <li><a href="9046">綆</a></li>
                                   <li><a href="9047">綑</a></li>
                                   <li><a href="9048">綃</a></li>
                                   <li><a href="9050">綅</a></li>
                                   <li><a href="9051">絺</a></li>
                                   <li><a href="9052">綈</a></li>
                                   <li><a href="9053">綍</a></li>
                                   <li><a href="9054">絻</a></li>
                                   <li><a href="9055">綁</a></li>
                                   <li><a href="9109">䋣</a></li>
                                   <li><a href="9132">絸</a></li>
                                   <li><a href="9180">罭</a></li>
                                   <li><a href="9181">辠</a></li>
                                   <li><a href="9182">罬</a></li>
                                   <li><a href="9208">羦</a></li>
                                   <li><a href="9209">羧</a></li>
                                   <li><a href="9210">羪</a></li>
                                   <li><a href="9230">翛</a></li>
                                   <li><a href="9306">臹</a></li>
                                   <li><a href="9333">艄</a></li>
                                   <li><a href="9334">艉</a></li>
                                   <li><a href="9335">艅</a></li>
                                   <li><a href="9336">艃</a></li>
                                   <li><a href="9337">艆</a></li>
                                   <li><a href="9491">蒞</a></li>
                                   <li><a href="9497">䓿</a></li>
                                   <li><a href="9555">蓡</a></li>
                                   <li><a href="9576">蒕</a></li>
                                   <li><a href="9577">蒽</a></li>
                                   <li><a href="9578">蒯</a></li>
                                   <li><a href="9579">蒦</a></li>
                                   <li><a href="9580">䔈</a></li>
                                   <li><a href="9581">蓇</a></li>
                                   <li><a href="9582">蓌</a></li>
                                   <li><a href="9583">䔋</a></li>
                                   <li><a href="9584">蒴</a></li>
                                   <li><a href="9585">蒒</a></li>
                                   <li><a href="9586">蒺</a></li>
                                   <li><a href="9587">蒓</a></li>
                                   <li><a href="9588">蒠</a></li>
                                   <li><a href="9589">蒨</a></li>
                                   <li><a href="9591">蒩</a></li>
                                   <li><a href="9592">蓀</a></li>
                                   <li><a href="9593">蒧</a></li>
                                   <li><a href="9594">蓎</a></li>
                                   <li><a href="9595">蓜</a></li>
                                   <li><a href="9596">蓓</a></li>
                                   <li><a href="9597">蒪</a></li>
                                   <li><a href="9598">蒱</a></li>
                                   <li><a href="9599">蓂</a></li>
                                   <li><a href="9600">蒾</a></li>
                                   <li><a href="9602">蒗</a></li>
                                   <li><a href="9603">蓈</a></li>
                                   <li><a href="9753">䖒</a></li>
                                   <li><a href="9832">䖸</a></li>
                                   <li><a href="9833">蛷</a></li>
                                   <li><a href="9834">蛺</a></li>
                                   <li><a href="9835">蜐</a></li>
                                   <li><a href="9836">蛼</a></li>
                                   <li><a href="9837">蜄</a></li>
                                   <li><a href="9838">蜇</a></li>
                                   <li><a href="9840">蜔</a></li>
                                   <li><a href="9841">蛽</a></li>
                                   <li><a href="9842">蜅</a></li>
                                   <li><a href="9845">蛖</a></li>
                                   <li><a href="9846">蜏</a></li>
                                   <li><a href="9983">䘒</a></li>
                                   <li><a href="9993">裊</a></li>
                                   <li><a href="9994">裒</a></li>
                                   <li><a href="9995">裛</a></li>
                                   <li><a href="10005">㐮</a></li>
                                   <li><a href="10032">裠</a></li>
                                   <li><a href="10041">裷</a></li>
                                   <li><a href="10043">䙁</a></li>
                                   <li><a href="10044">裧</a></li>
                                   <li><a href="10045">裰</a></li>
                                   <li><a href="10046">䘺</a></li>
                                   <li><a href="10047">裯</a></li>
                                   <li><a href="10048">裱</a></li>
                                   <li><a href="10051">裩</a></li>
                                   <li><a href="10081">䘳</a></li>
                                   <li><a href="10137">瑉</a></li>
                                   <li><a href="10183">瑀</a></li>
                                   <li><a href="10184">瑗</a></li>
                                   <li><a href="10185">瑍</a></li>
                                   <li><a href="10186">瑊</a></li>
                                   <li><a href="10187">瑝</a></li>
                                   <li><a href="10188">瑆</a></li>
                                   <li><a href="10189">瑄</a></li>
                                   <li><a href="10190">瑃</a></li>
                                   <li><a href="10191">瑑</a></li>
                                   <li><a href="10192">㻞</a></li>
                                   <li><a href="10194">瑒</a></li>
                                   <li><a href="10195">瑓</a></li>
                                   <li><a href="10278">甀</a></li>
                                   <li><a href="10279">瓽</a></li>
                                   <li><a href="10280">瓿</a></li>
                                   <li><a href="10296">寗</a></li>
                                   <li><a href="10300">畵</a></li>
                                   <li><a href="10324">叠</a></li>
                                   <li><a href="10327">畹</a></li>
                                   <li><a href="10334">畺</a></li>
                                   <li><a href="10380">瘂</a></li>
                                   <li><a href="10381">痬</a></li>
                                   <li><a href="10382">瘀</a></li>
                                   <li><a href="10383">痯</a></li>
                                   <li><a href="10384">痵</a></li>
                                   <li><a href="10386">痸</a></li>
                                   <li><a href="10387">瘄</a></li>
                                   <li><a href="10388">痮</a></li>
                                   <li><a href="10389">瘃</a></li>
                                   <li><a href="10390">痶</a></li>
                                   <li><a href="10391">痱</a></li>
                                   <li><a href="10405">痻</a></li>
                                   <li><a href="10467">賋</a></li>
                                   <li><a href="10493">皵</a></li>
                                   <li><a href="10506">盝</a></li>
                                   <li><a href="10564">睪</a></li>
                                   <li><a href="10565">睢</a></li>
                                   <li><a href="10566">睠</a></li>
                                   <li><a href="10567">睧</a></li>
                                   <li><a href="10568">睬</a></li>
                                   <li><a href="10569">睟</a></li>
                                   <li><a href="10570">睜</a></li>
                                   <li><a href="10571">睗</a></li>
                                   <li><a href="10572">睒</a></li>
                                   <li><a href="10573">睭</a></li>
                                   <li><a href="10574">睖</a></li>
                                   <li><a href="10575">睤</a></li>
                                   <li><a href="10576">睞</a></li>
                                   <li><a href="10577">睩</a></li>
                                   <li><a href="10584">睰</a></li>
                                   <li><a href="10586">瞄</a></li>
                                   <li><a href="10589">睘</a></li>
                                   <li><a href="10625">矠</a></li>
                                   <li><a href="10688">硿</a></li>
                                   <li><a href="10689">䃂</a></li>
                                   <li><a href="10690">碏</a></li>
                                   <li><a href="10691">碊</a></li>
                                   <li><a href="10692">硺</a></li>
                                   <li><a href="10693">碉</a></li>
                                   <li><a href="10694">硾</a></li>
                                   <li><a href="10695">碘</a></li>
                                   <li><a href="10697">碔</a></li>
                                   <li><a href="10698">碐</a></li>
                                   <li><a href="10699">碤</a></li>
                                   <li><a href="10798">祼</a></li>
                                   <li><a href="10799">祻</a></li>
                                   <li><a href="10800">䄍</a></li>
                                   <li><a href="10801">祹</a></li>
                                   <li><a href="10802">祾</a></li>
                                   <li><a href="10805">旤</a></li>
                                   <li><a href="10855">稞</a></li>
                                   <li><a href="10856">稛</a></li>
                                   <li><a href="10858">稡</a></li>
                                   <li><a href="10859">稕</a></li>
                                   <li><a href="10860">稑</a></li>
                                   <li><a href="10916">牎</a></li>
                                   <li><a href="10918">窠</a></li>
                                   <li><a href="10919">窞</a></li>
                                   <li><a href="10920">窣</a></li>
                                   <li><a href="10945">竫</a></li>
                                   <li><a href="10946">竨</a></li>
                                   <li><a href="10986">愗</a></li>
                                   <li><a href="11064">愙</a></li>
                                   <li><a href="11089">愂</a></li>
                                   <li><a href="11094">愹</a></li>
                                   <li><a href="11116">㥱</a></li>
                                   <li><a href="11125">愇</a></li>
                                   <li><a href="11133">㥦</a></li>
                                   <li><a href="11148">愪</a></li>
                                   <li><a href="11150">愷</a></li>
                                   <li><a href="11151">媿</a></li>
                                   <li><a href="11152">慉</a></li>
                                   <li><a href="11153">愶</a></li>
                                   <li><a href="11154">愰</a></li>
                                   <li><a href="11155">愲</a></li>
                                   <li><a href="11157">愫</a></li>
                                   <li><a href="11159">慅</a></li>
                                   <li><a href="11160">㥮</a></li>
                                   <li><a href="11161">愵</a></li>
                                   <li><a href="11162">慆</a></li>
                                   <li><a href="11217">愯</a></li>
                                   <li><a href="11225">戣</a></li>
                                   <li><a href="11226">戢</a></li>
                                   <li><a href="11227">戠</a></li>
                                   <li><a href="11250">掔</a></li>
                                   <li><a href="11252">揫</a></li>
                                   <li><a href="11253">揱</a></li>
                                   <li><a href="11257">揅</a></li>
                                   <li><a href="11273">摃</a></li>
                                   <li><a href="11348">摉</a></li>
                                   <li><a href="11416">搹</a></li>
                                   <li><a href="11417">搕</a></li>
                                   <li><a href="11418">搵</a></li>
                                   <li><a href="11419">搉</a></li>
                                   <li><a href="11422">搞</a></li>
                                   <li><a href="11423">搰</a></li>
                                   <li><a href="11424">搠</a></li>
                                   <li><a href="11425">搘</a></li>
                                   <li><a href="11426">搢</a></li>
                                   <li><a href="11427">搊</a></li>
                                   <li><a href="11428">搧</a></li>
                                   <li><a href="11429">㨛</a></li>
                                   <li><a href="11431">搋</a></li>
                                   <li><a href="11432">㨖</a></li>
                                   <li><a href="11433">搐</a></li>
                                   <li><a href="11434">搥</a></li>
                                   <li><a href="11435">搌</a></li>
                                   <li><a href="11436">搷</a></li>
                                   <li><a href="11437">搯</a></li>
                                   <li><a href="11438">搪</a></li>
                                   <li><a href="11439">搣</a></li>
                                   <li><a href="11440">搒</a></li>
                                   <li><a href="11442">搚</a></li>
                                   <li><a href="11563">㪟</a></li>
                                   <li><a href="11564">敫</a></li>
                                   <li><a href="11576">斒</a></li>
                                   <li><a href="11583">斞</a></li>
                                   <li><a href="11611">旔</a></li>
                                   <li><a href="11697">暒</a></li>
                                   <li><a href="11704">暍</a></li>
                                   <li><a href="11705">暌</a></li>
                                   <li><a href="11706">暙</a></li>
                                   <li><a href="11707">㬉</a></li>
                                   <li><a href="11708">晸</a></li>
                                   <li><a href="11709">暋</a></li>
                                   <li><a href="11747">㬅</a></li>
                                   <li><a href="11814">腳</a></li>
                                   <li><a href="11857">腛</a></li>
                                   <li><a href="11858">腤</a></li>
                                   <li><a href="11860">腭</a></li>
                                   <li><a href="11861">腧</a></li>
                                   <li><a href="11862">腬</a></li>
                                   <li><a href="11863">腨</a></li>
                                   <li><a href="11864">腝</a></li>
                                   <li><a href="11866">朡</a></li>
                                   <li><a href="11867">腶</a></li>
                                   <li><a href="11868">腩</a></li>
                                   <li><a href="11869">䐗</a></li>
                                   <li><a href="11870">䐑</a></li>
                                   <li><a href="11871">腞</a></li>
                                   <li><a href="11872">腯</a></li>
                                   <li><a href="11873">腜</a></li>
                                   <li><a href="11874">腷</a></li>
                                   <li><a href="11875">腡</a></li>
                                   <li><a href="11876">腲</a></li>
                                   <li><a href="11894">厀</a></li>
                                   <li><a href="11974">㮎</a></li>
                                   <li><a href="12045">㮚</a></li>
                                   <li><a href="12124">楲</a></li>
                                   <li><a href="12125">椸</a></li>
                                   <li><a href="12126">楀</a></li>
                                   <li><a href="12127">椻</a></li>
                                   <li><a href="12128">椵</a></li>
                                   <li><a href="12129">楿</a></li>
                                   <li><a href="12130">椷</a></li>
                                   <li><a href="12131">楬</a></li>
                                   <li><a href="12132">楗</a></li>
                                   <li><a href="12133">楥</a></li>
                                   <li><a href="12134">楦</a></li>
                                   <li><a href="12136">楻</a></li>
                                   <li><a href="12137">楎</a></li>
                                   <li><a href="12138">楂</a></li>
                                   <li><a href="12139">楒</a></li>
                                   <li><a href="12141">楺</a></li>
                                   <li><a href="12142">楈</a></li>
                                   <li><a href="12145">楶</a></li>
                                   <li><a href="12146">㮞</a></li>
                                   <li><a href="12147">㮕</a></li>
                                   <li><a href="12148">楤</a></li>
                                   <li><a href="12150">楱</a></li>
                                   <li><a href="12152">㮏</a></li>
                                   <li><a href="12156">楨</a></li>
                                   <li><a href="12157">楟</a></li>
                                   <li><a href="12158">楣</a></li>
                                   <li><a href="12160">椱</a></li>
                                   <li><a href="12161">楅</a></li>
                                   <li><a href="12162">楩</a></li>
                                   <li><a href="12164">楘</a></li>
                                   <li><a href="12166">楰</a></li>
                                   <li><a href="12167">楆</a></li>
                                   <li><a href="12168">椳</a></li>
                                   <li><a href="12252">槆</a></li>
                                   <li><a href="12344">塤</a></li>
                                   <li><a href="12548">僀</a></li>
                                   <li><a href="12565">㑻</a></li>
                                   <li><a href="12586">傿</a></li>
                                   <li><a href="12587">傹</a></li>
                                   <li><a href="12588">傪</a></li>
                                   <li><a href="12589">傱</a></li>
                                   <li><a href="12590">傽</a></li>
                                   <li><a href="12593">傺</a></li>
                                   <li><a href="12594">僄</a></li>
                                   <li><a href="12597">傰</a></li>
                                   <li><a href="12598">僈</a></li>
                                   <li><a href="12599">僌</a></li>
                                   <li><a href="12600">㑾</a></li>
                                   <li><a href="12601">僇</a></li>
                                   <li><a href="12602">傫</a></li>
                                   <li><a href="12634">傻</a></li>
                                   <li><a href="12692">兾</a></li>
                                   <li><a href="12720">㓖</a></li>
                                   <li><a href="12738">剺</a></li>
                                   <li><a href="12797">剷</a></li>
                                   <li><a href="12798">剼</a></li>
                                   <li><a href="12800">剸</a></li>
                                   <li><a href="12801">剻</a></li>
                                   <li><a href="12802">剹</a></li>
                                   <li><a href="12860">勥</a></li>
                                   <li><a href="12862">勡</a></li>
                                   <li><a href="12867">㰹</a></li>
                                   <li><a href="12868">歆</a></li>
                                   <li><a href="12869">歂</a></li>
                                   <li><a href="12884">跱</a></li>
                                   <li><a href="12885">歲</a></li>
                                   <li><a href="12889">厯</a></li>
                                   <li><a href="12908">㱪</a></li>
                                   <li><a href="12909">殜</a></li>
                                   <li><a href="12940">毁</a></li>
                                   <li><a href="12941">殾</a></li>
                                   <li><a href="12949">匓</a></li>
                                   <li><a href="12977">毼</a></li>
                                   <li><a href="12978">毽</a></li>
                                   <li><a href="12979">毹</a></li>
                                   <li><a href="12980">毺</a></li>
                                   <li><a href="12981">毻</a></li>
                                   <li><a href="12982">毷</a></li>
                                   <li><a href="12991">滙</a></li>
                                   <li><a href="13030">亄</a></li>
                                   <li><a href="13092">傮</a></li>
                                   <li><a href="13093">傯</a></li>
                                   <li><a href="13094">傶</a></li>
                                   <li><a href="13095">傸</a></li>
                                   <li><a href="13096">傼</a></li>
                                   <li><a href="13097">僁</a></li>
                                   <li><a href="13098">僆</a></li>
                                   <li><a href="13099">僋</a></li>
                                   <li><a href="13117">兡</a></li>
                                   <li><a href="13135">凗</a></li>
                                   <li><a href="13151">剾</a></li>
                                   <li><a href="13199">厪</a></li>
                                   <li><a href="13200">厫</a></li>
                                   <li><a href="13417">喍</a></li>
                                   <li><a href="13428">喡</a></li>
                                   <li><a href="13443">喿</a></li>
                                   <li><a href="13444">嗀</a></li>
                                   <li><a href="13445">嗁</a></li>
                                   <li><a href="13446">嗃</a></li>
                                   <li><a href="13447">嗆</a></li>
                                   <li><a href="13448">嗈</a></li>
                                   <li><a href="13449">嗉</a></li>
                                   <li><a href="13450">嗊</a></li>
                                   <li><a href="13451">嗋</a></li>
                                   <li><a href="13452">嗌</a></li>
                                   <li><a href="13453">嗍</a></li>
                                   <li><a href="13454">嗎</a></li>
                                   <li><a href="13456">嗐</a></li>
                                   <li><a href="13457">嗑</a></li>
                                   <li><a href="13458">嗓</a></li>
                                   <li><a href="13459">嗕</a></li>
                                   <li><a href="13460">嗖</a></li>
                                   <li><a href="13461">嗗</a></li>
                                   <li><a href="13462">嗘</a></li>
                                   <li><a href="13463">嗙</a></li>
                                   <li><a href="13464">嗛</a></li>
                                   <li><a href="13465">嗝</a></li>
                                   <li><a href="13466">嗠</a></li>
                                   <li><a href="13467">嗡</a></li>
                                   <li><a href="13468">嗥</a></li>
                                   <li><a href="13469">嗦</a></li>
                                   <li><a href="13470">嗧</a></li>
                                   <li><a href="13471">嗨</a></li>
                                   <li><a href="13472">嗩</a></li>
                                   <li><a href="13473">嗭</a></li>
                                   <li><a href="13474">嗱</a></li>
                                   <li><a href="13479">嗼</a></li>
                                   <li><a href="13625">圔</a></li>
                                   <li><a href="13805">塉</a></li>
                                   <li><a href="13806">塌</a></li>
                                   <li><a href="13807">塍</a></li>
                                   <li><a href="13808">塎</a></li>
                                   <li><a href="13809">塏</a></li>
                                   <li><a href="13810">塐</a></li>
                                   <li><a href="13811">塓</a></li>
                                   <li><a href="13812">塕</a></li>
                                   <li><a href="13813">塖</a></li>
                                   <li><a href="13814">塛</a></li>
                                   <li><a href="13815">塜</a></li>
                                   <li><a href="13816">塝</a></li>
                                   <li><a href="13817">塠</a></li>
                                   <li><a href="13818">塣</a></li>
                                   <li><a href="13819">塥</a></li>
                                   <li><a href="13820">塦</a></li>
                                   <li><a href="13821">塧</a></li>
                                   <li><a href="13822">塨</a></li>
                                   <li><a href="13829">塻</a></li>
                                   <li><a href="13869">墷</a></li>
                                   <li><a href="14116">媁</a></li>
                                   <li><a href="14131">媐</a></li>
                                   <li><a href="14154">媰</a></li>
                                   <li><a href="14155">媱</a></li>
                                   <li><a href="14156">媲</a></li>
                                   <li><a href="14157">媳</a></li>
                                   <li><a href="14158">媴</a></li>
                                   <li><a href="14159">媵</a></li>
                                   <li><a href="14161">媷</a></li>
                                   <li><a href="14162">媸</a></li>
                                   <li><a href="14163">媹</a></li>
                                   <li><a href="14164">媻</a></li>
                                   <li><a href="14165">嫀</a></li>
                                   <li><a href="14166">嫃</a></li>
                                   <li><a href="14167">嫄</a></li>
                                   <li><a href="14168">嫅</a></li>
                                   <li><a href="14169">嫆</a></li>
                                   <li><a href="14170">嫇</a></li>
                                   <li><a href="14171">嫈</a></li>
                                   <li><a href="14172">嫊</a></li>
                                   <li><a href="14173">嫍</a></li>
                                   <li><a href="14174">嫎</a></li>
                                   <li><a href="14175">嫏</a></li>
                                   <li><a href="14184">嫟</a></li>
                                   <li><a href="14192">嫫</a></li>
                                   <li><a href="14279">孴</a></li>
                                   <li><a href="14317">寖</a></li>
                                   <li><a href="14318">寘</a></li>
                                   <li><a href="14319">寚</a></li>
                                   <li><a href="14320">寜</a></li>
                                   <li><a href="14343">尟</a></li>
                                   <li><a href="14354">尲</a></li>
                                   <li><a href="14355">尳</a></li>
                                   <li><a href="14506">嵊</a></li>
                                   <li><a href="14515">嵞</a></li>
                                   <li><a href="14516">嵟</a></li>
                                   <li><a href="14517">嵠</a></li>
                                   <li><a href="14518">嵡</a></li>
                                   <li><a href="14519">嵢</a></li>
                                   <li><a href="14520">嵣</a></li>
                                   <li><a href="14521">嵤</a></li>
                                   <li><a href="14523">嵦</a></li>
                                   <li><a href="14524">嵧</a></li>
                                   <li><a href="14525">嵨</a></li>
                                   <li><a href="14526">嵪</a></li>
                                   <li><a href="14527">嵭</a></li>
                                   <li><a href="14528">嵮</a></li>
                                   <li><a href="14529">嵰</a></li>
                                   <li><a href="14530">嵱</a></li>
                                   <li><a href="14531">嵲</a></li>
                                   <li><a href="14532">嵴</a></li>
                                   <li><a href="14641">幊</a></li>
                                   <li><a href="14642">幋</a></li>
                                   <li><a href="14643">幍</a></li>
                                   <li><a href="14644">幏</a></li>
                                   <li><a href="14645">幐</a></li>
                                   <li><a href="14697">廅</a></li>
                                   <li><a href="14698">廆</a></li>
                                   <li><a href="14699">廇</a></li>
                                   <li><a href="14700">廌</a></li>
                                   <li><a href="14725">弒</a></li>
                                   <li><a href="14744">弿</a></li>
                                   <li><a href="14745">彀</a></li>
                                   <li><a href="14764">彮</a></li>
                                   <li><a href="14787">徯</a></li>
                                   <li><a href="14788">徰</a></li>
                                   <li><a href="14855">愩</a></li>
                                   <li><a href="14856">愭</a></li>
                                   <li><a href="14857">愮</a></li>
                                   <li><a href="14858">愱</a></li>
                                   <li><a href="14861">慀</a></li>
                                   <li><a href="14862">慃</a></li>
                                   <li><a href="14863">慏</a></li>
                                   <li><a href="14865">慔</a></li>
                                   <li><a href="14896">戤</a></li>
                                   <li><a href="14897">戥</a></li>
                                   <li><a href="14975">揧</a></li>
                                   <li><a href="14979">搇</a></li>
                                   <li><a href="14980">搈</a></li>
                                   <li><a href="14981">搎</a></li>
                                   <li><a href="14983">搙</a></li>
                                   <li><a href="14984">搛</a></li>
                                   <li><a href="14985">搝</a></li>
                                   <li><a href="14986">搟</a></li>
                                   <li><a href="14987">搡</a></li>
                                   <li><a href="14989">搮</a></li>
                                   <li><a href="14990">搱</a></li>
                                   <li><a href="14992">搳</a></li>
                                   <li><a href="14993">搸</a></li>
                                   <li><a href="14995">搼</a></li>
                                   <li><a href="14996">摀</a></li>
                                   <li><a href="14997">摁</a></li>
                                   <li><a href="15062">敭</a></li>
                                   <li><a href="15063">敮</a></li>
                                   <li><a href="15064">敯</a></li>
                                   <li><a href="15077">斱</a></li>
                                   <li><a href="15082">旓</a></li>
                                   <li><a href="15083">旕</a></li>
                                   <li><a href="15099">暆</a></li>
                                   <li><a href="15100">暊</a></li>
                                   <li><a href="15101">暏</a></li>
                                   <li><a href="15102">暓</a></li>
                                   <li><a href="15103">暔</a></li>
                                   <li><a href="15104">暕</a></li>
                                   <li><a href="15213">棩</a></li>
                                   <li><a href="15221">椯</a></li>
                                   <li><a href="15223">椺</a></li>
                                   <li><a href="15224">椼</a></li>
                                   <li><a href="15225">椾</a></li>
                                   <li><a href="15226">楁</a></li>
                                   <li><a href="15227">楃</a></li>
                                   <li><a href="15228">楄</a></li>
                                   <li><a href="15229">楇</a></li>
                                   <li><a href="15230">楋</a></li>
                                   <li><a href="15231">楌</a></li>
                                   <li><a href="15232">楍</a></li>
                                   <li><a href="15233">楏</a></li>
                                   <li><a href="15234">楐</a></li>
                                   <li><a href="15235">楑</a></li>
                                   <li><a href="15237">榅</a></li>
                                   <li><a href="15241">榙</a></li>
                                   <li><a href="15250">榵</a></li>
                                   <li><a href="15347">歀</a></li>
                                   <li><a href="15348">歁</a></li>
                                   <li><a href="15349">歄</a></li>
                                   <li><a href="15350">歅</a></li>
                                   <li><a href="15351">歈</a></li>
                                   <li><a href="15358">歱</a></li>
                                   <li><a href="15381">毸</a></li>
                                   <li><a href="15411">氱</a></li>
                                   <li><a href="15412">氲</a></li>
                                   <li><a href="15686">湋</a></li>
                                   <li><a href="15710">湬</a></li>
                                   <li><a href="15721">溉</a></li>
                                   <li><a href="15722">溍</a></li>
                                   <li><a href="15723">溎</a></li>
                                   <li><a href="15724">溑</a></li>
                                   <li><a href="15725">溒</a></li>
                                   <li><a href="15726">溔</a></li>
                                   <li><a href="15727">溕</a></li>
                                   <li><a href="15728">溗</a></li>
                                   <li><a href="15729">溙</a></li>
                                   <li><a href="15732">溞</a></li>
                                   <li><a href="15733">溠</a></li>
                                   <li><a href="15734">溡</a></li>
                                   <li><a href="15735">溣</a></li>
                                   <li><a href="15736">溤</a></li>
                                   <li><a href="15737">溦</a></li>
                                   <li><a href="15738">溧</a></li>
                                   <li><a href="15739">溨</a></li>
                                   <li><a href="15740">溩</a></li>
                                   <li><a href="15741">溬</a></li>
                                   <li><a href="15742">溭</a></li>
                                   <li><a href="15743">溮</a></li>
                                   <li><a href="15744">溰</a></li>
                                   <li><a href="15745">溱</a></li>
                                   <li><a href="15746">溳</a></li>
                                   <li><a href="15747">溴</a></li>
                                   <li><a href="15748">溵</a></li>
                                   <li><a href="15749">溸</a></li>
                                   <li><a href="15750">溹</a></li>
                                   <li><a href="15751">溻</a></li>
                                   <li><a href="15752">溼</a></li>
                                   <li><a href="15753">溾</a></li>
                                   <li><a href="15754">滀</a></li>
                                   <li><a href="15755">滁</a></li>
                                   <li><a href="15756">滃</a></li>
                                   <li><a href="15757">滆</a></li>
                                   <li><a href="15758">滇</a></li>
                                   <li><a href="15759">滈</a></li>
                                   <li><a href="15760">滊</a></li>
                                   <li><a href="15761">滍</a></li>
                                   <li><a href="15763">滏</a></li>
                                   <li><a href="15765">滒</a></li>
                                   <li><a href="15766">滖</a></li>
                                   <li><a href="15767">滗</a></li>
                                   <li><a href="15768">滘</a></li>
                                   <li><a href="15769">滚</a></li>
                                   <li><a href="15770">滜</a></li>
                                   <li><a href="15771">滣</a></li>
                                   <li><a href="15874">澕</a></li>
                                   <li><a href="16129">煁</a></li>
                                   <li><a href="16130">煂</a></li>
                                   <li><a href="16131">煃</a></li>
                                   <li><a href="16132">煄</a></li>
                                   <li><a href="16133">煅</a></li>
                                   <li><a href="16134">煆</a></li>
                                   <li><a href="16135">煇</a></li>
                                   <li><a href="16136">煈</a></li>
                                   <li><a href="16137">煊</a></li>
                                   <li><a href="16138">煋</a></li>
                                   <li><a href="16139">煍</a></li>
                                   <li><a href="16140">煏</a></li>
                                   <li><a href="16142">煑</a></li>
                                   <li><a href="16143">煓</a></li>
                                   <li><a href="16144">煔</a></li>
                                   <li><a href="16145">煗</a></li>
                                   <li><a href="16146">煘</a></li>
                                   <li><a href="16147">煚</a></li>
                                   <li><a href="16149">煜</a></li>
                                   <li><a href="16150">煝</a></li>
                                   <li><a href="16151">煞</a></li>
                                   <li><a href="16152">煟</a></li>
                                   <li><a href="16153">煠</a></li>
                                   <li><a href="16154">煡</a></li>
                                   <li><a href="16155">煣</a></li>
                                   <li><a href="16156">煨</a></li>
                                   <li><a href="16157">煪</a></li>
                                   <li><a href="16158">煫</a></li>
                                   <li><a href="16159">煭</a></li>
                                   <li><a href="16160">煯</a></li>
                                   <li><a href="16161">煰</a></li>
                                   <li><a href="16162">煱</a></li>
                                   <li><a href="16163">煲</a></li>
                                   <li><a href="16164">煳</a></li>
                                   <li><a href="16165">煴</a></li>
                                   <li><a href="16283">牃</a></li>
                                   <li><a href="16288">牏</a></li>
                                   <li><a href="16289">牑</a></li>
                                   <li><a href="16320">犌</a></li>
                                   <li><a href="16321">犍</a></li>
                                   <li><a href="16322">犎</a></li>
                                   <li><a href="16323">犏</a></li>
                                   <li><a href="16324">犐</a></li>
                                   <li><a href="16325">犑</a></li>
                                   <li><a href="16423">猺</a></li>
                                   <li><a href="16424">猻</a></li>
                                   <li><a href="16425">猼</a></li>
                                   <li><a href="16426">猽</a></li>
                                   <li><a href="16427">獀</a></li>
                                   <li><a href="16428">獁</a></li>
                                   <li><a href="16429">獂</a></li>
                                   <li><a href="16431">獆</a></li>
                                   <li><a href="16432">獈</a></li>
                                   <li><a href="16433">獉</a></li>
                                   <li><a href="16434">獊</a></li>
                                   <li><a href="16521">琞</a></li>
                                   <li><a href="16526">琧</a></li>
                                   <li><a href="16529">琽</a></li>
                                   <li><a href="16530">琾</a></li>
                                   <li><a href="16531">瑂</a></li>
                                   <li><a href="16532">瑅</a></li>
                                   <li><a href="16533">瑈</a></li>
                                   <li><a href="16534">瑌</a></li>
                                   <li><a href="16535">瑎</a></li>
                                   <li><a href="16536">瑏</a></li>
                                   <li><a href="16537">瑐</a></li>
                                   <li><a href="16538">瑔</a></li>
                                   <li><a href="16539">瑖</a></li>
                                   <li><a href="16540">瑘</a></li>
                                   <li><a href="16580">瓾</a></li>
                                   <li><a href="16585">甝</a></li>
                                   <li><a href="16605">痭</a></li>
                                   <li><a href="16606">痷</a></li>
                                   <li><a href="16607">痽</a></li>
                                   <li><a href="16609">瘔</a></li>
                                   <li><a href="16625">皗</a></li>
                                   <li><a href="16626">皘</a></li>
                                   <li><a href="16662">睓</a></li>
                                   <li><a href="16663">睔</a></li>
                                   <li><a href="16664">睕</a></li>
                                   <li><a href="16665">睙</a></li>
                                   <li><a href="16666">睝</a></li>
                                   <li><a href="16738">硸</a></li>
                                   <li><a href="16739">硹</a></li>
                                   <li><a href="16740">硽</a></li>
                                   <li><a href="16741">碀</a></li>
                                   <li><a href="16742">碂</a></li>
                                   <li><a href="16743">碃</a></li>
                                   <li><a href="16744">碄</a></li>
                                   <li><a href="16745">碅</a></li>
                                   <li><a href="16746">碈</a></li>
                                   <li><a href="16747">碋</a></li>
                                   <li><a href="16748">碒</a></li>
                                   <li><a href="16749">碖</a></li>
                                   <li><a href="16750">碙</a></li>
                                   <li><a href="16792">祽</a></li>
                                   <li><a href="16793">禃</a></li>
                                   <li><a href="16827">稏</a></li>
                                   <li><a href="16828">稐</a></li>
                                   <li><a href="16829">稒</a></li>
                                   <li><a href="16830">稓</a></li>
                                   <li><a href="16831">稖</a></li>
                                   <li><a href="16832">稝</a></li>
                                   <li><a href="16833">稢</a></li>
                                   <li><a href="16854">窡</a></li>
                                   <li><a href="16855">窢</a></li>
                                   <li><a href="16856">窤</a></li>
                                   <li><a href="16894">筞</a></li>
                                   <li><a href="16895">筟</a></li>
                                   <li><a href="16896">筡</a></li>
                                   <li><a href="16897">筣</a></li>
                                   <li><a href="16898">筨</a></li>
                                   <li><a href="16899">筫</a></li>
                                   <li><a href="16900">筶</a></li>
                                   <li><a href="16901">筸</a></li>
                                   <li><a href="16902">筽</a></li>
                                   <li><a href="16962">粯</a></li>
                                   <li><a href="16963">粴</a></li>
                                   <li><a href="16997">絼</a></li>
                                   <li><a href="16998">絾</a></li>
                                   <li><a href="16999">綀</a></li>
                                   <li><a href="17000">綄</a></li>
                                   <li><a href="17001">綇</a></li>
                                   <li><a href="17002">綊</a></li>
                                   <li><a href="17003">綎</a></li>
                                   <li><a href="17004">綐</a></li>
                                   <li><a href="17005">綒</a></li>
                                   <li><a href="17006">綔</a></li>
                                   <li><a href="17007">綕</a></li>
                                   <li><a href="17008">綘</a></li>
                                   <li><a href="17071">羥</a></li>
                                   <li><a href="17086">翜</a></li>
                                   <li><a href="17087">翝</a></li>
                                   <li><a href="17114">聕</a></li>
                                   <li><a href="17115">聗</a></li>
                                   <li><a href="17161">腢</a></li>
                                   <li><a href="17162">腣</a></li>
                                   <li><a href="17163">腪</a></li>
                                   <li><a href="17164">腵</a></li>
                                   <li><a href="17165">腽</a></li>
                                   <li><a href="17189">舽</a></li>
                                   <li><a href="17190">艂</a></li>
                                   <li><a href="17294">蒑</a></li>
                                   <li><a href="17295">蒖</a></li>
                                   <li><a href="17296">蒘</a></li>
                                   <li><a href="17297">蒚</a></li>
                                   <li><a href="17298">蒛</a></li>
                                   <li><a href="17299">蒝</a></li>
                                   <li><a href="17300">蒢</a></li>
                                   <li><a href="17301">蒣</a></li>
                                   <li><a href="17302">蒤</a></li>
                                   <li><a href="17303">蒥</a></li>
                                   <li><a href="17304">蒫</a></li>
                                   <li><a href="17305">蒬</a></li>
                                   <li><a href="17306">蒮</a></li>
                                   <li><a href="17307">蒰</a></li>
                                   <li><a href="17308">蒳</a></li>
                                   <li><a href="17309">蒵</a></li>
                                   <li><a href="17310">蒶</a></li>
                                   <li><a href="17311">蒷</a></li>
                                   <li><a href="17312">蓃</a></li>
                                   <li><a href="17313">蓒</a></li>
                                   <li><a href="17314">蓔</a></li>
                                   <li><a href="17315">蓕</a></li>
                                   <li><a href="17316">蓘</a></li>
                                   <li><a href="17317">蓞</a></li>
                                   <li><a href="17438">蛵</a></li>
                                   <li><a href="17439">蛶</a></li>
                                   <li><a href="17440">蛿</a></li>
                                   <li><a href="17441">蜁</a></li>
                                   <li><a href="17442">蜌</a></li>
                                   <li><a href="17443">蜕</a></li>
                                   <li><a href="17562">裚</a></li>
                                   <li><a href="17563">裪</a></li>
                                   <li><a href="17565">裬</a></li>
                                   <li><a href="17566">裭</a></li>
                                   <li><a href="17567">裮</a></li>
                                   <li><a href="17568">裶</a></li>
                                   <li><a href="17570">裿</a></li>
                                   <li><a href="17571">褀</a></li>
                                   <li><a href="17572">褃</a></li>
                                   <li><a href="17600">覅</a></li>
                                   <li><a href="17619">觠</a></li>
                                   <li><a href="17620">觢</a></li>
                                   <li><a href="17621">觤</a></li>
                                   <li><a href="17649">詨</a></li>
                                   <li><a href="17650">詪</a></li>
                                   <li><a href="17651">詯</a></li>
                                   <li><a href="17652">詴</a></li>
                                   <li><a href="17653">詸</a></li>
                                   <li><a href="17654">詽</a></li>
                                   <li><a href="17655">誁</a></li>
                                   <li><a href="17656">誈</a></li>
                                   <li><a href="17738">豥</a></li>
                                   <li><a href="17749">貄</a></li>
                                   <li><a href="17763">賌</a></li>
                                   <li><a href="17777">赨</a></li>
                                   <li><a href="17793">趌</a></li>
                                   <li><a href="17794">趎</a></li>
                                   <li><a href="17795">趏</a></li>
                                   <li><a href="17796">趒</a></li>
                                   <li><a href="17797">趔</a></li>
                                   <li><a href="17820">跠</a></li>
                                   <li><a href="17821">跢</a></li>
                                   <li><a href="17822">跩</a></li>
                                   <li><a href="17824">跮</a></li>
                                   <li><a href="17893">輁</a></li>
                                   <li><a href="17894">輄</a></li>
                                   <li><a href="17895">輆</a></li>
                                   <li><a href="17896">輋</a></li>
                                   <li><a href="17923">遆</a></li>
                                   <li><a href="17924">遈</a></li>
                                   <li><a href="17959">郼</a></li>
                                   <li><a href="17964">鄑</a></li>
                                   <li><a href="17979">酨</a></li>
                                   <li><a href="17980">酫</a></li>
                                   <li><a href="17981">酯</a></li>
                                   <li><a href="18015">鈱</a></li>
                                   <li><a href="18017">鈻</a></li>
                                   <li><a href="18018">鈽</a></li>
                                   <li><a href="18019">鉁</a></li>
                                   <li><a href="18020">鉌</a></li>
                                   <li><a href="18021">鉓</a></li>
                                   <li><a href="18022">鉔</a></li>
                                   <li><a href="18023">鉟</a></li>
                                   <li><a href="18024">鉣</a></li>
                                   <li><a href="18025">鉪</a></li>
                                   <li><a href="18026">鉫</a></li>
                                   <li><a href="18027">鉲</a></li>
                                   <li><a href="18034">銏</a></li>
                                   <li><a href="18168">閚</a></li>
                                   <li><a href="18169">閛</a></li>
                                   <li><a href="18170">閜</a></li>
                                   <li><a href="18202">隒</a></li>
                                   <li><a href="18210">雏</a></li>
                                   <li><a href="18220">雴</a></li>
                                   <li><a href="18221">雵</a></li>
                                   <li><a href="18222">雸</a></li>
                                   <li><a href="18223">雼</a></li>
                                   <li><a href="18224">雽</a></li>
                                   <li><a href="18252">靵</a></li>
                                   <li><a href="18275">頉</a></li>
                                   <li><a href="18300">颬</a></li>
                                   <li><a href="18308">飬</a></li>
                                   <li><a href="18323">馚</a></li>
                                   <li><a href="18416">魜</a></li>
                                   <li><a href="18417">魝</a></li>
                                   <li><a href="18461">鳨</a></li>
                                   <li><a href="18462">鳪</a></li>
                                   <li><a href="18463">鳭</a></li>
                                   <li><a href="18464">鳮</a></li>
                                   <li><a href="18465">鳯</a></li>
                                   <li><a href="18626">圑</a></li>
                                   <li><a href="18637">﨩</a></li>
                                   <li><a href="18714">㑼</a></li>
                                   <li><a href="18715">㑽</a></li>
                                   <li><a href="18716">㑿</a></li>
                                   <li><a href="18717">㒀</a></li>
                                   <li><a href="18718">㒁</a></li>
                                   <li><a href="18761">㒾</a></li>
                                   <li><a href="18799">㓼</a></li>
                                   <li><a href="18800">㓽</a></li>
                                   <li><a href="18836">㔪</a></li>
                                   <li><a href="18840">㔳</a></li>
                                   <li><a href="18846">㔼</a></li>
                                   <li><a href="18970">㗓</a></li>
                                   <li><a href="18971">㗔</a></li>
                                   <li><a href="18972">㗕</a></li>
                                   <li><a href="18973">㗗</a></li>
                                   <li><a href="18974">㗘</a></li>
                                   <li><a href="18975">㗙</a></li>
                                   <li><a href="18976">㗚</a></li>
                                   <li><a href="18977">㗜</a></li>
                                   <li><a href="18978">㗞</a></li>
                                   <li><a href="18979">㗟</a></li>
                                   <li><a href="18980">㗠</a></li>
                                   <li><a href="19065">㙔</a></li>
                                   <li><a href="19067">㙙</a></li>
                                   <li><a href="19068">㙚</a></li>
                                   <li><a href="19069">㙛</a></li>
                                   <li><a href="19070">㙝</a></li>
                                   <li><a href="19071">㙞</a></li>
                                   <li><a href="19122">㚠</a></li>
                                   <li><a href="19201">㜅</a></li>
                                   <li><a href="19202">㜆</a></li>
                                   <li><a href="19203">㜇</a></li>
                                   <li><a href="19205">㜉</a></li>
                                   <li><a href="19206">㜊</a></li>
                                   <li><a href="19207">㜋</a></li>
                                   <li><a href="19208">㜌</a></li>
                                   <li><a href="19209">㜍</a></li>
                                   <li><a href="19210">㜎</a></li>
                                   <li><a href="19211">㜏</a></li>
                                   <li><a href="19212">㜐</a></li>
                                   <li><a href="19213">㜑</a></li>
                                   <li><a href="19258">㝅</a></li>
                                   <li><a href="19285">㝤</a></li>
                                   <li><a href="19286">㝥</a></li>
                                   <li><a href="19287">㝦</a></li>
                                   <li><a href="19288">㝧</a></li>
                                   <li><a href="19314">㞉</a></li>
                                   <li><a href="19315">㞊</a></li>
                                   <li><a href="19396">㟬</a></li>
                                   <li><a href="19398">㟰</a></li>
                                   <li><a href="19399">㟱</a></li>
                                   <li><a href="19400">㟲</a></li>
                                   <li><a href="19401">㟳</a></li>
                                   <li><a href="19402">㟴</a></li>
                                   <li><a href="19403">㟵</a></li>
                                   <li><a href="19404">㟶</a></li>
                                   <li><a href="19405">㟸</a></li>
                                   <li><a href="19412">㟿</a></li>
                                   <li><a href="19426">㠏</a></li>
                                   <li><a href="19485">㡗</a></li>
                                   <li><a href="19486">㡘</a></li>
                                   <li><a href="19487">㡙</a></li>
                                   <li><a href="19488">㡚</a></li>
                                   <li><a href="19536">㢑</a></li>
                                   <li><a href="19552">㢦</a></li>
                                   <li><a href="19571">㣀</a></li>
                                   <li><a href="19572">㣁</a></li>
                                   <li><a href="19573">㣂</a></li>
                                   <li><a href="19607">㣯</a></li>
                                   <li><a href="19689">㥣</a></li>
                                   <li><a href="19690">㥤</a></li>
                                   <li><a href="19692">㥨</a></li>
                                   <li><a href="19694">㥬</a></li>
                                   <li><a href="19695">㥭</a></li>
                                   <li><a href="19696">㥰</a></li>
                                   <li><a href="19698">㥳</a></li>
                                   <li><a href="19699">㥴</a></li>
                                   <li><a href="19700">㥵</a></li>
                                   <li><a href="19705">㥺</a></li>
                                   <li><a href="19708">㥾</a></li>
                                   <li><a href="19718">㦊</a></li>
                                   <li><a href="19751">㦹</a></li>
                                   <li><a href="19812">㨍</a></li>
                                   <li><a href="19818">㨙</a></li>
                                   <li><a href="19820">㨜</a></li>
                                   <li><a href="19821">㨝</a></li>
                                   <li><a href="19822">㨞</a></li>
                                   <li><a href="19823">㨟</a></li>
                                   <li><a href="19824">㨠</a></li>
                                   <li><a href="19825">㨡</a></li>
                                   <li><a href="19826">㨢</a></li>
                                   <li><a href="19827">㨣</a></li>
                                   <li><a href="19828">㨤</a></li>
                                   <li><a href="19829">㨥</a></li>
                                   <li><a href="19830">㨦</a></li>
                                   <li><a href="19831">㨧</a></li>
                                   <li><a href="19832">㨨</a></li>
                                   <li><a href="19833">㨪</a></li>
                                   <li><a href="19838">㨲</a></li>
                                   <li><a href="19916">㪛</a></li>
                                   <li><a href="19917">㪝</a></li>
                                   <li><a href="19918">㪞</a></li>
                                   <li><a href="19933">㪱</a></li>
                                   <li><a href="19953">㫍</a></li>
                                   <li><a href="19988">㬁</a></li>
                                   <li><a href="19989">㬂</a></li>
                                   <li><a href="19990">㬃</a></li>
                                   <li><a href="19991">㬆</a></li>
                                   <li><a href="19992">㬇</a></li>
                                   <li><a href="19993">㬋</a></li>
                                   <li><a href="19994">㬌</a></li>
                                   <li><a href="19998">㬒</a></li>
                                   <li><a href="20021">㬻</a></li>
                                   <li><a href="20072">㮋</a></li>
                                   <li><a href="20073">㮌</a></li>
                                   <li><a href="20074">㮐</a></li>
                                   <li><a href="20075">㮑</a></li>
                                   <li><a href="20076">㮒</a></li>
                                   <li><a href="20077">㮓</a></li>
                                   <li><a href="20078">㮔</a></li>
                                   <li><a href="20079">㮖</a></li>
                                   <li><a href="20080">㮗</a></li>
                                   <li><a href="20081">㮘</a></li>
                                   <li><a href="20082">㮙</a></li>
                                   <li><a href="20083">㮛</a></li>
                                   <li><a href="20084">㮜</a></li>
                                   <li><a href="20085">㮝</a></li>
                                   <li><a href="20086">㮟</a></li>
                                   <li><a href="20087">㮡</a></li>
                                   <li><a href="20098">㮱</a></li>
                                   <li><a href="20200">㰺</a></li>
                                   <li><a href="20201">㰻</a></li>
                                   <li><a href="20202">㰼</a></li>
                                   <li><a href="20203">㰽</a></li>
                                   <li><a href="20204">㰾</a></li>
                                   <li><a href="20237">㱫</a></li>
                                   <li><a href="20238">㱬</a></li>
                                   <li><a href="20239">㱭</a></li>
                                   <li><a href="20258">㲄</a></li>
                                   <li><a href="20281">㲠</a></li>
                                   <li><a href="20282">㲡</a></li>
                                   <li><a href="20283">㲢</a></li>
                                   <li><a href="20289">㲨</a></li>
                                   <li><a href="20374">㴝</a></li>
                                   <li><a href="20376">㴥</a></li>
                                   <li><a href="20377">㴦</a></li>
                                   <li><a href="20378">㴧</a></li>
                                   <li><a href="20379">㴨</a></li>
                                   <li><a href="20380">㴩</a></li>
                                   <li><a href="20381">㴪</a></li>
                                   <li><a href="20382">㴫</a></li>
                                   <li><a href="20383">㴬</a></li>
                                   <li><a href="20384">㴭</a></li>
                                   <li><a href="20385">㴮</a></li>
                                   <li><a href="20386">㴯</a></li>
                                   <li><a href="20387">㴰</a></li>
                                   <li><a href="20388">㴱</a></li>
                                   <li><a href="20389">㴲</a></li>
                                   <li><a href="20390">㴳</a></li>
                                   <li><a href="20391">㴴</a></li>
                                   <li><a href="20392">㴵</a></li>
                                   <li><a href="20393">㴶</a></li>
                                   <li><a href="20394">㴷</a></li>
                                   <li><a href="20395">㴸</a></li>
                                   <li><a href="20401">㵁</a></li>
                                   <li><a href="20498">㷂</a></li>
                                   <li><a href="20508">㷎</a></li>
                                   <li><a href="20509">㷏</a></li>
                                   <li><a href="20510">㷐</a></li>
                                   <li><a href="20511">㷑</a></li>
                                   <li><a href="20512">㷒</a></li>
                                   <li><a href="20513">㷓</a></li>
                                   <li><a href="20514">㷕</a></li>
                                   <li><a href="20515">㷖</a></li>
                                   <li><a href="20516">㷘</a></li>
                                   <li><a href="20517">㷙</a></li>
                                   <li><a href="20559">㸙</a></li>
                                   <li><a href="20599">㹂</a></li>
                                   <li><a href="20602">㹅</a></li>
                                   <li><a href="20603">㹆</a></li>
                                   <li><a href="20604">㹇</a></li>
                                   <li><a href="20663">㺈</a></li>
                                   <li><a href="20665">㺊</a></li>
                                   <li><a href="20666">㺋</a></li>
                                   <li><a href="20667">㺌</a></li>
                                   <li><a href="20724">㻗</a></li>
                                   <li><a href="20726">㻝</a></li>
                                   <li><a href="20727">㻟</a></li>
                                   <li><a href="20728">㻠</a></li>
                                   <li><a href="20729">㻡</a></li>
                                   <li><a href="20755">㼏</a></li>
                                   <li><a href="20779">㼫</a></li>
                                   <li><a href="20780">㼬</a></li>
                                   <li><a href="20781">㼭</a></li>
                                   <li><a href="20782">㼮</a></li>
                                   <li><a href="20783">㼯</a></li>
                                   <li><a href="20784">㼰</a></li>
                                   <li><a href="20811">㽎</a></li>
                                   <li><a href="20822">㽡</a></li>
                                   <li><a href="20823">㽢</a></li>
                                   <li><a href="20824">㽣</a></li>
                                   <li><a href="20825">㽤</a></li>
                                   <li><a href="20837">㽰</a></li>
                                   <li><a href="20872">㾚</a></li>
                                   <li><a href="20880">㾢</a></li>
                                   <li><a href="20881">㾣</a></li>
                                   <li><a href="20882">㾤</a></li>
                                   <li><a href="20883">㾥</a></li>
                                   <li><a href="20884">㾦</a></li>
                                   <li><a href="20885">㾧</a></li>
                                   <li><a href="20886">㾨</a></li>
                                   <li><a href="20887">㾩</a></li>
                                   <li><a href="20923">㿢</a></li>
                                   <li><a href="20937">㿲</a></li>
                                   <li><a href="20938">㿳</a></li>
                                   <li><a href="20954">䀄</a></li>
                                   <li><a href="20955">䀅</a></li>
                                   <li><a href="21000">䁁</a></li>
                                   <li><a href="21002">䁃</a></li>
                                   <li><a href="21003">䁄</a></li>
                                   <li><a href="21004">䁅</a></li>
                                   <li><a href="21005">䁆</a></li>
                                   <li><a href="21006">䁇</a></li>
                                   <li><a href="21007">䁉</a></li>
                                   <li><a href="21008">䁊</a></li>
                                   <li><a href="21068">䂔</a></li>
                                   <li><a href="21099">䂷</a></li>
                                   <li><a href="21100">䂸</a></li>
                                   <li><a href="21101">䂹</a></li>
                                   <li><a href="21102">䂺</a></li>
                                   <li><a href="21103">䂻</a></li>
                                   <li><a href="21104">䂼</a></li>
                                   <li><a href="21105">䂽</a></li>
                                   <li><a href="21106">䂾</a></li>
                                   <li><a href="21107">䂿</a></li>
                                   <li><a href="21108">䃀</a></li>
                                   <li><a href="21109">䃁</a></li>
                                   <li><a href="21112">䃊</a></li>
                                   <li><a href="21158">䄋</a></li>
                                   <li><a href="21159">䄌</a></li>
                                   <li><a href="21160">䄎</a></li>
                                   <li><a href="21161">䄐</a></li>
                                   <li><a href="21162">䄑</a></li>
                                   <li><a href="21215">䅔</a></li>
                                   <li><a href="21216">䅕</a></li>
                                   <li><a href="21217">䅖</a></li>
                                   <li><a href="21218">䅗</a></li>
                                   <li><a href="21219">䅘</a></li>
                                   <li><a href="21220">䅙</a></li>
                                   <li><a href="21221">䅚</a></li>
                                   <li><a href="21222">䅛</a></li>
                                   <li><a href="21223">䅜</a></li>
                                   <li><a href="21224">䅝</a></li>
                                   <li><a href="21225">䅞</a></li>
                                   <li><a href="21230">䅦</a></li>
                                   <li><a href="21284">䆦</a></li>
                                   <li><a href="21285">䆧</a></li>
                                   <li><a href="21286">䆨</a></li>
                                   <li><a href="21287">䆩</a></li>
                                   <li><a href="21319">䇎</a></li>
                                   <li><a href="21320">䇏</a></li>
                                   <li><a href="21321">䇐</a></li>
                                   <li><a href="21322">䇑</a></li>
                                   <li><a href="21343">䇨</a></li>
                                   <li><a href="21353">䇵</a></li>
                                   <li><a href="21354">䇶</a></li>
                                   <li><a href="21355">䇷</a></li>
                                   <li><a href="21356">䇸</a></li>
                                   <li><a href="21357">䇹</a></li>
                                   <li><a href="21358">䇺</a></li>
                                   <li><a href="21359">䇻</a></li>
                                   <li><a href="21360">䇼</a></li>
                                   <li><a href="21361">䇽</a></li>
                                   <li><a href="21362">䇾</a></li>
                                   <li><a href="21363">䇿</a></li>
                                   <li><a href="21364">䈀</a></li>
                                   <li><a href="21484">䊇</a></li>
                                   <li><a href="21485">䊈</a></li>
                                   <li><a href="21486">䊉</a></li>
                                   <li><a href="21487">䊊</a></li>
                                   <li><a href="21488">䊋</a></li>
                                   <li><a href="21556">䋗</a></li>
                                   <li><a href="21562">䋟</a></li>
                                   <li><a href="21563">䋠</a></li>
                                   <li><a href="21564">䋡</a></li>
                                   <li><a href="21565">䋢</a></li>
                                   <li><a href="21566">䋤</a></li>
                                   <li><a href="21567">䋥</a></li>
                                   <li><a href="21568">䋦</a></li>
                                   <li><a href="21663">䍛</a></li>
                                   <li><a href="21664">䍜</a></li>
                                   <li><a href="21665">䍝</a></li>
                                   <li><a href="21683">䍱</a></li>
                                   <li><a href="21706">䎋</a></li>
                                   <li><a href="21707">䎌</a></li>
                                   <li><a href="21708">䎍</a></li>
                                   <li><a href="21709">䎎</a></li>
                                   <li><a href="21710">䎏</a></li>
                                   <li><a href="21728">䎤</a></li>
                                   <li><a href="21743">䎸</a></li>
                                   <li><a href="21744">䎹</a></li>
                                   <li><a href="21760">䏋</a></li>
                                   <li><a href="21809">䐍</a></li>
                                   <li><a href="21810">䐎</a></li>
                                   <li><a href="21811">䐏</a></li>
                                   <li><a href="21812">䐐</a></li>
                                   <li><a href="21813">䐒</a></li>
                                   <li><a href="21814">䐓</a></li>
                                   <li><a href="21815">䐔</a></li>
                                   <li><a href="21816">䐕</a></li>
                                   <li><a href="21817">䐖</a></li>
                                   <li><a href="21818">䐘</a></li>
                                   <li><a href="21819">䐙</a></li>
                                   <li><a href="21820">䐚</a></li>
                                   <li><a href="21821">䐛</a></li>
                                   <li><a href="21825">䐠</a></li>
                                   <li><a href="21867">䑓</a></li>
                                   <li><a href="21887">䑯</a></li>
                                   <li><a href="21888">䑰</a></li>
                                   <li><a href="21978">䓱</a></li>
                                   <li><a href="21986">䓼</a></li>
                                   <li><a href="21987">䓽</a></li>
                                   <li><a href="21988">䓾</a></li>
                                   <li><a href="21989">䔀</a></li>
                                   <li><a href="21990">䔁</a></li>
                                   <li><a href="21991">䔂</a></li>
                                   <li><a href="21992">䔃</a></li>
                                   <li><a href="21993">䔄</a></li>
                                   <li><a href="21994">䔅</a></li>
                                   <li><a href="21995">䔇</a></li>
                                   <li><a href="21996">䔉</a></li>
                                   <li><a href="21997">䔌</a></li>
                                   <li><a href="22098">䖓</a></li>
                                   <li><a href="22099">䖔</a></li>
                                   <li><a href="22100">䖕</a></li>
                                   <li><a href="22101">䖖</a></li>
                                   <li><a href="22125">䖶</a></li>
                                   <li><a href="22126">䖷</a></li>
                                   <li><a href="22127">䖹</a></li>
                                   <li><a href="22128">䖺</a></li>
                                   <li><a href="22129">䖻</a></li>
                                   <li><a href="22130">䖼</a></li>
                                   <li><a href="22131">䖽</a></li>
                                   <li><a href="22217">䘱</a></li>
                                   <li><a href="22218">䘴</a></li>
                                   <li><a href="22219">䘵</a></li>
                                   <li><a href="22220">䘶</a></li>
                                   <li><a href="22221">䘷</a></li>
                                   <li><a href="22222">䘸</a></li>
                                   <li><a href="22223">䘹</a></li>
                                   <li><a href="22224">䘻</a></li>
                                   <li><a href="22225">䘼</a></li>
                                   <li><a href="22226">䘽</a></li>
                                   <li><a href="22227">䘾</a></li>
                                   <li><a href="22228">䘿</a></li>
                                   <li><a href="22229">䙀</a></li>
                                   <li><a href="22230">䙂</a></li>
                                   <li><a href="22276">䚀</a></li>
                                   <li><a href="22277">䚁</a></li>
                                   <li><a href="22298">䚘</a></li>
                                   <li><a href="22299">䚙</a></li>
                                   <li><a href="22300">䚚</a></li>
                                   <li><a href="22350">䛔</a></li>
                                   <li><a href="22351">䛖</a></li>
                                   <li><a href="22353">䛘</a></li>
                                   <li><a href="22354">䛙</a></li>
                                   <li><a href="22355">䛚</a></li>
                                   <li><a href="22356">䛛</a></li>
                                   <li><a href="22357">䛜</a></li>
                                   <li><a href="22440">䝉</a></li>
                                   <li><a href="22472">䝰</a></li>
                                   <li><a href="22473">䝱</a></li>
                                   <li><a href="22494">䞒</a></li>
                                   <li><a href="22512">䞥</a></li>
                                   <li><a href="22513">䞦</a></li>
                                   <li><a href="22514">䞧</a></li>
                                   <li><a href="22515">䞩</a></li>
                                   <li><a href="22516">䞪</a></li>
                                   <li><a href="22577">䟮</a></li>
                                   <li><a href="22578">䟯</a></li>
                                   <li><a href="22579">䟰</a></li>
                                   <li><a href="22580">䟱</a></li>
                                   <li><a href="22639">䠷</a></li>
                                   <li><a href="22640">䠸</a></li>
                                   <li><a href="22641">䠹</a></li>
                                   <li><a href="22661">䡓</a></li>
                                   <li><a href="22662">䡔</a></li>
                                   <li><a href="22663">䡕</a></li>
                                   <li><a href="22664">䡖</a></li>
                                   <li><a href="22665">䡗</a></li>
                                   <li><a href="22702">䢅</a></li>
                                   <li><a href="22721">䢡</a></li>
                                   <li><a href="22742">䢽</a></li>
                                   <li><a href="22760">䣓</a></li>
                                   <li><a href="22761">䣔</a></li>
                                   <li><a href="22762">䣕</a></li>
                                   <li><a href="22789">䣴</a></li>
                                   <li><a href="22790">䣵</a></li>
                                   <li><a href="22791">䣶</a></li>
                                   <li><a href="22792">䣷</a></li>
                                   <li><a href="22793">䣸</a></li>
                                   <li><a href="22794">䣹</a></li>
                                   <li><a href="22831">䤡</a></li>
                                   <li><a href="22832">䤢</a></li>
                                   <li><a href="22833">䤣</a></li>
                                   <li><a href="22906">䦊</a></li>
                                   <li><a href="22914">䦒</a></li>
                                   <li><a href="22915">䦓</a></li>
                                   <li><a href="22916">䦔</a></li>
                                   <li><a href="22970">䧚</a></li>
                                   <li><a href="22971">䧛</a></li>
                                   <li><a href="22972">䧜</a></li>
                                   <li><a href="22973">䧝</a></li>
                                   <li><a href="22974">䧞</a></li>
                                   <li><a href="22975">䧟</a></li>
                                   <li><a href="22995">䧷</a></li>
                                   <li><a href="22996">䧸</a></li>
                                   <li><a href="23013">䨎</a></li>
                                   <li><a href="23056">䩂</a></li>
                                   <li><a href="23057">䩃</a></li>
                                   <li><a href="23070">䩓</a></li>
                                   <li><a href="23071">䩔</a></li>
                                   <li><a href="23072">䩕</a></li>
                                   <li><a href="23073">䩖</a></li>
                                   <li><a href="23074">䩗</a></li>
                                   <li><a href="23075">䩘</a></li>
                                   <li><a href="23132">䪞</a></li>
                                   <li><a href="23140">䪩</a></li>
                                   <li><a href="23150">䪳</a></li>
                                   <li><a href="23209">䫺</a></li>
                                   <li><a href="23210">䫻</a></li>
                                   <li><a href="23211">䫼</a></li>
                                   <li><a href="23212">䫽</a></li>
                                   <li><a href="23246">䬦</a></li>
                                   <li><a href="23247">䬧</a></li>
                                   <li><a href="23248">䬨</a></li>
                                   <li><a href="23249">䬩</a></li>
                                   <li><a href="23301">䭵</a></li>
                                   <li><a href="23302">䭶</a></li>
                                   <li><a href="23458">䰳</a></li>
                                   <li><a href="23523">䲥</a></li>
                                   <li><a href="23656">䵝</a></li>
                                   <li><a href="23890">亷</a></li>
                                   <li><a href="23906">嗂</a></li>
                                   <li><a href="23909">嗢</a></li>
                                   <li><a href="23952">媺</a></li>
                                   <li><a href="23953">嬅</a></li>
                                   <li><a href="23973">幙</a></li>
                                   <li><a href="23982">廋</a></li>
                                   <li><a href="23989">徫</a></li>
                                   <li><a href="23990">徬</a></li>
                                   <li><a href="24000">楖</a></li>
                                   <li><a href="24022">溓</a></li>
                                   <li><a href="24023">溿</a></li>
                                   <li><a href="24024">滛</a></li>
                                   <li><a href="24026">漭</a></li>
                                   <li><a href="24064">牐</a></li>
                                   <li><a href="24096">粦</a></li>
                                   <li><a href="24120">蓅</a></li>
                                   <li><a href="24137">裺</a></li>
                                   <li><a href="24151">遀</a></li>
                                   <li><a href="24161">頋</a></li>
                                   <li><a href="24192">㔴</a></li>
                                   <li><a href="24197">㗖</a></li>
                                   <li><a href="24227">㬈</a></li>
                                   <li><a href="24228">㬊</a></li>
                                   <li><a href="24245">㴛</a></li>
                                   <li><a href="24251">㷔</a></li>
                                   <li><a href="24264">䁈</a></li>
                                   <li><a href="24265">䁐</a></li>
                                   <li><a href="24273">䄒</a></li>
                                   <li><a href="24307">䔆</a></li>
                                   <li><a href="24308">䔊</a></li>
                                   <li><a href="24348">䪵</a></li>
                                   <li><a href="24351">䬪</a></li>
                                   <li><a href="24374">彚</a></li>
                                   <li><a href="24384">瑥</a></li>
                                   <li><a href="24393">㪜</a></li>
                                   <li><a href="24688">兿</a></li>
                                   <li><a href="24741">厁</a></li>
                                   <li><a href="24913">啷</a></li>
                                   <li><a href="24921">嗪</a></li>
                                   <li><a href="24922">嗫</a></li>
                                   <li><a href="24923">嗬</a></li>
                                   <li><a href="24942">嗮</a></li>
                                   <li><a href="24943">嗯</a></li>
                                   <li><a href="24944">嗰</a></li>
                                   <li><a href="24945">嗲</a></li>
                                   <li><a href="24946">嗳</a></li>
                                   <li><a href="24947">嗴</a></li>
                                   <li><a href="25010">塈</a></li>
                                   <li><a href="25011">塪</a></li>
                                   <li><a href="25012">塬</a></li>
                                   <li><a href="25014">塮</a></li>
                                   <li><a href="25015">塯</a></li>
                                   <li><a href="25062">嫑</a></li>
                                   <li><a href="25063">嫒</a></li>
                                   <li><a href="25064">嫓</a></li>
                                   <li><a href="25065">嫔</a></li>
                                   <li><a href="25138">嵵</a></li>
                                   <li><a href="25224">彂</a></li>
                                   <li><a href="25255">慑</a></li>
                                   <li><a href="25336">摄</a></li>
                                   <li><a href="25337">摅</a></li>
                                   <li><a href="25338">摆</a></li>
                                   <li><a href="25339">摇</a></li>
                                   <li><a href="25340">摈</a></li>
                                   <li><a href="25341">摊</a></li>
                                   <li><a href="25342">撶</a></li>
                                   <li><a href="25362">暅</a></li>
                                   <li><a href="25401">椫</a></li>
                                   <li><a href="25403">椭</a></li>
                                   <li><a href="25406">榃</a></li>
                                   <li><a href="25412">榇</a></li>
                                   <li><a href="25413">䝲</a></li>
                                   <li><a href="25416">榈</a></li>
                                   <li><a href="25420">榉</a></li>
                                   <li><a href="25443">殚</a></li>
                                   <li><a href="25551">雾</a></li>
                                   <li><a href="25566">滟</a></li>
                                   <li><a href="25568">滠</a></li>
                                   <li><a href="25571">滢</a></li>
                                   <li><a href="25573">滤</a></li>
                                   <li><a href="25575">滦</a></li>
                                   <li><a href="25576">滧</a></li>
                                   <li><a href="25578">滨</a></li>
                                   <li><a href="25579">滩</a></li>
                                   <li><a href="25648">煵</a></li>
                                   <li><a href="25649">煶</a></li>
                                   <li><a href="25651">煷</a></li>
                                   <li><a href="25653">煸</a></li>
                                   <li><a href="25781">獇</a></li>
                                   <li><a href="25819">瘆</a></li>
                                   <li><a href="25893">碜</a></li>
                                   <li><a href="25912">禆</a></li>
                                   <li><a href="25929">稤</a></li>
                                   <li><a href="25930">稥</a></li>
                                   <li><a href="25939">窧</a></li>
                                   <li><a href="25950">筻</a></li>
                                   <li><a href="25986">粵</a></li>
                                   <li><a href="26209">龯</a></li>
                                   <li><a href="26231">鼌</a></li>
                                   <li><a href="26280">耢</a></li>
                                   <li><a href="26320">腼</a></li>
                                   <li><a href="26332">艈</a></li>
                                   <li><a href="26489">㔈</a></li>
                                   <li><a href="26494">蓗</a></li>
                                   <li><a href="26495">㔲</a></li>
                                   <li><a href="26496">蓛</a></li>
                                   <li><a href="26501">蓤</a></li>
                                   <li><a href="26502">蓥</a></li>
                                   <li><a href="26503">㕏</a></li>
                                   <li><a href="26545">蜖</a></li>
                                   <li><a href="26546">蜗</a></li>
                                   <li><a href="26579">誊</a></li>
                                   <li><a href="26618">㗝</a></li>
                                   <li><a href="26662">㙜</a></li>
                                   <li><a href="26833">趓</a></li>
                                   <li><a href="26843">跸</a></li>
                                   <li><a href="26845">跺</a></li>
                                   <li><a href="26846">跻</a></li>
                                   <li><a href="26884">㜔</a></li>
                                   <li><a href="26893">㝨</a></li>
                                   <li><a href="27089">鄓</a></li>
                                   <li><a href="27096">酰</a></li>
                                   <li><a href="27097">酱</a></li>
                                   <li><a href="27111">鉳</a></li>
                                   <li><a href="27113">鉴</a></li>
                                   <li><a href="27117">銰</a></li>
                                   <li><a href="27158">㨌</a></li>
                                   <li><a href="27162">㨩</a></li>
                                   <li><a href="27166">㨬</a></li>
                                   <li><a href="27196">㬄</a></li>
                                   <li><a href="27203">㬺</a></li>
                                   <li><a href="27231">㮠</a></li>
                                   <li><a href="27232">㮢</a></li>
                                   <li><a href="27312">㴹</a></li>
                                   <li><a href="27313">㴺</a></li>
                                   <li><a href="27314">㴻</a></li>
                                   <li><a href="27342">㷗</a></li>
                                   <li><a href="27343">㷚</a></li>
                                   <li><a href="27344">㷛</a></li>
                                   <li><a href="27345">㷜</a></li>
                                   <li><a href="27346">㷝</a></li>
                                   <li><a href="27347">㷞</a></li>
                                   <li><a href="27360">㹈</a></li>
                                   <li><a href="27365">㺍</a></li>
                                   <li><a href="27386">㻢</a></li>
                                   <li><a href="27387">㻣</a></li>
                                   <li><a href="27389">㻥</a></li>
                                   <li><a href="27390">㻦</a></li>
                                   <li><a href="27482">䣗</a></li>
                                   <li><a href="27499">䟳</a></li>
                                   <li><a href="27500">䟲</a></li>
                                   <li><a href="27544">䖾</a></li>
                                   <li><a href="27580">䎥</a></li>
                                   <li><a href="27602">䊌</a></li>
                                   <li><a href="27614">䅟</a></li>
                                   <li><a href="27630">䃇</a></li>
                                   <li><a href="27631">䃆</a></li>
                                   <li><a href="27633">䃄</a></li>
                                   <li><a href="27634">䃃</a></li>
                                   <li><a href="27667">榋</a></li>
                                   <li><a href="27668">榌</a></li>
                                   <li><a href="27704">𣗄</a></li>
                                   <li><a href="27721">𠺞</a></li>
                                   <li><a href="27776">𠌫</a></li>
                                   <li><a href="27790">𠺕</a></li>
                                   <li><a href="27791">𠹭</a></li>
                                   <li><a href="27792">𠹤</a></li>
                                   <li><a href="27805">𡏄</a></li>
                                   <li><a href="27863">𣖔</a></li>
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

     <?php wp_footer() ?>