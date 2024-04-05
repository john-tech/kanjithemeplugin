<?php
/*
 * Template Name: kakusu18
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
               <h1 class="ttl_main">１８画の漢字一覧（漢検級順）</h1>

               <p>総画数１８画の漢字の一覧です。<br>
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
                                   <option value="kakusu16">１６画</option>
                                   <option value="kakusu17">１７画</option>
                                   <option value="#" selected>１８画</option>
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
                              <li><a href="bkakusu18">部首別順</a></li>
                              <li><a href="ckakusu18">読み順</a></li>
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
                                   <li><a class="color1" href="kanji/101">顔</a></li>
                                   <li><a class="color1" href="kanji/234">曜</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts08">
                              <h3 class="ttl_while"><a href="kyu08">漢字検定８級（小学校３年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/359">題</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts07">
                              <h3 class="ttl_while"><a href="kyu07">漢字検定７級（小学校４年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/467">観</a></li>
                                   <li><a class="color1" href="kanji/498">験</a></li>
                                   <li><a class="color1" href="631">類</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts06">
                              <h3 class="ttl_while"><a href="kyu06">漢字検定６級（小学校５年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="664">額</a></li>
                                   <li><a class="color1" href="741">職</a></li>
                                   <li><a class="color1" href="742">織</a></li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts05">
                              <h3 class="ttl_while"><a href="kyu05">漢字検定５級（小学校６年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="838">簡</a></li>
                                   <li><a class="color1" href="958">難</a></li>
                                   <li><a class="color1" href="1001">臨</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts04">
                              <h3 class="ttl_while"><a href="kyu04">漢字検定４級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1105">鎖</a>
                                   </li>
                                   <li><a class="color1" href="1133">瞬</a>
                                   </li>
                                   <li><a class="color1" href="1169">騒</a>
                                   </li>
                                   <li><a class="color1" href="1171">贈</a>
                                   </li>
                                   <li><a class="color1" href="1216">闘</a>
                                   </li>
                                   <li><a class="color1" href="1302">離</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts03">
                              <h3 class="ttl_while"><a href="kyu03">漢字検定３級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1343">穫</a>
                                   </li>
                                   <li><a class="color1" href="1364">騎</a>
                                   </li>
                                   <li><a class="color1" href="1473">繕</a>
                                   </li>
                                   <li><a class="color1" href="1477">礎</a>
                                   </li>
                                   <li><a class="color1" href="1510">鎮</a>
                                   </li>
                                   <li><a class="color1" href="1533">藩</a>
                                   </li>
                                   <li><a class="color1" href="1546">覆</a>
                                   </li>
                                   <li><a class="color1" href="1549">癖</a>
                                   </li>
                                   <li><a class="color1" href="1569">翻</a>
                                   </li>
                                   <li><a class="color1" href="1585">濫</a>
                                   </li>
                                   <li><a class="color1" href="1591">糧</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02j">
                              <h3 class="ttl_while"><a href="kyu02j">漢字検定準２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1664">襟</a>
                                   </li>
                                   <li><a class="color1" href="1677">顕</a>
                                   </li>
                                   <li><a class="color1" href="1679">繭</a>
                                   </li>
                                   <li><a class="color1" href="1819">懲</a>
                                   </li>
                                   <li><a class="color1" href="1910">癒</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02">
                              <h3 class="ttl_while"><a href="kyu02">漢字検定２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1968">顎</a>
                                   </li>
                                   <li><a class="color1" href="1971">鎌</a>
                                   </li>
                                   <li><a class="color1" href="1972">韓</a>
                                   </li>
                                   <li><a class="color1" href="2071">藤</a>
                                   </li>
                                   <li><a class="color1" href="2099">璧</a>
                                   </li>
                                   <li><a class="color1" href="2122">藍</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01j">
                              <h3 class="ttl_while"><a href="kyu01j">漢字検定準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="2195">襖</a>
                                   </li>
                                   <li><a class="color2" href="2231">鎧</a>
                                   </li>
                                   <li><a href="2419">鵠</a></li>
                                   <li><a class="color2" href="2496">蹟</a>
                                   </li>
                                   <li><a href="2579">鎗</a></li>
                                   <li><a href="2583">擾</a></li>
                                   <li><a class="color2" href="2587">穣</a>
                                   </li>
                                   <li><a class="color2" href="2611">雛</a>
                                   </li>
                                   <li><a class="color2" href="2654">叢</a>
                                   </li>
                                   <li><a href="2670">藪</a></li>
                                   <li><a href="2695">鎚</a></li>
                                   <li><a class="color2" href="2726">儲</a>
                                   </li>
                                   <li><a class="color2" href="2757">鵜</a>
                                   </li>
                                   <li><a href="2791">檮</a></li>
                                   <li><a href="2801">嚢</a></li>
                                   <li><a href="2862">謬</a></li>
                                   <li><a class="color2" href="2897">鞭</a>
                                   </li>
                                   <li><a class="color2" href="2931">麿</a>
                                   </li>
                                   <li><a href="2955">鎔</a></li>
                                   <li><a class="color2" href="2972">鯉</a>
                                   </li>
                                   <li><a class="color2" href="6452">簞</a>
                                   </li>
                                   <li><a class="color2" href="6459">蟬</a>
                                   </li>
                                   <li><a class="color2" href="6461">醬</a>
                                   </li>
                                   <li><a href="6474">軀</a></li>
                                   <li><a href="6476">嚙</a></li>
                                   <li><a href="6480">瀆</a></li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts01">
                              <h3 class="ttl_while"><a href="kyu01">漢字検定１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="3311">嚠</a></li>
                                   <li><a href="3312">嚔</a></li>
                                   <li><a href="3355">壙</a></li>
                                   <li><a href="3515">彝</a></li>
                                   <li><a href="3634">懣</a></li>
                                   <li><a href="3637">懴</a></li>
                                   <li><a href="3652">戳</a></li>
                                   <li><a href="3737">擲</a></li>
                                   <li><a href="3738">擺</a></li>
                                   <li><a href="3739">擽</a></li>
                                   <li><a href="3742">攅</a></li>
                                   <li><a href="3750">鼕</a></li>
                                   <li><a href="3754">黠</a></li>
                                   <li><a href="3777">鼬</a></li>
                                   <li><a href="3784">旛</a></li>
                                   <li><a href="3791">斃</a></li>
                                   <li><a href="3812">鵝</a></li>
                                   <li><a href="3813">鵞</a></li>
                                   <li><a href="3814">鵑</a></li>
                                   <li><a href="3815">鵤</a></li>
                                   <li><a href="3821">鵙</a></li>
                                   <li><a href="3862">鯀</a></li>
                                   <li><a href="3863">鯊</a></li>
                                   <li><a href="3864">鯒</a></li>
                                   <li><a href="3865">鯑</a></li>
                                   <li><a href="3866">鯏</a></li>
                                   <li><a href="3867">鮹</a></li>
                                   <li><a href="3953">魍</a></li>
                                   <li><a href="3954">魎</a></li>
                                   <li><a href="3955">魏</a></li>
                                   <li><a href="3970">闖</a></li>
                                   <li><a href="3971">闔</a></li>
                                   <li><a href="3972">闕</a></li>
                                   <li><a href="3990">霤</a></li>
                                   <li><a href="4100">蟠</a></li>
                                   <li><a href="4103">蟯</a></li>
                                   <li><a href="4183">櫁</a></li>
                                   <li><a href="4196">檸</a></li>
                                   <li><a href="4197">櫃</a></li>
                                   <li><a class="color2" href="4198">櫂</a>
                                   </li>
                                   <li><a href="4199">檳</a></li>
                                   <li><a href="4282">蹙</a></li>
                                   <li><a href="4283">蹠</a></li>
                                   <li><a href="4284">蹣</a></li>
                                   <li><a href="4285">蹤</a></li>
                                   <li><a href="4286">蹕</a></li>
                                   <li><a href="4313">臑</a></li>
                                   <li><a href="4314">臍</a></li>
                                   <li><a href="4442">瀋</a></li>
                                   <li><a href="4443">濺</a></li>
                                   <li><a href="4445">瀁</a></li>
                                   <li><a href="4446">瀏</a></li>
                                   <li><a href="4447">瀉</a></li>
                                   <li><a href="4448">瀑</a></li>
                                   <li><a href="4449">濾</a></li>
                                   <li><a href="4480">轆</a></li>
                                   <li><a href="4481">轌</a></li>
                                   <li><a href="4500">騅</a></li>
                                   <li><a href="4501">騏</a></li>
                                   <li><a href="4558">麌</a></li>
                                   <li><a href="4595">簣</a></li>
                                   <li><a href="4596">簧</a></li>
                                   <li><a href="4597">簟</a></li>
                                   <li><a href="4637">瓊</a></li>
                                   <li><a href="4649">鬆</a></li>
                                   <li><a href="4677">礒</a></li>
                                   <li><a href="4678">礑</a></li>
                                   <li><a href="4715">鎰</a></li>
                                   <li><a href="4716">鎹</a></li>
                                   <li><a href="4717">鎬</a></li>
                                   <li><a href="4805">繧</a></li>
                                   <li><a href="4806">繚</a></li>
                                   <li><a href="4807">繖</a></li>
                                   <li><a href="4808">繝</a></li>
                                   <li><a href="4809">繦</a></li>
                                   <li><a href="4810">繙</a></li>
                                   <li><a href="4811">繞</a></li>
                                   <li><a href="4827">髀</a></li>
                                   <li><a href="4848">醪</a></li>
                                   <li><a href="4854">馥</a></li>
                                   <li><a href="4863">聶</a></li>
                                   <li><a href="4877">甕</a></li>
                                   <li><a href="4878">甓</a></li>
                                   <li><a href="4881">釐</a></li>
                                   <li><a href="4892">艟</a></li>
                                   <li><a href="4938">燹</a></li>
                                   <li><a class="color2" href="4939">燿</a>
                                   </li>
                                   <li><a href="4940">燼</a></li>
                                   <li><a href="4941">燻</a></li>
                                   <li><a href="4995">謦</a></li>
                                   <li><a href="4996">謾</a></li>
                                   <li><a href="4997">鞫</a></li>
                                   <li><a href="4998">謳</a></li>
                                   <li><a href="4999">謫</a></li>
                                   <li><a href="5019">鬩</a></li>
                                   <li><a href="5066">襠</a></li>
                                   <li><a href="5092">鞦</a></li>
                                   <li><a href="5093">鞳</a></li>
                                   <li><a href="5094">鞨</a></li>
                                   <li><a href="5095">鞣</a></li>
                                   <li><a href="5141">顋</a></li>
                                   <li><a href="5171">瞼</a></li>
                                   <li><a href="5172">瞿</a></li>
                                   <li><a href="5173">矇</a></li>
                                   <li><a href="5174">瞻</a></li>
                                   <li><a href="5175">瞽</a></li>
                                   <li><a href="5252">癜</a></li>
                                   <li><a href="5287">餮</a></li>
                                   <li><a href="5288">餬</a></li>
                                   <li><a href="5309">殯</a></li>
                                   <li><a href="5436">藕</a></li>
                                   <li><a href="5437">藜</a></li>
                                   <li><a href="5463">覲</a></li>
                                   <li><a href="5490">贄</a></li>
                                   <li><a href="5491">贅</a></li>
                                   <li><a href="5534">邇</a></li>
                                   <li><a href="5535">邃</a></li>
                                   <li><a href="5561">穢</a></li>
                                   <li><a href="5562">穡</a></li>
                                   <li><a href="5580">觴</a></li>
                                   <li><a href="5594">羂</a></li>
                                   <li><a href="5595">羃</a></li>
                                   <li><a href="5612">翹</a></li>
                                   <li><a href="5622">竅</a></li>
                                   <li><a href="5623">竄</a></li>
                                   <li><a href="6500">騈</a></li>
                                   <li><a href="6949">鯎</a></li>
                                   <li><a href="6959">鯐</a></li>
                                   <li><a href="6966">鮸</a></li>
                                   <li><a href="7132">鵥</a></li>
                                   <li><a href="7767">鎺</a></li>
                                   <li><a href="9926">蟪</a></li>
                                   <li><a href="9947">蠆</a></li>
                                   <li><a href="27710">𫒼</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts0101j">
                              <h3 class="ttl_while"><a href="kyu0101j">漢字検定１級 / 準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="3049">雜</a>
                                   </li>
                                   <li><a href="5701">蟲</a></li>
                                   <li><a href="5728">醫</a></li>
                                   <li><a href="5783">顏</a></li>
                                   <li><a class="color2" href="5784">藝</a>
                                   </li>
                                   <li><a class="color2" href="5785">藥</a>
                                   </li>
                                   <li><a href="5857">獵</a></li>
                                   <li><a href="5928">擴</a></li>
                                   <li><a class="color2" href="5984">藏</a>
                                   </li>
                                   <li><a class="color2" href="6001">鎭</a>
                                   </li>
                                   <li><a class="color2" href="6014">禮</a>
                                   </li>
                                   <li><a class="color2" href="6047">轉</a>
                                   </li>
                                   <li><a href="6146">雙</a></li>
                                   <li><a class="color2" href="6155">壘</a>
                                   </li>
                                   <li><a href="6204">斷</a></li>
                                   <li><a href="6229">歸</a></li>
                                   <li><a href="6320">豐</a></li>
                                   <li><a class="color2" href="6413">謹</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts">
                              <h3 class="ttl_while">漢字検定対象外</h3>
                              <ul class="search_parts">
                                   <li><a href="5714">瞹</a></li>
                                   <li><a href="5817">鵐</a></li>
                                   <li><a href="5854">礇</a></li>
                                   <li><a href="5886">鯆</a></li>
                                   <li><a href="6194">擶</a></li>
                                   <li><a href="6548">黋</a></li>
                                   <li><a href="6552">黟</a></li>
                                   <li><a href="6566">鼂</a></li>
                                   <li><a href="6580">鼖</a></li>
                                   <li><a href="6622">鼩</a></li>
                                   <li><a href="6623">鼨</a></li>
                                   <li><a href="6624">鼪</a></li>
                                   <li><a href="6625">鼫</a></li>
                                   <li><a href="6626">鼧</a></li>
                                   <li><a href="6627">鼥</a></li>
                                   <li><a href="6628">䶄</a></li>
                                   <li><a href="6647">䶊</a></li>
                                   <li><a href="6657">齌</a></li>
                                   <li><a href="6662">齕</a></li>
                                   <li><a href="6682">龎</a></li>
                                   <li><a href="6742">騐</a></li>
                                   <li><a href="6743">騊</a></li>
                                   <li><a href="6744">騑</a></li>
                                   <li><a href="6745">騋</a></li>
                                   <li><a href="6746">騄</a></li>
                                   <li><a href="6754">騌</a></li>
                                   <li><a href="6800">髁</a></li>
                                   <li><a href="6801">骿</a></li>
                                   <li><a href="6811">臏</a></li>
                                   <li><a href="6816">髜</a></li>
                                   <li><a href="6822">頾</a></li>
                                   <li><a href="6836">鬈</a></li>
                                   <li><a href="6837">鬄</a></li>
                                   <li><a href="6838">鬃</a></li>
                                   <li><a href="6839">鬅</a></li>
                                   <li><a href="6840">䰀</a></li>
                                   <li><a href="6867">鬵</a></li>
                                   <li><a href="6877">魌</a></li>
                                   <li><a href="6878">魋</a></li>
                                   <li><a href="6879">魊</a></li>
                                   <li><a href="6880">䰥</a></li>
                                   <li><a href="6950">鯇</a></li>
                                   <li><a href="6952">鯁</a></li>
                                   <li><a href="6954">鯋</a></li>
                                   <li><a href="6955">鮺</a></li>
                                   <li><a href="6956">鮻</a></li>
                                   <li><a href="6957">䱗</a></li>
                                   <li><a href="6958">鮼</a></li>
                                   <li><a href="6960">鮾</a></li>
                                   <li><a href="6962">鮵</a></li>
                                   <li><a href="6963">鮿</a></li>
                                   <li><a href="6964">鮷</a></li>
                                   <li><a href="6965">䱐</a></li>
                                   <li><a href="6969">鯈</a></li>
                                   <li><a href="6970">䱒</a></li>
                                   <li><a href="6971">䱌</a></li>
                                   <li><a href="7040">䱔</a></li>
                                   <li><a href="7101">鵌</a></li>
                                   <li><a href="7131">䳘</a></li>
                                   <li><a href="7133">鵟</a></li>
                                   <li><a href="7135">鵊</a></li>
                                   <li><a href="7136">鵔</a></li>
                                   <li><a href="7137">鵕</a></li>
                                   <li><a href="7138">鵢</a></li>
                                   <li><a href="7139">鵚</a></li>
                                   <li><a href="7140">鵓</a></li>
                                   <li><a href="7141">鵒</a></li>
                                   <li><a href="7142">鵣</a></li>
                                   <li><a href="7151">䳜</a></li>
                                   <li><a href="7153">鵋</a></li>
                                   <li><a href="7158">雞</a></li>
                                   <li><a href="7248">麎</a></li>
                                   <li><a href="7249">麐</a></li>
                                   <li><a href="7250">麏</a></li>
                                   <li><a href="7264">䴸</a></li>
                                   <li><a href="7267">䴵</a></li>
                                   <li><a href="7314">鞬</a></li>
                                   <li><a href="7315">鞧</a></li>
                                   <li><a href="7316">鞢</a></li>
                                   <li><a href="7318">鞮</a></li>
                                   <li><a href="7319">鞪</a></li>
                                   <li><a href="7347">韔</a></li>
                                   <li><a href="7407">顑</a></li>
                                   <li><a href="7408">顒</a></li>
                                   <li><a href="7409">顐</a></li>
                                   <li><a href="7410">顓</a></li>
                                   <li><a href="7416">䫙</a></li>
                                   <li><a href="7437">颸</a></li>
                                   <li><a href="7438">颺</a></li>
                                   <li><a href="7441">䬒</a></li>
                                   <li><a href="7485">餲</a></li>
                                   <li><a href="7486">餵</a></li>
                                   <li><a href="7487">餫</a></li>
                                   <li><a href="7488">餱</a></li>
                                   <li><a href="7489">餭</a></li>
                                   <li><a href="7490">餳</a></li>
                                   <li><a href="7491">餰</a></li>
                                   <li><a href="7492">餪</a></li>
                                   <li><a href="7745">鎢</a></li>
                                   <li><a href="7746">鎣</a></li>
                                   <li><a href="7747">鎵</a></li>
                                   <li><a href="7748">鎶</a></li>
                                   <li><a href="7749">鎋</a></li>
                                   <li><a href="7750">䤿</a></li>
                                   <li><a href="7751">鎳</a></li>
                                   <li><a href="7752">鎤</a></li>
                                   <li><a href="7753">鎻</a></li>
                                   <li><a href="7755">鎈</a></li>
                                   <li><a href="7756">鎍</a></li>
                                   <li><a href="7758">鎀</a></li>
                                   <li><a href="7759">鎨</a></li>
                                   <li><a href="7760">鎪</a></li>
                                   <li><a href="7762">鎴</a></li>
                                   <li><a href="7763">鎕</a></li>
                                   <li><a href="7764">鎒</a></li>
                                   <li><a href="7765">鎿</a></li>
                                   <li><a href="7766">鎛</a></li>
                                   <li><a href="7768">鎫</a></li>
                                   <li><a href="7769">鎞</a></li>
                                   <li><a href="7770">鎊</a></li>
                                   <li><a href="7771">鎏</a></li>
                                   <li><a href="7772">鎦</a></li>
                                   <li><a href="7774">鎘</a></li>
                                   <li><a href="7794">鏌</a></li>
                                   <li><a href="7801">鏵</a></li>
                                   <li><a href="7829">鎸</a></li>
                                   <li><a href="7843">鍳</a></li>
                                   <li><a href="7876">闗</a></li>
                                   <li><a href="7888">闈</a></li>
                                   <li><a href="7893">闓</a></li>
                                   <li><a href="7894">闑</a></li>
                                   <li><a href="7895">闐</a></li>
                                   <li><a href="7899">闒</a></li>
                                   <li><a href="7972">隳</a></li>
                                   <li><a href="7982">雝</a></li>
                                   <li><a href="7988">巂</a></li>
                                   <li><a href="7989">雟</a></li>
                                   <li><a href="8003">䨩</a></li>
                                   <li><a href="8012">霣</a></li>
                                   <li><a href="8013">霢</a></li>
                                   <li><a href="8014">霡</a></li>
                                   <li><a href="8050">覰</a></li>
                                   <li><a href="8182">謋</a></li>
                                   <li><a href="8190">謣</a></li>
                                   <li><a href="8191">謷</a></li>
                                   <li><a href="8192">謸</a></li>
                                   <li><a href="8193">謰</a></li>
                                   <li><a href="8219">謭</a></li>
                                   <li><a href="8271">豵</a></li>
                                   <li><a href="8276">鼦</a></li>
                                   <li><a href="8288">貙</a></li>
                                   <li><a href="8322">賿</a></li>
                                   <li><a href="8323">贃</a></li>
                                   <li><a href="8352">䟆</a></li>
                                   <li><a href="8423">蹞</a></li>
                                   <li><a href="8424">蹔</a></li>
                                   <li><a href="8425">蹝</a></li>
                                   <li><a href="8426">䠞</a></li>
                                   <li><a href="8427">蹜</a></li>
                                   <li><a href="8428">蹡</a></li>
                                   <li><a href="8429">蹛</a></li>
                                   <li><a href="8430">蹢</a></li>
                                   <li><a href="8471">軁</a></li>
                                   <li><a href="8510">䡮</a></li>
                                   <li><a href="8530">轊</a></li>
                                   <li><a href="8531">轇</a></li>
                                   <li><a href="8718">鄺</a></li>
                                   <li><a href="8719">鄾</a></li>
                                   <li><a href="8725">鄼</a></li>
                                   <li><a href="8762">醦</a></li>
                                   <li><a href="8763">醨</a></li>
                                   <li><a href="8903">簥</a></li>
                                   <li><a href="8904">簛</a></li>
                                   <li><a href="8905">簨</a></li>
                                   <li><a href="8906">簭</a></li>
                                   <li><a href="8907">簦</a></li>
                                   <li><a href="8908">簜</a></li>
                                   <li><a href="8909">簙</a></li>
                                   <li><a href="8910">簱</a></li>
                                   <li><a href="8911">簠</a></li>
                                   <li><a href="8914">簩</a></li>
                                   <li><a href="8932">篽</a></li>
                                   <li><a href="8981">糦</a></li>
                                   <li><a href="8984">糥</a></li>
                                   <li><a href="9127">繘</a></li>
                                   <li><a href="9128">繢</a></li>
                                   <li><a href="9129">繣</a></li>
                                   <li><a href="9130">繥</a></li>
                                   <li><a href="9131">繐</a></li>
                                   <li><a href="9134">繠</a></li>
                                   <li><a href="9135">繟</a></li>
                                   <li><a href="9136">繎</a></li>
                                   <li><a href="9137">繒</a></li>
                                   <li><a href="9162">罇</a></li>
                                   <li><a href="9163">罈</a></li>
                                   <li><a href="9186">羀</a></li>
                                   <li><a href="9217">羳</a></li>
                                   <li><a href="9218">羴</a></li>
                                   <li><a href="9219">羵</a></li>
                                   <li><a href="9237">䬡</a></li>
                                   <li><a href="9241">翺</a></li>
                                   <li><a href="9269">耮</a></li>
                                   <li><a href="9288">聵</a></li>
                                   <li><a href="9321">舙</a></li>
                                   <li><a href="9350">艠</a></li>
                                   <li><a href="9483">藡</a></li>
                                   <li><a href="9688">藳</a></li>
                                   <li><a href="9702">藙</a></li>
                                   <li><a href="9703">藭</a></li>
                                   <li><a href="9704">藠</a></li>
                                   <li><a href="9705">藚</a></li>
                                   <li><a href="9707">藨</a></li>
                                   <li><a href="9708">藦</a></li>
                                   <li><a href="9709">藘</a></li>
                                   <li><a href="9710">䕡</a></li>
                                   <li><a href="9711">藟</a></li>
                                   <li><a href="9759">虩</a></li>
                                   <li><a href="9921">蟵</a></li>
                                   <li><a href="9922">蟫</a></li>
                                   <li><a href="9923">蟣</a></li>
                                   <li><a href="9924">蟢</a></li>
                                   <li><a href="9925">蟜</a></li>
                                   <li><a href="9927">蟥</a></li>
                                   <li><a href="9928">蟖</a></li>
                                   <li><a href="9929">蟴</a></li>
                                   <li><a href="9930">蟭</a></li>
                                   <li><a href="9931">蟓</a></li>
                                   <li><a href="9932">蟙</a></li>
                                   <li><a href="9933">蟳</a></li>
                                   <li><a href="9934">蟤</a></li>
                                   <li><a href="9935">蟱</a></li>
                                   <li><a href="9936">蟛</a></li>
                                   <li><a href="9937">蟚</a></li>
                                   <li><a href="9938">蟟</a></li>
                                   <li><a href="9939">蟧</a></li>
                                   <li><a href="9948">蟦</a></li>
                                   <li><a href="9956">蠇</a></li>
                                   <li><a href="9962">䗶</a></li>
                                   <li><a href="10080">襘</a></li>
                                   <li><a href="10082">襛</a></li>
                                   <li><a href="10083">襡</a></li>
                                   <li><a href="10084">襚</a></li>
                                   <li><a href="10085">襜</a></li>
                                   <li><a href="10086">襗</a></li>
                                   <li><a href="10087">襢</a></li>
                                   <li><a href="10088">䙥</a></li>
                                   <li><a href="10246">璹</a></li>
                                   <li><a href="10247">璻</a></li>
                                   <li><a href="10248">璿</a></li>
                                   <li><a href="10249">瓀</a></li>
                                   <li><a href="10250">璸</a></li>
                                   <li><a href="10287">甔</a></li>
                                   <li><a href="10333">疄</a></li>
                                   <li><a href="10336">疅</a></li>
                                   <li><a href="10349">㿍</a></li>
                                   <li><a href="10446">癔</a></li>
                                   <li><a href="10447">癙</a></li>
                                   <li><a href="10457">癕</a></li>
                                   <li><a href="10484">皧</a></li>
                                   <li><a href="10485">皦</a></li>
                                   <li><a href="10496">皽</a></li>
                                   <li><a href="10610">瞵</a></li>
                                   <li><a href="10633">矱</a></li>
                                   <li><a href="10704">礠</a></li>
                                   <li><a href="10720">礚</a></li>
                                   <li><a href="10752">磷</a></li>
                                   <li><a href="10754">礐</a></li>
                                   <li><a href="10755">礉</a></li>
                                   <li><a href="10756">礏</a></li>
                                   <li><a href="10757">礆</a></li>
                                   <li><a href="10758">礔</a></li>
                                   <li><a href="10759">礌</a></li>
                                   <li><a href="10760">礞</a></li>
                                   <li><a href="10761">礜</a></li>
                                   <li><a href="10766">䃯</a></li>
                                   <li><a href="10817">禬</a></li>
                                   <li><a href="10818">禯</a></li>
                                   <li><a href="10889">穠</a></li>
                                   <li><a href="10890">穟</a></li>
                                   <li><a href="10891">䆃</a></li>
                                   <li><a href="10895">穥</a></li>
                                   <li><a href="11010">懕</a></li>
                                   <li><a href="11013">懘</a></li>
                                   <li><a href="11014">懟</a></li>
                                   <li><a href="11205">懭</a></li>
                                   <li><a href="11206">懥</a></li>
                                   <li><a href="11207">懪</a></li>
                                   <li><a href="11209">懮</a></li>
                                   <li><a href="11210">懩</a></li>
                                   <li><a href="11211">懢</a></li>
                                   <li><a href="11212">懰</a></li>
                                   <li><a href="11213">懵</a></li>
                                   <li><a href="11258">擵</a></li>
                                   <li><a href="11262">擪</a></li>
                                   <li><a href="11265">㩜</a></li>
                                   <li><a href="11503">攂</a></li>
                                   <li><a href="11507">擷</a></li>
                                   <li><a href="11508">擻</a></li>
                                   <li><a href="11509">攄</a></li>
                                   <li><a href="11510">擿</a></li>
                                   <li><a href="11511">㩧</a></li>
                                   <li><a href="11512">㩠</a></li>
                                   <li><a href="11513">攁</a></li>
                                   <li><a href="11515">擸</a></li>
                                   <li><a href="11557">贁</a></li>
                                   <li><a href="11575">辬</a></li>
                                   <li><a href="11655">皨</a></li>
                                   <li><a href="11717">㬥</a></li>
                                   <li><a href="11723">瞾</a></li>
                                   <li><a href="11734">㬤</a></li>
                                   <li><a href="11735">曛</a></li>
                                   <li><a href="11856">䯛</a></li>
                                   <li><a href="11922">臎</a></li>
                                   <li><a href="11923">臗</a></li>
                                   <li><a href="12087">檱</a></li>
                                   <li><a href="12250">櫉</a></li>
                                   <li><a href="12286">檿</a></li>
                                   <li><a href="12287">櫆</a></li>
                                   <li><a href="12289">檾</a></li>
                                   <li><a href="12290">檵</a></li>
                                   <li><a href="12291">檫</a></li>
                                   <li><a href="12292">檯</a></li>
                                   <li><a href="12293">檽</a></li>
                                   <li><a href="12294">檰</a></li>
                                   <li><a href="12303">櫔</a></li>
                                   <li><a href="12637">㒞</a></li>
                                   <li><a href="12662">儭</a></li>
                                   <li><a href="12663">儯</a></li>
                                   <li><a href="12664">儱</a></li>
                                   <li><a href="12729">櫈</a></li>
                                   <li><a href="12955">毉</a></li>
                                   <li><a href="13108">儮</a></li>
                                   <li><a href="13558">嚂</a></li>
                                   <li><a href="13567">嚕</a></li>
                                   <li><a href="13568">嚖</a></li>
                                   <li><a href="13569">嚗</a></li>
                                   <li><a href="13570">嚘</a></li>
                                   <li><a href="13572">嚛</a></li>
                                   <li><a href="13573">嚜</a></li>
                                   <li><a href="13574">嚞</a></li>
                                   <li><a href="13575">嚟</a></li>
                                   <li><a href="13879">壏</a></li>
                                   <li><a href="14252">嬸</a></li>
                                   <li><a href="14255">嬻</a></li>
                                   <li><a href="14256">嬼</a></li>
                                   <li><a href="14357">尶</a></li>
                                   <li><a href="14358">尷</a></li>
                                   <li><a href="14374">屩</a></li>
                                   <li><a href="14375">屪</a></li>
                                   <li><a href="14585">巀</a></li>
                                   <li><a href="14661">幮</a></li>
                                   <li><a href="14715">廫</a></li>
                                   <li><a href="14752">彍</a></li>
                                   <li><a href="14758">彞</a></li>
                                   <li><a href="14889">懖</a></li>
                                   <li><a href="14893">懫</a></li>
                                   <li><a href="15041">擳</a></li>
                                   <li><a href="15042">擹</a></li>
                                   <li><a href="15043">擼</a></li>
                                   <li><a href="15045">攆</a></li>
                                   <li><a href="15125">曘</a></li>
                                   <li><a href="15126">曞</a></li>
                                   <li><a href="15287">橬</a></li>
                                   <li><a href="15303">檭</a></li>
                                   <li><a href="15304">檲</a></li>
                                   <li><a href="15305">檶</a></li>
                                   <li><a href="15306">檷</a></li>
                                   <li><a href="15307">檹</a></li>
                                   <li><a href="15308">檺</a></li>
                                   <li><a href="15309">檼</a></li>
                                   <li><a href="15310">櫀</a></li>
                                   <li><a href="15311">櫄</a></li>
                                   <li><a href="15312">櫅</a></li>
                                   <li><a href="15313">櫇</a></li>
                                   <li><a href="15315">櫒</a></li>
                                   <li><a href="15316">櫗</a></li>
                                   <li><a href="15318">櫙</a></li>
                                   <li><a href="15322">櫣</a></li>
                                   <li><a href="15355">歞</a></li>
                                   <li><a href="15925">濷</a></li>
                                   <li><a href="15926">濻</a></li>
                                   <li><a href="15927">濼</a></li>
                                   <li><a href="15928">濽</a></li>
                                   <li><a href="15930">瀀</a></li>
                                   <li><a href="15931">瀂</a></li>
                                   <li><a href="15932">瀃</a></li>
                                   <li><a href="15933">瀄</a></li>
                                   <li><a href="15934">瀅</a></li>
                                   <li><a href="15935">瀈</a></li>
                                   <li><a href="15936">瀊</a></li>
                                   <li><a href="15937">瀌</a></li>
                                   <li><a href="15938">瀍</a></li>
                                   <li><a href="15940">瀒</a></li>
                                   <li><a href="15941">瀔</a></li>
                                   <li><a href="16208">熸</a></li>
                                   <li><a href="16227">燛</a></li>
                                   <li><a href="16243">燸</a></li>
                                   <li><a href="16244">燺</a></li>
                                   <li><a href="16245">燽</a></li>
                                   <li><a href="16246">燾</a></li>
                                   <li><a href="16247">爀</a></li>
                                   <li><a href="16250">爃</a></li>
                                   <li><a href="16251">爄</a></li>
                                   <li><a href="16336">犡</a></li>
                                   <li><a href="16462">獶</a></li>
                                   <li><a href="16463">獷</a></li>
                                   <li><a href="16558">璶</a></li>
                                   <li><a href="16561">璾</a></li>
                                   <li><a href="16584">甐</a></li>
                                   <li><a href="16613">癏</a></li>
                                   <li><a href="16614">癑</a></li>
                                   <li><a href="16615">癓</a></li>
                                   <li><a href="16616">癗</a></li>
                                   <li><a href="16617">癚</a></li>
                                   <li><a href="16618">癛</a></li>
                                   <li><a href="16637">盫</a></li>
                                   <li><a href="16694">瞺</a></li>
                                   <li><a href="16695">矀</a></li>
                                   <li><a href="16696">矁</a></li>
                                   <li><a href="16699">矆</a></li>
                                   <li><a href="16770">礈</a></li>
                                   <li><a href="16771">礊</a></li>
                                   <li><a href="16772">礋</a></li>
                                   <li><a href="16774">礓</a></li>
                                   <li><a href="16775">礕</a></li>
                                   <li><a href="16776">礖</a></li>
                                   <li><a href="16934">簚</a></li>
                                   <li><a href="16935">簝</a></li>
                                   <li><a href="16936">簢</a></li>
                                   <li><a href="16937">簤</a></li>
                                   <li><a href="16973">糤</a></li>
                                   <li><a href="17037">繏</a></li>
                                   <li><a href="17038">繑</a></li>
                                   <li><a href="17039">繓</a></li>
                                   <li><a href="17041">繛</a></li>
                                   <li><a href="17042">繜</a></li>
                                   <li><a href="17045">繱</a></li>
                                   <li><a href="17096">翸</a></li>
                                   <li><a href="17103">耭</a></li>
                                   <li><a href="17179">臐</a></li>
                                   <li><a href="17195">艞</a></li>
                                   <li><a href="17370">藗</a></li>
                                   <li><a href="17371">藛</a></li>
                                   <li><a href="17372">藢</a></li>
                                   <li><a href="17373">藣</a></li>
                                   <li><a href="17374">藧</a></li>
                                   <li><a href="17375">藫</a></li>
                                   <li><a href="17376">藬</a></li>
                                   <li><a href="17378">藯</a></li>
                                   <li><a href="17379">藰</a></li>
                                   <li><a href="17380">藱</a></li>
                                   <li><a href="17502">蟔</a></li>
                                   <li><a href="17503">蟗</a></li>
                                   <li><a href="17504">蟘</a></li>
                                   <li><a href="17505">蟝</a></li>
                                   <li><a href="17506">蟞</a></li>
                                   <li><a href="17507">蟡</a></li>
                                   <li><a href="17508">蟨</a></li>
                                   <li><a href="17509">蟩</a></li>
                                   <li><a href="17510">蟮</a></li>
                                   <li><a href="17511">蟼</a></li>
                                   <li><a href="17594">襙</a></li>
                                   <li><a href="17595">襝</a></li>
                                   <li><a href="17614">覱</a></li>
                                   <li><a href="17693">謤</a></li>
                                   <li><a href="17694">謥</a></li>
                                   <li><a href="17695">謧</a></li>
                                   <li><a href="17697">謪</a></li>
                                   <li><a href="17698">謮</a></li>
                                   <li><a href="17699">謯</a></li>
                                   <li><a href="17700">謱</a></li>
                                   <li><a href="17701">謲</a></li>
                                   <li><a href="17702">謴</a></li>
                                   <li><a href="17703">謵</a></li>
                                   <li><a href="17704">謶</a></li>
                                   <li><a href="17705">謺</a></li>
                                   <li><a href="17706">謻</a></li>
                                   <li><a href="17707">謼</a></li>
                                   <li><a href="17708">謽</a></li>
                                   <li><a href="17732">豂</a></li>
                                   <li><a href="17743">豴</a></li>
                                   <li><a href="17754">貗</a></li>
                                   <li><a href="17771">贀</a></li>
                                   <li><a href="17772">贂</a></li>
                                   <li><a href="17848">蹖</a></li>
                                   <li><a href="17849">蹗</a></li>
                                   <li><a href="17850">蹘</a></li>
                                   <li><a href="17851">蹚</a></li>
                                   <li><a href="17852">蹥</a></li>
                                   <li><a href="17853">蹦</a></li>
                                   <li><a href="17854">蹧</a></li>
                                   <li><a href="17872">躿</a></li>
                                   <li><a href="17905">轈</a></li>
                                   <li><a href="17906">轋</a></li>
                                   <li><a href="17970">鄻</a></li>
                                   <li><a href="17971">鄽</a></li>
                                   <li><a href="17972">鄿</a></li>
                                   <li><a href="17992">醥</a></li>
                                   <li><a href="17993">醧</a></li>
                                   <li><a href="17994">醩</a></li>
                                   <li><a href="18073">鍏</a></li>
                                   <li><a href="18088">鎉</a></li>
                                   <li><a href="18089">鎎</a></li>
                                   <li><a href="18090">鎐</a></li>
                                   <li><a href="18091">鎑</a></li>
                                   <li><a href="18092">鎓</a></li>
                                   <li><a href="18093">鎙</a></li>
                                   <li><a href="18094">鎜</a></li>
                                   <li><a href="18096">鎟</a></li>
                                   <li><a href="18097">鎠</a></li>
                                   <li><a href="18099">鎯</a></li>
                                   <li><a href="18100">鎱</a></li>
                                   <li><a href="18101">鎲</a></li>
                                   <li><a href="18102">鎷</a></li>
                                   <li><a href="18213">雗</a></li>
                                   <li><a href="18233">霥</a></li>
                                   <li><a href="18249">靝</a></li>
                                   <li><a href="18258">鞤</a></li>
                                   <li><a href="18259">鞥</a></li>
                                   <li><a href="18260">鞩</a></li>
                                   <li><a href="18261">鞰</a></li>
                                   <li><a href="18266">韕</a></li>
                                   <li><a href="18271">韹</a></li>
                                   <li><a href="18284">頿</a></li>
                                   <li><a href="18319">餯</a></li>
                                   <li><a href="18328">馤</a></li>
                                   <li><a href="18358">騆</a></li>
                                   <li><a href="18359">騇</a></li>
                                   <li><a href="18360">騉</a></li>
                                   <li><a href="18361">騍</a></li>
                                   <li><a href="18401">鬇</a></li>
                                   <li><a href="18432">鮶</a></li>
                                   <li><a href="18433">鮽</a></li>
                                   <li><a href="18434">鯂</a></li>
                                   <li><a href="18435">鯃</a></li>
                                   <li><a href="18436">鯄</a></li>
                                   <li><a href="18437">鯅</a></li>
                                   <li><a href="18438">鯌</a></li>
                                   <li><a href="18493">鵍</a></li>
                                   <li><a href="18494">鵎</a></li>
                                   <li><a href="18495">鵏</a></li>
                                   <li><a href="18496">鵖</a></li>
                                   <li><a href="18497">鵗</a></li>
                                   <li><a href="18498">鵘</a></li>
                                   <li><a href="18499">鵛</a></li>
                                   <li><a href="18565">麍</a></li>
                                   <li><a href="18571">麱</a></li>
                                   <li><a href="18572">麲</a></li>
                                   <li><a href="18575">黊</a></li>
                                   <li><a href="18584">鼀</a></li>
                                   <li><a href="18585">鼁</a></li>
                                   <li><a href="18670">㐦</a></li>
                                   <li><a href="18741">㒟</a></li>
                                   <li><a href="18742">㒠</a></li>
                                   <li><a href="18813">㔎</a></li>
                                   <li><a href="18815">㔑</a></li>
                                   <li><a href="18834">㔧</a></li>
                                   <li><a href="19011">㘉</a></li>
                                   <li><a href="19012">㘊</a></li>
                                   <li><a href="19014">㘌</a></li>
                                   <li><a href="19015">㘍</a></li>
                                   <li><a href="19016">㘏</a></li>
                                   <li><a href="19096">㙻</a></li>
                                   <li><a href="19097">㙼</a></li>
                                   <li><a href="19108">㚍</a></li>
                                   <li><a href="19236">㜮</a></li>
                                   <li><a href="19237">㜯</a></li>
                                   <li><a href="19238">㜰</a></li>
                                   <li><a href="19239">㜱</a></li>
                                   <li><a href="19242">㜴</a></li>
                                   <li><a href="19295">㝰</a></li>
                                   <li><a href="19438">㠝</a></li>
                                   <li><a href="19731">㦚</a></li>
                                   <li><a href="19732">㦝</a></li>
                                   <li><a href="19733">㦞</a></li>
                                   <li><a href="19734">㦟</a></li>
                                   <li><a href="19735">㦡</a></li>
                                   <li><a href="19868">㩡</a></li>
                                   <li><a href="19870">㩣</a></li>
                                   <li><a href="19871">㩤</a></li>
                                   <li><a href="19872">㩥</a></li>
                                   <li><a href="19873">㩦</a></li>
                                   <li><a href="19874">㩨</a></li>
                                   <li><a href="19875">㩩</a></li>
                                   <li><a href="19876">㩪</a></li>
                                   <li><a href="19928">㪬</a></li>
                                   <li><a href="20007">㬣</a></li>
                                   <li><a href="20142">㯯</a></li>
                                   <li><a href="20146">㯷</a></li>
                                   <li><a href="20147">㯸</a></li>
                                   <li><a href="20149">㯻</a></li>
                                   <li><a href="20150">㯽</a></li>
                                   <li><a href="20221">㱘</a></li>
                                   <li><a href="20295">㲰</a></li>
                                   <li><a href="20441">㵲</a></li>
                                   <li><a href="20443">㵴</a></li>
                                   <li><a href="20452">㵽</a></li>
                                   <li><a href="20453">㵿</a></li>
                                   <li><a href="20454">㶁</a></li>
                                   <li><a href="20544">㸄</a></li>
                                   <li><a href="20570">㸤</a></li>
                                   <li><a href="20619">㹗</a></li>
                                   <li><a href="20620">㹘</a></li>
                                   <li><a href="20681">㺝</a></li>
                                   <li><a href="20742">㻸</a></li>
                                   <li><a href="20746">㻾</a></li>
                                   <li><a href="20804">㽆</a></li>
                                   <li><a href="20805">㽇</a></li>
                                   <li><a href="20832">㽫</a></li>
                                   <li><a href="20833">㽬</a></li>
                                   <li><a href="20907">㿋</a></li>
                                   <li><a href="20908">㿌</a></li>
                                   <li><a href="20910">㿏</a></li>
                                   <li><a href="20944">㿹</a></li>
                                   <li><a href="21043">䁴</a></li>
                                   <li><a href="21044">䁵</a></li>
                                   <li><a href="21045">䁶</a></li>
                                   <li><a href="21046">䁷</a></li>
                                   <li><a href="21047">䁸</a></li>
                                   <li><a href="21048">䁹</a></li>
                                   <li><a href="21049">䁺</a></li>
                                   <li><a href="21131">䃤</a></li>
                                   <li><a href="21135">䃩</a></li>
                                   <li><a href="21136">䃪</a></li>
                                   <li><a href="21137">䃫</a></li>
                                   <li><a href="21138">䃬</a></li>
                                   <li><a href="21139">䃭</a></li>
                                   <li><a href="21140">䃮</a></li>
                                   <li><a href="21173">䄡</a></li>
                                   <li><a href="21253">䆁</a></li>
                                   <li><a href="21254">䆂</a></li>
                                   <li><a href="21255">䆄</a></li>
                                   <li><a href="21256">䆅</a></li>
                                   <li><a href="21302">䆼</a></li>
                                   <li><a href="21303">䆽</a></li>
                                   <li><a href="21324">䇔</a></li>
                                   <li><a href="21424">䉈</a></li>
                                   <li><a href="21426">䉊</a></li>
                                   <li><a href="21427">䉋</a></li>
                                   <li><a href="21428">䉌</a></li>
                                   <li><a href="21429">䉍</a></li>
                                   <li><a href="21430">䉎</a></li>
                                   <li><a href="21432">䉐</a></li>
                                   <li><a href="21433">䉑</a></li>
                                   <li><a href="21434">䉒</a></li>
                                   <li><a href="21435">䉓</a></li>
                                   <li><a href="21436">䉔</a></li>
                                   <li><a href="21437">䉕</a></li>
                                   <li><a href="21438">䉖</a></li>
                                   <li><a href="21439">䉗</a></li>
                                   <li><a href="21440">䉘</a></li>
                                   <li><a href="21441">䉙</a></li>
                                   <li><a href="21442">䉚</a></li>
                                   <li><a href="21451">䉣</a></li>
                                   <li><a href="21511">䊣</a></li>
                                   <li><a href="21512">䊤</a></li>
                                   <li><a href="21514">䊦</a></li>
                                   <li><a href="21515">䊧</a></li>
                                   <li><a href="21516">䊨</a></li>
                                   <li><a href="21517">䊩</a></li>
                                   <li><a href="21518">䊪</a></li>
                                   <li><a href="21608">䌑</a></li>
                                   <li><a href="21612">䌖</a></li>
                                   <li><a href="21613">䌗</a></li>
                                   <li><a href="21614">䌘</a></li>
                                   <li><a href="21615">䌙</a></li>
                                   <li><a href="21616">䌚</a></li>
                                   <li><a href="21617">䌛</a></li>
                                   <li><a href="21669">䍣</a></li>
                                   <li><a href="21690">䍻</a></li>
                                   <li><a href="21717">䎖</a></li>
                                   <li><a href="21718">䎗</a></li>
                                   <li><a href="21736">䎰</a></li>
                                   <li><a href="21758">䏈</a></li>
                                   <li><a href="21843">䐶</a></li>
                                   <li><a href="21857">䑄</a></li>
                                   <li><a href="21903">䒆</a></li>
                                   <li><a href="21904">䒈</a></li>
                                   <li><a href="21911">䒏</a></li>
                                   <li><a href="22061">䕠</a></li>
                                   <li><a href="22062">䕢</a></li>
                                   <li><a href="22064">䕤</a></li>
                                   <li><a href="22065">䕥</a></li>
                                   <li><a href="22105">䖚</a></li>
                                   <li><a href="22106">䖛</a></li>
                                   <li><a href="22168">䗯</a></li>
                                   <li><a href="22170">䗱</a></li>
                                   <li><a href="22172">䗳</a></li>
                                   <li><a href="22257">䙤</a></li>
                                   <li><a href="22258">䙦</a></li>
                                   <li><a href="22288">䚍</a></li>
                                   <li><a href="22289">䚎</a></li>
                                   <li><a href="22311">䚧</a></li>
                                   <li><a href="22391">䜃</a></li>
                                   <li><a href="22392">䜅</a></li>
                                   <li><a href="22393">䜆</a></li>
                                   <li><a href="22394">䜇</a></li>
                                   <li><a href="22395">䜈</a></li>
                                   <li><a href="22396">䜉</a></li>
                                   <li><a href="22397">䜊</a></li>
                                   <li><a href="22420">䜱</a></li>
                                   <li><a href="22434">䝂</a></li>
                                   <li><a href="22445">䝏</a></li>
                                   <li><a href="22458">䝡</a></li>
                                   <li><a href="22459">䝢</a></li>
                                   <li><a href="22491">䞇</a></li>
                                   <li><a href="22537">䟁</a></li>
                                   <li><a href="22538">䟂</a></li>
                                   <li><a href="22539">䟃</a></li>
                                   <li><a href="22540">䟄</a></li>
                                   <li><a href="22541">䟅</a></li>
                                   <li><a href="22615">䠚</a></li>
                                   <li><a href="22619">䠟</a></li>
                                   <li><a href="22620">䠠</a></li>
                                   <li><a href="22621">䠡</a></li>
                                   <li><a href="22685">䡫</a></li>
                                   <li><a href="22686">䡬</a></li>
                                   <li><a href="22687">䡭</a></li>
                                   <li><a href="22688">䡯</a></li>
                                   <li><a href="22689">䡰</a></li>
                                   <li><a href="22690">䡱</a></li>
                                   <li><a href="22811">䤍</a></li>
                                   <li><a href="22854">䤽</a></li>
                                   <li><a href="22855">䤾</a></li>
                                   <li><a href="22856">䥀</a></li>
                                   <li><a href="22857">䥁</a></li>
                                   <li><a href="22858">䥂</a></li>
                                   <li><a href="22859">䥃</a></li>
                                   <li><a href="22860">䥄</a></li>
                                   <li><a href="22861">䥅</a></li>
                                   <li><a href="22862">䥆</a></li>
                                   <li><a href="22863">䥈</a></li>
                                   <li><a href="22907">䦋</a></li>
                                   <li><a href="22938">䦯</a></li>
                                   <li><a href="23003">䨃</a></li>
                                   <li><a href="23033">䨥</a></li>
                                   <li><a href="23034">䨦</a></li>
                                   <li><a href="23035">䨪</a></li>
                                   <li><a href="23093">䩰</a></li>
                                   <li><a href="23094">䩱</a></li>
                                   <li><a href="23095">䩲</a></li>
                                   <li><a href="23096">䩳</a></li>
                                   <li><a href="23097">䩴</a></li>
                                   <li><a href="23098">䩵</a></li>
                                   <li><a href="23099">䩶</a></li>
                                   <li><a href="23101">䩸</a></li>
                                   <li><a href="23126">䪕</a></li>
                                   <li><a href="23144">䪭</a></li>
                                   <li><a href="23175">䫔</a></li>
                                   <li><a href="23176">䫕</a></li>
                                   <li><a href="23177">䫖</a></li>
                                   <li><a href="23178">䫗</a></li>
                                   <li><a href="23179">䫘</a></li>
                                   <li><a href="23180">䫚</a></li>
                                   <li><a href="23181">䫛</a></li>
                                   <li><a href="23182">䫜</a></li>
                                   <li><a href="23231">䬑</a></li>
                                   <li><a href="23232">䬓</a></li>
                                   <li><a href="23233">䬔</a></li>
                                   <li><a href="23234">䬕</a></li>
                                   <li><a href="23235">䬖</a></li>
                                   <li><a href="23236">䬗</a></li>
                                   <li><a href="23268">䭆</a></li>
                                   <li><a href="23269">䭈</a></li>
                                   <li><a href="23271">䭌</a></li>
                                   <li><a href="23272">䭍</a></li>
                                   <li><a href="23273">䭎</a></li>
                                   <li><a href="23293">䭭</a></li>
                                   <li><a href="23329">䮓</a></li>
                                   <li><a href="23330">䮔</a></li>
                                   <li><a href="23331">䮕</a></li>
                                   <li><a href="23332">䮖</a></li>
                                   <li><a href="23333">䮗</a></li>
                                   <li><a href="23334">䮘</a></li>
                                   <li><a href="23335">䮙</a></li>
                                   <li><a href="23336">䮚</a></li>
                                   <li><a href="23337">䮛</a></li>
                                   <li><a href="23389">䯜</a></li>
                                   <li><a href="23416">䯽</a></li>
                                   <li><a href="23417">䯾</a></li>
                                   <li><a href="23418">䯿</a></li>
                                   <li><a href="23419">䰁</a></li>
                                   <li><a href="23420">䰂</a></li>
                                   <li><a href="23447">䰤</a></li>
                                   <li><a href="23448">䰦</a></li>
                                   <li><a href="23449">䰧</a></li>
                                   <li><a href="23471">䱏</a></li>
                                   <li><a href="23472">䱑</a></li>
                                   <li><a href="23473">䱓</a></li>
                                   <li><a href="23474">䱕</a></li>
                                   <li><a href="23475">䱖</a></li>
                                   <li><a href="23476">䱘</a></li>
                                   <li><a href="23557">䳕</a></li>
                                   <li><a href="23558">䳖</a></li>
                                   <li><a href="23559">䳗</a></li>
                                   <li><a href="23560">䳙</a></li>
                                   <li><a href="23561">䳚</a></li>
                                   <li><a href="23562">䳛</a></li>
                                   <li><a href="23604">䴛</a></li>
                                   <li><a href="23612">䴦</a></li>
                                   <li><a href="23624">䴶</a></li>
                                   <li><a href="23625">䴷</a></li>
                                   <li><a href="23640">䵋</a></li>
                                   <li><a href="23662">䵤</a></li>
                                   <li><a href="23663">䵥</a></li>
                                   <li><a href="23664">䵦</a></li>
                                   <li><a href="23665">䵧</a></li>
                                   <li><a href="23680">䵶</a></li>
                                   <li><a href="23684">䵽</a></li>
                                   <li><a href="23685">䵾</a></li>
                                   <li><a href="23686">䵿</a></li>
                                   <li><a href="23692">䶋</a></li>
                                   <li><a href="23700">䶔</a></li>
                                   <li><a href="23881">㘎</a></li>
                                   <li><a href="23921">嚝</a></li>
                                   <li><a href="23976">幯</a></li>
                                   <li><a href="24036">濹</a></li>
                                   <li><a href="24037">瀇</a></li>
                                   <li><a href="24038">瀐</a></li>
                                   <li><a href="24039">瀓</a></li>
                                   <li><a href="24059">爇</a></li>
                                   <li><a href="24061">爗</a></li>
                                   <li><a href="24075">癐</a></li>
                                   <li><a href="24129">藴</a></li>
                                   <li><a href="24134">蠂</a></li>
                                   <li><a href="24144">趩</a></li>
                                   <li><a href="24153">邈</a></li>
                                   <li><a href="24173">馧</a></li>
                                   <li><a href="24217">㦢</a></li>
                                   <li><a href="24231">㬧</a></li>
                                   <li><a href="24240">㲊</a></li>
                                   <li><a href="24248">㵾</a></li>
                                   <li><a href="24249">㶀</a></li>
                                   <li><a href="24274">䄠</a></li>
                                   <li><a href="24280">䈧</a></li>
                                   <li><a href="24314">䕞</a></li>
                                   <li><a href="24342">䢰</a></li>
                                   <li><a href="24347">䨨</a></li>
                                   <li><a href="24349">䫝</a></li>
                                   <li><a href="24358">䭉</a></li>
                                   <li><a href="24359">䭋</a></li>
                                   <li><a href="24386">禭</a></li>
                                   <li><a href="24960">嚡</a></li>
                                   <li><a href="24961">嚤</a></li>
                                   <li><a href="25024">夑</a></li>
                                   <li><a href="25034">奰</a></li>
                                   <li><a href="25258">懳</a></li>
                                   <li><a href="25585">鞯</a></li>
                                   <li><a href="25650">餷</a></li>
                                   <li><a href="25824">癝</a></li>
                                   <li><a href="25842">矂</a></li>
                                   <li><a href="25905">礡</a></li>
                                   <li><a href="25962">簮</a></li>
                                   <li><a href="25963">簯</a></li>
                                   <li><a href="25964">簰</a></li>
                                   <li><a href="25965">簲</a></li>
                                   <li><a href="26040">鯍</a></li>
                                   <li><a href="26047">鯓</a></li>
                                   <li><a href="26154">黡</a></li>
                                   <li><a href="26215">龲</a></li>
                                   <li><a href="26269">罉</a></li>
                                   <li><a href="26322">膥</a></li>
                                   <li><a href="26491">㔐</a></li>
                                   <li><a href="26514">藔</a></li>
                                   <li><a href="26515">藞</a></li>
                                   <li><a href="26516">藲</a></li>
                                   <li><a href="26517">藵</a></li>
                                   <li><a href="26677">㙽</a></li>
                                   <li><a href="26863">躀</a></li>
                                   <li><a href="26918">㠞</a></li>
                                   <li><a href="26919">㠟</a></li>
                                   <li><a href="27142">鎼</a></li>
                                   <li><a href="27145">鎽</a></li>
                                   <li><a href="27180">㩫</a></li>
                                   <li><a href="27185">㪫</a></li>
                                   <li><a href="27201">㬨</a></li>
                                   <li><a href="27245">㯹</a></li>
                                   <li><a href="27322">㶂</a></li>
                                   <li><a href="27323">㶃</a></li>
                                   <li><a href="27410">䲢</a></li>
                                   <li><a href="27433">䭏</a></li>
                                   <li><a href="27441">䨧</a></li>
                                   <li><a href="27459">䥇</a></li>
                                   <li><a href="27528">䙩</a></li>
                                   <li><a href="27566">䒇</a></li>
                                   <li><a href="27610">䆇</a></li>
                                   <li><a href="27611">䆆</a></li>
                                   <li><a href="27636">䂋</a></li>
                                   <li><a href="27648">㿐</a></li>
                                   <li><a href="27681">櫊</a></li>
                                   <li><a href="27706">𣝣</a></li>
                                   <li><a href="27727">𠧋</a></li>
                                   <li><a href="27755">𩸽</a></li>
                                   <li><a href="27870">𣝤</a></li>
                                   <li><a href="27882">𩈲</a></li>
                                   <li><a href="27883">𩈳</a></li>
                                   <li><a href="27884">𩔊</a></li>
                                   <li><a href="27890">𤂖</a></li>
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