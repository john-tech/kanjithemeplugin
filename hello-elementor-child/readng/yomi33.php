<?php
/*
 * Template Name: Yomi33
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
     <style>
          .bushu_about_box {
               display: none;
          }

          div#sidebar {
               display: none;
          }
     </style>

     <div id="wrapper" class="cf">
          <div id="content">
               <h1 class="ttl_main">音訓検索「む」</h1>
               <aside>
                    <div class="ads_wrapin link_pc">
                         <script async src="../../pagead2.googlesyndication.com/pagead/js/fb9f7.txt?client=ca-pub-3664445671894613" crossorigin="anonymous"></script>
                         <!-- 漢字辞典レスポンシブ１ -->
                         <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3664445671894613" data-ad-slot="5169795341" data-ad-format="horizontal" data-full-width-responsive="true"></ins>
                         <script>
                              (adsbygoogle = window.adsbygoogle || []).push({});
                         </script>
                    </div>
               </aside>
               <p>「む」から始まる読み方をする漢字です。</p>
               <div class="search_narrowdown">
                    <!--IEJSが効かない用-->
                    <script>
                         (function() {
                              var html = document.getElementsByTagName('html') || [];
                              html[0].classList.add('enable-javascript');
                         })();
                    </script>
                    <div class="narrowdown_select">
                         <select name="select" onChange="location.href=value;" class="select1">
                              <option value="yomi01">あ</option>
                              <option value="yomi02">い</option>
                              <option value="yomi03">う</option>
                              <option value="yomi04">え</option>
                              <option value="yomi05">お</option>
                              <option value="yomi06">か</option>
                              <option value="yomi07">き</option>
                              <option value="yomi08">く</option>
                              <option value="yomi09">け</option>
                              <option value="yomi10">こ</option>
                              <option value="yomi11">さ</option>
                              <option value="yomi12">し</option>
                              <option value="yomi13">す</option>
                              <option value="yomi14">せ</option>
                              <option value="yomi15">そ</option>
                              <option value="yomi16">た</option>
                              <option value="yomi17">ち</option>
                              <option value="yomi18">つ</option>
                              <option value="yomi19">て</option>
                              <option value="yomi20">と</option>
                              <option value="yomi21">な</option>
                              <option value="yomi22">に</option>
                              <option value="yomi23">ぬ</option>
                              <option value="yomi24">ね</option>
                              <option value="yomi25">の</option>
                              <option value="yomi26">は</option>
                              <option value="yomi27">ひ</option>
                              <option value="yomi28">ふ</option>
                              <option value="yomi29">へ</option>
                              <option value="yomi30">ほ</option>
                              <option value="yomi31">ま</option>
                              <option value="yomi32">み</option>
                              <option value="#" selected>む</option>
                              <option value="yomi34">め</option>
                              <option value="yomi35">も</option>
                              <option value="yomi36">や</option>
                              <option value="yomi37">ゆ</option>
                              <option value="yomi38">よ</option>
                              <option value="yomi39">ら</option>
                              <option value="yomi40">り</option>
                              <option value="yomi41">る</option>
                              <option value="yomi42">れ</option>
                              <option value="yomi43">ろ</option>
                              <option value="yomi44">わ</option>
                              <option value="yomi45">を</option>
                         </select>
                    </div>
               </div><!--search_narrowdown-->
               <div class="search_data yomi_menu">
                    <ul class="search_menu2">
                         <li id="parts1_menu"><a href="#parts1">む</a></li>
                         <li id="parts2_menu"><a href="#parts2">むい</a></li>
                         <li id="parts3_menu"><a href="#parts3">むか</a></li>
                         <li id="parts4_menu"><a href="#parts4">むき</a></li>
                         <li id="parts5_menu"><a href="#parts5">むく</a></li>
                         <li id="parts6_menu"><a href="#parts6">むけ</a></li>
                         <li id="parts7_menu"><a href="#parts7">むこ</a></li>
                         <li id="parts8_menu"><a href="#parts8">むさ</a></li>
                         <li id="parts9_menu"><a href="#parts9">むし</a></li>
                         <li id="parts10_menu"><a href="#parts10">むす</a></li>
                         <li id="parts11_menu"><a href="#parts11">むせ</a></li>
                         <li id="parts12_menu"><a href="#parts12">むた</a></li>
                         <li id="parts13_menu"><a href="#parts13">むち</a></li>
                         <li id="parts14_menu"><a href="#parts14">むつ</a></li>
                         <li id="parts15_menu"><a href="#parts15">むな</a></li>
                         <li id="parts16_menu"><a href="#parts16">むね</a></li>
                         <li id="parts17_menu"><a href="#parts17">むへ</a></li>
                         <li id="parts18_menu"><a href="#parts18">むら</a></li>
                         <li id="parts19_menu"><a href="#parts19">むれ</a></li>
                         <li id="parts20_menu"><a href="#parts20">むろ</a></li>
                    </ul>
               </div><!--search_data-->
               <div class="display_option">
                    <span class="option_title">表示</span>
                    <div class="option_list">
                         <div class="option_check">
                              <p><label><input type="checkbox" class="display_list_check checkbox_input" id="toggleDisplayJoyo" checked><span class="checkbox_parts">常用漢字</span></label></p>
                              <p><label><input type="checkbox" class="display_list_check checkbox_input" id="toggleDisplayJimmei" checked><span class="checkbox_parts">人名用漢字</span></label></p>
                              <p><label><input type="checkbox" class="display_list_check checkbox_input" id="toggleDisplayOthers" checked><span class="checkbox_parts">その他の漢字</span></label></p>
                         </div>
                         <div class="option_radio">
                              <p><input type="radio" class="display_list_check visually-hidden" name="readingOption" value="all" checked id="radio_all"><label for="radio_all" class="radio_parts">全ての読み</label></p>
                              <p><input type="radio" class="display_list_check visually-hidden" name="readingOption" value="onyomi" id="radio_onyomi"><label for="radio_onyomi" class="radio_parts">音読みのみ</label></p>
                              <p><input type="radio" class="display_list_check visually-hidden" name="readingOption" value="kunyomi" id="radio_kunyomi"><label for="radio_kunyomi" class="radio_parts">訓読みのみ</label></p>
                         </div>
                    </div>
               </div>
               <div id="nodisplay_ads1">
                    <aside>
                         <div class="ads_wraptop2 link_sp">

                              <!-- 漢字辞典レスポンシブカテゴリ上SP -->
                              <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3664445671894613" data-ad-slot="8563864342" data-ad-format="auto" data-full-width-responsive="true"></ins>
                              <script>
                                   (adsbygoogle = window.adsbygoogle || []).push({});
                              </script>
                         </div>
                    </aside>
               </div>
               <div class="color_info">
                    <ul>
                         <li><span>常用漢字の背景色＝</span><span class="color1"></span></li>
                         <li><span>人名用漢字の背景色＝</span><span class="color2"></span></li>
                    </ul>
               </div>
               <div class="parts_box parts_box_select" id="parts1">
                    <h3 class="ttl_while">む</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo onyomi"><a class="color1" href="984">亡<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="6718">兦<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="6719">亾<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="4898">毋<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="5729">无<span class="small">ム</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1281">矛<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="12379">仫<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="24730">务<span class="small">ム</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2921">牟<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="17202">芜<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="24780">呒<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="25035">妩<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="25235">怃<span class="small">ム</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="800">武<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="12461">侔<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="12840">劺<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="18758">㒺<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="20032">㭌<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="15534">洠<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="12523">倵<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="12706">冡<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="17235">莁<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="21787">䏬<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="25452">毪<span class="small">ム</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="813">務<span class="small">ム</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="5156">眸<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="6158">梦<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="14054">娬<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="18192">陚<span class="small">ム</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="602">無<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="13787">堥<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="14110">婺<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="14507">嵍<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="18953">㖼<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="19482">㡔<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="24284">䍙<span class="small">ム</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="812">夢<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="15102">暓<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="15727">溕<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="20081">㮘<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="25551">雾<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="2925">鉾<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="13907">夣<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="13931">奦<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="15383">氁<span class="small">ム</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1258">舞<span class="small">ム</span></a></li>
                         <li class="jimmei onyomi"><a class="color2" href="2882">蕪<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="3302">嘸<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="3624">憮<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="13866">墲<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="14200">嫵<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="16174">熃<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="21585">䋷<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="22142">䗋<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="22589">䟼<span class="small">ム</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1563">謀<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="7105">䳇<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="17969">鄸<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="19430">㠓<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="19864">㩚<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="22430">䜼<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="3810">鴾<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="8018">霚<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="12656">儛<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="16692">瞴<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="21856">䑃<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="22622">䠢<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="23001">䨁<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="5817">鵐<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="21433">䉑<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="23474">䱕<span class="small">ム</span></a></li>
                         <li class="joyo onyomi"><a class="color1" href="1282">霧<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="2883">鵡<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="17714">譕<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="19296">㝱<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="22817">䤓<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="21905">䒉<span class="small">ム</span></a></li>
                         <li class="others_kanji onyomi"><a href="18541">鷡<span class="small">ム</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="080">六<span class="small">む</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts2">
                    <h3 class="ttl_while">むい</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="080">六<span class="small">むい</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts3">
                    <h3 class="ttl_while">むか</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="14330">对<span class="small">む（かう）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="294">向<span class="small">む（かう）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="356">対<span class="small">む（かう）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8607">㴑<span class="small">む（かう）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3031">溯<span class="small">む（かう）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2044">遡<span class="small">む（かう）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6166">對<span class="small">む（かう）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3315">嚮<span class="small">む（かう）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1079">迎<span class="small">むか（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="674">逆<span class="small">むか（える）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2914">逢<span class="small">むか（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4950">訝<span class="small">むか（える）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5532">邀<span class="small">むか（える）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="314">昔<span class="small">むかし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5454">畴<span class="small">むかし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19984">㫺<span class="small">むかし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5453">疇<span class="small">むかし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24799">哕<span class="small">むかつ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12339">噦<span class="small">むかつ（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4795">縢<span class="small">むかばき</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts4">
                    <h3 class="ttl_while">むき</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="212">麦<span class="small">むぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6037">麥<span class="small">むぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3034">麪<span class="small">むぎこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18570">麫<span class="small">むぎこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2111">麺<span class="small">むぎこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6528">麵<span class="small">むぎこ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts5">
                    <h3 class="ttl_while">むく</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="jimmei kunyomi"><a class="color2" href="2983">椋<span class="small">むく</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="294">向<span class="small">む（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2086">剥<span class="small">む（く）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="6467">剝<span class="small">む（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3315">嚮<span class="small">む（く）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3438">尨<span class="small">むくいぬ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14915">报<span class="small">むく（いる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="3088">侑<span class="small">むく（いる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="809">報<span class="small">むく（いる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5454">畴<span class="small">むく（いる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1723">酬<span class="small">むく（いる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8738">酧<span class="small">むく（いる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5453">疇<span class="small">むく（いる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8739">醻<span class="small">むく（いる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5013">讐<span class="small">むく（いる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5014">讎<span class="small">むく（いる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3847">毳<span class="small">むくげ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2530">舜<span class="small">むくげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4178">槿<span class="small">むくげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5414">蕣<span class="small">むくげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9647">橓<span class="small">むくげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21875">䑞<span class="small">むくげ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2973">葎<span class="small">むぐら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2339">躯<span class="small">むくろ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1966">骸<span class="small">むくろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23379">䯐<span class="small">むくろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6474">軀<span class="small">むくろ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts6">
                    <h3 class="ttl_while">むけ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="294">向<span class="small">む（ける）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts7">
                    <h3 class="ttl_while">むこ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="3110">倩<span class="small">むこ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1465">婿<span class="small">むこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6137">壻<span class="small">むこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26289">聓<span class="small">むこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3044">聟<span class="small">むこ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10954">㣼<span class="small">むご（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1850">忍<span class="small">むご（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1958">苛<span class="small">むご（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1370">虐<span class="small">むご（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22094">䖋<span class="small">むご（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1111">惨<span class="small">むご（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23010">䨋<span class="small">むご（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1693">酷<span class="small">むご（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2121">辣<span class="small">むご（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5876">慘<span class="small">むご（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8548">辢<span class="small">むご（い）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="294">向<span class="small">む（こう）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts8">
                    <h3 class="ttl_while">むさ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="6630">鼯<span class="small">むささび</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3219">叨<span class="small">むさぼ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="224">毎<span class="small">むさぼ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2921">牟<span class="small">むさぼ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6443">每<span class="small">むさぼ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2787">沓<span class="small">むさぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6284">冐<span class="small">むさぼ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1272">冒<span class="small">むさぼ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1632">渇<span class="small">むさぼ（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2075">貪<span class="small">むさぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3396">婪<span class="small">むさぼ（る）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6446">渴<span class="small">むさぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11130">愒<span class="small">むさぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23252">䬭<span class="small">むさぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2268">翫<span class="small">むさぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5287">餮<span class="small">むさぼ（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5299">饕<span class="small">むさぼ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts9">
                    <h3 class="ttl_while">むし</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="058">虫<span class="small">むし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9760">䖝<span class="small">むし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5701">蟲<span class="small">むし</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4405">溽<span class="small">むしあつ（い）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5105">狢<span class="small">むじな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5475">貉<span class="small">むじな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8278">貈<span class="small">むじな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23705">䶚<span class="small">むしば</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3774">齲<span class="small">むしば</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2593">蝕<span class="small">むしば（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9974">螙<span class="small">むしば（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4115">蠧<span class="small">むしば（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4114">蠹<span class="small">むしば（む）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3843">毟<span class="small">むし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11333">挘<span class="small">むし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12974">毮<span class="small">むし（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2641">苫<span class="small">むしろ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="547">席<span class="small">むしろ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2261">莞<span class="small">むしろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5351">莚<span class="small">むしろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26461">萖<span class="small">むしろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="17285">葕<span class="small">むしろ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2877">蒲<span class="small">むしろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4532">筵<span class="small">むしろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5396">蓆<span class="small">むしろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5400">蒻<span class="small">むしろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19272">㝕<span class="small">むし（ろ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14312">寍<span class="small">むし（ろ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14316">寕<span class="small">むし（ろ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="14320">寜<span class="small">むし（ろ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1852">寧<span class="small">むし（ろ）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts10">
                    <h3 class="ttl_while">むす</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="24297">䒱<span class="small">む（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4909">烝<span class="small">む（す）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="913">蒸<span class="small">む（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20523">㷥<span class="small">む（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5291">餾<span class="small">む（す）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="26335">艰<span class="small">むずか（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25547">难<span class="small">むずか（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5576">艱<span class="small">むずか（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="958">難<span class="small">むずか（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6417">難<span class="small">むずか（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9354">囏<span class="small">むずか（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1881">憤<span class="small">むずか（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8998">紉<span class="small">むす（ぶ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2289">掬<span class="small">むす（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="494">結<span class="small">むす（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4780">綰<span class="small">むす（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1514">締<span class="small">むす（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4748">紆<span class="small">むす（ぼれる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8994">䊸<span class="small">むす（ぼれる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="036">女<span class="small">むすめ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1283">娘<span class="small">むすめ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1448">嬢<span class="small">むすめ</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6162">孃<span class="small">むすめ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts11">
                    <h3 class="ttl_while">むせ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1947">咽<span class="small">むせ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3260">哽<span class="small">むせ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="21984">䓹<span class="small">むせ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23245">䬥<span class="small">むせ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3299">噎<span class="small">むせ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5294">饐<span class="small">むせ（ぶ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6205">旡<span class="small">む（せる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="18750">㒫<span class="small">む（せる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3299">噎<span class="small">む（せる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1947">咽<span class="small">むせ（る）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts12">
                    <h3 class="ttl_while">むた</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1449">冗<span class="small">むだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="12703">宂<span class="small">むだ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="578">徒<span class="small">むだ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5491">贅<span class="small">むだ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts13">
                    <h3 class="ttl_while">むち</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="2356">荊<span class="small">むち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6523">荆<span class="small">むち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3694">捶<span class="small">むち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4520">笘<span class="small">むち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4521">笞<span class="small">むち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="8811">萗<span class="small">むち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15220">椘<span class="small">むち</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="881">策<span class="small">むち</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2653">楚<span class="small">むち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3789">敲<span class="small">むち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11565">㪣<span class="small">むち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="22594">䠂<span class="small">むち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25581">鞑<span class="small">むち</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2897">鞭<span class="small">むち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2708">韃<span class="small">むち</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25284">挞<span class="small">むちう（つ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2974">掠<span class="small">むちう（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3694">捶<span class="small">むちう（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4521">笞<span class="small">むちう（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="20069">㮄<span class="small">むちう（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4166">榜<span class="small">むちう（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3728">撻<span class="small">むちう（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25581">鞑<span class="small">むちう（つ）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2897">鞭<span class="small">むちう（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2708">韃<span class="small">むちう（つ）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts14">
                    <h3 class="ttl_while">むつ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="6992">鯥<span class="small">むつ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="080">六<span class="small">む（つ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25547">难<span class="small">むつか（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="958">難<span class="small">むつか（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6417">難<span class="small">むつか（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5054">褓<span class="small">むつき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5059">襁<span class="small">むつき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6505">繈<span class="small">むつき</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4809">繦<span class="small">むつき</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="080">六<span class="small">むっ（つ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2105">睦<span class="small">むつ（ぶ）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2105">睦<span class="small">むつ（まじい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2105">睦<span class="small">むつ（む）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts15">
                    <h3 class="ttl_while">むな</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="849">胸<span class="small">むな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11798">胷<span class="small">むな</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1841">棟<span class="small">むな</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9152">䋝<span class="small">むながい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5084">鞁<span class="small">むながい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5086">鞅<span class="small">むながい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4820">纓<span class="small">むながい</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4122">桴<span class="small">むなぎ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5665">冲<span class="small">むな（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24973">圹<span class="small">むな（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1189">沖<span class="small">むな（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25357">旷<span class="small">むな（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="013">空<span class="small">むな（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3927">昿<span class="small">むな（しい）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1371">虚<span class="small">むな（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9749">虗<span class="small">むな（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5192">隍<span class="small">むな（しい）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="6458">虛<span class="small">むな（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="2239">廓<span class="small">むな（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3507">廖<span class="small">むな（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5651">豁<span class="small">むな（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3355">壙<span class="small">むな（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3926">曠<span class="small">むな（しい）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4214">肓<span class="small">むなもと</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts16">
                    <h3 class="ttl_while">むね</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="1117">旨<span class="small">むね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3197">匈<span class="small">むね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11619">㫖<span class="small">むね</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="896">宗<span class="small">むね</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="849">胸<span class="small">むね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="11798">胷<span class="small">むね</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1841">棟<span class="small">むね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="10081">䘳<span class="small">むね</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4309">膺<span class="small">むね</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1664">襟<span class="small">むね</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts17">
                    <h3 class="ttl_while">むへ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="others_kanji kunyomi"><a href="18623">冝<span class="small">むべ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23955">宐<span class="small">むべ</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1652">宜<span class="small">むべ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="19273">㝖<span class="small">むべ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts18">
                    <h3 class="ttl_while">むら</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="054">村<span class="small">むら</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2196">邑<span class="small">むら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5199">邨<span class="small">むら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="954">党<span class="small">むら</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="683">群<span class="small">むら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6277">羣<span class="small">むら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23309">䭽<span class="small">むら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5834">黨<span class="small">むら</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24528">丛<span class="small">むら（がる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="2102">蜂<span class="small">むら（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5405">蔘<span class="small">むら（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5406">蔟<span class="small">むら（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6530">麇<span class="small">むら（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9673">薓<span class="small">むら（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="15273">樷<span class="small">むら（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4591">簇<span class="small">むら（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9844">䗬<span class="small">むら（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24128">藂<span class="small">むら（がる）</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2654">叢<span class="small">むら（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="3742">攅<span class="small">むら（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7250">麏<span class="small">むら（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4559">麕<span class="small">むら（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6492">攢<span class="small">むら（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="9843">蠭<span class="small">むら（がる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="16416">猬<span class="small">むらが（る）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4084">蝟<span class="small">むらが（る）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="1114">紫<span class="small">むらさき</span></a></li>
                         <li class="jimmei kunyomi"><a class="color2" href="2556">庄<span class="small">むらざと</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24297">䒱<span class="small">む（らす）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="913">蒸<span class="small">む（らす）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts19">
                    <h3 class="ttl_while">むれ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="683">群<span class="small">む（れ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6277">羣<span class="small">む（れ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23309">䭽<span class="small">む（れ）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="24297">䒱<span class="small">む（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="683">群<span class="small">む（れる）</span></a></li>
                         <li class="joyo kunyomi"><a class="color1" href="913">蒸<span class="small">む（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="6277">羣<span class="small">む（れる）</span></a></li>
                         <li class="others_kanji kunyomi"><a href="23309">䭽<span class="small">む（れる）</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <div class="parts_box parts_box_select" id="parts20">
                    <h3 class="ttl_while">むろ</h3>
                    <ul class="search_parts yomi_parts">
                         <li class="joyo kunyomi"><a class="color1" href="152">室<span class="small">むろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="25937">窝<span class="small">むろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="4150">榁<span class="small">むろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="5619">窩<span class="small">むろ</span></a></li>
                         <li class="others_kanji kunyomi"><a href="7012">鰘<span class="small">むろあじ</span></a></li>
                    </ul>
               </div><!--parts_box-->
               <p id="noDisplayMessage2" style="display:none;">※<span class="marker">「常用漢字」「人名用漢字」「その他の漢字」のいずれかにチェックをつけてください。</span></p>
               <p id="noDisplayMessage" style="display:none;">※条件に該当する字がありません。<br>表示条件の漢字の種別「常用漢字」「人名用漢字」「その他の漢字」、または読みの種別の「全ての読み」「音読み」「訓読み」などを変更してください。</p>
               <div id="nodisplay_ads2">
                    <aside>
                         <div class="ads_wrapin link_pc">

                              <!-- レスポンシブ個別 -->
                              <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3664445671894613" data-ad-slot="3470994118" data-ad-format="auto" data-full-width-responsive="true"></ins>
                              <script>
                                   (adsbygoogle = window.adsbygoogle || []).push({});
                              </script>
                         </div>
                    </aside>
               </div>
               <!--PC版-->
               <div class="search50 link_pc">
                    <h2 class="left_border">五十音検索</h2>
                    <table>
                         <tr>
                              <td><a href="yomi01">あ</a></td>
                              <td><a href="yomi06">か</a></td>
                              <td><a href="yomi11">さ</a></td>
                              <td><a href="yomi16">た</a></td>
                              <td><a href="yomi21">な</a></td>
                              <td><a href="yomi26">は</a></td>
                              <td><a href="yomi31">ま</a></td>
                              <td><a href="yomi36">や</a></td>
                              <td><a href="yomi39">ら</a></td>
                              <td><a href="yomi44">わ</a></td>
                         </tr>
                         <tr>
                              <td><a href="yomi02">い</a></td>
                              <td><a href="yomi07">き</a></td>
                              <td><a href="yomi12">し</a></td>
                              <td><a href="yomi17">ち</a></td>
                              <td><a href="yomi22">に</a></td>
                              <td><a href="yomi27">ひ</a></td>
                              <td><a href="yomi32">み</a></td>
                              <td>&nbsp;</td>
                              <td><a href="yomi40">り</a></td>
                              <td>&nbsp;</td>
                         </tr>
                         <tr>
                              <td><a href="yomi03">う</a></td>
                              <td><a href="yomi08">く</a></td>
                              <td><a href="yomi13">す</a></td>
                              <td><a href="yomi18">つ</a></td>
                              <td><a href="yomi23">ぬ</a></td>
                              <td><a href="yomi28">ふ</a></td>
                              <td><a href="yomi33">む</a></td>
                              <td><a href="yomi37">ゆ</a></td>
                              <td><a href="yomi41">る</a></td>
                              <td><a href="yomi45">を</a></td>
                         </tr>
                         <tr>
                              <td><a href="yomi04">え</a></td>
                              <td><a href="yomi09">け</a></td>
                              <td><a href="yomi14">せ</a></td>
                              <td><a href="yomi19">て</a></td>
                              <td><a href="yomi24">ね</a></td>
                              <td><a href="yomi29">へ</a></td>
                              <td><a href="yomi34">め</a></td>
                              <td>&nbsp;</td>
                              <td><a href="yomi42">れ</a></td>
                              <td>&nbsp;</td>
                         </tr>
                         <tr>
                              <td><a href="yomi05">お</a></td>
                              <td><a href="yomi10">こ</a></td>
                              <td><a href="yomi15">そ</a></td>
                              <td><a href="yomi20">と</a></td>
                              <td><a href="yomi25">の</a></td>
                              <td><a href="yomi30">ほ</a></td>
                              <td><a href="yomi35">も</a></td>
                              <td><a href="yomi38">よ</a></td>
                              <td><a href="yomi43">ろ</a></td>
                              <td>&nbsp;</td>
                         </tr>
                    </table>
               </div><!--link_pc-->
               <!--SP版-->
               <div class="search50 link_sp">
                    <h2 class="left_border">五十音検索</h2>
                    <table>
                         <tr>
                              <td><a href="yomi01">あ</a></td>
                              <td><a href="yomi02">い</a></td>
                              <td><a href="yomi03">う</a></td>
                              <td><a href="yomi04">え</a></td>
                              <td><a href="yomi05">お</a></td>
                         </tr>
                         <tr>
                              <td><a href="yomi06">か</a></td>
                              <td><a href="yomi07">き</a></td>
                              <td><a href="yomi08">く</a></td>
                              <td><a href="yomi09">け</a></td>
                              <td><a href="yomi10">こ</a></td>
                         </tr>
                         <tr>
                              <td><a href="yomi11">さ</a></td>
                              <td><a href="yomi12">し</a></td>
                              <td><a href="yomi13">す</a></td>
                              <td><a href="yomi14">せ</a></td>
                              <td><a href="yomi15">そ</a></td>
                         </tr>
                         <tr>
                              <td><a href="yomi16">た</a></td>
                              <td><a href="yomi17">ち</a></td>
                              <td><a href="yomi18">つ</a></td>
                              <td><a href="yomi19">て</a></td>
                              <td><a href="yomi20">と</a></td>
                         </tr>
                         <tr>
                              <td><a href="yomi21">な</a></td>
                              <td><a href="yomi22">に</a></td>
                              <td><a href="yomi23">ぬ</a></td>
                              <td><a href="yomi24">ね</a></td>
                              <td><a href="yomi25">の</a></td>
                         </tr>
                         <tr>
                              <td><a href="yomi26">は</a></td>
                              <td><a href="yomi27">ひ</a></td>
                              <td><a href="yomi28">ふ</a></td>
                              <td><a href="yomi29">へ</a></td>
                              <td><a href="yomi30">ほ</a></td>
                         </tr>
                         <tr>
                              <td><a href="yomi31">ま</a></td>
                              <td><a href="yomi32">み</a></td>
                              <td><a href="yomi33">む</a></td>
                              <td><a href="yomi34">め</a></td>
                              <td><a href="yomi35">も</a></td>
                         </tr>
                         <tr>
                              <td><a href="yomi36">や</a></td>
                              <td>&nbsp;</td>
                              <td><a href="yomi37">ゆ</a></td>
                              <td>&nbsp;</td>
                              <td><a href="yomi38">よ</a></td>
                         </tr>
                         <tr>
                              <td><a href="yomi39">ら</a></td>
                              <td><a href="yomi40">り</a></td>
                              <td><a href="yomi41">る</a></td>
                              <td><a href="yomi42">れ</a></td>
                              <td><a href="yomi43">ろ</a></td>
                         </tr>
                         <tr>
                              <td><a href="yomi44">わ</a></td>
                              <td>&nbsp;</td>
                              <td><a href="yomi45">を</a></td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                         </tr>
                    </table>
               </div><!--link_sp-->
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
                         <ins class="adsbygoogle ads_responsive_2" style="display:inline-block" data-ad-client="ca-pub-3664445671894613" data-ad-slot="6642164275"></ins>
                         <script>
                              (adsbygoogle = window.adsbygoogle || []).push({});
                         </script>
                    </div>
                    <div class="side_bnr link_pc">
                         <a href="kotoshi/kanjivote.php"><img src="../images/2023_side_bnr.jpg" alt="今年の漢字"></a>
                    </div>
                    <div class="side_bnr link_sp">
                         <a href="kotoshi/kanjivote.php"><img src="../images/2023_sp_bnr.jpg" alt="今年の漢字"></a>
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
                              <p class="ttl_normal_s">漢字検索ランキング<span class="rank_update">11/17更新</span></p>
                              <ul class="ChangeElem_Btn_Content2 rank_menu">
                                   <li class="ChangeElem_Btn2">デイリー</li>
                                   <li class="ChangeElem_Btn2">週間</li>
                                   <li class="ChangeElem_Btn2">月間</li>
                              </ul>
                              <div class="ChangeElem_Panel2">
                                   <ul class="side_rank sr_01">
                                        <li><a href="059" title="漢字「中」のページ"><span class="rank">1</span><span class="jp">中</span></a></li>
                                        <li><a href="190" title="漢字「長」のページ"><span class="rank">6</span><span class="jp">長</span></a></li>
                                        <li><a href="136" title="漢字「国」のページ"><span class="rank">2</span><span class="jp">国</span></a></li>
                                        <li><a href="252" title="漢字「駅」のページ"><span class="rank">7</span><span class="jp">駅</span></a></li>
                                        <li><a href="071" title="漢字「本」のページ"><span class="rank">3</span><span class="jp">本</span></a></li>
                                        <li><a href="671" title="漢字「寄」のページ"><span class="rank">8</span><span class="jp">寄</span></a></li>
                                        <li><a href="086" title="漢字「家」のページ"><span class="rank">4</span><span class="jp">家</span></a></li>
                                        <li><a href="114" title="漢字「兄」のページ"><span class="rank">9</span><span class="jp">兄</span></a></li>
                                        <li><a href="775" title="漢字「提」のページ"><span class="rank">5</span><span class="jp">提</span></a></li>
                                        <li><a href="12934" title="漢字「殺」のページ"><span class="rank">10</span><span class="jp">殺</span></a></li>
                                   </ul>
                              </div><!--ChangeElem_Panel2-->
                              <div class="ChangeElem_Panel2">
                                   <ul class="side_rank">
                                        <li><a href="059" title="漢字「中」のページ"><span class="rank">1</span><span class="jp">中</span></a></li>
                                        <li><a href="163" title="漢字「新」のページ"><span class="rank">6</span><span class="jp">新</span></a></li>
                                        <li><a href="423" title="漢字「有」のページ"><span class="rank">2</span><span class="jp">有</span></a></li>
                                        <li><a href="602" title="漢字「無」のページ"><span class="rank">7</span><span class="jp">無</span></a></li>
                                        <li><a href="071" title="漢字「本」のページ"><span class="rank">3</span><span class="jp">本</span></a></li>
                                        <li><a href="911" title="漢字「将」のページ"><span class="rank">8</span><span class="jp">将</span></a></li>
                                        <li><a href="086" title="漢字「家」のページ"><span class="rank">4</span><span class="jp">家</span></a></li>
                                        <li><a href="190" title="漢字「長」のページ"><span class="rank">9</span><span class="jp">長</span></a></li>
                                        <li><a href="136" title="漢字「国」のページ"><span class="rank">5</span><span class="jp">国</span></a></li>
                                        <li><a href="094" title="漢字「海」のページ"><span class="rank">10</span><span class="jp">海</span></a></li>
                                   </ul>
                              </div><!--ChangeElem_Panel2-->
                              <div class="ChangeElem_Panel2">
                                   <ul class="side_rank">
                                        <li><a href="059" title="漢字「中」のページ"><span class="rank">1</span><span class="jp">中</span></a></li>
                                        <li><a href="086" title="漢字「家」のページ"><span class="rank">6</span><span class="jp">家</span></a></li>
                                        <li><a href="991" title="漢字「優」のページ"><span class="rank">2</span><span class="jp">優</span></a></li>
                                        <li><a href="398" title="漢字「美」のページ"><span class="rank">7</span><span class="jp">美</span></a></li>
                                        <li><a href="602" title="漢字「無」のページ"><span class="rank">3</span><span class="jp">無</span></a></li>
                                        <li><a href="423" title="漢字「有」のページ"><span class="rank">8</span><span class="jp">有</span></a></li>
                                        <li><a href="439" title="漢字「和」のページ"><span class="rank">4</span><span class="jp">和</span></a></li>
                                        <li><a href="071" title="漢字「本」のページ"><span class="rank">9</span><span class="jp">本</span></a></li>
                                        <li><a href="440" title="漢字「愛」のページ"><span class="rank">5</span><span class="jp">愛</span></a></li>
                                        <li><a href="027" title="漢字「子」のページ"><span class="rank">10</span><span class="jp">子</span></a></li>
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
                              <ul class="other_site">
                                   <li><a href="exercisebook/free.php">漢字練習帳</a></li>
                                   <li><a href="exercisebook/free.php#kr1">カスタム練習帳</a></li>
                                   <li><a href="exercisebook/free.php#kr2">漢検級別（学年別）練習帳</a></li>
                              </ul>
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
     </div>    <script>
    jQuery(document).ready(function($) { 
    $('.search_parts li a').mouseenter(function() { 
        var star = $(this).text(); 
        var anchorText = $(this).contents().filter(function() {
            return this.nodeType === 3;
        }).text().trim();
        var spanText = $(this).find('span.small').text().trim();

        // Log the text of the anchor tag to the console
        console.log("Anchor Text:", anchorText);
        star2 ="";
        $('.search_parts li a').attr('href','<?php echo home_url(); ?>'+'/detail-three/'+'/?bold='+anchorText+'&normal='+spanText);  
      
    });
        });
</script><?php wp_footer() ?>