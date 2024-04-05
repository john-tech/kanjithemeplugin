<?php
/*
 * Template Name: kakusu11
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
               <h1 class="ttl_main">１１画の漢字一覧（漢検級順）</h1>

               <p>総画数１１画の漢字の一覧です。<br>
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
                                   <option value="#" selected>１１画</option>
                                   <option value="kakusu12">１２画</option>
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
                              <li><a href="bkakusu11">部首別順</a></li>
                              <li><a href="ckakusu11">読み順</a></li>
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
                                   <li><a class="color1" href="kanji/109">魚</a></li>
                                   <li><a class="color1" href="kanji/110">教</a></li>
                                   <li><a class="color1" href="kanji/111">強</a></li>
                                   <li><a class="color1" href="kanji/132">黄</a></li>
                                   <li><a class="color1" href="kanji/138">黒</a></li>
                                   <li><a class="color1" href="kanji/139">細</a></li>
                                   <li><a class="color1" href="kanji/156">週</a></li>
                                   <li><a class="color1" href="kanji/173">雪</a></li>
                                   <li><a class="color1" href="kanji/175">船</a></li>
                                   <li><a class="color1" href="kanji/178">組</a></li>
                                   <li><a class="color1" href="kanji/192">鳥</a></li>
                                   <li><a class="color1" href="kanji/231">野</a></li>
                                   <li><a class="color1" href="kanji/238">理</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts08">
                              <h3 class="ttl_while"><a href="kyu08">漢字検定８級（小学校３年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/240">悪</a></li>
                                   <li><a class="color1" href="kanji/271">球</a></li>
                                   <li><a class="color1" href="kanji/298">祭</a></li>
                                   <li><a class="color1" href="kanji/320">習</a></li>
                                   <li><a class="color1" href="kanji/323">終</a></li>
                                   <li><a class="color1" href="kanji/327">宿</a></li>
                                   <li><a class="color1" href="kanji/333">章</a></li>
                                   <li><a class="color1" href="kanji/334">商</a></li>
                                   <li><a class="color1" href="kanji/339">進</a></li>
                                   <li><a class="color1" href="kanji/341">深</a></li>
                                   <li><a class="color1" href="kanji/352">族</a></li>
                                   <li><a class="color1" href="kanji/358">第</a></li>
                                   <li><a class="color1" href="kanji/367">帳</a></li>
                                   <li><a class="color1" href="kanji/372">笛</a></li>
                                   <li><a class="color1" href="kanji/374">転</a></li>
                                   <li><a class="color1" href="kanji/375">都</a></li>
                                   <li><a class="color1" href="kanji/383">動</a></li>
                                   <li><a class="color1" href="kanji/406">部</a></li>
                                   <li><a class="color1" href="kanji/417">問</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts07">
                              <h3 class="ttl_while"><a href="kyu07">漢字検定７級（小学校４年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/452">貨</a></li>
                                   <li><a class="color1" href="kanji/457">械</a></li>
                                   <li><a class="color1" href="kanji/497">健</a></li>
                                   <li><a class="color1" href="504">康</a></li>
                                   <li><a class="color1" href="508">菜</a></li>
                                   <li><a class="color1" href="517">産</a></li>
                                   <li><a class="color1" href="534">唱</a></li>
                                   <li><a class="color1" href="544">清</a></li>
                                   <li><a class="color1" href="555">巣</a></li>
                                   <li><a class="color1" href="559">側</a></li>
                                   <li><a class="color1" href="589">敗</a></li>
                                   <li><a class="color1" href="596">票</a></li>
                                   <li><a class="color1" href="603">副</a></li>
                                   <li><a class="color1" href="612">望</a></li>
                                   <li><a class="color1" href="625">陸</a></li>
                                   <li><a class="color1" href="1703">崎</a>
                                   </li>
                                   <li><a class="color1" href="2010">埼</a>
                                   </li>
                                   <li><a class="color1" href="2018">鹿</a>
                                   </li>
                                   <li><a class="color1" href="2079">梨</a>
                                   </li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts06">
                              <h3 class="ttl_while"><a href="kyu06">漢字検定６級（小学校５年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/477">救</a></li>
                                   <li><a class="color1" href="572">停</a></li>
                                   <li><a class="color1" href="582">堂</a></li>
                                   <li><a class="color1" href="584">得</a></li>
                                   <li><a class="color1" href="641">移</a></li>
                                   <li><a class="color1" href="648">液</a></li>
                                   <li><a class="color1" href="668">眼</a></li>
                                   <li><a class="color1" href="669">規</a></li>
                                   <li><a class="color1" href="670">基</a></li>
                                   <li><a class="color1" href="671">寄</a></li>
                                   <li><a class="color1" href="677">許</a></li>
                                   <li><a class="color1" href="684">経</a></li>
                                   <li><a class="color1" href="686">険</a></li>
                                   <li><a class="color1" href="690">現</a></li>
                                   <li><a class="color1" href="703">混</a></li>
                                   <li><a class="color1" href="706">採</a></li>
                                   <li><a class="color1" href="728">授</a></li>
                                   <li><a class="color1" href="731">術</a></li>
                                   <li><a class="color1" href="737">常</a></li>
                                   <li><a class="color1" href="740">情</a></li>
                                   <li><a class="color1" href="750">責</a></li>
                                   <li><a class="color1" href="752">設</a></li>
                                   <li><a class="color1" href="753">接</a></li>
                                   <li><a class="color1" href="771">断</a></li>
                                   <li><a class="color1" href="773">張</a></li>
                                   <li><a class="color1" href="796">貧</a></li>
                                   <li><a class="color1" href="799">婦</a></li>
                                   <li><a class="color1" href="813">務</a></li>
                                   <li><a class="color1" href="820">率</a></li>
                                   <li><a class="color1" href="821">略</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts05">
                              <h3 class="ttl_while"><a href="kyu05">漢字検定５級（小学校６年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="824">異</a></li>
                                   <li><a class="color1" href="826">域</a></li>
                                   <li><a class="color1" href="848">郷</a></li>
                                   <li><a class="color1" href="879">済</a></li>
                                   <li><a class="color1" href="885">視</a></li>
                                   <li><a class="color1" href="891">捨</a></li>
                                   <li><a class="color1" href="916">推</a></li>
                                   <li><a class="color1" href="921">盛</a></li>
                                   <li><a class="color1" href="933">窓</a></li>
                                   <li><a class="color1" href="939">探</a></li>
                                   <li><a class="color1" href="947">著</a></li>
                                   <li><a class="color1" href="949">頂</a></li>
                                   <li><a class="color1" href="961">脳</a></li>
                                   <li><a class="color1" href="977">閉</a></li>
                                   <li><a class="color1" href="980">訪</a></li>
                                   <li><a class="color1" href="987">密</a></li>
                                   <li><a class="color1" href="990">訳</a></li>
                                   <li><a class="color1" href="992">郵</a></li>
                                   <li><a class="color1" href="994">翌</a></li>
                                   <li><a class="color1" href="995">欲</a></li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts04">
                              <h3 class="ttl_while"><a href="kyu04">漢字検定４級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1015">陰</a>
                                   </li>
                                   <li><a class="color1" href="1027">菓</a>
                                   </li>
                                   <li><a class="color1" href="1043">乾</a>
                                   </li>
                                   <li><a class="color1" href="1055">脚</a>
                                   </li>
                                   <li><a class="color1" href="1075">掘</a>
                                   </li>
                                   <li><a class="color1" href="1104">婚</a>
                                   </li>
                                   <li><a class="color1" href="1107">彩</a>
                                   </li>
                                   <li><a class="color1" href="1111">惨</a>
                                   </li>
                                   <li><a class="color1" href="1118">執</a>
                                   </li>
                                   <li><a class="color1" href="1121">斜</a>
                                   </li>
                                   <li><a class="color1" href="1122">釈</a>
                                   </li>
                                   <li><a class="color1" href="1123">寂</a>
                                   </li>
                                   <li><a class="color1" href="1137">紹</a>
                                   </li>
                                   <li><a class="color1" href="1179">脱</a>
                                   </li>
                                   <li><a class="color1" href="1183">淡</a>
                                   </li>
                                   <li><a class="color1" href="1199">添</a>
                                   </li>
                                   <li><a class="color1" href="1209">盗</a>
                                   </li>
                                   <li><a class="color1" href="1236">販</a>
                                   </li>
                                   <li><a class="color1" href="1248">描</a>
                                   </li>
                                   <li><a class="color1" href="1286">猛</a>
                                   </li>
                                   <li><a class="color1" href="1303">粒</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts03">
                              <h3 class="ttl_while"><a href="kyu03">漢字検定３級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1345">郭</a>
                                   </li>
                                   <li><a class="color1" href="1347">掛</a>
                                   </li>
                                   <li><a class="color1" href="1349">勘</a>
                                   </li>
                                   <li><a class="color1" href="1351">貫</a>
                                   </li>
                                   <li><a class="color1" href="1367">菊</a>
                                   </li>
                                   <li><a class="color1" href="1371">虚</a>
                                   </li>
                                   <li><a class="color1" href="1378">偶</a>
                                   </li>
                                   <li><a class="color1" href="1380">啓</a>
                                   </li>
                                   <li><a class="color1" href="1383">掲</a>
                                   </li>
                                   <li><a class="color1" href="1399">控</a>
                                   </li>
                                   <li><a class="color1" href="1412">紺</a>
                                   </li>
                                   <li><a class="color1" href="1431">赦</a>
                                   </li>
                                   <li><a class="color1" href="1460">酔</a>
                                   </li>
                                   <li><a class="color1" href="1468">惜</a>
                                   </li>
                                   <li><a class="color1" href="1474">措</a>
                                   </li>
                                   <li><a class="color1" href="1476">粗</a>
                                   </li>
                                   <li><a class="color1" href="1481">掃</a>
                                   </li>
                                   <li><a class="color1" href="1486">逮</a>
                                   </li>
                                   <li><a class="color1" href="1490">袋</a>
                                   </li>
                                   <li><a class="color1" href="1502">窒</a>
                                   </li>
                                   <li><a class="color1" href="1506">彫</a>
                                   </li>
                                   <li><a class="color1" href="1509">陳</a>
                                   </li>
                                   <li><a class="color1" href="1518">陶</a>
                                   </li>
                                   <li><a class="color1" href="1523">豚</a>
                                   </li>
                                   <li><a class="color1" href="1525">粘</a>
                                   </li>
                                   <li><a class="color1" href="1526">婆</a>
                                   </li>
                                   <li><a class="color1" href="1527">排</a>
                                   </li>
                                   <li><a class="color1" href="1528">陪</a>
                                   </li>
                                   <li><a class="color1" href="1543">符</a>
                                   </li>
                                   <li><a class="color1" href="1553">崩</a>
                                   </li>
                                   <li><a class="color1" href="1587">隆</a>
                                   </li>
                                   <li><a class="color1" href="1589">猟</a>
                                   </li>
                                   <li><a class="color1" href="1590">陵</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02j">
                              <h3 class="ttl_while"><a href="kyu02j">漢字検定準２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1606">尉</a>
                                   </li>
                                   <li><a class="color1" href="1607">逸</a>
                                   </li>
                                   <li><a class="color1" href="1624">涯</a>
                                   </li>
                                   <li><a class="color1" href="1628">殻</a>
                                   </li>
                                   <li><a class="color1" href="1631">喝</a>
                                   </li>
                                   <li><a class="color1" href="1632">渇</a>
                                   </li>
                                   <li><a class="color1" href="1637">患</a>
                                   </li>
                                   <li><a class="color1" href="1650">偽</a>
                                   </li>
                                   <li><a class="color1" href="1661">菌</a>
                                   </li>
                                   <li><a class="color1" href="1669">蛍</a>
                                   </li>
                                   <li><a class="color1" href="1671">渓</a>
                                   </li>
                                   <li><a class="color1" href="1702">斎</a>
                                   </li>
                                   <li><a class="color1" href="1715">蛇</a>
                                   </li>
                                   <li><a class="color1" href="1726">渋</a>
                                   </li>
                                   <li><a class="color1" href="1729">粛</a>
                                   </li>
                                   <li><a class="color1" href="1730">淑</a>
                                   </li>
                                   <li><a class="color1" href="1737">庶</a>
                                   </li>
                                   <li><a class="color1" href="1740">渉</a>
                                   </li>
                                   <li><a class="color1" href="1754">訟</a>
                                   </li>
                                   <li><a class="color1" href="1756">剰</a>
                                   </li>
                                   <li><a class="color1" href="1763">紳</a>
                                   </li>
                                   <li><a class="color1" href="1772">崇</a>
                                   </li>
                                   <li><a class="color1" href="1773">据</a>
                                   </li>
                                   <li><a class="color1" href="1787">旋</a>
                                   </li>
                                   <li><a class="color1" href="1802">曹</a>
                                   </li>
                                   <li><a class="color1" href="1817">眺</a>
                                   </li>
                                   <li><a class="color1" href="1820">釣</a>
                                   </li>
                                   <li><a class="color1" href="1831">偵</a>
                                   </li>
                                   <li><a class="color1" href="1840">悼</a>
                                   </li>
                                   <li><a class="color1" href="1848">軟</a>
                                   </li>
                                   <li><a class="color1" href="1856">培</a>
                                   </li>
                                   <li><a class="color1" href="1860">舶</a>
                                   </li>
                                   <li><a class="color1" href="1871">猫</a>
                                   </li>
                                   <li><a class="color1" href="1874">瓶</a>
                                   </li>
                                   <li><a class="color1" href="1887">偏</a>
                                   </li>
                                   <li><a class="color1" href="1898">堀</a>
                                   </li>
                                   <li><a class="color1" href="1902">麻</a>
                                   </li>
                                   <li><a class="color1" href="1913">唯</a>
                                   </li>
                                   <li><a class="color1" href="1914">悠</a>
                                   </li>
                                   <li><a class="color1" href="1919">庸</a>
                                   </li>
                                   <li><a class="color1" href="1930">涼</a>
                                   </li>
                                   <li><a class="color1" href="1932">累</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02">
                              <h3 class="ttl_while"><a href="kyu02">漢字検定２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1943">萎</a>
                                   </li>
                                   <li><a class="color1" href="1948">淫</a>
                                   </li>
                                   <li><a class="color1" href="1964">崖</a>
                                   </li>
                                   <li><a class="color1" href="1975">亀</a>
                                   </li>
                                   <li><a class="color1" href="1983">惧</a>
                                   </li>
                                   <li><a class="color1" href="1994">舷</a>
                                   </li>
                                   <li><a class="color1" href="1999">梗</a>
                                   </li>
                                   <li><a class="color1" href="2004">頃</a>
                                   </li>
                                   <li><a class="color1" href="2005">痕</a>
                                   </li>
                                   <li><a class="color1" href="2014">斬</a>
                                   </li>
                                   <li><a class="color1" href="2024">羞</a>
                                   </li>
                                   <li><a class="color1" href="2036">戚</a>
                                   </li>
                                   <li><a class="color1" href="2045">曽</a>
                                   </li>
                                   <li><a class="color1" href="2046">爽</a>
                                   </li>
                                   <li><a class="color1" href="2052">唾</a>
                                   </li>
                                   <li><a class="color1" href="2053">堆</a>
                                   </li>
                                   <li><a class="color1" href="2075">貪</a>
                                   </li>
                                   <li><a class="color1" href="2084">捻</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01j">
                              <h3 class="ttl_while"><a href="kyu01j">漢字検定準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="2144">庵</a>
                                   </li>
                                   <li><a class="color2" href="2151">惟</a>
                                   </li>
                                   <li><a class="color2" href="2162">寅</a>
                                   </li>
                                   <li><a href="2185">掩</a></li>
                                   <li><a href="2187">焔</a></li>
                                   <li><a class="color2" href="2193">凰</a>
                                   </li>
                                   <li><a class="color2" href="2225">晦</a>
                                   </li>
                                   <li><a href="2240">掴</a></li>
                                   <li><a class="color2" href="2262">菅</a>
                                   </li>
                                   <li><a class="color2" href="2289">掬</a>
                                   </li>
                                   <li><a href="2339">躯</a></li>
                                   <li><a class="color2" href="2349">袈</a>
                                   </li>
                                   <li><a href="2353">畦</a></li>
                                   <li><a class="color2" href="2361">訣</a>
                                   </li>
                                   <li><a class="color2" href="2365">捲</a>
                                   </li>
                                   <li><a class="color2" href="2366">牽</a>
                                   </li>
                                   <li><a class="color2" href="2372">絃</a>
                                   </li>
                                   <li><a href="2376">壷</a></li>
                                   <li><a class="color2" href="2382">袴</a>
                                   </li>
                                   <li><a class="color2" href="2389">梧</a>
                                   </li>
                                   <li><a class="color2" href="2403">皐</a>
                                   </li>
                                   <li><a href="2414">袷</a></li>
                                   <li><a href="2415">釦</a></li>
                                   <li><a class="color2" href="2425">惚</a>
                                   </li>
                                   <li><a href="2428">梱</a></li>
                                   <li><a class="color2" href="2445">砦</a>
                                   </li>
                                   <li><a class="color2" href="2449">笹</a>
                                   </li>
                                   <li><a class="color2" href="2462">偲</a>
                                   </li>
                                   <li><a href="2463">匙</a></li>
                                   <li><a class="color2" href="2470">梓</a>
                                   </li>
                                   <li><a href="2474">笥</a></li>
                                   <li><a href="2480">痔</a></li>
                                   <li><a class="color2" href="2486">悉</a>
                                   </li>
                                   <li><a class="color2" href="2491">這</a>
                                   </li>
                                   <li><a class="color2" href="2497">雀</a>
                                   </li>
                                   <li><a class="color2" href="2535">惇</a>
                                   </li>
                                   <li><a class="color2" href="2537">淳</a>
                                   </li>
                                   <li><a class="color2" href="2542">渚</a>
                                   </li>
                                   <li><a href="2555">娼</a></li>
                                   <li><a class="color2" href="2559">捷</a>
                                   </li>
                                   <li><a class="color2" href="2562">梢</a>
                                   </li>
                                   <li><a class="color2" href="2570">菖</a>
                                   </li>
                                   <li><a class="color2" href="2590">埴</a>
                                   </li>
                                   <li><a class="color2" href="2615">逗</a>
                                   </li>
                                   <li><a class="color2" href="2646">釧</a>
                                   </li>
                                   <li><a href="2658">掻</a></li>
                                   <li><a class="color2" href="2680">舵</a>
                                   </li>
                                   <li><a class="color2" href="2687">雫</a>
                                   </li>
                                   <li><a class="color2" href="2690">梯</a>
                                   </li>
                                   <li><a class="color2" href="2705">琢</a>
                                   </li>
                                   <li><a class="color2" href="2709">捺</a>
                                   </li>
                                   <li><a href="2718">蛋</a></li>
                                   <li><a class="color2" href="2724">紬</a>
                                   </li>
                                   <li><a class="color2" href="2730">猪</a>
                                   </li>
                                   <li><a class="color2" href="2767">淀</a>
                                   </li>
                                   <li><a href="2769">甜</a></li>
                                   <li><a class="color2" href="2778">兜</a>
                                   </li>
                                   <li><a class="color2" href="2789">桶</a>
                                   </li>
                                   <li><a href="2792">梼</a></li>
                                   <li><a href="2793">淘</a></li>
                                   <li><a class="color2" href="2796">祷</a>
                                   </li>
                                   <li><a class="color2" href="2797">萄</a>
                                   </li>
                                   <li><a href="2828">粕</a></li>
                                   <li><a class="color2" href="2856">梶</a>
                                   </li>
                                   <li><a class="color2" href="2859">畢</a>
                                   </li>
                                   <li><a class="color2" href="2861">彪</a>
                                   </li>
                                   <li><a class="color2" href="2868">彬</a>
                                   </li>
                                   <li><a href="2872">埠</a></li>
                                   <li><a class="color2" href="2901">菩</a>
                                   </li>
                                   <li><a class="color2" href="2908">捧</a>
                                   </li>
                                   <li><a href="2910">烹</a></li>
                                   <li><a class="color2" href="2911">萌</a>
                                   </li>
                                   <li><a class="color2" href="2912">萠</a>
                                   </li>
                                   <li><a class="color2" href="2914">逢</a>
                                   </li>
                                   <li><a class="color2" href="2937">椛</a>
                                   </li>
                                   <li><a class="color2" href="2974">掠</a>
                                   </li>
                                   <li><a class="color2" href="2977">琉</a>
                                   </li>
                                   <li><a class="color2" href="2978">笠</a>
                                   </li>
                                   <li><a class="color2" href="2982">梁</a>
                                   </li>
                                   <li><a class="color2" href="2987">菱</a>
                                   </li>
                                   <li><a class="color2" href="2990">淋</a>
                                   </li>
                                   <li><a href="2995">婁</a></li>
                                   <li><a href="3003">蛎</a></li>
                                   <li><a class="color2" href="3028">埜</a>
                                   </li>
                                   <li><a href="3029">崕</a></li>
                                   <li><a href="5655">渕</a></li>
                                   <li><a class="color2" href="6456">萊</a>
                                   </li>
                                   <li><a href="6471">啞</a></li>
                                   <li><a href="12331">偓</a></li>
                                   <li><a href="12356">啐</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01">
                              <h3 class="ttl_while"><a href="kyu01">漢字検定１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="3116">偃</a></li>
                                   <li><a href="3117">偕</a></li>
                                   <li><a href="3118">偐</a></li>
                                   <li><a href="3119">偈</a></li>
                                   <li><a href="3120">偖</a></li>
                                   <li><a href="3121">偬</a></li>
                                   <li><a href="3122">偸</a></li>
                                   <li><a href="3123">做</a></li>
                                   <li><a href="3156">冕</a></li>
                                   <li><a href="3180">剪</a></li>
                                   <li><a href="3182">剳</a></li>
                                   <li><a href="3191">勗</a></li>
                                   <li><a href="3200">匐</a></li>
                                   <li><a href="3201">匏</a></li>
                                   <li><a href="3264">唹</a></li>
                                   <li><a href="3265">啀</a></li>
                                   <li><a href="3267">售</a></li>
                                   <li><a href="3268">啜</a></li>
                                   <li><a href="3269">啅</a></li>
                                   <li><a href="3270">啖</a></li>
                                   <li><a href="3271">啗</a></li>
                                   <li><a href="3272">唸</a></li>
                                   <li><a href="3327">圉</a></li>
                                   <li><a href="3343">堊</a></li>
                                   <li><a href="3344">堋</a></li>
                                   <li><a href="3390">婀</a></li>
                                   <li><a href="3391">婬</a></li>
                                   <li><a href="3392">婉</a></li>
                                   <li><a href="3393">娵</a></li>
                                   <li><a href="3394">娶</a></li>
                                   <li><a href="3395">婢</a></li>
                                   <li><a href="3396">婪</a></li>
                                   <li><a href="3424">孰</a></li>
                                   <li><a href="3430">寇</a></li>
                                   <li><a href="3457">崟</a></li>
                                   <li><a href="3458">崛</a></li>
                                   <li><a href="3459">崑</a></li>
                                   <li><a href="3460">崔</a></li>
                                   <li><a href="3461">崢</a></li>
                                   <li><a class="color2" href="3462">崚</a>
                                   </li>
                                   <li><a href="3463">崙</a></li>
                                   <li><a href="3464">崘</a></li>
                                   <li><a href="3489">帷</a></li>
                                   <li><a href="3522">弸</a></li>
                                   <li><a class="color2" href="3525">彗</a>
                                   </li>
                                   <li><a href="3533">徙</a></li>
                                   <li><a href="3534">徘</a></li>
                                   <li><a href="3578">悸</a></li>
                                   <li><a href="3579">惓</a></li>
                                   <li><a href="3580">悴</a></li>
                                   <li><a href="3582">悽</a></li>
                                   <li><a href="3583">惆</a></li>
                                   <li><a href="3584">悵</a></li>
                                   <li><a href="3585">惘</a></li>
                                   <li><a href="3647">戛</a></li>
                                   <li><a href="3654">扈</a></li>
                                   <li><a href="3690">掖</a></li>
                                   <li><a href="3691">掎</a></li>
                                   <li><a href="3692">掀</a></li>
                                   <li><a href="3693">掫</a></li>
                                   <li><a href="3694">捶</a></li>
                                   <li><a href="3696">掏</a></li>
                                   <li><a href="3697">掉</a></li>
                                   <li><a href="3698">掟</a></li>
                                   <li><a href="3699">捫</a></li>
                                   <li><a href="3762">斛</a></li>
                                   <li><a href="3782">旌</a></li>
                                   <li><a href="3786">敖</a></li>
                                   <li><a class="color2" href="3844">毬</a>
                                   </li>
                                   <li><a href="3845">毫</a></li>
                                   <li><a href="3916">晞</a></li>
                                   <li><a href="3917">晤</a></li>
                                   <li><a href="3918">晧</a></li>
                                   <li><a class="color2" href="3919">晨</a>
                                   </li>
                                   <li><a href="3920">晢</a></li>
                                   <li><a href="3938">耜</a></li>
                                   <li><a href="3942">閊</a></li>
                                   <li><a href="3947">麸</a></li>
                                   <li><a href="4008">桿</a></li>
                                   <li><a href="4013">桝</a></li>
                                   <li><a href="4031">桀</a></li>
                                   <li><a href="4032">梳</a></li>
                                   <li><a href="4043">蛄</a></li>
                                   <li><a href="4044">蚰</a></li>
                                   <li><a href="4045">蛉</a></li>
                                   <li><a href="4046">蚯</a></li>
                                   <li><a href="4047">蚶</a></li>
                                   <li><a href="4048">蚫</a></li>
                                   <li><a href="4062">蛆</a></li>
                                   <li><a href="4118">桷</a></li>
                                   <li><a href="4119">梭</a></li>
                                   <li><a href="4120">梔</a></li>
                                   <li><a href="4121">梵</a></li>
                                   <li><a href="4122">桴</a></li>
                                   <li><a href="4123">梟</a></li>
                                   <li><a href="4124">梠</a></li>
                                   <li><a href="4125">梺</a></li>
                                   <li><a href="4126">梏</a></li>
                                   <li><a class="color2" href="4127">梛</a>
                                   </li>
                                   <li><a href="4128">梃</a></li>
                                   <li><a href="4226">脣</a></li>
                                   <li><a href="4227">脯</a></li>
                                   <li><a href="4228">脛</a></li>
                                   <li><a class="color2" href="4229">脩</a>
                                   </li>
                                   <li><a href="4252">曼</a></li>
                                   <li><a href="4253">跂</a></li>
                                   <li><a href="4254">趺</a></li>
                                   <li><a href="4255">趾</a></li>
                                   <li><a href="4304">鹵</a></li>
                                   <li><a href="4361">馗</a></li>
                                   <li><a href="4377">淹</a></li>
                                   <li><a href="4378">淬</a></li>
                                   <li><a href="4379">淒</a></li>
                                   <li><a href="4380">涵</a></li>
                                   <li><a href="4381">涸</a></li>
                                   <li><a href="4382">淅</a></li>
                                   <li><a href="4383">淙</a></li>
                                   <li><a href="4384">淆</a></li>
                                   <li><a href="4385">淪</a></li>
                                   <li><a href="4386">淌</a></li>
                                   <li><a href="4387">淤</a></li>
                                   <li><a href="4459">軛</a></li>
                                   <li><a href="4520">笘</a></li>
                                   <li><a href="4521">笞</a></li>
                                   <li><a href="4522">笵</a></li>
                                   <li><a href="4523">笳</a></li>
                                   <li><a href="4524">笨</a></li>
                                   <li><a class="color2" href="4525">笙</a>
                                   </li>
                                   <li><a href="4562">欸</a></li>
                                   <li><a href="4563">欷</a></li>
                                   <li><a href="4618">琅</a></li>
                                   <li><a href="4659">硅</a></li>
                                   <li><a href="4682">釵</a></li>
                                   <li><a href="4753">絅</a></li>
                                   <li><a href="4754">紿</a></li>
                                   <li><a class="color2" href="4755">絆</a>
                                   </li>
                                   <li><a href="4756">紵</a></li>
                                   <li><a href="4757">紮</a></li>
                                   <li><a href="4758">紲</a></li>
                                   <li><a href="4831">牾</a></li>
                                   <li><a href="4833">犁</a></li>
                                   <li><a href="4839">酖</a></li>
                                   <li><a href="4856">聆</a></li>
                                   <li><a href="4857">聊</a></li>
                                   <li><a href="4870">瓷</a></li>
                                   <li><a href="4871">瓸</a></li>
                                   <li><a href="4885">舸</a></li>
                                   <li><a href="4886">舳</a></li>
                                   <li><a href="4907">烱</a></li>
                                   <li><a href="4911">焉</a></li>
                                   <li><a href="4912">烽</a></li>
                                   <li><a href="4949">訛</a></li>
                                   <li><a href="4950">訝</a></li>
                                   <li><a href="4951">訥</a></li>
                                   <li><a href="5028">袞</a></li>
                                   <li><a href="5034">袤</a></li>
                                   <li><a href="5035">袰</a></li>
                                   <li><a href="5036">袿</a></li>
                                   <li><a href="5037">裃</a></li>
                                   <li><a href="5038">裄</a></li>
                                   <li><a href="5039">袱</a></li>
                                   <li><a href="5040">袵</a></li>
                                   <li><a href="5081">勒</a></li>
                                   <li><a href="5109">猊</a></li>
                                   <li><a href="5111">猜</a></li>
                                   <li><a href="5112">猖</a></li>
                                   <li><a href="5113">猗</a></li>
                                   <li><a href="5114">猝</a></li>
                                   <li><a href="5127">羝</a></li>
                                   <li><a class="color2" href="5128">羚</a>
                                   </li>
                                   <li><a href="5153">眷</a></li>
                                   <li><a href="5154">眥</a></li>
                                   <li><a href="5155">眦</a></li>
                                   <li><a class="color2" href="5156">眸</a>
                                   </li>
                                   <li><a href="5189">陬</a></li>
                                   <li><a href="5190">陲</a></li>
                                   <li><a href="5222">痍</a></li>
                                   <li><a href="5223">疵</a></li>
                                   <li><a href="5224">痊</a></li>
                                   <li><a href="5225">痒</a></li>
                                   <li><a href="5304">殍</a></li>
                                   <li><a href="5370">菽</a></li>
                                   <li><a href="5371">萢</a></li>
                                   <li><a href="5372">菠</a></li>
                                   <li><a href="5373">菎</a></li>
                                   <li><a href="5374">菴</a></li>
                                   <li><a href="5375">菲</a></li>
                                   <li><a href="5376">萃</a></li>
                                   <li><a href="5377">萍</a></li>
                                   <li><a class="color2" href="5378">菫</a>
                                   </li>
                                   <li><a href="5379">菁</a></li>
                                   <li><a href="5380">菘</a></li>
                                   <li><a href="5450">畤</a></li>
                                   <li><a href="5456">覓</a></li>
                                   <li><a href="5467">皎</a></li>
                                   <li><a href="5483">貶</a></li>
                                   <li><a href="5508">逑</a></li>
                                   <li><a href="5509">逕</a></li>
                                   <li><a class="color2" href="5510">逞</a>
                                   </li>
                                   <li><a href="5511">逧</a></li>
                                   <li><a href="5512">逡</a></li>
                                   <li><a href="5513">逖</a></li>
                                   <li><a href="5514">逋</a></li>
                                   <li><a href="5515">逍</a></li>
                                   <li><a href="5520">逎</a></li>
                                   <li><a href="5543">竟</a></li>
                                   <li><a href="5544">竡</a></li>
                                   <li><a href="5565">盒</a></li>
                                   <li><a href="5582">衒</a></li>
                                   <li><a href="5605">翊</a></li>
                                   <li><a href="5616">窕</a></li>
                                   <li><a href="5628">舂</a></li>
                                   <li><a href="5650">谺</a></li>
                                   <li><a href="6116">寃</a></li>
                                   <li><a href="6133">厠</a></li>
                                   <li><a href="6485">勖</a></li>
                                   <li><a href="6488">屛</a></li>
                                   <li><a href="6537">晣</a></li>
                                   <li><a href="6541">悤</a></li>
                                   <li><a href="6542">埳</a></li>
                                   <li><a href="8465">躮</a></li>
                                   <li><a href="9499">萁</a></li>
                                   <li><a href="11102">悾</a></li>
                                   <li><a href="12061">梻</a></li>
                                   <li><a href="12067">梲</a></li>
                                   <li><a href="27711">𣶏</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts0101j">
                              <h3 class="ttl_while"><a href="kyu0101j">漢字検定１級 / 準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="5662">假</a></li>
                                   <li><a href="5668">區</a></li>
                                   <li><a class="color2" href="5798">圈</a>
                                   </li>
                                   <li><a class="color2" href="5799">國</a>
                                   </li>
                                   <li><a href="5890">參</a></li>
                                   <li><a class="color2" href="5977">淨</a>
                                   </li>
                                   <li><a href="5978">淺</a></li>
                                   <li><a href="6037">麥</a></li>
                                   <li><a href="6059">處</a></li>
                                   <li><a class="color2" href="6111">條</a>
                                   </li>
                                   <li><a class="color2" href="6164">將</a>
                                   </li>
                                   <li><a class="color2" href="6165">專</a>
                                   </li>
                                   <li><a class="color2" href="6173">帶</a>
                                   </li>
                                   <li><a class="color2" href="6180">從</a>
                                   </li>
                                   <li><a href="6199">敕</a></li>
                                   <li><a class="color2" href="6200">敍</a>
                                   </li>
                                   <li><a class="color2" href="6208">晝</a>
                                   </li>
                                   <li><a class="color2" href="6340">陷</a>
                                   </li>
                                   <li><a class="color2" href="6366">朗</a>
                                   </li>
                                   <li><a class="color2" href="6369">祥</a>
                                   </li>
                                   <li><a class="color2" href="6385">敏</a>
                                   </li>
                                   <li><a class="color2" href="6387">梅</a>
                                   </li>
                                   <li><a class="color2" href="6434">巢</a>
                                   </li>
                                   <li><a class="color2" href="6439">晚</a>
                                   </li>
                                   <li><a class="color2" href="6445">淚</a>
                                   </li>
                                   <li><a href="10644">硏</a></li>
                                   <li><a href="11553">敎</a></li>
                                   <li><a href="12934">殺</a></li>
                                   <li><a href="27691">連</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts">
                              <h3 class="ttl_while">漢字検定対象外</h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="5674">冨</a>
                                   </li>
                                   <li><a href="5736">寉</a></li>
                                   <li><a href="5813">剱</a></li>
                                   <li><a href="5908">絋</a></li>
                                   <li><a href="5933">渊</a></li>
                                   <li><a href="5934">淇</a></li>
                                   <li><a href="5935">淦</a></li>
                                   <li><a href="5940">萓</a></li>
                                   <li><a href="5941">萋</a></li>
                                   <li><a href="5942">菷</a></li>
                                   <li><a href="5943">釼</a></li>
                                   <li><a href="5944">釶</a></li>
                                   <li><a href="5956">畩</a></li>
                                   <li><a href="5976">淞</a></li>
                                   <li><a href="5979">淕</a></li>
                                   <li><a href="5980">淮</a></li>
                                   <li><a href="5981">渮</a></li>
                                   <li><a href="6045">軣</a></li>
                                   <li><a href="6054">啌</a></li>
                                   <li><a href="6055">啝</a></li>
                                   <li><a href="6076">埣</a></li>
                                   <li><a href="6084">崗</a></li>
                                   <li><a href="6102">笶</a></li>
                                   <li><a href="6112">梹</a></li>
                                   <li><a href="6113">梍</a></li>
                                   <li><a href="6114">桾</a></li>
                                   <li><a href="6158">梦</a></li>
                                   <li><a class="color2" href="6181">徠</a>
                                   </li>
                                   <li><a href="6188">掵</a></li>
                                   <li><a href="6201">敘</a></li>
                                   <li><a href="6212">朖</a></li>
                                   <li><a href="6257">珸</a></li>
                                   <li><a href="6260">畧</a></li>
                                   <li><a href="6263">盖</a></li>
                                   <li><a href="6297">萇</a></li>
                                   <li><a href="6299">菻</a></li>
                                   <li><a href="6322">豼</a></li>
                                   <li><a href="6323">戝</a></li>
                                   <li><a href="6324">貭</a></li>
                                   <li><a href="6325">貮</a></li>
                                   <li><a href="6334">酘</a></li>
                                   <li><a href="6337">閇</a></li>
                                   <li><a href="6813">髙</a></li>
                                   <li><a href="7281">靪</a></li>
                                   <li><a href="7370">頄</a></li>
                                   <li><a href="7453">飣</a></li>
                                   <li><a href="7462">飤</a></li>
                                   <li><a href="7471">飡</a></li>
                                   <li><a href="7528">釪</a></li>
                                   <li><a href="7529">釬</a></li>
                                   <li><a href="7531">釰</a></li>
                                   <li><a href="7532">釭</a></li>
                                   <li><a href="7533">釤</a></li>
                                   <li><a href="7534">釹</a></li>
                                   <li><a href="7535">釥</a></li>
                                   <li><a href="7536">釮</a></li>
                                   <li><a href="7537">釱</a></li>
                                   <li><a href="7538">釻</a></li>
                                   <li><a href="7539">釷</a></li>
                                   <li><a href="7540">釩</a></li>
                                   <li><a href="7597">缽</a></li>
                                   <li><a href="7675">釯</a></li>
                                   <li><a href="7867">閈</a></li>
                                   <li><a href="7882">閆</a></li>
                                   <li><a href="7936">陭</a></li>
                                   <li><a href="7941">陮</a></li>
                                   <li><a href="7942">陫</a></li>
                                   <li><a href="7943">陴</a></li>
                                   <li><a href="7953">䧑</a></li>
                                   <li><a href="7974">隿</a></li>
                                   <li><a href="7992">雩</a></li>
                                   <li><a href="8041">覔</a></li>
                                   <li><a href="8042">覐</a></li>
                                   <li><a href="8061">觖</a></li>
                                   <li><a href="8062">觕</a></li>
                                   <li><a href="8063">觘</a></li>
                                   <li><a href="8075">觗</a></li>
                                   <li><a href="8090">訩</a></li>
                                   <li><a href="8092">訢</a></li>
                                   <li><a href="8093">訤</a></li>
                                   <li><a href="8094">訯</a></li>
                                   <li><a href="8095">訬</a></li>
                                   <li><a href="8096">訠</a></li>
                                   <li><a href="8097">訦</a></li>
                                   <li><a href="8098">訫</a></li>
                                   <li><a href="8099">訧</a></li>
                                   <li><a href="8100">訞</a></li>
                                   <li><a href="8101">䚻</a></li>
                                   <li><a href="8236">谹</a></li>
                                   <li><a href="8245">豉</a></li>
                                   <li><a href="8254">豛</a></li>
                                   <li><a href="8255">豙</a></li>
                                   <li><a href="8256">豘</a></li>
                                   <li><a href="8257">豝</a></li>
                                   <li><a href="8260">豜</a></li>
                                   <li><a href="8261">猏</a></li>
                                   <li><a href="8280">䝗</a></li>
                                   <li><a href="8333">赥</a></li>
                                   <li><a href="8338">赿</a></li>
                                   <li><a href="8361">趹</a></li>
                                   <li><a href="8362">跀</a></li>
                                   <li><a href="8363">趿</a></li>
                                   <li><a href="8364">趻</a></li>
                                   <li><a href="8478">䡇</a></li>
                                   <li><a href="8483">軝</a></li>
                                   <li><a href="8485">軜</a></li>
                                   <li><a href="8496">䡈</a></li>
                                   <li><a href="8543">䡎</a></li>
                                   <li><a href="8572">䢛</a></li>
                                   <li><a href="8583">逄</a></li>
                                   <li><a href="8586">逛</a></li>
                                   <li><a href="8588">逘</a></li>
                                   <li><a href="8591">逌</a></li>
                                   <li><a href="8665">郳</a></li>
                                   <li><a href="8666">郰</a></li>
                                   <li><a href="8667">郪</a></li>
                                   <li><a href="8668">郯</a></li>
                                   <li><a href="8669">郴</a></li>
                                   <li><a href="8670">䣊</a></li>
                                   <li><a href="8671">郫</a></li>
                                   <li><a href="8674">郲</a></li>
                                   <li><a href="8680">鄀</a></li>
                                   <li><a href="8730">酓</a></li>
                                   <li><a href="8731">酗</a></li>
                                   <li><a href="8732">酙</a></li>
                                   <li><a href="8733">酚</a></li>
                                   <li><a href="8734">酛</a></li>
                                   <li><a href="8750">䣩</a></li>
                                   <li><a href="8789">䇦</a></li>
                                   <li><a href="8791">笴</a></li>
                                   <li><a href="8792">笱</a></li>
                                   <li><a href="8793">笧</a></li>
                                   <li><a href="8794">笮</a></li>
                                   <li><a href="8795">笫</a></li>
                                   <li><a href="8796">笽</a></li>
                                   <li><a href="8797">笪</a></li>
                                   <li><a href="8798">笤</a></li>
                                   <li><a href="8799">笯</a></li>
                                   <li><a href="8800">笲</a></li>
                                   <li><a href="8801">笰</a></li>
                                   <li><a href="8802">笣</a></li>
                                   <li><a href="8803">笭</a></li>
                                   <li><a href="8805">笻</a></li>
                                   <li><a href="8811">萗</a></li>
                                   <li><a href="8954">粔</a></li>
                                   <li><a href="8955">粣</a></li>
                                   <li><a href="8957">秶</a></li>
                                   <li><a href="8991">粜</a></li>
                                   <li><a href="9010">絇</a></li>
                                   <li><a href="9011">紭</a></li>
                                   <li><a href="9013">絁</a></li>
                                   <li><a href="9014">紸</a></li>
                                   <li><a href="9015">紾</a></li>
                                   <li><a href="9016">紽</a></li>
                                   <li><a href="9017">䋎</a></li>
                                   <li><a href="9018">紩</a></li>
                                   <li><a href="9019">絀</a></li>
                                   <li><a href="9020">絈</a></li>
                                   <li><a href="9021">紱</a></li>
                                   <li><a href="9022">紼</a></li>
                                   <li><a href="9074">捴</a></li>
                                   <li><a href="9172">罛</a></li>
                                   <li><a href="9176">罣</a></li>
                                   <li><a href="9204">羜</a></li>
                                   <li><a href="9205">羕</a></li>
                                   <li><a href="9227">翈</a></li>
                                   <li><a href="9228">翏</a></li>
                                   <li><a href="9229">翎</a></li>
                                   <li><a href="9249">耈</a></li>
                                   <li><a href="9260">耞</a></li>
                                   <li><a href="9261">耟</a></li>
                                   <li><a href="9262">耝</a></li>
                                   <li><a href="9278">躭</a></li>
                                   <li><a href="9280">聃</a></li>
                                   <li><a href="9281">聄</a></li>
                                   <li><a href="9315">䑛</a></li>
                                   <li><a href="9317">舑</a></li>
                                   <li><a href="9328">舺</a></li>
                                   <li><a href="9329">䑨</a></li>
                                   <li><a href="9330">舴</a></li>
                                   <li><a href="9331">舲</a></li>
                                   <li><a href="9355">艴</a></li>
                                   <li><a href="9410">菭</a></li>
                                   <li><a href="9493">菀</a></li>
                                   <li><a href="9494">菸</a></li>
                                   <li><a href="9495">菏</a></li>
                                   <li><a href="9496">菡</a></li>
                                   <li><a href="9498">萈</a></li>
                                   <li><a href="9502">萙</a></li>
                                   <li><a href="9503">菤</a></li>
                                   <li><a href="9504">菇</a></li>
                                   <li><a href="9505">莿</a></li>
                                   <li><a href="9507">菆</a></li>
                                   <li><a href="9508">菨</a></li>
                                   <li><a href="9509">萑</a></li>
                                   <li><a href="9510">菥</a></li>
                                   <li><a href="9511">菹</a></li>
                                   <li><a href="9513">萐</a></li>
                                   <li><a href="9514">萏</a></li>
                                   <li><a href="9515">菼</a></li>
                                   <li><a href="9516">菂</a></li>
                                   <li><a href="9517">菾</a></li>
                                   <li><a href="9518">菪</a></li>
                                   <li><a href="9519">菝</a></li>
                                   <li><a href="9520">萉</a></li>
                                   <li><a href="9521">菔</a></li>
                                   <li><a href="9522">荓</a></li>
                                   <li><a href="9523">萆</a></li>
                                   <li><a href="9524">菢</a></li>
                                   <li><a href="9525">菶</a></li>
                                   <li><a href="9526">菵</a></li>
                                   <li><a href="9527">莾</a></li>
                                   <li><a href="9529">菉</a></li>
                                   <li><a href="9530">䓞</a></li>
                                   <li><a href="9548">菑</a></li>
                                   <li><a href="9694">萕</a></li>
                                   <li><a href="9749">虗</a></li>
                                   <li><a href="9750">虖</a></li>
                                   <li><a href="9751">虘</a></li>
                                   <li><a href="9752">虙</a></li>
                                   <li><a href="9782">蚺</a></li>
                                   <li><a href="9792">蚵</a></li>
                                   <li><a href="9793">蚷</a></li>
                                   <li><a href="9794">蚿</a></li>
                                   <li><a href="9795">蚱</a></li>
                                   <li><a href="9796">蚻</a></li>
                                   <li><a href="9797">蚭</a></li>
                                   <li><a href="9798">蛀</a></li>
                                   <li><a href="9799">蛅</a></li>
                                   <li><a href="9801">蚳</a></li>
                                   <li><a href="9802">蛁</a></li>
                                   <li><a href="9803">蛈</a></li>
                                   <li><a href="9804">﨡</a></li>
                                   <li><a href="9805">蚾</a></li>
                                   <li><a href="9806">蚹</a></li>
                                   <li><a href="9807">蛂</a></li>
                                   <li><a href="9808">蚴</a></li>
                                   <li><a href="9809">蚸</a></li>
                                   <li><a href="9850">䖤</a></li>
                                   <li><a href="9979">衅</a></li>
                                   <li><a href="9982">眾</a></li>
                                   <li><a href="9988">衑</a></li>
                                   <li><a href="10021">袠</a></li>
                                   <li><a href="10026">裀</a></li>
                                   <li><a href="10027">袼</a></li>
                                   <li><a href="10028">袺</a></li>
                                   <li><a href="10029">袽</a></li>
                                   <li><a href="10030">袾</a></li>
                                   <li><a href="10031">袹</a></li>
                                   <li><a href="10107">玈</a></li>
                                   <li><a href="10149">珴</a></li>
                                   <li><a href="10150">琓</a></li>
                                   <li><a href="10151">琀</a></li>
                                   <li><a href="10152">珺</a></li>
                                   <li><a href="10153">琄</a></li>
                                   <li><a href="10154">琇</a></li>
                                   <li><a href="10155">珿</a></li>
                                   <li><a href="10156">珹</a></li>
                                   <li><a href="10157">琁</a></li>
                                   <li><a href="10158">珵</a></li>
                                   <li><a href="10159">珽</a></li>
                                   <li><a href="10160">珶</a></li>
                                   <li><a href="10161">珻</a></li>
                                   <li><a href="10162">琊</a></li>
                                   <li><a href="10199">琑</a></li>
                                   <li><a href="10264">瓞</a></li>
                                   <li><a href="10265">瓟</a></li>
                                   <li><a href="10272">缻</a></li>
                                   <li><a href="10289">甛</a></li>
                                   <li><a href="10291">產</a></li>
                                   <li><a href="10314">畣</a></li>
                                   <li><a href="10321">㽞</a></li>
                                   <li><a href="10364">痏</a></li>
                                   <li><a href="10365">痎</a></li>
                                   <li><a href="10367">痓</a></li>
                                   <li><a href="10368">痌</a></li>
                                   <li><a href="10369">㾐</a></li>
                                   <li><a href="10377">脴</a></li>
                                   <li><a href="10468">晥</a></li>
                                   <li><a href="10470">皏</a></li>
                                   <li><a href="10505">盔</a></li>
                                   <li><a href="10541">眭</a></li>
                                   <li><a href="10542">眶</a></li>
                                   <li><a href="10543">䀮</a></li>
                                   <li><a href="10544">䀪</a></li>
                                   <li><a href="10545">眵</a></li>
                                   <li><a href="10546">眴</a></li>
                                   <li><a href="10548">眲</a></li>
                                   <li><a href="10549">眹</a></li>
                                   <li><a href="10550">眮</a></li>
                                   <li><a href="10551">眽</a></li>
                                   <li><a href="10553">眯</a></li>
                                   <li><a href="10630">矪</a></li>
                                   <li><a href="10664">硋</a></li>
                                   <li><a href="10665">硈</a></li>
                                   <li><a href="10666">硊</a></li>
                                   <li><a href="10667">䂬</a></li>
                                   <li><a href="10668">硎</a></li>
                                   <li><a href="10669">硄</a></li>
                                   <li><a href="10670">硃</a></li>
                                   <li><a href="10671">硒</a></li>
                                   <li><a href="10672">硐</a></li>
                                   <li><a href="10673">硇</a></li>
                                   <li><a href="10674">硑</a></li>
                                   <li><a href="10675">硌</a></li>
                                   <li><a href="10676">硉</a></li>
                                   <li><a href="10686">硭</a></li>
                                   <li><a href="10792">䄅</a></li>
                                   <li><a href="10793">祫</a></li>
                                   <li><a href="10794">祩</a></li>
                                   <li><a href="10795">秼</a></li>
                                   <li><a href="10796">祧</a></li>
                                   <li><a href="10821">离</a></li>
                                   <li><a href="10823">卨</a></li>
                                   <li><a href="10845">秸</a></li>
                                   <li><a href="10846">䅈</a></li>
                                   <li><a href="10847">秱</a></li>
                                   <li><a href="10911">窊</a></li>
                                   <li><a href="10912">窐</a></li>
                                   <li><a href="10917">窔</a></li>
                                   <li><a href="10928">窑</a></li>
                                   <li><a href="10970">悘</a></li>
                                   <li><a href="10971">您</a></li>
                                   <li><a href="10972">悊</a></li>
                                   <li><a href="10973">悆</a></li>
                                   <li><a href="10974">恿</a></li>
                                   <li><a href="10976">悺</a></li>
                                   <li><a href="10981">㥃</a></li>
                                   <li><a href="10985">㤵</a></li>
                                   <li><a href="11007">悥</a></li>
                                   <li><a href="11047">㤰</a></li>
                                   <li><a href="11098">惐</a></li>
                                   <li><a href="11099">惈</a></li>
                                   <li><a href="11100">惂</a></li>
                                   <li><a href="11101">㥛</a></li>
                                   <li><a href="11103">悻</a></li>
                                   <li><a href="11104">惛</a></li>
                                   <li><a href="11106">惝</a></li>
                                   <li><a href="11108">悰</a></li>
                                   <li><a href="11109">惔</a></li>
                                   <li><a href="11110">惕</a></li>
                                   <li><a href="11111">悐</a></li>
                                   <li><a href="11112">惙</a></li>
                                   <li><a href="11113">㥏</a></li>
                                   <li><a href="11115">悱</a></li>
                                   <li><a href="11117">惏</a></li>
                                   <li><a href="11118">惊</a></li>
                                   <li><a href="11119">㥄</a></li>
                                   <li><a href="11120">惀</a></li>
                                   <li><a href="11121">悷</a></li>
                                   <li><a href="11122">惋</a></li>
                                   <li><a href="11223">戜</a></li>
                                   <li><a href="11248">挲</a></li>
                                   <li><a href="11362">掗</a></li>
                                   <li><a href="11363">捱</a></li>
                                   <li><a href="11364">掝</a></li>
                                   <li><a href="11365">捦</a></li>
                                   <li><a href="11366">掜</a></li>
                                   <li><a href="11367">掮</a></li>
                                   <li><a href="11368">掆</a></li>
                                   <li><a href="11369">掐</a></li>
                                   <li><a href="11370">掯</a></li>
                                   <li><a href="11371">掍</a></li>
                                   <li><a href="11373">掞</a></li>
                                   <li><a href="11374">掙</a></li>
                                   <li><a href="11375">捽</a></li>
                                   <li><a href="11376">捼</a></li>
                                   <li><a href="11377">㧻</a></li>
                                   <li><a href="11378">掁</a></li>
                                   <li><a href="11379">掦</a></li>
                                   <li><a href="11380">掇</a></li>
                                   <li><a href="11381">捵</a></li>
                                   <li><a href="11382">掂</a></li>
                                   <li><a href="11383">掭</a></li>
                                   <li><a href="11384">㧺</a></li>
                                   <li><a href="11385">捸</a></li>
                                   <li><a href="11386">捭</a></li>
                                   <li><a href="11387">掤</a></li>
                                   <li><a href="11388">捬</a></li>
                                   <li><a href="11389">掊</a></li>
                                   <li><a href="11391">掕</a></li>
                                   <li><a href="11392">掚</a></li>
                                   <li><a href="11393">掄</a></li>
                                   <li><a href="11394">捥</a></li>
                                   <li><a href="11552">敔</a></li>
                                   <li><a href="11554">敐</a></li>
                                   <li><a href="11555">敒</a></li>
                                   <li><a href="11556">敓</a></li>
                                   <li><a href="11558">㪍</a></li>
                                   <li><a href="11580">㪷</a></li>
                                   <li><a href="11605">旎</a></li>
                                   <li><a href="11606">旍</a></li>
                                   <li><a href="11607">旉</a></li>
                                   <li><a href="11608">旊</a></li>
                                   <li><a href="11612">旈</a></li>
                                   <li><a href="11617">旣</a></li>
                                   <li><a href="11637">曻</a></li>
                                   <li><a href="11642">朙</a></li>
                                   <li><a href="11650">萅</a></li>
                                   <li><a href="11678">晠</a></li>
                                   <li><a href="11680">晗</a></li>
                                   <li><a href="11681">晘</a></li>
                                   <li><a href="11682">晛</a></li>
                                   <li><a href="11683">晜</a></li>
                                   <li><a href="11684">晙</a></li>
                                   <li><a href="11685">晡</a></li>
                                   <li><a href="11686">㫰</a></li>
                                   <li><a href="11749">㝡</a></li>
                                   <li><a href="11810">胮</a></li>
                                   <li><a href="11813">脘</a></li>
                                   <li><a href="11816">脝</a></li>
                                   <li><a href="11817">脞</a></li>
                                   <li><a href="11818">脜</a></li>
                                   <li><a href="11819">脤</a></li>
                                   <li><a href="11821">䏰</a></li>
                                   <li><a href="11822">脧</a></li>
                                   <li><a href="11823">脠</a></li>
                                   <li><a href="11824">脫</a></li>
                                   <li><a href="11825">脡</a></li>
                                   <li><a href="11826">脰</a></li>
                                   <li><a href="11827">匘</a></li>
                                   <li><a href="11828">脢</a></li>
                                   <li><a href="11829">䏶</a></li>
                                   <li><a href="11830">脕</a></li>
                                   <li><a href="11831">脬</a></li>
                                   <li><a href="11833">脖</a></li>
                                   <li><a href="11834">脵</a></li>
                                   <li><a href="11835">脟</a></li>
                                   <li><a href="11966">梥</a></li>
                                   <li><a href="11973">桮</a></li>
                                   <li><a href="12013">桺</a></li>
                                   <li><a href="12023">桰</a></li>
                                   <li><a href="12029">栙</a></li>
                                   <li><a href="12048">梬</a></li>
                                   <li><a href="12049">㭷</a></li>
                                   <li><a href="12050">梡</a></li>
                                   <li><a href="12051">梂</a></li>
                                   <li><a href="12053">梜</a></li>
                                   <li><a href="12054">梮</a></li>
                                   <li><a href="12055">桱</a></li>
                                   <li><a href="12056">梘</a></li>
                                   <li><a href="12058">桫</a></li>
                                   <li><a href="12062">桼</a></li>
                                   <li><a href="12064">梣</a></li>
                                   <li><a href="12065">梫</a></li>
                                   <li><a href="12066">桵</a></li>
                                   <li><a href="12068">桯</a></li>
                                   <li><a href="12069">梴</a></li>
                                   <li><a href="12070">梪</a></li>
                                   <li><a href="12071">梖</a></li>
                                   <li><a href="12072">梐</a></li>
                                   <li><a href="12073">㭭</a></li>
                                   <li><a href="12074">梚</a></li>
                                   <li><a href="12075">桻</a></li>
                                   <li><a href="12076">梆</a></li>
                                   <li><a href="12077">梈</a></li>
                                   <li><a href="12078">桲</a></li>
                                   <li><a href="12080">梸</a></li>
                                   <li><a href="12081">梩</a></li>
                                   <li><a href="12082">桹</a></li>
                                   <li><a href="12099">捿</a></li>
                                   <li><a href="12115">棻</a></li>
                                   <li><a href="12165">㭨</a></li>
                                   <li><a href="12199">梙</a></li>
                                   <li><a href="12224">梄</a></li>
                                   <li><a href="12357">啑</a></li>
                                   <li><a href="12358">啍</a></li>
                                   <li><a href="12359">啘</a></li>
                                   <li><a href="12360">啚</a></li>
                                   <li><a href="12400">欵</a></li>
                                   <li><a href="12438">偘</a></li>
                                   <li><a href="12529">偯</a></li>
                                   <li><a href="12530">偊</a></li>
                                   <li><a href="12531">偣</a></li>
                                   <li><a href="12533">偟</a></li>
                                   <li><a href="12535">偢</a></li>
                                   <li><a href="12536">偆</a></li>
                                   <li><a href="12537">偱</a></li>
                                   <li><a href="12538">偦</a></li>
                                   <li><a href="12539">偁</a></li>
                                   <li><a href="12540">偅</a></li>
                                   <li><a href="12541">偗</a></li>
                                   <li><a href="12542">偰</a></li>
                                   <li><a href="12543">偫</a></li>
                                   <li><a href="12544">㣥</a></li>
                                   <li><a href="12545">偧</a></li>
                                   <li><a href="12547">偙</a></li>
                                   <li><a href="12549">偷</a></li>
                                   <li><a href="12550">偒</a></li>
                                   <li><a href="12551">偝</a></li>
                                   <li><a href="12552">偪</a></li>
                                   <li><a href="12553">偩</a></li>
                                   <li><a href="12554">偑</a></li>
                                   <li><a href="12556">偭</a></li>
                                   <li><a href="12557">倻</a></li>
                                   <li><a href="12558">偠</a></li>
                                   <li><a href="12559">偎</a></li>
                                   <li><a href="12580">偹</a></li>
                                   <li><a href="12596">偋</a></li>
                                   <li><a href="12603">偻</a></li>
                                   <li><a href="12688">㒼</a></li>
                                   <li><a href="12707">㝠</a></li>
                                   <li><a href="12725">䖏</a></li>
                                   <li><a href="12764">偂</a></li>
                                   <li><a href="12782">剭</a></li>
                                   <li><a href="12783">剮</a></li>
                                   <li><a href="12785">剨</a></li>
                                   <li><a href="12786">㓵</a></li>
                                   <li><a href="12787">㓶</a></li>
                                   <li><a href="12788">剫</a></li>
                                   <li><a href="12789">剬</a></li>
                                   <li><a href="12790">剶</a></li>
                                   <li><a href="12836">惞</a></li>
                                   <li><a href="12852">欫</a></li>
                                   <li><a href="12854">欶</a></li>
                                   <li><a href="12857">勔</a></li>
                                   <li><a href="12864">勚</a></li>
                                   <li><a href="12900">殑</a></li>
                                   <li><a href="12935">殹</a></li>
                                   <li><a href="12937">殸</a></li>
                                   <li><a href="12948">匒</a></li>
                                   <li><a href="12974">毮</a></li>
                                   <li><a href="12988">匭</a></li>
                                   <li><a href="12989">匾</a></li>
                                   <li><a href="12990">匬</a></li>
                                   <li><a href="13002">卙</a></li>
                                   <li><a href="13028">乿</a></li>
                                   <li><a href="13076">偄</a></li>
                                   <li><a href="13077">偍</a></li>
                                   <li><a href="13078">偛</a></li>
                                   <li><a href="13079">偞</a></li>
                                   <li><a href="13080">偡</a></li>
                                   <li><a href="13081">偤</a></li>
                                   <li><a href="13083">偮</a></li>
                                   <li><a href="13084">偳</a></li>
                                   <li><a href="13085">偺</a></li>
                                   <li><a href="13086">偼</a></li>
                                   <li><a href="13088">傇</a></li>
                                   <li><a href="13115">兝</a></li>
                                   <li><a href="13116">兞</a></li>
                                   <li><a href="13132">减</a></li>
                                   <li><a href="13133">凐</a></li>
                                   <li><a href="13134">凑</a></li>
                                   <li><a href="13164">勓</a></li>
                                   <li><a href="13181">卾</a></li>
                                   <li><a href="13196">厡</a></li>
                                   <li><a href="13211">叄</a></li>
                                   <li><a href="13371">唩</a></li>
                                   <li><a href="13372">唪</a></li>
                                   <li><a href="13373">唫</a></li>
                                   <li><a href="13374">唬</a></li>
                                   <li><a href="13375">唭</a></li>
                                   <li><a href="13376">唰</a></li>
                                   <li><a href="13377">唲</a></li>
                                   <li><a href="13378">唴</a></li>
                                   <li><a href="13379">唵</a></li>
                                   <li><a href="13380">唶</a></li>
                                   <li><a href="13381">唷</a></li>
                                   <li><a href="13382">唺</a></li>
                                   <li><a href="13383">唻</a></li>
                                   <li><a href="13384">唼</a></li>
                                   <li><a href="13385">唽</a></li>
                                   <li><a href="13386">唿</a></li>
                                   <li><a href="13387">啁</a></li>
                                   <li><a href="13388">啂</a></li>
                                   <li><a href="13389">啃</a></li>
                                   <li><a href="13390">啈</a></li>
                                   <li><a href="13391">啉</a></li>
                                   <li><a href="13392">啊</a></li>
                                   <li><a href="13393">啋</a></li>
                                   <li><a href="13394">啎</a></li>
                                   <li><a href="13395">啒</a></li>
                                   <li><a href="13396">啔</a></li>
                                   <li><a href="13397">啕</a></li>
                                   <li><a href="13399">啛</a></li>
                                   <li><a href="13400">啟</a></li>
                                   <li><a href="13401">啠</a></li>
                                   <li><a href="13402">啡</a></li>
                                   <li><a href="13403">啢</a></li>
                                   <li><a href="13404">啤</a></li>
                                   <li><a href="13405">啥</a></li>
                                   <li><a href="13406">啦</a></li>
                                   <li><a href="13407">啵</a></li>
                                   <li><a href="13435">喯</a></li>
                                   <li><a href="13440">喵</a></li>
                                   <li><a href="13622">圇</a></li>
                                   <li><a href="13623">圊</a></li>
                                   <li><a href="13746">埝</a></li>
                                   <li><a href="13747">埞</a></li>
                                   <li><a href="13748">埡</a></li>
                                   <li><a href="13749">埢</a></li>
                                   <li><a href="13750">埤</a></li>
                                   <li><a href="13751">埥</a></li>
                                   <li><a href="13752">埦</a></li>
                                   <li><a href="13753">埧</a></li>
                                   <li><a href="13754">埨</a></li>
                                   <li><a href="13755">埩</a></li>
                                   <li><a href="13756">埪</a></li>
                                   <li><a href="13757">埫</a></li>
                                   <li><a href="13758">埬</a></li>
                                   <li><a href="13759">埭</a></li>
                                   <li><a href="13760">埮</a></li>
                                   <li><a href="13761">埯</a></li>
                                   <li><a href="13762">埰</a></li>
                                   <li><a href="13763">埱</a></li>
                                   <li><a href="13764">埲</a></li>
                                   <li><a href="13765">埵</a></li>
                                   <li><a href="13766">埻</a></li>
                                   <li><a href="13767">埽</a></li>
                                   <li><a href="13768">埾</a></li>
                                   <li><a href="13769">埿</a></li>
                                   <li><a href="13770">堁</a></li>
                                   <li><a href="13771">堃</a></li>
                                   <li><a href="13772">堄</a></li>
                                   <li><a href="13773">堇</a></li>
                                   <li><a href="13774">堈</a></li>
                                   <li><a href="13775">堉</a></li>
                                   <li><a href="13776">堌</a></li>
                                   <li><a href="13777">堍</a></li>
                                   <li><a href="13904">够</a></li>
                                   <li><a href="13905">夠</a></li>
                                   <li><a href="13924">奛</a></li>
                                   <li><a href="13925">奜</a></li>
                                   <li><a href="13926">奝</a></li>
                                   <li><a href="13927">奞</a></li>
                                   <li><a href="13928">奟</a></li>
                                   <li><a href="14054">娬</a></li>
                                   <li><a href="14059">娷</a></li>
                                   <li><a href="14060">娸</a></li>
                                   <li><a href="14061">娹</a></li>
                                   <li><a href="14062">娺</a></li>
                                   <li><a href="14063">娻</a></li>
                                   <li><a href="14064">娽</a></li>
                                   <li><a href="14065">娾</a></li>
                                   <li><a href="14066">娿</a></li>
                                   <li><a href="14067">婂</a></li>
                                   <li><a href="14068">婃</a></li>
                                   <li><a href="14069">婄</a></li>
                                   <li><a href="14070">婅</a></li>
                                   <li><a href="14071">婇</a></li>
                                   <li><a href="14072">婈</a></li>
                                   <li><a href="14073">婊</a></li>
                                   <li><a href="14074">婋</a></li>
                                   <li><a href="14075">婍</a></li>
                                   <li><a href="14076">婎</a></li>
                                   <li><a href="14077">婏</a></li>
                                   <li><a href="14078">婐</a></li>
                                   <li><a href="14079">婑</a></li>
                                   <li><a href="14080">婒</a></li>
                                   <li><a href="14081">婓</a></li>
                                   <li><a href="14082">婔</a></li>
                                   <li><a href="14083">婕</a></li>
                                   <li><a href="14084">婖</a></li>
                                   <li><a href="14085">婗</a></li>
                                   <li><a href="14086">婘</a></li>
                                   <li><a href="14087">婙</a></li>
                                   <li><a href="14088">婛</a></li>
                                   <li><a href="14090">婝</a></li>
                                   <li><a href="14091">婞</a></li>
                                   <li><a href="14092">婟</a></li>
                                   <li><a href="14093">婠</a></li>
                                   <li><a href="14094">婡</a></li>
                                   <li><a href="14096">婤</a></li>
                                   <li><a href="14097">婥</a></li>
                                   <li><a href="14098">婨</a></li>
                                   <li><a href="14099">婩</a></li>
                                   <li><a href="14100">婫</a></li>
                                   <li><a href="14101">婭</a></li>
                                   <li><a href="14102">婮</a></li>
                                   <li><a href="14103">婯</a></li>
                                   <li><a href="14104">婰</a></li>
                                   <li><a href="14105">婱</a></li>
                                   <li><a href="14112">婼</a></li>
                                   <li><a href="14127">媌</a></li>
                                   <li><a href="14277">孮</a></li>
                                   <li><a href="14278">孲</a></li>
                                   <li><a href="14295">宧</a></li>
                                   <li><a href="14307">寀</a></li>
                                   <li><a href="14308">寁</a></li>
                                   <li><a href="14309">寈</a></li>
                                   <li><a href="14366">屙</a></li>
                                   <li><a href="14367">屚</a></li>
                                   <li><a href="14368">屜</a></li>
                                   <li><a href="14369">屝</a></li>
                                   <li><a href="14461">崆</a></li>
                                   <li><a href="14462">崈</a></li>
                                   <li><a href="14463">崉</a></li>
                                   <li><a href="14464">崊</a></li>
                                   <li><a href="14465">崌</a></li>
                                   <li><a href="14466">崍</a></li>
                                   <li><a href="14467">崏</a></li>
                                   <li><a href="14468">崐</a></li>
                                   <li><a href="14469">崒</a></li>
                                   <li><a href="14470">崓</a></li>
                                   <li><a href="14471">崜</a></li>
                                   <li><a href="14472">崝</a></li>
                                   <li><a href="14473">崞</a></li>
                                   <li><a href="14474">崠</a></li>
                                   <li><a href="14475">崡</a></li>
                                   <li><a href="14476">崣</a></li>
                                   <li><a href="14477">崤</a></li>
                                   <li><a href="14478">崥</a></li>
                                   <li><a href="14479">崦</a></li>
                                   <li><a href="14480">崨</a></li>
                                   <li><a href="14481">崫</a></li>
                                   <li><a href="14631">帲</a></li>
                                   <li><a href="14632">帴</a></li>
                                   <li><a href="14633">帵</a></li>
                                   <li><a href="14634">帹</a></li>
                                   <li><a href="14635">帺</a></li>
                                   <li><a href="14689">庱</a></li>
                                   <li><a href="14690">庲</a></li>
                                   <li><a href="14691">庴</a></li>
                                   <li><a href="14692">庹</a></li>
                                   <li><a href="14693">庺</a></li>
                                   <li><a href="14740">弴</a></li>
                                   <li><a href="14741">弶</a></li>
                                   <li><a href="14777">徖</a></li>
                                   <li><a href="14778">徛</a></li>
                                   <li><a href="14779">徜</a></li>
                                   <li><a href="14780">徝</a></li>
                                   <li><a href="14781">徟</a></li>
                                   <li><a href="14782">徢</a></li>
                                   <li><a href="14783">徣</a></li>
                                   <li><a href="14835">悡</a></li>
                                   <li><a href="14837">悿</a></li>
                                   <li><a href="14839">惃</a></li>
                                   <li><a href="14841">惍</a></li>
                                   <li><a href="14844">惗</a></li>
                                   <li><a href="14845">惤</a></li>
                                   <li><a href="14846">惦</a></li>
                                   <li><a href="14854">愥</a></li>
                                   <li><a href="14949">捪</a></li>
                                   <li><a href="14950">捯</a></li>
                                   <li><a href="14951">捰</a></li>
                                   <li><a href="14952">捳</a></li>
                                   <li><a href="14953">捹</a></li>
                                   <li><a href="14954">捾</a></li>
                                   <li><a href="14955">掅</a></li>
                                   <li><a href="14956">掋</a></li>
                                   <li><a href="14957">掑</a></li>
                                   <li><a href="14958">掓</a></li>
                                   <li><a href="14961">掿</a></li>
                                   <li><a href="15073">斍</a></li>
                                   <li><a href="15080">旇</a></li>
                                   <li><a href="15138">朘</a></li>
                                   <li><a href="15139">朚</a></li>
                                   <li><a href="15176">栕</a></li>
                                   <li><a href="15189">桬</a></li>
                                   <li><a href="15190">桭</a></li>
                                   <li><a href="15191">桳</a></li>
                                   <li><a href="15192">桸</a></li>
                                   <li><a href="15193">桽</a></li>
                                   <li><a href="15194">梀</a></li>
                                   <li><a href="15195">梇</a></li>
                                   <li><a href="15196">梉</a></li>
                                   <li><a href="15197">梊</a></li>
                                   <li><a href="15198">梋</a></li>
                                   <li><a href="15199">梌</a></li>
                                   <li><a href="15200">梎</a></li>
                                   <li><a href="15201">梑</a></li>
                                   <li><a href="15202">梒</a></li>
                                   <li><a href="15203">梕</a></li>
                                   <li><a href="15204">梞</a></li>
                                   <li><a href="15205">梤</a></li>
                                   <li><a href="15206">梷</a></li>
                                   <li><a href="15207">棁</a></li>
                                   <li><a href="15220">椘</a></li>
                                   <li><a href="15344">欳</a></li>
                                   <li><a href="15345">欴</a></li>
                                   <li><a href="15360">殌</a></li>
                                   <li><a href="15361">殎</a></li>
                                   <li><a href="15362">殏</a></li>
                                   <li><a href="15363">殐</a></li>
                                   <li><a href="15377">毭</a></li>
                                   <li><a href="15404">氪</a></li>
                                   <li><a href="15405">氫</a></li>
                                   <li><a href="15521">洍</a></li>
                                   <li><a href="15603">涪</a></li>
                                   <li><a href="15604">涫</a></li>
                                   <li><a href="15605">涬</a></li>
                                   <li><a href="15606">涭</a></li>
                                   <li><a href="15607">涮</a></li>
                                   <li><a href="15608">涰</a></li>
                                   <li><a href="15609">涱</a></li>
                                   <li><a href="15610">涳</a></li>
                                   <li><a href="15611">涴</a></li>
                                   <li><a href="15612">涶</a></li>
                                   <li><a href="15613">涷</a></li>
                                   <li><a href="15614">涹</a></li>
                                   <li><a href="15615">涺</a></li>
                                   <li><a href="15616">涻</a></li>
                                   <li><a href="15617">涽</a></li>
                                   <li><a href="15618">涾</a></li>
                                   <li><a href="15619">淁</a></li>
                                   <li><a href="15620">淂</a></li>
                                   <li><a href="15621">淄</a></li>
                                   <li><a href="15622">淈</a></li>
                                   <li><a href="15623">淉</a></li>
                                   <li><a href="15624">淍</a></li>
                                   <li><a href="15625">淎</a></li>
                                   <li><a href="15626">淏</a></li>
                                   <li><a href="15627">淐</a></li>
                                   <li><a href="15629">淔</a></li>
                                   <li><a href="15630">淖</a></li>
                                   <li><a href="15631">淗</a></li>
                                   <li><a href="15632">淛</a></li>
                                   <li><a href="15633">淜</a></li>
                                   <li><a href="15634">淝</a></li>
                                   <li><a href="15635">淟</a></li>
                                   <li><a href="15636">淠</a></li>
                                   <li><a href="15637">淢</a></li>
                                   <li><a href="15638">淣</a></li>
                                   <li><a href="15639">淥</a></li>
                                   <li><a href="15640">淧</a></li>
                                   <li><a href="15641">淩</a></li>
                                   <li><a href="15642">淭</a></li>
                                   <li><a href="15643">淯</a></li>
                                   <li><a href="15644">淰</a></li>
                                   <li><a href="15645">淲</a></li>
                                   <li><a href="15646">淴</a></li>
                                   <li><a href="15647">淶</a></li>
                                   <li><a href="15648">淸</a></li>
                                   <li><a href="15652">淿</a></li>
                                   <li><a href="15653">渀</a></li>
                                   <li><a href="15654">渁</a></li>
                                   <li><a href="15655">渂</a></li>
                                   <li><a href="15656">渃</a></li>
                                   <li><a href="15657">渄</a></li>
                                   <li><a href="15658">渆</a></li>
                                   <li><a href="15659">渒</a></li>
                                   <li><a href="15660">渗</a></li>
                                   <li><a href="15670">渵</a></li>
                                   <li><a href="16074">烯</a></li>
                                   <li><a href="16075">烰</a></li>
                                   <li><a href="16076">烲</a></li>
                                   <li><a href="16077">烳</a></li>
                                   <li><a href="16078">烴</a></li>
                                   <li><a href="16080">烶</a></li>
                                   <li><a href="16081">烷</a></li>
                                   <li><a href="16082">烸</a></li>
                                   <li><a href="16083">烺</a></li>
                                   <li><a href="16084">烻</a></li>
                                   <li><a href="16085">烼</a></li>
                                   <li><a href="16086">烾</a></li>
                                   <li><a href="16087">烿</a></li>
                                   <li><a href="16088">焀</a></li>
                                   <li><a href="16089">焁</a></li>
                                   <li><a href="16090">焂</a></li>
                                   <li><a href="16091">焃</a></li>
                                   <li><a href="16092">焄</a></li>
                                   <li><a href="16093">焅</a></li>
                                   <li><a href="16094">焆</a></li>
                                   <li><a href="16095">焇</a></li>
                                   <li><a href="16096">焈</a></li>
                                   <li><a href="16097">焊</a></li>
                                   <li><a href="16098">焋</a></li>
                                   <li><a href="16099">焌</a></li>
                                   <li><a href="16100">焍</a></li>
                                   <li><a href="16101">焎</a></li>
                                   <li><a href="16102">焘</a></li>
                                   <li><a href="16311">牻</a></li>
                                   <li><a href="16312">牼</a></li>
                                   <li><a href="16313">牿</a></li>
                                   <li><a href="16391">猄</a></li>
                                   <li><a href="16392">猅</a></li>
                                   <li><a href="16394">猇</a></li>
                                   <li><a href="16395">猈</a></li>
                                   <li><a href="16396">猉</a></li>
                                   <li><a href="16398">猍</a></li>
                                   <li><a href="16399">猎</a></li>
                                   <li><a href="16400">猐</a></li>
                                   <li><a href="16401">猑</a></li>
                                   <li><a href="16403">猓</a></li>
                                   <li><a href="16404">猔</a></li>
                                   <li><a href="16405">猕</a></li>
                                   <li><a href="16406">猘</a></li>
                                   <li><a href="16407">猙</a></li>
                                   <li><a href="16408">猚</a></li>
                                   <li><a href="16409">猞</a></li>
                                   <li><a href="16507">珳</a></li>
                                   <li><a href="16508">珼</a></li>
                                   <li><a href="16509">琂</a></li>
                                   <li><a href="16510">琈</a></li>
                                   <li><a href="16511">琋</a></li>
                                   <li><a href="16512">琌</a></li>
                                   <li><a href="16513">琍</a></li>
                                   <li><a href="16591">畖</a></li>
                                   <li><a href="16600">痋</a></li>
                                   <li><a href="16601">痑</a></li>
                                   <li><a href="16621">皉</a></li>
                                   <li><a href="16633">盓</a></li>
                                   <li><a href="16634">盕</a></li>
                                   <li><a href="16654">眰</a></li>
                                   <li><a href="16655">眱</a></li>
                                   <li><a href="16656">眳</a></li>
                                   <li><a href="16657">眻</a></li>
                                   <li><a href="16658">睁</a></li>
                                   <li><a href="16728">硂</a></li>
                                   <li><a href="16729">硆</a></li>
                                   <li><a href="16730">硍</a></li>
                                   <li><a href="16787">祤</a></li>
                                   <li><a href="16789">祪</a></li>
                                   <li><a href="16817">秲</a></li>
                                   <li><a href="16818">秳</a></li>
                                   <li><a href="16819">秴</a></li>
                                   <li><a href="16820">秵</a></li>
                                   <li><a href="16821">秷</a></li>
                                   <li><a href="16822">秹</a></li>
                                   <li><a href="16823">秺</a></li>
                                   <li><a href="16851">窏</a></li>
                                   <li><a href="16879">笖</a></li>
                                   <li><a href="16880">笗</a></li>
                                   <li><a href="16881">笚</a></li>
                                   <li><a href="16882">笜</a></li>
                                   <li><a href="16883">笝</a></li>
                                   <li><a href="16884">笡</a></li>
                                   <li><a href="16885">笢</a></li>
                                   <li><a href="16886">笩</a></li>
                                   <li><a href="16887">笷</a></li>
                                   <li><a href="16888">笸</a></li>
                                   <li><a href="16957">粓</a></li>
                                   <li><a href="16958">粖</a></li>
                                   <li><a href="16959">粙</a></li>
                                   <li><a href="16960">粚</a></li>
                                   <li><a href="16961">粝</a></li>
                                   <li><a href="16983">紨</a></li>
                                   <li><a href="16984">紴</a></li>
                                   <li><a href="16985">紶</a></li>
                                   <li><a href="16986">紷</a></li>
                                   <li><a href="16987">紻</a></li>
                                   <li><a href="16988">絉</a></li>
                                   <li><a href="16989">絊</a></li>
                                   <li><a href="17069">羛</a></li>
                                   <li><a href="17077">翇</a></li>
                                   <li><a href="17078">翉</a></li>
                                   <li><a href="17079">翋</a></li>
                                   <li><a href="17080">翍</a></li>
                                   <li><a href="17081">翐</a></li>
                                   <li><a href="17082">翑</a></li>
                                   <li><a href="17098">耚</a></li>
                                   <li><a href="17099">耛</a></li>
                                   <li><a href="17106">聅</a></li>
                                   <li><a href="17107">聇</a></li>
                                   <li><a href="17108">聈</a></li>
                                   <li><a href="17109">聉</a></li>
                                   <li><a href="17144">脗</a></li>
                                   <li><a href="17145">脙</a></li>
                                   <li><a href="17146">脥</a></li>
                                   <li><a href="17147">脦</a></li>
                                   <li><a href="17148">脨</a></li>
                                   <li><a href="17149">脪</a></li>
                                   <li><a href="17150">脭</a></li>
                                   <li><a href="17151">脮</a></li>
                                   <li><a href="17152">脲</a></li>
                                   <li><a href="17246">菃</a></li>
                                   <li><a href="17247">菄</a></li>
                                   <li><a href="17248">菈</a></li>
                                   <li><a href="17249">菋</a></li>
                                   <li><a href="17250">菍</a></li>
                                   <li><a href="17252">菕</a></li>
                                   <li><a href="17253">菗</a></li>
                                   <li><a href="17254">菙</a></li>
                                   <li><a href="17255">菚</a></li>
                                   <li><a href="17256">菛</a></li>
                                   <li><a href="17257">菞</a></li>
                                   <li><a href="17258">菦</a></li>
                                   <li><a href="17259">菧</a></li>
                                   <li><a href="17260">菬</a></li>
                                   <li><a href="17261">菮</a></li>
                                   <li><a href="17262">菺</a></li>
                                   <li><a href="17263">菿</a></li>
                                   <li><a href="17264">萀</a></li>
                                   <li><a href="17265">萂</a></li>
                                   <li><a href="17266">萒</a></li>
                                   <li><a href="17267">萔</a></li>
                                   <li><a href="17268">萘</a></li>
                                   <li><a href="17269">萟</a></li>
                                   <li><a href="17270">萤</a></li>
                                   <li><a href="17271">营</a></li>
                                   <li><a href="17427">蚮</a></li>
                                   <li><a href="17428">蚲</a></li>
                                   <li><a href="17429">蚼</a></li>
                                   <li><a href="17430">蚽</a></li>
                                   <li><a href="17431">蛃</a></li>
                                   <li><a href="17432">蛊</a></li>
                                   <li><a href="17543">袌</a></li>
                                   <li><a href="17554">袬</a></li>
                                   <li><a href="17556">袳</a></li>
                                   <li><a href="17558">袸</a></li>
                                   <li><a href="17559">袻</a></li>
                                   <li><a href="17603">覑</a></li>
                                   <li><a href="17604">覒</a></li>
                                   <li><a href="17617">觙</a></li>
                                   <li><a href="17635">訜</a></li>
                                   <li><a href="17636">訡</a></li>
                                   <li><a href="17637">訨</a></li>
                                   <li><a href="17638">訮</a></li>
                                   <li><a href="17639">訰</a></li>
                                   <li><a href="17640">訲</a></li>
                                   <li><a href="17731">谻</a></li>
                                   <li><a href="17745">豽</a></li>
                                   <li><a href="17758">貥</a></li>
                                   <li><a href="17759">貦</a></li>
                                   <li><a href="17781">赹</a></li>
                                   <li><a href="17782">赺</a></li>
                                   <li><a href="17783">赻</a></li>
                                   <li><a href="17784">赼</a></li>
                                   <li><a href="17785">赽</a></li>
                                   <li><a href="17786">赾</a></li>
                                   <li><a href="17812">趽</a></li>
                                   <li><a href="17813">跁</a></li>
                                   <li><a href="17875">軖</a></li>
                                   <li><a href="17876">軗</a></li>
                                   <li><a href="17877">軘</a></li>
                                   <li><a href="17878">軙</a></li>
                                   <li><a href="17879">軞</a></li>
                                   <li><a href="17880">軠</a></li>
                                   <li><a href="17881">軡</a></li>
                                   <li><a href="17918">递</a></li>
                                   <li><a href="17919">逜</a></li>
                                   <li><a href="17920">逥</a></li>
                                   <li><a href="17953">郩</a></li>
                                   <li><a href="17954">郬</a></li>
                                   <li><a href="17955">郮</a></li>
                                   <li><a href="17977">酕</a></li>
                                   <li><a href="17997">釨</a></li>
                                   <li><a href="17998">釫</a></li>
                                   <li><a href="17999">釲</a></li>
                                   <li><a href="18000">釳</a></li>
                                   <li><a href="18001">釴</a></li>
                                   <li><a href="18002">釸</a></li>
                                   <li><a href="18159">镺</a></li>
                                   <li><a href="18192">陚</a></li>
                                   <li><a href="18194">陯</a></li>
                                   <li><a href="18195">陱</a></li>
                                   <li><a href="18196">陹</a></li>
                                   <li><a href="18635">﨣</a></li>
                                   <li><a href="18665">㐡</a></li>
                                   <li><a href="18666">㐢</a></li>
                                   <li><a href="18667">㐣</a></li>
                                   <li><a href="18706">㑮</a></li>
                                   <li><a href="18707">㑯</a></li>
                                   <li><a href="18708">㑱</a></li>
                                   <li><a href="18759">㒻</a></li>
                                   <li><a href="18775">㓓</a></li>
                                   <li><a href="18778">㓘</a></li>
                                   <li><a href="18789">㓭</a></li>
                                   <li><a href="18792">㓱</a></li>
                                   <li><a href="18793">㓲</a></li>
                                   <li><a href="18794">㓳</a></li>
                                   <li><a href="18795">㓴</a></li>
                                   <li><a href="18828">㔠</a></li>
                                   <li><a href="18835">㔨</a></li>
                                   <li><a href="18839">㔭</a></li>
                                   <li><a href="18869">㕗</a></li>
                                   <li><a href="18930">㖟</a></li>
                                   <li><a href="18931">㖠</a></li>
                                   <li><a href="18932">㖡</a></li>
                                   <li><a href="18934">㖣</a></li>
                                   <li><a href="18935">㖤</a></li>
                                   <li><a href="18936">㖥</a></li>
                                   <li><a href="18937">㖦</a></li>
                                   <li><a href="18938">㖧</a></li>
                                   <li><a href="18939">㖨</a></li>
                                   <li><a href="18940">㖩</a></li>
                                   <li><a href="18941">㖪</a></li>
                                   <li><a href="18942">㖫</a></li>
                                   <li><a href="18943">㖯</a></li>
                                   <li><a href="18944">㖰</a></li>
                                   <li><a href="18945">㖲</a></li>
                                   <li><a href="18946">㖳</a></li>
                                   <li><a href="19056">㙇</a></li>
                                   <li><a href="19057">㙈</a></li>
                                   <li><a href="19058">㙉</a></li>
                                   <li><a href="19059">㙊</a></li>
                                   <li><a href="19119">㚜</a></li>
                                   <li><a href="19120">㚝</a></li>
                                   <li><a href="19121">㚞</a></li>
                                   <li><a href="19175">㛥</a></li>
                                   <li><a href="19176">㛦</a></li>
                                   <li><a href="19177">㛧</a></li>
                                   <li><a href="19178">㛨</a></li>
                                   <li><a href="19179">㛩</a></li>
                                   <li><a href="19180">㛪</a></li>
                                   <li><a href="19181">㛫</a></li>
                                   <li><a href="19182">㛬</a></li>
                                   <li><a href="19183">㛭</a></li>
                                   <li><a href="19278">㝛</a></li>
                                   <li><a href="19279">㝜</a></li>
                                   <li><a href="19280">㝝</a></li>
                                   <li><a href="19281">㝞</a></li>
                                   <li><a href="19282">㝟</a></li>
                                   <li><a href="19308">㞃</a></li>
                                   <li><a href="19309">㞄</a></li>
                                   <li><a href="19310">㞅</a></li>
                                   <li><a href="19311">㞆</a></li>
                                   <li><a href="19327">㞘</a></li>
                                   <li><a href="19328">㞙</a></li>
                                   <li><a href="19379">㟗</a></li>
                                   <li><a href="19380">㟘</a></li>
                                   <li><a href="19381">㟙</a></li>
                                   <li><a href="19382">㟚</a></li>
                                   <li><a href="19383">㟛</a></li>
                                   <li><a href="19384">㟜</a></li>
                                   <li><a href="19385">㟝</a></li>
                                   <li><a href="19386">㟞</a></li>
                                   <li><a href="19387">㟠</a></li>
                                   <li><a href="19388">㟡</a></li>
                                   <li><a href="19389">㟢</a></li>
                                   <li><a href="19451">㠱</a></li>
                                   <li><a href="19473">㡉</a></li>
                                   <li><a href="19474">㡊</a></li>
                                   <li><a href="19475">㡋</a></li>
                                   <li><a href="19476">㡌</a></li>
                                   <li><a href="19483">㡕</a></li>
                                   <li><a href="19529">㢈</a></li>
                                   <li><a href="19530">㢉</a></li>
                                   <li><a href="19531">㢊</a></li>
                                   <li><a href="19532">㢋</a></li>
                                   <li><a href="19533">㢍</a></li>
                                   <li><a href="19566">㢺</a></li>
                                   <li><a href="19567">㢻</a></li>
                                   <li><a href="19568">㢼</a></li>
                                   <li><a href="19583">㣎</a></li>
                                   <li><a href="19601">㣤</a></li>
                                   <li><a href="19602">㣦</a></li>
                                   <li><a href="19649">㤮</a></li>
                                   <li><a href="19651">㤲</a></li>
                                   <li><a href="19658">㤻</a></li>
                                   <li><a href="19659">㤾</a></li>
                                   <li><a href="19660">㤿</a></li>
                                   <li><a href="19661">㥀</a></li>
                                   <li><a href="19663">㥂</a></li>
                                   <li><a href="19664">㥅</a></li>
                                   <li><a href="19665">㥆</a></li>
                                   <li><a href="19666">㥇</a></li>
                                   <li><a href="19668">㥉</a></li>
                                   <li><a href="19669">㥊</a></li>
                                   <li><a href="19671">㥌</a></li>
                                   <li><a href="19672">㥍</a></li>
                                   <li><a href="19676">㥒</a></li>
                                   <li><a href="19677">㥓</a></li>
                                   <li><a href="19678">㥔</a></li>
                                   <li><a href="19750">㦷</a></li>
                                   <li><a href="19791">㧳</a></li>
                                   <li><a href="19796">㧹</a></li>
                                   <li><a href="19797">㧼</a></li>
                                   <li><a href="19798">㧽</a></li>
                                   <li><a href="19799">㧾</a></li>
                                   <li><a href="19800">㧿</a></li>
                                   <li><a href="19801">㨀</a></li>
                                   <li><a href="19802">㨁</a></li>
                                   <li><a href="19803">㨂</a></li>
                                   <li><a href="19804">㨃</a></li>
                                   <li><a href="19805">㨄</a></li>
                                   <li><a href="19807">㨆</a></li>
                                   <li><a href="19889">㩽</a></li>
                                   <li><a href="19901">㪊</a></li>
                                   <li><a href="19902">㪋</a></li>
                                   <li><a href="19903">㪌</a></li>
                                   <li><a href="19904">㪎</a></li>
                                   <li><a href="19951">㫊</a></li>
                                   <li><a href="19952">㫋</a></li>
                                   <li><a href="19976">㫯</a></li>
                                   <li><a href="19977">㫱</a></li>
                                   <li><a href="19978">㫲</a></li>
                                   <li><a href="19979">㫳</a></li>
                                   <li><a href="20018">㬶</a></li>
                                   <li><a href="20019">㬸</a></li>
                                   <li><a href="20048">㭩</a></li>
                                   <li><a href="20049">㭪</a></li>
                                   <li><a href="20050">㭫</a></li>
                                   <li><a href="20051">㭬</a></li>
                                   <li><a href="20052">㭮</a></li>
                                   <li><a href="20053">㭯</a></li>
                                   <li><a href="20055">㭱</a></li>
                                   <li><a href="20056">㭲</a></li>
                                   <li><a href="20189">㰮</a></li>
                                   <li><a href="20190">㰯</a></li>
                                   <li><a href="20191">㰰</a></li>
                                   <li><a href="20192">㰱</a></li>
                                   <li><a href="20230">㱢</a></li>
                                   <li><a href="20231">㱣</a></li>
                                   <li><a href="20254">㲀</a></li>
                                   <li><a href="20270">㲔</a></li>
                                   <li><a href="20271">㲕</a></li>
                                   <li><a href="20272">㲖</a></li>
                                   <li><a href="20273">㲗</a></li>
                                   <li><a href="20274">㲙</a></li>
                                   <li><a href="20275">㲚</a></li>
                                   <li><a href="20298">㲵</a></li>
                                   <li><a href="20341">㳴</a></li>
                                   <li><a href="20342">㳵</a></li>
                                   <li><a href="20343">㳶</a></li>
                                   <li><a href="20344">㳷</a></li>
                                   <li><a href="20346">㳹</a></li>
                                   <li><a href="20347">㳺</a></li>
                                   <li><a href="20348">㳻</a></li>
                                   <li><a href="20350">㳽</a></li>
                                   <li><a href="20351">㳾</a></li>
                                   <li><a href="20352">㳿</a></li>
                                   <li><a href="20353">㴁</a></li>
                                   <li><a href="20354">㴂</a></li>
                                   <li><a href="20355">㴃</a></li>
                                   <li><a href="20357">㴆</a></li>
                                   <li><a href="20359">㴈</a></li>
                                   <li><a href="20360">㴉</a></li>
                                   <li><a href="20361">㴊</a></li>
                                   <li><a href="20367">㴕</a></li>
                                   <li><a href="20491">㶹</a></li>
                                   <li><a href="20492">㶺</a></li>
                                   <li><a href="20493">㶻</a></li>
                                   <li><a href="20494">㶼</a></li>
                                   <li><a href="20495">㶾</a></li>
                                   <li><a href="20496">㶿</a></li>
                                   <li><a href="20497">㷀</a></li>
                                   <li><a href="20558">㸘</a></li>
                                   <li><a href="20590">㸹</a></li>
                                   <li><a href="20591">㸺</a></li>
                                   <li><a href="20592">㸻</a></li>
                                   <li><a href="20593">㸼</a></li>
                                   <li><a href="20594">㸽</a></li>
                                   <li><a href="20595">㸾</a></li>
                                   <li><a href="20596">㸿</a></li>
                                   <li><a href="20597">㹀</a></li>
                                   <li><a href="20648">㹷</a></li>
                                   <li><a href="20650">㹹</a></li>
                                   <li><a href="20651">㹺</a></li>
                                   <li><a href="20652">㹻</a></li>
                                   <li><a href="20653">㹼</a></li>
                                   <li><a href="20654">㹽</a></li>
                                   <li><a href="20655">㹾</a></li>
                                   <li><a href="20656">㹿</a></li>
                                   <li><a href="20657">㺀</a></li>
                                   <li><a href="20705">㺿</a></li>
                                   <li><a href="20709">㻃</a></li>
                                   <li><a href="20712">㻉</a></li>
                                   <li><a href="20713">㻊</a></li>
                                   <li><a href="20714">㻋</a></li>
                                   <li><a href="20715">㻌</a></li>
                                   <li><a href="20716">㻍</a></li>
                                   <li><a href="20717">㻎</a></li>
                                   <li><a href="20769">㼡</a></li>
                                   <li><a href="20771">㼣</a></li>
                                   <li><a href="20772">㼤</a></li>
                                   <li><a href="20773">㼥</a></li>
                                   <li><a href="20774">㼦</a></li>
                                   <li><a href="20820">㽝</a></li>
                                   <li><a href="20847">㽿</a></li>
                                   <li><a href="20858">㾊</a></li>
                                   <li><a href="20859">㾋</a></li>
                                   <li><a href="20860">㾌</a></li>
                                   <li><a href="20861">㾍</a></li>
                                   <li><a href="20863">㾏</a></li>
                                   <li><a href="20864">㾑</a></li>
                                   <li><a href="20865">㾒</a></li>
                                   <li><a href="20922">㿡</a></li>
                                   <li><a href="20934">㿯</a></li>
                                   <li><a href="20935">㿰</a></li>
                                   <li><a href="20951">䀁</a></li>
                                   <li><a href="20952">䀂</a></li>
                                   <li><a href="20978">䀧</a></li>
                                   <li><a href="20979">䀨</a></li>
                                   <li><a href="20980">䀩</a></li>
                                   <li><a href="20981">䀫</a></li>
                                   <li><a href="20982">䀬</a></li>
                                   <li><a href="20983">䀭</a></li>
                                   <li><a href="21060">䂈</a></li>
                                   <li><a href="21066">䂑</a></li>
                                   <li><a href="21067">䂒</a></li>
                                   <li><a href="21082">䂣</a></li>
                                   <li><a href="21088">䂩</a></li>
                                   <li><a href="21089">䂪</a></li>
                                   <li><a href="21091">䂭</a></li>
                                   <li><a href="21092">䂮</a></li>
                                   <li><a href="21093">䂯</a></li>
                                   <li><a href="21155">䄆</a></li>
                                   <li><a href="21193">䄺</a></li>
                                   <li><a href="21194">䄻</a></li>
                                   <li><a href="21195">䄼</a></li>
                                   <li><a href="21196">䄾</a></li>
                                   <li><a href="21197">䄿</a></li>
                                   <li><a href="21198">䅀</a></li>
                                   <li><a href="21199">䅁</a></li>
                                   <li><a href="21200">䅂</a></li>
                                   <li><a href="21201">䅃</a></li>
                                   <li><a href="21202">䅄</a></li>
                                   <li><a href="21203">䅅</a></li>
                                   <li><a href="21204">䅆</a></li>
                                   <li><a href="21205">䅇</a></li>
                                   <li><a href="21206">䅊</a></li>
                                   <li><a href="21213">䅒</a></li>
                                   <li><a href="21272">䆚</a></li>
                                   <li><a href="21273">䆛</a></li>
                                   <li><a href="21274">䆜</a></li>
                                   <li><a href="21275">䆝</a></li>
                                   <li><a href="21276">䆞</a></li>
                                   <li><a href="21277">䆟</a></li>
                                   <li><a href="21316">䇋</a></li>
                                   <li><a href="21334">䇞</a></li>
                                   <li><a href="21335">䇟</a></li>
                                   <li><a href="21336">䇠</a></li>
                                   <li><a href="21337">䇡</a></li>
                                   <li><a href="21338">䇢</a></li>
                                   <li><a href="21339">䇣</a></li>
                                   <li><a href="21340">䇤</a></li>
                                   <li><a href="21341">䇥</a></li>
                                   <li><a href="21474">䉽</a></li>
                                   <li><a href="21475">䉾</a></li>
                                   <li><a href="21476">䉿</a></li>
                                   <li><a href="21477">䊀</a></li>
                                   <li><a href="21544">䋈</a></li>
                                   <li><a href="21545">䋉</a></li>
                                   <li><a href="21546">䋊</a></li>
                                   <li><a href="21547">䋋</a></li>
                                   <li><a href="21548">䋌</a></li>
                                   <li><a href="21549">䋍</a></li>
                                   <li><a href="21550">䋏</a></li>
                                   <li><a href="21551">䋐</a></li>
                                   <li><a href="21552">䋑</a></li>
                                   <li><a href="21553">䋓</a></li>
                                   <li><a href="21554">䋔</a></li>
                                   <li><a href="21643">䍄</a></li>
                                   <li><a href="21644">䍅</a></li>
                                   <li><a href="21645">䍆</a></li>
                                   <li><a href="21647">䍈</a></li>
                                   <li><a href="21648">䍉</a></li>
                                   <li><a href="21661">䍘</a></li>
                                   <li><a href="21676">䍪</a></li>
                                   <li><a href="21677">䍫</a></li>
                                   <li><a href="21678">䍬</a></li>
                                   <li><a href="21679">䍭</a></li>
                                   <li><a href="21695">䎀</a></li>
                                   <li><a href="21696">䎁</a></li>
                                   <li><a href="21697">䎂</a></li>
                                   <li><a href="21698">䎃</a></li>
                                   <li><a href="21699">䎄</a></li>
                                   <li><a href="21700">䎅</a></li>
                                   <li><a href="21701">䎆</a></li>
                                   <li><a href="21727">䎣</a></li>
                                   <li><a href="21740">䎵</a></li>
                                   <li><a href="21741">䎶</a></li>
                                   <li><a href="21789">䏯</a></li>
                                   <li><a href="21790">䏱</a></li>
                                   <li><a href="21791">䏲</a></li>
                                   <li><a href="21792">䏳</a></li>
                                   <li><a href="21793">䏴</a></li>
                                   <li><a href="21794">䏵</a></li>
                                   <li><a href="21795">䏷</a></li>
                                   <li><a href="21796">䏸</a></li>
                                   <li><a href="21797">䏹</a></li>
                                   <li><a href="21798">䏻</a></li>
                                   <li><a href="21869">䑕</a></li>
                                   <li><a href="21882">䑦</a></li>
                                   <li><a href="21883">䑧</a></li>
                                   <li><a href="21907">䒋</a></li>
                                   <li><a href="21958">䓗</a></li>
                                   <li><a href="21959">䓘</a></li>
                                   <li><a href="21960">䓙</a></li>
                                   <li><a href="21961">䓚</a></li>
                                   <li><a href="21962">䓛</a></li>
                                   <li><a href="21963">䓜</a></li>
                                   <li><a href="21964">䓝</a></li>
                                   <li><a href="21965">䓟</a></li>
                                   <li><a href="21966">䓠</a></li>
                                   <li><a href="21967">䓡</a></li>
                                   <li><a href="21968">䓢</a></li>
                                   <li><a href="21969">䓣</a></li>
                                   <li><a href="21970">䓤</a></li>
                                   <li><a href="21971">䓥</a></li>
                                   <li><a href="21972">䓧</a></li>
                                   <li><a href="21973">䓪</a></li>
                                   <li><a href="21974">䓭</a></li>
                                   <li><a href="22113">䖥</a></li>
                                   <li><a href="22114">䖦</a></li>
                                   <li><a href="22115">䖧</a></li>
                                   <li><a href="22116">䖨</a></li>
                                   <li><a href="22117">䖩</a></li>
                                   <li><a href="22118">䖫</a></li>
                                   <li><a href="22193">䘑</a></li>
                                   <li><a href="22204">䘣</a></li>
                                   <li><a href="22208">䘨</a></li>
                                   <li><a href="22209">䘩</a></li>
                                   <li><a href="22210">䘪</a></li>
                                   <li><a href="22212">䘬</a></li>
                                   <li><a href="22213">䘭</a></li>
                                   <li><a href="22270">䙹</a></li>
                                   <li><a href="22271">䙺</a></li>
                                   <li><a href="22297">䚗</a></li>
                                   <li><a href="22320">䚳</a></li>
                                   <li><a href="22321">䚴</a></li>
                                   <li><a href="22322">䚵</a></li>
                                   <li><a href="22323">䚶</a></li>
                                   <li><a href="22324">䚷</a></li>
                                   <li><a href="22325">䚸</a></li>
                                   <li><a href="22326">䚹</a></li>
                                   <li><a href="22327">䚺</a></li>
                                   <li><a href="22328">䚼</a></li>
                                   <li><a href="22329">䚽</a></li>
                                   <li><a href="22330">䚾</a></li>
                                   <li><a href="22331">䚿</a></li>
                                   <li><a href="22332">䛀</a></li>
                                   <li><a href="22333">䛁</a></li>
                                   <li><a href="22334">䛂</a></li>
                                   <li><a href="22335">䛃</a></li>
                                   <li><a href="22423">䜴</a></li>
                                   <li><a href="22437">䝆</a></li>
                                   <li><a href="22438">䝇</a></li>
                                   <li><a href="22439">䝈</a></li>
                                   <li><a href="22451">䝖</a></li>
                                   <li><a href="22452">䝘</a></li>
                                   <li><a href="22464">䝧</a></li>
                                   <li><a href="22500">䞙</a></li>
                                   <li><a href="22501">䞚</a></li>
                                   <li><a href="22502">䞛</a></li>
                                   <li><a href="22503">䞜</a></li>
                                   <li><a href="22558">䟗</a></li>
                                   <li><a href="22559">䟘</a></li>
                                   <li><a href="22560">䟙</a></li>
                                   <li><a href="22561">䟚</a></li>
                                   <li><a href="22562">䟛</a></li>
                                   <li><a href="22563">䟜</a></li>
                                   <li><a href="22564">䟝</a></li>
                                   <li><a href="22565">䟞</a></li>
                                   <li><a href="22574">䟪</a></li>
                                   <li><a href="22651">䡆</a></li>
                                   <li><a href="22652">䡉</a></li>
                                   <li><a href="22653">䡊</a></li>
                                   <li><a href="22654">䡋</a></li>
                                   <li><a href="22655">䡌</a></li>
                                   <li><a href="22656">䡍</a></li>
                                   <li><a href="22714">䢙</a></li>
                                   <li><a href="22715">䢚</a></li>
                                   <li><a href="22720">䢠</a></li>
                                   <li><a href="22754">䣋</a></li>
                                   <li><a href="22755">䣌</a></li>
                                   <li><a href="22756">䣍</a></li>
                                   <li><a href="22757">䣎</a></li>
                                   <li><a href="22758">䣏</a></li>
                                   <li><a href="22780">䣪</a></li>
                                   <li><a href="22781">䣫</a></li>
                                   <li><a href="22782">䣬</a></li>
                                   <li><a href="22824">䤚</a></li>
                                   <li><a href="22826">䤜</a></li>
                                   <li><a href="22908">䦌</a></li>
                                   <li><a href="22909">䦍</a></li>
                                   <li><a href="22961">䧐</a></li>
                                   <li><a href="22962">䧒</a></li>
                                   <li><a href="22963">䧓</a></li>
                                   <li><a href="22964">䧔</a></li>
                                   <li><a href="22965">䧕</a></li>
                                   <li><a href="22966">䧖</a></li>
                                   <li><a href="22990">䧲</a></li>
                                   <li><a href="23010">䨋</a></li>
                                   <li><a href="23051">䨽</a></li>
                                   <li><a href="23052">䨾</a></li>
                                   <li><a href="23207">䫸</a></li>
                                   <li><a href="23371">䯆</a></li>
                                   <li><a href="23903">啨</a></li>
                                   <li><a href="23904">喏</a></li>
                                   <li><a href="23930">埶</a></li>
                                   <li><a href="23931">埸</a></li>
                                   <li><a href="23947">姬</a></li>
                                   <li><a href="23948">婌</a></li>
                                   <li><a href="23949">婧</a></li>
                                   <li><a href="23950">媖</a></li>
                                   <li><a href="23961">崧</a></li>
                                   <li><a href="23962">崪</a></li>
                                   <li><a href="23978">庳</a></li>
                                   <li><a href="23979">庻</a></li>
                                   <li><a href="23981">庿</a></li>
                                   <li><a href="24015">洴</a></li>
                                   <li><a href="24016">淊</a></li>
                                   <li><a href="24019">渶</a></li>
                                   <li><a href="24048">焏</a></li>
                                   <li><a href="24049">焫</a></li>
                                   <li><a href="24073">畡</a></li>
                                   <li><a href="24074">痐</a></li>
                                   <li><a href="24082">祡</a></li>
                                   <li><a href="24083">祣</a></li>
                                   <li><a href="24084">祬</a></li>
                                   <li><a href="24085">祮</a></li>
                                   <li><a href="24113">菒</a></li>
                                   <li><a href="24114">菳</a></li>
                                   <li><a href="24115">萞</a></li>
                                   <li><a href="24149">逤</a></li>
                                   <li><a href="24155">邫</a></li>
                                   <li><a href="24191">㔱</a></li>
                                   <li><a href="24224">㫦</a></li>
                                   <li><a href="24225">㫴</a></li>
                                   <li><a href="24241">㳟</a></li>
                                   <li><a href="24256">㺃</a></li>
                                   <li><a href="24258">㼋</a></li>
                                   <li><a href="24271">䄄</a></li>
                                   <li><a href="24303">䓦</a></li>
                                   <li><a href="24320">䖎</a></li>
                                   <li><a href="24343">䣐</a></li>
                                   <li><a href="24350">䬢</a></li>
                                   <li><a href="24377">涿</a></li>
                                   <li><a href="24378">淃</a></li>
                                   <li><a href="24424">渑</a></li>
                                   <li><a href="24596">偔</a></li>
                                   <li><a href="24597">偿</a></li>
                                   <li><a href="24686">兽</a></li>
                                   <li><a href="24751">厢</a></li>
                                   <li><a href="24752">厣</a></li>
                                   <li><a href="24816">唨</a></li>
                                   <li><a href="24817">啇</a></li>
                                   <li><a href="24901">啩</a></li>
                                   <li><a href="24902">啪</a></li>
                                   <li><a href="24904">啬</a></li>
                                   <li><a href="24905">啭</a></li>
                                   <li><a href="24906">啯</a></li>
                                   <li><a href="24907">啰</a></li>
                                   <li><a href="24908">啱</a></li>
                                   <li><a href="24909">啲</a></li>
                                   <li><a href="24910">啳</a></li>
                                   <li><a href="24912">啶</a></li>
                                   <li><a href="24914">啸</a></li>
                                   <li><a href="24915">啹</a></li>
                                   <li><a href="24997">堎</a></li>
                                   <li><a href="24998">堏</a></li>
                                   <li><a href="24999">堐</a></li>
                                   <li><a href="25000">堒</a></li>
                                   <li><a href="25001">堓</a></li>
                                   <li><a href="25002">堔</a></li>
                                   <li><a href="25057">婳</a></li>
                                   <li><a href="25059">婶</a></li>
                                   <li><a href="25130">崬</a></li>
                                   <li><a href="25131">崮</a></li>
                                   <li><a href="25132">崯</a></li>
                                   <li><a href="25133">崰</a></li>
                                   <li><a href="25211">帼</a></li>
                                   <li><a href="25223">弹</a></li>
                                   <li><a href="25248">悫</a></li>
                                   <li><a href="25249">悬</a></li>
                                   <li><a href="25252">惬</a></li>
                                   <li><a href="25322">掳</a></li>
                                   <li><a href="25323">掶</a></li>
                                   <li><a href="25326">掹</a></li>
                                   <li><a href="25327">掺</a></li>
                                   <li><a href="25350">敚</a></li>
                                   <li><a href="25354">斏</a></li>
                                   <li><a href="25393">梽</a></li>
                                   <li><a href="25394">梾</a></li>
                                   <li><a href="25396">棂</a></li>
                                   <li><a href="25409">㨈</a></li>
                                   <li><a href="25552">渌</a></li>
                                   <li><a href="25554">渏</a></li>
                                   <li><a href="25555">渖</a></li>
                                   <li><a href="25620">烥</a></li>
                                   <li><a href="25630">焐</a></li>
                                   <li><a href="25631">焑</a></li>
                                   <li><a href="25632">焒</a></li>
                                   <li><a href="25634">焓</a></li>
                                   <li><a href="25638">焕</a></li>
                                   <li><a href="25639">焗</a></li>
                                   <li><a href="25779">猡</a></li>
                                   <li><a href="25780">猠</a></li>
                                   <li><a href="25793">琒</a></li>
                                   <li><a href="25804">畨</a></li>
                                   <li><a href="25830">皑</a></li>
                                   <li><a href="25835">盘</a></li>
                                   <li><a href="25845">矫</a></li>
                                   <li><a href="25858">硓</a></li>
                                   <li><a href="25859">硔</a></li>
                                   <li><a href="25860">硖</a></li>
                                   <li><a href="25862">硘</a></li>
                                   <li><a href="25863">硙</a></li>
                                   <li><a href="25864">硚</a></li>
                                   <li><a href="25888">硛</a></li>
                                   <li><a href="25927">秽</a></li>
                                   <li><a href="25928">秾</a></li>
                                   <li><a href="25944">笺</a></li>
                                   <li><a href="26274">羟</a></li>
                                   <li><a href="26287">职</a></li>
                                   <li><a href="26288">聍</a></li>
                                   <li><a href="26306">胬</a></li>
                                   <li><a href="26315">脶</a></li>
                                   <li><a href="26316">脷</a></li>
                                   <li><a href="26329">舻</a></li>
                                   <li><a href="26397">㑡</a></li>
                                   <li><a href="26402">㑰</a></li>
                                   <li><a href="26403">㑲</a></li>
                                   <li><a href="26412">㒮</a></li>
                                   <li><a href="26461">萖</a></li>
                                   <li><a href="26463">萛</a></li>
                                   <li><a href="26464">萜</a></li>
                                   <li><a href="26465">萝</a></li>
                                   <li><a href="26466">萡</a></li>
                                   <li><a href="26467">萣</a></li>
                                   <li><a href="26468">萦</a></li>
                                   <li><a href="26469">萧</a></li>
                                   <li><a href="26478">釺</a></li>
                                   <li><a href="26512">㕘</a></li>
                                   <li><a href="26532">㖬</a></li>
                                   <li><a href="26535">㖭</a></li>
                                   <li><a href="26537">㖮</a></li>
                                   <li><a href="26539">蛏</a></li>
                                   <li><a href="26556">衐</a></li>
                                   <li><a href="26563">裆</a></li>
                                   <li><a href="26564">裇</a></li>
                                   <li><a href="26565">裉</a></li>
                                   <li><a href="26581">㖱</a></li>
                                   <li><a href="26586">㖵</a></li>
                                   <li><a href="26646">㙋</a></li>
                                   <li><a href="26647">㙌</a></li>
                                   <li><a href="26648">㙍</a></li>
                                   <li><a href="26837">跃</a></li>
                                   <li><a href="26838">跄</a></li>
                                   <li><a href="26867">軚</a></li>
                                   <li><a href="26909">㟣</a></li>
                                   <li><a href="26910">㟤</a></li>
                                   <li><a href="26911">㟥</a></li>
                                   <li><a href="26925">㡍</a></li>
                                   <li><a href="26926">㡎</a></li>
                                   <li><a href="26935">㢌</a></li>
                                   <li><a href="26955">逻</a></li>
                                   <li><a href="26962">㣧</a></li>
                                   <li><a href="26965">㣨</a></li>
                                   <li><a href="26966">㣩</a></li>
                                   <li><a href="27090">酜</a></li>
                                   <li><a href="27091">酝</a></li>
                                   <li><a href="27092">酞</a></li>
                                   <li><a href="27110">㥗</a></li>
                                   <li><a href="27112">㥘</a></li>
                                   <li><a href="27115">㥙</a></li>
                                   <li><a href="27188">㫌</a></li>
                                   <li><a href="27202">㬷</a></li>
                                   <li><a href="27227">㭳</a></li>
                                   <li><a href="27228">㭵</a></li>
                                   <li><a href="27229">㭶</a></li>
                                   <li><a href="27282">㲘</a></li>
                                   <li><a href="27303">㴋</a></li>
                                   <li><a href="27304">㴌</a></li>
                                   <li><a href="27305">㴍</a></li>
                                   <li><a href="27306">㴎</a></li>
                                   <li><a href="27338">㶽</a></li>
                                   <li><a href="27339">㷁</a></li>
                                   <li><a href="27380">㻏</a></li>
                                   <li><a href="27381">㻐</a></li>
                                   <li><a href="27480">䣭</a></li>
                                   <li><a href="27508">䝙</a></li>
                                   <li><a href="27545">䖬</a></li>
                                   <li><a href="27555">䓬</a></li>
                                   <li><a href="27556">䓫</a></li>
                                   <li><a href="27557">䓩</a></li>
                                   <li><a href="27558">䓨</a></li>
                                   <li><a href="27560">䓕</a></li>
                                   <li><a href="27572">䑩</a></li>
                                   <li><a href="27575">䏺</a></li>
                                   <li><a href="27599">䋒</a></li>
                                   <li><a href="27616">䄽</a></li>
                                   <li><a href="27645">㿠</a></li>
                                   <li><a href="27702">𡸴</a></li>
                                   <li><a href="27703">𣇄</a></li>
                                   <li><a href="27707">𣳾</a></li>
                                   <li><a href="27713">𥒎</a></li>
                                   <li><a href="27803">𡌶</a></li>
                                   <li><a href="27804">𡍄</a></li>
                                   <li><a href="27827">𡸳</a></li>
                                   <li><a href="27841">𢰝</a></li>
                                   <li><a href="27842">𢮦</a></li>
                                   <li><a href="27845">𣇃</a></li>
                                   <li><a href="27848">𣍲</a></li>
                                   <li><a href="27875">𣪘</a></li>
                                   <li><a href="27879">𣷹</a></li>
                                   <li><a href="27880">𣷺</a></li>
                                   <li><a href="27888">𣷓</a></li>
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