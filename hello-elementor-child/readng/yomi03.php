<?php
/*
 * Template Name: Yomi3
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
            <h1 class="ttl_main">音訓検索「う」</h1>
            <aside>
                <div class="ads_wrapin link_pc">
                    <!-- 漢字辞典レスポンシブ１ -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3664445671894613" data-ad-slot="5169795341" data-ad-format="horizontal" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </aside>
            <p>「う」から始まる読み方をする漢字です。</p>
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
                        <option value="#" selected>う</option>
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
                    <li id="parts1_menu"><a href="#parts1">う</a></li>
                    <li id="parts2_menu"><a href="#parts2">うい</a></li>
                    <li id="parts3_menu"><a href="#parts3">うえ</a></li>
                    <li id="parts4_menu"><a href="#parts4">うお</a></li>
                    <li id="parts5_menu"><a href="#parts5">うか</a></li>
                    <li id="parts6_menu"><a href="#parts6">うき</a></li>
                    <li id="parts7_menu"><a href="#parts7">うく</a></li>
                    <li id="parts8_menu"><a href="#parts8">うけ</a></li>
                    <li id="parts9_menu"><a href="#parts9">うこ</a></li>
                    <li id="parts10_menu"><a href="#parts10">うさ</a></li>
                    <li id="parts11_menu"><a href="#parts11">うし</a></li>
                    <li id="parts12_menu"><a href="#parts12">うす</a></li>
                    <li id="parts13_menu"><a href="#parts13">うせ</a></li>
                    <li id="parts14_menu"><a href="#parts14">うそ</a></li>
                    <li id="parts15_menu"><a href="#parts15">うた</a></li>
                    <li id="parts16_menu"><a href="#parts16">うち</a></li>
                    <li id="parts17_menu"><a href="#parts17">うつ</a></li>
                    <li id="parts18_menu"><a href="#parts18">うて</a></li>
                    <li id="parts19_menu"><a href="#parts19">うと</a></li>
                    <li id="parts20_menu"><a href="#parts20">うな</a></li>
                    <li id="parts21_menu"><a href="#parts21">うね</a></li>
                    <li id="parts22_menu"><a href="#parts22">うは</a></li>
                    <li id="parts23_menu"><a href="#parts23">うふ</a></li>
                    <li id="parts24_menu"><a href="#parts24">うへ</a></li>
                    <li id="parts25_menu"><a href="#parts25">うま</a></li>
                    <li id="parts26_menu"><a href="#parts26">うみ</a></li>
                    <li id="parts27_menu"><a href="#parts27">うむ</a></li>
                    <li id="parts28_menu"><a href="#parts28">うめ</a></li>
                    <li id="parts29_menu"><a href="#parts29">うも</a></li>
                    <li id="parts30_menu"><a href="#parts30">うや</a></li>
                    <li id="parts31_menu"><a href="#parts31">うら</a></li>
                    <li id="parts32_menu"><a href="#parts32">うり</a></li>
                    <li id="parts33_menu"><a href="#parts33">うる</a></li>
                    <li id="parts34_menu"><a href="#parts34">うれ</a></li>
                    <li id="parts35_menu"><a href="#parts35">うろ</a></li>
                    <li id="parts36_menu"><a href="#parts36">うわ</a></li>
                    <li id="parts37_menu"><a href="#parts37">うん</a></li>
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
                <h3 class="ttl_while">う</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo onyomi"><a class="color1" href="1573">又<span class="small">ウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3060">于<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6703">亏<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6704">亐<span class="small">ウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="kanji/233">友<span class="small">ウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24194">㕛<span class="small">ウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="kanji/076">右<span class="small">ウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13221">叹<span class="small">ウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="kanji/082">羽<span class="small">ウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="kanji/423">有<span class="small">ウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="827">宇<span class="small">ウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1013">芋<span class="small">ウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3222">吁<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8627">邘<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9221">羽<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11272">扜<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13049">优<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13050">伛<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13636">圩<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13639">圬<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19126">㚥<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19302">㝼<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19507">㡰<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23992">扝<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24107">芌<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27811">𡧃<span class="small">ウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2166">佑<span class="small">ウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2169">迂<span class="small">ウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="8558">迃<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10111">玗<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11941">杅<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13950">妋<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14804">忧<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15462">沋<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18890">㕱<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19133">㚭<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19892">㪀<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20307">㲾<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20695">㺮<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25036">妪<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25236">怄<span class="small">ウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="kanji/003">雨<span class="small">ウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="3088">侑<span class="small">ウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="5563">盂<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16847">穻<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17531">衧<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19629">㤑<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21179">䄨<span class="small">ウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2168">胡<span class="small">ウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4302">禹<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4748">紆<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6185">挧<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8784">竽<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8994">䊸<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9426">荢<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9765">虶<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14020">姷<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14443">峟<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18189">陓<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20483">㶭<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21642">䍂<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21937">䒴<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22746">䣁<span class="small">ウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2167">烏<span class="small">ウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4035">桙<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17811">趶<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17976">酑<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20042">㭝<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20589">㸸<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22710">䢓<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7528">釪<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7992">雩<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12530">偊<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13748">埡<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16633">盓<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16787">祤<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17082">翑<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20951">䀁<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21274">䆜<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22502">䞛<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8675">鄅<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17272">萭<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19063">㙑<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19283">㝢<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21210">䅎<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21483">䊆<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23069">䩒<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3127">傴<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3286">嗚<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6078">塢<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6784">骬<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10183">瑀<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12126">楀<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14525">嵨<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14996">摀<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15740">溩<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22512">䞥<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3404">嫗<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13827">塸<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14872">慪<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15107">暡<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16186">熓<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17457">蝁<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20090">㮧<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20790">㼶<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23017">䨒<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23019">䨕<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23215">䬀<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17119">聥<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17473">蝺<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18281">頨<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21121">䃖<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22368">䛩<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22800">䣿<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9886">螐<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13541">噢<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21292">䆰<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22243">䙔<span class="small">ウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="991">優<span class="small">ウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4936">燠<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18487">鴮<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22681">䡧<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23027">䨞<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8190">謣<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13570">嚘<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15318">櫙<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17993">醧<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22105">䖚<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26516">藲<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20214">㱊<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22403">䜑<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23106">䩽<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7014">鰞<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17051">纋<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23705">䶚<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18450">鰸<span class="small">ウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3774">齲<span class="small">ウ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2919">卯<span class="small">う</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6073">夘<span class="small">う</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14900">戼<span class="small">う</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2757">鵜<span class="small">う</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts2">
                <h3 class="ttl_while">うい</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo onyomi"><a class="color1" href="kanji/096">外<span class="small">ウイ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="5339">茴<span class="small">ウイ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="533">初<span class="small">うい</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22879">䥚<span class="small">うい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10982">㤅<span class="small">う（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="10983">爱<span class="small">う（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19675">㥑<span class="small">う（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/440">愛<span class="small">う（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1578">憂<span class="small">う（い）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts3">
                <h3 class="ttl_while">うえ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="6589">丄<span class="small">うえ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/039">上<span class="small">うえ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="9447">荃<span class="small">うえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4527">筌<span class="small">うえ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1649">飢<span class="small">う（え）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1336">餓<span class="small">う（え）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5304">殍<span class="small">うえじに</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5304">殍<span class="small">うえじに（する）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26338">艺<span class="small">う（える）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/493">芸<span class="small">う（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25384">树<span class="small">う（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26636">㘽<span class="small">う（える）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1649">飢<span class="small">う（える）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1699">栽<span class="small">う（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5554">秧<span class="small">う（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26378">莳<span class="small">う（える）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/337">植<span class="small">う（える）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2475">蒔<span class="small">う（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24688">兿<span class="small">う（える）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="529">種<span class="small">う（える）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1336">餓<span class="small">う（える）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1616">稼<span class="small">う（える）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="895">樹<span class="small">う（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5283">餒<span class="small">う（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12097">㯰<span class="small">う（える）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="5784">藝<span class="small">う（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5292">饉<span class="small">う（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5296">饑<span class="small">う（える）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts4">
                <h3 class="ttl_while">うお</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="kanji/109">魚<span class="small">うお</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5589">罟<span class="small">うおあみ</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts5">
                <h3 class="ttl_while">うか</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="3297">嗽<span class="small">うがい</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="4419">漱<span class="small">うがい</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/15827">潄<span class="small">うがい</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1469">斥<span class="small">うかが（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1113">伺<span class="small">うかが（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3091">俔<span class="small">うかが（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11587">㡿<span class="small">うかが（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/500">候<span class="small">うかが（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12476">悓<span class="small">うかが（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1831">偵<span class="small">うかが（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/100">間<span class="small">うかが（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2476">覗<span class="small">うかが（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5457">覘<span class="small">うかが（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7868">閒<span class="small">うかが（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5525">遉<span class="small">うかが（う）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2280">窺<span class="small">うかが（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2742">諜<span class="small">うかが（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3970">闖<span class="small">うかが（う）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2638">穿<span class="small">うが（つ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/21282">䆤<span class="small">うが（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24719">凿<span class="small">うが（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7829">鎸<span class="small">うが（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4732">鐫<span class="small">うが（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22886">䥣<span class="small">うが（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4744">鑚<span class="small">うが（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4743">鑽<span class="small">うが（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4746">鑿<span class="small">うが（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3517">弋<span class="small">う（かぶ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="2089">汎<span class="small">う（かぶ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4330">泛<span class="small">う（かぶ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1253">浮<span class="small">う（かぶ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4455">瀲<span class="small">う（かぶ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4330">泛<span class="small">う（かべる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1253">浮<span class="small">う（かべる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1585">濫<span class="small">う（かべる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/319">受<span class="small">う（かる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1253">浮<span class="small">う（かれる）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts6">
                <h3 class="ttl_while">うき</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="5334">苹<span class="small">うきくさ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/21956">䓑<span class="small">うきくさ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5377">萍<span class="small">うきくさ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="9720">薲<span class="small">うきくさ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5443">蘋<span class="small">うきくさ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3893">鰾<span class="small">うきぶくろ</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts7">
                <h3 class="ttl_while">うく</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1253">浮<span class="small">う（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3866">鯏<span class="small">うぐい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6949">鯎<span class="small">うぐい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2200">鴬<span class="small">うぐいす</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2199">鶯<span class="small">うぐいす</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7185">鸎<span class="small">うぐいす</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts8">
                <h3 class="ttl_while">うけ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="735">承<span class="small">うけたまわ（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1560">奉<span class="small">うけたまわ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3999">朮<span class="small">うけら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11933">术<span class="small">うけら</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3056">丕<span class="small">う（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/18845">㔻<span class="small">う（ける）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/319">受<span class="small">う（ける）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="735">承<span class="small">う（ける）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1657">享<span class="small">う（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6721">亯<span class="small">う（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25633">飨<span class="small">う（ける）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="5557">稟<span class="small">う（ける）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5558">禀<span class="small">う（ける）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="823">領<span class="small">う（ける）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1466">請<span class="small">う（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4309">膺<span class="small">う（ける）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2324">饗<span class="small">う（ける）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts9">
                <h3 class="ttl_while">うこ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="4002">朶<span class="small">うご（かす）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11935">朵<span class="small">うご（かす）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24734">动<span class="small">うご（かす）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11936">䒳<span class="small">うご（かす）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/383">動<span class="small">うご（かす）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11491">㨔<span class="small">うご（かす）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2799">蕩<span class="small">うご（かす）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3726">撼<span class="small">うご（かす）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5569">盪<span class="small">うご（かす）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5570">蘯<span class="small">うご（かす）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24734">动<span class="small">うご（く）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/383">動<span class="small">うご（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26838">跄<span class="small">うご（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24246">㴞<span class="small">うご（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4410">滔<span class="small">うご（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2799">蕩<span class="small">うご（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4278">蹌<span class="small">うご（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5569">盪<span class="small">うご（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4109">蠕<span class="small">うご（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4292">躁<span class="small">うご（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5570">蘯<span class="small">うご（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4109">蠕<span class="small">うごめ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4111">蠢<span class="small">うごめ（く）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts10">
                <h3 class="ttl_while">うさ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="jimmei kunyomi"><a class="color2" href="2776">兎<span class="small">うさぎ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2777">兔<span class="small">うさぎ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2781">莵<span class="small">うさぎ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2780">菟<span class="small">うさぎ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5587">罘<span class="small">うさぎあみ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6778">馿<span class="small">うさぎうま</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4516">驢<span class="small">うさぎうま</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts11">
                <h3 class="ttl_while">うし</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="kanji/108">牛<span class="small">うし</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2723">丑<span class="small">うし</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6591">丒<span class="small">うし</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="519">氏<span class="small">うじ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4062">蛆<span class="small">うじ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2630">汐<span class="small">うしお</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="948">潮<span class="small">うしお</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2429">艮<span class="small">うしとら</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19960">㫔<span class="small">うしとら</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="984">亡<span class="small">うしな（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6718">兦<span class="small">うしな（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6719">亾<span class="small">うしな（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="527">失<span class="small">うしな（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3075">佚<span class="small">うしな（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24532">丧<span class="small">うしな（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22214">䘮<span class="small">うしな（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1607">逸<span class="small">うしな（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1798">喪<span class="small">うしな（う）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6416">逸<span class="small">うしな（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26279">逸<span class="small">うしな（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5194">隕<span class="small">うしな（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="965">背<span class="small">うしろ</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/125">後<span class="small">うし（ろ）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts12">
                <h3 class="ttl_while">うす</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1978">臼<span class="small">うす</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25863">硙<span class="small">うす</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2692">碓<span class="small">うす</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4665">磑<span class="small">うす</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4667">碾<span class="small">うす</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25535">涡<span class="small">うず</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1619">渦<span class="small">うず</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="5745">凉<span class="small">うす（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1183">淡<span class="small">うす（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1930">涼<span class="small">うす（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3122">偸<span class="small">うす（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5375">菲<span class="small">うす（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12549">偷<span class="small">うす（い）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2279">稀<span class="small">うす（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4422">漓<span class="small">うす（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4430">澆<span class="small">うす（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1230">薄<span class="small">うす（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4436">澹<span class="small">うす（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5220">疼<span class="small">うず（き）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/17060">罗<span class="small">うすぎぬ</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2436">紗<span class="small">うすぎぬ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4753">絅<span class="small">うすぎぬ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="9043">綗<span class="small">うすぎぬ</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1920">羅<span class="small">うすぎぬ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4816">繻<span class="small">うすぎぬ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5220">疼<span class="small">うず（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4271">踞<span class="small">うずくま（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4288">蹲<span class="small">うずくま（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4444">濛<span class="small">うすぐら（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/13705">垖<span class="small">うずたか（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="2053">堆<span class="small">うずたか（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9311">㫪<span class="small">うすづ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5628">舂<span class="small">うすづ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/27845">𣇃<span class="small">うすづ（く）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2811">巴<span class="small">うずまき</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4426">潘<span class="small">うずまき</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1230">薄<span class="small">うす（まる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1571">埋<span class="small">うず（まる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2068">填<span class="small">うず（まる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="6469">塡<span class="small">うず（まる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4922">熄<span class="small">うずみび</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1230">薄<span class="small">うす（める）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3345">堙<span class="small">うず（める）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2068">填<span class="small">うず（める）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="6469">塡<span class="small">うず（める）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1571">埋<span class="small">うず（もれる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3345">堙<span class="small">うず（もれる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19259">㝇<span class="small">うずら</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3817">鶉<span class="small">うずら</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1230">薄<span class="small">うす（らぐ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1230">薄<span class="small">うす（れる）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts13">
                <h3 class="ttl_while">うせ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="527">失<span class="small">う（せる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4462">軼<span class="small">う（せる）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts14">
                <h3 class="ttl_while">うそ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="2307">嘘<span class="small">うそ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6473">噓<span class="small">うそ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3839">鷽<span class="small">うそ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24914">啸<span class="small">うそぶ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/13506">嘨<span class="small">うそぶ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3305">嘯<span class="small">うそぶ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/15354">歗<span class="small">うそぶ（く）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts15">
                <h3 class="ttl_while">うた</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="3232">咏<span class="small">うた</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1949">唄<span class="small">うた</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3256">哥<span class="small">うた</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="534">唱<span class="small">うた</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26606">㗑<span class="small">うた</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/304">詩<span class="small">うた</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/090">歌<span class="small">うた</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="8159">誯<span class="small">うた</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3045">謌<span class="small">うた</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4998">謳<span class="small">うた</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22327">䚺<span class="small">うたい</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1296">謡<span class="small">うたい</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6316">謠<span class="small">うたい</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1665">吟<span class="small">うた（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/13264">呕<span class="small">うた（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3232">咏<span class="small">うた（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1949">唄<span class="small">うた（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3256">哥<span class="small">うた（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3257">哦<span class="small">うた（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="534">唱<span class="small">うた（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/17636">訡<span class="small">うた（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22327">䚺<span class="small">うた（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1322">詠<span class="small">うた（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26606">㗑<span class="small">うた（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/090">歌<span class="small">うた（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3293">嘔<span class="small">うた（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="8159">誯<span class="small">うた（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/13533">噖<span class="small">うた（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1296">謡<span class="small">うた（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3045">謌<span class="small">うた（う）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6316">謠<span class="small">うた（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4998">謳<span class="small">うた（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3061">弍<span class="small">うたが（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5111">猜<span class="small">うたが（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1674">嫌<span class="small">うたが（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="846">疑<span class="small">うたが（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="846">疑<span class="small">うたぐ（る）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1326">宴<span class="small">うたげ</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/374">転<span class="small">うた（た）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6047">轉<span class="small">うた（た）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12067">梲<span class="small">うだち</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12067">梲<span class="small">うだつ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5345">茹<span class="small">う（だる）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts16">
                <h3 class="ttl_while">うち</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="kanjiy/19771">㧒<span class="small">ウチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14840">惌<span class="small">ウチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21010">䁌<span class="small">ウチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23231">䬑<span class="small">ウチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23663">䵥<span class="small">ウチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23669">䵫<span class="small">ウチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15996">灪<span class="small">ウチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16275">爩<span class="small">ウチ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/059">中<span class="small">うち</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/206">内<span class="small">うち</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12696">內<span class="small">うち</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1815">衷<span class="small">うち</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/086">家<span class="small">うち</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2971">裡<span class="small">うち</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="999">裏<span class="small">うち</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5036">袿<span class="small">うちかけ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26563">裆<span class="small">うちかけ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5045">褂<span class="small">うちかけ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5047">裲<span class="small">うちかけ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5066">襠<span class="small">うちかけ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5036">袿<span class="small">うちぎ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3917">晤<span class="small">うちと（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4769">絛<span class="small">うちひも</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="9049">縧<span class="small">うちひも</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4947">訌<span class="small">うちわも（め）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts17">
                <h3 class="ttl_while">うつ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="jimmei onyomi"><a class="color2" href="2170">苑<span class="small">ウツ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19771">㧒<span class="small">ウツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13217">叞<span class="small">ウツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1606">尉<span class="small">ウツ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="9493">菀<span class="small">ウツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14840">惌<span class="small">ウツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20505">㷉<span class="small">ウツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16156">煨<span class="small">ウツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2153">蔚<span class="small">ウツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21010">䁌<span class="small">ウツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4923">熨<span class="small">ウツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23231">䬑<span class="small">ウツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23663">䵥<span class="small">ウツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23669">䵫<span class="small">ウツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25423">欎<span class="small">ウツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3030">欝<span class="small">ウツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18408">鬰<span class="small">ウツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1950">鬱<span class="small">ウツ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19445">㠨<span class="small">ウツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15996">灪<span class="small">ウツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24318">䖇<span class="small">ウツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16275">爩<span class="small">ウツ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5733">攵<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5734">攴<span class="small">う（つ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/354">打<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24716">击<span class="small">う（つ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1530">伐<span class="small">う（つ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="972">批<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3667">抃<span class="small">う（つ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1160">征<span class="small">う（つ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1195">抵<span class="small">う（つ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1228">拍<span class="small">う（つ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1328">殴<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3675">拊<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14923">拞<span class="small">う（つ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1692">拷<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3680">挌<span class="small">う（つ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="663">格<span class="small">う（つ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="892">射<span class="small">う（つ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="955">討<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12195">桘<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/27838">𢭏<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3647">戛<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3694">捶<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14950">捯<span class="small">う（つ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="2063">椎<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3648">戞<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12393">傠<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22638">䠶<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3714">搗<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3715">搏<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4962">誅<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14788">徰<span class="small">う（つ）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2748">槌<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19842">㨶<span class="small">う（つ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1080">撃<span class="small">う（つ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1896">撲<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6231">毆<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3730">擂<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/15033">擈<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3735">擣<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4309">膺<span class="small">う（つ）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6438">擊<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3739">擽<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11503">攂<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11514">攊<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4727">鏗<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3833">鷙<span class="small">う（つ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6123">棯<span class="small">うつぎ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3362">夭<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3381">妍<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2392">佼<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/398">美<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2138">娃<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3366">奕<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3384">姚<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6486">姸<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14007">姢<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3110">倩<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3385">娥<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3386">娟<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3392">婉<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4252">曼<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5113">猗<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3397">媚<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4768">綉<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="9831">蜎<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11747">㬅<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4353">韶<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="4771">綺<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/17326">蔅<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2643">蝉<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22456">䝝<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2515">繍<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6459">蟬<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6454">繡<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4735">鑠<span class="small">うつく（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="8468">躻<span class="small">うつけ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/013">空<span class="small">うつ（ける）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1371">虚<span class="small">うつ（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="9749">虗<span class="small">うつ（ける）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6458">虛<span class="small">うつ（ける）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4687">鈔<span class="small">うつ（し）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/312">写<span class="small">うつ（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19264">㝍<span class="small">うつ（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1747">抄<span class="small">うつ（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="8618">迁<span class="small">うつ（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/21183">䄬<span class="small">うつ（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="828">映<span class="small">うつ（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="8619">拪<span class="small">うつ（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="8579">迻<span class="small">うつ（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="641">移<span class="small">うつ（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3533">徙<span class="small">うつ（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4687">鈔<span class="small">うつ（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6210">暎<span class="small">うつ（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2830">摸<span class="small">うつ（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3717">搨<span class="small">うつ（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26579">誊<span class="small">うつ（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5664">冩<span class="small">うつ（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1788">遷<span class="small">うつ（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6118">寫<span class="small">うつ（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="816">輸<span class="small">うつ（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1843">謄<span class="small">うつ（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22729">䢬<span class="small">うつ（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1754">訟<span class="small">うった（え）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22366">䛦<span class="small">うった（え）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1754">訟<span class="small">うった（える）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1167">訴<span class="small">うった（える）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1410">獄<span class="small">うった（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3604">愬<span class="small">うった（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22366">䛦<span class="small">うった（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4978">諍<span class="small">うった（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5007">譛<span class="small">うった（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5006">譖<span class="small">うった（える）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="690">現<span class="small">うつつ</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2982">梁<span class="small">うつばり</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12225">樑<span class="small">うつばり</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3113">俯<span class="small">うつぶ（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6101">笂<span class="small">うつぼ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2608">靱<span class="small">うつぼ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2609">靭<span class="small">うつぼ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5082">靫<span class="small">うつぼ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7057">䱇<span class="small">うつぼ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7056">鱓<span class="small">うつぼ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3113">俯<span class="small">うつむ（く）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/312">写<span class="small">うつ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19264">㝍<span class="small">うつ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="8618">迁<span class="small">うつ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/21183">䄬<span class="small">うつ（る）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="828">映<span class="small">うつ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="8619">拪<span class="small">うつ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="8579">迻<span class="small">うつ（る）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/374">転<span class="small">うつ（る）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="641">移<span class="small">うつ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3533">徙<span class="small">うつ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6210">暎<span class="small">うつ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5664">冩<span class="small">うつ（る）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1788">遷<span class="small">うつ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6118">寫<span class="small">うつ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22729">䢬<span class="small">うつ（る）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6047">轉<span class="small">うつ（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1844">洞<span class="small">うつろ</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/013">空<span class="small">うつ（ろ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1371">虚<span class="small">うつ（ろ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="9749">虗<span class="small">うつ（ろ）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6458">虛<span class="small">うつ（ろ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/475">器<span class="small">うつわ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6057">噐<span class="small">うつわ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6379">器<span class="small">うつわ</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts18">
                <h3 class="ttl_while">うて</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="11394">捥<span class="small">うで</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1319">腕<span class="small">うで</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4244">膊<span class="small">うで</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4308">臂<span class="small">うで</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11856">䯛<span class="small">うで</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/183">台<span class="small">うてな</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/13678">坮<span class="small">うてな</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4026">柎<span class="small">うてな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4254">趺<span class="small">うてな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5382">萼<span class="small">うてな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5410">蒂<span class="small">うてな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/21867">䑓<span class="small">うてな</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5409">蔕<span class="small">うてな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6293">臺<span class="small">うてな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6301">蕚<span class="small">うてな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19090">㙵<span class="small">うてな</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3966">闍<span class="small">うてな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/27750">𠈓<span class="small">うでまえ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24584">俩<span class="small">うでまえ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3115">倆<span class="small">うでまえ</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2646">釧<span class="small">うでわ</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts19">
                <h3 class="ttl_while">うと</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1791">疎<span class="small">うと（い）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2544">疏<span class="small">うと（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6106">踈<span class="small">うと（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="10339">䟽<span class="small">うと（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/27453">䦢<span class="small">うと（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3963">闊<span class="small">うと（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3964">濶<span class="small">うと（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/27891">𤄃<span class="small">うと（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1791">疎<span class="small">うと（む）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2544">疏<span class="small">うと（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6106">踈<span class="small">うと（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="10339">䟽<span class="small">うと（む）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts20">
                <h3 class="ttl_while">うな</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="4643">髫<span class="small">うない</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1484">促<span class="small">うなが（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/17792">趋<span class="small">うなが（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1415">催<span class="small">うなが（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1845">督<span class="small">うなが（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1126">趣<span class="small">うなが（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2501">趨<span class="small">うなが（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2847">鰻<span class="small">うなぎ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26027">魇<span class="small">うな（される）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/20221">㱘<span class="small">うな（される）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3951">魘<span class="small">うな（される）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1101">項<span class="small">うなじ</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="823">領<span class="small">うなじ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11764">肎<span class="small">うなず（く）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1684">肯<span class="small">うなず（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11765">肻<span class="small">うなず（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5138">頷<span class="small">うなず（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3272">唸<span class="small">うな（り）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3239">呻<span class="small">うな（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3272">唸<span class="small">うな（る）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts21">
                <h3 class="ttl_while">うね</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="10317">㽗<span class="small">うね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24548">亩<span class="small">うね</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2008">采<span class="small">うね</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5955">畆<span class="small">うね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10315">畒<span class="small">うね</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1775">畝<span class="small">うね</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="10316">畞<span class="small">うね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2353">畦<span class="small">うね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5454">畴<span class="small">うね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10318">畮<span class="small">うね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3357">壟<span class="small">うね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5198">隴<span class="small">うね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5453">疇<span class="small">うね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/20836">㽯<span class="small">うね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14071">婇<span class="small">うねべ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14071">婇<span class="small">うねめ</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts22">
                <h3 class="ttl_while">うは</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="3378">姆<span class="small">うば</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2903">姥<span class="small">うば</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14152">媪<span class="small">うば</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3398">媼<span class="small">うば</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25027">夺<span class="small">うば（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5630">虔<span class="small">うば（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4304">鹵<span class="small">うば（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1496">奪<span class="small">うば（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5057">褫<span class="small">うば（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6509">篡<span class="small">うば（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3215">簒<span class="small">うば（う）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts23">
                <h3 class="ttl_while">うふ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="kanji/043">生<span class="small">うぶ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24547">产<span class="small">うぶ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="533">初<span class="small">うぶ</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="517">産<span class="small">うぶ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="10291">產<span class="small">うぶ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22879">䥚<span class="small">うぶ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts24">
                <h3 class="ttl_while">うへ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="11764">肎<span class="small">うべな（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1684">肯<span class="small">うべな（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11765">肻<span class="small">うべな（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1495">諾<span class="small">うべな（う）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts25">
                <h3 class="ttl_while">うま</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="kanji/124">午<span class="small">うま</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/209">馬<span class="small">うま</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1038">甘<span class="small">うま（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1404">巧<span class="small">うま（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1117">旨<span class="small">うま（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11619">㫖<span class="small">うま（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/21872">䑚<span class="small">うま（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2769">甜<span class="small">うま（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="10289">甛<span class="small">うま（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5402">蔗<span class="small">うま（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3327">圉<span class="small">うまかい</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5542">站<span class="small">うまつぎ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="10461">皁<span class="small">うまや</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="10462">皂<span class="small">うまや</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25372">枥<span class="small">うまや</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/252">駅<span class="small">うまや</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2297">厩<span class="small">うまや</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2298">廐<span class="small">うまや</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2299">廏<span class="small">うまや</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2558">厰<span class="small">うまや</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2557">廠<span class="small">うまや</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4208">櫪<span class="small">うまや</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6352">驛<span class="small">うまや</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1571">埋<span class="small">う（まる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/043">生<span class="small">う（まれる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24547">产<span class="small">う（まれる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="517">産<span class="small">う（まれる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="10291">產<span class="small">う（まれる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="941">誕<span class="small">う（まれる）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts26">
                <h3 class="ttl_while">うみ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="kanji/094">海<span class="small">うみ</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/428">洋<span class="small">うみ</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6388">海<span class="small">うみ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26314">脓<span class="small">うみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4413">溟<span class="small">うみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2802">膿<span class="small">うみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4451">瀛<span class="small">うみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25606">灜<span class="small">うみ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts27">
                <h3 class="ttl_while">うむ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="kanji/043">生<span class="small">う（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24547">产<span class="small">う（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12683">免<span class="small">う（む）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1576">免<span class="small">う（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6065">劵<span class="small">う（む）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2363">倦<span class="small">う（む）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2898">娩<span class="small">う（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26314">脓<span class="small">う（む）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="517">産<span class="small">う（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3579">惓<span class="small">う（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="10291">產<span class="small">う（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3425">孳<span class="small">う（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6510">孶<span class="small">う（む）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="903">熟<span class="small">う（む）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="751">績<span class="small">う（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2802">膿<span class="small">う（む）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts28">
                <h3 class="ttl_while">うめ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="590">梅<span class="small">うめ</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6387">梅<span class="small">うめ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2822">楳<span class="small">うめ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12043">槑<span class="small">うめ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1665">吟<span class="small">うめ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3239">呻<span class="small">うめ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/17636">訡<span class="small">うめ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/13533">噖<span class="small">うめ（く）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1571">埋<span class="small">う（める）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts29">
                <h3 class="ttl_while">うも</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1571">埋<span class="small">う（もれる）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts30">
                <h3 class="ttl_while">うや</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1659">恭<span class="small">うやうや（しい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/435">礼<span class="small">うやま（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26267">礼<span class="small">うやま（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="853">敬<span class="small">うやま（う）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2331">欽<span class="small">うやま（う）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6014">禮<span class="small">うやま（う）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts31">
                <h3 class="ttl_while">うら</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="kanji/165">心<span class="small">うら</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="614">末<span class="small">うら</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1889">浦<span class="small">うら</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2971">裡<span class="small">うら</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="999">裏<span class="small">うら</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2926">卜<span class="small">うらな（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="570">兆<span class="small">うらな（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2204">卦<span class="small">うらな（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4536">筮<span class="small">うらな（い）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2926">卜<span class="small">うらな（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1165">占<span class="small">うらな（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6696">乩<span class="small">うらな（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2204">卦<span class="small">うらな（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4536">筮<span class="small">うらな（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1951">怨<span class="small">うら（み）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19647">㤪<span class="small">うら（み）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11184">㤇<span class="small">うら（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3553">怏<span class="small">うら（む）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1413">恨<span class="small">うら（む）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1951">怨<span class="small">うら（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="10965">㤬<span class="small">うら（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3556">恚<span class="small">うら（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19647">㤪<span class="small">うら（む）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="612">望<span class="small">うら（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3583">惆<span class="small">うら（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3584">悵<span class="small">うら（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11147">愠<span class="small">うら（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3597">慍<span class="small">うら（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5086">鞅<span class="small">うら（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11832">朢<span class="small">うら（む）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1647">憾<span class="small">うら（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3626">懊<span class="small">うら（む）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1413">恨<span class="small">うら（めしい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2038">羨<span class="small">うらや（ましい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26336">艳<span class="small">うらや（む）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="2038">羨<span class="small">うらや（む）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1953">艶<span class="small">うらや（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6296">艷<span class="small">うらや（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="9356">豓<span class="small">うらや（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="9357">豔<span class="small">うらや（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/23889">丽<span class="small">うら（ら）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14103">婯<span class="small">うら（ら）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7253">䴡<span class="small">うら（ら）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1309">麗<span class="small">うら（ら）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/23889">丽<span class="small">うら（らか）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14103">婯<span class="small">うら（らか）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7253">䴡<span class="small">うら（らか）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1309">麗<span class="small">うら（らか）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts32">
                <h3 class="ttl_while">うり</h3>
                <ul class="search_parts yomi_parts">
                    <li class="jimmei kunyomi"><a class="color2" href="2210">瓜<span class="small">うり</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="8991">粜<span class="small">うりよね</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5277">糶<span class="small">うりよね</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts33">
                <h3 class="ttl_while">うる</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="kanji/211">売<span class="small">う（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3076">估<span class="small">う（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4334">沽<span class="small">う（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19299">㝶<span class="small">う（る）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="584">得<span class="small">う（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3267">售<span class="small">う（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5582">衒<span class="small">う（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="8991">粜<span class="small">う（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5482">賈<span class="small">う（る）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6326">賣<span class="small">う（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5277">糶<span class="small">う（る）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2538">閏<span class="small">うるう</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6338">閠<span class="small">うるう</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22924">䦞<span class="small">うるう</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1429">湿<span class="small">うるお（い）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2142">渥<span class="small">うるお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/15752">溼<span class="small">うるお（い）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="5835">濕<span class="small">うるお（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1177">沢<span class="small">うるお（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4329">沐<span class="small">うるお（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4342">沾<span class="small">うるお（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/13127">冾<span class="small">うるお（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4344">洽<span class="small">うるお（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/15555">浃<span class="small">うるお（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4373">浹<span class="small">うるお（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/15666">渪<span class="small">うるお（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1435">潤<span class="small">うるお（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3985">霑<span class="small">うるお（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5794">澤<span class="small">うるお（う）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2503">濡<span class="small">うるお（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4342">沾<span class="small">うるお（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/13127">冾<span class="small">うるお（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4344">洽<span class="small">うるお（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/15555">浃<span class="small">うるお（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4373">浹<span class="small">うるお（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4380">涵<span class="small">うるお（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1429">湿<span class="small">うるお（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/15752">溼<span class="small">うるお（す）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2411">膏<span class="small">うるお（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1435">潤<span class="small">うるお（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3985">霑<span class="small">うるお（す）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="5835">濕<span class="small">うるお（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1865">煩<span class="small">うるさ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11998">柒<span class="small">うるし</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1713">漆<span class="small">うるし</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="10830">秔<span class="small">うるち</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6273">粫<span class="small">うるち</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8960">稉<span class="small">うるち</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5266">粳<span class="small">うるち</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1435">潤<span class="small">うる（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/23889">丽<span class="small">うるわ（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14103">婯<span class="small">うるわ（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2869">斌<span class="small">うるわ（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7253">䴡<span class="small">うるわ（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19717">㦉<span class="small">うるわ（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/20209">㱅<span class="small">うるわ（しい）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1309">麗<span class="small">うるわ（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11019">㦤<span class="small">うるわ（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3638">懿<span class="small">うるわ（しい）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts34">
                <h3 class="ttl_while">うれ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="3567">恙<span class="small">うれ（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1637">患<span class="small">うれ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19675">㥑<span class="small">うれ（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1724">愁<span class="small">うれ（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1578">憂<span class="small">うれ（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1169">騒<span class="small">うれ（い）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6350">騷<span class="small">うれ（い）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2196">邑<span class="small">うれ（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6540">卹<span class="small">うれ（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26355">茕<span class="small">うれ（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3366">奕<span class="small">うれ（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3563">恤<span class="small">うれ（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11074">䘏<span class="small">うれ（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3572">悄<span class="small">うれ（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3575">悒<span class="small">うれ（える）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1637">患<span class="small">うれ（える）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="2036">戚<span class="small">うれ（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/20497">㷀<span class="small">うれ（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3945">閔<span class="small">うれ（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/16116">焭<span class="small">うれ（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19675">㥑<span class="small">うれ（える）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1724">愁<span class="small">うれ（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3595">愍<span class="small">うれ（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4916">煢<span class="small">うれ（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="8297">賉<span class="small">うれ（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/18729">㒌<span class="small">うれ（える）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1578">憂<span class="small">うれ（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3623">憫<span class="small">うれ（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3629">懆<span class="small">うれ（える）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2273">嬉<span class="small">うれ（しい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/211">売<span class="small">う（れる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="903">熟<span class="small">う（れる）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6326">賣<span class="small">う（れる）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts35">
                <h3 class="ttl_while">うろ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="kanji/013">空<span class="small">うろ</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1844">洞<span class="small">うろ</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1371">虚<span class="small">うろ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="9749">虗<span class="small">うろ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1791">疎<span class="small">うろ</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6458">虛<span class="small">うろ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6106">踈<span class="small">うろ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2993">鱗<span class="small">うろこ</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts36">
                <h3 class="ttl_while">うわ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="6589">丄<span class="small">うわ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/039">上<span class="small">うわ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5033">袍<span class="small">うわぎ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5055">褞<span class="small">うわぎ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5466">釉<span class="small">うわぐすり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24781">呓<span class="small">うわごと</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5008">譫<span class="small">うわごと</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3322">囈<span class="small">うわごと</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2675">噂<span class="small">うわさ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5707">嫐<span class="small">うわなり</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4101">蟒<span class="small">うわばみ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4102">蠎<span class="small">うわばみ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4131">椁<span class="small">うわひつぎ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4184">槨<span class="small">うわひつぎ</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="kanji/337">植<span class="small">う（わる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12097">㯰<span class="small">う（わる）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts37">
                <h3 class="ttl_while">うん</h3>
                <ul class="search_parts yomi_parts">
                    <li class="jimmei onyomi"><a class="color2" href="2171">云<span class="small">ウン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="kanji/493">芸<span class="small">ウン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="680">均<span class="small">ウン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3223">吽<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8684">䢵<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11279">抎<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13262">呍<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13611">囩<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13960">妘<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15456">沄<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8561">运<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15154">枃<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15157">枟<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16645">眃<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16808">秐<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17757">貟<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21326">䇖<span class="small">ウン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="kanji/248">員<span class="small">ウン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3940">耘<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4752">紜<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9275">耺<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9493">菀<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27091">酝<span class="small">ウン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="kanji/083">雲<span class="small">ウン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="kanji/250">運<span class="small">ウン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="kanji/256">温<span class="small">ウン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="8676">鄆<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11127">惲<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11147">愠<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12560">傊<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14978">揾<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17291">蒀<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19102">㚃<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19390">㟦<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3597">慍<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3922">暈<span class="small">ウン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6447">溫<span class="small">ウン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="8683">鄖<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9576">蒕<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11148">愪<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15412">氲<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15746">溳<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16135">煇<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16165">煴<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17163">腪<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17311">蒷<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19211">㜏<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15413">氳<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16175">熅<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16178">熉<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5055">褞<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7088">䲰<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9100">緼<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9639">蕓<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15870">澐<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17018">緷<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21289">䆬<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22671">䡝<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24124">蕰<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24133">蝹<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26511">蕴<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5423">薀<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8315">賱<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8867">篔<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9099">縕<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12229">橒<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17903">輼<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17987">醖<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8757">醞<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22287">䚋<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23088">䩩<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4805">繧<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7487">餫<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18261">鞰<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21441">䉙<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23098">䩵<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24129">藴<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24173">馧<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5289">饂<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5438">蘊<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7350">韗<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23184">䫟<span class="small">ウン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7354">韞<span class="small">ウン</span></a></li>
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
                                <li><a href="kanji/059" title="漢字「中」のページ"><span class="rank">1</span><span class="jp">中</span></a></li>
                                <li><a href="kanji/190" title="漢字「長」のページ"><span class="rank">6</span><span class="jp">長</span></a></li>
                                <li><a href="kanji/136" title="漢字「国」のページ"><span class="rank">2</span><span class="jp">国</span></a></li>
                                <li><a href="kanji/252" title="漢字「駅」のページ"><span class="rank">7</span><span class="jp">駅</span></a></li>
                                <li><a href="kanji/071" title="漢字「本」のページ"><span class="rank">3</span><span class="jp">本</span></a></li>
                                <li><a href="671" title="漢字「寄」のページ"><span class="rank">8</span><span class="jp">寄</span></a></li>
                                <li><a href="kanji/086" title="漢字「家」のページ"><span class="rank">4</span><span class="jp">家</span></a></li>
                                <li><a href="kanji/114" title="漢字「兄」のページ"><span class="rank">9</span><span class="jp">兄</span></a></li>
                                <li><a href="775" title="漢字「提」のページ"><span class="rank">5</span><span class="jp">提</span></a></li>
                                <li><a href="kanjiy/12934" title="漢字「殺」のページ"><span class="rank">10</span><span class="jp">殺</span></a></li>
                            </ul>
                        </div>
                        <!--ChangeElem_Panel2-->
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
                        </div>
                        <!--ChangeElem_Panel2-->
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