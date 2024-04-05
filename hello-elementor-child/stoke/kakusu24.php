<?php
/*
 * Template Name: kakusu24
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
      }0000000000000

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
      <h1 class="ttl_main">２４画の漢字一覧（漢検級順）</h1>

      <p>総画数２４画の漢字の一覧です。<br>
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
              <option value="#" selected>２４画</option>
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
            <li><a href="bkakusu24">部首別順</a></li>
            <li><a href="ckakusu24">読み順</a></li>
          </ul>
          <ul class="search_menu2">
            <li><a href="#parts01j">準１級</a></li>
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
          <div class="parts_box" id="parts01j">
            <h3 class="ttl_while"><a href="kyu01j">漢字検定準１級</a></h3>
            <ul class="search_parts">
              <li><a class="color2" href="2202">鷹</a></li>
              <li><a class="color2" href="2993">鱗</a></li>
              <li><a class="color2" href="2994">麟</a></li>
              <li><a class="color2" href="3014">鷺</a></li>
              <li><a href="6475">鹼</a></li>
            </ul>
          </div>
          <div class="parts_box" id="parts01">
            <h3 class="ttl_while"><a href="kyu01">漢字検定１級</a></h3>
            <ul class="search_parts">
              <li><a href="3770">囓</a></li>
              <li><a href="3773">齷</a></li>
              <li><a href="3774">齲</a></li>
              <li><a href="3775">齶</a></li>
              <li><a href="3839">鷽</a></li>
              <li><a href="3850">鼇</a></li>
              <li><a href="3895">鱠</a></li>
              <li><a href="3896">鱧</a></li>
              <li><a href="3951">魘</a></li>
              <li><a href="3992">靂</a></li>
              <li><a href="3993">靆</a></li>
              <li><a href="3998">靄</a></li>
              <li><a href="4114">蠹</a></li>
              <li><a href="4511">驟</a></li>
              <li><a href="4654">鬢</a></li>
              <li><a href="4738">鑪</a></li>
              <li><a href="4821">纛</a></li>
              <li><a href="5015">讙</a></li>
              <li><a href="5016">讖</a></li>
              <li><a href="5017">讒</a></li>
              <li><a href="5078">軈</a></li>
              <li><a href="5097">韆</a></li>
              <li><a href="5143">顰</a></li>
              <li><a href="5260">癲</a></li>
              <li><a href="5584">衢</a></li>
              <li><a href="5598">羈</a></li>
              <li><a href="6489">屭</a></li>
              <li><a href="7066">鱟</a></li>
              <li><a href="7072">鱩</a></li>
            </ul>
          </div>
          <div class="parts_box" id="parts0101j">
            <h3 class="ttl_while"><a href="kyu0101j">漢字検定１級 / 準１級</a></h3>
            <ul class="search_parts">
              <li><a class="color2" href="5727">釀</a></li>
              <li><a href="5763">囑</a></li>
              <li><a href="6296">艷</a></li>
              <li><a href="6313">觀</a></li>
              <li><a class="color2" href="6319">讓</a></li>
              <li><a href="6346">靈</a></li>
            </ul>
          </div>
          <div class="parts_box" id="parts">
            <h3 class="ttl_while">漢字検定対象外</h3>
            <ul class="search_parts">
              <li><a href="5713">矗</a></li>
              <li><a href="6570">䵹</a></li>
              <li><a href="6578">䵻</a></li>
              <li><a href="6650">齆</a></li>
              <li><a href="6651">齅</a></li>
              <li><a href="6668">齴</a></li>
              <li><a href="6673">齳</a></li>
              <li><a href="6674">齵</a></li>
              <li><a href="6777">驝</a></li>
              <li><a href="6810">髕</a></li>
              <li><a href="6812">髖</a></li>
              <li><a href="6883">魗</a></li>
              <li><a href="7061">鱫</a></li>
              <li><a href="7062">鱜</a></li>
              <li><a href="7063">鱞</a></li>
              <li><a href="7064">鱤</a></li>
              <li><a href="7065">鱥</a></li>
              <li><a href="7067">鱪</a></li>
              <li><a href="7069">鱐</a></li>
              <li><a href="7070">鱢</a></li>
              <li><a href="7071">鱣</a></li>
              <li><a href="7074">鱯</a></li>
              <li><a href="7075">鱮</a></li>
              <li><a href="7118">鷾</a></li>
              <li><a href="7174">䴈</a></li>
              <li><a href="7179">鸂</a></li>
              <li><a href="7198">鷿</a></li>
              <li><a href="7199">鸊</a></li>
              <li><a href="7208">鷫</a></li>
              <li><a href="7221">䴉</a></li>
              <li><a href="7222">䴋</a></li>
              <li><a href="7223">鸃</a></li>
              <li><a href="7224">䴊</a></li>
              <li><a href="7225">鸀</a></li>
              <li><a href="7226">鸇</a></li>
              <li><a href="7228">䴇</a></li>
              <li><a href="7233">䴌</a></li>
              <li><a href="7234">鸏</a></li>
              <li><a href="7235">鸒</a></li>
              <li><a href="7252">麠</a></li>
              <li><a href="7274">䵄</a></li>
              <li><a href="7326">鼞</a></li>
              <li><a href="7336">韇</a></li>
              <li><a href="7337">韤</a></li>
              <li><a href="7452">䬟</a></li>
              <li><a href="7852">鑫</a></li>
              <li><a href="7853">鑨</a></li>
              <li><a href="7857">鑮</a></li>
              <li><a href="8022">靃</a></li>
              <li><a href="8023">靇</a></li>
              <li><a href="8224">讔</a></li>
              <li><a href="8227">讕</a></li>
              <li><a href="8289">貛</a></li>
              <li><a href="8290">䝔</a></li>
              <li><a href="8331">贛</a></li>
              <li><a href="8460">躞</a></li>
              <li><a href="8461">躝</a></li>
              <li><a href="8495">䡼</a></li>
              <li><a href="8773">醾</a></li>
              <li><a href="8775">醿</a></li>
              <li><a href="8776">醽</a></li>
              <li><a href="9194">羉</a></li>
              <li><a href="9353">艭</a></li>
              <li><a href="9739">虈</a></li>
              <li><a href="9740">䖀</a></li>
              <li><a href="9741">虉</a></li>
              <li><a href="9742">虆</a></li>
              <li><a href="9743">虂</a></li>
              <li><a href="9744">蘒</a></li>
              <li><a href="9778">蠺</a></li>
              <li><a href="9971">蠷</a></li>
              <li><a href="9972">蠵</a></li>
              <li><a href="9986">衋</a></li>
              <li><a href="10100">襻</a></li>
              <li><a href="10101">䙰</a></li>
              <li><a href="10262">瓛</a></li>
              <li><a href="10458">癱</a></li>
              <li><a href="10618">矕</a></li>
              <li><a href="10627">䂎</a></li>
              <li><a href="10738">䃺</a></li>
              <li><a href="11536">攭</a></li>
              <li><a href="11578">斖</a></li>
              <li><a href="11742">曮</a></li>
              <li><a href="11743">曭</a></li>
              <li><a href="12328">欓</a></li>
              <li><a href="12674">儾</a></li>
              <li><a href="12829">欗</a></li>
              <li><a href="13597">囍</a></li>
              <li><a href="13889">壩</a></li>
              <li><a href="14270">孎</a></li>
              <li><a href="15335">欔</a></li>
              <li><a href="15986">灝</a></li>
              <li><a href="15987">灞</a></li>
              <li><a href="15988">灟</a></li>
              <li><a href="16272">爣</a></li>
              <li><a href="16704">矖</a></li>
              <li><a href="16784">礸</a></li>
              <li><a href="16804">禶</a></li>
              <li><a href="16805">禷</a></li>
              <li><a href="16844">穲</a></li>
              <li><a href="16845">穳</a></li>
              <li><a href="16945">籪</a></li>
              <li><a href="17052">纗</a></li>
              <li><a href="17598">襸</a></li>
              <li><a href="17599">襹</a></li>
              <li><a href="17729">讑</a></li>
              <li><a href="17861">躟</a></li>
              <li><a href="17864">躤</a></li>
              <li><a href="18150">鑩</a></li>
              <li><a href="18216">雥</a></li>
              <li><a href="18217">雦</a></li>
              <li><a href="18244">靅</a></li>
              <li><a href="18389">驞</a></li>
              <li><a href="18406">鬡</a></li>
              <li><a href="18407">鬬</a></li>
              <li><a href="18415">魙</a></li>
              <li><a href="18455">鱡</a></li>
              <li><a href="18456">鱦</a></li>
              <li><a href="18552">鸁</a></li>
              <li><a href="18553">鸄</a></li>
              <li><a href="18554">鸅</a></li>
              <li><a href="18555">鸆</a></li>
              <li><a href="18556">鸈</a></li>
              <li><a href="18557">鸉</a></li>
              <li><a href="18558">鸌</a></li>
              <li><a href="18631">巙</a></li>
              <li><a href="19100">㚁</a></li>
              <li><a href="20472">㶞</a></li>
              <li><a href="20473">㶟</a></li>
              <li><a href="20809">㽋</a></li>
              <li><a href="20918">㿚</a></li>
              <li><a href="20919">㿛</a></li>
              <li><a href="21467">䉶</a></li>
              <li><a href="21637">䌰</a></li>
              <li><a href="21638">䌱</a></li>
              <li><a href="21672">䍦</a></li>
              <li><a href="22088">䖃</a></li>
              <li><a href="22316">䚭</a></li>
              <li><a href="22552">䟑</a></li>
              <li><a href="22553">䟒</a></li>
              <li><a href="22633">䠯</a></li>
              <li><a href="22634">䠰</a></li>
              <li><a href="22734">䢲</a></li>
              <li><a href="22822">䤘</a></li>
              <li><a href="22900">䥵</a></li>
              <li><a href="22901">䥶</a></li>
              <li><a href="22902">䥷</a></li>
              <li><a href="23046">䨷</a></li>
              <li><a href="23117">䪉</a></li>
              <li><a href="23204">䫵</a></li>
              <li><a href="23205">䫶</a></li>
              <li><a href="23288">䭥</a></li>
              <li><a href="23365">䮺</a></li>
              <li><a href="23366">䮻</a></li>
              <li><a href="23398">䯥</a></li>
              <li><a href="23399">䯦</a></li>
              <li><a href="23433">䰏</a></li>
              <li><a href="23434">䰑</a></li>
              <li><a href="23455">䰯</a></li>
              <li><a href="23456">䰰</a></li>
              <li><a href="23513">䲐</a></li>
              <li><a href="23514">䲑</a></li>
              <li><a href="23515">䲒</a></li>
              <li><a href="23516">䲓</a></li>
              <li><a href="23517">䲔</a></li>
              <li><a href="23596">䴄</a></li>
              <li><a href="23615">䴫</a></li>
              <li><a href="23635">䵆</a></li>
              <li><a href="23645">䵐</a></li>
              <li><a href="23654">䵛</a></li>
              <li><a href="23675">䵱</a></li>
              <li><a href="23683">䵼</a></li>
              <li><a href="23711">䶠</a></li>
              <li><a href="23712">䶡</a></li>
              <li><a href="23713">䶢</a></li>
              <li><a href="23944">奲</a></li>
              <li><a href="24063">爤</a></li>
              <li><a href="24326">䘍</a></li>
              <li><a href="24370">䴪</a></li>
              <li><a href="25427">欕</a></li>
              <li><a href="26506">㕔</a></li>
              <li><a href="27177">鑦</a></li>
              <li><a href="27369">㺧</a></li>
              <li><a href="27470">䥴</a></li>
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

  <?php wp_footer() ?>