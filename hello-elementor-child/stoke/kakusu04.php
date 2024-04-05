<?php
/*
 * Template Name: kakusu04
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
               <h1 class="ttl_main">４画の漢字一覧（漢検級順）</h1>

               <p>総画数４画の漢字の一覧です。<br>
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
                                   <option value="#" selected>４画</option>
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
                              <li><a href="bkakusu04">部首別順</a></li>
                              <li><a href="ckakusu04">読み順</a></li>
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
                                   <li><a class="color1" href="kanji/004">円</a></li>
                                   <li><a class="color1" href="kanji/005">王</a></li>
                                   <li><a class="color1" href="kanji/006">火</a></li>
                                   <li><a class="color1" href="kanji/016">月</a></li>
                                   <li><a class="color1" href="kanji/018">犬</a></li>
                                   <li><a class="color1" href="kanji/019">五</a></li>
                                   <li><a class="color1" href="kanji/033">手</a></li>
                                   <li><a class="color1" href="kanji/042">水</a></li>
                                   <li><a class="color1" href="kanji/059">中</a></li>
                                   <li><a class="color1" href="kanji/061">天</a></li>
                                   <li><a class="color1" href="kanji/065">日</a></li>
                                   <li><a class="color1" href="kanji/073">木</a></li>
                                   <li><a class="color1" href="kanji/075">文</a></li>
                                   <li><a class="color1" href="kanji/080">六</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts09">
                              <h3 class="ttl_while"><a href="kyu09">漢字検定９級（小学校２年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/081">引</a></li>
                                   <li><a class="color1" href="kanji/108">牛</a></li>
                                   <li><a class="color1" href="kanji/113">今</a></li>
                                   <li><a class="color1" href="kanji/120">元</a></li>
                                   <li><a class="color1" href="kanji/122">戸</a></li>
                                   <li><a class="color1" href="kanji/124">午</a></li>
                                   <li><a class="color1" href="kanji/130">公</a></li>
                                   <li><a class="color1" href="kanji/147">止</a></li>
                                   <li><a class="color1" href="kanji/160">少</a></li>
                                   <li><a class="color1" href="kanji/165">心</a></li>
                                   <li><a class="color1" href="kanji/174">切</a></li>
                                   <li><a class="color1" href="kanji/180">太</a></li>
                                   <li><a class="color1" href="kanji/206">内</a></li>
                                   <li><a class="color1" href="kanji/215">父</a></li>
                                   <li><a class="color1" href="kanji/218">分</a></li>
                                   <li><a class="color1" href="kanji/222">方</a></li>
                                   <li><a class="color1" href="kanji/229">毛</a></li>
                                   <li><a class="color1" href="kanji/233">友</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts08">
                              <h3 class="ttl_while"><a href="kyu08">漢字検定８級（小学校３年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/280">区</a></li>
                                   <li><a class="color1" href="kanji/284">化</a></li>
                                   <li><a class="color1" href="kanji/392">反</a></li>
                                   <li><a class="color1" href="kanji/424">予</a></li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts07">
                              <h3 class="ttl_while"><a href="kyu07">漢字検定７級（小学校４年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/495">欠</a></li>
                                   <li><a class="color1" href="519">氏</a></li>
                                   <li><a class="color1" href="600">不</a></li>
                                   <li><a class="color1" href="601">夫</a></li>
                                   <li><a class="color1" href="1162">井</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts06">
                              <h3 class="ttl_while"><a href="kyu06">漢字検定６級（小学校５年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="716">支</a></li>
                                   <li><a class="color1" href="791">比</a></li>
                                   <li><a class="color1" href="803">仏</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts05">
                              <h3 class="ttl_while"><a href="kyu05">漢字検定５級（小学校６年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="893">尺</a></li>
                                   <li><a class="color1" href="897">収</a></li>
                                   <li><a class="color1" href="915">仁</a></li>
                                   <li><a class="color1" href="2136">片</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts04">
                              <h3 class="ttl_while"><a href="kyu04">漢字検定４級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1031">介</a>
                                   </li>
                                   <li><a class="color1" href="1037">刈</a>
                                   </li>
                                   <li><a class="color1" href="1065">凶</a>
                                   </li>
                                   <li><a class="color1" href="1093">互</a>
                                   </li>
                                   <li><a class="color1" href="1180">丹</a>
                                   </li>
                                   <li><a class="color1" href="1247">匹</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts03">
                              <h3 class="ttl_while"><a href="kyu03">漢字検定３級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1376">斤</a>
                                   </li>
                                   <li><a class="color1" href="1390">幻</a>
                                   </li>
                                   <li><a class="color1" href="1398">孔</a>
                                   </li>
                                   <li><a class="color1" href="1449">冗</a>
                                   </li>
                                   <li><a class="color1" href="1478">双</a>
                                   </li>
                                   <li><a class="color1" href="1516">斗</a>
                                   </li>
                                   <li><a class="color1" href="1562">乏</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02j">
                              <h3 class="ttl_while"><a href="kyu02j">漢字検定準２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1742">升</a>
                                   </li>
                                   <li><a class="color1" href="1818">弔</a>
                                   </li>
                                   <li><a class="color1" href="1847">屯</a>
                                   </li>
                                   <li><a class="color1" href="1909">厄</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02">
                              <h3 class="ttl_while"><a href="kyu02">漢字検定２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1959">牙</a>
                                   </li>
                                   <li><a class="color1" href="1998">勾</a>
                                   </li>
                                   <li><a class="color1" href="2064">爪</a>
                                   </li>
                                   <li><a class="color1" href="2082">匂</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01j">
                              <h3 class="ttl_while"><a href="kyu01j">漢字検定準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="2161">允</a>
                                   </li>
                                   <li><a class="color2" href="2171">云</a>
                                   </li>
                                   <li><a href="2296">仇</a></li>
                                   <li><a href="2523">什</a></li>
                                   <li><a class="color2" href="2524">廿</a>
                                   </li>
                                   <li><a class="color2" href="2605">壬</a>
                                   </li>
                                   <li><a class="color2" href="2723">丑</a>
                                   </li>
                                   <li><a class="color2" href="2811">巴</a>
                                   </li>
                                   <li><a class="color2" href="2887">勿</a>
                                   </li>
                                   <li><a class="color2" href="2933">匁</a>
                                   </li>
                                   <li><a class="color2" href="2946">尤</a>
                                   </li>
                                   <li><a href="6524">帀</a></li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts01">
                              <h3 class="ttl_while"><a href="kyu01">漢字検定１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="3054">弌</a></li>
                                   <li><a href="3055">丐</a></li>
                                   <li><a href="3063">亢</a></li>
                                   <li><a href="3065">仍</a></li>
                                   <li><a href="3066">仄</a></li>
                                   <li><a href="3067">仆</a></li>
                                   <li><a href="3068">仂</a></li>
                                   <li><a href="3208">卅</a></li>
                                   <li><a href="3361">夬</a></li>
                                   <li><a href="3362">夭</a></li>
                                   <li><a href="3440">尹</a></li>
                                   <li><a href="3519">弖</a></li>
                                   <li><a href="3642">戈</a></li>
                                   <li><a href="3655">扎</a></li>
                                   <li><a href="4249">曰</a></li>
                                   <li><a href="4898">毋</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts0101j">
                              <h3 class="ttl_while"><a href="kyu0101j">漢字検定１級 / 準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="12696">內</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts">
                              <h3 class="ttl_while">漢字検定対象外</h3>
                              <ul class="search_parts">
                                   <li><a href="5669">卆</a></li>
                                   <li><a href="5687">气</a></li>
                                   <li><a href="5729">无</a></li>
                                   <li><a href="5733">攵</a></li>
                                   <li><a href="5734">攴</a></li>
                                   <li><a href="5740">从</a></li>
                                   <li><a href="5776">乢</a></li>
                                   <li><a href="5841">兮</a></li>
                                   <li><a href="5905">歹</a></li>
                                   <li><a href="5974">卞</a></li>
                                   <li><a href="6028">殳</a></li>
                                   <li><a href="6029">爻</a></li>
                                   <li><a href="6205">旡</a></li>
                                   <li><a href="6249">爿</a></li>
                                   <li><a href="6591">丒</a></li>
                                   <li><a href="6592">丏</a></li>
                                   <li><a href="6607">丯</a></li>
                                   <li><a href="6608">丰</a></li>
                                   <li><a href="6609">丮</a></li>
                                   <li><a href="6612">㞢</a></li>
                                   <li><a href="6695">乣</a></li>
                                   <li><a href="7969">厸</a></li>
                                   <li><a href="11233">戶</a></li>
                                   <li><a href="11234">户</a></li>
                                   <li><a href="11766">厷</a></li>
                                   <li><a href="12364">仐</a></li>
                                   <li><a href="12365">仃</a></li>
                                   <li><a href="12366">仈</a></li>
                                   <li><a href="12367">仅</a></li>
                                   <li><a href="12399">开</a></li>
                                   <li><a href="12691">亓</a></li>
                                   <li><a href="12697">冃</a></li>
                                   <li><a href="12698">冄</a></li>
                                   <li><a href="12702">冘</a></li>
                                   <li><a href="12709">仌</a></li>
                                   <li><a href="12793">刅</a></li>
                                   <li><a href="12916">勻</a></li>
                                   <li><a href="12917">匀</a></li>
                                   <li><a href="12918">勼</a></li>
                                   <li><a href="12959">毌</a></li>
                                   <li><a href="13004">卝</a></li>
                                   <li><a href="13012">乤</a></li>
                                   <li><a href="13031">亖</a></li>
                                   <li><a href="13032">亣</a></li>
                                   <li><a href="13036">仉</a></li>
                                   <li><a href="13122">冈</a></li>
                                   <li><a href="13138">凤</a></li>
                                   <li><a href="13155">劝</a></li>
                                   <li><a href="13167">勽</a></li>
                                   <li><a href="13176">卬</a></li>
                                   <li><a href="13182">厃</a></li>
                                   <li><a href="13205">厹</a></li>
                                   <li><a href="13630">圠</a></li>
                                   <li><a href="13631">圡</a></li>
                                   <li><a href="13894">夃</a></li>
                                   <li><a href="14335">尐</a></li>
                                   <li><a href="14344">尣</a></li>
                                   <li><a href="14606">巿</a></li>
                                   <li><a href="14607">币</a></li>
                                   <li><a href="15141">朩</a></li>
                                   <li><a href="15997">灬</a></li>
                                   <li><a href="18642">㐊</a></li>
                                   <li><a href="18643">㐋</a></li>
                                   <li><a href="18765">㓅</a></li>
                                   <li><a href="18837">㔫</a></li>
                                   <li><a href="18844">㔹</a></li>
                                   <li><a href="18867">㕕</a></li>
                                   <li><a href="18871">㕚</a></li>
                                   <li><a href="19447">㠪</a></li>
                                   <li><a href="19553">㢧</a></li>
                                   <li><a href="20301">㲸</a></li>
                                   <li><a href="20572">㸦</a></li>
                                   <li><a href="24194">㕛</a></li>
                                   <li><a href="24391">㐄</a></li>
                                   <li><a href="24551">乥</a></li>
                                   <li><a href="24557">仑</a></li>
                                   <li><a href="24558">仒</a></li>
                                   <li><a href="24559">仓</a></li>
                                   <li><a href="24684">兯</a></li>
                                   <li><a href="24692">冇</a></li>
                                   <li><a href="24742">厅</a></li>
                                   <li><a href="24743">历</a></li>
                                   <li><a href="25103">屲</a></li>
                                   <li><a href="25231">忆</a></li>
                                   <li><a href="26293">肀</a></li>
                                   <li><a href="26338">艺</a></li>
                                   <li><a href="26481">㓀</a></li>
                                   <li><a href="26892">㝉</a></li>
                                   <li><a href="27695">𠀋</a></li>
                                   <li><a href="27696">𡈽</a></li>
                                   <li><a href="27719">𡆠</a></li>
                                   <li><a href="27762">𠬝</a></li>
                                   <li><a href="27785">𠥼</a></li>
                                   <li><a href="27818">𡴭</a></li>
                                   <li><a href="27854">𣎳</a></li>
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
		 	<!-- <script>
jQuery(document).ready(function ($) {
    
 $('#wrapper a').attr('href','#');  
})
		</script> -->
          
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
     </div><!--wrapper-->
     <?php wp_footer() ?>