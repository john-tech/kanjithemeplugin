<?php
/*
 * Template Name: kakusu20
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
               <h1 class="ttl_main">２０画の漢字一覧（漢検級順）</h1>

               <p>総画数２０画の漢字の一覧です。<br>
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
                                   <option value="kakusu19">１９画</option>
                                   <option value="#" selected>２０画</option>
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
                              <li><a href="bkakusu20">部首別順</a></li>
                              <li><a href="ckakusu20">読み順</a></li>
                         </ul>
                         <ul class="search_menu2">
                              <li><a href="#parts07">７級</a></li>
                              <li><a href="#parts06">６級</a></li>
                              <li><a href="#parts04">４級</a></li>
                              <li><a href="#parts03">３級</a></li>
                              <li><a href="#parts02j">準２級</a></li>
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
                                   <li><a class="color1" href="kanji/476">議</a></li>
                                   <li><a class="color1" href="kanji/484">競</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts06">
                              <h3 class="ttl_while"><a href="kyu06">漢字検定６級（小学校５年生）</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="695">護</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts04">
                              <h3 class="ttl_while"><a href="kyu04">漢字検定４級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1067">響</a>
                                   </li>
                                   <li><a class="color1" href="1301">欄</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts03">
                              <h3 class="ttl_while"><a href="kyu03">漢字検定３級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1441">鐘</a>
                                   </li>
                                   <li><a class="color1" href="1446">譲</a>
                                   </li>
                                   <li><a class="color1" href="1470">籍</a>
                                   </li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts02j">
                              <h3 class="ttl_while"><a href="kyu02j">漢字検定準２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1678">懸</a>
                                   </li>
                                   <li><a class="color1" href="1759">醸</a>
                                   </li>
                                   <li><a class="color1" href="1842">騰</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01j">
                              <h3 class="ttl_while"><a href="kyu01j">漢字検定準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="2245">鰐</a></li>
                                   <li><a href="2256">灌</a></li>
                                   <li><a class="color2" href="2266">巌</a>
                                   </li>
                                   <li><a class="color2" href="2325">馨</a>
                                   </li>
                                   <li><a class="color2" href="2455">纂</a>
                                   </li>
                                   <li><a href="2522">鰍</a></li>
                                   <li><a href="2800">鐙</a></li>
                                   <li><a class="color2" href="2956">耀</a>
                                   </li>
                                   <li><a href="3002">蠣</a></li>
                                   <li><a href="5656">礦</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01">
                              <h3 class="ttl_while"><a href="kyu01">漢字検定１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="3316">嚶</a></li>
                                   <li><a href="3416">孅</a></li>
                                   <li><a href="3417">孀</a></li>
                                   <li><a href="3479">巉</a></li>
                                   <li><a href="3636">懺</a></li>
                                   <li><a href="3639">懽</a></li>
                                   <li><a href="3741">攘</a></li>
                                   <li><a href="3755">黥</a></li>
                                   <li><a href="3765">齣</a></li>
                                   <li><a href="3766">齟</a></li>
                                   <li><a href="3767">齠</a></li>
                                   <li><a href="3822">鶚</a></li>
                                   <li><a href="3823">鶤</a></li>
                                   <li><a href="3824">鶫</a></li>
                                   <li><a href="3825">鶩</a></li>
                                   <li><a href="3876">鰓</a></li>
                                   <li><a href="3877">鰉</a></li>
                                   <li><a href="3878">鰔</a></li>
                                   <li><a href="3879">鰕</a></li>
                                   <li><a href="3880">鰌</a></li>
                                   <li><a href="3881">鰈</a></li>
                                   <li><a href="3882">鰆</a></li>
                                   <li><a href="3883">鰒</a></li>
                                   <li><a href="3884">鰊</a></li>
                                   <li><a href="3885">鰄</a></li>
                                   <li><a href="3887">鰛</a></li>
                                   <li><a href="3899">朧</a></li>
                                   <li><a href="3925">曦</a></li>
                                   <li><a href="3969">闡</a></li>
                                   <li><a href="3977">罌</a></li>
                                   <li><a href="3994">霰</a></li>
                                   <li><a href="4109">蠕</a></li>
                                   <li><a href="4110">蠑</a></li>
                                   <li><a href="4194">蘗</a></li>
                                   <li><a href="4207">櫨</a></li>
                                   <li><a href="4208">櫪</a></li>
                                   <li><a href="4209">蘖</a></li>
                                   <li><a href="4290">躅</a></li>
                                   <li><a href="4291">躄</a></li>
                                   <li><a href="4292">躁</a></li>
                                   <li><a href="4305">鹹</a></li>
                                   <li><a href="4315">臙</a></li>
                                   <li><a href="4317">臚</a></li>
                                   <li><a href="4355">韜</a></li>
                                   <li><a href="4368">飄</a></li>
                                   <li><a href="4454">瀾</a></li>
                                   <li><a href="4455">瀲</a></li>
                                   <li><a href="4456">瀰</a></li>
                                   <li><a href="4483">轗</a></li>
                                   <li><a href="4504">騫</a></li>
                                   <li><a href="4508">驀</a></li>
                                   <li><a href="4598">簪</a></li>
                                   <li><a href="4603">籌</a></li>
                                   <li><a href="4639">瓏</a></li>
                                   <li><a href="4680">礫</a></li>
                                   <li><a href="4681">礬</a></li>
                                   <li><a href="4726">鐚</a></li>
                                   <li><a href="4727">鏗</a></li>
                                   <li><a href="4728">鐔</a></li>
                                   <li><a href="4729">鐃</a></li>
                                   <li><a href="4730">鐐</a></li>
                                   <li><a href="4731">鐓</a></li>
                                   <li><a href="4813">繽</a></li>
                                   <li><a href="4814">纃</a></li>
                                   <li><a href="4815">辮</a></li>
                                   <li><a href="4816">繻</a></li>
                                   <li><a href="4850">醵</a></li>
                                   <li><a href="4851">醴</a></li>
                                   <li><a href="4975">瓣</a></li>
                                   <li><a href="5008">譫</a></li>
                                   <li><a href="5009">譬</a></li>
                                   <li><a href="5010">譟</a></li>
                                   <li><a href="5069">襭</a></li>
                                   <li><a href="5070">襤</a></li>
                                   <li><a href="5176">矍</a></li>
                                   <li><a href="5253">癢</a></li>
                                   <li><a href="5274">糯</a></li>
                                   <li><a href="5275">糲</a></li>
                                   <li><a href="5292">饉</a></li>
                                   <li><a href="5293">饅</a></li>
                                   <li><a href="5446">蘚</a></li>
                                   <li><a href="5493">贍</a></li>
                                   <li><a href="5494">贏</a></li>
                                   <li><a href="5570">蘯</a></li>
                                   <li><a href="5624">竇</a></li>
                                   <li><a href="6135">壥</a></li>
                                   <li><a href="6494">鶪</a></li>
                                   <li><a href="6497">櫱</a></li>
                                   <li><a href="6533">躃</a></li>
                                   <li><a href="6630">鼯</a></li>
                                   <li><a href="6758">騭</a></li>
                                   <li><a href="7008">鰚</a></li>
                                   <li><a href="7012">鰘</a></li>
                                   <li><a href="7354">韞</a></li>
                                   <li><a href="9985">衊</a></li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts0101j">
                              <h3 class="ttl_while"><a href="kyu0101j">漢字検定１級 / 準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="5700">譯</a></li>
                                   <li><a href="5766">壤</a></li>
                                   <li><a href="5781">齡</a></li>
                                   <li><a href="5830">繼</a></li>
                                   <li><a href="5834">黨</a></li>
                                   <li><a href="5856">獻</a></li>
                                   <li><a href="6043">覺</a></li>
                                   <li><a href="6119">寶</a></li>
                                   <li><a href="6138">鬪</a></li>
                                   <li><a class="color2" href="6147">嚴</a>
                                   </li>
                                   <li><a class="color2" href="6162">孃</a>
                                   </li>
                                   <li><a href="6246">爐</a></li>
                                   <li><a href="6250">犧</a></li>
                                   <li><a href="6315">觸</a></li>
                                   <li><a href="6317">譽</a></li>
                                   <li><a href="6336">釋</a></li>
                                   <li><a class="color2" href="6350">騷</a>
                                   </li>
                                   <li><a href="6528">麵</a></li>
                                   <li><a href="27689">蘭</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts">
                              <h3 class="ttl_while">漢字検定対象外</h3>
                              <ul class="search_parts">
                                   <li><a href="5679">鐡</a></li>
                                   <li><a href="5851">聹</a></li>
                                   <li><a href="5853">籏</a></li>
                                   <li><a href="5982">蘰</a></li>
                                   <li><a href="5998">鐇</a></li>
                                   <li><a href="6178">廰</a></li>
                                   <li><a href="6279">譱</a></li>
                                   <li><a href="6329">軆</a></li>
                                   <li><a href="6349">飃</a></li>
                                   <li><a href="6554">黤</a></li>
                                   <li><a href="6555">黦</a></li>
                                   <li><a href="6557">黧</a></li>
                                   <li><a href="6631">鼮</a></li>
                                   <li><a href="6666">䶗</a></li>
                                   <li><a href="6667">齞</a></li>
                                   <li><a href="6669">齚</a></li>
                                   <li><a href="6683">龑</a></li>
                                   <li><a href="6739">騮</a></li>
                                   <li><a href="6757">騱</a></li>
                                   <li><a href="6759">騶</a></li>
                                   <li><a href="6760">騳</a></li>
                                   <li><a href="6770">驊</a></li>
                                   <li><a href="6804">髇</a></li>
                                   <li><a href="6805">髊</a></li>
                                   <li><a href="6806">髆</a></li>
                                   <li><a href="6846">鬐</a></li>
                                   <li><a href="6847">鬒</a></li>
                                   <li><a href="6848">鬑</a></li>
                                   <li><a href="6914">鯹</a></li>
                                   <li><a href="6935">䱭</a></li>
                                   <li><a href="6951">鰀</a></li>
                                   <li><a href="6995">鰋</a></li>
                                   <li><a href="6996">鰅</a></li>
                                   <li><a href="6997">鯸</a></li>
                                   <li><a href="6998">鯶</a></li>
                                   <li><a href="7000">鰇</a></li>
                                   <li><a href="7001">鯺</a></li>
                                   <li><a href="7002">鯽</a></li>
                                   <li><a href="7003">鯼</a></li>
                                   <li><a href="7004">鰂</a></li>
                                   <li><a href="7005">鰖</a></li>
                                   <li><a href="7006">鯷</a></li>
                                   <li><a href="7007">䱱</a></li>
                                   <li><a href="7009">鰏</a></li>
                                   <li><a href="7010">鯾</a></li>
                                   <li><a href="7011">鯿</a></li>
                                   <li><a href="7013">鰑</a></li>
                                   <li><a href="7023">鰦</a></li>
                                   <li><a href="7124">鶘</a></li>
                                   <li><a href="7144">鶕</a></li>
                                   <li><a href="7156">鶢</a></li>
                                   <li><a href="7176">鶡</a></li>
                                   <li><a href="7177">鶖</a></li>
                                   <li><a href="7178">鶒</a></li>
                                   <li><a href="7181">鶙</a></li>
                                   <li><a href="7182">鶗</a></li>
                                   <li><a href="7183">鶥</a></li>
                                   <li><a href="7192">鶿</a></li>
                                   <li><a href="7193">鷀</a></li>
                                   <li><a href="7254">麚</a></li>
                                   <li><a href="7255">麙</a></li>
                                   <li><a href="7256">麘</a></li>
                                   <li><a href="7257">麛</a></li>
                                   <li><a href="7321">韝</a></li>
                                   <li><a href="7323">鞹</a></li>
                                   <li><a href="7325">鞺</a></li>
                                   <li><a href="7356">韛</a></li>
                                   <li><a href="7358">鞸</a></li>
                                   <li><a href="7359">韡</a></li>
                                   <li><a href="7418">顣</a></li>
                                   <li><a href="7419">顢</a></li>
                                   <li><a href="7445">飂</a></li>
                                   <li><a href="7500">饇</a></li>
                                   <li><a href="7501">饈</a></li>
                                   <li><a href="7502">饆</a></li>
                                   <li><a href="7773">鐂</a></li>
                                   <li><a href="7802">鐦</a></li>
                                   <li><a href="7803">鐗</a></li>
                                   <li><a href="7804">鐧</a></li>
                                   <li><a href="7805">鐖</a></li>
                                   <li><a href="7806">鐈</a></li>
                                   <li><a href="7807">鏸</a></li>
                                   <li><a href="7808">鐍</a></li>
                                   <li><a href="7809">鐝</a></li>
                                   <li><a href="7810">鐄</a></li>
                                   <li><a href="7812">鐟</a></li>
                                   <li><a href="7813">鐁</a></li>
                                   <li><a href="7814">鐎</a></li>
                                   <li><a href="7815">鐉</a></li>
                                   <li><a href="7816">鐏</a></li>
                                   <li><a href="7817">鐜</a></li>
                                   <li><a href="7818">鏺</a></li>
                                   <li><a href="7819">鐨</a></li>
                                   <li><a href="7820">鐠</a></li>
                                   <li><a href="7821">鏷</a></li>
                                   <li><a href="7823">鐒</a></li>
                                   <li><a href="7832">鐯</a></li>
                                   <li><a href="7903">䦱</a></li>
                                   <li><a href="7904">闠</a></li>
                                   <li><a href="7905">闞</a></li>
                                   <li><a href="7906">闟</a></li>
                                   <li><a href="8019">霱</a></li>
                                   <li><a href="8020">霳</a></li>
                                   <li><a href="8051">覻</a></li>
                                   <li><a href="8078">觹</a></li>
                                   <li><a href="8206">譩</a></li>
                                   <li><a href="8207">譭</a></li>
                                   <li><a href="8208">譞</a></li>
                                   <li><a href="8209">譣</a></li>
                                   <li><a href="8210">譍</a></li>
                                   <li><a href="8250">豑</a></li>
                                   <li><a href="8356">趮</a></li>
                                   <li><a href="8446">躆</a></li>
                                   <li><a href="8447">躂</a></li>
                                   <li><a href="8459">蹸</a></li>
                                   <li><a href="8529">轝</a></li>
                                   <li><a href="8535">轔</a></li>
                                   <li><a href="8538">轘</a></li>
                                   <li><a href="8539">轚</a></li>
                                   <li><a href="8540">轖</a></li>
                                   <li><a href="8552">䢉</a></li>
                                   <li><a href="8720">酃</a></li>
                                   <li><a href="8768">醳</a></li>
                                   <li><a href="8769">醶</a></li>
                                   <li><a href="8770">醲</a></li>
                                   <li><a href="8777">舋</a></li>
                                   <li><a href="8869">㰏</a></li>
                                   <li><a href="8923">籋</a></li>
                                   <li><a href="8925">籊</a></li>
                                   <li><a href="8987">糰</a></li>
                                   <li><a href="9133">蠒</a></li>
                                   <li><a href="9144">纁</a></li>
                                   <li><a href="9146">繾</a></li>
                                   <li><a href="9246">翿</a></li>
                                   <li><a href="9291">聻</a></li>
                                   <li><a href="9500">蘜</a></li>
                                   <li><a href="9724">蘛</a></li>
                                   <li><a href="9725">蘡</a></li>
                                   <li><a href="9726">蘙</a></li>
                                   <li><a href="9727">蘤</a></li>
                                   <li><a href="9728">蘧</a></li>
                                   <li><a href="9729">蘘</a></li>
                                   <li><a href="9730">蘩</a></li>
                                   <li><a href="9731">䕷</a></li>
                                   <li><a href="9732">蘦</a></li>
                                   <li><a href="9733">蘞</a></li>
                                   <li><a href="9824">䘀</a></li>
                                   <li><a href="9950">蠔</a></li>
                                   <li><a href="9951">蠐</a></li>
                                   <li><a href="9952">蠘</a></li>
                                   <li><a href="9953">蠙</a></li>
                                   <li><a href="9957">蠚</a></li>
                                   <li><a href="9960">蠛</a></li>
                                   <li><a href="10090">襫</a></li>
                                   <li><a href="10091">襬</a></li>
                                   <li><a href="10092">襮</a></li>
                                   <li><a href="10197">瓌</a></li>
                                   <li><a href="10256">瓐</a></li>
                                   <li><a href="10337">疈</a></li>
                                   <li><a href="10451">癤</a></li>
                                   <li><a href="10452">癥</a></li>
                                   <li><a href="10486">皫</a></li>
                                   <li><a href="10487">皪</a></li>
                                   <li><a href="10514">盭</a></li>
                                   <li><a href="10626">䂍</a></li>
                                   <li><a href="10762">礛</a></li>
                                   <li><a href="10763">礩</a></li>
                                   <li><a href="10764">礧</a></li>
                                   <li><a href="10765">礨</a></li>
                                   <li><a href="10896">穬</a></li>
                                   <li><a href="10897">穮</a></li>
                                   <li><a href="10898">穭</a></li>
                                   <li><a href="11019">㦤</a></li>
                                   <li><a href="11215">懹</a></li>
                                   <li><a href="11522">攖</a></li>
                                   <li><a href="11524">攓</a></li>
                                   <li><a href="11525">攙</a></li>
                                   <li><a href="11526">攕</a></li>
                                   <li><a href="11527">攔</a></li>
                                   <li><a href="11528">㩮</a></li>
                                   <li><a href="11573">斅</a></li>
                                   <li><a href="11737">曣</a></li>
                                   <li><a href="11739">曨</a></li>
                                   <li><a href="11889">髈</a></li>
                                   <li><a href="11908">㸋</a></li>
                                   <li><a href="11927">臛</a></li>
                                   <li><a href="12277">㰎</a></li>
                                   <li><a href="12306">櫰</a></li>
                                   <li><a href="12307">櫧</a></li>
                                   <li><a href="12308">櫬</a></li>
                                   <li><a href="12309">櫲</a></li>
                                   <li><a href="12310">櫳</a></li>
                                   <li><a href="12311">㰍</a></li>
                                   <li><a href="12315">欂</a></li>
                                   <li><a href="12475">嚳</a></li>
                                   <li><a href="12727">䳨</a></li>
                                   <li><a href="13110">儶</a></li>
                                   <li><a href="13169">匷</a></li>
                                   <li><a href="13584">嚱</a></li>
                                   <li><a href="13585">嚲</a></li>
                                   <li><a href="13586">嚵</a></li>
                                   <li><a href="13587">嚷</a></li>
                                   <li><a href="13590">嚾</a></li>
                                   <li><a href="13591">嚿</a></li>
                                   <li><a href="13885">壣</a></li>
                                   <li><a href="13886">壦</a></li>
                                   <li><a href="14259">孁</a></li>
                                   <li><a href="14260">孂</a></li>
                                   <li><a href="14261">孄</a></li>
                                   <li><a href="14262">孆</a></li>
                                   <li><a href="14265">孉</a></li>
                                   <li><a href="14283">孾</a></li>
                                   <li><a href="14587">巆</a></li>
                                   <li><a href="14588">巇</a></li>
                                   <li><a href="14589">巈</a></li>
                                   <li><a href="14590">巊</a></li>
                                   <li><a href="14593">巏</a></li>
                                   <li><a href="14663">幱</a></li>
                                   <li><a href="14716">廮</a></li>
                                   <li><a href="14717">廯</a></li>
                                   <li><a href="14794">忀</a></li>
                                   <li><a href="14795">忁</a></li>
                                   <li><a href="15050">攗</a></li>
                                   <li><a href="15072">斆</a></li>
                                   <li><a href="15127">曤</a></li>
                                   <li><a href="15128">曥</a></li>
                                   <li><a href="15129">曧</a></li>
                                   <li><a href="15323">櫩</a></li>
                                   <li><a href="15324">櫫</a></li>
                                   <li><a href="15326">櫮</a></li>
                                   <li><a href="15327">櫯</a></li>
                                   <li><a href="15328">櫴</a></li>
                                   <li><a href="15329">櫶</a></li>
                                   <li><a href="15330">櫹</a></li>
                                   <li><a href="15951">瀪</a></li>
                                   <li><a href="15953">瀯</a></li>
                                   <li><a href="15954">瀱</a></li>
                                   <li><a href="15956">瀴</a></li>
                                   <li><a href="15957">瀵</a></li>
                                   <li><a href="15959">瀸</a></li>
                                   <li><a href="15960">瀹</a></li>
                                   <li><a href="15961">瀺</a></li>
                                   <li><a href="15962">瀻</a></li>
                                   <li><a href="15963">瀼</a></li>
                                   <li><a href="15964">瀽</a></li>
                                   <li><a href="15965">瀿</a></li>
                                   <li><a href="15966">灀</a></li>
                                   <li><a href="16255">爋</a></li>
                                   <li><a href="16257">爏</a></li>
                                   <li><a href="16259">爒</a></li>
                                   <li><a href="16260">爓</a></li>
                                   <li><a href="16261">爔</a></li>
                                   <li><a href="16263">爖</a></li>
                                   <li><a href="16341">犨</a></li>
                                   <li><a href="16465">獼</a></li>
                                   <li><a href="16466">獽</a></li>
                                   <li><a href="16467">獾</a></li>
                                   <li><a href="16568">瓍</a></li>
                                   <li><a href="16569">瓎</a></li>
                                   <li><a href="16570">瓑</a></li>
                                   <li><a href="16630">皾</a></li>
                                   <li><a href="16701">矏</a></li>
                                   <li><a href="16708">矲</a></li>
                                   <li><a href="16939">籄</a></li>
                                   <li><a href="16940">籇</a></li>
                                   <li><a href="16941">籈</a></li>
                                   <li><a href="16942">籉</a></li>
                                   <li><a href="16943">籕</a></li>
                                   <li><a href="16972">糣</a></li>
                                   <li><a href="17049">纀</a></li>
                                   <li><a href="17074">羺</a></li>
                                   <li><a href="17124">聺</a></li>
                                   <li><a href="17181">臔</a></li>
                                   <li><a href="17197">艩</a></li>
                                   <li><a href="17385">蘌</a></li>
                                   <li><a href="17387">蘕</a></li>
                                   <li><a href="17388">蘟</a></li>
                                   <li><a href="17389">蘠</a></li>
                                   <li><a href="17390">蘣</a></li>
                                   <li><a href="17391">蘥</a></li>
                                   <li><a href="17392">蘨</a></li>
                                   <li><a href="17393">蘪</a></li>
                                   <li><a href="17396">蘮</a></li>
                                   <li><a href="17517">蠗</a></li>
                                   <li><a href="17597">襩</a></li>
                                   <li><a href="17615">覹</a></li>
                                   <li><a href="17628">觷</a></li>
                                   <li><a href="17716">譝</a></li>
                                   <li><a href="17717">譠</a></li>
                                   <li><a href="17718">譢</a></li>
                                   <li><a href="17719">譤</a></li>
                                   <li><a href="17720">譥</a></li>
                                   <li><a href="17721">譧</a></li>
                                   <li><a href="17722">譨</a></li>
                                   <li><a href="17723">譮</a></li>
                                   <li><a href="17857">躈</a></li>
                                   <li><a href="17907">轙</a></li>
                                   <li><a href="17974">酁</a></li>
                                   <li><a href="17975">酄</a></li>
                                   <li><a href="18118">鏶</a></li>
                                   <li><a href="18119">鏼</a></li>
                                   <li><a href="18120">鏾</a></li>
                                   <li><a href="18121">鏿</a></li>
                                   <li><a href="18122">鐀</a></li>
                                   <li><a href="18123">鐅</a></li>
                                   <li><a href="18124">鐆</a></li>
                                   <li><a href="18125">鐊</a></li>
                                   <li><a href="18126">鐋</a></li>
                                   <li><a href="18127">鐌</a></li>
                                   <li><a href="18128">鐑</a></li>
                                   <li><a href="18129">鐞</a></li>
                                   <li><a href="18130">鐥</a></li>
                                   <li><a href="18135">鐷</a></li>
                                   <li><a href="18136">鐼</a></li>
                                   <li><a href="18207">隵</a></li>
                                   <li><a href="18236">霮</a></li>
                                   <li><a href="18237">霯</a></li>
                                   <li><a href="18238">霴</a></li>
                                   <li><a href="18262">鞻</a></li>
                                   <li><a href="18272">韼</a></li>
                                   <li><a href="18273">韽</a></li>
                                   <li><a href="18274">韾</a></li>
                                   <li><a href="18291">顟</a></li>
                                   <li><a href="18292">顠</a></li>
                                   <li><a href="18293">顡</a></li>
                                   <li><a href="18304">飁</a></li>
                                   <li><a href="18372">騩</a></li>
                                   <li><a href="18373">騪</a></li>
                                   <li><a href="18374">騬</a></li>
                                   <li><a href="18376">騴</a></li>
                                   <li><a href="18377">騵</a></li>
                                   <li><a href="18378">騸</a></li>
                                   <li><a href="18396">髉</a></li>
                                   <li><a href="18403">鬕</a></li>
                                   <li><a href="18409">鬸</a></li>
                                   <li><a href="18412">魐</a></li>
                                   <li><a href="18445">鯻</a></li>
                                   <li><a href="18446">鰁</a></li>
                                   <li><a href="18447">鰃</a></li>
                                   <li><a href="18448">鰎</a></li>
                                   <li><a href="18449">鰗</a></li>
                                   <li><a href="18514">鶐</a></li>
                                   <li><a href="18515">鶔</a></li>
                                   <li><a href="18516">鶛</a></li>
                                   <li><a href="18518">鶝</a></li>
                                   <li><a href="18519">鶞</a></li>
                                   <li><a href="18520">鶟</a></li>
                                   <li><a href="18521">鶠</a></li>
                                   <li><a href="18522">鶣</a></li>
                                   <li><a href="18523">鶦</a></li>
                                   <li><a href="18525">鶨</a></li>
                                   <li><a href="18574">黁</a></li>
                                   <li><a href="18595">鼰</a></li>
                                   <li><a href="18602">齙</a></li>
                                   <li><a href="18603">齛</a></li>
                                   <li><a href="18605">齝</a></li>
                                   <li><a href="18744">㒤</a></li>
                                   <li><a href="18745">㒥</a></li>
                                   <li><a href="18746">㒦</a></li>
                                   <li><a href="18757">㒹</a></li>
                                   <li><a href="18816">㔒</a></li>
                                   <li><a href="19020">㘓</a></li>
                                   <li><a href="19032">㘥</a></li>
                                   <li><a href="19099">㚀</a></li>
                                   <li><a href="19244">㜶</a></li>
                                   <li><a href="19245">㜷</a></li>
                                   <li><a href="19296">㝱</a></li>
                                   <li><a href="19499">㡧</a></li>
                                   <li><a href="19500">㡨</a></li>
                                   <li><a href="19548">㢞</a></li>
                                   <li><a href="19736">㦣</a></li>
                                   <li><a href="19739">㦨</a></li>
                                   <li><a href="19740">㦩</a></li>
                                   <li><a href="19741">㦪</a></li>
                                   <li><a href="19879">㩯</a></li>
                                   <li><a href="19882">㩲</a></li>
                                   <li><a href="19929">㪭</a></li>
                                   <li><a href="20010">㬫</a></li>
                                   <li><a href="20158">㰉</a></li>
                                   <li><a href="20159">㰊</a></li>
                                   <li><a href="20160">㰋</a></li>
                                   <li><a href="20161">㰌</a></li>
                                   <li><a href="20162">㰐</a></li>
                                   <li><a href="20163">㰑</a></li>
                                   <li><a href="20164">㰒</a></li>
                                   <li><a href="20167">㰕</a></li>
                                   <li><a href="20215">㱋</a></li>
                                   <li><a href="20249">㱹</a></li>
                                   <li><a href="20250">㱺</a></li>
                                   <li><a href="20460">㶌</a></li>
                                   <li><a href="20461">㶍</a></li>
                                   <li><a href="20462">㶎</a></li>
                                   <li><a href="20463">㶏</a></li>
                                   <li><a href="20546">㸈</a></li>
                                   <li><a href="20548">㸊</a></li>
                                   <li><a href="20684">㺠</a></li>
                                   <li><a href="20686">㺣</a></li>
                                   <li><a href="20687">㺤</a></li>
                                   <li><a href="20688">㺥</a></li>
                                   <li><a href="20749">㼇</a></li>
                                   <li><a href="20807">㽉</a></li>
                                   <li><a href="20835">㽮</a></li>
                                   <li><a href="20945">㿺</a></li>
                                   <li><a href="21050">䁻</a></li>
                                   <li><a href="21051">䁼</a></li>
                                   <li><a href="21052">䁽</a></li>
                                   <li><a href="21142">䃱</a></li>
                                   <li><a href="21143">䃲</a></li>
                                   <li><a href="21144">䃳</a></li>
                                   <li><a href="21258">䆉</a></li>
                                   <li><a href="21304">䆾</a></li>
                                   <li><a href="21306">䇀</a></li>
                                   <li><a href="21452">䉥</a></li>
                                   <li><a href="21521">䊭</a></li>
                                   <li><a href="21522">䊮</a></li>
                                   <li><a href="21625">䌣</a></li>
                                   <li><a href="21626">䌤</a></li>
                                   <li><a href="21627">䌥</a></li>
                                   <li><a href="21628">䌦</a></li>
                                   <li><a href="21629">䌧</a></li>
                                   <li><a href="21630">䌨</a></li>
                                   <li><a href="21631">䌩</a></li>
                                   <li><a href="21691">䍼</a></li>
                                   <li><a href="21720">䎙</a></li>
                                   <li><a href="21759">䏉</a></li>
                                   <li><a href="21862">䑉</a></li>
                                   <li><a href="21863">䑊</a></li>
                                   <li><a href="22070">䕫</a></li>
                                   <li><a href="22074">䕯</a></li>
                                   <li><a href="22077">䕳</a></li>
                                   <li><a href="22078">䕴</a></li>
                                   <li><a href="22079">䕵</a></li>
                                   <li><a href="22107">䖜</a></li>
                                   <li><a href="22178">䗼</a></li>
                                   <li><a href="22179">䗽</a></li>
                                   <li><a href="22180">䗾</a></li>
                                   <li><a href="22181">䗿</a></li>
                                   <li><a href="22182">䘁</a></li>
                                   <li><a href="22198">䘙</a></li>
                                   <li><a href="22290">䚏</a></li>
                                   <li><a href="22314">䚪</a></li>
                                   <li><a href="22315">䚫</a></li>
                                   <li><a href="22404">䜒</a></li>
                                   <li><a href="22407">䜗</a></li>
                                   <li><a href="22543">䟈</a></li>
                                   <li><a href="22544">䟉</a></li>
                                   <li><a href="22545">䟊</a></li>
                                   <li><a href="22546">䟋</a></li>
                                   <li><a href="22626">䠨</a></li>
                                   <li><a href="22627">䠩</a></li>
                                   <li><a href="22647">䡀</a></li>
                                   <li><a href="22694">䡶</a></li>
                                   <li><a href="22695">䡷</a></li>
                                   <li><a href="22701">䢄</a></li>
                                   <li><a href="22704">䢈</a></li>
                                   <li><a href="22817">䤓</a></li>
                                   <li><a href="22870">䥏</a></li>
                                   <li><a href="22873">䥔</a></li>
                                   <li><a href="22874">䥕</a></li>
                                   <li><a href="22875">䥖</a></li>
                                   <li><a href="22876">䥗</a></li>
                                   <li><a href="22877">䥘</a></li>
                                   <li><a href="22878">䥙</a></li>
                                   <li><a href="22879">䥚</a></li>
                                   <li><a href="22880">䥛</a></li>
                                   <li><a href="22882">䥟</a></li>
                                   <li><a href="22883">䥠</a></li>
                                   <li><a href="22940">䦳</a></li>
                                   <li><a href="22987">䧯</a></li>
                                   <li><a href="23004">䨅</a></li>
                                   <li><a href="23005">䨆</a></li>
                                   <li><a href="23006">䨇</a></li>
                                   <li><a href="23040">䨰</a></li>
                                   <li><a href="23041">䨱</a></li>
                                   <li><a href="23055">䩁</a></li>
                                   <li><a href="23063">䩋</a></li>
                                   <li><a href="23105">䩼</a></li>
                                   <li><a href="23106">䩽</a></li>
                                   <li><a href="23107">䩾</a></li>
                                   <li><a href="23129">䪙</a></li>
                                   <li><a href="23130">䪚</a></li>
                                   <li><a href="23134">䪣</a></li>
                                   <li><a href="23192">䫨</a></li>
                                   <li><a href="23193">䫩</a></li>
                                   <li><a href="23194">䫪</a></li>
                                   <li><a href="23195">䫫</a></li>
                                   <li><a href="23239">䬛</a></li>
                                   <li><a href="23240">䬜</a></li>
                                   <li><a href="23275">䭕</a></li>
                                   <li><a href="23276">䭖</a></li>
                                   <li><a href="23277">䭗</a></li>
                                   <li><a href="23344">䮣</a></li>
                                   <li><a href="23345">䮤</a></li>
                                   <li><a href="23346">䮥</a></li>
                                   <li><a href="23347">䮦</a></li>
                                   <li><a href="23348">䮧</a></li>
                                   <li><a href="23349">䮨</a></li>
                                   <li><a href="23350">䮩</a></li>
                                   <li><a href="23353">䮬</a></li>
                                   <li><a href="23394">䯡</a></li>
                                   <li><a href="23426">䰈</a></li>
                                   <li><a href="23427">䰉</a></li>
                                   <li><a href="23428">䰊</a></li>
                                   <li><a href="23429">䰋</a></li>
                                   <li><a href="23488">䱫</a></li>
                                   <li><a href="23489">䱬</a></li>
                                   <li><a href="23490">䱮</a></li>
                                   <li><a href="23491">䱯</a></li>
                                   <li><a href="23492">䱰</a></li>
                                   <li><a href="23493">䱲</a></li>
                                   <li><a href="23494">䱳</a></li>
                                   <li><a href="23569">䳦</a></li>
                                   <li><a href="23570">䳧</a></li>
                                   <li><a href="23571">䳩</a></li>
                                   <li><a href="23572">䳪</a></li>
                                   <li><a href="23573">䳫</a></li>
                                   <li><a href="23574">䳬</a></li>
                                   <li><a href="23575">䳭</a></li>
                                   <li><a href="23576">䳮</a></li>
                                   <li><a href="23577">䳯</a></li>
                                   <li><a href="23578">䳰</a></li>
                                   <li><a href="23637">䵈</a></li>
                                   <li><a href="23638">䵉</a></li>
                                   <li><a href="23642">䵍</a></li>
                                   <li><a href="23647">䵔</a></li>
                                   <li><a href="23648">䵕</a></li>
                                   <li><a href="23668">䵪</a></li>
                                   <li><a href="23669">䵫</a></li>
                                   <li><a href="23670">䵬</a></li>
                                   <li><a href="23693">䶍</a></li>
                                   <li><a href="23694">䶎</a></li>
                                   <li><a href="23703">䶘</a></li>
                                   <li><a href="23704">䶙</a></li>
                                   <li><a href="24042">瀷</a></li>
                                   <li><a href="24043">灁</a></li>
                                   <li><a href="24078">矌</a></li>
                                   <li><a href="24103">聼</a></li>
                                   <li><a href="24140">譡</a></li>
                                   <li><a href="24154">邍</a></li>
                                   <li><a href="24157">醷</a></li>
                                   <li><a href="24159">鏳</a></li>
                                   <li><a href="24169">饄</a></li>
                                   <li><a href="24175">騯</a></li>
                                   <li><a href="24315">䕶</a></li>
                                   <li><a href="24329">䚬</a></li>
                                   <li><a href="24335">䡵</a></li>
                                   <li><a href="24372">䶰</a></li>
                                   <li><a href="24963">嚸</a></li>
                                   <li><a href="24964">嚹</a></li>
                                   <li><a href="25347">攚</a></li>
                                   <li><a href="25418">櫸</a></li>
                                   <li><a href="25588">韟</a></li>
                                   <li><a href="25670">爘</a></li>
                                   <li><a href="25826">癦</a></li>
                                   <li><a href="25906">礢</a></li>
                                   <li><a href="25934">穯</a></li>
                                   <li><a href="25967">籂</a></li>
                                   <li><a href="25968">籎</a></li>
                                   <li><a href="25991">糬</a></li>
                                   <li><a href="26022">髌</a></li>
                                   <li><a href="26025">鬓</a></li>
                                   <li><a href="26039">纄</a></li>
                                   <li><a href="26158">黪</a></li>
                                   <li><a href="26232">鼍</a></li>
                                   <li><a href="26521">蘝</a></li>
                                   <li><a href="26621">㘔</a></li>
                                   <li><a href="26921">㠤</a></li>
                                   <li><a href="27095">㣹</a></li>
                                   <li><a href="27159">鐛</a></li>
                                   <li><a href="27163">鐢</a></li>
                                   <li><a href="27165">鐣</a></li>
                                   <li><a href="27326">㶐</a></li>
                                   <li><a href="27327">㶑</a></li>
                                   <li><a href="27357">㸌</a></li>
                                   <li><a href="27368">㺦</a></li>
                                   <li><a href="27415">䱴</a></li>
                                   <li><a href="27420">䰪</a></li>
                                   <li><a href="27473">䥜</a></li>
                                   <li><a href="27495">䡸</a></li>
                                   <li><a href="27507">䞉</a></li>
                                   <li><a href="27517">䜖</a></li>
                                   <li><a href="27518">䜔</a></li>
                                   <li><a href="27620">䄣</a></li>
                                   <li><a href="27647">㿔</a></li>
                                   <li><a href="27684">櫷</a></li>
                                   <li><a href="27744">𧃴</a></li>
                                   <li><a href="27871">𣟿</a></li>
                                   <li><a href="27872">𣟧</a></li>
                                   <li><a href="27887">𩪆</a></li>
                                   <li><a href="27891">𤄃</a></li>
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