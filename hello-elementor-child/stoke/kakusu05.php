<?php
/*
 * Template Name: kakusu05
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
               <h1 class="ttl_main">５画の漢字一覧（漢検級順）</h1>

               <p>総画数５画の漢字の一覧です。<br>
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
                                   <option value="#" selected>５画</option>
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
                              <li><a href="bkakusu05">部首別順</a></li>
                              <li><a href="ckakusu05">読み順</a></li>
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
                                   <li><a class="color1" href="kanji/012">玉</a></li>
                                   <li><a class="color1" href="kanji/023">左</a></li>
                                   <li><a class="color1" href="kanji/026">四</a></li>
                                   <li><a class="color1" href="kanji/035">出</a></li>
                                   <li><a class="color1" href="kanji/038">正</a></li>
                                   <li><a class="color1" href="kanji/043">生</a></li>
                                   <li><a class="color1" href="kanji/046">石</a></li>
                                   <li><a class="color1" href="kanji/062">田</a></li>
                                   <li><a class="color1" href="kanji/068">白</a></li>
                                   <li><a class="color1" href="kanji/071">本</a></li>
                                   <li><a class="color1" href="kanji/074">目</a></li>
                                   <li><a class="color1" href="kanji/076">右</a></li>
                                   <li><a class="color1" href="kanji/078">立</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts09">
                              <h3 class="ttl_while"><a href="kyu09">漢字検定９級（小学校２年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/096">外</a></li>
                                   <li><a class="color1" href="kanji/114">兄</a></li>
                                   <li><a class="color1" href="kanji/121">古</a></li>
                                   <li><a class="color1" href="kanji/126">広</a></li>
                                   <li><a class="color1" href="kanji/144">矢</a></li>
                                   <li><a class="color1" href="kanji/146">市</a></li>
                                   <li><a class="color1" href="kanji/183">台</a></li>
                                   <li><a class="color1" href="kanji/198">冬</a></li>
                                   <li><a class="color1" href="kanji/213">半</a></li>
                                   <li><a class="color1" href="kanji/221">母</a></li>
                                   <li><a class="color1" href="kanji/223">北</a></li>
                                   <li><a class="color1" href="kanji/235">用</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts08">
                              <h3 class="ttl_while"><a href="kyu08">漢字検定８級（小学校３年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/254">央</a></li>
                                   <li><a class="color1" href="kanji/273">去</a></li>
                                   <li><a class="color1" href="kanji/296">号</a></li>
                                   <li><a class="color1" href="kanji/299">皿</a></li>
                                   <li><a class="color1" href="kanji/305">仕</a></li>
                                   <li><a class="color1" href="kanji/312">写</a></li>
                                   <li><a class="color1" href="kanji/317">主</a></li>
                                   <li><a class="color1" href="kanji/340">申</a></li>
                                   <li><a class="color1" href="kanji/344">世</a></li>
                                   <li><a class="color1" href="kanji/353">他</a></li>
                                   <li><a class="color1" href="kanji/354">打</a></li>
                                   <li><a class="color1" href="kanji/355">代</a></li>
                                   <li><a class="color1" href="kanji/396">皮</a></li>
                                   <li><a class="color1" href="kanji/400">氷</a></li>
                                   <li><a class="color1" href="kanji/410">平</a></li>
                                   <li><a class="color1" href="kanji/420">由</a></li>
                                   <li><a class="color1" href="kanji/435">礼</a></li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts07">
                              <h3 class="ttl_while"><a href="kyu07">漢字検定７級（小学校４年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/442">以</a></li>
                                   <li><a class="color1" href="kanji/454">加</a></li>
                                   <li><a class="color1" href="501">功</a></li>
                                   <li><a class="color1" href="513">札</a></li>
                                   <li><a class="color1" href="523">司</a></li>
                                   <li><a class="color1" href="527">失</a></li>
                                   <li><a class="color1" href="595">必</a></li>
                                   <li><a class="color1" href="598">付</a></li>
                                   <li><a class="color1" href="607">辺</a></li>
                                   <li><a class="color1" href="611">包</a></li>
                                   <li><a class="color1" href="614">末</a></li>
                                   <li><a class="color1" href="616">未</a></li>
                                   <li><a class="color1" href="618">民</a></li>
                                   <li><a class="color1" href="632">令</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts06">
                              <h3 class="ttl_while"><a href="kyu06">漢字検定６級（小学校５年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="520">史</a></li>
                                   <li><a class="color1" href="640">圧</a></li>
                                   <li><a class="color1" href="643">永</a></li>
                                   <li><a class="color1" href="656">可</a></li>
                                   <li><a class="color1" href="667">刊</a></li>
                                   <li><a class="color1" href="675">旧</a></li>
                                   <li><a class="color1" href="682">句</a></li>
                                   <li><a class="color1" href="722">示</a></li>
                                   <li><a class="color1" href="787">犯</a></li>
                                   <li><a class="color1" href="798">布</a></li>
                                   <li><a class="color1" href="805">弁</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts05">
                              <h3 class="ttl_while"><a href="kyu05">漢字検定５級（小学校６年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="858">穴</a></li>
                                   <li><a class="color1" href="882">冊</a></li>
                                   <li><a class="color1" href="906">処</a></li>
                                   <li><a class="color1" href="950">庁</a></li>
                                   <li><a class="color1" href="993">幼</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts04">
                              <h3 class="ttl_while"><a href="kyu04">漢字検定４級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1038">甘</a>
                                   </li>
                                   <li><a class="color1" href="1057">丘</a>
                                   </li>
                                   <li><a class="color1" href="1061">巨</a>
                                   </li>
                                   <li><a class="color1" href="1088">玄</a>
                                   </li>
                                   <li><a class="color1" href="1103">込</a>
                                   </li>
                                   <li><a class="color1" href="1138">召</a>
                                   </li>
                                   <li><a class="color1" href="1165">占</a>
                                   </li>
                                   <li><a class="color1" href="1204">奴</a>
                                   </li>
                                   <li><a class="color1" href="1260">払</a>
                                   </li>
                                   <li><a class="color1" href="1281">矛</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts03">
                              <h3 class="ttl_while"><a href="kyu03">漢字検定３級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1397">甲</a>
                                   </li>
                                   <li><a class="color1" href="1404">巧</a>
                                   </li>
                                   <li><a class="color1" href="1469">斥</a>
                                   </li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts02j">
                              <h3 class="ttl_while"><a href="kyu02j">漢字検定準２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1613">凹</a>
                                   </li>
                                   <li><a class="color1" href="1636">且</a>
                                   </li>
                                   <li><a class="color1" href="1721">囚</a>
                                   </li>
                                   <li><a class="color1" href="1728">汁</a>
                                   </li>
                                   <li><a class="color1" href="1784">仙</a>
                                   </li>
                                   <li><a class="color1" href="1846">凸</a>
                                   </li>
                                   <li><a class="color1" href="1849">尼</a>
                                   </li>
                                   <li><a class="color1" href="1886">丙</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02">
                              <h3 class="ttl_while"><a href="kyu02">漢字検定２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1960">瓦</a>
                                   </li>
                                   <li><a class="color1" href="2019">叱</a>
                                   </li>
                                   <li><a class="color1" href="2028">尻</a>
                                   </li>
                                   <li><a class="color1" href="2056">旦</a>
                                   </li>
                                   <li><a class="color1" href="2076">丼</a>
                                   </li>
                                   <li><a class="color1" href="2088">氾</a>
                                   </li>
                                   <li><a class="color1" href="27700">𠮟</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01j">
                              <h3 class="ttl_while"><a href="kyu01j">漢字検定準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="2211">禾</a>
                                   </li>
                                   <li><a class="color2" href="2318">叶</a>
                                   </li>
                                   <li><a class="color2" href="2344">弘</a>
                                   </li>
                                   <li><a class="color2" href="2374">乎</a>
                                   </li>
                                   <li><a href="2394">叩</a></li>
                                   <li><a href="2430">乍</a></li>
                                   <li><a class="color2" href="2461">仔</a>
                                   </li>
                                   <li><a class="color2" href="2464">只</a>
                                   </li>
                                   <li><a class="color2" href="2543">疋</a>
                                   </li>
                                   <li><a href="2656">匝</a></li>
                                   <li><a class="color2" href="2707">凧</a>
                                   </li>
                                   <li><a class="color2" href="2752">汀</a>
                                   </li>
                                   <li><a href="2886">弗</a></li>
                                   <li><a class="color2" href="2904">戊</a>
                                   </li>
                                   <li><a class="color2" href="2919">卯</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01">
                              <h3 class="ttl_while"><a href="kyu01">漢字検定１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="3056">丕</a></li>
                                   <li><a href="3057">丱</a></li>
                                   <li><a href="3061">弍</a></li>
                                   <li><a href="3069">仗</a></li>
                                   <li><a href="3070">仞</a></li>
                                   <li><a href="3071">仭</a></li>
                                   <li><a href="3072">仟</a></li>
                                   <li><a href="3152">冉</a></li>
                                   <li><a href="3168">刋</a></li>
                                   <li><a href="3196">匆</a></li>
                                   <li><a href="3209">丗</a></li>
                                   <li><a href="3210">卉</a></li>
                                   <li><a href="3212">卮</a></li>
                                   <li><a href="3218">叮</a></li>
                                   <li><a href="3219">叨</a></li>
                                   <li><a href="3220">叭</a></li>
                                   <li><a href="3221">叺</a></li>
                                   <li><a href="3329">圦</a></li>
                                   <li><a href="3363">夲</a></li>
                                   <li><a href="3419">孕</a></li>
                                   <li><a href="3448">屶</a></li>
                                   <li><a href="3643">戉</a></li>
                                   <li><a href="3999">朮</a></li>
                                   <li><a href="5313">艾</a></li>
                                   <li><a href="5499">辷</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts0101j">
                              <h3 class="ttl_while"><a href="kyu0101j">漢字検定１級 / 準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="5761">册</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts">
                              <h3 class="ttl_while">漢字検定対象外</h3>
                              <ul class="search_parts">
                                   <li><a href="5748">癶</a></li>
                                   <li><a href="5760">囘</a></li>
                                   <li><a href="5880">尓</a></li>
                                   <li><a href="6073">夘</a></li>
                                   <li><a href="6115">它</a></li>
                                   <li><a href="6593">㐀</a></li>
                                   <li><a href="7910">阞</a></li>
                                   <li><a href="8630">卭</a></li>
                                   <li><a href="9361">艽</a></li>
                                   <li><a href="9362">芁</a></li>
                                   <li><a href="9363">艿</a></li>
                                   <li><a href="9364">芀</a></li>
                                   <li><a href="9365">艻</a></li>
                                   <li><a href="10108">玊</a></li>
                                   <li><a href="10293">甩</a></li>
                                   <li><a href="10341">疒</a></li>
                                   <li><a href="10820">禸</a></li>
                                   <li><a href="11024">忉</a></li>
                                   <li><a href="11025">忇</a></li>
                                   <li><a href="11235">戹</a></li>
                                   <li><a href="11267">扖</a></li>
                                   <li><a href="11268">扔</a></li>
                                   <li><a href="11269">扒</a></li>
                                   <li><a href="11270">扑</a></li>
                                   <li><a href="11271">扐</a></li>
                                   <li><a href="11911">肊</a></li>
                                   <li><a href="11933">术</a></li>
                                   <li><a href="11987">匛</a></li>
                                   <li><a href="12335">厉</a></li>
                                   <li><a href="12368">㠯</a></li>
                                   <li><a href="12369">仠</a></li>
                                   <li><a href="12370">仡</a></li>
                                   <li><a href="12371">仚</a></li>
                                   <li><a href="12372">仨</a></li>
                                   <li><a href="12373">㐱</a></li>
                                   <li><a href="12374">仛</a></li>
                                   <li><a href="12376">仝</a></li>
                                   <li><a href="12377">仜</a></li>
                                   <li><a href="12378">仢</a></li>
                                   <li><a href="12379">仫</a></li>
                                   <li><a href="12391">㒰</a></li>
                                   <li><a href="12676">兂</a></li>
                                   <li><a href="12693">冋</a></li>
                                   <li><a href="12700">叧</a></li>
                                   <li><a href="12703">宂</a></li>
                                   <li><a href="12724">凥</a></li>
                                   <li><a href="12726">处</a></li>
                                   <li><a href="12731">凷</a></li>
                                   <li><a href="12734">㓛</a></li>
                                   <li><a href="12741">刉</a></li>
                                   <li><a href="12742">刌</a></li>
                                   <li><a href="12887">亗</a></li>
                                   <li><a href="12891">歺</a></li>
                                   <li><a href="12921">匃</a></li>
                                   <li><a href="12922">匄</a></li>
                                   <li><a href="12923">匇</a></li>
                                   <li><a href="12951">匜</a></li>
                                   <li><a href="12954">匞</a></li>
                                   <li><a href="12999">卌</a></li>
                                   <li><a href="13005">业</a></li>
                                   <li><a href="13013">乧</a></li>
                                   <li><a href="13037">仧</a></li>
                                   <li><a href="13124">冭</a></li>
                                   <li><a href="13125">冮</a></li>
                                   <li><a href="13140">刍</a></li>
                                   <li><a href="13171">卟</a></li>
                                   <li><a href="13172">卡</a></li>
                                   <li><a href="13183">厇</a></li>
                                   <li><a href="13184">厈</a></li>
                                   <li><a href="13206">厺</a></li>
                                   <li><a href="13213">叏</a></li>
                                   <li><a href="13218">另</a></li>
                                   <li><a href="13219">叴</a></li>
                                   <li><a href="13220">叵</a></li>
                                   <li><a href="13221">叹</a></li>
                                   <li><a href="13222">叻</a></li>
                                   <li><a href="13223">叼</a></li>
                                   <li><a href="13601">囙</a></li>
                                   <li><a href="13602">囜</a></li>
                                   <li><a href="13632">圢</a></li>
                                   <li><a href="13633">圣</a></li>
                                   <li><a href="13634">圤</a></li>
                                   <li><a href="13635">圥</a></li>
                                   <li><a href="13910">夯</a></li>
                                   <li><a href="13911">夰</a></li>
                                   <li><a href="13912">夳</a></li>
                                   <li><a href="13936">奵</a></li>
                                   <li><a href="13937">奶</a></li>
                                   <li><a href="14285">宁</a></li>
                                   <li><a href="14286">宄</a></li>
                                   <li><a href="14330">对</a></li>
                                   <li><a href="14336">尒</a></li>
                                   <li><a href="14337">尔</a></li>
                                   <li><a href="14378">屳</a></li>
                                   <li><a href="14379">屴</a></li>
                                   <li><a href="14380">屵</a></li>
                                   <li><a href="14608">帄</a></li>
                                   <li><a href="14609">帅</a></li>
                                   <li><a href="14664">庀</a></li>
                                   <li><a href="14665">庂</a></li>
                                   <li><a href="14754">归</a></li>
                                   <li><a href="14798">忊</a></li>
                                   <li><a href="14901">扏</a></li>
                                   <li><a href="15132">曱</a></li>
                                   <li><a href="15415">氶</a></li>
                                   <li><a href="15416">氹</a></li>
                                   <li><a href="15418">氻</a></li>
                                   <li><a href="15421">氿</a></li>
                                   <li><a href="15422">汃</a></li>
                                   <li><a href="15423">汄</a></li>
                                   <li><a href="15424">汅</a></li>
                                   <li><a href="16346">犰</a></li>
                                   <li><a href="16474">玌</a></li>
                                   <li><a href="16475">玍</a></li>
                                   <li><a href="16587">甴</a></li>
                                   <li><a href="17199">艼</a></li>
                                   <li><a href="17931">邒</a></li>
                                   <li><a href="17932">邓</a></li>
                                   <li><a href="18620">龱</a></li>
                                   <li><a href="18644">㐌</a></li>
                                   <li><a href="18645">㐍</a></li>
                                   <li><a href="18646">㐎</a></li>
                                   <li><a href="18647">㐏</a></li>
                                   <li><a href="18677">㐰</a></li>
                                   <li><a href="18678">㐲</a></li>
                                   <li><a href="18679">㐳</a></li>
                                   <li><a href="18680">㐴</a></li>
                                   <li><a href="18681">㐶</a></li>
                                   <li><a href="18780">㓚</a></li>
                                   <li><a href="18781">㓜</a></li>
                                   <li><a href="18817">㔓</a></li>
                                   <li><a href="18877">㕣</a></li>
                                   <li><a href="18878">㕤</a></li>
                                   <li><a href="18879">㕥</a></li>
                                   <li><a href="19026">㘞</a></li>
                                   <li><a href="19033">㘦</a></li>
                                   <li><a href="19261">㝊</a></li>
                                   <li><a href="19262">㝋</a></li>
                                   <li><a href="19316">㞋</a></li>
                                   <li><a href="19335">㞤</a></li>
                                   <li><a href="19336">㞥</a></li>
                                   <li><a href="19337">㞦</a></li>
                                   <li><a href="19338">㞧</a></li>
                                   <li><a href="19452">㠲</a></li>
                                   <li><a href="19589">㣔</a></li>
                                   <li><a href="19761">㧃</a></li>
                                   <li><a href="19762">㧄</a></li>
                                   <li><a href="19763">㧅</a></li>
                                   <li><a href="19934">㪲</a></li>
                                   <li><a href="19935">㪳</a></li>
                                   <li><a href="20302">㲹</a></li>
                                   <li><a href="20303">㲺</a></li>
                                   <li><a href="20305">㲼</a></li>
                                   <li><a href="21654">䍏</a></li>
                                   <li><a href="21913">䒒</a></li>
                                   <li><a href="21914">䒓</a></li>
                                   <li><a href="22735">䢳</a></li>
                                   <li><a href="22942">䦹</a></li>
                                   <li><a href="22943">䦺</a></li>
                                   <li><a href="23896">叐</a></li>
                                   <li><a href="23941">夗</a></li>
                                   <li><a href="24067">犮</a></li>
                                   <li><a href="24199">㘝</a></li>
                                   <li><a href="24202">㚈</a></li>
                                   <li><a href="24204">㚢</a></li>
                                   <li><a href="24293">䒔</a></li>
                                   <li><a href="24376">氐</a></li>
                                   <li><a href="24392">㔺</a></li>
                                   <li><a href="24528">丛</a></li>
                                   <li><a href="24530">丝</a></li>
                                   <li><a href="24560">仦</a></li>
                                   <li><a href="24561">仩</a></li>
                                   <li><a href="24685">兰</a></li>
                                   <li><a href="24694">冚</a></li>
                                   <li><a href="24716">击</a></li>
                                   <li><a href="24730">务</a></li>
                                   <li><a href="24732">劢</a></li>
                                   <li><a href="24739">卢</a></li>
                                   <li><a href="24760">厼</a></li>
                                   <li><a href="24773">发</a></li>
                                   <li><a href="24777">叽</a></li>
                                   <li><a href="24778">叾</a></li>
                                   <li><a href="25021">壭</a></li>
                                   <li><a href="25026">头</a></li>
                                   <li><a href="25094">尕</a></li>
                                   <li><a href="25104">屷</a></li>
                                   <li><a href="25259">戋</a></li>
                                   <li><a href="25367">朰</a></li>
                                   <li><a href="25447">队</a></li>
                                   <li><a href="25489">氕</a></li>
                                   <li><a href="25498">汇</a></li>
                                   <li><a href="25499">汈</a></li>
                                   <li><a href="25500">汉</a></li>
                                   <li><a href="25607">灭</a></li>
                                   <li><a href="25802">电</a></li>
                                   <li><a href="26340">节</a></li>
                                   <li><a href="26383">㐵</a></li>
                                   <li><a href="26413">㒱</a></li>
                                   <li><a href="26819">㚎</a></li>
                                   <li><a href="26894">㝳</a></li>
                                   <li><a href="26924">㠳</a></li>
                                   <li><a href="26932">辽</a></li>
                                   <li><a href="27718">𠀑</a></li>
                                   <li><a href="27730">𠙺</a></li>
                                   <li><a href="27742">𦫿</a></li>
                                   <li><a href="27876">𣱿</a></li>
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