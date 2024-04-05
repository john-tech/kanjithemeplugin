<?php
/*
 * Template Name: kakusu07
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
               <h1 class="ttl_main">７画の漢字一覧（漢検級順）</h1>

               <p>総画数７画の漢字の一覧です。<br>
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
                                   <option value="#" selected>７画</option>
                                   <option value="kakusu08">８画</option>
                                   <option value="kakusu09">９画</option>
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
                              <li><a href="bkakusu07">部首別順</a></li>
                              <li><a href="ckakusu07">読み順</a></li>
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
                                   <li><a class="color1" href="kanji/007">花</a></li>
                                   <li><a class="color1" href="kanji/008">貝</a></li>
                                   <li><a class="color1" href="kanji/017">見</a></li>
                                   <li><a class="color1" href="kanji/032">車</a></li>
                                   <li><a class="color1" href="kanji/045">赤</a></li>
                                   <li><a class="color1" href="kanji/053">足</a></li>
                                   <li><a class="color1" href="kanji/054">村</a></li>
                                   <li><a class="color1" href="kanji/056">男</a></li>
                                   <li><a class="color1" href="kanji/060">町</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts09">
                              <h3 class="ttl_while"><a href="kyu09">漢字検定９級（小学校２年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/087">何</a></li>
                                   <li><a class="color1" href="kanji/097">角</a></li>
                                   <li><a class="color1" href="kanji/105">汽</a></li>
                                   <li><a class="color1" href="kanji/112">近</a></li>
                                   <li><a class="color1" href="kanji/115">形</a></li>
                                   <li><a class="color1" href="kanji/119">言</a></li>
                                   <li><a class="color1" href="kanji/137">谷</a></li>
                                   <li><a class="color1" href="kanji/141">作</a></li>
                                   <li><a class="color1" href="kanji/153">社</a></li>
                                   <li><a class="color1" href="kanji/166">図</a></li>
                                   <li><a class="color1" href="kanji/171">声</a></li>
                                   <li><a class="color1" href="kanji/179">走</a></li>
                                   <li><a class="color1" href="kanji/182">体</a></li>
                                   <li><a class="color1" href="kanji/184">弟</a></li>
                                   <li><a class="color1" href="kanji/211">売</a></li>
                                   <li><a class="color1" href="kanji/212">麦</a></li>
                                   <li><a class="color1" href="kanji/236">来</a></li>
                                   <li><a class="color1" href="kanji/237">里</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts08">
                              <h3 class="ttl_while"><a href="kyu08">漢字検定８級（小学校３年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/245">医</a></li>
                                   <li><a class="color1" href="kanji/272">究</a></li>
                                   <li><a class="color1" href="kanji/277">局</a></li>
                                   <li><a class="color1" href="kanji/283">君</a></li>
                                   <li><a class="color1" href="kanji/288">決</a></li>
                                   <li><a class="color1" href="kanji/326">住</a></li>
                                   <li><a class="color1" href="kanji/330">助</a></li>
                                   <li><a class="color1" href="kanji/338">身</a></li>
                                   <li><a class="color1" href="kanji/356">対</a></li>
                                   <li><a class="color1" href="kanji/381">投</a></li>
                                   <li><a class="color1" href="kanji/382">豆</a></li>
                                   <li><a class="color1" href="kanji/394">坂</a></li>
                                   <li><a class="color1" href="kanji/411">返</a></li>
                                   <li><a class="color1" href="kanji/419">役</a></li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts07">
                              <h3 class="ttl_while"><a href="kyu07">漢字検定７級（小学校４年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/443">位</a></li>
                                   <li><a class="color1" href="kanji/458">改</a></li>
                                   <li><a class="color1" href="kanji/464">完</a></li>
                                   <li><a class="color1" href="kanji/473">希</a></li>
                                   <li><a class="color1" href="kanji/479">求</a></li>
                                   <li><a class="color1" href="kanji/493">芸</a></li>
                                   <li><a class="color1" href="509">材</a></li>
                                   <li><a class="color1" href="525">児</a></li>
                                   <li><a class="color1" href="533">初</a></li>
                                   <li><a class="color1" href="543">臣</a></li>
                                   <li><a class="color1" href="550">折</a></li>
                                   <li><a class="color1" href="558">束</a></li>
                                   <li><a class="color1" href="573">低</a></li>
                                   <li><a class="color1" href="579">努</a></li>
                                   <li><a class="color1" href="605">兵</a></li>
                                   <li><a class="color1" href="606">別</a></li>
                                   <li><a class="color1" href="624">利</a></li>
                                   <li><a class="color1" href="627">良</a></li>
                                   <li><a class="color1" href="633">冷</a></li>
                                   <li><a class="color1" href="638">労</a></li>
                                   <li><a class="color1" href="1189">沖</a>
                                   </li>
                                   <li><a class="color1" href="1363">岐</a>
                                   </li>
                                   <li><a class="color1" href="1696">佐</a>
                                   </li>
                                   <li><a class="color1" href="2090">阪</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts06">
                              <h3 class="ttl_while"><a href="kyu06">漢字検定６級（小学校５年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/445">囲</a></li>
                                   <li><a class="color1" href="505">告</a></li>
                                   <li><a class="color1" href="651">応</a></li>
                                   <li><a class="color1" href="661">快</a></li>
                                   <li><a class="color1" href="672">技</a></li>
                                   <li><a class="color1" href="680">均</a></li>
                                   <li><a class="color1" href="705">災</a></li>
                                   <li><a class="color1" href="719">志</a></li>
                                   <li><a class="color1" href="723">似</a></li>
                                   <li><a class="color1" href="733">序</a></li>
                                   <li><a class="color1" href="738">状</a></li>
                                   <li><a class="color1" href="739">条</a></li>
                                   <li><a class="color1" href="789">判</a></li>
                                   <li><a class="color1" href="810">防</a></li>
                                   <li><a class="color1" href="817">余</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts05">
                              <h3 class="ttl_while"><a href="kyu05">漢字検定５級（小学校６年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="831">我</a></li>
                                   <li><a class="color1" href="854">系</a></li>
                                   <li><a class="color1" href="867">孝</a></li>
                                   <li><a class="color1" href="876">困</a></li>
                                   <li><a class="color1" href="886">私</a></li>
                                   <li><a class="color1" href="970">否</a></li>
                                   <li><a class="color1" href="972">批</a></li>
                                   <li><a class="color1" href="983">忘</a></li>
                                   <li><a class="color1" href="996">卵</a></li>
                                   <li><a class="color1" href="997">乱</a></li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts04">
                              <h3 class="ttl_while"><a href="kyu04">漢字検定４級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1012">壱</a>
                                   </li>
                                   <li><a class="color1" href="1033">戒</a>
                                   </li>
                                   <li><a class="color1" href="1046">含</a>
                                   </li>
                                   <li><a class="color1" href="1056">却</a>
                                   </li>
                                   <li><a class="color1" href="1070">狂</a>
                                   </li>
                                   <li><a class="color1" href="1079">迎</a>
                                   </li>
                                   <li><a class="color1" href="1094">更</a>
                                   </li>
                                   <li><a class="color1" href="1096">抗</a>
                                   </li>
                                   <li><a class="color1" href="1097">攻</a>
                                   </li>
                                   <li><a class="color1" href="1113">伺</a>
                                   </li>
                                   <li><a class="color1" href="1128">秀</a>
                                   </li>
                                   <li><a class="color1" href="1141">床</a>
                                   </li>
                                   <li><a class="color1" href="1158">吹</a>
                                   </li>
                                   <li><a class="color1" href="1172">即</a>
                                   </li>
                                   <li><a class="color1" href="1177">沢</a>
                                   </li>
                                   <li><a class="color1" href="1194">沈</a>
                                   </li>
                                   <li><a class="color1" href="1233">抜</a>
                                   </li>
                                   <li><a class="color1" href="1245">尾</a>
                                   </li>
                                   <li><a class="color1" href="1270">坊</a>
                                   </li>
                                   <li><a class="color1" href="1279">妙</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts03">
                              <h3 class="ttl_while"><a href="kyu03">漢字検定３級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1350">肝</a>
                                   </li>
                                   <li><a class="color1" href="1361">忌</a>
                                   </li>
                                   <li><a class="color1" href="1405">坑</a>
                                   </li>
                                   <li><a class="color1" href="1409">克</a>
                                   </li>
                                   <li><a class="color1" href="1434">寿</a>
                                   </li>
                                   <li><a class="color1" href="1453">伸</a>
                                   </li>
                                   <li><a class="color1" href="1454">辛</a>
                                   </li>
                                   <li><a class="color1" href="1494">択</a>
                                   </li>
                                   <li><a class="color1" href="1524">尿</a>
                                   </li>
                                   <li><a class="color1" href="1532">伴</a>
                                   </li>
                                   <li><a class="color1" href="1554">芳</a>
                                   </li>
                                   <li><a class="color1" href="1558">邦</a>
                                   </li>
                                   <li><a class="color1" href="1561">妨</a>
                                   </li>
                                   <li><a class="color1" href="1568">没</a>
                                   </li>
                                   <li><a class="color1" href="1583">抑</a>
                                   </li>
                                   <li><a class="color1" href="1595">励</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02j">
                              <h3 class="ttl_while"><a href="kyu02j">漢字検定準２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1605">亜</a>
                                   </li>
                                   <li><a class="color1" href="1665">吟</a>
                                   </li>
                                   <li><a class="color1" href="1681">呉</a>
                                   </li>
                                   <li><a class="color1" href="1745">肖</a>
                                   </li>
                                   <li><a class="color1" href="1747">抄</a>
                                   </li>
                                   <li><a class="color1" href="1774">杉</a>
                                   </li>
                                   <li><a class="color1" href="1804">妥</a>
                                   </li>
                                   <li><a class="color1" href="1809">但</a>
                                   </li>
                                   <li><a class="color1" href="1829">呈</a>
                                   </li>
                                   <li><a class="color1" href="1830">廷</a>
                                   </li>
                                   <li><a class="color1" href="1850">忍</a>
                                   </li>
                                   <li><a class="color1" href="1851">妊</a>
                                   </li>
                                   <li><a class="color1" href="1853">把</a>
                                   </li>
                                   <li><a class="color1" href="1859">伯</a>
                                   </li>
                                   <li><a class="color1" href="1876">扶</a>
                                   </li>
                                   <li><a class="color1" href="1935">戻</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02">
                              <h3 class="ttl_while"><a href="kyu02">漢字検定２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1984">串</a>
                                   </li>
                                   <li><a class="color1" href="2006">沙</a>
                                   </li>
                                   <li><a class="color1" href="2029">芯</a>
                                   </li>
                                   <li><a class="color1" href="2051">汰</a>
                                   </li>
                                   <li><a class="color1" href="2077">那</a>
                                   </li>
                                   <li><a class="color1" href="2094">肘</a>
                                   </li>
                                   <li><a class="color1" href="2112">冶</a>
                                   </li>
                                   <li><a class="color1" href="2117">妖</a>
                                   </li>
                                   <li><a class="color1" href="2119">沃</a>
                                   </li>
                                   <li><a class="color1" href="2128">呂</a>
                                   </li>
                                   <li><a class="color1" href="2130">弄</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01j">
                              <h3 class="ttl_while"><a href="kyu01j">漢字検定準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="2146">杏</a>
                                   </li>
                                   <li><a class="color2" href="2166">佑</a>
                                   </li>
                                   <li><a class="color2" href="2169">迂</a>
                                   </li>
                                   <li><a class="color2" href="2196">邑</a>
                                   </li>
                                   <li><a class="color2" href="2203">伽</a>
                                   </li>
                                   <li><a class="color2" href="2229">芥</a>
                                   </li>
                                   <li><a href="2236">苅</a></li>
                                   <li><a href="2285">妓</a></li>
                                   <li><a class="color2" href="2295">迄</a>
                                   </li>
                                   <li><a class="color2" href="2300">汲</a>
                                   </li>
                                   <li><a class="color2" href="2301">灸</a>
                                   </li>
                                   <li><a class="color2" href="2302">玖</a>
                                   </li>
                                   <li><a class="color2" href="2311">亨</a>
                                   </li>
                                   <li><a class="color2" href="2315">劫</a>
                                   </li>
                                   <li><a class="color2" href="2333">芹</a>
                                   </li>
                                   <li><a class="color2" href="2387">冴</a>
                                   </li>
                                   <li><a class="color2" href="2388">吾</a>
                                   </li>
                                   <li><a class="color2" href="2395">宏</a>
                                   </li>
                                   <li><a class="color2" href="2439">坐</a>
                                   </li>
                                   <li><a class="color2" href="2468">孜</a>
                                   </li>
                                   <li><a href="2484">宍</a></li>
                                   <li><a href="2494">杓</a></li>
                                   <li><a class="color2" href="2495">灼</a>
                                   </li>
                                   <li><a class="color2" href="2584">杖</a>
                                   </li>
                                   <li><a class="color2" href="2602">辰</a>
                                   </li>
                                   <li><a class="color2" href="2614">杜</a>
                                   </li>
                                   <li><a class="color2" href="2655">宋</a>
                                   </li>
                                   <li><a href="2688">呆</a></li>
                                   <li><a class="color2" href="2766">佃</a>
                                   </li>
                                   <li><a class="color2" href="2772">辿</a>
                                   </li>
                                   <li><a class="color2" href="2776">兎</a>
                                   </li>
                                   <li><a href="2804">禿</a></li>
                                   <li><a href="2805">呑</a></li>
                                   <li><a class="color2" href="2808">沌</a>
                                   </li>
                                   <li><a class="color2" href="2816">芭</a>
                                   </li>
                                   <li><a href="2818">吠</a></li>
                                   <li><a href="2842">扮</a></li>
                                   <li><a class="color2" href="2849">庇</a>
                                   </li>
                                   <li><a class="color2" href="2875">甫</a>
                                   </li>
                                   <li><a class="color2" href="2876">芙</a>
                                   </li>
                                   <li><a class="color2" href="2888">吻</a>
                                   </li>
                                   <li><a class="color2" href="2905">牡</a>
                                   </li>
                                   <li><a href="2935">杢</a></li>
                                   <li><a class="color2" href="2950">酉</a>
                                   </li>
                                   <li><a class="color2" href="2967">李</a>
                                   </li>
                                   <li><a class="color2" href="2997">伶</a>
                                   </li>
                                   <li><a href="3015">牢</a></li>
                                   <li><a class="color2" href="6433">吞</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01">
                              <h3 class="ttl_while"><a href="kyu01">漢字検定１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="3075">佚</a></li>
                                   <li><a href="3076">估</a></li>
                                   <li><a href="3077">佝</a></li>
                                   <li><a href="3078">佗</a></li>
                                   <li><a href="3079">佇</a></li>
                                   <li><a href="3080">佞</a></li>
                                   <li><a href="3148">兌</a></li>
                                   <li><a href="3153">冏</a></li>
                                   <li><a href="3171">刪</a></li>
                                   <li><a href="3186">劬</a></li>
                                   <li><a href="3187">劭</a></li>
                                   <li><a href="3198">甸</a></li>
                                   <li><a href="3204">匣</a></li>
                                   <li><a href="3223">吽</a></li>
                                   <li><a href="3224">听</a></li>
                                   <li><a href="3225">吭</a></li>
                                   <li><a href="3226">吼</a></li>
                                   <li><a href="3227">吮</a></li>
                                   <li><a href="3228">吶</a></li>
                                   <li><a href="3229">吩</a></li>
                                   <li><a href="3230">吝</a></li>
                                   <li><a href="3231">呎</a></li>
                                   <li><a href="3323">囮</a></li>
                                   <li><a href="3330">坎</a></li>
                                   <li><a href="3331">圻</a></li>
                                   <li><a href="3332">址</a></li>
                                   <li><a href="3333">坏</a></li>
                                   <li><a href="3365">夾</a></li>
                                   <li><a href="3375">妝</a></li>
                                   <li><a href="3376">妣</a></li>
                                   <li><a href="3381">妍</a></li>
                                   <li><a href="3420">孚</a></li>
                                   <li><a href="3421">孛</a></li>
                                   <li><a href="3438">尨</a></li>
                                   <li><a href="3441">屁</a></li>
                                   <li><a href="3450">岌</a></li>
                                   <li><a href="3451">岑</a></li>
                                   <li><a href="3452">岔</a></li>
                                   <li><a class="color2" href="3483">巫</a>
                                   </li>
                                   <li><a href="3527">彷</a></li>
                                   <li><a href="3539">忻</a></li>
                                   <li><a href="3540">忤</a></li>
                                   <li><a href="3541">忸</a></li>
                                   <li><a href="3542">忱</a></li>
                                   <li><a href="3581">忰</a></li>
                                   <li><a href="3661">扼</a></li>
                                   <li><a href="3662">抉</a></li>
                                   <li><a href="3663">找</a></li>
                                   <li><a href="3664">抒</a></li>
                                   <li><a href="3665">抓</a></li>
                                   <li><a href="3666">抖</a></li>
                                   <li><a href="3667">抃</a></li>
                                   <li><a href="3668">抔</a></li>
                                   <li><a href="3677">抛</a></li>
                                   <li><a href="3903">旱</a></li>
                                   <li><a href="4003">杙</a></li>
                                   <li><a href="4004">杣</a></li>
                                   <li><a href="4005">杠</a></li>
                                   <li><a href="4006">杞</a></li>
                                   <li><a href="4007">杆</a></li>
                                   <li><a href="4212">肛</a></li>
                                   <li><a href="4213">肚</a></li>
                                   <li><a href="4214">肓</a></li>
                                   <li><a href="4319">汞</a></li>
                                   <li><a href="4323">汪</a></li>
                                   <li><a href="4324">沍</a></li>
                                   <li><a href="4325">沚</a></li>
                                   <li><a href="4326">沁</a></li>
                                   <li><a href="4327">汨</a></li>
                                   <li><a href="4328">沂</a></li>
                                   <li><a href="4329">沐</a></li>
                                   <li><a href="4330">泛</a></li>
                                   <li><a href="4331">沛</a></li>
                                   <li><a href="4747">糺</a></li>
                                   <li><a href="4864">瓧</a></li>
                                   <li><a href="4976">矣</a></li>
                                   <li><a href="5100">狄</a></li>
                                   <li><a href="5101">狆</a></li>
                                   <li><a href="5102">狃</a></li>
                                   <li><a href="5179">阮</a></li>
                                   <li><a href="5180">阯</a></li>
                                   <li><a href="5181">阨</a></li>
                                   <li><a href="5199">邨</a></li>
                                   <li><a href="5210">疔</a></li>
                                   <li><a href="5316">芫</a></li>
                                   <li><a href="5322">芟</a></li>
                                   <li><a href="5323">芬</a></li>
                                   <li><a class="color2" href="5445">芦</a>
                                   </li>
                                   <li><a href="5537">竍</a></li>
                                   <li><a href="5585">罕</a></li>
                                   <li><a href="5648">豕</a></li>
                                   <li><a href="6171">巵</a></li>
                                   <li><a href="6532">沪</a></li>
                                   <li><a href="6543">删</a></li>
                                   <li><a href="9391">苆</a></li>
                                   <li><a href="10461">皁</a></li>
                                   <li><a href="11620">旰</a></li>
                                   <li><a href="12355">呏</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts0101j">
                              <h3 class="ttl_while"><a href="kyu0101j">漢字検定１級 / 準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="5741">佛</a>
                                   </li>
                                   <li><a class="color2" href="5801">壯</a>
                                   </li>
                                   <li><a href="5932">沒</a></li>
                                   <li><a class="color2" href="6441">步</a>
                                   </li>
                                   <li><a class="color2" href="6443">每</a>
                                   </li>
                                   <li><a href="12683">免</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts">
                              <h3 class="ttl_while">漢字検定対象外</h3>
                              <ul class="search_parts">
                                   <li><a href="5709">斈</a></li>
                                   <li><a href="5739">亊</a></li>
                                   <li><a href="5792">曵</a></li>
                                   <li><a href="5796">呀</a></li>
                                   <li><a href="5809">况</a></li>
                                   <li><a href="5815">弃</a></li>
                                   <li><a href="5822">豸</a></li>
                                   <li><a href="5859">皀</a></li>
                                   <li><a href="5860">皃</a></li>
                                   <li><a href="5917">杤</a></li>
                                   <li><a href="5925">抂</a></li>
                                   <li><a href="5930">汾</a></li>
                                   <li><a href="5931">汳</a></li>
                                   <li><a href="5950">甼</a></li>
                                   <li><a href="5989">妛</a></li>
                                   <li><a href="6042">乕</a></li>
                                   <li><a href="6060">刧</a></li>
                                   <li><a href="6071">釆</a></li>
                                   <li><a href="6172">帋</a></li>
                                   <li><a href="6197">攸</a></li>
                                   <li><a href="6251">犹</a></li>
                                   <li><a href="6259">甬</a></li>
                                   <li><a href="6359">夽</a></li>
                                   <li><a href="6600">两</a></li>
                                   <li><a href="6701">叓</a></li>
                                   <li><a href="6702">㕝</a></li>
                                   <li><a href="7426">凬</a></li>
                                   <li><a href="7864">镸</a></li>
                                   <li><a href="7865">兏</a></li>
                                   <li><a href="7913">阬</a></li>
                                   <li><a href="7914">阱</a></li>
                                   <li><a href="7915">㘫</a></li>
                                   <li><a href="7916">阧</a></li>
                                   <li><a href="7917">阫</a></li>
                                   <li><a href="7918">阰</a></li>
                                   <li><a href="7930">夅</a></li>
                                   <li><a href="7932">阩</a></li>
                                   <li><a href="7938">阴</a></li>
                                   <li><a href="7939">阥</a></li>
                                   <li><a href="7955">阳</a></li>
                                   <li><a href="7956">阦</a></li>
                                   <li><a href="8006">灵</a></li>
                                   <li><a href="8283">㒵</a></li>
                                   <li><a href="8554">辵</a></li>
                                   <li><a href="8558">迃</a></li>
                                   <li><a href="8559">迀</a></li>
                                   <li><a href="8560">达</a></li>
                                   <li><a href="8570">迆</a></li>
                                   <li><a href="8598">过</a></li>
                                   <li><a href="8609">㳄</a></li>
                                   <li><a href="8618">迁</a></li>
                                   <li><a href="8633">邢</a></li>
                                   <li><a href="8635">邟</a></li>
                                   <li><a href="8636">邥</a></li>
                                   <li><a href="8637">邠</a></li>
                                   <li><a href="8638">邡</a></li>
                                   <li><a href="8684">䢵</a></li>
                                   <li><a href="8727">丣</a></li>
                                   <li><a href="9196">芈</a></li>
                                   <li><a href="9272">耴</a></li>
                                   <li><a href="9297">臫</a></li>
                                   <li><a href="9379">芛</a></li>
                                   <li><a href="9380">芺</a></li>
                                   <li><a href="9381">芲</a></li>
                                   <li><a href="9382">芪</a></li>
                                   <li><a href="9383">芰</a></li>
                                   <li><a href="9384">芨</a></li>
                                   <li><a href="9385">芩</a></li>
                                   <li><a href="9386">芵</a></li>
                                   <li><a href="9387">芡</a></li>
                                   <li><a href="9388">芤</a></li>
                                   <li><a href="9389">芷</a></li>
                                   <li><a href="9390">芿</a></li>
                                   <li><a href="9392">芮</a></li>
                                   <li><a href="9393">芧</a></li>
                                   <li><a href="9394">芚</a></li>
                                   <li><a href="9395">芘</a></li>
                                   <li><a href="9396">芣</a></li>
                                   <li><a href="9397">芾</a></li>
                                   <li><a href="9398">芴</a></li>
                                   <li><a href="9399">芠</a></li>
                                   <li><a href="9400">芼</a></li>
                                   <li><a href="9760">䖝</a></li>
                                   <li><a href="9762">虬</a></li>
                                   <li><a href="10111">玗</a></li>
                                   <li><a href="10112">玕</a></li>
                                   <li><a href="10113">玘</a></li>
                                   <li><a href="10114">玔</a></li>
                                   <li><a href="10115">玓</a></li>
                                   <li><a href="10299">甹</a></li>
                                   <li><a href="10317">㽗</a></li>
                                   <li><a href="10342">㽲</a></li>
                                   <li><a href="10343">疓</a></li>
                                   <li><a href="10344">疕</a></li>
                                   <li><a href="10462">皂</a></li>
                                   <li><a href="10463">旳</a></li>
                                   <li><a href="10497">盁</a></li>
                                   <li><a href="10523">䀎</a></li>
                                   <li><a href="10547">䀏</a></li>
                                   <li><a href="10634">矴</a></li>
                                   <li><a href="10777">礽</a></li>
                                   <li><a href="10824">秂</a></li>
                                   <li><a href="10936">灶</a></li>
                                   <li><a href="10939">竌</a></li>
                                   <li><a href="10951">忐</a></li>
                                   <li><a href="10952">忑</a></li>
                                   <li><a href="10953">忒</a></li>
                                   <li><a href="10955">㤀</a></li>
                                   <li><a href="10958">忟</a></li>
                                   <li><a href="11030">忨</a></li>
                                   <li><a href="11031">忯</a></li>
                                   <li><a href="11032">忣</a></li>
                                   <li><a href="11033">忺</a></li>
                                   <li><a href="11034">忼</a></li>
                                   <li><a href="11035">忶</a></li>
                                   <li><a href="11036">忮</a></li>
                                   <li><a href="11037">忪</a></li>
                                   <li><a href="11038">忲</a></li>
                                   <li><a href="11039">忡</a></li>
                                   <li><a href="11040">忳</a></li>
                                   <li><a href="11041">忭</a></li>
                                   <li><a href="11042">忬</a></li>
                                   <li><a href="11068">忷</a></li>
                                   <li><a href="11184">㤇</a></li>
                                   <li><a href="11220">戓</a></li>
                                   <li><a href="11222">㦯</a></li>
                                   <li><a href="11236">戺</a></li>
                                   <li><a href="11279">抎</a></li>
                                   <li><a href="11280">㧎</a></li>
                                   <li><a href="11281">扴</a></li>
                                   <li><a href="11282">抏</a></li>
                                   <li><a href="11283">抈</a></li>
                                   <li><a href="11284">抇</a></li>
                                   <li><a href="11285">扺</a></li>
                                   <li><a href="11286">扻</a></li>
                                   <li><a href="11287">扯</a></li>
                                   <li><a href="11288">扭</a></li>
                                   <li><a href="11290">抌</a></li>
                                   <li><a href="11291">抐</a></li>
                                   <li><a href="11292">扽</a></li>
                                   <li><a href="11293">㧊</a></li>
                                   <li><a href="11295">扳</a></li>
                                   <li><a href="11296">抆</a></li>
                                   <li><a href="11302">抅</a></li>
                                   <li><a href="11327">抍</a></li>
                                   <li><a href="11357">抙</a></li>
                                   <li><a href="11541">攺</a></li>
                                   <li><a href="11542">攼</a></li>
                                   <li><a href="11579">斘</a></li>
                                   <li><a href="11597">扵</a></li>
                                   <li><a href="11619">㫖</a></li>
                                   <li><a href="11621">旴</a></li>
                                   <li><a href="11622">旲</a></li>
                                   <li><a href="11623">旵</a></li>
                                   <li><a href="11673">时</a></li>
                                   <li><a href="11755">肙</a></li>
                                   <li><a href="11757">肕</a></li>
                                   <li><a href="11758">肜</a></li>
                                   <li><a href="11787">肔</a></li>
                                   <li><a href="11788">伷</a></li>
                                   <li><a href="11940">杝</a></li>
                                   <li><a href="11941">杅</a></li>
                                   <li><a href="11942">杇</a></li>
                                   <li><a href="11943">杌</a></li>
                                   <li><a href="11944">杈</a></li>
                                   <li><a href="11945">杍</a></li>
                                   <li><a href="11946">杦</a></li>
                                   <li><a href="11947">杄</a></li>
                                   <li><a href="11948">杔</a></li>
                                   <li><a href="11949">杕</a></li>
                                   <li><a href="11950">杗</a></li>
                                   <li><a href="12406">佒</a></li>
                                   <li><a href="12407">佉</a></li>
                                   <li><a href="12408">佀</a></li>
                                   <li><a href="12409">伲</a></li>
                                   <li><a href="12410">伱</a></li>
                                   <li><a href="12412">你</a></li>
                                   <li><a href="12413">佘</a></li>
                                   <li><a href="12414">伹</a></li>
                                   <li><a href="12415">佋</a></li>
                                   <li><a href="12416">佂</a></li>
                                   <li><a href="12417">伳</a></li>
                                   <li><a href="12419">佁</a></li>
                                   <li><a href="12421">佔</a></li>
                                   <li><a href="12422">伮</a></li>
                                   <li><a href="12423">佟</a></li>
                                   <li><a href="12424">伾</a></li>
                                   <li><a href="12425">佖</a></li>
                                   <li><a href="12426">佈</a></li>
                                   <li><a href="12427">伻</a></li>
                                   <li><a href="12428">佤</a></li>
                                   <li><a href="12441">伵</a></li>
                                   <li><a href="12459">㑄</a></li>
                                   <li><a href="12482">孞</a></li>
                                   <li><a href="12680">兕</a></li>
                                   <li><a href="12711">冸</a></li>
                                   <li><a href="12712">冹</a></li>
                                   <li><a href="12745">㝴</a></li>
                                   <li><a href="12748">㓠</a></li>
                                   <li><a href="12749">㓟</a></li>
                                   <li><a href="12750">刜</a></li>
                                   <li><a href="12751">别</a></li>
                                   <li><a href="12752">刨</a></li>
                                   <li><a href="12753">刢</a></li>
                                   <li><a href="12776">刬</a></li>
                                   <li><a href="12824">刦</a></li>
                                   <li><a href="12826">劯</a></li>
                                   <li><a href="12827">劰</a></li>
                                   <li><a href="12843">劲</a></li>
                                   <li><a href="12925">囱</a></li>
                                   <li><a href="12927">匉</a></li>
                                   <li><a href="12957">匤</a></li>
                                   <li><a href="12960">㔯</a></li>
                                   <li><a href="12961">毐</a></li>
                                   <li><a href="12963">匥</a></li>
                                   <li><a href="12971">㔷</a></li>
                                   <li><a href="13021">乲</a></li>
                                   <li><a href="13052">伭</a></li>
                                   <li><a href="13053">伿</a></li>
                                   <li><a href="13054">佄</a></li>
                                   <li><a href="13055">佅</a></li>
                                   <li><a href="13056">佊</a></li>
                                   <li><a href="13057">佡</a></li>
                                   <li><a href="13058">佢</a></li>
                                   <li><a href="13059">佣</a></li>
                                   <li><a href="13060">佨</a></li>
                                   <li><a href="13111">兑</a></li>
                                   <li><a href="13126">冺</a></li>
                                   <li><a href="13142">刞</a></li>
                                   <li><a href="13143">刟</a></li>
                                   <li><a href="13144">刡</a></li>
                                   <li><a href="13145">刣</a></li>
                                   <li><a href="13146">刭</a></li>
                                   <li><a href="13157">劮</a></li>
                                   <li><a href="13158">劳</a></li>
                                   <li><a href="13173">卣</a></li>
                                   <li><a href="13174">卤</a></li>
                                   <li><a href="13177">卲</a></li>
                                   <li><a href="13186">厎</a></li>
                                   <li><a href="13187">厏</a></li>
                                   <li><a href="13233">吘</a></li>
                                   <li><a href="13234">吙</a></li>
                                   <li><a href="13235">吚</a></li>
                                   <li><a href="13236">吜</a></li>
                                   <li><a href="13237">吡</a></li>
                                   <li><a href="13238">吢</a></li>
                                   <li><a href="13239">吣</a></li>
                                   <li><a href="13240">吤</a></li>
                                   <li><a href="13241">吥</a></li>
                                   <li><a href="13242">吧</a></li>
                                   <li><a href="13243">吨</a></li>
                                   <li><a href="13244">吪</a></li>
                                   <li><a href="13245">启</a></li>
                                   <li><a href="13246">吰</a></li>
                                   <li><a href="13247">吱</a></li>
                                   <li><a href="13248">吲</a></li>
                                   <li><a href="13249">吳</a></li>
                                   <li><a href="13250">吴</a></li>
                                   <li><a href="13251">吵</a></li>
                                   <li><a href="13252">吷</a></li>
                                   <li><a href="13253">吺</a></li>
                                   <li><a href="13254">吿</a></li>
                                   <li><a href="13255">呁</a></li>
                                   <li><a href="13256">呃</a></li>
                                   <li><a href="13257">呄</a></li>
                                   <li><a href="13258">呅</a></li>
                                   <li><a href="13259">呇</a></li>
                                   <li><a href="13260">呋</a></li>
                                   <li><a href="13261">呌</a></li>
                                   <li><a href="13262">呍</a></li>
                                   <li><a href="13263">呐</a></li>
                                   <li><a href="13264">呕</a></li>
                                   <li><a href="13265">呚</a></li>
                                   <li><a href="13606">囤</a></li>
                                   <li><a href="13607">囥</a></li>
                                   <li><a href="13608">囦</a></li>
                                   <li><a href="13609">囧</a></li>
                                   <li><a href="13610">囨</a></li>
                                   <li><a href="13611">囩</a></li>
                                   <li><a href="13612">囪</a></li>
                                   <li><a href="13613">囫</a></li>
                                   <li><a href="13614">囬</a></li>
                                   <li><a href="13615">园</a></li>
                                   <li><a href="13616">囯</a></li>
                                   <li><a href="13648">圼</a></li>
                                   <li><a href="13649">圽</a></li>
                                   <li><a href="13650">圾</a></li>
                                   <li><a href="13651">圿</a></li>
                                   <li><a href="13652">坁</a></li>
                                   <li><a href="13653">坃</a></li>
                                   <li><a href="13654">坄</a></li>
                                   <li><a href="13655">坅</a></li>
                                   <li><a href="13656">坆</a></li>
                                   <li><a href="13657">坉</a></li>
                                   <li><a href="13658">坋</a></li>
                                   <li><a href="13659">坌</a></li>
                                   <li><a href="13660">坍</a></li>
                                   <li><a href="13661">坒</a></li>
                                   <li><a href="13662">坓</a></li>
                                   <li><a href="13663">坔</a></li>
                                   <li><a href="13664">坕</a></li>
                                   <li><a href="13665">坖</a></li>
                                   <li><a href="13666">块</a></li>
                                   <li><a href="13667">坘</a></li>
                                   <li><a href="13668">坙</a></li>
                                   <li><a href="13895">夆</a></li>
                                   <li><a href="13898">夋</a></li>
                                   <li><a href="13915">夿</a></li>
                                   <li><a href="13916">奀</a></li>
                                   <li><a href="13949">妉</a></li>
                                   <li><a href="13950">妋</a></li>
                                   <li><a href="13951">妌</a></li>
                                   <li><a href="13952">妎</a></li>
                                   <li><a href="13953">妏</a></li>
                                   <li><a href="13954">妐</a></li>
                                   <li><a href="13955">妑</a></li>
                                   <li><a href="13956">妒</a></li>
                                   <li><a href="13957">妔</a></li>
                                   <li><a href="13958">妕</a></li>
                                   <li><a href="13959">妗</a></li>
                                   <li><a href="13960">妘</a></li>
                                   <li><a href="13961">妚</a></li>
                                   <li><a href="13962">妜</a></li>
                                   <li><a href="13963">妞</a></li>
                                   <li><a href="13964">妟</a></li>
                                   <li><a href="13965">妡</a></li>
                                   <li><a href="13966">妢</a></li>
                                   <li><a href="13967">妤</a></li>
                                   <li><a href="13968">妦</a></li>
                                   <li><a href="13969">妧</a></li>
                                   <li><a href="13987">姂</a></li>
                                   <li><a href="14287">宊</a></li>
                                   <li><a href="14288">宎</a></li>
                                   <li><a href="14289">宑</a></li>
                                   <li><a href="14290">宒</a></li>
                                   <li><a href="14331">寽</a></li>
                                   <li><a href="14346">尦</a></li>
                                   <li><a href="14348">尪</a></li>
                                   <li><a href="14349">尫</a></li>
                                   <li><a href="14350">尬</a></li>
                                   <li><a href="14388">岄</a></li>
                                   <li><a href="14389">岅</a></li>
                                   <li><a href="14390">岆</a></li>
                                   <li><a href="14391">岇</a></li>
                                   <li><a href="14392">岉</a></li>
                                   <li><a href="14393">岊</a></li>
                                   <li><a href="14394">岋</a></li>
                                   <li><a href="14395">岎</a></li>
                                   <li><a href="14396">岏</a></li>
                                   <li><a href="14397">岒</a></li>
                                   <li><a href="14398">岓</a></li>
                                   <li><a href="14399">岕</a></li>
                                   <li><a href="14600">巠</a></li>
                                   <li><a href="14612">帉</a></li>
                                   <li><a href="14613">帊</a></li>
                                   <li><a href="14614">帍</a></li>
                                   <li><a href="14615">帎</a></li>
                                   <li><a href="14666">庈</a></li>
                                   <li><a href="14667">庉</a></li>
                                   <li><a href="14668">庋</a></li>
                                   <li><a href="14669">庌</a></li>
                                   <li><a href="14670">庍</a></li>
                                   <li><a href="14671">庎</a></li>
                                   <li><a href="14672">庐</a></li>
                                   <li><a href="14673">庒</a></li>
                                   <li><a href="14721">弅</a></li>
                                   <li><a href="14729">弝</a></li>
                                   <li><a href="14730">弞</a></li>
                                   <li><a href="14760">彣</a></li>
                                   <li><a href="14761">彤</a></li>
                                   <li><a href="14768">彶</a></li>
                                   <li><a href="14769">彸</a></li>
                                   <li><a href="14770">彺</a></li>
                                   <li><a href="14799">忎</a></li>
                                   <li><a href="14803">忦</a></li>
                                   <li><a href="14804">忧</a></li>
                                   <li><a href="14805">忴</a></li>
                                   <li><a href="14806">忹</a></li>
                                   <li><a href="14807">忾</a></li>
                                   <li><a href="14808">怀</a></li>
                                   <li><a href="14900">戼</a></li>
                                   <li><a href="14907">扰</a></li>
                                   <li><a href="14908">扲</a></li>
                                   <li><a href="14909">扷</a></li>
                                   <li><a href="14910">扸</a></li>
                                   <li><a href="14911">抁</a></li>
                                   <li><a href="14912">抋</a></li>
                                   <li><a href="14913">抚</a></li>
                                   <li><a href="14914">抝</a></li>
                                   <li><a href="14915">报</a></li>
                                   <li><a href="14922">抸</a></li>
                                   <li><a href="15145">杊</a></li>
                                   <li><a href="15146">杋</a></li>
                                   <li><a href="15147">杒</a></li>
                                   <li><a href="15148">杘</a></li>
                                   <li><a href="15149">杚</a></li>
                                   <li><a href="15150">杛</a></li>
                                   <li><a href="15396">氙</a></li>
                                   <li><a href="15439">汥</a></li>
                                   <li><a href="15440">汦</a></li>
                                   <li><a href="15441">汩</a></li>
                                   <li><a href="15442">汫</a></li>
                                   <li><a href="15444">汮</a></li>
                                   <li><a href="15445">汯</a></li>
                                   <li><a href="15446">汱</a></li>
                                   <li><a href="15447">汴</a></li>
                                   <li><a href="15448">汵</a></li>
                                   <li><a href="15450">汸</a></li>
                                   <li><a href="15451">汹</a></li>
                                   <li><a href="15452">汻</a></li>
                                   <li><a href="15453">汼</a></li>
                                   <li><a href="15454">汿</a></li>
                                   <li><a href="15456">沄</a></li>
                                   <li><a href="15457">沅</a></li>
                                   <li><a href="15458">沆</a></li>
                                   <li><a href="15459">沇</a></li>
                                   <li><a href="15460">沉</a></li>
                                   <li><a href="15462">沋</a></li>
                                   <li><a href="15463">沎</a></li>
                                   <li><a href="15464">沏</a></li>
                                   <li><a href="15465">沑</a></li>
                                   <li><a href="15466">沔</a></li>
                                   <li><a href="15467">沕</a></li>
                                   <li><a href="15468">沘</a></li>
                                   <li><a href="15469">沜</a></li>
                                   <li><a href="15471">沞</a></li>
                                   <li><a href="15472">沟</a></li>
                                   <li><a href="16001">灴</a></li>
                                   <li><a href="16002">灹</a></li>
                                   <li><a href="16003">灺</a></li>
                                   <li><a href="16004">灻</a></li>
                                   <li><a href="16005">灾</a></li>
                                   <li><a href="16294">牠</a></li>
                                   <li><a href="16295">牣</a></li>
                                   <li><a href="16350">犺</a></li>
                                   <li><a href="16351">犻</a></li>
                                   <li><a href="16352">犼</a></li>
                                   <li><a href="16353">犽</a></li>
                                   <li><a href="16354">犾</a></li>
                                   <li><a href="16355">犿</a></li>
                                   <li><a href="16356">狁</a></li>
                                   <li><a href="16357">狅</a></li>
                                   <li><a href="16358">狇</a></li>
                                   <li><a href="16477">玒</a></li>
                                   <li><a href="16631">盀</a></li>
                                   <li><a href="16638">盯</a></li>
                                   <li><a href="16709">矵</a></li>
                                   <li><a href="16846">穷</a></li>
                                   <li><a href="17127">肐</a></li>
                                   <li><a href="17128">肑</a></li>
                                   <li><a href="17129">肒</a></li>
                                   <li><a href="17130">肗</a></li>
                                   <li><a href="17202">芜</a></li>
                                   <li><a href="17203">芞</a></li>
                                   <li><a href="17204">芢</a></li>
                                   <li><a href="17205">芶</a></li>
                                   <li><a href="17206">苀</a></li>
                                   <li><a href="17207">苁</a></li>
                                   <li><a href="17208">苂</a></li>
                                   <li><a href="17209">苃</a></li>
                                   <li><a href="17210">苄</a></li>
                                   <li><a href="17225">茾</a></li>
                                   <li><a href="17936">邞</a></li>
                                   <li><a href="17937">邤</a></li>
                                   <li><a href="17938">邧</a></li>
                                   <li><a href="17939">邩</a></li>
                                   <li><a href="18184">阭</a></li>
                                   <li><a href="18623">冝</a></li>
                                   <li><a href="18654">㐖</a></li>
                                   <li><a href="18655">㐗</a></li>
                                   <li><a href="18656">㐘</a></li>
                                   <li><a href="18687">㑃</a></li>
                                   <li><a href="18688">㑅</a></li>
                                   <li><a href="18689">㑆</a></li>
                                   <li><a href="18754">㒳</a></li>
                                   <li><a href="18755">㒴</a></li>
                                   <li><a href="18756">㒶</a></li>
                                   <li><a href="18766">㓈</a></li>
                                   <li><a href="18821">㔗</a></li>
                                   <li><a href="18822">㔘</a></li>
                                   <li><a href="18854">㕅</a></li>
                                   <li><a href="18855">㕆</a></li>
                                   <li><a href="18856">㕇</a></li>
                                   <li><a href="18883">㕩</a></li>
                                   <li><a href="18884">㕪</a></li>
                                   <li><a href="18885">㕫</a></li>
                                   <li><a href="18886">㕬</a></li>
                                   <li><a href="18887">㕭</a></li>
                                   <li><a href="18888">㕮</a></li>
                                   <li><a href="18889">㕰</a></li>
                                   <li><a href="18890">㕱</a></li>
                                   <li><a href="18891">㕲</a></li>
                                   <li><a href="18892">㕳</a></li>
                                   <li><a href="18893">㕴</a></li>
                                   <li><a href="18894">㕵</a></li>
                                   <li><a href="18895">㕶</a></li>
                                   <li><a href="19034">㘧</a></li>
                                   <li><a href="19035">㘨</a></li>
                                   <li><a href="19036">㘩</a></li>
                                   <li><a href="19037">㘪</a></li>
                                   <li><a href="19038">㘬</a></li>
                                   <li><a href="19039">㘭</a></li>
                                   <li><a href="19040">㘰</a></li>
                                   <li><a href="19110">㚒</a></li>
                                   <li><a href="19111">㚓</a></li>
                                   <li><a href="19129">㚩</a></li>
                                   <li><a href="19130">㚪</a></li>
                                   <li><a href="19131">㚫</a></li>
                                   <li><a href="19132">㚬</a></li>
                                   <li><a href="19133">㚭</a></li>
                                   <li><a href="19134">㚮</a></li>
                                   <li><a href="19252">㜾</a></li>
                                   <li><a href="19266">㝏</a></li>
                                   <li><a href="19267">㝐</a></li>
                                   <li><a href="19268">㝑</a></li>
                                   <li><a href="19319">㞏</a></li>
                                   <li><a href="19334">㞣</a></li>
                                   <li><a href="19347">㞰</a></li>
                                   <li><a href="19348">㞱</a></li>
                                   <li><a href="19349">㞲</a></li>
                                   <li><a href="19350">㞳</a></li>
                                   <li><a href="19351">㞴</a></li>
                                   <li><a href="19352">㞶</a></li>
                                   <li><a href="19455">㠷</a></li>
                                   <li><a href="19456">㠸</a></li>
                                   <li><a href="19457">㠹</a></li>
                                   <li><a href="19458">㠺</a></li>
                                   <li><a href="19459">㠻</a></li>
                                   <li><a href="19460">㠼</a></li>
                                   <li><a href="19509">㡲</a></li>
                                   <li><a href="19510">㡳</a></li>
                                   <li><a href="19549">㢟</a></li>
                                   <li><a href="19557">㢬</a></li>
                                   <li><a href="19615">㣽</a></li>
                                   <li><a href="19618">㤃</a></li>
                                   <li><a href="19619">㤄</a></li>
                                   <li><a href="19620">㤆</a></li>
                                   <li><a href="19621">㤈</a></li>
                                   <li><a href="19622">㤉</a></li>
                                   <li><a href="19623">㤊</a></li>
                                   <li><a href="19624">㤋</a></li>
                                   <li><a href="19756">㦾</a></li>
                                   <li><a href="19767">㧉</a></li>
                                   <li><a href="19768">㧋</a></li>
                                   <li><a href="19769">㧌</a></li>
                                   <li><a href="19770">㧍</a></li>
                                   <li><a href="19891">㩿</a></li>
                                   <li><a href="19892">㪀</a></li>
                                   <li><a href="19931">㪯</a></li>
                                   <li><a href="19958">㫒</a></li>
                                   <li><a href="19959">㫓</a></li>
                                   <li><a href="19960">㫔</a></li>
                                   <li><a href="19961">㫕</a></li>
                                   <li><a href="19962">㫗</a></li>
                                   <li><a href="20024">㭂</a></li>
                                   <li><a href="20025">㭃</a></li>
                                   <li><a href="20026">㭄</a></li>
                                   <li><a href="20029">㭉</a></li>
                                   <li><a href="20174">㰝</a></li>
                                   <li><a href="20175">㰞</a></li>
                                   <li><a href="20252">㱼</a></li>
                                   <li><a href="20307">㲾</a></li>
                                   <li><a href="20308">㳀</a></li>
                                   <li><a href="20309">㳁</a></li>
                                   <li><a href="20310">㳂</a></li>
                                   <li><a href="20311">㳃</a></li>
                                   <li><a href="20312">㳅</a></li>
                                   <li><a href="20313">㳆</a></li>
                                   <li><a href="20314">㳈</a></li>
                                   <li><a href="20315">㳊</a></li>
                                   <li><a href="20476">㶣</a></li>
                                   <li><a href="20477">㶤</a></li>
                                   <li><a href="20478">㶥</a></li>
                                   <li><a href="20575">㸩</a></li>
                                   <li><a href="20576">㸪</a></li>
                                   <li><a href="20625">㹝</a></li>
                                   <li><a href="20626">㹞</a></li>
                                   <li><a href="20627">㹟</a></li>
                                   <li><a href="20628">㹠</a></li>
                                   <li><a href="20693">㺬</a></li>
                                   <li><a href="20694">㺭</a></li>
                                   <li><a href="20695">㺮</a></li>
                                   <li><a href="20763">㼗</a></li>
                                   <li><a href="20815">㽕</a></li>
                                   <li><a href="20816">㽖</a></li>
                                   <li><a href="20838">㽱</a></li>
                                   <li><a href="20920">㿝</a></li>
                                   <li><a href="21070">䂗</a></li>
                                   <li><a href="21177">䄦</a></li>
                                   <li><a href="21178">䄧</a></li>
                                   <li><a href="21265">䆑</a></li>
                                   <li><a href="21737">䎲</a></li>
                                   <li><a href="21763">䏎</a></li>
                                   <li><a href="21764">䏏</a></li>
                                   <li><a href="21918">䒚</a></li>
                                   <li><a href="21919">䒛</a></li>
                                   <li><a href="21920">䒜</a></li>
                                   <li><a href="21921">䒝</a></li>
                                   <li><a href="21922">䒞</a></li>
                                   <li><a href="21923">䒟</a></li>
                                   <li><a href="21924">䒠</a></li>
                                   <li><a href="21925">䒡</a></li>
                                   <li><a href="21926">䒣</a></li>
                                   <li><a href="21927">䒤</a></li>
                                   <li><a href="21928">䒥</a></li>
                                   <li><a href="21929">䒦</a></li>
                                   <li><a href="22705">䢊</a></li>
                                   <li><a href="22737">䢶</a></li>
                                   <li><a href="22945">䦼</a></li>
                                   <li><a href="22946">䦽</a></li>
                                   <li><a href="23728">龟</a></li>
                                   <li><a href="23927">坈</a></li>
                                   <li><a href="23945">妠</a></li>
                                   <li><a href="23955">宐</a></li>
                                   <li><a href="23959">岈</a></li>
                                   <li><a href="23960">岍</a></li>
                                   <li><a href="24007">汭</a></li>
                                   <li><a href="24008">汶</a></li>
                                   <li><a href="24010">沠</a></li>
                                   <li><a href="24046">灷</a></li>
                                   <li><a href="24183">㐬</a></li>
                                   <li><a href="24184">㑁</a></li>
                                   <li><a href="24185">㑂</a></li>
                                   <li><a href="24190">㔰</a></li>
                                   <li><a href="24196">㕯</a></li>
                                   <li><a href="24208">㞷</a></li>
                                   <li><a href="24294">䒢</a></li>
                                   <li><a href="24336">䢋</a></li>
                                   <li><a href="24531">严</a></li>
                                   <li><a href="24548">亩</a></li>
                                   <li><a href="24550">亪</a></li>
                                   <li><a href="24574">佦</a></li>
                                   <li><a href="24575">佧</a></li>
                                   <li><a href="24747">厑</a></li>
                                   <li><a href="24761">县</a></li>
                                   <li><a href="24780">呒</a></li>
                                   <li><a href="24781">呓</a></li>
                                   <li><a href="24782">呔</a></li>
                                   <li><a href="24783">呖</a></li>
                                   <li><a href="24784">呙</a></li>
                                   <li><a href="24785">呛</a></li>
                                   <li><a href="24969">囵</a></li>
                                   <li><a href="24975">坛</a></li>
                                   <li><a href="24976">坜</a></li>
                                   <li><a href="24978">坟</a></li>
                                   <li><a href="25030">奁</a></li>
                                   <li><a href="25031">奂</a></li>
                                   <li><a href="25035">妩</a></li>
                                   <li><a href="25036">妪</a></li>
                                   <li><a href="25099">层</a></li>
                                   <li><a href="25109">岖</a></li>
                                   <li><a href="25110">岗</a></li>
                                   <li><a href="25111">岙</a></li>
                                   <li><a href="25113">岜</a></li>
                                   <li><a href="25215">庑</a></li>
                                   <li><a href="25216">应</a></li>
                                   <li><a href="25227">彻</a></li>
                                   <li><a href="25235">怃</a></li>
                                   <li><a href="25236">怄</a></li>
                                   <li><a href="25237">怆</a></li>
                                   <li><a href="25266">抠</a></li>
                                   <li><a href="25267">抡</a></li>
                                   <li><a href="25268">抢</a></li>
                                   <li><a href="25269">抣</a></li>
                                   <li><a href="25270">护</a></li>
                                   <li><a href="25357">旷</a></li>
                                   <li><a href="25369">杧</a></li>
                                   <li><a href="25434">歼</a></li>
                                   <li><a href="25448">阶</a></li>
                                   <li><a href="25450">毜</a></li>
                                   <li><a href="25451">毝</a></li>
                                   <li><a href="25491">氚</a></li>
                                   <li><a href="25501">汖</a></li>
                                   <li><a href="25504">沣</a></li>
                                   <li><a href="25505">沤</a></li>
                                   <li><a href="25506">沥</a></li>
                                   <li><a href="25507">沦</a></li>
                                   <li><a href="25508">沧</a></li>
                                   <li><a href="25608">灿</a></li>
                                   <li><a href="25679">牤</a></li>
                                   <li><a href="25786">玙</a></li>
                                   <li><a href="25805">疖</a></li>
                                   <li><a href="25806">疗</a></li>
                                   <li><a href="25846">矶</a></li>
                                   <li><a href="25926">秃</a></li>
                                   <li><a href="26295">肟</a></li>
                                   <li><a href="26343">苈</a></li>
                                   <li><a href="26344">苉</a></li>
                                   <li><a href="26345">苊</a></li>
                                   <li><a href="26347">苍</a></li>
                                   <li><a href="26348">苎</a></li>
                                   <li><a href="26390">㑇</a></li>
                                   <li><a href="26414">㒷</a></li>
                                   <li><a href="26500">㕀</a></li>
                                   <li><a href="26558">补</a></li>
                                   <li><a href="26631">㘮</a></li>
                                   <li><a href="26632">㘯</a></li>
                                   <li><a href="26890">㜿</a></li>
                                   <li><a href="26897">㝽</a></li>
                                   <li><a href="26898">㞎</a></li>
                                   <li><a href="26903">㞵</a></li>
                                   <li><a href="26904">㞸</a></li>
                                   <li><a href="26934">迉</a></li>
                                   <li><a href="26940">迟</a></li>
                                   <li><a href="26945">㢤</a></li>
                                   <li><a href="26947">㢭</a></li>
                                   <li><a href="26954">㣊</a></li>
                                   <li><a href="26958">㣖</a></li>
                                   <li><a href="26960">㣗</a></li>
                                   <li><a href="27130">㧏</a></li>
                                   <li><a href="27135">㧐</a></li>
                                   <li><a href="27207">㭅</a></li>
                                   <li><a href="27208">㭆</a></li>
                                   <li><a href="27250">㱐</a></li>
                                   <li><a href="27251">㱑</a></li>
                                   <li><a href="27287">㳇</a></li>
                                   <li><a href="27288">㳉</a></li>
                                   <li><a href="27370">㺯</a></li>
                                   <li><a href="27448">䧀</a></li>
                                   <li><a href="27449">䦿</a></li>
                                   <li><a href="27485">䢷</a></li>
                                   <li><a href="27537">䘛</a></li>
                                   <li><a href="27624">䃼</a></li>
                                   <li><a href="27720">𠥱</a></li>
                                   <li><a href="27739">𠤵</a></li>
                                   <li><a href="27769">𢦒</a></li>
                                   <li><a href="27775">𦥑</a></li>
                                   <li><a href="27797">𡉻</a></li>
                                   <li><a href="27798">𡉴</a></li>
                                   <li><a href="27820">𡵸</a></li>
                                   <li><a href="27821">𡵢</a></li>
                                   <li><a href="27849">𣏓</a></li>
                                   <li><a href="27850">𣏒</a></li>
                                   <li><a href="27851">𣏐</a></li>
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