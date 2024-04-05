<?php
/*
 * Template Name: Yomi2
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
            <h1 class="ttl_main">音訓検索「い」</h1>
            <aside>
                <div class="ads_wrapin link_pc">

                    <!-- 漢字辞典レスポンシブ１ -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3664445671894613" data-ad-slot="5169795341" data-ad-format="horizontal" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </aside>
            <p>「い」から始まる読み方をする漢字です。</p>
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
                        <option value="#" selected>い</option>
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
                    <li id="parts1_menu"><a href="#parts1">い</a></li>
                    <li id="parts2_menu"><a href="#parts2">いい</a></li>
                    <li id="parts3_menu"><a href="#parts3">いう</a></li>
                    <li id="parts4_menu"><a href="#parts4">いえ</a></li>
                    <li id="parts5_menu"><a href="#parts5">いお</a></li>
                    <li id="parts6_menu"><a href="#parts6">いか</a></li>
                    <li id="parts7_menu"><a href="#parts7">いき</a></li>
                    <li id="parts8_menu"><a href="#parts8">いく</a></li>
                    <li id="parts9_menu"><a href="#parts9">いけ</a></li>
                    <li id="parts10_menu"><a href="#parts10">いこ</a></li>
                    <li id="parts11_menu"><a href="#parts11">いさ</a></li>
                    <li id="parts12_menu"><a href="#parts12">いし</a></li>
                    <li id="parts13_menu"><a href="#parts13">いす</a></li>
                    <li id="parts14_menu"><a href="#parts14">いせ</a></li>
                    <li id="parts15_menu"><a href="#parts15">いそ</a></li>
                    <li id="parts16_menu"><a href="#parts16">いた</a></li>
                    <li id="parts17_menu"><a href="#parts17">いち</a></li>
                    <li id="parts18_menu"><a href="#parts18">いつ</a></li>
                    <li id="parts19_menu"><a href="#parts19">いて</a></li>
                    <li id="parts20_menu"><a href="#parts20">いと</a></li>
                    <li id="parts21_menu"><a href="#parts21">いな</a></li>
                    <li id="parts22_menu"><a href="#parts22">いに</a></li>
                    <li id="parts23_menu"><a href="#parts23">いぬ</a></li>
                    <li id="parts24_menu"><a href="#parts24">いね</a></li>
                    <li id="parts25_menu"><a href="#parts25">いの</a></li>
                    <li id="parts26_menu"><a href="#parts26">いは</a></li>
                    <li id="parts27_menu"><a href="#parts27">いひ</a></li>
                    <li id="parts28_menu"><a href="#parts28">いふ</a></li>
                    <li id="parts29_menu"><a href="#parts29">いほ</a></li>
                    <li id="parts30_menu"><a href="#parts30">いま</a></li>
                    <li id="parts31_menu"><a href="#parts31">いみ</a></li>
                    <li id="parts32_menu"><a href="#parts32">いむ</a></li>
                    <li id="parts33_menu"><a href="#parts33">いも</a></li>
                    <li id="parts34_menu"><a href="#parts34">いや</a></li>
                    <li id="parts35_menu"><a href="#parts35">いよ</a></li>
                    <li id="parts36_menu"><a href="#parts36">いら</a></li>
                    <li id="parts37_menu"><a href="#parts37">いり</a></li>
                    <li id="parts38_menu"><a href="#parts38">いる</a></li>
                    <li id="parts39_menu"><a href="#parts39">いれ</a></li>
                    <li id="parts40_menu"><a href="#parts40">いろ</a></li>
                    <li id="parts41_menu"><a href="#parts41">いわ</a></li>
                    <li id="parts42_menu"><a href="#parts42">いん</a></li>
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
                <h3 class="ttl_while">い</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="6613">乁<span class="small">イ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="/3484">已<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/5768">囗<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="183">台<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="442">以<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12368">㠯<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12951">匜<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18644">㐌<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25498">汇<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="446">衣<span class="small">イ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="/2148">伊<span class="small">イ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="/2150">夷<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7912">阤<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13641">圯<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14720">异<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14767">彵<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27774">𦣝<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="245">医<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="443">位<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="445">囲<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/3078">佗<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4976">矣<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8570">迆<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9379">芛<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/11541">攺<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/11940">杝<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12419">佁<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13053">伿<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13235">吚<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14911">抁<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15459">沇<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19756">㦾<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20174">㰝<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="244">委<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="647">易<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1005">依<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3545">怡<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5324">苡<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7920">陁<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9401">苢<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12430">侇<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13674">坨<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15479">沶<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15500">泤<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16363">狏<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17532">衪<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18857">㕈<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20560">㸚<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21183">䄬<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24215">㣇<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="162">食<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="444">胃<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1006">威<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1008">為<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1942">畏<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/3379">姨<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4346">洟<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8569">迤<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8576">迱<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9424">䒾<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9452">荑<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9800">虵<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/10128">珆<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10965">㤬<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11330">拸<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/11979">柂<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13306">咦<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13321">咿<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14433">峓<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14678">庡<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14827">恞<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15536">洢<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15540">洧<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19154">㛄<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19519">㡼<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19776">㧡<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20324">㳖<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20637">㹫<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22952">䧅<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22954">䧇<span class="small">イ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="/2149">倭<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/3101">倚<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3556">恚<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4354">韋<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6093">眤<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8085">訑<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8291">貤<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8579">迻<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8728">酏<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/10015">袘<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10527">眙<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11241">扆<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11242">扅<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/11795">胰<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12017">栘<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12018">桋<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12496">㑥<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13217">叞<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14736">弬<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15342">欭<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16578">瓵<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18632">巸<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18916">㖐<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21949">䓈<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24408">涠<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="641">移<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="824">異<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1606">尉<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1715">蛇<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1913">唯<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1943">萎<span class="small">イ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="/2151">惟<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/3489">帷<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5113">猗<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5222">痍<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7936">陭<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/10364">痏<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10970">悘<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12529">偯<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13371">唩<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14295">宧<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14476">崣<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15521">洍<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16655">眱<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16879">笖<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17099">耛<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19311">㞆<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19531">㢊<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19567">㢻<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19602">㣦<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19951">㫊<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20652">㹻<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20705">㺿<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25554">渏<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1007">偉<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1944">椅<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4391">渭<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4564">欹<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4957">詒<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5481">貽<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/5800">圍<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6049">逶<span class="small">イ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6248">爲<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9206">羡<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9531">葳<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9810">蛦<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9811">蛜<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12395">蒍<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12901">殔<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13412">喂<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13439">喴<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14138">媙<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14148">媦<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14491">崺<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15059">敡<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15081">旑<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16315">犄<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16416">猬<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16522">琟<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17070">羠<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17555">袲<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18199">隇<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18395">骩<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18933">㖢<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19060">㙎<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19394">㟪<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19670">㥋<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19682">㥜<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19810">㨊<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20068">㮃<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20505">㷉<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20770">㼢<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21984">䓹<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22274">䙾<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22471">䝯<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23245">䬥<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25328">揻<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25510">溈<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="243">意<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1009">違<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1945">彙<span class="small">イ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="/2152">葦<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/3491">幃<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4573">肄<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5229">痿<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6782">骪<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6783">骫<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7566">鉯<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8121">誃<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11125">愇<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12124">楲<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12125">椸<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13030">亄<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13428">喡<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14116">媁<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14131">媐<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15099">暆<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15686">湋<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16152">煟<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17570">裿<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17749">貄<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17820">跠<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17959">郼<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18275">頉<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18761">㒾<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19065">㙔<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19203">㜇<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19402">㟴<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19692">㥨<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19699">㥴<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20083">㮛<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20201">㰻<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20886">㾨<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23150">䪳<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23656">䵝<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23989">徫<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24374">彚<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27792">𠹤<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1011">維<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/2153">蔚<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/2155">飴<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7609">銥<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7628">鉹<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9847">蜲<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9848">蜼<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/10182">瑋<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/11613">旖<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/11703">暐<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12870">歋<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14180">嫛<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14186">嫢<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15222">椲<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15812">漪<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15847">潩<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17320">蓶<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17335">蔩<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20243">㱲<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21685">䍴<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22013">䔟<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22020">䔬<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23216">䬁<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23983">廙<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24352">䬮<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24382">煒<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25020">墛<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25139">嶎<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="825">遺<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1321">慰<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4084">蝟<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4923">熨<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8157">諉<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8399">踦<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8706">鄬<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9080">緭<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9638">蔿<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9867">蝛<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/10050">褘<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10803">禕<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11467">撎<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15029">撱<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15836">潙<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15860">潿<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16199">熪<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16331">犚<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16834">稦<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16914">箷<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17609">覣<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17830">踓<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17982">醀<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19081">㙪<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19717">㦉<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21381">䈕<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22033">䔺<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22456">䝝<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22981">䧦<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23080">䩟<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24091">禠<span class="small">イ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1010">緯<span class="small">イ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="/2154">謂<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/3303">噫<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3516">彜<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4792">縊<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5137">頤<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7345">韑<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9187">罻<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9884">螠<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9893">螔<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14222">嬑<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14235">嬟<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14757">彛<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15069">敼<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18066">錗<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19578">㣈<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20003">㬙<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20209">㱅<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20903">㿄<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21687">䍷<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23320">䮊<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/2156">鮪<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6265">瞶<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6943">鮧<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7123">鴺<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7398">頥<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7399">顊<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7477">餧<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8880">簃<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9903">螱<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/10004">褽<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13109">儰<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15923">濰<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16239">燱<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22252">䙟<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22489">䞅<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23168">䫋<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23172">䫑<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23230">䬐<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23298">䭲<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3515">彝<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/5728">醫<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6552">黟<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6971">䱌<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7486">餵<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7888">闈<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12955">毉<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14758">彞<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15307">檹<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15926">濻<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17378">藯<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17507">蟡<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17706">謻<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17771">贀<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18073">鍏<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22392">䜅<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23231">䬑<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23640">䵋<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24075">癐<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24358">䭉<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7349">韙<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8015">霨<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18108">鏔<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18303">颹<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22446">䝐<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23128">䪘<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23613">䴧<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23936">壝<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24041">瀢<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3885">鰄<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7359">韡<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7903">䦱<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8206">譩<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9727">蘤<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11019">㦤<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21863">䑊<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22179">䗽<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24157">醷<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5294">饐<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7824">鐿<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14264">孈<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22409">䜜<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27716">𩹷<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3638">懿<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7031">䲁<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7209">鷕<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15333">欈<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20170">㰘<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23147">䪰<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7211">鷧<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23508">䲊<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24142">讉<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7118">鷾<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17052">纗<span class="small">イ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23118">䪋<span class="small">イ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1162">井<span class="small">い</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/2234">亥<span class="small">い</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24182">㐪<span class="small">い</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/5648">豕<span class="small">い</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/2261">莞<span class="small">い</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2730">猪<span class="small">い</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26461">萖<span class="small">い</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6367">猪<span class="small">い</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6321">豬<span class="small">い</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5441">藺<span class="small">い</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts2">
                <h3 class="ttl_while">いい</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="592">飯<span class="small">いい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5267">粲<span class="small">いい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7461">飰<span class="small">いい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12124">楲<span class="small">いい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26281">飯<span class="small">いい</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/2154">謂<span class="small">いい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/3246">咢<span class="small">いいあらそ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18954">㖾<span class="small">いいあらそ（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="632">令<span class="small">いいつけ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/3229">吩<span class="small">いいつ（ける）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/3243">咐<span class="small">いいつ（ける）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts3">
                <h3 class="ttl_while">いう</h3>
                <ul class="search_parts yomi_parts">
                    <li class="jimmei kunyomi"><a class="color2" href="/2171">云<span class="small">い（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4249">曰<span class="small">い（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="119">言<span class="small">い（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="203">道<span class="small">い（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8604">衜<span class="small">い（う）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/2154">謂<span class="small">い（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8605">衟<span class="small">い（う）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts4">
                <h3 class="ttl_while">いえ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="827">宇<span class="small">いえ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="938">宅<span class="small">いえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19506">㡯<span class="small">いえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19507">㡰<span class="small">いえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27811">𡧃<span class="small">いえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14672">庐<span class="small">いえ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="230">門<span class="small">いえ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="727">舎<span class="small">いえ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1565">房<span class="small">いえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6031">舍<span class="small">いえ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="152">室<span class="small">いえ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="255">屋<span class="small">いえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14299">宫<span class="small">いえ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="086">家<span class="small">いえ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="282">宮<span class="small">いえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18165">閅<span class="small">いえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/5773">厦<span class="small">いえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19063">㙑<span class="small">いえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19283">㝢<span class="small">いえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3506">廈<span class="small">いえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3513">廬<span class="small">いえ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1864">閥<span class="small">いえがら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27747">𨏍<span class="small">いえつど</span></a></li>
                    <li class="others_kanji kunyomi"><a href="17415">虽<span class="small">いえど（も）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4581">雖<span class="small">いえど（も）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7113">䧻<span class="small">いえばと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3808">鴿<span class="small">いえばと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5224">痊<span class="small">い（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2943">愈<span class="small">い（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5244">瘉<span class="small">い（える）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1910">癒<span class="small">い（える）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts5">
                <h3 class="ttl_while">いお</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="14672">庐<span class="small">いおり</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/2144">庵<span class="small">いおり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5374">菴<span class="small">いおり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/9492">葊<span class="small">いおり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3513">廬<span class="small">いおり</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts6">
                <h3 class="ttl_while">いか</h3>
                <ul class="search_parts yomi_parts">
                    <li class="jimmei kunyomi"><a class="color2" href="3844">毬<span class="small">いが</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="043">生<span class="small">い（かす）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="099">活<span class="small">い（かす）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1298">雷<span class="small">いかずち</span></a></li>
                    <li class="others_kanji kunyomi"><a href="23018">䨓<span class="small">いかずち</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3982">霆<span class="small">いかずち</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7998">靁<span class="small">いかずち</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13888">壨<span class="small">いかずち</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4011">枋<span class="small">いかだ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4026">柎<span class="small">いかだ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8814">栰<span class="small">いかだ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4122">桴<span class="small">いかだ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2837">筏<span class="small">いかだ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4158">槎<span class="small">いかだ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/9350">艠<span class="small">いかだ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5330">范<span class="small">いがた</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2954">熔<span class="small">いがた</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1238">範<span class="small">いがた</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2955">鎔<span class="small">いがた</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24531">严<span class="small">いか（つい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="862">厳<span class="small">いか（つい）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6147">嚴<span class="small">いか（つい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3548">怎<span class="small">いか（で）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2707">凧<span class="small">いかのぼり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/3022">歪<span class="small">いが（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/3265">啀<span class="small">いが（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13488">嘊<span class="small">いが（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24531">严<span class="small">いかめ（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24583">俨<span class="small">いかめ（しい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="862">厳<span class="small">いかめ（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27779">𠑊<span class="small">いかめ（しい）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6147">嚴<span class="small">いかめ（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="/3145">儼<span class="small">いかめ（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5167">瞋<span class="small">いか（らす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2753">碇<span class="small">いかり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2867">錨<span class="small">いかり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/3292">嗔<span class="small">いか（り）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3815">鵤<span class="small">いかる</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13231">吓<span class="small">いか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3544">忿<span class="small">いか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3551">怫<span class="small">いか（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1205">怒<span class="small">いか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10965">㤬<span class="small">いか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3556">恚<span class="small">いか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3568">悁<span class="small">いか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4487">馮<span class="small">いか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11147">愠<span class="small">いか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/3292">嗔<span class="small">いか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3597">慍<span class="small">いか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3599">愾<span class="small">いか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5167">瞋<span class="small">いか（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1629">嚇<span class="small">いか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3815">鵤<span class="small">いかるが</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="/2078">奈<span class="small">いかん</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="/2077">那<span class="small">いかん（ぞ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="/2078">奈<span class="small">いかん（ぞ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18699">㑚<span class="small">いかん（ぞ）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts7">
                <h3 class="ttl_while">いき</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="19125">㚤<span class="small">イキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="826">域<span class="small">イキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16518">琙<span class="small">イキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20824">㽣<span class="small">イキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21369">䈅<span class="small">イキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16195">熤<span class="small">イキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16211">熼<span class="small">イキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3962">閾<span class="small">イキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23335">䮙<span class="small">イキ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/5687">气<span class="small">いき</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="014">気<span class="small">いき</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="350">息<span class="small">いき</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1455">粋<span class="small">いき</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/5688">氣<span class="small">いき</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/5849">粹<span class="small">いき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4790">縡<span class="small">いき</span></a></li>
                    <li class="others_kanji onyomi"><a href="14323">寪<span class="small">イギ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12202">权<span class="small">いきお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13159">势<span class="small">いきお（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1262">柄<span class="small">いきお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12861">㔟<span class="small">いきお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12008">棅<span class="small">いきお（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="748">勢<span class="small">いきお（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="861">権<span class="small">いきお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6005">權<span class="small">いきお（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1341">慨<span class="small">いきどお（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1881">憤<span class="small">いきどお（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11149">慨<span class="small">いきどお（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="043">生<span class="small">い（きる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="099">活<span class="small">い（きる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="16073">热<span class="small">いき（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="586">熱<span class="small">いき（る）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts8">
                <h3 class="ttl_while">いく</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="13638">圫<span class="small">イク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="246">育<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14816">怮<span class="small">イク</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="/2158">郁<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="/11644">昱<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13325">哊<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19642">㤢<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="6635">俼<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="12019">栯<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14763">彧<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="11098">惐<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13381">唷<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13775">堉<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15643">淯<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17554">袬<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18941">㖪<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19678">㥔<span class="small">イク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1025">奥<span class="small">イク</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="/2157">粥<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="8592">逳<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13413">喅<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13419">喐<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15210">棛<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16122">焴<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20193">㰲<span class="small">イク</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="/5774">奧<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16149">煜<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16833">稢<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17306">蒮<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20072">㮋<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22224">䘻<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="6232">毓<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9849">蜟<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="11228">戫<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19574">㣃<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21575">䋭<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16837">稶<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="4437">澳<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="/5882">墺<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="7684">錥<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="7967">隩<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9659">薁<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13541">噢<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="4936">燠<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19755">㦽<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21852">䐿<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22810">䤋<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23895">儥<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="/5854">礇<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21443">䉛<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9724">蘛<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18133">鐭<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="5465">鬻<span class="small">イク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22413">䜡<span class="small">イク</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1051">幾<span class="small">いく</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19504">㡬<span class="small">いく</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="133">行<span class="small">い（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1778">逝<span class="small">い（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3642">戈<span class="small">いくさ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2525">戎<span class="small">いくさ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14611">师<span class="small">いくさ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="419">役<span class="small">いくさ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="605">兵<span class="small">いくさ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="488">軍<span class="small">いくさ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14895">战<span class="small">いくさ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14935">挔<span class="small">いくさ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="431">旅<span class="small">いくさ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="718">師<span class="small">いくさ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/11604">捛<span class="small">いくさ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="552">戦<span class="small">いくさ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6182">戰<span class="small">いくさ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5441">藺<span class="small">いぐさ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4892">艟<span class="small">いくさぶね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4895">艨<span class="small">いくさぶね</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1644">艦<span class="small">いくさぶね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3517">弋<span class="small">いぐるみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/9141">繳<span class="small">いぐるみ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts9">
                <h3 class="ttl_while">いけ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="185">池<span class="small">いけ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4323">汪<span class="small">いけ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4407">溏<span class="small">いけ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1162">井<span class="small">いげた</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1972">韓<span class="small">いげた</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/3015">牢<span class="small">いけにえ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1464">牲<span class="small">いけにえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10906">窂<span class="small">いけにえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25681">牺<span class="small">いけにえ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1365">犠<span class="small">いけにえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6250">犧<span class="small">いけにえ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="043">生<span class="small">い（ける）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="099">活<span class="small">い（ける）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1571">埋<span class="small">い（ける）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts10">
                <h3 class="ttl_while">いこ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="/3366">奕<span class="small">いご</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6090">憇<span class="small">いこ（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1385">憩<span class="small">いこ（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="010">休<span class="small">いこ（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="350">息<span class="small">いこ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/3119">偈<span class="small">いこ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11130">愒<span class="small">いこ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6090">憇<span class="small">いこ（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1385">憩<span class="small">いこ（う）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts11">
                <h3 class="ttl_while">いさ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="501">功<span class="small">いさお</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12734">㓛<span class="small">いさお</span></a></li>
                    <li class="others_kanji kunyomi"><a href="16977">糼<span class="small">いさお</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12904">勛<span class="small">いさお</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/3192">勣<span class="small">いさお</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1864">閥<span class="small">いさお</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1668">勲<span class="small">いさお</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/5843">勳<span class="small">いさお</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="751">績<span class="small">いさお</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12904">勛<span class="small">いさおし</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1668">勲<span class="small">いさおし</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/5843">勳<span class="small">いさおし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4978">諍<span class="small">いさか（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19324">㞕<span class="small">いさぎよ（い）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2632">屑<span class="small">いさぎよ（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1598">廉<span class="small">いさぎよ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="23890">亷<span class="small">いさぎよ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27692">廉<span class="small">いさぎよ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24188">㓗<span class="small">いさぎよ（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="685">潔<span class="small">いさぎよ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26943">㢘<span class="small">いさぎよ（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="877">砂<span class="small">いさご</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6895">魦<span class="small">いさざ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27709">𩶗<span class="small">いさざ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7049">鱊<span class="small">いさざ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/2431">些<span class="small">いささ（か）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4857">聊<span class="small">いささ（か）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1579">誘<span class="small">いざな（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="22385">䛻<span class="small">いざな（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="620">勇<span class="small">いさ（ましい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12845">勈<span class="small">いさ（ましい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19750">㦷<span class="small">いさ（ましい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="620">勇<span class="small">いさ（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12845">勈<span class="small">いさ（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19750">㦷<span class="small">いさ（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5176">矍<span class="small">いさ（む）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="556">争<span class="small">いさ（める）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6247">爭<span class="small">いさ（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="681">禁<span class="small">いさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/2265">諌<span class="small">いさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4978">諍<span class="small">いさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/2264">諫<span class="small">いさ（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="628">漁<span class="small">いさ（り）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4291">躄<span class="small">いざ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6533">躃<span class="small">いざ（る）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts12">
                <h3 class="ttl_while">いし</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="046">石<span class="small">いし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24266">䂖<span class="small">いし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25863">硙<span class="small">いしうす</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4665">磑<span class="small">いしうす</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="/2130">弄<span class="small">いじく（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27370">㺯<span class="small">いじく（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14932">挊<span class="small">いじく（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14941">挵<span class="small">いじく（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10766">䃯<span class="small">いしころ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4680">礫<span class="small">いしころ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4676">磴<span class="small">いしざか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25856">础<span class="small">いしずえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12182">榰<span class="small">いしずえ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1477">礎<span class="small">いしずえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="20765">㼙<span class="small">いしだたみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4874">甃<span class="small">いしだたみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4676">磴<span class="small">いしだん</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4731">鐓<span class="small">いしづき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7817">鐜<span class="small">いしづき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4655">矼<span class="small">いしばし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4676">磴<span class="small">いしばし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10647">砭<span class="small">いしばり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4582">箴<span class="small">いしばり</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6393">碑<span class="small">いしぶみ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1538">碑<span class="small">いしぶみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4664">碣<span class="small">いしぶみ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1958">苛<span class="small">いじ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="16489">珁<span class="small">いしやき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4870">瓷<span class="small">いしやき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/10273">甆<span class="small">いしやき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4658">砠<span class="small">いしやま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3520">弩<span class="small">いしゆみ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="/2130">弄<span class="small">いじ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27370">㺯<span class="small">いじ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14932">挊<span class="small">いじ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14941">挵<span class="small">いじ（る）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts13">
                <h3 class="ttl_while">いす</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="7146">鶍<span class="small">いすか</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="087">何<span class="small">いず（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4691">鉅<span class="small">いず（くんぞ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="241">安<span class="small">いずく（んぞ）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/2168">胡<span class="small">いずく（んぞ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4250">曷<span class="small">いずく（んぞ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19272">㝕<span class="small">いずく（んぞ）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/2167">烏<span class="small">いずく（んぞ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="240">悪<span class="small">いずく（んぞ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4911">焉<span class="small">いずく（んぞ）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/5964">惡<span class="small">いずく（んぞ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="14312">寍<span class="small">いずく（んぞ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14316">寕<span class="small">いずく（んぞ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14320">寜<span class="small">いずく（んぞ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1852">寧<span class="small">いずく（んぞ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10969">僫<span class="small">いずく（んぞ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="925">泉<span class="small">いずみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="15538">洤<span class="small">いずみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6235">湶<span class="small">いずみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19395">㟫<span class="small">いずみ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="087">何<span class="small">いず（れ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/3424">孰<span class="small">いず（れ）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts14">
                <h3 class="ttl_while">いせ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="jimmei kunyomi"><a class="color2" href="/2183">堰<span class="small">いせき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18198">隁<span class="small">いせき</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts15">
                <h3 class="ttl_while">いそ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="25846">矶<span class="small">いそ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/2277">磯<span class="small">いそ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4677">礒<span class="small">いそ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/3196">匆<span class="small">いそが（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12923">匇<span class="small">いそが（しい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1271">忙<span class="small">いそが（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/3105">倥<span class="small">いそが（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10959">㤂<span class="small">いそ（ぐ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10962">忩<span class="small">いそ（ぐ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="269">急<span class="small">いそ（ぐ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3554">怱<span class="small">いそ（ぐ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6541">悤<span class="small">いそ（ぐ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="852">勤<span class="small">いそ（しむ）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6376">勤<span class="small">いそ（しむ）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts16">
                <h3 class="ttl_while">いた</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="393">板<span class="small">いた</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="788">版<span class="small">いた</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="952">痛<span class="small">いた（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4203">檻<span class="small">いたがこ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4686">鈑<span class="small">いたがね</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1768">甚<span class="small">いた（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1267">抱<span class="small">いだ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25275">拥<span class="small">いだ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4577">雍<span class="small">いだ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19827">㨣<span class="small">いだ（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1580">擁<span class="small">いだ（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1623">懐<span class="small">いだ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7982">雝<span class="small">いだ（く）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6091">懷<span class="small">いだ（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="696">効<span class="small">いた（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1187">致<span class="small">いた（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6198">效<span class="small">いた（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="816">輸<span class="small">いた（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="035">出<span class="small">いだ（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14387">岀<span class="small">いだ（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19345">㞮<span class="small">いだ（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="578">徒<span class="small">いたずら（に）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="949">頂<span class="small">いただき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4138">椒<span class="small">いただき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7417">傎<span class="small">いただき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14528">嵮<span class="small">いただき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2773">顛<span class="small">いただき</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6464">顚<span class="small">いただき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25407">巅<span class="small">いただき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18757">㒹<span class="small">いただき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/3481">巓<span class="small">いただき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25143">巔<span class="small">いただき</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="949">頂<span class="small">いただ（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="/2054">戴<span class="small">いただ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3777">鼬<span class="small">いたち</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11107">恓<span class="small">いた（ましい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1111">惨<span class="small">いた（ましい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3582">悽<span class="small">いた（ましい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/5876">慘<span class="small">いた（ましい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3756">黯<span class="small">いた（ましい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24566">伤<span class="small">いた（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25237">怆<span class="small">いた（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3549">怛<span class="small">いた（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/3096">俑<span class="small">いた（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3566">恫<span class="small">いた（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11107">恓<span class="small">いた（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5220">疼<span class="small">いた（む）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1111">惨<span class="small">いた（む）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1840">悼<span class="small">いた（む）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="/2036">戚<span class="small">いた（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3582">悽<span class="small">いた（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3583">惆<span class="small">いた（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3584">悵<span class="small">いた（む）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="952">痛<span class="small">いた（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3594">惻<span class="small">いた（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4461">軫<span class="small">いた（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25815">痨<span class="small">いた（む）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="909">傷<span class="small">いた（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3605">愴<span class="small">いた（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="16434">獊<span class="small">いた（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3598">慇<span class="small">いた（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/5876">慘<span class="small">いた（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5249">癆<span class="small">いた（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24566">伤<span class="small">いた（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="20477">㶤<span class="small">いた（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4901">炒<span class="small">いた（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="952">痛<span class="small">いた（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="909">傷<span class="small">いた（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3720">撓<span class="small">いた（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="888">至<span class="small">いた（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1935">戻<span class="small">いた（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/2295">迄<span class="small">いた（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1211">到<span class="small">いた（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11237">戾<span class="small">いた（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="663">格<span class="small">いた（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="762">造<span class="small">いた（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4946">訖<span class="small">いた（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1987">詣<span class="small">いた（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8589">艁<span class="small">いた（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3932">曁<span class="small">いた（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4273">踵<span class="small">いた（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/5632">臻<span class="small">いた（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="21900">䒃<span class="small">いた（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="952">痛<span class="small">いた（わしい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="638">労<span class="small">いたわ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13158">劳<span class="small">いたわ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/5667">勞<span class="small">いたわ（る）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts17">
                <h3 class="ttl_while">いち</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo onyomi"><a class="color1" href="001">一<span class="small">イチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/3054">弌<span class="small">イチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26293">肀<span class="small">イチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4572">聿<span class="small">イチ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1012">壱<span class="small">イチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13157">劮<span class="small">イチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13284">呹<span class="small">イチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13979">妷<span class="small">イチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15338">欥<span class="small">イチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15483">泆<span class="small">イチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19771">㧒<span class="small">イチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15554">浂<span class="small">イチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17418">蚎<span class="small">イチ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1607">逸<span class="small">イチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21545">䋉<span class="small">イチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/5802">壹<span class="small">イチ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6416">逸<span class="small">イチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26279">逸<span class="small">イチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23210">䫻<span class="small">イチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13525">噊<span class="small">イチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14213">嬄<span class="small">イチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23310">䭿<span class="small">イチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13893">夁<span class="small">イチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16221">燏<span class="small">イチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23266">䭂<span class="small">イチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23544">䳀<span class="small">イチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23231">䬑<span class="small">イチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18613">齸<span class="small">イチ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="146">市<span class="small">いち</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4202">檪<span class="small">いちい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4201">櫟<span class="small">いちい</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5337">苺<span class="small">いちご</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5338">莓<span class="small">いちご</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4905">炳<span class="small">いちじる（しい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="947">著<span class="small">いちじる（しい）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6410">著<span class="small">いちじる（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4756">紵<span class="small">いちび</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts18">
                <h3 class="ttl_while">いつ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo onyomi"><a class="color1" href="001">一<span class="small">イツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1329">乙<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6693">乚<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/3054">弌<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26293">肀<span class="small">イツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="527">失<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4572">聿<span class="small">イツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1012">壱<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/3075">佚<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13157">劮<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15441">汩<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12431">佾<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13284">呹<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13979">妷<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15338">欥<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15483">泆<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19771">㧒<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20322">㳑<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7521">釔<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9425">茟<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/11658">昳<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15554">浂<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17418">蚎<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22712">䢖<span class="small">イツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1607">逸<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21545">䋉<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4462">軼<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/5802">壹<span class="small">イツ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6416">逸<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7084">鳦<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9023">䋖<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10623">矞<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26279">逸<span class="small">イツ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="/2159">溢<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13030">亄<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23210">䫻<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7610">銉<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="/3299">噎<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13525">噊<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14213">嬄<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15829">潏<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16447">獝<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23310">䭿<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3807">鴪<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6493">鴥<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8616">遹<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13893">夁<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16221">燏<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16226">燚<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18484">鴧<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18485">鴩<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23266">䭂<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23317">䮇<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23544">䳀<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4715">鎰<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23231">䬑<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8019">霱<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6769">驈<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3835">鷸<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7049">鱊<span class="small">イツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18613">齸<span class="small">イツ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18638">㐅<span class="small">いつ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="019">五<span class="small">いつ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4250">曷<span class="small">いつ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="035">出<span class="small">い（づ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14387">岀<span class="small">い（づ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19345">㞮<span class="small">い（づ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13897">夈<span class="small">いつ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6656">斋<span class="small">いつ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19932">㪰<span class="small">いつ（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1702">斎<span class="small">いつ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="23249">䬩<span class="small">いつ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6012">齋<span class="small">いつ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25235">怃<span class="small">いつく（しむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10985">㤵<span class="small">いつく（しむ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1427">慈<span class="small">いつく（しむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18724">㒇<span class="small">いつく（しむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3624">憮<span class="small">いつく（しむ）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2735">寵<span class="small">いつく（しむ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="18638">㐅<span class="small">いつ（つ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="019">五<span class="small">いつ（つ）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/2386">伍<span class="small">いつ（つ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1697">詐<span class="small">いつわ（り）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5005">譎<span class="small">いつわ（り）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7955">阳<span class="small">いつわ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7956">阦<span class="small">いつわ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/3089">佯<span class="small">いつわ（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1650">偽<span class="small">いつわ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4949">訛<span class="small">いつわ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25845">矫<span class="small">いつわ（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="426">陽<span class="small">いつわ（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1697">詐<span class="small">いつわ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4958">詭<span class="small">いつわ（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/5804">僞<span class="small">いつわ（る）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="941">誕<span class="small">いつわ（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1658">矯<span class="small">いつわ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4798">繆<span class="small">いつわ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5002">譌<span class="small">いつわ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5005">譎<span class="small">いつわ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5007">譛<span class="small">いつわ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5006">譖<span class="small">いつわ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18240">霷<span class="small">いつわ（る）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts19">
                <h3 class="ttl_while">いて</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1519">凍<span class="small">い（てる）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts20">
                <h3 class="ttl_while">いと</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="24530">丝<span class="small">いと</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="028">糸<span class="small">いと</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/2372">絃<span class="small">いと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/5909">絲<span class="small">いと</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="4777">綸<span class="small">いと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4781">綫<span class="small">いと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/9095">緍<span class="small">いと</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="176">線<span class="small">いと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4789">緡<span class="small">いと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27889">𣽾<span class="small">いと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4804">縷<span class="small">いと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27716">𩹷<span class="small">いとう</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24745">厌<span class="small">いと（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/2182">厭<span class="small">いと（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1738">緒<span class="small">いとぐち</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6425">緖<span class="small">いとぐち</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="993">幼<span class="small">いとけな（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18781">㓜<span class="small">いとけな（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="21193">䄺<span class="small">いとけな（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1500">稚<span class="small">いとけな（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10873">稺<span class="small">いとけな（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6132">穉<span class="small">いとけな（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="21257">䆈<span class="small">いとけな（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10982">㤅<span class="small">いと（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10983">爱<span class="small">いと（しい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="440">愛<span class="small">いと（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4804">縷<span class="small">いとすじ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="17271">营<span class="small">いとな（む）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="645">営<span class="small">いとな（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6058">營<span class="small">いとな（む）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1029">暇<span class="small">いとま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/5523">遑<span class="small">いとま</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1816">挑<span class="small">いど（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3723">撩<span class="small">いど（む）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts21">
                <h3 class="ttl_while">いな</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="970">否<span class="small">いな</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1215">稲<span class="small">いな</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6128">稻<span class="small">いな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3873">鯔<span class="small">いな</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2556">庄<span class="small">いなか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27697">𡌛<span class="small">いなかや</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="231">野<span class="small">いなかや</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/3028">埜<span class="small">いなかや</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8782">㙒<span class="small">いなかや</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8781">壄<span class="small">いなかや</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/2439">坐<span class="small">いなが（ら）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="24200">㘴<span class="small">いなが（ら）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19046">㘸<span class="small">いなが（ら）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4083">蝗<span class="small">いなご</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4093">螽<span class="small">いなご</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25802">电<span class="small">いなずま</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="197">電<span class="small">いなずま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3982">霆<span class="small">いなずま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2522">鰍<span class="small">いなだ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/3301">嘶<span class="small">いなな（く）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts22">
                <h3 class="ttl_while">いに</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="121">古<span class="small">いにしえ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="652">往<span class="small">いにしえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/5825">徃<span class="small">いにしえ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts23">
                <h3 class="ttl_while">いぬ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="018">犬<span class="small">いぬ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3645">戌<span class="small">いぬ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/2337">狗<span class="small">いぬ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24256">㺃<span class="small">いぬ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6699">乹<span class="small">いぬい</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1043">乾<span class="small">いぬい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6700">亁<span class="small">いぬい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="15810">漧<span class="small">いぬい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5440">蘢<span class="small">いぬたで</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts24">
                <h3 class="ttl_while">いね</h3>
                <ul class="search_parts yomi_parts">
                    <li class="jimmei kunyomi"><a class="color2" href="/2211">禾<span class="small">いね</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1215">稲<span class="small">いね</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6128">稻<span class="small">いね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/5549">秉<span class="small">いねたば</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4531">筥<span class="small">いねたば</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts25">
                <h3 class="ttl_while">いの</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="/5648">豕<span class="small">いのこ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2730">猪<span class="small">いのしし</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6367">猪<span class="small">いのしし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6321">豬<span class="small">いのしし</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="043">生<span class="small">いのち</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="415">命<span class="small">いのち</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1434">寿<span class="small">いのちなが（し）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6156">壽<span class="small">いのちなが（し）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="18627">夀<span class="small">いのちなが（し）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4960">誄<span class="small">いのりごと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="22381">䛶<span class="small">いのりごと</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1049">祈<span class="small">いの（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6395">祈<span class="small">いの（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2796">祷<span class="small">いの（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6451">禱<span class="small">いの（る）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts26">
                <h3 class="ttl_while">いは</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1946">茨<span class="small">いばら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/2356">荊<span class="small">いばら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6523">荆<span class="small">いばら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="15220">椘<span class="small">いばら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4129">棘<span class="small">いばら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25947">筚<span class="small">いばら</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2653">楚<span class="small">いばら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="22594">䠂<span class="small">いばら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4594">篳<span class="small">いばら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4518">笆<span class="small">いばらだけ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1524">尿<span class="small">いばり</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="609">便<span class="small">いばり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="20339">㳮<span class="small">いばり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19328">㞙<span class="small">いばり</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="/2067">溺<span class="small">いばり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4414">溲<span class="small">いばり</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts27">
                <h3 class="ttl_while">いひ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="3749">鼾<span class="small">いびき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/3022">歪<span class="small">いびつ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts28">
                <h3 class="ttl_while">いふ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="4950">訝<span class="small">いぶか（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4950">訝<span class="small">いぶか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4213">肚<span class="small">いぶくろ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4942">熏<span class="small">いぶ（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4941">燻<span class="small">いぶ（す）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts29">
                <h3 class="ttl_while">いほ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="4216">肬<span class="small">いぼ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5213">疣<span class="small">いぼ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5491">贅<span class="small">いぼ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts30">
                <h3 class="ttl_while">いま</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="113">今<span class="small">いま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4966">誡<span class="small">いまし（め）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4582">箴<span class="small">いまし（め）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="22384">䛺<span class="small">いまし（め）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1033">戒<span class="small">いまし（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1821">勅<span class="small">いまし（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6199">敕<span class="small">いまし（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/3194">飭<span class="small">いまし（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4966">誡<span class="small">いまし（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12631">儆<span class="small">いまし（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3722">撕<span class="small">いまし（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4582">箴<span class="small">いまし（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1529">縛<span class="small">いまし（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="22384">䛺<span class="small">いまし（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="855">警<span class="small">いまし（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8197">䜘<span class="small">いまし（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="710">在<span class="small">いま（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14902">扗<span class="small">いま（す）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/2439">坐<span class="small">いま（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24200">㘴<span class="small">いま（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19046">㘸<span class="small">いま（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="878">座<span class="small">いま（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="616">未<span class="small">いま（だ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1361">忌<span class="small">い（まわしい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13665">坖<span class="small">い（まわしい）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts31">
                <h3 class="ttl_while">いみ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="4990">諱<span class="small">いみな</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts32">
                <h3 class="ttl_while">いむ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1361">忌<span class="small">い（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13665">坖<span class="small">い（む）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="681">禁<span class="small">い（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4990">諱<span class="small">い（む）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts33">
                <h3 class="ttl_while">いも</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1013">芋<span class="small">いも</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="225">妹<span class="small">いも</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2545">薯<span class="small">いも</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2546">藷<span class="small">いも</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="225">妹<span class="small">いもうと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4057">蜀<span class="small">いもむし</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts34">
                <h3 class="ttl_while">いや</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="24745">厌<span class="small">いや</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="970">否<span class="small">いや</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="/2113">弥<span class="small">いや</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1674">嫌<span class="small">いや</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/2182">厭<span class="small">いや</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/5924">彌<span class="small">いや</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18163">镾<span class="small">いや</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/3066">仄<span class="small">いや（しい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1312">劣<span class="small">いや（しい）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6377">卑<span class="small">いや（しい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1173">俗<span class="small">いや（しい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1537">卑<span class="small">いや（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/3097">俚<span class="small">いや（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5183">陋<span class="small">いや（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27697">𡌛<span class="small">いや（しい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="231">野<span class="small">いや（しい）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/3028">埜<span class="small">いや（しい）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="263">寒<span class="small">いや（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8782">㙒<span class="small">いや（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2645">賎<span class="small">いや（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5195">隘<span class="small">いや（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5208">鄙<span class="small">いや（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2644">賤<span class="small">いや（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8781">壄<span class="small">いや（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5333">苟<span class="small">いやしく（も）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6377">卑<span class="small">いや（しむ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1537">卑<span class="small">いや（しむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5208">鄙<span class="small">いや（しむ）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6377">卑<span class="small">いや（しめる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1537">卑<span class="small">いや（しめる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2645">賎<span class="small">いや（しめる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2644">賤<span class="small">いや（しめる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="245">医<span class="small">い（やす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25806">疗<span class="small">い（やす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5224">痊<span class="small">い（やす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2943">愈<span class="small">い（やす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5244">瘉<span class="small">い（やす）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1305">療<span class="small">い（やす）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1910">癒<span class="small">い（やす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/5728">醫<span class="small">い（やす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12955">毉<span class="small">い（やす）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts35">
                <h3 class="ttl_while">いよ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="/2113">弥<span class="small">いよいよ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/3150">兪<span class="small">いよいよ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6529">俞<span class="small">いよいよ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2943">愈<span class="small">いよいよ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/5524">逾<span class="small">いよいよ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/5924">彌<span class="small">いよいよ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18163">镾<span class="small">いよいよ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts36">
                <h3 class="ttl_while">いら</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="/2130">弄<span class="small">いら（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27370">㺯<span class="small">いら（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14932">挊<span class="small">いら（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14941">挵<span class="small">いら（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4879">甍<span class="small">いらか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26366">荨<span class="small">いらくさ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5415">蕁<span class="small">いらくさ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1958">苛<span class="small">いら（だつ）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts37">
                <h3 class="ttl_while">いり</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="/3329">圦<span class="small">いり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/5915">杁<span class="small">いり</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1604">湾<span class="small">いりえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/5750">灣<span class="small">いりえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2640">舛<span class="small">いりま（じる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8990">籴<span class="small">いりよね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5276">糴<span class="small">いりよね</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts38">
                <h3 class="ttl_while">いる</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="066">入<span class="small">い（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="206">内<span class="small">い（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12696">內<span class="small">い（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="/2112">冶<span class="small">い（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="20477">㶤<span class="small">い（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="678">居<span class="small">い（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4901">炒<span class="small">い（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19269">㝒<span class="small">い（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="621">要<span class="small">い（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="892">射<span class="small">い（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="22638">䠶<span class="small">い（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="/2037">煎<span class="small">い（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="20517">㷙<span class="small">い（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2954">熔<span class="small">い（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1505">鋳<span class="small">い（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4927">熬<span class="small">い（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2955">鎔<span class="small">い（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/5725">鑄<span class="small">い（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="23634">䵅<span class="small">い（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/5886">鯆<span class="small">いるか</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts39">
                <h3 class="ttl_while">いれ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="3755">黥<span class="small">いれずみ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="066">入<span class="small">い（れる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="206">内<span class="small">い（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12696">內<span class="small">い（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19267">㝐<span class="small">い（れる）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/2250">函<span class="small">い（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/2251">凾<span class="small">い（れる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="819">容<span class="small">い（れる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="962">納<span class="small">い（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12732">圅<span class="small">い（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4377">淹<span class="small">い（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4380">涵<span class="small">い（れる）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts40">
                <h3 class="ttl_while">いろ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="151">色<span class="small">いろ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="4771">綺<span class="small">いろ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/3343">堊<span class="small">いろつち</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="/2008">采<span class="small">いろどり</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1107">彩<span class="small">いろど（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1599">炉<span class="small">いろり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/5996">鈩<span class="small">いろり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6246">爐<span class="small">いろり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4738">鑪<span class="small">いろり</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts41">
                <h3 class="ttl_while">いわ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="102">岩<span class="small">いわ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/3466">嵒<span class="small">いわ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14510">嵓<span class="small">いわ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2843">磐<span class="small">いわ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/2266">巌<span class="small">いわ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/5711">巖<span class="small">いわ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14596">巗<span class="small">いわ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/3453">岫<span class="small">いわあな</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="531">祝<span class="small">いわ（う）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6399">祝<span class="small">いわ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/3466">嵒<span class="small">いわお</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14510">嵓<span class="small">いわお</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/2266">巌<span class="small">いわお</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/5711">巖<span class="small">いわお</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14596">巗<span class="small">いわお</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4249">曰<span class="small">いわ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3887">鰛<span class="small">いわし</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/2160">鰯<span class="small">いわし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3886">鰮<span class="small">いわし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6921">鮇<span class="small">いわな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25937">窝<span class="small">いわや</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1985">窟<span class="small">いわや</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/5619">窩<span class="small">いわや</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="/2154">謂<span class="small">いわ（れ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="/5809">况<span class="small">いわ（んや）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1071">況<span class="small">いわ（んや）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts42">
                <h3 class="ttl_while">いん</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="6693">乚<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6026">廴<span class="small">イン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="081">引<span class="small">イン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="/2161">允<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="/3440">尹<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12702">冘<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12916">勻<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12917">匀<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14607">币<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13601">囙<span class="small">イン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="447">印<span class="small">イン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="642">因<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6688">㐆<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19766">㧈<span class="small">イン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="680">均<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7938">阴<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7939">阥<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13611">囩<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14730">弞<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15444">汮<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16356">狁<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18184">阭<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20476">㶣<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21922">䒞<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21925">䒡<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="25269">抣<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7937">侌<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="/11624">昀<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="/11759">䏖<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15154">枃<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16482">玧<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20554">㸒<span class="small">イン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="002">音<span class="small">イン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1609">姻<span class="small">イン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1947">咽<span class="small">イン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="/2163">胤<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5346">茵<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="/10306">畇<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12675">㽙<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15517">洇<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15528">洕<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17221">茚<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17757">貟<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19049">㘻<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19636">㤛<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19777">㧢<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23928">垔<span class="small">イン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="247">院<span class="small">イン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="248">員<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3557">恁<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4038">蚓<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5365">殷<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6233">氤<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15183">栶<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15342">欭<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15597">涒<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16053">烎<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16874">笉<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17234">荺<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19276">㝙<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21329">䇙<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="26369">荫<span class="small">イン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1015">陰<span class="small">イン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1948">淫<span class="small">イン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="/2162">寅<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="/3391">婬<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="/10026">裀<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13133">凐<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15194">梀<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16820">秵<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22331">䚿<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24271">䄄<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="26962">㣧<span class="small">イン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="249">飲<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="/3345">堙<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4392">湮<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7541">鈗<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7542">鈝<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7940">隂<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7946">陻<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9024">絪<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11126">愔<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12337">喑<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12560">傊<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14095">婣<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15651">淾<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15696">湚<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16890">筃<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18007">鈏<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18200">隌<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18201">隐<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19102">㚃<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21682">䍰<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21977">䓰<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22828">䤞<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="/3051">韵<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5194">隕<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6039">飮<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7284">靷<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8817">筠<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15350">歅<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15746">溳<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15748">溵<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17163">腪<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17294">蒑<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23150">䪳<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24024">滛<span class="small">イン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1014">隠<span class="small">イン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="/2164">蔭<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3598">慇<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4844">酳<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5305">殞<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6358">夤<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7611">銦<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="/10393">瘖<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10804">禋<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10922">窨<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10987">㥯<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14705">廕<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15016">摿<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15134">朄<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17335">蔩<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18334">馻<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19706">㥼<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21114">䃌<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21231">䅧<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22978">䧣<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7299">鞇<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7458">㱃<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7640">鋆<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9604">䕃<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10716">磤<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10717">磒<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12913">殥<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13932">奫<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16549">璌<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17019">緸<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19924">㪦<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22799">䣾<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23993">撢<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24133">蝹<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="27442">䨙<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6726">駰<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7387">頵<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8007">霒<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9098">縜<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="/10419">癊<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17683">諲<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18737">㒚<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22432">䜾<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22801">䤁<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22803">䤃<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22934">䦫<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6343">隱<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6927">鮣<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7889">闉<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8008">霠<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9113">縯<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9904">螾<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12262">檃<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13555">噾<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14584">嶾<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14891">懚<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15919">濥<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15920">濦<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19497">㡥<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="25823">瘾<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8012">霣<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="/9922">蟫<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15309">檼<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17375">藫<span class="small">イン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1608">韻<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3989">霪<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5492">贇<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18108">鏔<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23184">䫟<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17388">蘟<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18273">韽<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18274">韾<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19740">㦩<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20463">㶏<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21627">䌥<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12263">櫽<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18580">黫<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="/10454">癮<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18589">鼘<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23203">䫴<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7212">鷣<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8224">讔<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18591">鼝<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23008">䨉<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23047">䨸<span class="small">イン</span></a></li>
                    <li class="others_kanji onyomi"><a href="/2165">鸚<span class="small">イン</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2625">吋<span class="small">インチ</span></a></li>
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
                <div class="side_bnr link_pc">
                    <a href=""><img src="../images/2023_side_bnr.jpg" alt="今年の漢字"></a>
                </div>
                <div class="side_bnr link_sp">
                    <a href=""><img src="../images/2023_sp_bnr.jpg" alt="今年の漢字"></a>
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
                            <li><a href="">構成検索</a></li>
                            <li><a href="kyu">漢検の級（習う学年）から検索</a></li>
                            <li><a href="searchdetail">詳細検索</a></li>
                        </ul>
                    </div>
                    <!--togglebox-->
                </div>
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