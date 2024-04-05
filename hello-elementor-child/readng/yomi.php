<?php
/*
 * Template Name: Yomi
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
            <h1 class="ttl_main">音訓検索「あ」</h1>
            <aside>
                <div class="ads_wrapin link_pc">

                    <!-- 漢字辞典レスポンシブ１ -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3664445671894613" data-ad-slot="5169795341" data-ad-format="horizontal" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </aside>
            <p>「あ」から始まる読み方をする漢字です。</p>
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
                        <option value="#" selected>あ</option>
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
                    <li id="parts1_menu"><a href="#parts1">あ</a></li>
                    <li id="parts2_menu"><a href="#parts2">ああ</a></li>
                    <li id="parts3_menu"><a href="#parts3">あい</a></li>
                    <li id="parts4_menu"><a href="#parts4">あう</a></li>
                    <li id="parts5_menu"><a href="#parts5">あえ</a></li>
                    <li id="parts6_menu"><a href="#parts6">あお</a></li>
                    <li id="parts7_menu"><a href="#parts7">あか</a></li>
                    <li id="parts8_menu"><a href="#parts8">あき</a></li>
                    <li id="parts9_menu"><a href="#parts9">あく</a></li>
                    <li id="parts10_menu"><a href="#parts10">あけ</a></li>
                    <li id="parts11_menu"><a href="#parts11">あこ</a></li>
                    <li id="parts12_menu"><a href="#parts12">あさ</a></li>
                    <li id="parts13_menu"><a href="#parts13">あし</a></li>
                    <li id="parts14_menu"><a href="#parts14">あす</a></li>
                    <li id="parts15_menu"><a href="#parts15">あせ</a></li>
                    <li id="parts16_menu"><a href="#parts16">あそ</a></li>
                    <li id="parts17_menu"><a href="#parts17">あた</a></li>
                    <li id="parts18_menu"><a href="#parts18">あち</a></li>
                    <li id="parts19_menu"><a href="#parts19">あつ</a></li>
                    <li id="parts20_menu"><a href="#parts20">あて</a></li>
                    <li id="parts21_menu"><a href="#parts21">あと</a></li>
                    <li id="parts22_menu"><a href="#parts22">あな</a></li>
                    <li id="parts23_menu"><a href="#parts23">あに</a></li>
                    <li id="parts24_menu"><a href="#parts24">あね</a></li>
                    <li id="parts25_menu"><a href="#parts25">あは</a></li>
                    <li id="parts26_menu"><a href="#parts26">あひ</a></li>
                    <li id="parts27_menu"><a href="#parts27">あふ</a></li>
                    <li id="parts28_menu"><a href="#parts28">あま</a></li>
                    <li id="parts29_menu"><a href="#parts29">あみ</a></li>
                    <li id="parts30_menu"><a href="#parts30">あむ</a></li>
                    <li id="parts31_menu"><a href="#parts31">あめ</a></li>
                    <li id="parts32_menu"><a href="#parts32">あや</a></li>
                    <li id="parts33_menu"><a href="#parts33">あゆ</a></li>
                    <li id="parts34_menu"><a href="#parts34">あら</a></li>
                    <li id="parts35_menu"><a href="#parts35">あり</a></li>
                    <li id="parts36_menu"><a href="#parts36">ある</a></li>
                    <li id="parts37_menu"><a href="#parts37">あれ</a></li>
                    <li id="parts38_menu"><a href="#parts38">あわ</a></li>
                    <li id="parts39_menu"><a href="#parts39">あん</a></li>
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
                <h3 class="ttl_while">あ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="6606">丫<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="6034">襾<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="10103">覀<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24779">吖<span class="small">ア</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1605">亜<span class="small">ア</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2141">阿<span class="small">ア</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5705">亞<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13980">妸<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13984">妿<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19138">㚳<span class="small">ア</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2138">娃<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="3245">哇<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="2137">唖<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="10355">疴<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13070">俹<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16722">砨<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="3343">堊<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="3390">婀<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="5113">猗<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="6471">啞<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="11362">掗<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13392">啊<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14066">娿<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14101">婭<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14278">孲<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14366">屙<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19281">㝞<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19531">㢊<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19951">㫊<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21549">䋍<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="2140">蛙<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="4130">椏<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15406">氬<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20194">㰳<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22717">䢝<span class="small">ア</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1030">雅<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="5230">痾<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="7565">鈳<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="10380">瘂<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16827">稏<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18170">閜<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20886">㾨<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21109">䃁<span class="small">ア</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2139">窪<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="10924">漥<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18988">㗨<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21572">䋪<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="3799">鴉<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21234">䅬<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22456">䝝<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22998">䧽<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="3960">閼<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="4704">錏<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="7683">錒<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20903">㿄<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="6567">鼃<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="6568">䵷<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18508">鵶<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="4726">鐚<span class="small">ア</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts2">
                <h3 class="ttl_while">ああ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="3060">于<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6703">亏<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6704">亐<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3222">吁<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3252">咨<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2137">唖<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4562">欸<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5113">猗<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6471">啞<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/16096">焈<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4564">欹<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5263">粤<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3286">嗚<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3288">嗟<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24946">嗳<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25986">粵<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4925">煕<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22475">䝴<span class="small">ああ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="4924">熙<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4926">熈<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22456">䝝<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3303">噫<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12340">噯<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3949">齎<span class="small">ああ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts3">
                <h3 class="ttl_while">あい</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="kanjiy/12380">伌<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27774">𦣝<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5181">阨<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12961">毐<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13256">呃<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20252">㱼<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7919">阸<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10982">㤅<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12828">劸<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13266">呝<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18857">㕈<span class="small">アイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1320">哀<span class="small">アイ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2138">娃<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3245">哇<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11643">昹<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14775">徍<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15551">洼<span class="small">アイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1938">挨<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3340">埃<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10983">爱<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12846">欬<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13355">唉<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14055">娭<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16722">砨<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20185">㰪<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4562">欸<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13377">唲<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17249">菋<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19531">㢊<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20494">㶼<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25927">秽<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13789">堨<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16110">焥<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16992">絠<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26617">㗒<span class="small">アイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="440">愛<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4977">矮<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5195">隘<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13452">嗌<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13821">塧<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15753">溾<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20886">㾨<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23656">䵝<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24946">嗳<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25063">嫒<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18988">㗨<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24762">叆<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25363">暧<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25795">瑷<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5089">鞋<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12626">僾<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17869">躷<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21234">䅬<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22034">䔽<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23257">䬵<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24247">㵧<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3303">噫<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9658">薆<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12340">噯<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14237">嬡<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15922">濭<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20903">㿄<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23935">壒<span class="small">アイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1939">曖<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7716">鎄<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10232">璦<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17770">賹<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21855">䑂<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23029">䨠<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5561">穢<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5714">瞹<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7485">餲<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10484">皧<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18328">馤<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5442">藹<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7297">鞵<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18442">鯦<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24141">譪<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24157">醷<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27171">鑀<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3998">靄<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7061">鱫<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3991">靉<span class="small">アイ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25528">际<span class="small">あい</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="348">相<span class="small">あい</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="100">間<span class="small">あい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7868">閒<span class="small">あい</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="708">際<span class="small">あい</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2122">藍<span class="small">あい</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="100">間<span class="small">あいだ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7868">閒<span class="small">あいだ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts4">
                <h3 class="ttl_while">あう</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="kanjiy/18259">鞥<span class="small">アウ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19338">㞧<span class="small">あ（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="092">会<span class="small">あ（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="135">合<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12437">佸<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10504">盇<span class="small">あ（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="944">値<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5505">逅<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5564">盍<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24589">值<span class="small">あ（う）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2914">逢<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3917">晤<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5508">逑<span class="small">あ（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1379">遇<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26404">㑹<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5757">會<span class="small">あ（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1482">遭<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5526">遘<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5461">覯<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5531">邂<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5463">覲<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5464">覿<span class="small">あ（う）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts5">
                <h3 class="ttl_while">あえ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="kanjiy/25633">飨<span class="small">あえ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2324">饗<span class="small">あえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3280">喘<span class="small">あえ（ぐ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11764">肎<span class="small">あ（えて）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1684">肯<span class="small">あ（えて）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11765">肻<span class="small">あ（えて）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1352">敢<span class="small">あ（えて）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26162">齑<span class="small">あえもの</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/23133">䪠<span class="small">あえもの</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5321">韲<span class="small">あえもの</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6660">䪡<span class="small">あえもの</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/27437">䪢<span class="small">あえもの</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/23134">䪣<span class="small">あえもの</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6659">虀<span class="small">あえもの</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5320">齏<span class="small">あえもの</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="439">和<span class="small">あ（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/13294">咊<span class="small">あ（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14842">惒<span class="small">あ（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26162">齑<span class="small">あ（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/23133">䪠<span class="small">あ（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5321">韲<span class="small">あ（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6660">䪡<span class="small">あ（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/27437">䪢<span class="small">あ（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/23134">䪣<span class="small">あ（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6659">虀<span class="small">あ（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/18616">龢<span class="small">あ（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5320">齏<span class="small">あ（える）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts6">
                <h3 class="ttl_while">あお</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="kanjiy/26347">苍<span class="small">あお</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="044">青<span class="small">あお</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8028">靑<span class="small">あお</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/17540">袄<span class="small">あお</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14309">寈<span class="small">あお</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2669">蒼<span class="small">あお</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2894">碧<span class="small">あお</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2195">襖<span class="small">あお</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2282">葵<span class="small">あおい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25508">沧<span class="small">あお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26347">苍<span class="small">あお（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="044">青<span class="small">あお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8028">靑<span class="small">あお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14309">寈<span class="small">あお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/21958">䓗<span class="small">あお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2668">葱<span class="small">あお（い）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2669">蒼<span class="small">あお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4406">滄<span class="small">あお（い）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2894">碧<span class="small">あお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9621">蔥<span class="small">あお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/18583">黾<span class="small">あおがえる</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3849">黽<span class="small">あおがえる</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6223">檍<span class="small">あおき</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2389">梧<span class="small">あおぎり</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1072">仰<span class="small">あお（ぐ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1164">扇<span class="small">あお（ぐ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3753">黝<span class="small">あおぐろ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/27708">𬵪<span class="small">あおさば</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1072">仰<span class="small">あおの（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4057">蜀<span class="small">あおむし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5411">蔬<span class="small">あおもの</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2637">煽<span class="small">あお（り）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3237">呷<span class="small">あお（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2637">煽<span class="small">あお（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2815">簸<span class="small">あお（る）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts7">
                <h3 class="ttl_while">あか</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1180">丹<span class="small">あか</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1125">朱<span class="small">あか</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="045">赤<span class="small">あか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/13687">坸<span class="small">あか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19580">㣋<span class="small">あか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2336">垢<span class="small">あか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5935">淦<span class="small">あか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/16086">烾<span class="small">あか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4759">絳<span class="small">あか</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2853">緋<span class="small">あか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8336">䞓<span class="small">あか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/17020">緽<span class="small">あか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4248">膩<span class="small">あか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4554">赭<span class="small">あか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7395">頳<span class="small">あか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7396">赬<span class="small">あか</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1125">朱<span class="small">あか（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="045">赤<span class="small">あか（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="870">紅<span class="small">あか（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5365">殷<span class="small">あか（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/16086">烾<span class="small">あか（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4759">絳<span class="small">あか（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2243">赫<span class="small">あか（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4554">赭<span class="small">あか（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6734">騂<span class="small">あか（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5116">猩<span class="small">あかいろ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4047">蚶<span class="small">あかがい</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="779">銅<span class="small">あかがね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/23728">龟<span class="small">あかぎれ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4218">胝<span class="small">あかぎれ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4235">胼<span class="small">あかぎれ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1975">亀<span class="small">あかぎれ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6498">腁<span class="small">あかぎれ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5601">皹<span class="small">あかぎれ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5602">皸<span class="small">あかぎれ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5670">龜<span class="small">あかぎれ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19252">㜾<span class="small">あかご</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3423">孩<span class="small">あかご</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2175">嬰<span class="small">あかご</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14262">孆<span class="small">あかご</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2963">莱<span class="small">あかざ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6456">萊<span class="small">あかざ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5437">藜<span class="small">あかざ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="580">灯<span class="small">あかし</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="734">証<span class="small">あかし</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5673">燈<span class="small">あかし</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="498">験<span class="small">あかし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6742">騐<span class="small">あかし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5699">證<span class="small">あかし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22867">䥌<span class="small">あかし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22893">䥭<span class="small">あかし</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6353">驗<span class="small">あかし</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="734">証<span class="small">あか（し）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5699">證<span class="small">あか（し）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22867">䥌<span class="small">あか（し）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22893">䥭<span class="small">あか（し）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="228">明<span class="small">あ（かす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11642">朙<span class="small">あ（かす）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1559">飽<span class="small">あ（かす）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="734">証<span class="small">あか（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5699">證<span class="small">あか（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22867">䥌<span class="small">あか（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22893">䥭<span class="small">あか（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24761">县<span class="small">あがた</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="289">県<span class="small">あがた</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5913">縣<span class="small">あがた</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1660">暁<span class="small">あかつき</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5683">曉<span class="small">あかつき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11692">皢<span class="small">あかつき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4554">赭<span class="small">あかつち</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5498">贖<span class="small">あがな（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5485">貲<span class="small">あがな（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1683">購<span class="small">あがな（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5498">贖<span class="small">あがな（う）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2642">茜<span class="small">あかね</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1772">崇<span class="small">あが（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14462">崈<span class="small">あが（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="045">赤<span class="small">あか（らむ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="228">明<span class="small">あか（らむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11642">朙<span class="small">あか（らむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/16086">烾<span class="small">あか（らむ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="045">赤<span class="small">あか（らめる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/16086">烾<span class="small">あか（らめる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4553">赧<span class="small">あから（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="580">灯<span class="small">あかり</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5673">燈<span class="small">あかり</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="228">明<span class="small">あ（かり）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11642">朙<span class="small">あ（かり）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6589">丄<span class="small">あ（がる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="039">上<span class="small">あ（がる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3063">亢<span class="small">あ（がる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19931">㪯<span class="small">あ（がる）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2399">昂<span class="small">あ（がる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3910">昜<span class="small">あ（がる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11632">昻<span class="small">あ（がる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24534">举<span class="small">あ（がる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="481">挙<span class="small">あ（がる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1581">揚<span class="small">あ（がる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/15062">敭<span class="small">あ（がる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6193">舉<span class="small">あ（がる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6192">擧<span class="small">あ（がる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7438">颺<span class="small">あ（がる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/23236">䬗<span class="small">あ（がる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1842">騰<span class="small">あ（がる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4513">驤<span class="small">あ（がる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="228">明<span class="small">あか（るい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5467">皎<span class="small">あか（るい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11642">朙<span class="small">あか（るい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10467">賋<span class="small">あか（るい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="228">明<span class="small">あか（るむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11642">朙<span class="small">あか（るむ）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts8">
                <h3 class="ttl_while">あき</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="157">秋<span class="small">あき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10832">秌<span class="small">あき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2513">穐<span class="small">あき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2514">龝<span class="small">あき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8326">贉<span class="small">あきさ（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3915">旻<span class="small">あきぞら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3602">慊<span class="small">あきた（りない）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4567">歉<span class="small">あきた（りない）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3602">慊<span class="small">あきた（りる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4236">腮<span class="small">あぎと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5141">顋<span class="small">あぎと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3876">鰓<span class="small">あぎと</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="334">商<span class="small">あきな（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5482">賈<span class="small">あきな（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3076">估<span class="small">あきな（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="334">商<span class="small">あきな（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1236">販<span class="small">あきな（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2135">貿<span class="small">あきな（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5482">賈<span class="small">あきな（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2040">詮<span class="small">あきらか</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="068">白<span class="small">あき（らか）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2495">灼<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3153">冏<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10463">旳<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/13609">囧<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25031">奂<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25357">旷<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25608">灿<span class="small">あき（らか）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="228">明<span class="small">あき（らか）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="575">的<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3904">杲<span class="small">あき（らか）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="332">昭<span class="small">あき（らか）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2979">亮<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3367">奐<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3927">昿<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4905">炳<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4906">炯<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/16030">炤<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25359">显<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25524">浏<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26364">荦<span class="small">あき（らか）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1317">朗<span class="small">あき（らか）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1515">哲<span class="small">あき（らか）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2400">晃<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3111">倬<span class="small">あき（らか）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="3907">晟<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4855">耿<span class="small">あき（らか）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6206">晄<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/13743">埑<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/16049">烉<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19974">㫫<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25361">晔<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25536">涣<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26386">莹<span class="small">あき（らか）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2046">爽<span class="small">あき（らか）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2868">彬<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3917">晤<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3918">晧<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3920">晢<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4907">烱<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6212">朖<span class="small">あき（らか）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6366">朗<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6537">晣<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10468">晥<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11642">朙<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11678">晠<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/13401">啠<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25638">焕<span class="small">あき（らか）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1439">晶<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3921">晰<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4388">渙<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4913">焜<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5469">皖<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6536">晳<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/13414">喆<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3934">暘<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4915">煥<span class="small">あき（らか）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="4917">煌<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5267">粲<span class="small">あき（らか）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="514">察<span class="small">あき（らか）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1749">彰<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3929">曄<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4353">韶<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4836">犖<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6264">睿<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11728">曅<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4630">瑩<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25425">閳<span class="small">あき（らか）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2174">叡<span class="small">あき（らか）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2126">瞭<span class="small">あき（らか）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2453">燦<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/15124">曗<span class="small">あき（らか）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1677">顕<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4446">瀏<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/13574">嚞<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3926">曠<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/23938">壡<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3969">闡<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11671">兤<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/23112">䪄<span class="small">あき（らか）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5782">顯<span class="small">あき（らか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5080">覈<span class="small">あき（らかにする）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2066">諦<span class="small">あきら（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24745">厌<span class="small">あ（きる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6065">劵<span class="small">あ（きる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/16810">秗<span class="small">あ（きる）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2363">倦<span class="small">あ（きる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1559">飽<span class="small">あ（きる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5279">飫<span class="small">あ（きる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2182">厭<span class="small">あ（きる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4843">酲<span class="small">あ（きる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2688">呆<span class="small">あき（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3585">惘<span class="small">あき（れる）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts9">
                <h3 class="ttl_while">あく</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo onyomi"><a class="color1" href="1909">厄<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="11235">戹<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="3661">扼<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13256">呃<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26295">肟<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26345">苊<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="11297">㧖<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="11954">枙<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13266">呝<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="2137">唖<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16722">砨<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17416">蚅<span class="small">アク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="240">悪<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="3343">堊<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="4459">軛<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="6471">啞<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12331">偓<span class="small">アク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1003">握<span class="small">アク</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2142">渥<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="3490">幄<span class="small">アク</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5964">惡<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="8486">軶<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13422">喔<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14124">媉<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17736">豟<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27108">鈪<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="11416">搹<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="11441">搤<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="11857">腛<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13452">嗌<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15227">楃<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16526">琧<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21354">䇶<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="10969">僫<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17457">蝁<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12338">噁<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16915">箹<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22368">䛩<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22604">䠎<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17753">貖<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21854">䑁<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="6680">龏<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22403">䜑<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18215">雤<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23363">䮸<span class="small">アク</span></a></li>
                    <li class="others_kanji onyomi"><a href="3773">齷<span class="small">アク</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2370">鹸<span class="small">あく</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6475">鹼<span class="small">あく</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12399">开<span class="small">あ（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="013">空<span class="small">あ（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="228">明<span class="small">あ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11642">朙<span class="small">あ（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="258">開<span class="small">あ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7805">鐖<span class="small">あぐ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2229">芥<span class="small">あくた</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5404">蔡<span class="small">あくた</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5788">圷<span class="small">あくつ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="495">欠<span class="small">あくび</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/18682">㐸<span class="small">あくび</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/27807">𡙇<span class="small">あくび</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6065">劵<span class="small">あぐ（む）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2363">倦<span class="small">あぐ（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4254">趺<span class="small">あぐら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4256">跏<span class="small">あぐら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8398">踑<span class="small">あぐら</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="228">明<span class="small">あ（くる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11642">朙<span class="small">あ（くる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5605">翊<span class="small">あくるひ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts10">
                <h3 class="ttl_while">あけ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1125">朱<span class="small">あけ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2853">緋<span class="small">あけ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="795">評<span class="small">あげつら（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1002">論<span class="small">あげつら（う）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2540">曙<span class="small">あけぼの</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6606">丫<span class="small">あげまき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3057">丱<span class="small">あげまき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12399">开<span class="small">あ（ける）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="013">空<span class="small">あ（ける）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="228">明<span class="small">あ（ける）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11642">朙<span class="small">あ（ける）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="258">開<span class="small">あ（ける）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6589">丄<span class="small">あ（げる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="039">上<span class="small">あ（げる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3657">扛<span class="small">あ（げる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3666">抖<span class="small">あ（げる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19931">㪯<span class="small">あ（げる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24534">举<span class="small">あ（げる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="481">挙<span class="small">あ（げる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1142">称<span class="small">あ（げる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3692">掀<span class="small">あ（げる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1581">揚<span class="small">あ（げる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11273">摃<span class="small">あ（げる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/15062">敭<span class="small">あ（げる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6127">稱<span class="small">あ（げる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8432">勪<span class="small">あ（げる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6193">舉<span class="small">あ（げる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6192">擧<span class="small">あ（げる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5612">翹<span class="small">あ（げる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8431">蹻<span class="small">あ（げる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10892">穪<span class="small">あ（げる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4513">驤<span class="small">あ（げる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/27701">𡚴<span class="small">あけん</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5989">妛<span class="small">あけん</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts11">
                <h3 class="ttl_while">あこ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="4236">腮<span class="small">あご</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5137">頤<span class="small">あご</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5138">頷<span class="small">あご</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7398">頥<span class="small">あご</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7399">顊<span class="small">あご</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1968">顎<span class="small">あご</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5141">顋<span class="small">あご</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4168">榕<span class="small">あこう</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1988">憬<span class="small">あこが（れる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2026">憧<span class="small">あこが（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4651">鬚<span class="small">あごひげ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5024">衵<span class="small">あこめ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5030">袙<span class="small">あこめ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts12">
                <h3 class="ttl_while">あさ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="5336">苴<span class="small">あさ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3908">晁<span class="small">あさ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1902">麻<span class="small">あさ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="191">朝<span class="small">あさ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7275">蔴<span class="small">あさ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="029">字<span class="small">あざ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5228">痣<span class="small">あざ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26154">黡<span class="small">あざ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3758">黶<span class="small">あざ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="554">浅<span class="small">あさ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5978">淺<span class="small">あさ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5414">蕣<span class="small">あさがお</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9647">橓<span class="small">あさがお</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="366">調<span class="small">あざけ（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2061">嘲<span class="small">あざけ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/17709">謿<span class="small">あざけ（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="029">字<span class="small">あざな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4747">糺<span class="small">あざな（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1653">糾<span class="small">あざな（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4756">紵<span class="small">あさぬの</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2327">旭<span class="small">あさひ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/15087">旮<span class="small">あさひ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3930">暾<span class="small">あさひ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5418">薊<span class="small">あざみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5586">罔<span class="small">あざむ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4754">紿<span class="small">あざむ（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1366">欺<span class="small">あざむ（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1697">詐<span class="small">あざむ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2681">詑<span class="small">あざむ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4957">詒<span class="small">あざむ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/18960">㗄<span class="small">あざむ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4958">詭<span class="small">あざむ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/17656">誈<span class="small">あざむ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4967">誣<span class="small">あざむ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4970">誑<span class="small">あざむ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/17021">緿<span class="small">あざむ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25839">瞒<span class="small">あざむ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5169">瞞<span class="small">あざむ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4996">謾<span class="small">あざむ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25608">灿<span class="small">あざ（やか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25618">烂<span class="small">あざ（やか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/17783">赻<span class="small">あざ（やか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5267">粲<span class="small">あざ（やか）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1166">鮮<span class="small">あざ（やか）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2453">燦<span class="small">あざ（やか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4944">爛<span class="small">あざ（やか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24063">爤<span class="small">あざ（やか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4059">蜊<span class="small">あさり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3866">鯏<span class="small">あさり</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="628">漁<span class="small">あさ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6960">鮾<span class="small">あざ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6961">鯘<span class="small">あざ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3254">哂<span class="small">あざわら（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3291">嗤<span class="small">あざわら（う）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts13">
                <h3 class="ttl_while">あし</h3>
                <ul class="search_parts yomi_parts">
                    <li class="jimmei kunyomi"><a class="color2" href="2543">疋<span class="small">あし</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="053">足<span class="small">あし</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5445">芦<span class="small">あし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22557">䟖<span class="small">あし</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1055">脚<span class="small">あし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4254">趺<span class="small">あし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4255">趾<span class="small">あし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5388">葭<span class="small">あし</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2152">葦<span class="small">あし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11814">腳<span class="small">あし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11815">踋<span class="small">あし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5444">蘆<span class="small">あし</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="240">悪<span class="small">あ（し）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5964">惡<span class="small">あ（し）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10969">僫<span class="small">あ（し）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="414">味<span class="small">あじ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7128">䳑<span class="small">あじ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2674">鯵<span class="small">あじ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2673">鰺<span class="small">あじ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/17837">踨<span class="small">あしあと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4285">蹤<span class="small">あしあと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4283">蹠<span class="small">あしうら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4265">跫<span class="small">あしおと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4595">簣<span class="small">あじか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4037">桎<span class="small">あしかせ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4730">鐐<span class="small">あしかせ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4734">鐺<span class="small">あしがなえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9013">絁<span class="small">あしぎぬ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12736">刖<span class="small">あしき（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4500">騅<span class="small">あしげ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2056">旦<span class="small">あした</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="3919">晨<span class="small">あした</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19979">㫳<span class="small">あした</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="191">朝<span class="small">あした</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4279">蹇<span class="small">あしなえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4257">跖<span class="small">あしのうら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4283">蹠<span class="small">あしのうら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4523">笳<span class="small">あしぶえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5388">葭<span class="small">あしぶえ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8790">䈔<span class="small">あしぶえ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="414">味<span class="small">あじ（わう）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1973">玩<span class="small">あじ（わう）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3240">咀<span class="small">あじ（わう）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/17759">貦<span class="small">あじ（わう）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2268">翫<span class="small">あじ（わう）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts14">
                <h3 class="ttl_while">あす</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="818">預<span class="small">あず（かる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1291">与<span class="small">あずか（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6294">與<span class="small">あずか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5343">荅<span class="small">あずき</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="818">預<span class="small">あず（ける）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2470">梓<span class="small">あずさ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12059">榟<span class="small">あずさ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3344">堋<span class="small">あずち</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="202">東<span class="small">あずま</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1827">亭<span class="small">あずまや</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts15">
                <h3 class="ttl_while">あせ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1040">汗<span class="small">あせ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="021">校<span class="small">あぜ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1534">畔<span class="small">あぜ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5448">畛<span class="small">あぜ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2353">畦<span class="small">あぜ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/20836">㽯<span class="small">あぜ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5178">阡<span class="small">あぜみち</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="060">町<span class="small">あぜみち</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5950">甼<span class="small">あぜみち</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5184">陌<span class="small">あぜみち</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5058">褪<span class="small">あ（せる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3568">悁<span class="small">あせ（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1442">焦<span class="small">あせ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/20546">㸈<span class="small">あせ（る）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts16">
                <h3 class="ttl_while">あそ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="2285">妓<span class="small">あそびめ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3109">倡<span class="small">あそびめ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2555">娼<span class="small">あそびめ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22705">䢊<span class="small">あそ（ぶ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3786">敖<span class="small">あそ（ぶ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/20347">㳺<span class="small">あそ（ぶ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="422">遊<span class="small">あそ（ぶ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4398">游<span class="small">あそ（ぶ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/17921">逰<span class="small">あそ（ぶ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2002">傲<span class="small">あそ（ぶ）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2273">嬉<span class="small">あそ（ぶ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5528">遨<span class="small">あそ（ぶ）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts17">
                <h3 class="ttl_while">あた</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="3253">咫<span class="small">あた</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2296">仇<span class="small">あだ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/18763">㓂<span class="small">あだ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="578">徒<span class="small">あだ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3157">冤<span class="small">あだ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5771">冦<span class="small">あだ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14306">宼<span class="small">あだ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3430">寇<span class="small">あだ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6116">寃<span class="small">あだ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="776">敵<span class="small">あだ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5013">讐<span class="small">あだ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5014">讎<span class="small">あだ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3076">估<span class="small">あたい</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="193">直<span class="small">あたい</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="654">価<span class="small">あたい</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="944">値<span class="small">あたい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24589">值<span class="small">あたい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5482">賈<span class="small">あたい</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5838">價<span class="small">あたい</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="785">能<span class="small">あた（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1291">与<span class="small">あた（える）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="424">予<span class="small">あた（える）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="598">付<span class="small">あた（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3687">捐<span class="small">あた（える）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6294">與<span class="small">あた（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4569">歛<span class="small">あた（える）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1940">宛<span class="small">あたか（も）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2248">恰<span class="small">あたか（も）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/18763">㓂<span class="small">あだ（する）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5771">冦<span class="small">あだ（する）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14306">宼<span class="small">あだ（する）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3430">寇<span class="small">あだ（する）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="256">温<span class="small">あたた（か）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="942">暖<span class="small">あたた（か）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6447">溫<span class="small">あたた（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11707">㬉<span class="small">あたた（か）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="256">温<span class="small">あたた（かい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="942">暖<span class="small">あたた（かい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3935">暄<span class="small">あたた（かい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4919">煖<span class="small">あたた（かい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4921">煦<span class="small">あたた（かい）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6447">溫<span class="small">あたた（かい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11707">㬉<span class="small">あたた（かい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/16145">煗<span class="small">あたた（かい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4936">燠<span class="small">あたた（かい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="256">温<span class="small">あたた（まる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="942">暖<span class="small">あたた（まる）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6447">溫<span class="small">あたた（まる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11707">㬉<span class="small">あたた（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25036">妪<span class="small">あたた（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="256">温<span class="small">あたた（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="942">暖<span class="small">あたた（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4919">煖<span class="small">あたた（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4921">煦<span class="small">あたた（める）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6447">溫<span class="small">あたた（める）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11707">㬉<span class="small">あたた（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/16145">煗<span class="small">あたた（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3404">嫗<span class="small">あたた（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25026">头<span class="small">あたま</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="167">頭<span class="small">あたま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/17783">赻<span class="small">あたら（しい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="163">新<span class="small">あたら（しい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1166">鮮<span class="small">あたら（しい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="607">辺<span class="small">あた（り）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/17910">边<span class="small">あた（り）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5779">邉<span class="small">あた（り）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5780">邊<span class="small">あた（り）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="369">丁<span class="small">あ（たる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="059">中<span class="small">あ（たる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3063">亢<span class="small">あ（たる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="682">句<span class="small">あ（たる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="200">当<span class="small">あ（たる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1195">抵<span class="small">あ（たる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1657">享<span class="small">あ（たる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14923">拞<span class="small">あ（たる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4830">牴<span class="small">あ（たる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6721">亯<span class="small">あ（たる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5865">當<span class="small">あ（たる）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts18">
                <h3 class="ttl_while">あち</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="kanjiy/13318">咹<span class="small">アチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14435">峖<span class="small">アチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15533">洝<span class="small">アチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13789">堨<span class="small">アチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22035">䔾<span class="small">アチ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts19">
                <h3 class="ttl_while">あつ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="kanjiy/12819">劜<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13630">圠<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27818">𡴭<span class="small">アツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="640">圧<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10900">穵<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24744">压<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4458">軋<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13286">呾<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11320">挖<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13318">咹<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14435">峖<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15533">洝<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11794">胺<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6884">䰲<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11395">揠<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13789">堨<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24069">猰<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5522">遏<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13461">嗗<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23656">䵝<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23909">嗢<span class="small">アツ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2143">斡<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10921">窫<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23374">䯉<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7380">頞<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14205">嫼<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16759">磍<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22035">䔾<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3960">閼<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8287">䝟<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8518">輵<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6153">壓<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22933">䦪<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23175">䫔<span class="small">アツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6649">齃<span class="small">アツ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19962">㫗<span class="small">あつ（い）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2485">竺<span class="small">あつ（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="701">厚<span class="small">あつ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3213">厖<span class="small">あつ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/13704">垕<span class="small">あつ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/16073">热<span class="small">あつ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22779">䣨<span class="small">あつ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/23977">庬<span class="small">あつ（い）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2535">惇<span class="small">あつ（い）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2537">淳<span class="small">あつ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8750">䣩<span class="small">あつ（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="328">暑<span class="small">あつ（い）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2142">渥<span class="small">あつ（い）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2714">湛<span class="small">あつ（い）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2807">敦<span class="small">あつ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4233">腆<span class="small">あつ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11114">㥫<span class="small">あつ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/15719">湻<span class="small">あつ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3064">亶<span class="small">あつ（い）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6386">暑<span class="small">あつ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8875">䔍<span class="small">あつ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11563">㪟<span class="small">あつ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/20391">㴴<span class="small">あつ（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="586">熱<span class="small">あつ（い）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2532">醇<span class="small">あつ（い）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="4972">諄<span class="small">あつ（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1522">篤<span class="small">あつ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8749">醕<span class="small">あつ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4936">燠<span class="small">あつ（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1004">扱<span class="small">あつか（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26320">腼<span class="small">あつ（かましい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4359">靦<span class="small">あつ（かましい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5521">遖<span class="small">あっぱれ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19338">㞧<span class="small">あつ（まる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="092">会<span class="small">あつ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25268">抢<span class="small">あつ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5347">荐<span class="small">あつ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5376">萃<span class="small">あつ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/13134">凑<span class="small">あつ（まる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="322">集<span class="small">あつ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2509">揖<span class="small">あつ（まる）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2660">湊<span class="small">あつ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5607">翕<span class="small">あつ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/17084">翖<span class="small">あつ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24246">㴞<span class="small">あつ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26404">㑹<span class="small">あつ（まる）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2306">鳩<span class="small">あつ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3712">搶<span class="small">あつ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4410">滔<span class="small">あつ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5757">會<span class="small">あつ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4860">聚<span class="small">あつ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5406">蔟<span class="small">あつ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/18723">㒆<span class="small">あつ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/27777">𠍱<span class="small">あつ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4476">輳<span class="small">あつ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2578">鍾<span class="small">あつ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4591">簇<span class="small">あつ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3742">攅<span class="small">あつ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6868">鬷<span class="small">あつ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6492">攢<span class="small">あつ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7977">雧<span class="small">あつ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19338">㞧<span class="small">あつ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25498">汇<span class="small">あつ（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="092">会<span class="small">あつ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5376">萃<span class="small">あつ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5508">逑<span class="small">あつ（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="322">集<span class="small">あつ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5607">翕<span class="small">あつ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/17084">翖<span class="small">あつ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19914">㪘<span class="small">あつ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26404">㑹<span class="small">あつ（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1945">彙<span class="small">あつ（める）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2306">鳩<span class="small">あつ（める）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2518">蒐<span class="small">あつ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5757">會<span class="small">あつ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24374">彚<span class="small">あつ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4860">聚<span class="small">あつ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/18723">㒆<span class="small">あつ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/27777">𠍱<span class="small">あつ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4788">緝<span class="small">あつ（める）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2519">輯<span class="small">あつ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2578">鍾<span class="small">あつ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3790">斂<span class="small">あつ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3742">攅<span class="small">あつ（める）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2455">纂<span class="small">あつ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4822">纉<span class="small">あつ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6492">攢<span class="small">あつ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6506">纘<span class="small">あつ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7977">雧<span class="small">あつ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6278">羮<span class="small">あつもの</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5131">羹<span class="small">あつもの</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4963">誂<span class="small">あつら（え）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4963">誂<span class="small">あつら（える）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts20">
                <h3 class="ttl_while">あて</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1940">宛<span class="small">あて</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4154">椹<span class="small">あてぎ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4986">諷<span class="small">あてこす（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5615">窈<span class="small">あで（やか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26336">艳<span class="small">あで（やか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5616">窕<span class="small">あで（やか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25058">婵<span class="small">あで（やか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3410">嬋<span class="small">あで（やか）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1953">艶<span class="small">あで（やか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6296">艷<span class="small">あで（やか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9356">豓<span class="small">あで（やか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9357">豔<span class="small">あで（やか）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="059">中<span class="small">あ（てる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="200">当<span class="small">あ（てる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1727">充<span class="small">あ（てる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1940">宛<span class="small">あ（てる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="892">射<span class="small">あ（てる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22638">䠶<span class="small">あ（てる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5865">當<span class="small">あ（てる）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts21">
                <h3 class="ttl_while">あと</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="3332">址<span class="small">あと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5180">阯<span class="small">あと</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="125">後<span class="small">あと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5506">迹<span class="small">あと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22557">䟖<span class="small">あと</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2005">痕<span class="small">あと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4255">趾<span class="small">あと</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1163">跡<span class="small">あと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22580">䟱<span class="small">あと</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2048">踪<span class="small">あと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3352">墟<span class="small">あと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/17837">踨<span class="small">あと</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2496">蹟<span class="small">あと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4285">蹤<span class="small">あと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5506">迹<span class="small">あとかた</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1163">跡<span class="small">あとかた</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22580">䟱<span class="small">あとかた</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5043">裔<span class="small">あとつぎ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts22">
                <h3 class="ttl_while">あな</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1398">孔<span class="small">あな</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="858">穴<span class="small">あな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10901">宆<span class="small">あな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24973">圹<span class="small">あな</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1405">坑<span class="small">あな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3330">坎<span class="small">あな</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="013">空<span class="small">あな</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5613">穹<span class="small">あな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25935">窍<span class="small">あな</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1898">堀<span class="small">あな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6542">埳<span class="small">あな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3465">嵌<span class="small">あな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25937">窝<span class="small">あな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3350">塹<span class="small">あな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5619">窩<span class="small">あな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19408">㟻<span class="small">あな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6104">篏<span class="small">あな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/13878">壍<span class="small">あな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/21301">䆻<span class="small">あな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3355">壙<span class="small">あな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5622">竅<span class="small">あな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5624">竇<span class="small">あな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4283">蹠<span class="small">あなうら</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="111">強<span class="small">あなが（ち）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14742">强<span class="small">あなが（ち）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5617">窖<span class="small">あなぐら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5624">竇<span class="small">あなぐら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24730">务<span class="small">あなど（り）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="813">務<span class="small">あなど（り）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24204">㚢<span class="small">あなど（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24730">务<span class="small">あなど（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2130">弄<span class="small">あなど（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12459">㑄<span class="small">あなど（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/27370">㺯<span class="small">あなど（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="647">易<span class="small">あなど（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1878">侮<span class="small">あなど（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5103">狎<span class="small">あなど（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6373">侮<span class="small">あなど（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14932">挊<span class="small">あなど（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2803">涜<span class="small">あなど（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4041">蚩<span class="small">あなど（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14941">挵<span class="small">あなど（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="813">務<span class="small">あなど（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/18960">㗄<span class="small">あなど（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24552">亵<span class="small">あなど（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2002">傲<span class="small">あなど（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1278">慢<span class="small">あなど（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2268">翫<span class="small">あなど（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5062">褻<span class="small">あなど（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/13137">凟<span class="small">あなど（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4996">謾<span class="small">あなど（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6480">瀆<span class="small">あなど（る）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts23">
                <h3 class="ttl_while">あに</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="114">兄<span class="small">あに</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25107">岂<span class="small">あに</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1694">昆<span class="small">あに</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5646">豈<span class="small">あに</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/18751">㒭<span class="small">あに</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19160">㛐<span class="small">あによめ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3401">嫂<span class="small">あによめ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19184">㛮<span class="small">あによめ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts24">
                <h3 class="ttl_while">あね</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="145">姉<span class="small">あね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2489">姐<span class="small">あね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/13993">姊<span class="small">あね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14129">媎<span class="small">あね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2489">姐<span class="small">あねご</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14129">媎<span class="small">あねご</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts25">
                <h3 class="ttl_while">あは</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="kanjiy/24773">发<span class="small">あば（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1625">劾<span class="small">あば（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8114">呧<span class="small">あば（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="391">発<span class="small">あば（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4948">訐<span class="small">あば（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19971">㫧<span class="small">あば（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4956">詆<span class="small">あば（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5749">發<span class="small">あば（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25224">彂<span class="small">あば（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="811">暴<span class="small">あば（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11717">㬥<span class="small">あば（く）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="3021">肋<span class="small">あばら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4824">骭<span class="small">あばら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/23378">䯎<span class="small">あばら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19971">㫧<span class="small">あば（れる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="811">暴<span class="small">あば（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11717">㬥<span class="small">あば（れる）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts26">
                <h3 class="ttl_while">あひ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="623">浴<span class="small">あ（びせる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3825">鶩<span class="small">あひる</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="623">浴<span class="small">あ（びる）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts27">
                <h3 class="ttl_while">あふ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="2924">虻<span class="small">あぶ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24321">䖟<span class="small">あぶ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6526">蝱<span class="small">あぶ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1891">泡<span class="small">あぶく</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="842">危<span class="small">あぶ（ない）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2800">鐙<span class="small">あぶみ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="421">油<span class="small">あぶら</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1269">肪<span class="small">あぶら</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1116">脂<span class="small">あぶら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4237">腴<span class="small">あぶら</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2411">膏<span class="small">あぶら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4248">膩<span class="small">あぶら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4248">膩<span class="small">あぶらあか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5433">薹<span class="small">あぶらな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4069">蜚<span class="small">あぶらむし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4900">炙<span class="small">あぶ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4903">炮<span class="small">あぶ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/21766">䏑<span class="small">あぶ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4914">焙<span class="small">あぶ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4918">煬<span class="small">あぶ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/16200">熫<span class="small">あぶ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4928">熹<span class="small">あぶ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4931">燔<span class="small">あぶ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/16209">熺<span class="small">あぶ（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2088">氾<span class="small">あふ（れる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2089">汎<span class="small">あふ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/20322">㳑<span class="small">あふ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5581">衍<span class="small">あふ（れる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1948">淫<span class="small">あふ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4402">渝<span class="small">あふ（れる）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2159">溢<span class="small">あふ（れる）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts28">
                <h3 class="ttl_while">あま</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="061">天<span class="small">あま</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1849">尼<span class="small">あま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/13119">兲<span class="small">あま</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="003">雨<span class="small">あま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2718">蛋<span class="small">あま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4064">蜑<span class="small">あま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6079">塰<span class="small">あま</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1038">甘<span class="small">あま（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/21872">䑚<span class="small">あま（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2769">甜<span class="small">あま（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10289">甛<span class="small">あま（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4851">醴<span class="small">あま（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1038">甘<span class="small">あま（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4807">繖<span class="small">あまがさ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5328">苻<span class="small">あまかわ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4851">醴<span class="small">あまざけ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="817">余<span class="small">あま（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1756">剰<span class="small">あま（す）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6061">剩<span class="small">あま（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5819">餘<span class="small">あま（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="011">九<span class="small">あまた</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3990">霤<span class="small">あまだれ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1756">剰<span class="small">あまつさ（え）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6061">剩<span class="small">あまつさ（え）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4330">泛<span class="small">あまね（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="530">周<span class="small">あまね（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1256">普<span class="small">あまね（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1888">遍<span class="small">あまね（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11701">暜<span class="small">あまね（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19268">㝑<span class="small">あまね（し）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2113">弥<span class="small">あまね（し）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11603">㫄<span class="small">あまね（し）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/13127">冾<span class="small">あまね（し）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4344">洽<span class="small">あまね（し）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/15555">浃<span class="small">あまね（し）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3780">旁<span class="small">あまね（し）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4373">浹<span class="small">あまね（し）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14786">徧<span class="small">あまね（し）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4408">溥<span class="small">あまね（し）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5924">彌<span class="small">あまね（し）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/18163">镾<span class="small">あまね（し）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4432">潦<span class="small">あまみず</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1038">甘<span class="small">あま（やかす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3068">仂<span class="small">あま（り）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5581">衍<span class="small">あま（り）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1593">零<span class="small">あま（り）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5452">畸<span class="small">あま（り）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4844">酳<span class="small">あま（り）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/18230">霗<span class="small">あま（り）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="817">余<span class="small">あま（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1756">剰<span class="small">あま（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6061">剩<span class="small">あま（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2038">羨<span class="small">あま（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5819">餘<span class="small">あま（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5494">贏<span class="small">あま（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5298">饒<span class="small">あま（る）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts29">
                <h3 class="ttl_while">あみ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="kanjiy/13122">冈<span class="small">あみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4322">汕<span class="small">あみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6041">网<span class="small">あみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5586">罔<span class="small">あみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/17060">罗<span class="small">あみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5587">罘<span class="small">あみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5588">罠<span class="small">あみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5589">罟<span class="small">あみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/27598">䋞<span class="small">あみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5591">罨<span class="small">あみ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1285">網<span class="small">あみ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1920">羅<span class="small">あみ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts30">
                <h3 class="ttl_while">あむ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="804">編<span class="small">あ（む）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4815">辮<span class="small">あ（む）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts31">
                <h3 class="ttl_while">あめ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="061">天<span class="small">あめ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/13119">兲<span class="small">あめ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="003">雨<span class="small">あめ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2155">飴<span class="small">あめ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5281">餃<span class="small">あめ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="956">糖<span class="small">あめ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8977">糛<span class="small">あめ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts32">
                <h3 class="ttl_while">あや</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="075">文<span class="small">あや</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1288">紋<span class="small">あや</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="333">章<span class="small">あや</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1107">彩<span class="small">あや</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2861">彪<span class="small">あや</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2368">絢<span class="small">あや</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2850">斐<span class="small">あや</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5484">賁<span class="small">あや</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2985">綾<span class="small">あや</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="4771">綺<span class="small">あや</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4772">綵<span class="small">あや</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9717">薻<span class="small">あや</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1797">藻<span class="small">あや</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3795">黼<span class="small">あや</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="842">危<span class="small">あや（うい）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2691">殆<span class="small">あや（うい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5190">陲<span class="small">あや（うい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1745">肖<span class="small">あやか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4772">綵<span class="small">あやぎぬ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9058">綦<span class="small">あやぎぬ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9059">綨<span class="small">あやぎぬ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2117">妖<span class="small">あや（しい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1047">奇<span class="small">あや（しい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1337">怪<span class="small">あや（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5959">恠<span class="small">あや（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6159">竒<span class="small">あや（しい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="824">異<span class="small">あや（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2645">賎<span class="small">あや（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4958">詭<span class="small">あや（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2644">賤<span class="small">あや（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5005">譎<span class="small">あや（しい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1337">怪<span class="small">あや（しむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5959">恠<span class="small">あや（しむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4488">馭<span class="small">あやつ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11499">撡<span class="small">あやつ（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="931">操<span class="small">あやつ（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="842">危<span class="small">あや（ぶむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8598">过<span class="small">あやま（ち）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="655">過<span class="small">あやま（ち）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3587">愆<span class="small">あやま（ち）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4627">瑕<span class="small">あやま（ち）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10984">諐<span class="small">あやま（ち）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8598">过<span class="small">あやま（つ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="655">過<span class="small">あやま（つ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4258">跌<span class="small">あやま（つ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3587">愆<span class="small">あやま（つ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10984">諐<span class="small">あやま（つ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4751">紕<span class="small">あやま（り）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4949">訛<span class="small">あやま（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3587">愆<span class="small">あやま（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="866">誤<span class="small">あやま（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10984">諐<span class="small">あやま（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1418">錯<span class="small">あやま（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="726">謝<span class="small">あやま（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4798">繆<span class="small">あやま（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2862">謬<span class="small">あやま（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5002">譌<span class="small">あやま（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4504">騫<span class="small">あやま（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/23369">䮿<span class="small">あやま（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="842">危<span class="small">あや（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="511">殺<span class="small">あや（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12934">殺<span class="small">あや（める）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts33">
                <h3 class="ttl_while">あゆ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="jimmei kunyomi"><a class="color2" href="2775">鮎<span class="small">あゆ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6441">步<span class="small">あゆ（む）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="216">歩<span class="small">あゆ（む）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts34">
                <h3 class="ttl_while">あら</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="6274">粡<span class="small">あら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3569">悍<span class="small">あらあら（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11082">猂<span class="small">あらあら（しい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1095">荒<span class="small">あら（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5381">莽<span class="small">あら（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3569">悍<span class="small">あら（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11082">猂<span class="small">あら（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19044">㘶<span class="small">あら（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19971">㫧<span class="small">あら（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25280">挚<span class="small">あら（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1476">粗<span class="small">あら（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4031">桀<span class="small">あら（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4524">笨<span class="small">あら（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9527">莾<span class="small">あら（い）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2544">疏<span class="small">あら（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4557">麁<span class="small">あら（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10339">䟽<span class="small">あら（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="811">暴<span class="small">あら（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2016">摯<span class="small">あら（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5411">蔬<span class="small">あら（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7260">麄<span class="small">あら（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4649">鬆<span class="small">あら（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11717">㬥<span class="small">あら（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/21518">䊪<span class="small">あら（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5275">糲<span class="small">あら（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3833">鷙<span class="small">あら（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6502">麤<span class="small">あら（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4329">沐<span class="small">あら（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="926">洗<span class="small">あら（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4349">洒<span class="small">あら（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4369">浣<span class="small">あら（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25537">涤<span class="small">あら（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4424">滌<span class="small">あら（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2799">蕩<span class="small">あら（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4433">澡<span class="small">あら（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4435">澣<span class="small">あら（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1808">濯<span class="small">あら（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5569">盪<span class="small">あら（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5570">蘯<span class="small">あら（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4457">灑<span class="small">あら（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6590">馯<span class="small">あらうま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4497">駻<span class="small">あらうま</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1096">抗<span class="small">あらが（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="424">予<span class="small">あらかじ（め）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="674">逆<span class="small">あらかじ（め）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="818">預<span class="small">あらかじ（め）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5755">豫<span class="small">あらかじ（め）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25848">矿<span class="small">あらがね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2405">砿<span class="small">あらがね</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="699">鉱<span class="small">あらがね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5656">礦<span class="small">あらがね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5726">鑛<span class="small">あらがね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4186">樸<span class="small">あらき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12259">檏<span class="small">あらき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6274">粡<span class="small">あらごめ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19340">㞩<span class="small">あらし</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1941">嵐<span class="small">あらし</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1095">荒<span class="small">あ（らす）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="792">非<span class="small">あら（ず）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2848">匪<span class="small">あら（ず）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="556">争<span class="small">あらそ（う）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6247">爭<span class="small">あらそ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4978">諍<span class="small">あらそ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5451">畭<span class="small">あらた</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6508">畬<span class="small">あらた</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="163">新<span class="small">あら（た）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2495">灼<span class="small">あらたか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4636">璞<span class="small">あらたま</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="458">改<span class="small">あらた（まる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="834">革<span class="small">あらた（まる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="458">改<span class="small">あらた（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1094">更<span class="small">あらた（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="834">革<span class="small">あらた（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11744">㪅<span class="small">あらた（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3573">悛<span class="small">あらた（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="687">検<span class="small">あらた（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25936">窜<span class="small">あらた（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22532">䞼<span class="small">あらた（める）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6224">檢<span class="small">あらた（める）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4881">釐<span class="small">あらた（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5623">竄<span class="small">あらた（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3001">砺<span class="small">あらと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3000">礪<span class="small">あらと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3833">鷙<span class="small">あらどり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24685">兰<span class="small">あららぎ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2965">蘭<span class="small">あららぎ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/27689">蘭<span class="small">あららぎ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3994">霰<span class="small">あられ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/23046">䨷<span class="small">あられ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1315">露<span class="small">あらわ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19971">㫧<span class="small">あら（わす）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="811">暴<span class="small">あら（わす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11717">㬥<span class="small">あら（わす）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="017">見<span class="small">あらわ（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="401">表<span class="small">あらわ（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25359">显<span class="small">あらわ（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19974">㫫<span class="small">あらわ（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="690">現<span class="small">あらわ（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="947">著<span class="small">あらわ（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3782">旌<span class="small">あらわ（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11606">旍<span class="small">あらわ（す）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6410">著<span class="small">あらわ（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1749">彰<span class="small">あらわ（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1677">顕<span class="small">あらわ（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1315">露<span class="small">あらわ（す）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5782">顯<span class="small">あらわ（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="017">見<span class="small">あらわ（れる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="401">表<span class="small">あらわ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25359">显<span class="small">あらわ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19974">㫫<span class="small">あらわ（れる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="690">現<span class="small">あらわ（れる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1749">彰<span class="small">あらわ（れる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1677">顕<span class="small">あらわ（れる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1315">露<span class="small">あらわ（れる）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5782">顯<span class="small">あらわ（れる）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts35">
                <h3 class="ttl_while">あり</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="2219">蛾<span class="small">あり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9832">䖸<span class="small">あり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2287">蟻<span class="small">あり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5809">况<span class="small">ありさま</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1071">況<span class="small">ありさま</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="348">相<span class="small">ありさま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3339">垤<span class="small">ありづか</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts36">
                <h3 class="ttl_while">ある</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="423">有<span class="small">あ（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="710">在<span class="small">あ（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="937">存<span class="small">あ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/14902">扗<span class="small">あ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11222">㦯<span class="small">あ（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="3024">或<span class="small">あ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11222">㦯<span class="small">ある（いは）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="3024">或<span class="small">ある（いは）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12671">傥<span class="small">ある（いは）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3146">儻<span class="small">ある（いは）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6441">步<span class="small">ある（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="216">歩<span class="small">ある（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="317">主<span class="small">あるじ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts37">
                <h3 class="ttl_while">あれ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="2963">莱<span class="small">あれち</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6456">萊<span class="small">あれち</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/17202">芜<span class="small">あ（れる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1095">荒<span class="small">あ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25927">秽<span class="small">あ（れる）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2882">蕪<span class="small">あ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5561">穢<span class="small">あ（れる）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts38">
                <h3 class="ttl_while">あわ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1891">泡<span class="small">あわ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2930">沫<span class="small">あわ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/21205">䅇<span class="small">あわ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2592">粟<span class="small">あわ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5265">粱<span class="small">あわ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1183">淡<span class="small">あわ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4436">澹<span class="small">あわ（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="135">合<span class="small">あ（わす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4846">醂<span class="small">あわ（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2414">袷<span class="small">あわせ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5061">褶<span class="small">あわせ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="135">合<span class="small">あ（わせる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5461">覯<span class="small">あ（わせる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3500">并<span class="small">あわ（せる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1885">併<span class="small">あわ（せる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6490">幷<span class="small">あわ（せる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1084">兼<span class="small">あわ（せる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12460">倂<span class="small">あわ（せる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/13163">勎<span class="small">あわ（せる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3195">勠<span class="small">あわ（せる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3651">戮<span class="small">あわ（せる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4571">歙<span class="small">あわ（せる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24216">㤺<span class="small">あわ（ただしい）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1406">慌<span class="small">あわ（ただしい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5618">窘<span class="small">あわただ（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5523">遑<span class="small">あわただ（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5533">遽<span class="small">あわただ（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4292">躁<span class="small">あわただ（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10962">忩<span class="small">あわ（てる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3554">怱<span class="small">あわ（てる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24216">㤺<span class="small">あわ（てる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6541">悤<span class="small">あわ（てる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1406">慌<span class="small">あわ（てる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5523">遑<span class="small">あわ（てる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5533">遽<span class="small">あわ（てる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5176">矍<span class="small">あわ（てる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4048">蚫<span class="small">あわび</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3855">鮑<span class="small">あわび</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3883">鰒<span class="small">あわび</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1320">哀<span class="small">あわ（れ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19679">㥕<span class="small">あわ（れみ）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="3004">憐<span class="small">あわ（れみ）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2998">怜<span class="small">あわ（れむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6540">卹<span class="small">あわ（れむ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1320">哀<span class="small">あわ（れむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3563">恤<span class="small">あわ（れむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5625">矜<span class="small">あわ（れむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11074">䘏<span class="small">あわ（れむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3945">閔<span class="small">あわ（れむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19679">㥕<span class="small">あわ（れむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3595">愍<span class="small">あわ（れむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8297">賉<span class="small">あわ（れむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19690">㥤<span class="small">あわ（れむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3623">憫<span class="small">あわ（れむ）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="3004">憐<span class="small">あわ（れむ）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts39">
                <h3 class="ttl_while">あん</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo onyomi"><a class="color1" href="133">行<span class="small">アン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="241">安<span class="small">アン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2146">杏<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7938">阴<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7939">阥<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13964">妟<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7937">侌<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12429">侒<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12973">匼<span class="small">アン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2145">按<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13318">咹<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14016">姲<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14435">峖<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15533">洝<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17228">荌<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22744">䢿<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24993">垵<span class="small">アン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="441">案<span class="small">アン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="3909">晏<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5365">殷<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12016">桉<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15403">氨<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19972">㫨<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20587">㸶<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25833">盐<span class="small">アン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1015">陰<span class="small">アン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2144">庵<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5374">菴<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13379">唵<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13761">埯<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19309">㞄<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19475">㡋<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20952">䀂<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21199">䅁<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24016">淊<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7940">隂<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9492">葊<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11396">揜<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11687">晻<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13798">堷<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14135">媕<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14971">揞<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18200">隌<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20059">㭺<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24117">萻<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24205">㛺<span class="small">アン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="242">暗<span class="small">アン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="450">塩<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5591">罨<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11858">腤<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16606">痷<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20823">㽢<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21005">䁆<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21217">䅖<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7608">銨<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15109">暥<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15820">漹<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17063">罯<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17318">蓭<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17661">誝<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19223">㜝<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21731">䎨<span class="small">アン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2147">鞍<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7298">鞌<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20676">㺖<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21020">䁙<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22799">䣾<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4985">諳<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10508">盦<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14232">嬜<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22803">䤃<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22849">䤶<span class="small">アン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2114">闇<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3858">鮟<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5284">餡<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7108">鴳<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7519">馣<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16637">盫<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18259">鞥<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23003">䨃<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23232">䬓<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23562">䳛<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7143">鵪<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7145">䨄<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6554">黤<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7144">鶕<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18273">韽<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18274">韾<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18376">騴<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3756">黯<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6558">黭<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7184">鷃<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18580">黫<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20960">䀋<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23586">䳺<span class="small">アン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6100">鹽<span class="small">アン</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2146">杏<span class="small">あんず</span></a></li>
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
</script>

    <?php wp_footer() ?>