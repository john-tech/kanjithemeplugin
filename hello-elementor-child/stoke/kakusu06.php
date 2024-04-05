<?php
/*
 * Template Name: kakusu06
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
               <h1 class="ttl_main">６画の漢字一覧（漢検級順）</h1>

               <p>総画数６画の漢字の一覧です。<br>
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
                                   <option value="#" selected>６画</option>
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
                              <li><a href="bkakusu06">部首別順</a></li>
                              <li><a href="ckakusu06">読み順</a></li>
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
                                   <li><a class="color1" href="kanji/010">休</a></li>
                                   <li><a class="color1" href="kanji/014">気</a></li>
                                   <li><a class="color1" href="kanji/028">糸</a></li>
                                   <li><a class="color1" href="kanji/029">字</a></li>
                                   <li><a class="color1" href="kanji/030">耳</a></li>
                                   <li><a class="color1" href="kanji/049">先</a></li>
                                   <li><a class="color1" href="kanji/052">早</a></li>
                                   <li><a class="color1" href="kanji/057">竹</a></li>
                                   <li><a class="color1" href="kanji/058">虫</a></li>
                                   <li><a class="color1" href="kanji/067">年</a></li>
                                   <li><a class="color1" href="kanji/070">百</a></li>
                                   <li><a class="color1" href="kanji/072">名</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts09">
                              <h3 class="ttl_while"><a href="kyu09">漢字検定９級（小学校２年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/082">羽</a></li>
                                   <li><a class="color1" href="kanji/092">会</a></li>
                                   <li><a class="color1" href="kanji/093">回</a></li>
                                   <li><a class="color1" href="kanji/127">交</a></li>
                                   <li><a class="color1" href="kanji/129">光</a></li>
                                   <li><a class="color1" href="kanji/131">考</a></li>
                                   <li><a class="color1" href="kanji/133">行</a></li>
                                   <li><a class="color1" href="kanji/135">合</a></li>
                                   <li><a class="color1" href="kanji/149">寺</a></li>
                                   <li><a class="color1" href="kanji/150">自</a></li>
                                   <li><a class="color1" href="kanji/151">色</a></li>
                                   <li><a class="color1" href="kanji/169">西</a></li>
                                   <li><a class="color1" href="kanji/181">多</a></li>
                                   <li><a class="color1" href="kanji/185">池</a></li>
                                   <li><a class="color1" href="kanji/186">地</a></li>
                                   <li><a class="color1" href="kanji/200">当</a></li>
                                   <li><a class="color1" href="kanji/204">同</a></li>
                                   <li><a class="color1" href="kanji/208">肉</a></li>
                                   <li><a class="color1" href="kanji/220">米</a></li>
                                   <li><a class="color1" href="kanji/224">毎</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts08">
                              <h3 class="ttl_while"><a href="kyu08">漢字検定８級（小学校３年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/241">安</a></li>
                                   <li><a class="color1" href="kanji/276">曲</a></li>
                                   <li><a class="color1" href="kanji/287">血</a></li>
                                   <li><a class="color1" href="kanji/294">向</a></li>
                                   <li><a class="color1" href="kanji/303">死</a></li>
                                   <li><a class="color1" href="kanji/307">次</a></li>
                                   <li><a class="color1" href="kanji/310">式</a></li>
                                   <li><a class="color1" href="kanji/316">守</a></li>
                                   <li><a class="color1" href="kanji/324">州</a></li>
                                   <li><a class="color1" href="kanji/346">全</a></li>
                                   <li><a class="color1" href="kanji/423">有</a></li>
                                   <li><a class="color1" href="kanji/427">羊</a></li>
                                   <li><a class="color1" href="kanji/432">両</a></li>
                                   <li><a class="color1" href="kanji/436">列</a></li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts07">
                              <h3 class="ttl_while"><a href="kyu07">漢字検定７級（小学校４年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/446">衣</a></li>
                                   <li><a class="color1" href="kanji/447">印</a></li>
                                   <li><a class="color1" href="kanji/462">各</a></li>
                                   <li><a class="color1" href="kanji/485">共</a></li>
                                   <li><a class="color1" href="502">好</a></li>
                                   <li><a class="color1" href="546">成</a></li>
                                   <li><a class="color1" href="556">争</a></li>
                                   <li><a class="color1" href="568">仲</a></li>
                                   <li><a class="color1" href="570">兆</a></li>
                                   <li><a class="color1" href="577">伝</a></li>
                                   <li><a class="color1" href="580">灯</a></li>
                                   <li><a class="color1" href="637">老</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts06">
                              <h3 class="ttl_while"><a href="kyu06">漢字検定６級（小学校５年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="642">因</a></li>
                                   <li><a class="color1" href="658">仮</a></li>
                                   <li><a class="color1" href="689">件</a></li>
                                   <li><a class="color1" href="709">再</a></li>
                                   <li><a class="color1" href="710">在</a></li>
                                   <li><a class="color1" href="770">団</a></li>
                                   <li><a class="color1" href="783">任</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts05">
                              <h3 class="ttl_while"><a href="kyu05">漢字検定５級（小学校６年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="755">舌</a></li>
                                   <li><a class="color1" href="827">宇</a></li>
                                   <li><a class="color1" href="832">灰</a></li>
                                   <li><a class="color1" href="842">危</a></li>
                                   <li><a class="color1" href="844">机</a></li>
                                   <li><a class="color1" href="847">吸</a></li>
                                   <li><a class="color1" href="869">后</a></li>
                                   <li><a class="color1" href="888">至</a></li>
                                   <li><a class="color1" href="937">存</a></li>
                                   <li><a class="color1" href="938">宅</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts04">
                              <h3 class="ttl_while"><a href="kyu04">漢字検定４級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1004">扱</a>
                                   </li>
                                   <li><a class="color1" href="1013">芋</a>
                                   </li>
                                   <li><a class="color1" href="1023">汚</a>
                                   </li>
                                   <li><a class="color1" href="1040">汗</a>
                                   </li>
                                   <li><a class="color1" href="1059">朽</a>
                                   </li>
                                   <li><a class="color1" href="1068">叫</a>
                                   </li>
                                   <li><a class="color1" href="1072">仰</a>
                                   </li>
                                   <li><a class="color1" href="1117">旨</a>
                                   </li>
                                   <li><a class="color1" href="1119">芝</a>
                                   </li>
                                   <li><a class="color1" href="1125">朱</a>
                                   </li>
                                   <li><a class="color1" href="1129">舟</a>
                                   </li>
                                   <li><a class="color1" href="1134">巡</a>
                                   </li>
                                   <li><a class="color1" href="1135">旬</a>
                                   </li>
                                   <li><a class="color1" href="1156">尽</a>
                                   </li>
                                   <li><a class="color1" href="1202">吐</a>
                                   </li>
                                   <li><a class="color1" href="1222">弐</a>
                                   </li>
                                   <li><a class="color1" href="1271">忙</a>
                                   </li>
                                   <li><a class="color1" href="1312">劣</a>
                                   </li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts03">
                              <h3 class="ttl_while"><a href="kyu03">漢字検定３級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1357">企</a>
                                   </li>
                                   <li><a class="color1" href="1368">吉</a>
                                   </li>
                                   <li><a class="color1" href="1384">刑</a>
                                   </li>
                                   <li><a class="color1" href="1438">如</a>
                                   </li>
                                   <li><a class="color1" href="1445">匠</a>
                                   </li>
                                   <li><a class="color1" href="1530">伐</a>
                                   </li>
                                   <li><a class="color1" href="1531">帆</a>
                                   </li>
                                   <li><a class="color1" href="1545">伏</a>
                                   </li>
                                   <li><a class="color1" href="1586">吏</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02j">
                              <h3 class="ttl_while"><a href="kyu02j">漢字検定準２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1638">缶</a>
                                   </li>
                                   <li><a class="color1" href="1686">江</a>
                                   </li>
                                   <li><a class="color1" href="1727">充</a>
                                   </li>
                                   <li><a class="color1" href="1767">迅</a>
                                   </li>
                                   <li><a class="color1" href="1795">壮</a>
                                   </li>
                                   <li><a class="color1" href="1862">肌</a>
                                   </li>
                                   <li><a class="color1" href="1869">妃</a>
                                   </li>
                                   <li><a class="color1" href="1897">朴</a>
                                   </li>
                                   <li><a class="color1" href="1908">妄</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02">
                              <h3 class="ttl_while"><a href="kyu02">漢字検定２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1974">伎</a>
                                   </li>
                                   <li><a class="color1" href="1978">臼</a>
                                   </li>
                                   <li><a class="color1" href="2089">汎</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01j">
                              <h3 class="ttl_while"><a href="kyu01j">漢字検定準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="2148">伊</a>
                                   </li>
                                   <li><a class="color2" href="2150">夷</a>
                                   </li>
                                   <li><a class="color2" href="2176">曳</a>
                                   </li>
                                   <li><a class="color2" href="2181">亦</a>
                                   </li>
                                   <li><a class="color2" href="2210">瓜</a>
                                   </li>
                                   <li><a class="color2" href="2234">亥</a>
                                   </li>
                                   <li><a href="2292">吃</a></li>
                                   <li><a href="2314">兇</a></li>
                                   <li><a class="color2" href="2316">匡</a>
                                   </li>
                                   <li><a class="color2" href="2327">旭</a>
                                   </li>
                                   <li><a class="color2" href="2350">圭</a>
                                   </li>
                                   <li><a class="color2" href="2386">伍</a>
                                   </li>
                                   <li><a class="color2" href="2390">亙</a>
                                   </li>
                                   <li><a class="color2" href="2391">亘</a>
                                   </li>
                                   <li><a href="2429">艮</a></li>
                                   <li><a class="color2" href="2467">弛</a>
                                   </li>
                                   <li><a class="color2" href="2471">此</a>
                                   </li>
                                   <li><a class="color2" href="2481">而</a>
                                   </li>
                                   <li><a href="2525">戎</a></li>
                                   <li><a href="2527">夙</a></li>
                                   <li><a class="color2" href="2550">汝</a>
                                   </li>
                                   <li><a class="color2" href="2551">丞</a>
                                   </li>
                                   <li><a class="color2" href="2556">庄</a>
                                   </li>
                                   <li><a href="2625">吋</a></li>
                                   <li><a class="color2" href="2630">汐</a>
                                   </li>
                                   <li><a class="color2" href="2634">尖</a>
                                   </li>
                                   <li><a href="2640">舛</a></li>
                                   <li><a class="color2" href="2703">托</a>
                                   </li>
                                   <li><a href="2733">吊</a></li>
                                   <li><a class="color2" href="2750">辻</a>
                                   </li>
                                   <li><a class="color2" href="2809">凪</a>
                                   </li>
                                   <li><a href="2871">牝</a></li>
                                   <li><a class="color2" href="2921">牟</a>
                                   </li>
                                   <li><a class="color2" href="3021">肋</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01">
                              <h3 class="ttl_while"><a href="kyu01">漢字検定１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="3073">价</a></li>
                                   <li><a href="3074">伉</a></li>
                                   <li><a href="3107">伜</a></li>
                                   <li><a href="3160">冱</a></li>
                                   <li><a href="3166">凩</a></li>
                                   <li><a href="3169">刔</a></li>
                                   <li><a href="3170">刎</a></li>
                                   <li><a href="3197">匈</a></li>
                                   <li><a href="3211">卍</a></li>
                                   <li><a href="3222">吁</a></li>
                                   <li><a href="3364">夸</a></li>
                                   <li><a href="3373">奸</a></li>
                                   <li><a href="3374">妁</a></li>
                                   <li><a href="3449">屹</a></li>
                                   <li><a href="3499">幵</a></li>
                                   <li><a href="3500">并</a></li>
                                   <li><a href="3538">忖</a></li>
                                   <li><a href="3644">戍</a></li>
                                   <li><a href="3645">戌</a></li>
                                   <li><a href="3656">扞</a></li>
                                   <li><a href="3657">扛</a></li>
                                   <li><a href="3658">扣</a></li>
                                   <li><a href="3659">扠</a></li>
                                   <li><a href="3660">扨</a></li>
                                   <li><a href="4000">朿</a></li>
                                   <li><a href="4001">朸</a></li>
                                   <li><a href="4002">朶</a></li>
                                   <li><a href="4322">汕</a></li>
                                   <li><a href="4572">聿</a></li>
                                   <li><a href="5099">犲</a></li>
                                   <li><a href="5178">阡</a></li>
                                   <li><a href="5312">艸</a></li>
                                   <li><a href="5314">芍</a></li>
                                   <li><a href="5315">芒</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts0101j">
                              <h3 class="ttl_while"><a href="kyu0101j">漢字検定１級 / 準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="6196">收</a>
                                   </li>
                                   <li><a href="9221">羽</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts">
                              <h3 class="ttl_while">漢字検定対象外</h3>
                              <ul class="search_parts">
                                   <li><a href="5665">冲</a></li>
                                   <li><a href="5681">赱</a></li>
                                   <li><a href="5788">圷</a></li>
                                   <li><a href="5789">圸</a></li>
                                   <li><a href="5807">决</a></li>
                                   <li><a href="5808">冰</a></li>
                                   <li><a href="5915">杁</a></li>
                                   <li><a href="5916">朷</a></li>
                                   <li><a href="5929">汢</a></li>
                                   <li><a href="6016">耒</a></li>
                                   <li><a href="6033">虍</a></li>
                                   <li><a href="6034">襾</a></li>
                                   <li><a href="6041">网</a></li>
                                   <li><a href="6157">夛</a></li>
                                   <li><a href="6195">攷</a></li>
                                   <li><a href="6357">弎</a></li>
                                   <li><a href="6595">卋</a></li>
                                   <li><a href="6597">㐂</a></li>
                                   <li><a href="6598">丟</a></li>
                                   <li><a href="6599">㐁</a></li>
                                   <li><a href="6688">㐆</a></li>
                                   <li><a href="6689">乑</a></li>
                                   <li><a href="6690">乒</a></li>
                                   <li><a href="6691">乓</a></li>
                                   <li><a href="6696">乩</a></li>
                                   <li><a href="6720">巟</a></li>
                                   <li><a href="7413">囟</a></li>
                                   <li><a href="7911">阢</a></li>
                                   <li><a href="7912">阤</a></li>
                                   <li><a href="8005">㚑</a></li>
                                   <li><a href="8275">犴</a></li>
                                   <li><a href="8557">辸</a></li>
                                   <li><a href="8627">邘</a></li>
                                   <li><a href="8628">邗</a></li>
                                   <li><a href="8629">邛</a></li>
                                   <li><a href="8631">邙</a></li>
                                   <li><a href="9308">㬰</a></li>
                                   <li><a href="9366">芉</a></li>
                                   <li><a href="9367">芄</a></li>
                                   <li><a href="9368">芑</a></li>
                                   <li><a href="9369">芎</a></li>
                                   <li><a href="9370">芐</a></li>
                                   <li><a href="9371">芓</a></li>
                                   <li><a href="9372">䒕</a></li>
                                   <li><a href="9373">芊</a></li>
                                   <li><a href="9374">芖</a></li>
                                   <li><a href="9375">芏</a></li>
                                   <li><a href="9376">芇</a></li>
                                   <li><a href="9377">芃</a></li>
                                   <li><a href="9378">芅</a></li>
                                   <li><a href="9462">华</a></li>
                                   <li><a href="10103">覀</a></li>
                                   <li><a href="10109">玎</a></li>
                                   <li><a href="10110">玐</a></li>
                                   <li><a href="10294">甪</a></li>
                                   <li><a href="10297">甶</a></li>
                                   <li><a href="10900">穵</a></li>
                                   <li><a href="10901">宆</a></li>
                                   <li><a href="10954">㣼</a></li>
                                   <li><a href="11026">忋</a></li>
                                   <li><a href="11027">忓</a></li>
                                   <li><a href="11028">忔</a></li>
                                   <li><a href="11029">忕</a></li>
                                   <li><a href="11272">扜</a></li>
                                   <li><a href="11274">扢</a></li>
                                   <li><a href="11275">扤</a></li>
                                   <li><a href="11276">扦</a></li>
                                   <li><a href="11277">扡</a></li>
                                   <li><a href="11278">扚</a></li>
                                   <li><a href="11596">㫃</a></li>
                                   <li><a href="11764">肎</a></li>
                                   <li><a href="11934">朻</a></li>
                                   <li><a href="11935">朵</a></li>
                                   <li><a href="11937">朾</a></li>
                                   <li><a href="11938">朳</a></li>
                                   <li><a href="11939">朼</a></li>
                                   <li><a href="12202">权</a></li>
                                   <li><a href="12380">伌</a></li>
                                   <li><a href="12381">伇</a></li>
                                   <li><a href="12382">伙</a></li>
                                   <li><a href="12383">伋</a></li>
                                   <li><a href="12384">仱</a></li>
                                   <li><a href="12385">伒</a></li>
                                   <li><a href="12386">众</a></li>
                                   <li><a href="12387">仵</a></li>
                                   <li><a href="12388">伀</a></li>
                                   <li><a href="12389">伈</a></li>
                                   <li><a href="12390">仯</a></li>
                                   <li><a href="12392">伅</a></li>
                                   <li><a href="12394">丢</a></li>
                                   <li><a href="12396">吕</a></li>
                                   <li><a href="12401">仳</a></li>
                                   <li><a href="12402">份</a></li>
                                   <li><a href="12403">伕</a></li>
                                   <li><a href="12404">仿</a></li>
                                   <li><a href="12405">伃</a></li>
                                   <li><a href="12420">仾</a></li>
                                   <li><a href="12677">灮</a></li>
                                   <li><a href="12681">兊</a></li>
                                   <li><a href="12699">冎</a></li>
                                   <li><a href="12710">㓇</a></li>
                                   <li><a href="12735">刕</a></li>
                                   <li><a href="12736">刖</a></li>
                                   <li><a href="12743">划</a></li>
                                   <li><a href="12744">刓</a></li>
                                   <li><a href="12746">刏</a></li>
                                   <li><a href="12747">㓝</a></li>
                                   <li><a href="12773">刚</a></li>
                                   <li><a href="12796">创</a></li>
                                   <li><a href="12811">刘</a></li>
                                   <li><a href="12820">攰</a></li>
                                   <li><a href="12821">劦</a></li>
                                   <li><a href="12822">劥</a></li>
                                   <li><a href="12823">劧</a></li>
                                   <li><a href="12844">劤</a></li>
                                   <li><a href="12892">㱙</a></li>
                                   <li><a href="12953">匟</a></li>
                                   <li><a href="12962">夶</a></li>
                                   <li><a href="12987">匢</a></li>
                                   <li><a href="13000">旪</a></li>
                                   <li><a href="13006">丠</a></li>
                                   <li><a href="13011">乔</a></li>
                                   <li><a href="13014">乨</a></li>
                                   <li><a href="13015">乪</a></li>
                                   <li><a href="13016">乫</a></li>
                                   <li><a href="13017">乬</a></li>
                                   <li><a href="13018">乭</a></li>
                                   <li><a href="13019">乮</a></li>
                                   <li><a href="13020">乯</a></li>
                                   <li><a href="13038">仴</a></li>
                                   <li><a href="13039">仸</a></li>
                                   <li><a href="13040">仹</a></li>
                                   <li><a href="13041">仺</a></li>
                                   <li><a href="13042">仼</a></li>
                                   <li><a href="13043">伂</a></li>
                                   <li><a href="13044">伄</a></li>
                                   <li><a href="13045">伆</a></li>
                                   <li><a href="13046">伓</a></li>
                                   <li><a href="13047">伔</a></li>
                                   <li><a href="13048">伖</a></li>
                                   <li><a href="13049">优</a></li>
                                   <li><a href="13050">伛</a></li>
                                   <li><a href="13051">伨</a></li>
                                   <li><a href="13119">兲</a></li>
                                   <li><a href="13120">兴</a></li>
                                   <li><a href="13141">刐</a></li>
                                   <li><a href="13170">卐</a></li>
                                   <li><a href="13185">厊</a></li>
                                   <li><a href="13207">厽</a></li>
                                   <li><a href="13208">厾</a></li>
                                   <li><a href="13214">叒</a></li>
                                   <li><a href="13224">叿</a></li>
                                   <li><a href="13225">吀</a></li>
                                   <li><a href="13226">吂</a></li>
                                   <li><a href="13227">吅</a></li>
                                   <li><a href="13228">吆</a></li>
                                   <li><a href="13229">吇</a></li>
                                   <li><a href="13230">吒</a></li>
                                   <li><a href="13231">吓</a></li>
                                   <li><a href="13232">吔</a></li>
                                   <li><a href="13603">囝</a></li>
                                   <li><a href="13604">囡</a></li>
                                   <li><a href="13605">团</a></li>
                                   <li><a href="13636">圩</a></li>
                                   <li><a href="13637">圪</a></li>
                                   <li><a href="13638">圫</a></li>
                                   <li><a href="13639">圬</a></li>
                                   <li><a href="13640">圮</a></li>
                                   <li><a href="13641">圯</a></li>
                                   <li><a href="13642">圱</a></li>
                                   <li><a href="13643">圲</a></li>
                                   <li><a href="13644">圳</a></li>
                                   <li><a href="13645">圴</a></li>
                                   <li><a href="13646">圵</a></li>
                                   <li><a href="13647">圶</a></li>
                                   <li><a href="13913">夵</a></li>
                                   <li><a href="13914">夹</a></li>
                                   <li><a href="13938">奷</a></li>
                                   <li><a href="13939">她</a></li>
                                   <li><a href="13940">奺</a></li>
                                   <li><a href="13941">奻</a></li>
                                   <li><a href="13942">奼</a></li>
                                   <li><a href="13943">奾</a></li>
                                   <li><a href="13944">奿</a></li>
                                   <li><a href="13945">妀</a></li>
                                   <li><a href="13946">妅</a></li>
                                   <li><a href="13947">妆</a></li>
                                   <li><a href="13948">妇</a></li>
                                   <li><a href="14272">孖</a></li>
                                   <li><a href="14338">尗</a></li>
                                   <li><a href="14339">尘</a></li>
                                   <li><a href="14345">尥</a></li>
                                   <li><a href="14377">屰</a></li>
                                   <li><a href="14381">屸</a></li>
                                   <li><a href="14382">屺</a></li>
                                   <li><a href="14383">屻</a></li>
                                   <li><a href="14384">屼</a></li>
                                   <li><a href="14385">屽</a></li>
                                   <li><a href="14386">屾</a></li>
                                   <li><a href="14387">岀</a></li>
                                   <li><a href="14601">巪</a></li>
                                   <li><a href="14610">帇</a></li>
                                   <li><a href="14611">师</a></li>
                                   <li><a href="14720">异</a></li>
                                   <li><a href="14726">弙</a></li>
                                   <li><a href="14727">弚</a></li>
                                   <li><a href="14728">弜</a></li>
                                   <li><a href="14767">彵</a></li>
                                   <li><a href="14797">忈</a></li>
                                   <li><a href="14800">忏</a></li>
                                   <li><a href="14801">忚</a></li>
                                   <li><a href="14902">扗</a></li>
                                   <li><a href="14903">扙</a></li>
                                   <li><a href="14904">扟</a></li>
                                   <li><a href="14905">扥</a></li>
                                   <li><a href="14906">执</a></li>
                                   <li><a href="15086">旫</a></li>
                                   <li><a href="15087">旮</a></li>
                                   <li><a href="15142">朲</a></li>
                                   <li><a href="15143">朹</a></li>
                                   <li><a href="15144">杀</a></li>
                                   <li><a href="15394">氒</a></li>
                                   <li><a href="15395">氖</a></li>
                                   <li><a href="15419">氼</a></li>
                                   <li><a href="15420">氽</a></li>
                                   <li><a href="15425">汊</a></li>
                                   <li><a href="15426">汋</a></li>
                                   <li><a href="15427">汌</a></li>
                                   <li><a href="15428">汍</a></li>
                                   <li><a href="15429">汏</a></li>
                                   <li><a href="15430">汑</a></li>
                                   <li><a href="15431">汒</a></li>
                                   <li><a href="15432">汓</a></li>
                                   <li><a href="15433">汔</a></li>
                                   <li><a href="15434">汘</a></li>
                                   <li><a href="15435">汙</a></li>
                                   <li><a href="15436">汛</a></li>
                                   <li><a href="15437">汜</a></li>
                                   <li><a href="15438">污</a></li>
                                   <li><a href="15449">汷</a></li>
                                   <li><a href="15998">灱</a></li>
                                   <li><a href="15999">灲</a></li>
                                   <li><a href="16000">灳</a></li>
                                   <li><a href="16293">牞</a></li>
                                   <li><a href="16347">犱</a></li>
                                   <li><a href="16348">犳</a></li>
                                   <li><a href="16349">犵</a></li>
                                   <li><a href="16476">玏</a></li>
                                   <li><a href="16620">癿</a></li>
                                   <li><a href="17125">肍</a></li>
                                   <li><a href="17201">芕</a></li>
                                   <li><a href="17910">边</a></li>
                                   <li><a href="17933">邔</a></li>
                                   <li><a href="17934">邖</a></li>
                                   <li><a href="17935">邚</a></li>
                                   <li><a href="18182">阠</a></li>
                                   <li><a href="18183">阣</a></li>
                                   <li><a href="18601">齐</a></li>
                                   <li><a href="18648">㐐</a></li>
                                   <li><a href="18649">㐑</a></li>
                                   <li><a href="18650">㐒</a></li>
                                   <li><a href="18651">㐓</a></li>
                                   <li><a href="18652">㐔</a></li>
                                   <li><a href="18653">㐕</a></li>
                                   <li><a href="18674">㐫</a></li>
                                   <li><a href="18682">㐸</a></li>
                                   <li><a href="18683">㐹</a></li>
                                   <li><a href="18684">㐺</a></li>
                                   <li><a href="18685">㐻</a></li>
                                   <li><a href="18686">㐼</a></li>
                                   <li><a href="18750">㒫</a></li>
                                   <li><a href="18753">㒲</a></li>
                                   <li><a href="18779">㓙</a></li>
                                   <li><a href="18818">㔔</a></li>
                                   <li><a href="18819">㔕</a></li>
                                   <li><a href="18820">㔖</a></li>
                                   <li><a href="18845">㔻</a></li>
                                   <li><a href="18851">㕂</a></li>
                                   <li><a href="18852">㕃</a></li>
                                   <li><a href="18853">㕄</a></li>
                                   <li><a href="18880">㕦</a></li>
                                   <li><a href="18881">㕧</a></li>
                                   <li><a href="18882">㕨</a></li>
                                   <li><a href="19109">㚐</a></li>
                                   <li><a href="19124">㚣</a></li>
                                   <li><a href="19125">㚤</a></li>
                                   <li><a href="19126">㚥</a></li>
                                   <li><a href="19127">㚦</a></li>
                                   <li><a href="19128">㚧</a></li>
                                   <li><a href="19251">㜽</a></li>
                                   <li><a href="19263">㝌</a></li>
                                   <li><a href="19264">㝍</a></li>
                                   <li><a href="19265">㝎</a></li>
                                   <li><a href="19302">㝼</a></li>
                                   <li><a href="19317">㞌</a></li>
                                   <li><a href="19318">㞍</a></li>
                                   <li><a href="19339">㞨</a></li>
                                   <li><a href="19340">㞩</a></li>
                                   <li><a href="19341">㞪</a></li>
                                   <li><a href="19342">㞫</a></li>
                                   <li><a href="19343">㞬</a></li>
                                   <li><a href="19344">㞭</a></li>
                                   <li><a href="19345">㞮</a></li>
                                   <li><a href="19346">㞯</a></li>
                                   <li><a href="19446">㠩</a></li>
                                   <li><a href="19453">㠴</a></li>
                                   <li><a href="19454">㠵</a></li>
                                   <li><a href="19506">㡯</a></li>
                                   <li><a href="19507">㡰</a></li>
                                   <li><a href="19508">㡱</a></li>
                                   <li><a href="19554">㢨</a></li>
                                   <li><a href="19555">㢩</a></li>
                                   <li><a href="19556">㢪</a></li>
                                   <li><a href="19579">㣉</a></li>
                                   <li><a href="19614">㣻</a></li>
                                   <li><a href="19616">㣾</a></li>
                                   <li><a href="19617">㣿</a></li>
                                   <li><a href="19764">㧆</a></li>
                                   <li><a href="19765">㧇</a></li>
                                   <li><a href="19766">㧈</a></li>
                                   <li><a href="19956">㫐</a></li>
                                   <li><a href="19957">㫑</a></li>
                                   <li><a href="20023">㭁</a></li>
                                   <li><a href="20264">㲌</a></li>
                                   <li><a href="20304">㲻</a></li>
                                   <li><a href="20306">㲽</a></li>
                                   <li><a href="20475">㶡</a></li>
                                   <li><a href="20574">㸨</a></li>
                                   <li><a href="20689">㺨</a></li>
                                   <li><a href="20690">㺩</a></li>
                                   <li><a href="20691">㺪</a></li>
                                   <li><a href="20692">㺫</a></li>
                                   <li><a href="21308">䇂</a></li>
                                   <li><a href="21761">䏌</a></li>
                                   <li><a href="21762">䏍</a></li>
                                   <li><a href="21915">䒖</a></li>
                                   <li><a href="21916">䒗</a></li>
                                   <li><a href="21917">䒘</a></li>
                                   <li><a href="22736">䢴</a></li>
                                   <li><a href="22944">䦻</a></li>
                                   <li><a href="23968">巩</a></li>
                                   <li><a href="23988">彴</a></li>
                                   <li><a href="23992">扝</a></li>
                                   <li><a href="24107">芌</a></li>
                                   <li><a href="24182">㐪</a></li>
                                   <li><a href="24189">㓞</a></li>
                                   <li><a href="24195">㕜</a></li>
                                   <li><a href="24211">㠶</a></li>
                                   <li><a href="24218">㦮</a></li>
                                   <li><a href="24239">㱏</a></li>
                                   <li><a href="24266">䂖</a></li>
                                   <li><a href="24547">产</a></li>
                                   <li><a href="24563">伞</a></li>
                                   <li><a href="24565">伢</a></li>
                                   <li><a href="24566">伤</a></li>
                                   <li><a href="24567">伦</a></li>
                                   <li><a href="24568">伧</a></li>
                                   <li><a href="24569">伩</a></li>
                                   <li><a href="24571">伫</a></li>
                                   <li><a href="24572">伬</a></li>
                                   <li><a href="24700">农</a></li>
                                   <li><a href="24712">凨</a></li>
                                   <li><a href="24718">凼</a></li>
                                   <li><a href="24734">动</a></li>
                                   <li><a href="24744">压</a></li>
                                   <li><a href="24745">厌</a></li>
                                   <li><a href="24779">吖</a></li>
                                   <li><a href="24973">圹</a></li>
                                   <li><a href="24974">场</a></li>
                                   <li><a href="25027">夺</a></li>
                                   <li><a href="25028">夻</a></li>
                                   <li><a href="25029">夼</a></li>
                                   <li><a href="25086">孙</a></li>
                                   <li><a href="25092">寻</a></li>
                                   <li><a href="25093">导</a></li>
                                   <li><a href="25105">屿</a></li>
                                   <li><a href="25106">岁</a></li>
                                   <li><a href="25107">岂</a></li>
                                   <li><a href="25108">岃</a></li>
                                   <li><a href="25213">庅</a></li>
                                   <li><a href="25214">庆</a></li>
                                   <li><a href="25220">廵</a></li>
                                   <li><a href="25232">忛</a></li>
                                   <li><a href="25260">戏</a></li>
                                   <li><a href="25262">扩</a></li>
                                   <li><a href="25263">扫</a></li>
                                   <li><a href="25356">旯</a></li>
                                   <li><a href="25368">杂</a></li>
                                   <li><a href="25429">欢</a></li>
                                   <li><a href="25446">毕</a></li>
                                   <li><a href="25490">氘</a></li>
                                   <li><a href="25497">汆</a></li>
                                   <li><a href="25502">汣</a></li>
                                   <li><a href="25674">爷</a></li>
                                   <li><a href="25770">犷</a></li>
                                   <li><a href="25785">玑</a></li>
                                   <li><a href="26267">礼</a></li>
                                   <li><a href="26342">芗</a></li>
                                   <li><a href="26384">㐾</a></li>
                                   <li><a href="26387">㐿</a></li>
                                   <li><a href="26388">㑀</a></li>
                                   <li><a href="26482">㓆</a></li>
                                   <li><a href="26630">㘟</a></li>
                                   <li><a href="26822">㚏</a></li>
                                   <li><a href="26828">㚨</a></li>
                                   <li><a href="26933">迈</a></li>
                                   <li><a href="26946">㢫</a></li>
                                   <li><a href="26957">㣕</a></li>
                                   <li><a href="26959">邜</a></li>
                                   <li><a href="26963">邝</a></li>
                                   <li><a href="27331">㶢</a></li>
                                   <li><a href="27565">䒙</a></li>
                                   <li><a href="27701">𡚴</a></li>
                                   <li><a href="27717">𠑺</a></li>
                                   <li><a href="27737">𤯔</a></li>
                                   <li><a href="27751">𠂢</a></li>
                                   <li><a href="27757">𠂤</a></li>
                                   <li><a href="27768">𢦏</a></li>
                                   <li><a href="27774">𦣝</a></li>
                                   <li><a href="27783">𠠺</a></li>
                                   <li><a href="27796">𡉕</a></li>
                                   <li><a href="27811">𡧃</a></li>
                                   <li><a href="27819">𡵅</a></li>
                                   <li><a href="27833">𢎭</a></li>
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