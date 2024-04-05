<?php
/*
 * Template Name: Yomi4
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
            <h1 class="ttl_main">音訓検索「え」</h1>
            <aside>
                <div class="ads_wrapin link_pc">

                    <!-- 漢字辞典レスポンシブ１ -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3664445671894613" data-ad-slot="5169795341" data-ad-format="horizontal" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </aside>
            <p>「え」から始まる読み方をする漢字です。</p>
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
                        <option value="#" selected>え</option>
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
                    <li id="parts1_menu"><a href="#parts1">え</a></li>
                    <li id="parts2_menu"><a href="#parts2">えい</a></li>
                    <li id="parts3_menu"><a href="#parts3">えか</a></li>
                    <li id="parts4_menu"><a href="#parts4">えき</a></li>
                    <li id="parts5_menu"><a href="#parts5">えく</a></li>
                    <li id="parts6_menu"><a href="#parts6">えさ</a></li>
                    <li id="parts7_menu"><a href="#parts7">えそ</a></li>
                    <li id="parts8_menu"><a href="#parts8">えた</a></li>
                    <li id="parts9_menu"><a href="#parts9">えち</a></li>
                    <li id="parts10_menu"><a href="#parts10">えつ</a></li>
                    <li id="parts11_menu"><a href="#parts11">えな</a></li>
                    <li id="parts12_menu"><a href="#parts12">えに</a></li>
                    <li id="parts13_menu"><a href="#parts13">えの</a></li>
                    <li id="parts14_menu"><a href="#parts14">えひ</a></li>
                    <li id="parts15_menu"><a href="#parts15">えみ</a></li>
                    <li id="parts16_menu"><a href="#parts16">えむ</a></li>
                    <li id="parts17_menu"><a href="#parts17">えや</a></li>
                    <li id="parts18_menu"><a href="#parts18">えら</a></li>
                    <li id="parts19_menu"><a href="#parts19">えり</a></li>
                    <li id="parts20_menu"><a href="#parts20">える</a></li>
                    <li id="parts21_menu"><a href="#parts21">えん</a></li>
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
                <h3 class="ttl_while">え</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="24740">卫<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5760">囘<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19338">㞧<span class="small">エ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="092">会<span class="small">エ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="093">回<span class="small">エ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="446">衣<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12380">伌<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13614">囬<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18184">阭<span class="small">エ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1005">依<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12828">劸<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27832">𢌞<span class="small">エ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2172">廻<span class="small">エ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="14678">庡<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19154">㛄<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19593">㣛<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22954">䧇<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24263">䀘<span class="small">エ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1078">恵<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14719">廽<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21538">䋀<span class="small">エ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="3525">彗<span class="small">エ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="5980">淮<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18932">㖡<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20951">䀁<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21203">䅅<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25927">秽<span class="small">エ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="095">絵<span class="small">エ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5790">惠<span class="small">エ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="17287">葨<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19312">㞇<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19670">㥋<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22120">䖯<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26404">㑹<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5757">會<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13821">塧<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15753">溾<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19203">㜇<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19689">㥣<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20238">㱬<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21995">䔇<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10966">僡<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19845">㨹<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20242">㱱<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20890">㾯<span class="small">エ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2173">慧<span class="small">エ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="15862">澅<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18731">㒑<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20736">㻰<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21593">䋿<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22980">䧥<span class="small">エ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="644">衛<span class="small">エ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1032">壊<span class="small">エ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6306">衞<span class="small">エ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="14223">嬒<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14791">徻<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15281">橞<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17174">膭<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17484">螝<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17581">褢<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21400">䈭<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22041">䕇<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16238">燰<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17770">賹<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18077">鍡<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20143">㯱<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22254">䙡<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5561">穢<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16694">瞺<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17380">藱<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18575">黊<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19874">㩨<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22615">䠚<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24280">䈧<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25258">懳<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6094">繪<span class="small">エ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6151">壞<span class="small">エ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="15948">瀤<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16868">竵<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18106">鏏<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19241">㜳<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19441">㠢<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13110">儶<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17723">譮<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19736">㦣<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22704">䢈<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24157">醷<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21147">䃶<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23197">䫭<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17403">蘾<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24170">饖<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23364">䮹<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17730">讗<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23677">䵳<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23696">䶐<span class="small">エ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24365">䭨<span class="small">エ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="114">兄<span class="small">え</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1686">江<span class="small">え</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="166">図<span class="small">え</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="091">画<span class="small">え</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4011">枋<span class="small">え</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5549">秉<span class="small">え</span></a></li>
                    <li class="others_kanji kunyomi"><a href="24970">图<span class="small">え</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="325">重<span class="small">え</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1262">柄<span class="small">え</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2607">荏<span class="small">え</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4017">柯<span class="small">え</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6261">畫<span class="small">え</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12008">棅<span class="small">え</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19569">㢽<span class="small">え</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10300">畵<span class="small">え</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5884">圖<span class="small">え</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2017">餌<span class="small">え</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts2">
                <h3 class="ttl_while">えい</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="24740">卫<span class="small">エイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="254">央<span class="small">エイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="643">永<span class="small">エイ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2176">曳<span class="small">エイ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="12681">兊<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3148">兌<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5792">曵<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10497">盁<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11622">旲<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13111">兑<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14911">抁<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15444">汮<span class="small">エイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="251">泳<span class="small">エイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="448">英<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3232">咏<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4337">泄<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11298">抴<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11952">枍<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13278">呭<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14809">怈<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20027">㭇<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26354">茔<span class="small">エイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="449">栄<span class="small">エイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="828">映<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2177">洩<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2179">盈<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11321">拽<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11980">荣<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11981">枻<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11983">栐<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16484">玴<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18701">㑜<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18905">㖂<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19519">㡼<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20639">㹭<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26363">荥<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26365">荧<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5204">郢<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5692">珱<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8476">軎<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9402">偀<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10016">袣<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11322">捙<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11982">栧<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11984">柡<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14452">峵<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15568">浧<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16057">烓<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16647">眏<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20933">㿮<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21154">䄁<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26386">莹<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8789">䇦<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10970">悘<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12048">梬<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12067">梲<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12864">勚<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12935">殹<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17271">营<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19483">㡕<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19533">㢍<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21197">䄿<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22324">䚷<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23950">媖<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24019">渶<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24343">䣐<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26468">萦<span class="small">エイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="492">景<span class="small">エイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="645">営<span class="small">エイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1322">詠<span class="small">エイ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2178">瑛<span class="small">エイ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6210">暎<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8102">詍<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8237">䜭<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8366">跇<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9152">䋝<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11859">朠<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14638">幆<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14968">揘<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15236">楧<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16125">焸<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16141">煐<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17280">萾<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18797">㓹<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19188">㛳<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19284">㝣<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19503">㡫<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19817">㨕<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20280">㲟<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21095">䂱<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21344">䇩<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21703">䎈<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23012">䨍<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24304">䓲<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25134">嵘<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25557">溁<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25565">溋<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3348">塋<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4143">楹<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5043">裔<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7567">鉠<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10699">碤<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13452">嗌<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14171">嫈<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14521">嵤<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15350">歅<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22351">䛖<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24265">䁐<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25571">滢<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26502">蓥<span class="small">エイ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5731">榮<span class="small">エイ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6264">睿<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7289">靾<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8298">賏<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12863">勩<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14176">嫕<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14180">嫛<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15009">摬<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15762">滎<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16185">熒<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17467">蝧<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19072">㙠<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19702">㥷<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19845">㨹<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21496">䊔<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23251">䬬<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25583">潆<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25820">瘗<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26029">緓<span class="small">エイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1016">鋭<span class="small">エイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1017">影<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4630">瑩<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5730">潁<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7641">銳<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10409">瘞<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10811">禜<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12212">槥<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16201">熭<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16548">璄<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18041">銴<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19081">㙪<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20432">㵩<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20736">㻰<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21024">䁝<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21583">䋵<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21590">䋼<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22034">䔽<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22282">䚆<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24247">㵧<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26549">蝾<span class="small">エイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="644">衛<span class="small">エイ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2174">叡<span class="small">エイ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2180">穎<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3986">霙<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5308">殪<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5653">頴<span class="small">エイ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6306">衞<span class="small">エイ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="7717">鍈<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9101">縈<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10210">瑿<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10219">璏<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10221">璟<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10420">瘱<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10594">瞖<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11718">曀<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17587">褮<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20421">㵝<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20435">㵬<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21126">䃜<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22046">䕍<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22307">䚢<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22934">䦫<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23954">嬴<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="2175">嬰<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5611">翳<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6058">營<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7368">韺<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8180">謍<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9112">繄<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14245">嬫<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14581">嶸<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15912">濙<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15913">濚<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15924">濴<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17990">醟<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19009">㘇<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22158">䗟<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23270">䭊<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6552">黟<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7746">鎣<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8530">轊<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15934">瀅<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16250">爃<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24240">㲊<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4451">瀛<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15048">攍<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15317">櫘<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15946">瀠<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17744">豷<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18106">鏏<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18524">鶧<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19240">㜲<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20459">㶈<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22066">䕦<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23146">䪯<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23938">壡<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4110">蠑<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5494">贏<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7807">鏸<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9725">蘡<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9726">蘙<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11522">攖<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14262">孆<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14283">孾<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14590">巊<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14716">廮<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15953">瀯<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15956">瀴<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18603">齛<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19736">㦣<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21862">䑉<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22198">䘙<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23277">䭗<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27159">鐛<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4638">瓔<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15331">櫿<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16782">礯<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18607">齥<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21148">䃷<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21865">䑍<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22409">䜜<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23278">䭘<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7201">鷖<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8946">籝<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10455">癭<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18142">鑍<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20916">㿘<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22696">䡺<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4820">纓<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6562">黳<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8222">讏<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8457">躛<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17524">蠳<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25606">灜<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26585">讆<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26864">躗<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18557">鸉<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18613">齸<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8945">籯<span class="small">エイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24365">䭨<span class="small">エイ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7054">鱏<span class="small">えい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7073">鱝<span class="small">えい</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts3">
                <h3 class="ttl_while">えか</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="091">画<span class="small">えが（く）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1248">描<span class="small">えが（く）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="095">絵<span class="small">えが（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6261">畫<span class="small">えが（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10300">畵<span class="small">えが（く）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6094">繪<span class="small">えが（く）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts4">
                <h3 class="ttl_while">えき</h3>
                <ul class="search_parts yomi_parts">
                    <li class="jimmei onyomi"><a class="color2" href="2181">亦<span class="small">エキ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="12381">伇<span class="small">エキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="419">役<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13654">坄<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27820">𡵸<span class="small">エキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="647">易<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12432">㑊<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16012">炈<span class="small">エキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1610">疫<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3366">奕<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14622">帟<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14724">弈<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15512">洂<span class="small">エキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="646">益<span class="small">エキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="892">射<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10499">益<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13727">垼<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21543">䋇<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21949">䓈<span class="small">エキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="648">液<span class="small">エキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="990">訳<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3690">掖<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8254">豛<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20353">㴁<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23931">埸<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4230">腋<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11688">晹<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12083">棭<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15695">湙<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16115">焬<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16120">焲<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18012">鈠<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20364">㴒<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22638">䠶<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10381">痬<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10564">睪<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13452">嗌<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16432">獈<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19207">㜋<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22222">䘸<span class="small">エキ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="252">駅<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4067">蜴<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17166">膉<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22669">䡛<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16195">熤<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3625">懌<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13872">墿<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14569">嶧<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19006">㘁<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23926">圛<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11570">斁<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11571">歝<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11729">曎<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16229">燡<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10086">襗<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21049">䁺<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3868">鯣<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4812">繹<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18235">霬<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23478">䱛<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5700">譯<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8768">醳<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19548">㢞<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22941">䦴<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23283">䭞<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6352">驛<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18613">齸<span class="small">エキ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20474">㶠<span class="small">エキ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5542">站<span class="small">えき</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts5">
                <h3 class="ttl_while">えく</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="8769">醶<span class="small">えぐ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="9733">蘞<span class="small">えぐ（い）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25572">靥<span class="small">えくぼ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4360">靨<span class="small">えくぼ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3169">刔<span class="small">えぐ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3662">抉<span class="small">えぐ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3173">刳<span class="small">えぐ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="14937">挗<span class="small">えぐ（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3179">剔<span class="small">えぐ（る）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts6">
                <h3 class="ttl_while">えさ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="19569">㢽<span class="small">えさ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2017">餌<span class="small">えさ</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts7">
                <h3 class="ttl_while">えそ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="7022">鰣<span class="small">えそ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7050">鱛<span class="small">えそ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts8">
                <h3 class="ttl_while">えた</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="4002">朶<span class="small">えだ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11935">朵<span class="small">えだ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="739">条<span class="small">えだ</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="721">枝<span class="small">えだ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4017">柯<span class="small">えだ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="11936">䒳<span class="small">えだ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6111">條<span class="small">えだ</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="12582">傜<span class="small">えだち</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3536">徭<span class="small">えだち</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts9">
                <h3 class="ttl_while">えち</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="12819">劜<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13630">圠<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27818">𡴭<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13962">妜<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13286">呾<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21268">䆕<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14050">娧<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15374">毤<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14093">婠<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14954">捾<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17106">聅<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19102">㚃<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19284">㝣<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21280">䆢<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21344">䇩<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24304">䓲<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13461">嗗<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20508">㷎<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23656">䵝<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23909">嗢<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23374">䯉<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14205">嫼<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15851">潱<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21583">䋵<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22933">䦪<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21514">䊦<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23175">䫔<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19736">㦣<span class="small">エチ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22882">䥟<span class="small">エチ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts10">
                <h3 class="ttl_while">えつ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="4249">曰<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3643">戉<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12681">兊<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3148">兌<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13111">兑<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="13962">妜<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24013">泧<span class="small">エツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1947">咽<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11080">恱<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15517">洇<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21268">䆕<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24799">哕<span class="small">エツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1323">悦<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9770">蚏<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11079">悅<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="14050">娧<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15374">毤<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17418">蚎<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17421">蚗<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12359">啘<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15207">棁<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16094">焆<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17106">聅<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21551">䋐<span class="small">エツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1018">越<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5263">粤<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="18947">㖶<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19102">㚃<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19284">㝣<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21280">䆢<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21344">䇩<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21984">䓹<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22567">䟠<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="23245">䬥<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="24304">䓲<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4690">鉞<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11704">暍<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20508">㷎<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="25986">粵<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="26209">龯<span class="small">エツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="551">説<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="8146">說<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="27477">䤦<span class="small">エツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1324">閲<span class="small">エツ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1611">謁<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3299">噎<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7879">閱<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="15851">潱<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="16201">熭<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21020">䁙<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21583">䋵<span class="small">エツ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6412">謁<span class="small">エツ</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="12230">樾<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="12339">噦<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="17480">螖<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="20005">㬞<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7478">䭇<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="21514">䊦<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="6555">黦<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="19736">㦣<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="22882">䥟<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5294">饐<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9965">蠮<span class="small">エツ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10262">瓛<span class="small">エツ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6886">魛<span class="small">えつ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6938">鮆<span class="small">えつ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6939">鱭<span class="small">えつ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts11">
                <h3 class="ttl_while">えな</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="9998">褜<span class="small">えな</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts12">
                <h3 class="ttl_while">えに</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1020">縁<span class="small">えにし</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="6453">緣<span class="small">えにし</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts13">
                <h3 class="ttl_while">えの</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="1897">朴<span class="small">えのき</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2207">榎<span class="small">えのき</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5362">莠<span class="small">えのころぐさ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts14">
                <h3 class="ttl_while">えひ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="26530">虾<span class="small">えび</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4052">蛯<span class="small">えび</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2213">蝦<span class="small">えび</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="9885">螧<span class="small">えび</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3879">鰕<span class="small">えび</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2150">夷<span class="small">えびす</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="2525">戎<span class="small">えびす</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5100">狄<span class="small">えびす</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5125">羌<span class="small">えびす</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26527">虏<span class="small">えびす</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2168">胡<span class="small">えびす</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="9197">羗<span class="small">えびす</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2718">蛋<span class="small">えびす</span></a></li>
                    <li class="others_kanji kunyomi"><a href="16400">猐<span class="small">えびす</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1535">蛮<span class="small">えびす</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="8282">貃<span class="small">えびす</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1927">虜<span class="small">えびす</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4064">蜑<span class="small">えびす</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5474">貊<span class="small">えびす</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="6363">虜<span class="small">えびす</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2844">蕃<span class="small">えびす</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5129">羯<span class="small">えびす</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5702">蠻<span class="small">えびす</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4547">箙<span class="small">えびら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7341">䪍<span class="small">えびら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7340">韊<span class="small">えびら</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts15">
                <h3 class="ttl_while">えみ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="jimmei kunyomi"><a class="color2" href="2150">夷<span class="small">えみし</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts16">
                <h3 class="ttl_while">えむ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo kunyomi"><a class="color1" href="535">笑<span class="small">え（む）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="8788">㗛<span class="small">え（む）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts17">
                <h3 class="ttl_while">えや</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="12335">厉<span class="small">えやみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10448">疠<span class="small">えやみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="12334">厲<span class="small">えやみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5239">瘟<span class="small">えやみ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5251">癘<span class="small">えやみ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts18">
                <h3 class="ttl_while">えら</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="4236">腮<span class="small">えら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5141">顋<span class="small">えら</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3876">鰓<span class="small">えら</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1007">偉<span class="small">えら（い）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1102">豪<span class="small">えら（い）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="13107">儫<span class="small">えら（い）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1494">択<span class="small">えら（ぶ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="3171">刪<span class="small">えら（ぶ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6543">删<span class="small">えら（ぶ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4023">柬<span class="small">えら（ぶ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26942">选<span class="small">えら（ぶ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3696">掏<span class="small">えら（ぶ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3703">揀<span class="small">えら（ぶ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2040">詮<span class="small">えら（ぶ）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4698">銓<span class="small">えら（ぶ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="553">選<span class="small">えら（ぶ）</span></a>
                    </li>
                    <li class="jimmei kunyomi"><a class="color2" href="2452">撰<span class="small">えら（ぶ）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5874">擇<span class="small">えら（ぶ）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="838">簡<span class="small">えら（ぶ）</span></a>
                    </li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts19">
                <h3 class="ttl_while">えり</h3>
                <ul class="search_parts yomi_parts">
                    <li class="jimmei kunyomi"><a class="color2" href="2334">衿<span class="small">えり</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="5041">衽<span class="small">えり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="25909">祍<span class="small">えり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5040">袵<span class="small">えり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6885">魞<span class="small">えり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10081">䘳<span class="small">えり</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="823">領<span class="small">えり</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4417">滬<span class="small">えり</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1664">襟<span class="small">えり</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4023">柬<span class="small">えりわ（ける）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts20">
                <h3 class="ttl_while">える</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="26942">选<span class="small">え（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="19299">㝶<span class="small">え（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="26382">获<span class="small">え（る）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="584">得<span class="small">え（る）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="553">選<span class="small">え（る）</span></a>
                    </li>
                    <li class="joyo kunyomi"><a class="color1" href="1036">獲<span class="small">え（る）</span></a>
                    </li>
                    <li class="others_kanji kunyomi"><a href="4580">雕<span class="small">え（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7829">鎸<span class="small">え（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4721">鏤<span class="small">え（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4722">鏨<span class="small">え（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7170">鵰<span class="small">え（る）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4732">鐫<span class="small">え（る）</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts21">
                <h3 class="ttl_while">えん</h3>
                <ul class="search_parts yomi_parts">
                    <li class="joyo onyomi"><a class="color1" href="004">円<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13182">厃<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18877">㕣<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23941">夗<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11596">㫃<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13913">夵<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21762">䏍<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24745">厌<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8609">㳄<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11755">肙<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13608">囦<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13611">囩<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13964">妟<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14911">抁<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15459">沇<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18184">阭<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20310">㳂<span class="small">エン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="829">沿<span class="small">エン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="830">延<span class="small">エン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1325">炎<span class="small">エン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1940">宛<span class="small">エン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2170">苑<span class="small">エン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2184">奄<span class="small">エン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="6697">乵<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7921">阽<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11625">昖<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12685">兖<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13976">妴<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16016">炏<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16482">玧<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19462">㠾<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20027">㭇<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="26939">远<span class="small">エン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1626">垣<span class="small">エン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1947">咽<span class="small">エン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1951">怨<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4357">爰<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5581">衍<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11626">㫟<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12684">兗<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12976">匽<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13149">剈<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14007">姢<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14016">姲<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14723">弇<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15533">洝<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15549">洹<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17757">貟<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24993">垵<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="25245">恹<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="27892">𤇆<span class="small">エン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="248">員<span class="small">エン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1326">宴<span class="small">エン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1957">俺<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3040">烟<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3157">冤<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3386">娟<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3568">悁<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3687">捐<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4376">涎<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5351">莚<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6307">袁<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7883">剦<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10540">眢<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11926">胭<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12497">倇<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12768">剡<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13741">埏<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14053">娫<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16388">狿<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16497">珚<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17528">衏<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17602">覎<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17950">郔<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19277">㝚<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19647">㤪<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20587">㸶<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20819">㽜<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23902">唌<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="25833">盐<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="26336">艳<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="2185">掩<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="2187">焔<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3116">偃<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3392">婉<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4377">淹<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4911">焉<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5655">渕<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5933">渊<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6116">寃<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7882">閆<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8730">酓<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9493">菀<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9494">菸<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9850">䖤<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11122">惋<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11373">掞<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12531">偣<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13761">埯<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14479">崦<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14633">帵<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14954">捾<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15198">梋<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15611">涴<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15654">渁<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15658">渆<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16084">烻<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17266">萒<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19180">㛪<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19660">㤿<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20361">㴊<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22756">䣍<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24752">厣<span class="small">エン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1019">援<span class="small">エン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1952">媛<span class="small">エン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2183">堰<span class="small">エン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2186">淵<span class="small">エン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3701">掾<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4390">湲<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4392">湮<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5079">覃<span class="small">エン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6448">焰<span class="small">エン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="7543">鈆<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8677">郾<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10163">琬<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10164">琰<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10370">㾓<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11244">扊<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11396">揜<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11687">晻<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11689">晼<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11836">腌<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12084">棪<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12694">圎<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12902">殗<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13426">喛<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14135">媕<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14840">惌<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14851">愋<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14852">愝<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14971">揞<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15061">敥<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15667">渰<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15671">渷<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16119">焱<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16402">猒<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16415">猨<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16417">猭<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17285">葕<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17289">葾<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18198">隁<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18947">㖶<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19674">㥐<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19907">㪑<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20059">㭺<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20235">㱧<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20996">䀽<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22216">䘰<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22336">䛄<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22339">䛇<span class="small">エン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="084">遠<span class="small">エン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="085">園<span class="small">エン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="450">塩<span class="small">エン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1021">煙<span class="small">エン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1022">鉛<span class="small">エン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1612">猿<span class="small">エン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="2038">羨<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4055">蜒<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4532">筵<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5591">罨<span class="small">エン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5769">圓<span class="small">エン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="9040">綖<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9831">蜎<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10041">裷<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10184">瑗<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="10327">畹<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12127">椻<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12133">楥<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12586">傿<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14158">媴<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15213">棩<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15224">椼<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15350">歅<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15723">溎<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15725">溒<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15736">溤<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16144">煔<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16664">睕<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16740">硽<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17305">蒬<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20076">㮒<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20203">㰽<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20511">㷑<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21158">䄋<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21217">䅖<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22225">䘼<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23656">䵝<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24137">裺<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24228">㬊<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24251">㷔<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24943">嗯<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="25566">滟<span class="small">エン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="649">演<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="2182">厭<span class="small">エン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2190">鳶<span class="small">エン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="3403">嫣<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4068">蜿<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8693">鄢<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9605">蔫<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12169">榬<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13848">墕<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14179">嫚<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15109">暥<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15820">漹<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16608">瘎<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16796">禐<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16909">箢<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17012">綩<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17335">蔩<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17564">裫<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17576">褑<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17578">褗<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18334">馻<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19223">㜝<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19706">㥼<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21231">䅧<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21729">䎦<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21889">䑱<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22150">䗕<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24051">熖<span class="small">エン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1020">縁<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5647">豌<span class="small">エン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="6453">緣<span class="small">エン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="7662">鋋<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8397">踠<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8747">醃<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9868">蝘<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9869">蝝<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9870">蝯<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11231">戭<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14217">嬊<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14556">嶖<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15849">潫<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17454">蜵<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17583">褤<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18340">駌<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="19031">㘤<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20676">㺖<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20677">㺗<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21020">䁙<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21391">䈠<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22378">䛳<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22382">䛷<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22671">䡝<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24323">䗎<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="25635">餍<span class="small">エン</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2188">燕<span class="small">エン</span></a>
                    </li>
                    <li class="jimmei onyomi"><a class="color2" href="2189">薗<span class="small">エン</span></a>
                    </li>
                    <li class="others_kanji onyomi"><a href="2191">鴛<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3328">圜<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3959">閻<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3960">閼<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3961">閹<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4708">鋺<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8470">躽<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11011">㦔<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12243">橪<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13547">噮<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16214">燄<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20433">㵪<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20538">㷼<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22485">䞁<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22849">䤶<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23221">䬇<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23539">䲻<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23547">䳃<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24355">䬼<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="26027">魇<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="27680">橼<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4191">檐<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4477">轅<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6105">篶<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9113">縯<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9685">薳<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11012">懨<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14247">嬮<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15123">曕<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18287">顃<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22160">䗡<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22730">䢭<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22850">䤷<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23062">䩊<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23088">䩩<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23554">䳒<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11010">懕<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="12286">檿<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18100">鎱<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20221">㱘<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23562">䳛<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="26154">黡<span class="small">エン</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1953">艶<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3314">嚥<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4599">簷<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6225">櫞<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7147">鵷<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13203">厴<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="13883">壛<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14257">嬽<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="14258">嬿<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17973">酀<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20455">㶄<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22177">䗺<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22864">䥉<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23568">䳣<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="4315">臙<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6554">黤<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6683">龑<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6995">鰋<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7156">鶢<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="11737">曣<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15323">櫩<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="16260">爓<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18376">騴<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18521">鶠<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20010">㬫<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23493">䱲<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="24043">灁<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18527">鶰<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18580">黫<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20914">㿕<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20960">䀋<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22939">䦲<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6516">灔<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6636">鼴<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18589">鼘<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="21632">䌪<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="22548">䟍<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="5012">讌<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6637">鼹<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7213">鷰<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7508">饜<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="8772">醼<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="17630">觾<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="20471">㶜<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3951">魘<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6296">艷<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6100">鹽<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18591">鼝<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="3758">黶<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6515">灎<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="18390">驠<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="7214">䴏<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9356">豓<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="15995">灧<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="9357">豔<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="6514">灩<span class="small">エン</span></a></li>
                    <li class="others_kanji onyomi"><a href="23009">䨊<span class="small">エン</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4161">槐<span class="small">えんじゅ</span></a></li>
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