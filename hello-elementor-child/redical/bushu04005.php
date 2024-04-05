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
                    <h1 class="ttl_main">部首：手部（て・てへん）の漢字</h1>

                    <div class="bushu_about">
                         <div class="bushu_about_box">
                              <h2>手部とは？</h2>
                              <p><strong>手部（しゅぶ）は、<span
                                             class="marker">手を使った動作に関する字</span>が多く属します。</strong>「手」は「て」、偏になった形「扌」を「てへん」と呼びます。「手」と「扌」は形や画数が異なるため、同じ意味をもつ別の部首として扱うこともあります。
                              </p>
                              <p></p>
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
                                        <option value="#" selected>手 扌（て）</option>
                                        <option value="bushu03034">屮（てつ）</option>
                                        <option value="#" selected>手 扌（てへん）</option>
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
                                   <li><a href="bbushu04005">漢検級順</a></li>
                                   <li><a href="cbushu04005">読み順</a></li>
                              </ul>
                              <ul class="search_menu2">
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
                                   <li><a href="#parts25">25画</a></li>
                                   <li><a href="#parts26">26画</a></li>
                              </ul>
                         </div><!--search_data-->
                        
                         <h2 class="left_border">部首：手部（て・てへん）の漢字一覧</h2>
                         <div class="bushu_wrap">
                              <div class="color_info">
                                   <ul>
                                        <li><span>常用漢字の背景色＝</span><span class="color1"></span></li>
                                        <li><span>人名用漢字の背景色＝</span><span class="color2"></span></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts03">
                                   <h3 class="ttl_while"><a href="kakusu03">３画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="kanji/140">才</a></li>
                                        <li><a href="11266">扌</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts04">
                                   <h3 class="ttl_while"><a href="kakusu04">４画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/26237">龵</a></li>
                                        <li><a href="3655">扎</a></li>
                                        <li><a class="color1" href="kanji/033">手</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts05">
                                   <h3 class="ttl_while"><a href="kakusu05">５画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="1260">払</a>
                                        </li>
                                        <li><a href="kanjiy/19761">㧃</a></li>
                                        <li><a href="kanjiy/19762">㧄</a></li>
                                        <li><a href="kanjiy/19763">㧅</a></li>
                                        <li><a class="color1" href="kanji/354">打</a></li>
                                        <li><a href="11267">扖</a></li>
                                        <li><a href="11268">扔</a></li>
                                        <li><a href="11269">扒</a></li>
                                        <li><a href="11270">扑</a></li>
                                        <li><a href="11271">扐</a></li>
                                        <li><a href="kanjiy/14901">扏</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts06">
                                   <h3 class="ttl_while"><a href="kakusu06">６画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/14905">扥</a></li>
                                        <li><a href="kanjiy/14906">执</a></li>
                                        <li><a href="kanjiy/23992">扝</a></li>
                                        <li><a href="kanjiy/25262">扩</a></li>
                                        <li><a href="kanjiy/25263">扫</a></li>
                                        <li><a class="color2" href="2703">托</a>
                                        </li>
                                        <li><a href="3656">扞</a></li>
                                        <li><a href="3657">扛</a></li>
                                        <li><a href="3658">扣</a></li>
                                        <li><a href="3659">扠</a></li>
                                        <li><a href="3660">扨</a></li>
                                        <li><a href="kanjiy/19764">㧆</a></li>
                                        <li><a href="kanjiy/19765">㧇</a></li>
                                        <li><a href="kanjiy/19766">㧈</a></li>
                                        <li><a href="11272">扜</a></li>
                                        <li><a href="11274">扢</a></li>
                                        <li><a href="11275">扤</a></li>
                                        <li><a href="11276">扦</a></li>
                                        <li><a href="11277">扡</a></li>
                                        <li><a href="11278">扚</a></li>
                                        <li><a href="kanjiy/14902">扗</a></li>
                                        <li><a href="kanjiy/14903">扙</a></li>
                                        <li><a class="color1" href="1004">扱</a>
                                        </li>
                                        <li><a href="kanjiy/14904">扟</a></li>
                                   </ul>
                              </div>
                         
                              <div class="parts_box" id="parts07">
                                   <h3 class="ttl_while"><a href="kakusu07">７画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="11285">扺</a></li>
                                        <li><a href="11286">扻</a></li>
                                        <li><a href="11287">扯</a></li>
                                        <li><a href="kanjiy/14907">扰</a></li>
                                        <li><a href="11288">扭</a></li>
                                        <li><a href="kanjiy/14908">扲</a></li>
                                        <li><a href="11290">抌</a></li>
                                        <li><a href="kanjiy/14909">扷</a></li>
                                        <li><a class="color1" href="1096">抗</a>
                                        </li>
                                        <li><a href="11291">抐</a></li>
                                        <li><a href="kanjiy/14910">扸</a></li>
                                        <li><a href="11292">扽</a></li>
                                        <li><a href="kanjiy/14911">抁</a></li>
                                        <li><a href="11293">㧊</a></li>
                                        <li><a href="kanjiy/14912">抋</a></li>
                                        <li><a href="kanjiy/14913">抚</a></li>
                                        <li><a href="11295">扳</a></li>
                                        <li><a href="kanjiy/14914">抝</a></li>
                                        <li><a href="11296">抆</a></li>
                                        <li><a href="kanjiy/14915">报</a></li>
                                        <li><a class="color1" href="1233">抜</a>
                                        </li>
                                        <li><a href="11302">抅</a></li>
                                        <li><a href="kanjiy/14922">抸</a></li>
                                        <li><a class="color1" href="1494">択</a>
                                        </li>
                                        <li><a href="kanjiy/25266">抠</a></li>
                                        <li><a href="kanjiy/25267">抡</a></li>
                                        <li><a href="kanjiy/25268">抢</a></li>
                                        <li><a href="kanjiy/25269">抣</a></li>
                                        <li><a href="kanjiy/25270">护</a></li>
                                        <li><a class="color1" href="1583">抑</a>
                                        </li>
                                        <li><a href="11327">抍</a></li>
                                        <li><a class="color1" href="1747">抄</a>
                                        </li>
                                        <li><a class="color1" href="1853">把</a>
                                        </li>
                                        <li><a class="color1" href="1876">扶</a>
                                        </li>
                                        <li><a href="11357">抙</a></li>
                                        <li><a href="kanjiy/27130">㧏</a></li>
                                        <li><a href="kanjiy/27135">㧐</a></li>
                                        <li><a href="2842">扮</a></li>
                                        <li><a href="3661">扼</a></li>
                                        <li><a href="3662">抉</a></li>
                                        <li><a href="3663">找</a></li>
                                        <li><a href="3664">抒</a></li>
                                        <li><a href="3665">抓</a></li>
                                        <li><a href="3666">抖</a></li>
                                        <li><a href="3667">抃</a></li>
                                        <li><a href="3668">抔</a></li>
                                        <li><a href="3677">抛</a></li>
                                        <li><a href="kanjiy/19767">㧉</a></li>
                                        <li><a href="kanjiy/19768">㧋</a></li>
                                        <li><a href="kanjiy/19769">㧌</a></li>
                                        <li><a href="kanjiy/19770">㧍</a></li>
                                        <li><a href="5925">抂</a></li>
                                        <li><a class="color1" href="kanji/381">投</a></li>
                                        <li><a class="color1" href="550">折</a></li>
                                        <li><a class="color1" href="672">技</a></li>
                                        <li><a href="11597">扵</a></li>
                                        <li><a href="11279">抎</a></li>
                                        <li><a href="11280">㧎</a></li>
                                        <li><a href="11281">扴</a></li>
                                        <li><a class="color1" href="972">批</a></li>
                                        <li><a href="11282">抏</a></li>
                                        <li><a href="11283">抈</a></li>
                                        <li><a href="11284">抇</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts08">
                                   <h3 class="ttl_while"><a href="kakusu08">８画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="1024">押</a>
                                        </li>
                                        <li><a class="color1" href="1060">拠</a>
                                        </li>
                                        <li><a class="color1" href="1176">拓</a>
                                        </li>
                                        <li><a class="color1" href="1195">抵</a>
                                        </li>
                                        <li><a href="11294">㧞</a></li>
                                        <li><a class="color1" href="1228">拍</a>
                                        </li>
                                        <li><a href="11297">㧖</a></li>
                                        <li><a href="kanjiy/14916">抧</a></li>
                                        <li><a href="11298">抴</a></li>
                                        <li><a href="kanjiy/14917">抩</a></li>
                                        <li><a href="kanjiy/14918">抪</a></li>
                                        <li><a href="11300">抾</a></li>
                                        <li><a href="kanjiy/14919">抯</a></li>
                                        <li><a href="kanjiy/14920">抰</a></li>
                                        <li><a class="color1" href="1267">抱</a>
                                        </li>
                                        <li><a href="kanjiy/14921">抲</a></li>
                                        <li><a href="11303">拃</a></li>
                                        <li><a href="11304">抳</a></li>
                                        <li><a href="kanjiy/14923">拞</a></li>
                                        <li><a href="11305">抮</a></li>
                                        <li><a href="kanjiy/14924">拟</a></li>
                                        <li><a href="11306">拕</a></li>
                                        <li><a href="11307">拖</a></li>
                                        <li><a class="color1" href="1400">拘</a>
                                        </li>
                                        <li><a href="11308">抶</a></li>
                                        <li><a href="11309">拄</a></li>
                                        <li><a href="11310">抷</a></li>
                                        <li><a href="11311">㧙</a></li>
                                        <li><a href="11312">抿</a></li>
                                        <li><a href="11313">抦</a></li>
                                        <li><a href="11314">拚</a></li>
                                        <li><a href="11316">抨</a></li>
                                        <li><a href="11317">抺</a></li>
                                        <li><a class="color1" href="1504">抽</a>
                                        </li>
                                        <li><a href="11318">抭</a></li>
                                        <li><a href="11319">拎</a></li>
                                        <li><a href="kanjiy/25271">拀</a></li>
                                        <li><a href="kanjiy/25272">拁</a></li>
                                        <li><a class="color1" href="1622">拐</a>
                                        </li>
                                        <li><a href="kanjiy/25274">拤</a></li>
                                        <li><a href="kanjiy/25275">拥</a></li>
                                        <li><a href="kanjiy/25276">拦</a></li>
                                        <li><a class="color1" href="1655">拒</a>
                                        </li>
                                        <li><a href="kanjiy/25277">拧</a></li>
                                        <li><a href="kanjiy/25278">拨</a></li>
                                        <li><a class="color1" href="1781">拙</a>
                                        </li>
                                        <li><a class="color1" href="1867">披</a>
                                        </li>
                                        <li><a class="color1" href="1903">抹</a>
                                        </li>
                                        <li><a class="color1" href="2120">拉</a>
                                        </li>
                                        <li><a href="kanjiy/27141">㧚</a></li>
                                        <li><a href="kanjiy/27144">㧜</a></li>
                                        <li><a href="kanjiy/27147">㧟</a></li>
                                        <li><a href="kanjiy/27150">㧠</a></li>
                                        <li><a href="3669">拗</a></li>
                                        <li><a href="3670">拑</a></li>
                                        <li><a href="3671">抻</a></li>
                                        <li><a href="3672">拆</a></li>
                                        <li><a href="3673">拈</a></li>
                                        <li><a href="3674">拌</a></li>
                                        <li><a href="3675">拊</a></li>
                                        <li><a href="3676">拇</a></li>
                                        <li><a href="kanjiy/19771">㧒</a></li>
                                        <li><a href="kanjiy/19773">㧔</a></li>
                                        <li><a href="kanjiy/19774">㧕</a></li>
                                        <li><a href="3734">抬</a></li>
                                        <li><a class="color2" href="5926">拔</a>
                                        </li>
                                        <li><a class="color2" href="6184">拂</a>
                                        </li>
                                        <li><a href="6491">拋</a></li>
                                        <li><a class="color1" href="735">承</a></li>
                                        <li><a class="color1" href="736">招</a></li>
                                        <li><a class="color1" href="835">拡</a></li>
                                        <li><a class="color1" href="940">担</a></li>
                                        <li><a class="color1" href="967">拝</a></li>
                                   </ul>
                              </div>
                         
                              <div class="parts_box" id="parts09">
                                   <h3 class="ttl_while"><a href="kakusu09">９画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/14925">拰</a></li>
                                        <li><a href="kanjiy/14926">拹</a></li>
                                        <li><a href="kanjiy/14927">拺</a></li>
                                        <li><a href="kanjiy/14928">拻</a></li>
                                        <li><a href="kanjiy/14929">挀</a></li>
                                        <li><a href="kanjiy/14930">挅</a></li>
                                        <li><a href="kanjiy/14931">挆</a></li>
                                        <li><a href="kanjiy/14932">挊</a></li>
                                        <li><a href="kanjiy/14933">挎</a></li>
                                        <li><a href="kanjiy/14934">挒</a></li>
                                        <li><a href="kanjiy/14935">挔</a></li>
                                        <li><a href="kanjiy/14936">挕</a></li>
                                        <li><a href="kanjiy/14937">挗</a></li>
                                        <li><a href="11320">挖</a></li>
                                        <li><a href="11321">拽</a></li>
                                        <li><a href="11323">挄</a></li>
                                        <li><a href="11324">挍</a></li>
                                        <li><a class="color1" href="1635">括</a>
                                        </li>
                                        <li><a href="11325">拫</a></li>
                                        <li><a href="11326">㧗</a></li>
                                        <li><a class="color1" href="1656">挟</a>
                                        </li>
                                        <li><a href="11328">拴</a></li>
                                        <li><a class="color1" href="1692">拷</a>
                                        </li>
                                        <li><a href="11329">挓</a></li>
                                        <li><a href="11330">拸</a></li>
                                        <li><a href="11331">挃</a></li>
                                        <li><a href="11332">挏</a></li>
                                        <li><a href="11333">挘</a></li>
                                        <li><a href="kanjiy/25286">挡</a></li>
                                        <li><a href="kanjiy/25287">挢</a></li>
                                        <li><a class="color1" href="1816">挑</a>
                                        </li>
                                        <li><a href="kanjiy/25288">挣</a></li>
                                        <li><a href="kanjiy/25289">挦</a></li>
                                        <li><a class="color1" href="2013">拶</a>
                                        </li>
                                        <li><a class="color1" href="2027">拭</a>
                                        </li>
                                        <li><a class="color2" href="2145">按</a>
                                        </li>
                                        <li><a href="kanjiy/25410">挤</a></li>
                                        <li><a href="kanjiy/27146">㧝</a></li>
                                        <li><a href="11390">拼</a></li>
                                        <li><a href="kanjiy/27837">𢪸</a></li>
                                        <li><a href="3679">拏</a></li>
                                        <li><a href="3680">挌</a></li>
                                        <li><a href="3681">拮</a></li>
                                        <li><a href="3682">拱</a></li>
                                        <li><a href="3683">挂</a></li>
                                        <li><a href="3685">拯</a></li>
                                        <li><a href="3686">拵</a></li>
                                        <li><a href="kanjiy/19772">㧓</a></li>
                                        <li><a href="kanjiy/19776">㧡</a></li>
                                        <li><a href="kanjiy/19777">㧢</a></li>
                                        <li><a href="kanjiy/19778">㧣</a></li>
                                        <li><a href="kanjiy/19779">㧤</a></li>
                                        <li><a href="kanjiy/19780">㧥</a></li>
                                        <li><a href="kanjiy/19781">㧦</a></li>
                                        <li><a href="kanjiy/19783">㧨</a></li>
                                        <li><a href="kanjiy/19784">㧩</a></li>
                                        <li><a href="kanjiy/19785">㧪</a></li>
                                        <li><a href="kanjiy/19786">㧫</a></li>
                                        <li><a href="kanjiy/19788">㧮</a></li>
                                        <li><a href="kanjiy/19789">㧯</a></li>
                                        <li><a class="color2" href="5881">拜</a>
                                        </li>
                                        <li><a href="6185">挧</a></li>
                                        <li><a href="8619">拪</a></li>
                                        <li><a class="color1" href="kanji/300">指</a></li>
                                        <li><a class="color1" href="kanji/308">持</a></li>
                                        <li><a class="color1" href="kanji/321">拾</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts10">
                                   <h3 class="ttl_while"><a href="kakusu10">１０画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="1153">振</a>
                                        </li>
                                        <li><a class="color1" href="1264">捕</a>
                                        </li>
                                        <li><a href="kanjiy/14938">挮</a></li>
                                        <li><a href="kanjiy/14939">挰</a></li>
                                        <li><a href="11322">捙</a></li>
                                        <li><a href="kanjiy/14940">挳</a></li>
                                        <li><a href="kanjiy/14941">挵</a></li>
                                        <li><a href="kanjiy/14942">挷</a></li>
                                        <li><a href="kanjiy/14943">挸</a></li>
                                        <li><a href="kanjiy/14944">捇</a></li>
                                        <li><a href="kanjiy/14945">捑</a></li>
                                        <li><a href="kanjiy/14946">捖</a></li>
                                        <li><a href="kanjiy/14947">捚</a></li>
                                        <li><a href="kanjiy/25280">挚</a></li>
                                        <li><a href="kanjiy/14948">捤</a></li>
                                        <li><a href="kanjiy/25281">挛</a></li>
                                        <li><a href="kanjiy/25283">挝</a></li>
                                        <li><a href="kanjiy/25284">挞</a></li>
                                        <li><a class="color1" href="1794">捜</a>
                                        </li>
                                        <li><a class="color1" href="1800">挿</a>
                                        </li>
                                        <li><a href="11334">捔</a></li>
                                        <li><a href="11335">挶</a></li>
                                        <li><a href="11336">捄</a></li>
                                        <li><a href="11337">捃</a></li>
                                        <li><a href="kanjiy/25290">捝</a></li>
                                        <li><a href="11338">捂</a></li>
                                        <li><a href="kanjiy/25291">捞</a></li>
                                        <li><a href="11339">捁</a></li>
                                        <li><a href="kanjiy/25292">捠</a></li>
                                        <li><a href="11340">挭</a></li>
                                        <li><a href="kanjiy/25320">换</a></li>
                                        <li><a href="11341">捆</a></li>
                                        <li><a href="11342">挋</a></li>
                                        <li><a href="11343">捒</a></li>
                                        <li><a class="color1" href="1938">挨</a>
                                        </li>
                                        <li><a href="11344">捘</a></li>
                                        <li><a class="color1" href="1992">拳</a>
                                        </li>
                                        <li><a href="11345">捎</a></li>
                                        <li><a class="color1" href="2007">挫</a>
                                        </li>
                                        <li><a href="11346">挼</a></li>
                                        <li><a href="11347">挻</a></li>
                                        <li><a class="color1" href="2049">捉</a>
                                        </li>
                                        <li><a href="11350">挪</a></li>
                                        <li><a class="color1" href="2062">捗</a>
                                        </li>
                                        <li><a href="11351">挩</a></li>
                                        <li><a href="11352">捈</a></li>
                                        <li><a href="11353">捅</a></li>
                                        <li><a href="11355">捀</a></li>
                                        <li><a href="11356">捊</a></li>
                                        <li><a href="11358">挬</a></li>
                                        <li><a href="11359">挴</a></li>
                                        <li><a href="11360">挹</a></li>
                                        <li><a href="11361">捋</a></li>
                                        <li><a class="color2" href="2736">挺</a>
                                        </li>
                                        <li><a href="kanjiy/27155">㧱</a></li>
                                        <li><a href="2835">捌</a></li>
                                        <li><a href="kanjiy/27156">㧵</a></li>
                                        <li><a class="color2" href="2845">挽</a>
                                        </li>
                                        <li><a href="kanjiy/27838">𢭏</a></li>
                                        <li><a href="kanjiy/27839">𢭐</a></li>
                                        <li><a href="kanjiy/27840">𢭆</a></li>
                                        <li><a href="3678">拿</a></li>
                                        <li><a href="3684">挈</a></li>
                                        <li><a href="3687">捐</a></li>
                                        <li><a href="3688">捍</a></li>
                                        <li><a href="3689">捏</a></li>
                                        <li><a href="3700">捩</a></li>
                                        <li><a href="kanjiy/19775">㧘</a></li>
                                        <li><a href="kanjiy/19782">㧧</a></li>
                                        <li><a href="kanjiy/19787">㧭</a></li>
                                        <li><a href="kanjiy/19790">㧲</a></li>
                                        <li><a href="kanjiy/19792">㧴</a></li>
                                        <li><a href="kanjiy/19793">㧶</a></li>
                                        <li><a href="kanjiy/19794">㧷</a></li>
                                        <li><a href="kanjiy/19795">㧸</a></li>
                                        <li><a href="kanjiy/19806">㨅</a></li>
                                        <li><a href="6186">挾</a></li>
                                        <li><a href="6539">捓</a></li>
                                        <li><a href="11245">拲</a></li>
                                        <li><a href="11246">㧬</a></li>
                                        <li><a href="11247">挐</a></li>
                                        <li><a href="11249">挱</a></li>
                                        <li><a class="color1" href="kanji/481">挙</a></li>
                                        <li><a href="11604">捛</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts11">
                                   <h3 class="ttl_while"><a href="kakusu11">１１画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="1075">掘</a>
                                        </li>
                                        <li><a class="color1" href="1248">描</a>
                                        </li>
                                        <li><a class="color1" href="1347">掛</a>
                                        </li>
                                        <li><a class="color1" href="1383">掲</a>
                                        </li>
                                        <li><a class="color1" href="1399">控</a>
                                        </li>
                                        <li><a class="color1" href="1474">措</a>
                                        </li>
                                        <li><a class="color1" href="1481">掃</a>
                                        </li>
                                        <li><a class="color1" href="1527">排</a>
                                        </li>
                                        <li><a class="color1" href="1773">据</a>
                                        </li>
                                        <li><a href="kanjiy/14949">捪</a></li>
                                        <li><a href="kanjiy/14950">捯</a></li>
                                        <li><a href="kanjiy/14951">捰</a></li>
                                        <li><a href="kanjiy/14952">捳</a></li>
                                        <li><a href="kanjiy/14953">捹</a></li>
                                        <li><a href="kanjiy/14954">捾</a></li>
                                        <li><a href="kanjiy/14955">掅</a></li>
                                        <li><a href="kanjiy/14956">掋</a></li>
                                        <li><a href="kanjiy/14957">掑</a></li>
                                        <li><a href="kanjiy/14958">掓</a></li>
                                        <li><a href="kanjiy/25322">掳</a></li>
                                        <li><a href="kanjiy/25323">掶</a></li>
                                        <li><a href="kanjiy/14961">掿</a></li>
                                        <li><a href="kanjiy/25326">掹</a></li>
                                        <li><a href="kanjiy/25327">掺</a></li>
                                        <li><a class="color1" href="2084">捻</a>
                                        </li>
                                        <li><a href="2185">掩</a></li>
                                        <li><a href="2240">掴</a></li>
                                        <li><a class="color2" href="2289">掬</a>
                                        </li>
                                        <li><a class="color2" href="2365">捲</a>
                                        </li>
                                        <li><a href="11362">掗</a></li>
                                        <li><a href="11363">捱</a></li>
                                        <li><a href="11364">掝</a></li>
                                        <li><a class="color2" href="2559">捷</a>
                                        </li>
                                        <li><a href="11365">捦</a></li>
                                        <li><a href="11366">掜</a></li>
                                        <li><a href="kanjiy/25409">㨈</a></li>
                                        <li><a href="11367">掮</a></li>
                                        <li><a href="11368">掆</a></li>
                                        <li><a href="2658">掻</a></li>
                                        <li><a href="11369">掐</a></li>
                                        <li><a href="11370">掯</a></li>
                                        <li><a href="11371">掍</a></li>
                                        <li><a class="color2" href="2709">捺</a>
                                        </li>
                                        <li><a href="11373">掞</a></li>
                                        <li><a href="11374">掙</a></li>
                                        <li><a href="11375">捽</a></li>
                                        <li><a href="11376">捼</a></li>
                                        <li><a href="11377">㧻</a></li>
                                        <li><a href="11378">掁</a></li>
                                        <li><a href="11379">掦</a></li>
                                        <li><a href="11380">掇</a></li>
                                        <li><a class="color2" href="2908">捧</a>
                                        </li>
                                        <li><a href="11381">捵</a></li>
                                        <li><a class="color2" href="2974">掠</a>
                                        </li>
                                        <li><a href="11382">掂</a></li>
                                        <li><a href="11383">掭</a></li>
                                        <li><a href="11384">㧺</a></li>
                                        <li><a href="11385">捸</a></li>
                                        <li><a href="11386">捭</a></li>
                                        <li><a href="11387">掤</a></li>
                                        <li><a href="11388">捬</a></li>
                                        <li><a href="11389">掊</a></li>
                                        <li><a href="11391">掕</a></li>
                                        <li><a href="11392">掚</a></li>
                                        <li><a href="11393">掄</a></li>
                                        <li><a href="11394">捥</a></li>
                                        <li><a href="kanjiy/27841">𢰝</a></li>
                                        <li><a href="kanjiy/27842">𢮦</a></li>
                                        <li><a href="3690">掖</a></li>
                                        <li><a href="3691">掎</a></li>
                                        <li><a href="3692">掀</a></li>
                                        <li><a href="3693">掫</a></li>
                                        <li><a href="3694">捶</a></li>
                                        <li><a href="3696">掏</a></li>
                                        <li><a href="3697">掉</a></li>
                                        <li><a href="3698">掟</a></li>
                                        <li><a href="3699">捫</a></li>
                                        <li><a href="kanjiy/19791">㧳</a></li>
                                        <li><a href="kanjiy/19796">㧹</a></li>
                                        <li><a href="kanjiy/19797">㧼</a></li>
                                        <li><a href="kanjiy/19798">㧽</a></li>
                                        <li><a href="kanjiy/19799">㧾</a></li>
                                        <li><a href="kanjiy/19800">㧿</a></li>
                                        <li><a href="kanjiy/19801">㨀</a></li>
                                        <li><a href="kanjiy/19802">㨁</a></li>
                                        <li><a href="kanjiy/19803">㨂</a></li>
                                        <li><a href="kanjiy/19804">㨃</a></li>
                                        <li><a href="kanjiy/19805">㨄</a></li>
                                        <li><a href="kanjiy/19807">㨆</a></li>
                                        <li><a href="6188">掵</a></li>
                                        <li><a href="9074">捴</a></li>
                                        <li><a href="11248">挲</a></li>
                                        <li><a class="color1" href="706">採</a></li>
                                        <li><a class="color1" href="728">授</a></li>
                                        <li><a class="color1" href="753">接</a></li>
                                        <li><a class="color1" href="891">捨</a></li>
                                        <li><a class="color1" href="916">推</a></li>
                                        <li><a class="color1" href="939">探</a></li>
                                        <li><a href="kanjiy/12099">捿</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts12">
                                   <h3 class="ttl_while"><a href="kakusu12">１２画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="1019">援</a>
                                        </li>
                                        <li><a class="color1" href="1355">換</a>
                                        </li>
                                        <li><a href="kanjiy/23857">搁</a></li>
                                        <li><a href="kanjiy/23858">搅</a></li>
                                        <li><a href="kanjiy/24220">㨗</a></li>
                                        <li><a class="color1" href="1440">掌</a>
                                        </li>
                                        <li><a class="color1" href="1581">揚</a>
                                        </li>
                                        <li><a class="color1" href="1582">揺</a>
                                        </li>
                                        <li><a class="color1" href="1838">搭</a>
                                        </li>
                                        <li><a href="kanjiy/14959">掰</a></li>
                                        <li><a href="kanjiy/14960">掱</a></li>
                                        <li><a href="kanjiy/25324">掷</a></li>
                                        <li><a href="kanjiy/14962">揂</a></li>
                                        <li><a href="kanjiy/25325">掸</a></li>
                                        <li><a href="kanjiy/14963">揇</a></li>
                                        <li><a href="kanjiy/14964">揊</a></li>
                                        <li><a href="kanjiy/14965">揋</a></li>
                                        <li><a href="kanjiy/25328">揻</a></li>
                                        <li><a href="kanjiy/14966">揍</a></li>
                                        <li><a href="kanjiy/25329">揼</a></li>
                                        <li><a href="11349">揷</a></li>
                                        <li><a href="kanjiy/14967">揗</a></li>
                                        <li><a href="kanjiy/25332">搀</a></li>
                                        <li><a href="kanjiy/14968">揘</a></li>
                                        <li><a href="kanjiy/25333">搂</a></li>
                                        <li><a href="kanjiy/14969">揙</a></li>
                                        <li><a href="kanjiy/25334">搃</a></li>
                                        <li><a href="kanjiy/14970">揝</a></li>
                                        <li><a href="kanjiy/25335">搄</a></li>
                                        <li><a href="kanjiy/14971">揞</a></li>
                                        <li><a href="11354">揑</a></li>
                                        <li><a href="kanjiy/14972">揟</a></li>
                                        <li><a href="kanjiy/14973">揤</a></li>
                                        <li><a href="kanjiy/14974">揦</a></li>
                                        <li><a href="kanjiy/14976">揯</a></li>
                                        <li><a href="kanjiy/14977">揰</a></li>
                                        <li><a href="kanjiy/14978">揾</a></li>
                                        <li><a href="2509">揖</a></li>
                                        <li><a href="kanjiy/14982">搑</a></li>
                                        <li><a class="color2" href="2635">揃</a>
                                        </li>
                                        <li><a href="kanjiy/27160">㨑</a></li>
                                        <li><a href="kanjiy/27161">㨘</a></li>
                                        <li><a href="11395">揠</a></li>
                                        <li><a href="11396">揜</a></li>
                                        <li><a href="11397">揢</a></li>
                                        <li><a href="11398">揵</a></li>
                                        <li><a href="11399">揈</a></li>
                                        <li><a href="kanjiy/27843">𢰤</a></li>
                                        <li><a href="11400">揸</a></li>
                                        <li><a href="11401">揌</a></li>
                                        <li><a href="11402">揓</a></li>
                                        <li><a href="11403">揪</a></li>
                                        <li><a href="11404">揲</a></li>
                                        <li><a href="11405">揳</a></li>
                                        <li><a href="11406">㨎</a></li>
                                        <li><a href="11407">揎</a></li>
                                        <li><a href="11408">揕</a></li>
                                        <li><a href="11409">揥</a></li>
                                        <li><a href="11410">揁</a></li>
                                        <li><a href="11412">揨</a></li>
                                        <li><a href="11413">揬</a></li>
                                        <li><a href="11414">揹</a></li>
                                        <li><a href="11415">掽</a></li>
                                        <li><a href="3695">掣</a></li>
                                        <li><a href="3701">掾</a></li>
                                        <li><a href="3702">揩</a></li>
                                        <li><a href="11430">搽</a></li>
                                        <li><a href="3703">揀</a></li>
                                        <li><a href="3704">揆</a></li>
                                        <li><a href="3705">揣</a></li>
                                        <li><a href="3706">揉</a></li>
                                        <li><a href="3707">揶</a></li>
                                        <li><a href="3708">揄</a></li>
                                        <li><a href="kanjiy/19808">㨇</a></li>
                                        <li><a href="kanjiy/19809">㨉</a></li>
                                        <li><a href="kanjiy/19810">㨊</a></li>
                                        <li><a class="color2" href="6187">搜</a>
                                        </li>
                                        <li><a href="kanjiy/19811">㨋</a></li>
                                        <li><a href="6189">插</a></li>
                                        <li><a href="kanjiy/19813">㨏</a></li>
                                        <li><a href="kanjiy/19814">㨐</a></li>
                                        <li><a href="kanjiy/19815">㨒</a></li>
                                        <li><a href="11491">㨔</a></li>
                                        <li><a href="kanjiy/19816">㨓</a></li>
                                        <li><a href="kanjiy/19817">㨕</a></li>
                                        <li><a class="color2" href="6436">揭</a>
                                        </li>
                                        <li><a href="kanjiy/19819">㨚</a></li>
                                        <li><a href="9073">揔</a></li>
                                        <li><a class="color1" href="775">提</a></li>
                                        <li><a class="color1" href="843">揮</a></li>
                                        <li><a class="color1" href="1003">握</a>
                                        </li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts13">
                                   <h3 class="ttl_while"><a href="kakusu13">１３画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="1237">搬</a>
                                        </li>
                                        <li><a class="color1" href="1382">携</a>
                                        </li>
                                        <li><a class="color1" href="1419">搾</a>
                                        </li>
                                        <li><a class="color1" href="1471">摂</a>
                                        </li>
                                        <li><a href="11348">摉</a></li>
                                        <li><a href="kanjiy/25336">摄</a></li>
                                        <li><a href="kanjiy/25337">摅</a></li>
                                        <li><a href="kanjiy/25338">摆</a></li>
                                        <li><a href="kanjiy/25339">摇</a></li>
                                        <li><a href="kanjiy/14975">揧</a></li>
                                        <li><a href="kanjiy/25340">摈</a></li>
                                        <li><a href="kanjiy/25341">摊</a></li>
                                        <li><a href="kanjiy/25342">撶</a></li>
                                        <li><a href="kanjiy/14979">搇</a></li>
                                        <li><a href="kanjiy/14980">搈</a></li>
                                        <li><a href="kanjiy/14981">搎</a></li>
                                        <li><a href="kanjiy/14983">搙</a></li>
                                        <li><a href="kanjiy/14984">搛</a></li>
                                        <li><a href="kanjiy/14985">搝</a></li>
                                        <li><a href="kanjiy/14986">搟</a></li>
                                        <li><a href="kanjiy/14987">搡</a></li>
                                        <li><a href="kanjiy/14989">搮</a></li>
                                        <li><a href="kanjiy/14990">搱</a></li>
                                        <li><a href="kanjiy/14992">搳</a></li>
                                        <li><a href="kanjiy/14993">搸</a></li>
                                        <li><a href="2830">摸</a></li>
                                        <li><a href="kanjiy/14995">搼</a></li>
                                        <li><a href="kanjiy/14996">摀</a></li>
                                        <li><a href="kanjiy/27158">㨌</a></li>
                                        <li><a href="kanjiy/14997">摁</a></li>
                                        <li><a href="kanjiy/27162">㨩</a></li>
                                        <li><a href="kanjiy/27166">㨬</a></li>
                                        <li><a href="11416">搹</a></li>
                                        <li><a href="11417">搕</a></li>
                                        <li><a href="11418">搵</a></li>
                                        <li><a href="11419">搉</a></li>
                                        <li><a href="11422">搞</a></li>
                                        <li><a href="11423">搰</a></li>
                                        <li><a href="11424">搠</a></li>
                                        <li><a href="11425">搘</a></li>
                                        <li><a href="11426">搢</a></li>
                                        <li><a href="11427">搊</a></li>
                                        <li><a href="11428">搧</a></li>
                                        <li><a href="11429">㨛</a></li>
                                        <li><a href="11431">搋</a></li>
                                        <li><a href="11432">㨖</a></li>
                                        <li><a href="11433">搐</a></li>
                                        <li><a href="11434">搥</a></li>
                                        <li><a href="11435">搌</a></li>
                                        <li><a href="11436">搷</a></li>
                                        <li><a href="11437">搯</a></li>
                                        <li><a href="3710">搆</a></li>
                                        <li><a href="11438">搪</a></li>
                                        <li><a href="3711">搦</a></li>
                                        <li><a href="11439">搣</a></li>
                                        <li><a href="3712">搶</a></li>
                                        <li><a href="11440">搒</a></li>
                                        <li><a href="3713">搓</a></li>
                                        <li><a href="11441">搤</a></li>
                                        <li><a href="3714">搗</a></li>
                                        <li><a href="11442">搚</a></li>
                                        <li><a href="3715">搏</a></li>
                                        <li><a href="3717">搨</a></li>
                                        <li><a href="kanjiy/19812">㨍</a></li>
                                        <li><a class="color2" href="6190">搖</a>
                                        </li>
                                        <li><a href="kanjiy/19818">㨙</a></li>
                                        <li><a href="kanjiy/19820">㨜</a></li>
                                        <li><a href="kanjiy/19821">㨝</a></li>
                                        <li><a href="6477">搔</a></li>
                                        <li><a href="kanjiy/19822">㨞</a></li>
                                        <li><a href="kanjiy/19823">㨟</a></li>
                                        <li><a href="kanjiy/19824">㨠</a></li>
                                        <li><a href="kanjiy/19825">㨡</a></li>
                                        <li><a href="kanjiy/19826">㨢</a></li>
                                        <li><a href="kanjiy/19827">㨣</a></li>
                                        <li><a href="kanjiy/19828">㨤</a></li>
                                        <li><a href="kanjiy/19829">㨥</a></li>
                                        <li><a href="kanjiy/19830">㨦</a></li>
                                        <li><a href="kanjiy/19831">㨧</a></li>
                                        <li><a href="kanjiy/19832">㨨</a></li>
                                        <li><a href="kanjiy/19833">㨪</a></li>
                                        <li><a href="11250">掔</a></li>
                                        <li><a href="11252">揫</a></li>
                                        <li><a href="11253">揱</a></li>
                                        <li><a href="kanjiy/19838">㨲</a></li>
                                        <li><a href="11257">揅</a></li>
                                        <li><a class="color1" href="766">損</a></li>
                                        <li><a href="11273">摃</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts14">
                                   <h3 class="ttl_while"><a href="kakusu14">１４画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="1197">摘</a>
                                        </li>
                                        <li><a href="11299">㨯</a></li>
                                        <li><a href="11301">㩀</a></li>
                                        <li><a href="kanjiy/24221">㨾</a></li>
                                        <li><a href="kanjiy/24222">㨿</a></li>
                                        <li><a class="color2" href="2560">摺</a>
                                        </li>
                                        <li><a href="kanjiy/14988">搫</a></li>
                                        <li><a href="kanjiy/14991">搲</a></li>
                                        <li><a href="kanjiy/14994">搻</a></li>
                                        <li><a href="kanjiy/14998">摌</a></li>
                                        <li><a href="kanjiy/14999">摍</a></li>
                                        <li><a href="kanjiy/15000">摖</a></li>
                                        <li><a href="kanjiy/15001">摗</a></li>
                                        <li><a href="kanjiy/27167">㩁</a></li>
                                        <li><a href="kanjiy/15002">摢</a></li>
                                        <li><a href="kanjiy/27168">㩂</a></li>
                                        <li><a href="kanjiy/15003">摤</a></li>
                                        <li><a href="kanjiy/15004">摥</a></li>
                                        <li><a href="kanjiy/15007">摪</a></li>
                                        <li><a href="kanjiy/15008">摫</a></li>
                                        <li><a href="kanjiy/15009">摬</a></li>
                                        <li><a href="kanjiy/15011">摱</a></li>
                                        <li><a href="kanjiy/15012">摲</a></li>
                                        <li><a href="kanjiy/15013">摵</a></li>
                                        <li><a href="kanjiy/15015">摾</a></li>
                                        <li><a href="kanjiy/15016">摿</a></li>
                                        <li><a href="kanjiy/15018">撁</a></li>
                                        <li><a href="kanjiy/15019">撂</a></li>
                                        <li><a href="11421">搩</a></li>
                                        <li><a href="3709">搴</a></li>
                                        <li><a href="11443">摡</a></li>
                                        <li><a href="3716">摶</a></li>
                                        <li><a href="11444">摜</a></li>
                                        <li><a href="11445">摳</a></li>
                                        <li><a href="3718">摧</a></li>
                                        <li><a href="11446">摋</a></li>
                                        <li><a href="3719">摎</a></li>
                                        <li><a href="11447">摻</a></li>
                                        <li><a href="11448">摏</a></li>
                                        <li><a href="11449">摭</a></li>
                                        <li><a href="11450">摐</a></li>
                                        <li><a href="11451">摷</a></li>
                                        <li><a href="11452">摔</a></li>
                                        <li><a href="11453">摣</a></li>
                                        <li><a href="11454">摕</a></li>
                                        <li><a href="11455">摛</a></li>
                                        <li><a href="11457">摴</a></li>
                                        <li><a href="11458">摚</a></li>
                                        <li><a href="11459">摽</a></li>
                                        <li><a href="11460">㨽</a></li>
                                        <li><a href="11461">摒</a></li>
                                        <li><a href="11462">摓</a></li>
                                        <li><a href="11463">摞</a></li>
                                        <li><a href="11464">摙</a></li>
                                        <li><a href="11465">摟</a></li>
                                        <li><a href="11466">摝</a></li>
                                        <li><a class="color2" href="6437">摑</a>
                                        </li>
                                        <li><a href="9072">摠</a></li>
                                        <li><a href="kanjiy/19834">㨭</a></li>
                                        <li><a href="kanjiy/19835">㨮</a></li>
                                        <li><a href="kanjiy/19836">㨰</a></li>
                                        <li><a href="kanjiy/19837">㨱</a></li>
                                        <li><a href="11255">搿</a></li>
                                        <li><a href="kanjiy/19839">㨳</a></li>
                                        <li><a href="kanjiy/19840">㨴</a></li>
                                        <li><a href="kanjiy/19841">㨵</a></li>
                                        <li><a href="kanjiy/19842">㨶</a></li>
                                        <li><a href="11259">摹</a></li>
                                        <li><a href="kanjiy/19843">㨷</a></li>
                                        <li><a href="kanjiy/19844">㨸</a></li>
                                        <li><a href="kanjiy/19845">㨹</a></li>
                                        <li><a href="kanjiy/19846">㨺</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts15">
                                   <h3 class="ttl_while"><a href="kakusu15">１５画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="1080">撃</a>
                                        </li>
                                        <li><a href="kanjiy/23859">撵</a></li>
                                        <li><a href="kanjiy/23860">撷</a></li>
                                        <li><a class="color1" href="1420">撮</a>
                                        </li>
                                        <li><a href="kanjiy/23993">撢</a></li>
                                        <li><a class="color1" href="1836">撤</a>
                                        </li>
                                        <li><a class="color1" href="1896">撲</a>
                                        </li>
                                        <li><a class="color1" href="1900">摩</a>
                                        </li>
                                        <li><a class="color1" href="2016">摯</a>
                                        </li>
                                        <li><a href="2242">撹</a></li>
                                        <li><a href="kanjiy/25343">撺</a></li>
                                        <li><a class="color2" href="2450">撒</a>
                                        </li>
                                        <li><a class="color2" href="2452">撰</a>
                                        </li>
                                        <li><a class="color2" href="2498">撞</a>
                                        </li>
                                        <li><a href="2774">撚</a></li>
                                        <li><a class="color2" href="2812">播</a>
                                        </li>
                                        <li><a class="color2" href="2873">撫</a>
                                        </li>
                                        <li><a href="kanjiy/27169">㩏</a></li>
                                        <li><a href="kanjiy/27173">㩐</a></li>
                                        <li><a href="kanjiy/15005">摦</a></li>
                                        <li><a href="kanjiy/27175">㩑</a></li>
                                        <li><a href="kanjiy/15006">摨</a></li>
                                        <li><a href="kanjiy/15010">摮</a></li>
                                        <li><a href="kanjiy/15014">摼</a></li>
                                        <li><a href="kanjiy/15017">撀</a></li>
                                        <li><a href="kanjiy/15022">撋</a></li>
                                        <li><a href="kanjiy/15023">撔</a></li>
                                        <li><a href="kanjiy/15024">撖</a></li>
                                        <li><a href="kanjiy/15025">撗</a></li>
                                        <li><a href="kanjiy/15026">撧</a></li>
                                        <li><a href="kanjiy/15027">撪</a></li>
                                        <li><a href="kanjiy/15028">撯</a></li>
                                        <li><a href="11411">撘</a></li>
                                        <li><a href="kanjiy/15029">撱</a></li>
                                        <li><a href="kanjiy/15030">撴</a></li>
                                        <li><a href="kanjiy/15032">擆</a></li>
                                        <li><a href="kanjiy/15035">擖</a></li>
                                        <li><a href="kanjiy/15037">擛</a></li>
                                        <li><a href="3720">撓</a></li>
                                        <li><a href="3721">撥</a></li>
                                        <li><a href="3722">撕</a></li>
                                        <li><a href="3723">撩</a></li>
                                        <li><a href="3724">撈</a></li>
                                        <li><a href="11467">撎</a></li>
                                        <li><a href="11468">撊</a></li>
                                        <li><a href="11469">撝</a></li>
                                        <li><a href="11470">撌</a></li>
                                        <li><a href="11471">撟</a></li>
                                        <li><a href="11472">撬</a></li>
                                        <li><a href="11473">撳</a></li>
                                        <li><a href="11474">撠</a></li>
                                        <li><a href="11475">撅</a></li>
                                        <li><a href="11477">撦</a></li>
                                        <li><a href="11478">撜</a></li>
                                        <li><a href="11479">撨</a></li>
                                        <li><a href="11480">撏</a></li>
                                        <li><a href="11481">撙</a></li>
                                        <li><a href="11482">撣</a></li>
                                        <li><a href="11483">撐</a></li>
                                        <li><a href="11484">撑</a></li>
                                        <li><a href="11485">㩉</a></li>
                                        <li><a href="11486">㩌</a></li>
                                        <li><a href="11487">撇</a></li>
                                        <li><a href="11488">㩎</a></li>
                                        <li><a href="11495">擏</a></li>
                                        <li><a href="11499">撡</a></li>
                                        <li><a href="11254">㩃</a></li>
                                        <li><a href="11256">摰</a></li>
                                        <li><a href="kanjiy/19847">㨻</a></li>
                                        <li><a href="kanjiy/19848">㨼</a></li>
                                        <li><a href="kanjiy/19849">㩄</a></li>
                                        <li><a href="kanjiy/19850">㩅</a></li>
                                        <li><a href="kanjiy/19851">㩆</a></li>
                                        <li><a href="kanjiy/19852">㩇</a></li>
                                        <li><a href="kanjiy/19853">㩈</a></li>
                                        <li><a href="kanjiy/19854">㩊</a></li>
                                        <li><a href="kanjiy/19856">㩍</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts16">
                                   <h3 class="ttl_while"><a href="kakusu16">１６画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="1580">擁</a>
                                        </li>
                                        <li><a href="kanjiy/25344">擜</a></li>
                                        <li><a href="kanjiy/25345">擝</a></li>
                                        <li><a href="kanjiy/25346">擞</a></li>
                                        <li><a href="11372">擑</a></li>
                                        <li><a href="kanjiy/27176">㩘</a></li>
                                        <li><a href="kanjiy/15020">撆</a></li>
                                        <li><a href="kanjiy/15021">撉</a></li>
                                        <li><a href="kanjiy/15031">擃</a></li>
                                        <li><a href="kanjiy/15033">擈</a></li>
                                        <li><a href="kanjiy/15034">擓</a></li>
                                        <li><a href="kanjiy/15036">擙</a></li>
                                        <li><a href="11420">擕</a></li>
                                        <li><a href="3725">擒</a></li>
                                        <li><a href="3726">撼</a></li>
                                        <li><a href="3727">擅</a></li>
                                        <li><a href="3728">撻</a></li>
                                        <li><a href="3730">擂</a></li>
                                        <li><a href="5873">據</a></li>
                                        <li><a href="5874">擇</a></li>
                                        <li><a href="5927">擔</a></li>
                                        <li><a href="11489">擄</a></li>
                                        <li><a href="11490">撛</a></li>
                                        <li><a href="11492">擐</a></li>
                                        <li><a href="11493">擀</a></li>
                                        <li><a href="11494">撽</a></li>
                                        <li><a href="11496">撿</a></li>
                                        <li><a href="11497">擌</a></li>
                                        <li><a href="11498">擉</a></li>
                                        <li><a href="11500">撾</a></li>
                                        <li><a href="11501">擋</a></li>
                                        <li><a href="11502">擗</a></li>
                                        <li><a href="11504">擭</a></li>
                                        <li><a href="11260">擎</a></li>
                                        <li><a href="kanjiy/19855">㩋</a></li>
                                        <li><a href="kanjiy/19857">㩒</a></li>
                                        <li><a href="kanjiy/19859">㩔</a></li>
                                        <li><a href="kanjiy/19860">㩕</a></li>
                                        <li><a class="color1" href="931">操</a></li>
                                        <li><a href="kanjiy/19861">㩖</a></li>
                                        <li><a href="kanjiy/19862">㩗</a></li>
                                        <li><a href="kanjiy/19863">㩙</a></li>
                                        <li><a href="kanjiy/19864">㩚</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts17">
                                   <h3 class="ttl_while"><a href="kakusu17">１７画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/19869">㩢</a></li>
                                        <li><a class="color1" href="1421">擦</a>
                                        </li>
                                        <li><a class="color1" href="1651">擬</a>
                                        </li>
                                        <li><a class="color2" href="2704">擢</a>
                                        </li>
                                        <li><a href="kanjiy/27179">㩟</a></li>
                                        <li><a href="kanjiy/27844">𢷡</a></li>
                                        <li><a href="kanjiy/15038">擟</a></li>
                                        <li><a href="kanjiy/15039">擨</a></li>
                                        <li><a href="kanjiy/15040">擮</a></li>
                                        <li><a href="kanjiy/15044">攃</a></li>
                                        <li><a href="3729">擘</a></li>
                                        <li><a href="3731">擱</a></li>
                                        <li><a href="3732">擠</a></li>
                                        <li><a href="3733">擡</a></li>
                                        <li><a href="3735">擣</a></li>
                                        <li><a href="3736">擯</a></li>
                                        <li><a href="11476">撍</a></li>
                                        <li><a href="6192">擧</a></li>
                                        <li><a href="6360">擤</a></li>
                                        <li><a class="color2" href="6438">擊</a>
                                        </li>
                                        <li><a href="11505">擩</a></li>
                                        <li><a href="11506">擰</a></li>
                                        <li><a href="11263">擫</a></li>
                                        <li><a href="kanjiy/19858">㩓</a></li>
                                        <li><a href="kanjiy/19865">㩛</a></li>
                                        <li><a href="kanjiy/19866">㩝</a></li>
                                        <li><a href="kanjiy/19867">㩞</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts18">
                                   <h3 class="ttl_while"><a href="kakusu18">１８画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/19868">㩡</a></li>
                                        <li><a href="kanjiy/19870">㩣</a></li>
                                        <li><a href="kanjiy/19871">㩤</a></li>
                                        <li><a href="kanjiy/19872">㩥</a></li>
                                        <li><a href="kanjiy/19873">㩦</a></li>
                                        <li><a href="kanjiy/19874">㩨</a></li>
                                        <li><a href="kanjiy/19875">㩩</a></li>
                                        <li><a href="kanjiy/19876">㩪</a></li>
                                        <li><a href="2583">擾</a></li>
                                        <li><a href="kanjiy/27180">㩫</a></li>
                                        <li><a href="kanjiy/15041">擳</a></li>
                                        <li><a href="kanjiy/15042">擹</a></li>
                                        <li><a href="kanjiy/15043">擼</a></li>
                                        <li><a href="kanjiy/15045">攆</a></li>
                                        <li><a href="3737">擲</a></li>
                                        <li><a href="3738">擺</a></li>
                                        <li><a href="3739">擽</a></li>
                                        <li><a href="3742">攅</a></li>
                                        <li><a href="5928">擴</a></li>
                                        <li><a href="6194">擶</a></li>
                                        <li><a href="11503">攂</a></li>
                                        <li><a href="11507">擷</a></li>
                                        <li><a href="11508">擻</a></li>
                                        <li><a href="11509">攄</a></li>
                                        <li><a href="11510">擿</a></li>
                                        <li><a href="11511">㩧</a></li>
                                        <li><a href="11512">㩠</a></li>
                                        <li><a href="11513">攁</a></li>
                                        <li><a href="11515">擸</a></li>
                                        <li><a href="11258">擵</a></li>
                                        <li><a href="11262">擪</a></li>
                                        <li><a href="11265">㩜</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts19">
                                   <h3 class="ttl_while"><a href="kakusu19">１９画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/19877">㩬</a></li>
                                        <li><a href="kanjiy/19878">㩭</a></li>
                                        <li><a href="kanjiy/19880">㩰</a></li>
                                        <li><a href="kanjiy/15046">攇</a></li>
                                        <li><a href="kanjiy/15047">攋</a></li>
                                        <li><a href="kanjiy/15048">攍</a></li>
                                        <li><a href="kanjiy/15049">攎</a></li>
                                        <li><a href="3740">攀</a></li>
                                        <li><a href="11514">攊</a></li>
                                        <li><a href="11516">攉</a></li>
                                        <li><a href="11517">攌</a></li>
                                        <li><a href="11518">攈</a></li>
                                        <li><a href="11520">攐</a></li>
                                        <li><a href="11521">攏</a></li>
                                        <li><a href="11264">擥</a></li>
                                        <li><a href="11529">攑</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts20">
                                   <h3 class="ttl_while"><a href="kakusu20">２０画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/19879">㩯</a></li>
                                        <li><a href="kanjiy/19882">㩲</a></li>
                                        <li><a href="kanjiy/25347">攚</a></li>
                                        <li><a href="kanjiy/15050">攗</a></li>
                                        <li><a href="3741">攘</a></li>
                                        <li><a href="11522">攖</a></li>
                                        <li><a href="11524">攓</a></li>
                                        <li><a href="11525">攙</a></li>
                                        <li><a href="11526">攕</a></li>
                                        <li><a href="11527">攔</a></li>
                                        <li><a href="11528">㩮</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts21">
                                   <h3 class="ttl_while"><a href="kakusu21">２１画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/19881">㩱</a></li>
                                        <li><a href="kanjiy/19883">㩴</a></li>
                                        <li><a href="5875">攜</a></li>
                                        <li><a class="color2" href="6191">攝</a>
                                        </li>
                                        <li><a href="11530">攛</a></li>
                                        <li><a href="11531">㩳</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts22">
                                   <h3 class="ttl_while"><a href="kakusu22">２２画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/25348">攧</a></li>
                                        <li><a href="kanjiy/15051">攠</a></li>
                                        <li><a href="11456">攡</a></li>
                                        <li><a href="3743">攤</a></li>
                                        <li><a href="6492">攢</a></li>
                                        <li><a href="11519">攟</a></li>
                                        <li><a href="11532">攞</a></li>
                                        <li><a href="11533">攦</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts23">
                                   <h3 class="ttl_while"><a href="kakusu23">２３画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/19884">㩵</a></li>
                                        <li><a href="kanjiy/19885">㩶</a></li>
                                        <li><a href="2241">攪</a></li>
                                        <li><a href="kanjiy/27181">㩷</a></li>
                                        <li><a href="kanjiy/15052">攥</a></li>
                                        <li><a href="3744">攣</a></li>
                                        <li><a href="3745">攫</a></li>
                                        <li><a href="11535">攩</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts24">
                                   <h3 class="ttl_while"><a href="kakusu24">２４画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="11536">攭</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts25">
                                   <h3 class="ttl_while"><a href="kakusu25">２５画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/19886">㩸</a></li>
                                        <li><a href="kanjiy/27182">㩹</a></li>
                                        <li><a href="3746">攬</a></li>
                                        <li><a href="11537">攮</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts26">
                                   <h3 class="ttl_while"><a href="kakusu26">２６画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/15053">攨</a></li>
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
                                             <option value="radical64">English</option>
                                             <option value="bushu04005">Japanese</option>
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

<!-- Mirrored from bushu04005 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Nov 2023 00:40:13 GMT -->

</html>