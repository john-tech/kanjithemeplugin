<?php
/*
 * Template Name: kakusu09
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
               <h1 class="ttl_main">９画の漢字一覧（漢検級順）</h1>

               <p>総画数９画の漢字の一覧です。<br>
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
                                   <option value="#" selected>９画</option>
                                   <option value="kakusu10">１０画</option>
                                   <option value="kakusu11">１１画</option>
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
                              <li><a href="bkakusu09">部首別順</a></li>
                              <li><a href="ckakusu09">読み順</a></li>
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
                                   <li><a class="color1" href="kanji/002">音</a></li>
                                   <li><a class="color1" href="kanji/051">草</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts09">
                              <h3 class="ttl_while"><a href="kyu09">漢字検定９級（小学校２年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/089">科</a></li>
                                   <li><a class="color1" href="kanji/094">海</a></li>
                                   <li><a class="color1" href="kanji/099">活</a></li>
                                   <li><a class="color1" href="kanji/117">計</a></li>
                                   <li><a class="color1" href="kanji/125">後</a></li>
                                   <li><a class="color1" href="kanji/152">室</a></li>
                                   <li><a class="color1" href="kanji/155">首</a></li>
                                   <li><a class="color1" href="kanji/157">秋</a></li>
                                   <li><a class="color1" href="kanji/158">春</a></li>
                                   <li><a class="color1" href="kanji/162">食</a></li>
                                   <li><a class="color1" href="kanji/170">星</a></li>
                                   <li><a class="color1" href="kanji/177">前</a></li>
                                   <li><a class="color1" href="kanji/188">茶</a></li>
                                   <li><a class="color1" href="kanji/189">昼</a></li>
                                   <li><a class="color1" href="kanji/195">点</a></li>
                                   <li><a class="color1" href="kanji/207">南</a></li>
                                   <li><a class="color1" href="kanji/217">風</a></li>
                                   <li><a class="color1" href="2134">思</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts08">
                              <h3 class="ttl_while"><a href="kyu08">漢字検定８級（小学校３年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/255">屋</a></li>
                                   <li><a class="color1" href="kanji/259">界</a></li>
                                   <li><a class="color1" href="kanji/268">客</a></li>
                                   <li><a class="color1" href="kanji/269">急</a></li>
                                   <li><a class="color1" href="kanji/270">級</a></li>
                                   <li><a class="color1" href="kanji/286">係</a></li>
                                   <li><a class="color1" href="kanji/289">県</a></li>
                                   <li><a class="color1" href="kanji/290">研</a></li>
                                   <li><a class="color1" href="kanji/300">指</a></li>
                                   <li><a class="color1" href="kanji/308">持</a></li>
                                   <li><a class="color1" href="kanji/321">拾</a></li>
                                   <li><a class="color1" href="kanji/325">重</a></li>
                                   <li><a class="color1" href="kanji/332">昭</a></li>
                                   <li><a class="color1" href="kanji/336">乗</a></li>
                                   <li><a class="color1" href="kanji/343">神</a></li>
                                   <li><a class="color1" href="kanji/348">相</a></li>
                                   <li><a class="color1" href="kanji/349">送</a></li>
                                   <li><a class="color1" href="kanji/357">待</a></li>
                                   <li><a class="color1" href="kanji/361">炭</a></li>
                                   <li><a class="color1" href="kanji/365">柱</a></li>
                                   <li><a class="color1" href="kanji/368">追</a></li>
                                   <li><a class="color1" href="kanji/376">度</a></li>
                                   <li><a class="color1" href="kanji/390">畑</a></li>
                                   <li><a class="color1" href="kanji/391">発</a></li>
                                   <li><a class="color1" href="kanji/398">美</a></li>
                                   <li><a class="color1" href="kanji/403">秒</a></li>
                                   <li><a class="color1" href="kanji/404">品</a></li>
                                   <li><a class="color1" href="kanji/405">負</a></li>
                                   <li><a class="color1" href="kanji/416">面</a></li>
                                   <li><a class="color1" href="kanji/428">洋</a></li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts07">
                              <h3 class="ttl_while"><a href="kyu07">漢字検定７級（小学校４年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/449">栄</a></li>
                                   <li><a class="color1" href="kanji/488">軍</a></li>
                                   <li><a class="color1" href="kanji/496">建</a></li>
                                   <li><a class="color1" href="510">昨</a></li>
                                   <li><a class="color1" href="531">祝</a></li>
                                   <li><a class="color1" href="541">省</a></li>
                                   <li><a class="color1" href="542">信</a></li>
                                   <li><a class="color1" href="554">浅</a></li>
                                   <li><a class="color1" href="566">単</a></li>
                                   <li><a class="color1" href="593">飛</a></li>
                                   <li><a class="color1" href="608">変</a></li>
                                   <li><a class="color1" href="609">便</a></li>
                                   <li><a class="color1" href="619">約</a></li>
                                   <li><a class="color1" href="620">勇</a></li>
                                   <li><a class="color1" href="621">要</a></li>
                                   <li><a class="color1" href="912">城</a></li>
                                   <li><a class="color1" href="1099">香</a>
                                   </li>
                                   <li><a class="color1" href="1946">茨</a>
                                   </li>
                                   <li><a class="color1" href="2073">栃</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts06">
                              <h3 class="ttl_while"><a href="kyu06">漢字検定６級（小学校５年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/472">紀</a></li>
                                   <li><a class="color1" href="kanji/490">型</a></li>
                                   <li><a class="color1" href="674">逆</a></li>
                                   <li><a class="color1" href="691">限</a></li>
                                   <li><a class="color1" href="694">故</a></li>
                                   <li><a class="color1" href="701">厚</a></li>
                                   <li><a class="color1" href="704">査</a></li>
                                   <li><a class="color1" href="746">政</a></li>
                                   <li><a class="color1" href="757">祖</a></li>
                                   <li><a class="color1" href="763">則</a></li>
                                   <li><a class="color1" href="782">独</a></li>
                                   <li><a class="color1" href="806">保</a></li>
                                   <li><a class="color1" href="814">迷</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts05">
                              <h3 class="ttl_while"><a href="kyu05">漢字検定５級（小学校６年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/444">胃</a></li>
                                   <li><a class="color1" href="1000">律</a>
                                   </li>
                                   <li><a class="color1" href="768">退</a></li>
                                   <li><a class="color1" href="828">映</a></li>
                                   <li><a class="color1" href="834">革</a></li>
                                   <li><a class="color1" href="840">看</a></li>
                                   <li><a class="color1" href="841">巻</a></li>
                                   <li><a class="color1" href="868">皇</a></li>
                                   <li><a class="color1" href="870">紅</a></li>
                                   <li><a class="color1" href="877">砂</a></li>
                                   <li><a class="color1" href="889">姿</a></li>
                                   <li><a class="color1" href="922">専</a></li>
                                   <li><a class="color1" href="923">宣</a></li>
                                   <li><a class="color1" href="924">染</a></li>
                                   <li><a class="color1" href="925">泉</a></li>
                                   <li><a class="color1" href="926">洗</a></li>
                                   <li><a class="color1" href="930">奏</a></li>
                                   <li><a class="color1" href="943">段</a></li>
                                   <li><a class="color1" href="963">派</a></li>
                                   <li><a class="color1" href="964">肺</a></li>
                                   <li><a class="color1" href="965">背</a></li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts04">
                              <h3 class="ttl_while"><a href="kyu04">漢字検定４級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1006">威</a>
                                   </li>
                                   <li><a class="color1" href="1008">為</a>
                                   </li>
                                   <li><a class="color1" href="1034">皆</a>
                                   </li>
                                   <li><a class="color1" href="1069">狭</a>
                                   </li>
                                   <li><a class="color1" href="1091">枯</a>
                                   </li>
                                   <li><a class="color1" href="1095">荒</a>
                                   </li>
                                   <li><a class="color1" href="1100">恒</a>
                                   </li>
                                   <li><a class="color1" href="1110">咲</a>
                                   </li>
                                   <li><a class="color1" href="1124">狩</a>
                                   </li>
                                   <li><a class="color1" href="1131">柔</a>
                                   </li>
                                   <li><a class="color1" href="1136">盾</a>
                                   </li>
                                   <li><a class="color1" href="1151">侵</a>
                                   </li>
                                   <li><a class="color1" href="1159">是</a>
                                   </li>
                                   <li><a class="color1" href="1173">俗</a>
                                   </li>
                                   <li><a class="color1" href="1174">耐</a>
                                   </li>
                                   <li><a class="color1" href="1193">珍</a>
                                   </li>
                                   <li><a class="color1" href="1205">怒</a>
                                   </li>
                                   <li><a class="color1" href="1213">逃</a>
                                   </li>
                                   <li><a class="color1" href="1218">峠</a>
                                   </li>
                                   <li><a class="color1" href="1262">柄</a>
                                   </li>
                                   <li><a class="color1" href="1272">冒</a>
                                   </li>
                                   <li><a class="color1" href="1276">盆</a>
                                   </li>
                                   <li><a class="color1" href="1316">郎</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts03">
                              <h3 class="ttl_while"><a href="kyu03">漢字検定３級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1320">哀</a>
                                   </li>
                                   <li><a class="color1" href="1330">卸</a>
                                   </li>
                                   <li><a class="color1" href="1332">架</a>
                                   </li>
                                   <li><a class="color1" href="1338">悔</a>
                                   </li>
                                   <li><a class="color1" href="1354">冠</a>
                                   </li>
                                   <li><a class="color1" href="1358">軌</a>
                                   </li>
                                   <li><a class="color1" href="1370">虐</a>
                                   </li>
                                   <li><a class="color1" href="1373">峡</a>
                                   </li>
                                   <li><a class="color1" href="1386">契</a>
                                   </li>
                                   <li><a class="color1" href="1393">弧</a>
                                   </li>
                                   <li><a class="color1" href="1394">孤</a>
                                   </li>
                                   <li><a class="color1" href="1401">郊</a>
                                   </li>
                                   <li><a class="color1" href="1413">恨</a>
                                   </li>
                                   <li><a class="color1" href="1417">削</a>
                                   </li>
                                   <li><a class="color1" href="1423">施</a>
                                   </li>
                                   <li><a class="color1" href="1464">牲</a>
                                   </li>
                                   <li><a class="color1" href="1484">促</a>
                                   </li>
                                   <li><a class="color1" href="1487">胎</a>
                                   </li>
                                   <li><a class="color1" href="1488">怠</a>
                                   </li>
                                   <li><a class="color1" href="1497">胆</a>
                                   </li>
                                   <li><a class="color1" href="1512">訂</a>
                                   </li>
                                   <li><a class="color1" href="1513">帝</a>
                                   </li>
                                   <li><a class="color1" href="1537">卑</a>
                                   </li>
                                   <li><a class="color1" href="1542">赴</a>
                                   </li>
                                   <li><a class="color1" href="1544">封</a>
                                   </li>
                                   <li><a class="color1" href="1555">胞</a>
                                   </li>
                                   <li><a class="color1" href="1566">某</a>
                                   </li>
                                   <li><a class="color1" href="1577">幽</a>
                                   </li>
                                   <li><a class="color1" href="1592">厘</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02j">
                              <h3 class="ttl_while"><a href="kyu02j">漢字検定準２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1609">姻</a>
                                   </li>
                                   <li><a class="color1" href="1610">疫</a>
                                   </li>
                                   <li><a class="color1" href="1626">垣</a>
                                   </li>
                                   <li><a class="color1" href="1635">括</a>
                                   </li>
                                   <li><a class="color1" href="1653">糾</a>
                                   </li>
                                   <li><a class="color1" href="1656">挟</a>
                                   </li>
                                   <li><a class="color1" href="1685">洪</a>
                                   </li>
                                   <li><a class="color1" href="1689">侯</a>
                                   </li>
                                   <li><a class="color1" href="1692">拷</a>
                                   </li>
                                   <li><a class="color1" href="1700">砕</a>
                                   </li>
                                   <li><a class="color1" href="1720">臭</a>
                                   </li>
                                   <li><a class="color1" href="1733">俊</a>
                                   </li>
                                   <li><a class="color1" href="1739">叙</a>
                                   </li>
                                   <li><a class="color1" href="1757">浄</a>
                                   </li>
                                   <li><a class="color1" href="1762">津</a>
                                   </li>
                                   <li><a class="color1" href="1768">甚</a>
                                   </li>
                                   <li><a class="color1" href="1770">帥</a>
                                   </li>
                                   <li><a class="color1" href="1780">窃</a>
                                   </li>
                                   <li><a class="color1" href="1796">荘</a>
                                   </li>
                                   <li><a class="color1" href="1815">衷</a>
                                   </li>
                                   <li><a class="color1" href="1816">挑</a>
                                   </li>
                                   <li><a class="color1" href="1821">勅</a>
                                   </li>
                                   <li><a class="color1" href="1827">亭</a>
                                   </li>
                                   <li><a class="color1" href="1832">貞</a>
                                   </li>
                                   <li><a class="color1" href="1844">洞</a>
                                   </li>
                                   <li><a class="color1" href="1924">柳</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02">
                              <h3 class="ttl_while"><a href="kyu02">漢字検定２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1942">畏</a>
                                   </li>
                                   <li><a class="color1" href="1947">咽</a>
                                   </li>
                                   <li><a class="color1" href="1951">怨</a>
                                   </li>
                                   <li><a class="color1" href="1967">柿</a>
                                   </li>
                                   <li><a class="color1" href="2011">柵</a>
                                   </li>
                                   <li><a class="color1" href="2013">拶</a>
                                   </li>
                                   <li><a class="color1" href="2027">拭</a>
                                   </li>
                                   <li><a class="color1" href="2083">虹</a>
                                   </li>
                                   <li><a class="color1" href="2092">眉</a>
                                   </li>
                                   <li><a class="color1" href="2096">訃</a>
                                   </li>
                                   <li><a class="color1" href="2106">勃</a>
                                   </li>
                                   <li><a class="color1" href="2107">昧</a>
                                   </li>
                                   <li><a class="color1" href="2125">侶</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01j">
                              <h3 class="ttl_while"><a href="kyu01j">漢字検定準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="2138">娃</a>
                                   </li>
                                   <li><a class="color2" href="2145">按</a>
                                   </li>
                                   <li><a class="color2" href="2158">郁</a>
                                   </li>
                                   <li><a class="color2" href="2163">胤</a>
                                   </li>
                                   <li><a class="color2" href="2168">胡</a>
                                   </li>
                                   <li><a class="color2" href="2172">廻</a>
                                   </li>
                                   <li><a href="2177">洩</a></li>
                                   <li><a href="2179">盈</a></li>
                                   <li><a href="2194">姶</a></li>
                                   <li><a class="color2" href="2209">珂</a>
                                   </li>
                                   <li><a class="color2" href="2214">迦</a>
                                   </li>
                                   <li><a class="color2" href="2216">俄</a>
                                   </li>
                                   <li><a class="color2" href="2218">臥</a>
                                   </li>
                                   <li><a href="2222">咳</a></li>
                                   <li><a class="color2" href="2224">恢</a>
                                   </li>
                                   <li><a class="color2" href="2248">恰</a>
                                   </li>
                                   <li><a href="2251">凾</a></li>
                                   <li><a href="2252">姦</a></li>
                                   <li><a class="color2" href="2253">柑</a>
                                   </li>
                                   <li><a class="color2" href="2258">竿</a>
                                   </li>
                                   <li><a class="color2" href="2286">祇</a>
                                   </li>
                                   <li><a href="2305">韭</a></li>
                                   <li><a href="2328">粁</a></li>
                                   <li><a class="color2" href="2334">衿</a>
                                   </li>
                                   <li><a href="2336">垢</a></li>
                                   <li><a href="2347">粂</a></li>
                                   <li><a href="2356">荊</a></li>
                                   <li><a class="color2" href="2362">頁</a>
                                   </li>
                                   <li><a class="color2" href="2371">彦</a>
                                   </li>
                                   <li><a href="2378">狐</a></li>
                                   <li><a class="color2" href="2396">巷</a>
                                   </li>
                                   <li><a class="color2" href="2440">哉</a>
                                   </li>
                                   <li><a class="color2" href="2454">珊</a>
                                   </li>
                                   <li><a href="2465">屍</a></li>
                                   <li><a class="color2" href="2490">柘</a>
                                   </li>
                                   <li><a class="color2" href="2510">柊</a>
                                   </li>
                                   <li><a class="color2" href="2512">洲</a>
                                   </li>
                                   <li><a href="2520">酋</a></li>
                                   <li><a class="color2" href="2588">茸</a>
                                   </li>
                                   <li><a href="2598">矧</a></li>
                                   <li><a href="2607">荏</a></li>
                                   <li><a class="color2" href="2638">穿</a>
                                   </li>
                                   <li><a class="color2" href="2642">茜</a>
                                   </li>
                                   <li><a href="2679">柁</a></li>
                                   <li><a class="color2" href="2691">殆</a>
                                   </li>
                                   <li><a href="2700">廼</a></li>
                                   <li><a href="2749">栂</a></li>
                                   <li><a href="2751">剃</a></li>
                                   <li><a class="color2" href="2760">祢</a>
                                   </li>
                                   <li><a class="color2" href="2763">姪</a>
                                   </li>
                                   <li><a class="color2" href="2820">盃</a>
                                   </li>
                                   <li><a class="color2" href="2825">柏</a>
                                   </li>
                                   <li><a href="2840">叛</a></li>
                                   <li><a class="color2" href="2852">毘</a>
                                   </li>
                                   <li><a class="color2" href="2903">姥</a>
                                   </li>
                                   <li><a href="2924">虻</a></li>
                                   <li><a class="color2" href="2928">柾</a>
                                   </li>
                                   <li><a class="color2" href="2929">俣</a>
                                   </li>
                                   <li><a class="color2" href="2936">籾</a>
                                   </li>
                                   <li><a class="color2" href="2941">耶</a>
                                   </li>
                                   <li><a class="color2" href="2944">柚</a>
                                   </li>
                                   <li><a class="color2" href="2945">宥</a>
                                   </li>
                                   <li><a class="color2" href="2949">祐</a>
                                   </li>
                                   <li><a class="color2" href="2964">洛</a>
                                   </li>
                                   <li><a class="color2" href="2979">亮</a>
                                   </li>
                                   <li><a class="color2" href="2999">玲</a>
                                   </li>
                                   <li><a href="3022">歪</a></li>
                                   <li><a class="color2" href="6430">俠</a>
                                   </li>
                                   <li><a href="6523">荆</a></li>
                                   <li><a href="6525">毗</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01">
                              <h3 class="ttl_while"><a href="kyu01">漢字検定１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="3035">卻</a></li>
                                   <li><a href="3036">圀</a></li>
                                   <li><a href="3091">俔</a></li>
                                   <li><a href="3092">俟</a></li>
                                   <li><a href="3093">俎</a></li>
                                   <li><a href="3094">俘</a></li>
                                   <li><a href="3095">俛</a></li>
                                   <li><a href="3096">俑</a></li>
                                   <li><a href="3097">俚</a></li>
                                   <li><a class="color2" href="3098">俐</a>
                                   </li>
                                   <li><a href="3099">俤</a></li>
                                   <li><a href="3100">俥</a></li>
                                   <li><a href="3150">兪</a></li>
                                   <li><a href="3154">冑</a></li>
                                   <li><a href="3174">剏</a></li>
                                   <li><a href="3175">剄</a></li>
                                   <li><a href="3176">剋</a></li>
                                   <li><a href="3177">剌</a></li>
                                   <li><a class="color2" href="3189">勁</a>
                                   </li>
                                   <li><a href="3199">匍</a></li>
                                   <li><a href="3213">厖</a></li>
                                   <li><a href="3236">呱</a></li>
                                   <li><a href="3238">呰</a></li>
                                   <li><a href="3245">哇</a></li>
                                   <li><a href="3246">咢</a></li>
                                   <li><a href="3247">咸</a></li>
                                   <li><a href="3248">咥</a></li>
                                   <li><a href="3249">咬</a></li>
                                   <li><a href="3250">哄</a></li>
                                   <li><a href="3251">哈</a></li>
                                   <li><a href="3252">咨</a></li>
                                   <li><a href="3253">咫</a></li>
                                   <li><a href="3254">哂</a></li>
                                   <li><a href="3255">咤</a></li>
                                   <li><a href="3325">囿</a></li>
                                   <li><a href="3337">垓</a></li>
                                   <li><a href="3338">垠</a></li>
                                   <li><a href="3339">垤</a></li>
                                   <li><a href="3366">奕</a></li>
                                   <li><a href="3367">奐</a></li>
                                   <li><a class="color2" href="3368">奎</a>
                                   </li>
                                   <li><a href="3379">姨</a></li>
                                   <li><a href="3380">姜</a></li>
                                   <li><a href="3382">姙</a></li>
                                   <li><a href="3384">姚</a></li>
                                   <li><a href="3423">孩</a></li>
                                   <li><a href="3442">屎</a></li>
                                   <li><a href="3443">屏</a></li>
                                   <li><a href="3454">峙</a></li>
                                   <li><a href="3503">庠</a></li>
                                   <li><a href="3521">弭</a></li>
                                   <li><a href="3524">弯</a></li>
                                   <li><a href="3530">徊</a></li>
                                   <li><a href="3531">很</a></li>
                                   <li><a href="3532">徇</a></li>
                                   <li><a href="3548">怎</a></li>
                                   <li><a href="3554">怱</a></li>
                                   <li><a href="3558">恪</a></li>
                                   <li><a href="3559">恟</a></li>
                                   <li><a href="3560">恊</a></li>
                                   <li><a href="3561">恍</a></li>
                                   <li><a href="3562">恃</a></li>
                                   <li><a href="3563">恤</a></li>
                                   <li><a href="3564">恂</a></li>
                                   <li><a href="3565">恬</a></li>
                                   <li><a href="3566">恫</a></li>
                                   <li><a href="3653">扁</a></li>
                                   <li><a href="3679">拏</a></li>
                                   <li><a href="3680">挌</a></li>
                                   <li><a href="3681">拮</a></li>
                                   <li><a href="3682">拱</a></li>
                                   <li><a href="3683">挂</a></li>
                                   <li><a href="3685">拯</a></li>
                                   <li><a href="3686">拵</a></li>
                                   <li><a href="3785">畋</a></li>
                                   <li><a href="3798">鳬</a></li>
                                   <li><a href="3842">斫</a></li>
                                   <li><a href="3902">朏</a></li>
                                   <li><a href="3910">昜</a></li>
                                   <li><a class="color2" href="3911">昴</a>
                                   </li>
                                   <li><a href="3912">昶</a></li>
                                   <li><a href="3913">昵</a></li>
                                   <li><a href="3927">昿</a></li>
                                   <li><a href="3941">閂</a></li>
                                   <li><a href="3975">缸</a></li>
                                   <li><a href="4016">枴</a></li>
                                   <li><a href="4017">柯</a></li>
                                   <li><a href="4018">枷</a></li>
                                   <li><a href="4019">柤</a></li>
                                   <li><a href="4020">柞</a></li>
                                   <li><a href="4021">柩</a></li>
                                   <li><a href="4022">柮</a></li>
                                   <li><a href="4023">柬</a></li>
                                   <li><a href="4024">枳</a></li>
                                   <li><a href="4025">柢</a></li>
                                   <li><a href="4026">柎</a></li>
                                   <li><a href="4027">柝</a></li>
                                   <li><a href="4028">枹</a></li>
                                   <li><a href="4029">枸</a></li>
                                   <li><a href="4217">胙</a></li>
                                   <li><a href="4218">胝</a></li>
                                   <li><a href="4219">胛</a></li>
                                   <li><a href="4220">胚</a></li>
                                   <li><a href="4221">胥</a></li>
                                   <li><a href="4222">胄</a></li>
                                   <li><a href="4223">胖</a></li>
                                   <li><a href="4250">曷</a></li>
                                   <li><a href="4302">禹</a></li>
                                   <li><a href="4303">禺</a></li>
                                   <li><a class="color2" href="4343">洸</a>
                                   </li>
                                   <li><a href="4344">洽</a></li>
                                   <li><a href="4345">洌</a></li>
                                   <li><a href="4346">洟</a></li>
                                   <li><a href="4347">洶</a></li>
                                   <li><a class="color2" href="4348">洵</a>
                                   </li>
                                   <li><a href="4349">洒</a></li>
                                   <li><a href="4350">洫</a></li>
                                   <li><a href="4357">爰</a></li>
                                   <li><a href="4552">癸</a></li>
                                   <li><a class="color2" href="4612">珈</a>
                                   </li>
                                   <li><a class="color2" href="4613">珀</a>
                                   </li>
                                   <li><a href="4614">玻</a></li>
                                   <li><a href="4623">玳</a></li>
                                   <li><a href="4656">砒</a></li>
                                   <li><a href="4657">砌</a></li>
                                   <li><a href="4748">紆</a></li>
                                   <li><a href="4749">紂</a></li>
                                   <li><a href="4830">牴</a></li>
                                   <li><a href="4838">酊</a></li>
                                   <li><a href="4866">瓰</a></li>
                                   <li><a href="4867">瓲</a></li>
                                   <li><a href="4868">瓮</a></li>
                                   <li><a href="4869">瓱</a></li>
                                   <li><a href="4902">炸</a></li>
                                   <li><a href="4903">炮</a></li>
                                   <li><a href="4904">炬</a></li>
                                   <li><a href="4905">炳</a></li>
                                   <li><a href="4906">炯</a></li>
                                   <li><a href="5024">衵</a></li>
                                   <li><a href="5025">袂</a></li>
                                   <li><a href="5026">衲</a></li>
                                   <li><a href="5041">衽</a></li>
                                   <li><a href="5105">狢</a></li>
                                   <li><a href="5106">狡</a></li>
                                   <li><a href="5107">狠</a></li>
                                   <li><a href="5147">盻</a></li>
                                   <li><a href="5148">眇</a></li>
                                   <li><a href="5149">眈</a></li>
                                   <li><a href="5150">眄</a></li>
                                   <li><a href="5183">陋</a></li>
                                   <li><a href="5184">陌</a></li>
                                   <li><a href="5213">疣</a></li>
                                   <li><a href="5214">疥</a></li>
                                   <li><a href="5302">殃</a></li>
                                   <li><a href="5303">殄</a></li>
                                   <li><a href="5339">茴</a></li>
                                   <li><a href="5340">茯</a></li>
                                   <li><a href="5341">茱</a></li>
                                   <li><a href="5342">荀</a></li>
                                   <li><a href="5343">荅</a></li>
                                   <li><a href="5344">茲</a></li>
                                   <li><a href="5345">茹</a></li>
                                   <li><a href="5346">茵</a></li>
                                   <li><a href="5347">荐</a></li>
                                   <li><a href="5348">茗</a></li>
                                   <li><a href="5349">茘</a></li>
                                   <li><a href="5350">茫</a></li>
                                   <li><a href="5381">莽</a></li>
                                   <li><a href="5501">迢</a></li>
                                   <li><a href="5502">迥</a></li>
                                   <li><a href="5539">竓</a></li>
                                   <li><a href="5540">竕</a></li>
                                   <li><a href="5550">秕</a></li>
                                   <li><a href="5581">衍</a></li>
                                   <li><a href="5587">罘</a></li>
                                   <li><a href="5614">穽</a></li>
                                   <li><a href="5625">矜</a></li>
                                   <li><a href="5626">臾</a></li>
                                   <li><a href="5627">舁</a></li>
                                   <li><a href="6486">姸</a></li>
                                   <li><a href="6487">姮</a></li>
                                   <li><a href="6529">俞</a></li>
                                   <li><a href="8784">竽</a></li>
                                   <li><a href="8998">紉</a></li>
                                   <li><a href="11333">挘</a></li>
                                   <li><a href="12347">炷</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts0101j">
                              <h3 class="ttl_while"><a href="kyu0101j">漢字検定１級 / 準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="5881">拜</a>
                                   </li>
                                   <li><a class="color2" href="5962">恆</a>
                                   </li>
                                   <li><a class="color2" href="6373">侮</a>
                                   </li>
                                   <li><a class="color2" href="6375">勉</a>
                                   </li>
                                   <li><a class="color2" href="6395">祈</a>
                                   </li>
                                   <li><a class="color2" href="6396">祉</a>
                                   </li>
                                   <li><a class="color2" href="6403">突</a>
                                   </li>
                                   <li><a class="color2" href="6408">者</a>
                                   </li>
                                   <li><a class="color2" href="6432">卽</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts">
                              <h3 class="ttl_while">漢字検定対象外</h3>
                              <ul class="search_parts">
                                   <li><a href="5719">迯</a></li>
                                   <li><a href="5756">亰</a></li>
                                   <li><a href="5797">咾</a></li>
                                   <li><a href="5861">皈</a></li>
                                   <li><a href="5895">洙</a></li>
                                   <li><a href="5896">洳</a></li>
                                   <li><a href="5936">茖</a></li>
                                   <li><a href="5952">畍</a></li>
                                   <li><a href="5953">畊</a></li>
                                   <li><a href="5954">畉</a></li>
                                   <li><a href="5955">畆</a></li>
                                   <li><a href="5957">爼</a></li>
                                   <li><a href="5959">恠</a></li>
                                   <li><a href="5969">垳</a></li>
                                   <li><a href="5970">垪</a></li>
                                   <li><a href="5971">垰</a></li>
                                   <li><a href="6052">咼</a></li>
                                   <li><a href="6053">哘</a></li>
                                   <li><a href="6056">咯</a></li>
                                   <li><a href="6080">峇</a></li>
                                   <li><a href="6101">笂</a></li>
                                   <li><a href="6108">柆</a></li>
                                   <li><a href="6159">竒</a></li>
                                   <li><a href="6179">彖</a></li>
                                   <li><a href="6185">挧</a></li>
                                   <li><a href="6256">珎</a></li>
                                   <li><a href="6285">脉</a></li>
                                   <li><a href="6305">衂</a></li>
                                   <li><a href="6339">陏</a></li>
                                   <li><a href="6699">乹</a></li>
                                   <li><a href="6721">亯</a></li>
                                   <li><a href="7369">响</a></li>
                                   <li><a href="7521">釔</a></li>
                                   <li><a href="7522">釓</a></li>
                                   <li><a href="7926">陔</a></li>
                                   <li><a href="7927">陒</a></li>
                                   <li><a href="7928">陊</a></li>
                                   <li><a href="8035">卧</a></li>
                                   <li><a href="8036">臤</a></li>
                                   <li><a href="8059">觓</a></li>
                                   <li><a href="8060">觔</a></li>
                                   <li><a href="8080">訄</a></li>
                                   <li><a href="8081">訅</a></li>
                                   <li><a href="8082">訆</a></li>
                                   <li><a href="8083">訇</a></li>
                                   <li><a href="8084">䚯</a></li>
                                   <li><a href="8475">䡄</a></li>
                                   <li><a href="8569">迤</a></li>
                                   <li><a href="8573">迮</a></li>
                                   <li><a href="8574">迠</a></li>
                                   <li><a href="8575">迣</a></li>
                                   <li><a href="8576">迱</a></li>
                                   <li><a href="8577">迨</a></li>
                                   <li><a href="8619">拪</a></li>
                                   <li><a href="8634">郉</a></li>
                                   <li><a href="8644">邽</a></li>
                                   <li><a href="8646">郃</a></li>
                                   <li><a href="8647">郈</a></li>
                                   <li><a href="8648">邿</a></li>
                                   <li><a href="8649">郅</a></li>
                                   <li><a href="8650">郇</a></li>
                                   <li><a href="8651">邾</a></li>
                                   <li><a href="8654">郄</a></li>
                                   <li><a href="8673">郱</a></li>
                                   <li><a href="8709">郑</a></li>
                                   <li><a href="8807">荕</a></li>
                                   <li><a href="8833">竾</a></li>
                                   <li><a href="8849">匧</a></li>
                                   <li><a href="8947">籺</a></li>
                                   <li><a href="8948">籽</a></li>
                                   <li><a href="8949">籹</a></li>
                                   <li><a href="8950">籸</a></li>
                                   <li><a href="8951">籼</a></li>
                                   <li><a href="8994">䊸</a></li>
                                   <li><a href="8995">紈</a></li>
                                   <li><a href="8996">紇</a></li>
                                   <li><a href="8997">紃</a></li>
                                   <li><a href="9198">羍</a></li>
                                   <li><a href="9199">羑</a></li>
                                   <li><a href="9201">羏</a></li>
                                   <li><a href="9222">羿</a></li>
                                   <li><a href="9223">羾</a></li>
                                   <li><a href="9248">耇</a></li>
                                   <li><a href="9251">耍</a></li>
                                   <li><a href="9252">耏</a></li>
                                   <li><a href="9253">耎</a></li>
                                   <li><a href="9254">耑</a></li>
                                   <li><a href="9257">耔</a></li>
                                   <li><a href="9274">耷</a></li>
                                   <li><a href="9309">臿</a></li>
                                   <li><a href="9325">舡</a></li>
                                   <li><a href="9326">舢</a></li>
                                   <li><a href="9404">茍</a></li>
                                   <li><a href="9406">苽</a></li>
                                   <li><a href="9424">䒾</a></li>
                                   <li><a href="9425">茟</a></li>
                                   <li><a href="9426">荢</a></li>
                                   <li><a href="9427">荄</a></li>
                                   <li><a href="9428">䒷</a></li>
                                   <li><a href="9429">荁</a></li>
                                   <li><a href="9430">荍</a></li>
                                   <li><a href="9431">茥</a></li>
                                   <li><a href="9432">茭</a></li>
                                   <li><a href="9433">荇</a></li>
                                   <li><a href="9435">茩</a></li>
                                   <li><a href="9436">茳</a></li>
                                   <li><a href="9437">茛</a></li>
                                   <li><a href="9439">兹</a></li>
                                   <li><a href="9440">茈</a></li>
                                   <li><a href="9441">茡</a></li>
                                   <li><a href="9442">茬</a></li>
                                   <li><a href="9443">茺</a></li>
                                   <li><a href="9444">茙</a></li>
                                   <li><a href="9445">荗</a></li>
                                   <li><a href="9446">茮</a></li>
                                   <li><a href="9447">荃</a></li>
                                   <li><a href="9450">荎</a></li>
                                   <li><a href="9451">茽</a></li>
                                   <li><a href="9452">荑</a></li>
                                   <li><a href="9453">茼</a></li>
                                   <li><a href="9454">茷</a></li>
                                   <li><a href="9455">荂</a></li>
                                   <li><a href="9457">䒽</a></li>
                                   <li><a href="9458">荔</a></li>
                                   <li><a href="9459">茢</a></li>
                                   <li><a href="9460">荖</a></li>
                                   <li><a href="9467">荚</a></li>
                                   <li><a href="9574">茰</a></li>
                                   <li><a href="9765">虶</a></li>
                                   <li><a href="9766">虷</a></li>
                                   <li><a href="9767">虺</a></li>
                                   <li><a href="9768">虸</a></li>
                                   <li><a href="9769">虴</a></li>
                                   <li><a href="9800">虵</a></li>
                                   <li><a href="9976">衁</a></li>
                                   <li><a href="9987">衎</a></li>
                                   <li><a href="10009">衱</a></li>
                                   <li><a href="10010">袀</a></li>
                                   <li><a href="10011">衹</a></li>
                                   <li><a href="10012">衻</a></li>
                                   <li><a href="10014">衯</a></li>
                                   <li><a href="10118">珏</a></li>
                                   <li><a href="10128">珆</a></li>
                                   <li><a href="10129">玵</a></li>
                                   <li><a href="10130">玽</a></li>
                                   <li><a href="10131">玿</a></li>
                                   <li><a href="10132">珅</a></li>
                                   <li><a href="10133">玷</a></li>
                                   <li><a href="10134">珌</a></li>
                                   <li><a href="10136">珉</a></li>
                                   <li><a href="10138">珋</a></li>
                                   <li><a href="10179">珐</a></li>
                                   <li><a href="10263">瓝</a></li>
                                   <li><a href="10268">㼚</a></li>
                                   <li><a href="10269">瓪</a></li>
                                   <li><a href="10270">瓫</a></li>
                                   <li><a href="10282">瓯</a></li>
                                   <li><a href="10298">侽</a></li>
                                   <li><a href="10306">畇</a></li>
                                   <li><a href="10307">畎</a></li>
                                   <li><a href="10309">㽘</a></li>
                                   <li><a href="10310">畈</a></li>
                                   <li><a href="10311">畐</a></li>
                                   <li><a href="10315">畒</a></li>
                                   <li><a href="10350">疧</a></li>
                                   <li><a href="10351">㽷</a></li>
                                   <li><a href="10352">疢</a></li>
                                   <li><a href="10353">疤</a></li>
                                   <li><a href="10354">疺</a></li>
                                   <li><a href="10385">疩</a></li>
                                   <li><a href="10460">癹</a></li>
                                   <li><a href="10464">皅</a></li>
                                   <li><a href="10491">㿬</a></li>
                                   <li><a href="10498">盅</a></li>
                                   <li><a href="10502">昷</a></li>
                                   <li><a href="10504">盇</a></li>
                                   <li><a href="10509">泴</a></li>
                                   <li><a href="10517">盶</a></li>
                                   <li><a href="10518">眂</a></li>
                                   <li><a href="10519">盹</a></li>
                                   <li><a href="10520">眨</a></li>
                                   <li><a href="10521">盼</a></li>
                                   <li><a href="10524">眆</a></li>
                                   <li><a href="10525">眊</a></li>
                                   <li><a href="10526">眀</a></li>
                                   <li><a href="10640">砑</a></li>
                                   <li><a href="10641">砎</a></li>
                                   <li><a href="10642">砍</a></li>
                                   <li><a href="10643">砉</a></li>
                                   <li><a href="10646">砆</a></li>
                                   <li><a href="10647">砭</a></li>
                                   <li><a href="10648">砅</a></li>
                                   <li><a href="10780">祄</a></li>
                                   <li><a href="10781">祆</a></li>
                                   <li><a href="10782">祋</a></li>
                                   <li><a href="10783">祊</a></li>
                                   <li><a href="10784">祅</a></li>
                                   <li><a href="10830">秔</a></li>
                                   <li><a href="10831">秏</a></li>
                                   <li><a href="10832">秌</a></li>
                                   <li><a href="10833">秖</a></li>
                                   <li><a href="10834">种</a></li>
                                   <li><a href="10903">窀</a></li>
                                   <li><a href="10904">窆</a></li>
                                   <li><a href="10905">穾</a></li>
                                   <li><a href="10906">窂</a></li>
                                   <li><a href="10941">竑</a></li>
                                   <li><a href="10960">怘</a></li>
                                   <li><a href="10963">怤</a></li>
                                   <li><a href="10964">㤗</a></li>
                                   <li><a href="10965">㤬</a></li>
                                   <li><a href="11053">㤐</a></li>
                                   <li><a href="11061">恗</a></li>
                                   <li><a href="11062">恛</a></li>
                                   <li><a href="11063">㤥</a></li>
                                   <li><a href="11067">恑</a></li>
                                   <li><a href="11069">恇</a></li>
                                   <li><a href="11070">㤚</a></li>
                                   <li><a href="11071">恔</a></li>
                                   <li><a href="11072">恀</a></li>
                                   <li><a href="11073">恉</a></li>
                                   <li><a href="11074">䘏</a></li>
                                   <li><a href="11075">㤞</a></li>
                                   <li><a href="11076">恌</a></li>
                                   <li><a href="11077">恈</a></li>
                                   <li><a href="11078">恅</a></li>
                                   <li><a href="11080">恱</a></li>
                                   <li><a href="11091">恾</a></li>
                                   <li><a href="11097">恡</a></li>
                                   <li><a href="11107">恓</a></li>
                                   <li><a href="11123">恲</a></li>
                                   <li><a href="11239">扃</a></li>
                                   <li><a href="11240">扂</a></li>
                                   <li><a href="11315">胟</a></li>
                                   <li><a href="11320">挖</a></li>
                                   <li><a href="11321">拽</a></li>
                                   <li><a href="11323">挄</a></li>
                                   <li><a href="11324">挍</a></li>
                                   <li><a href="11325">拫</a></li>
                                   <li><a href="11326">㧗</a></li>
                                   <li><a href="11328">拴</a></li>
                                   <li><a href="11329">挓</a></li>
                                   <li><a href="11330">拸</a></li>
                                   <li><a href="11331">挃</a></li>
                                   <li><a href="11332">挏</a></li>
                                   <li><a href="11390">拼</a></li>
                                   <li><a href="11538">攱</a></li>
                                   <li><a href="11544">敂</a></li>
                                   <li><a href="11545">敁</a></li>
                                   <li><a href="11546">敃</a></li>
                                   <li><a href="11547">敄</a></li>
                                   <li><a href="11551">勄</a></li>
                                   <li><a href="11587">㡿</a></li>
                                   <li><a href="11599">斿</a></li>
                                   <li><a href="11602">斾</a></li>
                                   <li><a href="11609">瓬</a></li>
                                   <li><a href="11626">㫟</a></li>
                                   <li><a href="11632">昻</a></li>
                                   <li><a href="11633">昦</a></li>
                                   <li><a href="11636">昬</a></li>
                                   <li><a href="11643">昹</a></li>
                                   <li><a href="11644">昱</a></li>
                                   <li><a href="11645">昫</a></li>
                                   <li><a href="11646">昡</a></li>
                                   <li><a href="11647">昝</a></li>
                                   <li><a href="11648">昰</a></li>
                                   <li><a href="11651">昮</a></li>
                                   <li><a href="11652">昚</a></li>
                                   <li><a href="11653">昣</a></li>
                                   <li><a href="11656">甠</a></li>
                                   <li><a href="11657">㫤</a></li>
                                   <li><a href="11658">昳</a></li>
                                   <li><a href="11659">昩</a></li>
                                   <li><a href="11660">昲</a></li>
                                   <li><a href="11661">昺</a></li>
                                   <li><a href="11662">昞</a></li>
                                   <li><a href="11663">昪</a></li>
                                   <li><a href="11664">昢</a></li>
                                   <li><a href="11665">昤</a></li>
                                   <li><a href="11744">㪅</a></li>
                                   <li><a href="11769">胑</a></li>
                                   <li><a href="11775">胦</a></li>
                                   <li><a href="11776">胠</a></li>
                                   <li><a href="11777">胊</a></li>
                                   <li><a href="11778">胘</a></li>
                                   <li><a href="11780">胏</a></li>
                                   <li><a href="11781">胒</a></li>
                                   <li><a href="11782">胗</a></li>
                                   <li><a href="11783">胂</a></li>
                                   <li><a href="11784">胜</a></li>
                                   <li><a href="11786">胣</a></li>
                                   <li><a href="11789">胅</a></li>
                                   <li><a href="11791">胈</a></li>
                                   <li><a href="11792">胕</a></li>
                                   <li><a href="11793">朎</a></li>
                                   <li><a href="11936">䒳</a></li>
                                   <li><a href="11965">柗</a></li>
                                   <li><a href="11979">柂</a></li>
                                   <li><a href="11980">荣</a></li>
                                   <li><a href="11981">枻</a></li>
                                   <li><a href="11983">栐</a></li>
                                   <li><a href="11985">柍</a></li>
                                   <li><a href="11986">枿</a></li>
                                   <li><a href="11988">柜</a></li>
                                   <li><a href="11989">枵</a></li>
                                   <li><a href="11990">柙</a></li>
                                   <li><a href="11991">栅</a></li>
                                   <li><a href="11992">柹</a></li>
                                   <li><a href="11993">枲</a></li>
                                   <li><a href="11994">枱</a></li>
                                   <li><a href="11995">柶</a></li>
                                   <li><a href="11996">㭒</a></li>
                                   <li><a href="11997">柅</a></li>
                                   <li><a href="11998">柒</a></li>
                                   <li><a href="11999">柷</a></li>
                                   <li><a href="12000">柛</a></li>
                                   <li><a href="12001">柟</a></li>
                                   <li><a href="12003">柰</a></li>
                                   <li><a href="12004">柦</a></li>
                                   <li><a href="12005">柈</a></li>
                                   <li><a href="12006">柀</a></li>
                                   <li><a href="12007">柲</a></li>
                                   <li><a href="12009">枰</a></li>
                                   <li><a href="12010">柼</a></li>
                                   <li><a href="12011">枼</a></li>
                                   <li><a href="12014">栁</a></li>
                                   <li><a href="12015">柃</a></li>
                                   <li><a href="12037">桒</a></li>
                                   <li><a href="12060">栀</a></li>
                                   <li><a href="12155">柠</a></li>
                                   <li><a href="12375">姹</a></li>
                                   <li><a href="12397">带</a></li>
                                   <li><a href="12464">俙</a></li>
                                   <li><a href="12465">俅</a></li>
                                   <li><a href="12466">俇</a></li>
                                   <li><a href="12467">侷</a></li>
                                   <li><a href="12468">俁</a></li>
                                   <li><a href="12470">俓</a></li>
                                   <li><a href="12471">俉</a></li>
                                   <li><a href="12472">矦</a></li>
                                   <li><a href="12473">侾</a></li>
                                   <li><a href="12474">俈</a></li>
                                   <li><a href="12477">俒</a></li>
                                   <li><a href="12478">侳</a></li>
                                   <li><a href="12479">侸</a></li>
                                   <li><a href="12480">俆</a></li>
                                   <li><a href="12481">俏</a></li>
                                   <li><a href="12484">侲</a></li>
                                   <li><a href="12485">㑗</a></li>
                                   <li><a href="12486">俀</a></li>
                                   <li><a href="12487">侻</a></li>
                                   <li><a href="12488">俋</a></li>
                                   <li><a href="12489">侹</a></li>
                                   <li><a href="12490">俖</a></li>
                                   <li><a href="12491">俌</a></li>
                                   <li><a href="12492">俜</a></li>
                                   <li><a href="12493">侼</a></li>
                                   <li><a href="12494">㑞</a></li>
                                   <li><a href="12495">俍</a></li>
                                   <li><a href="12508">俢</a></li>
                                   <li><a href="12527">俫</a></li>
                                   <li><a href="12652">俦</a></li>
                                   <li><a href="12675">㽙</a></li>
                                   <li><a href="12684">兗</a></li>
                                   <li><a href="12757">㓨</a></li>
                                   <li><a href="12759">剎</a></li>
                                   <li><a href="12762">剉</a></li>
                                   <li><a href="12767">剅</a></li>
                                   <li><a href="12784">剐</a></li>
                                   <li><a href="12837">㰤</a></li>
                                   <li><a href="12838">㰦</a></li>
                                   <li><a href="12839">欨</a></li>
                                   <li><a href="12845">勈</a></li>
                                   <li><a href="12847">勆</a></li>
                                   <li><a href="12879">歫</a></li>
                                   <li><a href="12896">殅</a></li>
                                   <li><a href="12897">殂</a></li>
                                   <li><a href="12952">匩</a></li>
                                   <li><a href="12964">㲋</a></li>
                                   <li><a href="12966">毖</a></li>
                                   <li><a href="12976">匽</a></li>
                                   <li><a href="12985">匨</a></li>
                                   <li><a href="12998">芔</a></li>
                                   <li><a href="13024">乺</a></li>
                                   <li><a href="13025">乻</a></li>
                                   <li><a href="13026">乼</a></li>
                                   <li><a href="13033">亱</a></li>
                                   <li><a href="13034">亲</a></li>
                                   <li><a href="13066">侰</a></li>
                                   <li><a href="13067">侴</a></li>
                                   <li><a href="13068">侺</a></li>
                                   <li><a href="13069">俕</a></li>
                                   <li><a href="13112">兘</a></li>
                                   <li><a href="13113">兙</a></li>
                                   <li><a href="13121">兺</a></li>
                                   <li><a href="13123">冟</a></li>
                                   <li><a href="13128">凁</a></li>
                                   <li><a href="13129">凂</a></li>
                                   <li><a href="13130">凃</a></li>
                                   <li><a href="13148">剆</a></li>
                                   <li><a href="13149">剈</a></li>
                                   <li><a href="13160">勀</a></li>
                                   <li><a href="13161">勂</a></li>
                                   <li><a href="13162">勊</a></li>
                                   <li><a href="13180">卼</a></li>
                                   <li><a href="13191">厗</a></li>
                                   <li><a href="13192">厙</a></li>
                                   <li><a href="13216">叚</a></li>
                                   <li><a href="13281">呲</a></li>
                                   <li><a href="13302">咟</a></li>
                                   <li><a href="13303">咠</a></li>
                                   <li><a href="13304">咡</a></li>
                                   <li><a href="13305">咣</a></li>
                                   <li><a href="13306">咦</a></li>
                                   <li><a href="13307">咧</a></li>
                                   <li><a href="13308">咩</a></li>
                                   <li><a href="13309">咪</a></li>
                                   <li><a href="13310">咭</a></li>
                                   <li><a href="13311">咮</a></li>
                                   <li><a href="13312">咰</a></li>
                                   <li><a href="13313">咱</a></li>
                                   <li><a href="13314">咴</a></li>
                                   <li><a href="13315">咵</a></li>
                                   <li><a href="13316">咶</a></li>
                                   <li><a href="13317">咷</a></li>
                                   <li><a href="13318">咹</a></li>
                                   <li><a href="13319">咺</a></li>
                                   <li><a href="13320">咻</a></li>
                                   <li><a href="13321">咿</a></li>
                                   <li><a href="13322">哃</a></li>
                                   <li><a href="13323">哅</a></li>
                                   <li><a href="13324">哆</a></li>
                                   <li><a href="13325">哊</a></li>
                                   <li><a href="13326">哋</a></li>
                                   <li><a href="13327">哏</a></li>
                                   <li><a href="13328">哙</a></li>
                                   <li><a href="13329">哛</a></li>
                                   <li><a href="13676">坬</a></li>
                                   <li><a href="13697">垌</a></li>
                                   <li><a href="13698">垍</a></li>
                                   <li><a href="13699">垎</a></li>
                                   <li><a href="13700">垏</a></li>
                                   <li><a href="13701">垐</a></li>
                                   <li><a href="13702">垑</a></li>
                                   <li><a href="13703">垒</a></li>
                                   <li><a href="13704">垕</a></li>
                                   <li><a href="13705">垖</a></li>
                                   <li><a href="13706">垗</a></li>
                                   <li><a href="13707">垘</a></li>
                                   <li><a href="13708">垙</a></li>
                                   <li><a href="13709">垚</a></li>
                                   <li><a href="13710">垛</a></li>
                                   <li><a href="13711">垜</a></li>
                                   <li><a href="13712">垞</a></li>
                                   <li><a href="13713">垟</a></li>
                                   <li><a href="13714">垡</a></li>
                                   <li><a href="13715">垥</a></li>
                                   <li><a href="13716">垦</a></li>
                                   <li><a href="13717">垧</a></li>
                                   <li><a href="13718">垨</a></li>
                                   <li><a href="13719">垩</a></li>
                                   <li><a href="13720">垬</a></li>
                                   <li><a href="13890">壵</a></li>
                                   <li><a href="13897">夈</a></li>
                                   <li><a href="13900">复</a></li>
                                   <li><a href="13920">奊</a></li>
                                   <li><a href="13923">奒</a></li>
                                   <li><a href="13999">姕</a></li>
                                   <li><a href="14001">姛</a></li>
                                   <li><a href="14002">姝</a></li>
                                   <li><a href="14003">姞</a></li>
                                   <li><a href="14004">姟</a></li>
                                   <li><a href="14005">姠</a></li>
                                   <li><a href="14006">姡</a></li>
                                   <li><a href="14007">姢</a></li>
                                   <li><a href="14008">姣</a></li>
                                   <li><a href="14009">姤</a></li>
                                   <li><a href="14010">姧</a></li>
                                   <li><a href="14011">姩</a></li>
                                   <li><a href="14012">姭</a></li>
                                   <li><a href="14013">姯</a></li>
                                   <li><a href="14014">姰</a></li>
                                   <li><a href="14015">姱</a></li>
                                   <li><a href="14016">姲</a></li>
                                   <li><a href="14017">姳</a></li>
                                   <li><a href="14018">姴</a></li>
                                   <li><a href="14019">姵</a></li>
                                   <li><a href="14020">姷</a></li>
                                   <li><a href="14021">姺</a></li>
                                   <li><a href="14022">姼</a></li>
                                   <li><a href="14023">姽</a></li>
                                   <li><a href="14024">姾</a></li>
                                   <li><a href="14025">娀</a></li>
                                   <li><a href="14026">娂</a></li>
                                   <li><a href="14027">娄</a></li>
                                   <li><a href="14275">孨</a></li>
                                   <li><a href="14296">宨</a></li>
                                   <li><a href="14297">宩</a></li>
                                   <li><a href="14298">宪</a></li>
                                   <li><a href="14299">宫</a></li>
                                   <li><a href="14340">尛</a></li>
                                   <li><a href="14341">尜</a></li>
                                   <li><a href="14351">尮</a></li>
                                   <li><a href="14352">尯</a></li>
                                   <li><a href="14362">屌</a></li>
                                   <li><a href="14421">峆</a></li>
                                   <li><a href="14422">峈</a></li>
                                   <li><a href="14423">峉</a></li>
                                   <li><a href="14424">峊</a></li>
                                   <li><a href="14425">峋</a></li>
                                   <li><a href="14426">峌</a></li>
                                   <li><a href="14427">峍</a></li>
                                   <li><a href="14428">峎</a></li>
                                   <li><a href="14429">峏</a></li>
                                   <li><a href="14430">峐</a></li>
                                   <li><a href="14431">峑</a></li>
                                   <li><a href="14432">峒</a></li>
                                   <li><a href="14433">峓</a></li>
                                   <li><a href="14434">峔</a></li>
                                   <li><a href="14435">峖</a></li>
                                   <li><a href="14436">峗</a></li>
                                   <li><a href="14437">峘</a></li>
                                   <li><a href="14438">峚</a></li>
                                   <li><a href="14439">峛</a></li>
                                   <li><a href="14440">峜</a></li>
                                   <li><a href="14441">峝</a></li>
                                   <li><a href="14442">峞</a></li>
                                   <li><a href="14443">峟</a></li>
                                   <li><a href="14444">峦</a></li>
                                   <li><a href="14603">巹</a></li>
                                   <li><a href="14604">巺</a></li>
                                   <li><a href="14621">帞</a></li>
                                   <li><a href="14622">帟</a></li>
                                   <li><a href="14623">帠</a></li>
                                   <li><a href="14624">帡</a></li>
                                   <li><a href="14625">帢</a></li>
                                   <li><a href="14626">帣</a></li>
                                   <li><a href="14627">帤</a></li>
                                   <li><a href="14676">庛</a></li>
                                   <li><a href="14678">庡</a></li>
                                   <li><a href="14679">庢</a></li>
                                   <li><a href="14680">庣</a></li>
                                   <li><a href="14681">庤</a></li>
                                   <li><a href="14682">庥</a></li>
                                   <li><a href="14688">庰</a></li>
                                   <li><a href="14723">弇</a></li>
                                   <li><a href="14724">弈</a></li>
                                   <li><a href="14737">弮</a></li>
                                   <li><a href="14762">彥</a></li>
                                   <li><a href="14773">徆</a></li>
                                   <li><a href="14774">徉</a></li>
                                   <li><a href="14775">徍</a></li>
                                   <li><a href="14814">怣</a></li>
                                   <li><a href="14819">怷</a></li>
                                   <li><a href="14820">怸</a></li>
                                   <li><a href="14821">怹</a></li>
                                   <li><a href="14822">恄</a></li>
                                   <li><a href="14823">恎</a></li>
                                   <li><a href="14825">恘</a></li>
                                   <li><a href="14826">恜</a></li>
                                   <li><a href="14827">恞</a></li>
                                   <li><a href="14828">恦</a></li>
                                   <li><a href="14829">恮</a></li>
                                   <li><a href="14895">战</a></li>
                                   <li><a href="14925">拰</a></li>
                                   <li><a href="14926">拹</a></li>
                                   <li><a href="14927">拺</a></li>
                                   <li><a href="14928">拻</a></li>
                                   <li><a href="14929">挀</a></li>
                                   <li><a href="14930">挅</a></li>
                                   <li><a href="14931">挆</a></li>
                                   <li><a href="14932">挊</a></li>
                                   <li><a href="14933">挎</a></li>
                                   <li><a href="14934">挒</a></li>
                                   <li><a href="14935">挔</a></li>
                                   <li><a href="14936">挕</a></li>
                                   <li><a href="14937">挗</a></li>
                                   <li><a href="15055">敀</a></li>
                                   <li><a href="15076">斪</a></li>
                                   <li><a href="15094">昛</a></li>
                                   <li><a href="15095">昸</a></li>
                                   <li><a href="15137">朐</a></li>
                                   <li><a href="15160">枮</a></li>
                                   <li><a href="15161">枺</a></li>
                                   <li><a href="15162">枾</a></li>
                                   <li><a href="15163">柇</a></li>
                                   <li><a href="15164">柋</a></li>
                                   <li><a href="15165">柌</a></li>
                                   <li><a href="15166">柕</a></li>
                                   <li><a href="15167">柖</a></li>
                                   <li><a href="15168">柣</a></li>
                                   <li><a href="15169">查</a></li>
                                   <li><a href="15170">柨</a></li>
                                   <li><a href="15171">柪</a></li>
                                   <li><a href="15172">柫</a></li>
                                   <li><a href="15173">柭</a></li>
                                   <li><a href="15174">柸</a></li>
                                   <li><a href="15175">柽</a></li>
                                   <li><a href="15340">欩</a></li>
                                   <li><a href="15341">欪</a></li>
                                   <li><a href="15367">殶</a></li>
                                   <li><a href="15371">毠</a></li>
                                   <li><a href="15372">毡</a></li>
                                   <li><a href="15399">氟</a></li>
                                   <li><a href="15495">泚</a></li>
                                   <li><a href="15508">泵</a></li>
                                   <li><a href="15509">泿</a></li>
                                   <li><a href="15510">洀</a></li>
                                   <li><a href="15511">洁</a></li>
                                   <li><a href="15512">洂</a></li>
                                   <li><a href="15513">洃</a></li>
                                   <li><a href="15514">洄</a></li>
                                   <li><a href="15515">洅</a></li>
                                   <li><a href="15516">洆</a></li>
                                   <li><a href="15517">洇</a></li>
                                   <li><a href="15518">洈</a></li>
                                   <li><a href="15519">洉</a></li>
                                   <li><a href="15520">洊</a></li>
                                   <li><a href="15522">洎</a></li>
                                   <li><a href="15523">洏</a></li>
                                   <li><a href="15524">洐</a></li>
                                   <li><a href="15525">洑</a></li>
                                   <li><a href="15526">洓</a></li>
                                   <li><a href="15527">洔</a></li>
                                   <li><a href="15528">洕</a></li>
                                   <li><a href="15530">洘</a></li>
                                   <li><a href="15533">洝</a></li>
                                   <li><a href="15534">洠</a></li>
                                   <li><a href="15535">洡</a></li>
                                   <li><a href="15536">洢</a></li>
                                   <li><a href="15537">洣</a></li>
                                   <li><a href="15538">洤</a></li>
                                   <li><a href="15539">洦</a></li>
                                   <li><a href="15540">洧</a></li>
                                   <li><a href="15541">洨</a></li>
                                   <li><a href="15542">洬</a></li>
                                   <li><a href="15543">洭</a></li>
                                   <li><a href="15544">洮</a></li>
                                   <li><a href="15547">洱</a></li>
                                   <li><a href="15548">洷</a></li>
                                   <li><a href="15549">洹</a></li>
                                   <li><a href="15550">洺</a></li>
                                   <li><a href="15551">洼</a></li>
                                   <li><a href="15552">洿</a></li>
                                   <li><a href="15553">浀</a></li>
                                   <li><a href="15554">浂</a></li>
                                   <li><a href="15555">浃</a></li>
                                   <li><a href="15556">浊</a></li>
                                   <li><a href="16025">炟</a></li>
                                   <li><a href="16026">炠</a></li>
                                   <li><a href="16027">炡</a></li>
                                   <li><a href="16028">炢</a></li>
                                   <li><a href="16029">炣</a></li>
                                   <li><a href="16030">炤</a></li>
                                   <li><a href="16031">炥</a></li>
                                   <li><a href="16032">炦</a></li>
                                   <li><a href="16033">炧</a></li>
                                   <li><a href="16034">炨</a></li>
                                   <li><a href="16035">炩</a></li>
                                   <li><a href="16036">炪</a></li>
                                   <li><a href="16037">炫</a></li>
                                   <li><a href="16038">炰</a></li>
                                   <li><a href="16039">炱</a></li>
                                   <li><a href="16040">炲</a></li>
                                   <li><a href="16041">炴</a></li>
                                   <li><a href="16042">炵</a></li>
                                   <li><a href="16043">炶</a></li>
                                   <li><a href="16044">炻</a></li>
                                   <li><a href="16277">爮</a></li>
                                   <li><a href="16278">爯</a></li>
                                   <li><a href="16281">牁</a></li>
                                   <li><a href="16286">牉</a></li>
                                   <li><a href="16287">牊</a></li>
                                   <li><a href="16302">牭</a></li>
                                   <li><a href="16303">牮</a></li>
                                   <li><a href="16304">牯</a></li>
                                   <li><a href="16305">牰</a></li>
                                   <li><a href="16306">牱</a></li>
                                   <li><a href="16307">牳</a></li>
                                   <li><a href="16372">狟</a></li>
                                   <li><a href="16373">狣</a></li>
                                   <li><a href="16374">狤</a></li>
                                   <li><a href="16375">狥</a></li>
                                   <li><a href="16376">狦</a></li>
                                   <li><a href="16377">狧</a></li>
                                   <li><a href="16378">狨</a></li>
                                   <li><a href="16379">狪</a></li>
                                   <li><a href="16380">狫</a></li>
                                   <li><a href="16473">玅</a></li>
                                   <li><a href="16484">玴</a></li>
                                   <li><a href="16485">玶</a></li>
                                   <li><a href="16486">玸</a></li>
                                   <li><a href="16487">玹</a></li>
                                   <li><a href="16488">玾</a></li>
                                   <li><a href="16489">珁</a></li>
                                   <li><a href="16490">珃</a></li>
                                   <li><a href="16491">珄</a></li>
                                   <li><a href="16492">珇</a></li>
                                   <li><a href="16576">瓭</a></li>
                                   <li><a href="16586">甭</a></li>
                                   <li><a href="16589">畓</a></li>
                                   <li><a href="16596">疦</a></li>
                                   <li><a href="16597">疨</a></li>
                                   <li><a href="16598">疪</a></li>
                                   <li><a href="16632">盄</a></li>
                                   <li><a href="16641">盷</a></li>
                                   <li><a href="16642">盺</a></li>
                                   <li><a href="16643">盽</a></li>
                                   <li><a href="16644">盿</a></li>
                                   <li><a href="16645">眃</a></li>
                                   <li><a href="16646">眅</a></li>
                                   <li><a href="16707">矨</a></li>
                                   <li><a href="16711">砃</a></li>
                                   <li><a href="16712">砄</a></li>
                                   <li><a href="16713">砇</a></li>
                                   <li><a href="16714">砈</a></li>
                                   <li><a href="16715">砊</a></li>
                                   <li><a href="16716">砋</a></li>
                                   <li><a href="16717">砏</a></li>
                                   <li><a href="16718">砐</a></li>
                                   <li><a href="16719">砓</a></li>
                                   <li><a href="16807">秎</a></li>
                                   <li><a href="16808">秐</a></li>
                                   <li><a href="16809">秓</a></li>
                                   <li><a href="16810">秗</a></li>
                                   <li><a href="16848">穼</a></li>
                                   <li><a href="16862">竐</a></li>
                                   <li><a href="16863">竔</a></li>
                                   <li><a href="16864">竗</a></li>
                                   <li><a href="16870">竼</a></li>
                                   <li><a href="16871">笀</a></li>
                                   <li><a href="16872">笁</a></li>
                                   <li><a href="16948">籷</a></li>
                                   <li><a href="16949">籿</a></li>
                                   <li><a href="16950">粀</a></li>
                                   <li><a href="17097">耉</a></li>
                                   <li><a href="17135">胇</a></li>
                                   <li><a href="17136">胉</a></li>
                                   <li><a href="17137">胋</a></li>
                                   <li><a href="17138">胐</a></li>
                                   <li><a href="17139">胓</a></li>
                                   <li><a href="17140">胢</a></li>
                                   <li><a href="17221">茚</a></li>
                                   <li><a href="17222">茠</a></li>
                                   <li><a href="17223">茤</a></li>
                                   <li><a href="17224">茪</a></li>
                                   <li><a href="17226">茿</a></li>
                                   <li><a href="17227">荋</a></li>
                                   <li><a href="17228">荌</a></li>
                                   <li><a href="17413">虳</a></li>
                                   <li><a href="17414">虼</a></li>
                                   <li><a href="17415">虽</a></li>
                                   <li><a href="17533">衭</a></li>
                                   <li><a href="17534">衳</a></li>
                                   <li><a href="17535">衴</a></li>
                                   <li><a href="17536">衶</a></li>
                                   <li><a href="17537">衸</a></li>
                                   <li><a href="17538">衼</a></li>
                                   <li><a href="17540">袄</a></li>
                                   <li><a href="17601">覌</a></li>
                                   <li><a href="17757">貟</a></li>
                                   <li><a href="17779">赲</a></li>
                                   <li><a href="17810">趴</a></li>
                                   <li><a href="17914">迧</a></li>
                                   <li><a href="17915">迲</a></li>
                                   <li><a href="17916">迳</a></li>
                                   <li><a href="17944">邼</a></li>
                                   <li><a href="17945">郀</a></li>
                                   <li><a href="17946">郂</a></li>
                                   <li><a href="17947">郆</a></li>
                                   <li><a href="17948">郋</a></li>
                                   <li><a href="17949">郍</a></li>
                                   <li><a href="18164">閁</a></li>
                                   <li><a href="18187">陎</a></li>
                                   <li><a href="18188">陑</a></li>
                                   <li><a href="18189">陓</a></li>
                                   <li><a href="18190">陕</a></li>
                                   <li><a href="18660">㐜</a></li>
                                   <li><a href="18661">㐝</a></li>
                                   <li><a href="18662">㐞</a></li>
                                   <li><a href="18663">㐟</a></li>
                                   <li><a href="18664">㐠</a></li>
                                   <li><a href="18697">㑘</a></li>
                                   <li><a href="18698">㑙</a></li>
                                   <li><a href="18699">㑚</a></li>
                                   <li><a href="18700">㑛</a></li>
                                   <li><a href="18701">㑜</a></li>
                                   <li><a href="18702">㑟</a></li>
                                   <li><a href="18763">㓂</a></li>
                                   <li><a href="18771">㓎</a></li>
                                   <li><a href="18772">㓏</a></li>
                                   <li><a href="18785">㓧</a></li>
                                   <li><a href="18786">㓩</a></li>
                                   <li><a href="18787">㓪</a></li>
                                   <li><a href="18825">㔜</a></li>
                                   <li><a href="18859">㕊</a></li>
                                   <li><a href="18873">㕟</a></li>
                                   <li><a href="18903">㖀</a></li>
                                   <li><a href="18904">㖁</a></li>
                                   <li><a href="18905">㖂</a></li>
                                   <li><a href="18906">㖃</a></li>
                                   <li><a href="18907">㖄</a></li>
                                   <li><a href="18908">㖅</a></li>
                                   <li><a href="18909">㖆</a></li>
                                   <li><a href="18910">㖇</a></li>
                                   <li><a href="18911">㖋</a></li>
                                   <li><a href="18912">㖌</a></li>
                                   <li><a href="18913">㖍</a></li>
                                   <li><a href="18914">㖎</a></li>
                                   <li><a href="19029">㘢</a></li>
                                   <li><a href="19046">㘸</a></li>
                                   <li><a href="19047">㘹</a></li>
                                   <li><a href="19048">㘺</a></li>
                                   <li><a href="19049">㘻</a></li>
                                   <li><a href="19103">㚅</a></li>
                                   <li><a href="19104">㚆</a></li>
                                   <li><a href="19118">㚚</a></li>
                                   <li><a href="19152">㛂</a></li>
                                   <li><a href="19153">㛃</a></li>
                                   <li><a href="19154">㛄</a></li>
                                   <li><a href="19155">㛅</a></li>
                                   <li><a href="19156">㛆</a></li>
                                   <li><a href="19254">㝁</a></li>
                                   <li><a href="19270">㝓</a></li>
                                   <li><a href="19271">㝔</a></li>
                                   <li><a href="19272">㝕</a></li>
                                   <li><a href="19273">㝖</a></li>
                                   <li><a href="19305">㞀</a></li>
                                   <li><a href="19306">㞁</a></li>
                                   <li><a href="19322">㞒</a></li>
                                   <li><a href="19323">㞓</a></li>
                                   <li><a href="19324">㞕</a></li>
                                   <li><a href="19325">㞖</a></li>
                                   <li><a href="19363">㟄</a></li>
                                   <li><a href="19364">㟅</a></li>
                                   <li><a href="19374">㟐</a></li>
                                   <li><a href="19463">㠿</a></li>
                                   <li><a href="19465">㡁</a></li>
                                   <li><a href="19466">㡂</a></li>
                                   <li><a href="19467">㡃</a></li>
                                   <li><a href="19468">㡄</a></li>
                                   <li><a href="19469">㡅</a></li>
                                   <li><a href="19470">㡆</a></li>
                                   <li><a href="19519">㡼</a></li>
                                   <li><a href="19520">㡽</a></li>
                                   <li><a href="19521">㡾</a></li>
                                   <li><a href="19522">㢀</a></li>
                                   <li><a href="19523">㢁</a></li>
                                   <li><a href="19524">㢂</a></li>
                                   <li><a href="19551">㢥</a></li>
                                   <li><a href="19561">㢲</a></li>
                                   <li><a href="19562">㢳</a></li>
                                   <li><a href="19563">㢵</a></li>
                                   <li><a href="19564">㢶</a></li>
                                   <li><a href="19592">㣚</a></li>
                                   <li><a href="19593">㣛</a></li>
                                   <li><a href="19594">㣜</a></li>
                                   <li><a href="19595">㣝</a></li>
                                   <li><a href="19596">㣞</a></li>
                                   <li><a href="19597">㣟</a></li>
                                   <li><a href="19598">㣠</a></li>
                                   <li><a href="19626">㤍</a></li>
                                   <li><a href="19627">㤎</a></li>
                                   <li><a href="19635">㤙</a></li>
                                   <li><a href="19636">㤛</a></li>
                                   <li><a href="19637">㤜</a></li>
                                   <li><a href="19638">㤝</a></li>
                                   <li><a href="19641">㤡</a></li>
                                   <li><a href="19642">㤢</a></li>
                                   <li><a href="19643">㤤</a></li>
                                   <li><a href="19644">㤦</a></li>
                                   <li><a href="19645">㤧</a></li>
                                   <li><a href="19646">㤨</a></li>
                                   <li><a href="19759">㧁</a></li>
                                   <li><a href="19760">㧂</a></li>
                                   <li><a href="19772">㧓</a></li>
                                   <li><a href="19776">㧡</a></li>
                                   <li><a href="19777">㧢</a></li>
                                   <li><a href="19778">㧣</a></li>
                                   <li><a href="19779">㧤</a></li>
                                   <li><a href="19780">㧥</a></li>
                                   <li><a href="19781">㧦</a></li>
                                   <li><a href="19783">㧨</a></li>
                                   <li><a href="19784">㧩</a></li>
                                   <li><a href="19785">㧪</a></li>
                                   <li><a href="19786">㧫</a></li>
                                   <li><a href="19788">㧮</a></li>
                                   <li><a href="19789">㧯</a></li>
                                   <li><a href="19895">㪃</a></li>
                                   <li><a href="19896">㪄</a></li>
                                   <li><a href="19897">㪆</a></li>
                                   <li><a href="19937">㪵</a></li>
                                   <li><a href="19942">㪼</a></li>
                                   <li><a href="19943">㪽</a></li>
                                   <li><a href="19950">㫈</a></li>
                                   <li><a href="19965">㫛</a></li>
                                   <li><a href="19966">㫝</a></li>
                                   <li><a href="19967">㫞</a></li>
                                   <li><a href="19968">㫡</a></li>
                                   <li><a href="19969">㫢</a></li>
                                   <li><a href="20033">㭑</a></li>
                                   <li><a href="20034">㭓</a></li>
                                   <li><a href="20035">㭔</a></li>
                                   <li><a href="20036">㭕</a></li>
                                   <li><a href="20181">㰥</a></li>
                                   <li><a href="20182">㰧</a></li>
                                   <li><a href="20183">㰨</a></li>
                                   <li><a href="20218">㱒</a></li>
                                   <li><a href="20226">㱞</a></li>
                                   <li><a href="20227">㱟</a></li>
                                   <li><a href="20228">㱠</a></li>
                                   <li><a href="20268">㲒</a></li>
                                   <li><a href="20324">㳖</a></li>
                                   <li><a href="20326">㳘</a></li>
                                   <li><a href="20327">㳙</a></li>
                                   <li><a href="20328">㳚</a></li>
                                   <li><a href="20330">㳜</a></li>
                                   <li><a href="20331">㳞</a></li>
                                   <li><a href="20482">㶬</a></li>
                                   <li><a href="20483">㶭</a></li>
                                   <li><a href="20484">㶮</a></li>
                                   <li><a href="20485">㶯</a></li>
                                   <li><a href="20486">㶰</a></li>
                                   <li><a href="20487">㶱</a></li>
                                   <li><a href="20556">㸖</a></li>
                                   <li><a href="20561">㸛</a></li>
                                   <li><a href="20582">㸰</a></li>
                                   <li><a href="20583">㸱</a></li>
                                   <li><a href="20584">㸲</a></li>
                                   <li><a href="20585">㸳</a></li>
                                   <li><a href="20637">㹫</a></li>
                                   <li><a href="20638">㹬</a></li>
                                   <li><a href="20639">㹭</a></li>
                                   <li><a href="20640">㹮</a></li>
                                   <li><a href="20641">㹯</a></li>
                                   <li><a href="20697">㺱</a></li>
                                   <li><a href="20701">㺷</a></li>
                                   <li><a href="20703">㺹</a></li>
                                   <li><a href="20704">㺺</a></li>
                                   <li><a href="20817">㽚</a></li>
                                   <li><a href="20841">㽸</a></li>
                                   <li><a href="20842">㽹</a></li>
                                   <li><a href="20843">㽺</a></li>
                                   <li><a href="20844">㽻</a></li>
                                   <li><a href="20921">㿞</a></li>
                                   <li><a href="20931">㿫</a></li>
                                   <li><a href="20947">㿽</a></li>
                                   <li><a href="20966">䀕</a></li>
                                   <li><a href="20967">䀖</a></li>
                                   <li><a href="20968">䀗</a></li>
                                   <li><a href="20969">䀙</a></li>
                                   <li><a href="20970">䀚</a></li>
                                   <li><a href="20971">䀛</a></li>
                                   <li><a href="20972">䀜</a></li>
                                   <li><a href="20973">䀞</a></li>
                                   <li><a href="21059">䂇</a></li>
                                   <li><a href="21073">䂚</a></li>
                                   <li><a href="21074">䂛</a></li>
                                   <li><a href="21075">䂜</a></li>
                                   <li><a href="21076">䂝</a></li>
                                   <li><a href="21077">䂞</a></li>
                                   <li><a href="21152">䃿</a></li>
                                   <li><a href="21153">䄀</a></li>
                                   <li><a href="21185">䄮</a></li>
                                   <li><a href="21186">䄰</a></li>
                                   <li><a href="21187">䄱</a></li>
                                   <li><a href="21188">䄲</a></li>
                                   <li><a href="21189">䄳</a></li>
                                   <li><a href="21266">䆓</a></li>
                                   <li><a href="21267">䆔</a></li>
                                   <li><a href="21268">䆕</a></li>
                                   <li><a href="21269">䆖</a></li>
                                   <li><a href="21310">䇅</a></li>
                                   <li><a href="21311">䇆</a></li>
                                   <li><a href="21326">䇖</a></li>
                                   <li><a href="21471">䉺</a></li>
                                   <li><a href="21530">䊶</a></li>
                                   <li><a href="21531">䊷</a></li>
                                   <li><a href="21642">䍂</a></li>
                                   <li><a href="21655">䍑</a></li>
                                   <li><a href="21656">䍓</a></li>
                                   <li><a href="21657">䍔</a></li>
                                   <li><a href="21725">䎠</a></li>
                                   <li><a href="21726">䎢</a></li>
                                   <li><a href="21774">䏞</a></li>
                                   <li><a href="21775">䏟</a></li>
                                   <li><a href="21776">䏠</a></li>
                                   <li><a href="21777">䏡</a></li>
                                   <li><a href="21778">䏣</a></li>
                                   <li><a href="21779">䏤</a></li>
                                   <li><a href="21780">䏥</a></li>
                                   <li><a href="21877">䑡</a></li>
                                   <li><a href="21878">䑢</a></li>
                                   <li><a href="21879">䑣</a></li>
                                   <li><a href="21935">䒰</a></li>
                                   <li><a href="21936">䒲</a></li>
                                   <li><a href="21937">䒴</a></li>
                                   <li><a href="21938">䒵</a></li>
                                   <li><a href="21939">䒸</a></li>
                                   <li><a href="21940">䒺</a></li>
                                   <li><a href="21941">䒻</a></li>
                                   <li><a href="21942">䒼</a></li>
                                   <li><a href="22092">䖉</a></li>
                                   <li><a href="22108">䖞</a></li>
                                   <li><a href="22109">䖠</a></li>
                                   <li><a href="22201">䘟</a></li>
                                   <li><a href="22265">䙲</a></li>
                                   <li><a href="22317">䚮</a></li>
                                   <li><a href="22414">䜪</a></li>
                                   <li><a href="22554">䟓</a></li>
                                   <li><a href="22555">䟔</a></li>
                                   <li><a href="22649">䡂</a></li>
                                   <li><a href="22650">䡃</a></li>
                                   <li><a href="22708">䢑</a></li>
                                   <li><a href="22741">䢼</a></li>
                                   <li><a href="22743">䢾</a></li>
                                   <li><a href="22744">䢿</a></li>
                                   <li><a href="22745">䣀</a></li>
                                   <li><a href="22746">䣁</a></li>
                                   <li><a href="22747">䣂</a></li>
                                   <li><a href="22776">䣥</a></li>
                                   <li><a href="22777">䣦</a></li>
                                   <li><a href="22951">䧄</a></li>
                                   <li><a href="22952">䧅</a></li>
                                   <li><a href="22953">䧆</a></li>
                                   <li><a href="22954">䧇</a></li>
                                   <li><a href="23891">佭</a></li>
                                   <li><a href="23892">侱</a></li>
                                   <li><a href="23897">叝</a></li>
                                   <li><a href="23899">咞</a></li>
                                   <li><a href="23928">垔</a></li>
                                   <li><a href="23929">垝</a></li>
                                   <li><a href="23939">壴</a></li>
                                   <li><a href="23942">奓</a></li>
                                   <li><a href="23946">姘</a></li>
                                   <li><a href="23997">柺</a></li>
                                   <li><a href="24006">汧</a></li>
                                   <li><a href="24009">沗</a></li>
                                   <li><a href="24012">泒</a></li>
                                   <li><a href="24068">狊</a></li>
                                   <li><a href="24076">皍</a></li>
                                   <li><a href="24081">祌</a></li>
                                   <li><a href="24109">茦</a></li>
                                   <li><a href="24110">茧</a></li>
                                   <li><a href="24147">迡</a></li>
                                   <li><a href="24148">迬</a></li>
                                   <li><a href="24187">㒸</a></li>
                                   <li><a href="24214">㢴</a></li>
                                   <li><a href="24223">㫠</a></li>
                                   <li><a href="24259">㼛</a></li>
                                   <li><a href="24262">㿼</a></li>
                                   <li><a href="24263">䀘</a></li>
                                   <li><a href="24267">䃽</a></li>
                                   <li><a href="24268">䃾</a></li>
                                   <li><a href="24275">䄯</a></li>
                                   <li><a href="24289">䏢</a></li>
                                   <li><a href="24297">䒱</a></li>
                                   <li><a href="24298">䒶</a></li>
                                   <li><a href="24299">䓁</a></li>
                                   <li><a href="24321">䖟</a></li>
                                   <li><a href="24330">䚰</a></li>
                                   <li><a href="24338">䢐</a></li>
                                   <li><a href="24397">䎟</a></li>
                                   <li><a href="24398">䒹</a></li>
                                   <li><a href="24405">济</a></li>
                                   <li><a href="24483">荠</a></li>
                                   <li><a href="24534">举</a></li>
                                   <li><a href="24582">俧</a></li>
                                   <li><a href="24583">俨</a></li>
                                   <li><a href="24584">俩</a></li>
                                   <li><a href="24585">俪</a></li>
                                   <li><a href="24586">俬</a></li>
                                   <li><a href="24748">厛</a></li>
                                   <li><a href="24776">叜</a></li>
                                   <li><a href="24793">哌</a></li>
                                   <li><a href="24794">哐</a></li>
                                   <li><a href="24798">哔</a></li>
                                   <li><a href="24799">哕</a></li>
                                   <li><a href="24800">哖</a></li>
                                   <li><a href="24801">哗</a></li>
                                   <li><a href="24802">哚</a></li>
                                   <li><a href="24803">哜</a></li>
                                   <li><a href="24804">哝</a></li>
                                   <li><a href="24805">哞</a></li>
                                   <li><a href="24983">垫</a></li>
                                   <li><a href="24985">垮</a></li>
                                   <li><a href="24988">垱</a></li>
                                   <li><a href="24990">垲</a></li>
                                   <li><a href="24991">垴</a></li>
                                   <li><a href="24993">垵</a></li>
                                   <li><a href="25033">奖</a></li>
                                   <li><a href="25053">娇</a></li>
                                   <li><a href="25054">娈</a></li>
                                   <li><a href="25088">孪</a></li>
                                   <li><a href="25095">尝</a></li>
                                   <li><a href="25120">峕</a></li>
                                   <li><a href="25121">峢</a></li>
                                   <li><a href="25123">峤</a></li>
                                   <li><a href="25124">峥</a></li>
                                   <li><a href="25125">峧</a></li>
                                   <li><a href="25205">巬</a></li>
                                   <li><a href="25206">巭</a></li>
                                   <li><a href="25228">徔</a></li>
                                   <li><a href="25238">总</a></li>
                                   <li><a href="25239">怼</a></li>
                                   <li><a href="25244">恸</a></li>
                                   <li><a href="25245">恹</a></li>
                                   <li><a href="25246">恺</a></li>
                                   <li><a href="25247">恼</a></li>
                                   <li><a href="25286">挡</a></li>
                                   <li><a href="25287">挢</a></li>
                                   <li><a href="25288">挣</a></li>
                                   <li><a href="25289">挦</a></li>
                                   <li><a href="25355">旀</a></li>
                                   <li><a href="25359">显</a></li>
                                   <li><a href="25365">朑</a></li>
                                   <li><a href="25375">栆</a></li>
                                   <li><a href="25376">标</a></li>
                                   <li><a href="25377">栈</a></li>
                                   <li><a href="25378">栉</a></li>
                                   <li><a href="25380">栌</a></li>
                                   <li><a href="25381">栍</a></li>
                                   <li><a href="25383">栏</a></li>
                                   <li><a href="25384">树</a></li>
                                   <li><a href="25410">挤</a></li>
                                   <li><a href="25492">氞</a></li>
                                   <li><a href="25493">氠</a></li>
                                   <li><a href="25494">氡</a></li>
                                   <li><a href="25495">氢</a></li>
                                   <li><a href="25511">沯</a></li>
                                   <li><a href="25512">泶</a></li>
                                   <li><a href="25521">浉</a></li>
                                   <li><a href="25522">浌</a></li>
                                   <li><a href="25523">浍</a></li>
                                   <li><a href="25524">浏</a></li>
                                   <li><a href="25525">浐</a></li>
                                   <li><a href="25527">浓</a></li>
                                   <li><a href="25529">浔</a></li>
                                   <li><a href="25530">浕</a></li>
                                   <li><a href="25613">炽</a></li>
                                   <li><a href="25614">炾</a></li>
                                   <li><a href="25615">炿</a></li>
                                   <li><a href="25616">烀</a></li>
                                   <li><a href="25618">烂</a></li>
                                   <li><a href="25619">烃</a></li>
                                   <li><a href="25680">牵</a></li>
                                   <li><a href="25773">狮</a></li>
                                   <li><a href="25774">狯</a></li>
                                   <li><a href="25775">狰</a></li>
                                   <li><a href="25777">狲</a></li>
                                   <li><a href="25801">甮</a></li>
                                   <li><a href="25809">疬</a></li>
                                   <li><a href="25810">疭</a></li>
                                   <li><a href="25811">疮</a></li>
                                   <li><a href="25836">眍</a></li>
                                   <li><a href="25851">砘</a></li>
                                   <li><a href="25852">砛</a></li>
                                   <li><a href="25909">祍</a></li>
                                   <li><a href="26194">龪</a></li>
                                   <li><a href="26303">胩</a></li>
                                   <li><a href="26304">胪</a></li>
                                   <li><a href="26305">胫</a></li>
                                   <li><a href="26326">舤</a></li>
                                   <li><a href="26352">茒</a></li>
                                   <li><a href="26359">荜</a></li>
                                   <li><a href="26360">荞</a></li>
                                   <li><a href="26361">荟</a></li>
                                   <li><a href="26363">荥</a></li>
                                   <li><a href="26364">荦</a></li>
                                   <li><a href="26365">荧</a></li>
                                   <li><a href="26366">荨</a></li>
                                   <li><a href="26367">荩</a></li>
                                   <li><a href="26368">荪</a></li>
                                   <li><a href="26372">荮</a></li>
                                   <li><a href="26395">㑝</a></li>
                                   <li><a href="26398">㑢</a></li>
                                   <li><a href="26486">㓫</a></li>
                                   <li><a href="26522">㖈</a></li>
                                   <li><a href="26523">㖉</a></li>
                                   <li><a href="26528">㖊</a></li>
                                   <li><a href="26530">虾</a></li>
                                   <li><a href="26533">虿</a></li>
                                   <li><a href="26538">蚃</a></li>
                                   <li><a href="26561">袇</a></li>
                                   <li><a href="26634">㘼</a></li>
                                   <li><a href="26635">㘾</a></li>
                                   <li><a href="26636">㘽</a></li>
                                   <li><a href="26818">㚇</a></li>
                                   <li><a href="26826">㚛</a></li>
                                   <li><a href="26830">赵</a></li>
                                   <li><a href="26832">㛇</a></li>
                                   <li><a href="26835">㛈</a></li>
                                   <li><a href="26841">㛉</a></li>
                                   <li><a href="26847">㛊</a></li>
                                   <li><a href="26848">㛋</a></li>
                                   <li><a href="26849">㛌</a></li>
                                   <li><a href="26899">㞔</a></li>
                                   <li><a href="26906">㟆</a></li>
                                   <li><a href="26942">选</a></li>
                                   <li><a href="26949">㢷</a></li>
                                   <li><a href="26952">逊</a></li>
                                   <li><a href="26961">㣡</a></li>
                                   <li><a href="26969">郏</a></li>
                                   <li><a href="26971">郐</a></li>
                                   <li><a href="27102">㤭</a></li>
                                   <li><a href="27127">㦳</a></li>
                                   <li><a href="27146">㧝</a></li>
                                   <li><a href="27186">㫆</a></li>
                                   <li><a href="27189">㫜</a></li>
                                   <li><a href="27190">㫣</a></li>
                                   <li><a href="27212">㭖</a></li>
                                   <li><a href="27213">㭗</a></li>
                                   <li><a href="27252">㱓</a></li>
                                   <li><a href="27253">㱔</a></li>
                                   <li><a href="27292">㳝</a></li>
                                   <li><a href="27295">㳢</a></li>
                                   <li><a href="27296">㳣</a></li>
                                   <li><a href="27334">㶫</a></li>
                                   <li><a href="27335">㶲</a></li>
                                   <li><a href="27359">㸴</a></li>
                                   <li><a href="27363">㹰</a></li>
                                   <li><a href="27374">㺼</a></li>
                                   <li><a href="27375">㺽</a></li>
                                   <li><a href="27376">㺾</a></li>
                                   <li><a href="27447">䧈</a></li>
                                   <li><a href="27535">䘠</a></li>
                                   <li><a href="27561">䓀</a></li>
                                   <li><a href="27562">䒿</a></li>
                                   <li><a href="27574">䑒</a></li>
                                   <li><a href="27581">䎛</a></li>
                                   <li><a href="27583">䍒</a></li>
                                   <li><a href="27601">䊹</a></li>
                                   <li><a href="27618">䄵</a></li>
                                   <li><a href="27619">䄴</a></li>
                                   <li><a href="27642">䀝</a></li>
                                   <li><a href="27653">㽼</a></li>
                                   <li><a href="27694">𥝱</a></li>
                                   <li><a href="27723">𠱰</a></li>
                                   <li><a href="27724">𢘑</a></li>
                                   <li><a href="27725">𠀺</a></li>
                                   <li><a href="27729">𠡦</a></li>
                                   <li><a href="27738">𢈗</a></li>
                                   <li><a href="27780">𠗖</a></li>
                                   <li><a href="27799">𡋤</a></li>
                                   <li><a href="27800">𡋗</a></li>
                                   <li><a href="27809">𡜆</a></li>
                                   <li><a href="27812">𡱖</a></li>
                                   <li><a href="27816">𠧪</a></li>
                                   <li><a href="27837">𢪸</a></li>
                                   <li><a href="27877">𣴀</a></li>
                                   <li><a href="27892">𤇆</a></li>
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