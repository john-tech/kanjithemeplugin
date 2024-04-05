<?php
/*
 * Template Name: kakusu19
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
               <h1 class="ttl_main">１９画の漢字一覧（漢検級順）</h1>

               <p>総画数１９画の漢字の一覧です。<br>
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
                                   <option value="kakusu18">１８画</option>
                                   <option value="#" selected>１９画</option>
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
                              <li><a href="bkakusu19">部首別順</a></li>
                              <li><a href="ckakusu19">読み順</a></li>
                         </ul>
                         <ul class="search_menu2">
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
                         <div class="parts_box" id="parts07">
                              <h3 class="ttl_while"><a href="kyu07">漢字検定７級（小学校４年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/468">願</a></li>
                                   <li><a class="color1" href="kanji/483">鏡</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts06">
                              <h3 class="ttl_while"><a href="kyu06">漢字検定６級（小学校５年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="724">識</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts05">
                              <h3 class="ttl_while"><a href="kyu05">漢字検定５級（小学校６年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="855">警</a></li>
                                   <li><a class="color1" href="935">臓</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts04">
                              <h3 class="ttl_while"><a href="kyu04">漢字検定４級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1076">繰</a>
                                   </li>
                                   <li><a class="color1" href="1231">爆</a>
                                   </li>
                                   <li><a class="color1" href="1282">霧</a>
                                   </li>
                                   <li><a class="color1" href="1309">麗</a>
                                   </li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts03">
                              <h3 class="ttl_while"><a href="kyu03">漢字検定３級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1381">鶏</a>
                                   </li>
                                   <li><a class="color1" href="1387">鯨</a>
                                   </li>
                                   <li><a class="color1" href="1462">髄</a>
                                   </li>
                                   <li><a class="color1" href="1463">瀬</a>
                                   </li>
                                   <li><a class="color1" href="1552">簿</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02j">
                              <h3 class="ttl_while"><a href="kyu02j">漢字検定準２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1608">韻</a>
                                   </li>
                                   <li><a class="color1" href="1712">璽</a>
                                   </li>
                                   <li><a class="color1" href="1797">藻</a>
                                   </li>
                                   <li><a class="color1" href="1854">覇</a>
                                   </li>
                                   <li><a class="color1" href="1875">譜</a>
                                   </li>
                                   <li><a class="color1" href="1920">羅</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02">
                              <h3 class="ttl_while"><a href="kyu02">漢字検定２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1953">艶</a>
                                   </li>
                                   <li><a class="color1" href="2025">蹴</a>
                                   </li>
                                   <li><a class="color1" href="2132">麓</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01j">
                              <h3 class="ttl_while"><a href="kyu01j">漢字検定準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="2230">蟹</a>
                                   </li>
                                   <li><a href="2269">贋</a></li>
                                   <li><a class="color2" href="2284">麒</a>
                                   </li>
                                   <li><a href="2287">蟻</a></li>
                                   <li><a href="2370">鹸</a></li>
                                   <li><a class="color2" href="2487">櫛</a>
                                   </li>
                                   <li><a href="2546">藷</a></li>
                                   <li><a href="2581">鯖</a></li>
                                   <li><a href="2585">瀞</a></li>
                                   <li><a class="color2" href="2610">蘇</a>
                                   </li>
                                   <li><a href="2623">蘂</a></li>
                                   <li><a href="2674">鯵</a></li>
                                   <li><a href="2684">騨</a></li>
                                   <li><a href="2728">瀦</a></li>
                                   <li><a class="color2" href="2735">寵</a>
                                   </li>
                                   <li><a class="color2" href="2745">鯛</a>
                                   </li>
                                   <li><a class="color2" href="2759">禰</a>
                                   </li>
                                   <li><a href="2762">鏑</a></li>
                                   <li><a href="2765">轍</a></li>
                                   <li><a href="2773">顛</a></li>
                                   <li><a href="2815">簸</a></li>
                                   <li><a class="color2" href="2831">曝</a>
                                   </li>
                                   <li><a class="color2" href="2870">瀕</a>
                                   </li>
                                   <li><a href="2883">鵡</a></li>
                                   <li><a class="color2" href="2918">鵬</a>
                                   </li>
                                   <li><a href="2958">蠅</a></li>
                                   <li><a class="color2" href="2965">蘭</a>
                                   </li>
                                   <li><a href="3000">礪</a></li>
                                   <li><a class="color2" href="3007">簾</a>
                                   </li>
                                   <li><a class="color2" href="3011">櫓</a>
                                   </li>
                                   <li><a href="5657">蠏</a></li>
                                   <li><a class="color2" href="6451">禱</a>
                                   </li>
                                   <li><a class="color2" href="6454">繡</a>
                                   </li>
                                   <li><a class="color2" href="6455">繫</a>
                                   </li>
                                   <li><a class="color2" href="6464">顚</a>
                                   </li>
                                   <li><a href="6472">麴</a></li>
                                   <li><a href="6482">醱</a></li>
                                   <li><a href="27693">簾</a></li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts01">
                              <h3 class="ttl_while"><a href="kyu01">漢字検定１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="3314">嚥</a></li>
                                   <li><a href="3315">嚮</a></li>
                                   <li><a href="3356">壜</a></li>
                                   <li><a href="3357">壟</a></li>
                                   <li><a href="3415">嬾</a></li>
                                   <li><a href="3513">廬</a></li>
                                   <li><a href="3635">懶</a></li>
                                   <li><a href="3740">攀</a></li>
                                   <li><a href="3795">黼</a></li>
                                   <li><a href="3816">鵲</a></li>
                                   <li><a href="3817">鶉</a></li>
                                   <li><a href="3818">鵺</a></li>
                                   <li><a href="3819">鶇</a></li>
                                   <li><a href="3820">鵯</a></li>
                                   <li><a href="3868">鯣</a></li>
                                   <li><a href="3869">鯢</a></li>
                                   <li><a href="3870">鯤</a></li>
                                   <li><a href="3871">鯲</a></li>
                                   <li><a href="3872">鯡</a></li>
                                   <li><a href="3873">鯔</a></li>
                                   <li><a href="3874">鯱</a></li>
                                   <li><a href="3875">鯰</a></li>
                                   <li><a href="3926">曠</a></li>
                                   <li><a href="3989">霪</a></li>
                                   <li><a href="4104">蠍</a></li>
                                   <li><a href="4105">蟾</a></li>
                                   <li><a href="4106">蟶</a></li>
                                   <li><a href="4107">蟷</a></li>
                                   <li><a href="4108">蠖</a></li>
                                   <li><a href="4201">櫟</a></li>
                                   <li><a href="4203">檻</a></li>
                                   <li><a href="4204">櫚</a></li>
                                   <li><a href="4287">蹶</a></li>
                                   <li><a href="4288">蹲</a></li>
                                   <li><a href="4289">蹼</a></li>
                                   <li><a href="4293">躇</a></li>
                                   <li><a href="4316">臘</a></li>
                                   <li><a href="4450">瀚</a></li>
                                   <li><a href="4451">瀛</a></li>
                                   <li><a href="4452">瀝</a></li>
                                   <li><a href="4453">瀟</a></li>
                                   <li><a href="4482">轎</a></li>
                                   <li><a href="4503">騙</a></li>
                                   <li><a href="4559">麕</a></li>
                                   <li><a href="4560">麑</a></li>
                                   <li><a href="4599">簷</a></li>
                                   <li><a href="4600">簽</a></li>
                                   <li><a href="4601">簫</a></li>
                                   <li><a href="4606">籀</a></li>
                                   <li><a href="4679">礙</a></li>
                                   <li><a href="4718">鏖</a></li>
                                   <li><a href="4719">鏘</a></li>
                                   <li><a href="4720">鏈</a></li>
                                   <li><a href="4721">鏤</a></li>
                                   <li><a href="4722">鏨</a></li>
                                   <li><a href="4723">鏃</a></li>
                                   <li><a href="4724">鏝</a></li>
                                   <li><a href="4725">鏐</a></li>
                                   <li><a href="4812">繹</a></li>
                                   <li><a href="4837">犢</a></li>
                                   <li><a href="4849">醯</a></li>
                                   <li><a href="4883">牘</a></li>
                                   <li><a href="4893">艤</a></li>
                                   <li><a href="4894">艢</a></li>
                                   <li><a href="4895">艨</a></li>
                                   <li><a href="4943">爍</a></li>
                                   <li><a href="5002">譌</a></li>
                                   <li><a href="5003">譚</a></li>
                                   <li><a href="5004">譏</a></li>
                                   <li><a href="5005">譎</a></li>
                                   <li><a href="5007">譛</a></li>
                                   <li><a href="5067">襞</a></li>
                                   <li><a href="5068">襦</a></li>
                                   <li><a href="5074">襪</a></li>
                                   <li><a href="5080">覈</a></li>
                                   <li><a href="5096">鞴</a></li>
                                   <li><a href="5124">獺</a></li>
                                   <li><a href="5131">羹</a></li>
                                   <li><a href="5132">羶</a></li>
                                   <li><a href="5133">羸</a></li>
                                   <li><a href="5198">隴</a></li>
                                   <li><a href="5289">饂</a></li>
                                   <li><a href="5290">餽</a></li>
                                   <li><a href="5291">餾</a></li>
                                   <li><a href="5311">殱</a></li>
                                   <li><a href="5321">韲</a></li>
                                   <li><a href="5364">靡</a></li>
                                   <li><a href="5438">蘊</a></li>
                                   <li><a href="5439">藾</a></li>
                                   <li><a href="5440">蘢</a></li>
                                   <li><a href="5441">藺</a></li>
                                   <li><a href="5442">藹</a></li>
                                   <li><a href="5443">蘋</a></li>
                                   <li><a href="5444">蘆</a></li>
                                   <li><a href="5453">疇</a></li>
                                   <li><a href="5455">疆</a></li>
                                   <li><a href="5492">贇</a></li>
                                   <li><a href="5596">羆</a></li>
                                   <li><a href="6681">龐</a></li>
                                   <li><a href="6999">鰙</a></li>
                                   <li><a href="7146">鶍</a></li>
                                   <li><a href="7154">鶎</a></li>
                                   <li><a href="7167">鶄</a></li>
                                   <li><a href="8431">蹻</a></li>
                                   <li><a href="9141">繳</a></li>
                                   <li><a href="9949">蠊</a></li>
                                   <li><a href="12332">儳</a></li>
                                   <li><a href="12341">嚬</a></li>
                                   <li><a href="12346">歠</a></li>
                                   <li><a href="12353">孼</a></li>
                                   <li><a href="12354">孽</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts0101j">
                              <h3 class="ttl_while"><a href="kyu0101j">漢字検定１級 / 準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="5699">證</a></li>
                                   <li><a href="5780">邊</a></li>
                                   <li><a href="5842">勸</a></li>
                                   <li><a class="color2" href="5858">獸</a>
                                   </li>
                                   <li><a href="5885">關</a></li>
                                   <li><a class="color2" href="6067">瀧</a>
                                   </li>
                                   <li><a class="color2" href="6091">懷</a>
                                   </li>
                                   <li><a href="6094">繪</a></li>
                                   <li><a href="6095">繩</a></li>
                                   <li><a class="color2" href="6151">壞</a>
                                   </li>
                                   <li><a href="6262">癡</a></li>
                                   <li><a href="6269">穩</a></li>
                                   <li><a href="6327">贊</a></li>
                                   <li><a href="6330">辭</a></li>
                                   <li><a class="color2" href="6364">類</a>
                                   </li>
                                   <li><a class="color2" href="6384">懲</a>
                                   </li>
                                   <li><a class="color2" href="6415">贈</a>
                                   </li>
                                   <li><a class="color2" href="6417">難</a>
                                   </li>
                                   <li><a class="color2" href="6423">瀨</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts">
                              <h3 class="ttl_while">漢字検定対象外</h3>
                              <ul class="search_parts">
                                   <li><a href="5751">瀘</a></li>
                                   <li><a href="5983">蘓</a></li>
                                   <li><a href="5999">鏥</a></li>
                                   <li><a href="6120">寳</a></li>
                                   <li><a href="6139">軅</a></li>
                                   <li><a href="6225">櫞</a></li>
                                   <li><a href="6226">櫑</a></li>
                                   <li><a href="6242">濳</a></li>
                                   <li><a href="6553">黣</a></li>
                                   <li><a href="6567">鼃</a></li>
                                   <li><a href="6568">䵷</a></li>
                                   <li><a href="6579">鼗</a></li>
                                   <li><a href="6629">䶅</a></li>
                                   <li><a href="6648">齁</a></li>
                                   <li><a href="6658">齍</a></li>
                                   <li><a href="6660">䪡</a></li>
                                   <li><a href="6663">齖</a></li>
                                   <li><a href="6664">齘</a></li>
                                   <li><a href="6665">齗</a></li>
                                   <li><a href="6680">龏</a></li>
                                   <li><a href="6747">騢</a></li>
                                   <li><a href="6748">騧</a></li>
                                   <li><a href="6749">騞</a></li>
                                   <li><a href="6750">騤</a></li>
                                   <li><a href="6751">䮝</a></li>
                                   <li><a href="6752">騚</a></li>
                                   <li><a href="6753">騣</a></li>
                                   <li><a href="6755">騠</a></li>
                                   <li><a href="6756">騖</a></li>
                                   <li><a href="6764">騘</a></li>
                                   <li><a href="6779">蘎</a></li>
                                   <li><a href="6802">髂</a></li>
                                   <li><a href="6803">髃</a></li>
                                   <li><a href="6841">鬍</a></li>
                                   <li><a href="6842">鬋</a></li>
                                   <li><a href="6843">鬉</a></li>
                                   <li><a href="6844">鬌</a></li>
                                   <li><a href="6845">鬎</a></li>
                                   <li><a href="6858">㲱</a></li>
                                   <li><a href="6864">䦰</a></li>
                                   <li><a href="6868">鬷</a></li>
                                   <li><a href="6961">鯘</a></li>
                                   <li><a href="6972">䱤</a></li>
                                   <li><a href="6973">鯕</a></li>
                                   <li><a href="6974">䱡</a></li>
                                   <li><a href="6975">䱟</a></li>
                                   <li><a href="6976">鯝</a></li>
                                   <li><a href="6977">䱜</a></li>
                                   <li><a href="6978">鯞</a></li>
                                   <li><a href="6979">䱙</a></li>
                                   <li><a href="6980">鯧</a></li>
                                   <li><a href="6982">鯗</a></li>
                                   <li><a href="6984">鯜</a></li>
                                   <li><a href="6985">鯳</a></li>
                                   <li><a href="6986">鯯</a></li>
                                   <li><a href="6987">䱥</a></li>
                                   <li><a href="6988">鯫</a></li>
                                   <li><a href="6989">鯮</a></li>
                                   <li><a href="6991">鯟</a></li>
                                   <li><a href="6992">鯥</a></li>
                                   <li><a href="6993">鯪</a></li>
                                   <li><a href="6994">鯩</a></li>
                                   <li><a href="7119">鶓</a></li>
                                   <li><a href="7143">鵪</a></li>
                                   <li><a href="7145">䨄</a></li>
                                   <li><a href="7147">鵷</a></li>
                                   <li><a href="7150">鵸</a></li>
                                   <li><a href="7152">䳢</a></li>
                                   <li><a href="7155">鶋</a></li>
                                   <li><a href="7157">鶌</a></li>
                                   <li><a href="7159">鶂</a></li>
                                   <li><a href="7160">鶃</a></li>
                                   <li><a href="7161">鵳</a></li>
                                   <li><a href="7162">鵼</a></li>
                                   <li><a href="7163">鶊</a></li>
                                   <li><a href="7164">鵾</a></li>
                                   <li><a href="7166">鵻</a></li>
                                   <li><a href="7168">鵫</a></li>
                                   <li><a href="7169">鵽</a></li>
                                   <li><a href="7170">鵰</a></li>
                                   <li><a href="7171">鵩</a></li>
                                   <li><a href="7172">䳤</a></li>
                                   <li><a href="7173">鶆</a></li>
                                   <li><a href="7175">鵹</a></li>
                                   <li><a href="7251">麖</a></li>
                                   <li><a href="7269">䴹</a></li>
                                   <li><a href="7271">䴺</a></li>
                                   <li><a href="7272">麳</a></li>
                                   <li><a href="7297">鞵</a></li>
                                   <li><a href="7301">䶀</a></li>
                                   <li><a href="7320">鞲</a></li>
                                   <li><a href="7322">鞶</a></li>
                                   <li><a href="7327">鞾</a></li>
                                   <li><a href="7349">韙</a></li>
                                   <li><a href="7350">韗</a></li>
                                   <li><a href="7351">䪗</a></li>
                                   <li><a href="7352">韘</a></li>
                                   <li><a href="7355">鞱</a></li>
                                   <li><a href="7411">顗</a></li>
                                   <li><a href="7412">顖</a></li>
                                   <li><a href="7415">顙</a></li>
                                   <li><a href="7439">颽</a></li>
                                   <li><a href="7440">颼</a></li>
                                   <li><a href="7442">颿</a></li>
                                   <li><a href="7443">颻</a></li>
                                   <li><a href="7444">䬙</a></li>
                                   <li><a href="7449">飀</a></li>
                                   <li><a href="7494">餼</a></li>
                                   <li><a href="7495">餻</a></li>
                                   <li><a href="7496">饀</a></li>
                                   <li><a href="7497">餹</a></li>
                                   <li><a href="7498">餺</a></li>
                                   <li><a href="7499">饁</a></li>
                                   <li><a href="7520">馦</a></li>
                                   <li><a href="7674">鏠</a></li>
                                   <li><a href="7690">䥓</a></li>
                                   <li><a href="7754">鏁</a></li>
                                   <li><a href="7777">鏆</a></li>
                                   <li><a href="7778">鏹</a></li>
                                   <li><a href="7779">鏊</a></li>
                                   <li><a href="7780">鎩</a></li>
                                   <li><a href="7781">鏙</a></li>
                                   <li><a href="7782">鏟</a></li>
                                   <li><a href="7783">鏅</a></li>
                                   <li><a href="7784">鏱</a></li>
                                   <li><a href="7785">鏦</a></li>
                                   <li><a href="7786">鏚</a></li>
                                   <li><a href="7787">鏇</a></li>
                                   <li><a href="7788">鏩</a></li>
                                   <li><a href="7789">鏉</a></li>
                                   <li><a href="7790">鏓</a></li>
                                   <li><a href="7792">鏄</a></li>
                                   <li><a href="7793">鏜</a></li>
                                   <li><a href="7795">鏋</a></li>
                                   <li><a href="7796">鏢</a></li>
                                   <li><a href="7797">鏞</a></li>
                                   <li><a href="7799">鏍</a></li>
                                   <li><a href="7800">鏧</a></li>
                                   <li><a href="7900">闚</a></li>
                                   <li><a href="7901">闙</a></li>
                                   <li><a href="7902">闝</a></li>
                                   <li><a href="7993">䨮</a></li>
                                   <li><a href="8015">霨</a></li>
                                   <li><a href="8016">霩</a></li>
                                   <li><a href="8017">霫</a></li>
                                   <li><a href="8052">覵</a></li>
                                   <li><a href="8053">覸</a></li>
                                   <li><a href="8054">覷</a></li>
                                   <li><a href="8055">覴</a></li>
                                   <li><a href="8056">覶</a></li>
                                   <li><a href="8067">觵</a></li>
                                   <li><a href="8074">觶</a></li>
                                   <li><a href="8194">譆</a></li>
                                   <li><a href="8195">譑</a></li>
                                   <li><a href="8196">譃</a></li>
                                   <li><a href="8197">䜘</a></li>
                                   <li><a href="8198">譓</a></li>
                                   <li><a href="8199">譙</a></li>
                                   <li><a href="8200">譔</a></li>
                                   <li><a href="8201">譂</a></li>
                                   <li><a href="8202">譄</a></li>
                                   <li><a href="8203">譈</a></li>
                                   <li><a href="8204">譒</a></li>
                                   <li><a href="8205">䜌</a></li>
                                   <li><a href="8228">譋</a></li>
                                   <li><a href="8242">豃</a></li>
                                   <li><a href="8272">豶</a></li>
                                   <li><a href="8325">賾</a></li>
                                   <li><a href="8326">贉</a></li>
                                   <li><a href="8327">贎</a></li>
                                   <li><a href="8353">趫</a></li>
                                   <li><a href="8354">趬</a></li>
                                   <li><a href="8355">趭</a></li>
                                   <li><a href="8433">蹺</a></li>
                                   <li><a href="8434">蹷</a></li>
                                   <li><a href="8435">蹵</a></li>
                                   <li><a href="8436">蹱</a></li>
                                   <li><a href="8437">蹭</a></li>
                                   <li><a href="8438">蹪</a></li>
                                   <li><a href="8439">䠧</a></li>
                                   <li><a href="8440">蹬</a></li>
                                   <li><a href="8441">蹹</a></li>
                                   <li><a href="8442">蹳</a></li>
                                   <li><a href="8443">蹯</a></li>
                                   <li><a href="8444">蹩</a></li>
                                   <li><a href="8445">䠥</a></li>
                                   <li><a href="8449">躉</a></li>
                                   <li><a href="8452">蹮</a></li>
                                   <li><a href="8454">蹰</a></li>
                                   <li><a href="8472">軃</a></li>
                                   <li><a href="8474">軂</a></li>
                                   <li><a href="8532">轏</a></li>
                                   <li><a href="8533">轓</a></li>
                                   <li><a href="8534">轐</a></li>
                                   <li><a href="8536">轑</a></li>
                                   <li><a href="8537">轕</a></li>
                                   <li><a href="8541">轒</a></li>
                                   <li><a href="8553">辴</a></li>
                                   <li><a href="8623">邋</a></li>
                                   <li><a href="8624">邌</a></li>
                                   <li><a href="8765">醮</a></li>
                                   <li><a href="8766">醰</a></li>
                                   <li><a href="8767">醭</a></li>
                                   <li><a href="8915">簳</a></li>
                                   <li><a href="8916">簺</a></li>
                                   <li><a href="8918">簹</a></li>
                                   <li><a href="8919">簬</a></li>
                                   <li><a href="8920">簵</a></li>
                                   <li><a href="8921">簶</a></li>
                                   <li><a href="8922">簴</a></li>
                                   <li><a href="8926">籅</a></li>
                                   <li><a href="8927">籆</a></li>
                                   <li><a href="8928">䉤</a></li>
                                   <li><a href="8982">糩</a></li>
                                   <li><a href="8983">糫</a></li>
                                   <li><a href="8985">穤</a></li>
                                   <li><a href="9138">繲</a></li>
                                   <li><a href="9139">繮</a></li>
                                   <li><a href="9140">繯</a></li>
                                   <li><a href="9142">繸</a></li>
                                   <li><a href="9143">繵</a></li>
                                   <li><a href="9145">䙧</a></li>
                                   <li><a href="9164">罋</a></li>
                                   <li><a href="9165">甖</a></li>
                                   <li><a href="9244">翽</a></li>
                                   <li><a href="9245">翾</a></li>
                                   <li><a href="9290">軄</a></li>
                                   <li><a href="9322">舚</a></li>
                                   <li><a href="9351">艧</a></li>
                                   <li><a href="9352">艣</a></li>
                                   <li><a href="9540">藼</a></li>
                                   <li><a href="9541">蘐</a></li>
                                   <li><a href="9664">蘍</a></li>
                                   <li><a href="9706">䕨</a></li>
                                   <li><a href="9713">藿</a></li>
                                   <li><a href="9714">蘄</a></li>
                                   <li><a href="9715">蘁</a></li>
                                   <li><a href="9716">蘅</a></li>
                                   <li><a href="9718">蘀</a></li>
                                   <li><a href="9719">蘑</a></li>
                                   <li><a href="9721">蘉</a></li>
                                   <li><a href="9722">䕲</a></li>
                                   <li><a href="9723">藶</a></li>
                                   <li><a href="9745">蘒</a></li>
                                   <li><a href="9940">蠁</a></li>
                                   <li><a href="9942">蟿</a></li>
                                   <li><a href="9943">蠉</a></li>
                                   <li><a href="9944">蟕</a></li>
                                   <li><a href="9945">蠋</a></li>
                                   <li><a href="9946">蟺</a></li>
                                   <li><a href="9954">蠓</a></li>
                                   <li><a href="9955">蠃</a></li>
                                   <li><a href="9961">蟸</a></li>
                                   <li><a href="9969">蟰</a></li>
                                   <li><a href="10089">襣</a></li>
                                   <li><a href="10251">璺</a></li>
                                   <li><a href="10253">瓋</a></li>
                                   <li><a href="10254">瓄</a></li>
                                   <li><a href="10255">瓈</a></li>
                                   <li><a href="10261">瓉</a></li>
                                   <li><a href="10325">曡</a></li>
                                   <li><a href="10438">㿊</a></li>
                                   <li><a href="10449">癠</a></li>
                                   <li><a href="10450">癟</a></li>
                                   <li><a href="10492">䶌</a></li>
                                   <li><a href="10513">盬</a></li>
                                   <li><a href="10611">矎</a></li>
                                   <li><a href="10612">矃</a></li>
                                   <li><a href="10613">矉</a></li>
                                   <li><a href="10614">䁾</a></li>
                                   <li><a href="10770">礟</a></li>
                                   <li><a href="10892">穪</a></li>
                                   <li><a href="10893">穧</a></li>
                                   <li><a href="10894">穨</a></li>
                                   <li><a href="10925">竆</a></li>
                                   <li><a href="11017">懬</a></li>
                                   <li><a href="11018">懯</a></li>
                                   <li><a href="11178">㦧</a></li>
                                   <li><a href="11214">懻</a></li>
                                   <li><a href="11264">擥</a></li>
                                   <li><a href="11514">攊</a></li>
                                   <li><a href="11516">攉</a></li>
                                   <li><a href="11517">攌</a></li>
                                   <li><a href="11518">攈</a></li>
                                   <li><a href="11520">攐</a></li>
                                   <li><a href="11521">攏</a></li>
                                   <li><a href="11529">攑</a></li>
                                   <li><a href="11572">斄</a></li>
                                   <li><a href="11601">旜</a></li>
                                   <li><a href="11614">旝</a></li>
                                   <li><a href="11615">旞</a></li>
                                   <li><a href="11616">旟</a></li>
                                   <li><a href="11736">曟</a></li>
                                   <li><a href="11918">臋</a></li>
                                   <li><a href="11924">臖</a></li>
                                   <li><a href="11925">臕</a></li>
                                   <li><a href="12144">艥</a></li>
                                   <li><a href="12249">櫥</a></li>
                                   <li><a href="12295">櫜</a></li>
                                   <li><a href="12296">櫍</a></li>
                                   <li><a href="12297">櫏</a></li>
                                   <li><a href="12298">櫤</a></li>
                                   <li><a href="12299">櫝</a></li>
                                   <li><a href="12300">櫌</a></li>
                                   <li><a href="12301">櫖</a></li>
                                   <li><a href="12302">櫐</a></li>
                                   <li><a href="12324">櫕</a></li>
                                   <li><a href="12624">䑑</a></li>
                                   <li><a href="12665">儵</a></li>
                                   <li><a href="12666">儴</a></li>
                                   <li><a href="12814">劖</a></li>
                                   <li><a href="12831">勷</a></li>
                                   <li><a href="12930">殰</a></li>
                                   <li><a href="12995">匶</a></li>
                                   <li><a href="13203">厴</a></li>
                                   <li><a href="13571">嚚</a></li>
                                   <li><a href="13576">嚦</a></li>
                                   <li><a href="13577">嚧</a></li>
                                   <li><a href="13578">嚨</a></li>
                                   <li><a href="13579">嚩</a></li>
                                   <li><a href="13580">嚪</a></li>
                                   <li><a href="13581">嚫</a></li>
                                   <li><a href="13582">嚭</a></li>
                                   <li><a href="13583">嚯</a></li>
                                   <li><a href="13882">壚</a></li>
                                   <li><a href="13883">壛</a></li>
                                   <li><a href="13884">壢</a></li>
                                   <li><a href="13902">夓</a></li>
                                   <li><a href="14253">嬹</a></li>
                                   <li><a href="14257">嬽</a></li>
                                   <li><a href="14258">嬿</a></li>
                                   <li><a href="14328">寴</a></li>
                                   <li><a href="14376">屫</a></li>
                                   <li><a href="14586">巄</a></li>
                                   <li><a href="14662">幰</a></li>
                                   <li><a href="14793">徿</a></li>
                                   <li><a href="15046">攇</a></li>
                                   <li><a href="15047">攋</a></li>
                                   <li><a href="15048">攍</a></li>
                                   <li><a href="15049">攎</a></li>
                                   <li><a href="15074">斔</a></li>
                                   <li><a href="15314">櫋</a></li>
                                   <li><a href="15317">櫘</a></li>
                                   <li><a href="15319">櫠</a></li>
                                   <li><a href="15320">櫡</a></li>
                                   <li><a href="15321">櫢</a></li>
                                   <li><a href="15325">櫭</a></li>
                                   <li><a href="15392">氌</a></li>
                                   <li><a href="15942">瀖</a></li>
                                   <li><a href="15943">瀗</a></li>
                                   <li><a href="15944">瀙</a></li>
                                   <li><a href="15945">瀜</a></li>
                                   <li><a href="15946">瀠</a></li>
                                   <li><a href="15947">瀣</a></li>
                                   <li><a href="15948">瀤</a></li>
                                   <li><a href="15949">瀥</a></li>
                                   <li><a href="15950">瀩</a></li>
                                   <li><a href="15952">瀫</a></li>
                                   <li><a href="15955">瀳</a></li>
                                   <li><a href="16248">爁</a></li>
                                   <li><a href="16249">爂</a></li>
                                   <li><a href="16252">爅</a></li>
                                   <li><a href="16253">爈</a></li>
                                   <li><a href="16254">爊</a></li>
                                   <li><a href="16256">爌</a></li>
                                   <li><a href="16258">爑</a></li>
                                   <li><a href="16262">爕</a></li>
                                   <li><a href="16337">犣</a></li>
                                   <li><a href="16338">犤</a></li>
                                   <li><a href="16339">犥</a></li>
                                   <li><a href="16340">犦</a></li>
                                   <li><a href="16464">獹</a></li>
                                   <li><a href="16559">璷</a></li>
                                   <li><a href="16560">璼</a></li>
                                   <li><a href="16564">瓃</a></li>
                                   <li><a href="16565">瓅</a></li>
                                   <li><a href="16566">瓆</a></li>
                                   <li><a href="16567">瓇</a></li>
                                   <li><a href="16627">皩</a></li>
                                   <li><a href="16697">矄</a></li>
                                   <li><a href="16698">矅</a></li>
                                   <li><a href="16700">矊</a></li>
                                   <li><a href="16777">礗</a></li>
                                   <li><a href="16778">礘</a></li>
                                   <li><a href="16779">礝</a></li>
                                   <li><a href="16780">礣</a></li>
                                   <li><a href="16781">礤</a></li>
                                   <li><a href="16802">禲</a></li>
                                   <li><a href="16843">穦</a></li>
                                   <li><a href="16868">竵</a></li>
                                   <li><a href="16938">簼</a></li>
                                   <li><a href="16975">糪</a></li>
                                   <li><a href="17040">繗</a></li>
                                   <li><a href="17044">繬</a></li>
                                   <li><a href="17046">繴</a></li>
                                   <li><a href="17047">繷</a></li>
                                   <li><a href="17048">繺</a></li>
                                   <li><a href="17059">罊</a></li>
                                   <li><a href="17065">羄</a></li>
                                   <li><a href="17073">羷</a></li>
                                   <li><a href="17095">翷</a></li>
                                   <li><a href="17104">耯</a></li>
                                   <li><a href="17123">聸</a></li>
                                   <li><a href="17184">臩</a></li>
                                   <li><a href="17196">艡</a></li>
                                   <li><a href="17369">藖</a></li>
                                   <li><a href="17377">藮</a></li>
                                   <li><a href="17381">藸</a></li>
                                   <li><a href="17382">藽</a></li>
                                   <li><a href="17383">蘃</a></li>
                                   <li><a href="17384">蘈</a></li>
                                   <li><a href="17386">蘏</a></li>
                                   <li><a href="17512">蟽</a></li>
                                   <li><a href="17513">蠀</a></li>
                                   <li><a href="17514">蠄</a></li>
                                   <li><a href="17515">蠈</a></li>
                                   <li><a href="17516">蠌</a></li>
                                   <li><a href="17596">襥</a></li>
                                   <li><a href="17709">謿</a></li>
                                   <li><a href="17710">譀</a></li>
                                   <li><a href="17711">譇</a></li>
                                   <li><a href="17712">譊</a></li>
                                   <li><a href="17713">譐</a></li>
                                   <li><a href="17714">譕</a></li>
                                   <li><a href="17715">譗</a></li>
                                   <li><a href="17744">豷</a></li>
                                   <li><a href="17755">貚</a></li>
                                   <li><a href="17773">贆</a></li>
                                   <li><a href="17809">趪</a></li>
                                   <li><a href="17855">蹨</a></li>
                                   <li><a href="17856">蹫</a></li>
                                   <li><a href="17966">鄨</a></li>
                                   <li><a href="17973">酀</a></li>
                                   <li><a href="18098">鎥</a></li>
                                   <li><a href="18103">鏀</a></li>
                                   <li><a href="18104">鏂</a></li>
                                   <li><a href="18105">鏎</a></li>
                                   <li><a href="18106">鏏</a></li>
                                   <li><a href="18107">鏒</a></li>
                                   <li><a href="18108">鏔</a></li>
                                   <li><a href="18109">鏕</a></li>
                                   <li><a href="18110">鏛</a></li>
                                   <li><a href="18111">鏣</a></li>
                                   <li><a href="18112">鏪</a></li>
                                   <li><a href="18113">鏫</a></li>
                                   <li><a href="18114">鏬</a></li>
                                   <li><a href="18115">鏭</a></li>
                                   <li><a href="18116">鏮</a></li>
                                   <li><a href="18162">镽</a></li>
                                   <li><a href="18180">闛</a></li>
                                   <li><a href="18214">雡</a></li>
                                   <li><a href="18234">霦</a></li>
                                   <li><a href="18235">霬</a></li>
                                   <li><a href="18267">韖</a></li>
                                   <li><a href="18268">韚</a></li>
                                   <li><a href="18289">顜</a></li>
                                   <li><a href="18290">顝</a></li>
                                   <li><a href="18303">颹</a></li>
                                   <li><a href="18362">騔</a></li>
                                   <li><a href="18363">騕</a></li>
                                   <li><a href="18364">騗</a></li>
                                   <li><a href="18365">騛</a></li>
                                   <li><a href="18366">騜</a></li>
                                   <li><a href="18367">騝</a></li>
                                   <li><a href="18368">騟</a></li>
                                   <li><a href="18369">騡</a></li>
                                   <li><a href="18370">騥</a></li>
                                   <li><a href="18371">騦</a></li>
                                   <li><a href="18375">騲</a></li>
                                   <li><a href="18402">鬊</a></li>
                                   <li><a href="18439">鯙</a></li>
                                   <li><a href="18440">鯚</a></li>
                                   <li><a href="18441">鯠</a></li>
                                   <li><a href="18442">鯦</a></li>
                                   <li><a href="18443">鯬</a></li>
                                   <li><a href="18444">鯭</a></li>
                                   <li><a href="18500">鵦</a></li>
                                   <li><a href="18502">鵨</a></li>
                                   <li><a href="18503">鵭</a></li>
                                   <li><a href="18504">鵮</a></li>
                                   <li><a href="18505">鵱</a></li>
                                   <li><a href="18506">鵴</a></li>
                                   <li><a href="18507">鵵</a></li>
                                   <li><a href="18508">鵶</a></li>
                                   <li><a href="18509">鵿</a></li>
                                   <li><a href="18510">鶀</a></li>
                                   <li><a href="18511">鶁</a></li>
                                   <li><a href="18512">鶅</a></li>
                                   <li><a href="18513">鶈</a></li>
                                   <li><a href="18517">鶜</a></li>
                                   <li><a href="18524">鶧</a></li>
                                   <li><a href="18566">麔</a></li>
                                   <li><a href="18573">黀</a></li>
                                   <li><a href="18579">黢</a></li>
                                   <li><a href="18586">鼄</a></li>
                                   <li><a href="18594">鼭</a></li>
                                   <li><a href="18598">齀</a></li>
                                   <li><a href="18743">㒡</a></li>
                                   <li><a href="19013">㘋</a></li>
                                   <li><a href="19017">㘐</a></li>
                                   <li><a href="19018">㘑</a></li>
                                   <li><a href="19019">㘒</a></li>
                                   <li><a href="19098">㙾</a></li>
                                   <li><a href="19240">㜲</a></li>
                                   <li><a href="19241">㜳</a></li>
                                   <li><a href="19243">㜵</a></li>
                                   <li><a href="19246">㜸</a></li>
                                   <li><a href="19333">㞡</a></li>
                                   <li><a href="19439">㠠</a></li>
                                   <li><a href="19440">㠡</a></li>
                                   <li><a href="19441">㠢</a></li>
                                   <li><a href="19547">㢝</a></li>
                                   <li><a href="19737">㦥</a></li>
                                   <li><a href="19738">㦦</a></li>
                                   <li><a href="19877">㩬</a></li>
                                   <li><a href="19878">㩭</a></li>
                                   <li><a href="19880">㩰</a></li>
                                   <li><a href="20008">㬩</a></li>
                                   <li><a href="20009">㬪</a></li>
                                   <li><a href="20148">㯺</a></li>
                                   <li><a href="20151">㯿</a></li>
                                   <li><a href="20152">㰀</a></li>
                                   <li><a href="20153">㰁</a></li>
                                   <li><a href="20154">㰂</a></li>
                                   <li><a href="20155">㰃</a></li>
                                   <li><a href="20156">㰄</a></li>
                                   <li><a href="20157">㰆</a></li>
                                   <li><a href="20214">㱊</a></li>
                                   <li><a href="20294">㲯</a></li>
                                   <li><a href="20455">㶄</a></li>
                                   <li><a href="20456">㶅</a></li>
                                   <li><a href="20457">㶆</a></li>
                                   <li><a href="20458">㶇</a></li>
                                   <li><a href="20459">㶈</a></li>
                                   <li><a href="20545">㸅</a></li>
                                   <li><a href="20547">㸉</a></li>
                                   <li><a href="20621">㹙</a></li>
                                   <li><a href="20685">㺡</a></li>
                                   <li><a href="20748">㼄</a></li>
                                   <li><a href="20761">㼕</a></li>
                                   <li><a href="20806">㽈</a></li>
                                   <li><a href="20834">㽭</a></li>
                                   <li><a href="20911">㿑</a></li>
                                   <li><a href="20912">㿒</a></li>
                                   <li><a href="20913">㿓</a></li>
                                   <li><a href="20927">㿧</a></li>
                                   <li><a href="20959">䀊</a></li>
                                   <li><a href="21038">䁮</a></li>
                                   <li><a href="21129">䃡</a></li>
                                   <li><a href="21141">䃰</a></li>
                                   <li><a href="21174">䄢</a></li>
                                   <li><a href="21250">䅾</a></li>
                                   <li><a href="21305">䆿</a></li>
                                   <li><a href="21325">䇕</a></li>
                                   <li><a href="21425">䉉</a></li>
                                   <li><a href="21431">䉏</a></li>
                                   <li><a href="21443">䉛</a></li>
                                   <li><a href="21444">䉜</a></li>
                                   <li><a href="21445">䉝</a></li>
                                   <li><a href="21446">䉞</a></li>
                                   <li><a href="21447">䉟</a></li>
                                   <li><a href="21448">䉠</a></li>
                                   <li><a href="21449">䉡</a></li>
                                   <li><a href="21450">䉢</a></li>
                                   <li><a href="21513">䊥</a></li>
                                   <li><a href="21519">䊫</a></li>
                                   <li><a href="21520">䊬</a></li>
                                   <li><a href="21618">䌜</a></li>
                                   <li><a href="21619">䌝</a></li>
                                   <li><a href="21620">䌞</a></li>
                                   <li><a href="21621">䌟</a></li>
                                   <li><a href="21622">䌠</a></li>
                                   <li><a href="21623">䌡</a></li>
                                   <li><a href="21624">䌢</a></li>
                                   <li><a href="21670">䍤</a></li>
                                   <li><a href="21719">䎘</a></li>
                                   <li><a href="21859">䑆</a></li>
                                   <li><a href="21860">䑇</a></li>
                                   <li><a href="21861">䑈</a></li>
                                   <li><a href="22060">䕟</a></li>
                                   <li><a href="22066">䕦</a></li>
                                   <li><a href="22067">䕧</a></li>
                                   <li><a href="22068">䕩</a></li>
                                   <li><a href="22069">䕪</a></li>
                                   <li><a href="22071">䕬</a></li>
                                   <li><a href="22072">䕭</a></li>
                                   <li><a href="22073">䕮</a></li>
                                   <li><a href="22075">䕰</a></li>
                                   <li><a href="22076">䕱</a></li>
                                   <li><a href="22104">䖙</a></li>
                                   <li><a href="22171">䗲</a></li>
                                   <li><a href="22173">䗵</a></li>
                                   <li><a href="22174">䗷</a></li>
                                   <li><a href="22175">䗸</a></li>
                                   <li><a href="22176">䗹</a></li>
                                   <li><a href="22177">䗺</a></li>
                                   <li><a href="22259">䙨</a></li>
                                   <li><a href="22291">䚐</a></li>
                                   <li><a href="22292">䚑</a></li>
                                   <li><a href="22293">䚒</a></li>
                                   <li><a href="22294">䚓</a></li>
                                   <li><a href="22312">䚨</a></li>
                                   <li><a href="22313">䚩</a></li>
                                   <li><a href="22398">䜋</a></li>
                                   <li><a href="22399">䜍</a></li>
                                   <li><a href="22400">䜎</a></li>
                                   <li><a href="22401">䜏</a></li>
                                   <li><a href="22402">䜐</a></li>
                                   <li><a href="22403">䜑</a></li>
                                   <li><a href="22405">䜓</a></li>
                                   <li><a href="22406">䜕</a></li>
                                   <li><a href="22446">䝐</a></li>
                                   <li><a href="22447">䝑</a></li>
                                   <li><a href="22460">䝣</a></li>
                                   <li><a href="22461">䝤</a></li>
                                   <li><a href="22462">䝥</a></li>
                                   <li><a href="22463">䝦</a></li>
                                   <li><a href="22492">䞈</a></li>
                                   <li><a href="22542">䟇</a></li>
                                   <li><a href="22623">䠣</a></li>
                                   <li><a href="22624">䠤</a></li>
                                   <li><a href="22625">䠦</a></li>
                                   <li><a href="22646">䠿</a></li>
                                   <li><a href="22691">䡲</a></li>
                                   <li><a href="22692">䡳</a></li>
                                   <li><a href="22693">䡴</a></li>
                                   <li><a href="22732">䢯</a></li>
                                   <li><a href="22733">䢱</a></li>
                                   <li><a href="22812">䤎</a></li>
                                   <li><a href="22813">䤏</a></li>
                                   <li><a href="22815">䤑</a></li>
                                   <li><a href="22816">䤒</a></li>
                                   <li><a href="22864">䥉</a></li>
                                   <li><a href="22865">䥊</a></li>
                                   <li><a href="22866">䥋</a></li>
                                   <li><a href="22867">䥌</a></li>
                                   <li><a href="22868">䥍</a></li>
                                   <li><a href="22869">䥎</a></li>
                                   <li><a href="22871">䥐</a></li>
                                   <li><a href="22872">䥒</a></li>
                                   <li><a href="22986">䧮</a></li>
                                   <li><a href="23036">䨫</a></li>
                                   <li><a href="23037">䨬</a></li>
                                   <li><a href="23038">䨭</a></li>
                                   <li><a href="23039">䨯</a></li>
                                   <li><a href="23100">䩷</a></li>
                                   <li><a href="23102">䩹</a></li>
                                   <li><a href="23103">䩺</a></li>
                                   <li><a href="23104">䩻</a></li>
                                   <li><a href="23127">䪖</a></li>
                                   <li><a href="23128">䪘</a></li>
                                   <li><a href="23145">䪮</a></li>
                                   <li><a href="23146">䪯</a></li>
                                   <li><a href="23183">䫞</a></li>
                                   <li><a href="23184">䫟</a></li>
                                   <li><a href="23185">䫠</a></li>
                                   <li><a href="23186">䫡</a></li>
                                   <li><a href="23187">䫢</a></li>
                                   <li><a href="23188">䫣</a></li>
                                   <li><a href="23189">䫤</a></li>
                                   <li><a href="23190">䫥</a></li>
                                   <li><a href="23191">䫦</a></li>
                                   <li><a href="23237">䬘</a></li>
                                   <li><a href="23238">䬚</a></li>
                                   <li><a href="23274">䭓</a></li>
                                   <li><a href="23294">䭮</a></li>
                                   <li><a href="23338">䮜</a></li>
                                   <li><a href="23339">䮞</a></li>
                                   <li><a href="23340">䮟</a></li>
                                   <li><a href="23341">䮠</a></li>
                                   <li><a href="23342">䮡</a></li>
                                   <li><a href="23343">䮢</a></li>
                                   <li><a href="23390">䯝</a></li>
                                   <li><a href="23391">䯞</a></li>
                                   <li><a href="23392">䯟</a></li>
                                   <li><a href="23393">䯠</a></li>
                                   <li><a href="23401">䯪</a></li>
                                   <li><a href="23421">䰃</a></li>
                                   <li><a href="23422">䰄</a></li>
                                   <li><a href="23423">䰅</a></li>
                                   <li><a href="23424">䰆</a></li>
                                   <li><a href="23425">䰇</a></li>
                                   <li><a href="23450">䰨</a></li>
                                   <li><a href="23451">䰩</a></li>
                                   <li><a href="23477">䱚</a></li>
                                   <li><a href="23478">䱛</a></li>
                                   <li><a href="23479">䱝</a></li>
                                   <li><a href="23480">䱞</a></li>
                                   <li><a href="23481">䱠</a></li>
                                   <li><a href="23482">䱢</a></li>
                                   <li><a href="23483">䱣</a></li>
                                   <li><a href="23484">䱦</a></li>
                                   <li><a href="23485">䱧</a></li>
                                   <li><a href="23486">䱨</a></li>
                                   <li><a href="23487">䱩</a></li>
                                   <li><a href="23563">䳝</a></li>
                                   <li><a href="23564">䳞</a></li>
                                   <li><a href="23565">䳟</a></li>
                                   <li><a href="23566">䳠</a></li>
                                   <li><a href="23567">䳡</a></li>
                                   <li><a href="23568">䳣</a></li>
                                   <li><a href="23613">䴧</a></li>
                                   <li><a href="23626">䴻</a></li>
                                   <li><a href="23627">䴼</a></li>
                                   <li><a href="23628">䴽</a></li>
                                   <li><a href="23641">䵌</a></li>
                                   <li><a href="23666">䵨</a></li>
                                   <li><a href="23667">䵩</a></li>
                                   <li><a href="23701">䶕</a></li>
                                   <li><a href="23702">䶖</a></li>
                                   <li><a href="23724">䶯</a></li>
                                   <li><a href="23936">壝</a></li>
                                   <li><a href="23937">壠</a></li>
                                   <li><a href="23938">壡</a></li>
                                   <li><a href="23940">夒</a></li>
                                   <li><a href="23967">巃</a></li>
                                   <li><a href="24004">櫎</a></li>
                                   <li><a href="24040">瀡</a></li>
                                   <li><a href="24041">瀢</a></li>
                                   <li><a href="24060">爉</a></li>
                                   <li><a href="24094">簻</a></li>
                                   <li><a href="24101">繨</a></li>
                                   <li><a href="24102">繶</a></li>
                                   <li><a href="24141">譪</a></li>
                                   <li><a href="24162">颾</a></li>
                                   <li><a href="24167">餶</a></li>
                                   <li><a href="24168">餿</a></li>
                                   <li><a href="24236">㯾</a></li>
                                   <li><a href="24237">㰅</a></li>
                                   <li><a href="24331">䜄</a></li>
                                   <li><a href="24360">䭐</a></li>
                                   <li><a href="24361">䭑</a></li>
                                   <li><a href="24362">䭒</a></li>
                                   <li><a href="24363">䭔</a></li>
                                   <li><a href="24689">冁</a></li>
                                   <li><a href="24962">嚰</a></li>
                                   <li><a href="25219">廭</a></li>
                                   <li><a href="25225">彟</a></li>
                                   <li><a href="25364">曢</a></li>
                                   <li><a href="25407">巅</a></li>
                                   <li><a href="25539">鯴</a></li>
                                   <li><a href="25586">鞷</a></li>
                                   <li><a href="25604">瀭</a></li>
                                   <li><a href="25605">瀮</a></li>
                                   <li><a href="25655">餸</a></li>
                                   <li><a href="25659">饃</a></li>
                                   <li><a href="25666">爎</a></li>
                                   <li><a href="25843">矈</a></li>
                                   <li><a href="25844">矋</a></li>
                                   <li><a href="25941">窽</a></li>
                                   <li><a href="25993">糭</a></li>
                                   <li><a href="26020">髅</a></li>
                                   <li><a href="26024">鬏</a></li>
                                   <li><a href="26107">鶑</a></li>
                                   <li><a href="26409">㒢</a></li>
                                   <li><a href="26410">㒣</a></li>
                                   <li><a href="26518">蘔</a></li>
                                   <li><a href="26570">襧</a></li>
                                   <li><a href="26571">襨</a></li>
                                   <li><a href="26678">㙿</a></li>
                                   <li><a href="26817">贌</a></li>
                                   <li><a href="26860">蹽</a></li>
                                   <li><a href="26861">蹾</a></li>
                                   <li><a href="26862">蹿</a></li>
                                   <li><a href="26920">㠣</a></li>
                                   <li><a href="27093">㣸</a></li>
                                   <li><a href="27149">鏯</a></li>
                                   <li><a href="27151">鏰</a></li>
                                   <li><a href="27154">鏲</a></li>
                                   <li><a href="27247">㰇</a></li>
                                   <li><a href="27248">㰈</a></li>
                                   <li><a href="27324">㶊</a></li>
                                   <li><a href="27325">㶋</a></li>
                                   <li><a href="27355">㸆</a></li>
                                   <li><a href="27356">㸇</a></li>
                                   <li><a href="27367">㺢</a></li>
                                   <li><a href="27400">㼃</a></li>
                                   <li><a href="27406">䳥</a></li>
                                   <li><a href="27416">䱪</a></li>
                                   <li><a href="27435">䫧</a></li>
                                   <li><a href="27437">䪢</a></li>
                                   <li><a href="27474">䥑</a></li>
                                   <li><a href="27541">䗴</a></li>
                                   <li><a href="27662">㼆</a></li>
                                   <li><a href="27663">㼅</a></li>
                                   <li><a href="27682">櫦</a></li>
                                   <li><a href="27683">櫵</a></li>
                                   <li><a href="27779">𠑊</a></li>
                                   <li><a href="27789">𨊂</a></li>
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