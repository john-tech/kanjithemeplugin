<?php
/*
 * Template Name: Yomi8
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
            <h1 class="ttl_main">音訓検索「く」</h1>
            <aside>
                <div class="ads_wrapin link_pc">

                    <!-- 漢字辞典レスポンシブ１ -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3664445671894613" data-ad-slot="5169795341" data-ad-format="horizontal" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </aside>
            <p>「く」から始まる読み方をする漢字です。</p>
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
                        <option value="#" selected>く</option>
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
                    <li id="parts1_menu"><a href="#parts1">く</a></li>
                    <li id="parts2_menu"><a href="#parts2">くい</a></li>
                    <li id="parts3_menu"><a href="#parts3">くう</a></li>
                    <li id="parts4_menu"><a href="#parts4">くか</a></li>
                    <li id="parts5_menu"><a href="#parts5">くき</a></li>
                    <li id="parts6_menu"><a href="#parts6">くく</a></li>
                    <li id="parts7_menu"><a href="#parts7">くけ</a></li>
                    <li id="parts8_menu"><a href="#parts8">くこ</a></li>
                    <li id="parts9_menu"><a href="#parts9">くさ</a></li>
                    <li id="parts10_menu"><a href="#parts10">くし</a></li>
                    <li id="parts11_menu"><a href="#parts11">くす</a></li>
                    <li id="parts12_menu"><a href="#parts12">くせ</a></li>
                    <li id="parts13_menu"><a href="#parts13">くそ</a></li>
                    <li id="parts14_menu"><a href="#parts14">くた</a></li>
                    <li id="parts15_menu"><a href="#parts15">くち</a></li>
                    <li id="parts16_menu"><a href="#parts16">くつ</a></li>
                    <li id="parts17_menu"><a href="#parts17">くて</a></li>
                    <li id="parts18_menu"><a href="#parts18">くと</a></li>
                    <li id="parts19_menu"><a href="#parts19">くに</a></li>
                    <li id="parts20_menu"><a href="#parts20">くぬ</a></li>
                    <li id="parts21_menu"><a href="#parts21">くは</a></li>
                    <li id="parts22_menu"><a href="#parts22">くひ</a></li>
                    <li id="parts23_menu"><a href="#parts23">くへ</a></li>
                    <li id="parts24_menu"><a href="#parts24">くほ</a></li>
                    <li id="parts25_menu"><a href="#parts25">くま</a></li>
                    <li id="parts26_menu"><a href="#parts26">くみ</a></li>
                    <li id="parts27_menu"><a href="#parts27">くむ</a></li>
                    <li id="parts28_menu"><a href="#parts28">くめ</a></li>
                    <li id="parts29_menu"><a href="#parts29">くも</a></li>
                    <li id="parts30_menu"><a href="#parts30">くや</a></li>
                    <li id="parts31_menu"><a href="#parts31">くゆ</a></li>
                    <li id="parts32_menu"><a href="#parts32">くら</a></li>
                    <li id="parts33_menu"><a href="#parts33">くり</a></li>
                    <li id="parts34_menu"><a href="#parts34">くる</a></li>
                    <li id="parts35_menu"><a href="#parts35">くれ</a></li>
                    <li id="parts36_menu"><a href="#parts36">くろ</a></li>
                    <li id="parts37_menu"><a href="#parts37">くわ</a></li>
                    <li id="parts38_menu"><a href="#parts38">くん</a></li>
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
                <h3 class="ttl_while">く</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo onyomi"><a class="color1" href="011">九<span class="small">ク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="020">口<span class="small">ク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="128">工<span class="small">ク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="676">久<span class="small">ク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3060">于<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="6618">乆<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="6703">亏<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="6704">亐<span class="small">ク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="130">公<span class="small">ク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="280">区<span class="small">ク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1398">孔<span class="small">ク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="12918">勼<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13894">夃<span class="small">ク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="501">功<span class="small">ク</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="682">句<span class="small">ク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="12734">㓛<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18780">㓚<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19761">㧃<span class="small">ク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="010">休<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="3222">吁<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19263">㝌<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19508">㡱<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19579">㣉<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20574">㸨<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23992">扝<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="24107">芌<span class="small">ク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="272">究<span class="small">ク</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2302">玖<span class="small">ク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3077">佝<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="3186">劬<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="3223">吽<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="3226">吼<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="11621">旴<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13264">呕<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15150">杛<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17205">芶<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18756">㒶<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18886">㕬<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18892">㕳<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19958">㫒<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20838">㽱<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21764">䏏<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="25109">岖<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="25236">怄<span class="small">ク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="279">苦<span class="small">ク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="850">供<span class="small">ク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2337">狗<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="10516">盱<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13282">呴<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13694">垀<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13986">姁<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14416">岴<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15482">泃<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16588">畂<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16595">疞<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16977">糼<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17218">苸<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17940">邭<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18691">㑋<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18900">㕼<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19136">㚱<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19590">㣘<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20839">㽳<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22948">䧁<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="24203">㚉<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="27371">㺵<span class="small">ク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="870">紅<span class="small">ク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2336">垢<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="4029">枸<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="11645">昫<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="11777">胊<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="12839">欨<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13320">咻<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13323">哅<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14009">姤<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14299">宫<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14825">恘<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14933">挎<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15076">斪<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15137">朐<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17097">耉<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17945">郀<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18906">㖃<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18909">㖆<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19646">㤨<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20035">㭔<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20228">㱠<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20330">㳜<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22092">䖉<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22649">䡂<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22741">䢼<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="25616">烀<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="25836">眍<span class="small">ク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="282">宮<span class="small">ク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="292">庫<span class="small">ク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1687">貢<span class="small">ク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2335">倶<span class="small">ク</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2338">矩<span class="small">ク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4030">栩<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="5961">恷<span class="small">ク</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6431">俱<span class="small">ク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6617">镹<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="8087">訏<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="10141">珝<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="10356">痀<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="10528">眗<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="10529">䀠<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="10942">竘<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="11336">捄<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="12701">冔<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16051">烌<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16498">珛<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16811">秙<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16982">紤<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17552">袧<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17811">趶<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18788">㓬<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19051">㙀<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20017">㬴<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20044">㭟<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20188">㰭<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20589">㸸<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20818">㽛<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20845">㽽<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21786">䏫<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23995">晇<span class="small">ク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="477">救<span class="small">ク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1983">惧<span class="small">ク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2339">躯<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="5668">區<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="8731">酗<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="9010">絇<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13753">埧<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13756">埪<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13776">堌<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13904">够<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13905">夠<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15610">涳<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15645">淲<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16787">祤<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17082">翑<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17145">脙<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17264">萀<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17429">蚼<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19798">㧽<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20190">㰯<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20859">㾋<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20978">䀧<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21338">䇢<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21968">䓢<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="24241">㳟<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="24256">㺃<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="24258">㼋<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="27282">㲘<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="2341">鈎<span class="small">ク</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="4620">琥<span class="small">ク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="8126">訽<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="8367">跔<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="12089">椇<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="12946">匑<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13430">喣<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14696">廄<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15668">渱<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16107">焢<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16114">焪<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16128">焽<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16853">窛<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16893">筘<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17272">萭<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17283">葋<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17436">蛡<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17735">豞<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17746">豿<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17815">跍<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17882">軤<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17883">軥<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17890">軲<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20255">㲁<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20257">㲃<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20562">㸜<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21214">䅓<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22469">䝭<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22511">䞤<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22575">䟬<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22786">䣱<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23069">䩒<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23894">傋<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="24305">䓵<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="24971">圐<span class="small">ク</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2306">鳩<span class="small">ク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2340">鉤<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="4921">煦<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="4961">詬<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="5392">蒟<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="8125">詡<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="12126">楀<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="12802">剹<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="12949">匓<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13151">剾<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13450">嗊<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14641">幊<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14855">愩<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14985">搝<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16609">瘔<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16829">稒<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17893">輁<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18972">㗕<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19208">㜌<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19258">㝅<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19285">㝤<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19488">㡚<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20201">㰻<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20377">㴦<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21224">䅝<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21343">䇨<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21663">䍛<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22789">䣴<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23248">䬨<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23523">䲥<span class="small">ク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1073">駆<span class="small">ク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3293">嘔<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="3470">嶇<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="4540">箜<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="7961">䧢<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="9606">蓲<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="10629">榘<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="10947">竬<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="11216">愳<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13495">嘑<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14321">寠<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14872">慪<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16181">熍<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16574">瓡<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17339">蔻<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18037">銝<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18211">雐<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18982">㗢<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19715">㦆<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19834">㨭<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20220">㱗<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20664">㺉<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21164">䄔<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21288">䆪<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21569">䋧<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21824">䐟<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22134">䗂<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23152">䪷<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23256">䬲<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="25254">慐<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="25940">窭<span class="small">ク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2003">駒<span class="small">ク</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2342">駈<span class="small">ク</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="11566">敺<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14199">嫴<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14870">慦<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15017">撀<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15353">歑<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16679">瞉<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17119">聥<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17473">蝺<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21119">䃓<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21120">䃔<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21585">䋷<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22023">䔯<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22369">䛪<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22642">䠻<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22800">䣿<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23314">䮃<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23460">䰸<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23533">䲲<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23911">嘼<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="25102">屦<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="5620">窶<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="7098">鴝<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="8410">踽<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="12947">匔<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13541">噢<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15288">橭<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16683">瞘<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16925">篢<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17360">薣<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17478">螑<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18400">髸<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18427">鮈<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21401">䈮<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21652">䍍<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23609">䴣<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="11585">㪺<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14373">屨<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17094">翵<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17741">豰<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18487">鴮<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20450">㵻<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22612">䠗<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23027">䨞<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23470">䱋<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="5172">瞿<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="5175">瞽<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="6474">軀<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="6622">鼩<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17707">謼<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17754">貗<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20142">㯯<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20619">㹗<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21432">䉐<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23449">䰧<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23680">䵶<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="8196">譃<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14260">孂<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23704">䶙<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="3641">懼<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="6351">驅<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14796">忂<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15973">灈<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19247">㜹<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="19883">㩴<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="23705">䶚<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="11931">臞<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="12319">欋<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14899">戵<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15393">氍<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="16269">爠<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18450">鰸<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="20011">㬬<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="10456">癯<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21056">䂂<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="3774">齲<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="5584">衢<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="9971">蠷<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17863">躣<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="9975">蠼<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18156">鑺<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18842">㔶<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="18305">飍<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="7099">鸜<span class="small">ク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13205">厹<span class="small">グ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2344">弘<span class="small">グ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="13219">叴<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14901">扏<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15421">氿<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16474">玌<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18878">㕤<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19762">㧄<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14381">屸<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15143">朹<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17125">肍<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20690">㺩<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20692">㺫<span class="small">グ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="479">求<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3186">劬<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3223">吽<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13233">吘<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15453">汼<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16001">灴<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19349">㞲<span class="small">グ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="281">具<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17940">邭<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18769">㓋<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22948">䧁<span class="small">グ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="870">紅<span class="small">グ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4303">禺<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12468">俁<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13720">垬<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15076">斪<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15519">洉<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18660">㐜<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19645">㤧<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19783">㧨<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21471">䉺<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22414">䜪<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22953">䧆<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2335">倶<span class="small">グ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6431">俱<span class="small">グ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="11086">悞<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12469">㑨<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13071">倃<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14836">悮<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15187">桏<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16980">紌<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17242">莥<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19159">㛏<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19275">㝘<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19326">㞗<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19366">㟈<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19657">㤹<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19787">㧭<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20042">㭝<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20818">㽛<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22415">䜫<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22493">䞑<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22752">䣇<span class="small">グ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="477">救<span class="small">グ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1983">惧<span class="small">グ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="13753">埧<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14092">婟<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15362">殏<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17082">翑<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17429">蚼<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20491">㶹<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21201">䅃<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21959">䓘<span class="small">グ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1379">遇<span class="small">グ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2343">寓<span class="small">グ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3467">嵎<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11134">㥥<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13035">亴<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13411">喁<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13784">堠<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13786">堣<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14115">媀<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14636">帿<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14694">庽<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15668">渱<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15701">湡<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16635">盚<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17283">葋<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17735">豞<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21090">䂫<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21481">䊄<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21483">䊆<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22511">䞤<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22827">䤝<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23137">䪦<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23208">䫹<span class="small">グ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1377">愚<span class="small">グ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1615">虞<span class="small">グ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="17161">腢<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17777">赨<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17893">輁<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18718">㒁<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19989">㬂<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20512">㷒<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22514">䞧<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11216">愳<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18982">㗢<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20092">㮪<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20788">㼴<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22582">䟵<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9265">耦<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17803">趜<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18043">銾<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21120">䃔<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22373">䛮<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13550">噳<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15876">澞<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18427">鮈<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22484">䞀<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4366">颶<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17094">翵<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18076">鍝<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18232">霟<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22612">䠗<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23556">䳔<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4558">麌<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17754">貗<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18436">鯄<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20142">㯯<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23680">䵶<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6803">髃<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12995">匶<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18442">鯦<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18566">麔<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6996">鰅<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3641">懼<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14796">忂<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19247">㜹<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19883">㩴<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14899">戵<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21056">䂂<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23593">䴁<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6674">齵<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18555">鸆<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17863">躣<span class="small">グ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18156">鑺<span class="small">グ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts2">
                <h3 class="ttl_while">くい</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="3517">弋<span class="small">くい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4003">杙<span class="small">くい</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2401">杭<span class="small">くい</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3766">齟<span class="small">くいちが（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3771">齬<span class="small">くいちが（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1338">悔<span class="small">く（いる）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6382">悔<span class="small">く（いる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3637">懴<span class="small">く（いる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3636">懺<span class="small">く（いる）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts3">
                <h3 class="ttl_while">くう</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo onyomi"><a class="color1" href="013">空<span class="small">クウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2345">腔<span class="small">クウ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2292">吃<span class="small">く（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6069">咋<span class="small">く（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="162">食<span class="small">く（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5345">茹<span class="small">く（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3270">啖<span class="small">く（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3271">啗<span class="small">く（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7471">飡<span class="small">く（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1369">喫<span class="small">く（う）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2346">喰<span class="small">く（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7470">湌<span class="small">く（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="19569">㢽<span class="small">く（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="24197">㗖<span class="small">く（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="2017">餌<span class="small">く（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="13524">噉<span class="small">く（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="23913">噄<span class="small">く（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2459">餐<span class="small">く（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3306">噬<span class="small">く（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5282">餔<span class="small">く（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5285">餤<span class="small">く（う）</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="4303">禺<span class="small">グウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14299">宫<span class="small">グウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="282">宮<span class="small">グウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1378">偶<span class="small">グウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1379">遇<span class="small">グウ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1666">隅<span class="small">グウ</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2343">寓<span class="small">グウ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3467">嵎<span class="small">グウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13411">喁<span class="small">グウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14694">庽<span class="small">グウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18735">㒖<span class="small">グウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9265">耦<span class="small">グウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5436">藕<span class="small">グウ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts4">
                <h3 class="ttl_while">くか</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="25541">陆<span class="small">くが</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="625">陸<span class="small">くが</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts5">
                <h3 class="ttl_while">くき</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1670">茎<span class="small">くき</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3453">岫<span class="small">くき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4017">柯<span class="small">くき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5937">莖<span class="small">くき</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2743">釘<span class="small">くぎ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3765">齣<span class="small">くぎり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2237">劃<span class="small">くぎ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3962">閾<span class="small">くぎ（る）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts6">
                <h3 class="ttl_while">くく</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="2419">鵠<span class="small">くぐい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3124">傀<span class="small">くぐつ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3142">儡<span class="small">くぐつ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1074">屈<span class="small">くぐ（まる）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2416">閤<span class="small">くぐりど</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1635">括<span class="small">くく（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4792">縊<span class="small">くく（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5594">羂<span class="small">くく（る）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1472">潜<span class="small">くぐ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6241">潛<span class="small">くぐ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6242">濳<span class="small">くぐ（る）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts7">
                <h3 class="ttl_while">くけ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="jimmei kunyomi"><a class="color2" href="2317">卿<span class="small">くげ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4761">絎<span class="small">く（ける）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts8">
                <h3 class="ttl_while">くこ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="4006">杞<span class="small">くこ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4029">枸<span class="small">くこ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27743">𦹀<span class="small">くご</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts9">
                <h3 class="ttl_while">くさ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="3210">卉<span class="small">くさ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5312">艸<span class="small">くさ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="051">草<span class="small">くさ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12998">芔<span class="small">くさ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25811">疮<span class="small">くさ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="529">種<span class="small">くさ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5243">瘡<span class="small">くさ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1720">臭<span class="small">くさ（い）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6409">臭<span class="small">くさ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5384">葷<span class="small">くさ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="13140">刍<span class="small">くさか（り）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5357">芻<span class="small">くさか（り）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5358">蒭<span class="small">くさか（り）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5412">蕘<span class="small">くさか（り）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="493">芸<span class="small">くさぎ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3940">耘<span class="small">くさぎ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="9267">槈<span class="small">くさぎ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="21244">䅶<span class="small">くさぎ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3936">耨<span class="small">くさぎ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="16109">焤<span class="small">くさ（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1254">腐<span class="small">くさ（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4151">楔<span class="small">くさび</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1634">轄<span class="small">くさび</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5381">莽<span class="small">くさぶか（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="9527">莾<span class="small">くさぶか（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1946">茨<span class="small">くさぶき</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="24528">丛<span class="small">くさむら</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5381">莽<span class="small">くさむら</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="9527">莾<span class="small">くさむら</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5404">蔡<span class="small">くさむら</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="15273">樷<span class="small">くさむら</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="24128">藂<span class="small">くさむら</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2654">叢<span class="small">くさむら</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="18983">㗣<span class="small">くさめ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3313">嚏<span class="small">くさめ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3312">嚔<span class="small">くさめ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5439">藾<span class="small">くさよもぎ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="16109">焤<span class="small">くさ（らす）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1254">腐<span class="small">くさ（らす）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="10199">琑<span class="small">くさり</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4631">瑣<span class="small">くさり</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1105">鎖<span class="small">くさり</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7753">鎻<span class="small">くさり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4720">鏈<span class="small">くさり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7754">鏁<span class="small">くさり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3765">齣<span class="small">くさり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4734">鐺<span class="small">くさり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5345">茹<span class="small">くさ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="16109">焤<span class="small">くさ（る）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1254">腐<span class="small">くさ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5283">餒<span class="small">くさ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="16109">焤<span class="small">くさ（れる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1254">腐<span class="small">くさ（れる）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts10">
                <h3 class="ttl_while">くし</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1984">串<span class="small">くし</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2851">枇<span class="small">くし</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="25378">栉<span class="small">くし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19782">㧧<span class="small">くし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4032">梳<span class="small">くし</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2487">櫛<span class="small">くし</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4610">籖<span class="small">くし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4609">籤<span class="small">くし</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1047">奇<span class="small">く（し）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6159">竒<span class="small">く（し）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6864">䦰<span class="small">くじ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4610">籖<span class="small">くじ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6863">䰗<span class="small">くじ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4609">籤<span class="small">くじ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5020">鬮<span class="small">くじ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27894">𤘩<span class="small">ぐし</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6530">麇<span class="small">くじか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7250">麏<span class="small">くじか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4559">麕<span class="small">くじか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7258">麞<span class="small">くじか</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2120">拉<span class="small">くじ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="25410">挤<span class="small">くじ（く）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="2007">挫<span class="small">くじ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="25409">㨈<span class="small">くじ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="27861">𣓤<span class="small">くじ（く）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2560">摺<span class="small">くじ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3718">摧<span class="small">くじ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4189">橈<span class="small">くじ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3732">擠<span class="small">くじ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="25030">奁<span class="small">くしげ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6160">奩<span class="small">くしげ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8942">匲<span class="small">くしげ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3207">匳<span class="small">くしげ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8941">籢<span class="small">くしげ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25378">栉<span class="small">くしけず（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="19782">㧧<span class="small">くしけず（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4032">梳<span class="small">くしけず（る）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2487">櫛<span class="small">くしけず（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="550">折<span class="small">くじ（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6305">衂<span class="small">くじ（ける）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="2007">挫<span class="small">くじ（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5644">衄<span class="small">くじ（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="9977">䘐<span class="small">くじ（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11289">㪿<span class="small">くじ（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3720">撓<span class="small">くじ（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="18983">㗣<span class="small">くしゃみ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3313">嚏<span class="small">くしゃみ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3312">嚔<span class="small">くしゃみ</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1387">鯨<span class="small">くじら</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2646">釧<span class="small">くしろ</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts11">
                <h3 class="ttl_while">くす</h3>
                <ul class="search_parts yomi_parts">
                    <li class="jimmei kunyomi"><a class="color2" href="2563">樟<span class="small">くす</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="19324">㞕<span class="small">くず</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2632">屑<span class="small">くず</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1969">葛<span class="small">くず</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5139">頽<span class="small">くずお（れる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7392">頹<span class="small">くずお（れる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7393">頺<span class="small">くずお（れる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3739">擽<span class="small">くすぐ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11514">攊<span class="small">くすぐ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5550">秕<span class="small">くずごめ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5551">粃<span class="small">くずごめ</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="245">医<span class="small">くすし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5728">醫<span class="small">くすし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12955">毉<span class="small">くすし</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1553">崩<span class="small">くず（す）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2810">楠<span class="small">くすのき</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2563">樟<span class="small">くすのき</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4942">熏<span class="small">くす（ぶる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4941">燻<span class="small">くす（ぶる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4942">熏<span class="small">くす（べる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4941">燻<span class="small">くす（べる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="418">薬<span class="small">くすり</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5785">藥<span class="small">くすり</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1553">崩<span class="small">くず（れる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5139">頽<span class="small">くず（れる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7392">頹<span class="small">くず（れる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7393">頺<span class="small">くず（れる）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts12">
                <h3 class="ttl_while">くせ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="276">曲<span class="small">くせ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1549">癖<span class="small">くせ</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts13">
                <h3 class="ttl_while">くそ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="3442">屎<span class="small">くそ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25982">粪<span class="small">くそ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2890">糞<span class="small">くそ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts14">
                <h3 class="ttl_while">くた</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="465">管<span class="small">くだ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1700">砕<span class="small">くだ（く）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="5715">碎<span class="small">くだ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3718">摧<span class="small">くだ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="26162">齑<span class="small">くだ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="23133">䪠<span class="small">くだ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5321">韲<span class="small">くだ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6660">䪡<span class="small">くだ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="27437">䪢<span class="small">くだ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="23134">䪣<span class="small">くだ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6659">虀<span class="small">くだ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5320">齏<span class="small">くだ（く）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1700">砕<span class="small">くだ（ける）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="5715">碎<span class="small">くだ（ける）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4556">麋<span class="small">くだ（ける）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6587">丅<span class="small">くだ（さる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="015">下<span class="small">くだ（さる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6587">丅<span class="small">くだ（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="015">下<span class="small">くだ（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7930">夅<span class="small">くだ（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="24014">泻<span class="small">くだ（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="872">降<span class="small">くだ（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="20451">㵼<span class="small">くだ（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4447">瀉<span class="small">くだ（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="9502">萙<span class="small">くたびれ</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="455">果<span class="small">くだもの</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1027">菓<span class="small">くだもの</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="689">件<span class="small">くだり</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6587">丅<span class="small">くだ（る）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="015">下<span class="small">くだ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7930">夅<span class="small">くだ（る）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="872">降<span class="small">くだ（る）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="689">件<span class="small">くだん</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts15">
                <h3 class="ttl_while">くち</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="21070">䂗<span class="small">クチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15341">欪<span class="small">クチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17413">虳<span class="small">クチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16085">烼<span class="small">クチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21962">䓛<span class="small">クチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22114">䖦<span class="small">クチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17791">趉<span class="small">クチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23372">䯇<span class="small">クチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14355">尳<span class="small">クチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19825">㨡<span class="small">クチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18411">魆<span class="small">クチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18999">㗵<span class="small">クチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20892">㾶<span class="small">クチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22599">䠇<span class="small">クチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20424">㵠<span class="small">クチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23227">䬍<span class="small">クチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24167">餶<span class="small">クチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23350">䮩<span class="small">クチ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="020">口<span class="small">くち</span></a></li>
                    <li class="others_kanji onyomi"><a href="17551">袦<span class="small">グチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17791">趉<span class="small">グチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20063">㭾<span class="small">グチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20722">㻕<span class="small">グチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22228">䘿<span class="small">グチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18161">镼<span class="small">グチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22528">䞷<span class="small">グチ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2888">吻<span class="small">くちさき</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3297">嗽<span class="small">くちすす（ぐ）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="4419">漱<span class="small">くちすす（ぐ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="15827">潄<span class="small">くちすす（ぐ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="12060">栀<span class="small">くちなし</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4120">梔<span class="small">くちなし</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3274">喙<span class="small">くちばし</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5579">觜<span class="small">くちばし</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3300">嘴<span class="small">くちばし</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2478">髭<span class="small">くちひげ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6822">頾<span class="small">くちひげ</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2888">吻<span class="small">くちびる</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1765">唇<span class="small">くちびる</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4226">脣<span class="small">くちびる</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1059">朽<span class="small">く（ちる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="27849">𣏓<span class="small">く（ちる）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts16">
                <h3 class="ttl_while">くつ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo onyomi"><a class="color1" href="1074">屈<span class="small">クツ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="23984">弡<span class="small">クツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15341">欪<span class="small">クツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17413">虳<span class="small">クツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3103">倔<span class="small">クツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17551">袦<span class="small">クツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1075">掘<span class="small">クツ</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1898">堀<span class="small">クツ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3458">崛<span class="small">クツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14481">崫<span class="small">クツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16085">烼<span class="small">クツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21962">䓛<span class="small">クツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22114">䖦<span class="small">クツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3214">厥<span class="small">クツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8106">詘<span class="small">クツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12865">欻<span class="small">クツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17791">趉<span class="small">クツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20063">㭾<span class="small">クツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20722">㻕<span class="small">クツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1985">窟<span class="small">クツ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="22228">䘿<span class="small">クツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8155">誳<span class="small">クツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18161">镼<span class="small">クツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18411">魆<span class="small">クツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18999">㗵<span class="small">クツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22528">䞷<span class="small">クツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22599">䠇<span class="small">クツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12866">歘<span class="small">クツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23227">䬍<span class="small">クツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7157">鶌<span class="small">クツ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2787">沓<span class="small">くつ</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1620">靴<span class="small">くつ</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1922">履<span class="small">くつ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5089">鞋<span class="small">くつ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5091">鞜<span class="small">くつ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5094">鞨<span class="small">くつ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7297">鞵<span class="small">くつ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4330">泛<span class="small">くつがえ（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="496">建<span class="small">くつがえ（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="26572">覄<span class="small">くつがえ（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1546">覆<span class="small">くつがえ（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7417">傎<span class="small">くつがえ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="26572">覄<span class="small">くつがえ（る）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1077">傾<span class="small">くつがえ（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1546">覆<span class="small">くつがえ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2773">顛<span class="small">くつがえ（る）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6464">顚<span class="small">くつがえ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18757">㒹<span class="small">くつがえ（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5074">襪<span class="small">くつした</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5098">韈<span class="small">くつした</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7337">韤<span class="small">くつした</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1646">寛<span class="small">くつろ（ぐ）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6420">寬<span class="small">くつろ（ぐ）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2188">燕<span class="small">くつろ（ぐ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="20538">㷼<span class="small">くつろ（ぐ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7213">鷰<span class="small">くつろ（ぐ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7214">䴏<span class="small">くつろ（ぐ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5081">勒<span class="small">くつわ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3266">啣<span class="small">くつわ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7616">衘<span class="small">くつわ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4695">銜<span class="small">くつわ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7615">㘅<span class="small">くつわ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2855">轡<span class="small">くつわ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts17">
                <h3 class="ttl_while">くて</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="4393">湫<span class="small">くて</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts18">
                <h3 class="ttl_while">くと</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="4765">絮<span class="small">くど（い）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="4972">諄<span class="small">くど（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4791">縟<span class="small">くど（い）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts19">
                <h3 class="ttl_while">くに</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="5768">囗<span class="small">くに</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="324">州<span class="small">くに</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1558">邦<span class="small">くに</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2196">邑<span class="small">くに</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="13616">囯<span class="small">くに</span></a></li>
                    <li class="others_kanji kunyomi"><a href="22737">䢶<span class="small">くに</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="136">国<span class="small">くに</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13619">囻<span class="small">くに</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14420">峀<span class="small">くに</span></a></li>
                    <li class="others_kanji kunyomi"><a href="23923">囶<span class="small">くに</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3036">圀<span class="small">くに</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5799">國<span class="small">くに</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="27795">𡈁<span class="small">くに</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="21264">䆐<span class="small">くに</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2286">祇<span class="small">くにつかみ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts20">
                <h3 class="ttl_while">くぬ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="25372">枥<span class="small">くぬぎ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4030">栩<span class="small">くぬぎ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4139">椚<span class="small">くぬぎ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5685">椢<span class="small">くぬぎ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6141">椡<span class="small">くぬぎ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27704">𣗄<span class="small">くぬぎ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="12197">槶<span class="small">くぬぎ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2565">橡<span class="small">くぬぎ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4202">檪<span class="small">くぬぎ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4201">櫟<span class="small">くぬぎ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4208">櫪<span class="small">くぬぎ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts21">
                <h3 class="ttl_while">くは</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="387">配<span class="small">くば（る）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts22">
                <h3 class="ttl_while">くひ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="155">首<span class="small">くび</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="270">級<span class="small">くび</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5134">頏<span class="small">くび</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2358">頚<span class="small">くび</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2357">頸<span class="small">くび</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5692">珱<span class="small">くびかざ（り）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4638">瓔<span class="small">くびかざ（り）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4018">枷<span class="small">くびかせ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4688">鉗<span class="small">くびかせ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4542">箝<span class="small">くびかせ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="21395">䈤<span class="small">くびかせ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4459">軛<span class="small">くびき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8486">軶<span class="small">くびき</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1688">衡<span class="small">くびき</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="13146">刭<span class="small">くびき（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3175">剄<span class="small">くびき（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7514">聝<span class="small">くびき（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4362">馘<span class="small">くびき（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4262">跟<span class="small">くびす</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4269">踝<span class="small">くびす</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4273">踵<span class="small">くびす</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3170">刎<span class="small">くびは（ねる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1635">括<span class="small">くび（る）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1407">絞<span class="small">くび（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4792">縊<span class="small">くび（る）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1635">括<span class="small">くび（れる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4792">縊<span class="small">くび（れる）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts23">
                <h3 class="ttl_while">くへ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="536">焼<span class="small">く（べる）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6245">燒<span class="small">く（べる）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts24">
                <h3 class="ttl_while">くほ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="27812">𡱖<span class="small">くぼ</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2139">窪<span class="small">くぼ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="10924">漥<span class="small">くぼ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1613">凹<span class="small">くぼ（む）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2139">窪<span class="small">くぼ（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10924">漥<span class="small">くぼ（む）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts25">
                <h3 class="ttl_while">くま</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="276">曲<span class="small">くま</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2141">阿<span class="small">くま</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5189">陬<span class="small">くま</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1025">奥<span class="small">くま</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="3023">隈<span class="small">くま</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3467">嵎<span class="small">くま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3922">暈<span class="small">くま</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5774">奧<span class="small">くま</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1986">熊<span class="small">くま</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4437">澳<span class="small">くま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3828">鶻<span class="small">くまたか</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts26">
                <h3 class="ttl_while">くみ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="25447">队<span class="small">くみ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2386">伍<span class="small">くみ</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="178">組<span class="small">くみ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="406">部<span class="small">くみ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="563">隊<span class="small">くみ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="8672">郶<span class="small">くみ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1291">与<span class="small">くみ（する）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6294">與<span class="small">くみ（する）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="178">組<span class="small">くみひも</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2506">綬<span class="small">くみひも</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2455">纂<span class="small">くみひも</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts27">
                <h3 class="ttl_while">くむ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="jimmei kunyomi"><a class="color2" href="2300">汲<span class="small">く（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3664">抒<span class="small">く（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="19040">㘰<span class="small">く（む）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1716">酌<span class="small">く（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3155">冓<span class="small">く（む）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="178">組<span class="small">く（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8732">酙<span class="small">く（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="19939">㪸<span class="small">く（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3763">斟<span class="small">く（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4815">辮<span class="small">く（む）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts28">
                <h3 class="ttl_while">くめ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="2347">粂<span class="small">くめ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts29">
                <h3 class="ttl_while">くも</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="083">雲<span class="small">くも</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2499">蛛<span class="small">くも</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2721">蜘<span class="small">くも</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5611">翳<span class="small">くも（り）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7938">阴<span class="small">くも（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7939">阥<span class="small">くも（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7937">侌<span class="small">くも（る）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1015">陰<span class="small">くも（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7940">隂<span class="small">くも（る）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1221">曇<span class="small">くも（る）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts30">
                <h3 class="ttl_while">くや</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1338">悔<span class="small">くや（しい）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6382">悔<span class="small">くや（しい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1338">悔<span class="small">く（やむ）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6382">悔<span class="small">く（やむ）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts31">
                <h3 class="ttl_while">くゆ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="4942">熏<span class="small">くゆ（らす）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4941">燻<span class="small">くゆ（らす）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts32">
                <h3 class="ttl_while">くら</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="24559">仓<span class="small">くら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13041">仺<span class="small">くら</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="599">府<span class="small">くら</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5994">峅<span class="small">くら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18675">㐭<span class="small">くら</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="292">庫<span class="small">くら</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="557">倉<span class="small">くら</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="934">蔵<span class="small">くら</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2147">鞍<span class="small">くら</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7298">鞌<span class="small">くら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3512">廩<span class="small">くら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14714">廪<span class="small">くら</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5984">藏<span class="small">くら</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="443">位<span class="small">くらい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5636">祚<span class="small">くらい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3266">啣<span class="small">くらい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7616">衘<span class="small">くらい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4695">銜<span class="small">くらい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7615">㘅<span class="small">くらい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5315">芒<span class="small">くら（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7938">阴<span class="small">くら（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7939">阥<span class="small">くら（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1906">盲<span class="small">くら（い）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2427">昏<span class="small">くら（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3914">杳<span class="small">くら（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5586">罔<span class="small">くら（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7937">侌<span class="small">くら（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1577">幽<span class="small">くら（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="2107">昧<span class="small">くら（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11636">昬<span class="small">くら（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="2110">冥<span class="small">くら（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5151">眛<span class="small">くら（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1015">陰<span class="small">くら（い）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2225">晦<span class="small">くら（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12707">㝠<span class="small">くら（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7940">隂<span class="small">くら（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="242">暗<span class="small">くら（い）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2923">蒙<span class="small">くら（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4413">溟<span class="small">くら（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="21287">䆩<span class="small">くら（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="2100">蔑<span class="small">くら（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3933">暝<span class="small">くら（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="25363">暧<span class="small">くら（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="2097">蔽<span class="small">くら（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3141">儚<span class="small">くら（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5165">瞎<span class="small">くら（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5166">瞑<span class="small">くら（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4444">濛<span class="small">くら（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="9633">薎<span class="small">くら（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1939">曖<span class="small">くら（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="2114">闇<span class="small">くら（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3928">曚<span class="small">くら（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5173">矇<span class="small">くら（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3756">黯<span class="small">くら（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="18296">顭<span class="small">くら（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="162">食<span class="small">く（らう）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3270">啖<span class="small">く（らう）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3271">啗<span class="small">く（らう）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2346">喰<span class="small">く（らう）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24197">㗖<span class="small">く（らう）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="13524">噉<span class="small">く（らう）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6069">咋<span class="small">くら（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="592">飯<span class="small">くら（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7461">飰<span class="small">くら（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="26281">飯<span class="small">くら（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5084">鞁<span class="small">くらお（く）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="979">暮<span class="small">く（らす）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="791">比<span class="small">くら（べる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="12962">夶<span class="small">くら（べる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="097">角<span class="small">くら（べる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="021">校<span class="small">くら（べる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="25943">竞<span class="small">くら（べる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="8496">䡈<span class="small">くら（べる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1035">較<span class="small">くら（べる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="484">競<span class="small">くら（べる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5663">竸<span class="small">くら（べる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5152">眩<span class="small">くら（ます）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2225">晦<span class="small">くら（ます）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2427">昏<span class="small">くら（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11636">昬<span class="small">くら（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5152">眩<span class="small">くら（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3922">暈<span class="small">くら（む）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1960">瓦<span class="small">グラム</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3270">啖<span class="small">く（らわす）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3271">啗<span class="small">く（らわす）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="24197">㗖<span class="small">く（らわす）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="13524">噉<span class="small">く（らわす）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts33">
                <h3 class="ttl_while">くり</h3>
                <ul class="search_parts yomi_parts">
                    <li class="jimmei kunyomi"><a class="color2" href="2968">栗<span class="small">くり</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="12045">㮚<span class="small">くり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27815">𣡼<span class="small">くり</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2907">庖<span class="small">くりや</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2612">厨<span class="small">くりや</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="18865">㕑<span class="small">くりや</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2613">廚<span class="small">くりや</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts34">
                <h3 class="ttl_while">くる</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="236">来<span class="small">く（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3173">刳<span class="small">く（る）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="5661">來<span class="small">く（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11951">徕<span class="small">く（る）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6181">徠<span class="small">く（る）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1076">繰<span class="small">く（る）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1070">狂<span class="small">くる（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5106">狡<span class="small">くる（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5112">猖<span class="small">くる（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5121">獗<span class="small">くる（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="25827">癫<span class="small">くる（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5260">癲<span class="small">くる（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1070">狂<span class="small">くる（おしい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="279">苦<span class="small">くる（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="26335">艰<span class="small">くる（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5576">艱<span class="small">くる（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="9354">囏<span class="small">くる（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5367">荼<span class="small">くる（しみ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1909">厄<span class="small">くる（しむ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="876">困<span class="small">くる（しむ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5181">阨<span class="small">くる（しむ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="279">苦<span class="small">くる（しむ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7919">阸<span class="small">くる（しむ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="26335">艰<span class="small">くる（しむ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5618">窘<span class="small">くる（しむ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="2074">頓<span class="small">くる（しむ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5576">艱<span class="small">くる（しむ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="9354">囏<span class="small">くる（しむ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="279">苦<span class="small">くる（しめる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4269">踝<span class="small">くるぶし</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="032">車<span class="small">くるま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3100">俥<span class="small">くるま</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1085">軒<span class="small">くるま</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="438">路<span class="small">くるま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4464">輅<span class="small">くるま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4473">輌<span class="small">くるま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4472">輛<span class="small">くるま</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2951">輿<span class="small">くるま</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4478">轂<span class="small">くるま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4482">轎<span class="small">くるま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8529">轝<span class="small">くるま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27850">𣏒<span class="small">くるみ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5870">楜<span class="small">くるみ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="611">包<span class="small">くる（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="19150">㚿<span class="small">くる（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5152">眩<span class="small">くるめ（く）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="374">転<span class="small">くるり</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6047">轉<span class="small">くるり</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5203">郛<span class="small">くるわ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1345">郭<span class="small">くるわ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2239">廓<span class="small">くるわ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13842">墎<span class="small">くるわ</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts35">
                <h3 class="ttl_while">くれ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1681">呉<span class="small">くれ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="13249">吳<span class="small">くれ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13250">吴<span class="small">くれ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27800">𡋗<span class="small">くれ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="27859">𣑋<span class="small">くれ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4165">榑<span class="small">くれ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5891">臈<span class="small">くれ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9683">﨟<span class="small">くれ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27801">𡑭<span class="small">くれ</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2427">昏<span class="small">く（れ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11636">昬<span class="small">く（れ）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2832">莫<span class="small">く（れ）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6439">晚<span class="small">く（れ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="969">晩<span class="small">く（れ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="27847">𣆶<span class="small">く（れ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4316">臘<span class="small">く（れ）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="870">紅<span class="small">くれない</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1681">呉<span class="small">く（れる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="13249">吳<span class="small">く（れる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="13250">吴<span class="small">く（れる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5152">眩<span class="small">く（れる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="979">暮<span class="small">く（れる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3933">暝<span class="small">く（れる）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts36">
                <h3 class="ttl_while">くろ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1088">玄<span class="small">くろ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="27796">𡉕<span class="small">くろ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="10461">皁<span class="small">くろ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10462">皂<span class="small">くろ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="21531">䊷<span class="small">くろ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1534">畔<span class="small">くろ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4375">涅<span class="small">くろ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27878">𣵀<span class="small">くろ</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="138">黒<span class="small">くろ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6429">黑<span class="small">くろ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="24021">湼<span class="small">くろ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4773">緇<span class="small">くろ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3753">黝<span class="small">くろ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2287">蟻<span class="small">くろ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3517">弋<span class="small">くろ（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1088">玄<span class="small">くろ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="24739">卢<span class="small">くろ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="10461">皁<span class="small">くろ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="10462">皂<span class="small">くろ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5336">苴<span class="small">くろ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="21531">䊷<span class="small">くろ（い）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2167">烏<span class="small">くろ（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="138">黒<span class="small">くろ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4833">犁<span class="small">くろ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4832">犂<span class="small">くろ（い）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6429">黑<span class="small">くろ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="20374">㴝<span class="small">くろ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4773">緇<span class="small">くろ（い）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="3760">黎<span class="small">くろ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3751">黔<span class="small">くろ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5567">盧<span class="small">くろ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="23646">䵓<span class="small">くろ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3753">黝<span class="small">くろ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3756">黯<span class="small">くろ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4512">驪<span class="small">くろ（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4512">驪<span class="small">くろうま</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="373">鉄<span class="small">くろがね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4697">銕<span class="small">くろがね</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5679">鐡<span class="small">くろがね</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5678">鐵<span class="small">くろがね</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="22892">䥫<span class="small">くろがね</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="21531">䊷<span class="small">くろぎぬ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4773">緇<span class="small">くろぎぬ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5553">秬<span class="small">くろきび</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4557">麁<span class="small">くろごめ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7260">麄<span class="small">くろごめ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="21518">䊪<span class="small">くろごめ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5275">糲<span class="small">くろごめ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6502">麤<span class="small">くろごめ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="12028">桄<span class="small">くろつぐ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4375">涅<span class="small">くろつち</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="27878">𣵀<span class="small">くろつち</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="24021">湼<span class="small">くろつち</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="27869">𣜌<span class="small">くろべ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="21531">䊷<span class="small">くろ（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4773">緇<span class="small">くろ（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3751">黔<span class="small">くろ（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3753">黝<span class="small">くろ（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4375">涅<span class="small">くろ（める）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="27878">𣵀<span class="small">くろ（める）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="24021">湼<span class="small">くろ（める）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts37">
                <h3 class="ttl_while">くわ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="20114">㯉<span class="small">クワ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12037">桒<span class="small">くわ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1479">桑<span class="small">くわ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="9267">槈<span class="small">くわ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="21244">䅶<span class="small">くわ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3936">耨<span class="small">くわ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2521">鍬<span class="small">くわ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7728">鍫<span class="small">くわ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4745">钁<span class="small">くわ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="454">加<span class="small">くわ（える）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1744">尚<span class="small">くわ（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="23958">尙<span class="small">くわ（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3248">咥<span class="small">くわ（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3266">啣<span class="small">くわ（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7616">衘<span class="small">くわ（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4695">銜<span class="small">くわ（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7615">㘅<span class="small">くわ（える）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="244">委<span class="small">くわ（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4458">軋<span class="small">くわ（しい）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="139">細<span class="small">くわ（しい）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1140">詳<span class="small">くわ（しい）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="744">精<span class="small">くわ（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="21494">䊒<span class="small">くわ（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="26278">精<span class="small">くわ（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4804">縷<span class="small">くわ（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5285">餤<span class="small">く（わせる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5416">蕈<span class="small">くわたけ</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1357">企<span class="small">くわだ（てる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26399">㑫<span class="small">くわだ（てる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4154">椹<span class="small">くわのみ</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="454">加<span class="small">くわ（わる）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts38">
                <h3 class="ttl_while">くん</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo onyomi"><a class="color1" href="283">君<span class="small">クン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="488">軍<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="27723">𠱰<span class="small">クン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="487">訓<span class="small">クン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="489">郡<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9468">莙<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10033">帬<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11337">捃<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14301">宭<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6114">桾<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10152">珺<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16092">焄<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19901">㪊<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5042">裙<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5384">葷<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12904">勛<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="27722">𠁈<span class="small">クン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2348">馴<span class="small">クン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="10032">裠<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20382">㴫<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="27721">𠺞<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4942">熏<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5601">皹<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5602">皸<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17899">輑<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21490">䊎<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24122">蔒<span class="small">クン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1668">勲<span class="small">クン</span></a>
                    </li>
                    <li class="joyo onyomi"><a class="color1" href="1667">薫<span class="small">クン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="5843">勳<span class="small">クン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6530">麇<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22443">䝍<span class="small">クン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6426">薰<span class="small">クン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="16458">獯<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24957">嚑<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4941">燻<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7250">麏<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11735">曛<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17179">臐<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18432">鮶<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18498">鵘<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20910">㿏<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4559">麕<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9145">䙧<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9664">蘍<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11518">攈<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16697">矄<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9144">纁<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16255">爋<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18136">鐼<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22178">䗼<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23669">䵫<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4852">醺<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11519">攟<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18138">鑂<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21639">䌲<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7852">鑫<span class="small">クン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6359">夽<span class="small">グン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="488">軍<span class="small">グン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="489">郡<span class="small">グン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14301">宭<span class="small">グン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13425">喗<span class="small">グン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20719">㻒<span class="small">グン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="683">群<span class="small">グン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6277">羣<span class="small">グン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20382">㴫<span class="small">グン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17899">輑<span class="small">グン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22517">䞫<span class="small">グン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23309">䭽<span class="small">グン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7720">鍕<span class="small">グン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18498">鵘<span class="small">グン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18610">齫<span class="small">グン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6673">齳<span class="small">グン</span></a></li>
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