<?php
/*
 * Template Name: kakusu16
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
               <h1 class="ttl_main">１６画の漢字一覧（漢検級順）</h1>

               <p>総画数１６画の漢字の一覧です。<br>
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
                                   <option value="kakusu15">１５画</option>
                                   <option value="#" selected>１６画</option>
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
                              <li><a href="bkakusu16">部首別順</a></li>
                              <li><a href="ckakusu16">読み順</a></li>
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
                                   <li><a class="color1" href="kanji/164">親</a></li>
                                   <li><a class="color1" href="kanji/167">頭</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts08">
                              <h3 class="ttl_while"><a href="kyu08">漢字検定８級（小学校３年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/261">館</a></li>
                                   <li><a class="color1" href="kanji/274">橋</a></li>
                                   <li><a class="color1" href="kanji/345">整</a></li>
                                   <li><a class="color1" href="kanji/418">薬</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts07">
                              <h3 class="ttl_while"><a href="kyu07">漢字検定７級（小学校４年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/474">機</a></li>
                                   <li><a class="color1" href="548">積</a></li>
                                   <li><a class="color1" href="639">録</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts06">
                              <h3 class="ttl_while"><a href="kyu06">漢字検定６級（小学校５年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="644">衛</a></li>
                                   <li><a class="color1" href="702">興</a></li>
                                   <li><a class="color1" href="772">築</a></li>
                                   <li><a class="color1" href="784">燃</a></li>
                                   <li><a class="color1" href="816">輸</a></li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts05">
                              <h3 class="ttl_while"><a href="kyu05">漢字検定５級（小学校６年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="857">激</a></li>
                                   <li><a class="color1" href="860">憲</a></li>
                                   <li><a class="color1" href="871">鋼</a></li>
                                   <li><a class="color1" href="895">樹</a></li>
                                   <li><a class="color1" href="901">縦</a></li>
                                   <li><a class="color1" href="931">操</a></li>
                                   <li><a class="color1" href="956">糖</a></li>
                                   <li><a class="color1" href="974">奮</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts04">
                              <h3 class="ttl_while"><a href="kyu04">漢字検定４級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1010">緯</a>
                                   </li>
                                   <li><a class="color1" href="1026">憶</a>
                                   </li>
                                   <li><a class="color1" href="1032">壊</a>
                                   </li>
                                   <li><a class="color1" href="1036">獲</a>
                                   </li>
                                   <li><a class="color1" href="1132">獣</a>
                                   </li>
                                   <li><a class="color1" href="1154">薪</a>
                                   </li>
                                   <li><a class="color1" href="1178">濁</a>
                                   </li>
                                   <li><a class="color1" href="1221">曇</a>
                                   </li>
                                   <li><a class="color1" href="1224">濃</a>
                                   </li>
                                   <li><a class="color1" href="1230">薄</a>
                                   </li>
                                   <li><a class="color1" href="1235">繁</a>
                                   </li>
                                   <li><a class="color1" href="1244">避</a>
                                   </li>
                                   <li><a class="color1" href="1263">壁</a>
                                   </li>
                                   <li><a class="color1" href="1296">謡</a>
                                   </li>
                                   <li><a class="color1" href="1299">頼</a>
                                   </li>
                                   <li><a class="color1" href="1306">隣</a>
                                   </li>
                                   <li><a class="color1" href="1308">隷</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts03">
                              <h3 class="ttl_while"><a href="kyu03">漢字検定３級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1331">穏</a>
                                   </li>
                                   <li><a class="color1" href="1374">凝</a>
                                   </li>
                                   <li><a class="color1" href="1385">憩</a>
                                   </li>
                                   <li><a class="color1" href="1388">賢</a>
                                   </li>
                                   <li><a class="color1" href="1414">墾</a>
                                   </li>
                                   <li><a class="color1" href="1418">錯</a>
                                   </li>
                                   <li><a class="color1" href="1425">諮</a>
                                   </li>
                                   <li><a class="color1" href="1447">錠</a>
                                   </li>
                                   <li><a class="color1" href="1448">嬢</a>
                                   </li>
                                   <li><a class="color1" href="1499">壇</a>
                                   </li>
                                   <li><a class="color1" href="1522">篤</a>
                                   </li>
                                   <li><a class="color1" href="1529">縛</a>
                                   </li>
                                   <li><a class="color1" href="1556">縫</a>
                                   </li>
                                   <li><a class="color1" href="1563">謀</a>
                                   </li>
                                   <li><a class="color1" href="1564">膨</a>
                                   </li>
                                   <li><a class="color1" href="1580">擁</a>
                                   </li>
                                   <li><a class="color1" href="1597">錬</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02j">
                              <h3 class="ttl_while"><a href="kyu02j">漢字検定準２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1623">懐</a>
                                   </li>
                                   <li><a class="color1" href="1643">還</a>
                                   </li>
                                   <li><a class="color1" href="1647">憾</a>
                                   </li>
                                   <li><a class="color1" href="1667">薫</a>
                                   </li>
                                   <li><a class="color1" href="1688">衡</a>
                                   </li>
                                   <li><a class="color1" href="1719">儒</a>
                                   </li>
                                   <li><a class="color1" href="1758">壌</a>
                                   </li>
                                   <li><a class="color1" href="1783">薦</a>
                                   </li>
                                   <li><a class="color1" href="1901">磨</a>
                                   </li>
                                   <li><a class="color1" href="1911">諭</a>
                                   </li>
                                   <li><a class="color1" href="1916">融</a>
                                   </li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts02">
                              <h3 class="ttl_while"><a href="kyu02">漢字検定２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1963">諧</a>
                                   </li>
                                   <li><a class="color1" href="1966">骸</a>
                                   </li>
                                   <li><a class="color1" href="1982">錦</a>
                                   </li>
                                   <li><a class="color1" href="1997">錮</a>
                                   </li>
                                   <li><a class="color1" href="2034">醒</a>
                                   </li>
                                   <li><a class="color1" href="2042">膳</a>
                                   </li>
                                   <li><a class="color1" href="2058">緻</a>
                                   </li>
                                   <li><a class="color1" href="2066">諦</a>
                                   </li>
                                   <li><a class="color1" href="2070">賭</a>
                                   </li>
                                   <li><a class="color1" href="2111">麺</a>
                                   </li>
                                   <li><a class="color1" href="6468">頰</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01j">
                              <h3 class="ttl_while"><a href="kyu01j">漢字検定準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="2154">謂</a>
                                   </li>
                                   <li><a class="color2" href="2174">叡</a>
                                   </li>
                                   <li><a href="2180">穎</a></li>
                                   <li><a class="color2" href="2188">燕</a>
                                   </li>
                                   <li><a class="color2" href="2189">薗</a>
                                   </li>
                                   <li><a href="2191">鴛</a></li>
                                   <li><a class="color2" href="2197">鴨</a>
                                   </li>
                                   <li><a href="2198">鴦</a></li>
                                   <li><a href="2200">鴬</a></li>
                                   <li><a class="color2" href="2246">樫</a>
                                   </li>
                                   <li><a href="2259">翰</a></li>
                                   <li><a href="2260">舘</a></li>
                                   <li><a href="2264">諫</a></li>
                                   <li><a class="color2" href="2280">窺</a>
                                   </li>
                                   <li><a class="color2" href="2294">橘</a>
                                   </li>
                                   <li><a class="color2" href="2309">鋸</a>
                                   </li>
                                   <li><a href="2320">彊</a></li>
                                   <li><a href="2357">頸</a></li>
                                   <li><a class="color2" href="2373">諺</a>
                                   </li>
                                   <li><a class="color2" href="2384">醐</a>
                                   </li>
                                   <li><a class="color2" href="2408">縞</a>
                                   </li>
                                   <li><a href="2459">餐</a></li>
                                   <li><a class="color2" href="2477">錫</a>
                                   </li>
                                   <li><a href="2478">髭</a></li>
                                   <li><a href="2483">鴫</a></li>
                                   <li><a href="2505">豎</a></li>
                                   <li><a href="2513">穐</a></li>
                                   <li><a class="color2" href="2519">輯</a>
                                   </li>
                                   <li><a href="2564">樵</a></li>
                                   <li><a href="2565">橡</a></li>
                                   <li><a class="color2" href="2577">錆</a>
                                   </li>
                                   <li><a class="color2" href="2580">鞘</a>
                                   </li>
                                   <li><a href="2603">儘</a></li>
                                   <li><a class="color2" href="2618">錘</a>
                                   </li>
                                   <li><a class="color2" href="2619">錐</a>
                                   </li>
                                   <li><a href="2671">薮</a></li>
                                   <li><a class="color2" href="2677">樽</a>
                                   </li>
                                   <li><a href="2686">橢</a></li>
                                   <li><a class="color2" href="2696">黛</a>
                                   </li>
                                   <li><a class="color2" href="2701">醍</a>
                                   </li>
                                   <li><a class="color2" href="2720">薙</a>
                                   </li>
                                   <li><a href="2742">諜</a></li>
                                   <li><a class="color2" href="2756">蹄</a>
                                   </li>
                                   <li><a href="2768">澱</a></li>
                                   <li><a class="color2" href="2775">鮎</a>
                                   </li>
                                   <li><a href="2806">噸</a></li>
                                   <li><a href="2838">醗</a></li>
                                   <li><a href="2839">噺</a></li>
                                   <li><a href="2867">錨</a></li>
                                   <li><a href="2879">鮒</a></li>
                                   <li><a href="2892">篦</a></li>
                                   <li><a href="2927">穆</a></li>
                                   <li><a class="color2" href="3004">憐</a>
                                   </li>
                                   <li><a class="color2" href="3012">蕗</a>
                                   </li>
                                   <li><a href="3032">篭</a></li>
                                   <li><a href="5653">頴</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01">
                              <h3 class="ttl_while"><a href="kyu01">漢字検定１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="3041">璢</a></li>
                                   <li><a href="3133">僭</a></li>
                                   <li><a href="3139">儕</a></li>
                                   <li><a href="3140">儔</a></li>
                                   <li><a href="3151">冀</a></li>
                                   <li><a href="3300">嘴</a></li>
                                   <li><a href="3303">噫</a></li>
                                   <li><a href="3304">噤</a></li>
                                   <li><a href="3305">嘯</a></li>
                                   <li><a href="3306">噬</a></li>
                                   <li><a href="3307">噪</a></li>
                                   <li><a href="3308">嚆</a></li>
                                   <li><a href="3328">圜</a></li>
                                   <li><a href="3353">壅</a></li>
                                   <li><a href="3411">嬖</a></li>
                                   <li><a href="3436">寰</a></li>
                                   <li><a href="3475">嶬</a></li>
                                   <li><a href="3476">嶮</a></li>
                                   <li><a href="3478">嶼</a></li>
                                   <li><a href="3511">廨</a></li>
                                   <li><a href="3512">廩</a></li>
                                   <li><a href="3516">彜</a></li>
                                   <li><a href="3537">徼</a></li>
                                   <li><a href="3618">憖</a></li>
                                   <li><a href="3621">憊</a></li>
                                   <li><a href="3622">憑</a></li>
                                   <li><a href="3625">懌</a></li>
                                   <li><a href="3626">懊</a></li>
                                   <li><a href="3627">懈</a></li>
                                   <li><a href="3629">懆</a></li>
                                   <li><a href="3630">憺</a></li>
                                   <li><a href="3632">懍</a></li>
                                   <li><a href="3725">擒</a></li>
                                   <li><a href="3726">撼</a></li>
                                   <li><a href="3727">擅</a></li>
                                   <li><a href="3728">撻</a></li>
                                   <li><a href="3730">擂</a></li>
                                   <li><a href="3751">黔</a></li>
                                   <li><a href="3802">鴟</a></li>
                                   <li><a href="3804">鴒</a></li>
                                   <li><a href="3805">鴕</a></li>
                                   <li><a href="3806">鴣</a></li>
                                   <li><a href="3807">鴪</a></li>
                                   <li><a href="3853">鮃</a></li>
                                   <li><a href="3854">鮓</a></li>
                                   <li><a href="3855">鮑</a></li>
                                   <li><a href="3856">鮗</a></li>
                                   <li><a href="3857">鮖</a></li>
                                   <li><a href="3930">暾</a></li>
                                   <li><a href="3931">暹</a></li>
                                   <li><a href="3932">曁</a></li>
                                   <li><a href="3936">耨</a></li>
                                   <li><a href="3948">麭</a></li>
                                   <li><a href="3959">閻</a></li>
                                   <li><a href="3960">閼</a></li>
                                   <li><a href="3961">閹</a></li>
                                   <li><a href="3962">閾</a></li>
                                   <li><a href="3983">霓</a></li>
                                   <li><a href="3984">霎</a></li>
                                   <li><a href="3985">霑</a></li>
                                   <li><a href="3986">霙</a></li>
                                   <li><a href="3987">霏</a></li>
                                   <li><a href="3988">霖</a></li>
                                   <li><a href="4088">蟇</a></li>
                                   <li><a href="4089">蟆</a></li>
                                   <li><a href="4090">螂</a></li>
                                   <li><a href="4091">螟</a></li>
                                   <li><a href="4174">橄</a></li>
                                   <li><a class="color2" href="4185">橙</a>
                                   </li>
                                   <li><a href="4186">樸</a></li>
                                   <li><a href="4187">橇</a></li>
                                   <li><a href="4188">橦</a></li>
                                   <li><a href="4189">橈</a></li>
                                   <li><a href="4195">檠</a></li>
                                   <li><a href="4248">膩</a></li>
                                   <li><a href="4272">蹂</a></li>
                                   <li><a href="4273">踵</a></li>
                                   <li><a href="4274">踰</a></li>
                                   <li><a href="4275">踴</a></li>
                                   <li><a href="4306">膰</a></li>
                                   <li><a href="4359">靦</a></li>
                                   <li><a href="4433">澡</a></li>
                                   <li><a class="color2" href="4434">澪</a>
                                   </li>
                                   <li><a href="4435">澣</a></li>
                                   <li><a href="4436">澹</a></li>
                                   <li><a href="4437">澳</a></li>
                                   <li><a href="4444">濛</a></li>
                                   <li><a href="4474">輻</a></li>
                                   <li><a href="4475">輹</a></li>
                                   <li><a href="4476">輳</a></li>
                                   <li><a href="4494">駮</a></li>
                                   <li><a href="4495">駱</a></li>
                                   <li><a href="4496">駭</a></li>
                                   <li><a href="4502">駢</a></li>
                                   <li><a href="4554">赭</a></li>
                                   <li><a href="4555">麈</a></li>
                                   <li><a href="4570">歔</a></li>
                                   <li><a href="4571">歙</a></li>
                                   <li><a href="4579">霍</a></li>
                                   <li><a href="4580">雕</a></li>
                                   <li><a href="4583">篝</a></li>
                                   <li><a href="4584">篩</a></li>
                                   <li><a href="4585">篥</a></li>
                                   <li><a href="4586">簑</a></li>
                                   <li><a href="4636">璞</a></li>
                                   <li><a href="4647">髻</a></li>
                                   <li><a href="4648">髷</a></li>
                                   <li><a href="4671">磔</a></li>
                                   <li><a href="4672">磬</a></li>
                                   <li><a href="4673">磧</a></li>
                                   <li><a href="4674">磚</a></li>
                                   <li><a href="4704">錏</a></li>
                                   <li><a href="4705">錙</a></li>
                                   <li><a href="4706">錣</a></li>
                                   <li><a href="4707">錻</a></li>
                                   <li><a href="4708">鋺</a></li>
                                   <li><a href="4709">錚</a></li>
                                   <li><a href="4790">縡</a></li>
                                   <li><a href="4791">縟</a></li>
                                   <li><a href="4792">縊</a></li>
                                   <li><a href="4793">縉</a></li>
                                   <li><a href="4794">縋</a></li>
                                   <li><a href="4795">縢</a></li>
                                   <li><a href="4796">縒</a></li>
                                   <li><a href="4825">骼</a></li>
                                   <li><a href="4875">甌</a></li>
                                   <li><a href="4876">甎</a></li>
                                   <li><a href="4888">艘</a></li>
                                   <li><a href="4889">艙</a></li>
                                   <li><a href="4928">熹</a></li>
                                   <li><a href="4929">熾</a></li>
                                   <li><a href="4930">燉</a></li>
                                   <li><a href="4931">燔</a></li>
                                   <li><a href="4932">燗</a></li>
                                   <li><a class="color2" href="4933">燎</a>
                                   </li>
                                   <li><a href="4980">諤</a></li>
                                   <li><a href="4981">諠</a></li>
                                   <li><a href="4982">諢</a></li>
                                   <li><a href="4983">謔</a></li>
                                   <li><a href="4984">諞</a></li>
                                   <li><a href="4985">諳</a></li>
                                   <li><a href="4986">諷</a></li>
                                   <li><a href="4988">諡</a></li>
                                   <li><a href="5018">鬨</a></li>
                                   <li><a href="5059">襁</a></li>
                                   <li><a href="5060">褸</a></li>
                                   <li><a href="5061">褶</a></li>
                                   <li><a href="5077">躾</a></li>
                                   <li><a href="5122">獪</a></li>
                                   <li><a href="5130">羲</a></li>
                                   <li><a href="5137">頤</a></li>
                                   <li><a href="5138">頷</a></li>
                                   <li><a href="5139">頽</a></li>
                                   <li><a href="5168">瞠</a></li>
                                   <li><a href="5169">瞞</a></li>
                                   <li><a href="5196">隧</a></li>
                                   <li><a href="5245">瘰</a></li>
                                   <li><a href="5246">瘴</a></li>
                                   <li><a href="5247">瘻</a></li>
                                   <li><a href="5272">糒</a></li>
                                   <li><a href="5282">餔</a></li>
                                   <li><a href="5283">餒</a></li>
                                   <li><a href="5307">殫</a></li>
                                   <li><a href="5308">殪</a></li>
                                   <li><a href="5414">蕣</a></li>
                                   <li><a href="5418">薊</a></li>
                                   <li><a href="5419">蕷</a></li>
                                   <li><a class="color2" href="5420">蕾</a>
                                   </li>
                                   <li><a href="5421">薔</a></li>
                                   <li><a href="5422">薨</a></li>
                                   <li><a href="5423">薀</a></li>
                                   <li><a href="5424">薑</a></li>
                                   <li><a href="5425">薜</a></li>
                                   <li><a href="5426">薛</a></li>
                                   <li><a href="5427">薈</a></li>
                                   <li><a href="5428">薇</a></li>
                                   <li><a href="5429">薐</a></li>
                                   <li><a href="5430">薤</a></li>
                                   <li><a href="5431">蕭</a></li>
                                   <li><a href="5459">覦</a></li>
                                   <li><a href="5460">覩</a></li>
                                   <li><a href="5529">遶</a></li>
                                   <li><a href="5530">邁</a></li>
                                   <li><a href="5567">盧</a></li>
                                   <li><a href="5568">盥</a></li>
                                   <li><a href="5593">罹</a></li>
                                   <li><a href="5620">窶</a></li>
                                   <li><a href="5632">臻</a></li>
                                   <li><a href="5891">臈</a></li>
                                   <li><a href="6136">墻</a></li>
                                   <li><a href="6493">鴥</a></li>
                                   <li><a href="6509">篡</a></li>
                                   <li><a href="6530">麇</a></li>
                                   <li><a href="6921">鮇</a></li>
                                   <li><a href="7396">赬</a></li>
                                   <li><a href="8832">篪</a></li>
                                   <li><a href="9099">縕</a></li>
                                   <li><a href="9681">薏</a></li>
                                   <li><a href="9683">﨟</a></li>
                                   <li><a href="9890">螈</a></li>
                                   <li><a href="9897">螗</a></li>
                                   <li><a href="12339">噦</a></li>
                                   <li><a href="12340">噯</a></li>
                                   <li><a href="27709">𩶗</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts0101j">
                              <h3 class="ttl_while"><a href="kyu0101j">漢字検定１級 / 準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="5670">龜</a></li>
                                   <li><a class="color2" href="5673">燈</a>
                                   </li>
                                   <li><a class="color2" href="5675">龍</a>
                                   </li>
                                   <li><a href="5682">螢</a></li>
                                   <li><a class="color2" href="5683">曉</a>
                                   </li>
                                   <li><a href="5708">學</a></li>
                                   <li><a href="5755">豫</a></li>
                                   <li><a href="5794">澤</a></li>
                                   <li><a href="5819">餘</a></li>
                                   <li><a class="color2" href="5843">勳</a>
                                   </li>
                                   <li><a href="5844">勵</a></li>
                                   <li><a href="5873">據</a></li>
                                   <li><a href="5874">擇</a></li>
                                   <li><a class="color2" href="5913">縣</a>
                                   </li>
                                   <li><a href="5927">擔</a></li>
                                   <li><a href="5949">錢</a></li>
                                   <li><a href="6051">遲</a></li>
                                   <li><a href="6062">劑</a></li>
                                   <li><a href="6063">辨</a></li>
                                   <li><a class="color2" href="6182">戰</a>
                                   </li>
                                   <li><a class="color2" href="6245">燒</a>
                                   </li>
                                   <li><a class="color2" href="6254">默</a>
                                   </li>
                                   <li><a href="6255">獨</a></li>
                                   <li><a class="color2" href="6306">衞</a>
                                   </li>
                                   <li><a href="6332">隨</a></li>
                                   <li><a href="6333">鄰</a></li>
                                   <li><a class="color2" href="6342">險</a>
                                   </li>
                                   <li><a class="color2" href="6347">靜</a>
                                   </li>
                                   <li><a class="color2" href="6371">諸</a>
                                   </li>
                                   <li><a class="color2" href="6379">器</a>
                                   </li>
                                   <li><a class="color2" href="6412">謁</a>
                                   </li>
                                   <li><a class="color2" href="6422">橫</a>
                                   </li>
                                   <li><a class="color2" href="6427">賴</a>
                                   </li>
                                   <li><a class="color2" href="6440">曆</a>
                                   </li>
                                   <li><a class="color2" href="6442">歷</a>
                                   </li>
                                   <li><a class="color2" href="6462">錄</a>
                                   </li>
                                   <li><a href="26375">頻</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts">
                              <h3 class="ttl_while">漢字検定対象外</h3>
                              <ul class="search_parts">
                                   <li><a href="5684">暸</a></li>
                                   <li><a href="5698">駲</a></li>
                                   <li><a href="5811">劔</a></li>
                                   <li><a href="5812">劒</a></li>
                                   <li><a href="5820">餝</a></li>
                                   <li><a href="5836">濂</a></li>
                                   <li><a href="5847">糢</a></li>
                                   <li><a href="5848">糘</a></li>
                                   <li><a href="5862">疂</a></li>
                                   <li><a href="5882">墺</a></li>
                                   <li><a href="5948">鍄</a></li>
                                   <li><a href="5973">旙</a></li>
                                   <li><a href="6064">辧</a></li>
                                   <li><a href="6089">憙</a></li>
                                   <li><a href="6142">橲</a></li>
                                   <li><a href="6193">舉</a></li>
                                   <li><a href="6211">暼</a></li>
                                   <li><a href="6220">樶</a></li>
                                   <li><a href="6221">橸</a></li>
                                   <li><a href="6321">豬</a></li>
                                   <li><a href="6544">黅</a></li>
                                   <li><a href="6545">黆</a></li>
                                   <li><a href="6549">黕</a></li>
                                   <li><a href="6577">鼒</a></li>
                                   <li><a href="6596">歖</a></li>
                                   <li><a href="6644">鼼</a></li>
                                   <li><a href="6645">鼽</a></li>
                                   <li><a href="6661">齓</a></li>
                                   <li><a href="6726">駰</a></li>
                                   <li><a href="6727">駫</a></li>
                                   <li><a href="6728">駬</a></li>
                                   <li><a href="6729">駪</a></li>
                                   <li><a href="6730">駧</a></li>
                                   <li><a href="6793">骻</a></li>
                                   <li><a href="6794">䯏</a></li>
                                   <li><a href="6795">䯒</a></li>
                                   <li><a href="6796">骹</a></li>
                                   <li><a href="6797">骺</a></li>
                                   <li><a href="6798">骴</a></li>
                                   <li><a href="6826">髺</a></li>
                                   <li><a href="6827">髹</a></li>
                                   <li><a href="6829">髵</a></li>
                                   <li><a href="6860">䦧</a></li>
                                   <li><a href="6865">鬳</a></li>
                                   <li><a href="6909">䱀</a></li>
                                   <li><a href="6910">魼</a></li>
                                   <li><a href="6911">鮔</a></li>
                                   <li><a href="6912">䱁</a></li>
                                   <li><a href="6913">鮏</a></li>
                                   <li><a href="6915">鮀</a></li>
                                   <li><a href="6916">鮐</a></li>
                                   <li><a href="6917">鮊</a></li>
                                   <li><a href="6918">鮁</a></li>
                                   <li><a href="6919">鮍</a></li>
                                   <li><a href="6920">魾</a></li>
                                   <li><a href="6922">鮅</a></li>
                                   <li><a href="6923">鮄</a></li>
                                   <li><a href="6924">鮋</a></li>
                                   <li><a href="6925">䱂</a></li>
                                   <li><a href="6926">魿</a></li>
                                   <li><a href="6937">䱈</a></li>
                                   <li><a href="6953">鮌</a></li>
                                   <li><a href="6968">䵒</a></li>
                                   <li><a href="6990">鮉</a></li>
                                   <li><a href="7057">䱇</a></li>
                                   <li><a href="7095">鴐</a></li>
                                   <li><a href="7096">鴚</a></li>
                                   <li><a href="7097">鴞</a></li>
                                   <li><a href="7098">鴝</a></li>
                                   <li><a href="7100">䳅</a></li>
                                   <li><a href="7102">鴑</a></li>
                                   <li><a href="7103">䲹</a></li>
                                   <li><a href="7104">鴘</a></li>
                                   <li><a href="7105">䳇</a></li>
                                   <li><a href="7106">鴢</a></li>
                                   <li><a href="7107">鴗</a></li>
                                   <li><a href="7165">䧿</a></li>
                                   <li><a href="7240">醎</a></li>
                                   <li><a href="7246">麅</a></li>
                                   <li><a href="7247">麆</a></li>
                                   <li><a href="7263">麬</a></li>
                                   <li><a href="7265">麮</a></li>
                                   <li><a href="7266">䴴</a></li>
                                   <li><a href="7279">䩉</a></li>
                                   <li><a href="7302">鞙</a></li>
                                   <li><a href="7303">鞕</a></li>
                                   <li><a href="7304">鞗</a></li>
                                   <li><a href="7305">鞖</a></li>
                                   <li><a href="7307">鞓</a></li>
                                   <li><a href="7308">䩠</a></li>
                                   <li><a href="7309">鞔</a></li>
                                   <li><a href="7345">韑</a></li>
                                   <li><a href="7346">韐</a></li>
                                   <li><a href="7362">韰</a></li>
                                   <li><a href="7367">韸</a></li>
                                   <li><a href="7387">頵</a></li>
                                   <li><a href="7388">頮</a></li>
                                   <li><a href="7389">頯</a></li>
                                   <li><a href="7390">頣</a></li>
                                   <li><a href="7391">䫇</a></li>
                                   <li><a href="7392">頹</a></li>
                                   <li><a href="7393">頺</a></li>
                                   <li><a href="7394">頲</a></li>
                                   <li><a href="7395">頳</a></li>
                                   <li><a href="7397">䫉</a></li>
                                   <li><a href="7435">颴</a></li>
                                   <li><a href="7472">餕</a></li>
                                   <li><a href="7473">䭀</a></li>
                                   <li><a href="7474">餗</a></li>
                                   <li><a href="7475">餖</a></li>
                                   <li><a href="7476">餑</a></li>
                                   <li><a href="7517">馟</a></li>
                                   <li><a href="7518">馞</a></li>
                                   <li><a href="7580">錰</a></li>
                                   <li><a href="7683">錒</a></li>
                                   <li><a href="7684">錥</a></li>
                                   <li><a href="7685">錁</a></li>
                                   <li><a href="7686">錷</a></li>
                                   <li><a href="7687">錧</a></li>
                                   <li><a href="7688">錡</a></li>
                                   <li><a href="7689">錤</a></li>
                                   <li><a href="7691">錈</a></li>
                                   <li><a href="7692">錕</a></li>
                                   <li><a href="7693">鋷</a></li>
                                   <li><a href="7694">錞</a></li>
                                   <li><a href="7695">鋿</a></li>
                                   <li><a href="7696">錩</a></li>
                                   <li><a href="7697">錜</a></li>
                                   <li><a href="7698">錝</a></li>
                                   <li><a href="7699">錟</a></li>
                                   <li><a href="7700">鋹</a></li>
                                   <li><a href="7701">錪</a></li>
                                   <li><a href="7702">錔</a></li>
                                   <li><a href="7703">鍀</a></li>
                                   <li><a href="7704">䤵</a></li>
                                   <li><a href="7705">錶</a></li>
                                   <li><a href="7706">錍</a></li>
                                   <li><a href="7708">錇</a></li>
                                   <li><a href="7709">錳</a></li>
                                   <li><a href="7710">鍆</a></li>
                                   <li><a href="7711">錑</a></li>
                                   <li><a href="7712">錸</a></li>
                                   <li><a href="7713">錂</a></li>
                                   <li><a href="7714">錀</a></li>
                                   <li><a href="7715">錴</a></li>
                                   <li><a href="7717">鍈</a></li>
                                   <li><a href="7736">鍩</a></li>
                                   <li><a href="7833">錽</a></li>
                                   <li><a href="7884">閽</a></li>
                                   <li><a href="7885">閶</a></li>
                                   <li><a href="7886">閿</a></li>
                                   <li><a href="7887">閺</a></li>
                                   <li><a href="7944">隦</a></li>
                                   <li><a href="7967">隩</a></li>
                                   <li><a href="7968">䧧</a></li>
                                   <li><a href="7981">鴙</a></li>
                                   <li><a href="7986">雔</a></li>
                                   <li><a href="7990">嶲</a></li>
                                   <li><a href="8007">霒</a></li>
                                   <li><a href="8009">霔</a></li>
                                   <li><a href="8033">靛</a></li>
                                   <li><a href="8071">䚡</a></li>
                                   <li><a href="8072">觱</a></li>
                                   <li><a href="8129">謊</a></li>
                                   <li><a href="8171">諴</a></li>
                                   <li><a href="8172">諼</a></li>
                                   <li><a href="8173">諟</a></li>
                                   <li><a href="8174">諰</a></li>
                                   <li><a href="8175">諿</a></li>
                                   <li><a href="8176">諝</a></li>
                                   <li><a href="8177">諶</a></li>
                                   <li><a href="8178">諵</a></li>
                                   <li><a href="8184">䜁</a></li>
                                   <li><a href="8266">豭</a></li>
                                   <li><a href="8284">貒</a></li>
                                   <li><a href="8286">貐</a></li>
                                   <li><a href="8287">䝟</a></li>
                                   <li><a href="8293">䝿</a></li>
                                   <li><a href="8315">賱</a></li>
                                   <li><a href="8316">賯</a></li>
                                   <li><a href="8318">賰</a></li>
                                   <li><a href="8319">賲</a></li>
                                   <li><a href="8320">賵</a></li>
                                   <li><a href="8328">賮</a></li>
                                   <li><a href="8335">赮</a></li>
                                   <li><a href="8344">趦</a></li>
                                   <li><a href="8345">䠖</a></li>
                                   <li><a href="8365">踸</a></li>
                                   <li><a href="8410">踽</a></li>
                                   <li><a href="8411">踳</a></li>
                                   <li><a href="8412">踷</a></li>
                                   <li><a href="8413">踱</a></li>
                                   <li><a href="8414">踹</a></li>
                                   <li><a href="8415">蹀</a></li>
                                   <li><a href="8416">踶</a></li>
                                   <li><a href="8418">蹁</a></li>
                                   <li><a href="8470">躽</a></li>
                                   <li><a href="8484">輭</a></li>
                                   <li><a href="8518">輵</a></li>
                                   <li><a href="8519">輷</a></li>
                                   <li><a href="8520">輺</a></li>
                                   <li><a href="8521">輮</a></li>
                                   <li><a href="8522">輲</a></li>
                                   <li><a href="8523">輴</a></li>
                                   <li><a href="8524">輶</a></li>
                                   <li><a href="8549">辥</a></li>
                                   <li><a href="8550">辦</a></li>
                                   <li><a href="8605">衟</a></li>
                                   <li><a href="8616">遹</a></li>
                                   <li><a href="8617">遻</a></li>
                                   <li><a href="8713">鄶</a></li>
                                   <li><a href="8714">鄴</a></li>
                                   <li><a href="8715">鄵</a></li>
                                   <li><a href="8716">鄳</a></li>
                                   <li><a href="8723">鄷</a></li>
                                   <li><a href="8749">醕</a></li>
                                   <li><a href="8754">醔</a></li>
                                   <li><a href="8755">醑</a></li>
                                   <li><a href="8756">醓</a></li>
                                   <li><a href="8764">䤈</a></li>
                                   <li><a href="8853">篛</a></li>
                                   <li><a href="8867">篔</a></li>
                                   <li><a href="8868">篙</a></li>
                                   <li><a href="8871">篘</a></li>
                                   <li><a href="8872">篨</a></li>
                                   <li><a href="8873">䈰</a></li>
                                   <li><a href="8874">篖</a></li>
                                   <li><a href="8876">篚</a></li>
                                   <li><a href="8877">篣</a></li>
                                   <li><a href="8878">篗</a></li>
                                   <li><a href="8958">糚</a></li>
                                   <li><a href="8972">糗</a></li>
                                   <li><a href="8973">糕</a></li>
                                   <li><a href="8975">糔</a></li>
                                   <li><a href="8976">糏</a></li>
                                   <li><a href="9098">縜</a></li>
                                   <li><a href="9101">縈</a></li>
                                   <li><a href="9102">縑</a></li>
                                   <li><a href="9103">縠</a></li>
                                   <li><a href="9104">縗</a></li>
                                   <li><a href="9105">縉</a></li>
                                   <li><a href="9106">縝</a></li>
                                   <li><a href="9107">縐</a></li>
                                   <li><a href="9108">縚</a></li>
                                   <li><a href="9110">縏</a></li>
                                   <li><a href="9111">縨</a></li>
                                   <li><a href="9160">罃</a></li>
                                   <li><a href="9187">罻</a></li>
                                   <li><a href="9188">罺</a></li>
                                   <li><a href="9189">䍡</a></li>
                                   <li><a href="9215">羱</a></li>
                                   <li><a href="9238">翮</a></li>
                                   <li><a href="9239">翯</a></li>
                                   <li><a href="9242">翱</a></li>
                                   <li><a href="9266">耩</a></li>
                                   <li><a href="9286">聭</a></li>
                                   <li><a href="9301">臲</a></li>
                                   <li><a href="9346">艗</a></li>
                                   <li><a href="9347">艖</a></li>
                                   <li><a href="9348">䑽</a></li>
                                   <li><a href="9539">蕿</a></li>
                                   <li><a href="9633">薎</a></li>
                                   <li><a href="9658">薆</a></li>
                                   <li><a href="9659">薁</a></li>
                                   <li><a href="9660">蕸</a></li>
                                   <li><a href="9661">薖</a></li>
                                   <li><a href="9662">薢</a></li>
                                   <li><a href="9663">薌</a></li>
                                   <li><a href="9665">蕻</a></li>
                                   <li><a href="9666">薧</a></li>
                                   <li><a href="9667">薅</a></li>
                                   <li><a href="9668">蕼</a></li>
                                   <li><a href="9669">薋</a></li>
                                   <li><a href="9670">蕺</a></li>
                                   <li><a href="9672">薥</a></li>
                                   <li><a href="9673">薓</a></li>
                                   <li><a href="9674">薝</a></li>
                                   <li><a href="9675">薘</a></li>
                                   <li><a href="9676">蕽</a></li>
                                   <li><a href="9677">薠</a></li>
                                   <li><a href="9678">薭</a></li>
                                   <li><a href="9680">蕹</a></li>
                                   <li><a href="9682">薟</a></li>
                                   <li><a href="9684">薉</a></li>
                                   <li><a href="9701">藇</a></li>
                                   <li><a href="9757">虤</a></li>
                                   <li><a href="9758">虣</a></li>
                                   <li><a href="9884">螠</a></li>
                                   <li><a href="9885">螧</a></li>
                                   <li><a href="9886">螐</a></li>
                                   <li><a href="9887">螉</a></li>
                                   <li><a href="9888">螘</a></li>
                                   <li><a href="9889">螇</a></li>
                                   <li><a href="9891">螄</a></li>
                                   <li><a href="9892">螅</a></li>
                                   <li><a href="9893">螔</a></li>
                                   <li><a href="9894">螆</a></li>
                                   <li><a href="9895">螓</a></li>
                                   <li><a href="9896">螋</a></li>
                                   <li><a href="9898">螣</a></li>
                                   <li><a href="9899">螞</a></li>
                                   <li><a href="9900">螌</a></li>
                                   <li><a href="9901">螕</a></li>
                                   <li><a href="9902">螃</a></li>
                                   <li><a href="9974">螙</a></li>
                                   <li><a href="9991">衠</a></li>
                                   <li><a href="10001">褱</a></li>
                                   <li><a href="10002">褧</a></li>
                                   <li><a href="10003">褰</a></li>
                                   <li><a href="10064">褹</a></li>
                                   <li><a href="10065">褷</a></li>
                                   <li><a href="10066">襂</a></li>
                                   <li><a href="10067">襀</a></li>
                                   <li><a href="10068">襅</a></li>
                                   <li><a href="10069">褾</a></li>
                                   <li><a href="10070">褵</a></li>
                                   <li><a href="10210">瑿</a></li>
                                   <li><a href="10219">璏</a></li>
                                   <li><a href="10220">璣</a></li>
                                   <li><a href="10221">璟</a></li>
                                   <li><a href="10222">璚</a></li>
                                   <li><a href="10223">璖</a></li>
                                   <li><a href="10224">璜</a></li>
                                   <li><a href="10225">璡</a></li>
                                   <li><a href="10226">璒</a></li>
                                   <li><a href="10228">璠</a></li>
                                   <li><a href="10229">璑</a></li>
                                   <li><a href="10230">璙</a></li>
                                   <li><a href="10235">璥</a></li>
                                   <li><a href="10283">甋</a></li>
                                   <li><a href="10284">甊</a></li>
                                   <li><a href="10331">疁</a></li>
                                   <li><a href="10335">壃</a></li>
                                   <li><a href="10419">癊</a></li>
                                   <li><a href="10420">瘱</a></li>
                                   <li><a href="10421">瘸</a></li>
                                   <li><a href="10422">瘵</a></li>
                                   <li><a href="10423">瘲</a></li>
                                   <li><a href="10424">瘮</a></li>
                                   <li><a href="10425">㿅</a></li>
                                   <li><a href="10426">瘶</a></li>
                                   <li><a href="10427">瘯</a></li>
                                   <li><a href="10428">瘹</a></li>
                                   <li><a href="10430">瘭</a></li>
                                   <li><a href="10431">瘳</a></li>
                                   <li><a href="10433">瘺</a></li>
                                   <li><a href="10475">皡</a></li>
                                   <li><a href="10480">皠</a></li>
                                   <li><a href="10481">皟</a></li>
                                   <li><a href="10495">皻</a></li>
                                   <li><a href="10508">盦</a></li>
                                   <li><a href="10510">䀇</a></li>
                                   <li><a href="10594">瞖</a></li>
                                   <li><a href="10595">瞔</a></li>
                                   <li><a href="10596">瞚</a></li>
                                   <li><a href="10597">瞕</a></li>
                                   <li><a href="10598">䁢</a></li>
                                   <li><a href="10599">瞟</a></li>
                                   <li><a href="10730">磡</a></li>
                                   <li><a href="10731">磝</a></li>
                                   <li><a href="10732">磪</a></li>
                                   <li><a href="10733">磛</a></li>
                                   <li><a href="10734">磣</a></li>
                                   <li><a href="10735">磩</a></li>
                                   <li><a href="10736">䃚</a></li>
                                   <li><a href="10737">磦</a></li>
                                   <li><a href="10739">磠</a></li>
                                   <li><a href="10740">磖</a></li>
                                   <li><a href="10741">磟</a></li>
                                   <li><a href="10778">禩</a></li>
                                   <li><a href="10864">糓</a></li>
                                   <li><a href="10875">穅</a></li>
                                   <li><a href="10876">䅽</a></li>
                                   <li><a href="10877">穇</a></li>
                                   <li><a href="10878">穄</a></li>
                                   <li><a href="10879">穌</a></li>
                                   <li><a href="10880">䅺</a></li>
                                   <li><a href="10881">穈</a></li>
                                   <li><a href="10882">穋</a></li>
                                   <li><a href="10913">窻</a></li>
                                   <li><a href="10929">窹</a></li>
                                   <li><a href="10930">窸</a></li>
                                   <li><a href="10932">窼</a></li>
                                   <li><a href="10933">窵</a></li>
                                   <li><a href="10937">䆴</a></li>
                                   <li><a href="10948">竱</a></li>
                                   <li><a href="10999">憨</a></li>
                                   <li><a href="11001">憗</a></li>
                                   <li><a href="11002">憠</a></li>
                                   <li><a href="11003">憝</a></li>
                                   <li><a href="11006">憋</a></li>
                                   <li><a href="11008">憥</a></li>
                                   <li><a href="11009">憼</a></li>
                                   <li><a href="11011">㦔</a></li>
                                   <li><a href="11016">懙</a></li>
                                   <li><a href="11185">懅</a></li>
                                   <li><a href="11186">憿</a></li>
                                   <li><a href="11187">懁</a></li>
                                   <li><a href="11188">懏</a></li>
                                   <li><a href="11189">憴</a></li>
                                   <li><a href="11190">憸</a></li>
                                   <li><a href="11191">憷</a></li>
                                   <li><a href="11192">懎</a></li>
                                   <li><a href="11194">憹</a></li>
                                   <li><a href="11195">懔</a></li>
                                   <li><a href="11196">懀</a></li>
                                   <li><a href="11198">㦜</a></li>
                                   <li><a href="11204">懞</a></li>
                                   <li><a href="11232">戱</a></li>
                                   <li><a href="11260">擎</a></li>
                                   <li><a href="11372">擑</a></li>
                                   <li><a href="11420">擕</a></li>
                                   <li><a href="11489">擄</a></li>
                                   <li><a href="11490">撛</a></li>
                                   <li><a href="11492">擐</a></li>
                                   <li><a href="11493">擀</a></li>
                                   <li><a href="11494">撽</a></li>
                                   <li><a href="11496">撿</a></li>
                                   <li><a href="11497">擌</a></li>
                                   <li><a href="11498">擉</a></li>
                                   <li><a href="11500">撾</a></li>
                                   <li><a href="11501">擋</a></li>
                                   <li><a href="11502">擗</a></li>
                                   <li><a href="11504">擭</a></li>
                                   <li><a href="11568">敽</a></li>
                                   <li><a href="11569">敿</a></li>
                                   <li><a href="11677">㬜</a></li>
                                   <li><a href="11718">曀</a></li>
                                   <li><a href="11719">暿</a></li>
                                   <li><a href="11720">暻</a></li>
                                   <li><a href="11721">曂</a></li>
                                   <li><a href="11722">曌</a></li>
                                   <li><a href="11724">曃</a></li>
                                   <li><a href="11725">㬚</a></li>
                                   <li><a href="11726">曈</a></li>
                                   <li><a href="11727">曊</a></li>
                                   <li><a href="11732">曔</a></li>
                                   <li><a href="11751">㬱</a></li>
                                   <li><a href="11852">㬿</a></li>
                                   <li><a href="11890">膐</a></li>
                                   <li><a href="11892">䐴</a></li>
                                   <li><a href="11902">膮</a></li>
                                   <li><a href="11903">膴</a></li>
                                   <li><a href="11904">膲</a></li>
                                   <li><a href="11905">膬</a></li>
                                   <li><a href="11907">朣</a></li>
                                   <li><a href="11919">膹</a></li>
                                   <li><a href="12151">㯐</a></li>
                                   <li><a href="12170">槪</a></li>
                                   <li><a href="12171">槩</a></li>
                                   <li><a href="12190">樼</a></li>
                                   <li><a href="12196">橊</a></li>
                                   <li><a href="12204">橰</a></li>
                                   <li><a href="12229">橒</a></li>
                                   <li><a href="12230">樾</a></li>
                                   <li><a href="12231">橌</a></li>
                                   <li><a href="12232">橺</a></li>
                                   <li><a href="12233">樻</a></li>
                                   <li><a href="12235">橛</a></li>
                                   <li><a href="12236">橜</a></li>
                                   <li><a href="12237">樲</a></li>
                                   <li><a href="12238">樴</a></li>
                                   <li><a href="12239">樳</a></li>
                                   <li><a href="12240">橤</a></li>
                                   <li><a href="12241">樨</a></li>
                                   <li><a href="12242">樿</a></li>
                                   <li><a href="12243">橪</a></li>
                                   <li><a href="12244">橧</a></li>
                                   <li><a href="12245">橐</a></li>
                                   <li><a href="12247">橝</a></li>
                                   <li><a href="12248">橱</a></li>
                                   <li><a href="12251">橁</a></li>
                                   <li><a href="12253">橖</a></li>
                                   <li><a href="12254">橕</a></li>
                                   <li><a href="12255">橳</a></li>
                                   <li><a href="12256">橎</a></li>
                                   <li><a href="12257">橆</a></li>
                                   <li><a href="12258">橅</a></li>
                                   <li><a href="12261">橑</a></li>
                                   <li><a href="12269">㯳</a></li>
                                   <li><a href="12411">儞</a></li>
                                   <li><a href="12645">儑</a></li>
                                   <li><a href="12646">儗</a></li>
                                   <li><a href="12647">儝</a></li>
                                   <li><a href="12648">儙</a></li>
                                   <li><a href="12650">儓</a></li>
                                   <li><a href="12653">儜</a></li>
                                   <li><a href="12654">儐</a></li>
                                   <li><a href="12792">劓</a></li>
                                   <li><a href="12866">歘</a></li>
                                   <li><a href="12875">歕</a></li>
                                   <li><a href="12920">殨</a></li>
                                   <li><a href="12947">匔</a></li>
                                   <li><a href="12956">毇</a></li>
                                   <li><a href="12958">毈</a></li>
                                   <li><a href="12993">匴</a></li>
                                   <li><a href="13107">儫</a></li>
                                   <li><a href="13118">兣</a></li>
                                   <li><a href="13530">噒</a></li>
                                   <li><a href="13536">噙</a></li>
                                   <li><a href="13538">噞</a></li>
                                   <li><a href="13539">噟</a></li>
                                   <li><a href="13540">噡</a></li>
                                   <li><a href="13541">噢</a></li>
                                   <li><a href="13542">噣</a></li>
                                   <li><a href="13543">噥</a></li>
                                   <li><a href="13545">噩</a></li>
                                   <li><a href="13546">噭</a></li>
                                   <li><a href="13547">噮</a></li>
                                   <li><a href="13548">噰</a></li>
                                   <li><a href="13549">噲</a></li>
                                   <li><a href="13550">噳</a></li>
                                   <li><a href="13551">噵</a></li>
                                   <li><a href="13552">噷</a></li>
                                   <li><a href="13553">噹</a></li>
                                   <li><a href="13870">墼</a></li>
                                   <li><a href="13871">墽</a></li>
                                   <li><a href="13872">墿</a></li>
                                   <li><a href="13873">壀</a></li>
                                   <li><a href="13874">壂</a></li>
                                   <li><a href="13875">壆</a></li>
                                   <li><a href="13876">壈</a></li>
                                   <li><a href="13877">壉</a></li>
                                   <li><a href="13893">夁</a></li>
                                   <li><a href="13934">奯</a></li>
                                   <li><a href="14207">嫾</a></li>
                                   <li><a href="14221">嬐</a></li>
                                   <li><a href="14222">嬑</a></li>
                                   <li><a href="14223">嬒</a></li>
                                   <li><a href="14224">嬓</a></li>
                                   <li><a href="14225">嬔</a></li>
                                   <li><a href="14226">嬕</a></li>
                                   <li><a href="14227">嬗</a></li>
                                   <li><a href="14228">嬘</a></li>
                                   <li><a href="14229">嬙</a></li>
                                   <li><a href="14230">嬚</a></li>
                                   <li><a href="14231">嬛</a></li>
                                   <li><a href="14232">嬜</a></li>
                                   <li><a href="14233">嬝</a></li>
                                   <li><a href="14235">嬟</a></li>
                                   <li><a href="14236">嬠</a></li>
                                   <li><a href="14237">嬡</a></li>
                                   <li><a href="14243">嬨</a></li>
                                   <li><a href="14244">嬩</a></li>
                                   <li><a href="14250">嬳</a></li>
                                   <li><a href="14281">孹</a></li>
                                   <li><a href="14325">寯</a></li>
                                   <li><a href="14568">嶦</a></li>
                                   <li><a href="14569">嶧</a></li>
                                   <li><a href="14570">嶨</a></li>
                                   <li><a href="14571">嶩</a></li>
                                   <li><a href="14572">嶪</a></li>
                                   <li><a href="14573">嶫</a></li>
                                   <li><a href="14574">嶭</a></li>
                                   <li><a href="14575">嶯</a></li>
                                   <li><a href="14576">嶰</a></li>
                                   <li><a href="14578">嶳</a></li>
                                   <li><a href="14579">嶴</a></li>
                                   <li><a href="14580">嶵</a></li>
                                   <li><a href="14657">幦</a></li>
                                   <li><a href="14658">幧</a></li>
                                   <li><a href="14659">幨</a></li>
                                   <li><a href="14711">廥</a></li>
                                   <li><a href="14712">廦</a></li>
                                   <li><a href="14713">廧</a></li>
                                   <li><a href="14714">廪</a></li>
                                   <li><a href="14749">彇</a></li>
                                   <li><a href="14751">彋</a></li>
                                   <li><a href="14757">彛</a></li>
                                   <li><a href="14791">徻</a></li>
                                   <li><a href="14878">憌</a></li>
                                   <li><a href="14885">憻</a></li>
                                   <li><a href="14887">懄</a></li>
                                   <li><a href="14888">懓</a></li>
                                   <li><a href="15020">撆</a></li>
                                   <li><a href="15021">撉</a></li>
                                   <li><a href="15031">擃</a></li>
                                   <li><a href="15033">擈</a></li>
                                   <li><a href="15034">擓</a></li>
                                   <li><a href="15036">擙</a></li>
                                   <li><a href="15054">攳</a></li>
                                   <li><a href="15069">敼</a></li>
                                   <li><a href="15070">敾</a></li>
                                   <li><a href="15075">斢</a></li>
                                   <li><a href="15084">旘</a></li>
                                   <li><a href="15117">暺</a></li>
                                   <li><a href="15119">曋</a></li>
                                   <li><a href="15120">曍</a></li>
                                   <li><a href="15135">朆</a></li>
                                   <li><a href="15140">朤</a></li>
                                   <li><a href="15258">槬</a></li>
                                   <li><a href="15273">樷</a></li>
                                   <li><a href="15274">橀</a></li>
                                   <li><a href="15275">橂</a></li>
                                   <li><a href="15276">橃</a></li>
                                   <li><a href="15277">橍</a></li>
                                   <li><a href="15278">橏</a></li>
                                   <li><a href="15279">橔</a></li>
                                   <li><a href="15281">橞</a></li>
                                   <li><a href="15282">橠</a></li>
                                   <li><a href="15283">橣</a></li>
                                   <li><a href="15284">橥</a></li>
                                   <li><a href="15285">橨</a></li>
                                   <li><a href="15286">橩</a></li>
                                   <li><a href="15288">橭</a></li>
                                   <li><a href="15289">橮</a></li>
                                   <li><a href="15290">橯</a></li>
                                   <li><a href="15302">檧</a></li>
                                   <li><a href="15366">殧</a></li>
                                   <li><a href="15385">氃</a></li>
                                   <li><a href="15386">氄</a></li>
                                   <li><a href="15387">氅</a></li>
                                   <li><a href="15388">氆</a></li>
                                   <li><a href="15837">潚</a></li>
                                   <li><a href="15839">潞</a></li>
                                   <li><a href="15861">澃</a></li>
                                   <li><a href="15876">澞</a></li>
                                   <li><a href="15877">澟</a></li>
                                   <li><a href="15878">澢</a></li>
                                   <li><a href="15879">澥</a></li>
                                   <li><a href="15880">澦</a></li>
                                   <li><a href="15881">澧</a></li>
                                   <li><a href="15882">澨</a></li>
                                   <li><a href="15884">澬</a></li>
                                   <li><a href="15885">澭</a></li>
                                   <li><a href="15886">澮</a></li>
                                   <li><a href="15887">澯</a></li>
                                   <li><a href="15888">澰</a></li>
                                   <li><a href="15889">澲</a></li>
                                   <li><a href="15890">澴</a></li>
                                   <li><a href="15891">澵</a></li>
                                   <li><a href="15892">澶</a></li>
                                   <li><a href="15893">澷</a></li>
                                   <li><a href="15894">澸</a></li>
                                   <li><a href="15895">澺</a></li>
                                   <li><a href="15896">澻</a></li>
                                   <li><a href="15897">澼</a></li>
                                   <li><a href="15898">澽</a></li>
                                   <li><a href="15899">澿</a></li>
                                   <li><a href="15900">濅</a></li>
                                   <li><a href="15901">濇</a></li>
                                   <li><a href="15902">濉</a></li>
                                   <li><a href="15903">濊</a></li>
                                   <li><a href="15904">濋</a></li>
                                   <li><a href="15907">濎</a></li>
                                   <li><a href="15908">濏</a></li>
                                   <li><a href="15909">濐</a></li>
                                   <li><a href="15911">濗</a></li>
                                   <li><a href="15922">濭</a></li>
                                   <li><a href="16191">熞</a></li>
                                   <li><a href="16206">熶</a></li>
                                   <li><a href="16207">熷</a></li>
                                   <li><a href="16209">熺</a></li>
                                   <li><a href="16210">熻</a></li>
                                   <li><a href="16213">燀</a></li>
                                   <li><a href="16214">燄</a></li>
                                   <li><a href="16215">燅</a></li>
                                   <li><a href="16216">燆</a></li>
                                   <li><a href="16217">燇</a></li>
                                   <li><a href="16218">燊</a></li>
                                   <li><a href="16219">燋</a></li>
                                   <li><a href="16220">燍</a></li>
                                   <li><a href="16221">燏</a></li>
                                   <li><a href="16222">燑</a></li>
                                   <li><a href="16223">燖</a></li>
                                   <li><a href="16224">燘</a></li>
                                   <li><a href="16225">燙</a></li>
                                   <li><a href="16226">燚</a></li>
                                   <li><a href="16228">燜</a></li>
                                   <li><a href="16232">燤</a></li>
                                   <li><a href="16235">燪</a></li>
                                   <li><a href="16333">犜</a></li>
                                   <li><a href="16334">犝</a></li>
                                   <li><a href="16335">犞</a></li>
                                   <li><a href="16442">獘</a></li>
                                   <li><a href="16446">獜</a></li>
                                   <li><a href="16453">獥</a></li>
                                   <li><a href="16454">獧</a></li>
                                   <li><a href="16455">獩</a></li>
                                   <li><a href="16456">獫</a></li>
                                   <li><a href="16457">獬</a></li>
                                   <li><a href="16461">獴</a></li>
                                   <li><a href="16551">璔</a></li>
                                   <li><a href="16552">璕</a></li>
                                   <li><a href="16554">璝</a></li>
                                   <li><a href="16594">疀</a></li>
                                   <li><a href="16610">瘬</a></li>
                                   <li><a href="16611">瘷</a></li>
                                   <li><a href="16612">瘽</a></li>
                                   <li><a href="16682">瞗</a></li>
                                   <li><a href="16683">瞘</a></li>
                                   <li><a href="16685">瞛</a></li>
                                   <li><a href="16686">瞜</a></li>
                                   <li><a href="16687">瞝</a></li>
                                   <li><a href="16688">瞡</a></li>
                                   <li><a href="16760">磜</a></li>
                                   <li><a href="16761">磞</a></li>
                                   <li><a href="16762">磢</a></li>
                                   <li><a href="16763">磥</a></li>
                                   <li><a href="16764">磫</a></li>
                                   <li><a href="16765">磭</a></li>
                                   <li><a href="16800">禤</a></li>
                                   <li><a href="16801">禥</a></li>
                                   <li><a href="16839">穓</a></li>
                                   <li><a href="16857">窱</a></li>
                                   <li><a href="16859">窷</a></li>
                                   <li><a href="16921">篕</a></li>
                                   <li><a href="16922">篜</a></li>
                                   <li><a href="16923">篞</a></li>
                                   <li><a href="16924">篟</a></li>
                                   <li><a href="16925">篢</a></li>
                                   <li><a href="16926">篧</a></li>
                                   <li><a href="16927">篫</a></li>
                                   <li><a href="16928">篬</a></li>
                                   <li><a href="16969">糐</a></li>
                                   <li><a href="16970">糑</a></li>
                                   <li><a href="17023">縍</a></li>
                                   <li><a href="17024">縎</a></li>
                                   <li><a href="17025">縓</a></li>
                                   <li><a href="17026">縔</a></li>
                                   <li><a href="17027">縖</a></li>
                                   <li><a href="17028">縘</a></li>
                                   <li><a href="17030">縤</a></li>
                                   <li><a href="17031">縥</a></li>
                                   <li><a href="17034">縸</a></li>
                                   <li><a href="17064">罼</a></li>
                                   <li><a href="17101">耪</a></li>
                                   <li><a href="17121">聬</a></li>
                                   <li><a href="17122">聮</a></li>
                                   <li><a href="17172">膪</a></li>
                                   <li><a href="17173">膫</a></li>
                                   <li><a href="17174">膭</a></li>
                                   <li><a href="17175">膯</a></li>
                                   <li><a href="17176">膱</a></li>
                                   <li><a href="17177">膷</a></li>
                                   <li><a href="17352">蕶</a></li>
                                   <li><a href="17353">薂</a></li>
                                   <li><a href="17354">薃</a></li>
                                   <li><a href="17355">薍</a></li>
                                   <li><a href="17356">薒</a></li>
                                   <li><a href="17357">薚</a></li>
                                   <li><a href="17358">薞</a></li>
                                   <li><a href="17359">薡</a></li>
                                   <li><a href="17360">薣</a></li>
                                   <li><a href="17409">虥</a></li>
                                   <li><a href="17410">虦</a></li>
                                   <li><a href="17475">螊</a></li>
                                   <li><a href="17476">螎</a></li>
                                   <li><a href="17477">螏</a></li>
                                   <li><a href="17478">螑</a></li>
                                   <li><a href="17479">螒</a></li>
                                   <li><a href="17480">螖</a></li>
                                   <li><a href="17481">螚</a></li>
                                   <li><a href="17482">螛</a></li>
                                   <li><a href="17483">螜</a></li>
                                   <li><a href="17484">螝</a></li>
                                   <li><a href="17485">螡</a></li>
                                   <li><a href="17486">螤</a></li>
                                   <li><a href="17487">螥</a></li>
                                   <li><a href="17581">褢</a></li>
                                   <li><a href="17584">褩</a></li>
                                   <li><a href="17586">褭</a></li>
                                   <li><a href="17587">褮</a></li>
                                   <li><a href="17588">褼</a></li>
                                   <li><a href="17589">褿</a></li>
                                   <li><a href="17610">覨</a></li>
                                   <li><a href="17626">觰</a></li>
                                   <li><a href="17676">諣</a></li>
                                   <li><a href="17677">諥</a></li>
                                   <li><a href="17678">諨</a></li>
                                   <li><a href="17679">諩</a></li>
                                   <li><a href="17680">諪</a></li>
                                   <li><a href="17681">諬</a></li>
                                   <li><a href="17682">諯</a></li>
                                   <li><a href="17683">諲</a></li>
                                   <li><a href="17684">諹</a></li>
                                   <li><a href="17685">諻</a></li>
                                   <li><a href="17686">諽</a></li>
                                   <li><a href="17742">豱</a></li>
                                   <li><a href="17751">貑</a></li>
                                   <li><a href="17768">賳</a></li>
                                   <li><a href="17807">趥</a></li>
                                   <li><a href="17808">趧</a></li>
                                   <li><a href="17839">踫</a></li>
                                   <li><a href="17840">踲</a></li>
                                   <li><a href="17841">踺</a></li>
                                   <li><a href="17842">踻</a></li>
                                   <li><a href="17843">踼</a></li>
                                   <li><a href="17844">踾</a></li>
                                   <li><a href="17845">踿</a></li>
                                   <li><a href="17846">蹅</a></li>
                                   <li><a href="17901">輰</a></li>
                                   <li><a href="17902">輱</a></li>
                                   <li><a href="17903">輼</a></li>
                                   <li><a href="17930">邆</a></li>
                                   <li><a href="17957">郺</a></li>
                                   <li><a href="17969">鄸</a></li>
                                   <li><a href="17986">醏</a></li>
                                   <li><a href="17987">醖</a></li>
                                   <li><a href="17989">醛</a></li>
                                   <li><a href="18055">鋽</a></li>
                                   <li><a href="18056">鋾</a></li>
                                   <li><a href="18057">錃</a></li>
                                   <li><a href="18058">錅</a></li>
                                   <li><a href="18059">錉</a></li>
                                   <li><a href="18060">錊</a></li>
                                   <li><a href="18061">錋</a></li>
                                   <li><a href="18062">錌</a></li>
                                   <li><a href="18063">錎</a></li>
                                   <li><a href="18064">錓</a></li>
                                   <li><a href="18065">錖</a></li>
                                   <li><a href="18066">錗</a></li>
                                   <li><a href="18067">錛</a></li>
                                   <li><a href="18068">錭</a></li>
                                   <li><a href="18069">錱</a></li>
                                   <li><a href="18070">錹</a></li>
                                   <li><a href="18078">鍣</a></li>
                                   <li><a href="18174">閵</a></li>
                                   <li><a href="18176">閸</a></li>
                                   <li><a href="18177">闁</a></li>
                                   <li><a href="18226">霋</a></li>
                                   <li><a href="18227">霌</a></li>
                                   <li><a href="18228">霐</a></li>
                                   <li><a href="18229">霕</a></li>
                                   <li><a href="18230">霗</a></li>
                                   <li><a href="18264">韏</a></li>
                                   <li><a href="18282">頱</a></li>
                                   <li><a href="18283">頶</a></li>
                                   <li><a href="18302">颵</a></li>
                                   <li><a href="18325">馠</a></li>
                                   <li><a href="18345">駡</a></li>
                                   <li><a href="18346">駣</a></li>
                                   <li><a href="18347">駤</a></li>
                                   <li><a href="18348">駥</a></li>
                                   <li><a href="18349">駦</a></li>
                                   <li><a href="18350">駨</a></li>
                                   <li><a href="18351">駩</a></li>
                                   <li><a href="18352">駯</a></li>
                                   <li><a href="18399">髶</a></li>
                                   <li><a href="18400">髸</a></li>
                                   <li><a href="18423">魺</a></li>
                                   <li><a href="18424">魻</a></li>
                                   <li><a href="18425">魽</a></li>
                                   <li><a href="18426">鮂</a></li>
                                   <li><a href="18427">鮈</a></li>
                                   <li><a href="18428">鮕</a></li>
                                   <li><a href="18474">鴊</a></li>
                                   <li><a href="18477">鴏</a></li>
                                   <li><a href="18478">鴓</a></li>
                                   <li><a href="18480">鴖</a></li>
                                   <li><a href="18481">鴠</a></li>
                                   <li><a href="18482">鴡</a></li>
                                   <li><a href="18483">鴤</a></li>
                                   <li><a href="18484">鴧</a></li>
                                   <li><a href="18485">鴩</a></li>
                                   <li><a href="18488">鴱</a></li>
                                   <li><a href="18562">鹷</a></li>
                                   <li><a href="18577">黖</a></li>
                                   <li><a href="18578">黗</a></li>
                                   <li><a href="18582">黺</a></li>
                                   <li><a href="18618">龬</a></li>
                                   <li><a href="18636">﨨</a></li>
                                   <li><a href="18669">㐥</a></li>
                                   <li><a href="18727">㒊</a></li>
                                   <li><a href="18736">㒙</a></li>
                                   <li><a href="18737">㒚</a></li>
                                   <li><a href="18738">㒛</a></li>
                                   <li><a href="18740">㒝</a></li>
                                   <li><a href="18752">㒯</a></li>
                                   <li><a href="18807">㔆</a></li>
                                   <li><a href="18811">㔌</a></li>
                                   <li><a href="18812">㔍</a></li>
                                   <li><a href="19001">㗼</a></li>
                                   <li><a href="19003">㗾</a></li>
                                   <li><a href="19004">㗿</a></li>
                                   <li><a href="19005">㘀</a></li>
                                   <li><a href="19006">㘁</a></li>
                                   <li><a href="19007">㘂</a></li>
                                   <li><a href="19085">㙰</a></li>
                                   <li><a href="19086">㙱</a></li>
                                   <li><a href="19087">㙲</a></li>
                                   <li><a href="19088">㙳</a></li>
                                   <li><a href="19089">㙴</a></li>
                                   <li><a href="19090">㙵</a></li>
                                   <li><a href="19091">㙶</a></li>
                                   <li><a href="19094">㙹</a></li>
                                   <li><a href="19123">㚡</a></li>
                                   <li><a href="19233">㜩</a></li>
                                   <li><a href="19234">㜪</a></li>
                                   <li><a href="19235">㜫</a></li>
                                   <li><a href="19259">㝇</a></li>
                                   <li><a href="19428">㠑</a></li>
                                   <li><a href="19429">㠒</a></li>
                                   <li><a href="19430">㠓</a></li>
                                   <li><a href="19431">㠔</a></li>
                                   <li><a href="19432">㠕</a></li>
                                   <li><a href="19433">㠖</a></li>
                                   <li><a href="19434">㠘</a></li>
                                   <li><a href="19437">㠛</a></li>
                                   <li><a href="19495">㡢</a></li>
                                   <li><a href="19496">㡣</a></li>
                                   <li><a href="19505">㡮</a></li>
                                   <li><a href="19543">㢙</a></li>
                                   <li><a href="19544">㢚</a></li>
                                   <li><a href="19545">㢛</a></li>
                                   <li><a href="19546">㢜</a></li>
                                   <li><a href="19578">㣈</a></li>
                                   <li><a href="19588">㣓</a></li>
                                   <li><a href="19611">㣵</a></li>
                                   <li><a href="19612">㣶</a></li>
                                   <li><a href="19720">㦌</a></li>
                                   <li><a href="19729">㦗</a></li>
                                   <li><a href="19855">㩋</a></li>
                                   <li><a href="19857">㩒</a></li>
                                   <li><a href="19859">㩔</a></li>
                                   <li><a href="19860">㩕</a></li>
                                   <li><a href="19861">㩖</a></li>
                                   <li><a href="19862">㩗</a></li>
                                   <li><a href="19863">㩙</a></li>
                                   <li><a href="19864">㩚</a></li>
                                   <li><a href="19925">㪧</a></li>
                                   <li><a href="19926">㪨</a></li>
                                   <li><a href="20001">㬗</a></li>
                                   <li><a href="20003">㬙</a></li>
                                   <li><a href="20004">㬛</a></li>
                                   <li><a href="20005">㬞</a></li>
                                   <li><a href="20120">㯓</a></li>
                                   <li><a href="20121">㯔</a></li>
                                   <li><a href="20122">㯕</a></li>
                                   <li><a href="20123">㯖</a></li>
                                   <li><a href="20124">㯗</a></li>
                                   <li><a href="20125">㯘</a></li>
                                   <li><a href="20126">㯙</a></li>
                                   <li><a href="20127">㯚</a></li>
                                   <li><a href="20128">㯛</a></li>
                                   <li><a href="20131">㯟</a></li>
                                   <li><a href="20133">㯡</a></li>
                                   <li><a href="20134">㯢</a></li>
                                   <li><a href="20136">㯤</a></li>
                                   <li><a href="20137">㯥</a></li>
                                   <li><a href="20138">㯦</a></li>
                                   <li><a href="20208">㱄</a></li>
                                   <li><a href="20209">㱅</a></li>
                                   <li><a href="20246">㱵</a></li>
                                   <li><a href="20247">㱶</a></li>
                                   <li><a href="20260">㲆</a></li>
                                   <li><a href="20261">㲇</a></li>
                                   <li><a href="20262">㲈</a></li>
                                   <li><a href="20290">㲪</a></li>
                                   <li><a href="20291">㲫</a></li>
                                   <li><a href="20292">㲬</a></li>
                                   <li><a href="20293">㲭</a></li>
                                   <li><a href="20300">㲷</a></li>
                                   <li><a href="20419">㵗</a></li>
                                   <li><a href="20420">㵘</a></li>
                                   <li><a href="20421">㵝</a></li>
                                   <li><a href="20422">㵞</a></li>
                                   <li><a href="20423">㵟</a></li>
                                   <li><a href="20424">㵠</a></li>
                                   <li><a href="20425">㵡</a></li>
                                   <li><a href="20426">㵢</a></li>
                                   <li><a href="20427">㵣</a></li>
                                   <li><a href="20428">㵤</a></li>
                                   <li><a href="20429">㵥</a></li>
                                   <li><a href="20430">㵦</a></li>
                                   <li><a href="20433">㵪</a></li>
                                   <li><a href="20434">㵫</a></li>
                                   <li><a href="20435">㵬</a></li>
                                   <li><a href="20436">㵭</a></li>
                                   <li><a href="20439">㵰</a></li>
                                   <li><a href="20448">㵹</a></li>
                                   <li><a href="20530">㷳</a></li>
                                   <li><a href="20531">㷴</a></li>
                                   <li><a href="20532">㷵</a></li>
                                   <li><a href="20533">㷶</a></li>
                                   <li><a href="20534">㷷</a></li>
                                   <li><a href="20535">㷸</a></li>
                                   <li><a href="20537">㷻</a></li>
                                   <li><a href="20538">㷼</a></li>
                                   <li><a href="20613">㹑</a></li>
                                   <li><a href="20614">㹒</a></li>
                                   <li><a href="20615">㹓</a></li>
                                   <li><a href="20679">㺛</a></li>
                                   <li><a href="20680">㺜</a></li>
                                   <li><a href="20682">㺞</a></li>
                                   <li><a href="20731">㻨</a></li>
                                   <li><a href="20739">㻵</a></li>
                                   <li><a href="20740">㻶</a></li>
                                   <li><a href="20741">㻷</a></li>
                                   <li><a href="20759">㼓</a></li>
                                   <li><a href="20795">㼻</a></li>
                                   <li><a href="20796">㼼</a></li>
                                   <li><a href="20797">㼽</a></li>
                                   <li><a href="20798">㼾</a></li>
                                   <li><a href="20830">㽩</a></li>
                                   <li><a href="20902">㿃</a></li>
                                   <li><a href="20903">㿄</a></li>
                                   <li><a href="20904">㿆</a></li>
                                   <li><a href="20905">㿇</a></li>
                                   <li><a href="20906">㿈</a></li>
                                   <li><a href="20926">㿦</a></li>
                                   <li><a href="20943">㿸</a></li>
                                   <li><a href="21028">䁣</a></li>
                                   <li><a href="21029">䁤</a></li>
                                   <li><a href="21031">䁦</a></li>
                                   <li><a href="21032">䁧</a></li>
                                   <li><a href="21033">䁨</a></li>
                                   <li><a href="21034">䁩</a></li>
                                   <li><a href="21124">䃙</a></li>
                                   <li><a href="21125">䃛</a></li>
                                   <li><a href="21126">䃜</a></li>
                                   <li><a href="21127">䃝</a></li>
                                   <li><a href="21128">䃞</a></li>
                                   <li><a href="21168">䄚</a></li>
                                   <li><a href="21169">䄛</a></li>
                                   <li><a href="21170">䄜</a></li>
                                   <li><a href="21171">䄝</a></li>
                                   <li><a href="21247">䅹</a></li>
                                   <li><a href="21248">䅻</a></li>
                                   <li><a href="21249">䅼</a></li>
                                   <li><a href="21291">䆯</a></li>
                                   <li><a href="21292">䆰</a></li>
                                   <li><a href="21293">䆱</a></li>
                                   <li><a href="21294">䆲</a></li>
                                   <li><a href="21398">䈫</a></li>
                                   <li><a href="21399">䈬</a></li>
                                   <li><a href="21400">䈭</a></li>
                                   <li><a href="21401">䈮</a></li>
                                   <li><a href="21402">䈯</a></li>
                                   <li><a href="21403">䈱</a></li>
                                   <li><a href="21404">䈲</a></li>
                                   <li><a href="21405">䈳</a></li>
                                   <li><a href="21406">䈴</a></li>
                                   <li><a href="21407">䈵</a></li>
                                   <li><a href="21408">䈶</a></li>
                                   <li><a href="21409">䈷</a></li>
                                   <li><a href="21502">䊚</a></li>
                                   <li><a href="21598">䌅</a></li>
                                   <li><a href="21599">䌆</a></li>
                                   <li><a href="21600">䌇</a></li>
                                   <li><a href="21601">䌈</a></li>
                                   <li><a href="21602">䌉</a></li>
                                   <li><a href="21652">䍍</a></li>
                                   <li><a href="21687">䍷</a></li>
                                   <li><a href="21688">䍸</a></li>
                                   <li><a href="21689">䍹</a></li>
                                   <li><a href="21715">䎔</a></li>
                                   <li><a href="21716">䎕</a></li>
                                   <li><a href="21751">䏁</a></li>
                                   <li><a href="21752">䏂</a></li>
                                   <li><a href="21753">䏃</a></li>
                                   <li><a href="21826">䐡</a></li>
                                   <li><a href="21842">䐵</a></li>
                                   <li><a href="21844">䐷</a></li>
                                   <li><a href="21845">䐸</a></li>
                                   <li><a href="21847">䐺</a></li>
                                   <li><a href="21848">䐻</a></li>
                                   <li><a href="21849">䐼</a></li>
                                   <li><a href="21871">䑘</a></li>
                                   <li><a href="21895">䑼</a></li>
                                   <li><a href="21908">䒌</a></li>
                                   <li><a href="21909">䒍</a></li>
                                   <li><a href="21910">䒎</a></li>
                                   <li><a href="22039">䕅</a></li>
                                   <li><a href="22040">䕆</a></li>
                                   <li><a href="22041">䕇</a></li>
                                   <li><a href="22042">䕈</a></li>
                                   <li><a href="22043">䕉</a></li>
                                   <li><a href="22044">䕊</a></li>
                                   <li><a href="22045">䕋</a></li>
                                   <li><a href="22046">䕍</a></li>
                                   <li><a href="22047">䕎</a></li>
                                   <li><a href="22048">䕏</a></li>
                                   <li><a href="22049">䕑</a></li>
                                   <li><a href="22103">䖘</a></li>
                                   <li><a href="22151">䗘</a></li>
                                   <li><a href="22152">䗙</a></li>
                                   <li><a href="22153">䗚</a></li>
                                   <li><a href="22155">䗜</a></li>
                                   <li><a href="22156">䗝</a></li>
                                   <li><a href="22157">䗞</a></li>
                                   <li><a href="22197">䘘</a></li>
                                   <li><a href="22243">䙔</a></li>
                                   <li><a href="22244">䙕</a></li>
                                   <li><a href="22245">䙖</a></li>
                                   <li><a href="22246">䙗</a></li>
                                   <li><a href="22247">䙘</a></li>
                                   <li><a href="22283">䚇</a></li>
                                   <li><a href="22284">䚈</a></li>
                                   <li><a href="22285">䚉</a></li>
                                   <li><a href="22307">䚢</a></li>
                                   <li><a href="22308">䚣</a></li>
                                   <li><a href="22383">䛹</a></li>
                                   <li><a href="22384">䛺</a></li>
                                   <li><a href="22385">䛻</a></li>
                                   <li><a href="22386">䛼</a></li>
                                   <li><a href="22387">䛽</a></li>
                                   <li><a href="22429">䜻</a></li>
                                   <li><a href="22430">䜼</a></li>
                                   <li><a href="22431">䜽</a></li>
                                   <li><a href="22432">䜾</a></li>
                                   <li><a href="22443">䝍</a></li>
                                   <li><a href="22444">䝎</a></li>
                                   <li><a href="22484">䞀</a></li>
                                   <li><a href="22485">䞁</a></li>
                                   <li><a href="22486">䞂</a></li>
                                   <li><a href="22488">䞄</a></li>
                                   <li><a href="22529">䞹</a></li>
                                   <li><a href="22530">䞺</a></li>
                                   <li><a href="22531">䞻</a></li>
                                   <li><a href="22532">䞼</a></li>
                                   <li><a href="22603">䠍</a></li>
                                   <li><a href="22604">䠎</a></li>
                                   <li><a href="22605">䠏</a></li>
                                   <li><a href="22606">䠐</a></li>
                                   <li><a href="22607">䠑</a></li>
                                   <li><a href="22608">䠒</a></li>
                                   <li><a href="22609">䠓</a></li>
                                   <li><a href="22610">䠔</a></li>
                                   <li><a href="22617">䠜</a></li>
                                   <li><a href="22643">䠼</a></li>
                                   <li><a href="22674">䡠</a></li>
                                   <li><a href="22675">䡡</a></li>
                                   <li><a href="22676">䡢</a></li>
                                   <li><a href="22677">䡣</a></li>
                                   <li><a href="22678">䡤</a></li>
                                   <li><a href="22728">䢪</a></li>
                                   <li><a href="22772">䣡</a></li>
                                   <li><a href="22801">䤁</a></li>
                                   <li><a href="22802">䤂</a></li>
                                   <li><a href="22803">䤃</a></li>
                                   <li><a href="22804">䤄</a></li>
                                   <li><a href="22805">䤅</a></li>
                                   <li><a href="22806">䤆</a></li>
                                   <li><a href="22807">䤇</a></li>
                                   <li><a href="22809">䤊</a></li>
                                   <li><a href="22847">䤳</a></li>
                                   <li><a href="22848">䤴</a></li>
                                   <li><a href="22849">䤶</a></li>
                                   <li><a href="22926">䦠</a></li>
                                   <li><a href="22927">䦡</a></li>
                                   <li><a href="22928">䦣</a></li>
                                   <li><a href="22929">䦤</a></li>
                                   <li><a href="22930">䦥</a></li>
                                   <li><a href="22931">䦦</a></li>
                                   <li><a href="22932">䦨</a></li>
                                   <li><a href="22934">䦫</a></li>
                                   <li><a href="22982">䧨</a></li>
                                   <li><a href="22983">䧪</a></li>
                                   <li><a href="22999">䧾</a></li>
                                   <li><a href="23000">䨀</a></li>
                                   <li><a href="23023">䨚</a></li>
                                   <li><a href="23024">䨛</a></li>
                                   <li><a href="23025">䨜</a></li>
                                   <li><a href="23026">䨝</a></li>
                                   <li><a href="23030">䨡</a></li>
                                   <li><a href="23061">䩈</a></li>
                                   <li><a href="23081">䩡</a></li>
                                   <li><a href="23082">䩢</a></li>
                                   <li><a href="23083">䩣</a></li>
                                   <li><a href="23084">䩤</a></li>
                                   <li><a href="23085">䩥</a></li>
                                   <li><a href="23086">䩦</a></li>
                                   <li><a href="23087">䩧</a></li>
                                   <li><a href="23142">䪫</a></li>
                                   <li><a href="23143">䪬</a></li>
                                   <li><a href="23162">䫃</a></li>
                                   <li><a href="23163">䫄</a></li>
                                   <li><a href="23164">䫅</a></li>
                                   <li><a href="23165">䫆</a></li>
                                   <li><a href="23166">䫈</a></li>
                                   <li><a href="23167">䫊</a></li>
                                   <li><a href="23220">䬆</a></li>
                                   <li><a href="23221">䬇</a></li>
                                   <li><a href="23222">䬈</a></li>
                                   <li><a href="23223">䬉</a></li>
                                   <li><a href="23224">䬊</a></li>
                                   <li><a href="23262">䬽</a></li>
                                   <li><a href="23263">䬾</a></li>
                                   <li><a href="23264">䬿</a></li>
                                   <li><a href="23265">䭁</a></li>
                                   <li><a href="23266">䭂</a></li>
                                   <li><a href="23292">䭬</a></li>
                                   <li><a href="23316">䮆</a></li>
                                   <li><a href="23317">䮇</a></li>
                                   <li><a href="23318">䮈</a></li>
                                   <li><a href="23319">䮉</a></li>
                                   <li><a href="23320">䮊</a></li>
                                   <li><a href="23321">䮋</a></li>
                                   <li><a href="23322">䮌</a></li>
                                   <li><a href="23323">䮍</a></li>
                                   <li><a href="23379">䯐</a></li>
                                   <li><a href="23380">䯑</a></li>
                                   <li><a href="23381">䯓</a></li>
                                   <li><a href="23382">䯔</a></li>
                                   <li><a href="23412">䯷</a></li>
                                   <li><a href="23413">䯸</a></li>
                                   <li><a href="23442">䰜</a></li>
                                   <li><a href="23445">䰢</a></li>
                                   <li><a href="23446">䰣</a></li>
                                   <li><a href="23464">䰿</a></li>
                                   <li><a href="23465">䱃</a></li>
                                   <li><a href="23466">䱅</a></li>
                                   <li><a href="23467">䱆</a></li>
                                   <li><a href="23468">䱉</a></li>
                                   <li><a href="23538">䲺</a></li>
                                   <li><a href="23539">䲻</a></li>
                                   <li><a href="23540">䲼</a></li>
                                   <li><a href="23541">䲽</a></li>
                                   <li><a href="23542">䲾</a></li>
                                   <li><a href="23543">䲿</a></li>
                                   <li><a href="23544">䳀</a></li>
                                   <li><a href="23545">䳁</a></li>
                                   <li><a href="23546">䳂</a></li>
                                   <li><a href="23547">䳃</a></li>
                                   <li><a href="23548">䳆</a></li>
                                   <li><a href="23549">䳈</a></li>
                                   <li><a href="23550">䳉</a></li>
                                   <li><a href="23551">䳊</a></li>
                                   <li><a href="23609">䴣</a></li>
                                   <li><a href="23610">䴤</a></li>
                                   <li><a href="23611">䴥</a></li>
                                   <li><a href="23621">䴱</a></li>
                                   <li><a href="23622">䴲</a></li>
                                   <li><a href="23623">䴳</a></li>
                                   <li><a href="23639">䵊</a></li>
                                   <li><a href="23646">䵓</a></li>
                                   <li><a href="23659">䵡</a></li>
                                   <li><a href="23682">䵺</a></li>
                                   <li><a href="23688">䶂</a></li>
                                   <li><a href="23884">䦛</a></li>
                                   <li><a href="23916">噠</a></li>
                                   <li><a href="23917">噱</a></li>
                                   <li><a href="23920">嚄</a></li>
                                   <li><a href="23926">圛</a></li>
                                   <li><a href="23935">壒</a></li>
                                   <li><a href="23954">嬴</a></li>
                                   <li><a href="23965">嶙</a></li>
                                   <li><a href="23975">幪</a></li>
                                   <li><a href="24028">潾</a></li>
                                   <li><a href="24030">澠</a></li>
                                   <li><a href="24031">澾</a></li>
                                   <li><a href="24032">濄</a></li>
                                   <li><a href="24033">濈</a></li>
                                   <li><a href="24034">濨</a></li>
                                   <li><a href="24035">濩</a></li>
                                   <li><a href="24055">熿</a></li>
                                   <li><a href="24056">燂</a></li>
                                   <li><a href="24057">燌</a></li>
                                   <li><a href="24058">燓</a></li>
                                   <li><a href="24100">縌</a></li>
                                   <li><a href="24105">艕</a></li>
                                   <li><a href="24125">薕</a></li>
                                   <li><a href="24138">褳</a></li>
                                   <li><a href="24198">㗻</a></li>
                                   <li><a href="24210">㠗</a></li>
                                   <li><a href="24229">㬝</a></li>
                                   <li><a href="24257">㺚</a></li>
                                   <li><a href="24260">㿂</a></li>
                                   <li><a href="24278">䆳</a></li>
                                   <li><a href="24279">䇒</a></li>
                                   <li><a href="24281">䈪</a></li>
                                   <li><a href="24324">䗗</a></li>
                                   <li><a href="24327">䙜</a></li>
                                   <li><a href="24341">䢫</a></li>
                                   <li><a href="24355">䬼</a></li>
                                   <li><a href="24399">䕌</a></li>
                                   <li><a href="24765">叇</a></li>
                                   <li><a href="24955">噻</a></li>
                                   <li><a href="24956">噼</a></li>
                                   <li><a href="24987">墶</a></li>
                                   <li><a href="24989">壋</a></li>
                                   <li><a href="25141">嶶</a></li>
                                   <li><a href="25344">擜</a></li>
                                   <li><a href="25345">擝</a></li>
                                   <li><a href="25346">擞</a></li>
                                   <li><a href="25366">朥</a></li>
                                   <li><a href="25428">闂</a></li>
                                   <li><a href="25431">歚</a></li>
                                   <li><a href="25581">鞑</a></li>
                                   <li><a href="25599">濓</a></li>
                                   <li><a href="25603">濸</a></li>
                                   <li><a href="25645">餙</a></li>
                                   <li><a href="25660">燝</a></li>
                                   <li><a href="25662">燞</a></li>
                                   <li><a href="25798">璤</a></li>
                                   <li><a href="25841">瞣</a></li>
                                   <li><a href="25900">磮</a></li>
                                   <li><a href="25932">穑</a></li>
                                   <li><a href="25933">穒</a></li>
                                   <li><a href="25959">篯</a></li>
                                   <li><a href="26027">魇</a></li>
                                   <li><a href="26037">鮘</a></li>
                                   <li><a href="26193">龩</a></li>
                                   <li><a href="26216">龳</a></li>
                                   <li><a href="26249">凞</a></li>
                                   <li><a href="26323">膧</a></li>
                                   <li><a href="26324">膶</a></li>
                                   <li><a href="26408">㒘</a></li>
                                   <li><a href="26510">蕲</a></li>
                                   <li><a href="26550">螁</a></li>
                                   <li><a href="26551">螦</a></li>
                                   <li><a href="26552">螨</a></li>
                                   <li><a href="26569">襔</a></li>
                                   <li><a href="26577">觯</a></li>
                                   <li><a href="26580">謃</a></li>
                                   <li><a href="26627">㘄</a></li>
                                   <li><a href="26857">踯</a></li>
                                   <li><a href="26888">㜬</a></li>
                                   <li><a href="26889">㜭</a></li>
                                   <li><a href="26927">㡤</a></li>
                                   <li><a href="27123">㦙</a></li>
                                   <li><a href="27128">錼</a></li>
                                   <li><a href="27129">錿</a></li>
                                   <li><a href="27131">鍁</a></li>
                                   <li><a href="27133">鍂</a></li>
                                   <li><a href="27134">鍃</a></li>
                                   <li><a href="27137">鍅</a></li>
                                   <li><a href="27176">㩘</a></li>
                                   <li><a href="27184">㪪</a></li>
                                   <li><a href="27200">㬟</a></li>
                                   <li><a href="27240">㯧</a></li>
                                   <li><a href="27241">㯨</a></li>
                                   <li><a href="27242">㯩</a></li>
                                   <li><a href="27244">㯵</a></li>
                                   <li><a href="27279">㱷</a></li>
                                   <li><a href="27284">㲮</a></li>
                                   <li><a href="27353">㷺</a></li>
                                   <li><a href="27354">㷽</a></li>
                                   <li><a href="27395">㻻</a></li>
                                   <li><a href="27396">㻼</a></li>
                                   <li><a href="27452">䦩</a></li>
                                   <li><a href="27453">䦢</a></li>
                                   <li><a href="27523">䚤</a></li>
                                   <li><a href="27538">䘗</a></li>
                                   <li><a href="27550">䕂</a></li>
                                   <li><a href="27567">䑾</a></li>
                                   <li><a href="27579">䎬</a></li>
                                   <li><a href="27582">䍠</a></li>
                                   <li><a href="27597">䌊</a></li>
                                   <li><a href="27625">䄞</a></li>
                                   <li><a href="27626">䃨</a></li>
                                   <li><a href="27627">䃠</a></li>
                                   <li><a href="27637">䁪</a></li>
                                   <li><a href="27652">㾲</a></li>
                                   <li><a href="27655">㽔</a></li>
                                   <li><a href="27675">橴</a></li>
                                   <li><a href="27676">橵</a></li>
                                   <li><a href="27677">橶</a></li>
                                   <li><a href="27678">橷</a></li>
                                   <li><a href="27679">橻</a></li>
                                   <li><a href="27680">橼</a></li>
                                   <li><a href="27698">𡢽</a></li>
                                   <li><a href="27699">𡑮</a></li>
                                   <li><a href="27705">𣜿</a></li>
                                   <li><a href="27726">𡕀</a></li>
                                   <li><a href="27753">𥻨</a></li>
                                   <li><a href="27778">𠏹</a></li>
                                   <li><a href="27801">𡑭</a></li>
                                   <li><a href="27835">𢡛</a></li>
                                   <li><a href="27868">𣜜</a></li>
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