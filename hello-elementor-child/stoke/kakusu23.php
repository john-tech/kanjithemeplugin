<?php
/*
 * Template Name: kakusu23
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

<script>
jQuery(document).ready(function ($) {
    console.log("ssss")
 $('#wrapper a').attr('href','#');  
})
		</script>

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
               <h1 class="ttl_main">２３画の漢字一覧（漢検級順）</h1>

               <p>総画数２３画の漢字の一覧です。<br>
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
                                   <option value="kakusu20">２０画</option>
                                   <option value="kakusu21">２１画</option>
                                   <option value="kakusu22">２２画</option>
                                   <option value="#" selected>２３画</option>
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
                              <li><a href="bkakusu23">部首別順</a></li>
                              <li><a href="ckakusu23">読み順</a></li>
                         </ul>
                         <ul class="search_menu2">
                              <li><a href="#parts04">４級</a></li>
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
                         <div class="parts_box" id="parts04">
                              <h3 class="ttl_while"><a href="kyu04">漢字検定４級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1044">鑑</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01j">
                              <h3 class="ttl_while"><a href="kyu01j">漢字検定準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="2241">攪</a></li>
                                   <li><a href="2369">鰹</a></li>
                                   <li><a class="color2" href="2507">鷲</a>
                                   </li>
                                   <li><a class="color2" href="2678">鱒</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01">
                              <h3 class="ttl_while"><a href="kyu01">漢字検定１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="3046">鑒</a></li>
                                   <li><a href="3744">攣</a></li>
                                   <li><a href="3745">攫</a></li>
                                   <li><a href="3757">黴</a></li>
                                   <li><a href="3761">黐</a></li>
                                   <li><a href="3835">鷸</a></li>
                                   <li><a href="3836">鷦</a></li>
                                   <li><a href="3837">鷯</a></li>
                                   <li><a href="3838">鷭</a></li>
                                   <li><a href="3894">鱚</a></li>
                                   <li><a href="4113">蠱</a></li>
                                   <li><a href="4206">欒</a></li>
                                   <li><a href="4299">躙</a></li>
                                   <li><a href="4360">靨</a></li>
                                   <li><a href="4486">轤</a></li>
                                   <li><a href="4608">籥</a></li>
                                   <li><a href="4609">籤</a></li>
                                   <li><a href="4652">鬟</a></li>
                                   <li><a href="4735">鑠</a></li>
                                   <li><a href="4736">鑢</a></li>
                                   <li><a href="4737">鑞</a></li>
                                   <li><a href="4744">鑚</a></li>
                                   <li><a href="4819">纔</a></li>
                                   <li><a href="4820">纓</a></li>
                                   <li><a href="4829">髑</a></li>
                                   <li><a href="5012">讌</a></li>
                                   <li><a href="5013">讐</a></li>
                                   <li><a href="5014">讎</a></li>
                                   <li><a href="5098">韈</a></li>
                                   <li><a href="5259">癰</a></li>
                                   <li><a href="5320">齏</a></li>
                                   <li><a href="5536">邏</a></li>
                                   <li><a href="6637">鼹</a></li>
                                   <li><a href="6774">驎</a></li>
                                   <li><a href="7050">鱛</a></li>
                                   <li><a href="7054">鱏</a></li>
                                   <li><a href="7056">鱓</a></li>
                                   <li><a href="7424">顬</a></li>
                                   <li><a href="11740">曬</a></li>
                                   <li><a href="27708">𬵪</a></li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts0101j">
                              <h3 class="ttl_while"><a href="kyu0101j">漢字検定１級 / 準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="5711">巖</a>
                                   </li>
                                   <li><a href="5726">鑛</a></li>
                                   <li><a href="5764">髓</a></li>
                                   <li><a class="color2" href="5782">顯</a>
                                   </li>
                                   <li><a href="5828">戀</a></li>
                                   <li><a href="5846">罐</a></li>
                                   <li><a class="color2" href="6098">纖</a>
                                   </li>
                                   <li><a href="6203">變</a></li>
                                   <li><a href="6352">驛</a></li>
                                   <li><a class="color2" href="6353">驗</a>
                                   </li>
                                   <li><a href="6354">體</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts">
                              <h3 class="ttl_while">漢字検定対象外</h3>
                              <ul class="search_parts">
                                   <li><a href="6048">轣</a></li>
                                   <li><a href="6355">髞</a></li>
                                   <li><a href="6562">黳</a></li>
                                   <li><a href="6573">鱉</a></li>
                                   <li><a href="6640">鼷</a></li>
                                   <li><a href="6641">鼸</a></li>
                                   <li><a href="6642">䶉</a></li>
                                   <li><a href="6649">齃</a></li>
                                   <li><a href="6653">齄</a></li>
                                   <li><a href="6670">齰</a></li>
                                   <li><a href="6671">齱</a></li>
                                   <li><a href="6672">齭</a></li>
                                   <li><a href="6768">驘</a></li>
                                   <li><a href="6775">驌</a></li>
                                   <li><a href="6776">驖</a></li>
                                   <li><a href="6852">鬠</a></li>
                                   <li><a href="6855">䰒</a></li>
                                   <li><a href="7049">鱊</a></li>
                                   <li><a href="7051">鱎</a></li>
                                   <li><a href="7052">鱖</a></li>
                                   <li><a href="7053">鱑</a></li>
                                   <li><a href="7055">鱘</a></li>
                                   <li><a href="7058">鱔</a></li>
                                   <li><a href="7059">鱍</a></li>
                                   <li><a href="7060">鱕</a></li>
                                   <li><a href="7073">鱝</a></li>
                                   <li><a href="7211">鷧</a></li>
                                   <li><a href="7212">鷣</a></li>
                                   <li><a href="7213">鷰</a></li>
                                   <li><a href="7215">鷴</a></li>
                                   <li><a href="7216">鷳</a></li>
                                   <li><a href="7217">鷮</a></li>
                                   <li><a href="7218">鷢</a></li>
                                   <li><a href="7219">鷥</a></li>
                                   <li><a href="7220">鷩</a></li>
                                   <li><a href="7227">䴅</a></li>
                                   <li><a href="7277">黂</a></li>
                                   <li><a href="7333">韅</a></li>
                                   <li><a href="7335">䪝</a></li>
                                   <li><a href="7360">韣</a></li>
                                   <li><a href="7361">䪜</a></li>
                                   <li><a href="7466">䭣</a></li>
                                   <li><a href="7508">饜</a></li>
                                   <li><a href="7509">䉵</a></li>
                                   <li><a href="7844">鑙</a></li>
                                   <li><a href="7845">鑡</a></li>
                                   <li><a href="7846">鑕</a></li>
                                   <li><a href="7847">鑜</a></li>
                                   <li><a href="7848">鑟</a></li>
                                   <li><a href="7849">鑣</a></li>
                                   <li><a href="7851">鑥</a></li>
                                   <li><a href="7998">靁</a></li>
                                   <li><a href="8079">觽</a></li>
                                   <li><a href="8166">讇</a></li>
                                   <li><a href="8170">讍</a></li>
                                   <li><a href="8222">讏</a></li>
                                   <li><a href="8223">讋</a></li>
                                   <li><a href="8243">豅</a></li>
                                   <li><a href="8330">䞋</a></li>
                                   <li><a href="8457">躛</a></li>
                                   <li><a href="8458">躘</a></li>
                                   <li><a href="8626">邐</a></li>
                                   <li><a href="8772">醼</a></li>
                                   <li><a href="8931">籞</a></li>
                                   <li><a href="8939">籧</a></li>
                                   <li><a href="8940">籣</a></li>
                                   <li><a href="8941">籢</a></li>
                                   <li><a href="9153">纕</a></li>
                                   <li><a href="9155">䌫</a></li>
                                   <li><a href="9193">覉</a></li>
                                   <li><a href="9354">囏</a></li>
                                   <li><a href="9843">蠭</a></li>
                                   <li><a href="9965">蠮</a></li>
                                   <li><a href="9966">蠲</a></li>
                                   <li><a href="9970">蠰</a></li>
                                   <li><a href="9973">蠸</a></li>
                                   <li><a href="10096">襵</a></li>
                                   <li><a href="10098">襼</a></li>
                                   <li><a href="10099">襺</a></li>
                                   <li><a href="10260">瓚</a></li>
                                   <li><a href="10266">瓤</a></li>
                                   <li><a href="10456">癯</a></li>
                                   <li><a href="10489">皭</a></li>
                                   <li><a href="10617">䂃</a></li>
                                   <li><a href="10899">穱</a></li>
                                   <li><a href="11020">戁</a></li>
                                   <li><a href="11218">戄</a></li>
                                   <li><a href="11219">戃</a></li>
                                   <li><a href="11535">攩</a></li>
                                   <li><a href="11741">曫</a></li>
                                   <li><a href="12323">欑</a></li>
                                   <li><a href="12325">欏</a></li>
                                   <li><a href="12327">欐</a></li>
                                   <li><a href="12672">儽</a></li>
                                   <li><a href="12817">劚</a></li>
                                   <li><a href="12818">劙</a></li>
                                   <li><a href="13598">囐</a></li>
                                   <li><a href="13599">囒</a></li>
                                   <li><a href="13887">壧</a></li>
                                   <li><a href="13888">壨</a></li>
                                   <li><a href="14269">孍</a></li>
                                   <li><a href="14271">孏</a></li>
                                   <li><a href="14596">巗</a></li>
                                   <li><a href="14597">巘</a></li>
                                   <li><a href="14598">巚</a></li>
                                   <li><a href="14753">彏</a></li>
                                   <li><a href="15052">攥</a></li>
                                   <li><a href="15130">曪</a></li>
                                   <li><a href="15368">毊</a></li>
                                   <li><a href="15979">灓</a></li>
                                   <li><a href="15983">灙</a></li>
                                   <li><a href="15984">灚</a></li>
                                   <li><a href="15985">灛</a></li>
                                   <li><a href="15990">灡</a></li>
                                   <li><a href="16271">爢</a></li>
                                   <li><a href="16470">玁</a></li>
                                   <li><a href="16472">玃</a></li>
                                   <li><a href="16783">礷</a></li>
                                   <li><a href="16803">禵</a></li>
                                   <li><a href="16944">籦</a></li>
                                   <li><a href="17182">臢</a></li>
                                   <li><a href="17198">艬</a></li>
                                   <li><a href="17404">虃</a></li>
                                   <li><a href="17405">虇</a></li>
                                   <li><a href="17523">蠯</a></li>
                                   <li><a href="17524">蠳</a></li>
                                   <li><a href="17630">觾</a></li>
                                   <li><a href="17728">讈</a></li>
                                   <li><a href="17775">贙</a></li>
                                   <li><a href="17776">贚</a></li>
                                   <li><a href="17862">躠</a></li>
                                   <li><a href="18146">鑗</a></li>
                                   <li><a href="18147">鑘</a></li>
                                   <li><a href="18149">鑤</a></li>
                                   <li><a href="18297">顮</a></li>
                                   <li><a href="18330">馪</a></li>
                                   <li><a href="18387">驙</a></li>
                                   <li><a href="18388">驜</a></li>
                                   <li><a href="18405">鬞</a></li>
                                   <li><a href="18452">鱋</a></li>
                                   <li><a href="18453">鱌</a></li>
                                   <li><a href="18454">鱙</a></li>
                                   <li><a href="18541">鷡</a></li>
                                   <li><a href="18542">鷤</a></li>
                                   <li><a href="18544">鷪</a></li>
                                   <li><a href="18545">鷬</a></li>
                                   <li><a href="18546">鷱</a></li>
                                   <li><a href="18547">鷵</a></li>
                                   <li><a href="18548">鷶</a></li>
                                   <li><a href="18549">鷷</a></li>
                                   <li><a href="18550">鷻</a></li>
                                   <li><a href="18551">鷼</a></li>
                                   <li><a href="18581">黲</a></li>
                                   <li><a href="18587">鼆</a></li>
                                   <li><a href="18590">鼜</a></li>
                                   <li><a href="18597">鼶</a></li>
                                   <li><a href="18611">齮</a></li>
                                   <li><a href="18612">齯</a></li>
                                   <li><a href="18748">㒩</a></li>
                                   <li><a href="18762">㒿</a></li>
                                   <li><a href="19023">㘙</a></li>
                                   <li><a href="19884">㩵</a></li>
                                   <li><a href="19885">㩶</a></li>
                                   <li><a href="19941">㪻</a></li>
                                   <li><a href="20013">㬮</a></li>
                                   <li><a href="20014">㬯</a></li>
                                   <li><a href="20171">㰙</a></li>
                                   <li><a href="20172">㰚</a></li>
                                   <li><a href="20217">㱍</a></li>
                                   <li><a href="20251">㱻</a></li>
                                   <li><a href="20471">㶜</a></li>
                                   <li><a href="20551">㸏</a></li>
                                   <li><a href="20552">㸐</a></li>
                                   <li><a href="20623">㹛</a></li>
                                   <li><a href="20836">㽯</a></li>
                                   <li><a href="20917">㿙</a></li>
                                   <li><a href="21056">䂂</a></li>
                                   <li><a href="21464">䉲</a></li>
                                   <li><a href="21465">䉳</a></li>
                                   <li><a href="21466">䉴</a></li>
                                   <li><a href="21525">䊱</a></li>
                                   <li><a href="21526">䊲</a></li>
                                   <li><a href="21635">䌮</a></li>
                                   <li><a href="21636">䌯</a></li>
                                   <li><a href="21639">䌲</a></li>
                                   <li><a href="22084">䕽</a></li>
                                   <li><a href="22190">䘊</a></li>
                                   <li><a href="22191">䘋</a></li>
                                   <li><a href="22264">䙯</a></li>
                                   <li><a href="22551">䟐</a></li>
                                   <li><a href="22631">䠭</a></li>
                                   <li><a href="22632">䠮</a></li>
                                   <li><a href="22648">䡁</a></li>
                                   <li><a href="22774">䣣</a></li>
                                   <li><a href="22775">䣤</a></li>
                                   <li><a href="22889">䥨</a></li>
                                   <li><a href="22894">䥮</a></li>
                                   <li><a href="22895">䥯</a></li>
                                   <li><a href="22896">䥰</a></li>
                                   <li><a href="22897">䥱</a></li>
                                   <li><a href="22898">䥲</a></li>
                                   <li><a href="22899">䥳</a></li>
                                   <li><a href="23045">䨵</a></li>
                                   <li><a href="23066">䩏</a></li>
                                   <li><a href="23116">䪈</a></li>
                                   <li><a href="23136">䪥</a></li>
                                   <li><a href="23196">䫬</a></li>
                                   <li><a href="23242">䬞</a></li>
                                   <li><a href="23279">䭙</a></li>
                                   <li><a href="23286">䭢</a></li>
                                   <li><a href="23287">䭤</a></li>
                                   <li><a href="23362">䮷</a></li>
                                   <li><a href="23363">䮸</a></li>
                                   <li><a href="23364">䮹</a></li>
                                   <li><a href="23397">䯤</a></li>
                                   <li><a href="23507">䲉</a></li>
                                   <li><a href="23508">䲊</a></li>
                                   <li><a href="23509">䲋</a></li>
                                   <li><a href="23510">䲌</a></li>
                                   <li><a href="23511">䲍</a></li>
                                   <li><a href="23512">䲏</a></li>
                                   <li><a href="23590">䳾</a></li>
                                   <li><a href="23591">䳿</a></li>
                                   <li><a href="23592">䴀</a></li>
                                   <li><a href="23593">䴁</a></li>
                                   <li><a href="23594">䴂</a></li>
                                   <li><a href="23595">䴃</a></li>
                                   <li><a href="23597">䴆</a></li>
                                   <li><a href="23606">䴝</a></li>
                                   <li><a href="23644">䵏</a></li>
                                   <li><a href="23674">䵰</a></li>
                                   <li><a href="23691">䶈</a></li>
                                   <li><a href="23709">䶞</a></li>
                                   <li><a href="23710">䶟</a></li>
                                   <li><a href="23880">㘚</a></li>
                                   <li><a href="24142">讉</a></li>
                                   <li><a href="24317">䕾</a></li>
                                   <li><a href="24333">䜢</a></li>
                                   <li><a href="24364">䭡</a></li>
                                   <li><a href="24367">䲕</a></li>
                                   <li><a href="24371">䵃</a></li>
                                   <li><a href="24387">虁</a></li>
                                   <li><a href="25423">欎</a></li>
                                   <li><a href="25606">灜</a></li>
                                   <li><a href="25969">籨</a></li>
                                   <li><a href="26525">虄</a></li>
                                   <li><a href="26526">虅</a></li>
                                   <li><a href="26555">蠴</a></li>
                                   <li><a href="26585">讆</a></li>
                                   <li><a href="26864">躗</a></li>
                                   <li><a href="27181">㩷</a></li>
                                   <li><a href="27249">㰜</a></li>
                                   <li><a href="27330">㶝</a></li>
                                   <li><a href="27413">䲎</a></li>
                                   <li><a href="27419">䰮</a></li>
                                   <li><a href="27440">䨶</a></li>
                                   <li><a href="27644">䀌</a></li>
                                   <li><a href="27658">㽌</a></li>
                                   <li><a href="27661">㼈</a></li>
                                   <li><a href="27748">𪆐</a></li>
                                   <li><a href="27754">𩻩</a></li>
                                   <li><a href="27874">𣠽</a></li>
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