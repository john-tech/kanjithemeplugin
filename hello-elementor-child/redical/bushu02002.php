<?php
/*
 * Template Name: bushu02002
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
  
  </div></div>
  </header><style>
          .bushu_about_box {
    display: none;
}
div#sidebar {
    display: none;
}
     </style>
  
          <div id="wrapper" class="cf">
               <div id="content">
                    <h1 class="ttl_main">部首：人部（ひと・にんべん・ひとがしら・ひとやね）の漢字</h1>

                    <div class="bushu_about">
                         <div class="bushu_about_box">
                              <h2>人部とは？</h2>
                              <p><strong>人部（じんぶ）は、<span class="marker">人の状態・性質・行為などに関する字</span>が多く属します。</strong></p>
                              <p>「人」は「ひと」、偏になった形「亻」を「にんべん」、冠（かんむり）になった形を「ひとがしら」「ひとやね」と呼びます。</p>
                         </div>
                    </div>
                    <div class="parts_data">
                         <div class="search_narrowdown">
                              <script>
                                   (function () {
                                        var html = document.getElementsByTagName('html') || [];
                                        html[0].classList.add('enable-javascript');
                                   })();
                              </script>
                              <div class="narrowdown_select">
                                   <select name="select" onChange="location.href=value;" class="select1">
                                        <option value="bushu08003">靑 青（あお・あおへん）</option>
                                        <option value="bushu07004">赤（あか・あかへん）</option>
                                        <option value="bushu04010">欠（あくび）</option>
                                        <option value="bushu11007">麻（あさ・あさかんむり）</option>
                                        <option value="bushu07005">足（あし・あしへん）</option>
                                        <option value="bushu05002">穴（あな・あなかんむり）</option>
                                        <option value="bushu05019">甘（あまい）</option>
                                        <option value="bushu08001">雨（あまかんむり）</option>
                                        <option value="bushu06018">网 罒 㓁（あみがしら・あみめ）</option>
                                        <option value="bushu08001">雨（あめ・あめかんむり）</option>
                                        <option value="bushu08007">非（あらず）</option>
                                        <option value="bushu05003">生（いきる）</option>
                                        <option value="bushu05004">石（いし・いしへん）</option>
                                        <option value="bushu06023">至（いたる・いたるへん）</option>
                                        <option value="bushu01001">一（いち）</option>
                                        <option value="bushu03013">干（いちじゅう）</option>
                                        <option value="bushu04022">歹 歺（いちたへん）</option>
                                        <option value="bushu09002">頁（いちのかい）</option>
                                        <option value="bushu06002">糸（いと）</option>
                                        <option value="bushu03033">幺（いとがしら）</option>
                                        <option value="bushu06002">糸（いとへん）</option>
                                        <option value="bushu04003">犬 犭（いぬ）</option>
                                        <option value="bushu07016">豕（いのこ）</option>
                                        <option value="bushu03035">彑 彐（いのこがしら）</option>
                                        <option value="bushu07016">豕（いのこへん）</option>
                                        <option value="bushu02007">入（いりがしら・いりやね・いる）</option>
                                        <option value="bushu06010">色（いろ）</option>
                                        <option value="bushu04014">曰（いわく）</option>
                                        <option value="bushu03028">廴（いんにょう）</option>
                                        <option value="bushu11001">魚（うお・うおへん）</option>
                                        <option value="bushu03016">宀（うかんむり）</option>
                                        <option value="bushu02005">凵（うけばこ）</option>
                                        <option value="bushu04011">牛 牜（うし）</option>
                                        <option value="bushu06019">艮（うしとら）</option>
                                        <option value="bushu04011">牛 牜（うしへん）</option>
                                        <option value="bushu04024">氏（うじ）</option>
                                        <option value="bushu06021">臼（うす）</option>
                                        <option value="bushu10002">馬（うま・うまへん）</option>
                                        <option value="bushu05003">生（うまれる）</option>
                                        <option value="bushu02022">卜（うらない）</option>
                                        <option value="bushu06028">瓜（うり）</option>
                                        <option value="bushu03004">工（え）</option>
                                        <option value="bushu04027">支（えだにょう）</option>
                                        <option value="bushu02001">冂（えんがまえ）</option>
                                        <option value="bushu03028">廴（えんにょう）</option>
                                        <option value="bushu06007">老 耂（おい・おいかんむり・おいがしら）</option>
                                        <option value="bushu03032">尢 尣（おうにょう）</option>
                                        <option value="bushu05001">玉 王 ⺩（おうへん）</option>
                                        <option value="bushu06011">襾 西 覀（おおいかんむり）</option>
                                        <option value="bushu09002">頁（おおがい）</option>
                                        <option value="bushu03027">邑 阝（おおざと）</option>
                                        <option value="bushu03024">阜 阝（おか）</option>
                                        <option value="bushu01002">乙 乚（おつ・おつにょう）</option>
                                        <option value="bushu09001">音（おと・おとへん）</option>
                                        <option value="bushu10004">鬼（おに）</option>
                                        <option value="bushu04015">斤（おの・おのづくり）</option>
                                        <option value="bushu03031">己 巳 已（おのれ）</option>
                                        <option value="bushu09006">面（おもて）</option>
                                        <option value="bushu03007">女（おんな・おんなへん）</option>
                                        <option value="bushu09009">香（か）</option>
                                        <option value="bushu07001">貝（かい・かいへん）</option>
                                        <option value="bushu13004">黽（かえるべんあし）</option>
                                        <option value="bushu09009">香（かおり）</option>
                                        <option value="bushu01005">亅（かぎ）</option>
                                        <option value="bushu07006">角（かく）</option>
                                        <option value="bushu02016">匸（かくしがまえ）</option>
                                        <option value="bushu09008">革（かくのかわ）</option>
                                        <option value="bushu04010">欠（かける）</option>
                                        <option value="bushu02021">几（かざがまえ）</option>
                                        <option value="bushu09005">風（かぜ）</option>
                                        <option value="bushu02021">几（かぜかんむり・かぜがまえ）</option>
                                        <option value="bushu04028">片（かた）</option>
                                        <option value="bushu02012">刀 刂（かたな）</option>
                                        <option value="bushu04020">方（かたへん）</option>
                                        <option value="bushu04028">片（かたへん）</option>
                                        <option value="bushu08004">門（かどがまえ）</option>
                                        <option value="bushu10009">鬲（かなえ）</option>
                                        <option value="bushu13003">鼎（かなえ）</option>
                                        <option value="bushu06011">襾 西 覀（かなめのかしら）</option>
                                        <option value="bushu08002">金 釒（かね・かねへん）</option>
                                        <option value="bushu04025">戈（かのほこ）</option>
                                        <option value="bushu03025">尸（かばね・かばねだれ）</option>
                                        <option value="bushu04022">歹 歺（かばねへん）</option>
                                        <option value="bushu10005">髟（かみかんむり・かみがしら）</option>
                                        <option value="bushu16002">龜 亀（かめ）</option>
                                        <option value="bushu07015">辛（からい）</option>
                                        <option value="bushu03010">巛 川（かわ）</option>
                                        <option value="bushu09008">革（かわへん）</option>
                                        <option value="bushu05022">瓦（かわら）</option>
                                        <option value="bushu03013">干（かん）</option>
                                        <option value="bushu05019">甘（かん）</option>
                                        <option value="bushu02005">凵（かんがまえ・かんにょう）</option>
                                        <option value="bushu04022">歹 歺（がつ・がつへん）</option>
                                        <option value="bushu02011">厂（がんだれ）</option>
                                        <option value="bushu04004">木（き）</option>
                                        <option value="bushu11002">黃 黄（き・きいろ）</option>
                                        <option value="bushu04002">气（きがまえ）</option>
                                        <option value="bushu02021">几（きにょう）</option>
                                        <option value="bushu10004">鬼（きにょう）</option>
                                        <option value="bushu04031">牙（きば・きばへん）</option>
                                        <option value="bushu12002">黍（きび）</option>
                                        <option value="bushu04004">木（きへん）</option>
                                        <option value="bushu04015">斤（きん）</option>
                                        <option value="bushu03019">巾（きんべん）</option>
                                        <option value="bushu06008">行（ぎょう・ぎょうがまえ）</option>
                                        <option value="bushu03021">彳（ぎょうにんべん）</option>
                                        <option value="bushu06001">艸 艹（くさ・くさかんむり）</option>
                                        <option value="bushu03034">屮（くさのめ）</option>
                                        <option value="bushu03003">口（くち・くちへん）</option>
                                        <option value="bushu03006">囗（くにがまえ）</option>
                                        <option value="bushu09003">首（くび）</option>
                                        <option value="bushu04029">比（くらべる）</option>
                                        <option value="bushu07003">車（くるま・くるまへん）</option>
                                        <option value="bushu11003">黑 黒（くろ・くろへん）</option>
                                        <option value="bushu05023">禸（ぐうのあし）</option>
                                        <option value="bushu04021">毛（け）</option>
                                        <option value="bushu03035">彑 彐（けいがしら）</option>
                                        <option value="bushu02001">冂（けいがまえ）</option>
                                        <option value="bushu02010">亠（けいさんかんむり）</option>
                                        <option value="bushu05015">皮（けがわ）</option>
                                        <option value="bushu04003">犬 犭（けものへん）</option>
                                        <option value="bushu04010">欠（けんづくり）</option>
                                        <option value="bushu05017">玄（げん）</option>
                                        <option value="bushu07007">言 訁（げん）</option>
                                        <option value="bushu03001">子（こ）</option>
                                        <option value="bushu03004">工（こう）</option>
                                        <option value="bushu04032">爻（こう）</option>
                                        <option value="bushu07001">貝（こがい）</option>
                                        <option value="bushu04016">心 忄（こころ）</option>
                                        <option value="bushu03024">阜 阝（こざと・こざとへん）</option>
                                        <option value="bushu07007">言 訁（ことば）</option>
                                        <option value="bushu03001">子（こども・こどもへん・こへん）</option>
                                        <option value="bushu03030">廾（こまぬき）</option>
                                        <option value="bushu06014">米（こめ・こめへん）</option>
                                        <option value="bushu07011">酉（こよみのとり）</option>
                                        <option value="bushu06017">衣 衤（ころも・ころもへん）</option>
                                        <option value="bushu06019">艮（こん・こんづくり）</option>
                                        <option value="bushu07007">言 訁（ごんべん）</option>
                                        <option value="bushu11001">魚（さかなへん）</option>
                                        <option value="bushu07011">酉（さけのとり）</option>
                                        <option value="bushu02014">匕（さじ・さじのひ）</option>
                                        <option value="bushu07010">里（さと・さとへん）</option>
                                        <option value="bushu03002">士（さむらい）</option>
                                        <option value="bushu05013">皿（さら）</option>
                                        <option value="bushu04007">水 氵 氺（さんずい）</option>
                                        <option value="bushu03020">彡（さんづくり）</option>
                                        <option value="bushu04027">支（し）</option>
                                        <option value="bushu11008">鹵（しお・しおへん）</option>
                                        <option value="bushu11006">鹿（しか）</option>
                                        <option value="bushu06024">而（しかして）</option>
                                        <option value="bushu03025">尸（しかばね・しかばねかんむり・しかばねだれ）</option>
                                        <option value="bushu11006">鹿（しかへん）</option>
                                        <option value="bushu03026">弋（しきがまえ）</option>
                                        <option value="bushu06024">而（しこうして）</option>
                                        <option value="bushu06022">舌（した）</option>
                                        <option value="bushu04016">心 忄（したごころ）</option>
                                        <option value="bushu06022">舌（したへん）</option>
                                        <option value="bushu04007">水 氵 氺（したみず）</option>
                                        <option value="bushu04027">支（しにょう）</option>
                                        <option value="bushu05011">示 礻（しめす・しめすへん）</option>
                                        <option value="bushu03008">小（しょう・しょうがしら）</option>
                                        <option value="bushu04033">爿（しょうへん）</option>
                                        <option value="bushu09004">食 飠（しょく・しょくへん）</option>
                                        <option value="bushu05006">白（しろ・しろへん）</option>
                                        <option value="bushu07015">辛（しん）</option>
                                        <option value="bushu07017">臣（しん）</option>
                                        <option value="bushu03015">辵 辶（しんにゅう・しんにょう）</option>
                                        <option value="bushu07014">辰（しんのたつ）</option>
                                        <option value="bushu02004">十（じゅう）</option>
                                        <option value="bushu05023">禸（じゅう・じゅうのあし）</option>
                                        <option value="bushu04027">支（じゅうまた）</option>
                                        <option value="bushu03017">夂 夊（すいにょう）</option>
                                        <option value="bushu06020">耒（すきへん）</option>
                                        <option value="bushu05021">无 旡（すでのつくり）</option>
                                        <option value="bushu03023">寸（すん・すんづくり）</option>
                                        <option value="bushu08009">齊 斉（せい）</option>
                                        <option value="bushu06001">艸 艹（そうこう）</option>
                                        <option value="bushu04030">爪 爫（そうにょう）</option>
                                        <option value="bushu07009">走（そうにょう）</option>
                                        <option value="bushu03009">夕（た）</option>
                                        <option value="bushu05005">田（た）</option>
                                        <option value="bushu08008">隶（たい）</option>
                                        <option value="bushu10001">高（たかい）</option>
                                        <option value="bushu03004">工（たくみ・たくみへん）</option>
                                        <option value="bushu06004">竹（たけ・たけかんむり）</option>
                                        <option value="bushu10008">鬥（たたかいがまえ）</option>
                                        <option value="bushu05008">立（たつ）</option>
                                        <option value="bushu07014">辰（たつ）</option>
                                        <option value="bushu16001">龍 竜（たつ）</option>
                                        <option value="bushu05008">立（たつへん）</option>
                                        <option value="bushu01003">丨（たてぼう）</option>
                                        <option value="bushu07008">谷（たに・たにへん）</option>
                                        <option value="bushu05005">田（たへん）</option>
                                        <option value="bushu05001">玉 王 ⺩（たま・たまへん）</option>
                                        <option value="bushu03011">大（だい）</option>
                                        <option value="bushu03032">尢 尣（だいのまげあし）</option>
                                        <option value="bushu03017">夂 夊（ち）</option>
                                        <option value="bushu06015">血（ち）</option>
                                        <option value="bushu12003">黹（ち）</option>
                                        <option value="bushu02009">力（ちから）</option>
                                        <option value="bushu04018">父（ちち）</option>
                                        <option value="bushu06015">血（ちへん）</option>
                                        <option value="bushu10006">鬯（ちょう）</option>
                                        <option value="bushu01004">丶（ちょぼ）</option>
                                        <option value="bushu03029">⺍（つ・つかんむり）</option>
                                        <option value="bushu04017">月（つき・つきへん）</option>
                                        <option value="bushu02021">几（つくえ）</option>
                                        <option value="bushu09008">革（つくりがわ）</option>
                                        <option value="bushu03012">土（つち・つちへん）</option>
                                        <option value="bushu02020">勹（つつみがまえ）</option>
                                        <option value="bushu13001">鼓（つづみ）</option>
                                        <option value="bushu07006">角（つの・つのへん）</option>
                                        <option value="bushu04030">爪 爫（つめ・つめかんむり・つめがしら）</option>
                                        <option value="bushu01002">乙 乚（つりばり）</option>
                                        <option value="bushu04005">手 扌（て）</option>
                                        <option value="bushu03034">屮（てつ）</option>
                                        <option value="bushu04005">手 扌（てへん）</option>
                                        <option value="bushu01004">丶（てん）</option>
                                        <option value="bushu02022">卜（と）</option>
                                        <option value="bushu04013">戶 戸（と）</option>
                                        <option value="bushu04026">斗（と）</option>
                                        <option value="bushu10008">鬥（とうがまえ）</option>
                                        <option value="bushu04013">戶 戸（とかんむり・とだれ・とびらのと）</option>
                                        <option value="bushu09007">飛（とぶ）</option>
                                        <option value="bushu04026">斗（とます）</option>
                                        <option value="bushu04012">攴 攵（とまた）</option>
                                        <option value="bushu04006">止（とめへん・とめる）</option>
                                        <option value="bushu06025">虍（とら・とらかんむり・とらがしら）</option>
                                        <option value="bushu11004">鳥（とり）</option>
                                        <option value="bushu07011">酉（とりへん）</option>
                                        <option value="bushu11004">鳥（とりへん）</option>
                                        <option value="bushu02001">冂（どうがまえ）</option>
                                        <option value="bushu03012">土（どへん）</option>
                                        <option value="bushu03008">小（なおがしら）</option>
                                        <option value="bushu04019">毋 母（なかれ）</option>
                                        <option value="bushu08005">長（ながい）</option>
                                        <option value="bushu05021">无 旡（なし）</option>
                                        <option value="bushu03017">夂 夊（なつあし）</option>
                                        <option value="bushu02010">亠（なべぶた）</option>
                                        <option value="bushu10007">韋（なめしがわ）</option>
                                        <option value="bushu04029">比（ならびひ）</option>
                                        <option value="bushu02003">二（に）</option>
                                        <option value="bushu10006">鬯（においざけ）</option>
                                        <option value="bushu06013">肉 月（にく・にくづき）</option>
                                        <option value="bushu06011">襾 西 覀（にし）</option>
                                        <option value="bushu03030">廾（にじゅうあし）</option>
                                        <option value="bushu02013">冫（にすい）</option>
                                        <option value="bushu04008">日（にち・にちへん）</option>
                                        <option value="bushu02007">入（にゅう）</option>
                                        <option value="bushu09010">韭（にら）</option>
                                        <option value="bushu02006">儿（にんにょう）</option>
                                        <option value="#" selected>人 亻（にんべん）</option>
                                        <option value="bushu12003">黹（ぬいとり）</option>
                                        <option value="bushu13002">鼠（ねずみ・ねずみへん）</option>
                                        <option value="bushu06019">艮（ねづくり）</option>
                                        <option value="bushu05011">示 礻（ねへん）</option>
                                        <option value="bushu01006">丿（の）</option>
                                        <option value="bushu05009">禾（のぎ・のぎへん）</option>
                                        <option value="bushu07018">釆（のごめ・のごめへん）</option>
                                        <option value="bushu04030">爪 爫（のつ）</option>
                                        <option value="bushu04012">攴 攵（のぶん）</option>
                                        <option value="bushu02008">八（は）</option>
                                        <option value="bushu12001">齒 歯（は）</option>
                                        <option value="bushu02023">匚（はこがまえ）</option>
                                        <option value="bushu07009">走（はしる）</option>
                                        <option value="bushu02008">八（はち・はちがしら）</option>
                                        <option value="bushu05014">癶（はつがしら）</option>
                                        <option value="bushu14001">鼻（はな・はなへん）</option>
                                        <option value="bushu06006">羽 羽（はね）</option>
                                        <option value="bushu01005">亅（はねぼう）</option>
                                        <option value="bushu04019">毋 母（はは・ははのかん）</option>
                                        <option value="bushu03019">巾（はば・はばへん）</option>
                                        <option value="bushu12001">齒 歯（はへん）</option>
                                        <option value="bushu01006">丿（はらいぼう）</option>
                                        <option value="bushu11005">麥 麦（ばくにょう）</option>
                                        <option value="bushu02014">匕（ひ）</option>
                                        <option value="bushu04001">火 灬（ひ）</option>
                                        <option value="bushu04008">日（ひ）</option>
                                        <option value="bushu08007">非（ひ）</option>
                                        <option value="bushu05018">疋（ひき・ひきへん）</option>
                                        <option value="bushu06016">羊 ⺷（ひつじ・ひつじへん）</option>
                                        <option value="#" selected>人 亻（ひと）</option>
                                        <option value="bushu02006">儿（ひとあし）</option>
                                        <option value="#" selected>人 亻（ひとがしら・ひとやね）</option>
                                        <option value="bushu05015">皮（ひのかわ）</option>
                                        <option value="bushu04001">火 灬（ひへん）</option>
                                        <option value="bushu04008">日（ひへん）</option>
                                        <option value="bushu07011">酉（ひよみのとり）</option>
                                        <option value="bushu02018">冖（ひらかんむり）</option>
                                        <option value="bushu04014">曰（ひらび）</option>
                                        <option value="bushu02019">卩 㔾（ふしづくり）</option>
                                        <option value="bushu12003">黹（ふつへん）</option>
                                        <option value="bushu06027">聿（ふで・ふでづくり）</option>
                                        <option value="bushu06012">舟（ふね・ふねへん）</option>
                                        <option value="bushu03017">夂 夊（ふゆがしら）</option>
                                        <option value="bushu08006">隹（ふるとり）</option>
                                        <option value="bushu05021">无 旡（ぶ）</option>
                                        <option value="bushu07016">豕（ぶた）</option>
                                        <option value="bushu04009">文（ぶん・ぶんにょう）</option>
                                        <option value="bushu02018">冖（べきかんむり）</option>
                                        <option value="bushu13004">黽（べん）</option>
                                        <option value="bushu04020">方（ほう・ほうへん）</option>
                                        <option value="bushu04025">戈（ほこ）</option>
                                        <option value="bushu05020">矛（ほこ）</option>
                                        <option value="bushu04025">戈（ほこがまえ）</option>
                                        <option value="bushu04023">殳（ほこづくり）</option>
                                        <option value="bushu04025">戈（ほこづくり）</option>
                                        <option value="bushu05020">矛（ほこへん）</option>
                                        <option value="bushu03013">干（ほす）</option>
                                        <option value="bushu06026">缶（ほとぎ・ほとぎへん）</option>
                                        <option value="bushu10003">骨（ほね・ほねへん）</option>
                                        <option value="bushu01003">丨（ぼう）</option>
                                        <option value="bushu02022">卜（ぼく）</option>
                                        <option value="bushu04012">攴 攵（ぼくづくり・ぼくにょう）</option>
                                        <option value="bushu02022">卜（ぼくのと）</option>
                                        <option value="bushu07019">舛（まいあし）</option>
                                        <option value="bushu03010">巛 川（まがりがわ）</option>
                                        <option value="bushu02001">冂（まきがまえ）</option>
                                        <option value="bushu03032">尢 尣（まげあし）</option>
                                        <option value="bushu03010">巛 川（まげかわ）</option>
                                        <option value="bushu04032">爻（まじわる）</option>
                                        <option value="bushu07019">舛（ます）</option>
                                        <option value="bushu02015">又（また）</option>
                                        <option value="bushu03022">广（まだれ）</option>
                                        <option value="bushu07013">豆（まめ・まめへん）</option>
                                        <option value="bushu07012">身（み）</option>
                                        <option value="bushu04007">水 氵 氺（みず）</option>
                                        <option value="bushu06009">自（みずから）</option>
                                        <option value="bushu07012">身（みへん）</option>
                                        <option value="bushu06003">耳（みみ・みみへん）</option>
                                        <option value="bushu07002">見（みる）</option>
                                        <option value="bushu02017">厶（む）</option>
                                        <option value="bushu05021">无 旡（む）</option>
                                        <option value="bushu11005">麥 麦（むぎ・むぎへん）</option>
                                        <option value="bushu06005">虫（むし・むしへん）</option>
                                        <option value="bushu07020">豸（むじな・むじなへん）</option>
                                        <option value="bushu05021">无 旡（むにょう）</option>
                                        <option value="bushu05020">矛（むのほこ）</option>
                                        <option value="bushu03027">邑 阝（むら）</option>
                                        <option value="bushu05007">目 罒（め）</option>
                                        <option value="bushu03034">屮（めばえ）</option>
                                        <option value="bushu05007">目 罒（めへん）</option>
                                        <option value="bushu04032">爻（めめ）</option>
                                        <option value="bushu09006">面（めん）</option>
                                        <option value="bushu05012">用（もちいる）</option>
                                        <option value="bushu08004">門（もん・もんがまえ）</option>
                                        <option value="bushu05010">矢（や）</option>
                                        <option value="bushu17001">龠（やく・やくのふえ）</option>
                                        <option value="bushu05010">矢（やへん）</option>
                                        <option value="bushu03005">山（やま）</option>
                                        <option value="bushu05016">疒（やまいだれ）</option>
                                        <option value="bushu03005">山（やまかんむり・やまへん）</option>
                                        <option value="bushu03009">夕（ゆう・ゆうべ）</option>
                                        <option value="bushu06008">行（ゆきがまえ）</option>
                                        <option value="bushu03014">弓（ゆみ・ゆみへん）</option>
                                        <option value="bushu03033">幺（よう）</option>
                                        <option value="bushu03026">弋（よく）</option>
                                        <option value="bushu06020">耒（らいすき）</option>
                                        <option value="bushu04016">心 忄（りっしんべん）</option>
                                        <option value="bushu02012">刀 刂（りっとう）</option>
                                        <option value="bushu16001">龍 竜（りゅう）</option>
                                        <option value="bushu04023">殳（るまた）</option>
                                        <option value="bushu08008">隶（れいづくり）</option>
                                        <option value="bushu10009">鬲（れき）</option>
                                        <option value="bushu04001">火 灬（れっか・れんが）</option>
                                        <option value="bushu11008">鹵（ろ）</option>
                                        <option value="bushu02018">冖（わかんむり）</option>
                                        <option value="bushu02019">卩 㔾（わりふ）</option>
                                   </select>
                              </div>
                         </div><!--search_narrowdown-->
                         <div class="search_data bushu_menu">
                              <ul class="search_menu">
                                   <li>画数順</li>
                                   <li><a href="bbushu02002">漢検級順</a></li>
                                   <li><a href="cbushu02002">読み順</a></li>
                              </ul>
                              <ul class="search_menu2">
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
                                   <li><a href="#parts18">18画</a></li>
                                   <li><a href="#parts19">19画</a></li>
                                   <li><a href="#parts20">20画</a></li>
                                   <li><a href="#parts21">21画</a></li>
                                   <li><a href="#parts22">22画</a></li>
                                   <li><a href="#parts23">23画</a></li>
                                   <li><a href="#parts24">24画</a></li>
                                   <li><a href="#parts27">27画</a></li>
                              </ul>
                         </div><!--search_data-->
                        
                         <h2 class="left_border">部首：人部（ひと・にんべん・ひとがしら・ひとやね）の漢字一覧</h2>
                         <div class="bushu_wrap">
                              <div class="color_info">
                                   <ul>
                                        <li><span>常用漢字の背景色＝</span><span class="color1"></span></li>
                                        <li><span>人名用漢字の背景色＝</span><span class="color2"></span></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts02">
                                   <h3 class="ttl_while"><a href="kakusu02">２画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/12362">亻</a></li>
                                        <li><a href="kanjiy/27758">𠆢</a></li>
                                        <li><a class="color1" href="kanji/041">人</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts03">
                                   <h3 class="ttl_while"><a href="kakusu03">３画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/24554">亽</a></li>
                                        <li><a href="kanjiy/24556">亿</a></li>
                                        <li><a href="6719">亾</a></li>
                                        <li><a href="kanjiy/12363">亼</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts04">
                                   <h3 class="ttl_while"><a href="kakusu04">４画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="2296">仇</a></li>
                                        <li><a href="2523">什</a></li>
                                        <li><a href="3065">仍</a></li>
                                        <li><a href="3066">仄</a></li>
                                        <li><a href="3067">仆</a></li>
                                        <li><a href="3068">仂</a></li>
                                        <li><a href="kanjiy/24557">仑</a></li>
                                        <li><a href="kanjiy/24558">仒</a></li>
                                        <li><a href="kanjiy/24559">仓</a></li>
                                        <li><a href="5740">从</a></li>
                                        <li><a href="kanjiy/12364">仐</a></li>
                                        <li><a href="kanjiy/12365">仃</a></li>
                                        <li><a href="kanjiy/12366">仈</a></li>
                                        <li><a href="kanjiy/12367">仅</a></li>
                                        <li><a class="color1" href="kanji/113">今</a></li>
                                        <li><a class="color1" href="kanji/284">化</a></li>
                                        <li><a href="kanjiy/12709">仌</a></li>
                                        <li><a href="kanjiy/13036">仉</a></li>
                                        <li><a class="color1" href="803">仏</a></li>
                                        <li><a class="color1" href="915">仁</a></li>
                                        <li><a class="color1" href="1031">介</a>
                                        </li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts05">
                                   <h3 class="ttl_while"><a href="kakusu05">５画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="1784">仙</a>
                                        </li>
                                        <li><a href="kanjiy/14336">尒</a></li>
                                        <li><a href="kanjiy/18677">㐰</a></li>
                                        <li><a href="kanjiy/18678">㐲</a></li>
                                        <li><a href="kanjiy/18679">㐳</a></li>
                                        <li><a href="kanjiy/18680">㐴</a></li>
                                        <li><a href="kanjiy/18681">㐶</a></li>
                                        <li><a class="color2" href="2461">仔</a>
                                        </li>
                                        <li><a href="3069">仗</a></li>
                                        <li><a href="3070">仞</a></li>
                                        <li><a href="3071">仭</a></li>
                                        <li><a href="3072">仟</a></li>
                                        <li><a href="kanjiy/24204">㚢</a></li>
                                        <li><a href="kanjiy/24560">仦</a></li>
                                        <li><a href="kanjiy/24561">仩</a></li>
                                        <li><a href="kanjiy/26383">㐵</a></li>
                                        <li><a href="kanjiy/12369">仠</a></li>
                                        <li><a href="kanjiy/12370">仡</a></li>
                                        <li><a href="kanjiy/12371">仚</a></li>
                                        <li><a href="kanjiy/12372">仨</a></li>
                                        <li><a href="kanjiy/12373">㐱</a></li>
                                        <li><a href="kanjiy/12374">仛</a></li>
                                        <li><a href="kanjiy/12376">仝</a></li>
                                        <li><a href="kanjiy/12377">仜</a></li>
                                        <li><a href="kanjiy/12378">仢</a></li>
                                        <li><a href="kanjiy/12379">仫</a></li>
                                        <li><a class="color1" href="kanji/305">仕</a></li>
                                        <li><a class="color1" href="kanji/353">他</a></li>
                                        <li><a class="color1" href="kanji/355">代</a></li>
                                        <li><a class="color1" href="kanji/442">以</a></li>
                                        <li><a href="kanjiy/13037">仧</a></li>
                                        <li><a class="color1" href="598">付</a></li>
                                        <li><a class="color1" href="632">令</a></li>
                                   </ul>
                              </div>
                         
                              <div class="parts_box" id="parts06">
                                   <h3 class="ttl_while"><a href="kakusu06">６画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="1357">企</a>
                                        </li>
                                        <li><a class="color1" href="1530">伐</a>
                                        </li>
                                        <li><a class="color1" href="1545">伏</a>
                                        </li>
                                        <li><a class="color1" href="1974">伎</a>
                                        </li>
                                        <li><a class="color2" href="2148">伊</a>
                                        </li>
                                        <li><a href="kanjiy/18682">㐸</a></li>
                                        <li><a href="kanjiy/18683">㐹</a></li>
                                        <li><a href="kanjiy/18684">㐺</a></li>
                                        <li><a href="kanjiy/18685">㐻</a></li>
                                        <li><a href="kanjiy/18686">㐼</a></li>
                                        <li><a class="color2" href="2386">伍</a>
                                        </li>
                                        <li><a href="3073">价</a></li>
                                        <li><a href="3074">伉</a></li>
                                        <li><a href="3107">伜</a></li>
                                        <li><a href="kanjiy/24563">伞</a></li>
                                        <li><a href="kanjiy/24565">伢</a></li>
                                        <li><a href="kanjiy/24566">伤</a></li>
                                        <li><a href="kanjiy/24567">伦</a></li>
                                        <li><a href="kanjiy/24568">伧</a></li>
                                        <li><a href="kanjiy/24569">伩</a></li>
                                        <li><a href="kanjiy/24571">伫</a></li>
                                        <li><a href="kanjiy/24572">伬</a></li>
                                        <li><a href="kanjiy/26384">㐾</a></li>
                                        <li><a href="kanjiy/26387">㐿</a></li>
                                        <li><a href="kanjiy/26388">㑀</a></li>
                                        <li><a class="color1" href="kanji/010">休</a></li>
                                        <li><a href="kanjiy/12380">伌</a></li>
                                        <li><a class="color1" href="kanji/092">会</a></li>
                                        <li><a href="kanjiy/12381">伇</a></li>
                                        <li><a href="kanjiy/12382">伙</a></li>
                                        <li><a href="kanjiy/12383">伋</a></li>
                                        <li><a href="kanjiy/12384">仱</a></li>
                                        <li><a href="kanjiy/12385">伒</a></li>
                                        <li><a href="kanjiy/12386">众</a></li>
                                        <li><a href="kanjiy/12387">仵</a></li>
                                        <li><a href="kanjiy/12388">伀</a></li>
                                        <li><a href="kanjiy/12389">伈</a></li>
                                        <li><a href="kanjiy/12390">仯</a></li>
                                        <li><a href="kanjiy/12392">伅</a></li>
                                        <li><a href="kanjiy/12401">仳</a></li>
                                        <li><a href="kanjiy/12402">份</a></li>
                                        <li><a href="kanjiy/12403">伕</a></li>
                                        <li><a href="kanjiy/12404">仿</a></li>
                                        <li><a href="kanjiy/12405">伃</a></li>
                                        <li><a class="color1" href="568">仲</a></li>
                                        <li><a href="kanjiy/13038">仴</a></li>
                                        <li><a class="color1" href="577">伝</a></li>
                                        <li><a href="kanjiy/13039">仸</a></li>
                                        <li><a href="kanjiy/13040">仹</a></li>
                                        <li><a href="kanjiy/13041">仺</a></li>
                                        <li><a href="kanjiy/13042">仼</a></li>
                                        <li><a href="kanjiy/13043">伂</a></li>
                                        <li><a href="kanjiy/12420">仾</a></li>
                                        <li><a href="kanjiy/13044">伄</a></li>
                                        <li><a href="kanjiy/13045">伆</a></li>
                                        <li><a class="color1" href="658">仮</a></li>
                                        <li><a href="kanjiy/13046">伓</a></li>
                                        <li><a class="color1" href="689">件</a></li>
                                        <li><a href="kanjiy/13047">伔</a></li>
                                        <li><a href="kanjiy/13048">伖</a></li>
                                        <li><a href="kanjiy/13049">优</a></li>
                                        <li><a href="kanjiy/13050">伛</a></li>
                                        <li><a href="kanjiy/13051">伨</a></li>
                                        <li><a class="color1" href="783">任</a></li>
                                        <li><a class="color1" href="1072">仰</a>
                                        </li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts07">
                                   <h3 class="ttl_while"><a href="kakusu07">７画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/12459">㑄</a></li>
                                        <li><a class="color1" href="1453">伸</a>
                                        </li>
                                        <li><a class="color1" href="1532">伴</a>
                                        </li>
                                        <li><a class="color1" href="1696">佐</a>
                                        </li>
                                        <li><a class="color1" href="1809">但</a>
                                        </li>
                                        <li><a class="color1" href="1859">伯</a>
                                        </li>
                                        <li><a class="color2" href="2166">佑</a>
                                        </li>
                                        <li><a class="color2" href="2203">伽</a>
                                        </li>
                                        <li><a href="kanjiy/18687">㑃</a></li>
                                        <li><a href="kanjiy/18688">㑅</a></li>
                                        <li><a href="kanjiy/18689">㑆</a></li>
                                        <li><a class="color2" href="2766">佃</a>
                                        </li>
                                        <li><a class="color2" href="2997">伶</a>
                                        </li>
                                        <li><a href="3075">佚</a></li>
                                        <li><a href="3076">估</a></li>
                                        <li><a href="3077">佝</a></li>
                                        <li><a href="3078">佗</a></li>
                                        <li><a href="3079">佇</a></li>
                                        <li><a href="3080">佞</a></li>
                                        <li><a href="kanjiy/24184">㑁</a></li>
                                        <li><a href="kanjiy/24185">㑂</a></li>
                                        <li><a href="kanjiy/24574">佦</a></li>
                                        <li><a href="kanjiy/24575">佧</a></li>
                                        <li><a class="color2" href="5741">佛</a>
                                        </li>
                                        <li><a href="kanjiy/26390">㑇</a></li>
                                        <li><a href="11788">伷</a></li>
                                        <li><a class="color1" href="kanji/087">何</a></li>
                                        <li><a class="color1" href="kanji/141">作</a></li>
                                        <li><a class="color1" href="kanji/182">体</a></li>
                                        <li><a class="color1" href="kanji/326">住</a></li>
                                        <li><a class="color1" href="kanji/443">位</a></li>
                                        <li><a href="kanjiy/12406">佒</a></li>
                                        <li><a href="kanjiy/12407">佉</a></li>
                                        <li><a href="kanjiy/12408">佀</a></li>
                                        <li><a href="kanjiy/12409">伲</a></li>
                                        <li><a href="kanjiy/12410">伱</a></li>
                                        <li><a href="kanjiy/12412">你</a></li>
                                        <li><a class="color1" href="573">低</a></li>
                                        <li><a href="kanjiy/12413">佘</a></li>
                                        <li><a href="kanjiy/12414">伹</a></li>
                                        <li><a href="kanjiy/12415">佋</a></li>
                                        <li><a href="kanjiy/12416">佂</a></li>
                                        <li><a href="kanjiy/12417">伳</a></li>
                                        <li><a href="kanjiy/12419">佁</a></li>
                                        <li><a href="kanjiy/12421">佔</a></li>
                                        <li><a href="kanjiy/12422">伮</a></li>
                                        <li><a href="kanjiy/12423">佟</a></li>
                                        <li><a href="kanjiy/12424">伾</a></li>
                                        <li><a class="color1" href="723">似</a></li>
                                        <li><a href="kanjiy/12425">佖</a></li>
                                        <li><a href="kanjiy/12426">佈</a></li>
                                        <li><a href="kanjiy/12427">伻</a></li>
                                        <li><a href="kanjiy/12428">佤</a></li>
                                        <li><a href="kanjiy/13052">伭</a></li>
                                        <li><a href="kanjiy/13053">伿</a></li>
                                        <li><a href="kanjiy/13054">佄</a></li>
                                        <li><a href="kanjiy/13055">佅</a></li>
                                        <li><a href="kanjiy/13056">佊</a></li>
                                        <li><a href="kanjiy/13057">佡</a></li>
                                        <li><a class="color1" href="817">余</a></li>
                                        <li><a href="kanjiy/13058">佢</a></li>
                                        <li><a href="kanjiy/13059">佣</a></li>
                                        <li><a href="kanjiy/13060">佨</a></li>
                                        <li><a href="kanjiy/12441">伵</a></li>
                                        <li><a class="color1" href="1113">伺</a>
                                        </li>
                                   </ul>
                              </div>
                         
                              <div class="parts_box" id="parts08">
                                   <h3 class="ttl_while"><a href="kakusu08">８画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="1333">佳</a>
                                        </li>
                                        <li><a href="kanjiy/12454">侟</a></li>
                                        <li><a href="kanjiy/12455">侂</a></li>
                                        <li><a href="kanjiy/12456">侜</a></li>
                                        <li><a href="kanjiy/12457">侙</a></li>
                                        <li><a href="kanjiy/12458">侗</a></li>
                                        <li><a class="color1" href="1426">侍</a>
                                        </li>
                                        <li><a href="kanjiy/12461">侔</a></li>
                                        <li><a href="kanjiy/12462">佬</a></li>
                                        <li><a href="kanjiy/12463">侓</a></li>
                                        <li><a class="color1" href="1878">侮</a>
                                        </li>
                                        <li><a class="color1" href="1885">併</a>
                                        </li>
                                        <li><a class="color2" href="2249">侃</a>
                                        </li>
                                        <li><a href="2312">侠</a></li>
                                        <li><a href="kanjiy/18690">㑉</a></li>
                                        <li><a href="kanjiy/18691">㑋</a></li>
                                        <li><a href="2392">佼</a></li>
                                        <li><a href="kanjiy/18692">㑍</a></li>
                                        <li><a href="kanjiy/18693">㑎</a></li>
                                        <li><a href="kanjiy/18694">㑐</a></li>
                                        <li><a href="kanjiy/18695">㑑</a></li>
                                        <li><a href="kanjiy/18696">㑓</a></li>
                                        <li><a href="3081">佶</a></li>
                                        <li><a href="3082">侈</a></li>
                                        <li><a href="3083">侏</a></li>
                                        <li><a href="3084">侘</a></li>
                                        <li><a href="3085">佻</a></li>
                                        <li><a href="3086">佩</a></li>
                                        <li><a href="3087">佰</a></li>
                                        <li><a class="color2" href="3088">侑</a>
                                        </li>
                                        <li><a href="3089">佯</a></li>
                                        <li><a href="3090">侖</a></li>
                                        <li><a href="kanjiy/12546">㑒</a></li>
                                        <li><a href="kanjiy/23803">侪</a></li>
                                        <li><a href="kanjiy/24576">侢</a></li>
                                        <li><a href="kanjiy/24577">侣</a></li>
                                        <li><a href="kanjiy/24579">侨</a></li>
                                        <li><a href="kanjiy/24580">侬</a></li>
                                        <li><a class="color2" href="5661">來</a>
                                        </li>
                                        <li><a href="6072">侭</a></li>
                                        <li><a href="6161">侫</a></li>
                                        <li><a href="kanjiy/26392">㑏</a></li>
                                        <li><a href="kanjiy/26393">㑕</a></li>
                                        <li><a href="kanjiy/26394">㑖</a></li>
                                        <li><a href="7937">侌</a></li>
                                        <li><a href="kanjiy/12628">侩</a></li>
                                        <li><a href="11550">侎</a></li>
                                        <li><a href="kanjiy/27750">𠈓</a></li>
                                        <li><a class="color1" href="kanji/306">使</a></li>
                                        <li><a class="color1" href="kanji/415">命</a></li>
                                        <li><a class="color1" href="634">例</a></li>
                                        <li><a class="color1" href="654">価</a></li>
                                        <li><a class="color1" href="727">舎</a></li>
                                        <li><a href="kanjiy/12429">侒</a></li>
                                        <li><a href="kanjiy/12430">侇</a></li>
                                        <li><a href="kanjiy/12431">佾</a></li>
                                        <li><a href="kanjiy/12432">㑊</a></li>
                                        <li><a href="kanjiy/12433">㑌</a></li>
                                        <li><a href="kanjiy/12434">侉</a></li>
                                        <li><a class="color1" href="850">供</a></li>
                                        <li><a href="kanjiy/12435">佪</a></li>
                                        <li><a href="kanjiy/12436">侅</a></li>
                                        <li><a href="kanjiy/12437">佸</a></li>
                                        <li><a href="kanjiy/13061">佫</a></li>
                                        <li><a href="kanjiy/13062">佱</a></li>
                                        <li><a href="kanjiy/12439">佹</a></li>
                                        <li><a href="kanjiy/13063">佲</a></li>
                                        <li><a href="kanjiy/12440">侐</a></li>
                                        <li><a href="kanjiy/13064">侕</a></li>
                                        <li><a class="color1" href="1005">依</a>
                                        </li>
                                        <li><a href="kanjiy/13065">侤</a></li>
                                        <li><a href="kanjiy/12442">侀</a></li>
                                        <li><a href="kanjiy/12443">侊</a></li>
                                        <li><a href="kanjiy/12444">佷</a></li>
                                        <li><a href="kanjiy/12445">佮</a></li>
                                        <li><a href="kanjiy/12446">佽</a></li>
                                        <li><a href="kanjiy/12447">佌</a></li>
                                        <li><a href="kanjiy/12448">佴</a></li>
                                        <li><a href="kanjiy/12449">侄</a></li>
                                        <li><a href="kanjiy/12450">侚</a></li>
                                        <li><a href="kanjiy/12451">侞</a></li>
                                        <li><a href="kanjiy/12452">侁</a></li>
                                        <li><a href="kanjiy/12453">佺</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts09">
                                   <h3 class="ttl_while"><a href="kakusu09">９画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="1484">促</a>
                                        </li>
                                        <li><a href="kanjiy/12464">俙</a></li>
                                        <li><a href="kanjiy/12465">俅</a></li>
                                        <li><a href="kanjiy/12466">俇</a></li>
                                        <li><a href="kanjiy/12467">侷</a></li>
                                        <li><a href="kanjiy/12468">俁</a></li>
                                        <li><a class="color1" href="1689">侯</a>
                                        </li>
                                        <li><a href="kanjiy/12470">俓</a></li>
                                        <li><a href="kanjiy/12471">俉</a></li>
                                        <li><a href="kanjiy/12473">侾</a></li>
                                        <li><a class="color1" href="1733">俊</a>
                                        </li>
                                        <li><a href="kanjiy/12474">俈</a></li>
                                        <li><a href="kanjiy/12477">俒</a></li>
                                        <li><a href="kanjiy/12478">侳</a></li>
                                        <li><a href="kanjiy/12479">侸</a></li>
                                        <li><a href="kanjiy/12480">俆</a></li>
                                        <li><a href="kanjiy/12481">俏</a></li>
                                        <li><a href="kanjiy/12484">侲</a></li>
                                        <li><a href="kanjiy/12485">㑗</a></li>
                                        <li><a href="kanjiy/12486">俀</a></li>
                                        <li><a href="kanjiy/12487">侻</a></li>
                                        <li><a href="kanjiy/12488">俋</a></li>
                                        <li><a href="kanjiy/12489">侹</a></li>
                                        <li><a href="kanjiy/12490">俖</a></li>
                                        <li><a href="kanjiy/12491">俌</a></li>
                                        <li><a href="kanjiy/12492">俜</a></li>
                                        <li><a href="kanjiy/12493">侼</a></li>
                                        <li><a class="color1" href="2125">侶</a>
                                        </li>
                                        <li><a href="kanjiy/12494">㑞</a></li>
                                        <li><a href="kanjiy/12495">俍</a></li>
                                        <li><a class="color2" href="2216">俄</a>
                                        </li>
                                        <li><a href="kanjiy/12508">俢</a></li>
                                        <li><a href="kanjiy/18697">㑘</a></li>
                                        <li><a href="kanjiy/18698">㑙</a></li>
                                        <li><a href="kanjiy/18699">㑚</a></li>
                                        <li><a href="kanjiy/18700">㑛</a></li>
                                        <li><a class="color2" href="2929">俣</a>
                                        </li>
                                        <li><a href="kanjiy/18701">㑜</a></li>
                                        <li><a href="kanjiy/18702">㑟</a></li>
                                        <li><a href="kanjiy/12527">俫</a></li>
                                        <li><a href="3091">俔</a></li>
                                        <li><a href="3092">俟</a></li>
                                        <li><a href="3093">俎</a></li>
                                        <li><a href="3094">俘</a></li>
                                        <li><a href="3095">俛</a></li>
                                        <li><a href="3096">俑</a></li>
                                        <li><a href="3097">俚</a></li>
                                        <li><a class="color2" href="3098">俐</a>
                                        </li>
                                        <li><a href="3099">俤</a></li>
                                        <li><a href="3100">俥</a></li>
                                        <li><a href="kanjiy/23891">佭</a></li>
                                        <li><a href="kanjiy/23892">侱</a></li>
                                        <li><a href="kanjiy/24582">俧</a></li>
                                        <li><a href="kanjiy/24583">俨</a></li>
                                        <li><a href="kanjiy/24584">俩</a></li>
                                        <li><a href="kanjiy/24585">俪</a></li>
                                        <li><a href="kanjiy/24586">俬</a></li>
                                        <li><a class="color2" href="6373">侮</a>
                                        </li>
                                        <li><a class="color2" href="6430">俠</a>
                                        </li>
                                        <li><a href="6529">俞</a></li>
                                        <li><a href="kanjiy/26395">㑝</a></li>
                                        <li><a href="kanjiy/26398">㑢</a></li>
                                        <li><a href="10298">侽</a></li>
                                        <li><a href="kanjiy/12652">俦</a></li>
                                        <li><a class="color1" href="kanji/286">係</a></li>
                                        <li><a class="color1" href="542">信</a></li>
                                        <li><a class="color1" href="609">便</a></li>
                                        <li><a class="color1" href="806">保</a></li>
                                        <li><a href="kanjiy/13066">侰</a></li>
                                        <li><a href="kanjiy/13067">侴</a></li>
                                        <li><a href="kanjiy/13068">侺</a></li>
                                        <li><a href="kanjiy/13069">俕</a></li>
                                        <li><a class="color1" href="1151">侵</a>
                                        </li>
                                        <li><a class="color1" href="1173">俗</a>
                                        </li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts10">
                                   <h3 class="ttl_while"><a href="kakusu10">１０画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="1389">倹</a>
                                        </li>
                                        <li><a href="kanjiy/12460">倂</a></li>
                                        <li><a class="color1" href="1557">倣</a>
                                        </li>
                                        <li><a href="kanjiy/12469">㑨</a></li>
                                        <li><a class="color1" href="1892">俸</a>
                                        </li>
                                        <li><a class="color1" href="1931">倫</a>
                                        </li>
                                        <li><a class="color1" href="1957">俺</a>
                                        </li>
                                        <li><a class="color2" href="2149">倭</a>
                                        </li>
                                        <li><a href="kanjiy/12496">㑥</a></li>
                                        <li><a href="kanjiy/12497">倇</a></li>
                                        <li><a href="kanjiy/12498">俰</a></li>
                                        <li><a href="kanjiy/12499">倌</a></li>
                                        <li><a href="kanjiy/12500">倝</a></li>
                                        <li><a href="kanjiy/12501">倛</a></li>
                                        <li><a href="kanjiy/12502">倠</a></li>
                                        <li><a href="kanjiy/12503">俽</a></li>
                                        <li><a href="2335">倶</a></li>
                                        <li><a href="kanjiy/12504">倞</a></li>
                                        <li><a class="color2" href="2363">倦</a>
                                        </li>
                                        <li><a href="kanjiy/12505">倄</a></li>
                                        <li><a href="kanjiy/12506">倱</a></li>
                                        <li><a href="kanjiy/12507">倳</a></li>
                                        <li><a class="color2" href="2393">倖</a>
                                        </li>
                                        <li><a href="kanjiy/12509">倘</a></li>
                                        <li><a href="kanjiy/12510">倢</a></li>
                                        <li><a href="kanjiy/12511">倯</a></li>
                                        <li><a href="kanjiy/12512">倕</a></li>
                                        <li><a href="kanjiy/12513">俴</a></li>
                                        <li><a href="kanjiy/12514">倧</a></li>
                                        <li><a href="kanjiy/12515">倓</a></li>
                                        <li><a href="kanjiy/12516">倁</a></li>
                                        <li><a href="kanjiy/12517">俿</a></li>
                                        <li><a href="kanjiy/12518">倀</a></li>
                                        <li><a href="kanjiy/18703">㑣</a></li>
                                        <li><a href="kanjiy/12519">倜</a></li>
                                        <li><a href="kanjiy/18704">㑦</a></li>
                                        <li><a href="kanjiy/12520">倎</a></li>
                                        <li><a href="kanjiy/18705">㑧</a></li>
                                        <li><a href="kanjiy/12521">倲</a></li>
                                        <li><a href="kanjiy/12522">俷</a></li>
                                        <li><a href="kanjiy/12523">倵</a></li>
                                        <li><a href="kanjiy/12524">倗</a></li>
                                        <li><a href="kanjiy/12525">倮</a></li>
                                        <li><a href="kanjiy/12526">倈</a></li>
                                        <li><a href="kanjiy/12528">倰</a></li>
                                        <li><a href="kanjiy/12534">偌</a></li>
                                        <li><a href="kanjiy/12555">倴</a></li>
                                        <li><a href="3101">倚</a></li>
                                        <li><a href="3102">倨</a></li>
                                        <li><a href="3103">倔</a></li>
                                        <li><a href="3104">倪</a></li>
                                        <li><a href="3105">倥</a></li>
                                        <li><a href="3106">倅</a></li>
                                        <li><a href="3108">俶</a></li>
                                        <li><a href="3109">倡</a></li>
                                        <li><a href="3110">倩</a></li>
                                        <li><a href="3111">倬</a></li>
                                        <li><a href="kanjiy/22214">䘮</a></li>
                                        <li><a href="3112">俾</a></li>
                                        <li><a href="3113">俯</a></li>
                                        <li><a href="kanjiy/12569">俲</a></li>
                                        <li><a href="3114">們</a></li>
                                        <li><a href="3115">倆</a></li>
                                        <li><a href="kanjiy/23893">倐</a></li>
                                        <li><a href="kanjiy/24186">㑤</a></li>
                                        <li><a href="kanjiy/12581">俻</a></li>
                                        <li><a href="kanjiy/24589">值</a></li>
                                        <li><a href="kanjiy/24590">倽</a></li>
                                        <li><a class="color2" href="6431">俱</a>
                                        </li>
                                        <li><a href="6635">俼</a></li>
                                        <li><a href="kanjiy/26399">㑫</a></li>
                                        <li><a href="9402">偀</a></li>
                                        <li><a href="kanjiy/26400">㑬</a></li>
                                        <li><a href="kanjiy/26401">㑭</a></li>
                                        <li><a href="kanjiy/12649">㑪</a></li>
                                        <li><a class="color1" href="kanji/388">倍</a></li>
                                        <li><a href="kanjiy/12670">㑩</a></li>
                                        <li><a class="color1" href="kanji/500">候</a></li>
                                        <li><a class="color1" href="528">借</a></li>
                                        <li><a class="color1" href="557">倉</a></li>
                                        <li><a class="color1" href="693">個</a></li>
                                        <li><a class="color1" href="729">修</a></li>
                                        <li><a class="color1" href="794">俵</a></li>
                                        <li><a class="color1" href="944">値</a></li>
                                        <li><a class="color1" href="966">俳</a></li>
                                        <li><a href="kanjiy/13070">俹</a></li>
                                        <li><a href="kanjiy/13071">倃</a></li>
                                        <li><a href="kanjiy/13072">倊</a></li>
                                        <li><a href="kanjiy/13073">倷</a></li>
                                        <li><a href="kanjiy/13074">倸</a></li>
                                        <li><a class="color1" href="1212">倒</a>
                                        </li>
                                        <li><a href="kanjiy/13075">倿</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts11">
                                   <h3 class="ttl_while"><a href="kakusu11">１１画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/13078">偛</a></li>
                                        <li><a href="kanjiy/13079">偞</a></li>
                                        <li><a class="color1" href="1378">偶</a>
                                        </li>
                                        <li><a href="kanjiy/13080">偡</a></li>
                                        <li><a href="kanjiy/13081">偤</a></li>
                                        <li><a href="kanjiy/13083">偮</a></li>
                                        <li><a href="kanjiy/13084">偳</a></li>
                                        <li><a href="kanjiy/13085">偺</a></li>
                                        <li><a href="kanjiy/13086">偼</a></li>
                                        <li><a href="kanjiy/13088">傇</a></li>
                                        <li><a class="color1" href="1650">偽</a>
                                        </li>
                                        <li><a class="color1" href="1831">偵</a>
                                        </li>
                                        <li><a class="color1" href="1887">偏</a>
                                        </li>
                                        <li><a class="color2" href="2462">偲</a>
                                        </li>
                                        <li><a href="kanjiy/18706">㑮</a></li>
                                        <li><a href="kanjiy/18707">㑯</a></li>
                                        <li><a href="kanjiy/18708">㑱</a></li>
                                        <li><a href="kanjiy/12529">偯</a></li>
                                        <li><a href="kanjiy/12530">偊</a></li>
                                        <li><a href="kanjiy/12531">偣</a></li>
                                        <li><a href="kanjiy/12533">偟</a></li>
                                        <li><a href="kanjiy/12535">偢</a></li>
                                        <li><a href="kanjiy/12536">偆</a></li>
                                        <li><a href="kanjiy/12537">偱</a></li>
                                        <li><a href="kanjiy/12538">偦</a></li>
                                        <li><a href="kanjiy/12539">偁</a></li>
                                        <li><a href="kanjiy/12540">偅</a></li>
                                        <li><a href="kanjiy/12541">偗</a></li>
                                        <li><a href="kanjiy/12542">偰</a></li>
                                        <li><a href="kanjiy/12543">偫</a></li>
                                        <li><a href="kanjiy/12545">偧</a></li>
                                        <li><a href="kanjiy/12547">偙</a></li>
                                        <li><a href="kanjiy/12549">偷</a></li>
                                        <li><a href="kanjiy/12550">偒</a></li>
                                        <li><a href="kanjiy/12551">偝</a></li>
                                        <li><a href="kanjiy/12552">偪</a></li>
                                        <li><a href="kanjiy/12553">偩</a></li>
                                        <li><a href="kanjiy/12554">偑</a></li>
                                        <li><a href="kanjiy/12556">偭</a></li>
                                        <li><a href="kanjiy/12557">倻</a></li>
                                        <li><a href="kanjiy/12558">偠</a></li>
                                        <li><a href="kanjiy/12559">偎</a></li>
                                        <li><a href="kanjiy/22758">䣏</a></li>
                                        <li><a href="3116">偃</a></li>
                                        <li><a href="3117">偕</a></li>
                                        <li><a href="3118">偐</a></li>
                                        <li><a href="3119">偈</a></li>
                                        <li><a href="3120">偖</a></li>
                                        <li><a href="3121">偬</a></li>
                                        <li><a href="3122">偸</a></li>
                                        <li><a href="3123">做</a></li>
                                        <li><a href="kanjiy/12580">偹</a></li>
                                        <li><a href="kanjiy/24224">㫦</a></li>
                                        <li><a href="kanjiy/12596">偋</a></li>
                                        <li><a href="kanjiy/12603">偻</a></li>
                                        <li><a href="5662">假</a></li>
                                        <li><a href="kanjiy/24596">偔</a></li>
                                        <li><a href="kanjiy/24597">偿</a></li>
                                        <li><a href="kanjiy/26397">㑡</a></li>
                                        <li><a href="kanjiy/26402">㑰</a></li>
                                        <li><a href="kanjiy/26403">㑲</a></li>
                                        <li><a href="kanjiy/12331">偓</a></li>
                                        <li><a class="color1" href="kanji/497">健</a></li>
                                        <li><a class="color1" href="559">側</a></li>
                                        <li><a href="kanjiy/12764">偂</a></li>
                                        <li><a class="color1" href="572">停</a></li>
                                        <li><a href="kanjiy/12438">偘</a></li>
                                        <li><a href="kanjiy/13076">偄</a></li>
                                        <li><a href="kanjiy/13077">偍</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts12">
                                   <h3 class="ttl_while"><a href="kakusu12">１２画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/13082">偨</a></li>
                                        <li><a href="kanjiy/13087">傂</a></li>
                                        <li><a href="kanjiy/13089">傉</a></li>
                                        <li><a href="kanjiy/13090">傗</a></li>
                                        <li><a href="kanjiy/13091">傝</a></li>
                                        <li><a class="color1" href="1707">傘</a>
                                        </li>
                                        <li><a href="kanjiy/12483">㑴</a></li>
                                        <li><a href="kanjiy/18709">㑳</a></li>
                                        <li><a href="kanjiy/18710">㑵</a></li>
                                        <li><a href="kanjiy/18711">㑶</a></li>
                                        <li><a href="kanjiy/18712">㑷</a></li>
                                        <li><a href="kanjiy/18713">㑸</a></li>
                                        <li><a href="kanjiy/12560">傊</a></li>
                                        <li><a href="kanjiy/12561">傟</a></li>
                                        <li><a href="kanjiy/12562">傢</a></li>
                                        <li><a href="kanjiy/12563">傕</a></li>
                                        <li><a href="kanjiy/12564">傄</a></li>
                                        <li><a href="kanjiy/12566">傒</a></li>
                                        <li><a href="kanjiy/12567">傔</a></li>
                                        <li><a href="kanjiy/12568">傆</a></li>
                                        <li><a href="kanjiy/12570">傐</a></li>
                                        <li><a href="kanjiy/23806">傤</a></li>
                                        <li><a href="kanjiy/12571">傞</a></li>
                                        <li><a href="kanjiy/12572">傓</a></li>
                                        <li><a href="kanjiy/12573">傃</a></li>
                                        <li><a href="kanjiy/12574">傖</a></li>
                                        <li><a href="kanjiy/23894">傋</a></li>
                                        <li><a href="kanjiy/12575">傁</a></li>
                                        <li><a href="kanjiy/12576">傣</a></li>
                                        <li><a href="kanjiy/12577">傏</a></li>
                                        <li><a href="kanjiy/12578">傌</a></li>
                                        <li><a href="kanjiy/12579">僃</a></li>
                                        <li><a href="3124">傀</a></li>
                                        <li><a href="3125">傚</a></li>
                                        <li><a href="3126">傅</a></li>
                                        <li><a href="kanjiy/12582">傜</a></li>
                                        <li><a href="kanjiy/12583">傛</a></li>
                                        <li><a href="kanjiy/12584">傈</a></li>
                                        <li><a href="kanjiy/24599">傦</a></li>
                                        <li><a href="kanjiy/24607">傩</a></li>
                                        <li><a href="6602">傡</a></li>
                                        <li><a href="7417">傎</a></li>
                                        <li><a href="kanjiy/26404">㑹</a></li>
                                        <li><a href="kanjiy/26405">㑺</a></li>
                                        <li><a href="kanjiy/12655">傧</a></li>
                                        <li><a href="kanjiy/12393">傠</a></li>
                                        <li><a href="kanjiy/12671">傥</a></li>
                                        <li><a class="color1" href="793">備</a></li>
                                        <li><a class="color1" href="1007">偉</a>
                                        </li>
                                        <li><a class="color1" href="1273">傍</a>
                                        </li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts13">
                                   <h3 class="ttl_while"><a href="kakusu13">１３画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="1415">催</a>
                                        </li>
                                        <li><a class="color1" href="1416">債</a>
                                        </li>
                                        <li><a class="color1" href="1673">傑</a>
                                        </li>
                                        <li><a href="kanjiy/13092">傮</a></li>
                                        <li><a href="kanjiy/13093">傯</a></li>
                                        <li><a href="kanjiy/13094">傶</a></li>
                                        <li><a href="kanjiy/13095">傸</a></li>
                                        <li><a href="kanjiy/13096">傼</a></li>
                                        <li><a href="kanjiy/13097">僁</a></li>
                                        <li><a href="kanjiy/13098">僆</a></li>
                                        <li><a href="kanjiy/13099">僋</a></li>
                                        <li><a class="color1" href="1981">僅</a>
                                        </li>
                                        <li><a class="color1" href="2002">傲</a>
                                        </li>
                                        <li><a class="color2" href="2952">傭</a>
                                        </li>
                                        <li><a href="kanjiy/18714">㑼</a></li>
                                        <li><a href="kanjiy/18715">㑽</a></li>
                                        <li><a href="kanjiy/18716">㑿</a></li>
                                        <li><a href="kanjiy/18717">㒀</a></li>
                                        <li><a href="kanjiy/18718">㒁</a></li>
                                        <li><a href="kanjiy/12548">僀</a></li>
                                        <li><a href="kanjiy/12565">㑻</a></li>
                                        <li><a href="3127">傴</a></li>
                                        <li><a href="3128">僉</a></li>
                                        <li><a href="3130">僂</a></li>
                                        <li><a href="kanjiy/12586">傿</a></li>
                                        <li><a href="kanjiy/12587">傹</a></li>
                                        <li><a href="kanjiy/12588">傪</a></li>
                                        <li><a href="kanjiy/12589">傱</a></li>
                                        <li><a href="kanjiy/12590">傽</a></li>
                                        <li><a href="kanjiy/12593">傺</a></li>
                                        <li><a href="kanjiy/12594">僄</a></li>
                                        <li><a href="kanjiy/12597">傰</a></li>
                                        <li><a href="kanjiy/12598">僈</a></li>
                                        <li><a href="kanjiy/12599">僌</a></li>
                                        <li><a href="kanjiy/12600">㑾</a></li>
                                        <li><a href="kanjiy/12601">僇</a></li>
                                        <li><a href="kanjiy/12602">傫</a></li>
                                        <li><a href="5757">會</a></li>
                                        <li><a class="color2" href="5803">傳</a>
                                        </li>
                                        <li><a href="kanjiy/12634">傻</a></li>
                                        <li><a href="kanjiy/27776">𠌫</a></li>
                                        <li><a class="color1" href="581">働</a></li>
                                        <li><a class="color1" href="909">傷</a></li>
                                        <li><a class="color1" href="1077">傾</a>
                                        </li>
                                        <li><a class="color1" href="1170">僧</a>
                                        </li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts14">
                                   <h3 class="ttl_while"><a href="kakusu14">１４画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/13100">僗</a></li>
                                        <li><a href="kanjiy/13101">僠</a></li>
                                        <li><a href="kanjiy/13102">僷</a></li>
                                        <li><a class="color1" href="1895">僕</a>
                                        </li>
                                        <li><a class="color1" href="1929">僚</a>
                                        </li>
                                        <li><a href="2313">僑</a></li>
                                        <li><a href="kanjiy/18719">㒂</a></li>
                                        <li><a href="kanjiy/18720">㒃</a></li>
                                        <li><a href="kanjiy/18721">㒄</a></li>
                                        <li><a href="kanjiy/18722">㒅</a></li>
                                        <li><a href="kanjiy/18723">㒆</a></li>
                                        <li><a href="kanjiy/18724">㒇</a></li>
                                        <li><a href="kanjiy/18725">㒈</a></li>
                                        <li><a href="kanjiy/18726">㒉</a></li>
                                        <li><a href="kanjiy/18728">㒋</a></li>
                                        <li><a href="kanjiy/18729">㒌</a></li>
                                        <li><a href="kanjiy/18730">㒎</a></li>
                                        <li><a href="kanjiy/18735">㒖</a></li>
                                        <li><a href="3129">僊</a></li>
                                        <li><a href="kanjiy/12585">僳</a></li>
                                        <li><a href="3131">僖</a></li>
                                        <li><a href="3132">僥</a></li>
                                        <li><a href="3134">僣</a></li>
                                        <li><a href="3135">僮</a></li>
                                        <li><a href="kanjiy/12604">僩</a></li>
                                        <li><a href="kanjiy/12605">僴</a></li>
                                        <li><a href="kanjiy/12606">僛</a></li>
                                        <li><a href="kanjiy/12607">僟</a></li>
                                        <li><a href="kanjiy/12608">僪</a></li>
                                        <li><a href="kanjiy/12609">僒</a></li>
                                        <li><a href="kanjiy/12610">僙</a></li>
                                        <li><a class="color2" href="5804">僞</a>
                                        </li>
                                        <li><a href="kanjiy/12611">僦</a></li>
                                        <li><a href="kanjiy/12613">僘</a></li>
                                        <li><a href="kanjiy/12614">僬</a></li>
                                        <li><a href="kanjiy/12615">僐</a></li>
                                        <li><a href="kanjiy/12616">僎</a></li>
                                        <li><a class="color2" href="6374">僧</a>
                                        </li>
                                        <li><a href="kanjiy/12617">僝</a></li>
                                        <li><a href="kanjiy/12618">僔</a></li>
                                        <li><a href="kanjiy/12619">僓</a></li>
                                        <li><a href="kanjiy/12620">僤</a></li>
                                        <li><a href="kanjiy/12621">僜</a></li>
                                        <li><a href="kanjiy/12622">僰</a></li>
                                        <li><a href="7976">僱</a></li>
                                        <li><a href="10966">僡</a></li>
                                        <li><a href="kanjiy/12631">儆</a></li>
                                        <li><a href="10969">僫</a></li>
                                        <li><a href="kanjiy/26406">㒏</a></li>
                                        <li><a href="kanjiy/26407">㒐</a></li>
                                        <li><a href="kanjiy/12643">僨</a></li>
                                        <li><a href="kanjiy/27777">𠍱</a></li>
                                        <li><a href="kanjiy/27788">𠎁</a></li>
                                        <li><a href="kanjiy/12673">㒍</a></li>
                                        <li><a class="color1" href="761">像</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts15">
                                   <h3 class="ttl_while"><a href="kakusu15">１５画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/13103">僼</a></li>
                                        <li><a href="kanjiy/13104">僽</a></li>
                                        <li><a href="2891">僻</a></li>
                                        <li><a href="kanjiy/18731">㒑</a></li>
                                        <li><a href="kanjiy/18732">㒓</a></li>
                                        <li><a href="kanjiy/18733">㒔</a></li>
                                        <li><a href="kanjiy/18734">㒕</a></li>
                                        <li><a href="kanjiy/18739">㒜</a></li>
                                        <li><a href="kanjiy/12591">僲</a></li>
                                        <li><a href="3136">僵</a></li>
                                        <li><a href="3137">儁</a></li>
                                        <li><a href="3138">儂</a></li>
                                        <li><a href="3141">儚</a></li>
                                        <li><a class="color2" href="5838">價</a>
                                        </li>
                                        <li><a href="kanjiy/12612">僢</a></li>
                                        <li><a class="color2" href="5839">儉</a>
                                        </li>
                                        <li><a href="kanjiy/24608">儊</a></li>
                                        <li><a href="kanjiy/24683">儏</a></li>
                                        <li><a href="kanjiy/12623">㒒</a></li>
                                        <li><a href="kanjiy/12625">僯</a></li>
                                        <li><a href="kanjiy/12626">僾</a></li>
                                        <li><a href="kanjiy/12627">儈</a></li>
                                        <li><a href="kanjiy/12629">儌</a></li>
                                        <li><a href="kanjiy/12630">僸</a></li>
                                        <li><a href="kanjiy/12632">儇</a></li>
                                        <li><a href="kanjiy/12633">儍</a></li>
                                        <li><a href="kanjiy/12635">僿</a></li>
                                        <li><a href="kanjiy/12636">儎</a></li>
                                        <li><a href="kanjiy/12638">僺</a></li>
                                        <li><a href="kanjiy/12639">儃</a></li>
                                        <li><a href="kanjiy/12640">儋</a></li>
                                        <li><a href="kanjiy/12641">儅</a></li>
                                        <li><a href="kanjiy/12642">僶</a></li>
                                        <li><a href="kanjiy/12651">㒗</a></li>
                                        <li><a class="color1" href="kanji/451">億</a></li>
                                        <li><a class="color1" href="1052">儀</a>
                                        </li>
                                        <li><a class="color1" href="1265">舗</a>
                                        </li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts16">
                                   <h3 class="ttl_while"><a href="kakusu16">１６画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="1719">儒</a>
                                        </li>
                                        <li><a href="kanjiy/13107">儫</a></li>
                                        <li><a href="2603">儘</a></li>
                                        <li><a href="kanjiy/18727">㒊</a></li>
                                        <li><a href="kanjiy/18736">㒙</a></li>
                                        <li><a href="kanjiy/18737">㒚</a></li>
                                        <li><a href="kanjiy/18738">㒛</a></li>
                                        <li><a href="kanjiy/18740">㒝</a></li>
                                        <li><a href="3133">僭</a></li>
                                        <li><a href="3139">儕</a></li>
                                        <li><a href="3140">儔</a></li>
                                        <li><a href="kanjiy/26408">㒘</a></li>
                                        <li><a href="kanjiy/12645">儑</a></li>
                                        <li><a href="kanjiy/27778">𠏹</a></li>
                                        <li><a href="kanjiy/12646">儗</a></li>
                                        <li><a href="kanjiy/12647">儝</a></li>
                                        <li><a href="kanjiy/12648">儙</a></li>
                                        <li><a href="kanjiy/12650">儓</a></li>
                                        <li><a href="kanjiy/12653">儜</a></li>
                                        <li><a href="kanjiy/12654">儐</a></li>
                                        <li><a href="kanjiy/12411">儞</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts17">
                                   <h3 class="ttl_while"><a href="kakusu17">１７画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="1746">償</a>
                                        </li>
                                        <li><a href="kanjiy/13105">儠</a></li>
                                        <li><a href="kanjiy/13106">儩</a></li>
                                        <li><a href="kanjiy/13109">儰</a></li>
                                        <li><a href="kanjiy/23895">儥</a></li>
                                        <li><a href="3142">儡</a></li>
                                        <li><a href="5758">儖</a></li>
                                        <li><a href="8305">儨</a></li>
                                        <li><a href="kanjiy/12656">儛</a></li>
                                        <li><a href="kanjiy/12657">儣</a></li>
                                        <li><a href="kanjiy/12658">儬</a></li>
                                        <li><a href="kanjiy/12659">儦</a></li>
                                        <li><a href="kanjiy/12660">儤</a></li>
                                        <li><a href="kanjiy/12661">儢</a></li>
                                        <li><a href="kanjiy/12668">儧</a></li>
                                        <li><a class="color1" href="991">優</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts18">
                                   <h3 class="ttl_while"><a href="kakusu18">１８画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/13108">儮</a></li>
                                        <li><a class="color2" href="2726">儲</a>
                                        </li>
                                        <li><a href="kanjiy/18741">㒟</a></li>
                                        <li><a href="kanjiy/18742">㒠</a></li>
                                        <li><a href="kanjiy/12637">㒞</a></li>
                                        <li><a href="kanjiy/12662">儭</a></li>
                                        <li><a href="kanjiy/12663">儯</a></li>
                                        <li><a href="kanjiy/12664">儱</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts19">
                                   <h3 class="ttl_while"><a href="kakusu19">１９画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/18743">㒡</a></li>
                                        <li><a href="kanjiy/12332">儳</a></li>
                                        <li><a href="kanjiy/26409">㒢</a></li>
                                        <li><a href="kanjiy/26410">㒣</a></li>
                                        <li><a href="kanjiy/27779">𠑊</a></li>
                                        <li><a href="kanjiy/12665">儵</a></li>
                                        <li><a href="kanjiy/12666">儴</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts20">
                                   <h3 class="ttl_while"><a href="kakusu20">２０画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/13110">儶</a></li>
                                        <li><a href="kanjiy/18744">㒤</a></li>
                                        <li><a href="kanjiy/18745">㒥</a></li>
                                        <li><a href="kanjiy/18746">㒦</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts21">
                                   <h3 class="ttl_while"><a href="kakusu21">２１画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/18747">㒧</a></li>
                                        <li><a href="kanjiy/12592">㒨</a></li>
                                        <li><a href="3143">儺</a></li>
                                        <li><a href="3144">儷</a></li>
                                        <li><a href="kanjiy/12667">儹</a></li>
                                        <li><a href="kanjiy/12669">儸</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts22">
                                   <h3 class="ttl_while"><a href="kakusu22">２２画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="3145">儼</a></li>
                                        <li><a href="3146">儻</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts23">
                                   <h3 class="ttl_while"><a href="kakusu23">２３画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/18748">㒩</a></li>
                                        <li><a href="kanjiy/12672">儽</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts24">
                                   <h3 class="ttl_while"><a href="kakusu24">２４画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/12674">儾</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts27">
                                   <h3 class="ttl_while"><a href="kakusu27">２７画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/18749">㒪</a></li>
                                   </ul>
                              </div>
                         </div><!--bushu_wrap-->
                         <a class="top_btn" href="bushu">部首検索TOPに戻る</a>
                   
                    </div><!--parts_data-->
               </div><!--content-->
               <aside>
                    <div id="sidebar" data-nosnippet>

                    
                         <div class="side_bnr link_pc">
                              <a href="#"><img
                                        src="../images/2023_side_bnr.jpg" alt="今年の漢字"></a>
                         </div>
                         <div class="side_bnr link_sp">
                              <a href="#"><img
                                        src="../images/2023_sp_bnr.jpg" alt="今年の漢字"></a>
                         </div>
                         <div class="side_ranking">
                              <script>
                                   $(function () {
                                        var sel_index = localStorage.getItem("sel_Elem2");
                                        if (sel_index == null) { sel_index = 0; }
                                        $('.ChangeElem_Btn2').eq(sel_index).addClass('is-active');
                                        $('.ChangeElem_Panel2').eq(sel_index).show();
                                        $('.ChangeElem_Btn2').each(function () {
                                             $(this).on('click', function () {
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
                                             <li><a href="kanji/059"
                                                       title="漢字「中」のページ"><span class="rank">1</span><span
                                                            class="jp">中</span></a></li>
                                             <li><a href="kanji/190"
                                                       title="漢字「長」のページ"><span class="rank">6</span><span
                                                            class="jp">長</span></a></li>
                                             <li><a href="kanji/136"
                                                       title="漢字「国」のページ"><span class="rank">2</span><span
                                                            class="jp">国</span></a></li>
                                             <li><a href="kanji/252"
                                                       title="漢字「駅」のページ"><span class="rank">7</span><span
                                                            class="jp">駅</span></a></li>
                                             <li><a href="kanji/071"
                                                       title="漢字「本」のページ"><span class="rank">3</span><span
                                                            class="jp">本</span></a></li>
                                             <li><a href="671"
                                                       title="漢字「寄」のページ"><span class="rank">8</span><span
                                                            class="jp">寄</span></a></li>
                                             <li><a href="kanji/086"
                                                       title="漢字「家」のページ"><span class="rank">4</span><span
                                                            class="jp">家</span></a></li>
                                             <li><a href="kanji/114"
                                                       title="漢字「兄」のページ"><span class="rank">9</span><span
                                                            class="jp">兄</span></a></li>
                                             <li><a href="775"
                                                       title="漢字「提」のページ"><span class="rank">5</span><span
                                                            class="jp">提</span></a></li>
                                             <li><a href="kanjiy/12934"
                                                       title="漢字「殺」のページ"><span class="rank">10</span><span
                                                            class="jp">殺</span></a></li>
                                        </ul>
                                   </div><!--ChangeElem_Panel2-->
                                   <div class="ChangeElem_Panel2">
                                        <ul class="side_rank">
                                             <li><a href="kanji/059"
                                                       title="漢字「中」のページ"><span class="rank">1</span><span
                                                            class="jp">中</span></a></li>
                                             <li><a href="kanji/163"
                                                       title="漢字「新」のページ"><span class="rank">6</span><span
                                                            class="jp">新</span></a></li>
                                             <li><a href="kanji/423"
                                                       title="漢字「有」のページ"><span class="rank">2</span><span
                                                            class="jp">有</span></a></li>
                                             <li><a href="602"
                                                       title="漢字「無」のページ"><span class="rank">7</span><span
                                                            class="jp">無</span></a></li>
                                             <li><a href="kanji/071"
                                                       title="漢字「本」のページ"><span class="rank">3</span><span
                                                            class="jp">本</span></a></li>
                                             <li><a href="911"
                                                       title="漢字「将」のページ"><span class="rank">8</span><span
                                                            class="jp">将</span></a></li>
                                             <li><a href="kanji/086"
                                                       title="漢字「家」のページ"><span class="rank">4</span><span
                                                            class="jp">家</span></a></li>
                                             <li><a href="kanji/190"
                                                       title="漢字「長」のページ"><span class="rank">9</span><span
                                                            class="jp">長</span></a></li>
                                             <li><a href="kanji/136"
                                                       title="漢字「国」のページ"><span class="rank">5</span><span
                                                            class="jp">国</span></a></li>
                                             <li><a href="kanji/094"
                                                       title="漢字「海」のページ"><span class="rank">10</span><span
                                                            class="jp">海</span></a></li>
                                        </ul>
                                   </div><!--ChangeElem_Panel2-->
                                   <div class="ChangeElem_Panel2">
                                        <ul class="side_rank">
                                             <li><a href="kanji/059"
                                                       title="漢字「中」のページ"><span class="rank">1</span><span
                                                            class="jp">中</span></a></li>
                                             <li><a href="kanji/086"
                                                       title="漢字「家」のページ"><span class="rank">6</span><span
                                                            class="jp">家</span></a></li>
                                             <li><a href="991"
                                                       title="漢字「優」のページ"><span class="rank">2</span><span
                                                            class="jp">優</span></a></li>
                                             <li><a href="kanji/398"
                                                       title="漢字「美」のページ"><span class="rank">7</span><span
                                                            class="jp">美</span></a></li>
                                             <li><a href="602"
                                                       title="漢字「無」のページ"><span class="rank">3</span><span
                                                            class="jp">無</span></a></li>
                                             <li><a href="kanji/423"
                                                       title="漢字「有」のページ"><span class="rank">8</span><span
                                                            class="jp">有</span></a></li>
                                             <li><a href="kanji/439"
                                                       title="漢字「和」のページ"><span class="rank">4</span><span
                                                            class="jp">和</span></a></li>
                                             <li><a href="kanji/071"
                                                       title="漢字「本」のページ"><span class="rank">9</span><span
                                                            class="jp">本</span></a></li>
                                             <li><a href="kanji/440"
                                                       title="漢字「愛」のページ"><span class="rank">5</span><span
                                                            class="jp">愛</span></a></li>
                                             <li><a href="kanji/027"
                                                       title="漢字「子」のページ"><span class="rank">10</span><span
                                                            class="jp">子</span></a></li>
                                        </ul>
                                   </div><!--ChangeElem_Panel2-->
                              </div>
                         </div>
                         <script>
                              $(function () {
                                   $('.togglemenu').click(function () {
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
                                        <li><a href="">漢字練習帳</a></li>
                                        <li><a href="#kr1">カスタム練習帳</a>
                                        </li>
                                        <li><a
                                                  href="#kr2">漢検級別（学年別）練習帳</a>
                                        </li>
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
                         <!--side_box-->
                    </div><!--sidebar-->
               </aside>
          </div>   <script>
    jQuery(document).ready(function($) { 
  
    $('.search_parts li a').mouseenter(function() { 
        var star = $(this).text(); 
        star2 ="";
        $('.search_parts li a').attr('href','<?php echo home_url(); ?>'+'/detail-three/'+'/?bold='+star+'&normal='+star2);  
        console.log('<?php echo home_url(); ?>'+'/detail-three/'+'/?bold='+star+'&normal='+star2); 
        console.log("bold "+ star); 
    });
        });
</script><?php wp_footer() ?>
