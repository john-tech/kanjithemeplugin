<?php
/*
 * Template Name: kakusu22
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
               <h1 class="ttl_main">２２画の漢字一覧（漢検級順）</h1>

               <p>総画数２２画の漢字の一覧です。<br>
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
                                   <option value="#" selected>２２画</option>
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
                              <li><a href="bkakusu22">部首別順</a></li>
                              <li><a href="ckakusu22">読み順</a></li>
                         </ul>
                         <ul class="search_menu2">
                              <li><a href="#parts04">４級</a></li>
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
                                   <li><a class="color1" href="1064">驚</a>
                                   </li>
                                   <li><a class="color1" href="1130">襲</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts02">
                              <h3 class="ttl_while"><a href="kyu02">漢字検定２級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color1" href="2131">籠</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01j">
                              <h3 class="ttl_while"><a href="kyu01j">漢字検定準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="2324">饗</a>
                                   </li>
                                   <li><a class="color2" href="2457">讃</a>
                                   </li>
                                   <li><a href="2633">鱈</a></li>
                                   <li><a href="2673">鰺</a></li>
                                   <li><a href="2708">韃</a></li>
                                   <li><a class="color2" href="2715">灘</a>
                                   </li>
                                   <li><a href="2771">纒</a></li>
                                   <li><a href="2847">鰻</a></li>
                                   <li><a href="2855">轡</a></li>
                                   <li><a href="2942">鑓</a></li>
                                   <li><a href="3017">聾</a></li>
                                   <li><a class="color2" href="6465">鷗</a>
                                   </li>
                                   <li><a href="6478">驒</a></li>
                                   <li><a href="6479">囊</a></li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts01">
                              <h3 class="ttl_while"><a href="kyu01">漢字検定１級</a></h3>
                              <ul class="search_parts">
                                   <li><a href="3145">儼</a></li>
                                   <li><a href="3146">儻</a></li>
                                   <li><a href="3481">巓</a></li>
                                   <li><a href="3482">巒</a></li>
                                   <li><a href="3523">彎</a></li>
                                   <li><a href="3638">懿</a></li>
                                   <li><a href="3743">攤</a></li>
                                   <li><a href="3748">龕</a></li>
                                   <li><a href="3771">齬</a></li>
                                   <li><a href="3772">齪</a></li>
                                   <li><a href="3833">鷙</a></li>
                                   <li><a href="3834">鷓</a></li>
                                   <li><a href="3891">鱆</a></li>
                                   <li><a href="3892">鱇</a></li>
                                   <li><a href="3893">鰾</a></li>
                                   <li><a href="3974">罎</a></li>
                                   <li><a href="3996">霽</a></li>
                                   <li><a href="3997">霾</a></li>
                                   <li><a href="4115">蠧</a></li>
                                   <li><a href="4296">躓</a></li>
                                   <li><a href="4297">躑</a></li>
                                   <li><a href="4301">躔</a></li>
                                   <li><a href="4457">灑</a></li>
                                   <li><a href="4485">轢</a></li>
                                   <li><a href="4509">驕</a></li>
                                   <li><a class="color2" href="4510">驍</a>
                                   </li>
                                   <li><a href="4607">籟</a></li>
                                   <li><a href="4651">鬚</a></li>
                                   <li><a href="4897">艫</a></li>
                                   <li><a href="5072">襴</a></li>
                                   <li><a href="5073">襷</a></li>
                                   <li><a href="5142">顫</a></li>
                                   <li><a href="5258">癬</a></li>
                                   <li><a href="5276">糴</a></li>
                                   <li><a href="5299">饕</a></li>
                                   <li><a href="5447">蘿</a></li>
                                   <li><a href="5464">覿</a></li>
                                   <li><a href="5465">鬻</a></li>
                                   <li><a href="5497">贓</a></li>
                                   <li><a href="5498">贖</a></li>
                                   <li><a href="5597">羇</a></li>
                                   <li><a href="5643">禳</a></li>
                                   <li><a href="6492">攢</a></li>
                                   <li><a href="6636">鼴</a></li>
                                   <li><a href="8933">籡</a></li>
                                   <li><a href="8938">籙</a></li>
                                   <li><a href="8988">糱</a></li>
                                   <li><a href="10455">癭</a></li>
                              </ul>
                         </div>

                         <div class="parts_box" id="parts0101j">
                              <h3 class="ttl_while"><a href="kyu0101j">漢字検定１級 / 準１級</a></h3>
                              <ul class="search_parts">
                                   <li><a class="color2" href="5725">鑄</a>
                                   </li>
                                   <li><a class="color2" href="5850">聽</a>
                                   </li>
                                   <li><a class="color2" href="5864">疊</a>
                                   </li>
                                   <li><a href="6038">竊</a></li>
                                   <li><a class="color2" href="6270">穰</a>
                                   </li>
                                   <li><a class="color2" href="6292">臟</a>
                                   </li>
                                   <li><a class="color2" href="6312">覽</a>
                                   </li>
                                   <li><a href="6318">讀</a></li>
                                   <li><a class="color2" href="6418">響</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="parts_box" id="parts">
                              <h3 class="ttl_while">漢字検定対象外</h3>
                              <ul class="search_parts">
                                   <li><a href="5663">竸</a></li>
                                   <li><a href="5724">鰲</a></li>
                                   <li><a href="5786">囎</a></li>
                                   <li><a href="5852">籘</a></li>
                                   <li><a href="5863">疉</a></li>
                                   <li><a href="6516">灔</a></li>
                                   <li><a href="6551">黱</a></li>
                                   <li><a href="6561">黰</a></li>
                                   <li><a href="6604">髝</a></li>
                                   <li><a href="6638">鼳</a></li>
                                   <li><a href="6639">鼲</a></li>
                                   <li><a href="6659">虀</a></li>
                                   <li><a href="6684">龔</a></li>
                                   <li><a href="6740">驑</a></li>
                                   <li><a href="6769">驈</a></li>
                                   <li><a href="6771">驉</a></li>
                                   <li><a href="6772">驔</a></li>
                                   <li><a href="6773">驋</a></li>
                                   <li><a href="6808">髐</a></li>
                                   <li><a href="6809">髒</a></li>
                                   <li><a href="6850">鬜</a></li>
                                   <li><a href="6851">鬙</a></li>
                                   <li><a href="6857">鬛</a></li>
                                   <li><a href="6862">鬫</a></li>
                                   <li><a href="6881">魕</a></li>
                                   <li><a href="6882">魖</a></li>
                                   <li><a href="7031">䲁</a></li>
                                   <li><a href="7032">鰴</a></li>
                                   <li><a href="7033">䲅</a></li>
                                   <li><a href="7034">鰶</a></li>
                                   <li><a href="7035">鰼</a></li>
                                   <li><a href="7036">鰽</a></li>
                                   <li><a href="7037">鱃</a></li>
                                   <li><a href="7038">鱂</a></li>
                                   <li><a href="7039">鰷</a></li>
                                   <li><a href="7041">鰿</a></li>
                                   <li><a href="7042">鱄</a></li>
                                   <li><a href="7043">䲃</a></li>
                                   <li><a href="7044">鱁</a></li>
                                   <li><a href="7045">鰵</a></li>
                                   <li><a href="7046">鱅</a></li>
                                   <li><a href="7047">鰱</a></li>
                                   <li><a href="7048">鰳</a></li>
                                   <li><a href="7180">鷘</a></li>
                                   <li><a href="7201">鷖</a></li>
                                   <li><a href="7202">鷠</a></li>
                                   <li><a href="7203">鷔</a></li>
                                   <li><a href="7204">鷟</a></li>
                                   <li><a href="7206">鷐</a></li>
                                   <li><a href="7207">鷞</a></li>
                                   <li><a href="7209">鷕</a></li>
                                   <li><a href="7210">鷚</a></li>
                                   <li><a href="7258">麞</a></li>
                                   <li><a href="7331">韁</a></li>
                                   <li><a href="7332">韂</a></li>
                                   <li><a href="7334">韄</a></li>
                                   <li><a href="7422">顪</a></li>
                                   <li><a href="7423">顩</a></li>
                                   <li><a href="7451">飋</a></li>
                                   <li><a href="7505">饘</a></li>
                                   <li><a href="7507">饔</a></li>
                                   <li><a href="7510">饛</a></li>
                                   <li><a href="7811">鐕</a></li>
                                   <li><a href="7837">鑎</a></li>
                                   <li><a href="7838">鑋</a></li>
                                   <li><a href="7839">鑅</a></li>
                                   <li><a href="7840">鑈</a></li>
                                   <li><a href="7841">鑃</a></li>
                                   <li><a href="7842">鑌</a></li>
                                   <li><a href="8021">霿</a></li>
                                   <li><a href="8215">譼</a></li>
                                   <li><a href="8216">譿</a></li>
                                   <li><a href="8217">讅</a></li>
                                   <li><a href="8218">譾</a></li>
                                   <li><a href="8220">讁</a></li>
                                   <li><a href="8221">讄</a></li>
                                   <li><a href="8226">䜟</a></li>
                                   <li><a href="8317">贒</a></li>
                                   <li><a href="8324">贗</a></li>
                                   <li><a href="8329">贕</a></li>
                                   <li><a href="8451">躚</a></li>
                                   <li><a href="8453">躕</a></li>
                                   <li><a href="8455">躐</a></li>
                                   <li><a href="8456">躒</a></li>
                                   <li><a href="8542">轞</a></li>
                                   <li><a href="8625">邎</a></li>
                                   <li><a href="8724">酇</a></li>
                                   <li><a href="8726">酈</a></li>
                                   <li><a href="8934">籛</a></li>
                                   <li><a href="8935">籗</a></li>
                                   <li><a href="8936">籜</a></li>
                                   <li><a href="8937">籚</a></li>
                                   <li><a href="8946">籝</a></li>
                                   <li><a href="8989">糵</a></li>
                                   <li><a href="9151">纑</a></li>
                                   <li><a href="9167">罏</a></li>
                                   <li><a href="9271">耱</a></li>
                                   <li><a href="9712">蘽</a></li>
                                   <li><a href="9735">蘹</a></li>
                                   <li><a href="9736">蘸</a></li>
                                   <li><a href="9737">蘼</a></li>
                                   <li><a href="9738">蘺</a></li>
                                   <li><a href="9963">蠥</a></li>
                                   <li><a href="9964">蠪</a></li>
                                   <li><a href="9967">䘌</a></li>
                                   <li><a href="9968">蠨</a></li>
                                   <li><a href="10094">襳</a></li>
                                   <li><a href="10097">襶</a></li>
                                   <li><a href="10285">䰝</a></li>
                                   <li><a href="10454">癮</a></li>
                                   <li><a href="10774">礵</a></li>
                                   <li><a href="10819">禴</a></li>
                                   <li><a href="11456">攡</a></li>
                                   <li><a href="11519">攟</a></li>
                                   <li><a href="11532">攞</a></li>
                                   <li><a href="11533">攦</a></li>
                                   <li><a href="11931">臞</a></li>
                                   <li><a href="12319">欋</a></li>
                                   <li><a href="12320">欇</a></li>
                                   <li><a href="12321">欆</a></li>
                                   <li><a href="12322">欉</a></li>
                                   <li><a href="12361">亹</a></li>
                                   <li><a href="13592">囅</a></li>
                                   <li><a href="13594">囇</a></li>
                                   <li><a href="13595">囉</a></li>
                                   <li><a href="13596">囋</a></li>
                                   <li><a href="13628">圝</a></li>
                                   <li><a href="13935">奱</a></li>
                                   <li><a href="14266">孊</a></li>
                                   <li><a href="14267">孋</a></li>
                                   <li><a href="14268">孌</a></li>
                                   <li><a href="14284">孿</a></li>
                                   <li><a href="14592">巎</a></li>
                                   <li><a href="14595">巑</a></li>
                                   <li><a href="14718">廲</a></li>
                                   <li><a href="14766">彲</a></li>
                                   <li><a href="14894">戂</a></li>
                                   <li><a href="14899">戵</a></li>
                                   <li><a href="15051">攠</a></li>
                                   <li><a href="15333">欈</a></li>
                                   <li><a href="15334">欌</a></li>
                                   <li><a href="15393">氍</a></li>
                                   <li><a href="15978">灒</a></li>
                                   <li><a href="15980">灕</a></li>
                                   <li><a href="15981">灖</a></li>
                                   <li><a href="15982">灗</a></li>
                                   <li><a href="16266">爜</a></li>
                                   <li><a href="16267">爝</a></li>
                                   <li><a href="16268">爞</a></li>
                                   <li><a href="16269">爠</a></li>
                                   <li><a href="16270">爡</a></li>
                                   <li><a href="16342">犩</a></li>
                                   <li><a href="16468">獿</a></li>
                                   <li><a href="16469">玀</a></li>
                                   <li><a href="16471">玂</a></li>
                                   <li><a href="16571">瓕</a></li>
                                   <li><a href="16572">瓗</a></li>
                                   <li><a href="16573">瓙</a></li>
                                   <li><a href="16703">矔</a></li>
                                   <li><a href="17397">蘱</a></li>
                                   <li><a href="17402">蘻</a></li>
                                   <li><a href="17403">蘾</a></li>
                                   <li><a href="17520">蠦</a></li>
                                   <li><a href="17521">蠩</a></li>
                                   <li><a href="17522">蠬</a></li>
                                   <li><a href="17616">覾</a></li>
                                   <li><a href="17629">觻</a></li>
                                   <li><a href="17733">豄</a></li>
                                   <li><a href="17774">贘</a></li>
                                   <li><a href="17858">躌</a></li>
                                   <li><a href="17860">躖</a></li>
                                   <li><a href="17909">轠</a></li>
                                   <li><a href="18138">鑂</a></li>
                                   <li><a href="18139">鑆</a></li>
                                   <li><a href="18140">鑇</a></li>
                                   <li><a href="18142">鑍</a></li>
                                   <li><a href="18143">鑏</a></li>
                                   <li><a href="18144">鑐</a></li>
                                   <li><a href="18145">鑖</a></li>
                                   <li><a href="18148">鑝</a></li>
                                   <li><a href="18242">霼</a></li>
                                   <li><a href="18263">韀</a></li>
                                   <li><a href="18269">韢</a></li>
                                   <li><a href="18296">顭</a></li>
                                   <li><a href="18322">饚</a></li>
                                   <li><a href="18384">驏</a></li>
                                   <li><a href="18385">驐</a></li>
                                   <li><a href="18386">驓</a></li>
                                   <li><a href="18450">鰸</a></li>
                                   <li><a href="18451">鱀</a></li>
                                   <li><a href="18536">鷑</a></li>
                                   <li><a href="18537">鷒</a></li>
                                   <li><a href="18538">鷛</a></li>
                                   <li><a href="18539">鷜</a></li>
                                   <li><a href="18540">鷝</a></li>
                                   <li><a href="18589">鼘</a></li>
                                   <li><a href="18596">鼵</a></li>
                                   <li><a href="18599">齂</a></li>
                                   <li><a href="18610">齫</a></li>
                                   <li><a href="18616">龢</a></li>
                                   <li><a href="19248">㜺</a></li>
                                   <li><a href="19444">㠧</a></li>
                                   <li><a href="19501">㡩</a></li>
                                   <li><a href="19502">㡪</a></li>
                                   <li><a href="19742">㦫</a></li>
                                   <li><a href="19743">㦬</a></li>
                                   <li><a href="20011">㬬</a></li>
                                   <li><a href="20012">㬭</a></li>
                                   <li><a href="20169">㰗</a></li>
                                   <li><a href="20170">㰘</a></li>
                                   <li><a href="20173">㰛</a></li>
                                   <li><a href="20216">㱌</a></li>
                                   <li><a href="20466">㶖</a></li>
                                   <li><a href="20467">㶗</a></li>
                                   <li><a href="20469">㶚</a></li>
                                   <li><a href="20470">㶛</a></li>
                                   <li><a href="20550">㸎</a></li>
                                   <li><a href="20808">㽊</a></li>
                                   <li><a href="20916">㿘</a></li>
                                   <li><a href="21055">䂁</a></li>
                                   <li><a href="21149">䃸</a></li>
                                   <li><a href="21150">䃹</a></li>
                                   <li><a href="21262">䆎</a></li>
                                   <li><a href="21263">䆏</a></li>
                                   <li><a href="21307">䇁</a></li>
                                   <li><a href="21460">䉮</a></li>
                                   <li><a href="21461">䉯</a></li>
                                   <li><a href="21462">䉰</a></li>
                                   <li><a href="21463">䉱</a></li>
                                   <li><a href="21524">䊰</a></li>
                                   <li><a href="21632">䌪</a></li>
                                   <li><a href="21633">䌬</a></li>
                                   <li><a href="21653">䍎</a></li>
                                   <li><a href="21692">䍽</a></li>
                                   <li><a href="21876">䑟</a></li>
                                   <li><a href="22082">䕻</a></li>
                                   <li><a href="22083">䕼</a></li>
                                   <li><a href="22186">䘅</a></li>
                                   <li><a href="22187">䘆</a></li>
                                   <li><a href="22188">䘇</a></li>
                                   <li><a href="22189">䘉</a></li>
                                   <li><a href="22261">䙬</a></li>
                                   <li><a href="22262">䙭</a></li>
                                   <li><a href="22263">䙮</a></li>
                                   <li><a href="22412">䜠</a></li>
                                   <li><a href="22413">䜡</a></li>
                                   <li><a href="22421">䜲</a></li>
                                   <li><a href="22449">䝓</a></li>
                                   <li><a href="22548">䟍</a></li>
                                   <li><a href="22549">䟎</a></li>
                                   <li><a href="22550">䟏</a></li>
                                   <li><a href="22630">䠬</a></li>
                                   <li><a href="22696">䡺</a></li>
                                   <li><a href="22819">䤕</a></li>
                                   <li><a href="22820">䤖</a></li>
                                   <li><a href="22888">䥧</a></li>
                                   <li><a href="22891">䥪</a></li>
                                   <li><a href="22892">䥫</a></li>
                                   <li><a href="22893">䥭</a></li>
                                   <li><a href="23007">䨈</a></li>
                                   <li><a href="23042">䨲</a></li>
                                   <li><a href="23043">䨳</a></li>
                                   <li><a href="23044">䨴</a></li>
                                   <li><a href="23113">䪅</a></li>
                                   <li><a href="23114">䪆</a></li>
                                   <li><a href="23115">䪇</a></li>
                                   <li><a href="23131">䪛</a></li>
                                   <li><a href="23147">䪰</a></li>
                                   <li><a href="23199">䫰</a></li>
                                   <li><a href="23201">䫲</a></li>
                                   <li><a href="23202">䫳</a></li>
                                   <li><a href="23203">䫴</a></li>
                                   <li><a href="23282">䭝</a></li>
                                   <li><a href="23283">䭞</a></li>
                                   <li><a href="23285">䭠</a></li>
                                   <li><a href="23357">䮲</a></li>
                                   <li><a href="23358">䮳</a></li>
                                   <li><a href="23359">䮴</a></li>
                                   <li><a href="23360">䮵</a></li>
                                   <li><a href="23361">䮶</a></li>
                                   <li><a href="23396">䯣</a></li>
                                   <li><a href="23402">䯫</a></li>
                                   <li><a href="23432">䰎</a></li>
                                   <li><a href="23452">䰫</a></li>
                                   <li><a href="23453">䰬</a></li>
                                   <li><a href="23454">䰭</a></li>
                                   <li><a href="23500">䱾</a></li>
                                   <li><a href="23501">䱿</a></li>
                                   <li><a href="23502">䲀</a></li>
                                   <li><a href="23503">䲂</a></li>
                                   <li><a href="23504">䲄</a></li>
                                   <li><a href="23505">䲆</a></li>
                                   <li><a href="23506">䲈</a></li>
                                   <li><a href="23584">䳷</a></li>
                                   <li><a href="23585">䳸</a></li>
                                   <li><a href="23586">䳺</a></li>
                                   <li><a href="23587">䳻</a></li>
                                   <li><a href="23588">䳼</a></li>
                                   <li><a href="23589">䳽</a></li>
                                   <li><a href="23614">䴩</a></li>
                                   <li><a href="23632">䵁</a></li>
                                   <li><a href="23633">䵂</a></li>
                                   <li><a href="23634">䵅</a></li>
                                   <li><a href="23653">䵚</a></li>
                                   <li><a href="23681">䵸</a></li>
                                   <li><a href="23707">䶜</a></li>
                                   <li><a href="23708">䶝</a></li>
                                   <li><a href="23723">䶬</a></li>
                                   <li><a href="23922">囌</a></li>
                                   <li><a href="24080">礶</a></li>
                                   <li><a href="24170">饖</a></li>
                                   <li><a href="24178">龓</a></li>
                                   <li><a href="24286">䏊</a></li>
                                   <li><a href="24369">䳱</a></li>
                                   <li><a href="24390">頀</a></li>
                                   <li><a href="24966">囄</a></li>
                                   <li><a href="25143">巔</a></li>
                                   <li><a href="25144">巕</a></li>
                                   <li><a href="25348">攧</a></li>
                                   <li><a href="25433">闧</a></li>
                                   <li><a href="26026">鬝</a></li>
                                   <li><a href="26150">麶</a></li>
                                   <li><a href="26284">耲</a></li>
                                   <li><a href="26341">鶴</a></li>
                                   <li><a href="26629">㘘</a></li>
                                   <li><a href="27172">鑔</a></li>
                                   <li><a href="27178">鑧</a></li>
                                   <li><a href="27329">㶙</a></li>
                                   <li><a href="27402">䶇</a></li>
                                   <li><a href="27405">䳹</a></li>
                                   <li><a href="27414">䲇</a></li>
                                   <li><a href="27439">䩎</a></li>
                                   <li><a href="27451">䦵</a></li>
                                   <li><a href="27493">䡻</a></li>
                                   <li><a href="27506">䞊</a></li>
                                   <li><a href="27539">䘈</a></li>
                                   <li><a href="27728">𡔈</a></li>
                                   <li><a href="27873">𣠤</a></li>
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