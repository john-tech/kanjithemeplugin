<?php
/*
 * Template Name: Yomi14
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
            <h1 class="ttl_main">音訓検索「せ」</h1>
            <aside>
                <div class="ads_wrapin link_pc">

                    <!-- 漢字辞典レスポンシブ１ -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3664445671894613" data-ad-slot="5169795341" data-ad-format="horizontal" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </aside>
            <p>「せ」から始まる読み方をする漢字です。</p>
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
                        <option value="#" selected>せ</option>
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
                    <li id="parts1_menu"><a href="#parts1">せ</a></li>
                    <li id="parts2_menu"><a href="#parts2">せい</a></li>
                    <li id="parts3_menu"><a href="#parts3">せお</a></li>
                    <li id="parts4_menu"><a href="#parts4">せか</a></li>
                    <li id="parts5_menu"><a href="#parts5">せき</a></li>
                    <li id="parts6_menu"><a href="#parts6">せく</a></li>
                    <li id="parts7_menu"><a href="#parts7">せち</a></li>
                    <li id="parts8_menu"><a href="#parts8">せつ</a></li>
                    <li id="parts9_menu"><a href="#parts9">せに</a></li>
                    <li id="parts10_menu"><a href="#parts10">せは</a></li>
                    <li id="parts11_menu"><a href="#parts11">せほ</a></li>
                    <li id="parts12_menu"><a href="#parts12">せま</a></li>
                    <li id="parts13_menu"><a href="#parts13">せみ</a></li>
                    <li id="parts14_menu"><a href="#parts14">せめ</a></li>
                    <li id="parts15_menu"><a href="#parts15">せり</a></li>
                    <li id="parts16_menu"><a href="#parts16">せる</a></li>
                    <li id="parts17_menu"><a href="#parts17">せろ</a></li>
                    <li id="parts18_menu"><a href="#parts18">せわ</a></li>
                    <li id="parts19_menu"><a href="#parts19">せん</a></li>
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
                <h3 class="ttl_while">せ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo onyomi"><a class="color1" href="344">世<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3209">丗<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24392">㔺<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6595">卋<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13187">厏<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13159">势<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14916">抧<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21071">䂘<span class="small">セ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1423">施<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12861">㔟<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13343">哸<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15346">欼<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16516">琗<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21097">䂳<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24903">啫<span class="small">セ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="748">勢<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15381">毸<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16792">祽<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21108">䃀<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22223">䘹<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11453">摣<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13477">嗺<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17660">誜<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19331">㞜<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19845">㨹<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21828">䐤<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13509">嘬<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17169">膗<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19293">㝮<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22011">䔝<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22028">䔴<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18060">錊<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18812">㔍<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22929">䦤<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23262">䬽<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17591">襊<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21172">䄟<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22051">䕓<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22391">䜃<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23418">䯿<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16249">爂<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21519">䊫<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23651">䵘<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18269">韢<span class="small">セ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22316">䚭<span class="small">セ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10317">㽗<span class="small">せ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24548">亩<span class="small">せ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="965">背<span class="small">せ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5955">畆<span class="small">せ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10315">畒<span class="small">せ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1775">畝<span class="small">せ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2035">脊<span class="small">せ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10316">畞<span class="small">せ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10318">畮<span class="small">せ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1463">瀬<span class="small">せ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6423">瀨<span class="small">せ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1159">是<span class="small">ゼ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16660">睉<span class="small">ゼ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17158">腏<span class="small">ゼ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24903">啫<span class="small">ゼ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13135">凗<span class="small">ゼ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13417">喍<span class="small">ゼ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25649">煶<span class="small">ゼ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20895">㾹<span class="small">ゼ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18106">鏏<span class="small">ゼ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts2">
                <h3 class="ttl_while">せい</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo onyomi"><a class="color1" href="1162">井<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="038">正<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="043">生<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="344">世<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2076">丼<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3209">丗<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12887">亗<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13633">圣<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24392">㔺<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27730">𠙺<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="169">西<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="546">成<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6595">卋<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11029">忕<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18601">齐<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24239">㱏<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25106">岁<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27737">𤯔<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="171">声<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7914">阱<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7915">㘫<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12416">佂<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13174">卤<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13650">圾<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13951">妌<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14289">宑<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15442">汫<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16709">矵<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27739">𠤵<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="044">青<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="707">妻<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="745">性<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="747">制<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1160">征<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1161">姓<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1776">斉<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6655">亝<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8028">靑<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10104">卥<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11050">怔<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13159">势<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13903">夝<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13988">姃<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15443">汬<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15502">泩<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15507">泲<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16361">狌<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18770">㓌<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23803">侪<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23809">剂<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="170">星<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="541">省<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="746">政<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="912">城<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="926">洗<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1464">牲<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4349">洒<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4657">砌<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5614">穽<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8575">迣<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11107">恓<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11656">甠<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11784">胜<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12896">殅<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13719">垩<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14773">徆<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15495">泚<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16027">炡<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20969">䀙<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24214">㢴<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24405">济<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24483">荠<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24803">哜<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25410">挤<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25775">狰<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1109">剤<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1778">逝<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2033">凄<span class="small">セイ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2443">栖<span class="small">セイ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2628">脆<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3110">倩<span class="small">セイ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="3907">晟<span class="small">セイ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6654">斊<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8659">郕<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9477">荿<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10535">眚<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11351">挩<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11808">脃<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12035">栬<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12333">凊<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12649">㑪<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12861">㔟<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13347">哾<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13721">垶<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14031">娍<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14300">宬<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14365">屖<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14454">峸<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15400">氥<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15600">涗<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16387">狾<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16648">眐<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19255">㝂<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20046">㭡<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20588">㸷<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23970">帨<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25290">捝<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25532">涚<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26311">脐<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27752">𠝁<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="544">清<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="740">情<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="879">済<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="921">盛<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3582">悽<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3782">旌<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3920">晢<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4379">淒<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5154">眥<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5155">眦<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5379">菁<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5941">萋<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6537">晣<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7536">釮<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8667">郪<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9694">萕<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10156">珹<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10671">硒<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11606">旍<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11678">晠<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12099">捿<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12541">偗<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12789">剬<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12937">殸<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13623">圊<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13751">埥<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14087">婙<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14309">寈<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14955">掅<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15206">梷<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15648">淸<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16406">猘<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16407">猙<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16621">皉<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16658">睁<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17107">聇<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17954">郬<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20360">㴉<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21066">䂑<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21546">䋊<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23903">啨<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23930">埶<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23949">婧<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25409">㨈<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="172">晴<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="749">税<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1465">婿<span class="small">セイ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2444">犀<span class="small">セイ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2567">甥<span class="small">セイ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2626">棲<span class="small">セイ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2629">貰<span class="small">セイ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="3592">惺<span class="small">セイ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3695">掣<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3847">毳<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5116">猩<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6137">壻<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8295">貹<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8959">粞<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9068">紪<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9559">葏<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10039">裞<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10848">稅<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10944">竧<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11846">脺<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12886">嵗<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15410">氰<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15672">渹<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15673">渻<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16126">焺<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16852">窚<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17156">腈<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17158">腏<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18797">㓹<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18958">㗂<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19188">㛳<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19584">㣏<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19986">㫼<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20777">㼩<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20814">㽒<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20992">䀸<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20998">䀿<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20999">䁀<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26248">晴<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26289">聓<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26330">舾<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26544">蛴<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="748">勢<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="919">誠<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="920">聖<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1106">歳<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2576">鉦<span class="small">セイ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2627">靖<span class="small">セイ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4058">蛻<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4239">腥<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4535">筬<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4536">筮<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5160">睛<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5922">彁<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7584">鉎<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10188">瑆<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10386">痸<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10570">睜<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10945">竫<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11697">暒<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12885">歲<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14788">徰<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16138">煋<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16521">琞<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16743">碃<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16998">絾<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17562">裚<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17620">觢<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17822">跩<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19068">㙚<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20074">㮐<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20782">㼮<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21361">䇽<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26270">靖<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26846">跻<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="545">静<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="743">製<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="744">精<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1777">誓<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3044">聟<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4072">蜻<span class="small">セイ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5831">齊<span class="small">セイ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="8030">靘<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8837">箐<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9067">緀<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10398">瘈<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10582">睲<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14859">愸<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15000">摖<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15789">漈<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17116">聙<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17338">蔱<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17623">觪<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18035">銐<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18801">㓾<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18991">㗫<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19845">㨹<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20521">㷣<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20787">㼳<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20888">㾪<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21116">䃏<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21494">䊒<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21745">䎺<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21748">䎽<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22475">䝴<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23020">䨖<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25563">霁<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26278">精<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1466">請<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3301">嘶<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3722">撕<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7661">鋮<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8032">靚<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8307">賫<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8857">箵<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8858">篂<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10413">瘛<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13509">嘬<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13862">墭<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14879">憕<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18041">銴<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19292">㝭<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19854">㩊<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20608">㹌<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20893">㾷<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21025">䁞<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21394">䈣<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22028">䔴<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22143">䗌<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22593">䠁<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22845">䤱<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23882">䝼<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26162">齑<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="345">整<span class="small">セイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2034">醒<span class="small">セイ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2577">錆<span class="small">セイ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3139">儕<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3306">噬<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4187">橇<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6062">劑<span class="small">セイ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6347">靜<span class="small">セイ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6913">鮏<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10422">瘵<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10878">穄<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11905">膬<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12241">樨<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15882">澨<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16760">磜<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18226">霋<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18474">鴊<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18812">㔍<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20121">㯔<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20122">㯕<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21826">䐡<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22283">䚇<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22728">䢪<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23026">䨝<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23082">䩢<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23165">䫆<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23262">䬽<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23265">䭁<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3732">擠<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5434">薺<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5975">濟<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6281">聲<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6734">騂<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6938">鮆<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7585">鍟<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7970">隮<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8308">賷<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11199">懠<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11654">曐<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12658">儬<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13563">嚌<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15293">檅<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16860">竁<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17627">觲<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17929">遾<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18175">閷<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20803">㽄<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21172">䄟<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21755">䏅<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22051">䕓<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23133">䪠<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23698">䶒<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23699">䶓<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25600">濪<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27735">𨲢<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4314">臍<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5491">贅<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6624">鼪<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6657">齌<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7490">餳<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8530">轊<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8906">簭<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11013">懘<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11655">皨<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15312">櫅<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16561">璾<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19874">㩨<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19875">㩩<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20544">㸄<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22620">䠠<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24248">㵾<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2581">鯖<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2585">瀞<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5321">韲<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6660">䪡<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6986">鯯<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6987">䱥<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7167">鶄<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10449">癠<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10893">穧<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16249">爂<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18106">鏏<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18513">鶈<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21174">䄢<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21670">䍤<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23486">䱨<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27437">䪢<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6914">鯹<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7807">鏸<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9951">蠐<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17197">艩<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18603">齛<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20835">㽮<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23134">䪣<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3949">齎<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4294">躋<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6632">鼱<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22411">䜞<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3996">霽<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6659">虀<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7034">鰶<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18140">鑇<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18269">韢<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22696">䡺<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5320">齏<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18597">鼶<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6578">䵻<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22316">䚭<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23365">䮺<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23433">䰏<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6939">鱭<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18568">麡<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24365">䭨<span class="small">セイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23720">䶩<span class="small">セイ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="965">背<span class="small">せい</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2035">脊<span class="small">せい</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="27828">𡼞<span class="small">せい</span></a></li>
                    <li class="others_kanji onyomi"><a href="9392">芮<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24007">汭<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11968">枘<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2628">脆<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4071">蚋<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11808">脃<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13360">唑<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16876">笍<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19806">㨅<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20588">㸷<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21340">䇤<span class="small">ゼイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="749">税<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3847">毳<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10848">稅<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18005">鈉<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4058">蛻<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4536">筮<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6495">蜹<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17443">蜕<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17620">觢<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17822">跩<span class="small">ゼイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="551">説<span class="small">ゼイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1777">誓<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8146">說<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18041">銴<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22845">䤱<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3306">噬<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4187">橇<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22728">䢪<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17929">遾<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5491">贅<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8906">簭<span class="small">ゼイ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6931">鮬<span class="small">せいご</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts3">
                <h3 class="ttl_while">せお</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="5059">襁<span class="small">せおいおび</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6505">繈<span class="small">せおいおび</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4809">繦<span class="small">せおいおび</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts4">
                <h3 class="ttl_while">せか</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="3107">伜<span class="small">せがれ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3581">忰<span class="small">せがれ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3106">倅<span class="small">せがれ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3580">悴<span class="small">せがれ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8465">躮<span class="small">せがれ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts5">
                <h3 class="ttl_while">せき</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo onyomi"><a class="color1" href="047">夕<span class="small">セキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="893">尺<span class="small">セキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="046">石<span class="small">セキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1469">斥<span class="small">セキ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2630">汐<span class="small">セキ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="24266">䂖<span class="small">セキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="045">赤<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14910">扸<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16004">灻<span class="small">セキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="314">昔<span class="small">セキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="727">舎<span class="small">セキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1115">刺<span class="small">セキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1176">拓<span class="small">セキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1779">析<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4900">炙<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6031">舍<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10638">矽<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10902">穸<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13673">坧<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19114">㚖<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20030">㭊<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11587">㡿<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13123">冟<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16044">炻<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20817">㽚<span class="small">セキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="528">借<span class="small">セキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="547">席<span class="small">セキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="892">射<span class="small">セキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1467">隻<span class="small">セキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2035">脊<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5506">迹<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9780">蚇<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10788">祏<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13194">厝<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13332">哧<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14944">捇<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15178">栜<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16816">积<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17237">莋<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21191">䄷<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21766">䏑<span class="small">セキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="750">責<span class="small">セキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1122">釈<span class="small">セキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1123">寂<span class="small">セキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1468">惜<span class="small">セキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2036">戚<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4382">淅<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9510">菥<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13385">唽<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14691">庴<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14783">徣<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16086">烾<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16399">猎<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17148">脨<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18002">釸<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19181">㛫<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19183">㛭<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19279">㝜<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20348">㳻<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20858">㾊<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22116">䖨<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3921">晰<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4257">跖<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6536">晳<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9312">舃<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9313">舄<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11847">腊<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16106">焟<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16115">焬<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19984">㫺<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20232">㱤<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22507">䞠<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22638">䠶<span class="small">セキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1163">跡<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3192">勣<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5046">裼<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5396">蓆<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5470">皙<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5946">鉐<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10571">睗<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13094">傶<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13805">塉<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14157">媳<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14532">嵴<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21112">䃊<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21319">䇎<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21820">䐚<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22222">䘸<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22580">䟱<span class="small">セキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="777">適<span class="small">セキ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2631">碩<span class="small">セキ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4070">蜥<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6267">碵<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9069">緆<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9264">耤<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10993">慽<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11449">摭<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11882">膌<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13841">墌<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14189">嫧<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15785">漃<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17447">蜤<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17607">覞<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20089">㮦<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20673">㺓<span class="small">セキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1630">潟<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4173">槭<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5240">瘠<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8348">趞<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8404">踖<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10992">慼<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13933">奭<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15266">樍<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16200">熫<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16451">獡<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17351">蕮<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21840">䐱<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25596">澙<span class="small">セキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="548">積<span class="small">セキ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2477">錫<span class="small">セキ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4673">磧<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10067">襀<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10735">磩<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14226">嬕<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16219">燋<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23024">䨛<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23382">䯔<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23541">䲽<span class="small">セキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="751">績<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4098">螫<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4280">蹐<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5432">藉<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10747">磶<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12279">檡<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17499">蟅<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20445">㵶<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22165">䗩<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22773">䣢<span class="small">セキ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2496">蹟<span class="small">セキ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4282">蹙<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4283">蹠<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6625">鼫<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6837">鬄<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8426">䠞<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21049">䁺<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22288">䚍<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22540">䟄<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23033">䨥<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23389">䯜<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7786">鏚<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22291">䚐<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25219">廭<span class="small">セキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1470">籍<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3765">齣<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6336">釋<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7002">鯽<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8768">醳<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9291">聻<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10090">襫<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23575">䳭<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3829">鶺<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7041">鰿<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18590">鼜<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17864">躤<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23675">䵱<span class="small">セキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18749">㒪<span class="small">セキ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2222">咳<span class="small">せき</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2183">堰<span class="small">せき</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3280">喘<span class="small">せき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18198">隁<span class="small">せき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4532">筵<span class="small">せき</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="463">関<span class="small">せき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3297">嗽<span class="small">せき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7876">闗<span class="small">せき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5885">關<span class="small">せき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4995">謦<span class="small">せきばら（い）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts6">
                <h3 class="ttl_while">せく</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="3772">齪<span class="small">セク</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10959">㤂<span class="small">せ（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="269">急<span class="small">せ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2222">咳<span class="small">せ（く）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2183">堰<span class="small">せ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3280">喘<span class="small">せ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18198">隁<span class="small">せ（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2009">塞<span class="small">せ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3297">嗽<span class="small">せ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4266">跼<span class="small">せぐくま（る）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts7">
                <h3 class="ttl_while">せち</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="6020">卩<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13175">卪<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14335">尐<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27762">𠬝<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26340">节<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12417">伳<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13252">吷<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15464">沏<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13278">呭<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18872">㕞<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20224">㱜<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20321">㳐<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20564">㸞<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16036">炪<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16719">砓<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18701">㑜<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18905">㖂<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13347">哾<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19255">㝂<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21065">䂐<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21947">䓆<span class="small">セチ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="752">設<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12542">偰<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13376">唰<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14062">娺<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20352">㳿<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21792">䏳<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21974">䓭<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22114">䖦<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22560">䟙<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14142">媟<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14838">惁<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15214">棳<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20992">䀸<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21703">䎈<span class="small">セチ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="549">節<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13097">僁<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17980">酫<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18799">㓼<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19607">㣯<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19821">㨝<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21361">䇽<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23246">䬦<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15000">摖<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17338">蔱<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18805">㔃<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18991">㗫<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19845">㨹<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20397">㴽<span class="small">セチ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6404">節<span class="small">セチ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="21390">䈟<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17989">醛<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23082">䩢<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23265">䭁<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17102">耫<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18175">閷<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21505">䊝<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22051">䕓<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23170">䫎<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24328">䙝<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15041">擳<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18813">㔎<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21903">䒆<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23976">幯<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24217">㦢<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21141">䃰<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17124">聺<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18603">齛<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22902">䥷<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23433">䰏<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23679">䵵<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17525">蠽<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17527">蠿<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23721">䶪<span class="small">セチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18789">㓭<span class="small">ゼチ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="754">絶<span class="small">ゼチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9033">絕<span class="small">ゼチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20936">㿱<span class="small">ゼチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3650">截<span class="small">ゼチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15040">擮<span class="small">ゼチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23472">䱑<span class="small">ゼチ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts8">
                <h3 class="ttl_while">せつ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="6020">卩<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18848">㔾<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13175">卪<span class="small">セツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="174">切<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14335">尐<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27762">𠬝<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26340">节<span class="small">セツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="755">舌<span class="small">セツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="550">折<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12417">伳<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13252">吷<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14393">岊<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15464">沏<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25805">疖<span class="small">セツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1781">拙<span class="small">セツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2012">刹<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4337">泄<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6698">乴<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12893">歽<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13278">呭<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18872">㕞<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20564">㸞<span class="small">セツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1386">契<span class="small">セツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1780">窃<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2177">洩<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11981">枻<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12759">剎<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15168">柣<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16036">炪<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16719">砓<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18701">㑜<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18905">㖂<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19324">㞕<span class="small">セツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="511">殺<span class="small">セツ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2632">屑<span class="small">セツ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4370">浙<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11289">㪿<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11982">栧<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13347">哾<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16599">疶<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19255">㝂<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21065">䂐<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21947">䓆<span class="small">セツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="173">雪<span class="small">セツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="752">設<span class="small">セツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="753">接<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3268">啜<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3920">晢<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4758">紲<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6537">晣<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10823">卨<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12067">梲<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12542">偰<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12934">殺<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13376">唰<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14062">娺<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15207">棁<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15608">涰<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15632">淛<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18789">㓭<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20352">㳿<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21792">䏳<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22114">䖦<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22560">䟙<span class="small">セツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="754">絶<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3695">掣<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4135">椄<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4397">渫<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4764">絏<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6074">凖<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9033">絕<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9558">莭<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9821">蛥<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10822">禼<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11404">揲<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11405">揳<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14142">媟<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15214">棳<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16995">絬<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20936">㿱<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20992">䀸<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21703">䎈<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24552">亵<span class="small">セツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="549">節<span class="small">セツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="732">準<span class="small">セツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1471">摂<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4151">楔<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12145">楶<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12146">㮞<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13097">僁<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17980">酫<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18799">㓼<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19607">㣯<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19821">㨝<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20385">㴮<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20729">㻡<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21361">䇽<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23246">䬦<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25336">摄<span class="small">セツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="551">説<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3650">截<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7289">靾<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7377">䪼<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8146">說<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8395">踅<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9619">蔎<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10709">碟<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12191">榍<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18805">㔃<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18991">㗫<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19489">㡜<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19845">㨹<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20397">㴽<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4783">緤<span class="small">セツ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6404">節<span class="small">セツ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="9650">蕝<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10724">碿<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11753">暬<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12201">槷<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21390">䈟<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5426">薛<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8549">辥<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8976">糏<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11372">擑<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17989">醛<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23082">䩢<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23265">䭁<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5062">褻<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14583">嶻<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15040">擮<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18175">閷<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21505">䊝<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22056">䕙<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23170">䫎<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24328">䙝<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14585">巀<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15041">擳<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18813">㔎<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21903">䒆<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23472">䱑<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23976">幯<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24217">㦢<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7993">䨮<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12346">歠<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20545">㸅<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9952">蠘<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10451">癤<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17124">聺<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18603">齛<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22182">䘁<span class="small">セツ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6191">攝<span class="small">セツ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="9958">蠞<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13589">嚽<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18607">齥<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2633">鱈<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6038">竊<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17862">躠<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23433">䰏<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4740">鑷<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23520">䲙<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23679">䵵<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17525">蠽<span class="small">セツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17527">蠿<span class="small">セツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="755">舌<span class="small">ゼツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24049">焫<span class="small">ゼツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="754">絶<span class="small">ゼツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9033">絕<span class="small">ゼツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11406">㨎<span class="small">ゼツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15026">撧<span class="small">ゼツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24059">爇<span class="small">ゼツ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts9">
                <h3 class="ttl_while">せに</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="24218">㦮<span class="small">ぜに</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="756">銭<span class="small">ぜに</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1882">幣<span class="small">ぜに</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6174">幤<span class="small">ぜに</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5949">錢<span class="small">ぜに</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts10">
                <h3 class="ttl_while">せは</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1069">狭<span class="small">せば（まる）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2448">窄<span class="small">せば（まる）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6252">狹<span class="small">せば（まる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1069">狭<span class="small">せば（める）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6252">狹<span class="small">せば（める）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts11">
                <h3 class="ttl_while">せほ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="2063">椎<span class="small">せぼね</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4243">膂<span class="small">せぼね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11890">膐<span class="small">せぼね</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts12">
                <h3 class="ttl_while">せま</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="5181">阨<span class="small">せま（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7919">阸<span class="small">せま（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1069">狭<span class="small">せま（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5183">陋<span class="small">せま（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18190">陕<span class="small">せま（い）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2448">窄<span class="small">せま（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5185">陜<span class="small">せま（い）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6252">狹<span class="small">せま（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4393">湫<span class="small">せま（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5195">隘<span class="small">せま（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5053">褊<span class="small">せま（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5618">窘<span class="small">せ（まる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1229">迫<span class="small">せま（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="8578">廹<span class="small">せま（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1484">促<span class="small">せま（る）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="2013">拶<span class="small">せま（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3681">拮<span class="small">せま（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5520">逎<span class="small">せま（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2860">逼<span class="small">せま（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5519">遒<span class="small">せま（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1230">薄<span class="small">せま（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5533">遽<span class="small">せま（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4282">蹙<span class="small">せま（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8426">䠞<span class="small">せま（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2870">瀕<span class="small">せま（る）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts13">
                <h3 class="ttl_while">せみ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="4073">蜩<span class="small">せみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2643">蝉<span class="small">せみ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6459">蟬<span class="small">せみ</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts14">
                <h3 class="ttl_while">せめ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="6860">䦧<span class="small">せめ（ぐ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5019">鬩<span class="small">せめ（ぐ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6584">鼙<span class="small">せめつづみ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1097">攻<span class="small">せ（める）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="750">責<span class="small">せ（める）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4954">訶<span class="small">せ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4962">誅<span class="small">せ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4969">誚<span class="small">せ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4999">謫<span class="small">せ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5004">譏<span class="small">せ（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1446">譲<span class="small">せ（める）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5011">譴<span class="small">せ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8220">讁<span class="small">せ（める）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6319">讓<span class="small">せ（める）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts15">
                <h3 class="ttl_while">せり</h3>
                <ul class="search_parts yomi_parts">
                    <li class="jimmei kunyomi"><a class="color2" href="2333">芹<span class="small">せり</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="21946">䓅<span class="small">せり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8991">粜<span class="small">せり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5277">糶<span class="small">せり</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="068">白<span class="small">せりふ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts16">
                <h3 class="ttl_while">せる</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1229">迫<span class="small">せ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="8578">廹<span class="small">せ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25943">竞<span class="small">せ（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="484">競<span class="small">せ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5663">竸<span class="small">せ（る）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts17">
                <h3 class="ttl_while">せろ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1593">零<span class="small">ゼロ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="18230">霗<span class="small">ゼロ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts18">
                <h3 class="ttl_while">せわ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1271">忙<span class="small">せわ（しい）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts19">
                <h3 class="ttl_while">せん</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo onyomi"><a class="color1" href="025">山<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="048">千<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="050">川<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5712">巛<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13182">厃<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1165">占<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1784">仙<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3072">仟<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3168">刋<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12391">㒰<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14378">屳<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="25259">戋<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="049">先<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="346">全<span class="small">セン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2391">亘<span class="small">セン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2634">尖<span class="small">セン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2640">舛<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5178">阡<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9373">芊<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11276">扦<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13227">吅<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13642">圱<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13643">圲<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13938">奷<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13943">奾<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14800">忏<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15427">汌<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15434">汘<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17934">邖<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22736">䢴<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24218">㦮<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1984">串<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3227">吮<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5322">芟<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8609">㳄<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8618">迁<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10114">玔<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11947">杄<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12421">佔<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12776">刬<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12960">㔯<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13052">伭<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13959">妗<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14911">抁<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15396">氙<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18184">阭<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18623">冝<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19110">㚒<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24046">灷<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="25434">歼<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="25491">氚<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="2641">苫<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3646">戔<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4342">沾<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5212">疝<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10828">秈<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11052">怗<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12453">佺<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12454">侟<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12546">㑒<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12713">冼<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12714">冿<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13209">叀<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13995">姍<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17214">苮<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19137">㚲<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19745">㦰<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20223">㱛<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20963">䀒<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="25039">姗<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="25771">狝<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="27362">㹪<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="177">前<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="554">浅<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="922">専<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="923">宣<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="924">染<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="925">泉<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="926">洗<span class="small">セン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2638">穿<span class="small">セン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2642">茜<span class="small">セン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4349">洒<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5347">荐<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8619">拪<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8951">籼<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9254">耑<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9447">荃<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11053">㤐<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11328">拴<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14021">姺<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14024">姾<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14275">孨<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14431">峑<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14829">恮<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14895">战<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15160">枮<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15372">毡<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15520">洊<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15538">洤<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16043">炶<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16303">牮<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16376">狦<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16589">畓<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18190">陕<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19780">㧥<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21189">䄳<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22265">䙲<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22743">䢾<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="25088">孪<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="25289">挦<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="26942">选<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1164">扇<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1782">栓<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="2636">栴<span class="small">セン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2648">閃<span class="small">セン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3110">倩<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3778">旃<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4117">栫<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4376">涎<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5186">陝<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5746">舩<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7980">隽<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8235">谸<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9448">荈<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10360">痁<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11347">挻<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12513">俴<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12763">歬<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12768">剡<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12775">剗<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12970">毨<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13741">埏<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15598">涔<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16048">烇<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16052">烍<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16309">牷<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16493">珔<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16495">珗<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17553">袩<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17874">軐<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19030">㘣<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19600">㣣<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19898">㪇<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20045">㭠<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20337">㳬<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20338">㳭<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20854">㾆<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20975">䀡<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21333">䇝<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23902">唌<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="26866">軕<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="175">船<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1787">旋<span class="small">セン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2646">釧<span class="small">セン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3180">剪<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4520">笘<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5224">痊<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5978">淺<span class="small">セン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6165">專<span class="small">セン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="7533">釤<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10157">琁<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11373">掞<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11822">脧<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11823">脠<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12764">偂<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14632">帴<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14844">惗<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15138">朘<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15198">梋<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16084">烻<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16728">硂<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17558">袸<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17783">赻<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19601">㣤<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19904">㪎<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19952">㫋<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20270">㲔<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20654">㹽<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20860">㾌<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20982">䀬<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22966">䧖<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="25944">笺<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="26478">釺<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="27616">䄽<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="27713">𥒎<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="927">善<span class="small">セン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2635">揃<span class="small">セン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3280">喘<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3445">孱<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3593">愃<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4527">筌<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4528">筅<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4882">牋<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6235">湶<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7454">飦<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8375">跈<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8838">䇳<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9034">絟<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9304">臶<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9559">葏<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9560">葥<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10979">惉<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11407">揎<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11698">晱<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12100">棈<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12572">傓<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13624">圌<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13803">堾<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14125">媊<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14136">媗<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15209">棎<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15669">渲<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15692">湔<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15718">湺<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16417">猭<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16731">硟<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16993">絤<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17288">葲<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19196">㛽<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19395">㟫<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19478">㡐<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19570">㢾<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20996">䀽<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21282">䆤<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22216">䘰<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22568">䟢<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23244">䬤<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23404">䯭<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24400">䙴<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24911">啴<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="25058">婵<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="25559">溅<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="552">戦<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1786">践<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1789">禅<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2037">煎<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2038">羨<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2039">腺<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2040">詮<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="2645">賎<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3064">亶<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3128">僉<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3437">尠<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4263">跣<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4578">雋<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8136">詹<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8388">跧<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8499">輇<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8601">遄<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8839">㮍<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9040">綖<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9050">綅<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9589">蒨<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10043">䙁<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10044">裧<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10189">瑄<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10572">睒<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10691">碊<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11428">搧<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11429">㨛<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11863">腨<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12797">剷<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12800">剸<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12869">歂<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14343">尟<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14986">搟<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15221">椯<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15225">椾<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16144">煔<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16536">瑏<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16537">瑐<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16538">瑔<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16626">皘<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17299">蒝<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17441">蜁<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18034">銏<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20395">㴸<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20517">㷙<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22300">䚚<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22915">䦓<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24393">㪜<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="25401">椫<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="27096">酰<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="756">銭<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1790">漸<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2041">箋<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="2637">煽<span class="small">セン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2647">銑<span class="small">セン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3129">僊<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3134">僣<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3350">塹<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3716">摶<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4698">銓<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4699">銛<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4781">綫<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7431">颭<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7481">䬻<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8699">鄟<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8837">箐<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9070">綪<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9338">䑶<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9590">蔳<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9620">蔪<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11229">戩<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11230">戬<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11910">䐪<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12036">㮵<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12615">僐<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12616">僎<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12617">僝<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13830">塼<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14178">嫙<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14188">嫥<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14538">嵼<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14998">摌<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15012">摲<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15240">榗<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15811">漩<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16180">熌<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17332">蔙<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17765">賗<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18721">㒄<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18841">㔵<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19224">㜞<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19408">㟻<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19713">㦃<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19841">㨵<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20791">㼷<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21713">䎒<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21999">䔐<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22135">䗃<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22976">䧠<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23618">䴮<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24088">禒<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="25896">碹<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="26844">跹<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="176">線<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="553">選<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1472">潜<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1788">遷<span class="small">セン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2452">撰<span class="small">セン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2639">箭<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="2643">蝉<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="2644">賤<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3410">嬋<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4176">槧<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4428">潺<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5609">翦<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6007">槫<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6107">踐<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7364">韯<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7645">銽<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7660">鋟<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7662">鋋<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8162">諓<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8708">鄯<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8859">篅<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8860">箲<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10214">璇<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11480">撏<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11895">膞<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12591">僲<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12612">僢<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12639">儃<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13518">嘽<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13851">墠<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13852">墡<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14203">嫸<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14558">嶘<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14654">幝<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15115">暶<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15850">潬<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15857">潹<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16545">瑼<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16582">甉<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16967">糋<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17090">翧<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17463">蝖<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17474">蝽<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17608">覢<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17900">輤<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18047">鋑<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18809">㔊<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18870">㕙<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19228">㜣<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19722">㦏<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19847">㨻<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19854">㩊<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20106">㯀<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20111">㯆<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20608">㹌<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20677">㺗<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21837">䐮<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23022">䨘<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="25425">閳<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="25897">磗<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1783">薦<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2042">膳<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3133">僭<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3727">擅<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3931">暹<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4436">澹<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4674">磚<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4876">甎<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5949">錢<span class="small">セン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6182">戰<span class="small">セン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6509">篡<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7057">䱇<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7435">颴<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7699">錟<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8411">踳<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8414">踹<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8522">輲<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9674">薝<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10425">㿅<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10598">䁢<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10948">竱<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11190">憸<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12242">樿<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13540">噡<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14221">嬐<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14227">嬗<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14568">嶦<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14659">幨<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15070">敾<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15278">橏<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15892">澶<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16213">燀<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16215">燅<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16223">燖<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16924">篟<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17025">縓<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17409">虥<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17588">褼<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17682">諯<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18351">駩<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19089">㙴<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19926">㪨<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20433">㵪<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20534">㷷<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21028">䁣<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22383">䛹<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24056">燂<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="25959">篯<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1166">鮮<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1785">繊<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3215">簒<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3848">氈<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4312">臉<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4590">簓<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5286">餞<span class="small">セン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6013">禪<span class="small">セン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6241">潛<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7363">韱<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8187">謆<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8886">篹<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10076">襈<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11909">臇<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11917">膻<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12352">獮<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13878">壍<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14249">嬱<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14561">嶜<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15294">檈<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15390">氊<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16766">磰<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16860">竁<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16930">簅<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17035">縼<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17495">螹<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18071">鍌<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18085">鍹<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18327">馢<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19865">㩛<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20745">㻽<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22159">䗠<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22645">䠾<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22684">䡪<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22729">䢬<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22730">䢭<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23414">䯹<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="25430">闎<span class="small">セン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1473">繕<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4443">濺<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4938">燹<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5174">瞻<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6194">擶<span class="small">セン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6459">蟬<span class="small">セン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6867">鬵<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7410">顓<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7491">餰<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7829">鎸<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8219">謭<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9135">繟<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9218">羴<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9934">蟤<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10085">襜<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10248">璿<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15287">橬<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16208">熸<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17037">繏<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17510">蟮<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17595">襝<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18437">鯅<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19872">㩥<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20147">㯸<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21043">䁴<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21173">䄡<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21255">䆄<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21690">䍻<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21843">䐶<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22541">䟅<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23269">䭈<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24038">瀐<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24274">䄠<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="25585">鞯<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="27884">𩔊<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4105">蟾<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4600">簽<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5007">譛<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5132">羶<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5311">殱<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6242">濳<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6752">騚<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6842">鬋<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7787">鏇<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7788">鏩<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8200">譔<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8201">譂<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8452">蹮<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9946">蟺<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10438">㿊<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11601">旜<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12297">櫏<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15955">瀳<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18369">騡<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20156">㰄<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20455">㶄<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21038">䁮<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21620">䌞<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22072">䕭<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22623">䠣<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22691">䡲<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23485">䱧<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23627">䴼<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3416">孅<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3969">闡<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3994">霰<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5008">譫<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5446">蘚<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5493">贍<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6279">譱<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7815">鐉<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8209">譣<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9291">聻<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11526">攕<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13586">嚵<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14717">廯<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15959">瀸<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15961">瀺<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16941">籈<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17717">譠<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18120">鏾<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18378">騸<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18446">鰁<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19500">㡨<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20159">㰊<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20461">㶍<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20687">㺤<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21142">䃱<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21691">䍼<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22546">䟋<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22626">䠨<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22647">䡀<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23275">䭕<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23569">䳦<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23572">䳪<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4610">籖<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4732">鐫<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5006">譖<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5295">饌<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5310">殲<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6099">纎<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7826">鐱<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8929">籑<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11906">饍<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11928">䑎<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12314">櫼<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12592">㒨<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20464">㶒<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21453">䉦<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22183">䘂<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22818">䤔<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22939">䦲<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23198">䫮<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23499">䱼<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24044">灊<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5142">顫<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5258">癬<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7042">鱄<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7332">韂<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7505">饘<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8218">譾<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8451">躚<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8934">籛<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10094">襳<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14284">孿<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15982">灗<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16571">瓕<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18263">韀<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18537">鷒<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21149">䃸<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21262">䆎<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21653">䍎<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22888">䥧<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23501">䱿<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23503">䲂<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23505">䲆<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4609">籤<span class="small">セン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6098">纖<span class="small">セン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="7056">鱓<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7058">鱔<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7361">䪜<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7509">䉵<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15985">灛<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17404">虃<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21465">䉳<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21525">䊱<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21526">䊲<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22191">䘋<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5097">韆<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7071">鱣<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7226">鸇<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18415">魙<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22822">䤘<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23046">䨷<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23645">䵐<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6563">黵<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7338">韉<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7856">鑯<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19260">㝈<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23119">䪌<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8232">讝<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15993">灥<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7083">鱻<span class="small">セン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12698">冄<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3152">冉<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12391">㒰<span class="small">ゼン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="346">全<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24218">㦮<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8609">㳄<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19129">㚩<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21926">䒣<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24046">灷<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="2649">苒<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11771">肰<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12002">枏<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13273">呥<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13994">姌<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14917">抩<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24737">单<span class="small">ゼン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="177">前<span class="small">ゼン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="566">単<span class="small">ゼン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="924">染<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5347">荐<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9253">耎<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10012">衻<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12001">柟<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16490">珃<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19786">㧫<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21266">䆓<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="26561">袇<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4376">涎<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9255">䎡<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9781">蚦<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10013">袡<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12763">歬<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19030">㘣<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20338">㳭<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23902">唌<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24302">䓓<span class="small">ゼン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1848">軟<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9782">蚺<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9799">蛅<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12764">偂<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13076">偄<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15198">梋<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17255">菚<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17558">袸<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17559">袻<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18795">㓴<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19601">㣤<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20982">䀬<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21698">䎃<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22333">䛁<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22966">䧖<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="27713">𥒎<span class="small">ゼン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="587">然<span class="small">ゼン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="927">善<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3280">喘<span class="small">ゼン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5762">單<span class="small">ゼン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="13624">圌<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13788">堧<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14121">媆<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14125">媊<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14145">媣<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15209">棎<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17288">葲<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21799">䏼<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21980">䓴<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="25058">婵<span class="small">ゼン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1789">禅<span class="small">ゼン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2038">羨<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="2645">賎<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10691">碊<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11864">腝<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12147">㮕<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15221">椯<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16534">瑌<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16538">瑔<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17441">蜁<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20076">㮒<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22793">䣸<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22831">䤡<span class="small">ゼン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="756">銭<span class="small">ゼン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1790">漸<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6504">髥<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10705">碝<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12615">僐<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12616">僎<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14178">嫙<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14190">嫨<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15012">摲<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16438">獑<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18721">㒄<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19221">㜛<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20785">㼱<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20940">㿵<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22135">䗃<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22235">䙇<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23253">䬯<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="2643">蝉<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="2644">賤<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3410">嬋<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4644">髯<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6007">槫<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8708">鄯<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9090">緛<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9876">蝡<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12639">儃<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13508">嘫<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13851">墠<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13852">墡<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15022">撋<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15115">暶<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16203">熯<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17463">蝖<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19228">㜣<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19726">㦓<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19847">㨻<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20106">㯀<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22027">䔳<span class="small">ゼン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="784">燃<span class="small">ゼン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2042">膳<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3727">擅<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5949">錢<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7391">䫇<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8484">輭<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12243">橪<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14227">嬗<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14568">嶦<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15070">敾<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16215">燅<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17409">虥<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17682">諯<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18351">駩<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19926">㪨<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20433">㵪<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20739">㻵<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21028">䁣<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22486">䞂<span class="small">ゼン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6013">禪<span class="small">ゼン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="11505">擩<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13881">壖<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14561">嶜<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15294">檈<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16766">磰<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17035">縼<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17495">螹<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20745">㻽<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22159">䗠<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22730">䢭<span class="small">ゼン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1473">繕<span class="small">ゼン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6459">蟬<span class="small">ゼン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="9136">繎<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10249">瓀<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12293">檽<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15287">橬<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17510">蟮<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21843">䐶<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22541">䟅<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24274">䄠<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="27884">𩔊<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7788">鏩<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12814">劖<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15955">瀳<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16779">礝<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17855">蹨<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20294">㲯<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20455">㶄<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20834">㽭<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21038">䁮<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22072">䕭<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22691">䡲<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23481">䱠<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4109">蠕<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5493">贍<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6279">譱<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13586">嚵<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17717">譠<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17721">譧<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18446">鰁<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20159">㰊<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21691">䍼<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11906">饍<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20571">㸥<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22818">䤔<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15982">灗<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22083">䕼<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20552">㸐<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23591">䳿<span class="small">ゼン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22085">䕿<span class="small">ゼン</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5212">疝<span class="small">せんき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5234">痳<span class="small">せんき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4873">甅<span class="small">センチグラム</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13118">兣<span class="small">センチグラム</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2650">糎<span class="small">センチメートル</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5548">竰<span class="small">センチリットル</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3129">僊<span class="small">せんにん</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12591">僲<span class="small">せんにん</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12592">㒨<span class="small">せんにん</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5428">薇<span class="small">ぜんまい</span></a></li>
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
                <div class="side_box">
                    <p class="ttl_main_s togglemenu">練習帳</p>
                    <div class="togglebox">
                        <ul class="other_site">
                            <li><a href="exercisebook/free.php">漢字練習帳</a></li>
                            <li><a href="exercisebook/free.php#kr1">カスタム練習帳</a></li>
                            <li><a href="exercisebook/free.php#kr2">漢検級別（学年別）練習帳</a></li>
                        </ul>
                    </div>
                    <!--togglebox-->
                </div>
                <!--side_box-->
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
                    </div>
                    <!--togglebox-->
                </div>
                <!--side_box-->
                <div class="side_box">
                    <p class="ttl_main_s togglemenu">漢字の分類・漢字表記</p>
                    <div class="togglebox">
                        <ul class="other_site">
                            <li><a href="sakuin1">漢字の分類・漢字表記索引</a></li>
                        </ul>
                    </div>
                    <!--togglebox-->
                </div>
                <!--side_box-->
                <div class="side_box">
                    <p class="ttl_main_s togglemenu">漢字情報</p>
                    <div class="togglebox">
                        <ul class="other_site">
                            <li><a href="">偏旁（偏旁冠脚）</a></li>
                            <li><a href="kotoshi/">今年の漢字</a></li>
                            <li><a href="kotoshi/rekidai">歴代の今年の漢字</a></li>
                            <li><a href="osusume">おすすめの漢字辞典・漢和辞典</a></li>
                        </ul>
                    </div>
                    <!--togglebox-->
                </div>
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
</script>
    <?php wp_footer() ?>