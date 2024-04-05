<?php
/*
 * Template Name: bushu02011
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
  </header>
          <div id="wrapper" class="cf">
               <div id="content">
                    <h1 class="ttl_main">部首：言部（げん・ごんべん・ことば）の漢字</h1>

                    <div class="bushu_about">
                         <div class="bushu_about_box">
                              <h2>言部とは？</h2>
                              <p><strong>言部（げんぶ）は、<span
                                             class="marker">言語、言葉、言葉を使った表現などに関する字</span>が主に属します。</strong>「言」は「げん」「ことば」、偏になった形「訁」を「ごんべん」と呼びます。
                              </p>
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
                                        <option value="#" selected>言 訁（げん）</option>
                                        <option value="bushu03001">子（こ）</option>
                                        <option value="bushu03004">工（こう）</option>
                                        <option value="bushu04032">爻（こう）</option>
                                        <option value="bushu07001">貝（こがい）</option>
                                        <option value="bushu04016">心 忄（こころ）</option>
                                        <option value="bushu03024">阜 阝（こざと・こざとへん）</option>
                                        <option value="#" selected>言 訁（ことば）</option>
                                        <option value="bushu03001">子（こども・こどもへん・こへん）</option>
                                        <option value="bushu03030">廾（こまぬき）</option>
                                        <option value="bushu06014">米（こめ・こめへん）</option>
                                        <option value="bushu07011">酉（こよみのとり）</option>
                                        <option value="bushu06017">衣 衤（ころも・ころもへん）</option>
                                        <option value="bushu06019">艮（こん・こんづくり）</option>
                                        <option value="#" selected>言 訁（ごんべん）</option>
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
                                        <option value="bushu02002">人 亻（にんべん）</option>
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
                                        <option value="bushu02002">人 亻（ひと）</option>
                                        <option value="bushu02006">儿（ひとあし）</option>
                                        <option value="bushu02002">人 亻（ひとがしら・ひとやね）</option>
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
                                   <li><a href="bbushu07007">漢検級順</a></li>
                                   <li><a href="cbushu07007">読み順</a></li>
                              </ul>
                              <ul class="search_menu2">
                                   <li><a href="#parts07">7画</a></li>
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
                                   <li><a href="#parts25">25画</a></li>
                                   <li><a href="#parts26">26画</a></li>
                                   <li><a href="#parts27">27画</a></li>
                                   <li><a href="#parts29">29画</a></li>
                              </ul>
                         </div><!--search_data-->
                        
                         <h2 class="left_border">部首：言部（げん・ごんべん・ことば）の漢字一覧</h2>
                         <div class="bushu_wrap">
                              <div class="color_info">
                                   <ul>
                                        <li><span>常用漢字の背景色＝</span><span class="color1"></span></li>
                                        <li><span>人名用漢字の背景色＝</span><span class="color2"></span></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts07">
                                   <h3 class="ttl_while"><a href="kakusu07">７画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="kanji/119">言</a></li>
                                        <li><a href="23744">訁</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts09">
                                   <h3 class="ttl_while"><a href="kakusu09">９画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="22317">䚮</a></li>
                                        <li><a href="8080">訄</a></li>
                                        <li><a href="8081">訅</a></li>
                                        <li><a href="8082">訆</a></li>
                                        <li><a href="8083">訇</a></li>
                                        <li><a href="8084">䚯</a></li>
                                        <li><a class="color1" href="kanji/117">計</a></li>
                                        <li><a href="24330">䚰</a></li>
                                        <li><a class="color1" href="1512">訂</a>
                                        </li>
                                        <li><a class="color1" href="2096">訃</a>
                                        </li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts10">
                                   <h3 class="ttl_while"><a href="kakusu10">１０画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="4946">訖</a></li>
                                        <li><a href="4947">訌</a></li>
                                        <li><a href="4948">訐</a></li>
                                        <li><a href="22318">䚱</a></li>
                                        <li><a href="22319">䚲</a></li>
                                        <li><a href="8085">訑</a></li>
                                        <li><a href="8086">訔</a></li>
                                        <li><a href="8087">訏</a></li>
                                        <li><a href="8088">訒</a></li>
                                        <li><a href="8089">訕</a></li>
                                        <li><a class="color1" href="kanji/104">記</a></li>
                                        <li><a class="color1" href="kanji/487">訓</a></li>
                                        <li><a class="color1" href="955">討</a></li>
                                        <li><a class="color1" href="1492">託</a>
                                        </li>
                                        <li><a href="17631">訉</a></li>
                                        <li><a href="17632">訋</a></li>
                                        <li><a href="17633">訍</a></li>
                                        <li><a href="17634">訙</a></li>
                                        <li><a class="color2" href="2600">訊</a>
                                        </li>
                                   </ul>
                              </div>
                         
                              <div class="parts_box" id="parts11">
                                   <h3 class="ttl_while"><a href="kakusu11">１１画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="4949">訛</a></li>
                                        <li><a href="4950">訝</a></li>
                                        <li><a href="4951">訥</a></li>
                                        <li><a href="22320">䚳</a></li>
                                        <li><a href="22321">䚴</a></li>
                                        <li><a href="22322">䚵</a></li>
                                        <li><a href="22323">䚶</a></li>
                                        <li><a href="22324">䚷</a></li>
                                        <li><a href="22325">䚸</a></li>
                                        <li><a href="22326">䚹</a></li>
                                        <li><a href="22327">䚺</a></li>
                                        <li><a href="8090">訩</a></li>
                                        <li><a href="22328">䚼</a></li>
                                        <li><a href="22329">䚽</a></li>
                                        <li><a href="8092">訢</a></li>
                                        <li><a href="22330">䚾</a></li>
                                        <li><a href="8093">訤</a></li>
                                        <li><a href="22331">䚿</a></li>
                                        <li><a href="8094">訯</a></li>
                                        <li><a href="22332">䛀</a></li>
                                        <li><a href="8095">訬</a></li>
                                        <li><a href="22333">䛁</a></li>
                                        <li><a href="8096">訠</a></li>
                                        <li><a href="22334">䛂</a></li>
                                        <li><a href="8097">訦</a></li>
                                        <li><a href="22335">䛃</a></li>
                                        <li><a href="8098">訫</a></li>
                                        <li><a href="8099">訧</a></li>
                                        <li><a href="8100">訞</a></li>
                                        <li><a href="8101">䚻</a></li>
                                        <li><a class="color1" href="677">許</a></li>
                                        <li><a class="color1" href="752">設</a></li>
                                        <li><a class="color1" href="980">訪</a></li>
                                        <li><a class="color1" href="990">訳</a></li>
                                        <li><a class="color1" href="1754">訟</a>
                                        </li>
                                        <li><a href="17635">訜</a></li>
                                        <li><a href="17636">訡</a></li>
                                        <li><a href="17637">訨</a></li>
                                        <li><a href="17638">訮</a></li>
                                        <li><a href="17639">訰</a></li>
                                        <li><a class="color2" href="2361">訣</a>
                                        </li>
                                        <li><a href="17640">訲</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts12">
                                   <h3 class="ttl_while"><a href="kakusu12">１２画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color2" href="2725">註</a>
                                        </li>
                                        <li><a href="17648">詚</a></li>
                                        <li><a href="4952">詛</a></li>
                                        <li><a href="4953">詈</a></li>
                                        <li><a href="4954">訶</a></li>
                                        <li><a href="4955">詁</a></li>
                                        <li><a href="4956">詆</a></li>
                                        <li><a href="4957">詒</a></li>
                                        <li><a href="22336">䛄</a></li>
                                        <li><a href="22337">䛅</a></li>
                                        <li><a href="22338">䛆</a></li>
                                        <li><a href="22339">䛇</a></li>
                                        <li><a href="8102">詍</a></li>
                                        <li><a href="22340">䛈</a></li>
                                        <li><a href="8103">詇</a></li>
                                        <li><a href="22341">䛉</a></li>
                                        <li><a href="8104">詎</a></li>
                                        <li><a href="22342">䛊</a></li>
                                        <li><a href="8105">詓</a></li>
                                        <li><a href="22343">䛋</a></li>
                                        <li><a href="8106">詘</a></li>
                                        <li><a href="22344">䛌</a></li>
                                        <li><a href="8107">詗</a></li>
                                        <li><a href="22345">䛍</a></li>
                                        <li><a href="8108">詃</a></li>
                                        <li><a href="22346">䛎</a></li>
                                        <li><a href="8109">訹</a></li>
                                        <li><a href="22347">䛐</a></li>
                                        <li><a href="8110">訷</a></li>
                                        <li><a href="22348">䛑</a></li>
                                        <li><a href="8111">詀</a></li>
                                        <li><a href="22349">䛒</a></li>
                                        <li><a href="8112">訵</a></li>
                                        <li><a href="8113">詝</a></li>
                                        <li><a href="8115">䛏</a></li>
                                        <li><a href="8116">詄</a></li>
                                        <li><a href="8117">詉</a></li>
                                        <li><a href="8118">詜</a></li>
                                        <li><a href="8119">詖</a></li>
                                        <li><a href="8120">詅</a></li>
                                        <li><a href="8126">訽</a></li>
                                        <li><a class="color1" href="734">証</a></li>
                                        <li><a class="color1" href="795">評</a></li>
                                        <li><a class="color1" href="887">詞</a></li>
                                        <li><a class="color1" href="1167">訴</a>
                                        </li>
                                        <li><a class="color1" href="1322">詠</a>
                                        </li>
                                        <li><a class="color1" href="1697">詐</a>
                                        </li>
                                        <li><a class="color1" href="1755">詔</a>
                                        </li>
                                        <li><a class="color1" href="1764">診</a>
                                        </li>
                                        <li><a href="17641">訸</a></li>
                                        <li><a href="17642">詂</a></li>
                                        <li><a href="17643">詊</a></li>
                                        <li><a href="17644">詋</a></li>
                                        <li><a href="17645">詌</a></li>
                                        <li><a href="2681">詑</a></li>
                                        <li><a href="17646">詏</a></li>
                                        <li><a href="17647">詙</a></li>
                                   </ul>
                              </div>
                         
                              <div class="parts_box" id="parts13">
                                   <h3 class="ttl_while"><a href="kakusu13">１３画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="17649">詨</a></li>
                                        <li><a href="17650">詪</a></li>
                                        <li><a href="17651">詯</a></li>
                                        <li><a href="17652">詴</a></li>
                                        <li><a href="17653">詸</a></li>
                                        <li><a href="17654">詽</a></li>
                                        <li><a href="17655">誁</a></li>
                                        <li><a href="17656">誈</a></li>
                                        <li><a href="4958">詭</a></li>
                                        <li><a class="color2" href="4959">詢</a>
                                        </li>
                                        <li><a href="4960">誄</a></li>
                                        <li><a href="4961">詬</a></li>
                                        <li><a href="4962">誅</a></li>
                                        <li><a href="4963">誂</a></li>
                                        <li><a href="4964">詼</a></li>
                                        <li><a href="8091">詾</a></li>
                                        <li><a href="22350">䛔</a></li>
                                        <li><a href="22351">䛖</a></li>
                                        <li><a href="22353">䛘</a></li>
                                        <li><a href="22354">䛙</a></li>
                                        <li><a href="22355">䛚</a></li>
                                        <li><a href="22356">䛛</a></li>
                                        <li><a href="22357">䛜</a></li>
                                        <li><a href="8121">誃</a></li>
                                        <li><a href="8122">詿</a></li>
                                        <li><a href="8123">詻</a></li>
                                        <li><a href="8124">誆</a></li>
                                        <li><a href="8125">詡</a></li>
                                        <li><a href="8127">詥</a></li>
                                        <li><a href="8128">詤</a></li>
                                        <li><a href="8130">詧</a></li>
                                        <li><a href="8131">訾</a></li>
                                        <li><a href="8132">訿</a></li>
                                        <li><a href="8133">誀</a></li>
                                        <li><a href="8134">詶</a></li>
                                        <li><a href="8135">詵</a></li>
                                        <li><a href="8136">詹</a></li>
                                        <li><a href="8137">詷</a></li>
                                        <li><a href="8138">詺</a></li>
                                        <li><a class="color1" href="kanji/239">話</a></li>
                                        <li><a class="color1" href="kanji/304">詩</a></li>
                                        <li><a href="8179">䛕</a></li>
                                        <li><a class="color1" href="521">試</a></li>
                                        <li><a href="26579">誊</a></li>
                                        <li><a class="color1" href="919">誠</a></li>
                                        <li><a class="color1" href="1054">詰</a>
                                        </li>
                                        <li><a class="color1" href="1089">誇</a>
                                        </li>
                                        <li><a class="color1" href="1140">詳</a>
                                        </li>
                                        <li><a class="color1" href="1292">誉</a>
                                        </li>
                                        <li><a class="color1" href="1342">該</a>
                                        </li>
                                        <li><a class="color1" href="1987">詣</a>
                                        </li>
                                        <li><a class="color1" href="2040">詮</a>
                                        </li>
                                        <li><a class="color2" href="2682">詫</a>
                                        </li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts14">
                                   <h3 class="ttl_while"><a href="kakusu14">１４画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="17657">誎</a></li>
                                        <li><a href="17658">誔</a></li>
                                        <li><a href="17659">誛</a></li>
                                        <li><a href="17660">誜</a></li>
                                        <li><a href="17661">誝</a></li>
                                        <li><a href="17662">誢</a></li>
                                        <li><a href="17663">誫</a></li>
                                        <li><a href="4965">誨</a></li>
                                        <li><a href="4966">誡</a></li>
                                        <li><a href="4967">誣</a></li>
                                        <li><a href="4968">誦</a></li>
                                        <li><a href="4969">誚</a></li>
                                        <li><a href="4970">誑</a></li>
                                        <li><a href="4971">誥</a></li>
                                        <li><a href="22352">䛗</a></li>
                                        <li><a href="22358">䛝</a></li>
                                        <li><a href="22359">䛞</a></li>
                                        <li><a href="22360">䛟</a></li>
                                        <li><a href="22361">䛠</a></li>
                                        <li><a href="22362">䛢</a></li>
                                        <li><a href="22363">䛣</a></li>
                                        <li><a href="22364">䛤</a></li>
                                        <li><a href="22365">䛥</a></li>
                                        <li><a href="22366">䛦</a></li>
                                        <li><a href="22367">䛨</a></li>
                                        <li><a href="8139">䛡</a></li>
                                        <li><a href="8140">誐</a></li>
                                        <li><a href="8141">誋</a></li>
                                        <li><a href="8142">誒</a></li>
                                        <li><a href="8143">誩</a></li>
                                        <li><a href="8144">誙</a></li>
                                        <li><a href="8145">誟</a></li>
                                        <li><a href="8146">說</a></li>
                                        <li><a href="8147">誗</a></li>
                                        <li><a href="8148">誖</a></li>
                                        <li><a href="8149">誧</a></li>
                                        <li><a href="8150">誏</a></li>
                                        <li><a href="8169">誮</a></li>
                                        <li><a class="color1" href="kanji/123">語</a></li>
                                        <li><a class="color1" href="kanji/205">読</a></li>
                                        <li><a class="color1" href="551">説</a></li>
                                        <li><a class="color1" href="866">誤</a></li>
                                        <li><a href="27521">䛧</a></li>
                                        <li><a class="color1" href="884">誌</a></li>
                                        <li><a class="color1" href="960">認</a></li>
                                        <li><a class="color1" href="1579">誘</a>
                                        </li>
                                        <li><a class="color1" href="1777">誓</a>
                                        </li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts15">
                                   <h3 class="ttl_while"><a href="kakusu15">１５画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="2854">誹</a></li>
                                        <li><a class="color2" href="2988">諒</a>
                                        </li>
                                        <li><a href="17664">誱</a></li>
                                        <li><a href="17665">誴</a></li>
                                        <li><a href="17666">誵</a></li>
                                        <li><a href="17667">誸</a></li>
                                        <li><a href="17668">誺</a></li>
                                        <li><a href="17669">誽</a></li>
                                        <li><a href="17670">諀</a></li>
                                        <li><a href="17671">諁</a></li>
                                        <li><a href="17672">諅</a></li>
                                        <li><a href="17673">諎</a></li>
                                        <li><a href="17674">諘</a></li>
                                        <li><a href="17675">諙</a></li>
                                        <li><a class="color2" href="4972">諄</a>
                                        </li>
                                        <li><a href="4973">諚</a></li>
                                        <li><a href="4978">諍</a></li>
                                        <li><a href="4979">諂</a></li>
                                        <li><a href="4987">諛</a></li>
                                        <li><a href="22368">䛩</a></li>
                                        <li><a href="22369">䛪</a></li>
                                        <li><a href="22370">䛫</a></li>
                                        <li><a href="22371">䛬</a></li>
                                        <li><a href="22372">䛭</a></li>
                                        <li><a href="22373">䛮</a></li>
                                        <li><a href="22374">䛯</a></li>
                                        <li><a href="22375">䛰</a></li>
                                        <li><a href="22376">䛱</a></li>
                                        <li><a href="22377">䛲</a></li>
                                        <li><a href="22378">䛳</a></li>
                                        <li><a href="22379">䛴</a></li>
                                        <li><a href="22380">䛵</a></li>
                                        <li><a href="22381">䛶</a></li>
                                        <li><a href="22382">䛷</a></li>
                                        <li><a href="8151">諆</a></li>
                                        <li><a href="8153">諊</a></li>
                                        <li><a href="8154">誾</a></li>
                                        <li><a href="8155">誳</a></li>
                                        <li><a href="8156">諕</a></li>
                                        <li><a href="8157">諉</a></li>
                                        <li><a href="8158">諔</a></li>
                                        <li><a href="8159">誯</a></li>
                                        <li><a href="8160">諗</a></li>
                                        <li><a href="8161">誶</a></li>
                                        <li><a href="8162">諓</a></li>
                                        <li><a href="8163">諑</a></li>
                                        <li><a href="8164">諈</a></li>
                                        <li><a href="8165">諃</a></li>
                                        <li><a href="8167">誻</a></li>
                                        <li><a href="8168">誷</a></li>
                                        <li><a class="color1" href="kanji/362">談</a></li>
                                        <li><a class="color1" href="kanji/366">調</a></li>
                                        <li><a class="color1" href="kanji/453">課</a></li>
                                        <li><a href="27520">䛸</a></li>
                                        <li><a class="color1" href="907">諸</a></li>
                                        <li><a class="color1" href="941">誕</a></li>
                                        <li><a class="color1" href="1002">論</a>
                                        </li>
                                        <li><a class="color1" href="1466">請</a>
                                        </li>
                                        <li><a class="color1" href="1495">諾</a>
                                        </li>
                                        <li><a class="color1" href="1611">謁</a>
                                        </li>
                                        <li><a href="10984">諐</a></li>
                                        <li><a class="color1" href="2055">誰</a>
                                        </li>
                                        <li><a href="2265">諌</a></li>
                                        <li><a class="color2" href="2288">誼</a>
                                        </li>
                                        <li><a class="color2" href="2500">諏</a>
                                        </li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts16">
                                   <h3 class="ttl_while"><a href="kakusu16">１６画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="2742">諜</a></li>
                                        <li><a href="17676">諣</a></li>
                                        <li><a href="17677">諥</a></li>
                                        <li><a href="17678">諨</a></li>
                                        <li><a href="17679">諩</a></li>
                                        <li><a href="17680">諪</a></li>
                                        <li><a href="17681">諬</a></li>
                                        <li><a href="17682">諯</a></li>
                                        <li><a href="17683">諲</a></li>
                                        <li><a href="4980">諤</a></li>
                                        <li><a href="17684">諹</a></li>
                                        <li><a href="4981">諠</a></li>
                                        <li><a href="17685">諻</a></li>
                                        <li><a href="4982">諢</a></li>
                                        <li><a href="17686">諽</a></li>
                                        <li><a href="4983">謔</a></li>
                                        <li><a href="4984">諞</a></li>
                                        <li><a href="4985">諳</a></li>
                                        <li><a href="4986">諷</a></li>
                                        <li><a href="4988">諡</a></li>
                                        <li><a class="color2" href="6371">諸</a>
                                        </li>
                                        <li><a class="color2" href="6412">謁</a>
                                        </li>
                                        <li><a href="8129">謊</a></li>
                                        <li><a href="22383">䛹</a></li>
                                        <li><a href="22384">䛺</a></li>
                                        <li><a href="22385">䛻</a></li>
                                        <li><a href="22386">䛼</a></li>
                                        <li><a href="22387">䛽</a></li>
                                        <li><a href="8171">諴</a></li>
                                        <li><a href="8172">諼</a></li>
                                        <li><a href="8173">諟</a></li>
                                        <li><a href="8174">諰</a></li>
                                        <li><a href="8175">諿</a></li>
                                        <li><a href="8176">諝</a></li>
                                        <li><a href="8177">諶</a></li>
                                        <li><a href="8178">諵</a></li>
                                        <li><a href="8184">䜁</a></li>
                                        <li><a href="26580">謃</a></li>
                                        <li><a class="color1" href="1296">謡</a>
                                        </li>
                                        <li><a class="color1" href="1425">諮</a>
                                        </li>
                                        <li><a class="color1" href="1563">謀</a>
                                        </li>
                                        <li><a class="color1" href="1911">諭</a>
                                        </li>
                                        <li><a class="color1" href="1963">諧</a>
                                        </li>
                                        <li><a class="color1" href="2066">諦</a>
                                        </li>
                                        <li><a class="color2" href="2154">謂</a>
                                        </li>
                                        <li><a href="2264">諫</a></li>
                                        <li><a class="color2" href="2373">諺</a>
                                        </li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts17">
                                   <h3 class="ttl_while"><a href="kakusu17">１７画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="3045">謌</a></li>
                                        <li><a href="17687">謈</a></li>
                                        <li><a href="17688">謉</a></li>
                                        <li><a href="17689">謏</a></li>
                                        <li><a href="17690">謒</a></li>
                                        <li><a href="17691">謓</a></li>
                                        <li><a href="17692">謘</a></li>
                                        <li><a href="4989">謚</a></li>
                                        <li><a href="4990">諱</a></li>
                                        <li><a href="4991">謇</a></li>
                                        <li><a href="4992">謐</a></li>
                                        <li><a href="17696">謩</a></li>
                                        <li><a href="4993">謗</a></li>
                                        <li><a href="4994">謖</a></li>
                                        <li><a href="5000">謨</a></li>
                                        <li><a href="5001">譁</a></li>
                                        <li><a class="color2" href="6316">謠</a>
                                        </li>
                                        <li><a href="22388">䛾</a></li>
                                        <li><a href="22389">䛿</a></li>
                                        <li><a href="22390">䜀</a></li>
                                        <li><a href="8180">謍</a></li>
                                        <li><a href="8181">謞</a></li>
                                        <li><a href="8183">謑</a></li>
                                        <li><a href="8185">謜</a></li>
                                        <li><a href="8186">謅</a></li>
                                        <li><a href="8187">謆</a></li>
                                        <li><a href="8188">謕</a></li>
                                        <li><a class="color1" href="697">講</a></li>
                                        <li><a href="8189">謟</a></li>
                                        <li><a href="26582">謢</a></li>
                                        <li><a class="color1" href="726">謝</a></li>
                                        <li><a href="27519">䜂</a></li>
                                        <li><a class="color1" href="1662">謹</a>
                                        </li>
                                        <li><a class="color1" href="1675">謙</a>
                                        </li>
                                        <li><a class="color1" href="1843">謄</a>
                                        </li>
                                        <li><a class="color1" href="2080">謎</a>
                                        </li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts18">
                                   <h3 class="ttl_while"><a href="kakusu18">１８画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="2862">謬</a></li>
                                        <li><a href="17693">謤</a></li>
                                        <li><a href="17694">謥</a></li>
                                        <li><a href="17695">謧</a></li>
                                        <li><a href="17697">謪</a></li>
                                        <li><a href="17698">謮</a></li>
                                        <li><a href="4995">謦</a></li>
                                        <li><a href="17699">謯</a></li>
                                        <li><a href="4996">謾</a></li>
                                        <li><a href="17700">謱</a></li>
                                        <li><a href="4997">鞫</a></li>
                                        <li><a href="17701">謲</a></li>
                                        <li><a href="4998">謳</a></li>
                                        <li><a href="17702">謴</a></li>
                                        <li><a href="4999">謫</a></li>
                                        <li><a href="17703">謵</a></li>
                                        <li><a href="17704">謶</a></li>
                                        <li><a href="17705">謺</a></li>
                                        <li><a href="17706">謻</a></li>
                                        <li><a href="17707">謼</a></li>
                                        <li><a href="17708">謽</a></li>
                                        <li><a href="21617">䌛</a></li>
                                        <li><a class="color2" href="6413">謹</a>
                                        </li>
                                        <li><a href="22391">䜃</a></li>
                                        <li><a href="22392">䜅</a></li>
                                        <li><a href="22393">䜆</a></li>
                                        <li><a href="22394">䜇</a></li>
                                        <li><a href="22395">䜈</a></li>
                                        <li><a href="22396">䜉</a></li>
                                        <li><a href="22397">䜊</a></li>
                                        <li><a href="8182">謋</a></li>
                                        <li><a href="8190">謣</a></li>
                                        <li><a href="8191">謷</a></li>
                                        <li><a href="8192">謸</a></li>
                                        <li><a href="8193">謰</a></li>
                                        <li><a href="8219">謭</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts19">
                                   <h3 class="ttl_while"><a href="kakusu19">１９画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="5002">譌</a></li>
                                        <li><a href="5003">譚</a></li>
                                        <li><a href="5004">譏</a></li>
                                        <li><a href="5005">譎</a></li>
                                        <li><a href="17709">謿</a></li>
                                        <li><a href="17710">譀</a></li>
                                        <li><a href="5007">譛</a></li>
                                        <li><a href="17711">譇</a></li>
                                        <li><a href="17712">譊</a></li>
                                        <li><a href="17713">譐</a></li>
                                        <li><a href="17714">譕</a></li>
                                        <li><a href="17715">譗</a></li>
                                        <li><a href="5699">證</a></li>
                                        <li><a href="22398">䜋</a></li>
                                        <li><a href="22399">䜍</a></li>
                                        <li><a href="22400">䜎</a></li>
                                        <li><a href="22401">䜏</a></li>
                                        <li><a href="22402">䜐</a></li>
                                        <li><a href="22403">䜑</a></li>
                                        <li><a href="22405">䜓</a></li>
                                        <li><a href="22406">䜕</a></li>
                                        <li><a href="24141">譪</a></li>
                                        <li><a href="24331">䜄</a></li>
                                        <li><a href="26242">龻</a></li>
                                        <li><a class="color1" href="724">識</a></li>
                                        <li><a href="8194">譆</a></li>
                                        <li><a class="color1" href="855">警</a></li>
                                        <li><a href="8195">譑</a></li>
                                        <li><a href="8196">譃</a></li>
                                        <li><a href="8197">䜘</a></li>
                                        <li><a href="8198">譓</a></li>
                                        <li><a href="8199">譙</a></li>
                                        <li><a href="8200">譔</a></li>
                                        <li><a href="8201">譂</a></li>
                                        <li><a href="8202">譄</a></li>
                                        <li><a href="8203">譈</a></li>
                                        <li><a href="8204">譒</a></li>
                                        <li><a href="8205">䜌</a></li>
                                        <li><a href="8228">譋</a></li>
                                        <li><a class="color1" href="1875">譜</a>
                                        </li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts20">
                                   <h3 class="ttl_while"><a href="kakusu20">２０画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="5008">譫</a></li>
                                        <li><a href="5009">譬</a></li>
                                        <li><a href="5010">譟</a></li>
                                        <li><a href="17716">譝</a></li>
                                        <li><a href="17717">譠</a></li>
                                        <li><a href="17718">譢</a></li>
                                        <li><a href="17719">譤</a></li>
                                        <li><a href="17720">譥</a></li>
                                        <li><a href="17721">譧</a></li>
                                        <li><a href="17722">譨</a></li>
                                        <li><a href="5700">譯</a></li>
                                        <li><a href="17723">譮</a></li>
                                        <li><a href="6279">譱</a></li>
                                        <li><a href="6317">譽</a></li>
                                        <li><a href="22404">䜒</a></li>
                                        <li><a href="22407">䜗</a></li>
                                        <li><a href="24140">譡</a></li>
                                        <li><a class="color1" href="kanji/476">議</a></li>
                                        <li><a class="color1" href="695">護</a></li>
                                        <li><a href="27517">䜖</a></li>
                                        <li><a href="27518">䜔</a></li>
                                        <li><a href="8206">譩</a></li>
                                        <li><a href="8207">譭</a></li>
                                        <li><a href="8208">譞</a></li>
                                        <li><a href="8209">譣</a></li>
                                        <li><a href="8210">譍</a></li>
                                        <li><a class="color1" href="1446">譲</a>
                                        </li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts21">
                                   <h3 class="ttl_while"><a href="kakusu21">２１画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="5006">譖</a></li>
                                        <li><a href="5011">譴</a></li>
                                        <li><a href="17724">譳</a></li>
                                        <li><a href="17725">譵</a></li>
                                        <li><a href="17726">譺</a></li>
                                        <li><a href="17727">譻</a></li>
                                        <li><a href="22408">䜙</a></li>
                                        <li><a href="22409">䜜</a></li>
                                        <li><a href="22410">䜝</a></li>
                                        <li><a href="22411">䜞</a></li>
                                        <li><a href="24332">䜚</a></li>
                                        <li><a href="26584">讂</a></li>
                                        <li><a href="8211">譹</a></li>
                                        <li><a href="8212">譅</a></li>
                                        <li><a href="8213">譸</a></li>
                                        <li><a href="8214">譶</a></li>
                                        <li><a href="8225">䜛</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts22">
                                   <h3 class="ttl_while"><a href="kakusu22">２２画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="6318">讀</a></li>
                                        <li><a href="22412">䜠</a></li>
                                        <li><a href="22413">䜡</a></li>
                                        <li><a href="8215">譼</a></li>
                                        <li><a href="8216">譿</a></li>
                                        <li><a href="8217">讅</a></li>
                                        <li><a href="8218">譾</a></li>
                                        <li><a href="8220">讁</a></li>
                                        <li><a href="8221">讄</a></li>
                                        <li><a href="8226">䜟</a></li>
                                        <li><a class="color2" href="2457">讃</a>
                                        </li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts23">
                                   <h3 class="ttl_while"><a href="kakusu23">２３画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="5012">讌</a></li>
                                        <li><a href="5013">讐</a></li>
                                        <li><a href="5014">讎</a></li>
                                        <li><a href="6203">變</a></li>
                                        <li><a href="17728">讈</a></li>
                                        <li><a href="8166">讇</a></li>
                                        <li><a href="8170">讍</a></li>
                                        <li><a href="24142">讉</a></li>
                                        <li><a href="24333">䜢</a></li>
                                        <li><a href="26585">讆</a></li>
                                        <li><a href="8222">讏</a></li>
                                        <li><a href="8223">讋</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts24">
                                   <h3 class="ttl_while"><a href="kakusu24">２４画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="5015">讙</a></li>
                                        <li><a href="5016">讖</a></li>
                                        <li><a href="5017">讒</a></li>
                                        <li><a class="color2" href="6319">讓</a>
                                        </li>
                                        <li><a href="17729">讑</a></li>
                                        <li><a href="8224">讔</a></li>
                                        <li><a href="8227">讕</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts25">
                                   <h3 class="ttl_while"><a href="kakusu25">２５画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="17730">讗</a></li>
                                        <li><a href="8229">讘</a></li>
                                        <li><a href="8230">讛</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts26">
                                   <h3 class="ttl_while"><a href="kakusu26">２６画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="2458">讚</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts27">
                                   <h3 class="ttl_while"><a href="kakusu27">２７画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="8231">讞</a></li>
                                        <li><a href="8232">讝</a></li>
                                        <li><a href="8233">讜</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts29">
                                   <h3 class="ttl_while"><a href="kakusu29">２９画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="8234">讟</a></li>
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
                                             <li><a href="12934"
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
</script>
            <footer>
               <div class="footer_wrap" data-nosnippet>
                    <div class="center">
                         <div class="footer_bottom">
                              <ul class="footer_menu">
                                   <li><a href="info">報告・お問い合わせ</a></li>
                                   <li><a href="privacy">プライバシーポリシー</a></li>
                                   <li><a href="">参考文献</a></li>
                                   <li><a href="">運営サイト一覧</a></li>
                                   <li><a href="">運営会社</a></li>
                              </ul>
                              <div class="language_footer">
                                   <div class="lan_inner">
                                        <select name="select" onChange="location.href=value;" tabindex="0">
                                             <option value="" selected>Language</option>
                                             <option value="radical149">English</option>
                                             <option value="bushu07007">Japanese</option>
                                        </select>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <p class="copyright">&copy; 2012-2023 漢字辞典オンライン</p>
          </footer>
     </div><!--all-->
</body>

<!-- Mirrored from bushu07007 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Nov 2023 00:41:23 GMT -->

</html>