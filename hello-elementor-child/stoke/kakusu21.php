<?php
/*
 * Template Name: kakusu21
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
               <h1 class="ttl_main">２１画の漢字一覧（漢検級順）</h1>

               <p>総画数２１画の漢字の一覧です。<br>
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
                                   <option value="#" selected>２１画</option>
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
                              <li><a href="bkakusu21">部首別順</a></li>
                              <li><a href="ckakusu21">読み順</a></li>
                         </ul>
                         <ul class="search_menu2">
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
                         <div class="parts_box" id="parts04">
                              <h3 class="ttl_while"><a href="kyu04">漢字検定４級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1289">躍</a>
                                   </li>
                                   <li><a class="color1" href="1315">露</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts03">
                              <h3 class="ttl_while"><a href="kyu03">漢字検定３級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1392">顧</a>
                                   </li>
                                   <li><a class="color1" href="1570">魔</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02j">
                              <h3 class="ttl_while"><a href="kyu02j">漢字検定準２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="1644">艦</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02">
                              <h3 class="ttl_while"><a href="kyu02">漢字検定２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="2065">鶴</a>
                                   </li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts01j">
                              <h3 class="ttl_while"><a href="kyu01j">漢字検定準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="2160">鰯</a>
                                   </li>
                                   <li><a href="2199">鶯</a></li>
                                   <li><a href="2283">鰭</a></li>
                                   <li><a class="color2" href="2423">轟</a>
                                   </li>
                                   <li><a href="2514">龝</a></li>
                                   <li><a href="2663">竈</a></li>
                                   <li><a href="2706">鐸</a></li>
                                   <li><a class="color2" href="2770">纏</a>
                                   </li>
                                   <li><a class="color2" href="6460">蠟</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01">
                              <h3 class="ttl_while"><a href="kyu01">漢字検定１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="3050">霸</a></li>
                                   <li><a class="color2" href="3052">飜</a>
                                   </li>
                                   <li><a href="3143">儺</a></li>
                                   <li><a href="3144">儷</a></li>
                                   <li><a href="3317">囂</a></li>
                                   <li><a href="3318">嚼</a></li>
                                   <li><a href="3319">囁</a></li>
                                   <li><a href="3320">囃</a></li>
                                   <li><a href="3321">囀</a></li>
                                   <li><a href="3322">囈</a></li>
                                   <li><a href="3480">巍</a></li>
                                   <li><a href="3514">廱</a></li>
                                   <li><a href="3640">懾</a></li>
                                   <li><a href="3641">懼</a></li>
                                   <li><a href="3756">黯</a></li>
                                   <li><a href="3768">齦</a></li>
                                   <li><a href="3769">齧</a></li>
                                   <li><a href="3826">鶲</a></li>
                                   <li><a href="3827">鷁</a></li>
                                   <li><a href="3828">鶻</a></li>
                                   <li><a href="3829">鶺</a></li>
                                   <li><a href="3830">鷆</a></li>
                                   <li><a href="3831">鶸</a></li>
                                   <li><a href="3832">鷂</a></li>
                                   <li><a href="3886">鰮</a></li>
                                   <li><a href="3888">鰥</a></li>
                                   <li><a href="3889">鰤</a></li>
                                   <li><a href="3890">鰰</a></li>
                                   <li><a href="3924">曩</a></li>
                                   <li><a href="3949">齎</a></li>
                                   <li><a href="3952">魑</a></li>
                                   <li><a href="3967">闢</a></li>
                                   <li><a href="3968">闥</a></li>
                                   <li><a href="3978">罍</a></li>
                                   <li><a href="3995">霹</a></li>
                                   <li><a href="4111">蠢</a></li>
                                   <li><a href="4112">蠡</a></li>
                                   <li><a href="4210">欅</a></li>
                                   <li><a href="4211">櫺</a></li>
                                   <li><a href="4294">躋</a></li>
                                   <li><a href="4295">躊</a></li>
                                   <li><a href="4365">飆</a></li>
                                   <li><a href="4484">轜</a></li>
                                   <li><a href="4505">驂</a></li>
                                   <li><a href="4506">驃</a></li>
                                   <li><a href="4507">騾</a></li>
                                   <li><a href="4561">麝</a></li>
                                   <li><a href="4602">籃</a></li>
                                   <li><a href="4604">籔</a></li>
                                   <li><a href="4605">籐</a></li>
                                   <li><a href="4610">籖</a></li>
                                   <li><a href="4638">瓔</a></li>
                                   <li><a href="4650">鬘</a></li>
                                   <li><a href="4732">鐫</a></li>
                                   <li><a href="4733">鐶</a></li>
                                   <li><a href="4734">鐺</a></li>
                                   <li><a href="4817">纈</a></li>
                                   <li><a href="4818">纐</a></li>
                                   <li><a href="4822">纉</a></li>
                                   <li><a href="4828">髏</a></li>
                                   <li><a href="4852">醺</a></li>
                                   <li><a href="4896">艪</a></li>
                                   <li><a href="4944">爛</a></li>
                                   <li><a href="5006">譖</a></li>
                                   <li><a href="5011">譴</a></li>
                                   <li><a href="5071">襯</a></li>
                                   <li><a href="5254">癧</a></li>
                                   <li><a href="5255">癪</a></li>
                                   <li><a href="5256">癨</a></li>
                                   <li><a href="5257">癩</a></li>
                                   <li><a href="5294">饐</a></li>
                                   <li><a href="5295">饌</a></li>
                                   <li><a href="5296">饑</a></li>
                                   <li><a href="5297">饋</a></li>
                                   <li><a href="5298">饒</a></li>
                                   <li><a href="5310">殲</a></li>
                                   <li><a href="5495">贔</a></li>
                                   <li><a href="5496">贐</a></li>
                                   <li><a href="6503">籒</a></li>
                                   <li><a href="7025">鰧</a></li>
                                   <li><a href="9147">纊</a></li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts0101j">
                              <h3 class="ttl_while"><a href="kyu0101j">漢字検定１級 / 準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="5672">鷄</a>
                                   </li>
                                   <li><a href="5678">鐵</a></li>
                                   <li><a class="color2" href="5686">櫻</a>
                                   </li>
                                   <li><a href="6005">權</a></li>
                                   <li><a href="6097">續</a></li>
                                   <li><a href="6169">屬</a></li>
                                   <li><a class="color2" href="6191">攝</a>
                                   </li>
                                   <li><a href="6228">歡</a></li>
                                   <li><a href="6331">辯</a></li>
                                   <li><a href="6351">驅</a></li>
                                   <li><a class="color2" href="6362">欄</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts">
                              <h3 class="ttl_while">漢字検定対象外</h3>
                              <ul class="search_parts">
                                   <li><a href="5723">鰡</a></li>
                                   <li><a href="5818">鷏</a></li>
                                   <li><a href="5829">繿</a></li>
                                   <li><a href="5875">攜</a></li>
                                   <li><a href="5997">鑁</a></li>
                                   <li><a href="6099">纎</a></li>
                                   <li><a href="6558">黭</a></li>
                                   <li><a href="6559">黬</a></li>
                                   <li><a href="6560">黮</a></li>
                                   <li><a href="6569">鼅</a></li>
                                   <li><a href="6581">䩿</a></li>
                                   <li><a href="6582">鼛</a></li>
                                   <li><a href="6583">鼚</a></li>
                                   <li><a href="6584">鼙</a></li>
                                   <li><a href="6632">鼱</a></li>
                                   <li><a href="6679">龒</a></li>
                                   <li><a href="6761">驁</a></li>
                                   <li><a href="6762">䮯</a></li>
                                   <li><a href="6763">驄</a></li>
                                   <li><a href="6765">䮰</a></li>
                                   <li><a href="6766">驇</a></li>
                                   <li><a href="6767">騺</a></li>
                                   <li><a href="6780">騻</a></li>
                                   <li><a href="6807">髎</a></li>
                                   <li><a href="6834">鬔</a></li>
                                   <li><a href="6849">鬖</a></li>
                                   <li><a href="6863">䰗</a></li>
                                   <li><a href="6869">鬹</a></li>
                                   <li><a href="6870">鬺</a></li>
                                   <li><a href="6981">䱽</a></li>
                                   <li><a href="7014">鰞</a></li>
                                   <li><a href="7015">鰪</a></li>
                                   <li><a href="7016">䱵</a></li>
                                   <li><a href="7017">䱻</a></li>
                                   <li><a href="7018">鰜</a></li>
                                   <li><a href="7019">鰬</a></li>
                                   <li><a href="7020">鰝</a></li>
                                   <li><a href="7021">䱹</a></li>
                                   <li><a href="7022">鰣</a></li>
                                   <li><a href="7024">鰠</a></li>
                                   <li><a href="7026">鰨</a></li>
                                   <li><a href="7027">鰢</a></li>
                                   <li><a href="7028">鰟</a></li>
                                   <li><a href="7029">鰩</a></li>
                                   <li><a href="7030">鰫</a></li>
                                   <li><a href="7148">鶵</a></li>
                                   <li><a href="7149">鶾</a></li>
                                   <li><a href="7184">鷃</a></li>
                                   <li><a href="7186">鶮</a></li>
                                   <li><a href="7187">鶷</a></li>
                                   <li><a href="7188">鷊</a></li>
                                   <li><a href="7189">鶼</a></li>
                                   <li><a href="7190">鶱</a></li>
                                   <li><a href="7191">鷇</a></li>
                                   <li><a href="7195">鶽</a></li>
                                   <li><a href="7196">鶬</a></li>
                                   <li><a href="7197">鷉</a></li>
                                   <li><a href="7200">鶹</a></li>
                                   <li><a href="7239">鹺</a></li>
                                   <li><a href="7241">鹻</a></li>
                                   <li><a href="7280">靧</a></li>
                                   <li><a href="7328">鞼</a></li>
                                   <li><a href="7329">鞿</a></li>
                                   <li><a href="7330">鞽</a></li>
                                   <li><a href="7357">韠</a></li>
                                   <li><a href="7420">顥</a></li>
                                   <li><a href="7421">顦</a></li>
                                   <li><a href="7446">飇</a></li>
                                   <li><a href="7447">飈</a></li>
                                   <li><a href="7448">飅</a></li>
                                   <li><a href="7450">飉</a></li>
                                   <li><a href="7503">饊</a></li>
                                   <li><a href="7504">饎</a></li>
                                   <li><a href="7506">饙</a></li>
                                   <li><a href="7775">鐮</a></li>
                                   <li><a href="7776">䥝</a></li>
                                   <li><a href="7822">鏻</a></li>
                                   <li><a href="7824">鐿</a></li>
                                   <li><a href="7825">鐻</a></li>
                                   <li><a href="7826">鐱</a></li>
                                   <li><a href="7827">鏽</a></li>
                                   <li><a href="7828">鐩</a></li>
                                   <li><a href="7830">鐲</a></li>
                                   <li><a href="7831">鐽</a></li>
                                   <li><a href="7834">鐴</a></li>
                                   <li><a href="7835">鐳</a></li>
                                   <li><a href="7836">鑊</a></li>
                                   <li><a href="7907">闤</a></li>
                                   <li><a href="7908">闦</a></li>
                                   <li><a href="7996">霶</a></li>
                                   <li><a href="8025">霻</a></li>
                                   <li><a href="8034">䨼</a></li>
                                   <li><a href="8057">覼</a></li>
                                   <li><a href="8076">觺</a></li>
                                   <li><a href="8211">譹</a></li>
                                   <li><a href="8212">譅</a></li>
                                   <li><a href="8213">譸</a></li>
                                   <li><a href="8214">譶</a></li>
                                   <li><a href="8225">䜛</a></li>
                                   <li><a href="8332">贑</a></li>
                                   <li><a href="8357">趯</a></li>
                                   <li><a href="8473">軇</a></li>
                                   <li><a href="8721">酅</a></li>
                                   <li><a href="8722">酆</a></li>
                                   <li><a href="8739">醻</a></li>
                                   <li><a href="8771">醹</a></li>
                                   <li><a href="8929">籑</a></li>
                                   <li><a href="8930">籓</a></li>
                                   <li><a href="9148">纆</a></li>
                                   <li><a href="9149">纇</a></li>
                                   <li><a href="9150">纍</a></li>
                                   <li><a href="9220">羼</a></li>
                                   <li><a href="9259">䎱</a></li>
                                   <li><a href="9270">耰</a></li>
                                   <li><a href="9734">蘶</a></li>
                                   <li><a href="9958">蠞</a></li>
                                   <li><a href="9959">蠜</a></li>
                                   <li><a href="10093">襰</a></li>
                                   <li><a href="10257">瓖</a></li>
                                   <li><a href="10258">瓓</a></li>
                                   <li><a href="10259">瓘</a></li>
                                   <li><a href="10288">甗</a></li>
                                   <li><a href="10453">㿗</a></li>
                                   <li><a href="10488">皬</a></li>
                                   <li><a href="10601">矒</a></li>
                                   <li><a href="10615">矐</a></li>
                                   <li><a href="10616">矑</a></li>
                                   <li><a href="10767">礭</a></li>
                                   <li><a href="10768">礥</a></li>
                                   <li><a href="10769">礮</a></li>
                                   <li><a href="10771">礰</a></li>
                                   <li><a href="10772">礱</a></li>
                                   <li><a href="10773">礲</a></li>
                                   <li><a href="10775">礴</a></li>
                                   <li><a href="10938">竉</a></li>
                                   <li><a href="11530">攛</a></li>
                                   <li><a href="11531">㩳</a></li>
                                   <li><a href="11577">斕</a></li>
                                   <li><a href="11671">兤</a></li>
                                   <li><a href="11754">朇</a></li>
                                   <li><a href="11906">饍</a></li>
                                   <li><a href="11928">䑎</a></li>
                                   <li><a href="11929">䑋</a></li>
                                   <li><a href="11930">䑏</a></li>
                                   <li><a href="11932">臝</a></li>
                                   <li><a href="12263">櫽</a></li>
                                   <li><a href="12312">欃</a></li>
                                   <li><a href="12313">欀</a></li>
                                   <li><a href="12314">櫼</a></li>
                                   <li><a href="12316">櫾</a></li>
                                   <li><a href="12592">㒨</a></li>
                                   <li><a href="12667">儹</a></li>
                                   <li><a href="12669">儸</a></li>
                                   <li><a href="12815">劗</a></li>
                                   <li><a href="12816">劘</a></li>
                                   <li><a href="12950">㔮</a></li>
                                   <li><a href="13003">卛</a></li>
                                   <li><a href="13588">嚻</a></li>
                                   <li><a href="13589">嚽</a></li>
                                   <li><a href="13593">囆</a></li>
                                   <li><a href="14263">孇</a></li>
                                   <li><a href="14264">孈</a></li>
                                   <li><a href="14329">寷</a></li>
                                   <li><a href="14591">巋</a></li>
                                   <li><a href="14594">巐</a></li>
                                   <li><a href="14796">忂</a></li>
                                   <li><a href="15331">櫿</a></li>
                                   <li><a href="15332">欁</a></li>
                                   <li><a href="15958">瀶</a></li>
                                   <li><a href="15967">灂</a></li>
                                   <li><a href="15968">灃</a></li>
                                   <li><a href="15969">灄</a></li>
                                   <li><a href="15970">灅</a></li>
                                   <li><a href="15971">灆</a></li>
                                   <li><a href="15972">灇</a></li>
                                   <li><a href="15973">灈</a></li>
                                   <li><a href="15974">灉</a></li>
                                   <li><a href="15975">灋</a></li>
                                   <li><a href="15976">灍</a></li>
                                   <li><a href="15977">灐</a></li>
                                   <li><a href="16264">爙</a></li>
                                   <li><a href="16265">爚</a></li>
                                   <li><a href="16702">矓</a></li>
                                   <li><a href="16782">礯</a></li>
                                   <li><a href="16869">竷</a></li>
                                   <li><a href="16976">糮</a></li>
                                   <li><a href="17050">纅</a></li>
                                   <li><a href="17051">纋</a></li>
                                   <li><a href="17075">羻</a></li>
                                   <li><a href="17394">蘫</a></li>
                                   <li><a href="17395">蘬</a></li>
                                   <li><a href="17398">蘲</a></li>
                                   <li><a href="17399">蘳</a></li>
                                   <li><a href="17400">蘴</a></li>
                                   <li><a href="17401">蘵</a></li>
                                   <li><a href="17518">蠝</a></li>
                                   <li><a href="17519">蠠</a></li>
                                   <li><a href="17724">譳</a></li>
                                   <li><a href="17725">譵</a></li>
                                   <li><a href="17726">譺</a></li>
                                   <li><a href="17727">譻</a></li>
                                   <li><a href="17859">躎</a></li>
                                   <li><a href="17908">轛</a></li>
                                   <li><a href="18117">鏴</a></li>
                                   <li><a href="18131">鐪</a></li>
                                   <li><a href="18132">鐬</a></li>
                                   <li><a href="18133">鐭</a></li>
                                   <li><a href="18134">鐰</a></li>
                                   <li><a href="18137">鐾</a></li>
                                   <li><a href="18141">鑉</a></li>
                                   <li><a href="18163">镾</a></li>
                                   <li><a href="18181">闣</a></li>
                                   <li><a href="18215">雤</a></li>
                                   <li><a href="18239">霵</a></li>
                                   <li><a href="18240">霷</a></li>
                                   <li><a href="18241">霺</a></li>
                                   <li><a href="18243">靀</a></li>
                                   <li><a href="18294">顤</a></li>
                                   <li><a href="18295">顨</a></li>
                                   <li><a href="18320">饏</a></li>
                                   <li><a href="18321">饓</a></li>
                                   <li><a href="18329">馩</a></li>
                                   <li><a href="18379">騹</a></li>
                                   <li><a href="18380">騼</a></li>
                                   <li><a href="18381">騽</a></li>
                                   <li><a href="18382">騿</a></li>
                                   <li><a href="18383">驆</a></li>
                                   <li><a href="18397">髍</a></li>
                                   <li><a href="18404">鬗</a></li>
                                   <li><a href="18413">魒</a></li>
                                   <li><a href="18414">魓</a></li>
                                   <li><a href="18526">鶭</a></li>
                                   <li><a href="18527">鶰</a></li>
                                   <li><a href="18528">鶳</a></li>
                                   <li><a href="18529">鶶</a></li>
                                   <li><a href="18530">鷅</a></li>
                                   <li><a href="18531">鷈</a></li>
                                   <li><a href="18532">鷋</a></li>
                                   <li><a href="18533">鷌</a></li>
                                   <li><a href="18534">鷍</a></li>
                                   <li><a href="18535">鷎</a></li>
                                   <li><a href="18543">鷨</a></li>
                                   <li><a href="18567">麜</a></li>
                                   <li><a href="18580">黫</a></li>
                                   <li><a href="18604">齜</a></li>
                                   <li><a href="18606">齤</a></li>
                                   <li><a href="18607">齥</a></li>
                                   <li><a href="18608">齨</a></li>
                                   <li><a href="18609">齩</a></li>
                                   <li><a href="18615">龡</a></li>
                                   <li><a href="18619">龭</a></li>
                                   <li><a href="18628">夔</a></li>
                                   <li><a href="18747">㒧</a></li>
                                   <li><a href="19021">㘕</a></li>
                                   <li><a href="19022">㘖</a></li>
                                   <li><a href="19247">㜹</a></li>
                                   <li><a href="19442">㠥</a></li>
                                   <li><a href="19443">㠦</a></li>
                                   <li><a href="19577">㣆</a></li>
                                   <li><a href="19881">㩱</a></li>
                                   <li><a href="19883">㩴</a></li>
                                   <li><a href="19930">㪮</a></li>
                                   <li><a href="20165">㰓</a></li>
                                   <li><a href="20166">㰔</a></li>
                                   <li><a href="20168">㰖</a></li>
                                   <li><a href="20464">㶒</a></li>
                                   <li><a href="20465">㶔</a></li>
                                   <li><a href="20468">㶘</a></li>
                                   <li><a href="20549">㸍</a></li>
                                   <li><a href="20571">㸥</a></li>
                                   <li><a href="20622">㹚</a></li>
                                   <li><a href="20914">㿕</a></li>
                                   <li><a href="20915">㿖</a></li>
                                   <li><a href="20928">㿨</a></li>
                                   <li><a href="20960">䀋</a></li>
                                   <li><a href="21053">䁿</a></li>
                                   <li><a href="21054">䂀</a></li>
                                   <li><a href="21145">䃴</a></li>
                                   <li><a href="21146">䃵</a></li>
                                   <li><a href="21147">䃶</a></li>
                                   <li><a href="21148">䃷</a></li>
                                   <li><a href="21175">䄤</a></li>
                                   <li><a href="21257">䆈</a></li>
                                   <li><a href="21259">䆊</a></li>
                                   <li><a href="21260">䆋</a></li>
                                   <li><a href="21261">䆍</a></li>
                                   <li><a href="21453">䉦</a></li>
                                   <li><a href="21454">䉧</a></li>
                                   <li><a href="21455">䉨</a></li>
                                   <li><a href="21456">䉩</a></li>
                                   <li><a href="21457">䉪</a></li>
                                   <li><a href="21458">䉫</a></li>
                                   <li><a href="21459">䉬</a></li>
                                   <li><a href="21523">䊯</a></li>
                                   <li><a href="21634">䌭</a></li>
                                   <li><a href="21671">䍥</a></li>
                                   <li><a href="21721">䎚</a></li>
                                   <li><a href="21864">䑌</a></li>
                                   <li><a href="21865">䑍</a></li>
                                   <li><a href="21905">䒉</a></li>
                                   <li><a href="21912">䒐</a></li>
                                   <li><a href="22080">䕸</a></li>
                                   <li><a href="22081">䕹</a></li>
                                   <li><a href="22183">䘂</a></li>
                                   <li><a href="22184">䘃</a></li>
                                   <li><a href="22185">䘄</a></li>
                                   <li><a href="22260">䙪</a></li>
                                   <li><a href="22295">䚔</a></li>
                                   <li><a href="22408">䜙</a></li>
                                   <li><a href="22409">䜜</a></li>
                                   <li><a href="22410">䜝</a></li>
                                   <li><a href="22411">䜞</a></li>
                                   <li><a href="22435">䝃</a></li>
                                   <li><a href="22448">䝒</a></li>
                                   <li><a href="22496">䞕</a></li>
                                   <li><a href="22547">䟌</a></li>
                                   <li><a href="22628">䠪</a></li>
                                   <li><a href="22629">䠫</a></li>
                                   <li><a href="22814">䤐</a></li>
                                   <li><a href="22818">䤔</a></li>
                                   <li><a href="22881">䥞</a></li>
                                   <li><a href="22884">䥡</a></li>
                                   <li><a href="22885">䥢</a></li>
                                   <li><a href="22886">䥣</a></li>
                                   <li><a href="22887">䥤</a></li>
                                   <li><a href="22890">䥩</a></li>
                                   <li><a href="22939">䦲</a></li>
                                   <li><a href="22941">䦴</a></li>
                                   <li><a href="22988">䧰</a></li>
                                   <li><a href="23064">䩌</a></li>
                                   <li><a href="23065">䩍</a></li>
                                   <li><a href="23108">䪀</a></li>
                                   <li><a href="23109">䪁</a></li>
                                   <li><a href="23110">䪂</a></li>
                                   <li><a href="23111">䪃</a></li>
                                   <li><a href="23112">䪄</a></li>
                                   <li><a href="23135">䪤</a></li>
                                   <li><a href="23197">䫭</a></li>
                                   <li><a href="23198">䫮</a></li>
                                   <li><a href="23200">䫱</a></li>
                                   <li><a href="23241">䬝</a></li>
                                   <li><a href="23278">䭘</a></li>
                                   <li><a href="23280">䭚</a></li>
                                   <li><a href="23281">䭛</a></li>
                                   <li><a href="23284">䭟</a></li>
                                   <li><a href="23351">䮪</a></li>
                                   <li><a href="23352">䮫</a></li>
                                   <li><a href="23354">䮭</a></li>
                                   <li><a href="23355">䮮</a></li>
                                   <li><a href="23356">䮱</a></li>
                                   <li><a href="23395">䯢</a></li>
                                   <li><a href="23430">䰌</a></li>
                                   <li><a href="23431">䰍</a></li>
                                   <li><a href="23439">䰘</a></li>
                                   <li><a href="23495">䱶</a></li>
                                   <li><a href="23496">䱷</a></li>
                                   <li><a href="23497">䱸</a></li>
                                   <li><a href="23498">䱺</a></li>
                                   <li><a href="23499">䱼</a></li>
                                   <li><a href="23579">䳲</a></li>
                                   <li><a href="23580">䳳</a></li>
                                   <li><a href="23581">䳴</a></li>
                                   <li><a href="23582">䳵</a></li>
                                   <li><a href="23583">䳶</a></li>
                                   <li><a href="23605">䴜</a></li>
                                   <li><a href="23629">䴾</a></li>
                                   <li><a href="23630">䴿</a></li>
                                   <li><a href="23631">䵀</a></li>
                                   <li><a href="23643">䵎</a></li>
                                   <li><a href="23649">䵖</a></li>
                                   <li><a href="23650">䵗</a></li>
                                   <li><a href="23651">䵘</a></li>
                                   <li><a href="23652">䵙</a></li>
                                   <li><a href="23671">䵭</a></li>
                                   <li><a href="23672">䵮</a></li>
                                   <li><a href="23673">䵯</a></li>
                                   <li><a href="23687">䶁</a></li>
                                   <li><a href="23690">䶆</a></li>
                                   <li><a href="23695">䶏</a></li>
                                   <li><a href="23705">䶚</a></li>
                                   <li><a href="23706">䶛</a></li>
                                   <li><a href="23725">䶱</a></li>
                                   <li><a href="23726">䶳</a></li>
                                   <li><a href="24044">灊</a></li>
                                   <li><a href="24062">爟</a></li>
                                   <li><a href="24135">蠫</a></li>
                                   <li><a href="24139">襱</a></li>
                                   <li><a href="24160">鐹</a></li>
                                   <li><a href="24250">㶓</a></li>
                                   <li><a href="24316">䕺</a></li>
                                   <li><a href="24332">䜚</a></li>
                                   <li><a href="24344">䥬</a></li>
                                   <li><a href="24965">嚺</a></li>
                                   <li><a href="25422">欍</a></li>
                                   <li><a href="25629">飊</a></li>
                                   <li><a href="25827">癫</a></li>
                                   <li><a href="25907">礳</a></li>
                                   <li><a href="26524">蘷</a></li>
                                   <li><a href="26554">蠤</a></li>
                                   <li><a href="26578">觼</a></li>
                                   <li><a href="26584">讂</a></li>
                                   <li><a href="26628">㘗</a></li>
                                   <li><a href="26834">趰</a></li>
                                   <li><a href="27170">鐤</a></li>
                                   <li><a href="27171">鑀</a></li>
                                   <li><a href="27328">㶕</a></li>
                                   <li><a href="27401">䶲</a></li>
                                   <li><a href="27403">䴨</a></li>
                                   <li><a href="27432">䭜</a></li>
                                   <li><a href="27434">䫯</a></li>
                                   <li><a href="27471">䥦</a></li>
                                   <li><a href="27472">䥥</a></li>
                                   <li><a href="27494">䡹</a></li>
                                   <li><a href="27527">䙫</a></li>
                                   <li><a href="27540">䗻</a></li>
                                   <li><a href="27603">䉭</a></li>
                                   <li><a href="27609">䆌</a></li>
                                   <li><a href="27716">𩹷</a></li>
                                   <li><a href="27734">𨭻</a></li>
                                   <li><a href="27741">𥶡</a></li>
                                   <li><a href="27747">𨏍</a></li>
                                   <li><a href="27831">𢅻</a></li>
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