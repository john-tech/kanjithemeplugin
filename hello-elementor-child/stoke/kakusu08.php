<?php
/*
 * Template Name: kakusu08
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
               <h1 class="ttl_main">８画の漢字一覧（漢検級順）</h1>

               <p>総画数８画の漢字の一覧です。<br>
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
                                   <option value="#" selected>８画</option>
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
                              <li><a href="bkakusu08">部首別順</a></li>
                              <li><a href="ckakusu08">読み順</a></li>
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
                                   <li><a class="color1" href="kanji/003">雨</a></li>
                                   <li><a class="color1" href="kanji/009">学</a></li>
                                   <li><a class="color1" href="kanji/013">空</a></li>
                                   <li><a class="color1" href="kanji/022">金</a></li>
                                   <li><a class="color1" href="kanji/044">青</a></li>
                                   <li><a class="color1" href="kanji/079">林</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts09">
                              <h3 class="ttl_while"><a href="kyu09">漢字検定９級（小学校２年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/091">画</a></li>
                                   <li><a class="color1" href="kanji/102">岩</a></li>
                                   <li><a class="color1" href="kanji/116">京</a></li>
                                   <li><a class="color1" href="kanji/136">国</a></li>
                                   <li><a class="color1" href="kanji/145">姉</a></li>
                                   <li><a class="color1" href="kanji/187">知</a></li>
                                   <li><a class="color1" href="kanji/190">長</a></li>
                                   <li><a class="color1" href="kanji/193">直</a></li>
                                   <li><a class="color1" href="kanji/196">店</a></li>
                                   <li><a class="color1" href="kanji/202">東</a></li>
                                   <li><a class="color1" href="kanji/216">歩</a></li>
                                   <li><a class="color1" href="kanji/225">妹</a></li>
                                   <li><a class="color1" href="kanji/228">明</a></li>
                                   <li><a class="color1" href="kanji/230">門</a></li>
                                   <li><a class="color1" href="kanji/232">夜</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts08">
                              <h3 class="ttl_while"><a href="kyu08">漢字検定８級（小学校３年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/244">委</a></li>
                                   <li><a class="color1" href="kanji/246">育</a></li>
                                   <li><a class="color1" href="kanji/251">泳</a></li>
                                   <li><a class="color1" href="kanji/265">岸</a></li>
                                   <li><a class="color1" href="kanji/279">苦</a></li>
                                   <li><a class="color1" href="kanji/281">具</a></li>
                                   <li><a class="color1" href="kanji/293">幸</a></li>
                                   <li><a class="color1" href="kanji/301">始</a></li>
                                   <li><a class="color1" href="kanji/306">使</a></li>
                                   <li><a class="color1" href="kanji/309">事</a></li>
                                   <li><a class="color1" href="kanji/311">実</a></li>
                                   <li><a class="color1" href="kanji/313">者</a></li>
                                   <li><a class="color1" href="kanji/314">昔</a></li>
                                   <li><a class="color1" href="kanji/318">取</a></li>
                                   <li><a class="color1" href="kanji/319">受</a></li>
                                   <li><a class="color1" href="kanji/329">所</a></li>
                                   <li><a class="color1" href="kanji/364">注</a></li>
                                   <li><a class="color1" href="kanji/370">定</a></li>
                                   <li><a class="color1" href="kanji/386">波</a></li>
                                   <li><a class="color1" href="kanji/393">板</a></li>
                                   <li><a class="color1" href="kanji/401">表</a></li>
                                   <li><a class="color1" href="kanji/408">服</a></li>
                                   <li><a class="color1" href="kanji/409">物</a></li>
                                   <li><a class="color1" href="kanji/413">放</a></li>
                                   <li><a class="color1" href="kanji/414">味</a></li>
                                   <li><a class="color1" href="kanji/415">命</a></li>
                                   <li><a class="color1" href="kanji/421">油</a></li>
                                   <li><a class="color1" href="kanji/439">和</a></li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts07">
                              <h3 class="ttl_while"><a href="kyu07">漢字検定７級（小学校４年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="kanji/448">英</a></li>
                                   <li><a class="color1" href="kanji/455">果</a></li>
                                   <li><a class="color1" href="kanji/456">芽</a></li>
                                   <li><a class="color1" href="kanji/466">官</a></li>
                                   <li><a class="color1" href="kanji/470">季</a></li>
                                   <li><a class="color1" href="kanji/478">泣</a></li>
                                   <li><a class="color1" href="kanji/482">協</a></li>
                                   <li><a class="color1" href="kanji/491">径</a></li>
                                   <li><a class="color1" href="kanji/499">固</a></li>
                                   <li><a class="color1" href="512">刷</a></li>
                                   <li><a class="color1" href="515">参</a></li>
                                   <li><a class="color1" href="524">治</a></li>
                                   <li><a class="color1" href="530">周</a></li>
                                   <li><a class="color1" href="537">松</a></li>
                                   <li><a class="color1" href="561">卒</a></li>
                                   <li><a class="color1" href="574">底</a></li>
                                   <li><a class="color1" href="575">的</a></li>
                                   <li><a class="color1" href="576">典</a></li>
                                   <li><a class="color1" href="588">念</a></li>
                                   <li><a class="color1" href="599">府</a></li>
                                   <li><a class="color1" href="610">法</a></li>
                                   <li><a class="color1" href="613">牧</a></li>
                                   <li><a class="color1" href="634">例</a></li>
                                   <li><a class="color1" href="1955">岡</a>
                                   </li>
                                   <li><a class="color1" href="2078">奈</a>
                                   </li>
                                   <li><a class="color1" href="2095">阜</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts06">
                              <h3 class="ttl_while"><a href="kyu06">漢字検定６級（小学校５年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="585">毒</a></li>
                                   <li><a class="color1" href="647">易</a></li>
                                   <li><a class="color1" href="652">往</a></li>
                                   <li><a class="color1" href="654">価</a></li>
                                   <li><a class="color1" href="657">河</a></li>
                                   <li><a class="color1" href="678">居</a></li>
                                   <li><a class="color1" href="696">効</a></li>
                                   <li><a class="color1" href="707">妻</a></li>
                                   <li><a class="color1" href="721">枝</a></li>
                                   <li><a class="color1" href="727">舎</a></li>
                                   <li><a class="color1" href="730">述</a></li>
                                   <li><a class="color1" href="736">招</a></li>
                                   <li><a class="color1" href="745">性</a></li>
                                   <li><a class="color1" href="747">制</a></li>
                                   <li><a class="color1" href="788">版</a></li>
                                   <li><a class="color1" href="790">肥</a></li>
                                   <li><a class="color1" href="792">非</a></li>
                                   <li><a class="color1" href="800">武</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts05">
                              <h3 class="ttl_while"><a href="kyu05">漢字検定５級（小学校６年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="688">券</a></li>
                                   <li><a class="color1" href="735">承</a></li>
                                   <li><a class="color1" href="829">沿</a></li>
                                   <li><a class="color1" href="830">延</a></li>
                                   <li><a class="color1" href="835">拡</a></li>
                                   <li><a class="color1" href="850">供</a></li>
                                   <li><a class="color1" href="865">呼</a></li>
                                   <li><a class="color1" href="874">刻</a></li>
                                   <li><a class="color1" href="894">若</a></li>
                                   <li><a class="color1" href="896">宗</a></li>
                                   <li><a class="color1" href="917">垂</a></li>
                                   <li><a class="color1" href="940">担</a></li>
                                   <li><a class="color1" href="945">宙</a></li>
                                   <li><a class="color1" href="946">忠</a></li>
                                   <li><a class="color1" href="957">届</a></li>
                                   <li><a class="color1" href="959">乳</a></li>
                                   <li><a class="color1" href="967">拝</a></li>
                                   <li><a class="color1" href="976">並</a></li>
                                   <li><a class="color1" href="981">宝</a></li>
                                   <li><a class="color1" href="985">枚</a></li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts04">
                              <h3 class="ttl_while"><a href="kyu04">漢字検定４級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1005">依</a>
                                   </li>
                                   <li><a class="color1" href="1024">押</a>
                                   </li>
                                   <li><a class="color1" href="1047">奇</a>
                                   </li>
                                   <li><a class="color1" href="1049">祈</a>
                                   </li>
                                   <li><a class="color1" href="1060">拠</a>
                                   </li>
                                   <li><a class="color1" href="1071">況</a>
                                   </li>
                                   <li><a class="color1" href="1074">屈</a>
                                   </li>
                                   <li><a class="color1" href="1081">肩</a>
                                   </li>
                                   <li><a class="color1" href="1115">刺</a>
                                   </li>
                                   <li><a class="color1" href="1139">沼</a>
                                   </li>
                                   <li><a class="color1" href="1160">征</a>
                                   </li>
                                   <li><a class="color1" href="1161">姓</a>
                                   </li>
                                   <li><a class="color1" href="1176">拓</a>
                                   </li>
                                   <li><a class="color1" href="1195">抵</a>
                                   </li>
                                   <li><a class="color1" href="1211">到</a>
                                   </li>
                                   <li><a class="color1" href="1219">突</a>
                                   </li>
                                   <li><a class="color1" href="1226">杯</a>
                                   </li>
                                   <li><a class="color1" href="1227">泊</a>
                                   </li>
                                   <li><a class="color1" href="1228">拍</a>
                                   </li>
                                   <li><a class="color1" href="1229">迫</a>
                                   </li>
                                   <li><a class="color1" href="1243">彼</a>
                                   </li>
                                   <li><a class="color1" href="1251">怖</a>
                                   </li>
                                   <li><a class="color1" href="1267">抱</a>
                                   </li>
                                   <li><a class="color1" href="1269">肪</a>
                                   </li>
                                   <li><a class="color1" href="1284">茂</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts03">
                              <h3 class="ttl_while"><a href="kyu03">漢字検定３級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1325">炎</a>
                                   </li>
                                   <li><a class="color1" href="1327">欧</a>
                                   </li>
                                   <li><a class="color1" href="1328">殴</a>
                                   </li>
                                   <li><a class="color1" href="1333">佳</a>
                                   </li>
                                   <li><a class="color1" href="1337">怪</a>
                                   </li>
                                   <li><a class="color1" href="1346">岳</a>
                                   </li>
                                   <li><a class="color1" href="1400">拘</a>
                                   </li>
                                   <li><a class="color1" href="1424">祉</a>
                                   </li>
                                   <li><a class="color1" href="1426">侍</a>
                                   </li>
                                   <li><a class="color1" href="1432">邪</a>
                                   </li>
                                   <li><a class="color1" href="1444">昇</a>
                                   </li>
                                   <li><a class="color1" href="1456">炊</a>
                                   </li>
                                   <li><a class="color1" href="1475">阻</a>
                                   </li>
                                   <li><a class="color1" href="1493">卓</a>
                                   </li>
                                   <li><a class="color1" href="1504">抽</a>
                                   </li>
                                   <li><a class="color1" href="1536">泌</a>
                                   </li>
                                   <li><a class="color1" href="1541">苗</a>
                                   </li>
                                   <li><a class="color1" href="1560">奉</a>
                                   </li>
                                   <li><a class="color1" href="1565">房</a>
                                   </li>
                                   <li><a class="color1" href="1576">免</a>
                                   </li>
                                   <li><a class="color1" href="1599">炉</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02j">
                              <h3 class="ttl_while"><a href="kyu02j">漢字検定準２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1622">拐</a>
                                   </li>
                                   <li><a class="color1" href="1625">劾</a>
                                   </li>
                                   <li><a class="color1" href="1652">宜</a>
                                   </li>
                                   <li><a class="color1" href="1655">拒</a>
                                   </li>
                                   <li><a class="color1" href="1657">享</a>
                                   </li>
                                   <li><a class="color1" href="1670">茎</a>
                                   </li>
                                   <li><a class="color1" href="1680">弦</a>
                                   </li>
                                   <li><a class="color1" href="1684">肯</a>
                                   </li>
                                   <li><a class="color1" href="1694">昆</a>
                                   </li>
                                   <li><a class="color1" href="1710">肢</a>
                                   </li>
                                   <li><a class="color1" href="1731">叔</a>
                                   </li>
                                   <li><a class="color1" href="1744">尚</a>
                                   </li>
                                   <li><a class="color1" href="1771">枢</a>
                                   </li>
                                   <li><a class="color1" href="1776">斉</a>
                                   </li>
                                   <li><a class="color1" href="1779">析</a>
                                   </li>
                                   <li><a class="color1" href="1781">拙</a>
                                   </li>
                                   <li><a class="color1" href="1825">坪</a>
                                   </li>
                                   <li><a class="color1" href="1826">邸</a>
                                   </li>
                                   <li><a class="color1" href="1834">泥</a>
                                   </li>
                                   <li><a class="color1" href="1837">迭</a>
                                   </li>
                                   <li><a class="color1" href="1867">披</a>
                                   </li>
                                   <li><a class="color1" href="1877">附</a>
                                   </li>
                                   <li><a class="color1" href="1878">侮</a>
                                   </li>
                                   <li><a class="color1" href="1879">沸</a>
                                   </li>
                                   <li><a class="color1" href="1885">併</a>
                                   </li>
                                   <li><a class="color1" href="1891">泡</a>
                                   </li>
                                   <li><a class="color1" href="1899">奔</a>
                                   </li>
                                   <li><a class="color1" href="1903">抹</a>
                                   </li>
                                   <li><a class="color1" href="1904">岬</a>
                                   </li>
                                   <li><a class="color1" href="1906">盲</a>
                                   </li>
                                   <li><a class="color1" href="1937">枠</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02">
                              <h3 class="ttl_while"><a href="kyu02">漢字検定２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1940">宛</a>
                                   </li>
                                   <li><a class="color1" href="1954">旺</a>
                                   </li>
                                   <li><a class="color1" href="1958">苛</a>
                                   </li>
                                   <li><a class="color1" href="1973">玩</a>
                                   </li>
                                   <li><a class="color1" href="1995">股</a>
                                   </li>
                                   <li><a class="color1" href="1996">虎</a>
                                   </li>
                                   <li><a class="color1" href="2008">采</a>
                                   </li>
                                   <li><a class="color1" href="2012">刹</a>
                                   </li>
                                   <li><a class="color1" href="2022">呪</a>
                                   </li>
                                   <li><a class="color1" href="2043">狙</a>
                                   </li>
                                   <li><a class="color1" href="2069">妬</a>
                                   </li>
                                   <li><a class="color1" href="2108">枕</a>
                                   </li>
                                   <li><a class="color1" href="2113">弥</a>
                                   </li>
                                   <li><a class="color1" href="2120">拉</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01j">
                              <h3 class="ttl_while"><a href="kyu01j">漢字検定準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="2141">阿</a>
                                   </li>
                                   <li><a class="color2" href="2170">苑</a>
                                   </li>
                                   <li><a class="color2" href="2184">奄</a>
                                   </li>
                                   <li><a class="color2" href="2192">於</a>
                                   </li>
                                   <li><a href="2204">卦</a></li>
                                   <li><a class="color2" href="2212">茄</a>
                                   </li>
                                   <li><a class="color2" href="2249">侃</a>
                                   </li>
                                   <li><a class="color2" href="2250">函</a>
                                   </li>
                                   <li><a class="color2" href="2272">其</a>
                                   </li>
                                   <li><a class="color2" href="2278">祁</a>
                                   </li>
                                   <li><a href="2312">侠</a></li>
                                   <li><a href="2321">怯</a></li>
                                   <li><a class="color2" href="2326">尭</a>
                                   </li>
                                   <li><a class="color2" href="2330">欣</a>
                                   </li>
                                   <li><a href="2337">狗</a></li>
                                   <li><a href="2377">姑</a></li>
                                   <li><a href="2392">佼</a></li>
                                   <li><a class="color2" href="2398">庚</a>
                                   </li>
                                   <li><a class="color2" href="2399">昂</a>
                                   </li>
                                   <li><a class="color2" href="2401">杭</a>
                                   </li>
                                   <li><a class="color2" href="2409">肴</a>
                                   </li>
                                   <li><a href="2410">肱</a></li>
                                   <li><a class="color2" href="2424">忽</a>
                                   </li>
                                   <li><a href="2426">坤</a></li>
                                   <li><a class="color2" href="2427">昏</a>
                                   </li>
                                   <li><a class="color2" href="2431">些</a>
                                   </li>
                                   <li><a class="color2" href="2485">竺</a>
                                   </li>
                                   <li><a href="2489">姐</a></li>
                                   <li><a class="color2" href="2541">杵</a>
                                   </li>
                                   <li><a href="2554">妾</a></li>
                                   <li><a class="color2" href="2561">昌</a>
                                   </li>
                                   <li><a class="color2" href="2582">帖</a>
                                   </li>
                                   <li><a href="2641">苫</a></li>
                                   <li><a href="2649">苒</a></li>
                                   <li><a href="2652">岨</a></li>
                                   <li><a class="color2" href="2683">陀</a>
                                   </li>
                                   <li><a href="2689">岱</a></li>
                                   <li><a class="color2" href="2694">苔</a>
                                   </li>
                                   <li><a class="color2" href="2710">坦</a>
                                   </li>
                                   <li><a href="2731">苧</a></li>
                                   <li><a href="2777">兔</a></li>
                                   <li><a class="color2" href="2785">宕</a>
                                   </li>
                                   <li><a class="color2" href="2787">沓</a>
                                   </li>
                                   <li><a class="color2" href="2813">杷</a>
                                   </li>
                                   <li><a href="2826">狛</a></li>
                                   <li><a class="color2" href="2851">枇</a>
                                   </li>
                                   <li><a class="color2" href="2874">斧</a>
                                   </li>
                                   <li><a href="2907">庖</a></li>
                                   <li><a class="color2" href="2909">朋</a>
                                   </li>
                                   <li><a class="color2" href="2920">孟</a>
                                   </li>
                                   <li><a class="color2" href="2922">茅</a>
                                   </li>
                                   <li><a class="color2" href="2930">沫</a>
                                   </li>
                                   <li><a href="2986">苓</a></li>
                                   <li><a class="color2" href="2998">怜</a>
                                   </li>
                                   <li><a class="color2" href="3024">或</a>
                                   </li>
                                   <li><a href="3027">咒</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01">
                              <h3 class="ttl_while"><a href="kyu01">漢字検定１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="3059">乖</a></li>
                                   <li><a href="3062">亟</a></li>
                                   <li><a href="3081">佶</a></li>
                                   <li><a href="3082">侈</a></li>
                                   <li><a href="3083">侏</a></li>
                                   <li><a href="3084">侘</a></li>
                                   <li><a href="3085">佻</a></li>
                                   <li><a href="3086">佩</a></li>
                                   <li><a href="3087">佰</a></li>
                                   <li><a class="color2" href="3088">侑</a>
                                   </li>
                                   <li><a href="3089">佯</a></li>
                                   <li><a href="3090">侖</a></li>
                                   <li><a href="3161">冽</a></li>
                                   <li><a href="3167">凭</a></li>
                                   <li><a href="3172">刮</a></li>
                                   <li><a href="3173">刳</a></li>
                                   <li><a href="3188">劼</a></li>
                                   <li><a href="3232">咏</a></li>
                                   <li><a href="3233">呵</a></li>
                                   <li><a href="3234">咎</a></li>
                                   <li><a href="3235">呟</a></li>
                                   <li><a href="3237">呷</a></li>
                                   <li><a href="3239">呻</a></li>
                                   <li><a href="3240">咀</a></li>
                                   <li><a href="3241">呶</a></li>
                                   <li><a href="3242">咄</a></li>
                                   <li><a href="3243">咐</a></li>
                                   <li><a href="3244">咆</a></li>
                                   <li><a href="3324">囹</a></li>
                                   <li><a href="3334">坩</a></li>
                                   <li><a href="3335">坡</a></li>
                                   <li><a href="3336">坿</a></li>
                                   <li><a href="3377">妲</a></li>
                                   <li><a href="3378">姆</a></li>
                                   <li><a href="3422">孥</a></li>
                                   <li><a href="3453">岫</a></li>
                                   <li><a href="3485">帚</a></li>
                                   <li><a href="3486">帙</a></li>
                                   <li><a href="3487">帑</a></li>
                                   <li><a href="3488">帛</a></li>
                                   <li><a href="3520">弩</a></li>
                                   <li><a href="3528">徂</a></li>
                                   <li><a href="3529">彿</a></li>
                                   <li><a href="3543">忝</a></li>
                                   <li><a href="3544">忿</a></li>
                                   <li><a href="3545">怡</a></li>
                                   <li><a href="3546">怙</a></li>
                                   <li><a href="3547">怩</a></li>
                                   <li><a href="3549">怛</a></li>
                                   <li><a href="3550">怕</a></li>
                                   <li><a href="3551">怫</a></li>
                                   <li><a href="3552">怦</a></li>
                                   <li><a href="3553">怏</a></li>
                                   <li><a href="3555">怺</a></li>
                                   <li><a href="3646">戔</a></li>
                                   <li><a href="3669">拗</a></li>
                                   <li><a href="3670">拑</a></li>
                                   <li><a href="3671">抻</a></li>
                                   <li><a href="3672">拆</a></li>
                                   <li><a href="3673">拈</a></li>
                                   <li><a href="3674">拌</a></li>
                                   <li><a href="3675">拊</a></li>
                                   <li><a href="3676">拇</a></li>
                                   <li><a href="3734">抬</a></li>
                                   <li><a href="3843">毟</a></li>
                                   <li><a href="3904">杲</a></li>
                                   <li><a class="color2" href="3905">昊</a>
                                   </li>
                                   <li><a href="3906">昃</a></li>
                                   <li><a href="3914">杳</a></li>
                                   <li><a href="3915">旻</a></li>
                                   <li><a href="4009">枌</a></li>
                                   <li><a href="4010">枉</a></li>
                                   <li><a href="4011">枋</a></li>
                                   <li><a href="4012">枡</a></li>
                                   <li><a href="4014">杪</a></li>
                                   <li><a href="4015">杼</a></li>
                                   <li><a href="4033">枅</a></li>
                                   <li><a href="4076">虱</a></li>
                                   <li><a href="4215">肭</a></li>
                                   <li><a href="4216">肬</a></li>
                                   <li><a href="4332">泓</a></li>
                                   <li><a href="4333">泗</a></li>
                                   <li><a href="4334">沽</a></li>
                                   <li><a href="4335">沮</a></li>
                                   <li><a href="4336">泝</a></li>
                                   <li><a href="4337">泄</a></li>
                                   <li><a href="4338">泅</a></li>
                                   <li><a href="4339">沱</a></li>
                                   <li><a href="4340">泪</a></li>
                                   <li><a href="4341">泯</a></li>
                                   <li><a href="4342">沾</a></li>
                                   <li><a href="4351">牀</a></li>
                                   <li><a href="4356">爬</a></li>
                                   <li><a href="4458">軋</a></li>
                                   <li><a href="4655">矼</a></li>
                                   <li><a href="4865">瓩</a></li>
                                   <li><a href="4899">氛</a></li>
                                   <li><a href="4900">炙</a></li>
                                   <li><a href="4901">炒</a></li>
                                   <li><a href="5023">衫</a></li>
                                   <li><a href="5103">狎</a></li>
                                   <li><a href="5104">狒</a></li>
                                   <li><a href="5125">羌</a></li>
                                   <li><a href="5182">陂</a></li>
                                   <li><a href="5200">邯</a></li>
                                   <li><a href="5201">邵</a></li>
                                   <li><a href="5202">邱</a></li>
                                   <li><a href="5211">疚</a></li>
                                   <li><a href="5212">疝</a></li>
                                   <li><a href="5261">籵</a></li>
                                   <li><a href="5300">歿</a></li>
                                   <li><a href="5301">殀</a></li>
                                   <li><a href="5319">氓</a></li>
                                   <li><a href="5324">苡</a></li>
                                   <li><a href="5325">苳</a></li>
                                   <li><a class="color2" href="5326">茉</a>
                                   </li>
                                   <li><a href="5327">苜</a></li>
                                   <li><a href="5328">苻</a></li>
                                   <li><a href="5329">苣</a></li>
                                   <li><a href="5330">范</a></li>
                                   <li><a href="5331">苞</a></li>
                                   <li><a href="5332">苙</a></li>
                                   <li><a href="5333">苟</a></li>
                                   <li><a href="5334">苹</a></li>
                                   <li><a href="5335">茆</a></li>
                                   <li><a href="5336">苴</a></li>
                                   <li><a class="color2" href="5337">苺</a>
                                   </li>
                                   <li><a href="5500">迚</a></li>
                                   <li><a class="color2" href="5503">迪</a>
                                   </li>
                                   <li><a href="5504">廸</a></li>
                                   <li><a href="5538">竏</a></li>
                                   <li><a href="5549">秉</a></li>
                                   <li><a href="5563">盂</a></li>
                                   <li><a href="5586">罔</a></li>
                                   <li><a class="color2" href="5613">穹</a>
                                   </li>
                                   <li><a href="5633">祀</a></li>
                                   <li><a href="6484">刱</a></li>
                                   <li><a href="6490">幷</a></li>
                                   <li><a href="6491">拋</a></li>
                                   <li><a href="6540">卹</a></li>
                                   <li><a href="10123">玫</a></li>
                                   <li><a href="10636">矻</a></li>
                                   <li><a href="14771">彽</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts0101j">
                              <h3 class="ttl_while"><a href="kyu0101j">漢字検定１級 / 準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="5661">來</a>
                                   </li>
                                   <li><a class="color2" href="5705">亞</a>
                                   </li>
                                   <li><a class="color2" href="5806">兒</a>
                                   </li>
                                   <li><a href="5840">兩</a></li>
                                   <li><a class="color2" href="5926">拔</a>
                                   </li>
                                   <li><a href="6031">舍</a></li>
                                   <li><a class="color2" href="6145">卷</a>
                                   </li>
                                   <li><a href="6167">屆</a></li>
                                   <li><a class="color2" href="6184">拂</a>
                                   </li>
                                   <li><a class="color2" href="6247">爭</a>
                                   </li>
                                   <li><a class="color2" href="6377">卑</a>
                                   </li>
                                   <li><a class="color2" href="6394">社</a>
                                   </li>
                                   <li><a class="color2" href="6449">狀</a>
                                   </li>
                                   <li><a href="8028">靑</a></li>
                                   <li><a href="11237">戾</a></li>
                                   <li><a href="23958">尙</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts">
                              <h3 class="ttl_while">漢字検定対象外</h3>
                              <ul class="search_parts">
                                   <li><a href="5677">隹</a></li>
                                   <li><a href="5689">泱</a></li>
                                   <li><a href="5690">沺</a></li>
                                   <li><a href="5693">鼡</a></li>
                                   <li><a href="5825">徃</a></li>
                                   <li><a href="5894">泙</a></li>
                                   <li><a href="5918">杰</a></li>
                                   <li><a href="5919">枩</a></li>
                                   <li><a href="5920">枦</a></li>
                                   <li><a href="5951">畄</a></li>
                                   <li><a href="5960">怐</a></li>
                                   <li><a href="5967">垈</a></li>
                                   <li><a href="5968">垉</a></li>
                                   <li><a href="5990">岻</a></li>
                                   <li><a href="5991">岶</a></li>
                                   <li><a href="5992">岼</a></li>
                                   <li><a href="5993">岷</a></li>
                                   <li><a href="5994">峅</a></li>
                                   <li><a href="5995">岾</a></li>
                                   <li><a href="6044">隶</a></li>
                                   <li><a href="6065">劵</a></li>
                                   <li><a href="6069">咋</a></li>
                                   <li><a href="6070">迩</a></li>
                                   <li><a href="6072">侭</a></li>
                                   <li><a href="6161">侫</a></li>
                                   <li><a href="6284">冐</a></li>
                                   <li><a href="6594">坵</a></li>
                                   <li><a href="6601">疌</a></li>
                                   <li><a href="6610">丳</a></li>
                                   <li><a href="6655">亝</a></li>
                                   <li><a href="6697">乵</a></li>
                                   <li><a href="6698">乴</a></li>
                                   <li><a href="7126">䑠</a></li>
                                   <li><a href="7278">靣</a></li>
                                   <li><a href="7427">凮</a></li>
                                   <li><a href="7919">阸</a></li>
                                   <li><a href="7920">陁</a></li>
                                   <li><a href="7921">阽</a></li>
                                   <li><a href="7922">阹</a></li>
                                   <li><a href="7923">阼</a></li>
                                   <li><a href="7924">阺</a></li>
                                   <li><a href="7925">阷</a></li>
                                   <li><a href="7937">侌</a></li>
                                   <li><a href="8114">呧</a></li>
                                   <li><a href="8252">豖</a></li>
                                   <li><a href="8561">运</a></li>
                                   <li><a href="8562">迋</a></li>
                                   <li><a href="8563">迓</a></li>
                                   <li><a href="8564">迕</a></li>
                                   <li><a href="8565">迒</a></li>
                                   <li><a href="8566">迊</a></li>
                                   <li><a href="8567">迍</a></li>
                                   <li><a href="8568">﨤</a></li>
                                   <li><a href="8578">廹</a></li>
                                   <li><a href="8587">这</a></li>
                                   <li><a href="8621">还</a></li>
                                   <li><a href="8639">邰</a></li>
                                   <li><a href="8640">邶</a></li>
                                   <li><a href="8641">邳</a></li>
                                   <li><a href="8642">邲</a></li>
                                   <li><a href="8643">邴</a></li>
                                   <li><a href="8783">竻</a></li>
                                   <li><a href="8990">籴</a></li>
                                   <li><a href="9171">䍐</a></li>
                                   <li><a href="9195">羋</a></li>
                                   <li><a href="9256">耓</a></li>
                                   <li><a href="9273">耵</a></li>
                                   <li><a href="9307">臽</a></li>
                                   <li><a href="9314">舏</a></li>
                                   <li><a href="9324">舠</a></li>
                                   <li><a href="9401">苢</a></li>
                                   <li><a href="9403">苷</a></li>
                                   <li><a href="9405">苘</a></li>
                                   <li><a href="9407">茁</a></li>
                                   <li><a href="9408">茋</a></li>
                                   <li><a href="9409">茌</a></li>
                                   <li><a href="9411">苕</a></li>
                                   <li><a href="9412">苐</a></li>
                                   <li><a href="9413">苨</a></li>
                                   <li><a href="9414">苶</a></li>
                                   <li><a href="9415">茇</a></li>
                                   <li><a href="9416">苤</a></li>
                                   <li><a href="9417">苾</a></li>
                                   <li><a href="9418">苠</a></li>
                                   <li><a href="9419">茀</a></li>
                                   <li><a href="9420">苪</a></li>
                                   <li><a href="9421">苯</a></li>
                                   <li><a href="9422">苚</a></li>
                                   <li><a href="9423">苭</a></li>
                                   <li><a href="9438">茊</a></li>
                                   <li><a href="9449">㽵</a></li>
                                   <li><a href="9761">虯</a></li>
                                   <li><a href="9763">虭</a></li>
                                   <li><a href="9764">虰</a></li>
                                   <li><a href="10008">衩</a></li>
                                   <li><a href="10104">卥</a></li>
                                   <li><a href="10116">玠</a></li>
                                   <li><a href="10117">玨</a></li>
                                   <li><a href="10119">玪</a></li>
                                   <li><a href="10120">玦</a></li>
                                   <li><a href="10121">玥</a></li>
                                   <li><a href="10122">玜</a></li>
                                   <li><a href="10124">玭</a></li>
                                   <li><a href="10125">玟</a></li>
                                   <li><a href="10126">玞</a></li>
                                   <li><a href="10127">玢</a></li>
                                   <li><a href="10267">瓨</a></li>
                                   <li><a href="10301">甾</a></li>
                                   <li><a href="10302">畃</a></li>
                                   <li><a href="10303">畀</a></li>
                                   <li><a href="10304">畁</a></li>
                                   <li><a href="10305">甿</a></li>
                                   <li><a href="10308">甽</a></li>
                                   <li><a href="10345">疜</a></li>
                                   <li><a href="10346">疙</a></li>
                                   <li><a href="10347">疘</a></li>
                                   <li><a href="10348">疛</a></li>
                                   <li><a href="10448">疠</a></li>
                                   <li><a href="10490">皯</a></li>
                                   <li><a href="10515">盰</a></li>
                                   <li><a href="10516">盱</a></li>
                                   <li><a href="10628">矤</a></li>
                                   <li><a href="10635">矸</a></li>
                                   <li><a href="10637">矹</a></li>
                                   <li><a href="10638">矽</a></li>
                                   <li><a href="10639">矺</a></li>
                                   <li><a href="10779">礿</a></li>
                                   <li><a href="10825">秆</a></li>
                                   <li><a href="10826">秇</a></li>
                                   <li><a href="10827">秄</a></li>
                                   <li><a href="10828">秈</a></li>
                                   <li><a href="10829">秅</a></li>
                                   <li><a href="10902">穸</a></li>
                                   <li><a href="10940">竎</a></li>
                                   <li><a href="10956">㤁</a></li>
                                   <li><a href="10957">忞</a></li>
                                   <li><a href="10959">㤂</a></li>
                                   <li><a href="10962">忩</a></li>
                                   <li><a href="10982">㤅</a></li>
                                   <li><a href="11043">怴</a></li>
                                   <li><a href="11044">怇</a></li>
                                   <li><a href="11045">怳</a></li>
                                   <li><a href="11046">怍</a></li>
                                   <li><a href="11048">怵</a></li>
                                   <li><a href="11049">怚</a></li>
                                   <li><a href="11050">怔</a></li>
                                   <li><a href="11051">怊</a></li>
                                   <li><a href="11052">怗</a></li>
                                   <li><a href="11054">怟</a></li>
                                   <li><a href="11055">怓</a></li>
                                   <li><a href="11056">怢</a></li>
                                   <li><a href="11057">怭</a></li>
                                   <li><a href="11059">怲</a></li>
                                   <li><a href="11060">怞</a></li>
                                   <li><a href="11085">忢</a></li>
                                   <li><a href="11221">戕</a></li>
                                   <li><a href="11238">戽</a></li>
                                   <li><a href="11294">㧞</a></li>
                                   <li><a href="11297">㧖</a></li>
                                   <li><a href="11298">抴</a></li>
                                   <li><a href="11300">抾</a></li>
                                   <li><a href="11303">拃</a></li>
                                   <li><a href="11304">抳</a></li>
                                   <li><a href="11305">抮</a></li>
                                   <li><a href="11306">拕</a></li>
                                   <li><a href="11307">拖</a></li>
                                   <li><a href="11308">抶</a></li>
                                   <li><a href="11309">拄</a></li>
                                   <li><a href="11310">抷</a></li>
                                   <li><a href="11311">㧙</a></li>
                                   <li><a href="11312">抿</a></li>
                                   <li><a href="11313">抦</a></li>
                                   <li><a href="11314">拚</a></li>
                                   <li><a href="11316">抨</a></li>
                                   <li><a href="11317">抺</a></li>
                                   <li><a href="11318">抭</a></li>
                                   <li><a href="11319">拎</a></li>
                                   <li><a href="11543">攽</a></li>
                                   <li><a href="11550">侎</a></li>
                                   <li><a href="11588">斦</a></li>
                                   <li><a href="11589">斨</a></li>
                                   <li><a href="11598">斻</a></li>
                                   <li><a href="11603">㫄</a></li>
                                   <li><a href="11624">昀</a></li>
                                   <li><a href="11625">昖</a></li>
                                   <li><a href="11627">昕</a></li>
                                   <li><a href="11628">昑</a></li>
                                   <li><a href="11629">昍</a></li>
                                   <li><a href="11630">昈</a></li>
                                   <li><a href="11631">旿</a></li>
                                   <li><a href="11634">昒</a></li>
                                   <li><a href="11635">㫚</a></li>
                                   <li><a href="11638">昄</a></li>
                                   <li><a href="11639">旼</a></li>
                                   <li><a href="11640">昉</a></li>
                                   <li><a href="11641">昘</a></li>
                                   <li><a href="11649">旾</a></li>
                                   <li><a href="11674">旹</a></li>
                                   <li><a href="11745">曶</a></li>
                                   <li><a href="11759">䏖</a></li>
                                   <li><a href="11760">朊</a></li>
                                   <li><a href="11761">肣</a></li>
                                   <li><a href="11762">肸</a></li>
                                   <li><a href="11763">肹</a></li>
                                   <li><a href="11765">肻</a></li>
                                   <li><a href="11768">肮</a></li>
                                   <li><a href="11770">肫</a></li>
                                   <li><a href="11771">肰</a></li>
                                   <li><a href="11772">䏚</a></li>
                                   <li><a href="11773">肦</a></li>
                                   <li><a href="11774">肨</a></li>
                                   <li><a href="11785">孡</a></li>
                                   <li><a href="11790">肧</a></li>
                                   <li><a href="11899">肤</a></li>
                                   <li><a href="11952">枍</a></li>
                                   <li><a href="11953">杹</a></li>
                                   <li><a href="11954">枙</a></li>
                                   <li><a href="11955">枒</a></li>
                                   <li><a href="11956">极</a></li>
                                   <li><a href="11957">杴</a></li>
                                   <li><a href="11958">杬</a></li>
                                   <li><a href="11959">枑</a></li>
                                   <li><a href="11960">构</a></li>
                                   <li><a href="11961">枊</a></li>
                                   <li><a href="11962">杫</a></li>
                                   <li><a href="11963">杸</a></li>
                                   <li><a href="11964">枀</a></li>
                                   <li><a href="11968">枘</a></li>
                                   <li><a href="11969">枛</a></li>
                                   <li><a href="11970">杻</a></li>
                                   <li><a href="11971">杶</a></li>
                                   <li><a href="11972">枓</a></li>
                                   <li><a href="11975">杮</a></li>
                                   <li><a href="11976">柉</a></li>
                                   <li><a href="11977">枎</a></li>
                                   <li><a href="11978">枖</a></li>
                                   <li><a href="12002">枏</a></li>
                                   <li><a href="12163">枆</a></li>
                                   <li><a href="12429">侒</a></li>
                                   <li><a href="12430">侇</a></li>
                                   <li><a href="12431">佾</a></li>
                                   <li><a href="12432">㑊</a></li>
                                   <li><a href="12433">㑌</a></li>
                                   <li><a href="12434">侉</a></li>
                                   <li><a href="12435">佪</a></li>
                                   <li><a href="12436">侅</a></li>
                                   <li><a href="12437">佸</a></li>
                                   <li><a href="12439">佹</a></li>
                                   <li><a href="12440">侐</a></li>
                                   <li><a href="12442">侀</a></li>
                                   <li><a href="12443">侊</a></li>
                                   <li><a href="12444">佷</a></li>
                                   <li><a href="12445">佮</a></li>
                                   <li><a href="12446">佽</a></li>
                                   <li><a href="12447">佌</a></li>
                                   <li><a href="12448">佴</a></li>
                                   <li><a href="12449">侄</a></li>
                                   <li><a href="12450">侚</a></li>
                                   <li><a href="12451">侞</a></li>
                                   <li><a href="12452">侁</a></li>
                                   <li><a href="12453">佺</a></li>
                                   <li><a href="12454">侟</a></li>
                                   <li><a href="12455">侂</a></li>
                                   <li><a href="12456">侜</a></li>
                                   <li><a href="12457">侙</a></li>
                                   <li><a href="12458">侗</a></li>
                                   <li><a href="12461">侔</a></li>
                                   <li><a href="12462">佬</a></li>
                                   <li><a href="12463">侓</a></li>
                                   <li><a href="12546">㑒</a></li>
                                   <li><a href="12628">侩</a></li>
                                   <li><a href="12678">炗</a></li>
                                   <li><a href="12679">炛</a></li>
                                   <li><a href="12685">兖</a></li>
                                   <li><a href="12704">罙</a></li>
                                   <li><a href="12705">冞</a></li>
                                   <li><a href="12713">冼</a></li>
                                   <li><a href="12714">冿</a></li>
                                   <li><a href="12754">㓤</a></li>
                                   <li><a href="12755">刲</a></li>
                                   <li><a href="12756">刾</a></li>
                                   <li><a href="12758">刵</a></li>
                                   <li><a href="12760">刴</a></li>
                                   <li><a href="12761">剁</a></li>
                                   <li><a href="12795">戗</a></li>
                                   <li><a href="12806">刽</a></li>
                                   <li><a href="12808">刿</a></li>
                                   <li><a href="12825">刼</a></li>
                                   <li><a href="12828">劸</a></li>
                                   <li><a href="12830">劻</a></li>
                                   <li><a href="12833">劶</a></li>
                                   <li><a href="12840">劺</a></li>
                                   <li><a href="12841">劷</a></li>
                                   <li><a href="12842">劽</a></li>
                                   <li><a href="12876">欤</a></li>
                                   <li><a href="12877">歧</a></li>
                                   <li><a href="12893">歽</a></li>
                                   <li><a href="12894">殁</a></li>
                                   <li><a href="12895">歾</a></li>
                                   <li><a href="12933">壳</a></li>
                                   <li><a href="12936">匊</a></li>
                                   <li><a href="12939">匌</a></li>
                                   <li><a href="12943">匋</a></li>
                                   <li><a href="12973">匼</a></li>
                                   <li><a href="13001">䘚</a></li>
                                   <li><a href="13022">乶</a></li>
                                   <li><a href="13023">乷</a></li>
                                   <li><a href="13061">佫</a></li>
                                   <li><a href="13062">佱</a></li>
                                   <li><a href="13063">佲</a></li>
                                   <li><a href="13064">侕</a></li>
                                   <li><a href="13065">侤</a></li>
                                   <li><a href="13127">冾</a></li>
                                   <li><a href="13147">刯</a></li>
                                   <li><a href="13159">势</a></li>
                                   <li><a href="13178">卶</a></li>
                                   <li><a href="13179">卺</a></li>
                                   <li><a href="13188">厒</a></li>
                                   <li><a href="13189">厓</a></li>
                                   <li><a href="13190">厔</a></li>
                                   <li><a href="13209">叀</a></li>
                                   <li><a href="13210">叁</a></li>
                                   <li><a href="13215">叕</a></li>
                                   <li><a href="13266">呝</a></li>
                                   <li><a href="13267">呞</a></li>
                                   <li><a href="13268">呠</a></li>
                                   <li><a href="13269">呡</a></li>
                                   <li><a href="13270">呢</a></li>
                                   <li><a href="13271">呣</a></li>
                                   <li><a href="13272">呤</a></li>
                                   <li><a href="13273">呥</a></li>
                                   <li><a href="13274">呦</a></li>
                                   <li><a href="13275">呩</a></li>
                                   <li><a href="13276">呫</a></li>
                                   <li><a href="13277">呬</a></li>
                                   <li><a href="13278">呭</a></li>
                                   <li><a href="13279">呮</a></li>
                                   <li><a href="13280">呯</a></li>
                                   <li><a href="13282">呴</a></li>
                                   <li><a href="13283">呸</a></li>
                                   <li><a href="13284">呹</a></li>
                                   <li><a href="13285">呺</a></li>
                                   <li><a href="13286">呾</a></li>
                                   <li><a href="13287">呿</a></li>
                                   <li><a href="13288">咁</a></li>
                                   <li><a href="13289">咂</a></li>
                                   <li><a href="13290">咃</a></li>
                                   <li><a href="13291">咇</a></li>
                                   <li><a href="13292">咈</a></li>
                                   <li><a href="13293">咉</a></li>
                                   <li><a href="13294">咊</a></li>
                                   <li><a href="13295">咍</a></li>
                                   <li><a href="13296">咑</a></li>
                                   <li><a href="13297">咓</a></li>
                                   <li><a href="13298">咔</a></li>
                                   <li><a href="13299">咕</a></li>
                                   <li><a href="13300">咖</a></li>
                                   <li><a href="13301">咜</a></li>
                                   <li><a href="13617">囷</a></li>
                                   <li><a href="13618">囸</a></li>
                                   <li><a href="13619">囻</a></li>
                                   <li><a href="13620">囼</a></li>
                                   <li><a href="13670">坢</a></li>
                                   <li><a href="13671">坣</a></li>
                                   <li><a href="13672">坥</a></li>
                                   <li><a href="13673">坧</a></li>
                                   <li><a href="13674">坨</a></li>
                                   <li><a href="13675">坫</a></li>
                                   <li><a href="13677">坭</a></li>
                                   <li><a href="13678">坮</a></li>
                                   <li><a href="13679">坯</a></li>
                                   <li><a href="13680">坰</a></li>
                                   <li><a href="13681">坱</a></li>
                                   <li><a href="13682">坲</a></li>
                                   <li><a href="13683">坳</a></li>
                                   <li><a href="13684">坴</a></li>
                                   <li><a href="13685">坶</a></li>
                                   <li><a href="13686">坷</a></li>
                                   <li><a href="13687">坸</a></li>
                                   <li><a href="13688">坹</a></li>
                                   <li><a href="13689">坺</a></li>
                                   <li><a href="13690">坻</a></li>
                                   <li><a href="13691">坼</a></li>
                                   <li><a href="13692">坽</a></li>
                                   <li><a href="13693">坾</a></li>
                                   <li><a href="13694">垀</a></li>
                                   <li><a href="13695">垁</a></li>
                                   <li><a href="13696">垃</a></li>
                                   <li><a href="13896">备</a></li>
                                   <li><a href="13899">夌</a></li>
                                   <li><a href="13903">夝</a></li>
                                   <li><a href="13917">奃</a></li>
                                   <li><a href="13918">奅</a></li>
                                   <li><a href="13919">奆</a></li>
                                   <li><a href="13921">奋</a></li>
                                   <li><a href="13922">奌</a></li>
                                   <li><a href="13970">妭</a></li>
                                   <li><a href="13971">妮</a></li>
                                   <li><a href="13972">妯</a></li>
                                   <li><a href="13973">妰</a></li>
                                   <li><a href="13974">妱</a></li>
                                   <li><a href="13975">妳</a></li>
                                   <li><a href="13976">妴</a></li>
                                   <li><a href="13977">妵</a></li>
                                   <li><a href="13978">妶</a></li>
                                   <li><a href="13979">妷</a></li>
                                   <li><a href="13980">妸</a></li>
                                   <li><a href="13981">妺</a></li>
                                   <li><a href="13982">妼</a></li>
                                   <li><a href="13983">妽</a></li>
                                   <li><a href="13984">妿</a></li>
                                   <li><a href="13985">姀</a></li>
                                   <li><a href="13986">姁</a></li>
                                   <li><a href="13988">姃</a></li>
                                   <li><a href="13989">姄</a></li>
                                   <li><a href="13990">姅</a></li>
                                   <li><a href="13991">姇</a></li>
                                   <li><a href="13992">姈</a></li>
                                   <li><a href="13993">姊</a></li>
                                   <li><a href="13994">姌</a></li>
                                   <li><a href="13995">姍</a></li>
                                   <li><a href="13996">姎</a></li>
                                   <li><a href="13997">姏</a></li>
                                   <li><a href="13998">姒</a></li>
                                   <li><a href="14000">姖</a></li>
                                   <li><a href="14273">孠</a></li>
                                   <li><a href="14274">孢</a></li>
                                   <li><a href="14291">宓</a></li>
                                   <li><a href="14292">宔</a></li>
                                   <li><a href="14293">宖</a></li>
                                   <li><a href="14294">实</a></li>
                                   <li><a href="14332">尀</a></li>
                                   <li><a href="14347">尩</a></li>
                                   <li><a href="14359">屄</a></li>
                                   <li><a href="14360">屇</a></li>
                                   <li><a href="14361">屉</a></li>
                                   <li><a href="14400">岝</a></li>
                                   <li><a href="14401">岞</a></li>
                                   <li><a href="14402">岟</a></li>
                                   <li><a href="14403">岠</a></li>
                                   <li><a href="14404">岢</a></li>
                                   <li><a href="14405">岣</a></li>
                                   <li><a href="14406">岤</a></li>
                                   <li><a href="14407">岥</a></li>
                                   <li><a href="14408">岦</a></li>
                                   <li><a href="14409">岧</a></li>
                                   <li><a href="14410">岪</a></li>
                                   <li><a href="14411">岭</a></li>
                                   <li><a href="14412">岮</a></li>
                                   <li><a href="14413">岯</a></li>
                                   <li><a href="14414">岰</a></li>
                                   <li><a href="14415">岲</a></li>
                                   <li><a href="14416">岴</a></li>
                                   <li><a href="14417">岵</a></li>
                                   <li><a href="14418">岹</a></li>
                                   <li><a href="14419">岺</a></li>
                                   <li><a href="14420">峀</a></li>
                                   <li><a href="14602">巶</a></li>
                                   <li><a href="14616">帒</a></li>
                                   <li><a href="14617">帔</a></li>
                                   <li><a href="14618">帕</a></li>
                                   <li><a href="14619">帗</a></li>
                                   <li><a href="14620">帘</a></li>
                                   <li><a href="14674">庘</a></li>
                                   <li><a href="14675">庙</a></li>
                                   <li><a href="14677">庝</a></li>
                                   <li><a href="14722">弆</a></li>
                                   <li><a href="14731">弢</a></li>
                                   <li><a href="14732">弣</a></li>
                                   <li><a href="14733">弤</a></li>
                                   <li><a href="14734">弨</a></li>
                                   <li><a href="14755">彔</a></li>
                                   <li><a href="14772">彾</a></li>
                                   <li><a href="14802">忥</a></li>
                                   <li><a href="14809">怈</a></li>
                                   <li><a href="14810">怉</a></li>
                                   <li><a href="14811">怋</a></li>
                                   <li><a href="14812">怌</a></li>
                                   <li><a href="14813">怑</a></li>
                                   <li><a href="14815">怬</a></li>
                                   <li><a href="14816">怮</a></li>
                                   <li><a href="14817">怰</a></li>
                                   <li><a href="14818">怶</a></li>
                                   <li><a href="14916">抧</a></li>
                                   <li><a href="14917">抩</a></li>
                                   <li><a href="14918">抪</a></li>
                                   <li><a href="14919">抯</a></li>
                                   <li><a href="14920">抰</a></li>
                                   <li><a href="14921">抲</a></li>
                                   <li><a href="14923">拞</a></li>
                                   <li><a href="14924">拟</a></li>
                                   <li><a href="15079">斺</a></li>
                                   <li><a href="15088">旽</a></li>
                                   <li><a href="15089">昁</a></li>
                                   <li><a href="15090">昅</a></li>
                                   <li><a href="15091">昐</a></li>
                                   <li><a href="15092">昗</a></li>
                                   <li><a href="15093">昙</a></li>
                                   <li><a href="15136">朌</a></li>
                                   <li><a href="15151">杺</a></li>
                                   <li><a href="15152">杽</a></li>
                                   <li><a href="15153">枂</a></li>
                                   <li><a href="15154">枃</a></li>
                                   <li><a href="15155">枈</a></li>
                                   <li><a href="15156">枞</a></li>
                                   <li><a href="15157">枟</a></li>
                                   <li><a href="15158">枣</a></li>
                                   <li><a href="15159">枬</a></li>
                                   <li><a href="15338">欥</a></li>
                                   <li><a href="15339">欦</a></li>
                                   <li><a href="15356">歨</a></li>
                                   <li><a href="15369">毑</a></li>
                                   <li><a href="15370">毞</a></li>
                                   <li><a href="15397">氜</a></li>
                                   <li><a href="15398">氝</a></li>
                                   <li><a href="15443">汬</a></li>
                                   <li><a href="15455">沀</a></li>
                                   <li><a href="15461">沊</a></li>
                                   <li><a href="15470">沝</a></li>
                                   <li><a href="15473">沬</a></li>
                                   <li><a href="15474">沭</a></li>
                                   <li><a href="15475">沰</a></li>
                                   <li><a href="15476">沲</a></li>
                                   <li><a href="15477">沴</a></li>
                                   <li><a href="15478">沵</a></li>
                                   <li><a href="15479">沶</a></li>
                                   <li><a href="15480">泀</a></li>
                                   <li><a href="15481">泂</a></li>
                                   <li><a href="15482">泃</a></li>
                                   <li><a href="15483">泆</a></li>
                                   <li><a href="15484">泇</a></li>
                                   <li><a href="15485">泈</a></li>
                                   <li><a href="15486">泋</a></li>
                                   <li><a href="15487">泍</a></li>
                                   <li><a href="15488">泎</a></li>
                                   <li><a href="15489">泏</a></li>
                                   <li><a href="15490">泐</a></li>
                                   <li><a href="15491">泑</a></li>
                                   <li><a href="15492">泔</a></li>
                                   <li><a href="15493">泖</a></li>
                                   <li><a href="15494">泘</a></li>
                                   <li><a href="15496">泜</a></li>
                                   <li><a href="15497">泞</a></li>
                                   <li><a href="15498">泟</a></li>
                                   <li><a href="15499">泠</a></li>
                                   <li><a href="15500">泤</a></li>
                                   <li><a href="15501">泦</a></li>
                                   <li><a href="15502">泩</a></li>
                                   <li><a href="15503">泫</a></li>
                                   <li><a href="15504">泬</a></li>
                                   <li><a href="15505">泭</a></li>
                                   <li><a href="15506">泮</a></li>
                                   <li><a href="15507">泲</a></li>
                                   <li><a href="15546">洰</a></li>
                                   <li><a href="16006">炂</a></li>
                                   <li><a href="16007">炃</a></li>
                                   <li><a href="16008">炄</a></li>
                                   <li><a href="16009">炅</a></li>
                                   <li><a href="16010">炆</a></li>
                                   <li><a href="16011">炇</a></li>
                                   <li><a href="16012">炈</a></li>
                                   <li><a href="16013">炋</a></li>
                                   <li><a href="16014">炌</a></li>
                                   <li><a href="16015">炍</a></li>
                                   <li><a href="16016">炏</a></li>
                                   <li><a href="16017">炐</a></li>
                                   <li><a href="16018">炑</a></li>
                                   <li><a href="16019">炓</a></li>
                                   <li><a href="16020">炔</a></li>
                                   <li><a href="16021">炕</a></li>
                                   <li><a href="16022">炖</a></li>
                                   <li><a href="16023">炘</a></li>
                                   <li><a href="16024">炚</a></li>
                                   <li><a href="16279">爸</a></li>
                                   <li><a href="16296">牥</a></li>
                                   <li><a href="16297">牦</a></li>
                                   <li><a href="16298">牨</a></li>
                                   <li><a href="16299">牪</a></li>
                                   <li><a href="16300">牫</a></li>
                                   <li><a href="16301">牬</a></li>
                                   <li><a href="16359">狉</a></li>
                                   <li><a href="16360">狋</a></li>
                                   <li><a href="16361">狌</a></li>
                                   <li><a href="16362">狍</a></li>
                                   <li><a href="16363">狏</a></li>
                                   <li><a href="16364">狑</a></li>
                                   <li><a href="16365">狓</a></li>
                                   <li><a href="16366">狔</a></li>
                                   <li><a href="16367">狕</a></li>
                                   <li><a href="16368">狖</a></li>
                                   <li><a href="16369">狘</a></li>
                                   <li><a href="16370">狚</a></li>
                                   <li><a href="16371">狜</a></li>
                                   <li><a href="16478">玝</a></li>
                                   <li><a href="16479">玡</a></li>
                                   <li><a href="16480">玣</a></li>
                                   <li><a href="16481">玤</a></li>
                                   <li><a href="16482">玧</a></li>
                                   <li><a href="16483">玬</a></li>
                                   <li><a href="16588">畂</a></li>
                                   <li><a href="16595">疞</a></li>
                                   <li><a href="16639">盳</a></li>
                                   <li><a href="16640">盵</a></li>
                                   <li><a href="16710">矷</a></li>
                                   <li><a href="16806">秊</a></li>
                                   <li><a href="16847">穻</a></li>
                                   <li><a href="16977">糼</a></li>
                                   <li><a href="16978">糽</a></li>
                                   <li><a href="17054">缷</a></li>
                                   <li><a href="17060">罗</a></li>
                                   <li><a href="17126">肏</a></li>
                                   <li><a href="17131">肳</a></li>
                                   <li><a href="17132">肵</a></li>
                                   <li><a href="17133">肶</a></li>
                                   <li><a href="17134">肷</a></li>
                                   <li><a href="17211">苝</a></li>
                                   <li><a href="17212">苩</a></li>
                                   <li><a href="17213">苬</a></li>
                                   <li><a href="17214">苮</a></li>
                                   <li><a href="17215">苰</a></li>
                                   <li><a href="17216">苲</a></li>
                                   <li><a href="17217">苵</a></li>
                                   <li><a href="17218">苸</a></li>
                                   <li><a href="17219">苼</a></li>
                                   <li><a href="17220">苿</a></li>
                                   <li><a href="17412">虮</a></li>
                                   <li><a href="17530">衦</a></li>
                                   <li><a href="17531">衧</a></li>
                                   <li><a href="17532">衪</a></li>
                                   <li><a href="17911">迌</a></li>
                                   <li><a href="17912">迏</a></li>
                                   <li><a href="17913">迗</a></li>
                                   <li><a href="17940">邭</a></li>
                                   <li><a href="17941">邮</a></li>
                                   <li><a href="17942">邷</a></li>
                                   <li><a href="17943">邹</a></li>
                                   <li><a href="18185">阾</a></li>
                                   <li><a href="18186">陃</a></li>
                                   <li><a href="18583">黾</a></li>
                                   <li><a href="18657">㐙</a></li>
                                   <li><a href="18658">㐚</a></li>
                                   <li><a href="18659">㐛</a></li>
                                   <li><a href="18672">㐨</a></li>
                                   <li><a href="18673">㐩</a></li>
                                   <li><a href="18675">㐭</a></li>
                                   <li><a href="18690">㑉</a></li>
                                   <li><a href="18691">㑋</a></li>
                                   <li><a href="18692">㑍</a></li>
                                   <li><a href="18693">㑎</a></li>
                                   <li><a href="18694">㑐</a></li>
                                   <li><a href="18695">㑑</a></li>
                                   <li><a href="18696">㑓</a></li>
                                   <li><a href="18758">㒺</a></li>
                                   <li><a href="18767">㓉</a></li>
                                   <li><a href="18768">㓊</a></li>
                                   <li><a href="18769">㓋</a></li>
                                   <li><a href="18770">㓌</a></li>
                                   <li><a href="18782">㓡</a></li>
                                   <li><a href="18783">㓢</a></li>
                                   <li><a href="18784">㓣</a></li>
                                   <li><a href="18823">㔙</a></li>
                                   <li><a href="18824">㔚</a></li>
                                   <li><a href="18838">㔬</a></li>
                                   <li><a href="18847">㔽</a></li>
                                   <li><a href="18850">㕁</a></li>
                                   <li><a href="18857">㕈</a></li>
                                   <li><a href="18858">㕉</a></li>
                                   <li><a href="18872">㕞</a></li>
                                   <li><a href="18896">㕸</a></li>
                                   <li><a href="18897">㕹</a></li>
                                   <li><a href="18898">㕺</a></li>
                                   <li><a href="18899">㕻</a></li>
                                   <li><a href="18900">㕼</a></li>
                                   <li><a href="18901">㕽</a></li>
                                   <li><a href="18902">㕾</a></li>
                                   <li><a href="19027">㘠</a></li>
                                   <li><a href="19028">㘡</a></li>
                                   <li><a href="19041">㘱</a></li>
                                   <li><a href="19042">㘲</a></li>
                                   <li><a href="19043">㘳</a></li>
                                   <li><a href="19045">㘷</a></li>
                                   <li><a href="19112">㚔</a></li>
                                   <li><a href="19113">㚕</a></li>
                                   <li><a href="19114">㚖</a></li>
                                   <li><a href="19115">㚗</a></li>
                                   <li><a href="19116">㚘</a></li>
                                   <li><a href="19117">㚙</a></li>
                                   <li><a href="19135">㚰</a></li>
                                   <li><a href="19136">㚱</a></li>
                                   <li><a href="19137">㚲</a></li>
                                   <li><a href="19138">㚳</a></li>
                                   <li><a href="19139">㚴</a></li>
                                   <li><a href="19140">㚵</a></li>
                                   <li><a href="19141">㚶</a></li>
                                   <li><a href="19142">㚷</a></li>
                                   <li><a href="19143">㚸</a></li>
                                   <li><a href="19144">㚹</a></li>
                                   <li><a href="19145">㚺</a></li>
                                   <li><a href="19146">㚻</a></li>
                                   <li><a href="19147">㚼</a></li>
                                   <li><a href="19148">㚽</a></li>
                                   <li><a href="19149">㚾</a></li>
                                   <li><a href="19150">㚿</a></li>
                                   <li><a href="19151">㛁</a></li>
                                   <li><a href="19253">㝀</a></li>
                                   <li><a href="19269">㝒</a></li>
                                   <li><a href="19298">㝵</a></li>
                                   <li><a href="19303">㝾</a></li>
                                   <li><a href="19304">㝿</a></li>
                                   <li><a href="19320">㞐</a></li>
                                   <li><a href="19321">㞑</a></li>
                                   <li><a href="19353">㞹</a></li>
                                   <li><a href="19354">㞺</a></li>
                                   <li><a href="19355">㞻</a></li>
                                   <li><a href="19356">㞼</a></li>
                                   <li><a href="19357">㞽</a></li>
                                   <li><a href="19358">㞾</a></li>
                                   <li><a href="19359">㞿</a></li>
                                   <li><a href="19360">㟀</a></li>
                                   <li><a href="19361">㟁</a></li>
                                   <li><a href="19362">㟃</a></li>
                                   <li><a href="19450">㠰</a></li>
                                   <li><a href="19461">㠽</a></li>
                                   <li><a href="19462">㠾</a></li>
                                   <li><a href="19464">㡀</a></li>
                                   <li><a href="19511">㡴</a></li>
                                   <li><a href="19512">㡵</a></li>
                                   <li><a href="19513">㡶</a></li>
                                   <li><a href="19514">㡷</a></li>
                                   <li><a href="19515">㡸</a></li>
                                   <li><a href="19516">㡹</a></li>
                                   <li><a href="19517">㡺</a></li>
                                   <li><a href="19518">㡻</a></li>
                                   <li><a href="19558">㢮</a></li>
                                   <li><a href="19559">㢯</a></li>
                                   <li><a href="19560">㢰</a></li>
                                   <li><a href="19580">㣋</a></li>
                                   <li><a href="19581">㣌</a></li>
                                   <li><a href="19582">㣍</a></li>
                                   <li><a href="19590">㣘</a></li>
                                   <li><a href="19591">㣙</a></li>
                                   <li><a href="19625">㤌</a></li>
                                   <li><a href="19628">㤏</a></li>
                                   <li><a href="19629">㤑</a></li>
                                   <li><a href="19630">㤒</a></li>
                                   <li><a href="19631">㤓</a></li>
                                   <li><a href="19632">㤔</a></li>
                                   <li><a href="19633">㤕</a></li>
                                   <li><a href="19634">㤖</a></li>
                                   <li><a href="19745">㦰</a></li>
                                   <li><a href="19746">㦱</a></li>
                                   <li><a href="19747">㦲</a></li>
                                   <li><a href="19757">㦿</a></li>
                                   <li><a href="19758">㧀</a></li>
                                   <li><a href="19771">㧒</a></li>
                                   <li><a href="19773">㧔</a></li>
                                   <li><a href="19774">㧕</a></li>
                                   <li><a href="19887">㩺</a></li>
                                   <li><a href="19893">㪁</a></li>
                                   <li><a href="19894">㪂</a></li>
                                   <li><a href="19936">㪴</a></li>
                                   <li><a href="19963">㫘</a></li>
                                   <li><a href="19964">㫙</a></li>
                                   <li><a href="20016">㬳</a></li>
                                   <li><a href="20027">㭇</a></li>
                                   <li><a href="20028">㭈</a></li>
                                   <li><a href="20030">㭊</a></li>
                                   <li><a href="20031">㭋</a></li>
                                   <li><a href="20032">㭌</a></li>
                                   <li><a href="20176">㰟</a></li>
                                   <li><a href="20177">㰠</a></li>
                                   <li><a href="20178">㰡</a></li>
                                   <li><a href="20179">㰢</a></li>
                                   <li><a href="20222">㱚</a></li>
                                   <li><a href="20223">㱛</a></li>
                                   <li><a href="20224">㱜</a></li>
                                   <li><a href="20225">㱝</a></li>
                                   <li><a href="20253">㱽</a></li>
                                   <li><a href="20265">㲍</a></li>
                                   <li><a href="20266">㲎</a></li>
                                   <li><a href="20267">㲏</a></li>
                                   <li><a href="20297">㲴</a></li>
                                   <li><a href="20316">㳋</a></li>
                                   <li><a href="20317">㳌</a></li>
                                   <li><a href="20318">㳍</a></li>
                                   <li><a href="20319">㳎</a></li>
                                   <li><a href="20320">㳏</a></li>
                                   <li><a href="20321">㳐</a></li>
                                   <li><a href="20322">㳑</a></li>
                                   <li><a href="20323">㳒</a></li>
                                   <li><a href="20479">㶦</a></li>
                                   <li><a href="20480">㶧</a></li>
                                   <li><a href="20481">㶨</a></li>
                                   <li><a href="20554">㸒</a></li>
                                   <li><a href="20560">㸚</a></li>
                                   <li><a href="20563">㸝</a></li>
                                   <li><a href="20564">㸞</a></li>
                                   <li><a href="20577">㸫</a></li>
                                   <li><a href="20578">㸬</a></li>
                                   <li><a href="20579">㸭</a></li>
                                   <li><a href="20580">㸮</a></li>
                                   <li><a href="20581">㸯</a></li>
                                   <li><a href="20624">㹜</a></li>
                                   <li><a href="20629">㹡</a></li>
                                   <li><a href="20630">㹢</a></li>
                                   <li><a href="20631">㹣</a></li>
                                   <li><a href="20632">㹤</a></li>
                                   <li><a href="20633">㹥</a></li>
                                   <li><a href="20634">㹦</a></li>
                                   <li><a href="20635">㹧</a></li>
                                   <li><a href="20636">㹨</a></li>
                                   <li><a href="20696">㺰</a></li>
                                   <li><a href="20698">㺲</a></li>
                                   <li><a href="20699">㺳</a></li>
                                   <li><a href="20700">㺴</a></li>
                                   <li><a href="20764">㼘</a></li>
                                   <li><a href="20765">㼙</a></li>
                                   <li><a href="20839">㽳</a></li>
                                   <li><a href="20840">㽴</a></li>
                                   <li><a href="20930">㿪</a></li>
                                   <li><a href="20946">㿻</a></li>
                                   <li><a href="20962">䀐</a></li>
                                   <li><a href="20963">䀒</a></li>
                                   <li><a href="20964">䀓</a></li>
                                   <li><a href="20965">䀔</a></li>
                                   <li><a href="21058">䂆</a></li>
                                   <li><a href="21071">䂘</a></li>
                                   <li><a href="21072">䂙</a></li>
                                   <li><a href="21179">䄨</a></li>
                                   <li><a href="21180">䄩</a></li>
                                   <li><a href="21181">䄪</a></li>
                                   <li><a href="21182">䄫</a></li>
                                   <li><a href="21183">䄬</a></li>
                                   <li><a href="21184">䄭</a></li>
                                   <li><a href="21309">䇃</a></li>
                                   <li><a href="21529">䊵</a></li>
                                   <li><a href="21765">䏐</a></li>
                                   <li><a href="21767">䏒</a></li>
                                   <li><a href="21768">䏓</a></li>
                                   <li><a href="21769">䏔</a></li>
                                   <li><a href="21770">䏗</a></li>
                                   <li><a href="21771">䏘</a></li>
                                   <li><a href="21772">䏛</a></li>
                                   <li><a href="21773">䏜</a></li>
                                   <li><a href="21930">䒧</a></li>
                                   <li><a href="21931">䒨</a></li>
                                   <li><a href="21932">䒪</a></li>
                                   <li><a href="21933">䒬</a></li>
                                   <li><a href="21934">䒭</a></li>
                                   <li><a href="22091">䖈</a></li>
                                   <li><a href="22199">䘜</a></li>
                                   <li><a href="22200">䘝</a></li>
                                   <li><a href="22422">䜳</a></li>
                                   <li><a href="22706">䢍</a></li>
                                   <li><a href="22707">䢎</a></li>
                                   <li><a href="22738">䢸</a></li>
                                   <li><a href="22739">䢹</a></li>
                                   <li><a href="22948">䧁</a></li>
                                   <li><a href="22949">䧂</a></li>
                                   <li><a href="22950">䧃</a></li>
                                   <li><a href="23803">侪</a></li>
                                   <li><a href="23809">剂</a></li>
                                   <li><a href="23811">匦</a></li>
                                   <li><a href="23889">丽</a></li>
                                   <li><a href="23898">咅</a></li>
                                   <li><a href="23900">哎</a></li>
                                   <li><a href="23923">囶</a></li>
                                   <li><a href="23969">帓</a></li>
                                   <li><a href="23984">弡</a></li>
                                   <li><a href="23987">录</a></li>
                                   <li><a href="23994">昋</a></li>
                                   <li><a href="24011">沷</a></li>
                                   <li><a href="24013">泧</a></li>
                                   <li><a href="24014">泻</a></li>
                                   <li><a href="24047">炁</a></li>
                                   <li><a href="24108">苖</a></li>
                                   <li><a href="24200">㘴</a></li>
                                   <li><a href="24203">㚉</a></li>
                                   <li><a href="24215">㣇</a></li>
                                   <li><a href="24277">䆒</a></li>
                                   <li><a href="24287">䏕</a></li>
                                   <li><a href="24288">䏙</a></li>
                                   <li><a href="24295">䒩</a></li>
                                   <li><a href="24296">䒫</a></li>
                                   <li><a href="24337">䢌</a></li>
                                   <li><a href="24375">枔</a></li>
                                   <li><a href="24532">丧</a></li>
                                   <li><a href="24541">乸</a></li>
                                   <li><a href="24576">侢</a></li>
                                   <li><a href="24577">侣</a></li>
                                   <li><a href="24579">侨</a></li>
                                   <li><a href="24580">侬</a></li>
                                   <li><a href="24708">净</a></li>
                                   <li><a href="24715">凯</a></li>
                                   <li><a href="24723">剀</a></li>
                                   <li><a href="24728">㓥</a></li>
                                   <li><a href="24737">单</a></li>
                                   <li><a href="24775">变</a></li>
                                   <li><a href="24787">咗</a></li>
                                   <li><a href="24788">咘</a></li>
                                   <li><a href="24789">咚</a></li>
                                   <li><a href="24790">咛</a></li>
                                   <li><a href="24791">咝</a></li>
                                   <li><a href="24970">图</a></li>
                                   <li><a href="24979">坠</a></li>
                                   <li><a href="24980">垆</a></li>
                                   <li><a href="24981">垇</a></li>
                                   <li><a href="24982">垊</a></li>
                                   <li><a href="25032">奍</a></li>
                                   <li><a href="25039">姗</a></li>
                                   <li><a href="25087">孧</a></li>
                                   <li><a href="25090">审</a></li>
                                   <li><a href="25115">岿</a></li>
                                   <li><a href="25116">峁</a></li>
                                   <li><a href="25117">峂</a></li>
                                   <li><a href="25118">峃</a></li>
                                   <li><a href="25209">帜</a></li>
                                   <li><a href="25217">废</a></li>
                                   <li><a href="25221">弪</a></li>
                                   <li><a href="25233">态</a></li>
                                   <li><a href="25234">怂</a></li>
                                   <li><a href="25240">怽</a></li>
                                   <li><a href="25241">怾</a></li>
                                   <li><a href="25271">拀</a></li>
                                   <li><a href="25272">拁</a></li>
                                   <li><a href="25274">拤</a></li>
                                   <li><a href="25275">拥</a></li>
                                   <li><a href="25276">拦</a></li>
                                   <li><a href="25277">拧</a></li>
                                   <li><a href="25278">拨</a></li>
                                   <li><a href="25371">枤</a></li>
                                   <li><a href="25372">枥</a></li>
                                   <li><a href="25373">枪</a></li>
                                   <li><a href="25513">泸</a></li>
                                   <li><a href="25514">泹</a></li>
                                   <li><a href="25516">泼</a></li>
                                   <li><a href="25518">泾</a></li>
                                   <li><a href="25528">际</a></li>
                                   <li><a href="25541">陆</a></li>
                                   <li><a href="25543">陉</a></li>
                                   <li><a href="25610">炝</a></li>
                                   <li><a href="25611">炞</a></li>
                                   <li><a href="25771">狝</a></li>
                                   <li><a href="25772">狞</a></li>
                                   <li><a href="25788">环</a></li>
                                   <li><a href="25789">玱</a></li>
                                   <li><a href="25800">甙</a></li>
                                   <li><a href="25807">疟</a></li>
                                   <li><a href="25829">癷</a></li>
                                   <li><a href="25847">矾</a></li>
                                   <li><a href="25848">矿</a></li>
                                   <li><a href="25849">砀</a></li>
                                   <li><a href="25908">祂</a></li>
                                   <li><a href="25970">籶</a></li>
                                   <li><a href="25995">糿</a></li>
                                   <li><a href="26271">罖</a></li>
                                   <li><a href="26294">肃</a></li>
                                   <li><a href="26297">肼</a></li>
                                   <li><a href="26298">肽</a></li>
                                   <li><a href="26300">肿</a></li>
                                   <li><a href="26335">艰</a></li>
                                   <li><a href="26351">茐</a></li>
                                   <li><a href="26353">茓</a></li>
                                   <li><a href="26354">茔</a></li>
                                   <li><a href="26355">茕</a></li>
                                   <li><a href="26392">㑏</a></li>
                                   <li><a href="26393">㑕</a></li>
                                   <li><a href="26394">㑖</a></li>
                                   <li><a href="26411">㒬</a></li>
                                   <li><a href="26483">㓍</a></li>
                                   <li><a href="26485">㓦</a></li>
                                   <li><a href="26492">㔛</a></li>
                                   <li><a href="26519">㕷</a></li>
                                   <li><a href="26520">㕿</a></li>
                                   <li><a href="26527">虏</a></li>
                                   <li><a href="26529">虲</a></li>
                                   <li><a href="26559">衬</a></li>
                                   <li><a href="26633">㘵</a></li>
                                   <li><a href="26831">㛀</a></li>
                                   <li><a href="26905">㟂</a></li>
                                   <li><a href="26936">迖</a></li>
                                   <li><a href="26937">进</a></li>
                                   <li><a href="26939">远</a></li>
                                   <li><a href="26944">㢠</a></li>
                                   <li><a href="26948">㢱</a></li>
                                   <li><a href="26967">邺</a></li>
                                   <li><a href="26968">邻</a></li>
                                   <li><a href="27100">㤘</a></li>
                                   <li><a href="27141">㧚</a></li>
                                   <li><a href="27144">㧜</a></li>
                                   <li><a href="27147">㧟</a></li>
                                   <li><a href="27150">㧠</a></li>
                                   <li><a href="27209">㭍</a></li>
                                   <li><a href="27210">㭎</a></li>
                                   <li><a href="27211">㭐</a></li>
                                   <li><a href="27280">㲐</a></li>
                                   <li><a href="27281">㲑</a></li>
                                   <li><a href="27289">㳓</a></li>
                                   <li><a href="27290">㳔</a></li>
                                   <li><a href="27291">㳕</a></li>
                                   <li><a href="27332">㶩</a></li>
                                   <li><a href="27333">㶪</a></li>
                                   <li><a href="27358">㸓</a></li>
                                   <li><a href="27361">㹩</a></li>
                                   <li><a href="27362">㹪</a></li>
                                   <li><a href="27371">㺵</a></li>
                                   <li><a href="27372">㺶</a></li>
                                   <li><a href="27373">㺻</a></li>
                                   <li><a href="27484">䢺</a></li>
                                   <li><a href="27488">䢏</a></li>
                                   <li><a href="27563">䒯</a></li>
                                   <li><a href="27564">䒮</a></li>
                                   <li><a href="27608">䇄</a></li>
                                   <li><a href="27643">䀑</a></li>
                                   <li><a href="27654">㽶</a></li>
                                   <li><a href="27736">𠦚</a></li>
                                   <li><a href="27740">𠩍</a></li>
                                   <li><a href="27750">𠈓</a></li>
                                   <li><a href="27794">𪫧</a></li>
                                   <li><a href="27822">𡶡</a></li>
                                   <li><a href="27823">𡶜</a></li>
                                   <li><a href="27824">𡶒</a></li>
                                   <li><a href="27832">𢌞</a></li>
                                   <li><a href="27852">𣏤</a></li>
                                   <li><a href="27853">𣏕</a></li>
                                   <li><a href="27855">𣏚</a></li>
                                   <li><a href="27856">𣏟</a></li>
                                   <li><a href="27894">𤘩</a></li>
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