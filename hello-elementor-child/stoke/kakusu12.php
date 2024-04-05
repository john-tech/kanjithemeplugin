<?php
/*
 * Template Name: kakusu12
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
               <h1 class="ttl_main">１２画の漢字一覧（漢検級順）</h1>

               <p>総画数１２画の漢字の一覧です。<br>
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
                                   <option value="#" selected>１２画</option>
                                   <option value="kakusu13">１３画</option>
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
                              <li><a href="bkakusu12">部首別順</a></li>
                              <li><a href="ckakusu12">読み順</a></li>
                         </ul>
                         <ul class="search_menu2">
                              <li><a href="#parts10">１０級</a></li>
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
                         <div class="parts_box" id="parts10">
                              <h3 class="ttl_while"><a href="kyu10">漢字検定１０級（小学校１年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/040">森</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts09">
                              <h3 class="ttl_while"><a href="kyu09">漢字検定９級（小学校２年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/083">雲</a></li>
                                   <li><a class="color1" href="kanji/095">絵</a></li>
                                   <li><a class="color1" href="kanji/100">間</a></li>
                                   <li><a class="color1" href="kanji/161">場</a></li>
                                   <li><a class="color1" href="kanji/172">晴</a></li>
                                   <li><a class="color1" href="kanji/191">朝</a></li>
                                   <li><a class="color1" href="kanji/201">答</a></li>
                                   <li><a class="color1" href="kanji/203">道</a></li>
                                   <li><a class="color1" href="kanji/210">買</a></li>
                                   <li><a class="color1" href="kanji/214">番</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts08">
                              <h3 class="ttl_while"><a href="kyu08">漢字検定８級（小学校３年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/249">飲</a></li>
                                   <li><a class="color1" href="kanji/250">運</a></li>
                                   <li><a class="color1" href="kanji/256">温</a></li>
                                   <li><a class="color1" href="kanji/258">開</a></li>
                                   <li><a class="color1" href="kanji/260">階</a></li>
                                   <li><a class="color1" href="kanji/263">寒</a></li>
                                   <li><a class="color1" href="kanji/267">期</a></li>
                                   <li><a class="color1" href="kanji/285">軽</a></li>
                                   <li><a class="color1" href="kanji/291">湖</a></li>
                                   <li><a class="color1" href="kanji/295">港</a></li>
                                   <li><a class="color1" href="kanji/302">歯</a></li>
                                   <li><a class="color1" href="kanji/322">集</a></li>
                                   <li><a class="color1" href="kanji/328">暑</a></li>
                                   <li><a class="color1" href="kanji/335">勝</a></li>
                                   <li><a class="color1" href="kanji/337">植</a></li>
                                   <li><a class="color1" href="kanji/360">短</a></li>
                                   <li><a class="color1" href="kanji/363">着</a></li>
                                   <li><a class="color1" href="kanji/378">等</a></li>
                                   <li><a class="color1" href="kanji/379">登</a></li>
                                   <li><a class="color1" href="kanji/380">湯</a></li>
                                   <li><a class="color1" href="kanji/384">童</a></li>
                                   <li><a class="color1" href="kanji/395">悲</a></li>
                                   <li><a class="color1" href="kanji/399">筆</a></li>
                                   <li><a class="color1" href="kanji/422">遊</a></li>
                                   <li><a class="color1" href="kanji/425">葉</a></li>
                                   <li><a class="color1" href="kanji/426">陽</a></li>
                                   <li><a class="color1" href="kanji/430">落</a></li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts07">
                              <h3 class="ttl_while"><a href="kyu07">漢字検定７級（小学校４年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/460">街</a></li>
                                   <li><a class="color1" href="kanji/461">覚</a></li>
                                   <li><a class="color1" href="kanji/480">給</a></li>
                                   <li><a class="color1" href="kanji/486">極</a></li>
                                   <li><a class="color1" href="kanji/492">景</a></li>
                                   <li><a class="color1" href="kanji/494">結</a></li>
                                   <li><a class="color1" href="507">最</a></li>
                                   <li><a class="color1" href="516">散</a></li>
                                   <li><a class="color1" href="532">順</a></li>
                                   <li><a class="color1" href="536">焼</a></li>
                                   <li><a class="color1" href="563">隊</a></li>
                                   <li><a class="color1" href="565">達</a></li>
                                   <li><a class="color1" href="587">然</a></li>
                                   <li><a class="color1" href="591">博</a></li>
                                   <li><a class="color1" href="592">飯</a></li>
                                   <li><a class="color1" href="602">無</a></li>
                                   <li><a class="color1" href="615">満</a></li>
                                   <li><a class="color1" href="626">量</a></li>
                                   <li><a class="color1" href="659">賀</a></li>
                                   <li><a class="color1" href="797">富</a></li>
                                   <li><a class="color1" href="1711">滋</a>
                                   </li>
                                   <li><a class="color1" href="1952">媛</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts06">
                              <h3 class="ttl_while"><a href="kyu06">漢字検定６級（小学校５年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/469">喜</a></li>
                                   <li><a class="color1" href="539">象</a></li>
                                   <li><a class="color1" href="569">貯</a></li>
                                   <li><a class="color1" href="594">費</a></li>
                                   <li><a class="color1" href="645">営</a></li>
                                   <li><a class="color1" href="655">過</a></li>
                                   <li><a class="color1" href="687">検</a></li>
                                   <li><a class="color1" href="692">減</a></li>
                                   <li><a class="color1" href="734">証</a></li>
                                   <li><a class="color1" href="749">税</a></li>
                                   <li><a class="color1" href="754">絶</a></li>
                                   <li><a class="color1" href="764">測</a></li>
                                   <li><a class="color1" href="765">属</a></li>
                                   <li><a class="color1" href="767">貸</a></li>
                                   <li><a class="color1" href="774">程</a></li>
                                   <li><a class="color1" href="775">提</a></li>
                                   <li><a class="color1" href="778">統</a></li>
                                   <li><a class="color1" href="793">備</a></li>
                                   <li><a class="color1" href="795">評</a></li>
                                   <li><a class="color1" href="801">復</a></li>
                                   <li><a class="color1" href="809">報</a></li>
                                   <li><a class="color1" href="2135">貿</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts05">
                              <h3 class="ttl_while"><a href="kyu05">漢字検定５級（小学校６年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="836">割</a></li>
                                   <li><a class="color1" href="843">揮</a></li>
                                   <li><a class="color1" href="845">貴</a></li>
                                   <li><a class="color1" href="851">筋</a></li>
                                   <li><a class="color1" href="852">勤</a></li>
                                   <li><a class="color1" href="853">敬</a></li>
                                   <li><a class="color1" href="880">裁</a></li>
                                   <li><a class="color1" href="881">策</a></li>
                                   <li><a class="color1" href="887">詞</a></li>
                                   <li><a class="color1" href="898">衆</a></li>
                                   <li><a class="color1" href="899">就</a></li>
                                   <li><a class="color1" href="927">善</a></li>
                                   <li><a class="color1" href="929">装</a></li>
                                   <li><a class="color1" href="932">創</a></li>
                                   <li><a class="color1" href="936">尊</a></li>
                                   <li><a class="color1" href="952">痛</a></li>
                                   <li><a class="color1" href="969">晩</a></li>
                                   <li><a class="color1" href="978">補</a></li>
                                   <li><a class="color1" href="982">棒</a></li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts04">
                              <h3 class="ttl_while"><a href="kyu04">漢字検定４級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1003">握</a>
                                   </li>
                                   <li><a class="color1" href="1007">偉</a>
                                   </li>
                                   <li><a class="color1" href="1018">越</a>
                                   </li>
                                   <li><a class="color1" href="1019">援</a>
                                   </li>
                                   <li><a class="color1" href="1025">奥</a>
                                   </li>
                                   <li><a class="color1" href="1051">幾</a>
                                   </li>
                                   <li><a class="color1" href="1062">距</a>
                                   </li>
                                   <li><a class="color1" href="1063">御</a>
                                   </li>
                                   <li><a class="color1" href="1082">堅</a>
                                   </li>
                                   <li><a class="color1" href="1086">圏</a>
                                   </li>
                                   <li><a class="color1" href="1101">項</a>
                                   </li>
                                   <li><a class="color1" href="1114">紫</a>
                                   </li>
                                   <li><a class="color1" href="1120">煮</a>
                                   </li>
                                   <li><a class="color1" href="1143">畳</a>
                                   </li>
                                   <li><a class="color1" href="1146">殖</a>
                                   </li>
                                   <li><a class="color1" href="1157">尋</a>
                                   </li>
                                   <li><a class="color1" href="1167">訴</a>
                                   </li>
                                   <li><a class="color1" href="1175">替</a>
                                   </li>
                                   <li><a class="color1" href="1184">弾</a>
                                   </li>
                                   <li><a class="color1" href="1186">遅</a>
                                   </li>
                                   <li><a class="color1" href="1196">堤</a>
                                   </li>
                                   <li><a class="color1" href="1203">渡</a>
                                   </li>
                                   <li><a class="color1" href="1210">塔</a>
                                   </li>
                                   <li><a class="color1" href="1220">鈍</a>
                                   </li>
                                   <li><a class="color1" href="1256">普</a>
                                   </li>
                                   <li><a class="color1" href="1259">幅</a>
                                   </li>
                                   <li><a class="color1" href="1273">傍</a>
                                   </li>
                                   <li><a class="color1" href="1274">帽</a>
                                   </li>
                                   <li><a class="color1" href="1290">雄</a>
                                   </li>
                                   <li><a class="color1" href="1300">絡</a>
                                   </li>
                                   <li><a class="color1" href="1318">惑</a>
                                   </li>
                                   <li><a class="color1" href="1319">腕</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts03">
                              <h3 class="ttl_while"><a href="kyu03">漢字検定３級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1322">詠</a>
                                   </li>
                                   <li><a class="color1" href="1352">敢</a>
                                   </li>
                                   <li><a class="color1" href="1355">換</a>
                                   </li>
                                   <li><a class="color1" href="1356">喚</a>
                                   </li>
                                   <li><a class="color1" href="1360">棋</a>
                                   </li>
                                   <li><a class="color1" href="1366">欺</a>
                                   </li>
                                   <li><a class="color1" href="1369">喫</a>
                                   </li>
                                   <li><a class="color1" href="1379">遇</a>
                                   </li>
                                   <li><a class="color1" href="1391">雇</a>
                                   </li>
                                   <li><a class="color1" href="1402">硬</a>
                                   </li>
                                   <li><a class="color1" href="1406">慌</a>
                                   </li>
                                   <li><a class="color1" href="1407">絞</a>
                                   </li>
                                   <li><a class="color1" href="1428">軸</a>
                                   </li>
                                   <li><a class="color1" href="1429">湿</a>
                                   </li>
                                   <li><a class="color1" href="1439">晶</a>
                                   </li>
                                   <li><a class="color1" href="1440">掌</a>
                                   </li>
                                   <li><a class="color1" href="1442">焦</a>
                                   </li>
                                   <li><a class="color1" href="1457">遂</a>
                                   </li>
                                   <li><a class="color1" href="1461">随</a>
                                   </li>
                                   <li><a class="color1" href="1465">婿</a>
                                   </li>
                                   <li><a class="color1" href="1480">葬</a>
                                   </li>
                                   <li><a class="color1" href="1507">超</a>
                                   </li>
                                   <li><a class="color1" href="1520">痘</a>
                                   </li>
                                   <li><a class="color1" href="1535">蛮</a>
                                   </li>
                                   <li><a class="color1" href="1550">募</a>
                                   </li>
                                   <li><a class="color1" href="1581">揚</a>
                                   </li>
                                   <li><a class="color1" href="1582">揺</a>
                                   </li>
                                   <li><a class="color1" href="1596">裂</a>
                                   </li>
                                   <li><a class="color1" href="1601">廊</a>
                                   </li>
                                   <li><a class="color1" href="1604">湾</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02j">
                              <h3 class="ttl_while"><a href="kyu02j">漢字検定準２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1619">渦</a>
                                   </li>
                                   <li><a class="color1" href="1639">棺</a>
                                   </li>
                                   <li><a class="color1" href="1641">堪</a>
                                   </li>
                                   <li><a class="color1" href="1642">款</a>
                                   </li>
                                   <li><a class="color1" href="1645">閑</a>
                                   </li>
                                   <li><a class="color1" href="1660">暁</a>
                                   </li>
                                   <li><a class="color1" href="1663">琴</a>
                                   </li>
                                   <li><a class="color1" href="1666">隅</a>
                                   </li>
                                   <li><a class="color1" href="1697">詐</a>
                                   </li>
                                   <li><a class="color1" href="1704">酢</a>
                                   </li>
                                   <li><a class="color1" href="1707">傘</a>
                                   </li>
                                   <li><a class="color1" href="1735">循</a>
                                   </li>
                                   <li><a class="color1" href="1743">硝</a>
                                   </li>
                                   <li><a class="color1" href="1752">粧</a>
                                   </li>
                                   <li><a class="color1" href="1755">詔</a>
                                   </li>
                                   <li><a class="color1" href="1764">診</a>
                                   </li>
                                   <li><a class="color1" href="1791">疎</a>
                                   </li>
                                   <li><a class="color1" href="1798">喪</a>
                                   </li>
                                   <li><a class="color1" href="1805">堕</a>
                                   </li>
                                   <li><a class="color1" href="1806">惰</a>
                                   </li>
                                   <li><a class="color1" href="1810">棚</a>
                                   </li>
                                   <li><a class="color1" href="1823">塚</a>
                                   </li>
                                   <li><a class="color1" href="1838">搭</a>
                                   </li>
                                   <li><a class="color1" href="1839">筒</a>
                                   </li>
                                   <li><a class="color1" href="1841">棟</a>
                                   </li>
                                   <li><a class="color1" href="1855">廃</a>
                                   </li>
                                   <li><a class="color1" href="1858">媒</a>
                                   </li>
                                   <li><a class="color1" href="1868">扉</a>
                                   </li>
                                   <li><a class="color1" href="1880">雰</a>
                                   </li>
                                   <li><a class="color1" href="1884">塀</a>
                                   </li>
                                   <li><a class="color1" href="1888">遍</a>
                                   </li>
                                   <li><a class="color1" href="1912">愉</a>
                                   </li>
                                   <li><a class="color1" href="1915">裕</a>
                                   </li>
                                   <li><a class="color1" href="1917">猶</a>
                                   </li>
                                   <li><a class="color1" href="1923">痢</a>
                                   </li>
                                   <li><a class="color1" href="1926">硫</a>
                                   </li>
                                   <li><a class="color1" href="1933">塁</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02">
                              <h3 class="ttl_while"><a href="kyu02">漢字検定２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1941">嵐</a>
                                   </li>
                                   <li><a class="color1" href="1944">椅</a>
                                   </li>
                                   <li><a class="color1" href="1969">葛</a>
                                   </li>
                                   <li><a class="color1" href="2000">喉</a>
                                   </li>
                                   <li><a class="color1" href="2031">須</a>
                                   </li>
                                   <li><a class="color1" href="2047">痩</a>
                                   </li>
                                   <li><a class="color1" href="2060">貼</a>
                                   </li>
                                   <li><a class="color1" href="2063">椎</a>
                                   </li>
                                   <li><a class="color1" href="2091">斑</a>
                                   </li>
                                   <li><a class="color1" href="2115">喩</a>
                                   </li>
                                   <li><a class="color1" href="2116">湧</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01j">
                              <h3 class="ttl_while"><a href="kyu01j">漢字検定準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="2140">蛙</a></li>
                                   <li><a class="color2" href="2142">渥</a>
                                   </li>
                                   <li><a class="color2" href="2157">粥</a>
                                   </li>
                                   <li><a class="color2" href="2178">瑛</a>
                                   </li>
                                   <li><a class="color2" href="2183">堰</a>
                                   </li>
                                   <li><a class="color2" href="2186">淵</a>
                                   </li>
                                   <li><a class="color2" href="2221">凱</a>
                                   </li>
                                   <li><a class="color2" href="2223">堺</a>
                                   </li>
                                   <li><a class="color2" href="2247">筈</a>
                                   </li>
                                   <li><a class="color2" href="2263">萱</a>
                                   </li>
                                   <li><a class="color2" href="2270">雁</a>
                                   </li>
                                   <li><a class="color2" href="2279">稀</a>
                                   </li>
                                   <li><a class="color2" href="2282">葵</a>
                                   </li>
                                   <li><a href="2304">韮</a></li>
                                   <li><a href="2308">渠</a></li>
                                   <li><a class="color2" href="2317">卿</a>
                                   </li>
                                   <li><a class="color2" href="2319">喬</a>
                                   </li>
                                   <li><a class="color2" href="2331">欽</a>
                                   </li>
                                   <li><a href="2341">鈎</a></li>
                                   <li><a class="color2" href="2343">寓</a>
                                   </li>
                                   <li><a class="color2" href="2345">腔</a>
                                   </li>
                                   <li><a class="color2" href="2346">喰</a>
                                   </li>
                                   <li><a class="color2" href="2359">戟</a>
                                   </li>
                                   <li><a class="color2" href="2364">喧</a>
                                   </li>
                                   <li><a class="color2" href="2367">硯</a>
                                   </li>
                                   <li><a class="color2" href="2368">絢</a>
                                   </li>
                                   <li><a href="2375">壺</a></li>
                                   <li><a href="2381">菰</a></li>
                                   <li><a href="2413">蛤</a></li>
                                   <li><a class="color2" href="2444">犀</a>
                                   </li>
                                   <li><a class="color2" href="2469">斯</a>
                                   </li>
                                   <li><a href="2476">覗</a></li>
                                   <li><a href="2488">蛭</a></li>
                                   <li><a class="color2" href="2492">惹</a>
                                   </li>
                                   <li><a href="2499">蛛</a></li>
                                   <li><a href="2509">揖</a></li>
                                   <li><a class="color2" href="2516">萩</a>
                                   </li>
                                   <li><a class="color2" href="2517">葺</a>
                                   </li>
                                   <li><a class="color2" href="2529">竣</a>
                                   </li>
                                   <li><a class="color2" href="2538">閏</a>
                                   </li>
                                   <li><a class="color2" href="2544">疏</a>
                                   </li>
                                   <li><a href="2548">黍</a></li>
                                   <li><a class="color2" href="2566">湘</a>
                                   </li>
                                   <li><a class="color2" href="2567">甥</a>
                                   </li>
                                   <li><a class="color2" href="2592">粟</a>
                                   </li>
                                   <li><a href="2608">靱</a></li>
                                   <li><a href="2609">靭</a></li>
                                   <li><a class="color2" href="2612">厨</a>
                                   </li>
                                   <li><a href="2624">椙</a></li>
                                   <li><a class="color2" href="2626">棲</a>
                                   </li>
                                   <li><a class="color2" href="2629">貰</a>
                                   </li>
                                   <li><a class="color2" href="2635">揃</a>
                                   </li>
                                   <li><a class="color2" href="2657">惣</a>
                                   </li>
                                   <li><a class="color2" href="2660">湊</a>
                                   </li>
                                   <li><a href="2668">葱</a></li>
                                   <li><a class="color2" href="2676">巽</a>
                                   </li>
                                   <li><a href="2681">詑</a></li>
                                   <li><a class="color2" href="2714">湛</a>
                                   </li>
                                   <li><a class="color2" href="2719">智</a>
                                   </li>
                                   <li><a class="color2" href="2722">筑</a>
                                   </li>
                                   <li><a class="color2" href="2725">註</a>
                                   </li>
                                   <li><a class="color2" href="2734">喋</a>
                                   </li>
                                   <li><a class="color2" href="2739">脹</a>
                                   </li>
                                   <li><a class="color2" href="2779">堵</a>
                                   </li>
                                   <li><a href="2780">菟</a></li>
                                   <li><a class="color2" href="2798">董</a>
                                   </li>
                                   <li><a class="color2" href="2807">敦</a>
                                   </li>
                                   <li><a class="color2" href="2814">琶</a>
                                   </li>
                                   <li><a href="2819">牌</a></li>
                                   <li><a href="2833">硲</a></li>
                                   <li><a href="2836">溌</a></li>
                                   <li><a href="2837">筏</a></li>
                                   <li><a class="color2" href="2850">斐</a>
                                   </li>
                                   <li><a class="color2" href="2857">琵</a>
                                   </li>
                                   <li><a href="2858">弼</a></li>
                                   <li><a href="2869">斌</a></li>
                                   <li><a class="color2" href="2880">葡</a>
                                   </li>
                                   <li><a class="color2" href="2889">焚</a>
                                   </li>
                                   <li><a href="2934">棉</a></li>
                                   <li><a href="2938">悶</a></li>
                                   <li><a class="color2" href="2960">遥</a>
                                   </li>
                                   <li><a class="color2" href="2971">裡</a>
                                   </li>
                                   <li><a href="2973">葎</a></li>
                                   <li><a class="color2" href="2983">椋</a>
                                   </li>
                                   <li><a class="color2" href="2992">琳</a>
                                   </li>
                                   <li><a href="2996">屡</a></li>
                                   <li><a class="color2" href="3020">禄</a>
                                   </li>
                                   <li><a class="color2" href="3023">隈</a>
                                   </li>
                                   <li><a class="color2" href="3025">椀</a>
                                   </li>
                                   <li><a href="3033">葢</a></li>
                                   <li><a class="color2" href="6448">焰</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01">
                              <h3 class="ttl_while"><a href="kyu01">漢字検定１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="3038">棊</a></li>
                                   <li><a href="3042">筍</a></li>
                                   <li><a href="3124">傀</a></li>
                                   <li><a href="3125">傚</a></li>
                                   <li><a href="3126">傅</a></li>
                                   <li><a href="3181">剴</a></li>
                                   <li><a href="3214">厥</a></li>
                                   <li><a href="3266">啣</a></li>
                                   <li><a href="3274">喙</a></li>
                                   <li><a href="3275">喀</a></li>
                                   <li><a href="3276">喊</a></li>
                                   <li><a href="3277">喟</a></li>
                                   <li><a href="3278">啻</a></li>
                                   <li><a href="3279">啾</a></li>
                                   <li><a href="3280">喘</a></li>
                                   <li><a href="3281">喞</a></li>
                                   <li><a href="3282">啼</a></li>
                                   <li><a href="3283">喃</a></li>
                                   <li><a href="3284">喇</a></li>
                                   <li><a href="3285">喨</a></li>
                                   <li><a href="3345">堙</a></li>
                                   <li><a href="3346">堝</a></li>
                                   <li><a href="3347">堡</a></li>
                                   <li><a href="3371">奠</a></li>
                                   <li><a href="3372">奢</a></li>
                                   <li><a href="3397">媚</a></li>
                                   <li><a href="3401">嫂</a></li>
                                   <li><a href="3425">孳</a></li>
                                   <li><a href="3431">寔</a></li>
                                   <li><a href="3432">寐</a></li>
                                   <li><a href="3444">屠</a></li>
                                   <li><a href="3445">孱</a></li>
                                   <li><a href="3465">嵌</a></li>
                                   <li><a href="3466">嵒</a></li>
                                   <li><a href="3467">嵎</a></li>
                                   <li><a href="3468">嵋</a></li>
                                   <li><a href="3490">幄</a></li>
                                   <li><a href="3492">幀</a></li>
                                   <li><a href="3498">幇</a></li>
                                   <li><a href="3504">廁</a></li>
                                   <li><a href="3505">廂</a></li>
                                   <li><a href="3518">弑</a></li>
                                   <li><a href="3526">彭</a></li>
                                   <li><a href="3535">徨</a></li>
                                   <li><a href="3586">愕</a></li>
                                   <li><a href="3588">惶</a></li>
                                   <li><a href="3590">愀</a></li>
                                   <li><a href="3591">惴</a></li>
                                   <li><a class="color2" href="3592">惺</a>
                                   </li>
                                   <li><a href="3593">愃</a></li>
                                   <li><a href="3594">惻</a></li>
                                   <li><a href="3596">愎</a></li>
                                   <li><a href="3648">戞</a></li>
                                   <li><a href="3695">掣</a></li>
                                   <li><a href="3701">掾</a></li>
                                   <li><a href="3702">揩</a></li>
                                   <li><a href="3703">揀</a></li>
                                   <li><a href="3704">揆</a></li>
                                   <li><a href="3705">揣</a></li>
                                   <li><a href="3706">揉</a></li>
                                   <li><a href="3707">揶</a></li>
                                   <li><a href="3708">揄</a></li>
                                   <li><a href="3787">敞</a></li>
                                   <li><a href="3788">敝</a></li>
                                   <li><a href="3793">黹</a></li>
                                   <li><a href="3846">毯</a></li>
                                   <li><a href="3847">毳</a></li>
                                   <li><a href="3901">朞</a></li>
                                   <li><a href="3921">晰</a></li>
                                   <li><a href="3945">閔</a></li>
                                   <li><a href="4049">蛞</a></li>
                                   <li><a href="4050">蛬</a></li>
                                   <li><a href="4051">蛩</a></li>
                                   <li><a href="4052">蛯</a></li>
                                   <li><a href="4053">蛔</a></li>
                                   <li><a href="4054">蛟</a></li>
                                   <li><a href="4129">棘</a></li>
                                   <li><a href="4130">椏</a></li>
                                   <li><a href="4131">椁</a></li>
                                   <li><a href="4132">棗</a></li>
                                   <li><a href="4133">棠</a></li>
                                   <li><a href="4134">椈</a></li>
                                   <li><a href="4135">椄</a></li>
                                   <li><a href="4136">棕</a></li>
                                   <li><a href="4138">椒</a></li>
                                   <li><a href="4139">椚</a></li>
                                   <li><a href="4140">棍</a></li>
                                   <li><a href="4141">棹</a></li>
                                   <li><a href="4142">棣</a></li>
                                   <li><a href="4230">腋</a></li>
                                   <li><a href="4231">脾</a></li>
                                   <li><a href="4232">腓</a></li>
                                   <li><a href="4233">腆</a></li>
                                   <li><a href="4234">腑</a></li>
                                   <li><a href="4256">跏</a></li>
                                   <li><a href="4257">跖</a></li>
                                   <li><a href="4258">跌</a></li>
                                   <li><a href="4259">跚</a></li>
                                   <li><a href="4260">跛</a></li>
                                   <li><a href="4261">跋</a></li>
                                   <li><a href="4363">颪</a></li>
                                   <li><a href="4388">渙</a></li>
                                   <li><a href="4389">渣</a></li>
                                   <li><a href="4390">湲</a></li>
                                   <li><a href="4391">渭</a></li>
                                   <li><a href="4392">湮</a></li>
                                   <li><a href="4393">湫</a></li>
                                   <li><a class="color2" href="4394">渾</a>
                                   </li>
                                   <li><a href="4395">湍</a></li>
                                   <li><a href="4396">渺</a></li>
                                   <li><a href="4397">渫</a></li>
                                   <li><a href="4398">游</a></li>
                                   <li><a href="4399">溂</a></li>
                                   <li><a href="4400">渟</a></li>
                                   <li><a href="4401">湎</a></li>
                                   <li><a href="4402">渝</a></li>
                                   <li><a href="4403">湃</a></li>
                                   <li><a href="4460">軻</a></li>
                                   <li><a href="4461">軫</a></li>
                                   <li><a href="4462">軼</a></li>
                                   <li><a href="4487">馮</a></li>
                                   <li><a href="4488">馭</a></li>
                                   <li><a href="4527">筌</a></li>
                                   <li><a href="4528">筅</a></li>
                                   <li><a href="4529">筐</a></li>
                                   <li><a href="4545">筝</a></li>
                                   <li><a href="4553">赧</a></li>
                                   <li><a href="4564">欹</a></li>
                                   <li><a class="color2" href="4620">琥</a>
                                   </li>
                                   <li><a href="4621">琲</a></li>
                                   <li><a href="4622">琺</a></li>
                                   <li><a href="4683">釿</a></li>
                                   <li><a href="4684">鈞</a></li>
                                   <li><a href="4685">鈕</a></li>
                                   <li><a href="4686">鈑</a></li>
                                   <li><a href="4687">鈔</a></li>
                                   <li><a href="4760">絖</a></li>
                                   <li><a href="4761">絎</a></li>
                                   <li><a href="4762">絣</a></li>
                                   <li><a href="4763">絨</a></li>
                                   <li><a href="4764">絏</a></li>
                                   <li><a href="4765">絮</a></li>
                                   <li><a href="4832">犂</a></li>
                                   <li><a href="4834">犇</a></li>
                                   <li><a href="4840">酣</a></li>
                                   <li><a href="4841">酥</a></li>
                                   <li><a href="4858">聒</a></li>
                                   <li><a href="4882">牋</a></li>
                                   <li><a href="4913">焜</a></li>
                                   <li><a href="4914">焙</a></li>
                                   <li><a href="4952">詛</a></li>
                                   <li><a href="4953">詈</a></li>
                                   <li><a href="4954">訶</a></li>
                                   <li><a href="4955">詁</a></li>
                                   <li><a href="4956">詆</a></li>
                                   <li><a href="4957">詒</a></li>
                                   <li><a href="4974">瓠</a></li>
                                   <li><a href="5042">裙</a></li>
                                   <li><a href="5079">覃</a></li>
                                   <li><a href="5082">靫</a></li>
                                   <li><a href="5115">猴</a></li>
                                   <li><a href="5116">猩</a></li>
                                   <li><a href="5117">猯</a></li>
                                   <li><a href="5118">猥</a></li>
                                   <li><a href="5157">睇</a></li>
                                   <li><a href="5191">隋</a></li>
                                   <li><a href="5192">隍</a></li>
                                   <li><a href="5206">鄂</a></li>
                                   <li><a href="5226">痙</a></li>
                                   <li><a href="5227">痞</a></li>
                                   <li><a href="5228">痣</a></li>
                                   <li><a href="5262">粢</a></li>
                                   <li><a href="5263">粤</a></li>
                                   <li><a href="5264">粨</a></li>
                                   <li><a href="5317">辜</a></li>
                                   <li><a href="5366">甦</a></li>
                                   <li><a href="5382">萼</a></li>
                                   <li><a href="5383">葩</a></li>
                                   <li><a href="5384">葷</a></li>
                                   <li><a href="5385">萸</a></li>
                                   <li><a href="5386">萵</a></li>
                                   <li><a href="5387">葯</a></li>
                                   <li><a href="5388">葭</a></li>
                                   <li><a href="5389">葆</a></li>
                                   <li><a href="5410">蒂</a></li>
                                   <li><a href="5451">畭</a></li>
                                   <li><a href="5454">畴</a></li>
                                   <li><a href="5457">覘</a></li>
                                   <li><a class="color2" href="5466">釉</a>
                                   </li>
                                   <li><a class="color2" href="5468">皓</a>
                                   </li>
                                   <li><a href="5469">皖</a></li>
                                   <li><a href="5473">貂</a></li>
                                   <li><a href="5480">耋</a></li>
                                   <li><a href="5481">貽</a></li>
                                   <li><a href="5484">賁</a></li>
                                   <li><a href="5517">逵</a></li>
                                   <li><a href="5545">竢</a></li>
                                   <li><a href="5546">竦</a></li>
                                   <li><a href="5555">稈</a></li>
                                   <li><a href="5556">稍</a></li>
                                   <li><a href="5572">趁</a></li>
                                   <li><a href="5575">舒</a></li>
                                   <li><a href="5577">觝</a></li>
                                   <li><a href="5600">皴</a></li>
                                   <li><a class="color2" href="5606">翔</a>
                                   </li>
                                   <li><a href="5607">翕</a></li>
                                   <li><a href="5617">窖</a></li>
                                   <li><a href="5618">窘</a></li>
                                   <li><a href="5773">厦</a></li>
                                   <li><a href="6498">腁</a></li>
                                   <li><a href="6501">筓</a></li>
                                   <li><a href="6508">畬</a></li>
                                   <li><a href="6510">孶</a></li>
                                   <li><a href="6513">逬</a></li>
                                   <li><a href="6536">晳</a></li>
                                   <li><a href="8369">跎</a></li>
                                   <li><a href="10040">裎</a></li>
                                   <li><a href="11130">愒</a></li>
                                   <li><a href="12337">喑</a></li>
                                   <li><a href="12348">焠</a></li>
                                   <li><a href="12351">猋</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts0101j">
                              <h3 class="ttl_while"><a href="kyu0101j">漢字検定１級 / 準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="4251">曾</a>
                                   </li>
                                   <li><a href="5667">勞</a></li>
                                   <li><a href="5749">發</a></li>
                                   <li><a class="color2" href="5762">單</a>
                                   </li>
                                   <li><a class="color2" href="5765">堯</a>
                                   </li>
                                   <li><a class="color2" href="5790">惠</a>
                                   </li>
                                   <li><a href="5800">圍</a></li>
                                   <li><a href="5802">壹</a></li>
                                   <li><a class="color2" href="5888">萬</a>
                                   </li>
                                   <li><a href="5889">貳</a></li>
                                   <li><a href="5906">殘</a></li>
                                   <li><a href="5909">絲</a></li>
                                   <li><a class="color2" href="5964">惡</a>
                                   </li>
                                   <li><a class="color2" href="6040">盜</a>
                                   </li>
                                   <li><a class="color2" href="6061">剩</a>
                                   </li>
                                   <li><a href="6087">惱</a></li>
                                   <li><a href="6122">棧</a></li>
                                   <li><a href="6137">壻</a></li>
                                   <li><a class="color2" href="6187">搜</a>
                                   </li>
                                   <li><a href="6189">插</a></li>
                                   <li><a href="6230">殼</a></li>
                                   <li><a class="color2" href="6248">爲</a>
                                   </li>
                                   <li><a href="6261">畫</a></li>
                                   <li><a class="color2" href="6367">猪</a>
                                   </li>
                                   <li><a class="color2" href="6372">都</a>
                                   </li>
                                   <li><a class="color2" href="6389">渚</a>
                                   </li>
                                   <li><a class="color2" href="6392">琢</a>
                                   </li>
                                   <li><a class="color2" href="6410">著</a>
                                   </li>
                                   <li><a class="color2" href="6411">視</a>
                                   </li>
                                   <li><a class="color2" href="6416">逸</a>
                                   </li>
                                   <li><a class="color2" href="6429">黑</a>
                                   </li>
                                   <li><a class="color2" href="6436">揭</a>
                                   </li>
                                   <li><a class="color2" href="6446">渴</a>
                                   </li>
                                   <li><a class="color2" href="6458">虛</a>
                                   </li>
                                   <li><a class="color2" href="6466">黃</a>
                                   </li>
                                   <li><a href="26248">晴</a></li>
                                   <li><a href="26346">喝</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts">
                              <h3 class="ttl_while">漢字検定対象外</h3>
                              <ul class="search_parts">
                                   <li><a href="5680">躰</a></li>
                                   <li><a href="5685">椢</a></li>
                                   <li><a href="5716">硴</a></li>
                                   <li><a href="5718">粭</a></li>
                                   <li><a href="5720">逹</a></li>
                                   <li><a href="5827">悳</a></li>
                                   <li><a href="5871">椥</a></li>
                                   <li><a href="5887">葫</a></li>
                                   <li><a href="5907">殕</a></li>
                                   <li><a href="5945">鈬</a></li>
                                   <li><a href="5965">愡</a></li>
                                   <li><a href="5986">葹</a></li>
                                   <li><a href="5987">葮</a></li>
                                   <li><a href="5988">蒄</a></li>
                                   <li><a href="5996">鈩</a></li>
                                   <li><a href="6049">逶</a></li>
                                   <li><a href="6074">凖</a></li>
                                   <li><a href="6085">嵜</a></li>
                                   <li><a href="6121">棔</a></li>
                                   <li><a href="6123">棯</a></li>
                                   <li><a href="6124">椨</a></li>
                                   <li><a href="6125">椪</a></li>
                                   <li><a href="6126">椣</a></li>
                                   <li><a href="6140">閖</a></li>
                                   <li><a href="6141">椡</a></li>
                                   <li><a href="6209">暃</a></li>
                                   <li><a href="6210">暎</a></li>
                                   <li><a href="6213">椦</a></li>
                                   <li><a href="6214">棡</a></li>
                                   <li><a href="6215">椌</a></li>
                                   <li><a href="6216">棆</a></li>
                                   <li><a href="6234">湟</a></li>
                                   <li><a href="6235">湶</a></li>
                                   <li><a href="6236">渤</a></li>
                                   <li><a href="6271">窗</a></li>
                                   <li><a href="6273">粫</a></li>
                                   <li><a href="6274">粡</a></li>
                                   <li><a href="6300">萪</a></li>
                                   <li><a href="6602">傡</a></li>
                                   <li><a href="6700">亁</a></li>
                                   <li><a href="6818">髠</a></li>
                                   <li><a href="6884">䰲</a></li>
                                   <li><a href="7084">鳦</a></li>
                                   <li><a href="7282">靬</a></li>
                                   <li><a href="7283">靮</a></li>
                                   <li><a href="7353">弽</a></li>
                                   <li><a href="7371">頇</a></li>
                                   <li><a href="7417">傎</a></li>
                                   <li><a href="7454">飦</a></li>
                                   <li><a href="7455">飧</a></li>
                                   <li><a href="7457">飥</a></li>
                                   <li><a href="7470">湌</a></li>
                                   <li><a href="7541">鈗</a></li>
                                   <li><a href="7542">鈝</a></li>
                                   <li><a href="7543">鈆</a></li>
                                   <li><a href="7544">鈥</a></li>
                                   <li><a href="7545">鈣</a></li>
                                   <li><a href="7546">鈘</a></li>
                                   <li><a href="7547">鈌</a></li>
                                   <li><a href="7548">鈅</a></li>
                                   <li><a href="7549">鈐</a></li>
                                   <li><a href="7550">鈜</a></li>
                                   <li><a href="7551">鈧</a></li>
                                   <li><a href="7552">鈤</a></li>
                                   <li><a href="7553">鈊</a></li>
                                   <li><a href="7554">鈓</a></li>
                                   <li><a href="7555">鈒</a></li>
                                   <li><a href="7556">鈦</a></li>
                                   <li><a href="7557">鈄</a></li>
                                   <li><a href="7558">鈀</a></li>
                                   <li><a href="7559">鈨</a></li>
                                   <li><a href="7560">鈇</a></li>
                                   <li><a href="7561">鈈</a></li>
                                   <li><a href="7562">鈖</a></li>
                                   <li><a href="7563">釽</a></li>
                                   <li><a href="7564">鈁</a></li>
                                   <li><a href="7621">鈃</a></li>
                                   <li><a href="7868">閒</a></li>
                                   <li><a href="7869">閎</a></li>
                                   <li><a href="7870">閌</a></li>
                                   <li><a href="7871">閍</a></li>
                                   <li><a href="7898">閗</a></li>
                                   <li><a href="7940">隂</a></li>
                                   <li><a href="7945">隆</a></li>
                                   <li><a href="7946">陻</a></li>
                                   <li><a href="7947">堦</a></li>
                                   <li><a href="7948">陿</a></li>
                                   <li><a href="7949">隉</a></li>
                                   <li><a href="7950">陼</a></li>
                                   <li><a href="7951">陾</a></li>
                                   <li><a href="7952">隄</a></li>
                                   <li><a href="7954">隃</a></li>
                                   <li><a href="7975">雈</a></li>
                                   <li><a href="7994">雯</a></li>
                                   <li><a href="7995">雱</a></li>
                                   <li><a href="8038">䂓</a></li>
                                   <li><a href="8043">覕</a></li>
                                   <li><a href="8102">詍</a></li>
                                   <li><a href="8103">詇</a></li>
                                   <li><a href="8104">詎</a></li>
                                   <li><a href="8105">詓</a></li>
                                   <li><a href="8106">詘</a></li>
                                   <li><a href="8107">詗</a></li>
                                   <li><a href="8108">詃</a></li>
                                   <li><a href="8109">訹</a></li>
                                   <li><a href="8110">訷</a></li>
                                   <li><a href="8111">詀</a></li>
                                   <li><a href="8112">訵</a></li>
                                   <li><a href="8113">詝</a></li>
                                   <li><a href="8115">䛏</a></li>
                                   <li><a href="8116">詄</a></li>
                                   <li><a href="8117">詉</a></li>
                                   <li><a href="8118">詜</a></li>
                                   <li><a href="8119">詖</a></li>
                                   <li><a href="8120">詅</a></li>
                                   <li><a href="8126">訽</a></li>
                                   <li><a href="8237">䜭</a></li>
                                   <li><a href="8267">猳</a></li>
                                   <li><a href="8277">豾</a></li>
                                   <li><a href="8282">貃</a></li>
                                   <li><a href="8294">貺</a></li>
                                   <li><a href="8295">貹</a></li>
                                   <li><a href="8339">趄</a></li>
                                   <li><a href="8340">趈</a></li>
                                   <li><a href="8341">趂</a></li>
                                   <li><a href="8366">跇</a></li>
                                   <li><a href="8367">跔</a></li>
                                   <li><a href="8368">跙</a></li>
                                   <li><a href="8370">跆</a></li>
                                   <li><a href="8371">跅</a></li>
                                   <li><a href="8372">䟡</a></li>
                                   <li><a href="8373">䟣</a></li>
                                   <li><a href="8374">跕</a></li>
                                   <li><a href="8375">跈</a></li>
                                   <li><a href="8376">䟫</a></li>
                                   <li><a href="8377">跊</a></li>
                                   <li><a href="8378">䟦</a></li>
                                   <li><a href="8379">跗</a></li>
                                   <li><a href="8380">跑</a></li>
                                   <li><a href="8486">軶</a></li>
                                   <li><a href="8487">軮</a></li>
                                   <li><a href="8489">軹</a></li>
                                   <li><a href="8490">軺</a></li>
                                   <li><a href="8491">軵</a></li>
                                   <li><a href="8492">軷</a></li>
                                   <li><a href="8493">軬</a></li>
                                   <li><a href="8494">軨</a></li>
                                   <li><a href="8545">辝</a></li>
                                   <li><a href="8590">逷</a></li>
                                   <li><a href="8592">逳</a></li>
                                   <li><a href="8593">逭</a></li>
                                   <li><a href="8594">逪</a></li>
                                   <li><a href="8595">逴</a></li>
                                   <li><a href="8596">逨</a></li>
                                   <li><a href="8597">逯</a></li>
                                   <li><a href="8606">逩</a></li>
                                   <li><a href="8607">㴑</a></li>
                                   <li><a href="8675">鄅</a></li>
                                   <li><a href="8676">鄆</a></li>
                                   <li><a href="8677">郾</a></li>
                                   <li><a href="8678">鄈</a></li>
                                   <li><a href="8679">鄄</a></li>
                                   <li><a href="8681">鄃</a></li>
                                   <li><a href="8682">郿</a></li>
                                   <li><a href="8735">酤</a></li>
                                   <li><a href="8736">酡</a></li>
                                   <li><a href="8737">酟</a></li>
                                   <li><a href="8782">㙒</a></li>
                                   <li><a href="8804">筇</a></li>
                                   <li><a href="8806">筁</a></li>
                                   <li><a href="8808">筀</a></li>
                                   <li><a href="8809">筕</a></li>
                                   <li><a href="8810">筊</a></li>
                                   <li><a href="8812">筎</a></li>
                                   <li><a href="8813">䇮</a></li>
                                   <li><a href="8816">笿</a></li>
                                   <li><a href="8829">笟</a></li>
                                   <li><a href="8838">䇳</a></li>
                                   <li><a href="8912">盙</a></li>
                                   <li><a href="8956">粠</a></li>
                                   <li><a href="8959">粞</a></li>
                                   <li><a href="8960">稉</a></li>
                                   <li><a href="9004">絍</a></li>
                                   <li><a href="9023">䋖</a></li>
                                   <li><a href="9024">絪</a></li>
                                   <li><a href="9025">絓</a></li>
                                   <li><a href="9026">絯</a></li>
                                   <li><a href="9027">絙</a></li>
                                   <li><a href="9028">絜</a></li>
                                   <li><a href="9029">絭</a></li>
                                   <li><a href="9030">絝</a></li>
                                   <li><a href="9031">絗</a></li>
                                   <li><a href="9032">絑</a></li>
                                   <li><a href="9033">絕</a></li>
                                   <li><a href="9034">絟</a></li>
                                   <li><a href="9035">絰</a></li>
                                   <li><a href="9037">絧</a></li>
                                   <li><a href="9038">絥</a></li>
                                   <li><a href="9039">絫</a></li>
                                   <li><a href="9068">紪</a></li>
                                   <li><a href="9073">揔</a></li>
                                   <li><a href="9086">絚</a></li>
                                   <li><a href="9152">䋝</a></li>
                                   <li><a href="9158">缿</a></li>
                                   <li><a href="9159">缾</a></li>
                                   <li><a href="9177">罥</a></li>
                                   <li><a href="9178">罤</a></li>
                                   <li><a href="9179">罦</a></li>
                                   <li><a href="9206">羡</a></li>
                                   <li><a href="9207">羢</a></li>
                                   <li><a href="9263">耠</a></li>
                                   <li><a href="9282">聏</a></li>
                                   <li><a href="9284">聠</a></li>
                                   <li><a href="9294">胔</a></li>
                                   <li><a href="9295">胾</a></li>
                                   <li><a href="9299">臰</a></li>
                                   <li><a href="9302">臵</a></li>
                                   <li><a href="9303">臸</a></li>
                                   <li><a href="9304">臶</a></li>
                                   <li><a href="9305">臷</a></li>
                                   <li><a href="9312">舃</a></li>
                                   <li><a href="9313">舄</a></li>
                                   <li><a href="9332">舼</a></li>
                                   <li><a href="9456">茻</a></li>
                                   <li><a href="9492">葊</a></li>
                                   <li><a href="9512">葅</a></li>
                                   <li><a href="9531">葳</a></li>
                                   <li><a href="9532">葜</a></li>
                                   <li><a href="9533">萿</a></li>
                                   <li><a href="9534">葀</a></li>
                                   <li><a href="9535">葌</a></li>
                                   <li><a href="9536">菣</a></li>
                                   <li><a href="9537">葪</a></li>
                                   <li><a href="9538">萲</a></li>
                                   <li><a href="9542">葟</a></li>
                                   <li><a href="9543">葒</a></li>
                                   <li><a href="9544">葓</a></li>
                                   <li><a href="9545">葈</a></li>
                                   <li><a href="9546">葸</a></li>
                                   <li><a href="9547">葘</a></li>
                                   <li><a href="9549">葇</a></li>
                                   <li><a href="9550">蒁</a></li>
                                   <li><a href="9551">葙</a></li>
                                   <li><a href="9552">葚</a></li>
                                   <li><a href="9553">葰</a></li>
                                   <li><a href="9554">葠</a></li>
                                   <li><a href="9556">葴</a></li>
                                   <li><a href="9557">蒅</a></li>
                                   <li><a href="9558">莭</a></li>
                                   <li><a href="9559">葏</a></li>
                                   <li><a href="9560">葥</a></li>
                                   <li><a href="9561">葄</a></li>
                                   <li><a href="9562">塟</a></li>
                                   <li><a href="9563">葼</a></li>
                                   <li><a href="9564">葤</a></li>
                                   <li><a href="9565">葶</a></li>
                                   <li><a href="9566">葖</a></li>
                                   <li><a href="9567">葞</a></li>
                                   <li><a href="9568">萯</a></li>
                                   <li><a href="9569">葍</a></li>
                                   <li><a href="9570">葐</a></li>
                                   <li><a href="9571">萹</a></li>
                                   <li><a href="9572">葑</a></li>
                                   <li><a href="9573">葧</a></li>
                                   <li><a href="9575">葽</a></li>
                                   <li><a href="9746">虝</a></li>
                                   <li><a href="9810">蛦</a></li>
                                   <li><a href="9811">蛜</a></li>
                                   <li><a href="9813">蛕</a></li>
                                   <li><a href="9814">蛒</a></li>
                                   <li><a href="9815">蛫</a></li>
                                   <li><a href="9816">蛣</a></li>
                                   <li><a href="9817">蛐</a></li>
                                   <li><a href="9818">蚈</a></li>
                                   <li><a href="9819">䖵</a></li>
                                   <li><a href="9820">䖪</a></li>
                                   <li><a href="9821">蛥</a></li>
                                   <li><a href="9822">䖳</a></li>
                                   <li><a href="9823">蛗</a></li>
                                   <li><a href="9825">蛑</a></li>
                                   <li><a href="9826">蛧</a></li>
                                   <li><a href="9828">蛘</a></li>
                                   <li><a href="9829">蛠</a></li>
                                   <li><a href="9830">蛚</a></li>
                                   <li><a href="9941">䖮</a></li>
                                   <li><a href="9980">衉</a></li>
                                   <li><a href="9981">衈</a></li>
                                   <li><a href="9989">衕</a></li>
                                   <li><a href="9996">褁</a></li>
                                   <li><a href="10034">裌</a></li>
                                   <li><a href="10035">裓</a></li>
                                   <li><a href="10036">裍</a></li>
                                   <li><a href="10037">裋</a></li>
                                   <li><a href="10038">裑</a></li>
                                   <li><a href="10039">裞</a></li>
                                   <li><a href="10163">琬</a></li>
                                   <li><a href="10164">琰</a></li>
                                   <li><a href="10165">琯</a></li>
                                   <li><a href="10166">琦</a></li>
                                   <li><a href="10167">琪</a></li>
                                   <li><a href="10168">琚</a></li>
                                   <li><a href="10170">琹</a></li>
                                   <li><a href="10171">琨</a></li>
                                   <li><a href="10172">琖</a></li>
                                   <li><a href="10173">琩</a></li>
                                   <li><a href="10174">琮</a></li>
                                   <li><a href="10175">琤</a></li>
                                   <li><a href="10176">琱</a></li>
                                   <li><a href="10177">琛</a></li>
                                   <li><a href="10178">珷</a></li>
                                   <li><a href="10180">琫</a></li>
                                   <li><a href="10181">琭</a></li>
                                   <li><a href="10243">琼</a></li>
                                   <li><a href="10275">瓻</a></li>
                                   <li><a href="10276">瓺</a></li>
                                   <li><a href="10277">瓼</a></li>
                                   <li><a href="10292">甤</a></li>
                                   <li><a href="10295">甯</a></li>
                                   <li><a href="10318">畮</a></li>
                                   <li><a href="10320">畱</a></li>
                                   <li><a href="10322">畲</a></li>
                                   <li><a href="10323">畯</a></li>
                                   <li><a href="10326">㽟</a></li>
                                   <li><a href="10370">㾓</a></li>
                                   <li><a href="10371">痗</a></li>
                                   <li><a href="10372">痧</a></li>
                                   <li><a href="10373">痤</a></li>
                                   <li><a href="10374">痠</a></li>
                                   <li><a href="10375">痟</a></li>
                                   <li><a href="10376">痜</a></li>
                                   <li><a href="10378">痡</a></li>
                                   <li><a href="10379">痝</a></li>
                                   <li><a href="10466">臯</a></li>
                                   <li><a href="10469">皕</a></li>
                                   <li><a href="10522">睂</a></li>
                                   <li><a href="10532">䀵</a></li>
                                   <li><a href="10554">睋</a></li>
                                   <li><a href="10555">睆</a></li>
                                   <li><a href="10556">睅</a></li>
                                   <li><a href="10557">睎</a></li>
                                   <li><a href="10558">睍</a></li>
                                   <li><a href="10559">睊</a></li>
                                   <li><a href="10560">睏</a></li>
                                   <li><a href="10561">睃</a></li>
                                   <li><a href="10562">䀹</a></li>
                                   <li><a href="10563">睄</a></li>
                                   <li><a href="10623">矞</a></li>
                                   <li><a href="10624">矟</a></li>
                                   <li><a href="10631">矬</a></li>
                                   <li><a href="10677">硪</a></li>
                                   <li><a href="10678">确</a></li>
                                   <li><a href="10679">硞</a></li>
                                   <li><a href="10680">硤</a></li>
                                   <li><a href="10681">硜</a></li>
                                   <li><a href="10682">硡</a></li>
                                   <li><a href="10683">硣</a></li>
                                   <li><a href="10684">硨</a></li>
                                   <li><a href="10685">硥</a></li>
                                   <li><a href="10687">硠</a></li>
                                   <li><a href="10797">祲</a></li>
                                   <li><a href="10822">禼</a></li>
                                   <li><a href="10848">稅</a></li>
                                   <li><a href="10849">稊</a></li>
                                   <li><a href="10850">稌</a></li>
                                   <li><a href="10851">䅏</a></li>
                                   <li><a href="10852">稃</a></li>
                                   <li><a href="10853">稆</a></li>
                                   <li><a href="10854">稂</a></li>
                                   <li><a href="10857">稇</a></li>
                                   <li><a href="10944">竧</a></li>
                                   <li><a href="10975">悹</a></li>
                                   <li><a href="10977">惎</a></li>
                                   <li><a href="10978">惢</a></li>
                                   <li><a href="10979">惉</a></li>
                                   <li><a href="10980">惄</a></li>
                                   <li><a href="10990">惥</a></li>
                                   <li><a href="11066">愘</a></li>
                                   <li><a href="11093">愑</a></li>
                                   <li><a href="11105">惽</a></li>
                                   <li><a href="11114">㥫</a></li>
                                   <li><a href="11126">愔</a></li>
                                   <li><a href="11127">惲</a></li>
                                   <li><a href="11128">愅</a></li>
                                   <li><a href="11131">愌</a></li>
                                   <li><a href="11132">愜</a></li>
                                   <li><a href="11134">㥥</a></li>
                                   <li><a href="11135">惸</a></li>
                                   <li><a href="11136">愢</a></li>
                                   <li><a href="11137">愖</a></li>
                                   <li><a href="11138">愞</a></li>
                                   <li><a href="11140">惾</a></li>
                                   <li><a href="11142">惵</a></li>
                                   <li><a href="11143">愓</a></li>
                                   <li><a href="11144">愊</a></li>
                                   <li><a href="11145">惼</a></li>
                                   <li><a href="11146">愐</a></li>
                                   <li><a href="11147">愠</a></li>
                                   <li><a href="11158">愺</a></li>
                                   <li><a href="11181">惮</a></li>
                                   <li><a href="11224">㦸</a></li>
                                   <li><a href="11244">扊</a></li>
                                   <li><a href="11251">孯</a></li>
                                   <li><a href="11349">揷</a></li>
                                   <li><a href="11354">揑</a></li>
                                   <li><a href="11395">揠</a></li>
                                   <li><a href="11396">揜</a></li>
                                   <li><a href="11397">揢</a></li>
                                   <li><a href="11398">揵</a></li>
                                   <li><a href="11399">揈</a></li>
                                   <li><a href="11400">揸</a></li>
                                   <li><a href="11401">揌</a></li>
                                   <li><a href="11402">揓</a></li>
                                   <li><a href="11403">揪</a></li>
                                   <li><a href="11404">揲</a></li>
                                   <li><a href="11405">揳</a></li>
                                   <li><a href="11406">㨎</a></li>
                                   <li><a href="11407">揎</a></li>
                                   <li><a href="11408">揕</a></li>
                                   <li><a href="11409">揥</a></li>
                                   <li><a href="11410">揁</a></li>
                                   <li><a href="11412">揨</a></li>
                                   <li><a href="11413">揬</a></li>
                                   <li><a href="11414">揹</a></li>
                                   <li><a href="11415">掽</a></li>
                                   <li><a href="11430">搽</a></li>
                                   <li><a href="11491">㨔</a></li>
                                   <li><a href="11540">攲</a></li>
                                   <li><a href="11559">敧</a></li>
                                   <li><a href="11560">敜</a></li>
                                   <li><a href="11561">敠</a></li>
                                   <li><a href="11562">敟</a></li>
                                   <li><a href="11574">敩</a></li>
                                   <li><a href="11581">斝</a></li>
                                   <li><a href="11590">斮</a></li>
                                   <li><a href="11610">旐</a></li>
                                   <li><a href="11618">既</a></li>
                                   <li><a href="11687">晻</a></li>
                                   <li><a href="11688">晹</a></li>
                                   <li><a href="11689">晼</a></li>
                                   <li><a href="11690">暀</a></li>
                                   <li><a href="11691">晷</a></li>
                                   <li><a href="11693">晵</a></li>
                                   <li><a href="11694">晬</a></li>
                                   <li><a href="11695">晭</a></li>
                                   <li><a href="11696">晿</a></li>
                                   <li><a href="11698">晱</a></li>
                                   <li><a href="11699">晫</a></li>
                                   <li><a href="11700">晪</a></li>
                                   <li><a href="11702">晾</a></li>
                                   <li><a href="11812">衇</a></li>
                                   <li><a href="11820">祳</a></li>
                                   <li><a href="11836">腌</a></li>
                                   <li><a href="11837">腒</a></li>
                                   <li><a href="11838">䐃</a></li>
                                   <li><a href="11839">䏿</a></li>
                                   <li><a href="11840">腃</a></li>
                                   <li><a href="11841">䐊</a></li>
                                   <li><a href="11842">䐆</a></li>
                                   <li><a href="11843">䐈</a></li>
                                   <li><a href="11844">腍</a></li>
                                   <li><a href="11845">脽</a></li>
                                   <li><a href="11846">脺</a></li>
                                   <li><a href="11847">腊</a></li>
                                   <li><a href="11848">腇</a></li>
                                   <li><a href="11849">腅</a></li>
                                   <li><a href="11850">腄</a></li>
                                   <li><a href="11851">朜</a></li>
                                   <li><a href="11853">腗</a></li>
                                   <li><a href="11854">脿</a></li>
                                   <li><a href="11855">脼</a></li>
                                   <li><a href="11859">朠</a></li>
                                   <li><a href="12008">棅</a></li>
                                   <li><a href="12057">棞</a></li>
                                   <li><a href="12079">棃</a></li>
                                   <li><a href="12083">棭</a></li>
                                   <li><a href="12084">棪</a></li>
                                   <li><a href="12085">棜</a></li>
                                   <li><a href="12086">棵</a></li>
                                   <li><a href="12088">椐</a></li>
                                   <li><a href="12089">椇</a></li>
                                   <li><a href="12090">棨</a></li>
                                   <li><a href="12091">棬</a></li>
                                   <li><a href="12092">棝</a></li>
                                   <li><a href="12093">椃</a></li>
                                   <li><a href="12094">棌</a></li>
                                   <li><a href="12095">棤</a></li>
                                   <li><a href="12096">棸</a></li>
                                   <li><a href="12098">棰</a></li>
                                   <li><a href="12100">棈</a></li>
                                   <li><a href="12101">椊</a></li>
                                   <li><a href="12102">椓</a></li>
                                   <li><a href="12103">椆</a></li>
                                   <li><a href="12104">棽</a></li>
                                   <li><a href="12105">椗</a></li>
                                   <li><a href="12106">㮇</a></li>
                                   <li><a href="12107">棖</a></li>
                                   <li><a href="12108">棏</a></li>
                                   <li><a href="12109">棷</a></li>
                                   <li><a href="12110">棑</a></li>
                                   <li><a href="12111">椧</a></li>
                                   <li><a href="12112">棥</a></li>
                                   <li><a href="12113">棐</a></li>
                                   <li><a href="12114">棼</a></li>
                                   <li><a href="12116">椑</a></li>
                                   <li><a href="12118">棓</a></li>
                                   <li><a href="12119">椖</a></li>
                                   <li><a href="12120">棫</a></li>
                                   <li><a href="12121">棶</a></li>
                                   <li><a href="12122">棱</a></li>
                                   <li><a href="12123">棙</a></li>
                                   <li><a href="12135">楛</a></li>
                                   <li><a href="12140">楉</a></li>
                                   <li><a href="12153">㮈</a></li>
                                   <li><a href="12154">﨓</a></li>
                                   <li><a href="12393">傠</a></li>
                                   <li><a href="12395">蒍</a></li>
                                   <li><a href="12398">㮊</a></li>
                                   <li><a href="12483">㑴</a></li>
                                   <li><a href="12532">徤</a></li>
                                   <li><a href="12560">傊</a></li>
                                   <li><a href="12561">傟</a></li>
                                   <li><a href="12562">傢</a></li>
                                   <li><a href="12563">傕</a></li>
                                   <li><a href="12564">傄</a></li>
                                   <li><a href="12566">傒</a></li>
                                   <li><a href="12567">傔</a></li>
                                   <li><a href="12568">傆</a></li>
                                   <li><a href="12570">傐</a></li>
                                   <li><a href="12571">傞</a></li>
                                   <li><a href="12572">傓</a></li>
                                   <li><a href="12573">傃</a></li>
                                   <li><a href="12574">傖</a></li>
                                   <li><a href="12575">傁</a></li>
                                   <li><a href="12576">傣</a></li>
                                   <li><a href="12577">傏</a></li>
                                   <li><a href="12578">傌</a></li>
                                   <li><a href="12579">僃</a></li>
                                   <li><a href="12582">傜</a></li>
                                   <li><a href="12583">傛</a></li>
                                   <li><a href="12584">傈</a></li>
                                   <li><a href="12655">傧</a></li>
                                   <li><a href="12671">傥</a></li>
                                   <li><a href="12686">兠</a></li>
                                   <li><a href="12687">兟</a></li>
                                   <li><a href="12694">圎</a></li>
                                   <li><a href="12708">㓃</a></li>
                                   <li><a href="12716">凒</a></li>
                                   <li><a href="12717">凔</a></li>
                                   <li><a href="12718">凕</a></li>
                                   <li><a href="12719">凓</a></li>
                                   <li><a href="12769">㱕</a></li>
                                   <li><a href="12772">㓻</a></li>
                                   <li><a href="12791">㓷</a></li>
                                   <li><a href="12858">勜</a></li>
                                   <li><a href="12859">欿</a></li>
                                   <li><a href="12865">欻</a></li>
                                   <li><a href="12886">嵗</a></li>
                                   <li><a href="12901">殔</a></li>
                                   <li><a href="12902">殗</a></li>
                                   <li><a href="12904">勛</a></li>
                                   <li><a href="12905">殛</a></li>
                                   <li><a href="12907">殙</a></li>
                                   <li><a href="12938">殽</a></li>
                                   <li><a href="12944">㔩</a></li>
                                   <li><a href="12946">匑</a></li>
                                   <li><a href="12965">㚟</a></li>
                                   <li><a href="12975">毱</a></li>
                                   <li><a href="13035">亴</a></li>
                                   <li><a href="13082">偨</a></li>
                                   <li><a href="13087">傂</a></li>
                                   <li><a href="13089">傉</a></li>
                                   <li><a href="13090">傗</a></li>
                                   <li><a href="13091">傝</a></li>
                                   <li><a href="13139">凲</a></li>
                                   <li><a href="13197">厤</a></li>
                                   <li><a href="13198">厧</a></li>
                                   <li><a href="13212">叅</a></li>
                                   <li><a href="13398">啙</a></li>
                                   <li><a href="13408">啺</a></li>
                                   <li><a href="13409">啽</a></li>
                                   <li><a href="13410">啿</a></li>
                                   <li><a href="13411">喁</a></li>
                                   <li><a href="13412">喂</a></li>
                                   <li><a href="13413">喅</a></li>
                                   <li><a href="13414">喆</a></li>
                                   <li><a href="13415">喈</a></li>
                                   <li><a href="13416">喌</a></li>
                                   <li><a href="13418">喎</a></li>
                                   <li><a href="13419">喐</a></li>
                                   <li><a href="13420">喒</a></li>
                                   <li><a href="13421">喓</a></li>
                                   <li><a href="13422">喔</a></li>
                                   <li><a href="13423">喕</a></li>
                                   <li><a href="13424">喖</a></li>
                                   <li><a href="13425">喗</a></li>
                                   <li><a href="13426">喛</a></li>
                                   <li><a href="13427">喠</a></li>
                                   <li><a href="13429">喢</a></li>
                                   <li><a href="13430">喣</a></li>
                                   <li><a href="13431">喤</a></li>
                                   <li><a href="13432">喥</a></li>
                                   <li><a href="13433">喦</a></li>
                                   <li><a href="13434">喭</a></li>
                                   <li><a href="13436">喱</a></li>
                                   <li><a href="13437">喲</a></li>
                                   <li><a href="13438">喳</a></li>
                                   <li><a href="13439">喴</a></li>
                                   <li><a href="13441">喸</a></li>
                                   <li><a href="13442">喼</a></li>
                                   <li><a href="13455">嗏</a></li>
                                   <li><a href="13624">圌</a></li>
                                   <li><a href="13778">堗</a></li>
                                   <li><a href="13779">堘</a></li>
                                   <li><a href="13780">堚</a></li>
                                   <li><a href="13781">堛</a></li>
                                   <li><a href="13782">堜</a></li>
                                   <li><a href="13783">堞</a></li>
                                   <li><a href="13784">堠</a></li>
                                   <li><a href="13785">堢</a></li>
                                   <li><a href="13786">堣</a></li>
                                   <li><a href="13787">堥</a></li>
                                   <li><a href="13788">堧</a></li>
                                   <li><a href="13789">堨</a></li>
                                   <li><a href="13790">堩</a></li>
                                   <li><a href="13791">堫</a></li>
                                   <li><a href="13792">堬</a></li>
                                   <li><a href="13793">堭</a></li>
                                   <li><a href="13794">堮</a></li>
                                   <li><a href="13795">堲</a></li>
                                   <li><a href="13796">堳</a></li>
                                   <li><a href="13797">堶</a></li>
                                   <li><a href="13798">堷</a></li>
                                   <li><a href="13799">堸</a></li>
                                   <li><a href="13800">堹</a></li>
                                   <li><a href="13801">堻</a></li>
                                   <li><a href="13802">堼</a></li>
                                   <li><a href="13803">堾</a></li>
                                   <li><a href="13804">堿</a></li>
                                   <li><a href="13906">夡</a></li>
                                   <li><a href="13929">奡</a></li>
                                   <li><a href="13930">奤</a></li>
                                   <li><a href="14089">婜</a></li>
                                   <li><a href="14095">婣</a></li>
                                   <li><a href="14107">婷</a></li>
                                   <li><a href="14108">婸</a></li>
                                   <li><a href="14109">婹</a></li>
                                   <li><a href="14110">婺</a></li>
                                   <li><a href="14111">婻</a></li>
                                   <li><a href="14113">婽</a></li>
                                   <li><a href="14114">婾</a></li>
                                   <li><a href="14115">媀</a></li>
                                   <li><a href="14117">媂</a></li>
                                   <li><a href="14118">媃</a></li>
                                   <li><a href="14119">媄</a></li>
                                   <li><a href="14120">媅</a></li>
                                   <li><a href="14121">媆</a></li>
                                   <li><a href="14122">媇</a></li>
                                   <li><a href="14123">媈</a></li>
                                   <li><a href="14124">媉</a></li>
                                   <li><a href="14125">媊</a></li>
                                   <li><a href="14126">媋</a></li>
                                   <li><a href="14128">媍</a></li>
                                   <li><a href="14129">媎</a></li>
                                   <li><a href="14130">媏</a></li>
                                   <li><a href="14132">媑</a></li>
                                   <li><a href="14133">媓</a></li>
                                   <li><a href="14134">媔</a></li>
                                   <li><a href="14135">媕</a></li>
                                   <li><a href="14136">媗</a></li>
                                   <li><a href="14137">媘</a></li>
                                   <li><a href="14138">媙</a></li>
                                   <li><a href="14139">媜</a></li>
                                   <li><a href="14140">媝</a></li>
                                   <li><a href="14141">媞</a></li>
                                   <li><a href="14142">媟</a></li>
                                   <li><a href="14143">媠</a></li>
                                   <li><a href="14144">媡</a></li>
                                   <li><a href="14145">媣</a></li>
                                   <li><a href="14146">媤</a></li>
                                   <li><a href="14147">媥</a></li>
                                   <li><a href="14148">媦</a></li>
                                   <li><a href="14149">媧</a></li>
                                   <li><a href="14150">媨</a></li>
                                   <li><a href="14151">媩</a></li>
                                   <li><a href="14152">媪</a></li>
                                   <li><a href="14153">媬</a></li>
                                   <li><a href="14160">媶</a></li>
                                   <li><a href="14310">寊</a></li>
                                   <li><a href="14311">寋</a></li>
                                   <li><a href="14312">寍</a></li>
                                   <li><a href="14313">寎</a></li>
                                   <li><a href="14314">寏</a></li>
                                   <li><a href="14315">寑</a></li>
                                   <li><a href="14316">寕</a></li>
                                   <li><a href="14334">尌</a></li>
                                   <li><a href="14342">尞</a></li>
                                   <li><a href="14353">尰</a></li>
                                   <li><a href="14370">屟</a></li>
                                   <li><a href="14482">崱</a></li>
                                   <li><a href="14483">崲</a></li>
                                   <li><a href="14484">崳</a></li>
                                   <li><a href="14485">崴</a></li>
                                   <li><a href="14486">崵</a></li>
                                   <li><a href="14487">崶</a></li>
                                   <li><a href="14488">崷</a></li>
                                   <li><a href="14489">崸</a></li>
                                   <li><a href="14490">崹</a></li>
                                   <li><a href="14491">崺</a></li>
                                   <li><a href="14492">崻</a></li>
                                   <li><a href="14493">崼</a></li>
                                   <li><a href="14494">崽</a></li>
                                   <li><a href="14495">崾</a></li>
                                   <li><a href="14496">崿</a></li>
                                   <li><a href="14497">嵀</a></li>
                                   <li><a href="14498">嵁</a></li>
                                   <li><a href="14499">嵂</a></li>
                                   <li><a href="14500">嵃</a></li>
                                   <li><a href="14501">嵄</a></li>
                                   <li><a href="14502">嵅</a></li>
                                   <li><a href="14503">嵇</a></li>
                                   <li><a href="14504">嵈</a></li>
                                   <li><a href="14505">嵉</a></li>
                                   <li><a href="14507">嵍</a></li>
                                   <li><a href="14508">嵏</a></li>
                                   <li><a href="14509">嵑</a></li>
                                   <li><a href="14510">嵓</a></li>
                                   <li><a href="14511">嵔</a></li>
                                   <li><a href="14512">嵕</a></li>
                                   <li><a href="14513">嵖</a></li>
                                   <li><a href="14514">嵙</a></li>
                                   <li><a href="14636">帿</a></li>
                                   <li><a href="14637">幁</a></li>
                                   <li><a href="14638">幆</a></li>
                                   <li><a href="14639">幈</a></li>
                                   <li><a href="14640">幉</a></li>
                                   <li><a href="14694">庽</a></li>
                                   <li><a href="14695">廀</a></li>
                                   <li><a href="14696">廄</a></li>
                                   <li><a href="14742">强</a></li>
                                   <li><a href="14743">弻</a></li>
                                   <li><a href="14756">彘</a></li>
                                   <li><a href="14784">徥</a></li>
                                   <li><a href="14785">徦</a></li>
                                   <li><a href="14786">徧</a></li>
                                   <li><a href="14838">惁</a></li>
                                   <li><a href="14840">惌</a></li>
                                   <li><a href="14842">惒</a></li>
                                   <li><a href="14843">惖</a></li>
                                   <li><a href="14847">惩</a></li>
                                   <li><a href="14848">惪</a></li>
                                   <li><a href="14849">惿</a></li>
                                   <li><a href="14850">愄</a></li>
                                   <li><a href="14851">愋</a></li>
                                   <li><a href="14852">愝</a></li>
                                   <li><a href="14853">愣</a></li>
                                   <li><a href="14959">掰</a></li>
                                   <li><a href="14960">掱</a></li>
                                   <li><a href="14962">揂</a></li>
                                   <li><a href="14963">揇</a></li>
                                   <li><a href="14964">揊</a></li>
                                   <li><a href="14965">揋</a></li>
                                   <li><a href="14966">揍</a></li>
                                   <li><a href="14967">揗</a></li>
                                   <li><a href="14968">揘</a></li>
                                   <li><a href="14969">揙</a></li>
                                   <li><a href="14970">揝</a></li>
                                   <li><a href="14971">揞</a></li>
                                   <li><a href="14972">揟</a></li>
                                   <li><a href="14973">揤</a></li>
                                   <li><a href="14974">揦</a></li>
                                   <li><a href="14976">揯</a></li>
                                   <li><a href="14977">揰</a></li>
                                   <li><a href="14978">揾</a></li>
                                   <li><a href="14982">搑</a></li>
                                   <li><a href="15059">敡</a></li>
                                   <li><a href="15060">敤</a></li>
                                   <li><a href="15061">敥</a></li>
                                   <li><a href="15081">旑</a></li>
                                   <li><a href="15097">晲</a></li>
                                   <li><a href="15098">晽</a></li>
                                   <li><a href="15133">朂</a></li>
                                   <li><a href="15208">棇</a></li>
                                   <li><a href="15209">棎</a></li>
                                   <li><a href="15210">棛</a></li>
                                   <li><a href="15211">棢</a></li>
                                   <li><a href="15212">棦</a></li>
                                   <li><a href="15214">棳</a></li>
                                   <li><a href="15215">棴</a></li>
                                   <li><a href="15216">棾</a></li>
                                   <li><a href="15217">棿</a></li>
                                   <li><a href="15218">椂</a></li>
                                   <li><a href="15219">椕</a></li>
                                   <li><a href="15236">楧</a></li>
                                   <li><a href="15346">欼</a></li>
                                   <li><a href="15357">歮</a></li>
                                   <li><a href="15378">毰</a></li>
                                   <li><a href="15379">毲</a></li>
                                   <li><a href="15380">毴</a></li>
                                   <li><a href="15406">氬</a></li>
                                   <li><a href="15407">氭</a></li>
                                   <li><a href="15408">氮</a></li>
                                   <li><a href="15409">氯</a></li>
                                   <li><a href="15410">氰</a></li>
                                   <li><a href="15649">淼</a></li>
                                   <li><a href="15651">淾</a></li>
                                   <li><a href="15661">渘</a></li>
                                   <li><a href="15662">渜</a></li>
                                   <li><a href="15663">渞</a></li>
                                   <li><a href="15664">渢</a></li>
                                   <li><a href="15665">渨</a></li>
                                   <li><a href="15666">渪</a></li>
                                   <li><a href="15667">渰</a></li>
                                   <li><a href="15668">渱</a></li>
                                   <li><a href="15669">渲</a></li>
                                   <li><a href="15671">渷</a></li>
                                   <li><a href="15672">渹</a></li>
                                   <li><a href="15673">渻</a></li>
                                   <li><a href="15674">渼</a></li>
                                   <li><a href="15675">渽</a></li>
                                   <li><a href="15676">渿</a></li>
                                   <li><a href="15677">湀</a></li>
                                   <li><a href="15678">湁</a></li>
                                   <li><a href="15679">湂</a></li>
                                   <li><a href="15680">湄</a></li>
                                   <li><a href="15681">湅</a></li>
                                   <li><a href="15682">湆</a></li>
                                   <li><a href="15683">湇</a></li>
                                   <li><a href="15684">湈</a></li>
                                   <li><a href="15685">湉</a></li>
                                   <li><a href="15687">湏</a></li>
                                   <li><a href="15688">湐</a></li>
                                   <li><a href="15689">湑</a></li>
                                   <li><a href="15690">湒</a></li>
                                   <li><a href="15691">湓</a></li>
                                   <li><a href="15692">湔</a></li>
                                   <li><a href="15693">湕</a></li>
                                   <li><a href="15694">湗</a></li>
                                   <li><a href="15695">湙</a></li>
                                   <li><a href="15696">湚</a></li>
                                   <li><a href="15697">湜</a></li>
                                   <li><a href="15698">湝</a></li>
                                   <li><a href="15699">湞</a></li>
                                   <li><a href="15700">湠</a></li>
                                   <li><a href="15701">湡</a></li>
                                   <li><a href="15702">湢</a></li>
                                   <li><a href="15703">湣</a></li>
                                   <li><a href="15704">湤</a></li>
                                   <li><a href="15705">湥</a></li>
                                   <li><a href="15706">湦</a></li>
                                   <li><a href="15707">湨</a></li>
                                   <li><a href="15708">湩</a></li>
                                   <li><a href="15709">湪</a></li>
                                   <li><a href="15711">湭</a></li>
                                   <li><a href="15712">湰</a></li>
                                   <li><a href="15713">湱</a></li>
                                   <li><a href="15714">湳</a></li>
                                   <li><a href="15715">湵</a></li>
                                   <li><a href="15716">湷</a></li>
                                   <li><a href="15717">湸</a></li>
                                   <li><a href="15718">湺</a></li>
                                   <li><a href="15719">湻</a></li>
                                   <li><a href="15720">湽</a></li>
                                   <li><a href="15730">溚</a></li>
                                   <li><a href="16103">焛</a></li>
                                   <li><a href="16104">焝</a></li>
                                   <li><a href="16105">焞</a></li>
                                   <li><a href="16106">焟</a></li>
                                   <li><a href="16107">焢</a></li>
                                   <li><a href="16108">焣</a></li>
                                   <li><a href="16109">焤</a></li>
                                   <li><a href="16110">焥</a></li>
                                   <li><a href="16111">焧</a></li>
                                   <li><a href="16112">焨</a></li>
                                   <li><a href="16113">焩</a></li>
                                   <li><a href="16114">焪</a></li>
                                   <li><a href="16115">焬</a></li>
                                   <li><a href="16116">焭</a></li>
                                   <li><a href="16117">焮</a></li>
                                   <li><a href="16118">焯</a></li>
                                   <li><a href="16119">焱</a></li>
                                   <li><a href="16120">焲</a></li>
                                   <li><a href="16121">焳</a></li>
                                   <li><a href="16122">焴</a></li>
                                   <li><a href="16123">焵</a></li>
                                   <li><a href="16124">焷</a></li>
                                   <li><a href="16125">焸</a></li>
                                   <li><a href="16126">焺</a></li>
                                   <li><a href="16127">焻</a></li>
                                   <li><a href="16128">焽</a></li>
                                   <li><a href="16141">煐</a></li>
                                   <li><a href="16314">犃</a></li>
                                   <li><a href="16315">犄</a></li>
                                   <li><a href="16316">犅</a></li>
                                   <li><a href="16317">犆</a></li>
                                   <li><a href="16318">犈</a></li>
                                   <li><a href="16319">犉</a></li>
                                   <li><a href="16393">猆</a></li>
                                   <li><a href="16397">猌</a></li>
                                   <li><a href="16402">猒</a></li>
                                   <li><a href="16410">猢</a></li>
                                   <li><a href="16411">猣</a></li>
                                   <li><a href="16412">猤</a></li>
                                   <li><a href="16413">猦</a></li>
                                   <li><a href="16414">猧</a></li>
                                   <li><a href="16415">猨</a></li>
                                   <li><a href="16416">猬</a></li>
                                   <li><a href="16417">猭</a></li>
                                   <li><a href="16418">猱</a></li>
                                   <li><a href="16419">猲</a></li>
                                   <li><a href="16420">猵</a></li>
                                   <li><a href="16421">猸</a></li>
                                   <li><a href="16422">猹</a></li>
                                   <li><a href="16514">琔</a></li>
                                   <li><a href="16515">琕</a></li>
                                   <li><a href="16516">琗</a></li>
                                   <li><a href="16517">琘</a></li>
                                   <li><a href="16518">琙</a></li>
                                   <li><a href="16519">琜</a></li>
                                   <li><a href="16520">琝</a></li>
                                   <li><a href="16522">琟</a></li>
                                   <li><a href="16523">琠</a></li>
                                   <li><a href="16524">琡</a></li>
                                   <li><a href="16525">琣</a></li>
                                   <li><a href="16527">琷</a></li>
                                   <li><a href="16528">琸</a></li>
                                   <li><a href="16579">瓹</a></li>
                                   <li><a href="16602">痚</a></li>
                                   <li><a href="16603">痥</a></li>
                                   <li><a href="16604">痦</a></li>
                                   <li><a href="16623">皒</a></li>
                                   <li><a href="16624">皔</a></li>
                                   <li><a href="16629">皳</a></li>
                                   <li><a href="16635">盚</a></li>
                                   <li><a href="16659">睈</a></li>
                                   <li><a href="16660">睉</a></li>
                                   <li><a href="16661">睌</a></li>
                                   <li><a href="16731">硟</a></li>
                                   <li><a href="16732">硢</a></li>
                                   <li><a href="16733">硦</a></li>
                                   <li><a href="16734">硧</a></li>
                                   <li><a href="16735">硩</a></li>
                                   <li><a href="16736">硰</a></li>
                                   <li><a href="16737">硱</a></li>
                                   <li><a href="16788">祦</a></li>
                                   <li><a href="16790">祰</a></li>
                                   <li><a href="16791">祶</a></li>
                                   <li><a href="16824">秿</a></li>
                                   <li><a href="16825">稁</a></li>
                                   <li><a href="16826">稄</a></li>
                                   <li><a href="16852">窚</a></li>
                                   <li><a href="16853">窛</a></li>
                                   <li><a href="16865">竤</a></li>
                                   <li><a href="16889">筂</a></li>
                                   <li><a href="16890">筃</a></li>
                                   <li><a href="16891">筄</a></li>
                                   <li><a href="16892">筗</a></li>
                                   <li><a href="16893">筘</a></li>
                                   <li><a href="16990">絒</a></li>
                                   <li><a href="16991">絔</a></li>
                                   <li><a href="16992">絠</a></li>
                                   <li><a href="16993">絤</a></li>
                                   <li><a href="16994">絩</a></li>
                                   <li><a href="16995">絬</a></li>
                                   <li><a href="16996">絴</a></li>
                                   <li><a href="17056">罀</a></li>
                                   <li><a href="17070">羠</a></li>
                                   <li><a href="17083">翓</a></li>
                                   <li><a href="17084">翖</a></li>
                                   <li><a href="17085">翗</a></li>
                                   <li><a href="17110">聎</a></li>
                                   <li><a href="17111">聐</a></li>
                                   <li><a href="17112">聑</a></li>
                                   <li><a href="17113">联</a></li>
                                   <li><a href="17143">脔</a></li>
                                   <li><a href="17153">脻</a></li>
                                   <li><a href="17154">腀</a></li>
                                   <li><a href="17155">腂</a></li>
                                   <li><a href="17156">腈</a></li>
                                   <li><a href="17157">腉</a></li>
                                   <li><a href="17158">腏</a></li>
                                   <li><a href="17159">腖</a></li>
                                   <li><a href="17160">腘</a></li>
                                   <li><a href="17251">菐</a></li>
                                   <li><a href="17272">萭</a></li>
                                   <li><a href="17273">萮</a></li>
                                   <li><a href="17274">萰</a></li>
                                   <li><a href="17275">萳</a></li>
                                   <li><a href="17276">萴</a></li>
                                   <li><a href="17277">萶</a></li>
                                   <li><a href="17278">萷</a></li>
                                   <li><a href="17279">萺</a></li>
                                   <li><a href="17280">萾</a></li>
                                   <li><a href="17281">葂</a></li>
                                   <li><a href="17282">葃</a></li>
                                   <li><a href="17283">葋</a></li>
                                   <li><a href="17284">葔</a></li>
                                   <li><a href="17285">葕</a></li>
                                   <li><a href="17286">葝</a></li>
                                   <li><a href="17287">葨</a></li>
                                   <li><a href="17288">葲</a></li>
                                   <li><a href="17289">葾</a></li>
                                   <li><a href="17290">葿</a></li>
                                   <li><a href="17291">蒀</a></li>
                                   <li><a href="17292">蒃</a></li>
                                   <li><a href="17293">蒊</a></li>
                                   <li><a href="17433">蛌</a></li>
                                   <li><a href="17434">蛓</a></li>
                                   <li><a href="17435">蛝</a></li>
                                   <li><a href="17436">蛡</a></li>
                                   <li><a href="17437">蛨</a></li>
                                   <li><a href="17529">衖</a></li>
                                   <li><a href="17555">袲</a></li>
                                   <li><a href="17557">袶</a></li>
                                   <li><a href="17560">裐</a></li>
                                   <li><a href="17561">裖</a></li>
                                   <li><a href="17605">覙</a></li>
                                   <li><a href="17618">觛</a></li>
                                   <li><a href="17641">訸</a></li>
                                   <li><a href="17642">詂</a></li>
                                   <li><a href="17643">詊</a></li>
                                   <li><a href="17644">詋</a></li>
                                   <li><a href="17645">詌</a></li>
                                   <li><a href="17646">詏</a></li>
                                   <li><a href="17647">詙</a></li>
                                   <li><a href="17648">詚</a></li>
                                   <li><a href="17735">豞</a></li>
                                   <li><a href="17736">豟</a></li>
                                   <li><a href="17737">豠</a></li>
                                   <li><a href="17746">豿</a></li>
                                   <li><a href="17747">貀</a></li>
                                   <li><a href="17748">貁</a></li>
                                   <li><a href="17760">貱</a></li>
                                   <li><a href="17761">貵</a></li>
                                   <li><a href="17762">貾</a></li>
                                   <li><a href="17787">趀</a></li>
                                   <li><a href="17788">趃</a></li>
                                   <li><a href="17789">趆</a></li>
                                   <li><a href="17790">趇</a></li>
                                   <li><a href="17791">趉</a></li>
                                   <li><a href="17792">趋</a></li>
                                   <li><a href="17814">跉</a></li>
                                   <li><a href="17815">跍</a></li>
                                   <li><a href="17816">跒</a></li>
                                   <li><a href="17817">跓</a></li>
                                   <li><a href="17818">跘</a></li>
                                   <li><a href="17819">跜</a></li>
                                   <li><a href="17882">軤</a></li>
                                   <li><a href="17883">軥</a></li>
                                   <li><a href="17884">軦</a></li>
                                   <li><a href="17885">軧</a></li>
                                   <li><a href="17886">軩</a></li>
                                   <li><a href="17887">軪</a></li>
                                   <li><a href="17888">軯</a></li>
                                   <li><a href="17889">軰</a></li>
                                   <li><a href="17890">軲</a></li>
                                   <li><a href="17891">軳</a></li>
                                   <li><a href="17892">軴</a></li>
                                   <li><a href="17921">逰</a></li>
                                   <li><a href="17922">逽</a></li>
                                   <li><a href="17956">郹</a></li>
                                   <li><a href="17958">郻</a></li>
                                   <li><a href="17960">鄁</a></li>
                                   <li><a href="17961">鄇</a></li>
                                   <li><a href="17962">鄉</a></li>
                                   <li><a href="17963">鄊</a></li>
                                   <li><a href="17978">酠</a></li>
                                   <li><a href="18003">釾</a></li>
                                   <li><a href="18004">鈂</a></li>
                                   <li><a href="18005">鈉</a></li>
                                   <li><a href="18006">鈋</a></li>
                                   <li><a href="18007">鈏</a></li>
                                   <li><a href="18008">鈙</a></li>
                                   <li><a href="18009">鈚</a></li>
                                   <li><a href="18010">鈛</a></li>
                                   <li><a href="18011">鈟</a></li>
                                   <li><a href="18012">鈠</a></li>
                                   <li><a href="18013">鈡</a></li>
                                   <li><a href="18160">镻</a></li>
                                   <li><a href="18166">閐</a></li>
                                   <li><a href="18167">閕</a></li>
                                   <li><a href="18197">隀</a></li>
                                   <li><a href="18198">隁</a></li>
                                   <li><a href="18199">隇</a></li>
                                   <li><a href="18200">隌</a></li>
                                   <li><a href="18201">隐</a></li>
                                   <li><a href="18208">雂</a></li>
                                   <li><a href="18209">雃</a></li>
                                   <li><a href="18218">雭</a></li>
                                   <li><a href="18219">雮</a></li>
                                   <li><a href="18250">靟</a></li>
                                   <li><a href="18251">靯</a></li>
                                   <li><a href="18299">颩</a></li>
                                   <li><a href="18395">骩</a></li>
                                   <li><a href="18630">嵆</a></li>
                                   <li><a href="18668">㐤</a></li>
                                   <li><a href="18709">㑳</a></li>
                                   <li><a href="18710">㑵</a></li>
                                   <li><a href="18711">㑶</a></li>
                                   <li><a href="18712">㑷</a></li>
                                   <li><a href="18713">㑸</a></li>
                                   <li><a href="18760">㒽</a></li>
                                   <li><a href="18776">㓔</a></li>
                                   <li><a href="18777">㓕</a></li>
                                   <li><a href="18796">㓸</a></li>
                                   <li><a href="18797">㓹</a></li>
                                   <li><a href="18798">㓺</a></li>
                                   <li><a href="18829">㔡</a></li>
                                   <li><a href="18843">㔸</a></li>
                                   <li><a href="18863">㕎</a></li>
                                   <li><a href="18874">㕠</a></li>
                                   <li><a href="18933">㖢</a></li>
                                   <li><a href="18947">㖶</a></li>
                                   <li><a href="18948">㖷</a></li>
                                   <li><a href="18949">㖸</a></li>
                                   <li><a href="18950">㖹</a></li>
                                   <li><a href="18951">㖺</a></li>
                                   <li><a href="18952">㖻</a></li>
                                   <li><a href="18953">㖼</a></li>
                                   <li><a href="18954">㖾</a></li>
                                   <li><a href="18955">㖿</a></li>
                                   <li><a href="18956">㗀</a></li>
                                   <li><a href="18957">㗁</a></li>
                                   <li><a href="18958">㗂</a></li>
                                   <li><a href="18959">㗃</a></li>
                                   <li><a href="18960">㗄</a></li>
                                   <li><a href="18961">㗅</a></li>
                                   <li><a href="18962">㗆</a></li>
                                   <li><a href="18963">㗇</a></li>
                                   <li><a href="18964">㗉</a></li>
                                   <li><a href="18965">㗊</a></li>
                                   <li><a href="18966">㗋</a></li>
                                   <li><a href="18967">㗌</a></li>
                                   <li><a href="18968">㗍</a></li>
                                   <li><a href="18969">㗐</a></li>
                                   <li><a href="18981">㗡</a></li>
                                   <li><a href="19060">㙎</a></li>
                                   <li><a href="19061">㙏</a></li>
                                   <li><a href="19062">㙐</a></li>
                                   <li><a href="19063">㙑</a></li>
                                   <li><a href="19064">㙓</a></li>
                                   <li><a href="19066">㙕</a></li>
                                   <li><a href="19102">㚃</a></li>
                                   <li><a href="19105">㚊</a></li>
                                   <li><a href="19184">㛮</a></li>
                                   <li><a href="19185">㛯</a></li>
                                   <li><a href="19186">㛰</a></li>
                                   <li><a href="19187">㛱</a></li>
                                   <li><a href="19188">㛳</a></li>
                                   <li><a href="19189">㛴</a></li>
                                   <li><a href="19190">㛵</a></li>
                                   <li><a href="19191">㛶</a></li>
                                   <li><a href="19192">㛷</a></li>
                                   <li><a href="19193">㛸</a></li>
                                   <li><a href="19194">㛹</a></li>
                                   <li><a href="19195">㛻</a></li>
                                   <li><a href="19196">㛽</a></li>
                                   <li><a href="19197">㛾</a></li>
                                   <li><a href="19198">㜂</a></li>
                                   <li><a href="19199">㜃</a></li>
                                   <li><a href="19200">㜄</a></li>
                                   <li><a href="19214">㜒</a></li>
                                   <li><a href="19215">㜓</a></li>
                                   <li><a href="19257">㝄</a></li>
                                   <li><a href="19283">㝢</a></li>
                                   <li><a href="19284">㝣</a></li>
                                   <li><a href="19312">㞇</a></li>
                                   <li><a href="19313">㞈</a></li>
                                   <li><a href="19329">㞚</a></li>
                                   <li><a href="19330">㞛</a></li>
                                   <li><a href="19390">㟦</a></li>
                                   <li><a href="19391">㟧</a></li>
                                   <li><a href="19392">㟨</a></li>
                                   <li><a href="19393">㟩</a></li>
                                   <li><a href="19394">㟪</a></li>
                                   <li><a href="19395">㟫</a></li>
                                   <li><a href="19397">㟭</a></li>
                                   <li><a href="19448">㠭</a></li>
                                   <li><a href="19477">㡏</a></li>
                                   <li><a href="19478">㡐</a></li>
                                   <li><a href="19479">㡑</a></li>
                                   <li><a href="19480">㡒</a></li>
                                   <li><a href="19481">㡓</a></li>
                                   <li><a href="19482">㡔</a></li>
                                   <li><a href="19484">㡖</a></li>
                                   <li><a href="19503">㡫</a></li>
                                   <li><a href="19504">㡬</a></li>
                                   <li><a href="19534">㢎</a></li>
                                   <li><a href="19535">㢏</a></li>
                                   <li><a href="19569">㢽</a></li>
                                   <li><a href="19570">㢾</a></li>
                                   <li><a href="19584">㣏</a></li>
                                   <li><a href="19585">㣐</a></li>
                                   <li><a href="19603">㣪</a></li>
                                   <li><a href="19604">㣫</a></li>
                                   <li><a href="19605">㣬</a></li>
                                   <li><a href="19606">㣭</a></li>
                                   <li><a href="19662">㥁</a></li>
                                   <li><a href="19667">㥈</a></li>
                                   <li><a href="19670">㥋</a></li>
                                   <li><a href="19673">㥎</a></li>
                                   <li><a href="19674">㥐</a></li>
                                   <li><a href="19675">㥑</a></li>
                                   <li><a href="19679">㥕</a></li>
                                   <li><a href="19680">㥖</a></li>
                                   <li><a href="19681">㥚</a></li>
                                   <li><a href="19682">㥜</a></li>
                                   <li><a href="19683">㥝</a></li>
                                   <li><a href="19684">㥞</a></li>
                                   <li><a href="19685">㥟</a></li>
                                   <li><a href="19686">㥠</a></li>
                                   <li><a href="19687">㥡</a></li>
                                   <li><a href="19688">㥢</a></li>
                                   <li><a href="19691">㥧</a></li>
                                   <li><a href="19693">㥩</a></li>
                                   <li><a href="19808">㨇</a></li>
                                   <li><a href="19809">㨉</a></li>
                                   <li><a href="19810">㨊</a></li>
                                   <li><a href="19811">㨋</a></li>
                                   <li><a href="19813">㨏</a></li>
                                   <li><a href="19814">㨐</a></li>
                                   <li><a href="19815">㨒</a></li>
                                   <li><a href="19816">㨓</a></li>
                                   <li><a href="19817">㨕</a></li>
                                   <li><a href="19819">㨚</a></li>
                                   <li><a href="19890">㩾</a></li>
                                   <li><a href="19905">㪏</a></li>
                                   <li><a href="19906">㪐</a></li>
                                   <li><a href="19907">㪑</a></li>
                                   <li><a href="19908">㪒</a></li>
                                   <li><a href="19909">㪓</a></li>
                                   <li><a href="19910">㪔</a></li>
                                   <li><a href="19911">㪕</a></li>
                                   <li><a href="19912">㪖</a></li>
                                   <li><a href="19913">㪗</a></li>
                                   <li><a href="19914">㪘</a></li>
                                   <li><a href="19915">㪚</a></li>
                                   <li><a href="19939">㪸</a></li>
                                   <li><a href="19945">㫀</a></li>
                                   <li><a href="19980">㫵</a></li>
                                   <li><a href="19981">㫶</a></li>
                                   <li><a href="19982">㫸</a></li>
                                   <li><a href="19983">㫹</a></li>
                                   <li><a href="19984">㫺</a></li>
                                   <li><a href="19985">㫻</a></li>
                                   <li><a href="19986">㫼</a></li>
                                   <li><a href="19987">㫽</a></li>
                                   <li><a href="20020">㬹</a></li>
                                   <li><a href="20054">㭰</a></li>
                                   <li><a href="20058">㭹</a></li>
                                   <li><a href="20059">㭺</a></li>
                                   <li><a href="20060">㭻</a></li>
                                   <li><a href="20061">㭼</a></li>
                                   <li><a href="20062">㭽</a></li>
                                   <li><a href="20063">㭾</a></li>
                                   <li><a href="20064">㭿</a></li>
                                   <li><a href="20065">㮀</a></li>
                                   <li><a href="20066">㮁</a></li>
                                   <li><a href="20067">㮂</a></li>
                                   <li><a href="20068">㮃</a></li>
                                   <li><a href="20069">㮄</a></li>
                                   <li><a href="20070">㮅</a></li>
                                   <li><a href="20071">㮆</a></li>
                                   <li><a href="20193">㰲</a></li>
                                   <li><a href="20194">㰳</a></li>
                                   <li><a href="20195">㰴</a></li>
                                   <li><a href="20196">㰵</a></li>
                                   <li><a href="20197">㰶</a></li>
                                   <li><a href="20199">㰸</a></li>
                                   <li><a href="20219">㱖</a></li>
                                   <li><a href="20232">㱤</a></li>
                                   <li><a href="20233">㱥</a></li>
                                   <li><a href="20234">㱦</a></li>
                                   <li><a href="20235">㱧</a></li>
                                   <li><a href="20236">㱨</a></li>
                                   <li><a href="20255">㲁</a></li>
                                   <li><a href="20256">㲂</a></li>
                                   <li><a href="20257">㲃</a></li>
                                   <li><a href="20276">㲛</a></li>
                                   <li><a href="20277">㲜</a></li>
                                   <li><a href="20278">㲝</a></li>
                                   <li><a href="20279">㲞</a></li>
                                   <li><a href="20280">㲟</a></li>
                                   <li><a href="20329">㳛</a></li>
                                   <li><a href="20349">㳼</a></li>
                                   <li><a href="20356">㴅</a></li>
                                   <li><a href="20358">㴇</a></li>
                                   <li><a href="20362">㴏</a></li>
                                   <li><a href="20363">㴐</a></li>
                                   <li><a href="20364">㴒</a></li>
                                   <li><a href="20365">㴓</a></li>
                                   <li><a href="20366">㴔</a></li>
                                   <li><a href="20368">㴖</a></li>
                                   <li><a href="20369">㴗</a></li>
                                   <li><a href="20370">㴘</a></li>
                                   <li><a href="20371">㴙</a></li>
                                   <li><a href="20372">㴚</a></li>
                                   <li><a href="20373">㴜</a></li>
                                   <li><a href="20375">㴠</a></li>
                                   <li><a href="20499">㷃</a></li>
                                   <li><a href="20500">㷄</a></li>
                                   <li><a href="20501">㷅</a></li>
                                   <li><a href="20502">㷆</a></li>
                                   <li><a href="20503">㷇</a></li>
                                   <li><a href="20504">㷈</a></li>
                                   <li><a href="20505">㷉</a></li>
                                   <li><a href="20506">㷊</a></li>
                                   <li><a href="20507">㷋</a></li>
                                   <li><a href="20562">㸜</a></li>
                                   <li><a href="20598">㹁</a></li>
                                   <li><a href="20600">㹃</a></li>
                                   <li><a href="20658">㺁</a></li>
                                   <li><a href="20659">㺂</a></li>
                                   <li><a href="20660">㺄</a></li>
                                   <li><a href="20661">㺅</a></li>
                                   <li><a href="20718">㻑</a></li>
                                   <li><a href="20719">㻒</a></li>
                                   <li><a href="20720">㻓</a></li>
                                   <li><a href="20721">㻔</a></li>
                                   <li><a href="20722">㻕</a></li>
                                   <li><a href="20723">㻖</a></li>
                                   <li><a href="20725">㻚</a></li>
                                   <li><a href="20752">㼌</a></li>
                                   <li><a href="20753">㼍</a></li>
                                   <li><a href="20754">㼎</a></li>
                                   <li><a href="20770">㼢</a></li>
                                   <li><a href="20775">㼧</a></li>
                                   <li><a href="20776">㼨</a></li>
                                   <li><a href="20777">㼩</a></li>
                                   <li><a href="20778">㼪</a></li>
                                   <li><a href="20814">㽒</a></li>
                                   <li><a href="20821">㽠</a></li>
                                   <li><a href="20866">㾔</a></li>
                                   <li><a href="20867">㾕</a></li>
                                   <li><a href="20868">㾖</a></li>
                                   <li><a href="20869">㾗</a></li>
                                   <li><a href="20870">㾘</a></li>
                                   <li><a href="20871">㾙</a></li>
                                   <li><a href="20873">㾛</a></li>
                                   <li><a href="20874">㾜</a></li>
                                   <li><a href="20875">㾝</a></li>
                                   <li><a href="20876">㾞</a></li>
                                   <li><a href="20877">㾟</a></li>
                                   <li><a href="20878">㾠</a></li>
                                   <li><a href="20879">㾡</a></li>
                                   <li><a href="20936">㿱</a></li>
                                   <li><a href="20953">䀃</a></li>
                                   <li><a href="20984">䀯</a></li>
                                   <li><a href="20985">䀰</a></li>
                                   <li><a href="20986">䀱</a></li>
                                   <li><a href="20987">䀲</a></li>
                                   <li><a href="20988">䀳</a></li>
                                   <li><a href="20989">䀴</a></li>
                                   <li><a href="20990">䀶</a></li>
                                   <li><a href="20991">䀷</a></li>
                                   <li><a href="20992">䀸</a></li>
                                   <li><a href="20993">䀺</a></li>
                                   <li><a href="20994">䀻</a></li>
                                   <li><a href="20995">䀼</a></li>
                                   <li><a href="20996">䀽</a></li>
                                   <li><a href="20997">䀾</a></li>
                                   <li><a href="20998">䀿</a></li>
                                   <li><a href="20999">䁀</a></li>
                                   <li><a href="21090">䂫</a></li>
                                   <li><a href="21094">䂰</a></li>
                                   <li><a href="21095">䂱</a></li>
                                   <li><a href="21096">䂲</a></li>
                                   <li><a href="21097">䂳</a></li>
                                   <li><a href="21098">䂴</a></li>
                                   <li><a href="21156">䄈</a></li>
                                   <li><a href="21157">䄉</a></li>
                                   <li><a href="21207">䅋</a></li>
                                   <li><a href="21208">䅌</a></li>
                                   <li><a href="21209">䅍</a></li>
                                   <li><a href="21210">䅎</a></li>
                                   <li><a href="21211">䅐</a></li>
                                   <li><a href="21212">䅑</a></li>
                                   <li><a href="21214">䅓</a></li>
                                   <li><a href="21278">䆠</a></li>
                                   <li><a href="21279">䆡</a></li>
                                   <li><a href="21280">䆢</a></li>
                                   <li><a href="21281">䆣</a></li>
                                   <li><a href="21282">䆤</a></li>
                                   <li><a href="21283">䆥</a></li>
                                   <li><a href="21317">䇌</a></li>
                                   <li><a href="21318">䇍</a></li>
                                   <li><a href="21342">䇧</a></li>
                                   <li><a href="21344">䇩</a></li>
                                   <li><a href="21345">䇪</a></li>
                                   <li><a href="21347">䇬</a></li>
                                   <li><a href="21348">䇭</a></li>
                                   <li><a href="21349">䇯</a></li>
                                   <li><a href="21350">䇰</a></li>
                                   <li><a href="21351">䇱</a></li>
                                   <li><a href="21352">䇲</a></li>
                                   <li><a href="21366">䈂</a></li>
                                   <li><a href="21478">䊁</a></li>
                                   <li><a href="21479">䊂</a></li>
                                   <li><a href="21480">䊃</a></li>
                                   <li><a href="21481">䊄</a></li>
                                   <li><a href="21482">䊅</a></li>
                                   <li><a href="21483">䊆</a></li>
                                   <li><a href="21555">䋕</a></li>
                                   <li><a href="21557">䋘</a></li>
                                   <li><a href="21558">䋙</a></li>
                                   <li><a href="21559">䋚</a></li>
                                   <li><a href="21560">䋛</a></li>
                                   <li><a href="21561">䋜</a></li>
                                   <li><a href="21649">䍊</a></li>
                                   <li><a href="21662">䍚</a></li>
                                   <li><a href="21680">䍮</a></li>
                                   <li><a href="21681">䍯</a></li>
                                   <li><a href="21682">䍰</a></li>
                                   <li><a href="21702">䎇</a></li>
                                   <li><a href="21703">䎈</a></li>
                                   <li><a href="21704">䎉</a></li>
                                   <li><a href="21705">䎊</a></li>
                                   <li><a href="21722">䎜</a></li>
                                   <li><a href="21723">䎝</a></li>
                                   <li><a href="21742">䎷</a></li>
                                   <li><a href="21799">䏼</a></li>
                                   <li><a href="21800">䏽</a></li>
                                   <li><a href="21801">䏾</a></li>
                                   <li><a href="21802">䐀</a></li>
                                   <li><a href="21803">䐁</a></li>
                                   <li><a href="21804">䐂</a></li>
                                   <li><a href="21805">䐄</a></li>
                                   <li><a href="21806">䐅</a></li>
                                   <li><a href="21807">䐇</a></li>
                                   <li><a href="21808">䐉</a></li>
                                   <li><a href="21866">䑐</a></li>
                                   <li><a href="21884">䑪</a></li>
                                   <li><a href="21885">䑬</a></li>
                                   <li><a href="21886">䑭</a></li>
                                   <li><a href="21975">䓮</a></li>
                                   <li><a href="21976">䓯</a></li>
                                   <li><a href="21977">䓰</a></li>
                                   <li><a href="21979">䓳</a></li>
                                   <li><a href="21980">䓴</a></li>
                                   <li><a href="21981">䓶</a></li>
                                   <li><a href="21982">䓷</a></li>
                                   <li><a href="21983">䓸</a></li>
                                   <li><a href="21984">䓹</a></li>
                                   <li><a href="21985">䓻</a></li>
                                   <li><a href="22096">䖐</a></li>
                                   <li><a href="22097">䖑</a></li>
                                   <li><a href="22119">䖭</a></li>
                                   <li><a href="22120">䖯</a></li>
                                   <li><a href="22121">䖰</a></li>
                                   <li><a href="22122">䖱</a></li>
                                   <li><a href="22123">䖲</a></li>
                                   <li><a href="22124">䖴</a></li>
                                   <li><a href="22196">䘖</a></li>
                                   <li><a href="22211">䘫</a></li>
                                   <li><a href="22215">䘯</a></li>
                                   <li><a href="22216">䘰</a></li>
                                   <li><a href="22267">䙵</a></li>
                                   <li><a href="22272">䙼</a></li>
                                   <li><a href="22273">䙽</a></li>
                                   <li><a href="22274">䙾</a></li>
                                   <li><a href="22275">䙿</a></li>
                                   <li><a href="22336">䛄</a></li>
                                   <li><a href="22337">䛅</a></li>
                                   <li><a href="22338">䛆</a></li>
                                   <li><a href="22339">䛇</a></li>
                                   <li><a href="22340">䛈</a></li>
                                   <li><a href="22341">䛉</a></li>
                                   <li><a href="22342">䛊</a></li>
                                   <li><a href="22343">䛋</a></li>
                                   <li><a href="22344">䛌</a></li>
                                   <li><a href="22345">䛍</a></li>
                                   <li><a href="22346">䛎</a></li>
                                   <li><a href="22347">䛐</a></li>
                                   <li><a href="22348">䛑</a></li>
                                   <li><a href="22349">䛒</a></li>
                                   <li><a href="22416">䜬</a></li>
                                   <li><a href="22424">䜵</a></li>
                                   <li><a href="22453">䝚</a></li>
                                   <li><a href="22454">䝛</a></li>
                                   <li><a href="22465">䝩</a></li>
                                   <li><a href="22466">䝪</a></li>
                                   <li><a href="22467">䝫</a></li>
                                   <li><a href="22468">䝬</a></li>
                                   <li><a href="22469">䝭</a></li>
                                   <li><a href="22470">䝮</a></li>
                                   <li><a href="22471">䝯</a></li>
                                   <li><a href="22504">䞝</a></li>
                                   <li><a href="22505">䞞</a></li>
                                   <li><a href="22506">䞟</a></li>
                                   <li><a href="22507">䞠</a></li>
                                   <li><a href="22508">䞡</a></li>
                                   <li><a href="22509">䞢</a></li>
                                   <li><a href="22510">䞣</a></li>
                                   <li><a href="22511">䞤</a></li>
                                   <li><a href="22566">䟟</a></li>
                                   <li><a href="22567">䟠</a></li>
                                   <li><a href="22568">䟢</a></li>
                                   <li><a href="22569">䟤</a></li>
                                   <li><a href="22570">䟥</a></li>
                                   <li><a href="22571">䟧</a></li>
                                   <li><a href="22572">䟨</a></li>
                                   <li><a href="22573">䟩</a></li>
                                   <li><a href="22575">䟬</a></li>
                                   <li><a href="22576">䟭</a></li>
                                   <li><a href="22635">䠳</a></li>
                                   <li><a href="22636">䠴</a></li>
                                   <li><a href="22637">䠵</a></li>
                                   <li><a href="22638">䠶</a></li>
                                   <li><a href="22657">䡏</a></li>
                                   <li><a href="22658">䡐</a></li>
                                   <li><a href="22659">䡑</a></li>
                                   <li><a href="22660">䡒</a></li>
                                   <li><a href="22716">䢜</a></li>
                                   <li><a href="22717">䢝</a></li>
                                   <li><a href="22718">䢞</a></li>
                                   <li><a href="22719">䢟</a></li>
                                   <li><a href="22759">䣑</a></li>
                                   <li><a href="22783">䣮</a></li>
                                   <li><a href="22784">䣯</a></li>
                                   <li><a href="22785">䣰</a></li>
                                   <li><a href="22786">䣱</a></li>
                                   <li><a href="22787">䣲</a></li>
                                   <li><a href="22788">䣳</a></li>
                                   <li><a href="22827">䤝</a></li>
                                   <li><a href="22828">䤞</a></li>
                                   <li><a href="22829">䤟</a></li>
                                   <li><a href="22830">䤠</a></li>
                                   <li><a href="22905">䦈</a></li>
                                   <li><a href="22910">䦎</a></li>
                                   <li><a href="22911">䦏</a></li>
                                   <li><a href="22912">䦐</a></li>
                                   <li><a href="22913">䦑</a></li>
                                   <li><a href="22967">䧗</a></li>
                                   <li><a href="22968">䧘</a></li>
                                   <li><a href="22969">䧙</a></li>
                                   <li><a href="22991">䧳</a></li>
                                   <li><a href="22992">䧴</a></li>
                                   <li><a href="22993">䧵</a></li>
                                   <li><a href="22994">䧶</a></li>
                                   <li><a href="23011">䨌</a></li>
                                   <li><a href="23012">䨍</a></li>
                                   <li><a href="23053">䨿</a></li>
                                   <li><a href="23067">䩐</a></li>
                                   <li><a href="23068">䩑</a></li>
                                   <li><a href="23069">䩒</a></li>
                                   <li><a href="23137">䪦</a></li>
                                   <li><a href="23138">䪧</a></li>
                                   <li><a href="23139">䪨</a></li>
                                   <li><a href="23148">䪱</a></li>
                                   <li><a href="23149">䪲</a></li>
                                   <li><a href="23208">䫹</a></li>
                                   <li><a href="23243">䬣</a></li>
                                   <li><a href="23244">䬤</a></li>
                                   <li><a href="23245">䬥</a></li>
                                   <li><a href="23300">䭴</a></li>
                                   <li><a href="23372">䯇</a></li>
                                   <li><a href="23400">䯧</a></li>
                                   <li><a href="23404">䯭</a></li>
                                   <li><a href="23405">䯮</a></li>
                                   <li><a href="23806">傤</a></li>
                                   <li><a href="23831">媭</a></li>
                                   <li><a href="23857">搁</a></li>
                                   <li><a href="23858">搅</a></li>
                                   <li><a href="23894">傋</a></li>
                                   <li><a href="23905">喻</a></li>
                                   <li><a href="23907">嗒</a></li>
                                   <li><a href="23908">嗞</a></li>
                                   <li><a href="23932">堟</a></li>
                                   <li><a href="23943">奣</a></li>
                                   <li><a href="23951">媢</a></li>
                                   <li><a href="23963">嵫</a></li>
                                   <li><a href="23971">帾</a></li>
                                   <li><a href="23972">幂</a></li>
                                   <li><a href="23980">庾</a></li>
                                   <li><a href="23999">椔</a></li>
                                   <li><a href="24017">渧</a></li>
                                   <li><a href="24018">渳</a></li>
                                   <li><a href="24020">湴</a></li>
                                   <li><a href="24021">湼</a></li>
                                   <li><a href="24065">牚</a></li>
                                   <li><a href="24069">猰</a></li>
                                   <li><a href="24086">祴</a></li>
                                   <li><a href="24087">禂</a></li>
                                   <li><a href="24092">窙</a></li>
                                   <li><a href="24097">絘</a></li>
                                   <li><a href="24104">臮</a></li>
                                   <li><a href="24106">艵</a></li>
                                   <li><a href="24116">萫</a></li>
                                   <li><a href="24117">萻</a></li>
                                   <li><a href="24118">葁</a></li>
                                   <li><a href="24119">葻</a></li>
                                   <li><a href="24131">蛢</a></li>
                                   <li><a href="24132">蛪</a></li>
                                   <li><a href="24136">裗</a></li>
                                   <li><a href="24150">逫</a></li>
                                   <li><a href="24180">﨑</a></li>
                                   <li><a href="24205">㛺</a></li>
                                   <li><a href="24206">㛼</a></li>
                                   <li><a href="24209">㟟</a></li>
                                   <li><a href="24212">㡛</a></li>
                                   <li><a href="24220">㨗</a></li>
                                   <li><a href="24226">㫷</a></li>
                                   <li><a href="24232">㭸</a></li>
                                   <li><a href="24246">㴞</a></li>
                                   <li><a href="24272">䄏</a></li>
                                   <li><a href="24284">䍙</a></li>
                                   <li><a href="24290">䐋</a></li>
                                   <li><a href="24291">䐌</a></li>
                                   <li><a href="24292">䑫</a></li>
                                   <li><a href="24304">䓲</a></li>
                                   <li><a href="24305">䓵</a></li>
                                   <li><a href="24306">䓺</a></li>
                                   <li><a href="24385">祱</a></li>
                                   <li><a href="24396">䄇</a></li>
                                   <li><a href="24400">䙴</a></li>
                                   <li><a href="24552">亵</a></li>
                                   <li><a href="24599">傦</a></li>
                                   <li><a href="24607">傩</a></li>
                                   <li><a href="24719">凿</a></li>
                                   <li><a href="24903">啫</a></li>
                                   <li><a href="24911">啴</a></li>
                                   <li><a href="24917">喹</a></li>
                                   <li><a href="24918">喺</a></li>
                                   <li><a href="24919">喽</a></li>
                                   <li><a href="24920">喾</a></li>
                                   <li><a href="24971">圐</a></li>
                                   <li><a href="24992">堖</a></li>
                                   <li><a href="25003">塂</a></li>
                                   <li><a href="25004">塃</a></li>
                                   <li><a href="25005">塄</a></li>
                                   <li><a href="25006">塅</a></li>
                                   <li><a href="25007">塆</a></li>
                                   <li><a href="25009">塇</a></li>
                                   <li><a href="25013">塭</a></li>
                                   <li><a href="25038">媯</a></li>
                                   <li><a href="25058">婵</a></li>
                                   <li><a href="25060">媫</a></li>
                                   <li><a href="25061">媮</a></li>
                                   <li><a href="25134">嵘</a></li>
                                   <li><a href="25136">嵛</a></li>
                                   <li><a href="25137">嵝</a></li>
                                   <li><a href="25207">巯</a></li>
                                   <li><a href="25229">徚</a></li>
                                   <li><a href="25251">惫</a></li>
                                   <li><a href="25324">掷</a></li>
                                   <li><a href="25325">掸</a></li>
                                   <li><a href="25328">揻</a></li>
                                   <li><a href="25329">揼</a></li>
                                   <li><a href="25332">搀</a></li>
                                   <li><a href="25333">搂</a></li>
                                   <li><a href="25334">搃</a></li>
                                   <li><a href="25335">搄</a></li>
                                   <li><a href="25352">敨</a></li>
                                   <li><a href="25353">敪</a></li>
                                   <li><a href="25397">椞</a></li>
                                   <li><a href="25399">椤</a></li>
                                   <li><a href="25400">椩</a></li>
                                   <li><a href="25402">椬</a></li>
                                   <li><a href="25405">椮</a></li>
                                   <li><a href="25487">毵</a></li>
                                   <li><a href="25488">毶</a></li>
                                   <li><a href="25510">溈</a></li>
                                   <li><a href="25549">雬</a></li>
                                   <li><a href="25556">湹</a></li>
                                   <li><a href="25557">溁</a></li>
                                   <li><a href="25558">溄</a></li>
                                   <li><a href="25559">溅</a></li>
                                   <li><a href="25560">溆</a></li>
                                   <li><a href="25561">雳</a></li>
                                   <li><a href="25562">溇</a></li>
                                   <li><a href="25564">溊</a></li>
                                   <li><a href="25565">溋</a></li>
                                   <li><a href="25570">靔</a></li>
                                   <li><a href="25577">靰</a></li>
                                   <li><a href="25633">飨</a></li>
                                   <li><a href="25640">焹</a></li>
                                   <li><a href="25641">焾</a></li>
                                   <li><a href="25644">焿</a></li>
                                   <li><a href="25646">煀</a></li>
                                   <li><a href="25768">犋</a></li>
                                   <li><a href="25791">琎</a></li>
                                   <li><a href="25794">琻</a></li>
                                   <li><a href="25815">痨</a></li>
                                   <li><a href="25816">痪</a></li>
                                   <li><a href="25837">睐</a></li>
                                   <li><a href="25889">硳</a></li>
                                   <li><a href="25890">硵</a></li>
                                   <li><a href="25891">硶</a></li>
                                   <li><a href="25910">祵</a></li>
                                   <li><a href="25911">祸</a></li>
                                   <li><a href="25936">窜</a></li>
                                   <li><a href="25937">窝</a></li>
                                   <li><a href="25945">笾</a></li>
                                   <li><a href="25946">筙</a></li>
                                   <li><a href="25947">筚</a></li>
                                   <li><a href="25948">筛</a></li>
                                   <li><a href="25949">筜</a></li>
                                   <li><a href="25972">粩</a></li>
                                   <li><a href="25982">粪</a></li>
                                   <li><a href="25985">粬</a></li>
                                   <li><a href="26001">絷</a></li>
                                   <li><a href="26195">龫</a></li>
                                   <li><a href="26230">鼋</a></li>
                                   <li><a href="26277">翙</a></li>
                                   <li><a href="26279">逸</a></li>
                                   <li><a href="26289">聓</a></li>
                                   <li><a href="26318">腙</a></li>
                                   <li><a href="26319">腚</a></li>
                                   <li><a href="26330">舾</a></li>
                                   <li><a href="26331">舿</a></li>
                                   <li><a href="26404">㑹</a></li>
                                   <li><a href="26405">㑺</a></li>
                                   <li><a href="26470">萨</a></li>
                                   <li><a href="26471">蒆</a></li>
                                   <li><a href="26472">蒈</a></li>
                                   <li><a href="26473">蒌</a></li>
                                   <li><a href="26474">蒎</a></li>
                                   <li><a href="26475">蒏</a></li>
                                   <li><a href="26540">蛰</a></li>
                                   <li><a href="26541">蛱</a></li>
                                   <li><a href="26543">蛳</a></li>
                                   <li><a href="26544">蛴</a></li>
                                   <li><a href="26572">覄</a></li>
                                   <li><a href="26576">觞</a></li>
                                   <li><a href="26591">㖽</a></li>
                                   <li><a href="26595">㗈</a></li>
                                   <li><a href="26598">㗎</a></li>
                                   <li><a href="26604">㗏</a></li>
                                   <li><a href="26606">㗑</a></li>
                                   <li><a href="26617">㗒</a></li>
                                   <li><a href="26656">㙖</a></li>
                                   <li><a href="26659">㙗</a></li>
                                   <li><a href="26661">㙘</a></li>
                                   <li><a href="26880">㛲</a></li>
                                   <li><a href="26881">㛿</a></li>
                                   <li><a href="26882">㜀</a></li>
                                   <li><a href="26883">㜁</a></li>
                                   <li><a href="26895">㝷</a></li>
                                   <li><a href="26896">㝹</a></li>
                                   <li><a href="26912">㟮</a></li>
                                   <li><a href="26913">㟯</a></li>
                                   <li><a href="26914">㟷</a></li>
                                   <li><a href="26938">㢐</a></li>
                                   <li><a href="26951">㢿</a></li>
                                   <li><a href="26970">㣮</a></li>
                                   <li><a href="27088">郸</a></li>
                                   <li><a href="27094">酦</a></li>
                                   <li><a href="27107">鈢</a></li>
                                   <li><a href="27108">鈪</a></li>
                                   <li><a href="27109">鈫</a></li>
                                   <li><a href="27116">㥪</a></li>
                                   <li><a href="27160">㨑</a></li>
                                   <li><a href="27161">㨘</a></li>
                                   <li><a href="27183">㪙</a></li>
                                   <li><a href="27193">㫾</a></li>
                                   <li><a href="27194">㫿</a></li>
                                   <li><a href="27195">㬀</a></li>
                                   <li><a href="27230">㮉</a></li>
                                   <li><a href="27307">㴟</a></li>
                                   <li><a href="27308">㴡</a></li>
                                   <li><a href="27309">㴢</a></li>
                                   <li><a href="27310">㴣</a></li>
                                   <li><a href="27311">㴤</a></li>
                                   <li><a href="27340">㷌</a></li>
                                   <li><a href="27341">㷍</a></li>
                                   <li><a href="27382">㻘</a></li>
                                   <li><a href="27383">㻙</a></li>
                                   <li><a href="27384">㻛</a></li>
                                   <li><a href="27385">㻜</a></li>
                                   <li><a href="27388">㻤</a></li>
                                   <li><a href="27454">䦉</a></li>
                                   <li><a href="27497">䠲</a></li>
                                   <li><a href="27525">䙻</a></li>
                                   <li><a href="27526">䙶</a></li>
                                   <li><a href="27533">䘲</a></li>
                                   <li><a href="27571">䑮</a></li>
                                   <li><a href="27598">䋞</a></li>
                                   <li><a href="27607">䇴</a></li>
                                   <li><a href="27623">䄊</a></li>
                                   <li><a href="27635">䂶</a></li>
                                   <li><a href="27712">𤟱</a></li>
                                   <li><a href="27722">𠁈</a></li>
                                   <li><a href="27745">𧚄</a></li>
                                   <li><a href="27787">𠷡</a></li>
                                   <li><a href="27795">𡈁</a></li>
                                   <li><a href="27807">𡙇</a></li>
                                   <li><a href="27834">𢛳</a></li>
                                   <li><a href="27843">𢰤</a></li>
                                   <li><a href="27846">𣇵</a></li>
                                   <li><a href="27847">𣆶</a></li>
                                   <li><a href="27861">𣓤</a></li>
                                   <li><a href="27862">𣕚</a></li>
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
          </aside>   <script>
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
     </div><!--wrapper-->
     <?php wp_footer() ?>