<?php
/*
 * Template Name: kakusu25
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
      <h1 class="ttl_main">２５画の漢字一覧（漢検級順）</h1>

      <p>総画数２５画の漢字の一覧です。<br>
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
              <option value="kakusu23">２３画</option>
              <option value="kakusu24">２４画</option>
              <option value="#" selected>２５画</option>
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
            <li><a href="bkakusu25">部首別順</a></li>
            <li><a href="ckakusu25">読み順</a></li>
          </ul>
          <ul class="search_menu2">
            <li><a href="#parts01">１級</a></li>
            <li><a href="#parts0101j"><span class="jyun">１ / 準１</span></a></li>
            <li><a href="#parts">対象外</a></li>
          </ul>
        </div><!--search_data-->
        <aside>
          <div class="ads_wraptop2 link_sp">

          </div>
        </aside>
        <div class="bushu_wrap">
          <div class="color_info">
            <ul>
              <li><span>常用漢字の背景色＝</span><span class="color1"></span></li>
              <li><span>人名用漢字の背景色＝</span><span class="color2"></span></li>
            </ul>
          </div>
          <div class="parts_box" id="parts01">
            <h3 class="ttl_while"><a href="kyu01">漢字検定１級</a></h3>
            <ul class="search_parts">
              <li><a href="3047">鑵</a></li>
              <li><a href="3746">攬</a></li>
              <li><a href="3792">黌</a></li>
              <li><a href="3851">鼈</a></li>
              <li><a href="3991">靉</a></li>
              <li><a href="4300">躡</a></li>
              <li><a href="4318">臠</a></li>
              <li><a href="4611">籬</a></li>
              <li><a href="4653">鬣</a></li>
              <li><a href="4739">鑰</a></li>
              <li><a href="4853">釁</a></li>
              <li><a href="5144">顱</a></li>
              <li><a href="5277">糶</a></li>
              <li><a href="6506">纘</a></li>
            </ul>
          </div>
          <div class="parts_box" id="parts0101j">
            <h3 class="ttl_while"><a href="kyu0101j">漢字検定１級 / 準１級</a></h3>
            <ul class="search_parts">
              <li><a href="5702">蠻</a></li>
              <li><a href="5750">灣</a></li>
              <li><a href="6100">鹽</a></li>
              <li><a class="color2" href="6177">廳</a></li>
            </ul>
          </div>
          <div class="parts_box" id="parts">
            <h3 class="ttl_while">漢字検定対象外</h3>
            <ul class="search_parts">
              <li><a href="3030">欝</a></li>
              <li><a href="6311">覊</a></li>
              <li><a href="6563">黵</a></li>
              <li><a href="6571">鼉</a></li>
              <li><a href="6585">鼟</a></li>
              <li><a href="6652">齇</a></li>
              <li><a href="6675">齺</a></li>
              <li><a href="6676">齻</a></li>
              <li><a href="6687">龣</a></li>
              <li><a href="6856">䰐</a></li>
              <li><a href="6939">鱭</a></li>
              <li><a href="7068">鱰</a></li>
              <li><a href="7076">鱨</a></li>
              <li><a href="7078">鱴</a></li>
              <li><a href="7185">鸎</a></li>
              <li><a href="7205">鸑</a></li>
              <li><a href="7230">鸐</a></li>
              <li><a href="7231">鸋</a></li>
              <li><a href="7232">鸍</a></li>
              <li><a href="7338">韉</a></li>
              <li><a href="7339">䪊</a></li>
              <li><a href="7850">䮽</a></li>
              <li><a href="7854">鑱</a></li>
              <li><a href="7855">鑲</a></li>
              <li><a href="7856">鑯</a></li>
              <li><a href="7858">鑭</a></li>
              <li><a href="7896">鬭</a></li>
              <li><a href="8077">觿</a></li>
              <li><a href="8229">讘</a></li>
              <li><a href="8230">讛</a></li>
              <li><a href="8251">䝄</a></li>
              <li><a href="8422">躢</a></li>
              <li><a href="8778">釂</a></li>
              <li><a href="8870">籭</a></li>
              <li><a href="8943">籩</a></li>
              <li><a href="8944">籮</a></li>
              <li><a href="9154">纚</a></li>
              <li><a href="9296">臡</a></li>
              <li><a href="10095">襽</a></li>
              <li><a href="10619">䂄</a></li>
              <li><a href="10620">矙</a></li>
              <li><a href="10621">矘</a></li>
              <li><a href="11022">戅</a></li>
              <li><a href="11537">攮</a></li>
              <li><a href="11595">斸</a></li>
              <li><a href="12329">欘</a></li>
              <li><a href="12330">欛</a></li>
              <li><a href="12832">欙</a></li>
              <li><a href="13600">囔</a></li>
              <li><a href="14759">彠</a></li>
              <li><a href="15131">曯</a></li>
              <li><a href="15336">欚</a></li>
              <li><a href="15989">灠</a></li>
              <li><a href="15991">灢</a></li>
              <li><a href="16273">爥</a></li>
              <li><a href="16343">犪</a></li>
              <li><a href="16575">瓥</a></li>
              <li><a href="16706">矡</a></li>
              <li><a href="16785">礹</a></li>
              <li><a href="16946">籫</a></li>
              <li><a href="17053">纙</a></li>
              <li><a href="17730">讗</a></li>
              <li><a href="17863">躣</a></li>
              <li><a href="17865">躥</a></li>
              <li><a href="18151">鑬</a></li>
              <li><a href="18152">鑳</a></li>
              <li><a href="18270">韥</a></li>
              <li><a href="18298">顲</a></li>
              <li><a href="18457">鱬</a></li>
              <li><a href="18458">鱱</a></li>
              <li><a href="18568">麡</a></li>
              <li><a href="18591">鼝</a></li>
              <li><a href="18613">齸</a></li>
              <li><a href="18614">齹</a></li>
              <li><a href="19024">㘛</a></li>
              <li><a href="19101">㚂</a></li>
              <li><a href="19250">㜼</a></li>
              <li><a href="19260">㝈</a></li>
              <li><a href="19297">㝲</a></li>
              <li><a href="19886">㩸</a></li>
              <li><a href="20929">㿩</a></li>
              <li><a href="21527">䊳</a></li>
              <li><a href="21528">䊴</a></li>
              <li><a href="21640">䌳</a></li>
              <li><a href="22085">䕿</a></li>
              <li><a href="22086">䖁</a></li>
              <li><a href="22450">䝕</a></li>
              <li><a href="22821">䤗</a></li>
              <li><a href="22903">䥸</a></li>
              <li><a href="23008">䨉</a></li>
              <li><a href="23047">䨸</a></li>
              <li><a href="23118">䪋</a></li>
              <li><a href="23206">䫷</a></li>
              <li><a href="23289">䭦</a></li>
              <li><a href="23367">䮼</a></li>
              <li><a href="23435">䰓</a></li>
              <li><a href="23436">䰔</a></li>
              <li><a href="23443">䰞</a></li>
              <li><a href="23518">䲖</a></li>
              <li><a href="23519">䲗</a></li>
              <li><a href="23598">䴍</a></li>
              <li><a href="23607">䴞</a></li>
              <li><a href="23655">䵜</a></li>
              <li><a href="23676">䵲</a></li>
              <li><a href="23677">䵳</a></li>
              <li><a href="23678">䵴</a></li>
              <li><a href="23714">䶣</a></li>
              <li><a href="23715">䶤</a></li>
              <li><a href="23727">䶴</a></li>
              <li><a href="23851">戆</a></li>
              <li><a href="24143">贜</a></li>
              <li><a href="24171">饝</a></li>
              <li><a href="24238">㱎</a></li>
              <li><a href="24283">䌴</a></li>
              <li><a href="24967">囕</a></li>
              <li><a href="25008">壪</a></li>
              <li><a href="26476">䲘</a></li>
              <li><a href="26814">豒</a></li>
              <li><a href="27182">㩹</a></li>
            </ul>
          </div>
          <aside>
            <div class="ads_wrapin">

              <!-- レスポンシブ３ -->
              <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3664445671894613" data-ad-slot="5260091654" data-ad-format="auto" data-full-width-responsive="true"></ins>
              <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
            </div>
          </aside>
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

        <div class="ads_wrap side_pc">
          <style>
            .ads_responsive_2 {
              display: none;
            }

            @media(min-width: 1095px) {
              .ads_responsive_2 {
                width: 300px;
                height: 600px;
              }
            }
          </style>

          <!-- 漢字辞典レスポンシブ２ -->

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
          <div class="side_box">
            <p class="ttl_main_s togglemenu">漢字情報</p>
            <div class="togglebox">
              <ul class="other_site">
                <li><a href="">偏旁（偏旁冠脚）</a></li>
                <li><a href="kotoshi/">今年の漢字</a></li>
                <li><a href="kotoshi/rekidai">歴代の今年の漢字</a></li>
                <li><a href="osusume">おすすめの漢字辞典・漢和辞典</a></li>
              </ul>
            </div><!--togglebox-->
          </div><!--side_box-->
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