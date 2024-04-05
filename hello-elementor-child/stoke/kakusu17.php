<?php
/*
 * Template Name: kakusu17
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
               <h1 class="ttl_main">１７画の漢字一覧（漢検級順）</h1>

               <p>総画数１７画の漢字の一覧です。<br>
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
                                   <option value="#" selected>１７画</option>
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
                              <li><a href="bkakusu17">部首別順</a></li>
                              <li><a href="ckakusu17">読み順</a></li>
                         </ul>
                         <ul class="search_menu2">
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
                         <div class="parts_box" id="parts06">
                              <h3 class="ttl_while"><a href="kyu06">漢字検定６級（小学校５年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="697">講</a></li>
                                   <li><a class="color1" href="726">謝</a></li>
                                   <li><a class="color1" href="751">績</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts05">
                              <h3 class="ttl_while"><a href="kyu05">漢字検定５級（小学校６年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="862">厳</a></li>
                                   <li><a class="color1" href="902">縮</a></li>
                                   <li><a class="color1" href="991">優</a></li>
                                   <li><a class="color1" href="998">覧</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts04">
                              <h3 class="ttl_while"><a href="kyu04">漢字検定４級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1045">環</a>
                                   </li>
                                   <li><a class="color1" href="1166">鮮</a>
                                   </li>
                                   <li><a class="color1" href="1168">燥</a>
                                   </li>
                                   <li><a class="color1" href="1297">翼</a>
                                   </li>
                                   <li><a class="color1" href="1305">療</a>
                                   </li>
                                   <li><a class="color1" href="1310">齢</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts03">
                              <h3 class="ttl_while"><a href="kyu03">漢字検定３級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1365">犠</a>
                                   </li>
                                   <li><a class="color1" href="1421">擦</a>
                                   </li>
                                   <li><a class="color1" href="1498">鍛</a>
                                   </li>
                                   <li><a class="color1" href="1508">聴</a>
                                   </li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts02j">
                              <h3 class="ttl_while"><a href="kyu02j">漢字検定準２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1629">嚇</a>
                                   </li>
                                   <li><a class="color1" href="1634">轄</a>
                                   </li>
                                   <li><a class="color1" href="1651">擬</a>
                                   </li>
                                   <li><a class="color1" href="1658">矯</a>
                                   </li>
                                   <li><a class="color1" href="1662">謹</a>
                                   </li>
                                   <li><a class="color1" href="1675">謙</a>
                                   </li>
                                   <li><a class="color1" href="1683">購</a>
                                   </li>
                                   <li><a class="color1" href="1695">懇</a>
                                   </li>
                                   <li><a class="color1" href="1717">爵</a>
                                   </li>
                                   <li><a class="color1" href="1722">醜</a>
                                   </li>
                                   <li><a class="color1" href="1746">償</a>
                                   </li>
                                   <li><a class="color1" href="1753">礁</a>
                                   </li>
                                   <li><a class="color1" href="1785">繊</a>
                                   </li>
                                   <li><a class="color1" href="1799">霜</a>
                                   </li>
                                   <li><a class="color1" href="1808">濯</a>
                                   </li>
                                   <li><a class="color1" href="1843">謄</a>
                                   </li>
                                   <li><a class="color1" href="1872">頻</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02">
                              <h3 class="ttl_while"><a href="kyu02">漢字検定２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1939">曖</a>
                                   </li>
                                   <li><a class="color1" href="1956">臆</a>
                                   </li>
                                   <li><a class="color1" href="1993">鍵</a>
                                   </li>
                                   <li><a class="color1" href="2054">戴</a>
                                   </li>
                                   <li><a class="color1" href="2072">瞳</a>
                                   </li>
                                   <li><a class="color1" href="2080">謎</a>
                                   </li>
                                   <li><a class="color1" href="2081">鍋</a>
                                   </li>
                                   <li><a class="color1" href="2114">闇</a>
                                   </li>
                                   <li><a class="color1" href="2126">瞭</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01j">
                              <h3 class="ttl_while"><a href="kyu01j">漢字検定準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="2156">鮪</a></li>
                                   <li><a href="2175">嬰</a></li>
                                   <li><a class="color2" href="2215">霞</a>
                                   </li>
                                   <li><a class="color2" href="2226">檜</a>
                                   </li>
                                   <li><a href="2233">鮭</a></li>
                                   <li><a href="2244">鍔</a></li>
                                   <li><a href="2267">癌</a></li>
                                   <li><a class="color2" href="2274">徽</a>
                                   </li>
                                   <li><a class="color2" href="2277">磯</a>
                                   </li>
                                   <li><a class="color2" href="2290">鞠</a>
                                   </li>
                                   <li><a href="2310">禦</a></li>
                                   <li><a href="2322">橿</a></li>
                                   <li><a class="color2" href="2329">檎</a>
                                   </li>
                                   <li><a href="2354">繋</a></li>
                                   <li><a href="2406">糠</a></li>
                                   <li><a class="color2" href="2412">藁</a>
                                   </li>
                                   <li><a href="2417">鮫</a></li>
                                   <li><a class="color2" href="2418">鴻</a>
                                   </li>
                                   <li><a class="color2" href="2421">壕</a>
                                   </li>
                                   <li><a href="2422">濠</a></li>
                                   <li><a class="color2" href="2451">薩</a>
                                   </li>
                                   <li><a class="color2" href="2453">燦</a>
                                   </li>
                                   <li><a href="2501">趨</a></li>
                                   <li><a href="2502">嬬</a></li>
                                   <li><a class="color2" href="2503">濡</a>
                                   </li>
                                   <li><a href="2515">繍</a></li>
                                   <li><a class="color2" href="2521">鍬</a>
                                   </li>
                                   <li><a class="color2" href="2534">駿</a>
                                   </li>
                                   <li><a class="color2" href="2540">曙</a>
                                   </li>
                                   <li><a href="2545">薯</a></li>
                                   <li><a class="color2" href="2569">篠</a>
                                   </li>
                                   <li><a href="2575">醤</a></li>
                                   <li><a href="2578">鍾</a></li>
                                   <li><a class="color2" href="2591">燭</a>
                                   </li>
                                   <li><a href="2662">甑</a></li>
                                   <li><a href="2664">竃</a></li>
                                   <li><a href="2665">糟</a></li>
                                   <li><a class="color2" href="2704">擢</a>
                                   </li>
                                   <li><a class="color2" href="2712">檀</a>
                                   </li>
                                   <li><a href="2782">鍍</a></li>
                                   <li><a href="2794">濤</a></li>
                                   <li><a href="2802">膿</a></li>
                                   <li><a class="color2" href="2863">瓢</a>
                                   </li>
                                   <li><a href="2890">糞</a></li>
                                   <li><a class="color2" href="2895">瞥</a>
                                   </li>
                                   <li><a class="color2" href="2951">輿</a>
                                   </li>
                                   <li><a class="color2" href="2962">螺</a>
                                   </li>
                                   <li><a class="color2" href="2981">嶺</a>
                                   </li>
                                   <li><a href="2991">燐</a></li>
                                   <li><a href="3008">聯</a></li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts01">
                              <h3 class="ttl_while"><a href="kyu01">漢字検定１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="3045">謌</a></li>
                                   <li><a href="3048">襍</a></li>
                                   <li><a href="3053">黏</a></li>
                                   <li><a href="3142">儡</a></li>
                                   <li><a href="3215">簒</a></li>
                                   <li><a href="3217">燮</a></li>
                                   <li><a href="3309">嚀</a></li>
                                   <li><a href="3310">嚊</a></li>
                                   <li><a href="3313">嚏</a></li>
                                   <li><a href="3354">壑</a></li>
                                   <li><a href="3412">嬲</a></li>
                                   <li><a href="3413">嬪</a></li>
                                   <li><a href="3414">嬶</a></li>
                                   <li><a href="3427">孺</a></li>
                                   <li><a href="3477">嶷</a></li>
                                   <li><a href="3628">懃</a></li>
                                   <li><a href="3631">懋</a></li>
                                   <li><a href="3633">懦</a></li>
                                   <li><a href="3729">擘</a></li>
                                   <li><a href="3731">擱</a></li>
                                   <li><a href="3732">擠</a></li>
                                   <li><a href="3733">擡</a></li>
                                   <li><a href="3735">擣</a></li>
                                   <li><a href="3736">擯</a></li>
                                   <li><a href="3747">龠</a></li>
                                   <li><a href="3749">鼾</a></li>
                                   <li><a href="3752">黜</a></li>
                                   <li><a href="3753">黝</a></li>
                                   <li><a href="3764">齔</a></li>
                                   <li><a href="3790">斂</a></li>
                                   <li><a href="3794">黻</a></li>
                                   <li><a href="3803">鵄</a></li>
                                   <li><a href="3808">鴿</a></li>
                                   <li><a href="3809">鵁</a></li>
                                   <li><a href="3810">鴾</a></li>
                                   <li><a href="3811">鵆</a></li>
                                   <li><a href="3848">氈</a></li>
                                   <li><a href="3858">鮟</a></li>
                                   <li><a href="3859">鮨</a></li>
                                   <li><a href="3860">鮠</a></li>
                                   <li><a href="3861">鮴</a></li>
                                   <li><a href="3900">朦</a></li>
                                   <li><a href="3928">曚</a></li>
                                   <li><a href="3963">闊</a></li>
                                   <li><a href="3964">濶</a></li>
                                   <li><a href="3965">闃</a></li>
                                   <li><a href="3966">闍</a></li>
                                   <li><a href="3973">闌</a></li>
                                   <li><a href="3976">罅</a></li>
                                   <li><a href="4092">蟋</a></li>
                                   <li><a href="4093">螽</a></li>
                                   <li><a href="4094">螳</a></li>
                                   <li><a href="4095">蟀</a></li>
                                   <li><a href="4096">螯</a></li>
                                   <li><a href="4097">螻</a></li>
                                   <li><a href="4098">螫</a></li>
                                   <li><a href="4099">蟄</a></li>
                                   <li><a href="4102">蠎</a></li>
                                   <li><a href="4190">檣</a></li>
                                   <li><a href="4191">檐</a></li>
                                   <li><a href="4192">檄</a></li>
                                   <li><a href="4193">檗</a></li>
                                   <li><a href="4200">檬</a></li>
                                   <li><a href="4202">檪</a></li>
                                   <li><a href="4276">蹊</a></li>
                                   <li><a href="4277">蹉</a></li>
                                   <li><a href="4278">蹌</a></li>
                                   <li><a href="4279">蹇</a></li>
                                   <li><a href="4280">蹐</a></li>
                                   <li><a href="4281">蹈</a></li>
                                   <li><a href="4307">臀</a></li>
                                   <li><a href="4308">臂</a></li>
                                   <li><a href="4309">膺</a></li>
                                   <li><a href="4310">膾</a></li>
                                   <li><a href="4312">臉</a></li>
                                   <li><a href="4352">牆</a></li>
                                   <li><a href="4362">馘</a></li>
                                   <li><a href="4366">颶</a></li>
                                   <li><a href="4439">濬</a></li>
                                   <li><a href="4440">濘</a></li>
                                   <li><a href="4441">濔</a></li>
                                   <li><a href="4477">轅</a></li>
                                   <li><a href="4478">轂</a></li>
                                   <li><a href="4479">輾</a></li>
                                   <li><a href="4497">駻</a></li>
                                   <li><a href="4498">騁</a></li>
                                   <li><a href="4499">駸</a></li>
                                   <li><a href="4556">麋</a></li>
                                   <li><a href="4568">歟</a></li>
                                   <li><a href="4569">歛</a></li>
                                   <li><a href="4581">雖</a></li>
                                   <li><a href="4587">簔</a></li>
                                   <li><a href="4588">篷</a></li>
                                   <li><a href="4589">簍</a></li>
                                   <li><a href="4590">簓</a></li>
                                   <li><a href="4591">簇</a></li>
                                   <li><a href="4592">簀</a></li>
                                   <li><a href="4593">簗</a></li>
                                   <li><a href="4594">篳</a></li>
                                   <li><a href="4675">磽</a></li>
                                   <li><a href="4676">磴</a></li>
                                   <li><a href="4712">鍼</a></li>
                                   <li><a href="4713">鍮</a></li>
                                   <li><a href="4714">鍠</a></li>
                                   <li><a href="4797">縻</a></li>
                                   <li><a href="4798">繆</a></li>
                                   <li><a href="4799">縹</a></li>
                                   <li><a href="4800">縵</a></li>
                                   <li><a href="4801">縺</a></li>
                                   <li><a href="4802">繃</a></li>
                                   <li><a href="4803">縲</a></li>
                                   <li><a href="4804">縷</a></li>
                                   <li><a href="4847">醢</a></li>
                                   <li><a href="4862">聳</a></li>
                                   <li><a href="4890">艚</a></li>
                                   <li><a href="4891">艝</a></li>
                                   <li><a href="4934">燵</a></li>
                                   <li><a href="4935">燧</a></li>
                                   <li><a href="4936">燠</a></li>
                                   <li><a href="4937">燬</a></li>
                                   <li><a href="4989">謚</a></li>
                                   <li><a href="4990">諱</a></li>
                                   <li><a href="4991">謇</a></li>
                                   <li><a href="4992">謐</a></li>
                                   <li><a href="4993">謗</a></li>
                                   <li><a href="4994">謖</a></li>
                                   <li><a href="5000">謨</a></li>
                                   <li><a href="5001">譁</a></li>
                                   <li><a href="5062">褻</a></li>
                                   <li><a href="5063">襄</a></li>
                                   <li><a href="5064">襌</a></li>
                                   <li><a href="5091">鞜</a></li>
                                   <li><a href="5123">獰</a></li>
                                   <li><a href="5140">顆</a></li>
                                   <li><a href="5170">瞰</a></li>
                                   <li><a href="5197">隰</a></li>
                                   <li><a href="5248">癇</a></li>
                                   <li><a href="5249">癆</a></li>
                                   <li><a href="5250">癈</a></li>
                                   <li><a href="5251">癘</a></li>
                                   <li><a href="5273">糜</a></li>
                                   <li><a href="5284">餡</a></li>
                                   <li><a href="5285">餤</a></li>
                                   <li><a href="5286">餞</a></li>
                                   <li><a href="5432">藉</a></li>
                                   <li><a href="5433">薹</a></li>
                                   <li><a href="5434">薺</a></li>
                                   <li><a href="5435">藐</a></li>
                                   <li><a href="5461">覯</a></li>
                                   <li><a href="5462">覬</a></li>
                                   <li><a href="5477">貘</a></li>
                                   <li><a href="5487">賻</a></li>
                                   <li><a href="5488">賽</a></li>
                                   <li><a href="5489">賺</a></li>
                                   <li><a href="5531">邂</a></li>
                                   <li><a href="5532">邀</a></li>
                                   <li><a href="5533">遽</a></li>
                                   <li><a href="5569">盪</a></li>
                                   <li><a href="5576">艱</a></li>
                                   <li><a href="5611">翳</a></li>
                                   <li><a href="5621">窿</a></li>
                                   <li><a href="5631">虧</a></li>
                                   <li><a href="5642">禧</a></li>
                                   <li><a href="5651">豁</a></li>
                                   <li><a href="5652">谿</a></li>
                                   <li><a href="6505">繈</a></li>
                                   <li><a href="6511">幫</a></li>
                                   <li><a href="6928">鮱</a></li>
                                   <li><a href="6946">鮲</a></li>
                                   <li><a href="7127">鵇</a></li>
                                   <li><a href="8979">糝</a></li>
                                   <li><a href="9904">螾</a></li>
                                   <li><a href="9917">蟎</a></li>
                                   <li><a href="12268">檋</a></li>
                                   <li><a href="12281">檔</a></li>
                                   <li><a href="12343">壎</a></li>
                                   <li><a href="12352">獮</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts0101j">
                              <h3 class="ttl_while"><a href="kyu0101j">漢字検定１級 / 準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="5710">嶽</a></li>
                                   <li><a href="5753">濱</a></li>
                                   <li><a class="color2" href="5791">應</a>
                                   </li>
                                   <li><a href="5821">餠</a></li>
                                   <li><a href="5833">點</a></li>
                                   <li><a class="color2" href="5835">濕</a>
                                   </li>
                                   <li><a href="5911">總</a></li>
                                   <li><a class="color2" href="5914">縱</a>
                                   </li>
                                   <li><a class="color2" href="5924">彌</a>
                                   </li>
                                   <li><a href="5975">濟</a></li>
                                   <li><a href="6012">齋</a></li>
                                   <li><a class="color2" href="6013">禪</a>
                                   </li>
                                   <li><a href="6058">營</a></li>
                                   <li><a class="color2" href="6131">穗</a>
                                   </li>
                                   <li><a href="6153">壓</a></li>
                                   <li><a class="color2" href="6183">戲</a>
                                   </li>
                                   <li><a href="6192">擧</a></li>
                                   <li><a class="color2" href="6224">檢</a>
                                   </li>
                                   <li><a href="6241">潛</a></li>
                                   <li><a href="6281">聲</a></li>
                                   <li><a href="6282">聰</a></li>
                                   <li><a href="6291">膽</a></li>
                                   <li><a href="6295">舊</a></li>
                                   <li><a href="6310">襃</a></li>
                                   <li><a class="color2" href="6316">謠</a>
                                   </li>
                                   <li><a href="6343">隱</a></li>
                                   <li><a href="6345">隸</a></li>
                                   <li><a class="color2" href="6406">繁</a>
                                   </li>
                                   <li><a class="color2" href="6426">薰</a>
                                   </li>
                                   <li><a class="color2" href="6438">擊</a>
                                   </li>
                                   <li><a class="color2" href="6463">鍊</a>
                                   </li>
                                   <li><a href="26339">館</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts">
                              <h3 class="ttl_while">漢字検定対象外</h3>
                              <ul class="search_parts">
                                   <li><a href="5695">鵈</a></li>
                                   <li><a href="5752">濮</a></li>
                                   <li><a href="5758">儖</a></li>
                                   <li><a href="5779">邉</a></li>
                                   <li><a href="5893">貔</a></li>
                                   <li><a href="6000">鍖</a></li>
                                   <li><a href="6002">鍜</a></li>
                                   <li><a href="6105">篶</a></li>
                                   <li><a href="6132">穉</a></li>
                                   <li><a href="6144">蟐</a></li>
                                   <li><a href="6154">壗</a></li>
                                   <li><a href="6223">檍</a></li>
                                   <li><a href="6240">澀</a></li>
                                   <li><a href="6265">瞶</a></li>
                                   <li><a href="6290">膸</a></li>
                                   <li><a href="6344">隲</a></li>
                                   <li><a href="6360">擤</a></li>
                                   <li><a href="6546">黇</a></li>
                                   <li><a href="6547">黈</a></li>
                                   <li><a href="6550">黚</a></li>
                                   <li><a href="6565">黿</a></li>
                                   <li><a href="6621">鼢</a></li>
                                   <li><a href="6634">㽁</a></li>
                                   <li><a href="6646">鼿</a></li>
                                   <li><a href="6731">駴</a></li>
                                   <li><a href="6732">騃</a></li>
                                   <li><a href="6733">駽</a></li>
                                   <li><a href="6734">騂</a></li>
                                   <li><a href="6735">駾</a></li>
                                   <li><a href="6736">駼</a></li>
                                   <li><a href="6737">駹</a></li>
                                   <li><a href="6738">駵</a></li>
                                   <li><a href="6799">骾</a></li>
                                   <li><a href="6830">髽</a></li>
                                   <li><a href="6831">髿</a></li>
                                   <li><a href="6832">髾</a></li>
                                   <li><a href="6833">髼</a></li>
                                   <li><a href="6835">鬁</a></li>
                                   <li><a href="6854">鬂</a></li>
                                   <li><a href="6861">闀</a></li>
                                   <li><a href="6866">鬴</a></li>
                                   <li><a href="6876">魈</a></li>
                                   <li><a href="6927">鮣</a></li>
                                   <li><a href="6929">鮰</a></li>
                                   <li><a href="6930">鮚</a></li>
                                   <li><a href="6931">鮬</a></li>
                                   <li><a href="6932">鮯</a></li>
                                   <li><a href="6933">䱎</a></li>
                                   <li><a href="6934">䱍</a></li>
                                   <li><a href="6938">鮆</a></li>
                                   <li><a href="6940">鮞</a></li>
                                   <li><a href="6941">鮛</a></li>
                                   <li><a href="6942">鮡</a></li>
                                   <li><a href="6943">鮧</a></li>
                                   <li><a href="6944">鮦</a></li>
                                   <li><a href="6945">鮩</a></li>
                                   <li><a href="6947">鮥</a></li>
                                   <li><a href="6948">鮤</a></li>
                                   <li><a href="6983">鮝</a></li>
                                   <li><a href="7108">鴳</a></li>
                                   <li><a href="7109">鴰</a></li>
                                   <li><a href="7110">鵂</a></li>
                                   <li><a href="7111">䳎</a></li>
                                   <li><a href="7112">䳍</a></li>
                                   <li><a href="7114">鴴</a></li>
                                   <li><a href="7115">鴲</a></li>
                                   <li><a href="7116">鴜</a></li>
                                   <li><a href="7117">鴯</a></li>
                                   <li><a href="7120">鴸</a></li>
                                   <li><a href="7121">鵀</a></li>
                                   <li><a href="7122">鴽</a></li>
                                   <li><a href="7123">鴺</a></li>
                                   <li><a href="7125">鵃</a></li>
                                   <li><a href="7128">䳑</a></li>
                                   <li><a href="7129">鵅</a></li>
                                   <li><a href="7130">鴷</a></li>
                                   <li><a href="7134">䳌</a></li>
                                   <li><a href="7229">鴼</a></li>
                                   <li><a href="7268">麰</a></li>
                                   <li><a href="7270">麯</a></li>
                                   <li><a href="7310">䩭</a></li>
                                   <li><a href="7311">鞚</a></li>
                                   <li><a href="7312">鞞</a></li>
                                   <li><a href="7313">䩬</a></li>
                                   <li><a href="7324">鞟</a></li>
                                   <li><a href="7348">䩨</a></li>
                                   <li><a href="7363">韱</a></li>
                                   <li><a href="7368">韺</a></li>
                                   <li><a href="7398">頥</a></li>
                                   <li><a href="7399">顊</a></li>
                                   <li><a href="7400">顄</a></li>
                                   <li><a href="7401">䫏</a></li>
                                   <li><a href="7402">顇</a></li>
                                   <li><a href="7403">顀</a></li>
                                   <li><a href="7405">顈</a></li>
                                   <li><a href="7406">顉</a></li>
                                   <li><a href="7436">颷</a></li>
                                   <li><a href="7477">餧</a></li>
                                   <li><a href="7478">䭇</a></li>
                                   <li><a href="7479">餜</a></li>
                                   <li><a href="7480">餛</a></li>
                                   <li><a href="7482">餦</a></li>
                                   <li><a href="7483">餟</a></li>
                                   <li><a href="7484">餢</a></li>
                                   <li><a href="7493">餴</a></li>
                                   <li><a href="7519">馣</a></li>
                                   <li><a href="7585">鍟</a></li>
                                   <li><a href="7615">㘅</a></li>
                                   <li><a href="7678">鎁</a></li>
                                   <li><a href="7716">鎄</a></li>
                                   <li><a href="7718">鍇</a></li>
                                   <li><a href="7719">鍰</a></li>
                                   <li><a href="7720">鍕</a></li>
                                   <li><a href="7721">鍥</a></li>
                                   <li><a href="7722">鋻</a></li>
                                   <li><a href="7723">鍞</a></li>
                                   <li><a href="7724">鍧</a></li>
                                   <li><a href="7725">鍭</a></li>
                                   <li><a href="7726">鍘</a></li>
                                   <li><a href="7727">鍿</a></li>
                                   <li><a href="7728">鍫</a></li>
                                   <li><a href="7729">鍒</a></li>
                                   <li><a href="7730">鍶</a></li>
                                   <li><a href="7731">鍐</a></li>
                                   <li><a href="7732">鍺</a></li>
                                   <li><a href="7733">鍴</a></li>
                                   <li><a href="7734">鍉</a></li>
                                   <li><a href="7735">鍗</a></li>
                                   <li><a href="7737">鎂</a></li>
                                   <li><a href="7738">鎇</a></li>
                                   <li><a href="7739">鍑</a></li>
                                   <li><a href="7740">鍢</a></li>
                                   <li><a href="7741">鍽</a></li>
                                   <li><a href="7742">鍪</a></li>
                                   <li><a href="7743">鍚</a></li>
                                   <li><a href="7744">鍱</a></li>
                                   <li><a href="7757">鎡</a></li>
                                   <li><a href="7761">䤹</a></li>
                                   <li><a href="7791">鍯</a></li>
                                   <li><a href="7889">闉</a></li>
                                   <li><a href="7891">闋</a></li>
                                   <li><a href="7892">闆</a></li>
                                   <li><a href="7970">隮</a></li>
                                   <li><a href="7971">隯</a></li>
                                   <li><a href="7984">䳄</a></li>
                                   <li><a href="7987">雚</a></li>
                                   <li><a href="7991">雘</a></li>
                                   <li><a href="8004">霛</a></li>
                                   <li><a href="8008">霠</a></li>
                                   <li><a href="8010">䬠</a></li>
                                   <li><a href="8011">霝</a></li>
                                   <li><a href="8018">霚</a></li>
                                   <li><a href="8073">觳</a></li>
                                   <li><a href="8180">謍</a></li>
                                   <li><a href="8181">謞</a></li>
                                   <li><a href="8183">謑</a></li>
                                   <li><a href="8185">謜</a></li>
                                   <li><a href="8186">謅</a></li>
                                   <li><a href="8187">謆</a></li>
                                   <li><a href="8188">謕</a></li>
                                   <li><a href="8189">謟</a></li>
                                   <li><a href="8241">豀</a></li>
                                   <li><a href="8248">豏</a></li>
                                   <li><a href="8249">䝁</a></li>
                                   <li><a href="8268">豲</a></li>
                                   <li><a href="8269">䝠</a></li>
                                   <li><a href="8270">豳</a></li>
                                   <li><a href="8305">儨</a></li>
                                   <li><a href="8308">賷</a></li>
                                   <li><a href="8321">賸</a></li>
                                   <li><a href="8417">蹏</a></li>
                                   <li><a href="8419">蹍</a></li>
                                   <li><a href="8420">蹎</a></li>
                                   <li><a href="8421">蹋</a></li>
                                   <li><a href="8526">轀</a></li>
                                   <li><a href="8527">轃</a></li>
                                   <li><a href="8528">轁</a></li>
                                   <li><a href="8620">遴</a></li>
                                   <li><a href="8622">邅</a></li>
                                   <li><a href="8717">鄹</a></li>
                                   <li><a href="8757">醞</a></li>
                                   <li><a href="8758">醠</a></li>
                                   <li><a href="8759">醘</a></li>
                                   <li><a href="8760">醝</a></li>
                                   <li><a href="8761">醡</a></li>
                                   <li><a href="8880">簃</a></li>
                                   <li><a href="8881">簂</a></li>
                                   <li><a href="8882">簋</a></li>
                                   <li><a href="8883">簄</a></li>
                                   <li><a href="8884">簆</a></li>
                                   <li><a href="8885">篸</a></li>
                                   <li><a href="8886">篹</a></li>
                                   <li><a href="8887">簁</a></li>
                                   <li><a href="8888">簉</a></li>
                                   <li><a href="8890">篲</a></li>
                                   <li><a href="8891">簎</a></li>
                                   <li><a href="8892">篿</a></li>
                                   <li><a href="8893">篵</a></li>
                                   <li><a href="8894">䈾</a></li>
                                   <li><a href="8895">簌</a></li>
                                   <li><a href="8896">篴</a></li>
                                   <li><a href="8897">篼</a></li>
                                   <li><a href="8898">篺</a></li>
                                   <li><a href="8899">篻</a></li>
                                   <li><a href="8900">篾</a></li>
                                   <li><a href="8901">篰</a></li>
                                   <li><a href="8902">簏</a></li>
                                   <li><a href="8917">簘</a></li>
                                   <li><a href="8977">糛</a></li>
                                   <li><a href="8980">糙</a></li>
                                   <li><a href="9049">縧</a></li>
                                   <li><a href="9112">繄</a></li>
                                   <li><a href="9113">縯</a></li>
                                   <li><a href="9114">縴</a></li>
                                   <li><a href="9115">繀</a></li>
                                   <li><a href="9116">縿</a></li>
                                   <li><a href="9117">縰</a></li>
                                   <li><a href="9118">縬</a></li>
                                   <li><a href="9119">繅</a></li>
                                   <li><a href="9120">縶</a></li>
                                   <li><a href="9121">縳</a></li>
                                   <li><a href="9123">繇</a></li>
                                   <li><a href="9124">縭</a></li>
                                   <li><a href="9125">繂</a></li>
                                   <li><a href="9161">罄</a></li>
                                   <li><a href="9190">罽</a></li>
                                   <li><a href="9191">罿</a></li>
                                   <li><a href="9192">罾</a></li>
                                   <li><a href="9216">䍺</a></li>
                                   <li><a href="9240">翲</a></li>
                                   <li><a href="9243">翶</a></li>
                                   <li><a href="9268">耬</a></li>
                                   <li><a href="9287">聱</a></li>
                                   <li><a href="9349">艜</a></li>
                                   <li><a href="9647">橓</a></li>
                                   <li><a href="9685">薳</a></li>
                                   <li><a href="9686">薿</a></li>
                                   <li><a href="9687">藑</a></li>
                                   <li><a href="9690">薾</a></li>
                                   <li><a href="9691">薷</a></li>
                                   <li><a href="9692">薽</a></li>
                                   <li><a href="9693">藎</a></li>
                                   <li><a href="9695">薱</a></li>
                                   <li><a href="9696">藋</a></li>
                                   <li><a href="9697">薼</a></li>
                                   <li><a href="9698">薴</a></li>
                                   <li><a href="9699">薸</a></li>
                                   <li><a href="9700">藊</a></li>
                                   <li><a href="9717">薻</a></li>
                                   <li><a href="9720">薲</a></li>
                                   <li><a href="9788">蟁</a></li>
                                   <li><a href="9844">䗬</a></li>
                                   <li><a href="9903">螱</a></li>
                                   <li><a href="9905">蟈</a></li>
                                   <li><a href="9906">䗪</a></li>
                                   <li><a href="9907">螿</a></li>
                                   <li><a href="9909">蟑</a></li>
                                   <li><a href="9910">螬</a></li>
                                   <li><a href="9911">䗥</a></li>
                                   <li><a href="9912">螭</a></li>
                                   <li><a href="9913">螮</a></li>
                                   <li><a href="9914">螲</a></li>
                                   <li><a href="9915">螵</a></li>
                                   <li><a href="9916">蟊</a></li>
                                   <li><a href="9918">䗤</a></li>
                                   <li><a href="9919">蟉</a></li>
                                   <li><a href="10004">褽</a></li>
                                   <li><a href="10006">褺</a></li>
                                   <li><a href="10072">襉</a></li>
                                   <li><a href="10073">襋</a></li>
                                   <li><a href="10074">襐</a></li>
                                   <li><a href="10075">襓</a></li>
                                   <li><a href="10076">襈</a></li>
                                   <li><a href="10077">襏</a></li>
                                   <li><a href="10078">襒</a></li>
                                   <li><a href="10079">襆</a></li>
                                   <li><a href="10227">璗</a></li>
                                   <li><a href="10231">璘</a></li>
                                   <li><a href="10232">璦</a></li>
                                   <li><a href="10233">璯</a></li>
                                   <li><a href="10234">璩</a></li>
                                   <li><a href="10236">璨</a></li>
                                   <li><a href="10237">璱</a></li>
                                   <li><a href="10238">璲</a></li>
                                   <li><a href="10239">璪</a></li>
                                   <li><a href="10240">璮</a></li>
                                   <li><a href="10241">璫</a></li>
                                   <li><a href="10242">璐</a></li>
                                   <li><a href="10244">壐</a></li>
                                   <li><a href="10252">璵</a></li>
                                   <li><a href="10286">甒</a></li>
                                   <li><a href="10332">疃</a></li>
                                   <li><a href="10418">癅</a></li>
                                   <li><a href="10434">癋</a></li>
                                   <li><a href="10435">癎</a></li>
                                   <li><a href="10436">癀</a></li>
                                   <li><a href="10437">癄</a></li>
                                   <li><a href="10439">㿉</a></li>
                                   <li><a href="10440">癉</a></li>
                                   <li><a href="10442">癍</a></li>
                                   <li><a href="10444">癁</a></li>
                                   <li><a href="10445">癃</a></li>
                                   <li><a href="10477">皥</a></li>
                                   <li><a href="10482">皤</a></li>
                                   <li><a href="10511">盨</a></li>
                                   <li><a href="10512">盩</a></li>
                                   <li><a href="10602">瞯</a></li>
                                   <li><a href="10603">瞷</a></li>
                                   <li><a href="10604">瞲</a></li>
                                   <li><a href="10605">瞤</a></li>
                                   <li><a href="10606">瞧</a></li>
                                   <li><a href="10607">瞮</a></li>
                                   <li><a href="10608">瞪</a></li>
                                   <li><a href="10622">瞩</a></li>
                                   <li><a href="10632">矰</a></li>
                                   <li><a href="10742">礀</a></li>
                                   <li><a href="10743">磵</a></li>
                                   <li><a href="10744">䃣</a></li>
                                   <li><a href="10745">磲</a></li>
                                   <li><a href="10746">磺</a></li>
                                   <li><a href="10747">磶</a></li>
                                   <li><a href="10748">磳</a></li>
                                   <li><a href="10749">磾</a></li>
                                   <li><a href="10750">磹</a></li>
                                   <li><a href="10751">磻</a></li>
                                   <li><a href="10753">磿</a></li>
                                   <li><a href="10815">禨</a></li>
                                   <li><a href="10816">禫</a></li>
                                   <li><a href="10883">穖</a></li>
                                   <li><a href="10884">穝</a></li>
                                   <li><a href="10885">穛</a></li>
                                   <li><a href="10886">穕</a></li>
                                   <li><a href="10887">穜</a></li>
                                   <li><a href="10888">穙</a></li>
                                   <li><a href="10927">窳</a></li>
                                   <li><a href="10934">窾</a></li>
                                   <li><a href="10935">竀</a></li>
                                   <li><a href="10949">竴</a></li>
                                   <li><a href="11012">懨</a></li>
                                   <li><a href="11015">㦛</a></li>
                                   <li><a href="11177">憯</a></li>
                                   <li><a href="11197">懝</a></li>
                                   <li><a href="11199">懠</a></li>
                                   <li><a href="11200">懧</a></li>
                                   <li><a href="11201">懤</a></li>
                                   <li><a href="11202">懡</a></li>
                                   <li><a href="11203">懜</a></li>
                                   <li><a href="11208">懱</a></li>
                                   <li><a href="11263">擫</a></li>
                                   <li><a href="11476">撍</a></li>
                                   <li><a href="11505">擩</a></li>
                                   <li><a href="11506">擰</a></li>
                                   <li><a href="11570">斁</a></li>
                                   <li><a href="11571">歝</a></li>
                                   <li><a href="11585">㪺</a></li>
                                   <li><a href="11586">斣</a></li>
                                   <li><a href="11593">斵</a></li>
                                   <li><a href="11594">斴</a></li>
                                   <li><a href="11654">曐</a></li>
                                   <li><a href="11692">皢</a></li>
                                   <li><a href="11729">曎</a></li>
                                   <li><a href="11730">曏</a></li>
                                   <li><a href="11731">曒</a></li>
                                   <li><a href="11733">㬠</a></li>
                                   <li><a href="11738">㬢</a></li>
                                   <li><a href="11767">餚</a></li>
                                   <li><a href="11885">骽</a></li>
                                   <li><a href="11909">臇</a></li>
                                   <li><a href="11913">臄</a></li>
                                   <li><a href="11914">臌</a></li>
                                   <li><a href="11915">臅</a></li>
                                   <li><a href="11916">臊</a></li>
                                   <li><a href="11917">膻</a></li>
                                   <li><a href="11920">臃</a></li>
                                   <li><a href="11921">臁</a></li>
                                   <li><a href="12097">㯰</a></li>
                                   <li><a href="12143">檝</a></li>
                                   <li><a href="12259">檏</a></li>
                                   <li><a href="12260">橉</a></li>
                                   <li><a href="12262">檃</a></li>
                                   <li><a href="12264">檟</a></li>
                                   <li><a href="12265">檞</a></li>
                                   <li><a href="12266">檓</a></li>
                                   <li><a href="12267">檥</a></li>
                                   <li><a href="12270">檕</a></li>
                                   <li><a href="12271">檆</a></li>
                                   <li><a href="12272">橾</a></li>
                                   <li><a href="12273">橚</a></li>
                                   <li><a href="12275">檇</a></li>
                                   <li><a href="12278">檛</a></li>
                                   <li><a href="12279">檡</a></li>
                                   <li><a href="12280">檉</a></li>
                                   <li><a href="12282">檘</a></li>
                                   <li><a href="12283">檑</a></li>
                                   <li><a href="12284">檁</a></li>
                                   <li><a href="12285">檩</a></li>
                                   <li><a href="12288">檴</a></li>
                                   <li><a href="12305">㯭</a></li>
                                   <li><a href="12656">儛</a></li>
                                   <li><a href="12657">儣</a></li>
                                   <li><a href="12658">儬</a></li>
                                   <li><a href="12659">儦</a></li>
                                   <li><a href="12660">儤</a></li>
                                   <li><a href="12661">儢</a></li>
                                   <li><a href="12668">儧</a></li>
                                   <li><a href="12766">鬀</a></li>
                                   <li><a href="12813">劕</a></li>
                                   <li><a href="12874">歜</a></li>
                                   <li><a href="12912">勶</a></li>
                                   <li><a href="12914">勴</a></li>
                                   <li><a href="12924">殩</a></li>
                                   <li><a href="12926">殭</a></li>
                                   <li><a href="12928">殬</a></li>
                                   <li><a href="12929">殮</a></li>
                                   <li><a href="12967">毚</a></li>
                                   <li><a href="12994">匵</a></li>
                                   <li><a href="13105">儠</a></li>
                                   <li><a href="13106">儩</a></li>
                                   <li><a href="13109">儰</a></li>
                                   <li><a href="13137">凟</a></li>
                                   <li><a href="13554">噽</a></li>
                                   <li><a href="13555">噾</a></li>
                                   <li><a href="13556">噿</a></li>
                                   <li><a href="13557">嚁</a></li>
                                   <li><a href="13559">嚅</a></li>
                                   <li><a href="13560">嚈</a></li>
                                   <li><a href="13561">嚉</a></li>
                                   <li><a href="13562">嚋</a></li>
                                   <li><a href="13563">嚌</a></li>
                                   <li><a href="13564">嚍</a></li>
                                   <li><a href="13565">嚎</a></li>
                                   <li><a href="13566">嚐</a></li>
                                   <li><a href="13878">壍</a></li>
                                   <li><a href="13880">壔</a></li>
                                   <li><a href="13881">壖</a></li>
                                   <li><a href="14238">嬣</a></li>
                                   <li><a href="14239">嬤</a></li>
                                   <li><a href="14240">嬥</a></li>
                                   <li><a href="14241">嬦</a></li>
                                   <li><a href="14242">嬧</a></li>
                                   <li><a href="14245">嬫</a></li>
                                   <li><a href="14246">嬭</a></li>
                                   <li><a href="14247">嬮</a></li>
                                   <li><a href="14248">嬯</a></li>
                                   <li><a href="14249">嬱</a></li>
                                   <li><a href="14251">嬵</a></li>
                                   <li><a href="14254">嬺</a></li>
                                   <li><a href="14282">孻</a></li>
                                   <li><a href="14326">寱</a></li>
                                   <li><a href="14327">寲</a></li>
                                   <li><a href="14373">屨</a></li>
                                   <li><a href="14561">嶜</a></li>
                                   <li><a href="14581">嶸</a></li>
                                   <li><a href="14582">嶹</a></li>
                                   <li><a href="14583">嶻</a></li>
                                   <li><a href="14584">嶾</a></li>
                                   <li><a href="14660">幬</a></li>
                                   <li><a href="14792">徾</a></li>
                                   <li><a href="14884">憵</a></li>
                                   <li><a href="14890">懗</a></li>
                                   <li><a href="14891">懚</a></li>
                                   <li><a href="14892">懛</a></li>
                                   <li><a href="15038">擟</a></li>
                                   <li><a href="15039">擨</a></li>
                                   <li><a href="15040">擮</a></li>
                                   <li><a href="15044">攃</a></li>
                                   <li><a href="15071">斀</a></li>
                                   <li><a href="15078">斶</a></li>
                                   <li><a href="15085">旚</a></li>
                                   <li><a href="15118">暽</a></li>
                                   <li><a href="15121">曑</a></li>
                                   <li><a href="15122">曓</a></li>
                                   <li><a href="15123">曕</a></li>
                                   <li><a href="15124">曗</a></li>
                                   <li><a href="15291">橽</a></li>
                                   <li><a href="15292">檂</a></li>
                                   <li><a href="15293">檅</a></li>
                                   <li><a href="15294">檈</a></li>
                                   <li><a href="15295">檊</a></li>
                                   <li><a href="15296">檌</a></li>
                                   <li><a href="15297">檒</a></li>
                                   <li><a href="15298">檙</a></li>
                                   <li><a href="15299">檚</a></li>
                                   <li><a href="15300">檤</a></li>
                                   <li><a href="15301">檦</a></li>
                                   <li><a href="15354">歗</a></li>
                                   <li><a href="15389">氉</a></li>
                                   <li><a href="15390">氊</a></li>
                                   <li><a href="15391">氋</a></li>
                                   <li><a href="15883">澩</a></li>
                                   <li><a href="15905">濌</a></li>
                                   <li><a href="15910">濖</a></li>
                                   <li><a href="15912">濙</a></li>
                                   <li><a href="15913">濚</a></li>
                                   <li><a href="15914">濜</a></li>
                                   <li><a href="15915">濝</a></li>
                                   <li><a href="15916">濞</a></li>
                                   <li><a href="15917">濢</a></li>
                                   <li><a href="15918">濣</a></li>
                                   <li><a href="15919">濥</a></li>
                                   <li><a href="15920">濦</a></li>
                                   <li><a href="15921">濧</a></li>
                                   <li><a href="15923">濰</a></li>
                                   <li><a href="15924">濴</a></li>
                                   <li><a href="15929">濿</a></li>
                                   <li><a href="15939">瀎</a></li>
                                   <li><a href="16212">熽</a></li>
                                   <li><a href="16229">燡</a></li>
                                   <li><a href="16230">燢</a></li>
                                   <li><a href="16231">燣</a></li>
                                   <li><a href="16233">燨</a></li>
                                   <li><a href="16234">燩</a></li>
                                   <li><a href="16236">燫</a></li>
                                   <li><a href="16237">燯</a></li>
                                   <li><a href="16238">燰</a></li>
                                   <li><a href="16239">燱</a></li>
                                   <li><a href="16240">燲</a></li>
                                   <li><a href="16241">燳</a></li>
                                   <li><a href="16242">燴</a></li>
                                   <li><a href="16458">獯</a></li>
                                   <li><a href="16459">獱</a></li>
                                   <li><a href="16460">獳</a></li>
                                   <li><a href="16553">璛</a></li>
                                   <li><a href="16555">璬</a></li>
                                   <li><a href="16556">璭</a></li>
                                   <li><a href="16557">璳</a></li>
                                   <li><a href="16562">瓁</a></li>
                                   <li><a href="16563">瓂</a></li>
                                   <li><a href="16583">甏</a></li>
                                   <li><a href="16689">瞦</a></li>
                                   <li><a href="16690">瞨</a></li>
                                   <li><a href="16691">瞫</a></li>
                                   <li><a href="16692">瞴</a></li>
                                   <li><a href="16693">瞸</a></li>
                                   <li><a href="16766">磰</a></li>
                                   <li><a href="16767">磱</a></li>
                                   <li><a href="16768">磸</a></li>
                                   <li><a href="16769">磼</a></li>
                                   <li><a href="16773">礍</a></li>
                                   <li><a href="16840">穔</a></li>
                                   <li><a href="16841">穘</a></li>
                                   <li><a href="16842">穚</a></li>
                                   <li><a href="16860">竁</a></li>
                                   <li><a href="16861">竂</a></li>
                                   <li><a href="16866">竲</a></li>
                                   <li><a href="16867">竳</a></li>
                                   <li><a href="16929">篱</a></li>
                                   <li><a href="16930">簅</a></li>
                                   <li><a href="16931">簈</a></li>
                                   <li><a href="16932">簊</a></li>
                                   <li><a href="16933">簐</a></li>
                                   <li><a href="16971">糡</a></li>
                                   <li><a href="16974">糨</a></li>
                                   <li><a href="17032">縩</a></li>
                                   <li><a href="17033">縪</a></li>
                                   <li><a href="17035">縼</a></li>
                                   <li><a href="17036">繉</a></li>
                                   <li><a href="17043">繤</a></li>
                                   <li><a href="17058">罆</a></li>
                                   <li><a href="17093">翴</a></li>
                                   <li><a href="17094">翵</a></li>
                                   <li><a href="17102">耫</a></li>
                                   <li><a href="17171">膦</a></li>
                                   <li><a href="17178">膼</a></li>
                                   <li><a href="17180">臒</a></li>
                                   <li><a href="17194">艛</a></li>
                                   <li><a href="17361">藀</a></li>
                                   <li><a href="17362">藃</a></li>
                                   <li><a href="17363">藄</a></li>
                                   <li><a href="17364">藅</a></li>
                                   <li><a href="17365">藆</a></li>
                                   <li><a href="17366">藈</a></li>
                                   <li><a href="17367">藌</a></li>
                                   <li><a href="17368">藒</a></li>
                                   <li><a href="17411">虨</a></li>
                                   <li><a href="17488">螩</a></li>
                                   <li><a href="17489">螪</a></li>
                                   <li><a href="17490">螰</a></li>
                                   <li><a href="17491">螴</a></li>
                                   <li><a href="17492">螶</a></li>
                                   <li><a href="17493">螷</a></li>
                                   <li><a href="17494">螸</a></li>
                                   <li><a href="17495">螹</a></li>
                                   <li><a href="17496">螼</a></li>
                                   <li><a href="17497">蟂</a></li>
                                   <li><a href="17498">蟃</a></li>
                                   <li><a href="17499">蟅</a></li>
                                   <li><a href="17500">蟌</a></li>
                                   <li><a href="17501">蟍</a></li>
                                   <li><a href="17590">襇</a></li>
                                   <li><a href="17591">襊</a></li>
                                   <li><a href="17592">襎</a></li>
                                   <li><a href="17593">襑</a></li>
                                   <li><a href="17611">覫</a></li>
                                   <li><a href="17612">覭</a></li>
                                   <li><a href="17613">覮</a></li>
                                   <li><a href="17627">觲</a></li>
                                   <li><a href="17687">謈</a></li>
                                   <li><a href="17688">謉</a></li>
                                   <li><a href="17689">謏</a></li>
                                   <li><a href="17690">謒</a></li>
                                   <li><a href="17691">謓</a></li>
                                   <li><a href="17692">謘</a></li>
                                   <li><a href="17696">謩</a></li>
                                   <li><a href="17740">豯</a></li>
                                   <li><a href="17741">豰</a></li>
                                   <li><a href="17752">貕</a></li>
                                   <li><a href="17753">貖</a></li>
                                   <li><a href="17769">賶</a></li>
                                   <li><a href="17770">賹</a></li>
                                   <li><a href="17778">赯</a></li>
                                   <li><a href="17847">蹑</a></li>
                                   <li><a href="17904">輽</a></li>
                                   <li><a href="17929">遾</a></li>
                                   <li><a href="17988">醙</a></li>
                                   <li><a href="17990">醟</a></li>
                                   <li><a href="17991">醣</a></li>
                                   <li><a href="18071">鍌</a></li>
                                   <li><a href="18072">鍎</a></li>
                                   <li><a href="18074">鍓</a></li>
                                   <li><a href="18075">鍙</a></li>
                                   <li><a href="18076">鍝</a></li>
                                   <li><a href="18077">鍡</a></li>
                                   <li><a href="18079">鍤</a></li>
                                   <li><a href="18080">鍦</a></li>
                                   <li><a href="18081">鍨</a></li>
                                   <li><a href="18082">鍲</a></li>
                                   <li><a href="18083">鍷</a></li>
                                   <li><a href="18084">鍸</a></li>
                                   <li><a href="18085">鍹</a></li>
                                   <li><a href="18086">鍻</a></li>
                                   <li><a href="18087">鎃</a></li>
                                   <li><a href="18095">鎝</a></li>
                                   <li><a href="18175">閷</a></li>
                                   <li><a href="18178">闄</a></li>
                                   <li><a href="18179">闅</a></li>
                                   <li><a href="18205">隬</a></li>
                                   <li><a href="18206">隭</a></li>
                                   <li><a href="18231">霘</a></li>
                                   <li><a href="18232">霟</a></li>
                                   <li><a href="18256">鞛</a></li>
                                   <li><a href="18257">鞝</a></li>
                                   <li><a href="18265">韒</a></li>
                                   <li><a href="18285">顁</a></li>
                                   <li><a href="18286">顂</a></li>
                                   <li><a href="18287">顃</a></li>
                                   <li><a href="18288">顅</a></li>
                                   <li><a href="18318">餥</a></li>
                                   <li><a href="18326">馡</a></li>
                                   <li><a href="18327">馢</a></li>
                                   <li><a href="18353">駳</a></li>
                                   <li><a href="18354">駶</a></li>
                                   <li><a href="18355">駷</a></li>
                                   <li><a href="18356">駺</a></li>
                                   <li><a href="18357">騀</a></li>
                                   <li><a href="18429">鮙</a></li>
                                   <li><a href="18430">鮜</a></li>
                                   <li><a href="18431">鮢</a></li>
                                   <li><a href="18486">鴭</a></li>
                                   <li><a href="18487">鴮</a></li>
                                   <li><a href="18489">鴵</a></li>
                                   <li><a href="18490">鴶</a></li>
                                   <li><a href="18491">鴹</a></li>
                                   <li><a href="18492">鵉</a></li>
                                   <li><a href="18501">鵧</a></li>
                                   <li><a href="18563">麉</a></li>
                                   <li><a href="18564">麊</a></li>
                                   <li><a href="18592">鼣</a></li>
                                   <li><a href="18593">鼤</a></li>
                                   <li><a href="18624">凞</a></li>
                                   <li><a href="18676">㐯</a></li>
                                   <li><a href="18810">㔋</a></li>
                                   <li><a href="18814">㔏</a></li>
                                   <li><a href="18830">㔣</a></li>
                                   <li><a href="18831">㔤</a></li>
                                   <li><a href="18832">㔥</a></li>
                                   <li><a href="18833">㔦</a></li>
                                   <li><a href="19008">㘆</a></li>
                                   <li><a href="19009">㘇</a></li>
                                   <li><a href="19010">㘈</a></li>
                                   <li><a href="19092">㙷</a></li>
                                   <li><a href="19093">㙸</a></li>
                                   <li><a href="19095">㙺</a></li>
                                   <li><a href="19435">㠙</a></li>
                                   <li><a href="19436">㠚</a></li>
                                   <li><a href="19497">㡥</a></li>
                                   <li><a href="19498">㡦</a></li>
                                   <li><a href="19576">㣅</a></li>
                                   <li><a href="19613">㣷</a></li>
                                   <li><a href="19730">㦘</a></li>
                                   <li><a href="19755">㦽</a></li>
                                   <li><a href="19858">㩓</a></li>
                                   <li><a href="19865">㩛</a></li>
                                   <li><a href="19866">㩝</a></li>
                                   <li><a href="19867">㩞</a></li>
                                   <li><a href="19869">㩢</a></li>
                                   <li><a href="19927">㪩</a></li>
                                   <li><a href="20002">㬘</a></li>
                                   <li><a href="20006">㬡</a></li>
                                   <li><a href="20015">㬲</a></li>
                                   <li><a href="20130">㯝</a></li>
                                   <li><a href="20139">㯪</a></li>
                                   <li><a href="20140">㯫</a></li>
                                   <li><a href="20141">㯮</a></li>
                                   <li><a href="20143">㯱</a></li>
                                   <li><a href="20144">㯲</a></li>
                                   <li><a href="20145">㯶</a></li>
                                   <li><a href="20210">㱆</a></li>
                                   <li><a href="20211">㱇</a></li>
                                   <li><a href="20212">㱈</a></li>
                                   <li><a href="20213">㱉</a></li>
                                   <li><a href="20248">㱸</a></li>
                                   <li><a href="20263">㲉</a></li>
                                   <li><a href="20431">㵨</a></li>
                                   <li><a href="20438">㵯</a></li>
                                   <li><a href="20440">㵱</a></li>
                                   <li><a href="20442">㵳</a></li>
                                   <li><a href="20444">㵵</a></li>
                                   <li><a href="20445">㵶</a></li>
                                   <li><a href="20446">㵷</a></li>
                                   <li><a href="20447">㵸</a></li>
                                   <li><a href="20449">㵺</a></li>
                                   <li><a href="20450">㵻</a></li>
                                   <li><a href="20451">㵼</a></li>
                                   <li><a href="20539">㷾</a></li>
                                   <li><a href="20540">㷿</a></li>
                                   <li><a href="20541">㸀</a></li>
                                   <li><a href="20542">㸁</a></li>
                                   <li><a href="20543">㸃</a></li>
                                   <li><a href="20569">㸣</a></li>
                                   <li><a href="20616">㹔</a></li>
                                   <li><a href="20617">㹕</a></li>
                                   <li><a href="20618">㹖</a></li>
                                   <li><a href="20683">㺟</a></li>
                                   <li><a href="20743">㻹</a></li>
                                   <li><a href="20744">㻺</a></li>
                                   <li><a href="20745">㻽</a></li>
                                   <li><a href="20747">㻿</a></li>
                                   <li><a href="20799">㼿</a></li>
                                   <li><a href="20800">㽀</a></li>
                                   <li><a href="20801">㽂</a></li>
                                   <li><a href="20802">㽃</a></li>
                                   <li><a href="20803">㽄</a></li>
                                   <li><a href="20813">㽑</a></li>
                                   <li><a href="20831">㽪</a></li>
                                   <li><a href="20909">㿎</a></li>
                                   <li><a href="20958">䀉</a></li>
                                   <li><a href="21035">䁫</a></li>
                                   <li><a href="21036">䁬</a></li>
                                   <li><a href="21037">䁭</a></li>
                                   <li><a href="21039">䁯</a></li>
                                   <li><a href="21040">䁰</a></li>
                                   <li><a href="21041">䁲</a></li>
                                   <li><a href="21062">䂊</a></li>
                                   <li><a href="21063">䂌</a></li>
                                   <li><a href="21123">䃘</a></li>
                                   <li><a href="21130">䃢</a></li>
                                   <li><a href="21132">䃥</a></li>
                                   <li><a href="21133">䃦</a></li>
                                   <li><a href="21134">䃧</a></li>
                                   <li><a href="21172">䄟</a></li>
                                   <li><a href="21252">䆀</a></li>
                                   <li><a href="21295">䆵</a></li>
                                   <li><a href="21296">䆶</a></li>
                                   <li><a href="21297">䆷</a></li>
                                   <li><a href="21298">䆸</a></li>
                                   <li><a href="21299">䆹</a></li>
                                   <li><a href="21300">䆺</a></li>
                                   <li><a href="21301">䆻</a></li>
                                   <li><a href="21323">䇓</a></li>
                                   <li><a href="21410">䈸</a></li>
                                   <li><a href="21411">䈹</a></li>
                                   <li><a href="21412">䈺</a></li>
                                   <li><a href="21413">䈻</a></li>
                                   <li><a href="21414">䈼</a></li>
                                   <li><a href="21415">䈽</a></li>
                                   <li><a href="21416">䈿</a></li>
                                   <li><a href="21417">䉀</a></li>
                                   <li><a href="21418">䉁</a></li>
                                   <li><a href="21419">䉂</a></li>
                                   <li><a href="21420">䉃</a></li>
                                   <li><a href="21421">䉄</a></li>
                                   <li><a href="21422">䉅</a></li>
                                   <li><a href="21423">䉆</a></li>
                                   <li><a href="21503">䊛</a></li>
                                   <li><a href="21504">䊜</a></li>
                                   <li><a href="21505">䊝</a></li>
                                   <li><a href="21506">䊞</a></li>
                                   <li><a href="21507">䊟</a></li>
                                   <li><a href="21508">䊠</a></li>
                                   <li><a href="21509">䊡</a></li>
                                   <li><a href="21510">䊢</a></li>
                                   <li><a href="21603">䌌</a></li>
                                   <li><a href="21604">䌍</a></li>
                                   <li><a href="21605">䌎</a></li>
                                   <li><a href="21606">䌏</a></li>
                                   <li><a href="21607">䌐</a></li>
                                   <li><a href="21609">䌒</a></li>
                                   <li><a href="21610">䌔</a></li>
                                   <li><a href="21611">䌕</a></li>
                                   <li><a href="21668">䍢</a></li>
                                   <li><a href="21734">䎮</a></li>
                                   <li><a href="21735">䎯</a></li>
                                   <li><a href="21754">䏄</a></li>
                                   <li><a href="21755">䏅</a></li>
                                   <li><a href="21756">䏆</a></li>
                                   <li><a href="21757">䏇</a></li>
                                   <li><a href="21846">䐹</a></li>
                                   <li><a href="21851">䐾</a></li>
                                   <li><a href="21852">䐿</a></li>
                                   <li><a href="21853">䑀</a></li>
                                   <li><a href="21854">䑁</a></li>
                                   <li><a href="21855">䑂</a></li>
                                   <li><a href="21856">䑃</a></li>
                                   <li><a href="21858">䑅</a></li>
                                   <li><a href="21875">䑞</a></li>
                                   <li><a href="21896">䑿</a></li>
                                   <li><a href="21897">䒀</a></li>
                                   <li><a href="21898">䒁</a></li>
                                   <li><a href="21899">䒂</a></li>
                                   <li><a href="21900">䒃</a></li>
                                   <li><a href="21901">䒄</a></li>
                                   <li><a href="21902">䒅</a></li>
                                   <li><a href="22050">䕒</a></li>
                                   <li><a href="22051">䕓</a></li>
                                   <li><a href="22052">䕔</a></li>
                                   <li><a href="22053">䕖</a></li>
                                   <li><a href="22054">䕗</a></li>
                                   <li><a href="22055">䕘</a></li>
                                   <li><a href="22056">䕙</a></li>
                                   <li><a href="22057">䕚</a></li>
                                   <li><a href="22058">䕛</a></li>
                                   <li><a href="22059">䕝</a></li>
                                   <li><a href="22063">䕣</a></li>
                                   <li><a href="22154">䗛</a></li>
                                   <li><a href="22158">䗟</a></li>
                                   <li><a href="22159">䗠</a></li>
                                   <li><a href="22160">䗡</a></li>
                                   <li><a href="22161">䗢</a></li>
                                   <li><a href="22162">䗣</a></li>
                                   <li><a href="22163">䗧</a></li>
                                   <li><a href="22164">䗨</a></li>
                                   <li><a href="22165">䗩</a></li>
                                   <li><a href="22166">䗫</a></li>
                                   <li><a href="22167">䗮</a></li>
                                   <li><a href="22169">䗰</a></li>
                                   <li><a href="22248">䙙</a></li>
                                   <li><a href="22249">䙚</a></li>
                                   <li><a href="22251">䙞</a></li>
                                   <li><a href="22252">䙟</a></li>
                                   <li><a href="22253">䙠</a></li>
                                   <li><a href="22254">䙡</a></li>
                                   <li><a href="22255">䙢</a></li>
                                   <li><a href="22256">䙣</a></li>
                                   <li><a href="22286">䚊</a></li>
                                   <li><a href="22287">䚋</a></li>
                                   <li><a href="22309">䚥</a></li>
                                   <li><a href="22310">䚦</a></li>
                                   <li><a href="22388">䛾</a></li>
                                   <li><a href="22389">䛿</a></li>
                                   <li><a href="22390">䜀</a></li>
                                   <li><a href="22419">䜰</a></li>
                                   <li><a href="22433">䝀</a></li>
                                   <li><a href="22487">䞃</a></li>
                                   <li><a href="22489">䞅</a></li>
                                   <li><a href="22490">䞆</a></li>
                                   <li><a href="22533">䞽</a></li>
                                   <li><a href="22534">䞾</a></li>
                                   <li><a href="22535">䞿</a></li>
                                   <li><a href="22536">䟀</a></li>
                                   <li><a href="22611">䠕</a></li>
                                   <li><a href="22612">䠗</a></li>
                                   <li><a href="22613">䠘</a></li>
                                   <li><a href="22614">䠙</a></li>
                                   <li><a href="22616">䠛</a></li>
                                   <li><a href="22618">䠝</a></li>
                                   <li><a href="22622">䠢</a></li>
                                   <li><a href="22644">䠽</a></li>
                                   <li><a href="22645">䠾</a></li>
                                   <li><a href="22679">䡥</a></li>
                                   <li><a href="22680">䡦</a></li>
                                   <li><a href="22681">䡧</a></li>
                                   <li><a href="22682">䡨</a></li>
                                   <li><a href="22683">䡩</a></li>
                                   <li><a href="22684">䡪</a></li>
                                   <li><a href="22729">䢬</a></li>
                                   <li><a href="22730">䢭</a></li>
                                   <li><a href="22731">䢮</a></li>
                                   <li><a href="22763">䣖</a></li>
                                   <li><a href="22771">䣟</a></li>
                                   <li><a href="22773">䣢</a></li>
                                   <li><a href="22808">䤉</a></li>
                                   <li><a href="22810">䤋</a></li>
                                   <li><a href="22850">䤷</a></li>
                                   <li><a href="22851">䤸</a></li>
                                   <li><a href="22852">䤺</a></li>
                                   <li><a href="22853">䤻</a></li>
                                   <li><a href="22933">䦪</a></li>
                                   <li><a href="22935">䦬</a></li>
                                   <li><a href="22936">䦭</a></li>
                                   <li><a href="22937">䦮</a></li>
                                   <li><a href="22984">䧫</a></li>
                                   <li><a href="22985">䧬</a></li>
                                   <li><a href="23001">䨁</a></li>
                                   <li><a href="23002">䨂</a></li>
                                   <li><a href="23027">䨞</a></li>
                                   <li><a href="23028">䨟</a></li>
                                   <li><a href="23029">䨠</a></li>
                                   <li><a href="23031">䨢</a></li>
                                   <li><a href="23032">䨣</a></li>
                                   <li><a href="23062">䩊</a></li>
                                   <li><a href="23088">䩩</a></li>
                                   <li><a href="23089">䩪</a></li>
                                   <li><a href="23090">䩫</a></li>
                                   <li><a href="23091">䩮</a></li>
                                   <li><a href="23092">䩯</a></li>
                                   <li><a href="23125">䪔</a></li>
                                   <li><a href="23133">䪠</a></li>
                                   <li><a href="23168">䫋</a></li>
                                   <li><a href="23169">䫌</a></li>
                                   <li><a href="23170">䫎</a></li>
                                   <li><a href="23171">䫐</a></li>
                                   <li><a href="23172">䫑</a></li>
                                   <li><a href="23173">䫒</a></li>
                                   <li><a href="23174">䫓</a></li>
                                   <li><a href="23225">䬋</a></li>
                                   <li><a href="23226">䬌</a></li>
                                   <li><a href="23227">䬍</a></li>
                                   <li><a href="23228">䬎</a></li>
                                   <li><a href="23229">䬏</a></li>
                                   <li><a href="23230">䬐</a></li>
                                   <li><a href="23267">䭄</a></li>
                                   <li><a href="23270">䭊</a></li>
                                   <li><a href="23296">䭰</a></li>
                                   <li><a href="23297">䭱</a></li>
                                   <li><a href="23298">䭲</a></li>
                                   <li><a href="23324">䮎</a></li>
                                   <li><a href="23325">䮏</a></li>
                                   <li><a href="23326">䮐</a></li>
                                   <li><a href="23327">䮑</a></li>
                                   <li><a href="23328">䮒</a></li>
                                   <li><a href="23383">䯕</a></li>
                                   <li><a href="23384">䯖</a></li>
                                   <li><a href="23385">䯗</a></li>
                                   <li><a href="23386">䯘</a></li>
                                   <li><a href="23387">䯙</a></li>
                                   <li><a href="23388">䯚</a></li>
                                   <li><a href="23414">䯹</a></li>
                                   <li><a href="23415">䯺</a></li>
                                   <li><a href="23469">䱊</a></li>
                                   <li><a href="23470">䱋</a></li>
                                   <li><a href="23552">䳏</a></li>
                                   <li><a href="23553">䳐</a></li>
                                   <li><a href="23554">䳒</a></li>
                                   <li><a href="23555">䳓</a></li>
                                   <li><a href="23556">䳔</a></li>
                                   <li><a href="23660">䵢</a></li>
                                   <li><a href="23661">䵣</a></li>
                                   <li><a href="23689">䶃</a></li>
                                   <li><a href="23698">䶒</a></li>
                                   <li><a href="23699">䶓</a></li>
                                   <li><a href="23895">儥</a></li>
                                   <li><a href="23914">噆</a></li>
                                   <li><a href="23919">嚃</a></li>
                                   <li><a href="23966">巁</a></li>
                                   <li><a href="24002">檖</a></li>
                                   <li><a href="24003">檨</a></li>
                                   <li><a href="24126">薵</a></li>
                                   <li><a href="24127">薶</a></li>
                                   <li><a href="24128">藂</a></li>
                                   <li><a href="24146">蹆</a></li>
                                   <li><a href="24156">醚</a></li>
                                   <li><a href="24165">餣</a></li>
                                   <li><a href="24166">餩</a></li>
                                   <li><a href="24193">㕓</a></li>
                                   <li><a href="24230">㬦</a></li>
                                   <li><a href="24235">㯬</a></li>
                                   <li><a href="24254">㸂</a></li>
                                   <li><a href="24282">䌓</a></li>
                                   <li><a href="24313">䔼</a></li>
                                   <li><a href="24325">䗦</a></li>
                                   <li><a href="24328">䙝</a></li>
                                   <li><a href="24346">䨤</a></li>
                                   <li><a href="24356">䭃</a></li>
                                   <li><a href="24357">䭅</a></li>
                                   <li><a href="24368">䳋</a></li>
                                   <li><a href="24373">幭</a></li>
                                   <li><a href="24395">䁱</a></li>
                                   <li><a href="24553">亸</a></li>
                                   <li><a href="24957">嚑</a></li>
                                   <li><a href="24958">嚒</a></li>
                                   <li><a href="24959">嚓</a></li>
                                   <li><a href="25068">嬷</a></li>
                                   <li><a href="25142">嶿</a></li>
                                   <li><a href="25430">闎</a></li>
                                   <li><a href="25432">闏</a></li>
                                   <li><a href="25455">鮳</a></li>
                                   <li><a href="25584">鞡</a></li>
                                   <li><a href="25600">濪</a></li>
                                   <li><a href="25601">濲</a></li>
                                   <li><a href="25602">濵</a></li>
                                   <li><a href="25663">燶</a></li>
                                   <li><a href="25665">燷</a></li>
                                   <li><a href="25799">璴</a></li>
                                   <li><a href="25823">瘾</a></li>
                                   <li><a href="25831">皼</a></li>
                                   <li><a href="25901">礂</a></li>
                                   <li><a href="25902">礃</a></li>
                                   <li><a href="25903">礄</a></li>
                                   <li><a href="25904">礅</a></li>
                                   <li><a href="25960">簕</a></li>
                                   <li><a href="25961">簖</a></li>
                                   <li><a href="26028">魉</a></li>
                                   <li><a href="26038">繌</a></li>
                                   <li><a href="26149">鹾</a></li>
                                   <li><a href="26152">黉</a></li>
                                   <li><a href="26191">龧</a></li>
                                   <li><a href="26553">蟏</a></li>
                                   <li><a href="26582">謢</a></li>
                                   <li><a href="26858">蹒</a></li>
                                   <li><a href="26859">蹓</a></li>
                                   <li><a href="26917">㠜</a></li>
                                   <li><a href="26929">辪</a></li>
                                   <li><a href="27124">㦠</a></li>
                                   <li><a href="27139">鎅</a></li>
                                   <li><a href="27140">鎆</a></li>
                                   <li><a href="27148">鎾</a></li>
                                   <li><a href="27179">㩟</a></li>
                                   <li><a href="27206">㭀</a></li>
                                   <li><a href="27239">㯞</a></li>
                                   <li><a href="27243">㯴</a></li>
                                   <li><a href="27246">㯼</a></li>
                                   <li><a href="27397">㼀</a></li>
                                   <li><a href="27398">㼁</a></li>
                                   <li><a href="27399">㼂</a></li>
                                   <li><a href="27417">䱄</a></li>
                                   <li><a href="27421">䯼</a></li>
                                   <li><a href="27422">䯻</a></li>
                                   <li><a href="27436">䫍</a></li>
                                   <li><a href="27444">䧭</a></li>
                                   <li><a href="27475">䤼</a></li>
                                   <li><a href="27478">䤌</a></li>
                                   <li><a href="27509">䜿</a></li>
                                   <li><a href="27519">䜂</a></li>
                                   <li><a href="27524">䚌</a></li>
                                   <li><a href="27542">䗭</a></li>
                                   <li><a href="27547">䕜</a></li>
                                   <li><a href="27548">䕕</a></li>
                                   <li><a href="27549">䕐</a></li>
                                   <li><a href="27578">䎭</a></li>
                                   <li><a href="27604">䉇</a></li>
                                   <li><a href="27628">䃟</a></li>
                                   <li><a href="27659">㽅</a></li>
                                   <li><a href="27731">𥢓</a></li>
                                   <li><a href="27733">𤪉</a></li>
                                   <li><a href="27735">𨲢</a></li>
                                   <li><a href="27746">𨉷</a></li>
                                   <li><a href="27784">𠢹</a></li>
                                   <li><a href="27829">𡽶</a></li>
                                   <li><a href="27836">𢢫</a></li>
                                   <li><a href="27844">𢷡</a></li>
                                   <li><a href="27869">𣜌</a></li>
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