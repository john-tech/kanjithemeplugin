<?php
/*
 * Template Name: kakusu10
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
               <h1 class="ttl_main">１０画の漢字一覧（漢検級順）</h1>

               <p>総画数１０画の漢字の一覧です。<br>
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
                                   <option value="#" selected>１０画</option>
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
                              <li><a href="bkakusu10">部首別順</a></li>
                              <li><a href="ckakusu10">読み順</a></li>
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
                                   <li><a class="color1" href="kanji/021">校</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts09">
                              <h3 class="ttl_while"><a href="kyu09">漢字検定９級（小学校２年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/086">家</a></li>
                                   <li><a class="color1" href="kanji/088">夏</a></li>
                                   <li><a class="color1" href="kanji/104">記</a></li>
                                   <li><a class="color1" href="kanji/106">帰</a></li>
                                   <li><a class="color1" href="kanji/118">原</a></li>
                                   <li><a class="color1" href="kanji/134">高</a></li>
                                   <li><a class="color1" href="kanji/143">紙</a></li>
                                   <li><a class="color1" href="kanji/148">時</a></li>
                                   <li><a class="color1" href="kanji/154">弱</a></li>
                                   <li><a class="color1" href="kanji/159">書</a></li>
                                   <li><a class="color1" href="kanji/194">通</a></li>
                                   <li><a class="color1" href="kanji/209">馬</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts08">
                              <h3 class="ttl_while"><a href="kyu08">漢字検定８級（小学校３年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/247">院</a></li>
                                   <li><a class="color1" href="kanji/248">員</a></li>
                                   <li><a class="color1" href="kanji/257">荷</a></li>
                                   <li><a class="color1" href="kanji/266">起</a></li>
                                   <li><a class="color1" href="kanji/282">宮</a></li>
                                   <li><a class="color1" href="kanji/292">庫</a></li>
                                   <li><a class="color1" href="kanji/297">根</a></li>
                                   <li><a class="color1" href="kanji/315">酒</a></li>
                                   <li><a class="color1" href="kanji/331">消</a></li>
                                   <li><a class="color1" href="kanji/342">真</a></li>
                                   <li><a class="color1" href="kanji/350">息</a></li>
                                   <li><a class="color1" href="kanji/351">速</a></li>
                                   <li><a class="color1" href="kanji/371">庭</a></li>
                                   <li><a class="color1" href="kanji/377">島</a></li>
                                   <li><a class="color1" href="kanji/387">配</a></li>
                                   <li><a class="color1" href="kanji/388">倍</a></li>
                                   <li><a class="color1" href="kanji/402">病</a></li>
                                   <li><a class="color1" href="kanji/412">勉</a></li>
                                   <li><a class="color1" href="kanji/431">旅</a></li>
                                   <li><a class="color1" href="kanji/434">流</a></li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts07">
                              <h3 class="ttl_while"><a href="kyu07">漢字検定７級（小学校４年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/441">案</a></li>
                                   <li><a class="color1" href="kanji/459">害</a></li>
                                   <li><a class="color1" href="kanji/481">挙</a></li>
                                   <li><a class="color1" href="kanji/487">訓</a></li>
                                   <li><a class="color1" href="kanji/489">郡</a></li>
                                   <li><a class="color1" href="kanji/500">候</a></li>
                                   <li><a class="color1" href="506">差</a></li>
                                   <li><a class="color1" href="518">残</a></li>
                                   <li><a class="color1" href="528">借</a></li>
                                   <li><a class="color1" href="535">笑</a></li>
                                   <li><a class="color1" href="547">席</a></li>
                                   <li><a class="color1" href="557">倉</a></li>
                                   <li><a class="color1" href="562">孫</a></li>
                                   <li><a class="color1" href="564">帯</a></li>
                                   <li><a class="color1" href="578">徒</a></li>
                                   <li><a class="color1" href="583">特</a></li>
                                   <li><a class="color1" href="590">梅</a></li>
                                   <li><a class="color1" href="623">浴</a></li>
                                   <li><a class="color1" href="629">料</a></li>
                                   <li><a class="color1" href="636">連</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts06">
                              <h3 class="ttl_while"><a href="kyu06">漢字検定６級（小学校５年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="503">航</a></li>
                                   <li><a class="color1" href="511">殺</a></li>
                                   <li><a class="color1" href="604">粉</a></li>
                                   <li><a class="color1" href="617">脈</a></li>
                                   <li><a class="color1" href="646">益</a></li>
                                   <li><a class="color1" href="650">桜</a></li>
                                   <li><a class="color1" href="663">格</a></li>
                                   <li><a class="color1" href="693">個</a></li>
                                   <li><a class="color1" href="700">耕</a></li>
                                   <li><a class="color1" href="712">財</a></li>
                                   <li><a class="color1" href="718">師</a></li>
                                   <li><a class="color1" href="729">修</a></li>
                                   <li><a class="color1" href="758">素</a></li>
                                   <li><a class="color1" href="762">造</a></li>
                                   <li><a class="color1" href="785">能</a></li>
                                   <li><a class="color1" href="786">破</a></li>
                                   <li><a class="color1" href="819">容</a></li>
                                   <li><a class="color1" href="822">留</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts05">
                              <h3 class="ttl_while"><a href="kyu05">漢字検定５級（小学校６年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="653">恩</a></li>
                                   <li><a class="color1" href="794">俵</a></li>
                                   <li><a class="color1" href="837">株</a></li>
                                   <li><a class="color1" href="849">胸</a></li>
                                   <li><a class="color1" href="872">降</a></li>
                                   <li><a class="color1" href="875">骨</a></li>
                                   <li><a class="color1" href="878">座</a></li>
                                   <li><a class="color1" href="883">蚕</a></li>
                                   <li><a class="color1" href="892">射</a></li>
                                   <li><a class="color1" href="900">従</a></li>
                                   <li><a class="color1" href="904">純</a></li>
                                   <li><a class="color1" href="908">除</a></li>
                                   <li><a class="color1" href="911">将</a></li>
                                   <li><a class="color1" href="914">針</a></li>
                                   <li><a class="color1" href="944">値</a></li>
                                   <li><a class="color1" href="953">展</a></li>
                                   <li><a class="color1" href="954">党</a></li>
                                   <li><a class="color1" href="955">討</a></li>
                                   <li><a class="color1" href="962">納</a></li>
                                   <li><a class="color1" href="966">俳</a></li>
                                   <li><a class="color1" href="968">班</a></li>
                                   <li><a class="color1" href="971">秘</a></li>
                                   <li><a class="color1" href="975">陛</a></li>
                                   <li><a class="color1" href="1317">朗</a>
                                   </li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts04">
                              <h3 class="ttl_while"><a href="kyu04">漢字検定４級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1048">鬼</a>
                                   </li>
                                   <li><a class="color1" href="1066">恐</a>
                                   </li>
                                   <li><a class="color1" href="1078">恵</a>
                                   </li>
                                   <li><a class="color1" href="1084">兼</a>
                                   </li>
                                   <li><a class="color1" href="1085">軒</a>
                                   </li>
                                   <li><a class="color1" href="1087">剣</a>
                                   </li>
                                   <li><a class="color1" href="1109">剤</a>
                                   </li>
                                   <li><a class="color1" href="1116">脂</a>
                                   </li>
                                   <li><a class="color1" href="1142">称</a>
                                   </li>
                                   <li><a class="color1" href="1148">浸</a>
                                   </li>
                                   <li><a class="color1" href="1153">振</a>
                                   </li>
                                   <li><a class="color1" href="1155">陣</a>
                                   </li>
                                   <li><a class="color1" href="1164">扇</a>
                                   </li>
                                   <li><a class="color1" href="1185">恥</a>
                                   </li>
                                   <li><a class="color1" href="1187">致</a>
                                   </li>
                                   <li><a class="color1" href="1201">途</a>
                                   </li>
                                   <li><a class="color1" href="1206">透</a>
                                   </li>
                                   <li><a class="color1" href="1207">唐</a>
                                   </li>
                                   <li><a class="color1" href="1208">桃</a>
                                   </li>
                                   <li><a class="color1" href="1212">倒</a>
                                   </li>
                                   <li><a class="color1" href="1217">胴</a>
                                   </li>
                                   <li><a class="color1" href="1223">悩</a>
                                   </li>
                                   <li><a class="color1" href="1239">般</a>
                                   </li>
                                   <li><a class="color1" href="1241">被</a>
                                   </li>
                                   <li><a class="color1" href="1242">疲</a>
                                   </li>
                                   <li><a class="color1" href="1249">浜</a>
                                   </li>
                                   <li><a class="color1" href="1250">敏</a>
                                   </li>
                                   <li><a class="color1" href="1253">浮</a>
                                   </li>
                                   <li><a class="color1" href="1264">捕</a>
                                   </li>
                                   <li><a class="color1" href="1266">峰</a>
                                   </li>
                                   <li><a class="color1" href="1268">砲</a>
                                   </li>
                                   <li><a class="color1" href="1280">眠</a>
                                   </li>
                                   <li><a class="color1" href="1283">娘</a>
                                   </li>
                                   <li><a class="color1" href="1288">紋</a>
                                   </li>
                                   <li><a class="color1" href="1307">涙</a>
                                   </li>
                                   <li><a class="color1" href="1313">烈</a>
                                   </li>
                                   <li><a class="color1" href="1314">恋</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts03">
                              <h3 class="ttl_while"><a href="kyu03">漢字検定３級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1323">悦</a>
                                   </li>
                                   <li><a class="color1" href="1326">宴</a>
                                   </li>
                                   <li><a class="color1" href="1334">華</a>
                                   </li>
                                   <li><a class="color1" href="1362">既</a>
                                   </li>
                                   <li><a class="color1" href="1372">脅</a>
                                   </li>
                                   <li><a class="color1" href="1389">倹</a>
                                   </li>
                                   <li><a class="color1" href="1395">悟</a>
                                   </li>
                                   <li><a class="color1" href="1396">娯</a>
                                   </li>
                                   <li><a class="color1" href="1430">疾</a>
                                   </li>
                                   <li><a class="color1" href="1433">殊</a>
                                   </li>
                                   <li><a class="color1" href="1437">徐</a>
                                   </li>
                                   <li><a class="color1" href="1451">辱</a>
                                   </li>
                                   <li><a class="color1" href="1455">粋</a>
                                   </li>
                                   <li><a class="color1" href="1458">衰</a>
                                   </li>
                                   <li><a class="color1" href="1467">隻</a>
                                   </li>
                                   <li><a class="color1" href="1479">桑</a>
                                   </li>
                                   <li><a class="color1" href="1492">託</a>
                                   </li>
                                   <li><a class="color1" href="1501">畜</a>
                                   </li>
                                   <li><a class="color1" href="1515">哲</a>
                                   </li>
                                   <li><a class="color1" href="1519">凍</a>
                                   </li>
                                   <li><a class="color1" href="1521">匿</a>
                                   </li>
                                   <li><a class="color1" href="1534">畔</a>
                                   </li>
                                   <li><a class="color1" href="1539">姫</a>
                                   </li>
                                   <li><a class="color1" href="1548">紛</a>
                                   </li>
                                   <li><a class="color1" href="1557">倣</a>
                                   </li>
                                   <li><a class="color1" href="1571">埋</a>
                                   </li>
                                   <li><a class="color1" href="1602">浪</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02j">
                              <h3 class="ttl_while"><a href="kyu02j">漢字検定準２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1614">翁</a>
                                   </li>
                                   <li><a class="color1" href="1621">蚊</a>
                                   </li>
                                   <li><a class="color1" href="1627">核</a>
                                   </li>
                                   <li><a class="color1" href="1640">陥</a>
                                   </li>
                                   <li><a class="color1" href="1649">飢</a>
                                   </li>
                                   <li><a class="color1" href="1659">恭</a>
                                   </li>
                                   <li><a class="color1" href="1687">貢</a>
                                   </li>
                                   <li><a class="color1" href="1691">剛</a>
                                   </li>
                                   <li><a class="color1" href="1698">唆</a>
                                   </li>
                                   <li><a class="color1" href="1699">栽</a>
                                   </li>
                                   <li><a class="color1" href="1701">宰</a>
                                   </li>
                                   <li><a class="color1" href="1705">索</a>
                                   </li>
                                   <li><a class="color1" href="1706">桟</a>
                                   </li>
                                   <li><a class="color1" href="1716">酌</a>
                                   </li>
                                   <li><a class="color1" href="1718">珠</a>
                                   </li>
                                   <li><a class="color1" href="1734">准</a>
                                   </li>
                                   <li><a class="color1" href="1736">殉</a>
                                   </li>
                                   <li><a class="color1" href="1741">祥</a>
                                   </li>
                                   <li><a class="color1" href="1750">症</a>
                                   </li>
                                   <li><a class="color1" href="1751">宵</a>
                                   </li>
                                   <li><a class="color1" href="1761">娠</a>
                                   </li>
                                   <li><a class="color1" href="1765">唇</a>
                                   </li>
                                   <li><a class="color1" href="1775">畝</a>
                                   </li>
                                   <li><a class="color1" href="1778">逝</a>
                                   </li>
                                   <li><a class="color1" href="1782">栓</a>
                                   </li>
                                   <li><a class="color1" href="1792">租</a>
                                   </li>
                                   <li><a class="color1" href="1794">捜</a>
                                   </li>
                                   <li><a class="color1" href="1800">挿</a>
                                   </li>
                                   <li><a class="color1" href="1807">泰</a>
                                   </li>
                                   <li><a class="color1" href="1812">逐</a>
                                   </li>
                                   <li><a class="color1" href="1813">秩</a>
                                   </li>
                                   <li><a class="color1" href="1822">朕</a>
                                   </li>
                                   <li><a class="color1" href="1833">逓</a>
                                   </li>
                                   <li><a class="color1" href="1889">浦</a>
                                   </li>
                                   <li><a class="color1" href="1892">俸</a>
                                   </li>
                                   <li><a class="color1" href="1893">剖</a>
                                   </li>
                                   <li><a class="color1" href="1894">紡</a>
                                   </li>
                                   <li><a class="color1" href="1907">耗</a>
                                   </li>
                                   <li><a class="color1" href="1925">竜</a>
                                   </li>
                                   <li><a class="color1" href="1931">倫</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02">
                              <h3 class="ttl_while"><a href="kyu02">漢字検定２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1938">挨</a>
                                   </li>
                                   <li><a class="color1" href="1949">唄</a>
                                   </li>
                                   <li><a class="color1" href="1957">俺</a>
                                   </li>
                                   <li><a class="color1" href="1970">釜</a>
                                   </li>
                                   <li><a class="color1" href="1991">桁</a>
                                   </li>
                                   <li><a class="color1" href="1992">拳</a>
                                   </li>
                                   <li><a class="color1" href="2007">挫</a>
                                   </li>
                                   <li><a class="color1" href="2015">恣</a>
                                   </li>
                                   <li><a class="color1" href="2023">袖</a>
                                   </li>
                                   <li><a class="color1" href="2033">凄</a>
                                   </li>
                                   <li><a class="color1" href="2035">脊</a>
                                   </li>
                                   <li><a class="color1" href="2049">捉</a>
                                   </li>
                                   <li><a class="color1" href="2059">酎</a>
                                   </li>
                                   <li><a class="color1" href="2062">捗</a>
                                   </li>
                                   <li><a href="2086">剥</a></li>
                                   <li><a class="color1" href="2101">哺</a>
                                   </li>
                                   <li><a class="color1" href="2110">冥</a>
                                   </li>
                                   <li><a class="color1" href="2133">脇</a>
                                   </li>
                                   <li><a class="color1" href="6467">剝</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01j">
                              <h3 class="ttl_while"><a href="kyu01j">漢字検定準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="2137">唖</a></li>
                                   <li><a class="color2" href="2149">倭</a>
                                   </li>
                                   <li><a class="color2" href="2167">烏</a>
                                   </li>
                                   <li><a class="color2" href="2217">峨</a>
                                   </li>
                                   <li><a class="color2" href="2227">桧</a>
                                   </li>
                                   <li><a href="2254">桓</a></li>
                                   <li><a class="color2" href="2261">莞</a>
                                   </li>
                                   <li><a class="color2" href="2293">桔</a>
                                   </li>
                                   <li><a class="color2" href="2303">笈</a>
                                   </li>
                                   <li><a href="2335">倶</a></li>
                                   <li><a class="color2" href="2338">矩</a>
                                   </li>
                                   <li><a class="color2" href="2351">桂</a>
                                   </li>
                                   <li><a href="2352">珪</a></li>
                                   <li><a class="color2" href="2363">倦</a>
                                   </li>
                                   <li><a class="color2" href="2393">倖</a>
                                   </li>
                                   <li><a class="color2" href="2400">晃</a>
                                   </li>
                                   <li><a class="color2" href="2402">浩</a>
                                   </li>
                                   <li><a href="2404">皋</a></li>
                                   <li><a href="2405">砿</a></li>
                                   <li><a class="color2" href="2407">紘</a>
                                   </li>
                                   <li><a class="color2" href="2436">紗</a>
                                   </li>
                                   <li><a class="color2" href="2441">晒</a>
                                   </li>
                                   <li><a class="color2" href="2442">柴</a>
                                   </li>
                                   <li><a class="color2" href="2443">栖</a>
                                   </li>
                                   <li><a class="color2" href="2447">朔</a>
                                   </li>
                                   <li><a class="color2" href="2448">窄</a>
                                   </li>
                                   <li><a class="color2" href="2473">砥</a>
                                   </li>
                                   <li><a class="color2" href="2526">紐</a>
                                   </li>
                                   <li><a class="color2" href="2528">峻</a>
                                   </li>
                                   <li><a class="color2" href="2533">隼</a>
                                   </li>
                                   <li><a class="color2" href="2539">恕</a>
                                   </li>
                                   <li><a class="color2" href="2552">哨</a>
                                   </li>
                                   <li><a class="color2" href="2568">秤</a>
                                   </li>
                                   <li><a class="color2" href="2594">晋</a>
                                   </li>
                                   <li><a href="2597">疹</a></li>
                                   <li><a class="color2" href="2599">秦</a>
                                   </li>
                                   <li><a class="color2" href="2600">訊</a>
                                   </li>
                                   <li><a href="2617">翆</a></li>
                                   <li><a href="2628">脆</a></li>
                                   <li><a class="color2" href="2632">屑</a>
                                   </li>
                                   <li><a href="2636">栴</a></li>
                                   <li><a class="color2" href="2648">閃</a>
                                   </li>
                                   <li><a href="2672">蚤</a></li>
                                   <li><a class="color2" href="2698">悌</a>
                                   </li>
                                   <li><a href="2699">迺</a></li>
                                   <li><a class="color2" href="2702">啄</a>
                                   </li>
                                   <li><a class="color2" href="2717">耽</a>
                                   </li>
                                   <li><a href="2732">凋</a></li>
                                   <li><a class="color2" href="2736">挺</a>
                                   </li>
                                   <li><a class="color2" href="2743">釘</a>
                                   </li>
                                   <li><a class="color2" href="2747">砧</a>
                                   </li>
                                   <li><a class="color2" href="2761">荻</a>
                                   </li>
                                   <li><a href="2781">莵</a></li>
                                   <li><a class="color2" href="2784">套</a>
                                   </li>
                                   <li><a class="color2" href="2788">桐</a>
                                   </li>
                                   <li><a href="2795">涛</a></li>
                                   <li><a href="2803">涜</a></li>
                                   <li><a href="2824">狽</a></li>
                                   <li><a class="color2" href="2832">莫</a>
                                   </li>
                                   <li><a class="color2" href="2834">畠</a>
                                   </li>
                                   <li><a href="2835">捌</a></li>
                                   <li><a class="color2" href="2845">挽</a>
                                   </li>
                                   <li><a href="2848">匪</a></li>
                                   <li><a class="color2" href="2864">豹</a>
                                   </li>
                                   <li><a class="color2" href="2898">娩</a>
                                   </li>
                                   <li><a class="color2" href="2900">圃</a>
                                   </li>
                                   <li><a class="color2" href="2906">峯</a>
                                   </li>
                                   <li><a href="2932">粍</a></li>
                                   <li><a href="2947">涌</a></li>
                                   <li><a href="2963">莱</a></li>
                                   <li><a class="color2" href="2966">哩</a>
                                   </li>
                                   <li><a class="color2" href="2968">栗</a>
                                   </li>
                                   <li><a class="color2" href="2969">浬</a>
                                   </li>
                                   <li><a href="2970">狸</a></li>
                                   <li><a class="color2" href="2980">凌</a>
                                   </li>
                                   <li><a href="3001">砺</a></li>
                                   <li><a class="color2" href="3016">狼</a>
                                   </li>
                                   <li><a href="5654">峩</a></li>
                                   <li><a class="color2" href="6431">俱</a>
                                   </li>
                                   <li><a href="6527">盌</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01">
                              <h3 class="ttl_while"><a href="kyu01">漢字検定１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="3040">烟</a></li>
                                   <li><a href="3043">笋</a></li>
                                   <li><a href="3101">倚</a></li>
                                   <li><a href="3102">倨</a></li>
                                   <li><a href="3103">倔</a></li>
                                   <li><a href="3104">倪</a></li>
                                   <li><a href="3105">倥</a></li>
                                   <li><a href="3106">倅</a></li>
                                   <li><a href="3108">俶</a></li>
                                   <li><a href="3109">倡</a></li>
                                   <li><a href="3110">倩</a></li>
                                   <li><a href="3111">倬</a></li>
                                   <li><a href="3112">俾</a></li>
                                   <li><a href="3113">俯</a></li>
                                   <li><a href="3114">們</a></li>
                                   <li><a href="3115">倆</a></li>
                                   <li><a href="3155">冓</a></li>
                                   <li><a href="3157">冤</a></li>
                                   <li><a href="3158">冢</a></li>
                                   <li><a href="3162">凅</a></li>
                                   <li><a href="3178">剞</a></li>
                                   <li><a href="3179">剔</a></li>
                                   <li><a href="3190">勍</a></li>
                                   <li><a href="3216">叟</a></li>
                                   <li><a href="3256">哥</a></li>
                                   <li><a href="3257">哦</a></li>
                                   <li><a href="3258">唏</a></li>
                                   <li><a href="3259">唔</a></li>
                                   <li><a href="3260">哽</a></li>
                                   <li><a href="3261">哮</a></li>
                                   <li><a href="3262">哭</a></li>
                                   <li><a href="3263">哢</a></li>
                                   <li><a href="3273">唳</a></li>
                                   <li><a href="3326">圄</a></li>
                                   <li><a href="3340">埃</a></li>
                                   <li><a href="3341">埆</a></li>
                                   <li><a href="3342">埒</a></li>
                                   <li><a href="3369">奚</a></li>
                                   <li><a href="3370">奘</a></li>
                                   <li><a href="3385">娥</a></li>
                                   <li><a href="3386">娟</a></li>
                                   <li><a href="3387">娑</a></li>
                                   <li><a href="3388">娜</a></li>
                                   <li><a href="3389">娉</a></li>
                                   <li><a href="3428">宦</a></li>
                                   <li><a href="3429">宸</a></li>
                                   <li><a href="3446">屓</a></li>
                                   <li><a href="3455">峭</a></li>
                                   <li><a href="3456">峪</a></li>
                                   <li><a href="3556">恚</a></li>
                                   <li><a href="3557">恁</a></li>
                                   <li><a href="3567">恙</a></li>
                                   <li><a href="3568">悁</a></li>
                                   <li><a href="3569">悍</a></li>
                                   <li><a href="3570">悃</a></li>
                                   <li><a href="3571">悚</a></li>
                                   <li><a href="3572">悄</a></li>
                                   <li><a href="3573">悛</a></li>
                                   <li><a href="3574">悖</a></li>
                                   <li><a href="3575">悒</a></li>
                                   <li><a href="3576">悧</a></li>
                                   <li><a href="3577">悋</a></li>
                                   <li><a href="3678">拿</a></li>
                                   <li><a href="3684">挈</a></li>
                                   <li><a href="3687">捐</a></li>
                                   <li><a href="3688">捍</a></li>
                                   <li><a href="3689">捏</a></li>
                                   <li><a href="3700">捩</a></li>
                                   <li><a href="3778">旃</a></li>
                                   <li><a href="3779">旆</a></li>
                                   <li><a href="3780">旁</a></li>
                                   <li><a href="3781">旄</a></li>
                                   <li><a class="color2" href="3907">晟</a>
                                   </li>
                                   <li><a href="3908">晁</a></li>
                                   <li><a class="color2" href="3909">晏</a>
                                   </li>
                                   <li><a href="3939">耙</a></li>
                                   <li><a href="3940">耘</a></li>
                                   <li><a href="4030">栩</a></li>
                                   <li><a class="color2" href="4034">栞</a>
                                   </li>
                                   <li><a href="4035">桙</a></li>
                                   <li><a href="4036">框</a></li>
                                   <li><a href="4037">桎</a></li>
                                   <li><a href="4038">蚓</a></li>
                                   <li><a href="4039">蚪</a></li>
                                   <li><a href="4040">蚌</a></li>
                                   <li><a href="4041">蚩</a></li>
                                   <li><a href="4042">蚣</a></li>
                                   <li><a href="4071">蚋</a></li>
                                   <li><a href="4116">栲</a></li>
                                   <li><a href="4117">栫</a></li>
                                   <li><a href="4224">胱</a></li>
                                   <li><a href="4225">胯</a></li>
                                   <li><a href="4235">胼</a></li>
                                   <li><a href="4354">韋</a></li>
                                   <li><a href="4369">浣</a></li>
                                   <li><a href="4370">浙</a></li>
                                   <li><a href="4371">涕</a></li>
                                   <li><a href="4372">涓</a></li>
                                   <li><a href="4373">浹</a></li>
                                   <li><a href="4374">浚</a></li>
                                   <li><a href="4375">涅</a></li>
                                   <li><a href="4376">涎</a></li>
                                   <li><a href="4517">笏</a></li>
                                   <li><a href="4518">笆</a></li>
                                   <li><a href="4519">笊</a></li>
                                   <li><a href="4526">笄</a></li>
                                   <li><a href="4615">珮</a></li>
                                   <li><a href="4616">珥</a></li>
                                   <li><a href="4617">珞</a></li>
                                   <li><a href="4658">砠</a></li>
                                   <li><a href="4750">紊</a></li>
                                   <li><a href="4751">紕</a></li>
                                   <li><a href="4752">紜</a></li>
                                   <li><a href="4855">耿</a></li>
                                   <li><a href="4880">鬯</a></li>
                                   <li><a href="4884">舫</a></li>
                                   <li><a href="4908">烋</a></li>
                                   <li><a href="4909">烝</a></li>
                                   <li><a href="4910">烙</a></li>
                                   <li><a href="4946">訖</a></li>
                                   <li><a href="4947">訌</a></li>
                                   <li><a href="4948">訐</a></li>
                                   <li><a href="5027">衾</a></li>
                                   <li><a href="5029">袗</a></li>
                                   <li><a href="5030">袙</a></li>
                                   <li><a href="5031">袢</a></li>
                                   <li><a href="5032">袒</a></li>
                                   <li><a href="5033">袍</a></li>
                                   <li><a href="5075">躬</a></li>
                                   <li><a href="5108">狷</a></li>
                                   <li><a href="5110">倏</a></li>
                                   <li><a href="5126">羔</a></li>
                                   <li><a href="5151">眛</a></li>
                                   <li><a href="5152">眩</a></li>
                                   <li><a href="5185">陜</a></li>
                                   <li><a href="5186">陝</a></li>
                                   <li><a href="5187">陟</a></li>
                                   <li><a href="5188">陞</a></li>
                                   <li><a href="5203">郛</a></li>
                                   <li><a href="5204">郢</a></li>
                                   <li><a href="5205">郤</a></li>
                                   <li><a href="5215">疳</a></li>
                                   <li><a href="5216">痃</a></li>
                                   <li><a href="5217">痂</a></li>
                                   <li><a href="5218">疸</a></li>
                                   <li><a href="5219">疽</a></li>
                                   <li><a href="5220">疼</a></li>
                                   <li><a href="5221">疱</a></li>
                                   <li><a href="5338">莓</a></li>
                                   <li><a href="5351">莚</a></li>
                                   <li><a href="5352">莢</a></li>
                                   <li><a href="5353">莪</a></li>
                                   <li><a href="5354">莟</a></li>
                                   <li><a href="5355">莎</a></li>
                                   <li><a href="5356">莅</a></li>
                                   <li><a href="5357">芻</a></li>
                                   <li><a href="5359">茣</a></li>
                                   <li><a href="5360">莨</a></li>
                                   <li><a href="5361">荳</a></li>
                                   <li><a href="5362">莠</a></li>
                                   <li><a href="5365">殷</a></li>
                                   <li><a href="5367">荼</a></li>
                                   <li><a href="5368">荵</a></li>
                                   <li><a class="color2" href="5369">莉</a>
                                   </li>
                                   <li><a href="5448">畛</a></li>
                                   <li><a href="5449">畚</a></li>
                                   <li><a href="5472">豺</a></li>
                                   <li><a href="5478">耆</a></li>
                                   <li><a href="5479">耄</a></li>
                                   <li><a href="5505">逅</a></li>
                                   <li><a href="5506">迹</a></li>
                                   <li><a href="5507">迴</a></li>
                                   <li><a href="5516">迸</a></li>
                                   <li><a href="5541">竚</a></li>
                                   <li><a href="5542">站</a></li>
                                   <li><a href="5551">粃</a></li>
                                   <li><a href="5552">秣</a></li>
                                   <li><a href="5553">秬</a></li>
                                   <li><a href="5554">秧</a></li>
                                   <li><a href="5564">盍</a></li>
                                   <li><a class="color2" href="5571">赳</a>
                                   </li>
                                   <li><a href="5574">舐</a></li>
                                   <li><a href="5588">罠</a></li>
                                   <li><a href="5589">罟</a></li>
                                   <li><a href="5599">皰</a></li>
                                   <li><a href="5604">翅</a></li>
                                   <li><a href="5615">窈</a></li>
                                   <li><a href="5630">虔</a></li>
                                   <li><a href="5634">祗</a></li>
                                   <li><a href="5635">祠</a></li>
                                   <li><a href="5636">祚</a></li>
                                   <li><a href="5637">祓</a></li>
                                   <li><a href="5638">祟</a></li>
                                   <li><a href="5644">衄</a></li>
                                   <li><a href="5646">豈</a></li>
                                   <li><a href="5771">冦</a></li>
                                   <li><a href="5816">弉</a></li>
                                   <li><a href="6507">衮</a></li>
                                   <li><a href="6539">捓</a></li>
                                   <li><a href="8953">粏</a></li>
                                   <li><a href="9748">虒</a></li>
                                   <li><a href="12021">桛</a></li>
                                   <li><a href="12028">桄</a></li>
                                   <li><a href="12333">凊</a></li>
                                   <li><a href="12336">哳</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts0101j">
                              <h3 class="ttl_while"><a href="kyu0101j">漢字検定１級 / 準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="5688">氣</a>
                                   </li>
                                   <li><a class="color2" href="5704">乘</a>
                                   </li>
                                   <li><a href="5826">徑</a></li>
                                   <li><a href="5845">缺</a></li>
                                   <li><a href="5937">莖</a></li>
                                   <li><a class="color2" href="5939">莊</a>
                                   </li>
                                   <li><a class="color2" href="6010">祕</a>
                                   </li>
                                   <li><a href="6015">竝</a></li>
                                   <li><a class="color2" href="6081">峽</a>
                                   </li>
                                   <li><a class="color2" href="6092">眞</a>
                                   </li>
                                   <li><a href="6186">挾</a></li>
                                   <li><a href="6198">效</a></li>
                                   <li><a href="6207">晉</a></li>
                                   <li><a class="color2" href="6252">狹</a>
                                   </li>
                                   <li><a class="color2" href="6368">神</a>
                                   </li>
                                   <li><a class="color2" href="6382">悔</a>
                                   </li>
                                   <li><a class="color2" href="6388">海</a>
                                   </li>
                                   <li><a class="color2" href="6397">祐</a>
                                   </li>
                                   <li><a class="color2" href="6398">祖</a>
                                   </li>
                                   <li><a class="color2" href="6399">祝</a>
                                   </li>
                                   <li><a class="color2" href="6409">臭</a>
                                   </li>
                                   <li><a class="color2" href="6428">郞</a>
                                   </li>
                                   <li><a class="color2" href="6444">涉</a>
                                   </li>
                                   <li><a href="10499">益</a></li>
                                   <li><a href="11079">悅</a></li>
                                   <li><a href="12460">倂</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts">
                              <h3 class="ttl_while">漢字検定対象外</h3>
                              <ul class="search_parts">
                                   <li><a href="5692">珱</a></li>
                                   <li><a href="5696">鬥</a></li>
                                   <li><a href="5706">娚</a></li>
                                   <li><a href="5717">粐</a></li>
                                   <li><a href="5743">亳</a></li>
                                   <li><a class="color2" href="5745">凉</a>
                                   </li>
                                   <li><a href="5746">舩</a></li>
                                   <li><a href="5747">舮</a></li>
                                   <li><a href="5777">崋</a></li>
                                   <li><a href="5883">埔</a></li>
                                   <li><a href="5897">浤</a></li>
                                   <li><a href="5898">秡</a></li>
                                   <li><a href="5901">釖</a></li>
                                   <li><a href="5902">釟</a></li>
                                   <li><a href="5903">釡</a></li>
                                   <li><a href="5904">釛</a></li>
                                   <li><a href="5921">桍</a></li>
                                   <li><a href="5938">莇</a></li>
                                   <li><a href="5961">恷</a></li>
                                   <li><a href="5963">悗</a></li>
                                   <li><a href="5966">埀</a></li>
                                   <li><a href="5972">埓</a></li>
                                   <li><a href="6035">髟</a></li>
                                   <li><a href="6036">鬲</a></li>
                                   <li><a href="6066">栢</a></li>
                                   <li><a href="6075">埖</a></li>
                                   <li><a href="6082">峺</a></li>
                                   <li><a href="6093">眤</a></li>
                                   <li><a href="6109">柧</a></li>
                                   <li><a href="6110">档</a></li>
                                   <li><a href="6163">尅</a></li>
                                   <li><a href="6168">屐</a></li>
                                   <li><a class="color2" href="6206">晄</a>
                                   </li>
                                   <li><a href="6233">氤</a></li>
                                   <li><a href="6280">耻</a></li>
                                   <li><a href="6307">袁</a></li>
                                   <li><a href="6308">袮</a></li>
                                   <li><a href="6341">陦</a></li>
                                   <li><a href="6611">丵</a></li>
                                   <li><a href="6617">镹</a></li>
                                   <li><a href="6635">俼</a></li>
                                   <li><a href="6654">斊</a></li>
                                   <li><a href="6656">斋</a></li>
                                   <li><a href="7469">养</a></li>
                                   <li><a href="7523">釚</a></li>
                                   <li><a href="7524">釗</a></li>
                                   <li><a href="7525">釞</a></li>
                                   <li><a href="7526">釙</a></li>
                                   <li><a href="7527">釕</a></li>
                                   <li><a href="7596">盋</a></li>
                                   <li><a href="7866">閄</a></li>
                                   <li><a href="7883">剦</a></li>
                                   <li><a href="7929">陘</a></li>
                                   <li><a href="7931">陖</a></li>
                                   <li><a href="7933">陗</a></li>
                                   <li><a href="7934">徏</a></li>
                                   <li><a href="7935">陡</a></li>
                                   <li><a href="7973">隺</a></li>
                                   <li><a href="7980">隽</a></li>
                                   <li><a href="8037">覍</a></li>
                                   <li><a href="8040">眎</a></li>
                                   <li><a href="8085">訑</a></li>
                                   <li><a href="8086">訔</a></li>
                                   <li><a href="8087">訏</a></li>
                                   <li><a href="8088">訒</a></li>
                                   <li><a href="8089">訕</a></li>
                                   <li><a href="8235">谸</a></li>
                                   <li><a href="8244">豇</a></li>
                                   <li><a href="8253">豗</a></li>
                                   <li><a href="8273">豻</a></li>
                                   <li><a href="8291">貤</a></li>
                                   <li><a href="8292">貣</a></li>
                                   <li><a href="8337">赶</a></li>
                                   <li><a href="8359">趷</a></li>
                                   <li><a href="8360">趵</a></li>
                                   <li><a href="8476">軎</a></li>
                                   <li><a href="8477">軏</a></li>
                                   <li><a href="8479">軔</a></li>
                                   <li><a href="8480">軑</a></li>
                                   <li><a href="8481">䡅</a></li>
                                   <li><a href="8482">軓</a></li>
                                   <li><a href="8571">逈</a></li>
                                   <li><a href="8579">迻</a></li>
                                   <li><a href="8580">适</a></li>
                                   <li><a href="8581">迿</a></li>
                                   <li><a href="8582">迵</a></li>
                                   <li><a href="8584">迶</a></li>
                                   <li><a href="8585">迾</a></li>
                                   <li><a href="8632">邕</a></li>
                                   <li><a href="8653">郝</a></li>
                                   <li><a href="8655">郚</a></li>
                                   <li><a href="8656">郜</a></li>
                                   <li><a href="8657">郟</a></li>
                                   <li><a href="8658">郠</a></li>
                                   <li><a href="8659">郕</a></li>
                                   <li><a href="8660">郗</a></li>
                                   <li><a href="8661">郥</a></li>
                                   <li><a href="8662">郙</a></li>
                                   <li><a href="8663">郘</a></li>
                                   <li><a href="8728">酏</a></li>
                                   <li><a href="8729">酐</a></li>
                                   <li><a href="8785">笒</a></li>
                                   <li><a href="8786">笐</a></li>
                                   <li><a href="8787">笇</a></li>
                                   <li><a href="8814">栰</a></li>
                                   <li><a href="8815">笔</a></li>
                                   <li><a href="8952">粆</a></li>
                                   <li><a href="8978">粇</a></li>
                                   <li><a href="8999">䋆</a></li>
                                   <li><a href="9000">紟</a></li>
                                   <li><a href="9001">紒</a></li>
                                   <li><a href="9002">紓</a></li>
                                   <li><a href="9003">紝</a></li>
                                   <li><a href="9005">紞</a></li>
                                   <li><a href="9006">紖</a></li>
                                   <li><a href="9007">紏</a></li>
                                   <li><a href="9008">紦</a></li>
                                   <li><a href="9009">紑</a></li>
                                   <li><a href="9012">紥</a></li>
                                   <li><a href="9062">紣</a></li>
                                   <li><a href="9157">䍃</a></li>
                                   <li><a href="9173">罡</a></li>
                                   <li><a href="9174">罝</a></li>
                                   <li><a href="9175">罜</a></li>
                                   <li><a href="9197">羗</a></li>
                                   <li><a href="9200">羐</a></li>
                                   <li><a href="9202">羖</a></li>
                                   <li><a href="9203">羓</a></li>
                                   <li><a href="9224">翃</a></li>
                                   <li><a href="9225">翄</a></li>
                                   <li><a href="9226">翀</a></li>
                                   <li><a href="9250">耊</a></li>
                                   <li><a href="9255">䎡</a></li>
                                   <li><a href="9258">耖</a></li>
                                   <li><a href="9275">耺</a></li>
                                   <li><a href="9276">耹</a></li>
                                   <li><a href="9277">耾</a></li>
                                   <li><a href="9279">耼</a></li>
                                   <li><a href="9289">聀</a></li>
                                   <li><a href="9292">肁</a></li>
                                   <li><a href="9298">臬</a></li>
                                   <li><a href="9310">舀</a></li>
                                   <li><a href="9311">㫪</a></li>
                                   <li><a href="9318">䑙</a></li>
                                   <li><a href="9327">舨</a></li>
                                   <li><a href="9402">偀</a></li>
                                   <li><a href="9434">莕</a></li>
                                   <li><a href="9448">荈</a></li>
                                   <li><a href="9463">莧</a></li>
                                   <li><a href="9464">莃</a></li>
                                   <li><a href="9465">莍</a></li>
                                   <li><a href="9466">莒</a></li>
                                   <li><a href="9468">莙</a></li>
                                   <li><a href="9469">莄</a></li>
                                   <li><a href="9470">䓔</a></li>
                                   <li><a href="9471">莝</a></li>
                                   <li><a href="9472">莘</a></li>
                                   <li><a href="9473">茞</a></li>
                                   <li><a href="9474">莀</a></li>
                                   <li><a href="9475">荽</a></li>
                                   <li><a href="9476">荾</a></li>
                                   <li><a href="9477">荿</a></li>
                                   <li><a href="9478">莦</a></li>
                                   <li><a href="9479">莌</a></li>
                                   <li><a href="9480">莜</a></li>
                                   <li><a href="9481">莛</a></li>
                                   <li><a href="9484">荰</a></li>
                                   <li><a href="9485">莆</a></li>
                                   <li><a href="9486">莩</a></li>
                                   <li><a href="9487">莬</a></li>
                                   <li><a href="9488">莂</a></li>
                                   <li><a href="9489">莔</a></li>
                                   <li><a href="9490">荸</a></li>
                                   <li><a href="9506">茝</a></li>
                                   <li><a href="9747">虓</a></li>
                                   <li><a href="9770">蚏</a></li>
                                   <li><a href="9771">蚜</a></li>
                                   <li><a href="9772">蚧</a></li>
                                   <li><a href="9773">蚑</a></li>
                                   <li><a href="9774">蚔</a></li>
                                   <li><a href="9775">蚚</a></li>
                                   <li><a href="9776">蚖</a></li>
                                   <li><a href="9779">蚝</a></li>
                                   <li><a href="9780">蚇</a></li>
                                   <li><a href="9781">蚦</a></li>
                                   <li><a href="9783">蚍</a></li>
                                   <li><a href="9784">蚨</a></li>
                                   <li><a href="9785">蚡</a></li>
                                   <li><a href="9786">蚠</a></li>
                                   <li><a href="9787">蚉</a></li>
                                   <li><a href="9789">蚄</a></li>
                                   <li><a href="9791">蚞</a></li>
                                   <li><a href="9812">蚘</a></li>
                                   <li><a href="9977">䘐</a></li>
                                   <li><a href="9978">衃</a></li>
                                   <li><a href="9992">衺</a></li>
                                   <li><a href="10013">袡</a></li>
                                   <li><a href="10015">袘</a></li>
                                   <li><a href="10016">袣</a></li>
                                   <li><a href="10017">袪</a></li>
                                   <li><a href="10018">袨</a></li>
                                   <li><a href="10019">袑</a></li>
                                   <li><a href="10020">袟</a></li>
                                   <li><a href="10022">袛</a></li>
                                   <li><a href="10023">袚</a></li>
                                   <li><a href="10024">袜</a></li>
                                   <li><a href="10025">袎</a></li>
                                   <li><a href="10033">帬</a></li>
                                   <li><a href="10105">覂</a></li>
                                   <li><a href="10106">玆</a></li>
                                   <li><a href="10139">珙</a></li>
                                   <li><a href="10140">珦</a></li>
                                   <li><a href="10141">珝</a></li>
                                   <li><a href="10142">珩</a></li>
                                   <li><a href="10143">珖</a></li>
                                   <li><a href="10144">珓</a></li>
                                   <li><a href="10145">玼</a></li>
                                   <li><a href="10146">珣</a></li>
                                   <li><a href="10147">珒</a></li>
                                   <li><a href="10148">珧</a></li>
                                   <li><a href="10169">珡</a></li>
                                   <li><a href="10245">玺</a></li>
                                   <li><a href="10271">瓴</a></li>
                                   <li><a href="10290">甡</a></li>
                                   <li><a href="10312">畟</a></li>
                                   <li><a href="10313">畗</a></li>
                                   <li><a href="10316">畞</a></li>
                                   <li><a href="10319">奙</a></li>
                                   <li><a href="10338">疍</a></li>
                                   <li><a href="10355">疴</a></li>
                                   <li><a href="10356">痀</a></li>
                                   <li><a href="10357">痄</a></li>
                                   <li><a href="10358">疻</a></li>
                                   <li><a href="10359">疰</a></li>
                                   <li><a href="10360">痁</a></li>
                                   <li><a href="10361">痆</a></li>
                                   <li><a href="10362">疷</a></li>
                                   <li><a href="10363">疿</a></li>
                                   <li><a href="10465">皌</a></li>
                                   <li><a href="10500">盎</a></li>
                                   <li><a href="10501">㼜</a></li>
                                   <li><a href="10503">盉</a></li>
                                   <li><a href="10527">眙</a></li>
                                   <li><a href="10528">眗</a></li>
                                   <li><a href="10529">䀠</a></li>
                                   <li><a href="10530">眡</a></li>
                                   <li><a href="10531">䀢</a></li>
                                   <li><a href="10533">眒</a></li>
                                   <li><a href="10534">眕</a></li>
                                   <li><a href="10535">眚</a></li>
                                   <li><a href="10536">眝</a></li>
                                   <li><a href="10537">眔</a></li>
                                   <li><a href="10538">眜</a></li>
                                   <li><a href="10539">眑</a></li>
                                   <li><a href="10540">眢</a></li>
                                   <li><a href="10552">眿</a></li>
                                   <li><a href="10649">砙</a></li>
                                   <li><a href="10650">砡</a></li>
                                   <li><a href="10651">砝</a></li>
                                   <li><a href="10652">砟</a></li>
                                   <li><a href="10653">砷</a></li>
                                   <li><a href="10654">砣</a></li>
                                   <li><a href="10655">砫</a></li>
                                   <li><a href="10656">砮</a></li>
                                   <li><a href="10657">砵</a></li>
                                   <li><a href="10658">砯</a></li>
                                   <li><a href="10659">砩</a></li>
                                   <li><a href="10660">砰</a></li>
                                   <li><a href="10661">砢</a></li>
                                   <li><a href="10662">砬</a></li>
                                   <li><a href="10663">砹</a></li>
                                   <li><a href="10785">祛</a></li>
                                   <li><a href="10786">祜</a></li>
                                   <li><a href="10787">祘</a></li>
                                   <li><a href="10788">祏</a></li>
                                   <li><a href="10789">祑</a></li>
                                   <li><a href="10790">祙</a></li>
                                   <li><a href="10791">祔</a></li>
                                   <li><a href="10835">秭</a></li>
                                   <li><a href="10836">秫</a></li>
                                   <li><a href="10837">秪</a></li>
                                   <li><a href="10838">秥</a></li>
                                   <li><a href="10839">秚</a></li>
                                   <li><a href="10840">秠</a></li>
                                   <li><a href="10842">秞</a></li>
                                   <li><a href="10843">秢</a></li>
                                   <li><a href="10844">秝</a></li>
                                   <li><a href="10907">䆘</a></li>
                                   <li><a href="10908">窋</a></li>
                                   <li><a href="10909">窅</a></li>
                                   <li><a href="10910">窌</a></li>
                                   <li><a href="10942">竘</a></li>
                                   <li><a href="10943">竛</a></li>
                                   <li><a href="10961">恖</a></li>
                                   <li><a href="10967">恝</a></li>
                                   <li><a href="10968">恧</a></li>
                                   <li><a href="10983">爱</a></li>
                                   <li><a href="11058">悑</a></li>
                                   <li><a href="11065">㤩</a></li>
                                   <li><a href="11081">悈</a></li>
                                   <li><a href="11082">猂</a></li>
                                   <li><a href="11083">悕</a></li>
                                   <li><a href="11084">㤯</a></li>
                                   <li><a href="11086">悞</a></li>
                                   <li><a href="11087">悎</a></li>
                                   <li><a href="11088">悇</a></li>
                                   <li><a href="11090">悂</a></li>
                                   <li><a href="11092">悀</a></li>
                                   <li><a href="11095">悝</a></li>
                                   <li><a href="11096">悢</a></li>
                                   <li><a href="11124">㤣</a></li>
                                   <li><a href="11156">眘</a></li>
                                   <li><a href="11241">扆</a></li>
                                   <li><a href="11242">扅</a></li>
                                   <li><a href="11243">扄</a></li>
                                   <li><a href="11245">拲</a></li>
                                   <li><a href="11246">㧬</a></li>
                                   <li><a href="11247">挐</a></li>
                                   <li><a href="11249">挱</a></li>
                                   <li><a href="11289">㪿</a></li>
                                   <li><a href="11322">捙</a></li>
                                   <li><a href="11334">捔</a></li>
                                   <li><a href="11335">挶</a></li>
                                   <li><a href="11336">捄</a></li>
                                   <li><a href="11337">捃</a></li>
                                   <li><a href="11338">捂</a></li>
                                   <li><a href="11339">捁</a></li>
                                   <li><a href="11340">挭</a></li>
                                   <li><a href="11341">捆</a></li>
                                   <li><a href="11342">挋</a></li>
                                   <li><a href="11343">捒</a></li>
                                   <li><a href="11344">捘</a></li>
                                   <li><a href="11345">捎</a></li>
                                   <li><a href="11346">挼</a></li>
                                   <li><a href="11347">挻</a></li>
                                   <li><a href="11350">挪</a></li>
                                   <li><a href="11351">挩</a></li>
                                   <li><a href="11352">捈</a></li>
                                   <li><a href="11353">捅</a></li>
                                   <li><a href="11355">捀</a></li>
                                   <li><a href="11356">捊</a></li>
                                   <li><a href="11358">挬</a></li>
                                   <li><a href="11359">挴</a></li>
                                   <li><a href="11360">挹</a></li>
                                   <li><a href="11361">捋</a></li>
                                   <li><a href="11539">㩻</a></li>
                                   <li><a href="11548">敇</a></li>
                                   <li><a href="11549">敉</a></li>
                                   <li><a href="11582">斚</a></li>
                                   <li><a href="11600">旂</a></li>
                                   <li><a href="11604">捛</a></li>
                                   <li><a href="11666">晐</a></li>
                                   <li><a href="11667">晈</a></li>
                                   <li><a href="11668">晑</a></li>
                                   <li><a href="11669">晆</a></li>
                                   <li><a href="11670">晅</a></li>
                                   <li><a href="11672">晎</a></li>
                                   <li><a href="11675">晊</a></li>
                                   <li><a href="11676">晌</a></li>
                                   <li><a href="11679">晀</a></li>
                                   <li><a href="11746">曺</a></li>
                                   <li><a href="11748">冣</a></li>
                                   <li><a href="11779">胍</a></li>
                                   <li><a href="11794">胺</a></li>
                                   <li><a href="11795">胰</a></li>
                                   <li><a href="11796">胲</a></li>
                                   <li><a href="11797">胳</a></li>
                                   <li><a href="11798">胷</a></li>
                                   <li><a href="11799">脋</a></li>
                                   <li><a href="11800">䏮</a></li>
                                   <li><a href="11801">胻</a></li>
                                   <li><a href="11802">胶</a></li>
                                   <li><a href="11803">㬵</a></li>
                                   <li><a href="11804">胵</a></li>
                                   <li><a href="11805">胹</a></li>
                                   <li><a href="11806">朒</a></li>
                                   <li><a href="11807">脀</a></li>
                                   <li><a href="11808">脃</a></li>
                                   <li><a href="11809">朓</a></li>
                                   <li><a href="11912">脍</a></li>
                                   <li><a href="11926">胭</a></li>
                                   <li><a href="11951">徕</a></li>
                                   <li><a href="11982">栧</a></li>
                                   <li><a href="11984">柡</a></li>
                                   <li><a href="12012">枽</a></li>
                                   <li><a href="12016">桉</a></li>
                                   <li><a href="12017">栘</a></li>
                                   <li><a href="12018">桋</a></li>
                                   <li><a href="12019">栯</a></li>
                                   <li><a href="12020">桅</a></li>
                                   <li><a href="12022">栝</a></li>
                                   <li><a href="12024">桕</a></li>
                                   <li><a href="12025">栱</a></li>
                                   <li><a href="12026">栔</a></li>
                                   <li><a href="12027">桊</a></li>
                                   <li><a href="12030">桚</a></li>
                                   <li><a href="12031">栨</a></li>
                                   <li><a href="12032">栭</a></li>
                                   <li><a href="12033">栮</a></li>
                                   <li><a href="12034">栒</a></li>
                                   <li><a href="12035">栬</a></li>
                                   <li><a href="12038">桗</a></li>
                                   <li><a href="12039">桌</a></li>
                                   <li><a href="12041">栻</a></li>
                                   <li><a href="12042">栚</a></li>
                                   <li><a href="12044">栿</a></li>
                                   <li><a href="12046">栵</a></li>
                                   <li><a href="12047">栳</a></li>
                                   <li><a href="12117">栟</a></li>
                                   <li><a href="12195">桘</a></li>
                                   <li><a href="12218">桩</a></li>
                                   <li><a href="12326">栾</a></li>
                                   <li><a href="12469">㑨</a></li>
                                   <li><a href="12476">悓</a></li>
                                   <li><a href="12496">㑥</a></li>
                                   <li><a href="12497">倇</a></li>
                                   <li><a href="12498">俰</a></li>
                                   <li><a href="12499">倌</a></li>
                                   <li><a href="12500">倝</a></li>
                                   <li><a href="12501">倛</a></li>
                                   <li><a href="12502">倠</a></li>
                                   <li><a href="12503">俽</a></li>
                                   <li><a href="12504">倞</a></li>
                                   <li><a href="12505">倄</a></li>
                                   <li><a href="12506">倱</a></li>
                                   <li><a href="12507">倳</a></li>
                                   <li><a href="12509">倘</a></li>
                                   <li><a href="12510">倢</a></li>
                                   <li><a href="12511">倯</a></li>
                                   <li><a href="12512">倕</a></li>
                                   <li><a href="12513">俴</a></li>
                                   <li><a href="12514">倧</a></li>
                                   <li><a href="12515">倓</a></li>
                                   <li><a href="12516">倁</a></li>
                                   <li><a href="12517">俿</a></li>
                                   <li><a href="12518">倀</a></li>
                                   <li><a href="12519">倜</a></li>
                                   <li><a href="12520">倎</a></li>
                                   <li><a href="12521">倲</a></li>
                                   <li><a href="12522">俷</a></li>
                                   <li><a href="12523">倵</a></li>
                                   <li><a href="12524">倗</a></li>
                                   <li><a href="12525">倮</a></li>
                                   <li><a href="12526">倈</a></li>
                                   <li><a href="12528">倰</a></li>
                                   <li><a href="12534">偌</a></li>
                                   <li><a href="12555">倴</a></li>
                                   <li><a href="12569">俲</a></li>
                                   <li><a href="12581">俻</a></li>
                                   <li><a href="12649">㑪</a></li>
                                   <li><a href="12670">㑩</a></li>
                                   <li><a href="12682">兓</a></li>
                                   <li><a href="12701">冔</a></li>
                                   <li><a href="12706">冡</a></li>
                                   <li><a href="12715">凇</a></li>
                                   <li><a href="12732">圅</a></li>
                                   <li><a href="12737">剙</a></li>
                                   <li><a href="12739">剓</a></li>
                                   <li><a href="12763">歬</a></li>
                                   <li><a href="12768">剡</a></li>
                                   <li><a href="12770">剘</a></li>
                                   <li><a href="12771">剠</a></li>
                                   <li><a href="12774">剒</a></li>
                                   <li><a href="12775">剗</a></li>
                                   <li><a href="12777">剚</a></li>
                                   <li><a href="12778">剟</a></li>
                                   <li><a href="12779">剕</a></li>
                                   <li><a href="12781">剜</a></li>
                                   <li><a href="12834">勏</a></li>
                                   <li><a href="12835">缼</a></li>
                                   <li><a href="12846">欬</a></li>
                                   <li><a href="12848">欯</a></li>
                                   <li><a href="12849">欮</a></li>
                                   <li><a href="12850">勌</a></li>
                                   <li><a href="12851">欱</a></li>
                                   <li><a href="12853">勐</a></li>
                                   <li><a href="12856">勑</a></li>
                                   <li><a href="12861">㔟</a></li>
                                   <li><a href="12882">歭</a></li>
                                   <li><a href="12898">殈</a></li>
                                   <li><a href="12899">肂</a></li>
                                   <li><a href="12931">㱾</a></li>
                                   <li><a href="12932">㱿</a></li>
                                   <li><a href="12968">毦</a></li>
                                   <li><a href="12969">毧</a></li>
                                   <li><a href="12970">毨</a></li>
                                   <li><a href="12972">毣</a></li>
                                   <li><a href="12986">匫</a></li>
                                   <li><a href="13027">乽</a></li>
                                   <li><a href="13070">俹</a></li>
                                   <li><a href="13071">倃</a></li>
                                   <li><a href="13072">倊</a></li>
                                   <li><a href="13073">倷</a></li>
                                   <li><a href="13074">倸</a></li>
                                   <li><a href="13075">倿</a></li>
                                   <li><a href="13114">兛</a></li>
                                   <li><a href="13131">凈</a></li>
                                   <li><a href="13150">剢</a></li>
                                   <li><a href="13163">勎</a></li>
                                   <li><a href="13168">匎</a></li>
                                   <li><a href="13193">厜</a></li>
                                   <li><a href="13194">厝</a></li>
                                   <li><a href="13195">厞</a></li>
                                   <li><a href="13217">叞</a></li>
                                   <li><a href="13330">哣</a></li>
                                   <li><a href="13331">哤</a></li>
                                   <li><a href="13332">哧</a></li>
                                   <li><a href="13333">哪</a></li>
                                   <li><a href="13334">哫</a></li>
                                   <li><a href="13335">哬</a></li>
                                   <li><a href="13336">哯</a></li>
                                   <li><a href="13337">哰</a></li>
                                   <li><a href="13338">哱</a></li>
                                   <li><a href="13339">哴</a></li>
                                   <li><a href="13340">哵</a></li>
                                   <li><a href="13341">哶</a></li>
                                   <li><a href="13342">哷</a></li>
                                   <li><a href="13343">哸</a></li>
                                   <li><a href="13344">哹</a></li>
                                   <li><a href="13345">哻</a></li>
                                   <li><a href="13346">哼</a></li>
                                   <li><a href="13347">哾</a></li>
                                   <li><a href="13348">哿</a></li>
                                   <li><a href="13349">唀</a></li>
                                   <li><a href="13350">唁</a></li>
                                   <li><a href="13351">唂</a></li>
                                   <li><a href="13352">唃</a></li>
                                   <li><a href="13353">唅</a></li>
                                   <li><a href="13354">唈</a></li>
                                   <li><a href="13355">唉</a></li>
                                   <li><a href="13356">唊</a></li>
                                   <li><a href="13357">唋</a></li>
                                   <li><a href="13358">唍</a></li>
                                   <li><a href="13359">唎</a></li>
                                   <li><a href="13360">唑</a></li>
                                   <li><a href="13361">唒</a></li>
                                   <li><a href="13362">唓</a></li>
                                   <li><a href="13363">唕</a></li>
                                   <li><a href="13364">唗</a></li>
                                   <li><a href="13365">唘</a></li>
                                   <li><a href="13366">唙</a></li>
                                   <li><a href="13367">唚</a></li>
                                   <li><a href="13368">唜</a></li>
                                   <li><a href="13369">唟</a></li>
                                   <li><a href="13370">唧</a></li>
                                   <li><a href="13621">圁</a></li>
                                   <li><a href="13721">垶</a></li>
                                   <li><a href="13722">垷</a></li>
                                   <li><a href="13723">垸</a></li>
                                   <li><a href="13724">垹</a></li>
                                   <li><a href="13725">垺</a></li>
                                   <li><a href="13726">垻</a></li>
                                   <li><a href="13727">垼</a></li>
                                   <li><a href="13728">垽</a></li>
                                   <li><a href="13729">垾</a></li>
                                   <li><a href="13730">垿</a></li>
                                   <li><a href="13731">埁</a></li>
                                   <li><a href="13732">埂</a></li>
                                   <li><a href="13733">埄</a></li>
                                   <li><a href="13734">埅</a></li>
                                   <li><a href="13735">埇</a></li>
                                   <li><a href="13736">埈</a></li>
                                   <li><a href="13737">埉</a></li>
                                   <li><a href="13738">埊</a></li>
                                   <li><a href="13739">埌</a></li>
                                   <li><a href="13740">埍</a></li>
                                   <li><a href="13741">埏</a></li>
                                   <li><a href="13742">埐</a></li>
                                   <li><a href="13743">埑</a></li>
                                   <li><a href="13744">埕</a></li>
                                   <li><a href="13745">埗</a></li>
                                   <li><a href="13901">夎</a></li>
                                   <li><a href="14028">娊</a></li>
                                   <li><a href="14029">娋</a></li>
                                   <li><a href="14030">娌</a></li>
                                   <li><a href="14031">娍</a></li>
                                   <li><a href="14032">娎</a></li>
                                   <li><a href="14033">娏</a></li>
                                   <li><a href="14034">娐</a></li>
                                   <li><a href="14035">娒</a></li>
                                   <li><a href="14036">娓</a></li>
                                   <li><a href="14037">娔</a></li>
                                   <li><a href="14038">娕</a></li>
                                   <li><a href="14039">娖</a></li>
                                   <li><a href="14040">娗</a></li>
                                   <li><a href="14041">娙</a></li>
                                   <li><a href="14042">娛</a></li>
                                   <li><a href="14043">娝</a></li>
                                   <li><a href="14044">娞</a></li>
                                   <li><a href="14045">娡</a></li>
                                   <li><a href="14046">娢</a></li>
                                   <li><a href="14047">娣</a></li>
                                   <li><a href="14048">娤</a></li>
                                   <li><a href="14049">娦</a></li>
                                   <li><a href="14050">娧</a></li>
                                   <li><a href="14051">娨</a></li>
                                   <li><a href="14052">娪</a></li>
                                   <li><a href="14053">娫</a></li>
                                   <li><a href="14055">娭</a></li>
                                   <li><a href="14056">娮</a></li>
                                   <li><a href="14057">娰</a></li>
                                   <li><a href="14058">娱</a></li>
                                   <li><a href="14106">婲</a></li>
                                   <li><a href="14276">孬</a></li>
                                   <li><a href="14300">宬</a></li>
                                   <li><a href="14301">宭</a></li>
                                   <li><a href="14302">宯</a></li>
                                   <li><a href="14303">宱</a></li>
                                   <li><a href="14304">宷</a></li>
                                   <li><a href="14305">宺</a></li>
                                   <li><a href="14306">宼</a></li>
                                   <li><a href="14333">尃</a></li>
                                   <li><a href="14363">屒</a></li>
                                   <li><a href="14364">屔</a></li>
                                   <li><a href="14365">屖</a></li>
                                   <li><a href="14445">峫</a></li>
                                   <li><a href="14446">峬</a></li>
                                   <li><a href="14447">峮</a></li>
                                   <li><a href="14448">峱</a></li>
                                   <li><a href="14449">峲</a></li>
                                   <li><a href="14450">峳</a></li>
                                   <li><a href="14451">峴</a></li>
                                   <li><a href="14452">峵</a></li>
                                   <li><a href="14453">峷</a></li>
                                   <li><a href="14454">峸</a></li>
                                   <li><a href="14455">峹</a></li>
                                   <li><a href="14456">峼</a></li>
                                   <li><a href="14457">峾</a></li>
                                   <li><a href="14458">峿</a></li>
                                   <li><a href="14459">崀</a></li>
                                   <li><a href="14460">崁</a></li>
                                   <li><a href="14605">巼</a></li>
                                   <li><a href="14628">帩</a></li>
                                   <li><a href="14629">帪</a></li>
                                   <li><a href="14630">帮</a></li>
                                   <li><a href="14683">庨</a></li>
                                   <li><a href="14684">庩</a></li>
                                   <li><a href="14685">庪</a></li>
                                   <li><a href="14686">庮</a></li>
                                   <li><a href="14687">庯</a></li>
                                   <li><a href="14719">廽</a></li>
                                   <li><a href="14735">弫</a></li>
                                   <li><a href="14736">弬</a></li>
                                   <li><a href="14738">弰</a></li>
                                   <li><a href="14739">弲</a></li>
                                   <li><a href="14763">彧</a></li>
                                   <li><a href="14776">徎</a></li>
                                   <li><a href="14824">恏</a></li>
                                   <li><a href="14830">恳</a></li>
                                   <li><a href="14831">恴</a></li>
                                   <li><a href="14832">悏</a></li>
                                   <li><a href="14833">悙</a></li>
                                   <li><a href="14834">悜</a></li>
                                   <li><a href="14836">悮</a></li>
                                   <li><a href="14938">挮</a></li>
                                   <li><a href="14939">挰</a></li>
                                   <li><a href="14940">挳</a></li>
                                   <li><a href="14941">挵</a></li>
                                   <li><a href="14942">挷</a></li>
                                   <li><a href="14943">挸</a></li>
                                   <li><a href="14944">捇</a></li>
                                   <li><a href="14945">捑</a></li>
                                   <li><a href="14946">捖</a></li>
                                   <li><a href="14947">捚</a></li>
                                   <li><a href="14948">捤</a></li>
                                   <li><a href="15056">敆</a></li>
                                   <li><a href="15057">敊</a></li>
                                   <li><a href="15058">敌</a></li>
                                   <li><a href="15096">晍</a></li>
                                   <li><a href="15177">栛</a></li>
                                   <li><a href="15178">栜</a></li>
                                   <li><a href="15179">栠</a></li>
                                   <li><a href="15180">栣</a></li>
                                   <li><a href="15181">栤</a></li>
                                   <li><a href="15182">栦</a></li>
                                   <li><a href="15183">栶</a></li>
                                   <li><a href="15184">样</a></li>
                                   <li><a href="15185">栺</a></li>
                                   <li><a href="15186">桇</a></li>
                                   <li><a href="15187">桏</a></li>
                                   <li><a href="15188">桖</a></li>
                                   <li><a href="15342">欭</a></li>
                                   <li><a href="15343">欰</a></li>
                                   <li><a href="15373">毢</a></li>
                                   <li><a href="15374">毤</a></li>
                                   <li><a href="15375">毥</a></li>
                                   <li><a href="15376">毩</a></li>
                                   <li><a href="15400">氥</a></li>
                                   <li><a href="15401">氦</a></li>
                                   <li><a href="15402">氧</a></li>
                                   <li><a href="15403">氨</a></li>
                                   <li><a href="15529">洖</a></li>
                                   <li><a href="15531">洚</a></li>
                                   <li><a href="15532">洜</a></li>
                                   <li><a href="15545">洯</a></li>
                                   <li><a href="15557">浖</a></li>
                                   <li><a href="15558">浗</a></li>
                                   <li><a href="15559">浘</a></li>
                                   <li><a href="15560">浛</a></li>
                                   <li><a href="15561">浝</a></li>
                                   <li><a href="15562">浞</a></li>
                                   <li><a href="15563">浟</a></li>
                                   <li><a href="15564">浠</a></li>
                                   <li><a href="15565">浡</a></li>
                                   <li><a href="15566">浢</a></li>
                                   <li><a href="15567">浥</a></li>
                                   <li><a href="15568">浧</a></li>
                                   <li><a href="15569">浨</a></li>
                                   <li><a href="15570">浫</a></li>
                                   <li><a href="15571">浭</a></li>
                                   <li><a href="15572">浯</a></li>
                                   <li><a href="15573">浰</a></li>
                                   <li><a href="15574">浱</a></li>
                                   <li><a href="15575">浲</a></li>
                                   <li><a href="15576">浳</a></li>
                                   <li><a href="15577">浵</a></li>
                                   <li><a href="15578">浶</a></li>
                                   <li><a href="15579">浺</a></li>
                                   <li><a href="15580">浻</a></li>
                                   <li><a href="15581">浼</a></li>
                                   <li><a href="15582">浽</a></li>
                                   <li><a href="15583">浾</a></li>
                                   <li><a href="15584">浿</a></li>
                                   <li><a href="15585">涀</a></li>
                                   <li><a href="15586">涁</a></li>
                                   <li><a href="15587">涂</a></li>
                                   <li><a href="15588">涃</a></li>
                                   <li><a href="15589">涄</a></li>
                                   <li><a href="15590">涆</a></li>
                                   <li><a href="15591">涇</a></li>
                                   <li><a href="15592">涊</a></li>
                                   <li><a href="15593">涋</a></li>
                                   <li><a href="15594">涍</a></li>
                                   <li><a href="15595">涏</a></li>
                                   <li><a href="15596">涑</a></li>
                                   <li><a href="15597">涒</a></li>
                                   <li><a href="15598">涔</a></li>
                                   <li><a href="15599">涖</a></li>
                                   <li><a href="15600">涗</a></li>
                                   <li><a href="15601">涘</a></li>
                                   <li><a href="15602">润</a></li>
                                   <li><a href="15628">淓</a></li>
                                   <li><a href="15650">淽</a></li>
                                   <li><a href="16045">烄</a></li>
                                   <li><a href="16046">烅</a></li>
                                   <li><a href="16047">烆</a></li>
                                   <li><a href="16048">烇</a></li>
                                   <li><a href="16049">烉</a></li>
                                   <li><a href="16050">烊</a></li>
                                   <li><a href="16051">烌</a></li>
                                   <li><a href="16052">烍</a></li>
                                   <li><a href="16053">烎</a></li>
                                   <li><a href="16054">烐</a></li>
                                   <li><a href="16055">烑</a></li>
                                   <li><a href="16056">烒</a></li>
                                   <li><a href="16057">烓</a></li>
                                   <li><a href="16058">烔</a></li>
                                   <li><a href="16059">烕</a></li>
                                   <li><a href="16060">烖</a></li>
                                   <li><a href="16061">烗</a></li>
                                   <li><a href="16062">烘</a></li>
                                   <li><a href="16063">烚</a></li>
                                   <li><a href="16064">烛</a></li>
                                   <li><a href="16065">烜</a></li>
                                   <li><a href="16066">烞</a></li>
                                   <li><a href="16067">烠</a></li>
                                   <li><a href="16068">烡</a></li>
                                   <li><a href="16069">烢</a></li>
                                   <li><a href="16070">烣</a></li>
                                   <li><a href="16071">烤</a></li>
                                   <li><a href="16072">烬</a></li>
                                   <li><a href="16073">热</a></li>
                                   <li><a href="16079">烵</a></li>
                                   <li><a href="16280">爹</a></li>
                                   <li><a href="16282">牂</a></li>
                                   <li><a href="16308">牶</a></li>
                                   <li><a href="16309">牷</a></li>
                                   <li><a href="16310">牸</a></li>
                                   <li><a href="16381">狳</a></li>
                                   <li><a href="16382">狴</a></li>
                                   <li><a href="16383">狵</a></li>
                                   <li><a href="16384">狶</a></li>
                                   <li><a href="16385">狺</a></li>
                                   <li><a href="16386">狻</a></li>
                                   <li><a href="16387">狾</a></li>
                                   <li><a href="16388">狿</a></li>
                                   <li><a href="16389">猀</a></li>
                                   <li><a href="16390">猁</a></li>
                                   <li><a href="16493">珔</a></li>
                                   <li><a href="16494">珕</a></li>
                                   <li><a href="16495">珗</a></li>
                                   <li><a href="16496">珘</a></li>
                                   <li><a href="16497">珚</a></li>
                                   <li><a href="16498">珛</a></li>
                                   <li><a href="16499">珜</a></li>
                                   <li><a href="16500">珟</a></li>
                                   <li><a href="16501">珢</a></li>
                                   <li><a href="16502">珤</a></li>
                                   <li><a href="16503">珨</a></li>
                                   <li><a href="16504">珫</a></li>
                                   <li><a href="16505">珬</a></li>
                                   <li><a href="16506">珯</a></li>
                                   <li><a href="16577">瓳</a></li>
                                   <li><a href="16578">瓵</a></li>
                                   <li><a href="16590">畕</a></li>
                                   <li><a href="16592">畘</a></li>
                                   <li><a href="16599">疶</a></li>
                                   <li><a href="16622">皊</a></li>
                                   <li><a href="16628">皱</a></li>
                                   <li><a href="16647">眏</a></li>
                                   <li><a href="16648">眐</a></li>
                                   <li><a href="16649">眓</a></li>
                                   <li><a href="16650">眖</a></li>
                                   <li><a href="16651">眣</a></li>
                                   <li><a href="16652">眧</a></li>
                                   <li><a href="16653">眪</a></li>
                                   <li><a href="16705">矝</a></li>
                                   <li><a href="16720">砞</a></li>
                                   <li><a href="16721">砤</a></li>
                                   <li><a href="16722">砨</a></li>
                                   <li><a href="16723">砪</a></li>
                                   <li><a href="16724">砱</a></li>
                                   <li><a href="16725">砳</a></li>
                                   <li><a href="16726">砶</a></li>
                                   <li><a href="16727">砸</a></li>
                                   <li><a href="16786">祒</a></li>
                                   <li><a href="16811">秙</a></li>
                                   <li><a href="16812">秛</a></li>
                                   <li><a href="16813">秜</a></li>
                                   <li><a href="16814">秨</a></li>
                                   <li><a href="16815">秮</a></li>
                                   <li><a href="16816">积</a></li>
                                   <li><a href="16849">窇</a></li>
                                   <li><a href="16850">窉</a></li>
                                   <li><a href="16873">笅</a></li>
                                   <li><a href="16874">笉</a></li>
                                   <li><a href="16875">笌</a></li>
                                   <li><a href="16876">笍</a></li>
                                   <li><a href="16877">笎</a></li>
                                   <li><a href="16878">笓</a></li>
                                   <li><a href="16951">粄</a></li>
                                   <li><a href="16952">粅</a></li>
                                   <li><a href="16953">粈</a></li>
                                   <li><a href="16954">粊</a></li>
                                   <li><a href="16955">粌</a></li>
                                   <li><a href="16956">粎</a></li>
                                   <li><a href="16980">紌</a></li>
                                   <li><a href="16981">紎</a></li>
                                   <li><a href="16982">紤</a></li>
                                   <li><a href="17055">缹</a></li>
                                   <li><a href="17061">罞</a></li>
                                   <li><a href="17062">罢</a></li>
                                   <li><a href="17066">羒</a></li>
                                   <li><a href="17067">羘</a></li>
                                   <li><a href="17068">羙</a></li>
                                   <li><a href="17076">翂</a></li>
                                   <li><a href="17105">耸</a></li>
                                   <li><a href="17141">胿</a></li>
                                   <li><a href="17142">脄</a></li>
                                   <li><a href="17185">舥</a></li>
                                   <li><a href="17186">舦</a></li>
                                   <li><a href="17187">舧</a></li>
                                   <li><a href="17188">舭</a></li>
                                   <li><a href="17229">荱</a></li>
                                   <li><a href="17230">荲</a></li>
                                   <li><a href="17231">荴</a></li>
                                   <li><a href="17232">荶</a></li>
                                   <li><a href="17233">荹</a></li>
                                   <li><a href="17234">荺</a></li>
                                   <li><a href="17235">莁</a></li>
                                   <li><a href="17236">莈</a></li>
                                   <li><a href="17237">莋</a></li>
                                   <li><a href="17238">莏</a></li>
                                   <li><a href="17239">莐</a></li>
                                   <li><a href="17240">莗</a></li>
                                   <li><a href="17241">莡</a></li>
                                   <li><a href="17242">莥</a></li>
                                   <li><a href="17243">莮</a></li>
                                   <li><a href="17244">莯</a></li>
                                   <li><a href="17245">莻</a></li>
                                   <li><a href="17408">虑</a></li>
                                   <li><a href="17416">蚅</a></li>
                                   <li><a href="17417">蚆</a></li>
                                   <li><a href="17418">蚎</a></li>
                                   <li><a href="17419">蚐</a></li>
                                   <li><a href="17420">蚒</a></li>
                                   <li><a href="17421">蚗</a></li>
                                   <li><a href="17422">蚙</a></li>
                                   <li><a href="17423">蚛</a></li>
                                   <li><a href="17424">蚟</a></li>
                                   <li><a href="17425">蚢</a></li>
                                   <li><a href="17426">蚥</a></li>
                                   <li><a href="17528">衏</a></li>
                                   <li><a href="17539">袃</a></li>
                                   <li><a href="17541">袉</a></li>
                                   <li><a href="17542">袊</a></li>
                                   <li><a href="17544">袏</a></li>
                                   <li><a href="17545">袐</a></li>
                                   <li><a href="17546">袓</a></li>
                                   <li><a href="17547">袔</a></li>
                                   <li><a href="17548">袕</a></li>
                                   <li><a href="17549">袝</a></li>
                                   <li><a href="17550">袥</a></li>
                                   <li><a href="17551">袦</a></li>
                                   <li><a href="17552">袧</a></li>
                                   <li><a href="17553">袩</a></li>
                                   <li><a href="17602">覎</a></li>
                                   <li><a href="17631">訉</a></li>
                                   <li><a href="17632">訋</a></li>
                                   <li><a href="17633">訍</a></li>
                                   <li><a href="17634">訙</a></li>
                                   <li><a href="17780">赸</a></li>
                                   <li><a href="17811">趶</a></li>
                                   <li><a href="17874">軐</a></li>
                                   <li><a href="17917">逇</a></li>
                                   <li><a href="17950">郔</a></li>
                                   <li><a href="17951">郖</a></li>
                                   <li><a href="17952">郣</a></li>
                                   <li><a href="17976">酑</a></li>
                                   <li><a href="17995">釠</a></li>
                                   <li><a href="17996">釢</a></li>
                                   <li><a href="18165">閅</a></li>
                                   <li><a href="18191">陙</a></li>
                                   <li><a href="18193">陠</a></li>
                                   <li><a href="18629">宻</a></li>
                                   <li><a href="18632">巸</a></li>
                                   <li><a href="18634">﨏</a></li>
                                   <li><a href="18703">㑣</a></li>
                                   <li><a href="18704">㑦</a></li>
                                   <li><a href="18705">㑧</a></li>
                                   <li><a href="18751">㒭</a></li>
                                   <li><a href="18773">㓐</a></li>
                                   <li><a href="18774">㓑</a></li>
                                   <li><a href="18788">㓬</a></li>
                                   <li><a href="18790">㓮</a></li>
                                   <li><a href="18791">㓯</a></li>
                                   <li><a href="18826">㔝</a></li>
                                   <li><a href="18827">㔞</a></li>
                                   <li><a href="18860">㕋</a></li>
                                   <li><a href="18861">㕌</a></li>
                                   <li><a href="18862">㕍</a></li>
                                   <li><a href="18868">㕖</a></li>
                                   <li><a href="18915">㖏</a></li>
                                   <li><a href="18916">㖐</a></li>
                                   <li><a href="18917">㖑</a></li>
                                   <li><a href="18918">㖒</a></li>
                                   <li><a href="18919">㖓</a></li>
                                   <li><a href="18920">㖔</a></li>
                                   <li><a href="18921">㖕</a></li>
                                   <li><a href="18922">㖖</a></li>
                                   <li><a href="18923">㖗</a></li>
                                   <li><a href="18924">㖘</a></li>
                                   <li><a href="18925">㖙</a></li>
                                   <li><a href="18926">㖚</a></li>
                                   <li><a href="18927">㖛</a></li>
                                   <li><a href="18928">㖜</a></li>
                                   <li><a href="18929">㖝</a></li>
                                   <li><a href="19030">㘣</a></li>
                                   <li><a href="19044">㘶</a></li>
                                   <li><a href="19050">㘿</a></li>
                                   <li><a href="19051">㙀</a></li>
                                   <li><a href="19052">㙁</a></li>
                                   <li><a href="19053">㙂</a></li>
                                   <li><a href="19054">㙃</a></li>
                                   <li><a href="19055">㙅</a></li>
                                   <li><a href="19157">㛍</a></li>
                                   <li><a href="19158">㛎</a></li>
                                   <li><a href="19159">㛏</a></li>
                                   <li><a href="19160">㛐</a></li>
                                   <li><a href="19161">㛑</a></li>
                                   <li><a href="19162">㛒</a></li>
                                   <li><a href="19163">㛓</a></li>
                                   <li><a href="19164">㛔</a></li>
                                   <li><a href="19165">㛕</a></li>
                                   <li><a href="19166">㛖</a></li>
                                   <li><a href="19167">㛗</a></li>
                                   <li><a href="19168">㛘</a></li>
                                   <li><a href="19169">㛙</a></li>
                                   <li><a href="19170">㛚</a></li>
                                   <li><a href="19171">㛛</a></li>
                                   <li><a href="19172">㛜</a></li>
                                   <li><a href="19173">㛝</a></li>
                                   <li><a href="19174">㛞</a></li>
                                   <li><a href="19255">㝂</a></li>
                                   <li><a href="19256">㝃</a></li>
                                   <li><a href="19274">㝗</a></li>
                                   <li><a href="19275">㝘</a></li>
                                   <li><a href="19276">㝙</a></li>
                                   <li><a href="19277">㝚</a></li>
                                   <li><a href="19299">㝶</a></li>
                                   <li><a href="19307">㞂</a></li>
                                   <li><a href="19326">㞗</a></li>
                                   <li><a href="19365">㟇</a></li>
                                   <li><a href="19366">㟈</a></li>
                                   <li><a href="19367">㟉</a></li>
                                   <li><a href="19368">㟊</a></li>
                                   <li><a href="19369">㟋</a></li>
                                   <li><a href="19370">㟌</a></li>
                                   <li><a href="19371">㟍</a></li>
                                   <li><a href="19372">㟎</a></li>
                                   <li><a href="19373">㟏</a></li>
                                   <li><a href="19375">㟑</a></li>
                                   <li><a href="19376">㟒</a></li>
                                   <li><a href="19377">㟓</a></li>
                                   <li><a href="19378">㟔</a></li>
                                   <li><a href="19471">㡇</a></li>
                                   <li><a href="19472">㡈</a></li>
                                   <li><a href="19525">㢃</a></li>
                                   <li><a href="19526">㢄</a></li>
                                   <li><a href="19527">㢅</a></li>
                                   <li><a href="19528">㢆</a></li>
                                   <li><a href="19565">㢸</a></li>
                                   <li><a href="19599">㣢</a></li>
                                   <li><a href="19600">㣣</a></li>
                                   <li><a href="19639">㤟</a></li>
                                   <li><a href="19640">㤠</a></li>
                                   <li><a href="19647">㤪</a></li>
                                   <li><a href="19648">㤫</a></li>
                                   <li><a href="19650">㤱</a></li>
                                   <li><a href="19652">㤳</a></li>
                                   <li><a href="19653">㤴</a></li>
                                   <li><a href="19654">㤶</a></li>
                                   <li><a href="19655">㤷</a></li>
                                   <li><a href="19656">㤸</a></li>
                                   <li><a href="19657">㤹</a></li>
                                   <li><a href="19748">㦴</a></li>
                                   <li><a href="19749">㦵</a></li>
                                   <li><a href="19775">㧘</a></li>
                                   <li><a href="19782">㧧</a></li>
                                   <li><a href="19787">㧭</a></li>
                                   <li><a href="19790">㧲</a></li>
                                   <li><a href="19792">㧴</a></li>
                                   <li><a href="19793">㧶</a></li>
                                   <li><a href="19794">㧷</a></li>
                                   <li><a href="19795">㧸</a></li>
                                   <li><a href="19806">㨅</a></li>
                                   <li><a href="19888">㩼</a></li>
                                   <li><a href="19898">㪇</a></li>
                                   <li><a href="19899">㪈</a></li>
                                   <li><a href="19900">㪉</a></li>
                                   <li><a href="19932">㪰</a></li>
                                   <li><a href="19938">㪶</a></li>
                                   <li><a href="19944">㪾</a></li>
                                   <li><a href="19948">㫅</a></li>
                                   <li><a href="19949">㫇</a></li>
                                   <li><a href="19970">㫥</a></li>
                                   <li><a href="19971">㫧</a></li>
                                   <li><a href="19972">㫨</a></li>
                                   <li><a href="19973">㫩</a></li>
                                   <li><a href="19974">㫫</a></li>
                                   <li><a href="19975">㫬</a></li>
                                   <li><a href="20017">㬴</a></li>
                                   <li><a href="20037">㭘</a></li>
                                   <li><a href="20038">㭙</a></li>
                                   <li><a href="20039">㭚</a></li>
                                   <li><a href="20040">㭛</a></li>
                                   <li><a href="20041">㭜</a></li>
                                   <li><a href="20042">㭝</a></li>
                                   <li><a href="20043">㭞</a></li>
                                   <li><a href="20044">㭟</a></li>
                                   <li><a href="20045">㭠</a></li>
                                   <li><a href="20046">㭡</a></li>
                                   <li><a href="20047">㭢</a></li>
                                   <li><a href="20180">㰣</a></li>
                                   <li><a href="20184">㰩</a></li>
                                   <li><a href="20185">㰪</a></li>
                                   <li><a href="20186">㰫</a></li>
                                   <li><a href="20187">㰬</a></li>
                                   <li><a href="20188">㰭</a></li>
                                   <li><a href="20198">㰷</a></li>
                                   <li><a href="20229">㱡</a></li>
                                   <li><a href="20269">㲓</a></li>
                                   <li><a href="20296">㲳</a></li>
                                   <li><a href="20332">㳥</a></li>
                                   <li><a href="20333">㳦</a></li>
                                   <li><a href="20334">㳧</a></li>
                                   <li><a href="20335">㳩</a></li>
                                   <li><a href="20336">㳪</a></li>
                                   <li><a href="20337">㳬</a></li>
                                   <li><a href="20338">㳭</a></li>
                                   <li><a href="20339">㳮</a></li>
                                   <li><a href="20340">㳯</a></li>
                                   <li><a href="20345">㳸</a></li>
                                   <li><a href="20488">㶳</a></li>
                                   <li><a href="20489">㶴</a></li>
                                   <li><a href="20490">㶵</a></li>
                                   <li><a href="20557">㸗</a></li>
                                   <li><a href="20565">㸟</a></li>
                                   <li><a href="20566">㸠</a></li>
                                   <li><a href="20567">㸡</a></li>
                                   <li><a href="20573">㸧</a></li>
                                   <li><a href="20586">㸵</a></li>
                                   <li><a href="20587">㸶</a></li>
                                   <li><a href="20588">㸷</a></li>
                                   <li><a href="20589">㸸</a></li>
                                   <li><a href="20642">㹱</a></li>
                                   <li><a href="20643">㹲</a></li>
                                   <li><a href="20644">㹳</a></li>
                                   <li><a href="20645">㹴</a></li>
                                   <li><a href="20646">㹵</a></li>
                                   <li><a href="20647">㹶</a></li>
                                   <li><a href="20649">㹸</a></li>
                                   <li><a href="20702">㺸</a></li>
                                   <li><a href="20706">㻀</a></li>
                                   <li><a href="20707">㻁</a></li>
                                   <li><a href="20708">㻂</a></li>
                                   <li><a href="20710">㻄</a></li>
                                   <li><a href="20711">㻆</a></li>
                                   <li><a href="20750">㼉</a></li>
                                   <li><a href="20751">㼊</a></li>
                                   <li><a href="20766">㼝</a></li>
                                   <li><a href="20767">㼞</a></li>
                                   <li><a href="20768">㼠</a></li>
                                   <li><a href="20810">㽍</a></li>
                                   <li><a href="20818">㽛</a></li>
                                   <li><a href="20819">㽜</a></li>
                                   <li><a href="20845">㽽</a></li>
                                   <li><a href="20846">㽾</a></li>
                                   <li><a href="20848">㾀</a></li>
                                   <li><a href="20849">㾁</a></li>
                                   <li><a href="20850">㾂</a></li>
                                   <li><a href="20851">㾃</a></li>
                                   <li><a href="20852">㾄</a></li>
                                   <li><a href="20853">㾅</a></li>
                                   <li><a href="20854">㾆</a></li>
                                   <li><a href="20855">㾇</a></li>
                                   <li><a href="20856">㾈</a></li>
                                   <li><a href="20857">㾉</a></li>
                                   <li><a href="20862">㾎</a></li>
                                   <li><a href="20932">㿭</a></li>
                                   <li><a href="20933">㿮</a></li>
                                   <li><a href="20948">㿾</a></li>
                                   <li><a href="20949">㿿</a></li>
                                   <li><a href="20950">䀀</a></li>
                                   <li><a href="20974">䀟</a></li>
                                   <li><a href="20975">䀡</a></li>
                                   <li><a href="20976">䀣</a></li>
                                   <li><a href="20977">䀤</a></li>
                                   <li><a href="21064">䂏</a></li>
                                   <li><a href="21065">䂐</a></li>
                                   <li><a href="21078">䂟</a></li>
                                   <li><a href="21079">䂠</a></li>
                                   <li><a href="21080">䂡</a></li>
                                   <li><a href="21081">䂢</a></li>
                                   <li><a href="21083">䂤</a></li>
                                   <li><a href="21084">䂥</a></li>
                                   <li><a href="21085">䂦</a></li>
                                   <li><a href="21086">䂧</a></li>
                                   <li><a href="21087">䂨</a></li>
                                   <li><a href="21154">䄁</a></li>
                                   <li><a href="21190">䄶</a></li>
                                   <li><a href="21191">䄷</a></li>
                                   <li><a href="21192">䄸</a></li>
                                   <li><a href="21270">䆗</a></li>
                                   <li><a href="21271">䆙</a></li>
                                   <li><a href="21312">䇇</a></li>
                                   <li><a href="21313">䇈</a></li>
                                   <li><a href="21314">䇉</a></li>
                                   <li><a href="21315">䇊</a></li>
                                   <li><a href="21327">䇗</a></li>
                                   <li><a href="21328">䇘</a></li>
                                   <li><a href="21329">䇙</a></li>
                                   <li><a href="21330">䇚</a></li>
                                   <li><a href="21331">䇛</a></li>
                                   <li><a href="21332">䇜</a></li>
                                   <li><a href="21333">䇝</a></li>
                                   <li><a href="21472">䉻</a></li>
                                   <li><a href="21473">䉼</a></li>
                                   <li><a href="21532">䊺</a></li>
                                   <li><a href="21533">䊻</a></li>
                                   <li><a href="21534">䊼</a></li>
                                   <li><a href="21535">䊽</a></li>
                                   <li><a href="21536">䊾</a></li>
                                   <li><a href="21537">䊿</a></li>
                                   <li><a href="21538">䋀</a></li>
                                   <li><a href="21539">䋁</a></li>
                                   <li><a href="21540">䋂</a></li>
                                   <li><a href="21541">䋃</a></li>
                                   <li><a href="21542">䋄</a></li>
                                   <li><a href="21543">䋇</a></li>
                                   <li><a href="21646">䍇</a></li>
                                   <li><a href="21658">䍕</a></li>
                                   <li><a href="21659">䍖</a></li>
                                   <li><a href="21660">䍗</a></li>
                                   <li><a href="21673">䍧</a></li>
                                   <li><a href="21674">䍨</a></li>
                                   <li><a href="21675">䍩</a></li>
                                   <li><a href="21693">䍾</a></li>
                                   <li><a href="21694">䍿</a></li>
                                   <li><a href="21724">䎞</a></li>
                                   <li><a href="21738">䎳</a></li>
                                   <li><a href="21739">䎴</a></li>
                                   <li><a href="21766">䏑</a></li>
                                   <li><a href="21781">䏦</a></li>
                                   <li><a href="21782">䏧</a></li>
                                   <li><a href="21783">䏨</a></li>
                                   <li><a href="21784">䏩</a></li>
                                   <li><a href="21785">䏪</a></li>
                                   <li><a href="21786">䏫</a></li>
                                   <li><a href="21787">䏬</a></li>
                                   <li><a href="21788">䏭</a></li>
                                   <li><a href="21868">䑔</a></li>
                                   <li><a href="21872">䑚</a></li>
                                   <li><a href="21880">䑤</a></li>
                                   <li><a href="21881">䑥</a></li>
                                   <li><a href="21906">䒊</a></li>
                                   <li><a href="21943">䓂</a></li>
                                   <li><a href="21944">䓃</a></li>
                                   <li><a href="21945">䓄</a></li>
                                   <li><a href="21946">䓅</a></li>
                                   <li><a href="21947">䓆</a></li>
                                   <li><a href="21948">䓇</a></li>
                                   <li><a href="21949">䓈</a></li>
                                   <li><a href="21950">䓉</a></li>
                                   <li><a href="21951">䓊</a></li>
                                   <li><a href="21952">䓋</a></li>
                                   <li><a href="21953">䓍</a></li>
                                   <li><a href="21954">䓎</a></li>
                                   <li><a href="21955">䓏</a></li>
                                   <li><a href="21956">䓑</a></li>
                                   <li><a href="21957">䓒</a></li>
                                   <li><a href="22093">䖊</a></li>
                                   <li><a href="22094">䖋</a></li>
                                   <li><a href="22095">䖌</a></li>
                                   <li><a href="22110">䖡</a></li>
                                   <li><a href="22111">䖢</a></li>
                                   <li><a href="22112">䖣</a></li>
                                   <li><a href="22195">䘕</a></li>
                                   <li><a href="22202">䘡</a></li>
                                   <li><a href="22203">䘢</a></li>
                                   <li><a href="22205">䘤</a></li>
                                   <li><a href="22206">䘥</a></li>
                                   <li><a href="22207">䘦</a></li>
                                   <li><a href="22214">䘮</a></li>
                                   <li><a href="22266">䙳</a></li>
                                   <li><a href="22268">䙷</a></li>
                                   <li><a href="22269">䙸</a></li>
                                   <li><a href="22318">䚱</a></li>
                                   <li><a href="22319">䚲</a></li>
                                   <li><a href="22415">䜫</a></li>
                                   <li><a href="22436">䝅</a></li>
                                   <li><a href="22493">䞑</a></li>
                                   <li><a href="22497">䞖</a></li>
                                   <li><a href="22498">䞗</a></li>
                                   <li><a href="22499">䞘</a></li>
                                   <li><a href="22556">䟕</a></li>
                                   <li><a href="22557">䟖</a></li>
                                   <li><a href="22709">䢒</a></li>
                                   <li><a href="22710">䢓</a></li>
                                   <li><a href="22711">䢕</a></li>
                                   <li><a href="22712">䢖</a></li>
                                   <li><a href="22713">䢗</a></li>
                                   <li><a href="22740">䢻</a></li>
                                   <li><a href="22748">䣃</a></li>
                                   <li><a href="22749">䣄</a></li>
                                   <li><a href="22750">䣅</a></li>
                                   <li><a href="22751">䣆</a></li>
                                   <li><a href="22752">䣇</a></li>
                                   <li><a href="22778">䣧</a></li>
                                   <li><a href="22779">䣨</a></li>
                                   <li><a href="22825">䤛</a></li>
                                   <li><a href="22904">䦇</a></li>
                                   <li><a href="22947">䦾</a></li>
                                   <li><a href="22955">䧉</a></li>
                                   <li><a href="22956">䧊</a></li>
                                   <li><a href="22957">䧋</a></li>
                                   <li><a href="22958">䧌</a></li>
                                   <li><a href="22959">䧍</a></li>
                                   <li><a href="22960">䧏</a></li>
                                   <li><a href="22989">䧱</a></li>
                                   <li><a href="23893">倐</a></li>
                                   <li><a href="23901">哠</a></li>
                                   <li><a href="23902">唌</a></li>
                                   <li><a href="23924">圂</a></li>
                                   <li><a href="23956">宲</a></li>
                                   <li><a href="23970">帨</a></li>
                                   <li><a href="23977">庬</a></li>
                                   <li><a href="23995">晇</a></li>
                                   <li><a href="23998">栥</a></li>
                                   <li><a href="24077">眫</a></li>
                                   <li><a href="24095">类</a></li>
                                   <li><a href="24111">莑</a></li>
                                   <li><a href="24112">莤</a></li>
                                   <li><a href="24186">㑤</a></li>
                                   <li><a href="24201">㙄</a></li>
                                   <li><a href="24207">㝸</a></li>
                                   <li><a href="24216">㤺</a></li>
                                   <li><a href="24219">㦶</a></li>
                                   <li><a href="24242">㳤</a></li>
                                   <li><a href="24243">㴀</a></li>
                                   <li><a href="24244">㴄</a></li>
                                   <li><a href="24255">㸔</a></li>
                                   <li><a href="24261">㿟</a></li>
                                   <li><a href="24269">䄂</a></li>
                                   <li><a href="24270">䄃</a></li>
                                   <li><a href="24300">䓌</a></li>
                                   <li><a href="24301">䓐</a></li>
                                   <li><a href="24302">䓓</a></li>
                                   <li><a href="24319">䖍</a></li>
                                   <li><a href="24339">䢔</a></li>
                                   <li><a href="24408">涠</a></li>
                                   <li><a href="24589">值</a></li>
                                   <li><a href="24590">倽</a></li>
                                   <li><a href="24702">冧</a></li>
                                   <li><a href="24710">凎</a></li>
                                   <li><a href="24726">剧</a></li>
                                   <li><a href="24796">哒</a></li>
                                   <li><a href="24807">唛</a></li>
                                   <li><a href="24808">唞</a></li>
                                   <li><a href="24809">唠</a></li>
                                   <li><a href="24810">唡</a></li>
                                   <li><a href="24812">唣</a></li>
                                   <li><a href="24813">唤</a></li>
                                   <li><a href="24814">唥</a></li>
                                   <li><a href="24815">唦</a></li>
                                   <li><a href="24986">垯</a></li>
                                   <li><a href="24994">埘</a></li>
                                   <li><a href="24995">埚</a></li>
                                   <li><a href="24996">埛</a></li>
                                   <li><a href="25022">壶</a></li>
                                   <li><a href="25025">夞</a></li>
                                   <li><a href="25055">娲</a></li>
                                   <li><a href="25056">娳</a></li>
                                   <li><a href="25089">孭</a></li>
                                   <li><a href="25091">宾</a></li>
                                   <li><a href="25100">屗</a></li>
                                   <li><a href="25101">屘</a></li>
                                   <li><a href="25126">崂</a></li>
                                   <li><a href="25127">崃</a></li>
                                   <li><a href="25129">崅</a></li>
                                   <li><a href="25210">帱</a></li>
                                   <li><a href="25222">弳</a></li>
                                   <li><a href="25226">彨</a></li>
                                   <li><a href="25261">戙</a></li>
                                   <li><a href="25280">挚</a></li>
                                   <li><a href="25281">挛</a></li>
                                   <li><a href="25283">挝</a></li>
                                   <li><a href="25284">挞</a></li>
                                   <li><a href="25290">捝</a></li>
                                   <li><a href="25291">捞</a></li>
                                   <li><a href="25292">捠</a></li>
                                   <li><a href="25320">换</a></li>
                                   <li><a href="25349">敋</a></li>
                                   <li><a href="25361">晔</a></li>
                                   <li><a href="25385">桞</a></li>
                                   <li><a href="25388">桤</a></li>
                                   <li><a href="25389">桥</a></li>
                                   <li><a href="25390">桦</a></li>
                                   <li><a href="25391">桨</a></li>
                                   <li><a href="25392">桪</a></li>
                                   <li><a href="25449">毙</a></li>
                                   <li><a href="25452">毪</a></li>
                                   <li><a href="25519">浆</a></li>
                                   <li><a href="25531">涐</a></li>
                                   <li><a href="25532">涚</a></li>
                                   <li><a href="25533">涝</a></li>
                                   <li><a href="25534">涞</a></li>
                                   <li><a href="25535">涡</a></li>
                                   <li><a href="25536">涣</a></li>
                                   <li><a href="25537">涤</a></li>
                                   <li><a href="25538">涥</a></li>
                                   <li><a href="25544">陧</a></li>
                                   <li><a href="25547">难</a></li>
                                   <li><a href="25550">涩</a></li>
                                   <li><a href="25622">烨</a></li>
                                   <li><a href="25624">烩</a></li>
                                   <li><a href="25626">烪</a></li>
                                   <li><a href="25628">烮</a></li>
                                   <li><a href="25664">㶶</a></li>
                                   <li><a href="25681">牺</a></li>
                                   <li><a href="25790">珰</a></li>
                                   <li><a href="25812">痈</a></li>
                                   <li><a href="25813">痉</a></li>
                                   <li><a href="25832">盏</a></li>
                                   <li><a href="25833">盐</a></li>
                                   <li><a href="25853">砼</a></li>
                                   <li><a href="25854">砽</a></li>
                                   <li><a href="25856">础</a></li>
                                   <li><a href="25857">硁</a></li>
                                   <li><a href="25935">窍</a></li>
                                   <li><a href="25943">竞</a></li>
                                   <li><a href="25971">粑</a></li>
                                   <li><a href="26192">龨</a></li>
                                   <li><a href="26285">聁</a></li>
                                   <li><a href="26286">聂</a></li>
                                   <li><a href="26307">脁</a></li>
                                   <li><a href="26308">脌</a></li>
                                   <li><a href="26309">脎</a></li>
                                   <li><a href="26310">脏</a></li>
                                   <li><a href="26311">脐</a></li>
                                   <li><a href="26312">脑</a></li>
                                   <li><a href="26313">脒</a></li>
                                   <li><a href="26314">脓</a></li>
                                   <li><a href="26327">舯</a></li>
                                   <li><a href="26328">舱</a></li>
                                   <li><a href="26336">艳</a></li>
                                   <li><a href="26357">荙</a></li>
                                   <li><a href="26369">荫</a></li>
                                   <li><a href="26376">莣</a></li>
                                   <li><a href="26377">莰</a></li>
                                   <li><a href="26378">莳</a></li>
                                   <li><a href="26379">莴</a></li>
                                   <li><a href="26382">获</a></li>
                                   <li><a href="26385">莸</a></li>
                                   <li><a href="26386">莹</a></li>
                                   <li><a href="26399">㑫</a></li>
                                   <li><a href="26400">㑬</a></li>
                                   <li><a href="26401">㑭</a></li>
                                   <li><a href="26484">㓒</a></li>
                                   <li><a href="26487">㓰</a></li>
                                   <li><a href="26531">㖞</a></li>
                                   <li><a href="26562">袯</a></li>
                                   <li><a href="26583">㖴</a></li>
                                   <li><a href="26645">㙆</a></li>
                                   <li><a href="26836">趸</a></li>
                                   <li><a href="26852">㛟</a></li>
                                   <li><a href="26866">軕</a></li>
                                   <li><a href="26877">㛡</a></li>
                                   <li><a href="26878">㛢</a></li>
                                   <li><a href="26879">㛤</a></li>
                                   <li><a href="26907">㟕</a></li>
                                   <li><a href="26908">㟖</a></li>
                                   <li><a href="26922">㠬</a></li>
                                   <li><a href="26923">㠫</a></li>
                                   <li><a href="26930">㢇</a></li>
                                   <li><a href="26941">迼</a></li>
                                   <li><a href="26950">㢹</a></li>
                                   <li><a href="26953">逦</a></li>
                                   <li><a href="26972">郦</a></li>
                                   <li><a href="27105">㤼</a></li>
                                   <li><a href="27106">㤽</a></li>
                                   <li><a href="27155">㧱</a></li>
                                   <li><a href="27156">㧵</a></li>
                                   <li><a href="27187">㫉</a></li>
                                   <li><a href="27191">㫭</a></li>
                                   <li><a href="27192">㫮</a></li>
                                   <li><a href="27215">㭥</a></li>
                                   <li><a href="27225">㭦</a></li>
                                   <li><a href="27226">㭧</a></li>
                                   <li><a href="27293">㳠</a></li>
                                   <li><a href="27294">㳡</a></li>
                                   <li><a href="27297">㳨</a></li>
                                   <li><a href="27298">㳫</a></li>
                                   <li><a href="27299">㳰</a></li>
                                   <li><a href="27300">㳱</a></li>
                                   <li><a href="27301">㳲</a></li>
                                   <li><a href="27302">㳳</a></li>
                                   <li><a href="27336">㶷</a></li>
                                   <li><a href="27337">㶸</a></li>
                                   <li><a href="27377">㻅</a></li>
                                   <li><a href="27378">㻇</a></li>
                                   <li><a href="27379">㻈</a></li>
                                   <li><a href="27446">䧎</a></li>
                                   <li><a href="27487">䢘</a></li>
                                   <li><a href="27534">䘧</a></li>
                                   <li><a href="27559">䓖</a></li>
                                   <li><a href="27600">䋅</a></li>
                                   <li><a href="27617">䄹</a></li>
                                   <li><a href="27640">䀦</a></li>
                                   <li><a href="27660">㼟</a></li>
                                   <li><a href="27697">𡌛</a></li>
                                   <li><a href="27752">𠝁</a></li>
                                   <li><a href="27756">𦨞</a></li>
                                   <li><a href="27781">𠝏</a></li>
                                   <li><a href="27786">𠵅</a></li>
                                   <li><a href="27802">𡋽</a></li>
                                   <li><a href="27810">𡝂</a></li>
                                   <li><a href="27825">𡶷</a></li>
                                   <li><a href="27826">𡷠</a></li>
                                   <li><a href="27838">𢭏</a></li>
                                   <li><a href="27839">𢭐</a></li>
                                   <li><a href="27840">𢭆</a></li>
                                   <li><a href="27857">𣑊</a></li>
                                   <li><a href="27858">𣑑</a></li>
                                   <li><a href="27859">𣑋</a></li>
                                   <li><a href="27860">𣑥</a></li>
                                   <li><a href="27878">𣵀</a></li>
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