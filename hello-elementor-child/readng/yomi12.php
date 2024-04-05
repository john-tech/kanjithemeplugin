<?php
/*
 * Template Name: Yomi12
 * */

get_header();

?>
<link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri(); ?>/assest/css/html5reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri(); ?>/assest/css/styleed06.css?20231023" media="screen" />
<link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri(); ?>/assest/css/style_kanjied06.css?20231023" media="screen" />
<title>漢字を読みから検索（音訓検索）</title>
<script src="<?= get_stylesheet_directory_uri(); ?>/assest/js/jquery-3.4.1.min.js"></script>
<script src="<?= get_stylesheet_directory_uri(); ?>/assest/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?= get_stylesheet_directory_uri(); ?>/assest/js/main/main0598.js?20231008">
</script>
<script type="text/javascript" src="<?= get_stylesheet_directory_uri(); ?>/assest/js/kanji/main0598.js?20231008">
</script>
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
            <h1 class="ttl_main">音訓検索「し」</h1>
            <aside>
                <div class="ads_wrapin link_pc">

                    <!-- 漢字辞典レスポンシブ１ -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3664445671894613" data-ad-slot="5169795341" data-ad-format="horizontal" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </aside>
            <p>「し」から始まる読み方をする漢字です。</p>
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
                        <option value="#" selected>し</option>
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
                        <option value="yomi33">む</option>
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
            </div>
            <!--search_narrowdown-->
            <div class="search_data yomi_menu">
                <ul class="search_menu2">
                    <li id="parts1_menu"><a href="#parts1">し</a></li>
                    <li id="parts2_menu"><a href="#parts2">しあ</a></li>
                    <li id="parts3_menu"><a href="#parts3">しい</a></li>
                    <li id="parts4_menu"><a href="#parts4">しお</a></li>
                    <li id="parts5_menu"><a href="#parts5">しか</a></li>
                    <li id="parts6_menu"><a href="#parts6">しき</a></li>
                    <li id="parts7_menu"><a href="#parts7">しく</a></li>
                    <li id="parts8_menu"><a href="#parts8">しけ</a></li>
                    <li id="parts9_menu"><a href="#parts9">しこ</a></li>
                    <li id="parts10_menu"><a href="#parts10">しさ</a></li>
                    <li id="parts11_menu"><a href="#parts11">しし</a></li>
                    <li id="parts12_menu"><a href="#parts12">しす</a></li>
                    <li id="parts13_menu"><a href="#parts13">した</a></li>
                    <li id="parts14_menu"><a href="#parts14">しち</a></li>
                    <li id="parts15_menu"><a href="#parts15">しつ</a></li>
                    <li id="parts16_menu"><a href="#parts16">して</a></li>
                    <li id="parts17_menu"><a href="#parts17">しと</a></li>
                    <li id="parts18_menu"><a href="#parts18">しな</a></li>
                    <li id="parts19_menu"><a href="#parts19">しぬ</a></li>
                    <li id="parts20_menu"><a href="#parts20">しの</a></li>
                    <li id="parts21_menu"><a href="#parts21">しは</a></li>
                    <li id="parts22_menu"><a href="#parts22">しひ</a></li>
                    <li id="parts23_menu"><a href="#parts23">しふ</a></li>
                    <li id="parts24_menu"><a href="#parts24">しへ</a></li>
                    <li id="parts25_menu"><a href="#parts25">しほ</a></li>
                    <li id="parts26_menu"><a href="#parts26">しま</a></li>
                    <li id="parts27_menu"><a href="#parts27">しみ</a></li>
                    <li id="parts28_menu"><a href="#parts28">しめ</a></li>
                    <li id="parts29_menu"><a href="#parts29">しも</a></li>
                    <li id="parts30_menu"><a href="#parts30">しや</a></li>
                    <li id="parts31_menu"><a href="#parts31">しゆ</a></li>
                    <li id="parts32_menu"><a href="#parts32">しよ</a></li>
                    <li id="parts33_menu"><a href="#parts33">しら</a></li>
                    <li id="parts34_menu"><a href="#parts34">しり</a></li>
                    <li id="parts35_menu"><a href="#parts35">しる</a></li>
                    <li id="parts36_menu"><a href="#parts36">しれ</a></li>
                    <li id="parts37_menu"><a href="#parts37">しろ</a></li>
                    <li id="parts38_menu"><a href="#parts38">しわ</a></li>
                    <li id="parts39_menu"><a href="#parts39">しん</a></li>
                </ul>
            </div>
            <!--search_data-->
            <div class="display_option">
                <span class="option_title">表示</span>
                <div class="option_list">
                    <div class="option_check">
                        <p><label><input type="checkbox" class="display_list_check checkbox_input" id="toggleDisplayJoyo" checked><span class="checkbox_parts">常用漢字</span></label></p>
                        <p><label><input type="checkbox" class="display_list_check checkbox_input" id="toggleDisplayJimmei" checked><span class="checkbox_parts">人名用漢字</span></label>
                        </p>
                        <p><label><input type="checkbox" class="display_list_check checkbox_input" id="toggleDisplayOthers" checked><span class="checkbox_parts">その他の漢字</span></label>
                        </p>
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
                <h3 class="ttl_while">し</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="6021">厶<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="027">子<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="522">士<span class="small">シ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2460">之<span class="small">シ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2466">巳<span class="small">シ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3439">尸<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="147">止<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="519">氏<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="716">支<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6612">㞢<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13031">亖<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="026">四<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="144">矢<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="146">市<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="305">仕<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="520">史<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="523">司<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="722">示<span class="small">シ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2461">仔<span class="small">シ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2464">只<span class="small">シ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3212">卮<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24530">丝<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="028">糸<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="029">字<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="150">自<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="303">死<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="307">次<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="888">至<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1117">旨<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1119">芝<span class="small">シ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2467">弛<span class="small">シ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2471">此<span class="small">シ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4000">朿<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9371">芓<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12823">劧<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13014">乨<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13229">吇<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13641">圯<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14272">孖<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14611">师<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15437">汜<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18601">齐<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18853">㕄<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19251">㜽<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19339">㞨<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19957">㫑<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20689">㺨<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22944">䦻<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24195">㕜<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="719">志<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="723">似<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="886">私<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1113">伺<span class="small">シ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2468">孜<span class="small">シ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3332">址<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4325">沚<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5180">阯<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5648">豕<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6171">巵<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6172">帋<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9389">芷<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11031">忯<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11036">忮<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11236">戺<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11285">扺<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11619">㫖<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11945">杍<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12408">佀<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12680">兕<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13053">伿<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13186">厎<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13247">吱<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13652">坁<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13667">坘<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15439">汥<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15440">汦<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19460">㠼<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20175">㰞<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20625">㹝<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20694">㺭<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26934">迉<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="145">姉<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="301">始<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="306">使<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="721">枝<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1115">刺<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1195">抵<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1424">祉<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1426">侍<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1710">肢<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1776">斉<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3082">侈<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4333">泗<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5324">苡<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5633">祀<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6655">亝<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9401">苢<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9408">茋<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9409">茌<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9438">茊<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10301">甾<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10827">秄<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11962">杫<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12446">佽<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12447">佌<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12756">刾<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13178">卶<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13267">呞<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13275">呩<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13690">坻<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13993">姊<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13998">姒<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14273">孠<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14916">抧<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14923">拞<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15478">沵<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15479">沶<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15480">泀<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15496">泜<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15500">泤<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16360">狋<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16710">矷<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18901">㕽<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19141">㚶<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19143">㚸<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19362">㟃<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19513">㡶<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19516">㡹<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19558">㢮<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20265">㲍<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20320">㳏<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20696">㺰<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21309">䇃<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21931">䒨<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24791">咝<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25209">帜<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27855">𣏚<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="162">食<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="300">指<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="889">姿<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1159">是<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1423">施<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1946">茨<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1967">柿<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2134">思<span class="small">シ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2286">祇<span class="small">シ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2465">屍<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3092">俟<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3238">呰<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3252">咨<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3253">咫<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3442">屎<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3562">恃<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4024">枳<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5344">茲<span class="small">シ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6396">祉<span class="small">シ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="8647">郈<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8648">邿<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8948">籽<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9257">耔<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9439">兹<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9440">茈<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9441">茡<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9442">茬<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9768">虸<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10011">衹<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10518">眂<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10833">秖<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11072">恀<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11073">恉<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11326">㧗<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11648">昰<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11769">胑<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11780">胏<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11992">柹<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11993">枲<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11994">枱<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11995">柶<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11996">㭒<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12060">栀<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12757">㓨<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13112">兘<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13281">呲<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13316">咶<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13324">哆<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13701">垐<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13702">垑<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13999">姕<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14022">姼<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14297">宩<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14676">庛<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14823">恎<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15162">枾<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15165">柌<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15495">泚<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15526">洓<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15527">洔<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16302">牭<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16489">珁<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16716">砋<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16809">秓<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17538">衼<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19047">㘹<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19325">㞖<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19463">㠿<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19522">㢀<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19523">㢁<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20638">㹬<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20844">㽻<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21531">䊷<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21777">䏡<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21779">䏤<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23942">奓<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24109">茦<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24267">䃽<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24586">俬<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25521">浉<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25613">炽<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25773">狮<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="143">紙<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="506">差<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="718">師<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1116">脂<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1458">衰<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2015">恣<span class="small">シ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2473">砥<span class="small">シ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4041">蚩<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5478">耆<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5574">舐<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5604">翅<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5634">祗<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5635">祠<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6654">斊<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8040">眎<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8291">貤<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9225">翄<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9506">茝<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9748">虒<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9779">蚝<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10106">玆<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10145">玼<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10358">疻<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10530">眡<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10835">秭<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10961">恖<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11342">挋<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11804">胵<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12031">栨<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12507">倳<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12777">剚<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12899">肂<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14045">娡<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14057">娰<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15178">栜<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15185">栺<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15601">涘<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15650">淽<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16310">牸<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16384">狶<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16816">积<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16981">紎<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19775">㧘<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19888">㩼<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20180">㰣<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20198">㰷<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20489">㶴<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20565">㸟<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20853">㾅<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21079">䂠<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21080">䂡<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21331">䇛<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21533">䊻<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21534">䊼<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21782">䏧<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21952">䓋<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22557">䟖<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23998">栥<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24300">䓌<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24994">埘<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25280">挚<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26378">莳<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="885">視<span class="small">シ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2462">偲<span class="small">シ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2463">匙<span class="small">シ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2470">梓<span class="small">シ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2474">笥<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3533">徙<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3938">耜<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4120">梔<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4255">趾<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4870">瓷<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5154">眥<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5155">眦<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5223">疵<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5450">畤<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5944">釶<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6102">笶<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6133">厠<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6324">貭<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7462">飤<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8075">觗<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8245">豉<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8588">逘<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8795">笫<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8957">秶<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9013">絁<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9315">䑛<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9505">莿<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9548">菑<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10367">痓<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10545">眵<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15521">洍<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15621">淄<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16601">痑<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16621">皉<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16817">秲<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17556">袳<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17637">訨<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17784">赼<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17997">釨<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17999">釲<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18839">㔭<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19532">㢋<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20592">㸻<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20597">㹀<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20858">㾊<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21066">䂑<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21082">䂣<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21204">䅆<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21727">䎣<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21789">䏯<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21963">䓜<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22204">䘣<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22213">䘭<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22320">䚳<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22334">䛂<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22558">䟗<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22757">䣎<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24084">祬<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25133">崰<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25393">梽<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="302">歯<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="887">詞<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1114">紫<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1711">滋<span class="small">シ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2469">斯<span class="small">シ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2476">覗<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3278">啻<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3425">孳<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3504">廁<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3518">弑<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3705">揣<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5228">痣<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5262">粢<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5545">竢<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5909">絲<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5986">葹<span class="small">シ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6411">視<span class="small">シ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6510">孶<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8489">軹<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9294">胔<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9295">胾<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9303">臸<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9545">葈<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9546">葸<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9547">葘<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9820">䖪<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11136">愢<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11402">揓<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13082">偨<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13087">傂<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13398">啙<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14125">媊<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14141">媞<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14146">媤<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14493">崼<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14784">徥<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14849">惿<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15346">欼<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15704">湤<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15720">湽<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17070">羠<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17434">蛓<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17555">袲<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17787">趀<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18933">㖢<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18948">㖷<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20054">㭰<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20998">䀿<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21345">䇪<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21808">䐉<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22274">䙾<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22340">䛈<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22342">䛊<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22343">䛋<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22347">䛐<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22424">䜵<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22471">䝯<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22991">䧳<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22992">䧴<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23908">嗞<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23963">嵫<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23999">椔<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24097">絘<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25948">筛<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26543">蛳<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="304">詩<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="521">試<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="717">資<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="720">飼<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1709">嗣<span class="small">シ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2472">獅<span class="small">シ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2475">蒔<span class="small">シ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3290">嗜<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3291">嗤<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3349">塒<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4060">蜍<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4574">肆<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4693">鉈<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5395">蓍<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5485">貲<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5579">觜<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5658">滓<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7571">鉃<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7572">鉂<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7573">鉇<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7574">鈰<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7575">鈶<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7576">鉰<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7577">鉨<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8131">訾<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8132">訿<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8342">趐<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8343">趑<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8387">跐<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9585">蒒<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11227">戠<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11425">搘<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12139">楒<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14162">媸<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14318">寘<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14725">弒<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15734">溡<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15743">溮<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16899">筫<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17007">綕<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17304">蒫<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17749">貄<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17964">鄑<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17981">酯<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18017">鈻<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18761">㒾<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18799">㓼<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19485">㡗<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19699">㥴<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20074">㮐<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20083">㮛<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20386">㴯<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20389">㴲<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20663">㺈<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20938">㿳<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21215">䅔<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21978">䓱<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21991">䔂<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22973">䧝<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23057">䩃<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24393">㪜<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25138">嵵<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25649">煶<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="884">誌<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="890">磁<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1112">雌<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1824">漬<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2155">飴<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4773">緇<span class="small">シ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5831">齊<span class="small">シ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6134">厮<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6888">䰵<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7086">鳲<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7628">鉹<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8047">覟<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9183">罳<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9316">舓<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9614">蓰<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10052">褆<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10273">甆<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10807">禔<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10812">禌<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10871">稵<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12059">榟<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12182">榰<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12183">榯<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12184">榹<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12721">凘<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14371">屣<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15788">漇<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16541">瑡<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17089">翤<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17447">蜤<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18014">鈭<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18332">馶<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18728">㒋<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19997">㬐<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20206">㱀<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20520">㷢<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20828">㽧<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21233">䅩<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21828">䐤<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22352">䛗<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22475">䝴<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22920">䦙<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23014">䨏<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23526">䲩<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24089">禗<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24952">嘥<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26337">飼<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27101">酾<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="725">質<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1708">賜<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2016">摯<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3496">幟<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3508">廝<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3722">撕<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4470">輜<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4489">駟<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4490">駛<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5671">齒<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6897">魳<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7092">鳷<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7093">鳾<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7465">餈<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7657">鋅<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7658">鋕<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8974">糍<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9087">緦<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9235">翨<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9872">䗐<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12635">僿<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15809">漦<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15868">澌<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16757">磃<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16914">箷<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18049">鋖<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18312">飺<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20109">㯄<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20245">㱴<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20662">㺇<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20893">㾷<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20895">㾹<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21240">䅲<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21381">䈕<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21384">䈘<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21393">䈢<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21495">䊓<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22022">䔮<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23528">䲬<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23529">䲭<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24091">禠<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24123">蕬<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24792">噝<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="548">積<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1425">諮<span class="small">シ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2477">錫<span class="small">シ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2478">髭<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3300">嘴<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3802">鴟<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4584">篩<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4705">錙<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4796">縒<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4929">熾<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4988">諡<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6577">鼒<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6798">骴<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6937">䱈<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7100">䳅<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8173">諟<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8174">諰<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8344">趦<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8345">䠖<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8520">輺<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9668">蕼<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9669">薋<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9891">螄<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9892">螅<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9893">螔<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9894">螆<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10065">褷<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10778">禩<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14243">嬨<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15084">旘<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15884">澬<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16220">燍<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19007">㘂<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19578">㣈<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20122">㯕<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20534">㷷<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20613">㹑<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21871">䑘<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22429">䜻<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23413">䯸<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24034">濨<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26577">觯<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3803">鵄<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3859">鮨<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4989">謚<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6732">騃<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7115">鴲<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7116">鴜<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7727">鍿<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7730">鍶<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7734">鍉<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7757">鎡<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7984">䳄<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8305">儨<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8887">簁<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9117">縰<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13106">儩<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17500">蟌<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18080">鍦<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20803">㽄<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21422">䉅<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22536">䟀<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22682">䡨<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23267">䭄<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23553">䳐<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="742">織<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5490">贄<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6822">頾<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7437">颸<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8425">蹝<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8904">簛<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8981">糦<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9928">蟖<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9929">蟴<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10704">礠<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14893">懫<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15932">瀃<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16561">璾<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18284">頿<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21256">䆅<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22491">䞇<span class="small">シ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="724">識<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3873">鯔<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6658">齍<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8074">觶<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9944">蟕<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17513">蠀<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18371">騦<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18512">鶅<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18594">鼭<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21174">䄢<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22176">䗹<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22625">䠦<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22692">䡳<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22868">䥍<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23187">䫢<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23422">䰄<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3876">鰓<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6805">髊<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7023">鰦<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7182">鶗<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7192">鶿<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7193">鷀<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7813">鐁<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21626">䌤<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22701">䢄<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3889">鰤<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3949">齎<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7022">鰣<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7504">饎<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18528">鶳<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18531">鷈<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18604">齜<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19577">㣆<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22185">䘄<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23629">䴾<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3833">鷙<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4457">灑<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16571">瓕<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21307">䇁<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23502">䲀<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7219">鷥<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7466">䭣<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18597">鼶<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23507">䲉<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16704">矖<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17599">襹<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8870">籭<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9154">纚<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18614">齹<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21640">䌳<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8462">躧<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8779">釃<span class="small">シ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18749">㒪<span class="small">シ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5990">岻<span class="small">し</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27789">𨊂<span class="small">し</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="064">二<span class="small">ジ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="305">仕<span class="small">ジ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="722">示<span class="small">ジ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1849">尼<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3061">弍<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5880">尓<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14336">尒<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14337">尔<span class="small">ジ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="029">字<span class="small">ジ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="030">耳<span class="small">ジ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="149">寺<span class="small">ジ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="150">自<span class="small">ジ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="186">地<span class="small">ジ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="307">次<span class="small">ジ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1222">弐<span class="small">ジ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2481">而<span class="small">ジ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="14272">孖<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20023">㭁<span class="small">ジ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="525">児<span class="small">ジ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="723">似<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5739">亊<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5822">豸<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6701">叓<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6702">㕝<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11673">时<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12408">佀<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12409">伲<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12410">伱<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12412">你<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12680">兕<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13652">坁<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13663">坔<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13667">坘<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15147">杒<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15148">杘<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15440">汦<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19351">㞴<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19622">㤉<span class="small">ジ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="309">事<span class="small">ジ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="524">治<span class="small">ジ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1426">侍<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3547">怩<span class="small">ジ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5806">兒<span class="small">ジ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6070">迩<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9438">茊<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11304">抳<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11674">旹<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12448">佴<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12758">刵<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13064">侕<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13270">呢<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13677">坭<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13690">坻<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13695">垁<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13971">妮<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13998">姒<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15479">沶<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15500">泤<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16360">狋<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16366">狔<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19141">㚶<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19358">㞾<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21931">䒨<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27855">𣏚<span class="small">ジ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="308">持<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3454">峙<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3562">恃<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5344">茲<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9252">耏<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9439">兹<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11781">胒<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11997">柅<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13281">呲<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13304">咡<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13701">垐<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14429">峏<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14676">庛<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15165">柌<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15523">洏<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15527">洔<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15547">洱<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16377">狧<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16489">珁<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17227">荋<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18188">陑<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18910">㖇<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19047">㘹<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19155">㛅<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19786">㧫<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21188">䄲<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21725">䎠<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21777">䏡<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22317">䚮<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24147">迡<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24397">䎟<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27725">𠀺<span class="small">ジ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="148">時<span class="small">ジ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="908">除<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4616">珥<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10106">玆<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10245">玺<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11805">胹<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12032">栭<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12033">栮<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12507">倳<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12777">剚<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12968">毦<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13738">埊<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14057">娰<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14364">屔<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16813">秜<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19775">㧘<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19806">㨅<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20180">㰣<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21785">䏪<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22207">䘦<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24994">埘<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26378">莳<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2480">痔<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4870">瓷<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5450">畤<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6325">貮<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9797">蚭<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10985">㤵<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11605">旎<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12543">偫<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12544">㣥<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13028">乿<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13377">唲<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14112">婼<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15203">梕<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15521">洍<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16817">秲<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17099">耛<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17559">袻<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17999">釲<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19802">㨁<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20592">㸻<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20597">㹀<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21741">䎶<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21963">䓜<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22270">䙹<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22558">䟗<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25133">崰<span class="small">ジ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1711">滋<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3425">孳<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5889">貳<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6510">孶<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8545">辝<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9282">聏<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9981">衈<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13087">傂<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13398">啙<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14141">媞<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14492">崻<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14784">徥<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14849">惿<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17070">羠<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17762">貾<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17819">跜<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17885">軧<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18933">㖢<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18948">㖷<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19569">㢽<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21558">䋙<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22274">䙾<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22453">䝚<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23138">䪧<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23963">嵫<span class="small">ジ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="526">辞<span class="small">ジ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1427">慈<span class="small">ジ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2475">蒔<span class="small">ジ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2482">馳<span class="small">ジ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3349">塒<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4576">雉<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6499">輀<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7575">鈶<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7577">鉨<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7578">鉩<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8133">誀<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14990">搱<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15734">溡<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17820">跠<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18017">鈻<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20083">㮛<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21008">䁊<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22472">䝰<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22790">䣵<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22973">䧝<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23057">䩃<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25138">嵵<span class="small">ジ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="890">磁<span class="small">ジ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1824">漬<span class="small">ジ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2479">爾<span class="small">ジ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="7629">鉺<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10273">甆<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16906">箈<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18324">馜<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18720">㒃<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18801">㓾<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21571">䋩<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22920">䦙<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23014">䨏<span class="small">ジ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2017">餌<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8157">諉<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8546">辤<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13861">墬<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15006">摨<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18312">飺<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19723">㦐<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20895">㾹<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21240">䅲<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21381">䈕<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21495">䊓<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22376">䛱<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23529">䲭<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23933">墀<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23991">徲<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24091">禠<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4248">膩<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6728">駬<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6829">髵<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7981">鴙<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12237">樲<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12411">儞<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14243">嬨<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14578">嶳<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18399">髶<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19007">㘂<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22809">䤊<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23543">䲿<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6940">鮞<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7117">鴯<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7757">鎡<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9690">薾<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10244">壐<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17692">謘<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18206">隭<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22248">䙙<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22310">䚦<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22534">䞾<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23267">䭄<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4313">臑<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5534">邇<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10704">礠<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15306">檷<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22938">䦯<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23099">䩶<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23700">䶔<span class="small">ジ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1712">璽<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6330">辭<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18594">鼭<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21444">䉜<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22446">䝐<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24331">䜄<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9291">聻<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18525">鶨<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4484">轜<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18612">齯<span class="small">ジ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18614">齹<span class="small">ジ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="438">路<span class="small">じ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts2">
                <h3 class="ttl_while">しあ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="293">幸<span class="small">しあわ（せ）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts3">
                <h3 class="ttl_while">しい</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="3518">弑<span class="small">シイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14725">弒<span class="small">シイ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2063">椎<span class="small">しい</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3518">弑<span class="small">しい（する）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14725">弒<span class="small">しい（する）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1370">虐<span class="small">しいた（げる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="22094">䖋<span class="small">しいた（げる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="23010">䨋<span class="small">しいた（げる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14873">慭<span class="small">し（いて）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3618">憖<span class="small">し（いて）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11001">憗<span class="small">し（いて）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5550">秕<span class="small">しいな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5551">粃<span class="small">しいな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7067">鱪<span class="small">しいら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7068">鱰<span class="small">しいら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5586">罔<span class="small">し（いる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8114">呧<span class="small">し（いる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="111">強<span class="small">し（いる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4956">詆<span class="small">し（いる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14742">强<span class="small">し（いる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="17656">誈<span class="small">し（いる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4967">誣<span class="small">し（いる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2320">彊<span class="small">し（いる）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts4">
                <h3 class="ttl_while">しお</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="066">入<span class="small">しお</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2630">汐<span class="small">しお</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="25833">盐<span class="small">しお</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4304">鹵<span class="small">しお</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="450">塩<span class="small">しお</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="948">潮<span class="small">しお</span></a></li>
                    <li class="others_kanji kunyomi"><a href="20960">䀋<span class="small">しお</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6100">鹽<span class="small">しお</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4221">胥<span class="small">しおから</span></a></li>
                    <li class="others_kanji kunyomi"><a href="17022">縃<span class="small">しおから</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4847">醢<span class="small">しおから</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4423">滷<span class="small">しおから（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7240">醎<span class="small">しおから（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4305">鹹<span class="small">しおから（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1384">刑<span class="small">しおき</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="12747">㓝<span class="small">しおき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7240">醎<span class="small">しおけ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2370">鹸<span class="small">しおけ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4305">鹹<span class="small">しおけ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6475">鹼<span class="small">しおけ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4304">鹵<span class="small">しおち</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24014">泻<span class="small">しおつち</span></a></li>
                    <li class="others_kanji kunyomi"><a href="20451">㵼<span class="small">しおつち</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4447">瀉<span class="small">しおつち</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7305">鞖<span class="small">しおで</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7306">䪎<span class="small">しおで</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="4034">栞<span class="small">しおり</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3720">撓<span class="small">しおり</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1943">萎<span class="small">しお（れる）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts5">
                <h3 class="ttl_while">しか</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="2018">鹿<span class="small">しか</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="193">直<span class="small">じか</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1885">併<span class="small">しか（し）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="12460">倂<span class="small">しか（し）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="587">然<span class="small">しか（し）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2481">而<span class="small">しか（して）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="587">然<span class="small">しか（して）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4861">聢<span class="small">しか（と）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="662">確<span class="small">しか（と）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3439">尸<span class="small">しかばね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2465">屍<span class="small">しかばね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4282">蹙<span class="small">しか（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8426">䠞<span class="small">しか（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12341">嚬<span class="small">しか（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5143">顰<span class="small">しか（める）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2481">而<span class="small">しか（も）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="587">然<span class="small">しか（も）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="587">然<span class="small">しか（らば）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="2011">柵<span class="small">しがらみ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11991">栅<span class="small">しがらみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8793">笧<span class="small">しがらみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3150">兪<span class="small">しか（り）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6529">俞<span class="small">しか（り）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="587">然<span class="small">しか（り）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2019">叱<span class="small">しか（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="27700">𠮟<span class="small">しか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13230">吒<span class="small">しか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3233">呵<span class="small">しか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3242">咄<span class="small">しか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8114">呧<span class="small">しか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13301">咜<span class="small">しか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3255">咤<span class="small">しか（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1631">喝<span class="small">しか（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="24914">啸<span class="small">しか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4954">訶<span class="small">しか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4956">詆<span class="small">しか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26346">喝<span class="small">しか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4969">誚<span class="small">しか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13506">嘨<span class="small">しか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3305">嘯<span class="small">しか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13561">嚉<span class="small">しか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="15354">歗<span class="small">しか（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2481">而<span class="small">しか（るに）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2481">而<span class="small">しか（れども）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts6">
                <h3 class="ttl_while">しき</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="13909">夨<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3066">仄<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14665">庂<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15423">汄<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19316">㞋<span class="small">シキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="151">色<span class="small">シキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="310">式<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20309">㳁<span class="small">シキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2027">拭<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9289">聀<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16056">烒<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6133">厠<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26287">职<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3504">廁<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16826">稄<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21820">䐚<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15847">潩<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20601">㹄<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25066">嫱<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14211">嬂<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22028">䔴<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22841">䤭<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14229">嬙<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15901">濇<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17176">膱<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20211">㱇<span class="small">シキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="741">職<span class="small">シキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="742">織<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15940">瀒<span class="small">シキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="724">識<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9290">軄<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17044">繬<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17513">蠀<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21450">䉢<span class="small">シキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23575">䳭<span class="small">シキ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2483">鴫<span class="small">しぎ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3835">鷸<span class="small">しぎ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="193">直<span class="small">ジキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="162">食<span class="small">ジキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14945">捑<span class="small">ジキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15629">淔<span class="small">ジキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19661">㥀<span class="small">ジキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19802">㨁<span class="small">ジキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16317">犆<span class="small">ジキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16793">禃<span class="small">ジキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17924">遈<span class="small">ジキ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3962">閾<span class="small">しきい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="20765">㼙<span class="small">しきがわら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4874">甃<span class="small">しきがわら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4876">甎<span class="small">しきがわら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4878">甓<span class="small">しきがわら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2428">梱<span class="small">しきみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12061">梻<span class="small">しきみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12057">棞<span class="small">しきみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3358">壼<span class="small">しきみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4463">軾<span class="small">しきみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12222">榓<span class="small">しきみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4182">樒<span class="small">しきみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4183">櫁<span class="small">しきみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5346">茵<span class="small">しきもの</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5347">荐<span class="small">しき（りに）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="636">連<span class="small">しき（りに）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1932">累<span class="small">しき（りに）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="27691">連<span class="small">しき（りに）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1783">薦<span class="small">しき（りに）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="26375">頻<span class="small">しき（りに）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1872">頻<span class="small">しき（りに）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3065">仍<span class="small">しきり（に）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26375">頻<span class="small">しき（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1872">頻<span class="small">しき（る）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts7">
                <h3 class="ttl_while">しく</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="798">布<span class="small">し（く）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1438">如<span class="small">し（く）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="894">若<span class="small">し（く）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1423">施<span class="small">し（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5581">衍<span class="small">し（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1866">頒<span class="small">し（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4408">溥<span class="small">し（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1255">敷<span class="small">し（く）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1265">舗<span class="small">し（く）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2812">播<span class="small">し（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2902">鋪<span class="small">し（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6032">舖<span class="small">し（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1783">薦<span class="small">し（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5432">藉<span class="small">し（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1470">籍<span class="small">し（く）</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="208">肉<span class="small">ジク</span></a></li>
                    <li class="others_kanji onyomi"><a href="2484">宍<span class="small">ジク</span></a></li>
                    <li class="others_kanji onyomi"><a href="3541">忸<span class="small">ジク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15465">沑<span class="small">ジク</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2485">竺<span class="small">ジク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="13972">妯<span class="small">ジク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21769">䏔<span class="small">ジク</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2944">柚<span class="small">ジク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6305">衂<span class="small">ジク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21059">䂇<span class="small">ジク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1812">逐<span class="small">ジク</span></a></li>
                    <li class="others_kanji onyomi"><a href="5644">衄<span class="small">ジク</span></a></li>
                    <li class="others_kanji onyomi"><a href="9977">䘐<span class="small">ジク</span></a></li>
                    <li class="others_kanji onyomi"><a href="10968">恧<span class="small">ジク</span></a></li>
                    <li class="others_kanji onyomi"><a href="11806">朒<span class="small">ジク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17242">莥<span class="small">ジク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22110">䖡<span class="small">ジク</span></a></li>
                    <li class="others_kanji onyomi"><a href="4886">舳<span class="small">ジク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19179">㛩<span class="small">ジク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21196">䄾<span class="small">ジク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22328">䚼<span class="small">ジク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1428">軸<span class="small">ジク</span></a></li>
                    <li class="others_kanji onyomi"><a href="9282">聏<span class="small">ジク</span></a></li>
                    <li class="others_kanji onyomi"><a href="6940">鮞<span class="small">ジク</span></a></li>
                    <li class="others_kanji onyomi"><a href="6647">䶊<span class="small">ジク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23356">䮱<span class="small">ジク</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="089">科<span class="small">しぐさ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts8">
                <h3 class="ttl_while">しけ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="5398">蓁<span class="small">しげ（み）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5178">阡<span class="small">しげ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="17202">芜<span class="small">しげ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="21926">䒣<span class="small">しげ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26347">苍<span class="small">しげ（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1284">茂<span class="small">しげ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2649">苒<span class="small">しげ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9438">茊<span class="small">しげ（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2588">茸<span class="small">しげ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5344">茲<span class="small">しげ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9439">兹<span class="small">しげ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26361">荟<span class="small">しげ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26369">荫<span class="small">しげ（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1711">滋<span class="small">しげ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3425">孳<span class="small">しげ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5389">葆<span class="small">しげ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6510">孶<span class="small">しげ（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2669">蒼<span class="small">しげ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5559">稠<span class="small">しげ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9109">䋣<span class="small">しげ（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2164">蔭<span class="small">しげ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26002">緐<span class="small">しげ（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2844">蕃<span class="small">しげ（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2882">蕪<span class="small">しげ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9604">䕃<span class="small">しげ（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1235">繁<span class="small">しげ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5427">薈<span class="small">しげ（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6406">繁<span class="small">しげ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25423">欎<span class="small">しげ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3030">欝<span class="small">しげ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18408">鬰<span class="small">しげ（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1950">鬱<span class="small">しげ（る）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts9">
                <h3 class="ttl_while">しこ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1722">醜<span class="small">しこ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7006">鯷<span class="small">しこ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1004">扱<span class="small">しご（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2558">厰<span class="small">しごとば</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2557">廠<span class="small">しごとば</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5233">痼<span class="small">しこ（り）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1374">凝<span class="small">しこ（り）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4704">錏<span class="small">しころ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4706">錣<span class="small">しころ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4726">鐚<span class="small">しころ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts10">
                <h3 class="ttl_while">しさ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="6142">橲<span class="small">じさ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="768">退<span class="small">しさ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5512">逡<span class="small">しさ（る）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts11">
                <h3 class="ttl_while">しし</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="208">肉<span class="small">しし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2484">宍<span class="small">しし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25773">狮<span class="small">しし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5109">猊<span class="small">しし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24686">兽<span class="small">しし</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2472">獅<span class="small">しし</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5476">貎<span class="small">しし</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1132">獣<span class="small">しし</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="5858">獸<span class="small">しし</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4159">榻<span class="small">しじ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25674">爷<span class="small">じじ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="757">祖<span class="small">じじ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6398">祖<span class="small">じじ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2940">爺<span class="small">じじ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27097">酱<span class="small">ししびしお</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2575">醤<span class="small">ししびしお</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4847">醢<span class="small">ししびしお</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6461">醬<span class="small">ししびしお</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4065">蜆<span class="small">しじみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9118">縬<span class="small">しじら</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts12">
                <h3 class="ttl_while">しす</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="19584">㣏<span class="small">しず</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2645">賎<span class="small">しず</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="545">静<span class="small">しず</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2644">賤<span class="small">しず</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6347">靜<span class="small">しず</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3565">恬<span class="small">しず（か）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1123">寂<span class="small">しず（か）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="26469">萧<span class="small">しず（か）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="100">間<span class="small">しず（か）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1645">閑<span class="small">しず（か）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="3592">惺<span class="small">しず（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7868">閒<span class="small">しず（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19584">㣏<span class="small">しず（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3434">寞<span class="small">しず（か）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="545">静<span class="small">しず（か）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3435">寥<span class="small">しず（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9671">䔥<span class="small">しず（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7890">閴<span class="small">しず（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4436">澹<span class="small">しず（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5431">蕭<span class="small">しず（か）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6347">靜<span class="small">しず（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3965">闃<span class="small">しず（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4992">謐<span class="small">しず（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25506">沥<span class="small">しずく</span></a></li>
                    <li class="others_kanji kunyomi"><a href="20327">㳙<span class="small">しずく</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4372">涓<span class="small">しずく</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2687">雫<span class="small">しずく</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1198">滴<span class="small">しずく</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4452">瀝<span class="small">しずく</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19584">㣏<span class="small">しず（まる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="545">静<span class="small">しず（まる）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6347">靜<span class="small">しず（まる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1510">鎮<span class="small">しず（まる）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6001">鎭<span class="small">しず（まる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1194">沈<span class="small">しず（む）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1568">没<span class="small">しず（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4327">汨<span class="small">しず（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5932">沒<span class="small">しず（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="15460">沉<span class="small">しず（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25507">沦<span class="small">しず（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4385">淪<span class="small">しず（む）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2714">湛<span class="small">しず（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4392">湮<span class="small">しず（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4401">湎<span class="small">しず（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="20391">㴴<span class="small">しず（む）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1194">沈<span class="small">しず（める）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="15460">沉<span class="small">しず（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19584">㣏<span class="small">しず（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="545">静<span class="small">しず（める）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6347">靜<span class="small">しず（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1510">鎮<span class="small">しず（める）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6001">鎭<span class="small">しず（める）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts13">
                <h3 class="ttl_while">した</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="6587">丅<span class="small">した</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="015">下<span class="small">した</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="755">舌<span class="small">した</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4596">簧<span class="small">した</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6300">萪<span class="small">しだ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1551">慕<span class="small">した（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="13230">吒<span class="small">したう（ち）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3242">咄<span class="small">したう（ち）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13301">咜<span class="small">したう（ち）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3255">咤<span class="small">したう（ち）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13561">嚉<span class="small">したう（ち）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5740">从<span class="small">したが（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1545">伏<span class="small">したが（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="13051">伨<span class="small">したが（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="408">服<span class="small">したが（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3532">徇<span class="small">したが（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="16375">狥<span class="small">したが（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="900">従<span class="small">したが（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1736">殉<span class="small">したが（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="25091">宾<span class="small">したが（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="820">率<span class="small">したが（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1528">陪<span class="small">したが（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3392">婉<span class="small">したが（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3654">扈<span class="small">したが（う）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6180">從<span class="small">したが（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="532">順<span class="small">したが（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1461">随<span class="small">したが（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1735">循<span class="small">したが（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="19691">㥧<span class="small">したが（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4262">跟<span class="small">したが（う）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6414">賓<span class="small">したが（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8313">賔<span class="small">したが（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1436">遵<span class="small">したが（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1873">賓<span class="small">したが（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="17837">踨<span class="small">したが（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1308">隷<span class="small">したが（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6332">隨<span class="small">したが（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24341">䢫<span class="small">したが（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6345">隸<span class="small">したが（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4285">蹤<span class="small">したが（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13003">卛<span class="small">したが（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5740">从<span class="small">したが（える）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="900">従<span class="small">したが（える）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6180">從<span class="small">したが（える）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1098">稿<span class="small">したがき</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6129">稾<span class="small">したがき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13034">亲<span class="small">した（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14122">媇<span class="small">した（しい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="164">親<span class="small">した（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13034">亲<span class="small">した（しむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14122">媇<span class="small">した（しむ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="164">親<span class="small">した（しむ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="111">強<span class="small">したた（か）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="497">健<span class="small">したた（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12532">徤<span class="small">したた（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14742">强<span class="small">したた（か）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="960">認<span class="small">したた（める）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3019">漉<span class="small">したた（らせる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3990">霤<span class="small">したた（り）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25506">沥<span class="small">したた（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2990">淋<span class="small">したた（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2976">溜<span class="small">したた（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1198">滴<span class="small">したた（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4422">漓<span class="small">したた（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6244">澑<span class="small">したた（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4452">瀝<span class="small">したた（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10051">裩<span class="small">したばかま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5052">褌<span class="small">したばかま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="15689">湑<span class="small">した（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27101">酾<span class="small">した（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8779">釃<span class="small">した（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3701">掾<span class="small">したやく</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4002">朶<span class="small">しだ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11935">朵<span class="small">しだ（れる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="917">垂<span class="small">しだ（れる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11936">䒳<span class="small">しだ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5966">埀<span class="small">しだ（れる）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts14">
                <h3 class="ttl_while">しち</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo onyomi"><a class="color1" href="031">七<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14335">尐<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2019">叱<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20303">㲺<span class="small">シチ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="27700">𠮟<span class="small">シチ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="20690">㺩<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15464">沏<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13190">厔<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11998">柒<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14823">恎<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6324">貭<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16654">眰<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13795">堲<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16516">琗<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13097">僁<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14858">愱<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16899">筫<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18799">㓼<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24000">楖<span class="small">シチ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1713">漆<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19608">㣰<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22767">䣛<span class="small">シチ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="725">質<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8305">儨<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12813">劕<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15040">擮<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21296">䆶<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21505">䊝<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14893">懫<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15933">瀄<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18815">㔑<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19011">㘉<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19015">㘍<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19239">㜱<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22396">䜉<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16566">瓆<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21860">䑇<span class="small">シチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15548">洷<span class="small">ジチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14973">揤<span class="small">ジチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15255">槉<span class="small">ジチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17477">螏<span class="small">ジチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23465">䱃<span class="small">ジチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22543">䟈<span class="small">ジチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23712">䶡<span class="small">ジチ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts15">
                <h3 class="ttl_while">しつ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo onyomi"><a class="color1" href="031">七<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14335">尐<span class="small">シツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="527">失<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2019">叱<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20303">㲺<span class="small">シツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="27700">𠮟<span class="small">シツ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="057">竹<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14906">执<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20690">㺩<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11286">扻<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15464">沏<span class="small">シツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1493">卓<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4076">虱<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11588">斦<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12449">侄<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13190">厔<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18838">㔬<span class="small">シツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="152">室<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8649">郅<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11998">柒<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14820">怸<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14823">恎<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25378">栉<span class="small">シツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1430">疾<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4037">桎<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11675">晊<span class="small">シツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1118">執<span class="small">シツ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2486">悉<span class="small">シツ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6324">貭<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12062">桼<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16654">眰<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20717">㻎<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24914">啸<span class="small">シツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1429">湿<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2488">蛭<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13795">堲<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14973">揤<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16516">琗<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18710">㑵<span class="small">シツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2020">嫉<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4624">瑟<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9586">蒺<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11894">厀<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13097">僁<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14858">愱<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15752">溼<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16899">筫<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18799">㓼<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24000">楖<span class="small">シツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1713">漆<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13506">嘨<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15255">槉<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18993">㗭<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19608">㣰<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22767">䣛<span class="small">シツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="725">質<span class="small">シツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2093">膝<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4075">蝨<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12063">㯃<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20733">㻭<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3305">嘯<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9892">螅<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10930">窸<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17477">螏<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4092">蟋<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5197">隰<span class="small">シツ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5835">濕<span class="small">シツ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6344">隲<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8305">儨<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10237">璱<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12813">劕<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15040">擮<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15354">歗<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21296">䆶<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21505">䊝<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14893">懫<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15933">瀄<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18815">㔑<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19011">㘉<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19015">㘍<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19239">㜱<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22396">䜉<span class="small">シツ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2487">櫛<span class="small">シツ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="12296">櫍<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16566">瓆<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18115">鏭<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21860">䑇<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6758">騭<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10763">礩<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7451">飋<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22412">䜠<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7846">鑕<span class="small">シツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23712">䶡<span class="small">シツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="065">日<span class="small">ジツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27719">𡆠<span class="small">ジツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19453">㠴<span class="small">ジツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21927">䒤<span class="small">ジツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="311">実<span class="small">ジツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13618">囸<span class="small">ジツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13979">妷<span class="small">ジツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14294">实<span class="small">ジツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15397">氜<span class="small">ジツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3913">昵<span class="small">ジツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5024">衵<span class="small">ジツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10361">痆<span class="small">ジツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16813">秜<span class="small">ジツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23956">宲<span class="small">ジツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7552">鈤<span class="small">ジツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19708">㥾<span class="small">ジツ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5737">實<span class="small">ジツ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6710">馹<span class="small">ジツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11715">暱<span class="small">ジツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6967">䵑<span class="small">ジツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21030">䁥<span class="small">ジツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6968">䵒<span class="small">ジツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9967">䘌<span class="small">ジツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="034">十<span class="small">ジッ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="662">確<span class="small">しっか（り）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5077">躾<span class="small">しつけ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="752">設<span class="small">しつら（える）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts16">
                <h3 class="ttl_while">して</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="917">垂<span class="small">しで</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5966">埀<span class="small">しで</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6126">椣<span class="small">しで</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts17">
                <h3 class="ttl_while">しと</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1524">尿<span class="small">しと</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="20339">㳮<span class="small">しと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19328">㞙<span class="small">しと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8957">秶<span class="small">しとぎ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5262">粢<span class="small">しとぎ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5817">鵐<span class="small">しとど</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5041">衽<span class="small">しとね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5346">茵<span class="small">しとね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25909">祍<span class="small">しとね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5040">袵<span class="small">しとね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5399">蓐<span class="small">しとね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5056">褥<span class="small">しとね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2881">蔀<span class="small">しとみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12205">樝<span class="small">しどみ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1730">淑<span class="small">しと（やか）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3392">婉<span class="small">しと（やか）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts18">
                <h3 class="ttl_while">しな</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="25448">阶<span class="small">しな</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="089">科<span class="small">しな</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="270">級<span class="small">しな</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="404">品<span class="small">しな</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="260">階<span class="small">しな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7947">堦<span class="small">しな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3720">撓<span class="small">しな（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1943">萎<span class="small">しな（びる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="12698">冄<span class="small">しな（やか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3152">冉<span class="small">しな（やか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14007">姢<span class="small">しな（やか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3386">娟<span class="small">しな（やか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3388">娜<span class="small">しな（やか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2608">靱<span class="small">しな（やか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2609">靭<span class="small">しな（やか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3400">嫋<span class="small">しな（やか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14233">嬝<span class="small">しな（やか）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1785">繊<span class="small">しな（やか）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6099">纎<span class="small">しな（やか）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6098">纖<span class="small">しな（やか）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts19">
                <h3 class="ttl_while">しぬ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="133">行<span class="small">し（ぬ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="303">死<span class="small">し（ぬ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1568">没<span class="small">し（ぬ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5932">沒<span class="small">し（ぬ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3528">徂<span class="small">し（ぬ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5300">歿<span class="small">し（ぬ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12894">殁<span class="small">し（ぬ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24338">䢐<span class="small">し（ぬ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25449">毙<span class="small">し（ぬ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5194">隕<span class="small">し（ぬ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5305">殞<span class="small">し（ぬ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5308">殪<span class="small">し（ぬ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5422">薨<span class="small">し（ぬ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3791">斃<span class="small">し（ぬ）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts20">
                <h3 class="ttl_while">しの</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="4537">筱<span class="small">しの</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8889">筿<span class="small">しの</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2569">篠<span class="small">しの</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4717">鎬<span class="small">しのぎ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2980">凌<span class="small">しの（ぐ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1590">陵<span class="small">しの（ぐ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="16512">琌<span class="small">しの（ぐ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="22969">䧙<span class="small">しの（ぐ）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2220">駕<span class="small">しの（ぐ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4537">筱<span class="small">しのだけ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8889">筿<span class="small">しのだけ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="21357">䇹<span class="small">しのだけ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4539">箘<span class="small">しのだけ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6103">箟<span class="small">しのだけ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2569">篠<span class="small">しのだけ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="10954">㣼<span class="small">しの（ばせる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1850">忍<span class="small">しの（ばせる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4960">誄<span class="small">しのびごと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="22381">䛶<span class="small">しのびごと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5368">荵<span class="small">しのぶ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10954">㣼<span class="small">しの（ぶ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1850">忍<span class="small">しの（ぶ）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2462">偲<span class="small">しの（ぶ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1551">慕<span class="small">しの（ぶ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="8467">躵<span class="small">しの（ぶ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5368">荵<span class="small">しのぶぐさ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts21">
                <h3 class="ttl_while">しは</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1119">芝<span class="small">しば</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2442">柴<span class="small">しば</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="25947">筚<span class="small">しば</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5412">蕘<span class="small">しば</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4594">篳<span class="small">しば</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1422">暫<span class="small">しば（し）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3984">霎<span class="small">しば（し）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3062">亟<span class="small">しばしば</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5347">荐<span class="small">しばしば</span></a></li>
                    <li class="others_kanji kunyomi"><a href="21972">䓧<span class="small">しばしば</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24048">焏<span class="small">しばしば</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2996">屡<span class="small">しばしば</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="168">数<span class="small">しばしば</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6483">屢<span class="small">しばしば</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6202">數<span class="small">しばしば</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4511">驟<span class="small">しばしば</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1133">瞬<span class="small">しばた（く）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1133">瞬<span class="small">しばたた（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="160">少<span class="small">しばら（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1636">且<span class="small">しばら（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="9308">㬰<span class="small">しばら（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2377">姑<span class="small">しばら（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5626">臾<span class="small">しばら（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2004">頃<span class="small">しばら（く）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="2031">須<span class="small">しばら（く）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1422">暫<span class="small">しばら（く）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1932">累<span class="small">しば（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4126">梏<span class="small">しば（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4758">紲<span class="small">しば（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4764">絏<span class="small">しば（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1529">縛<span class="small">しば（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4797">縻<span class="small">しば（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4803">縲<span class="small">しば（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="21611">䌕<span class="small">しば（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9126">纝<span class="small">しば（る）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts22">
                <h3 class="ttl_while">しひ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="2156">鮪<span class="small">しび</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5235">痲<span class="small">しび（れ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10392">痹<span class="small">しび（れ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1902">麻<span class="small">しび（れる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5229">痿<span class="small">しび（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5232">痺<span class="small">しび（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5235">痲<span class="small">しび（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10392">痹<span class="small">しび（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7275">蔴<span class="small">しび（れる）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts23">
                <h3 class="ttl_while">しふ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="25550">涩<span class="small">しぶ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1726">渋<span class="small">しぶ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="15357">歮<span class="small">しぶ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5837">澁<span class="small">しぶ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6240">澀<span class="small">しぶ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25550">涩<span class="small">しぶ（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1726">渋<span class="small">しぶ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="15357">歮<span class="small">しぶ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12888">歰<span class="small">しぶ（い）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5837">澁<span class="small">しぶ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6240">澀<span class="small">しぶ（い）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2930">沫<span class="small">しぶき</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4448">瀑<span class="small">しぶき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25550">涩<span class="small">しぶ（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1726">渋<span class="small">しぶ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="15357">歮<span class="small">しぶ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3607">慳<span class="small">しぶ（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5837">澁<span class="small">しぶ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6240">澀<span class="small">しぶ（る）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts24">
                <h3 class="ttl_while">しへ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="10861">稭<span class="small">しべ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2621">蕊<span class="small">しべ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2622">蕋<span class="small">しべ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2623">蘂<span class="small">しべ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts25">
                <h3 class="ttl_while">しほ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="2732">凋<span class="small">しぼ（む）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1943">萎<span class="small">しぼ（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4817">纈<span class="small">しぼ（り）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4818">纐<span class="small">しぼ（り）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4817">纈<span class="small">しぼりぞ（め）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1407">絞<span class="small">しぼ（る）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1419">搾<span class="small">しぼ（る）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts26">
                <h3 class="ttl_while">しま</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="324">州<span class="small">しま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25105">屿<span class="small">しま</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2512">洲<span class="small">しま</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="377">島<span class="small">しま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6341">陦<span class="small">しま</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2786">嶋<span class="small">しま</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6083">嶌<span class="small">しま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19413">㠀<span class="small">しま</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2408">縞<span class="small">しま</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3478">嶼<span class="small">しま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19434">㠘<span class="small">しま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7971">隯<span class="small">しま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14582">嶹<span class="small">しま</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1588">了<span class="small">しま（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="323">終<span class="small">しま（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="977">閉<span class="small">し（まる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6337">閇<span class="small">し（まる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1407">絞<span class="small">し（まる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1514">締<span class="small">し（まる）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts27">
                <h3 class="ttl_while">しみ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="4833">犁<span class="small">しみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4832">犂<span class="small">しみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9974">螙<span class="small">しみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="23646">䵓<span class="small">しみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9922">蟫<span class="small">しみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4115">蠧<span class="small">しみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4114">蠹<span class="small">しみ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="924">染<span class="small">し（み）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4326">沁<span class="small">し（みる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="924">染<span class="small">し（みる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1148">浸<span class="small">し（みる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1519">凍<span class="small">し（みる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="15586">涁<span class="small">し（みる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="15660">渗<span class="small">し（みる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14317">寖<span class="small">し（みる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4421">滲<span class="small">し（みる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="15900">濅<span class="small">し（みる）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts28">
                <h3 class="ttl_while">しめ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="6615">乄<span class="small">しめ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6616">〆<span class="small">しめ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25376">标<span class="small">しめ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="597">標<span class="small">しめ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7115">鴲<span class="small">しめ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="722">示<span class="small">しめ（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1829">呈<span class="small">しめ（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="17601">覌<span class="small">しめ（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1429">湿<span class="small">しめ（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="15752">溼<span class="small">しめ（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2742">諜<span class="small">しめ（す）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5835">濕<span class="small">しめ（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="467">観<span class="small">しめ（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5464">覿<span class="small">しめ（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6313">觀<span class="small">しめ（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1165">占<span class="small">し（める）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="977">閉<span class="small">し（める）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6337">閇<span class="small">し（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1407">絞<span class="small">し（める）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1375">緊<span class="small">し（める）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1514">締<span class="small">し（める）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1429">湿<span class="small">しめ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="15752">溼<span class="small">しめ（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5835">濕<span class="small">しめ（る）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts29">
                <h3 class="ttl_while">しも</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="6587">丅<span class="small">しも</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="015">下<span class="small">しも</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1799">霜<span class="small">しも</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2480">痔<span class="small">しもがさ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4521">笞<span class="small">しもと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="15220">椘<span class="small">しもと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9563">葼<span class="small">しもと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12140">楉<span class="small">しもと</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2653">楚<span class="small">しもと</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="22594">䠂<span class="small">しもと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5669">卆<span class="small">しもべ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="183">台<span class="small">しもべ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10461">皁<span class="small">しもべ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10462">皂<span class="small">しもべ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="561">卒<span class="small">しもべ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="13001">䘚<span class="small">しもべ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13678">坮<span class="small">しもべ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26527">虏<span class="small">しもべ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3112">俾<span class="small">しもべ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3369">奚<span class="small">しもべ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7883">剦<span class="small">しもべ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1927">虜<span class="small">しもべ</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6363">虜<span class="small">しもべ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="21867">䑓<span class="small">しもべ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1895">僕<span class="small">しもべ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3135">僮<span class="small">しもべ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6293">臺<span class="small">しもべ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5645">臧<span class="small">しもべ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12623">㒒<span class="small">しもべ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1308">隷<span class="small">しもべ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3961">閹<span class="small">しもべ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19090">㙵<span class="small">しもべ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6345">隸<span class="small">しもべ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12624">䑑<span class="small">しもべ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9449">㽵<span class="small">しもやしき</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1796">荘<span class="small">しもやしき</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="5939">莊<span class="small">しもやしき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3351">墅<span class="small">しもやしき</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts30">
                <h3 class="ttl_while">しや</h3>
                <ul class="search_parts yomi_parts">
                    <li class="jimmei onyomi"><a class="color2" href="2432">叉<span class="small">シャ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="312">写<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13939">她<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19264">㝍<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19616">㣾<span class="small">シャ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="032">車<span class="small">シャ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="153">社<span class="small">シャ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2006">沙<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11287">扯<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12413">佘<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16003">灺<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19458">㠺<span class="small">シャ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="313">者<span class="small">シャ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="727">舎<span class="small">シャ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1432">邪<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2489">姐<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4900">炙<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6031">舍<span class="small">シャ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6394">社<span class="small">シャ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="8587">这<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14919">抯<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15369">毑<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17054">缷<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17216">苲<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19115">㚗<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19515">㡸<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24014">泻<span class="small">シャ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="877">砂<span class="small">シャ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1330">卸<span class="small">シャ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2490">柘<span class="small">シャ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4349">洒<span class="small">シャ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6408">者<span class="small">シャ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="13192">厙<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13324">哆<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16033">炧<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21077">䂞<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23942">奓<span class="small">シャ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="528">借<span class="small">シャ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="892">射<span class="small">シャ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2436">紗<span class="small">シャ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3387">娑<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9174">罝<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9992">衺<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13362">唓<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14445">峫<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15583">浾<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17240">莗<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17546">袓<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17633">訍<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21766">䏑<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21950">䓉<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22556">䟕<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22748">䣃<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22749">䣄<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24590">倽<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24815">唦<span class="small">シャ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="891">捨<span class="small">シャ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1121">斜<span class="small">シャ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1431">赦<span class="small">シャ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2491">這<span class="small">シャ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3120">偖<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13380">唶<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13405">啥<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14783">徣<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15189">桬<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15616">涻<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16409">猞<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16884">笡<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20275">㲚<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20591">㸺<span class="small">シャ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1120">煮<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3372">奢<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5451">畭<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6508">畬<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8339">趄<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10322">畲<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10684">硨<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14129">媎<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16736">硰<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18776">㓔<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18955">㖿<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19811">㨋<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20875">㾝<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22510">䞣<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22638">䠶<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22905">䦈<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3288">嗟<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4693">鉈<span class="small">シャ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6391">煮<span class="small">シャ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="9836">蛼<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14168">嫅<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16142">煑<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17304">蒫<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20383">㴬<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20559">㸙<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20782">㼮<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20872">㾚<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20955">䀅<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23073">䩖<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25014">塮<span class="small">シャ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1714">遮<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5402">蔗<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5664">冩<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8300">賖<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8301">賒<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9264">耤<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12185">榭<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13478">嗻<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14193">嫬<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17331">蔖<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18309">飷<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18864">㕐<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20403">㵃<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20520">㷢<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21165">䄕<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22000">䔑<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6118">寫<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9873">蝑<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10062">褯<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11477">撦<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15270">樜<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16200">熫<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17673">諎<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18172">閯<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19719">㦋<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19923">㪥<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20416">㵔<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20829">㽨<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22840">䤬<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23259">䬷<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4554">赭<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22847">䤳<span class="small">シャ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="726">謝<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5432">藉<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9906">䗪<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17499">蟅<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18080">鍦<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20451">㵼<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24003">檨<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4447">瀉<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17371">藛<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17699">謯<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17704">謶<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18359">騇<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21451">䉣<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23664">䵦<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17711">譇<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23451">䰩<span class="small">シャ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1470">籍<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23107">䩾<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4561">麝<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23651">䵘<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23671">䵭<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3834">鷓<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4457">灑<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22897">䥱<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17864">躤<span class="small">シャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23944">奲<span class="small">シャ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="153">社<span class="small">ジャ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="894">若<span class="small">ジャ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1432">邪<span class="small">ジャ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6394">社<span class="small">ジャ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="14919">抯<span class="small">ジャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19115">㚗<span class="small">ジャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19515">㡸<span class="small">ジャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9800">虵<span class="small">ジャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14303">宱<span class="small">ジャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14445">峫<span class="small">ジャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21950">䓉<span class="small">ジャ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1715">蛇<span class="small">ジャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14112">婼<span class="small">ジャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15656">渃<span class="small">ジャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21550">䋏<span class="small">ジャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23904">喏<span class="small">ジャ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2492">惹<span class="small">ジャ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="18776">㓔<span class="small">ジャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18955">㖿<span class="small">ジャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20955">䀅<span class="small">ジャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19218">㜘<span class="small">ジャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19537">㢒<span class="small">ジャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20403">㵃<span class="small">ジャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21165">䄕<span class="small">ジャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22000">䔑<span class="small">ジャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21026">䁟<span class="small">ジャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24145">蹃<span class="small">ジャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26626">㘃<span class="small">ジャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22847">䤳<span class="small">ジャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3966">闍<span class="small">ジャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22621">䠡<span class="small">ジャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23664">䵦<span class="small">ジャ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4561">麝<span class="small">ジャ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3289">嗄<span class="small">しゃが（れる）</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2493">勺<span class="small">シャク</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="893">尺<span class="small">シャク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="046">石<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="12378">仢<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="3374">妁<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="5314">芍<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13645">圴<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15426">汋<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16348">犳<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19617">㣿<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23988">彴<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="24266">䂖<span class="small">シャク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="045">赤<span class="small">シャク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="550">折<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="2494">杓<span class="small">シャク</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2495">灼<span class="small">シャク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="13187">厏<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14910">扸<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="27851">𣏐<span class="small">シャク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="314">昔<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13673">坧<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17216">苲<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19114">㚖<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="3842">斫<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13123">冟<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14927">拺<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20817">㽚<span class="small">シャク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="528">借<span class="small">シャク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1716">酌<span class="small">シャク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="5506">迹<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="11289">㪿<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14029">娋<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14944">捇<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15178">栜<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16079">烵<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16816">积<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20642">㹱<span class="small">シャク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="750">責<span class="small">シャク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1122">釈<span class="small">シャク</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1468">惜<span class="small">シャク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="13380">唶<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14097">婥<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14112">婼<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14691">庴<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14783">徣<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15630">淖<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16086">烾<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16399">猎<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19181">㛫<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19183">㛭<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19279">㝜<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20348">㳻<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20858">㾊<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22116">䖨<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="9312">舃<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="9313">舄<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14838">惁<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16106">焟<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16115">焬<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16118">焯<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16121">焳<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19911">㪕<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19984">㫺<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20232">㱤<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21479">䊂<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22507">䞠<span class="small">シャク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1163">跡<span class="small">シャク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="10493">皵<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="10625">矠<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="10690">碏<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13094">傶<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13805">塉<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14157">媳<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14532">嵴<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15077">斱<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15750">溹<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18034">銏<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19838">㨲<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21101">䂹<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21112">䃊<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21319">䇎<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21363">䇿<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21820">䐚<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22222">䘸<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22580">䟱<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="4774">綽<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13481">嘀<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13841">墌<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14189">嫧<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14650">幘<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17607">覞<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19707">㥽<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20089">㮦<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22522">䞰<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="24163">飵<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="8348">趞<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="8404">踖<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13527">噍<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13933">奭<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14880">憡<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15266">樍<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16196">熦<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16451">獡<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17351">蕮<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17673">諎<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19852">㩇<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19856">㩍<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21242">䅴<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21243">䅵<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21840">䐱<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22428">䜺<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23658">䵠<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="24090">禚<span class="small">シャク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="548">積<span class="small">シャク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1418">錯<span class="small">シャク</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2477">錫<span class="small">シャク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="14226">嬕<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16611">瘷<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16765">磭<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23024">䨛<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23688">䶂<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="27753">𥻨<span class="small">シャク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1717">爵<span class="small">シャク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4280">蹐<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17499">蟅<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19867">㩞<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20445">㵶<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22533">䞽<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22773">䣢<span class="small">シャク</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2496">蹟<span class="small">シャク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="17041">繛<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17698">謮<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17704">謶<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19238">㜰<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21049">䁺<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22288">䚍<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22540">䟄<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23033">䨥<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23389">䯜<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="27706">𣝣<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="4943">爍<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="6977">䱜<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="9141">繳<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16258">爑<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="25219">廭<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="6336">釋<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18119">鏼<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21050">䁻<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23575">䳭<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="3318">嚼<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="5255">癪<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16265">爚<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17050">纅<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19881">㩱<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16267">爝<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20012">㬭<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22550">䟏<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="4735">鑠<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="10489">皭<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18590">鼜<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23675">䵱<span class="small">シャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18749">㒪<span class="small">シャク</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4517">笏<span class="small">しゃく</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="046">石<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13214">叒<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="24266">䂖<span class="small">ジャク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="894">若<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15488">泎<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17941">邮<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19591">㣙<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="24108">苖<span class="small">ジャク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="154">弱<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="12534">偌<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17237">莋<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21191">䄷<span class="small">ジャク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="372">笛<span class="small">ジャク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="947">著<span class="small">ジャク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1123">寂<span class="small">ジャク</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2497">雀<span class="small">ジャク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="8680">鄀<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13380">唶<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15201">梑<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15656">渃<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17148">脨<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19381">㟙<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20858">㾊<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22116">䖨<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23904">喏<span class="small">ジャク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="363">着<span class="small">ジャク</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2492">惹<span class="small">ジャク</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="6410">著<span class="small">ジャク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="12140">楉<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17922">逽<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="3711">搦<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="5400">蒻<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="5946">鉐<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="8852">箬<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14994">搻<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15785">漃<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17328">蔋<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18225">雿<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19609">㣱<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21823">䐞<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15848">潪<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17673">諎<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20609">㹍<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23536">䲵<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="24145">蹃<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="26626">㘃<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="7165">䧿<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="8853">篛<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22043">䕉<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23541">䲽<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13557">嚁<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17102">耫<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22309">䚥<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16772">礋<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="3816">鵲<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="6999">鰙<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17516">蠌<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22069">䕪<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22291">䚐<span class="small">ジャク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1470">籍<span class="small">ジャク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="21628">䌦<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="3831">鶸<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23633">䵂<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18554">鸅<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23607">䴞<span class="small">ジャク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23717">䶦<span class="small">ジャク</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2494">杓<span class="small">しゃく（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27851">𣏐<span class="small">しゃく（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24799">哕<span class="small">しゃく（り）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12339">噦<span class="small">しゃく（り）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24799">哕<span class="small">しゃく（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12339">噦<span class="small">しゃく（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4561">麝<span class="small">じゃこうじか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3874">鯱<span class="small">しゃち</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3874">鯱<span class="small">しゃちほこ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24799">哕<span class="small">しゃっく（り）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12339">噦<span class="small">しゃっく（り）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2734">喋<span class="small">しゃべ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3283">喃<span class="small">しゃべ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3823">鶤<span class="small">しゃも</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26020">髅<span class="small">しゃれこうべ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="23195">䫫<span class="small">しゃれこうべ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4828">髏<span class="small">しゃれこうべ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4829">髑<span class="small">しゃれこうべ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts31">
                <h3 class="ttl_while">しゆ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo onyomi"><a class="color1" href="033">手<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6028">殳<span class="small">シュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="317">主<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13140">刍<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19261">㝊<span class="small">シュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="316">守<span class="small">シュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1125">朱<span class="small">シュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1129">舟<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12388">伀<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13145">刣<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13954">妐<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18886">㕬<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19348">㞱<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26390">㑇<span class="small">シュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="318">取<span class="small">シュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2022">呪<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3027">咒<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3083">侏<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11963">杸<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11972">枓<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14292">宔<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16006">炂<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20633">㹥<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26300">肿<span class="small">シュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="155">首<span class="small">シュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1124">狩<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5341">茱<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5895">洙<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12347">炷<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12508">俢<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13128">凁<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13718">垨<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14002">姝<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14025">娀<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15367">殶<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18187">陎<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18907">㖄<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19595">㣝<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19638">㤝<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19778">㧣<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20326">㳘<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23939">壴<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24081">祌<span class="small">シュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="315">酒<span class="small">シュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="729">修<span class="small">シュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="837">株<span class="small">シュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1433">殊<span class="small">シュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1718">珠<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5357">芻<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9175">罜<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10359">疰<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10655">砫<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11343">捒<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12511">倯<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12715">凇<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15057">敊<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16054">烐<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16496">珘<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16504">珫<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19749">㦵<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20269">㲓<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20567">㸡<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21327">䇗<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21788">䏭<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3393">娵<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3394">娶<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3693">掫<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5189">陬<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5976">淞<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9014">紸<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9798">蛀<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9982">眾<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10030">袾<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10670">硃<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10794">祩<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10795">秼<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13768">埾<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14096">婤<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14781">徟<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15624">淍<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17082">翑<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17876">軗<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17955">郮<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18707">㑯<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18940">㖩<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20272">㲖<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20769">㼡<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21965">䓟<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22210">䘪<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22297">䚗<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22423">䜴<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22963">䧓<span class="small">シュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="898">衆<span class="small">シュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2031">須<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2499">蛛<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3279">啾<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4136">棕<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7954">隃<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8681">鄃<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9032">絑<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10037">裋<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13416">喌<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13427">喠<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14140">媝<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14150">媨<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14334">尌<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14637">幁<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14960">掱<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14962">揂<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14977">揰<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17644">詋<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17792">趋<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18709">㑳<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19193">㛸<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19477">㡏<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19604">㣫<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20255">㲁<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20720">㻓<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21347">䇬<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21702">䎇<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21742">䎷<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23831">媭<span class="small">シュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="168">数<span class="small">シュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2021">腫<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4137">椶<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4414">溲<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5207">鄒<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5358">蒭<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6706">馵<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8346">趍<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11861">腧<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12979">毹<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12980">毺<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13460">嗖<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14154">媰<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15358">歱<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15732">溞<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16132">煄<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16739">硹<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17001">綇<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17312">蓃<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17794">趎<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18417">魝<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18975">㗙<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19212">㜐<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19830">㨦<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21809">䐍<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21812">䐐<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22218">䘴<span class="small">シュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="529">種<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4696">銖<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7463">飳<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9063">緅<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11881">䐢<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12611">僦<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13484">嘃<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14647">幒<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16905">箃<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17925">遚<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18029">銂<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19218">㜘<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19226">㜡<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20099">㮲<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20607">㹋<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20889">㾭<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21227">䅡<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21228">䅢<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21746">䎻<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22519">䞭<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24309">䔏<span class="small">シュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1126">趣<span class="small">シュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1505">鋳<span class="small">シュ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2498">撞<span class="small">シュ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2500">諏<span class="small">シュ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6202">數<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6361">澍<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13527">噍<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14212">嬃<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15114">暰<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15382">氀<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16197">熧<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16330">犙<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17349">蕦<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17468">蝩<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17471">蝵<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19851">㩆<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21241">䅳<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21500">䊘<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21584">䋶<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21749">䎿<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21834">䐫<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22726">䢨<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23123">䪒<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23533">䲲<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24098">緰<span class="small">シュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="816">輸<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4555">麈<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8009">霔<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16685">瞛<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16764">磫<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17807">趥<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18227">霌<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18352">駯<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18483">鴤<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18811">㔌<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20679">㺛<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21400">䈭<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21895">䑼<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22243">䙔<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22244">䙕<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22609">䠓<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22643">䠼<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22807">䤇<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23412">䯷<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2501">趨<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7120">鴸<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10511">盨<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12272">橾<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17988">醙<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18355">駷<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18431">鮢<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20145">㯶<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20799">㼿<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21063">䂌<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21296">䆶<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21299">䆹<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21323">䇓<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21412">䈺<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22154">䗛<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23002">䨂<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17037">繏<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17503">蟗<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17848">蹖<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18358">騆<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22392">䜅<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22687">䡭<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23094">䩱<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23096">䩳<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23293">䭭<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23417">䯾<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6988">鯫<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15074">斔<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15321">櫢<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21325">䇕<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22463">䝦<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22693">䡴<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23145">䪮<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23423">䰅<span class="small">シュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1441">鐘<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4816">繻<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6759">騶<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18373">騪<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23577">䳯<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17400">蘴<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23430">䰌<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23497">䱸<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23725">䶱<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4651">鬚<span class="small">シュ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5725">鑄<span class="small">シュ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="18144">鑐<span class="small">シュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23434">䰑<span class="small">シュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="066">入<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5740">从<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26383">㐵<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3644">戍<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13644">圳<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15432">汓<span class="small">ジュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1434">寿<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13253">吺<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17207">苁<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18886">㕬<span class="small">ジュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="319">受<span class="small">ジュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="959">乳<span class="small">ジュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2022">呪<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3027">咒<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17213">苬<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19591">㣙<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12479">侸<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12652">俦<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16305">牰<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17536">衶<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24081">祌<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24110">茧<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25228">徔<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25384">树<span class="small">ジュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="900">従<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17423">蚛<span class="small">ジュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="728">授<span class="small">ジュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1754">訟<span class="small">ジュ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6180">從<span class="small">ジュ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="13768">埾<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14096">婤<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15606">涭<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16600">痋<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16959">粙<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17253">菗<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18665">㐡<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18930">㖟<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19664">㥅<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20343">㳶<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20769">㼡<span class="small">ジュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="899">就<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10037">裋<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14132">媑<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14150">媨<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14334">尌<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14353">尰<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14497">嵀<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15666">渪<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15711">湭<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16892">筗<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16990">絒<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17817">跓<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18197">隀<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19484">㡖<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19688">㥢<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22338">䛆<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22416">䜬<span class="small">ジュ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5135">頌<span class="small">ジュ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="13092">傮<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14154">媰<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16139">煍<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16157">煪<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16625">皗<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17794">趎<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18800">㓽<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19212">㜐<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20514">㷕<span class="small">ジュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1127">需<span class="small">ジュ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2504">竪<span class="small">ジュ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2506">綬<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4696">銖<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4860">聚<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4968">誦<span class="small">ジュ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6156">壽<span class="small">ジュ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="9617">蓯<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14183">嫞<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15816">漴<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17574">褈<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18627">夀<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21228">䅢<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22366">䛦<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27732">𥠢<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6361">澍<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17016">緟<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17468">蝩<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18342">駎<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20612">㹐<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21241">䅳<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21385">䈙<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22380">䛵<span class="small">ジュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="895">樹<span class="small">ジュ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1719">儒<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2505">豎<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3140">儔<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18426">鮂<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18811">㔌<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20422">㵞<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2502">嬬<span class="small">ジュ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2503">濡<span class="small">ジュ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3427">孺<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3633">懦<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9691">薷<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11200">懧<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11505">擩<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13559">嚅<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16460">獳<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20444">㵵<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24126">薵<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24368">䳋<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25142">嶿<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27731">𥢓<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4313">臑<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12293">檽<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15125">曘<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16243">燸<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16245">燽<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20620">㹘<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22434">䝂<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23417">䯾<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5068">襦<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18442">鯦<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20912">㿒<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20927">㿧<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4109">蠕<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4816">繻<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21521">䊭<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22107">䖜<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23577">䳯<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8771">醹<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22448">䝒<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22496">䞕<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22629">䠫<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23200">䫱<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18144">鑐<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21633">䌬<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23584">䳷<span class="small">ジュ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2507">鷲<span class="small">ジュ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="7424">顬<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23242">䬞<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23456">䰰<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18457">鱬<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23518">䲖<span class="small">ジュ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12363">亼<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24537">习<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="897">収<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1721">囚<span class="small">シュウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1728">汁<span class="small">シュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="12999">卌<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18620">龱<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19761">㧃<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22942">䦹<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="324">州<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1129">舟<span class="small">シュウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1727">充<span class="small">シュウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="6196">收<span class="small">シュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6689">乑<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12386">众<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13605">团<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13644">圳<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14906">执<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15432">汓<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15449">汷<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18684">㐺<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1128">秀<span class="small">シュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="26390">㑇<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="530">周<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="896">宗<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2022">呪<span class="small">シュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3027">咒<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3453">岫<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3485">帚<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4338">泅<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10826">秇<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15485">泈<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17213">苬<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17943">邹<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20631">㹣<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20765">㼙<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="157">秋<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="321">拾<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="531">祝<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1720">臭<span class="small">シュウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2510">柊<span class="small">シュウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2512">洲<span class="small">シュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2520">酋<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9443">茺<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10832">秌<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12508">俢<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13303">咠<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14025">娀<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15510">洀<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16305">牰<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18907">㖄<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19595">㣝<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19638">㤝<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19779">㧤<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20326">㳘<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24081">祌<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="729">修<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2023">袖<span class="small">シュウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="6399">祝<span class="small">シュウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="6409">臭<span class="small">シュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="13361">唒<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15057">敊<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15182">栦<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16054">烐<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16496">珘<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16504">珫<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16628">皱<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25550">涩<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="156">週<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="320">習<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="323">終<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="327">宿<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1118">執<span class="small">シュウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1726">渋<span class="small">シュウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1772">崇<span class="small">シュウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="2024">羞<span class="small">シュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3267">售<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3394">娶<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3693">掫<span class="small">シュウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="4229">脩<span class="small">シュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="5380">菘<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5520">逎<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5942">菷<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8666">郰<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9507">菆<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9982">眾<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10154">琇<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12535">偢<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13002">卙<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13083">偮<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13389">啃<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14096">婤<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14462">崈<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14781">徟<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15606">涭<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15619">淁<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15624">淍<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17955">郮<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18930">㖟<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19278">㝛<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19664">㥅<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20272">㲖<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20367">㴕<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21965">䓟<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22210">䘪<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22963">䧓<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23961">崧<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27303">㴋<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="322">集<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="898">衆<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="899">就<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2047">痩<span class="small">シュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2509">揖<span class="small">シュウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2516">萩<span class="small">シュウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2517">葺<span class="small">シュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3279">啾<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3590">愀<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4393">湫<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7555">鈒<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9299">臰<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11403">揪<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11695">晭<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12096">棸<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13416">喌<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14140">媝<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14150">媨<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14353">尰<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14488">崷<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14962">揂<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15357">歮<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15663">渞<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15690">湒<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15711">湭<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16990">絒<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17644">詋<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17790">趇<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18218">雭<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18709">㑳<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18965">㗊<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19605">㣬<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19688">㥢<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19981">㫶<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20255">㲁<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20720">㻓<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21318">䇍<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21347">䇬<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21702">䎇<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22416">䜬<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26318">腙<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1723">酬<span class="small">シュウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1724">愁<span class="small">シュウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2508">嵩<span class="small">シュウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2511">楢<span class="small">シュウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2518">蒐<span class="small">シュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4145">楸<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4146">楫<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4414">溲<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4768">綉<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5519">遒<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5985">蓚<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8134">詶<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8738">酧<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9306">臹<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11226">戢<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11252">揫<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13092">傮<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13460">嗖<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14154">媰<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15710">湬<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15732">溞<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15747">溴<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16139">煍<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16157">煪<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16427">獀<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16739">硹<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17001">綇<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17086">翜<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17312">蓃<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17794">趎<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18800">㓽<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20075">㮑<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20514">㷕<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21812">䐐<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21816">䐕<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23982">廋<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3297">嗽<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3612">慴<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4543">箒<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4860">聚<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4874">甃<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9615">蓻<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9616">蔠<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9624">蓨<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12611">僦<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12888">歰<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12911">殠<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13484">嘃<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14550">嶍<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14864">慒<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15772">滫<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15804">漝<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15816">漴<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15824">潀<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16550">璓<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16574">瓡<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16677">瞅<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16905">箃<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17014">緁<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17925">遚<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18029">銂<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18989">㗩<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20099">㮲<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20284">㲣<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20607">㹋<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20889">㾭<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21015">䁒<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21228">䅢<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21229">䅤<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21746">䎻<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22232">䙄<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22519">䞭<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24309">䔏<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25590">潈<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27777">𠍱<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2048">踪<span class="small">シュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4702">銹<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4788">緝<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5603">皺<span class="small">シュウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5837">澁<span class="small">シュウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="6450">瘦<span class="small">シュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="8306">賙<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8509">輖<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9088">緧<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9343">艏<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10000">褏<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9874">蝤<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9999">褎<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10991">慹<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11179">憱<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12208">槢<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13104">僽<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13527">噍<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15263">樇<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15835">潗<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15846">潨<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16192">熠<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16330">犙<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16916">箿<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16918">篍<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17471">蝵<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18995">㗱<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19082">㙫<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19418">㠇<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19424">㠍<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19425">㠎<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19753">㦻<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19851">㩆<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21241">䅳<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21500">䊘<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21588">䋺<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21749">䎿<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21839">䐰<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22145">䗏<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22380">䛵<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23533">䲲<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2513">穐<span class="small">シュウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2519">輯<span class="small">シュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="5061">褶<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5698">駲<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7986">雔<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8754">醔<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8975">糔<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9670">蕺<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9896">螋<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14575">嶯<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15366">殧<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15837">潚<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17807">趥<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18227">霌<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18426">鮂<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18483">鴤<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18727">㒊<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20422">㵞<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20905">㿇<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21400">䈭<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21895">䑼<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22609">䠓<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22807">䤇<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23412">䯷<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24033">濈<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1722">醜<span class="small">シュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2515">繍<span class="small">シュウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2521">鍬<span class="small">シュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4093">螽<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5197">隰<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6240">澀<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7728">鍫<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8888">簉<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12143">檝<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12273">橚<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17988">醙<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18074">鍓<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20444">㵵<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21296">䆶<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21412">䈺<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21422">䉅<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21846">䐹<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21898">䒁<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22154">䗛<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23002">䨂<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24313">䔼<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5092">鞦<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6623">鼨<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7315">鞧<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7441">䬒<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7758">鎀<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10246">璹<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16696">矁<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17503">蟗<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17703">謵<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17705">謺<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18358">騆<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18584">鼀<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20619">㹗<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21612">䌖<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22687">䡭<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23093">䩰<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23293">䭭<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23417">䯾<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2025">蹴<span class="small">シュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="5999">鏥<span class="small">シュウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6454">繡<span class="small">シュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6978">鯞<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7440">颼<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7783">鏅<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7789">鏉<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8017">霫<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8435">蹵<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12144">艥<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18442">鯦<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18573">黀<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20927">㿧<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22463">䝦<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23145">䪮<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23340">䮟<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24162">颾<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24168">餿<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26024">鬏<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2522">鰍<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3880">鰌<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6759">騶<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7177">鶖<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7501">饈<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16341">犨<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18118">鏶<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18304">飁<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18373">騪<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21759">䏉<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22107">䖜<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2514">龝<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7827">鏽<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8212">譅<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8739">醻<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15972">灇<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17400">蘴<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18239">霵<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18381">騽<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21260">䆋<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23497">䱸<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23725">䶱<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1130">襲<span class="small">シュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="7035">鰼<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7036">鰽<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7037">鱃<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23361">䮶<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23681">䵸<span class="small">シュウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2507">鷲<span class="small">シュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="5013">讐<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5014">讎<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6671">齱<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4511">驟<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6883">魗<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18217">雦<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6675">齺<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19025">㘜<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16344">犫<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7977">雧<span class="small">シュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5676">驫<span class="small">シュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="034">十<span class="small">ジュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="066">入<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12363">亼<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12997">卄<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24537">习<span class="small">ジュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="059">中<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2523">什<span class="small">ジュウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2524">廿<span class="small">ジュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="5740">从<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13205">厹<span class="small">ジュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1728">汁<span class="small">ジュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="10820">禸<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22942">䦹<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24199">㘝<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25026">头<span class="small">ジュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1727">充<span class="small">ジュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2525">戎<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13604">囡<span class="small">ジュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="326">住<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3541">忸<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5102">狃<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11291">抐<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13963">妞<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15465">沑<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19319">㞏<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20838">㽱<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11970">杻<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16008">炄<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20698">㺲<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21769">䏔<span class="small">ジュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="321">拾<span class="small">ジュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="325">重<span class="small">ジュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1131">柔<span class="small">ジュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="9444">茙<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12652">俦<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14025">娀<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14275">孨<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16378">狨<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21059">䂇<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25228">徔<span class="small">ジュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="900">従<span class="small">ジュウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2526">紐<span class="small">ジュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="12969">毧<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13361">唒<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15182">栦<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16953">粈<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17242">莥<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20041">㭜<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25550">涩<span class="small">ジュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="320">習<span class="small">ジュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1726">渋<span class="small">ジュウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="6180">從<span class="small">ジュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="11818">脜<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24686">兽<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3706">揉<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4685">鈕<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4763">絨<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9207">羢<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9549">葇<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14118">媃<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15357">歮<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15661">渘<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16418">猱<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18952">㖻<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20257">㲃<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11862">腬<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12141">楺<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16155">煣<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16533">瑈<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21814">䐓<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22995">䧷<span class="small">ジュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1725">銃<span class="small">ジュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14864">慒<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20826">㽥<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5270">糅<span class="small">ジュウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5837">澁<span class="small">ジュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17464">蝚<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19425">㠎<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21582">䋴<span class="small">ジュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="167">頭<span class="small">ジュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="901">縦<span class="small">ジュウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1132">獣<span class="small">ジュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3140">儔<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4272">蹂<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8521">輮<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15386">氄<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18348">駥<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20434">㵫<span class="small">ジュウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5914">縱<span class="small">ジュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6240">澀<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7729">鍒<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14241">嬦<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19092">㙷<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21898">䒁<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5095">鞣<span class="small">ジュウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5858">獸<span class="small">ジュウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16567">瓇<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18267">韖<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18370">騥<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23424">䰆<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7000">鰇<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18118">鏶<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18304">飁<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18515">鶔<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18381">騽<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18144">鑐<span class="small">ジュウ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2377">姑<span class="small">しゅうと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5629">舅<span class="small">しゅうと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2377">姑<span class="small">しゅうとめ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10108">玊<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="2527">夙<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14338">尗<span class="small">シュク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1731">叔<span class="small">シュク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18690">㑉<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18694">㑐<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25271">拀<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26294">肃<span class="small">シュク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="531">祝<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="11999">柷<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16862">竐<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18907">㖄<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="3108">俶<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="5110">倏<span class="small">シュク</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6399">祝<span class="small">シュク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6635">俼<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16500">珟<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23893">倐<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24112">莤<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24242">㳤<span class="small">シュク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="327">宿<span class="small">シュク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1729">粛<span class="small">シュク</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1730">淑<span class="small">シュク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="5370">菽<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="10155">珿<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13763">埱<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14958">掓<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16090">焂<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19278">㝛<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23948">婌<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27303">㴋<span class="small">シュク</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2157">粥<span class="small">シュク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13416">喌<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14150">媨<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16524">琡<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21318">䇍<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="6283">肅<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="9230">翛<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13460">嗖<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21707">䎌<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21760">䏋<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="5408">蓿<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="7877">閦<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13482">嘁<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14999">摍<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15013">摵<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17328">蔋<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17825">跾<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17826">踀<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18984">㗤<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19220">㜚<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19574">㣃<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20396">㴼<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="4173">槭<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="8158">諔<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="8402">踧<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13523">噈<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15267">樎<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17830">踓<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19851">㩆<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15366">殧<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15837">潚<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17845">踿<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19855">㩋<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21128">䃞<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22247">䙘<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22609">䠓<span class="small">シュク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="902">縮<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="4994">謖<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="6941">鮛<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="9118">縬<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12273">橚<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16553">璛<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17689">謏<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19927">㪩<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21896">䑿<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22154">䗛<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="4282">蹙<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="8426">䠞<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="8427">蹜<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="10246">璹<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18584">鼀<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18585">鼁<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21131">䃤<span class="small">シュク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2025">蹴<span class="small">シュク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6979">䱙<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="8435">蹵<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12665">儵<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21719">䎘<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="7418">顣<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="3772">齪<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="5465">鬻<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20169">㰗<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20466">㶖<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23681">䵸<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="6775">驌<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22264">䙯<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="7069">鱐<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="7208">鷫<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23048">䨹<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24130">虪<span class="small">シュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="3424">孰<span class="small">ジュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23948">婌<span class="small">ジュク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1732">塾<span class="small">ジュク</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="903">熟<span class="small">ジュク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21128">䃞<span class="small">ジュク</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="992">郵<span class="small">しゅくば</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13312">咰<span class="small">シュチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18908">㖅<span class="small">シュチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20701">㺷<span class="small">シュチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15343">欰<span class="small">シュチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16505">珬<span class="small">シュチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20196">㰵<span class="small">シュチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21291">䆯<span class="small">シュチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18579">黢<span class="small">シュチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23483">䱣<span class="small">シュチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23580">䳳<span class="small">シュチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5669">卆<span class="small">シュツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="035">出<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3999">朮<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10293">甩<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11933">术<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14387">岀<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19345">㞮<span class="small">シュツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="561">卒<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6540">卹<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11048">怵<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13001">䘚<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15474">沭<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3563">恤<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9445">荗<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11074">䘏<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13312">咰<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18908">㖅<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20701">㺷<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10836">秫<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15343">欰<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16505">珬<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17548">袕<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20849">㾁<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22205">䘤<span class="small">シュツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="731">術<span class="small">シュツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="820">率<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12356">啐<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14469">崒<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16099">焌<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21545">䋉<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23962">崪<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26564">裇<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8109">訹<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9550">蒁<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20196">㰵<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7579">鉥<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8297">賉<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19315">㞊<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7630">銊<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16911">箤<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13525">噊<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15829">潏<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17836">踤<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21584">䋶<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24340">䢦<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7580">錰<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21291">䆯<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4095">蟀<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18579">黢<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23483">䱣<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3765">齣<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18514">鶐<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13003">卛<span class="small">シュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23580">䳳<span class="small">シュツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="034">十<span class="small">ジュッ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3999">朮<span class="small">ジュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11933">术<span class="small">ジュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3645">戌<span class="small">ジュツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="730">述<span class="small">ジュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6540">卹<span class="small">ジュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11048">怵<span class="small">ジュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3563">恤<span class="small">ジュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11074">䘏<span class="small">ジュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14819">怷<span class="small">ジュツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="731">術<span class="small">ジュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16988">絉<span class="small">ジュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9550">蒁<span class="small">ジュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17747">貀<span class="small">ジュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22718">䢞<span class="small">ジュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8297">賉<span class="small">ジュツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22724">䢤<span class="small">ジュツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1135">旬<span class="small">シュン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13051">伨<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3227">吮<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10547">䀏<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11040">忳<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13898">夋<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15145">杊<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20576">㸪<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10302">畃<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11649">旾<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11770">肫<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12450">侚<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18696">㑓<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21772">䏛<span class="small">シュン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="158">春<span class="small">シュン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1733">俊<span class="small">シュン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3532">徇<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3564">恂<span class="small">シュン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="4348">洵<span class="small">シュン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="5342">荀<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8650">郇<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8997">紃<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10519">盹<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11777">胊<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11782">胗<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13312">咰<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14014">姰<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14425">峋<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14829">恮<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16375">狥<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19468">㡄<span class="small">シュン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1734">准<span class="small">シュン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2528">峻<span class="small">シュン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2533">隼<span class="small">シュン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3043">笋<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3573">悛<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4374">浚<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7931">陖<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7980">隽<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8581">迿<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10146">珣<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10531">䀢<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11344">捘<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12034">栒<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13736">埈<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15375">毥<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15574">浱<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19973">㫩<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20187">㰬<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22779">䣨<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24301">䓐<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5512">逡<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8750">䣩<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10546">眴<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11650">萅<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11684">晙<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12358">啍<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12536">偆<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12537">偱<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13766">埻<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13927">奞<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16099">焌<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17639">訰<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17781">赹<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22209">䘩<span class="small">シュン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2529">竣<span class="small">シュン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3042">筍<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5600">皴<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6074">凖<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8237">䜭<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9553">葰<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10323">畯<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10532">䀵<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10561">睃<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13803">堾<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14126">媋<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14967">揗<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16105">焞<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17277">萶<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18951">㖺<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19480">㡒<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19819">㨚<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21807">䐇<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22123">䖲<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26405">㑺<span class="small">シュン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="732">準<span class="small">シュン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2348">馴<span class="small">シュン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2530">舜<span class="small">シュン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2531">遁<span class="small">シュン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3589">惷<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4578">雋<span class="small">シュン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="4959">詢<span class="small">シュン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="9587">蒓<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10859">稕<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11706">暙<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12941">殾<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15771">滣<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18846">㔼<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19287">㝦<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21811">䐏<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5407">蓴<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8394">踆<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9064">綧<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12187">榫<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15799">漘<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15826">潃<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16671">睶<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17764">賐<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18334">馻<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20785">㼱<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20925">㿤<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22237">䙉<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22519">䞭<span class="small">シュン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1436">遵<span class="small">シュン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2532">醇<span class="small">シュン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3137">儁<span class="small">シュン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="4972">諄<span class="small">シュン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="8854">箰<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8855">箺<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11895">膞<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13892">壿<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14563">嶟<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17474">蝽<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18870">㕙<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19722">㦏<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20409">㵌<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20827">㽦<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21586">䋸<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5414">蕣<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7472">餕<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8318">賰<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8411">踳<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8749">醕<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9991">衠<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10596">瞚<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11188">懏<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14325">寯<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14878">憌<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18350">駨<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22049">䕑<span class="small">シュン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2534">駿<span class="small">シュン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4439">濬<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9647">橓<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10605">瞤<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10949">竴<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15294">檈<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21875">䑞<span class="small">シュン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1133">瞬<span class="small">シュン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="7136">鵔<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7137">鵕<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7759">鎨<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8905">簨<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12637">㒞<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26322">膥<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4288">蹲<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18402">鬊<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18439">鯙<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22869">䥎<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23339">䮞<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3882">鰆<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4111">蠢<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7195">鶽<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18549">鷷<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23596">䴄<span class="small">シュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15993">灥<span class="small">シュン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1134">巡<span class="small">ジュン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1135">旬<span class="small">ジュン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13051">伨<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25220">廵<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11040">忳<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15145">杊<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20576">㸪<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11770">肫<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12450">侚<span class="small">ジュン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1136">盾<span class="small">ジュン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3532">徇<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3564">恂<span class="small">ジュン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="4348">洵<span class="small">ジュン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="5342">荀<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14014">姰<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16375">狥<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19468">㡄<span class="small">ジュン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="904">純<span class="small">ジュン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1734">准<span class="small">ジュン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1736">殉<span class="small">ジュン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2533">隼<span class="small">ジュン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3043">笋<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15375">毥<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15602">润<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19975">㫬<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22779">䣨<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24301">䓐<span class="small">ジュン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2535">惇<span class="small">ジュン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2537">淳<span class="small">ジュン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="8750">䣩<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11821">䏰<span class="small">ジュン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="532">順<span class="small">ジュン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1735">循<span class="small">ジュン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2538">閏<span class="small">ジュン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3042">筍<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6074">凖<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11114">㥫<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14967">揗<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15719">湻<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16319">犉<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19257">㝄<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19691">㥧<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19819">㨚<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20278">㲝<span class="small">ジュン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="732">準<span class="small">ジュン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2348">馴<span class="small">ジュン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2531">遁<span class="small">ジュン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2536">楯<span class="small">ジュン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="4959">詢<span class="small">ジュン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6338">閠<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5407">蓴<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9064">綧<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15826">潃<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18334">馻<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22008">䔚<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22237">䙉<span class="small">ジュン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1435">潤<span class="small">ジュン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1436">遵<span class="small">ジュン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2532">醇<span class="small">ジュン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="4972">諄<span class="small">ジュン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15022">撋<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19419">㠈<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20827">㽦<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21586">䋸<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22924">䦞<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5698">駲<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7694">錞<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8749">醕<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14878">憌<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15277">橍<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19259">㝇<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26324">膶<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10605">瞤<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3817">鶉<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18439">鯙<span class="small">ジュン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22869">䥎<span class="small">ジュン</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5335">茆<span class="small">じゅんさい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5407">蓴<span class="small">じゅんさい</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts32">
                <h3 class="ttl_while">しよ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo onyomi"><a class="color1" href="906">処<span class="small">ショ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1636">且<span class="small">ショ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2543">疋<span class="small">ショ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12726">处<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25105">屿<span class="small">ショ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="533">初<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3664">抒<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9393">芧<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10939">竌<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11042">忬<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12414">伹<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12826">劯<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13142">刞<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15454">汿<span class="small">ショ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="329">所<span class="small">ショ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2541">杵<span class="small">ショ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2652">岨<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3240">咀<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4015">杼<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4335">沮<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5336">苴<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5693">鼡<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11049">怚<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13672">坥<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15455">沀<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18672">㐨<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19516">㡹<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22738">䢸<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3093">俎<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4221">胥<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5957">爼<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12480">俆<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16492">珇<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19943">㪽<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20556">㸖<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21778">䏣<span class="small">ショ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="159">書<span class="small">ショ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2539">恕<span class="small">ショ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4658">砠<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5219">疽<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5938">莇<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9002">紓<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9174">罝<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13730">垿<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17546">袓<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19782">㧧<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22749">䣄<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27697">𡌛<span class="small">ショ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="231">野<span class="small">ショ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1737">庶<span class="small">ショ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2542">渚<span class="small">ショ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="3028">埜<span class="small">ショ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4032">梳<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4062">蛆<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6059">處<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9262">耝<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12538">偦<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12725">䖏<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20274">㲙<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21869">䑕<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21961">䓚<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23979">庻<span class="small">ショ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="328">暑<span class="small">ショ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1791">疎<span class="small">ショ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2544">疏<span class="small">ショ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2548">黍<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4765">絮<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4952">詛<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5575">舒<span class="small">ショ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6389">渚<span class="small">ショ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="7950">陼<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8339">趄<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8368">跙<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8782">㙒<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14972">揟<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15689">湑<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16108">焣<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17737">豠<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19686">㥠<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19983">㫹<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21723">䎝<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22466">䝪<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25560">溆<span class="small">ショ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="905">署<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2549">鼠<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4575">雎<span class="small">ショ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6386">暑<span class="small">ショ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="7581">鉏<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9591">蒩<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12142">楈<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15101">暏<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16896">筡<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16999">綀<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17301">蒣<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20498">㷂<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20837">㽰<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21112">䃊<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21564">䋡<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21683">䍱<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22792">䣷<span class="small">ショ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1738">緒<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3351">墅<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5402">蔗<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6106">踈<span class="small">ショ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6407">署<span class="small">ショ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="9856">蜡<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10339">䟽<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10865">稰<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14193">嫬<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15817">漵<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16542">瑹<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18309">飷<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19218">㜘<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20402">㵂<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21374">䈌<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23151">䪶<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25592">潊<span class="small">ショ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="907">諸<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2547">鋤<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5411">蔬<span class="small">ショ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6425">緖<span class="small">ショ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6896">魣<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8781">壄<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8970">糈<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9236">翥<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9873">蝑<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15270">樜<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15858">潻<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17022">縃<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17469">蝫<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19947">㫂<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21245">䅷<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21388">䈝<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24608">儊<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3478">嶼<span class="small">ショ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6371">諸<span class="small">ショ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="8175">諿<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8176">諝<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8755">醑<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9701">藇<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15904">濋<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15909">濐<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18482">鴡<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19434">㠘<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20436">㵭<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20439">㵰<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21031">䁦<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22247">䙘<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22678">䡤<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22999">䧾<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23468">䱉<span class="small">ショ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2540">曙<span class="small">ショ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2545">薯<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10511">盨<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15910">濖<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20444">㵵<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21417">䉀<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4283">蹠<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8050">覰<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9237">䬡<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10447">癙<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17699">謯<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17704">謶<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2546">藷<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8054">覷<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18111">鏣<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18502">鵨<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20457">㶆<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3766">齟<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7001">鯺<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8051">覻<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12307">櫧<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22879">䥚<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23276">䭖<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23489">䱬<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25991">糬<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21145">䃴<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22185">䘄<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17521">蠩<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27728">𡔈<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7075">鱮<span class="small">ショ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23443">䰞<span class="small">ショ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="036">女<span class="small">ジョ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1438">如<span class="small">ジョ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2550">汝<span class="small">ジョ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17935">邚<span class="small">ジョ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="330">助<span class="small">ジョ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="733">序<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3664">抒<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15454">汿<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17130">肗<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19034">㘧<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19615">㣽<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22946">䦽<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4015">杼<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12451">侞<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13693">坾<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15455">沀<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18672">㐨<span class="small">ジョ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1739">叙<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5345">茹<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5896">洳<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8949">籹<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12480">俆<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14627">帤<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16492">珇<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27725">𠀺<span class="small">ジョ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="908">除<span class="small">ジョ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1437">徐<span class="small">ジョ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2539">恕<span class="small">ジョ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="5938">莇<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11247">挐<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13730">垿<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15186">桇<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17546">袓<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20948">㿾<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22749">䣄<span class="small">ジョ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6200">敍<span class="small">ジョ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6201">敘<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7534">釹<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10029">袽<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20865">㾒<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21337">䇡<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21544">䋈<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21961">䓚<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24258">㼋<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4765">絮<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5575">舒<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8812">筎<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16108">焣<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22211">䘫<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3937">耡<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4060">蜍<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15101">暏<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17296">蒘<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17300">蒢<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17301">蒣<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21683">䍱<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7631">銣<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2547">鋤<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9648">蕠<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20418">㵖<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20897">㾻<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21245">䅷<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7102">鴑<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8872">篨<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20439">㵰<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2545">薯<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7122">鴽<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15910">濖<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20444">㵵<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15320">櫡<span class="small">ジョ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21524">䊰<span class="small">ジョ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/27694">𥝱<span class="small">じょ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6589">丄<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="037">小<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="039">上<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="160">少<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1162">井<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1742">升<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="5740">从<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6249">爿<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12367">仅<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13036">仉<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18871">㕚<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="038">正<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="043">生<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1138">召<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="2076">丼<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12954">匞<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15415">氶<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24202">㚈<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24560">仦<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24561">仩<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27730">𠙺<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="294">向<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1445">匠<span class="small">ショウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2551">丞<span class="small">ショウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2556">庄<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="9372">䒕<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12388">伀<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12390">仯<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13947">妆<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18686">㐼<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20306">㲽<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24566">伤<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27737">𤯔<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="171">声<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1141">床<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1745">肖<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1747">抄<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3187">劭<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3375">妝<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7932">阩<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11037">忪<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11327">抍<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11579">斘<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12355">呏<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12415">佋<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12416">佂<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13145">刣<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13177">卲<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13251">吵<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13954">妐<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14289">宑<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14673">庒<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14769">彸<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17207">苁<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18886">㕬<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19348">㞱<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20024">㭂<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20477">㶤<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21918">䒚<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24785">呛<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25268">抢<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27135">㧐<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27739">𠤵<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="044">青<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="537">松<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="735">承<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="736">招<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="745">性<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1139">沼<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1161">姓<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1444">昇<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1744">尚<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2554">妾<span class="small">ショウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2561">昌<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4351">牀<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4901">炒<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5201">邵<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5919">枩<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6484">刱<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6601">疌<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8028">靑<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9449">㽵<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11221">戕<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11589">斨<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11772">䏚<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11964">枀<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12713">冼<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13276">呫<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13903">夝<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13974">妱<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13988">姃<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14602">巶<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14734">弨<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15156">枞<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16006">炂<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16361">狌<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17219">苼<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18770">㓌<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19137">㚲<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19356">㞼<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22949">䧂<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23958">尙<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25234">怂<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25789">玱<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26300">肿<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="170">星<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="332">昭<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="336">乗<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="348">相<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="541">省<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="746">政<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1110">咲<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1417">削<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1796">荘<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3174">剏<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3503">庠<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3685">拯<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8574">迠<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9201">羏<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9446">茮<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10131">玿<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11651">昮<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11965">柗<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12481">俏<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13719">垩<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14005">姠<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14828">恦<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15167">柖<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15516">洆<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15555">浃<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16027">炡<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16030">炤<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16278">爯<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16491">珄<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16632">盄<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17534">衳<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19363">㟄<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20561">㸛<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25033">奖<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25095">尝<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25228">徔<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25810">疭<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25811">疮<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="331">消<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="535">笑<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="900">従<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="911">将<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1142">称<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1741">祥<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1750">症<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1751">宵<span class="small">ショウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2552">哨<span class="small">ショウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2568">秤<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3109">倡<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3455">峭<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3571">悚<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3572">悄<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4042">蚣<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4373">浹<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4909">烝<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5188">陞<span class="small">ショウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5704">乘<span class="small">ショウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="5939">莊<span class="small">ショウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="6444">涉<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="7524">釗<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7933">陗<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9311">㫪<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9478">莦<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10019">袑<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11243">扄<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11345">捎<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11676">晌<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11807">脀<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12218">桩<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12509">倘<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12510">倢<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12511">倯<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12715">凇<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12737">剙<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13721">垶<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14029">娋<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14048">娤<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14628">帩<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15184">样<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16652">眧<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16786">祒<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17105">耸<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19157">㛍<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19471">㡇<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19653">㤴<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20229">㱡<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20334">㳧<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21327">䇗<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25391">桨<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25519">浆<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26286">聂<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27810">𡝂<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="333">章<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="334">商<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="534">唱<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="544">清<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="753">接<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1137">紹<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1740">渉<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1754">訟<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="2046">爽<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2555">娼<span class="small">ショウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2559">捷<span class="small">ショウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2562">梢<span class="small">ショウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2570">菖<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3782">旌<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4386">淌<span class="small">ショウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="4525">笙<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="5112">猖<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5379">菁<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5515">逍<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5628">舂<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5976">淞<span class="small">ショウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6164">將<span class="small">ショウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="6180">從<span class="small">ショウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="6369">祥<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="7535">釥<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8095">訬<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9205">羕<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9508">菨<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9513">萐<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11106">惝<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11606">旍<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11637">曻<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11966">梥<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12357">啑<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12535">偢<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12539">偁<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12540">偅<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12541">偗<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13086">偼<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13384">唼<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13623">圊<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13751">埥<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13755">埩<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14083">婕<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14087">婙<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14308">寁<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14309">寈<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14480">崨<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14634">帹<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14693">庺<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14779">徜<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14782">徢<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14955">掅<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15196">梉<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15619">淁<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15627">淐<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15648">淸<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16095">焇<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17107">聇<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17260">菬<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17954">郬<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18196">陹<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18708">㑱<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20272">㲖<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20298">㲵<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21546">䋊<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21793">䏴<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22297">䚗<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22451">䝖<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23949">婧<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24424">渑<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24597">偿<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24751">厢<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24914">啸<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25323">掶<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26469">萧<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26838">跄<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26926">㡎<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27303">㴋<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27711">𣶏<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27845">𣇃<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="335">勝<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="380">湯<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="425">葉<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="536">焼<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="539">象<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="734">証<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="929">装<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1439">晶<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1440">掌<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1442">焦<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1743">硝<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1752">粧<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1755">詔<span class="small">ショウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2566">湘<span class="small">ショウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2567">甥<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3505">廂<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3590">愀<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3787">敞<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4135">椄<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4138">椒<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4393">湫<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4545">筝<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4687">鈔<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5116">猩<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5546">竦<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5556">稍<span class="small">ショウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5606">翔<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="7353">弽<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8111">詀<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8490">軺<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9551">葙<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10173">琩<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10375">痟<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10562">䀹<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11143">愓<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11696">晿<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13427">喠<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13429">喢<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13779">堘<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14370">屟<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14977">揰<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15212">棦<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15706">湦<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16108">焣<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16126">焺<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16127">焻<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16996">絴<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17153">脻<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17156">腈<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17278">萷<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18958">㗂<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19190">㛵<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19329">㞚<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19479">㡑<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19534">㢎<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19604">㣫<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19911">㪕<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19982">㫸<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20020">㬹<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20356">㴅<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20358">㴇<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20371">㴙<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20501">㷅<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20778">㼪<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21317">䇌<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21350">䇰<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22215">䘯<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22272">䙼<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24220">㨗<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25060">媫<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26576">觞<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="540">照<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="909">傷<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="920">聖<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1140">詳<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1471">摂<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1748">奨<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="2021">腫<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2571">蒋<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2573">蛸<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2576">鉦<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3183">剿<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3193">勦<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3712">搶<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4146">楫<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4239">腥<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4537">筱<span class="small">ショウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5135">頌<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="5158">睫<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6258">甞<span class="small">ショウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6309">裝<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6692">椉<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7582">鉊<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8788">㗛<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8821">筲<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8889">筿<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9048">綃<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9230">翛<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10005">㐮<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11217">愯<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11253">揱<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12589">傱<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12590">傽<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13095">傸<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13443">喿<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13447">嗆<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13807">塍<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13813">塖<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14506">嵊<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15082">旓<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15358">歱<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15728">溗<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16132">煄<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16139">煍<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16521">琞<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16743">碃<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17567">裮<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19068">㙚<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19830">㨦<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20074">㮐<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20078">㮔<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20098">㮱<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20202">㰼<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20376">㴥<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20515">㷖<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21222">䅛<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21488">䊋<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22218">䘴<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22230">䙂<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22516">䞪<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22663">䡕<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22721">䢡<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24922">嗫<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25255">慑<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25336">摄<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25568">滠<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27097">酱<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="529">種<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="744">精<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="761">像<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="910">障<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1749">彰<span class="small">ショウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2553">嘗<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2558">厰<span class="small">ショウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2560">摺<span class="small">ショウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2574">裳<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3472">嶂<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3612">慴<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3617">慵<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4353">韶<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4544">箏<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4968">誦<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4969">誚<span class="small">ショウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5775">奬<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="5879">慯<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6127">稱<span class="small">ショウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6457">蔣<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="8698">鄣<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8837">箐<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9065">緃<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9617">蓯<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9671">䔥<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9857">蜙<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9859">蜨<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10202">瑲<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10403">瘇<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10810">禓<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11166">慞<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11448">摏<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11967">㮤<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12188">榺<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12613">僘<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12614">僬<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12880">勨<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13152">劁<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13506">嘨<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13831">塽<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13836">墇<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13843">墏<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13846">墒<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14181">嫜<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14183">嫞<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14533">嵷<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14534">嵸<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14547">嶈<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14647">幒<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14648">幓<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14652">幛<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14869">慡<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15003">摤<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15007">摪<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15776">滳<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15787">漅<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15807">漡<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15821">漺<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16284">牄<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16593">畻<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17010">綤<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17014">緁<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17116">聙<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17319">蓵<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17324">蔁<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17328">蔋<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17330">蔏<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17574">褈<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17607">覞<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17623">觪<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17828">踃<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17898">輎<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18726">㒉<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19073">㙡<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19226">㜡<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19538">㢓<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19550">㢡<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20521">㷣<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20523">㷥<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20670">㺐<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20787">㼳<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20888">㾪<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21009">䁋<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21116">䃏<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21367">䈃<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21493">䊑<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21494">䊒<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21573">䋫<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21686">䍵<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21748">䎽<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22005">䔗<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22014">䔠<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22019">䔪<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22038">䕄<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22140">䗉<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22366">䛦<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23254">䬰<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23409">䯳<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24027">漳<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24070">獐<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24221">㨾<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25018">墙<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25066">嫱<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25587">潇<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25955">箫<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26031">緔<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26278">精<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26504">蔷<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27114">銄<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="389">箱<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="538">賞<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1443">衝<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1466">請<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="2026">憧<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2557">廠<span class="small">ショウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2563">樟<span class="small">ショウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2572">蕉<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3611">慫<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3619">憔<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3980">霄<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4179">樅<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4181">樔<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4320">漿<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4634">璋<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4703">銷<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4978">諍<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5243">瘡<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5280">餉<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5306">殤<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6253">獎<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7262">麨<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7999">霅<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8159">誯<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8403">踥<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8613">遧<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8856">箾<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9089">緗<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9908">螀<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10991">慹<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10997">憃<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11478">撜<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11479">撨<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11716">暲<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12209">槳<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12210">㯍<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12217">樁<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12274">樯<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12638">僺<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12799">劋<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12809">㔅<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13527">噍<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14201">嫶<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14372">屧<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14552">嶑<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14555">嶕<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14566">嶣<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14790">徸<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15114">暰<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15265">樉<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15830">潐<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15831">潒<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15852">潲<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16197">熧<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16543">瑺<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16546">瑽<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16918">篍<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17170">膡<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17340">蕂<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17468">蝩<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17664">誱<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17831">踕<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17837">踨<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17968">鄫<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18339">駋<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19292">㝭<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19425">㠎<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19587">㣒<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19854">㩊<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20536">㷹<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20608">㹌<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20612">㹐<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21025">䁞<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21394">䈣<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21584">䋶<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21596">䌃<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21834">䐫<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22143">䗌<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22592">䠀<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22726">䢨<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22842">䤮<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23620">䴰<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23964">嶒<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25212">幥<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25658">熵<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26854">踭<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27520">䛸<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="901">縦<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2564">樵<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2565">橡<span class="small">ショウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2577">錆<span class="small">ショウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2580">鞘<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3305">嘯<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3984">霎<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4188">橦<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4273">踵<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4571">歙<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5246">瘴<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5421">薔<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5431">蕭<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6136">墻<span class="small">ショウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6245">燒<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="7695">鋿<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7696">錩<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7885">閶<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8175">諿<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8958">糚<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10423">瘲<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10597">瞕<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11189">憴<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11372">擑<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11722">曌<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11904">膲<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14229">嬙<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14658">幧<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14713">廧<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14749">彇<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15387">氅<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15837">潚<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16207">熷<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16219">燋<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16594">疀<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16685">瞛<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16762">磢<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16764">磫<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16922">篜<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16928">篬<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17026">縔<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17589">褿<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18078">鍣<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18302">颵<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18474">鴊<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19855">㩋<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20262">㲈<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20292">㲬<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20797">㼽<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22042">䕈<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22244">䙕<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22283">䚇<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22983">䧪<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23026">䨝<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23467">䱆<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23540">䲼<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23610">䴤<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24030">澠<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25662">燞<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27897">𤢖<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1746">償<span class="small">ショウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1753">礁<span class="small">ショウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2521">鍬<span class="small">ショウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2569">篠<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2575">醤<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2578">鍾<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3217">燮<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4190">檣<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4278">蹌<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4352">牆<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4862">聳<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5063">襄<span class="small">ショウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5914">縱<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6281">聲<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6876">魈<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6983">鮝<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7728">鍫<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7730">鍶<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8321">賸<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8917">簘<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9116">縿<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9191">罿<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9907">螿<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9909">蟑<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9911">䗥<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10074">襐<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10437">癄<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10606">瞧<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10886">穕<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10887">穜<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11654">曐<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12143">檝<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12272">橾<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12658">儬<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13566">嚐<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15354">歗<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16212">熽<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16241">燳<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16769">磼<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16866">竲<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17489">螪<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17627">觲<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17689">謏<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17690">謒<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18257">鞝<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18265">韒<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18355">駷<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18491">鴹<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20799">㼿<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21063">䂌<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21299">䆹<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21420">䉃<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21510">䊢<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21603">䌌<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21756">䏆<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21846">䐹<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21899">䒂<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22059">䕝<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22255">䙢<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22851">䤸<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23388">䯚<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25902">礃<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26553">蟏<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27733">𤪉<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27735">𨲢<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2579">鎗<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3867">鮹<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4285">蹤<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4649">鬆<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4863">聶<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5580">觴<span class="small">ショウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6461">醬<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="7316">鞢<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8271">豵<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8428">蹡<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8510">䡮<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9137">繒<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9930">蟭<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9931">蟓<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10496">皽<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11655">皨<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11723">瞾<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17697">謪<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17703">謵<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17705">謺<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17848">蹖<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18260">鞩<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19875">㩩<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20619">㹗<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21131">䃤<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21612">䌖<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22393">䜆<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22395">䜈<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22537">䟁<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23332">䮖<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23604">䴛<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24134">蠂<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24248">㵾<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25024">夑<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2581">鯖<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4453">瀟<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4601">簫<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4719">鏘<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4894">艢<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5699">證<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6980">鯧<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6982">鯗<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6984">鯜<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7352">韘<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7784">鏱<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7785">鏦<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8199">譙<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8355">趭<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8436">蹱<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8765">醮<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9969">蟰<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10892">穪<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12144">艥<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12666">儴<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15074">斔<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16262">爕<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17377">藮<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18107">鏒<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18110">鏛<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18180">闛<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18509">鵿<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19880">㩰<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20547">㸉<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21513">䊥<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22405">䜓<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22693">䡴<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22867">䥌<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23038">䨭<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23146">䪯<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23343">䮢<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23482">䱢<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24236">㯾<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27683">櫵<span class="small">ショウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1441">鐘<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="7814">鐎<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14794">忀<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15330">櫹<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15963">瀼<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15966">灀<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17389">蘠<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17716">譝<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18118">鏶<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18121">鏿<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18127">鐌<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18374">騬<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18744">㒤<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19741">㦪<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20546">㸈<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20835">㽮<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23194">䫪<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23577">䳯<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24372">䶰<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27165">鐣<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3319">囁<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3640">懾<span class="small">ショウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6191">攝<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6870">鬺<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6981">䱽<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7196">鶬<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7421">顦<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10257">瓖<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11531">㩳<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12313">欀<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15967">灂<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15969">灄<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18134">鐰<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18382">騿<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20166">㰔<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21634">䌭<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22081">䕹<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23064">䩌<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23351">䮪<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23430">䰌<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23672">䵮<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27734">𨭻<span class="small">ショウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3891">鱆<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7038">鱂<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7258">麞<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9968">蠨<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12320">欇<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16267">爝<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18386">驓<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20012">㬭<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20216">㱌<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20808">㽊<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22893">䥭<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23584">䳷<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23632">䵁<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3836">鷦<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7847">鑜<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8223">讋<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9153">纕<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9970">蠰<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10096">襵<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10617">䂃<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16944">籦<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18453">鱌<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21635">䌮<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23594">䴂<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23674">䵰<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8460">躞<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18456">鱦<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23683">䵼<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7076">鱨<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7855">鑲<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8778">釂<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22450">䝕<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23676">䵲<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3897">鱶<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7512">饟<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5146">顳<span class="small">ショウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6589">丄<span class="small">ジョウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="039">上<span class="small">ジョウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1144">丈<span class="small">ジョウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1449">冗<span class="small">ジョウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3065">仍<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27695">𠀋<span class="small">ジョウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3069">仗<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9363">艿<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11268">扔<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12703">宂<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13037">仧<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14798">忊<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17931">邒<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24561">仩<span class="small">ジョウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="546">成<span class="small">ジョウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="570">兆<span class="small">ジョウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2551">丞<span class="small">ジョウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="8557">辸<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14610">帇<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14903">扙<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19265">㝎<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20023">㭁<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20264">㲌<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24974">场<span class="small">ジョウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="738">状<span class="small">ジョウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="739">条<span class="small">ジョウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2584">杖<span class="small">ジョウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="7864">镸<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7865">兏<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9390">芿<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10777">礽<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11288">扭<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11327">抍<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13177">卲<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13951">妌<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14907">扰<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19035">㘨<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20763">㼗<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21178">䄧<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21265">䆑<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23927">坈<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24785">呛<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26632">㘯<span class="small">ジョウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="190">長<span class="small">ジョウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="370">定<span class="small">ジョウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2582">帖<span class="small">ジョウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="6449">狀<span class="small">ジョウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13903">夝<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14409">岧<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19112">㚔<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19356">㞼<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20840">㽴<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24708">净<span class="small">ジョウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="336">乗<span class="small">ジョウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="912">城<span class="small">ジョウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1757">浄<span class="small">ジョウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1832">貞<span class="small">ジョウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2588">茸<span class="small">ジョウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3685">拯<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5501">迢<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8709">郑<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9446">茮<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13706">垗<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14680">庣<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15167">柖<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15516">洆<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16287">牊<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16373">狣<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19520">㡽<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20561">㸛<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20697">㺱<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22317">䚮<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24297">䒱<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25095">尝<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25527">浓<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27816">𠧪<span class="small">ジョウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1283">娘<span class="small">ジョウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3370">奘<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4909">烝<span class="small">ジョウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5704">乘<span class="small">ジョウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="5816">弉<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13131">凈<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14031">娍<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14040">娗<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14300">宬<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14454">峸<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14939">挰<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15595">涏<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16786">祒<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19806">㨅<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20334">㳧<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20647">㹶<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25537">涤<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26286">聂<span class="small">ジョウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="737">常<span class="small">ジョウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="740">情<span class="small">ジョウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="921">盛<span class="small">ジョウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1756">剰<span class="small">ジョウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3698">掟<span class="small">ジョウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5977">淨<span class="small">ジョウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="6111">條<span class="small">ジョウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6297">萇<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13088">傇<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13746">埝<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14844">惗<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15206">梷<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16080">烶<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17150">脭<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17250">菍<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19380">㟘<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19804">㨃<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19805">㨄<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21089">䂪<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21196">䄾<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21339">䇣<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21699">䎄<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22212">䘬<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23903">啨<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24424">渑<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24912">啶<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25928">秾<span class="small">ジョウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="161">場<span class="small">ジョウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1143">畳<span class="small">ジョウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="6061">剩<span class="small">ジョウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="7951">陾<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8491">軵<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11560">敜<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13433">喦<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13779">堘<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13783">堞<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14160">媶<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14982">搑<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16852">窚<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16994">絩<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19667">㥈<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20256">㲂<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20278">㲝<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20777">㼩<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21209">䅍<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21349">䇯<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21680">䍮<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22272">䙼<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26319">腚<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27861">𣓤<span class="small">ジョウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="913">蒸<span class="small">ジョウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="919">誠<span class="small">ジョウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="2067">溺<span class="small">ジョウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2586">牒<span class="small">ジョウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3400">嫋<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4769">絛<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6258">甞<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6692">椉<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7578">鉩<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9993">裊<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10005">㐮<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10324">叠<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13447">嗆<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13807">塍<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13813">塖<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13818">塣<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14506">嵊<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15250">榵<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15728">溗<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16741">碀<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16998">絾<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17796">趒<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18716">㑿<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20289">㲨<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21103">䂻<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21105">䂽<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21356">䇸<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21709">䎎<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22128">䖺<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22298">䚘<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22906">䦊<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24922">嗫<span class="small">ジョウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="545">静<span class="small">ジョウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2553">嘗<span class="small">ジョウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4424">滌<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6077">塲<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12880">勨<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13152">劁<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15249">榳<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15816">漴<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16593">畻<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16838">穁<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17319">蓵<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17658">誔<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17827">踂<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18225">雿<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20523">㷥<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21009">䁋<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21012">䁎<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21580">䋲<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21890">䑲<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22137">䗅<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23254">䬰<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23410">䯴<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27103">酿<span class="small">ジョウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1760">縄<span class="small">ジョウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2589">鄭<span class="small">ジョウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4973">諚<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5412">蕘<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7664">銸<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13527">噍<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14201">嫶<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14216">嬈<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14555">嶕<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14566">嶣<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14879">憕<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16543">瑺<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16858">窲<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17029">縙<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17170">膡<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17832">踗<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18050">鋚<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18171">閮<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18203">隢<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19425">㠎<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19712">㦂<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20536">㷹<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22026">䔲<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22703">䢇<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22842">䤮<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26851">踙<span class="small">ジョウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1224">濃<span class="small">ジョウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1447">錠<span class="small">ジョウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1448">嬢<span class="small">ジョウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1758">壌<span class="small">ジョウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4189">橈<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5529">遶<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5862">疂<span class="small">ジョウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6347">靜<span class="small">ジョウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="7693">鋷<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7697">錜<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14233">嬝<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15386">氄<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16207">熷<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16857">窱<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17357">薚<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17586">褭<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17589">褿<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17680">諪<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18055">鋽<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18346">駣<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18399">髶<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18484">鴧<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18738">㒛<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20262">㲈<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22042">䕈<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22617">䠜<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22809">䤊<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23165">䫆<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23323">䮍<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23467">䱆<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23546">䳂<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24030">澠<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3412">嬲<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5063">襄<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9049">縧<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10075">襓<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14240">嬥<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15292">檂<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16769">磼<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16841">穘<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16866">竲<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17847">蹑<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20800">㽀<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21132">䃥<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21295">䆵<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21756">䏆<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22249">䙚<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24356">䭃<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2583">擾<span class="small">ジョウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2587">穣<span class="small">ジョウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4103">蟯<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4811">繞<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4863">聶<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10082">襛<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10818">禯<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10889">穠<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17851">蹚<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18401">鬇<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18741">㒟<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21430">䉎<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21612">䌖<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22619">䠟<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23101">䩸<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23473">䱓<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23558">䳖<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2585">瀞<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6095">繩<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10325">曡<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12666">儴<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12831">勷<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18098">鎥<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18110">鏛<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19243">㜵<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19440">㠡<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21618">䌜<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22693">䡴<span class="small">ジョウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1446">譲<span class="small">ジョウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1759">醸<span class="small">ジョウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3741">攘<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5766">壤<span class="small">ジョウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6162">孃<span class="small">ジョウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="8770">醲<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8923">籋<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9729">蘘<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11215">懹<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13587">嚷<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15963">瀼<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16466">獽<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17517">蠗<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17716">譝<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18374">騬<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21306">䇀<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24372">䶰<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3319">囁<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5298">饒<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11929">䑋<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16264">爙<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18294">顤<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21146">䃵<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22081">䕹<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22435">䝃<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22884">䥡<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23351">䮪<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5643">禳<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5863">疉<span class="small">ジョウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5864">疊<span class="small">ジョウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="6270">穰<span class="small">ジョウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="7840">鑈<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20550">㸎<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23452">䰫<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9153">纕<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9970">蠰<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10266">瓤<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18405">鬞<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19885">㩶<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20623">㹛<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21466">䉴<span class="small">ジョウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5727">釀<span class="small">ジョウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="6319">讓<span class="small">ジョウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17861">躟<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18456">鱦<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21637">䌰<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4300">躡<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7855">鑲<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8229">讘<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19886">㩸<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4740">鑷<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4513">驤<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5146">顳<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6859">鬤<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22090">䖆<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27817">𠨋<span class="small">ジョウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23370">䯀<span class="small">ジョウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23601">䴑<span class="small">ジョウ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2161">允<span class="small">じょう</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12675">㽙<span class="small">じょう</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/13217">叞<span class="small">じょう</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1606">尉<span class="small">じょう</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3701">掾<span class="small">じょう</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/20505">㷉<span class="small">じょう</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5424">薑<span class="small">しょうが</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22071">䕬<span class="small">しょうが</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="4525">笙<span class="small">しょうのふえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25955">箫<span class="small">しょうのふえ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="8917">簘<span class="small">しょうのふえ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4601">簫<span class="small">しょうのふえ</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2570">菖<span class="small">しょうぶ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13909">夨<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="3066">仄<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14665">庂<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15423">汄<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19316">㞋<span class="small">ショク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="151">色<span class="small">ショク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="310">式<span class="small">ショク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1172">即<span class="small">ショク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20309">㳁<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="3906">昃<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15092">昗<span class="small">ショク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="162">食<span class="small">ショク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2027">拭<span class="small">ショク</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="6432">卽<span class="small">ショク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18700">㑛<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24076">皍<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="9289">聀<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="10312">畟<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="11343">捒<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12041">栻<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13334">哫<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13370">唧<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14038">娕<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14039">娖<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14945">捑<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16056">烒<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16064">烛<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20642">㹱<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22497">䞖<span class="small">ショク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="559">側<span class="small">ショク</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2590">埴<span class="small">ショク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6133">厠<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="8062">觕<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15194">梀<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15629">淔<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17148">脨<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19661">㥀<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19802">㨁<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21205">䅇<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24904">啬<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26287">职<span class="small">ショク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="337">植<span class="small">ショク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="765">属<span class="small">ショク</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1146">殖<span class="small">ショク</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2592">粟<span class="small">ショク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3281">喞<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="3431">寔<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="3504">廁<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="3594">惻<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="11843">䐈<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13795">堲<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14482">崱<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14973">揤<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15697">湜<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16826">稄<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17276">萴<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20193">㰲<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22566">䟟<span class="small">ショク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="560">続<span class="small">ショク</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1145">飾<span class="small">ショク</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1147">触<span class="small">ショク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3287">嗇<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="4057">蜀<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="4463">軾<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="5900">稙<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="8689">鄎<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="9588">蒠<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="11227">戠<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15742">溭<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16793">禃<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17924">遈<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20378">㴧<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21820">䐚<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="7632">鉽<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="7633">銫<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12189">㮨<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15065">敱<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15066">敳<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15847">潩<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17657">誎<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17799">趗<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18806">㔄<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20091">㮩<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20601">㹄<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22364">䛤<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25066">嫱<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26504">蔷<span class="small">ショク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1450">嘱<span class="small">ショク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2593">蝕<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="5560">稷<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="5641">禝<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="9875">蝍<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="10412">瘜<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="11180">憟<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14211">嬂<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15266">樍<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18733">㒔<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20415">㵓<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22028">䔴<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22841">䤭<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="5421">薔<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="5820">餝<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="9672">薥<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12238">樴<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14229">嬙<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15901">濇<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17176">膱<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25645">餙<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25932">穑<span class="small">ショク</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2591">燭<span class="small">ショク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4994">謖<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="10622">瞩<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="11915">臅<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12097">㯰<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12874">歜<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15071">斀<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15078">斶<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20141">㯮<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20211">㱇<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20747">㻿<span class="small">ショク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="741">職<span class="small">ショク</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="742">織<span class="small">ショク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="5562">穡<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="9705">藚<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="9932">蟙<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="10083">襡<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15940">瀒<span class="small">ショク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="724">識<span class="small">ショク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="9290">軄<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="9945">蠋<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17044">繬<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17513">蠀<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21450">䉢<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24362">䭒<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="6315">觸<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="7002">鯽<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17597">襩<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22544">䟉<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22873">䥔<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23575">䳭<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24042">瀷<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25934">穯<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="6097">續<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="6169">屬<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="7830">鐲<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17401">蘵<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="5498">贖<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23113">䪅<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="7360">韣<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23362">䮷<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="5763">囑<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="7225">鸀<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14270">孎<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15988">灟<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15131">曯<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16273">爥<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="5177">矚<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="10102">䙱<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17526">蠾<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21641">䌵<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="7863">钃<span class="small">ショク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15556">浊<span class="small">ジョク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1451">辱<span class="small">ジョク</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1521">匿<span class="small">ジョク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19056">㙇<span class="small">ジョク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13089">傉<span class="small">ジョク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15709">湪<span class="small">ジョク</span></a></li>
                    <li class="others_kanji onyomi"><a href="4405">溽<span class="small">ジョク</span></a></li>
                    <li class="others_kanji onyomi"><a href="5399">蓐<span class="small">ジョク</span></a></li>
                    <li class="others_kanji onyomi"><a href="8687">鄏<span class="small">ジョク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13459">嗕<span class="small">ジョク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14161">媷<span class="small">ジョク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14184">嫟<span class="small">ジョク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14983">搙<span class="small">ジョク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19708">㥾<span class="small">ジョク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19752">㦺<span class="small">ジョク</span></a></li>
                    <li class="others_kanji onyomi"><a href="5056">褥<span class="small">ジョク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1178">濁<span class="small">ジョク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4791">縟<span class="small">ジョク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14254">嬺<span class="small">ジョク</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts33">
                <h3 class="ttl_while">しら</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="068">白<span class="small">しら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4506">驃<span class="small">しらかげ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5267">粲<span class="small">しらげよね</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="744">精<span class="small">しら（げる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/21494">䊒<span class="small">しら（げる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26278">精<span class="small">しら（げる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1442">焦<span class="small">じ（らす）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/20546">㸈<span class="small">じ（らす）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="2096">訃<span class="small">し（らせ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="187">知<span class="small">し（らせる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14915">报<span class="small">しら（せる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="809">報<span class="small">しら（せる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1625">劾<span class="small">しら（べる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="704">査<span class="small">しら（べる）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2145">按<span class="small">しら（べる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/15169">查<span class="small">しら（べる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="687">検<span class="small">しら（べる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="2040">詮<span class="small">しら（べる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="366">調<span class="small">しら（べる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1039">監<span class="small">しら（べる）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6224">檢<span class="small">しら（べる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4997">鞫<span class="small">しら（べる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5080">覈<span class="small">しら（べる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4076">虱<span class="small">しらみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4075">蝨<span class="small">しらみ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts34">
                <h3 class="ttl_while">しり</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="2028">尻<span class="small">しり</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19318">㞍<span class="small">しり</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="125">後<span class="small">しり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4307">臀<span class="small">しり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11918">臋<span class="small">しり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4749">紂<span class="small">しりがい</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5092">鞦<span class="small">しりがい</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2531">遁<span class="small">しりご（みする）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1056">却<span class="small">しりぞ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/18850">㕁<span class="small">しりぞ（く）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="768">退<span class="small">しりぞ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3035">卻<span class="small">しりぞ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3443">屏<span class="small">しりぞ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5512">逡<span class="small">しりぞ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6488">屛<span class="small">しりぞ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14639">幈<span class="small">しりぞ（く）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1469">斥<span class="small">しりぞ（ける）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1056">却<span class="small">しりぞ（ける）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/18822">㔘<span class="small">しりぞ（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/18850">㕁<span class="small">しりぞ（ける）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="768">退<span class="small">しりぞ（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3035">卻<span class="small">しりぞ（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3443">屏<span class="small">しりぞ（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11587">㡿<span class="small">しりぞ（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5483">貶<span class="small">しりぞ（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6488">屛<span class="small">しりぞ（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14639">幈<span class="small">しりぞ（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25340">摈<span class="small">しりぞ（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3736">擯<span class="small">しりぞ（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3752">黜<span class="small">しりぞ（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7829">鎸<span class="small">しりぞ（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3967">闢<span class="small">しりぞ（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4732">鐫<span class="small">しりぞ（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4212">肛<span class="small">しりのあな</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts35">
                <h3 class="ttl_while">しる</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1728">汁<span class="small">しる</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1762">津<span class="small">しる</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25519">浆<span class="small">しる</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="648">液<span class="small">しる</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25555">渖<span class="small">しる</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4320">漿<span class="small">しる</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4442">瀋<span class="small">しる</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="187">知<span class="small">し（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="514">察<span class="small">し（る）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="724">識<span class="small">し（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14607">币<span class="small">しるし</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="447">印<span class="small">しるし</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="401">表<span class="small">しるし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25209">帜<span class="small">しるし</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25376">标<span class="small">しるし</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1750">症<span class="small">しるし</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="10245">玺<span class="small">しるし</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="333">章<span class="small">しるし</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2620">瑞<span class="small">しるし</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1191">徴<span class="small">しるし</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="597">標<span class="small">しるし</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3496">幟<span class="small">しるし</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6435">徵<span class="small">しるし</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/15084">旘<span class="small">しるし</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2274">徽<span class="small">しるし</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="10244">壐<span class="small">しるし</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="498">験<span class="small">しるし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6742">騐<span class="small">しるし</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1712">璽<span class="small">しるし</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="8226">䜟<span class="small">しるし</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6353">驗<span class="small">しるし</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5016">讖<span class="small">しるし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14607">币<span class="small">しる（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="447">印<span class="small">しる（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="719">志<span class="small">しる（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="472">紀<span class="small">しる（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25376">标<span class="small">しる（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="104">記<span class="small">しる（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12400">欵<span class="small">しる（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1642">款<span class="small">しる（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="905">署<span class="small">しる（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1108">載<span class="small">しる（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="884">誌<span class="small">しる（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1905">銘<span class="small">しる（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4546">箚<span class="small">しる（す）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6407">署<span class="small">しる（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6531">劄<span class="small">しる（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12855">㱁<span class="small">しる（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="597">標<span class="small">しる（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="639">録<span class="small">しる（す）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6462">錄<span class="small">しる（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="724">識<span class="small">しる（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1875">譜<span class="small">しる（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25093">导<span class="small">しるべ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25376">标<span class="small">しるべ</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="597">標<span class="small">しるべ</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="780">導<span class="small">しるべ</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts36">
                <h3 class="ttl_while">しれ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1811">痴<span class="small">し（れる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6262">癡<span class="small">し（れる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1442">焦<span class="small">じ（れる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/20546">㸈<span class="small">じ（れる）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts37">
                <h3 class="ttl_while">しろ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="068">白<span class="small">しろ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="355">代<span class="small">しろ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="912">城<span class="small">しろ</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="068">白<span class="small">しろ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="9462">华<span class="small">しろ（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="758">素<span class="small">しろ（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1334">華<span class="small">しろ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/18868">㕖<span class="small">しろ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3918">晧<span class="small">しろ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5467">皎<span class="small">しろ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25830">皑<span class="small">しろ（い）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="5468">皓<span class="small">しろ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5470">皙<span class="small">しろ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="10467">賋<span class="small">しろ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5471">皚<span class="small">しろ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="9461">蕐<span class="small">しろ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2419">鵠<span class="small">しろ（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="278">銀<span class="small">しろがね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4725">鏐<span class="small">しろがね</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4730">鐐<span class="small">しろがね</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3488">帛<span class="small">しろぎぬ</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2408">縞<span class="small">しろぎぬ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3343">堊<span class="small">しろつち</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4426">潘<span class="small">しろみず</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts38">
                <h3 class="ttl_while">しわ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="kanjiy/16628">皱<span class="small">しわ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5600">皴<span class="small">しわ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5603">皺<span class="small">しわ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5067">襞<span class="small">しわ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3230">吝<span class="small">しわ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/18904">㖁<span class="small">しわ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3289">嗄<span class="small">しわが（れる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2222">咳<span class="small">しわぶき</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4995">謦<span class="small">しわぶき</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2222">咳<span class="small">しわぶ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/16628">皱<span class="small">しわ（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5603">皺<span class="small">しわ（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3720">撓<span class="small">しわ（る）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts39">
                <h3 class="ttl_while">しん</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="kanjiy/12996">卂<span class="small">シン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="165">心<span class="small">シン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="340">申<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12373">㐱<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12676">兂<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18677">㐰<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18879">㕥<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19336">㞥<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7413">囟<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12389">伈<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13644">圳<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14386">屾<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14904">扟<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15436">汛<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18182">阠<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21915">䒖<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24569">伩<span class="small">シン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="338">身<span class="small">シン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="543">臣<span class="small">シン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1453">伸<span class="small">シン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1454">辛<span class="small">シン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="2029">芯<span class="small">シン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2602">辰<span class="small">シン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3451">岑<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3542">忱<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4326">沁<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8636">邥<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12482">孞<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13238">吢<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13239">吣<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13248">吲<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14730">弞<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14912">抋<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15448">汵<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19040">㘰<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19621">㤈<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20026">㭄<span class="small">シン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="515">参<span class="small">シン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="2108">枕<span class="small">シン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3239">呻<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3671">抻<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10628">矤<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11305">抮<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12452">侁<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12704">罙<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13210">叁<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13983">妽<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15151">杺<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15154">枃<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20479">㶦<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24375">枔<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25090">审<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25970">籶<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26559">衬<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26937">进<span class="small">シン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="343">神<span class="small">シン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="542">信<span class="small">シン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1151">侵<span class="small">シン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1762">津<span class="small">シン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2598">矧<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3254">哂<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3548">怎<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8950">籸<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10132">珅<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11652">昚<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11653">昣<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11782">胗<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11783">胂<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12000">柛<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12484">侲<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12485">㑗<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13034">亲<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13068">侺<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16848">穼<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18771">㓎<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25289">挦<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25493">氠<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25530">浕<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26367">荩<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27724">𢘑<span class="small">シン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="342">真<span class="small">シン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="914">針<span class="small">シン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1148">浸<span class="small">シン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1153">振<span class="small">シン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1761">娠<span class="small">シン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1765">唇<span class="small">シン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2594">晋<span class="small">シン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2597">疹<span class="small">シン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2599">秦<span class="small">シン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2600">訊<span class="small">シン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3429">宸<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5029">袗<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5448">畛<span class="small">シン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6092">眞<span class="small">シン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6207">晉<span class="small">シン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6368">神<span class="small">シン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="9472">莘<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9473">茞<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9474">莀<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10147">珒<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10290">甡<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10533">眒<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10534">眕<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10653">砷<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11156">眘<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12682">兓<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13367">唚<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13731">埁<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13742">埐<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14304">宷<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14363">屒<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14453">峷<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14629">帪<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14735">弫<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15583">浾<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15586">涁<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15598">涔<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16874">笉<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17634">訙<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17874">軐<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18191">陙<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18924">㖘<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19169">㛙<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19171">㛛<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20046">㭡<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20488">㶳<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21085">䂦<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21086">䂧<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22318">䚱<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22740">䢻<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22750">䣅<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25392">桪<span class="small">シン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="339">進<span class="small">シン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="341">深<span class="small">シン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="544">清<span class="small">シン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1763">紳<span class="small">シン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="3919">晨<span class="small">シン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4226">脣<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5890">參<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8096">訠<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8097">訦<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8098">訫<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8732">酙<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9015">紾<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9281">聄<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11554">敐<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11555">敒<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11819">脤<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12064">梣<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12065">梫<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13211">叄<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15176">栕<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15190">桭<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15644">淰<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15648">淸<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15660">渗<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19121">㚞<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19979">㫳<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20189">㰮<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20254">㲀<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20270">㲔<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20357">㴆<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25002">堔<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25059">婶<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25555">渖<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26512">㕘<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26911">㟥<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26926">㡎<span class="small">シン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="040">森<span class="small">シン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1764">診<span class="small">シン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4461">軫<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7553">鈊<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8110">訷<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9303">臸<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9552">葚<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9554">葠<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9556">葴<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10038">裑<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10797">祲<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10944">竧<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11137">愖<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11820">祳<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12104">棽<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12483">㑴<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12687">兟<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13212">叅<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13801">堻<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14122">媇<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14315">寑<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16516">琗<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17561">裖<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17605">覙<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18004">鈂<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18007">鈏<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19200">㜄<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19939">㪸<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20867">㾕<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20873">㾛<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20995">䀼<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21281">䆣<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21478">䊁<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21866">䑐<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22465">䝩<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22636">䠴<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25405">椮<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25791">琎<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25891">硶<span class="small">シン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="163">新<span class="small">シン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1150">慎<span class="small">シン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1152">寝<span class="small">シン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="2030">腎<span class="small">シン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3292">嗔<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3763">斟<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4066">蜃<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4154">椹<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5398">蓁<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5590">罧<span class="small">シン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6088">愼<span class="small">シン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="7375">䪴<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7583">鉮<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8029">靕<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8135">詵<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9050">綅<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9555">蓡<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9837">蜄<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11426">搢<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14165">嫀<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14166">嫃<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14317">寖<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14993">搸<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15722">溍<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15745">溱<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16129">煁<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16433">獉<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17295">蒖<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17964">鄑<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20098">㮱<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20388">㴱<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22357">䛜<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22702">䢅<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24921">嗪<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25412">榇<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25413">䝲<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25819">瘆<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25893">碜<span class="small">シン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2595">榛<span class="small">シン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2596">槙<span class="small">シン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2601">賑<span class="small">シン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3134">僣<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4421">滲<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5405">蔘<span class="small">シン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5721">槇<span class="small">シン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="6117">寢<span class="small">シン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="9077">綝<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10200">瑧<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10201">瑨<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11879">䐜<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11880">甧<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13840">墋<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14540">嵾<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14648">幓<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15240">榗<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15364">殝<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16608">瘎<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17659">誛<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17663">誫<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19217">㜗<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19414">㠁<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19697">㥲<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19997">㬐<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20671">㺑<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21114">䃌<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22008">䔚<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22367">䛨<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22425">䜷<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22581">䟴<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23158">䪾<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25990">糁<span class="small">シン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1149">震<span class="small">シン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1452">審<span class="small">シン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1466">請<span class="small">シン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4429">潭<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4582">箴<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5167">瞋<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5416">蕈<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6875">䰠<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6898">魫<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7414">䪿<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7657">鋅<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7659">鋠<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7660">鋟<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8160">諗<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8707">鄩<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10813">禛<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10872">稹<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10931">䆮<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11480">撏<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12211">槮<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15845">潧<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18344">駗<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19229">㜤<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19231">㜦<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20417">㵕<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20827">㽦<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21246">䅸<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21387">䈜<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23463">䰼<span class="small">シン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="164">親<span class="small">シン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1154">薪<span class="small">シン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3133">僭<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4793">縉<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5632">臻<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6661">齓<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6729">駪<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7390">頣<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7473">䭀<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8177">諶<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8328">賮<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9105">縉<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9106">縝<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9673">薓<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9895">螓<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10066">襂<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10225">璡<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10424">瘮<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10734">磣<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11677">㬜<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12190">樼<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12239">樳<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15054">攳<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15119">曋<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15891">澵<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15900">濅<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16215">燅<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16218">燊<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16223">燖<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16552">璕<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17031">縥<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17683">諲<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19234">㜪<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21402">䈯<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22801">䤁<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23162">䫃<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23166">䫈<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24056">燂<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3764">齔<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4499">駸<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4712">鍼<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8527">轃<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8885">篸<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8979">糝<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9692">薽<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9693">藎<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13564">嚍<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14242">嬧<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14561">嶜<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15121">曑<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15914">濜<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16691">瞫<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17593">襑<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17691">謓<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18831">㔤<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22683">䡩<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4442">瀋<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6867">鬵<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6958">鮼<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7138">鵢<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7248">麎<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9922">蟫<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12662">儭<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14252">嬸<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15287">橬<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16558">璶<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17701">謲<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17772">贂<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18437">鯅<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20147">㯸<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20742">㻸<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21843">䐶<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22168">䗯<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23177">䫖<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25962">簮<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26047">鯓<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5007">譛<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7412">顖<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11736">曟<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13581">嚫<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14328">寴<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15944">瀙<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17382">藽<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20154">㰂<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21129">䃡<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21250">䅾<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22294">䚓<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4598">簪<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4728">鐔<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6847">鬒<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12308">櫬<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16260">爓<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16941">籈<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20158">㰉<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21142">䃱<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21691">䍼<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22704">䢈<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22883">䥠<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3830">鷆<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5006">譖<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5071">襯<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5496">贐<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5818">鷏<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6560">黮<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20464">㶒<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22814">䤐<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23579">䳲<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24044">灊<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6561">黰<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7206">鷐<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8217">讅<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8226">䜟<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10094">襳<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17616">覾<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21149">䃸<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7054">鱏<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7055">鱘<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8330">䞋<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23196">䫬<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23279">䭙<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23509">䲋<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5016">讖<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19297">㝲<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7077">鱵<span class="small">シン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6519">䯂<span class="small">シン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="041">人<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5805">儿<span class="small">ジン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1766">刃<span class="small">ジン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="5666">刄<span class="small">ジン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="915">仁<span class="small">ジン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2605">壬<span class="small">ジン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3070">仞<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3071">仭<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13602">囜<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19336">㞥<span class="small">ジン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="783">任<span class="small">ジン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1156">尽<span class="small">ジン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1767">迅<span class="small">ジン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="10954">㣼<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13047">伔<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14339">尘<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14383">屻<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14797">忈<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15142">朲<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19453">㠴<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20306">㲽<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25092">寻<span class="small">ジン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="543">臣<span class="small">ジン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1194">沈<span class="small">ジン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1850">忍<span class="small">ジン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1851">妊<span class="small">ジン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="10824">秂<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11757">肕<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14799">忎<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15147">杒<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15448">汵<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15460">沉<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16295">牣<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17204">芢<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6072">侭<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20479">㶦<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20554">㸒<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20965">䀔<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24287">䏕<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24375">枔<span class="small">ジン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="343">神<span class="small">ジン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1768">甚<span class="small">ジン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2607">荏<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3382">姙<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5041">衽<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8998">紉<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13068">侺<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14925">拰<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16576">瓭<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19636">㤛<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20841">㽸<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20966">䀕<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25529">浔<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25530">浕<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25909">祍<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26366">荨<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26367">荩<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26528">㖊<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27724">𢘑<span class="small">ジン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1155">陣<span class="small">ジン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2600">訊<span class="small">ジン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3557">恁<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5368">荵<span class="small">ジン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6368">神<span class="small">ジン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="8088">訒<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8479">軔<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9003">紝<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13731">埁<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14363">屒<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15179">栠<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15180">栣<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16072">烬<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16874">笉<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17239">莐<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17634">訙<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20490">㶵<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20750">㼉<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22740">䢻<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22750">䣅<span class="small">ジン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1509">陳<span class="small">ジン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="5040">袵<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11821">䏰<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15203">梕<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16822">秹<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17250">菍<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17878">軙<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17880">軠<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20189">㰮<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20595">㸾<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22330">䚾<span class="small">ジン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1157">尋<span class="small">ジン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2608">靱<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="2609">靭<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6123">棯<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7554">鈓<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8813">䇮<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9004">絍<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11844">腍<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18004">鈂<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18007">鈏<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19200">㜄<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20995">䀼<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21555">䋕<span class="small">ジン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="951">賃<span class="small">ジン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="2030">腎<span class="small">ジン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2606">稔<span class="small">ジン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4066">蜃<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4154">椹<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7342">韌<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7459">飪<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9837">蜄<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13820">塦<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14165">嫀<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16997">絼<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18416">魜<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20379">㴨<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22353">䛘<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22357">䛜<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22702">䢅<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24273">䄒<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25413">䝲<span class="small">ジン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="960">認<span class="small">ジン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2604">塵<span class="small">ジン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6030">盡<span class="small">ジン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15239">榐<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16608">瘎<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18032">銋<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20956">䀆<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4431">潯<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5271">糂<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5415">蕁<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5416">蕈<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7460">餁<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13537">噚<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15067">敶<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15261">樄<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19231">㜦<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21589">䋻<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23463">䰼<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="2603">儘<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7473">䭀<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8328">賮<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15054">攳<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16215">燅<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16552">璕<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22801">䤁<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23166">䫈<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7121">鵀<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9693">藎<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9697">薼<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14242">嬧<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14561">嶜<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15914">濜<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17593">襑<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24356">䭃<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4940">燼<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9933">蟳<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15287">橬<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16558">璶<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23177">䫖<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21250">䅾<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22704">䢈<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5496">贐<span class="small">ジン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7054">鱏<span class="small">ジン</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1200">殿<span class="small">しんがり</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1428">軸<span class="small">しんぎ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12222">榓<span class="small">じんこう</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4182">樒<span class="small">じんこう</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4183">櫁<span class="small">じんこう</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="8933">籡<span class="small">しんし</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1155">陣<span class="small">じんだて</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <p id="noDisplayMessage2" style="display:none;">※<span class="marker">「常用漢字」「人名用漢字」「その他の漢字」のいずれかにチェックをつけてください。</span></p>
            <p id="noDisplayMessage" style="display:none;">
                ※条件に該当する字がありません。<br>表示条件の漢字の種別「常用漢字」「人名用漢字」「その他の漢字」、または読みの種別の「全ての読み」「音読み」「訓読み」などを変更してください。</p>
            <div id="nodisplay_ads2">
                <aside>
                    <div class="ads_wrapin link_pc">

                        <!-- レスポンシブ個別 -->
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3664445671894613" data-ad-slot="3470994118" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        "
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
            </div>
            <!--link_pc-->
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
            </div>
            <!--link_sp-->
        </div>
        <!--content-->
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
                                <li><a href="kanjiy/12934" title="漢字「殺」のページ"><span class="rank">10</span><span class="jp">殺</span></a></li>
                            </ul>
                        </div>
                        <!--ChangeElem_Panel2-->
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
                        </div>
                        <!--ChangeElem_Panel2-->
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
                        </div>
                        <!--ChangeElem_Panel2-->
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
                    </div>
                    <!--togglebox-->
                </div>
                <!--side_box-->

                <!--side_box-->

                <!--side_box-->
            </div>
            <!--sidebar-->
        </aside>
    </div>
    <script>
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