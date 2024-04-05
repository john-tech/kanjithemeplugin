<?php
/*
 * Template Name: redical
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
<style>
 .search_menu li:nth-child(2) {
    display: none;
}
</style>
<div id="all">
    <header>
        <div class="nosnippet" data-nosnippet>
            <div class="header_search" data-nosnippet>
                <div class="search_inner">
                    <form id="head_form" class="search_form" name="head_form" onsubmit="return false" accept-charset="utf-8" method="post">
                        <span id="select_search" class="select_search">部首</span>
                        <input type="hidden" id="slide2">
                        <input type="hidden" id="head_how" class="how" value="部首">
                        <input type="text" id="head_value" name="value" placeholder="例）にんべん 車車車 5画" class="value input_search" value="">
                        <input type="submit" id="head_submit" value="" class="search_btn">
                    </form>
                    <div id="target2" class="search_target search_other">
                        <ul id="select01" class="cf">
                            <li><a href="#" class="sel1" id="sel11">すべて</a></li>
                            <li><a href="#" class="sel1" id="sel12">漢字</a></li>
                            <li><a href="#" class="sel1" id="sel15">意味</a></li>
                            <li><a href="#" class="sel1 head-active" id="sel13">部首</a></li>
                            <li><a href="#" class="sel1" id="sel14">構成</a></li>
                        </ul>
                        <ul id="select02" class="cf">
                            <li><a href="#" class="sel2 head-active" id="sel21">を含む</a></li>
                            <li><a href="#" class="sel2" id="sel22">から始まる</a></li>
                            <li><a href="#" class="sel2" id="sel23">で終わる</a></li>
                            <li><a href="#" class="sel2" id="sel24">と一致する</a></li>
                        </ul>
                        <div class="detail_search">
                            <a href="#">さらに詳しい条件で検索<span>▶</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script type="text/javascript">
        $('#target2 #select02').hide();
    </script>
    <div id="wrapper" class="cf">
        <div id="content">
            <h1 class="ttl_main">部首の画数から検索</h1>
            <aside>
                <div class="ads_wrapin">
                    <style>
                        .ads_responsive_1 {
                            width: 320px;
                            height: 100px;
                        }

                        @media(min-width: 500px) {
                            .ads_responsive_1 {
                                width: 468px;
                                height: 60px;
                            }
                        }

                        @media(min-width: 800px) {
                            .ads_responsive_1 {
                                width: 728px;
                                height: 90px;
                            }
                        }
                    </style>
                    <!-- レスポンシブ0 -->
                </div>
            </aside>
            <div class="bushu_list">
                <div class="search_data bushu_menu">
                    <ul class="search_menu two_menu">
                        <li>部首の画数から検索</li>
                        <li><a href="#">部首の読み方から検索</a></li>
                    </ul>
                    <ul class="search_menu2">
                        <li><a href="#parts01">1画</a></li>
                        <li><a href="#parts02">2画</a></li>
                        <li><a href="#parts03">3画</a></li>
                        <li><a href="#parts04">4画</a></li>
                        <li><a href="#parts05">5画</a></li>
                        <li><a href="#parts06">6画</a></li>
                        <li><a href="#parts07">7画</a></li>
                        <li><a href="#parts08">8画</a></li>
                        <li><a href="#parts09">9画</a></li>
                        <li><a href="#parts10">10画</a></li>
                        <li><a href="#parts11">11画</a></li>
                        <li><a href="#parts12">12画</a></li>
                        <li><a href="#parts13">13画</a></li>
                        <li><a href="#parts14">14画</a></li>
                        <li><a href="#parts15">15画</a></li>
                        <li><a href="#parts16">16画</a></li>
                        <li><a href="#parts17">17画</a></li>
                    </ul>
                </div>
                <!--search_data-->
                <div class="cat_data">
                    <h2 class="ttl_sub" id="parts01"><span class="orange">１画</span></h2>
                    <ul class="cat_list">
                        <li><a href="javascript:void(0)" data-value="いち" class="sett" class="bold">一</span><span class="normal">いち</span></a></li>
                        <li><a href="javascript:void(0)" data-value="乙 乚<" class="sett"><span class="bold">乙 乚</span><span class="normal">おつ・おつにょう・つりばり</span></a></li>
                        <li><a href="javascript:void(0)" data-value="丨" class="sett"><span class="bold">丨</span><span class="normal">たてぼう・ぼう</span></a></li>
                        <li><a href="javascript:void(0)" data-value="丶" class="sett"><span class="bold">丶</span><span class="normal">てん・ちょぼ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="亅" class="sett"><span class="bold">亅</span><span class="normal">はねぼう・かぎ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="丿" class="sett"><span class="bold">丿</span><span class="normal">の・はらいぼう</span></a></li>
                    </ul>
                    <h2 class="ttl_sub" id="parts02"><span class="orange">２画</span></h2>
                    <ul class="cat_list">
                        <li><a href="javascript:void(0)" data-value="冂" class="sett"><span class="bold">冂</span><span class="normal">けいがまえ・まきがまえ・えんがまえ・どうがまえ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="人 亻" class="sett"><span class="bold">人 亻</span><span class="normal">ひと・にんべん・ひとがしら・ひとやね</span></a></li>
                        <li><a href="javascript:void(0)" data-value="二" class="sett"><span class="bold">二</span><span class="normal">に</span></a></li>
                        <li><a href="javascript:void(0)" data-value="十" class="sett"><span class="bold">十</span><span class="normal">じゅう</span></a></li>
                        <li><a href="javascript:void(0)" data-value="凵" class="sett"><span class="bold">凵</span><span class="normal">かんにょう・うけばこ・かんがまえ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="儿" class="sett"><span class="bold">儿</span><span class="normal">にんにょう・ひとあし</span></a></li>
                        <li><a href="javascript:void(0)" data-value="入" class="sett"><span class="bold">入</span><span class="normal">いる・にゅう・いりがしら・いりやね</span></a></li>
                        <li><a href="javascript:void(0)" data-value="八" class="sett"><span class="bold">八</span><span class="normal">はち・はちがしら・は</span></a></li>
                        <li><a href="javascript:void(0)" data-value="力" class="sett"><span class="bold">力</span><span class="normal">ちから</span></a></li>
                        <li><a href="javascript:void(0)" data-value="亠" class="sett"><span class="bold">亠</span><span class="normal">なべぶた・けいさんかんむり</span></a></li>
                        <li><a href="javascript:void(0)" data-value="厂" class="sett"><span class="bold">厂</span><span class="normal">がんだれ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="刀 刂" class="sett"><span class="bold">刀 刂</span><span class="normal">かたな・りっとう</span></a></li>
                        <li><a href="javascript:void(0)" data-value="冫" class="sett"><span class="bold">冫</span><span class="normal">にすい</span></a></li>
                        <li><a href="javascript:void(0)" data-value="匕" class="sett"><span class="bold">匕</span><span class="normal">ひ・さじ・さじのひ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="又" class="sett"><span class="bold">又</span><span class="normal">また</span></a></li>
                        <li><a href="javascript:void(0)" data-value="匸" class="sett"><span class="bold">匸</span><span class="normal">かくしがまえ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="厶" class="sett"><span class="bold">厶</span><span class="normal">む</span></a></li>
                        <li><a href="javascript:void(0)" data-value="冖" class="sett"><span class="bold">冖</span><span class="normal">わかんむり・ひらかんむり・べきかんむり</span></a>
                        </li>
                        <li><a href="javascript:void(0)" data-value="卩 㔾" class="sett"><span class="bold">卩 㔾</span><span class="normal">ふしづくり・わりふ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="勹" class="sett"><span class="bold">勹</span><span class="normal">つつみがまえ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="几" class="sett"><span class="bold">几</span><span class="normal">つくえ・きにょう・かぜかんむり・かぜがまえ・かざがまえ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="卜" class="sett"><span class="bold">卜</span><span class="normal">ぼく・ぼくのと・と・うらない</span></a></li>
                        <li><a href="javascript:void(0)" data-value="匚" class="sett"><span class="bold">匚</span><span class="normal">はこがまえ</span></a></li>
                    </ul>
                    <h2 class="ttl_sub" id="parts03"><span class="orange">３画</span></h2>
                    <ul class="cat_list">
                        <li><a href="javascript:void(0)" data-value="子" class="sett"><span class="bold">子</span><span class="normal">こ・こへん・こども・こどもへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="士" class="sett"><span class="bold">士</span><span class="normal">さむらい</span></a></li>
                        <li><a href="javascript:void(0)" data-value="口" class="sett"><span class="bold">口</span><span class="normal">くち・くちへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="工" class="sett"><span class="bold">工</span><span class="normal">え・たくみ・たくみへん・こう</span></a></li>
                        <li><a href="javascript:void(0)" data-value="山" class="sett"><span class="bold">山</span><span class="normal">やま・やまへん・やまかんむり</span></a></li>
                        <li><a href="javascript:void(0)" data-value="囗" class="sett"><span class="bold">囗</span><span class="normal">くにがまえ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="女" class="sett"><span class="bold">女</span><span class="normal">おんな・おんなへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="小" class="sett"><span class="bold">小</span><span class="normal">しょう・しょうがしら・なおがしら</span></a></li>
                        <li><a href="javascript:void(0)" data-value="夕" class="sett"><span class="bold">夕</span><span class="normal">ゆうべ・ゆう・た</span></a></li>
                        <li><a href="javascript:void(0)" data-value="巛 川" class="sett"><span class="bold">巛 川</span><span class="normal">かわ・まげかわ・まがりがわ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="大" class="sett"><span class="bold">大</span><span class="normal">だい</span></a></li>
                        <li><a href="javascript:void(0)" data-value="土" class="sett"><span class="bold">土</span><span class="normal">つち・つちへん・どへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="干" class="sett"><span class="bold">干</span><span class="normal">かん・いちじゅう・ほす</span></a></li>
                        <li><a href="javascript:void(0)" data-value="弓" class="sett"><span class="bold">弓</span><span class="normal">ゆみ・ゆみへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="辵 辶" class="sett"><span class="bold">辵 辶</span><span class="normal">しんにょう・しんにゅう</span></a></li>
                        <li><a href="javascript:void(0)" data-value="宀" class="sett"><span class="bold">宀</span><span class="normal">うかんむり</span></a></li>
                        <li><a href="javascript:void(0)" data-value="夂 夊" class="sett"><span class="bold">夂 夊</span><span class="normal">ふゆがしら・ち・すいにょう・なつあし</span></a>
                        </li>
                        <li><a href="javascript:void(0)" data-value="巾" class="sett"><span class="bold">巾</span><span class="normal">はば・はばへん・きんべん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="彡" class="sett"><span class="bold">彡</span><span class="normal">さんづくり</span></a></li>
                        <li><a href="javascript:void(0)" data-value="彳" class="sett"><span class="bold">彳</span><span class="normal">ぎょうにんべん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="广" class="sett"><span class="bold">广</span><span class="normal">まだれ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="寸" class="sett"><span class="bold">寸</span><span class="normal">すん・すんづくり</span></a></li>
                        <li><a href="javascript:void(0)" data-value="阜 阝" class="sett"><span class="bold">阜 阝</span><span class="normal">こざと・こざとへん・おか</span></a></li>
                        <li><a href="javascript:void(0)" data-value="尸" class="sett"><span class="bold">尸</span><span class="normal">しかばね・かばね・しかばねだれ・しかばねかんむり・かばねだれ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="弋" class="sett"><span class="bold">弋</span><span class="normal">しきがまえ・よく</span></a></li>
                        <li><a href="javascript:void(0)" data-value="邑  阝" class="sett"><span class="bold">邑 阝</span><span class="normal">おおざと・むら</span></a></li>
                        <li><a href="javascript:void(0)" data-value="廴" class="sett"><span class="bold">廴</span><span class="normal">えんにょう・いんにょう</span></a></li>
                        <li><a href="javascript:void(0)" data-value="⺍" class="sett"><span class="bold">⺍</span><span class="normal">つ・つかんむり</span></a></li>
                        <li><a href="javascript:void(0)" data-value="廾" class="sett"><span class="bold">廾</span><span class="normal">にじゅうあし・こまぬき</span></a></li>
                        <li><a href="javascript:void(0)" data-value="己 巳 已" class="sett"><span class="bold">己 巳 已</span><span class="normal">おのれ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="尢" class="sett"><span class="bold">尢 尣</span><span class="normal">だいのまげあし・まげあし・おうにょう</span></a>
                        </li>
                        <li><a href="javascript:void(0)" data-value="幺" class="sett"><span class="bold">幺</span><span class="normal">いとがしら・よう</span></a></li>
                        <li><a href="javascript:void(0)" data-value="屮" class="sett"><span class="bold">屮</span><span class="normal">てつ・めばえ・くさのめ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="彑 彐" class="sett"><span class="bold">彑 彐</span><span class="normal">けいがしら・いのこがしら</span></a></li>
                        <li><a href="javascript:void(0)" data-value="犬 犭" class="sett"><span class="bold">犬 犭</span><span class="normal">いぬ・けものへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="手" class="sett"><span class="bold">手 扌</span><span class="normal">て・てへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="水" class="sett"><span class="bold">水 氵 氺</span><span class="normal">みず・さんずい・したみず</span></a></li>
                        <li><a href="javascript:void(0)" data-value="心" class="sett"><span class="bold">心 忄</span><span class="normal">こころ・したごころ・りっしんべん</span></a>
                        </li>
                        <li><a href="javascript:void(0)" data-value="艸" class="sett"><span class="bold">艸 艹</span><span class="normal">くさ・くさかんむり・そうこう</span></a></li>
                    </ul>
                    <h2 class="ttl_sub" id="parts04"><span class="orange">４画</span></h2>
                    <ul class="cat_list">
                        <li><a href="javascript:void(0)" data-value="辵" class="sett"><span class="bold">辵 辶</span><span class="normal">しんにょう・しんにゅう</span></a></li>
                        <li><a href="javascript:void(0)" data-value="尢" class="sett"><span class="bold">尢 尣</span><span class="normal">だいのまげあし・まげあし・おうにょう</span></a>
                        </li>
                        <li><a href="javascript:void(0)" data-value="火" class="sett"><span class="bold">火 灬</span><span class="normal">ひ・ひへん・れっか・れんが</span></a></li>
                        <li><a href="javascript:void(0)" data-value="气" class="sett"><span class="bold">气</span><span class="normal">きがまえ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="犬" class="sett"><span class="bold">犬 犭</span><span class="normal">いぬ・けものへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="木" class="sett"><span class="bold">木</span><span class="normal">き・きへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="手" class="sett"><span class="bold">手 扌</span><span class="normal">て・てへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="止" class="sett"><span class="bold">止</span><span class="normal">とめる・とめへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="水" class="sett"><span class="bold">水 氵 氺</span><span class="normal">みず・さんずい・したみず</span></a></li>
                        <li><a href="javascript:void(0)" data-value="日" class="sett"><span class="bold">日</span><span class="normal">ひ・ひへん・にち・にちへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="文" class="sett"><span class="bold">文</span><span class="normal">ぶん・ぶんにょう</span></a></li>
                        <li><a href="javascript:void(0)" data-value="欠" class="sett"><span class="bold">欠</span><span class="normal">あくび・かける・けんづくり</span></a></li>
                        <li><a href="javascript:void(0)" data-value="牛" class="sett"><span class="bold">牛 牜</span><span class="normal">うし・うしへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="攴" class="sett"><span class="bold">攴 攵</span><span class="normal">ぼくにょう・ぼくづくり・とまた・のぶん</span></a>
                        </li>
                        <li><a href="javascript:void(0)" data-value="戶" class="sett"><span class="bold">戶 戸</span><span class="normal">と・とだれ・とかんむり・とびらのと</span></a>
                        </li>
                        <li><a href="javascript:void(0)" data-value="曰" class="sett"><span class="bold">曰</span><span class="normal">いわく・ひらび</span></a></li>
                        <li><a href="javascript:void(0)" data-value="斤" class="sett"><span class="bold">斤</span><span class="normal">おのづくり・おの・きん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="心" class="sett"><span class="bold">心 忄</span><span class="normal">こころ・したごころ・りっしんべん</span></a>
                        </li>
                        <li><a href="javascript:void(0)" data-value="月" class="sett"><span class="bold">月</span><span class="normal">つき・つきへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="父" class="sett"><span class="bold">父</span><span class="normal">ちち</span></a></li>
                        <li><a href="javascript:void(0)" data-value="毋" class="sett"><span class="bold">毋 母</span><span class="normal">なかれ・ははのかん・はは</span></a></li>
                        <li><a href="javascript:void(0)" data-value="方" class="sett"><span class="bold">方</span><span class="normal">ほう・ほうへん・かたへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="毛" class="sett"><span class="bold">毛</span><span class="normal">け</span></a></li>
                        <li><a href="javascript:void(0)" data-value="歹" class="sett"><span class="bold">歹 歺</span><span class="normal">がつ・がつへん・いちたへん・かばねへん</span></a>
                        </li>
                        <li><a href="javascript:void(0)" data-value="殳" class="sett"><span class="bold">殳</span><span class="normal">ほこづくり・るまた</span></a></li>
                        <li><a href="javascript:void(0)" data-value="氏" class="sett"><span class="bold">氏</span><span class="normal">うじ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="戈" class="sett"><span class="bold">戈</span><span class="normal">ほこづくり・ほこがまえ・ほこ・かのほこ</span></a>
                        </li>
                        <li><a href="javascript:void(0)" data-value="斗" class="sett"><span class="bold">斗</span><span class="normal">とます・と</span></a></li>
                        <li><a href="javascript:void(0)" data-value="支" class="sett"><span class="bold">支</span><span class="normal">し・しにょう・えだにょう・じゅうまた</span></a>
                        </li>
                        <li><a href="javascript:void(0)" data-value="片" class="sett"><span class="bold">片</span><span class="normal">かた・かたへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="比" class="sett"><span class="bold">比</span><span class="normal">くらべる・ならびひ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="爪" class="sett"><span class="bold">爪 爫</span><span class="normal">つめ・つめかんむり・つめがしら・そうにょう・のつ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="牙" class="sett"><span class="bold">牙</span><span class="normal">きば・きばへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="爻" class="sett"><span class="bold">爻</span><span class="normal">こう・まじわる・めめ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="爿" class="sett"><span class="bold">爿</span><span class="normal">しょうへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="玉" class="sett"><span class="bold">玉 王 ⺩</span><span class="normal">たま・たまへん・おうへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="示" class="sett"><span class="bold">示 礻</span><span class="normal">しめす・しめすへん・ねへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="无" class="sett"><span class="bold">无 旡</span><span class="normal">む・むにょう・ぶ・なし・すでのつくり</span></a>
                        </li>
                        <li><a href="javascript:void(0)" data-value="艸" class="sett"><span class="bold">艸 艹</span><span class="normal">くさ・くさかんむり・そうこう</span></a></li>
                        <li><a href="javascript:void(0)" data-value="老" class="sett"><span class="bold">老 耂</span><span class="normal">おいかんむり・おいがしら・おい</span></a>
                        </li>
                        <li><a href="javascript:void(0)" data-value="肉" class="sett"><span class="bold">肉 月</span><span class="normal">にく・にくづき</span></a></li>
                        <li><a href="javascript:void(0)" data-value="网" class="sett"><span class="bold">网 罒 㓁</span><span class="normal">あみがしら・あみめ</span></a></li>
                    </ul>
                    <h2 class="ttl_sub" id="parts05"><span class="orange">５画</span></h2>
                    <ul class="cat_list">
                        <li><a href="javascript:void(0)" data-value="水" class="sett"><span class="bold">水 氵 氺</span><span class="normal">みず・さんずい・したみず</span></a></li>
                        <li><a href="javascript:void(0)" data-value="毋" class="sett"><span class="bold">毋 母</span><span class="normal">なかれ・ははのかん・はは</span></a></li>
                        <li><a href="javascript:void(0)" data-value="歹" class="sett"><span class="bold">歹 歺</span><span class="normal">がつ・がつへん・いちたへん・かばねへん</span></a>
                        </li>
                        <li><a href="javascript:void(0)" data-value="牙" class="sett"><span class="bold">牙</span><span class="normal">きば・きばへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="玉" class="sett"><span class="bold">玉 王 ⺩</span><span class="normal">たま・たまへん・おうへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="穴" class="sett"><span class="bold">穴</span><span class="normal">あな・あなかんむり</span></a></li>
                        <li><a href="javascript:void(0)" data-value="生" class="sett"><span class="bold">生</span><span class="normal">いきる・うまれる</span></a></li>
                        <li><a href="javascript:void(0)" data-value="石" class="sett"><span class="bold">石</span><span class="normal">いし・いしへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="田" class="sett"><span class="bold">田</span><span class="normal">た・たへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="白" class="sett"><span class="bold">白</span><span class="normal">しろ・しろへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="目" class="sett"><span class="bold">目 罒</span><span class="normal">め・めへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="立" class="sett"><span class="bold">立</span><span class="normal">たつ・たつへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="禾" class="sett"><span class="bold">禾</span><span class="normal">のぎ・のぎへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="矢" class="sett"><span class="bold">矢</span><span class="normal">や・やへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="示" class="sett"><span class="bold">示 礻</span><span class="normal">しめす・しめすへん・ねへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="用" class="sett"><span class="bold">用</span><span class="normal">もちいる</span></a></li>
                        <li><a href="javascript:void(0)" data-value="皿" class="sett"><span class="bold">皿</span><span class="normal">さら</span></a></li>
                        <li><a href="javascript:void(0)" data-value="癶" class="sett"><span class="bold">癶</span><span class="normal">はつがしら</span></a></li>
                        <li><a href="javascript:void(0)" data-value="皮" class="sett"><span class="bold">皮</span><span class="normal">けがわ・ひのかわ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="疒" class="sett"><span class="bold">疒</span><span class="normal">やまいだれ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="玄" class="sett"><span class="bold">玄</span><span class="normal">げん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="疋" class="sett"><span class="bold">疋</span><span class="normal">ひき・ひきへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="甘" class="sett"><span class="bold">甘</span><span class="normal">あまい・かん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="矛" class="sett"><span class="bold">矛</span><span class="normal">ほこ・ほこへん・むのほこ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="无" class="sett"><span class="bold">无 旡</span><span class="normal">む・むにょう・ぶ・なし・すでのつくり</span></a>
                        </li>
                        <li><a href="javascript:void(0)" data-value="瓦" class="sett"><span class="bold">瓦</span><span class="normal">かわら</span></a></li>
                        <li><a href="javascript:void(0)" data-value="禸" class="sett"><span class="bold">禸</span><span class="normal">ぐうのあし・じゅう・じゅうのあし</span></a></li>
                        <li><a href="javascript:void(0)" data-value="衣" class="sett"><span class="bold">衣 衤</span><span class="normal">ころも・ころもへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="网" class="sett"><span class="bold">网 罒 㓁</span><span class="normal">あみがしら・あみめ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="瓜" class="sett"><span class="bold">瓜</span><span class="normal">うり</span></a></li>
                    </ul>
                    <h2 class="ttl_sub" id="parts06"><span class="orange">６画</span></h2>
                    <ul class="cat_list">
                        <li><a href="javascript:void(0)" data-value="艸" class="sett"><span class="bold">艸 艹</span><span class="normal">くさ・くさかんむり・そうこう</span></a></li>
                        <li><a href="javascript:void(0)" data-value="糸" class="sett"><span class="bold">糸</span><span class="normal">いと・いとへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="耳" class="sett"><span class="bold">耳</span><span class="normal">みみ・みみへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="竹" class="sett"><span class="bold">竹</span><span class="normal">たけ・たけかんむり</span></a></li>
                        <li><a href="javascript:void(0)" data-value="虫" class="sett"><span class="bold">虫</span><span class="normal">むし・むしへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="羽" class="sett"><span class="bold">羽 羽</span><span class="normal">はね</span></a></li>
                        <li><a href="javascript:void(0)" data-value="老" class="sett"><span class="bold">老 耂</span><span class="normal">おいかんむり・おいがしら・おい</span></a>
                        </li>
                        <li><a href="javascript:void(0)" data-value="行" class="sett"><span class="bold">行</span><span class="normal">ぎょう・ぎょうがまえ・ゆきがまえ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="自" class="sett"><span class="bold">自</span><span class="normal">みずから</span></a></li>
                        <li><a href="javascript:void(0)" data-value="色" class="sett"><span class="bold">色</span><span class="normal">いろ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="襾" class="sett"><span class="bold">襾 西 覀</span><span class="normal">おおいかんむり・にし・かなめのかしら</span></a></li>
                        <li><a href="javascript:void(0)" data-value="舟" class="sett"><span class="bold">舟</span><span class="normal">ふね・ふねへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="肉" class="sett"><span class="bold">肉 月</span><span class="normal">にく・にくづき</span></a></li>
                        <li><a href="javascript:void(0)" data-value="米" class="sett"><span class="bold">米</span><span class="normal">こめ・こめへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="血" class="sett"><span class="bold">血</span><span class="normal">ち・ちへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="羊" class="sett"><span class="bold">羊 ⺷</span><span class="normal">ひつじ・ひつじへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="衣" class="sett"><span class="bold">衣 衤</span><span class="normal">ころも・ころもへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="网" class="sett"><span class="bold">网 罒 㓁</span><span class="normal">あみがしら・あみめ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="艮" class="sett"><span class="bold">艮</span><span class="normal">うしとら・こん・こんづくり・ねづくり</span></a>
                        </li>
                        <li><a href="javascript:void(0)" data-value="耒" class="sett"><span class="bold">耒</span><span class="normal">らいすき・すきへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="臼" class="sett"><span class="bold">臼</span><span class="normal">うす</span></a></li>
                        <li><a href="javascript:void(0)" data-value="舌" class="sett"><span class="bold">舌</span><span class="normal">した・したへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="至" class="sett"><span class="bold">至</span><span class="normal">いたる・いたるへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="而" class="sett"><span class="bold">而</span><span class="normal">しこうして・しかして</span></a></li>
                        <li><a href="javascript:void(0)" data-value="虍" class="sett"><span class="bold">虍</span><span class="normal">とらかんむり・とらがしら・とら</span></a></li>
                        <li><a href="javascript:void(0)" data-value="缶" class="sett"><span class="bold">缶</span><span class="normal">ほとぎ・ほとぎへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="聿" class="sett"><span class="bold">聿</span><span class="normal">ふで・ふでづくり</span></a></li>
                        <li><a href="javascript:void(0)" data-value="瓜" class="sett"><span class="bold">瓜</span><span class="normal">うり</span></a></li>
                        <li><a href="javascript:void(0)" data-value="臣" class="sett"><span class="bold">臣</span><span class="normal">しん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="舛" class="sett"><span class="bold">舛</span><span class="normal">まいあし・ます</span></a></li>
                        <li><a href="javascript:void(0)" data-value="頁" class="sett"><span class="bold">頁</span><span class="normal">おおがい・いちのかい</span></a></li>
                    </ul>
                    <h2 class="ttl_sub" id="parts07"><span class="orange">７画</span></h2>
                    <ul class="cat_list">
                        <li><a href="javascript:void(0)" data-value="辵" class="sett"><span class="bold">辵 辶</span><span class="normal">しんにょう・しんにゅう</span></a></li>
                        <li><a href="javascript:void(0)" data-value="邑" class="sett"><span class="bold">邑 阝</span><span class="normal">おおざと・むら</span></a></li>
                        <li><a href="javascript:void(0)" data-value="臼" class="sett"><span class="bold">臼</span><span class="normal">うす</span></a></li>
                        <li><a href="javascript:void(0)" data-value="貝" class="sett"><span class="bold">貝</span><span class="normal">かい・かいへん・こがい</span></a></li>
                        <li><a href="javascript:void(0)" data-value="見" class="sett"><span class="bold">見</span><span class="normal">みる</span></a></li>
                        <li><a href="javascript:void(0)" data-value="車" class="sett"><span class="bold">車</span><span class="normal">くるま・くるまへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="赤" class="sett"><span class="bold">赤</span><span class="normal">あか・あかへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="足" class="sett"><span class="bold">足</span><span class="normal">あし・あしへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="角" class="sett"><span class="bold">角</span><span class="normal">つの・つのへん・かく</span></a></li>
                        <li><a href="javascript:void(0)" data-value="谷" class="sett"><span class="bold">谷</span><span class="normal">たに・たにへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="走" class="sett"><span class="bold">走</span><span class="normal">はしる・そうにょう</span></a></li>
                        <li><a href="javascript:void(0)" data-value="里" class="sett"><span class="bold">里</span><span class="normal">さと・さとへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="酉" class="sett"><span class="bold">酉</span><span class="normal">ひよみのとり・とりへん・さけのとり・こよみのとり</span></a></li>
                        <li><a href="javascript:void(0)" data-value="身" class="sett"><span class="bold">身</span><span class="normal">み・みへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="豆" class="sett"><span class="bold">豆</span><span class="normal">まめ・まめへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="辰" class="sett"><span class="bold">辰</span><span class="normal">たつ・しんのたつ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="辛" class="sett"><span class="bold">辛</span><span class="normal">しん・からい</span></a></li>
                        <li><a href="javascript:void(0)" data-value="豕" class="sett"><span class="bold">豕</span><span class="normal">いのこ・いのこへん・ぶた</span></a></li>
                        <li><a href="javascript:void(0)" data-value="臣" class="sett"><span class="bold">臣</span><span class="normal">しん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="釆" class="sett"><span class="bold">釆</span><span class="normal">のごめ・のごめへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="舛" class="sett"><span class="bold">舛</span><span class="normal">まいあし・ます</span></a></li>
                        <li><a href="javascript:void(0)" data-value="豸" class="sett"><span class="bold">豸</span><span class="normal">むじな・むじなへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="麥" class="sett"><span class="bold">麥 麦</span><span class="normal">むぎ・むぎへん・ばくにょう</span></a></li>
                    </ul>
                    <h2 class="ttl_sub" id="parts08"><span class="orange">８画</span></h2>
                    <ul class="cat_list">
                        <li><a href="javascript:void(0)" data-value="阜 阝" class="sett"><span class="bold">阜 阝</span><span class="normal">こざと・こざとへん・おか</span></a></li>
                        <li><a href="javascript:void(0)" data-value="雨" class="sett"><span class="bold">雨</span><span class="normal">あめ・あめかんむり・あまかんむり</span></a></li>
                        <li><a href="javascript:void(0)" data-value="金 釒" class="sett"><span class="bold">金 釒</span><span class="normal">かね・かねへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="靑 青" class="sett"><span class="bold">靑 青</span><span class="normal">あお・あおへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="門" class="sett"><span class="bold">門</span><span class="normal">もん・もんがまえ・かどがまえ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="長" class="sett"><span class="bold">長</span><span class="normal">ながい</span></a></li>
                        <li><a href="javascript:void(0)" data-value="隹" class="sett"><span class="bold">隹</span><span class="normal">ふるとり</span></a></li>
                        <li><a href="javascript:void(0)" data-value="非" class="sett"><span class="bold">非</span><span class="normal">あらず・ひ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="隶" class="sett"><span class="bold">隶</span><span class="normal">たい・れいづくり</span></a></li>
                        <li><a href="javascript:void(0)" data-value="齊 斉" class="sett"><span class="bold">齊 斉</span><span class="normal">せい</span></a></li>
                        <li><a href="javascript:void(0)" data-value="食 飠" class="sett"><span class="bold">食 飠</span><span class="normal">しょく・しょくへん</span></a></li>
                    </ul>
                    <h2 class="ttl_sub" id="parts09"><span class="orange">９画</span></h2>
                    <ul class="cat_list">
                        <li><a href="javascript:void(0)" data-value="音" class="sett"><span class="bold">音</span><span class="normal">おと・おとへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="頁" class="sett"><span class="bold">頁</span><span class="normal">おおがい・いちのかい</span></a></li>
                        <li><a href="javascript:void(0)" data-value="首" class="sett"><span class="bold">首</span><span class="normal">くび</span></a></li>
                        <li><a href="javascript:void(0)" data-value="食 飠" class="sett"><span class="bold">食 飠</span><span class="normal">しょく・しょくへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="風" class="sett"><span class="bold">風</span><span class="normal">かぜ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="面" class="sett"><span class="bold">面</span><span class="normal">めん・おもて</span></a></li>
                        <li><a href="javascript:void(0)" data-value="飛" class="sett"><span class="bold">飛</span><span class="normal">とぶ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="革" class="sett"><span class="bold">革</span><span class="normal">かわへん・かくのかわ・つくりがわ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="香" class="sett"><span class="bold">香</span><span class="normal">かおり・か</span></a></li>
                        <li><a href="javascript:void(0)" data-value="韭" class="sett"><span class="bold">韭</span><span class="normal">にら</span></a></li>
                        <li><a href="javascript:void(0)" data-value="韋" class="sett"><span class="bold">韋</span><span class="normal">なめしがわ</span></a></li>
                    </ul>
                    <h2 class="ttl_sub" id="parts10"><span class="orange">１０画</span></h2>
                    <ul class="cat_list">
                        <li><a href="javascript:void(0)" data-value="高" class="sett"><span class="bold">高</span><span class="normal">たかい</span></a></li>
                        <li><a href="javascript:void(0)" data-value="馬" class="sett"><span class="bold">馬</span><span class="normal">うま・うまへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="骨" class="sett"><span class="bold">骨</span><span class="normal">ほね・ほねへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="鬼" class="sett"><span class="bold">鬼</span><span class="normal">おに・きにょう</span></a></li>
                        <li><a href="javascript:void(0)" data-value="髟" class="sett"><span class="bold">髟</span><span class="normal">かみがしら・かみかんむり</span></a></li>
                        <li><a href="javascript:void(0)" data-value="鬯" class="sett"><span class="bold">鬯</span><span class="normal">ちょう・においざけ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="韋" class="sett"><span class="bold">韋</span><span class="normal">なめしがわ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="鬥" class="sett"><span class="bold">鬥</span><span class="normal">とうがまえ・たたかいがまえ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="鬲" class="sett"><span class="bold">鬲</span><span class="normal">かなえ・れき</span></a></li>
                        <li><a href="javascript:void(0)" data-value="龍" class="sett"><span class="bold">龍 竜</span><span class="normal">りゅう・たつ</span></a></li>
                    </ul>
                    <h2 class="ttl_sub" id="parts11"><span class="orange">１１画</span></h2>
                    <ul class="cat_list">
                        <li><a href="javascript:void(0)" data-value="魚" class="sett"><span class="bold">魚</span><span class="normal">うお・うおへん・さかなへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="黃" class="sett"><span class="bold">黃 黄</span><span class="normal">き・きいろ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="黑" class="sett"><span class="bold">黑 黒</span><span class="normal">くろ・くろへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="鳥" class="sett"><span class="bold">鳥</span><span class="normal">とり・とりへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="麥" class="sett"><span class="bold">麥 麦</span><span class="normal">むぎ・むぎへん・ばくにょう</span></a></li>
                        <li><a href="javascript:void(0)" data-value="鹿" class="sett"><span class="bold">鹿</span><span class="normal">しか・しかへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="麻" class="sett"><span class="bold">麻</span><span class="normal">あさ・あさかんむり</span></a></li>
                        <li><a href="javascript:void(0)" data-value="鹵" class="sett"><span class="bold">鹵</span><span class="normal">ろ・しお・しおへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="龜" class="sett"><span class="bold">龜 亀</span><span class="normal">かめ</span></a></li>
                    </ul>
                    <h2 class="ttl_sub" id="parts12"><span class="orange">１２画</span></h2>
                    <ul class="cat_list">
                        <li><a href="javascript:void(0)" data-value="黃 黄" class="sett"><span class="bold">黃 黄</span><span class="normal">き・きいろ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="黑 黒" class="sett"><span class="bold">黑 黒</span><span class="normal">くろ・くろへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="齒 歯" class="sett"><span class="bold">齒 歯</span><span class="normal">は・はへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="黍" class="sett"><span class="bold">黍</span><span class="normal">きび</span></a></li>
                        <li><a href="javascript:void(0)" data-value="黹" class="sett"><span class="bold">黹</span><span class="normal">ち・ぬいとり・ふつへん</span></a></li>
                    </ul>
                    <h2 class="ttl_sub" id="parts13"><span class="orange">１３画</span></h2>
                    <ul class="cat_list">
                        <li><a href="javascript:void(0)" data-value="鼓" class="sett"><span class="bold">鼓</span><span class="normal">つづみ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="鼠" class="sett"><span class="bold">鼠</span><span class="normal">ねずみ・ねずみへん</span></a></li>
                        <li><a href="javascript:void(0)" data-value="鼎" class="sett"><span class="bold">鼎</span><span class="normal">かなえ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="黽" class="sett"><span class="bold">黽</span><span class="normal">べん・かえるべんあし</span></a></li>
                    </ul>
                    <h2 class="ttl_sub" id="parts14"><span class="orange">１４画</span></h2>
                    <ul class="cat_list">
                        <li><a href="javascript:void(0)" data-value="齊" class="sett"><span class="bold">齊 斉</span><span class="normal">せい</span></a></li>
                        <li><a href="javascript:void(0)" data-value="鼻" class="sett"><span class="bold">鼻</span><span class="normal">はな・はなへん</span></a></li>
                    </ul>
                    <h2 class="ttl_sub" id="parts15"><span class="orange">１５画</span></h2>
                    <ul class="cat_list">
                        <li><a href="javascript:void(0)" data-value="齒" class="sett"><span class="bold">齒 歯</span><span class="normal">は・はへん</span></a></li>
                    </ul>
                    <h2 class="ttl_sub" id="parts16"><span class="orange">１６画</span></h2>
                    <ul class="cat_list">
                        <li><a href="javascript:void(0)" data-value="龍 竜" class="sett"><span class="bold">龍 竜</span><span class="normal">りゅう・たつ</span></a></li>
                        <li><a href="javascript:void(0)" data-value="龜 亀" class="sett"><span class="bold">龜 亀</span><span class="normal">かめ</span></a></li>
                    </ul>
                    <h2 class="ttl_sub" id="parts17"><span class="orange">１７画</span></h2>
                    <ul class="cat_list">
                        <li><a href="javascript:void(0)" data-value="龠" class="sett"><span class="bold">龠</span><span class="normal">やく・やくのふえ</span></a></li>
                    </ul>
                </div>
                <!--data_cont-->
            </div>
            <!--bushu_list-->
        </div>
        <!--content-->
        <?php get_template_part( 'part' ); ?>
    </div>
    <!--wrapper-->
    <!-- <div class="page_top"><a href="#"><img src="../../jitenon.jp/images/top.png" alt="ページ先頭に戻る"></a></div> -->

</div>
<!--all-->



<script>
        jQuery(document).ready(function($) {
            $('.sett').click(function(e) {
                e.preventDefault();
                var formData = new FormData();
                var side_input = $('#head_how').val();
                var input = $(this).attr('data-value');
                formData.append('side_val', side_input);
                formData.append('input_val', input);
                formData.append('search', 'contain');
                formData.append('action', "seach_data_retun");
                $.ajax({
                        url: '<?= admin_url('admin-ajax.php') ?>',
                        method: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                    })
                    .done(function(data) {
                        window.location.href = data;
                        //console.log(data);
                    })
                    .fail(function(data) {
                        console.log('error', data);
                    })
                    .always(function(data) {

                    });


        });
        });
    </script>
<?php wp_footer() ?>