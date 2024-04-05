<?php
/*
 * Template Name: Yomi5
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
            <h1 class="ttl_main">音訓検索「お」</h1>
            <aside>
                <div class="ads_wrapin link_pc">

                    <!-- 漢字辞典レスポンシブ１ -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3664445671894613" data-ad-slot="5169795341" data-ad-format="horizontal" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </aside>
            <p>「お」から始まる読み方をする漢字です。</p>
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
                        <option value="#" selected>お</option>
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
                    <li id="parts1_menu"><a href="#parts1">お</a></li>
                    <li id="parts2_menu"><a href="#parts2">おい</a></li>
                    <li id="parts3_menu"><a href="#parts3">おう</a></li>
                    <li id="parts4_menu"><a href="#parts4">おえ</a></li>
                    <li id="parts5_menu"><a href="#parts5">おお</a></li>
                    <li id="parts6_menu"><a href="#parts6">おか</a></li>
                    <li id="parts7_menu"><a href="#parts7">おき</a></li>
                    <li id="parts8_menu"><a href="#parts8">おく</a></li>
                    <li id="parts9_menu"><a href="#parts9">おけ</a></li>
                    <li id="parts10_menu"><a href="#parts10">おこ</a></li>
                    <li id="parts11_menu"><a href="#parts11">おさ</a></li>
                    <li id="parts12_menu"><a href="#parts12">おし</a></li>
                    <li id="parts13_menu"><a href="#parts13">おす</a></li>
                    <li id="parts14_menu"><a href="#parts14">おそ</a></li>
                    <li id="parts15_menu"><a href="#parts15">おた</a></li>
                    <li id="parts16_menu"><a href="#parts16">おち</a></li>
                    <li id="parts17_menu"><a href="#parts17">おつ</a></li>
                    <li id="parts18_menu"><a href="#parts18">おと</a></li>
                    <li id="parts19_menu"><a href="#parts19">おな</a></li>
                    <li id="parts20_menu"><a href="#parts20">おに</a></li>
                    <li id="parts21_menu"><a href="#parts21">おの</a></li>
                    <li id="parts22_menu"><a href="#parts22">おは</a></li>
                    <li id="parts23_menu"><a href="#parts23">おひ</a></li>
                    <li id="parts24_menu"><a href="#parts24">おほ</a></li>
                    <li id="parts25_menu"><a href="#parts25">おみ</a></li>
                    <li id="parts26_menu"><a href="#parts26">おも</a></li>
                    <li id="parts27_menu"><a href="#parts27">おや</a></li>
                    <li id="parts28_menu"><a href="#parts28">およ</a></li>
                    <li id="parts29_menu"><a href="#parts29">おり</a></li>
                    <li id="parts30_menu"><a href="#parts30">おる</a></li>
                    <li id="parts31_menu"><a href="#parts31">おれ</a></li>
                    <li id="parts32_menu"><a href="#parts32">おろ</a></li>
                    <li id="parts33_menu"><a href="#parts33">おわ</a></li>
                    <li id="parts34_menu"><a href="#parts34">おん</a></li>
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
                <h3 class="ttl_while">お</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo onyomi"><a class="color1" href="1023">汚<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13639">圬<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14726">弙<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15435">汙<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15438">污<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19556">㢪<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23992">扝<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11597">扵<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11942">杇<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27849">𣏓<span class="small">オ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="439">和<span class="small">オ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2192">於<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13294">咊<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15552">洿<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16810">秗<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18189">陓<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25836">眍<span class="small">オ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2167">烏<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17811">趶<span class="small">オ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="240">悪<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3264">唹<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4387">淤<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13748">埡<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16633">盓<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16851">窏<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17082">翑<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17998">釫<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22502">䞛<span class="small">オ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5964">惡<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12085">棜<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14842">惒<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20197">㰶<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3286">嗚<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5279">飫<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5958">蓊<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6078">塢<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7957">隖<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8685">鄔<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10382">瘀<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13467">嗡<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13812">塕<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14525">嵨<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15740">溩<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20666">㺋<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10196">瑦<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10969">僫<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12871">歍<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16186">熓<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16907">箊<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17457">蝁<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20090">㮧<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20094">㮬<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21829">䐥<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12338">噁<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12626">僾<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16678">瞈<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17167">膒<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21121">䃖<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22368">䛩<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9886">螐<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16683">瞘<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17121">聬<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17957">郺<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21407">䈵<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22243">䙔<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18487">鴮<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21610">䌔<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22681">䡧<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7745">鎢<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17993">醧<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18092">鎓<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22403">䜑<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23103">䩺<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23106">䩽<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7014">鰞<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19247">㜹<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21456">䉩<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18616">龢<span class="small">オ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21463">䉱<span class="small">オ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="037">小<span class="small">お</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1245">尾<span class="small">お</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2905">牡<span class="small">お</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26348">苎<span class="small">お</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2141">阿<span class="small">お</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2731">苧<span class="small">お</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19321">㞑<span class="small">お</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1063">御<span class="small">お</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1290">雄<span class="small">お</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7978">䧺<span class="small">お</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1738">緒<span class="small">お</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6425">緖<span class="small">お</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts2">
                <h3 class="ttl_while">おい</h3>
                <ul class="search_parts yomi_parts">
                    <li class="jimmei kunyomi"><a class="color2" href="2303">笈<span class="small">おい</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2567">甥<span class="small">おい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9066">緌<span class="small">おいかけ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11597">扵<span class="small">お（いて）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2192">於<span class="small">お（いて）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5479">耄<span class="small">おいぼ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5514">逋<span class="small">おいめ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="637">老<span class="small">お（いる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5478">耆<span class="small">お（いる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9250">耊<span class="small">お（いる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5480">耋<span class="small">お（いる）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts3">
                <h3 class="ttl_while">おう</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="6022">尢<span class="small">オウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="005">王<span class="small">オウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="280">区<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14344">尣<span class="small">オウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="254">央<span class="small">オウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="640">圧<span class="small">オウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1613">凹<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15132">曱<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13638">圫<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24744">压<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24745">厌<span class="small">オウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="651">応<span class="small">オウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2196">邑<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4323">汪<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5925">抂<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9380">芺<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11184">㤇<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12406">佒<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13246">吰<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13264">呕<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14348">尪<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14349">尫<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14770">彺<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14806">忹<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14909">扷<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14914">抝<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18687">㑃<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18887">㕭<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19039">㘭<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24208">㞷<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25036">妪<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25111">岙<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25216">应<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25236">怄<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25505">沤<span class="small">オウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="652">往<span class="small">オウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1024">押<span class="small">オウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1327">欧<span class="small">オウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1328">殴<span class="small">オウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1954">旺<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3553">怏<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3669">拗<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4010">枉<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4332">泓<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5689">泱<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5825">徃<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8562">迋<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12433">㑌<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13293">咉<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13681">坱<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13683">坳<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13996">姎<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14293">宖<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14347">尩<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14414">岰<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14674">庘<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14920">抰<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16367">狕<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17215">苰<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20317">㳌<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20635">㹧<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24981">垇<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27740">𠩍<span class="small">オウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="868">皇<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2194">姶<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4868">瓮<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5302">殃<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10282">瓯<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11775">胦<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14775">徍<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15171">柪<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16041">炴<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17540">袄<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19029">㘢<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24148">迬<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25836">眍<span class="small">オウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="650">桜<span class="small">オウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1614">翁<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5554">秧<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10025">袎<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10500">盎<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10501">㼜<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10907">䆘<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13168">匎<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13354">唈<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14452">峵<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15567">浥<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15580">浻<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16647">眏<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17424">蚟<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19165">㛕<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20042">㭝<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20589">㸸<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20862">㾎<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21694">䍿<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21784">䏩<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21944">䓃<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24244">㴄<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24270">䄃<span class="small">オウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="132">黄<span class="small">オウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2193">凰<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5668">區<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8789">䇦<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14854">愥<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15200">梎<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16987">紻<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17953">郩<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18159">镺<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19309">㞄<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19475">㡋<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19483">㡕<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20346">㳹<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21277">䆟<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21907">䒋<span class="small">オウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1025">奥<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6234">湟<span class="small">オウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6466">黃<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8487">軮<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11690">暀<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12561">傟<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12858">勜<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12944">㔩<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13413">喅<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13431">喤<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13793">堭<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14133">媓<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14152">媪<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14483">崲<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14968">揘<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15236">楧<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16402">猒<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17646">詏<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17887">軪<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18863">㕎<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20197">㰶<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20362">㴏<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20366">㴔<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20504">㷈<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23943">奣<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24305">䓵<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25134">嵘<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3398">媼<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3944">閘<span class="small">オウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5774">奧<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5958">蓊<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7567">鉠<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11417">搕<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13467">嗡<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13625">圔<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13812">塕<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14171">嫈<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14518">嵡<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14697">廅<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14862">慃<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15756">滃<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16606">痷<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18221">雵<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20666">㺋<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21360">䇼<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22515">䞩<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23013">䨎<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2182">厭<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3293">嘔<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3404">嫗<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5086">鞅<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7290">靿<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9606">蓲<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13827">塸<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14872">慪<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15107">暡<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15801">漚<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17063">罯<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17183">臦<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20094">㮬<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20672">㺒<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21163">䄓<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21731">䎨<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21829">䐥<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23251">䬬<span class="small">オウ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="253">横<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2201">鴎<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6227">歐<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6231">毆<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6714">駚<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7244">䴠<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9081">䌂<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9166">甇<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11566">敺<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13867">墴<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16204">熰<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16444">獚<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16678">瞈<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16915">箹<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17167">膒<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18471">鴁<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18734">㒕<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21023">䁜<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21024">䁝<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21499">䊗<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24133">蝹<span class="small">オウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2197">鴨<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2198">鴦<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2200">鴬<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3626">懊<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4437">澳<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4875">甌<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5882">墺<span class="small">オウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6422">橫<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6909">䱀<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7106">鴢<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7967">隩<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9160">罃<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9887">螉<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14579">嶴<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15036">擙<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16683">瞘<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17121">聬<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17957">郺<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18228">霐<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19233">㜩<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21407">䈵<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21842">䐵<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22243">䙔<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22529">䞹<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23266">䭂<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24210">㠗<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4309">膺<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4936">燠<span class="small">オウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5791">應<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6153">壓<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8180">謍<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8758">醠<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14581">嶸<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16840">穔<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21610">䌔<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21852">䐿<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23270">䭊<span class="small">オウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2195">襖<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4877">甕<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4998">謳<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15318">櫙<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17993">醧<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18092">鎓<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18259">鞥<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18271">韹<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21511">䊣<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21615">䌙<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23182">䫜<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24037">瀇<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26516">藲<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4718">鏖<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9164">罋<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9165">甖<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16254">爊<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18104">鏂<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18109">鏕<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20458">㶇<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20621">㹙<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21443">䉛<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22815">䤑<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23103">䩺<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23146">䪯<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23393">䯠<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3316">嚶<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3977">罌<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7500">饇<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12727">䳨<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22404">䜒<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23106">䩽<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25347">攚<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2199">鶯<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3826">鶲<span class="small">オウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5686">櫻<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7015">鰪<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7016">䱵<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7776">䥝<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17051">纋<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17727">譻<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18133">鐭<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18381">騽<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19247">㜹<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20622">㹚<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21456">䉩<span class="small">オウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6465">鷗<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18450">鰸<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21463">䉱<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22261">䙬<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23588">䳼<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18544">鷪<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18545">鷬<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22898">䥲<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24371">䵃<span class="small">オウ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2202">鷹<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6650">齆<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7174">䴈<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7185">鸎<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23008">䨉<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23598">䴍<span class="small">オウ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2165">鸚<span class="small">オウ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="043">生<span class="small">お（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="368">追<span class="small">お（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="405">負<span class="small">お（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1812">逐<span class="small">お（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5572">趁<span class="small">お（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8341">趂<span class="small">お（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1073">駆<span class="small">お（う）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2342">駈<span class="small">お（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5059">襁<span class="small">お（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="17847">蹑<span class="small">お（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6351">驅<span class="small">お（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4300">躡<span class="small">お（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1164">扇<span class="small">おうぎ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4001">朸<span class="small">おうご</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="583">特<span class="small">おうし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5218">疸<span class="small">おうだん</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4006">杞<span class="small">おうち</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12326">栾<span class="small">おうち</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4153">楝<span class="small">おうち</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2727">樗<span class="small">おうち</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4206">欒<span class="small">おうち</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25036">妪<span class="small">おうな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14152">媪<span class="small">おうな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3398">媼<span class="small">おうな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3404">嫗<span class="small">おうな</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts4">
                <h3 class="ttl_while">おえ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="5669">卆<span class="small">お（える）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="561">卒<span class="small">お（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13001">䘚<span class="small">お（える）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="323">終<span class="small">お（える）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts5">
                <h3 class="ttl_while">おお</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="055">大<span class="small">おお</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13032">亣<span class="small">おお</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3981">霈<span class="small">おおあめ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19447">㠪<span class="small">おお（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1061">巨<span class="small">おお（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="181">多<span class="small">おお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6157">夛<span class="small">おお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19109">㚐<span class="small">おお（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="079">林<span class="small">おお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24297">䒱<span class="small">おお（い）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2402">浩<span class="small">おお（い）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2784">套<span class="small">おお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5365">殷<span class="small">おお（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1737">庶<span class="small">おお（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6263">盖<span class="small">おお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9982">眾<span class="small">おお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="20018">㬶<span class="small">おお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="23979">庻<span class="small">おお（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="898">衆<span class="small">おお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3033">葢<span class="small">おお（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="913">蒸<span class="small">おお（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1965">蓋<span class="small">おお（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4691">鉅<span class="small">おお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5559">稠<span class="small">おお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="20374">㴝<span class="small">おお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2881">蔀<span class="small">おお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3360">夥<span class="small">おお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19107">㚌<span class="small">おお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="20406">㵆<span class="small">おお（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2097">蔽<span class="small">おお（い）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="3760">黎<span class="small">おお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="15873">澔<span class="small">おお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5632">臻<span class="small">おお（い）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2951">輿<span class="small">おお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5442">藹<span class="small">おお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24141">譪<span class="small">おお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8529">轝<span class="small">おお（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5298">饒<span class="small">おお（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="055">大<span class="small">おお（いに）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13032">亣<span class="small">おお（いに）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2278">祁<span class="small">おお（いに）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3656">扞<span class="small">おお（う）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2184">奄<span class="small">おお（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6284">冐<span class="small">おお（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1272">冒<span class="small">おお（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3443">屏<span class="small">おお（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10504">盇<span class="small">おお（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1241">被<span class="small">おお（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5564">盍<span class="small">おお（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26369">荫<span class="small">おお（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2185">掩<span class="small">おお（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6263">盖<span class="small">おお（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6488">屛<span class="small">おお（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3033">葢<span class="small">おお（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14639">幈<span class="small">おお（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26572">覄<span class="small">おお（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1965">蓋<span class="small">おお（う）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2923">蒙<span class="small">おお（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3493">幎<span class="small">おお（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5591">罨<span class="small">おお（う）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2164">蔭<span class="small">おお（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25363">暧<span class="small">おお（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2097">蔽<span class="small">おお（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3159">冪<span class="small">おお（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9604">䕃<span class="small">おお（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1939">曖<span class="small">おお（う）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1546">覆<span class="small">おお（う）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5595">羃<span class="small">おお（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4413">溟<span class="small">おおうなばら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5724">鰲<span class="small">おおうみがめ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3850">鼇<span class="small">おおうみがめ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1763">紳<span class="small">おおおび</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="3016">狼<span class="small">おおかみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26230">鼋<span class="small">おおがめ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6565">黿<span class="small">おおがめ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5724">鰲<span class="small">おおがめ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3850">鼇<span class="small">おおがめ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="055">大<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13032">亣<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19447">㠪<span class="small">おお（きい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1061">巨<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3056">丕<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2525">戎<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10901">宆<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18845">㔻<span class="small">おお（きい）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2395">宏<span class="small">おお（きい）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2875">甫<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3438">尨<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4323">汪<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25031">奂<span class="small">おお（きい）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2278">祁<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3082">侈<span class="small">おお（きい）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5613">穹<span class="small">おお（きい）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2224">恢<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3213">厖<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3366">奕<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3367">奐<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5381">莽<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5581">衍<span class="small">おお（きい）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2402">浩<span class="small">おお（きい）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2528">峻<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3111">倬<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3158">冢<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="23977">庬<span class="small">おお（きい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1948">淫<span class="small">おお（きい）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2914">逢<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9527">莾<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="20018">㬶<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2308">渠<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3124">傀<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3469">嵬<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4408">溥<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4557">麁<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4691">鉅<span class="small">おお（きい）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2232">魁<span class="small">おお（きい）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2631">碩<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4633">瑰<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="20406">㵆<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="23525">䲨<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7260">麄<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="15873">澔<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="16554">璝<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19432">㠕<span class="small">おお（きい）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2418">鴻<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6682">龎<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6681">龐<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10197">瓌<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6502">麤<span class="small">おお（きい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5440">蘢<span class="small">おおけたで</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12049">㭷<span class="small">おおこ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="20717">㻎<span class="small">おおごと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4624">瑟<span class="small">おおごと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25835">盘<span class="small">おおざら</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1240">盤<span class="small">おおざら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18094">鎜<span class="small">おおざら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5517">逵<span class="small">おおじ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4555">麈<span class="small">おおじか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4556">麋<span class="small">おおじか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5724">鰲<span class="small">おおすっぽん</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3850">鼇<span class="small">おおすっぽん</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1072">仰<span class="small">おお（せ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="415">命<span class="small">おお（せ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4973">諚<span class="small">おお（せ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="455">果<span class="small">おお（せる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1457">遂<span class="small">おお（せる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10901">宆<span class="small">おおぞら</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5613">穹<span class="small">おおぞら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12304">樐<span class="small">おおだて</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12305">㯭<span class="small">おおだて</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="3011">櫓<span class="small">おおだて</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1268">砲<span class="small">おおづつ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4920">熕<span class="small">おおづつ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6580">鼖<span class="small">おおつづみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6581">䩿<span class="small">おおつづみ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2407">紘<span class="small">おおづな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9045">綋<span class="small">おおづな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5517">逵<span class="small">おおどおり</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2193">凰<span class="small">おおとり</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2885">鳳<span class="small">おおとり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="23525">䲨<span class="small">おおとり</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2418">鴻<span class="small">おおとり</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2918">鵬<span class="small">おおとり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4386">淌<span class="small">おおなみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5349">茘<span class="small">おおにら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9458">荔<span class="small">おおにら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5430">薤<span class="small">おおにら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4066">蜃<span class="small">おおはまぐり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9837">蜄<span class="small">おおはまぐり</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1860">舶<span class="small">おおぶね</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4885">舸<span class="small">おおぶね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="17191">艊<span class="small">おおぶね</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6928">鮱<span class="small">おおぼら</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1685">洪<span class="small">おおみず</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="15825">潂<span class="small">おおみず</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="820">率<span class="small">おおむ（ね）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1999">梗<span class="small">おおむ（ね）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1340">概<span class="small">おおむ（ね）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27233">㮣<span class="small">おおむ（ね）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12170">槪<span class="small">おおむ（ね）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12171">槩<span class="small">おおむ（ね）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13003">卛<span class="small">おおむ（ね）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="130">公<span class="small">おおやけ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18756">㒶<span class="small">おおやけ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="466">官<span class="small">おおやけ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3520">弩<span class="small">おおゆみ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts6">
                <h3 class="ttl_while">おか</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1057">丘<span class="small">おか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6593">㐀<span class="small">おか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13006">丠<span class="small">おか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3333">坏<span class="small">おか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25110">岗<span class="small">おか</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1955">岡<span class="small">おか</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="2095">阜<span class="small">おか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5202">邱<span class="small">おか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6594">坵<span class="small">おか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19043">㘳<span class="small">おか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25541">陆<span class="small">おか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14424">峊<span class="small">おか</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="625">陸<span class="small">おか</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1590">陵<span class="small">おか</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1856">培<span class="small">おか</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6084">崗<span class="small">おか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="16512">琌<span class="small">おか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19385">㟝<span class="small">おか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19387">㟠<span class="small">おか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="22969">䧙<span class="small">おか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3037">堽<span class="small">おか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19403">㟵<span class="small">おか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3352">墟<span class="small">おか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5198">隴<span class="small">おか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26369">荫<span class="small">おかげ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2164">蔭<span class="small">おかげ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9604">䕃<span class="small">おかげ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="839">干<span class="small">おか（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="787">犯<span class="small">おか（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3373">奸<span class="small">おか（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6284">冐<span class="small">おか（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1151">侵<span class="small">おか（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1272">冒<span class="small">おか（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="821">略<span class="small">おか（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6260">畧<span class="small">おか（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12483">㑴<span class="small">おか（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="967">拝<span class="small">おが（む）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5881">拜<span class="small">おが（む）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts7">
                <h3 class="ttl_while">おき</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="17127">肐<span class="small">オキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17640">訲<span class="small">オキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19119">㚜<span class="small">オキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22174">䗷<span class="small">オキ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5665">冲<span class="small">おき</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1189">沖<span class="small">おき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25613">炽<span class="small">おき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24380">澚<span class="small">おき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4437">澳<span class="small">おき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4929">熾<span class="small">おき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4936">燠<span class="small">おき</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2761">荻<span class="small">おぎ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5397">蒹<span class="small">おぎ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9482">蔐<span class="small">おぎ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9483">藡<span class="small">おぎ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4994">謖<span class="small">おきあ（がる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3698">掟<span class="small">おきて</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4973">諚<span class="small">おきて</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24776">叜<span class="small">おきな</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1614">翁<span class="small">おきな</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3216">叟<span class="small">おきな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26558">补<span class="small">おぎな（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5336">苴<span class="small">おぎな（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="978">補<span class="small">おぎな（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5048">裨<span class="small">おぎな（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="21563">䋠<span class="small">おぎな（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25912">禆<span class="small">おぎな（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3411">嬖<span class="small">おきにい（り）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8300">賖<span class="small">おきの（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8301">賒<span class="small">おきの（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8300">賖<span class="small">おぎの（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8301">賒<span class="small">おぎの（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="266">起<span class="small">お（きる）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts8">
                <h3 class="ttl_while">おく</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="24556">亿<span class="small">オク</span></a></li>
                    <li class="others_kanji onyomi"><a href="25231">忆<span class="small">オク</span></a></li>
                    <li class="others_kanji onyomi"><a href="11911">肊<span class="small">オク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2119">沃<span class="small">オク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14816">怮<span class="small">オク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="255">屋<span class="small">オク</span></a></li>
                    <li class="others_kanji onyomi"><a href="12782">剭<span class="small">オク</span></a></li>
                    <li class="others_kanji onyomi"><a href="13422">喔<span class="small">オク</span></a></li>
                    <li class="others_kanji onyomi"><a href="14124">媉<span class="small">オク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="451">億<span class="small">オク</span></a></li>
                    <li class="others_kanji onyomi"><a href="7642">鋈<span class="small">オク</span></a></li>
                    <li class="others_kanji onyomi"><a href="8848">箼<span class="small">オク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1026">憶<span class="small">オク</span></a></li>
                    <li class="others_kanji onyomi"><a href="15895">澺<span class="small">オク</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1956">臆<span class="small">オク</span></a></li>
                    <li class="others_kanji onyomi"><a href="6223">檍<span class="small">オク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21854">䑁<span class="small">オク</span></a></li>
                    <li class="others_kanji onyomi"><a href="24166">餩<span class="small">オク</span></a></li>
                    <li class="others_kanji onyomi"><a href="10446">癔<span class="small">オク</span></a></li>
                    <li class="others_kanji onyomi"><a href="21046">䁷<span class="small">オク</span></a></li>
                    <li class="others_kanji onyomi"><a href="24102">繶<span class="small">オク</span></a></li>
                    <li class="others_kanji onyomi"><a href="17628">觷<span class="small">オク</span></a></li>
                    <li class="others_kanji onyomi"><a href="24157">醷<span class="small">オク</span></a></li>
                    <li class="others_kanji onyomi"><a href="22086">䖁<span class="small">オク</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1025">奥<span class="small">おく</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5774">奧<span class="small">おく</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="906">処<span class="small">お（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12726">处<span class="small">お（く）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2703">托<span class="small">お（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="244">委<span class="small">お（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="678">居<span class="small">お（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="727">舎<span class="small">お（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6031">舍<span class="small">お（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19269">㝒<span class="small">お（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1122">釈<span class="small">お（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1474">措<span class="small">お（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6059">處<span class="small">お（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12725">䖏<span class="small">お（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="23857">搁<span class="small">お（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="567">置<span class="small">お（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1418">錯<span class="small">お（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3731">擱<span class="small">お（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6336">釋<span class="small">お（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4261">跋<span class="small">おくがき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8378">䟦<span class="small">おくがき</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2361">訣<span class="small">おくぎ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24946">嗳<span class="small">おくび</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3303">噫<span class="small">おくび</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12340">噯<span class="small">おくび</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13608">囦<span class="small">おくぶか（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5148">眇<span class="small">おくぶか（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5615">窈<span class="small">おくぶか（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5655">渕<span class="small">おくぶか（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5933">渊<span class="small">おくぶか（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="15658">渆<span class="small">おくぶか（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="20361">㴊<span class="small">おくぶか（い）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2186">淵<span class="small">おくぶか（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="9100">緼<span class="small">おくぶか（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9099">縕<span class="small">おくぶか（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5535">邃<span class="small">おくぶか（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="20471">㶜<span class="small">おくぶか（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5041">衽<span class="small">おくみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25909">祍<span class="small">おくみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5040">袵<span class="small">おくみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5615">窈<span class="small">おくゆか（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5616">窕<span class="small">おくゆか（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26940">迟<span class="small">おく（らす）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1186">遅<span class="small">おく（らす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8602">遟<span class="small">おく（らす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6051">遲<span class="small">おく（らす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4988">諡<span class="small">おくりな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4989">謚<span class="small">おくりな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25413">䝲<span class="small">おくりもの</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8328">賮<span class="small">おくりもの</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5487">賻<span class="small">おくりもの</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5297">饋<span class="small">おくりもの</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5496">贐<span class="small">おくりもの</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14754">归<span class="small">おく（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="349">送<span class="small">おく（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5861">皈<span class="small">おく（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="106">帰<span class="small">おく（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="22720">䢠<span class="small">おく（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4957">詒<span class="small">おく（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5481">貽<span class="small">おく（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12769">㱕<span class="small">おく（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="22716">䢜<span class="small">おく（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7481">䬻<span class="small">おく（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="21493">䊑<span class="small">おく（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5280">餉<span class="small">おく（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="816">輸<span class="small">おく（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5286">餞<span class="small">おく（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5487">賻<span class="small">おく（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1171">贈<span class="small">おく（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6229">歸<span class="small">おく（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7487">餫<span class="small">おく（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5290">餽<span class="small">おく（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6415">贈<span class="small">おく（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5297">饋<span class="small">おく（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26940">迟<span class="small">おく（れる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="125">後<span class="small">おく（れる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1186">遅<span class="small">おく（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8602">遟<span class="small">おく（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6051">遲<span class="small">おく（れる）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts9">
                <h3 class="ttl_while">おけ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="jimmei kunyomi"><a class="color2" href="2789">桶<span class="small">おけ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1801">槽<span class="small">おけ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3999">朮<span class="small">おけら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11933">术<span class="small">おけら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9920">蝼<span class="small">おけら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4097">螻<span class="small">おけら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11597">扵<span class="small">お（ける）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2192">於<span class="small">お（ける）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts10">
                <h3 class="ttl_while">おこ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1811">痴<span class="small">おこ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6262">癡<span class="small">おこ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="266">起<span class="small">お（こす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26414">㒷<span class="small">おこ（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25613">炽<span class="small">おこ（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="702">興<span class="small">おこ（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4929">熾<span class="small">おこ（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7025">鰧<span class="small">おこぜ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="23511">䲍<span class="small">おこぜ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24531">严<span class="small">おごそ（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9449">㽵<span class="small">おごそ（か）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1796">荘<span class="small">おごそ（か）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="24583">俨<span class="small">おごそ（か）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5939">莊<span class="small">おごそ（か）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="862">厳<span class="small">おごそ（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27779">𠑊<span class="small">おごそ（か）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6147">嚴<span class="small">おごそ（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3145">儼<span class="small">おごそ（か）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1488">怠<span class="small">おこた（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1806">惰<span class="small">おこた（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="18960">㗄<span class="small">おこた（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1278">慢<span class="small">おこた（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3617">慵<span class="small">おこた（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11141">憜<span class="small">おこた（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3627">懈<span class="small">おこた（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4996">謾<span class="small">おこた（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3415">嬾<span class="small">おこた（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3635">懶<span class="small">おこた（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14261">孄<span class="small">おこた（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19739">㦨<span class="small">おこた（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14271">孏<span class="small">おこた（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="133">行<span class="small">おこな（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="649">演<span class="small">おこな（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25807">疟<span class="small">おこり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5214">疥<span class="small">おこり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5237">瘧<span class="small">おこり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10349">㿍<span class="small">おこり</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2106">勃<span class="small">お（こる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18825">㔜<span class="small">お（こる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="266">起<span class="small">お（こる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5607">翕<span class="small">お（こる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="17084">翖<span class="small">お（こる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18723">㒆<span class="small">お（こる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26414">㒷<span class="small">おこ（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1205">怒<span class="small">おこ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2637">煽<span class="small">おこ（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="702">興<span class="small">おこ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3074">伉<span class="small">おご（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3364">夸<span class="small">おご（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2051">汰<span class="small">おご（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3082">侈<span class="small">おご（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="20322">㳑<span class="small">おご（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10964">㤗<span class="small">おご（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1807">泰<span class="small">おご（る）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2402">浩<span class="small">おご（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3102">倨<span class="small">おご（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3116">偃<span class="small">おご（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3786">敖<span class="small">おご（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="20018">㬶<span class="small">おご（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27707">𣳾<span class="small">おご（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2319">喬<span class="small">おご（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3372">奢<span class="small">おご（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2002">傲<span class="small">おご（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2159">溢<span class="small">おご（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1278">慢<span class="small">おご（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3134">僣<span class="small">おご（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8432">勪<span class="small">おご（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11165">慠<span class="small">おご（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="20406">㵆<span class="small">おご（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4271">踞<span class="small">おご（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="15873">澔<span class="small">おご（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19709">㥿<span class="small">おご（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3133">僭<span class="small">おご（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4279">蹇<span class="small">おご（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5364">靡<span class="small">おご（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8431">蹻<span class="small">おご（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6761">驁<span class="small">おご（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6762">䮯<span class="small">おご（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4509">驕<span class="small">おご（る）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts11">
                <h3 class="ttl_while">おさ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="3440">尹<span class="small">おさ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="632">令<span class="small">おさ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1859">伯<span class="small">おさ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="7864">镸<span class="small">おさ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7865">兏<span class="small">おさ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="190">長<span class="small">おさ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3087">佰<span class="small">おさ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2520">酋<span class="small">おさ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5478">耆<span class="small">おさ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4535">筬<span class="small">おさ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2666">綜<span class="small">おさ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1510">鎮<span class="small">おさ（え）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6001">鎭<span class="small">おさ（え）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="640">圧<span class="small">お（さえる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24744">压<span class="small">お（さえる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1024">押<span class="small">お（さえる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6153">壓<span class="small">お（さえる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24745">厌<span class="small">おさ（える）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1583">抑<span class="small">おさ（える）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3661">扼<span class="small">おさ（える）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="747">制<span class="small">おさ（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11297">㧖<span class="small">おさ（える）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2145">按<span class="small">おさ（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27752">𠝁<span class="small">おさ（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5081">勒<span class="small">おさ（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11441">搤<span class="small">おさ（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2182">厭<span class="small">おさ（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4923">熨<span class="small">おさ（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3501">幺<span class="small">おさな（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="993">幼<span class="small">おさな（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3057">丱<span class="small">おさな（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18781">㓜<span class="small">おさな（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3427">孺<span class="small">おさな（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="897">収<span class="small">おさ（まる）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6196">收<span class="small">おさ（まる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="524">治<span class="small">おさ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12508">俢<span class="small">おさ（まる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="729">修<span class="small">おさ（まる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="962">納<span class="small">おさ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13028">乿<span class="small">おさ（まる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3058">乂<span class="small">おさ（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="897">収<span class="small">おさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3440">尹<span class="small">おさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26293">肀<span class="small">おさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5313">艾<span class="small">おさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27742">𦫿<span class="small">おさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4572">聿<span class="small">おさ（める）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6196">收<span class="small">おさ（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1097">攻<span class="small">おさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3198">甸<span class="small">おさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13664">坕<span class="small">おさ（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="524">治<span class="small">おさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19045">㘷<span class="small">おさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25278">拨<span class="small">おさ（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="472">紀<span class="small">おさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12508">俢<span class="small">おさ（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="729">修<span class="small">おさ（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="962">納<span class="small">おさ（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="238">理<span class="small">おさ（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="684">経<span class="small">おさ（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="821">略<span class="small">おさ（める）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="4229">脩<span class="small">おさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5081">勒<span class="small">おさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6260">畧<span class="small">おさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13028">乿<span class="small">おさ（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="778">統<span class="small">おさ（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1063">御<span class="small">おさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4488">馭<span class="small">おさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19914">㪘<span class="small">おさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5910">經<span class="small">おさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9036">綂<span class="small">おさ（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="823">領<span class="small">おさ（める）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="4777">綸<span class="small">おさ（める）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="934">蔵<span class="small">おさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3721">撥<span class="small">おさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3723">撩<span class="small">おさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5645">臧<span class="small">おさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3790">斂<span class="small">おさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4881">釐<span class="small">おさ（める）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="5984">藏<span class="small">おさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18261">鞰<span class="small">おさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9141">繳<span class="small">おさ（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7354">韞<span class="small">おさ（める）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts12">
                <h3 class="ttl_while">おし</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="2137">唖<span class="small">おし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6471">啞<span class="small">おし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10380">瘂<span class="small">おし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5629">舅<span class="small">おじ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1468">惜<span class="small">お（しい）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2348">馴<span class="small">おし（え）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4965">誨<span class="small">おし（え）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="487">訓<span class="small">おし（える）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="110">教<span class="small">おし（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11553">敎<span class="small">おし（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4965">誨<span class="small">おし（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4558">麌<span class="small">おじか</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3852">魴<span class="small">おしきうお</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1251">怖<span class="small">お（じける）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11058">悑<span class="small">お（じける）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2191">鴛<span class="small">おしどり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2198">鴦<span class="small">おしどり</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1527">排<span class="small">おしの（ける）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24556">亿<span class="small">おしはか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11911">肊<span class="small">おしはか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3538">忖<span class="small">おしはか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19040">㘰<span class="small">おしはか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8732">酙<span class="small">おしはか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3705">揣<span class="small">おしはか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19939">㪸<span class="small">おしはか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3763">斟<span class="small">おしはか（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="451">億<span class="small">おしはか（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1956">臆<span class="small">おしはか（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3165">几<span class="small">おしまずき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3230">吝<span class="small">お（しむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10982">㤅<span class="small">お（しむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11097">恡<span class="small">お（しむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18904">㖁<span class="small">お（しむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3577">悋<span class="small">お（しむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10983">爱<span class="small">お（しむ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1468">惜<span class="small">お（しむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24904">啬<span class="small">お（しむ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="440">愛<span class="small">お（しむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3287">嗇<span class="small">お（しむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3607">慳<span class="small">お（しむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25932">穑<span class="small">お（しむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5562">穡<span class="small">お（しむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25934">穯<span class="small">お（しむ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2321">怯<span class="small">お（じる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1022">鉛<span class="small">おしろい</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts13">
                <h3 class="ttl_while">おす</h3>
                <ul class="search_parts yomi_parts">
                    <li class="jimmei kunyomi"><a class="color2" href="2905">牡<span class="small">おす</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1290">雄<span class="small">おす</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7978">䧺<span class="small">おす</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="640">圧<span class="small">お（す）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2703">托<span class="small">お（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24744">压<span class="small">お（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1024">押<span class="small">お（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25410">挤<span class="small">お（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1938">挨<span class="small">お（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="916">推<span class="small">お（す）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2709">捺<span class="small">お（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25409">㨈<span class="small">お（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3732">擠<span class="small">お（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6153">壓<span class="small">お（す）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts14">
                <h3 class="ttl_while">おそ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="24257">㺚<span class="small">おそ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5124">獺<span class="small">おそ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26940">迟<span class="small">おそ（い）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="3909">晏<span class="small">おそ（い）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6439">晚<span class="small">おそ（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="969">晩<span class="small">おそ（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1186">遅<span class="small">おそ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27847">𣆶<span class="small">おそ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4468">輓<span class="small">おそ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8602">遟<span class="small">おそ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6051">遲<span class="small">おそ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19753">㦻<span class="small">おそ（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1130">襲<span class="small">おそ（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1615">虞<span class="small">おそれ</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1065">凶<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2314">兇<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18674">㐫<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18779">㓙<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11068">忷<span class="small">おそ（れる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1251">怖<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3550">怕<span class="small">おそ（れる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1942">畏<span class="small">おそ（れる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3559">恟<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3564">恂<span class="small">おそ（れる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1066">恐<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3571">悚<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11058">悑<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="17105">耸<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18705">㑧<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19639">㤟<span class="small">おそ（れる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1983">惧<span class="small">おそ（れる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3578">悸<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3588">惶<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3591">惴<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5546">竦<span class="small">おそ（れる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2124">慄<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25255">慑<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3149">兢<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3604">愬<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3612">慴<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11216">愳<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3632">懍<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4571">歙<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11195">懔<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4862">聳<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5533">遽<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5172">瞿<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3640">懾<span class="small">おそ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3641">懼<span class="small">おそ（れる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1066">恐<span class="small">おそ（ろしい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19639">㤟<span class="small">おそ（ろしい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="110">教<span class="small">おそ（わる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11553">敎<span class="small">おそ（わる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26027">魇<span class="small">おそ（われる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="20221">㱘<span class="small">おそ（われる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3951">魘<span class="small">おそ（われる）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts15">
                <h3 class="ttl_while">おた</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1164">扇<span class="small">おだ（てる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2637">煽<span class="small">おだ（てる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4049">蛞<span class="small">おたまじゃくし</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1804">妥<span class="small">おだ（やか）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="19288">㝧<span class="small">おだ（やか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25931">稳<span class="small">おだ（やか）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1331">穏<span class="small">おだ（やか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5442">藹<span class="small">おだ（やか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6269">穩<span class="small">おだ（やか）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24141">譪<span class="small">おだ（やか）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts16">
                <h3 class="ttl_while">おち</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="17418">蚎<span class="small">オチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21551">䋐<span class="small">オチ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1018">越<span class="small">オチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5263">粤<span class="small">オチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14978">揾<span class="small">オチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22567">䟠<span class="small">オチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17165">腽<span class="small">オチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23909">嗢<span class="small">オチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25986">粵<span class="small">オチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16186">熓<span class="small">オチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16676">瞃<span class="small">オチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20090">㮧<span class="small">オチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23374">䯉<span class="small">オチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17480">螖<span class="small">オチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24173">馧<span class="small">オチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6555">黦<span class="small">オチ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26939">远<span class="small">おち</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="084">遠<span class="small">おち</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1640">陥<span class="small">おちい（る）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6340">陷<span class="small">おちい（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="22975">䧟<span class="small">おちい（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25447">队<span class="small">お（ちる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24979">坠<span class="small">お（ちる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="430">落<span class="small">お（ちる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="563">隊<span class="small">お（ちる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1805">堕<span class="small">お（ちる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1593">零<span class="small">お（ちる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5194">隕<span class="small">お（ちる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5305">殞<span class="small">お（ちる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1511">墜<span class="small">お（ちる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5767">墮<span class="small">お（ちる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13863">墯<span class="small">お（ちる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18230">霗<span class="small">お（ちる）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts17">
                <h3 class="ttl_while">おつ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo onyomi"><a class="color1" href="1329">乙<span class="small">オツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6693">乚<span class="small">オツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10900">穵<span class="small">オツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15646">淴<span class="small">オツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1018">越<span class="small">オツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14978">揾<span class="small">オツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15237">榅<span class="small">オツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17165">腽<span class="small">オツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23909">嗢<span class="small">オツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4240">膃<span class="small">オツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6218">榲<span class="small">オツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12910">殟<span class="small">オツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16186">熓<span class="small">オツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16676">瞃<span class="small">オツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20090">㮧<span class="small">オツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23374">䯉<span class="small">オツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24173">馧<span class="small">オツ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="601">夫<span class="small">おっと</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts18">
                <h3 class="ttl_while">おと</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1329">乙<span class="small">おと</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="002">音<span class="small">おと</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="184">弟<span class="small">おとうと</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5137">頤<span class="small">おとがい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5138">頷<span class="small">おとがい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7398">頥<span class="small">おとがい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7399">顊<span class="small">おとがい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13231">吓<span class="small">おど（かす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3566">恫<span class="small">おど（かす）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1372">脅<span class="small">おど（かす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11799">脋<span class="small">おど（かす）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1629">嚇<span class="small">おど（かす）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4982">諢<span class="small">おど（け）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4964">詼<span class="small">おど（ける）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="027">子<span class="small">おとこ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="601">夫<span class="small">おとこ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25500">汉<span class="small">おとこ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19251">㜽<span class="small">おとこ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="056">男<span class="small">おとこ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1316">郎<span class="small">おとこ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10298">侽<span class="small">おとこ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6428">郞<span class="small">おとこ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="264">漢<span class="small">おとこ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6390">漢<span class="small">おとこ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8652">郒<span class="small">おとこ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="20404">㵄<span class="small">おとこ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2312">侠<span class="small">おとこだて</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6430">俠<span class="small">おとこだて</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4787">縅<span class="small">おどし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5614">穽<span class="small">おとしあな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25410">挤<span class="small">おとしい（れる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1640">陥<span class="small">おとしい（れる）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6340">陷<span class="small">おとしい（れる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="25409">㨈<span class="small">おとしい（れる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="22975">䧟<span class="small">おとしい（れる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3732">擠<span class="small">おとしい（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5483">貶<span class="small">おとし（める）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24979">坠<span class="small">お（とす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5483">貶<span class="small">お（とす）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="430">落<span class="small">お（とす）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1805">堕<span class="small">お（とす）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5194">隕<span class="small">お（とす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5305">殞<span class="small">お（とす）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1511">墜<span class="small">お（とす）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5767">墮<span class="small">お（とす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13863">墯<span class="small">お（とす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18822">㔘<span class="small">おと（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3752">黜<span class="small">おと（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13231">吓<span class="small">おど（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1006">威<span class="small">おど（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3566">恫<span class="small">おど（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1372">脅<span class="small">おど（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11799">脋<span class="small">おど（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1631">喝<span class="small">おど（す）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="11130">愒<span class="small">おど（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26346">喝<span class="small">おど（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4787">縅<span class="small">おど（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1629">嚇<span class="small">おど（す）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="980">訪<span class="small">おとず（れる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="980">訪<span class="small">おとな（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3323">囮<span class="small">おとり</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1295">踊<span class="small">おど（り）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4275">踴<span class="small">おど（り）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1312">劣<span class="small">おと（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3445">孱<span class="small">おと（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26837">跃<span class="small">おど（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1190">跳<span class="small">おど（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1295">踊<span class="small">おど（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4268">踉<span class="small">おど（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4275">踴<span class="small">おど（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1289">躍<span class="small">おど（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4129">棘<span class="small">おどろ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25815">痨<span class="small">おとろえや（せる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5249">癆<span class="small">おとろえや（せる）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1458">衰<span class="small">おとろ（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3788">敝<span class="small">おとろ（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4496">駭<span class="small">おどろ（かす）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1064">驚<span class="small">おどろ（かす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3549">怛<span class="small">おどろ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25234">怂<span class="small">おどろ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3246">咢<span class="small">おどろ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3586">愕<span class="small">おどろ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="18954">㖾<span class="small">おどろ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11216">愳<span class="small">おどろ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3611">慫<span class="small">おどろ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11129">㦍<span class="small">おどろ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4496">駭<span class="small">おどろ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3641">懼<span class="small">おどろ（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1064">驚<span class="small">おどろ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5142">顫<span class="small">おどろ（く）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts19">
                <h3 class="ttl_while">おな</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="4303">禺<span class="small">おながざる</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12376">仝<span class="small">おな（じ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="204">同<span class="small">おな（じ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5986">葹<span class="small">おなもみ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts20">
                <h3 class="ttl_while">おに</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1048">鬼<span class="small">おに</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24607">傩<span class="small">おにやらい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3143">儺<span class="small">おにやらい</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts21">
                <h3 class="ttl_while">おの</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1376">斤<span class="small">おの</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2874">斧<span class="small">おの</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4683">釿<span class="small">おの</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7560">鈇<span class="small">おの</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4714">鍠<span class="small">おの</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="462">各<span class="small">おのおの</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="056">男<span class="small">おのこ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10298">侽<span class="small">おのこ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="150">自<span class="small">おのずか（ら）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14895">战<span class="small">おのの（く）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2968">栗<span class="small">おのの（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="552">戦<span class="small">おのの（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2124">慄<span class="small">おのの（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12045">㮚<span class="small">おのの（く）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6182">戰<span class="small">おのの（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27815">𣡼<span class="small">おのの（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="864">己<span class="small">おのれ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts22">
                <h3 class="ttl_while">おは</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="3379">姨<span class="small">おば</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25383">栏<span class="small">おばしま</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1301">欄<span class="small">おばしま</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6362">欄<span class="small">おばしま</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts23">
                <h3 class="ttl_while">おひ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="12397">带<span class="small">おび</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="564">帯<span class="small">おび</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6173">帶<span class="small">おび</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2321">怯<span class="small">おび（える）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1372">脅<span class="small">おび（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11799">脋<span class="small">おび（える）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1579">誘<span class="small">おび（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="22385">䛻<span class="small">おび（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3360">夥<span class="small">おびただ（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19107">㚌<span class="small">おびただ（しい）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3086">佩<span class="small">おびだま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4615">珮<span class="small">おびだま</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4830">牴<span class="small">おひつじ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5127">羝<span class="small">おひつじ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2315">劫<span class="small">おびや（かす）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6060">刧<span class="small">おびや（かす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12824">刦<span class="small">おびや（かす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12825">刼<span class="small">おびや（かす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3560">恊<span class="small">おびや（かす）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1372">脅<span class="small">おびや（かす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11799">脋<span class="small">おびや（かす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3184">剽<span class="small">おびや（かす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3086">佩<span class="small">お（びる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12397">带<span class="small">お（びる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="564">帯<span class="small">お（びる）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6173">帶<span class="small">お（びる）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts24">
                <h3 class="ttl_while">おほ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="25231">忆<span class="small">おぼ（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8042">覐<span class="small">おぼ（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="15073">斍<span class="small">おぼ（える）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="461">覚<span class="small">おぼ（える）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1026">憶<span class="small">おぼ（える）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6043">覺<span class="small">おぼ（える）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2134">思<span class="small">おぼ（しい）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10961">恖<span class="small">おぼ（しい）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1568">没<span class="small">おぼ（れる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5932">沒<span class="small">おぼ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4401">湎<span class="small">おぼ（れる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2067">溺<span class="small">おぼ（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3900">朦<span class="small">おぼろ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3899">朧<span class="small">おぼろ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts25">
                <h3 class="ttl_while">おみ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="543">臣<span class="small">おみ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts26">
                <h3 class="ttl_while">おも</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="317">主<span class="small">おも</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7278">靣<span class="small">おも</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="416">面<span class="small">おも</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="325">重<span class="small">おも（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4465">輊<span class="small">おも（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27494">䡹<span class="small">おも（い）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2539">恕<span class="small">おもいや（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="24557">仑<span class="small">おも（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25231">忆<span class="small">おも（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="588">念<span class="small">おも（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3090">侖<span class="small">おも（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2134">思<span class="small">おも（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10961">恖<span class="small">おも（う）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2151">惟<span class="small">おも（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="243">意<span class="small">おも（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="347">想<span class="small">おも（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1026">憶<span class="small">おも（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1623">懐<span class="small">おも（う）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6091">懷<span class="small">おも（う）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2151">惟<span class="small">おも（うに）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5598">羈<span class="small">おもがい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6311">覊<span class="small">おもがい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3099">俤<span class="small">おもかげ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="401">表<span class="small">おもて</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7278">靣<span class="small">おもて</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="416">面<span class="small">おもて</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3080">佞<span class="small">おもね（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2141">阿<span class="small">おもね（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6161">侫<span class="small">おもね（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4979">諂<span class="small">おもね（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8166">讇<span class="small">おもね（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="740">情<span class="small">おもむき</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3051">韵<span class="small">おもむき</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1126">趣<span class="small">おもむき</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1608">韻<span class="small">おもむき</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1542">赴<span class="small">おもむ（く）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5572">趁<span class="small">おもむ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="8341">趂<span class="small">おもむ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="17792">趋<span class="small">おもむ（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1126">趣<span class="small">おもむ（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2501">趨<span class="small">おもむ（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1437">徐<span class="small">おもむろ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25519">浆<span class="small">おもゆ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4320">漿<span class="small">おもゆ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12202">权<span class="small">おもり</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="861">権<span class="small">おもり</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2618">錘<span class="small">おもり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6005">權<span class="small">おもり</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="325">重<span class="small">おも（んじる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1304">慮<span class="small">おもんぱか（る）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2151">惟<span class="small">おもんみ（る）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts27">
                <h3 class="ttl_while">おや</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="757">祖<span class="small">おや</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13034">亲<span class="small">おや</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6398">祖<span class="small">おや</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14122">媇<span class="small">おや</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="164">親<span class="small">おや</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25674">爷<span class="small">おやじ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2940">爺<span class="small">おやじ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3676">拇<span class="small">おやゆび</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11315">胟<span class="small">おやゆび</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14281">孹<span class="small">おやゆび</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3729">擘<span class="small">おやゆび</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts28">
                <h3 class="ttl_while">およ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="251">泳<span class="small">およ（ぐ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4338">泅<span class="small">およ（ぐ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="20347">㳺<span class="small">およ（ぐ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4398">游<span class="small">およ（ぐ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1275">凡<span class="small">およ（そ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12723">凢<span class="small">およ（そ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24711">凣<span class="small">およ（そ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1058">及<span class="small">およ（び）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1058">及<span class="small">およ（ぶ）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2295">迄<span class="small">およ（ぶ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6044">隶<span class="small">およ（ぶ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26830">赵<span class="small">およ（ぶ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1486">逮<span class="small">およ（ぶ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5079">覃<span class="small">およ（ぶ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5573">趙<span class="small">およ（ぶ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3932">曁<span class="small">およ（ぶ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1058">及<span class="small">およ（ぼす）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts29">
                <h3 class="ttl_while">おり</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="550">折<span class="small">おり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25383">栏<span class="small">おり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11289">㪿<span class="small">おり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4387">淤<span class="small">おり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4389">渣<span class="small">おり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5658">滓<span class="small">おり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5872">槞<span class="small">おり</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="474">機<span class="small">おり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2768">澱<span class="small">おり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4203">檻<span class="small">おり</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1301">欄<span class="small">おり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12310">櫳<span class="small">おり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12311">㰍<span class="small">おり</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6362">欄<span class="small">おり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6587">丅<span class="small">お（りる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="015">下<span class="small">お（りる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7930">夅<span class="small">お（りる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="872">降<span class="small">お（りる）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts30">
                <h3 class="ttl_while">おる</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="906">処<span class="small">お（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12726">处<span class="small">お（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="550">折<span class="small">お（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="678">居<span class="small">お（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19269">㝒<span class="small">お（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11289">㪿<span class="small">お（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6059">處<span class="small">お（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12725">䖏<span class="small">お（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="742">織<span class="small">お（る）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts31">
                <h3 class="ttl_while">おれ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1957">俺<span class="small">おれ</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="550">折<span class="small">お（れる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11289">㪿<span class="small">お（れる）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts32">
                <h3 class="ttl_while">おろ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1791">疎<span class="small">おろ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="6106">踈<span class="small">おろ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2688">呆<span class="small">おろ（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3077">佝<span class="small">おろ（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3105">倥<span class="small">おろ（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4041">蚩<span class="small">おろ（か）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1919">庸<span class="small">おろ（か）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2792">梼<span class="small">おろ（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4304">鹵<span class="small">おろ（か）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1791">疎<span class="small">おろ（か）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4858">聒<span class="small">おろ（か）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1377">愚<span class="small">おろ（か）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1811">痴<span class="small">おろ（か）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3589">惷<span class="small">おろ（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3135">僮<span class="small">おろ（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6106">踈<span class="small">おろ（か）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="3013">魯<span class="small">おろ（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4491">駑<span class="small">おろ（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2791">檮<span class="small">おろ（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5173">矇<span class="small">おろ（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6262">癡<span class="small">おろ（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4111">蠢<span class="small">おろ（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4524">笨<span class="small">おろ（かな）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="17054">缷<span class="small">おろし</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1330">卸<span class="small">おろし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="22748">䣃<span class="small">おろし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4363">颪<span class="small">おろし</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6587">丅<span class="small">お（ろす）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="015">下<span class="small">お（ろす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7930">夅<span class="small">お（ろす）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="872">降<span class="small">お（ろす）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1805">堕<span class="small">お（ろす）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5767">墮<span class="small">お（ろす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13863">墯<span class="small">お（ろす）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="17054">缷<span class="small">おろ（す）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1330">卸<span class="small">おろ（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="22748">䣃<span class="small">おろ（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4304">鹵<span class="small">おろそ（か）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1791">疎<span class="small">おろそ（か）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2544">疏<span class="small">おろそ（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6106">踈<span class="small">おろそ（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10339">䟽<span class="small">おろそ（か）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4101">蟒<span class="small">おろち</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4102">蠎<span class="small">おろち</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts33">
                <h3 class="ttl_while">おわ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="jimmei kunyomi"><a class="color2" href="2439">坐<span class="small">おわ（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24200">㘴<span class="small">おわ（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19046">㘸<span class="small">おわ（す）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4014">杪<span class="small">お（わり）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1588">了<span class="small">お（わる）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5669">卆<span class="small">お（わる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25446">毕<span class="small">お（わる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="561">卒<span class="small">お（わる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5300">歿<span class="small">お（わる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12894">殁<span class="small">お（わる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13001">䘚<span class="small">お（わる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4946">訖<span class="small">お（わる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="323">終<span class="small">お（わる）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1772">崇<span class="small">お（わる）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2859">畢<span class="small">お（わる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5543">竟<span class="small">お（わる）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14462">崈<span class="small">お（わる）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2529">竣<span class="small">お（わる）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts34">
                <h3 class="ttl_while">おん</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="6693">乚<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23941">夗<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24745">厌<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7938">阴<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7939">阥<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13611">囩<span class="small">オン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2170">苑<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7937">侌<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12973">匼<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13976">妴<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19462">㠾<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="26939">远<span class="small">オン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="002">音<span class="small">オン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1951">怨<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10502">昷<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12976">匽<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19635">㤙<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24993">垵<span class="small">オン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="653">恩<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12497">倇<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19647">㤪<span class="small">オン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1015">陰<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9493">菀<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13379">唵<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13761">埯<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15193">桽<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15194">梀<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19309">㞄<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19475">㡋<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22331">䚿<span class="small">オン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="249">飲<span class="small">オン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="256">温<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7940">隂<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11147">愠<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13426">喛<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13798">堷<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14135">媕<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14840">惌<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14851">愋<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14971">揞<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14978">揾<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15651">淾<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17289">葾<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18200">隌<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18201">隐<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19674">㥐<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20059">㭺<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20235">㱧<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22336">䛄<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24117">萻<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24205">㛺<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="25013">塭<span class="small">オン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="084">遠<span class="small">オン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="085">園<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3597">慍<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6039">飮<span class="small">オン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6447">溫<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9577">蒽<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11418">搵<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12586">傿<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14158">媴<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14997">摁<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15237">榅<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15725">溒<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15748">溵<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16606">痷<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16664">睕<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17294">蒑<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17305">蒬<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19288">㝧<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20823">㽢<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21217">䅖<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22225">䘼<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24227">㬈<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24384">瑥<span class="small">オン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1014">隠<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="2182">厭<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6218">榲<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12910">殟<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15016">摿<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16169">煾<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16909">箢<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17063">罯<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17576">褑<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19223">㜝<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19706">㥼<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21231">䅧<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21731">䎨<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21889">䑱<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="25931">稳<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5055">褞<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5239">瘟<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7458">㱃<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9100">緼<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18340">駌<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20760">㼔<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21238">䅰<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22382">䛷<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22671">䡝<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22799">䣾<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22925">䦟<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24124">蕰<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24133">蝹<span class="small">オン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1331">穏<span class="small">オン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2189">薗<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5423">薀<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9099">縕<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14232">嬜<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17742">豱<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17903">輼<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18737">㒚<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22432">䜾<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22485">䞁<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22803">䤃<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22849">䤶<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23547">䳃<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6343">隱<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8526">轀<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9685">薳<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14584">嶾<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15920">濦<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19497">㡥<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23062">䩊<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15309">檼<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18259">鞥<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18261">鞰<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24129">藴<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6269">穩<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14257">嬽<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22864">䥉<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23184">䫟<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3887">鰛<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7354">韞<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17388">蘟<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18274">韾<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19740">㦩<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21627">䌥<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3886">鰮<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23203">䫴<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23586">䳺<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24364">䭡<span class="small">オン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23047">䨸<span class="small">オン</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1063">御<span class="small">おん</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1290">雄<span class="small">おん</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7978">䧺<span class="small">おん</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="036">女<span class="small">おんな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="13948">妇<span class="small">おんな</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="799">婦<span class="small">おんな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14128">媍<span class="small">おんな</span></a></li>
                    <li class="others_kanji kunyomi"><a href="27698">𡢽<span class="small">おんななる</span></a></li>
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
</script><?php wp_footer() ?>